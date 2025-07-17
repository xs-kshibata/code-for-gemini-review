<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WAF設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーのWAFに関する設定を記載しています。">

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
            
                <h3 class="sub-ttl">WAF設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">WAF設定について</a></li>
                                <li><a href="#link-previous-b">各設定項目について</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">XSS　(クロスサイトスクリプティング)</a></li>
                                        <li><a href="#link-previous-b02">SQL　(SQLインジェクション)</a></li>
                                        <li><a href="#link-previous-b03">ファイル　(ファイル不正アクセス)</a></li>
                                        <li><a href="#link-previous-b04">メール　(メールの不正送信)</a></li>
                                        <li><a href="#link-previous-b05">コマンド　(コマンドアクセス／実行)</a></li>
                                        <li><a href="#link-previous-b06">PHP　(PHP関数の脆弱性)</a></li>
                                    </ol>

                                </li>
                            </ul>
                            </div>
                
                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WAF設定について</h4>
                                <div class="section_body">
                                    <p>WAF（Webアプリケーションファイアウォール）は、Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することが可能です。</p>
                                    <p>不正アクセスからサイトを保護し、WordPressなどのWebアプリケーションの安全性を簡単な設定で向上することができます。</p>
                                    <p>
                                        サーバーパネルの設定画面より、対策が必要な項目を設定することが可能です。<br>
                                        ※WAF設定の追加・変更後、反映まで最大1時間程度かかる場合があります。
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_server_waf_1.png" alt=""></p>

                                    <aside class="msg msg_caution mt20">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設定前に必ずお読みください</h5>
                                        <div class="msg_body">
                                            <p>
                                                WAF設定では、有害な可能性のあるアクセスを検知する機能を提供しますが設定により不正アクセスを100%駆除することを保証するものではありません。
                                            </p>
                                            <p>
                                                あくまでWebアプリケーションの持つ脆弱性に対する不正アクセスへの最低限の予防策となります。<br>
                                                脆弱性に対する不正アクセスへの根本的対応として、随時最新バージョンのアプリケーションの利用やセキュリティ対応が必ず必要となりますので、ご確認の上ご利用ください。
                                            </p>
                                        </div>
                                    </aside>

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>検知時の動作について</h6>
                                        <div class="msg_body">
                                            <p>検知された場合には、アクセスが拒否されエラーページが表示されます。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">各設定項目について</h4>
                                <div class="section_body">
                                    <p>以下の項目への対策が設定可能です。</p>

                                    <table class="table" id="link-previous-b01">
                                        <thead>
                                            <tr><th colspan="2">XSS　(クロスサイトスクリプティング)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>javascriptなどのスクリプトタグが埋め込まれたアクセスについて検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>クッキーの値を不正に取得、設定しセッションハイジャックを行う</li>
                                                        <li>CSRF(クロスサイトリクエストフォージェリ)の踏み台とする</li>
                                                        <li>URL等を偽装し利用者をフィッシングサイトへ誘導する</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th id="man_server_spec_default_document">ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>掲示板</li>
                                                        <li>ブログシステム</li>
                                                        <li>他、第三者が入力した情報を表示するアプリケーション全般</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b02">
                                        <thead>
                                            <tr><th colspan="2">SQL　(SQLインジェクション)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>SQL構文に該当する文字列が挿入されたアクセスについて検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>SQL構文を利用した不正な文字列を付加し意図しないSQL文を発行する</li>
                                                        <li>データベース情報の漏洩を試みる</li>
                                                        <li>データベースの情報の書き換えや破壊を試みる</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>データベース登録を行う会員制サイト</li>
                                                        <li>データベースを利用したアプリケーション全般</li>
                                                    </ul>
                                                    <p class="note">※利用者の入力した内容からSQL文を生成するアプリケーションが不正アクセスの対象となります。</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b03">
                                        <thead>
                                            <tr><th colspan="2">ファイル　(ファイル不正アクセス)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>.htpasswd .htaccess httpd.conf等、サーバーに関連する設定ファイルが含まれたアクセスを検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>パスワードの記述されたファイルを上書きし認証の掛かったページに不正アクセスを行う</li>
                                                        <li>サーバーの設定ファイルを書き換えることで挙動の乗っ取りが行われる</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>画像アップロード機能付き掲示板</li>
                                                        <li>ファイル操作が行われるアプリケーション</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b04">
                                        <thead>
                                            <tr><th colspan="2">メール　(メールの不正送信)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>to、cc、bcc等のメールヘッダーに関係する文字列を含んだアクセスを検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <p>メールが送信されるフォームを利用した第三者への大量メール送信が行われる</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>メールを送信する機能を備えたアプリケーション</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                     <table class="table" id="link-previous-b05">
                                        <thead>
                                            <tr><th colspan="2">コマンド　(コマンドアクセス／実行)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>kill、ftp、mail、ping、ls　等コマンドに関連する文字列が含まれたアクセスを検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>コマンドを実行できるスクリプト言語(PHP,Perl等)を通してコマンドを不正実行させる</li>
                                                        <li>サーバーに関する重要な情報の盗み見や、踏み台として利用する</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>PHPやPerl等で作成されコマンド実行を利用するアプリケーション</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b06">
                                        <thead>
                                            <tr><th colspan="2">PHP　(PHP関数の脆弱性)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>
                                                    <p>session、ファイル操作に関連する関数のほか脆弱性元になる可能性の高い関数の含まれたアクセスを検知します。</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>セッションを書き換え、会員ページへのアクセスや管理者権限の乗っ取り</li>
                                                        <li>不正ファイルのアップロードを踏み台にサーバーの乗っ取り</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>PHPを用いたアプリケーション全般</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                    <li><a href="#link-a">WAF設定について</a></li>
                                    <li><a href="#link-b">各設定項目について</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">WAF設定について</h4>
                                <div class="section_body">
                                    <p>WAF（Webアプリケーションファイアウォール）は、Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することが可能です。</p>
                                    <p>不正アクセスからサイトを保護し、WordPressなどのWebアプリケーションの安全性を簡単な設定で向上することができます。</p>
                                    <p>サーバーパネルの設定画面より、対策が必要な項目を設定することが可能です。</p>
                                    <p><img alt="WAF設定" class="img" src="../img/manual/man_server_waf_1.png?date=2410"></p>
                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設定前に必ずお読みください</h5>
                                        <div class="msg_body">
                                            <p>WAF設定では、有害な可能性のあるアクセスを検知する機能を提供しますが設定により不正アクセスを100%駆除することを保証するものではありません。</p>
                                            <p>あくまでWebアプリケーションの持つ脆弱性に対する不正アクセスへの最低限の予防策となります。<br>
                                                脆弱性に対する不正アクセスへの根本的対応として、随時最新バージョンのアプリケーションの利用やセキュリティ対応が必ず必要となりますので、ご確認の上ご利用ください。</p>
                                            <p>※WAF設定の追加・変更後、反映まで最大30分程度かかる場合がありますのであらかじめご了承ください。</p>
                                        </div>
                                    </aside>
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>検知時の動作について</h6>
                                        <div class="msg_body">
                                            <p>検知された場合には、アクセスが拒否されエラーページが表示されます。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">各設定項目について</h4>
                                <div class="section_body">
                                    <p>以下の項目への対策が設定可能です。</p>
                                    <div class="serial-box">
                                        <table class="table table_use-caption">
                                            <caption>XSS　(クロスサイトスクリプティング)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>javascriptなどのスクリプトタグが埋め込まれたアクセスについて検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>クッキーの値を不正に取得、設定しセッションハイジャックを行う</li>
                                                        <li>CSRF(クロスサイトリクエストフォージェリ)の踏み台とする</li>
                                                        <li>URL等を偽装し利用者をフィッシングサイトへ誘導する</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>掲示板</li>
                                                        <li>ブログシステム</li>
                                                        <li>他、第三者が入力した情報を表示するアプリケーション全般</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>SQL　(SQLインジェクション)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>SQL構文に該当する文字列が挿入されたアクセスについて検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>SQL構文を利用した不正な文字列を付加し意図しないSQL文を発行する</li>
                                                        <li>データベース情報の漏洩を試みる</li>
                                                        <li>データベースの情報の書き換えや破壊を試みる</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>データベース登録を行う会員制サイト</li>
                                                        <li>データベースを利用したアプリケーション全般</li>
                                                    </ul>
                                                    <p class="note">
                                                        ※利用者の入力した内容からSQL文を生成するアプリケーションが不正アクセスの対象となります。</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>ファイル　(ファイル不正アクセス)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>.htpasswd .htaccess httpd.conf等、サーバーに関連する設定ファイルが含まれたアクセスを検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>パスワードの記述されたファイルを上書きし認証の掛かったページに不正アクセスを行う</li>
                                                        <li>ーバーの設定ファイルを書き換えることで挙動の乗っ取りが行われる</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>画像アップロード機能付き掲示板</li>
                                                        <li>ファイル操作が行われるアプリケーション</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>メール　(メールの不正送信)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>to、cc、bcc等のメールヘッダーに関係する文字列を含んだアクセスを検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <p>メールが送信されるフォームを利用した第三者への大量メール送信が行われる</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>メールを送信する機能を備えたアプリケーション</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>コマンド　(コマンドアクセス／実行)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>kill、ftp、mail、ping、ls　等コマンドに関連する文字列が含まれたアクセスを検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>コマンドを実行できるスクリプト言語(PHP,Perl等)を通してコマンドを不正実行させる</li>
                                                        <li>サーバーに関する重要な情報の盗み見や、踏み台として利用する</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>PHPやPerl等で作成されコマンド実行を利用するアプリケーション</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>PHP　(PHP関数の脆弱性)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">対策内容</th>
                                                <td>session、ファイル操作に関連する関数のほか脆弱性元になる可能性の高い関数の含まれたアクセスを検知します。</td>
                                            </tr>
                                            <tr>
                                                <th>不正アクセス例</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>セッションを書き換え、会員ページへのアクセスや管理者権限の乗っ取り</li>
                                                        <li>不正ファイルのアップロードを踏み台にサーバーの乗っ取り</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ターゲット</th>
                                                <td>
                                                    <p>PHPを用いたアプリケーション全般</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- 新パネル終わり-->
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