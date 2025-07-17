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

<link rel="index" href="<?php print $SITE_URL; ?>/sitemap.php" title="�����ȥޥå�">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<title>������ˡ�β�����ȼ���������ۤ˴ؤ��뤪�Τ餻 �� <?php print $SITE_TITLE; ?></title>
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
		<h1><a href="index.php"><img src="img/news/service_logo.png" alt="���å��������С�" /></a></h1>
    </div>
    <!-- /header -->
    
    <div id="main">
    	
        <h3>������ˡ�β�����ȼ���������ۤ˴ؤ��뤪�Τ餻</h3>
        <div class="inner">
        
        	<div class="section">
                <p>ʿ��24ǯ(2012ǯ)8��ΡּҲ��ݾ�ΰ���⸻�γ�������ޤ�������ȴ��Ū�ʲ��פ�Ԥ�����ξ�����ˡ���ΰ����������������ˡΧ��(ʿ��24ǯˡΧ��68��)�θ��ۤ������ʿ��25ǯ(2013ǯ)10��1���γյĤǡ�ʿ��26ǯ(2014ǯ)4��1������ϡ�������Ψ�򸽺ߤ�5%���顢8%�ذ����夲�뤳�Ȥ����ꤵ��ޤ�����</p>            
                <p>�����٤ξ�����ˡ���β�����ȼ����ʿ��26ǯ(2014ǯ)4��1���ʹߤΥ����ӥ��Τ���������˴ؤ��Ƥϡ���������Ψ�˴�Ť�����Τؤ��ѹ��������ޤ���</p>
               <p class="border border_blue">
                    �����Υڡ����Ǥϲ����˥塼�����տ魯����­�����Ǻܤ��Ƥ��ޤ���<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=1811" target="_blank">������ˡ�β����˴ؤ��뤴�������ѹ��Τ��Τ餻(2014/02/21) </a></span><br><br>

                    ���ܥڡ����ηǺ����Ƥϡ���������Υ����ӥ����ƤȰۤʤ��ǽ��������ޤ����ǿ��ξ����<a href="https://www.xserver.ne.jp/" target="_blank">����������</a>�򤴻��Ȥ���������
                </p>
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4>Ŭ�Ѥ������Ψ�ˤĤ���</h4>
                <div class="inner">
                
                	<p>������ˡ���β�������������������ˤ˱�ä��б��������ޤ���</p>
                    
                    <h5>�����С��ξ��</h5>
                    <div class="inner">
                    
                    	<h6>[����������]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014ǯ3��31���ޤ�</strong>�Τ��������ߤˤϵ���Ψ<strong class="old_tax">5%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2014ǯ4��1���ʹ�</strong>�Τ��������ߤˤϿ���Ψ<strong class="new_tax">8%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_server.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[���󹹿�]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014ǯ3��31���ޤ�</strong>�����⤪��ʧ����³���ˤϵ���Ψ<strong class="old_tax">5%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2014ǯ4��1���ʹ�</strong>�����⤪��ʧ����³���ˤϿ���Ψ<strong class="new_tax">8%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_server.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">������Τ���ʧ����³���ˤ�äơ�����ʧ����ɼ��ȯ�Ԥ������ϡ����Υ����ߥ󥰤����Ŭ����Ψ����ꤷ�ޤ���<br />
                                   2014ǯ3�����ޤǤ�ȯ�Ԥ��줿����񡦤���ʧ����ɼ���ϡ��ºݤ�����򤪻�ʧ�����������Τ�2014ǯ4��ʹߤǤ��äƤ⡢5���Ŭ�Ѥ��ޤ���<br />�ޤ������쥸�åȥ����ɼ�ư�����Ʊ�ͤ˰�����»ܤ��줿�����ߥ󥰤���Ȥ��ޤ���</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
                    
                    <h5>�ɥᥤ��SSL������ξ��</h5>
                    <div class="inner">
                    
                    	<h6>[����������]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014ǯ3��31���ޤ�</strong>�Τ��������ߤˤϵ���Ψ<strong class="old_tax">5%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2014ǯ4��1���ʹ�</strong>�Τ��������ߤˤϿ���Ψ<strong class="new_tax">8%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_other.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[���󹹿�]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2014ǯ3��31���ޤ�</strong>�����⤪��ʧ����³���ˤϵ���Ψ<strong class="old_tax">5%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2014ǯ4��1���ʹ�</strong>�����⤪��ʧ����³���ˤϿ���Ψ<strong class="new_tax">8%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_other.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">������Τ���ʧ����³���ˤ�äơ�����ʧ����ɼ��ȯ�Ԥ������ϡ����Υ����ߥ󥰤����Ŭ����Ψ����ꤷ�ޤ���<br />
                                   2014ǯ3�����ޤǤ�ȯ�Ԥ��줿����񡦤���ʧ����ɼ���ϡ��ºݤ�����򤪻�ʧ�����������Τ�2014ǯ4��ʹߤǤ��äƤ⡢5���Ŭ�Ѥ��ޤ���<br />�ޤ������쥸�åȥ����ɼ�ư�����Ʊ�ͤ˰�����»ܤ��줿�����ߥ󥰤���Ȥ��ޤ���</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
                    <!--<div class="column">
                    	<h5>�����ѥ����ӥ���Τ���ʧ����ɼȯ�ԤΥ����ߥ�</h5>
                        <div class="inner">
                        
                        	<dl>
                            	<dt>[�����С�/�ɥᥤ��]</dt>
                                <dd>
                                	<p>
                                    	<img src="img/news/new_icon.png" alt="����" />
                                        <img src="img/news/update_icon.png" alt="����" />
                                        ������Τ���ʧ���ץ�˥塼����Τ���ʧ����ɼȯ�Ի�
                                    </p>
                                    <div class="note">
                                    	<p class="indent_ajust">������������ξ�硢�����ӥ�(�����������)�Τ��������߻����ǤϤʤ������������߸�Τ���ʧ����ɼȯ�ԤΥ����ߥ󥰤����Ȥʤ�ޤ���</p>
                                    </div>
                                </dd>
                                <dt>[SSL������]</dt>
                                <dd>
                                	<p>
                                        <img src="img/news/new_icon.png" alt="����" />
                                        �����ӥ��ο������������߻�<br />
                                        <img src="img/news/update_icon.png" alt="����" />
                                        ������Τ���ʧ���ץ�˥塼����Τ���ʧ����ɼȯ�Ի�
                                    </p>
                                </dd>
                                <dt>[�Хå����åץǡ�������(��ư�Хå����å�)]</dt>
                                <dd>
                                	<p><img src="img/news/new_icon.png" alt="����" />
                                    �����ӥ��ο������������߻�</p>
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
               	<h4>���������������ɽ</h4>
                <div class="inner">
                
                	<p>������б���ȼ���������λ�����ˡ��§�äơ�����������򻻽Ф��Ƥ��ޤ���</p>
                    
                    <div class="column" style="margin-bottom : 15px ;">
                        <h5>��Ψ<strong>5%</strong>����<strong>8%</strong>�ؤλ�����ˡ</h5>
                        <div class="inner">
                            
                            <p style="font-weight : bold ; font-size : 125% ;">(1)&nbsp;<strong class="old_tax">���������ǹ�����</strong> �� 1.05 = <strong class="no_tax">��ȴ����</strong><span class="assist" style="font-size : 80% ;">(�������ڤ�夲)</span></p>
                            
                            <p style="font-weight : bold ; font-size : 125% ;">(2)&nbsp;<strong class="no_tax">��ȴ����</strong> �� 1.08 = <strong class="new_tax">��������ǹ�����</strong><span class="assist" style="font-size : 80% ;">(�������ڤ�Τ�)</span></p>
                            
                            <p class="assist indent_ajust">�������С����ϡַ������ס��ɥᥤ���SSL���������ϡ�ǯ�ۡפȤ��ä��Ǿ�ñ���ǻ��Ф�ԤäƤ��ޤ���<br />
                            ������֤��ȤΤ���������ϡ���������ǹ�����˴��֤򤫤�����ΤȤʤ�ޤ���</p>
                        </div>
                        <!-- /inner -->
                    </div>
                    <!-- /column -->
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��X10�ץ��</caption>
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
                                	<th scope="col" rowspan="2">���ܡ�����</th>
                                    <th scope="col" colspan="2" class="old_item">������</th>
                                    <th scope="col" colspan="2" class="new_item">������</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">�����������</th>
                                    <td colspan="2" class="old_item">3,150��</td>
                                    <td colspan="2" class="new_item">3,240��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3����</th>
                                    <td class="old_item">1,260��</td>
                                    <td class="old_item">3,780��</td>
                                    <td class="new_item">1,296��</td>
                                    <td class="new_item">3,888��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6����</th>
                                    <td class="old_item">1,155��</td>
                                    <td class="old_item">6,930��</td>
                                    <td class="new_item">1,188��</td>
                                    <td class="new_item">7,128��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12����</th>
                                    <td class="old_item">1,050��</td>
                                    <td class="old_item">12,600��</td>
                                    <td class="new_item">1,080��</td>
                                    <td class="new_item">12,960��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">���쥸�åȥ�����<br />��ư���</th>
                                    <td colspan="2" class="old_item">1,050��</td>
                                    <td colspan="2" class="new_item">1,080��</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��X20�ץ��</caption>
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
                                	<th scope="col" rowspan="2">���ܡ�����</th>
                                    <th scope="col" colspan="2" class="old_item">������</th>
                                    <th scope="col" colspan="2" class="new_item">������</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">�����������</th>
                                    <td colspan="2" class="old_item">3,150��</td>
                                    <td colspan="2" class="new_item">3,240��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3����</th>
                                    <td class="old_item">2,520��</td>
                                    <td class="old_item">7,560��</td>
                                    <td class="new_item">2,592��</td>
                                    <td class="new_item">7,776��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6����</th>
                                    <td class="old_item">2,310��</td>
                                    <td class="old_item">13,860��</td>
                                    <td class="new_item">2,376��</td>
                                    <td class="new_item">14,256��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12����</th>
                                    <td class="old_item">2,100��</td>
                                    <td class="old_item">25,200��</td>
                                    <td class="new_item">2,160��</td>
                                    <td class="new_item">25,920��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">���쥸�åȥ�����<br />��ư���</th>
                                    <td colspan="2" class="old_item">2,100��</td>
                                    <td colspan="2" class="new_item">2,160��</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��X30�ץ��</caption>
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
                                	<th scope="col" rowspan="2">���ܡ�����</th>
                                    <th scope="col" colspan="2" class="old_item">������</th>
                                    <th scope="col" colspan="2" class="new_item">������</th>
                                </tr>
                                <tr>
                                	<th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="old_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                    <th scope="col" class="new_item">���<span class="assist">(�ǹ�)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">�����������</th>
                                    <td colspan="2" class="old_item">3,150��</td>
                                    <td colspan="2" class="new_item">3,240��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">3����</th>
                                    <td class="old_item">5,040��</td>
                                    <td class="old_item">15,120��</td>
                                    <td class="new_item">5,184��</td>
                                    <td class="new_item">15,552��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">6����</th>
                                    <td class="old_item">4,620��</td>
                                    <td class="old_item">27,720��</td>
                                    <td class="new_item">4,752��</td>
                                    <td class="new_item">28,512��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">12����</th>
                                    <td class="old_item">4,200��</td>
                                    <td class="old_item">50,400��</td>
                                    <td class="new_item">4,320��</td>
                                    <td class="new_item">51,840��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">���쥸�åȥ�����<br />��ư���</th>
                                    <td colspan="2" class="old_item">4,200��</td>
                                    <td colspan="2" class="new_item">4,320��</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>���ɥᥤ��</caption>
                            <colgroup class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col">�ɥᥤ��</th>
                                    <th scope="col" class="old_item">������ǯ��(�ǹ�)</th>
                                    <th scope="col" class="new_item">������ǯ��(�ǹ�)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">.com</th>
                                    <td class="old_item" rowspan="5">1,575��</td>
                                    <td class="new_item" rowspan="5">1,620��</td>
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
                                    <td class="old_item" rowspan="2">5,250��</td>
                                    <td class="new_item" rowspan="2">5,400��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">��ƻ�ܸ�.jp</th>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.ne.jp</th>
                                    <td class="old_item" rowspan="4">7,350��</td>
                                    <td class="new_item" rowspan="4">7,560��</td>
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
                                    <td class="old_item" rowspan="4">5,250��</td>
                                    <td class="new_item" rowspan="4">5,400��</td>
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
                                    <td class="old_item">7,350��</td>
                                    <td class="new_item">7,560��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.asia</th>
                                    <td class="old_item" rowspan="2">5,250��</td>
                                    <td class="new_item" rowspan="2">5,400��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">.mobi</th>
                                </tr>
                            </tbody>
                        </table>                        
                        <p class="assist indent_ajust">(��)���쥸�åȥ����ɤμ�ư����ξ��ΰ�����ۤ⡢�嵭ɽ��Ʊ�ͤǤ���</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��SSL������(��ԥå�SSL)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">���֤ʤ�</th>
                                    <th scope="col" class="old_item">������(�ǹ�)</th>
                                    <th scope="col" class="new_item">������(�ǹ�)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">�����������</th>
                                    <td class="old_item">10,500��</td>
                                    <td class="new_item">10,800��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">��������</th>
                                    <td class="old_item">0��</td>
                                    <td class="new_item">0��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">����������(ǯ��)</th>
                                    <td class="old_item">10,500��</td>
                                    <td class="new_item">10,800��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1ǯ</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">21,000��</td>
                                    <td class="new_item">21,600��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">10,500��</td>
                                    <td class="new_item">10,800��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2ǯ(��1)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">28,350��</td>
                                    <td class="new_item">29,160��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">18,900��</td>
                                    <td class="new_item">19,440��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3ǯ(��1)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">33,600��</td>
                                    <td class="new_item">34,560��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">25,200��</td>
                                    <td class="new_item">25,920��</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(��1)2ǯ��10������3ǯ��20������ʣ��ǯ�����Ŭ�ѺѤߤǤ���</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��SSL������(�����å�SSL�ץ�ߥ���)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">���֤ʤ�</th>
                                    <th scope="col" class="old_item">������(�ǹ�)</th>
                                    <th scope="col" class="new_item">������(�ǹ�)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">�����������</th>
                                    <td class="old_item">15,250��</td>
                                    <td class="new_item">(��1)15,660��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">��������</th>
                                    <td class="old_item">0��</td>
                                    <td class="new_item">0��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">����������(ǯ��)</th>
                                    <td class="old_item">21,000��</td>
                                    <td class="new_item">21,600��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1ǯ</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">36,250��</td>
                                    <td class="new_item">37,260��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">21,000��</td>
                                    <td class="new_item">21,600��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2ǯ(��2)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">51,525��</td>
                                    <td class="new_item">52,974��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">37,800��</td>
                                    <td class="new_item">38,880��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3ǯ(��2)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">62,600��</td>
                                    <td class="new_item">64,368��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">50,400��</td>
                                    <td class="new_item">51,840��</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(��1)��ȴ����ˤĤ����Ͳ���Ĵ����»ܤ��Ƥ��ޤ���<br />
                        ������������ѡ�14,524��(��ȴ) �� 14,500��(��ȴ)</p>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ;">(��2)2ǯ��10������3ǯ��20������ʣ��ǯ�����Ŭ�ѺѤߤǤ���</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <div class="table_box">
                    	<table cellspacing="0">
                        	<caption>��SSL������(�����å�ǧ��SSL)</caption>
                            <colgroup span="2" class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col" colspan="2">���֤ʤ�</th>
                                    <th scope="col" class="old_item">������(�ǹ�)</th>
                                    <th scope="col" class="new_item">������(�ǹ�)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th" colspan="2">�����������</th>
                                    <td class="old_item">10,500��</td>
                                    <td class="new_item">10,800��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">��������</th>
                                    <td class="old_item">0��</td>
                                    <td class="new_item">0��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" colspan="2">����������(ǯ��)</th>
                                    <td class="old_item">21,000��</td>
                                    <td class="new_item">21,600��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">1ǯ</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">31,500��</td>
                                    <td class="new_item">32,400��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">21,000��</td>
                                    <td class="new_item">21,600��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">2ǯ(��1)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">47,250��</td>
                                    <td class="new_item">48,600��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">37,800��</td>
                                    <td class="new_item">38,880��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th" rowspan="2">3ǯ(��1)</th>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">58,800��</td>
                                    <td class="new_item">60,480��</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub_th">����</th>
                                    <td class="old_item">50,400��</td>
                                    <td class="new_item">51,840��</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="assist" style="padding-left : 2.5em ; text-indent: -2.5em ; margin-bottom : 4px ;">(��1)2ǯ��10������3ǯ��20������ʣ��ǯ�����Ŭ�ѺѤߤǤ���</p>
                    </div>
                    <!-- /table_box -->
                    
                    
                    
                    <div class="table_box" style="margin-bottom : 35px ;">
                    	<table cellspacing="0">
                        	<caption>���Хå����åץǡ�������(��ư�Хå����å�)</caption>
                            <colgroup class="item_info">
                            </colgroup>
                            <colgroup class="old_info">
                            </colgroup>
                            <colgroup class="new_info">
                            </colgroup>
                        	<thead>
                            	<tr>
                                	<th scope="col">����</th>
                                    <th scope="col" class="old_item">������(�ǹ�)</th>
                                    <th scope="col" class="new_item">������(�ǹ�)</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th scope="row" class="sub_th">�����С��ΰ�ǡ���</th>
                                    <td class="old_item">10,500��</td>
                                    <td class="new_item">10,800��</td>
                                </tr>
                                <tr>
                                	<th scope="row" class="sub_th">MySQL�ǡ����١���</th>
                                    <td class="old_item">5,250��</td>
                                    <td class="new_item">5,400��</td>
                                </tr>                              
                            </tbody>
                        </table>
                    </div>
                    <!-- /table_box -->
                    
                    
                    <p>���塢�������ӥ��˴ؤ��륦���֥����Ȥ乭��ʪ��������ɽ���ˤĤ��ޤ��Ƥϡ��缡����ȴɽ�������줷�Ƥޤ���ޤ��Τǡ�ͽ�ᤴλ���ꤤ�ޤ���</p>

            </div>
            <!-- /section -->
            
            <p class="border_section">����¾�����������������������ޤ����顢�������ӥ���<a href="<?php print $SITE_URL; ?>support/" rel="nofollow">���ݡ���</a>�ޤǤ��䤤��碌����������
        
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
