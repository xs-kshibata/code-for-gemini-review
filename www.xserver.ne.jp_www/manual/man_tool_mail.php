<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WEB�᡼��������ˡ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å֥饦������᡼������������Ԥ����WEB�᡼��פ��󶡤��뵡ǽ�ΰ�����������ˡ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">WEB�᡼��</h3>

				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">WEB�᡼��Ȥ�</a></li>
					<li><a href="#link-b">��������ˡ</a></li>
                    <li><a href="#link-c">�Ƽﵡǽ��������ˡ</a></li>
				</ul>
				</div>

				<aside class="msg">
					<h6 class="msg_ttl"><i class="ico ico_circle"></i>���ޡ��ȥե��󡦥��֥�åȤʤɤη���ü����WEB�᡼������Ѥξ��</h6>
					<div class="msg_body">
						<p>��WEB�᡼��פϡ������Ѥ�ü���˹�碌�ƺ�Ŭ������ɽ���ؼ�ưŪ���ڤ��ؤ��ޤ���<br>
							���ޡ��ȥե��󡦥��֥�åȤʤɤη���ü����WEB�᡼������Ѥξ��ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
						<p class="mb0">�ޥ˥奢���<a href="man_tool_mail_sp.php">WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)</a>��</p>
					</div>
				</aside>
    
                <section class="section">
                	<a id="whats" name="whats"></a>
                    <h4 class="section_ttl" id="link-a">WEB�᡼��Ȥ�</h4>
                    <div class="section_body">
                        <p>WEB�᡼��ϥ֥饦������Ѥ��ƥ᡼���������ʤɤ�Ԥ������ƥ�Ǥ���</p>
                    </div>
                </section>
                
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-b">��������ˡ</h4>
                    <div class="section_body">
                        <p>��������˻��Ѥ������ϰʲ��Ǥ���</p>
                        <p>���᡼�륢�ɥ쥹<br>
                        ���᡼�륢�ɥ쥹�����������ꤷ���᡼��ѥ����</p>

                        <p>��WEB�᡼��ϥ᡼�륢�ɥ쥹ñ�̤ǥ����󤬲�ǽ�Ǥ���<br>
                        �������С���������Ȥ�ɥᥤ��ñ�̤Υ�����ϤǤ��ޤ���</p>
                        <p>WEB�᡼��Υ�����ե�����������󤷤Ƥ���������</p>
                        <p> ��WEB�᡼�� ������URL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                    </div>
                </section>
                <section class="section">
                	<a id="webmail" name="webmail"></a>
                    <h4 class="section_ttl" id="link-c">�Ƽﵡǽ��������ˡ</h4>
                    <div class="border border--gray mt30">
                        <p class="link mb0"><a href="man_tool_mail_old.php">��WEB�᡼��򤪻Ȥ������Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                    </div>
                    <div class="section_body">
                        
                    <p>�����󤹤�ȡ��������̤�ɽ������ޤ���</p>
						<p><img class="img" src="../img/manual/man_tool_mail_panel_1.png?date=250331" alt="WEB�᡼��Υ����꡼�󥷥�å�"></p>
                        <aside class="msg msg_caution">
                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��WEB�᡼��פ򥯥�å���֥ۥ�����³�˼��Ԥ��ޤ����פ�ɽ������Ƥ��ޤ����</h4>
                                <div class="msg__body">
                                    <p>��������Ƥ���᡼�륢�ɥ쥹�����������С��򻲾Ȥ��Ƥ��ʤ���ǽ��������ޤ���<br>
                                        �ܺ٤ˤĤ��Ƥϰʲ��򤴳�ǧ����������</p>
                                    <p>�褯������䡧<span class="link"><a href="../support/faq/tool_mail_access_error.php">�֥ۥ�����³�˼��Ԥ��ޤ����ס�����³���顼��ȯ�����ޤ����פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ���</a></span></p>
                                </div>
                            </aside>
                        <p>��WEB�᡼��˥����󤹤�פ򥯥�å�����ȡ�����Ȣ��ɽ������ޤ���</p>
                        <dl class="dl">
                            <dt><i class="ico ico--squareFill"></i>�᡼�륯�饤����ȤˤĤ���</dt>
                            <dd>
                                <p>�᡼�륯�饤����Ȥλ��ͤˤĤ��Ƥϲ����ޥ˥奢��򤴻��Ȥ���������</p>
                                <a href="https://cloudmail.xserver.ne.jp/manual/xserver" target="_blank" class="btn btn_white">�᡼�륯�饤����ȥޥ˥奢�� <i class="ico ico_new-window"></i></a>
                            </dd>
                        </dl>
                    </div>
                </section>

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