<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お支払い手順（クレジットカード） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご利用料金をクレジットカードで支払うための手順について記載しています。">

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
            
                <h3 class="sub-ttl">クレジットカード決済</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-b">クレジットカードでのお支払いについて</a></li>
                    <li><a href="#link-a">クレジットカードでのお支払い手順</a>
                        <ol>
                            <li><a href="#link-a01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-a02">2.お支払いサービスを選択</a></li>
                            <li><a href="#link-a03">3.クレジットカードを選択</a></li>
                            <li><a href="#link-a04">4.クレジットカード情報の入力</a></li>
							<li><a href="#link-a05">5.お支払い手続きが完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">クレジットカードでのお支払いについて</h4>
                    <div class="section_body">

                        <p>
                            クレジットカードおよび一部のデビットカード・プリペイドカードが利用できます。<br>
                            対応しているクレジットカードブランドは<a href="../price/price_payment_method.php">お支払い方法一覧</a>をご参照ください。
                        </p>
                        <p>
                            クレジットカードでのお支払い後は、今回の契約期間を自動更新期間として自動更新設定が有効になり、次回以降の更新のタイミングでご契約を自動的に更新します（一部のSSL契約を除く）。<br>
                            また、クレジットカードが未登録の場合、今回のお支払いに使用するクレジットカードを自動更新用のクレジットカードとして登録します。
                        </p>
                        <p>
                            自動更新設定の詳細や設定変更方法については、マニュアル「<a href="man_order_pay_method_autopay.php">自動更新設定</a>」をご参照ください。
                        </p>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">クレジットカードでのお支払い手順</h4>
                    <div class="section_body">

                        <div class="serial-box mb10 mt40">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.「料金支払い」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.お支払いサービスを選択</h6>
                                <div class="box_body">
                                    <p>支払い対象のサービスにチェックを入れ、「契約期間」を選択のうえ、「支払方法を選択する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal2.png?date=20220216" alt="支払方法を選択するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.クレジットカードを選択</h6>
                                <div class="box_body">
                                    <p>お支払い内容を確認し、ご希望のお支払い方法「クレジットカード」を選択し、「決済画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_credit_3.png?date=20220216" alt="決済画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.クレジットカード情報の入力</h6>
                                <div class="box_body">
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>クレジットカードが未登録の場合</dt>
                                        <dd>
                                            <p>「カード番号」「有効期限」「セキュリティコード」をご入力いただき、「確認画面へ進む」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_method_credit_4.png?date=20201112" alt="クレジットカード情報の入力"></p>
                                        </dd>
                                    </dl>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>クレジットカードが登録済の場合</dt>
                                        <dd>
                                            <p>「お支払いに利用するクレジットカード」を選択し「セキュリティコード」をご入力いただき、「確認画面へ進む」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_method_credit_6.png?date=20201112" alt="クレジットカード情報の入力"></p></dd>
                                    </dl>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a05">5.お支払い手続きが完了</h6>
                                <div class="box_body">
                                    <p>「支払いをする」をクリックしてください。<br>
                                    3Dセキュア認証のため、クレジットカード会社様の認証画面が表示される場合がございます。<br>
                                    表示された手順に従いお支払い手続きを完了してください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_credit_5.png?date=20201022" alt="支払いをするをクリックしているスクリーンショット"></p>
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