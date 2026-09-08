<?php
// Open http://localhost/shiva/smtp-test.php to test Gmail SMTP locally.
// Delete this file before putting the website on production.
$config = is_file(__DIR__ . '/smtp-config.php') ? require __DIR__ . '/smtp-config.php' : [];
header('Content-Type: text/plain; charset=UTF-8');

echo "Shiva Punch Art - Gmail SMTP diagnostic\n\n";
echo 'PHP: ' . PHP_VERSION . "\n";
echo 'OpenSSL: ' . (extension_loaded('openssl') ? 'ENABLED' : 'MISSING') . "\n";
echo 'SMTP host: ' . ($config['host'] ?? '(missing)') . "\n";
echo 'SMTP port: ' . ($config['port'] ?? '(missing)') . "\n";
echo 'SMTP username: ' . ($config['username'] ?? '(missing)') . "\n";
$pw = preg_replace('/\s+/', '', (string)($config['password'] ?? ''));
echo 'App Password configured: ' . (($pw !== '' && $pw !== 'PASTE_YOUR_16_CHARACTER_APP_PASSWORD_HERE') ? 'YES' : 'NO') . "\n\n";
if ($pw === '' || $pw === 'PASTE_YOUR_16_CHARACTER_APP_PASSWORD_HERE') {
    exit("RESULT: Add your Google App Password to smtp-config.php first.\n");
}
if (!extension_loaded('openssl')) exit("RESULT: PHP OpenSSL is missing. Enable extension=openssl in php.ini and restart Apache.\n");

$host = $config['host'] ?? 'smtp.gmail.com';
$attempts = [[587,'tls'],[465,'ssl']];
foreach ($attempts as [$port,$mode]) {
    echo "Trying $mode on port $port...\n";
    $errno=0;$errstr='';
    $target=($mode==='ssl'?'ssl://':'').$host.':'.$port;
    $ctx=stream_context_create(['ssl'=>['verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>true,'SNI_enabled'=>true,'peer_name'=>$host]]);
    $s=@stream_socket_client($target,$errno,$errstr,15,STREAM_CLIENT_CONNECT,$ctx);
    if (!$s) { echo "  CONNECT FAILED: ".($errstr?:$errno)."\n"; continue; }
    stream_set_timeout($s,20);
    $read=function()use($s){$r='';while(($l=fgets($s,2048))!==false){$r.=$l;if(preg_match('/^\d{3} /',$l))break;}return trim(preg_replace('/\s+/',' ',$r));};
    $cmd=function($c)use($s,$read){fwrite($s,$c."\r\n");return $read();};
    $g=$read(); echo "  GREETING: $g\n";
    $e=$cmd('EHLO localhost'); echo "  EHLO: $e\n";
    if ($mode==='tls') { $t=$cmd('STARTTLS'); echo "  STARTTLS: $t\n"; $ok=@stream_socket_enable_crypto($s,true,STREAM_CRYPTO_METHOD_TLS_CLIENT); echo '  TLS: '.($ok===true?'OK':'FAILED')."\n"; if($ok!==true){fclose($s);continue;} echo '  EHLO2: '.$cmd('EHLO localhost')."\n"; }
    $a=base64_encode("\0".($config['username']??'')."\0".$pw);
    $auth=$cmd('AUTH PLAIN '.$a); echo "  AUTH: $auth\n";
    if (str_starts_with($auth,'235')) { echo "\nRESULT: Gmail SMTP authentication SUCCESSFUL.\n"; fclose($s); exit; }
    fclose($s);
}
echo "\nRESULT: Gmail SMTP authentication failed. The AUTH line above contains the exact Gmail response.\n";
