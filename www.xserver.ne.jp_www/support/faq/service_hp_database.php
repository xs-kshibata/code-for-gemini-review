<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>データベースは使用できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="MySQL（バージョン5.0.x/5.5.x/5.7.x）、MariaDB(バージョン10.5.x)、SQLite がご利用いただけます。詳しくはマニュアルページをご覧ください。　※MySQL5.0は2015年2月10日(火)をもって、新規作成への対応を終了いたしました。">

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
            
                <h3 class="sub-ttl">データベースは使用できますか？</h3>

                <p class="mb0">MySQL（バージョン5.0.x/5.5.x/5.7.x）、MariaDB(バージョン10.5.x)、SQLite がご利用いただけます。<br>
                詳しくは<a href="../../manual/man_db_spec.php">こちら</a>をご覧ください。</p>
                <p class="note">※MySQL5.0は2015年2月10日(火)をもって、新規作成への対応を終了いたしました。</p>

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