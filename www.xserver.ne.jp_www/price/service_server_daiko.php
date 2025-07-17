<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

    <title>サーバー移転代行 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「サーバー移転代行」を提供しています。">
    <meta property="og:title" content="サーバー移転代行【エックスサーバー】">
    <meta property="og:description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「サーバー移転代行」を提供しています。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php print $SITE_URL; ?>price/service_daiko.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png">
    <meta property="og:site_name" content="サーバー移転代行【エックスサーバー】">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">

    </head>

    <body id="pid-functions">

<?php include("../top.php"); ?>

    <div id="wrapper">

        <?php include("../header2.php"); ?>

        <div id="toggle-target">

            <div class="contents">
                <section class="main holder-sml" role="main">

                    <header class="main-header">
                        <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>料金</span></h2>
                        <?php include("subnav.php"); ?>
                    </header>
                    <!-- /.main-header -->

                    <?php include("../topicpath.php"); ?>

                    <p class="ttl"><span class="label">サーバー移転代行</span></p>
                    <section class="section">
                        <h3 class="section_ttl">サーバー移転代行</h3>
                        <div class="section_body">
                            <div class="lede media">
                                <p class="media_image media_image_rev"><img src="../img/functions/img_mv_server_daiko.png" alt="サーバー移転代行"></p>
                                <p class="media_body">弊社のエンジニアスタッフが作業を代行する<br class="visible-l">「サーバー移転代行」</p>
                                <p class="mt40">
                                    エックスサーバーでは、「サーバー移転代行」をオプションサービスとして提供しています。<br>
                                    Webサイト・WordPressの移転に対応しており、レンタルサーバーが初めての方にも安心してご利用いただけます。
                                </p>
                                <p><strong>ビジネスプランでは初回のみ無償</strong>で対応いたします。</p>
                                <p>※サーバーの各種設定については「<a href="service_daiko.php">設定おまかせサポート</a>」をご確認ください。</p>
                            </div>
                        </div>
                    </section>
                    <!-- /.section -->

                    <section class="section">
                        <h3 class="section_ttl" id="daiko_list">代行可能な作業一覧</h3>
                        <div class="section_body">

                            <table class="table table_striped primary-table-ml mt20">
                                <thead>
                                <tr>
                                    <th class="w15per">項目</th>
                                    <th>作業内容</th>
                                    <th class="w15per">所要日数</th>
                                    <th class="w20per">価格<span class="font-s">(税込)</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>サーバー移転</th>
                                    <td><p>運用中のサーバーから当サービスへの、WebサイトやWordPressのデータ移行を代行します。<br>
                                    WordPressをご利用の場合はデータベースも移行します。</p>
                                    <p>※移転元でSSLのご利用を確認した場合は無料独自SSLの設定も行います。</p></td>
                                    <td>5営業日</td>
                                    <td class="font-bold">
                                        33,000円<br>
                                        <span class="font-s font-normal">
                                            ※移転するサイト1件あたり
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <ul class="font-s mb20">
                                <li>※移転元の利用環境やWebサイトの内容によっては、データの移行ができない場合があります。</li>
                                <li>※お申し込みが集中した際は、ご案内や作業に時間をいただく場合があります。</li>
                            </ul>

                            <table class="table table_striped primary-table-ml">
                                <tbody>
                                <thead class="hidden-m hidden-l">
                                <tr>
                                    <th class="w20per">項目</th>
                                    <td>作業内容</td>
                                </tr>
                                </thead>
                                <tr>
                                    <th class="w20per">対応できない作業</th>
                                    <td>「Webサイトの動作確認」や「ネームサーバー(DNS)の変更」などの作業は対応していません。</td>
                                </tr>
                                </tbody>
                            </table>

                            <section id="daiko_muryo" class="block mt50">
                                <h4 class="block_ttl">無料代行サービス</h4>
                                <div class="block_body">
                                    <p>
                                        サーバー移転代行は、<strong>ビジネスプランのみ初回無料</strong>でご利用いただけます。
                                    </p>
                                </div>
                            </section>

                        </div>

                    </section>
                    <!-- /.section -->

                    <section class="section">
                        <h3 class="section_ttl" id="daiko_list">移転可能なデータ</h3>
                        <div class="section_body">
                            <p>サーバー移転代行の申し込み時に入力された「移転用FTP情報」を使用し、移転元サーバーにアクセスした際に表示されるWebサイト用のファイルやディレクトリを、ご契約サーバーにアップロードします。</p>

                            <p>関連：よくある質問「<a href="../support/faq/support_server_daiko_data.php">サーバー移転代行で移転されるデータを教えてください。</a>」</p>

                        </div>

                    </section>
                    <!-- /.section -->


                    <section class="section">
                        <h3 class="section_ttl">利用方法について</h3>
                        <div class="section_body">
                            <p>XServerアカウントの「サーバー移転代行」メニューよりお申し込みください。</p>
                            <p>お申し込み手順については、以下マニュアルをご確認ください。</p>
                            <p><a href="../manual/man_order_server_daiko.php" class="button button01--width-sm">サーバー移転代行の利用</a></p>
                            <p>サービスの利用についてご不明点がありましたら「<a href="../support/index.php">サポート</a>」へご相談ください。</p>
                            <div class="mt40 pt40 tac">
                                サーバーの各種設定については「設定おまかせサポート」をご利用ください。<a href="service_daiko.php" class="button button01--width-sm">設定おまかせサポート</a>
                            </div>
                        </div>
                    </section>
                    <!-- /.section -->

                    <!-- /.caution -->

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