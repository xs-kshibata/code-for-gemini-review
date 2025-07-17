<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>各種IDについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜XServerアカウントID、サーバーIDなど、エックスサーバーのご契約に際して必要となる各種IDに関する説明です。">

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
            
                <h3 class="sub-ttl">各種IDについて</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">各種IDについて</a>
                        <ul>
                            <li><a href="#link-a01">XServerアカウントID</a></li>
                            <li><a href="#link-a02">サーバーID</a></li>
                            <li><a href="#link-a03">サービスコード</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_missing.php">XServerアカウントIDとサーバーIDに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">各種IDについて</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">XServerアカウントID</h5>
                            <div class="block_body">
                                <p>お客様ごとに発行される8桁または10桁のID番号で、アルファベットと数字の組み合わせで構成されています。</p>
                                <div class="border border_blue">（例）phai123456、cfgo123456</div>
                                <p class="mb0">XServerアカウントへのログインやサポートへお問い合わせの際に必要となります。</p>
                                <p class="note">※発行後、XServerアカウントIDの変更はできません。</p>
                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>XServerアカウントIDの確認方法</dt>
                                    <dd>ご契約時やサービス更新時のメール、またはXServerアカウントの「登録情報確認・編集」などに記載があります。
										<ol class="ol">
											<li>
												<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックしてください。</p>
												<p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集をクリック"></p>
											</li>
											<li>
												<p>XServerアカウントIDが表示されます。</p>
												<p><img class="img" src="../img/manual/man_order_about_id_2.png?date=20221011" alt=">XServerアカウントIDが表示しているスクリーンショット"></p>
											</li>
										</ol>
									</dd>
                                </dl>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">サーバーID</h5>
                            <div class="block_body">
                                <p>サーバーアカウントお申し込み時に、お客様でお決めいただいたIDです。<br>
                                （一部のお客様には、弊社よりXで始まるサーバーIDを指定している場合があります。）</p>
                                <p>なお、サーバーIDは、初期ドメインとしても利用されます。</p>
                                <div class="border border_blue">（例）xsample.xsrv.jp<br>
                                　→「xsample」の部分がサーバーIDです。</div>
                                <ul class="note-list">
                                    <li>※サーバーお申し込み後の変更や修正はできません。</li>
                                    <li>※別のXServerアカウントIDへサーバーIDのみ契約を移動することはできません。</li>
                                </ul>
                                <dl class="dl mt10 mb0">
                                    <dt><i class="ico ico_square-fill"></i>サーバーIDの確認方法</dt>
                                    <dd>ご契約時やサービス更新時のメール、または<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>ログイン後に表示されるページなどに記載があります。</dd>
                                </dl>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">サービスコード</h5>
                            <div class="block_body">
                                <p>サーバー・ドメイン・SSLの契約ごとに割り振られる数字8桁の管理番号です。<br>
                                サービスコードは、「契約情報」より確認可能です。</p>
								<ol class="ol">
									<li>
										<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスコードを確認したいサーバーの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_about_id_3.png?date=20230130" alt="契約情報をクリック"></p>
									</li>
									<li>
										<p>サービスコードが表示されます。</p>
										<p><img class="img" src="../img/manual/man_order_about_id_4.png?date=20210610" alt=">サービスコードが表示しているスクリーンショット"></p>
									</li>
								</ol>
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