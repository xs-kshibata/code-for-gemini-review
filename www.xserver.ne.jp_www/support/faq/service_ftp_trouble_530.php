<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPソフトで「530」というエラーが表示され、接続ができなくなりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTPソフト(またはFTP機能を含むソフト)側の仕様で数分間操作を行わずにいると次回に操作を行った際に自動的に「再接続」が行われる、または一定時間ごとに自動的に「再接続」が行われる場合があります。再接続を繰り返すと【同時接続数】の…">

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
            
                <h3 class="sub-ttl">FTPソフトで「530」というエラーが表示され、接続ができなくなりました。</h3>

                <p>FTPソフト(またはFTP機能を含むソフト)側の仕様で数分間操作を行わずにいると次回に操作を行った際に自動的に「再接続」が行われる、または一定時間ごとに自動的に「再接続」が行われる場合があります。<br>
                再接続を繰り返すと【同時接続数】の上限に達し、サーバーへの接続が行えなくなります。</p>
                <p>その場合は一旦該当ソフトを終了させ、15分程度時間を置けば解消されます。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_trouble.php" class="btn btn_gray">「ファイル転送(FTP)のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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