<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールフォームを悪用した不正アクセスについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜メールフォームを悪用した不正アクセスの対応方法を記載しています。">

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
            
                <h3 class="sub-ttl">メールフォームを悪用した不正アクセスについて</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールフォームの悪用とは</a></li>
                                    <li><a href="#link-previous-b">メールフォームの悪用への対策</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">reCAPTCHAの導入</a></li>
                                            <li><a href="#link-previous-b02">自動返信機能の無効化</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">その他あわせて実施いただきたい対応</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">ご利用中のWordPressや各プラグイン、テーマファイルの更新</a></li>
                                            <li><a href="#link-previous-c02">ご利用中のWordPressや各プラグイン、テーマファイルの脆弱性確認</a></li>
                                            <li><a href="#link-previous-c03">ファイルの改ざん、不正なファイル設置の確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールフォームの悪用とは</h4>
                                <div class="section_body">
                                    <p>サイト上に設置したお問い合わせ用などのメールフォームにおいて、悪意を持った人物がお問い合わせ内容にスパム（フィッシングサイトのURLや宣伝広告など）、連絡先欄に無関係な第三者のメールアドレスを入力して送信することで、自動返信機能により無関係な第三者へスパムメールを送信するという攻撃です。</p>

                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_1.png" alt="メールフォームの悪用の流れ"></p>

                                    <p>このようなスパムメールが送信されるとメールの受信者に被害が及ぶだけでなく、サーバーが持つIPアドレスのレピュテーション（評判）が下がり、ブラックリストに登録される恐れがあります。ブラックリストに登録されると正常なメールでさえも送信できなくなるなどの問題が発生します。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">メールフォームの悪用への対策</h4>
                                <div class="section_body">
                                    <p>こういったメールフォームを悪用した不正アクセスには以下のような対策が有効です。</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b01">reCAPTCHAの導入</h5>
                                        <div class="block_body">
                                            <p>reCAPTCHAとはGoogleが無料で提供しているセキュリティ対策ツールです。<br>
                                                これにより人間からのアクセスかロボットからのアクセスかを判別し、ロボットからのアクセスの場合は何らかのアクションを要求するようになります。メールフォームの悪用を含め不正アクセスの大半はロボットによるもののため、reCAPTCHAの導入は対策として非常に効果的です。</p>

                                            <dl class="dl">
                                                <dt>プラグイン「Contact Form 7」を利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「Google reCAPTCHA」にアクセスしてください。（Googleアカウントが必要です）<br>
                                                                <a href="https://www.google.com/recaptcha/intro/v3.html" target="_blank" rel="nofollow">https://www.google.com/recaptcha/intro/v3.html</a><i class="ico ico_new-window color-gray"></i></p>
                                                        </li>
                                                        <li>
                                                            <p>「Admin Console」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_2.png" alt="「Admin Console」をクリック"></p>
                                                        </li>
                                                        <li>
                                                            <p>必要事項を入力し、送信をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_3.png" alt="必要事項を入力"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>ラベル</th>
                                                                    <td>サイトを容易に識別できるラベル（ブログのタイトルやURLなど）を入力します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>reCAPTCHA タイプ</th>
                                                                    <td>「スコアベース（v3）スコアに基づいてリクエストを検証します」を選択します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ドメイン</th>
                                                                    <td>reCAPTCHAを導入したいサイトのドメインを入力します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Google Cloud利用規約の同意</th>
                                                                    <td>内容を確認のうえ問題なければチェックを入れます。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li id="previous-reCAPTCHA_info">
                                                            <p>送信完了画面に記載されている、サイトキーおよびシークレットキーをコピーして控えておいてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_4.png" alt="送信完了画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>WordPress管理画面を開き、左メニュー「お問い合わせ」-「インテグレーション」をクリックしてください。<br>
                                                                「外部 API とのインテグレーション」の画面にてreCAPTCHAの「インテグレーションのセットアップ」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_5.png" alt="reCAPTCHA設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p><a href="#previous-reCAPTCHA_info">手順4</a>にて控えておいたサイトキーおよびシークレットキーを入力し、「変更を保存」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_6.png" alt="reCAPTCHA設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>以上でreCAPTCHAの導入設定は完了です。サイトにアクセスし、以下のようなアイコンが画面右下に表示されていることを確認してください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_7.png" alt="reCAPTCHAアイコン"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b02">自動返信機能の無効化</h5>
                                        <div class="block_body">
                                            <p>自動返信機能を無効化することにより、無関係な第三者にスパムメールが送信されることを防ぐことができます。<br>
                                                ただし、メールフォームに送信された通常のお問い合わせなどに関しても受付完了メールが届かなくなるため、問い合わせユーザーへ不安を抱かせる可能性があります。</p>

                                            <dl class="dl">
                                                <dt>プラグイン「Contact Form 7」を利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress管理画面を開き、左メニュー「お問い合わせ」-「コンタクトフォーム」をクリックしてください。<br>
                                                                コンタクトフォームの一覧より「編集」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_8.png" alt="WordPress管理画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「メール」タブ内にある「メール (2) を使用」のチェックを外し、「保存」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_9.png" alt="WordPress管理画面"></p>
                                                        </li>
                                                    </ol>
                                                </dd>

                                                <dt>当社CGIツールを利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「CGIツール」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_10.png" alt="「CGIツール」をクリック"></p>
                                                        </li>
                                                        <li>
                                                            <p>メールフォーム欄の「一覧・インストール」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_11.png" alt="CGIツール画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>該当ドメインの「選択する」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_12.png" alt="CGIツール画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「設定画面URL」のURLをクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_13.png" alt="CGIツール画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>上部メニューより「自動返信メールの設定」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_14.png" alt="メールフォーム設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「自動返信メールの使用しない」を選択し、「設定を保存する(確認)」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_15.png" alt="メールフォーム設定変更画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「設定を保存する(確定)」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_16.png" alt="メールフォーム設定完了"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">その他あわせて実施いただきたい対応</h4>
                                <div class="section_body">
                                    <p>前述の対策にあわせて以下の対応を実施していただくことで不正アクセスの防止に繋がります。</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c01">ご利用中のWordPressや各プラグイン、テーマファイルの更新</h5>
                                        <div class="block_body">
                                            <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。<br>
                                                以下の方法にて最新版へのアップデートをしてください。</p>

                                            <dl class="dl">
                                                <dt>WordPressの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「ダッシュボード」-「更新」をクリックしてください。<br>
                                                        新しいバージョンがある場合、以下のようなメッセージが表示されているので「バージョン *.*.*-ja に更新」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_17.png" alt="WordPressの更新画面"></p>
                                                </dd>
                                                <dt>プラグインの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「プラグイン」-「インストール済みプラグイン」をクリックしてください。<br>
                                                        新しいバージョンが利用できるプラグインでは以下のようなメッセージが表示されているので「更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_18.png" alt="WordPressのプラグイン画面"></p>
                                                </dd>
                                                <dt>テーマの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「外観」-「テーマ」をクリックしてください。<br>
                                                        新しいバージョンが利用できるテーマでは以下のようなメッセージが表示されているので「今すぐ更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_19.png" alt="WordPressのテーマ画面"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c02">ご利用中のWordPressや各プラグイン、テーマファイルの脆弱性確認</h5>
                                        <div class="block_body">
                                            <p>ご利用中のプラグインやテーマファイルの配布元、または以下サイトにて脆弱性情報が公開されていないか確認してください。</p>
                                            <p class="note">※脆弱性とは、OSやソフトウェアにおいてプログラムの不具合や設計上のミスが原因となって発生するセキュリティ上の欠陥のことをいいます。<br>
                                                脆弱性のある状態でシステムを利用し続けていると、不正アクセスされたり、ウイルスに感染したりする危険性があります。</p>

                                            <p>◇<a href="https://jvndb.jvn.jp/index.html" target="_blank" rel="nofollow">JVN iPedia 脆弱性対策情報データベース</a><i class="ico ico_new-window base-color"></i><br>
                                                　国内外で発見された脆弱性情報を確認することができます。</p>

                                            <p>◇<a href="https://www.jpcert.or.jp/" target="_blank" rel="nofollow">JPCERT Coordination Center</a><i class="ico ico_new-window base-color"></i><br>
                                                　国内で発見された脆弱性情報を確認することができます。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c03">ファイルの改ざん、不正なファイル設置の確認</h5>
                                        <div class="block_body">
                                            <p>ファイル管理（ファイルマネージャ）にて以下2点を確認してください。</p>
                                            <ul class="ul">
                                                <li>ファイルが改ざんされていないか</li>
                                                <li>不正（身に覚えのない）ファイルが設置されていないか</li>
                                            </ul>
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
                                    <li><a href="#link-a">メールフォームの悪用とは</a></li>
                                    <li><a href="#link-b">メールフォームの悪用への対策</a>
                                        <ol>
                                            <li><a href="#link-b01">reCAPTCHAの導入</a></li>
                                            <li><a href="#link-b02">自動返信機能の無効化</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">その他あわせて実施いただきたい対応</a>
                                        <ol>
                                            <li><a href="#link-c01">ご利用中のWordPressや各プラグイン、テーマファイルの更新</a></li>
                                            <li><a href="#link-c02">ご利用中のWordPressや各プラグイン、テーマファイルの脆弱性確認</a></li>
                                            <li><a href="#link-c03">ファイルの改ざん、不正なファイル設置の確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">メールフォームの悪用とは</h4>
                                <div class="section_body">
                                    <p>サイト上に設置したお問い合わせ用などのメールフォームにおいて、悪意を持った人物がお問い合わせ内容にスパム（フィッシングサイトのURLや宣伝広告など）、連絡先欄に無関係な第三者のメールアドレスを入力して送信することで、自動返信機能により無関係な第三者へスパムメールを送信するという攻撃です。</p>

                                    <p><img class="img" src="../img/manual/man_malicious_mailform_1.png?date=2410" alt="メールフォームの悪用の流れ"></p>

                                    <p>このようなスパムメールが送信されるとメールの受信者に被害が及ぶだけでなく、サーバーが持つIPアドレスのレピュテーション（評判）が下がり、ブラックリストに登録される恐れがあります。ブラックリストに登録されると正常なメールでさえも送信できなくなるなどの問題が発生します。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">メールフォームの悪用への対策</h4>
                                <div class="section_body">
                                    <p>こういったメールフォームを悪用した不正アクセスには以下のような対策が有効です。</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b01">reCAPTCHAの導入</h5>
                                        <div class="block_body">
                                            <p>reCAPTCHAとはGoogleが無料で提供しているセキュリティ対策ツールです。<br>
                                                これにより人間からのアクセスかロボットからのアクセスかを判別し、ロボットからのアクセスの場合は何らかのアクションを要求するようになります。メールフォームの悪用を含め不正アクセスの大半はロボットによるもののため、reCAPTCHAの導入は対策として非常に効果的です。</p>

                                            <dl class="dl">
                                                <dt>プラグイン「Contact Form 7」を利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「Google reCAPTCHA」にアクセスしてください。（Googleアカウントが必要です）<br>
                                                                <a href="https://www.google.com/recaptcha/intro/v3.html" target="_blank" rel="nofollow">https://www.google.com/recaptcha/intro/v3.html</a><i class="ico ico_new-window color-gray"></i></p>
                                                        </li>
                                                        <li>
                                                            <p>「Admin Console」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_2.png?date=2410" alt="「Admin Console」をクリック"></p>
                                                        </li>
                                                        <li>
                                                            <p>必要事項を入力し、送信をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_3.png?date=2410" alt="必要事項を入力"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>ラベル</th>
                                                                    <td>サイトを容易に識別できるラベル（ブログのタイトルやURLなど）を入力します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>reCAPTCHA タイプ</th>
                                                                    <td>「スコアベース（v3）スコアに基づいてリクエストを検証します」を選択します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ドメイン</th>
                                                                    <td>reCAPTCHAを導入したいサイトのドメインを入力します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Google Cloud利用規約の同意</th>
                                                                    <td>内容を確認のうえ問題なければチェックを入れます。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li id="reCAPTCHA_info">
                                                            <p>送信完了画面に記載されている、サイトキーおよびシークレットキーをコピーして控えておいてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_4.png?date=2410" alt="送信完了画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>WordPress管理画面を開き、左メニュー「お問い合わせ」-「インテグレーション」をクリックしてください。<br>
                                                                「外部 API とのインテグレーション」の画面にてreCAPTCHAの「インテグレーションのセットアップ」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_5.png?date=2410" alt="reCAPTCHA設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p><a href="#reCAPTCHA_info">手順4</a>にて控えておいたサイトキーおよびシークレットキーを入力し、「変更を保存」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_6.png?date=2410" alt="reCAPTCHA設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>以上でreCAPTCHAの導入設定は完了です。サイトにアクセスし、以下のようなアイコンが画面右下に表示されていることを確認してください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_7.png?date=2410" alt="reCAPTCHAアイコン"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b02">自動返信機能の無効化</h5>
                                        <div class="block_body">
                                            <p>自動返信機能を無効化することにより、無関係な第三者にスパムメールが送信されることを防ぐことができます。<br>
                                                ただし、メールフォームに送信された通常のお問い合わせなどに関しても受付完了メールが届かなくなるため、問い合わせユーザーへ不安を抱かせる可能性があります。</p>

                                            <dl class="dl">
                                                <dt>プラグイン「Contact Form 7」を利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress管理画面を開き、左メニュー「お問い合わせ」-「コンタクトフォーム」をクリックしてください。<br>
                                                                コンタクトフォームの一覧より「編集」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_8.png?date=2410" alt="WordPress管理画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「メール」タブ内にある「メール (2) を使用」のチェックを外し、「保存」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_9.png?date=2410" alt="WordPress管理画面"></p>
                                                        </li>
                                                    </ol>
                                                </dd>

                                                <dt>当社CGIツールを利用してメールフォームを設置している場合</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「メールフォーム(CGIツール)」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_10.png?date=2410" alt="「メールフォーム(CGIツール)」をクリック"></p>
                                                        </li>
                                                        <li>
                                                            <p>設定を変更したいメールフォームの「管理」ボタンをクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_13.png?date=2410" alt="メールフォーム(CGIツール)画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>上部メニューより「自動返信メールの設定」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_14.png?date=2410" alt="メールフォーム設定画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「自動返信メールの使用しない」を選択し、「設定を保存する(確認)」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_15.png?date=2410" alt="メールフォーム設定変更画面"></p>
                                                        </li>
                                                        <li>
                                                            <p>「設定を保存する(確定)」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_16.png?date=2410" alt="メールフォーム設定完了"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">その他あわせて実施いただきたい対応</h4>
                                <div class="section_body">
                                    <p>前述の対策にあわせて以下の対応を実施していただくことで不正アクセスの防止に繋がります。</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c01">ご利用中のWordPressや各プラグイン、テーマファイルの更新</h5>
                                        <div class="block_body">
                                            <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。<br>
                                                以下の方法にて最新版へのアップデートをしてください。</p>

                                            <dl class="dl">
                                                <dt>WordPressの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「ダッシュボード」-「更新」をクリックしてください。<br>
                                                        新しいバージョンがある場合、以下のようなメッセージが表示されているので「バージョン *.*.*-ja に更新」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_17.png?date=2410" alt="WordPressの更新画面"></p>
                                                </dd>
                                                <dt>プラグインの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「プラグイン」-「インストール済みプラグイン」をクリックしてください。<br>
                                                        新しいバージョンが利用できるプラグインでは以下のようなメッセージが表示されているので「更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_18.png?date=2410" alt="WordPressのプラグイン画面"></p>
                                                </dd>
                                                <dt>テーマの場合</dt>
                                                <dd>
                                                    <p>WordPress管理画面を開き、左メニュー「外観」-「テーマ」をクリックしてください。<br>
                                                        新しいバージョンが利用できるテーマでは以下のようなメッセージが表示されているので「今すぐ更新」の箇所をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_19.png?date=2410" alt="WordPressのテーマ画面"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c02">ご利用中のWordPressや各プラグイン、テーマファイルの脆弱性確認</h5>
                                        <div class="block_body">
                                            <p>ご利用中のプラグインやテーマファイルの配布元、または以下サイトにて脆弱性情報が公開されていないか確認してください。</p>
                                            <p class="note">※脆弱性とは、OSやソフトウェアにおいてプログラムの不具合や設計上のミスが原因となって発生するセキュリティ上の欠陥のことをいいます。<br>
                                                脆弱性のある状態でシステムを利用し続けていると、不正アクセスされたり、ウイルスに感染したりする危険性があります。</p>

                                            <p>◇<a href="https://jvndb.jvn.jp/index.html" target="_blank" rel="nofollow">JVN iPedia 脆弱性対策情報データベース</a><i class="ico ico_new-window base-color"></i><br>
                                                　国内外で発見された脆弱性情報を確認することができます。</p>

                                            <p>◇<a href="https://www.jpcert.or.jp/" target="_blank" rel="nofollow">JPCERT Coordination Center</a><i class="ico ico_new-window base-color"></i><br>
                                                　国内で発見された脆弱性情報を確認することができます。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c03">ファイルの改ざん、不正なファイル設置の確認</h5>
                                        <div class="block_body">
                                            <p>ファイル管理（ファイルマネージャ）にて以下2点を確認してください。</p>
                                            <ul class="ul">
                                                <li>ファイルが改ざんされていないか</li>
                                                <li>不正（身に覚えのない）ファイルが設置されていないか</li>
                                            </ul>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!--/新パネル-->

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