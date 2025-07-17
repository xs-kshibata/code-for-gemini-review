<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お支払い報告 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご契約名義以外から振り込んだ場合の振り込み名義のご報告や、複数契約に合算で支払った場合の内訳のご報告などができる「お支払い報告」メニューのご案内です。">

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
            
                <h3 class="sub-ttl">お支払い報告</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ol class="toc-list--body">
                    <li><a href="#link-a">お支払い報告について</a>
                        <ol>
                            <li><a href="#link-a01">お支払い報告が不要なお支払い</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-b">お支払い報告の手順</a>
                        <ol>
                            <li><a href="#link-b01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-b02">2.「お支払い報告フォーム」をクリック</a></li>
							<li><a href="#link-b03">3.お支払い報告の入力</a></li>
                            <li><a href="#link-b04">4.お支払い報告の送信</a></li>
                        </ol>
                    </li>
                </ol>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a01">お支払い報告について</h4>
                    <div class="section_body">
                        <p>銀行振込によるお支払い内容をサポートまで連絡することができます。<br>
                        下記のような条件でお支払いいただいた際は、サポートまでご連絡ください。</p>
                        
                        <ul class="ul">
                            <li>複数の請求情報に対し、合算して振り込みを行った場合</li>
                            <li>同じ金額の請求情報が複数存在しており、その一方にのみ振込をされた場合</li>
                        </ul>

                        <p>なお、振り込み先の口座は、XServerアカウントごとに異なります。<br>
                            複数のXServerアカウントをお持ちの場合は、ご注意ください。</p>

                        <h5 id="link-a01" class="block_ttl mt50">お支払い報告が不要なお支払い</h5>
                        <p>
                            「クレジットカード決済」・「コンビニ／ペイジー決済」・「あと払い（ペイディ）」・「プリペイド」によるお手続きの場合、お支払い報告は不要です。<br>
                            XServerアカウント内、上部メニューの「料金支払い」 → 「お支払い履歴/受領書発行」にて、反映状況を確認することができます。
                        </p>
                        <p><img class="img" src="../img/faq/faq_contract_price3.png?date=20230130" alt="お支払い履歴/受領書発行をクリックしているスクリーンショット"></p>
                        <p class="mt30">詳細は、マニュアル「<a href="../manual/man_order_pay_history.php">お支払い履歴</a>」をご参照ください。</p>

                     </div>
                </section>
                <!-- /.section -->
                <section class="section">       
                    <h4 class="section_ttl" id="link-b">お支払い報告の手順</h4>
                        <div class="section_body">
                        <div class="serial-box">
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「料金支払い」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「お支払い報告フォーム」をクリック</h6>
                                <div class="box_body">
                                    <p>「お支払い報告フォーム」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_price2.png?date=20230130" alt="お支払い報告フォームをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.お支払い報告の入力</h6>
                                <div class="box_body">
                                    <p>お支払い金額を入力のうえで、対象となる請求情報のチェックボックスにチェックを入れて「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_report_3.png?date=20201022" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.お支払い報告の送信</h6>
                                <div class="box_body">
                                    <p>画面の内容に誤りがないか確認し、「お支払い報告をする」をクリックすると、送信が完了します。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_report_4.png?date=20201022" alt="お支払い報告をするをクリックしているスクリーンショット"></p>
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