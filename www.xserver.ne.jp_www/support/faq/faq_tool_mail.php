<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WEB�᡼�� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯��������WEB�᡼��Τ����Ѥ˴ؤ���褯�������Ǥ���">

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
            
                <h3 class="sub-ttl">WEB�᡼��</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./tool_mail_login.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�֥᡼�륢�ɥ쥹���ѥ���ɤ���äƤ��ޤ��פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ���</a></li>
                        <li class="faqList__item"><a href="./tool_mail_access_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�֥ۥ�����³�˼��Ԥ��ޤ����ס�����³���顼��ȯ�����ޤ����פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ���</a></li>
                        <li class="faqList__item"><a href="./tool_mail_garbled_text.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����᡼�뤬ʸ���������Ƥ��롣</a></li>
                        <li class="faqList__item"><a href="./tool_mail_login_javascript.php" class="faqList__label"><i class="ico ico_chevron-right"></i>������ܥ���򲡤��Ƥ�ȿ��������ޤ���</a></li>
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