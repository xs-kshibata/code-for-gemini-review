<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメインパネル利用方法 |
	<?php print $SITE_TITLE; ?>
</title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ドメインの各種設定（ネームサーバーの設定やWhois情報の変更など）に関する管理ツール「ドメインパネル」で提供する機能の一覧と利用方法に関するご案内です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

	<div id="wrapper">

		<?php include("../header2.php"); ?>

		<div id="toggle-target">

			<div class="contents">

				<section class="main holder-sml" role="main">

					<header class="main-header">
						<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
						<?php include("subnav.php"); ?>
					</header>
					<!-- /.main-header -->

					<?php include("../topicpath.php"); ?>

					<div class="clearfix">

						<section class="col-main">

							<h3 class="sub-ttl">ドメインパネル</h3>
								<div class="toc-list">
								<p class="toc-list--head">目次</p>
								<ul class="toc-list--body">
									<li><a href="#link-a">ドメインパネルとは</a></li>
									<li><a href="#link-b">アクセス方法</a></li>
									<li><a href="#link-c">機能説明</a>
										<ul>
											<li><a href="#link-c01">Whois情報</a></li>
											<li><a href="#link-c02">ネームサーバー情報</a></li>
											<li><a href="#link-c03">レジストラロック情報</a></li>
											<li><a href="#link-c04">DNSレコード</a></li>
										</ul>
									</li>
								</ul>
								</div>

							<ul class="link-box">
								<li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_domain.php">ドメインパネルに関する「よくある質問」</a>
								</li>
							</ul>

							<section class="section">
								<h4 class="section_ttl" id="link-a">ドメインパネルとは</h4>
								<div class="section_body">
									<p>ドメインパネルでは、独自ドメインのネームサーバーの設定やWhois情報の変更を行うことができます。</p>
									<p><img class="img" src="../img/manual/man_tool_domain_2.png?date=20181217" alt="ドメインパネルのスクリーンショット">
									</p>
								</div>
							</section>

							<section class="section">
								<h4 class="section_ttl" id="link-b">アクセス方法</h4>
								<div class="section_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>へログインし、「契約情報 > ドメイン」より、「ドメインパネル」をクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_domain_select_domainpanel_1.png?date=190305" alt="ドメインパネルのスクリーンショット">
									</p>
								</div>
							</section>

							<section class="section">
								<h4 class="section_ttl" id="link-c">機能説明</h4>
								<div class="section_body">
									<p>ドメインパネルでは下記の操作ができます。</p>
									
									<section class="block">
										<h5 id="link-c01" class="block_ttl">Whois情報</h5>
										<div class="block_body">
											<p>独自ドメインのWhois情報の確認・変更ができます。<br>
												なお、co.jp / or.jp / ne.jp / gr.jp / .ac.jp / .ed.jp ドメインの場合、ドメインパネルから変更ができません。<br>
												詳しくは、<a href="man_domain_whois.php">Whois情報</a>をご参照ください。</p>

												<p>認証鍵の送信については「Registrant Contactへの認証鍵の送信」より可能です。<br>
												詳しくは、<a href="man_domain_auth_key.php">認証鍵</a>をご参照ください。</p>
										</div>
									</section>
									
									<section class="block">
										<h5 id="link-c02" class="block_ttl">ネームサーバー情報</h5>
										<div class="block_body">
											<p>現在設定中のネームサーバーの確認・変更ができます。</p>
											<p>詳しくは、<a href="man_domain_namesever_setting.php">ネームサーバーの設定</a>をご参照ください。</p>
										</div>
									</section>
									
									
									<section class="block">
										<h5 id="link-c03" class="block_ttl">レジストラロック情報</h5>
										<div class="block_body">
											<p>レジストラロックの設定・解除が可能です。<br> なお、レジストラロックを解除するには、対象ドメインの解約申請が行われている必要があります。
											</p>
											<p>詳しくは、<a href="man_domain_register_lock.php">レジストラロック</a>をご参照ください。</p>
										</div>
									</section>
	
									<section class="block">
										<h5 id="link-c04" class="block_ttl">DNSレコード</h5>
										<div class="block_body">
											<p>DNSレコードの設定（追加・変更・削除）を行うことができます。</p>
											<p>詳しくは、<a href="man_domain_dns_setting.php">DNSレコードの編集</a>をご参照ください。</p>
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