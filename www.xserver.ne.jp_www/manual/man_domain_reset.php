<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメインの初期化 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜アップロード済みデータをすべて削除し、運用中の独自ドメインを初期化できる「ドメイン初期化」機能に関するご案内です。サイト構築を一からやり直したい場合にご利用ください。">
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

                <h3 class="sub-ttl">ドメインの初期化</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->

                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">ドメインの初期化について</a>
                                        <ul>
                                            <li><a href="#link-previous-a01">ドメイン設定の初期化</a></li>
                                            <li><a href="#link-previous-a02">ウェブ領域・設定の初期化</a></li>
                                            <li><a href="#link-previous-a03">初期ファイル・フォルダの復元</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-b">ドメインの初期化手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.ドメイン設定メニューへ</a></li>
                                            <li><a href="#link-previous-b02">2.初期化ボタンをクリック</a></li>
                                            <li><a href="#link-previous-b03">3.処理内容を選択</a></li>
                                            <li><a href="#link-previous-b04">4.初期化の実行</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">ドメインの初期化について</h4>
                                <div class="section_body">

                                    <p>本機能は、サーバーパネルに追加済みのドメイン設定に対して、アップロード済みデータや設定を初期化する機能です。<br>
                                    一からサイトを構築しなおしたい場合やドメイン設定追加時に自動生成されるファイル・フォルダを誤って削除してしまった場合などにご利用ください。</p>
                                    <p>行える処理は以下のとおりです。</p>

                                    <section class="block">
                                        <h5 id="link-previous-a01" class="block_ttl">ドメイン設定の初期化</h5>
                                        <div class="block_body">
                                            <p>サブドメイン設定やDNSレコード設定など一部の機能を除き、対象ドメインに関するデータ、設定が全て初期化されます。<br>
                                            <em class="font-bold">ドメイン運用を一からやり直したい</em>場合に最適な機能です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                <dd>
                                                    <p>「/home/サーバーID/対象ドメイン」以下の領域の初期化</p>
                                                    <p class="note">※サブドメインが設定されている場合、そのウェブ領域は削除されます。</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>アクセス制限</li>
                                                        <li>エラーページ設定</li>
                                                        <li>MIME設定</li>
                                                        <li>サイト転送設定</li>
                                                        <li>アクセス拒否設定</li>
                                                        <li>CGIツール</li>
                                                        <li>自動インストール(※データベースは初期化されません)</li>
                                                        <li>PHP Ver.切替</li>
                                                        <li>php.ini設定</li>
                                                        <li>メールアカウント設定</li>
                                                        <li>迷惑メールフィルタ設定</li>
                                                        <li>自動応答設定</li>
                                                        <li>メールの振り分け</li>
                                                        <li>サブFTPアカウント設定</li>
                                                        <li>FTP制限設定(※対象ドメインのみ)</li>
                                                        <li>SSL設定(共有SSL)(※対象ドメインのみ)</li>
                                                        <li>動作確認URL(※対象ドメインのみ)</li>
                                                        <li>アクセス解析</li>
                                                        <li>ログファイル</li>
                                                        <li>Xアクセラレータ Ver.2有効化</li>
                                                    </ul>
                                                    <p>【以下の内容は初期化されません】</p>
                                                    <ul class="ul">
                                                        <li>サブドメイン設定(※ウェブ領域は初期化されます。)</li>
                                                        <li>DNSレコード設定</li>
                                                        <li>SSL設定（独自SSL）</li>
                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-a02" class="block_ttl">ウェブ領域・設定の初期化</h5>
                                        <div class="block_body">
                                            <p>サイトデータやサイトに関する各種設定の初期化を行います。<br>
                                            メール等サイト以外の設定はそのまま活用し、<em class="font-bold">サイトの内容のみ再構築したい</em>場合に最適な機能です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                <dd>
                                                    <p>「/home/サーバーID/対象ドメイン/public_html」以下の領域の初期化</p>
                                                    <p class="note">※サブドメインが設定されている場合、そのウェブ領域は削除されます。</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                <dd>
                                                    <ul class="ul mb0">
                                                        <li>アクセス制限</li>
                                                        <li>エラーページ設定</li>
                                                        <li>MIME設定</li>
                                                        <li>サイト転送設定</li>
                                                        <li>アクセス拒否設定</li>
                                                        <li>CGIツール</li>
                                                        <li>自動インストール(※データベースは初期化されません)</li>
                                                        <li>PHP Ver.切替</li>
                                                        <li>php.ini設定</li>
                                                        <li>Xアクセラレータ Ver.2有効化</li>
                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-a03" class="block_ttl">初期ファイル・フォルダの復元</h5>
                                        <div class="block_body">
                                            <p>ドメイン設定を追加する際自動的に作成されるフォルダ・ファイルが削除されている場合に、削除されたフォルダ・ファイルを復元します。<br>
                                                <em class="font-bold">誤ってシステムファイルを削除してしまった</em>場合に最適な機能です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                <dd>
                                                    <p>「/home/サーバーID/対象ドメイン/」以下の不足している初期ファイル・フォルダの復元</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                <dd>
                                                    <p class="note">※初期化される設定はありません。</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">ドメインの初期化手順</h4>
                                <div class="section_body">
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>
                                                ドメインの初期化を行うと、対象ドメインのデータや設定が削除されます。<br>
                                                必要なデータ・設定情報がある場合、あらかじめバックアップを取得しておいてください。
                                            </p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.ドメイン設定メニューへ</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログイン後、「ドメイン設定」メニューをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_1.png" alt="ドメイン設定をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.初期化ボタンをクリック</h6>
                                            <div class="box_body">
                                                <p>画面が遷移した後、初期化を行いたいドメインの「初期化」ボタンをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_2.png" alt="初期化ボタンをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.処理内容を選択</h6>
                                            <div class="box_body">
                                                <p>下図のような画面が表示されたら、ご希望の処理を選択し、「確認画面へ進む」ボタンをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_3.png" alt="初期化処理を選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.初期化の実行</h6>
                                            <div class="box_body">
                                                <p>今一度、処理内容を確認の上、「実行する」ボタンをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_4.png" alt="初期化を実行"></p>
                                                <p>以上で処理は完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">ドメインの初期化について</a>
                                        <ul>
                                            <li><a href="#link-a01">ドメイン設定の初期化</a></li>
                                            <li><a href="#link-a02">ウェブ領域・設定の初期化</a></li>
                                            <li><a href="#link-a03">初期ファイル・フォルダの復元</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">ドメインの初期化手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.ドメイン設定メニューへ</a></li>
                                            <li><a href="#link-b02">2.初期化ボタンをクリック</a></li>
                                            <li><a href="#link-b03">3.処理内容を選択</a></li>
                                            <li><a href="#link-b04">4.初期化の実行</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">
                                    <p>
                                        本機能は、サーバーパネルに追加済みのドメイン設定に対して、アップロード済みデータや設定を初期化する機能です。<br>
                                        一からサイトを構築しなおしたい場合やドメイン設定追加時に自動生成されるファイル・フォルダを誤って削除してしまった場合などにご利用ください。
                                    </p>
                                    <p>行える処理は以下のとおりです。</p>

                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#link-a01">ドメイン設定の初期化</a></li>
                                        <li><a href="#link-a02">ウェブ領域・設定の初期化</a></li>
                                        <li><a href="#link-a03">初期ファイル・フォルダの復元</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">ドメインの初期化について</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a01">ドメイン設定の初期化</h5>
                                                <div class="block_body">
                                                    <p>サブドメイン設定やDNSレコード設定など一部の機能を除き、対象ドメインに関するデータ、設定が全て初期化されます。<br>
                                                        <em class="font-bold">ドメイン運用を一からやり直したい</em>場合に最適な機能です。</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                        <dd>
                                                            <p>「/home/サーバーID/対象ドメイン」以下の領域の初期化</p>
                                                            <p class="note">※サブドメインが設定されている場合、そのウェブ領域は削除されます。</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>アクセス制限</li>
                                                                <li>エラーページ設定</li>
                                                                <li>MIME設定</li>
                                                                <li>サイト転送設定</li>
                                                                <li>アクセス拒否設定</li>
                                                                <li>CGIツール</li>
                                                                <li>自動インストール(※データベースは初期化されません)</li>
                                                                <li>PHP Ver.切替</li>
                                                                <li>php.ini設定</li>
                                                                <li>メールアカウント設定</li>
                                                                <li>迷惑メールフィルタ設定</li>
                                                                <li>自動応答設定</li>
                                                                <li>メールの振り分け</li>
                                                                <li>FTPアカウント設定</li>
                                                                <li>FTP制限設定(※対象ドメインのみ)</li>
                                                                <li>SSL設定(共有SSL)(※対象ドメインのみ)</li>
                                                                <li>動作確認URL(※対象ドメインのみ)</li>
                                                                <li>アクセス解析</li>
                                                                <li>ログファイル</li>
                                                                <li>Xアクセラレータ Ver.2有効化</li>
                                                                <li>www転送設定・HTTPS転送設定</li>
                                                            </ul>
                                                            <p>【以下の内容は初期化されません】</p>
                                                            <ul class="ul">
                                                                <li>サブドメイン設定(※ウェブ領域は初期化されます。)</li>
                                                                <li>DNSレコード設定</li>
                                                                <li>SSL設定（独自SSL）</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a02">ウェブ領域・設定の初期化</h5>
                                                <div class="block_body">
                                                    <p>
                                                        サイトデータやサイトに関する各種設定の初期化を行います。<br>
                                                        メール等サイト以外の設定はそのまま活用し、<em class="font-bold">サイトの内容のみ再構築したい</em>場合に最適な機能です。
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                        <dd>
                                                            <p>「/home/サーバーID/対象ドメイン/public_html」以下の領域の初期化</p>
                                                            <p class="note">※サブドメインが設定されている場合、そのウェブ領域は削除されます。</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                        <dd>
                                                            <ul class="ul mb0">
                                                                <li>アクセス制限</li>
                                                                <li>エラーページ設定</li>
                                                                <li>MIME設定</li>
                                                                <li>サイト転送設定</li>
                                                                <li>アクセス拒否設定</li>
                                                                <li>CGIツール</li>
                                                                <li>自動インストール(※データベースは初期化されません)</li>
                                                                <li>PHP Ver.切替</li>
                                                                <li>php.ini設定</li>
                                                                <li>Xアクセラレータ Ver.2有効化</li>
                                                                <li>www転送設定・HTTPS転送設定</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a03">初期ファイル・フォルダの復元</h5>
                                                <div class="block_body">
                                                    <p>
                                                        ドメイン設定を追加する際自動的に作成されるフォルダ・ファイルが削除されている場合に、削除されたフォルダ・ファイルを復元します。<br>
                                                        <em class="font-bold">誤ってシステムファイルを削除してしまった</em>場合に最適な機能です。
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>処理内容</dt>
                                                        <dd>
                                                            <p>「/home/サーバーID/対象ドメイン/」以下の不足している初期ファイル・フォルダの復元</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>初期化される各種設定</dt>
                                                        <dd>
                                                            <p class="note">※初期化される設定はありません。</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">ドメインの初期化手順</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_caution">
                                                <div class="msg_body">
                                                    <p class="tac font-bold red">※必要なデータ・設定情報がある場合、あらかじめバックアップを取得しておいてください。</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b01">1.ドメイン設定メニューへ</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログイン後、「ドメイン設定」メニューをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_1.png?date=2410" alt="ドメイン設定をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b02">2.初期化ボタンをクリック</h5>
                                                    <div class="box_body">
                                                        <p>画面が遷移した後、初期化を行いたいドメインの「初期化」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_2.png?date=2410" alt="初期化ボタンをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b03">3.処理内容を選択</h5>
                                                    <div class="box_body">
                                                        <p>下図のような画面が表示されたら、ご希望の処理を選択し、「確認する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_3.png?date=2410" alt="初期化処理を選択"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b04">4.初期化の実行</h5>
                                                    <div class="box_body">
                                                        <p>今一度、処理内容を確認の上、「初期化する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_4.png?date=2410" alt="初期化を実行"></p>
                                                        <p>以上で処理は完了です。</p>
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