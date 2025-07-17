<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントのパスワード変更 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルからメールアカウント（メールアドレス）のパスワードを変更する方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">メールアカウントのパスワード変更</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントのパスワード変更について</a></li>
                                    <li><a href="#link-previous-b">メールアカウントのパスワード変更方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-previous-b02">2.「変更」を選択</a></li>
                                            <li><a href="#link-previous-b03">3.パスワードを入力</a></li>
                                            <li><a href="#link-previous-b04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントのパスワード変更について</h4>
                                <div class="section_body">

                                    <section class="block">
                                        <div class="block_body">
                                            <p>
                                                メールアカウントのパスワードは、サーバーパネルから変更できます。
                                                <br><br>
                                                メールソフトを利用している場合は、パスワードの変更後、メールソフトの設定も新しいパスワードに変更してください。
                                                <br>
                                                また、複数のメールソフトで同じメールアドレスを使用している場合は、すべてのメールソフトでパスワードを変更する必要があります。
                                            </p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">メールアカウントのパスワードの変更方法</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「変更」を選択</h6>
                                            <div class="box_body">
                                                <p>現在設定されている一覧が表示されます。<br>
                                                    パスワードを変更したいメールアカウントの右側に表示されている「変更」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_change_password_2.png" alt="メールアカウントのパスワード変更を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.パスワードを入力</h6>
                                            <div class="box_body">
                                                <p>「新しいパスワード」欄に新しいパスワードを入力し、「確認画面へ進む」をクリックします。</p>

                                                <ul class="note-list mb10">
                                                    <li>※第三者に予想されにくい、複雑で長い文字列を推奨します。</li>
                                                    <li>※設定したパスワードは、あとから確認できません。必ずお客様にて控えてください。</li>
                                                </ul>

                                                <p><img class="img" src="../img/manual/previous/man_mail_change_password_3.png" alt="メールアカウントのパスワードを入力しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.変更完了</h6>
                                            <div class="box_body">
                                                <p>「変更する」をクリックし画面が切り替われば変更は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_change_password_4.png" alt="メールアカウントのパスワード変更が完了したスクリーンショット"></p>
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
                                    <li><a href="#link-a">メールアカウントのパスワード変更について</a></li>
                                    <li><a href="#link-b">メールアカウントのパスワード変更方法</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「メールアカウント設定」をクリック</a></li>
                                            <li><a href="#link-b2">2.[編集]ボタンをクリック</a></li>
                                            <li><a href="#link-b3">3.パスワードを設定</a></li>
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
                                        <h4 class="section_ttl">メールアカウントのパスワード変更について</h4>
                                        <div class="section_body">

                                            <section class="block">
                                                <div class="block_body">
                                                    <p>
                                                        メールアカウントのパスワードは、サーバーパネルから変更できます。
                                                        <br><br>
                                                        メールソフトを利用している場合は、パスワードの変更後、メールソフトの設定も新しいパスワードに変更してください。
                                                        <br>
                                                        また、複数のメールソフトで同じメールアドレスを使用している場合は、すべてのメールソフトでパスワードを変更する必要があります。
                                                    </p>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">メールアカウントのパスワード変更方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. 「メールアカウント設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_change_password_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. [編集]ボタンをクリック</h5>
                                                    <div class="box_body">
                                                        <p>現在設定されている一覧が表示されます。パスワードを変更したいメールアカウントの右側に表示されている[編集]ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_change_password_2.png?date=2410" alt="[編集]ボタンを選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3. パスワードを設定</h5>
                                                    <div class="box_body">
                                                        <p>「新しいパスワード」欄に新しいパスワードを入力し、「設定する」ボタンをクリックすると変更完了です。</p>

                                                        <p class="note mb0">※第三者に予想されにくい、複雑で長い文字列を推奨します。</p>
                                                        <p class="note">※設定したパスワードは、あとから確認できません。必ずお客様にて控えてください。</p>

                                                        <p><img class="img" src="../img/manual/man_mail_change_password_3.png?date=2410" alt="メールアカウントのパスワードを入力しているスクリーンショット"></p>
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