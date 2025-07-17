<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>あと払い（ペイディ）でのお支払い方法 - 料金 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">あと払い（ペイディ）</h3>
                
                <p>決済サービスPaidyが提供する「あと払い（ペイディ）」を利用できます。</p>
                
                <section class="section">
                    <h4 class="section_ttl">あと払い（ペイディ）について</h4>
                    <div class="section_body">                        
                        <p>メールアドレスと携帯電話番号の登録だけで、その場ですぐに決済が可能です。</p>
                        <p><img class="img" src="../img/manual/img_logo_paidy.png" alt="あと払い（ペイディ）"></p>
                        <p>あと払い（ペイディ）について詳しくは、下記のURLをご参照ください。<br>https://paidy.com/</p>
						<p>あと払い（ペイディ）に関するお問い合わせは、下記URLよりお願いします。<br>https://support.paidy.com/hc/ja</p>
                    </div>
                    
                    <h4 class="section_ttl">あと払い（ペイディ）のお支払い方法</h4>
                    <div class="section_body">                        
                        <p>ご利用の翌月5日を目安に、PaidyよりEメール・SMS（ショートメッセージ）にてご請求内容の詳細をお知らせします。</p>
                        <section class="block">
                            <h4 class="block_ttl">手数料について</h4>
                            <div class="block_body">
                                <p>
                                    お支払い方法によって、支払手数料が異なります。
                                </p>

                                <ul class="ul">
                                    <li>口座振替（手数料：無料）</li>
                                    <li>コンビニ（手数料：最大390円（税込））</li>
                                    <li>銀行振込（支払手数料は無料ですが、振込手数料はお客様負担となります）</li>
                                </ul>
                            </div>
                        </section>

                        <section class="block">
                            <h4 class="block_ttl">支払い期限について</h4>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>コンビニ払い及び銀行振込の場合…ご利用の翌月27日までにお支払いください。</li>
                                    <li>口座振替の場合…ご利用の翌月27日に引き落しとなります。</li>
                                </ul>

                                <p class="note">
                                    ※金融機関休業日の場合は、翌営業日
                                </p>
                            </div>
                        </section>



                    </div>             
                </section>
                <!-- /.section -->
                
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