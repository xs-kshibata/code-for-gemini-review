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
<meta name="keywords" content="��󥿥륵���С�,��®,�ⵡǽ,�������">
<meta name="viewport" content="initial-scale=1.0">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="�����ȥޥå�">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<title>�ȼ�SSL�Υ����ӥ���ĥ�Ȳ��� �� <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��Ǥ�2015ǯ9��16����SNI SSL�ؤ��б��俷�֥��ɡʥ��饦��SSL�����饦�ɥ����奢 ���ԡ���ǧ��SSL�ˤ��ɲá���갷�����SSL�β��ʲ���ʤɡ��ȼ�SSL�Υ����ӥ���ĥ�Ȳ���򤤤����ޤ���">

<base href="<?php print $SITE_URL; ?>">

<style type="text/css">
/* ���� */
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
	font-family:Verdana,"�ᥤ�ꥪ",Meiryo,"�ͣ� �Х����å�","MS PGothic","Hiragino Kaku Gothic Pro","�ҥ饮�γѥ� Pro W3",Arial,sans-serif; 
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


/* ���� */

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


/* �ڡ��������ȥ� */
.page-ttl {
	display : block ;
	padding : 20px ;
	border-bottom : 1px solid #b3b3b3 ;
	font-size : 200% ;
	color : #1b5fa6 ;
}

