<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ѥͥ�������ˡ |
	<?php print $SITE_TITLE; ?>
</title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åɥᥤ��γƼ�����ʥ͡��ॵ���С��������Whois������ѹ��ʤɡˤ˴ؤ�������ġ���֥ɥᥤ��ѥͥ�פ��󶡤��뵡ǽ�ΰ�����������ˡ�˴ؤ��뤴����Ǥ���">

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

							<h3 class="sub-ttl">�ɥᥤ��ѥͥ�</h3>
								<div class="toc-list">
								<p class="toc-list--head">�ܼ�</p>
								<ul class="toc-list--body">
									<li><a href="#link-a">�ɥᥤ��ѥͥ�Ȥ�</a></li>
									<li><a href="#link-b">����������ˡ</a></li>
									<li><a href="#link-c">��ǽ����</a>
										<ul>
											<li><a href="#link-c01">Whois����</a></li>
											<li><a href="#link-c02">�͡��ॵ���С�����</a></li>
											<li><a href="#link-c03">�쥸���ȥ��å�����</a></li>
											<li><a href="#link-c04">DNS�쥳����</a></li>
										</ul>
									</li>
								</ul>
								</div>

							<ul class="link-box">
								<li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_domain.php">�ɥᥤ��ѥͥ�˴ؤ���֤褯��������</a>
								</li>
							</ul>

							<section class="section">
								<h4 class="section_ttl" id="link-a">�ɥᥤ��ѥͥ�Ȥ�</h4>
								<div class="section_body">
									<p>�ɥᥤ��ѥͥ�Ǥϡ��ȼ��ɥᥤ��Υ͡��ॵ���С��������Whois������ѹ���Ԥ����Ȥ��Ǥ��ޤ���</p>
									<p><img class="img" src="../img/manual/man_tool_domain_2.png?date=20181217" alt="�ɥᥤ��ѥͥ�Υ����꡼�󥷥�å�">
									</p>
								</div>
							</section>

							<section class="section">
								<h4 class="section_ttl" id="link-b">����������ˡ</h4>
								<div class="section_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�إ����󤷡��ַ������ > �ɥᥤ��פ�ꡢ�֥ɥᥤ��ѥͥ�פ򥯥�å����Ƥ���������</p>
									<p><img class="img" src="../img/manual/man_domain_select_domainpanel_1.png?date=190305" alt="�ɥᥤ��ѥͥ�Υ����꡼�󥷥�å�">
									</p>
								</div>
							</section>

							<section class="section">
								<h4 class="section_ttl" id="link-c">��ǽ����</h4>
								<div class="section_body">
									<p>�ɥᥤ��ѥͥ�Ǥϲ��������Ǥ��ޤ���</p>
									
									<section class="block">
										<h5 id="link-c01" class="block_ttl">Whois����</h5>
										<div class="block_body">
											<p>�ȼ��ɥᥤ���Whois����γ�ǧ���ѹ����Ǥ��ޤ���<br>
												�ʤ���co.jp / or.jp / ne.jp / gr.jp / .ac.jp / .ed.jp �ɥᥤ��ξ�硢�ɥᥤ��ѥͥ뤫���ѹ����Ǥ��ޤ���<br>
												�ܤ����ϡ�<a href="man_domain_whois.php">Whois����</a>�򤴻��Ȥ���������</p>

												<p>ǧ�ڸ��������ˤĤ��Ƥϡ�Registrant Contact�ؤ�ǧ�ڸ��������פ���ǽ�Ǥ���<br>
												�ܤ����ϡ�<a href="man_domain_auth_key.php">ǧ�ڸ�</a>�򤴻��Ȥ���������</p>
										</div>
									</section>
									
									<section class="block">
										<h5 id="link-c02" class="block_ttl">�͡��ॵ���С�����</h5>
										<div class="block_body">
											<p>����������Υ͡��ॵ���С��γ�ǧ���ѹ����Ǥ��ޤ���</p>
											<p>�ܤ����ϡ�<a href="man_domain_namesever_setting.php">�͡��ॵ���С�������</a>�򤴻��Ȥ���������</p>
										</div>
									</section>
									
									
									<section class="block">
										<h5 id="link-c03" class="block_ttl">�쥸���ȥ��å�����</h5>
										<div class="block_body">
											<p>�쥸���ȥ��å������ꡦ�������ǽ�Ǥ���<br> �ʤ����쥸���ȥ��å���������ˤϡ��оݥɥᥤ��β��������Ԥ��Ƥ���ɬ�פ�����ޤ���
											</p>
											<p>�ܤ����ϡ�<a href="man_domain_register_lock.php">�쥸���ȥ��å�</a>�򤴻��Ȥ���������</p>
										</div>
									</section>
	
									<section class="block">
										<h5 id="link-c04" class="block_ttl">DNS�쥳����</h5>
										<div class="block_body">
											<p>DNS�쥳���ɤ�������ɲá��ѹ�������ˤ�Ԥ����Ȥ��Ǥ��ޤ���</p>
											<p>�ܤ����ϡ�<a href="man_domain_dns_setting.php">DNS�쥳���ɤ��Խ�</a>�򤴻��Ȥ���������</p>
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