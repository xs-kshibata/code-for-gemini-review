<?php
    $is_top_page = true;
?>

<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<?php
    redirect_referral();
    redirect_cp250501();
?>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type" : "WebSite",
        "name":"エックスサーバー",
        "url":"https://www.xserver.ne.jp/"
    }
</script>

<title>レンタルサーバー国内シェアNo.1のエックスサーバー WordPressが超高速</title>

<meta name="google-site-verification" content="dpAxN8yem9Np-8sgdxIvpL_D-yi-hfUgvYmPtwVU0MA">
<meta name="description" content="高速・安定のレンタルサーバーならエックスサーバー！「導入企業数22万社・運用サイト数250万件」突破の豊富な実績。WordPress関連の独自機能も提供。まずは無料お試し10日間。">
</head>

<body id="pid-top">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

    <section class="mainVisual">
        <div class="mvCp">
            <div class="holder-sm">
                <a id="ga-x-site-mb-cpBnr" class="hover" href="campaign/campaign_250703.php">
                    <picture>
                        <source media="(min-width:1100px)" srcset="img/top/mv_headbnr_l.png?date=250703">
                        <source media="(min-width:768px) and (max-width:1099px)" srcset="img/top/mv_headbnr_m.png?date=250703">
                        <img src="img/top/mv_headbnr_s.png?date=250703" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！" width="1272" height="115" fetchpriority="high">
                    </picture>
                </a>
            </div>
        </div>


        <div class="mvWordpress-b">
            <div class="mvWordpress-b-wrap">
                <h2 class="mvTtl">
                    <picture>
                        <source media="(min-width:1100px)" srcset="img/top/mv_wordpress_b_ttl_l.png?date=241225">
                        <source media="(min-width:768px) and (max-width:1099px)" srcset="img/top/mv_wordpress_b_ttl_m.png?date=241225">
                        <img src="img/top/mv_wordpress_b_ttl_s.png?date=250203" usemap="#ImageMap" alt="国内シェアNo.1のエックスサーバーならWordPressが超速・安定" width="588" height="331" fetchpriority="high">
                        <map name="ImageMap">
                            <area shape="rect" coords="534,162,565,189" class="pc-only" href="#number1" alt="※1" />
                            <area shape="rect" coords="867,263,915,305" class="tab-only" href="#number1" alt="※1" />
                            <area shape="rect" coords="271,107,290,122" class="sp-only" href="#number1" alt="※1" />
                            <area shape="rect" coords="621,143,652,169" class="pc-only" href="#number1" alt="※3" />
                            <area shape="rect" coords="999,237,1053,271" class="tab-only" href="#number1" alt="※3" />
                            <area shape="rect" coords="223,142,237,156" class="sp-only" href="#number1" alt="※3" />
                        </map>
                    </picture>
                </h2>
    
                <ul class="mvBox">
                    <li class="mvBox__item mvBox__item__price">
                        <h3 class="mvBox__item--ttl">高コスパの料金設定</h3>
						<div class="mvBox__item__inner">
							<p class="mvBox__item--cptxt">9/4まで<br class="sp-only">実質半額!</p>
							<div class="mvBox__item--cpset">
								<p class="mvBox__item--txt">実質月額 <strong><span class="num">495</span>円〜</strong></p>
								<p class="mvBox__item--sub">初期費用は無料！</p>
							</div>
						</div>
                    </li>
                    <li class="mvBox__item mvBox__item__domain">
                        <h3 class="mvBox__item--ttl">独自ドメイン</h3>
                        <div class="mvBox__item__inner">
                            <p class="mvBox__item--sub">.com  .jp  .co.jp<br class="sp-only">などの人気ドメインが</p>
                            <p class="mvBox__item--txt"><strong><span class="num">2</span>つ</strong>まで<strong><span class="big">永久無料</span></strong><sub><a href="#number1">※4</a></sub></p>
                        </div>
                    </li>
                    <li class="mvBox__item">
                        <h3 class="mvBox__item--ttl">超速・安定</h3>
                        <div class="mvBox__item__inner">
                            <p class="mvBox__item--txt">サーバー速度 <br class="sp-only"><strong><span class="num">No.1</span></strong><sub><a href="#number1">※2</a></sub></p>
                            <p class="mvBox__item--sub">稼働率<span class="num">99.99</span>%以上の実績</p>
                        </div>
                    </li>
                </ul>
    
                <div class="mvTrials__links">
                    <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" class="mvTrials__btn" target="_blank" id="ga-x-apply-mv">10日間無料で試してみる</a>
                </div>
            </div>
        </div>

        <div class="mvPickup">
			<?php /* バナー表示は３つまで*/ ?>
            <?php /*<a href="news_detail.php?view_id=9489" class="mvPickup__single hover">
                <img class="srcset" src="img/top/mv_pickup_noinitial02_l.png" alt="これからは、いつでも初期費用0円" width="416" height="94">
            </a>*/ ?>

            <div class="mvPickup__slide">
                <div class="slick-slide mvPickup__slide__item">
                    <a href="feature/wordpress_reasons.php" class="hover" id="ga-x-site-top-mvBnr-wpReasons">
                        <img class="srcset" src="img/top/mv_pickup_wpreasons_s.png" alt="エックスサーバーがWordPress運営に強い理由" width="280" height="104">
                    </a>
                </div>
                <div class="slick-slide mvPickup__slide__item">
                    <a href="functions/wptheme.php" class="hover" id="ga-x-site-top-mvBnr-wordPress">
                        <img class="srcset" src="img/top/mv_pickup_wptheme_s.png?date=241021" alt="高品質WordPressテーマを特別価格で提供中 XWRITE・SWELLなど本格的なブログやホームページがすぐ作れる！" width="280" height="104">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.main-visual -->

    <div class="contents" role="main">

        <section class="reason" id="reason">
            <div class="reason-inner holder-sml">
                <h2 class="blV2__ttl"><span class="blV2__ttl__elm">エックスサーバーが<br class="visible-s">選ばれる4つの理由</span>
                </h2>
                <div class="reason__body reason__grid">
                    <div class="reason-card">
                        <div class="reason-card__main">
                            <div class="reason-card__label">
                                <span class="reason-card__txt">理由</span>
                                <span class="reason-card__number">01</span>
                            </div>
                            <div class="reason-card__content">
                                <h3 class="reason-card__title">WordPress運営に強い</h3>
                                <div class="reason-card__details">
                                    <ul class="reason-card__feature-list">
                                        <li><span class="highlight">WordPressに精通した開発チーム</span>設置</li>
                                        <li><span class="highlight">超高速・安定稼働</span>＆<span
                                                    class="highlight">セキュリティ</span>も充実
                                        </li>
                                        <li>すぐにサイト制作が可能な<br>「<span class="highlight">WordPressクイックスタート</span>」</li>
                                    </ul>
                                    <p class="more-link"><i class="ico ico_chevron-right"></i><a href="feature/wordpress_reasons.php">もっと詳しく</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="reason-card__visuals" id="visuals-01">
                            <a href="#number1">
                                <img src="img/top/reason_wp_l.png?date=250716" class="srcset" alt="WordPress運営に強い ビジュアル">
                            </a>
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="reason-card__main">
                            <div class="reason-card__label">
                                <span class="reason-card__txt">理由</span>
                                <span class="reason-card__number">02</span>
                            </div>
                            <div class="reason-card__content">
                                <h3 class="reason-card__title">超速サーバー環境</h3>
                                <div class="reason-card__details">
                                    <ul class="reason-card__feature-list">
                                        <li>CPUには第4世代「<span class="highlight">AMD EPYC™」を採用</li>
                                        <li>全ストレージに高速インターフェース<br>「<span class="highlight">NVMe</span>」<span
                                                    class="highlight">RAID10</span>構成を採用
                                        </li>
                                        <li>対外接続容量<span class="highlight">1Tbps超</span>の<br>自社専用バックボーンネットワーク</li>
                                    </ul>
                                    <p class="more-link"><i class="ico ico_chevron-right"></i><a href="info/leadingserver/" target="_blank">もっと詳しく<i
                                                    class="ico ico_new-window"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="reason-card__visuals" id="visuals-02">
                            <a href="#number1">
                                <img src="img/top/reason_server_l.png?date=250716" class="srcset" alt="超速サーバー環境 ビジュアル">
                            </a>
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="reason-card__main">

                            <div class="reason-card__label">
                                <span class="reason-card__txt">理由</span>
                                <span class="reason-card__number">03</span>
                            </div>
                            <div class="reason-card__content">
                                <h3 class="reason-card__title">便利な独自機能</h3>
                                <div class="reason-card__details">
                                    <ul class="reason-card__feature-list">
                                        <li>サイト表示を高速化する「<a href="functions/xaccelerator.php">Xアクセラレータ</a>」</li>
                                        <li>Webサイトの表示データの最適化を行う<br>「<a href="functions/xpagespeed.php">XPageSpeed</a>」</li>
                                        <li>かんたん操作で復旧やリセットができる<br>「<a href="manual/man_server_wprecovery.php" target="_blank">WordPressリカバリー<i
                                                        class="ico ico_new-window"></i></a>」
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="reason-card__visuals" id="visuals-03">
                            <img src="img/top/reason_func_l.png?date=250716" class="srcset" alt="便利な独自機能 ビジュアル">
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="reason-card__main">

                            <div class="reason-card__label">
                                <span class="reason-card__txt">理由</span>
                                <span class="reason-card__number">04</span>
                            </div>

                            <div class="reason-card__content">
                                <h3 class="reason-card__title">運用実績とサポート</h3>
                                <div class="reason-card__details">
                                    <ul class="reason-card__feature-list">
                                        <li>サーバー運用<span class="highlight">21年以上</span>、サイト数<span class="highlight">250万以上</span>の実績</li>
                                        <li>サーバー稼働率は創業以来<span class="highlight">99.99%以上</span></li>
                                        <li><span class="highlight">無料</span>で利用可能なメール・電話サポート</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="reason-card__visuals" id="visuals-04">
                            <img  src="img/top/reason_sup_l.png?date=250716" class="srcset" alt="運用実績とサポート ビジュアル">
                        </div>
                    </div>
                </div>

                <div class="cta__btnContainer">
                    <div class="cta__btnWrap">
                        <div class="campaignBalloon cf"><span class="campaignPr">半額キャッシュバック！</span><span
                                    class="campaignLimit">9/4まで</span></div>
                        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank" class="button buttonCta">お申し込みはこちら</a>
                    </div>
                    <div class="cta__btnWrap">
                        <a href="feature/" class="button button01">特長一覧を見る</a>
                    </div>
                </div>

            </div>
        </section>


        <section class="blV2 plan holder-sml">
            <h2 class="blV2__ttl"><span class="blV2__ttl__elm">プラン一覧</span></h2>
            <div class="pldistinction">
                <div class="pldistinction__item pldistinction__item--personal">
                    <div class="pldistinction__ttl">個人利用におすすめ</div>
                    <ul class="plList">
                        <li class="plList__item plList__item--recom">
                            <div class="plList__item__wrap">
                                <div class="plListTtl">
                                    <p class="plListTtl__recom">人気のプラン</p>
									<h3 class="plListTtl__name"><span>スタンダード</span></h3>
                                    <span class="font-normal">月額 990円〜</span><br>
                                    <span class="font-s light-yellow">半額キャッシュバックで</span><br>
                                    <p class="plListTtl__price mb35 light-yellow">
                                        <span class="plListTtl__price__s">実質 </span>495<span class="plListTtl__price__s">円〜</span>
                                        <span class="plListTtl__price__balloon">9/4まで実質半額!</span>
                                    </p>
                                    <p class="plListTtl__copy plListTtl__copy--cp">コスパに優れた人気プラン！<br>
                                        個人利用はもちろん商用利用にも</p>
                                </div>
                                <div class="plListSpec">
                                    <div class="plListSpec__detail">
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption">初期費用</div>
                                            <div class="itemDetail"><span class="num">0</span>円</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">vCPU / メモリ</div>
                                            <div class="itemDetail"><span class="num">256</span>コア / <span class="num">1,536</span>GB</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">vCPU / メモリ<br class="hidden-m">リソース保証</div>
                                            <div class="itemDetail"><span class="num">6</span>コア / <span class="num">8</span>GB</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">ディスク容量</div>
                                            <div class="itemDetail"><span class="num">500</span>GB<br class="visible-l">(NVMe SSD)</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption ballon">
                                                WordPress
                                                <span class="tooltip">
                                                    <i class="imgico imgico_question tooltip_target"></i>
                                                    <span class="tooltip_content">非常に高い人気を持つプログラムで、簡単にブログやWebサイトの作成ができます。</span>
                                                </span>
                                            </div>
                                            <div class="itemDetail"><img loading="lazy" src="img/common/ico_check.svg" alt="あり" width="19" height="13"></div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption ballon">
                                                無料独自SSL
                                                <span class="tooltip">
                                                    <i class="imgico imgico_question tooltip_target"></i>
                                                    <span class="tooltip_content">独自ドメインやサブドメインを用いて、サーバーとユーザ間のデータを暗号化することができます。<br>当サーバーで運営中のドメインに対して無料・無制限で独自SSLを利用することが可能です。
        詳細は「<a href="./functions/service_ssl.php#free-ssl">無料独自SSL</a>」をご参照ください。</span>
                                                </span>
                                            </div>
                                            <div class="itemDetail"><img loading="lazy" src="img/common/ico_check.svg" alt="あり" width="19" height="13"></div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption">電話・メール<br class="hidden-m">サポート</div>
                                            <div class="itemDetail">あり</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="plListSpec__detail--itemColumn">
                                                <div class="itemCaption">独自ドメイン<br class="hidden-m">永久無料特典</div>
                                                <div class="itemDetail"><span class="num">2</span>つ</div>
                                            </div>
                                            <div class="itemDomain"><span class="domain--normal">.com</span><span class="domain--normal">.net</span>など<br>人気ドメイン<strong>11種類</strong>から選択可能</div>
                                        </div>
                                    </div>
                                    <div class="plListSpec__entry">
                                        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" class="button buttonCta" target="_blank">まずはお試し!<br class="visible-m">10日間無料!</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="plList__item">
                            <div class="plList__item__wrap">
                                <div class="plListTtl">
									<h3 class="plListTtl__name"><span>プレミアム</span></h3>
                                    <span class="font-normal">月額 1,980円〜</span><br>
                                    <span class="font-s  light-yellow">半額キャッシュバックで</span><br>
                                    <p class="plListTtl__price mb35  light-yellow">
                                        <span class="plListTtl__price__s">実質 </span>990<span class="plListTtl__price__s">円〜</span>
                                        <span class="plListTtl__price__balloon">9/4まで実質半額!</span>
                                    </p>
                                    <p class="plListTtl__copy plListTtl__copy--cp">リソース保証値がアップ！<br>
                                        大規模サイトの運営などにおすすめ！</p>
                                </div>
                                <div class="plListSpec">
                                    <div class="plListSpec__detail">
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption">初期費用</div>
                                            <div class="itemDetail"><span class="num">0</span>円</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">vCPU / メモリ</div>
                                            <div class="itemDetail"><span class="num">256</span>コア / <span class="num">1,536</span>GB</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">vCPU / メモリ<br class="hidden-m">リソース保証</div>
                                            <div class="itemDetail"><span class="num">8</span>コア / <span class="num">12</span>GB</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption tal">ディスク容量</div>
                                            <div class="itemDetail"><span class="num">600</span>GB<br class="visible-l">(NVMe SSD)</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption ballon">
                                                WordPress
                                                <span class="tooltip">
                                                    <i class="imgico imgico_question tooltip_target"></i>
                                                    <span class="tooltip_content">非常に高い人気を持つプログラムで、簡単にブログやWebサイトの作成ができます。</span>
                                                </span>
                                            </div>
                                            <div class="itemDetail"><img loading="lazy" src="img/common/ico_check.svg" alt="あり" width="19" height="13"></div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption ballon">
                                                無料独自SSL
                                                <span class="tooltip">
                                                    <i class="imgico imgico_question tooltip_target"></i>
                                                    <span class="tooltip_content">独自ドメインやサブドメインを用いて、サーバーとユーザ間のデータを暗号化することができます。<br>当サーバーで運営中のドメインに対して無料・無制限で独自SSLを利用することが可能です。
        詳細は「<a href="./functions/service_ssl.php#free-ssl">無料独自SSL</a>」をご参照ください。</span>
                                                </span>
                                            </div>
                                            <div class="itemDetail"><img loading="lazy" src="img/common/ico_check.svg" alt="あり" width="19" height="13"></div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="itemCaption">電話・メール<br class="hidden-m">サポート</div>
                                            <div class="itemDetail">あり</div>
                                        </div>
                                        <div class="plListSpec__detail--item">
                                            <div class="plListSpec__detail--itemColumn">
                                                <div class="itemCaption">独自ドメイン<br class="hidden-m">永久無料特典</div>
                                                <div class="itemDetail"><span class="num">2</span>つ</div>
                                            </div>
                                            <div class="itemDomain"><span class="domain--normal">.com</span><span class="domain--normal">.net</span><span class="domain--premium">.jp</span>など<br>人気ドメイン<strong>12種類</strong>から選択可能</div>
                                        </div>
                                    </div>
                                    <div class="plListSpec__entry">
                                        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" class="button buttonCta--border" target="_blank">まずはお試し!<br class="visible-m">10日間無料!</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="pldistinction__link">
                        <i class="ico ico_chevron-right"></i><a href="functions/">他のプラン・機能一覧を見る</a>
                    </div>
                </div>
                <div class="pldistinction__item pldistinction__item--corporation">
                    <div class="pldistinction__ttl">法人利用におすすめ</div>
                    <ul class="plList">
                        <li class="plList__item plList__item--recom">
                            <div class="plList__item__wrap">
                                <div class="plListTtl">
                                    <p class="plListTtl__recom">オールインワンの安心価格</p>
                                    <h3 class="plListTtl__name"><img loading="lazy" src="img/common/logo_xbiz.svg" alt="XServerビジネス" width="171" height="16"></h3>
                                    <p class="plListTtl__price mb50">
                                        <span class="plListTtl__price__s">月額 </span>3,762<span class="plListTtl__price__s">円〜</span>
                                        <s class="plListTtl__price__s mt10">初期費用 16,500円〜</s>
                                        <span class="plListTtl__price__balloon">10/7まで初期費用が無料!</span>
                                    </p>
                                    <p class="plListTtl__copy plListTtl__copy--cp">「エックスサーバー」が誇るハイスペック環境に<br class="visible-l">
                                        手厚いサポートサービスをプラス</p>
                                </div>
                                <div class="plListSpec">
                                    <div class="plListSpec__contents">
                                        <div class="plListSpec__contents--item plListSpec__contents--base">
                                            エックスサーバーの機能
                                        </div>
                                        <div class="plListSpec__contents--item plListSpec__contents--feature">
                                            <div class="contentsCaption">安心・安定のサーバー環境</div>
                                            <div class="contentsDetail">
                                                <ul class="contentsDetail__list">
                                                    <li>
                                                        ディスク容量 700GB〜
                                                    </li>
                                                    <li>
                                                        SLA(品質保証制度)
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">サーバー月間稼働率99.99％以上を保証するサービスです。保証値(99.99%)を下回った場合、月額費用の一部を返金します。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        Web改ざん検知
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">URLを登録することでWebサイト改ざんやマルウェア、フィッシングURLの存在を毎日自動診断します。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        管理者ユーザー設定
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">ドメインごとに複数人でのサーバー管理が可能です。管理者ユーザーには業務内容に応じた権限を設定することができます。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        遠隔地バックアップ
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">ご利用のサーバーとバックアップデータを保存するサーバーを別の場所で管理することによって、万が一の災害や有事の際にも大切なデータを守り、いち早い復旧に備えます。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        高性能スパムフィルター 1,000個
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">高い検知精度を誇るCloudmark社のスパムフィルタを使用した設定が可能です。（全プラン：1,000個 / 無料）</span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="plListSpec__contents--item plListSpec__contents--feature">
                                            <div class="contentsCaption">充実のサポート体制</div>
                                            <div class="contentsDetail">
                                                <ul class="contentsDetail__list">
                                                    <li>
                                                        ホームページ無料制作サービス
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">会社のホームページを作成から公開まで無料で代行いたします。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        設定おまかせサポート
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">サーバーパネルで提供する各機能の設定を回数無制限・無料で代行いたします。</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        サーバー移転代行
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">Webサイト移転の作業をサーバーアカウントにつき10件まで無料で代行いたします。※11件目以降は16,500円(税込)</span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        専用窓口サポート
                                                        <span class="tooltip">
                                                            <i class="imgico imgico_question tooltip_target"></i>
                                                            <span class="tooltip_content">個別事情に応じたトラブル対応や各種手続きなど、よりきめ細やかなサポートをご提供します。（電話、メール）<br>受付時間：平日10:00〜17:00</span>
                                                        </span>
                                                        <div class="font-xs note">※一部プランを除く</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="plListSpec__contents--item plListSpec__contents--feature">
                                            <div class="contentsCaption">独自ドメイン永久無料特典</div>
                                            <div class="contentsDetail">
                                                <div class="itemDomain"><span class="domain--normal">.com</span><span class="domain--normal">.net</span><span class="domain--premium">.jp</span><span class="domain--corporation">.co.jp</span><br>
                                                    法人専用ドメイン「<strong>.co.jp</strong>」をはじめ、<br class="visible-l">人気ドメイン<strong>16種類</strong>から2つ無料で提供</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="plListSpec__entry">
                                        <a href="https://business.xserver.ne.jp/" id="ga-x-recognize-xbizLink-in-planList" class="button buttonCta" target="_blank" rel="noopener">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

