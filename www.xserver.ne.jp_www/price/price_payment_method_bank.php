<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>銀行振込でのお支払い方法 - 料金 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">銀行振込</h3>
                
                <p>
                    以下の銀行がご利用頂けます。一般銀行からも振込可能です。<br>
                    大変申し訳ありませんが、振込手数料はご負担願います。
                </p>
				<p class="note mb0">※三井住友銀行以外からお振込みをされる際は、 振込元銀行の仕様により入金反映が翌営業日となる場合があります。</p>
                <p class="note mb40">※海外からの送金は受付けておりませんので、あらかじめご了承ください。</p>

                <figure class="mb40"><img class="img" src="../img/price/img_logo_smbc.png" alt="三井住友銀行"></figure>
                
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