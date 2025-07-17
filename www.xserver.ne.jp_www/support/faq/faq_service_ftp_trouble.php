<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ファイル転送(FTP)のトラブル - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜FTPソフトのご利用に際して発生したトラブルに関するよくある質問です。FTPソフトのご利用時にエラーが表示される場合やファイルが削除できない場合、ファイル一覧が表示されない場合など。">

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
            
                <h3 class="sub-ttl">トラブル</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_ftp_trouble_hp_not_show.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ファイルをアップロードしましたが、ホームページが表示されません。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_not_upload.php" class="faqList__label"><i class="ico ico_chevron-right"></i>アップロードするも「このWEBスペースにはまだHPがアップロードされていません」という画面が表示されます。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_ftpsoft_delete.php" class="faqList__label"><i class="ico ico_chevron-right"></i>FTPソフトでファイルやフォルダが削除できません。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_connection_expire.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ファイルの転送中に接続が切れてしまいます。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_530.php" class="faqList__label"><i class="ico ico_chevron-right"></i>FTPソフトで「530」というエラーが表示され、接続ができなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_initial_folder_delete.php" class="faqList__label"><i class="ico ico_chevron-right"></i>初期状態で作成されているフォルダやファイルを削除してしまいました。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_not_filelist.php" class="faqList__label"><i class="ico ico_chevron-right"></i>FTPソフトで突然ファイル一覧が表示されなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_ftp_trouble_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>何度かエラーが発生したあと、正しいパスワードでもFTP接続ができなくなってしまいました。</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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