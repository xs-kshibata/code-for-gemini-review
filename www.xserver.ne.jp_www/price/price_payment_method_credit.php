<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>クレジットカードでのお支払い方法 - 料金 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

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
            
                <h3 class="sub-ttl">クレジットカード</h3>
				
                <p class="mb40">下記のクレジットカードがお使い頂けます。手数料は必要ありません。</p>
                
                <figure class="payment-list clearfix mb10">
                    <figure class="payment-list_item"><img class="img" src="../img/price/img_logo_visa.png" alt="VISA"></figure>
                    <figure class="payment-list_item"><img class="img" src="../img/price/img_logo_mastercard.png" alt="Master"></figure>
                    <figure class="payment-list_item"><img class="img" src="../img/price/img_logo_jcb.png" alt="JCB"></figure>
                    <figure class="payment-list_item"><img class="img" src="../img/price/img_logo_amex.png" alt="AMERICAN_EXPRESS"></figure>
                </figure>
                <p class="note mb0">※3Dセキュア2.0に対応していないクレジットカードはご利用いただけません。</p>
                <p class="note mb0">※デビットカード、プリペイドカードについてはVISA、Mastercard、JCBがご利用いただけます。</p>
                <p class="note mb0">※デビットカード、プリペイドカードについてはカード発行会社によってはご利用いただけない場合がございます。その場合には、その他のお支払い方法をご利用ください。</p>
                <p class="note mb40">※JCB発行のプレモカードはご利用いただけません。</p>
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

                <p class="tac m0"><a href="price_payment_method.php" class="btn btn_blue">お支払い方法一覧ページ<i class="ico ico_refresh"></i></a></p>
                
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