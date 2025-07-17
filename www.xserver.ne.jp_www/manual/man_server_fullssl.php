<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Webサイトの常時SSL化 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Webサイトを常時SSL化する方法について記載しています。">

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

                <h3 class="sub-ttl">Webサイトの常時SSL化</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Webサイトの常時SSL化</a></li>
                                    <li><a href="#link-previous-b">ご利用のCMSにおける常時SSL化</a></li>
                                    <li><a href="#link-previous-c">ブラウザ上で警告が表示されてしまう場合</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <aside class="msg msg_caution">
                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                                <div class="msg_body">
                                    <p>Webサイトを常時SSL化するには、「無料独自SSL」もしくは、「オプション独自SSL」のお申し込みが必要です。<br>
                                    お申し込みの手順は、以下のマニュアルをご参照ください。</p>
                                    <p>マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」「<a href="man_order_ssl.php">オプション独自SSLのお申し込み</a>」</p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Webサイトの常時SSL化</h4>
                                <p>独自SSLの設定が完了した時点では、自動的に「https://〜」のURLへ転送されません。</p>
                                <p>Webサイトにおけるすべての表示を常時SSL化する場合は、下記の設定を追加します。</p>
                                <div class="serial-box">

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a01">1. .htaccess編集をクリック</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「.htaccess編集」メニューをクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_fullssl_1.png" alt="サーバーパネル・.htaccess編集のスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a02">2. .htaccess編集画面を表示</h6>
                                        <div class="box_body">
                                            <p>「.htaccess編集」タブをクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_fullssl_2.png" alt="設定するドメインを選択し、「.htaccess編集」タブをクリック"></p>
                                        </div>
                                    </section>


                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a03">3. 設定内容の追加</h6>
                                        <div class="box_body">
                                            <p>既存の設定は<strong class="red">削除せず</strong>、以下の記述を追記します。<br>※設定が反映されない場合があるため、先頭へ追記する事を推奨しております。</p>
                                            <pre class="code mb0">RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]</pre>
                                            <p class="mt20"><img class="img" src="../img/manual/previous/man_server_fullssl_3.png" alt=".htaccessに追加する内容を入力しているスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a04">4. 設定完了</h6>
                                        <div class="box_body">
                                            <p>「http://〜」のURLでアクセスした際、自動的に「https://〜」のURLへ転送されていれば設定完了です。</p>
                                        </div>
                                    </section>

                                </div>
                                <!-- /.serial-box -->
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">ご利用のCMSにおける常時SSL化</h4>
                                <div class="section_body">
                                    <p>運用するCMSにおける常時SSL化は、前項の手順に加えて、プログラムのインストール後に以下の設定を行ってください。</p>
                                    <dl class="dl">
                                      <dt>WordPress</dt>
                                      <dd>WordPress管理画面(ダッシュボード)にログインし、「設定」＞「一般」にある「WordPress アドレス(URL)」「サイトアドレス(URL)」の設定内容を、https通信時のURL(https://〜)に変更してください。</dd>
                                      <dt>EC-CUBE 4</dt>
                                      <dd>マニュアル「EC-CUBE4」内の「<a href="man_install_auto_ec4.php#link-previous-d">[参考] サイトSSL設定</a>」をご参照ください。</dd>
                                      <dt>PukiWiki</dt>
                                      <dd>設定変更の必要はございません。</dd>
                                      <dt>その他のプログラム</dt>
                                      <dd>対象プログラムの提供元にご相談ください。</dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">ブラウザ上で警告が表示されてしまう場合</h4>
                                <div class="section_body">
                                    <p><img src="../img/manual/previous/man_server_fullssl.png" alt="「保護されない通信」が表示されてしまう場合" class="img"></p>
                                    <p class="mt30">画像やJavascript、CSSなどのファイルの読み込みにHTTP接続が用いられている場合、ブラウザでのアクセス時に「保護されていない通信」などの警告が表示されることがあります。</p>
                                    <p>Webサイト内のソースを確認し、リンク先のURLが「http://」で始まるものがある場合は「https://」へと変更するか、「相対パス」で指定するように修正してください。</p>
                                    <p>※アクセス解析のタグやブログパーツなど外部サーバーからデータを読み込んでいる場合、これら外部サーバーのファイルへのアクセスもSSL接続である必要があります。</p>
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
                                    <li><a href="#link-a">Webサイトの常時SSL化</a>
                                        <ol>
                                            <li><a href="#link-a01">1..htaccess編集をクリック</a></li>
                                            <li><a href="#link-a02">2.編集対象の編集をクリック</a></li>
                                            <li><a href="#link-a03">3.設定内容の追加</a></li>
                                            <li><a href="#link-a04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">ドメイン設定からの常時SSL化</a></li>
                                    <li><a href="#link-b">ご利用のCMSにおける常時SSL化</a></li>
                                    <li><a href="#link-c">ブラウザ上で警告が表示されてしまう場合</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <aside class="msg msg_caution">
                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                                <div class="msg_body">
                                    <p>Webサイトを常時SSL化するには、「無料独自SSL」もしくは、「オプション独自SSL」のお申し込みが必要です。<br>
                                        お申し込みの手順は、以下のマニュアルをご参照ください。</p>
                                    <p>マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」「<a href="man_order_ssl.php">オプション独自SSLのお申し込み</a>」</p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Webサイトの常時SSL化</h4>
                                <p>独自SSLの設定が完了した時点では、自動的に「https://〜」のURLへ転送されません。</p>
                                <p>Webサイトにおけるすべての表示を常時SSL化する場合は、下記の設定を追加します。</p>
                                <div class="serial-box">

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a01">1. .htaccess編集をクリック</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「.htaccess編集」メニューをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_server_fullssl_1.png?date=2410" alt="サーバーパネル・.htaccess編集のスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a02">2. 編集対象の編集をクリック</h6>
                                        <div class="box_body">
                                            <p>「編集」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_server_fullssl_2.png?date=2410" alt="「編集」をクリック"></p>
                                        </div>
                                    </section>


                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a03">3. 設定内容の追加</h6>
                                        <div class="box_body">
                                            <p>既存の設定は<strong class="red">削除せず</strong>、以下の記述を追記します。<br>※設定が反映されない場合があるため、先頭へ追記する事を推奨しております。</p>
                                            <pre class="code mb0">RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]</pre>
                                            <p class="mt20"><img class="img" src="../img/manual/man_server_fullssl_3.png?date=2410" alt=".htaccessに追加する内容を入力しているスクリーンショット"></p>
                                            <p>追記した後、「設定する」ボタンをクリックしてください。</p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a04">4. 設定完了</h6>
                                        <div class="box_body">
                                            <p>「http://〜」のURLでアクセスした際、自動的に「https://〜」のURLへ転送されていれば設定完了です。</p>
                                        </div>
                                    </section>

                                </div>
                                <!-- /.serial-box -->
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">ドメイン設定からの常時SSL化</h4>
                                <div class="section_body">
                                  <p>「<a href="man_domain_setting.php">ドメイン設定</a>」で追加したドメインの詳細より常時SSL化を行うことも可能です。</p>
                                  <p>常時SSL化を設定したいドメインの詳細を開き、HTTPS転送設定の「HTTPSに転送する」にチェックを入れて「設定する」をクリックしてください。</p>
                                  <p>※対象となるドメインにSSL証明書が設定されていないとONにすることができません。</p>
                                  <p><img src="../img/manual/man_server_fullssl_4.png" alt="ドメイン設定からの常時SSL化" class="img"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">ご利用のCMSにおける常時SSL化</h4>
                                <div class="section_body">
                                    <p>運用するCMSにおける常時SSL化は、前項の手順に加えて、プログラムのインストール後に以下の設定を行ってください。</p>
                                    <dl class="dl">
                                        <dt>WordPress</dt>
                                        <dd>WordPress管理画面(ダッシュボード)にログインし、「設定」＞「一般」にある「WordPress アドレス(URL)」「サイトアドレス(URL)」の設定内容を、https通信時のURL(https://〜)に変更してください。</dd>
                                        <dt>EC-CUBE 4</dt>
                                        <dd>マニュアル「EC-CUBE4」内の「<a href="man_install_auto_ec4.php#link-d">[参考] サイトSSL設定</a>」をご参照ください。</dd>
                                        <dt>PukiWiki</dt>
                                        <dd>設定変更の必要はございません。</dd>
                                        <dt>その他のプログラム</dt>
                                        <dd>対象プログラムの提供元にご相談ください。</dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 class="section_ttl" id="link-c">ブラウザ上で警告が表示されてしまう場合</h4>
                                <div class="section_body">
                                    <p><img src="../img/manual/man_server_fullssl.png" alt="「保護されない通信」が表示されてしまう場合" class="img"></p>
                                    <p class="mt30">画像やJavascript、CSSなどのファイルの読み込みにHTTP接続が用いられている場合、ブラウザでのアクセス時に「保護されていない通信」などの警告が表示されることがあります。</p>
                                    <p>Webサイト内のソースを確認し、リンク先のURLが「http://」で始まるものがある場合は「https://」へと変更するか、「相対パス」で指定するように修正してください。</p>
                                    <p>※アクセス解析のタグやブログパーツなど外部サーバーからデータを読み込んでいる場合、これら外部サーバーのファイルへのアクセスもSSL接続である必要があります。</p>
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