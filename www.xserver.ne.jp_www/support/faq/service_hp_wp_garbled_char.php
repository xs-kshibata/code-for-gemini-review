<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPress�إ������������ʸ���������ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="PHP�ΥС��������ڤ��ؤ�����ǲ��������ǽ��������ޤ��������С��ѥͥ�Ρ�PHP Ver.�ڤ��ؤ��פ�ꡢPHP�ΥС�������侩�Ρ�PHP7.4.x�٤��ѹ�����ɽ������ǽ���ɤ�������ǧ����������">

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
            
                <h3 class="sub-ttl">WordPress�إ������������ʸ���������ޤ���</h3>

                <p>PHP�ΥС��������ڤ��ؤ�����ǲ��������ǽ��������ޤ���<br>
                �����С��ѥͥ�Ρ�<a href="../../manual/man_program_php_ver.php">PHP Ver.�ڤ��ؤ�</a>�פ�ꡢPHP�ΥС�������侩�Ρ�PHP7.4.x�٤��ѹ�����ɽ������ǽ���ɤ�������ǧ����������</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">��WordPress�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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