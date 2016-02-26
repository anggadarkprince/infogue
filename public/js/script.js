(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){

$(function () {

    // SMOOTH SCROLL---------------------------------------------------------------
    $(function () {
        $('a[href*="#"]:not([href="#"]):not([data-toggle="tab"]):not([data-toggle="collapse"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });


    // RATING ---------------------------------------------------------------------
    var rateMessage = ['WORST', 'BAD', 'GOOD', 'EXCELLENT', 'GREAT'];
    var lastMessage = $(".rating > .rate-message").text();

    renderRate();
    function renderRate() {
        $('.rating-wrapper').each(function () {
            var rating = $(this).data('rating');

            $(this).html("");

            for (var index = 0; index < 5; index++) {
                if (index < rating) {
                    $(this).append("<i class='fa fa-circle rated'></i>")
                }
                else {
                    $(this).append("<i class='fa fa-circle unrated'></i>")
                }
            }

            $(".rating > .rate-message").text(rateMessage[rating - 1]);
        });
    }

    $(".rating-wrapper.control i").click(function () {
        $(".rating-wrapper.control i")
            .removeClass('active')
            .removeClass('inactive');

        var rate = $(".rating-wrapper.control i").index($(this));
        $(".rating-wrapper.control i").removeClass('rated').removeClass('unrated');
        for (var i = 0; i < 5; i++) {
            if (i <= rate) {
                $(".rating-wrapper.control")
                    .children()
                    .eq(i)
                    .addClass('rated');
            }
            else {
                $(".rating-wrapper.control")
                    .children()
                    .eq(i)
                    .addClass('unrated');
            }
        }
        lastMessage = rateMessage[rate];
    });

    $(".rating-wrapper.control i").hover(function () {
        var rate = $(".rating-wrapper.control i").index($(this));
        for (var i = 0; i < 5; i++) {
            if (i <= rate) {
                $(".rating-wrapper.control")
                    .children()
                    .eq(i)
                    .addClass('active');
            }
            else {
                $(".rating-wrapper.control")
                    .children()
                    .eq(i)
                    .addClass('inactive');
            }
        }
        $(".rating > .rate-message").text(rateMessage[rate]);
    }, function () {
        $(".rating-wrapper.control i")
            .removeClass('active')
            .removeClass('inactive');
        $(".rating > .rate-message").text(lastMessage);
    });

    // PARALLAX EFFECT ------------------------------------------------------------
    $(window).stellar({responsive: true, horizontalScrolling: false});


    // EQUALIZE SOMETHING ---------------------------------------------------------
    $('.featured-list').equalize({equalize: 'height', children: '.featured-mini'});


    // FEATURED SLIDE SHOW --------------------------------------------------------
    var imagesFeatured = new Array();
    var position = 2;
    var tid;

    setLargeFeatured();

    $('.featured-mini img').each(function () {
        //console.log($(this).data("echo"));
        imagesFeatured.push($(this).data("echo"));
    });

    if (imagesFeatured.length > 0) {
        tid = setInterval(changeFeatured, 5000);
    }

    function changeFeatured() {
        if (imagesFeatured.length > 0) {
            setFeatured();

            position++;
            if (position > imagesFeatured.length) {
                position = 1;
            }
        }
    }

    function abortChangeFeatured() { // to be called when you want to stop the timer
        clearInterval(tid);
    }

    $(".slide").click(function () {
        position = $(".slide").index($(this)) + 1;
        changeFeatured();

        abortChangeFeatured();
        tid = setInterval(changeFeatured, 5000);
    });

    function setFeatured() {
        var imageSection = $(".featured-list div:nth-child(" + position + ")").find(".featured-mini");

        $(".featured-mini").removeClass("active");
        imageSection.addClass("active");

        var title = imageSection.find(".src-title").text();
        var category = imageSection.find(".src-category").text();
        var description = imageSection.find(".src-description").text();
        var image = imagesFeatured[position - 1];

        //console.log("change "+position);
        //console.log("title "+imageSection.find(".src-title").text());
        //console.log("category "+imageSection.find(".src-category").text());
        //console.log("description "+imageSection.find(".src-description").text());

        $(".slide-title").text(title);
        $(".slide-category").text(category);
        $(".slide-description").text(description);
        $('.featured-large .featured-image').data("featured", image);

        setLargeFeatured();
    }

    function setLargeFeatured() {
        var largeFeature = $('.featured-large .featured-image');
        var image = largeFeature.data('featured');

        largeFeature.css('opacity', 0);
        setTimeout(function () {
            largeFeature.css('opacity', 1);
        }, 300);

        largeFeature.css('content', ' ');
        largeFeature.css('background', "url('" + image + "') center center");
        largeFeature.css('background-size', 'cover');
    }


    // IMAGE LAZY LOADING ---------------------------------------------------------
    echo.init({
        offset: 50,
        throttle: 250,
        callback: function (element, op) {
            //console.log(element, 'has been', op + 'ed')
            $(element).css('opacity', '0');

            setTimeout(function () {
                if (op === 'load') {
                    changeClass($(element));
                    $(element).addClass('transition');
                    $(element).css('opacity', '1');
                }
            }, 150);
        }
    });

    $(window).resize(function () {
        $(".featured-image").each(function () {
            changeClass($(this).find('img'));
        });
    });

    function changeClass(element) {
        var containerRatio = element.parent().width() / element.parent().height();
        var imageRatio = element.width() / element.height();

        var imgClass = (imageRatio > 1) ? 'wide' : 'tall';

        if (imgClass == 'wide') {
            if (containerRatio > imageRatio) {
                //console.log('change to tall');
                imgClass = 'tall';
            }
        }
        else {
            if (containerRatio < imageRatio) {
                //console.log('change to wide');
                imgClass = 'wide';
            }
        }

        element.removeClass('tall')
            .removeClass('wide')
            .addClass(imgClass);
    }


    // TO TOP ---------------------------------------------------------------------
    $('footer').waypoint(function () {
        if ($(document).height() > 1500) {
            $('.to-top').toggleClass('visible');
        }
    }, {offset: '140%'});


    // BROWSER UPGRADE ------------------------------------------------------------
    $('.browserupgrade').waypoint(function () {
        $('.browserupgrade').toggleClass('bottom');
    }, {offset: "30"});


    // NICE SCROLL ----------------------------------------------------------------
    $("html").niceScroll({
        cursorcolor: '#4dc4d2',
        cursorborder: 'none'
    });

    /*
    $(".navigation").niceScroll({
        cursorcolor: '#6dd7e3',
        cursorborder: 'none',
        cursoropacitymax: 0,
        scrollspeed: 75,
        smoothscroll: false
    });


    $("#navigation").niceScroll({
        cursorcolor: '#6dd7e3',
        cursorborder: 'none',
        scrollspeed: 75,
        smoothscroll: false
    });
    */

    // STICKY STATIC NAV ----------------------------------------------------------
    if ($('.static-page').length) {
        var staticNav = new Waypoint({
            element: $('.static-nav'),
            handler: function () {
                $('.static-nav').toggleClass('sticky');
            },
            offset: 100
        });

        var topNavOffset = 0;

        var statisNavRelease = new Waypoint({
            element: $('.static-nav'),
            handler: function () {
                $('.static-nav').toggleClass('release');
                topNavOffset = $(window).scrollTop();
            },
            offset: -($('.static-page').height() - 500)
        })

        $(window).scroll(function () {
            if ($('.static-nav').hasClass('release')) {
                $('.static-nav').css('top', 40 - Math.abs(topNavOffset - $(window).scrollTop()));
            }
            else {
                topNavOffset = 0;
                $('.static-nav').removeAttr('style');
            }
        });
    }


    // ACCORDION ---------------------------------------------------------------------
    $("#accordion .panel-title a").click(function () {
        $("#accordion .panel-heading").removeClass('active');
        var heading = $(this).parent().parent();
        console.log(heading.attr('class'));
        if (heading.parent().find('.collapse.in').length) {
            heading.removeClass('active');
        }
        else {
            heading.addClass('active');
        }
    });

    // SUMMERNOTE -------------------------------------------------------------------
    if ($('.summernote').length) {
        $('.summernote').summernote({
            toolbar: [
                ['font', ['style']],
                ['style', ['bold', 'italic', 'underline']],
                ['para', ['ul', 'paragraph']],
                ['insert', ['picture', 'video', 'link']],
                ['misc', ['fullscreen']]
            ],
            placeholder: 'write here...',
            height: 200
        });
    }

    // FILE INPUT -------------------------------------------------------------------
    $('.file-input').change(function () {
        $(this).parent().find('.file-info').text($(this).val());
    });

    // CONVERSATION SCROLL ----------------------------------------------------------
    if($(".message-box").length){
        $(".message-box").scrollTop($(".message-box")[0].scrollHeight);
        $(".message-box").niceScroll({
            cursorcolor: '#4dc4d2',
            cursorborder: 'none'
        });
    }

    $("a[href='#']").click(function(e) {
        e.preventDefault();
    });




});

/**
 * Created by Workstation on 2/14/2016.
 */
$(function(){
    var isLarge = false;
    var isMedium = false;
    var isSmall = false;
    var isExtraSmall = false;

    var closed;
    var sticky;

    initSidebarMenu();
    initSlideMenu();

    setDevice();
    setLayout();

    $(window).resize(function () {
        setDevice();
        setLayout();
    });

    /**
     * recheck device width for update the variables
     */
    function setDevice(){
        var viewportWidth = $(window).width();
        isLarge = (viewportWidth >= 1200);
        isMedium = (viewportWidth >= 993 && viewportWidth <= 1199);
        isSmall = (viewportWidth >= 768 && viewportWidth <= 992);
        isExtraSmall = (viewportWidth <= 767);
    }

    /**
     * Navigation & breadcrumb on desktop / medium / large device
     */
    function initMegaMenu(){
        /**
         * init superfish plugin
         */
        $('#navigation').superfish({
            speed: 'fast',
            cssArrows: false,
            delay: 100
        });

        /**
         * make sure navigation is visible, in case it's invisible after table mode
         * if navigation is open on tablet mode then remove 'open' class
         */
        $("#navigation").show();
        if($("#navigation").hasClass("open")){
            $("#navigation").removeClass("open");
        }
    }

    function destroyMegaMenu(){
        $('#navigation').superfish('destroy');
    }


    /**
     * Navigation & breadcrumb on tablet / small device
     */
    function initSidebarMenu(){
        /**
         * slide effect when click on navigation toggle
         * animation duration 200ms and toggle class 'open' to set mark the navigation status
         */
        $(".navigation-toggle").click(function(){
            $("#navigation").stop(true).slideToggle(200);
            $("#navigation").toggleClass("open");
        });

        /**
         * Level 1 breadcrumb
         *
         * Mouse enter:
         * grab first level menu text and put it on breadcrumb dummy and remove 'blank' class
         * copy the same text on the fist level breadcrumb and set width based on dummy
         *
         * Mouse leave:
         * clear dummy content and set class with 'blank'
         * clear level 1 breadcrumb and set class with 'blank'
         */
        $('#navigation > li').hover(function(){
            var text = $(this).find("a").first().text();
            var wrapper = "<a href='#'>"+text+"</a>";
            $(".level-dummy").removeClass("blank");
            $(".level-dummy").html(wrapper);

            setTimeout(function(){
                $(".level-1").removeClass("blank");
                $(".level-1").html(wrapper);
                $(".level-1").css("width", $(".level-dummy").width());
            }, 0);
        }, function(){
            $(".level-dummy").addClass("blank");
            $(".level-dummy").html("");

            $(".level-1").addClass("blank");
            $(".level-1").html("");
            $(".level-1").css("width", "40px");
        });

        /**
         * Level 2 breadcrumb
         *
         * Mouse enter:
         * grab sub menu text after sidebar menu and put it on dummy breadcrumb stack
         * copy that into level 2 breadcrumb and set width based on dummy width
         *
         * Mouse leave:
         * clear dummy content and set 'blank' class
         * clear level-2 content and set 'blank' class
         */
        $('#navigation .sf-mega a').hover(function(){
            var wrapper = "<a href='#'>"+$(this).text()+"</a>";
            $(".level-dummy").removeClass("blank");
            $(".level-dummy").html(wrapper);

            setTimeout(function(){
                $(".level-2").removeClass("blank");
                $(".level-2").html(wrapper);
                $(".level-2").css("width", $(".level-dummy").width());
            }, 0);
        }, function(){
            $(".level-dummy").addClass("blank");
            $(".level-dummy").html("");

            $(".level-2").addClass("blank");
            $(".level-2").html("");
            $(".level-2").css("width", "40px");
        });

        /**
         * close navigation menu when user clicks outside the navigation itself
         * reset all navigation breadcrumb level
         */
        $('html').click(function() {
            if(isSmall){
                $(".level-1").html("").addClass("blank").css("width", "40px");;
                $(".level-2").html("").addClass("blank").css("width", "40px");;
                $("#navigation").slideUp(200);
            }
        });

        /**
         * stop propagation on navigation wrapper
         * prevent event reach the root (html) as closed the navigation
         */
        $('.navigation').click(function(event){
            if(isSmall) {
                event.stopPropagation();
            }
        });
    }

    /**
     * Destroy navigation & breadcrumb on tablet / small device
     */
    function destroySidebarMenu(){
        /**
         * remove all registered event for sidebar navigation
         */
        $(".navigation-toggle").unbind('click');
        $('#navigation > li').unbind('mouseenter mouseleave');
        $('#navigation .sf-mega a').unbind('mouseenter mouseleave');

        /**
         * remove right arrow after li
         */
        $("#navigation > li > a").find("i.fa-angle-right").remove();
        $("#navigation").show();
    }

    /**
     * add arrow on small device
     * make sure navigation is hidden
     */
    function createRightArrow(){
        /**
         * make sure navigation is hidden, waiting for user click the navigation menu
         * by default it's hidden by css media query, but it's okay to recheck
         */
        $("#navigation").hide();

        /**
         * loop through navigation li
         * add icon arrow right on list which has sub menu
         */
        $("#navigation > li").each(function(){
            if($(this).find(".sf-mega").length){
                if(!$(this).find("a").first().find("i.fa-angle-right").length){
                    $(this).find("a").first().append("<i class='fa fa-angle-right'></i>");
                }
            }
        });
    }

    /**
     * remove right arrow on first level of navigation which has sub menu
     * make sure navigation is visible in case device turns into larger or smaller
     */
    function removeRightArrow(){
        /**
         * show first level menu
         * in case change size from small into medium / large (mega menu)
         */
        $("#navigation").show();

        /**
         * remove left arrow on sidebar menu
         * in case change size from small into extra small (slide menu) or medium / large (mega menu)
         */
        $("#navigation > li > a").find("i.fa-angle-right").remove();

    }

    /**
     * Slide navigation mobile / extra small device
     */
    function initSlideMenu(){
        /**
         * add toggle functionality to slide right (visible) and slide left (invisible)
         * change icon burger into arrow and reverse
         * put class status while navigation show up or hide
         */
        $(".toggle-nav").click(function(e) {
            e.preventDefault();
            $(".navigation").toggleClass("open");
            $(this).toggleClass("fa-arrow-left");
            $(this).toggleClass("fa-navicon");
        });

        /**
         * close slide navigation when user click overlay
         * reverse back navigation icon and adjust the status (remove 'open' class)
         */
        $("nav.navigation .overlay").click(function(){
            $(".toggle-nav").toggleClass("fa-arrow-left");
            $(".toggle-nav").toggleClass("fa-navicon");
            $(".navigation").removeClass("open");
        })

        /**
         * build a simple accordion to make nice slide effect on sub menu
         * check if one of li has open the close and open the another
         */
        $("#navigation > li > a").click(function(){
            if(isExtraSmall){
                if($(this).parent().hasClass('active')) {
                    $("#navigation > li").removeClass('active');
                    $("#navigation > li .sf-mega").stop(true).slideUp().removeClass("open");
                }
                else{
                    $("#navigation > li").removeClass('active');
                    $("#navigation > li .sf-mega").stop(true).slideUp().removeClass("open");

                    $(this).parent().addClass('active');
                    $(this).next('.sf-mega').stop(true).slideDown().addClass("open");
                }
            }
        });

        /**
         * make sure the navigation is visible
         * but still offset the browser viewport
         */
        $("#navigation").show();

        /**
         * some additional feature on mobile
         * add toggle search box
         */
        $(".mobile-search").click(function(){
            $(this).toggleClass("active");
            $(".header-section > .search-wrapper").stop(true).fadeToggle(100);

            $(".user-dropdown").removeClass("active");
            $(".list-menu").stop(true).slideUp(100);

        });

        $(".user-dropdown").click(function(){
            $(this).toggleClass('active');
            $(this).next(".list-menu").stop(true).slideToggle(100);

            if(isExtraSmall){
                $(".mobile-search").removeClass("active");
                $(".header-section > .search-wrapper").stop(true).fadeOut(100);
            }
        });

        /**
         * close search box when click the outside of the search box itself
         * remove class open on button search toggle
         */
        $('html').click(function() {
            /**
             * hide search on mobile only, because on mobile search act like a drop down
             * remove active class too
             */
            if(isExtraSmall){
                $(".mobile-search").removeClass("active");
                $(".header-section > .search-wrapper").stop(true).fadeOut(100);
            }

            $(".user-dropdown").removeClass("active");
            $(".list-menu").stop(true).slideUp(100);
        });

        /**
         * stop all events when click reach the header-section
         * it prevent to close the search box when user click the wrapper of search box
         * itself until click event reach the html tag and close it as function that we have defined before
         */
        $('.user-menu').click(function(event){
            event.stopPropagation();
        });
    }

    /**
     * destroy slide menu if necessary
     * unbind all events and remove arrow on first level menu which has sub menu
     */
    function destroySlideMenu(){
        $("#navigation > li > a").find("i.fa-angle-down").remove();
        $("#navigation > li > a").unbind('click');
        $("nav.navigation .overlay").unbind('click');
        $(".toggle-nav").unbind('click');

        $(".mobile-search").unbind('click');
        $('.header-section').unbind('click');
        $("html").unbind('click');
    }

    /**
     * if device turns smaller add down arrow icon on first menu which has sub menu
     * reset search state of search on mobile
     */
    function createDownArrow(){
        $(".mobile-search").removeClass("active");
        $(".header-section > .search-wrapper").hide();

        /**
         * loop through navigation li
         * add icon arrow down on list which has sub menu
         */
        $("#navigation > li").each(function(){
            if($(this).find(".sf-mega").length){
                if(!$(this).find("a").first().find("i.fa-angle-down").length){
                    $(this).find("a").first().append("<i class='fa fa-angle-down'></i>");
                }
            }
        });
    }

    /**
     * remove arrow on first level which has sub menu
     * this function called if device turns larger and make sure search wrapper is visible
     */
    function removeDownArrow(){
        $("#navigation > li > a").find("i.fa-angle-down").remove();
        $(".header-section > .search-wrapper").show();
    }


    /**
     * reposition and re-adjusting layout component like navigation based on device size
     * activate sticky header and reset navigation status
     */
    function setLayout(){
        // equalize the article preview height
        $('.articles, #articles').equalize({equalize: 'height', children: '.article-preview'});

        if(isLarge || isMedium || isSmall){
            /**
             * create parallax effect on tablet and desktop mode
             * init stellar js
             */
            $(window).data('plugin_stellar').init();

            /**
             * init waypoint.js to check scroll offset at -200px
             * add class 'closed' to make header position fixed out of the screen by css
             * do not add transition first because css will make y-translation start from  top 0
             * add transition when it has 'closed' class after 500ms delay and header has moved out off the screen
             * then transition effect doesn't come up, just make header go away from the screen with fixed position
             */
            if(closed == null){
                closed = new Waypoint({
                    element: $("header"),
                    handler: function () {
                        if ($(".header.closed").length) {
                            $(".header").addClass("transition");
                            //console.log("add transition when closed");
                        }
                        $(".header").toggleClass('closed');
                        //console.log(this.element.class + ' closed triggers at ' + this.triggerPoint)

                        if (!$(".header.closed").length) {
                            setTimeout(function () {
                                $(".header").removeClass("transition");
                                //console.log("remove transition when closed");
                            }, 500);
                        }
                    },
                    offset: -200
                });
            }

            /**
             * after -300px passing by from the top, add 'sticky' class to make header fixed at top 0
             * by 'transition' class so it will show up with nice y-translation effect
             * if it has 'closed' class make sure 'transition' keep stick with that
             * it's needed for make header go away with y-translation out of screen
             */
            if(sticky == null){
                sticky = new Waypoint({
                    element: $("header"),
                    handler: function () {
                        if ($(".header.closed").length) {
                            $(".header").addClass("transition");
                            //console.log("add transition when stickied");
                        }
                        $(".header").toggleClass('sticky');
                        //console.log(this.element.class + ' triggers at ' + this.triggerPoint)
                    },
                    offset: -300
                });
            }
        }
        else{
            /**
             * disable closed navigation after scrolling on mobile
             * disable navigation sticky after scrolling because on mobile header will always be sticky
             */
            if(sticky !== undefined){
                sticky.destroy();
            }
            if(closed !== undefined){
                closed.destroy();
            }

            /**
             * disable parallax effect on mobile
             * reset background position
             */
            $(window).data('plugin_stellar').destroy();
            setTimeout(function(){
                $("div[data-stellar-background-ratio]").not(".reset").removeAttr("style");
            }, 50);
        }

        if(isLarge || isMedium){
            initMegaMenu();
            removeRightArrow();
            removeDownArrow();
        }
        else if(isSmall){
            destroyMegaMenu();
            createRightArrow();
            removeDownArrow();
        }
        else{
            destroyMegaMenu();
            removeRightArrow();
            createDownArrow();
        }
    }

    /**
     * create fade away side by sde between text login and button create on mobile device
     * @type {number}
     */
    var counter = 0;
    setInterval(function(){
        if(isExtraSmall){
            if(counter++%2 == 0){
                $(".sidebar-profile .unauthorized:not(.logged-in) .link-text").fadeOut(200);
                setTimeout(function(){
                    $(".sidebar-profile .unauthorized:not(.logged-in) .btn").fadeIn(200);
                }, 500);
            }
            else{
                $(".sidebar-profile .unauthorized:not(.logged-in) .btn").fadeOut(200);
                setTimeout(function(){
                    $(".sidebar-profile .unauthorized:not(.logged-in) .link-text").fadeIn(200);
                }, 500);
            }
        }
    }, 4000);

});

$(function () {
    var page = 1;
    var onLoading = false;
    var isEnded = false;

    if($('.btn-load-more').length && $('#articles').length){
        $('.loading').show();
        $('.btn-load-more').hide();

        $(window).scroll(function () {
            if ($(window).scrollTop() > $(document).height() - $(window).height() - 500 && !onLoading && !isEnded) {
                loadArticle();
            }
        });

        $('.btn-load-more').click(function (e) {
            e.preventDefault();
            loadArticle();
        });

        function loadArticle() {
            onLoading = true;
            $('.loading').show();
            $('.btn-load-more').hide();
            generateArticle()
        }

        function generateArticle(){
            $.getJSON($("section[data-href]").data('href')+'?page='+page, function (data) {
                onLoading = false;
                $('.loading').hide();
                $('.btn-load-more').show();

                if ($('#article-portrait-template').length && data.data.length > 0) {
                    var template = $('#article-portrait-template').html();
                    var html = Mustache.to_html(template, data);
                    $('#articles').append(html);

                    generateRating();

                    echo.init();

                    $('#articles').equalize({equalize: 'height', children: '.article-preview'});

                    if(page == data.last_page){
                        $('.btn-load-more').text("END OF PAGE").addClass('disabled');
                        isEnded = true;
                    }
                    else{
                        page++;
                    }
                }
                else{
                    $('.btn-load-more').text("END OF PAGE").addClass('disabled');
                    isEnded = true;
                }
            });
        }

        function generateRating(){
            $('.rating-wrapper').each(function () {
                var rating = $(this).data('rating');

                $(this).html("");

                for (var index = 0; index < 5; index++) {
                    if (index < rating) {
                        $(this).append("<i class='fa fa-circle rated'></i>")
                    }
                    else {
                        $(this).append("<i class='fa fa-circle'></i>")
                    }
                }
            });
        }
    }

});
$(function () {
    var Mustache = require('mustache');



}); // function
},{"mustache":2}],2:[function(require,module,exports){
/*!
 * mustache.js - Logic-less {{mustache}} templates with JavaScript
 * http://github.com/janl/mustache.js
 */

/*global define: false Mustache: true*/

(function defineMustache (global, factory) {
  if (typeof exports === 'object' && exports && typeof exports.nodeName !== 'string') {
    factory(exports); // CommonJS
  } else if (typeof define === 'function' && define.amd) {
    define(['exports'], factory); // AMD
  } else {
    global.Mustache = {};
    factory(global.Mustache); // script, wsh, asp
  }
}(this, function mustacheFactory (mustache) {

  var objectToString = Object.prototype.toString;
  var isArray = Array.isArray || function isArrayPolyfill (object) {
    return objectToString.call(object) === '[object Array]';
  };

  function isFunction (object) {
    return typeof object === 'function';
  }

  /**
   * More correct typeof string handling array
   * which normally returns typeof 'object'
   */
  function typeStr (obj) {
    return isArray(obj) ? 'array' : typeof obj;
  }

  function escapeRegExp (string) {
    return string.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&');
  }

  /**
   * Null safe way of checking whether or not an object,
   * including its prototype, has a given property
   */
  function hasProperty (obj, propName) {
    return obj != null && typeof obj === 'object' && (propName in obj);
  }

  // Workaround for https://issues.apache.org/jira/browse/COUCHDB-577
  // See https://github.com/janl/mustache.js/issues/189
  var regExpTest = RegExp.prototype.test;
  function testRegExp (re, string) {
    return regExpTest.call(re, string);
  }

  var nonSpaceRe = /\S/;
  function isWhitespace (string) {
    return !testRegExp(nonSpaceRe, string);
  }

  var entityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
    '/': '&#x2F;',
    '`': '&#x60;',
    '=': '&#x3D;'
  };

  function escapeHtml (string) {
    return String(string).replace(/[&<>"'`=\/]/g, function fromEntityMap (s) {
      return entityMap[s];
    });
  }

  var whiteRe = /\s*/;
  var spaceRe = /\s+/;
  var equalsRe = /\s*=/;
  var curlyRe = /\s*\}/;
  var tagRe = /#|\^|\/|>|\{|&|=|!/;

  /**
   * Breaks up the given `template` string into a tree of tokens. If the `tags`
   * argument is given here it must be an array with two string values: the
   * opening and closing tags used in the template (e.g. [ "<%", "%>" ]). Of
   * course, the default is to use mustaches (i.e. mustache.tags).
   *
   * A token is an array with at least 4 elements. The first element is the
   * mustache symbol that was used inside the tag, e.g. "#" or "&". If the tag
   * did not contain a symbol (i.e. {{myValue}}) this element is "name". For
   * all text that appears outside a symbol this element is "text".
   *
   * The second element of a token is its "value". For mustache tags this is
   * whatever else was inside the tag besides the opening symbol. For text tokens
   * this is the text itself.
   *
   * The third and fourth elements of the token are the start and end indices,
   * respectively, of the token in the original template.
   *
   * Tokens that are the root node of a subtree contain two more elements: 1) an
   * array of tokens in the subtree and 2) the index in the original template at
   * which the closing tag for that section begins.
   */
  function parseTemplate (template, tags) {
    if (!template)
      return [];

    var sections = [];     // Stack to hold section tokens
    var tokens = [];       // Buffer to hold the tokens
    var spaces = [];       // Indices of whitespace tokens on the current line
    var hasTag = false;    // Is there a {{tag}} on the current line?
    var nonSpace = false;  // Is there a non-space char on the current line?

    // Strips all whitespace tokens array for the current line
    // if there was a {{#tag}} on it and otherwise only space.
    function stripSpace () {
      if (hasTag && !nonSpace) {
        while (spaces.length)
          delete tokens[spaces.pop()];
      } else {
        spaces = [];
      }

      hasTag = false;
      nonSpace = false;
    }

    var openingTagRe, closingTagRe, closingCurlyRe;
    function compileTags (tagsToCompile) {
      if (typeof tagsToCompile === 'string')
        tagsToCompile = tagsToCompile.split(spaceRe, 2);

      if (!isArray(tagsToCompile) || tagsToCompile.length !== 2)
        throw new Error('Invalid tags: ' + tagsToCompile);

      openingTagRe = new RegExp(escapeRegExp(tagsToCompile[0]) + '\\s*');
      closingTagRe = new RegExp('\\s*' + escapeRegExp(tagsToCompile[1]));
      closingCurlyRe = new RegExp('\\s*' + escapeRegExp('}' + tagsToCompile[1]));
    }

    compileTags(tags || mustache.tags);

    var scanner = new Scanner(template);

    var start, type, value, chr, token, openSection;
    while (!scanner.eos()) {
      start = scanner.pos;

      // Match any text between tags.
      value = scanner.scanUntil(openingTagRe);

      if (value) {
        for (var i = 0, valueLength = value.length; i < valueLength; ++i) {
          chr = value.charAt(i);

          if (isWhitespace(chr)) {
            spaces.push(tokens.length);
          } else {
            nonSpace = true;
          }

          tokens.push([ 'text', chr, start, start + 1 ]);
          start += 1;

          // Check for whitespace on the current line.
          if (chr === '\n')
            stripSpace();
        }
      }

      // Match the opening tag.
      if (!scanner.scan(openingTagRe))
        break;

      hasTag = true;

      // Get the tag type.
      type = scanner.scan(tagRe) || 'name';
      scanner.scan(whiteRe);

      // Get the tag value.
      if (type === '=') {
        value = scanner.scanUntil(equalsRe);
        scanner.scan(equalsRe);
        scanner.scanUntil(closingTagRe);
      } else if (type === '{') {
        value = scanner.scanUntil(closingCurlyRe);
        scanner.scan(curlyRe);
        scanner.scanUntil(closingTagRe);
        type = '&';
      } else {
        value = scanner.scanUntil(closingTagRe);
      }

      // Match the closing tag.
      if (!scanner.scan(closingTagRe))
        throw new Error('Unclosed tag at ' + scanner.pos);

      token = [ type, value, start, scanner.pos ];
      tokens.push(token);

      if (type === '#' || type === '^') {
        sections.push(token);
      } else if (type === '/') {
        // Check section nesting.
        openSection = sections.pop();

        if (!openSection)
          throw new Error('Unopened section "' + value + '" at ' + start);

        if (openSection[1] !== value)
          throw new Error('Unclosed section "' + openSection[1] + '" at ' + start);
      } else if (type === 'name' || type === '{' || type === '&') {
        nonSpace = true;
      } else if (type === '=') {
        // Set the tags for the next time around.
        compileTags(value);
      }
    }

    // Make sure there are no open sections when we're done.
    openSection = sections.pop();

    if (openSection)
      throw new Error('Unclosed section "' + openSection[1] + '" at ' + scanner.pos);

    return nestTokens(squashTokens(tokens));
  }

  /**
   * Combines the values of consecutive text tokens in the given `tokens` array
   * to a single token.
   */
  function squashTokens (tokens) {
    var squashedTokens = [];

    var token, lastToken;
    for (var i = 0, numTokens = tokens.length; i < numTokens; ++i) {
      token = tokens[i];

      if (token) {
        if (token[0] === 'text' && lastToken && lastToken[0] === 'text') {
          lastToken[1] += token[1];
          lastToken[3] = token[3];
        } else {
          squashedTokens.push(token);
          lastToken = token;
        }
      }
    }

    return squashedTokens;
  }

  /**
   * Forms the given array of `tokens` into a nested tree structure where
   * tokens that represent a section have two additional items: 1) an array of
   * all tokens that appear in that section and 2) the index in the original
   * template that represents the end of that section.
   */
  function nestTokens (tokens) {
    var nestedTokens = [];
    var collector = nestedTokens;
    var sections = [];

    var token, section;
    for (var i = 0, numTokens = tokens.length; i < numTokens; ++i) {
      token = tokens[i];

      switch (token[0]) {
        case '#':
        case '^':
          collector.push(token);
          sections.push(token);
          collector = token[4] = [];
          break;
        case '/':
          section = sections.pop();
          section[5] = token[2];
          collector = sections.length > 0 ? sections[sections.length - 1][4] : nestedTokens;
          break;
        default:
          collector.push(token);
      }
    }

    return nestedTokens;
  }

  /**
   * A simple string scanner that is used by the template parser to find
   * tokens in template strings.
   */
  function Scanner (string) {
    this.string = string;
    this.tail = string;
    this.pos = 0;
  }

  /**
   * Returns `true` if the tail is empty (end of string).
   */
  Scanner.prototype.eos = function eos () {
    return this.tail === '';
  };

  /**
   * Tries to match the given regular expression at the current position.
   * Returns the matched text if it can match, the empty string otherwise.
   */
  Scanner.prototype.scan = function scan (re) {
    var match = this.tail.match(re);

    if (!match || match.index !== 0)
      return '';

    var string = match[0];

    this.tail = this.tail.substring(string.length);
    this.pos += string.length;

    return string;
  };

  /**
   * Skips all text until the given regular expression can be matched. Returns
   * the skipped string, which is the entire tail if no match can be made.
   */
  Scanner.prototype.scanUntil = function scanUntil (re) {
    var index = this.tail.search(re), match;

    switch (index) {
      case -1:
        match = this.tail;
        this.tail = '';
        break;
      case 0:
        match = '';
        break;
      default:
        match = this.tail.substring(0, index);
        this.tail = this.tail.substring(index);
    }

    this.pos += match.length;

    return match;
  };

  /**
   * Represents a rendering context by wrapping a view object and
   * maintaining a reference to the parent context.
   */
  function Context (view, parentContext) {
    this.view = view;
    this.cache = { '.': this.view };
    this.parent = parentContext;
  }

  /**
   * Creates a new context using the given view with this context
   * as the parent.
   */
  Context.prototype.push = function push (view) {
    return new Context(view, this);
  };

  /**
   * Returns the value of the given name in this context, traversing
   * up the context hierarchy if the value is absent in this context's view.
   */
  Context.prototype.lookup = function lookup (name) {
    var cache = this.cache;

    var value;
    if (cache.hasOwnProperty(name)) {
      value = cache[name];
    } else {
      var context = this, names, index, lookupHit = false;

      while (context) {
        if (name.indexOf('.') > 0) {
          value = context.view;
          names = name.split('.');
          index = 0;

          /**
           * Using the dot notion path in `name`, we descend through the
           * nested objects.
           *
           * To be certain that the lookup has been successful, we have to
           * check if the last object in the path actually has the property
           * we are looking for. We store the result in `lookupHit`.
           *
           * This is specially necessary for when the value has been set to
           * `undefined` and we want to avoid looking up parent contexts.
           **/
          while (value != null && index < names.length) {
            if (index === names.length - 1)
              lookupHit = hasProperty(value, names[index]);

            value = value[names[index++]];
          }
        } else {
          value = context.view[name];
          lookupHit = hasProperty(context.view, name);
        }

        if (lookupHit)
          break;

        context = context.parent;
      }

      cache[name] = value;
    }

    if (isFunction(value))
      value = value.call(this.view);

    return value;
  };

  /**
   * A Writer knows how to take a stream of tokens and render them to a
   * string, given a context. It also maintains a cache of templates to
   * avoid the need to parse the same template twice.
   */
  function Writer () {
    this.cache = {};
  }

  /**
   * Clears all cached templates in this writer.
   */
  Writer.prototype.clearCache = function clearCache () {
    this.cache = {};
  };

  /**
   * Parses and caches the given `template` and returns the array of tokens
   * that is generated from the parse.
   */
  Writer.prototype.parse = function parse (template, tags) {
    var cache = this.cache;
    var tokens = cache[template];

    if (tokens == null)
      tokens = cache[template] = parseTemplate(template, tags);

    return tokens;
  };

  /**
   * High-level method that is used to render the given `template` with
   * the given `view`.
   *
   * The optional `partials` argument may be an object that contains the
   * names and templates of partials that are used in the template. It may
   * also be a function that is used to load partial templates on the fly
   * that takes a single argument: the name of the partial.
   */
  Writer.prototype.render = function render (template, view, partials) {
    var tokens = this.parse(template);
    var context = (view instanceof Context) ? view : new Context(view);
    return this.renderTokens(tokens, context, partials, template);
  };

  /**
   * Low-level method that renders the given array of `tokens` using
   * the given `context` and `partials`.
   *
   * Note: The `originalTemplate` is only ever used to extract the portion
   * of the original template that was contained in a higher-order section.
   * If the template doesn't use higher-order sections, this argument may
   * be omitted.
   */
  Writer.prototype.renderTokens = function renderTokens (tokens, context, partials, originalTemplate) {
    var buffer = '';

    var token, symbol, value;
    for (var i = 0, numTokens = tokens.length; i < numTokens; ++i) {
      value = undefined;
      token = tokens[i];
      symbol = token[0];

      if (symbol === '#') value = this.renderSection(token, context, partials, originalTemplate);
      else if (symbol === '^') value = this.renderInverted(token, context, partials, originalTemplate);
      else if (symbol === '>') value = this.renderPartial(token, context, partials, originalTemplate);
      else if (symbol === '&') value = this.unescapedValue(token, context);
      else if (symbol === 'name') value = this.escapedValue(token, context);
      else if (symbol === 'text') value = this.rawValue(token);

      if (value !== undefined)
        buffer += value;
    }

    return buffer;
  };

  Writer.prototype.renderSection = function renderSection (token, context, partials, originalTemplate) {
    var self = this;
    var buffer = '';
    var value = context.lookup(token[1]);

    // This function is used to render an arbitrary template
    // in the current context by higher-order sections.
    function subRender (template) {
      return self.render(template, context, partials);
    }

    if (!value) return;

    if (isArray(value)) {
      for (var j = 0, valueLength = value.length; j < valueLength; ++j) {
        buffer += this.renderTokens(token[4], context.push(value[j]), partials, originalTemplate);
      }
    } else if (typeof value === 'object' || typeof value === 'string' || typeof value === 'number') {
      buffer += this.renderTokens(token[4], context.push(value), partials, originalTemplate);
    } else if (isFunction(value)) {
      if (typeof originalTemplate !== 'string')
        throw new Error('Cannot use higher-order sections without the original template');

      // Extract the portion of the original template that the section contains.
      value = value.call(context.view, originalTemplate.slice(token[3], token[5]), subRender);

      if (value != null)
        buffer += value;
    } else {
      buffer += this.renderTokens(token[4], context, partials, originalTemplate);
    }
    return buffer;
  };

  Writer.prototype.renderInverted = function renderInverted (token, context, partials, originalTemplate) {
    var value = context.lookup(token[1]);

    // Use JavaScript's definition of falsy. Include empty arrays.
    // See https://github.com/janl/mustache.js/issues/186
    if (!value || (isArray(value) && value.length === 0))
      return this.renderTokens(token[4], context, partials, originalTemplate);
  };

  Writer.prototype.renderPartial = function renderPartial (token, context, partials) {
    if (!partials) return;

    var value = isFunction(partials) ? partials(token[1]) : partials[token[1]];
    if (value != null)
      return this.renderTokens(this.parse(value), context, partials, value);
  };

  Writer.prototype.unescapedValue = function unescapedValue (token, context) {
    var value = context.lookup(token[1]);
    if (value != null)
      return value;
  };

  Writer.prototype.escapedValue = function escapedValue (token, context) {
    var value = context.lookup(token[1]);
    if (value != null)
      return mustache.escape(value);
  };

  Writer.prototype.rawValue = function rawValue (token) {
    return token[1];
  };

  mustache.name = 'mustache.js';
  mustache.version = '2.2.1';
  mustache.tags = [ '{{', '}}' ];

  // All high-level mustache.* functions use this writer.
  var defaultWriter = new Writer();

  /**
   * Clears all cached templates in the default writer.
   */
  mustache.clearCache = function clearCache () {
    return defaultWriter.clearCache();
  };

  /**
   * Parses and caches the given template in the default writer and returns the
   * array of tokens it contains. Doing this ahead of time avoids the need to
   * parse templates on the fly as they are rendered.
   */
  mustache.parse = function parse (template, tags) {
    return defaultWriter.parse(template, tags);
  };

  /**
   * Renders the `template` with the given `view` and `partials` using the
   * default writer.
   */
  mustache.render = function render (template, view, partials) {
    if (typeof template !== 'string') {
      throw new TypeError('Invalid template! Template should be a "string" ' +
                          'but "' + typeStr(template) + '" was given as the first ' +
                          'argument for mustache#render(template, view, partials)');
    }

    return defaultWriter.render(template, view, partials);
  };

  // This is here for backwards compatibility with 0.4.x.,
  /*eslint-disable */ // eslint wants camel cased function name
  mustache.to_html = function to_html (template, view, partials, send) {
    /*eslint-enable*/

    var result = mustache.render(template, view, partials);

    if (isFunction(send)) {
      send(result);
    } else {
      return result;
    }
  };

  // Export the escaping function so that the user may override it.
  // See https://github.com/janl/mustache.js/issues/244
  mustache.escape = escapeHtml;

  // Export these mainly for testing, but also for advanced usage.
  mustache.Scanner = Scanner;
  mustache.Context = Context;
  mustache.Writer = Writer;

}));

},{}]},{},[1])