<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Magento2 手動インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「Magento2」をお客さまご自身でインストールするための手順を記載しています。">

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
            
                <h3 class="sub-ttl">Magento2</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
 
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">Magento2 インストール はじめに</a></li>
                                <li><a href="#link-previous-b">Magento2のダウンロード</a></li>
                                <li><a href="#link-previous-c">MySQL（データベース）の設定</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.MySQLの追加</a></li>
                                        <li><a href="#link-previous-c02">2.MySQLユーザの追加</a></li>
                                        <li><a href="#link-previous-c03">3.MySQLアクセス権の設定</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">ファイルアップロード</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.アップロード先の確認</a></li>
                                        <li><a href="#link-previous-d02">2.ファイルのアップロード</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">ウィザードからの設定作業</a>
                                    <ol>
                                        <li><a href="#link-previous-e01">1.アップロード先のURLにアクセス</a></li>
                                        <li><a href="#link-previous-e02">2.環境の設定を行う</a></li>
                                        <li><a href="#link-previous-e03">3.MySQLデータベースに接続するための情報を入力</a></li>
                                        <li><a href="#link-previous-e04">4.サイトのURLと管理画面のURLを入力</a></li>
                                        <li><a href="#link-previous-e05">5.タイムゾーン・通過・言語の設定を行う</a></li>
                                        <li><a href="#link-previous-e06">6.管理者アカウントの入力</a></li>
                                        <li><a href="#link-previous-e07">7.インストール</a></li>
                                        <li><a href="#link-previous-e08">8.インストール完了</a></li>
                                        <li><a href="#link-previous-e09">9.管理画面へログイン</a></li>
                                        <li><a href="#link-previous-e010">10.完了</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Magento2 インストール はじめに</h4>

                                <div class="section_body">
                                    <p>お客様側でMagento2のファイルを用意していただく必要があります。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>Magento2インストール設定例</caption>
                                        <tbody>
                                            <tr>
                                                <th>バージョン</th>
                                                <td>2.1.3</td>
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
                                                <td>/home/xsample/example.com/pubic_html/mg2 </td>
                                            </tr>
                                            <tr>
                                                <th>インストールURL</th>
                                                <td>http://example.com/mg2/</td>
                                            </tr>
                                            <tr>
                                                <th>データベース</th>
                                                <td>MySQL5.7</td>
                                            </tr>
                                            <tr>
                                                <th>FTPソフト</th>
                                                <td>FileZilla </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <aside class="msg msg_caution">
                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>エックスサーバーでMagento2を利用する際の注意事項</h6>
                                    <div class="msg_body">
                                        <p class="mb5">
                                            Magento2は、PHP 5.6.x / MySQL 5.7で動作を確認しています。 ご利用になる場合は、「PHPバージョン切替」にて『PHP 5.6.x』に切り替え、php.iniに以下の設定を加えてください。<br>
                                            設定方法は「<a href="https://www.xserver.ne.jp/manual/man_program_php_ver.php">PHPのバージョンについて</a>」をご参照ください。
                                        </p>
                                        <pre class="code">always_populate_raw_post_data = -1</pre>

                                        <p>
                                            また、MySQL 5.7の提供は、ご利用のサーバーにより異なります。
                                        </p>


                                    </div>
                                </aside>

                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">Magento2のダウンロード</h4>
                                <div class="section_body">
                                    <p><img class="img" src="../img/manual/previous/man_install_mg2_0.png" alt="公式サイトよりMagento2をダウンロード">
                                    </p>
                                    <p class="link"><a href="https://magento.com/tech-resources/download" target="_blank" rel="nofollow">Magento2 公式サイト</a><i class="ico ico_new-window"></i>
                                    </p>
                                    <p>公式サイトのダウンロードページからファイルのダウンロードをしてください。<br> ※ダウンロードするには、公式サイトのアカウント登録が必要です。
                                        <br> ダウンロード後、圧縮ファイルを解凍します。
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL（データベース）の設定</h4>
                                <div class="section_body">
                                    <p>Magento2で利用するデータベースを新規作成します。</p>

                                    <p><img class="img" src="../img/manual/previous/man_install_mg2_mysql_1.png" alt="MySQLの設定にフォーカスしたスクリーンショット">
                                    </p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQLの追加</h6>
                                            <div class="box_body">
                                                <p>「MySQL追加」をクリックします。</p>
                                                <p>「MySQLデータベース名」を入力し、「確認画面へ進む」をクリックします。確認画面が表示されたら、内容を確認したうえで「追加する」をクリックします。本マニュアルではデータベース名を 「xsample_mg2」 として作成します。</p>
                                                <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_magento_2.png" alt="MySQLの追加にフォーカスしたスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQLユーザの追加</h6>
                                            <div class="box_body">
                                                <p>作成したデータベースにアクセスするためのMySQLユーザを追加します。</p>
                                                <p class="note">※追加済みのMySQLユーザを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                <p>「MySQLユーザ追加」をクリックし、ご利用になるユーザー名とパスワードを設定します。入力後、「確認画面へ進む」ボタンをクリックし、表示された画面で「追加する」ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_3.png" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQLアクセス権の設定</h6>
                                            <div class="box_body">
                                                <p>「MySQL一覧」から作成したデータベースにアクセス権を追加します。アクセス権未所有ユーザーから追加したいMySQLユーザを選択し追加ボタンをクリックしてください。本マニュアルでは「xsample_mg2」に「xsample_user」を追加します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_magento_4.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット">
                                                </p>
                                                <p>以上でMySQLの設定は完了です。</p>
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

                                    <p>Magento公式サイトよりダウンロードしたファイルを解凍してください。<br>
                                        解凍後、FTPソフトを使いFTPサーバーに接続してください
                                    （本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します）。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.アップロード先の確認</h6>
                                            <div class="box_body">
                                                <p>FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                FTPサーバーの「お客様のドメイン名/public_html」の中に「mg2」フォルダを作成しファイルのアップロードを行います。(本マニュアルでは、説明のため例として「mg2」としていますが、お客様の任意のものでかまいません。)</p>
                                                <p>FileZillaでは、右側のサーバー領域を右クリックし「ディレクトリを作成して移動」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_5.png" alt="MySQL設定にフォーカスしたスクリーンショット"></p>
                                                <p>続いて、作成するディレクトリ名を入力します。</p>
                                                <p class="note">※本マニュアルでは、「example.com/public_html/mg2/」を作成します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_upload_0.png" alt="FileZillaの画面:ディレクトリ作成のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.ファイルのアップロード</h6>
                                            <div class="box_body">
                                                <p>左側のローカル上からMagento2のフォルダ内の全ファイルを「mg2」フォルダへ全てアップロードします。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>アップロード</dt>
                                                    <dd><img class="img" src="../img/manual/previous/man_install_mg2_upload_1.png" alt="FileZillaの画面:転送画面のスクリーンショット">
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                    <dd><img class="img" src="../img/manual/previous/man_install_mg2_upload_2.png" alt="FileZillaの画面:ファイル転送後のスクリーンショット">
                                                    </dd>
                                                </dl>
                                                <p>右側のサーバー領域にファイルが表示されていれば、アップロード完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>


                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">ウィザードからの設定作業</h4>
                                <div class="section_body">

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>インストールに失敗する場合</h6>
                                        <div class="msg_body">
                                            <p>使用するMySQLユーザーによるデータベースへのアクセス権限が適切に反映されていない可能性があります。</p>
                                            <p>この場合、サーバーパネル内「MySQL設定」において、利用するデータベースにおけるMySQLユーザーのアクセス権を一度削除し、改めて追加してください。</p>
                                            <p>アクセス権を追加する時点で、適切に反映する必要があります。</p>
                                            ・マニュアル「<a href="man_db_setting.php">MySQLの設定</a>」
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.アップロード先のURLにアクセス</h6>
                                            <div class="box_body">
                                                <p>Magento2のアップロード完了後、下記URLにアクセスしてください。</p>
                                                <div class="border border_gray">
                                                    <p>http://お客様のドメイン名/mg2/<br> （本マニュアルでは：http://example.com/mg2/）
                                                    </p>
                                                </div>
                                                <p>上記URLでアクセスすると、こちらの画面が表示されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_1.png" alt="アップロード先のURLにアクセス">
                                                </p>
                                                <p>「Agree and Steup Magento」をクリックします。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.環境の設定を行う</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_2.png" alt="インストール環境の確認">
                                                </p>
                                                <p>「Start Readiness Check」をクリックし、インストール環境に問題がないかどうかを確認します。エラーが出た場合、エラー内容に沿って問題を解消していきます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_3.png" alt="エラー内容に沿って問題を解決">
                                                </p>
                                                <p>エラーが表示されず、すべてにチェックマークが入った場合、インストール作業を進めることが可能です。「Next」をクリックし、次に進みます。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.MySQLデータベースに接続するための情報を入力</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_4.png" alt="MySQLデータベースに接続するための情報入力">
                                                </p>
                                                <p>この画面ではMySQLデータベースに接続するための情報を入力します。</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">Database Server Host</th>
                                                            <td>サーバーパネル内「MySQL一覧」に記載の『MySQL5.7 ホスト名』(mysql○○.xserver.jp)を入力します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Server Username</th>
                                                            <td>例）xsample_user</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Server Password</th>
                                                            <td>MySQLデータベースのパスワードを入力します。 </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Name</th>
                                                            <td>例）xsample_mg2 </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Table prefix</th>
                                                            <td>インストールする際に自動生成されるテーブル名の接頭辞を指定します。 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.サイトのURLと管理画面のURLを入力</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_5.png" alt="サイトと管理画面のURLを入力">
                                                </p>
                                                <p>ここでは、サイトのURLと管理画面のURLを入力します。</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">Your Store Address</th>
                                                            <td>http://お客様のドメイン名/mg2/<br>
                                                            （本マニュアルでは：http://example.com/mg2/）</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Magento Admin Address</th>
                                                            <td>管理画面のURL (※任意で設定可能)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.タイムゾーン・通過・言語の設定を行う</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_6.png" alt="各種設定">
                                                </p>
                                                <p>Magento2では、現時点で日本語の設定が存在しないため、そのまま「Next」をクリックして次に進みます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.管理者アカウントの入力</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_7.png" alt="管理者アカウントの入力">
                                                </p>
                                                <p>ここでは、管理者アカウントを入力します。</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">New Username</th>
                                                            <td>ログイン用のユーザー名</td>
                                                        </tr>
                                                        <tr>
                                                            <th>New Email</th>
                                                            <td>更新情報などを受け取るため正しいメールアドレスを指定してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>New Password</th>
                                                            <td>ログイン用のパスワード</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Confirm Password</th>
                                                            <td>パスワード確認用</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e07">7.インストール</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_8.png" alt="設定後インストール">
                                                </p>
                                                <p>それぞれの設定で問題なければ「Install Now」をクリックし、インストールを開始します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_9.png" alt="インストール中">
                                                </p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e08">8.インストール完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_10.png" alt="インストール完了">
                                                </p>
                                                <p>この画面のように「Success」の表示がされればインストール完了です。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e09">9.管理画面へログイン</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_11.png" alt="管理画面へログイン">
                                                </p>
                                                <p>インストール時に設定したUsername・Passwordを入力し、ログインを行ってください。 Magentoの管理画面へログインします。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e010">10.完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_12.png" alt="ログイン画面">
                                                </p>
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
                                    <li><a href="#link-a">Magento2 インストール はじめに</a></li>
                                    <li><a href="#link-b">Magento2導入までの流れ</a></li>
                                    <li><a href="#link-c">Magento2のダウンロード</a></li>
                                    <li><a href="#link-d">MySQL（データベース）の設定</a>
                                        <ol>
                                            <li><a href="#link-d1">1.MySQLの追加</a></li>
                                            <li><a href="#link-d2">2.MySQLユーザーの追加</a></li>
                                            <li><a href="#link-d3">3.MySQLアクセス権の設定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">ファイルアップロード</a>
                                        <ol>
                                            <li><a href="#link-e1">1.アップロード先の確認</a></li>
                                            <li><a href="#link-e2">2.ファイルのアップロード</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">ウィザードからの設定作業</a>
                                        <ol>
                                            <li><a href="#link-f1">1.アップロード先のURLにアクセス</a></li>
                                            <li><a href="#link-f2">2.環境の設定を行う</a></li>
                                            <li><a href="#link-f3">3.MySQLデータベースに接続するための情報を入力</a></li>
                                            <li><a href="#link-f4">4.サイトのURLと管理画面のURLを入力</a></li>
                                            <li><a href="#link-f5">5.タイムゾーン・通過・言語の設定を行う</a></li>
                                            <li><a href="#link-f6">6.管理者アカウントの入力</a></li>
                                            <li><a href="#link-f7">7.インストール</a></li>
                                            <li><a href="#link-f8">8.インストール完了</a></li>
                                            <li><a href="#link-f9">9.管理画面へログイン</a></li>
                                            <li><a href="#link-f10">10.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h3 class="section_ttl">Magento2 インストール はじめに</h3>

                                        <div class="section_body">
                                            <p>お客様側でMagento2のファイルを用意していただく必要があります。</p>
                                            <table class="table table_use-caption break-all">
                                                <caption>Magento2インストール設定例</caption>
                                                <tbody>
                                                <tr>
                                                    <th>バージョン</th>
                                                    <td>2.1.3</td>
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
                                                    <td>/home/xsample/example.com/pubic_html/mg2 </td>
                                                </tr>
                                                <tr>
                                                    <th>インストールURL</th>
                                                    <td>http://example.com/mg2/</td>
                                                </tr>
                                                <tr>
                                                    <th>データベース</th>
                                                    <td>MySQL5.7</td>
                                                </tr>
                                                <tr>
                                                    <th>FTPソフト</th>
                                                    <td>FileZilla </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>エックスサーバーでMagento2を利用する際の注意事項</h6>
                                        <div class="msg_body">
                                            <p class="mb5">Magento2は、PHP 5.6.x / MySQL 5.7で動作を確認しています。 ご利用になる場合は、「PHPバージョン切替」にて『PHP 5.6.x』に切り替え、php.iniに以下の設定を加えてください。</p>
                                            <pre class="code">always_populate_raw_post_data = -1</pre>
                                            <p>
                                                また、MySQL 5.7の提供は、ご利用のサーバーにより異なります。
                                            </p>
                                        </div>
                                    </aside>

                                    <section id="link-b" class="section">
                                        <h3 class="section_ttl">Magento2導入までの流れ</h3>

                                        <div class="section_body">

                                            <ol class="ol">
                                                <li><a href="#link-c">Magento2のダウンロード</a></li>
                                                <li><a href="#link-d">MySQL（データベース）の設定</a></li>
                                                <li><a href="#link-e">ファイルアップロード</a></li>
                                                <li><a href="#link-f">ウィザードからの設定作業</a></li>
                                            </ol>
                                        </div>
                                    </section>

                                    <section id="link-c" class="section">
                                        <h3 class="section_ttl">Magento2のダウンロード</h3>

                                        <div class="section_body">

                                            <p><img class="img" src="../img/manual/man_install_mg2_0.png?date=2410" alt="公式サイトよりMagento2をダウンロード"></p>
                                            <p class="link"><a href="https://magento.com/tech-resources/download" target="_blank" rel="nofollow">Magento2 公式サイト</a><i class="ico ico_new-window"></i></p>
                                            <p>
                                                公式サイトのダウンロードページからファイルのダウンロードをしてください。<br> ※ダウンロードするには、公式サイトのアカウント登録が必要です。<br>
                                                ダウンロード後、圧縮ファイルを解凍します。
                                            </p>
                                        </div>
                                    </section>

                                    <section id="link-d" class="section">
                                        <h3 class="section_ttl">MySQL（データベース）の設定</h3>

                                        <div class="section_body">

                                            <p>Magento2で利用するデータベースを新規作成します。<br>
                                                <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「MySQL設定」をクリックしてください。</p>

                                            <p><img class="img" src="../img/manual/man_install_mg2_mysql_1.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d1">1.MySQLの追加</h4>
                                                    <div class="box_body">
                                                        <p>「MySQLデータベース設定」をクリックし、「データベースを追加」をクリックします。<br>
                                                            データベース追加画面が表示されたら「MySQLデータベース名」を入力し、内容を確認したうえで「追加する」をクリックします。<br>本マニュアルではデータベース名を 「xsample_mg2」 として作成します。
                                                        </p>
                                                        <p class="note">※データベース名は「お客様のサーバーID_データベース名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_2.png?date=2410" alt="MySQLデータベース設定にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d2">2.MySQLユーザーの追加</h4>
                                                    <div class="box_body">
                                                        <p>作成したデータベースにアクセスするためのMySQLユーザーを追加します。</p>
                                                        <p class="note">※追加済みのMySQLユーザーを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                                        <p>「MySQLユーザー設定」をクリックし、「ユーザーを追加」をクリックします。<br>
                                                            ご利用になるユーザー名、データベースバージョン、パスワードを設定します。入力後、「追加する」ボタンをクリックしてください。<br>本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                                        <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバーID_ユーザー名」となります。</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_3.png?date=2410" alt="ユーザーを追加にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d3">3.MySQLアクセス権の設定</h4>
                                                    <div class="box_body">
                                                        <p>「MySQLデータベース設定」をクリックし、アクセス権を変更したいデータベースの「ユーザー設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_4.png?date=2410" alt="ユーザ‐設定にフォーカスしたスクリーンショット"></p>
                                                        <p>表示された画面内の「ユーザーを追加」をクリックし、「MySQLユーザーID」から追加したいMySQLユーザーを選択し「追加する」ボタンをクリックしてください。<br>
                                                            本マニュアルでは「xsample_mg2」に「xsample_user」を追加します。</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_5.png?date=2410" alt="MySQLユーザーIDにフォーカスしたスクリーンショット"></p>
                                                        <p>以上でMySQLの設定は完了です。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-e" class="section">
                                        <h3 class="section_ttl">ファイルアップロード</h3>

                                        <div class="section_body">
                                            <p>
                                                Magento公式サイトよりダウンロードしたファイルを解凍してください。<br>
                                                解凍後、FTPソフトを使いFTPサーバーに接続してください本マニュアルでは<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>を使って説明します）。
                                            </p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-e1">1.アップロード先の確認</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            FTPソフトを使い、FTPサーバーに接続してください。<br>
                                                            FTPサーバーの「お客様のドメイン名/public_html」の中に「mg2」フォルダを作成しファイルのアップロードを行います。(本マニュアルでは、説明のため例として「mg2」としていますが、お客様の任意のものでかまいません。)
                                                        </p>
                                                        <p>FileZillaでは、右側のサーバー領域を右クリックし「ディレクトリを作成して移動」を選択します。</p>
                                                        <!-- <p><img class="img" src="../img/manual/man_install_zen_5.png?date=2410" alt="MySQL設定にフォーカスしたスクリーンショット"></p> -->
                                                        <p>続いて、作成するディレクトリ名を入力します。</p>
                                                        <p class="note">※本マニュアルでは、「example.com/public_html/mg2/」を作成します。</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_upload_0.png?date=2410" alt="FileZillaの画面:ディレクトリ作成のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-e2">2.ファイルのアップロード</h4>
                                                    <div class="box_body">
                                                        <p>左側のローカル上からMagento2のフォルダ内の全ファイルを「mg2」フォルダへ全てアップロードします。</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>アップロード</dt>
                                                            <dd><img class="img" src="../img/manual/man_install_mg2_upload_1.png?date=2410" alt="FileZillaの画面:転送画面のスクリーンショット">
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                                            <dd><img class="img" src="../img/manual/man_install_mg2_upload_2.png?date=2410" alt="FileZillaの画面:ファイル転送後のスクリーンショット">
                                                            </dd>
                                                        </dl>
                                                        <p>右側のサーバー領域にファイルが表示されていれば、アップロード完了です。</p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-f" class="section">
                                        <h3 class="section_ttl">ウィザードからの設定作業</h3>

                                        <div class="section_body">

                                            <aside class="msg msg_caution">
                                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>インストールに失敗する場合</h4>
                                                <div class="msg_body">
                                                    <p>使用するMySQLユーザーによるデータベースへのアクセス権限が適切に反映されていない可能性があります。</p>
                                                    <p>この場合、サーバーパネル内「MySQL設定」において、利用するデータベースにおけるMySQLユーザーのアクセス権を一度削除し、改めて追加してください。</p>
                                                    <p>アクセス権を追加する時点で、適切に反映する必要があります。</p>

                                                    ・マニュアル「<a href="man_db_setting.php">MySQLの設定</a>」
                                                </div>
                                            </aside>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f1">1.アップロード先のURLにアクセス</h4>
                                                    <div class="box_body">
                                                        <p>Magento2のアップロード完了後、下記URLにアクセスしてください。</p>
                                                        <div class="border border_gray">
                                                            <p>http://お客様のドメイン名/mg2/<br> （本マニュアルでは：http://example.com/mg2/） </p>
                                                        </div>
                                                        <p>上記URLでアクセスすると、こちらの画面が表示されます。</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_1.png?date=2410" alt="アップロード先のURLにアクセス"></p>
                                                        <p>「Agree and Steup Magento」をクリックします。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f2">2.環境の設定を行う</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_2.png?date=2410" alt="インストール環境の確認"></p>
                                                        <p>「Start Readiness Check」をクリックし、インストール環境に問題がないかどうかを確認します。エラーが出た場合、エラー内容に沿って問題を解消していきます。</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_3.png?date=2410" alt="エラー内容に沿って問題を解決"></p>
                                                        <p>エラーが表示されず、すべてにチェックマークが入った場合、インストール作業を進めることが可能です。「Next」をクリックし、次に進みます。 </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f3">3.MySQLデータベースに接続するための情報を入力</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_4.png?date=2410" alt="MySQLデータベースに接続するための情報入力"></p>
                                                        <p>この画面ではMySQLデータベースに接続するための情報を入力します。</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">Database Server Host</th>
                                                                <td>「localhost」を入力します。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Server Username</th>
                                                                <td>例）xsample_user</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Server Password</th>
                                                                <td>MySQLデータベースのパスワードを入力します。 </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Name</th>
                                                                <td>例）xsample_mg2 </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Table prefix</th>
                                                                <td>インストールする際に自動生成されるテーブル名の接頭辞を指定します。 </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f4">4.サイトのURLと管理画面のURLを入力</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_5.png?date=2410" alt="サイトと管理画面のURLを入力"></p>
                                                        <p>ここでは、サイトのURLと管理画面のURLを入力します。</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">Your Store Address</th>
                                                                <td>http://お客様のドメイン名/mg2/<br>
                                                                    （本マニュアルでは：http://example.com/mg2/）</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Magento Admin Address</th>
                                                                <td>管理画面のURL (※任意で設定可能)</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f5">5.タイムゾーン・通過・言語の設定を行う</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_6.png?date=2410" alt="各種設定"></p>
                                                        <p>Magento2では、現時点で日本語の設定が存在しないため、そのまま「Next」をクリックして次に進みます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f6">6.管理者アカウントの入力</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_7.png?date=2410" alt="管理者アカウントの入力"></p>
                                                        <p>ここでは、管理者アカウントを入力します。</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">New Username</th>
                                                                <td>ログイン用のユーザー名</td>
                                                            </tr>
                                                            <tr>
                                                                <th>New Email</th>
                                                                <td>更新情報などを受け取るため正しいメールアドレスを指定してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>New Password</th>
                                                                <td>ログイン用のパスワード</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Confirm Password</th>
                                                                <td>パスワード確認用</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>入力を終えたら「Next」をクリックして次に進みます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f7">7.インストール</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_8.png?date=2410" alt="設定後インストール"></p>
                                                        <p>それぞれの設定で問題なければ「Install Now」をクリックし、インストールを開始します。</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_9.png?date=2410" alt="インストール中"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f8">8.インストール完了</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_10.png?date=2410" alt="インストール完了"></p>
                                                        <p>この画面のように「Success」の表示がされればインストール完了です。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f9">9.管理画面へログイン</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_11.png?date=2410" alt="管理画面へログイン"></p>
                                                        <p>インストール時に設定したUsername・Passwordを入力し、ログインを行ってください。 Magentoの管理画面へログインします。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f10">10.完了</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_12.png?date=2410" alt="ログイン画面"></p>
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