<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XOOPS Cube 手動インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「XOOPS Cube」をお客さまご自身でインストールするための手順を記載しています。エックスサーバーでは簡単な操作で「XOOPS Cube」を設置できる「自動インストール」機能も提供しています。">

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
            
                <h3 class="sub-ttl">XOOPS Cube</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XOOPS Cube インストール はじめに</a></li>
                    <li><a href="#link-b">XOOPS Cubeのダウンロード</a></li>
                    <li><a href="#link-c">MySQL（データベース）の設定</a>
                        <ol>
                            <li><a href="#link-c01">1.MySQLの追加</a></li>
                            <li><a href="#link-c02">2.MySQLユーザの追加</a></li>
                            <li><a href="#link-c03">3.MySQLアクセス権の設定</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">ファイルアップロード</a>
                        <ul>
                            <li><a href="#link-d01">解凍後のファイル確認</a></li>
                            <li><a href="#link-d02">サーバへのアップロード</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-e">ウィザードからのインストール作業</a>
                        <ul>
                            <li><a href="#link-e01">1.インストールを行うためのウィザード画面を表示</a></li>
                            <li><a href="#link-e02">2.インストールウィザードへようこそ</a></li>
                            <li><a href="#link-e03">3.ファイルアクセス権のチェック</a></li>
                            <li><a href="#link-e04">4.データベース、およびパス・URLの設定</a></li>
                            <li><a href="#link-e05">5.設定の保存</a></li>
                            <li><a href="#link-e06">6.パス・URLのチェック</a></li>
                            <li><a href="#link-e07">7.データベース設定の確認</a></li>
                            <li><a href="#link-e08">8.データベースをチェック</a></li>
                            <li><a href="#link-e09">9.データベーステーブル作成</a></li>
                            <li><a href="#link-e010">10.サイト管理者についての設定</a></li>
                            <li><a href="#link-e011">11.データの生成</a></li>
                            <li><a href="#link-e012">12.インストール第一ステップ完了</a></li>
                            <li><a href="#link-e013">13.管理者ログイン画面</a></li>
                            <li><a href="#link-e014">14.インストール</a></li>
                            <li><a href="#link-e015">15.インストール完了画面</a></li>
                            <li><a href="#link-e016">16.管理者メニューをクリック</a></li>
                            <li><a href="#link-e017">17.xoops/mainfile.phpの属性変更</a></li>
                            <li><a href="#link-e018">18.完了</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XOOPS Cube インストール はじめに</h4>
                    <div class="section_body">
                        
                        <p>お客様側で、XOOPS Cubeのパッケージを用意していただく必要があります。</p>
                        <table class="table table_use-caption break-word">
                            <caption>XOOPS Cubeのインストール設定例</caption>
                            <tbody>
                                <tr><th>バージョン名</th><td>XOOPS Cube Legacy 2.1.7</td></tr>
                                <tr><th>サーバーID</th><td>xsample</td></tr>
                                <tr><th>ドメイン名</th><td>example.com</td></tr>
                                <tr><th>インストールディレクトリ</th><td>/home/xsample/example.com/public_html/xoops/</td></tr>
                                <tr><th>インストールURL</th><td>http://example.com/xoops/</td></tr>
                                <tr><th>データベース</th><td>MySQL5.5 / MySQL5 のいずれでも可能<br>（文字コードを EUC-JP に設定してください)</td></tr>
                                <tr><th>FTPソフト</th><td>FFFTP</td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
            
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">XOOPS Cubeのダウンロード</h4>
                    <div class="section_body">
                        <p><img class="img" src="../img/manual/man_install_xoops_1.png" alt="XOOPS Cubeをダウンロードします"></p>
                        <p class="link"><a href="http://xoopscube.jp/" target="_blank" rel="nofollow">XOOPS Cube公式サイト</a><i class="ico ico_new-window"></i></p>
                        <p>公式サイトから、案内に従ってXOOPS Cubeファイルをダウンロードしてください。<br>
                        ダウンロード後、圧縮ファイルを解凍をします。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-c" class="section_ttl">MySQL（データベース）の設定</h4>
                    <div class="section_body">
                        <p>XOOPS Cubeで利用するデータベースを新規作成します。</p>
                    
                        <p><img class="img" src="../img/manual/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.MySQLの追加</h6>
                                <div class="box_body">
                                    <p>XOOPSで利用するデータベースを追加します。ご利用になられるデータベース名を指定し、「MySQLの追加」ボタンをクリックしてください。本マニュアルではデータベース名を 「xsample_xoops」 として作成します。</p>
                                    <p class="note">※データベース名は「お客様のサーバID_データベース名」となります。</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_2.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.MySQLユーザの追加</h6>
                                <div class="box_body">
                                    <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザを追加します。</p>
                                    <p class="note">※追加済みのMySQLユーザを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                    <p class="mb0">ご利用になられるユーザー名とパスワードを設定します。ユーザの追加ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                    <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバID_ユーザー名」となります。</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_3.png" alt="MySQLのユーザの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.MySQLアクセス権の設定</h6>
                                <div class="box_body">
                                    <p>「MySQLの一覧」から作成したデータベースにアクセス権を追加します。アクセス権未所有ユーザから追加したいMySQLユーザを選択し追加ボタンをクリックしてください。本マニュアルでは「xsample_xoops」に「xsample_user」を追加します。</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_4.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                    <p>以上でMySQLの設定は完了です。</p>
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
                        <section class="block">
                            <h3 class="block_ttl" id="link-d01">解凍後のファイル確認</h3>
                            <div class="block_body">
                                <p>次に先ほど解凍したXOOPSファイルの確認を行います。<br>
                                解凍後のディレクトリの中にある「Package_Legacy」を開きます。</p>
                                <p><img class="img" src="../img/manual/man_install_xoops_5.png" alt="Package Legacyフォルダ内のhtmlフォルダ"></p>
                                <p>「Package_Legacy」フォルダの中にある「html」フォルダの全ファイルをサーバーへアップロードをします。</p>
                            </div>
                        </section>
                    
                        <section class="block">
                            <h3 class="block_ttl" id="link-d02">サーバへのアップロード</h3>
                            <div class="block_body">
                                <p>FTPソフトを使いFTPサーバに接続してください（本マニュアルではFFFTPを使って説明を行っています）。</p>
                                <p>FTPサーバーの「お客様のドメイン名/public_html/」の中に「xoops」ディレクトリを新規作成してください。<br>
                                (今回のマニュアルでは、例として「xoops」フォルダを作成していますが、フォルダ名は任意の名前で構いません。)</p>
                                <p>次に、ローカル側の「html」フォルダ内の全ファイルをサーバー側の「xoops」フォルダへ転送します。</p>
                                
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>アップロード前</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_xoops_6.png" alt="FFFTPの画面:転送画面のスクリーンショット"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>アップロード完了</dt>
                                    <dd>
                                        <p><img class="img" src="../img/manual/man_install_xoops_7.png" alt="FFFTPの画面:ファイル転送後のスクリーンショット"></p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                    
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">ウィザードからのインストール作業</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e01">1.インストールを行うためのウィザード画面を表示</h6>
                                <div class="box_body">
                                    <p>ファイルのアップロード完了後、下記のURLにアクセスしてください。</p>
                                    <div class="border border_gray">
                                    http://お客様のドメイン名/xoops/<br>
                                    （本マニュアルでは：http://example.com/xoops/）
                                    </div>
                                    <p><img class="img" src="../img/manual/man_install_xoops_8.png" alt="インストール作業を行うウィザード画面"></p>
                                    <p>インストールを行うためのウィザード画面が表示されます。<br>
                                    ここからウィザードに従って、インストール作業を進めていきます。</p>
                                    <p>セレクトボックスで、「ja_utf8」を選択し、introduction >>「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e02">2.インストールウィザードへようこそ</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_9.png" alt="XOOPS 2.1 インストールウィザードへようこそ"></p>
                                    <p>XOOPS 2.1 インストールウィザードへようこそ</p>
                                    <p>内容を確認後、ページ下にあるアクセス権のチェック >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e03">3.ファイルアクセス権のチェック</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_10.png" alt="ファイルアクセス権のチェック"></p>
                                    <p>「アクセス権に問題はありません。」という表記を確認し、 設定の入力 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e04">4.データベース、およびパス・URLの設定</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_11.png" alt="データベース、およびパス・URLの設定"></p>
                                    <p>ここではMySQLの接続情報やURLの設定を行います。<br>
                                    先ほど作成したMySQLの情報を入力してください。</p>
                                    <table class="table break-word">
                                        <tbody>
                                            <tr>
                                                <th>データベースサーバ</th>
                                                <td>セレクトボックスで「mysql」を指定します。</td>
                                            </tr>
                                            <tr>
                                                <th>データベースサーバのホスト名</th>
                                                <td>
                                                    MySQLホスト名を入力します。<br>
                                                    例:mysql20.xserver.jp<br><br>
                                                    (お客様のサーバーアカウントによりホスト名が異なります。<br>
                                                    「サーバーパネル &gt; MySQL設定 &gt; MySQL情報」にてご確認ください。)
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>データベースユーザー名</th>
                                                <td>
                                                    データベースユーザー名を入力します。<br>
                                                    例:xsample_user
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>データベースパスワード</th>
                                                <td>データベースユーザのパスワードを入力します。</td>
                                            </tr>
                                            <tr>
                                                <th>データベース名</th>
                                                <td>使用するMySQLデータベース名を入力します。<br>例:xsample_xoops</td>
                                            </tr>
                                            <tr><th>テーブル接頭語</th><td>デフォルトのままで構いません。</td></tr>
                                            <tr><th>SALT</th><td>デフォルトのままで構いません。</td></tr>
                                            <tr><th>データベースへ持続的接続</th><td>デフォルト選択の「いいえ」のままで構いません。</td></tr>
                                            <tr><th>XOOPS Cubeへのパス</th><td>デフォルトでパスが入力されていますので、このままで構いません</td></tr>
                                            <tr><th>XOOPS CubeへのURL</th><td>デフォルトでURLが入力されていますので、このままで構いません</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e05">5.設定の保存</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_12.png" alt="データベース、およびパス・URLの設定"></p>
                                    <p>設定情報をmainfile.phpに書き込む処理を行っています。<br>
                                    パス・URLのチェック >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e06">6.パス・URLのチェック</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_13.png" alt="パス・URLのチェック"></p>
                                    <p>表示されたパス情報を確認し、データベース設定の確認 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e07">7.データベース設定の確認</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_14.png" alt="データベース設定の確認"></p>
                                    <p>データベース設定の内容を確認して、データベースをチェック　>> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e08">8.データベースをチェック</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_15.png" alt="データベースをチェック"></p>
                                    <p>MySQLに接続確認ができますと、こちらの画面が表示されます。<br>
                                    データベーステーブル作成 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e09">9.データベーステーブル作成</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_16.png" alt="データベーステーブル作成"></p>
                                    <p>サイト管理者についての設定 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e010">10.サイト管理者についての設定</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_17.png" alt="サイト管理者についての設定"></p>
                                    <p>ここでは、XOOPS Cubeの管理画面にログインする際に必要な管理者に関する情報を入力します。</p>
                                    <ul class="ul">
                                        <li>管理者ユーザー名</li>
                                        <li>管理者メールアドレス</li>
                                        <li>管理者パスワード</li>
                                        <li>管理者パスワード(再入力)</li>
                                    </ul>
                                    <p>各項目について、任意の値を入力してください。<br>
                                    (管理者ユーザー名は半角文字で入力する必要があります。)</p>
                                    <p>管理者情報の入力後、データの生成 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e011">11.データの生成</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_18.png" alt="データの生成"></p>
                                    <p>完了 >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e012">12.インストール第一ステップ完了</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_19.png" alt="インストール第一ステップ完了"></p>
                                    <p>表示内容を確認し、インストールの第2ステップ >> 「→」をクリックします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e013">13.管理者ログイン画面</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_20.png" alt="管理者ログイン画面"></p>
                                    <p>先ほど設定した管理者情報を入力し、ログインします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e014">14.インストール</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_21.png" alt="インストール"></p>
                                    <p>ログイン後、「以下のモジュールが導入されていません」と表示された画面に遷移します。</p>
                                    <p>デフォルトでチェックボックスがチェックされた状態で、「インストール」ボタンを押します。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e015">15.インストール完了画面</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_22.png" alt="インストール完了画面"></p>
                                    <p>インストール完了のページに記載されている指示に従って、FTPソフトで接続しサーバー側のxoops/install　ディレクトリを削除します。</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_23.png" alt="installディレクトリを削除"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e016">16.管理者メニューをクリック</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_24.png" alt="管理画面"></p>
                                    <p>管理者メニューをクリックします。</p>
                                    <p>管理者メニュー画面では、以下のような注意書きが表示されています。</p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p class="mb0">ファイル /home/xsample/example.com/public_html/xoops/mainfile.php への書き込みが可能となっています。<br>
                                            このファイルのパーミッション設定を変更してください。</p>
                                        </div>
                                    </aside>
                                    <p>この表記に従って、設定ファイルであるxoops/mainfile.phpの属性を変更します。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e017">17.xoops/mainfile.phpの属性変更</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_25.png" alt="mainfile.phpのパーミッション変更"></p>
                                    <p>xoops/mainfile.phpの属性を500に変更し、書き込みを不可にします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e018">18.完了</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_26.png" alt="インストール作業完了！"></p>
                                    <p>以上でインストール作業が完了です。お疲れ様でした。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
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