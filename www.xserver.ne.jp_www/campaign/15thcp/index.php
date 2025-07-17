<?php include("../../conf.php"); ?>
<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ltie7 no-js"> <![endif]-->
<!--[if IE 7 ]> <html lang="ja" class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="ja" class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]> <html lang="ja" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js"> <!--<![endif]-->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-3789601-2', {
        'optimize_id': 'GTM-WGFNFH8',
        'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'ssl.xdomain.ne.jp']
        }
      });
    </script>
    <meta charset="euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="Copyright XServer Inc.">
    <meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">
    <meta name="description" content="エックスサーバー15周年記念！ご愛顧感謝キャンペーン！レンタルサーバー『エックスサーバー』をご利用中の方、または期間中に新規ご契約される方を対象に抽選で合計60名様に豪華賞品が当たる『15周年ありがとうキャンペーン！』、新規ご契約時に独自ドメインが無料でもらえる『新規ご契約ありがとうキャンペーン！』のほか、どなたでも参加できる『Twitterプレゼントキャンペーン』の、豪華3本立てのキャンペーンとなっています。">
    <meta name="google-site-verification" content="dpAxN8yem9Np-8sgdxIvpL_D-yi-hfUgvYmPtwVU0MA">

    <meta property="og:title" content="エックスサーバー15周年記念！ご愛顧感謝キャンペーン">
    <meta property="og:type" content="website">
    <meta property="og:description" content="エックスサーバー15周年記念！ご愛顧感謝キャンペーン！レンタルサーバー『エックスサーバー』をご利用中の方、または期間中に新規ご契約される方を対象に抽選で60名様に豪華賞品が当たる『15周年ありがとうキャンペーン！』、新規ご契約時に独自ドメインが無料でもらえる『新規ご契約ありがとうキャンペーン！』のほか、どなたでも参加できる『Twitterプレゼントキャンペーン』の、豪華3本立てのキャンペーンとなっています。">
    <meta property="og:url" content="<?php print $SITE_URL; ?>campaign/15thcp/">
    <meta property="og:image" content="<?php print $SITE_URL; ?>campaign/15thcp/img/ogp.png">
    <meta property="og:site_name" content="エックスサーバー15周年記念！ご愛顧感謝キャンペーン | レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">

    <?php if($PC_LAYOUT){ ?>
        <meta name="viewport" content="width=1024">
    <?php }else{ ?>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <?php } ?>

    <meta name="format-detection" content="telephone=no">

    <link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
    <link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">
    <?php include("../../canonical.php"); ?>

    <!--[if lt IE 9]>
    <script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
    <![endif]-->

    <noscript>
        <style>.ltie7 body, .ie7 body, .ie8 body, .srcset { visibility: visible !important; }</style>
    </noscript>

    <title>エックスサーバー15周年記念！ご愛顧感謝キャンペーン</title>
    <script src="<?php print_fileURL("js/google.js"); ?>"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
    <script type="text/javascript">
        var conditions_a8= ["www.xserver.ne.jp","business.xserver.ne.jp","support.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
    </script>

    <link href="<?php print_fileURL("css/base.css"); ?>" rel="stylesheet">
    <link href="<?php print_fileURL("campaign/15thcp/css/15cp.css"); ?>" rel="stylesheet">

    </head>

    <body id="cpTop">

<?php include("../../top.php"); ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

<div id="cpWrapper">

    <div id="toggle-target">

        <section class="header">
            <div class="header_body clearfix">
                <h1 class="logo">
                    <a href="<?php print $SITE_URL; ?>campaign/15thcp/"><img src="./img/logo.png" alt="エックスサーバー株式会社" class="flex"></a>
                </h1>

                <div class="shared">
                    <div class="shared_toggle"></div>
                    <ul class="shared_list">

                        <li class="listItem">
                            <div class="fb-like" data-href="https://www.xserver.ne.jp/campaign/15thcp/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                        </li>
                        <li class="listItem">
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-url="https://www.xserver.ne.jp/campaign/15thcp/" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li class="listItem">
                            <g:plusone></g:plusone>
                        </li>
                        <li class="listItem">
                            <a href="http://b.hatena.ne.jp/entry/s/www.xserver.ne.jp/campaign/15thcp/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" title="エックスサーバー15周年記念！ご愛顧感謝キャンペーン"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
                        <li class="listItem"><div class="line-it-button" data-lang="ja" data-type="share-a" data-url="https://www.xserver.ne.jp/campaign/15thcp/" style="display: none;"></div>
                            <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /.header -->

        <section class="mv">
            <div class="mv_body">
                <h2>
                    <img src="./img/img_mv_main_catch_l.png" alt="エックスサーバーサービス開始15周年記念ご愛顧感謝キャンペーン" class="srcset flex">
                </h2>
                <p align="center"><img src="./img/img_cp_end.png?date=20181026" width="100%" alt="このキャンペーンは終了しました"></p>
                <ul class="campaignList clearfix">
                    <li class="campaignList_item">
                        <a href="#thanks"><img src="./img/img_mv_campaign1.png?date=20180822"
                                               alt="15周年ありがとうキャンペーン iPadやApple Watchなど豪華賞品が当たる！"
                                               class="flex"></a>
                    </li>
                    <li class="campaignList_item">
                        <a href="#twi"><img src="./img/img_mv_campaign2.png?date=20180822"
                                            alt="Twitterプレゼントキャンペーン Amazonギフト券3,000円分が抽選で50名様に当たる！総額15万円分"
                                            class="flex"></a>
                    </li>
                    <li class="campaignList_item">
                        <a href="#domain"><img src="./img/img_mv_campaign3.png?date=20180822"
                                               alt="新規ご契約ありがとうキャンペーン お好きなドメインをおひとつプレゼント！"
                                               class="flex"></a>
                    </li>
                </ul>
            </div>
            <div class="period">
                <s><p>キャンペーン期間：<br class="hidden-l"><span>2018</span>年<span>8</span>月<span>20</span>日（月）<br class="hidden-l">〜<span>2018</span>年<span>10</span>月<span>31</span>日（水）</s><br><span class="font-bold red">本キャンペーンは終了しました。</span></p>
            </div>
        </section>
        <!-- /.mv -->

        <section class="lead">
            <p>「エックスサーバー」は、サービス開始以降多くのお客様よりご愛顧を賜り、<br>おかげさまで2018年7月をもって15周年を迎えることができました。</p>
        </section>
        <!-- /.lead -->

        <section id="thanks" class="thanks pt0">
            <h3 class="thanks_ttl">
                <img src="./img/img_ttl_thanks_l.png" alt="15周年ありがとうキャンペーン" class="srcset flex">
            </h3>
            <div class="thanks_body">
                <div class="catch">
                    <img src="./img/img_catch_thanks_l.png" alt="すでにご契約中の方、期間中に新たにご契約いただいた方が応募可能！iPadやApple Watchなど豪華賞品が抽選で合計60名様に当たる！" class="srcset flex">
                </div>
                <div class="thanksPrize-first">
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_a.png" alt="A賞　2名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_a.png" alt="" class="flex"></p>
                        <div class="itemDetail">
                            <p class="itemDetail_cat">タブレット+スタイラスペン</p>
                            <div class="itemDetail_name">
                                <span>Apple</span>
                                <ul class="ul">
                                    <li>iPad Wi-Fiモデル　9.7インチ 128GB</li>
                                    <li>Apple Pencil</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thanksPrize clearfix">
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_b.png" alt="B賞　2名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_b.png" alt="" class="flex"></p>
                        <div class="itemDetail">
                            <p class="itemDetail_cat">スマートウォッチ</p>
                            <div class="itemDetail_name">
                                Apple<br>Apple Watch Series 3（GPS）
                            </div>
                        </div>
                    </div>
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_c.png" alt="C賞 2名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_c.png" alt="" class="flex"></p>
                        <div class="itemDetail">
                            <p class="itemDetail_cat">Bluetooth&reg;イヤフォン</p>
                            <div class="itemDetail_name">Apple<br>AirPods</div>
                        </div>
                    </div>
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_d.png" alt="D賞 2名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_d.png" alt="" class="flex"></p>
                        <div class="itemDetail">
                            <p class="itemDetail_cat">Alexa搭載デバイス</p>
                            <div class="itemDetail_name">Amazon<br>Amazon Echo</div>
                        </div>
                    </div>
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_e.png" alt="E賞 2名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_e.png" alt="" class="flex"></p>
                        <div class="itemDetail">
                            <p class="itemDetail_cat">大容量モバイルバッテリー</p>
                            <div class="itemDetail_name">Anker<br>PowerCore+ 20100 USB-C</div>
                        </div>
                    </div>
                </div>
                <div class="thanksPrize-wchance">
                    <p><img src="./img/thanks_wchance_lead.png" alt="上記特典にはずれても、さらにチャンス！" class="flex"></p>
                    <div class="prizeItem">
                        <figure class="prizeItem_band">
                            <img src="./img/img_prizeBand_w.png" alt="Wチャンス賞 50名様">
                        </figure>
                        <p class="prizeItem_img"><img src="./img/img_prize_w.png" alt="" class="flex"></p>
                    </div>
                </div>
                <div class="convArea">

                </div>
                <div class="overview">
                    <h4 class="overview_ttl">15周年ありがとうキャンペーン詳細<span class="overview_toggle ml10 hidden-l"></span></h4>
                    <table class="overview_table">
                        <tr>
                            <th>概要</th>
                            <td>レンタルサーバー「エックスサーバー」をご利用中の方、または期間中に新規ご契約される方を対象に抽選で60名様に豪華賞品をプレゼントいたします。</td>
                        </tr>
                        <tr>
                            <th>キャンペーン期間</th>
                            <td><s>2018年8月20日(月)12:00〜2018年10月31日(水)18：00まで</s><br>
                                <span class="font-bold red">本キャンペーンは終了しました。</span></td>
                        </tr>
                        <tr>
                            <th>参加条件</th>
                            <td>キャンペーン期間終了時点で、試用期間を除くレンタルサーバー「エックスサーバー」のサーバーアカウントをご契約中の方<br>※XServerアカウントごとに1回ご応募が可能です。</td>
                        </tr>
                        <tr>
                            <th>当選賞品</th>
                            <td>【A賞】iPad (第6世代) Wi-Fiモデル 9.7インチ 128GB + Apple Pencil　2名様<br>
                                【B賞】Apple Watch Series 3 （GPS）　2名様<br>
                                【C賞】Apple AirPods　2名様<br>
                                【D賞】Amazon Echo 　2名様<br>
                                【E賞】Anker PowerCore+ 20100 USB-C 　2名様<br>
                                【Wチャンス賞】Amazon<span class="agreementTxt">ギフト券</span> 3,000円分　50名様</td>
                        </tr>
                        <tr>
                            <th>プレゼント進呈・当選までの流れ</th>
                            <td>
                                <ol class="ol">
                                    <li>上記「15周年ありがとうキャンペーンに応募する」ボタンを押し、遷移先のフォームで賞品をお選びいただきご応募ください。</li>
                                    <li>キャンペーン期間終了後、応募者の中から抽選を行います。</li>
                                    <li>当選者へ賞品を発送いたします。</li>
                                </ol>
                                <p>その他の注意事項は<a href="#notes_thanks">こちら</a>をご覧ください。</p>
                            </td>
                        </tr>
                    </table>
                    <!-- /.overview_table -->
                </div>
            </div>
        </section>
        <!-- /.thanks -->

        <section id="twi" class="twi">
            <h3 class="twi_ttl">
                <img src="./img/img_ttl_twi_l.png" alt="Twitterプレゼントキャンペーン" class="srcset flex">
            </h3>
            <div class="twi_body">
                <div class="catch">
                    <img src="./img/img_catch_twi_l.png" alt="フォロー＆ツイートで！Amazonギフト券3,000円分が50名様に当たる！" class="srcset flex">
                </div>
                <div class="apply">
                    <p class="apply_ttl">キャンペーンの応募方法</p>
                    <p class="apply_lead">Twitterアカウントさえあれば誰でもカンタンに応募できます！</p>
                    <div class="step clearfix fixheight">
                        <div class="step_item step_itemL">
                            <p><img src="./img/img_twiStep_1.png" alt="STEP1"><span>エックスサーバー公式アカウントを<br class="hidden-s">フォローする</span></p>
                            <p>Twitterアカウント『@xserverjp』をフォローしてください。応募にはTwitterアカウントが必要です。お持ちでない方はTwitter公式サイトにて取得（無料）できます。</p>
                            <figure></figure>
                        </div>
                        <div class="step_item">
                            <p><img src="./img/img_twiStep_2.png" alt="STEP2"><span>ツイートして応募する</span></p>
                            <p>「ツイートする」ボタンをクリックすると、Twitter画面が立ち上がります。キャンペーン用の内容が入力されていますので、ボタンを押してツイートを行ってください。</p>

                        </div>
                    </div>
                </div>
                <div class="overview">
                    <h4 class="overview_ttl">Twitterプレゼントキャンペーン詳細<span class="overview_toggle ml10
                    hidden-l"></span></h4>
                    <table class="overview_table">
                        <tr>
                            <th>概要</th>
                            <td>期間中、当社Twitterアカウントをフォローした上で、指定した内容をツイートしていただいた方の中から抽選で50名様にAmazon<span class="agreementTxt">ギフト券</span>をプレゼントいたします。</td>
                        </tr>
                        <tr>
                            <th>キャンペーン期間</th>
                            <td><s>2018年8月20日(月)12:00〜2018年10月31日(水)18：00まで</s><br>
                            <span class="font-bold red">本キャンペーンは終了しました。</span></td>
                        </tr>
                        <tr>
                            <th>参加条件</th>
                            <td>
                                <ul class="ul">
                                    <li>エックスサーバーのTwitterアカウント(@xserverjp)をフォロー</li>
                                    <li>「#エックスサーバー15周年記念！ご愛顧感謝キャンペーン」というハッシュタグの付いた、所定の内容をツイート<br>（所定の内容を含んでいればリツイートも可）</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>当選賞品</th>
                            <td>Amazon<span class="agreementTxt">ギフト券</span> 3,000円分 50名様</td>
                        </tr>
                        <tr>
                            <th>当選までの流れ</th>
                            <td>
                                <ol class="ol mb0">
                                    <li>当社のツイッターアカウント@xserverjpをフォローしてください。</li>
                                    <li>所定の内容（上記参照）をツイートしてください。</li>
                                    <li>キャンペーン期間終了後、応募者の中から抽選いたします。</li>
                                    <li>当選者の方にはツイッターの『ダイレクトメッセージ』にて、当選通知を行います。<br>@xserverjpよりお送りしたダイレクトメッセージの内容にしたがって賞品をお受け取りください。
                                    </li>
                                </ol>
                                <p>その他の注意事項は<a href="#notes_twi">こちら</a>をご覧ください。</p>
                            </td>
                        </tr>
                    </table>
                    <!-- /.overview_table -->
                </div>
            </div>
        </section>
        <!-- /.twi -->

        <section id="domain" class="domain pb70">
            <h3 class="domain_ttl">
                <img src="./img/img_ttl_domain_l.png" alt="新規ご契約ありがとうキャンペーン" class="srcset flex">
            </h3>
            <div class="domain_body">
                <div class="catch">
                    <img src="./img/img_catch_domain_l.png" alt="新規サーバーご契約で、もれなく全員！お好きな独自ドメインをおひとつプレゼント！" class="srcset flex">
                </div>
                <ul class="domainPrize clearfix">
                    <li class="domainPrize_item">
                        <figure class="domainPrize_item_band"><img src="./img/img_point1.png" alt=""></figure>
                        <p class="domainPrize_item_ttl">人気5種から選べる！</p>
                        <p class="domainPrize_item_txt">.com .net なども<br>選択可能！</p>
                        <figure class="domainPrize_item_figure"><img src="./img/img_prize_domain_1.png" alt=""></figure>
                    </li>
                    <li class="domainPrize_item">
                        <figure class="domainPrize_item_band"><img src="./img/img_point2.png" alt=""></figure>
                        <p class="domainPrize_item_ttl">運用コストがゼロ！</p>
                        <p class="domainPrize_item_txt">サーバーをご利用の間は<br>更新費用もずっと無料！</p>
                        <figure class="domainPrize_item_figure"><img src="./img/img_prize_domain_2.png" alt=""></figure>
                    </li>
                    <li class="domainPrize_item">
                        <figure class="domainPrize_item_band"><img src="./img/img_point3.png" alt=""></figure>
                        <p class="domainPrize_item_ttl">取得・移管もOK!</p>
                        <p class="domainPrize_item_txt">他サービスからの<br>移管にも適用可能！</p>
                        <figure class="domainPrize_item_figure"><img src="./img/img_prize_domain_3.png" alt=""></figure>
                    </li>
                </ul>
                <div class="convArea">
                </div>
                <div class="overview">
                    <h4 class="overview_ttl">新規ご契約ありがとうキャンペーン詳細<span class="overview_toggle ml10
                    hidden-l"></span></h4>
                    <table class="overview_table">
                        <tr>
                            <th>概要</th>
                            <td>キャンペーン期間中に新規でサーバーをご契約いただきますと、.com/.net/.org/.biz/.infoの中からお好きな独自ドメインをおひとつプレゼントいたします。
                            </td>
                        </tr>
                        <tr>
                            <th>キャンペーン期間</th>
                            <td><s>2018年8月20日(月)12:00〜2018年10月31日(水)18：00まで</s><br>
                            <span class="font-bold red">本キャンペーンは終了しました。</span></td>
                        </tr>
                        <tr>
                            <th>キャンペーン対象</th>
                            <td>期間中、新規にお申し込みいただき、ご利用料金をお支払いいただいたレンタルサーバー「エックスサーバー」のサーバーアカウント（X10、X20、X30プラン）</td>
                        </tr>
                        <tr>
                            <th>特典内容</th>
                            <td>キャンペーン対象のサーバーアカウントをご契約いただいた方に、独自ドメイン(.com/.net/.org/.biz/.infoからいずれか)をおひとつプレゼント！<br>今回ご契約のサーバーをご利用の間は、進呈したドメインの更新費も無料！ドメインの移管でもOK！</td>
                        </tr>
                        <tr>
                            <th>プレゼント進呈までの流れ</th>
                            <td>
                                <ol class="ol">
                                    <li>サーバーの新規お申し込み
                                        　上記の「エックスサーバーの新規お申し込みはこちらボタン」から、サーバーをお申し込みください。詳しくは、<a href="https://www.xserver.ne.jp/order/" target="_blank">サーバー新規お申し込み</a>をご覧ください。</li>
                                    <li>サーバー料金お支払い後、XServerアカウントにログインし、「キャンペーンドメイン」内からドメインをお申し込みいただけます。詳しくは、<a href="https://www.xserver.ne.jp/manual/man_order_campaign_domain.php" target="_blank">キャンペーンドメインのお申し込みの手順</a>をご覧ください。</li>
                                    <li>独自ドメインをおひとつ進呈いたします。</li>
                                </ol>
                                <p>その他の注意事項は<a href="#notes_domain">こちら</a>をご覧ください。</p>
                            </td>
                        </tr>
                    </table>
                    <!-- /.overview_table -->
                </div>
            </div>
        </section>
        <!-- /.domain -->

        <section class="notes">
            <h3 class="notes_ttl">注意事項</h3>
            <div class="notes_body">
                <h4 id="notes_thanks">15周年ありがとうキャンペーンについて</h4>
                <ul class="ul">
                    <li>諸事情により、事前の予告なく賞品の内容が一部変更される場合があります。</li>
                    <li>レンタルサーバー「エックスサーバー」以外のサーバーアカウントでは本キャンペーンの対象となりません。</li>
                    <li>本キャンペーン終了時点で、レンタルサーバー「エックスサーバー」の有効なサーバー契約(料金お支払いまで行っていただいたアカウント)をお持ちの方が対象となります。</li>
                    <li>期間終了間際に料金をお支払いの場合は、クレジットカード、またはコンビニ決済でのお支払いをご検討ください。<br>銀行振り込みの場合、入金の確認に時間がかかってしまい、期間内に間に合わない可能性があります。 </li>
                    <li>当選の発表は賞品の発送をもって代えさせていただきます。</li>
                    <li>賞品を発送した後、宛先住所不明などの理由で返送されてきた場合や、お知らせいただいた通知先に不備があり、連絡不能となった場合は当選を無効とする可能性がありますのでご了承ください。</li>
                    <li>当選の権利は他人へ譲渡・換金・変更することができません。</li>
                    <li>賞品の発送は国内に限らせていただきます。</li>
                    <li>下記のような内容についてお問い合わせをいただいてもご返答いたしかねます。
                        <ol class="ol mb0">
                            <li>賞品の仕様や詳細な内容について</li>
                            <li>応募状況や抽選方法、抽選結果について</li>
                            <li>そのほか、本キャンペーンとは無関係と思われるものについて</li>
                        </ol>
                    </li>
                </ul>

                <h4 id="notes_twi">Twitterプレゼントキャンペーンについて</h4>
                <ul class="ul">
                    <li>ご応募にはTwitterアカウントが必要です。</li>
                    <li>本キャンペーンへご応募いただくには、当社公式アカウント(@xserverjp)のフォローが必要です。</li>
                    <li>指定されたツイート内容を改変している場合(ハッシュタグを付けていない、文章の改変、URLが付いていない等)や、非公開設定にしているアカウントでのツイートはキャンペーン対象外です。</li>
                    <li>ご応募は日本国内にお住まいの方に限らせていただきます。</li>
                    <li>ツイートの投稿によって発生したトラブルにつきましては、本キャンペーンでは一切責任を負えません。あらかじめ本条件をご了承の上、ご参加ください。</li>
                    <li>本キャンペーンへの参加のために、複数のTwitterアカウントを作成することはご遠慮ください。</li>
                    <li>多数のアカウントを連続して作成されますと、Twitterルールに違反する恐れがありますので、ご注意ください。</li>
                    <li>同アカウントからの複数の応募があった場合、最も古い日時に投稿されたもの1つのみを有効といたします。<br>なお、同じ内容を繰り返し投稿する行為は、Twitterルールに違反する恐れがありますので、ご注意ください。
                    </li>
                    <li>不正な方法による本キャンペーンへの応募があったと当社が判断した場合、応募は無効といたします。</li>
                    <li>当選の権利は他人へ譲渡・換金・変更することができません。</li>
                    <li>当選発表は、Twitter上のダイレクトメッセージを用いて行います。</li>
                    <li>お知らせいただいた通知先、発送先などに不備があった場合、当選連絡が行えなくなる場合があります。</li>
                    <li>連絡不能となった場合は当選を無効とする可能性がありますのでご了承ください。</li>
                    <li>下記の場合は当選を無効といたします。
                        <ol class="ol mb0">
                            <li>当選時に当社公式アカウント(@xserverjp)へのフォローが解除されている場合</li>
                            <li>当該のツイートやアカウントが削除されている場合</li>
                            <li>Twitterを退会されている場合</li>
                        </ol>
                    </li>
                    <li>抽選方法や当選結果については、お問い合わせいただいてもお答えいたしかねます。</li>
                    <li>本キャンペーンは、「Twitter」を活用したキャンペーンです。<br>Twitterが提供するサービスの都合により、ログインや投稿が困難で応募ができない、またはキャンペーン運営の中断や中止をせざるを得ない状況が発生した場合においても、当社は責任を負いかねますので、あらかじめご了承ください。</li>
                    <li>ご利用の通信端末や通信業者の提供するサービスの不具合などにより、本キャンペーンへの応募ができない場合や、情報漏えいその他の損害が発生した場合なども、当社は責任を負いかねますので、あらかじめご了承ください。</li>
                </ul>

                <h4 id="notes_domain">新規ご契約ありがとうキャンペーンについて</h4>
                <ul class="ul">
                    <li>独自ドメインの進呈は、ご利用料金のお支払い後となりますので、予めご了承ください。</li>
                    <li>レンタルサーバー「エックスサーバー」のサーバーご契約1件ごとに、独自ドメインを1個進呈いたします。<br>ご希望のドメインが空いているかを予めご確認ください。(<a href="https://www.xserver.ne.jp/order/whois.php" target="_blank">独自ドメイン空き検索</a>)</li>
                    <li>対象ドメイン(.com/.net/.org/.biz/.info)以外は、キャンペーンドメインとしての取り扱いができません。</li>
                    <li>キャンペーン期間中にお申し込みいただいたレンタルサーバー「エックスサーバー」のサーバーアカウントが対象となります。<br>期間前にお申し込みいただいたサーバーアカウントの場合、期間中にご入金いただきましてもキャンペーン適用外となりますのでご注意ください。
                    </li>
                    <li>キャンペーンドメインとしてお申し込みいただいたドメイン名は、変更や取得のキャンセルが行えません。<br>ドメイン名のご入力時など、誤りが無いよう十分にご注意ください。 </li>
                    <li>キャンペーンドメインのお申し込みは、2018年11月30日(金)までに行ってください。(<a href="https://www.xserver.ne.jp/manual/man_order_campaign_domain.php" target="_blank">キャンペーンドメインお申し込み方法</a>)</li>
                </ul>

                <h4>個人情報について</h4>
                <ul class="ul">
                    <li>当選者からお知らせいただいた個人情報は、当選後の連絡や賞品の発送のために利用することがあります。<br>ご応募の際は、下記の「個人情報の取り扱い」をよくご確認の上、同意した上でご応募ください。<br>
                        <textarea readonly="">
個人情報の取扱いについて


エックスサーバー株式会社
個人情報保護管理者　取締役　辰巳準之介


お客様からお預かりした氏名、住所、および連絡先は、「個人情報」として扱い、エックスサーバー株式会社（以下「当社」という）が直接取得、保管、管理、又は処理します。

（１）個人情報の利用目的について
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
当社は、下記利用目的の達成に必要な範囲で、個人情報を利用します。

・賞品の配布、配送のため
・応募者との相互連絡、およびお問い合わせいただいた場合の回答を行うため


（２）個人情報の第三者提供について

取得した個人情報を、予め本人の同意を得ることなく第三者に提供することはありません。
提供される個人情報は、必要となる最小限の個人情報のみとし、かつ使用範囲もその範囲に限定します。


（３）個人情報の委託について　
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
取得した個人情報を、委託することはありません。


（４）クッキーの使用について
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
当サイトでは、お客様により便利にご利用いただくため、クッキーという技術を使用しています。クッキーを使用することで、ウェブサイトはお客様のコンピュータを識別できるようになりますが、お客様個人を特定できるものではありません。
また、お客様はブラウザの設定により、クッキーの受取りを拒否することができます。その場合、当サイトが提供するサービスを一部ご利用できない場合があります。


（５）ウェブビーコンの使用について
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
当サイトは、お客様へのサービス向上等に役立てるため、ウェブビーコンの技術を使用する場合がありますが、ウェブビーコンを使用することで、お客様の個人情報を取得することはありません。


（６）個人情報提供の任意性について
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
当社に個人情報をご提供いただくことは任意ですが、所定の個人情報をご提供いただくことができない場合、賞品の発送ができませんので、あらかじめご了承ください。


（７）開示対象個人情報の開示等ついて
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
当社は、ご本人からの開示対象個人情報の開示、利用目的の通知、訂正、利用停止及び第三者提供の停止等のご請求を受付けております。開示等に応ずる窓口は、以下の「個人情報に関するお問合せ先」をご覧下さい。


【個人情報に関するお問合せ先】
エックスサーバー株式会社 苦情・相談窓口
電話　　：06-6292-8811（受付時間 10：00〜18：00（土日祝日、弊社指定休業日を除く））
E-mail　：privacy@xserver.co.jp
所在地　：〒530-0011　大阪市北区大深町4-20　グランフロント大阪　タワーA　32F
                                        </textarea></li>
                    <li>本キャンペーンへ応募された方は、上記の「個人情報の取り扱い」に同意したものといたします。<br>その他、お客様の個人情報の取り扱いについては弊社の「<a href="https://www.xserver.ne.jp/privacy.php" target="_blank">プライバシーポリシー</a>」をご参照ください。</li>
                </ul>

                <h4>お問い合わせ</h4>
                <ul class="ul">
                    <li>本キャンペーンに関するお問い合わせは【<img src="./img/address.png">】までお問い合わせください。<br>なお、抽選方法や当選結果に関するお問い合わせは回答いたしかねますのでご了承ください。
                    </li>
                </ul>

                <h4>本キャンペーンについて</h4>
                <ul class="ul">
                    <li>本キャンペーンは【エックスサーバー株式会社】による提供です。<br>本キャンペーンについてのお問い合わせは Amazon 、Anker、Appleではお受けしておりません。<br>【エックスサーバー株式会社】キャンペーン事務局【<img src="./img/address.png">】までお願いいたします。
                    </li>
                    <li>Amazon Echoはエックスサーバー株式会社によって提供されます。Amazonは本プロモーションのスポンサーではありません。</li>
                    <li>Amazon、Echo、Echo Dot、Alexaおよび、関連するすべて のロゴおよび動き商標はAmazon.com, Inc.またはその関連会社の商標です。
                    </li>
                    <li>iPad、Apple Pencil、 Apple Watch、AirPods は、Apple Inc.の商標です。</li>
                    <li>Anker、PowerCoreは、アンカー・ジャパン株式会社またはその関連会社の商標または登録商標です｡</li>
                    <li>Bluetooth&reg;のワードマークおよびロゴはBluetooth SIG,inc.が所有する登録商標です。</li>
                </ul>
            </div>
        </section>
        <!-- /.notes -->

        <section class="copyright">
            <p>&copy; 2018 XServer Inc.</p>
        </section>
        <!-- /.copyright -->

    </div>
    <!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<script src="https://apis.google.com/js/platform.js" async defer></script>

    <script>var SITE_URL = '<?php print $SITE_URL; ?>'</script>
    <script src="<?php print_fileURL("js/jquery-1.12.4.min.js"); ?>"></script>
    <script src="<?php print_fileURL("js/libs.js"); ?>"></script>
    <script src="<?php print_fileURL("/campaign/15thcp/js/15thcp.js"); ?>"></script>
<!-- Yahoo Code for your Target List -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
    ytag({
        "type":"yss_retargeting",
        "config": {
            "yahoo_ss_retargeting_id": "1000024944",
            "yahoo_sstag_custom_params": {
            }
        }
    });
</script>
<!-- Yahoo Code for your Target List -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
    ytag({
        "type":"yjad_retargeting",
        "config":{
            "yahoo_retargeting_id": "DKA25PHMA5",
            "yahoo_retargeting_label": "",
            "yahoo_retargeting_page_type": "",
            "yahoo_external_transmission_optout": true,
            "yahoo_retargeting_items":[
                {item_id: '', category_id: '', price: '', quantity: ''}
            ]
        }
    });
</script>
    </body>
</html>
