<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>EC-CUBE 3 簡単インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「EC-CUBE 3」の設定方法について記載しています。">

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

            <h3 class="sub-ttl">EC-CUBE 3</h3>

            <div class="toc-list">
            <p class="toc-list--head">目次</p>
            <ul class="toc-list--body">
                <li><a href="#link-a">EC-CUBE 3 簡単インストール はじめに</a></li>
                <li><a href="#link-e">[参考] アップデートについて</a>
                    <ul>
                        <li><a href="#link-e01">「/html/index.php」での作業手順</a></li>
                        <li><a href="#link-e02">「/src/Eccube/Controller/Admin/Store/TemplateController.php」での作業手順</a></li>
                    </ul>
                </li>
                <li><a href="#link-f">PHPのバージョン切り替え後に発生する表示不具合の解消方法</a>
                    <ol>
                        <li><a href="#link-f01">1.EC-CUBE 管理画面にアクセス</a></li>
                        <li><a href="#link-f02">2.「コンテンツ管理 ＞ キャッシュ情報」にてキャッシュ削除</a></li>
                    </ol>

                </li>
            </ul>
            </div>



        <section class="section">
        <h4 class="section_ttl" id="link-a">EC-CUBE 3 簡単インストール はじめに</h4>
        <div class="section_body">
            <p>
                簡単インストールにおいて EC-CUBE 3 の提供は終了しております。<br>
                <br>
                簡単インストール「EC-CUBE4」については「<a href="man_install_auto_ec4.php">EC-CUBE 4 簡単インストール手順</a>」をご確認ください。<br>
                <br>
                また、インストール後の各種設定やカスタマイズ、アップデート等に関するサポートは行っておりません。あらかじめご了承ください。
            </p>
            <table class="table table_use-caption break-word">
                <caption>EC-CUBE 3 簡単インストール 設定例</caption>
                <tbody>
                    <tr>
                        <th class="w20per w30per-s">サーバーID</th>
                        <td>xsample</td>
                    </tr>
                    <tr>
                        <th>ドメイン名</th>
                        <td>example.com</td>
                    </tr>
                    <tr>
                        <th>インストールディレクトリ</th>
                        <td>
                            /home/xsample/example.com/public_html/ec
                        </td>
                    </tr>
                    <tr>
                        <th>インストールURL</th>
                        <td>http://example.com/ec</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table_use-caption break-word">
                <caption>EC-CUBE 3 簡単インストール 動作環境</caption>
                <tbody>
                    <tr>
                        <th class="w20per w30per-s">PHPバージョン</th>
                        <td>
                            PHP 5.4.x 〜 7.1.x
                            <p class="note mb0">
                                ※PHP動作バージョンの変更は、マニュアル「<a href="man_program_php_ver.php">PHPのバージョン切り替え</a>」をご参照ください。
                            </p>

                        </td>
                    </tr>
                    <tr>
                        <th>データベース</th>
                        <td>MySQL5.7 / MySQL5.5<p class="note mb0">※文字コードを UTF-8 に設定してください。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.section -->


    <section class="section">
        <h4 class="section_ttl" id="link-e">[参考] アップデートについて</h4>
        <div class="section_body">
            <section class="block">
                <p>
                    本機能で提供するEC-CUBEは、当サービスで提供する仕様にあわせ、以下のファイルをカスタマイズしております。
                </p>
                <div class="border border_gray">
                    <ul class="list list_circle">
                        <li>/html/index.php</li>
                        <li>/src/Eccube/Controller/Admin/Store/TemplateController.php</li>
                    </ul>
                </div>
                <!-- /.border border_gray -->
                <p>そのため、EC-CUBEのバージョンアップなどに伴うアップデート作業によりファイルの更新が生じた場合は、以下の手順に沿ってプログラムの修正を行ってください。</p>
                <p class="note">※アップデート作業を行われる際は、必ず予めデータ類のバックアップを取得してください。</p>
            </section>
            <!-- /.block -->
            <section class="block">
                <h3 class="block_ttl" id="link-e01">「/html/index.php」での作業手順</h3>
                <div class="block_body">
                    <div class="serial-box mb10">
                        <section class="box">
                            <h6 class="box_ttl">1.「html」フォルダ内の「index.php」を移動</h6>
                            <div class="box_body">
                                <p>「html」フォルダ内にある「index.php」を一つ上のフォルダに移動してください。</p>
                            </div>
                        </section>
                        <!-- /.box -->


                        <section class="box">
                            <h6 class="box_ttl">2.「index.php」を編集</h6>
                            <div class="box_body">
                                <p>テキストエディタを用いて先ほど移動した「index.php」を編集します。</p>
                                <pre class="code">require __DIR__.'/../autoload.php';</pre>
                                <p class="ml30"><i class="ico ico_arrow-down"></i></p>
                                <pre class="code">require __DIR__.'/autoload.php';</pre>
                                <p class="note">※Windows付属の“メモ帳”で編集を行った場合、不具合が発生することがあります。必ずテキストエディタにて編集を行ってください。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>変更前</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_5.png" alt="index.php:編集前のファイル変更箇所にフォーカス"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>変更後</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_6.png" alt="index.php:編集後のファイル編集箇所にフォーカス"></p></dd>
                                </dl>
                                <p class="note">※プログラム内容や編集内容は状況に応じて異なる場合がございます。</p>
                            </div>
                        </section>
                        <!-- /.box -->
                        <section class="box">
                            <h6 class="box_ttl">3.サーバへのアップロード</h6>
                            <div class="box_body">
                                <p>FTPソフトを使い、「index.php」をサーバーへアップロードしてください。</p>
                                <aside class="msg msg_caution">
                                    <h6 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>アップロード先にご注意ください</h6>
                                    <div class="msg_body">
                                        <p class="mb0">
                                            アップロード先は本来の「html」フォルダ内ではなく、「html」フォルダの一つ上のフォルダです。
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box mb10 -->
                </div>
                <!-- /.block_body -->
            </section>
            <!-- /.block -->
            <section class="block">
                <h3 class="block_ttl" id="link-e02">「/src/Eccube/Controller/Admin/Store/TemplateController.php」での作業手順</h3>
                <div class="block_body">
                    <div class="serial-box mb10">
                        <section class="box">
                            <h6 class="box_ttl">1.「src/Eccube/Controller/Admin/Store」フォルダ内の「TemplateController.php」を修正</h6>
                            <div class="box_body">
                                <p>テキストエディタを用いて「/src/Eccube/Controller/Admin/Store」フォルダ内にある「TemplateController.php」を編集してください。</p>
                                <pre class="code">$config['front_urlpath'] = $config['root_urlpath'] . '/template/' . $templateCode;</pre>
                                <p class="ml30"><i class="ico ico_arrow-down"></i></p>
                                <pre class="code">$config['front_urlpath'] = $config['root'] . 'template/' . $templateCode;</pre>
                                <p class="note">※Windows付属の“メモ帳”で編集を行った場合、不具合が発生することがあります。必ずテキストエディタにて編集を行ってください。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>変更前</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_18.png" alt="index.php:編集前のファイル変更箇所にフォーカス"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>変更後</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_19.png" alt="index.php:編集後のファイル編集箇所にフォーカス"></p></dd>
                                </dl>
                                <p class="note">※プログラム内容や編集内容は状況に応じて異なる場合がございます。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        <section class="box">
                            <h6 class="box_ttl" id="link-b02">2.サーバへのアップロード</h6>
                            <div class="box_body">
                                <p>FTPソフトを使い、サーバー上の「/src/Eccube/Controller/Admin/Store」フォルダ内へ『TemplateController.php』をアップロードしてください。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                    </div>
                    <!-- /.serial-box mb10 -->
                </div>
            </section>
        </div>
        <!-- /.section_body -->
    </section>
    <!-- /.section -->
    <section class="section">
        <h4 class="section_ttl" id="link-f">PHPのバージョン切り替え後に発生する表示不具合の解消方法</h4>
        <div class="section_body">
                <p>EC-CUBE 3をご利用の状況下で「<a href="man_program_php_ver.php#phpver-change">PHPバージョン切替</a>」を行った場合に、EC-CUBEが保持するキャッシュ情報との兼ね合いにより、コンテンツが正常に表示されない場合があります。</p>
				<p>この場合は、以下の手順でEC-CUBEが保持するキャッシュ情報の削除を行うことにより改善いたします。</p>
            <section class="block">
				<div class="serial-box mb10">
					<section class="box">
						<h6 class="box_ttl" id="link-f01">1.EC-CUBE 管理画面にアクセス</h6>
						<div class="box_body">
							<p>インストールしたEC-CUBEの管理画面にアクセスし、ログインをしてください。</p>
						</div>
					</section>
					<!-- /.box -->
					<section class="box">
						<h6 class="box_ttl" id="link-f02">2.「コンテンツ管理 ＞ キャッシュ情報」にてキャッシュ削除</h6>
						<div class="box_body">
							<p>「コンテンツ管理 > キャッシュ管理」に進みます。</p>
							<p>キャッシュ管理にある『twig』にチェックを入れ、『キャッシュ削除』ボタンをクリックします。</p>
							<p><img class="img" src="../img/manual/man_install_ec_20.png" alt="キャッシュ管理内の「twig」にチェックを入れ、「キャッシュ削除」ボタンをクリックするスクリーンショット"></p>
						</div>
					</section>
					<!-- /.box -->
				</div>
				<!-- /.serial-box mb10 -->
            </section>
            <!-- /.block -->
        </div>
        <!-- /.section_body -->
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