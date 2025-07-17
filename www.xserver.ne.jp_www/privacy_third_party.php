<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<link href="<?php print_fileURL("css/contents/info.css"); ?>" rel="stylesheet">

<title>外国への第三者提供一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="外国への第三者提供一覧について。">

</head>

<body id="pid-info">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <h2 class="ttl">外国への第三者提供一覧</h2>
        
        <?php include("topicpath.php"); ?>

        <section class="section">
            <p class="mt20">
                提供される外国の名称、当該外国における個人情報保護に関する制度および提供先である第三者が講ずる個人情報保護のための措置に関する情報は 以下の通りです。
            </p>
            <h3 class="doc__ttl fontBold mt30">■ドメイン取得サービスにお申し込みの場合</h3>
            <div class="section__body mt20">
                <p class="mt20">提供先：enom（国名：アメリカ）</p>
                <ul class="ul">
                    <li>
                        当該外国における個人情報保護に関する制度<br>
                        <a href="https://www.ppc.go.jp/files/pdf/USA_report.pdf" target="_blank">https://www.ppc.go.jp/files/pdf/USA_report.pdf</a><i class="ico ico_new-window"></i>
                    </li>
                    <li class="mt10">
                        提供先である第三者が講ずる個人情報保護のための措置に関する情報<br>
                        提供先の個人データの取り扱いについては、国内の個人情報取扱事業者が求められる措置と同水準の措置を講じていることを確認いたしました。
                    </li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h3 class="doc__ttl fontBold">■SSLサービスにお申し込みの場合</h3>
            <div class="section__body mt20">
                <p class="mt20">提供先：Let's Encrypt　　Internet Security Research Group（国名：アメリカ）</p>
                <ul class="ul">
                    <li>
                        当該外国における個人情報保護に関する制度<br>
                        <a href="https://www.ppc.go.jp/files/pdf/USA_report.pdf" target="_blank">https://www.ppc.go.jp/files/pdf/USA_report.pdf</a><i class="ico ico_new-window"></i>
                    </li>
                    <li class="mt10">
                        提供先である第三者が講ずる個人情報保護のための措置に関する情報<br>
                        提供先の個人データの取り扱いについては、国内の個人情報取扱事業者が求められる措置と同水準の措置を講じていることを確認いたしました。
                    </li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h3 class="doc__ttl fontBold">■お取引に海外のクレジットカードを利用する場合</h3>
            <div class="section__body mt20">
                <p class="mt20">提供先：PayPal Pte.Ltd.（国名：シンガポール）</p>
                <ul class="ul">
                    <li>
                        当該外国における個人情報保護に関する制度<br>
                        <a href="https://www.ppc.go.jp/files/pdf/singapore_report.pdf" target="_blank">https://www.ppc.go.jp/files/pdf/singapore_report.pdf</a><i class="ico ico_new-window"></i>
                    </li>
                    <li class="mt10">
                        提供先である第三者が講ずる個人情報保護のための措置に関する情報<br>
                        提供先の個人データの取り扱いについては、国内の個人情報取扱事業者が求められる措置と同水準の措置を講じていることを確認いたしました。
                    </li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h3 class="doc__ttl fontBold">■SMS認証／SMS通知を利用されるお客様</h3>
            <div class="section__body mt20">
                <p class="mt20">提供先：Twilio Inc.（国名：アメリカ）</p>
                <ul class="ul">
                    <li>
                        当該外国における個人情報保護に関する制度<br>
                        <a href="https://www.ppc.go.jp/files/pdf/USA_report.pdf" target="_blank">https://www.ppc.go.jp/files/pdf/USA_report.pdf</a><i class="ico ico_new-window"></i>
                    </li>
                    <li class="mt10">
                        提供先である第三者が講ずる個人情報保護のための措置に関する情報<br>
                        提供先の個人データの取り扱いについては、国内の個人情報取扱事業者が求められる措置とAPECと同水準の措置を講じていることを確認いたしました。
                    </li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h3 class="doc__ttl fontBold">■当社からのアンケートをご回答いただくお客様</h3>
            <div class="section__body mt20">
                <p class="mt20">提供先：SurveyMonkey Europe UC（国名：アイスランド）</p>
                <ul class="ul">
                    <li>
                        当該外国における個人情報保護に関する制度<br>
                        EU域内の個人データ保護を規定する法：「GDPR（General Data Protection Regulation：一般データ保護規則）」
                    </li>
                    <li class="mt10">
                        提供先である第三者が講ずる個人情報保護のための措置に関する情報<br>
                        提供先の個人データの取り扱いについては、国内の個人情報取扱事業者が求められる措置と同水準以上の措置を講じていることを確認いたしました。
                    </li>
                </ul>
            </div>
        </section>
        
    </section>



        <div class="sub">
<?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("bottom.php"); ?>