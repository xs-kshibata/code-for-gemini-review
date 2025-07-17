<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼��ѥͥ�������ˡ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å᡼�륢������ȤΥѥ���ɡ�ž������䡢Web�᡼��ؤΥ�����ʤɤ�Ԥ��ִ����ѥͥ�פΤ�����Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼��ѥͥ�</h3>

				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">�᡼��ѥͥ�Ȥ�</a></li>
					<li><a href="#link-b">��������ˡ</a>
						<ul>
							<li><a href="#link-b01">����ǧ�ڡ�reCAPTCHAǧ�ڡˤˤĤ���</a></li>
							<li><a href="#link-b02">�֥����󤹤�ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</a></li>
						</ul>
					</li>
					<li><a href="#link-c">������ˡ</a>
						<ul>
							<li><a href="#link-c01">WEB�᡼����̤ؤΥ�����</a></li>
							<li><a href="#link-c02">�ѥ�����ѹ�</a></li>
							<li><a href="#link-c03">ž������</a></li>
						</ul>
					</li>
				</ul>
				</div>
    
                <section class="section">
                	<a id="whats" name="whats"></a>
                    <h4 class="section_ttl" id="link-a">�᡼��ѥͥ�Ȥ�</h4>
                    <div class="section_body">
                        <p>�᡼�륢������ȤΥѥ�����ѹ��䡢WEB�᡼��ʢ��ˤؤΥ�����ʤɤ�Ԥ������ѥͥ�Ǥ���<br>
                            ��WEB�᡼��ϥ֥饦������Ѥ��ƥ᡼���������ʤɤ�Ԥ������ƥ�Ǥ���</p>
                    </div>
                </section>
                
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-b">��������ˡ</h4>
                    <div class="section_body">
                        <p>����URL���᡼��ѥͥ�ؤΥ����󤬲�ǽ�Ǥ���<br>
                        �᡼�륢�ɥ쥹�ȥ᡼�륢�ɥ쥹�������ˤ���ᤤ���������ѥ���ɤǥ�����򤪻����������</p>
                        <p><i class="ico ico_square-fill"></i>�᡼��ѥͥ롡������URL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                    </div>
					<h5 id="link-b01" class="block_ttl">����ǧ�ڡ�reCAPTCHAǧ�ڡˤˤĤ���</h5>
					<div class="section_body">
						<p>
							���Ȥ��δĶ��䥢�������������ˤ�äơ�����ǧ�ڡ�reCAPTCHAǧ�ڡˤ�ɽ��������礬����ޤ���<br>
							������ɽ�����줿���ϡ����̾�����ɽ�������������ƤˤĤ��Ƥ������򤪴ꤤ�������ޤ���
						</p>
						<p>����ǧ��(reCAPTCHAǧ��)������</p>
						<p><img class="img" src="../img/manual/man_tool_server_2.png" alt="reCAPTCHA���̤���"></p>
					</div>

					<h5 id="link-b02" class="block_ttl">�֥����󤹤�ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</h5>
					<div class="section_body">
						<p>
							�ʲ��Υ����Ȥ��Ф���JavaScript��̵���ˤʤäƤ����硢�����󤬤Ǥ��ޤ���</br>
							https://*.xserver.ne.jp</br>
							https://www.google.com</br>
							https://www.gstatic.com</br>
							</br>
							JavaScript��ͭ���ʾ��֤ˤ��Ƥ�����٥ڡ������ɤ߹��ߡ�������򤪻����������
						</p>
					</div>
                </section>
                
                <section class="section">
                	<a id="webmail" name="webmail"></a>
                    <h4 class="section_ttl" id="link-c">������ˡ</h4>
                    <div class="section_body">
                        <p>�����󤹤�ȡ��������̤�ɽ������ޤ���</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_panel_1.png?date=250331" alt="�᡼��ѥͥ�Υ����꡼�󥷥�å�"></p>
                        
                        <p>�᡼��ѥͥ�Ǥϰʲ������Ԥ��ޤ���</p>
                        <div class="serialblock mt20">
                            <section class="block">
                                <h4 class="block_ttl" id="link-c01">WEB�᡼����̤ؤΥ�����</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_2.png?date=250331" class="img" alt="WEB�᡼����̤ؤΥ�����"></p>
                                    <p>�֥�����פ򥯥�å�����ȡ�WEB�᡼��إ����󤹤뤳�Ȥ��Ǥ��ޤ���<br>
                                        ������ˡ�ˤĤ��Ƥϡ�<a href="man_tool_mail.php">WEB�᡼��</a>�פ򤴳�ǧ����������</p>
                                </div>
                            </section>
                            <section class="block">
                                <h4 class="block_ttl" id="link-c02">�ѥ�����ѹ�</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_3.png?date=210706" class="img" alt="�ѥ�����ѹ�"></p>
                                    <p>�᡼�륢������ȤΥѥ���ɤ��ѹ����뤳�Ȥ��Ǥ��ޤ���<br>
                                        ���ߤΥѥ���ɤȿ������ѥ���ɤ����Ϥ����ֳ�ǧ����ע��֥ѥ���ɤ��ѹ�����פȥ���å����Ƥ���������</p>
                                </div>
                            </section>

                            <section class="block">
                                <h4 class="block_ttl" id="link-c03">ž������</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_4.png?date=210705" class="img" alt="ž������"></p>
                                    <p>ž����᡼�륢�ɥ쥹������䡢�᡼��ܥå��������꤬�Ǥ��ޤ���</p>
                                    <dl class="dl">
                                        <dt>�᡼��ܥå�������</dt>
                                        <dd>ž������ݤˡ�ž�����Υ᡼�륢�ɥ쥹�˼����᡼���Ĥ����Ĥ��ʤ��������꤬�Ǥ��ޤ���<br>
                                            ���ֻĤ��ʤ��פ����ꤷ����硢ž�����Υ᡼�륢�ɥ쥹�Ǥϥ᡼��γ�ǧ���Ǥ�����ž����ˤΤߥ᡼�뤬�Ϥ����ȤȤʤ�ޤ������餫���ᤴ��դ���������
                                        </dd>
                                        <dt>ž����᡼�륢�ɥ쥹�ɲ�</dt>
                                        <dd>ž����Ȥʤ�᡼�륢�ɥ쥹���ɲä��ޤ���</dd>
                                        <dt>ž����᡼�륢�ɥ쥹����</dt>
                                        <dd>ž����Ȥ������ꤷ���᡼�륢�ɥ쥹�γ�ǧ��������Ǥ��ޤ���</dd>
                                    </dl>
                                </div>
                            </section>
                        </div>
                        
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