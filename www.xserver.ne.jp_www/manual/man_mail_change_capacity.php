<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントの容量変更 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルからメールアカウント（メールアドレス）の容量を変更するための手順を記載しています。">

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
            
                <h3 class="sub-ttl">メールアカウントの容量変更</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントの容量変更</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-previous-a02">2.「変更」を選択</a></li>
                                            <li><a href="#link-previous-a03">3.容量の変更</a></li>
                                            <li><a href="#link-previous-a04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントの容量変更</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「変更」を選択</h6>
                                            <div class="box_body">
                                                <p>現在設定されている一覧が表示されます。<br>
                                                容量を変更したいメールアカウントの右側に表示されている「変更」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_change_capacity_2.png" alt="メールアカウントの容量変更を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.容量の変更</h6>
                                            <div class="box_body">
                                                <p>任意の容量を入力し、「確認画面へ進む」ボタンをクリックしてください。最大20,000MBまで設定可能です。</p>

                                                <p><img class="img" src="../img/manual/previous/man_mail_change_capacity_3.png" alt="メールアカウントの容量を入力しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a04">4.変更完了</h6>
                                            <div class="box_body">
                                                <p>「変更する」ボタンをクリックし、画面が切り替われば変更は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_change_capacity_4.png" alt="メールアカウントの容量の変更が完了したスクリーンショット"></p>
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
                                    <li><a href="#link-a">メールアカウントの容量変更</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「メールアカウント設定」をクリック</a></li>
                                            <li><a href="#link-a2">2.[編集]ボタンをクリック</a></li>
                                            <li><a href="#link-a3">3.容量の変更</a></li>
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
                                        <h4 class="section_ttl">メールアカウントの容量変更</h4>
                                        <div class="section_body">

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-a1" class="box_ttl">1. 「メールアカウント設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_change_capacity_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a2" class="box_ttl">2. [編集]ボタンをクリック</h5>
                                                    <div class="box_body">
                                                        <p>現在設定されている一覧が表示されます。容量を変更したいメールアカウントの右側に表示されている[編集]ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_change_capacity_2.png?date=2410" alt="[編集]ボタンを選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a3" class="box_ttl">3. 容量の変更</h5>
                                                    <div class="box_body">
                                                        <p>任意の容量を入力し、「設定する」ボタンをクリックすると変更完了です。<br>なお、容量は最大20,000MBまで設定可能です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_change_capacity_3.png?date=2410" alt="メールアカウントの容量を入力しているスクリーンショット"></p>
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