<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MIME設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜インターネットで使用される拡張子とファイルの種類を関連付けられる「MIME設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">MIME設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">MIME設定とは</a></li>
                                <li><a href="#link-previous-b">MIME設定について</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「MIME設定」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.「MIME設定追加」をクリック</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">MIME設定とは</h4>
                                <div class="section_body">
                                    <p>インターネットで使用される拡張子とファイルの種類を関連づけるものです。</p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">MIME設定について</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「MIME設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「MIME設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_mime_1.png" alt="サーバーパネルのMIME設定のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「MIME設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>MIMEタイプと拡張子を入力し「確認画面へ進む」をクリックしてください。<br>
                                                    内容を確認し、問題がなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_mime_2.png" alt="サーバーパネルのMIME設定のスクリーンショット"></p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>設定例</dt>
                                                    <dd>
                                                        <p>WOFF2ファイルの場合、下記のMIMEタイプを設定してください。</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr><th>MIMEタイプ</th><td>application/font-woff2</td></tr>
                                                                <tr><th>拡張子</th><td>.woff2</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </dd>
                                                </dl>
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
                                    <li><a href="#link-a">MIME設定とは</a></li>
                                    <li><a href="#link-b">MIME設定手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「MIME設定」をクリック</a></li>
                                            <li><a href="#link-b02">2.「MIME設定追加」をクリック</a></li>
                                            <li><a href="#link-b03">3.「MIME設定を追加」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">MIME設定とは</h4>
                                <div class="section_body">
                                    <p>インターネットで使用される拡張子とファイルの種類を関連づけるものです。</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">MIME設定手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box" id="link-b01">
                                            <h5 class="box_ttl">1.「MIME設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「MIME設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_mime_1.png?date=2410" alt="サーバーパネルのMIME設定のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-b02">
                                            <h5 class="box_ttl">2.「MIME設定を追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「MIME設定を追加」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_mime_2.png?date=2410" alt="サーバーパネルのMIME設定を追加のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-b03">
                                            <h5 class="box_ttl">3.「MIME設定を追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>MIMEタイプと拡張子を入力し「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_mime_3.png?date=2410" alt="サーバーパネルのMIME設定のスクリーンショット"></p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>設定例</dt>
                                                    <dd>
                                                        <p>WOFF2ファイルの場合、下記のMIMEタイプを設定してください。</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr><th>MIMEタイプ</th><td>application/font-woff2</td></tr>
                                                            <tr><th>拡張子</th><td>.woff2</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </dd>
                                                </dl>
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