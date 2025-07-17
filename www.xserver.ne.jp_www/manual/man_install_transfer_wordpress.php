<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress移転(移行)手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜すでにエックスサーバー以外で運用中のWordPressをエックスサーバーへ移転（移行）するための手順です。また、エックスサーバーではWordPressが自動で移行できる「WordPress簡単移行」機能も提供しています。">

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
            
                <h3 class="sub-ttl">WordPressの移転について</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">1.移転元でバックアップが必要なデータの準備</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">WordPressサイトファイルのバックアップ</a></li>
                                        <li><a href="#link-previous-a02">データベースのバックアップ</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-b">2.エックスサーバーへの移転作業</a>
                                    <ul>
                                        <li><a href="#link-previous-b01">1.ドメイン設定の追加（独自ドメインで運用する場合）</a></li>
                                        <li><a href="#link-previous-b02">2.データベースの作成</a></li>
                                        <li><a href="#link-previous-b03">3.wp-configファイルの書き換え</a></li>
                                        <li><a href="#link-previous-b04">4.データベースのインポート</a></li>
                                        <li><a href="#link-previous-b05">5.サイトデータのアップロード</a></li>
                                        <li><a href="#link-previous-b07">6.（必要に応じて）ネームサーバー変更前の動作確認</a></li>
                                        <li><a href="#link-previous-b06">7.ネームサーバーの変更、およびサイトの動作確認</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <aside class="msg">
                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>WordPressの移転をご検討のお客様へ</h6>
                                <div class="msg_body">
                                    <p>エックスサーバーではサーバーパネルからの簡単操作でWordPressが移行できる「WordPress簡単移行」機能も提供しています。</p>
                                    <p><a class="btn btn_white" href="man_install_transfer_wp.php">マニュアル「WordPress簡単移行」<i class="ico ico_book font-xl"></i></a></p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">1.移転元でバックアップが必要なデータの準備</h4>
                                <div class="section_body">

                                    <section class="box">
                                        <h5 id="link-previous-a01" class="box_ttl">WordPressサイトファイルのバックアップ</h5>
                                        <div class="box_body">
                                            <p>移転元サーバーから、対象のWordPressに必要なファイル一式のバックアップを取得してください。</p>
                                            <p>ファイル一式のバックアップを取得するには、一般的に「FFFTP」や「Filezilla」などの『FTPソフト』を用いる方法や、移転元サーバーで提供されている『ファイルマネージャ』を用いる方法があります。</p>
                                            <p>詳しい手順は、「WordPress用ファイル一式のバックアップを取りたい」旨を移転元サービスにお問い合わせください。</p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 id="link-previous-a02" class="box_ttl">データベースのバックアップ</h5>
                                        <div class="box_body">
                                            <p>移転元サーバーで、データベースのバックアップを取得してください。</p>
                                            <p>データベースのバックアップを取得するには、一般的に『phpMyAdmin』の「エクスポート」機能を用いる方法があります。<br>
                                            詳しい手順は、「データベースをエクスポートしたい」旨を移転元サービスにお問い合わせください。</p>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>【補足】phpMyAdminでデータベースをエクスポートする際のご注意</h6>
                                                <div class="msg_body">
                                                    <p>移転元のphpMyAdminでデータベースをエクスポートする際、以下3項目にチェックをされていない場合はエラーが発生する可能性があります。<br>
                                                        以下の3項目をチェックして作業を進めてください。</p>
                                                    <ul class="ul mb0">
                                                        <li>【データ】</li>
                                                        <li>完全な INSERT 文を作成する</li>
                                                        <li>長い INSERT 文を作成する</li>
                                                    </ul>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">2.エックスサーバーへの移転作業</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-b01" class="box_ttl">1.ドメイン設定の追加（独自ドメインで運用する場合）</h6>
                                            <div class="box_body">
                                                <p>エックスサーバーで独自ドメインを利用するために、ドメイン設定を追加する必要があります。
                                                <br>まず、サーバーパネルの「<a href="man_domain_setting.php">ドメイン設定</a>」より「ドメイン設定の追加」を行ってください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_1.png" alt="ドメイン設定の追加画面"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b02" class="box_ttl">2.データベースの作成</h6>
                                            <div class="box_body">
                                                <p>移転元より取得したデータベースをエックスサーバーへインポートするため、新たなデータベースを作成します。</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>サーバーパネルの「<a href="man_db_setting.php">MySQL設定</a>」 → 「MySQL一覧」より利用するMySQLデータベースを作成してください。 <br>
                                                        作成したMySQLデータベース名は後に必要な情報のため、メモなどに控えてください。</p>
                                                        <table class="table table_use-caption">
                                                            <caption>入力項目</caption>
                                                            <tbody>
                                                                <tr><th>MySQLデータベース名</th><td>(サーバーID_)任意の文字列<br>例)example_wp</td></tr>
                                                                <tr><th>文字コード</th><td>UTF-8(utf8mb4)</td></tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_2.png?date=2412" alt="MySQLデータベースを作成"></p>
                                                    </li>
                                                    <li>
                                                        <p>続いて、「<a href="man_db_setting.php">MySQL設定</a>」 → 「MySQL一覧」より作成したデータベースにアクセスするためのユーザーを作成してください。<br>
                                                        作成したMySQLユーザ名と指定したパスワードは後に必要な情報のため、メモなどに控えてください。</p>
                                                        <table class="table table_use-caption">
                                                            <caption>入力項目</caption>
                                                            <tbody>
                                                                <tr><th>MySQLユーザーID</th><td>(サーバーID_)任意の文字列<br>例)example_user</td></tr>
                                                                <tr><th>パスワード</th><td>任意のパスワード</td></tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_3.png" alt="MySQLデータベースを作成"></p>
                                                    </li>
                                                    <li>
                                                        <p>「<a href="man_db_setting.php">MySQL設定</a>」 → 「MySQL一覧」より作成したデータベースにアクセス権を追加します。<br>
                                                        アクセス権未所有ユーザーから（2）で追加したMySQLユーザを選択し、[追加]ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_4.png" alt="[追加]ボタンをクリック"></p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_5.png" alt="「アクセス権所有ユーザ」に表示されます"></p>
                                                    </li>
                                                    <li>
                                                        <p>「<a href="man_db_setting.php">MySQL設定</a>」 → 「MySQL一覧」の下部に表示されている「MySQL ホスト名」をメモなどに控えてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_6.png" alt="「MySQL5 ホスト名」をメモなどに控える"></p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b03" class="box_ttl">3.wp-configファイルの書き換え</h6>
                                            <div class="box_body">
                                                <p>移転元サーバーでバックアップした、WordPressのサイトデータ内にある【wp-config.php】ファイルに【2.データベースの作成】で作成したデータベースの情報を反映します。</p>
                                                <ul class="ul ml30">
                                                    <li>MySQLデータベース名</li>
                                                    <li>MySQLユーザID</li>
                                                    <li>パスワード</li>
                                                    <li>MySQLホスト名</li>
                                                </ul>
                                                <p>【wp-config.php】ファイルをテキストエディタ（Tera Pad等）で開き、編集例をご参照の上、該当する情報を書き換えてください。</p>
                                                <dl class="dl">
                                                    <dt>sv12301以降のサーバーをご利用の方</dt>
                                                    <dd>
                                                        <p>例を参照の上、青色太字の箇所を編集してください。<br>仮に「example」というサーバー(サーバーID)にて「<em class="font-bold base-color">example_wp</em>」というデータベースを作成し、「<em class="font-bold base-color">example_user</em>」というユーザーへ権限を与えた場合、下記のような状態になります。</p>
                                                        <div class="code">
                                                            <p>/** WordPress のためのデータベース名 */<br>
                                                            <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL データベースのユーザー名 */<br>
                                                            <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL データベースのパスワード */<br>
                                                            <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL のホスト名 */<br>
                                                            <code>define('DB_HOST', '<em class="font-bold base-color">localhost</em>');</code></p>
                                                        </div>
                                                    </dd>

                                                    <dt>sv12300以前のサーバー、sv1〜sv20.xtwo.ne.jpサーバーをご利用の方</dt>
                                                    <dd>
                                                        <p>例を参照の上、青色太字の箇所を編集してください。<br>仮に「example」というサーバー(サーバーID)にて「<em class="font-bold base-color">example_wp</em>」というデータベースを作成し、「<em class="font-bold base-color">example_user</em>」というユーザーへ権限を与えた場合、下記のような状態になります。</p>
                                                        <div class="code">
                                                            <p>/** WordPress のためのデータベース名 */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL データベースのユーザー名 */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL データベースのパスワード */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL のホスト名 */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">mysql***.xserver.jp</em>');</code></p>
                                                        </div>
                                                        <p>
                                                            「MySQL のホスト名」は、ご利用のサーバーごとに異なります。
                                                            サーバーパネル内「MySQL設定」に記載されている「ホスト名」を入力してください。
                                                        </p>
                                                        <p>
                                                            例）mysql***.xserver.jp
                                                        </p>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b04" class="box_ttl">4.データベースのインポート</h6>
                                            <div class="box_body">
                                                <p>移転元よりバックアップしたデータベースのインポートを行います。</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>サーバーパネルの「phpmyadmin(MySQL5.7)」または「phpMyAdmin(MariaDB10.5)」をクリックし、<a href="man_db_myadmin.php">phpmyadmin</a>へログインします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_6b.png" alt="「phpmyadmin(MySQL5.7)」または「phpMyAdmin(MariaDB10.5)」をクリック"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>ログインに必要な情報</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th>ユーザー名</th>
                                                                    <td>MySQLユーザ名</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>パスワード</th>
                                                                    <td>MySQLユーザのパスワード</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>ログイン後画面左から【2.データベースの作成】の手順で作成したMySQLデータベース名を選択してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_7.png" alt="phpmyadmin画面：データベース名を選択"></p>
                                                    </li>
                                                    <li>
                                                        <p>続けて、画面右側のタブより「インポート」へ進んでください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_8.png" alt="phpmyadmin画面：インポートをクリック"></p>
                                                    </li>
                                                    <li>
                                                        <p>インポート画面が表示されますので、「インポートするファイル」内より「アップロードファイル」の「ファイルを選択」をクリックし、 移転元のサーバーよりエクスポートしたsqlファイルを指定して、「インポート」ボタンをクリックすればデータベースのインポートが行われます。</p>
                                                    </li>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_9.png" alt="phpmyadmin画面：アップロードファイルの位置を参照しインポートする"></p>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b05" class="box_ttl">5.サイトデータのアップロード</h6>
                                            <div class="box_body">
                                                <p>移転元サーバーでバックアップをしたWordPressのサイトデータを、 FTPソフトなどを用いて、エックスサーバーのご希望のドメインフォルダ内にある[public_html]フォルダの中へアップロードをします。</p>
                                                <p class="font-bold">下記を参照の上、任意の階層にアップロードしてください。</p>
                                                <div class="border border_gray">
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://example.com/ でサイトを表示する場合のアップロード先</p>
                                                    <p>FTP上では、/example.com/public_html/ となります。</p>
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://test.example.com/ でサイトを表示する場合のアップロード先</p>
                                                    <p class="mb0">FTP上では、/example.com/public_html/test/ となります。</p>
                                                    <p class="note mb0">※http://example.com/test/ も同じフォルダになります。</p>
                                                </div>

                                                <p class="mb10 mt20">なお、サーバーパネルでドメイン設定・サブドメイン設定を追加すると、ドメイン直下・サブドメイン直下に以下のファイルが作成されます。</p>

                                                <ul class="ul">
                                                    <li>index.html</li>
                                                    <li>default_page.png</li>
                                                </ul>
                                                <p class="mb0">以上のファイルが存在する場合は、ファイル名を変更するか、削除してください。</p>

                                                <p><a href="man_ftp_setting.php">FTPソフト設定</a>およびアップロード方法についてはマニュアルを参考にしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b07" class="box_ttl">6.（必要に応じて）ネームサーバー変更前の動作確認</h6>
                                            <div class="box_body">
                                                <p>
                                                    お使いのパソコンの「hosts」ファイルを編集することで、ネームサーバーの切り替え前に動作確認ができるようになります。<br>
                                                    詳細は、マニュアル「<a href="man_domain_checkproxy.php#link-previous-b">hostsファイルを編集して確認する方法</a>」をご参照ください。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b06" class="box_ttl">7.ネームサーバーの変更、およびサイトの動作確認</h6>
                                            <div class="box_body">
                                                <ol class="ol mb0">
                                                    <li>
                                                        <p class="font-bold">ネームサーバーの変更</p>
                                                        <p>弊社で管理しているドメインの<a href="man_domain_namesever_setting.php#link-previous-b">ネームサーバーの変更</a>は、XServerアカウント内、ネームサーバーの変更を希望するドメインの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）の「ネームサーバー設定」より変更可能です。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_10.png" alt="ネームサーバー設定をクリックしているスクリーンショット"></p>
                                                        <p>下記エックスサーバーのネームサーバーへ変更してください。</p>
                                                        <table class="table">
                                                            <caption>ネームサーバー</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th>ネームサーバー1</th>
                                                                    <td>ns1.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ネームサーバー2</th>
                                                                    <td>ns2.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ネームサーバー3</th>
                                                                    <td>ns3.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ネームサーバー4</th>
                                                                    <td>ns4.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ネームサーバー5</th>
                                                                    <td>ns5.xserver.jp</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m">
                                                                <i class="ico ico_circle-arrow-right"></i>
                                                                【X2サービス統合メンテナンス(2019年8月28日実施)】の対象アカウントについて
                                                            </h6>
                                                            <div class="msg_body pl30">
                                                                <p>
                                                                   上記メンテナンスの対象アカウントについては、<br>
                                                                   ネームサーバーを以下に指定してください。
                                                                </p>
                                                                <dl class="dl">
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>ネームサーバー1: ns1.xtwo.ne.jp</li>
                                                                            <li>ネームサーバー2: ns2.xtwo.ne.jp</li>
                                                                            <li>ネームサーバー3: ns3.xtwo.ne.jp</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </aside>
                                                        <ul class="note-list mb20">
                                                            <li>※他社管理ドメインの場合、変更方法に関してはドメイン管理事業者へ確認してください。</li>
                                                            <li>※ネームサーバー変更後、一定時間（最大24時間ほど）を経て、徐々にサーバーが移転されます。</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">サイトの動作確認</p>
                                                        <p class="mb0">ファイルアップロード後、WordPressサイトへとアクセスし、問題なく表示・動作しているようであれば、移転作業は完了です。</p>
                                                    </li>
                                                </ol>
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
                                    <li>
                                        <a href="#link-a">WordPressの移転について</a>
                                    </li>
                                    <li>
                                        <a href="#link-b">1. 移転元でバックアップが必要なデータの準備</a>
                                        <ol>
                                            <li><a href="#link-b1">WordPressサイトファイルのバックアップ</a></li>
                                            <li><a href="#link-b2">データベースのバックアップ</a></li>
                                        </ol>
                                    </li>
                                    <li>
                                        <a href="#link-c">2. エックスサーバーへの移転作業</a>
                                        <ol>
                                            <li><a href="#link-c1">1. ドメイン設定の追加（独自ドメインで運用する場合）</a></li>
                                            <li><a href="#link-c2">2. データベースの作成</a></li>
                                            <li><a href="#link-c3">3. wp-configファイルの書き換え</a></li>
                                            <li><a href="#link-c4">4. データベースのインポート</a></li>
                                            <li><a href="#link-c5">5. サイトデータのアップロード</a></li>
                                            <li><a href="#link-c6">6. ネームサーバーの変更、およびサイトの動作確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <aside class="msg">
                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>WordPressの移転をご検討のお客様へ</h6>
                                <div class="msg_body">
                                    <p>エックスサーバーではサーバーパネルからの簡単操作でWordPressが移行できる「WordPress簡単移行」機能も提供しています。</p>
                                    <p><a class="btn btn_white" href="man_install_transfer_wp.php">マニュアル「WordPress簡単移行」<i class="ico ico_book font-xl"></i></a></p>
                                </div>
                            </aside>
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-a" class="section_ttl">WordPressの移転について</h3>
                                    <p>既に運用中のWordPressを、エックスサーバーへ移転します。そのために移転元で必要なデータをご準備の上、移転作業を進めていく必要があります。詳細は下記をご参照ください。</p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-b" class="section_ttl">1.移転元でバックアップが必要なデータの準備</h3>
                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-b1">WordPressサイトファイルのバックアップ</h4>
                                            <div class="box_body">
                                                <p>移転元サーバーから、対象のWordPressに必要なファイル一式のバックアップを取得してください。</p>
                                                <p>ファイル一式のバックアップを取得するには、一般的に「FFFTP」や「Filezilla」などの『FTPソフト』を用いる方法や、移転元サーバーで提供されている『ファイルマネージャ』を用いる方法があります。</p>
                                                <p>詳しい手順は、「WordPress用ファイル一式のバックアップを取りたい」旨を移転元サービスにお問い合わせください。</p>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-b2" >データベースのバックアップ</h4>
                                            <div class="box_body">
                                                <p>移転元サーバーで、データベースのバックアップを取得してください。</p>
                                                <p>データベースのバックアップを取得するには、一般的に『phpMyAdmin』の「エクスポート」機能を用いる方法があります。<br>
                                                    詳しい手順は、「データベースをエクスポートしたい」旨を移転元サービスにお問い合わせください。</p>
                                                <aside class="msg msg_caution mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>【補足】phpMyAdminでデータベースをエクスポートする際のご注意</h6>
                                                    <div class="msg_body">
                                                        <p>移転元のphpMyAdminでデータベースをエクスポートする際、以下3項目にチェックをされていない場合はエラーが発生する可能性があります。<br>
                                                            以下の3項目をチェックして作業を進めてください。</p>
                                                        <ul class="ul mb0">
                                                            <li>【データ】</li>
                                                            <li>完全な INSERT 文を作成する</li>
                                                            <li>長い INSERT 文を作成する</li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-c" class="section_ttl">2.エックスサーバーへの移転作業</h3>
                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c1">1. ドメイン設定の追加（独自ドメインで運用する場合）</h4>
                                            <div class="box_body">
                                                <p>
                                                    エックスサーバーで独自ドメインを利用するために、ドメイン設定を追加する必要があります。<br>
                                                    まず、サーバーパネルの「<a href="man_domain_setting.php">ドメイン設定</a>」より「ドメインを追加」を行ってください。
                                                </p>
                                                <p><img class="img" src="../img/manual/man_install_transfer_wordpress_1.png?date=2410" alt="ドメイン設定の追加画面"></p>
                                            </div>


                                        </section>
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c2">2. データベースの作成</h4>
                                            <div class="box_body">
                                                <p>移転元より取得したデータベースをエックスサーバーへインポートするため、新たなデータベースを作成します。</p>

                                                <ol class="ol">
                                                    <li><p>サーバーパネルの「<a href="man_db_setting.php">MySQL設定</a>」→「MySQLデータベース設定」より利用するMySQLデータベースを作成してください。<br>
                                                            作成したMySQLデータベース名は後に必要な情報のため、メモなどに控えてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_2.png?date=2412" alt="MySQLデータベースを作成"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>入力項目</caption>
                                                            <tbody>
                                                            <tr><th>MySQLデータベース名</th><td>(サーバーID_)任意の文字列<br>例)example_wp</td></tr>
                                                            <tr><th>文字コード</th><td>UTF-8(utf8mb4)</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li><p>続いて、「<a href="man_db_setting.php">MySQL設定</a>」→「MySQLユーザー設定」の「ユーザーを追加」より作成したデータベースにアクセスするためのユーザを作成してください。<br>
                                                            作成したMySQLユーザ名と指定したパスワードは後に必要な情報のため、メモなどに控えてください</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_3.png?date=2410" alt="MySQLユーザーを追加"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>入力項目</caption>
                                                            <tbody>
                                                            <tr><th>MySQLユーザーID</th><td>(サーバーID_)任意の文字列<br>例)example_user</td></tr>
                                                            <tr><th>パスワード</th><td>任意のパスワード</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>「<a href="man_db_setting.php">MySQL設定</a>」→「MySQLデータベース設定」より作成したデータベースにアクセス権を追加します。<br>
                                                            「ユーザーを追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_4.png?date=2410" alt="[ユーザーを追加]ボタンをクリック"></p>
                                                        <p>「MySQLユーザー設定」に追加したMySQLユーザーが表示されます。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_5.png?date=2410" alt="追加した「MySQLユーザー」が表示されます"></p>
                                                    </li>
                                                    <li>
                                                        <p>「<a href="man_db_setting.php">MySQL設定</a>」→「MySQL情報」の下部に表示されている「ホスト名」をメモなどに控えてください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_6.png?date=2410" alt="「ホスト名」をメモなどに控える"></p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c3">3. wp-configファイルの書き換え</h4>
                                            <div class="box_body">
                                                <p>移転元サーバーでバックアップした、WordPressのサイトデータ内にある【wp-config.php】ファイルに【2. データベースの作成】で作成したデータベースの情報を反映します。</p>
                                                <ul class="ul ml30">
                                                    <li>MySQLデータベース名</li>
                                                    <li>MySQLユーザID</li>
                                                    <li>パスワード</li>
                                                    <li>MySQLホスト名</li>
                                                </ul>
                                                <p>【wp-config.php】ファイルをテキストエディタ（Tera Pad等）で開き、編集例をご参照の上、該当する情報を書き換えてください。</p>
                                                <dl class="dl">
                                                    <dt>sv12301以降のサーバーをご利用の方</dt>
                                                    <dd>
                                                        <p>例を参照の上、青色太字の箇所を編集してください。<br>仮に「example」というサーバー(サーバーID)にて「<em class="font-bold base-color">example_wp</em>」というデータベースを作成し、「<em class="font-bold base-color">example_user</em>」というユーザーへ権限を与えた場合、下記のような状態になります。</p>
                                                        <div class="code">
                                                            <p>/** WordPress のためのデータベース名 */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL データベースのユーザー名 */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL データベースのパスワード */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL のホスト名 */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">localhost</em>');</code></p>
                                                        </div>
                                                    </dd>

                                                    <dt>sv12300以前のサーバー、sv1〜sv20.xtwo.ne.jpサーバーをご利用の方</dt>
                                                    <dd>
                                                        <p>例を参照の上、青色太字の箇所を編集してください。<br>仮に「example」というサーバー(サーバーID)にて「<em class="font-bold base-color">example_wp</em>」というデータベースを作成し、「<em class="font-bold base-color">example_user</em>」というユーザーへ権限を与えた場合、下記のような状態になります。</p>
                                                        <div class="code">
                                                            <p>/** WordPress のためのデータベース名 */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL データベースのユーザー名 */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL データベースのパスワード */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL のホスト名 */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">mysql***.xserver.jp</em>');</code></p>
                                                        </div>
                                                        <p>
                                                            「MySQL のホスト名」は、ご利用のサーバーごとに異なります。
                                                            サーバーパネル内「MySQL設定」に記載されている「ホスト名」を入力してください。
                                                        </p>
                                                        <p>
                                                            例）mysql***.xserver.jp
                                                        </p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c4">4. データベースのインポート</h4>
                                            <div class="box_body">
                                                <p>移転元よりバックアップしたデータベースのインポートを行います。</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>サーバーパネルの「phpmyadmin(MySQL5.7)」または「phpMyAdmin(MariaDB10.5)」をクリックし、<a href="man_db_myadmin.php">phpmyadmin</a>へログインします。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_6b.png?date=20240326" alt="「phpmyadmin(MariaDB10.5)」をクリック"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>ログインに必要な情報</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th>ユーザー名</th>
                                                                <td>MySQLユーザ名</td>
                                                            </tr>
                                                            <tr>
                                                                <th>パスワード</th>
                                                                <td>MySQLユーザのパスワード</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>ログイン後画面左から【2. データベースの作成】の手順で作成したMySQLデータベース名を選択してください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_7.png?date=2410" alt="phpmyadmin画面：データベース名を選択"></p>
                                                    </li>
                                                    <li>
                                                        <p>続けて、画面右側のタブより「インポート」へ進んでください。</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_8.png?date=2410" alt="phpmyadmin画面：インポートをクリック"></p>
                                                    </li>
                                                    <li>
                                                        <p>インポート画面が表示されますので、「インポートするファイル」内より「アップロードファイル」の「ファイルを選択」をクリックし、 移転元のサーバーよりエクスポートしたsqlファイルを指定して、「インポート」ボタンをクリックすればデータベースのインポートが行われます。</p>
                                                    </li>
                                                    <p><img class="img" src="../img/manual/man_install_transfer_wordpress_9.png?date=2410" alt="phpmyadmin画面：アップロードファイルの位置を参照しインポートする"></p>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c5">5. サイトデータのアップロード</h4>
                                            <div class="box_body">
                                                <p>移転元サーバーでバックアップをしたWordPressのサイトデータを、 FTPソフトなどを用いて、エックスサーバーのご希望のドメインフォルダ内にある[public_html]フォルダの中へアップロードをします。</p>
                                                <p class="font-bold">下記を参照の上、任意の階層にアップロードしてください。</p>
                                                <div class="border border_gray">
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://example.com/ でサイトを表示する場合のアップロード先</p>
                                                    <p>FTP上では、/example.com/public_html/ となります。</p>
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://test.example.com/ でサイトを表示する場合のアップロード先</p>
                                                    <p class="mb0">FTP上では、/example.com/public_html/test/ となります。</p>
                                                    <p class="note mb0">※http://example.com/test/ も同じフォルダになります。</p>
                                                </div>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>サーバー上のファイルをご確認ください</h6>
                                                    <div class="msg_body">
                                                        <p class="mb5">サーバーパネルでドメイン設定を追加した直後は、アップロード先に以下のファイルが存在します。</p>

                                                        <ul class="ul">
                                                            <li>index.html</li>
                                                            <li>default_page.png</li>
                                                        </ul>

                                                        <p class="mb0">以上のファイルが存在する場合は、ファイル名を変更するか、削除してください。</p>
                                                    </div>
                                                </aside>

                                                <p><a href="man_ftp_setting.php">FTPソフト設定</a>およびアップロード方法についてはマニュアルを参考にしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c6">6. ネームサーバーの変更、およびサイトの動作確認</h4>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                        <p class="font-bold">ネームサーバーの変更</p>
                                                        <p>弊社で管理しているドメインの<a href="man_domain_namesever_setting.php#link-b">ネームサーバーの変更</a>は、XServerアカウント内、ネームサーバーの変更を希望するドメインの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）の「ネームサーバー設定」より変更可能です。</p>
                                                        <table class="table">
                                                            <caption>ネームサーバー</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th>ネームサーバー1</th>
                                                                <td>ns1.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ネームサーバー2</th>
                                                                <td>ns2.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ネームサーバー3</th>
                                                                <td>ns3.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ネームサーバー4</th>
                                                                <td>ns4.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ネームサーバー5</th>
                                                                <td>ns5.xserver.jp</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m">
                                                                <i class="ico ico_circle-arrow-right"></i>
                                                                【X2サービス統合メンテナンス(2019年8月28日実施)】の対象アカウントについて
                                                            </h6>
                                                            <div class="msg_body pl30">
                                                                <p>
                                                                    上記メンテナンスの対象アカウントについては、<br>
                                                                    ネームサーバーを以下に指定してください。
                                                                </p>
                                                                <dl class="dl">
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>ネームサーバー1: ns1.xtwo.ne.jp</li>
                                                                            <li>ネームサーバー2: ns2.xtwo.ne.jp</li>
                                                                            <li>ネームサーバー3: ns3.xtwo.ne.jp</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </aside>
                                                        <ul class="note-list mb20">
                                                            <li>※他社管理ドメインの場合、変更方法に関してはドメイン管理事業者へ確認してください。</li>
                                                            <li>※ネームサーバー変更後、一定時間（最大24時間ほど）を経て、徐々にサーバーが移転されます。</li>
                                                        </ul>

                                                    </li>
                                                    <li>
                                                        <p class="font-bold">サイトの動作確認</p>
                                                        <p class="mb0">ファイルアップロード後、WordPressサイトへとアクセスし、問題なく表示・動作しているようであれば、移転作業は完了です。</p>
                                                    </li>
                                                </ol>
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