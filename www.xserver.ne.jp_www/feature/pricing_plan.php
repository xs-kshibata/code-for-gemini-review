<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <title>シンプルな料金体系 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」の料金体系です。">
    <script src="../js/gsap.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    </head>

    <body id="pid-feature" class="pid-feature-pricing">
		
		<?php include("../top.php"); ?>

    <div id="wrapper">
			
			<?php include("../header2.php"); ?>

        <div id="toggle-target">

            <div class="contents">
                <section class="main" role="main">
                    <div class="holder-sml">
                        <header class="main-header">
                            <h2 class="ttl"><span class="label label_ttl-feature"><i class="ico ico_display"></i>特長</span></h2>
													<?php include("subnav.php"); ?>
                        </header>
                        <!-- /.main-header -->
                    </div>

                    <div id="share-grounds" class="pricingIntro">
                        <div class="holder-sml">
													<?php include("../topicpath.php"); ?>
                        </div>

                        <div class="pricingIntro__inner">
                            <h3 class="pricingIntro__ttl">
                        <span class="pricingIntro__img">
                            <span class="pricingIntro__img__inner">
                                <img src="../img/feature/ttl_simple_mv_s.png" alt="エックスサーバーはシンプル料金宣言" class="srcset">
                            </span>
                        </span>
                            </h3>
                            <div class="pricingIntro__txt">
                                <p class="pricingIntro__txt__copy">全てのお客様へ常に安心できるサービスを提供したい、<br>
                                    エックスサーバーはそんな想いから、<br class="visible-s">
                                    シンプルな料金体系を心がけています。</p>
                            </div>
                        </div>
                        <div class="pricingIntroAnime">
                            <div class="pricingIntroAnimeFig pricingIntroAnime01 pricingIntroAnime01--left"><img src="../img/feature/fig_anime_01_line_left_s.png" alt="" class="srcset"></div>
                            <div class="pricingIntroAnimeFig pricingIntroAnime01 pricingIntroAnime01--right"><img src="../img/feature/fig_anime_01_line_right_s.png" alt="" class="srcset"></div>
                            <div class="pricingIntroAnimeFig pricingIntroAnime02 pricingIntroAnime02--left"><img src="../img/feature/fig_anime_02_line_left_s.png" alt="" class="srcset"></div>
                            <div class="pricingIntroAnimeFig pricingIntroAnime02 pricingIntroAnime02--right"><img src="../img/feature/fig_anime_02_line_right_s.png" alt="" class="srcset"></div>
                            <div class="pricingIntroAnimeFig pricingIntroAnime03 pricingIntroAnime03--left"><img src="../img/feature/fig_anime_03_line_left_s.png" alt="" class="srcset"></div>
                            <div class="pricingIntroAnimeFig pricingIntroAnime03 pricingIntroAnime03--right"><img src="../img/feature/fig_anime_03_line_right_s.png" alt="" class="srcset"></div>
                        </div>
                    </div>
                    <!-- /.pricingIntro -->

                    <section id="pricing__01" class="pricingSec pricing__01">
                        <div class="holder-sml">
                            <div class="pricingAbout">
                                <div class="pricingAbout__details">
                                    <h3 class="pricingSec__ttl">エックスサーバーの<br><span>料金体系</span>について</h3>
                                    <div class="pricing__txt">
                                        <p>ウェブサイトに表示されている月額料金で契約するつもりが、<span>実際のお支払い料金が異なっている</span>ことはありませんか？他社レンタルサーバーサービスでは、サーバーの利用において月額料金とは別に、維持調整費などの名目による<span>追加費用</span>が請求される場合があります。
                                            特に維持調整費は一定期間ごとに見直しが行われるため、<span>お支払い料金が変動する可能性</span>があります。</p>
                                        <p>エックスサーバーでは、サーバー利用料金以外に追加費用の請求がない、<span>シンプルな料金</span>で安心してご利用いただけます。また、サーバーのご契約特典として、ウェブサイトやメールなどに用いる独自ドメインが2個永久無料でご利用いただけるため、ワンストップでウェブサイト運営に必要な環境が整います。</p>
                                    </div>
                                </div>
                                <div class="pricingAbout__graph">
                                    <figure><img src="../img/feature/fig_simple_graph_s.png?date=20231120" width="336" height="408" alt="サーバーの利用におけるお支払い料金比較" class="srcset"></figure>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="pricing__02" class="pricingSec pricing__02">
                        <div class="holder-sml">
                            <div class="pricingPlan">
                                <h3 class="pricingSec__ttl"><img src="../img/feature/ttl_simple_plan_s.png" width="352" height="94" alt="サーバーの利用における追加費用なし お支払い料金＝月額料金のシンプル料金" class="srcset"></h3>
                                <div class="js_scrolltip">
                                    <div class="prisingPlanTable">
                                        <div class="planTableItem xserver">
                                            <div class="planTableItem__header">
                                                <div class="planTableItem__header--balloon">シンプル料金</div>
                                                <div class="planTableItem__header--caption">エックスサーバー</div>
                                            </div>
                                            <div class="planTableItem__body">
                                                <div class="planTableItem__body--box payment">
                                                    <div class="caption">お支払い料金(月額換算)</div>
                                                    <div class="price"><span class="price__num">990</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box monthly">
                                                    <div class="caption">プラン料金(月額)</div>
                                                    <div class="price"><span class="price__num">990</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box">
                                                    <div class="caption">維持調整費</div>
                                                    <div class="price none">-</div>
                                                </div>
                                                <div class="planTableItem__body--box">
                                                    <div class="caption">独自ドメイン<br>運用料金</div>
                                                    <div class="price none">-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="planTableItem range">
                                            <div class="planTableItem__header">
                                                <div class="planTableItem__header--caption">他社サービスA</div>
                                            </div>
                                            <div class="planTableItem__body">
                                                <div class="planTableItem__body--box payment">
                                                    <div class="caption">お支払い料金(月額換算)</div>
                                                    <div class="price"><span class="price__num">968</span>円~<span class="price__num">1,056</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box monthly">
                                                    <div class="caption">プラン料金(月額)</div>
                                                    <div class="price"><span class="price__num">880</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box add">
                                                    <div class="caption">維持調整費</div>
                                                    <div class="price"><span class="price__num">10</span>%~<span class="price__num">20</span>%前後<br><span class="price__txt">(変動の可能性あり)</span></div>
                                                </div>
                                                <div class="planTableItem__body--box">
                                                    <div class="caption">独自ドメイン<br>運用料金</div>
                                                    <div class="price none">-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="planTableItem range">
                                            <div class="planTableItem__header">
                                                <div class="planTableItem__header--caption">他社サービスB</div>
                                            </div>
                                            <div class="planTableItem__body">
                                                <div class="planTableItem__body--box payment">
                                                    <div class="caption">お支払い料金(月額換算)</div>
                                                    <div class="price"><span class="price__num">980</span>円~<span class="price__num">1,069</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box monthly">
                                                    <div class="caption">プラン料金(月額)</div>
                                                    <div class="price"><span class="price__num">891</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box add">
                                                    <div class="caption">維持調整費</div>
                                                    <div class="price"><span class="price__num">10</span>%~<span class="price__num">20</span>%前後<br><span class="price__txt">(変動の可能性あり)</span></div>
                                                </div>
                                                <div class="planTableItem__body--box">
                                                    <div class="caption">独自ドメイン<br>運用料金</div>
                                                    <div class="price none">-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="planTableItem alone">
                                            <div class="planTableItem__header">
                                                <div class="planTableItem__header--caption">他社サービスC</div>
                                            </div>
                                            <div class="planTableItem__body">
                                                <div class="planTableItem__body--box payment">
                                                    <div class="caption">お支払い料金(月額換算)</div>
                                                    <div class="price"><span class="price__num">1,083</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box monthly">
                                                    <div class="caption">プラン料金(月額)</div>
                                                    <div class="price"><span class="price__num">900</span>円</div>
                                                </div>
                                                <div class="planTableItem__body--box">
                                                    <div class="caption">維持調整費</div>
                                                    <div class="price none">-</div>
                                                </div>
                                                <div class="planTableItem__body--box add">
                                                    <div class="caption">独自ドメイン<br>運用料金</div>
                                                    <div class="price"><span class="price__num">2,200</span>円~</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scrollHint">
                                        <div class="scrollHint_icon">
                                            <i class="ico ico_arrow-right"></i>
                                            <span>スクロールできます</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pricingPlanCautions">
                                    <li>※お支払い料金は36ヶ月契約の場合</li>
                                    <li>※プラン料金にキャンペーン等は反映されていません</li>
                                    <li>※2023年8月現在</li>
                                    <li>※料金はすべて税込価格です</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="holder-sml">
                        <div class="xbiz tac mb20">
                            <a href="https://business.xserver.ne.jp/" target="_blank" class="btn">
                                <img class="flex" src="../img/price/bnr_xbiz.png?date=20241016" alt="法人サイトの運用なら「XServerビジネス」がオススメ！">
                            </a>
                        </div>
                        <aside class="tac">
                            <p class="mb0"><a href="https://drive.xserver.ne.jp/" target="_blank"><img class="hover fluid-sm" src="../img/price/bnr_xd.png?date=20241016" alt="クラウド型高速オンラインストレージ　XServerドライブ サービスサイトへ"></a></p>
                        </aside>
                    </div>
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
    <script type="text/javascript">
        $(function(){
            imagesLoaded(document.getElementsByClassName('pricingIntro'), {background: true}, () => {
                gsap.to(".pricingIntro__img__inner", {
                    delay:0+0.4,
                    duration: 1, // 秒指定
                    opacity:1,
                    y: 0,
                    rotate: 0,
                    repeat:0, // 繰り返し指定
                    ease: "back.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntro__txt", {
                    delay:0.4+0.4,
                    duration: 1, // 秒指定
                    opacity:1,
                    y: 0,
                    ease: "back.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime01--left", {
                    delay:1+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: 300,
                    y: -300,
                    ease: "power3.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime01--right", {
                    delay:1+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: -300,
                    y: 300,
                    ease: "power3.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime02--left", {
                    delay:1.2+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: 300,
                    y: -300,
                    ease: "power1.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime02--right", {
                    delay:1.2+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: -300,
                    y: 300,
                    ease: "power1.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime03--left", {
                    delay:1.4+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: 300,
                    y: -300,
                    repeat:0, // 繰り返し指定
                    ease: "power3.inOut" // 加減速の種類
                });
                gsap.to(".pricingIntroAnime03--right", {
                    delay:1.4+0.8,
                    duration: 0.5, // 秒指定
                    opacity:1,
                    x: -300,
                    y: 300,
                    ease: "power3.inOut" // 加減速の種類
                });
            });
        });
    </script>
<?php include("../bottom.php"); ?>