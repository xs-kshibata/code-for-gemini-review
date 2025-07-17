<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ファイルをアップロードするためにはどうすればいいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTPソフトまたはファイルマネージャをご利用ください。FTPソフトをご利用いただく際はFTPホストの設定が必要となります。詳細な設定方法は設定マニュアルをご覧ください。">

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
            
                <h3 class="sub-ttl">ファイルをアップロードするためにはどうすればいいですか？</h3>

                <p>FTPソフトまたは<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャ</a>をご利用ください。<br>
                FTPソフトをご利用いただく際はFTPホストの設定が必要となります。<br>
                詳細な設定方法は<a href="../../manual/man_ftp_setting.php">設定マニュアル</a>をご覧ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp.php" class="btn btn_gray">「Webサイト・WordPressの機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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