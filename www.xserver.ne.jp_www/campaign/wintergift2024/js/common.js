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

});