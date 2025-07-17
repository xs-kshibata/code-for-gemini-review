<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>デイリーヤマザキでのお支払い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用料金をデイリーヤマザキで支払うための手順です。">

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
            
                <h3 class="sub-ttl pb10">デイリーヤマザキ<i class="imgico imgico_dailyyamazaki ml10"></i></h3>
                
                <p>お客様の「XServerアカウント」よりお支払い手続きを行われましたサーバーや独自ドメインのご利用料金は、お近くのデイリーヤマザキまたはデイリーストア ヤマザキ店頭で現金にてお支払いいただけます。</p>
                <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="https://www.areamarker.com/daily-yamazaki/map" target="_blank" rel="nofollow">デイリーヤマザキ店舗検索<i class="ico ico_new-window"></i></a></p>
                
                <div class="flow">
                    <section class="flow_item mb5">
						<h4 class="flow_ttl">XServerアカウントにログインし、上部メニューの「料金支払い」を選択する</h4>
						<p class="mb0"><img class="flex mt10" src="../img/price/img_payment_menu.png?date=20230131" alt="料金支払いをクリックしているスクリーンショット"></p>
						<p class="note">※XServerアカウント（従来デザイン）をご利用の場合は、管理パネルにログイン後、「料金のお支払い/請求書発行」を選択します。</p>
					</section>
                    <section class="flow_item"><h4 class="flow_ttl">支払い方法の選択を「デイリーヤマザキ」にする</h4></section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">オンライン決済番号をメモする、または決済画面を印刷する</h4>
                        <p>
                            画面上にて、「オンライン決済番号」または「決済画面」を表示いたします。<br>
                            もしくは、画面上の指示に従い、お手持ちの携帯電話に、支払い方法をご案内するメールを送信してください。
                        </p>
                        <p class="note">※「オンライン決済番号」は次画面に表示されます。</p>
                        <p><img class="flex" src="../img/price/img_payment_dailyyamazaki_01.png" alt=""></p>
                        <p>(次画面)</p>
                        <p><img class="flex" src="../img/price/img_payment_dailyyamazaki_02.png" alt=""></p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お近くのデイリーヤマザキへ</h4>
                        <p>「オンライン決済番号」のメモ、プリントアウトした「決済画面」またはお持ちの携帯電話に転送したメールを持参してください。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">レジでのお支払い</h4>
                        <p>「オンライン決済番号」、プリントアウトした「決済画面」、メールをレジにご提示いただき、店員に「オンライン決済」とお伝え下さい。</p>
                        <p>レジのお客様側の画面に、「オンライン決済番号」を入力（タッチパネル）し「確定ボタン」をタッチしてください。</p>
                        <p class="note mb0">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                        <p class="note mb0">※お支払い後、「オンライン決済領収書」をお渡しいたします。</p>
                        <p class="note">※領収書は、実際に代金をお支払いされた証明となりますので、お客様にて大切に保管してください。</p>
                        <p><img class="flex" src="../img/price/img_payment_dailyyamazaki_03.png" alt=""></p>
                        <p><img class="flex" src="../img/price/img_payment_dailyyamazaki_04.png" alt=""></p>
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