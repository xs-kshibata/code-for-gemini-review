  /*----- Page hiding snippet (recommended)　-----*/
(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',1000,
{'GTM-WGFNFH8':true});


/*
 a要素のonClickにGAイベントを設定、最長1秒までhitCallbackを待ってからページ遷移
 例： ga_onClick('a.target', 'send', 'event', 'internal_link', 'click', 'example_button');
 */
var ga_onClick = function(selector, command, hitType, eventCategory, eventAction, eventLabel) {
    if (!jQuery) {
        console.log('ga_onClick() の使用にはjQueryが必要です。');
        return;
    }

    var $ = jQuery;

    var onClick = function(e) {
        e.preventDefault();

        var timerId = 0;
        var timerComplete = false;
        var $eTarget = $(this);
        var eventList = $eTarget.data('eventList');
        var numEvents = eventList.length;
        var sendCnt = 0;

        var onSendEvent = function() {
            clearTimeout(timerId);
            sendCnt += 1;

            if (timerComplete || sendCnt === numEvents) {
                onSendEvent = function() {};
                $eTarget.data('clicked', false);

                if ($eTarget.off) {
                    $eTarget.off('click.ga_clickEvent', onClick);
                } else {
                    $eTarget.unbind('click.ga_clickEvent', onClick);
                }

                var url = $eTarget.attr('href');
                if (url) {
                    document.location = url;
                }
            }
        };

        if ($eTarget.data('clicked')) {
            return;
        } else {
            $eTarget.data('clicked', true);
        }

        var i = numEvents;
        for (; i--;) {
            var list = eventList[i];
            gtag('event', list[3], {
                'event_category': list[2],
                'event_label': list[4],
                'event_callback': onSendEvent,
            });

            // if (!navigator.sendBeacon) {
                clearTimeout(timerId);
                timerId = setTimeout(function() {
                    timerComplete = true;
                    onSendEvent();
                }, 1000);
            // }
        }
    };

    $(selector).each(function() {
        var $a = $(this);
        var list = $a.data('eventList') || [];
        list.push([command, hitType, eventCategory, eventAction, eventLabel]);

        if (!$a.data('hasEvent')) {
            if ($a.on) {
                $a.on('click.ga_clickEvent', onClick);
            } else {
                $a.bind('click.ga_clickEvent', onClick);
            }
        }

        $a.data({
            hasEvent: true,
            eventList: list
        });
    });
};

/*
 form要素のonSubmitにGAイベントを設定、最長1秒までhitCallbackを待ってからページ遷移
 例： ga_onSubmit('form.target', 'send', 'event', 'internal_link', 'submit', 'example_form');
 */
var ga_onSubmit = function(selector, command, hitType, eventCategory, eventAction, eventLabel) {
    if (!jQuery) {
        console.log('ga_onSubmit() の使用にはjQueryが必要です。');
        return;
    }

    var $ = jQuery;

    var onSubmit = function(e) {
        e.preventDefault();

        var timerId = 0;
        var timerComplete = false;
        var $eTarget = $(this);
        var eventList = $eTarget.data('eventList');
        var numEvents = eventList.length;
        var sendCnt = 0;

        var onSendEvent = function() {
            clearTimeout(timerId);
            sendCnt += 1;

            if (timerComplete || sendCnt === numEvents) {
                onSendEvent = function() {};
                $eTarget.data('submitted', false);

                if ($eTarget.off) {
                    $eTarget.off('submit.ga_submitEvent', onSubmit);
                } else {
                    $eTarget.unbind('submit.ga_submitEvent', onSubmit);
                }

                $eTarget.submit();
            }
        };

        if ($eTarget.data('submitted')) {
            return;
        } else {
            $eTarget.data('submitted', true);
        }

        var i = numEvents;
        for (; i--;) {
            var list = eventList[i];
            gtag('event', list[3], {
                'event_category': list[2],
                'event_label': list[4],
                'event_callback': onSendEvent,
            });
            // if (!navigator.sendBeacon) {
                clearTimeout(timerId);
                timerId = setTimeout(function() {
                    timerComplete = true;
                    onSendEvent();
                }, 1000);
            // }
        }
    };

    $(selector).each(function() {
        var $form = $(this);
        var list = $form.data('eventList') || [];
        list.push([command, hitType, eventCategory, eventAction, eventLabel]);

        if (!$form.data('hasEvent')) {
            if ($form.on) {
                $form.on('submit.ga_submitEvent', onSubmit);
            } else {
                $form.bind('submit.ga_submitEvent', onSubmit);
            }
        }

        $form.data({
            hasEvent: true,
            eventList: list
        });
    });
};

/*
 clickTargetIdクリックによるsubmitTargetId(form)のonSubmitにGAイベントを設定、最長1秒までhitCallbackを待ってからページ遷移
 例： ga_onClickSubmit('clickTargetId', 'submitTargetId', send', 'event', 'internal_link', 'submit', 'example_form');
 */
