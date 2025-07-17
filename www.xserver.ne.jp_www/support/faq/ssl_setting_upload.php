<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSL用のホームページデータはどこにアップロードすればよいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="独自SSLのご利用に際しては、SSL接続ではないアクセスのときと同一のフォルダが参照されます。そのため、SSLのご利用に際して、ホームページデータをアップロードし直す必要はありません。　例：「www.example.com」に対してSSLを適用…">

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
            
                <h3 class="sub-ttl">SSL用のホームページデータはどこにアップロードすればよいですか？</h3>
                
                <p>独自SSLのご利用に際しては、SSL接続ではないアクセスのときと同一のフォルダが参照されます。<br>
                そのため、SSLのご利用に際して、ホームページデータをアップロードし直す必要はありません。</p>
                <p class="note">
                例：「www.example.com」に対してSSLを適用した場合、「https://www.example.com/」のアクセスに際して、http://www.example.com/ と同一のデータを参照します。
                </p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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