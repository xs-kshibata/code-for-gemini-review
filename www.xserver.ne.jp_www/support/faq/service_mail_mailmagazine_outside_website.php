<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webサイトは外部サービスで運用していますが、メールマガジンは利用できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールマガジンの管理画面に対象ドメインのWebサイトを使用するため、Webサーバーが当サービスを参照していない場合、メールマガジンは利用できません。別のドメインや、初期ドメイン(サーバーID.xsrv.jp)にて、メールマガジンを利用されることをご検討ください。">

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
            
                <h3 class="sub-ttl">Webサイトは外部サービスで運用していますが、メールマガジンは利用できますか？</h3>

                <p>メールマガジンの管理画面に対象ドメインのWebサイトを使用するため、Webサーバーが当サービスを参照していない場合、メールマガジンは利用できません。</p>
                <p>別のドメインや、初期ドメイン(サーバーID.xsrv.jp)にて、メールマガジンを利用されることをご検討ください。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailmagazine.php" class="btn btn_gray">「メールマガジン機能」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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