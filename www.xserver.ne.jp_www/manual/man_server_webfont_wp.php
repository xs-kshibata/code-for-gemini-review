<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Webフォント設定について(WordPressプラグイン) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜WordPressの専用プラグインを用いてWebフォントを設定する手順を紹介しています。">

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
            
                <h3 class="sub-ttl">WordPressプラグインでのご利用</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">WordPressサイトを新しくご利用の場合</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「Webフォント設定」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.設定するドメインを選択</a></li>
                                            <li><a href="#link-previous-a03">3.WordPressを新規インストール</a></li>
                                            <li><a href="#link-previous-a04">4.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-previous-a05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a></li>
                                            <li><a href="#link-previous-a06">6.フォントテーマの設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">WordPressサイトをすでに運用中の場合</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「Webフォント設定」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.設定するドメインを選択</a></li>
                                            <li><a href="#link-previous-b03">3.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-previous-b04">4.プラグインを新規追加</a></li>
                                            <li><a href="#link-previous-b05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a></li>
                                            <li><a href="#link-previous-b06">6.フォントテーマの設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">プラグインバージョン1.2以前の使い方</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">サイト全体にフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-previous-c02">オリジナルのフォントテーマを作成する</a>
                                            </li>
                                            <li><a href="#link-previous-c03">記事ごとにフォントテーマを設定する</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">プラグインバージョン2.0以降の使い方</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">サイト全体にフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-previous-d02">オリジナルのフォントテーマを作成する</a>
                                            </li>
                                            <li><a href="#link-previous-d03">記事ごとにフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-previous-d04">サイトフォント設定（バージョン2.0以降の新機能）</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">Webフォントの適用を解除する方法について</a></li>
                                    <!--
                                    <li><a href="#link-d">[参考]オリジナルのフォントテーマを作成する方法</a>
                                        <ol>
                                            <li><a href="#link-d01">1.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-d02">2.Webフォントの設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">[参考]記事ごとにフォントテーマを設定する方法</a>
                                        <ol>
                                            <li><a href="#link-e01">1.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-e02">2.カスタマイズの選択</a></li>
                                        </ol>
                                    </li>
                                    -->
                                    <li><a href="#link-previous-f">[参考]フォントテーマ一覧</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Webフォントに関する「よくある質問」</a></li>
                            </ul>

                            <ul class="list list_arrow-right">
                                <li>機能の仕様などについては、「<a href="../functions/service_webfont.php">機能 > Webフォント</a>」をご参照ください。</li>
                                <li>HTMLに直接記述してご利用の場合は、「<a href="man_server_webfont_html.php">マニュアル > Webフォント設定について > HTML記述形式でのご利用</a>」をご参照ください。</li>
                            </ul>

                            <div class="msg msg_notice">
                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能のご利用に関して</h4>
                                <div class="msg_body">
                                    <ul class="ul">
                                        <li>33書体を月間7.5万PVまでご利用いただけます。<br>また、月間7.5万PVを超える場合、Webフォントの適用は外れますが、ブラウザ標準でのフォント表示に戻る為、表示内容に影響はありません。</li>
                                        <li>利用可能な書体以外を指定することはできません。</li>
                                        <li>お客様が編集されたプログラム等に関する技術的内容のお問い合わせについてはサポート対象外です。<br>また、サイトの状況によってご利用いただけない場合もあります。</li>
                                    </ul>
                                </div>
                            </div>

                            <aside class="msg">
                                <div class="msg_body">
                                    <p class="font-bold">Webフォントの適用が解除されない場合は下記をご参照ください。</p>
                                    <ul class="list list_arrow-down mb0">
                                        <li><a href="#i7">Webフォントの適用を解除する方法について</a></li>
                                    </ul>
                                </div>
                            </aside>

                            <section id="i1" class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPressサイトを新しくご利用の場合</h4>
                                <div class="section_body">
                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">WordPressサイトをすでに運用中の場合は以下をご参照ください。</p>
                                            <ul class="list list_arrow-down mb0">
                                                <li><a href="#i2">WordPressサイトをすでに運用中の場合</a></li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box" id="link-previous-a01">
                                            <h5 id="i5" class="box_ttl">1.「Webフォント設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="設定対象ドメインを確認して、「Webフォント設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.設定するドメインを選択</h5>
                                            <div class="box_body">
                                                <p>「Webフォント設定の追加」のプルダウンメニューより設定するドメインを選択し「設定する」ボタンクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Webフォントを設定するドメインを選択し、「設定」ボタンをクリック"></p>
                                                <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                    <div class="msg_body">
                                                        <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                        <p>また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                        <p class="mb0">なお、解除後は、プラグイン「TypeSquare Webfonts for エックスサーバー」の「無効化」をお願いいたします。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.WordPressを新規インストール</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単インストール」よりWordPressをインストールします。<br>
                                                インストール方法の詳細はマニュアル「<a href="man_install_auto_word.php">簡単インストール > WordPress 日本語版</a>」をご参照ください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.WordPressの管理画面へログイン</h5>
                                            <div class="box_body">
                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</h5>
                                            <div class="box_body">
                                                <p>左側のメニューより「プラグイン > インストール済みプラグイン」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp2.png" alt="「プラグイン > インストール済みプラグイン」をクリック"></p>

                                                <p>プラグイン「TypeSquare Webfonts for エックスサーバー」の「有効化」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp3.png" alt="「TypeSquare Webfonts for エックスサーバー」を「有効化」"></p>

                                                <div class="msg msg_notice">
                                                    <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>プラグインがインストールされていない場合</h4>
                                                    <div class="msg_body">
                                                        <p class="mb0">「WordPressサイトをすでに運用中の場合」手順の「<a href="#i14">4.プラグインを新規追加</a>」から「<a href="#i15">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a>」をご参照の上、プラグインの追加を行ってください。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a06">6.フォントテーマの設定</h5>
                                            <div class="box_body">
                                                <p>左側のメニューに追加されている「TypeSquare Webfonts」から、フォントテーマ設定を行うことができます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp4.png" alt="「TypeSquare Webfonts」をクリック"></p>
                                                <p>フォントテーマの設定方法はプラグインバージョンによって異なります。<br>以下をご参照ください。</p>
                                                <ul class="list list_arrow-down mb0">
                                                    <li><a href="#link-previous-d">プラグインバージョン1.2以前の使い方</a></li>
                                                    <li><a href="#link-previous-e">プラグインバージョン2.0以降の使い方</a></li>
                                                </ul>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i2" class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPressサイトをすでに運用中の場合</h4>
                                <div class="section_body">

                                    <div class="serial-box" id="link-previous-b01">

                                        <section class="box">
                                            <h5 id="i5" class="box_ttl">1.「Webフォント設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="設定対象ドメインを確認して、「Webフォント設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.設定するドメインを選択</h5>
                                            <div class="box_body">
                                                <p>「Webフォント設定の追加」のプルダウンメニューより設定するドメインを選択し「設定する」ボタンクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Webフォントを設定するドメインを選択し、「設定」ボタンをクリック"></p>
                                                <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                    <div class="msg_body">
                                                        <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                        <p>また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                        <p class="mb0">なお、解除後は、プラグイン「TypeSquare Webfonts for エックスサーバー」の「無効化」をお願いいたします。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.WordPressの管理画面へログイン</h5>
                                            <div class="box_body">
                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-previous-b04">
                                            <h5 id="i14" class="box_ttl">4.プラグインを新規追加</h5>
                                            <div class="box_body">
                                                <p>左側のメニューより「プラグイン > 新規追加」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp5.png" alt="「プラグイン > 新規追加」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-previous-b05">
                                            <h5 id="i15" class="box_ttl">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</h5>
                                            <div class="box_body">
                                                <p>プラグイン「TypeSquare Webfonts for エックスサーバー」を検索ボックスより検索し、「今すぐインストール」をクリックしてください。<br>
                                                インストール完了後、プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp10.png" alt="「今すぐインストール」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b06">6.フォントテーマの設定</h5>
                                            <div class="box_body">
                                                <p>左側のメニューに追加されている「TypeSquare Webfonts」から、フォントテーマ設定を行うことができます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp4.png" alt="「TypeSquare Webfonts」をクリック"></p>
                                                <p>フォントテーマの設定方法はプラグインバージョンによって異なります。<br>以下をご参照ください。</p>
                                                <ul class="list list_arrow-down mb0">
                                                    <li><a href="#link-previous-c">プラグインバージョン1.2以前の使い方</a></li>
                                                    <li><a href="#link-previous-d">プラグインバージョン2.0以降の使い方</a></li>
                                                </ul>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">プラグインバージョン1.2以前の使い方</h4>
                                <div class="section_body">
                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>設定の前に</h5>
                                        <div class="msg_body">
                                            <p class="mb0">既にプラグイン「TypeSquare Webfonts for エックスサーバー」をインストールし、有効化されている方向けのご案内となります。</p>
                                        </div>
                                    </div><!-- サイト全体にフォントテーマを設定する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c01">サイト全体にフォントテーマを設定する</h5>
                                        <div class="block_body">
                                            <p>サイト全体にフォントテーマを適用することができます。</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img alt="WordPressの管理画面にログイン" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.フォントテーマの設定</h6>
                                                    <div class="box_body">
                                                        <p>フォントテーマのプルダウンメニューからテーマを選択して「フォントテーマを更新する」をクリックしてください。</p>
                                                        <p><img alt="「フォントテーマを更新する」をクリック" class="img" src="../img/manual/previous/man_server_webfont_wp4.png"></p>
                                                        <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>
                                                            フォントテーマの一覧は「<a href="#i6">フォントテーマ一覧</a>」をご参照ください。</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div><!-- オリジナルのフォントテーマを作成する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c02">オリジナルのフォントテーマを作成する</h5>
                                        <div class="block_body">
                                            <p>Webフォントを自由に組み合わせて、オリジナルのテーマを作ることができます。こだわったデザインにしたい方などにおすすめです。</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img alt="WordPressの管理画面にログイン" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.Webフォントの設定</h6>
                                                    <div class="box_body">
                                                        <p>フォントテーマのプルダウンメニューから「新しくテーマを作成する」を選択してください。</p>
                                                        <p><img alt="「新しくテーマを作成する」を選択" class="img" src="../img/manual/previous/man_server_webfont_wp6.png"></p>
                                                        <p>任意のテーマタイトルを設定し、「タイトル」「リード」「本文」「太字」のプルダウンメニューより利用したいフォントをそれぞれ選択してください。</p>
                                                        <p><img alt="「タイトル」「リード」「本文」「太字」のプルダウンメニューより利用したいフォントをそれぞれ選択" class="img" src="../img/manual/man_server_webfont_wp7.png"></p>
                                                        <p>ご利用のWordPressテーマによっては、記事タイトル・ウィジェットタイトルなどにフォントテーマが適用されない場合があります。<br>
                                                            その際は以下の「フォント設定クラス」機能をご利用ください。</p>
                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m" id="i8"><i class="ico ico_circle-arrow-right"></i>フォント設定クラスについて</h6>
                                                            <div class="msg_body">
                                                                <p>「上級者向けカスタマイズ」の「フォント設定クラス」では、Webフォントを適用する「HTMLタグ」および「class属性」を設定することが可能です。</p>
                                                                <p><img alt="指定した「HTMLタグ」および「class属性」に設定することが可能" class="img" src="../img/manual/previous/man_server_webfont_wp8.png"></p>
                                                                <p class="mb0">なお、「フォント設定クラス」は上級者向けの設定となります。<br>
                                                                    WordPressの操作に慣れていない方、HTML/CSSの知識がない方に関しては、設定を変更しなくても問題ありません。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div><!-- 記事ごとにフォントテーマを設定する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c03">記事ごとにフォントテーマを設定する</h5>
                                        <div class="block_body">
                                            <p></p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img alt="WordPressの管理画面にログイン" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-e02">2.カスタマイズの選択</h5>
                                                    <div class="box_body">
                                                        <p>「上級者向けのカスタマイズ」をクリックし、「個別記事フォント設定」の「有効化する」チェックボックスにチェックを入れて、「個別記事フォント設定を更新する」をクリックしてください。</p>
                                                        <p><img alt="「上級者向けのカスタマイズ」をクリック" class="img" src="../img/manual/previous/man_server_webfont_wp9.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">プラグインバージョン2.0以降の使い方</h4>
                                <div class="section_body">

                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>プラグインバージョン2.0へのバージョンアップに関して</h5>
                                        <div class="msg_body">

                                            <ul class="ul">
                                                <li class="mb10">
                                                    プラグインのバージョンアップ後、ブラウザキャッシュが残っているとプラグインが正常に表示されない場合があります。
                                                    その際はキャッシュを削除してから再度ページを読み込んでください。
                                                </li>
                                                <li class="mb10">
                                                    バージョン1.2以前の<a href="#i8">フォント設定クラス</a>機能は、<a href="#i9">直接指定（上級者向け）</a>機能にリニューアルされました。
                                                    バージョンアップすると、以前フォント設定クラス機能で設定していた内容はクリアされますのでご注意ください。
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- サイト全体にフォントテーマを設定する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d01">サイト全体にフォントテーマを設定する</h5>
                                        <div class="block_body">
                                            <p>サイト全体にフォントテーマを適用することができます。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.設定メニューの選択</h6>
                                                    <div class="box_body">
                                                        <p>「投稿記事フォント設定」のリンクをクリックして「共通テーマ指定」にチェックを入れてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_1.png" alt="「投稿記事フォント設定」のリンク"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">3.フォントテーマの設定</h6>
                                                    <div class="box_body">
                                                        <p>フォントテーマのプルダウンメニューからテーマを選択して「投稿フォント設定を保存する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_2.png" alt="「投稿フォント設定を保存する」をクリック"></p>
                                                        <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>フォントテーマの一覧は「<a href="#i6">フォントテーマ一覧</a>」をご参照ください。</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- オリジナルのフォントテーマを作成する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d02">オリジナルのフォントテーマを作成する</h5>
                                        <div class="block_body">
                                            <p>Webフォントを自由に組み合わせて、オリジナルのテーマを作ることができます。こだわったデザインにしたい方などにおすすめです。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.カスタムテーマの設定</h6>
                                                    <div class="box_body">
                                                        <p>「カスタムテーマ編集」のリンクをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_3.png" alt="「カスタムテーマ編集」のリンクをクリック"></p>

                                                        <p>任意のテーマタイトルを設定し、「見出し」「リード」「本文」「太字」のプルダウンメニューより利用したいフォントをそれぞれ選択してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_4.png" alt="利用したいフォントをそれぞれ選択"></p>

                                                        <p>「共通テーマ指定」のプルダウンメニューで、作成したテーマを選択できます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_5.png" alt="利用したいフォントをそれぞれ選択"></p>

                                                        <p>ご利用のWordPressテーマによっては、記事タイトル・ウィジェットタイトルなどにフォントテーマが適用されない場合があります。<br>その際は以下の「直接指定」機能をご利用ください。</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m" id="i9"><i class="ico ico_circle-arrow-right"></i>直接指定（上級者向け）について</h6>
                                                            <div class="msg_body">
                                                                <p>「投稿記事フォント設定」の「直接指定（上級者向け）」では、Webフォントを適用する「HTMLタグ」および「class属性」を設定することが可能です。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_6.png" alt="指定した「HTMLタグ」および「class属性」に設定することが可能"></p>
                                                                <p class="mb0">なお、「直接指定（上級者向け）」は上級者向けの設定となります。<br>WordPressの操作に慣れていない方、HTML/CSSの知識がない方に関しては、設定を変更しなくても問題ありません。</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- 記事ごとにフォントテーマを設定する -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d03">記事ごとにフォントテーマを設定する</h5>
                                        <div class="block_body">
                                            <p>個別の投稿ごとに設定したフォントテーマを適用することができます。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.設定メニューの選択</h6>
                                                    <div class="box_body">
                                                        <p>「投稿記事フォント設定」のリンクをクリックして「個別テーマ指定」にチェックを入れてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_7.png" alt="「個別テーマ指定」にチェック"></p>
                                                        <br>

                                                        <p>WordPress投稿画面に、フォントテーマを指定できる機能が表示されます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_8.png" alt="フォントテーマを指定できる機能"></p>
                                                    </div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- サイトフォント設定 -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d04">サイトフォント設定（バージョン2.0以降の新機能）</h5>
                                        <div class="block_body">
                                            <p>サイトのタイトルやキャッチコピーに、個別でフォントを設定することができます。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPressの管理画面へログイン</h6>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.サイトフォントの設定</h6>
                                                    <div class="box_body">
                                                        <p>各項目で利用したいフォントを選択してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_9.png" alt="利用したいフォントを選択"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i7" class="section">
                                <h4 class="section_ttl" id="link-previous-e">Webフォントの適用を解除する方法について</h4>
                                <div class="section_body">
                                    <p>Webフォントの適用を解除するには、以下の作業を順に行ってください。</p>
                                    <ol class="ol ol_margin">
                                        <li>プラグイン「TypeSquare Webfonts for エックスサーバー」を無効化にしてください。</li>

                                        <li>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>」⇒「Webフォント設定」よりドメインの登録を解除してください。</li>
                                    </ol>
                                    <p>以上の作業を行った後、Webフォントの適用が外れているかご確認ください。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i6" class="section">
                                <h4 class="section_ttl" id="link-previous-f">[参考]フォントテーマ一覧</h4>
                                <div class="section_body">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>テーマ名</th>
                                                <th>見出し</th>
                                                <th>リード</th>
                                                <th>本文</th>
                                                <th>太字</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>ベーシック</th>
                                                <td>新ゴ B</td>
                                                <td>新ゴ B</td>
                                                <td>新ゴ R</td>
                                                <td>新ゴ B</td>
                                            </tr>
                                            <tr>
                                                <th>スタイリッシュ</th>
                                                <td>見出ゴMB31</td>
                                                <td>見出ゴMB31</td>
                                                <td>TBUDゴシック R</td>
                                                <td>TBUDゴシック E</td>
                                            </tr>
                                            <tr>
                                                <th>カジュアル</th>
                                                <td>秀英にじみ丸ゴシック B</td>
                                                <td>丸フォーク M</td>
                                                <td>トーキング</td>
                                                <td>秀英にじみ丸ゴシック B</td>
                                            </tr>
                                            <tr>
                                                <th>ニュース</th>
                                                <td>リュウミン B-KL</td>
                                                <td>リュウミン B-KL</td>
                                                <td>黎ミン M</td>
                                                <td>リュウミン B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>ビジネス</th>
                                                <td>リュウミン B-KL</td>
                                                <td>リュウミン B-KL</td>
                                                <td>TBUDゴシック R</td>
                                                <td>TBUDゴシック E</td>
                                            </tr>
                                            <tr>
                                                <th>ファッション</th>
                                                <td>丸フォーク M</td>
                                                <td>丸フォーク M</td>
                                                <td>新ゴ R</td>
                                                <td>新ゴ B</td>
                                            </tr>
                                            <tr>
                                                <th>エレガント</th>
                                                <td>A1明朝</td>
                                                <td>A1明朝</td>
                                                <td>黎ミン M</td>
                                                <td>リュウミン B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>繊細</th>
                                                <td>A1明朝</td>
                                                <td>しまなみ</td>
                                                <td>リュウミン R-KL</td>
                                                <td>リュウミン B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>ポップ</th>
                                                <td>ぶらっしゅ</td>
                                                <td>ぶらっしゅ</td>
                                                <td>じゅん 501</td>
                                                <td>G2サンセリフ-B</td>
                                            </tr>
                                            <tr>
                                                <th>コミカル</th>
                                                <td>新ゴ シャドウ</td>
                                                <td>新ゴ シャドウ</td>
                                                <td>じゅん 501</td>
                                                <td>G2サンセリフ-B</td>
                                            </tr>
                                            <tr>
                                                <th>和風</th>
                                                <td>さくらぎ蛍雪</td>
                                                <td>しまなみ</td>
                                                <td>リュウミン R-KL</td>
                                                <td>リュウミン B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>はんなり</th>
                                                <td>那欽</td>
                                                <td>那欽</td>
                                                <td>黎ミン M</td>
                                                <td>リュウミン B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>伝統</th>
                                                <td>教科書ICA M</td>
                                                <td>さくらぎ蛍雪</td>
                                                <td>さくらぎ蛍雪</td>
                                                <td>教科書ICA M</td>
                                            </tr>
                                            <tr>
                                                <th>ナチュラル</th>
                                                <td>はるひ学園</td>
                                                <td>はるひ学園</td>
                                                <td>シネマレター</td>
                                                <td>竹 B</td>
                                            </tr>
                                            <tr>
                                                <th>レトロ</th>
                                                <td>秀英にじみ丸ゴシック B</td>
                                                <td>シネマレター</td>
                                                <td>トーキング</td>
                                                <td>じゅん 501</td>
                                            </tr>
                                            <tr>
                                                <th>ホラー</th>
                                                <td>TB古印体</td>
                                                <td>TB古印体</td>
                                                <td>陸隷</td>
                                                <td>陸隷</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                    <li><a href="#link-a">WordPressサイトを新しくご利用の場合</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「Webフォント設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.設定するドメインを選択</a></li>
                                            <li><a href="#link-a03">3.WordPressを新規インストール</a></li>
                                            <li><a href="#link-a04">4.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-a05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a></li>
                                            <li><a href="#link-a06">6.フォントテーマの設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">WordPressサイトをすでに運用中の場合</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「Webフォント設定」をクリック</a></li>
                                            <li><a href="#link-b02">2.設定するドメインを選択</a></li>
                                            <li><a href="#link-b03">3.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-b04">4.プラグインを新規追加</a></li>
                                            <li><a href="#link-b05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a></li>
                                            <li><a href="#link-b06">6.フォントテーマの設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">プラグインバージョン1.2以前の使い方</a>
                                        <ol>
                                            <li><a href="#link-c01">サイト全体にフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-c02">オリジナルのフォントテーマを作成する</a>
                                            </li>
                                            <li><a href="#link-c03">記事ごとにフォントテーマを設定する</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">プラグインバージョン2.0以降の使い方</a>
                                        <ol>
                                            <li><a href="#link-d01">サイト全体にフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-d02">オリジナルのフォントテーマを作成する</a>
                                            </li>
                                            <li><a href="#link-d03">記事ごとにフォントテーマを設定する</a>
                                            </li>
                                            <li><a href="#link-d04">サイトフォント設定（バージョン2.0以降の新機能）</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">Webフォントの適用を解除する方法について</a></li>
                                    <li><a href="#link-f">[参考]フォントテーマ一覧</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Webフォントに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <ul class="list list_arrow-right">
                                        <li>機能の仕様などについては、「<a href="../functions/service_webfont.php" target="_blank">Webフォント</a><i class="ico ico--newWindow"></i>」をご参照ください。</li>
                                        <li>HTMLに直接記述してご利用の場合は、「<a href="man_server_webfont_html.php">HTML記述形式でのご利用</a>」をご参照ください。</li>
                                    </ul>

                                    <div class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能のご利用に関して</h4>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>33書体を月間7.5万PVまでご利用いただけます。<br>また、月間7.5万PVを超える場合、Webフォントの適用は外れますが、ブラウザ標準でのフォント表示に戻る為、表示内容に影響はありません。</li>
                                                <li>利用可能な書体以外を指定することはできません。</li>
                                                <li>お客様が編集されたプログラム等に関する技術的内容のお問い合わせについてはサポート対象外です。<br>また、サイトの状況によってご利用いただけない場合もあります。</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">Webフォントの適用が解除されない場合は下記をご参照ください。</p>
                                            <ul class="list list_arrow-down mb0">
                                                <li><a href="#link-e">Webフォントの適用を解除する方法について</a></li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <section id="link-a" class="section">
                                        <h3 class="section_ttl">WordPressサイトを新しくご利用の場合</h3>
                                        <div class="section_body">

                                            <aside class="msg">
                                                <div class="msg_body">
                                                    <p class="font-bold">WordPressサイトをすでに運用中の場合は以下をご参照ください。</p>
                                                    <ul class="list list_arrow-down mb0">
                                                        <li><a href="#link-b">WordPressサイトをすでに運用中の場合</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a01">1.「Webフォント設定」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png" alt="「Webフォント設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a02">2.設定するドメインを選択</h4>
                                                    <div class="box_body">
                                                        <p>「Webフォント設定を追加」をクリックし、「サイト」のプルダウンメニューより設定するドメインを選択し「追加する」ボタンクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png?date=2410" alt="Webフォントを設定するドメインを選択し、「追加する」ボタンをクリック"></p>
                                                        <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                            <div class="msg_body">
                                                                <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                                <p>また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                                <p class="mb0">なお、解除後は、プラグイン「TypeSquare Webfonts for エックスサーバー」の「無効化」をお願いいたします。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a03">3.WordPressを新規インストール</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単インストール」よりWordPressをインストールします。<br>
                                                            インストール方法の詳細はマニュアル「<a href="man_install_auto_word.php">簡単インストール > WordPress 日本語版</a>」をご参照下さい。
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a04">4.WordPressの管理画面へログイン</h4>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインして下さい。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</h4>
                                                    <div class="box_body">
                                                        <p>左側のメニューより「プラグイン > インストール済みプラグイン」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp2.png?date=2410" alt="「プラグイン > インストール済みプラグイン」をクリック"></p>

                                                        <p>プラグイン「TypeSquare Webfonts for エックスサーバー」の「有効化」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp3.png?date=2410" alt="「TypeSquare Webfonts for エックスサーバー」を「有効化」"></p>

                                                        <div class="msg msg_notice">
                                                            <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>プラグインがインストールされていない場合</h4>
                                                            <div class="msg_body">
                                                                <p class="mb0">「WordPressサイトをすでに運用中の場合」手順の「<a href="#link-b04">4.プラグインを新規追加</a>」から「<a href="#link-b05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</a>」をご参照の上、プラグインの追加を行ってください。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a06">6.フォントテーマの設定</h4>
                                                    <div class="box_body">
                                                        <p>左側のメニューに追加されている「TypeSquare Webfonts」をクリックし、フォントテーマのプルダウンメニューからテーマを選択して「フォントテーマを更新する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="「TypeSquare Webfonts」をクリック"></p>
                                                        <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>フォントテーマの一覧は「<a href="#link-f">フォントテーマ一覧</a>」をご参照ください。</p>
                                                    </div>
                                                </section>


                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">WordPressサイトをすでに運用中の場合</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b01">1.「Webフォント設定」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png?date=2410" alt="「Webフォント設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b02">2.設定するドメインを選択</h4>
                                                    <div class="box_body">
                                                        <p>「Webフォント設定の追加」をクリックし、「サイト」のプルダウンメニューより設定するドメインを選択し「追加する」ボタンクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png?date=2410" alt="Webフォントを設定するドメインを選択し、「追加する」ボタンをクリック"></p>
                                                        <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                            <div class="msg_body">
                                                                <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                                <p>また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                                <p class="mb0">なお、解除後は、プラグイン「TypeSquare Webfonts for エックスサーバー」の「無効化」をお願いいたします。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b03">3.WordPressの管理画面へログイン</h4>
                                                    <div class="box_body">
                                                        <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインして下さい。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b04">4.プラグインを新規追加</h4>
                                                    <div class="box_body">
                                                        <p>左側のメニューより「プラグイン > 新規追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp5.png?date=2410" alt="「プラグイン > 新規追加」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b05">5.プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            プラグイン「TypeSquare Webfonts for エックスサーバー」を検索ボックスより検索し、「今すぐインストール」をクリックしてください。<br>
                                                            インストール完了後、プラグイン「TypeSquare Webfonts for エックスサーバー」を有効化して下さい。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp10.png?date=2410" alt="「今すぐインストール」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b06">6.フォントテーマの設定</h4>
                                                    <div class="box_body">
                                                        <p>左側のメニューに追加されている「TypeSquare Webfonts」をクリックし、フォントテーマのプルダウンメニューからテーマを選択して「フォントテーマを更新する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="「TypeSquare Webfonts」をクリック"></p>
                                                        <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>フォントテーマの一覧は「<a href="#link-f">フォントテーマ一覧</a>」をご参照ください。</p>
                                                    </div>
                                                </section>


                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <section id="link-c" class="section">
                                        <div class="section_body">
                                            <h4 class="section_ttl">プラグインバージョン1.2以前の使い方</h4>
                                            <div class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>設定の前に</h6>
                                                <div class="msg_body">
                                                    <p>既にプラグイン「TypeSquare Webfonts for エックスサーバー」をインストールし、有効化されている方向けのご案内となります。</p>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-c01">サイト全体にフォントテーマを設定する</h5>
                                                <div class="block_body">
                                                    <p>サイト全体にフォントテーマを適用することができます。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPressの管理画面へログイン</h5>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.フォントテーマの設定</h5>
                                                            <div class="box_body">
                                                                <p>フォントテーマのプルダウンメニューからテーマを選択して「フォントテーマを更新する」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="「フォントテーマを更新する」をクリック"></p>
                                                                <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>
                                                                    フォントテーマの一覧は「<a href="#link-f">フォントテーマ一覧</a>」をご参照ください。</p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-c02">オリジナルのフォントテーマを作成する</h4>
                                                <div class="block_body">
                                                    <p>Webフォントを自由に組み合わせて、オリジナルのテーマを作ることができます。こだわったデザインにしたい方などにおすすめです。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPressの管理画面へログイン</h5>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.Webフォントの設定</h5>
                                                            <div class="box_body">
                                                                <p>フォントテーマのプルダウンメニューから「新しくテーマを作成する」を選択してください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp6.png?date=2410" alt="「新しくテーマを作成する」を選択"></p>
                                                                <p>任意のテーマタイトルを設定し、「タイトル」「リード」「本文」「太字」のプルダウンメニューより利用したいフォントをそれぞれ選択してください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp7.png?date=2410" alt="利用したいフォントをそれぞれ選択"></p>
                                                                <p>ご利用のWordPressテーマによっては、記事タイトル・ウィジェットタイトルなどにフォントテーマが適用されない場合があります。<br>
                                                                    その際は以下の「フォント設定クラス」機能をご利用ください。</p>
                                                                <div class="msg msg_notice" id="link-c2_font">
                                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>フォント設定クラスについて</h6>
                                                                    <div class="msg_body">
                                                                        <p>「上級者向けカスタマイズ」の「フォント設定クラス」では、Webフォントを適用する「HTMLタグ」および「class属性」を設定することが可能です。</p>
                                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp8.png?date=2410" alt="「HTMLタグ」および「class属性」を設定"></p>
                                                                        <p>なお、「フォント設定クラス」は上級者向けの設定となります。<br>
                                                                            WordPressの操作に慣れていない方、HTML/CSSの知識がない方に関しては、設定を変更しなくても問題ありません。</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-c03">記事ごとにフォントテーマを設定する</h5>
                                                <div class="block_body">
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPressの管理画面へログイン</h5>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.カスタマイズの選択</h5>
                                                            <div class="box_body">
                                                                <p>「上級者向けのカスタマイズ」をクリックし、「個別記事フォント設定」の「有効化する」チェックボックスにチェックを入れて、「個別記事フォント設定を更新する」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp9.png?date=2410" alt="「個別記事フォント設定を更新する」をクリック"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="link-d" class="section">
                                        <div class="section_body">
                                            <h3 class="section_ttl">プラグインバージョン2.0以降の使い方</h3>
                                            <div class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>プラグインバージョン2.0へのバージョンアップに関して</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li class="mb10">プラグインのバージョンアップ後、ブラウザキャッシュが残っているとプラグインが正常に表示されない場合があります。 その際はキャッシュを削除してから再度ページを読み込んでください。</li>
                                                        <li>バージョン1.2以前の<a href="#link-c2_font">フォント設定クラス</a>機能は、<a href="#link-d2_font">直接指定（上級者向け）</a>機能にリニューアルされました。 バージョンアップすると、以前フォント設定クラス機能で設定していた内容はクリアされますのでご注意ください。</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-d01">サイト全体にフォントテーマを設定する</h4>
                                                <div class="block_body">
                                                    <p>サイト全体にフォントテーマを適用することができます。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPressの管理画面へログイン</h5>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.設定メニューの選択</h5>
                                                            <div class="box_body">
                                                                <p>「投稿記事フォント設定」のリンクをクリックして「共通テーマ指定」にチェックを入れてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_1.png?date=2410" alt="「共通テーマ指定」にチェック"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">3.フォントテーマの設定</h5>
                                                            <div class="box_body">
                                                                <p>フォントテーマのプルダウンメニューからテーマを選択して「投稿フォント設定を保存する」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_2.png?date=2410" alt="「投稿フォント設定を保存する」をクリック"></p>
                                                                <p>WordPressサイトにWebフォントが適用されていれば設定完了です。<br>
                                                                    フォントテーマの一覧は「<a href="#link-f">フォントテーマ一覧</a>」をご参照ください。</p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-d02">オリジナルのフォントテーマを作成する</h5>
                                                <div class="block_body">
                                                    <p>Webフォントを自由に組み合わせて、オリジナルのテーマを作ることができます。こだわったデザインにしたい方などにおすすめです。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPressの管理画面へログイン</h5>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.カスタムテーマの設定</h5>
                                                            <div class="box_body">
                                                                <p>「カスタムテーマ編集」のリンクをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_3.png?date=2410" alt="「カスタムテーマ編集」のリンクをクリック"></p>
                                                                <p>任意のテーマタイトルを設定し、「見出し」「リード」「本文」「太字」のプルダウンメニューより利用したいフォントをそれぞれ選択してください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_4.png?date=2410" alt="利用したいフォントをそれぞれ選択"></p>
                                                                <p>「共通テーマ指定」のプルダウンメニューで、作成したテーマを選択できます。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_5.png?date=2410" alt="作成したテーマを選択"></p>
                                                                <p>ご利用のWordPressテーマによっては、記事タイトル・ウィジェットタイトルなどにフォントテーマが適用されない場合があります。<br>
                                                                    その際は以下の「直接指定」機能をご利用ください。</p>
                                                                <div class="msg msg_notice" id="link-d2_font">
                                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>直接指定（上級者向け）について</h6>
                                                                    <div class="msg_body">
                                                                        <p>「投稿記事フォント設定」の「直接指定（上級者向け）」では、Webフォントを適用する「HTMLタグ」および「class属性」を設定することが可能です。</p>
                                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_6.png?date=2410" alt="「HTMLタグ」および「class属性」を設定"></p>
                                                                        <p>なお、「直接指定（上級者向け）」は上級者向けの設定となります。<br>
                                                                            WordPressの操作に慣れていない方、HTML/CSSの知識がない方に関しては、設定を変更しなくても問題ありません。</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-d03">記事ごとにフォントテーマを設定する</h5>
                                                <div class="block_body">
                                                    <p>個別の投稿ごとに設定したフォントテーマを適用することができます。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h4 class="box_ttl">1.WordPressの管理画面へログイン</h4>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h4 class="box_ttl">2.設定メニューの選択</h4>
                                                            <div class="box_body">
                                                                <p>「投稿記事フォント設定」のリンクをクリックして「個別テーマ指定」にチェックを入れてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_7.png?date=2410" alt="「個別テーマ指定」にチェックを入れる"></p>
                                                                <p>WordPress投稿画面に、フォントテーマを指定できる機能が表示されます。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_8.png?date=2410" alt="フォントテーマを指定できる機能が表示"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-d04">サイトフォント設定（バージョン2.0以降の新機能）</h4>
                                                <div class="block_body">
                                                    <p>サイトのタイトルやキャッチコピーに、個別でフォントを設定することができます。</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h4 class="box_ttl">1.WordPressの管理画面へログイン</h4>
                                                            <div class="box_body">
                                                                <p>ユーザー名・パスワードを入力し、WordPressの管理画面にログインしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPressの管理画面にログイン"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h4 class="box_ttl">2.サイトフォントの設定</h4>
                                                            <div class="box_body">
                                                                <p>各項目で利用したいフォントを選択してください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_9.png?date=2410" alt="利用したいフォントを選択"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="link-e" class="section">
                                        <h4 class="section_ttl">Webフォントの適用を解除する方法について</h4>
                                        <div class="section_body">
                                            <p>Webフォントの適用を解除するには、以下の作業を順に行ってください。</p>
                                            <ol class="ol ol_margin">
                                                <li>プラグイン「TypeSquare Webfonts for エックスサーバー」を無効化にしてください。</li>
                                                <li>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>」⇒「Webフォント設定」よりドメインの登録を解除してください。</li>
                                            </ol>
                                            <p>以上の作業を行った後、Webフォントの適用が外れているかご確認ください。</p>
                                        </div>
                                    </section>

                                    <section id="link-f" class="section">
                                        <h4 class="section_ttl">[参考]フォントテーマ一覧</h4>
                                        <div class="section_body">

                                            <table class="primaryTableL table">
                                                <thead>
                                                <tr>
                                                    <th>テーマ名</th>
                                                    <th>見出し</th>
                                                    <th>リード</th>
                                                    <th>本文</th>
                                                    <th>太字</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>ベーシック</th>
                                                    <td>新ゴ B</td>
                                                    <td>新ゴ B</td>
                                                    <td>新ゴ R</td>
                                                    <td>新ゴ B</td>
                                                </tr>
                                                <tr>
                                                    <th>スタイリッシュ</th>
                                                    <td>見出ゴMB31</td>
                                                    <td>見出ゴMB31</td>
                                                    <td>TBUDゴシック R</td>
                                                    <td>TBUDゴシック E</td>
                                                </tr>
                                                <tr>
                                                    <th>カジュアル</th>
                                                    <td>秀英にじみ丸ゴシック B</td>
                                                    <td>丸フォーク M</td>
                                                    <td>トーキング</td>
                                                    <td>秀英にじみ丸ゴシック B</td>
                                                </tr>
                                                <tr>
                                                    <th>ニュース</th>
                                                    <td>リュウミン B-KL</td>
                                                    <td>リュウミン B-KL</td>
                                                    <td>黎ミン M</td>
                                                    <td>リュウミン B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>ビジネス</th>
                                                    <td>リュウミン B-KL</td>
                                                    <td>リュウミン B-KL</td>
                                                    <td>TBUDゴシック R</td>
                                                    <td>TBUDゴシック E</td>
                                                </tr>
                                                <tr>
                                                    <th>ファッション</th>
                                                    <td>丸フォーク M</td>
                                                    <td>丸フォーク M</td>
                                                    <td>新ゴ R</td>
                                                    <td>新ゴ B</td>
                                                </tr>
                                                <tr>
                                                    <th>エレガント</th>
                                                    <td>A1明朝</td>
                                                    <td>A1明朝</td>
                                                    <td>黎ミン M</td>
                                                    <td>リュウミン B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>繊細</th>
                                                    <td>A1明朝</td>
                                                    <td>しまなみ</td>
                                                    <td>リュウミン R-KL</td>
                                                    <td>リュウミン B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>ポップ</th>
                                                    <td>ぶらっしゅ</td>
                                                    <td>ぶらっしゅ</td>
                                                    <td>じゅん 501</td>
                                                    <td>G2サンセリフ-B</td>
                                                </tr>
                                                <tr>
                                                    <th>コミカル</th>
                                                    <td>新ゴ シャドウ</td>
                                                    <td>新ゴ シャドウ</td>
                                                    <td>じゅん 501</td>
                                                    <td>G2サンセリフ-B</td>
                                                </tr>
                                                <tr>
                                                    <th>和風</th>
                                                    <td>さくらぎ蛍雪</td>
                                                    <td>しまなみ</td>
                                                    <td>リュウミン R-KL</td>
                                                    <td>リュウミン B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>はんなり</th>
                                                    <td>那欽</td>
                                                    <td>那欽</td>
                                                    <td>黎ミン M</td>
                                                    <td>リュウミン B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>伝統</th>
                                                    <td>教科書ICA M</td>
                                                    <td>さくらぎ蛍雪</td>
                                                    <td>さくらぎ蛍雪</td>
                                                    <td>教科書ICA M</td>
                                                </tr>
                                                <tr>
                                                    <th>ナチュラル</th>
                                                    <td>はるひ学園</td>
                                                    <td>はるひ学園</td>
                                                    <td>シネマレター</td>
                                                    <td>竹 B</td>
                                                </tr>
                                                <tr>
                                                    <th>レトロ</th>
                                                    <td>秀英にじみ丸ゴシック B</td>
                                                    <td>シネマレター</td>
                                                    <td>トーキング</td>
                                                    <td>じゅん 501</td>
                                                </tr>
                                                <tr>
                                                    <th>ホラー</th>
                                                    <td>TB古印体</td>
                                                    <td>TB古印体</td>
                                                    <td>陸隷</td>
                                                    <td>陸隷</td>
                                                </tr>
                                                </tbody>
                                            </table>

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