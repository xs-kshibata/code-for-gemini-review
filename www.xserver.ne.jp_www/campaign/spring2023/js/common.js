jQuery(function() {
    lib.fixheight({
        //target: '.itemDetail'
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
        rwd.register('(min-width: 768px)', switchingToPC);
        rwd.update();

        if(window.dataLayer) {
            dataLayer.push({'event': 'xserver.responsiveTableCompleted'});
        }
    }

    //紙吹雪（PCのみ）
    var snowfall_flag = 1;
    $(window).on('load resize',function(){
        if ($(window).width() > 767) {
            if (snowfall_flag == 1) {
                setTimeout(function(){
                    $('.snowfall').snowfall({
                        minSize : 8,
                        maxSize : 15,
                        minSpeed : 1,
                        maxSpeed : 1,
                        flakeCount : 20,
                        flakeColor : 'transparent'
                    });
                    $('.snowfall .snowfall-flakes').append('<div class="box"></div>');
                    var css = '',
                        style = document.createElement('style');
                    $('.snowfall .snowfall-flakes').each(function(i){
                        var rdm_rotate = Math.floor(Math.random() * 10) + 5,
                            rdm_x = (Math.floor(Math.random() * 10) * 0.1) + 0.2;
                        css += '.snowfall .snowfall-flakes:nth-child(' + (i + 1) + ') {animation: flakes_rotate ' + rdm_rotate + 's infinite linear;}';
                        css += '.snowfall .snowfall-flakes:nth-child(' + (i + 1) + ') .box {animation: flakes_x ' + rdm_x + 's infinite linear;}';
                    });
                    style.innerHTML = css;
                    document.head.appendChild(style);
                    $('.snowfall').hide().fadeIn(1000);
                },500);
                snowfall_flag = 0;
            }
        } else {
            $('.snowfall').snowfall('clear');
            snowfall_flag = 1;
        }
    });
});