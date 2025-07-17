<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>お支払い方法一覧 - 料金 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーへの料金のお支払いに利用できるお支払い方法の一覧です。エックスサーバーでは「銀行振込」「クレジットカード決済」「コンビニ決済」「ペイジー」でのお支払いに対応しています。">

</head>

<body id="pid-price">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-price"><i class="ico ico_tag"></i>料金</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">お支払い方法一覧</h3>
                
                <p>弊社では、<b>クレジットカード・銀行振込・ペイジー・あと払い（ペイディ）・コンビニ払い・プリペイド決済</b>がご利用いただけます。</p>
                <p class="mb40"><a class="btn btn_gray" href="price_payment_method_receipt.php">受領書の発行について<i class="ico ico_chevron-right"></i></a></p>
                
                <section class="section">
                    <h4 class="section_ttl">クレジットカード</h4>
                    <div class="section_body">
                        <ul class="payment-list clearfix">
                        	<li class="payment-list_item"><a href="price_payment_method_credit.php"><img class="img hover" src="../img/price/img_logo_visa.png" alt="VISA"></a></li>
                        	<li class="payment-list_item"><a href="price_payment_method_credit.php"><img class="img hover" src="../img/price/img_logo_mastercard.png" alt="Master"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_credit.php"><img class="img hover" src="../img/price/img_logo_jcb.png" alt="JCB"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_credit.php"><img class="img hover" src="../img/price/img_logo_amex.png" alt="AMERICAN_EXPRESS"></a></li>
                        </ul>
                        <p class="note mb0">※3Dセキュア2.0に対応していないクレジットカードはご利用いただけません。</p>
                        <p class="note mb0">※デビットカード、プリペイドカードについてはVISA、Mastercard、JCBがご利用いただけます。</p>
                        <p class="note mb0">※デビットカード、プリペイドカードについてはカード発行会社によってはご利用いただけない場合がございます。その場合には、その他のお支払い方法をご利用ください。</p>
                        <p class="note">※JCB発行のプレモカードはご利用いただけません。</p>
                        <section class="block">
                            <h5 id="3dsecure" class="block_ttl">3Dセキュア2.0について</h5>
                            <p>3Dセキュア2.0は、クレジットカード会社が提供する、決済をより安全に行うための本人認証サービスです。本人認証画面が表示された場合は画面の案内に従い本人確認の実施をお願いいたします。<br/>
                                詳細は各クレジットカード会社のページをご確認ください。</p>
                            <ul class="ul">
                                <li><a href="https://www.visa.co.jp/pay-with-visa/security/secure-online-shopping.html" target="_blank" rel="nofollow">VISA</a></li>
                                <li><a href="https://www.mastercard.co.jp/ja-jp/personal/features-benefits/id-check/issuers.html" target="_blank" rel="nofollow">Mastercard</a></li>
                                <li><a href="https://www.jcb.co.jp/service/safe-secure/activity/jsecure/index.html" target="_blank" rel="nofollow">JCB</a></li>
                                <li><a href="https://www.americanexpress.com/jp/security/safekey.html" target="_blank" rel="nofollow">American Express</a></li>
                            </ul>
                        </section>

                        <div class="campaign-jcb">
                            <a href="https://www.jcb-card.jp/nyukaicphoujin/?13292823167500&ad_id=com_etc_hjn201504015209shcp" target="_blank" rel="nofollow"><img src="../img/price/jcb_cp_banner.jpg" alt=""></a>
                        </div>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">銀行振込</h4>
                    <div class="section_body">
                        <p class="note mb0">※三井住友銀行以外からお振込みをされる際は、 振込元銀行の仕様により入金反映が翌営業日となる場合があります。</p>
						<p class="note">※海外からの送金は受付けておりませんので、あらかじめご了承ください。</p>
                        <ul class="payment-list clearfix">
                            <li class="payment-list_item"><a href="price_payment_method_bank.php"><img class="img hover" src="../img/price/img_logo_smbc.png" alt="三井住友銀行"></a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">ペイジー</h4>
                    <div class="section_body">
                        <ul class="payment-list clearfix">
                        	<li class="payment-list_item"><a href="price_payment_method_pay_easy.php"><img class="img hover" src="../img/price/img_logo_payeasy.png" alt="ペイジー"></a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">あと払い（ペイディ）</h4>
                    <div class="section_body">
                        <ul class="payment-list clearfix">
                            <li class="payment-list_item"><a href="price_payment_method_paidy.php"><img class="img hover" src="../img/price/img_logo_paidy.png" alt="あと払い（ペイディ）"></a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">コンビニ払い</h4>
                    <div class="section_body">
                        <ul class="payment-list clearfix">
                        	<li class="payment-list_item"><a href="price_payment_method_seven.php"><img class="img hover" src="../img/price/img_logo_seveneleven.png" alt="セブンイレブン"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_lawson.php"><img class="img hover" src="../img/price/img_logo_lawson.png" alt="ローソン"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_daily.php"><img class="img hover" src="../img/price/img_logo_dailyyamazaki.png" alt="デイリーヤマザキ"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_mini.php"><img class="img hover" src="../img/price/img_logo_ministop.png" alt="ミニストップ"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_family.php"><img class="img hover" src="../img/price/img_logo_familymart.png" alt="ファミリーマート"></a></li>
                            <li class="payment-list_item"><a href="price_payment_method_seicomart.php"><img class="img hover" src="../img/price/img_logo_seicomart.png" alt="セイコーマート"></a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl">プリペイド決済</h4>
                    <div class="section_body">
                        <p><a class="btn btn_gray" href="../price/price_payment_method_prepaid.php">プリペイド決済</a></p>
                    </div>
                </section>
                <!-- /.section -->
                
            </section>
            <!-- /.col-main -->
            
            <aside class="col-side">
<?php include("sidemenu.php"); ?>
            </aside>
            <!-- /.col-side -->
        
        </div>
        <!-- /.clearfix -->
        
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