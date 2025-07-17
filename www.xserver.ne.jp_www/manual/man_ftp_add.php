<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTPアカウントの追加 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜FTPアカウントを追加する手順について。エックスサーバーではサーバー設定完了時より利用可能な「メインFTPアカウント」とともに、接続先フォルダなどを制限できる「FTPアカウント」を設定できます。">

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
            
                <h3 class="sub-ttl">FTPアカウントの追加</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">サブFTPアカウントの追加</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.サブFTPアカウント設定を選択</a></li>
                                        <li><a href="#link-previous-a02">2.「サブFTPアカウントの追加」をクリック</a></li>
                                        <li><a href="#link-previous-a03">3.必要事項を入力</a></li>
                                        <li><a href="#link-previous-a04">4.接続先ディレクトリを指定</a></li>
                                        <li><a href="#link-previous-a05">5.「確認画面へ進む」をクリック</a></li>
                                        <li><a href="#link-previous-a06">6.「追加する」をクリック</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">サブFTPアカウントの追加</h4>
                                <div class="section_body">
                                    <p class="note">※試用期間中は、サブFTPアカウントの追加は行えません。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.サブFTPアカウント設定を選択</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、サブFTPアカウント設定を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_1.png" alt="サブFTPアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.「サブFTPアカウント追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「サブFTPアカウント追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_2.png" alt="サブFTPアカウント追加を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.必要事項を入力</h5>
                                            <div class="box_body">
                                                <p>FTPアカウント名（FTPユーザーID）・パスワード・FTP容量を入力します。<br>
                                                    FTPアカウント名をサブドメイン名にする場合、赤で囲った部分から選択することができます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_3.png" alt="FTPアカウントの追加設定をしているスクリーンショット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.接続先ディレクトリを指定</h5>
                                            <div class="box_body">
                                                <p>「example.com」のみ操作可能にしたい場合、下記の設定をしてください。</p>
                                                <p class="note">※ホームページ部分のみを操作させたい際には、/home/xsample/example.com/public_html/ となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_4.png" alt="FTPアカウントの追加設定をしているスクリーンショット"></p>
                                                <aside class="msg msg_caution">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>「FTP制限設定」機能と併用される場合のご注意</h6>
                                                    <div class="msg_body">
                                                        <p>接続先ディレクトリの指定をおこなうと、以下のFTP制限設定が適用されない場合があります。<br>
                                                        併用される場合には、以下にご注意ください。</p>
                                                        <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID</em>」より下位に指定すると、サーバーアカウント共通のFTP制限が適用されません。</p>
                                                        <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID/対象ドメイン名</em>」より下位に指定すると、ドメイン単位のFTP制限が適用されません。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a05">5.「確認画面へ進む」をクリック</h5>
                                            <div class="box_body">
                                                <p>「確認画面へ進む」をクリックします。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a06">6.「追加する」をクリック</h5>
                                            <div class="box_body">
                                                <p>確認画面でアカウント情報を確認していただき、最後に「追加する」をクリックします。</p>
                                                <p>以上でサブFTPアカウントの作成は完了です。</p>
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
                                    <li><a href="#link-a">FTPアカウントの追加</a>
                                        <ol>
                                            <li><a href="#link-a1">1.FTPアカウント設定を選択</a></li>
                                            <li><a href="#link-a2">2.「FTPアカウントを追加」をクリック</a></li>
                                            <li><a href="#link-a3">3.必要事項を入力</a></li>
                                            <li><a href="#link-a4">4.接続先ディレクトリを指定</a></li>
                                            <li><a href="#link-a5">5.「追加する」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">FTPアカウントの追加</h4>
                                        <div class="section_body">

                                            <p class="note">※試用期間中は、FTPアカウントの追加は行えません。</p>
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a1">1. FTPアカウント設定を選択</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「FTPアカウント設定」を選択します。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_add_1.png?date=2410" alt="FTPアカウント設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a2">2. 「FTPアカウントを追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「FTPアカウントを追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_add_2.png?date=2410" alt="FTPアカウントの追加を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a3">3. 必要事項を入力</h5>
                                                    <div class="box_body">
                                                        <p>FTPアカウント名(FTPユーザーID)・パスワード・FTP容量を入力します。<br>
                                                            FTPアカウント名をサブドメイン名にする場合、赤で囲った部分から選択することができます。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_add_3.png?date=2410" alt="FTPアカウントの追加設定をしているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a4">4. 接続先ディレクトリを指定</h5>
                                                    <div class="box_body">
                                                        <p>「example.com」のみ操作可能にしたい場合、下記の設定をしてください。</p>
                                                        <p class="note">※ホームページ部分のみを操作させたい際には、/home/xsample/example.com/public_html/ となります。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_add_4.png?date=2410" alt="FTPアカウントの追加設定をしているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a5">5. 「追加する」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>入力が完了したら「追加する」をクリックします。</p>
                                                        <p>以上でFTPアカウントの作成は完了です。</p>
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