<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServerアカウント利用方法 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご契約に関する管理ツール「XServerアカウント」で提供する機能の一覧と利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">XServerアカウント</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">XServerアカウントとは</a></li>
                        <li><a href="#link-b">ログイン方法</a>
							<ul>
								<li><a href="#link-b01">画像認証（reCAPTCHA認証）が表示された場合</a></li>
								<li><a href="#link-b02">「ログイン」ボタンを押しても画面が切り替わらない場合</a></li>
							</ul>
						</li>
                        <li><a href="#link-c">XServerアカウント管理</a>
                            <ul>
                                <li><a href="#link-c01">登録情報確認・編集</a></li>
                                <li><a href="#link-c02">パスワード変更</a></li>
                                <li><a href="#link-c03">アカウントの統合</a></li>
								<li><a href="#link-c04">自動更新設定</a></li>
								<li><a href="#link-c05">プリペイド管理</a></li>
								<li><a href="#link-c06">友達紹介</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_tool_info.php">XServerアカウントに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XServerアカウントとは</h4>
                    <div class="section_body">
                        <p>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>は、エックスサーバーを含むXServer関連サービスの管理に共通して使用できるアカウントです。<br>アクセスすることで、お客様のご登録情報の確認や変更、カード自動更新設定などを行うことができます。
                        </p>

                        <p><img class="img" src="../img/manual/man_tool_info_1.png?date=20230130" alt="XServerアカウントのスクリーンショット"></p>
                        <!-- <p>XServerアカウントでは下記の操作ができます。</p> -->
                    </div>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>下記URLよりXServerアカウントへのログインが可能です。<br>
                            メールアドレス（もしくは、XServerアカウントID）とパスワードでログインをお試しください。</p>
                        <p><i class="ico ico_square-fill"></i>XServerアカウント ログインURL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>

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
							<h5 id="link-b02" class="block_ttl">「ログイン」ボタンを押しても画面が切り替わらない場合</h5>
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
                    <h4 class="section_ttl" id="link-c">XServerアカウント管理</h4>
                    <div class="section_body">
                        <p>画面右上のユーザー名をクリックし、表示された各種メニューからアクセスすることができます。</p>
                        <p class="mb40"><img class="img" src="../img/manual/man_tool_info_3.png?date=240627" alt="XServerアカウントへの遷移方法"></p>

                        <section class="block">
                            <h5 id="link-c01" class="block_ttl">登録情報確認・編集</h5>
                            <div class="block_body">
                                <p>メールアドレスや電話番号などのお客様情報の確認と編集ができます。アカウントのセキュリティ（二段階認証）もここから設定できます。<br>
                                詳しくは、<a href="man_order_change_id.php">登録情報について</a>をご参照ください。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-c02" class="block_ttl">パスワードの変更</h5>
                            <div class="block_body">
                                <p>XServerアカウントへのログインに使用するパスワードの変更ができます。</p>
                            </div>
                        </section>

                        <section class="block">
                            <h5 id="link-c03" class="block_ttl">アカウントの統合</h5>
                            <div class="block_body">
                                <p>XServerアカウントとそこに紐づくご契約を、指定のXServerアカウントに統合することができます。<br>
                                詳しくは、<a href="man_order_user_merge.php">アカウント・契約の統合</a>をご参照ください。</p>
                            </div>
                        </section>
						
                        <section class="block">
                            <h5 id="link-c04" class="block_ttl">自動更新設定</h5>
                            <div class="block_body">
                                <p>料金のお支払いについて、クレジットカードもしくは、あと払い（ペイディ）、プリペイドによる自動更新をご契約ごとに設定できます。</p>
								<p>詳しくは、<a href="man_order_pay_method_autopay.php">自動更新設定</a>をご参照ください。</p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 id="link-c05" class="block_ttl">プリペイド管理</h5>
                            <div class="block_body">
                                <p>プリペイドの残高確認・チャージができます。</p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 id="link-c06" class="block_ttl">友達紹介</h5>
                            <div class="block_body">
                                <p>お知り合いの方などをご紹介いただくと報酬が発生する「友達紹介プログラム」です。</p>
								<p>詳しくは、<a href="<?php print $SITE_URL; ?>friend.php" target="_blank">友達紹介プログラム</a>をご参照ください。</p>
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