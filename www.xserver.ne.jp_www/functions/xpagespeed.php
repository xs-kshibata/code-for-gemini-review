<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<title>XPageSpeed | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Webサイト表示におけるSEO（検索エンジン最適化）機能「XPageSpeed」についてご案内しています。">

</head>

<body id="pid-functions" class="pid-feature-xpagespeed">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main" role="main">
        <div class="holder-sml">
            <header class="main-header">
                <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
                <?php include("subnav.php"); ?>
            </header>
            <!-- /.main-header -->
        </div>

        <div class="xpsIntro">
            <div class="holder-sml">
                <?php include("../topicpath.php"); ?>
            </div>

            <div class="xpsIntro__mv">
                <div class="holder-sml">
                    <p class="xps_label"><span>標準機能</span></p>
                    <h3 class="xps_logo"><img src="../img/functions/img_xps_logo.png" alt="SEO（検索エンジン最適化）機能 XPageSpeed"></h3>
                    <p class="xps_pr"><img src="../img/functions/img_xps_pr.png?date=20250707" alt="SEO対策に重要なCore Web Vitalsの改善に役立つ指標"></p>
                </div>
            </div>

            <div class="xpsIntro__func">
                <div class="holder-sml">
                    <h4 class="xpsSec__ttl"><span class="xpsSec__ttl__elm">XPageSpeedとは？</span></h4>
                    <div class="xps_features">
                        <p class="xps_features__txt">
                            「XPageSpeed」は、Google社により開発された<br class="hidden-s hidden-l">拡張モジュール「PageSpeed Module」をもとに、<br class="hidden-s">
                            エックスサーバーが開発したWebサイト最適化機能です。<br>
                            画像・CSS・JavaScriptなどの<strong class="orange">ファイルを圧縮してデータ転送量を削減</strong>したり、<br class="hidden-s">
                            <strong class="orange">同種のファイルを一つにまとめて無駄な通信を削減</strong>するなど、<br class="hidden-s">
                            Webサイト表示におけるSEO（検索エンジン最適化）のための<br class="hidden-s hidden-l">最適化処理をワンクリックで適用できます。
                        </p>
                        <div class="xps_features__img">
                            <p class="xps_features__img__logo"><img src="../img/functions/img_xps_performance_logo.png" alt="XPageSpeed"></p>
                            <ul class="xps_features__img__list">
                                <li class="xps_features__img__list-child"><img src="../img/functions/img_xps_performance_data.png" alt="ファイルサイズを自動で圧縮しデータ転送量を削減"></li>
                                <span class="xps_features__img__list-plus"></span>
                                <li class="xps_features__img__list-child"><img src="../img/functions/img_xps_performance_transmission.png" alt="同種のファイルは一つにまとめて無駄な通信を削減"></li>
                            </ul>
                            <p class="xps_features__txt mt30 mb0">お客様のオリジナルデータを改変することなく、<br class="hidden-s">Webサイトが表示されるタイミングにのみ自動的に表示データを最適化します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.xpsIntro -->

        <section class="xpsPerf xpsSec xpsSec--bg">
            <div class="holder-sml">
                <h4 class="xpsSec__ttl"><span class="xpsSec__ttl__elm">XPageSpeed導入のメリット</span></h4>
                <p class="xpsPerf__txt">
                    「XPageSpeed」を使用することで、Webサイトのデータ表示は最適化され、<br class="hidden-s hidden-l">ページのロード時間を短縮することが可能です。<br>
                    これにより、Webサイトの読み込み速度を評価する<br class="hidden-s hidden-l"><strong class="orange">「Google PageSpeed Insights<sup>※1</sup>」のスコア値が向上</strong>し、<br class="hidden-s">SEO対策に重要な<strong class="orange">「Core Web Vitals<sup>※2</sup>」</strong>の改善効果が期待できます。
                </p>
                <p class="xpsPerf__txt">当社における比較テストでは<br class="hidden-s hidden-l"><strong class="orange">「最大で264%<sup>※3</sup>」</strong>にスコア値が向上することが確認されています。</p>

                <div class="xpsPerf__img">
                    <img src="../img/functions/img_xps_performance_gpsi.png" alt="「Google PageSpeed Insights」スコアが最大264%にアップ">
                </div>
                <ul class="note-list font-s">
                    <li>※1 Google PageSpeed Insightsとは、Google社が提供するウェブページの読み込み速度をスコア測定するツールです。</li>
                    <li>※2 <a href="https://developers.google.com/search/docs/appearance/core-web-vitals?hl=ja" target="_blank" rel="nofollow">Core Web Vitals</a><i class="ico ico_new-window"></i>とは、ページの読み込みパフォーマンス、インタラクティブ性、視覚的安定性に関する実際のユーザー エクスペリエンスを測定する一連の指標を指します。Googleのランキングシステムでは Core Web Vitalsが使用されます。 </li>
                    <li>※3 当社サービス内の同一構成のサーバーに対する比較結果によるもの。</li>
                </ul>
            </div>
        </section>
        <!-- /.section -->

