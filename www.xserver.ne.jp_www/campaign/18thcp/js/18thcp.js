jQuery(function() {

    lib.fixheight({
        target: '.itemDetail'
    });

    lib.accordion();

    var snsBtnsState = '';
    var getState = function(){
        var state = 'sp';
        if($(window).innerWidth() > 767) {
            state =  'pc';
        }
        return state;
    }

    $(window).on('resize', function() {
        var state = getState();

        if (state === snsBtnsState) return;
        snsBtnsState = state;

        var $target = $('.shared_list');

        if (state === 'pc') {
            $target.show();
        }else{
            $target.hide().removeClass('is-open');
        }
    });

    $('.shared_toggle').on('click', function(){
        var $target = $('.shared_list');
        var isOpen = $target.hasClass('is-open');
        if(!isOpen) {
            $target.slideDown(200).addClass('is-open');
        }else{
            $target.slideUp(100).removeClass('is-open');
        }
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

    var switchingToSp = function() {
        replaceImage('s');

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo',
        });
    };

    /* -------------------------------------------------------------
 PCに切り替わった時の処理
 ------------------------------------------------------------- */

    var switchingToPC = function() {
        replaceImage('l');

        lib.smoothScroll({
            duration: 300,
            easing: 'easeOutExpo'
        });
    };

    rwd.init();
    if (rwd.supported) {
        rwd.register('(min-width: 0px) and (max-width: 767px)', switchingToSp);
        // rwd.register('(min-width: 768px) and (max-width: 969px)', switchingToTablet);
        rwd.register('(min-width: 970px)', switchingToPC);
        rwd.update();

        if(window.dataLayer) {
            dataLayer.push({'event': 'xserver.responsiveTableCompleted'});
        }
    }

    });
