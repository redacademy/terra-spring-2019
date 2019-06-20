(function ($) {
  $(function () {

    // humber menu mobile header

    // hamburger menu mobile header
    var $hamburger = $('.hamburger');
    $hamburger.on('click', function () {
      $hamburger.toggleClass('is-active');
      // Do something else, like open/close menu
    }); //slide nav open
    var $nav = $('nav');
    $nav.on('click', function () {
      $nav.toggleClass('nav');
    }); // end of hamburger menu

    // subscription form in footer
    const subscriptionButton = $('#wpcf7-f108-o1')
   
    subscriptionButton.on('submit', function() {
      const emailInput = $('.subscription-area input[type="email"]');

      setTimeout(function() {
        const failMessage = $('.wpcf7-not-valid')

        if (emailInput.hasClass(failMessage)) {
        } else {
          $('.subscription-area').addClass('active');
          $('.subscription-form').fadeOut('slow');
          $('.sub-confirm-section').fadeIn('slow');
        }
      }, 500);
    }); // end of subscription form

    // contact form in contact-us page
    const contactForm = $('#wpcf7-f17-p13-o1')

    contactForm.on('submit', function() {
      const emailInput = $('.contact-us-form input[type="email"]');
      
      setTimeout(function() {
      
        if (emailInput.hasClass(failMessage)) {
        } else {
          $('.contact-form-border').addClass('sent-out-msg');
          $('.original-form').fadeOut('slow');
          $('.msg-sent-border').fadeIn('slow');
        }
      }, 500);
    }); // end of contact form
  }); // end of document ready
})(jQuery);