/* �ڡ�����Ƭ��ʬ */
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
		<h1><a href="index.php"><img src="img/news/service_logo.png" alt="���å��������С�" /></a></h1>
    </div>
    <!-- /header -->
    
    <div id="main">
    	
        <h2 class="page-ttl">�ȼ�SSL�Υ����ӥ���ĥ�Ȳ���<span class="foz10">(2015/09/11)</span></h2>
        <div class="inner">
        
        	<div class="section">
                <p>2015ǯ9��16��(��)�ˡ��ȼ�SSL�Υ����ӥ���ĥ��ȼ�������ηϤ��ѹ�������Ӽ�갷���֥��ɤ��ɲäȲ��ʲ����Ԥ��ޤ���<br />
                ����Υ����ӥ���ĥ�Ǥϡ�IP���ɥ쥹�Ȥ�ɳ�Ť������פʡ�SNI SSL(�͡���١���)�ץץ����ɲä������ޤ���</p>
                
                <p>�ޤ���SSL�������Τ⽾����⤪�꺢�ʲ��ʤ˲��ꤷ�Ƥ���ޤ���<br />
                �ä��ơ�SNI SSL(�͡���١���)�ץץ������򤹤뤳�Ȥǡ�����˰²��Ǥ����Ѥ����������Ȥ���ǽ�Ȥʤ�ޤ���<br />
                �ܺ٤ϰʲ���ꤴ��ǧ����������</p>
                
                <ul class="index">
                	<li><a href="revice_ssl.php#r01">SNI SSL(�͡���١���)�ˤĤ���</a></li>
                    <li><a href="revice_ssl.php#r02">��¸�֥��ɤ������ηϤ��ѹ��Ȳ��ʲ���ʰ������Ͳ�����</a></li>
                    <li><a href="revice_ssl.php#r03">���֥��ɤˤĤ���</a></li>
                    <li><a href="revice_ssl.php#r04">SSL��Ӱ���</a></li>
                </ul>
                
            <p class="border border_blue">
                �����Υڡ����Ǥϲ����˥塼�����տ魯����­�����Ǻܤ��Ƥ��ޤ���<br>
                 <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=2301" target="_blank">�ȼ�SSL��ǯ��1,000�ߤ��餴���Ѳ�ǽ�ˡ���SNI SSL(�͡���١���)�פ�Ƴ����ȼ��SSL���ʲ���ʰ������Ͳ����ˤȿ��֥����󶡤Τ��Τ餻(2015/09/11) </a></span><br><br>

                ���ܥڡ����ηǺ����Ƥϡ���������Υ����ӥ����ƤȰۤʤ��ǽ��������ޤ����ǿ��ξ����<a href="https://www.xserver.ne.jp/" target="_blank">����������</a>�򤴻��Ȥ���������
            </p>
                
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4><a name="r01" id="r01">SNI SSL(�͡���١���)�ˤĤ���</a></h4>
                <div class="inner">
                
                	<p>��SNI SSL(�͡���١���)�פȤϡ�SNI(Server Name Indication)�����Ѥ���SSL�Τ��ȤǤ���<br />
                    �����IP���ɥ쥹��ɬ�פȤ���SSL������ȤϰۤʤꡢSSL���Ѥ�IP���ɥ쥹�����פȤʤ뤿�ᡢSSL������Ƴ���ˤ����륳���Ȥ������˺︺���뤳�Ȥ���ǽ�Ǥ���</p>
                    
                    <p>���ߤǤ����Ѥ���Ƥ���ۤȤ�ɤ�Web�֥饦������SNI SSL(�͡���١���)�פ��б����Ƥ������Ȥ��顢���ܤ����ޤäƤ��ޤ���</p>
                        
                    <h5>��SNI SSL(�͡���١���)�פȤ�</h5>
                    <div class="inner">
                    	<p>
                        ����ޤǤ��ȼ�SSL�ϡ�IP���ɥ쥹��ɳ�դ���IP���ɥ쥹�١����פ��󶡤��Ƥ���ޤ�����<br />
                        �����٤��ȼ�SSL�����ӥ���ĥ�ˤ����Ƥϡ���IP���ɥ쥹�١����פ˲ä����ۥ���̾��ɳ�դ���SNI SSL(�͡���١���)�פˤ���ȼ�SSL���󶡤������ޤ���
                        </p>
                        
                        <div class="ssl-type clearfix">
                        	<div class="sni-base">
                            	<h6>SNI SSL(�͡���١���)</h6>
                                <p>
                                SSL������ϥۥ���̾��ɳ�դ���<br />1�Ĥ�IP���ɥ쥹��ʣ���Υɥᥤ��������ǽ
                                </p>
                                <img src="img/news/sni_img.png" alt="" />
                            </div>
                            <!-- /.sni-base -->
                            
                        	<div class="ip-base">
                            	<h6>IP���ɥ쥹�١���</h6>
                                <p>
                                SSL�������IP���ɥ쥹��ɳ�Ť���<br />1�Ĥ�IP���ɥ쥹��1�ĤΥɥᥤ��̾�������ǽ
                                </p>
                                <img src="img/news/ip_img.png" alt="" />
                            </div>
                            <!-- /.ip-base -->
                            
                        </div>
                        <!-- /.ssl-type -->
                    
                    </div>
                    <!-- /inner -->
                    
                    <h5>��SNI SSL(�͡���١���)�פȡ�IP���ɥ쥹�١����פȤΰ㤤�ˤĤ���</h5>
                    <div class="inner">
                    	<p>
                        �����ӥ��γ�ĥ�ˤ�ꡢ�����̤��IP���ɥ쥹��ɳ�դ���IP���ɥ쥹�١����פ����ۥ���̾��ɳ�դ���SNI SSL(�͡���١���)�פΤ����줫�Υץ������򤷤����Ѥ��뤳�Ȥ���ǽ�Ȥʤ�ޤ���
                        </p>
                        <p>��SNI SSL(�͡���١���)�פ�SSL���Ѥ�IP���ɥ쥹�����פǡ�����ʬ���²��Ǥ����Ѥ��������ޤ���<br />
                        �ޤ�����SNI SSL(�͡���١���)�פϡ�SSL������٥�����ˤ��ȯ�Ը夫�饤�󥹥ȡ��봰λ(�����ѳ���)�ޤ� ������ �����ѥ��ԡ��ǥ����Ǥ���
                        </p>
                    
                    	<table>
                    	    <tbody>
                    	        <tr>
                    	            <th class="d_bg w16">����̾</th>
                                    <th class="sni_bg">SNI SSL(�͡���١���) <span class="foz10">��1</span></th>
                    	            <th class="ip_bg">IP���ɥ쥹�١���</th>
                    	        </tr>
                                <tr>
                    	            <th>�����������</th>
                                    <td>0��</td>
                    	            <td>8,000��(��ȴ)</td>
                    	        </tr>
                    	        <tr>
                    	            <th>����IP���ɥ쥹������</th>
                                    <td>����</td>
                    	            <td>6,000��(��ȴ)</td>
                    	        </tr>
                                <tr>
                    	            <th>SSL��������</th>
                    	            <td>1,000��(��ȴ)/ǯ��</td>
                    	            <td>1,000��(��ȴ)/ǯ��</td>
                    	        </tr>
                    	        <tr>
                    	            <th>�б��֥饦��</th>
                                    <td><img src="img/common/status_icon_circle.png" alt="" /><br />�����θŤ��֥饦�������б�</td>
                    	            <td><img src="img/common/status_icon_circle_double.png" alt="" /><br />��������(�ե������㡼�ե���)�ʤ�<br />�������֥饦�����б�</td>
                    	        </tr>
                                <tr>
                    	            <th>�����ѳ���</th>
                                    <td>ȯ�Ԥ�������� <span class="foz10">��2</span></td>
                    	            <td>ȯ�Ԥ���72���ְ���</td>
                    	        </tr>
                    	    </tbody>
                    	</table>
                        <ul class="note">
                            <li class="indent-adjust2">(��1) �����Х륵����֥����å�ǧ��SSL�פˤ����Ƥϡ�SNI SSL(�͡���١���)�פ��󶡤��Ƥ���ޤ���</li>
                            <li class="indent-adjust2 mb20">(��2) ����Ʊ��Υ����͡���ǡ�IP���ɥ쥹�١����פ����Ѥξ��ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</li>
                            
                            <li class="indent-adjust">�� https�ǤΤ����Ѳ�ǽ�Ǥ���SMTP over SSL �� POP over SSL �ʤɤΥ᡼�뵡ǽ�ˤĤ��ƤϤ����Ѥˤʤ�ޤ���</li>
                            <li class="indent-adjust">�� ��SNI SSL(�͡���١���)�פϰ����θŤ�Web�֥饦�������ü��(���ޡ��ȥե��󡦥ե������㡼�ե���)���б����Ƥ���ޤ��󡣤��������Web�֥饦���Ķ����б�������ϡ���IP���ɥ쥹�١����פ����򤯤�������</li>
                            <li class="indent-adjust">�� ��IP���ɥ쥹�١����פȡ�SNI SSL(�͡���١���)�פϡ����٤ƤΥ����С��ץ��(X10��X20��X30)�Ǥ����Ѳ�ǽ�Ǥ���</li>
                            <li class="indent-adjust">�� Ʊ��Υɥᥤ��(�����͡���)�ξ�硢IP���ɥ쥹�١�����SNI SSL(�͡���١���)��ʻ�ѤϤǤ��ޤ���</li>
                            <li class="indent-adjust">�� ����ɥᥤ��(xsrv.jp)�Ǥ����ѤϤǤ��ޤ���</li>
                        </ul>
                        <!-- /.note -->
                        
                        <div class="sni-column">
                            <h5>SNI SSL(�͡���١���)���б�����Web�֥饦���ˤĤ���</h5>
                            <div class="inner">
                                <p>
                                SNI SSL(�͡���١���)�μ��פ��б��֥饦���ϰʲ��Ǥ���<br /><br />

                                Internet Explorer7����Windows Vista)�ʹߡ���WindowsXP�����б��Ǥ���<br />
                                Mozilla Firefox 2.0 �ʹ�<br />
                                Google Chrome 6 �ʹ�<br />
                                Safari 3.0 �ʹ�<br />
                                iOS 4�ʹߤ�MobileSafari<br />
                                Android 3�ʹߤ�Android�ǥե���ȥ֥饦��<br />
                                Windows Phone 7�ʹ�<br /><br />
                                
                                ���嵭���������ӥ����ȼ���Ĵ��������ΤǤ��ꡢ�󶡸��ξ���Ȱۤʤ��ǽ��������ޤ����ܺ٤��󶡸��ˤ���ǧ���������� 
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
            	<h4><a name="r02" id="r02">��¸�֥��ɤˤ����������ηϤ��ѹ��Ȳ��ʲ���ʰ������Ͳ�����</a></h4>
                <div class="inner">
                	<p>2015ǯ9��16��(��)��ꡢRapidSSL�֥�ԥå�SSL�ס������ȥ饹�ȡ֥����å�SSL�ץ�ߥ���ס������Х륵����֥����å�ǧ��SSL�פˤĤ��ơ������ηϤ��ѹ��Ȳ��ʲ����»ܤ������ޤ���<br />
                    ������ѹ��ˤ�ꡢ����ޤǤ��²����ȼ�SSL����������Ѥ��뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                    
                    <div class="revice-price_content">
                        <h6 class="rp_ttl">[�����ηϤˤĤ���]</h6>
                        <div class="inner2">
                            <p>����ޤǤ�SSL����������Ѥˤ�����IP���ɥ쥹�����Ѥ�ޤ�Ƥ���ޤ�����������Υ����ӥ���ĥ��ȼ���������ηϤ���SSL����������ȡ�����IP���ɥ쥹����������ʬ����ޤ���<br />
                            �ʤ���SSL�����񥿥��פȤ��ơ�SNI SSL(�͡��ॿ����)�פ����򤵤줿��������IP���ɥ쥹�����Ѥ��ޤ���Τǡ�������IP���ɥ쥹����������0�ߤȤʤ�ޤ���</p>
                            <p class="text-center mtb35"><img src="img/news/revice_price_img.png" alt=""></p>

                        </div>
                        <!-- /.inner2 -->
                        
                        <h6 class="rp_ttl">[���ʲ���ˤĤ���]</h6>
                        <div class="inner2">
                        <p>
                        �������Ȳ����β��ʤϰʲ��Ǥ���
                        </p>
                        <table>
                        	<caption class="sni-caption">SNI SSL(�͡���١���)</caption>
                            <tbody>
                            	<tr>
                                	<th class="base-head" colspan="2" style="width: 35%;">����</th>
                                    <th class="pb">������</th>
                                    <th class="pa">�����</th>
                                </tr>
                                <tr>
                                	<th colspan="2">�����������</th>
                                    <td>��</td>
                                    <td>0��</td>
                                </tr>

                                <tr>
                                	<th rowspan="5" class="bdwt">SSL��������</th>
                                    <th class="bdwt">��ԥå�SSL</th>
                                    <td class="bdwt">��</td>
                                    <td class="bdwt">1,500��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>�����å�SSL�ץ�ߥ���</th>
                                    <td>��</td>
                                    <td>14,000��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>�����å�ǧ��SSL</th>
                                    <td>��</td>
                                    <td>��</td>
                                </tr>
                                <tr>
                                    <th>���饦��SSL</th>
                                    <td>��</td>
                                    <td>1,000��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>���饦�ɥ����奢<br />�ɥᥤ��ǧ��SSL</th>
                                    <td>��</td>
                                    <td>9,000��/ǯ</td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <table>
                        	<caption class="ip-caption">IP���ɥ쥹�١���</caption>
                            <tbody>
                            	<tr>
                                	<th class="base-head" colspan="2" style="width: 35%;">����</th>
                                    <th class="pb">������</th>
                                    <th class="pa">�����</th>
                                </tr>
                                <tr>
                                	<th colspan="2">�����������</th>
                                    <td>10,000��<br />(�����å�SSL�ץ�ߥ��� 14,500��)</td>
                                    <td><strong>8,000��</strong></td>
                                </tr>
                                
                                <tr>
                                	<th colspan="2" style="border-top:3px double #B3B3B3;">����IP���ɥ쥹������</th>
                                    <td style="border-top:3px double #B3B3B3;">6,000�� <span style="font-size: 80%">��1</span></td>
                                    <td style="border-top:3px double #B3B3B3;">6,000��</td>
                                </tr>
                                
                                <tr>
                                	<th rowspan="5" style="border-top:3px double #B3B3B3;">SSL��������</th>
                                    <th style="border-top:3px double #B3B3B3;">��ԥå�SSL</th>
                                    <td style="border-top:3px double #B3B3B3;">4,000��/ǯ <span style="font-size: 80%">��1</span></td>
                                    <td style="border-top:3px double #B3B3B3;"><strong>1,500��/ǯ</strong></td>
                                </tr>
                                <tr>
                                    <th>�����å�SSL�ץ�ߥ���</th>
                                    <td>14,000��/ǯ <span style="font-size: 80%">��1</span></td>
                                    <td>14,000��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>�����å�ǧ��SSL</th>
                                    <td>14,000��/ǯ <span style="font-size: 80%">��1</span></td>
                                    <td>14,000��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>���饦��SSL</th>
                                    <td>��</td>
                                    <td>1,000��/ǯ</td>
                                </tr>
                                <tr>
                                    <th>���饦�ɥ����奢<br />�ɥᥤ��ǧ��SSL</th>
                                    <td>��</td>
                                    <td>9,000��/ǯ</td>
                                </tr>

                            </tbody>
                        </table>
                        <ul class="note">
                            <li class="indent-adjust2 mb20">(��1)�������θ��Բ���(2015/09/16 ����ޤǤβ���)���������IP���ɥ쥹�������פ򺹤���������ۤ򵭺ܤ��Ƥ��ޤ���</li>
                            
                            <li class="indent-adjust">�������Х륵���� �����å�ǧ��SSL�ˤ����Ƥϡ���SNI SSL(�͡���١���)�ץץ������Ѥ��������ޤ��� </li>
                            <li class="indent-adjust">����SNI SSL(�͡���١���)�ץץ���IP���ɥ쥹�����פǤ��Τǡ�������IP���ɥ쥹�������פ�ȯ���������ޤ���</li>
                            <li class="indent-adjust">������ɽ���Ϥ��٤���ȴ�����ʤǤ���</li>
                        </ul>
                        </div>
                        
                        <h6 class="rp_ttl">[����ʧ������ˤĤ���]</h6>
                        <div class="inner2">
                                            
                        <table class="foz10">
                            <caption class="sni-caption">SNI SSL(�͡���١���)</caption>
                            <tbody>
                        	<tr>
                            	<th class="base-head">����</th>
                                <th class="pb bdwr" colspan="5">������</th>
                                <th class="pa" colspan="5">�����</th>
                            </tr>
                        	<tr>
                            	<th class="bdwb" rowspan="2">�����ӥ�̾</th>
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">���饦��SSL</td>
                                <td class="bdwr sc-txt bdb0 pb0 fowb">���饦�ɥ����奢</td>
                                
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">���饦��SSL</td>
                                <td class="sc-txt bdb0 pb0 fowb">���饦�ɥ����奢</td>
                            </tr>
                            <tr>
                                <td class="bdwb">��ԥå�SSL</td>
                                <td class="bdwb">�����å�SSL<br />�ץ�ߥ���</td>
                                <td class="bdwb">�����å�ǧ��SSL</td>
                                <td class="bdwb">���饦��SSL</td>
                                <td class="bdwr bdwb">�ɥᥤ��ǧ��SSL</td>
                                
                                <td class="bdwb">��ԥå�SSL</td>
                                <td class="bdwb">�����å�SSL<br />�ץ�ߥ���</td>
                                <td class="bdwb">�����å�ǧ��SSL</td>
                                <td class="bdwb">���饦��SSL</td>
                                <td class="bdwb">�ɥᥤ��ǧ��SSL</td>
                            </tr>
                                                        
                            <tr>
                                <th>1ǯ</th>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td>1,500��</td>
                                <td>14,000��</td>
                                <td>��</td>
                                <td>1,000��</td>
                                <td>9,000��</td>
                            </tr>
                            
                            <tr>
                                <th>2ǯ</th>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td>2,700��</td>
                                <td>26,000��</td>
                                <td>��</td>
                                <td>1,800��</td>
                                <td>17,000��</td>
                            </tr>
                            
                            <tr>
                                <th>3ǯ</th>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td>3,200��</td>
                                <td>36,000��</td>
                                <td>��</td>
                                <td>2,500��</td>
                                <td>24,000��</td>
                            </tr>
                            </tbody>
                        </table>
                        
                        <table class="mb20 foz10">
                    	<caption class="ip-caption">IP���ɥ쥹�١���</caption>
                            <tbody>
                        	<tr>
                            	<th class="base-head">����</th>
                                <th class="pb bdwr" colspan="5">������</th>
                                <th class="pa" colspan="5">�����</th>
                            </tr>
                        	<tr>
                            	<th class="bdwb" rowspan="2">�����ӥ�̾</th>
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">���饦��SSL</td>
                                <td class="bdwr sc-txt bdb0 pb0 fowb">���饦�ɥ����奢</td>
                                
                                <td class="rs-txt bdb0 pb0 fowb">RapidSSL</td>
                                <td class="gt-txt bdb0 pb0 fowb">GeoTrust</td>
                                <td class="gs-txt bdb0 pb0 fowb">Grobalsign</td>
                                <td class="cs-txt bdb0 pb0 fowb">���饦��SSL</td>
                                <td class="sc-txt bdb0 pb0 fowb">���饦�ɥ����奢</td>
                            </tr>
                            <tr>
                                <td class="bdwb">��ԥå�SSL</td>
                                <td class="bdwb">�����å�SSL<br />�ץ�ߥ���</td>
                                <td class="bdwb">�����å�ǧ��SSL</td>
                                <td class="bdwb">���饦��SSL</td>
                                <td class="bdwr bdwb">�ɥᥤ��ǧ��SSL</td>
                                
                                <td class="bdwb">��ԥå�SSL</td>
                                <td class="bdwb">�����å�SSL<br />�ץ�ߥ���</td>
                                <td class="bdwb">�����å�ǧ��SSL</td>
                                <td class="bdwb">���饦��SSL</td>
                                <td class="bdwb">�ɥᥤ��ǧ��SSL</td>
                            </tr>
                                                        
                            <tr>
                                <th>1ǯ</th>
                                <td>20,000��</td>
                                <td>34,500��</td>
                                <td>30,000��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td><strong>15,500��<br /><span class="foz10">(-4,500��)</span></strong></td>
                                <td><strong>28,000��<br /><span class="foz10">(-6,500��)</span></strong></td>
                                <td><strong>28,000��<br /><span class="foz10">(-2,000��)</span></strong></td>
                                <td>15,000��</td>
                                <td>23,000��</td>
                            </tr>
                            
                            <tr>
                                <th>2ǯ</th>
                                <td>27,000��</td>
                                <td>49,050��</td>
                                <td>45,000��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td><strong>20,700��<br /><span class="foz10">(-6,300��)</span></strong></td>
                                <td><strong>44,000��<br /><span class="foz10">(-5,050��)</span></strong></td>
                                <td><strong>44,000��<br /><span class="foz10">(-1,000��)</span></strong></td>
                                <td>19,800��</td>
                                <td>35,000��</td>
                            </tr>
                            
                            <tr>
                                <th>3ǯ</th>
                                <td>32,000��</td>
                                <td>59,600��</td>
                                <td>56,000��</td>
                                <td>��</td>
                                <td class="bdwr">��</td>
                                
                                <td><strong>23,200��<br /><span class="foz10">(-8,800��)</span></strong></td>
                                <td><strong>56,000��<br /><span class="foz10">(-3,600��)</span></strong></td>
                                <td>56,000��</td>
                                <td>22,500��</td>
                                <td>44,000��</td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="note">
                            <li class="indent-adjust">������ɽ���Ϥ��٤���ȴ�����ʤǤ���</li>
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
            	<h4><a name="r03" id="r03">���֥��ɤˤĤ���</a></h4>
                <div class="inner">
                	<p>2015ǯ9��16��(��)��ꡢ���饦�ɥ����奢������Ҥ��󶡤��뿷�֥��ɡ֥��饦��SSL�פȡ֥��饦�ɥ����奢�פ��󶡤򳫻Ϥ������ޤ���<br />
                    ������Υ֥��ɤ⡢����������No.1��Comodo�Ҥ�ǧ�ڶɤ˺��Ѥ������������ι⤤SSL������Ǥ���</p>
                    <div class="nb clearfix">
                        <div class="c">
                        	<h5 class="c_ttl">�����ȽŻ�����˥�������!<br />�ʰ¤�SSL������</h5>
                            <div class="c_main">
                            	<img src="img/news/core_logo.png" alt="���饦��SSL" />
                                <h6 class="item_ttl">���饦��SSL</h6>
                                
                                <div class="item-price">
                                	<div class="year-c">ǯ��</div><div class="price-c">1,000<span>��(��ȴ)</span></div>
                                </div>
                                <!-- /.price -->
                                
                            </div>
                            <!-- /.coressl-main -->
                            
                            <div class="nb_info">
                            �����ȥѥե����ޥ󥹤ι⤤SSL�����о�����Ǥ����²���SSL�������Ƴ����Ƥ���Ƥ������˥�������Ǥ���
                            </div>
                            
                        </div>
                        <!-- /.coressl -->
                        
                        <div class="s">
                            <h5 class="s_ttl">�����ȥ�����ˤ��б�������<br />����������ɤ�SSL������</h5>
                            <div class="s_main">
                            	<img src="img/news/secure_logo.png" alt="���饦�ɥ����奢" />
                                <h6 class="item_ttl">�ɥᥤ��ǧ��SSL</h6>
                                
                                <div class="item-price">
                                	<div class="year-s">ǯ��</div><div class="price-s">9,000<span>��(��ȴ)</span></div>
                                </div>
                                <!-- /.price -->
                            </div>
                            <!-- /.securecore-main -->
                            <div class="nb_info">
                            �����Ȥΰ������򥢥ԡ���Ǥ��륵���ȥ������б��ξ�����Ǥ��� 
                            </div>
                            
                        </div>
                        <!-- /.securecore -->
                        
                    </div>                    
                    <!-- /.n-brand -->
                    
                    <!--<p class="text-center"><a href=""><img src="img/news/new_brand_btn.png" alt="���֥��ɤξܺ٤Ϥ�����" /></a></p>-->
                    
                    <div class="asset_box">
                        <h6 class="asset_ttl">���֥����󶡸�</h6>
                        <div class="asset_main"><img src="img/news/asset_logo.png" />��<span style="position: relative; top:-10px"><strong>���饦�ɥ����奢�������</strong>(<a href="https://www.cloudsecure.co.jp/" target="_blank">https://www.cloudsecure.co.jp/</a>)</span></div>
                    </div>
                    	
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            <div class="section">
            	<h4><a name="r04" id="r04">SSL��Ӱ���</a></h4>
                <div class="inner">
                	<span class="foz16 fowb">�����Ͱ���</span>
                    <table class="mb5">
                        <tbody>
                            <tr>
                                <th class="menu01">���饦��SSL</th>
                                <th class="menu02">���饦�ɥ����奢</th>
                                <th class="menu03">RapidSSL</th>
                                <th class="menu04">GeoTrust</th>
                                <th class="menu05">Globalsign</th>
                            </tr>

                            <tr>
                                <th colspan="5" class="p5">�б������С��ץ��</th>
                            </tr>
                            <tr>
                                <td colspan="5">�������С��ץ���б�(X10��X20��X30)</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">�����ӥ�̾</th>
                            </tr>
                            <tr>
                                <td>���饦��SSL</td>
                                <td>�ɥᥤ��ǧ��SSL</td>
                                <td>��ԥå�SSL</td>
                                <td>�����å�SSL�ץ�ߥ���</td>
                                <td>�����å�ǧ��SSL</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">������ǧ����ˡ</th>
                            </tr>
                            <tr>
                                <td>�᡼��ǧ��<br>DNSǧ��</td>
                                <td>�᡼��ǧ��<br>DNSǧ��</td>
                                <td>�᡼��ǧ��</td>
                                <td>�᡼��ǧ��</td>
                                <td>��󥯥�å�ǧ��</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">��ȼº߾���</th>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">ȯ��®�١ʺ�û��</th>
                            </tr>
                            <tr>
                                <td>1��2��</td>
                                <td>1��2��</td>
                                <td>1��2��</td>
                                <td>1��2��</td>
                                <td>¨��</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">����ǯ��</th>
                            </tr>
                            <tr>
                                <td>1��3ǯ</td>
                                <td>1��3ǯ</td>
                                <td>1��3ǯ</td>
                                <td>1��3ǯ</td>
                                <td>1��3ǯ</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">�����ȥ�����</th>
                            </tr>
                            <tr>
                                <td>��</td>
                                <td>
                                ��
                                <div class="siteseal-sample">
                                <img src="img/common/securecore_seal_sample.png" alt="���饦�ɥ����奢-�����ȥ����륵��ץ�" />
                                </div>
                                </td>
                                <td>��</td>
                                <td>
                                ��
                                <div class="siteseal-sample">
                                <img src="img/common/geo_seal_sample.png" alt="�����ȥ饹��-�����ȥ����륵��ץ�" />
                                </div>
                                </td>
                                <td>
                                ��
                                <div class="siteseal-sample">
                                <img src="img/common/global_seal_sample.png" alt="�����Х륵����-�����ȥ����륵��ץ�" />
                                </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSL�󶡸�</th>
                            </tr>
                            <tr>
                                <td>���饦�ɥ����奢�������</td>
                                <td>���饦�ɥ����奢�������</td>
                                <td>�����ȥ饹�ȳ������</td>
                                <td>�����ȥ饹�ȳ������</td>
                                <td>GMO<br />�����Х륵����������</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSL�ץ��</th>
                            </tr>
                            <tr>
                                <td colspan="4"><span class="sni-txt">SNI SSL(�͡���١���)</span><br />or<br /><span class="ip-txt">IP���ɥ쥹�١���</span></td>
                                <td><span class="ip-txt">IP���ɥ쥹�١���</span></td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">�б�WEB�֥饦�������ޡ��ȥե���</th>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5 sni_bg">SNI SSL(�͡���١���)</th>
                            </tr>
                            <tr class="type-sni">
                                <td colspan="4">
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                Internet Explorer7(��)��Mozilla Firefox 2.0 �ʹߡ�Google Chrome 6 �ʹߡ�Safari 3.0 �ʹ�<br />
                                ��WindowsXP�����б��Ǥ���
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                Android 3.0�ʹߡ�iOS 4.0�ʹ�
                                </div>
                                </td>
                                
                                <td>
                                <b>��</b>
                                </td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5 ip_bg">IP���ɥ쥹�١���</th>
                            </tr>
                            <tr class="type-ip">
                                <td>
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                IE5.01�ʹ�<br />
                                Firefox 1.0 �ʹ�<br />
                                Google Chrome ���٤�<br />
                                Safari 1.2 �ʹ�
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5�ʹ�<br />
                                iOS 1.0�ʹ�
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                IE5.01�ʹ�<br />
                                Firefox 1.0 �ʹ�<br />
                                Google Chrome ���٤�<br />
                                Safari 1.2 �ʹ�
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5�ʹ�<br />
                                iOS 1.0�ʹ�
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6�ʹ�<br />
                                Firefox 1.0 �ʹ�<br />
                                Google Chrome 1.0 �ʹ�<br />
                                Safari 2.0 �ʹ�
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5�ʹ�<br />
                                iOS iPhone3G�ʹ�
                                </div>
                                </td>
                                
                                <td>
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6�ʹ�<br />
                                Firefox 1.0 �ʹ�<br />
                                Google Chrome 1.0 �ʹ�<br />
                                Safari 2.0 �ʹ�
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                
                                <img src="img/common/status_icon_circle_double.png" alt="" /><br />
                                
                                Android 1.5�ʹ�<br />
                                iOS iPhone3G�ʹ�
                                </div>
                                </td>
                                <td>
                                <h6 class="browse_ttl">[WEB�֥饦��]</h6>
                                
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                
                                IE6�ʹ�<br />
                                Firefox 3.0 �ʹ�<br />
                                Google Chrome ���٤�<br />
                                Safari OS X10.5�ʹ�
                                
                                <div class="smart-phone">
                                <h6 class="browse_ttl">[���ޡ��ȥե���]</h6>
                                <img src="img/common/status_icon_circle.png" alt="" /><br />
                                Android 2.3�ʹ�<br />
                                iOS 4.0�ʹ�
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /.revice-price_table -->
                    <div class="column mb30">
                        <h5>SSL������Υ��󥹥ȡ���˴ؤ���</h5>
                        <div class="inner">
                            <p>
                            SSL������Υ��󥹥ȡ����Ȥϼ�ư�ǹԤ��ޤ���<br />
                            �����ͤˤ����Ƥϡ����������߸��SSL�󶡸�����Υ᡼��Ϣ����Ф���ǧ�ں�ȤΤߤ��ꤤ�������ޤ���
                            </p>
                            
                            <p>���󥹥ȡ����Ȥδ�λ�ޤǤˤ�������֤ϡ����������ߤΥץ��ˤ�äưʲ����̤�ۤʤ�ޤ���</p>
                            
                            <p class="ml15">
                            ��SNI SSL(�͡���١���)�ס����������ְ��� <span class="foz10">(��)</span><br />
                            ��IP���ɥ쥹�١����ס���������72���ְ���
                            </p>
                            <ul class="note">
                                <li class="indent-adjust">������Ʊ��Υ����͡���ǡ�IP���ɥ쥹�١����פ����Ѥξ��ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</li>
                            </ul>
                        </div>
                        <!-- /inner -->
                    </div>
                    <!-- /column -->
                    
                    <span class="foz16 fowb">���������</span>
                    <table class="mb10">
                        <tbody>
                            <tr>
                                <th class="menu01">���饦��SSL</th>
                                <th class="menu02">���饦�ɥ����奢</th>
                                <th class="menu03">RapidSSL</th>
                                <th class="menu04">GeoTrust</th>
                                <th class="menu05">Globalsign</th>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">�����ӥ�̾</th>
                            </tr>
                            <tr>
                                <td>���饦��SSL</td>
                                <td>�ɥᥤ��ǧ��SSL</td>
                                <td>��ԥå�SSL</td>
                                <td>�����å�SSL�ץ�ߥ���</td>
                                <td>�����å�ǧ��SSL</td>
                            </tr>
                            
                            <tr>
                                <th colspan="5" class="p5">SSL�������� <span class="foz10">��1</span></th>
                            </tr>
                            <tr>
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1ǯ</dt>
                                		<dd class="price">1,000��</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2ǯ</dt>
                                		<dd class="price"><strong class="foz14">1,800��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3ǯ</dt>
                                		<dd class="price"><strong class="foz14">2,500��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1ǯ</dt>
                                		<dd class="price">9,000��</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2ǯ</dt>
                                		<dd class="price"><strong class="foz14">17,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3ǯ</dt>
                                		<dd class="price"><strong class="foz14">24,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1ǯ</dt>
                                		<dd class="price">1,500��</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2ǯ</dt>
                                		<dd class="price"><strong class="foz14">2,700��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3ǯ</dt>
                                		<dd class="price"><strong class="foz14">3,200��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1ǯ</dt>
                                		<dd class="price">14,000��</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2ǯ</dt>
                                		<dd class="price"><strong class="foz14">26,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3ǯ</dt>
                                		<dd class="price"><strong class="foz14">36,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                                
                                <td>
                                	<dl class="pc clearfix pt0">
                                		<dt class="year">1ǯ</dt>
                                		<dd class="price">14,000��</dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc clearfix">
                                		<dt class="year">2ǯ</dt>
                                		<dd class="price"><strong class="foz14">26,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                	<dl class="pc end clearfix pb0">
                                		<dt class="year">3ǯ</dt>
                                		<dd class="price"><strong class="foz14">36,000��</strong></dd>
                                	</dl>
                                    <!-- /.pc -->
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /.revice-price_table -->
                    
                    <p class="text-center"><img src="img/news/set_type_icon.png" alt="" /></p>
                    
                    <table>
                        <caption>�����줫��SSL�ץ�������</caption>
                        <tbody>
                            <tr>
                                <th class="d_bg w32" colspan="2">����</th>
                                <th class="sni_bg">SNI SSL(�͡���١���) <span class="foz10">��2</span></th>
                                <th class="ip_bg">IP���ɥ쥹�١���</th>
                            </tr>
                            <tr>
                                <th colspan="2">����������� <span class="foz10">��3</span></th>
                                <td>0��</td>
                                <td>8,000��</td>
                            </tr>
                            <tr>
                                <th rowspan="3">����IP���ɥ쥹<br />������</th>
                                <th class="year">1ǯ</th>
                                <td rowspan="3">0��</td>
                                <td>6,000��</td>
                            </tr>
                            <tr>
                                <th class="year">2ǯ</th>
                                <td>10,000��</td>
                            </tr>
                            <tr>
                                <th class="year">3ǯ</th>
                                <td>12,000��</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="note">
                        <li class="indent-adjust2">(��1) 2ǯ�ʾ�Τ�����ǳ����Ŭ�Ѥ������ޤ���</li>
                        <li class="indent-adjust2">(��2) �����Х륵����֥����å�ǧ��SSL�פˤ����Ƥϡ�SNI SSL(�͡���١���)�פ��󶡤��Ƥ���ޤ���</li>
                        <li class="indent-adjust2 mb20">(��3) SSL������ο����������ȯ���������ѤǤ���</li>
                        
                        <li class="indent-adjust">�� ����ɽ���Ϥ��٤���ȴ�����ʤǤ���</li>
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
