# TERRA-MARS

This is our fifth and final project at Red Academy, implementing a unique UX/UI design created by fellow students. The client is beginning an aquaponics venture to profitably end world hunger and restore the earth's biodiversity. Our team of four created a Wordpress Custom Theme using the RedStarter Template. We have intentionally used Custom Field Suites to ensure our client will be able to update the website content often in future, without compromising the design esthetics.

## Technologies
Wordpress | PHP | WP Plugings | JQuery | HTML5 | CSS3 | Sass (CSS Preprocessors) | Git | Github | Gulp |FontFace | Custom Field Suite

### Launch/Project Status/Goals
The official client website launch will be at some point in the future. Currently the website is hosted https://terra.van.cp.academy.red/. 

A key goal was to implement animation to the key photographic icon for the front page, aquaponics page and also on the 404.

Show code for animation here:

### Scope of functionalities
A custom WordPress Theme was created using PHP, and WordPress Template Tags and Hooks.

J-Query functions were used to: 

- Open and close the hamburger menu
- Display a new background in the footer when you subscribe to the newsletter
- On completion of the contact form, display a pop-up window
- Show a pop-out feature, on-click for team members:

    /**
     * Team member popup
     */
    // close modal window
    function closeModal(event) {
      const closeModalTriggers = ".team-modal__close-btn, .team-modal";
      // only close the modal if an element being clicked matches closeModalTriggers
      if (event.target.matches(closeModalTriggers)) {
        $(".team-modal").removeClass("team-modal--active");
      }
    }

    if ($(".team-modal").length) {
      $('.member-detail-arrow').on("click", function(event) {
        event.preventDefault();
        console.log($(this).parent().next(".team-modal"));
        $(this).parent().parent().find(".team-modal").toggleClass("team-modal--active");
      });
      // click event added to body
      $("body").on("click", closeModal);
    }


### User Functionality
There was a strong emphasis to create a website that the client would be able to update and change in the future as their business evolved.  There is contact form and newsletter sign-up created in Contact 7 that automatically sends an email to the client with the email (and name on contact form).

### Media Query Break Point

Desktop 1120px and 620px for mobile

