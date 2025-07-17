<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>あと払い（ペイディ）による自動更新 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜事前にクレジットカードを登録し、登録したクレジットカードでご利用料金を引き落とす「自動更新設定」に関するご案内です。">

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
            
                <h3 class="sub-ttl">あと払い（ペイディ）による自動更新</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-b">自動更新設定方法（あと払い（ペイディ））</a>
                        <ul>
                            <li><a href="#link-b01">自動更新に使用するPaidyアカウントのご登録</a></li>
                            <li><a href="#link-b02">更新期間の変更/自動更新設定の解除</a></li>
                            <li><a href="#link-b03">Paidyアカウントの削除</a></li>
                            <li><a href="#link-b04">ご登録済のPaidyアカウントの変更</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                        
                <section class="section" id="link-b">
                    <p>決済サービスPaidyが提供する「<a href="../price/price_payment_method_paidy.php">あと払い（ペイディ）</a>」を通して自動更新設定をします。<br>
                        あと払いの方法に「口座振替」を選択することで、口座振替による自動更新も可能です。</p>
                    <h4 id="autopay_method" class="section_ttl">自動更新設定方法（あと払い（ペイディ））</h4>
                    <div class="section_body">
                        <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。</p>
                        <p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
                        <p>自動更新を設定したご契約は、次回更新期より設定したPaidyアカウントにて、ご契約の自動更新を行います。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">自動更新に使用するPaidyアカウントのご登録</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>「自動更新設定」の「お支払い方法の登録」より「あと払い（ペイディ）」を選択のうえ、「Paidyアカウントを登録する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_2.png?date=20210610" alt="「Paidyアカウントを登録する]をクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>「メールアドレス」と「携帯電話番号」をご入力いただき、「次へ」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_3.png?date=20210610" alt="「次へ」をクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>携帯電話に届いた4桁のPINコードを入力してください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_4.png?date=20210610" alt="PINコードを入力しているスクリーンショット"></p>
                                    </li>
									<li>
                                        <p>「登録する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_5.png?date=20210610" alt="「登録する」をするをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>設定ご希望のアカウントに対して自動更新期間を選択し、「確認画面へ進む」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_6.png?date=20210610" alt="自動更新期間を選択しているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>Paidyアカウントの情報や、設定ご希望のサーバー・ドメインの内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_7.png?date=20210624" alt="「自動更新を設定する」をクリックしているスクリーンショット"></p>
                                    </li>
                                </ol>
                                
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">更新期間の変更/自動更新設定の解除</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p> 自動更新設定の「契約アカウント一覧」より「自動更新サイクル・お支払い方法を変更する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_8.png?date=20210610" alt="自動更新設定方法"></p>
                                    </li>
                                    <li>
                                        <p>変更ご希望のアカウントに対して自動更新期間とお支払い方法を選択し、 「確認画面へ進む」をクリックしてください。<br>
                                        ※設定を解除する場合は変更ご希望のアカウントに対して「設定なし」を選択してください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_9.png?date=20210610" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>変更内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_10.png?date=20210610" alt="自動更新を設定するをクリックしているスクリーンショット"></p>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- /.block -->

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b03">Paidyアカウントの削除</h5>
                            <div class="block_body">
                                <p>ご登録中のPaidyアカウントの「削除する」をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_11.png?date=20210624" alt="「削除する」をクリックしているスクリーンショット"></p>
                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-b04">ご登録済Paidyアカウントの変更</h5>
                            <div class="block_body">
                                <p>ご登録中のPaidyアカウントの情報は、Paidyのお客様専用ページ「<a href="https://my.paidy.com/" target="_blank">MyPaidy</a>」にて変更が可能です。</p>
                            </div>
                        </section>
                        <!-- /.block -->   
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