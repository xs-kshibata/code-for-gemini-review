<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>何度かエラーが発生したあと、正しいパスワードでもFTP接続ができなくなってしまいました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではセキュリティ対策の一環として、同一IPアドレスから短時間に複数回のエラーが発生した場合に、該当IPアドレスからのFTP接続を一定時間制限しています。FTP接続の制限は最大1日程度で解除されますので、しばらくお待ち…">

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
            
                <h3 class="sub-ttl">何度かエラーが発生したあと、正しいパスワードでもFTP接続ができなくなってしまいました。</h3>

                <p>エックスサーバーではセキュリティ対策の一環として、同一IPアドレスから短時間に複数回のエラーが発生した場合に、該当IPアドレスからのFTP接続を一定時間制限しています。</p>
                <p>FTP接続の制限は最大1日程度で解除されますので、しばらくお待ちいただき、再度FTP接続が可能かご確認ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_trouble.php" class="btn btn_gray">「ファイル転送(FTP)のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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