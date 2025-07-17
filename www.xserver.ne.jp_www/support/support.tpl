<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>お問い合わせ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーへお電話・お問い合わせフォームからお問い合わせをするための方法について記載しています。お問い合わせフォームも当ウェブページに設けています。">

</head>

<script>(function(){
        var w=window,d=document;
        var s="https://app.chatplus.jp/cp.js";
        d["__cp_d"]="https://app.chatplus.jp";
        d["__cp_c"]="43510994_1";
        var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
        a.async=true,a.src=s,m.parentNode.insertBefore(a,m);})();</script>

<body id="pid-support" class="support-contact">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
            <?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->

        <?php include("../topicpath.php"); ?>

        <section class="section">
            <h3 id="support-before" class="section_ttl">お問い合わせの前に</h3>
            <div class="section_body">
                <p>
                    ご利用中のドメイン、サイトに関するトラブルの場合、<br>
                    お問い合わせ前に、Webサイトトラブル診断をご利用ください。<br>
                    <br>
                    サイトURL または ドメイン名を入力するだけで、解決するための診断結果を得られます。<br>
                    <br>
                    問題が解決しない場合は、その結果をお問い合わせ時にご記載いただくと、<br>
                    より正確なサポートが可能になります。
                </p>
                <p class="support-infoSec"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/?request_page=xserver%2Fwebsitetrouble%2Finput" class="btn btn_blue-l">Webサイトトラブル診断</a></p>

            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 id="support-chat" class="section_ttl">チャットでのお問い合わせ</h3>
            <div class="section_body">
                <p class="mb20">
                    新規ご契約のご相談、ご利用中のトラブルなど、下記よりお気軽にチャットでお問い合わせください。<br>
                    お問い合わせの際には「<span class="link disp-i"><a href="support_privacy.php" target="_blank">個人情報の取り扱いについて</a><i class="ico ico_new-window"></i></span>」をお読みいただき、予め同意の上、お問い合わせください。
                </p>

                <div class="chatbtn_box">

                    <!--オペレーターチャット-->
                    <div class="chatbtn">
                        <button class="btn btn_chat_1 support-chat-trigger">オペレーターにチャットで相談</button>
                        <p class="font-s">受付時間：平日10:00~18:00</p>

                        <?php
                        //IEのみ表示
                        $ua = $_SERVER['HTTP_USER_AGENT'];
                        if (strstr($ua,'Trident') || strstr($ua,'MSIE')) {
                            echo '<p class="font-s red">※現在お使いのブラウザ（Internet Explorer）ではご利用いただけません。<br>以下ブラウザの最新版でのご利用を推奨いたします。<br>「Google Chrome」「Microsoft Edge」「Mozilla Firefox」「Safari」</p>';
                        }
                        ?>

                        <script type="text/javascript">
                            window.zESettings = {
                                analytics: false
                            };
                        </script>

                        <!-- Start of x-support Zendesk Widget script -->
                        <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=fbcf2ffc-9bb7-4ab1-87f7-80644ff6d5a7"> </script>
                        <!-- End of x-support Zendesk Widget script -->
                        <script src="../js/zendesk_chat.js?date=<?php echo time(); ?>"></script>
                    </div>
                    <!--/オペレーターチャット-->

                    <!--チャットボット-->
                    <div class="chatbtn">
                        <a href="javascript:void(0)" onclick="ChatplusScript.openChat()"><button class="btn btn_chat_2">チャットボット<span class="font-s">(自動応答サービス)</span></button></a>
                        <p class="font-s">受付時間：24時間365日</p>
                    </div>
                    <!--/チャットボット-->

                </div>

            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 id="support-mail" class="section_ttl">メールでのお問い合わせ</h3>

            <div class="section_body">
                <p class="mb20">
                    新規ご契約のご相談、ご利用中のトラブルなどについて、メールでのサポートをご希望の方は、以下からお問い合わせください。
                </p>

                <div class="chatbtn_box">
                    <div class="chatbtn">
                        <a class="btn btn_blue-xl" href="<?php print $SECURE_URL; ?>xapanel/xserver/contact/input" >XServerアカウントをお持ちの方</a>
                    </div>
                    <div class="chatbtn">
                        <a class="btn btn_blue-xl" href="<?php print $SECURE_URL; ?>xapanel/guest/contact/input?service=xserver">新規の方・ログイン情報が不明の方</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
        <h3 id="support-tel" class="section_ttl">お電話でのお問い合わせ</h3>
        <div class="section_body">
            <p>
                新規ご契約のご相談、ご利用中のトラブルなど、下記番号までお気軽にお問い合わせください。<br>
                XServerアカウントをお持ちのお客様は、あらかじめ「XServerアカウントID」をお手元にご用意ください。<br>
                お問い合わせの際には「<span class="link disp-i"><a href="support_privacy.php" target="_blank">個人情報の取り扱いについて</a><i class="ico ico_new-window"></i></span>」をお読みいただき、予め同意の上、お問い合わせください。
            </p>

            <p><strong>■電話窓口混雑状況</strong></p>
            <div class="table_window_box js_scrolltip">
            <table class="table_window">
                <thead>
                <tr>
                    <th>時間帯</th>
                    <th>10時</th>
                    <th>11時</th>
                    <th>12時</th>
                    <th>13時</th>
                    <th>14時</th>
                    <th>15時</th>
                    <th>16時</th>
                    <th>17時</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>月曜日</td>
                    <td data-label="10時">△</td>
                    <td>△</td>
                    <td>△</td>
                    <td>△</td>
                    <td>△</td>
                    <td>○</td>
                    <td>○</td>
                    <td>○</td>
                </tr>
                <tr>
                    <td>火曜日</td>
                    <td>△</td>
                    <td>○</td>
                    <td>△</td>
                    <td>△</td>
                    <td>○</td>
                    <td>◎</td>
                    <td>○</td>
                    <td>○</td>
                </tr>
                <tr>
                    <td>水曜日</td>
                    <td>△</td>
                    <td>○</td>
                    <td>△</td>
                    <td>△</td>
                    <td>○</td>
                    <td>○</td>
                    <td>○</td>
                    <td>○</td>
                </tr>
                <tr>
                    <td>木曜日</td>
                    <td>△</td>
                    <td>◎</td>
                    <td>△</td>
                    <td>△</td>
                    <td>△</td>
                    <td>◎</td>
                    <td>△</td>
                    <td>◎</td>
                </tr>
                <tr>
                    <td>金曜日</td>
                    <td>△</td>
                    <td>◎</td>
                    <td>△</td>
                    <td>△</td>
                    <td>○</td>
                    <td>◎</td>
                    <td>○</td>
                    <td>○</td>
                </tr>
                </tbody>
            </table>
                <div class="scrollHint">
                    <div class="scrollHint_icon">
                        <i class="ico ico_arrow-right"></i>
                        <span>スクロールできます</span>
                    </div>
                </div>
            </div>
            <p>
                ◎…比較的繋がりやすい時間帯　　<span class="br-sp"></span>〇…やや混み合う時間帯　　<span class="br-sp"></span>△…混み合う時間帯
            </p>
            <p>
                あくまでも目安ですので、繋がりやすい時間帯でも、状況によっては繋がらない事もあります。予めご了承ください。<br>
                お電話が繋がりにくい場合は、ご迷惑をおかけいたしますが、時間を置いておかけ直しいただくか、チャットやメールでのお問い合わせをご利用ください。
            </p>

            <aside class="msg msg_notice">
                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>スマートフォンの通話アプリからお問い合わせいただくお客様へ</h6>
                <p>
                    2024年1月下旬より、<br>
                    スマートフォンにおける一部の通話アプリからお問い合わせいただいた場合に、<br>
                    お電話がつながらない、または音声ガイダンスの途中で切れてしまう事象を確認しております。
                    </p>
                <p>
                    現在当サービスでも原因を調査中ですが、特定条件下のみで発生している事象ですので<br>
                    お心当たりのある場合は、異なる通話アプリをご利用いただくか、固定回線からのお問合せをお試しください。
                </p>
                <p>
                    ご不便をおかけしますが、よろしくお願いいたします。
                </p>
            </aside>

            <div class="border border_blue">
                <address class="support-tel-contents mb20">
                    <span class="support-tel-category">新規ご契約に関する相談窓口</span>
                    <div class="mt5">
                        <i class="ico ico_phone light-blue"></i>0120-183-002<br class="visible-s">
                        &nbsp;<span class="font-s">受付時間 平日10:00~18:00</span>
                    </div>
                </address>

                <address class="support-tel-contents">
                    <span class="support-tel-category">ご契約中のお客様はこちら</span>
                    <div class="mt5">
                        <i class="ico ico_phone light-blue"></i>06-6147-2580<br class="visible-s">
                        &nbsp;<span class="font-s">受付時間 平日10:00~18:00</span>
                    </div>
                </address>

                <div class="border border_gray mb10">
                    音声案内に従って、まずはお問い合わせの対象となるサービスの番号を選択してください。<br>
                    その後、お問い合わせ内容の番号を選択してください。
                    <ul class="guide-number mt10">
                        <li><span class="guide-number_ico">1</span><span class="guide-number_space">・・・</span>レンタルサーバー、ドメインサービス
                            <ul class="guide-sub-number">
                                <li><span class="guide-number_ico">1</span><span class="guide-number_space">・・・</span>お支払い、サービス更新</li>
                                <li><span class="guide-number_ico">2</span><span class="guide-number_space">・・・</span>サーバー移転、ドメイン移管</li>
                                <li><span class="guide-number_ico">3</span><span class="guide-number_space">・・・</span>webサイト、SSL証明書、FTPの設定やトラブル</li>
                                <li><span class="guide-number_ico">4</span><span class="guide-number_space">・・・</span>メールの設定やトラブル</li>
                                <li><span class="guide-number_ico">5</span><span class="guide-number_space">・・・</span>契約名義、契約プランの変更手続き</li>
                                <li><span class="guide-number_ico">6</span><span class="guide-number_space">・・・</span>XServerサイトセキュリティ、その他、sixcoreからの統合・sixcore専用サーバー</li>
                            </ul>
                        </li>
                        <li><span class="guide-number_ico">2</span><span class="guide-number_space">・・・</span>XServer VPSやXServerドライブなど、その他サービス

                            <ul class="guide-sub-number ">
                                <li><span class="guide-number_ico">1</span><span class="guide-number_space">・・・</span>XServer VPS</li>
                                <li><span class="guide-number_ico">2</span><span class="guide-number_space">・・・</span>XServer GAMEs</li>
                                <li><span class="guide-number_ico">3</span><span class="guide-number_space">・・・</span>XServer SNS</li>
                                <li><span class="guide-number_ico">4</span><span class="guide-number_space">・・・</span>XServer クラウドPC</li>
                                <li><span class="guide-number_ico">5</span><span class="guide-number_space">・・・</span>XServerドライブ</li>
                                <li><span class="guide-number_ico">6</span><span class="guide-number_space">・・・</span>その他</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <p class="note font-s mb5">※ダイヤル回線からお問い合わせの場合、番号を選択する前に「＊」(米印)、もしくは「トーン」を押してください。</p>
                <p class="note font-s mb5">※案内の途中でもボタン操作による選択が可能です。</p>
                <p class="note font-s mb5">※お問い合わせが集中した場合、お電話がつながりにくくなることがあります。<br>順番におつなぎいたしますので、そのままお待ちになるか、しばらくたってからおかけ直しくださいますようお願いいたします。</p>
                <p class="note font-s mb0">※技術的に即答いたしかねる場合は、メールでのお問い合わせをお願いする場合がございます。詳細は、よくある質問「<a href="faq/faq_support.php">サポートについて</a>」をご参照ください。</p>
            </div>
        </div>
    </section>
    <!-- /.section -->


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
