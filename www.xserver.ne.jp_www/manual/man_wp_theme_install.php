<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>インストール済みWordPressにテーマをインストール | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜インストール済みWordPressにテーマをインストールする手順について記載しています。">

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
            
                <h3 class="sub-ttl">インストール済みWordPressにテーマをインストール</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-b">テーマをインストール</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">１．「WordPressテーマ管理」をクリック</a></li>
                                            <li><a href="#link-previous-b02">２．ドメインを選択</a></li>
                                            <li><a href="#link-previous-b03">３．テーマを選択</a></li>
                                            <li><a href="#link-previous-b06">４．「確認画面へ進む」をクリック</a></li>
                                            <li><a href="#link-previous-b05">５．「インストールする」をクリック</a></li>
                                            <li><a href="#link-previous-b06">６．インストール完了</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <aside class="msg msg_caution">
                                <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                <div class="msg_body">
                                    <p><a href="man_install_word.php">手動インストール</a>や、<a href="man_install_transfer_wp.php">WordPress簡単移行</a>ご利用でのインストールなど、「<a href="man_install_auto_word.php">WordPress簡単インストール</a>」機能でインストールしていないWordPressではご利用いただけません。</p>
                                </div>
                            </aside>

                            <ul class="link-box mt30">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_wp.php">WordPressに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">テーマをインストール</h4>
                                <div class="section_body">
                                    <p>サーバーパネルにて、インストール済みWordPressにテーマをインストールしていきます。</p>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">１．「WordPressテーマ管理」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「WordPressテーマ管理」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_1.png" alt="サーバーパネルで「WordPressテーマ管理」をクリックするスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2. ドメインを選択</h5>
                                            <div class="box_body">
                                                <p>テーマをインストールするドメインを選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_2.png" alt="ドメインを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3. テーマを選択</h5>
                                            <div class="box_body">
                                                <p>
                                                    インストールするWordPressテーマを選択してください。<br>
                                                    選択したテーマに子テーマ・プラグインの提供がある場合、「テーマオプション」にチェックボックスが表示されます。<br>
                                                    子テーマ・プラグインをインストールする場合はチェックを入れてください。
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_3.png" alt="テーマを選択しているスクリーンショット"></p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>子テーマの提供があるテーマ</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cocoon</li>
                                                            <li>Lightning</li>
                                                            <li>XWRITE</li>
                                                            <li>SWELL</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>プラグインの提供があるテーマ</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Snow Monkey</li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4. 「確認画面へ進む」をクリック</h5>
                                            <div class="box_body">
                                                <p>
                                                    「確認画面へ進む」をクリックします。
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_6.png" alt="「確認画面へ進む」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b05">5. 「インストールする」をクリック</h5>
                                            <div class="box_body">
                                                <p>「インストールする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_4.png" alt="「インストールする」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b06">6. インストール完了</h5>
                                            <div class="box_body">
                                                <p>「テーマのインストールが完了しました。」が表示されましたら完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_wp_theme_install_5.png" alt="完了画面のスクリーンショット"></p>

                                                <aside class="msg msg_caution mt30">
                                                    <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                    <div class="msg_body">
                                                        <p>テーマの有効化はWordPress管理画面より行ってください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li>
                                        <a href="#link-a">テーマをインストール</a>
                                        <ol>
                                            <li><a href="#link-a1">1．「WordPressテーマ管理」をクリック</a></li>
                                            <li><a href="#link-a2">2.「テーマインストール」をクリック</a></li>
                                            <li><a href="#link-a3">3. テーマを選択</a></li>
                                            <li><a href="#link-a4">4. 「インストールする」をクリック</a></li>
                                            <li><a href="#link-a5">5. インストール完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="section_body">
                                    <aside class="msg msg_caution mt50">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <p>
                                                <a href="man_install_word.php">手動インストール</a>や、<a href="man_install_transfer_wp.php">WordPress簡単移行</a>ご利用でのインストールなど、「<a href="man_install_auto_word.php">WordPress簡単インストール</a>」機能でインストールしていないWordPressではご利用いただけません。
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <ul class="link-box mt30">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_wp.php">WordPressに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <div class="section_body">
                                    <h3 class="section_ttl">テーマをインストール</h3>
                                    <p>
                                        サーバーパネルにて、インストール済みWordPressにテーマをインストールしていきます。
                                    </p>
                                    <div class="serial-box mt30">

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a1">１．「WordPressテーマ管理」をクリック</h4>
                                            <div class="box_body">
                                                <p>
                                                    <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressテーマ管理」をクリックします。
                                                </p>
                                                <p>
                                                    <img class="img" src="../img/manual/man_wp_theme_install_1.png?date=2410" alt="サーバーパネルで「WordPressテーマ管理」をクリックするスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a2">2.「テーマインストール」をクリック</h4>
                                            <div class="box_body">
                                                <p>テーマをインストールするサイトの「テーマインストール」をクリックします。</p>
                                                <p>
                                                    <img class="img" src="../img/manual/man_wp_theme_install_2.png?date=2410" alt=「テーマインストール」をクリックするスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a3">3. テーマを選択</h4>
                                            <div class="box_body">
                                                <p>
                                                    インストールするWordPressテーマを選択してください。<br>
                                                    選択したテーマに子テーマ・プラグインの提供がある場合、「テーマオプション」にチェックボックスが表示されます。<br>
                                                    子テーマ・プラグインをインストールする場合はチェックを入れてください。
                                                </p>
                                                <p>
                                                    <img class="img" src="../img/manual/man_wp_theme_install_3.png?date=2410" alt="テーマを選択しているスクリーンショット">
                                                </p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>子テーマの提供があるテーマ</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cocoon</li>
                                                            <li>Lightning</li>
                                                            <li>XWRITE</li>
                                                            <li>SWELL</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>プラグインの提供があるテーマ</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Snow Monkey</li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a4">4. 「インストールする」をクリック</h4>
                                            <div class="box_body">
                                                <p>「インストールする」をクリックします。</p>
                                                <p>
                                                    <img class="img" src="../img/manual/man_wp_theme_install_4.png?date=2410" alt="「インストールする」をクリックしているスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a5">5. インストール完了</h4>
                                            <div class="box_body">
                                                <p>「テーマのインストールが完了しました。」が表示されましたら完了です。</p>
                                                <p>
                                                    <img class="img" src="../img/manual/man_wp_theme_install_5.png?date=2410" alt="完了画面のスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                    </div>
                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <p>テーマの有効化はWordPress管理画面より行ってください。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /新パネル -->

                    </div>
                </div>
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