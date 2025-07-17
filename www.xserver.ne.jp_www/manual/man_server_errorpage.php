<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>エラーページ設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜404エラーなどのエラーページを個別にカスタマイズできる「エラーページ設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">エラーページ設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">エラーページ設定</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.「エラーページ設定」をクリック</a></li>
                                        <li><a href="#link-previous-a02">2.「ON」を選択し、「確認画面へ進む」をクリック</a></li>
                                        <li><a href="#link-previous-a03">3.「設定する」をクリック</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">エラーページ設定</h4>
                                <div class="section_body">
                                    <p>存在しないファイルへアクセスした際に表示されるエラーページ（404エラーなど）を、独自のページに設定することができます。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「エラーページ設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「エラーページ設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_errorpage_1.png" alt="エラーページ設定画面へ"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「ON」を選択し、「確認画面へ進む」をクリック</h6>
                                            <div class="box_body">
                                                <p>各エラーコードの「エラーページ設置場所」を確認し、作成したエラーページを設置してください。 設置後、「ON」を選択し「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_errorpage_2.png" alt="エラーページ設定のスクリーンショット"></p>
                                                <p class="note">※設置場所に間違いがあると、正しく表示できませんのでご注意ください。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.「設定する」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、問題がなければ「設定する」をクリックしてください。以上で設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_errorpage_3.png" alt="エラーページ設定のスクリーンショット"></p>
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
                                    <li><a href="#link-a">エラーページ設定</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「エラーページ設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.変更ボタンを「ON」にする</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h3 class="section_ttl">エラーページ設定</h3>
                                <div class="section_body">
                                    <p>存在しないファイルへアクセスした際に表示されるエラーページ（404エラーなど）を、独自のページに設定することができます。</p>

                                    <div class="serial-box mt50">

                                        <section class="box">
                                            <h4 id="link-a01" class="box_ttl">1.「エラーページ設定」をクリック</h4>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「エラーページ設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_errorpage_1.png?date=2410" alt="エラーページ設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 id="link-a02" class="box_ttl">2.変更ボタンを「ON」にする</h4>
                                            <div class="box_body">
                                                <p>各エラーコードの「エラーページ設置場所」を確認し、作成したエラーページを設置してください。 設置後、設定するエラーページの右側にある変更ボタンをクリックして「ON」にしてください。以上で設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_errorpage_2.png?date=2410" alt="エラーページ設定のスクリーンショット"></p>
                                                <p class="note">※設置場所に間違いがあると、正しく表示できませんのでご注意ください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>

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