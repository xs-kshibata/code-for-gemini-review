<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お支払い手順（銀行振り込み） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご利用料金を銀行振り込みで支払うための手順について記載しています。">

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
            
                <h3 class="sub-ttl">銀行振り込み</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">銀行振り込みでのお支払いについて</a>
                        <ol>
                            <li><a href="#link-a01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-a02">2.お支払いサービスを選択</a></li>
                            <li><a href="#link-a03">3.銀行振込を選択</a></li>
                            <li><a href="#link-a04">4.お支払い情報を送信するメールアドレスを入力</a></li>
							<li><a href="#link-a05">5.発行手続き完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">銀行振り込みでのお支払いについて</h4>
                    <div class="section_body">
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.「料金支払い」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインへログインし、上部メニューの「料金支払い」をクリックしてください</p>
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
                                <h6 class="box_ttl" id="link-a03">3.銀行振込を選択</h6>
                                <div class="box_body">
                                    <p>お支払い内容を確認し、ご希望のお支払い方法「銀行振込」を選択のうえ、「決済画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_bank_3.png?date=20220216" alt="決済画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.お支払い情報を送信するメールアドレスを入力</h6>
                                <div class="box_body">
                                    <p>「メールアドレス」欄にお支払い情報を送信するメールアドレスを入力し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_bank_4.png?date=20230224" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a05">5.発行手続き完了</h6>
                                <div class="box_body">
                                    <p>「お支払い手続きを行う」をクリックします。<br>
                                    振込先の口座番号などを記載したメールが届きますので、内容をご確認のうえお振り込みください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_bank_5.png?date=20230224" alt="お支払い手続きを行うをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                        <ul class="note-list">
                            <li>※振込情報は、契約管理ページの画面上でもご確認が可能です。<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、上部メニューの「料金支払い」⇒「請求情報一覧」の「詳細」をクリックし、画面下部の「銀行振込情報」にてご確認ください。</li>
                            <li>※銀行振込の場合、三井住友銀行以外からお振込みをされる際は、 振込元銀行の仕様により入金反映が翌営業日となる場合があります。</li>
							<li>※海外からの送金は受付けておりませんので、あらかじめご了承ください。</li>
                        </ul>
                        
					</div>
					<!-- /.section_body -->
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