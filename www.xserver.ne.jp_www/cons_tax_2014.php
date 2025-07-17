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

<title>消費税法の改正に伴うご請求金額に関するお知らせ │ <?php print $SITE_TITLE; ?></title>
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
    	
        <h3>消費税法の改正に伴うご請求金額に関するお知らせ</h3>
        <div class="inner">
        
        	<div class="section">
                <p>平成24年(2012年)8月の「社会保障の安定財源の確保等を図る税制の抜本的な改革を行うための消費税法等の一部を改正する等の法律」(平成24年法律第68号)の公布を受け、平成25年(2013年)10月1日の閣議で、平成26年(2014年)4月1日からは、消費税率を現在の5%から、8%へ引き上げることが決定されました。</p>            
                <p>この度の消費税法等の改正に伴い、平成26年(2014年)4月1日以降のサービスのご利用料金に関しては、新しい税率に基づいたものへと変更いたします。</p>
               <p class="border border_blue">
                    ※このページでは下記ニュースに付随する補足情報を掲載しています。<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=1811" target="_blank">消費税法の改正に関するご請求金額変更のお知らせ(2014/02/21) </a></span><br><br>

                    ※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/" target="_blank">公式サイト</a>をご参照ください。
                </p>
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4>適用される税率について</h4>
                <div class="inner">
                
                	<p>消費税法等の改正を受け、下記の方針に沿って対応いたします。</p>
                    
                    <h5>サーバーの場合</h5>
                    <div class="inner">
                    
                    	<h6>[新規ご契約]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014年3月31日まで</strong>のお申し込みには旧税率<strong class="old_tax">5%</strong>を適用する</li>
                                <li><strong class="new_tax">2014年4月1日以降</strong>のお申し込みには新税率<strong class="new_tax">8%</strong>を適用する</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_server.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[契約更新]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014年3月31日まで</strong>の料金お支払い手続きには旧税率<strong class="old_tax">5%</strong>を適用する</li>
                                <li><strong class="new_tax">2014年4月1日以降</strong>の料金お支払い手続きには新税率<strong class="new_tax">8%</strong>を適用する</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_server.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">※料金のお支払い手続きによって、お支払い伝票が発行される場合は、そのタイミングを基準に適用税率を決定します。<br />
                                   2014年3月末までに発行された請求書・お支払い伝票等は、実際に料金をお支払いいただくのが2014年4月以降であっても、5％を適用します。<br />また、クレジットカード自動引落しも同様に引落しが実施されたタイミングを基準とします。</li>
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
                                <li><strong class="old_tax">2014年3月31日まで</strong>のお申し込みには旧税率<strong class="old_tax">5%</strong>を適用する</li>
                                <li><strong class="new_tax">2014年4月1日以降</strong>のお申し込みには新税率<strong class="new_tax">8%</strong>を適用する</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_other.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[契約更新]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014年3月31日まで</strong>の料金お支払い手続きには旧税率<strong class="old_tax">5%</strong>を適用する</li>
                                <li><strong class="new_tax">2014年4月1日以降</strong>の料金お支払い手続きには新税率<strong class="new_tax">8%</strong>を適用する</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_other.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">※料金のお支払い手続きによって、お支払い伝票が発行される場合は、そのタイミングを基準に適用税率を決定します。<br />
                                   2014年3月末までに発行された請求書・お支払い伝票等は、実際に料金をお支払いいただくのが2014年4月以降であっても、5％を適用します。<br />また、クレジットカード自動引落しも同様に引落しが実施されたタイミングを基準とします。</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
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
            
            
            <div class="section">
               	<h4>ご利用料金の対比表</h4>
                <div class="inner">
                
                	<p>今回の対応に伴い、下記の算出方法に則って、新しい料金を算出しています。</p>
                    
                    <div class="column" style="margin-bottom : 15px ;">
                        <h5>税率<strong>5%</strong>から<strong>8%</strong>への算出方法</h5>
                        <div class="inner">
                            
                            <p style="font-weight : bold ; font-size : 125% ;">(1)&nbsp;<strong class="old_tax">改正前の税込料金</strong> ÷ 1.05 = <strong class="no_tax">税抜料金</strong><span class="assist" style="font-size : 80% ;">(小数点切り上げ)</span></p>
                            
                            <p style="font-weight : bold ; font-size : 125% ;">(2)&nbsp;<strong class="no_tax">税抜料金</strong> × 1.08 = <strong class="new_tax">改正後の税込料金</strong><span class="assist" style="font-size : 80% ;">(小数点切り捨て)</span></p>
                            
                            <p class="assist indent_ajust">※サーバー等は「月額料金」、ドメインやSSL証明書等は「年額」といった最小単価で算出を行っています。<br />
                            契約期間ごとのご利用料金は、改正後の税込料金に期間をかけたものとなります。</p>
                        </div>
                        <!-- /inner -->
                    </div>
                    <!-- /column -->
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■X10プラン</caption>
                            <colgroup>
                            	<col class="item_info" />
                            </colgroup>
                            <colgroup class="old_info">
                            	<col class="old_month" />
                                <col class="old_sum" />
                            </colgroup>
                            <colgroup class="new_info">
                            	<col class="new_month" />
                                <col class="new_sum" />
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" rowspan="2">項目・期間</th>
                                    <th scope="col" colspan="2" class="old_item">改正前</th>
                                    <th scope="col" colspan="2" class="new_item">改正後</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="old_item">合計<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">合計<span class="assist">(税込)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">初期設定費用</th>
                                    <td colspan="2" class="old_item">3,150円</td>
                                    <td colspan="2" class="new_item">3,240円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3ヶ月</th>
                                    <td class="old_item">1,260円</td>
                                    <td class="old_item">3,780円</td>
                                    <td class="new_item">1,296円</td>
                                    <td class="new_item">3,888円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6ヶ月</th>
                                    <td class="old_item">1,155円</td>
                                    <td class="old_item">6,930円</td>
                                    <td class="new_item">1,188円</td>
                                    <td class="new_item">7,128円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12ヶ月</th>
                                    <td class="old_item">1,050円</td>
                                    <td class="old_item">12,600円</td>
                                    <td class="new_item">1,080円</td>
                                    <td class="new_item">12,960円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">クレジットカード<br />自動引落し</th>
                                    <td colspan="2" class="old_item">1,050円</td>
                                    <td colspan="2" class="new_item">1,080円</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■X20プラン</caption>
                            <colgroup>
                            	<col class="item_info" />
                            </colgroup>
                            <colgroup class="old_info">
                            	<col class="old_month" />
                                <col class="old_sum" />
                            </colgroup>
                            <colgroup class="new_info">
                            	<col class="new_month" />
                                <col class="new_sum" />
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" rowspan="2">項目・期間</th>
                                    <th scope="col" colspan="2" class="old_item">改正前</th>
                                    <th scope="col" colspan="2" class="new_item">改正後</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="old_item">合計<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">合計<span class="assist">(税込)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">初期設定費用</th>
                                    <td colspan="2" class="old_item">3,150円</td>
                                    <td colspan="2" class="new_item">3,240円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3ヶ月</th>
                                    <td class="old_item">2,520円</td>
                                    <td class="old_item">7,560円</td>
                                    <td class="new_item">2,592円</td>
                                    <td class="new_item">7,776円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6ヶ月</th>
                                    <td class="old_item">2,310円</td>
                                    <td class="old_item">13,860円</td>
                                    <td class="new_item">2,376円</td>
                                    <td class="new_item">14,256円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12ヶ月</th>
                                    <td class="old_item">2,100円</td>
                                    <td class="old_item">25,200円</td>
                                    <td class="new_item">2,160円</td>
                                    <td class="new_item">25,920円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">クレジットカード<br />自動引落し</th>
                                    <td colspan="2" class="old_item">2,100円</td>
                                    <td colspan="2" class="new_item">2,160円</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■X30プラン</caption>
                            <colgroup>
                            	<col class="item_info" />
                            </colgroup>
                            <colgroup class="old_info">
                            	<col class="old_month" />
                                <col class="old_sum" />
                            </colgroup>
                            <colgroup class="new_info">
                            	<col class="new_month" />
                                <col class="new_sum" />
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" rowspan="2">項目・期間</th>
                                    <th scope="col" colspan="2" class="old_item">改正前</th>
                                    <th scope="col" colspan="2" class="new_item">改正後</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="old_item">合計<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">月額<span class="assist">(税込)</span></th>
                                    <th scope="col" class="new_item">合計<span class="assist">(税込)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">初期設定費用</th>
                                    <td colspan="2" class="old_item">3,150円</td>
                                    <td colspan="2" class="new_item">3,240円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3ヶ月</th>
                                    <td class="old_item">5,040円</td>
                                    <td class="old_item">15,120円</td>
                                    <td class="new_item">5,184円</td>
                                    <td class="new_item">15,552円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6ヶ月</th>
                                    <td class="old_item">4,620円</td>
                                    <td class="old_item">27,720円</td>
                                    <td class="new_item">4,752円</td>
                                    <td class="new_item">28,512円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12ヶ月</th>
                                    <td class="old_item">4,200円</td>
                                    <td class="old_item">50,400円</td>
                                    <td class="new_item">4,320円</td>
                                    <td class="new_item">51,840円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">クレジットカード<br />自動引落し</th>
                                    <td colspan="2" class="old_item">4,200円</td>
                                    <td colspan="2" class="new_item">4,320円</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■ドメイン</caption>
                            <colgroup class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col">ドメイン</th>
                                    <th scope="col" class="old_item">改正前年額(税込)</th>
                                    <th scope="col" class="new_item">改正後年額(税込)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">.com</th>
                                    <td class="old_item" rowspan="5">1,575円</td>
                                    <td class="new_item" rowspan="5">1,620円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.net</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.org</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.biz</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.info</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.jp</th>
                                    <td class="old_item" rowspan="2">5,250円</td>
                                    <td class="new_item" rowspan="2">5,400円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">都道府県.jp</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.ne.jp</th>
                                    <td class="old_item" rowspan="4">7,350円</td>
                                    <td class="new_item" rowspan="4">7,560円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.gr.jp</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.co.jp</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.or.jp</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.cc</th>
                                    <td class="old_item" rowspan="4">5,250円</td>
                                    <td class="new_item" rowspan="4">5,400円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.in</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.bz</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.ws</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.tv</th>
                                    <td class="old_item">7,350円</td>
                                    <td class="new_item">7,560円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.asia</th>
                                    <td class="old_item" rowspan="2">5,250円</td>
                                    <td class="new_item" rowspan="2">5,400円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.mobi</th>
                                </tr>
                            </tbody>
                        </table>                        
                        <p class="assist indent_ajust">(※)クレジットカードの自動引落しの場合の引き落し額も、上記表と同様です。</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■SSL証明書(ラピッドSSL)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">期間など</th>
                                    <th scope="col" class="old_item">改正前(税込)</th>
                                    <th scope="col" class="new_item">改正後(税込)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">初期設定費用</th>
                                    <td class="old_item">10,500円</td>
                                    <td class="new_item">10,800円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">更新費用</th>
                                    <td class="old_item">0円</td>
                                    <td class="new_item">0円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">ご利用料金(年額)</th>
                                    <td class="old_item">10,500円</td>
                                    <td class="new_item">10,800円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1年</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">21,000円</td>
                                    <td class="new_item">21,600円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">10,500円</td>
                                    <td class="new_item">10,800円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2年(※1)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">28,350円</td>
                                    <td class="new_item">29,160円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">18,900円</td>
                                    <td class="new_item">19,440円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3年(※1)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">33,600円</td>
                                    <td class="new_item">34,560円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">25,200円</td>
                                    <td class="new_item">25,920円</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(※1)2年で10％割引、3年で20％割引の複数年割引を適用済みです。</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■SSL証明書(クイックSSLプレミアム)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">期間など</th>
                                    <th scope="col" class="old_item">改正前(税込)</th>
                                    <th scope="col" class="new_item">改正後(税込)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">初期設定費用</th>
                                    <td class="old_item">15,250円</td>
                                    <td class="new_item">(※1)15,660円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">更新費用</th>
                                    <td class="old_item">0円</td>
                                    <td class="new_item">0円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">ご利用料金(年額)</th>
                                    <td class="old_item">21,000円</td>
                                    <td class="new_item">21,600円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1年</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">36,250円</td>
                                    <td class="new_item">37,260円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">21,000円</td>
                                    <td class="new_item">21,600円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2年(※2)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">51,525円</td>
                                    <td class="new_item">52,974円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">37,800円</td>
                                    <td class="new_item">38,880円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3年(※2)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">62,600円</td>
                                    <td class="new_item">64,368円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">50,400円</td>
                                    <td class="new_item">51,840円</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(※1)税抜料金について値下げ調整を実施しています。<br />
                        ・初期設定費用：14,524円(税抜) → 14,500円(税抜)</p>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ;">(※2)2年で10％割引、3年で20％割引の複数年割引を適用済みです。</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>■SSL証明書(クイック認証SSL)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">期間など</th>
                                    <th scope="col" class="old_item">改正前(税込)</th>
                                    <th scope="col" class="new_item">改正後(税込)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">初期設定費用</th>
                                    <td class="old_item">10,500円</td>
                                    <td class="new_item">10,800円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">更新費用</th>
                                    <td class="old_item">0円</td>
                                    <td class="new_item">0円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">ご利用料金(年額)</th>
                                    <td class="old_item">21,000円</td>
                                    <td class="new_item">21,600円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1年</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">31,500円</td>
                                    <td class="new_item">32,400円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">21,000円</td>
                                    <td class="new_item">21,600円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2年(※1)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">47,250円</td>
                                    <td class="new_item">48,600円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">37,800円</td>
                                    <td class="new_item">38,880円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3年(※1)</th>
                                    <th scope="row" class="sub_th">新規</th>
                                    <td class="old_item">58,800円</td>
                                    <td class="new_item">60,480円</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">更新</th>
                                    <td class="old_item">50,400円</td>
                                    <td class="new_item">51,840円</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(※1)2年で10％割引、3年で20％割引の複数年割引を適用済みです。</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box" style="margin-bottom : 35px ;">
                    	<table cellspacing="0">
                        	<caption>■バックアップデータの提供(自動バックアップ)</caption>
                            <colgroup class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col">項目</th>
                                    <th scope="col" class="old_item">改正前(税込)</th>
                                    <th scope="col" class="new_item">改正後(税込)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">サーバー領域データ</th>
                                    <td class="old_item">10,500円</td>
                                    <td class="new_item">10,800円</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">MySQLデータベース</th>
                                    <td class="old_item">5,250円</td>
                                    <td class="new_item">5,400円</td>
                                </tr>                              
                            </tbody>
                        </table>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <p>今後、当サービスに関するウェブサイトや広告物等の料金表示につきましては、順次、税抜表示に統一してまいりますので、予めご了承願います。</p>

            </div>
            <!-- /section -->
            
            <p class="border_section">その他、ご不明な点等がございましたら、当サービスの<a href="<?php print $SITE_URL; ?>support/" rel="nofollow">サポート</a>までお問い合わせください。
        
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
