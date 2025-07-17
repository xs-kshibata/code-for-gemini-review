<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>設置するCGIに制限はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="当サービスでは高負荷なCGIスクリプトの設置はできません。負荷の大きさ・設置数・アクセス数などから総合的に判断してご利用をお断りしたり運用方法の改善をお願いすることがあります。共用サーバであることをご理解いただき常識的な…">

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
            
                <h3 class="sub-ttl">設置するCGIに制限はありますか？</h3>

                <p>当サービスでは高負荷なCGIスクリプトの設置はできません。負荷の大きさ・設置数・アクセス数などから総合的に判断してご利用をお断りしたり運用方法の改善をお願いすることがあります。<br>共用サーバであることをご理解いただき常識的なご利用をお願いいたします。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_dont.php" class="btn btn_gray">「禁止事項について」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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