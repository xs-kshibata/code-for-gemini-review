<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPソフトでアクセス可能なディレクトリを指定できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、可能です。サブFTPアカウントの追加にて、アカウントを作成していただければ、特定のディレクトリのみへのアクセスを許可することができます。　※FTPアカウントを第三者に提供する場合は、事前に関連マニュアルの内容をご参照ください。">

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
            
                <h3 class="sub-ttl">FTPソフトでアクセス可能なディレクトリを指定できますか？</h3>

                <p>はい、可能です。<a href="../../manual/man_ftp_add.php">サブFTPアカウントの追加</a>にて、アカウントを作成していただければ、特定のディレクトリのみへのアクセスを許可することができます。（※）</p>
                <p class="note">※FTPアカウントを第三者に提供する場合は、事前に<a href="../../manual/resale.php">こちら</a>の内容をご参照ください。</p>


                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp.php" class="btn btn_gray">「ファイル転送(FTP)の機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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