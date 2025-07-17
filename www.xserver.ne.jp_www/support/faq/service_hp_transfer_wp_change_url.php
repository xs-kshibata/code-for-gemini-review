<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>運用中のWordPressサイトのURLを変更できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではドメインごとにホームページ公開フォルダが異なっており、これを変更することはできません。そのため、WordPressのサイトのURLを変更する場合は、以下の内容に沿って作業が必要です...">

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
            
                <h3 class="sub-ttl">運用中のWordPressサイトのURLを変更できますか？</h3>

                <p>エックスサーバーではドメインごとにホームページ公開フォルダが異なっており、これを変更することはできません。<br>
                そのため、WordPressのサイトのURLを変更する場合は、以下の内容に沿って作業が必要です。</p>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>同一サーバー内の場合</dt>
                    <dd>「<a href="../../manual/man_install_copy_word.php" target="_blank">WordPressのサイトコピー機能</a>」にて、移行したいドメイン名にWordPressをコピーしていただくことでURLの変更が可能です。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>他社サーバーからのサーバー移転の場合/異なるエックスサーバー同士の場合</dt>
                    <dd><a href="../../manual/man_install_transfer_wp.php" target="_blank">WordPress簡単移行</a>にて、移行したいドメイン名にWordPressをコピーしていただくことでURLの変更が可能です。</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_transfer_wp.php" class="btn btn_gray">「WordPress簡単移行」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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