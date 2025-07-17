<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>レジストラロック | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜JPドメイン以外のドメイン名を他社へ移管する際に必要となる「レジストラロックの解除」について、手順を記載しています。">

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
            
                <h3 class="sub-ttl">レジストラロック</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">レジストラロック</a>
                        <ol>
                            <li><a href="#link-a01">1.レジストラロックを解除したいドメイン名をクリック</a></li>
                            <li><a href="#link-a02">2.「設定変更」をクリック</a></li>
							<li><a href="#link-a03">3.「解除する」を選択し、「設定を変更する」ボタンをクリック</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>
				
                <section class="section">
                    <h4 class="section_ttl" id="link-a">レジストラロック</h4>
                    <div class="section_body">
						<p>ドメイン移管を行う際に、レジストラロックを解除したい場合は、ドメインの解約申請後、下記手順にてご対応ください。</p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.レジストラロックを解除したいドメイン名をクリック</h6>
                                <div class="box_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「ドメイン」より、レジストラロックを解除したいドメイン名をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_nameserver_setting_1.png?date=20220216" alt="レジストラロックを解除したいドメインをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.「設定変更」をクリック</h6>
                                <div class="box_body">
                                    <p>レジストラロック情報の「設定変更」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_register_lock_2.png?date=20201022" alt="レジストラロック情報の設定変更をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.「解除する」を選択し、「設定を変更する」ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>「解除する」を選択し、「設定を変更する」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_register_lock_3.png?date=20201022" alt="設定を変更するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            
                        </div>
                        <!-- /.serial-box -->
                        
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