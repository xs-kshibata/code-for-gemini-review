<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>初期状態で作成されているフォルダやファイルを削除してしまいました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="初期状態で作成されているフォルダなどは非常に重要なデータを含んでいますので削除しないようご注意ください。なお、誤って削除してしまった場合は、ドメインの初期化機能で再作成が可能です。">

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
            
                <h3 class="sub-ttl">初期状態で作成されているフォルダやファイルを削除してしまいました。</h3>

                <p>初期状態で作成されているフォルダなどは非常に重要なデータを含んでいますので削除しないようご注意ください。</p>
                <p>なお、誤って削除してしまった場合は、ドメインの初期化機能で再作成が可能です。</p>
                <p>詳細は<a href="../../manual/man_domain_reset.php">マニュアル</a>をご覧ください。</p>

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