<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ǡ����١��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯��������MySQL�ǡ����١����Τ����Ѥ˴ؤ���褯�������Ǥ���MySQL�λ��ͤ�������ˡ���ǡ����١�����³���Ǥ��ʤ������н�ˡ�ˤĤ��ơ�">

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
            
                <h3 class="sub-ttl">�ǡ����١���</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_db_version.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQL�ΥС������򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_db_capacity.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQL�ǻ��ѤǤ������̤򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_db_setting.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQL������Ϥɤ�����Ԥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_db_phpmyadmin.php" class="faqList__label"><i class="ico ico_chevron-right"></i>phpMyAdmin�˥�����Ǥ��ޤ���</a></li>
                        <li class="faqList__item"><a href="./service_db_expire.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ǡ����١��������С�����³������ޤ���</a></li>
                        <li class="faqList__item"><a href="./service_db_autoinstall_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>��ñ���󥹥ȡ����Ԥä��ץ����Υǡ����١����Υѥ���ɤ��ǧ������ˡ�򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_db_hp_not_show.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�֥ǡ����١�����Ω���顼�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���</a></li>
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