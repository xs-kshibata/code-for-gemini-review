<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPressテーマをダウンロード | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜WordPressテーマをダウンロードする手順について記載しています。">

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
            
                <h3 class="sub-ttl">WordPressテーマをダウンロード</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-b">WordPressテーマをダウンロード</a>
                            <ul>
                                <li><a href="#link-b01">１．「WordPressテーマ」をクリック</a></li>
                                <li><a href="#link-b02">２．「選択する」をクリック</a></li>
                                <li><a href="#link-b03">３．「ダウンロード」をクリック</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <aside class="msg msg_caution">
                    <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                    <div class="msg_body">
                        <p>
                            ダウンロードできるWordPressテーマは、弊社提供の無料テーマおよびXServerアカウント内「WordPressテーマ」から購入した有料テーマとなります。
                        </p>
                    </div>
                </aside>
                
                <ul class="link-box mt30">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_wp.php">WordPressに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">WordPressテーマをダウンロード</h4>
                    <div class="section_body">
                        <p>XServerアカウントにて、WordPressテーマをダウンロードしていきます。</p>

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1．「WordPressテーマ」をクリック</h5>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、左側メニューの「WordPressテーマ」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_1.png?date=20230322" alt="XServerアカウントで「WordPressテーマ」をクリックするスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2. 「選択する」をクリック</h5>
                                <div class="box_body">
                                    <p>ダウンロードしたいテーマの「選択する」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_2.png?date=20230322" alt="「選択する」をクリックするスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3. 「ダウンロード」をクリック</h5>
                                <div class="box_body">
                                    <p>「ダウンロード」をクリックするとテーマがダウンロードされます。</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_3.png?date=20230322" alt="「ダウンロード」をクリックするスクリーンショット"></p>
                                </div>
                            </section>
                        </div>
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