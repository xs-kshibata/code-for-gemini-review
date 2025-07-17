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

<title>独自SSLのサービス拡張と改定 │ <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは2015年9月16日、SNI SSLへの対応や新ブランド（クラウドSSL、クラウドセキュア スピード認証SSL）の追加、取り扱い中のSSLの価格改定など、独自SSLのサービス拡張と改定をいたします。">

<base href="<?php print $SITE_URL; ?>">

<style type="text/css">
/* 基本 */
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

a img { border : none ; }

#wrapper {
	width : 910px ;
	margin : 0 auto 30px ;
}

#header { height : 80px ; }

#header h1 {
	position : relative ;
	top : 24px ;
}

#footer {
	padding : 15px ;
	color : #Fff ;
	background : #1b5fa6 ;
}

#main { border : 1px solid #b3b3b3 ; }

.section { margin-bottom : 20px ; }

.inner {
	padding : 20px ;
	text-align : left ;
}

.section p { margin-bottom : 1em ; }

.section h4 {
	font-size : 125% ;
	padding : 4px 8px ;
	border-left : 8px solid #1b5fa6 ;
	border-bottom : 1px solid #1b5fa6 ;
	margin-bottom : 12px ;
}

.section .inner { padding : 10px 20px ; }
.section .inner2 { padding : 10px ; }

#main .section .inner>h5 {
	padding : 5px 10px ;
	color : #fff ;
	background : #666 ;
	font-size : 116.67% ;
}

#main .section .column h5 {
	padding : 0 0 0 22px ;
	font-size : 116.67% ;
	font-weight : bold ;
	background : url(img/news/circle_marker.png) left center no-repeat ;
}

#main .section .column dt {
	font-weight : bold ;
	margin-bottom : 8px ;
}

#main .section .column dd { margin-left : 12px ; }

.stat_info dt {
	font-weight : bold ;
	font-size : 125% ;
	margin-bottom : 4px ;
}

.note {
	list-style: none;
}

.indent-adjust {
	text-indent: -1.5em;
	padding-left: 1.5em;
	margin-bottom: 3px;
	font-size: 91.67%;
}

.indent-adjust2 {
	text-indent: -3.0em;
	padding-left: 3.0em;
	margin-bottom: 3px;
	font-size: 91.67%;
}

.indent-adjust:last-child {
	margin-bottom:20px;
}

.indent-adjust2:last-child {
	margin-bottom:20px;
}


/* 共通 */

.foz9 { font-size: 75%; }
.foz10 { font-size: 83.33%; }
.foz14 {font-size: 116.67%;}
.foz15 {font-size: 125%;}
.foz16 {font-size: 133.33%;}

.mb5 {margin-bottom: 5px;}
.mb10 {margin-bottom: 10px!important;}
.mb20 { margin-bottom: 20px; }
.mb30 {margin-bottom: 30px;}
.mtb25 { margin: 25px 0; }
.mtb35 { margin: 35px 0; }
.ml15 {margin-left: 15px;}
.p5 { padding: 5px; }
.pt0 {padding-top: 0!important;}
.pb0 {padding-bottom: 0!important;}

.text-center { text-align: center; }

.fowb {font-weight: bold;}

.w16 { width: 16%; }
.w32 { width: 32%; }

