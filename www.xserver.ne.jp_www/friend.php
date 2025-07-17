<?php include("conf.php"); ?>
<?php include("header.php"); ?>
    <meta property="og:title" content="お友達紹介プログラム">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="お友達紹介プログラムの詳細をご案内しています。">
    <meta property="og:url" content="<?php print $SITE_URL; ?>friend.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/campaign/friend/ogp.png?date=241127">
    <meta property="og:site_name" content="お友達紹介プログラム | レンタルサーバーならエックスサーバー">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">
    <title>あなたもお友達も一緒にお得！お友達紹介プログラム | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="お友達紹介プログラム - エックスサーバーサービスをお友達にシェア！">
    <link rel="stylesheet" href="https://use.typekit.net/dbs6xig.css">
</head>

<body id="pid-info" class="pid-info-friend">

<?php include("top.php"); ?>

<header class="header">
    <div class="logo">
        <a href="<?php print $SITE_URL; ?>"><img src="img/common/img_logo_xserver.svg" alt="エックスサーバー株式会社"></a>
    </div>
</header>

<main>
    <section class="mv">
        <div class="mvHeader">
            <div class="mv__main">
                <picture>
                    <source media="(max-width:918px)" srcset="img/campaign/friend/img_mv_main_sp.png?date=241127">
                    <img src="img/campaign/friend/img_mv_main.png?date=241127" alt="あなたもお友達も一緒にお得！お友達紹介プログラム">
                </picture>
            </div>
        </div>

        <div class="mvFooter">
            <div class="wrap">
                <div class="pgLinks"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--primary">お友達紹介プログラムの利用はこちら<img src="img/campaign/friend/ico_btnyellow_arrow_right.png" alt=""></a></div>
            </div>
        </div>
    </section>
    <section class="reward">
        <div class="rewardinfo">
            <div class="wrap">
                <h2 class="sttl">特典内容</h2>
                <div class="referral-container">
                    <div class="panel panel--referrer">
                        <div class="panel__title-bar"></div>
                        <div class="panel__title">
                            <span class="panel__title__part--large">紹介</span><span class="panel__title__part--small">した</span><span class="panel__title__part--large">あなた</span>
                        </div>
                        <hr class="panel__dotted-line">
                        <p class="panel__benefit-desc">お友達の初回の利用料金の</p>
                        <p class="panel__benefit-highlight">
                            <span class="panel__benefit-highlight__max-label">最大</span>
                            <span class="panel__benefit-highlight__number">20</span>
                            <span class="panel__benefit-highlight__percent">%</span>
                            <span class="panel__benefit-highlight__particle">を</span>
                            <span class="panel__benefit-highlight__suffix panel__benefit-highlight__suffix--present">プレゼント</span>
                        </p>
                    </div>

                    <div class="panel panel--friend">
                        <div class="panel__title-bar"></div>
                        <div class="panel__title">
                            <span class="panel__title__part--large">紹介</span><span class="panel__title__part--small">された</span><span class="panel__title__part--large">お友達</span>
                        </div>
                        <hr class="panel__dotted-line">
                        <p class="panel__benefit-desc">初回の利用料金から</p>
                        <p class="panel__benefit-highlight">
                            <span class="panel__benefit-highlight__max-label">最大</span>
                            <span class="panel__benefit-highlight__number">20</span>
                            <span class="panel__benefit-highlight__percent">%</span>
                            <span class="panel__benefit-highlight__particle">を</span>
                            <span class="panel__benefit-highlight__suffix panel__benefit-highlight__suffix--discount">割引</span>
                        </p>
                        <p class="panel__disclaimer">※一部サービスは報酬体系が異なります。</p>
                    </div>
                </div>
                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text">※初回の利用料金に初期費用は含みません。</p>
                    <p class="rewardinfo--text">※紹介した方および紹介されたお友達の特典は、キャンペーンの実施状況により変動する場合があります。</p>
                    <p class="rewardinfo--text">※一部プランを除き、30日未満の契約は特典の対象外です。</p>
                </div>
            </div>
        </div>

        <div class="rewardtable">
            <div class="wrap">
                <h2 class="sttl">特典例</h2>
                <div class="stepListContainer">

                    <div class="reward-table-wrapper js_scrolltip">
                        <div class="reward-table">
                            <div class="reward-table__header">
                                <div class="reward-table__header-row">
                                    <div class="reward-table__header-cell reward-table__header-cell--service">サービス名</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--rate">報酬・割引率</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--plan">プラン名</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--period">契約期間</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--referrer">紹介した方</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--friend">紹介された方</div>
                                </div>
                            </div>
                            <div class="reward-table__body">
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver.svg" alt="XServer レンタルサーバー" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">20</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">スタンダード</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">2,640</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">2,640</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_business.svg" alt="XServer Business" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">共有サーバー<br>スタンダード</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">5,016</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">5,016</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_drive.svg" alt="XServer Drive" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">スモールビジネス</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">3,960</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">3,960</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps.svg" alt="XServer VPS" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GB</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps_win.svg" alt="XServer VPS for Windows Server" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GB</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">2,508</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">2,508</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps_game.svg" alt="XServer VPS for Game" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GBプラン</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_cloudpc.svg" alt="XServer クラウドPC" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">お試しプラン</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">3,936</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">3,936</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_sns.svg" alt="XServer SNS" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">おひとりさまプラン</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">ヶ月</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,069</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,069</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service">
                                        <img src="img/campaign/friend/logo_xwrite.svg" alt="XWRITE" class="reward-table__service__logo">
                                        <span class="reward-table__service__note">※1</span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">買い切りプラン</span></div>
                                    <div class="reward-table__cell reward-table__cell--period">―</div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,584</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,584</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_games.svg" alt="XServer GAMES" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate">
                                        <span class="reward-table__campaign-badge">キャンペーン中</span><br>
                                        <span class="reward-table__rate__alt">
                                                <s>10%</s><span class="reward-table__rate__value red">20</span><span class="reward-table__rate__unit red">%</span>
                                            </span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">Minecraft Java版<br><span class="reward-table__plan__note">(〜3人)</span></span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">365</span><span class="reward-table__period__unit reward-table__period__unit--day">日</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer">
                                        <s><span class="reward-table__benefit__value--before">701</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">円</span></s><br>
                                        <span class="reward-table__benefit__value red">1,402</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">円</span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--friend">
                                        <s><span class="reward-table__benefit__value--before">701</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">円</span></s><br>
                                        <span class="reward-table__benefit__value red">1,402</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">円</span><span class="reward-table__benefit__off red">OFF</span>
                                    </div>
                                </div>

                                <div class="reward-table__row reward-table__row--games-combined">
                                    <div class="reward-table__cell reward-table__cell--service reward-table__cell--service-complex">
                                        <img src="img/campaign/friend/logo_xserver_games.svg" alt="XServer GAMEs" class="reward-table__service__logo">
                                        <span class="reward-table__service__name reward-table__service__name--sub">無料サーバー<span class="reward-table__service__note">※2</span></span>
                                    </div>

                                    <div class="reward-table__details-stack"> <div class="reward-item-row"> <div class="reward-table__cell reward-table__cell--rate">
                                                <span class="reward-table__rate__unit reward-table__rate__unit--mini">プリペイドで</span><br>
                                                <span class="reward-table__rate__value">100</span><span class="reward-table__rate__unit reward-table__rate__unit--yen">円</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--plan">
                                                <span class="reward-table__plan__name">―</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--period">
                                                <span class="reward-table__period__value">―</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--referrer">
                                                <span class="reward-table__benefit__value">100</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--friend">
                                                <span class="reward-table__benefit__value">100</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">円</span>
                                            </div>
                                        </div>

                                        <div class="reward-item-row reward-item-row--upgrade-highlight"> <div class="reward-table__cell reward-table__cell--rate">
                                                <span class="reward-table__campaign-badge">キャンペーン中</span><br>
                                                <span class="reward-table__rate__condition reward-table__rate__condition--cp">有料にアップグレード時</span>
                                                <span class="reward-table__rate__alt">
                                                        100円引いた<s>10%</s><span class="reward-table__rate__value red">20</span><span class="reward-table__rate__unit red">%</span>
                                                    </span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--plan">
                                                <span class="reward-table__plan__name">Minecraft Java版<br><span class="reward-table__plan__note">(〜3人)</span></span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--period">
                                                <span class="reward-table__period__value">365</span><span class="reward-table__period__unit reward-table__period__unit--day">日</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--referrer">
                                                <s><span class="reward-table__benefit__value--before">601</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">円</span></s><br>
                                                <span class="reward-table__benefit__value red">1,302</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">円</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--friend">
                                                <s><span class="reward-table__benefit__value--before">601</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">円</span></s><br>
                                                <span class="reward-table__benefit__value red">1,302</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">円</span><span class="reward-table__benefit__off red">OFF</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrollHintfriend1">
                            <div class="scrollHintfriend1_icon">
                                <i class="ico ico_arrow-right"></i>
                                <span>スクロールできます</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text red">※キャンペーン期間は【2025/5/26 12:00 - 2025/8/26 12:00】です。</p>
                    <p class="rewardinfo--text">※1 XWRITEは、以下の場合にお友達紹介プログラムの特典が適用されます。</p>
                    <p class="rewardinfo--text">・エックスサーバーのお申し込み時に「WordPressクイックスタート」を利用してXWRITEを購入する場合</p>
                    <p class="rewardinfo--text">・XServerアカウント管理画面の「WordPressテーマ」メニューからXWRITEを購入する場合</p>
                    <p class="rewardinfo--text">※2 XServer GAMEsの無料サーバー契約による報酬は、即時にプリペイドへチャージされます。</p>
                </div>

            </div>
        </div>

        <div class="self">
            <div class="wrap">
                <div class="self--img">
                    <picture>
                        <source media="(min-width:1100px)" srcset="img/campaign/friend/img_self_application.png">
                        <img src="img/campaign/friend/img_self_application_sp.png" alt="あなたもお友達も一緒にお得！お友達紹介プログラム">
                    </picture>
                </div>
                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text">※初回の利用料金に初期費用は含みません。</p>
                    <p class="rewardinfo--text">※紹介した方および紹介されたお友達の特典は、キャンペーンの実施状況により変動する場合があります。</p>
                    <p class="rewardinfo--text">※一部プランを除き、30日未満の契約は特典の対象外です。</p>
                </div>
            </div>
        </div>

    </section>


    <section class="flow">
        <div class="wrap">
            <h2 class="sttl">特典適用までの流れ</h2>

                <div class="section TabArea">

                    <div class="inner">
                        <div class="TabWrap mt40">
                            <input id="tab-new" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-new">お友達に紹介する場合</label>

                            <!-- tab1 -->
                            <div class="TabContents stepListContainer js_scrolltip">
                                <ul class="stepList1">
                                    <li>
                                        <div class="stepItem step1">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step01_friend.png" alt="STEP1"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">紹介する人</span></div>
                                            <p class="stepItem__text">紹介用URLをLINE・メールのいずれかで友達など紹介したい人にシェアします。</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step2">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step02_friend.png" alt="STEP2"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag guest">紹介された人</span></div>
                                            <p class="stepItem__text">紹介用URLを経由して対象サービスを新規申し込みします。</p>
                                        </div>
                                    </li>
                                    <li><div class="stepItem__period">対象サービスの条件を満たす形でご契約</div></li>
                                    <li>
                                        <div class="stepItem step3">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step03_friend.png" alt="STEP3"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag guest">紹介された人</span></div>
                                            <p class="stepItem__text">料金のお支払い時、または本契約完了時に報酬が適用されます。</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step4">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step04_friend.png" alt="STEP4"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">紹介する人</span></div>
                                            <p class="stepItem__text">STEP3の翌々月、または即時報酬を受け取れます。(<a href="#receive">受け取り方法</a>)</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="scrollHintfriend1">
                                    <div class="scrollHintfriend1_icon">
                                        <i class="ico ico_arrow-right"></i>
                                        <span>スクロールできます</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1 -->

                            <!-- tab2 -->
                            <input id="tab-old" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-old">ご自身の申し込みの場合</label>
                            <div class="TabContents stepListContainer js_scrolltip">
                                <ul class="stepList2">
                                    <li>
                                        <div class="stepItem step1">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step01_self.png" alt="STEP1"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">あなた</span></div>
                                            <p class="stepItem__text">XServerアカウントにログインし「友達紹介メニュー」から契約したいサービスの「ご自身の利用:こちらから」をクリック</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step2">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step02_self.png" alt="STEP2"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">あなた</span></div>
                                            <p class="stepItem__text">「ご自身の利用:こちらから」を経由して、新規申し込み</p>
                                        </div>
                                    </li>
                                    <li><div class="stepItem__period">対象サービスの条件を<br>満たす形でご契約</div></li>
                                    <li>
                                        <div class="stepItem step3">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step03_self.png" alt="STEP3"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">あなた</span></div>
                                            <p class="stepItem__text">契約時に「初回の利用料金の割引特典」が適用されます。</p>
                                        </div>
                                    </li>
                                    <div class="scrollHintfriend2">
                                        <div class="scrollHintfriend2_icon">
                                            <i class="ico ico_arrow-right"></i>
                                            <span>スクロールできます</span>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <!-- /tab2 -->

                        </div>
                    </div>
                    <!-- /inner -->

                <!-- /section -->

            </div>
        </div>
    </section>
    <section class="guide">
        <div class="wrap">
            <h2 class="sttl">紹介プログラムのご利用方法</h2>
            <div class="guideContainer">
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">1</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step01.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">XServerアカウントにログイン</div>
                        <p class="guideItem__detail--text">有効なサービス契約があるXServerアカウントにログインします。</p>
                        <div class="guideItem__detail--links"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--secondary">XServerアカウント ログインフォーム<img src="img/campaign/friend/ico_btnblue_arrow_right.png" alt=""></a></div>
                    </div>
                </div>
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">2</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step02.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">友達紹介メニューをクリック</div>
                        <p class="guideItem__detail--text">紹介可能なサービスの一覧が表示されます。</p>
                    </div>
                </div>
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">3</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step03.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">お友達に紹介、またはご自身の申し込みに利用</div>
                        <p class="guideItem__detail--text">お友達に紹介する場合：LINE・メールから選択してください。<br>
                            自身の利用の場合：契約したいサービスの「ご自身の利用：こちらから」をクリックしてお申し込みください。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="receive" id="receive">
        <div class="wrap">
            <h2 class="sttl">報酬の受け取り方法</h2>
            <div class="receiveGuide">
                <div class="receiveGuide__avatar"><img src="img/campaign/friend/img_avatar_guest.png?date=240603" alt=""></div>
                <div class="receiveGuide__detail">
                    <div class="receiveGuide__detail--caption"><span>紹介したお客様</span></div>
                    <p class="receiveGuide__detail--text">
                        <span>・銀行振込で受け取る場合</span><br>
                        受け取り用の口座情報（国内の銀行口座に限ります）をご登録後、紹介されたお客様の本契約日を起算日として、翌々月の15日にご登録の口座に振り込まれます。
                    </p>
                    <p class="receiveGuide__detail--text">
                        <span>・プリペイドで受け取る場合</span><br>
                        紹介されたお客様の本契約日を起算日として、翌々月の1日にXServerアカウントのプリペイドにチャージされます。
                    </p>
                    <div class="receiveGuide__prepaid">
                        <img src="img/campaign/friend/ico_btnwhite_arrow_right.svg" alt="プリペイド案内" class="receiveGuide__prepaid--ico">
                        <span class="receiveGuide__prepaid--ttl">プリペイドとは</span>
                        <p class="receiveGuide__prepaid--txt">
                            XServerアカウントにあらかじめ入金した金額の範囲内で支払いを行う方式です。<br>
                            チャージされた残高は、XServerの各サービスでご利用いただけます。なお、残高の換金はできません。
                        </p>
                    </div>
                </div>
            </div>
            <div class="receiveLinks"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--primary">お友達紹介プログラムの利用はこちら<img src="img/campaign/friend/ico_btnyellow_arrow_right.png" alt=""></a></div>
            <div class="attentions">
                <div class="attentions__caption">注意事項</div>
                <ul class="attentions__list">
                    <li>
                        <b>■ 報酬の支払いタイミングについて</b><br>
                        <div class="note">
                            ※報酬は紹介されたお客様の本契約日を起算日としてお支払いします。支払い方法によってタイミングが異なります。<br>
                            ・銀行振込でのお支払い：翌々月の15日にお振り込みします。<br>
                            ・プリペイドでのお支払い：翌々月の1日にXServerアカウントへ充当します。
                        </div>
                        <div class="note">※紹介されたお客様の契約が返金やキャンセルなどにより、申請時点でご契約が終了している場合は、報酬支払いの対象外となります。</div>
                    </li>
                    <li>
                        <b>■ 特典適用のタイミングについて</b><br>
                        <div class="note">
                            ※紹介特典は受け取れるタイミングが異なります。<br>
                            ・紹介したお客様：「紹介されたお客様」が料金をお支払いしていただいた後に特典が適用されます。<br>
                            ・紹介されたお客様：料金をお支払いしていただく際に特典が適用されます。<br>
                            ・ご自身の申し込みに利用した場合：料金をお支払いしていただく際に特典が適用されます。
                        </div>
                        <div class="note">※XServer GAMEs 無料サーバーをご契約の場合は、紹介されたお客様の無料サーバー契約完了画面が表示された時点でプリペイドへ即時充当されます。</div>
                    </li>
                    <li>
                        <b>■ 対象となる契約について</b><br>
                        <div class="note">
                            ※紹介URLからお申し込みいただいたご契約が対象となります。<br>
                            それ以外の方法でお申し込みいただいたご契約の場合、ご入金いただきましても特典適用外となりますのでご注意ください。
                        </div>
                        <div class="note">
                            ※紹介されたお客様が既に対象サービスをご契約されている場合は特典適用外です。<br>
                            過去にご契約されたことがあるお客様も、ご紹介を受けた時点で有効なご契約が無ければ対象となります。<br>
                            また、XServer GAMEsは無料サーバーからの契約と有料サーバーの契約で別対象となります。
                        </div>
                        <div class="note">
                            ※30日未満の契約は特典の対象外です。ただし、以下の契約は契約期間に関わらず特典の対象になります。<br>
                            ・XWRITE：買い切りプラン<br>
                            ・XServer GAMEs：無料サーバー（「有料サーバーにアップグレード」は除く）
                        </div>
                    </li>
                    <li>
                        <b>■ 特典を受けるための条件について</b><br>
                        <div class="note">※紹介特典を受けるためには、紹介されたお客様が、所定の期間以上でご契約いただく必要があります。</div>
                        <div class="note">※紹介されたお客様に特典が付与されたあとの申込キャンセルは、いかなる場合も受けられませんのでご注意ください。</div>
                    </li>
                    <li>
                        <b>■ 特典の内容について</b><br>
                        <div class="note">※報酬額、割引額には初期費用は含まれません。</div>
                        <div class="note">※ご自身の申し込みでの利用の場合、利用料金の割引のみが特典として適用され、紹介報酬の特典は適用されません。</div>
                        <div class="note">
                            ※ご自身の申し込みでの利用は1サービスにつき1回までです。<br>
                            すでにご契約済みのサービスではご利用いただけません。
                        </div>
                        <div class="note">
                            ※XWRITEは、以下の場合にお友達紹介プログラムの特典が適用されます。<br>
                            ・エックスサーバーのお申し込み時に「WordPressクイックスタート」を利用してXWRITEを購入する場合<br>
                            ・XServerアカウント管理画面の「WordPressテーマ」メニューからXWRITEを購入する場合
                        </div>
                        <div class="note">
                            ※XServer GAMEs 無料サーバーは、紹介されたお客様の契約特典もプリペイド報酬になります。<br>
                            また、この紹介経由で無料サーバーを契約されたお客様が有料サーバーを契約する際は割引が適用されます。<br>
                            紹介したお客様は、無料サーバーが契約された際と有料サーバーが契約された際にそれぞれ特典が適用されます。
                        </div>
                    </li>
                    <li>
                        <b>■ プログラム全体に関する注意事項について</b><br>
                        <div class="note">※A8.netアフィリエイトプログラム、XServerビジネスパートナープログラムとの併用はできません。</div>
                        <div class="note">※本プログラムは予告なく終了する場合があります。</div>
                        <div class="note">
                            ※本プログラムは、弊社サービスにご興味がある方にご紹介いただくことを意図しています。<br>
                            そのため、SNSを通じた不特定多数の方への紹介は禁止しています。<br>
                            本プログラムの趣旨に沿わない紹介と弊社が判断した場合は、特典の適用を除外することがあります。
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>

</main>


<footer class="copyright">
    <small>&copy; 2003-<?php echo date("Y"); ?> XServer Inc.</small>
</footer>

<?php include("bottom.php"); ?>
