<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�Ƽ�ѥ���ɤκ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�XServer��������ȡס֥����С��ѥͥ�ʥᥤ��FTP��������ȡˡס�Web�᡼��פʤɤΥѥ���ɤ�˺�줿���κ�������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>�ޥ˥奢��</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">�Ƽ�ѥ���ɤκ�����</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�Ƽ�ѥ���ɤκ�����ˤĤ���</a>
                        <ul>
                            <li><a href="#link-a01">XServer��������ȥѥ����</a></li>
                            <li><a href="#link-a02">�����С��ѥ����</a></li>
                            <li><a href="#link-a03">�᡼��ѥ����</a></li>
                            <li><a href="#link-a04">����FTP��������ȤΡ�FTP�ѥ���ɡ�</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_missing.php">�ѥ��������ʶ���˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�Ƽ�ѥ���ɤκ�����ˤĤ���</h4>
                    <div class="section_body">
                        <p>�������ӥ��Ǥ����Ѥγƥ�������Ȥ��б�����ѥ���ɾ��󤬤������ξ�硢�ʲ��μ��Ǥ�����Ǥ�դΥѥ���ɤ��ѹ����뤳�Ȥ��Ǥ��ޤ���</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">XServer��������ȥѥ����</h5>
                            <div class="block_body">
                                <p>�����ͤΤ���Ͽ����γ�ǧ���ѹ��������Ѵ��¤γ�ǧ�ʤɤ��Ԥ���XServer��������ȤΥ������ɬ�פʡ�XServer��������ȥѥ���ɡפϡ�<a href="<?php print $REISSUE_INFO_URL; ?>">��XServer��������ȥѥ���ɡ׺�����ե�����</a>�������꤬��ǽ�Ǥ���</p>
                                <p>XServer���������ID�ʤޤ�����Ͽ�᡼�륢�ɥ쥹�ˤ����Ϥ���������<br>
                                ����Ͽ�Υ᡼�륢�ɥ쥹���غ������ѥ��ɥ쥹�����ꤤ�����ޤ���<br>
                                �᡼��˵��ܤΰ���˱�äƤ���³������������</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">�����С��ѥ���ɡʥᥤ��FTP��������ȥѥ���ɡ�</h5>
                            <div class="block_body">
                                <p>
                                    �����С��ؤ�FTP��³�䥵���С��˴ؤ���Ƽ������Ԥ��֥����С��ѥͥ�פΥ���������Ѳ�ǽ�ʡ֥����С��ѥ���ɡסʥᥤ��FTP��������ȥѥ���ɡˤϡ�
                                    <a href="<?php print $REISSUE_SERVER_URL; ?>">�֥����С��ѥ���ɡ׺�����ե�����</a>���ѥ���ɤκ����꤬��ǽ�Ǥ���
                                </p>
                                <p>����Ͽ�᡼�륢�ɥ쥹�ޤ���XServer���������ID�ȥ����С�ID�����Ϥ���������<br>
                                    ����Ͽ�Υ᡼�륢�ɥ쥹���غ������ѥ��ɥ쥹�����ꤤ�����ޤ���<br>
                                    �᡼��˵��ܤΰ���˱�äƤ���³������������
                                </p>
                                <p>��XServer���������ID�ʤ���Ͽ�᡼�륢�ɥ쥹��/ XServer��������ȥѥ���ɤǤ⥵���С��ѥͥ�˥����󤹤뤳�Ȥ���ǽ�Ǥ���</p>
                                <p class="note">�������С��ѥͥ�Υ������ѥѥ���ɤȥᥤ��FTP��������Ȥ�FTP�ѥ���ɤ�Ʊ��Ǥ���<br>
                                �������Ԥ��ȥᥤ��FTP��������Ȥξ�����碌���ѹ�����ޤ���</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">�᡼��ѥ����</h5>
                            <div class="block_body">
                                <p>�����С��ѥͥ��<a href="man_mail_add.php">�᡼�륢�����������</a>�פ�ꡢ�����᡼�륢������ȤΥѥ�����ѹ���ԤäƤ���������</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">����FTP��������ȤΡ�FTP�ѥ���ɡ�</h5>
                            <div class="block_body">
                                <p>�����С��ѥͥ��<a href="man_ftp_add.php">����FTP�������������</a>�פ�ꡢ����FTP��������ȤΥѥ�����ѹ���ԤäƤ���������</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                
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
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>