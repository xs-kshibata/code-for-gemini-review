<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>不正アクセス（ファイルの改ざん、不正なファイル設置）について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜不正アクセス（ファイルの改ざん、不正なファイル設置）の対応方法を記載しています。">

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
            
                <h3 class="sub-ttl">不正アクセス（ファイルの改ざん、不正なファイル設置）について</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                        <div class="toc-list">
                        <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">不正アクセス（ファイルの改ざん、不正なファイル設置）とは</a></li>
                                <li><a href="#link-previous-b">不正アクセス（ファイルの改ざん、不正なファイル設置）の原因</a></li>
                                <li><a href="#link-previous-c">不正アクセス（ファイルの改ざん、不正なファイル設置）された際の対処方法</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">セキュリティチェック</a></li>
                                        <li><a href="#link-previous-c02">不正なコンテンツの削除</a></li>
                                        <li><a href="#link-previous-c03">※ホームページ再開の復旧作業</a></li>
                                        <li><a href="#link-previous-c04">管理パスワードの変更</a></li>
                                        <li><a href="#link-previous-c05">サブFTPアカウントのパスワードの変更／削除</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">不正アクセスの予防策</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">二段階認証の設定</a></li>
                                        <li><a href="#link-previous-d03">ソフトウェア更新</a></li>
                                        <li><a href="#link-previous-d04">ご利用中のWordPressや各プラグイン、テーマファイルの更新</a></li>
                                        <li><a href="#link-previous-d05">WordPressセキュリティ設定</a></li>
                                        <li><a href="#link-previous-d06">WAF設定</a></li>
                                        <li><a href="#link-previous-d07">php.ini設定</a></li>

                                    </ol>
                                </li>
                            </ul>
                        </div>

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-a">不正アクセス（ファイルの改ざん、不正なファイル設置）とは</h4>
                            <div class="section_body">
                                <p>不正アクセスとは、アクセス権限を持たない悪意のある人物がサーバーや情報システムの内部へ不正に侵入する行為を指します。<br>
                                    不正アクセスによりファイルの改ざん、不正なファイルの設置がされると、意図しないコンテンツが公開されてしまったり、閲覧者のPCやスマートフォンなどがウイルス感染してしまったり、個人情報が窃取されてしまうといった恐れがあります。</p>

                                <p><img class="img" src="../img/manual/previous/man_malicious_access_1.png" alt="不正アクセスの流れ"></p>
                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-b">不正アクセス（ファイルの改ざん、不正なファイル設置）の原因</h4>
                            <div class="section_body">
                                <p>不正アクセスの主な原因には以下の2通りがあります。</p>

                                <ul class="ul">
                                    <li>ログイン情報が流出する
                                        <ul>
                                            <li>- ID・パスワードを推測される</li>
                                            <li>- ID・パスワードを盗み見られる</li>
                                            <li>- フィッシングやマルウェア、他システムとの使い回しによりID・パスワードが漏洩する</li>
                                        </ul>
                                    </li>
                                    <li>セキュリティの脆弱性を突いたサイバー攻撃<br>
                                        <p class="note">※脆弱性とは、プログラムの不具合や設計上のミスが原因となって発生するセキュリティ上の欠陥のこと。</p>
                                    </li>
                                </ul>

                                <p>いずれの原因についても、事前に対策を実施しておくことで不正アクセスを防止したり、被害を最小限に抑えることができます。不正アクセスを防ぐ対策については、「<a href="#link-previous-d">不正アクセスの予防策</a>」をご覧ください。</p>
                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-c">不正アクセス（ファイルの改ざん、不正なファイル設置）された際の対処方法</h4>
                            <div class="section_body">

                                <p><img class="img" src="../img/manual/previous/man_malicious_access_2.png" alt="不正アクセスされた際の対処方法"></p>

                                <p>不正アクセス（ファイルの改ざん、不正なファイル設置）の被害を受けてしまった場合、被害の拡大を防ぐため早急に以下をご対応ください。</p>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c01">セキュリティチェック</h5>
                                    <div class="block_body">
                                        <p>セキュリティソフトやOS搭載のセキュリティ機能（Windows Defenderなど）にて、ご利用中の端末が危険なウイルスに感染していないか確認してください。</p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c02">不正なコンテンツの削除</h5>
                                    <div class="block_body">
                                        <p>ファイルマネージャまたはFTPソフトを用い、以下いずれかの方法にて不正なコンテンツを削除してください。</p>

                                        <p>◇<a href="man_tool_file.php">マニュアル - ファイルマネージャ</a></p>

                                        <p>◇<a href="man_ftp_setting.php">マニュアル - FTPソフトの設定</a></p>
                                        <p class="note">※不正なコンテンツを削除する前にホームページの復旧作業について「<a href="#link-previous-c03">※ホームページ再開の復旧作業</a>」をご確認ください。</p>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>【推奨】すべてのファイルの削除</dt>
                                            <dd class="pl0">
                                                <p>お客様のサーバーアカウント内のすべてのファイルを削除してください。<br>
                                                    不正アクセスの被害に遭った場合、不正なファイルの他にバックドア（不正アクセス容易とする侵入経路）が設置されている可能性が非常に高くなります。<br>
                                                    そのため、一度すべてのファイルを削除していただくことを強く推奨しています。
                                                </p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>不正ファイルの削除</dt>
                                            <dd class="pl0">
                                                <p>弊社にて不正アクセスの発生を検知した場合、件名「【エックスサーバー】■重要■ お客様のサーバーアカウントにおける不正なアクセスの検知および制限の実施について(xsvc************)」といったメールを送信しています。<br>
                                                    そのメール内に記載してあります、[不正プログラムと思われるファイル一覧]のすべてのファイルについて削除を実施してください。</p>
                                                <p class="note">※[不正プログラムと思われるファイル一覧]に記載されているファイル以外にも不正なファイルが存在する可能性があります。必ずお客様ご自身ですべてのファイルを精査していただきますようお願いいたします。</p>
                                            </dd>
                                        </dl>

                                        <div class="border border_yellow">
                                            ※お客様ご自身ですべてのファイルを精査いただき、ドメイン名のフォルダより上の階層に不正ファイルが設置されていない場合、以下の方法でも不正なコンテンツを削除することができます。
                                        </div>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>該当ドメインの初期化</dt>
                                            <dd class="pl0">
                                                <p>サーバーパネル内の「ドメイン設定」にて該当ドメインの「初期化」をクリックし、処理方法「ウェブ領域・設定の初期化」を選択してください。<br>
                                                    ドメイン初期化により、該当ドメインのウェブ領域に設置されているすべてのファイルが削除されます。なお、本作業によるデータベースの初期化・削除はありません。
                                                </p>
                                                <p>◇<a href="man_domain_reset.php">マニュアル - ドメインの初期化</a></p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>WordPress初期化</dt>
                                            <dd class="pl0">
                                                <p>サーバーパネル内の「WordPress初期化」にて該当WordPressの「初期化」をクリックしてください。</p>
                                                <p class="note">※WordPress初期化により不正コンテンツを削除できる場合のみ「WordPress初期化」メニューは表示されます。</p>
                                                <p>WordPress初期化により、以下を除くすべてのWordPressデータが初期化されます。</p>
                                                <ul class="ul">
                                                    <li>投稿記事などのMySQLデータベースの内容</li>
                                                    <li>メディアファイル（/wp-content/uploads/配下のファイル）</li>
                                                </ul>
                                                <p>なお、本作業にてプラグインやテーマファイルが削除されるため、再インストールや再設定が必要となります。</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>WordPressリカバリー</dt>
                                            <dd class="pl0">
                                                <p>サーバーパネル内の「WordPressリカバリー」にて該当WordPressの「復旧に進む」をクリックし、以下いずれかの項目をを選択、実行してください。</p>
                                                <ul class="ul">
                                                    <li>不正アクセスを受けたWordPressの復旧<br>
                                                        投稿記事などのMySQLデータベースの内容、メディアファイル、インストールされているプラグインやテーマを全て引き継ぎ、対象のWordPressについてのみ補正を行います。
                                                    </li>
                                                    <li>WordPress本体のリセット<br>
                                                        引き継ぐデータ（データベース／メディアデータ、テーマ／プラグイン）を選択したうえでWordPress本体をリセットします。
                                                    </li>
                                                </ul>
                                                <p>◇<a href="man_server_wprecovery.php">マニュアル - WordPressリカバリー</a></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c03">※ホームページ再開の復旧作業</h5>
                                    <div class="block_body">
                                        <p>以下いずれかの方法にてホームページ再開の復旧作業を実施してください。</p>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>データファイルのアップロード</dt>
                                            <dd class="pl0">
                                                <p>不正アクセスが発生する以前の改ざんされていないクリーンなデータをアップロードしてください。</p>
                                                <aside class="msg msg_caution">
                                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>データのアップロード時における注意事項</h5>
                                                    <div class="msg_body">
                                                        <p>不正アクセス発生日時付近のバックアップなどからデータをアップロードする場合、必ず以下いずれかの方法にてファイルが改ざんされていないことを確認してください。</p>
                                                        <ul class="ul">
                                                            <li>手元に保管しているオリジナルのファイルと内容を比較する</li>
                                                            <li>セキュリティソフトにてファイルスキャンを実施する</li>
                                                        </ul>
                                                        <p>改ざんされているファイルを再びアップロードしてしまうと、再度不正アクセスされてしまう可能性が非常に高くなります。</p>
                                                    </div>
                                                </aside>
                                                <p>不正アクセスの再発を防止するためには、すべてのデータをもう一度新規に作成していただくことが最善の方法となります。</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>データベース再利用による復旧（WordPressの場合）</dt>
                                            <dd class="pl0">
                                                <p>不正なコンテンツの削除を実施する前に、WordPressの「wp-config.php」ファイル内に記載されているMySQL関連の情報をメモなどに控えておいてください。</p>
                                                <ul class="ul">
                                                    <li>MySQLデータベース</li>
                                                    <li>MySQLデータベースユーザー</li>
                                                    <li>MySQLデータベースユーザーのパスワード</li>
                                                    <li>MySQLホスト</li>
                                                </ul>
                                                <p>不正なコンテンツ削除後は、公式サイト（<a href="https://ja.wordpress.org/" target="_blank" rel="nofollow">https://ja.wordpress.org/</a><i class="ico ico_new-window base-color"></i>）より最新版のWordPressを入手いただき、サーバー上にアップロードしてください。<br>
                                                    その後、先程控えておいたMySQL関連の情報を「wp-config.php」ファイルに再設定することで投稿記事などの復旧が可能です。<br>
                                                    なお、本作業後はプラグインやテーマファイルの再設定が必要となります。配布サイトから最新版をダウンロードしてください。</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>自動バックアップデータからの復旧</dt>
                                            <dd class="pl0">
                                                <p>サーバーパネル内の「バックアップ」機能により過去のデータは自動でバックアップされています。<br>
                                                    これによるデータ復元を行う場合は、必ず不正アクセスが発生する以前の日付のクリーンなバックアップデータを選択してください。<br>
                                                    バックアップ機能について詳しくは以下サポートページをご覧ください。</p>
                                                <p>◇<a href="../functions/service_backup.php">機能 - 自動バックアップ機能</a></p>
                                                <p>◇<a href="man_server_download.php">マニュアル - 自動バックアップからのデータ取得</a></p>
                                                <p>◇<a href="man_server_restore.php">マニュアル - 自動バックアップからのデータ復元</a></p>
                                                <p>なお、一部のお客様においてはファイル数過多などによる負荷が原因でバックアップ機能の対象から除外されている場合があります。</p>
                                                <aside class="msg msg_caution">
                                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>自動バックアップデータからの復旧における注意事項</h5>
                                                    <div class="msg_body">
                                                        <p>弊社がお送りしております、不正アクセス発生に関するメールについて、メール内に記載の日時が明確な不正アクセスの発生日時とは限りません。<br>
                                                            そのため、復元を検討している日付のバックアップデータについて、必ずお客様ご自身で改ざん・不正なファイル設置がないか精査いただき、問題ないことをご確認のうえ、復元していただきますようお願いいたします。<br>
                                                            また、バックアップデータから復旧いただきましても、不正アクセスの根本原因が解決されないうちは再発の可能性が非常に高くなります。<br>
                                                            後述の「<a href="#link-previous-d">不正アクセスの予防策</a>」についてもご対応いただきますようお願いいたします。
                                                        </p>
                                                    </div>
                                                </aside>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c04">管理パスワードの変更</h5>
                                    <div class="block_body">
                                        <p>XServerアカウントやサーバーパネル、WordPressなどの設置プログラムの管理パスワードを変更してください。<br>
                                            また、複数のサーバーIDや当社の他サービスをご契約されている方はすべてのアカウントについてパスワード変更していただくことを強く推奨しています。</p>
                                        <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServerアカウント パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>
                                        <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">サーバーパネル パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>

                                        <dl class="dl">
                                            <dt>WordPressの場合</dt>
                                            <dd class="pl0">
                                                <ol class="ol">
                                                    <li>
                                                        <p>WordPress管理画面を開き、左メニュー「ユーザー」-「プロフィール」をクリックしてください。画面下部にある「アカウント管理」にて新しいパスワードを設定し、「プロフィールを更新」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_access_3.png" alt="WordPress管理画面"></p>
                                                        <aside class="msg msg_caution">
                                                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>パスワード設定における注意事項</h5>
                                                            <div class="msg_body">
                                                                <p>以下のようなパスワードは第三者による推測が容易となるため避けてください。</p>
                                                                <ul class="ul">
                                                                    <li>IDやメールドレスと同じ文字列<br>
                                                                        　例: メールアドレスが「info@example.jp」でパスワードが「infoexample」</li>
                                                                    <li>数字のみや英字のみ<br>
                                                                        　例: 38984、aaabbb</li>
                                                                    <li>単純な文字列と数字の組み合わせ<br>
                                                                        　例: abc123</li>
                                                                    <li>辞書に載っている単語<br>
                                                                        　例: get</li>
                                                                    <li>よく使われるパスワード<br>
                                                                        　例: password、admin、qwerty</li>
                                                                    <li>過去に設定したものと同じパスワード</li>
                                                                    <li>他システムで使用しているものと同じパスワード</li>
                                                                </ul>
                                                                <p>以下の条件を満たす強固なパスワードを設定してください。</p>
                                                                <ul class="ul">
                                                                    <li>できるだけ長い文字列（最低8文字以上）</li>
                                                                    <li>英字（大文字、小文字）、数字を織り交ぜた完全ランダムな文字列</li>
                                                                    <li>記号「-(ハイフン)」、「.(ドット)」などを含む</li>
                                                                </ul>
                                                            </div>
                                                        </aside>
                                                    </li>
                                                    <li>
                                                        <p>左メニュー「ユーザー」-「ユーザー一覧」をクリックし、身に覚えのないユーザーや不要なユーザーが存在する場合はユーザー削除を実施してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_access_4.png" alt="WordPress管理画面"></p>
                                                    </li>
                                                </ol>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c05">サブFTPアカウントのパスワードの変更／削除</h5>
                                    <div class="block_body">
                                        <p>サブFTPアカウントを利用した不正アクセスの場合は、以下の方法にて該当のサブFTPアカウントのパスワード変更または削除をしてください。</p>

                                        <div class="serial-box">
                                            <section class="box">
                                                <h6 class="box_ttl">1. 「サブFTPアカウント設定」をクリック</h6>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「サブFTPアカウント設定」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_5.png" alt="「サブFTPアカウント設定」をクリック"></p>
                                                </div>
                                            </section>
                                            <section class="box">
                                                <h6 class="box_ttl">2. 該当ドメインの「選択する」をクリック</h6>
                                                <div class="box_body">
                                                    <p>該当ドメインの「選択する」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_6.png" alt="該当ドメインの「選択する」をクリック"></p>
                                                </div>
                                            </section>
                                            <section class="box">
                                                <h6 class="box_ttl">3. 該当サブFTPアカウントのパスワードの変更またはサブFTPアカウントの削除をする</h6>
                                                <div class="box_body">
                                                    <p>該当サブFTPアカウントの「変更」、「削除」より、パスワードの変更またはサブFTPアカウントの削除を実施してください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_7.png" alt="サブFTPアカウント一覧画面"></p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-d">不正アクセスの予防策</h4>
                            <div class="section_body">

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d01">二段階認証の設定</h5>
                                    <div class="block_body">
                                        <p>二段階認証とは、管理ツールなどへのログインの際に通常のパスワード認証に加え、ワンタイムパスワードを生成する認証コード生成アプリ（Google Authenticatorなど）のような第二の認証方法を設け、セキュリティを強化する仕組みです。二段階認証設定をしていただくことで通常のパスワード認証に比べ、不正アクセスを抑止できる可能性が高くなります。詳しくは以下サポートページをご覧ください。</p>
                                        <p>◇<a href="man_order_twostepauth.php">マニュアル - 二段階認証設定</a></p>
                                    </div>
                                </section>


                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d03">ソフトウェア更新</h5>
                                    <div class="block_body">
                                        <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。OSを含めソフトウェアは常に最新の状態を保つよう、アップデートをしてください。</p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d04">ご利用中のWordPressや各プラグイン、テーマファイルの更新</h5>
                                    <div class="block_body">
                                        <p>CMS（PHPなどで構成された動的サイト）に関しても定期的な更新により不正アクセスのリスク軽減に繋がります。以下の方法にて最新版へのアップデートをしてください。</p>

                                        <dl class="dl">
                                            <dt>WordPressの場合</dt>
                                            <dd class="pl0">
                                                <p>WordPress管理画面を開き、左メニュー「ダッシュボード」-「更新」をクリックしてください。<br>
                                                    新しいバージョンがある場合、以下のようなメッセージが表示されているので「バージョン *.*.*-ja に更新」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_8.png" alt="WordPressの更新画面"></p>
                                            </dd>
                                            <dt>プラグインの場合</dt>
                                            <dd class="pl0">
                                                <p>WordPress管理画面を開き、左メニュー「プラグイン」-「インストール済みプラグイン」をクリックしてください。<br>
                                                    新しいバージョンが利用できるプラグインでは以下のようなメッセージが表示されているので「更新」の箇所をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_9.png" alt="WordPressの更新画面"></p>
                                                <p>不要なプラグインがある場合は削除を実施してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_10.png" alt="WordPressの更新画面"></p>
                                            </dd>
                                            <dt>テーマの場合</dt>
                                            <dd class="pl0">
                                                <p>WordPress管理画面を開き、左メニュー「外観」-「テーマ」をクリックしてください。<br>
                                                    新しいバージョンが利用できるテーマでは以下のようなメッセージが表示されているので「今すぐ更新」の箇所をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_11.png" alt="WordPressのテーマ画面"></p>
                                                <p>不要なテーマがある場合は削除を実施してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_12.png" alt="WordPressのテーマ画面"></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d05">WordPressセキュリティ設定</h5>
                                    <div class="block_body">
                                        <p>WordPressセキュリティ設定とは、ご利用中のWordPressにおいて国外からの接続を制限したり、パスワードの総当り攻撃による第三者の不正ログインを防止するなどといった、不正アクセスに対するWordPressのセキュリティを強化する機能です。<br>
                                        詳しくは以下サポートページをご覧ください。</p>
                                        <p>◇<a href="man_server_wpsecurity.php">マニュアル - WordPressセキュリティ設定</a></p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d06">WAF設定</h5>
                                    <div class="block_body">
                                        <p>WAF（Webアプリケーションファイアウォール）設定とは、Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することができる機能です。詳しくは以下サポートページをご覧ください。</p>
                                        <p>◇<a href="man_server_waf.php">マニュアル - WAF設定</a></p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d07">php.ini設定</h5>
                                    <div class="block_body">
                                        <p>php.ini設定とは、PHPプログラムの全体的な動作や環境を設定するphp.iniファイルをドメインごとに編集することができる機能です。<br>
                                            お客様のWebサイトにてPHPプログラムをご利用中、かつ外部ファイルの読み込み/実行が必要でない場合、項目「その他の設定」より「allow_url_fopen」および「allow_url_include」を「無効（Off）」にしていただくことを強く推奨しています。</p>
                                        <p class="note">※XアクセラレータVer.2をご利用中の場合、「allow_url_fopen」は初期値である「有効（On）」が適用されます。該当の設定項目変更は強制ではありませんが、WEBサイトのセキュリティを重視される場合は、XアクセラレータVer.1に変更していただいたうえで「無効（Off）」にしていただきますようお願いいたします。</p>
                                        <p>◇<a href="man_server_phpini_edit.php">マニュアル - php.ini設定</a></p>
                                        <p>◇<a href="man_server_phpini_setting_item.php">マニュアル - php.ini設定で設定可能な項目について</a></p>
                                        <p>◇<a href="man_server_phpini_setting_ignore_item.php">マニュアル - XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></p>

                                    </div>
                                </section>

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
                                    <li><a href="#link-a">不正アクセス（ファイルの改ざん、不正なファイル設置）とは</a></li>
                                    <li><a href="#link-b">不正アクセス（ファイルの改ざん、不正なファイル設置）の原因</a></li>
                                    <li><a href="#link-c">不正アクセス（ファイルの改ざん、不正なファイル設置）された際の対処方法</a>
                                        <ol>
                                            <li><a href="#link-c01">セキュリティチェック</a></li>
                                            <li><a href="#link-c02">不正なコンテンツの削除</a></li>
                                            <li><a href="#link-c03">※ホームページ再開の復旧作業</a></li>
                                            <li><a href="#link-c04">管理パスワードの変更</a></li>
                                            <li><a href="#link-c05">FTPアカウントのパスワードの変更／削除</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">不正アクセスの予防策</a>
                                        <ol>
                                            <li><a href="#link-d01">二段階認証の設定</a></li>
                                            <li><a href="#link-d03">ソフトウェア更新</a></li>
                                            <li><a href="#link-d04">ご利用中のWordPressや各プラグイン、テーマファイルの更新</a></li>
                                            <li><a href="#link-d05">WordPressセキュリティ設定</a></li>
                                            <li><a href="#link-d06">WAF設定</a></li>
                                            <li><a href="#link-d07">php.ini設定</a></li>

                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">不正アクセス（ファイルの改ざん、不正なファイル設置）とは</h4>
                                <div class="section_body">
                                    <p>不正アクセスとは、アクセス権限を持たない悪意のある人物がサーバーや情報システムの内部へ不正に侵入する行為を指します。<br>
                                        不正アクセスによりファイルの改ざん、不正なファイルの設置がされると、意図しないコンテンツが公開されてしまったり、閲覧者のPCやスマートフォンなどがウイルス感染してしまったり、個人情報が窃取されてしまうといった恐れがあります。</p>

                                    <p><img class="img" src="../img/manual/man_malicious_access_1.png?date=2410" alt="不正アクセスの流れ"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">不正アクセス（ファイルの改ざん、不正なファイル設置）の原因</h4>
                                <div class="section_body">
                                    <p>不正アクセスの主な原因には以下の2通りがあります。</p>

                                    <ul class="ul">
                                        <li>ログイン情報が流出する
                                            <ul>
                                                <li>- ID・パスワードを推測される</li>
                                                <li>- ID・パスワードを盗み見られる</li>
                                                <li>- フィッシングやマルウェア、他システムとの使い回しによりID・パスワードが漏洩する</li>
                                            </ul>
                                        </li>
                                        <li>セキュリティの脆弱性を突いたサイバー攻撃<br>
                                            <p class="note">※脆弱性とは、プログラムの不具合や設計上のミスが原因となって発生するセキュリティ上の欠陥のこと。</p>
                                        </li>
                                    </ul>

                                    <p>いずれの原因についても、事前に対策を実施しておくことで不正アクセスを防止したり、被害を最小限に抑えることができます。不正アクセスを防ぐ対策については、「<a href="#link-d">不正アクセスの予防策</a>」をご覧ください。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">不正アクセス（ファイルの改ざん、不正なファイル設置）された際の対処方法</h4>
                                <div class="section_body">

                                    <p><img class="img" src="../img/manual/man_malicious_access_2.png?date=2410" alt="不正アクセスされた際の対処方法"></p>

                                    <p>不正アクセス（ファイルの改ざん、不正なファイル設置）の被害を受けてしまった場合、被害の拡大を防ぐため早急に以下をご対応ください。</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c01">セキュリティチェック</h5>
                                        <div class="block_body">
                                            <p>セキュリティソフトやOS搭載のセキュリティ機能（Windows Defenderなど）にて、ご利用中の端末が危険なウイルスに感染していないか確認してください。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c02">不正なコンテンツの削除</h5>
                                        <div class="block_body">
                                            <p>ファイルマネージャまたはFTPソフトを用い、以下いずれかの方法にて不正なコンテンツを削除してください。</p>

                                            <p>◇<a href="man_tool_file.php">マニュアル - ファイルマネージャ</a></p>

                                            <p>◇<a href="man_ftp_setting.php">マニュアル - FTPソフトの設定</a></p>
                                            <p class="note">※不正なコンテンツを削除する前にホームページの復旧作業について「<a href="#link-c03">※ホームページ再開の復旧作業</a>」をご確認ください。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>【推奨】すべてのファイルの削除</dt>
                                                <dd class="pl0">
                                                    <p>お客様のサーバーアカウント内のすべてのファイルを削除してください。<br>
                                                        不正アクセスの被害に遭った場合、不正なファイルの他にバックドア（不正アクセス容易とする侵入経路）が設置されている可能性が非常に高くなります。<br>
                                                        そのため、一度すべてのファイルを削除していただくことを強く推奨しています。
                                                    </p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>不正ファイルの削除</dt>
                                                <dd class="pl0">
                                                    <p>弊社にて不正アクセスの発生を検知した場合、件名「【エックスサーバー】■重要■ お客様のサーバーアカウントにおける不正なアクセスの検知および制限の実施について(xsvc************)」といったメールを送信しています。<br>
                                                        そのメール内に記載してあります、[不正プログラムと思われるファイル一覧]のすべてのファイルについて削除を実施してください。</p>
                                                    <p class="note">※[不正プログラムと思われるファイル一覧]に記載されているファイル以外にも不正なファイルが存在する可能性があります。必ずお客様ご自身ですべてのファイルを精査していただきますようお願いいたします。</p>
                                                </dd>
                                            </dl>

                                            <div class="border border_yellow">
                                                ※お客様ご自身ですべてのファイルを精査いただき、ドメイン名のフォルダより上の階層に不正ファイルが設置されていない場合、以下の方法でも不正なコンテンツを削除することができます。
                                            </div>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>該当ドメインの初期化</dt>
                                                <dd class="pl0">
                                                    <p>サーバーパネル内の「ドメイン設定」にて該当ドメインの「初期化」をクリックし、処理方法「ウェブ領域・設定の初期化」を選択してください。<br>
                                                        ドメイン初期化により、該当ドメインのウェブ領域に設置されているすべてのファイルが削除されます。なお、本作業によるデータベースの初期化・削除はありません。
                                                    </p>
                                                    <p>◇<a href="man_domain_reset.php">マニュアル - ドメインの初期化</a></p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>WordPress初期化</dt>
                                                <dd class="pl0">
                                                    <p>サーバーパネル内の「WordPress初期化」にて該当WordPressの「初期化」をクリックしてください。</p>
                                                    <p class="note">※WordPress初期化により不正コンテンツを削除できる場合のみ「WordPress初期化」メニューは表示されます。</p>
                                                    <p>WordPress初期化により、以下を除くすべてのWordPressデータが初期化されます。</p>
                                                    <ul class="ul">
                                                        <li>投稿記事などのMySQLデータベースの内容</li>
                                                        <li>メディアファイル（/wp-content/uploads/配下のファイル）</li>
                                                    </ul>
                                                    <p>なお、本作業にてプラグインやテーマファイルが削除されるため、再インストールや再設定が必要となります。</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>WordPressリカバリー</dt>
                                                <dd class="pl0">
                                                    <p>サーバーパネル内の「WordPressリカバリー」にて該当WordPressの「復旧に進む」をクリックし、以下いずれかの項目をを選択、実行してください。</p>
                                                    <ul class="ul">
                                                        <li>不正アクセスを受けたWordPressの復旧<br>
                                                            投稿記事などのMySQLデータベースの内容、メディアファイル、インストールされているプラグインやテーマを全て引き継ぎ、対象のWordPressについてのみ補正を行います。
                                                        </li>
                                                        <li>WordPress本体のリセット<br>
                                                            引き継ぐデータ（データベース／メディアデータ、テーマ／プラグイン）を選択したうえでWordPress本体をリセットします。
                                                        </li>
                                                    </ul>
                                                    <p>◇<a href="man_server_wprecovery.php">マニュアル - WordPressリカバリー</a></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c03">※ホームページ再開の復旧作業</h5>
                                        <div class="block_body">
                                            <p>以下いずれかの方法にてホームページ再開の復旧作業を実施してください。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>データファイルのアップロード</dt>
                                                <dd class="pl0">
                                                    <p>不正アクセスが発生する以前の改ざんされていないクリーンなデータをアップロードしてください。</p>
                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>データのアップロード時における注意事項</h5>
                                                        <div class="msg_body">
                                                            <p>不正アクセス発生日時付近のバックアップなどからデータをアップロードする場合、必ず以下いずれかの方法にてファイルが改ざんされていないことを確認してください。</p>
                                                            <ul class="ul">
                                                                <li>手元に保管しているオリジナルのファイルと内容を比較する</li>
                                                                <li>セキュリティソフトにてファイルスキャンを実施する</li>
                                                            </ul>
                                                            <p>改ざんされているファイルを再びアップロードしてしまうと、再度不正アクセスされてしまう可能性が非常に高くなります。</p>
                                                        </div>
                                                    </aside>
                                                    <p>不正アクセスの再発を防止するためには、すべてのデータをもう一度新規に作成していただくことが最善の方法となります。</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>データベース再利用による復旧（WordPressの場合）</dt>
                                                <dd class="pl0">
                                                    <p>不正なコンテンツの削除を実施する前に、WordPressの「wp-config.php」ファイル内に記載されているMySQL関連の情報をメモなどに控えておいてください。</p>
                                                    <ul class="ul">
                                                        <li>MySQLデータベース</li>
                                                        <li>MySQLデータベースユーザー</li>
                                                        <li>MySQLデータベースユーザーのパスワード</li>
                                                        <li>MySQLホスト</li>
                                                    </ul>
                                                    <p>不正なコンテンツ削除後は、公式サイト（<a href="https://ja.wordpress.org/" target="_blank" rel="nofollow">https://ja.wordpress.org/</a><i class="ico ico_new-window base-color"></i>）より最新版のWordPressを入手いただき、サーバー上にアップロードしてください。<br>
                                                        その後、先程控えておいたMySQL関連の情報を「wp-config.php」ファイルに再設定することで投稿記事などの復旧が可能です。<br>
                                                        なお、本作業後はプラグインやテーマファイルの再設定が必要となります。配布サイトから最新版をダウンロードしてください。</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>自動バックアップデータからの復旧</dt>
                                                <dd class="pl0">
                                                    <p>サーバーパネル内の「バックアップ」機能により過去のデータは自動でバックアップされています。<br>
                                                        これによるデータ復元を行う場合は、必ず不正アクセスが発生する以前の日付のクリーンなバックアップデータを選択してください。<br>
                                                        バックアップ機能について詳しくは以下サポートページをご覧ください。</p>
                                                    <p>◇<a href="../functions/service_backup.php">機能 - 自動バックアップ機能</a></p>
                                                    <p>◇<a href="man_server_download.php">マニュアル - 自動バックアップからのデータ取得</a></p>
                                                    <p>◇<a href="man_server_restore.php">マニュアル - 自動バックアップからのデータ復元</a></p>
                                                    <p>なお、一部のお客様においてはファイル数過多などによる負荷が原因でバックアップ機能の対象から除外されている場合があります。</p>
                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>自動バックアップデータからの復旧における注意事項</h5>
                                                        <div class="msg_body">
                                                            <p>弊社がお送りしております、不正アクセス発生に関するメールについて、メール内に記載の日時が明確な不正アクセスの発生日時とは限りません。<br>
                                                                そのため、復元を検討している日付のバックアップデータについて、必ずお客様ご自身で改ざん・不正なファイル設置がないか精査いただき、問題ないことをご確認のうえ、復元していただきますようお願いいたします。<br>
                                                                また、バックアップデータから復旧いただきましても、不正アクセスの根本原因が解決されないうちは再発の可能性が非常に高くなります。<br>
                                                                後述の「<a href="#link-d">不正アクセスの予防策</a>」についてもご対応いただきますようお願いいたします。
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c04">管理パスワードの変更</h5>
                                        <div class="block_body">
                                            <p>XServerアカウントやサーバーパネル、WordPressなどの設置プログラムの管理パスワードを変更してください。<br>
                                                また、複数のサーバーIDや当社の他サービスをご契約されている方はすべてのアカウントについてパスワード変更していただくことを強く推奨しています。</p>
                                            <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServerアカウント パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>
                                            <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">サーバーパネル パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>

                                            <dl class="dl">
                                                <dt>WordPressの場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress管理画面を開き、左メニュー「ユーザー」-「プロフィール」をクリックしてください。画面下部にある「アカウント管理」にて新しいパスワードを設定し、「プロフィールを更新」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_access_3.png?date=2410" alt="WordPress管理画面"></p>
                                                            <aside class="msg msg_caution">
                                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>パスワード設定における注意事項</h5>
                                                                <div class="msg_body">
                                                                    <p>以下のようなパスワードは第三者による推測が容易となるため避けてください。</p>
                                                                    <ul class="ul">
                                                                        <li>IDやメールドレスと同じ文字列<br>
                                                                            　例: メールアドレスが「info@example.jp」でパスワードが「infoexample」</li>
                                                                        <li>数字のみや英字のみ<br>
                                                                            　例: 38984、aaabbb</li>
                                                                        <li>単純な文字列と数字の組み合わせ<br>
                                                                            　例: abc123</li>
                                                                        <li>辞書に載っている単語<br>
                                                                            　例: get</li>
                                                                        <li>よく使われるパスワード<br>
                                                                            　例: password、admin、qwerty</li>
                                                                        <li>過去に設定したものと同じパスワード</li>
                                                                        <li>他システムで使用しているものと同じパスワード</li>
                                                                    </ul>
                                                                    <p>以下の条件を満たす強固なパスワードを設定してください。</p>
                                                                    <ul class="ul">
                                                                        <li>できるだけ長い文字列（最低8文字以上）</li>
                                                                        <li>英字（大文字、小文字）、数字を織り交ぜた完全ランダムな文字列</li>
                                                                        <li>記号「-(ハイフン)」、「.(ドット)」などを含む</li>
                                                                    </ul>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                        <li>
                                                            <p>左メニュー「ユーザー」-「ユーザー一覧」をクリックし、身に覚えのないユーザーや不要なユーザーが存在する場合はユーザー削除を実施してください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_access_4.png?date=2410" alt="WordPress管理画面"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c05">FTPアカウントのパスワードの変更／削除</h5>
                                        <div class="block_body">
                                            <p>FTPアカウントを利用した不正アクセスの場合は、以下の方法にて該当のFTPアカウントのパスワード変更または削除をしてください。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1. 「FTPアカウント設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「FTPアカウント設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_access_5.png?date=2410" alt="「FTPアカウント設定」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2. 該当FTPアカウントのパスワードの変更またはFTPアカウントの削除をする</h6>
                                                    <div class="box_body">
                                                        <p>該当FTPアカウントの「編集」、「削除」より、パスワードの変更またはFTPアカウントの削除を実施してください。</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_access_7.png?date=2410" alt="FTPアカウント一覧画面"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">不正アクセスの予防策</h4>
                                <div class="section_body">

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d01">二段階認証の設定</h5>
                                        <div class="block_body">
                                            <p>二段階認証とは、管理ツールなどへのログインの際に通常のパスワード認証に加え、ワンタイムパスワードを生成する認証コード生成アプリ（Google Authenticatorなど）のような第二の認証方法を設け、セキュリティを強化する仕組みです。二段階認証設定をしていただくことで通常のパスワード認証に比べ、不正アクセスを抑止できる可能性が高くなります。詳しくは以下サポートページをご覧ください。</p>
                                            <p>◇<a href="man_order_twostepauth.php">マニュアル - 二段階認証設定</a></p>
                                        </div>
                                    </section>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d03">ソフトウェア更新</h5>
                                        <div class="block_body">
                                            <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。OSを含めソフトウェアは常に最新の状態を保つよう、アップデートをしてください。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d04">ご利用中のWordPressや各プラグイン、テーマファイルの更新</h5>
                                        <div class="block_body">
                                            <p>CMS（PHPなどで構成された動的サイト）に関しても定期的な更新により不正アクセスのリスク軽減に繋がります。以下の方法にて最新版へのアップデートをしてください。</p>

                                            <dl class="dl">
                                                <dt>WordPressの場合</dt>
                                                <dd class="pl0">
                                                    <p>WordPress管理画面を開き、左メニュー「ダッシュボード」-「更新」をクリックしてください。<br>
                                                        新しいバージョンがある場合、以下のようなメッセージが表示されているので「バージョン *.*.*-ja に更新」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_8.png?date=2410" alt="WordPressの更新画面"></p>
                                                </dd>
                                                <dt>プラグインの場合</dt>
                                                <dd class="pl0">
                                                    <p>WordPress管理画面を開き、左メニュー「プラグイン」-「インストール済みプラグイン」をクリックしてください。<br>
                                                        新しいバージョンが利用できるプラグインでは以下のようなメッセージが表示されているので「更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_9.png?date=2410" alt="WordPressの更新画面"></p>
                                                    <p>不要なプラグインがある場合は削除を実施してください。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_10.png?date=2410" alt="WordPressの更新画面"></p>
                                                </dd>
                                                <dt>テーマの場合</dt>
                                                <dd class="pl0">
                                                    <p>WordPress管理画面を開き、左メニュー「外観」-「テーマ」をクリックしてください。<br>
                                                        新しいバージョンが利用できるテーマでは以下のようなメッセージが表示されているので「今すぐ更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_11.png?date=2410" alt="WordPressのテーマ画面"></p>
                                                    <p>不要なテーマがある場合は削除を実施してください。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_12.png?date=2410" alt="WordPressのテーマ画面"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d05">WordPressセキュリティ設定</h5>
                                        <div class="block_body">
                                            <p>WordPressセキュリティ設定とは、ご利用中のWordPressにおいて国外からの接続を制限したり、パスワードの総当り攻撃による第三者の不正ログインを防止するなどといった、不正アクセスに対するWordPressのセキュリティを強化する機能です。<br>
                                                詳しくは以下サポートページをご覧ください。</p>
                                            <p>◇<a href="man_server_wpsecurity.php">マニュアル - WordPressセキュリティ設定</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d06">WAF設定</h5>
                                        <div class="block_body">
                                            <p>WAF（Webアプリケーションファイアウォール）設定とは、Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することができる機能です。詳しくは以下サポートページをご覧ください。</p>
                                            <p>◇<a href="man_server_waf.php">マニュアル - WAF設定</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d07">php.ini設定</h5>
                                        <div class="block_body">
                                            <p>php.ini設定とは、PHPプログラムの全体的な動作や環境を設定するphp.iniファイルをドメインごとに編集することができる機能です。<br>
                                                お客様のWebサイトにてPHPプログラムをご利用中、かつ外部ファイルの読み込み/実行が必要でない場合、項目「その他の設定」より「allow_url_fopen」および「allow_url_include」を「無効（Off）」にしていただくことを強く推奨しています。</p>
                                            <p class="note">※XアクセラレータVer.2をご利用中の場合、「allow_url_fopen」は初期値である「有効（On）」が適用されます。該当の設定項目変更は強制ではありませんが、WEBサイトのセキュリティを重視される場合は、XアクセラレータVer.1に変更していただいたうえで「無効（Off）」にしていただきますようお願いいたします。</p>
                                            <p>◇<a href="man_server_phpini_edit.php">マニュアル - php.ini設定</a></p>
                                            <p>◇<a href="man_server_phpini_setting_item.php">マニュアル - php.ini設定で設定可能な項目について</a></p>
                                            <p>◇<a href="man_server_phpini_setting_ignore_item.php">マニュアル - XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></p>

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