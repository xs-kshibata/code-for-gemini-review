<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メーリングリスト・メールマガジンを作成できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、ご利用可能です。各機能の詳細は関連マニュアルをご覧ください。">

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
            
                <h3 class="sub-ttl">メーリングリスト・メールマガジンを作成できますか？</h3>

                <p>はい、ご利用可能です。</p>
                <p>各機能の詳細はこちらをご覧ください。</p>
                <p>
                    <a class="btn btn_white mr5" href="../../manual/man_mail_mailinglist.php">メーリングリストについて<i class="ico ico_chevron-right"></i></a>
                    <a class="btn btn_white" href="../../manual/man_mail_mailmagazine.php">メールマガジンについて<i class="ico ico_chevron-right"></i></a>
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail.php" class="btn btn_gray">「メールの機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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