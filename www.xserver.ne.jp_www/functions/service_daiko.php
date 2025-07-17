<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

    <title>設定代行サービス | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「設定代行サービス」を提供しています。">
    <meta property="og:title" content="設定代行サービス【エックスサーバー】">
    <meta property="og:description" content="エックスサーバーでは、弊社のエンジニアスタッフによる「設定代行サービス」を提供しています。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php print $SITE_URL; ?>functions/service_daiko.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png">
    <meta property="og:site_name" content="設定代行サービス【エックスサーバー】">
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
                        <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
                        <?php include("subnav.php"); ?>
                    </header>
                    <!-- /.main-header -->

                    <?php include("../topicpath.php"); ?>

                    <p class="ttl"><span class="label">設定代行</span></p>

                    <section class="section">
                        <h3 class="section_ttl">設定代行サービス</h3>
                        <div class="section_body">
                            <div class="lede media">
                                <p class="media_image media_image_rev"><img src="../img/functions/img_transfer_server_agency.png?date=190620" alt="サーバー移転代行サービス"></p>
                                <p class="media_body">弊社のエンジニアスタッフが作業を代行する<br class="visible-l">「設定代行サービス」</p>
                            </div>
                            <p>
                                エックスサーバーでは、弊社のエンジニアスタッフによる「設定代行サービス」をオプションサービスとして提供しています。<br>
                                Webサイト・WordPressの移転や各種機能の設定に対応しており、 レンタルサーバーが初めての方にも安心してご利用いただけます。
                            </p>

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
                                    <th class="w15per">所用日数</th>
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
                                    <th>サーバー移転</th>
                                    <td>WebサイトやWordPressなどのサーバー移転が可能です<br>(1件まで)</td>
                                    <td>5営業日</td>
                                    <td class="font-bold">
                                        33,000円<br>
                                        <span class="font-xs font-normal">
                                            ※移転するサイト1件あたり<br>
                                            <a href="#joken">※適用条件あり</a>
                                        </span>
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
                            <ul id="joken" class="note-list mb0 font-s">
                                <li>※お客様の設定や環境によっては、ご依頼を承ることができない場合がございます。</li>
                                <li>※お申し込みが集中した場合、ご案内や作業にお時間をいただく場合がございます。</li>
                            </ul>

                            <p class="tac mt30">
                                <a href="<?php print $XBIZ_URL; ?>" target="_blank" class="btn"><img src="../img/functions/daiko_xbiz_banner.png" class="fluid-sm" alt="法人向けレンタルサーバー「XServerビジネス」"></a>
                            </p>

                        </div>

                    </section>
                    <!-- /.section -->


                    <section class="section">
                        <h3 class="section_ttl">利用方法について</h3>
                        <div class="section_body">
                            <p>XServerアカウントの「設定代行サービス」メニューよりご利用ください。<br>
                                設定の方法や、サーバーパネル内機能での対応の可否をご案内いたします。<br>
                                詳細なご利用方法については、マニュアル「<a href="../manual/man_order_daiko.php">設定代行サービスのお申し込み</a>」をご参照ください。</p>
                            <p>また、設定代行サービスについてご不明な点はサポートへとお問い合わせください。<br>
                                窓口のご連絡先は「<a href="../support/index.php">お問い合わせ</a>」をご参照ください。</p>
                            <p>操作に不安を感じた際は、弊社エンジニアスタッフによる確実な対応が可能な「設定代行サービス」をぜひご利用ください。</p>
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