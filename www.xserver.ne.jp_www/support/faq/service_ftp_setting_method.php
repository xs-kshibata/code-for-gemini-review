<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPの設定情報を教えてください。- よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTPソフトの設定情報は以下をご確認ください。メインFTPアカウントの場合…FTPサーバー名（ホスト名）：sv***.xserver.jp　ユーザー名（アカウント名）：サーバーID　パスワード：サーバー設定完了メールに記載されて…">

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
            
                <h3 class="sub-ttl">FTPの設定情報を教えてください。                </h3>

                <p>FTPソフトの設定情報は以下をご確認ください。                </p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メインFTPアカウントの場合</dt>
                    <dd>
                        <ol class="ol ol_margin">
                            <li>FTPサーバー名（ホスト名）<br>
                                sv***.xserver.jp</li>
                            <li>ユーザー名（アカウント名）<br>
                                サーバーID</li>
                            <li class="mb0">パスワード<br>
                                サーバーアカウント設定完了メールに記載されているFTPパスワード<br>
                                （サーバーパネルへのログインパスワードと同一のもの）</li><br>
                            <p>※ サーバーアカウント設定完了メールの「作成したホームページデータのアップロードについて（FTP情報）」からご確認いただけます。 </p>
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
                
                <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_ftp_setting.php">FTPソフトの設定</a>

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