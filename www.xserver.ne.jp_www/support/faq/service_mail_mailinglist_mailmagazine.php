<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�᡼��󥰥ꥹ�ȡ��᡼��ޥ����������Ǥ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ��������Ѳ�ǽ�Ǥ����Ƶ�ǽ�ξܺ٤ϴ�Ϣ�ޥ˥奢���������������">

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
            
                <h3 class="sub-ttl">�᡼��󥰥ꥹ�ȡ��᡼��ޥ����������Ǥ��ޤ�����</h3>

                <p>�Ϥ��������Ѳ�ǽ�Ǥ���</p>
                <p>�Ƶ�ǽ�ξܺ٤Ϥ������������������</p>
                <p>
                    <a class="btn btn_white mr5" href="../../manual/man_mail_mailinglist.php">�᡼��󥰥ꥹ�ȤˤĤ���<i class="ico ico_chevron-right"></i></a>
                    <a class="btn btn_white" href="../../manual/man_mail_mailmagazine.php">�᡼��ޥ�����ˤĤ���<i class="ico ico_chevron-right"></i></a>
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail.php" class="btn btn_gray">�֥᡼��ε�ǽ�����͡פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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