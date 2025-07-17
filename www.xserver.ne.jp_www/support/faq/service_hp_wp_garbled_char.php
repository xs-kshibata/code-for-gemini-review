<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressへアクセスすると文字化けします。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="PHPのバージョンを切り替える事で改善する可能性があります。サーバーパネルの「PHP Ver.切り替え」より、PHPのバージョンを推奨の『PHP7.4.x』へ変更し、表示が可能かどうかご確認ください。">

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
            
                <h3 class="sub-ttl">WordPressへアクセスすると文字化けします。</h3>

                <p>PHPのバージョンを切り替える事で改善する可能性があります。<br>
                サーバーパネルの「<a href="../../manual/man_program_php_ver.php">PHP Ver.切り替え</a>」より、PHPのバージョンを推奨の『PHP7.4.x』へ変更し、表示が可能かどうかご確認ください。</p>
                
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