<?php
include("conf.php");

mb_language("ja");
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ltie7 no-js"> <![endif]-->
<!--[if IE 7 ]> <html lang="ja" class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="ja" class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]> <html lang="ja" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js"> <!--<![endif]-->
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
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3789601-2', {
    'optimize_id': 'GTM-WGFNFH8',
    'linker': {
      'accept_incoming': true,
      'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp']
    }
  });
</script>
<meta charset="euc-jp">
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">
<meta name="viewport" content="initial-scale=1.0">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<title>SSL証明書の署名アルゴリズム「SHA-2」への移行について │ <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

<base href="<?php print $SITE_URL; ?>">

<style type="text/css">

* {
	margin : 0 ;
	padding : 0 ;
	font-size : 100% ;
}

body {
	font-size : 75% ;
	text-align : center ;
	line-height : 1.5 ;
	font-style:normal;
	font-family:sans-serif;
	font-family:Verdana,"メイリオ",Meiryo,"ＭＳ Ｐゴシック","MS PGothic","Hiragino Kaku Gothic Pro","ヒラギノ角ゴ Pro W3",Arial,sans-serif; 
	color : #333 ;
}

a img {
	border : none ;
}

#contents_wrapper {
	width : 800px ;
	margin : 0 auto 30px ;
}

#header {
	height : 80px ;
}

#header h1 {
	position : relative ;
	top : 24px ;
}

#footer {
	padding : 15px ;
	color : #Fff ;
	background : #1b5fa6 ;
}

#main {
	border : 1px solid #b3b3b3 ;
}

#main h3 {
	display : block ;
	padding : 20px ;
	border-bottom : 1px solid #b3b3b3 ;
	font-size : 200% ;
	color : #1b5fa6 ;
}

#main > .inner {
	padding : 20px ;
	text-align : left ;
}

#main .section {
	margin-bottom : 20px ;
}

#main .section p {
	margin-bottom : 1em ;
}

#main .section p img {
	vertical-align: middle ;
}

#main .section .indent_ajust {
	padding-left : 1em ;
	text-indent : -1em ;
}

#main .section .new_tax {
	color : #f79100 ;
}

#main .section .old_tax {
	color : #1b5fa6 ;
}

#main .section .no_tax {
	color : #00a498 ;
}

#main .section h4 {
	font-size : 120% ;
	padding : 4px 8px ;
	border-left : 8px solid #1b5fa6 ;
	border-bottom : 1px solid #1b5fa6 ;
	margin-bottom : 12px ;
}

#main .section .inner {
	padding : 10px 20px ;
}

#main .section .note {
	padding : 8px 10px 0 ;
	border : 1px solid #b3b3b3 ;
	background : #fddeb2 ;
	margin-bottom : 15px ;
}

#main .section .note li {
	list-style : none ;
	margin-bottom : 8px ;
}

#main .section .note p {
	margin-bottom : 8px ;
}

#main .section li {
	padding : 2px 0 ;
}


#main .section .column {
	border : 1px solid #b3b3b3 ;
	padding : 8px 8px 0 ;
}

#main .section .inner>h5 {
	padding : 5px 10px ;
	color : #fff ;
	background : #666 ;
	font-size : 130% ;
	text-align : center ;
}

#main .section .column h5 {
	padding : 0 0 0 22px ;
	font-size : 115% ;
	font-weight : bold ;
	background : url(img/news/circle_marker.png) left center no-repeat ;
}

#main .section .column dt {
	font-weight : bold ;
	margin-bottom : 8px ;
}

#main .section .column dd {
	margin-left : 12px ;
}

#main .assist {
	font-size : 85% ;
}

#main .border_section {
	text-align : center ;
	border : 1px solid #b3b3b3 ;
	padding : 12px 16px ;
}

#main .section .table_box {
	margin-bottom : 12px ;
}

#main .section .table_box table {
	border-left : 1px solid #b3b3b3 ;
	border-top : 1px solid #b3b3b3 ;
	border-collapse : collapse ;
	width : 100% ;
	margin-bottom : 5px ;
}

#main .section .table_box table caption {
	font-weight : bold ;
	text-align : left ;
	margin-bottom : 4px ;
}

#main .section .table_box table th {
	padding : 4px 6px ;
	border-right : 1px solid #b3b3b3 ;
	border-bottom : 1px solid #b3b3b3 ;
	text-align : center ;
	background : #808080 ;
	color : #fff ;
}

#main .section .table_box table .item_info {
	width : 140px ;
}

#main .section .table_box table th.old_item {
	background : #5487bc ;
}

