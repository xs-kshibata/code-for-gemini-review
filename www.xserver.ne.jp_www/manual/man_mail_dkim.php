<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DKIM設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで作成したメールアドレスに到着したメールを任意のメールアドレスに転送する「DKIM設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">DKIM設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DKIM設定について</a></li>
                                    <li><a href="#link-previous-b">DKIM設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「DKIM設定」を選択</a></li>
                                            <li><a href="#link-previous-b02">2.「DKIM設定追加」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.DKIM設定の追加</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DKIM設定について</h4>
                                <div class="section_body">
                                    <p>送信メールの改ざん・なりすましを防ぐ技術です。<br>送信メールの信頼性向上やメール到達率の向上が期待されます。</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DKIM設定の設定方法</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. 「DKIM設定」を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、DKIM設定を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_1.png" alt="DKIM設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. 「DKIM設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_2.png" alt="「DKIM設定追加」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. DKIM設定の追加</h6>
                                            <div class="box_body">
                                                <p>DKIM設定を追加するドメインを選択し[設定する]をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_3.png" alt="[設定する]をクリック"></p>
                                                <p>「DKIM設定一覧」にドメインが追加されたら設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_4.png" alt="設定完了"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DKIMレコードの確認について</dt>
                                        <dd>
                                            <p>「DKIM設定一覧」の[表示]からDKIMレコードが確認できます。</p>
                                            <p><img class="img" src="../img/manual/previous/man_mail_dkim_5.png" alt="[表示]をクリック"></p>
                                            <p><img class="img" src="../img/manual/previous/man_mail_dkim_6.png" alt="DKIMレコード情報の確認"></p>
                                        </dd>
                                    </dl>

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
                                    <li><a href="#link-a">DKIM設定について</a></li>
                                    <li><a href="#link-b">DKIM設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「DKIM設定」をクリック</a></li>
                                            <li><a href="#link-b2">2.DKIM設定の追加</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">DKIM設定について</h4>
                                        <div class="section_body">

                                            <p>送信メールの改ざん・なりすましを防ぐ技術です。<br>送信メールの信頼性向上やメール到達率の向上が期待されます。</p>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">DKIM設定の設定方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. 「DKIM設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、DKIM設定をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_1.png?date=2410" alt="DKIM設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. DKIM設定の追加</h5>
                                                    <div class="box_body">
                                                        <p>DKIM設定を追加するドメインの右端にある設定状況の「OFF」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_3.png?date=2410" alt="「OFF」をクリック"></p>
                                                        <p>「ON」に切り替わったら設定は完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_4.png?date=2410" alt="設定完了"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>DKIMレコードの確認について</dt>
                                                <dd>
                                                    <p>確認したいドメインの「表示」をクリックするとDKIMレコードが確認できます。</p>
                                                    <p><img class="img" src="../img/manual/man_mail_dkim_5.png?date=2410" alt="「表示」をクリック"></p>
                                                    <p><img class="img" src="../img/manual/man_mail_dkim_6.png?date=2410" alt="DKIMレコード情報の確認"></p>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>

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