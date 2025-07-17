<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>受領書発行について - 料金 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーへお支払いいただいたご利用料金に関する受領書の発行についてのご案内です。">

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
            
                <h3 class="sub-ttl">受領書発行について</h3>
                
                <p>
                    XServerアカウントよりPDFファイル形式でダウンロードすることが可能です。<br>
					詳細は、マニュアル「<a href="../manual/man_order_pay_bill.php#link-a02">受領書の発行について</a>」をご参照ください。<br>
					受領書はPDFファイル形式での発行のみ承っており、書面による発行はいたしておりません。
				</p>
                
                <section class="block">
                    <h4 class="block_ttl">領収書について</h4>
                    <div class="block_body">
                        <p>
                            各カード会社の利用明細書、各銀行での振込の控え（振込明細）、各コンビニより発行される領収書（レシート）が、それぞれ正式な領収書としてご利用いただけます。弊社での領収書発行は、領収書の二重発行になるため承っておりません。なにとぞご了承ください。
                        </p>
                        <p class="note">※弊社での領収書発行は、2016年12月14日を以って終了いたしました。</p>
                    </div>
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