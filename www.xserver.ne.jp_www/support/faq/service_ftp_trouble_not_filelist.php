<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPソフトで突然ファイル一覧が表示されなくなりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネル内「FTP制限設定」にて、現在ご利用のグローバルIPが許可されたものかどうかご確認ください。現在ご利用のIPが許可IP一覧に含まれていない場合、ご利用のIPを追加した上で再度FTP接続をご確認ください。">

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
            
                <h3 class="sub-ttl">FTPソフトで突然ファイル一覧が表示されなくなりました。</h3>

                <p>サーバーパネル内「FTP制限設定」にて、現在ご利用のグローバルIPが許可されたものかどうかご確認ください。</p>
                <p>現在ご利用のIPが許可IP一覧に含まれていない場合、ご利用のIPを追加した上で再度FTP接続をご確認ください。</p>
                <p><strong class="yellow">マニュアル関連項目：</strong><br>
                <a href="../../manual/man_ftp_id.php">FTPについて &gt; FTP制限設定</a>をご覧ください。</p>

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