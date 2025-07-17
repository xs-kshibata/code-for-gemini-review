<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">
<title>サーバー移転手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="すでにエックスサーバー以外で稼働中のウェブサイトをエックスサーバーへ移転するための手順です。当マニュアルに沿って作業を行っていただくことで、「ホームページが表示されない期間の発生」を防ぎつつサーバーを移転することが可能です。">
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
                        <p class="daiko-bnr"><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="サーバー移転代行"></a></p>
                    </div>
                </aside>

                <div class="section mb15">
                    <div class="section_body">
                        <ul class="order-nav">
                            <li class="order-nav_item order-nav_item-new">
                                <a class="order-nav_item_label" href="index.php">
                                    <span>サーバー新規お申し込み</span>
                                </a>
                            </li>
                            <li class="order-nav_item order-nav_item-transfer is-current">
                                <span class="order-nav_item_label">
                                    <span>サーバー移転</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.section -->

                <h2 class="ttl"><span class="label">サーバー移転</span></h2>
                <p>
                    本ページでは、Webサイトやメールを運用しているサーバーを変更(お引越し)する「サーバー移転」の手順についてご案内します。<br>
                    サーバー移転の流れを、動画やステップごとの解説で確認していきましょう。
                </p>

                <!-- video -->
                <section id="video" class="video__wrap">
                    <div class="video__ttl balloon">
                        <p>「サーバー移転」の手順を<br class="visible-s">動画でご案内！</p>
                    </div>
                    <div class="video__contents">
                        <iframe src="https://www.youtube.com/embed/EQsHAL85cIY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="video__read">※動画マニュアルは2023年12月時点の<br class="visible-s">設定画面でご案内しています。</p>
                </section>
                <!-- /#video -->
                <div class="docListContainer">
                    <div class="category">
                        <div class="catTitle">事前確認</div>
                        <ul class="docList">
                            <li><a href="#step1"><i class="ico step1"></i><span class="step">STEP 1</span><span class="caption">サーバー移転前の確認</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">お申し込み</div>
                        <ul class="docList">
                            <li><a href="#step2"><i class="ico step2"></i><span class="step">STEP 2</span><span class="caption">サーバーのお申し込み</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">設定やデータの<br>移行</div>
                        <ul class="docList">
                            <li><a href="#step3"><i class="ico step3"></i><span class="step">STEP 3</span><span class="caption">ドメインの設定</span></a></li>
                            <li><a href="#step4"><i class="ico step4"></i><span class="step">STEP 4</span><span class="caption">Webサイトの移行</span></a></li>
                            <li><a href="#step5"><i class="ico step5"></i><span class="step">STEP 5</span><span class="caption">メールアカウントの設定</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">サーバー切り替え</div>
                        <ul class="docList">
                            <li><a href="#step6"><i class="ico step6"></i><span class="step">STEP 6</span><span class="caption">ネームサーバー(DNS)の変更</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">移転完了</div>
                        <ul class="docList">
                            <li><a href="#step7"><i class="ico step7"></i><span class="step">STEP 7</span><span class="caption">サーバー移転完了</span></a></li>
                        </ul>
                    </div>
                </div>
                <h2 class="ttl"><span class="label">サーバー移転の流れ</span></h2>
                <section class="orderFlow">
                    <ul><!-- 1 サーバー移転前の確認 -->
                        <li id="step1"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">サーバー移転前の確認</h3>
                            <p class="mb40">サーバー移転をスムーズに進めるために、移転元サーバーの運用状況について確認をしておきましょう。</p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-1.　移転元サーバーの利用期限を確認する</h4>
                                            <p>
                                                サーバー移転にかかる時間の目安は<b>「移転前の事前作業を行う時間」＋「ネームサーバー(DNS)の変更にかかる時間(約1日程度)」</b>です。
                                                移転元サーバーのご契約期間にどれくらいの余裕があるかを確認しておきましょう。
                                            </p>
                                            <p>
                                                サーバー移転時にWebサイトの表示やメールの送受信を停止させずに作業を行う場合、移転が完了するまでは <b>移転元サーバーのご契約を継続したまま、</b>期間を重複させてエックスサーバーをご契約いただく必要があります。
                                                そのため、移転元サーバーのご契約に1ヶ月以上の余裕がある状態で作業をしていただくことがおすすめです。
                                            </p>
                                            <p class="mt30 mb30 tac"><img class="srcset flex" src="../img/order/img_transfer_server_01_l.png?date=240808" alt="移転期間と解約のタイミング"></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-2.　エックスサーバーへ移転する内容を確認する</h4>
                                            <p>
                                                移転元サーバーで「Webサイト・メール」の両方を利用されている場合や、「Webサイト」または「メール」のみ利用されている場合など、エックスサーバーへ移転をする内容を確認しておきましょう。
                                            </p>
                                            <p class="mt30 mb30 tac"><img class="srcset flex" src="../img/order/img_transfer_server_06_l.png?date=250422" alt="移転する項目を確認する"></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-2 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-3.　ドメインの管理会社でネームサーバー(DNS)の変更方法を確認する</h4>
                                            <p class="mb30">
                                                サーバー移転はドメインのネームサーバーを変更することで完了します。<br>
                                                ネームサーバーはドメイン管理会社で変更が必要です。<br>
                                                現在のドメイン管理会社にて、ネームサーバーの変更方法を確認しておきましょう。
                                            </p>

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box">
                                                <h5 class="js--accordion">ドメイン移管について<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        ドメイン移管は、ドメインの更新料金の支払いなど、ドメインの契約を管理している管理会社を変更する手続きです。<br>
                                                        サーバー移転とドメイン移管は一緒に行われることも多いですが、当サービスではサーバーのみ移転をしてご利用いただくことも可能なため、ドメイン移管は必須ではありません。
                                                    </p>
                                                    <aside class="msg msg_notice clear mb30">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>以下に該当する場合は、当社へのドメイン移管をご検討ください</h6>
                                                        <div class="msg_body case-detail">
                                                            ・現在のドメイン管理会社でネームサーバーの変更ができない<br>
                                                            ・サーバーとドメインの契約を当社サービスでまとめて管理したい
                                                        </div>
                                                    </aside>
                                                    <p>ドメイン移管についての詳細は以下のページをご確認ください。</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>「<a href="https://www.xdomain.ne.jp/column/domain-transfer/" target="_blank">ドメインの移管とは？具体的な手順・注意点・事前の確認事項を詳しく解説</a>」<i class="ico ico_new-window base-color"></i></p>

                                                    <hr>

                                                    <h6 class="transfer-ttl pt10"><i class="ico ico_circle"></i>ドメイン移管を行う場合</h6>
                                                    <p class="mt20 mb20">
                                                        ドメイン移管はサーバー移転の前でも後でもお手続きが可能です。<br>
                                                        ドメイン移管のお手続きには7〜10日程度の時間がかかり、移管申請中はネームサーバーの変更ができません。<br>
                                                        そのため、サーバー移転とドメイン移管の両方を検討されている場合、ドメインのご利用期限に余裕があればサーバー移転から行っていただくことがおすすめです。
                                                    </p>


                                                    <aside class="msg msg_notice clear mb10">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>以下に該当する場合は、ドメイン移管から手続きを行ってください</h6>
                                                        <div class="msg_body case-detail">
                                                            ・現在のドメイン管理会社でネームサーバーの変更ができない<br>
                                                            ・ドメインの利用期限に余裕がない<br>
                                                        </div>
                                                    </aside>

                                                    <p class="note font-m mb30">※ドメイン移管を行う場合、基本的にはドメインの利用期限に1ヶ月以上の余裕がある状態でお手続きが必要です。<br>
                                                            利用期限まで1ヶ月未満の場合は、現在のドメイン管理会社にて更新をしたうえで、移管手続きを行ってください。
                                                    </p>

                                                    <p>ドメイン移管のお申し込み手順は以下のマニュアルをご確認ください。</p>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer.php" target="_blank">ドメイン移管申請(.jp/都道府県.jp/co.jp/or.jp/ne.jp/gr.jp/ac.jp/ed.jp ドメインの場合)</a>」<i class="ico ico_new-window base-color"></i><br>
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer_other.php" target="_blank">ドメイン移管申請(.com/.net/.org/.biz/.info/.me/.asia/ などの、.jp以外のドメインの場合)</a>」<i class="ico ico_new-window base-color"></i>
                                                    </p>
                                                    <p>条件を満たしていれば、「独自ドメイン永久無料特典」を使用してドメイン移管を行うことが可能です。<br>
                                                       詳細は以下のマニュアルをご確認ください。
                                                    </p>
                                                        <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_present_domain.php">独自ドメイン永久無料特典</a>」</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-3 -->

                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /1.サーバー移転前の確認 -->


                        <!-- 2 サーバーお申し込み -->
                        <li id="step2"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">サーバーお申し込み</h3>
                            <div class="order_body">
                                <div>
                                    <p>
                                        お申し込みフォームよりサーバーをお申し込みください。<br>
                                        お申し込み後、<b>10日間のお試し期間</b>が開始され、お試し期間のご利用期限日までにご利用料金をお支払いをいただくと、 本契約となります。
                                    </p>
                                    <p class="note font-m">※サーバー移転を行う場合、「WordPressクイックスタート」は利用せずにお申し込みください。</p>

                                    <h4 class="transfer-ttl mb20"><i class="ico ico_circle"></i>お試し期間中のご利用について</h4>
                                    <table class="table responsiveTable">
                                        <tbody>
                                        <tr>
                                            <th class="transfer-th">Webサイト</th>
                                            <td>お試し期間中にデータのアップロードや動作確認が可能です。</td>
                                        </tr>
                                        <tr>
                                            <th class="transfer-th">メール</th>
                                            <td>お試し期間中に設定はできません。サーバーの本契約(料金お支払い)後に設定してください。</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn ml0 mb20 w100perS" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">サーバーお申し込みはこちら<i class="ico ico_new-window"></i></span></a></p>

                                    <div class="manual-link w100perS">
                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="index.php">サーバー新規お申し込み</a>」<br>
                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_free_trial.php">無料お試し期間について</a>」
                                    </div>

                                </div>
                            </div>
                        </li><!-- /2.サーバーお申し込み -->


                        <!-- 3 ドメイン設定 -->
                        <li id="step3"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">ドメイン設定</h3>
                            <div class="order_body">
                                <div>
                                    <p>
                                        独自ドメインをエックスサーバーで利用するための設定を行います。<br>
                                        ドメイン設定を追加することで、対象ドメイン名のフォルダがサーバー上に作成され、サーバー内の必要な設定ができる状態になります。
                                    </p>
                                    <p class="font-m">
                                        ※ドメイン設定を行ってもネームサーバーなどDNSは切り替わりませんので、移転元のWebサイトやメールの運用に影響が出ることはありません。<br>
                                        ※ドメイン設定は「ドメイン移管」の手続きではありません。
                                    </p>
                                   <div class="manual-link w100perS">
                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_domain_setting.php">ドメイン設定</a>」<br>
                                   </div>

                                </div>
                            </div>
                        </li><!-- /3 ドメイン設定 -->


                        <!-- 4 Webサイトのデータ移行 -->
                        <li id="step4"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">Webサイトの移行</h3>
                            <p class="mb40">
                                移転元サーバーから、Webサイトを移行します。<br>
                                <span class="font-m">(Webサイトを利用されていない場合、こちらの手順は不要です)</span>
                            </p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-1.　Webサイトのデータを移行する</h4>
                                            <p class="mb30">WordPressを利用されている場合と、それ以外の場合で必要な手順をご確認ください。</p>

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">WordPressをご利用の場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        「<b>WordPress簡単移行</b>」機能にてデータの移行が可能です。 <br>
                                                        <span class="font-m">※WordPress簡単移行が利用できない場合は手動で移行してください。</span>
                                                    </p>
                                                    <hr>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_install_transfer_wp.php">WordPress簡単移行</a>」<br>
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_install_transfer_wordpress.php">WordPressの移転について(手動移行)</a>」<br>
                                                        <i class="ico ico_triangle-right"></i>「<a href="https://www.xserver.ne.jp/blog/wordpress-migration/" target="_blank">WordPressブログの引っ越し(サーバー移行)手順を解説！</a>」<i class="ico ico_new-window base-color"></i></p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">WordPress以外をご利用の場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        事前に移転元サーバーにてWebサイトのバックアップなどを取得し、必要なデータを用意してください。<br>
                                                        FTPソフトまたはファイルマネージャなどを使用し、エックスサーバーへデータをアップロードしてください。
                                                    </p>
                                                    <hr>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_ftp_setting.php">FTPソフトの設定</a>」<br>
                                                        <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_tool_file.php">ファイルマネージャ</a>」
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->

                                            <h5 class="transfer-ttl font-xl mb20"><i class="ico ico_circle"></i>スタッフが作業を代行する「サーバー移転代行」</h5>
                                            <p>
                                                ご自身で移行作業を行うことに不安があるというお客様には、 知識豊富なエンジニアスタッフが移転作業を代行する「<b>サーバー移転代行</b>」<span class="font-s">(オプション)</span>をご利用いただくことで、スムーズな移行をフォローします。<br>
                                                WordPressの移転代行も可能です。</p>
                                            <p><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="サーバー移転代行"></a></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-2.　SSLを設定する</h4>
                                            <p class="mb30">
                                                HTTPS化されたWebサイトを移転される場合は、SSLを設定します。 <br>
                                                エックスサーバーでは「<b>無料独自SSL</b>」または「<b>オプション独自SSL<span class="font-s">(有料)</span></b>」がご利用いただけます。
                                            </p>

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">無料独自SSLを利用する場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb15">サーバーパネルより設定を追加し、移転元にて「WEB認証」または「DNS認証」を行ってください。</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_server_ssl.php#link-previous-b">無料独自SSL：他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する</a>」</p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">オプション独自SSL(有料)を利用する場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb15">XServerアカウントよりお申し込みのうえ、証明書の「取得申請」を行ってください。</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_order_ssl.php">オプション独自SSLのお申し込み</a>」</p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-2 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-3.　Webサイトの動作を確認する</h4>
                                            <p class="mb10">
                                                Webサイトの準備ができましたら、サイトが正しく表示されるか動作確認を行います。<br>
                                                Webサイトの内容により動作確認の方法が異なります。<br>
                                            </p>
                                            <p class="note font-m mb30">※WordPressをご利用の場合は、hostsファイルを編集する方法で動作確認を行ってください。</p>

                                            <h4 class="transfer-ttl mb20"><i class="ico ico_circle"></i>動作確認について</h4>
                                            <table class="table responsiveTable">
                                                <tbody>
                                                <tr>
                                                    <th class="transfer-th">動作確認URLで確認する</th>
                                                    <td>静的サイトの場合</td>
                                                </tr>
                                                <tr>
                                                    <th class="transfer-th">hostsファイルを編集して<br>確認する</th>
                                                    <td>設定URLにてリンクを生成する動的サイトや、設定ドメインへのリダイレクトを行うCMSプログラム(WordPressなど)を使用している場合</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p class="font-m"><i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_domain_checkproxy.php">動作確認について</a>」</p>

                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-3 -->

                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /4 Webサイトのデータ移行 -->


                        <!-- 5 メールアカウントの設定 -->
                        <li id="step5"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">メールアカウントの設定</h3>
                            <p class="mb30">
                                メールを利用するための設定を行います。<br>
                                <span class="font-m">(メールを利用されていない場合、こちらの手順は不要です)</span>
                            </p>
                            <aside class="msg msg_notice clear mb10">
                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください。</h6>
                                <div class="msg_body case-detail">
                                    過去の受信メールなどのデータはエックスサーバーへ引き継ぐことができません。<br>
                                    ご利用のパソコン内のメールソフトなど、ローカル上でバックアップを行いデータを保存してください。
                                </div>
                            </aside>
                            <p class="note font-m mb30">※過去の受信メールなどのバックアップについては、移転元サーバーやメールソフトの提供元へご確認ください。</p>

                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">5-1.　メールアカウントを追加する</h4>
                                            <p class="mb30">サーバーへメールアカウントを追加します。</p>
                                            <p class="font-m">
                                                <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_mail_add.php">メールアカウントの追加</a>」
                                            </p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /5-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">5-2.　メールソフトへ設定する</h4>
                                            <p class="mb10">
                                                メールソフトを利用されている場合、ご利用のメールソフトへエックスサーバーの情報を使用してメールアカウントを追加します。<br>
                                                既存のメールアカウント設定は上書きせず、アカウントを追加する方法で設定を行ってください。<br>
                                                サーバー移転が完了するまでは新旧どちらのアカウントでもメールが受信できるようにしておくことで、サーバー切り替え中のメールの取りこぼしを防ぐことが可能です。
                                            </p>
                                            <p class="note font-m mb30">※同じメールアドレスの追加ができない場合は、他のメールソフトへ設定をしていただくか、WEBメールの利用をご検討ください。</p>
                                            <hr>
                                            <p class="font-m">
                                                <i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_mail_setting.php">メールソフトの設定</a>」<br>
                                                <i class="ico ico_triangle-right"></i>よくある質問「<a href="../support/faq/transfer_server_incoming_mail.php">サーバー移転中のメールの受信方法はどうすればいいでしょうか？</a>」
                                            </p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /5-2 -->
                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /5 メールアカウントの設定 -->


                        <!-- 6 ネームサーバー(DNS)の変更 -->
                        <li id="step6"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">ネームサーバー(DNS)の変更</h3>
                            <p class="mb40">
                                STEP1〜5までの手順が完了しているかどうかを確認し、最後にネームサーバーを変更します。<br>
                                ネームサーバーを変更することで、移転元サーバーからエックスサーバーへ最終的なサーバーの切り替えが行われます。<br>
                                Webサイトやメールの利用者の少ない時間帯に変更をするなど、事前に予定を立てて変更していただくことをおすすめします。<br>
                                ネームサーバーはドメインの管理会社で変更します。
                            </p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <p class="mb30">以下より必要な手順をご確認ください。</p>

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">当社でドメインをご契約中の場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        XServerアカウントのドメインメニューよりネームサーバーを変更します。<br>
                                                        ドメイン適用先サービスは「XServerレンタルサーバー」を選択してください。
                                                    </p>
                                                    <hr>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>マニュアル「<a href="../manual/man_domain_namesever_setting.php">ネームサーバーの設定</a>」</p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->

                                            <!-- 開閉コンテンツ -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">他社でドメインをご契約中の場合<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        ドメイン管理会社にてネームサーバーを以下の情報へ変更してください。<br>
                                                        管理会社によって設定できるネームサーバーの数は異なる場合があります。<br>
                                                        「ネームサーバー1」から順番に、設定できる数だけ設定していただければ問題ありません。
                                                    </p>
                                                    <table class="table w70perL mb30 responsiveTable">
                                                        <tbody>
                                                        <tr>
                                                            <th class="transfer-th">ネームサーバー1</th>
                                                            <td class="tac">ns1.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">ネームサーバー2</th>
                                                            <td class="tac">ns2.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">ネームサーバー3</th>
                                                            <td class="tac">ns3.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">ネームサーバー4</th>
                                                            <td class="tac">ns4.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">ネームサーバー5</th>
                                                            <td class="tac">ns5.xserver.jp</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <p class="note font-s">※一部古いサーバー契約はネームサーバー情報が異なる場合があります。<br>ご利用サーバーのネームサーバー情報は「サーバーパネル＞サーバー情報」にて確認が可能です。</p>
                                                </div>
                                            </div>
                                            <!-- 開閉コンテンツ -->

                                            <div class="media">
                                                <p class="media_image media_image_rev w50perM"><img class="flex" src="../img/order/img_transfer_server_05.png?date=2504" alt="ネームサーバー(DNS)の変更についてのイメージ"></p>
                                                <div class="media_body">
                                                    <h5 class="transfer-ttl font-xl mb20"><i class="ico ico_circle"></i>ネームサーバー(DNS)の反映時間について</h5>
                                                    <p>
                                                        ネームサーバーは変更後、<b>数時間〜最大24時間程度</b>で徐々に反映し、サーバーが切り替わります。<br>
                                                        ネームサーバー変更中は、Webサイトやメールが移転元サーバーとエックスサーバーのどちらに繋がるか予測できない期間が発生します。<br>
                                                        反映するまで丸一日程度、様子をみてください。
                                                    </p>
                                                </div>
                                            </div>

                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /6-1 -->
                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /6 ネームサーバー(DNS)の変更 -->

                        <li id="step7"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">サーバー移転完了</h3>
                            <p>
                                ネームサーバー(DNS)が反映したら、Webサイトの表示やメールの送受信が問題なくできるか確認しましょう。<br>
                                移転した内容が正常に動作していることが確認できましたら、サーバー移転は完了です。<br>
                                移転元サーバーがご不要になる場合は、解約をしていただいて問題ありません。
                            </p>
                        </li><!-- /7 サーバー移転完了 -->


                    </ul>
                </section><!-- /orderFlow -->
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