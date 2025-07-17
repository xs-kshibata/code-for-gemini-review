<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サイト転送設定（リダイレクト設定） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜指定するURLへのリダイレクト設定が簡単にできる「サイト転送設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">サイト転送設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">サイト転送設定</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.「サイト転送設定」をクリック</a></li>
                                        <li><a href="#link-previous-a02">2.「リダイレクト設定追加」をクリック</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-b">設定を変更しても正常に動作しない場合</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">サイト転送設定</h4>
                                <div class="section_body">

                                    <p>指定のURLへリダイレクト設定が可能です。</p>
                                    
                                    <aside class="msg msg_notice mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>サブドメインを含む同一ドメインへの転送設定について</h6>
                                            <div class="msg_body">
                                                <p>
                                                    当機能を使用して設定を行うことはできますが、WEBサイトの構成によってはリダイレクトループが発生する可能性があります。<br>
                                                    同一ドメインへの転送で不具合が発生する場合は、「<a href="../manual/man_server_htaccess.php">.htaccess</a>」での設定をご検討ください。<br>
                                                    「.htaccess」ファイルの記述内容はサポート対象外となりますため、詳細はお客様にてお調べをお願いいたします。
                                                </p>
                                            </div>
                                    </aside>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「サイト転送設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「サイト転送設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_1.png" alt="サイト転送設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「リダイレクト設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>アドレスとリダイレクト先に転送先のURLを入力し、「確認画面へ進む」をクリックします。<br>
                                                    内容を確認し、問題がなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_2.png" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ステータスコードの選択について</h6>
                                                    <div class="msg_body">
                                                        <p>ステータスコードは選択していただかなくても、リダイレクト設定の追加はできます。<br>
                                                            選択しない場合は、301で設定されます。<br>
                                                            なお、必要に応じて、以下の手順でステータスコードは選択することができます。
                                                        </p>
                                                        <ol class="ol">
                                                            <li>
                                                                <p>「ステータスコードを選択する」にチェックを入れてください。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_3.png" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>
                                                            </li>
                                                            <li>
                                                                <p>ステータスコードを選択してください。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_4.png" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h4 class="section_ttl" id="link-previous-b">設定を変更しても正常に動作しない場合</h4>
                                        <div class="section_body">
                                            <p>リダイレクト設定を変更しても動作しない場合、</p>
                                                <ul class="ul">
                                                    <li>ご利用のインターネットブラウザ（Google Chromeなど）を一度終了し、再度起動させたうえで動作を確認する</li>
                                                    <li>別のインターネットブラウザで動作を確認する</li>
                                                </ul>
                                            <p>などをお試しください。<br>
                                                設定を変更した直後は、設定を変更する前の情報がインターネットブラウザ上に残っており、リダイレクト設定が正常に機能しない場合があります。</p>
                                        </div>
                                    </section>
                                    <!-- /.block -->
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
                                    <li><a href="#link-a">サイト転送設定</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「サイト転送設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.「サイト転送設定を追加」をクリック</a></li>
                                            <li><a href="#link-a03">3.「追加する」をクリック</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">設定を変更しても正常に動作しない場合</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">サイト転送設定</h4>
                                        <div class="section_body">

                                            <p>指定のURLへリダイレクト設定が可能です。</p>
                                            
                                            <aside class="msg msg_notice mt30">
                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>サブドメインを含む同一ドメインへの転送設定について</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            当機能を使用して設定を行うことはできますが、WEBサイトの構成によってはリダイレクトループが発生する可能性があります。<br>
                                                            同一ドメインへの転送で不具合が発生する場合は、「<a href="../manual/man_server_htaccess.php">.htaccess</a>」での設定をご検討ください。<br>
                                                            「.htaccess」ファイルの記述内容はサポート対象外となりますため、詳細はお客様にてお調べをお願いいたします。
                                                        </p>
                                                    </div>
                                            </aside>
                                            <div class="serial-box mb40">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a01">1.「サイト転送設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「サイト転送設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_1.png?date=2410" alt="サイト転送設定画面へ"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a02">2.「サイト転送設定を追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「サイト転送設定を追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_2.png?date=2410" alt="サイト転送設定を追加のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a03">3.「追加する」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>各項目を入力し、「追加する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_3.png?date=2410" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ステータスコードの選択について</h6>
                                                            <div class="msg_body">
                                                                <p>ステータスコードは選択していただかなくても、リダイレクト設定の追加はできます。<br>
                                                                    選択しない場合は、301で設定されます。<br>
                                                                    なお、必要に応じて、以下の手順でステータスコードは選択することができます。
                                                                </p>
                                                                <ol class="ol">
                                                                    <li>
                                                                        <p>「ステータスコードを選択する」にチェックを入れてください。</p>
                                                                        <p><img class="img" src="../img/manual/man_server_transfer_4.png?date=2410" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p>ステータスコードを選択してください。</p>
                                                                        <p><img class="img" src="../img/manual/man_server_transfer_5.png?date=2410" alt="サーバーパネルのリダイレクト設定のスクリーンショット"></p>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <section class="block">
                                                <h4 class="section_ttl" id="link-b">設定を変更しても正常に動作しない場合</h4>
                                                <div class="section_body">

                                                    <p>リダイレクト設定を変更しても動作しない場合、</p>
                                                    <ul class="ul">
                                                        <li>ご利用のインターネットブラウザ（Google Chromeなど）を一度終了し、再度起動させたうえで動作を確認する</li>
                                                        <li>別のインターネットブラウザで動作を確認する</li>
                                                    </ul>
                                                    <p>などをお試しください。<br>
                                                        設定を変更した直後は、設定を変更する前の情報がインターネットブラウザ上に残っており、リダイレクト設定が正常に機能しない場合があります。</p>
                                                </div>
                                            </section>
                                            <!-- /.block -->
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