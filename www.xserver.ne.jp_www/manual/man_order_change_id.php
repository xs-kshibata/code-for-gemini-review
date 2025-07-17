<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>登録情報について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご住所等の登録情報の変更手順、ご登録メールアドレスの変更手順について記載しています。">

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
            
                <h3 class="sub-ttl">登録情報について</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">登録情報</a></li>
                    <li><a href="#link-b">登録メールアドレスの変更</a>
                    <ol>
                        <li><a href="#link-b01">1.「登録情報確認・編集」をクリック</a></li>
                        <li><a href="#link-b02">2.「メールアドレス」の「設定変更」ボタンをクリック</a></li>
                        <li><a href="#link-b03">3.変更後のメールアドレスを入力</a></li>
						<li><a href="#link-b04">4.「認証を行う」ボタンをクリック</a></li>
                    </ol>
                    </li>
                    <li><a href="#link-c">登録情報の変更</a>
                    <ol>
                        <li><a href="#link-c01">1.「登録情報確認・編集」をクリック</a></li>
                        <li><a href="#link-c02">2.登録情報の「設定変更」ボタンをクリック</a></li>
                        <li><a href="#link-c03">3.変更希望箇所を入力</a></li>
                    </ol>
                    </li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_missing.php">登録情報に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">登録情報</h4>
                    <div class="section_body">
                        <p>
                            現在の登録情報の確認やメールアドレス・住所の変更などが可能です。<br>
                            契約名義は「<a href="man_order_transfer_usage_rights.php">第三者にご契約を譲渡する場合</a>」または「<a
                                    href="man_order_name_change.php">ご契約名義を変更する場合</a>」のマニュアルをご確認いただき、書面にてお手続きを行っていただくことで、変更が可能です。
                        </p>
                    
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">登録メールアドレスの変更</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「登録情報確認・編集」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報画面へ"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「メールアドレス」の「設定変更」ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>「メールアドレス」の「設定変更」ボタンをクリックしてください</p>
                                    <p><img class="img" src="../img/manual/man_order_change_id_2.png?date=20210610" alt="設定変更ボタンをクリックするスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.変更後のメールアドレスを入力</h6>
                                <div class="box_body">
                                    <p>「変更後のメールアドレス」を入力し、「【確認ID】を取得する」をクリックしてください。変更後のメールアドレス宛に【確認ID】が送信されます。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_id_2_2.png?date=20210610" alt="メールアドレスの変更画面のスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.「認証を行う」ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>送信された【確認ID】を入力し、「認証を行う」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_id_4.png?date=20210610" alt="確認ID画面を入力するスクリーンショット"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">登録情報の変更</h4>
                    <div class="section_body">
                        <p>担当者名（法人契約のみ）、住所、電話番号の変更やインフォメーションメール配信の停止/再開の設定が可能です。</p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「登録情報確認・編集」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集へ"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.登録情報の「設定変更」ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>登録情報の「設定変更」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_id_5.png?date=20210610" alt="設定変更ボタンをクリックするスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.変更希望箇所を入力</h6>
                                <div class="box_body">
                                    <p>変更希望箇所を入力し、「登録情報の変更を完了する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_id_5_2.png?date=20240820" alt="登録情報の変更画面のスクリーンショット"></p>
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