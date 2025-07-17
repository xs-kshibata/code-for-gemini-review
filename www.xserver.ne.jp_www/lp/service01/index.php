<?php

$http_host =  $_SERVER['HTTP_HOST'];

// サイトURL(本番)
$SITE_URL = "https://www.xserver.ne.jp/";
$STAGING = $http_host === 'staging.x-local.jp';

// サイトURL(ステージング)
if($STAGING) {
    $SITE_URL = "https://staging.x-local.jp/site/xservernejp/";
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHLFQRP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-22"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-3789601-2', {
            'optimize_id': 'GTM-WGFNFH8',
            'linker': {
                'accept_incoming': true,
                'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp', 'www.cloudpc.ne.jp']
            }
        });

        gtag('config', 'UA-3789601-22', {
            'linker': {
                'accept_incoming': true,
                'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
            }
        });
    </script>
    <script src="js/jquery1.9.1/jquery.min.js"></script>
    <script>document.write('<script src="https://secure.xserver.ne.jp/xinfo/js/header/annotation.js?date=' + new Date().getTime() + '" charset="EUC-JP"><\/script>');</script>
    <meta charset="UTF-8">
    <meta name="copyright" content="Copyright XServer Inc.">

    <meta name="description" content="高速かつ高い安定性を誇る高性能レンタルサーバー【エックスサーバー】稼働率99.99％以上の高い安定性で、業界トップクラスの高コストパフォーマンスを誇る高品質レンタルサーバーです。月額990円(税込)から利用可能。まずは無料お試し10日間。">
    <meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">
    <meta name="canonical" content="https://www.xserver.ne.jp/lp/service01/">
    <meta property="og:title" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
    <meta property="og:type" content="website">
    <meta property="og:description" content="高速かつ高い安定性を誇る高性能レンタルサーバー【エックスサーバー】稼働率99.99％以上の高い安定性で、業界トップクラスの高コストパフォーマンスを誇る高品質レンタルサーバーです。月額990円(税込)から利用可能。まずは無料お試し10日間。">
    <meta property="og:url" content="https://www.xserver.ne.jp/lp/service01/">
    <meta property="og:image" content="https://www.xserver.ne.jp/lp/service01/img/ogp.png?date=240930">
    <meta property="og:site_name" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">

    <title>エックスサーバー｜高速・安定の高性能レンタルサーバー</title>

    <meta name="google-site-verification" content="dpAxN8yem9Np-8sgdxIvpL_D-yi-hfUgvYmPtwVU0MA">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/style.css?date=250507">
    <link rel="stylesheet" href="css/responsive_tab.css">
	<link rel="stylesheet" href="css/responsive_sp.css?date=250507">
    <noscript><link rel="stylesheet" href="css/noscript.css"></noscript>
    <link rel="shortcut icon" href="https://www.xserver.ne.jp/lp/service01/img/favicon.ico" />
    <link rel="stylesheet" href="https://use.typekit.net/xnp3rjw.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Begin Mieruca Embed Code -->
    <script type="text/javascript" id="mierucajs">
        window.__fid = window.__fid || [];__fid.push([274629585]);
        (function() {
            function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
            setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
        })();
    </script>
    <!-- End Mieruca Embed Code -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHLFQRP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
	<!-- キャンペーン帯 -->
    <a href="<?php print $SITE_URL; ?>campaign/campaign_250703.php" class="mvCp">
        <img class="pc-only" src="<?php print $SITE_URL; ?>img/top/mv_headbnr_l.png?date=250703" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！">
        <img class="sp-only" src="<?php print $SITE_URL; ?>img/top/mv_headbnr_s.png?date=250703" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！">
    </a>
	<!-- キャンペーン帯 -->

	<!-- ヘッダーロゴ -->
    <div class="header_inner">
        <img src="img/logo.svg?date=240930" alt="XServerレンタルサーバー">
    </div>
	<!-- ヘッダーロゴ -->
</header>