var ga_onClickSubmit = function(clickTargetId, submitTargetId, command, hitType, eventCategory, eventAction, eventLabel) {
    if (!jQuery) {
        console.log('ga_onClickSubmit() の使用にはjQueryが必要です。');
        return;
    }

    var $ = jQuery;
    var clicked = false;
    var $clickTarget = $('#' + clickTargetId);
    var $submitTarget = $('#' + submitTargetId);

    var onClick = function(){
        clicked = true;
    };

    var onSubmit = function(e) {
        if(clicked){
            e.preventDefault();

            var timerId = 0;
            var timerComplete = false;
            var $eTarget = $(this);
            var eventList = $eTarget.data('eventList');
            var numEvents = eventList.length;
            var sendCnt = 0;

            var onSendEvent = function() {
                clearTimeout(timerId);
                sendCnt += 1;

                if (timerComplete || sendCnt === numEvents) {
                    onSendEvent = function() {};
                    $eTarget.data('submitted', false);

                    if ($eTarget.off) {
                        $eTarget.off('submit.ga_submitEvent', onSubmit);
                    } else {
                        $eTarget.unbind('submit.ga_submitEvent', onSubmit);
                    }

                    $eTarget.submit();
                }
            };

            if ($eTarget.data('submitted')) {
                return;
            } else {
                $eTarget.data('submitted', true);
            }

            var i = numEvents;
            for (; i--;) {
                var list = eventList[i];
                gtag('event', list[3], {
                    'event_category': list[2],
                    'event_label': list[4],
                    'event_callback': onSendEvent,
                });
                // if (!navigator.sendBeacon) {
                    clearTimeout(timerId);
                    timerId = setTimeout(function() {
                        timerComplete = true;
                        onSendEvent();
                    }, 1000);
                // }
            }
        }
    };

    $submitTarget.each(function() {
        var $form = $(this);
        var list = $form.data('eventList') || [];
        list.push([command, hitType, eventCategory, eventAction, eventLabel]);

        if (!$form.data('hasEvent')) {
            if ($form.on) {
                $form.on('submit.ga_submitEvent', onSubmit);
            } else {
                $form.bind('submit.ga_submitEvent', onSubmit);
            }
        }

        $form.data({
            hasEvent: true,
            eventList: list
        });
    });

    if ($clickTarget.on) {
        $clickTarget.on('click.ga_clickEvent', onClick);
    }else{
        $clickTarget.bind('click.ga_clickEvent', onClick);
    }
};


// クリックでイベント送信(全ページ用)
var ga_setClickEvent = function(){
    // お申し込み - フッター
    $('#ga-apply-footer').on('click.ga_setClickEvent', function(){
        $(this).off('click.ga_setClickEvent');
        gtag('event', 'click', {
            'event_category': 'internal_link',
            'event_label': 'apply_button_footer'
        });
    });

    // お申し込みフォーム - お申し込みページ
    $('#ga-applyform-order').on('click.ga_setClickEvent', function(){
        $(this).off('click.ga_setClickEvent');
        gtag('event', 'click', {
            'event_category': 'internal_link',
            'event_label': 'apply_button_orderpage'
        });
    });

    // お申し込み - 特設LPヘッダー
    $('#ga-x-apply-lp-header').on('click.ga_setClickEventTop', function(){
        $(this).off('click.ga_setClickEventTop');
        gtag('event', 'click', {
            'event_category': 'apply_button',
            'event_label': 'x_apply_lp20200227_header'
        });
    });

    // お申し込み - 特設LPフッター
    $('#ga-x-apply-lp-footer').on('click.ga_setClickEventTop', function(){
        $(this).off('click.ga_setClickEventTop');
        gtag('event', 'click', {
            'event_category': 'apply_button',
            'event_label': 'x_apply_lp20200227_footer'
        });
    });
};

// クリックでイベント送信(トップページ用)
var ga_setClickEventTop = function(){
    // 特長 - メインカラム
    ga_onClick('#ga-feature-top', 'send', 'event', 'internal_link', 'click', 'feature_button');

    // 機能一覧 - メインカラム
    ga_onClick('#ga-functions-top', 'send', 'event', 'internal_link', 'click', 'functions_button');

    // お客様の声 - メインカラム
    ga_onClick('#ga-feedback-top', 'send', 'event', 'internal_link', 'click', 'feedback_button');

    // お申し込み - メインカラム
    ga_onClick('#ga-apply-top', 'send', 'event', 'internal_link', 'click', 'apply_button_toppage');

    // お申し込み - メインビジュアル
    $('#ga-x-apply-mv').on('click.ga_setClickEventTop', function(){
        $(this).off('click.ga_setClickEventTop');
        gtag('event', 'click', {
            'event_category': 'apply_button',
            'event_label': 'x_apply_mv'
        });
    });

    // お申し込み - サイドカラム
    $('#ga-apply-top-side').on('click.ga_setClickEventTop', function(){
        $(this).off('click.ga_setClickEventTop');
        gtag('event', 'click', {
            'event_category': 'internal_link',
            'event_label': 'apply_button_toppage_side'
        });
    });
};