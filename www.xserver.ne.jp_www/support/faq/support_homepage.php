<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ホームページの制作はしてもらえるのですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="お客様の予算・目的・納期に合わせて日本全国5,000以上のホームページ会社から、最適な会社をご紹介する窓口を提供しています。会社のホームページやブランディングサイトなど、ご希望のホームページが実現できるようお手伝いします。詳しくは…">

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
            
                <h3 class="sub-ttl">ホームページの制作はしてもらえるのですか？</h3>
                
                <p>お客様の予算・目的・納期に合わせて日本全国5,000以上のホームページ会社から、最適な会社をご紹介する窓口を提供しています。会社のホームページやブランディングサイトなど、ご希望のホームページが実現できるようお手伝いします。<br>詳しくは「<a href="<?= $SITE_URL;?>consulting/" target="_blank">ホームページ制作相談</a><i class="ico ico_new-window"></i>」をご覧ください。
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_support.php" class="btn btn_gray">「サポートについて」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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