<?php /*
            <section class="xbizLinkBox xbizLinkBox--type01">
                <div class="xbizLinkBox__body">
                    <div class="xbizLinkBox__txt">
                        <h3 class="xbizLinkBox__ttl"><img loading="lazy" src="img/top/xbiz_link_box_logo.svg" alt="XServerビジネス" width="360" height="33"></h3>

                        <p class="xbizLinkBox__desc">
                            ビジネスインフラとして、より安心・安全・安定を重視した法人特化のレンタルサーバーです。セキュリティ面の強化だけでなく、導入・運用支援など法人サービスならではのサポートも実施しています。
                        </p>

                        <div class="xbizLinkBox__priceBtn">
                            <p class="xbizLinkBox__priceDetail">
                                <span class="xbizLinkBox__balloon">2/5まで実質30%OFF!</span>
                                <span class="xbizLinkBox__price">
                                    <span class="xbizLinkBox__price__s">実質 </span>2,633<span class="xbizLinkBox__price__s">円〜</span>
                                </span>
                            </p>

                            <div class="xbizLinkBox__btn">
                                <a id="ga-x-apply-xbizLink--type01" class="button button02--width-md" href="https://business.xserver.ne.jp/" target="_blank" rel="noopener">詳しくはこちら</a>
                            </div>
                        </div>
                    </div>
                    <div class="xbizLinkBox__img">
                        <img loading="lazy" src="img/top/xbiz_link_box_type01.png" alt="" width="400" height="230">
                    </div>
                </div>
            </section>

            <section class="xbizLinkBox xbizLinkBox--type02">
                <div class="xbizLinkBox__body">
                    <div class="xbizLinkBox__txt">
                        <header class="xbizLinkBox__header">
                            <p class="xbizLinkBox__subttl">法人利用に特化した<span class="disp-ib">レンタルサーバーなら</span></p>

                            <div class="xbizLinkBox__ttlPrice">
                                <h3 class="xbizLinkBox__ttl"><img loading="lazy" src="img/top/xbiz_link_box_logo.svg" alt="XServerビジネス" width="360" height="33"></h3>

                                <p class="xbizLinkBox__priceDetail">
                                    <span class="xbizLinkBox__price">
                                        <span class="xbizLinkBox__price__s">月額 </span>3,762<span class="xbizLinkBox__price__s">円〜</span>
                                    </span>
                                    <span class="xbizLinkBox__balloon">4/2まで<br class="visible-s">初期費用無料！</span>
                                </p>
                            </div>
                        </header>

                        <p class="xbizLinkBox__desc">
                            ビジネスインフラとして、より安心・安全・安定を重視した法人特化のレンタルサーバーです。<br>
                            セキュリティ面の強化だけでなく、導入・運用支援など法人サービスならではのサポートも実施しています。
                        </p>

                        <div class="xbizLinkBox__priceBtn">
                            <div class="xbizLinkBox__btn">
                                <a id="ga-x-apply-xbizLink--type02" class="button button02--width-xl" href="https://business.xserver.ne.jp/" target="_blank" rel="noopener">詳しくはこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="xbizLinkBox xbizLinkBox--type03">
                <div class="xbizLinkBox__body">
                    <div class="xbizLinkBox__txt">
                        <h3 class="xbizLinkBox__ttl">XServerビジネス</h3>

                        <p class="xbizLinkBox__desc">
                            ビジネスインフラとして、より安心・安全・安定を重視した法人特化のレンタルサーバーです。セキュリティ面の強化だけでなく、導入・運用支援など法人サービスならではのサポートも実施しています。
                        </p>

                        <div class="xbizLinkBox__priceBtn">
                             <div class="xbizLinkBox__btn">
                                <a id="ga-x-apply-xbizLink--type03" class="button button02--width-md" href="https://business.xserver.ne.jp/" target="_blank" rel="noopener">詳しくはこちら</a>
                            </div>
                        </div>
                    </div>
                    <div class="xbizLinkBox__img">
                        <img loading="lazy" src="img/top/xbiz_link_box_type03.png" alt="" width="362" height="176">
                    </div>
                </div>
            </section>
 */ ?>
