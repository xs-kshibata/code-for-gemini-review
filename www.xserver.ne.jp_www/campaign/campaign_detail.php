<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/info.css"); ?>" rel="stylesheet">

<title>サイトマップ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

</head>

<body id="pid-info">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <section class="campaign">
            <h2 class="campaign_visual"><img src="../img/common/bnr_campaign_sample.png" alt="クイックSSL初期費用無料キャンペーン 2012/11/30 18:00まで"></h2>
            
            <p class="campaign_btn">
                <a href="../price/price_ssl.php" class="btn btn_orange-l">お申し込みはこちらから<i class="ico ico_pencil"></i></a>
            </p>
            
            <table class="campaign_table">
                <tr>
                	<th>キャンペーン対象</th>
                	<td>
                        <div class="campaign_table_inner">
                            <p class="font-l font-bold">キャンペーン期間中にお申し込みいただいた「ジオトラスト・クイックSSLプレミアム」</p>
                        </div>
                	</td>
                </tr>
                <tr>
                	<th>キャンペーン期間</th>
                	<td>
                        <div class="campaign_table_inner">
                            <p>
                                2012年9月11日(火) 12:00 〜 2012年11月30日(金)18:00まで！
                            </p>
                        </div>
                	</td>
                </tr>
                <tr>
                	<th>キャンペーン内容</th>
                	<td>
                        <div class="campaign_table_inner">
                            <p>
                                <strong class="font-l bright-yellow">ジオトラスト・クイックSSLプレミアムの初期費用が無料に！</strong><br>
                                クイックSSLプレミアム初年度ご利用料金：36,250円 → 21,000円（15,250円オフ！）
                            </p>
                        </div>
                	</td>
                </tr>
                <tr>
                	<th>ご注意</th>
                	<td>
                        <div class="campaign_table_inner">
                            <p class="note">※キャンペーン期間中にお申し込みいただいたSSL証明書が対象となります。<br>期間前にお申し込みいただいたSSL証明書の場合、期間中にご入金いただきましてもキャンペーン適用外となりますのでご注意ください。</p>
                            <p class="note">※SSL証明書のご利用料金について、詳しくはこちらをご確認ください。</p>
                        </div>
                	</td>
                </tr>
            </table>
            
            <p class="campaign_btn">
                <a class="btn btn_orange-l" href="../price/price_ssl.php">お申し込みはこちらから<i class="ico ico_pencil"></i></a>
            </p>
            
        </section>
        <!-- /.campaign -->
        
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