<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�����С��ѥͥ�˥�����Ǥ��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServer���������ID�ޤ��ϥѥ���ɤ˸�꤬�����ǽ��������ޤ����ѥ���ɤ��������ʾ��ϡ���XServer��������ȥѥ���ɡ׺�����ե�����������꤬��ǽ�Ǥ�������Ͽ�᡼�륢�ɥ쥹�ޤ���XServer���������ID�����Ϥ��ƥѥ���ɤΡ�">

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
            
                <h3 class="sub-ttl">�����С��ѥͥ�˥�����Ǥ��ޤ���</h3>
                
                <p>XServer���������ID�ޤ��ϥѥ���ɤ˸�꤬�����ǽ��������ޤ���</p>
                <p>
                    �ѥ���ɤ��������ʾ��ϡ�<a href="<?php print $REISSUE_INFO_URL; ?>">��XServer��������ȥѥ���ɡ׺�����ե�����</a>�������꤬��ǽ�Ǥ���<br>
                    ����Ͽ�᡼�륢�ɥ쥹�ޤ���XServer���������ID�����Ϥ��ƥѥ���ɤκ������ԤäƤ���������
                </p>
                <p class="note">
                    ���ʤ��������С��ѥͥ�ؤϥᥤ��FTP��������ȤΥ桼����̾�ȥѥ���ɡʥ����С�ID�ȥ����С��ѥ���ɡˤǤ�����󤹤뤳�Ȥ���ǽ�Ǥ���
                    �ᥤ��FTP��������ȥѥ���ɤ��������ʾ��ϡ�<a href="<?php print $REISSUE_SERVER_URL; ?>">�֥����С��ѥ���ɡ׺�����ե�����</a>�������꤬��ǽ�Ǥ���
                </p>

                 <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_tool_server.php" class="btn btn_gray">�֥����С��ѥͥ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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