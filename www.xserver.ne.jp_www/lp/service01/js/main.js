jQuery(function($) {
	var nav    = $('header'),
	    offset = nav.offset();
	  
	$(window).scroll(function () {
	  if($(window).scrollTop() > 67) {
	    nav.addClass('fixed');
	  } else {
	    nav.removeClass('fixed');
	  }
	});


	// TextTypingというクラス名がついている子要素（span）を表示から非表示にする定義
	function TextTypingAnime() {
		$('.TextTyping').each(function () {
			var elemPos = $(this).offset().top - 50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
	    var thisChild = "";
			if (scroll >= elemPos - windowHeight) {
				thisChild = $(this).children(); //spanタグを取得
				//spanタグの要素の１つ１つ処理を追加
				thisChild.each(function (i) {
					var time = 100;
					//時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
					$(this).delay(time * i).fadeIn(time);
				});
			} else {
				thisChild = $(this).children();
				thisChild.each(function () {
					$(this).stop(); //delay処理を止める
					$(this).css("display", "none"); //spanタグ非表示
				});
			}
		});
	}
	// 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function () {
		// TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面をスクロールをしたら動かしたい場合の記述

	// 画面が読み込まれたらすぐに動かしたい場合の記述
	$(window).on('load', function () {
		//spanタグを追加する
		var element = $(".TextTyping");
		element.each(function () {
			var text = $(this).html();
			var textbox = "";
			text.split('').forEach(function (t) {
				if (t !== " ") {
					textbox += '<span>' + t + '</span>';
				} else {
					textbox += t;
				}
			});
			$(this).html(textbox);

		});

		// TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述




	$('a[href^=#]').click(function() {
	    var speed = 2000; // ミリ秒
	    var href= $(this).attr("href");
	    var target = $(href == "#" || href == "" ? 'html' : href);
	    var position = target.offset().top;
	    $('body,html').animate({scrollTop:position}, speed, 'easeInOutQuint');
	    return false;
	 });

	$('#burger').click(function(){
	     $('#gnav, #burger').toggleClass('open');
	});
	$('.faq_list_box dt').click(function(){
		$(this).toggleClass('open');
	    $(this).next('dd').slideToggle();
	});
});