<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お支払い履歴 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜これまでのお支払い履歴を確認するための手順について記載しています。">


</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">お支払い履歴</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">お支払い履歴</a>
                    <ol>
                        <li><a href="#link-a01">1.「料金支払い」をクリック</a></li>
                        <li><a href="#link-a02">2.「お支払い履歴／受領書発行」をクリック</a></li>
						<li><a href="#link-a03">3.「詳細」をクリック</a></li>
                    </ol>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">お支払い履歴</h4>
                    <div class="section_body">
                        <p>過去のお支払い履歴を確認することができます。</p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.「料金支払い」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.「お支払い履歴／受領書発行」をクリック</h6>
                                <div class="box_body">
                                    <p>「お支払い履歴／受領書発行」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_bill_4.png?date=20230130" alt="お支払い履歴／受領書発行をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.「詳細」をクリック</h6>
                                <div class="box_body">
                                    <p>お支払い内容を確認したい金額の「詳細」をクリックすると、履歴を確認できます。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_history_3.png?date=20210610" alt="詳細をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                
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