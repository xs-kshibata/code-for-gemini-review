<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>独自SSLについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは独自ドメイン名がそのままURLとなる「独自SSL」に対応しています。無制限・無料で利用可能な『無料独自SSL』と証明書ブランドや独自IPアドレスの利用有無が選べる『オプション独自SSL』を提供しています。">

</head>

<body id="pid-functions">

<?php include("../../top.php"); ?>

<div id="wrapper">

    <?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <section class="section">
        	<h3 class="section_ttl">SSL証明書とは？</h3>
        	<div class="section_body">
                <p>SSL証明書とはWEBサイトの所有者の情報、送信情報の暗号化に必要な鍵、発行者の署名データを持った電子証明書です。SSL証明書には主に下記二つの役割があります。</p>
                <ul class="ul about-item">
                    <li><i class="ico ico_circle"></i>証明書に表示されたドメイン（サーバ）の所有者であることの証明</li>
                    <li><i class="ico ico_circle"></i>ブラウザとウェブサーバ間でのSSL暗号化通信の実現</li>
                </ul>
                <p>これによりサイトの訪問者は『情報の送信先』や『送信する情報が暗号化されること』を確認することができ安心して情報を送ることができます。</p>
                <p class="about-img pt30">
                    <img src="../../img/functions/img_about_ssl.png" alt="SSL証明書とは？のイメージ">
                </p>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 class="section_ttl">なぜSSLは信頼できるのか？</h3>
            <div class="section_body clearfix">
                <div class="left">
                    <p>データの送信先を信頼するには、証明書自体が信頼できるものでなければなりません。SSL証明書は知識さえあれば誰でも発行することができます。</p>
                    <p>例えば、オレオレ詐欺のように自ら発行した証明書（自己署名の証明書）で他人になりすますこともできてしまいます。</p>
                    <p>そこで証明書に信頼性を持たせるために、信頼のできる第三者認証機関から発行された証明書を使用することが必要になります。</p>
                </div>
                <div class="right about-img">
                    <img src="../../img/functions/img_ssl_trust.png" alt="なぜSSLは信頼できるのか？のイメージ">
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 class="section_ttl">なぜSSLが必要なのか？</h3>
            <div class="section_body clearfix">
                <div class="left">
                    <p>インターネットの普及にともない、オンラインショッピング・ネットバンキングなど、さまざまなサービスがインターネット上で受けられるようになりました。</p>
                    <p>その便利さの反面「個人情報の漏えい」、「フィッシング詐欺」などが騒がれ、セキュリティ面での不安を抱えるユーザも多くいます。</p>
                    <p>個人情報保護法の施行（平成１７年４月１日）以降、個人情報保護に対する意識はますます高まっています。</p>
                    <p>調査によると個人情報を提供する際に最も重要視することとして『SSL暗号化通信がされていること』が１番に挙げられています。</p>
                </div>
                <div class="right about-img">
                    <img src="../../img/functions/img_ssl_necessity.png" alt="個人情報提供時、企業に対する信頼の基準の表">
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 class="section_ttl">機会損失の回避・SSLの必要性とは</h3>
            <div class="section_body clearfix">
                <p>情報保護の必要性を判断するのは、そのサイトを利用するお客様自身です。</p>
                <p>名前のみでも情報保護が必要と判断するお客様もいれば、名前程度であれば情報保護が必要ないと判断するお客様もいるかもしれません。<br>SSL対応をしていなかったために、お客様がサイトから離れていってしまうといった機会損失は避けなければなりません。</p>
                <div class="left">
                    <div class="left_body">
                        <div class="left_item">
                            <div class="left_item-ttl"><i class="ico ico_circle"></i>オンラインショッピングのオーダーページ</div>
                            <div class="left_item-list">
                                <ul class="ul">
                                    <li>名前/住所/電話番号/メールアドレス</li>
                                    <li>クレジットカード情報/オーダー情報等</li>
                                </ul>
                            </div>
                        </div>
                        <div class="left_item">
                            <div class="left_item-ttl"><i class="ico ico_circle"></i>資料請求等の送付先入力ページ</div>
                            <div class="left_item-list">
                                <ul class="ul">
                                    <li>名前/住所/電話番号/請求内容</li>
                                    <li>メールアドレス等</li>
                                </ul>
                            </div>
                        </div>
                        <div class="left_item">
                            <div class="left_item-ttl"><i class="ico ico_circle"></i>お問い合わせやご意見等の入力ページ</div>
                            <div class="left_item-list">
                                <ul class="ul">
                                    <li>名前/住所/電話番号/お問い合わせ内容</li>
                                    <li>メールアドレス等</li>
                                </ul>
                            </div>
                        </div>
                        <div class="left_item">
                            <div class="left_item-ttl"><i class="ico ico_circle"></i>会社・店舗のアピール</div>
                            <div class="left_item-list">
                                <ul class="ul">
                                    <li>サイトが会社の所有であることを証明し、離脱を避ける</li>
                                </ul>
                            </div>
                        </div>
                        <span>…など。</span></div>
                </div>
                <div class="right about-img">
                    <img src="../../img/functions/img_ssl_opportunity.png" alt="機会損失の回避・SSLの必要性のイメージ">
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 class="section_ttl">常時SSL化の必要性とは？</h3>
            <div class="section_body clearfix">
                <div class="left">
                    <p>常時SSL化とは、特定のページだけでなくウェブサイト全体のページをSSL化することです。</p>
                    <p>SSLを導入するメリットとして、セキュリティ強化に加え、SEOに有利に働きやすいと言われていることや、サイト表示の高速化に欠かせない規格「HTTP/2」に対応できるといったことが挙げられます。</p>
                    <p>これらのメリットを特定のページだけでなくサイト全体に適用することで、ユーザーにとって安全かつ快適に利用できるサイトを運用できるため、常時SSL化の必要性はますます高まっています。</p>
                </div>
                <div class="right about-img">
                    <img src="../../img/functions/img_ssl_always.png" alt="常時SSL化の必要性のイメージ">
                </div>
            </div>

            <aside class="msg msg_notice clearfix">
                <div class="ssl-tips">COLUMN</div>
                <div class="tips-desc">
                    <div class="msg_ttl">常時SSL化していないサイトは警告表示される？</div>
                    <div class="msg_body">
                        <p>2018年7月にリリースされたChromeのバージョン『Chrome 68』以降では、Google社がこれまで強く推奨してきたHTTPSの導入を促すため、すべての HTTP サイト（SSL化に対応していないサイト）に「保護されていません」と警告が表示されるようになりました。<br>ウェブブラウザ世界シェア1位のchromeがこうした対策を施すため、まだHTTPSを導入されていないサイトはこの機会に常時SSL化に対応することを推奨いたします。</p>
                    </div>
                </div>
            </aside>

        </section>
        <!-- /.section -->

        <section class="section mb30">
            <h3 class="section_ttl">用途に応じて選べるSSL証明書ブランド</h3>
            <div class="section_body">
                <p>エックスサーバーでは現在、「クラウドSSL」などリーズナブルなSSL証明書発行に対応、また信頼性と安全性を備えた「企業認証SSL」「EV SSL」に対応するなどお客様の用途に応じてお選び頂けます。</p>
                <ul class="ul about-list">
                    <li>「クラウドSSL」サイトシールにも対応した、コストパフォーマンスの高いドメイン認証SSL！個人でご利用の方にもオススメ！</li>
                    <li>「企業認証SSL」は、企業・法人サイトに最適！企業サイトや、重要な個人情報を入力するフォームなどにオススメ！</li>
                    <li>「EV SSL」は、世界標準の厳格な審査を経て発行するもっとも高い信頼性の証明書です！</li>
                </ul>
            </div>
        </section>
        <!-- /.section -->

        <p class="conduct-btn"><a href="../service_ssl.php" class="btn btn_black-l">独自SSL紹介ページを見る</a></p>
        
    </section>
    <!-- /.main -->

    <div class="sub">
        <?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->

</div>
    <!-- /.contents -->

    <?php include("../../footer.php"); ?>

</div>
    <!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>