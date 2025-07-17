<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サーバー移転代行 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでは、WebサイトやWordPressなどのサーバー移転を弊社スタッフが作業する「サーバー移転代行」を有償で提供しております。">

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
            
                <h3 class="sub-ttl">サーバー移転代行</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">サーバー移転代行とは</a></li>
                    <li><a href="#link-b">ご利用手順</a>
                        <ol>
                            <li><a href="#link-b01">1.「サーバー移転代行」をクリック</a></li>
							<li><a href="#link-b02">2.「選択する」をクリック</a></li>
							<li><a href="#link-b03">3.ご注文内容を入力し、確認画面へ進む</a></li>
                            <li><a href="#link-b04">4.料金のお支払い</a></li>
                            <li><a href="#link-b05">5.サポートから届くメールを確認する</a></li>
                            <li><a href="#link-b06">6.作業開始</a></li>
                            <li><a href="#link-b07">7.作業完了</a></li>
                        </ol>
                    </li>
					<li><a href="#link-c">利用する前に必ずお読みください</a>
                        <ol>
                            <li><a href="#link-c01">作業完了後のご連絡について</a></li>
                            <li><a href="#link-c02">提供範囲について</a></li>
                            <li><a href="#link-c03">免責事項</a></li>
                        </ol>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_support_server_daiko.php">サーバー移転代行に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">サーバー移転代行とは</h4>
                    <div class="section_body">
                        <p>サーバー移転代行は、運用中のサーバーから当サービスへの、WebサイトやWordPressのデータ移行を代行するサービスです。</p>
                        <p>対応可能な設定の詳細は「<a href="../price/service_server_daiko.php">サーバー移転代行</a>」にてご確認ください。</p>

                        <div class="msg msg_notice">
                            <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用の前に</h4>
                            <div class="msg_body">
                                「サーバー移転代行」は、設定を依頼するサーバーアカウントの本契約後にお申し込みが可能になります。<br>
                                ご契約が無料お試し期間中の場合、ご利用料金をお支払いいただくことでご契約が本契約に移行します。<br>
                                ご利用料金のお支払い手順は、マニュアル「<a href="../manual/man_order_pay_etc.php">料金のお支払い</a>」をご参照ください。
                            </div>
                        </div>
                        
                    </div>
					
					
					
                </section>
                <!-- /.section -->
                        
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ご利用手順</h4>
                    <div class="section_body">
                        
                                
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「サーバー移転代行」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「サーバー移転代行」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_server_daiko_1.png" alt="「サーバー移転代行」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「選択する」をクリック</h6>
                                <div class="box_body">
                                    <p>サーバー移転代行を申し込みたいサーバーを選択します。</p>
                                    <p><img class="img" src="../img/manual/man_order_server_daiko_2.png" alt="「選択する」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.ご注文内容を入力し、確認画面へ進む</h6>
                                <div class="box_body">
                                    <p>必要事項をご入力したあと、サーバー移転代行に関する注意事項後をご確認のうえ、「上記を確認し、同意します。」ボタンにチェックを入れて、確認画面へ進んでください。</p>
                                    <p><img class="img" src="../img/manual/man_order_server_daiko_3.png" alt="ご注文内容ご入力しているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.料金のお支払い</h6>
                                <div class="box_body">
                                    <p>
                                        ご希望の支払い方法を選択し、料金をお支払いください。<br>
                                        当サービスにてお支払いの確認が取れましたら、お申し込み完了です。
                                    </p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>無料代行サービスをご利用の場合</dt>
                                        <dd>ビジネスプランをご利用の場合や、キャンペーンにて無料代行サービスが適用されている場合は、お支払い画面は表示されません。</dd>
                                    </dl>
                                    <p><img class="img" src="../img/manual/man_order_server_daiko_4.png" alt="料金のお支払い画面のスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.サポートから届くメールを確認する</h6>
                                <div class="box_body">
                                    <p>
                                        お申し込みが完了したら、登録メールアドレス宛に「<b>『サーバー移転代行』のお申し込みについて</b>」のメールが届きます。<br>
                                        メールが届いたらデータの移行作業が開始されます。
                                    </p>
                                    <p class="note font-s">
                                        ※お申し込み内容に確認が必要な場合、サポートより別途「<b>※要返信※ 『サーバー移転代行』お申し込み内容のご確認</b>」のメールをお送りする場合があります。<br>
                                        こちらのメールが届いた場合は、内容をご確認のうえ、メールの返信を行ってください。
                                    </p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b06">6.作業開始</h6>
                                <div class="box_body">
                                    <p>
                                        移転元サーバーからのWebサイトデータの移行作業を実施します。<br>
                                        作業完了までの目安は、土日祝日を除く5営業日程度です。<br>
                                        作業が完了するまでの間は、サーバーパネルでの設定作業などはお控えください。
                                    </p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b07">7.作業完了</h6>
                                <div class="box_body">
                                    <p>
                                        作業が完了したら、登録メールアドレス宛に「<b>『サーバー移転代行』作業完了のご連絡</b>」のメールが届きます。<br>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、「お知らせ」より作業内容をご確認ください。<br>
                                        <p><img class="img" src="../img/faq/faq_support_daiko1.png?date=20240917" alt="「お客様へのお知らせ」をクリックしているスクリーンショット"></p>
                                    </p>
                                </div>
                            </section>
                            
                        </div>
                        
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h4 class="section_ttl" id="link-c">利用する前に必ずお読みください</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">作業完了後のご連絡について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>作業完了のご連絡はご登録メールアドレス宛にいたします</li>
                                    <li>作業実施内容の詳細、発行いたしましたアカウントのパスワード情報などは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、上部メニューの「お知らせ &gt;お客様へのお知らせ」でのみ確認することができます</li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c02">提供範囲について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>エックスサーバー レンタルサーバー各プラン「スタンダード/プレミアム/ビジネス」を本契約のお客様を対象に提供いたします</li>
                                    <li>対応可能な設定は、<a href="../price/service_server_daiko.php#daiko_list">別表</a>に定める内容に限ります</li>
                                </ul>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-c03">免責事項</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>本サービスの提供に伴い発生する損害について、弊社は責任を負いません</li>
                                    <li>お客様の環境によりましては、設定代行を承ることができない場合があります</li>
                                </ul>
                            </div>
                        </section>
                        
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