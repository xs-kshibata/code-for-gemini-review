<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTP情報がわからなくなりました。アカウント名やパスワードはどこで確認できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メインFTPアカウントのパスワードがご不明な場合は、「サーバーパスワード」再設定フォームよりパスワードを再設定してください。サブFTPアカウントのパスワードがご不明な場合は、サーバーパネル「サブFTPアカウント設定」よりパスワードを…">

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
            
                <h3 class="sub-ttl">FTP情報がわからなくなりました。アカウント名やパスワードはどこで確認できますか？</h3>

                <p>FTP情報は下記を参考にしてください。<br>
                メインFTPアカウントのパスワードがご不明な場合は、<a href="<?php print $REISSUE_SERVER_URL; ?>">「サーバーパスワード」再設定フォーム</a>よりパスワードを再設定してください。</p>
                <p>サブFTPアカウントのパスワードがご不明な場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>「サブFTPアカウント設定」よりパスワードを再設定してください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メインFTPアカウントの場合</dt>
                    <dd>
                        <ol class="ol ol_margin">
                            <li>FTPサーバー名（ホスト名）<br>
                                sv***.xserver.jp</li>
                            <li>ユーザー名（アカウント名）<br>
                                サーバーID</li>
                            <li class="mb0">パスワード<br>
                                サーバー設定完了メールに記載されているFTPパスワード<br>
                                （サーバーパネルへのログインパスワードと同一のもの）</li>
                        </ol>
                    </dd>
                </dl>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サブFTPアカウントの場合</dt>
                    <dd>
                        <ol class="ol ol_margin">
                            <li>FTPサーバー名（ホスト名）<br>
                                sv***.xserver.jp</li>
                            <li>ユーザー名（アカウント名）<br>
                                test@example.com</li>
                            <li class="mb0">パスワード<br>
                                サブFTPアカウントに設定したパスワード</li>
                        </ol>
                    </dd>
                </dl>
                               
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_setting.php" class="btn btn_gray">「ファイル転送(FTP)の設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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