<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネル上で「ドメイン設定」「サブドメイン設定」「動作確認URL」および「SSL設定」を設定してからの時間経過が短い場合に発生します。30分から最大1時間程度お待ちいただき、ブラウザのキャッシュをクリアしたうえで…">

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
            
                <h3 class="sub-ttl">「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。</h3>

                <p>サーバーパネル上で「ドメイン設定」「サブドメイン設定」「動作確認URL」および「SSL設定」を設定してからの時間経過が短い場合に発生します。</p>
                <p>30分から最大1時間程度お待ちいただき、ブラウザのキャッシュをクリアしたうえで、該当アドレスへのアクセスが可能かご確認ください。</p>

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