#main .section .table_box table th.new_item {
	background : #f8a126 ;
}

#main .section .table_box table th.sub_th {
	color : #333 ;
	background : #e6e6e6 ;
}	

#main .section .table_box table td {
	padding : 4px 6px ;
	border-right : 1px solid #b3b3b3 ;
	border-bottom : 1px solid #b3b3b3 ;
	text-align : right ;
}

#main .section .table_box td.old_item {
	color : #1b5fa6 ;
}

#main .section .table_box td.new_item {
	color : #f79100 ;
	font-size : 110% ;
	font-weight : bold ;
}

.stat_info {
	padding : 12px 12px 12px 65px ;
	margin-bottom : 12px ;
	background-position : 12px 12px ;
	background-repeat : no-repeat ;
}

.stat_info.check {
	background-color : #d5f0ee ;
	background-image : url(img/news/sha2_check_icon.png) ;
}

.stat_info.caut {
	background-color : #fdedd5 ;
	background-image : url(img/news/sha2_caut_icon.png) ;
}

.stat_info.warn {
	background-color : #ffdcdc ;
	background-image : url(img/news/sha2_warn_icon.png) ;
}

.stat_info dt {
	font-weight : bold ;
	font-size : 125% ;
	margin-bottom : 4px ;
}

.stat_info.check dt {
	color : #00a397 ;
}

.stat_info.caut dt {
	color : #f69000 ;
}

.stat_info.warn dt {
	color : #ff2727 ;
}

#main .section .inner h6 {
	padding : 3px 6px ;
	text-align : center ;
	color : #fff ;
	background : #1a5ea5 ;
	font-size : 110% ;
}

.flow_list > li {
	margin-bottom : 12px ;
}

.man_img {
	border : 1px solid #b3b3b3 ;
}
    
.border {
    padding: 12px 15px;
    border: 1px solid;
    width: 91%;
    margin: 0 auto 1em;
}
    
.border span{
    padding-left: 1em;
    display: inline-block;
}
    
.border_blue {
    background-color: #f7f8fa;
    border-color: #84a8c5;
}

</style>
<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
</head>

<body>

<?php include("top.php"); ?>

