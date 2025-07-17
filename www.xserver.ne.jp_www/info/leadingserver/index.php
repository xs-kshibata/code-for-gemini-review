<?php
include("../../conf.php");

mb_language("ja");
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');
?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHLFQRP');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3789601-2', {
    'optimize_id': 'GTM-WGFNFH8',
    'linker': {
      'accept_incoming': true,
      'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp']
    }
  });

  gtag('config', 'UA-3789601-22', {
      'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
      }
  });
</script>
<meta charset="euc-jp">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">

<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="index" href="<?= $SITE_URL ?>sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?= $SITE_URL ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?= $SITE_URL ?>img/common/apple-touch-icon-precomposed.png">
<noscript>
    <style>.srcset { visibility: visible !important; }</style>
</noscript>
<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
    var element = document.documentElement;
    element.classList.remove('no-js');
</script>
<link href="css/site.css?<?php echo time(); ?>" rel="stylesheet">
<link href="css/slick.css" rel="stylesheet">
<title>さらに先を行く、エックスサーバー 次世代のホスティングをリードする国内最速サーバーへ │ <?= $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは、さらに高速かつ安定したサーバー環境を提供するため、最先端のサーバーマシンを採用し、国内最速の環境を実現しています。「AMD EPYC&trade;」、オール「NVMe」採用。第3世代エックスサーバーはさらなる高みへ。">
<meta property="og:title" content="さらに先を行く、エックスサーバー 次世代のホスティングをリードする国内最速サーバーへ │ <?= $SITE_TITLE; ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="エックスサーバーでは、さらに高速かつ安定したサーバー環境を提供するため、最先端のサーバーマシンを採用し、国内最速の環境を実現しています。「AMD EPYC&trade;」、オール「NVMe」採用。第3世代エックスサーバーはさらなる高みへ。">
<meta property="og:url" content="<?= $SITE_URL."info/leadingserver/" ?>">
<meta property="og:image" content="<?= $SITE_URL."info/leadingserver/img/ogp.png?date=2411" ?>">
<meta property="og:site_name" content="レンタルサーバー【エックスサーバー】">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">
<link rel="canonical" href="<?= $SITE_URL."info/leadingserver/" ?>">
</head>
<body id="pid-info">
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="js/jquery.min.js"></script>
<script>document.write('<script src="<?php print $SECURE_URL; ?>xinfo/js/header/annotation.js?date=' + new Date().getTime() + '"><\/script>');</script>

<?php include("../../top.php"); ?>
<header class="header">
    <div class="wrap">
        <div class="header__unit">
            <div class="sitelogo"><a class="hover" href="<?= $SITE_URL ?>"><img src="<?= $SITE_URL ?>img/common/img_siteid.svg?date=2411" alt="エックスサーバー"></a></div>
            <div class="servershare"><img src="img/head_share_no1.png" alt="おかげさまで国内シェアNo.1"><a href="#servershare">※</a></div>
            <div class="servershare_txt">おかげさまで国内シェア<span class="no1">No.1</span><a href="#servershare">※</a></div>
            <div class="registry"><a href="<?= $SECURE_URL;?>xinfo/?action_register_index=on" class="btn btn__primary btn__s" id="ga-x-apply-lp-header">今すぐお試し！無料10日間</a></div>
        </div>
    </div>
