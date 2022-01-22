$(function ($) {
    "use strict";

    jQuery(document).ready(function () {


        //   magnific popup activation
        $('.play-video').magnificPopup({
            type: 'video'
        });

        $('.img-popup').magnificPopup({
            type: 'image'
        });

        // $('#faqModal').modal('show');

        // Product deal countdown
        $('[data-countdown]').each(function () {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function (event) {
                $this.html(event.strftime('<span>%D </span><span>Days, </span><span>%H:</span><span>%M:</span><span>%S</span>'));
            });
        });
        $('[data-countdown2]').each(function () {
            var $this = $(this),
                finalDate = $(this).data('countdown2');
            $this.countdown(finalDate, function (event) {
                $this.html(event.strftime('<p>%D : <span>Days</span></p> <p>%H : <span>Hours</span></p> <p>%M : <span>Minutes</span></p> <p>%S <span>Seconds</span></p>'));
            });
        });


        // Latest Winner Slider
        var $l_winner_slider = $('.l-winner-slider2');
        $l_winner_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                415: {
                    items: 4
                },
                576: {
                    items: 4
                },
                768: {
                    items: 5
                },
                992: {
                    items: 7
                },
                1200: {
                    items: 9
                },
                1920: {
                    items: 9
                }
            }
        });

        // Latest Winner Slider
        var $l_winner_slider2 = $('.l-winner-slider');
        $l_winner_slider2.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                768: {
                    items: 4
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        // Exclusive Lottery Slider
        var $ex_lottery_slider = $('.ex-lottery-slider');
        $ex_lottery_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        /** Product Details  carousel **/
        var $product_slider = $('.all-slider');
        $product_slider.owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 0,
            autoplay: false,
            items: 4,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 3
                },
                768: {
                    items: 4
                }
            }
        });

        // payment Slider
        var $method_slider = $('.method-slider');
        $method_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 0,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                500: {
                    items: 3
                },
                768: {
                    items: 5
                },
                992: {
                    items: 6
                },
                1200: {
                    items: 7
                },
                1920: {
                    items: 7
                }
            }
        });

        // testimonial-slider
        var $testimonial_slider = $('.testimonial-slider');
        $testimonial_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });


    });


    /*-------------------------------
        back to top
    ------------------------------*/
    $(document).on('click', '.bottomtotop', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 2000);
    });

    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        var $window = $(window);
        if ($window.scrollTop() > 0) {
            $(".header").addClass('nav-fixed');
        } else {
            $(".header").removeClass('nav-fixed');
        }

        /*---------------------------
            back to top show / hide
        ---------------------------*/
        var st = $(this).scrollTop();
        var ScrollTop = $('.bottomtotop');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        lastScrollTop = st;

    });

    $(window).on('load', function () {

        /*---------------------
            Preloader
        -----------------------*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
        var backtoTop = $('.back-to-top');
        /*-----------------------------
            back to top
        -----------------------------*/
        var backtoTop = $('.bottomtotop');
        backtoTop.fadeOut(100);

    });

});


// js our team
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtnCol");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtnCol2");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtnCol3");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtnCol4");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtnCol5");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction6() {
    var dots = document.getElementById("dots6");
    var moreText = document.getElementById("more6");
    var btnText = document.getElementById("myBtnCol6");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction7() {
    var dots = document.getElementById("dots7");
    var moreText = document.getElementById("more7");
    var btnText = document.getElementById("myBtnCol7");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction8() {
    var dots = document.getElementById("dots8");
    var moreText = document.getElementById("more8");
    var btnText = document.getElementById("myBtnCol8");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction9() {
    var dots = document.getElementById("dots9");
    var moreText = document.getElementById("more9");
    var btnText = document.getElementById("myBtnCol9");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function myFunction10() {
    var dots = document.getElementById("dots10");
    var moreText = document.getElementById("more10");
    var btnText = document.getElementById("myBtnCol10");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function copied() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }

  function copied2() {
    /* Get the text field */
    var copyText = document.getElementById("myInput2");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }

  function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
