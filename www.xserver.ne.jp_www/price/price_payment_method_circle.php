<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>サークルＫサンクスでのお支払い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用料金をサークルＫサンクスで支払うための手順です。">

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
            
                <h3 class="sub-ttl pb10">サークルＫサンクス<i class="imgico imgico_circlek ml10"></i></h3>
                
                <p>お客様の「XServerアカウント」よりお支払い手続きを行われましたサーバーや独自ドメインのご利用料金は、お近くのサークルＫサンクス店頭で現金にてお支払いいただけます。</p>
                <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="http://as.chizumaru.com/200080/top?account=200080&accmd=0" target="_blank" rel="nofollow">サークルＫサンクス店舗検索<i class="ico ico_new-window"></i></a></p>
                
                <div class="flow">
                    <section class="flow_item"><h4 class="flow_ttl">XServerアカウントにログイン後、「料金のお支払い/請求書発行」を選択する</h4></section>
                    <section class="flow_item"><h4 class="flow_ttl">支払い方法の選択を「コンビニ払い（サークルＫサンクス）」にする</h4></section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お支払い受付メール受信</h4>
                        <p>
                            コンビニでのお支払い時、「オンライン決済番号」が必要となります。<br>
                            メモを取るか、メール画面を印刷してください。
                        </p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お近くのサークルＫサンクスへ</h4>
                        <p>「オンライン決済番号」のメモ、もしくはメール画面を印刷したものを持参してください。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">Kステーション端末での受付票の発券</h4>
                        <p>サークルＫまたはサンクス店頭に設置されているカルワザステーション(情報端末）を用いて、レジで支払う際に必要な「受付票」を入手してください。</p>
                        <p>操作はカンタン、画面に従ってタッチパネルを押すだけです。詳しくは下記をご覧下さい。</p>
                        <p><img class="flex" src="../img/price/img_payment_circlek.png" alt=""></p>
                        <p class="note mb0">※サークルＫサンクス店舗での手続きに関する不明点についてはサークルＫサンクス様にお問合わせください。</p>
                        <p class="note">※上の図はカルワザステーションのイメージです。実際の表示とは異なることがあります。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">レジでのお支払い</h4>
                        <p>「受付票」をレジにご提示いただき、代金をお支払いください。お支払いは「現金」となります。</p>
                        <p class="note mb0">※「受付票」の有効時間は、30分間となっております。お早めにお支払いください。</p>
                        <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
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