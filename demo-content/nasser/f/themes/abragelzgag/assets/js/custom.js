jQuery(window).on("load", function () {
    jQuery("#loading-mask").fadeOut("slow");
});



jQuery(document).ready(function () {

    jQuery('#hero-cover').parallaxs("0%", 0.5);

    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 150,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#fff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#f00"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.8,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.3,
                    "sync": false
                }
            },
            "size": {
                "value": 6,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 500,
                "color": "#fff",
                "opacity": 0.4,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "bottom",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": false,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 0.5
                    }
                },
                "bubble": {
                    "distance": 600,
                    "size": 4,
                    "duration": 0.3,
                    "opacity": 1,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

    jQuery(".btn-search").click(function () {
        jQuery('.hero-content').fadeToggle("slow");
        jQuery('.hero-content').toggleClass("active");
        jQuery('.box-search').fadeToggle("slow");
    });

    jQuery('.layer-parallax').parallax();

    var features_slider = jQuery('#features-slider');

    features_slider.owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        margin: 10,
        dots: false
    });

    jQuery('.nav-pills li ').click(function () {
        jQuery('.nav-pills li').removeClass('active-icon');
        jQuery(this).addClass('active-icon');
        features_slider.trigger('to.owl.carousel', [jQuery(this).index()]);
    });

    features_slider.on('changed.owl.carousel', function (event) {
        event.preventDefault();
        var index = event.item.index - 2;
        if (index == 4) {
            index = 0;
        }

        jQuery('.nav-pills li').removeClass('active-icon');

        jQuery('.nav-pills li[index-item="' + index + '"] a').trigger("click");

        jQuery('.nav-pills li[index-item="' + index + '"]').addClass('active-icon');
    });

    var apps = new Swiper('.apps-screenshots', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        loopFillGroupWithBlank: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 101,
            modifier: 3,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });

    var sites = new Swiper('.sites-screenshots', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        loopFillGroupWithBlank: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 186.5,
            modifier: 3,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });

    var logos = new Swiper('.logos-screenshots', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        loopFillGroupWithBlank: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 213,
            modifier: 3,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });

    var staff = new Swiper('.staff-slider', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        loopFillGroupWithBlank: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 95,
            modifier: 4,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });

    /* jQuery(".nav-works li").on("click", function () {
         reinitSwiper(apps);
         reinitSwiper(sites);
         reinitSwiper(works);
     });

     function reinitSwiper(swiper) {
         setTimeout(function () {
             swiper.update();
         }, 0);
     }
     */

    jQuery('#statistics').parallaxs("0%", 0.5);

   /* jQuery('#statistics').ripples({
        resolution: 712,
        dropRadius: 20,
        perturbance: 0.04,

    });*/

    if (jQuery("#counter").length) {
        var i = 0;
        jQuery(window).scroll(function () {
            var t = jQuery("#counter").offset().top - window.innerHeight;
            0 == i && jQuery(window).scrollTop() > t && (jQuery(".counter-value").each(function () {
                var t = jQuery(this), o = t.attr("data-count");
                jQuery({countNum: t.text()}).animate({countNum: o}, {
                    duration: 2e3, easing: "swing", step: function () {
                        t.text(Math.floor(this.countNum))
                    }, complete: function () {
                        t.text(this.countNum)
                    }
                })
            }), i = 1)
        });
    }

    function animation(item, trigger) {
        item.each(function () {
            var element = jQuery(this),
                animationClass = element.attr('data-animation-name'),
                animationCss = element.attr('data-animation-delay');

            element.css({
                '-webkit-animation-delay': animationCss + 's',
                '-moz-animation-delay': animationCss + 's',
                '-o-animation-duration': animationCss + 's',
                'animation-delay': animationCss + 's'
            });

            var trigger = (trigger) ? trigger : element;

            trigger.waypoint(function () {
                element.addClass('animated').addClass(animationClass);
            }, {
                triggerOnce: true,
                offset: '90%'
            });
        });
    }

    animation(jQuery('.animation'), jQuery('.trigger-animation-container'));


    jQuery('#select').change('change', function () {

        jQuery('a[href="#works_'+ jQuery(this).val() +'"]').trigger('click');



    });

    jQuery('.button-menu a').click(function () {
        jQuery('.primary-menu ul, .mirror').toggleClass('open');
        jQuery(this).toggleClass('open');
    });

    jQuery('.mirror').click(function () {
        jQuery('.primary-menu ul, .mirror').toggleClass('open');
        jQuery('.button-menu a').toggleClass('open');
    });

    jQuery('.box-about').matchHeight();

});










