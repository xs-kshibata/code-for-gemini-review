<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>セブンイレブンでのお支払い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用料金をセブンイレブンで支払うための手順です。">

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
            
                <h3 class="sub-ttl pb10">セブンイレブン<i class="imgico imgico_seveneleven ml10"></i></h3>
                
                <p>お客様の「XServerアカウント」よりお支払い手続きを行われましたサーバーや独自ドメインのご利用料金は、お近くのセブンイレブン店頭で現金にてお支払いいただけます。</p>
                <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="http://www.sej.co.jp/shop/index.html" target="_blank" rel="nofollow">セブンイレブン店舗検索<i class="ico ico_new-window"></i></a></p>
                
                <div class="flow">
                    <section class="flow_item mb5">
						<h4 class="flow_ttl">XServerアカウントにログインし、上部メニューの「料金支払い」を選択する</h4>
						<p class="mb0"><img class="flex mt10" src="../img/price/img_payment_menu.png?date=20230131" alt="料金支払いをクリックしているスクリーンショット"></p>
						<p class="note">※XServerアカウント（従来デザイン）をご利用の場合は、管理パネルにログイン後、「料金のお支払い/請求書発行」を選択します。</p>
					</section>
                    <section class="flow_item"><h4 class="flow_ttl">支払い方法の選択を「セブンイレブン」にする</h4></section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">払込票番号(13桁)をメモまたは払込依頼票を印刷する</h4>
                        <p>画面上にて、「払込票番号」または「払込依頼票のURL」を表示いたします。</p>
                        <p><img class="img" src="../img/price/img_payment_seveneleven.png" alt=""></p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">お近くのセブンイレブンへ</h4>
                        <p>「払込票番号」のメモまたはプリントアウトした「払込依頼票」を持参してください。</p>
                    </section>
                    <section class="flow_item">
                        <h4 class="flow_ttl">レジでのお支払い</h4>
                        <p>「払込票番号」もしくはプリントアウトした「払込依頼票」をレジにご提示いただき、店員に「インターネット代金の支払い」とお伝え下さい。なお、お支払いは「現金」となります。</p>
                        <p class="note">※コンビニ店頭での変更・払戻しはできませんので、予めご了承ください。</p>
                        <p>
                            お支払い後、<b>「インターネットショッピング払込領収書」</b>をお渡しいたします。実際に代金をお支払いされたことを証明する書類ですので、大切に保管してください。<br>
                            お支払いの確認後、弊社でサービスの手続きをいたします。
                        </p>
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