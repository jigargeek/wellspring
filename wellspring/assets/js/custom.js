jQuery(document).ready(function ($) {

    var window_size = jQuery(window).width();
    new WOW().init();

    jQuery('.datetimepicker').datetimepicker({
        timepicker: false,
        format: 'd/m/Y',
		minDate: new Date(),
		scrollInput: false
    });

    var currentRequest = null;
    jQuery(".gallery-tabing-list li span").on("click", function () {
        if ($(this).hasClass("active")) {
            return;
        }
        jQuery(".gallery-tabing-list li span").removeClass('active');
        jQuery(this).addClass('active');
        var slug = jQuery(this).attr('id');
        //jQuery(".gallery-loader").css("display", "flex");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'gallery_tabbing',
                'id': slug,
            },
            dataType: 'html',
            success: function (data) {
                jQuery(".gallery-slider").slick('unslick');
                jQuery(".gallery-slide-wp").html(data);
                // jQuery(".gallery-loader").css("display", "none");
                gallery_slider();
            }
        });

    });

    jQuery(".team-tabing-list li span").on("click", function () {
        if($(this).hasClass('active')){
            return;
        }
        let id = jQuery(this).attr('id');
        jQuery(".team-tabing-list li span").removeClass('active');
        jQuery(this).addClass('active');

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'team_tabbing',
                'id': id,
            },
            dataType: 'html',
            success: function (data) {
                console.log(data);
                // jQuery(".gallery-slider").slick('unslick');
                jQuery(".team-member-content-box").html(data);
                // // jQuery(".gallery-loader").css("display", "none");
                // gallery_slider();
            }
        });

    });


    /* Home Page accordion */
    jQuery('.who-we-work-accordion .who-we-work-accordion-text').hide();
    jQuery('.who-we-work-accordion > div:eq(0) h5').addClass('active-content');
    //jQuery('.who-we-work-accordion > div:eq(0) .who-we-work-accordion-text').slideDown();

    jQuery('.who-we-work-accordion h5').click(function (j) {
        var dropDown = jQuery(this).closest('div').find('.who-we-work-accordion-text');
        jQuery(this).closest('.who-we-work-accordion').find('.who-we-work-accordion-text').not(dropDown).slideUp();
        if (jQuery(this).hasClass('active-content')) {
            jQuery(this).removeClass('active-content');
        } else {
            jQuery(this).closest('.who-we-work-accordion').find('h5.active-content').removeClass('active-content');
            jQuery(this).addClass('active-content');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });


    jQuery('body').on("click", ".single-project-wp a", function(e){
        e.preventDefault();
        let getData = jQuery(".single-project-sec").data("post-id");
        let index = jQuery(this).data("project-no");
        jQuery(this).parent().addClass('single-project-active');

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            dataType: 'html',
            data: {
                action: 'modal_popup',
                href: getData,
            },
            success: function (res) {
                if(jQuery.trim(res) != ""){
                    jQuery(".modal.project-gallery-popup .project-slider").html(jQuery.trim(res));
                    project_slider(index);
                    jQuery('.single-project-wp').removeClass('single-project-active');
                    jQuery(".modal.project-gallery-popup").modal("show");
                }
            }
        });
    });

    let currentPage = 1;
    jQuery('#load-more').on('click', function() {
        currentPage++;
        jQuery(this).addClass("load-active");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            dataType: 'json',
            data: {
            action: 'load_more_paginate',
                paged: currentPage,
            },
            success: function (res) {
                jQuery('.main-project-wp').append(res.html);
                jQuery('#load-more').removeClass("load-active");
                if(jQuery('.main-project-wp').find('[data-last="true"]').length > 0) {
                    jQuery('#load-more').hide();
                }
            }
        });
    });

    jQuery('.wpcf7-form input[name="documents"]').change(function (e) {
        var resume_file = e.target.files[0];

        if (resume_file !== undefined) {
            var file_extension = resume_file.name.split('.').pop().toLowerCase();
            var file_size = resume_file.size;
            var actual_filesize = Math.round((file_size / 1024));

            if ($.inArray(file_extension, ['doc', 'docx', 'png', 'jpg', 'jpeg', 'pdf']) === -1) {
                jQuery('.input-file-text').text('');
            } else if (actual_filesize >= 5000) {
                jQuery('.input-file-text').text('');
            } else {
                jQuery('.input-file-text').text(e.target.files[0].name);
            }
        } else {
            jQuery('.input-file-text').text('');
        }
    });

    if (jQuery('.select-wrapper').length > 0) {
        document.querySelector('.select-wrapper').addEventListener('click', function () {
            this.querySelector('.select').classList.toggle('open');
        });

        window.addEventListener('click', function (e) {
            const select = document.querySelector('.select')
            if (!select.contains(e.target)) {
                select.classList.remove('open');
            }
        });
    }

    for (const option of document.querySelectorAll(".custom-option")) {
        option.addEventListener('click', function () {

            if(!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.select').querySelector('.select__trigger span').textContent = this.textContent;
                this.closest('.select').querySelector('.wpcf7-select').value = this.textContent;
            }
        })
    }

    //Home Page review section slider
    jQuery('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        rows: 0,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 2000,
            }
        }]
    });

    //Home Page gallery section slider
    jQuery('.gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,        
        dots: true,
        arrows: false,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false
            }
        }
        ]
    });
    
    jQuery('.client-slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,
        dots: false,
        arrows: false,
        swipeToSlide: true,
        centerMode: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false
            }
        }
        ]
    });

    jQuery('.home-project-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        rows: 0,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false
            }
        },
        ]
    });

    //gallery slider
    function project_slider(index){
        jQuery('.project-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true,
            rows: 0,
            initialSlide: index,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button class="slide-arrow prev-arrow"></button>',
            nextArrow: '<button class="slide-arrow next-arrow"></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false
                }
            },
            ]
        });
    }

    /* Scroll To Top JS */
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function () { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#main-menu .menu-item a").click(function () {
        jQuery("#site-navigation").removeClass("toggled");
    });

    jQuery('#project_gallery').on('hidden.bs.modal', function () {
        if(jQuery('.project-slider').hasClass('slick-initialized')) {
            jQuery('.project-slider').slick('unslick');
        }
        jQuery(window).scroll(function () { // this will work when your window scrolled.
            var height = jQuery(window).scrollTop(); //getting the scrolling height of window
            if (height < 100) {
                jQuery(".site-header").removeClass("sticky_head");
            }
        });
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

    /*Quote Modal open JS */
    jQuery("#project_gallery, #apply_now").on('show.bs.modal', function () {
        jQuery(window).scroll(function () { // this will work when your window scrolled.
            jQuery(".site-header").addClass("sticky_head");
        });
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });

    /*Quote Modal close JS */
    jQuery('#apply_now').on('hidden.bs.modal', function () {
        jQuery(window).scroll(function () { // this will work when your window scrolled.
            var height = jQuery(window).scrollTop(); //getting the scrolling height of window
            if (height < 100) {
                jQuery(".site-header").removeClass("sticky_head");
            }
        });
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

    /* SEO Page Read More JS */
    jQuery('#read-more').click(function () {
        jQuery('.excerpt-content').css({ 'max-height': 'unset' });
        jQuery(this).hide();
    });

    /*SEO Menu JS */
    jQuery('#view_all_services').click(function () {
        jQuery('.all-services').slideToggle(500);
        jQuery('.all-services').css('display', 'block');
    });

    /* CTA Button mobile js*/
    jQuery(window).scroll(function () {
        var window_size_scroll = jQuery(window).width();
        if (window_size_scroll <= 991) {
            if (jQuery(this).scrollTop() > 100) {
                jQuery(".cta-btn").fadeIn();
            } else {
                jQuery(".cta-btn").fadeOut();
            }
        }
    });

    if (window_size <= 991) {

        /* dropDown mobile menu */
        jQuery(".menu-item-has-children a").first().attr('href', 'javascript:void(0);');

        /* dropDown mobile menu show and hide */
        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function () {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        jQuery('.say-about-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            }]
        });

    }


});

/* after load JS */
jQuery(window).on('load', function () {
    // smooth scroll - change navigation link  JS
    jQuery("ul.menu li.menu-item").each(function () {
        var href = jQuery(this).find("a").attr("href");
        if (href.includes("#")) {
            if (href.substr(0, 1) == '#') {
                if (jQuery(href).length > 0) {
                    jQuery(this).find("a").first().attr("href", window.location.href.replace('#', '') + href);
                } else {
                    jQuery(this).find("a").first().attr("href", custom_call.homeurl + href);
                }
            }
        }
    });

    // fancy box stop slider JS
    jQuery().fancybox({
        selector: '[data-fancybox]',
        "afterShow": function () {
            jQuery('.slick-initialized').slick('slickPause');
        },

        "afterClose": function () {
            setTimeout(() => {
                jQuery('.slick-initialized').slick('slickPlay');
                jQuery("body").trigger("click");
            }, 1000);

        }
    });
});

/* Gallery Slider */
function gallery_slider() {
    jQuery('.gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,        
        dots: true,
        arrows: false,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false
            }
        }
        ]
    });
}