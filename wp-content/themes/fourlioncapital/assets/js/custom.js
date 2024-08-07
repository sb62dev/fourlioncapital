jQuery(document).ready(function () {

    jQuery('.cmnSlider').slick({
        infinite: false,
        arrows: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
    });

    jQuery(window).on("scroll", function () {
        AOS.init({
            duration: 1000,
            once: true
        });
    });

    jQuery(window).scroll(function () {

        var sticky = jQuery('.sticky-header'),
            scroll = jQuery(window).scrollTop();

        if ($(window).width() > 992) {
            if (scroll >= 250) {
                sticky.addClass('Sticky-fixed');
            } else {
                sticky.removeClass('Sticky-fixed');
            }
        }

    });

    jQuery('.navbar-toggler').on('click', function () {
        jQuery('body').addClass('scrl_fixed');
    });

    jQuery('.closeBtn a, .fixdNav .fixdNav-mid li a').on('click', function () {
        jQuery('body').removeClass('scrl_fixed');
    });

    const navLinks = document.querySelectorAll('.fixdNav .fixdNav-mid li a')
    const menuToggle = document.getElementById('collapsibleNavbar')
    const bsCollapse = new bootstrap.Collapse(menuToggle, {
        toggle: false
    })
    navLinks.forEach((l) => {
        l.addEventListener('click', () => {
            bsCollapse.toggle()
        })
    })

    jQuery(".smoth-scroll, .main-navigation li a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    jQuery(window).scroll(function () {
        var windscroll = jQuery(window).scrollTop();
        if (windscroll >= 100) {
            jQuery('.cmnSec').each(function (i) {
                if (jQuery(this).position().top <= windscroll + 100) {
                    jQuery('.main-navigation li .active').removeClass('active');
                    jQuery('.main-navigation li a').eq(i).addClass('active');
                }
            });

        } else {
            jQuery('.main-navigation li .active').removeClass('active');
        }

    }).scroll();
    
    jQuery('#errorMessage').hide();
    
    jQuery('#portalForm').on('submit', function(event) {
        event.preventDefault(); 

        var userId = jQuery('#userId').val().trim();
        var password = jQuery('#password').val().trim();
        var errorMessage = jQuery('#errorMessage');

        if (userId === '' || password === '') {
            // If either field is empty, do nothing (HTML5 required attribute handles this)
            return;
        }

        // Validate email format
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(userId)) {
            errorMessage.text('Please enter a valid email address.');
            errorMessage.show();
            return;
        }

        // Show the generic error message if both fields are filled correctly
        errorMessage.text('Your Email or Password is wrong.');
        errorMessage.show();
    });

    // Hide the error message when any input gains focus
    jQuery('#userId, #password').on('focus', function() {
        jQuery('#errorMessage').hide();
    });

});

jQuery(window).on("load", function () {
    new WOW().init();
}); 
