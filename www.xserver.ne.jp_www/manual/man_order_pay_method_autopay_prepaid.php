<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>プリペイドによる自動更新 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜事前にプリペイドを登録し、登録したプリペイドでご利用料金を引き落とす「自動更新設定」に関するご案内です。">

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
            
                <h3 class="sub-ttl">プリペイドによる自動更新</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">自動更新設定方法（プリペイド）</a>
                        <ul>
                            <li><a href="#link-a01">自動更新設定にプリペイドを登録</a></li>
                            <li><a href="#link-a02">更新期間の変更/自動更新設定の解除</a></li>
                            <li><a href="#link-a03">プリペイド決済の登録削除</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                        
                <section class="section" id="link-a">
                    <p>プリペイド決済にて自動更新設定をします。</p>
                    <h4 id="autopay_method" class="section_ttl">自動更新設定方法（プリペイド）</h4>
                    <div class="section_body">
                        <p>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント<i class="ico ico_new-window"></i></a>へログインし、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。
                        </p>
                        <p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20240627" alt="自動更新設定をクリックしているスクリーンショット"></p>
                        <p>自動更新を設定したご契約は、次回更新期よりプリペイド決済にて、ご契約の自動更新を行います。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">自動更新設定にプリペイドを登録</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>自動更新設定より「プリペイド」を選択し、「プリペイド決済で登録する」をクリックしてください。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_1.png" alt="「Paidyアカウントを登録する]をクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>設定ご希望のアカウントに対して自動更新期間を選択し、「確認画面へ進む」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_2.png" alt="自動更新期間を選択しているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>設定ご希望のサーバー・ドメインの内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_3.png" alt="「自動更新を設定する」をクリックしているスクリーンショット"></p>
                                    </li>
                                </ol>
                                
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">更新期間の変更/自動更新設定の解除</h5>
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
                            <h5 class="block_ttl" id="link-a03">プリペイド決済の登録削除</h5>
                            <div class="block_body">
                                <p>ご登録中のプリペイド決済の「削除する」をクリックしてください。</p>
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