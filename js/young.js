$(document).ready(function () {

    $(".close_form").click(function () {
        $(".form").removeClass("active");
        $("body, html").removeClass("no-scroll");
    });

    $(".hamburger").click(function () {
        $("#navbarNavDropdown, #logo").toggleClass("active");
        $("body, html").toggleClass("no-scroll");
        $("#wrapper-navbar").removeClass("scrolled-up").removeClass("scrolled-down");
    });

    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".form").removeClass("active");
            $("body, html").removeClass("no-scroll");
        }
    };


    /* Hamburger menu */
    let isOpen = false;

    /* Hamburger layers */
    const hamburgerTop = document.getElementsByClassName('hamburgerTop')[0];
    const hamburgerMiddle = document.getElementsByClassName('hamburgerMiddle')[0];
    const hamburgerBottom = document.getElementsByClassName('hamburgerBottom')[0];

    document.getElementsByClassName('hamburger')[0].addEventListener('click', toggle);

    function toggle() {
        if (isOpen) {
            hamburgerTop.classList.remove('open');
            hamburgerMiddle.classList.remove('open');
            hamburgerBottom.classList.remove('open');
            isOpen = false;
            return;
        }
        hamburgerTop.classList.add('open');
        hamburgerMiddle.classList.add('open');
        hamburgerBottom.classList.add('open');
        isOpen = true;
    }

});


document.addEventListener("DOMContentLoaded", function () {

    el_autohide = document.querySelector('#wrapper-navbar');

    // add padding-top to bady (if necessary)
    navbar_height = document.querySelector('#wrapper-navbar').offsetHeight;
    document.body.style.paddingTop = '0px';


    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function () {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
                el_autohide.classList.remove('scrolled-down');
                el_autohide.classList.add('scrolled-up');
            } else {
                el_autohide.classList.remove('scrolled-up');
                el_autohide.classList.add('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }

    window.addEventListener('scroll', myFunction);

    // Get the navbar
    var navbar = document.getElementById("wrapper-navbar");


    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition < 50) {
            navbar.classList.remove("scrolled-up");
            navbar.classList.remove("scrolled-down");
        } else {

        }
    }


    // if

});


$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 93
                }, 1000, function () {

                });
            }
        }
    });

window.onload = function () {
    var current = location.pathname;
    $('#nav li a').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
};


$(document).ready(function () {
    $('.home_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        fade: true,
        cssEase: 'linear',
        dots: false,
        arrows: false
    });
});

$(document).ready(function () {
    $('.client_slider').slick({
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        slidesToShow: 3,
        centerMode: false,
        dots: false,
        arrows: true,
        prevArrow: $('.client_left'),
        nextArrow: $('.client_right'),
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});

$(document).ready(function () {
    $('.bullet_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_bullet'),
        nextArrow: $('.next_bullet'),
        vertical: true,
        swipeToSlide: true,
        focusOnSelect: true,
    });
});

$(document).ready(function () {
    $('.work_at_slider').slick({
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        slidesToShow: 2,
        centerMode: false,
        dots: false,
        arrows: true,
        prevArrow: $('.client_left'),
        nextArrow: $('.client_right'),
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});

jQuery(document).ready(function () {
    function resizeForm() {
        var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
        if (width < 1024) {
            $(document).ready(function () {
                $('.mobile_img_slider').slick({
                    infinite: false,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    slidesToShow: 1,
                    dots: false,
                    prevArrow: $('.prev_slide_img'),
                    nextArrow: $('.next_slide_img'),
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ]
                });
            });

            $(document).ready(function () {
                $('.mobile_ing_slider').slick({
                    infinite: false,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    slidesToShow: 1,
                    dots: false,
                    prevArrow: $('.prev_slide'),
                    nextArrow: $('.next_slide'),
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ]
                });
            });

        } else {

        }
    }

    window.onresize = resizeForm;
    resizeForm();
});



const tl = new TimelineMax();


tl
    .from($(".intro_img"), 1, {
        height: 0,
        ease: "none"
    });



