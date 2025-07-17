<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>申し込みの取り消し | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜お申し込みの取り消しについて、手順を案内しています。エックスサーバーでは新規ご契約について、料金の支払い前であれば「XServerアカウント」からお申し込みを取り消すことが可能です。">

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
            
                <h3 class="sub-ttl">申し込みの取り消し</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">申し込みの取り消しについて</a></li>
                    <li><a href="#link-b">ドメイン/オプション独自SSLのお申し込みキャンセル手順</a>
                        <ul>
                            <li><a href="#link-b01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-b02">2.「詳細」をクリック</a></li>
                            <li><a href="#link-b03">3.「契約期間・支払い方法の変更」をクリック</a></li>
                            <li><a href="#link-b04">4.「この請求情報を取り消す」をクリック</a></li>
                            <li><a href="#link-b05">5.キャンセル完了</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-c">試用期間中サーバーのお申し込みキャンセル手順</a>
                        <ul>
                            <li><a href="#link-c01">1.「契約情報」をクリック</a></li>
							<li><a href="#link-c02">2.「解約する」をクリック</a></li>
                            <li><a href="#link-c03">3.「解約申請をする」をクリック</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_cancel.php">解約に関する「よくある質問」</a></li>
                </ul>

                <aside class="msg msg_caution">
                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                    <div class="msg_body">
                        <p>すでにお支払いが反映されたご契約・プリペイドは、お申し込みのキャンセルができません。</p>
                    </div>
                </aside>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">申し込みの取り消しについて</h4>
                    <div class="section_body">
                        <p>ドメイン契約、SSL契約は、お支払い前のお申し込みの取り消しが可能です。</p>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">ドメイン/オプション独自SSLのお申し込みキャンセル手順</h4>
                    <div class="section_body">
                        <div class="serial-box">

                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「料金支払い」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_3.png?date=20230130" alt="「料金支払い」をクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「詳細」をクリック</h6>
                                <div class="box_body">
                                    <p>「請求情報一覧」より、支払いを取り消ししたい請求情報の「詳細」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_4.png?date=20201022" alt="「詳細」をクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.「契約期間・支払い方法の変更」をクリック</h6>
                                <div class="box_body">
                                    <p>上部の「契約期間・支払い方法の変更」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_11.png?date=2501" alt="「契約期間・支払い方法の変更」をクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.「この請求情報を取り消す」をクリック</h6>
                                <div class="box_body">
                                    <p>確認画面で内容を確認し、「この請求情報を取り消す」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_13.png?date=2501" alt="「この請求情報を取り消す」をクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.キャンセル完了</h6>
                                <div class="box_body">
                                    <p>請求情報取り消しのメッセージが表示されます。<br>
                                        「OK」をクリックすると、お申し込みのキャンセルは完了です。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_12.png?date=2501" alt="キャンセル完了"></p>

                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-c">試用期間中サーバーのお申し込みキャンセル手順</h4>
                    <div class="section_body">
                        <div class="serial-box">
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「契約情報」をクリック</h6>
                                <div class="box_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、対象サーバーの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_7.png?date=20230130" alt="契約情報をクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.「解約する」をクリック</h6>
                                <div class="box_body">
                                    <p>「解約する」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_8.png?date=20201022" alt="申し込みの取り消し"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.「解約申請をする」をクリック</h6>
                                <div class="box_body">
                                    <p>選択したサーバーIDに間違いがないか確認し、 「解約申請をする」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_9.png?date=20201022" alt="申し込みの取り消し"></p>
                                    <p>「サーバー」で契約欄が「解約」になっていれば、解約は完了です。<br>
                                        ※試用期間の期限までは引き続きサーバーのご利用が可能です。
                                    </p>
									<p><img class="img" src="../img/manual/man_order_cancel_10.png?date=20230130" alt="「サーバー」で契約欄が「解約」"></p>
                                </div>
                            </section>
                           
                        </div>
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