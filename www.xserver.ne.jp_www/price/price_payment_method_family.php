<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>ファミリーマートでのお支払い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用料金をファミリーマートで支払うための手順です。">


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
            
                <h3 class="sub-ttl pb10">ファミリーマート<i class="imgico imgico_familymart ml10"></i></h3>
                
                <p>お客様の「XServerアカウント」よりお支払い手続きを行われましたサーバーや独自ドメインのご利用料金は、お近くのファミリーマート店頭で現金にてお支払いいただけます。</p>
                <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="http://www.family.co.jp/tenpo/" target="_blank" rel="nofollow">ファミリーマート店舗検索<i class="ico ico_new-window"></i></a></p>
                
                <div class="flow">
                    <section class="flow_item mb5">
						<h4 class="flow_ttl">XServerアカウントにログインし、上部メニューの「料金支払い」を選択する</h4>
						<p class="mb0"><img class="flex mt10" src="../img/price/img_payment_menu.png?date=20230131" alt="料金支払いをクリックしているスクリーンショット"></p>
						<p class="note">※XServerアカウント（従来デザイン）をご利用の場合は、管理パネルにログイン後、「料金のお支払い/請求書発行」を選択します。</p>
					</section>
                    <section class="flow_item"><h4 class="flow_ttl">支払い方法の選択を「ファミリーマート / ローソン / ミニストップ / セイコーマート」にする</h4></section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お支払い受付番号(6桁)をメモする</h4>
                        <p>画面上（もしくはメール）にて、お支払い受付番号を表示いたします。</p>
                        <p class="note">※ファミリーマート店頭でお支払いする際に必要となります。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お近くのファミリーマートへ</h4>
                        <p>ファミリーマート店内に設置されているマルチコピー機にて、レジで支払う際に必要な「Mコピーサービス申込券」を発行してください。</p>
                        <p>マルチコピー機の操作方法は以下をご確認ください。</p>
                        <p><img class="flex" src="../img/price/img_payment_familymart_01.png?date=20240217" alt="マルチコピー機操作イメージ"></p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">レジでのお支払い</h4>
                        <p>「Mコピーサービス申込券」をレジでご提示いただき、代金をお支払いください。お支払いは「現金」のみです。</p>
                        <p class="note">※「Mコピーサービス申込券」の有効時間は、発行から30分間です。お早めにお支払いください。</p>
                        <p>お支払い後、レシート（受領書）をお受け取りください。<br>レジにて発行されたレシート（受領書）が領収書の代わりとなります。</p>
                        <p>以上でお支払いは完了です。<br>当サービスにてお支払いの確認が取れましたら、登録メールアドレス宛てにメールでご案内をお送りいたします。</p>
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