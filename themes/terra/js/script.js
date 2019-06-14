(function ($) {

    $(function () {
        
        // humber menu mobile header
        var $hamburger = $('.hamburger');
        $hamburger.on('click', function (e) {
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
            console.log('submitted');
            $('.subscription').addClass('active')
            $(this).find('subscription-form').slideUp('slow');
            $('.subscription-confirmed').show.slideUp(1000);
            $('.subscribe-description').hide;
            $('.wpcf7-mail-sent-ok').hide;

        });





    });// end of document ready

})(jQuery);