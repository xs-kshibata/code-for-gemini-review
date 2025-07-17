<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>設定おまかせサポート | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでは、サーバー設置や各種機能の設定を弊社スタッフが作業する「設定おまかせサポート」を有償で提供しております。">

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
            
                <h3 class="sub-ttl">設定おまかせサポート</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">設定おまかせサポートとは</a></li>
                    <li><a href="#link-b">ご利用手順</a>
                        <ol>
                            <li><a href="#link-b01">1.「設定おまかせサポート」をクリック</a></li>
							<li><a href="#link-b02">2.「選択する」をクリック</a></li>
							<li><a href="#link-b03">3.希望する作業内容を選択し、必要事項を記入する</a></li>
                            <li><a href="#link-b04">4.当サポートからのメールをご確認ください</a></li>
                            <li><a href="#link-b05">5.料金をお支払いください</a></li>
                            <li><a href="#link-b06">6.当サポートでご依頼内容に基づく設定作業を実施します</a></li>
                            <li><a href="#link-b07">7.当サポートによる作業完了の連絡内容をご確認ください</a></li>
                        </ol>
                    </li>
					<li><a href="#link-c">利用する前に必ずお読みください</a>
                        <ol>
                            <li><a href="#link-c01">ご依頼内容の確認について</a></li>
                            <li><a href="#link-c02">作業完了までの時間について</a></li>
                            <li><a href="#link-c03">作業完了後のご連絡について</a></li>
                            <li><a href="#link-c04">提供範囲について</a></li>
                            <li><a href="#link-c05">免責事項</a></li>
                        </ol>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_support_daiko.php">設定おまかせサポートに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">設定おまかせサポートとは</h4>
                    <div class="section_body">
                        <p>「設定おまかせサポート」とは、お客様に代わって「Webサイトの設定」や「メールアカウント設定の追加」、「WordPressのインストール」など、サーバーアカウントへの設定作業を当サポートで代行するサービスです。</p>
                        <p>対応可能な設定の詳細は「<a href="../price/service_daiko.php">設定おまかせサポート</a>」にてご確認ください。</p>

                        <div class="msg msg_notice">
                            <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用の前に</h4>
                            <div class="msg_body">
                                「設定おまかせサポート」は、設定を依頼するサーバーアカウントの本契約後にお申し込みが可能になります。<br>
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
                                <h6 class="box_ttl" id="link-b01">1.「設定おまかせサポート」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「設定おまかせサポート」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_daiko_1.png?date=20240917" alt="「設定おまかせサポート」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「選択する」をクリック</h6>
                                <div class="box_body">
                                    <p>設定おまかせサポートを申し込みたいサーバーを選択します。</p>
                                    <p><img class="img" src="../img/manual/man_order_daiko_2.png?date=20240917" alt="「選択する」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.希望する作業内容を選択し、必要事項を記入する</h6>
                                <div class="box_body">
                                    <p>希望する作業内容を選択し、次の画面で必要事項をご入力ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_daiko_3.png?date=20240917" alt="「詳細入力画面へ進む」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.当サポートからのメールをご確認ください</h6>
                                <div class="box_body">
                                    <p>当サポートよりご登録メールアドレス宛にご依頼内容をお知らせします。<br>
                                        「設定おまかせサポート」でご依頼の作業内容に相違が無いかご確認のうえ、該当のメールに返信でその旨をお知らせください。</p>
                                    <p>当サポートにてご依頼内容に相違が無い旨の返答を確認した段階で、請求情報を発行いたします。</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>ビジネスプランで無料代行サービスをご利用の方</dt>
                                        <dd>ビジネスプランで無料代行サービスをご利用される場合は、当サポートにてご依頼内容に相違が無い旨の返答を確認した段階で、設定おまかせサポートのご依頼を正式に承ります。（6.へお進みください）</dd>
                                    </dl>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.料金をお支払いください</h6>
                                <div class="box_body">
                                    <p>上部メニューの「料金支払い」をクリックします。</p>
									<p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="「詳細入力画面へ進む」をクリックしているスクリーンショット"></p>
									<p>一覧にて、該当の請求情報をご確認いただき、料金をお支払いください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b06">6.当サポートでご依頼内容に基づく設定作業を実施します</h6>
                                <div class="box_body">
                                    <p>料金をお支払いいただいたあと、翌営業日までに受領と作業完了見込みをご連絡いたします。<br>
                                        ご連絡後、当サポートによる作業完了までの間は、サーバーパネルでの設定変更作業はお控えくださいますようお願いいたします。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b07">7.当サポートによる作業完了の連絡内容をご確認ください</h6>
                                <div class="box_body">
                                    <p>当サポートによる作業が完了いたしましたら、その旨をメールでご連絡いたします。<br>
                                        作業内容、アカウント情報などの詳細は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、上部メニューの「お知らせ &gt;お客様へのお知らせ」にてご確認ください。
									</p>
									<p><img class="img" src="../img/faq/faq_support_daiko1.png?date=20230130" alt="「お客様へのお知らせ」をクリックしているスクリーンショット"></p>
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
                            <h5 class="block_ttl" id="link-c01">ご依頼内容の確認について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>ご依頼の作業内容について、事前に当サポートよりご登録メールアドレス宛にご連絡いたします</li>
                                    <li>このメールへの返信を当サポートで確認しました時点で、「設定おまかせサポート」のご依頼を正式に承ります</li>
                                    <li>承った後にご依頼内容を変更することはできません</li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c02">作業完了までの時間について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>作業内容確認に関するお客様からのメール返答を当サポートで確認後、<a href="../price/service_daiko.php#daiko_list">別表</a>に定める期限内で実施いたします</li>
                                    <li>作業完了見込みについては、設定おまかせサポートのご依頼を正式に承った後にお知らせいたします</li>
                                    <li>作業は当サポートにて料金のお支払いを確認した後に実施いたします</li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c03">作業完了後のご連絡について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>作業完了のご連絡はご登録メールアドレス宛にいたします</li>
                                    <li>作業実施内容の詳細、発行いたしましたアカウントのパスワード情報などは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、上部メニューの「お知らせ &gt;お客様へのお知らせ」でのみ確認することができます<br><p class="mt10"><img class="img" src="../img/faq/faq_support_daiko1.png?date=20230130" alt="「お客様へのお知らせ」をクリックしているスクリーンショット"></p></li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c04">提供範囲について</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>エックスサーバー レンタルサーバー各プラン「スタンダード/プレミアム/ビジネス」を本契約のお客様を対象に提供いたします</li>
                                    <li>対応可能な設定は、<a href="../price/service_daiko.php#daiko_list">別表</a>に定める内容に限ります</li>
                                </ul>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-c05">免責事項</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>本サービスの提供に伴い発生する損害について、弊社は責任を負いません。</li>
                                    <li>お客様の環境によりましては、設定おまかせサポートを承ることができない場合があります。</li>
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