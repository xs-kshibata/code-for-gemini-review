<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�᡼�륢������ȤΥѥ���ɤ��狼��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�᡼�륢������Ȥ���������ݤˤ����Ȥ����ꤷ���ѥ���ɤǤ����������ꤵ��Ƥ���ѥ���ɤ��ǧ���뤳�ȤϤǤ��ޤ��󡣤������ʾ��ϰʲ��ޥ˥奢��򤴻��Ȥ����������᡼�륢������ȤΥѥ���ɤ��ѹ����Ƥ���������">

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
            
                <h3 class="sub-ttl">�᡼�륢������ȤΥѥ���ɤ��狼��ޤ���</h3>

                <p>
                    �᡼�륢������Ȥ���������ݤˤ����Ȥ����ꤷ���ѥ���ɤǤ���<br>
                    �������ꤵ��Ƥ���ѥ���ɤ��ǧ���뤳�ȤϤǤ��ޤ���<br>
                    �������ʾ��ϰʲ��ޥ˥奢��򤴻��Ȥ����������᡼�륢������ȤΥѥ���ɤ��ѹ����Ƥ���������
                </p>
                <p><strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="../../manual/man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a></p>
                <p class="note">
                    ���ѥ���ɤˤ��������꤬������ϡ����оݤΥ᡼�륢�ɥ쥹�פȡֿ�������Τ���ѥ���ɡפ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank" >WEB�᡼��</a>�ؤΥ�����򤪻����������<br>
                    WEB�᡼��˥����󤬤Ǥ���С����Ϥ��줿�ѥ���ɤ��������ꤵ��Ƥ���ѥ���ɤǤ���
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">�֥᡼��ȥ�֥�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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