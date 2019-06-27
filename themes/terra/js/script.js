(function($) {
  $(function() {
    // hamburger menu mobile header
    var $hamburger = $('.hamburger');
    $hamburger.on('click', function() {
      $hamburger.toggleClass('is-active');
      // Do something else, like open/close menu
    }); //slide nav open
    var $nav = $('nav');
    $nav.on('click', function() {
      $nav.toggleClass('nav');
    }); // end of hamburger menu

    // subscription form in footer
    const subscriptionForm = document.querySelector(
      '.subscription-form .wpcf7'
    );

    if (subscriptionForm) {
      subscriptionForm.addEventListener(
        'wpcf7mailsent',
        function() {
          $('.subscription-area').addClass('active');
          $('.subscription-form').fadeOut('slow');
          $('.sub-confirm-section').fadeIn('slow');
        },
        false
      );
    } // end of subscription form

    // contact form in contact-us page
    const contactForm = document.querySelector('.page-contact-us .wpcf7');

    if (contactForm) {
      contactForm.addEventListener(
        'wpcf7mailsent',
        function() {
          $('.contact-form-border').addClass('sent-out-msg');
          $('.original-form').fadeOut('slow');
          $('.msg-sent-border').fadeIn('slow');
        },
        false
      );
    } // end of contact form

    /**
     * Team member popup
     */
    // close modal window
    function closeModal(event) {
      const closeModalTriggers = '.team-modal__close-btn, .team-modal';
      // only close the modal if an element being clicked matches closeModalTriggers
      if (event.target.matches(closeModalTriggers)) {
        $('.team-modal').removeClass('team-modal--active');
      }
    }

    if ($('.team-modal').length) {
      $('.member-detail-arrow').on('click', function(event) {
        event.preventDefault();
        console.log(
          $(this)
            .parent()
            .next('.team-modal')
        );
        $(this)
          .parent()
          .parent()
          .find('.team-modal')
          .toggleClass('team-modal--active');
      });
      // click event added to body
      $('body').on('click', closeModal);
    } // end of team member popup

    //start of scroll function.
    const elemInView = $('.in-view');

    $(window).scroll(function() {
      let yPos = $(window).scrollTop();

      $.each(elemInView, function(index, value) {
        if (yPos > value.offsetTop - 400 && yPos < value.offsetTop - 250) {
          console.log(value.offsetTop);
          $(this).addClass('is-active');
        } else {
          $(this).removeClass('is-active');
        }
      });
    });
  }); // end of document ready
})(jQuery);
