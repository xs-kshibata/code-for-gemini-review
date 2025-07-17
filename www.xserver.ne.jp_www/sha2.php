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

<title>SSL������ν�̾���르�ꥺ���SHA-2�פؤΰܹԤˤĤ��� �� <?php print $SITE_TITLE; ?></title>
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
	font-family:Verdana,"�ᥤ�ꥪ",Meiryo,"�ͣ� �Х����å�","MS PGothic","Hiragino Kaku Gothic Pro","�ҥ饮�γѥ� Pro W3",Arial,sans-serif; 
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
		<h1><a href="index.php"><img src="img/news/service_logo.png" alt="���å��������С�" /></a></h1>
    </div>
    <!-- /header -->
    
    <div id="main">
    	
        <h3>SSL������ν�̾���르�ꥺ���SHA-2�פؤΰܹԤˤĤ���<span class="assist">(2014/12/19)</span></h3>
        <div class="inner">
        
        	<div class="section">
                <p>����ޤǹ����Ѥ����Ƥ�����SHA-1�ץϥå���ؿ��ΰ�����������Ū���㲼���Ƥ��Ƥ��뤳�Ȥ��طʤˡ��������ӥ��ˤ����Ƥ⡢2014ǯ12��4���ʹߤ�ȯ�Ԥ���������򡢤�궯�ǤʰŹ沽����ǽ�ʡ�SHA-2�פ��Ѥ���ȯ�Ԥ���褦���б��������ޤ�����</p>
                <p><strong>2014ǯ12��4��������ꤴ����</strong>���������ӥ���SSL������ϡ����ơ�SHA-1�פξ�����Ǥ��Τǡ��ʹߤη��󹹿������ޤ���ɬ�פ˱����ơ�SHA-2�פξ�����ؤΰܹԤ�ԤäƤ���������</p>
                
                <ul style="margin : 0 0 20px 35px ;">
                	<li><a href="sha2.php#01">SHA-2�ܹԤˤ����äƤ��б�����ջ���</a></li>
                    <li><a href="sha2.php#02">��ȯ�Ԥˤ��SHA-2�ؤΰܹ���ˡ�ˤĤ���</a></li>
                    <li><a href="sha2.php#03">��̾���르�ꥺ��γ�ǧ��ˡ</a></li>
                </ul>
                <p class="border border_blue">
                    �����Υڡ����Ǥϲ����˥塼�����տ魯����­�����Ǻܤ��Ƥ��ޤ���<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=1998" target="_blank">�ȼ�SSL�ˤ�����SSL������ΰŹ沽������SHA-2�פؤ��ѹ��ˤĤ���(2014/12/01) </a></span><br><br>

                    ���ܥڡ����ηǺ����Ƥϡ���������Υ����ӥ����ƤȰۤʤ��ǽ��������ޤ����ǿ��ξ����<a href="https://www.xserver.ne.jp/" target="_blank">����������</a>�򤴻��Ȥ���������
                </p>
                
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4><a name="01" id="01">SHA-2�ܹԤˤ����äƤ��б�����ջ���</a></h4>
                <div class="inner">
                
                	<p>SHA-2�ܹԤ�Ԥ�ɬ�פ����뤫�ɤ������ޤ����������SHA-1������ؤαƶ��ʤɤϡ��������<strong>ͭ��������</strong>�ˤ�äưۤʤ�ޤ���<br />
                    ͽ�ᤴ�������SSL�������ͭ���������򤴳�ǧ�ξ塢�����򤴻��Ȥ���������</p>
                    
                    <ul style="margin : 0 0 20px 35px ;">
                        <li><a href="sha2.php#01-01">����������2015ǯ12��31���ޤǡפ�SHA-1������</a></li>
                        <li><a href="sha2.php#01-02">����������2016ǯ1��1����2016ǯ12��31���ޤǡפ�SHA-1������</a></li>
                        <li><a href="sha2.php#01-03">����������2017ǯ1��1���ʹߡפ�SHA-1������</a></li>
                    </ul>
                        
                    
                    <h5><a name="01-01" id="01-01">����������2015ǯ12��31���ޤǡפ�SHA-1������</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info check">
                        	<dt>�������ޤ�����ʤ������Ѥ����������Ȥ���ǽ�Ǥ���</dt>	
                        	<dd>
                            	���̤��б���������ɬ�פϤ������ޤ���<br />����ι��������SHA-2�ξ�����ȯ�Ԥ���ޤ��Τǡ������λ�������ޤ����顢�̾��̤���󹹿���ԤäƤ���������
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_01.png" alt="������������ޤ����顢�̾��̤���󹹿���ԤäƤ�������" style="margin-bottom : 20px ;" />
                    
                    </div>
                    <!-- /inner -->
                    
                    <h5><a name="01-02" id="01-02">����������2016ǯ1��1����2016ǯ12��31���ޤǡפ�SHA-1������</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info caut">
                        	<dt>�������ޤǤ����Ѳ�ǽ�Ǥ�����Google Chrome(Ver40�ʹ�)�ǡ����ɥ쥹�С�ɽ�����ѹ�����ޤ���</dt>	
                        	<dd>�������ޤǤ����Ѥ����������Ȥ���ǽ�Ǥ�����Google��ꡢ2015ǯ1��˥�꡼��ͽ���Chrome 40�ʹߤˤ����ơ�������ˬ����˥֥饦����Υ��ɥ쥹�С�ɽ�����ѹ���������ˤ�ȯɽ����Ƥ��ޤ��Τǡ�����դ���������<br />
                            �����SHA-2������Ȥ��ƺ�ȯ�Ԥ��뤳�Ȥ��ǽ�Ǥ��Τǡ�����Ƥ����������
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_02.png" alt="�������ޤǤ����Ѳ�ǽ�Ǥ�����Google Chrome(Ver40�ʹ�)�ǥ��ɥ쥹�С�ɽ�����ѹ�����ޤ�" style="margin-bottom : 15px ;" />
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>Google Chrome�ǤΥ��ɥ쥹�С�ɽ�����ѹ��ˤĤ���</h5>
                            <div class="inner">
                                
                                <p><strong>Chrome40�ʹ�</strong>�ˤ����ơ��֥饦���Υ��ɥ쥹�С���ˡ����ޤΤ褦�ʲ������ޡ����դ��θ���������ɽ������ޤ���</p>
                                <img src="img/news/sha2_browser_error_img_01.png" alt="Chrome�Ǥηٹ�ɽ��" />
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>������κ�ȯ�Ԥˤ��SHA-2�ܹԤˤĤ���</h5>
                            <div class="inner">
                                
                                <p>XServer��������Ⱦ夫�顢���ߤ��Ȥ��ξ������SHA-2������Ȥ��ƺ�ȯ�Ԥ��뤳�Ȥ�����ޤ���<br />
                                �ܤ����ϡ���<a href="sha2.php#02">��ȯ�Ԥμ��</a>�פ򤴳�ǧ����������</p>


								<div style="padding : 1em ; background : #fde8cb ; border : 1px solid #b3b3b3 ;">
                                	<p style="indent_ajust">��SHA-1��SHA-2�Ǥϡ��ä˷�������(�ե������㡼�ե���)�ؤ��б��������礭���ۤʤ�ޤ��Τǡ�
