<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯�������ä�����β���˴ؤ���褯�������Ǥ���">

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
            
                <h3 class="sub-ttl">����</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./contract_cancel_before.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�������ο������ߤ򥭥�󥻥�Ǥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_what.php" class="faqList__label"><i class="ico ico_chevron-right"></i>������򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>������������餤�ĤޤǻȤ������Ǥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_accidentally.php" class="faqList__label"><i class="ico ico_chevron-right"></i>��äƲ������򤷤Ƥ��ޤ��ޤ��������ä���ˡ�򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_expiration_date_server.php" class="faqList__label"><i class="ico ico_chevron-right"></i>����򤷤������С���������Ȥ����Ѵ��¸�ɤ��ʤ�ޤ�����</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_expiration_date_domain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>����򤷤��ȼ��ɥᥤ��ϴ��¸�ɤ��ʤ�ޤ�����</a></li>
                        <li class="faqList__item"><a href="./contract_cancel_fee.php" class="faqList__label"><i class="ico ico_chevron-right"></i>���������Ϥ�����ޤ�����</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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