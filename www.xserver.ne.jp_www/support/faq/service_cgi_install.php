<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>CGI��Ȥ��ˤϤɤ������֤���Ф����Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ɥᥤ��̾/public_html �ʲ��Ǥ���С��ɤ��Ǥ����ꤴ�����ޤ��� cgi-bin �ʲ��Ǥʤ����ư��ʤ����Ȥ��ä����ȤϤ���ޤ���ΤǤ��¿�����������">

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
            
                <h3 class="sub-ttl">CGI��Ȥ��ˤϤɤ������֤���Ф����Ǥ�����</h3>

                <p>�ɥᥤ��̾/public_html �ʲ��Ǥ���С��ɤ��Ǥ����ꤴ�����ޤ���</p>
                <p>cgi-bin �ʲ��Ǥʤ����ư��ʤ����Ȥ��ä����ȤϤ���ޤ���ΤǤ��¿�����������</p>

                

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_cgi.php" class="btn btn_gray">��CGI�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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