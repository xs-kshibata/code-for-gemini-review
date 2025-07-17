<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XPageSpeed設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「XPageSpeed設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">XPageSpeed設定について</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">XPageSpeed設定とは</a></li>
                                <li><a href="#link-previous-b">XPageSpeed設定の切り替え手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「XPageSpeed設定」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.設定変更ボタンをクリック</a></li>
                                        <li><a href="#link-previous-b03">3.設定を確定する</a></li>
                                        <li><a href="#link-previous-b04">4.設定完了</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">XPageSpeed設定とは</h4>
                                <div class="section_body">
                                    <p>「XPageSpeed」は、Google社により開発された拡張モジュール「PageSpeed Module」をもとに、エックスサーバーが開発したWebサイト最適化機能です。<br>
                                    「XPageSpeed設定」を有効にすると、ファイルを圧縮してデータ転送量を削減する、同種のファイルを一まとめにして無駄な通信を削減するなどの最適化処理を実施します。<br>
                                    この最適化処理により、ブラウザとサーバー間の転送量が減少し、ページのロード時間を短縮できるため、Webサイトの読み込み速度改善を期待することができます。</p>
                                    <p><img class="flex" src="../img/manual/previous/man_server_xpagespeed_1.png" alt="XPageSpeed処理イメージ"></p>

                                    <p>本機能を有効にすることで以下のような最適化処理が実施されます。</p>
                                        <ul class="ul">
                                            <li>CSSファイル、JavaScriptファイルなどの圧縮</li>
                                            <li>最適な画像タイプへの変換、軽量化</li>
                                            <li>同種のファイル(画像、CSS、JavaScriptファイルなど)を一つにまとめ、サーバーとクライアント間の無駄な通信(リクエスト)を削減</li>
                                            <li>CSSファイル、JavaScriptファイル、画像ファイルのキャッシュ有効期間の延長</li>
                                            <li>小さなファイルサイズのCSSやJavaScriptをHTML内に埋め込む</li>
                                        </ul>
                                    <p>など。</p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご利用時の注意事項</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>「XPageSpeed設定」を有効にすると、最適化処理の影響でメモリ使用量やCPU負荷が若干上昇したり、一部画像ファイルの画質が低下する場合があります。</li>
                                                <li> ブラウザやサーバーコンテンツの内容によっては、本機能を有効とした際にWebサイトの表示が崩れるなど、 異なる動作となる場合が稀にあります。その場合は、本機能を無効に設定してください。</li>
                                                <li> 最適化に伴うキャッシュ処理の影響によりCSSファイル、JavaScriptファイル、画像ファイルの更新が反映されるまで時間がかかる場合があります。</li>
                                                <li> サーバーに高負荷が発生している際は、一時的に最適化処理が無効化される場合があります。</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>対象サーバーについて</h6>
                                        <div class="msg_body">
                                            <table class="table table_responsive">
                                                <tbody>
                                                <tr>
                                                    <th>対象サーバー</th>
                                                    <td>sv10001.xserver.jp 以降のサーバー</td>
                                                </tr>
                                            </table>
                                            <p class="note">※お客様がご利用中のサーバーについては、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、「サーバー」項目内か、サーバーパネルの「サーバー情報」→「サーバー番号」からご確認ください。</p>
                                            <p class="note">※sv10000.xserver.jp 以前のサーバーでの「XPageSpeed」機能の提供については順次対応予定です。<br>
                                                sv10000.xserver.jp 以前のサーバーをご利用の方で、本機能の利用をお急ぎの場合は、無料で最新サーバー環境へ移行できる「新サーバー簡単移行」のご利用をご検討ください。<br>
                                                詳しくは、マニュアル「<a href="https://www.xserver.ne.jp/manual/man_order_servertransfer_flow.php">新サーバー簡単移行 ご利用手順</a>」をご参照ください。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">XPageSpeed設定の切り替え手順</h4>
                                <div class="section_body">

                                    <p>XPageSpeed設定は、下記の手順で変更することが可能です。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「XPageSpeed設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインしていただき、「XPageSpeed設定」メニューをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_2.png" alt="XPageSpeed設定をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. 設定変更ボタンをクリック</h6>
                                            <div class="box_body">
                                                <p>設定を行う対象ドメインと、現在の設定をご確認の上、設定変更ボタン(ON/OFF)にチェックをいれ、「確認画面へ進む」ボタンをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_3.png" alt="設定変更ボタンをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. 設定を確定する</h6>
                                            <div class="box_body">
                                                <p>「変更する」をクリックし、変更内容を確定してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_4.png" alt="変更するボタンをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4. 設定完了</h6>
                                            <div class="box_body">
                                                <p>設定完了画面が表示されれば、設定完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_5.png" alt="設定変更完了"></p>
                                                <p>設定画面へと戻ると、設定が変更されていますので、ご確認ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_6.png" alt="設定内容が変更されています"></p>
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
                                    <li><a href="#link-a">XPageSpeed設定とは</a></li>
                                    <li><a href="#link-b">XPageSpeed設定の切り替え手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「XPageSpeed設定」をクリック</a></li>
                                            <li><a href="#link-b02">2.変更ボタンを「ON」にする</a></li>
                                            <li><a href="#link-b03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">XPageSpeed設定とは</h4>
                                <div class="section_body">
                                    <p>「XPageSpeed」は、Google社により開発された拡張モジュール「PageSpeed Module」をもとに、エックスサーバーが開発したWebサイト最適化機能です。<br>
                                        「XPageSpeed設定」を有効にすると、ファイルを圧縮してデータ転送量を削減する、同種のファイルを一まとめにして無駄な通信を削減するなどの最適化処理を実施します。<br>
                                        この最適化処理により、Webサイトにアクセスしたブラウザはデータ転送量が減少し、また、ページのロード時間を短縮できるため、Webサイトの読み込み速度改善を期待することができます。</p>
                                    <p><img class="flex" src="../img/manual/man_server_xpagespeed_1.png?date=2410" alt="XPageSpeed処理イメージ"></p>
                                    <p>本機能を有効にすることで以下のような最適化処理が実施されます。</p>
                                    <ul class="ul">
                                        <li>CSSファイル、JavaScriptファイルなどの圧縮</li>
                                        <li>最適な画像タイプへの変換、軽量化</li>
                                        <li>同種のファイル(画像、CSS、JavaScriptファイルなど)を一つにまとめ、サーバーとクライアント間の無駄な通信(リクエスト)を削減</li>
                                        <li>CSSファイル、JavaScriptファイル、画像ファイルのキャッシュ有効期間の延長</li>
                                        <li>小さなファイルサイズのCSSやJavaScriptをHTML内に埋め込む</li>
                                    </ul>
                                    <p>など。</p>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご利用時の注意事項</h5>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>「XPageSpeed設定」を有効にすると、最適化処理の影響でメモリ使用量やCPU負荷が若干上昇したり、一部画像ファイルの画質が低下する場合があります。</li>
                                                <li> ブラウザやサーバーコンテンツの内容によっては、本機能を有効とした際にWebサイトの表示が崩れるなど、 異なる動作となる場合が稀にあります。その場合は、本機能を無効に設定してください。</li>
                                                <li> 最適化に伴うキャッシュ処理の影響によりCSSファイル、JavaScriptファイル、画像ファイルの更新が反映されるまで時間がかかる場合があります。</li>
                                                <li> サーバーに高負荷が発生している際は、一時的に最適化処理が無効化される場合があります。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">XPageSpeed設定の切り替え手順</h4>
                                <div class="section_body">
                                    <p>XPageSpeed設定は、下記の手順で変更することが可能です。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. 「XPageSpeed設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「XPageSpeed設定」メニューをクリックしてください。</p>
                                                <p><img alt="「XPageSpeed設定」をクリック" class="img" src="../img/manual/man_server_xpagespeed_2.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. 変更ボタンを「ON」にする</h5>
                                            <div class="box_body">
                                                <p>設定を行う対象ドメインと、現在の設定をご確認の上、変更ボタンをクリックして「ON」にしてください。</p>
                                                <p><img alt="変更ボタンを「ON」にする" class="img" src="../img/manual/man_server_xpagespeed_3.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3. 設定完了</h5>
                                            <div class="box_body">
                                                <p>設定状況が「ON」に変更されていれば、設定完了です。</p>
                                                <p><img alt="設定完了" class="img" src="../img/manual/man_server_xpagespeed_4.png?date=2410"></p>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section><!-- /.section -->


                        </div><!-- 新パネル終わり-->
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