<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>アクセス解析で「検索キーワード別」が件数取得ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="2016年頃からブラウザと検索エンジンの仕様変更より、アクセス解析に必要なリファラー情報が徐々に取得できないようになっているためです。Googleの検索結果の場合、Google Search Consoleの「検索アナリティクス」から、検索キーワードに…">

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
            
                <h3 class="sub-ttl">アクセス解析で「検索キーワード別」が件数取得ができません。</h3>
                
                <p>2016年頃からブラウザと検索エンジンの仕様変更より、<br>
                アクセス解析に必要なリファラー情報が徐々に<br>
                取得できないようになっているためです。<br>
                <br>
                Googleの検索結果の場合、Google Search Consoleの「検索アナリティクス」から、<br>
                検索キーワードについてご確認をお願いいたします。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_server.php" class="btn btn_gray">「サーバーパネル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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