<div id="contents_wrapper">

	<div id="header">
		<h1><a href="index.php"><img src="img/news/service_logo.png" alt="エックスサーバー" /></a></h1>
    </div>
    <!-- /header -->
    
    <div id="main">
    	
        <h3>SSL証明書の署名アルゴリズム「SHA-2」への移行について<span class="assist">(2014/12/19)</span></h3>
        <div class="inner">
        
        	<div class="section">
                <p>これまで広く用いられてきた「SHA-1」ハッシュ関数の安全性が相対的に低下してきていることを背景に、当サービスにおいても、2014年12月4日以降に発行される証明書を、より強固な暗号化が可能な「SHA-2」を用いて発行するように対応いたしました。</p>
                <p><strong>2014年12月4日以前よりご利用</strong>の当サービスのSSL証明書は、全て「SHA-1」の証明書ですので、以降の契約更新時、または必要に応じて「SHA-2」の証明書への移行を行ってください。</p>
                
                <ul style="margin : 0 0 20px 35px ;">
                	<li><a href="sha2.php#01">SHA-2移行にあたっての対応と注意事項</a></li>
                    <li><a href="sha2.php#02">再発行によるSHA-2への移行方法について</a></li>
                    <li><a href="sha2.php#03">署名アルゴリズムの確認方法</a></li>
                </ul>
                <p class="border border_blue">
                    ※このページでは下記ニュースに付随する補足情報を掲載しています。<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=1998" target="_blank">独自SSLにおけるSSL証明書の暗号化方式「SHA-2」への変更について(2014/12/01) </a></span><br><br>

                    ※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/" target="_blank">公式サイト</a>をご参照ください。
                </p>
                
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4><a name="01" id="01">SHA-2移行にあたっての対応と注意事項</a></h4>
                <div class="inner">
                
                	<p>SHA-2移行を行う必要があるかどうか、またご利用中のSHA-1証明書への影響などは、証明書の<strong>有効期限日</strong>によって異なります。<br />
                    予めご利用中のSSL証明書の有効期限日をご確認の上、下記をご参照ください。</p>
                    
                    <ul style="margin : 0 0 20px 35px ;">
                        <li><a href="sha2.php#01-01">期限日が「2015年12月31日まで」のSHA-1証明書</a></li>
                        <li><a href="sha2.php#01-02">期限日が「2016年1月1日〜2016年12月31日まで」のSHA-1証明書</a></li>
                        <li><a href="sha2.php#01-03">期限日が「2017年1月1日以降」のSHA-1証明書</a></li>
                    </ul>
                        
                    
                    <h5><a name="01-01" id="01-01">期限日が「2015年12月31日まで」のSHA-1証明書</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info check">
                        	<dt>期限日まで問題なくご利用いただくことが可能です。</dt>	
                        	<dd>
                            	特別ご対応いただく必要はございません。<br />次回の更新時よりSHA-2の証明書が発行されますので、更新の時期が来ましたら、通常通り契約更新を行ってください。
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_01.png" alt="更新時期が来ましたら、通常通り契約更新を行ってください" style="margin-bottom : 20px ;" />
                    
                    </div>
                    <!-- /inner -->
                    
                    <h5><a name="01-02" id="01-02">期限日が「2016年1月1日〜2016年12月31日まで」のSHA-1証明書</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info caut">
                        	<dt>期限日までご利用可能ですが、Google Chrome(Ver40以降)で、アドレスバー表示が変更されます。</dt>	
                        	<dd>期限日までご利用いただくことが可能ですが、Googleより、2015年1月にリリース予定のChrome 40以降において、サイト訪問時にブラウザ上のアドレスバー表示が変更される方針が発表されていますので、ご注意ください。<br />
                            期中にSHA-2証明書として再発行することも可能ですので、ご検討ください。
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_02.png" alt="期限日までご利用可能ですが、Google Chrome(Ver40以降)でアドレスバー表示が変更されます" style="margin-bottom : 15px ;" />
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>Google Chromeでのアドレスバー表示の変更について</h5>
                            <div class="inner">
                                
                                <p><strong>Chrome40以降</strong>において、ブラウザのアドレスバー上に、下図のような黄色いマーク付きの鍵アイコンが表示されます。</p>
                                <img src="img/news/sha2_browser_error_img_01.png" alt="Chromeでの警告表示" />
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>証明書の再発行によるSHA-2移行について</h5>
                            <div class="inner">
                                
                                <p>XServerアカウント上から、現在お使いの証明書を、SHA-2証明書として再発行することが出来ます。<br />
                                詳しくは、「<a href="sha2.php#02">再発行の手順</a>」をご確認ください。</p>


								<div style="padding : 1em ; background : #fde8cb ; border : 1px solid #b3b3b3 ;">
                                	<p style="indent_ajust">※SHA-1とSHA-2では、特に携帯電話(フィーチャーフォン)への対応状況が大きく異なりますので、
　携帯電話での利用を想定されている方は、事前によくご確認の上、移行をご検討ください。</p>

									・<a href="functions/service_ssl.php" target="_blank">SSL証明書の仕様一覧</a>
                                </div>
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                    
                    </div>
                    <!-- /inner -->
                    
                    
                    <h5><a name="01-03" id="01-03">期限日が「2017年1月1日以降」のSHA-1証明書</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info warn">
                        	<dt>期限日まで利用できません。<br />2016年12月31日までにSHA-2へ移行する必要があります。</dt>	
                        	<dd>
                            期限日までご利用いただくことは出来ません。2016年12月31日までにSHA-2へ移行していただく必要があります。
