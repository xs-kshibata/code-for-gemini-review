<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>������ܥ���򲡤��Ƥ�ȿ��������ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���Ȥ��Υ֥饦����JavaScript��̵���ȤʤäƤ����ǽ�����������ޤ����ʲ��Υ����Ȥ��Ф���JavaScript��ͭ���ʾ��֤ˤ��Ƥ�����٥ڡ������ɤ߹��ߡ�������򤪻��������������https://*.xserver.ne.jp��">

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
            
                <h3 class="sub-ttl">������ܥ���򲡤��Ƥ�ȿ��������ޤ���</h3>

                <p>���Ȥ��Υ֥饦����JavaScript��̵���ȤʤäƤ����ǽ�����������ޤ���</br>
                    �ʲ��Υ����Ȥ��Ф���JavaScript��ͭ���ʾ��֤ˤ��Ƥ�����٥ڡ������ɤ߹��ߡ�������򤪻����������</br>
                    https://*.xserver.ne.jp</br>
                    https://www.google.com</br>
                    https://www.gstatic.com</br>
                </p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_mail.php" class="btn btn_gray">��WEB�᡼��פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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