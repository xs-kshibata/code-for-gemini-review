<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress簡単移行 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「WordPress簡単移行」機能に関するご案内です。すでにエックスサーバー以外で運用中のWordPressを、ログイン情報を入力するだけでエックスサーバーに簡単に移行することが可能です。">

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

                <h3 class="sub-ttl">WordPress簡単移行</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">ご利用上の注意</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">動作要件</a></li>
                                        <li><a href="#link-previous-a02">移行後のWordPressバージョンについて</a></li>
                                        <li><a href="#link-previous-a03">本機能で移行されるデータ、移行されないデータについて</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-b">WordPressの移行</a>
                                    <ul>
                                        <li><a href="#link-previous-b09">1.（事前準備）「ドメイン設定」にて移行先のドメイン名を追加</a></li>
                                        <li><a href="#link-previous-b01">2.「WordPress簡単移行」をクリック</a></li>
                                        <li><a href="#link-previous-b02">3.「WordPress移行情報入力」をクリック</a></li>
                                        <li><a href="#link-previous-b03">4.移行したいWordPressの情報を入力し、「確認画面へ進む」をクリック</a></li>
                                        <li><a href="#link-previous-b04">5.入力内容を確認し、「移行を開始する」をクリック</a></li>
                                        <li><a href="#link-previous-b05">6.移行処理の実行中</a></li>
                                        <li><a href="#link-previous-b06">7.「確認」をクリック</a></li>
                                        <li><a href="#link-previous-b07">8.データ移行完了</a>
                                            <ul>
                                                <li><a href="#link-previous-b11">ログを確認する</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#link-previous-b10">9.（必要に応じて）ネームサーバー変更前の動作確認</a></li>
                                        <li><a href="#link-previous-b08">10.ネームサーバーの変更、およびサイトの動作確認</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">エラーについて</a></li>
                                <li><a href="#link-previous-d">WordPress簡単移行の削除手順</a>
                                    <ul>
                                        <li><a href="#link-previous-d01">1.「WordPress簡単移行」をクリック</a></li>
                                        <li><a href="#link-previous-d02">2.削除したいドメイン名を選択</a></li>
                                        <li><a href="#link-previous-d03">3.対象のWordPressを確認し、「削除」をクリック</a></li>
                                        <li><a href="#link-previous-d04">4.「削除する」をクリック</a></li>
                                        <li><a href="#link-previous-d05">5.削除完了</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress簡単移行に関する「よくある質問」</a></li>
                            </ul>

                            <p>本機能は、他社サーバーからのサイト移転や、運用中のWordpressを別のURLに変更したい場合などにご利用いただけます。</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">ご利用上の注意</h4>
                                <div class="section_body">
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ネームサーバーについて</h6>
                                        <div class="msg_body">
                                            <p>
                                                移行するドメインのネームサーバーは、移行作業の完了後に変更してください。<br>
                                                移行作業の完了前にネームサーバーを変更すると、移行機能実行時にエラーが発生するおそれや、一時的にサイトが表示されなくなるおそれがあります。
                                            </p>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>簡単移行を複数回実行する場合について</h6>
                                        <div class="msg_body">
                                            <p>
                                                「ログイン試行回数制限」をONにした状態でWordPress簡単移行を複数回実行すると、エラーが発生します。
                                            </p>
                                            <p>
                                                複数のWordPressを移転する場合は、30分以上時間を空けてから実行する、もしくは「ログイン試行回数制限」をOFFにした状態で実行してください。
                                            </p>
                                        </div>
                                    </aside>

                                    <h5 class="block_ttl mt50" id="link-previous-a01">動作要件</h5>
                                    <ul class="ul mb50">
                                        <li>WordPressのバージョンが 4.2 〜 6.8 であること</li>
                                        <li>PHPのバージョンが7.2以上であること</li>
                                        <li>移行元のWordPressが以下に当てはまる場合、エラーとなります。
                                            <ul class="ul mb0">
                                                <li>マルチサイト機能を使用している場合</li>
                                                <li>データベースの容量が2GBを超えている場合</li>
                                                <li>WordPress.comからの移行である場合</li>
                                                <li>「PHPからtar、zipコマンドのいずれも利用不可」かつ「PHPのzipモジュールが利用不可」の場合</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <h5 class="block_ttl" id="link-previous-a02">移行後のWordPressバージョンについて</h5>
                                    <p class="mb50">WordPressのマイナーバージョンが最新のものへと更新されます。</p>

                                    <h5 class="block_ttl" id="link-previous-a03">本機能で移行されるデータ、移行されないデータについて</h5>
                                    <dl class="dl mb50">
                                        <dt><i class="ico ico_square-fill"></i>設定が移行されるデータ</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>/wp-content フォルダに設置されているデータ
                                                    <br>（アップロードした画像ファイルやプラグイン・テーマファイル等）</li>
                                                <li>データベース内のデータ（記事データや各種設定）</li>
                                            </ul>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>設定が移行されないデータ</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>移転元に設置されている「.htaccess」ファイル</li>
                                                <li>/wp-content フォルダに設置されているデータのうち、バックアップ関連プラグインによって生成されたデータ</li>
                                                <li>/wp-content 以外に設置されているデータやプラグイン設定（※）</li>
                                                <li>WordPressの本体構造を変更している場合（※）</li>
                                            </ul>
                                            <br>
                                            <p style="padding-left: 14px; text-indent: -14px;">※カスタマイズ関連のプラグインをはじめ、セキュリティ関連のプラグインやキャッシュ関連のプラグインをご利用の場合、これらに該当する可能性があります。</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>

                            <div class="manual-youtube-box">
                                <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                                <div class="manual-youtube">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/cjE-xooglMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPressの移行</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-b09" class="box_ttl">1.（事前準備）「ドメイン設定」にて移行先のドメイン名を追加</h6>
                                            <div class="box_body">
                                                <p>「WordPress簡単移行」機能の利用に先立ち、移行先に利用するドメイン名を「<a href="man_domain_setting.php">ドメイン設定</a>」から設定してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b01" class="box_ttl">2.「WordPress簡単移行」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単移行」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_top.png" alt="「WordPress簡単移行」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b02" class="box_ttl">3.「WordPress移行情報入力」をクリック</h6>
                                            <div class="box_body">
                                                <p>「WordPress移行情報入力」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_selecttab.png" alt="「WordPress簡単移行」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b03" class="box_ttl">4.移行したいWordPressの情報を入力し、「確認画面へ進む」をクリック</h6>
                                            <div class="box_body">
                                                <p>移行したいWordPressの情報を入力し、「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_input.png" alt="「WordPress移行情報入力」をクリック"></p>
                                                <table class="table table_use-caption">
                                                    <caption>入力項目</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>移行元URL</th>
                                                            <td>
                                                                移行元のURLを入力してください。<br>
                                                                「https」を選択した場合、移行先のURLも「https」から始まるものとなります。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>移行元WordPressのユーザー名</th>
                                                            <td>移行元でWordPressへのログイン時に利用していたユーザー名を入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>移行元WordPressのパスワード</th>
                                                            <td>移行元でWordPressへのログイン時に利用していたパスワードを入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>移行先のURLを入力してください。<br>
                                                                <ul class="ul">
                                                                    <li>「ドメイン設定」で先に設定しているドメイン名の中から選択してください。</li>
                                                                    <li>ドメイン直下に設置したい場合は、サブフォルダには何も入力せず、空白としてください。</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「https」から始まるWordPressサイトの移行について</h6>
                                                    <div class="msg_body">
                                                        <p>「https」から始まるURLのWordPressサイトを移行する場合、
                                                           <br>SSL証明書発行のため、移行元サイトで一時ファイルが作成されます。
                                                           <br>この場合にも、すでに運用中のWordPressサイトの動作に影響はありません。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b04" class="box_ttl">5.入力内容を確認し、「移行を開始する」をクリック</h6>

                                            <div class="box_body">
                                                <p>入力内容を確認し、内容に問題がなければ「移行を開始する」をクリックしてください。
                                                   <br>移行処理が開始されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_confirm.png" alt="入力内容を確認し、「移行を開始する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b05" class="box_ttl">6.移行処理の実行中</h6>

                                            <div class="box_body">
                                                <p>移行処理の実行中は、下記の画面が表示されます。実行中のキャンセルはできません。
                                                    <br>また、画面を閉じても移行処理は継続します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_notend.png" alt="移行処理の実行中"></p>
                                                <table class="table table_use-caption">
                                                    <tbody>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>移行先のURLが表示されます。<br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>移行ステータス</th>
                                                            <td>移行の進行状況が表示されます。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>WordPress簡単移行を行うと、移転元WordPress内に移転用プラグイン「XServer Migrator」がインストールされますが、正常に移行が完了すれば自動的に削除されます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b06" class="box_ttl">7.「確認」をクリック</h6>
                                            <div class="box_body">
                                                <p>移行処理が完了すると、「確認」ボタンが表示されますので、「確認」をクリックします。
                                                   <br>以上で移行作業は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_end.png" alt="「確認」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b07" class="box_ttl">8.データ移行完了</h6>
                                            <div class="box_body">
                                                <p>一覧画面に移行したWordPressの情報が表示されます。</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_list.png" alt="移行完了"></p>

                                                <table class="table table_use-caption">
                                                    <tbody>
                                                        <tr>
                                                            <th>ステータス</th>
                                                            <td>移行の進行状況が表示されます。<br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>移行先のURLを表示。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理画面URL</th>
                                                            <td>移行先WordPressの管理画面（ダッシュボード）のURL。<br>
                                                                移行元で利用していた「ユーザー名、パスワード」でログインが可能です。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>MySQLデータベース</th>
                                                            <td>移行先WordPressが使用しているMySQLデータベース名。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ネームサーバーの変更</th>
                                                            <td>表示されている場合、ネームサーバーを変更する必要があります。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="section">
                                                    <h5 class="block_ttl" id="link-previous-b11">ログを確認する</h5>
                                                    <p>「移行実行ログ」のタブをクリックすると、移行内容のログが確認できます。</p>

                                                    <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_logend.png" alt="ログを確認する"></p>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b10" class="box_ttl">9.（必要に応じて）ネームサーバー変更前の動作確認</h6>
                                            <div class="box_body">
                                                <p>お使いのパソコンの「hosts」ファイルを編集することで、ネームサーバーの切り替え前に動作確認ができるようになります。<br>
                                                    詳細は、マニュアル「<a href="man_domain_checkproxy.php#link-previous-b">hostsファイルを編集して確認する方法</a>」をご参照ください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b08" class="box_ttl">10.ネームサーバーの変更、およびサイトの動作確認</h6>
                                            <div class="box_body">
                                                <ol class="ol mb0">
                                                    <li>
                                                        <p class="font-bold">ネームサーバーの変更</p>
                                                        <p>下記エックスサーバーのネームサーバーへ変更してください。<br>
                                                            弊社で管理しているドメインの<a href="man_domain_namesever_setting.php#link-previous-b">ネームサーバーの変更</a>はXServerアカウント内の「ドメインパネル」より変更可能です。</p>
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
                                                            <li>※ネームサーバー変更後、一定時間（最大24時間ほど）を経て、徐々にサーバーが移行されます。</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">サイトの動作確認</p>
                                                        <p class="mb20">WordPressサイトへとアクセスし、問題なく表示・動作しているようであれば、移行作業は完了です。</p>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">パーマリンク設定について</p>
                                                        <p class="">記事データへアクセスしようとすると『404エラー』が発生する場合、下記手順でパーマリンク設定を行ってください。</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>パーマリンクの設定手順</dt>
                                                            <dd>
                                                                <ol class="ol mb0">
                                                                    <li>ダッシュボードへログインしてください</li>
                                                                    <li>左側メニューの「設定」より「パーマリンク設定」をクリックしてください</li>
                                                                    <li>設定内容は変更せずに画面下部の「変更を保存」ボタンをクリックしてください</li>
                                                                    <li>WordPressへ再度アクセスし、投稿されている記事をクリックした際の挙動をご確認ください</li>
                                                                </ol>
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">エラーについて</h4>
                                <p>エラーが発生した場合、次のように対応してください。</p>
                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>ログインエラー</dt>
                                    <dd>移行元WordPressのダッシュボードへのログインに失敗している可能性があります。
                                        <br>ユーザー名とパスワードに誤りがないことを確認し、Basic認証やロボット認証が有効な場合は解除してください。</dd>
                                    <dd>また、上記に当てはまらない場合は「ログイン試行回数制限」をONにした状態でWordpress簡単移行を複数回実行している可能性があります。
                                        <br>制限は24時間経過後に解除されますのでお待ちいただくか、「<a href="man_server_wpsecurity.php#link-previous-c">ログイン試行回数制限設定</a>」を解除して再度実行してください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>PHPバージョンエラー</dt>
                                    <dd>移行元サーバーのPHPバージョンが、サポート対象外のバージョンです。
                                        <br>本機能がサポートするPHPバージョンは、PHP5.3以降です。
                                        <br>PHPのバージョンを5.3以降に変更できる場合はPHPバージョンを変更し、WordPressが正常に動作することを確認したうえで、改めて移行作業を行ってください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>WordPressバージョンエラー</dt>
                                    <dd>移行元WordPressは、サポート対象外のバージョンです。
                                        <br>サポート対象のバージョンは以下の通りです。
                                        <br>4.2〜6.8</dd>
                                    <dt><i class="ico ico_square-fill"></i>タイムアウト</dt>
                                    <dd>移行元サーバーとの通信に失敗している可能性があります。
                                        <br>時間を空けてもう一度お試しいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。<br>
                                        <br>
                                        また、移行用データファイルの作成に時間がかかりすぎてタイムアウトしている可能性も考えられます。<br>
                                        移行元WordPressのwp-contentディレクトリ内の容量が極端に大きい場合などに発生するため、不要なファイル(バックアップデータ等)を削除して容量を減らしてから再度お試しください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>SSL未発行</dt>
                                    <dd>移行処理は完了していますが、SSL証明書の発行に失敗しています。
                                        <br>ドメインのネームサーバーを変更したのち、「<a href="man_server_ssl.php">SSL設定</a>」より個別にSSL証明書を発行してください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>プラグイン有効化エラー</dt>
                                    <dd>移行元WordPressへの移行用プラグインのインストールまたは有効化に失敗している可能性があります。<br>
                                        原因として考えられる以下の項目についてご確認ください。<br>
                                        <ul class="ul">
                                            <li>移行元URLにはダッシュボードの一般設定で確認できる「WordPress アドレス (URL)」を指定してください。</li>
                                            <li>httpとhttpsの間違いに注意してください。</li>
                                            <li>利用しているWordPressユーザーが管理者ではない場合、管理者権限を持つユーザーを利用してください。</li>
                                            <li>移行元WordPressのwp-config.phpファイル内にdefine('DISALLOW_FILE_MODS', true);の記載がある場合、削除した上で再度お試しください。</li>
                                        </ul>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>バージョン情報取得エラー</dt>
                                    <dd>移行元からのバージョン情報の取得に失敗しました。<br>
                                        移行用プラグインが正しく動作していない可能性があるため、サポートへお問い合わせいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>データベースバックアップ失敗</dt>
                                    <dd>移行元WordPressでのデータベースのバックアップに失敗しました。<br>
                                        移行元のディスク容量に空きがない場合、十分な空き容量を確保してから再度お試しください。<br>
                                        また、移行元のデータベースサーバーがメンテナンス中などの場合、時間を空けてもう一度お試しください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>移行用データファイル作成失敗</dt>
                                    <dd>移行元WordPressでの移行用データファイルの作成に失敗しました。<br>
                                        移行元のディスク容量に空きがない場合、十分な空き容量を確保してから再度お試しください。<br>
                                        また、移行元の環境によっては作成できるファイルサイズが制限されている場合があります。<br>
                                        移行元WordPressのwp-contentディレクトリ内の合計容量が一定(目安としては2GB以下程度)になるようにしてください。</dd>
                                    <dt><i class="ico ico_square-fill"></i>バックアップ取得失敗</dt>
                                    <dd>移行元WordPressからのバックアップの取得に失敗しました。<br>
                                        時間を空けてもう一度お試しいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。
                                    </dd>
                                </dl>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">WordPress簡単移行の削除手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-d01" class="box_ttl">1.「WordPress簡単移行」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単移行」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_top.png" alt="「WordPress簡単移行」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d02" class="box_ttl">2.削除したいドメイン名を選択</h6>
                                            <div class="box_body">
                                                <p>WordPressを削除したいドメイン名を選択してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete1.png" alt="削除したいドメイン名を選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d03" class="box_ttl">3.対象のWordPressを確認し、「削除」をクリック</h6>
                                            <div class="box_body">
                                                <p>移行済みWordPress一覧から、対象のWordPressを確認し「削除」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete2.png" alt="対象のWordPressを確認し、「削除」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d04" class="box_ttl">4.「削除する」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、問題なければ「削除する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete3.png" alt="「削除する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d05" class="box_ttl">5.削除完了</h6>
                                            <div class="box_body">
                                                <p>完了画面が表示されたら、削除は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete4.png" alt="削除完了"></p>
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
                                    <li><a href="#link-a">ご利用上の注意</a></li>
                                    <li>
                                        <a href="#link-b">WordPressの移行</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「WordPress簡単移行」をクリック</a></li>
                                            <li><a href="#link-b2">2.「WordPressを移行」をクリック</a></li>
                                            <li><a href="#link-b3">3.移行したいWordPressの情報を入力し、「移行する」をクリック</a></li>
                                            <li><a href="#link-b4">4.移行処理の実行中</a></li>
                                            <li><a href="#link-b5">5.「確認しました」をクリック</a></li>
                                            <li><a href="#link-b6">6.データ移行完了</a></li>
                                            <li><a href="#link-b7">7ネームサーバーの変更、およびサイトの動作確認</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">エラーについて</a></li>
                                    <li>
                                        <a href="#link-d">WordPress簡単移行の削除手順</a>
                                        <ol>
                                            <li><a href="#link-d1">1.「WordPress簡単移行」をクリック</a></li>
                                            <li><a href="#link-d2">2.対象のWordPressを確認し、「削除」をクリック</a></li>
                                            <li><a href="#link-d3">3.「削除する」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress簡単移行に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <p>本機能は、他社サーバーからのサイト移転や、運用中のWordpressを別のURLに変更したい場合などにご利用いただけます。</p>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">ご利用上の注意</h3>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ネームサーバーについて</h6>
                                                <div class="msg_body">
                                                    <p>移行するドメインのネームサーバーは、移行作業の完了後に変更してください。</p>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>動作要件</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>WordPressのバージョンが 4.2 〜 6.8 であること</li>
                                                        <li>PHPのバージョンが7.2以上であること
                                                        </li>
                                                        <li>移行元のWordPressが以下に当てはまる場合、エラーとなります。
                                                            <ul class="ul">
                                                                <li>マルチサイト機能を使用している場合</li>
                                                                <li>データベースの容量が2GBを超えている場合</li>
                                                                <li>WordPress.comからの移行である場合</li>
                                                                <li>「PHPからtar、zipコマンドのいずれも利用不可」かつ「PHPのzipモジュールが利用不可」の場合</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>移行後のWordPressバージョンについて</h6>
                                                <div class="msg_body">
                                                    <p>WordPressのマイナーバージョンが最新のものへと更新されます。</p>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>本機能で移行されるデータ、移行されないデータについて</h6>
                                                <div class="msg_body">
                                                    <dl class="dl">
                                                        <dt>設定が移行されるデータ</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>/wp-content フォルダに設置されているデータ<br>
                                                                    （アップロードした画像ファイルやプラグイン・テーマファイル等）</li>
                                                                <li>データベース内のデータ（記事データや各種設定）</li>
                                                            </ul>
                                                        </dd>
                                                        <dt>設定が移行されないデータ</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>移転元に設置されている「.htaccess」ファイル</li>
                                                                <li>/wp-content フォルダに設置されているデータのうち、バックアップ関連プラグインによって生成されたデータ</li>
                                                                <li>/wp-content 以外に設置されているデータやプラグイン設定（※）</li>
                                                                <li>WordPressの本体構造を変更している場合（※）</li>
                                                            </ul>
                                                            <p class="note">※カスタマイズ関連のプラグインをはじめ、セキュリティ関連のプラグインやキャッシュ関連のプラグインをご利用の場合、これらに該当する可能性があります。</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>簡単移行を複数回実行する場合について</h6>
                                                <div class="msg_body">
                                                    <p>
                                                        「ログイン試行回数制限」をONにした状態でWordpress簡単移行を複数回実行すると、エラーが発生します。
                                                    </p>
                                                    <p>
                                                        複数のWordpressを移転する場合は、30分以上時間を空けてから実行する、もしくは「ログイン試行回数制限」をOFFにした状態で実行してください。
                                                    </p>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-b">WordPressの移行</h3>

                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメイン設定</h6>
                                                <div class="msg_body">
                                                    <p>移行先に利用するドメイン名の設定を「<a href="man_domain_setting.php">ドメイン設定</a>」からあらかじめ済ませておいてください。</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b1">1.「WordPress簡単移行」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単移行」をクリックしてください。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_1.png?date=2410" alt="サーバーパネルで、WordPress簡単移行メニューをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b2">2.「WordPressを移行」をクリック</h4>
                                                    <div class="box_body">
                                                        <p>「WordPressを移行」をクリックしてください。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_2.png?date=2410" alt="「WordPressを移行」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b3">3.移行したいWordPressの情報を入力し、「移行する」をクリック</h4>
                                                    <div class="box_body">
                                                        <p>移行したいWordPressの情報を入力し、「移行する」をクリックしてください。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_3.png?date=2410" alt="情報を入力して、「確認画面へ進む」をクリック"></p>

                                                        <table class="table table--responsive">
                                                            <caption>入力項目</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">移行元URL</th>
                                                                <td>移行元のURLを入力してください。
                                                                    「https」を選択した場合、移行先のURLも「https」から始まるものとなります。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>移行元WordPressのユーザー名</th>
                                                                <td>移行元でWordPressへのログイン時に利用していたユーザー名を入力してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>移行元WordPressのパスワード</th>
                                                                <td>移行元でWordPressへのログイン時に利用していたパスワードを入力してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>URL</th>
                                                                <td>
                                                                    <p>	移行先のURLを入力してください。</p>
                                                                    <ul class="ul">
                                                                        <li>「ドメイン設定」で先に設定しているドメイン名の中から選択してください。</li>
                                                                        <li>ドメイン直下に設置したい場合は、サブフォルダには何も入力せず、空白としてください。</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>SSLの発行について</h6>
                                                            <div class="msg_body">
                                                                <p>「https」から始まるURLのWordPressサイトを移行する場合、SSL証明書発行のため、移行元サイトで一時ファイルが作成されます。<br>
                                                                    この場合にも、すでに運用中のWordPressサイトの動作に影響はありません。</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b4">4.移行処理の実行中</h4>
                                                    <div class="box_body">
                                                        <p>移行処理の実行中は、下記の画面が表示されます。実行中のキャンセルはできません。<br>
                                                            また、画面を閉じても移行処理は継続します。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_4.png?date=2410" alt="処理実行中の画面"></p>

                                                        <table class="table table--responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">URL</th>
                                                                <td>移行先のURLが表示されます。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>移行ステータス</th>
                                                                <td>移行の進行状況が表示されます。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Wordpress簡単移行を行うと、移転元WordPress内に移転用プラグイン「XServer Migrator」がインストールされますが、正常に移行が完了すれば自動的に削除されます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b5">5.「確認しました」をクリック</h4>
                                                    <div class="box_body">
                                                        <p>移行処理が完了すると、「確認しました」のボタンが表示されますので、「確認しました」をクリックします。<br>
                                                            以上で移行作業は完了です。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_5.png?date=2410" alt="移行処理が完了したら「確認しました」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b6">6.データ移行完了</h4>
                                                    <div class="box_body">
                                                        <p>一覧画面に移行したWordPressの情報が表示されます。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_6.png?date=2410" alt="移行したWordPressの情報が表示された画面"></p>

                                                        <table class="table table--responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">ステータス</th>
                                                                <td>移行の進行状況が表示されます。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>URL</th>
                                                                <td>移行先のURLを表示。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>管理画面URL</th>
                                                                <td>移行先WordPressの管理画面（ダッシュボード）のURL。<br>
                                                                    移行元で利用していた「ユーザー名、パスワード」でログインが可能です。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>MySQLデータベース</th>
                                                                <td>移行先WordPressが使用しているMySQLデータベース名。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ネームサーバーの変更</th>
                                                                <td>表示されている場合、ネームサーバーを変更する必要があります。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <section class="msg">
                                                            <h4 class="msg_ttl"><i class="ico ico_circle"></i>ログを確認する</h4>
                                                            <div class="msg_body">
                                                                <p>「移行実行ログ」のタブをクリックすると、移行内容のログが確認できます。</p>

                                                                <p><img class="img" src="../img/manual/man_install_transfer_wp_logend.png?date=2410" alt="移行内容のログ確認画面"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b7">7.ネームサーバーの変更、およびサイトの動作確認</h4>
                                                    <div class="box_body">

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ネームサーバーの変更前に動作を確認したい場合</h6>
                                                            <div class="msg_body">
                                                                <p>お使いのパソコンの「hosts」ファイルを編集することで、ネームサーバーの切り替え前に動作確認ができるようになります。<br>
                                                                    詳細は、マニュアル「<a href="man_domain_checkproxy.php#hosts">動作確認について ＞ WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>」をご参照ください。</p>
                                                            </div>
                                                        </aside>

                                                        <ol class="ol">
                                                            <li>
                                                                <p><em class="font-bold">ネームサーバーの変更</em></p>
                                                                <p>下記エックスサーバーのネームサーバーへ変更してください。<br>
                                                                    弊社で管理しているドメインの<a href="man_domain_namesever_setting.php">ネームサーバーの変更</a>はXServerアカウント内の「ドメインパネル」より変更可能です。</p>

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
                                                                    <li>※ネームサーバー変更後、一定時間（最大24時間ほど）を経て、徐々にサーバーが移行されます。</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <p><em class="font-bold">サイトの動作確認</em></p>
                                                                <p>WordPressサイトへとアクセスし、問題なく表示・動作しているようであれば、移行作業は完了です。</p>
                                                            </li>
                                                            <li>
                                                                <p><em class="font-bold">パーマリンク設定について</em></p>
                                                                <p>記事データへアクセスしようとすると『404エラー』が発生する場合、下記手順でパーマリンク設定を行ってください。</p>

                                                                <section class="msg">
                                                                    <h4 class="msg_ttl"><i class="ico ico_circle"></i>パーマリンクの設定手順</h4>
                                                                    <div class="msg_body">
                                                                        <ol class="ol">
                                                                            <li>ダッシュボードへログインしてください。</li>
                                                                            <li>左側メニューの「設定」より「パーマリンク設定」をクリックしてください。</li>
                                                                            <li>設定内容は変更せずに画面下部の「変更を保存」ボタンをクリックしてください。</li>
                                                                            <li>WordPressへ再度アクセスし、投稿されている記事をクリックした際の挙動をご確認ください。</li>
                                                                        </ol>
                                                                    </div>
                                                                </section>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-c">エラーについて</h3>
                                        <div class="section_body">
                                            <p>エラーが発生した場合、次のように対応してください。</p>

                                            <dl class="dl">
                                                <dt>ログインエラー</dt>
                                                <dd>
                                                    <p>移行元WordPressのダッシュボードへのログインに失敗している可能性があります。<br>
                                                        ユーザー名とパスワードに誤りがないことを確認し、Basic認証やロボット認証が有効な場合は解除してください。</p>
                                                    <p>また、上記に当てはまらない場合は「ログイン試行回数制限」をONにした状態でWordpress簡単移行を複数回実行している可能性があります。<br>
                                                        制限は24時間経過後に解除されますのでお待ちいただくか、「<a href="man_server_wpsecurity.php#login">ログイン試行回数制限設定</a>」を解除して再度実行してください。</p>
                                                </dd>
                                                <dt>PHPバージョンエラー</dt>
                                                <dd>
                                                    <p>移行元サーバーのPHPバージョンが、サポート対象外のバージョンです。<br>
                                                        本機能がサポートするPHPバージョンは、PHP5.3以降です。<br>
                                                        PHPのバージョンを5.3以降に変更できる場合はPHPバージョンを変更し、WordPressが正常に動作することを確認したうえで、改めて移行作業を行ってください。</p>
                                                </dd>
                                                <dt>WordPressバージョンエラー</dt>
                                                <dd>
                                                    <p>移行元WordPressは、サポート対象外のバージョンです。<br>
                                                        サポート対象のバージョンは「4.2〜6.8」です。</p>
                                                </dd>
                                                <dt>タイムアウト</dt>
                                                <dd>
                                                    <p>移行元サーバーとの通信に失敗している可能性があります。<br>
                                                        時間を空けてもう一度お試しいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。</p>
                                                    <p>また、移行用データファイルの作成に時間がかかりすぎてタイムアウトしている可能性も考えられます。<br>
                                                        移行元WordPressのwp-contentディレクトリ内の容量が極端に大きい場合などに発生するため、不要なファイル(バックアップデータ等)を削除して容量を減らしてから再度お試しください。</p>
                                                </dd>
                                                <dt>SSL未発行</dt>
                                                <dd>
                                                    <p>移行処理は完了していますが、SSL証明書の発行に失敗しています。<br>
                                                        ドメインのネームサーバーを変更したのち、「<a href="man_server_ssl.php">SSL設定</a>」より個別にSSL証明書を発行してください。</p>
                                                </dd>
                                                <dt>プラグイン有効化エラー</dt>
                                                <dd>
                                                    <p>移行元WordPressへの移行用プラグインのインストールまたは有効化に失敗している可能性があります。<br>
                                                        原因として考えられる以下の項目についてご確認ください。</p>

                                                    <ul class="ul">
                                                        <li>移行元URLにはダッシュボードの一般設定で確認できる「WordPress アドレス (URL)」を指定してください。</li>
                                                        <li>httpとhttpsの間違いに注意してください。</li>
                                                        <li>利用しているWordPressユーザーが管理者ではない場合、管理者権限を持つユーザーを利用してください。</li>
                                                        <li>移行元WordPressのwp-config.phpファイル内にdefine('DISALLOW_FILE_MODS', true);の記載がある場合、削除した上で再度お試しください。</li>
                                                    </ul>
                                                </dd>
                                                <dt>バージョン情報取得エラー</dt>
                                                <dd>
                                                    <p>移行元からのバージョン情報の取得に失敗しました。<br>
                                                        移行用プラグインが正しく動作していない可能性があるため、サポートへお問い合わせいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。</p>
                                                </dd>
                                                <dt>データベースバックアップ失敗</dt>
                                                <dd>
                                                    <p>移行元WordPressでのデータベースのバックアップに失敗しました。<br>
                                                        移行元のディスク容量に空きがない場合、十分な空き容量を確保してから再度お試しください。<br>
                                                        また、移行元のデータベースサーバーがメンテナンス中などの場合、時間を空けてもう一度お試しください。</p>
                                                </dd>
                                                <dt>移行用データファイル作成失敗</dt>
                                                <dd>
                                                    <p>移行元WordPressでの移行用データファイルの作成に失敗しました。<br>
                                                        移行元のディスク容量に空きがない場合、十分な空き容量を確保してから再度お試しください。<br>
                                                        また、移行元の環境によっては作成できるファイルサイズが制限されている場合があります。<br>
                                                        移行元WordPressのwp-contentディレクトリ内の合計容量が一定(目安としては2GB以下程度)になるようにしてください。</p>
                                                </dd>
                                                <dt>バックアップ取得失敗</dt>
                                                <dd>
                                                    <p>移行元WordPressからのバックアップの取得に失敗しました。<br>
                                                        時間を空けてもう一度お試しいただくか、「<a href="man_install_transfer_wordpress.php">WordPressの移転について</a>」をご参照のうえ、手動で移行作業を行ってください。</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-d">WordPress簡単移行の削除手順</h3>

                                        <div class="section_body">

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d1">1.「WordPress簡単移行」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「WordPress簡単移行」をクリックしてください。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_1.png?date=2410" alt="サーバーパネルで、WordPress簡単移行メニューをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d2">2.対象のWordPressを確認し、「削除」をクリック</h4>
                                                    <div class="box_body">
                                                        <p>移行済みWordPress一覧から、対象のWordPressを確認し「削除」をクリックしてください。
                                                        </p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_new_delete1.png" alt="対象のWordPressを確認し、「削除」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d3">3.「削除する」をクリック</h4>
                                                    <div class="box_body">
                                                        <p>内容を確認し、問題なければ「削除する」をクリックしてください。</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_new_delete2.png" alt="「削除する」をクリック"></p>
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