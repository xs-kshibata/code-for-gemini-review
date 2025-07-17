<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>EC-CUBE 4 簡単インストール手順 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜簡単インストール機能で「EC-CUBE4」を設置するための手順を記載しています。エックスサーバーでは簡単な操作で「EC-CUBE4」を設置できる「簡単インストール」機能を提供しています。">

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

<h3 class="sub-ttl">EC-CUBE 4</h3>

    <div class="supportTabArea">
        <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
        <div class="supportTabWrap">
            <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
            <!-- 旧パネル -->
            <div class="supportTabContents">

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-previous-a">EC-CUBE 4 簡単インストール はじめに</a></li>
                        <li><a href="#link-previous-b">簡単インストール手順</a>
                            <ol>
                                <li><a href="#link-previous-b01">1.EC-CUBE 4 のインストール設定</a></li>
                                <li><a href="#link-previous-b02">2.確認し間違いがなければ「インストールする」をクリック</a></li>
                                <li><a href="#link-previous-b03">3.完了画面が表示されればインストール完了</a></li>
                                <li><a href="#link-previous-b04">4.管理画面の確認</a></li>
                                <li><a href="#link-previous-b05">すでに作成済みのデータベースを利用する場合</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-previous-c">[参考] MySQL（データベース）の設定</a>
                            <ol>
                                <li><a href="#link-previous-c01">1.MySQLの追加</a></li>
                                <li><a href="#link-previous-c02">2.MySQLユーザの追加</a></li>
                                <li><a href="#link-previous-c03">3.MySQLアクセス権の設定</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-previous-d">[参考] サイトSSL設定</a>
                            <ol>
                                <li><a href="#link-previous-d01">1.SSL（https）接続にて管理画面へアクセス</a></li>
                                <li><a href="#link-previous-d02">2.「設定」の「セキュリティ管理」にて「SSLを強制」にチェック</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>



                <section class="section">
                    <h4 class="section_ttl" id="link-previous-a">EC-CUBE 4 簡単インストール はじめに</h4>
                    <div class="section_body">
                        <p>
                            お客様側で、EC-CUBEのインストールファイルを用意していただく必要はありません。<br>
                            <br>
                            なお、EC-CUBE 3 をご利用の方は「<a href="man_install_auto_ec.php">EC-CUBE 3 簡単インストール手順</a>」よりマニュアルをご確認いただけます。<br>
                            <br>
                            また、インストール後の各種設定やカスタマイズ、アップデート等に関するサポートは行っておりません。あらかじめご了承ください。
                        </p>
                        <table class="table table_use-caption break-word">
                            <caption>EC-CUBE 4 簡単インストール 設定例</caption>
                            <tbody>
                            <tr>
                                <th class="w20per w30per-s">サーバーID</th>
                                <td>xsample</td>
                            </tr>
                            <tr>
                                <th>ドメイン名</th>
                                <td>example.com</td>
                            </tr>
                            <tr>
                                <th>インストールディレクトリ</th>
                                <td>
                                    /home/xsample/example.com/public_html/ec
                                </td>
                            </tr>
                            <tr>
                                <th>インストールURL</th>
                                <td>http://example.com/ec</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table_use-caption break-word">
                            <caption>EC-CUBE 4 簡単インストール 動作環境</caption>
                            <tbody>
                            <tr>
                                <th class="w20per w30per-s">PHPバージョン</th>
                                <td>
                                    PHP 8.1.x 〜 8.3.x
                                    <p class="note mb0">
                                        ※PHP動作バージョンの変更は、マニュアル「<a href="man_program_php_ver.php#link-previous-b">PHPのバージョン切り替え</a>」をご参照ください。
                                    </p>

                                </td>
                            </tr>
                            <tr>
                                <th>データベース</th>
                                <td>MySQL5.7 / MariaDB 10.5<p class="note mb0">※文字コードを UTF-8 に設定してください。</p></td>
                            </tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>EC-CUBE4.1のシステム要件について</h6>
                            <div class="msg_body">
                                <p>
                                    MariaDB10.5/MySQL5.5はシステム要件から外れるため、プラグインによっては動作しない場合があります。<br>
                                    あらかじめご了承ください。
                                </p>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-b">簡単インストール手順</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「簡単インストール」より、設定するドメインを選択し、「プログラムインストール」のタブをクリックしてください。</p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_other_1.png" alt="簡単インストールにフォーカスしたスクリーンショット"></p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_9.png" alt="ドメインを選択するスクリーンショット"></p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_10.png" alt="「プログラムインストール」のタブをクリックするスクリーンショット"></p>

                        <div class="serial-box">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b01">1.EC-CUBE 4 のインストール設定</h6>
                                <div class="box_body">
                                    <p>
                                        EC-CUBE 4 の「インストール設定」ボタンをクリックしてください。
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/previous/man_install_auto_ec4_1.png" alt="簡単インストールプログラム選択画面：EC-CUBE 4 にフォーカスしたスクリーンショット">
                                    </p>
                                    <p>以下の各項目を入力し、最後に「確認画面へ進む」ボタンをクリックしてください。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>EC-CUBE 4 のインストール設定</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w30per w30per-s">ショップURL</th>
                                            <td>
                                                <p class="mb5">example.com/ec</p>
                                                <div class="border border_gray">
                                                    ショップURLを「http://example.com」にする場合は、プルダウンでホスト名(ドメイン)を選択し、「/」(スラッシュ)に続くフォルダ部分(テキストボックス)は空欄のままにしてください。
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ショップ名</th>
                                            <td>ショップサイトの名前を指定してください。</td>
                                        </tr>
                                        <tr>
                                            <th>メールアドレス</th>
                                            <td>現在利用可能（有効なもの）で、EC-CUBE 4 の管理用アドレスとして利用したいものを入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>管理画面ログインID</th>
                                            <td>任意の文字列を入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>管理画面パスワード</th>
                                            <td>任意の文字列を入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>データベース</th>
                                            <td>
                                                <p>
                                                    利用するデータベースを選択します。<br>
                                                    「自動でデータベースを生成する」を選択してください。
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_2.png" alt="EC-CUBE 4 設定画面のスクリーンショット"></p>
                                </div>
                                <!-- /.box_body -->
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b02">2.確認し間違いがなければ「インストールする」をクリック</h6>
                                <div class="box_body">
                                    <p>確認画面に表示されている内容に間違いがなければ「インストールする」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_8.png" alt="簡単インストールプログラム選択画面：EC-CUBE 4 インストール確認画面のスクリーンショット"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b03">3.完了画面が表示されればインストール完了</h6>
                                <div class="box_body">
                                    <p>インストールが完了すると、完了画面が表示されます。</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">※「管理画面ログインID」と「管理画面パスワード」を忘れずにお控えください。</p>
                                    <p style="text-indent: -1em; padding-left: 1em;">※表の「管理画面URL」に表示されるURLをクリックし、インストールしたEC-CUBEのログイン画面に進みます。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_3.png" alt="EC-CUBE 4 インストール完了画面のスクリーンショット"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b04">4.管理画面の確認</h6>
                                <div class="box_body">
                                    <p>インストールの際に設定した「管理画面ログインID」と「管理画面パスワード」を入力してログインしてください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_4.png" alt="EC-CUBE 4 管理画面のスクリーンショット"></p>
                                    <p>
                                        以上でEC-CUBE 4 の導入は終了です。<br>
                                    </p>
                                </div>
                            </section>
                            <!-- /.box -->

                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b05">すでに作成済みのデータベースを利用する場合</h6>
                                <div class="box_body">
                                    <p>
                                        「1.EC-CUBE 4 のインストール設定」にて「作成済みのデータベースを利用する」を選択し、以下の各項目を選択してください。
                                    </p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>データベース名</dt>
                                        <dd>
                                            <p>
                                                利用するデータベースを指定してください。<br>
                                                例)xsample_ec
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>データベースユーザー名</dt>
                                        <dd>
                                            <p class="mb0">
                                                データベースユーザを指定してください。<br>
                                                例)xsample_user
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>データベース用パスワード</dt>
                                        <dd>上記で指定したデータベースユーザー名のパスワードを入力してください。</dd>
                                    </dl>
                                    <p>データベースの作成については「<a href="#link-previous-c">MySQL(データベース)の設定</a>」の項目をご参照ください。</p>
                                </div>
                            </section>
                            <!-- /.box -->
                        </div>
                        <!-- /.serial-box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-c">[参考] MySQL（データベース）の設定</h4>
                    <div class="section_body">
                        <p>簡単インストールをする前に、EC-CUBE 4 で利用するデータベースを新規作成します。<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より、「データベース」→「MySQL設定」をクリックします。</p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c01">1.MySQLの追加</h6>
                                <div class="box_body">
                                    <p>「MySQL追加」のタブをクリックして、EC-CUBE 4 で利用するデータベースを追加します。</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">※文字コードは「UTF-8」を選択してください。</p>
                                    <p style="text-indent: -1em; padding-left: 1em;">
                                        ※データベース名は「お客様のサーバーID_データベース名」となります<br>
                                        (本マニュアルでは「xsample_ec」として作成します)。
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_5.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c02">2.MySQLユーザの追加</h6>
                                <div class="box_body">
                                    <p>「MySQLユーザ追加」のタブをクリックし、作成したデータベースにアクセスするMySQLユーザを追加します。</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">
                                        ※データベース名は「お客様のサーバーID_ユーザー名」となります<br>
                                        (本マニュアルではユーザー名を「xsample_user」として作成します)。
                                    </p>
                                    <p style="text-indent: -1em; padding-left: 1em;">※追加済みのMySQLユーザを利用する場合は、本項の手順を省略し、「3.MySQLアクセス権の設定」を行ってください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_3.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c03">3.MySQLアクセス権の設定</h6>
                                <div class="box_body">
                                    <p>「MySQL一覧」のタブをクリックし、作成したデータベースにアクセス権を設定します。</p>
                                    <p>一覧にある「1.MySQLデータベースの追加」で追加したデータベースにおいて、「アクセス権未所有ユーザー」から追加したいMySQLユーザを選択し、「追加」ボタンをクリックしてください。</p>
                                    <p>
                                        「アクセス権所有ユーザー」にMySQLユーザが追加できましたら、作業は完了です。<br>
                                        引き続き、「簡単インストール手順」に沿って、インストールを行ってください。
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_6.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                    <p>
                                        以上でMySQLの設定は完了です。<br>
                                        以降は、「<a href="#link-previous-b">簡単インストール手順</a>」に沿って、インストールを行ってください。
                                    </p>
                                </div>
                            </section>
                            <!-- /.box -->
                        </div>
                        <!-- /.serial-box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-d">[参考] サイトSSL設定</h4>
                    <div class="section_body">
                        <p>EC-CUBE 4 はショップサイトならびに管理画面にてSSL（https）経由での接続に制限することが可能です。</p>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-d01">1.SSL（https）接続にて管理画面へアクセス</h6>
                                <div class="box_body">
                                    <p>インストールしたEC-CUBEに対し、SSLによるURL（https://〜）で管理画面にアクセスし、ログインをしてください。</p>
                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-d02">2.「設定」の「セキュリティ管理」にて『SSLを強制』にチェック</h6>
                                <div class="box_body">
                                    <p>
                                        「管理 > セキュリティ管理 > サイトセキュリティ設定」に進みます。<br>
                                        「サイトセキュリティ設定」内のSSL制限にある「SSLを強制」にチェックを入れ、「登録」ボタンをクリックします。</p>
                                    <p class="mb0"><img class="img" src="../img/manual/previous/man_install_auto_ec4_7.png" alt="EC-CUBE 4 の設定画面：「SSLを強制」にチェックしているスクリーンショット"></p>
                                    <p class="note mt10">※SSL（https）接続を行っていない場合は「SSLを強制」にチェックを入れることができません。</p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box mb10 -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->

            </div>
            <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
            <!-- 新パネル -->
            <div class="supportTabContents">
                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">EC-CUBE 4 簡単インストール はじめに</a></li>
                        <li>
                            <a href="#link-b">簡単インストール手順</a>
                            <ol>
                                <li><a href="#link-b1">1.EC-CUBE 4 のインストール設定</a></li>
                                <li><a href="#link-b2">2.インストール完了</a></li>
                                <li><a href="#link-b3">3.管理画面の確認</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#link-c">[参考] MySQL（データベース）の設定</a>
                            <ol>
                                <li><a href="#link-c1">1.MySQLの追加</a></li>
                                <li><a href="#link-c2">2.MySQLユーザーの追加</a></li>
                                <li><a href="#link-c3">3.MySQLアクセス権の設定</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#link-d">[参考] サイトSSL設定</a>
                            <ol>
                                <li><a href="#link-d1">1.SSL（https）接続にて管理画面へアクセス</a></li>
                                <li><a href="#link-d2">2.「設定」の「セキュリティ管理」にて「SSLを強制」にチェック</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <section class="section" id="i1">
                    <div class="section_body">
                        <h3 id="link-a" class="section_ttl">EC-CUBE 4 簡単インストール はじめに</h3>
                        <p>
                            お客様側で、EC-CUBEのインストールファイルを用意していただく必要はありません。<br>
                            また、インストール後の各種設定やカスタマイズ、アップデート等に関するサポートは行っておりません。あらかじめご了承ください。
                        </p>
                        <table class="table table--responsive">
                            <caption>EC-CUBE 4 簡単インストール 設定例</caption>
                            <tbody>
                            <tr>
                                <th class="w20perL w30per-s">サーバーID</th>
                                <td>xsample</td>
                            </tr>
                            <tr>
                                <th>ドメイン名</th>
                                <td>example.com</td>
                            </tr>
                            <tr>
                                <th>インストールディレクトリ</th>
                                <td>
                                    /home/xsample/example.com/public_html/ec
                                </td>
                            </tr>
                            <tr>
                                <th>インストールURL</th>
                                <td>http://example.com/ec</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table--responsive">
                            <caption>EC-CUBE 4 簡単インストール 動作環境</caption>
                            <tbody>
                            <tr>
                                <th class="w20perL w30per-s">PHPバージョン</th>
                                <td>
                                    PHP 8.1.x 〜 8.3.x
                                    <p class="note mb0">※PHP動作バージョンの変更は、マニュアル「<a href="man_program_php_ver.php#link-b">PHPバージョンの切り替え</a>」をご参照ください</p>
                                </td>
                            </tr>
                            <tr>
                                <th>データベース</th>
                                <td>MySQL5.7 / MariaDB 10.5<p class="note mb0">※文字コードを UTF-8 に設定してください。</p></td>
                            </tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>EC-CUBE4.1のシステム要件について</h6>
                            <div class="msg_body">
                                <p>
                                    MariaDB10.5/MySQL5.5はシステム要件から外れるため、プラグインによっては動作しない場合があります。<br>
                                    あらかじめご了承ください。
                                </p>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i2">
                    <div class="section_body">
                        <h3 id="link-b" class="section_ttl">簡単インストール手順</h3>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>インストール作業を始める前に　(データベースの作成について)</h6>
                            <div class="msg_body">
                                <p>
                                    本マニュアルでは、プログラムのインストールに併せ、参照するデータベースを自動生成する方法でご案内をしています。<br>
                                    任意のデータベース名を設定する場合は、事前に「<a href="#i3">MySQL(データベース)の設定</a>」をご参考の上、データベースを作成してください。
                                </p>
                            </div>
                        </aside>

                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-b1">1.EC-CUBE 4 のインストール設定</h4>
                                <div class="box_body">
                                    <p>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「EC-CUBE簡単インストール」より、「新規インストール」をクリックしてください。
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_1.png?date=2410" alt="新規インストールにフォーカスしたスクリーンショット">
                                    </p>
                                    <p>
                                        以下の各項目を入力し、最後に「インストールする」ボタンをクリックしてください。
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_2.png?date=2410" alt="新規インストールの入力項目のスクリーンショット">
                                    </p>
                                    <table class="table table--responsive">
                                        <caption>EC-CUBE 4 のインストール設定</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w30perL w30per-s">ショップURL</th>
                                            <td>
                                                <p class="mb5">example.com/ec</p>
                                                <div class="border border_gray">
                                                    ショップURLを「http://example.com」にする場合は、プルダウンでホスト名(ドメイン)を選択し、「/」(スラッシュ)に続くフォルダ部分(テキストボックス)は空欄のままにしてください。
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ショップ名</th>
                                            <td>ショップサイトの名前を指定してください。</td>
                                        </tr>
                                        <tr>
                                            <th>メールアドレス</th>
                                            <td>現在利用可能（有効なもの）で、EC-CUBE 4 の管理用アドレスとして利用したいものを入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>管理画面ログインID</th>
                                            <td>任意の文字列を入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>管理画面パスワード</th>
                                            <td>任意の文字列を入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>データベース</th>
                                            <td>
                                                <p>
                                                    利用するデータベースを選択します。<br>
                                                    「自動でデータベースを生成する」を選択してください。
                                                </p>
                                                <aside class="msg msg_notice mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>すでに作成済みのデータベースを利用する場合</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            「作成済みのデータベースを利用する」を選択し、以下の各項目を選択してください。
                                                        </p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>データベース名</dt>
                                                            <dd>
                                                                <p>
                                                                    利用するデータベースを指定してください。<br>
                                                                    例)xsample_ec
                                                                </p>
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>データベースユーザー名</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    データベースユーザを指定してください。<br>
                                                                    例)xsample_user
                                                                </p>
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>データベース用パスワード</dt>
                                                            <dd>上記で指定したデータベースユーザー名のパスワードを入力してください。</dd>
                                                        </dl>
                                                        データベースの作成については「<a href="#i3">MySQL(データベース)の設定</a>」の項目をご参照ください。
                                                    </div>
                                                    <!-- /.msg_body-->
                                                </aside>
                                                <!-- /.msg msg_notice mb0 -->
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-b2">2.インストール完了</h4>
                                <div class="box_body">
                                    <p>一覧に表示されていればインストール完了です。</p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_3.png?date=2410" alt="EC-CUBE 4 インストール完了画面のスクリーンショット">
                                    </p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-b3">3.管理画面の確認</h4>
                                <div class="box_body">
                                    <p>インストールの際に設定した「管理画面ログインID」と「管理画面パスワード」を利用してログインしてください。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_ec4_4.png?date=2410" alt="EC-CUBE 4 管理画面のスクリーンショット"></p>
                                    <p>
                                        以上でEC-CUBE 4 の導入は終了です。<br>
                                    </p>
                                </div>
                            </section>

                        </div>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i3">
                    <div class="section_body">
                        <h3 id="link-c" class="section_ttl">[参考] MySQL（データベース）の設定</h3>
                        <p>簡単インストールをする前に、EC-CUBE 4 で利用するデータベースを新規作成します。<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より、「データベース」→「MySQL設定」をクリックします。
                        </p>
                        <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-c1">1.MySQLの追加</h4>
                                <div class="box_body">
                                    <p>「データベースを追加」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_2.png?date=2410" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                    <p>利用したいデータベース名を入力し、「追加する」ボタンをクリックしてください。データベース名は、「お客様のサーバーID_データベース名」になります。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_3.png?date=2410" alt="MySQLデータベースの追加にフォーカスしたスクリーンショット"></p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>文字コード設定について</h6>
                                        <div class="msg_body">
                                            <p class="font14">データーベース作成時に、そのデータベースで扱う文字コードを設定できます。サーバープログラムをインストールする場合などで、スクリプトに合わせた文字コードに設定する必要がある場合にお使いください。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-c2">2.MySQLユーザーの追加</h4>
                                <div class="box_body">
                                    <p>データベースにユーザーを追加します。「MySQLユーザー設定」をクリックしたのち、表示された画面で「ユーザーを追加」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_4.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>MySQLユーザーID</th>
                                            <td>お客様のサーバーIDが自動的に付加されます。例：xsample_</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>MySQLユーザーのパスワードを入力してください。</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p>内容を入力し、「追加する」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_5.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-c3">3.MySQLアクセス権の設定</h4>
                                <div class="box_body">
                                    <p>「MySQLデータベース設定」から、作成したデータベースへのアクセス権所有ユーザーの設定が行えます。「ユーザー設定」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_6.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                    <p>アクセス権所有ユーザー一覧が表示されます。追加する場合は「ユーザーを追加」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_7.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                    <p>希望するデータベースへのアクセス権に追加したいユーザーを選択し、「追加する」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_8.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                    <p>以上でMySQLの設定は完了です。<br>
                                        以降は、「<a href="#i2">簡単インストール手順</a>」に沿って、インストールを行ってください。</p>
                                </div>
                            </section>



                        </div>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i4">
                    <div class="section_body">
                        <h3 id="link-d" class="section_ttl">[参考] サイトSSL設定</h3>
                        <p>EC-CUBE 4 はショップサイトならびに管理画面にてSSL（https）経由での接続に制限することが可能です。</p>
                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-d1">1.SSL（https）接続にて管理画面へアクセス</h4>
                                <div class="box_body">
                                    <p>インストールしたEC-CUBEに対し、SSLによるURL（https://〜）で管理画面にアクセスし、ログインをしてください。</p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-d2">2.「設定」の「セキュリティ管理」にて「SSLを強制」にチェック</h4>
                                <div class="box_body">
                                    <p>
                                        「管理 &gt; セキュリティ管理 &gt; サイトセキュリティ設定」に進みます。<br>
                                        「サイトセキュリティ設定」内のSSL制限にある「SSLを強制」にチェックを入れ、「登録」ボタンをクリックします。</p>
                                    <p class="mb0"><img class="img" src="../img/manual/man_install_auto_ec4_5.png?date=2410" alt="EC-CUBE 4 の設定画面：「SSLを強制」にチェックしているスクリーンショット"></p>
                                    <p class="note mt10">※SSL（https）接続を行っていない場合は「SSLを強制」にチェックを入れることができません。</p>
                                </div>
                            </section>

                        </div>
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