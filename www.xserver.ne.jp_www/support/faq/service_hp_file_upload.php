<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ե�����򥢥åץ��ɤ��뤿��ˤϤɤ�����Ф����Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTP���եȤޤ��ϥե�����ޥ͡���������Ѥ���������FTP���եȤ����Ѥ��������ݤ�FTP�ۥ��Ȥ����꤬ɬ�פȤʤ�ޤ����ܺ٤�������ˡ������ޥ˥奢���������������">

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
            
                <h3 class="sub-ttl">�ե�����򥢥åץ��ɤ��뤿��ˤϤɤ�����Ф����Ǥ�����</h3>

                <p>FTP���եȤޤ���<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">�ե�����ޥ͡�����</a>�����Ѥ���������<br>
                FTP���եȤ����Ѥ��������ݤ�FTP�ۥ��Ȥ����꤬ɬ�פȤʤ�ޤ���<br>
                �ܺ٤�������ˡ��<a href="../../manual/man_ftp_setting.php">����ޥ˥奢��</a>��������������</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp.php" class="btn btn_gray">��Web�����ȡ�WordPress�ε�ǽ�����͡פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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