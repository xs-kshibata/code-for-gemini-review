<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>��Ͽ���Ƥ��륯�쥸�åȥ����ɤ��ѹ�����ˤϤɤ�����Ф����Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServer�������������ѹ�����ǽ�Ǥ����ܺ٤ϥޥ˥奢��ڡ����֥ᥤ�󥫡��ɤ��ѹ��פ�������������">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">��Ͽ���Ƥ��륯�쥸�åȥ����ɤ��ѹ�����ˤϤɤ�����Ф����Ǥ�����</h3>
                
                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>����ѹ�����ǽ�Ǥ���<br>
                �ܺ٤�<a href="../../manual/man_order_pay_method_autopay_credit.php#link-b04">�ᥤ�󥫡��ɤ��ѹ�</a>��������������</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_price.php" class="btn btn_gray">������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
                </div>

            </section>
            <!-- /.col-main -->
            
            <aside class="col-side">
<?php include("sidemenu.php"); ?>
            </aside>
            <!-- /.col-side -->
        
        </div>
        <!-- /.clearfix -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>