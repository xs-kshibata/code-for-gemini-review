<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Zen Cart 手動インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「Zen Cart」をお客さまご自身でインストールするための手順を記載しています。">

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
            
                <h3 class="sub-ttl">Zen Cart</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Zen Cart インストール はじめに</a></li>
                                    <li><a href="#link-previous-b">Zen Cartのダウンロード</a></li>
                                    <li><a href="#link-previous-c">MySQL（データベース）の設定</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.「MySQL設定」をクリック</a></li>
                                            <li><a href="#link-previous-c02">2.MySQLの追加</a></li>
                                            <li><a href="#link-previous-c03">3.MySQLユーザの追加</a></li>
                                            <li><a href="#link-previous-c04">4.MySQLアクセス権の追加</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">ファイルアップロード</a>
                                        <ul>
                                            <li><a href="#link-previous-d01">1.アップロード先の確認</a></li>
                                            <li><a href="#link-previous-d02">2.ファイルのアップロード</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-e">セットアップ</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.Zen CartのURLにアクセスします。</a></li>
                                            <li><a href="#link-previous-e02">2.「インストール」をクリック</a></li>
                                            <li><a href="#link-previous-e03">3.データベースの設定</a></li>
                                            <li><a href="#link-previous-e04">4.システム環境を設定</a></li>
                                            <li><a href="#link-previous-e05">5.ショップの基本的な設定</a></li>
                                            <li><a href="#link-previous-e06">6.管理者アカウント設定</a></li>
                                            <li><a href="#link-previous-e07">7.セットアップ完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">セットアップ後の作業</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.「includes」フォルダへ移動</a></li>
                                            <li><a href="#link-previous-f02">2.「configure.php」のパーミッション変更</a></li>
                                            <li><a href="#link-previous-f03">3.「zc_install」を削除</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-g">管理画面の設定</a>
                                        <ol>
                                            <li><a href="#link-previous-g01">1.「admin」フォルダへ移動</a></li>
                                            <li><a href="#link-previous-g02">2.「admin」フォルダの名前変更</a></li>
                                            <li><a href="#link-previous-g03">3.管理画面へアクセス</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-h">インストール完了</a>
                                        <ol>
                                            <li><a href="#link-previous-h01">1.「admin」フォルダへ移動</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Zen Cart インストール はじめに</h4>
                                <div class="section_body">

                                    <p>お客様側で、ZenCartのパッケージを用意していただく必要があります。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>ZenCartのインストール設定例</caption>
                                        <tbody>
                                            <tr>
                                                <th>バージョン名</th>
                                                <td>Zen Cart 1.5.1（日本語版）</td>
                                            </tr>
                                            <tr>
                                                <th>サーバーID</th>
                                                <td>xsample</td>
                                            </tr>
                                            <tr>
                                                <th>ドメイン名</th>
                                                <td>example.com</td>
                                            </tr>
                                            <tr>
                                                <th>インストールディレクトリ</th>
                                                <td>/home/xsample/example.com/public_html/zc/</td>
                                            </tr>
                                            <tr>
                                                <th>インストールURL</th>
                                                <td>http://example.com/zc/</td>
                                            </tr>
                                            <tr>
                                                <th>データベース</th>
                                                <td>MySQL5.5</td>
                                            </tr>
                                            <tr>
                                                <th>FTPソフト</th>
                                                <td>FileZilla</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">Zen Cartのダウンロード</h4>
                                <div class="section_body">
                                    <p>公式サイトから、案内にしたがってZen Cartに必要なファイルをダウンロードしてください。<br>
                                    ダウンロード完了後、圧縮ファイルを解凍します。</p>
                                    <p class="link"><a href="http://zen-cart.jp/" target="_blank" rel="nofollow">ZenCart 公式サイト</a><i class="ico ico_new-window"></i></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL（データベース）の設定</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.「MySQL設定」をクリック</h6>
                                            <div class="box_body">
                                                <p>サーバーパネルへログインし、「MySQL設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQLの追加</h6>
                                            <div class="box_body">
                                                <p>「MySQL追加」をクリックします。</p>
                                                <p>「MySQLデータベース名」を入力し、文字コードを「UTF-8」としたうえで、「確認画面へ進む」をクリックします。確認画面が表示されたら、内容を確認したうえで「追加する」をクリックします。</p>
                                                <p class="note">※本マニュアルでは、MySQLデータベース名を「xsample_zc」とします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_1.png" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQLユーザの追加</h6>
                                            <div class="box_body">
                                                <p>「MySQLユーザ追加」をクリックします。<br>
                                                「MySQLユーザID」と「パスワード」を入力し、「MySQLユーザの追加（確認）」→「MySQLユーザの追加（確定）」をクリックします。</p>
                                                <p class="note">※本マニュアルでは、MySQLユーザーを「xsample_user」とします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_2.png" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.MySQLアクセス権の追加</h6>
                                            <div class="box_body">
                                                <p>「MySQL一覧」へ戻り、追加したMySQLデータベースの「アクセス権未所有ユーザ」から追加したいMySQLユーザを選択し、「追加」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_3.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>追加したMySQLユーザが「アクセス権未所有ユーザ」から「アクセス権所有ユーザ」へ移動しましたら、MySQLアクセス権の追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_4.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>※本マニュアルでは、データベース「xsample_zc」にMySQLユーザー「xsample_user」を追加します。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-d" class="section_ttl">ファイルアップロード</h4>
                                <div class="section_body">

                                    <p>公式サイトよりダウンロードしたファイルを解凍してください。<br>
                                    解凍後、FTPソフトをご用意いただきファイルのアップロードをお進めください。<br>
                                    （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.アップロード先の確認</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                FTPサーバーの「お客様のドメイン名/public_html」の中に「zc」フォルダを作成しファイルのアップロードを行います。</p>
                                                <p>FileZillaでは、右側のサーバー領域を右クリックし「ディレクトリを作成して移動」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_5.png" alt="MySQL設定にフォーカスしたスクリーンショット"></p>
                                                <p>続いて、作成するディレクトリ名を入力します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/」を作成します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_6.png" alt="MySQL設定にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.ファイルのアップロード</h6>
                                            <div class="box_body">
                                                <p>左側のローカル上からZen Cartに必要なファイルを「zc」フォルダへ全てアップロードします。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>アップロード</dt>
                                                    <dd><p><img class="img" src="../img/manual/previous/man_install_zen_7.png" alt="define.php:編集前のファイル変更箇所にフォーカス"></p></dd>
                                                    <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                    <dd><p><img class="img" src="../img/manual/previous/man_install_zen_8.png" alt="define.php:編集後のファイル編集箇所にフォーカス"></p></dd>
                                                </dl>
                                                <p>右側のサーバー領域にファイルが表示されていれば、アップロード完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">セットアップ</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.Zen CartのURLにアクセスします。</h6>
                                            <div class="box_body">
                                                <p>ZenCartのファイルアップロード完了後、下記URLにアクセスしてください。</p>
                                                <div class="border border_gray">
                                                http://お客様のドメイン名/zc/zc_install/<br>
                                                （本マニュアルでは：http://example.com/zc/zc_install/）
                                                </div>

                                                <p>URLへアクセスするとセットアップ画面が表示されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_9.png" alt="ZenCartのスクリーンショット"></p>
                                                <p>「続ける」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_10.png" alt="「上記を確認したうえでこれに同意します。」にチェックを入れ「続ける」をクリック"></p>
                                                <p>ライセンス規約を確認し、「上記を確認したうえでこれに同意します。」　にチェックを入れ、「続ける」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.「インストール」をクリック</h6>
                                            <div class="box_body">
                                                <p>「システム検査」項目の画面下部の「インストール」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_11.png" alt="「インストール」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.データベースの設定</h6>
                                            <div class="box_body">
                                                <p>データベース設定画面が表示されます。<br>
                                                MySQLデータベースに接続するための情報を入力します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_12.png" alt="データベース設定のスクリーンショット"></p>
                                                <table class="table table_use-caption">
                                                    <caption>データベース設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>データベース文字セット/照合</th>
                                                            <td>UTF-8 (default)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>データベースホスト名</th>
                                                            <td>MySQLホスト名を入力します。<br>
                                                                例）mysql20a.xserver.jp<br>
                                                                <br>
                                                                MySQLホスト名は「サーバーパネル＞MySQL設定＞MySQL情報」より確認可能です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>データベースユーザー名</th>
                                                            <td> MySQL（データベース）の設定で作成したMySQLユーザー名<br>
                                                                例:xsample_user</td>
                                                        </tr>
                                                        <tr>
                                                            <th>データベースパスワード</th>
                                                            <td>MySQLユーザー名作成時、設定したパスワード</td>
                                                        </tr>
                                                        <tr>
                                                            <th>データベース名</th>
                                                            <td>MySQLユーザー名作成時、設定したデータベース名<br>
                                                                例:xsample_zc</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>データベース - オプション設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>テーブルプレフィックス</th>
                                                            <td>本インストールでは変更していません。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>SQLキャッシュの方法</th>
                                                            <td>本インストールでは変更していません。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>セッション/SQLキャッシュディレクトリ</th>
                                                            <td>本インストールでは変更していません。 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>データベース情報入力後、「データベース設定を保存」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.システム環境を設定</h6>
                                            <div class="box_body">
                                                <p>システム設定が表示されます。必要に応じて変更してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_13.png" alt="システム環境設定画面"></p>
                                                <table class="table table_use-caption">
                                                    <caption>サーバー設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>設置ディレクトリ</th>
                                                            <td>本インストールでは変更していません。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>サイトのURL</th>
                                                            <td>本インストールでは変更していません。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>SSL Details</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>SSLサーバのホスト名<br>
                                                                （不要なら空白）</th>
                                                            <td>必要に応じて変更してください。<br>
                                                                （本インストールでは変更していません。）</td>
                                                        </tr>
                                                        <tr>
                                                            <th>サイトのURL<br>
                                                                （SSL/不要なら空白）</th>
                                                            <td>必要に応じて変更してください。<br>
                                                                （本インストールでは変更していません。）</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目確認後、「設定を保存」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.ショップの基本的な設定</h6>
                                            <div class="box_body">
                                                <p>各設定項目をお客様任意で設定してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_14.png" alt="ショップ設定画面"></p>

                                                <table class="table table_use-caption">
                                                    <caption>ショップ情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>ショップ名</th>
                                                            <td>任意の文字列を指定してください。<br>
                                                                例）テストショップ</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ショップオーナーの名前</th>
                                                            <td>任意の文字列を指定してください。<br>
                                                                例）ショップオーナー</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ショップオーナーのメールアドレス</th>
                                                            <td>メールアドレスを入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>国</th>
                                                            <td>国を指定してください。<br>
                                                                例）Japan</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ゾーン</th>
                                                            <td>ゾーンを指定してください。<br>
                                                                例）大阪府</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ショップの住所</th>
                                                            <td>任意の文字列を指定ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>デフォルトの言語</th>
                                                            <td>言語を指定してください。<br>
                                                                例）Japanese</td>
                                                        </tr>
                                                        <tr>
                                                            <th>デフォルトの通貨</th>
                                                            <td>通貨を指定してください。<br>
                                                                例）Japanese Yen</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>デモ情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>ショップのデモ</th>
                                                            <td>必要に応じて変更してください。<br>
                                                                （本インストールでは変更していません。）</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目入力後、「ショップ設定を保存」をクリックします。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.管理者アカウント設定</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_15.png" alt="管理者アカウント設定画面"></p>
                                                <table class="table table_use-caption">
                                                    <caption>管理者情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>管理者ID</th>
                                                            <td>任意の文字列を指定してください。<br>
                                                                例）admin</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理者パスワード</th>
                                                            <td>任意の文字列を指定してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理者パスワード（確認）</th>
                                                            <td>任意の文字列を指定してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理者のメールアドレス</th>
                                                            <td>メールアドレスを入力してください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>最新版の検出</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>ログインのたびにZen Cartの最新バージョンをチェックする</th>
                                                            <td>必要に応じて変更してください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目入力後、「管理者設定を保存」をクリックします。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 id="link-previous-e07" class="box_ttl">7.セットアップ完了</h6>
                                            <div class="box_body">
                                                <p>セットアップが完了しました。<br>
                                                このままでは利用できないため、<a href="#link-previous-f">セットアップ後の作業</a>が必要です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_16.png" alt="設置完了画面"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>セットアップ完了画面はそのままの状態（ブラウザは開いた状態）で、<a href="#link-previous-f">セットアップ後の作業</a>と<a href="#link-previous-g">管理画面の設定</a>を進めてください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-f" class="section_ttl">セットアップ後の作業</h4>
                                <div class="section_body">

                                    <p>FTPソフトをご用意いただきファイルの削除やパーミッションの変更を行います。<br>
                                    （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.「includes」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。</p>
                                                <p class="mb0">FTPサーバーの「お客様のドメイン名/public_html/zc/admin/includes/」へ移動します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/admin/includes/」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_17.png" alt="「includes」フォルダへ移動1"></p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_18.png" alt="「includes」フォルダへ移動2"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.「configure.php」のパーミッション変更</h6>
                                            <div class="box_body">
                                                <p>「configure.php」ファイルを確認します。<br>
                                                「configure.php」ファイルを右クリックし「ファイルのパーミッション」を選択します。</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_zen_19.png" alt="パーミッション変更1"></p>
                                                <p>「ファイルの属性を変更」が表示されます。数値を「444」と変更してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_20.png" alt="パーミッション変更2"></p>
                                                <p>続いて「お客様のドメイン名/public_html/zc/admin/includes/」へ戻ります。<br>
                                                再度、「configure.php」ファイルを右クリックし「ファイルのパーミッション」より数値が「444」へ変更されているか確認してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.「zc_install」を削除</h6>
                                            <div class="box_body">
                                                <p>「お客様のドメイン名/public_html/zc/」へ戻り、「zc_install」フォルダを確認します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_21.png" alt="「zc_install」を削除1"></p>
                                                <p>「zc_install」フォルダを右クリックし、「削除」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_22.png" alt="「zc_install」を削除2"></p>
                                                <p>「はい」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_23.png" alt="「zc_install」を削除3"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-g" class="section_ttl">管理画面の設定</h4>
                                <div class="section_body">

                                    <p>7.セットアップ完了時に表示された「管理画面」へアクセスします。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_zen_24.png" alt="設置完了画面"></p>

                                    <p>アクセスすると下記警告画面が表示されます。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_zen_25.png" alt="警告画面"></p>
                                    <p>警告のとおり、「admin」フォルダの名前を変更する必要があります。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.「admin」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>
                                                <p class="mb0">FTPサーバーの「お客様のドメイン名/public_html/zc/admin/」へ移動します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/admin/」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_26.png" alt="「admin」フォルダへ移動"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.「admin」フォルダの名前変更</h6>
                                            <div class="box_body">
                                                <p>「admin」フォルダを右クリックし、「名前の変更」を選択します。</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_zen_27.png" alt="「admin」フォルダの名前変更1"></p>
                                                <p>新しい名前を入力し、確定してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_28.png" alt="「admin」フォルダの名前変更2"></p>
                                                <ul class="note-list">
                                                    <li>※本マニュアルでは、「admin-tool」へ変更しています。</li>
                                                    <li>※既存フォルダやファイル名と重複しないようにご注意ください。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.管理画面へアクセス</h6>
                                            <div class="box_body">
                                                <p>管理画面へアクセスし、ログイン画面が表示されるかご確認ください。</p>
                                                <p>管理画面アクセスURLは『http://Zen CartインストールURL/adminフォルダ変更名』となります。</p>
                                                <div class="border border_blue">（例）<br>
                                                本マニュアルでは「admin-tool」へ変更したため、インストールURLが http://example.com/zc/ の場合 http://example.com/zc/admin-tool にて管理画面へアクセス可能です。
                                                </div>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_29.png" alt="管理画面"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-h" class="section_ttl">インストール完了</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-h01">1.「admin」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p><a href="#link-previous-e07">7.セットアップ完了時</a>に表示された「ショップ」へアクセスしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_30.png" alt="設置完了画面"></p>
                                                <p>アクセスし、以下の画面が表示されれば、インストール完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_31.png" alt="ショップ画面"></p>
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
                                    <li><a href="#link-a">Zen Cart インストール はじめに</a></li>
                                    <li><a href="#link-b">Zen Cartのダウンロード</a></li>
                                    <li><a href="#link-c">MySQL（データベース）の設定</a>
                                        <ol>
                                            <li><a href="#link-c01">1.「MySQL設定」をクリック</a></li>
                                            <li><a href="#link-c02">2.MySQLの追加</a></li>
                                            <li><a href="#link-c03">3.MySQLユーザの追加</a></li>
                                            <li><a href="#link-c04">4.MySQLアクセス権の追加</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">ファイルアップロード</a>
                                        <ul>
                                            <li><a href="#link-d01">1.アップロード先の確認</a></li>
                                            <li><a href="#link-d02">2.ファイルのアップロード</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-e">セットアップ</a>
                                        <ol>
                                            <li><a href="#link-e01">1.Zen CartのURLにアクセスします。</a></li>
                                            <li><a href="#link-e02">2.「インストール」をクリック</a></li>
                                            <li><a href="#link-e03">3.データベースの設定</a></li>
                                            <li><a href="#link-e04">4.システム環境を設定</a></li>
                                            <li><a href="#link-e05">5.ショップの基本的な設定</a></li>
                                            <li><a href="#link-e06">6.管理者アカウント設定</a></li>
                                            <li><a href="#link-e07">7.セットアップ完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">セットアップ後の作業</a>
                                        <ol>
                                            <li><a href="#link-f01">1.「includes」フォルダへ移動</a></li>
                                            <li><a href="#link-f02">2.「configure.php」のパーミッション変更</a></li>
                                            <li><a href="#link-f03">3.「zc_install」を削除</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-g">管理画面の設定</a>
                                        <ol>
                                            <li><a href="#link-g01">1.「admin」フォルダへ移動</a></li>
                                            <li><a href="#link-g02">2.「admin」フォルダの名前変更</a></li>
                                            <li><a href="#link-g03">3.管理画面へアクセス</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-h">インストール完了</a>
                                        <ol>
                                            <li><a href="#link-h01">1.「admin」フォルダへ移動</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Zen Cart インストール はじめに</h4>
                                <div class="section_body">

                                    <p>お客様側で、ZenCartのパッケージを用意していただく必要があります。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>ZenCartのインストール設定例</caption>
                                        <tbody>
                                        <tr>
                                            <th>バージョン名</th>
                                            <td>Zen Cart 1.5.1（日本語版）</td>
                                        </tr>
                                        <tr>
                                            <th>サーバーID</th>
                                            <td>xsample</td>
                                        </tr>
                                        <tr>
                                            <th>ドメイン名</th>
                                            <td>example.com</td>
                                        </tr>
                                        <tr>
                                            <th>インストールディレクトリ</th>
                                            <td>/home/xsample/example.com/public_html/zc/</td>
                                        </tr>
                                        <tr>
                                            <th>インストールURL</th>
                                            <td>http://example.com/zc/</td>
                                        </tr>
                                        <tr>
                                            <th>データベース</th>
                                            <td>MySQL5.5</td>
                                        </tr>
                                        <tr>
                                            <th>FTPソフト</th>
                                            <td>FileZilla</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-b" class="section_ttl">Zen Cartのダウンロード</h4>
                                <div class="section_body">
                                    <p>公式サイトから、案内にしたがってZen Cartに必要なファイルをダウンロードしてください。<br>
                                        ダウンロード完了後、圧縮ファイルを解凍します。</p>
                                    <p class="link"><a href="http://zen-cart.jp/" target="_blank" rel="nofollow">ZenCart 公式サイト</a><i class="ico ico_new-window"></i></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-c" class="section_ttl">MySQL（データベース）の設定</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c01">1.「MySQL設定」をクリック</h6>
                                            <div class="box_body">
                                                <p>サーバーパネルへログインし、「MySQL設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c02">2.MySQLの追加</h6>
                                            <div class="box_body">
                                                <p>「データベースを追加」をクリックします。</p>
                                                <p>「MySQLデータベース名」を入力し、文字コードを「UTF-8」としたうえで、「追加する」をクリックします。</p>
                                                <p class="note">※本マニュアルでは、MySQLデータベース名を「xsample_zc」とします。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_1.png?date=2410" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c03">3.MySQLユーザの追加</h6>
                                            <div class="box_body">
                                                <p>「MySQLユーザー設定」をクリックし、「データベースを追加」をクリックします。<br>
                                                    「MySQLユーザID」と「パスワード」を入力し、「追加する」をクリックします。</p>
                                                <p class="note">※本マニュアルでは、MySQLユーザーを「xsample_user」とします。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_2.png?date=2410" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c04">4.MySQLアクセス権の追加</h6>
                                            <div class="box_body">
                                                <p>「MySQLデータベース設定」へ戻り、追加したMySQLデータベースの「ユーザー設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_3.png?date=2410" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>「ユーザーを追加」をクリックし、設定方法を選択し、「追加する」をクリックしてください。<br>追加したデータベースの「アクセス権所有ユーザー」に追加したユーザーが表記されていれば追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_4.png?date=2410" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>※本マニュアルでは、データベース「xsample_zc」にMySQLユーザー「xsample_user」を追加します。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-d" class="section_ttl">ファイルアップロード</h4>
                                <div class="section_body">

                                    <p>公式サイトよりダウンロードしたファイルを解凍してください。<br>
                                        解凍後、FTPソフトをご用意いただきファイルのアップロードをお進めください。<br>
                                        （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d01">1.アップロード先の確認</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                    FTPサーバーの「お客様のドメイン名/public_html」の中に「zc」フォルダを作成しファイルのアップロードを行います。</p>
                                                <p>FileZillaでは、右側のサーバー領域を右クリックし「ディレクトリを作成して移動」を選択します。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_5.png" alt="MySQL設定にフォーカスしたスクリーンショット"></p>
                                                <p>続いて、作成するディレクトリ名を入力します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/」を作成します。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_6.png" alt="MySQL設定にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d02">2.ファイルのアップロード</h6>
                                            <div class="box_body">
                                                <p>左側のローカル上からZen Cartに必要なファイルを「zc」フォルダへ全てアップロードします。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>アップロード</dt>
                                                    <dd><p><img class="img" src="../img/manual/man_install_zen_7.png" alt="define.php:編集前のファイル変更箇所にフォーカス"></p></dd>
                                                    <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                    <dd><p><img class="img" src="../img/manual/man_install_zen_8.png" alt="define.php:編集後のファイル編集箇所にフォーカス"></p></dd>
                                                </dl>
                                                <p>右側のサーバー領域にファイルが表示されていれば、アップロード完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-e" class="section_ttl">セットアップ</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e01">1.Zen CartのURLにアクセスします。</h6>
                                            <div class="box_body">
                                                <p>ZenCartのファイルアップロード完了後、下記URLにアクセスしてください。</p>
                                                <div class="border border_gray">
                                                    http://お客様のドメイン名/zc/zc_install/<br>
                                                    （本マニュアルでは：http://example.com/zc/zc_install/）
                                                </div>

                                                <p>URLへアクセスするとセットアップ画面が表示されます。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_9.png" alt="ZenCartのスクリーンショット"></p>
                                                <p>「続ける」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_10.png" alt="「上記を確認したうえでこれに同意します。」にチェックを入れ「続ける」をクリック"></p>
                                                <p>ライセンス規約を確認し、「上記を確認したうえでこれに同意します。」　にチェックを入れ、「続ける」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e02">2.「インストール」をクリック</h6>
                                            <div class="box_body">
                                                <p>「システム検査」項目の画面下部の「インストール」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_11.png" alt="「インストール」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e03">3.データベースの設定</h6>
                                            <div class="box_body">
                                                <p>データベース設定画面が表示されます。<br>
                                                    MySQLデータベースに接続するための情報を入力します。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_12.png" alt="データベース設定のスクリーンショット"></p>
                                                <table class="table table_use-caption">
                                                    <caption>データベース設定</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>データベース文字セット/照合</th>
                                                        <td>UTF-8 (default)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>データベースホスト名</th>
                                                        <td>MySQLホスト名を入力します。<br>
                                                            例）mysql20a.xserver.jp<br>
                                                            <br>
                                                            MySQLホスト名は「サーバーパネル＞MySQL設定＞MySQL情報」より確認可能です。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>データベースユーザー名</th>
                                                        <td> MySQL（データベース）の設定で作成したMySQLユーザー名<br>
                                                            例:xsample_user </td>
                                                    </tr>
                                                    <tr>
                                                        <th>データベースパスワード</th>
                                                        <td>MySQLユーザー名作成時、設定したパスワード</td>
                                                    </tr>
                                                    <tr>
                                                        <th>データベース名</th>
                                                        <td>MySQLユーザー名作成時、設定したデータベース名<br>
                                                            例:xsample_zc</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>データベース - オプション設定</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>テーブルプレフィックス</th>
                                                        <td>本インストールでは変更していません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>SQLキャッシュの方法</th>
                                                        <td>本インストールでは変更していません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>セッション/SQLキャッシュディレクトリ</th>
                                                        <td>本インストールでは変更していません。 </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>データベース情報入力後、「データベース設定を保存」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e04">4.システム環境を設定</h6>
                                            <div class="box_body">
                                                <p>システム設定が表示されます。必要に応じて変更してください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_13.png" alt="システム環境設定画面"></p>
                                                <table class="table table_use-caption">
                                                    <caption>サーバー設定</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>設置ディレクトリ</th>
                                                        <td>本インストールでは変更していません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>サイトのURL</th>
                                                        <td>本インストールでは変更していません。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>SSL Details</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>SSLサーバのホスト名<br>
                                                            （不要なら空白）</th>
                                                        <td>必要に応じて変更してください。<br>
                                                            （本インストールでは変更していません。）</td>
                                                    </tr>
                                                    <tr>
                                                        <th>サイトのURL<br>
                                                            （SSL/不要なら空白）</th>
                                                        <td>必要に応じて変更してください。<br>
                                                            （本インストールでは変更していません。）</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目確認後、「設定を保存」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e05">5.ショップの基本的な設定</h6>
                                            <div class="box_body">
                                                <p>各設定項目をお客様任意で設定してください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_14.png" alt="ショップ設定画面"></p>

                                                <table class="table table_use-caption">
                                                    <caption>ショップ情報</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>ショップ名</th>
                                                        <td>任意の文字列を指定してください。<br>
                                                            例）テストショップ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ショップオーナーの名前</th>
                                                        <td>任意の文字列を指定してください。<br>
                                                            例）ショップオーナー</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ショップオーナーのメールアドレス</th>
                                                        <td>メールアドレスを入力してください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>国</th>
                                                        <td>国を指定してください。<br>
                                                            例）Japan</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ゾーン</th>
                                                        <td>ゾーンを指定してください。<br>
                                                            例）大阪府</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ショップの住所</th>
                                                        <td>任意の文字列を指定ください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>デフォルトの言語</th>
                                                        <td>言語を指定してください。<br>
                                                            例）Japanese</td>
                                                    </tr>
                                                    <tr>
                                                        <th>デフォルトの通貨</th>
                                                        <td>通貨を指定してください。<br>
                                                            例）Japanese Yen</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>デモ情報</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>ショップのデモ</th>
                                                        <td>必要に応じて変更してください。<br>
                                                            （本インストールでは変更していません。）</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目入力後、「ショップ設定を保存」をクリックします。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e06">6.管理者アカウント設定</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_zen_15.png" alt="管理者アカウント設定画面"></p>
                                                <table class="table table_use-caption">
                                                    <caption>管理者情報</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>管理者ID</th>
                                                        <td>任意の文字列を指定してください。<br>
                                                            例）admin</td>
                                                    </tr>
                                                    <tr>
                                                        <th>管理者パスワード</th>
                                                        <td>任意の文字列を指定してください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>管理者パスワード（確認）</th>
                                                        <td>任意の文字列を指定してください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>管理者のメールアドレス</th>
                                                        <td>メールアドレスを入力してください。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>最新版の検出</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>ログインのたびにZen Cartの最新バージョンをチェックする</th>
                                                        <td>必要に応じて変更してください。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>各設定項目入力後、「管理者設定を保存」をクリックします。</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 id="link-e07" class="box_ttl">7.セットアップ完了</h6>
                                            <div class="box_body">
                                                <p>セットアップが完了しました。<br>
                                                    このままでは利用できないため、<a href="#link-f">セットアップ後の作業</a>が必要です。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_16.png" alt="設置完了画面"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>セットアップ完了画面はそのままの状態（ブラウザは開いた状態）で、<a href="#link-f">セットアップ後の作業</a>と<a href="#link-g">管理画面の設定</a>を進めてください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-f" class="section_ttl">セットアップ後の作業</h4>
                                <div class="section_body">

                                    <p>FTPソフトをご用意いただきファイルの削除やパーミッションの変更を行います。<br>
                                        （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f01">1.「includes」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。</p>
                                                <p class="mb0">FTPサーバーの「お客様のドメイン名/public_html/zc/admin/includes/」へ移動します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/admin/includes/」となります。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_17.png" alt="「includes」フォルダへ移動1"></p>
                                                <p><img class="img" src="../img/manual/man_install_zen_18.png" alt="「includes」フォルダへ移動2"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f02">2.「configure.php」のパーミッション変更</h6>
                                            <div class="box_body">
                                                <p>「configure.php」ファイルを確認します。<br>
                                                    「configure.php」ファイルを右クリックし「ファイルのパーミッション」を選択します。</p>

                                                <p><img class="img" src="../img/manual/man_install_zen_19.png" alt="パーミッション変更1"></p>
                                                <p>「ファイルの属性を変更」が表示されます。数値を「444」と変更してください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_20.png" alt="パーミッション変更2"></p>
                                                <p>続いて「お客様のドメイン名/public_html/zc/admin/includes/」へ戻ります。<br>
                                                    再度、「configure.php」ファイルを右クリックし「ファイルのパーミッション」より数値が「444」へ変更されているか確認してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f03">3.「zc_install」を削除</h6>
                                            <div class="box_body">
                                                <p>「お客様のドメイン名/public_html/zc/」へ戻り、「zc_install」フォルダを確認します。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_21.png" alt="「zc_install」を削除1"></p>
                                                <p>「zc_install」フォルダを右クリックし、「削除」を選択します。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_22.png" alt="「zc_install」を削除2"></p>
                                                <p>「はい」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_23.png" alt="「zc_install」を削除3"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-g" class="section_ttl">管理画面の設定</h4>
                                <div class="section_body">

                                    <p>7.セットアップ完了時に表示された「管理画面」へアクセスします。</p>
                                    <p><img class="img" src="../img/manual/man_install_zen_24.png" alt="設置完了画面"></p>

                                    <p>アクセスすると下記警告画面が表示されます。</p>
                                    <p><img class="img" src="../img/manual/man_install_zen_25.png" alt="警告画面"></p>
                                    <p>警告のとおり、「admin」フォルダの名前を変更する必要があります。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g01">1.「admin」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                    （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します。）</p>
                                                <p class="mb0">FTPサーバーの「お客様のドメイン名/public_html/zc/admin/」へ移動します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/zc/admin/」となります。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_26.png" alt="「admin」フォルダへ移動"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g02">2.「admin」フォルダの名前変更</h6>
                                            <div class="box_body">
                                                <p>「admin」フォルダを右クリックし、「名前の変更」を選択します。</p>

                                                <p><img class="img" src="../img/manual/man_install_zen_27.png" alt="「admin」フォルダの名前変更1"></p>
                                                <p>新しい名前を入力し、確定してください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_28.png" alt="「admin」フォルダの名前変更2"></p>
                                                <ul class="note-list">
                                                    <li>※本マニュアルでは、「admin-tool」へ変更しています。</li>
                                                    <li>※既存フォルダやファイル名と重複しないようにご注意ください。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g03">3.管理画面へアクセス</h6>
                                            <div class="box_body">
                                                <p>管理画面へアクセスし、ログイン画面が表示されるかご確認ください。</p>
                                                <p>管理画面アクセスURLは『http://Zen CartインストールURL/adminフォルダ変更名』となります。</p>
                                                <div class="border border_blue">（例）<br>
                                                    本マニュアルでは「admin-tool」へ変更したため、インストールURLが http://example.com/zc/ の場合 http://example.com/zc/admin-tool にて管理画面へアクセス可能です。
                                                </div>
                                                <p><img class="img" src="../img/manual/man_install_zen_29.png" alt="管理画面"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-h" class="section_ttl">インストール完了</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-h01">1.「admin」フォルダへ移動</h6>
                                            <div class="box_body">
                                                <p><a href="#link-e07">7.セットアップ完了時</a>に表示された「ショップ」へアクセスしてください。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_30.png" alt="設置完了画面"></p>
                                                <p>アクセスし、以下の画面が表示されれば、インストール完了です。</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_31.png" alt="ショップ画面"></p>
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