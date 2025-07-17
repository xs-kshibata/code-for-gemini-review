<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressを移転したらトップページ以外で404エラーが出るようになりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「パーマリンク設定」および該当の設定に伴い.htaccess上に記載される設定内容が有効でない可能性があります。ダッシュボードより「パーマリンク設定」を再度おこない、エラーが解消されるかご確認ください。">

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
            
                <h3 class="sub-ttl">WordPressを移転したらトップページ以外で404エラーが出るようになりました。</h3>

                <p>「パーマリンク設定」および該当の設定に伴い.htaccess上に記載される設定内容が有効でない可能性があります。<br>
                ダッシュボードより「パーマリンク設定」を再度おこない、エラーが解消されるかご確認ください。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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