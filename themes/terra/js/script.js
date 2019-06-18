(function($) {
  $(function() {
    // humber menu mobile header

    // hamburger menu mobile header
    var $hamburger = $('.hamburger');
    $hamburger.on('click', function() {
      $hamburger.toggleClass('is-active');
      // Do something else, like open/close menu
    }); //slide nav open
    var $nav = $('nav');
    $nav.on('click', function() {
      $nav.toggleClass('nav');
      $nav.toggleClass('w3-animate-right');
    }); // end of hamburger menu


    // subscription form in footer
    $('#wpcf7-f108-o1').on('submit', function() {
      const emailInput = $('.subscription-area input[type="email"]');

      setTimeout(function() {
        if (emailInput.hasClass('wpcf7-not-valid')) {
          console.log('not valid');
        } else {
          $('.subscription-area').addClass('active');
          $('.subscription-form').slideUp('slow');
          $('.sub-confirm-section').show('slow');
        }
      }, 500);
    }); // end of subscription form


    // contact form in contact-us page
    $('#wpcf7-f17-p13-o1').on('submit', function() {
     
      setTimeout(function() {
          $('.contact-form-border').addClass('active');
          $('.original-form').fadeOut('slow');
          $('.msg-sent-border').fadeIn('slow');
        
      }, 500);
    }); // end of contact form



  }); // end of document ready
})(jQuery);
