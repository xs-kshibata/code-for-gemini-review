<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WEBメール利用方法 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ブラウザからメールの送受信が行える「WEBメール」で提供する機能の一覧と利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">WEBメール</h3>

				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">WEBメールとは</a></li>
					<li><a href="#link-b">ログイン方法</a></li>
                    <li><a href="#link-c">各種機能と利用方法</a></li>
				</ul>
				</div>

				<aside class="msg">
					<h6 class="msg_ttl"><i class="ico ico_circle"></i>スマートフォン・タブレットなどの携帯端末でWEBメールをご利用の場合</h6>
					<div class="msg_body">
						<p>「WEBメール」は、ご利用の端末に合わせて最適化した表示へ自動的に切り替わります。<br>
							スマートフォン・タブレットなどの携帯端末でWEBメールをご利用の場合は、以下のマニュアルをご参照ください。</p>
						<p class="mb0">マニュアル「<a href="man_tool_mail_sp.php">WEBメール(スマートフォン・タブレット)</a>」</p>
					</div>
				</aside>
    
                <section class="section">
                	<a id="whats" name="whats"></a>
                    <h4 class="section_ttl" id="link-a">WEBメールとは</h4>
                    <div class="section_body">
                        <p>WEBメールはブラウザを使用してメール送受信などを行うシステムです。</p>
                    </div>
                </section>
                
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>ログイン時に使用する情報は以下です。</p>
                        <p>・メールアドレス<br>
                        ・メールアドレス作成時に設定したメールパスワード</p>

                        <p>※WEBメールはメールアドレス単位でログインが可能です。<br>
                        　サーバーアカウントやドメイン単位のログインはできません。</p>
                        <p>WEBメールのログインフォームよりログインしてください。</p>
                        <p> ■WEBメール ログインURL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                    </div>
                </section>
                <section class="section">
                	<a id="webmail" name="webmail"></a>
                    <h4 class="section_ttl" id="link-c">各種機能と利用方法</h4>
                    <div class="border border--gray mt30">
                        <p class="link mb0"><a href="man_tool_mail_old.php">旧WEBメールをお使いの方はこちら</a><i class="ico ico_chevron-right"></i></p>
                    </div>
                    <div class="section_body">
                        
                    <p>ログインすると、下記画面が表示されます。</p>
						<p><img class="img" src="../img/manual/man_tool_mail_panel_1.png?date=250331" alt="WEBメールのスクリーンショット"></p>
                        <aside class="msg msg_caution">
                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「WEBメール」をクリック後「ホスト接続に失敗しました」と表示されてしまう場合</h4>
                                <div class="msg__body">
                                    <p>ログインを試しているメールアドレスが、当サーバーを参照していない可能性があります。<br>
                                        詳細については以下をご確認ください。</p>
                                    <p>よくある質問：<span class="link"><a href="../support/faq/tool_mail_access_error.php">「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</a></span></p>
                                </div>
                            </aside>
                        <p>「WEBメールにログインする」をクリックすると、受信箱が表示されます。</p>
                        <dl class="dl">
                            <dt><i class="ico ico--squareFill"></i>メールクライアントについて</dt>
                            <dd>
                                <p>メールクライアントの仕様については下記マニュアルをご参照ください。</p>
                                <a href="https://cloudmail.xserver.ne.jp/manual/xserver" target="_blank" class="btn btn_white">メールクライアントマニュアル <i class="ico ico_new-window"></i></a>
                            </dd>
                        </dl>
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