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

    // //紙吹雪（PCのみ）
    // var snowfall_flag = 1;
    // $(window).on('load resize',function(){
    //     if ($(window).width() > 767) {
    //         if (snowfall_flag == 1) {
    //             setTimeout(function(){
    //                 $('.snowfall').snowfall({
    //                     minSize : 8,
    //                     maxSize : 15,
    //                     minSpeed : 1,
    //                     maxSpeed : 1,
    //                     flakeCount : 20,
    //                     flakeColor : 'transparent'
    //                 });
    //                 $('.snowfall .snowfall-flakes').append('<div class="box"></div>');
    //                 var css = '',
    //                     style = document.createElement('style');
    //                 $('.snowfall .snowfall-flakes').each(function(i){
    //                     var rdm_rotate = Math.floor(Math.random() * 10) + 5,
    //                         rdm_x = (Math.floor(Math.random() * 10) * 0.1) + 0.2;
    //                     css += '.snowfall .snowfall-flakes:nth-child(' + (i + 1) + ') {animation: flakes_rotate ' + rdm_rotate + 's infinite linear;}';
    //                     css += '.snowfall .snowfall-flakes:nth-child(' + (i + 1) + ') .box {animation: flakes_x ' + rdm_x + 's infinite linear;}';
    //                 });
    //                 style.innerHTML = css;
    //                 document.head.appendChild(style);
    //                 $('.snowfall').hide().fadeIn(1000);
    //             },500);
    //             snowfall_flag = 0;
    //         }
    //     } else {
    //         $('.snowfall').snowfall('clear');
    //         snowfall_flag = 1;
    //     }
    // });
});