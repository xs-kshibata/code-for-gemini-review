<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">
<title>サーバーお申し込み手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー契約のお申し込み手順です。本契約までの流れについてもご案内しています。">
</head>

<body id="pid-order">
<?php include("../top.php"); ?>
<div id="wrapper">
<?php include("../header2.php"); ?>
<div id="toggle-target">
<div class="contents">
    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-order"><i class="ico ico_pencil"></i>お申し込みの流れ</span></h2>
            <?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <aside class="msg msg_notice">
            <div class="daiko-warp">
                <p class="msg_ttl daiko-txt">スムーズに移転したい時はこちら！</p>
                <p class="daiko-bnr"><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="サーバー移転代行"></a></p></div>
        </aside>

        <div class="section mb15">
            <div class="section_body">
                <ul class="order-nav">
                    <li class="order-nav_item order-nav_item-new is-current">
                        <span class="order-nav_item_label">
                            <span>サーバー新規お申し込み</span>
                        </span>
                    </li>
                    <li class="order-nav_item order-nav_item-transfer">
                        <a class="order-nav_item_label" href="order_transfer_server.php">
                            <span>サーバー移転</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.section -->

        <h2 class="ttl"><span class="label">サーバー新規お申し込み</span></h2>
        <p>
            エックスサーバーのサーバーの新規お申し込みはWeb上ですべて完結し、複雑な手続きをすることなく開始できます。<br>
            お申し込みと同時に「<b>WordPressクイックスタート</b>」を利用すると、ブログの導入・運営をスムーズに行うことが可能です。<br>
            また、<b>10日間無料のお試し期間</b>で実際の使用感を確かめることができるので、初めての方も安心してスタートできます。
        </p>

        <section class="section mt50">
            <h3 class="section_ttl">サーバー新規お申し込みの流れ</h3>
            <div class="section_body">

                <ul class="flowNav">
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_01.svg" alt="お申し込み" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">お申し込み</h4>
                            <p class="flowNav__txt">プラン選択など、必要な情報を入力します。</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_02.svg" alt="お試し期間" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">お試し期間</h4>
                            <p class="flowNav__txt">10日間の無料お試し期間が始まります。</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_03.svg" alt="お支払い" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">お支払い</h4>
                            <p class="flowNav__txt">お試し期間中にご利用料金をお支払いください。</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_04.svg" alt="本契約" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">本契約</h4>
                            <p class="flowNav__txt">お支払いが確認でき次第、本契約へと移行します。</p>
                        </div>
                    </li>
                </ul>

            </div><!--/section_body-->
        </section>

        <section class="orderFlow">
            <ul>
                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">お申し込み</h3>
                    <div class="order_body_flex">
                        <section class="round-box round-box_left">
                            <h4 class="round-box_ttl">XServerアカウントをお持ちでない方</h4>
                            <div class="round-box_body">
                                <p class="tac">
                                    <img class="frame flex" src="../img/order/img_add_branch_1.png" alt="XServerアカウント新規お申し込みの画面イメージ">
                                </p>
                                <p><a href="../manual/terms.php#01">XServerアカウント</a>の登録とサービスのお申し込みを同時に行います。「新規お申し込み」へ進み、必要事項を記入してください。</p>
                                <p>最大24時間以内にサーバーアカウント設定完了メールが送信されます。メールに記載されているアカウント情報(XServerアカウントID等)をご確認ください。</p>
                            </div>
                        </section>
                        <section class="round-box round-box_right">
                            <h4 class="round-box_ttl">XServerアカウントをお持ちの方</h4>
                            <div class="round-box_body">
                                <p class="tac">
                                    <img class="frame flex" src="../img/order/img_add_branch_2.png" alt="XServerアカウントログイン画面のイメージ">
                                </p>
                                <p>
                                    「エックスサーバー」や「<a href="https://business.xserver.ne.jp/" target="_blank">XServerビジネス</a> <i class="ico ico_new-window color-gray"></i>」などXServer関連サービスをご利用中の方は同じアカウントをお使いいただけます。<br>
                                    「ログイン」から追加申し込みの手続きをお進めください。
                                </p>
                            </div>
                        </section>
                    </div>

                    <p class="tac"><a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">お申し込みフォーム<i class="ico ico_new-window"></i></span></a></p>

                    <div class="prQuickStart">
                        <h4 class="prQuickStart__ttl" id="QuickStart">すぐにWordPressブログの運営を始められる<br class="visible-s">「WordPressクイックスタート」</h4>
                        <p class="prQuickStart__txt mt20 mb20">初めてのブログ運営に必要な内容をまとめてお申し込み・設定することが可能です。</p>
                        <p class="prQuickStart__img"><img src="../img/order/img_quick_start.png" class="w95perSM" alt="5つまとめて簡単一括お申し込み"></p>

                        <div class="QuickStartUse cf">
                            <div class="QuickStartUse__box">
                                <div class="QuickStartUse__txt">
                                    <h4 class="QuickStartUse__ttl">ご利用について</h4>
                                    <p class="mt15">
                                        <b>WordPressクイックスタートの「利用する」をチェック</b>の上、お手続きを進めてください。<br>
                                        なお、クイックスタートを利用して申し込んだ場合、「10日間無料のお試し期間」はありません。<br>
                                        お申し込みと同時にお支払いが発生しますので、以降の手順はスキップしてください。
                                    </p>
                                </div>
                                <p class="QuickStartUse__img">
                                    <img src="../img/order/quick_start_use_img.png?date=200603" alt="WordPressクイックスタートを利用する">
                                </p>
                            </div>
                        </div>

                    </div>

                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">お試し期間</h3>
                    <p>お申し込み後、最短数分~最大24時間以内に、お申し込みフォームに記載したメールアドレス宛に「<b>サーバーアカウント設定完了のお知らせ</b>」というタイトルのメールが届きます。<br>
                        こちらのメールがお手元に届いたら、無料お試し期間(10日間)の開始です。</p>
                    <p class="note mb35 font-m">※「サーバーアカウント設定完了のお知らせ」が届かない場合、迷惑メールフォルダやゴミ箱などに入っていないかご確認ください。迷惑メールフォルダなどにもメールがない場合、カスタマーサポートまでご連絡ください。</p>
                    <div id="demo">
                        <h4 class="demo_ttl">無料お試し期間中は実際のサーバーを<br class="visible-s">無料で利用できます。</h4>
                        <div class="demo_txt">
                            <p>
                                <b>・「サーバーパネル」などの管理ツールが使いやすいか<br>
                                ・WordPressなどのプログラムが簡単に設置できるかや、設置後の動作が満足いくものか<br>
                                    ・利用する予定のプログラムが問題なく動作するか</b>
                            </p>
                            <p>など、実際のサーバーでご確認ください。</p>
                            <p class="note mb0 font-m">※無料お試し期間中にはメール送信など一部の機能に制限があります。詳細はマニュアル「<a href="../manual/man_order_free_trial.php">無料お試し期間</a>」をご参照ください。</p>
                        </div>
                    </div>
                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">お支払い</h3>
                    <p>お試し期間中に各管理ツールの使い勝手の確認やプログラムの動作チェックをし、問題がなければご利用料金をお支払いください。<br>
                        お支払い方法についての詳細は各マニュアルをご参照ください。</p>
                    <hr>
                    <p class="font-m">
                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_pay_method_convenient.php">コンビニエンスストア払い</a>」<br>
                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_pay_method_credit.php">クレジットカード決済</a>」<br>
                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_pay_method_bank.php">銀行振り込み</a>」<br>
                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_pay_method_pay_easy.php">ペイジー決済</a>」<br>
                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_pay_method_paidy.php">翌月後払い（コンビニ／銀行）</a>」<br>
                    </p>
                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">本契約</h3>
                    <p>弊社にて、お客様からの料金お支払いが確認でき次第、「<b>お支払い確認のお知らせ</b>」を送信します。<br>
                        お支払い確認メールが届き次第、ご契約が本契約へと移行します。</p>

                    <p class="note mb35 font-m">※万一お支払いから3日以上経過しても「お支払い確認のお知らせ」が届かない場合には、サポートまでご連絡ください。</p>

                    <aside class="msg msg_caution p15" style="overflow: hidden;">
                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>注意事項</h5>
                        <div class="msg_body">
                            <p><b>
                                ・独自ドメイン永久無料特典<br>
                                ・独自ドメイン永久無料特典(キャンペーン特典)<br>
                                ・独自ドメイン1年無料特典
                                </b>
                            </p>
                                <p>上記をご利用の方は通常のドメイン取得とは異なりますので、各マニュアルにて詳細をご確認ください。</p>

                            <p class="font-m">
                                <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_present_domain.php">独自ドメイン永久無料特典</a>」<br>
                                <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_campaign_domain.php">独自ドメイン永久無料特典（キャンペーン特典）</a>」<br>
                                <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_oneyear_domain.php">独自ドメイン1年無料特典</a>」<br>
                            </p>
                        </div>
                    </aside>
                </li>

            </ul>

        </section><!-- /orderFlow -->

        <p class="tac"><a href="order_transfer_server.php" class="btn btn_gray-l btn-order-transfer"><img class="mr15 w20perS" src="../img/order/ico_server_transfer.png?date=240808" alt="">サーバー移転をご利用の方はこちら<i class="ico ico_chevron-right"></i></a></p>

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