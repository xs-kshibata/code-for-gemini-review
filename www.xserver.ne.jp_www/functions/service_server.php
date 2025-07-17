<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>サーバーパネルについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー設定を行うための管理ツール「サーバーパネル」で提供している機能の一覧です。">

</head>

<body id="pid-functions">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->

        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">サーバーパネル</span></p>

        <section class="intro media">
            <figure class="media_image mr30"><img class="flex img" src="../img/functions/img_serverpanel.png?date=20230523" alt="サーバーパネル"></figure>
            <p class="media_body">
                メールアドレスの発行から、バックアップ、データベース作成まで全てサーバーパネル上で行うことができます。<br>
                高機能かつ使いやすさを重視した初心者でも安心のサーバーパネルです。<br>
                詳しい機能の詳細は下記の表をご覧ください。
            </p>
        </section>
        <!-- /.intro -->

        <section class="section">
            <h3 class="section_ttl">サーバーパネルの機能説明</h3>
            <div class="section_body">

                <section class="block block_functions">
                    <h4 class="block_ttl">アカウント関連</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>パスワード変更</th>
                                <td>サーバーパネルなどのパスワードを変更できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>サーバー情報</th>
                                <td>サーバーソフトウェアのバージョン、perlパス、モジュール一覧などが確認できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>バックアップ</th>
                                <td>ホームディレクトリのバックアップファイルをダウンロードすることができます。また、「<a href="service_backup.php">自動バックアップ</a>」におけるデータのバックアップ状況確認も行うことができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>

                            <tr>
                                <th>Cron設定</th>
                                <td>設定時刻に定期的に指定コマンドを動作させることができます</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>SSHの設定</th>
                                <td>SSHの設定が可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">ホームページ機能</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>アクセス制限</th>
                                <td>特定のディレクトリに対してアクセス制限（BASIC認証）を行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>エラーページ設定</th>
                                <td>エラーページをカスタマイズできます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>MIME設定</th>
                                <td>Webページのデータとして認識されないファイルを追加定義できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>.htaccess編集</th>
                                <td>.htaccessの編集ができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>サイト転送設定</th>
                                <td>ウェブページの転送を設定できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>アクセス拒否設定</th>
                                <td>特定IPからのアクセスを禁止できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>CGIツール</th>
                                <td>メールフォーム、アクセスカウンターを作成できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>簡単インストール</th>
                                <td>EC-CUBE などの人気プログラムを、パーミッション変更など面倒な手間なく設置・インストールすることができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>Webフォント設定</th>
                                <td>Webフォントの設定を行うことが可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>ads.txt</th>
                                <td>ads.txtの設定を行うことが可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">高速化</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>ブラウザキャッシュ設定</th>
                                <td>アクセス時にブラウザのキャッシュデータを読み込み、表示速度の向上および転送量の軽減が可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">WordPress</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>WordPress簡単インストール</th>
                                <td>人気のプログラム、WordPressを、パーミッション変更など面倒な手間なく設置・インストールすることができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>WordPressテーマインストール機能</th>
                                <td>WordPressの人気テーマをダウンロードの手間なく簡単にインストールできます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>WordPress簡単移行</th>
                                <td>必要な情報を入力するだけで、他社サーバーで運用中のWordPressを自動的にエックスサーバーへ移行できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>WordPressセキュリティ設定</th>
                                <td>WordPressに対する不正なアクセス等を防止し、セキュリティを強化することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">PHP</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>PHP Ver.切替</th>
                                <td>PHPのバージョンを簡単に切り替えることが可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>php.ini設定</th>
                                <td>ドメイン毎に、php.iniの設置と編集行うことが可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">メール関連</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>メールアカウント設定</th>
                                <td>メールアカウントの発行・容量変更・削除が行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>迷惑メールフィルタ設定</th>
                                <td>迷惑メールフィルタが設定可能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>自動応答設定</th>
                                <td>受信したメールに対し定型文を自動で返信することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>SMTP認証の国外アクセス制限設定</th>
                                <td>国外ネットワークからの不正なメール送信を制限し、セキュリティを強化することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>メールの振り分け</th>
                                <td>指定条件のメールに対して様々な処理を設定することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>メーリングリスト・<br>メールマガジン</th>
                                <td>
                                    <p>メーリングリストやメールマガジンを作成し、管理運用を行うことが出来ます。</p>
                                </td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">FTP関連</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>サブFTPアカウント設定</th>
                                <td>サブFTPアカウントの発行・削除が行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>FTP制限設定</th>
                                <td>FTP接続を許可するＩＰアドレスを追加できます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">データベース関連</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>MySQL設定</th>
                                <td>MySQLのデータベース・ユーザの追加・削除が行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>MySQLバックアップ</th>
                                <td>現在のデータベースのエクスポート（ファイル出力）や、自動バックアップデータを用いてデータベースを復元することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>

                            <tr>
                                <th>phpMyAdmin</th>
                                <td>phpMyAdminを利用することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">ドメイン関連（SSL設定以外は独自ドメインをお持ちの場合に限ります）</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>ドメイン設定</th>
                                <td>ドメイン設定の追加・削除が行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>サブドメイン設定</th>
                                <td>サブドメイン設定の追加・削除が行えます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>DNSレコード設定</th>
                                <td>ドメインのDNSレコードを編集することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>SSL設定</th>
                                <td>SSLの設定と、設定状況の確認をすることができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>動作確認URL</th>
                                <td>サイト移転時などにおいて、ネームサーバー変更前に動作確認用のURLを発行することができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">アクセス解析</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                            <tr>
                                <th class="w20per">機能</th>
                                <th>解説</th>
                                <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>アクセス解析</th>
                                <td>サーバーパネル上から、アクセス解析を行うことができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>アクセスログ</th>
                                <td>アクセスログをダウンロードすることができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            <tr>
                                <th>エラーログ</th>
                                <td>エラーログをダウンロードすることができます。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <!--<section class="block block_functions">
                    <h4 class="block_ttl">セキュリティ</h4>
                    <div class="block_body">
                        <table class="table table_striped primary-table-ml">
                            <thead>
                                <tr>
                                    <th class="w20per">機能</th>
                                    <th>解説</th>
                                    <th class="w10per cell_nowrap pr5 pl5">スタンダード</th>
                                    <th class="w10per cell_nowrap pr5 pl5">プレミアム</th>
                                    <th class="w10per cell_nowrap pr5 pl5">ビジネス</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>改ざん検知設定</th>
                                    <td>ダミーテキストダミーテキストダミーテキストダミーテキスト</td>
                                    <td colspan="3"><span class="table_value">○</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>-->
                <!-- /.block -->

            </div>
        </section>
        <!-- /.section -->

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