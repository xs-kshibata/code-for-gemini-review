<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントの追加 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルからメールアカウント（メールアドレス）を追加するための手順を記載しています。">

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
            
                <h3 class="sub-ttl">メールアカウントの追加</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントの追加</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-previous-a02">2.メールアカウント追加を選択</a></li>
                                            <li><a href="#link-previous-a03">3.アカウント作成</a></li>
                                            <li><a href="#link-previous-a04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントの追加</h4>
                                <div class="section_body">
                                    <p class="note">※試用期間中は、メールアカウントの追加は行えません。</p>
                                    <section class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h6>
                                        <div class="msg_body">
                                            <p>
                                                「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                            </p>
                                        </div>
                                    </section>
                                    <div class="manual-youtube-box">
                                        <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                                        <div class="manual-youtube">
                                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/Uua0AQslqp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                <p class="note">※事前に「<a href="man_domain_setting.php">ドメイン設定</a>」にてメールアカウントを作成されたいドメインを追加してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.メールアカウント追加を選択</h6>
                                            <div class="box_body">
                                                <p>現在設定されている一覧が表示されます。「メールアカウント追加」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_2.png" alt="メールアカウント追加を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.アカウント作成</h6>
                                            <div class="box_body">
                                                <p>設定したいアカウント名・パスワード・容量・コメントを入力し、「確認画面へ進む」ボタンをクリックします(サブドメイン名での作成の際には、赤で囲った部分から選択することができます)。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_3.png" alt="メールアカウントの作成を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a04">4.設定完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_4.png" alt="メールアカウント作成完了したスクリーンショット"></p>
                                                <p>以上で設定は完了です。「追加する」を押して、終了してください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

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
                                    <li><a href="#link-a">メールアカウントの追加</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「メールアカウント設定」をクリック</a></li>
                                            <li><a href="#link-a2">2.メールアカウントを追加を選択</a></li>
                                            <li><a href="#link-a3">3.アカウント作成</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">メールアカウントの追加</h4>
                                        <div class="section_body">

                                            <p class="note">※試用期間中は、メールアカウントの追加は行えません。</p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-a1" class="box_ttl">1. 「メールアカウント設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_add_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                        <p class="note">※事前に「<a href="man_domain_setting.php">ドメイン設定</a>」にてメールアカウントを作成されたいドメインを追加してください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a2" class="box_ttl">2. メールアカウントを追加を選択</h5>
                                                    <div class="box_body">
                                                        <p>現在設定されている一覧が表示されます。「メールアカウントを追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_add_2.png?date=2410" alt="メールアカウントを追加を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a3" class="box_ttl">3. アカウント作成</h5>
                                                    <div class="box_body">
                                                        <p>[登録方式]で「個別」を選択し、設定したいメールアカウント・パスワード・容量・メモを入力してください。<br>
                                                            入力後、「追加する」ボタンをクリックすると登録完了です。<br>
                                                            (サブドメイン名での作成の際には、赤で囲った部分から選択することができます。)</p>
                                                        <p><img class="img" src="../img/manual/man_mail_add_3.png?date=2410" alt="メールアカウントの作成画面"></p>

                                                        <section class="msg">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h6>
                                                            <div class="msg_body">
                                                                <p>
                                                                    「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                                    詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                                                </p>
                                                            </div>
                                                        </section>


                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

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