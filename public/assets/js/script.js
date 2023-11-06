(function ($) {

    "use strict";


    /*------------------------------------------
        = ALL ESSENTIAL FUNCTIONS
    -------------------------------------------*/

    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $(".navigation-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-holder .close-navbar");
        var body = $(".page-wrapper");

        openBtn.on("click", function () {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
                body.addClass("body-overlay");
            }
            return false;
        })

        closeBtn.on("click", function () {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            body.removeClass("body-overlay");
            return false;
        })
    }

    toggleMobileNavigation();


    // Function for toggle class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = $("#navbar > ul");

        if (windowWidth <= 991) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    toggleClassForSmallNav();


    // Function for small menu
    function smallNavFunctionality() {
        var windowWidth = window.innerWidth;
        var mainNav = $(".navigation-holder");
        var smallNav = $(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function (e) {
                var $this = $(this);
                $this.siblings().slideToggle();
                e.preventDefault();
                e.stopImmediatePropagation();
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function () {
                var height = $(this).position().top;
                var resize = height - $(window).scrollTop();
                var doParallax = -(resize / 5);
                var positionValue = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }


    // heroSlider();
    // SLIDER
    var menu = [];
    jQuery('.swiper-slide').each(function (index) {
        menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
        loop: true,
        speed: 1000,
        parallax: true,
        autoplay: {
            delay: 6500,
            disableOnInteraction: false,
        },
        watchSlidesProgress: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },

            touchStart: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },

            setTransition: function (speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = $(".slide-bg-image");
    sliderBgSetting.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });



    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function () {

                //active wow
                wow.init();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
    });


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect: "elastic",
            closeEffect: "elastic",
            wrapCSS: "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function () {
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title': this.title,
                helpers: {
                    title: { type: 'inside' },
                    media: {}
                },

                beforeShow: function () {
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
                enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
    function sortingGallery() {
        if ($(".sortable-gallery .gallery-filters").length) {
            var $container = $('.gallery-container');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".gallery-filters li a").on("click", function () {
                $('.gallery-filters li .current').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }

    sortingGallery();


    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if ($('.masonry-gallery').length) {
            var $grid = $('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            $grid.imagesLoaded().progress(function () {
                $grid.masonry('layout');
            });
        }
    }

    // masonryGridSetting();


    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.tp-site-header .navigation').length) {
        cloneNavForSticyMenu($('.tp-site-header .navigation'), "sticky-header");
    }

    var lastScrollTop = '';

    function stickyMenu($targetMenu, $toggleClass) {
        var st = $(window).scrollTop();
        var mainMenuTop = $('.tp-site-header .navigation');

        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scroll down
                $targetMenu.removeClass($toggleClass);

            } else {
                // active sticky menu on scroll up
                $targetMenu.addClass($toggleClass);
            }

        } else {
            $targetMenu.removeClass($toggleClass);
        }

        lastScrollTop = st;
    }



    /*------------------------------------------
        = Header search toggle
    -------------------------------------------*/
    if ($(".header-search-form-wrapper").length) {
        var searchToggleBtn = $(".search-toggle-btn");
        var searchContent = $(".header-search-form");
        var body = $("body");

        searchToggleBtn.on("click", function (e) {
            searchContent.toggleClass("header-search-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function () {
            searchContent.removeClass("header-search-content-toggle");
        }).find(searchContent).on("click", function (e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = Header shopping cart toggle
    -------------------------------------------*/
    if ($(".mini-cart").length) {
        var cartToggleBtn = $(".cart-toggle-btn");
        var cartContent = $(".mini-cart-content");
        var body = $("body");

        cartToggleBtn.on("click", function (e) {
            cartContent.toggleClass("mini-cart-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function () {
            cartContent.removeClass("mini-cart-content-toggle");
        }).find(cartContent).on("click", function (e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = FUNFACT
    -------------------------------------------*/
    if ($(".odometer").length) {
        $('.odometer').appear();
        $(document.body).on('appear', '.odometer', function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }

    /*------------------------------------------
            = POST SLIDER
        -------------------------------------------*/
    if ($(".post-slider".length)) {
        $(".post-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 500,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
            dots: false,
            items: 1
        });
    }

    /*------------------------------------------
        = PORTFOLIO SLIDER
    -------------------------------------------*/
    if ($(".project-slider").length) {
        $('.project-slider').slick({
            slidesToShow: 3,
            centerMode: true,
            centerPadding: "0px",
            speed: 500,
            prevArrow: '<i class="nav-btn nav-btn-lt ti-arrow-left"></i>',
            nextArrow: '<i class="nav-btn nav-btn-rt ti-arrow-right"></i>',

            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
    }

    /*------------------------------------------
            = TESTIMONIALS SLIDER S2
        -------------------------------------------*/
    if ($(".testimonials-slider").length) {
        $('.testimonial-content-active').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.testimonial-thumb-active'
        });
        $('.testimonial-thumb-active').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.testimonial-content-active',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-double-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-double-right"></i></button>',
            centerPadding: 0,
            responsive: [{
                breakpoint: 640,
                settings: {
                    arrows: false,
                }
            }]
        });
    }



    /*------------------------------------------
       = PARTNERS SLIDER
   -------------------------------------------*/
    if ($(".partners-slider").length) {
        $(".partners-slider").owlCarousel({
            autoplay: true,
            smartSpeed: 300,
            margin: 30,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },

                550: {
                    items: 3
                },

                992: {
                    items: 4
                },

                1200: {
                    items: 5
                }
            }
        });
    }

    /*------------------------------------------
       = FUNFACT
   -------------------------------------------*/
    if ($(".odometer").length) {
        $('.odometer').appear();
        $(document.body).on('appear', '.odometer', function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }


    $('.tp-payment-select .addToggle').on('click', function () {
        $('.payment-name').addClass('active')
        $('.tp-payment-option').removeClass('active')
    })


    $('.tp-payment-select .removeToggle').on('click', function () {
        $('.tp-payment-option').addClass('active')
        $('.payment-name').removeClass('active')
    });


    /*==========================================================================
            WHEN WINDOW SCROLL
        ==========================================================================*/
    $(window).on("scroll", function () {
        toggleBackToTopBtn();

    });

    /*------------------------------------------
          = BACK TO TOP BTN SETTING
      -------------------------------------------*/
    $("body").append("<a href='#' class='back-to-top'><i class='fa fa-angle-double-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function () {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true // Valid email format
                },
                phone: {
                    // required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true // Only digits allowed
                },
                address: {
                    // required: true,
                    minlength: 5 // Minimum address length
                },
                notes: {
                    required: true, // Make "notes" field required
                },
                note: {
                    required: true, // Make "notes" field required
                },
                subject: {
                    required: true,
                },
                authPdfFile: {
                    required: true,
                    accept: "application/pdf" // Only accept PDF files
                },
                targetMoney: {
                    required: true,
                    minValue: 50,
                },
            },
            messages: {
                name: "Please enter your name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address",
                },
                phone: {
                    required: "Please enter your phone number",
                    minlength: "Phone number must be exactly 10 digits",
                    maxlength: "Phone number must be exactly 10 digits",
                    digits: "Phone number can only contain digits",
                },
                address: {
                    required: "Please enter your address",
                    minlength: "Address must be at least {0} characters long", // {0} will be replaced with the minlength value
                },
                note: {
                    required: "Please enter the description",
                },
                notes: {
                    required: "Please enter the description",
                },
                authPdfFile: {
                    required: "Please upload the pdf file",
                    accept: "The file must be pdf",
                },
                targetMoney: {
                    minValue: "Minumun target is $50",
                }
            }
        });
    }




    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
    $(window).on('load', function () {

        preloader();

        //sliderBgSetting();

        toggleMobileNavigation();

        smallNavFunctionality();


    });



    /*==========================================================================
         WHEN WINDOW SCROLL
     ==========================================================================*/
    $(window).on("scroll", function () {

        if ($(".tp-site-header").length) {
            stickyMenu($('.tp-site-header .navigation'), "sticky-on");
        }

    });

    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function () {
        toggleClassForSmallNav();

        clearTimeout($.data(this, 'resizeTimer'));
        $.data(this, 'resizeTimer', setTimeout(function () {
            smallNavFunctionality();
        }, 200));

    });



})(window.jQuery);


