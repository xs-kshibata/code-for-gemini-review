<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アクセス制限（BASIC認証） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご希望のフォルダに対してBASIC認証を設定できる「アクセス制限」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">アクセス制限</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">アクセス制限とは</a></li>
                                <li><a href="#link-previous-b">アクセス制限設定</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「アクセス制限」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.アクセス制限を「ON」にします</a></li>
                                        <li><a href="#link-previous-b03">3.アクセス制限のユーザー設定をします</a></li>
                                        <li><a href="#link-previous-b04">4.ユーザーを追加します</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>
                
                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">アクセス制限とは</h4>
                                <div class="section_body">
                                    <p>指定のフォルダに対してBASIC認証をかけることができます。<br>
                                    IDとパスワードを用いてアクセス制限をかけることができるので、会員制のサイト等を運用する場合にご利用いただけます。</p>

                                </div>
                            </section>
                            <!-- /.section -->
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">アクセス制限設定</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「アクセス制限」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス制限」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_limit_1.png" alt="アクセス制限画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.アクセス制限を「ON」にします</h6>
                                            <div class="box_body">
                                                <p>フォルダ名をクリックし、「現在のURL」がアクセス制限をかけたいURLになっているかどうか確認します。<br>
                                                    間違いなければ、アクセス制限を追加したいフォルダの設定を「ON」に変更し、「設定する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_limit_2.png" alt="アクセスをONにするスクリーンショット"></p>
                                                <p>アクセス制限が設定されたフォルダには鍵マークがつき、現在の状態が「OFF」から「ON」に変わります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_limit_3.png" alt="アクセスがONになったスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.アクセス制限のユーザー設定をします</h6>
                                            <div class="box_body">
                                                <p>アクセス制限を「ON」にしたフォルダの「ユーザー設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_limit_4.png" alt="アクセス制限ユーザ設定へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.ユーザーを追加します</h6>
                                            <div class="box_body">
                                                <p>ユーザーIDとパスワードを入力し「確認画面へ進む」をクリックしてください。<br>
                                                    内容を確認し、問題がなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_limit_5.png" alt="アクセス制限ユーザ設定画面のスクリーンショット"></p>
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
                                <li><a href="#link-a">アクセス制限とは</a></li>
                                <li><a href="#link-b">アクセス制限設定</a>
                                    <ol>
                                        <li><a href="#link-b01">1.「アクセス制限」をクリック</a></li>
                                        <li><a href="#link-b02">2.アクセス制限を「ON」にします</a></li>
                                        <li><a href="#link-b03">3.アクセス制限のユーザー設定をします</a></li>
                                        <li><a href="#link-b04">4.ユーザーを追加します</a></li>
                                    </ol>
                                </li>
                            </ul>
                        </div>

                        <ul class="link-box">
                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                        </ul>

                        <section class="section">
                            <div class="sectionBody">

                                <section class="section">
                                    <h4 class="section_ttl" id="link-a">アクセス制限とは</h4>
                                    <div class="section_body">
                                        <p>
                                            指定のフォルダに対してBASIC認証をかけることができます。<br>
                                            IDとパスワードを用いてアクセス制限をかけることができるので、会員制のサイト等を運用する場合にご利用いただけます。
                                        </p>
                                    </div>
                                </section>

                                <section class="section">
                                    <h4 class="section_ttl" id="link-b">アクセス制限設定</h4>
                                    <div class="section_body">

                                        <div class="serial-box">

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-b01">1.「アクセス制限」をクリック</h5>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス制限」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_1.png?date=2410" alt="アクセス制限画面へ"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-b02">2.アクセス制限を「ON」にします</h5>
                                                <div class="box_body">
                                                    <p>アクセス制限をかけたい対象ドメインかどうかを確認します。<br>
                                                        間違いなければ、アクセス制限を追加したいフォルダの設定を「ON」に変更します。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_2.png?date=2410" alt="アクセスをONにするスクリーンショット"></p>
                                                    <p>アクセス制限が設定されたフォルダの設定状態が「OFF」から「ON」に変わります。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_3.png?date=2410" alt="アクセスがONになったスクリーンショット"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-b03">3.アクセス制限のユーザー設定をします</h5>
                                                <div class="box_body">
                                                    <p>アクセス制限を「ON」にしたフォルダの「ユーザー設定」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_4.png?date=2410" alt="アクセス制限ユーザー設定へ"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-b04">4. ユーザーを追加します</h5>
                                                <div class="box_body">
                                                    <p>「ユーザーIDを追加」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_5.png?date=2410" alt="アクセス制限ユーザー設定画面のスクリーンショット"></p>
                                                    <p>ユーザーIDとパスワードを入力し、「追加する」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_server_limit_6.png?date=2410" alt="アクセス制限ユーザー設定画面のスクリーンショット"></p>
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