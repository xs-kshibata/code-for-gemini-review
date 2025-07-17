<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントのCSVダウンロード | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルから全メールアカウントのCSVが出力される「メールアカウントのCSVダウンロード」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">メールアカウントのCSVダウンロード</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントのCSVダウンロードについて</a></li>
                                    <li><a href="#link-previous-b">メールアカウントのCSVダウンロード方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-previous-b02">2.「CSV出力」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.CSVダウンロード完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントのCSVダウンロードについて</h4>
                                <p>サーバーパネルより、メールアカウントのCSVファイルをダウンロードすることができます。<br>
                                    設定対象ドメインの全てのメールアカウントが出力され、ダウンロードしたCSVファイルは「<a href="man_mail_bulk_change.php">メールアカウントの一括変更</a>」などでも利用可能です。<br>
                                    ただしセキュリティの観点からパスワード情報は出力されませんので、ご注意ください。
                                </p>
                                <p class="note">※試用期間中は、メールアカウントのCSVダウンロードは行えません。</p>

                                <dl class="dl">
                                    <dt>CSVに出力される項目</dt>
                                    <dd>
                                        ・メールアカウント名<br>
                                        ・パスワード(出力されません)<br>
                                        ・使用容量<br>
                                        ・最大容量<br>
                                        ・メモ<br>
                                        ・転送先アドレス<br>
                                        ・転送後のメール削除<br>
                                    </dd>
                                </dl>


                                <h4 class="section_ttl" id="link-previous-b">メールアカウントのCSVダウンロード方法</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「CSV出力」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定対象ドメインのメールアカウント一覧が表示されます。一覧の上部にある「CSV出力」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_account_csv_1.png" alt="「CSV出力」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.CSVダウンロード完了</h6>
                                            <div class="box_body">
                                                <p>設定対象ドメインの全てのメールアカウントが出力され、任意の保存場所にCSVファイルがダウンロードされます。<br>
                                                以上でCSVダウンロード完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">メールアカウントのCSVダウンロードについて</a></li>
                                    <li><a href="#link-b">メールアカウントのCSVダウンロード方法</a>
                                        <ol>
                                            <li><a href="#link-b01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-b02">2.「CSV一括操作」をクリック</a></li>
                                            <li><a href="#link-b03">2.「ダウンロードする」をクリック</a></li>
                                            <li><a href="#link-b04">4.CSVダウンロード完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">メールアカウントのCSVダウンロードについて</h4>
                                <p>サーバーパネルより、メールアカウントのCSVファイルをダウンロードすることができます。<br>
                                    設定対象ドメインの全てのメールアカウントが出力され、ダウンロードしたCSVファイルは「<a href="man_mail_bulk_change.php">メールアカウントの一括変更</a>」などでも利用可能です。<br>
                                    ただしセキュリティの観点からパスワード情報は出力されませんので、ご注意ください。
                                </p>
                                <p class="note">※試用期間中は、メールアカウントのCSVダウンロードは行えません。</p>

                                <dl class="dl">
                                    <dt>CSVに出力される項目</dt>
                                    <dd>
                                        ・メールアカウント名<br>
                                        ・パスワード(出力されません)<br>
                                        ・使用容量<br>
                                        ・最大容量<br>
                                        ・メモ<br>
                                        ・転送先アドレス<br>
                                        ・転送後のメール削除<br>
                                    </dd>
                                </dl>

                                <h4 class="section_ttl" id="link-b">メールアカウントのCSVダウンロード方法</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_add_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.「CSV一括操作」をクリック</h6>
                                            <div class="box_body">
                                                <p>ページ上部の「CSV一括操作」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_account_csv_1.png?date=2410" alt="「CSV一括操作」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>


                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.「ダウンロードする」をクリック</h6>
                                            <div class="box_body">
                                                <p>「CSVダウンロード」を選択し、「ダウンロードする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_account_csv_2.png?date=2410" alt="「ダウンロードする」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.CSVダウンロード完了</h6>
                                            <div class="box_body">
                                                <p>設定対象ドメインの全てのメールアカウントが出力され、任意の保存場所にCSVファイルがダウンロードされます。<br>
                                                    以上でCSVダウンロード完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->

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