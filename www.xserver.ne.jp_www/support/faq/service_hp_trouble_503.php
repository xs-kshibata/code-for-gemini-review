<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「503 Service Temporarily Unavailable」と表示されてホームページが見られません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="同時接続数（同時アクセス数）が多い場合やCGI/PHPなどの負荷が大きい場合の一時的に表示されるエラーです。　【考えられる要因】・WEBサイトへのアクセスが多くサーバーに負荷がかかっている　・WEBサイト構成により同時接続数が…">

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
            
                <h3 class="sub-ttl">「503 Service Temporarily Unavailable」と表示されてホームページが見られません。</h3>

                <p>同時接続数（同時アクセス数）が多い場合やCGI/PHPなどの負荷が大きい場合の一時的に表示されるエラーです。</p>
                <p><strong>【考えられる要因】</strong></p>
                <ul class="list list_arrow-right">
                    <li>WEBサイトへのアクセスが多くサーバーに負荷がかかっている </li>
                    <li>WEBサイト構成により同時接続数が増えやすい構造となっている </li>
                    <li>PHP/CGIプログラムなどの負荷が大きい </li>
                    <li>PHP/CGIプログラムで誤動作が発生している</li>
                </ul>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_trouble.php" class="btn btn_gray">「Webサイト・WordPressのトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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