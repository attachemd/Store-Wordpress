var $ = jQuery.noConflict();

$(document).ready(function () {

    /*========== NAVBAR TRANSPARENT TO SOLID ==========*/

    // $(window).scroll(checkScroll);

    // function checkScroll() {
    //     if ($(window).scrollTop() >= 300) {
    //         $('.navbar').addClass('solid');
    //     } else {
    //         $('.navbar').removeClass('solid');
    //     }
    // }

    /*========== ADD SOLID CLASS TO NAVBAR WHEN TOGGLED ==========*/

    // $('.navbar-toggler').click(forMobileCheckScroll);
    //
    // function forMobileCheckScroll() {
    //     // if($(window).scrollTop() < 300){
    //     //     $('nav.navbar').toggleClass('solid-toggle');
    //     // }
    //     $('nav.navbar').toggleClass('solid-toggle');
    // }
})

/*========== WAYPOINTS ANIMATION DELAY ==========*/
//Original Resource: https://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
$(function () { // a self calling function
    function onScrollInit(items, trigger) { // a custom made function
        items.each(function () { //for every element in items run function
            var osElement = $(this), //set osElement to the current
                osAnimationClass = osElement.attr('data-animation'), //get value of attribute data-animation type
                osAnimationDelay = osElement.attr('data-delay'); //get value of attribute data-delay time

            osElement.css({ //change css of element
                '-webkit-animation-delay': osAnimationDelay, //for safari browsers
                '-moz-animation-delay': osAnimationDelay, //for mozilla browsers
                'animation-delay': osAnimationDelay //normal
            });

            var osTrigger = (trigger) ? trigger : osElement; //if trigger is present, set it to osTrigger. Else set osElement to osTrigger

            osTrigger.waypoint(function () { //scroll upwards and downwards
                osElement.addClass('animated').addClass(osAnimationClass); //add animated and the data-animation class to the element.
            }, {
                triggerOnce: true, //only once this animation should happen
                offset: '70%' // animation should happen when the element is 70% below from the top of the browser window
            });
        });
    }

    onScrollInit($('.os-animation')); //function call with only items
    onScrollInit($('.staggered-animation'), $('.staggered-animation-container')); //function call with items and trigger
});

/*========== MEET THE TEAM CAROUSEL ==========*/
$(document).ready(function () { //when document(DOM) loads completely
    let obj = { //owlCarousel settings
        autoplay: true, //set to false to turn off autoplay and only use nav
        autoplayHoverPause: true, //set to false to prevent pausing on hover
        loop: true, //set to false to stop carousel after all slides shown
        autoplayTimeout: 8000, //time between transitions
        smartSpeed: 1200, //transition speed
        navSpeed: 1000, //transition speed when using dots/buttons
        nav: true,
        dots: true,
        responsive: { //set number of items shown per screen width
            0: {
                items: 1 //0px width and up display 1 item
            },
            768: {
                items: 3 //576px width and up display 2 items
            },
            992: {
                items: 4 //768px width and up display 3 items
            }
        }
    }
    $('#products-carousel').owlCarousel(obj);
    $('#products-carousel2').owlCarousel(obj);
});


$('.number-spinner>.ns-btn>a').click(function () {
    var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;

    if (btn.attr('data-dir') === 'up') {
        newVal = parseInt(oldValue) + 1;
    } else {
        if (oldValue > 1) {
            newVal = parseInt(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
});
$('.number-spinner>input').keypress(function (evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
});


