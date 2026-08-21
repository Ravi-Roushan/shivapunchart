(function(){
  const launch=document.getElementById('shivaChatLauncher'), panel=document.getElementById('shivaChatPanel'), close=document.getElementById('shivaChatClose'), body=document.getElementById('shivaChatBody'), form=document.getElementById('shivaChatForm'), input=document.getElementById('shivaChatInput');
  if(!launch||!panel||!body) return;
  const answers={
    products:'We make 3D Emboss, Laser Dies, Pre Rubber Dies, Punch + Emboss Online, Label Dies, Sandwich Dies, Stripping/Blanking Dies, Creasing Plates, Foil Blocks, Emboss Dies, Micro Effect, Step Emboss and Braille Emboss.',
    office:'Office Address: S NO 223 CTS-2675 HISSA-687, Kharodi Marve Road, Malwani, Malad West, Nr Chheda Complex, Mumbai 400095.',
    factory:'Factory Address: Gala No: C-2, Shree Ganesh Ind Estate, Behind Sagar Hotel, Chinchoti, Devdal, Kaman, Vasai (East) – 401208.',
    contact:'Call +91 84335 38141 or +91 72089 30779. You can also chat on WhatsApp.'
  };
  const links={
    products:'our-product.html',
    office:'https://www.google.com/maps/search/?api=1&query=S+NO+223+CTS-2675+HISSA-687%2C+Kharodi+Marve+Road%2C+Malwani%2C+Malad+West%2C+Nr+Chheda+Complex%2C+Mumbai+400095',
    factory:'https://www.google.com/maps/search/?api=1&query=Gala+No+C-2+Shree+Ganesh+Ind+Estate+Behind+Sagar+Hotel+Chinchoti+Devdal+Kaman+Vasai+East+401208',
    contact:'contact.html'
  };
  function add(text,who){const el=document.createElement('div');el.className='shiva-bubble '+(who||'bot');el.textContent=text;body.appendChild(el);body.scrollTop=body.scrollHeight;}
  function setOpen(open){
    panel.classList.toggle('open', !!open);
    panel.setAttribute('aria-hidden', String(!open));
    launch.setAttribute('aria-expanded', String(!!open));
    if(open && input) setTimeout(()=>input.focus(),80);
  }
  function answer(text){const q=text.toLowerCase(); if(q.includes('product')||q.includes('service')||q.includes('die')) return answers.products; if(q.includes('office')||q.includes('address')) return answers.office; if(q.includes('factory')) return answers.factory; if(q.includes('contact')||q.includes('phone')||q.includes('call')||q.includes('email')||q.includes('whatsapp')) return answers.contact; return 'I can help with Products, Office Address, Factory Address and Contact. Try typing “products”, “office”, “factory” or “contact”.';}
  launch.addEventListener('click',e=>{e.stopPropagation();setOpen(!panel.classList.contains('open'));});
  close&&close.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();setOpen(false);});
  document.addEventListener('click',e=>{
    const btn=e.target.closest('[data-chat]');
    if(btn){
      const key=btn.dataset.chat;
      add(btn.textContent.trim(),'user');
      setTimeout(()=>{
        add(answers[key]||answer(btn.textContent),'bot');
        if(links[key]){
          const wrap=document.createElement('div'); wrap.className='shiva-chat-link-row';
          const a=document.createElement('a'); a.href=links[key]; a.target='_blank'; a.rel='noopener';
          a.textContent=key==='products'?'View Products':key==='office'?'Open Office Location':key==='factory'?'Open Factory Location':'Open Contact Page';
          wrap.appendChild(a); body.appendChild(wrap); body.scrollTop=body.scrollHeight;
        }
      },180); return;
    }
    if(panel.classList.contains('open')&&!panel.contains(e.target)&&!launch.contains(e.target))setOpen(false);
  });
  form&&form.addEventListener('submit',e=>{e.preventDefault();const text=(input.value||'').trim();if(!text)return;add(text,'user');input.value='';setTimeout(()=>add(answer(text),'bot'),220);});
  document.addEventListener('keydown',e=>{if(e.key==='Escape')setOpen(false);});
})();
