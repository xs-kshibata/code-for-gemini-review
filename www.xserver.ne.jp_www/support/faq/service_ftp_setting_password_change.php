<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTP�Υѥ���ɤ��ѹ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ѥ���ɤ��ѹ�����ݤˡ��֥ᥤ��FTP��������ȡפȡ֥���FTP��������ȡפǡ��ѹ���ˡ���ۤʤ�ޤ��Τǡ������򤴻��Ȳ����������ᥤ��FTP��������Ȥξ��ĥᥤ��FTP��������ȤΥѥ���ɤϥ����С��ѥͥ�إ����󤹤�ݤΥѥ���ɤ�Ʊ���">

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
            
                <h3 class="sub-ttl">FTP�Υѥ���ɤ��ѹ���������</h3>

                <p>�ѥ���ɤ��ѹ�����ݤˡ��֥ᥤ��FTP��������ȡפȡ֥���FTP��������ȡפǡ��ѹ���ˡ���ۤʤ�ޤ��Τǡ������򤴻��Ȳ�������</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�ᥤ��FTP��������Ȥξ��</dt>
                    <dd>
                        <p class="mb0">�ᥤ��FTP��������ȤΥѥ���ɤϥ����С��ѥͥ�إ����󤹤�ݤΥѥ���ɤ�Ʊ��Ǥ���<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥ѥ�����ѹ��פ���ѹ����Ƥ���������</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>����FTP��������Ȥξ��</dt>
                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥���FTP�������������פ��ѥ���ɤ��ѹ�����ǽ�Ǥ���</dd>
                </dl>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_setting.php" class="btn btn_gray">�֥ե�����ž��(FTP)��������ˡ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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