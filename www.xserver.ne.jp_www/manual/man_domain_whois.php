<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Whois情報 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで管理中のドメイン名について、Whois情報を確認、変更する手順を記載しています。">

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
            
                <h3 class="sub-ttl">Whois情報</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">Whois情報</a>
                        <ul>
                            <li><a href="#link-b">属性型JPドメイン以外(都道府県型JPを含む汎用JPおよびその他のドメイン)の場合</a></li>
								<ol>
									<li><a href="#link-b01">1.Whois情報を変更したいドメイン名をクリック</a></li>
									<li><a href="#link-b02">2.「設定変更」をクリック</a></li>
									<li><a href="#link-b03">3.Whois情報を入力</a></li>
									<li><a href="#link-b04">4.完了</a></li>
								</ol>
                            <li><a href="#link-c">属性型JPドメイン(co.jp / or.jp / ne.jp / gr.jp / ac.jp / ed.jp)の場合</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_domain.php">ドメインの移管に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_whois.php">Whoisに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Whois情報</h4>
                    <div class="section_body">
						<p>エックスサーバーで取得したドメインにつきましては、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>の「Whois情報」から変更が可能です。</p>
                        <p>登録者情報が不正確であると判明した際には、別途お電話またはメールにて登録者情報の修正をお願いする場合があります。</p>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b">属性型JPドメイン以外(都道府県型JPを含む汎用JPおよびその他のドメイン)の場合</h5>
							
							<div class="serial-box">

								<section class="box">
									<h6 class="box_ttl" id="link-b01">1.Whois情報を変更したいドメイン名をクリック</h6>
									<div class="box_body">
										<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「ドメイン」より、Whois情報を変更したいドメイン名をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_domain_nameserver_setting_1.png?date=20220216" alt="Whois情報を変更したいドメイン名をクリックしているスクリーンショット"></p>
									</div>
								</section>

								<section class="box">
									<h6 class="box_ttl" id="link-b02">2.「設定変更」をクリック</h6>
									<div class="box_body">
										<p>Whois情報の「設定変更」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_domain_whois_2.png?date=20201022" alt="Whois情報の設定変更をクリックしているスクリーンショット"></p>
									</div>
								</section>

								<section class="box">
									<h6 class="box_ttl" id="link-b03">3.Whois情報を入力</h6>
									<div class="box_body">
										<p>Whois情報を入力し、「確認画面へ進む」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_domain_whois_3.png?date=20201022" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
									</div>
								</section>
								
								<section class="box">
									<h6 class="box_ttl" id="link-b04">4.完了</h6>
									<div class="box_body">
										<p>「Whois情報を設定する」ボタンをクリックすることで、Whois情報の変更が完了します</p>
										<p><img class="img" src="../img/manual/man_domain_whois_4.png?date=20201022" alt="Whois情報を設定するをクリックしているスクリーンショット"></p>
									</div>
								</section>

							</div>
							<!-- /.serial-box -->
							
							<p class="mt5">Whoisに関する詳細は、マニュアル「<a href="man_domain_about_whois.php">Whoisについて</a>」をご参照ください。</p>
                        </section>
						
                        <section class="block">
                            <h5 class="block_ttl" id="link-c">属性型JPドメイン(co.jp / or.jp / ne.jp / gr.jp / ac.jp / ed.jp)の場合</h5>
                            <div class="block_body">
                                <p>XServerアカウント上からお客様ご自身でWhois情報を変更していただくことができません。<br>
                                変更をご希望の場合は、お手数ですが<a href="../support/support.php">サポート</a>までお問い合わせください。</p>
                                <p>なお、属性型JPドメインにつきましては、変更箇所によっては1ドメインにつき2,200円<span class="font-xs">(税込)</span>の変更手数料が必要な場合があります。</p>
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