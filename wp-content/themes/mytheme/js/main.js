+ function ($) {
  'use strict';

  $(window).on('load', function () {

    $(document).foundation()
    
    console.log('>> Foundation Loaded');

    $('[data-sendemail]').submit( function( e ) {
      
      e.preventDefault();
      var request = $(this).serialize();

      $.ajax({
        type        : 'POST',
        url         : wp.ajax_url,
        data        : request,
        dataType    : 'json',
        success     : function( response, textStatus, jqXHR ){
          console.log( 'SUCCESS AJAX ', response );
          if ( response.status === 'ok' ) {
            alert('Email enviado');
          }
        },
        error       : function(  jqXHR, textStatus, errorThrown ){
          console.log( 'ERROR AJAX', jqXHR, textStatus, errorThrown );
        }
      });

    }); // submit

  });

}(jQuery);