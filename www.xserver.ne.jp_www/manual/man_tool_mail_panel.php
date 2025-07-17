<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールパネル利用方法 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜メールアカウントのパスワード・転送設定や、Webメールへのログインなどを行う「管理パネル」のご案内です。">

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
            
                <h3 class="sub-ttl">メールパネル</h3>

				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">メールパネルとは</a></li>
					<li><a href="#link-b">ログイン方法</a>
						<ul>
							<li><a href="#link-b01">画像認証（reCAPTCHA認証）について</a></li>
							<li><a href="#link-b02">「ログインする」ボタンを押しても画面が切り替わらない場合</a></li>
						</ul>
					</li>
					<li><a href="#link-c">利用方法</a>
						<ul>
							<li><a href="#link-c01">WEBメール画面へのログイン</a></li>
							<li><a href="#link-c02">パスワード変更</a></li>
							<li><a href="#link-c03">転送設定</a></li>
						</ul>
					</li>
				</ul>
				</div>
    
                <section class="section">
                	<a id="whats" name="whats"></a>
                    <h4 class="section_ttl" id="link-a">メールパネルとは</h4>
                    <div class="section_body">
                        <p>メールアカウントのパスワード変更や、WEBメール（※）へのログインなどを行う管理パネルです。<br>
                            ※WEBメールはブラウザを使用してメール送受信などを行うシステムです。</p>
                    </div>
                </section>
                
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>下記URLよりメールパネルへのログインが可能です。<br>
                        メールアドレスとメールアドレス作成時にお決めいただいたパスワードでログインをお試しください。</p>
                        <p><i class="ico ico_square-fill"></i>メールパネル　ログインURL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                    </div>
					<h5 id="link-b01" class="block_ttl">画像認証（reCAPTCHA認証）について</h5>
					<div class="section_body">
						<p>
							お使いの環境やアクセス状況等によって、画像認証（reCAPTCHA認証）が表示される場合があります。<br>
							画像が表示された場合は、画面上部に表示される質問内容についてご回答をお願いいたします。
						</p>
						<p>画像認証(reCAPTCHA認証)画面例</p>
						<p><img class="img" src="../img/manual/man_tool_server_2.png" alt="reCAPTCHA画面の例"></p>
					</div>

					<h5 id="link-b02" class="block_ttl">「ログインする」ボタンを押しても画面が切り替わらない場合</h5>
					<div class="section_body">
						<p>
							以下のサイトに対してJavaScriptが無効になっている場合、ログインができません。</br>
							https://*.xserver.ne.jp</br>
							https://www.google.com</br>
							https://www.gstatic.com</br>
							</br>
							JavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。
						</p>
					</div>
                </section>
                
                <section class="section">
                	<a id="webmail" name="webmail"></a>
                    <h4 class="section_ttl" id="link-c">利用方法</h4>
                    <div class="section_body">
                        <p>ログインすると、下記画面が表示されます。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_panel_1.png?date=250331" alt="メールパネルのスクリーンショット"></p>
                        
                        <p>メールパネルでは以下の操作が行えます。</p>
                        <div class="serialblock mt20">
                            <section class="block">
                                <h4 class="block_ttl" id="link-c01">WEBメール画面へのログイン</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_2.png?date=250331" class="img" alt="WEBメール画面へのログイン"></p>
                                    <p>「ログイン」をクリックすると、WEBメールへログインすることができます。<br>
                                        使用方法については「<a href="man_tool_mail.php">WEBメール</a>」をご確認ください。</p>
                                </div>
                            </section>
                            <section class="block">
                                <h4 class="block_ttl" id="link-c02">パスワード変更</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_3.png?date=210706" class="img" alt="パスワード変更"></p>
                                    <p>メールアカウントのパスワードを変更することができます。<br>
                                        現在のパスワードと新しいパスワードを入力し、「確認する」→「パスワードを変更する」とクリックしてください。</p>
                                </div>
                            </section>

                            <section class="block">
                                <h4 class="block_ttl" id="link-c03">転送設定</h4>
                                <div class="block_body">
                                    <p><img src="../img/manual/man_tool_mail_panel_4.png?date=210705" class="img" alt="転送設定"></p>
                                    <p>転送先メールアドレスの設定や、メールボックスの設定ができます。</p>
                                    <dl class="dl">
                                        <dt>メールボックス設定</dt>
                                        <dd>転送する際に、転送元のメールアドレスに受信メールを残すか残さないかの設定ができます。<br>
                                            ※「残さない」と設定した場合、転送元のメールアドレスではメールの確認ができず、転送先にのみメールが届くこととなります。あらかじめご注意ください。
                                        </dd>
                                        <dt>転送先メールアドレス追加</dt>
                                        <dd>転送先となるメールアドレスを追加します。</dd>
                                        <dt>転送先メールアドレス一覧</dt>
                                        <dd>転送先として設定したメールアドレスの確認、削除ができます。</dd>
                                    </dl>
                                </div>
                            </section>
                        </div>
                        
                    </div>   
                </section>
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