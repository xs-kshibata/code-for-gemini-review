<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>ペイジーでのお支払い方法 - 料金 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">ペイジー</h3>
                
                <p>公共料金や年金の支払い方法としても用いられているペイジーを利用できます。手数料は必要ありません。対応金融機関は下記のリンクをご覧ください。</p>
                <p class="mb40"><a class="btn btn_gray" href="https://www.pay-easy.jp/where/" target="_blank" rel="nofollow">ペイジー利用可能金融機関一覧<i class="ico ico_new-window"></i></a></p>
                
                <figure class="mb40"><img class="img" src="../img/price/img_logo_payeasy.png" alt="ペイジー"></figure>
                
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