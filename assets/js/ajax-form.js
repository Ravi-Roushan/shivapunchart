$(function() {
  var form = $('#contact-form');
  var formMessages = $('.ajax-response');
  var loader = $('.shiva-form-loading');
  if (!form.length) return;
  form.on('input', 'input[name="phone"]', function(){ this.value = this.value.replace(/\D/g,'').slice(0,10); });
  form.on('submit', function(e) {
    e.preventDefault();
    var phone = form.find('input[name="phone"]')[0];
    if (phone && !/^\d{10}$/.test(phone.value)) { phone.setCustomValidity('Enter exactly 10 digits.'); phone.reportValidity(); phone.setCustomValidity(''); return; }
    if (!form[0].checkValidity()) { form[0].reportValidity(); return; }
    loader.addClass('show').attr('aria-hidden','false');
    form.find('button[type="submit"]').prop('disabled', true).css('opacity','.7');
    formMessages.removeClass('success error').text('');
    $.ajax({type:'POST',url:form.attr('action'),data:form.serialize(),dataType:'json'})
      .done(function(){ window.location.href='thank-you.php'; })
      .fail(function(xhr){
        loader.removeClass('show').attr('aria-hidden','true');
        form.find('button[type="submit"]').prop('disabled', false).css('opacity','1');
        var msg='Oops! Your enquiry could not be sent. Please try again.';
        if(xhr.responseJSON && xhr.responseJSON.message) msg=xhr.responseJSON.message;
        formMessages.removeClass('success').addClass('error').text(msg);
      });
  });
});
