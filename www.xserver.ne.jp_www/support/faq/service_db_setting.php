<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>MySQL������Ϥɤ�����Ԥ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ǡ����١����κ������ǡ����١����桼���κ������桼���ؤθ�����Ϳ�ϥ����С��ѥͥ�Ρ�MySQL����פ���Ԥ��ޤ����ơ��֥�����ǡ�����ľ�ܤ����ϡ������С��ѥͥ�Ρ�phpMyAdmin�פ�������ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">MySQL������Ϥɤ�����Ԥ��ޤ�����</h3>

                <p>�ǡ����١����κ������ǡ����١����桼���κ������桼���ؤθ�����Ϳ�ϥ����С��ѥͥ�Ρ�<a href="../../manual/man_db_setting.php">MySQL����</a>�פ���Ԥ��ޤ���</p>
                <p>�ơ��֥�����ǡ�����ľ�ܤ����ϡ������С��ѥͥ�Ρ�<a href="../../manual/man_db_myadmin.php">phpMyAdmin</a>�פ�������ǽ�Ǥ���</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_db.php" class="btn btn_gray">�֥ǡ����١����פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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