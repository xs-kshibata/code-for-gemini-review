<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�����С���ž��Ԥ�ʣ����Web�����Ȥΰ�ž��Ȥ���ꤹ�뤳�ȤϤǤ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ʣ����Web�����ȤˤĤ��Ƥ⡢�����С���ž��ԤΤ����Ѥ���ǽ�Ǥ�������Ū�ˤ�1�ɥᥤ���1�����ȤȤ���1��Υ����С���ž��ԤȤ��ƾ���ޤ���">

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
            
                <h3 class="sub-ttl">�����С���ž��Ԥ�ʣ����Web�����Ȥΰ�ž��Ȥ���ꤹ�뤳�ȤϤǤ��ޤ�����</h3>
                
                <p>ʣ����Web�����ȤˤĤ��Ƥ⡢�����С���ž��ԤΤ����Ѥ���ǽ�Ǥ���</p>
                <p>����Ū�ˤ�1�ɥᥤ���1�����ȤȤ���1��Υ����С���ž��ԤȤ��ƾ���ޤ���</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support_server_daiko.php" class="btn btn_gray">�֥����С���ž��ԤˤĤ��ơפΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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