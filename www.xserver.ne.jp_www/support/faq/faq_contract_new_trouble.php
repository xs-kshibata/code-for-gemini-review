<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>��������Υȥ�֥� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯�������÷�������Υȥ�֥�˴ؤ���褯�������ڡ����Ǥ���">

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
            
                <h3 class="sub-ttl">�ȥ�֥�</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./contract_new_sms.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SMSǧ�ڡ�����ǧ�ڤ����ޤ����������������ߤ��Ǥ��ޤ���</a></li>
                        <li class="faqList__item"><a href="./contract_new_setup_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�֥��å��������С� ���괰λ�Τ��Τ餻�פΥ᡼���ʶ�����Ƥ��ޤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./contract_new_registered_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�֤���˾�Υ᡼�륢�ɥ쥹�ϲ�����Ͽ���줿���Ȥ����뤿�ᡢ��Ͽ���뤳�ȤϤǤ��ޤ��󡣡פ�ɽ�����졢�������ߤ��Ǥ��ޤ���</a></li>
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