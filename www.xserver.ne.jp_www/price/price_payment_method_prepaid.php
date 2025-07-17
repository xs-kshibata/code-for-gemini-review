<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>プリペイドでのお支払い方法 - 料金 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">プリペイド決済</h3>
                
                <p>銀行振り込みやコンビニ払いなどでプリペイドをチャージし、決済することができます。</p>
                
                <section class="section">
                    <h4 class="section_ttl">プリペイドのチャージ方法</h4>
                    <div class="section_body">                        
                        <p>下記の方法でチャージすることができます。</p>
                        <ul class="ul">
                        <li>クレジットカード払い</li>
                        <li>あと払い（Paidy）</li>
                        <li>コンビニ決済</li>
                        <li>銀行振込（支払手数料は無料ですが、振込手数料はお客様負担となります）</li>
                        <li>ペイジー決済</li>
                        </ul>
                        <p><a class="btn btn_gray" href="../manual/man_order_pay_method_prepaid.php">お支払い手順(プリペイド決済)</a></p>
                    </div>             
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl">プリペイドのチャージ・残高の確認手順</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント<i class="ico ico_new-window"></i></a>へログインし、上部メニュー右端のXServerアカウントメニューから「プリペイド管理」よりプリペイドのチャージと残高を確認することが可能です。</p>
                        <p><img class="img" src="../img/price/img_payment_method_prepaid_01.png" alt="プリペイド管理をクリック"></p>

                        <p>以下の赤枠箇所にて現在の残高をご確認していただけます。</p>
                        <p><img class="img" src="../img/price/img_payment_method_prepaid_02.png" alt="残高確認"></p>

                        <p>入金方法については以下の手順をご参照ください。</p>

                        <div class="flow">
                            <section class="flow_item mb5">
                                <h4 class="flow_ttl">入金する金額を指定</h4>
                                <p>入力ボックスにチャージする金額を入力してください。</p>
                                <p class="mb0"><img class="flex mt10" src="../img/price/img_payment_method_prepaid_03.png" alt="入金する金額を指定"></p>
                                <aside class="border border_yellow">
                                    <h4 class="bright-yellow mb10">入金金額について</h4>
                                    <p>1回の入金あたり500円から〜300万円まで入金することができます。</p>
                                </aside>
                            </section>
                            <section class="flow_item">
                                <h4 class="flow_ttl">チャージ額を確認</h4>
                                <p>チャージする額に間違いがないかご確認の上、「お支払いへ進む」ボタンをクリックしてください。</p>
                                <p><img class="img" src="../img/price/img_payment_method_prepaid_04.png" alt="チャージ額を確認"></p>
                            </section>
                            <section class="flow_item">
                                <h4 class="flow_ttl">チャージ方法を選択</h4>
                                <p>ご希望の入金方法を選択して、「決済画面へ進む」ボタンをクリックしてください。</p>
                                <p><img class="img" src="../img/price/img_payment_method_prepaid_05.png" alt="チャージ方法を選択"></p>
                                <p>各決済方法の指定の手順に従って必要事項を入力してください。</p>
                            </section>
                            <section class="flow_item">
                                <h4 class="flow_ttl">完了</h4>
                                <p>各決済方法で必要事項を入力していただくと下記のような完了画面に遷移します。</p>
                                <p><img class="img" src="../img/price/img_payment_method_prepaid_06.png" alt="チャージ方法を選択"></p>
                                <p>「プリペイド管理」メニューで残高をご確認ください。</p>
                            </section>
                        </div>
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