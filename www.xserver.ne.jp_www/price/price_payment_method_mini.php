<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>ミニストップでのお支払い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用料金をミニストップで支払うための手順です。">

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
            
                <h3 class="sub-ttl pb10">ミニストップ<i class="imgico imgico_ministop ml10"></i></h3>
                
                <p>お客様の「XServerアカウント」よりお支払い手続きを行われましたサーバーや独自ドメインのご利用料金は、お近くのミニストップ店頭で現金にてお支払いいただけます。</p>
                <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="https://map.ministop.co.jp/" target="_blank" rel="nofollow">ミニストップ店舗検索<i class="ico ico_new-window"></i></a></p>
                
                <div class="flow">
                    <section class="flow_item mb5">
						<h4 class="flow_ttl">XServerアカウントにログインし、上部メニューの「料金支払い」を選択する</h4>
						<p class="mb0"><img class="flex mt10" src="../img/price/img_payment_menu.png?date=20230131" alt="料金支払いをクリックしているスクリーンショット"></p>
						<p class="note">※XServerアカウント（従来デザイン）をご利用の場合は、管理パネルにログイン後、「料金のお支払い/請求書発行」を選択します。</p>
					</section>
                    <section class="flow_item"><h4 class="flow_ttl">支払い方法の選択を「ファミリーマート / ローソン / ミニストップ / セイコーマート」にする</h4></section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お支払い受付番号（6桁）をメモする</h4>
                        <p>画面上（もしくはメール）にて、お支払い受付番号を表示いたします。</p>
                        <p class="note">※ミニストップ店頭でお支払いする際に必要となります。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お近くのミニストップへ</h4>
                        <p>ミニストップ店内に設置されているLoppi （情報端末）を用いて、レジで支払う際に必要な「申込券」を入手してください。</p>
                        <p>操作はカンタン、画面に従ってタッチパネルを押すだけです。詳しくは下記をご覧下さい。</p>
                        <p><img class="flex" src="../img/price/img_payment_lawson_01.png" alt=""></p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">レジでのお支払い</h4>
                        <p>「申込券」をレジにご提示いただき、代金をお支払いください。お支払いは「現金」となります。</p>
                        <p class="note">※「申込券」の有効時間は、30分間となっております。お早めにお支払いください。</p>
                        <p><img class="img" src="../img/price/img_payment_lawson_02.png" alt=""></p>
                        <p>
                            お支払い後、「インターネット受付領収書」をお渡しいたします。<br>
                            実際に代金をお支払いされたことを証明する書類ですので、大切に保管してください。
                        </p>
                        <p><img class="img" src="../img/price/img_payment_lawson_03.png" alt=""></p>
                        <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                        <p>お支払いの確認後、弊社でサービスの手続きをいたします。</p>
                    </section>
                </div>
                <!-- /.flow -->
                
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