���������äǤ����Ѥ����ꤵ��Ƥ������ϡ������ˤ褯����ǧ�ξ塢�ܹԤ򤴸�Ƥ����������</p>

									��<a href="functions/service_ssl.php" target="_blank">SSL������λ��Ͱ���</a>
                                </div>
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                    
                    </div>
                    <!-- /inner -->
                    
                    
                    <h5><a name="01-03" id="01-03">����������2017ǯ1��1���ʹߡפ�SHA-1������</a></h5>
                    <div class="inner">
                    
                    	<dl class="stat_info warn">
                        	<dt>�������ޤ����ѤǤ��ޤ���<br />2016ǯ12��31���ޤǤ�SHA-2�ذܹԤ���ɬ�פ�����ޤ���</dt>	
                        	<dd>
                            �������ޤǤ����Ѥ����������ȤϽ���ޤ���2016ǯ12��31���ޤǤ�SHA-2�ذܹԤ��Ƥ�������ɬ�פ�����ޤ���
�ޤ���GoogleChrome(Ver39�ʹ�)��MozillaFirefox�ʤɡ���̾�ʥ֥饦����ǥ��ɥ쥹�С�ɽ�����ѹ���ٹ�ɽ����������ˤ�ȯɽ����Ƥ��ޤ��Τǡ�����դ���������
                            </dd>
                        </dl>
                        
                        <img src="img/news/sha2_update_img_03.png" alt="�������ޤ����ѤǤ��ޤ���2016ǯ12��31���ޤǤ˰ܹԤ���ɬ�פ�����ޤ���" style="margin-bottom : 15px ;" />
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>��̾�֥饦��(Google Chrome / Mozilla Firefox)��ǤΥ��ɥ쥹�С�ɽ����ٹ�ɽ���ˤĤ���</h5>
                            <div class="inner">
                                
                                <h6>Google Chrome�ǤΥ��ɥ쥹�С�ɽ�����ѹ��ˤĤ���</h6>
                                <div class="inner">
                                    <p>Chrome39�ʹߤˤ����ơ��֥饦���Υ��ɥ쥹�С�ɽ�����ѹ�����ޤ����ޤ�Chrome41�ޤǤΥ�꡼�����ʳ�Ū��ɽ�����ѹ������ͽ��Ǥ���</p>
                                    <img src="img/news/sha2_browser_error_img_02.png" alt="Chrome�ǤΥ��ɥ쥹�С�ɽ��" />
                                </div>
                                <!-- /inner -->
                                
                                <h6>Mozilla Firefox�ǤΥ��ɥ쥹�С���Ǥηٹ�ɽ��������ӥ��顼���̤�ɽ���ˤĤ���</h6>
                                <div class="inner">
                                	<p>2015ǯ����˥�꡼��ͽ��ΥС������ʹߡ����ɥ쥹�С���˷ٹ�ɽ�������褦�ˤʤ�ޤ����ޤ������θ�ΥС������Ǥϡ����̾�ˡֿ��ꤵ��ʤ���³�פǤ���ݤΥ��顼��ɽ�������ͽ��Ǥ���</p>
                                    <p>���顼���̤˴ؤ��Ƥϡ�����Ū�˥���ƥ�Ĥ�ɽ���Ǥ��ʤ�(���顼��̵��Ǥ��ʤ�)�褦�ˤ����ǽ��������ޤ���</p>
                                    <img src="img/news/sha2_browser_error_img_03.png" alt="Firefox�Ǥηٹ�ɽ��" />
                                </div>
                                <!-- /inner -->
                            </div>
                            <!-- /inner -->
                        </div>
                        <!-- /column -->
                        
                        <div class="column" style="margin-bottom : 15px ;">
                            <h5>������κ�ȯ�Ԥˤ��SHA-2�ܹԤˤĤ���</h5>
                            <div class="inner">
                                
                                <p>XServer��������Ⱦ夫�顢���ߤ��Ȥ��ξ������SHA-2������Ȥ��ƺ�ȯ�Ԥ��뤳�Ȥ�����ޤ���<br />
                                �ܤ����ϡ���<a href="sha2.php#02">��ȯ�Ԥμ��</a>�פ򤴳�ǧ����������</p>


								<div style="padding : 1em ; background : #fde8cb ; border : 1px solid #b3b3b3 ;">
                                	<p style="indent_ajust">��SHA-1��SHA-2�Ǥϡ��ä˷�������(�ե������㡼�ե���)�ؤ��б��������礭���ۤʤ�ޤ��Τǡ��������äǤ����Ѥ����ꤵ��Ƥ������ϡ������ˤ褯����ǧ�ξ塢�ܹԤ򤴸�Ƥ����������</p>

									��<a href="functions/service_ssl.php" target="_blank">SSL������λ��Ͱ���</a>
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
            	<h4><a name="02" id="02">������κ�ȯ�Ԥˤ��SHA-2�ؤΰܹ���ˡ�ˤĤ���</a></h4>
                <div class="inner">
                	<p><strong>2016ǯ1��1���ʹߤ�ͭ����������SHA-1������</strong>�ˤ����Ƥϡ�XServer��������Ⱦ夫��<strong>SHA-2���Ѥ���������Ȥ��ƺ�ȯ��</strong>��Ԥ����Ȥ�����ޤ���<br />
                    �嵭�ʳ��ξ�����ǤϺ�ȯ�Ԥ�Ԥ����ȤϤǤ��ޤ���ͽ�ᤴλ������������</p>
                    <p>��ȯ�Ԥϰʲ��μ��ǹԤ����Ȥ���ǽ�Ǥ���</p>
                    
                    
                    <ol style="margin : 0 0 20px 35px ;" class="flow_list">
                    	<li>                            
                        	<p>�ޤ��ϡ�������ǽ�ʡ�<strong>��ǧ�ѥ᡼�륢�ɥ쥹</strong>�פ��Ѱդ��ޤ���<br />
                            �������Τ����ݤ��Ѥ����᡼�륢�ɥ쥹����������ǽ���ɤ�������ǧ�ξ塢��³�������ˤ���������������</p>
                            <p style="padding : 0.5em 0.8em ; background : #dedede ; margin-bottom : 4px ;">��<a href="sha2.php#change_mail">�̤ξ�ǧ�ѥ᡼�륢�ɥ쥹������</a>���뤳�Ȥ��ǽ�Ǥ���</p>
                            
                            <p style="padding : 0.5em 0.8em ; background : #dedede ;">���֥����Х륵���� �����å�ǧ��SSL�פ����ϡ����μ�³����ɬ�פ���ޤ��󡣼���ؤ��ʤߤ���������</p>
                            
                            <dl style="padding : 1em ; border : 1px solid #b3b3b3 ;">
                            	<dt style="font-weight : bold ; font-size : 110% ;">����ǧ�ѥ᡼�륢�ɥ쥹�ˤĤ���</dt>
                                <dd style="margin-left : 1em ;">
                                	<p>��ǧ�ѤΥ᡼�륢�ɥ쥹�ϡ��������ٷ�������ޤäƤ��ꡢ��������Τ褦�ʥ��ɥ쥹�ȤʤäƤ��ޤ���</p>
                                    <ul style="margin : 0 0 5px 30px ;">
                                    	<li>admin@�ɥᥤ��̾</li>
                                        <li>administrator@�ɥᥤ��̾</li>                                        
                                        <li>hostmaster@�ɥᥤ��̾</li>
                                        <li>webmaster@�ɥᥤ��̾</li>
                                        <li>postmaster@�ɥᥤ��̾</li>
                                    </ul>
                                    ��
                                </dd>
                            </dl>
                        </li>
                        <li>
                        	<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" title="XServer��������� ������" target="_blank" rel="nofollow">XServer���������</a>�إ����󤷡��ȥåײ��̤Ρ�SSL������פΤ���������򤴳�ǧ����������</p>
                            <p>��ȯ�Ԥ�Ԥ�������Ρֺ�ȯ�Կ����ץ�˥塼�򥯥�å����ޤ���</p>
                            <img src="img/news/sha2_reissue_01.png" alt="������κ�ȯ�Լ��1" class="man_img" />
                        </li>
                        <li>
                        	<p>��ȯ�Լ�³���ե����बɽ������ޤ��Τǡ�������ǧ�ξ塢����ܥ���򥯥�å����Ƥ���������</p>
                            <img src="img/news/sha2_reissue_02.png" alt="������κ�ȯ�Լ��2" class="man_img" />
                            
                            <p>��ȯ�Ԥο�������λ���ޤ�����</p>
                            <img src="img/news/sha2_reissue_03.png" alt="������κ�ȯ�Լ��3" class="man_img" />
                        </li>
                        <li>
                        	<p>�����塢SSL�٥��������ȯ�Ԥ˴ؤ��뾵ǧ�᡼�뤬�Ϥ��ޤ��Τǡ���ʸ���URL�򥯥�å�����ȯ�Ԥ�ǧ���Ƥ���������</p>
                            
                            <p style="padding : 0.5em 0.8em ; background : #dedede ;">���֥����Х륵���� �����å�ǧ��SSL�פ����ϡ����μ�³����ɬ�פ���ޤ��󡣼���ؤ��ʤߤ���������</p>
                        </li>
                        <li>
                        	<p>�����ޤ��Ͼ�ǧ����λ�����塢SHA-2��SSL������ȯ�Ԥ���ޤ���<br />
                            ����¦�Ǻ�ȯ�Ԥ��줿������κƥ��󥹥ȡ����Ԥ��ޤ��Τǡ���ȴ�λ�ޤǾ����Ф��ꤪ�Ԥ�����������</p>
                        </li>
                        <li>
                        	<p>�ƥ��󥹥ȡ��봰λ�塢���Ҥ�괰λ���Τ����ꤷ�ޤ��Τǡ�����ǧ����������<br />
                            �ʾ�ǡ�SHA-2������κ�ȯ�Ԥϴ�λ�Ǥ���</p>
                        </li>
                    </ol>
                    
                    <dl style="padding : 1em ; border : 1px solid #b3b3b3 ;">
                        <dt style="font-weight : bold ; font-size : 110% ;"><a name="change_mail" id="change_mail">���̤ξ�ǧ�ѥ᡼�륢�ɥ쥹�����Τ���ˤ�</a></dt>
                        <dd style="margin-left : 1em ;">
                            <p>�����Ѥ�����ΤǤϤʤ����̤ξ�ǧ�ѥ᡼�륢�ɥ쥹�����Τ��������ϡ����ټ��˱�äƺ�ȯ�Ԥμ�³����Ԥä��塢�־�ǧ�᡼������פμ�³����Ԥ����Ȥǲ�ǽ�Ǥ���</p>
                            
                            <ol style="margin : 0 0 5px 30px ;">
                                <li>��(��ȯ��)���˱�äơ���ȯ�Կ�����Ԥ��ޤ���</li>
                                <li>XServer��������ȥȥåײ��̡�SSL������Τ�����������顢����������Ρ־�ǧ�᡼������ץ�˥塼�ؿʤߤޤ���</li>
                                <li>�ե�������ξ�����ǧ�ξ塢������ͽ��Ρ־�ǧ�ѥ᡼�륢�ɥ쥹�פ����򤷤ޤ���</li>
                                <li>��ǧ�ܥ���򥯥�å��������پ�����ǧ�����塢��λ�ܥ���򥯥�å����ޤ���</li>
                                <li>��ۤ����򤷤��᡼�륢�ɥ쥹�ˡ���ǧ�᡼�뤬���Τ���ޤ���</li>
                            </ol>
                        </dd>
                    </dl>
                </div>
                <!-- /inner -->
            </div>
            <!-- /section -->
            
            
            <div class="section">
            	<h4><a name="03" id="03">��̾���르�ꥺ��γ�ǧ��ˡ</a></h4>
                <div class="inner">
                	<p>���ߤ��Ȥ��ξ�����ν�̾���르�ꥺ��ˤĤ��Ƥϡ������Τ褦����ˡ�ǳ�ǧ���뤳�Ȥ���ǽ�Ǥ���</p>
                                        
                    	<ul style="margin : 0 0 15px 25px ;">
                            <li><a href="sha2.php#cert_ie">Internet Explorer�ξ��</a></li>
                            <li><a href="sha2.php#cert_fire">Mozilla Firefox�ξ��</a></li>
                            <li><a href="sha2.php#cert_chr">Google Chrome�ξ��</a></li>
                        </ul>
                    
                        <h6><a name="cert_ie" id="cert_ie">Internet Explorer�ξ��</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>���ɥ쥹�С����դ�ɽ������Ƥ���ָ��ޡ����פ򥯥�å�����³���ơ־������ɽ���פ򥯥�å����ޤ���</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_ie-01.png" alt="��̾���르�ꥺ���ǧ-IE-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>�־ܺ١ץ��֤򥯥�å������ֽ�̾���르�ꥺ��פ˴ؤ�����ܤ��ǧ���Ƥ���������</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_ie-02.png" alt="��̾���르�ꥺ���ǧ-IE-02" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                            </ol>
                        </div>
                        <!-- /inner -->
                        
                        <h6><a name="cert_fire" id="cert_fire">Mozilla Firefox�ξ��</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>���ɥ쥹�С���ɽ������Ƥ���ָ��ޡ����פ򥯥�å�����³���ơ־ܺ٤�ɽ���פ򥯥�å����ޤ���</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-01.png" alt="��̾���르�ꥺ���ǧ-Firefox-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>�֥������ƥ��ץ�����Ρ��־������ɽ���ץܥ���򥯥�å����ޤ���</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-02.png" alt="��̾���르�ꥺ���ǧ-Firefox-02" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>�־ܺ١ץ��֤򥯥�å�����������Υե�����ɤ���Certificate Signature Algorithm�פ�����ξ塢�ե�����ɤ��ͤ�ɽ�����줿���Ƥ��ǧ���Ƥ���������</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_fire-03.png" alt="��̾���르�ꥺ���ǧ-Firefox-03" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                            </ol>
                        </div>
                        <!-- /inner -->
                        
                        <h6><a name="cert_chr" id="cert_chr">Google Chrome�ξ��</a></h6>
                        <div class="inner">
                            <ol style="margin-left : 20px ;">
                                <li>
                                    <p>���ɥ쥹�С���ɽ������Ƥ���ָ��ޡ����פ򥯥�å�����³���ơ���³�ץ��֤򥯥�å����Ƥ���������</p>
                                    <p>������Ρ־��������פ򥯥�å����ޤ���</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_chr-01.png" alt="��̾���르�ꥺ���ǧ-Chrome-01" />
                                    </div>
                                    <!-- /img_box -->
                                </li>
                                <li>                        
                                    <p>�־ܺ١ץ��֤򥯥�å������ֽ�̾���르�ꥺ��פ˴ؤ�����ܤ��ǧ���Ƥ���������</p>
                                    
                                    <div class="img_box">
                                        <img src="img/news/sha2_cert_chr-02.png" alt="��̾���르�ꥺ���ǧ-Chrome-02" />
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
