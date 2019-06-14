(function($) {
  $(function() {
    // humber menu mobile header
    var $hamburger = $('.hamburger');
    $hamburger.on('click', function() {
      $hamburger.toggleClass('is-active');
      // Do something else, like open/close menu
    });

    // subscription form in footer
    $('#wpcf7-f108-o1').on('submit', function() {
      const emailInput = $('.subscription-area input[type="email"]');

      setTimeout(function() {
        if (emailInput.hasClass('wpcf7-not-valid')) {
          console.log('not valid');
        } else {
          $('.subscription-area').addClass('active');
          $('.subscription-form').slideUp('slow');
          // $('.sub-confirm-msg').show('slow');
        }
      }, 500);
    });
  }); // end of document ready
})(jQuery);
