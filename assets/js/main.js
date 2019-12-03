function backToScreen() {
    $('body').removeClass('search-open');
    $('.modal-header .close').trigger('click');
    $('.modal-header .close-msg').trigger('click');
    $('body').removeClass('show-menu');
    $('body').removeClass('show-request-form');
    $('body').removeClass('send-enquiry-form-open');
};

function modalClose() {
    $('.modal-header .close').trigger('click');
};

$('.mobile-request-form-btn').click(function() {
    if (!$('body').hasClass('show-request-form')) {
        $('body').addClass('show-request-form');
        $('.sr-form-conversation .btn').text('Submit');
    } else {
        $('body').removeClass('show-request-form');
    }
});
$('.num-apply').click(function() {
    $('.product-filters ul li').removeClass('showMenu');
});
$('.mobfiltr-btn').click(function() {
    $('body').addClass('mob-filtr-open');
});

$('.mobfltr-head .back-arw').click(function() {
    $('body').removeClass('mob-filtr-open');
});
$('.mobsort-btn').click(function() {
    $('body').addClass('mob-sort-open');
});

$('.mobsort-head .back-arw').click(function() {
    $('body').removeClass('mob-sort-open');
});
$('.cta-send-enquiry').click(function() {
    $('body').addClass('send-enquiry-form-open');
});
$(function() {
    // Slim Header///////////////////////////////////////////////////////
    var header = 0;

    function scrollHead() {
        if ($(document).scrollTop() > 100) {
            $('.msg-popup-sec').slideUp('slow');
            if (header == 0) {
                header = 1;
                $('html').addClass('slim');
            }
        } else {
            if (header == 1) {
                header = 0;
                $('html').removeClass('slim');
            }
        }
    }
    scrollHead();
    $(window).scroll(scrollHead);
    //Burger Menu////////////////////////////////////////////////////
    $('.main-nav ul li:has(ul)').addClass('submenu');
    $('.main-nav ul li:has(ul)').append("<i></i>");
    $('.main-nav ul i').click(function() {
        $(this).parent('li').toggleClass('open');
        $(this).parent('li').children('ul').slideToggle();
    })
    $('.mob-btn').click(function() {
        if (!$('body').hasClass('show-menu')) {
            $('body').addClass('show-menu');
        } else {
            $('body').removeClass('show-menu');
        }
    });

    $('.overlay').click(function() {
        if ($('body').hasClass('show-menu')) {
            $('body').removeClass('show-menu');
        }
    });

    // mobile-only

    function backToScreen() {
        $('body').removeClass('search-open');
        $('.modal-header .close').trigger('click');
    };

    function modalClose() {
        $('.modal-header .close').trigger('click');
    };
    // mobile-search//////////////////////////////////////////////////
    $('.mobile-search').click(function() {
        $('body').addClass('search-open');

    });

    // Desktop-only
    // bd-dropdown menu/////////////////////////////////////////////////////
    $('.ddmenu-wrap').click(function(evt) {
        evt.stopPropagation();
        $(this).siblings().removeClass('open');
        $(this).toggleClass('open');
    });
    $(document).click(function() {
        $('.ddmenu-wrap').removeClass('open');
        $('.product-filters ul li').removeClass('showMenu');
    });
    $('.login-menu').click(function(evt) {
        evt.stopPropagation();
        $(this).siblings().removeClass('open');
        $(this).toggleClass('open');
    });
    $(document).click(function() {
        $('.login-menu').removeClass('open');
    });
    // Filter menu//////////////////////////////////////////////////////////
    $(".product-filters ul li").click(function(evt) {
        evt.stopPropagation();
        $('.product-filters ul li').removeClass('showMenu');
        $(this).addClass('showMenu');
        $(this).toggleClass('selected');
    });
    $(".fltr-menu li").click(function(evt) {
        evt.stopPropagation();
        $(".fltr-menu li").removeClass('selected');
        $(this).addClass('selected');
    });
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        grid: true,
        values: [
            "0", "0.5 CR", "1 CR", "1.5 CR", "2 CR", "2.5 CR", "3 CR", "3.5 CR", "4 CR", "4.5 CR", "ANY"
        ],
        postfix: " CR",
        hide_min_max: false,
    });
    $input = 0;
    $('.minus').click(function() {
        var $input = $(this).parent().find('input');
        $inp_val = parseInt($input.val()) - 1
        if ($inp_val >= 10)
            $input.val($inp_val);
        else
            $input.val('0' + $inp_val);
        if ($inp_val < 1)
            $input.val('0' + 1);
        $input.change();
        return false;
    });
    $('.plus').click(function() {
        var $input = $(this).parent().find('input');
        $inp_val = parseInt($input.val()) + 1
        if ($inp_val >= 10)
            $input.val($inp_val);
        else
            $input.val('0' + $inp_val);
        $input.change();
        return false;
    });
    $('.num-clear').click(function() {
        document.getElementById("count-text").value = "0";
    });


    $('.fltr-content .left-sec li').click(function() {
        $('.fltr-content .left-sec li').removeClass('active-tab');
        $('.tab-itemctn').hide();
        $(this).addClass('active-tab');
        var activeTabAttr = '#' + $(this).attr('data-filter');
        $(activeTabAttr).show();

    })
    $('.tab-itemctn li').click(function() {
        $('.tab-itemctn li').removeClass('selected');
        $(this).addClass('selected');
    });


    //   if ($(window).width() > 768) {
    $('.sr-image-slider').slick({
        draggable: true,
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        speed: 900,
        infinite: true,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        touchThreshold: 100
    });
    //   }



    $('#bd-outer-slider1').slick({
        draggable: false,
        arrows: true,
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    centerMode: true,
                    infinite: true,
                    centerPadding: '60px',
                    slidesToShow: 2,
                    speed: 500,
                    variableWidth: false,
                    arrows: false
                }
            }, {
                breakpoint: 767,
                settings: {
                    centerMode: true,
                    infinite: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    speed: 500,
                    variableWidth: false,
                }
            }
        ]
    });
    $('#bd-outer-slider-3col').slick({
        draggable: false,
        arrows: false,
        dots: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    centerMode: true,
                    infinite: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    speed: 500,
                    variableWidth: false,
                    arrows: false
                }
            }, {
                breakpoint: 767,
                settings: {
                    centerMode: true,
                    infinite: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    speed: 500,
                    variableWidth: false,
                }
            }
        ]
    });
    $('.inner-slideimg').slick({
        draggable: true,
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    // page serch result ///////////////////////////////////////////////////////////
    $('#ws-mobbanner-slider').slick({
        draggable: false,
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        cssEase: 'linear',

    });
    $("#showmap").change(function() {
        $('#sr-results').addClass("overlay-open");

        setTimeout(function() {
            $('#sr-results').removeClass("overlay-open");
        }, 1200);

        if ($('#sr-results').hasClass("has-map")) {
            $('.showmap-text').text("Show Map");
        } else {
            $('.showmap-text').text("Close Map");
        }
        $("#sr-results").toggleClass("col-sm-8 has-map col-sm-12");
        $(".map-section").toggleClass("show-map hide-map").toggle();
        $('.sr-image-slider').slick('refresh');
    });

    $(".menu_items li").click(function() {
        $(this).parent().addClass("active");
    });

    // product-deatils page /////////////////////////////////////////////////////////
    $('.moreless-button').click(function() {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });

    $(".tab-content").hide();
    $(".tab-content:first").show();
    $("ul.tabs li").click(function() {
        $(".tab-content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        $("ul.tabs li a").removeClass("active");
        $(this).find('a').addClass("active");

        $(".tab-drawer-heading").removeClass("d_active");
        $(".tab-drawer-heading[rel^='" + activeTab + "']").addClass("d_active");
        $('.tab-content-prod-result .sr-image-slider').slick('refresh');
    });
    $(".tab-drawer-heading").click(function() {
        $(".tab-content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).fadeIn();

        $(".tab-drawer-heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
        $('.tab-content-prod-result .sr-image-slider').slick('refresh');
    });
    $('ul.tabs li').last().addClass("tab_last");

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        return (elemTop <= docViewBottom);
    }

    function load_animation() {
        $('.sr-row>.sr-col').each(function(i, e) {
            if (isScrolledIntoView(this) === true) {
                setTimeout(function() {
                    $(e).addClass('animation2');
                }, 20 * i);
            }
        });
    }
    load_animation();
    $('#sr-results').scroll(function() {
        load_animation();
    });
    $(document).scroll(function() {
        load_animation();
    });
    $("#showmap").change(function() {
        load_animation();
        $('.sr-image-slider').slick('refresh');
    });

    /** msg popup close **/
    $(document).on("click", ".close-msg", function() {
        $(this).parent('.msg-popup-sec').slideUp();
    });


    // Telephone input
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@15.0.2/build/js/utils.js",
    });
    window.iti = iti;

    // ul li select
    $(".list-unstyled").on("click", ".init", function() {
        $(this).closest(".list-unstyled").children('li:not(.init)').toggle();
        $('.drop-down-bd').toggleClass('open');
    });

    var allOptions = $(".list-unstyled").children('li:not(.init)');
    $(".list-unstyled").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $(".list-unstyled").children('.init').html($(this).html());
        allOptions.toggle();
        $('.drop-down-bd').removeClass('open');
    });

    //datepicker bootstrap

    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $(document).on("click", ".date-picker", function() {
        $(".list-unstyled").addClass("show-date-picker");
        $(".gj-datepicker").addClass("show-date");
        $('.datepicker').focus();
    });
    $(document).on("click", ".show-date-picker .init", function() {
        $(".list-unstyled").removeClass("show-date-picker");
        $(".gj-datepicker").removeClass("show-date");
    });
    $('.modal').on('hidden.bs.modal', function() {
        $(".gj-datepicker").removeClass("show-date");
    });

    /** msg popup close **/
    $(document).on("click", ".close-msg", function() {
        $(this).parent('.msg-popup-sec').slideUp();
    });


    //image gallery popup slider
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: true,
        asNavFor: '.slider-nav',
        dotsClass: 'custom_paging',
        customPaging: function(slider, i) {
            return (i + 1) + '/' + slider.slideCount;
        }
    });
    $('.slider-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 6
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                arrows: false
            }
        }]

    });

    // You tube
    $(document).on('click', '.js-videoPoster', function(e) {
        e.preventDefault();
        var poster = $(this);
        var wrapper = poster.closest('.js-videoWrapper');
        videoPlay(wrapper);
    });

    function videoPlay(wrapper) {
        var iframe = wrapper.find('.js-videoIframe');
        var src = iframe.data('src');
        wrapper.addClass('videoWrapperActive');
        iframe.attr('src', src);
    }

    // Suggession box
    $("#top-search").keyup(function() {
        if ($(this).val() != "") {
            $('#suggested-box').fadeIn();
            $('#suggested-box .sr-image-slider').slick('refresh');
        } else {
            $('#suggested-box').fadeOut();
        }
    });
    // image gallery slick bug fixing
    $('#image-gallery').on('shown.bs.modal', function() {
        $('.slick-slider').slick('refresh');
        $('.bd-header').css('z-index', '99999');
    });

    /** slide down review form **/
    $('.post-btn').click(function() {
        $('.add-review').slideDown(500);;
        $(this).hide();
    });
    $('.post-submit').click(function(e) {
        e.preventDefault();
        $('.add-review').slideUp(500);;
        $('.post-btn').show();
    });
    // Hourly Monthly Yearly Membership price changed 
    $('.ws-service-list .ser-lists li').click(function() {
        $('.ws-service-list .ser-lists li').removeClass('active');
        $(this).addClass('active');
        var PriceValue = $(this).attr('datapricevalue');
        $('.ser-price-value').text(PriceValue);
    });
    /** rating star **/
    $(document).on({
        mouseover: function(event) {
            $(this).find('.far').addClass('star-over');
            $(this).prevAll().find('.far').addClass('star-over');
        },
        mouseleave: function(event) {
            $(this).find('.far').removeClass('star-over');
            $(this).prevAll().find('.far').removeClass('star-over');
        }
    }, '.rate');


    $(document).on('click', '.rate', function() {
        if (!$(this).find('.star').hasClass('rate-active')) {
            $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
            $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
            $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
        }
    });


    // Password-toggle
    $('body').on('click', '.toggle-password', function() {
        $('.tgl-password input').attr('type', 'password');
        if (!$('tgl-password').hasClass('tgl-show-pasword')) {
            $(this).parent('.tgl-password').toggleClass('tgl-show-pasword');
            $('.tgl-show-pasword input').attr('type', 'text');
        }
    });
    var open = false;
    $('.share-btn').on('click', function() {
        if (open === false) {
            $('.outer-icons').addClass('shareicon-show');
            $('.outer-icons').animate({
                opacity: 1
            }, 300);

            open = true;
        } else {
            $('.outer-icons').removeClass('shareicon-show');
            $('.outer-icons').animate({
                opacity: 0
            }, 300);
            open = false;
        }

    });
}); //Document Close

$(function() {
    $('#slick').on('init', function(event, slick) {
            $(this).append('<div class="slick-counter"><span class="current"></span> / <span class="total"></span></div>');
            $('.current').text(slick.currentSlide + 1);
            $('.total').text(slick.slideCount);
        })
        .slick({
            // option here...
        })
        .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $('.current').text(nextSlide + 1);
        });
});