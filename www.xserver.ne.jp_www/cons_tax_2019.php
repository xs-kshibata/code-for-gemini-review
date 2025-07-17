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
    
<link rel="index" href="<?php print $SITE_URL; ?>/sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<title>消費税法の改正に伴うご請求金額の変更について │ <?php print $SITE_TITLE; ?></title>
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
	padding : 10px 15px ;
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


#main .section .column {
	border : 1px solid #b3b3b3 ;
	padding : 8px 8px 0 ;
}

#main .section .inner>h5 {
	padding : 4px 8px ;
	color : #fff ;
	background : #888 ;
	font-size : 115% ;
}

#main .section .column h5 {
	padding : 0 0 0 22px ;
	font-size : 110% ;
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
	font-size : 90% ;
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
    	
        <h3>消費税法の改正に伴うご請求金額の変更について</h3>
        <div class="inner">
        
        	<div class="section">
                <p>消費税法の改正により、2019年10月1日以降のご利用分から消費税率を8%から10%へ引き上げることが決定されています。<br>
                    2019年10月1日以降のサービスのご利用料金に関しては、新しい税率に基づいたものへと変更いたします。</p>
               <p class="border border_blue">
                    ※このページでは以下のニュースに付随する補足情報を掲載しています。<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=5947" target="_blank">消費税法の改正に伴うご請求金額変更のお知らせ(2019/08/22) </a></span>
                </p>
                <p>※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/">公式サイト</a>をご参照ください。</p>
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4>適用される税率について</h4>
                <div class="inner">
                
                	<p>ご利用サービスごとに、以下の方針に沿って対応いたします。</p>
                    
                    <h5>サーバーの場合</h5>
                    <div class="inner">
                    
                    	<h6>[新規ご契約]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019年9月30日まで</strong>のお申し込みには旧税率<strong class="old_tax">8%</strong>を適用する</li>
                                <li><strong class="new_tax">2019年10月1日以降</strong>のお申し込みには新税率<strong class="new_tax">10%</strong>を適用する</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_server_2019.png?date=190806" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[契約更新]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019年9月30日まで</strong>の料金お支払い手続きには旧税率<strong class="old_tax">8%</strong>を適用する</li>
                                <li><strong class="new_tax">2019年10月1日以降</strong>の料金お支払い手続きには新税率<strong class="new_tax">10%</strong>を適用する</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_server_2019.png?date=190806" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">※料金のお支払い手続きによって、お支払い伝票が発行される場合は、そのタイミングを基準に適用税率を決定します。<br />
                                   2019年9月末までに発行されたお支払い伝票などは、実際に料金をお支払いいただくのが2019年10月以降であっても、8％を適用します。<br />また、クレジットカード自動引落しも同様に引落しが実施されたタイミングを基準とします。</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
                    
                    <h5>ドメイン・SSL証明書の場合</h5>
                    <div class="inner">
                    
                    	<h6>[新規ご契約]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019年9月30日まで</strong>のお申し込みには旧税率<strong class="old_tax">8%</strong>を適用する</li>
                                <li><strong class="new_tax">2019年10月1日以降</strong>のお申し込みには新税率<strong class="new_tax">10%</strong>を適用する</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_other_2019.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[契約更新]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019年9月30日まで</strong>の料金お支払い手続きには旧税率<strong class="old_tax">8%</strong>を適用する</li>
                                <li><strong class="new_tax">2019年10月1日以降</strong>の料金お支払い手続きには新税率<strong class="new_tax">10%</strong>を適用する</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_other_2019.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">※料金のお支払い手続きによって、お支払い伝票が発行される場合は、そのタイミングを基準に適用税率を決定します。<br />
                                   2019年9月末までに発行されたお支払い伝票などは、実際に料金をお支払いいただくのが2019年10月以降であっても、8％を適用します。<br />また、クレジットカード自動引落しも同様に引落しが実施されたタイミングを基準とします。</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
                    <h5>各種手数料の場合</h5>
                    <div class="inner">
                    <p>バックアップデータの提供や請求書・見積書発行などにかかる各種手数料につきましては、お支払い伝票が発行されたタイミングを基準に適用税率を決定します。<br>
                        2019年9月末までに発行されたお支払い伝票などは、実際に料金をお支払いいただくのが2019年10月以降であっても、8％を適用します。</p>

                        
                        
                    </div>
                    
                    <!--<div class="column">
                    	<h5>ご利用サービス毎のお支払い伝票発行のタイミング</h5>
                        <div class="inner">
                        
                        	<dl>
                            	<dt>[サーバー/ドメイン]</dt>
                                <dd>
                                	<p>
                                    	<img src="img/news/new_icon.png" alt="新規" />
                                        <img src="img/news/update_icon.png" alt="更新" />
                                        「料金のお支払い」メニューからのお支払い伝票発行時
                                    </p>
                                    <div class="note">
                                    	<p class="indent_ajust">※新規ご契約の場合、サービス(アカウント等)のお申し込み時点ではなく、お申し込み後のお支払い伝票発行のタイミングが基準となります。</p>
                                    </div>
                                </dd>
                                <dt>[SSL証明書]</dt>
                                <dd>
                                	<p>
                                        <img src="img/news/new_icon.png" alt="新規" />
                                        サービスの新規お申し込み時<br />
                                        <img src="img/news/update_icon.png" alt="更新" />
                                        「料金のお支払い」メニューからのお支払い伝票発行時
                                    </p>
                                </dd>
                                <dt>[バックアップデータの提供(自動バックアップ)]</dt>
                                <dd>
                                	<p><img src="img/news/new_icon.png" alt="新規" />
                                    サービスの新規お申し込み時</p>
                                </dd>
                            </dl>
                        	
                        </div>-->
                        <!-- /inner -->
                    <!--</div>-->
                    <!-- /column -->
                
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->


            
            
            <!--<div class="section">
               	<h4>各プランのご利用料金について</h4>
                <div class="inner">
                
                    <p>※各プランの新税率料金につきましては、公式サイトの「<a href="price/price_x10.php">料金</a>」にてご確認ください。<br>
                    　旧X2プランをご利用のお客様は「<a href="https://www.xserver.ne.jp/x2_transition.php">『X2』各サーバープランをご契約のお客様向け 特別プランについて</a>」をご確認ください。</p>
                    
            </div>
            /section -->
            
                <p class="border_section">その他、ご不明な点などがございましたら、当サービスの<a href="<?php print $SITE_URL; ?>support/" rel="nofollow">サポート</a>までお問い合わせください。</p>
        
        </div>
        <!-- /inner -->
    
    </div>
    <!-- /main -->
    
    <div id="footer">   		
        <p id="copyright">&copy; <?php print date( "Y" , time() ) ?> XServer Inc.</p>
    </div>
    <!-- /footer -->


</div>
<!-- /contents_wrapper -->

    
    
    
<?php include("bottom.php"); ?>
