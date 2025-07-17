/*

 全ページ共用

 */
jQuery(function() {
    var state = '';
    var masonryIsActive = false;

    var $window = $(window);
    var $document = $(document);
    var $html = $('html');
    var $body = $('body');

    var flipsnap = null;
    var numItems = 0;
    var itemWidth = 300;
    var itemHeight = 185;
    var itemRatio = itemWidth / itemHeight;
    var scale = itemWidth / 320;
    var gap = 20;
    var $viewport = $('#viewport');
    var viewportHTML = $viewport.html();
    var $slider = null;
    var $sliderItems = null;
    var $sliderBtnPrev = null;
    var $sliderBtnNext = null;
    var $pointer = null;
    var $pointers = null;

    var pageTransitionFlag = false;

    var clickEventType = 'ontouchstart' in window ? 'touchend' : 'click';
    var ua = window.navigator.userAgent.toLowerCase();

    if (ua.match(/android/i)) clickEventType = 'click';

    var iosVersion = (function() {
        var v, versions;
        if (/iP(hone|od|ad)/.test(navigator.platform)) {
            v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
            versions = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
            return versions[0];
        }
        return versions;
    })();
    var androidVersion = (function() {
        var version;
        if (!!ua.match(/android/i)) {
            if (!!ua.match(/firefox/i)) {
                version = parseFloat(navigator.appVersion);
            } else {
                version = parseFloat(ua.slice(ua.indexOf('android') + 8));
            }
            // 一部条件によってNaNとなる場合は4と見なす
            if (version !== version) {
                version = 4;
            }
            return version;
        }
    })();
    // Android 4で条件によってtouchendが発火しない場合があるのでclickで代替
    if (5 > androidVersion && androidVersion >= 4) {
        clickEventType = 'click';
    }

    var positionFixedNotSupport = iosVersion < 5 || androidVersion < 3;
    var pageId = $body.attr('id');
    var pageClass = $body.attr('class');
    
    /* -------------------------------------------------------------
     固定ヘッダー
     ------------------------------------------------------------- */
    $('#header').each(function(){
        var self = this,
            xHeader_h = $('.xHeader').innerHeight(),
            fixhead_scroll = function(){
                if ($window.width() >= 1000) {
                    var scroll = $window.scrollTop();
                    if (scroll > xHeader_h) {
                        $(self).addClass('isFixed');
                        $(self).css('top',0);
                    } else {
                        $(self).removeClass('isFixed');
                        $(self).css('top',xHeader_h + 'px');
                    }
                }
            };
        if ($window.width() >= 1000) {
            $(self).css('top',xHeader_h + 'px');
        }
        $window.on('load resize',function(){
            xHeader_h = $('.xHeader').innerHeight();
            if ($window.width() < 1000) {
                $window.off('scroll.header');
                $(self).removeClass('isFixed');
                $(self).css('top',0);
            } else {
                $window.on('scroll.header',fixhead_scroll);
                setTimeout(function(){
                    var scroll = $window.scrollTop();
                    if (scroll > xHeader_h) {
                        $(self).addClass('isFixed');
                        $(self).css('top',0);
                    } else {
                        $(self).removeClass('isFixed');
                        $(self).css('top',xHeader_h + 'px');
                    }
                },100);
            }
        });
    });
    /* -------------------------------------------------------------
     画像の切り替え
     ------------------------------------------------------------- */
    var replaceImage = function(suffix) {
        var imageLoader = new lib.ImageLoader();

        $('img.srcset').each(function() {
            var $img = $(this);
            var src = $img.attr('src');
            var name = src.substring(0, src.lastIndexOf('_') + 1);
            var ex = src.substring(src.lastIndexOf('.'));

            imageLoader.addFile({
                src: name + suffix + ex,
                extra: $img
            });
        });

        var onLoadProgress = function(e) {
            var $img = e.target.extra;
            $img
            .attr('src', e.target.src)
            .css('visibility', 'visible');
        };

        var onLoadComplete = function() {
            imageLoader.removeListener(imageLoader.event.PROGRESS, onLoadProgress);
            imageLoader.removeListener(imageLoader.event.COMPLETE, onLoadComplete);
            imageLoader = null;
        };

        imageLoader.addListener(imageLoader.event.PROGRESS, onLoadProgress);
        imageLoader.addListener(imageLoader.event.COMPLETE, onLoadComplete);
        imageLoader.start();
    };

    /* -------------------------------------------------------------
     スマートフォンに切り替わった時の処理
     ------------------------------------------------------------- */
    var resizeSliderSp = function() {
        var winWidth = $window.width();
        itemWidth = winWidth * scale | 0;
        $slider
        .css({
            width: (itemWidth + gap) * numItems,
            margin: '0 0 0 ' + ((winWidth - itemWidth) / 2 | 0) + 'px'
        });
        $sliderItems
        .css({
            width: itemWidth
        });

        var posY = ((itemWidth / itemRatio - $sliderBtnPrev.height()) / 2) + 5;
        $sliderBtnPrev
        .css({
            top: posY
        });
        $sliderBtnNext
        .css({
            top: posY
        });
        flipsnap.distance = itemWidth + gap;
        flipsnap.refresh();
    };

    var onPointMove = function() {
        $pointers.filter('.is-current').removeClass('is-current');
        $pointers.eq(flipsnap.currentPoint).addClass('is-current');
        if (flipsnap.hasNext()) {
            $sliderBtnNext.show();
        } else {
            $sliderBtnNext.hide();
        }
        if (flipsnap.hasPrev()) {
            $sliderBtnPrev.show();
        } else {
            $sliderBtnPrev.hide();
        }
    };

    var switchingToSp = function() {
        state = 's';
        replaceImage('s');

        if (pageId === 'pid-top') {
            $slider = $('#slider');
            if ($slider.hasClass('xCarousel-initialized')) {
                $slider.xCarousel('destroy');
            }

            $viewport.html(viewportHTML);
            $slider = $('#slider');
            $sliderItems = $slider.children();
            $sliderBtnPrev = $('.slider_btn_prev');
            $sliderBtnNext = $('.slider_btn_next');

            numItems = $sliderItems.length;

            if ($slider.length === 0) return;

            $slider.css('width', 320 * numItems);
            flipsnap = Flipsnap('#slider');
            flipsnap.distance = itemWidth + gap;
            flipsnap.refresh();

            $sliderBtnPrev.on('click', function() { flipsnap.toPrev(); });
            $sliderBtnNext.on('click', function() { flipsnap.toNext(); });

            var htmlString = '';
            var i = $slider.children().length;
            for (; i--;) {
                htmlString += '<span class="slider_pointer_btn"></span>';
            }
            $pointer = $('<div class="slider_pointer">');
            $pointer.html(htmlString);
            $pointers = $pointer.find('span');
            $pointers.first().addClass('is-current');
            $slider.after($pointer);

            if (numItems === 1) {
                $pointers.hide();
                $viewport.css({paddingBottom: 10});
            }

            flipsnap.element.addEventListener('fspointmove', onPointMove, false);
            onPointMove();

            $window.on('resize', resizeSliderSp);
            resizeSliderSp();
        }

        if (pageId === 'pid-support' && $.fn.masonry && masonryIsActive) {
            masonryIsActive = false;
            $('.faq-section-box')
            .off('layoutComplete', onLayoutMasonry)
            .masonry('destroy');
        }

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo',
            posShift: $header.height()
        });

        var $hashTarget = $(location.hash);
        if ($hashTarget.length > 0 && !pageTransitionFlag) {
            var offset = $hashTarget.offset().top - $header.height();
            $html.scrollTop(offset);
            $body.scrollTop(offset);

            pageTransitionFlag = true;
        }
    };

    /* -------------------------------------------------------------
     タブレットに切り替わった時の処理
     ------------------------------------------------------------- */
    var switchingToTablet = function() {
        state = 'm';
        replaceImage('m');

        if (pageId === 'pid-top') {
            $slider = $('#slider');
            if ($slider.hasClass('xCarousel-initialized')) {
                $slider.xCarousel('destroy');
            }
            $window.off('resize', resizeSliderSp);

            $viewport.html(viewportHTML);
            $slider = $('#slider');

            if ($slider.length === 0) return;

            $slider.xCarousel({
                containerWidth: 270,
                itemWidth: 250,
                itemHeight: 154,
                easing: 'easeOutExpo',
                onReady: function() {
                    var numItems = $slider.xCarousel('getLength');
                    if (numItems <= 1) return;

                    $pointer = $('<div class="slider_pointer">');
                    var i = 0;
                    for (; i < numItems; i++) {
                        var $btn = $('<a class="slider_pointer_btn"></a>');
                        $btn
                        .data('id', i)
                        .on('click', function() {
                            $slider.xCarousel('setItem', $(this).data('id'));
                        });
                        if (i === 0) {
                            $btn.addClass('is-current');
                        }
                        $btn.appendTo($pointer);
                    }
                    $slider.after($pointer);
                },
                onChange: function() {
                    var nowId = $slider.xCarousel('getNowItemId');
                    $pointer
                    .find('.slider_pointer_btn')
                    .each(function(index, element) {
                        var $btn = $(this);
                        if ($btn.data('id') === nowId) {
                            $btn.addClass('is-current');
                        } else {
                            $btn.removeClass('is-current');
                        }
                    });
                }
            });
        }

        if (pageId === 'pid-support' && $.fn.masonry && masonryIsActive) {
            masonryIsActive = false;
            $('.faq-section-box')
            .off('layoutComplete', onLayoutMasonry)
            .masonry('destroy');
        }

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo',
            posShift: $header.height()
        });

        var $hashTarget = $(location.hash);
        if ($hashTarget.length > 0 && !pageTransitionFlag) {
            var offset = $hashTarget.offset().top - $header.height();
            $html.scrollTop(offset);
            $body.scrollTop(offset);

            pageTransitionFlag = true;
        }
    };

    /* -------------------------------------------------------------
     PCに切り替わった時の処理
     ------------------------------------------------------------- */
    var $masonryTarget = null;
    var onLayoutMasonry = function(){
        var $hashTarget = $(location.hash);
        if($hashTarget.length > 0){
            var offset = $hashTarget.offset();
            var dest = offset !== undefined ? offset.top | 0 : 0;
            $window.scrollTop(dest);
        }
    };
    var switchingToPC = function() {
        state = 'l';
        replaceImage('l');

        if (spmenuIsShown) {
            switchMenu(spmenuState, false);
        }

        if (pageId === 'pid-top') {
            $slider = $('#slider');
            if ($slider.hasClass('xCarousel-initialized')) {
                $slider.xCarousel('destroy');
            }
            $window.off('resize', resizeSliderSp);

            $viewport.html(viewportHTML);
            $slider = $('#slider');

            if ($slider.length !== 0) {
                $slider.xCarousel({
                    easing: 'easeOutExpo',
                    onReady: function() {
                        var numItems = $slider.xCarousel('getLength');
                        if (numItems <= 1) return;

                        $pointer = $('<div class="slider_pointer">');
                        var i = 0;
                        for (; i < numItems; i++) {
                            var $btn = $('<a class="slider_pointer_btn"></a>');
                            $btn
                            .data('id', i)
                            .on('click', function() {
                                $slider.xCarousel('setItem', $(this).data('id'));
                            });
                            if (i === 0) {
                                $btn.addClass('is-current');
                            }
                            $btn.appendTo($pointer);
                        }
                        $slider.after($pointer);
                    },
                    onChange: function() {
                        var nowId = $slider.xCarousel('getNowItemId');
                        $pointer
                        .find('.slider_pointer_btn')
                        .each(function(index, element) {
                            var $btn = $(this);
                            if ($btn.data('id') === nowId) {
                                $btn.addClass('is-current');
                            } else {
                                $btn.removeClass('is-current');
                            }
                        });
                    }
                });
            }
        }

        if (pageId === 'pid-support' && $.fn.masonry && !masonryIsActive) {
            masonryIsActive = true;
            $masonryTarget = $('.faq-section-box');
            $masonryTarget
            .masonry({
                itemSelector: '.faq-section',
                gutter: 10
            })
            .on('layoutComplete', onLayoutMasonry);

            if ($html.hasClass('ltie7') || $html.hasClass('ie7') || $html.hasClass('ie8')) {
                setInterval(function() {
                    $masonryTarget.masonry('layout');
                }, 1000);
            }else{
                $masonryTarget.masonry('layout');
            }
        }

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo',
            posShift: $header.height()
        });
    };

    /* -------------------------------------------------------------
     PC用ナビのホバー時
     ------------------------------------------------------------- */
    var onHoverPCnav = function(e) {
        var $item = $(this);
        var $subNav = $item.find('.gnav_sub');

        // if (e.type === 'mouseenter') {
        //     $item.addClass('is-hover');
        //     $subNav
        //     .stop(true)
        //     .css({
        //         display: 'block',
        //         top: 43,
        //         opacity: 0
        //     })
        //     .animate({
        //         top: 46,
        //         opacity: 1
        //     }, 200, 'easeOutCubic');
        // } else {
        //     $item.removeClass('is-hover');
        //     $subNav
        //     .stop(true)
        //     .css({
        //         display: 'block',
        //         top: 46,
        //         opacity: 1
        //     })
        //     .animate({
        //         top: 43,
        //         opacity: 0
        //     }, 100, 'easeOutCubic', function() {
        //         $(this).hide();
        //     });
        // }
    };

    // var setPCnav = function() {
    //     new Image().src = SITE_URL + 'img/common/bg_gnav_sub_label.png';
    //
    //     $document
    //     .on('mouseenter', '.gnav_item', onHoverPCnav)
    //     .on('mouseleave', '.gnav_item', onHoverPCnav)
    //     .on('mouseenter', '.gnav_sub_item', function() { $(this).addClass('is-hover'); })
    //     .on('mouseleave', '.gnav_sub_item', function() { $(this).removeClass('is-hover'); });
    // };

    /* -------------------------------------------------------------
     スマホ、タブレット用ナビ
     ------------------------------------------------------------- */
    var $wrapper = $('#wrapper');
    var $header = $('#header');
    var $mainMenuBtn = $('#spnav_btn_menu');
    var $loginMenuBtn = $('#spnav_btn_login');
    var $mainMenu = $('#spmenu_main');
    var $loginMenu = $('#spmenu_login');
    var $mainCloseBtn = $('#spmenu_close_menu');
    var $loginCloseBtn = $('#spmenu_close_login');
    var $toggleTarget = $('#toggle-target');
    var spmenuIsShown = false;
    var spmenuState = '';
    var scrollY = 0;

    var switchMenu = function(name, animate) {
        animate = animate === undefined ? true : animate;
        name = name === undefined ? 'main' : name;

        var $showTarget;
        var $hideTarget;
        var $showTargetBtn;
        var $hideTargetBtn;

        if(name === 'main'){
            $showTarget = $mainMenu;
            $hideTarget = $loginMenu;
            $showTargetBtn = $mainMenuBtn;
            $hideTargetBtn = $loginMenuBtn;
        }else{
            $showTarget = $loginMenu;
            $hideTarget = $mainMenu;
            $showTargetBtn = $loginMenuBtn;
            $hideTargetBtn = $mainMenuBtn;
        }

        if($showTargetBtn.data('isShow')){
            spmenuIsShown = false;
            spmenuState = '';

            $showTargetBtn
            .data('isShow', false)
            .removeClass('is-show');

            $toggleTarget.show();
            $showTarget.slideUp(animate ? 200 : 0, 'easeOutCubic', function() {
                $showTarget
                .find('.spmenu_list_sub')
                .each(function() {
                    var $target = $(this);
                    var $label = $target.prev('.spmenu_list_label');
                    var $icon = $label.find('.ico');

                    $icon
                    .removeClass('ico_minus')
                    .addClass('ico_plus');

                    $target
                    .data('isShow', false)
                    .hide();

                    $label
                    .removeClass('is-active')
                });
            });
            setTimeout(function() {
                if (positionFixedNotSupport) {
                    $header.css({
                        position: 'absolute',
                        top: scrollY,
                        left: 0
                    });
                    $window.on('scroll', setHeaderPos);
                }
                $wrapper.removeClass('spnav-is-open');
                $window.scrollTop(scrollY);
            }, 25);
        }else{
            spmenuIsShown = true;
            spmenuState = name;

            scrollY = $window.scrollTop();
            if (positionFixedNotSupport) {
                $header.css({
                    position: 'relative',
                    top: 'auto',
                    left: 'auto'
                });
                $window.off('scroll', setHeaderPos);
            }
            $toggleTarget.hide();
            $wrapper.addClass('spnav-is-open');
            $window.scrollTop(1);

            $showTargetBtn
            .data('isShow', true)
            .addClass('is-show');

            $hideTargetBtn
            .data('isShow', false)
            .removeClass('is-show');

            $hideTarget
            .stop(true)
            .hide();

            $showTarget.slideDown(animate ? 400 : 0, 'easeOutCubic');
        }
    };

    var setHeaderPos = function() {
        $header.css({top: $window.scrollTop()});
    };

    $mainMenuBtn
    .data('isShow', false)
    .on(clickEventType, function(){
        switchMenu('main');
    });

    $loginMenuBtn
    .data('isShow', false)
    .on(clickEventType, function(){
        switchMenu('login');
    });

    $mainCloseBtn
    .on(clickEventType, function(){
        switchMenu('main');
    });

    $loginCloseBtn
    .on(clickEventType, function(){
        switchMenu('login');
    });

    var setSpnav = function() {
        $('.spmenu_list_sub')
        .each(function() {
            var $target = $(this);
            var $label = $target.prev('.spmenu_list_label');
            var $icon = $label.find('.ico');

            var toggle = function() {
                if ($target.data('isShow')) {
                    $icon
                    .removeClass('ico_minus')
                    .addClass('ico_plus');

                    $target
                    .data('isShow', false)
                    .stop(true)
                    .slideUp(100, 'easeOutCubic');
                } else {
                    $icon
                    .removeClass('ico_plus')
                    .addClass('ico_minus');

                    $target
                    .data('isShow', true)
                    .stop(true)
                    .slideDown(200, 'easeOutCubic');

                    $label
                    .addClass('is-active');
                }
            };

            $target.data('isShow', false);

            if (clickEventType === 'touchend') {
                $label
                .on({
                    'touchstart': function() { this.isTouch = true; },
                    'touchmove': function() { this.isTouch = false; },
                    'touchend': function() {
                        if (this.isTouch) {
                            toggle.call(this);
                        }
                    }
                });
            } else {
                $label.on(clickEventType, toggle);
            }
        });

        if (positionFixedNotSupport) {
            $header
            .css({
                position: 'absolute',
                top: 0,
                left: 0
            });

            $window.on('scroll', setHeaderPos);
        }
    };

    /* -------------------------------------------------------------
     モバイル端末用レイアウト切り替えボタン
     ------------------------------------------------------------- */
    var COOKIE_NAME = 'xservernejp_pclayout';
    var viewportContent = "width=device-width,initial-scale=1.0,minimum-scale=1.0";
    var setLayoutSwitch = function() {
        if (Cookies.get(COOKIE_NAME) === 'enabled') {
            Cookies.remove(COOKIE_NAME);
            document.querySelector("meta[name='viewport']").setAttribute("content", viewportContent);
        }
    };

    /* -------------------------------------------------------------
     スマホ、ズーム時のヘッダー表示・非表示
     ------------------------------------------------------------- */
    var setiosPinchOutHeader = function() {
        var zoom;

        setInterval(function() {
            zoom = document.documentElement.clientWidth / window.innerWidth;

            if (zoom < 1.2) {
                $header.show();
            } else {
                $header.hide();
            }
        }, 1000);
    };

    //アコーディオン設定
    $('.js--accordion').on('click',function(){
        var elm = $(this);
        if($(this).hasClass('is--open')){
            $(this).next().slideUp(function(){
                elm.toggleClass('is--open').find('.ico').toggleClass('ico_minus').toggleClass('ico_plus');
            });
        }else{
            $(this).find('.ico').toggleClass('ico_minus').toggleClass('ico_plus');
            $(this).next().slideToggle();
        }
    });

    if ((iosVersion || androidVersion > 2.3) && Cookies.get(COOKIE_NAME) !== 'enabled') {
        setiosPinchOutHeader();
    }

    /* -------------------------------------------------------------
     ページトップボタン
     ------------------------------------------------------------- */
    var $pageTopBtn = $('#pagetop-btn');
    var showPageTopBtn = false;

    var setPageTopBtn = function() {
        $window.on('scroll', function() {
            if (state !== 'l') return;
            if ($document.scrollTop() > 300) {
                if (showPageTopBtn) return;
                showPageTopBtn = true;
                $pageTopBtn.css({bottom: 20});
            } else {
                if (!showPageTopBtn) return;
                showPageTopBtn = false;
                $pageTopBtn.css({bottom: -65});
            }
        });
    };
	
    /* -------------------------------------------------------------
     キャッシュレス施策
     ------------------------------------------------------------- */
    var setCashless = function() {
		var $cashless = $('.cashless');
		var showCashless = false;
        $window.on('scroll', function() {
            if (state !== 'l') return;
            if ($document.scrollTop() > 300) {
                if (showCashless) return;
                showCashless = true;
                $cashless.css({bottom: 95});
            } else {
                if (!showCashless) return;
                showCashless = false;
                $cashless.css({bottom: 25});
            }
        });
    };

    $html.removeClass('no-js');

    rwd.init();
    if (rwd.supported) {
        rwd.register('(min-width: 0px) and (max-width: 767px)', switchingToSp);
        rwd.register('(min-width: 768px) and (max-width: 1099px)', switchingToTablet);
        rwd.register('(min-width: 1100px)', switchingToPC);
        rwd.update();

        $('.primary-table-ml').responsiveTable({
            secondlyClassName: 'secondly-table-s table table_striped'
        });
        $('.primary-table-l').responsiveTable({
            secondlyClassName: 'secondly-table-sm table table_striped'
        });
        $('.ssl-primary-table-l').responsiveTable({
            secondlyClassName: 'ssl-secondly-table-sm table table_striped'
        });

        if(window.dataLayer) {
            dataLayer.push({'event': 'xserver.responsiveTableCompleted'});
        }
    } else {
        state = 'l';

        // var linkString = '';
        // $('link[rel=stylesheet]').each(function() {
        //     var href = $(this).attr('href');
        //     var name = href.substr(href.lastIndexOf('/') + 1);
        //     name = name.substr(0, name.lastIndexOf('.css'));
        //     linkString += '<link rel="stylesheet" href="' + SITE_URL + 'css.php?name=' + name + '">';
        // });
        // $("head").prepend(linkString);

        $body.css('visibility', 'visible');

        switchingToPC();

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo'
        });
    }

    setPageTopBtn();
	setCashless();
    //setPCnav();
    setSpnav();

    ga_setClickEvent();

    if (lib.browser.iOS || lib.browser.android || lib.browser.windowsPhone) {
        setLayoutSwitch();
    }


    /* -------------------------------------------------------------
     ツールチップ
     ------------------------------------------------------------- */
    var tooltip = function () {
        var targets = $('.tooltip_target');

        // 削除処理
        function remove_tooltip(context) {
            context.animate({top: '-=10', opacity: 0}, 50, function () {
                $(this).remove();
            });
        }

        targets.each(function () {

            var target = false;
            var tooltip = false;
            var flag = false;
            var touchFlag = false;

            // 表示処理
            function func_tooltip(context) {
                flag = true;

                // リセット
                if ($('.tooltip_balloon').length) {
                    remove_tooltip($('.tooltip_balloon'));
                }

                target = $(context);
                var tip = target.parents('.tooltip').find('.tooltip_content').html() + '<div class="tooltip_balloon_bottom"></div><div class="tooltip_balloon_btn"></div>';
                tooltip = $('<div class="tooltip_balloon"></div>');

                if (!tip || tip === '') {
                    return false;
                }

                tooltip
                    .css('opacity', 0)
                    .html(tip)
                    .appendTo('body');

                var init_tooltip = function () {

                    if ($(window).width() < tooltip.outerWidth() * 1.5) {
                        tooltip.css('max-width', $(window).width() / 2);
                        if ($(window).width() / 2 < 240) {
                            tooltip.css('max-width', 240);
                        }
                    } else {
                        tooltip.css('max-width', 240);
                    }

                    var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip.outerWidth() / 2);
                    var pos_top = target.offset().top - tooltip.outerHeight() - 20;

                    if (pos_left < 0) {
                        pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                        tooltip.addClass('left');
                    } else {
                        tooltip.removeClass('left');
                    }

                    if (pos_left + tooltip.outerWidth() > $(window).width()) {
                        pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                        tooltip.addClass('right');
                    } else {
                        tooltip.removeClass('right');
                    }

                    if (pos_top < 0) {
                        pos_top = target.offset().top + target.outerHeight();
                        tooltip.addClass('top');
                    } else {
                        pos_top = target.offset().top - tooltip.outerHeight() - 20;
                        tooltip.removeClass('top');
                    }

                    tooltip
                        .css({left: pos_left, top: pos_top})
                        .animate({top: '+=10', opacity: 1}, 50)
                        .on('mouseleave', function() {
                            if (!touchFlag) {
                                remove_tooltip(tooltip);
                            }
                        });
                };
                init_tooltip();
                $(window).resize(init_tooltip);
            }

            $(this).on({
                'touchstart': function() {
                    touchFlag = true;
                    func_tooltip(this);
                },
                'mouseenter': function () {
                    if (!touchFlag) {
                        func_tooltip(this);
                    }
                }
            });
        });

        // モバイル用削除処理
        $(window).on('touchmove', function () {
            if ($('.tooltip_balloon').length) {
                remove_tooltip($('.tooltip_balloon'));
            }
        });
        $(document).on('touchstart', '.tooltip_balloon', function (e) {
            if (e.target.nodeName !== 'A') remove_tooltip($(this));
        });
    };

    /* ============================================================

     レイアウト共通処理： トップページ

     ============================================================ */
    if (pageId === 'pid-top') {

        ga_setClickEventTop();
        tooltip(); //プラン一覧へツールチップを実装
        // クリッカブルマップもスムーズスクロールさせる
        $(function(){
            $('area').click(function(){
                let target = $($(this).attr('href')).offset().top - $header.height();
                $('html,body').animate({scrollTop : target}, 300);
            });
        });

     /* ============================================================

     レイアウト共通処理： ドメイン料金

     ============================================================ */
    } else if (pageId === 'pid-price') {
        tooltip();

        var scrolltip = function () {
            var targets = $('.js_scrolltip');
            targets.each(function () {
                var target = $(this).find('.scrollHint');
                var flag = false;
                $(this).on('scroll', function () {
                    if (!flag) {
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();
        function adjustTableHeaderWidth() {
            if ($(window).width() >= 1100) {
                $('#domain-price-table').each(function() {
                    var $table = $(this);

                    var $tbodyCells = $table.find('tbody tr:first-child th, tbody tr:first-child td');
                    var $theadCells = $table.find('thead th');

                    $tbodyCells.each(function(index) {
                        var $tbodyCell = $(this);
                        var $theadCell = $theadCells.eq(index);

                        var width = Math.ceil($tbodyCell.outerWidth());

                        $theadCell.outerWidth(width);
                    });
                });
            }else {
                $('#domain-price-table').each(function() {
                    var $table = $(this);

                    var $tbodyCells = $table.find('tbody tr:first-child th, tbody tr:first-child td');
                    var $theadCells = $table.find('thead th');
                    var nav = $('#domain-price-table thead');
                    var block = $('#domain-price-table');

                    $tbodyCells.each(function(index) {
                        var $theadCell = $theadCells.eq(index);
                        $theadCell.css('width','');
                    });
                });
            }
        }

// 初回読み込み時に一度実行
        adjustTableHeaderWidth();
// これにより、ウィンドウのリサイズ（幅が1100px以上になる）時に関数が実行されるよう調整

        var win = $(window);
        var headerH = $('#header').outerHeight();
        var nav = $('#domain-price-table thead');
        var navH = nav.outerHeight();
        var block = $('#domain-price-table');
        if(document.getElementById('domain-price-table')){
            var navPosi = $('#domain-price-table').offset().top - headerH;
            var navBottomPosi = navPosi + $('#domain-price-table').outerHeight();

        }
        $(window).on('resize', function() {
            adjustTableHeaderWidth();
            headerH = $('#header').outerHeight();
            navPosi = $('#domain-price-table').offset().top - headerH;
            navBottomPosi = navPosi + $('#domain-price-table').outerHeight();
            console.log(navH);
        });
        win.on('scroll', function() {
            var scr = win.scrollTop();
            var headerH = 68;
            if (scr > navPosi && scr <= navBottomPosi && $(window).width() >= 1100) {
                nav.addClass('sticky').css({'top': headerH});
                block.css('margin-top', navH);
            } else {
                nav.removeClass('sticky').css({'top': ''});
                block.css('margin-top', 0);
            }
        });
        $("#domain-price-table").each(function(){
            var finds =[];
            var lineno = 0;
            var rows = 1;
            var index = $(this).find('tbody tr > :first-child');

            for(var i=0;i<index.length;i+=1){
                if(!finds[i]){
                    rows = index[i].rowSpan;
                    if (rows > 1) {
                        for (var row = i; row < (i+rows); row += 1) {
                        finds.push({i:row,type:lineno % 2});
                        }
                    }else{
                        finds.push({i:i,type:lineno % 2});
                    }
                    lineno+= 1;
                }
            }
            $(this).find("tbody tr").each(function(i,e){
                if(finds[i].type===1){//0:偶数,1:奇数
                    $(e).addClass("tr-even");
                }
            });
        });

        /* 料金ページ： 料金シミュレーター */
        if ( $('#simulation')[0] ) {
            const priceSimulator = {
                init: function() {
                    const initialCpTxt = $('#initial_cp_txt').val();
                    const runningCpTxt = $('#running_cp_txt').val();

                    // php側の配列をjsに渡す
                    const priceListPhp = JSON.parse($('#price_list').val());
                    const initialListPhp = JSON.parse($('#initial_list').val());

                    // カンマを付ける処理
                    function comma(num) {
                        return num.toString().replace(/(\d)(?=(\d{3})+$)/g, '$1,');
                    }

                    function rewriteSimCalcPrice (obj) {
                        // シミュレーター結果の月額料金書き換え
                        let finalPriceInfo,
                            selectPeriodCpType,
                            selectPeriodPrice,
                            selectPeriodPriceCp,
                            selectPeriodPriceRenewManual,
                            selectPeriodPriceRenewAuto;

                        if ( thisParentId === 'beginning' ) { // 初めての方
                            // 選択し契約期間の情報取得
                            selectPeriodCpType = obj.data('campaign_type');
                            selectPeriodPrice = obj.data('price');
                            selectPeriodPriceCp = obj.data('price_cp');

                            if ( selectPeriodCpType === 1 ) {
                                finalPriceInfo = comma(selectPeriodPrice) + '円' + ' → <span class="sim__priceCp">' + comma(selectPeriodPriceCp) + '円';
                                $thisParent.find('.sim__resultDetail__runningCpNotes').text(runningCpTxt);
                            } else {
                                finalPriceInfo = comma(selectPeriodPrice) + '円';
                                $thisParent.find('.sim__resultDetail__runningCpNotes').text('');
                            }
                        } else { // 契約更新の方
                            selectPeriodPriceRenewManual = obj.data('renew_manual');
                            selectPeriodPriceRenewAuto = obj.data('renew_auto');
                            finalPriceInfo = comma(selectPeriodPriceRenewManual) + '円' + '（' + comma(selectPeriodPriceRenewAuto) + '円）';
                        }

                        $thisParent.find('.js-selectPrice').html(finalPriceInfo);


                        // プランと契約期間の選択状態を判定/計算
                        let $total,
                            totalRunning,
                            totalRenewManual,
                            totalRenewAuto;

                        if ( thisParentId === 'beginning' ) { // 初めての方
                            $('#beginning .sim__result__inputNotes').hide(); // シミュレーション結果のメッセージを消す
                            $('#beginning .sim__resultDetail').slideDown(300);
                            $total = $('#beginning .js-total');
                            if ( selectPeriodCpType === 1 ) {
                                $total.addClass('sim__priceCp');
                                totalRunning = selectPeriodMonths * selectPeriodPriceCp;
                            } else {
                                $total.removeClass('sim__priceCp');
                                totalRunning = selectPeriodMonths * selectPeriodPrice;
                            }
                            $total.html(comma(totalRunning) + '<span class="jp_en">円</span>');
                        } else { // 契約更新の方
                            $('#contract_renewal .sim__result__inputNotes').hide(); // シミュレーション結果のメッセージを消す
                            $('#contract_renewal .sim__resultDetail').slideDown(300);
                            $total = $('#contract_renewal .js-total');
                            totalRenewManual = selectPeriodMonths * selectPeriodPriceRenewManual;
                            totalRenewAuto = selectPeriodMonths * selectPeriodPriceRenewAuto;
                            $total.html(comma(totalRenewManual) + '<span class="jp_en">円</span>（' + comma(totalRenewAuto) + '<span class="jp_en">円</span>）');
                        }
                    }

                    // タブ
                    const $sinNav = $('#js-sim__nav');
                    const $sinNavTarget = $sinNav.find('a');

                    // 選択したプラン・契約期間の親要素
                    let $thisParent,
                        thisParentId;

                    // プラン情報
                    let planCheckBegin = false,
                        planCheckRenew = false;

                    // 契約期間情報
                    let $selectPeriod,
                        selectPeriodMonths,
                        periodCheckBegin = false,
                        periodCheckRenew = false;

                    // ------------------------------------------------------------
                    // タブを選択したとき
                    // ------------------------------------------------------------
                    $sinNavTarget.on('click', function () {
                        $('.sim__target').removeClass('sim__target--active');
                        let simNavTargetId = $(this).attr('href');
                        let $simTarget = $(simNavTargetId);
                        $simTarget.addClass('sim__target--active');
                        $(this).parent('li').addClass('sim__nav__item--active').siblings().removeClass('sim__nav__item--active');
                        return false;
                    });


                    // ------------------------------------------------------------
                    // プランを選択したとき
                    // ------------------------------------------------------------
                    // キャンペーン情報
                    const runningPlans = priceListPhp.runningPlans;

                    // プラン（label）を選択したとき input が反応するため無効化
                    $('.simulation input').on('click', function (e) { e.stopPropagation(); });

                    $('.sim__item__body--plan label').on('click', function () {
                        // 親取得
                        $thisParent = $(this).parents('.sim__target');
                        thisParentId = $thisParent.attr('id');

                        // 選択したプランの関連情報取得
                        //let $listPlan = $thisParent.find('.sim__item__body--plan label'); // 兄弟
                        let $listPeriodParent = $thisParent.find('.sim__item__body--period'); // 契約期間のラッパー
                        let $listPeriod = $listPeriodParent.find('label'); // 契約期間
                        let selectPlanVal = $('input#' + $(this).attr('for')).val(); // value
                        let selectPlan = runningPlans[selectPlanVal]; // phpから取得した配列内の該当プラン情報
                        let selectPlanDetails = selectPlan.planDetails;

                        // シミュレーター結果のプラン名書き換え
                        $thisParent.find('.js-selectPlan').text($(this).data('plan') + 'プラン お支払い料金'); // プラン名

                        let periodCheck = false;
                        if ( thisParentId === 'beginning' ) { // 初めての方
                            let selectPlanCpFlag = false;

                            // 配列から金額を取り出してセット
                            $.each($listPeriod, function(i) {
                                let pickCpType = selectPlanDetails[i].cpType; // CPタイプ取得
                                let pickPrice = selectPlanDetails[i].price; // 通常価格取得
                                let pickPriceCp = selectPlanDetails[i].priceCp; // CP価格取得
                                $(this).data('price', pickPrice).data('price_cp', pickPriceCp).data('campaign_type', pickCpType);

                                let finalPriceInfo;
                                if ( pickCpType === 1 ) { // CP時（〇〇円表記）
                                    finalPriceInfo = '<s>' + comma(pickPrice) + '円</s> → <span class="sim__priceCp">' + comma(pickPriceCp) + '円</span>/月';
                                    selectPlanCpFlag = true;
                                } else {
                                    finalPriceInfo = comma(pickPrice) + '円/月';
                                }
                                $(this).find('.subLabelPrice').html(finalPriceInfo);
                            });

                            if ( selectPlanCpFlag ) {
                                $('#beginning .sim__item__runningCpNotes').text('※キャンペーン価格が適用されています。');
                            } else {
                                $('#beginning .sim__item__runningCpNotes').text('');
                            }

                            planCheckBegin = true;
                            if ( periodCheckBegin ) periodCheck = true; // 契約期間の選択状態を判定
                        } else { // 契約更新の方
                            // 配列から金額を取り出してセット
                            $.each($listPeriod, function(i) {
                                let pickRenewManual = selectPlanDetails[i].renewManual; // 手動更新価格取得
                                let pickRenewAuto = selectPlanDetails[i].renewAuto; // 自動更新価格取得
                                $(this).data('renew_manual', pickRenewManual).data('renew_auto', pickRenewAuto);
                                $(this).find('.subLabelPrice').text(comma(pickRenewManual) + '円/月');
                            });

                            planCheckRenew = true;
                            if ( periodCheckRenew ) periodCheck = true; // 契約期間の選択状態を判定
                        }

                        // 契約期間が選択されていたら、シミュレーター結果の月額料金書き換え（契約期間選択→プラン選択の流れだった場合）
                        if ( periodCheck ) {
                            let selectPeriodId = $listPeriodParent.find('input:checked').attr('id'); // 選択されているinputのID取得
                            $selectPeriod = $thisParent.find('label[for="' + selectPeriodId + '"]'); // 選択されているラベル取得
                            rewriteSimCalcPrice($selectPeriod);
                        }
                    });


                    // ------------------------------------------------------------
                    // 契約期間を選択したとき
                    // ------------------------------------------------------------
                    // キャンペーン情報
                    const initialCpMonth = initialListPhp['initialCpMonth']; // CP対象契約期間を取得
                    const initialPriceCp = initialListPhp['initialPriceCp']; // CP価格を設定
                    const initialPrice = initialListPhp['initialPrice']; // 通常価格を取得

                    if ( $('.sim__item__initialCpNotes')[0] ) {
                        if ( initialCpMonth === 99 ) {
                            $('.sim__item__initialCpNotes').text('※新規契約で【初期費用】が' + comma(initialPriceCp) + '円');
                        } else {
                            $('.sim__item__initialCpNotes').text('※' + initialCpMonth + 'ヶ月以上の契約で【初期費用】が' + comma(initialPriceCp) + '円');
                        }
                    }

                    $('.sim__item__body--period label').on('click', function () {
                        // 親取得
                        $thisParent = $(this).parents('.sim__target');
                        thisParentId = $thisParent.attr('id');

                        // シミュレーター結果「〇ヶ月」書き換え
                        selectPeriodMonths = $(this).data('period');
                        $thisParent.find('.js-selectPeriod').text(selectPeriodMonths + 'ヶ月'); // 契約期間

                        // シミュレーター結果「初期費用」書き換え
                        if ( initialCpMonth === 0 ) { // CP判定 通常時
                            $thisParent.find('.js-initial').html(comma(initialPrice) + '円');
                        } else { // CP時
                            let selectInitialPrice = initialListPhp['initialEachPrice'][selectPeriodMonths]; // 個別設定の価格取得
                            if ( selectInitialPrice !== false && selectInitialPrice >= 0 ) { // false や マイナス値 は入力しないはずだが念のため。
                                if ( selectPeriodMonths >= initialCpMonth || initialCpMonth === 99 ) {
                                    // CP対象（Xヶ月以上に該当か全契約期間CP)の場合、CP価格を設定（個別の価格が設定されていてもCP価格を優先）
                                    $thisParent.find('.js-initial').html(
                                        comma(initialPrice) + '円 → <span class="sim__priceCp">' + comma(initialPriceCp) + '<span class="jp_en">円</span></span>'
                                    );
                                    $thisParent.find('.sim__resultDetail__initialCpNotes').text(initialCpTxt);
                                } else {
                                    // CP対象外
                                    if (selectInitialPrice === true) {
                                        $thisParent.find('.js-initial').text(comma(initialPrice) + '円');
                                        $thisParent.find('.sim__resultDetail__initialCpNotes').text('');
                                    } else { // 個別に価格設定されている場合

                                        $thisParent.find('.js-initial').html(
                                            comma(initialPrice) + '円 → <span class="sim__priceCp">' + comma(selectInitialPrice) + '<span class="jp_en">円</span></span>'
                                        );
                                        $thisParent.find('.sim__resultDetail__initialCpNotes').text(initialCpTxt);
                                    }
                                }
                            } else {
                                // エラーとなる値を設定していた場合、フォールバックとして通常価格を設定
                                $thisParent.find('.js-initial').text(comma(initialPrice) + '円');
                                $thisParent.find('.sim__resultDetail__initialCpNotes').text('');
                            }
                        }

                        // 契約期間の選択状態をオンに
                        let planCheck = false;
                        if ( thisParentId === 'beginning' ) { // 初めての方
                            periodCheckBegin = true;
                            if ( planCheckBegin ) planCheck = true; // プランの選択状態を判定
                        } else { // 契約更新の方
                            periodCheckRenew = true;
                            if ( planCheckRenew ) planCheck = true; // プランの選択状態を判定
                        }

                        // プランが選択されていたら、シミュレーター結果の月額料金書き換え
                        if ( planCheck ) {
                            rewriteSimCalcPrice($(this));
                        }
                    });
                    // 料金シミュレーター・見積書の存在を分かりやすくするため
                    // スタンダード12ヶ月をデフォルトで選択済みにする
                    $('label[for="beginning_standard"]').triggerHandler('click');
                    $('#sim_planId').val(priceListPhp['runningPlans'][0]['planId']);
                    $('label[for="beginning_12months"]').triggerHandler('click');
                    $('#sim_planMonth').val(12);
                }
            };
            priceSimulator.init();
        }

    /* ============================================================

     レイアウト共通処理： マニュアルページ

     ============================================================ */
    } else if (pageId === 'pid-manual') {
        /* サイドメニュー */
        lib.accordion({
            container: '.side-menu_accordion',
            label: '.side-menu_accordion_label',
            body: '.side-menu_accordion_body',
            duration: 200,
            easing: 'easeOutExpo'
        });

        //クリックしたときのファンクションをまとめて指定
        $('.tab-area li').click(function() {
            if($(this).hasClass('is-select')) return;

            //.index()を使いクリックされたタブが何番目かを調べ、
            //		indexという変数に代入します。
            var index = $('.tab-area li').index(this);

            //コンテンツを一度すべて非表示にし、
            $('.tab-area_content').css('display','none');

            //クリックされたタブと同じ順番のコンテンツを表示します。
            $('.tab-area_content').eq(index).fadeIn();

            //タブについているクラスis-selectを消し、
            $('.tab-area li').removeClass('is-select');

            //クリックされたタブのみにクラスis-selectをつけます。
            $(this).addClass('is-select');
        });

        //location.hashで#以下を取得 変数hashに格納
        var hash = location.hash;
        //hashの中に#tab〜が存在するか調べる。
        hash = (hash.match(/^#tab\d+$/) || [])[0];

        //hashに要素が存在する場合、hashで取得した文字列（#tab2,#tab3等）から#より後を取得(tab2,tab3)
        if($(hash).length){
            var tabname = hash.slice(1) ;
        } else{
           // 要素が存在しなければtabnameにtab1を代入する
           var tabname = "tab1";}
        //コンテンツを一度すべて非表示にし、
        $('.tab-area_content').css('display','none');

        //一度タブについているクラスis-selectを消し、
        $('.tab-area li').removeClass('is-select');

        var tabno = $('.tab-area li#' + tabname).index();

        //クリックされたタブと同じ順番のコンテンツを表示します。
        $('.tab-area_content').eq(tabno).fadeIn();

        //クリックされたタブのみにクラスis-selectをつけます。
        $('.tab-area li').eq(tabno).addClass('is-select');

        //マニュアルアンケート
        $('.js--manualVote').on('click',function(){
            const duration = 150;
            const elm = $(this);
            $('.js--manualVote').attr('disabled','disabled');
            const text = elm.parentsUntil('.manualEnq').find('.manualEnq__text');
            text.animate({'opacity':0},duration,'linear',function(){
                text.html('回答を送信しました。ご協力ありがとうございました。').animate({'opacity':1},duration,'linear');
           });
           elm.parents('.manualEnq__answer').animate({'opacity':0},duration,'linear',function(){
               $(this).hide();
           });
        });


         /* ============================================================

         ツールチップ処理：　独自SSLトップ

         ============================================================ */
    } else if (pageId === 'pid-functions') {
        tooltip();

        var scrolltip = function () {
            var targets = $('.js_scrolltip');
            targets.each(function () {
                var target = $(this).find('.scrollHint');
                var flag = false;
                $(this).on('scroll', function () {
                    if (!flag) {
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();
    }
    else if (pageId === 'pid-support') {
            var scrolltip = function() {
                var targets = $('.js_scrolltip');
                targets.each(function(){
                    var target = $(this).find('.scrollHint');
                    var flag = false;
                    $(this).on('scroll', function() {
                        if( !flag ){
                            flag = true;
                            target.fadeOut(700);
                        }
                    });
                });
            };
            scrolltip();
        /* ============================================================

         スクロールチップ処理： シンプル料金宣言

         ============================================================ */
    } else if (pageId === 'pid-feature') {
        var scrolltip = function() {
            var targets = $('.js_scrolltip');
            targets.each(function(){
                var target = $(this).find('.scrollHint');
                var flag = false;
                $(this).on('scroll', function() {
                    if( !flag ){
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();
        /* ============================================================

         スクロールチップ処理： お友達紹介プログラム

         ============================================================ */
    } else if (pageId === 'pid-info') {
        var scrolltip = function() {
            var targets = $('.js_scrolltip');
            targets.each(function(){
                var target = $(this).find('.scrollHintfriend1, .scrollHintfriend2');
                var flag = false;
                $(this).on('scroll', function() {
                    if( !flag ){
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();

        /* ============================================================

         レイアウト共通処理： よくある質問

         ============================================================ */
    } else if (pageId === 'pid-faq') {
        /* サイドメニュー アコーディオン */
        lib.accordion({
            container: '.side-menu_accordion',
            label: '.side-menu_accordion_label',
            body: '.side-menu_accordion_body',
            duration: 200,
            easing: 'easeOutExpo'
        });

        /* よくある質問 アコーディオン */
        lib.accordion({
            container: '.faq_unit',
            label: '.faq_unit_ttl',
            body: '.faq_unit_body',
            duration: 200,
            easing: 'easeOutExpo'
        });

        /* よくある質問  アンカー対応 */

        var faqUnitSetting = function(openId){
            var faqIdNum;
            var $faqUnit;

            $('.faq_unit').each(function() {
                if (openId == $(this).attr('id')) {
                    $faqUnit = $(this);
                }
            });

            if($faqUnit) {
                $faqUnit.addClass('is-open');
                $faqUnit.find('.faq_unit_body').show();
            }
        };

        if (location.hash) {
            faqUnitSetting(location.hash.split("#")[1]);
        }

        /* よくある質問  リンクにページ内遷移が含まれている場合の処理 */
        var $faqUnitBodyInterLink = $('.faq_unit_body_inter-link');

        if($faqUnitBodyInterLink.length !== 0){
            $faqUnitBodyInterLink
            .on('click', function() {
                var href = $(this).attr('href');
               
                faqUnitSetting(href.split("#")[1]);
            });
        }        //マニュアルアンケート
        $('.js--manualVote').on('click',function(){
            const duration = 150;
            const elm = $(this);
            $('.js--manualVote').attr('disabled','disabled');
            const text = elm.parentsUntil('.manualEnq').find('.manualEnq__text');
            text.animate({'opacity':0},duration,'linear',function(){
                text.html('回答を送信しました。ご協力ありがとうございました。').animate({'opacity':1},duration,'linear');
            });
            elm.parents('.manualEnq__answer').animate({'opacity':0},duration,'linear',function(){
                $(this).hide();
            });
        });
        //FAQアンケート
        $('.js--faqVote').on('click',function(){
            const duration = 150;
            const elm = $(this);
            $('.js--faqVote').attr('disabled','disabled');
            const text = elm.parentsUntil('.faqEnq').find('.faqEnq__text');
            text.animate({'opacity':0},duration,'linear',function(){
                text.html('回答を送信しました。ご協力ありがとうございました。').animate({'opacity':1},duration,'linear');
            });
            elm.parents('.faqEnq__answer').animate({'opacity':0},duration,'linear',function(){
                $(this).hide();
            });
        });
    } else if (pageId === 'pid-info') {

        var scrolltip = function () {
            var targets = $('.js_scrolltip');
            targets.each(function () {
                var target = $(this).find('.scrollHint');
                var flag = false;
                $(this).on('scroll', function () {
                    if (!flag) {
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();
    }

    /* ============================================================

    チャットボット（問い合わせページ）

     ============================================================ */

    if (pageId === 'pid-support' && $('body').hasClass("support-contact")) {
        $('.btn_chat_2').on('click', function() {
            zE('webWidget', 'close');
        });

        $('.support-chat-trigger').on('click', function() {
            ChatplusScript.closeChat();
        });
    }

    /* ============================================================

     トップMV下スライド

     ============================================================ */
    if (pageId === 'pid-top' && $('.slick-slide').length) {
        $('.mvPickup__slide').slick({
            dots: true,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: 'unslick'
                }
            ]
        });
        $(window).resize(function(){
            $('.mvPickup__slide').slick('resize');
        });
    }
    /* -------------------------------------------------------------
     友達紹介モーダルウィンドウ
     ------------------------------------------------------------- */
    let url = new URL(window.location.href);// URLを取得
    let params = url.searchParams;// URLSearchParamsオブジェクトを取得
   // getメソッドにて取得
    let paramA = params.get('utm_source');
    let paramB = params.get('utm_medium');
    let paramC = params.get('utm_campaign');
    if(paramA==='introduction_url'&&paramB==='cpp'&&paramC==='introduction_program'){
        document.cookie = "xserverjp_intropg=1; max-age=7200";
    }
    if($('body').attr('id')==='pid-top'&&Cookies.get('xserverjp_intropg') === '1'&&Cookies.get('xserverjp_intropgShow') != '1'){
        $('.flModal').addClass('is--show');
    }
    $('.flModal .js--close').on('click',function(){
        $('.flModal').removeClass('is--show');
        document.cookie = "xserverjp_intropgShow=1; max-age=7200";
    });
    /* ============================================================

     XS vs XBiz

     ============================================================ */
    if (pageClass === 'pid-lp-comparison') {
        var scrolltip = function() {
            var targets = $('.js_scrolltip');
            targets.each(function(){
                var target = $(this).find('.scrollHint');
                var flag = false;
                $(this).on('scroll', function() {
                    if( !flag ){
                        flag = true;
                        target.fadeOut(700);
                    }
                });
            });
        };
        scrolltip();
        tooltip();
        $("input[type='radio']").change(function(){
            var id = $(this).attr('id');
            $('.chartContainer').children().removeClass("selected");
            if($(this).is(":checked")){
                $('.chartContainer').find("[id='"+ $(this).attr("id")+ "']").addClass("selected");
            }else{
                $(this).parent().removeClass("selected");
            }
        });
        //stickyイベントを取得
        /*const select = document.querySelector('#planDummy_xserver');
        const observer = new window.IntersectionObserver( (entry) => {
            if (!entry[0].isIntersecting) {
                document.querySelector('.planHeader_xserver').classList.add('hover');
            } else {
                document.querySelector('.planHeader_xserver').classList.remove('hover');
            }
        });
        observer.observe(select);

        const select2 = document.querySelector('#planDummy_xbiz');
        const observer2 = new window.IntersectionObserver( (entry) => {
            if (!entry[0].isIntersecting) {
                document.querySelector('.planHeader_xbiz').classList.add('hover');
            } else {
                document.querySelector('.planHeader_xbiz').classList.remove('hover');
            }
        });
        observer2.observe(select2);*/
    }
});
