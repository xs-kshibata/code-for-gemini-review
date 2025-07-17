<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPressセキュリティ設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご利用のWordPressにおいて、各種ツールに対する国外からのアクセスの制限や、パスワード総当たり攻撃の防止など、セキュリティを強化する「WordPressセキュリティ設定」のご案内です。">

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

                        <h3 class="sub-ttl">WordPressセキュリティ設定</h3>

                        <div class="supportTabArea">
                            <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                                <!-- 旧パネル -->
                                <div class="supportTabContents">
                                    <div class="toc-list">
                                        <p class="toc-list--head">目次</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">WordPressセキュリティ設定</a></li>
                                            <li><a href="#link-previous-b">国外アクセス制限設定</a>
                                                <ol>
                                                    <li><a href="#link-previous-b01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-previous-b02">2.国外アクセス制限メニューへ</a></li>
                                                    <li><a href="#link-previous-b03">3.制限設定の変更</a></li>
                                                    <li><a href="#link-previous-b04">4.ホワイトリストの設定</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-c">ログイン試行回数制限設定</a>
                                                <ol>
                                                    <li><a href="#link-previous-c01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-previous-c02">2.ログイン試行回数制限メニューへ</a></li>
                                                    <li><a href="#link-previous-c03">3.制限設定の変更</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-d">コメント・トラックバック制限設定</a>
                                                <ol>
                                                    <li><a href="#link-previous-d01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-previous-d02">2.コメント・トラックバック制限設定メニューへ</a></li>
                                                    <li><a href="#link-previous-d03">3.制限設定の変更</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">WordPressセキュリティ設定</h4>
                                        <div class="section_body">
                                            <p>本機能は、ご利用のWordPressにおいて、各種ツールに対する国外からの接続を制限したり、パスワード総当り(ブルートフォースアタック)による第三者のログインを防止するなど、不正なアクセスに対するセキュリティを強化する機能です。</p>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-b">国外アクセス制限設定</h4>
                                        <div class="section_body">
                                            <p>本機能では、下記のようなWordPress機能への国外からのアクセスを制限することで、不正なログインやDDoS攻撃の踏み台となることを防ぎ、WordPressサイトのセキュリティを向上させることができます。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>ダッシュボード アクセス制限</dt>
                                                <dd>
                                                    <p class="mb0">ダッシュボードに対する国外からの接続を制限します。</p>
                                                    <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。<br>
                                                        制限を解除する場合は個別にIPアドレス制限やBasic認証を行ってください。</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>アクセスが制限される箇所</p>
                                                        <ul class="ul mb0">
                                                            <li>/wp-admin … ダッシュボード のフォルダ</li>
                                                            <li>/wp-login.php … ダッシュボード ログイン時にアクセスするファイル</li>
                                                        </ul>
                                                    </div>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>設定OFF(無効)時の「REST API アクセス制限」との連動について</p>
                                                        <p class="mb0">
                                                            WordPress バージョン5.0以降では記事の投稿に「REST API」を使用するため、国外からWordPressを利用する場合、
                                                            「ダッシュボード アクセス制限」とともに「REST API アクセス制限」を「OFF(無効)」にする必要があります。<br>
                                                            <br>
                                                            「ダッシュボード アクセス制限」を「OFF(無効)」に変更する場合、「REST API アクセス制限」も同時に「OFF(無効)」に変更します。
                                                        </p>
                                                    </div>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>XML-RPC API アクセス制限</dt>
                                                <dd>
                                                    <p class="mb0">スマートフォンアプリや外部システムから、リモートで記事の投稿や画像のアップロードを行う際に利用される「XML-RPC WordPress API」に対する国外及び一部の国内ホスティングサービス環境のアドレスからの接続を制限します。<br>
                                                        プラグイン「Jetpack by WordPress.com」によるアクセスは制限の対象外です。</p>
                                                    <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                    <p class="note">※国外のサーバー等から「XML-RPC WordPress API」を利用される場合は「OFF」に設定するとともに、「Disable XML-RPC Pingback」などの、「XML-RPC WordPress API」への不正アクセス対策を行うプラグインを個別にインストールしてください。
                                                    </p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>アクセスが制限される箇所</p>
                                                        <ul class="ul mb0">
                                                            <li>/xmlrpc.php … XML-RPC WordPress API (ファイル)</li>
                                                        </ul>
                                                    </div>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>REST API アクセス制限</dt>
                                                <dd>
                                                    <p class="mb0">「REST API」に対する国外からの接続を制限します。<br>プラグイン「Jetpack by WordPress.com」によるアクセスは制限の対象外です。</p>
                                                    <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>アクセスが制限される箇所</p>
                                                        <ul class="ul mb0">
                                                            <li>/wp-json … REST APIアクセス時に含まれるURL</li>
                                                        </ul>
                                                    </div>
                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                国外からWordPress バージョン5.0以降をご利用の場合、本機能を「OFF(無効)」にしてください。本機能を「ON(有効)」にすると、記事の編集・保存が行えない場合があります。
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>wlwmanifest.xml アクセス制限</dt>
                                                <dd>
                                                    <p class="mb0">「Windows Live Writer」を利用して記事を作成・投稿するための情報が記述されている<br>「wlwmanifest.xml」ファイルに対する国外からの接続を制限します。</p>
                                                    <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                    <p class="note">※国外のサーバー等から「Windows Live Writer」を利用して記事を作成・投稿する場合は、<br>本機能を「OFF(無効)」に変更してください。</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>アクセスが制限される箇所</p>
                                                        <ul class="ul mb0">
                                                            <li>/wlwmanifest.xml … Windows Live Writer利用時にアクセスするファイル</li>
                                                        </ul>
                                                    </div>
                                                </dd>
                                            </dl>

                                            <p class="mt50">初期状態では「<em class="font-bold">ON(有効)</em>」ですが、以下に当てはまる場合、設定を「OFF(無効)」に変更してください。</p>
                                            <ul class="ul mb50">
                                                <li>
                                                    国外に在住の方など、国外からのアクセスが必要な場合
                                                </li>
                                                <li>
                                                    国内から利用しているが、システム上で国外からのアクセスとして誤認され、WordPressの管理者ツールへのアクセスが制限されてしまった場合
                                                </li>
                                                <li>
                                                    CloudFlare(クラウドフレア)等、外部サーバーを経由してアクセスされるようなサービスを利用していて、経由するサーバーが本機能の制限に該当してしまった場合
                                                </li>
                                            </ul>

                                            <div class="serial-box mb10">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b01">1.WordPressセキュリティ設定メニューへ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPressセキュリティ設定メニューをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b02">2.国外アクセス制限メニューへ</h6>
                                                    <div class="box_body">
                                                        <p>画面が遷移した後、サブメニューより「国外アクセス制限設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_2.png?date=20250124" alt="国外アクセス制限設定をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b03">3.制限設定の変更</h6>
                                                    <div class="box_body">
                                                        <p>下図のような画面が表示されましたら、設定を変更する機能において、現在の設定をご確認の上、右側にあるラジオボタンのいずれかを選択し「設定する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_3.png?date=250409" alt="制限設定を変更"></p>
                                                        <p>現在の設定が変更されていれば、設定完了です。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b04">4.ホワイトリストの設定</h6>
                                                    <div class="box_body">
                                                        <p>アクセス制限を回避するホワイトリストを設定することも可能です。</p>
                                                        <p>「ホワイトリスト」の「変更」から設定画面にアクセスし、ご希望のIPアドレスを1行1アドレスで登録してください。</p>
                                                        <p>
                                                            また、IPアドレスの各オクテットにワイルドカード(*)を使用して、特定の範囲をまとめて指定することも可能です。<br>
                                                            例）111.111.111.*
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_whlist_1.png" alt="ホワイトリストの「変更」をクリック"></p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_whlist_2.png" alt="ホワイトリストを設定"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->
                                            <aside class="msg msg_caution mt30">
                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>国外からアクセスをされる場合を除き「有効」のまま運用されることを強く推奨します。<br>
                                                            制限を解除する場合は、個別にIPアドレス制限やBASIC認証などを行ってください。
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-c">ログイン試行回数制限設定</h4>
                                        <div class="section_body">
                                            <p>本機能は、短時間に連続してログイン処理(失敗)が行われた場合にアクセスを制限する機能です。<br>
                                                パスワード総当り(ブルートフォースアタック)による不正アクセスを防止することができます。</p>

                                            <p class="note">※アクセス制限は、制限されてから24時間後に解除されます。</p>

                                            <p>初期状態では「<em class="font-bold">ON(有効)</em>」状態であり、特別な事情がない限りは、そのまま運用されることを強くお薦めいたします。<br>
                                                利用者自身が制限されたなどの理由から一時的に「OFF(無効)」にする場合、下記の手順に沿って設定を変更し、ご利用後は再度「ON(有効)」に変更してください。</p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c01">1.WordPressセキュリティ設定メニューへ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPressセキュリティ設定メニューをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c02">2.ログイン試行回数制限メニューへ</h6>
                                                    <div class="box_body">
                                                        <p>画面が遷移した後、サブメニューより「ログイン試行回数制限設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_4.png" alt="ログイン試行回数制限設定をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c03">3.制限設定の変更</h6>
                                                    <div class="box_body">
                                                        <p>下図のような画面が表示されましたら、設定を変更する機能において、現在の設定をご確認の上、右側にあるラジオボタンのいずれかを選択し「設定する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_5.png" alt="制限設定を変更"></p>
                                                        <p>現在の設定が変更されていれば、設定完了です。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-d">コメント・トラックバック制限設定</h4>
                                        <div class="section_body">
                                            <p>本機能では、下記のようなコメント投稿やトラックバックを制限することが出来ます。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>大量コメント・トラックバック制限</dt>
                                                <dd>
                                                    <p>コメント・トラックバックスパムが行われた場合に、一時的にコメント・トラックバックを制限します。<br>
                                                        制限は、6時間が経過した後、自動的に解除されます。</p>
                                                    <p>初期状態では「<em class="font-bold">ON(有効)</em>」状態です。</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>国外からのコメント・トラックバック制限</dt>
                                                <dd>
                                                    <p>国外からのコメント投稿、またはトラックバックを制限します。</p>
                                                    <p>初期状態では「<em class="font-bold">OFF(無効)</em>」状態ですが、国外からのコメント・トラックバックを必要とされない場合は「ON(有効)」に設定変更することを推奨します。</p>
                                                    <p class="note">※CloudFlare(クラウドフレア)等、外部サーバーを経由してアクセスされるようなサービスをご利用の場合も、経由するサーバーが本機能の制限に該当してしまう可能性があります。<br>
                                                        その場合は、本マニュアルの設定手順に従って制限を解除してください。</p>
                                                </dd>
                                            </dl>
                                            <p>設定の変更は下記の手順に沿って行ってください。</p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d01">1.WordPressセキュリティ設定メニューへ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPressセキュリティ設定メニューをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d02">2.コメント・トラックバック制限設定メニューへ</h6>
                                                    <div class="box_body">
                                                        <p>画面が遷移した後、サブメニューより「コメント・トラックバック制限設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_6.png" alt="コメント・トラックバック制限設定をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d03">3.制限設定の変更</h6>
                                                    <div class="box_body">
                                                        <p>下図のような画面が表示されましたら、設定を変更する機能において、現在の設定をご確認の上、右側にあるラジオボタンのいずれかを選択し「設定する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_7.png" alt="制限設定を変更"></p>
                                                        <p>現在の設定が変更されていれば、設定完了です。</p>
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
                                            <li><a href="#link-a">WordPressセキュリティ設定</a></li>
                                            <li><a href="#link-b">国外アクセス制限設定</a>
                                                <ol>
                                                    <li><a href="#link-b01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-b02">2.制限設定の変更</a></li>
                                                    <li><a href="#link-b03">3.ホワイトリストの設定</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-c">ログイン試行回数制限設定</a>
                                                <ol>
                                                    <li><a href="#link-c01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-c02">2.制限設定の変更</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-d">コメント・トラックバック制限設定</a>
                                                <ol>
                                                    <li><a href="#link-d01">1.WordPressセキュリティ設定メニューへ</a></li>
                                                    <li><a href="#link-d02">2.制限設定の変更</a></li>
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
                                                <h4 class="section_ttl" id="link-a">WordPressセキュリティ設定</h4>
                                                <div class="section_body">
                                                    <p>
                                                        本機能は、ご利用のWordPressにおいて、各種ツールに対する国外からの接続を制限したり、パスワード総当り(ブルートフォースアタック)による第三者のログインを防止するなど、不正なアクセスに対するセキュリティを強化する機能です。
                                                    </p>
                                                    <p>機能の詳細については、下記をご参照ください。</p>
                                                    <ul class="list list_arrow-down mb30">
                                                        <li><a href="#link-b">国外アクセス制限設定</a></li>
                                                        <li><a href="#link-c">ログイン試行回数制限設定</a></li>
                                                        <li><a href="#link-d">コメント・トラックバック制限設定</a></li>
                                                    </ul>
                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-b" class="section_ttl">国外アクセス制限設定</h4>
                                                <div class="section_body">

                                                    <p>
                                                        本機能では、下記のようなWordPress機能への国外からのアクセスを制限することで、不正なログインやDDoS攻撃の踏み台となることを防ぎ、WordPressサイトのセキュリティを向上させることができます。
                                                    </p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>ダッシュボード アクセス制限</dt>
                                                        <dd>
                                                            <p class="mb0">ダッシュボードに対する国外からの接続を制限します。</p>
                                                            <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。<br>
                                                                制限を解除する場合は個別にIPアドレス制限やBasic認証を行ってください。</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>アクセスが制限される箇所</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wp-admin … ダッシュボード のフォルダ</li>
                                                                    <li>/wp-login.php … ダッシュボード ログイン時にアクセスするファイル</li>
                                                                </ul>
                                                            </div>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>設定OFF（無効）時の「REST API アクセス制限」との連動について</p>
                                                                <p class="mb0">
                                                                    WordPress バージョン5.0以降では記事の投稿に「REST API」を使用するため、国外からWordPressを利用する場合、
                                                                    「ダッシュボード アクセス制限」とともに「REST API アクセス制限」を「OFF（無効）」にする必要があります。<br>
                                                                    <br>
                                                                    「ダッシュボード アクセス制限」を「OFF（無効）」に変更する場合、「REST API アクセス制限」も同時に「OFF（無効）」に変更します。
                                                                </p>
                                                            </div>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>XML-RPC API アクセス制限</dt>
                                                        <dd>
                                                            <p class="mb0">スマートフォンアプリや外部システムから、リモートで記事の投稿や画像のアップロードを行う際に利用される「XML-RPC WordPress API」に対する国外及び一部の国内ホスティングサービス環境のアドレスからの接続を制限します<br>
                                                                プラグイン「Jetpack by WordPress.com」によるアクセスは制限の対象外です。</p>
                                                            <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                            <p class="note">※国外のサーバー等から「XML-RPC WordPress API」を利用される場合は「OFF」に設定するとともに、「Disable XML-RPC Pingback」などの、「XML-RPC WordPress API」への不正アクセス対策を行うプラグインを個別にインストールしてください。</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>アクセスが制限される箇所</p>
                                                                <ul class="ul mb0">
                                                                    <li>/xmlrpc.php … XML-RPC WordPress API (ファイル)</li>
                                                                </ul>
                                                            </div>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>REST API アクセス制限</dt>
                                                        <dd>
                                                            <p class="mb0">「REST API」に対する国外からの接続を制限します。<br>プラグイン「Jetpack by WordPress.com」によるアクセスは制限の対象外です。</p>
                                                            <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>アクセスが制限される箇所</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wp-json …  REST APIアクセス時に含まれるURL</li>
                                                                </ul>
                                                            </div>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>国外からWordPress バージョン5.0以降をご利用の場合、本機能を「OFF（無効）」にしてください。<br>
                                                                        本機能を「ON（有効）」にすると、記事の編集・保存が行えない場合があります。</p>
                                                                </div>
                                                            </aside>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>wlwmanifest.xml アクセス制限</dt>
                                                        <dd>
                                                            <p class="mb0">「Windows Live Writer」を利用して記事を作成・投稿するための情報が記述されている<br>「wlwmanifest.xml」ファイルに対する国外からの接続を制限します。</p>
                                                            <p class="note">※通常は「<em class="font-bold">ON(有効)</em>」のまま運用されることを強く推奨します。</p>
                                                            <p class="note">※国外のサーバー等から「Windows Live Writer」を利用して記事を作成・投稿する場合は、<br>本機能を「OFF(無効)」に変更してください。</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>アクセスが制限される箇所</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wlwmanifest.xml … Windows Live Writer利用時にアクセスするファイル</li>
                                                                </ul>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <p>初期状態では「<em class="font-bold">ON(有効)</em>」ですが、設定を「OFF(無効)」にする場合などは下記の手順に沿ってください。</p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b01">1.WordPresseセキュリティ設定メニューへ</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresseセキュリティ設定メニューをクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b02">2.制限設定の変更</h5>
                                                            <div class="box_body">
                                                                <p>対象のドメインの設定をご確認の上、右側にある変更ボタンのいずれかをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_2.png?date=250409" alt="制限設定を変更"></p>

                                                                <p>現在の設定が変更されていれば、設定完了です。</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b03">3.ホワイトリストの設定</h5>
                                                            <div class="box_body">
                                                                <p>アクセス制限を回避するホワイトリストを設定することも可能です。</p>
                                                                <p>「ホワイトリスト」のペンアイコンをクリックして設定画面を開き、ご希望のIPアドレスを1行1アドレスで登録してください。</p>
                                                                <p>
                                                                    また、IPアドレスの各オクテットにワイルドカード(*)を使用して、特定の範囲をまとめて指定することも可能です。<br>
                                                                    例）111.111.111.*
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_whlist_1.png" alt="ホワイトリストの「編集」をクリック"></p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_whlist_2.png" alt="ホワイトリストを設定"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->

                                                    <aside class="msg msg_caution mt30">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                        <div class="msg_body">
                                                            <ul class="note-list note-list_margin">
                                                                <li>※本機能は初期状態で「<em class="font-bold">ON(有効)</em>」になっています。<br>
                                                                    国外に在住の方など、国外からのアクセスが必要な方は、本マニュアルの設定手順に従って、本機能による制限を解除してください。</li>
                                                                <li>※まれに国内IPアドレスからのアクセスであっても、システム上で国外からのアクセスとして誤認され、WordPressの管理者ツールへのアクセスが制限されてしまう場合があります。<br>
                                                                    その際も、本マニュアルの設定手順に従って、制限を解除してください。</li>
                                                                <li>※CloudFlare(クラウドフレア)等、外部サーバーを経由してアクセスされるようなサービスをご利用の場合も、経由するサーバーが本機能の制限に該当してしまう可能性があります。<br>
                                                                    その場合も、本マニュアルの設定手順に従って制限を解除してください。</li>
                                                                <li>※国外からアクセスをされる場合を除き「有効」のまま運用されることを強く推奨します。<br>
                                                                    制限を解除する場合は、個別にIPアドレス制限やBASIC認証などを行ってください。</li>
                                                            </ul>
                                                        </div>
                                                    </aside>

                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-c" class="section_ttl">ログイン試行回数制限設定</h4>
                                                <div class="section_body">
                                                    <p>
                                                        本機能は、短時間に連続してログイン処理(失敗)が行われた場合にアクセスを制限する機能です。<br>
                                                        パスワード総当り(ブルートフォースアタック)による不正アクセスを防止することが出来ます。
                                                    </p>
                                                    <p>※アクセス制限は、制限されてから24時間後に解除されます。</p>
                                                    <p>
                                                        初期状態では「<em class="font-bold">ON(有効)</em>」ですが、設定を「OFF(無効)」にする場合などは下記の手順に沿ってください。
                                                    </p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-c01">1.WordPresseセキュリティ設定メニューへ</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresseセキュリティ設定メニューをクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-c02">2.制限設定の変更</h5>
                                                            <div class="box_body">
                                                                <p>対象のドメインの設定をご確認の上、右側にある変更ボタンをクリックしてください</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_3.png?date=2410" alt="制限設定を変更"></p>
                                                                <p>現在の設定が変更されていれば、設定完了です。</p>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-d" class="section_ttl">コメント・トラックバック制限設定</h4>
                                                <div class="section_body">
                                                    <p>本機能では、下記のようなコメント投稿やトラックバックを制限することが出来ます。</p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>大量コメント・トラックバック制限</dt>
                                                        <dd>
                                                            <p>コメント・トラックバックスパムが行われた場合に、一時的にコメント・トラックバックを制限します。<br>
                                                                制限は、6時間が経過した後、自動的に解除されます。</p>
                                                            <p>初期状態では「<em class="font-bold">ON(有効)</em>」状態です。</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>国外からのコメント・トラックバック制限</dt>
                                                        <dd>
                                                            <p>国外からのコメント投稿、またはトラックバックを制限します。</p>
                                                            <p>初期状態では「<em class="font-bold">OFF(無効)</em>」状態ですが、国外からのコメント・トラックバックを必要とされない場合は「ON(有効)」に設定変更することを推奨します。</p>
                                                            <p class="note">※CloudFlare(クラウドフレア)等、外部サーバーを経由してアクセスされるようなサービスをご利用の場合も、経由するサーバーが本機能の制限に該当してしまう可能性があります。<br>
                                                                その場合は、本マニュアルの設定手順に従って制限を解除してください。</p>
                                                        </dd>
                                                    </dl>
                                                    <p>設定の変更は下記の手順に沿って行ってください。</p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-d01">1.WordPresseセキュリティ設定メニューへ</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPressセキュリティ設定」メニューをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresseセキュリティ設定メニューをクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-d02">2.制限設定の変更</h5>
                                                            <div class="box_body">
                                                                <p>対象のドメインの設定をご確認の上、右側にある変更ボタンをクリックしてください</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_4.png?date=2410" alt="制限設定を変更"></p>
                                                                <p>現在の設定が変更されていれば、設定完了です。</p>
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
