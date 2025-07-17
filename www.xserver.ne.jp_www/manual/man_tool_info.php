<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServer���������������ˡ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä�����˴ؤ�������ġ����XServer��������ȡפ��󶡤��뵡ǽ�ΰ�����������ˡ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">XServer���������</h3>

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">XServer��������ȤȤ�</a></li>
                        <li><a href="#link-b">��������ˡ</a>
							<ul>
								<li><a href="#link-b01">����ǧ�ڡ�reCAPTCHAǧ�ڡˤ�ɽ�����줿���</a></li>
								<li><a href="#link-b02">�֥�����ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</a></li>
							</ul>
						</li>
                        <li><a href="#link-c">XServer��������ȴ���</a>
                            <ul>
                                <li><a href="#link-c01">��Ͽ�����ǧ���Խ�</a></li>
                                <li><a href="#link-c02">�ѥ�����ѹ�</a></li>
                                <li><a href="#link-c03">��������Ȥ�����</a></li>
								<li><a href="#link-c04">��ư��������</a></li>
								<li><a href="#link-c05">�ץ�ڥ��ɴ���</a></li>
								<li><a href="#link-c06">ͧã�Ҳ�</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_info.php">XServer��������Ȥ˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XServer��������ȤȤ�</h4>
                    <div class="section_body">
                        <p>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�ϡ����å��������С���ޤ�XServer��Ϣ�����ӥ��δ����˶��̤��ƻ��ѤǤ��륢������ȤǤ���<br>�����������뤳�Ȥǡ������ͤΤ���Ͽ����γ�ǧ���ѹ��������ɼ�ư��������ʤɤ�Ԥ����Ȥ��Ǥ��ޤ���
                        </p>

                        <p><img class="img" src="../img/manual/man_tool_info_1.png?date=20230130" alt="XServer��������ȤΥ����꡼�󥷥�å�"></p>
                        <!-- <p>XServer��������ȤǤϲ��������Ǥ��ޤ���</p> -->
                    </div>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">��������ˡ</h4>
                    <div class="section_body">
                        <p>����URL���XServer��������ȤؤΥ����󤬲�ǽ�Ǥ���<br>
                            �᡼�륢�ɥ쥹�ʤ⤷���ϡ�XServer���������ID�ˤȥѥ���ɤǥ�����򤪻����������</p>
                        <p><i class="ico ico_square-fill"></i>XServer��������� ������URL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>

						<section class="block mt50">
							<h5 id="link-b01" class="block_ttl">����ǧ�ڡ�reCAPTCHAǧ�ڡˤ�ɽ�����줿���</h5>
							<div class="block_body">
								<p>
									���Ȥ��δĶ��䥢�������������ˤ�äơ�����ǧ�ڡ�reCAPTCHAǧ�ڡˤ�ɽ��������礬����ޤ���<br>
									������ɽ�����줿���ϡ����̾�����ɽ�������������ƤˤĤ��Ƥ������򤪴ꤤ�������ޤ���
								</p>
								<p>
									����ǧ��(reCAPTCHAǧ��)������
								</p>
								<p><img class="img" src="../img/manual/man_tool_info_2.png" alt="reCAPTCHA���̤���"></p>
							</div>
						</section>

						<section class="block mt50">
							<h5 id="link-b02" class="block_ttl">�֥�����ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</h5>
							<div class="block_body">
								<p>
									�ʲ��Υ����Ȥ��Ф���JavaScript��̵���ˤʤäƤ����硢�����󤬤Ǥ��ޤ���<br>
								</p>
								<p>
									https://*.xserver.ne.jp<br>
									https://www.google.com<br>
									https://www.gstatic.com<br>
								</p>
								<p>JavaScript��ͭ���ʾ��֤ˤ��Ƥ�����٥ڡ������ɤ߹��ߡ�������򤪻����������</p>
							</div>
						</section>
                    </div>
                </section>
                <section class="section">
                    <h4 class="section_ttl" id="link-c">XServer��������ȴ���</h4>
                    <div class="section_body">
                        <p>���̱���Υ桼����̾�򥯥�å�����ɽ�����줿�Ƽ��˥塼���饢���������뤳�Ȥ��Ǥ��ޤ���</p>
                        <p class="mb40"><img class="img" src="../img/manual/man_tool_info_3.png?date=240627" alt="XServer��������Ȥؤ�������ˡ"></p>

                        <section class="block">
                            <h5 id="link-c01" class="block_ttl">��Ͽ�����ǧ���Խ�</h5>
                            <div class="block_body">
                                <p>�᡼�륢�ɥ쥹�������ֹ�ʤɤΤ����;���γ�ǧ���Խ����Ǥ��ޤ�����������ȤΥ������ƥ������ʳ�ǧ�ڡˤ⤳����������Ǥ��ޤ���<br>
                                �ܤ����ϡ�<a href="man_order_change_id.php">��Ͽ����ˤĤ���</a>�򤴻��Ȥ���������</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-c02" class="block_ttl">�ѥ���ɤ��ѹ�</h5>
                            <div class="block_body">
                                <p>XServer��������ȤؤΥ�����˻��Ѥ���ѥ���ɤ��ѹ����Ǥ��ޤ���</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-c03" class="block_ttl">��������Ȥ�����</h5>
                            <div class="block_body">
                                <p>XServer��������ȤȤ�����ɳ�Ť�������򡢻����XServer��������Ȥ����礹�뤳�Ȥ��Ǥ��ޤ���<br>
                                �ܤ����ϡ�<a href="man_order_user_merge.php">��������ȡ����������</a>�򤴻��Ȥ���������</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c04" class="block_ttl">��ư��������</h5>
                            <div class="block_body">
                                <p>����Τ���ʧ���ˤĤ��ơ����쥸�åȥ����ɤ⤷���ϡ�����ʧ���ʥڥ��ǥ��ˡ��ץ�ڥ��ɤˤ�뼫ư�����򤴷��󤴤Ȥ�����Ǥ��ޤ���</p>
								<p>�ܤ����ϡ�<a href="man_order_pay_method_autopay.php">��ư��������</a>�򤴻��Ȥ���������</p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 id="link-c05" class="block_ttl">�ץ�ڥ��ɴ���</h5>
                            <div class="block_body">
                                <p>�ץ�ڥ��ɤλĹ��ǧ�����㡼�����Ǥ��ޤ���</p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 id="link-c06" class="block_ttl">ͧã�Ҳ�</h5>
                            <div class="block_body">
                                <p>���Τ�礤�����ʤɤ򤴾Ҳ𤤤��������󽷤�ȯ�������ͧã�Ҳ�ץ����פǤ���</p>
								<p>�ܤ����ϡ�<a href="<?php print $SITE_URL; ?>friend.php" target="_blank">ͧã�Ҳ�ץ����</a>�򤴻��Ȥ���������</p>
                            </div>
                        </section>

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