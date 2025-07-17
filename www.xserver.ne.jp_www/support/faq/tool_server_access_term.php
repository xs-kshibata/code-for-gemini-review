<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>アクセス解析の用語の意味がわかりません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="・訪問者…同一IPを換算しないアクセス数です。　・訪問数…アクセス数です。同一IPでも60分以上の間隔がある場合は換算されます。　・ページ…閲覧されたページ数です。　・件数…アクセスされたファイル数です。例えば、画像ファイルが…">

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
            
                <h3 class="sub-ttl">アクセス解析の用語の意味がわかりません。</h3>
                
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>訪問者</dt>
                    <dd><p>同一IPを換算しないアクセス数です。</p></dd>
                    <dt><i class="ico ico_square-fill"></i>訪問数</dt>
                    <dd><p>アクセス数です。同一IPでも60分以上の間隔がある場合は換算されます。</p></dd>
                    <dt><i class="ico ico_square-fill"></i>ページ</dt>
                    <dd><p>閲覧されたページ数です。</p></dd>
                    <dt><i class="ico ico_square-fill"></i>件数</dt>
                    <dd><p>アクセスされたファイル数です。例えば、画像ファイルが10個あるページに3回アクセスがある場合、30件となります。</p></dd>
                    <dt><i class="ico ico_square-fill"></i>バイト</dt>
                    <dd><p class="mb0">発生したデータ転送量です。</p></dd>
                </dl>

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