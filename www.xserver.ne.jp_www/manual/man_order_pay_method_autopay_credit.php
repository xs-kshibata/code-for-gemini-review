<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>クレジットカードによる自動更新 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">クレジットカードによる自動更新</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-b">自動更新設定方法（クレジットカード）</a>
                        <ul>
                            <li><a href="#link-b01">自動更新に使用するクレジットカードのご登録</a></li>
                            <li><a href="#link-b02">更新期間の変更/自動更新設定の解除</a></li>
                            <li><a href="#link-b03">クレジットカードの追加</a></li>
                            <li><a href="#link-b04">メインカードの変更</a></li>
                            <li><a href="#link-b05">クレジットカード情報の削除</a></li>
                            <li><a href="#link-b06">ご登録クレジットカードの変更</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                        
                <section class="section" id="link-b">
                    <h4 id="autopay_method" class="section_ttl">自動更新設定方法（クレジットカード）</h4>
                    <div class="section_body">
                    
                        <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。</p>
                        <p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
                        <p>自動更新を設定したご契約は、次回更新期より設定したクレジットカードからご利用料金の引き落としを行い、ご契約の自動更新を行います。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">自動更新に使用するクレジットカードのご登録</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>「自動更新設定」の「クレジットカード情報の登録」より「カード番号」「有効期限」「セキュリティコード」を入力し、「自動更新対象の選択へ進む」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_2.png?date=20210120" alt="自動更新対象の選択へ進むをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>設定ご希望のアカウントに対して自動更新期間を選択し、「確認画面へ進む」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_3.png?date=20220216" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>クレジットカード情報や、設定ご希望のサーバー・ドメインの内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_4.png?date=20220216" alt="自動更新を設定するをクリックしているスクリーンショット"></p>
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
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_5.png?date=20210610" alt="自動更新設定方法"></p>
                                         </li>
                                    <li>
                                        <p>変更ご希望のアカウントに対して自動更新期間とお支払い方法を選択し、 「確認画面へ進む」をクリックしてください。<br>
                                        ※設定を解除する場合は変更ご希望のアカウントに対して「設定なし」を選択してください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_6.png?date=20210610" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>変更内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_7.png?date=20210610" alt="自動更新を設定するをクリックしているスクリーンショット"></p>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- /.block -->

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b03">クレジットカードの追加</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>自動更新設定の「お支払い方法」で「クレジットカード」を選択のうえ、「新しいクレジットカードを登録する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_8.png?date=20210120" alt="自動更新設定方法"></p>
                                    </li>
                                    <li>
                                        <p>「カード番号」「有効期限」「セキュリティコード」をご入力いただき、「確認画面へ進む」をクリックしてください。また、今回登録するクレジットカードを「メインカード」に設定する場合は「メインカードに設定する」を選択してください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_9.png?date=20210120" alt="自動更新設定方法"></p>
                                    </li>
                                    <li>
                                        <p>変更内容に誤りがないか確認いただき、「クレジットカードを登録する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_10.png?date=20210120" alt="自動更新設定方法"></p>
                                    </li>

                                </ol>

                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-b04">メインカードの変更</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>自動更新設定の「決済方法」で「クレジットカード」を選択のうえ、「メインカードを変更する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_11.png?date=20210120" alt="自動更新設定方法"></p>
                                    </li>
                                    <li>
                                        <p>メインカードとして設定するクレジットカードを選択し、「メインカードを変更する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_12.png?date=20210120" alt="自動更新設定方法"></p>
                                    </li>
                                </ol>

                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-b05">クレジットカード情報の削除</h5>
                            <div class="block_body">
                                <p>「登録中カード」の「削除する」をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_13.png?date=20210120" alt="自動更新設定方法"></p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b06">ご登録クレジットカードの変更</h5>
                            <div class="block_body">
                                <p>クレジットカードの登録削除後、新たなクレジットカード情報で再設定を行ってください。</p>
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