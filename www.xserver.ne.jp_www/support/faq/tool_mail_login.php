<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�֥᡼�륢�ɥ쥹���ѥ���ɤ���äƤ��ޤ��פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�᡼�륢�ɥ쥹�ޤ��ϥ᡼��ѥ���ɤ����Ϥ˸�꤬�����ǽ��������ޤ���WEB�᡼��ϰʲ��ξ���ǥ����󤷤Ƥ������������������᡼�륢�ɥ쥹�Ȥ����Ȥ����ꤵ�줿�᡼��ѥ���ɡ��᡼��ѥ���ɤ������ʾ��ϡ֥᡼�륢������ȤΥѥ��...">

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
            
                <h3 class="sub-ttl">�֥᡼�륢�ɥ쥹���ѥ���ɤ���äƤ��ޤ��פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ���</h3>

                <p>�᡼�륢�ɥ쥹�ޤ��ϥ᡼��ѥ���ɤ����Ϥ˸�꤬�����ǽ��������ޤ���<br>
                WEB�᡼��ϰʲ��ξ���ǥ����󤷤Ƥ���������
                <ul class="ul">
                    <li>���������᡼�륢�ɥ쥹</li>
                    <li>�����Ȥ����ꤵ�줿�᡼��ѥ����</li>
                </ul>
                </p>
                <p>�᡼��ѥ���ɤ������ʾ���<a href="../../manual/man_mail_change_password.php">�֥᡼�륢������ȤΥѥ�����ѹ���</a>��Ԥä������ǥ�����򤪻����������</p>

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