<div id="wrapper">
    <div class="mv">
        <div class="outer">
			<!-- MV左側 -->
            <div class="mv_left">
                <p class="mv_top"><span>ブログ始めるなら</span></p>
				<div class="mv_left_text">
					<img src="img/mv_catch.svg" alt="国内シェアNo.1のエックスサーバー" class="mv_catch_pc">
					<img src="img/mv_catch_sp.svg" alt="国内シェアNo.1のエックスサーバー" class="mv_catch_sp">
					<div class="fukidashi">
						<img src="img/fuki01_sp.svg" alt="吹き出し01">
						<img src="img/fuki02_sp.svg?date=20231026" alt="吹き出し02">
						<img src="img/fuki03_sp.svg" alt="吹き出し03">
					</div>
					<p class="mv_bottom">
						ドメイン2つ永久無料！<br>
						難しい設定はすべてお任せください。
					</p>
					<p id="annotation-shareNo1_02" class="mv_kome">※</p>
				</div>
            </div>
			<!-- MV左側 -->

			<!-- MV右側 -->
            <div class="mv_right">
                <ul class="mv_fuki">
                    <li>初期費用<br><span class="t-green t-large">無料</span></li>
                    <li><span class="t-green"><span class="t-medium">24</span>時間<span class="t-medium">365</span>日</span><br>サポート</li>
					<li><span class="t-green">最短<span class="t-large">10分</span></span>で<br>ブログ開設</li>
                </ul>
                <div class="mv_illust"><img src="img/illust_mv.svg" alt=""></div>
            </div>
			<!-- MV右側 -->
        </div>
    </div>

	<!-- CTA -->
    <div class="mv_cv cv_bg">
        <div class="inner">
            <p class="fuki">
                <span class="fuki_sp">＼ 9/4まで実質半額! <span class="sp-only">／</span></span><br class="sp-only">
                最短10分でブログ開設<span class="pc-only">／</span>
            </p>
			<div class="c-btn01">
				<a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>無料で10日間お試し</span><img src="img/cta_arrow.svg" alt=""></a>
			</div>
        </div>
    </div>
	<!-- CTA -->

	<!-- メニュー -->
	<div class="menu_link">
		<ul>
			<li>
				<a href="#menu01">
					<p><span>ブログの<br class="sp-only">始め方</span><br><span class="pc-only">を見る</span></p>
					<img src="img/menu_arrow.svg" alt="" class="menu_link_arrow">
				</a>
			</li>
			<li>
				<a href="#menu02">
					<p><span>おすすめ<br class="sp-only">のプラン</span><br><span class="pc-only">を見る</span></p>
					<img src="img/menu_arrow.svg" alt="" class="menu_link_arrow">
				</a>
			</li>
			<li>
				<a href="#menu03">
					<p><span>選ばれる<br class="sp-only">理由</span><br><span class="pc-only">を見る</span></p>
					<img src="img/menu_arrow.svg" alt="" class="menu_link_arrow">
				</a>
			</li>
			<li>
				<a href="#menu04">
					<p><span>お申し込<br class="sp-only">みの流れ</span><br><span class="pc-only">を見る</span></p>
					<img src="img/menu_arrow.svg" alt="" class="menu_link_arrow">
				</a>
			</li>
			<li>
				<a href="#menu05">
					<p><span>よくある<br class="sp-only">質問</span><br><span class="pc-only">を見る</span></p>
					<img src="img/menu_arrow.svg" alt="" class="menu_link_arrow">
				</a>
			</li>
		</ul>
	</div>
	<!-- メニュー -->

    <article>
        <section id="menu01" class="lpsc onayami">
            <div class="inner">
                <h2 class="c-title01">
                    <small>ブログを始めたいけど…</small><br>こんな<span class="t-green marker">お悩み</span>ありませんか?
                </h2>
                <ul class="onayami_list pc-only">
                    <li>
                        <p class="onayami_list_txt">そもそも<br><span class="t-orange">ブログの始め方</span>が<br>わからない…</p>
                        <p class="onayami_list_illust"><img src="img/nayami01.svg" alt=""></p>
                    </li>
                    <li>
                        <p class="onayami_list_txt">初めてだから<br><span class="t-orange">ひとりで</span><br>運用できるか不安…</p>
                        <p class="onayami_list_illust"><img src="img/nayami02.svg" alt=""></p>
                    </li>
                    <li>
                        <p class="onayami_list_txt">ブログ運用に<br><span class="t-orange">おすすめの<br>レンタルサーバー</span>は？</p>
                        <p class="onayami_list_illust"><img src="img/nayami03.svg" alt=""></p>
                    </li>
                </ul>
				<div class="onayami_list_sp sp-only">
					<img src="img/nayami01_sp.svg" alt="">
					<img src="img/nayami02_sp.svg" alt="">
					<img src="img/nayami03_sp.svg" alt="">
				</div>
            </div>
        </section>

        <section class="lpsc omakase">
            <div class="inner">
                <h2 class="c-title01">
					<span class="t-orange">初めてのブログ開設</span>なら <br>
					エックスサーバーに<br class="sp-only">お任せください!
				</h2>
                <ul class="omakase_list">
                    <li>
						<img src="img/fuki04_01.svg" alt="">
                        <div class="omakase_list_content">
                            <p class="title">簡単にブログが開設できるから初心者に最適</p>
                            <p class="txt">
                                「WordPressクイックスタート」で最短10分でブログ開設ができる！スマホからのお申し込みにも対応！
                            </p>
                        </div>
                    </li>
                    <li>
						<img src="img/fuki04_02.svg" alt="">
                        <div class="omakase_list_content">
                            <p class="title">充実のサポート体制</p>
                            <p class="txt">
                                万全のサポート体制で、はじめてのブログ運用をバックアップします！
                            </p>
                        </div>
                    </li>
                    <li>
						<img src="img/fuki04_03.svg" alt="">
                        <div class="omakase_list_content">
                            <p class="title">国内シェアNo.1<small>※1</small></p>
                            <p class="txt">
								運用サイト数は250万件以上<small>※2</small>。<br>
								国内で最も利用されているレンタルサーバーです！
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="omakase_start">
                    <p class="omakase_start_title">WordPressで<br class="sp-only">ブログを始めよう！</p>
                    <p class="txt">
                        WordPressとは、世界中で多くの人に利用されているWebサイトやブログを構築・管理・更新できるシステムです。<br>
                        WordPressを使えば、プログラミングの知識がない方でもコードを書くことなく、デザイン性が高いブログを簡単に立ち上げることができます。<br>
                        さらにWordPressでは、SEO（検索エンジン最適化）に必要な設定や対策が一通りできるため、無料ブログより収益化しやすいというメリットもあります。
                    </p>
                </div>
            </div>
        </section>

        <section class="quick">
            <div class="quick_movie"><video src="img/quick_movie.mp4" muted></video></div>
            <div class="inner">
                <p class="quick_fuki"><span>「WordPressクイックスタート」とは？</span></p>
				<h2 class="c-title01">ブログ開設を<br class="sp-only">より早く、より簡単に</h2>
                <ul class="quick_list">
                    <li>
                        <p class="quick_list_image"><img src="img/ico_start01.svg" alt=""></p>
                        <p class="quick_list_title"><span class="t-orange">スマホから</span>でも<br>お申し込みOK！</p>
                    </li>
                    <li>
                        <p class="quick_list_image"><img src="img/ico_start02.svg" alt=""></p>
                        <p class="quick_list_title"><span class="t-orange">難しい知識</span>は<br>必要なし！</p>
                    </li>
                    <li>
                        <p class="quick_list_image"><img src="img/ico_start03.svg" alt=""></p>
                        <p class="quick_list_title">設定時間が<br><span class="t-orange">大幅に短縮！</span></p>
                    </li>
                </ul>
                <div class="quick_app">
                    <div class="quick_app_content">
                        <p class="txt">
                            WordPressブログ開設に必要な難しい手続きをまとめて行うことができるので、<br>初心者の方でも簡単に安心してご利用いただけます。
                        </p>
                        <p class="quick_app_image"><img src="img/quick_app.png?date=20231023" alt="サーバーお申し込み＋独自ドメイン取得・設定＋Wordpressインストール＋本契約・料金のお支払い"></p>
                    </div>
                    <p class="quick_app_title">5つまとめて一括お申し込み!!</p>
                </div>
            </div>

			<div class="inner check">
				<p class="title">フォームにチェックを入れて<br class="sp-only">申し込むだけ！</p>
				<p class="t-green">あっという間に<br class="sp-only">WordPressブログを開設</p>
				<div>
					<img src="img/wp_check.svg" alt="">
				</div>
				<ul>
					<li>
						<span><img src="img/wp_attention.svg" alt=""></span>
						<span>WordPressクイックスタートを利用してお申し込みの場合、「10日間のお試し期間」はありません。</span>
					</li>
					<li>
						<span><img src="img/wp_attention.svg" alt=""></span>
						<span>料金のお支払いは「クレジットカード払い」または「翌月後払い（ペイディ）」でのみ可能です。</span>
					</li>
				</ul>
			</div>
        </section>

		<!-- CTA -->
        <div class="cv_box cv_bg">
            <div class="inner">
                <div class="cv_btn">
					<p class="cv_txt_small">
						<span class="sp-only">＼</span>初心者でも最短10分でブログ開設<span class="sp-only">／</span>
					</p>
                    <p class="cv_txt">
						<span class="pc-only">＼</span>初めてのブログ開設なら<br class="sp-only">エックスサーバー<span class="pc-only">／</span>
                    </p>
                    <div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>お申し込みフォームはこちら</span><img src="img/cta_arrow.svg" alt=""></a></div>
                </div>
            </div>
        </div>
		<!-- CTA -->

        <section id="menu02" class="lpsc plan">
            <div class="inner">
                <h2 class="c-title01"><span class="t-green marker">ブログ初心者</span>に<br class="sp-only">おすすめのプランはこちら</h2>
                <div class="plan_box">
                    <p class="plan_box_title">
                        <small>＼　コスパ抜群の人気プラン　／</small>スタンダード
                    </p>
                    <div class="plan_box_content">
                        <span class="plListTtl__price__s">月額 990円～</span>
                        <span class="plListTtl__price__s eng cashback_title">半額キャッシュバックで</span>
                        <p class="price">実質<span class="eng">495</span>円～<span class="plListTtl__price__balloon">9/4まで実質半額!</span></p>
                        <table class="tb pc-only">
							<tbody>
								<tr>
									<td>
										<p class="title">v CPU / メモリ</p>
										<p class="content">256コア/1,536GB</p>
									</td>
									<td>
										<p class="title">ｖCPU（リソース保証）</p>
										<p class="content">6コア</p>
									</td>
									<td>
										<p class="title">電話・メールサポート</p>
										<p class="content">あり</p>
									</td>
								</tr>
								<tr>
									<td>
										<p class="title">ディスク容量</p>
										<p class="content">500GB<br>(NVMe SSD)</p>
									</td>
									<td>
										<p class="title">メモリ（リソース保証）</p>
										<p class="content">8GB</p>
									</td>
									<td>
										<p class="title">独自ドメイン永久無料特典</p>
										<p class="content">2つ<small>(.com/.netなど人気ドメインに対応)</small></p>
									</td>
								</tr>
							</tbody>
						</table>

						<table class="tb sp-only">
							<tbody>
								<tr>
									<td>
										<p class="title">v CPU / メモリ</p>
										<p class="content">256コア/<br>1,536GB</p>
									</td>
									<td>
										<p class="title">ｖCPU（リソース保証）</p>
										<p class="content">6コア</p>
									</td>
								</tr>
								<tr>
									<td>
										<p class="title">電話・メールサポート</p>
										<p class="content">あり</p>
									</td>
									<td>
										<p class="title">ディスク容量</p>
										<p class="content">500GB<br>(NVMe SSD)</p>
									</td>
								</tr>
								<tr>
									<td>
										<p class="title">メモリ（リソース保証）</p>
										<p class="content">8GB</p>
									</td>
									<td>
										<p class="title">独自ドメイン<br class="sp-only">永久無料特典</p>
										<p class="content">2つ<small>(.com/.netなど<br class="sp-only">人気ドメインに対応)</small></p>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank">まずは10日間無料でお試し<img src="img/cta_arrow.svg" alt=""></a></div>
					</div>
				</div>
                <div class="spec">
                    <p class="spec_title"><span>よりハイスペックな環境を<br class="sp-only">お求めの方はこちら</span></p>
                    <div class="spec_content">
                        <div class="spec_content_box">
                            <p class="title">プレミアム</p>
                            <span class="plListTtl__price__s">月額 1,980円～</span>
                            <span class="plListTtl__price__s eng cashback_title">半額キャッシュバックで</span>
                            <p class="price">実質<span class="t-green eng">990</span>円～
                                <span class="plListTtl__price__balloon">9/4まで実質半額!</span>
                            </p>
                        </div>
                        <div class="spec_content_box business">
                            <p class="title">ビジネス</p>
                            <span class="plListTtl__price__s">月額 3,960円～</span>
                            <span class="plListTtl__price__s eng cashback_title">半額キャッシュバックで</span>
                            <p class="price">実質<span class="eng">1,980</span>円～
                                <span class="plListTtl__price__balloon">9/4まで実質半額!</span>
                            </p>
                        </div>
                    </div>
                    <div class="c-btn02"><a class="btn" href="https://www.xserver.ne.jp/price/" target="_blank">プランの詳細はこちら<img src="img/cta_arrow.svg" alt=""></a></div>
                </div>
				<p class="txt">
					<small>※料金はすべて税込価格です。</small><br>
					<small>※独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="../../manual/man_order_present_domain.php" target="_blank">こちら</a>を参照してください。</small>
				</p>

				<div class="payment">
					<p class="title">お支払い方法</p>
					<div class="payment_box pc-only">
						<div class="payment_box_credit">
							<ul>
								<li><img src="img/payment/img_logo_visa.png" alt=""></li>
								<li><img src="img/payment/img_logo_mastercard.png" alt=""></li>
								<li><img src="img/payment/img_logo_jcb.png" alt=""></li>
								<li><img src="img/payment/img_logo_amex.png" alt=""></li>
							</ul>
							<p>クレジットカード</p>
						</div>
						<div class="payment_box_bank">
							<img src="img/payment/img_logo_smbc.png" alt="">
							<p>銀行振込</p>
						</div>
						<div class="payment_box_payeasy">
							<img src="img/payment/img_logo_payeasy.png" alt="">
							<p>ペイジー</p>
						</div>
					</div>
					<div class="payment_box pc-only">
						<div class="payment_box_paidy">
							<p>プリペイド</p>
						</div>
						<div class="payment_box_paidy">
							<img src="img/payment/img_logo_paidy.png" alt="">
							<p>あと払い<br>（ペイディ）</p>
						</div>
						<div class="payment_box_conveniencestore">
							<ul>
								<li><img src="img/payment/img_logo_seveneleven.png" alt=""></li>
								<li><img src="img/payment/img_logo_lawson.png" alt=""></li>
								<li><img src="img/payment/img_logo_dailyyamazaki.png" alt=""></li>
								<li><img src="img/payment/img_logo_ministop.png" alt=""></li>
								<li><img src="img/payment/img_logo_familymart.png" alt=""></li>
								<li><img src="img/payment/img_logo_seicomart.png" alt=""></li>
							</ul>
							<p>コンビニ払い</p>
						</div>
					</div>

					<div class="payment_box sp-only">
						<div class="payment_box_credit">
							<ul>
								<li><img src="img/payment/img_logo_visa.png" alt=""></li>
								<li><img src="img/payment/img_logo_mastercard.png" alt=""></li>
								<li><img src="img/payment/img_logo_jcb.png" alt=""></li>
								<li><img src="img/payment/img_logo_amex.png" alt=""></li>
							</ul>
							<p>クレジットカード</p>
						</div>
					</div>

					<div class="payment_box sp-only">
						<div class="payment_box_payeasy">
							<p>プリペイド</p>
						</div>
						<div class="payment_box_bank">
							<img src="img/payment/img_logo_smbc.png" alt="">
							<p>銀行振込</p>
						</div>
						<div class="payment_box_payeasy">
							<img src="img/payment/img_logo_payeasy.png" alt="">
							<p>ペイジー</p>
						</div>

						<div class="payment_box_paidy">
							<img src="img/payment/img_logo_paidy.png" alt="">
							<p>あと払い<br>（ペイディ）</p>
						</div>
					</div>

					<div class="payment_box sp-only">
						<div class="payment_box_conveniencestore">
							<ul class="payment_box_conveniencestore_ul">
								<li><img src="img/payment/img_logo_seveneleven.png" alt=""></li>
								<li><img src="img/payment/img_logo_lawson.png" alt=""></li>
								<li><img src="img/payment/img_logo_dailyyamazaki.png" alt=""></li>
							</ul>
							<ul>
								<li><img src="img/payment/img_logo_ministop.png" alt=""></li>
								<li><img src="img/payment/img_logo_familymart.png" alt=""></li>
								<li><img src="img/payment/img_logo_seicomart.png" alt=""></li>
							</ul>
							<p>コンビニ払い</p>
						</div>
					</div>

					<p class="payment_text">
						弊社では、クレジットカード・銀行振込・ペイジー・あと払い（ペイディ）・コンビニ払い・プリペイドがご利用いただけます。<br>
						詳しくは「<a href="https://www.xserver.ne.jp/price/price_payment_method.php" target="_blank" class="link">お支払い方法一覧</a>」をご確認ください。
					</p>
				</div>
			</div>
		</section>

		<!-- CTA -->
		<div class="cv_box cv_bg">
			<div class="inner">
				<div class="cv_btn">
					<p class="cv_txt_small"><span class="sp-only">＼</span>コスパ抜群！ブログ初心者におすすめ<span class="sp-only">／</span></p>
					<p class="cv_txt">
						<span class="pc-only">＼</span>初めてのブログ開設なら<br class="sp-only">エックスサーバー<span class="pc-only">／</span>
					</p>
					<div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>まずは10日間無料でお試し</span><img src="img/cta_arrow.svg" alt=""></a></div>
				</div>
			</div>
		</div>
		<!-- CTA -->

        <section class="lpsc works">
            <div class="outer">
                <p class="quick_fuki"><span>250万以上のサイト運用実績！<small>※</small></span></p>
                <h2 class="c-title01">おかげさまでエックスサーバーは<br><span class="t-green">幅広いお客さま</span>のブログ運用に導入されています。</h2>
				<p class="annotation"><small>※ 自社サービスの合計値</small></p>
                <ul class="works_list">
                    <li>
                        <p class="works_list_image"><a href="https://we-love-osaka.jp/" target="_blank"><img src="img/works01.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>大阪の魅力発信情報サイト</span></p>
                            <p class="title"><a href="https://we-love-osaka.jp/" target="_blank">We love 大阪</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="works_list_image"><a href="https://www.tsukurira.com/" target="_blank"><img src="img/works02.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>手工芸</span></p>
                            <p class="title"><a href="https://www.tsukurira.com/" target="_blank">つくりら</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="works_list_image"><a href="https://komuken.com/" target="_blank"><img src="img/works03.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>地域ブログ、ローカルメディア</span></p>
                            <p class="title"><a href="https://komuken.com/" target="_blank">世田谷ローカル</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="works_list_image"><a href="https://hotsyaki.com/" target="_blank"><img src="img/works04.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>ゲーム・ガジェット</span></p>
                            <p class="title"><a href="https://hotsyaki.com/" target="_blank">ノリと勢いと北の国から</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="works_list_image"><a href="https://www.tabi-rich.com/" target="_blank"><img src="img/works05.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>ホテルレビュー</span></p>
                            <p class="title"><a href="https://www.tabi-rich.com/" target="_blank">マイルの覇王</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="works_list_image"><a href="https://bloghana.xyz/" target="_blank"><img src="img/works06.jpg" alt=""></a></p>
                        <div class="works_list_caption">
                            <p class="genre"><span>洗濯に関する特化ブログ</span></p>
                            <p class="title"><a href="https://bloghana.xyz/" target="_blank">ハナの洗濯ラボノート</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="menu03" class="lpsc reason">
            <div class="confetti"></div>
            <div class="inner">
                <h2 class="c-title01">エックスサーバーが<br>ブログ運用に選ばれる<br class="sp-only"><span class="t-green marker">3つの理由</span></h2>
                <ul class="reason_list">
                    <li>
                        <div class="reason_list_image">
							<img src="img/reason_human_01.svg" class="reason_human sp-only" alt="">
							<img src="img/reason_human_01.svg" class="reason_human tab-only" alt="">
							<img src="img/reason01.svg" class="reason_img" alt="">
						</div>
                        <div class="reason_list_content">
                            <p class="title">国内シェアNo.1の高い<br class="sp-only"><span class="dot">信</span><span class="dot">頼</span><span class="dot">性</span><small>※1</small></p>
                            <p class="txt">
                                エックスサーバーは21年間のサーバー運用実績、250万以上のサイト運用実績<small>※2</small>、創業以来99.99%以上の稼働率を堅持しています。豊富な運用実績と高い技術力で、たくさんのお客様から信頼されています。
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reason_list_image">
							<img src="img/reason02.svg" class="reason_img" alt="">
							<img src="img/reason_human_02.svg" class="reason_human sp-only" alt="">
							<img src="img/reason_human_02.svg" class="reason_human tab-only" alt="">
						</div>
                        <div class="reason_list_content">
                            <p class="title">国内最速の<br class="sp-only"><span class="dot">快</span><span class="dot">適</span><span class="dot">な</span>サーバー環境</p>
                            <p class="txt">
                                エックスサーバーでは、高速かつ安定したサーバー環境を提供するため、最先端のサーバーマシンを採用し、圧倒的なサーバー・ソフトウェア性能により国内最速の環境を実現しています。
                            </p>
                        </div>
                    </li>
                    <li>
						<div class="reason_list_image">
							<img src="img/reason_human_01.svg" class="reason_human sp-only" alt="">
							<img src="img/reason_human_01.svg" class="reason_human tab-only" alt="">
							<img src="img/reason03.svg" class="reason_img" alt="">
						</div>
                        <div class="reason_list_content">
                            <p class="title">充実のサポート体制で<br class="sp-only">バツグンの<span class="dot">安</span><span class="dot">心</span><span class="dot">感</span></p>
                            <p class="txt">
                                ご利用中にトラブルや分からないことがあっても、お問い合わせいただければ専門のスタッフが迅速にご返答いたします。メールサポートは24時間365日対応！
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

		<!-- CTA -->
		<div class="cv_box cv_bg">
			<div class="inner">
				<div class="cv_btn">
					<p class="cv_txt_small">
						<span class="sp-only">＼</span>高性能サーバーと充実のサポート<span class="pc-only">で国内シェアNo.1</span><span class="sp-only">体制／</span>
					</p>
					<p class="cv_txt">
						<span class="pc-only">＼</span>初めてのブログ開設なら<br class="sp-only">エックスサーバー<span class="pc-only">／</span>
					</p>
					<div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>まずは10日間無料でお試し</span><img src="img/cta_arrow.svg" alt=""></a></div>
				</div>
			</div>
		</div>
		<!-- CTA -->

        <section class="lpsc support">
            <div class="outer">
                <h2 class="c-title01">ブログ運用の<span class="t-green marker">サポート</span>も<br class="sp-only">ばっちり！</h2>
                <ul>
                    <li class="support_list_box">
                        <h3 class="support_list_title"><span>WordPress運用支援</span></h3>
                        <p class="txt">
                            新しくブログを始める方も、他社からのお引越しもエックスサーバーなら簡単！
                        </p>
                        <ul class="support_inner support_inner_wp">
                            <li>
                                <p class="support_inner_image"><img src="img/support01.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">WordPress<br class="tab-only">簡単インストール</p>
                                </div>
                            </li>
                            <li>
                                <p class="support_inner_image"><img src="img/support02.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">WordPress簡単移行</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="support_list_box">
                        <h3 class="support_list_title"><span>セキュリティ設定</span></h3>
                        <p class="txt">
                            エックスサーバーでは、豊富なセキュリティ対策機能を提供！<br>
                            簡単な設定のみで、お客様の安全・安心なブログ運用を実現します。
                        </p>
                        <ul class="support_inner support_inner_security">
                            <li>
                                <p class="support_inner_image"><img src="img/support03.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">ログイン試行回数制限</p>
                                </div>
                            </li>
                            <li>
                                <p class="support_inner_image"><img src="img/support04.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">国内IPアクセス制限</p>
                                </div>
                            </li>
                            <li>
                                <p class="support_inner_image"><img src="img/support05.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">大量コメント・<br class="tab-only">トラックバック<br>制限設定</p>
                                </div>
                            </li>
                            <li>
                                <p class="support_inner_image"><img src="img/support06.svg" alt=""></p>
								<div class="support_inner_content">
									<p class="title">国外からの<br>コメント・<br class="tab-only">トラックバック制限</p>
								</div>
                            </li>
                        </ul>
                    </li>
                    <li class="support_list_box">
                        <h3 class="support_list_title"><span>困ったときも安心のサポート体制</span></h3>
                        <ul class="support_inner support_inner_support">
                            <li>
                                <p class="support_inner_image"><img src="img/support07.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">24時間365日<br class="tab-only">メールサポート</p>
                                    <p class="txt">
                                        メールでのお問い合わせは、24時間365日いつでも受け付けております。<br>
                                        ご質問や問題などがございましたら、お気軽にご相談ください。迅速に返答いたします。
                                    </p>
                                    <div class="c-btn02"><a class="btn" href="https://www.xserver.ne.jp/support/" target="_blank">お問い合わせはこちら</a></div>
                                </div>
                            </li>
                            <li>
                                <p class="support_inner_image"><img src="img/support08.svg" alt=""></p>
                                <div class="support_inner_content">
                                    <p class="title">お急ぎの場合は<br class="tab-only">電話サポートも</p>
                                    <p class="txt">
                                        電話でのサポート(土日祝除く)も行っております。<br>
                                        お急ぎの相談などがございましたら、専門のスタッフが直接お話をお伺いし、丁寧に詳しくお答えいたします。初めての方も安心してご利用ください。<br>
                                        <small>※お問い合わせ内容によっては、メールでのお問い合わせをお願いする場合があります。</small>
                                    </p>
                                    <div class="tel">
                                        <div class="telbox">
                                            <p class="subtitle">新規ご契約に関する相談窓口</p>
                                            <p class="num eng">0120-183-002</p>
                                        </div>
                                        <div class="telbox">
                                            <p class="subtitle">ご契約中のお客様はこちら</p>
                                            <p class="num eng">06-6147-2580</p>
                                        </div>
                                        <p class="hour">受付時間： 平日 10:00～18:00</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

		<!-- CTA -->
		<div class="cv_box cv_bg">
			<div class="inner">
				<div class="cv_btn">
					<p class="cv_txt_small"><span class="sp-only">＼</span>契約後も安心のブログ運用サポート<span class="sp-only">／</span></p>
					<p class="cv_txt">
						<span class="pc-only">＼</span>初めてのブログ開設なら<br class="sp-only">エックスサーバー<span class="pc-only">／</span>
					</p>
					<div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>まずは10日間無料でお試し</span><img src="img/cta_arrow.svg" alt=""></a></div>
				</div>
			</div>
		</div>
		<!-- CTA -->

        <section id="menu04" class="lpsc flow">
            <div class="outer">
                <h2 class="c-title01">お申し込みの流れ</h2>
                <p class="txt">まずはエックスサーバー お申し込みフォームにアクセスし、「10日間無料お試し 新規お申し込み」を選択してください。</p>
                <ol class="flow_list">
                    <li>
                        <p class="flow_list_title eng">STEP.01</p>
                        <div class="flow_list_content">
                            <p class="title">お申し込み内容選択</p>
                            <p class="txt">
                                「サーバー契約内容」「ドメイン契約内容」「WordPressインストール情報」を入力します。
                            </p>
                        </div>
                    </li>
                    <li>
                        <p class="flow_list_title eng">STEP.02</p>
                        <div class="flow_list_content">
                            <p class="title">XServer<br>アカウント情報入力</p>
                            <p class="txt">
                                XServerアカウントに登録するお客様情報を入力します。
                            </p>
                        </div>
                    </li>
                    <li>
                        <p class="flow_list_title eng">STEP.03</p>
                        <div class="flow_list_content">
                            <p class="title">ご本人様確認</p>
                            <p class="txt">
                                ご本人様確認のため、「SMS認証」または「電話認証」を行います。
                            </p>
                        </div>
                    </li>
                    <li>
                        <p class="flow_list_title eng">STEP.04</p>
                        <div class="flow_list_content">
                            <p class="title">お申し込み完了</p>
                            <p class="txt">
                                認証が済んだら、お申し込み完了です。「サーバーアカウント設定完了のお知らせ」メールが届きます。
                            </p>
                        </div>
                    </li>
                </ol>
                <div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>まずは10日間無料でお試し</span><img src="img/cta_arrow.svg" alt=""></a></div>
            </div>
        </section>

        <section id="menu05" class="lpsc faq">
            <div class="inner">
                <h2 class="c-title01">よくある質問</h2>
                <div class="faq_list">
                    <dl class="faq_list_box">
                        <dt><span>お試し期間の詳細について教えてください。</span></dt>
                        <dd>
                            お申し込み後10日間がお試し期間となります。<br>
                            メールアカウントの作成、サーバープログラム(CGI/PHP等)によるメール送受信、追加FTPアカウントの作成などが制限されていますが、ほぼ正式なサーバーと同様の機能をお使いいただくことができます。<br><br>

                            ※お試し期間中、お支払手続きを行われますと、本契約となり上記機能がすぐにご利用いただけます。<br><br>

                            詳しくは、「<a class="txtLink" href="https://www.xserver.ne.jp/manual/man_order_free_trial.php" target="_blank">無料お試し期間について</a>」をご覧ください。
                        </dd>
                    </dl>
                    <dl class="faq_list_box">
                        <dt><span>お試し期間の申込みから、本運用開始までの流れはどうなっていますか？</span></dt>
                        <dd>
                            お試し期間後も継続してサーバーをご利用いただく場合は、お試し期間中にXServerアカウント内、エックスサーバー契約管理ページの「料金支払い」メニューより、お支払い手続きを行ってください。<br><br>

                            <img src="img/faq_contract_renewal1.png?date=221223" alt=""><br><br>

                            弊社にてお支払いを確認した時点でお試し期間は終了し、本契約となります。<br>
                            なお、お試し期間で解約をご希望の場合は、ご利用期限日までに必ずXServerアカウント内、エックスサーバー契約管理ページから解約申請を行ってください。<br><br>

                            ※解約料金は必要ございません。
                        </dd>
                    </dl>
                    <dl class="faq_list_box">
                        <dt><span>申し込みから利用開始までの期間はどのくらいですか？</span></dt>
                        <dd>申し込んでいただいてから24時間以内に設定し、完了次第メールを送らせていただきます。その時点から、当サービスを利用できるようになります。</dd>
                    </dl>
                    <dl class="faq_list_box">
                        <dt><span>実際の契約（課金）はいつからになりますか？</span></dt>
                        <dd>
                            ご利用料金はお申し込み日の翌月1日から起算いたします。<br><br>

                            （例）7/15ご利用開始　→　8/1が料金の起算日となります
                        </dd>
                    </dl>
                    <dl class="faq_list_box">
                        <dt><span>最短利用期間はありますか？</span></dt>
                        <dd>
                            はい、少なくとも3ヶ月以上ご契約いただく必要があります。<br>
                            なお、2回目以降の「更新時」に限り、クレジットカード、またはあと払い(ペイディ)、プリペイドでの1ヶ月自動更新設定が可能です。
                        </dd>
                    </dl>
                </div>
                <p class="faq_txt">マニュアルでお知りになりたい項目を確認することができます。</p>
                <div class="c-btn02"><a class="btn" href="https://www.xserver.ne.jp/manual/" target="_blank">マニュアルはこちら</a></div>
            </div>
        </section>

		<!-- CTA -->
		<div class="cv_box cv_bg">
			<div class="inner">
				<div class="cv_btn">
					<p class="cv_txt_small"><span class="sp-only">＼</span>最短10分でブログ開設<span class="sp-only">／</span></p>
					<p class="cv_txt">
						<span class="pc-only">＼</span>初めてのブログ開設なら<br class="sp-only">エックスサーバー<span class="pc-only">／</span>
					</p>
					<div class="c-btn01"><a class="btn" href="https://secure.xserver.ne.jp/xinfo/?action_register_server2_index=on&service=xserver" target="_blank"><span>まずは10日間無料でお試し</span><img src="img/cta_arrow.svg" alt=""></a></div>
				</div>
			</div>
		</div>
		<!-- CTA -->

	</article>
