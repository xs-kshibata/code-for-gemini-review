<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WEBメール(スマートフォン・タブレット) | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">WEBメール(スマートフォン・タブレット)</h3>
                
                <p>「WEBメール」は、ご利用になる端末に合わせて最適化された表示に切り替わります。<br>
                Windows PCやMacなどのパソコン端末でWEBメールをご利用の場合は、マニュアル「<a href="man_tool_mail.php">WEBメール</a>」をご参照ください。</p>
                
				<!--<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">ログイン方法</a>
						<ul>
							<li><a href="#link-a01">「ホスト接続に失敗しました」と表示されてしまう場合</a></li>
						</ul>
                    </li>
					<li><a href="#link-b">各種機能と利用方法</a></li>
				</ul>
				</div>-->
                <div class="border border--gray mt30">
                    <p class="link mb0"><a href="man_tool_mail_sp_old.php">旧WEBメールをお使いの方はこちら</a><i class="ico ico_chevron-right"></i></p>
                </div>
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-a">ログイン方法</h4>
                    <div class="section_body">
						<p>
							下記URLよりメールパネルへのログインが可能です。<br>
							メールアドレスとメールアドレス作成時にお決めいただいたパスワードでログインをお試しください。
						</p>
						<p>
							<i class="ico ico--squareFill"></i>メールパネル ログインURL<br>
							<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a>
						</p>
                        <p>ログインすると、下記画面が表示されます。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_3.png?date=250331" alt="WEBメールのスクリーンショット"></p>
                                                
                        <p>「WEBメールにログインする」をタップすると、受信箱が表示されます。</p>
					</div>

					<h3 class="block_ttl" id="link-a01">「ホスト接続に失敗しました」と表示されてしまう場合</h3>
					<div class="section_body">
						<p>
							ログインを試しているメールアドレスが、当サーバーを参照していない可能性があります。<br>
							詳細については以下をご確認ください。
						</p>
						<p>よくある質問：<span class="link"><a href="../support/faq/tool_mail_access_error.php">「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</a></span></p>
					</div>

                    <dl class="dl">
                        <dt><i class="ico ico--squareFill"></i>メールクライアントについて</dt>
                        <dd>
                            <p>メールクライアントの仕様については下記マニュアルをご参照ください。</p>
                            <a href="https://cloudmail.xserver.ne.jp/manual/xserver" target="_blank" class="btn btn_white">メールクライアントマニュアル <i class="ico ico_new-window"></i></a>
                        </dd>
                    </dl>

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