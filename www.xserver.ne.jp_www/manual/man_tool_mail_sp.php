<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�) | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)</h3>
                
                <p>��WEB�᡼��פϡ������Ѥˤʤ�ü���˹�碌�ƺ�Ŭ�����줿ɽ�����ڤ��ؤ��ޤ���<br>
                Windows PC��Mac�ʤɤΥѥ�����ü����WEB�᡼������Ѥξ��ϡ��ޥ˥奢���<a href="man_tool_mail.php">WEB�᡼��</a>�פ򤴻��Ȥ���������</p>
                
				<!--<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">��������ˡ</a>
						<ul>
							<li><a href="#link-a01">�֥ۥ�����³�˼��Ԥ��ޤ����פ�ɽ������Ƥ��ޤ����</a></li>
						</ul>
                    </li>
					<li><a href="#link-b">�Ƽﵡǽ��������ˡ</a></li>
				</ul>
				</div>-->
                <div class="border border--gray mt30">
                    <p class="link mb0"><a href="man_tool_mail_sp_old.php">��WEB�᡼��򤪻Ȥ������Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                </div>
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-a">��������ˡ</h4>
                    <div class="section_body">
						<p>
							����URL���᡼��ѥͥ�ؤΥ����󤬲�ǽ�Ǥ���<br>
							�᡼�륢�ɥ쥹�ȥ᡼�륢�ɥ쥹�������ˤ���ᤤ���������ѥ���ɤǥ�����򤪻����������
						</p>
						<p>
							<i class="ico ico--squareFill"></i>�᡼��ѥͥ� ������URL<br>
							<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a>
						</p>
                        <p>�����󤹤�ȡ��������̤�ɽ������ޤ���</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_3.png?date=250331" alt="WEB�᡼��Υ����꡼�󥷥�å�"></p>
                                                
                        <p>��WEB�᡼��˥����󤹤�פ򥿥åפ���ȡ�����Ȣ��ɽ������ޤ���</p>
					</div>

					<h3 class="block_ttl" id="link-a01">�֥ۥ�����³�˼��Ԥ��ޤ����פ�ɽ������Ƥ��ޤ����</h3>
					<div class="section_body">
						<p>
							��������Ƥ���᡼�륢�ɥ쥹�����������С��򻲾Ȥ��Ƥ��ʤ���ǽ��������ޤ���<br>
							�ܺ٤ˤĤ��Ƥϰʲ��򤴳�ǧ����������
						</p>
						<p>�褯������䡧<span class="link"><a href="../support/faq/tool_mail_access_error.php">�֥ۥ�����³�˼��Ԥ��ޤ����ס�����³���顼��ȯ�����ޤ����פ�ɽ�����졢WEB�᡼��إ�����Ǥ��ޤ���</a></span></p>
					</div>

                    <dl class="dl">
                        <dt><i class="ico ico--squareFill"></i>�᡼�륯�饤����ȤˤĤ���</dt>
                        <dd>
                            <p>�᡼�륯�饤����Ȥλ��ͤˤĤ��Ƥϲ����ޥ˥奢��򤴻��Ȥ���������</p>
                            <a href="https://cloudmail.xserver.ne.jp/manual/xserver" target="_blank" class="btn btn_white">�᡼�륯�饤����ȥޥ˥奢�� <i class="ico ico_new-window"></i></a>
                        </dd>
                    </dl>

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