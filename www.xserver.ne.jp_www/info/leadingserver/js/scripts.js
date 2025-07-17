window.onload = function(){
    var $ = jQuery.noConflict(true);
    //グラフ数値の初期化
    $('.speed .num,.bar__speed .num').text('0');
    //アニメーションロードclass追加
    function addLoadClass() {
        $(this).addClass('is-loaded');
    }
    //ヒストリースライダー
    var $slider = jQuery('.history__slider').slick({
        prevArrow: $('.history__slider--btns .prev'),
        nextArrow: $('.history__slider--btns .next'),
        infinite: false,
        autoplaySpeed: 7000,
    });
    var slideIndex;
    $slider.on('afterChange',function(event, slick){
        slideIndex = slick.currentSlide;
        switch(slideIndex){
            case 0:
                $('.history__slider--indicator > li:not(".indicator__01") .btn').removeClass('is-active');
                $('.indicator__01 .btn').addClass('is-active');
                break;
            case 1:
                $('.history__slider--indicator > li:not(".indicator__02") .btn').removeClass('is-active');
                $('.indicator__02 .btn').addClass('is-active');
                break;
            case 2:
                $('.history__slider--indicator > li:not(".indicator__03") .btn').removeClass('is-active');
                $('.indicator__03 .btn').addClass('is-active');
                break;
            case 3:
                $('.history__slider--indicator > li:not(".indicator__04") .btn').removeClass('is-active');
                $('.indicator__04 .btn').addClass('is-active');
                break;
            case 4:
                $('.history__slider--indicator > li:not(".indicator__05") .btn').removeClass('is-active');
                $('.indicator__05 .btn').addClass('is-active');
                break;
            case 5:
                $('.history__slider--indicator > li:not(".indicator__06") .btn').removeClass('is-active');
                $('.indicator__06 .btn').addClass('is-active');
                break;
            case 6:
                $('.history__slider--indicator > li:not(".indicator__07") .btn').removeClass('is-active');
                $('.indicator__07 .btn').addClass('is-active');
                break;
            case 7:
                $('.history__slider--indicator > li:not(".indicator__08") .btn').removeClass('is-active');
                $('.indicator__08 .btn').addClass('is-active');
                $slider.slick('slickPause');
                break;
            case 8:
                $('.history__slider--indicator > li:not(".indicator__09") .btn').removeClass('is-active');
                $('.indicator__09 .btn').addClass('is-active');
                $slider.slick('slickPause');
                break;
        }
    });
    $('.indicator__01 .btn').on('click',function(){ $slider.slick('slickGoTo',0); });
    $('.indicator__02 .btn').on('click',function(){ $slider.slick('slickGoTo',1); });
    $('.indicator__03 .btn').on('click',function(){ $slider.slick('slickGoTo',2); });
    $('.indicator__04 .btn').on('click',function(){ $slider.slick('slickGoTo',3); });
    $('.indicator__05 .btn').on('click',function(){ $slider.slick('slickGoTo',4); });
    $('.indicator__06 .btn').on('click',function(){ $slider.slick('slickGoTo',5); });
    $('.indicator__07 .btn').on('click',function(){ $slider.slick('slickGoTo',6); });
    $('.indicator__08 .btn').on('click',function(){ $slider.slick('slickGoTo',7); });
    $('.indicator__09 .btn').on('click',function(){ $slider.slick('slickGoTo',8); });

    //スクロール監視
    var sectionA = $('.keyvisual');
    var sectionB = $('.section__server');
    var sectionC1 = $('.section__spec');
    var sectionC2 = $('.section__spec .infobox').eq(1);
    var sectionC3 = $('.section__spec .infobox').eq(2);
    var sectionC4 = $('.section__spec .infobox').eq(3);
    var sectionC5 = $('.section__spec .infobox').eq(4);
    var sectionD = $('.section__history');
    var sectionE = $('.section__future');

    var monitorA = scrollMonitor.create(sectionA, -100);
    var monitorB = scrollMonitor.create(sectionB, -100);
    var monitorC1 = scrollMonitor.create(sectionC1, -100);
    var monitorC2 = scrollMonitor.create(sectionC2, -100);
    var monitorC3 = scrollMonitor.create(sectionC3, -100);
    var monitorC4 = scrollMonitor.create(sectionC4, -100);
    var monitorC5 = scrollMonitor.create(sectionC5, -100);
    var monitorD = scrollMonitor.create(sectionD, -100);
    var monitorE = scrollMonitor.create(sectionE, -100);
    
    var delayNum = 400; //監視領域に入ってからイベント発火させる時間
    
    monitorA.enterViewport(function() {
        setTimeout(function(){
            sectionA.find('.row__01').queue(addLoadClass);
            sectionA.find('.kv__ttl .js__anime--fadein:not(".row__01")').delay(500).queue(function() {
                $(this).addClass('is-loaded')
            });
            sectionA.find('.kv__desc').delay(1000).queue(addLoadClass);
        },delayNum);
        monitorA.destroy();
    });
    monitorB.enterViewport(function() {
        setTimeout(function(){
            sectionB.find('.js__anime--fadein').each(function(x) {
                $(this).delay(100 * x).queue(addLoadClass);
            });
            sectionB.find('.js__anime--graph').queue(addLoadClass);
            setTimeout(function(){
                jQuery('.speed .num').numerator({
                    duration:1000,
                    toValue: 723.446,
                    delimiter:',',
                    rounding: 2,
                });
            },500);
            jQuery('.other__a .num').numerator({
                duration:1000,
                toValue: 307.762,
                delimiter:',',
                rounding: 2,
            });
            jQuery('.other__b .num').numerator({
                duration:1000,
                toValue: 87.552,
                delimiter:',',
                rounding: 2,
            });
        },delayNum);
        monitorB.destroy();
    });
    monitorC1.enterViewport(function() {
        setTimeout(function(){
            sectionC1.find('.section__ttl').queue(addLoadClass);
            sectionC1.find('.section__desc').delay(200).queue(addLoadClass);
            sectionC1.find('.infobox').eq(0).delay(400).queue(addLoadClass);
        },delayNum);
        monitorC1.destroy();
    });
    monitorC2.enterViewport(function() {
        setTimeout(function(){
            sectionC2.queue(addLoadClass);
        },delayNum);
        monitorC2.destroy();
    });
    monitorC3.enterViewport(function() {
        setTimeout(function(){
            sectionC3.queue(addLoadClass);
        },delayNum);
        monitorC3.destroy();
    });
    monitorC4.enterViewport(function() {
        setTimeout(function(){
            sectionC4.queue(addLoadClass);
        },delayNum);
        monitorC4.destroy();
    });
    monitorC5.enterViewport(function() {
        setTimeout(function(){
            sectionC5.queue(addLoadClass);
        },delayNum);
        monitorC5.destroy();
    });
    monitorD.enterViewport(function() {
        setTimeout(function(){
            sectionD.find('.js__anime--fadein').each(function(x) {
                $(this).delay(100 * x).queue(addLoadClass);
            });
        },delayNum);
        $slider.slick('slickPlay');
        monitorD.destroy();
    });
    monitorE.enterViewport(function() {
        setTimeout(function(){
            sectionE.find('.js__anime--fadein').each(function(x) {
                $(this).delay(100 * x).queue(addLoadClass);
            });
        },delayNum);
        monitorE.destroy();
    });
}

//パーティクルJS
particlesJS('js__particle',
    {
        "particles": {
            "number": {
                "value": 20,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#cde1ed"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 5,
                    "color": "#cde1ed"
                },
                "polygon": {
                    "nb_sides": 5
                },
            },
            "opacity": {
                "value": 1,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 2,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 0,
                    "size_min": 0,
                    "sync": true
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 300,
                "color": "#cde1ed",
                "opacity": 1,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 7,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
        },
        "retina_detect": true
    }
);