</div>

<footer class="footer">
    <div class="footer_contact">
        <div class="inner">
            <p class="txt">お申し込みやサービスについて、<br class="sp-only">お気軽にお問い合わせください。</p>
            <div class="footer_contact_content">
                <div class="footer_contact_left">
                    <p class="fuki">＼　24時間365日受付!　／</p>
                    <div class="c-btn02"><a class="btn" href="https://www.xserver.ne.jp/support/" target="_blank">お問い合わせはこちら</a></div>
                </div>
                <div class="footer_contact_right">
                    <div class="telbox">
                        <p class="subtitle">新規ご契約に関する相談窓口</p>
                        <p class="tel"><span class="eng">0120-183-002</span></p>
                    </div>
                    <div class="telbox">
                        <p class="subtitle">ご契約中のお客様はこちら</p>
                        <p class="tel"><span class="eng">06-6147-2580</span></p>
                    </div>
                    <p class="hour">
                        受付時間： 平日 10:00～18:00<br>
                        ※内容により、メールでのお問い合わせをお願いすることがあります。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <nav class="footer_nav inner">
            <ul class="footer_nav_list">
                <li><a href="https://www.xserver.ne.jp/privacy.php" target="_blank">プライバシーポリシー</a></li>
                <li><a href="https://www.xserver.ne.jp/sitepolicy.php" target="_blank">当サイトのご利用について</a></li>
                <li><a href="https://www.xserver.ne.jp/rule/rule.php" target="_blank">利用規約</a></li>
                <li><a href="https://www.xserver.ne.jp/company.php" target="_blank">会社概要</a></li>
            </ul>
        </nav>
        <p class="footer_copy eng">&copy; <?php print date("Y", time()); ?> XServer Inc.</p>
        <ul class="footer_annotation mv_kome">
            <li id="annotation-shareNo1_01"></li>
            <li>自社サービスの合計値</li>
        </ul>
    </div>
</footer>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/main.js"></script>
</body>
</html>