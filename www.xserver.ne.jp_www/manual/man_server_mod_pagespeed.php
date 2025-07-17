<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>mod_pagespeed設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Google社により開発された拡張モジュール「mod_pagespeed」を使用して、Webサイトの表示速度を向上させる「mod_pagespeed設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">mod_pagespeed設定について</h3>

                <aside class="msg msg_notice">
                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>mod_pagespeedの新規受付は終了しました。</h6>
                    <div class="msg_body">
                        <p>
                            同機能をすでに有効化しているサイトは、引き続きご利用いただけます。
                        </p>
                    </div>
                </aside>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">mod_pagespeed設定とは</a></li>
                    <li><a href="#link-b">mod_pagespeed設定の切り替え手順</a>
                        <ol>
                            <li><a href="#link-b01">1.ログイン後、「mod_pagespeed設定」をクリックしてください。</a></li>
                            <li><a href="#link-b02">2.設定変更ボタンをクリック</a></li>
                            <li><a href="#link-b03">3.設定完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>               
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">mod_pagespeed設定とは</h4>
                    <div class="section_body">
                        <p>Google社により開発された拡張モジュール「mod_pagespeed」を使用して、Webサイトの表示速度を向上させる機能です。<br>
                        「mod_pagespeed設定」を有効にすると、ファイルを圧縮してデータ転送量を削減する、同種のファイルを一まとめにして無駄な通信を削減するなどの最適化処理を実施します。<br>
                        この最適化処理により、Webサイトにアクセスしたブラウザはデータ転送量が減少し、また、ページのロード時間を短縮できるため、Webサイトの表示速度改善を期待することができます。</p>
                        <p><img class="flex" src="../img/manual/man_server_mod_pagespeed_1.png" alt="mod_pagespeed処理イメージ"></p>
                        
                        <p>本機能を有効にすることで以下のような最適化処理が実施されます。</p>
                            <ul class="ul">
                                <li>CSSファイル、JavaScriptファイルなどの圧縮</li>
                                <li>最適な画像タイプへの変換、軽量化</li>
                                <li>同種のファイル(画像、CSS、JavaScriptファイルなど)を一つにまとめ、サーバーとクライアント間の無駄な通信(リクエスト)を削減</li>
                                <li>CSSファイル、JavaScriptファイル、画像ファイルのキャッシュ有効期間の延長</li>
                                <li>小さなファイルサイズのCSSやJavaScriptをHTML内に埋め込む</li>
                            </ul>
                        <p>など。</p>

                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用時の注意事項</h6>
                            <div class="msg_body">
                                <p>「mod_pagespeed設定」を有効にすると、最適化処理の影響でメモリ使用量やCPU負荷が若干上昇したり、一部画像ファイルの画質が低下する場合があります。<br>
                                    また、ブラウザやサーバーコンテンツの内容によっては、本機能を有効とした際にWebサイトの表示が崩れるなど、 異なる動作となる場合が稀にあります。その場合、本機能を無効に設定してください。</p>
                                <p>なお、最適化に伴うキャッシュ処理の影響によりCSSファイル、JavaScriptファイル、画像ファイルの更新が反映されるまで時間がかかる場合があります。</p>
                            </div>
                        </aside>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">mod_pagespeed設定の切り替え手順</h4>
                    <div class="section_body">
                    
                        <p>mod_pagespeed設定は、下記の手順で変更することが可能です。</p>
                    
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.ログイン後、「mod_pagespeed設定」をクリックしてください。</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインしていただき、高速化カテゴリ内の「mod_pagespeed設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_2.png?date=20220418" alt="mod_pagespeed設定をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.設定変更ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>設定を行う対象ドメインと、現在の設定をご確認の上、設定変更ボタン(ONにする/OFFにする)をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_3.png?date=20220418" alt="設定変更ボタンをクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.設定完了</h6>
                                <div class="box_body">
                                    <p>設定完了画面が表示されれば、設定完了です。</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_4.png?date=20220418" alt="設定変更完了"></p>
                                    <p>設定画面へと戻ると、設定が変更されていますので、ご確認ください。</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_5.png?date=20220418" alt="設定内容が変更されています"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
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