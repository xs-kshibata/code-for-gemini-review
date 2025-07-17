<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

    <title>設定おまかせサポート | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「設定おまかせサポート」を提供しています。">
    <meta property="og:title" content="設定おまかせサポート【エックスサーバー】">
    <meta property="og:description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「設定おまかせサポート」を提供しています。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php print $SITE_URL; ?>price/service_daiko.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png">
    <meta property="og:site_name" content="設定おまかせサポート【エックスサーバー】">
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

                    <p class="ttl"><span class="label">設定おまかせサポート</span></p>

                    <section class="section">
                        <h3 class="section_ttl">設定おまかせサポート</h3>
                        <div class="section_body">
                            <div class="lede media">
                                <p class="media_image media_image_rev"><img src="../img/functions/img_mv_detail_daiko.png" alt="設定おまかせサポート"></p>
                                <p class="media_body">弊社のエンジニアスタッフが作業を代行する<br class="visible-l">「設定おまかせサポート」</p>
                                <p class="mt40">
                                    エックスサーバーでは、「設定おまかせサポート」をオプションサービスとして提供しています。<br>
                                    サーバーの設定に関する複雑な知識は不要のため、レンタルサーバーが初めての方にも安心してご利用いただけます。
                                </p>
                                <p>
                                    <strong>ビジネスプランでは設定おまかせサポートを毎月3回まで無償</strong>で対応いたします。
                                </p>
                                <p class="">※Webサイトの移転については「<a href="service_server_daiko.php">サーバー移転代行</a>」をご確認ください。</p>
                            </div>
                        </div>

                    </section>
                    <!-- /.section -->

                    <section class="section">
                        <h3 class="section_ttl" id="daiko_list">代行可能な作業一覧</h3>
                        <div class="section_body">

                            <?php /*<aside class="msg msg_notice clearfix w65per mb10">
                                <div class="tips-desc">
                                    <div class="msg_body">
                                        <p><img src="../img/functions/cp_ico_ttl.png"><strong>【おすすめ！】</strong>まとめて初期設定　<s><strong>30,000円</strong></s> → <span class="font-bold bright-yellow font-xl">15,000<span class="font-m">円</span></span><span class="font-xs"> <strong>[税抜・キャンペーン価格]</strong></span></p>
                                    </div>
                                </div>
                            </aside>*/ ?>
							
                            <table class="table table_striped primary-table-ml mt20">
                                <thead>
                                <tr>
                                    <th class="w20per">項目</th>
                                    <th>作業内容</th>
                                    <th class="w15per">所要日数</th>
                                    <th class="w20per">価格<span class="font-s">(税込)</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><span class="daiko_osusume">【オススメ！】 </span><br>
                                        まとめて初期設定</th>
                                    <td>以下をまとめて実施します
                                        <ul class="ul">
                                            <li>CMSインストール(合計10件まで)</li>
                                            <li>メールアドレス作成(100アカウントまで)</li>
                                            <li>独自ドメイン設定(10ドメインまで)</li>
                                            <li>サブドメイン設定(20ドメインまで)</li>
                                        </ul>
                                    </td>
                                    <td>2営業日</td>
                                    <td class="font-bold">
                                        33,000円
                                    </td>
                                </tr>
                                <tr>
                                    <th>CMSインストール</th>
                                    <td>WordPress/EC-CUBE/Pukiwikiのインストール<br>（1件まで）</td>
                                    <td>2営業日</td>
                                    <td class="font-bold">
                                        5,500円
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス作成</th>
                                    <td>メールアカウント設定を追加します<br>（100アカウントまで）</td>
                                    <td>2営業日</td>
                                    <td class="font-bold">
                                        5,500円
                                    </td>
                                </tr>
                                <tr>
                                    <th>独自ドメイン設定</th>
                                    <td>独自ドメイン設定を追加します<br>（10ドメインまで）</td>
                                    <td>2営業日</td>
                                    <td class="font-bold">
                                        5,500円
                                    </td>
                                </tr>
                                <tr>
                                    <th>サブドメイン設定</th>
                                    <td>サブドメイン設定を追加します<br>（20ドメインまで）</td>
                                    <td>2営業日</td>
                                    <td class="font-bold">
                                        5,500円
                                    </td>
                                </tr>
                                <tr>
                                    <th>サーバーのデータ削除</th>
                                    <td>指定したディレクトリ配下のデータを削除します</td>
                                    <td>3営業日</td>
                                    <td class="font-bold">
                                        11,000円
                                    </td>
                                </tr>
                                <tr>
                                    <th>その他サーバーパネルの操作代行</th>
                                    <td>サーバーパネルで提供する各機能設定の操作を代行します</td>
                                    <td>別途お見積り</td>
                                    <td>別途お見積り</td>
                                </tr>
                                </tbody>
                            </table>

                            <section id="daiko_muryo" class="block mt50">
                                <h4 class="block_ttl">無料代行サービス</h4>
                                <div class="block_body">
                                    <p>
                                        設定おまかせサポートは、<strong>ビジネスプランのみ毎月3回までは無料</strong>でご利用いただけます。
                                    </p>
									<ul class="note-list">
                                        <li>※毎月の無料回数は繰り越されず、月ごとにリセットされます。</li>
                                    </ul>
                                </div>
                            </section>

                        </div>

                    </section>
                    <!-- /.section -->


                    <section class="section">
                        <h3 class="section_ttl">利用方法について</h3>
                        <div class="section_body">
                            <p>XServerアカウントの「設定おまかせサポート」メニューよりお申し込みください。</p>
                            <p>お申し込み手順については、以下マニュアルをご確認ください。</p>
                            <p><a href="../manual/man_order_daiko.php" class="button button01--width-sm">設定おまかせサポートの利用</a></p>
                            <p>サービスの利用についてご不明点がありましたら「<a href="../support/index.php">サポート</a>」へご相談ください。</p>
                            <div class="mt40 pt40 tac">
                                Webサイトの移転については「サーバー移転代行」をご利用ください。<a href="service_server_daiko.php" class="button button01--width-sm">サーバー移転代行</a>
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