<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>エックスサーバー契約管理 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご契約に関する管理ツール「エックスサーバー契約管理」で提供する機能の一覧と利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">エックスサーバー契約管理</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">「エックスサーバー契約管理」ページとは</a></li>
						<li><a href="#link-b">ログイン方法</a>
							<ul>
								<li><a href="#link-b01">画像認証（reCAPTCHA認証）が表示された場合</a></li>
								<li><a href="#link-b02">「ログイン」ボタンを押しても画面が切り替わらない場合</a></li>
							</ul>
						</li>
                        <li><a href="#link-c">エックスサーバー契約管理</a>
                            <ul>
                                <li><a href="#link-c01">トップページ</a></li>
                                <li><a href="#link-c02">各種特典お申し込み</a></li>
                                <li><a href="#link-c03">プラン変更</a></li>
                                <li><a href="#link-c04">設定おまかせサポート</a></li>
                                <li><a href="#link-c07">サーバー移転代行</a></li>
                                <li><a href="#link-c05">新サーバー簡単移行</a></li>
                                <li><a href="#link-c06">Whois初期値設定</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-d">料金支払い</a>
                            <ul>
                                <li><a href="#link-d01">お支払い/請求書発行</a></li>
                                <li><a href="#link-d02">お支払い報告フォーム</a></li>
                                <li><a href="#link-d03">お支払い履歴/受領書発行</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-e">お知らせ</a>
                            <ul>
                                <li><a href="#link-e01">お客様へのお知らせ</a></li>
                                <li><a href="#link-e02">サービスニュース</a></li>
                                <li><a href="#link-e03">メンテナンス情報</a></li>
                                <li><a href="#link-e04">障害情報</a></li>
                            </ul>
                        </li>
						
                        <li><a href="#link-f">サーバー</a>
                            <ul>
								<li><a href="#link-f01">契約情報</a></li>
                                <li><a href="#link-f02">各種特典お申し込み</a></li>
                                <li><a href="#link-f03">契約更新・料金支払い</a></li>
                                <li><a href="#link-f04">プラン変更</a></li>
                                <li><a href="#link-f05">設定おまかせサポート</a></li>
                                <li><a href="#link-f07">サーバー移転代行</a></li>
                                <li><a href="#link-f06">新サーバー簡単移行</a></li>
                            </ul>
                        </li>
						
                        <li><a href="#link-g">ドメイン</a>
                            <ul>
                                <li><a href="#link-g01">契約情報</a></li>
                                <li><a href="#link-g02">契約更新・料金支払い</a></li>
                                <li><a href="#link-g03">ネームサーバー設定</a></li>
								<li><a href="#link-g04">DNSレコード設定</a></li>
								<li><a href="#link-g05">Whois情報設定</a></li>
								<li><a href="#link-g06">レジストラロック設定</a></li>
                            </ul>
                        </li>
						
                        <li><a href="#link-h">SSL証明書</a>
                            <ul>
                                <li><a href="#link-h01">契約情報</a></li>
								<li><a href="#link-h02">契約更新・料金支払い</a></li>
                            </ul>
                        </li>
						

                        <li><a href="#link-i">サポート</a>
                            <ul>
                                <li><a href="#link-i01">マニュアル</a></li>
                                <li><a href="#link-i02">よくある質問</a></li>
                                <li><a href="#link-i03">サポートお問い合わせ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">「エックスサーバー契約管理」ページとは</h4>
                    <div class="section_body">
                        <p>
                            「エックスサーバー契約管理」ページは、サーバやドメイン、SSL証明書の各種設定など、サーバ運営に必要な各種作業を行う管理画面です。<br>
                            ログインすることで、ご契約中のサーバー・ドメイン・SSLのプランや利用期限など、契約情報の確認や料金のお支払いなどを行うことができます。
                        </p>

                        <p><img class="img" src="../img/manual/man_tool_xserver_1.png?date=20240917" alt="エックスサーバー契約管理ページのスクリーンショット"></p>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>下記URLからログインすることでアクセスが可能です。<br>メールアドレス（XServerアカウントIDでも可）とパスワードでログインしてください。</p>
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>

						<section class="block mt50">
							<h5 id="link-b01" class="block_ttl">画像認証（reCAPTCHA認証）が表示された場合</h5>
							<div class="block_body">
								<p>
									お使いの環境やアクセス状況等によって、画像認証（reCAPTCHA認証）が表示される場合があります。<br>
									画像が表示された場合は、画面上部に表示される質問内容についてご回答をお願いいたします。
								</p>
								<p>
									画像認証(reCAPTCHA認証)画面例
								</p>
								<p><img class="img" src="../img/manual/man_tool_info_2.png" alt="reCAPTCHA画面の例"></p>
							</div>
						</section>

						<section class="block mt50">
							<h5 id="link-b02" class="block_ttl">「ログインする」ボタンを押しても画面が切り替わらない場合</h5>
							<div class="block_body">
								<p>
									以下のサイトに対してJavaScriptが無効になっている場合、ログインができません。<br>
								</p>
								<p>
									https://*.xserver.ne.jp<br>
									https://www.google.com<br>
									https://www.gstatic.com<br>
								</p>
								<p>JavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。</p>
							</div>
						</section>
                    </div>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-c">「エックスサーバー契約管理」ページ</h4>
                    <div class="section_body">

                        <section class="block">
                            <h5 id="link-c01" class="block_ttl">トップページ</h5>
                            <div class="block_body">
                                <p>サーバやドメイン、SSL証明書のご契約状況の確認や各種設定、各種サービスのお申し込みなどが行えます。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c02" class="block_ttl">各種特典お申し込み</h5>
							<div class="block_body">
								<p>ご契約特典・キャンペーン特典のお申し込みを行うことができます。</p>
								<dl class="dl">
									<dt><i class="ico ico_square-fill"></i>独自ドメイン永久無料特典</dt>
									<dd>契約特典として、独自ドメイン永久無料特典の申請が可能です。<br>詳しくは、<a href="man_order_present_domain.php">独自ドメイン永久無料特典</a>をご参照ください。</dd>
								</dl>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>独自ドメイン永久無料特典（キャンペーン特典）</dt>
                                    <dd>「ドメインプレゼントキャンペーン」実施期間中にサーバーのお申し込みを行われたキャンペーン対象者は、申請が可能です。<br>詳しくは、<a href="man_order_campaign_domain.php">独自ドメイン永久無料特典（キャンペーン特典）</a>をご参照ください。
                                    </dd>
                                </dl>
                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>独自ドメイン1年無料特典</dt>
                                    <dd>エックスサーバーをご契約のお客様は独自ドメイン1年無料特典の申請が可能です。<br>詳しくは、<a href="man_order_oneyear_domain.php">独自ドメイン1年無料特典</a>をご参照ください。
                                    </dd>
                                </dl>
							</div>
                        </section>

                        <section class="block">
                            <h5 id="link-c03" class="block_ttl">プラン変更</h5>
                            <div class="block_body">
                                <p>サーバーアカウントのプラン変更が可能です。<br>
                                詳しくは、<a href="man_order_change_plan.php">プランの変更</a>をご参照ください。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c04" class="block_ttl">設定おまかせサポート</h5>
                            <div class="block_body">
                                <p>弊社エンジニアスタッフが設定に関する作業を代行する「<a href="../price/service_daiko.php">設定おまかせサポート</a>」のお申し込みを行うことができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-c07" class="block_ttl">サーバー移転代行</h5>
                            <div class="block_body">
                                <p>弊社エンジニアスタッフが移転に関する作業を代行する「<a href="../price/service_server_daiko.php">サーバー移転代行</a>」のお申し込みを行うことができます。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c05" class="block_ttl">新サーバー簡単移行</h5>
                            <div class="block_body">
                                <p>最新サーバー環境への移行を行うことができます。<br>詳しくは、<a href="man_order_servertransfer_intro.php">新サーバー簡単移行</a>をご参照ください。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c06" class="block_ttl">Whois初期値設定</h5>
                            <div class="block_body">
                                <p>Whois情報の設定・確認ができます。<br>詳しくは、<a href="man_member_setting_whois.php">Whois情報設定</a>をご参照ください。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
	
				<section class="section">
                    <h4 class="section_ttl" id="link-d">料金支払い</h4>
                    <div class="section_body">

                        <section class="block">
                            <h5 id="link-d01" class="block_ttl">お支払い/請求書発行</h5>
                            <div class="block_body">
                                <p>サーバー・ドメイン・SSLのご利用料金のお支払い手続きを行うことができます。<br>
                                支払い方法は、クレジットカード・コンビニエンスストア・銀行振込み・ペイジー・あと払い（ペイディ）・プリペイドから選択可能です。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-d02" class="block_ttl">お支払い報告フォーム</h5>
                            <div class="block_body">
                                <p>複数の請求情報に対し、合算して振り込みを行った場合や、<br>
                                    同じ金額の請求情報が複数存在しており、その一方にのみ振込をされた場合は、<br>
                                    お支払い報告をお願いしています。<br>
                               		詳しくは、<a href="man_order_pay_report.php">お支払い報告</a>をご参照ください。
								</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-d03" class="block_ttl">お支払い履歴/受領書発行</h5>
                            <div class="block_body">
                                <p>過去にお支払いいただいた履歴の確認ができます。<br>
                                詳しくは、<a href="man_order_pay_history.php">お支払い履歴</a>をご参照ください。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-e">お知らせ</h4>
                    <div class="section_body">

                        <section class="block">
                            <h5 id="link-e01" class="block_ttl">お客様へのお知らせ</h5>
                            <div class="block_body">
                                <p>お客様への個別のお知らせを確認することができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-e02" class="block_ttl">サービスニュース</h5>
                            <div class="block_body">
                                <p>エックスサーバーのニュースを確認することができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-e03" class="block_ttl">メンテナンス情報</h5>
                            <div class="block_body">
                                <p>メンテナンス情報を確認することができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-e04" class="block_ttl">障害情報</h5>
                            <div class="block_body">
                                <p>障害情報を確認することができます。</p>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->
	
				<section class="section">
                    <h4 class="section_ttl" id="link-f">サーバー</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 id="link-f01" class="block_ttl">契約情報</h5>
                            <div class="block_body">
                                <p>ご契約状況の確認やプランの変更、設定おまかせサポート・サーバー移転代行のお申し込み、解約手続きなどが行えます。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-f02" class="block_ttl">各種特典お申し込み</h5>
							<div class="block_body">
								<p>ご契約特典・キャンペーン特典のお申し込みを行うことができます。</p>
							</div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-f03" class="block_ttl">契約更新・料金支払い</h5>
                            <div class="block_body">
                                <p>サーバー・ドメイン・SSLのご利用料金のお支払い手続きを行うことができます。<br>
                                支払い方法は、クレジットカード・コンビニエンスストア・銀行振込み・ペイジー・あと払い（ペイディ）・プリペイドから選択可能です。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-f04" class="block_ttl">プラン変更</h5>
                            <div class="block_body">
                                <p>サーバーアカウントのプラン変更が可能です。<br>
                                詳しくは、<a href="man_order_change_plan.php">プランの変更</a>をご参照ください。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-f05" class="block_ttl">設定おまかせサポート</h5>
                            <div class="block_body">
                                <p>弊社エンジニアスタッフが設定に関する作業を代行する「<a href="../price/service_daiko.php">設定おまかせサポート</a>」のお申し込みを行うことができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-f07" class="block_ttl">サーバー移転代行</h5>
                            <div class="block_body">
                                <p>弊社エンジニアスタッフが移転に関する作業を代行する「<a href="../price/service_server_daiko.php">サーバー移転代行</a>」のお申し込みを行うことができます。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-f06" class="block_ttl">新サーバー簡単移行</h5>
                            <div class="block_body">
                                <p>最新サーバー環境への移行を行うことができます。<br>詳しくは、<a href="man_order_servertransfer_intro.php">新サーバー簡単移行</a>をご参照ください。</p>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->
	
				<section class="section">
                    <h4 class="section_ttl" id="link-g">ドメイン</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 id="link-g01" class="block_ttl">契約情報</h5>
                            <div class="block_body">
                                <p>ご契約状況の確認、解約手続きなどが行えます。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-g02" class="block_ttl">契約更新・料金支払い</h5>
                            <div class="block_body">
                                <p>サーバー・ドメイン・SSLのご利用料金のお支払い手続きを行うことができます。<br>
                                支払い方法は、クレジットカード・コンビニエンスストア・銀行振込み・ペイジー・あと払い（ペイディ）・プリペイドから選択可能です。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-g03" class="block_ttl">ネームサーバー設定</h5>
                            <div class="block_body">
                                <p>ネームサーバーの設定を変更することができます。<br>詳しくは、<a href="man_domain_namesever_setting.php">ネームサーバーの設定</a>をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-g04" class="block_ttl">DNSレコード設定</h5>
                            <div class="block_body">
                                <p>DNSレコードの確認・設定を行うことができます。<br>詳しくは、<a href="man_domain_dns_setting.php">DNSレコードの編集</a>をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-g05" class="block_ttl">Whois情報設定</h5>
                            <div class="block_body">
                                <p>Whois情報の変更ができます。<br>詳しくは、<a href="man_member_setting_whois.php">Whois情報設定</a>をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-g06" class="block_ttl">レジストラロック設定</h5>
                            <div class="block_body">
                                <p>レジストラロックの設定を行うことができます。<br>詳しくは、<a href="man_domain_register_lock.php">レジストラロック</a>をご参照ください。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
	
				<section class="section">
                    <h4 class="section_ttl" id="link-h">SSL証明書</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 id="link-h01" class="block_ttl">契約情報</h5>
                            <div class="block_body">
                                <p>ご契約状況の確認、取得申請や解約手続きなどが行えます。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-h02" class="block_ttl">契約更新・料金支払い</h5>
                            <div class="block_body">
                                <p>サーバー・ドメイン・SSLのご利用料金のお支払い手続きを行うことができます。<br>
                               支払い方法は、クレジットカード・コンビニエンスストア・銀行振込み・ペイジー・あと払い（ペイディ）・プリペイドから選択可能です。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->

                
                <section class="section">
                    <h4 class="section_ttl" id="link-i">サポート</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 id="link-i01" class="block_ttl">マニュアル</h5>
                            <div class="block_body">
                                <p>サポートマニュアルへのリンクです。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-i02" class="block_ttl">よくある質問</h5>
                            <div class="block_body">
                                <p>よくある質問へのリンクです。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-i03" class="block_ttl">お問い合わせ</h5>
                            <div class="block_body">
                                <p>当サポートへの「お問い合わせフォーム」をご用意しております。</p>
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