<!--        <section class="xpsSec xpsMerit">-->
<!--            <div class="holder-sml">-->
<!--                <h4 class="xpsSec__ttl"><span class="xpsSec__ttl__elm">期待できるメリット</span></h4>-->
<!--                <div class="xpsMeritIntro">-->
<!--                    <section class="xpsMeritIntro__item xaMeritIntro__item--seo">-->
<!--                        <div class="xpsMeritIntro__item__img"><img src="../img/functions/img_xa_merit_seo.png" alt=""></div>-->
<!--                        <h5 class="xpsMeritIntro__item__ttl">検索エンジン対策(SEO)</h5>-->
<!--                        <p class="xpsMeritIntro__item__txt"><b>Webサイトの読み込み速度は検索順位を決定する要素のひとつ</b>に数えられます。改善によって検索エンジン対策へのプラス効果が期待できます。</p>-->
<!--                    </section>-->
<!---->
<!--                    <section class="xpsMeritIntro__item xaMeritIntro__item--cvr">-->
<!--                        <div class="xpsMeritIntro__item__img"><img src="../img/functions/img_xa_merit_cvr.png" alt=""></div>-->
<!--                        <h5 class="xpsMeritIntro__item__ttl">コンバージョン率の向上</h5>-->
<!--                        <p class="xpsMeritIntro__item__txt">Webサイトの読み込み速度とコンバージョン率の相関を示す調査結果はいくつも存在し、<b>0.1秒早くなることで売上が10%向上する</b>とも言われています。</p>-->
<!--                    </section>-->
<!--                </div>-->
<!--                 /.xa-merit -->
<!--            </div>-->
<!--        </section>-->
<!--         /.section -->

        <section class="xpsSec xpsRcm">
            <div class="holder-sml">
                <div class="xpsRcm__block">
                    <h4 class="xpsRcm__block__ttl">＼ こんな方におすすめ ／</h4>
                    <div class="xpsRcm__block__body">

                        <ul class="xpsRcm__list">
                            <li><div><span>手軽に<b class="marker">SEO対策</b>がしたい</span></div></li>
                            <li><div><span>画像やCSS、JSなどの<b class="marker">読み込みファイル</b>が多い</span></div></li>
                            <li><div><span>Webサイトの表示を<b class="marker">もっと速くしたい</b></span></div></li>
                            <li><div><span>訪問者の<b class="marker">ストレス要因</b>を減らしたい</span></div></li>
                        </ul>
                        <p class="mb0">※sv10001以降のサーバーでご利用可能いただけます。</p>
                        <p class="mb0">※詳しくは「<a href="../manual/man_server_xpagespeed.php">マニュアル：XPageSpeed設定について</a>」をご確認ください。</p>

                    </div>
                </div>
            </div>
        </section>

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