<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お支払いに関する注意事項 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜お支払いに関する注意事項です。更新案内の送付時期や複数契約の一括支払いについて、お支払い方法を変更する手順について記載しています。">

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
            
                <h3 class="sub-ttl">料金のお支払い</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">お支払いの流れについて</a></li>
                    <li><a href="#link-b">料金のお支払い方法</a>
                        <ol>
                            <li><a href="#link-b01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-b02">2.お支払いサービスを選択</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">請求情報の確認方法（クレジットカード・あと払い（ペイディ）・プリペイド以外）</a>
                        <ol>
                            <li><a href="#link-c01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-c02">2.「詳細」をクリック</a></li>
                            <li><a href="#link-c03">3.「お支払い内容詳細」にて確認</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">お支払い方法・更新期間の変更</a>
                        <ol>
                            <li><a href="#link-d01">1.「料金支払い」をクリック</a></li>
                            <li><a href="#link-d02">2.「詳細」をクリック</a></li>
                            <li><a href="#link-d03">3.お支払い方法を変更</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-e">お支払いについての注意事項</a>
                        <ul>
                            <li><a href="#link-e02">お支払い後の返金はできませんのでご注意ください</a></li>
                            <li><a href="#link-e03">契約更新に関するご案内について</a></li>
                            <li><a href="#link-e04">複数サービスの一括支払いについて</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                <!-- /.toc-list -->
 
                
                <ul class="link-box mb15">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 id="link-a" class="section_ttl">お支払いの流れについて</h4>
					<p>当サービスのご利用料金のお支払いは、全て「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」からのお手続きとなります。<br>
						手続き後に「請求情報」が発行されますので、発行された請求情報をご確認いただきお支払いください。
					</p>
					<p class="tac mt2.mb20"><img class="flex" src="../img/manual/man_order_pay_etc_intro_1.png?date=20201022" alt="お支払いの流れのイメージ"></p>
                </section>
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">料金のお支払い方法</h4>
                    <div class="section_body">
                    
					<section class="block">
                            <div class="block_body">
                                
                                <div class="serial-box">
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-b01">1.「料金支払い」をクリック</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                            <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-b02">2.お支払いサービスを選択</h6>
                                        <div class="box_body">
                                            <p class="mb5">支払い対象のサービスにチェックを入れ、「契約期間」をご選択の上、「支払方法を選択する」をクリックしてください。</p>
                                            <p class="note">※サーバーとドメインなど、異なるサービスにまとめてチェックを入れることはできません。<br />サービスごとに料金のお支払い手続きをしてください。</p>
                                            <p><img class="img" src="../img/faq/faq_contract_renewal2.png?date=20220216" alt="お支払いサービスを選択"></p>
										<p>以降、お支払い方法ごとの操作手順に関しては、以下のマニュアルをご参照ください。</p>

										<ul class="ul">
											<li>「<a href="man_order_pay_method_convenient.php">コンビニエンスストア払いの場合</a>」</li>
											<li>「<a href="man_order_pay_method_credit.php">クレジットカード決済の場合</a>」</li>
											<li>「<a href="man_order_pay_method_bank.php">銀行振り込みの場合</a>」</li>
											<li>「<a href="man_order_pay_method_pay_easy.php">ペイジー決済の場合</a>」</li>
                                            <li>「<a href="man_order_pay_method_paidy.php">あと払い（ペイディ）</a>」</li>
											<li>「<a href="man_order_pay_method_prepaid.php">プリペイド</a>」</li>
										</ul>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>                          
                                </div>
                                <!-- /.serial-box -->
                                
                            </div>
                             <!-- /.block_body -->
                        </section>
                        <!-- /.block -->
                    </div>
                     <!-- /.section_body -->          
                        
                    <h4 id="link-c" class="section_ttl">請求情報の確認方法（クレジットカード・あと払い（ペイディ）・プリペイド以外）</h4>
                    <p class="note">※クレジットカード・あと払い（ペイディ）・プリペイド以外の場合は、即時に決済が完了するため、請求情報は発行されません。</p>
                    <div class="section_body">
                    
					<section class="block">
                            <div class="block_body">
                                
                                <div class="serial-box">
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c01">1.「料金支払い」をクリック</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                            <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c02">2.「詳細」をクリック</h6>
                                        <div class="box_body">
                                            <p>「請求情報一覧」より、確認したい請求情報の右側にある「詳細」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_etc_6.png?date=20201022" alt="詳細をクリック"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c03">3.「お支払い内容詳細」にて確認</h6>
                                        <div class="box_body">
                                            <p>ページ下部の「お支払い内容詳細」欄にて、発行された請求情報の詳細を確認することができます。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_etc_8.png?date=20210119" alt="お支払い内容詳細にて発行された請求情報の詳細を確認"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>                         
                                </div>
                                <!-- /.serial-box -->
                                
                            </div>
                             <!-- /.block_body -->
                        </section>
                        <!-- /.block -->
                    </div>
                     <!-- /.section_body -->     
                        
                    <h4 id="link-d" class="section_ttl">お支払い方法・更新期間の変更</h4>
                    <div class="section_body">
                    
					<section class="block">
                            <div class="block_body">
                                
                                <div class="serial-box">
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d01">1.「料金支払い」をクリック</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください。</p>
                                            <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                    
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d02">2.「詳細」をクリック</h6>
                                        <div class="box_body">
                                            <p>「請求情報一覧」より、支払い方法を変更したい請求情報の右側にある「詳細」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_etc_6.png?date=20201022" alt="詳細をクリック"></p>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                    
                                       <section class="box">
                                        <h6 class="box_ttl" id="link-d03">3.お支払い方法を変更</h6>
                                        <div class="box_body">
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>お支払い方法を変更する場合</dt>
                                                <dd>
                                                    <p>上部の「契約期間・支払い方法の変更」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_9.png?date=2501" alt="「契約期間・支払い方法の変更」をクリック"></p>
                                                    <p>確認画面で内容を確認し、「この請求情報を取り消す」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_11.png?date=2501" alt="請求情報取り消しの確認"></p>
                                                    <p>請求情報取り消しのメッセージが表示されるので「OK」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_10.png?date=2501" alt="請求情報取り消しのメッセージ表示"></p>
                                                    <p>「お支払い/請求書発行」へ戻り、再度お支払い手続きを行ってください。</p>
                                                    <p><img class="img" src="../img/faq/faq_contract_renewal2.png?date=20220216" alt="お支払い/請求書発行のスクリーンショット"></p>


                                                </dd>

                                                <dt><i class="ico ico_square-fill"></i>契約期間を変更する場合</dt>
                                                <dd>
                                                    <p>上部の「契約期間・支払い方法の変更」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_9.png?date=2501" alt="「契約期間・支払い方法の変更」をクリック"></p>
                                                    <p>確認画面で内容を確認し、「この請求情報を取り消す」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_11.png?date=2501" alt="請求情報取り消しの確認"></p>
                                                    <p>請求情報取り消しのメッセージが表示されるので「OK」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/man_order_pay_etc_10.png?date=2501" alt="請求情報取り消しのメッセージ表示"></p>
                                                    <p>「お支払い/請求書発行」へ戻り、再度お支払い手続きを行ってください。</p>
                                                    <p><img class="img" src="../img/faq/faq_contract_renewal2.png?date=20220216" alt="お支払い/請求書発行のスクリーンショット"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- /.box_body -->
                                    </section>
                                </div>
                                <!-- /.serial-box -->
                            </div>
                            <!-- /.block_body -->
                        </section>
                        <!-- /.block -->
                    </div>
                     <!-- /.section_body -->     
                        
                    <h4 id="link-e" class="section_ttl">お支払いについての注意事項</h4>
                    <div class="section_body">

                        <section class="block">
                            <h5 class="block_ttl" id="link-e02">お支払い後の返金はできませんのでご注意ください</h5>
                            <div class="block_body">
                                <p>料金をお支払いいただいた後は、契約期間途中での解約の場合でも料金の返金はできませんのでご了承ください。</p>
                            </div>
                            <!-- /.block_body -->
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e03">契約更新に関するご案内について</h5>
                            <div class="block_body">
                                <p>サーバー・独自ドメイン・独自SSLのご契約それぞれに対して、メール・SMSにて更新案内をお送りしております。<br />通知先となる「ご登録メールアドレス」および「お電話番号」は、XServerアカウントの上部メニュー右端、XServerアカウントメニューにある「登録情報確認・編集」から、ご確認、ご変更ください。</p>
								<p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集をクリックしているスクリーンショット"></p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>サーバーの場合</dt>
                                    <dd>
                                        <p>利用期限の約1ヶ月半・2週間前より複数回、メールを送付いたします。<br>また、「SMS通知」が有効な場合、ご利用期限日前後に複数回、以下の番号よりSMSを送付いたします。<br>+1(813)418-6712</p>
                                        <p>※「SMS通知」は通知先となる「お電話番号」が携帯電話番号の場合のみ有効にできます。</p>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>ドメインの場合</dt>
                                    <dd>
                                        <p>利用期限の約3ヶ月・2ヶ月・1ヶ月前にメールを送付いたします。<br>また、「SMS通知」が有効な場合、ご利用期限日前に複数回、以下の番号よりSMSを送付いたします。<br>+1(813)418-6712</p>
                                        <p>※「SMS通知」は通知先となる「お電話番号」が携帯電話番号の場合のみ有効にできます。</p>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>SSLの場合</dt>
                                    <dd>
                                        <p>利用期限の30日前・14日前・7日前にメールを送付いたします。</p>
                                        <p>※SMSによる通知は行っておりません。</p>
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.block_body -->
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e04">複数サービスの一括支払いについて</h5>
                            <div class="block_body">
                                <p>同一XServerアカウントID内の複数のサーバー、複数のドメインを一括で支払うことが可能です。</p>
                                <p class="note">※サーバーとドメイン、サーバーとSSL など、複数のサービスのお支払いをまとめて支払うことはできません。</p>
                            </div>
                            <!-- /.block_body -->
                        </section>
                        <!-- /.block -->

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