<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ܴɤκݤˡ��ȼ��ɥᥤ��ʵ�̵����ŵ�����Ѥ�����ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��XServer��������ȡפإ����󤤤������ֳƼ���ŵ���������ߡפ�ꤪ�������ߤ��������������С��Τ����������ȼ��ɥᥤ��ʵ�̵����ŵ�Τ��������ߤ��Ǥ��ޤ��󡣥����С�����Τ���ʧ���ʤɡ�ɬ�פʾ����������������Ǽ�³����ԤäƤ���������">

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

                <h3 class="sub-ttl">�ɥᥤ��ܴɤκݤˡ��ȼ��ɥᥤ��ʵ�̵����ŵ�����Ѥ�����ˡ�򶵤��Ƥ���������</h3>

                <p>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a><i class="ico ico_window"></i>�פإ����󤤤������ֳƼ���ŵ���������ߡפ�ꤪ�������ߤ���������</p>
                <p>�����С��Τ����������ȼ��ɥᥤ��ʵ�̵����ŵ�Τ��������ߤ��Ǥ��ޤ���<br>�����С�����Τ���ʧ���ʤɡ�ɬ�פʾ����������������Ǽ�³����ԤäƤ���������</p>
                <p><strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="<?php print $SITE_URL; ?>manual/man_order_present_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_domain.php" class="btn btn_gray">�֥ɥᥤ��ܴɡפΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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