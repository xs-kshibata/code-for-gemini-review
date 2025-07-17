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

<title>������ˡ�β�����ȼ���������ۤ��ѹ��ˤĤ��� �� <?php print $SITE_TITLE; ?></title>
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
    	
        <h3>������ˡ�β�����ȼ���������ۤ��ѹ��ˤĤ���</h3>
        <div class="inner">
        
        	<div class="section">
                <p>������ˡ�β����ˤ�ꡢ2019ǯ10��1���ʹߤΤ�����ʬ���������Ψ��8%����10%�ذ����夲�뤳�Ȥ����ꤵ��Ƥ��ޤ���<br>
                    2019ǯ10��1���ʹߤΥ����ӥ��Τ���������˴ؤ��Ƥϡ���������Ψ�˴�Ť�����Τؤ��ѹ��������ޤ���</p>
               <p class="border border_blue">
                    �����Υڡ����Ǥϰʲ��Υ˥塼�����տ魯����­�����Ǻܤ��Ƥ��ޤ���<br>
                     <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=5947" target="_blank">������ˡ�β�����ȼ�����������ѹ��Τ��Τ餻(2019/08/22) </a></span>
                </p>
                <p>���ܥڡ����ηǺ����Ƥϡ���������Υ����ӥ����ƤȰۤʤ��ǽ��������ޤ����ǿ��ξ����<a href="https://www.xserver.ne.jp/">����������</a>�򤴻��Ȥ���������</p>
            </div>
            <!-- /section -->  
        
        	<div class="section">
        		<h4>Ŭ�Ѥ������Ψ�ˤĤ���</h4>
                <div class="inner">
                
                	<p>�����ѥ����ӥ����Ȥˡ��ʲ������ˤ˱�ä��б��������ޤ���</p>
                    
                    <h5>�����С��ξ��</h5>
                    <div class="inner">
                    
                    	<h6>[����������]</h6>
                        <div class="inner">
                    
                            <ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019ǯ9��30���ޤ�</strong>�Τ��������ߤˤϵ���Ψ<strong class="old_tax">8%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2019ǯ10��1���ʹ�</strong>�Τ��������ߤˤϿ���Ψ<strong class="new_tax">10%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_server_2019.png?date=190806" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[���󹹿�]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019ǯ9��30���ޤ�</strong>�����⤪��ʧ����³���ˤϵ���Ψ<strong class="old_tax">8%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2019ǯ10��1���ʹ�</strong>�����⤪��ʧ����³���ˤϿ���Ψ<strong class="new_tax">10%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_server_2019.png?date=190806" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">������Τ���ʧ����³���ˤ�äơ�����ʧ����ɼ��ȯ�Ԥ������ϡ����Υ����ߥ󥰤����Ŭ����Ψ����ꤷ�ޤ���<br />
                                   2019ǯ9�����ޤǤ�ȯ�Ԥ��줿����ʧ����ɼ�ʤɤϡ��ºݤ�����򤪻�ʧ�����������Τ�2019ǯ10��ʹߤǤ��äƤ⡢8���Ŭ�Ѥ��ޤ���<br />�ޤ������쥸�åȥ����ɼ�ư�����Ʊ�ͤ˰�����»ܤ��줿�����ߥ󥰤���Ȥ��ޤ���</li>
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
                                <li><strong class="old_tax">2019ǯ9��30���ޤ�</strong>�Τ��������ߤˤϵ���Ψ<strong class="old_tax">8%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2019ǯ10��1���ʹ�</strong>�Τ��������ߤˤϿ���Ψ<strong class="new_tax">10%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            
                            
                            <img src="img/news/tax_explanation_new_other_2019.png" style="margin-bottom : 20px ;" />
                            
                        </div>
                        <!-- /inner -->
                        
                        
						<h6>[���󹹿�]</h6>
                        <div class="inner">
                        
                        	<ul style="margin : 0 0 15px 25px ; font-weight : bold ; font-size : 115% ;">
                                <li><strong class="old_tax">2019ǯ9��30���ޤ�</strong>�����⤪��ʧ����³���ˤϵ���Ψ<strong class="old_tax">8%</strong>��Ŭ�Ѥ���</li>
                                <li><strong class="new_tax">2019ǯ10��1���ʹ�</strong>�����⤪��ʧ����³���ˤϿ���Ψ<strong class="new_tax">10%</strong>��Ŭ�Ѥ���</li>
                            </ul>
                            
                            <img src="img/news/tax_explanation_update_other_2019.png" style="margin-bottom : 20px ;" />
                        
                        	<div class="note">
                                <ul>                                   
                                    <li class="indent_ajust">������Τ���ʧ����³���ˤ�äơ�����ʧ����ɼ��ȯ�Ԥ������ϡ����Υ����ߥ󥰤����Ŭ����Ψ����ꤷ�ޤ���<br />
                                   2019ǯ9�����ޤǤ�ȯ�Ԥ��줿����ʧ����ɼ�ʤɤϡ��ºݤ�����򤪻�ʧ�����������Τ�2019ǯ10��ʹߤǤ��äƤ⡢8���Ŭ�Ѥ��ޤ���<br />�ޤ������쥸�åȥ����ɼ�ư�����Ʊ�ͤ˰�����»ܤ��줿�����ߥ󥰤���Ȥ��ޤ���</li>
                                </ul>
                            </div>
                            <!-- /note -->
                        
                        </div>
                        <!-- /inner -->
						                    
                    </div>
                    <!-- /inner -->
                    
                    <h5>�Ƽ������ξ��</h5>
                    <div class="inner">
                    <p>�Хå����åץǡ������󶡤�����񡦸��ѽ�ȯ�Ԥʤɤˤ�����Ƽ������ˤĤ��ޤ��Ƥϡ�����ʧ����ɼ��ȯ�Ԥ��줿�����ߥ󥰤����Ŭ����Ψ����ꤷ�ޤ���<br>
                        2019ǯ9�����ޤǤ�ȯ�Ԥ��줿����ʧ����ɼ�ʤɤϡ��ºݤ�����򤪻�ʧ�����������Τ�2019ǯ10��ʹߤǤ��äƤ⡢8���Ŭ�Ѥ��ޤ���</p>

                        
                        
                    </div>
                    
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


            
            
            <!--<div class="section">
               	<h4>�ƥץ��Τ���������ˤĤ���</h4>
                <div class="inner">
                
                    <p>���ƥץ��ο���Ψ����ˤĤ��ޤ��Ƥϡ����������ȤΡ�<a href="price/price_x10.php">����</a>�פˤƤ���ǧ����������<br>
                    ����X2�ץ������ѤΤ����ͤϡ�<a href="https://www.xserver.ne.jp/x2_transition.php">��X2�ٳƥ����С��ץ��򤴷���Τ����͸��� ���̥ץ��ˤĤ���</a>�פ򤴳�ǧ����������</p>
                    
            </div>
            /section -->
            
                <p class="border_section">����¾�������������ʤɤ��������ޤ����顢�������ӥ���<a href="<?php print $SITE_URL; ?>support/" rel="nofollow">���ݡ���</a>�ޤǤ��䤤��碌����������</p>
        
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