また、GoogleChrome(Ver39以降)やMozillaFirefoxなど、著名なブラウザ上でアドレスバー表示の変更や警告が表示される方針が発表されていますので、ご注意ください。
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_03.png" alt="期限日まで利用できません。2016年12月31日までに移行する必要があります。" style="margin-bottom : 15px ;" />
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>著名ブラウザ(Google Chrome / Mozilla Firefox)上でのアドレスバー表示や警告表示について</h5>
                            <div class="inner">
                                
                                <h6>Google Chromeでのアドレスバー表示の変更について</h6>
                                <div class="inner">
                                    <p>Chrome39以降において、ブラウザのアドレスバー表示が変更されます。またChrome41までのリリースで段階的に表示が変更される予定です。</p>
                                    <img src="img/news/sha2_browser_error_img_02.png" alt="Chromeでのアドレスバー表示" />
                                </div>
                                <!-- /inner -->
                                
                                <h6>Mozilla Firefoxでのアドレスバー上での警告表示、およびエラー画面の表示について</h6>
                                <div class="inner">
                                	<p>2015年早期にリリース予定のバージョン以降、アドレスバー上に警告表示されるようになります。また、その後のバージョンでは、画面上に「信頼されない接続」である旨のエラーが表示される予定です。</p>
                                    <p>エラー画面に関しては、将来的にコンテンツを表示できない(エラーを無視できない)ようにする可能性があります。</p>
                                    <img src="img/news/sha2_browser_error_img_03.png" alt="Firefoxでの警告表示" />
                                </div>
                                <!-- /inner -->
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>証明書の再発行によるSHA-2移行について</h5>
                            <div class="inner">
                                
                                <p>XServerアカウント上から、現在お使いの証明書を、SHA-2証明書として再発行することが出来ます。<br />
                                詳しくは、「<a href="sha2.php#02">再発行の手順</a>」をご確認ください。</p>


								<div style="padding : 1em ; background : #fde8cb ; border : 1px solid #b3b3b3 ;">
                                	<p style="indent_ajust">※SHA-1とSHA-2では、特に携帯電話(フィーチャーフォン)への対応状況が大きく異なりますので、携帯電話での利用を想定されている方は、事前によくご確認の上、移行をご検討ください。</p>

									・<a href="functions/service_ssl.php" target="_blank">SSL証明書の仕様一覧</a>
                                </div>
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                    
                    </div>
                    <!-- /inner -->
                    
                </div>
                <!-- /inner -->
                
            </div>
            <!-- /section -->
            
            
            <div class="section">
            	<h4><a name="02" id="02">証明書の再発行によるSHA-2への移行方法について</a></h4>
                <div class="inner">
                	<p><strong>2016年1月1日以降が有効期限日のSHA-1証明書</strong>においては、XServerアカウント上から<strong>SHA-2を用いた証明書として再発行</strong>を行うことが出来ます。<br />
                    上記以外の証明書では再発行を行うことはできません。予めご了承ください。</p>
                    <p>再発行は以下の手順で行うことが可能です。</p>
                    
                    
                    <ol style="margin : 0 0 20px 35px ;" class="flow_list">
                    	<li>                            
                        	<p>まずは、受信可能な「<strong>承認用メールアドレス</strong>」を用意します。<br />
                            前回通知した際に用いたメールアドレスが、受信可能かどうかご確認の上、手続きの前にご準備ください。</p>
                            <p style="padding : 0.5em 0.8em ; background : #dedede ; margin-bottom : 4px ;">※<a href="sha2.php#change_mail">別の承認用メールアドレスに通知</a>することも可能です。</p>
                            
                            <p style="padding : 0.5em 0.8em ; background : #dedede ;">※「グローバルサイン クイック認証SSL」の方は、この手続きは必要ありません。次項へお進みください。</p>
                            
                            <dl style="padding : 1em ; border : 1px solid #b3b3b3 ;">
                            	<dt style="font-weight : bold ; font-size : 110% ;">■承認用メールアドレスについて</dt>
                                <dd style="margin-left : 1em ;">
                                	<p>承認用のメールアドレスは、ある程度形式が決まっており、下記の例のようなアドレスとなっています。</p>
                                    <ul style="margin : 0 0 5px 30px ;">
                                    	<li>admin@ドメイン名</li>
                                        <li>administrator@ドメイン名</li>                                        
                                        <li>hostmaster@ドメイン名</li>
                                        <li>webmaster@ドメイン名</li>
                                        <li>postmaster@ドメイン名</li>
                                    </ul>
                                    等
                                </dd>
                            </dl>
                        </li>
                        <li>
                        	<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" title="XServerアカウント ログイン" target="_blank" rel="nofollow">XServerアカウント</a>へログインし、トップ画面の「SSL証明書」のご契約一覧をご確認ください。</p>
                            <p>再発行を行う証明書の「再発行申請」メニューをクリックします。</p>
                            <img src="img/news/sha2_reissue_01.png" alt="証明書の再発行手順1" class="man_img" />
                        </li>
                        <li>
                        	<p>再発行手続きフォームが表示されますので、情報を確認の上、確定ボタンをクリックしてください。</p>
                            <img src="img/news/sha2_reissue_02.png" alt="証明書の再発行手順2" class="man_img" />
                            
                            <p>再発行の申請が完了しました。</p>
                            <img src="img/news/sha2_reissue_03.png" alt="証明書の再発行手順3" class="man_img" />
                        </li>
                        <li>
                        	<p>申請後、SSLベンダーから発行に関する承認メールが届きますので、本文内のURLをクリックして発行を承認してください。</p>
                            
                            <p style="padding : 0.5em 0.8em ; background : #dedede ;">※「グローバルサイン クイック認証SSL」の方は、この手続きは必要ありません。次項へお進みください。</p>
                        </li>
                        <li>
                        	<p>申請または承認が完了した後、SHA-2のSSL証明書が発行されます。<br />
                            弊社側で再発行された証明書の再インストールを行いますので、作業完了まで少しばかりお待ちください。</p>
                        </li>
                        <li>
                        	<p>再インストール完了後、弊社より完了通知をお送りしますので、ご確認ください。<br />
                            以上で、SHA-2証明書の再発行は完了です。</p>
                        </li>
                    </ol>
                    
                    <dl style="padding : 1em ; border : 1px solid #b3b3b3 ;">
                        <dt style="font-weight : bold ; font-size : 110% ;"><a name="change_mail" id="change_mail">■別の承認用メールアドレスに通知するには</a></dt>
                        <dd style="margin-left : 1em ;">
                            <p>前回用いたものではなく、別の承認用メールアドレスに通知したい場合は、一度手順に沿って再発行の手続きを行った後、「承認メール再送」の手続きを行うことで可能です。</p>
                            
                            <ol style="margin : 0 0 5px 30px ;">
                                <li>本(再発行)手順に沿って、再発行申請を行います。</li>
                                <li>XServerアカウントトップ画面、SSL証明書のご契約一覧から、当該証明書の「承認メール再送」メニューへ進みます。</li>
                                <li>フォーム内の情報を確認の上、ご利用予定の「承認用メールアドレス」を選択します。</li>
                                <li>確認ボタンをクリックし、再度情報を確認した後、完了ボタンをクリックします。</li>
                                <li>先ほど選択したメールアドレスに、承認メールが通知されます。</li>
                            </ol>
                        </dd>
                    </dl>
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            
            <div class="section">
            	<h4><a name="03" id="03">署名アルゴリズムの確認方法</a></h4>
                <div class="inner">
                	<p>現在お使いの証明書の署名アルゴリズムについては、下記のような方法で確認することが可能です。</p>
                                        
                    	<ul style="margin : 0 0 15px 25px ;">
                            <li><a href="sha2.php#cert_ie">Internet Explorerの場合</a></li>
                            <li><a href="sha2.php#cert_fire">Mozilla Firefoxの場合</a></li>
                            <li><a href="sha2.php#cert_chr">Google Chromeの場合</a></li>
                        </ul>
                    
                        <h6><a name="cert_ie" id="cert_ie">Internet Explorerの場合</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>アドレスバー近辺に表示されている「鍵マーク」をクリックし、続けて「証明書の表示」をクリックします。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_ie-01.png" alt="署名アルゴリズム確認-IE-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>「詳細」タブをクリックし、「署名アルゴリズム」に関する項目を確認してください。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_ie-02.png" alt="署名アルゴリズム確認-IE-02" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                            </ol>
                        </div>
                        <!-- /inner -->
                        
                        <h6><a name="cert_fire" id="cert_fire">Mozilla Firefoxの場合</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>アドレスバーに表示されている「鍵マーク」をクリックし、続けて「詳細を表示」をクリックします。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-01.png" alt="署名アルゴリズム確認-Firefox-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>「セキュリティ」タブ内の、「証明書を表示」ボタンをクリックします。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-02.png" alt="署名アルゴリズム確認-Firefox-02" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>「詳細」タブをクリックし、証明書のフィールドより「Certificate Signature Algorithm」を選択の上、フィールドの値に表示された内容を確認してください。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-03.png" alt="署名アルゴリズム確認-Firefox-03" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                            </ol>
                        </div>
                        <!-- /inner -->
                        
                        <h6><a name="cert_chr" id="cert_chr">Google Chromeの場合</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>アドレスバーに表示されている「鍵マーク」をクリックし、続けて「接続」タブをクリックしてください。</p>
                                    <p>タブ内の「証明書情報」をクリックします。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_chr-01.png" alt="署名アルゴリズム確認-Chrome-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>「詳細」タブをクリックし、「署名アルゴリズム」に関する項目を確認してください。</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_chr-02.png" alt="署名アルゴリズム確認-Chrome-02" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                            </ol>
                        </div>
                        <!-- /inner -->
                        
                    <!--</div>-->
                    <!-- /inner -->
                    
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            
        </div> 
        <!-- /inner -->
    
    </div>
    <!-- /main -->
    
    <div id="footer">   		
        <p id="copyright">&copy; 2003-<?php print date( "Y" , time() ) ?> XServer Inc.</p>
    </div>
    <!-- /footer -->
    
    

</div>
<!-- /contents_wrapper -->

<?php include("bottom.php"); ?>
