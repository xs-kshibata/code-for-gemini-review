<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>MySQLの設定はどこから行えますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="データベースの作成、データベースユーザの作成、ユーザへの権限付与はサーバーパネルの「MySQL設定」から行えます。テーブル操作やデータの直接の操作は、サーバーパネルの「phpMyAdmin」から操作が可能です。">

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
            
                <h3 class="sub-ttl">MySQLの設定はどこから行えますか？</h3>

                <p>データベースの作成、データベースユーザの作成、ユーザへの権限付与はサーバーパネルの「<a href="../../manual/man_db_setting.php">MySQL設定</a>」から行えます。</p>
                <p>テーブル操作やデータの直接の操作は、サーバーパネルの「<a href="../../manual/man_db_myadmin.php">phpMyAdmin</a>」から操作が可能です。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_db.php" class="btn btn_gray">「データベース」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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