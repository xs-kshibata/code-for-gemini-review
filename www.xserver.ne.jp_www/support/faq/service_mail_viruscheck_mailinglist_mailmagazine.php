<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�᡼��󥰥ꥹ�ȡ��᡼��ޥ���������Ѥ���᡼�륢�ɥ쥹�⡢����������륹��ǽ��ͭ���Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ���ͭ���Ǥ����ʤ�������������륹��ǽ�ǥ����륹���Τ�����硢�᡼����˴�����ޤ��Τǡ��᡼��󥰥ꥹ�ȡ��᡼��ޥ�����ǽ�ˤ���Ͽ�Υ᡼�륢�ɥ쥹�������Ϥ���ޤ���">

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
            
                <h3 class="sub-ttl">�᡼��󥰥ꥹ�ȡ��᡼��ޥ���������Ѥ���᡼�륢�ɥ쥹�⡢����������륹��ǽ��ͭ���Ǥ�����</h3>

                <p>�Ϥ���ͭ���Ǥ���</p>
                <p>�ʤ�������������륹��ǽ�ǥ����륹���Τ�����硢�᡼����˴�����ޤ��Τǡ�<br>
                �᡼��󥰥ꥹ�ȡ��᡼��ޥ�����ǽ�ˤ���Ͽ�Υ᡼�륢�ɥ쥹�������Ϥ���ޤ���</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_viruscheck.php" class="btn btn_gray">�֥����륹�����å��פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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