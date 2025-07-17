<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>禁止事項について - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜エックスサーバーの禁止事項に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">禁止事項について</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./dont_rental.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ホームページ作成会社です。有償でクライアントにスペースを貸してもいいですか？</a></li>
                        <li class="faqList__item"><a href="./dont_resale.php" class="faqList__label"><i class="ico ico_chevron-right"></i>再販は可能ですか？</a></li>
                        <li class="faqList__item"><a href="./dont_contents_stint.php" class="faqList__label"><i class="ico ico_chevron-right"></i>コンテンツに関して制限はありますか？</a></li>
                        <li class="faqList__item"><a href="./dont_cgi_stint.php" class="faqList__label"><i class="ico ico_chevron-right"></i>設置するCGIに制限はありますか？</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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