
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

/* -------------------------------------------------------------
 ページトップボタン
 ------------------------------------------------------------- */
$(function() {
    let $pageTopBtn = $('.pageTopBtn');
    let showPageTopBtn = false;

    $(window).on('scroll', function() {
        if ($(document).scrollTop() > 300) {
            if (showPageTopBtn) return;
            showPageTopBtn = true;
            $pageTopBtn.css({bottom: 10});
        } else {
            if (!showPageTopBtn) return;
            showPageTopBtn = false;
            $pageTopBtn.css({bottom: -65});
        }
    });
});

/* -------------------------------------------------------------
 操作方法切り替え
 ------------------------------------------------------------- */
$(function() {
    let btnList = [];

    $('.guideSwitch__btn')
    .each(function(index, element) {
        let $btn = $(element);

        $btn
        .data('id', index)
        .data('content', $($btn.attr('href')))
        .on('click', function() {
            switchGuide($(this).data('id'));
            return false;
        });

        btnList.push($btn);
    });

    function switchGuide(id) {
        let i = btnList.length;
        for (; i--;) {
            let $btn = btnList[i];
            let $content = $btn.data('content');
            if (i === id) {
                $btn.addClass('isCurrent');
                $content.addClass('isCurrent');
            } else {
                $btn.removeClass('isCurrent');
                $content.removeClass('isCurrent');
            }
        }
    }

    switchGuide(0);
});

/* -------------------------------------------------------------
 操作方法アコーディオン
 ------------------------------------------------------------- */
$(function() {
    $(document).on('click', '.guideUnit__ttl', function() {
        let $guideUnit = $(this).parents('.guideUnit');
        if ($guideUnit.hasClass('isOpen')) {
            $guideUnit.removeClass('isOpen');
        } else {
            $guideUnit.addClass('isOpen');
        }
    });
});