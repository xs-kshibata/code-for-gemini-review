<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サーバーパネル利用方法 |
	<?php print $SITE_TITLE; ?>
</title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーの各種設定に関する管理ツール「サーバーパネル」で提供する機能の一覧と利用方法に関するご案内です。">

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

							<h3 class="sub-ttl">サーバーパネル</h3>

                            <div class="supportTabArea">
                                <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                                <div class="supportTabWrap">
                                    <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                                    <!-- 旧パネル -->
                                    <div class="supportTabContents">

                                        <div class="toc-list">
                                            <p class="toc-list--head">目次</p>
                                            <ul class="toc-list--body">
                                                <li><a href="#link-previous-a">サーバーパネルとは</a>
                                                </li>
                                                <li><a href="#link-previous-b">ログイン方法</a>
                                                    <ul>
                                                        <li><a href="#link-previous-b01">画像認証（reCAPTCHA認証）について</a></li>
                                                        <li><a href="#link-previous-b02">「ログインする」ボタンを押しても画面が切り替わらない場合</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-c">設定対象ドメイン</a>
                                                    <ul>
                                                        <li><a href="#link-previous-c01">設定対象ドメイン</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-d">アカウント</a>
                                                    <ul>
                                                        <li><a href="#link-previous-d01">パスワード変更</a></li>
                                                        <li><a href="#link-previous-d02">サーバー情報</a></li>
                                                        <li><a href="#link-previous-d03">バックアップ</a></li>
                                                        <li><a href="#link-previous-d04">Cron設定</a></li>
                                                        <li><a href="#link-previous-d05">SSH設定</a></li>
                                                        <li><a href="#link-previous-d06">二段階認証設定</a></li>
                                                        <li><a href="#link-previous-d07">リソースモニター</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-e">ホームページ</a>
                                                    <ul>
                                                        <li><a href="#link-previous-e01">アクセス制限</a></li>
                                                        <li><a href="#link-previous-e02">エラーページ設定</a></li>
                                                        <li><a href="#link-previous-e03">MIME設定</a></li>
                                                        <li><a href="#link-previous-e04">.htaccess編集</a></li>
                                                        <li><a href="#link-previous-e05">サイト転送設定</a></li>
                                                        <li><a href="#link-previous-e06">アクセス拒否設定</a></li>
                                                        <li><a href="#link-previous-e07">CGIツール</a></li>
                                                        <li><a href="#link-previous-e08">簡単インストール</a></li>
                                                        <li><a href="#link-previous-e09">Webフォント設定</a></li>
                                                        <li><a href="#link-previous-e10">ads.txt</a></li>
                                                        <li><a href="#link-previous-e11">XPageSpeed設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-f">高速化</a>
                                                    <ul>
                                                        <li><a href="#link-previous-f01">ブラウザキャッシュ設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-g">WordPress</a>
                                                    <ul>
                                                        <li><a href="#link-previous-g01">WordPress簡単インストール</a></li>
                                                        <li><a href="#link-previous-g02">WordPress簡単移行</a></li>
                                                        <li><a href="#link-previous-g03">WordPressセキュリティ設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-h">PHP</a>
                                                    <ul>
                                                        <li><a href="#link-previous-h01">PHP Ver.切替</a></li>
                                                        <li><a href="#link-previous-h02">php.ini設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-i">メール</a>
                                                    <ul>
                                                        <li><a href="#link-previous-i01">メールアカウント設定</a></li>
                                                        <li><a href="#link-previous-i02">迷惑メールフィルタ設定</a></li>
                                                        <li><a href="#link-previous-i03">自動応答設定</a></li>
                                                        <li><a href="#link-previous-i04">SMTP認証の国外アクセス制限設定</a></li>
                                                        <li><a href="#link-previous-i05">メールの振り分け</a></li>
                                                        <li><a href="#link-previous-i06">メーリングリスト・メールマガジン</a></li>
                                                        <li><a href="#link-previous-i07">DKIM設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-j">FTP</a>
                                                    <ul>
                                                        <li><a href="#link-previous-j01">サブFTPアカウント設定</a></li>
                                                        <li><a href="#link-previous-j02">FTP制限設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-k">データベース</a>
                                                    <ul>
                                                        <li><a href="#link-previous-k01">MySQL移行ツール(旧バージョンのMySQLをご利用の方のみ)</a></li>
                                                        <li><a href="#link-previous-k02">MySQL設定</a></li>
                                                        <li><a href="#link-previous-k03">MySQLバックアップ</a></li>
                                                        <li><a href="#link-previous-k04">MySQL復元</a></li>
                                                        <li><a href="#link-previous-k05">phpMyAdmin</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-l">ドメイン</a>
                                                    <ul>
                                                        <li><a href="#link-previous-l01">ドメイン設定</a></li>
                                                        <li><a href="#link-previous-l02">サブドメイン設定</a></li>
                                                        <li><a href="#link-previous-l03">DNSレコード設定</a></li>
                                                        <li><a href="#link-previous-l04">SSL設定</a></li>
                                                        <li><a href="#link-previous-l05">動作確認URL</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-previous-m">アクセス解析</a>
                                                    <ul>
                                                        <li><a href="#link-previous-m01">アクセス解析</a></li>
                                                        <li><a href="#link-previous-m02">アクセスログ</a></li>
                                                        <li><a href="#link-previous-m03">エラーログ</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="link-box">
                                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_server.php">サーバーパネルに関する「よくある質問」</a></li>
                                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress簡単移行に関する「よくある質問」</a></li>
                                        </ul>

                                        <div class="manual-youtube-box">
                                            <p>動画でも概要について説明しておりますので、こちらでもご確認いただけます。</p>
                                            <div class="manual-youtube">
                                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/YSMnFm4JLm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-a">サーバーパネルとは</h4>
                                            <div class="section_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>は、サーバーの各種設定（メールアカウントの発行・ドメインの設定など）を行うための管理パネルです。</p>
                                                <p><img class="img" src="../img/manual/previous/man_tool_server_1.png" alt="サーバーパネルのスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-b">ログイン方法</h4>
                                            <div class="section_body">
                                                <p>
                                                    下記URLよりサーバーパネルへのログインが可能です。<br>
                                                    XServerアカウントID（ご登録メールアドレス）/XServerアカウントパスワードでログインをお試しください。<br>
                                                    ※メインFTPアカウントのユーザー名とパスワード（サーバーIDとサーバーパスワード）でもログインすることが可能です。
                                                </p>
                                                <p><i class="ico ico_square-fill"></i>サーバーパネル ログインURL<br>
                                                    <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">
                                                        <?php print $SECURE_URL; ?>xapanel/login/xserver/server/</a>
                                                </p>
                                            </div>
                                            <h5 id="link-previous-b01" class="block_ttl">画像認証（reCAPTCHA認証）について</h5>
                                            <div class="section_body">
                                                <p>
                                                    お使いの環境やアクセス状況等によって、画像認証（reCAPTCHA認証）が表示される場合があります。<br>
                                                    画像が表示された場合は、画面上部に表示される質問内容についてご回答をお願いいたします。
                                                </p>
                                                <p>画像認証(reCAPTCHA認証)画面例</p>
                                                <p><img class="img" src="../img/manual/previous/man_tool_server_2.png" alt="reCAPTCHA画面の例"></p>
                                            </div>

                                            <h5 id="link-previous-b02" class="block_ttl">「ログインする」ボタンを押しても画面が切り替わらない場合</h5>
                                            <div class="section_body">
                                                <p>
                                                    以下のサイトに対してJavaScriptが無効になっている場合、ログインができません。<br>
                                                    https://*.xserver.ne.jp<br>
                                                    https://www.google.com<br>
                                                    https://www.gstatic.com<br>
                                                    <br>
                                                    JavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-c">設定対象ドメイン</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-c01" class="block_ttl">設定対象ドメイン</h5>
                                                    <div class="block_body">
                                                        <p>設定対象ドメインとは、サーバーパネル上の各機能において設定対象となるドメインのことです。</p>
                                                        <p>設定対象ドメインは、ドメイン別に設定を行うようなメニューへとアクセスした際、表示されるドメインの一覧から選択します。<br> 異なるメニューへアクセスすると、設定対象ドメインはリセットされますので、メニューへアクセスする毎に設定を行うドメインを選択してください。
                                                        </p>
                                                        <p>また、オプション機能として、「設定対象ドメイン」を1つのドメインに固定する機能もあります。<br> この機能を利用することで、メニューアクセス時のドメインの一覧画面は表示されなくなり、スムーズなアクセスが可能となりますので、1つのドメインで複数の機能をご利用の場合などに便利です。
                                                        </p>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-d">アカウント</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-d01" class="block_ttl">パスワード変更</h5>
                                                    <div class="block_body">
                                                        <p>サーバーIDでサーバーパネルにログインする際に使用する「サーバーパスワード」を変更することができます。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-d02" class="block_ttl">サーバー情報</h5>
                                                    <div class="block_body">
                                                        <p>サーバーのCPU情報や各プログラムのバージョン、perlモジュールやコマンドパスの一覧を確認することができます。</p>
                                                    </div>
                                                </section>


                                                <section class="block">
                                                    <h5 id="link-previous-d03" class="block_ttl">バックアップ</h5>
                                                    <div class="block_body">
                                                        <p>各種フォルダのバックアップができます。</p>
                                                        <p>また、「<a href="../functions/service_backup.php">自動バックアップ</a>」におけるデータのバックアップ状況の確認も行うことができます。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-d04" class="block_ttl">Cron設定</h5>
                                                    <div class="block_body">
                                                        <p>設定時刻に定期的に指定コマンドを動作させるCronの設定を行えます。<br> 詳しくは、
                                                            <a href="man_program_cron.php">Cron設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-d05" class="block_ttl">SSH設定</h5>
                                                    <div class="block_body">
                                                        <p>SSHを利用するための有効(ON)・無効(OFF)の切替、SSH接続用の公開鍵認証用鍵ペアの生成と公開鍵の登録ができます。<br> 詳しくは、
                                                            <a href="man_server_ssh.php">SSH設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-d06" class="block_ttl">二段階認証設定</h5>
                                                    <div class="block_body">
                                                        <p>二段階認証の設定が可能です。通常のログインパスワード認証に加えて、認証コード生成アプリに表示されるワンタイムパスワードを入力することで、アカウントの安全性を強化することができます。<br> 詳しくは、
                                                            <a href="man_order_twostepauth.php">二段階認証設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-d07" class="block_ttl">リソースモニター</h5>
                                                    <div class="block_body">
                                                        <p>当日中のCPU・メモリ・転送量の利用状況を過去3ヶ月分確認することができます。<br> 詳しくは、
                                                            <a href="man_server_resource_information.php">リソースモニター</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-e">ホームページ</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-e01" class="block_ttl">アクセス制限</h5>
                                                    <div class="block_body">
                                                        <p>各フォルダにパスワード認証（BASIC認証）を設定することができます。<br> 詳しくは、
                                                            <a href="man_server_limit.php">アクセス制限</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e02" class="block_ttl">エラーページ設定</h5>
                                                    <div class="block_body">
                                                        <p>存在しないファイルへアクセスした際に表示されるエラーページ（404エラーなど）を、独自のページに設定することができます。<br> 詳しくは、
                                                            <a href="man_server_errorpage.php">エラーページ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e03" class="block_ttl">MIME設定</h5>
                                                    <div class="block_body">
                                                        <p>拡張子によって処理内容を指定するMIMEの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_mime.php">MIME設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e04" class="block_ttl">.htaccess編集</h5>
                                                    <div class="block_body">
                                                        <p>.htaccessの編集ができます。<br> 詳しくは、
                                                            <a href="man_server_htaccess.php">.htaccess編集</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e05" class="block_ttl">サイト転送設定</h5>
                                                    <div class="block_body">
                                                        <p>指定アドレスに対してのアクセスを別のサイトに転送することができます。<br> 詳しくは、
                                                            <a href="man_server_transfer.php">サイト転送設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e06" class="block_ttl">アクセス拒否設定</h5>
                                                    <div class="block_body">
                                                        <p>指定したIPアドレスからのアクセスを拒否することができます。<br> 詳しくは、
                                                            <a href="man_server_ipcheck.php">アクセス拒否設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e07" class="block_ttl">CGIツール</h5>
                                                    <div class="block_body">
                                                        <p>カウンター、メールフォームを設置することができます。<br> メールフォームの設置については、
                                                            <a href="man_install_cgi_mailform.php">メールフォーム</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e08" class="block_ttl">簡単インストール</h5>
                                                    <div class="block_body">
                                                        <p>EC-CUBEなどの人気プログラムを、ワンクリックでインストールすることができます。<br> 詳しくは、
                                                            <a href="man_install_auto.php">簡単インストールについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e09" class="block_ttl">Webフォント設定</h5>
                                                    <div class="block_body">
                                                        <p>Webフォントの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_webfont_wp.php">Webフォント設定(WordPressプラグインでのご利用)</a>、<a href="man_server_webfont_html.php">Webフォント設定(HTML記述形式でのご利用)</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e10" class="block_ttl">ads.txt</h5>
                                                    <div class="block_body">
                                                        <p>ads.txtの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_ads.php">ads.txt</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-e11" class="block_ttl">XPageSpeed設定</h5>
                                                    <div class="block_body">
                                                        <p>Webサイトが表示されるタイミングで自動的に表示データの最適化を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_xpagespeed.php">XPageSpeed設定について</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-f">高速化</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-f01" class="block_ttl">ブラウザキャッシュ設定</h5>
                                                    <div class="block_body">
                                                        <p>ブラウザのキャッシュ利用を指示する設定をレスポンスヘッダに付加し、再アクセス時にキャッシュデータを読み込むことでサイト表示速度を向上します。<br>
                                                        詳しくは、<a href="man_server_expires.php">ブラウザキャッシュ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-g">WordPress</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-g01" class="block_ttl">WordPress簡単インストール</h5>
                                                    <div class="block_body">
                                                        <p>人気のプログラムWordPressを、ワンクリックでインストールすることができます。<br> 詳しくは、
                                                            <a href="man_install_auto_word.php">簡単インストールについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-g02" class="block_ttl">WordPress簡単移行</h5>
                                                    <div class="block_body">
                                                        <p>他社サーバーからのサイト移転や、運用中のWordPressを別のURLに変更したい場合などにご利用いただけます。<br>詳しくは、 <a href="man_install_transfer_wp.php">WordPress簡単移行</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-g03" class="block_ttl">WordPressセキュリティ設定</h5>
                                                    <div class="block_body">
                                                        <p>WordPressに対する不正なアクセスを防止し、セキュリティを強化することができます。<br> 詳しくは、
                                                            <a href="man_server_wpsecurity.php">WordPressセキュリティ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-h">PHP</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-h01" class="block_ttl">PHP Ver.切替</h5>
                                                    <div class="block_body">
                                                        <p>PHPのバージョンを切り替えることができます。<br> 詳しくは、
                                                            <a href="man_program_php_ver.php">PHPのバージョンについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-h02" class="block_ttl">php.ini設定</h5>
                                                    <div class="block_body">
                                                        <p>ドメインごとに、php.iniの設置と編集を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_phpini_edit.php">php.ini設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-i">メール</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-i01" class="block_ttl">メールアカウント設定</h5>
                                                    <div class="block_body">
                                                        <p>メールアカウントの作成、転送設定などを行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_add.php">メールアカウント設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i02" class="block_ttl">迷惑メールフィルタ設定</h5>
                                                    <div class="block_body">
                                                        <p>迷惑メール対策ソフトウェア SpamAssassin （スパムアサシン）や Cloudmark （クラウドマーク）を有効にするかどうかの設定が行えます。<br> 詳しくは、
                                                            <a href="man_mail_spam_setting.php">迷惑メールフィルタ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i03" class="block_ttl">自動応答設定</h5>
                                                    <div class="block_body">
                                                        <p>あらかじめ用意した定型文のメールを自動的に送信者へ返送することができます。<br> 詳しくは、
                                                            <a href="man_mail_mailreply.php">自動応答設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i04" class="block_ttl">SMTP認証の国外アクセス制限設定</h5>
                                                    <div class="block_body">
                                                        <p>国外ネットワークからの不正なメール送信を制限し、セキュリティを強化することができます。<br> 詳しくは、
                                                            <a href="man_mail_jpcheck.php">SMTP認証の国外アクセス制限設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i05" class="block_ttl">メールの振り分け</h5>
                                                    <div class="block_body">
                                                        <p>指定条件に該当するメールに対して、フィルタリングや特定メールアドレスへの転送など、様々な処理を行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_sorting.php">メールの振り分け</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i06" class="block_ttl">メーリングリスト・メールマガジン</h5>
                                                    <div class="block_body">
                                                        <p>メーリングリストやメールマガジンの作成・運用管理を行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_mailinglist.php">メーリングリストについて</a>、 <a href="man_mail_mailmagazine.php">メールマガジンについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-i07" class="block_ttl">DKIM設定</h5>
                                                    <div class="block_body">
                                                        <p>送信メールの改ざん・なりすましを防ぐことで、送信メールの信頼性向上やメール到達率の向上が期待されます。<br> 詳しくは、
                                                            <a href="man_mail_dkim.php">DKIM設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-j">FTP</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-j01" class="block_ttl">サブFTPアカウント設定</h5>
                                                    <div class="block_body">
                                                        <p>特定フォルダへのアクセス権を持つFTPアカウントを作成することができます。<br> 詳しくは、
                                                            <a href="man_ftp_add.php">サブFTPアカウント設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-j02" class="block_ttl">FTP制限設定</h5>
                                                    <div class="block_body">
                                                        <p>FTP接続を許可するIPアドレスを追加できます。<br> 追加をすると、接続を許可したIPアドレスのみ接続が可能となり、FTPによる不正アクセスのリスクを低減することができます。
                                                            <br> 詳しくは、
                                                            <a href="man_ftp_id.php">FTP制限設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-k">データベース</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-k01" class="block_ttl">MySQL移行ツール(旧バージョンのMySQLをご利用の方のみ)</h5>
                                                    <div class="block_body">
                                                        <p>MySQLのバージョンを切り替えることが可能です。<br> 詳しくは、
                                                            <a href="man_db_shift_tool.php">MySQL移行ツール</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-k02" class="block_ttl">MySQL設定</h5>
                                                    <div class="block_body">
                                                        <p>データベースの作成、MySQLユーザーの作成などのMySQLに関する設定ができます。</p>
                                                        <p>詳しくは、<a href="man_db_setting.php">MySQLの設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-k03" class="block_ttl">MySQLバックアップ</h5>
                                                    <div class="block_body">
                                                        <p>MySQLデータベースのバックアップデータを取得することができます。</p>
                                                        <p>詳しくは、<a href="man_db_download.php">自動バックアップからのデータ取得</a>、<a href="man_db_man_backup.php">現在のMySQLをダウンロード</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-k04" class="block_ttl">MySQL復元</h5>
                                                    <div class="block_body">
                                                        <p>自動バックアップデータを用いて、MySQLデータベースを復元することができます。</p>
                                                        <p>詳しくは、<a href="man_db_restore.php">自動バックアップからの復元</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-k05" class="block_ttl">phpMyAdmin</h5>
                                                    <div class="block_body">
                                                        <p>データベースの編集を行うことができます。<br> 詳しくは、
                                                            <a href="man_db_myadmin.php">phpMyAdmin</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-l">ドメイン</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-l01" class="block_ttl">ドメイン設定</h5>
                                                    <div class="block_body">
                                                        <p>独自ドメインをサーバーアカウントに設定することができます。</p>
                                                        <p class="note">※ドメイン設定を行うには、当サービスまたは他社サービスにおいて、事前にドメインを取得（所有）している必要があります。</p>
                                                        <p>詳しくは、<a href="man_domain_setting.php">ドメイン設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-l02" class="block_ttl">サブドメイン設定</h5>
                                                    <div class="block_body">
                                                        <p>「好きな文字列.独自ドメイン」というサブドメインを発行することができます。<br> 詳しくは、
                                                            <a href="man_domain_subdomain_setting.php">サブドメイン設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-l03" class="block_ttl">DNSレコード設定</h5>
                                                    <div class="block_body">
                                                        <p>DNSレコードの編集が行えます。<br> 詳しくは、
                                                            <a href="man_domain_dns_setting.php">DNSレコード編集</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-l04" class="block_ttl">SSL設定</h5>
                                                    <div class="block_body">
                                                        <p><a href="../functions/service_ssl.php#free-ssl">無料独自SSL</a>の設定、SSLの設定状況を確認することができます。<br> 詳しくは、
                                                            <a href="man_server_ssl.php">SSL設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-l05" class="block_ttl">動作確認URL</h5>
                                                    <div class="block_body">
                                                        <p>サイトの移転時などに、ネームサーバー変更前の動作を確認するためのURLを発行することができます。<br> 詳しくは、
                                                            <a href="man_domain_checkproxy.php">動作確認URL</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-previous-m">アクセス解析</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-previous-m01" class="block_ttl">アクセス解析</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で設定が可能です。<br> 詳しくは、
                                                            <a href="man_server_analyzer.php">アクセス解析</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-m02" class="block_ttl">アクセスログ</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で、アクセスログをダウンロードすることができます。<br> 詳しくは、
                                                            <a href="man_server_log.php">アクセスログ</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-previous-m03" class="block_ttl">エラーログ</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で、エラーログをダウンロードすることができます。<br> 詳しくは、
                                                            <a href="man_server_logerror.php">エラーログ</a>をご参照ください。</p>
                                                    </div>
                                                </section>



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
                                                <li><a href="#link-a">サーバーパネルとは</a>
                                                </li>
                                                <li><a href="#link-b">ログイン方法</a>
                                                    <ul>
                                                        <li><a href="#link-b01">画像認証（reCAPTCHA認証）について</a></li>
                                                        <li><a href="#link-b02">「ログインする」ボタンを押しても画面が切り替わらない場合</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-d">サーバー</a>
                                                    <ul>
                                                        <li><a href="#link-d01">パスワード変更</a></li>
                                                        <li><a href="#link-d02">サーバー情報</a></li>
                                                        <li><a href="#link-d03">自動バックアップの取得・復元</a></li>
                                                        <li><a href="#link-d08">手動バックアップ作成</a></li>
                                                        <li><a href="#link-d04">Cron設定</a></li>
                                                        <li><a href="#link-d05">SSH設定</a></li>
                                                        <li><a href="#link-d06">二段階認証設定</a></li>
                                                        <li><a href="#link-d07">リソースモニター</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-e">ホームページ</a>
                                                    <ul>
                                                        <li><a href="#link-e01">アクセス制限</a></li>
                                                        <li><a href="#link-e02">エラーページ設定</a></li>
                                                        <li><a href="#link-e03">MIME設定</a></li>
                                                        <li><a href="#link-e04">.htaccess編集</a></li>
                                                        <li><a href="#link-e05">サイト転送設定</a></li>
                                                        <li><a href="#link-e06">アクセス拒否設定</a></li>
                                                        <li><a href="#link-e07">CGIツール</a></li>
                                                        <li><a href="#link-e08">簡単インストール</a></li>
                                                        <li><a href="#link-e09">Webフォント設定</a></li>
                                                        <li><a href="#link-e10">ads.txt</a></li>
                                                        <li><a href="#link-e11">XPageSpeed設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-f">高速化</a>
                                                    <ul>
                                                        <li><a href="#link-f01">Xアクセラレータ</a></li>
                                                        <li><a href="#link-f02">サーバーキャッシュ設定</a></li>
                                                        <li><a href="#link-f03">ブラウザキャッシュ設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-g">WordPress</a>
                                                    <ul>
                                                        <li><a href="#link-g01">WordPress簡単インストール</a></li>
                                                        <li><a href="#link-g02">WordPress簡単移行</a></li>
                                                        <li><a href="#link-g03">WordPressセキュリティ設定</a></li>
                                                        <li><a href="#link-g04">WordPressテーマ管理</a></li>
                                                        <li><a href="#link-g05">WordPressリカバリー</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-h">PHP</a>
                                                    <ul>
                                                        <li><a href="#link-h01">PHP Ver.切替</a></li>
                                                        <li><a href="#link-h02">php.ini設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-i">メール</a>
                                                    <ul>
                                                        <li><a href="#link-i01">メールアカウント設定</a></li>
                                                        <li><a href="#link-i02">迷惑メールフィルタ設定</a></li>
                                                        <li><a href="#link-i03">自動応答設定</a></li>
                                                        <li><a href="#link-i04">SMTP認証の国外アクセス制限設定</a></li>
                                                        <li><a href="#link-i05">メールの振り分け</a></li>
                                                        <li><a href="#link-i06">メーリングリスト</a></li>
                                                        <li><a href="#link-i07">メールマガジン</a></li>
                                                        <li><a href="#link-i08">DKIM設定</a></li>
                                                        <li><a href="#link-i09">SPF設定</a></li>
                                                        <li><a href="#link-i10">DMARC設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-j">FTP</a>
                                                    <ul>
                                                        <li><a href="#link-j01">FTPアカウント設定</a></li>
                                                        <li><a href="#link-j02">FTP制限設定</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-k">データベース</a>
                                                    <ul>
                                                        <li><a href="#link-k01">MySQL設定</a></li>
                                                        <li><a href="#link-k02">MySQLバックアップ取得・復元</a></li>
                                                        <li><a href="#link-k03">phpMyAdmin</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-l">ドメイン</a>
                                                    <ul>
                                                        <li><a href="#link-l01">ドメイン設定</a></li>
                                                        <li><a href="#link-l02">サブドメイン設定</a></li>
                                                        <li><a href="#link-l03">DNSレコード設定</a></li>
                                                        <li><a href="#link-l04">SSL設定</a></li>
                                                        <li><a href="#link-l05">動作確認URL</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-m">アクセス解析</a>
                                                    <ul>
                                                        <li><a href="#link-m01">アクセス解析</a></li>
                                                        <li><a href="#link-m02">アクセスログ</a></li>
                                                        <li><a href="#link-m03">エラーログ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#link-n">セキュリティ</a>
                                                    <ul>
                                                        <li><a href="#link-n01">Web改ざん検知</a></li>
                                                        <li><a href="#link-n02">WAF設定</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="link-box">
                                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_server.php">サーバーパネルに関する「よくある質問」</a></li>
                                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress簡単移行に関する「よくある質問」</a></li>
                                        </ul>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-a">サーバーパネルとは</h4>
                                            <div class="section_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>は、サーバーの各種設定（メールアカウントの発行・ドメインの設定など）を行うための管理パネルです。</p>
                                                <p><img class="img" src="../img/manual/man_tool_server_1.png?date=2410" alt="サーバーパネルのスクリーンショット">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                                            <div class="section_body">
                                                <p>
                                                    下記URLよりサーバーパネルへのログインが可能です。<br>
                                                    XServerアカウントID（ご登録メールアドレス）/XServerアカウントパスワードでログインをお試しください。<br>
                                                    ※メインFTPアカウントのユーザー名とパスワード（サーバーIDとサーバーパスワード）でもログインすることが可能です。
                                                </p>
                                                <p><i class="ico ico_square-fill"></i>サーバーパネル ログインURL<br>
                                                    <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">
                                                        <?php print $SECURE_URL; ?>xapanel/login/xserver/server/</a>
                                                </p>
                                            </div>
                                            <h5 id="link-b01" class="block_ttl">画像認証（reCAPTCHA認証）について</h5>
                                            <div class="section_body">
                                                <p>
                                                    お使いの環境やアクセス状況等によって、画像認証（reCAPTCHA認証）が表示される場合があります。<br>
                                                    画像が表示された場合は、画面上部に表示される質問内容についてご回答をお願いいたします。
                                                </p>
                                                <p>画像認証(reCAPTCHA認証)画面例</p>
                                                <p><img class="img" src="../img/manual/man_tool_server_2.png?date=2410" alt="reCAPTCHA画面の例"></p>
                                            </div>

                                            <h5 id="link-b02" class="block_ttl">「ログインする」ボタンを押しても画面が切り替わらない場合</h5>
                                            <div class="section_body">
                                                <p>
                                                    以下のサイトに対してJavaScriptが無効になっている場合、ログインができません。<br>
                                                    https://*.xserver.ne.jp<br>
                                                    https://www.google.com<br>
                                                    https://www.gstatic.com<br>
                                                    <br>
                                                    JavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-d">サーバー</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-d01" class="block_ttl">パスワード変更</h5>
                                                    <div class="block_body">
                                                        <p>サーバーIDでサーバーパネルにログインする際に使用する「サーバーパスワード」を変更することができます。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d02" class="block_ttl">サーバー情報</h5>
                                                    <div class="block_body">
                                                        <p>サーバーのCPU情報や各プログラムのバージョン、perlモジュールやコマンドパスの一覧を確認することができます。</p>
                                                    </div>
                                                </section>


                                                <section class="block">
                                                    <h5 id="link-d03" class="block_ttl">自動バックアップの取得・復元</h5>
                                                    <div class="block_body">
                                                        <p>過去14日間分の「サーバー領域データ（Web・メールデータ）」の自動バックアップデータについて、取得や復元を行うことができます。</p>
                                                        <p>また、「<a href="../functions/service_backup.php">自動バックアップ</a>」におけるデータのバックアップ状況の確認も行うことができます。</p>
                                                        <p>詳しくは、<a href="man_server_download.php">自動バックアップからのデータ取得</a>、<a href="man_server_restore.php">自動バックアップからのデータ復元</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d08" class="block_ttl">手動バックアップ作成</h5>
                                                    <div class="block_body">
                                                        <p>サーバーアカウント内の各種ディレクトリのバックアップデータを作成することができます。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d04" class="block_ttl">Cron設定</h5>
                                                    <div class="block_body">
                                                        <p>設定時刻に定期的に指定コマンドを動作させるCronの設定を行えます。<br> 詳しくは、
                                                            <a href="man_program_cron.php">Cron設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d05" class="block_ttl">SSH設定</h5>
                                                    <div class="block_body">
                                                        <p>SSHを利用するための有効(ON)・無効(OFF)の切替、SSH接続用の公開鍵認証用鍵ペアの生成と公開鍵の登録ができます。<br> 詳しくは、
                                                            <a href="man_server_ssh.php">SSH設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d06" class="block_ttl">二段階認証設定</h5>
                                                    <div class="block_body">
                                                        <p>二段階認証の設定が可能です。通常のログインパスワード認証に加えて、認証コード生成アプリに表示されるワンタイムパスワードを入力することで、アカウントの安全性を強化することができます。<br> 詳しくは、
                                                            <a href="man_order_twostepauth.php">二段階認証設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-d07" class="block_ttl">リソースモニター</h5>
                                                    <div class="block_body">
                                                        <p>当日中のCPU・メモリ・転送量の利用状況を過去3ヶ月分確認することができます。<br> 詳しくは、
                                                            <a href="man_server_resource_information.php">リソースモニター</a>をご参照ください。</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-e">ホームページ</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-e01" class="block_ttl">アクセス制限</h5>
                                                    <div class="block_body">
                                                        <p>各フォルダにパスワード認証（BASIC認証）を設定することができます。<br> 詳しくは、
                                                            <a href="man_server_limit.php">アクセス制限</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e02" class="block_ttl">エラーページ設定</h5>
                                                    <div class="block_body">
                                                        <p>存在しないファイルへアクセスした際に表示されるエラーページ（404エラーなど）を、独自のページに設定することができます。<br> 詳しくは、
                                                            <a href="man_server_errorpage.php">エラーページ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e03" class="block_ttl">MIME設定</h5>
                                                    <div class="block_body">
                                                        <p>拡張子によって処理内容を指定するMIMEの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_mime.php">MIME設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e04" class="block_ttl">.htaccess編集</h5>
                                                    <div class="block_body">
                                                        <p>.htaccessの編集ができます。<br> 詳しくは、
                                                            <a href="man_server_htaccess.php">.htaccess編集</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e05" class="block_ttl">サイト転送設定</h5>
                                                    <div class="block_body">
                                                        <p>指定アドレスに対してのアクセスを別のサイトに転送することができます。<br> 詳しくは、
                                                            <a href="man_server_transfer.php">サイト転送設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e06" class="block_ttl">アクセス拒否設定</h5>
                                                    <div class="block_body">
                                                        <p>指定したIPアドレスからのアクセスを拒否することができます。<br> 詳しくは、
                                                            <a href="man_server_ipcheck.php">アクセス拒否設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e07" class="block_ttl">CGIツール</h5>
                                                    <div class="block_body">
                                                        <p>カウンター、メールフォームを設置することができます。<br> メールフォームの設置については、
                                                            <a href="man_install_cgi_mailform.php">メールフォーム</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e08" class="block_ttl">簡単インストール</h5>
                                                    <div class="block_body">
                                                        <p>EC-CUBEなどの人気プログラムを、ワンクリックでインストールすることができます。<br> 詳しくは、
                                                            <a href="man_install_auto.php">簡単インストールについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e09" class="block_ttl">Webフォント設定</h5>
                                                    <div class="block_body">
                                                        <p>Webフォントの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_webfont_wp.php">Webフォント設定(WordPressプラグインでのご利用)</a>、<a href="man_server_webfont_html.php">Webフォント設定(HTML記述形式でのご利用)</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e10" class="block_ttl">ads.txt</h5>
                                                    <div class="block_body">
                                                        <p>ads.txtの設定を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_ads.php">ads.txt</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-e11" class="block_ttl">XPageSpeed設定</h5>
                                                    <div class="block_body">
                                                        <p>Webサイトが表示されるタイミングで自動的に表示データの最適化を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_xpagespeed.php">XPageSpeed設定について</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-f">高速化</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h4 id="link-f01" class="block_ttl">Xアクセラレータ</h4>
                                                    <div class="block_body">
                                                        <p>サイト表示を高速化すると共に同時アクセス数を大幅に拡張し、大量のアクセスに対応します。<br>
                                                            詳しくは<a href="man_server_xaccelerator.php">Xアクセラレータ</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h4 id="link-f02" class="block_ttl">サーバーキャッシュ設定</h4>
                                                    <div class="block_body">
                                                        <p>サーバー上でファイルのキャッシュが作成され、Webサイトの表示速度・同時アクセス数を向上します。<br>
                                                            詳しくは<a href="man_server_cache.php">サーバーキャッシュ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h4 id="link-f03" class="block_ttl">ブラウザキャッシュ設定</h4>
                                                    <div class="block_body">
                                                        <p>アクセス時にブラウザのキャッシュデータを読み込み、表示速度の向上および転送量の軽減が可能です。<br>
                                                            詳しくは、<a href="man_server_expires.php">ブラウザキャッシュ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-g">WordPress</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-g01" class="block_ttl">WordPress簡単インストール</h5>
                                                    <div class="block_body">
                                                        <p>人気のプログラムWordPressを、ワンクリックでインストールすることができます。<br> 詳しくは、
                                                            <a href="man_install_auto_word.php">簡単インストールについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-g02" class="block_ttl">WordPress簡単移行</h5>
                                                    <div class="block_body">
                                                        <p>他社サーバーからのサイト移転や、運用中のWordPressを別のURLに変更したい場合などにご利用いただけます。<br>詳しくは、 <a href="man_install_transfer_wp.php">WordPress簡単移行</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-g03" class="block_ttl">WordPressセキュリティ設定</h5>
                                                    <div class="block_body">
                                                        <p>WordPressに対する不正なアクセスを防止し、セキュリティを強化することができます。<br> 詳しくは、
                                                            <a href="man_server_wpsecurity.php">WordPressセキュリティ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-g04" class="block_ttl">WordPressテーマ管理</h5>
                                                    <div class="block_body">
                                                        <p>国内で人気のWordPressテーマを、ダウンロードの手間なしで直接WordPressにインストールすることができます。<br>
                                                            詳しくは、<a href="man_wp_theme_install.php">インストール済みWordPressにテーマをインストール</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-g05" class="block_ttl">WordPressリカバリー</h5>
                                                    <div class="block_body">
                                                        <p>WordPressで起こった問題に対し、復旧やリセットを行うことができます。<br>
                                                            詳しくは、<a href="man_server_wprecovery.php">WordPressリカバリー</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-h">PHP</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-h01" class="block_ttl">PHP Ver.切替</h5>
                                                    <div class="block_body">
                                                        <p>PHPのバージョンを切り替えることができます。<br> 詳しくは、
                                                            <a href="man_program_php_ver.php">PHPのバージョンについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-h02" class="block_ttl">php.ini設定</h5>
                                                    <div class="block_body">
                                                        <p>ドメインごとに、php.iniの設置と編集を行うことができます。<br> 詳しくは、
                                                            <a href="man_server_phpini_edit.php">php.ini設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-i">メール</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-i01" class="block_ttl">メールアカウント設定</h5>
                                                    <div class="block_body">
                                                        <p>メールアカウントの作成、転送設定などを行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_add.php">メールアカウント設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i02" class="block_ttl">迷惑メールフィルタ設定</h5>
                                                    <div class="block_body">
                                                        <p>迷惑メール対策ソフトウェア SpamAssassin （スパムアサシン）や Cloudmark （クラウドマーク）を有効にするかどうかの設定が行えます。<br> 詳しくは、
                                                            <a href="man_mail_spam_setting.php">迷惑メールフィルタ設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i03" class="block_ttl">自動応答設定</h5>
                                                    <div class="block_body">
                                                        <p>あらかじめ用意した定型文のメールを自動的に送信者へ返送することができます。<br> 詳しくは、
                                                            <a href="man_mail_mailreply.php">自動応答設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i04" class="block_ttl">SMTP認証の国外アクセス制限設定</h5>
                                                    <div class="block_body">
                                                        <p>国外ネットワークからの不正なメール送信を制限し、セキュリティを強化することができます。<br> 詳しくは、
                                                            <a href="man_mail_jpcheck.php">SMTP認証の国外アクセス制限設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i05" class="block_ttl">メールの振り分け</h5>
                                                    <div class="block_body">
                                                        <p>指定条件に該当するメールに対して、フィルタリングや特定メールアドレスへの転送など、様々な処理を行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_sorting.php">メールの振り分け</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i06" class="block_ttl">メーリングリスト</h5>
                                                    <div class="block_body">
                                                        <p>メーリングリストの作成・運用管理を行うことができます。<br> 詳しくは、
                                                            <a href="man_mail_mailinglist.php">メーリングリストについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i07" class="block_ttl">メールマガジン</h5>
                                                    <div class="block_body">
                                                        <p>メールマガジンの作成・運用管理を行うことができます。<br> 詳しくは、<a href="man_mail_mailmagazine.php">メールマガジンについて</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i08" class="block_ttl">DKIM設定</h5>
                                                    <div class="block_body">
                                                        <p>送信メールの改ざん・なりすましを防ぐことで、送信メールの信頼性向上やメール到達率の向上が期待されます。<br> 詳しくは、
                                                            <a href="man_mail_dkim.php">DKIM設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i09" class="block_ttl">SPF設定</h5>
                                                    <div class="block_body">
                                                        <p>SPF設定の状況確認と設定の変更を行うことができます。<br>
                                                            詳しくは、<a href="man_mail_spf.php">SPF設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-i10" class="block_ttl">DMARC設定</h5>
                                                    <div class="block_body">
                                                        <p>対象ドメイン名を使用した不正メール送信を制御することができます。<br>
                                                            詳しくは、<a href="man_mail_dmarc.php">DMARC設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-j">FTP</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-j01" class="block_ttl">FTPアカウント設定</h5>
                                                    <div class="block_body">
                                                        <p>特定フォルダへのアクセス権を持つFTPアカウントを作成することができます。<br> 詳しくは、
                                                            <a href="man_ftp_add.php">FTPアカウント設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-j02" class="block_ttl">FTP制限設定</h5>
                                                    <div class="block_body">
                                                        <p>FTP接続を許可するIPアドレスを追加できます。<br> 追加をすると、接続を許可したIPアドレスのみ接続が可能となり、FTPによる不正アクセスのリスクを低減することができます。
                                                            <br> 詳しくは、
                                                            <a href="man_ftp_id.php">FTP制限設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-k">データベース</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-k01" class="block_ttl">MySQL設定</h5>
                                                    <div class="block_body">
                                                        <p>データベースの作成、MySQLユーザの作成、データベースのエクスポートなどの、MySQLに関する設定ができます。</p>
                                                        <p>詳しくは、<a href="man_db_setting.php">MySQLの設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-k02" class="block_ttl">MySQLバックアップ取得・復元</h5>
                                                    <div class="block_body">
                                                        <p>MySQLデータベースのバックアップデータを取得や復元を行うことができます。</p>
                                                        <p>詳しくは、<a href="man_db_download.php">自動バックアップからのデータ取得</a>、<a href="man_db_man_backup.php">現在のMySQLをダウンロード</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-k03" class="block_ttl">phpMyAdmin</h5>
                                                    <div class="block_body">
                                                        <p>データベースの編集を行うことができます。<br> 詳しくは、
                                                            <a href="man_db_myadmin.php">phpMyAdmin</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-l">ドメイン</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-l01" class="block_ttl">ドメイン設定</h5>
                                                    <div class="block_body">
                                                        <p>独自ドメインをサーバーアカウントに設定することができます。</p>
                                                        <p class="note">※ドメイン設定を行うには、当サービスまたは他社サービスにおいて、事前にドメインを取得（所有）している必要があります。</p>
                                                        <p>詳しくは、<a href="man_domain_setting.php">ドメイン設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-l02" class="block_ttl">サブドメイン設定</h5>
                                                    <div class="block_body">
                                                        <p>「好きな文字列.独自ドメイン」というサブドメインを発行することができます。<br> 詳しくは、
                                                            <a href="man_domain_subdomain_setting.php">サブドメイン設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-l03" class="block_ttl">DNSレコード設定</h5>
                                                    <div class="block_body">
                                                        <p>DNSレコードの編集が行えます。<br> 詳しくは、
                                                            <a href="man_domain_dns_setting.php">DNSレコード編集</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-l04" class="block_ttl">SSL設定</h5>
                                                    <div class="block_body">
                                                        <p><a href="../functions/service_ssl.php#free-ssl">無料独自SSL</a>の設定、SSLの設定状況を確認することができます。<br> 詳しくは、
                                                            <a href="man_server_ssl.php">SSL設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-l05" class="block_ttl">動作確認URL</h5>
                                                    <div class="block_body">
                                                        <p>サイトの移転時などに、ネームサーバー変更前の動作を確認するためのURLを発行することができます。<br> 詳しくは、
                                                            <a href="man_domain_checkproxy.php">動作確認URL</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-m">アクセス解析</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-m01" class="block_ttl">アクセス解析</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で設定が可能です。<br> 詳しくは、
                                                            <a href="man_server_analyzer.php">アクセス解析</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-m02" class="block_ttl">アクセスログ</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で、アクセスログをダウンロードすることができます。<br> 詳しくは、
                                                            <a href="man_server_log.php">アクセスログ</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-m03" class="block_ttl">エラーログ</h5>
                                                    <div class="block_body">
                                                        <p>ドメインおよびサブドメイン単位で、エラーログをダウンロードすることができます。<br> 詳しくは、
                                                            <a href="man_server_logerror.php">エラーログ</a>をご参照ください。</p>
                                                    </div>
                                                </section>



                                            </div>
                                        </section>
                                        <!-- /.section -->

                                        <section class="section">
                                            <h4 class="section_ttl" id="link-n">セキュリティ</h4>
                                            <div class="section_body">

                                                <section class="block">
                                                    <h5 id="link-m01" class="block_ttl">Web改ざん検知設定</h5>
                                                    <div class="block_body">
                                                        <p>クラウドセキュア株式会社のWeb改ざん検知サービスを利用し、マルウェアやWebサイトの改ざん等を検知します。<br>
                                                            詳しくは、<a href="man_server_security_scan.php">Web改ざん検知設定</a>をご参照ください。</p>
                                                    </div>
                                                </section>

                                                <section class="block">
                                                    <h5 id="link-m02" class="block_ttl">WAF設定</h5>
                                                    <div class="block_body">
                                                        <p>Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することが可能なWAF(Webアプリケーションファイアウォール)を設定できる機能です。<br>
                                                            詳しくは、<a href="man_server_waf.php">WAF設定</a>をご参照ください。</p>
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