</header>
<main class="main">
    <section class="keyvisual">
        <div class="kv__copy">
            <div class="wrap">
                <h1 class="kv__ttl">
                    <span class="row__01 js__anime--fadein"><img src="img/kv_ttl_01.png" alt="さらに先を行く、エックスサーバー"></span>
                    <span class="row__02 js__anime--fadein"><img src="img/kv_ttl_02.png" alt="次世代のホスティングをリードする"></span>
                    <span class="row__03 js__anime--fadein"><img src="img/kv_ttl_03.png" alt="国内最速"><a href="#server" class="anchorlink">※詳細</a></span>
                    <span class="row__04 js__anime--fadein"><img src="img/kv_ttl_04.png" alt="サーバーへ"></span>
                </h1>
            </div>
        </div>
            <p class="kv__desc js__anime--fadein">エックスサーバーでは、さらに高速かつ安定したサーバー環境を提供するため、<br>最先端のサーバーマシンを採用し、国内最速の環境を実現しています。</p>
    </section>
    <section class="section section__server" id="server">
        <div class="wrap">
            <h2 class="section__ttl js__anime--fadein">圧倒的なスペックで<br>「国内最速」のサーバー環境へ</h2>
            <p class="section__desc js__anime--fadein">このたび提供を開始するサーバーの処理速度を調査したところ、<br>国内の主要レンタルサーバーサービスにおいて、最も速い環境であるとの結果が出ています。</p>
            <div class="sv__graph js__anime--fadein">
                <div class="sv__graph--image">
                    <div class="graph js__anime--graph">
                        <div class="bar__container">
                            <div class="graph__caption">(秒間リクエスト数)</div>
                            <div class="bar__group">
                                <div class="bar xserver">
                                    <div class="bar__body">
                                        <div class="colgroup">
                                            <div class="company" style="color: #ffffff; font-weight: bold"><span class="alphabet">エックスサーバー</span></div>
                                            <div class="speed"><span class="num">723.446</span></div>
                                            <div class="balloon"><img src="img/img_graph_server_balloon.png" alt="サーバー速度No.1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bar other__a">
                                    <div class="bar__body"><div class="company"><span class="alphabet">A</span>社</div><div class="bar__speed"><span class="num">307.762</span></div></div>
                                </div>
                                <div class="bar other__b">
                                    <div class="bar__body"><div class="company"><span class="alphabet">B</span>社</div><div class="bar__speed"><span class="num">87.552</span></div></div>
                                </div>
                            </div>
                            <div class="bar__rank">
                                <div class="rank xserver"><img src="img/img_rank_01.png" alt="1位"></div>
                                <div class="rank other__a"><img src="img/img_rank_02.png" alt="2位"></div>
                                <div class="rank other__b"><img src="img/img_rank_03.png" alt="3位"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sv__graph--footer" id="servershare">
                    <ul class="caution__list">
                        <li id="annotation-server_speedNo1_02">※</li>
                        <li id="annotation-shareNo1_02">※業界のシェアは</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__spec">
        <div class="wrap">
            <h2 class="section__ttl js__anime--fadein">第4世代<span class="attention">「AMD EPYC&trade;」</span>を採用、<br>オール<span class="attention">「NVMe」</span>対応！</h2>
            <p class="section__desc js__anime--fadein"> さらに高速かつ大量アクセスにも強くなった圧倒的なハイスペックサーバー</p>
            <div class="spec__info">
                <section class="infobox js__anime--fadein">
                    <h3 class="infobox__ttl"><span class="maker">第4世代「AMD EPYC&trade;」搭載</span></h3>
                    <div class="infobox__media">
                        <div class="media__image"><img src="img/img_graph_cpu.png" alt="AMD EPYC&trade;"></div>
                        <div class="media__body">
                            <p class="infobox__text">CPUには、第4世代「AMD EPYC&trade;」を採用しました。</p>
                            <p class="infobox__text">採用したCPUは、従来のものと比較して、<span class="maker">約2.2倍<sup>※</sup>もの処理性能を誇ります。</span></p>
                            <ul class="infobox__caution">
                                <li>※2024年3月時点、自社調べ。</li>
                                <li>※CPU性能は、spec.orgの評価結果を用いた比較によるもの。</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="infobox js__anime--fadein">
                    <h3 class="infobox__ttl">読み込み性能は最大約32倍<sup>※</sup>！<span class="maker">オール「NVMe」対応！</span></h3>
                    <p class="infobox__text"><span class="maker">全てのストレージで次世代の高速接続インターフェース「NVMe」</span>に対応し、さらに高速な読み書きを可能とするストライピング構成とすることで、SSDの高速性能を最大限引き出すことを可能としました。<br>オールSSDやピュアSSDと呼ばれる従来のサーバー環境と比較し、<span class="maker">読み込み速度が最大約32倍<sup>※</sup>に向上しました。</span></p>
                    <ul class="infobox__caution">
                        <li>※2024年3月時点、自社調べ。</li>
                        <li>※fioを用いた試験で128並列の負荷試験時のランダムリードのスループット比較によるもの。</li>
                    </ul>
                    <div class="infobox__image"><img src="img/img_nvme.png?date=240311" alt="読み込み性能は最大約32倍！オール「NVMe」対応！"></div>
                </section>
                <div class="infobox__colgroup">
                    <section class="infobox js__anime--fadein">
                        <h3 class="infobox__ttl">搭載メモリが1TBから<br class="visible-l">1.5TBへ増加！</h3>
                        <p class="infobox__text">搭載メモリの性能向上と1TBから1.5TBへと増加しており、プログラム処理性能を向上させることで、一層<span class="maker">高速かつ安定した動作</span>を可能としています。</p>
                    </section>
                    <section class="infobox js__anime--fadein">
                        <h3 class="infobox__ttl">サーバーあたり256コアで<br>より高速な並列処理が可能に</h3>
                        <p class="infobox__text">サーバーあたりのvCPUコア数を「256コア」に拡張し、より高速な処理性能を備えました。コア数の多さから並列処理にも強く、これまで以上に<span class="maker">大量のアクセスに耐える</span>ことが可能です。</p>
                    </section>
                </div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__history">
        <div class="wrap">
            <div class="history__header">
                <h2 class="section__ttl js__anime--fadein">常に最高のサービスを提供するため<br>最先端のサーバー環境を提供し続ける<br>エックスサーバー</h2>
                <p class="section__desc js__anime--fadein">エックスサーバーでは、お客様に最高のサービスを提供するべく、<br>これまで常に最先端のサーバー環境を提供し続けてきました。</p>
            </div>
            <div class="history__body js__anime--fadein">
                <h3 class="history__ttl"><img src="img/history_ttl.png" alt="SPEC-UP HISTORY"></h3>
                <div class="history__slider">
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2012.png" alt="2012年 高速かつ安定したサーバー環境の提供。HDD構成をRAID1からRAID10へ変更。"></div>
                        <div class="item__spec"><img src="img/history_spec_2012.png" alt="Storage：HDD RAID 1→HDD RAID 10 CPU：6コア Memory：12GB→16GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2013.png" alt="2013年 メモリ容量を1.5倍に増量し、快適な動作環境を強化。"></div>
                        <div class="item__spec"><img src="img/history_spec_2013.png" alt="Storage：HDD RAID 10 CPU：6コア Memory：16GB→24GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2015.png" alt="2015年 CPU性能が向上し、メモリ容量もさらに4倍に増量。"></div>
                        <div class="item__spec"><img src="img/history_spec_2015.png" alt="Storage：HDD RAID 10 CPU：6コア→16コア Memory：24GB→96GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2016.png" alt="2016年 サーバー基盤を刷新し、メモリ容量を倍増。より高速かつ安定した環境を実現。"></div>
                        <div class="item__spec"><img src="img/history_spec_2016.png" alt="Storage：HDD RAID 10 CPU：16コア→20コア Memory：96GB→192GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2017.png" alt="2017年 オールSSD RAID10構成を採用。ディスク読み込み速度が48倍以上に向上。"></div>
                        <div class="item__spec"><img src="img/history_spec_2017.png" alt="Storage：HDD RAID 10→SSD RAID 10 CPU：20コア Memory：192GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2018.png" alt="2018年 Intel Scalable プロセッサーを採用し、ハードウェアを大幅に増強。"></div>
                        <div class="item__spec"><img src="img/history_spec_2018.png" alt="Storage：SSD RAID 10 CPU：20コア→24コア Memory：192GB→256GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2020.png?date=210831" alt="2020年 第2世代「AMD EPYC&trade;」、オール「NVMe」採用。CPU性能、メモリ容量が倍増。"></div>
                        <div class="item__spec"><img src="img/history_spec_2020.png" alt="Storage：SSD RAID 10→NVMe RAID 10 CPU：24コア→48コア Memory：256GB→512GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2021.png?date=240306" alt="2021年 第3世代「AMD EPYC&trade;」を採用。圧倒的な高速環境へ。"></div>
                        <div class="item__spec"><img src="img/history_spec_2021.png?date=211007" alt="Storage：NVMe RAID 10 vCPU：128コア Memory：512GB→1TB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2024.png?date=240306" alt="2024年 第4世代「AMD EPYC&trade;」を採用。スペックを大幅に増強し、さらなる高みへ。"></div>
                        <div class="item__spec"><img src="img/history_spec_2024.png?date=240306" alt="Storage：NVMe RAID 10 vCPU：256コア Memory：1TB→1.5TB"></div>
                    </div>
                </div>
                <div class="history__slider--btns"><button type="button" class="btn prev">前へ</button><button type="button" class="btn next">次へ</button></div>
                <ul class="history__slider--indicator">
                    <li class="indicator__01"><button type="button" class="btn btn--indicator is-active"></button></li>
                    <li class="indicator__02"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__03"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__04"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__05"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__06"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__07"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__08"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__09"><button type="button" class="btn btn--indicator"></button></li>
                </ul>
                <div class="history__chronology"><img src="img/history_bg_arrow.png?date=210831" alt="SPEC-UP HISTORY"></div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__future" id="js__particle">
        <div class="wrap">
            <div class="section__caption js__anime--fadein"><img src="img/img_tobecontinued.png" alt="To be continued..."></div>
            <h2 class="section__ttl js__anime--fadein">快適なサーバー環境を提供できるよう<br>エックスサーバーはこれからもさらに進化し続けていきます。</h2>
            <div class="registry js__anime--fadein"><a href="<?= $SECURE_URL;?>xinfo/?action_register_index=on" class="btn btn__primary" id="ga-x-apply-lp-footer">次世代サーバーを今すぐお試し!無料10日間</a></div>
            <ul class="snslist js__anime--fadein">
                <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="ja" data-url="<?= $SITE_URL."info/leadingserver/" ?>" data-text="さらに先を行く、エックスサーバー 次世代のホスティングをリードする国内最速サーバーへ | レンタルサーバー【エックスサーバー】">Tweet</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                <li><div class="fb-like" data-href="<?= $SITE_URL."info/leadingserver/" ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div></li>
                <li><a href="http://b.hatena.ne.jp/entry/<?= $SITE_URL."info/leadingserver/" ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="さらに先を行く、エックスサーバー 次世代のホスティングをリードする国内最速サーバーへ | レンタルサーバー【エックスサーバー】" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
            </ul>
        </div>
    </section><!-- /.section -->
</main>
<footer class="footer">
    <p class="copyright"><small>&copy; 2003-<?php print date( "Y" , time() ) ?> XServer Inc.</small></p>
</footer>
<script src="js/particles.min.js"></script>
<script src="js/jquery-numerator.js"></script>
<script src="js/scrollMonitor.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<?php include("../../bottom.php"); ?>