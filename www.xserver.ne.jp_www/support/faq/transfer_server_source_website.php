<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�����С���ž��˥ɥᥤ������򤹤뤳�Ȥǡ���ž����Web�����Ȥ˱ƶ����Ǥ뤳�ȤϤ���ޤ��󤫡� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ����ɥᥤ������򤷤Ƥ��ž����Web�����Ȥˤϱƶ��Ϥ���ޤ���Τǡ����¿�����������">

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
            
                <h3 class="sub-ttl">�����С���ž��˥ɥᥤ������򤹤뤳�Ȥǡ���ž����Web�����Ȥ˱ƶ����Ǥ뤳�ȤϤ���ޤ��󤫡�</h3>

                <p>�Ϥ����ɥᥤ������򤷤Ƥ��ž����Web�����Ȥˤϱƶ��Ϥ���ޤ���Τǡ����¿�����������</p>

                <p><strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="../../order/order_transfer_server.php">�����С���ž</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">�֥����С���ž�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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