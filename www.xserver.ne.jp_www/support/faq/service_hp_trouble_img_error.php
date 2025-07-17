<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ホームページの画像が×となってしまい、うまく表示されません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="アップロードが正しく行えていない、ホームページデータの記述に誤りがあるなどの可能性があります。下記項目をご確認下さい。　【考えられる要因】・画像ファイルが対象ドメインの[ public_html ]内にアップロードされていない　・ホームページの…">

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
            
                <h3 class="sub-ttl">ホームページの画像が×となってしまい、うまく表示されません。</h3>

                <p>アップロードが正しく行えていない、ホームページデータの記述に誤りがあるなどの可能性があります。<br>
                下記項目をご確認下さい。</p>
                <p><strong>【考えられる要因】</strong></p>
                <ul class="list list_arrow-right">
                    <li>画像ファイルが対象ドメインの[ public_html ]内にアップロードされていない</li>
                    <li>ホームページのデータ内の画像のリンクやパスの記述に誤りがある</li>
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