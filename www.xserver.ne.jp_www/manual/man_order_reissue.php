<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>各種パスワードの再設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「XServerアカウント」「サーバーパネル（メインFTPアカウント）」「Webメール」などのパスワードを忘れた場合の再設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">各種パスワードの再設定</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">各種パスワードの再設定について</a>
                        <ul>
                            <li><a href="#link-a01">XServerアカウントパスワード</a></li>
                            <li><a href="#link-a02">サーバーパスワード</a></li>
                            <li><a href="#link-a03">メールパスワード</a></li>
                            <li><a href="#link-a04">サブFTPアカウントの「FTPパスワード」</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_missing.php">パスワード等の紛失に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">各種パスワードの再設定について</h4>
                    <div class="section_body">
                        <p>当サービスでご利用の各アカウントに対応するパスワード情報がご不明の場合、以下の手順でお客様任意のパスワードに変更することができます。</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">XServerアカウントパスワード</h5>
                            <div class="block_body">
                                <p>お客様のご登録情報の確認、変更、ご利用期限の確認などが行えるXServerアカウントのログインに必要な「XServerアカウントパスワード」は、<a href="<?php print $REISSUE_INFO_URL; ?>">「XServerアカウントパスワード」再設定フォーム</a>より再設定が可能です。</p>
                                <p>XServerアカウントID（または登録メールアドレス）をご入力ください。<br>
                                ご登録のメールアドレス宛へ再設定用アドレスをお送りいたします。<br>
                                メールに記載の案内に沿ってお手続きください。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">サーバーパスワード（メインFTPアカウントパスワード）</h5>
                            <div class="block_body">
                                <p>
                                    サーバーへのFTP接続やサーバーに関する各種設定を行う「サーバーパネル」のログインで利用可能な「サーバーパスワード」（メインFTPアカウントパスワード）は、
                                    <a href="<?php print $REISSUE_SERVER_URL; ?>">「サーバーパスワード」再設定フォーム</a>よりパスワードの再設定が可能です。
                                </p>
                                <p>ご登録メールアドレスまたはXServerアカウントIDとサーバーIDをご入力ください。<br>
                                    ご登録のメールアドレス宛へ再設定用アドレスをお送りいたします。<br>
                                    メールに記載の案内に沿ってお手続きください。
                                </p>
                                <p>※XServerアカウントID（ご登録メールアドレス）/ XServerアカウントパスワードでもサーバーパネルにログインすることが可能です。</p>
                                <p class="note">※サーバーパネルのログイン用パスワードとメインFTPアカウントのFTPパスワードは同一です。<br>
                                再設定を行うとメインFTPアカウントの情報も合わせて変更されます。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">メールパスワード</h5>
                            <div class="block_body">
                                <p>サーバーパネル「<a href="man_mail_add.php">メールアカウント設定</a>」より、該当メールアカウントのパスワード変更を行ってください。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">サブFTPアカウントの「FTPパスワード」</h5>
                            <div class="block_body">
                                <p>サーバーパネル「<a href="man_ftp_add.php">サブFTPアカウント設定</a>」より、該当FTPアカウントのパスワード変更を行ってください。</p>
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