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
    var iosVersion = (function () {
        var v, versions;
        if (/iP(hone|od|ad)/.test(navigator.platform)) {
            v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
            versions = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
            return versions[0];
        }
        return versions;
    })();
    var androidVersion = (function () {
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

    $(function() {
        $('html').removeClass('noJS');
        rwd.init();
        // スマホレイアウトになった時の処理
        rwd.register('(min-width: 0px) and (max-width: 767px)', function() {
            window.layoutState = 's';
            replaceImage('s');
        });

        // TABレイアウトになった時の処理
        rwd.register('(min-width: 768px) and (max-width: 999px)', function() {
            window.layoutState = 'm';
            replaceImage('m');
        });

        // PCレイアウトになった時の処理
        rwd.register('(min-width: 1000px)', function() {
            window.layoutState = 'l';
            replaceImage('l');
        });

        rwd.update();
    });
});
/* -------------------------------------------------------------
 別タブa要素へ「rel=noopener」付与
 ------------------------------------------------------------- */
$(function() {
    let elements = document.querySelectorAll('a');
    let i = elements.length;
    for (; i--;) {
        let target = elements[i];
        if (!target.hasAttribute('target')) {
            continue;
        }
        if (target.getAttribute('target') !== '_blank') {
            continue;
        }
        target.setAttribute('rel', 'noopener');
    }
});

/* -------------------------------------------------------------
 スムーズスクロール
 ------------------------------------------------------------- */
$(function() {
    $(document).on('click', 'a', function() {
        let href = $(this).attr('href');
        if (href.charAt(0) !== '#') {
            return;
        }
        window.scrollTo({
            top: href === '#' ? 0 : $(href).offset().top,
            behavior: 'smooth'
        });
        return false;
    });
});