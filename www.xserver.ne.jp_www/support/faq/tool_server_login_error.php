<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>IDやパスワードを入力しているのにログインが行えません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="当サービスで提供の各管理パネルでは、それぞれログインURLやログインID、ログインパスワードが異なります。　・XServerアカウント…ログインURL　https://secure.xserver.ne.jp/xapanel/login/xserver/　『ご登録メールアドレス』もしくは…">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">IDやパスワードを入力しているのにログインが行えません。</h3>
                
                <p>当サービスで提供の各管理パネルでは、それぞれログインURLやログインID、ログインパスワードが異なります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウント</dt>
                    <dd>
                        <p>ログインURL　<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>
                        <ul class="list list_arrow-right mb0">
                            <li>『ご登録メールアドレス』もしくは、『XServerアカウントID』（アルファベットと数字の組み合わせ）</li>
                            <li>「ユーザーアカウント情報」に記載の『XServerアカウントパスワード』</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネル</dt>
                    <dd>
                        <p>ログインURL　<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/server/</a></p>
                        <ul class="list list_arrow-right mb0">
                            <li>『サーバーID』（お客様にてお決めいただいた文字列）</li>
                            <li>「サーバーアカウント情報」に記載の『サーバーパスワード』</li>
                        </ul>
						<p class="note">※ご登録メールアドレス（XServerアカウントID）/ XServerアカウントパスワードでもログインすることが可能です。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ファイルマネージャ</dt>
                    <dd>
                        <p>ログインURL　<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/</a></p>
                        <p><i class="ico ico_triangle-down"></i>メインFTPアカウントの場合</p>
                        <ul class="list list_arrow-right">
                            <li>『サーバーID』（お客様にてお決めいただいた文字列）</li>
                            <li>「サーバーアカウント情報」に記載の『サーバーパスワード』</li>
                        </ul>
                        <p><i class="ico ico_triangle-down"></i>追加FTPアカウントの場合</p>
                        <ul class="list list_arrow-right mb0">
                            <li>お客様にて追加した「FTPアカウント」</li>
                            <li>FTPアカウントの追加時に指定した『FTPパスワード』</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WEBメール</dt>
                    <dd>
                        <p>ログインURL　<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                        <ul class="list list_arrow-right mb0">
                            <li>お客様にて追加した「メールアカウント」(「@」以降も含めたメールアドレスと同一)</li>
                            <li>メールアカウントの追加時に指定した『メールパスワード』</li>
                        </ul>
                    </dd>
                </dl>
                <p>全角で入力した場合や「pdf12345 」のようにスペースが含まれる場合、「1（いち）」と「l（エル）」、「0（ゼロ）」と「O（オー）」などの入力に誤りがある場合は、ログインを行うことができませんのでご注意ください。</p>
                <p>各管理パネル上よりお客様にてパスワードの変更を行った場合は、変更後の文字列がパスワードとなります。</p>
                <p>各管理パネルのログインID、ログインパスワードがご不明な場合は、よくある質問「<a href="faq_service_missing.php">サーバーサービスについて &gt; パスワード等の紛失</a>」をご参照ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_server.php" class="btn btn_gray">「サーバーパネル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>