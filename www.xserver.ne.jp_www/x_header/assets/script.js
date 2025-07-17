(function(window, document, $, undefined){
    'use strict';

    $(function(){
        $('.xhSubLink__item')
        .each(function(){
            var $item = $(this);
            if($item.find('.xhDropDown').length === 0){
                return;
            }
            $item
            .on('mouseenter', function(){
                $(this)
                .find('.xhSubLink__itemInner')
                .addClass('is-hover')
                .end()
                .find('.xhDropDown')
                .show();
            })
            .on('mouseleave', function(){
                $(this)
                .find('.xhSubLink__itemInner')
                .removeClass('is-hover')
                .end()
                .find('.xhDropDown')
                .slideUp(200);
            });
        })
    });
})(window, document, jQuery);