// Delete event when the countdown reaches 0
function deleteCampaign(campaignId) {
    // Send AJAX request to delete the event
    $.ajax({
        type: 'DELETE',
        url: '/delete-campaign/' + campaignId,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            // Handle success, e.g., remove the event from the DOM
            console.log(response.message);
            // Optionally, you can also remove the event from the DOM here

        },
        error: function (error) {
            // Handle error, e.g., display an error message
            console.error('Error:', error.responseJSON.error);
        }
    });
}

// Start event countdown
$(document).ready(function () {
    // Loop through each countdown element
    $('.event-countdown').each(function () {
        var endDate = new Date($(this).data('end-date')).getTime(); // Get the end date as a timestamp
        var countdownElement = $(this); // Store the countdown element for later use

        // Update the countdown every second
        var countdownInterval = setInterval(function () {
            var now = new Date().getTime(); // Get the current date and time as a timestamp
            var timeLeft = endDate - now; // Calculate the time remaining

            // Check if the event has ended (current date >= end date)
            if (timeLeft <= 0) {
                clearInterval(countdownInterval); // Stop the countdown
                countdownElement.text('Event Ended');
                countdownElement.closest('.event-item').hide();

                // Delete the campaign when the countdown reaches 0
                var campaignId = countdownElement.data('campaign-id');
                deleteCampaign(campaignId);
            } else {
                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                // Display the countdown
                countdownElement.text(days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's');
            }
        }, 1000); // Update every second
    });
});

