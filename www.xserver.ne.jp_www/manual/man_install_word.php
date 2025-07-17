<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress 手動インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「WordPress」をお客さまご自身でインストールするための手順を記載しています。エックスサーバーでは簡単な操作で「WordPress」を設置できる「簡単インストール」機能も提供しています。">

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

                <h3 class="sub-ttl">WordPress 日本語版</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">WordPress 日本語版 インストール はじめに</a></li>
                                    <li><a href="#link-previous-b">WordPressのダウンロード</a></li>
                                    <li><a href="#link-previous-c">MySQL（データベース）の設定</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.MySQLの追加</a></li>
                                            <li><a href="#link-previous-c02">2.MySQLユーザの追加</a></li>
                                            <li><a href="#link-previous-c03">3.MySQLアクセス権の設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">ファイルアップロード</a>
                                        <ul>
                                            <li><a href="#link-previous-d01">サーバへのアップロード</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-e">ウィザードからの設定作業</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.WordPressのURLにアクセスし「wp-config.phpファイル」を作成する</a></li>
                                            <li><a href="#link-previous-e02">2.MySQLデータベースに接続するための情報を入力</a></li>
                                            <li><a href="#link-previous-e03">3.ブログタイトルとメールアドレスを入力</a></li>
                                            <li><a href="#link-previous-e04">4.インストール完了</a></li>
                                            <li><a href="#link-previous-e05">5.WordPressの管理画面へログイン</a></li>
                                            <li><a href="#link-previous-e06">6.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">手動インストールしたWordPressを「インストール済みWordPress一覧」に追加する手順</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.サーバーパネルより「WordPress簡単インストール」をクリックしてください</a></li>
                                            <li><a href="#link-previous-f02">2.「その他のWordPressを一覧に追加」にてWordPressインストールパスを入力し「追加」をクリック</a></li>
                                            <li><a href="#link-previous-f03">3.確認し間違いがなければ「追加する」をクリック</a></li>
                                            <li><a href="#link-previous-f04">4.完了画面が表示されれば追加完了です</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPress 日本語版 インストール はじめに</h4>
                                <div class="section_body">
                                    <p>お客様側でWordPressのファイルを用意していただく必要があります。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>WordPressインストール設定例</caption>
                                        <tbody>
                                            <tr><th>バージョン</th><td>2.8.2-ja</td></tr>
                                            <tr><th>サーバーID</th><td>xsample</td></tr>
                                            <tr><th>ドメイン名</th><td>example.com</td></tr>
                                            <tr><th>インストールディレクトリ</th><td>/home/xsample/example.com/public_html/wp</td></tr>
                                            <tr><th>インストールURL</th><td>http://example.com/wp/</td></tr>
                                            <tr><th>データベース</th><td>MySQL5.7 / MySQL5.5 / MySQL5 / MariaDB 10.5 のいずれでも可能<br>（文字コードを UTF-8(utf8mb4) に設定してください）</td></tr>
                                            <tr><th>FTPソフト</th><td>FFFTP</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">WordPressのダウンロード</h4>
                                <div class="section_body">
                                    <p><img class="img" src="../img/manual/previous/man_install_word_1.png" alt="公式サイトよりWordPressをダウンロード"></p>
                                    <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress 公式サイト</a><i class="ico ico_new-window"></i></p>
                                    <p>公式サイトから 案内に従ってWordPressファイルをダウンロードしてください。<br>
                                    ダウンロード後、圧縮ファイルを解凍をします。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL（データベース）の設定</h4>
                                <div class="section_body">
                                    <p>WordPressで利用するデータベースを新規作成します。</p>

                                    <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQLの追加</h6>
                                            <div class="box_body">
                                                <p>WordPressで利用するデータベースを追加します。「MySQL追加」をクリックし、ご利用になるデータベース名を作成してください。<br>
                                                    本マニュアルではデータベース名を 「xsample_wp」 として作成します。(文字コードは「UTF-8(utf8mb4)」に設定してください。)</p>
                                                <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_2.png?date=2412" alt="MySQL追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQLユーザの追加</h6>
                                            <div class="box_body">
                                                <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザを追加します。</p>
                                                <p class="note">※追加済みのMySQLユーザを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                <p class="mb0">「MySQLユーザ追加」をクリックし、ご利用になるユーザー名とパスワードを設定します。入力後、「確認画面へ進む」ボタンをクリックし、表示された画面で「追加する」ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                <p class="note">※データベース名と同様に、ユーザ名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_3.png" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQLアクセス権の設定</h6>
                                            <div class="box_body">
                                                <p>「MySQL一覧」から作成したデータベースにアクセス権を追加します。アクセス権未所有ユーザーから追加したいMySQLユーザを選択し追加ボタンをクリックしてください。本マニュアルでは「xsample_wp」に「xsample_user」を追加します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_4.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>以上でMySQLの設定は完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">ファイルアップロード</h4>
                                <div class="section_body">

                                    <p>解凍後、「wordpress-2.8.2-ja」というフォルダが表示されます。<br>
                                    (2.8.2のバージョン表記の部分は、お客様がダウンロードされた時期により異なることがあります。)</p>

                                    <section class="block">
                                        <h3 class="block_ttl" id="link-previous-d01">サーバへのアップロード</h3>
                                        <div class="block_body">
                                            <p>FTPソフトを使いFTPサーバに接続してください（本マニュアルではFFFTPを使って説明を行っています）。</p>
                                            <p>FTPサーバーの「お客様のドメイン名/public_html/」の中に「wp」ディレクトリを新規作成してください。(本マニュアルでは、説明のため例として「wp」としていますが、お客様の任意のものでかまいません。)</p>
                                            <p>次に、ローカル側の「wordpress-2.8.2-ja」フォルダの中にある「wordpress」フォルダを表示します。「wordpress」フォルダの全ファイルをFTPサーバーの「wp」ディレクトリに転送します。</p>
                                            <p class="note">※一括転送がうまくいかない場合、フォルダごとに分けるなどして転送してください。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>アップロード前</dt>
                                                <dd><p><img class="img" src="../img/manual/previous/man_install_word_5.png" alt="FFFTPの画面:転送画面のスクリーンショット"></p></dd>
                                                <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                <dd>
                                                    <p><img class="img" src="../img/manual/previous/man_install_word_6.png" alt="FFFTPの画面:ファイル転送後のスクリーンショット"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">ウィザードからの設定作業</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.WordPressのURLにアクセスし「wp-config.phpファイル」を作成する</h6>
                                            <div class="box_body">
                                                <p>WordPressファイルのアップロード完了後、下記URLにアクセスしてください。</p>
                                                <div class="border border_gray">
                                                http://お客様のドメイン名/wp/<br>
                                                （本マニュアルでは：http://example.com/wp/）
                                                </div>
                                                <p>上記URLでアクセスすると、こちらの画面が表示されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_7.png" alt="アップロードしたファイルへのアクセス"></p>
                                                <p>「wp-config.phpファイルを作成する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_8.png" alt="ウィザードによる設定ファイル作成の開始"></p>
                                                <p>「次に進みましょう!」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.MySQLデータベースに接続するための情報を入力</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_9.png" alt="MySQLに接続するための情報入力"></p>
                                                <p>この画面では、MySQLデータベースに接続するための情報を入力します。</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th class="w30per-s">データベース名</th>
                                                        <td>例)xsample_wp</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ユーザー名</th>
                                                        <td>例)xsample_user</td>
                                                    </tr>
                                                    <tr>
                                                        <th>パスワード</th>
                                                        <td>データベースユーザーのパスワードを入力します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>データベースサーバのホスト名</th>
                                                        <td>MySQLホスト名を入力します。<br>
                                                            <br>
                                                            MySQL5/MySQL5.5をお使いのお客様は、MySQLホスト名を入力します。<br>
                                                            例)mysql20.xserver.jp / mysql20a.xserver.jp<br>
                                                            <br>
                                                            MySQLのホスト名については、「サーバーパネル &gt; MySQL設定 &gt; MySQL情報 」から確認することができます。 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>テーブル接頭辞</th>
                                                        <td>インストールの際に自動作成されるテーブル名の接頭辞を指定します。<br>
                                                            通常はデフォルト入力である「wp_」で問題ありません。 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><img class="img" src="../img/manual/previous/man_install_word_10.png" alt="WordPressインストールの開始"></p>
                                            <p>入力した情報からMySQLへの接続が確認できた場合は、こちらの画面が表示されます。</p>
                                            <p>「インストールを実行しましょう !」ボタンをクリックします。<br>
                                            (DB接続が上手くいかない場合は、MySQLの設定情報について再度ご確認ください。)</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.ブログタイトルとメールアドレスを入力</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_11.png" alt="ブログタイトルとメールアドレスの設定"></p>
                                                <p>ここでは、ブログタイトルとメールアドレスを入力します。<br>
                                                任意のブログタイトルと、お客様がお使いのメールアドレスを入力してください。</p>
                                                <p>検索エンジンの表示に関する設定のチェックボックスも任意で設定してください。</p>
                                                <p>入力後、「WordPressをインストール」ボタンをクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.インストール完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_12.png" alt="インストールに成功しました"></p>
                                                <p>この画面のように「成功しました!」のメッセージが表示されると、インストール完了です。<br>
                                                インストール完了時に、先ほど入力したメールアドレス宛に、ユーザー名とパスワードが送信されています。</p>
                                                <p>以上でWordPressのインストールは完了です。</p>
                                                <p>それでは、インストールしたWordPressの画面を確認してみましょう。<br>
                                                「ログイン」ボタンをクリックし、ログイン画面に移動します。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.WordPressの管理画面へログイン</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_13.png" alt="WordPressへログイン"></p>
                                                <p>ユーザー名・パスワードを入力し、ログインを行ってください。</p>
                                                <p>WordPressの管理画面へとログインします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_14.png" alt="WordPressへログイン"></p>
                                                <p>以後、こちらのURLがWordPressの管理画面となります。</p>
                                                <div class="border border_gray">
                                                http://お客様のドメイン名/wp/wp-login.php<br>
                                                (本マニュアルでは：http://example.com/wp/wp-login.php）
                                                </div>
                                                <p>管理画面へはブログページからもログインすることが可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_15.png" alt="WordPressのブログ画面"></p>
                                                <p>WordPressのブログ画面です。<br>
                                                先ほど設定画面で入力したタイトルが表示されています。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-f">
                                <h4 id="i1" class="section_ttl">手動インストールしたWordPressを「インストール済みWordPress一覧」に追加する手順</h4>
                                <div class="section_body">
                                    <p>手動インストールしたWordPressをサーバーパネル「WordPress簡単インストール」の「インストール済みWordPress一覧」に追加することで「WordPressサイトコピー」「WordPressテーマ管理」などの機能を利用できるようになります。</p>
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.サーバーパネルより「WordPress簡単インストール」をクリックしてください</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_16.png" alt="サーバーパネルより「WordPress簡単インストール」をクリックしてください"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.「その他のWordPressを一覧に追加」にてWordPressインストールパスを入力し「追加」をクリック</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_17.png" alt="「その他のWordPressを一覧に追加」にてWordPressインストールパスを入力し「追加」をクリック"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.確認し間違いがなければ「追加する」をクリック</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_18.png" alt="確認し間違いがなければ「追加する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f04">4.完了画面が表示されれば追加完了です</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_19.png" alt="完了画面が表示されれば追加完了です"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!--/旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">WordPress 日本語版 インストール はじめに</a></li>
                                    <li><a href="#link-b">WordPress導入までの流れ</a>
                                        <ol>
                                            <li><a href="#link-b1">WordPressのダウンロード</a></li>
                                            <li><a href="#link-b2">MySQL(データベース)の設定</a></li>
                                            <li><a href="#link-b3">ファイルアップロード</a></li>
                                            <li><a href="#link-b4">ウィザードからの設定作業</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">手動インストールしたWordPressを一覧に追加</a>
                                        <ol>
                                            <li><a href="#link-c1">1.サーバーパネルより「WordPress簡単インストール」をクリック</a></li>
                                            <li><a href="#link-c2">2.「WordPressを追加」をクリック</a></li>
                                            <li><a href="#link-c3">3.「手動インストールしたWordPressを一覧で管理」をクリック</a></li>
                                            <li><a href="#link-c4">4.WordPressインストールパスを入力し「追加する」をクリック</a></li>
                                            <li><a href="#link-c5">5.追加完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">WordPress 日本語版 インストール はじめに</h3>

                                        <div class="section_body">
                                            <p>お客様側でWordPressのファイルを用意していただく必要があります。</p>
                                            <table class="table table_use-caption break-all">
                                                <caption>Wordpressインストール設定例</caption>
                                                <tbody>
                                                <tr><th>バージョン</th><td>2.8.2-ja</td></tr>
                                                <tr><th>サーバーID</th><td>xsample</td></tr>
                                                <tr><th>ドメイン名</th><td>example.com</td></tr>
                                                <tr><th>インストールディレクトリ</th><td>/home/xsample/example.com/public_html/wp</td></tr>
                                                <tr><th>インストールURL</th><td>http://example.com/wp/</td></tr>
                                                <tr><th>データベース</th><td>MySQL5.7 / MySQL5.5 / MySQL5 / MariaDB 10.5 のいずれでも可能<br>（文字コードを UTF-8(utf8mb4) に設定してください）</td></tr>
                                                <tr><th>FTPソフト</th><td>FFFTP</td></tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-b">WordPress導入までの流れ</h3>

                                        <div class="section_body">
                                            <ol class="ol">
                                                <li><a href="#link-b1">WordPressのダウンロード</a></li>
                                                <li><a href="#link-b2">MySQL(データベース)の設定</a></li>
                                                <li><a href="#link-b3">ファイルアップロード</a></li>
                                                <li><a href="#link-b4">ウィザードからの設定作業</a></li>
                                                <li><a href="#link-c">手動インストールしたWordPressを一覧に追加</a></li>
                                            </ol>
                                        </div>
                                    </section>


                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b1">WordPressのダウンロード</h5>

                                        <div class="section_body">

                                            <p><img class="img" src="../img/manual/man_install_word_1.png" alt="公式サイトよりWordPressをダウンロード"></p>
                                            <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress 公式サイト</a><i class="ico ico_new-window"></i></p>
                                            <p>公式サイトから 案内に従ってWordPressファイルをダウンロードしてください。<br>
                                                ダウンロード後、圧縮ファイルを解凍をします。</p>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b2">MySQL(データベース)の設定</h5>

                                        <div class="section_body">

                                            <p>WordPressで利用するデータベースを新規作成します。</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1.MySQLの追加</h4>
                                                    <div class="box_body">
                                                        <p>WordPressで利用するデータベースを追加します。「データベースを追加」をクリックし、ご利用になるデータベースを作成してください。本マニュアルではデータベース名を 「xsample_wp」 として作成します。(文字コードは「UTF-8(utf8mb4)」に設定してください。)</p>
                                                        <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_2.png?date=2412" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2.MySQLユーザーの追加</h4>
                                                    <div class="box_body">
                                                        <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザーを追加します。</p>
                                                        <p class="note">※追加済みのMySQLユーザーを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                        <p class="mb0">「ユーザーを追加」をクリックし、ご利用になるユーザー名とパスワードを設定し、「追加する」ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                        <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_3.png?date=2410" alt="MySQLのユーザーの追加にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3.MySQLアクセス権の設定</h4>
                                                    <div class="box_body">
                                                        <p>「MySQLデータベース設定」から作成したデータベースにアクセス権を追加します。</p>
                                                        <p class="mb0">「ユーザー設定」をクリックし、「ユーザーを追加」をクリックします。</p>
                                                        <p>MySQLユーザーIDから追加したいMySQLユーザーを選択し「追加する」ボタンをクリックしてください。本マニュアルでは「xsample_wp」に「xsample_user」を追加します。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_4.png?date=2410" alt="MySQLの設定画面：MySQLのユーザーの一覧にフォーカスしたスクリーンショット"></p>
                                                        <p>以上でMySQLの設定は完了です。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b3">ファイルアップロード</h5>

                                        <div class="section_body">
                                            <p>
                                                解凍後、「wordpress-2.8.2-ja」というフォルダが表示されます。<br>
                                                (2.8.2のバージョン表記の部分は、お客様がダウンロードされた時期により異なることがあります。)
                                            </p>
                                            <section class="block">
                                                <h6 class="block_ttl">サーバーへのアップロード</h6>
                                                <div class="block_body">
                                                    <p>FTPソフトを使いFTPサーバーに接続してください(本マニュアルではFFFTPを使って説明を行っています)。</p>
                                                    <p>FTPサーバーの「お客様のドメイン名/public_html/」の中に「wp」ディレクトリを新規作成してください。(本マニュアルでは、説明のため例として「wp」としていますが、お客様の任意のものでかまいません。)</p>
                                                    <p>次に、ローカル側の「wordpress-2.8.2-ja」フォルダの中にある「wordpress」フォルダを表示します。「wordpress」フォルダの全ファイルをFTPサーバーの「wp」ディレクトリに転送します。</p>
                                                    <p class="note">※一括転送がうまくいかない場合、フォルダごとに分けるなどして転送してください。</p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>アップロード前</dt>
                                                        <dd><p><img class="img" src="../img/manual/man_install_word_5.png?date=2410" alt="FFFTPの画面:転送画面のスクリーンショット"></p></dd>
                                                        <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                        <dd>
                                                            <p><img class="img" src="../img/manual/man_install_word_6.png?date=2412" alt="FFFTPの画面:ファイル転送後のスクリーンショット"></p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b4">ウィザードからの設定作業</h5>

                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1. WordPressのURLにアクセスし「wp-config.phpファイル」を作成する</h4>
                                                    <div class="box_body">
                                                        <p>WordPressファイルのアップロード完了後、下記URLにアクセスしてください。</p>
                                                        <div class="border border_gray">
                                                            http://お客様のドメイン名/wp/<br>
                                                            (本マニュアルでは：http://example.com/wp/)
                                                        </div>
                                                        <p>上記URLでアクセスすると、こちらの画面が表示されます。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_7.png?date=2410" alt="アップロードしたファイルへのアクセス"></p>
                                                        <p>「wp-config.phpファイルを作成する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_8.png?date=2410" alt="ウィザードによる設定ファイル作成の開始"></p>
                                                        <p>「次に進みましょう!」をクリックします。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2. MySQLデータベースに接続するための情報を入力</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_9.png?date=2410" alt="MySQLに接続するための情報入力"></p>
                                                        <p>この画面では、MySQLデータベースに接続するための情報を入力します。</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">データベース名</th>
                                                                <td>例)xsample_wp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ユーザー名</th>
                                                                <td>例)xsample_user</td>
                                                            </tr>
                                                            <tr>
                                                                <th>パスワード</th>
                                                                <td>データベースユーザーのパスワードを入力します。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>データベースサーバーのホスト名</th>
                                                                <td>MySQLホスト名を入力します。<br>
                                                                    <br>
                                                                    MySQL5/MySQL5.5をお使いのお客様は、MySQLホスト名を入力します。<br>
                                                                    例)mysql20.xserver.jp / mysql20a.xserver.jp<br>
                                                                    <br>
                                                                    MySQLのホスト名については、「サーバーパネル &gt; MySQL設定 &gt; MySQL情報 」から確認することができます。 </td>
                                                            </tr>
                                                            <tr>
                                                                <th>テーブル接頭辞</th>
                                                                <td>インストールの際に自動作成されるテーブル名の接頭辞を指定します。<br>
                                                                    通常はデフォルト入力である「wp_」で問題ありません。 </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/man_install_word_10.png?date=2410" alt="WordPressインストールの開始"></p>
                                                        <p>入力した情報からMySQLへの接続が確認できた場合は、こちらの画面が表示されます。</p>
                                                        <p>
                                                            「インストールを実行しましょう !」ボタンをクリックします。<br>
                                                            (DB接続が上手くいかない場合は、MySQLの設定情報について再度ご確認ください。)
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3. ブログタイトルとメールアドレスを入力</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_11.png?date=2410" alt="ブログタイトルとメールアドレスの設定"></p>
                                                        <p>ここでは、ブログタイトルとメールアドレスを入力します。<br>
                                                            任意のブログタイトルと、お客様がお使いのメールアドレスを入力してください。</p>
                                                        <p>検索エンジンの表示に関する設定のチェックボックスも任意で設定してください。</p>
                                                        <p>入力後、「WordPressをインストール」ボタンをクリックします。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">4. インストール完了</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_12.png?date=2410" alt="インストールに成功しました"></p>
                                                        <p>この画面のように「成功しました!」のメッセージが表示されると、インストール完了です。<br>
                                                            インストール完了時に、先ほど入力したメールアドレス宛に、ユーザー名とパスワードが送信されています。</p>
                                                        <p>以上でWordPressのインストールは完了です。</p>
                                                        <p>それでは、インストールしたWordPressの画面を確認してみましょう。<br>
                                                            「ログイン」ボタンをクリックし、ログイン画面に移動します。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">5. WordPressの管理画面へログイン</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_13.png?date=2410" alt="WordPressへログイン"></p>
                                                        <p>ユーザー名・パスワードを入力し、ログインを行ってください。</p>
                                                        <p>WordPressの管理画面へとログインします。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">6. 完了</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_14.png?date=2410" alt="WordPressへログイン"></p>
                                                        <p>以後、こちらのURLがWordPressの管理画面となります。</p>
                                                        <div class="border border_gray">
                                                            http://お客様のドメイン名/wp/wp-login.php<br>
                                                            (本マニュアルでは：http://example.com/wp/wp-login.php)
                                                        </div>
                                                        <p>管理画面へはブログページからもログインすることが可能です。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_15.png?date=2410" alt="WordPressのブログ画面"></p>
                                                        <p>WordPressのブログ画面です。<br>
                                                            先ほど設定画面で入力したタイトルが表示されています。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <section class="section">
                                        <h3 class="section_ttl" id="link-c">手動インストールしたWordPressを一覧に追加</h3>

                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 id="link-c1" class="box_ttl">1.サーバーパネルより「WordPress簡単インストール」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_16.png?date=2410" alt="サーバーパネルより「WordPress簡単インストール」をクリックしてください"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c2" class="box_ttl">2.「WordPressを追加」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_17.png?date=2410" alt="「WordPressを追加」をクリックしてください"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c3" class="box_ttl">3.「手動インストールしたWordPressを一覧で管理」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_18.png?date=2410" alt="「手動インストールしたWordPressを一覧で管理」をクリックしてください"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c4" class="box_ttl">4.WordPressインストールパスを入力し「追加する」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_19.png?date=2410" alt="WordPressインストールパスを入力し「追加する」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c5" class="box_ttl">5.追加完了</h4>
                                                    <div class="box_body">
                                                        <p>一覧に追加されれば追加完了です。</p>
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