<?php /*<section class="xbizLinkBox xbizLinkBox--type04">
                <div class="xbizLinkBox__body">
                    <div class="xbizLinkBox__txt">
                        <h3 class="xbizLinkBox__ttl">XServerビジネス</h3>

                        <p class="xbizLinkBox__desc">
                            ビジネスインフラとして、より安心・安全・安定を重視した法人特化のレンタルサーバーです。セキュリティ面の強化だけでなく、導入・運用支援など法人サービスならではのサポートも実施しています。
                        </p>

                        <div class="xbizLinkBox__priceBtn">
                            <div class="xbizLinkBox__btn">
                                <a id="ga-x-apply-xbizLink--type04" class="button button02--width-md" href="https://business.xserver.ne.jp/" target="_blank" rel="noopener">詳しくはこちら</a>
                            </div>
                        </div>
                    </div>
                    <div class="xbizLinkBox__img">
                        <img loading="lazy" src="img/top/xbiz_link_box_type04.png" alt="" width="388" height="171">
                    </div>
                </div>
            </section>*/ ?>

			
            <small class="plNote"><span class="note_x2">※料金はすべて税込価格です</span></small>
			<small class="plNote mt0"><span class="note_x2">※独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="manual/man_order_present_domain.php">こちら</a>を参照してください。</span></small>
			<div class="comparisonLinkBnr tac mt30">
                <a href="comparison/" id="ga-x-site-bnr-comparisonLink"><img loading="lazy" class="srcset" src="img/top/bnr_comparison_s.png" alt="ビジネス用途・法人様向けレンタルサーバー選び方ガイド" width="700" height="240"></a>
            </div>
        </section>

        <section class="domain-benefit" id="domain-benefit">
            <div class="domain-benefit_box forever_domain holder-sml">
                <h2 class="blV2__ttl"><span class="blV2__ttl__elm">独自ドメイン永久無料特典</span></h2>
                <p>サイトやメールなどに用いる独自ドメインが無料でご利用いただけます。</p>
                <h5 class="domain-benefit_subttl">
                    <span class="domain-benefit_subttl_sub"><b class="domain-benefit_txt-bold">人気の定番ドメイン</b>が<b class="domain-benefit_txt-bold">2つ永久無料</b>に！</span>
                    <span class="domain-benefit_subttl_main"><span class="domain-benefit_target-plan">全プラン対象</span><span class="domain-benefit_domain-name">独自ドメイン永久無料特典</span></span>
                </h5>

                <div class="domain-benefit_domain-more">
                    <div class="domain-benefit_domain-more_box">
                        <section class="domain-benefit_domain-more_box_item">
                            <h6 class="domain-benefit_domain-more_box_item_ttl"><span>下記からいずれか2つが、</span><br class="hidden-s hidden-m"><b class="domain-benefit_domain-more_box_item_ttl_marker">サーバーご契約中は永久無料！</b></h6>
                            <ul class="domain-benefit_domain-list">
                                <li><span>.com</span></li>
                                <li><span>.net</span></li>
                                <li><span>.org</span></li>
                                <li><span>.info</span></li>
                                <li><span>.biz</span></li>
                                <li><span>.xyz</span></li>
                                <li><span>.link</span></li>
                                <li><span>.click</span></li>
                                <li><span>.blog</span></li>
                                <li><span>.online</span></li>
                                <li><span>.site</span></li>
                            </ul>
                        </section>

                        <section class="domain-benefit_domain-more_box_item domain-benefit_domain-more_box_item--x30">
                            <h6 class="domain-benefit_domain-more_box_item_ttl"><b class="domain-benefit_domain-more_box_item_ttl_strong">プレミアム・ビジネスプラン</b>なら<br class="hidden-s hidden-m">JPドメインも選択可能</h6>
                            <ul class="domain-benefit_domain-list domain-benefit_domain-list--x30">
                                <li><span>.jp</span></li>
                                <li><span>.co.jp<span class="font-xs">※</span></span></li>
                                <li><span>.or.jp<span class="font-xs">※</span></span></li>
                                <li><span>.ne.jp<span class="font-xs">※</span></span></li>
                                <li><span>.gr.jp<span class="font-xs">※</span></span></li>
                            </ul>
                            <p class="mt5 mb0"><span class="note">※ビジネスプランでのみ選択可能です。</span></p>
                        </section>
                    </div>
                </div>
                <ul class="domain-benefit_box_note-list">
                    <li>※対象ドメインは予告なく変更する場合があります。</li>
                    <li>※独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="manual/man_order_present_domain.php">こちら</a>を参照してください。</li>
                </ul>
            </div>
        </section>
		
        <section class="blV2 flow">
            <div class="flowHeader">
                <div class="holder-sml">
                    <h2 class="blV2__ttl"><span class="blV2__ttl__elm">お申し込みの流れ</span></h2>
                    <ul class="flowNav">
                        <li class="flowNav__item">
                            <figure class="flowNav__img">
                                <img loading="lazy" src="img/top/flow_nav_01.svg" alt="お申し込み" width="200" height="200">
                            </figure>
                            <div class="flowNav__box">
                                <h3 class="flowNav__ttl">お申し込み</h3>
                                <p class="flowNav__txt">プラン選択など、必要な情報を入力します。</p>
                            </div>
                        </li>
                        <li class="flowNav__item">
                            <figure class="flowNav__img">
                                <img loading="lazy" src="img/top/flow_nav_02.svg" alt="お試し期間" width="200" height="200">
                            </figure>
                            <div class="flowNav__box">
                                <h3 class="flowNav__ttl">お試し期間</h3>
                                <p class="flowNav__txt">10日間の無料お試し期間が始まります。</p>
                            </div>
                        </li>
                        <li class="flowNav__item">
                            <figure class="flowNav__img">
                                <img loading="lazy" src="img/top/flow_nav_03.svg" alt="お支払い" width="200" height="200">
                            </figure>
                            <div class="flowNav__box">
                                <h3 class="flowNav__ttl">お支払い</h3>
                                <p class="flowNav__txt">お試し期間中にご利用料金をお支払いください。</p>
                            </div>
                        </li>
                        <li class="flowNav__item">
                            <figure class="flowNav__img">
                                <img loading="lazy" src="img/top/flow_nav_04.svg" alt="本契約" width="200" height="200">
                            </figure>
                            <div class="flowNav__box">
                                <h3 class="flowNav__ttl">本契約</h3>
                                <p class="flowNav__txt">お支払いが確認でき次第、本契約へと移行します。</p>
                            </div>
                        </li>
                    </ul>
                    <div class="buttonGroup buttonGroup--center">
                        <a href="order/" class="button button01--width-md">もっと詳しく</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="case" id="case">
            <aside class="holder-sml">
                <div class="case_wrap">
                    <div class="case_header">
                        <h2 class="case_ttl"><img loading="lazy" src="img/top/img_case_ttl.svg?date=220224" alt="個人の方から官公庁・大手企業まで 豊富な導入実績" width="280" height="67"></h2>
                        <div class="case_num_wrap">
                            <div class="case_num"><img loading="lazy" src="img/top/img_case_num01.svg?date=250214" alt="導入企業22万社突破！" width="280" height="90"></div>
                            <div class="case_num"><img loading="lazy" src="img/top/img_case_num02.svg?date=230301" alt="運用サイト数250万件突破！" width="280" height="90"></div>
                        </div>
                    </div>
                    <div class="case_body">
                        <p class="case_txt">21年間積み重ねた豊富なノウハウと確かな技術力が評価され、<br class="hidden-s">業種や企業規模を問わず、幅広いお客さまから選ばれています。</p>
                        <!-- 企業ロゴ -->
                        <ul class="logo_holder">
                            <li class="logo_corporate"><img src="img/top/img_case_logo_delltech.png" alt="DELL Technologies" width="203" height="26"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_saison.png" alt="CREDIT SAISON" width="77" height="47"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_jrbus.png" alt="西日本JRバス株式会社" width="246" height="27"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_pizzahut.png" alt="PizzaHut" width="55" height="52"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_sokupri.png" alt="ソクプリ" width="151" height="29"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_hugetsudo.png" alt="神戸風月堂" width="190" height="45"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_humantec.png" alt="ヒューマンテクノロジーズ" width="152" height="33"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_hatendo.png" alt="八天堂" width="50" height="50"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_yamasa.png" alt="ヤマサ蒲鉾株式会社" width="200" height="28"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_smacom.png" alt="スマカン" width="107" height="41"></li>
                            <li class="logo_corporate"><img src="img/top/img_case_logo_mktaxi.png" alt="MKタクシー" width="149" height="60"></li>
                        </ul>
                        <!-- /企業ロゴ -->
                        <a class="button button02--fill--width-xl" href="feature/case.php">利用事例を見る</a>
                    </div>
                </div>
            </aside>
        </section>
		
        <sectuon class="faq" id="faq">
            <div class="holder-sml">
                <h2 class="blV2__ttl"><span class="blV2__ttl__elm">よくある質問</span></h2>
                <div class="headlines_body">
                    <ul class="faq_body">
                        <li>
                            <div class="faq_question">レンタルサーバーとは何ですか？</div>
                            <div class="faq_answer">レンタルサーバーは、ブログやホームページを公開するために必要な「サーバー」を借りることができるサービスで、データの保管や処理を行っています。サーバーは自分でも構築できますが、膨大な初期コストや維持管理の手間がかかるため、一般的にはレンタルサーバーを利用することが多いです。</div>
                        </li>
                        <li>
                            <div class="faq_question">ドメインとは何ですか？</div>
                            <div class="faq_answer">ドメインはインターネット上の「住所」です。ドメインとサーバー（土地）を紐づけることで、ブログやホームページ（家）を利用できるようになります。一般的には「独自ドメイン」を利用することが多く、社名やサービス名などを含む文字列と、「.com」「.jp」「.co.jp」などを組み合わせて、世界に一つだけのドメイン（例：example.com）を作ります。</div>
                        </li>
                        <li>
                            <div class="faq_question">他社からサーバーを乗り換える際の手順を教えてください。</div>
                            <div class="faq_answer">他社から当サービスへサーバーを乗り換える際の手順は「<a href="order/order_transfer_server.php">サーバー移転</a>」のマニュアルをご確認ください。なお、必要な情報を入力するだけで、他社サーバーで運用中のWordPressを自動的にエックスサーバーへ移行できる「<a href="manual/man_install_transfer_wp.php">WordPress簡単移行</a>」もご用意しています。不安な方はオプションサービスの「<a href="price/service_server_daiko.php">サーバー移転代行</a>」をご利用ください。</div>
                        </li>
                    </ul>
                    <div class="cta__btnContainer">
                        <div class="cta__btnWrap">
                            <div class="campaignBalloon cf"><span class="campaignPr">半額キャッシュバック！</span><span
                                        class="campaignLimit">9/4まで</span></div>
                            <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank" class="button buttonCta">お申し込みはこちら</a>
                        </div>
                        <div class="cta__btnWrap">
                            <a href="support/faq/" class="button button01">よくある質問を見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </sectuon>

        <section class="blV2 headlines">
            <div class="holder-sml">
                <h2 class="blV2__ttl"><span class="blV2__ttl__elm">ニュース</span></h2>
                <div class="headlines_body">
                    <?php include("newsman/create_top_news_list.php"); ?>
                    <div class="border border_blue mt15">
                        <ul class="list list_arrow-right">
                            <li><a href="<?php print $SITE_URL; ?>support/information_phishing.php">エックスサーバーを装ったフィッシングメールにご注意ください</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.headlines_body -->

                <div class="headlines_footer">
                    <a href="support/information.php" class="button button01">障害・メンテナンス情報</a>
                    <a href="support/news.php" class="button button01">ニュース一覧</a>
                </div>
                <!-- /.headlines_footer -->
            </div>
        </section>
    </div>
    <!-- /.contents -->

    <div class="sub">
        <?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->

    <?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->