// Handle campaign image
let campaignImage = document.getElementById('campaignImage');
let createCampaignImage = document.querySelector('.createCampaignImage');

if (createCampaignImage) {
    createCampaignImage.onchange = () => {
        if (createCampaignImage.files.length > 0) {
            // Get the selected file
            let selectedFile = createCampaignImage.files[0];

            // Create a URL for the selected file
            let objectURL = URL.createObjectURL(selectedFile);

            // Set the src attribute of campaignImage to the objectURL
            campaignImage.src = objectURL;
        }
    }
}

/* ----------------------- Start Handle donation amount ----------------------- */
let packagesCount = document.getElementById('packageCount');
let packagePrice = document.querySelector('.package-price');
let addPackageBtn = document.querySelector('.addPackageBtn');
let removePackageBtn = document.querySelector('.decreasePackageBtn');
let priceDescription = document.getElementById('priceDesc');
let packagePriceInputValue = document.getElementById('package-price-input');
if(packagePriceInputValue) {
    packagePriceInputValue = document.getElementById('package-price-input').value
}

if (packagePrice && addPackageBtn && removePackageBtn) {

    // Handle add package button
    addPackageBtn.addEventListener('click', () => {
        packagesCount.textContent++;
        packagePrice.value = parseFloat((parseFloat(packagePrice.value) + parseFloat(packagePriceInputValue)));
        priceDescription.textContent = `Price: $${packagePrice.value}`;
    });

    // Handle remove package button
    removePackageBtn.addEventListener('click', () => {
        if (parseFloat(packagePrice.value - packagePriceInputValue) != 0) {
            packagesCount.textContent--;
            packagePrice.value = parseFloat(packagePrice.value - packagePriceInputValue);
            priceDescription.textContent = `Price: $${packagePrice.value}`;
        }
    });
}
/* ----------------------- End Handle donation amount ----------------------- */

// Start handle button type on donate campaign

let submitDonationBtn = document.getElementById('donateCampaign');
let mainCampaignInput = document.getElementById('donation_option1');
let maxCampaignMoney = document.getElementById('maxAmout');
let targetCampaignMoney = document.getElementById('targetMoney');
let raisedCampaignMoney = document.getElementById('raisdMoney');

let firstphone = document.getElementById('phone');
let firstAdress = document.getElementById('Adress');
let firstmessage = document.getElementById('message');

let phonePopup = document.getElementById('phonePopup');
let AdressPopup = document.getElementById('AdressPopup');
let messagePopup = document.getElementById('messagePopup');

if (submitDonationBtn && mainCampaignInput && maxCampaignMoney) {
    mainCampaignInput.addEventListener('keyup', () => {
        if (parseFloat(mainCampaignInput.value) > parseFloat(maxCampaignMoney.value)) {
            if (submitDonationBtn.getAttribute('type') !== 'button') {
                submitDonationBtn.setAttribute('type', 'button');
            }
            if (!submitDonationBtn.hasEventListener) {
                submitDonationBtn.addEventListener('click', buttonClickHandler);
                submitDonationBtn.hasEventListener = true;
            }
        } else {
            if (submitDonationBtn.getAttribute('type') !== 'submit') {
                submitDonationBtn.setAttribute('type', 'submit');
            }
            if (submitDonationBtn.hasEventListener) {
                submitDonationBtn.removeEventListener('click', buttonClickHandler);
                submitDonationBtn.hasEventListener = false;
            }
        }
    });

    function buttonClickHandler() {

        $('.popup').fadeIn();

        $('.closeBtn').click(function() {
            $('.popup').fadeOut();
            $('.popupCampaign').fadeOut();
        });

        $('.inner').click(function(e) {
            e.stopPropagation();
        })

        $('.popup').click(function() {
            $('.popup').fadeOut();
        })

        // popup Submit
        $('#popupMaxSubmit').click(function() {
            document.getElementById('donation_option1').value=maxCampaignMoney.value;
        });

        // popup More Campaign
        $('#popupMoreCampaign').click(function () {
            $('.popup').fadeOut();
            $('.popupCampaign').fadeIn();
            document.getElementById('phonePopup').value = firstphone.value;
            document.getElementById('AdressPopup').value = firstAdress.value;
            document.getElementById('messagePopup').value = firstmessage.value;
        });
        $('.innerCampaign').click(function (e) {
            e.stopPropagation();
        })

        $('.popupCampaign').click(function () {
            $('.popupCampaign').fadeOut();
        })

    }
}

// Handle disable campaign
let disableCampaignBtn = document.querySelector('.disableCampagin');

if(disableCampaignBtn) {
    disableCampaignBtn.style = "pointer-events: none";
    var banIcon = document.createElement('div');
    banIcon.innerHTML = `<i class="fa-solid fa-ban" style="color: #ff0000;"></i>`;
    disableCampaignBtn.appendChild(banIcon);
}

// Handle send mail to all button