.bdb0 { border-bottom: none; }
.bdwt { border-top:3px double #B3B3B3; }
.bdwr { border-right:3px double #B3B3B3; }
.bdwb { border-bottom:3px double #B3B3B3; }


/* ページタイトル */
.page-ttl {
	display : block ;
	padding : 20px ;
	border-bottom : 1px solid #b3b3b3 ;
	font-size : 200% ;
	color : #1b5fa6 ;
}

/* ページ冒頭部分 */
.index { margin: 0 0 20px 35px; }

#main .section .column {
	border : 1px solid #b3b3b3 ;
	padding : 8px 8px 0 ;
}

/* clearfix */

.clearfix {
	zoom : 1 ;
}

.clearfix:after {
	content: ".";
	clear : both ;
	display : block ;
	height : 0 ;
	visibility : hidden ;
}

.sni-column {
	border : 1px solid #b3b3b3 ;
	padding : 8px 8px 0 ;
}

.sni-column h5 {
	padding : 0 0 0 22px ;
	color: #00A498;
	font-size: 116.67% ;
	font-weight : bold ;
	background : url(img/news/sni_contents_icon.png) left center no-repeat ;
}

.sni-column dt {
	font-weight : bold ;
	margin-bottom : 8px ;
}

.sni-column dd {
	margin-left : 12px ;
}

.ssl-type {
	margin-bottom: 40px;
}

.ip-base {
	width: 336px;
	padding: 15px 20px;
	border: 2px solid #1B5FA6;
	text-align: center;
	float: right;
}

.ip-base h6 {
	color: #1B5FA6;
	font-size: 141.67%;
	background: none;
	padding-bottom: 5px;
}

.sni-base {
	width: 336px;
	padding: 15px 20px;
	border: 2px solid #00A498;
	text-align: center;
	float: left;
}

.sni-base h6 {
	color: #00A498;
	font-size: 141.67%;
	background: none;
	padding-bottom: 5px;
}

table {
	border: 1px solid #B3B3B3;
	border-right: 0;
	border-bottom: 0;
	border-collapse: collapse;
	table-layout: fixed;
	width: 100%;
	margin-bottom: 8px;
}

table caption {
	background-color: #4D4D4D;
	color: #fff;
	font-weight: bold;
	padding: 5px 0;
}

table th {
	text-align: center;
	font-weight: bold;
	padding: 10px 5px;
	border-right: 1px solid #B3B3B3;
	border-bottom: 1px solid #B3B3B3;
	background-color: #E6E6E6;
}

table td {
	text-align: center;
	font-weight: bold;
	padding: 10px 5px;
	border-right: 1px solid #B3B3B3;
	border-bottom: 1px solid #B3B3B3;
	font-weight: normal;
}

table th.d_bg {
	background-color: #808080;
	color: #fff;
}

table th.ip_bg {
	background-color: #1B5FA6;
	color: #fff;
}

table th.sni_bg {
	background-color: #00A498;
	color: #fff;
}

table th.menu01 {
	background-color: #046FB5;
	padding: 10px 0;
	color: #fff;
}

table th.menu02 {
	background-color: #115098;
	padding: 10px 0;
	color: #fff;
}

table th.menu03 {
	background-color: #C44141;
	padding: 10px 0;
	color: #fff;
}

table th.menu04 {
	background-color: #EB6D0A;
	padding: 10px 0;
	color: #fff;
}

table th.menu05 {
	background-color: #00923E;
	padding: 10px 0;
	color: #fff;
}

.rp_ttl {
	color: #333;
	font-size: 108.33%;
	background: none;
	text-align: left;
	padding: 10px 0 0;
}

table strong {
	color: #f00;
}

.nb {
	margin: 0 auto 30px;
	width: 710px;
}

.c {
	width: 340px;
	float: left;
	border: 1px solid #046FB5;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

.c_ttl {
	background-color: #046FB5;
	padding: 15px 0;
	text-align: center;
	color: #fff;
	font-size: 141.67%;
	line-height: 1.2;
}

.c_main {
	padding: 15px 0;
	text-align: center;
}

.s {
	width: 340px;
	float: right;
	border: 1px solid #115098;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

.s_ttl {
	background-color: #115098;
	padding: 15px 0;
	text-align: center;
	color: #fff;
	font-size: 141.67%;
	line-height: 1.2;
}

.s_main {
	padding: 15px 0;
	text-align: center;
}

.item_ttl {
	background: none!important;
	color: #666!important;
	font-size: 130%!important;
}

.item-price {
	text-align: center;
	line-height:1;
}

.item-price .year-c {
	display: inline-block;
	padding: 4px 6px;
	background-color: #046FB5;
	font-size: 133.33%;
	font-weight: bold;
	color: #fff;
	margin-right: 5px;
}

.item-price .price-c {
	display: inline-block;
	font-weight: bold;
	font-size: 300%;
	color: #046FB5;
	position: relative;
	top: 3px;
}

.item-price .year-s {
	display: inline-block;
	font-weight: bold;
	padding: 4px 6px;
	background-color: #115098;
	font-size: 133.33%;
	color: #fff;
	margin-right: 5px;
}

.item-price .price-s {
	display: inline-block;
	font-weight: bold;
	font-size: 300%;
	color: #115098;
	position: relative;
	top: 3px;
}

.item-price span {
	font-size: 50%;
}

.nb_info {
	background-color: #F2F2F2;
	padding: 10px;
	border-top: 1px dashed #B3B3B3;
	-webkit-border-bottom-right-radius: 3px;
	-moz-border-bottom-right-radius: 3px;
	-ms-border-bottom-right-radius: 3px;
	-o-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	-moz-border-bottom-left-radius: 3px;
	-ms-border-bottom-left-radius: 3px;
	-o-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

.asset_box {
	width: 710px;
	margin: 40px auto;
}

.asset_ttl {
	border-bottom: 1px solid #B3B3B3;
	padding-bottom: 10px;
	margin-bottom: 10px;
	text-align: center;
	background-color: #fff!important;
	color: #333!important;
}

.asset_main {
	width: 710px;
	text-align: center;
}

.browse_ttl {
	color: #333!important;
	font-size: 110%!important;
	background: none!important;
	padding: 0!important;
}

.siteseal-sample {
	padding-top: 12px;
	margin-top: 12px;
	border-top: 1px dashed #B3B3B3;
}

.ip-txt {
	color: #1B5FA6;
	font-weight: bold;
}

.sni-txt {
	color: #00A498;
	font-weight: bold;
}

.type-ip td {
	background-color: #f3f7fa;
	font-size: 91.67%;
}

.type-sni td {
	background-color: #f2fafa;
	font-size: 91.67%;
}

.smart-phone {
	padding-top: 12px;
	margin-top: 12px;
	border-top: 1px dashed #B3B3B3;
}

.pc {
	border-bottom: 1px dashed #B3B3B3;
	padding: 5px 0;
}

.pc.end {
	border-bottom: 0;
}

.pc .year {
	background-color: #046FB5;
	padding: 3px 6px;
	line-height: 1;
	color: #fff;
	float: left;
}

.pc .price {
	line-height: 1;
	float: right;
	text-align: right;
	font-size: 108.33%;
}

caption.ip-caption {
	color: #fff;
	background-color: #1b5fa6;
	font-weight: bold;
	text-align: center;
	padding: 5px;
}

caption.sni-caption {
	background-color: #00a498;
	color: #fff;
	font-weight: bold;
	text-align: center;
	padding: 5px;
}

.pb {
	background: #5487bc!important;
	color: #fff;
	text-align: center;
	font-weight: bold;
}

.pa {
	background: #f8a126!important;
	color: #fff;
	text-align: center;
	font-weight: bold;
}

.base-head {
	background: #666666!important;
	color: #fff;
	text-align: center;
	font-weight: bold;
}

.rs-txt { color: #C44141; }
.gt-txt { color: #EB6D0A; }
.gs-txt { color: #00923E; }
.cs-txt { color: #046FB5; }
.sc-txt { color: #115098; }
    
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

<div id="wrapper">

	<div id="header">
		<h1><a href="index.php"><img src="img/news/service_logo.png" alt="エックスサーバー" /></a></h1>
    </div>
    <!-- /header -->
    
    <div id="main">
    	
        <h2 class="page-ttl">独自SSLのサービス拡張と改定<span class="foz10">(2015/09/11)</span></h2>
        <div class="inner">
        
        	<div class="section">
                <p>2015年9月16日(水)に、独自SSLのサービス拡張に伴う料金体系の変更、および取り扱いブランドの追加と価格改定を行います。<br />
                今回のサービス拡張では、IPアドレスとの紐づけが不要な「SNI SSL(ネームベース)」プランを追加いたします。</p>
                
                <p>また、SSL証明書自体も従来よりもお手頃な価格に改定しております。<br />
                加えて「SNI SSL(ネームベース)」プランを選択することで、さらに安価でご利用いただくことが可能となります。<br />
                詳細は以下よりご確認ください。</p>
                
                <ul class="index">
                	<li><a href="revice_ssl.php#r01">SNI SSL(ネームベース)について</a></li>
                    <li><a href="revice_ssl.php#r02">既存ブランドの料金体系の変更と価格改定（一部の値下げ）</a></li>
                    <li><a href="revice_ssl.php#r03">新ブランドについて</a></li>
                    <li><a href="revice_ssl.php#r04">SSL比較一覧</a></li>
                </ul>
                
            <p class="border border_blue">
                ※このページでは下記ニュースに付随する補足情報を掲載しています。<br>
                 <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=2301" target="_blank">独自SSLが年間1,000円からご利用可能に！「SNI SSL(ネームベース)」の導入に伴うSSL価格改定（一部の値下げ）と新ブランド提供のお知らせ(2015/09/11) </a></span><br><br>

                ※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/" target="_blank">公式サイト</a>をご参照ください。
            </p>
                
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4><a name="r01" id="r01">SNI SSL(ネームベース)について</a></h4>
                <div class="inner">
                
                	<p>「SNI SSL(ネームベース)」とは、SNI(Server Name Indication)を利用したSSLのことです。<br />
                    従来のIPアドレスを必要とするSSLの設定とは異なり、SSL専用のIPアドレスが不要となるため、SSL証明書導入におけるコストを大幅に削減することが可能です。</p>
                    
                    <p>現在では利用されているほとんどのWebブラウザが「SNI SSL(ネームベース)」に対応してきたことから、注目が集まっています。</p>
                        
                    <h5>「SNI SSL(ネームベース)」とは</h5>
                    <div class="inner">
                    	<p>
                        これまでの独自SSLは、IPアドレスに紐付く「IPアドレスベース」で提供しておりました。<br />
                        この度の独自SSLサービス拡張においては、「IPアドレスベース」に加え、ホスト名に紐付く「SNI SSL(ネームベース)」による独自SSLを提供いたします。
                        </p>
                        
                        <div class="ssl-type clearfix">
                        	<div class="sni-base">
                            	<h6>SNI SSL(ネームベース)</h6>
                                <p>
                                SSL証明書はホスト名に紐付き、<br />1つのIPアドレスで複数のドメインに設定可能
                                </p>
                                <img src="img/news/sni_img.png" alt="" />
                            </div>
                            <!-- /.sni-base -->
                            
                        	<div class="ip-base">
                            	<h6>IPアドレスベース</h6>
                                <p>
                                SSL証明書はIPアドレスに紐づき、<br />1つのIPアドレスで1つのドメイン名に設定可能
                                </p>
                                <img src="img/news/ip_img.png" alt="" />
                            </div>
                            <!-- /.ip-base -->
                            
                        </div>
                        <!-- /.ssl-type -->
                    
                    </div>
                    <!-- /inner -->
                    
                    <h5>「SNI SSL(ネームベース)」と「IPアドレスベース」との違いについて</h5>
                    <div class="inner">
                    	<p>
                        サービスの拡張により、従来通りのIPアドレスに紐付く「IPアドレスベース」か、ホスト名に紐付く「SNI SSL(ネームベース)」のいずれかのプランを選択して利用することが可能となります。
                        </p>
                        <p>「SNI SSL(ネームベース)」はSSL専用のIPアドレスが不要で、その分、安価でご利用いただけます。<br />
                        また、「SNI SSL(ネームベース)」は、SSL証明書ベンダーによる発行後からインストール完了(ご利用開始)まで 数時間 と大変スピーディーです。
                        </p>
                    
                    	<table>
                    	    <tbody>
                    	        <tr>
                    	            <th class="d_bg w16">項目名</th>
                                    <th class="sni_bg">SNI SSL(ネームベース) <span class="foz10">※1</span></th>
                    	            <th class="ip_bg">IPアドレスベース</th>
                    	        </tr>
                                <tr>
                    	            <th>初期設定費用</th>
                                    <td>0円</td>
                    	            <td>8,000円(税抜)</td>
                    	        </tr>
                    	        <tr>
                    	            <th>専用IPアドレス利用料</th>
                                    <td>不要</td>
                    	            <td>6,000円(税抜)</td>
                    	        </tr>
                                <tr>
                    	            <th>SSL証明書料</th>
                    	            <td>1,000円(税抜)/年〜</td>
                    	            <td>1,000円(税抜)/年〜</td>
                    	        </tr>
                    	        <tr>
                    	            <th>対応ブラウザ</th>
                                    <td><img src="img/common/status_icon_circle.png" alt="" /><br />一部の古いブラウザに非対応</td>
                    	            <td><img src="img/common/status_icon_circle_double.png" alt="" /><br />携帯電話(フィーチャーフォン)など<br />幅広いブラウザに対応</td>
                    	        </tr>
                                <tr>
                    	            <th>ご利用開始</th>
                                    <td>発行から数時間 <span class="foz10">※2</span></td>
                    	            <td>発行から72時間以内</td>
                    	        </tr>
                    	    </tbody>
                    	</table>
                        <ul class="note">
                            <li class="indent-adjust2">(※1) グローバルサイン「クイック認証SSL」においては「SNI SSL(ネームベース)」を提供しておりません。</li>
                            <li class="indent-adjust2 mb20">(※2) 既に同一のコモンネームで「IPアドレスベース」をご利用の場合は、発行から72時間以内でのご利用開始となります。</li>
                            
                            <li class="indent-adjust">※ httpsでのみ利用可能です。SMTP over SSL や POP over SSL などのメール機能についてはご利用になれません。</li>
                            <li class="indent-adjust">※ 「SNI SSL(ネームベース)」は一部の古いWebブラウザや携帯端末(スマートフォン・フィーチャーフォン)に対応しておりません。より幅広いWebブラウザ環境に対応する場合は、「IPアドレスベース」をご選択ください。</li>
                            <li class="indent-adjust">※ 「IPアドレスベース」と「SNI SSL(ネームベース)」は、すべてのサーバープラン(X10、X20、X30)でご利用可能です。</li>
                            <li class="indent-adjust">※ 同一のドメイン(コモンネーム)の場合、IPアドレスベースとSNI SSL(ネームベース)の併用はできません。</li>
                            <li class="indent-adjust">※ 初期ドメイン(xsrv.jp)での利用はできません。</li>
                        </ul>
                        <!-- /.note -->
                        
                        <div class="sni-column">
                            <h5>SNI SSL(ネームベース)に対応するWebブラウザについて</h5>
                            <div class="inner">
                                <p>
                                SNI SSL(ネームベース)の主要な対応ブラウザは以下です。<br /><br />

                                Internet Explorer7　（Windows Vista)以降　※WindowsXPは非対応です。<br />
                                Mozilla Firefox 2.0 以降<br />
                                Google Chrome 6 以降<br />
                                Safari 3.0 以降<br />
                                iOS 4以降のMobileSafari<br />
                                Android 3以降のAndroidデフォルトブラウザ<br />
                                Windows Phone 7以降<br /><br />
                                
                                ※上記は当サービスが独自に調査したものであり、提供元の情報と異なる可能性があります。詳細は提供元にご確認ください。 
                                </p>
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
            	<h4><a name="r02" id="r02">既存ブランドにおける料金体系の変更と価格改定（一部の値下げ）</a></h4>
                <div class="inner">
                	<p>2015年9月16日(水)より、RapidSSL「ラピッドSSL」、ジオトラスト「クイックSSLプレミアム」、グローバルサイン「クイック認証SSL」について、料金体系の変更と価格改定を実施いたします。<br />
                    今回の変更により、これまでより安価で独自SSL証明書を利用することが可能になります。</p>
                    
                    <div class="revice-price_content">
                        <h6 class="rp_ttl">[料金体系について]</h6>
                        <div class="inner2">
                            <p>これまでのSSL証明書の費用には専用IPアドレスの費用を含めておりましたが、今回のサービス拡張に伴い、料金体系が「SSL証明書」料と「専用IPアドレス」利用料に分かれます。<br />
                            なお、SSL証明書タイプとして「SNI SSL(ネームタイプ)」を選択された場合は専用IPアドレスを利用しませんので、「専用IPアドレス」利用料は0円となります。</p>
                            <p class="text-center mtb35"><img src="img/news/revice_price_img.png" alt=""></p>

                        </div>
                        <!-- /.inner2 -->
                        
                        <h6 class="rp_ttl">[価格改定について]</h6>
                        <div class="inner2">
                        <p>
                        改定前と改定後の価格は以下です。
                        </p>
                        <table>
                        	<caption class="sni-caption">SNI SSL(ネームベース)</caption>
                            <tbody>
                            	<tr>
                                	<th class="base-head" colspan="2" style="width: 35%;">項目</th>
                                    <th class="pb">改定前</th>
                                    <th class="pa">改定後</th>
                                </tr>
                                <tr>
                                	<th colspan="2">初期設定費用</th>
                                    <td>━</td>
                                    <td>0円</td>
                                </tr>

                                <tr>
                                	<th rowspan="5" class="bdwt">SSL証明書料</th>
                                    <th class="bdwt">ラピッドSSL</th>
                                    <td class="bdwt">━</td>
                                    <td class="bdwt">1,500円/年</td>
                                </tr>
                                <tr>
                                    <th>クイックSSLプレミアム</th>
                                    <td>━</td>
                                    <td>14,000円/年</td>
                                </tr>
                                <tr>
                                    <th>クイック認証SSL</th>
                                    <td>━</td>
                                    <td>━</td>
                                </tr>
                                <tr>
                                    <th>クラウドSSL</th>
                                    <td>━</td>
                                    <td>1,000円/年</td>
                                </tr>
                                <tr>
                                    <th>クラウドセキュア<br />ドメイン認証SSL</th>
                                    <td>━</td>
                                    <td>9,000円/年</td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <table>
                        	<caption class="ip-caption">IPアドレスベース</caption>
                            <tbody>
                            	<tr>
                                	<th class="base-head" colspan="2" style="width: 35%;">項目</th>
                                    <th class="pb">改定前</th>
                                    <th class="pa">改定後</th>
                                </tr>
                                <tr>
                                	<th colspan="2">初期設定費用</th>
                                    <td>10,000円<br />(クイックSSLプレミアム 14,500円)</td>
                                    <td><strong>8,000円</strong></td>
                                </tr>
                                
                                <tr>
                                	<th colspan="2" style="border-top:3px double #B3B3B3;">専用IPアドレス利用料</th>
                                    <td style="border-top:3px double #B3B3B3;">6,000円 <span style="font-size: 80%">※1</span></td>
                                    <td style="border-top:3px double #B3B3B3;">6,000円</td>
                                </tr>
                                
                                <tr>
                                	<th rowspan="5" style="border-top:3px double #B3B3B3;">SSL証明書料</th>
                                    <th style="border-top:3px double #B3B3B3;">ラピッドSSL</th>
                                    <td style="border-top:3px double #B3B3B3;">4,000円/年 <span style="font-size: 80%">※1</span></td>
                                    <td style="border-top:3px double #B3B3B3;"><strong>1,500円/年</strong></td>
                                </tr>
                                <tr>
                                    <th>クイックSSLプレミアム</th>
                                    <td>14,000円/年 <span style="font-size: 80%">※1</span></td>
                                    <td>14,000円/年</td>
                                </tr>
                                <tr>
                                    <th>クイック認証SSL</th>
                                    <td>14,000円/年 <span style="font-size: 80%">※1</span></td>
                                    <td>14,000円/年</td>
                                </tr>
                                <tr>
                                    <th>クラウドSSL</th>
                                    <td>━</td>
                                    <td>1,000円/年</td>
                                </tr>
                                <tr>
                                    <th>クラウドセキュア<br />ドメイン認証SSL</th>
                                    <td>━</td>
                                    <td>9,000円/年</td>
                                </tr>

                            </tbody>
                        </table>
                        <ul class="note">
                            <li class="indent-adjust2 mb20">(※1)改定前の現行価格(2015/09/16 正午までの価格)から「専用IPアドレス利用料」を差し引いた金額を記載しています。</li>
                            
                            <li class="indent-adjust">※グローバルサイン クイック認証SSLにおいては、「SNI SSL(ネームベース)」プランをご利用いただけません。 </li>
                            <li class="indent-adjust">※「SNI SSL(ネームベース)」プランはIPアドレスが不要ですので、「専用IPアドレス利用料」は発生いたしません。</li>
                            <li class="indent-adjust">※価格表記はすべて税抜き価格です。</li>
                        </ul>
                        </div>
                        
                        <h6 class="rp_ttl">[お支払い料金について]</h6>
                        <div class="inner2">
                                            
                        <table class="foz10">
                            <caption class="sni-caption">SNI SSL(ネームベース)</caption>
                            <tbody>
                        	<tr>
                            	<th class="base-head">項目</th>
                                <th class="pb bdwr" colspan="5">改定前</th>
                                <th class="pa" colspan="5">改定後</th>
                            </tr>
                        	<tr>
                            	<th class="bdwb" rowspan="2">サービス名</th>
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">クラウドSSL</td>
                                <td class="bdwr sc-txt bdb0 pb0 fowb">クラウドセキュア</td>
                                
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">クラウドSSL</td>
                                <td class="sc-txt bdb0 pb0 fowb">クラウドセキュア</td>
                            </tr>
                            <tr>
                                <td class="bdwb">ラピッドSSL</td>
                                <td class="bdwb">クイックSSL<br />プレミアム</td>
                                <td class="bdwb">クイック認証SSL</td>
                                <td class="bdwb">クラウドSSL</td>
                                <td class="bdwr bdwb">ドメイン認証SSL</td>
                                
                                <td class="bdwb">ラピッドSSL</td>
                                <td class="bdwb">クイックSSL<br />プレミアム</td>
                                <td class="bdwb">クイック認証SSL</td>
                                <td class="bdwb">クラウドSSL</td>
                                <td class="bdwb">ドメイン認証SSL</td>
                            </tr>
                                                        
                            <tr>
                                <th>1年</th>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td>1,500円</td>
                                <td>14,000円</td>
                                <td>━</td>
                                <td>1,000円</td>
                                <td>9,000円</td>
                            </tr>
                            
                            <tr>
                                <th>2年</th>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td>2,700円</td>
                                <td>26,000円</td>
                                <td>━</td>
                                <td>1,800円</td>
                                <td>17,000円</td>
                            </tr>
                            
                            <tr>
                                <th>3年</th>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td>3,200円</td>
                                <td>36,000円</td>
                                <td>━</td>
                                <td>2,500円</td>
                                <td>24,000円</td>
                            </tr>
                            </tbody>
                        </table>
                        
                        <table class="mb20 foz10">
                    	<caption class="ip-caption">IPアドレスベース</caption>
                            <tbody>
                        	<tr>
                            	<th class="base-head">項目</th>
                                <th class="pb bdwr" colspan="5">改定前</th>
                                <th class="pa" colspan="5">改定後</th>
                            </tr>
                        	<tr>
                            	<th class="bdwb" rowspan="2">サービス名</th>
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">クラウドSSL</td>
                                <td class="bdwr sc-txt bdb0 pb0 fowb">クラウドセキュア</td>
                                
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">クラウドSSL</td>
                                <td class="sc-txt bdb0 pb0 fowb">クラウドセキュア</td>
                            </tr>
                            <tr>
                                <td class="bdwb">ラピッドSSL</td>
                                <td class="bdwb">クイックSSL<br />プレミアム</td>
                                <td class="bdwb">クイック認証SSL</td>
                                <td class="bdwb">クラウドSSL</td>
                                <td class="bdwr bdwb">ドメイン認証SSL</td>
                                
                                <td class="bdwb">ラピッドSSL</td>
                                <td class="bdwb">クイックSSL<br />プレミアム</td>
                                <td class="bdwb">クイック認証SSL</td>
                                <td class="bdwb">クラウドSSL</td>
                                <td class="bdwb">ドメイン認証SSL</td>
                            </tr>
                                                        
                            <tr>
                                <th>1年</th>
                                <td>20,000円</td>
                                <td>34,500円</td>
                                <td>30,000円</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td><strong>15,500円<br /><span class="foz10">(-4,500円)</span></strong></td>
                                <td><strong>28,000円<br /><span class="foz10">(-6,500円)</span></strong></td>
                                <td><strong>28,000円<br /><span class="foz10">(-2,000円)</span></strong></td>
                                <td>15,000円</td>
                                <td>23,000円</td>
                            </tr>
                            
                            <tr>
                                <th>2年</th>
                                <td>27,000円</td>
                                <td>49,050円</td>
                                <td>45,000円</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td><strong>20,700円<br /><span class="foz10">(-6,300円)</span></strong></td>
                                <td><strong>44,000円<br /><span class="foz10">(-5,050円)</span></strong></td>
                                <td><strong>44,000円<br /><span class="foz10">(-1,000円)</span></strong></td>
                                <td>19,800円</td>
                                <td>35,000円</td>
                            </tr>
                            
                            <tr>
                                <th>3年</th>
                                <td>32,000円</td>
                                <td>59,600円</td>
                                <td>56,000円</td>
                                <td>━</td>
                                <td class="bdwr">━</td>
                                
                                <td><strong>23,200円<br /><span class="foz10">(-8,800円)</span></strong></td>
                                <td><strong>56,000円<br /><span class="foz10">(-3,600円)</span></strong></td>
                                <td>56,000円</td>
                                <td>22,500円</td>
                                <td>44,000円</td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="note">
                            <li class="indent-adjust">※価格表記はすべて税抜き価格です。</li>
                        </ul>
                        <!-- /.note -->
                    </div>
                      
                    </div>
                    <!-- /.revice-price_content -->
                    
                    
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            
            <div class="section">
            	<h4><a name="r03" id="r03">新ブランドについて</a></h4>
                <div class="inner">
                	<p>2015年9月16日(水)より、クラウドセキュア株式会社が提供する新ブランド「クラウドSSL」と「クラウドセキュア」の提供を開始いたします。<br />
                    いずれのブランドも、世界シェアNo.1のComodo社を認証局に採用した、信頼性の高いSSL証明書です。</p>
                    <div class="nb clearfix">
                        <div class="c">
                        	<h5 class="c_ttl">コスト重視の方にオススメ!<br />格安のSSL証明書！</h5>
                            <div class="c_main">
                            	<img src="img/news/core_logo.png" alt="クラウドSSL" />
                                <h6 class="item_ttl">クラウドSSL</h6>
                                
                                <div class="item-price">
                                	<div class="year-c">年額</div><div class="price-c">1,000<span>円(税抜)</span></div>
                                </div>
                                <!-- /.price -->
                                
                            </div>
                            <!-- /.coressl-main -->
                            
                            <div class="nb_info">
                            コストパフォーマンスの高いSSLサーバ証明書です。安価なSSL証明書の導入を検討している方にオススメです。
                            </div>
                            
                        </div>
                        <!-- /.coressl -->
                        
                        <div class="s">
                            <h5 class="s_ttl">サイトシールにも対応した、<br />スタンダードなSSL証明書</h5>
                            <div class="s_main">
                            	<img src="img/news/secure_logo.png" alt="クラウドセキュア" />
                                <h6 class="item_ttl">ドメイン認証SSL</h6>
                                
                                <div class="item-price">
                                	<div class="year-s">年額</div><div class="price-s">9,000<span>円(税抜)</span></div>
                                </div>
                                <!-- /.price -->
                            </div>
                            <!-- /.securecore-main -->
                            <div class="nb_info">
                            サイトの安全性をアピールできるサイトシール対応の証明書です。 
                            </div>
                            
                        </div>
                        <!-- /.securecore -->
                        
                    </div>                    
                    <!-- /.n-brand -->
                    
                    <!--<p class="text-center"><a href=""><img src="img/news/new_brand_btn.png" alt="新ブランドの詳細はこちら" /></a></p>-->
                    
                    <div class="asset_box">
                        <h6 class="asset_ttl">新ブランド提供元</h6>
                        <div class="asset_main"><img src="img/news/asset_logo.png" />　<span style="position: relative; top:-10px"><strong>クラウドセキュア株式会社</strong>(<a href="https://www.cloudsecure.co.jp/" target="_blank">https://www.cloudsecure.co.jp/</a>)</span></div>
                    </div>
                    	
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            <div class="section">
            	<h4><a name="r04" id="r04">SSL比較一覧</a></h4>
                <div class="inner">
                	<span class="foz16 fowb">■仕様一覧</span>
                    <table class="mb5">
                        <tbody>
                            <tr>
                                <th class="menu01">クラウドSSL</th>
                                <th class="menu02">クラウドセキュア</th>
                                <th class="menu03">RapidSSL</th>
                                <th class="menu04">GeoTrust</th>
                                <th class="menu05">Globalsign</th>
                            </tr>

                            <tr>
                                <th colspan="5" class="p5">対応サーバープラン</th>
                            </tr>
                            <tr>
                                <td colspan="5">全サーバープラン対応(X10、X20、X30)</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">サービス名</th>
                            </tr>
                            <tr>
                                <td>クラウドSSL</td>
                                <td>ドメイン認証SSL</td>
                                <td>ラピッドSSL</td>
                                <td>クイックSSLプレミアム</td>
                                <td>クイック認証SSL</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">審査・認証方法</th>
                            </tr>
                            <tr>
                                <td>メール認証<br>DNS認証</td>
                                <td>メール認証<br>DNS認証</td>
                                <td>メール認証</td>
                                <td>メール認証</td>
                                <td>ワンクリック認証</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">企業実在証明</th>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">発行速度（最短）</th>
                            </tr>
                            <tr>
                                <td>1〜2日</td>
                                <td>1〜2日</td>
                                <td>1〜2日</td>
                                <td>1〜2日</td>
                                <td>即日</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">契約年数</th>
                            </tr>
                            <tr>
                                <td>1〜3年</td>
                                <td>1〜3年</td>
                                <td>1〜3年</td>
                                <td>1〜3年</td>
                                <td>1〜3年</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">サイトシール</th>
                            </tr>
                            <tr>
                                <td>×</td>
                                <td>
                                ○
                                <div class="siteseal-sample">
                                <img src="img/common/securecore_seal_sample.png" alt="クラウドセキュア-サイトシールサンプル" />
                                </div>
                                </td>
                                <td>×</td>
                                <td>
                                ○
                                <div class="siteseal-sample">
                                <img src="img/common/geo_seal_sample.png" alt="ジオトラスト-サイトシールサンプル" />
                                </div>
                                </td>
                                <td>
                                ○
                                <div class="siteseal-sample">
                                <img src="img/common/global_seal_sample.png" alt="グローバルサイン-サイトシールサンプル" />
                                </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSL提供元</th>
                            </tr>
                            <tr>
                                <td>クラウドセキュア株式会社</td>
                                <td>クラウドセキュア株式会社</td>
                                <td>ジオトラスト株式会社</td>
                                <td>ジオトラスト株式会社</td>
                                <td>GMO<br />グローバルサイン株式会社</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSLプラン</th>
                            </tr>
                            <tr>
                                <td colspan="4"><span class="sni-txt">SNI SSL(ネームベース)</span><br />or<br /><span class="ip-txt">IPアドレスベース</span></td>
                                <td><span class="ip-txt">IPアドレスベース</span></td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">対応WEBブラウザ・スマートフォン</th>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5 sni_bg">SNI SSL(ネームベース)</th>
                            </tr>
                            <tr class="type-sni">
                                <td colspan="4">
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                Internet Explorer7(※)、Mozilla Firefox 2.0 以降、Google Chrome 6 以降、Safari 3.0 以降<br />
                                ※WindowsXPは非対応です。
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                Android 3.0以降、iOS 4.0以降
                                </div>
                                </td>
                                
                                <td>
                                <b>━</b>
                                </td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5 ip_bg">IPアドレスベース</th>
                            </tr>
                            <tr class="type-ip">
                                <td>
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                IE5.01以降<br />
                                Firefox 1.0 以降<br />
                                Google Chrome すべて<br />
                                Safari 1.2 以降
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5以降<br />
                                iOS 1.0以降
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                IE5.01以降<br />
                                Firefox 1.0 以降<br />
                                Google Chrome すべて<br />
                                Safari 1.2 以降
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5以降<br />
                                iOS 1.0以降
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6以降<br />
                                Firefox 1.0 以降<br />
                                Google Chrome 1.0 以降<br />
                                Safari 2.0 以降
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5以降<br />
                                iOS iPhone3G以降
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6以降<br />
                                Firefox 1.0 以降<br />
                                Google Chrome 1.0 以降<br />
                                Safari 2.0 以降
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5以降<br />
                                iOS iPhone3G以降
                                </div>
                                </td>
                                <td>
                                <h6 class="browse_ttl">[WEBブラウザ]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6以降<br />
                                Firefox 3.0 以降<br />
                                Google Chrome すべて<br />
                                Safari OS X10.5以降
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[スマートフォン]</h6>
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                Android 2.3以降<br />
                                iOS 4.0以降
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /.revice-price_table -->
                    <div class="column mb30">
                        <h5>SSL証明書のインストールに関して</h5>
                        <div class="inner">
                            <p>
                            SSL証明書のインストール作業は自動で行われます。<br />
                            お客様においては、お申し込み後にSSL提供元からのメール連絡に対する認証作業のみお願いいたします。
                            </p>
                            
                            <p>インストール作業の完了までにかかる時間は、お申し込みのプランによって以下の通り異なります。</p>
                            
                            <p class="ml15">
                            「SNI SSL(ネームベース)」・・・数時間以内 <span class="foz10">(※)</span><br />
                            「IPアドレスベース」・・・最大72時間以内
                            </p>
                            <ul class="note">
                                <li class="indent-adjust">※既に同一のコモンネームで「IPアドレスベース」をご利用の場合は、発行から72時間以内でのご利用開始となります。</li>
                            </ul>
                        </div>
                        <!-- /inner -->
                    </div>
                    <!-- /column -->
                    
                    <span class="foz16 fowb">■料金一覧</span>
                    <table class="mb10">
                        <tbody>
                            <tr>
                                <th class="menu01">クラウドSSL</th>
                                <th class="menu02">クラウドセキュア</th>
                                <th class="menu03">RapidSSL</th>
                                <th class="menu04">GeoTrust</th>
                                <th class="menu05">Globalsign</th>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">サービス名</th>
                            </tr>
                            <tr>
                                <td>クラウドSSL</td>
                                <td>ドメイン認証SSL</td>
                                <td>ラピッドSSL</td>
                                <td>クイックSSLプレミアム</td>
                                <td>クイック認証SSL</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSL証明書料 <span class="foz10">※1</span></th>
                            </tr>
                            <tr>
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1年</dt>
                                		<dd class="price">1,000円</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2年</dt>
                                		<dd class="price"><strong class="foz14">1,800円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3年</dt>
                                		<dd class="price"><strong class="foz14">2,500円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1年</dt>
                                		<dd class="price">9,000円</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2年</dt>
                                		<dd class="price"><strong class="foz14">17,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3年</dt>
                                		<dd class="price"><strong class="foz14">24,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1年</dt>
                                		<dd class="price">1,500円</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2年</dt>
                                		<dd class="price"><strong class="foz14">2,700円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3年</dt>
                                		<dd class="price"><strong class="foz14">3,200円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1年</dt>
                                		<dd class="price">14,000円</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2年</dt>
                                		<dd class="price"><strong class="foz14">26,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3年</dt>
                                		<dd class="price"><strong class="foz14">36,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1年</dt>
                                		<dd class="price">14,000円</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2年</dt>
                                		<dd class="price"><strong class="foz14">26,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3年</dt>
                                		<dd class="price"><strong class="foz14">36,000円</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /.revice-price_table -->
                    
                    <p class="text-center"><img src="img/news/set_type_icon.png" alt="" /></p>
                    
                    <table>
                        <caption>いずれかのSSLプランを選択</caption>
                        <tbody>
                            <tr>
                                <th class="d_bg w32" colspan="2">項目</th>
                                <th class="sni_bg">SNI SSL(ネームベース) <span class="foz10">※2</span></th>
                                <th class="ip_bg">IPアドレスベース</th>
                            </tr>
                            <tr>
                                <th colspan="2">初期設定費用 <span class="foz10">※3</span></th>
                                <td>0円</td>
                                <td>8,000円</td>
                            </tr>
                            <tr>
                                <th rowspan="3">専用IPアドレス<br />利用料</th>
                                <th class="year">1年</th>
                                <td rowspan="3">0円</td>
                                <td>6,000円</td>
                            </tr>
                            <tr>
                                <th class="year">2年</th>
                                <td>10,000円</td>
                            </tr>
                            <tr>
                                <th class="year">3年</th>
                                <td>12,000円</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="note">
                        <li class="indent-adjust2">(※1) 2年以上のご契約で割引を適用いたします。</li>
                        <li class="indent-adjust2">(※2) グローバルサイン「クイック認証SSL」においては「SNI SSL(ネームベース)」を提供しておりません。</li>
                        <li class="indent-adjust2 mb20">(※3) SSL証明書の新規契約時に発生する費用です。</li>
                        
                        <li class="indent-adjust">※ 価格表記はすべて税抜き価格です。</li>
                    </ul>
                    
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
