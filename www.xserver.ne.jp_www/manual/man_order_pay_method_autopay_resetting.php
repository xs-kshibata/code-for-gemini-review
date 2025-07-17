<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>自動更新が失敗した場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜クレジットカードでの自動更新処理が失敗した場合の再設定の手順について記載しています。">

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
            
                <h3 class="sub-ttl">自動更新が失敗した場合の再設定</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-c">クレジットカードの自動更新が失敗した場合の再設定</a></li>
                        <li><a href="#link-a">クレジットカードの登録手順</a>
                            <ol>
                                <li><a href="#link-a01">1.自動更新設定をクリック</a></li>
                                <li><a href="#link-a02">2.クレジットカード情報の登録</a></li>
                                <li><a href="#link-a03">3.更新サイクルの選択</a></li>
                                <li><a href="#link-a04">4.自動更新の再設定が完了</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-d">あと払い（ペイディ）の自動更新が失敗した場合の再設定</a></li>
                        <li><a href="#link-b">Paidyアカウント情報の登録手順</a>
                            <ol class="ol">
                                <li><a href="#link-b01">1.自動更新設定をクリック</a></li>
                                <li><a href="#link-b02">2.Paidyアカウント情報の削除</a></li>
                                <li><a href="#link-b03">3.Paidyアカウント情報の登録</a></li>
                                <li><a href="#link-b04">4.更新サイクルの選択</a></li>
                                <li><a href="#link-b05">5.自動更新の再設定が完了</a></li>
                            </ol>
                        </li>
						<li><a href="#link-e">プリペイドの自動更新が失敗した場合の再設定</a></li>
                        <li><a href="#link-f">プリペイドの登録手順</a>
                            <ol class="ol">
                                <li><a href="#link-f01">1.自動更新設定をクリック</a></li>
                                <li><a href="#link-f02">2.プリペイドの設定</a></li>
                                <li><a href="#link-f03">3.自動更新サイクルの選択</a></li>
                                <li><a href="#link-f04">4.自動更新の再設定が完了</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">クレジットカードの自動更新が失敗した場合の再設定</h4>
                    <div class="section_body">

                        <p>クレジットカードの利用期限超過や限度額超過などで自動更新が失敗してしまった場合、ご登録メールアドレス宛にお知らせいたします。</p>
                        <p>再設定の期日までに新しいクレジットカード情報を登録しなおすことにより、自動更新を実施します。再設定の期日は自動更新の対象によって異なります。</p>
                        <ul class="ul">
                            <li>サーバー・ドメインの場合：お知らせが届いた月の末日正午まで</li>
                            <li>オプション独自SSLの場合：SSL証明書有効期限日の前日まで</li>
                        </ul>
                        <p>期日までに再設定を行えなかった場合、その他のお支払い方法でお支払いいただく必要があります。</p>

                        <h4 class="section_ttl mt50" id="link-a">クレジットカードの登録手順</h4>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.自動更新設定をクリック</h6>
                                <div class="box_body">
                                    <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。</p>
									<p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.クレジットカード情報の登録</h6>
                                <div class="box_body">
									<p>お支払い方法の登録画面にて、クレジットカードにチェックを入れ「カード番号」「有効期限」「セキュリティコード」を入力し、「自動更新対象の選択へ進む」ボタンをクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_order_pay_method_autopay_resetting_3.png?date=20210122" alt="自動更新対象の選択へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.更新サイクルの選択</h6>
                                <div class="box_body">
                                    <p>変更ご希望のアカウントに対して自動更新サイクルを選択し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_3.png?date=20220216" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.自動更新の再設定が完了</h6>
                                <div class="box_body">
                                    <p>変更内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。自動更新設定の完了後、各アカウントごとに設定中の更新期間が表示されますのでご確認ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_credit_4.png?date=20220216" alt="自動更新を設定するをクリックしているスクリーンショット"></p>
                                    <p>以上で、自動更新の再設定は完了です。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">あと払い（ペイディ）の自動更新が失敗した場合の再設定</h4>
                    <div class="section_body">

                        <p>あと払い（ペイディ）で自動更新が失敗してしまった場合、ご登録メールアドレス宛にお知らせいたします。</p>
                        <p>再設定の期日までに、Paidyアカウント情報を登録しなおすことにより、自動更新を実施します。再設定の期日は自動更新の対象によって異なります。</p>
                        <ul class="ul">
                            <li>サーバー・ドメインの場合：お知らせが届いた月の末日正午まで</li>
                            <li>オプション独自SSLの場合：SSL証明書有効期限日の前日まで</li>
                        </ul>
                        <p>期日までに再設定を行えなかった場合、その他のお支払い方法でお支払いいただく必要があります。</p>

                        <h4 class="section_ttl mt50" id="link-b">Paidyアカウント情報の登録手順</h4>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.自動更新設定をクリック</h6>
                                <div class="box_body">
                                    <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。</p>
									<p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.Paidyアカウント情報の削除</h6>
                                <div class="box_body">
									<p>ご登録中のPaidyアカウントの「削除する」をクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_order_pay_method_autopay_resetting_6.png?date=20210624" alt="削除するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.Paidyアカウント情報の登録</h6>
                                <div class="box_body">
									<ol class="ol">
                                        <li>
                                            <p>自動更新設定のトップへ戻り、翌月後払い（コンビニ／銀行）の登録画面にて「Paidyアカウントを登録する」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_method_autopay_resetting_7.png?date=20210120" alt="「Paidyアカウントを登録する]をクリックしているスクリーンショット"></p>
                                        </li>
                                        <li>
                                            <p>「メールアドレス」と「携帯電話番号」をご入力いただき、「次へ」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_3.png" alt="「次へ」をクリックしているスクリーンショット"></p>
                                        </li>
                                        <li>
                                            <p>携帯電話に届いた4桁のPINコードを入力してください。</p>
                                            <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_4.png" alt="PINコードを入力しているスクリーンショット"></p>
                                        </li>
                                    </ol>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.更新サイクルの選択</h6>
                                <div class="box_body">
                                    <p>変更ご希望のアカウントに対して自動更新サイクルを選択し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_6.png" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.自動更新の再設定が完了</h6>
                                <div class="box_body">
                                    <p>変更内容に誤りがないか確認いただき、「自動更新を設定する」をクリックしてください。自動更新設定の完了後、各アカウントごとに設定中の更新期間が表示されますのでご確認ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_7.png?date=20210624" alt="自動更新を設定するをクリックしているスクリーンショット"></p>
                                    <p>以上で、自動更新の再設定は完了です。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h4 class="section_ttl" id="link-e">プリペイドの自動更新が失敗した場合の再設定</h4>
                    <div class="section_body">

                        <p>プリペイドで自動更新が失敗してしまった場合、ご登録メールアドレス宛にお知らせいたします。</p>
                        <p>再設定の期日までに、プリペイドを登録しなおすことにより、自動更新を実施します。再設定の期日は自動更新の対象によって異なります。</p>
                        <ul class="ul">
                            <li>サーバー・ドメインの場合：お知らせが届いた月の末日正午まで</li>
                            <li>オプション独自SSLの場合：SSL証明書有効期限日の前日まで</li>
                        </ul>
                        <p>期日までに再設定を行えなかった場合、その他のお支払い方法でお支払いいただく必要があります。</p>

                        <h4 class="section_ttl mt50" id="link-f">プリペイドの登録手順</h4>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-f01">1.自動更新設定をクリック</h6>
                                <div class="box_body">
                                    <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「自動更新設定」をクリックしてください。</p>
									<p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-f02">2.プリペイドの設定</h6>
                                <div class="box_body">
									<p>お支払い方法の登録画面にて、プリペイドにチェックを入れて「プリペイド決済で登録する」ボタンをクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_1.png" alt="「プリペイド決済で登録する」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-f03">3.自動更新サイクルの選択</h6>
                                <div class="box_body">
                                    <p>変更ご希望のアカウントに対して自動更新サイクルを選択し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_2.png" alt="「確認画面へ進む」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-f04">4.自動更新の再設定が完了</h6>
                                <div class="box_body">
                                    <p>変更内容に誤りがないか確認いただき、「プリペイド自動更新を設定する」をクリックしてください。自動更新設定の完了後、各アカウントごとに設定中の更新期間が表示されますのでご確認ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_method_autopay_prepaid_3.png" alt="「プリペイド自動更新を設定する」をクリックしているスクリーンショット"></p>
                                    <p>以上で、自動更新の再設定は完了です。</p>
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