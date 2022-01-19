jQuery(document).ready(function($) {
  
  var subscribeForm = $('.ld_subscribe_form');
  
  subscribeForm.each(function() {
    
    var sf = $(this);
    var response = sf.siblings('.ld_sf_response');
    var messageTimeout = null;
    
    sf.on( 'submit', function(e) {
      
      var email = jQuery(".ld_sf_email", sf);
      var emailVal = email.val();
      
      if ( emailVal == "" ) {
        email.focus();
        return false;
      } 
      
      sf.addClass('form-submitting');
      
      $.ajax({
        type: 'POST',
        url: ajax_liquid_mailchimp_form_object.ajaxurl,
        data: { 
          'action': 'add_mailchimp_user',
          'list_id': $('.ld_sf_list_id', sf).val(),
          'email': $('.ld_sf_email', sf).val(),
          'fname': $('.ld_sf_lname', sf).val(), 
          'lname': $('.ld_sf_fname', sf).val()
        },
        complete: function(jqXHR, status){
          sf.removeClass('form-submitting');
          response.html(jqXHR.responseText);
          messageTimeout = setTimeout(() => {
            response.html('');
            messageTimeout && clearTimeout(messageTimeout);
          }, 7000)
        },
        error: function( jqXHR, textStatus, errorThrown ) {
          console.log(jqXHR.status);
        }
      } );
      
      e.preventDefault();
      
    });
    
  });
  
});