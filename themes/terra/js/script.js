<<<<<<< HEAD
(function($) {
  $(function() {
    // hamburger menu mobile header
    var $hamburger = $('.hamburger');
    $hamburger.on('click', function(e) {
      $hamburger.toggleClass('is-active');
      // Do something else, like open/close menu
    });

    // subscription form in footer
    $('#wpcf7-f108-o1').on('submit', function() {
      console.log('submitted');
      $('.subscription').addClass('active');
      $(this)
        .find('subscription-form')
        .slideUp('slow');
      $('.subscription-confirmed').show.slideUp(1000);
      $('.subscribe-description').hide;
      $('.wpcf7-mail-sent-ok').hide;
    });
  }); // end of document ready
})(jQuery);
=======
(function ($) {

    $(function () {

        // humber menu mobile header
        var $hamburger = $('.hamburger');
        $hamburger.on('click', function (e) {
            e.preventDefault();
            $hamburger.toggleClass('is-active');
            var dropdowns = document.getElementsByClassName('dropdown-content');
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        });

        // subscription form in footer
        $('#wpcf7-f108-o1').on('submit', function () {
            const emailInput = $('.subscription-area input[type="email"]');

            setTimeout(function(){
                if(emailInput.hasClass('wpcf7-not-valid')){
                    console.log('not valid');
                } else {
                    $('.subscription-area').addClass('active')
                    $('.subscription-form').slideUp('slow');
                    // $('.sub-confirm-msg').show('slow');
                }
            }, 500);
             
        });

    });// end of document ready

})(jQuery);
>>>>>>> bc8366e952398d1aaa9528e791f155519d6c8ea9