<?php /*
<div class="flModal">
    <div class="flModalBody">
        <div class="flModalClose"><button class="js--close">閉じる</button></div>
        <div class="flModalContents">
            <div class="flModalContentsRow row1">
                <div class="flModalContents__header"><img src="img/top/img_modal_ttl.png" width="497" height="160" alt="お友達紹介プログラム"></div>
                <div class="flModalContents__caption">お客様は<span>「お友達紹介プログラム」</span>の適用対象です</div>
                <div class="flModalContents__discount">
                    <div class="discountCaption">ご契約で初回のお支払い料金が<span>最大10,000円</span>割引！</div>
                    <div class="discountDetails">
                        <div class="item"><div class="period">6ヶ月</div><div class="discount"><span class="values"><span class="num">3,000</span>円</span>割引</div></div>
                        <div class="item"><div class="period">12ヶ月</div><div class="discount"><span class="values"><span class="num">5,000</span>円</span>割引</div></div>
                        <div class="item"><div class="period">24ヶ月</div><div class="discount"><span class="values"><span class="num">7,500</span>円</span>割引</div></div>
                        <div class="item"><div class="period">36ヶ月</div><div class="discount"><span class="values"><span class="num">10,000</span>円</span>割引</div></div>
                    </div>
                </div>
            </div>
            <div class="flModalContentsRow row2">
                <div class="flModalContents__subcaption">＼　さらに実施中の<span>他キャンペーンと併用可能</span>　／</div>
                <div class="flModalContents__register">ぜひ<img src="img/top/img_modal_logo.png" width="312" height="25" alt="XServer レンタルサーバー">の<br>ご利用をご検討ください！</div>
                <div class="flModalContents__close"><button class="button js--close">閉じる</button></div>
            </div>
       </div>
    </div>
</div>
*/ ?>
<?php include("bottom.php");
