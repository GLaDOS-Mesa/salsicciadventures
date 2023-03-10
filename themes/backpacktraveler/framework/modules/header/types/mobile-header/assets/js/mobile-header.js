(function ($) {
    "use strict";

    var mobileHeader = {};
    mkdf.modules.mobileHeader = mobileHeader;

    mobileHeader.mkdfOnDocumentReady = mkdfOnDocumentReady;
    mobileHeader.mkdfOnWindowResize = mkdfOnWindowResize;

    $(document).ready(mkdfOnDocumentReady);
    $(window).resize(mkdfOnWindowResize);

    /*
        All functions to be called on $(document).ready() should be in this function
    */
    function mkdfOnDocumentReady() {
        mkdfInitMobileNavigation();
        mkdfInitMobileNavigationScroll();
        mkdfMobileHeaderBehavior();
    }

    /*
        All functions to be called on $(window).resize() should be in this function
    */
    function mkdfOnWindowResize() {
        mkdfInitMobileNavigationScroll();
    }

    function mkdfInitMobileNavigation() {
        var navigationOpener = $('.mkdf-mobile-header .mkdf-mobile-menu-opener, .mkdf-close-mobile-side-area-holder');
        var navigationHolder = $('.mkdf-mobile-header .mkdf-mobile-side-area');
        var dropdownOpener = $('.mkdf-mobile-nav .mobile_arrow, .mkdf-mobile-nav h6, .mkdf-mobile-nav a[href*="#"]');
        var animationSpeed = 200;

        //whole mobile menu opening / closing
        if (navigationOpener.length && navigationHolder.length) {
            navigationOpener.on('tap click', function (e) {
                e.stopPropagation();
                e.preventDefault();

                if (navigationHolder.hasClass('opened')) {
                    navigationHolder.removeClass('opened');

                } else {
                    navigationHolder.addClass('opened');
                }
            });
        }

        //dropdown opening / closing
        if (dropdownOpener.length) {
            dropdownOpener.each(function () {
                $(this).on('tap click', function (e) {
                    var dropdownToOpen = $(this).nextAll('ul').first();

                    if (dropdownToOpen.length) {
                        e.preventDefault();
                        e.stopPropagation();

                        var openerParent = $(this).parent('li');
                        if (dropdownToOpen.is(':visible')) {
                            dropdownToOpen.slideUp(animationSpeed);
                            openerParent.removeClass('mkdf-opened');
                        } else {
                            dropdownToOpen.slideDown(animationSpeed);
                            openerParent.addClass('mkdf-opened');
                        }
                    }

                });
            });
        }

        $('.mkdf-mobile-nav a, .mkdf-mobile-logo-wrapper a').on('click tap', function (e) {
            if ($(this).attr('href') !== 'http://#' && $(this).attr('href') !== '#') {
                //navigationHolder.slideUp(animationSpeed);
            }
        });
    }

    function mkdfInitMobileNavigationScroll() {
        if (mkdf.windowWidth <= 1024) {
            var mobileHeader = $('.mkdf-mobile-header'),
                navigationHolder = mobileHeader.find('.mkdf-mobile-side-area-inner'),
                navigationHeight = navigationHolder.outerHeight(),
                windowHeight = mkdf.windowHeight - 100;

            //init scrollable menu
            var scrollHeight = navigationHeight > windowHeight ? windowHeight : navigationHeight;

            // navigationHolder.height(scrollHeight).perfectScrollbar({
            //     wheelSpeed: 0.6,
            //     suppressScrollX: true
            // });
	        if(navigationHolder.length) {
		        navigationHolder.height(scrollHeight);
		        mkdf.modules.common.mkdfInitPerfectScrollbar().init(navigationHolder);
	        }
        }
    }

    function mkdfMobileHeaderBehavior() {
        var mobileHeader = $('.mkdf-mobile-header'),
            mobileMenuOpener = mobileHeader.find('.mkdf-mobile-menu-opener'),
            mobileHeaderHeight = mobileHeader.length ? mobileHeader.outerHeight() : 0,
            navigationHolder = $('.mkdf-mobile-header .mkdf-mobile-side-area');

        if (mkdf.body.hasClass('mkdf-content-is-behind-header') && mobileHeaderHeight > 0 && mkdf.windowWidth <= 1024) {
            $('.mkdf-content').css('marginTop', -mobileHeaderHeight);
        }

        if (mkdf.body.hasClass('mkdf-sticky-up-mobile-header')) {
            var stickyAppearAmount,
                adminBar = $('#wpadminbar');

            var docYScroll1 = $(document).scrollTop();
            stickyAppearAmount = mobileHeaderHeight + mkdfGlobalVars.vars.mkdfAddForAdminBar;

            $(window).scroll(function () {
                var docYScroll2 = $(document).scrollTop();

                if (docYScroll2 > stickyAppearAmount && !navigationHolder.hasClass('opened')) {
                    mobileHeader.addClass('mkdf-animate-mobile-header');
                } else {
                    mobileHeader.removeClass('mkdf-animate-mobile-header');
                }

                if (((docYScroll2 > docYScroll1 && docYScroll2 > stickyAppearAmount) || (docYScroll2 < stickyAppearAmount)) || navigationHolder.hasClass('opened') ) {
                    mobileHeader.removeClass('mobile-header-appear');
                    mobileHeader.css('margin-bottom', 0);

                    if (adminBar.length) {
                        mobileHeader.find('.mkdf-mobile-header-inner').css('top', 0);
                    }
                } else {
                    mobileHeader.addClass('mobile-header-appear');
                    mobileHeader.css('margin-bottom', stickyAppearAmount);
                }

                docYScroll1 = $(document).scrollTop();
            });
        }
    }

})(jQuery);