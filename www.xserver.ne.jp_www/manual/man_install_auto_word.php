<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress 簡単インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜簡単インストール機能で「WordPress 日本語版」を設置するための手順を記載しています。エックスサーバーでは簡単な操作で「WordPress」を設置できる「簡単インストール」機能を提供しています。">

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
                                <li><a href="#link-previous-a">WordPress 簡単インストール はじめに</a></li>
                                <li><a href="#link-previous-b">簡単インストール手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「WordPressインストール」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.WordPressのインストール設定</a></li>
                                        <li><a href="#link-previous-b03">3.確認し間違いがなければ「インストールする」をクリック</a></li>
                                        <li><a href="#link-previous-b04">4.完了画面が表示されればインストール完了です</a></li>
                                        <li><a href="#link-previous-b05">5.インストール確認</a></li>
                                        <li><a href="#link-previous-b06">すでに作成済みのデータベースを利用する場合</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-c">[参考] MySQL（データベース）の設定</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.MySQLの追加</a></li>
                                        <li><a href="#link-previous-c02">2.MySQLユーザの追加</a></li>
                                        <li><a href="#link-previous-c03">3.MySQLアクセス権の設定</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">WordPress簡単インストールの削除手順</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.「WordPress簡単インストール」をクリック</a></li>
                                        <li><a href="#link-previous-d02">2.対象のWordPressを確認し「削除」をクリック</a></li>
                                        <li><a href="#link-previous-d03">3.確認し問題がなければ「アンインストールする」をクリック</a></li>
                                        <li><a href="#link-previous-d04">4.削除完了</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>


                            <section class="section" id="link-previous-a">
                                <h4 id="i1" class="section_ttl">WordPress 簡単インストール はじめに</h4>
                                <div class="section_body">
                                    <p>お客様側での、パッケージのご用意は必要ありません。<br>
                                    なお、インストール後の設定等に関するサポートは行っていません。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>WordPress 簡単インストール 設定例</caption>
                                        <tbody>
                                            <tr><th class="w20per w30per-s">サーバーID</th><td>xsample</td></tr>
                                            <tr><th>ドメイン名</th><td>example.com</td></tr>
                                            <tr>
                                                <th>インストールディレクトリ</th>
                                                <td><p class="mb5">/home/xsample/example.com/public_html/wp</p>
                                                    <div class="border border_gray">
                                                        [http://example.com]にてWordPressにアクセスを希望する場合は[/home/xsample/example.com/public_html/]をインストールディレクトリに指定する必要があります。
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>サイトURL</th><td>http://example.com/wp</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>WordPress 簡単インストール 動作環境</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per w30per-s">PHPバージョン</th>
                                                <td>
                                                    PHP 7.4.x以降を推奨 (PHP 5.6.x以降で動作可能)
                                                    <p class="note mb0">※PHP動作バージョンの変更は、マニュアル「<a href="man_program_php_ver.php">PHPのバージョン切り替え</a>」をご参照ください</p>
                                                </td>
                                            </tr>
                                            <tr><th>データベース</th><td>MySQL5.7 / MySQL5.5 / MariaDB 10.5<p class="note mb0">※文字コードを UTF-8(utf8mb4) に設定してください。</p></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <div class="manual-youtube-box">
                                <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                                <div class="manual-youtube">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/arjohR9_Hcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <section class="section mt50">
                                <h4 class="section_ttl" id="link-previous-b">簡単インストール手順</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_start_wpblog_31.png" alt="簡単インストールにフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「WordPressインストール」をクリック</h6>
                                            <div class="box_body">
                                                <p>「WordPressインストール」をクリックしてください</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_1.png" alt="「WordPressインストール」ボタンのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.WordPressのインストール設定</h6>
                                            <div class="box_body">
                                               <p>各項目を入力し、最後に「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_2.png?date=250704" alt="簡単インストールプログラム設定画面"></p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>WordPressのインストール設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w20per w30per-s">サイトURL</th>
                                                            <td><p class="mb5">お客様のドメイン名/wp</p>
                                                                <div class="border border_gray">
                                                                [http://お客様のドメイン名]にて、お客様のWordPressにアクセスを希望する場合は[wp]の部分を空欄としてください。
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>ブログ名</th>
                                                            <td>お客様のブログのタイトル</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ユーザー名</th>
                                                            <td>WordPress管理画面へのログインユーザー名</td>
                                                        </tr>
                                                        <tr>
                                                            <th>パスワード</th>
                                                            <td>WordPress管理画面へのログインパスワード</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールアドレス</th>
                                                            <td>お客様のメールアドレス</td>
                                                        </tr>
                                                        <tr>
                                                            <th>キャッシュ自動削除</th>
                                                            <td>WordPressのキャッシュを、Cronによって一定間隔で自動的に削除します。<br>キャッシュの自動削除機能は、サーバーパネルの「Cron設定」より確認・編集・削除が可能です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>データベース</th>
                                                            <td>
                                                                <p>利用するデータベースを指定します。</p>
                                                                <ul class="ul">
                                                                    <li>
                                                                        自動でデータベースを生成する<br>
                                                                        WordPressに使用するためのデータベースが自動的に作成されます。通常はこちらを選択してください。
                                                                    </li>
                                                                    <li>
                                                                        作成済みのデータベースを利用する<br>
                                                                        すでに作成済みのデータベースを使用する場合、こちらを選択してください。詳しい手順は「<a href="#link-previous-b06">すでに作成済みのデータベースを利用する場合</a>」をご参照ください。
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>テーマ</th>
                                                            <td>WordPressインストールと同時に選択したWordPressテーマがインストールされます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>テーマオプション</th>
                                                            <td>
                                                                <p>選択したWordPressテーマに子テーマ・プラグインの提供がある場合、それらを同時にインストールするか選択できます。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>子テーマの提供があるテーマ</dt>
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>Cocoon</li>
                                                                            <li>Lightning</li>
                                                                            <li>XWRITE</li>
                                                                            <li>SWELL</li>
                                                                        </ul>
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>プラグインの提供があるテーマ</dt>
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>Snow Monkey</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>プラグイン</th>
                                                            <td>WordPressインストールと同時に選択したWordPressプラグインがインストールされます。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>サブドメインにインストールを行う場合</dt>
                                                    <dd>
                                                        <p><img class="img" src="../img/manual/previous/man_install_auto_word_8.png" alt="簡単インストールサブドメイン選択画面"></p>
                                                        <ol>
                                                            <li>1.<a href="man_domain_subdomain_setting.php">サブドメイン設定</a>より、サブドメインを設定してください。</li>
                                                            <li>2.「サイトURL」をクリックし、プルダウンよりサブドメインを選択してください。</li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.確認し間違いがなければ「インストールする」をクリック</h6>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.完了画面が表示されればインストール完了です</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_3.png" alt="osCommerceインストール完了画面のスクリーンショット"></p>
                                                <p>簡単インストール完了後に、表示されたリンクをクリックし、ログイン画面へ移動します。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b05">5.インストール確認</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_4.png" alt="WordPressダッシュボード、ブログタイトルをクリックしてサイトを表示"></p>
                                                <p>ログイン後、ダッシュボード内のブログタイトル部分をクリックすることで、インストール時に設定したブログを確認することができます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_5.png" alt="osCommerce管理画面のスクリーンショット"></p>
                                                <p>以上でWordPressの導入は終了です。お疲れ様でした。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b06">すでに作成済みのデータベースを利用する場合</h6>
                                            <div class="box_body">
                                                <p>すでに作成済みのデータベースを利用する場合は、「作成済みのデータベースを利用する」を選択してください。<br>
                                                    この場合は、下記の項目をご入力ください。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>データベース名</dt>
                                                    <dd>
                                                        <p>利用するデータベースを指定してください。<br>
                                                            例)xsample_wp</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>データベースユーザー名</dt>
                                                    <dd>
                                                        <p class="mb0">データベースユーザを指定してください。<br>
                                                            例)xsample_user</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>データベース用パスワード</dt>
                                                    <dd>上記で指定したデータベースユーザー名のパスワードを入力してください。</dd>
                                                </dl>
                                                <p>データベースの作成については「<a href="#link-previous-c">MySQL(データベース)の設定</a>」の項目をご参照ください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-c">
                                <h4 id="i2" class="section_ttl">[参考] MySQL（データベース）の設定</h4>
                                <div class="section_body">

                                    <p>簡単インストールをする前に、WordPressで利用するデータベースを新規作成します。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQLの追加</h6>
                                            <div class="box_body">
                                                <p>WordPressで利用するデータベースを追加します。「MySQL追加」をクリックし、ご利用になるデータベース名を作成してください。<br>
                                                    本マニュアルではデータベース名を「xsample_wp」として作成します。(文字コードは「UTF-8(utf8mb4)」に設定してください)</p>
                                                <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_6.png?date=2412" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQLユーザの追加</h6>
                                            <div class="box_body">
                                                <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザを追加します。</p>
                                                <p class="note">※追加済みのMySQLユーザを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                <p class="mb0">「MySQLユーザ追加」をクリックし、ご利用になるユーザー名とパスワードを設定します。入力後、「確認画面へ進む」ボタンをクリックし、表示された画面で「追加する」ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_3.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQLアクセス権の設定</h6>
                                            <div class="box_body">
                                                <p>「MySQL一覧」から作成したデータベースにアクセス権を追加します。アクセス権未所有ユーザーから追加したいMySQLユーザを選択し追加ボタンをクリックしてください。本マニュアルでは「xsample_wp」に「xsample_user」を追加します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_7.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                <p>以上でMySQLの設定は完了です。<br>
                                                以降は、「<a href="#link-previous-b">簡単インストール手順</a>」に沿って、インストールを行ってください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section mt50">
                                <h4 class="section_ttl" id="link-previous-d">WordPress簡単インストールの削除手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.「WordPress簡単インストール」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_start_wpblog_31.png" alt="簡単インストールにフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.対象のWordPressを確認し「削除」をクリック</h6>
                                            <div class="box_body">
                                                <p>インストール済みWordPress一覧から、対象のWordPressを確認し「削除」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_9.png" alt="「削除」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.確認し問題がなければ「アンインストールする」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、問題なければ「アンインストールする」をクリックしてください。</p>
                                                <p>WordPressが使用していたMySQLデータベースやMySQLユーザー、キャッシュ自動削除Cronを併せて削除したい場合、「関連データ削除」の各項目にチェックを入れた状態で「アンインストールする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_10.png?date=250414" alt="「アンインストールする」をクリック"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.削除完了</h6>
                                            <div class="box_body">
                                                <p>完了画面が表示されれば、削除は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_11.png" alt="削除完了画面"></p>
                                            </div>
                                        </section>


                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">WordPress 簡単インストール はじめに</a></li>
                                    <li><a href="#link-b">簡単インストール手順</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「WordPressを追加」をクリック</a></li>
                                            <li><a href="#link-b2">2.WordPressのインストール設定</a></li>
                                            <li><a href="#link-b3">3.インストール完了</a></li>
                                            <li><a href="#link-b4">4.インストール確認</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">[参考] MySQL(データベース)の設定</a>
                                        <ol>
                                            <li><a href="#link-c1">1.MySQLの追加</a></li>
                                            <li><a href="#link-c2">2.MySQLユーザーの追加</a></li>
                                            <li><a href="#link-c3">3.MySQLアクセス権の設定</a></li>
                                            <li><a href="#link-c4">4.MySQLの設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">WordPress簡単インストールの削除手順</a>
                                        <ol>
                                            <li><a href="#link-d01">1.「WordPress簡単インストール」をクリック</a></li>
                                            <li><a href="#link-d02">2.対象のWordPressを確認し「削除」をクリック</a></li>
                                            <li><a href="#link-d03">3.確認し問題がなければ「アンインストールする」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">WordPress 簡単インストール はじめに</h4>

                                        <div class="section_body">
                                            <p>
                                                お客様側での、パッケージのご用意は必要ありません。<br>
                                                なお、インストール後の設定等に関するサポートは行っていません。
                                            </p>
                                            <table class="table table--responsive">
                                                <caption>WordPress 簡単インストール 設定例</caption>
                                                <tbody>
                                                <tr><th class="w20perL w30per-s">サーバーID</th><td>xsample</td></tr>
                                                <tr><th>ドメイン名</th><td>example.com</td></tr>
                                                <tr>
                                                    <th>インストールディレクトリ</th>
                                                    <td><p class="mb5">/home/xsample/example.com/public_html/wp</p>
                                                        <div class="border border_gray">
                                                            [http://example.com]にてWordPressにアクセスを希望する場合は[/home/xsample/example.com/public_html/]をインストールディレクトリに指定する必要があります。
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr><th>インストールURL</th><td>http://example.com/wp</td></tr>
                                                </tbody>
                                            </table>

                                            <table class="table table--responsive">
                                                <caption>WordPress 簡単インストール 動作環境</caption>
                                                <tbody>
                                                <tr>
                                                    <th class="w20perL w30per-s">PHPバージョン</th>
                                                    <td>
                                                        PHP 7.4.x以降を推奨 (PHP 5.6.x以降で動作可能)
                                                        <p class="note mb0">※PHP動作バージョンの変更は、<br>マニュアル「<a href="man_program_php_ver.php">PHPのバージョン切り替え</a>」をご参照ください</p>
                                                    </td>
                                                </tr>
                                                <tr><th>データベース</th><td>MySQL5.7 / MySQL5.5 / MariaDB 10.5<p class="note mb0">※文字コードを UTF-8(utf8mb4) に設定してください。</p></td></tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>
                                    <section id="i1" class="section">
                                        <h4 class="section_ttl" id="link-b">簡単インストール手順</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>インストール作業を始める前に　(データベースの作成について)</h5>
                                                <div class="msg_body">
                                                    <p>本マニュアルでは、プログラムのインストールと同時に、使用するデータベースを自動生成する、より簡単な方法をご案内しています。<br>
                                                        データベースを手動で用意する場合には、簡単インストールを行う前に、「<a href="#link-c">MySQL(データベース)の設定</a>」の項目をご参考の上、予めデータベースを作成しておいてください。</p>
                                                </div>
                                            </aside>

                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="簡単インストールにフォーカスしたスクリーンショット"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b1">1.「WordPressを追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「WordPressを追加」をクリックしてください</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_1.png?date=2410" alt="「WordPressを追加」ボタンのスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b2">2.WordPressのインストール設定</h5>
                                                    <div class="box_body">
                                                        <p>「新規インストール」をクリックし、各項目を入力後に「インストールする」を押してください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_2.png?date=250704" alt="WordPress設定画面のスクリーンショット"></p>

                                                        <table class="table table--responsive">
                                                            <caption>WordPressのインストール設定</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20perL w30per-s">サイトURL</th>
                                                                <td><p class="mb5">お客様のドメイン名/wp</p>
                                                                    <div class="border border_gray">
                                                                        [http://お客様のドメイン名]にて、お客様のWordPressにアクセスを希望する場合は[wp]の部分を空欄としてください。
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ブログ名</th>
                                                                <td>お客様のブログのタイトル</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ユーザー名</th>
                                                                <td>WordPress管理画面へのログインユーザー名</td>
                                                            </tr>
                                                            <tr>
                                                                <th>パスワード</th>
                                                                <td>WordPress管理画面へのログインパスワード</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メールアドレス</th>
                                                                <td>お客様のメールアドレス</td>
                                                            </tr>
                                                            <tr>
                                                                <th>データベース</th>
                                                                <td>
                                                                    <p>利用するデータベースを指定します。<br>
                                                                        特に利用予定のデータベースが無く、今回新たに作成する場合は、「<em class="font-bold">自動でデータベースを生成する</em>」を選択してください。</p>
                                                                    <aside class="msg msg_notice mb0">
                                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>すでに作成済みのデータベースを利用する場合</h6>
                                                                        <div class="msg_body">
                                                                            <p>すでに作成済みのデータベースを利用する場合は、「作成済みのデータベースを利用する」を選択してください。<br>
                                                                                この場合は、下記の項目をご入力ください。</p>
                                                                            <dl class="dl">
                                                                                <dt><i class="ico ico_square-fill"></i>データベース名</dt>
                                                                                <dd>
                                                                                    <p>利用するデータベースを指定してください。<br>
                                                                                        例)xsample_wp</p>
                                                                                </dd>
                                                                                <dt><i class="ico ico_square-fill"></i>データベースユーザー名</dt>
                                                                                <dd>
                                                                                    <p class="mb0">データベースユーザーを指定してください。<br>
                                                                                        例)xsample_user</p>
                                                                                </dd>
                                                                                <dt><i class="ico ico_square-fill"></i>データベース用パスワード</dt>

                                                                                <dd>上記で指定したデータベースユーザー名のパスワードを入力してください。</dd>
                                                                            </dl>

                                                                            データベースの作成については「<a href="#link-c">MySQL(データベース)の設定</a>」の項目をご参照ください。
                                                                        </div>
                                                                    </aside>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>テーマ</th>
                                                                <td>WordPressインストールと同時に選択したWordPressテーマがインストールされます。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>テーマオプション</th>
                                                                <td>
                                                                    <p>選択したWordPressテーマに子テーマの提供がある場合、子テーマを同時にインストールするか選択できます。</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>子テーマの提供があるテーマ</dt>
                                                                        <dd>
                                                                            <ul class="ul">
                                                                                <li>Cocoon</li>
                                                                                <li>Lightning</li>
                                                                                <li>XWRITE</li>
                                                                                <li>SWELL</li>
                                                                            </ul>
                                                                        </dd>
                                                                        <dt><i class="ico ico_square-fill"></i>プラグインの提供があるテーマ</dt>
                                                                        <dd>
                                                                            <ul class="ul">
                                                                                <li>Snow Monkey</li>
                                                                            </ul>
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>プラグイン</th>
                                                                <td>WordPressインストールと同時に選択したWordPressプラグインがインストールされます。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>サブドメインにインストールを行う場合</dt>
                                                            <dd>
                                                                <ol>
                                                                    <li><a href="man_domain_subdomain_setting.php">サブドメイン設定</a>より、サブドメインを設定してください。</li>
                                                                    <li>「サイトURL」をクリックし、プルダウンよりサブドメインを選択してください。</li>
                                                                </ol>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b3">3.インストール完了</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            画面が切り替わったあとに下にスクロールするとリンクが表示されます。<br>
                                                            これでインストール完了になります。<br>
                                                            「ログイン」ボタンをクリックしてログイン画面へ移動します。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_3.png?date=2410" alt="WordPressインストール完了画面のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b4">4.インストール確認</h5>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_4.png?date=2410" alt="WordPressダッシュボード、ブログタイトルをクリックしてサイトを表示"></p>
                                                        <p>ログイン後、ダッシュボード内のブログタイトル部分をクリックすることで、インストール時に設定したブログを確認することができます。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_5.png?date=2410" alt="ブログのスクリーンショット"></p>
                                                        <p>以上でWordPressの導入は終了です。お疲れ様でした。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section id="dbSetting" class="section">
                                        <h4 class="section_ttl" id="link-c">[参考] MySQL（データベース）の設定</h4>
                                        <div class="section_body">

                                            <p>簡単インストールをする前に、WordPressで利用するデータベースを新規作成します。</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c1">1.MySQLの追加</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            WordPressで利用するデータベースを追加します。<br>
                                                            「データベースを追加」をクリックし、ご利用になるデータベースを作成してください。<br>
                                                            本マニュアルではデータベース名を「xsample_wp」として作成します。<br>
                                                            (文字コードは「UTF-8(utf8mb4)」に設定してください。)
                                                        </p>
                                                        <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_6.png?date=2412" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c2">2.MySQLユーザーの追加</h5>
                                                    <div class="box_body">
                                                        <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザーを追加します。</p>
                                                        <p class="note">※追加済みのMySQLユーザーを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                        <p class="mb0">「ユーザーを追加」をクリックし、ご利用になるユーザー名とパスワードを設定し、「追加する」ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                        <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_3.png?date=2410" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c3">3.MySQLアクセス権の設定</h5>
                                                    <div class="box_body">
                                                        <p>「MySQLデータベース設定」から作成したデータベースにアクセス権を追加します。</p>
                                                        <p class="mb0">「ユーザー設定」をクリックし、「ユーザーを追加」をクリックします。</p>
                                                        <p>MySQLユーザーIDから追加したいMySQLユーザを選択し「追加する」ボタンをクリックしてください。本マニュアルでは「xsample_wp」に「xsample_user」を追加します。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_7.png?date=2410" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c4">4.MySQLの設定完了</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            以上でMySQLの設定は完了です。<br>
                                                            以降は、「<a href="#link-b">簡単インストール手順</a>」に沿って、インストールを行ってください。
                                                        </p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section class="section mt50">
                                        <h4 class="section_ttl" id="link-d">WordPress簡単インストールの削除手順</h4>
                                        <div class="section_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d01">1.「WordPress簡単インストール」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="簡単インストールにフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d02">2.対象のWordPressを確認し「削除」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>WordPressを削除したいサイト名の「削除」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_9.png" alt="「削除」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d03">3.確認し問題がなければ「アンインストールする」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>内容を確認し、問題なければ「アンインストールする」をクリックしてください。</p>
                                                        <p>WordPressが使用していたMySQLデータベースやMySQLユーザー、キャッシュ自動削除Cronを併せて削除したい場合、「関連データ削除」の各項目にチェックを入れた状態で「アンインストールする」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_10.png?date=250414" alt="「アンインストールする」をクリック"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

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
