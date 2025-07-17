<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールは外部サービスで運用していますが、メールマガジンは利用できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="対象ドメインのWebサーバーが当サービスを参照していれば、メールは外部サービスで利用をしている場合でも、メールマガジンの利用が可能です。メールマガジンの管理画面には、対象ドメインのWebサイトを使用します。">

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
            
                <h3 class="sub-ttl">メールは外部サービスで運用していますが、メールマガジンは利用できますか？</h3>

                <p>対象ドメインのWebサーバーが当サービスを参照していれば、メールは外部サービスで利用をしている場合でも、メールマガジンの利用が可能です。</p>
                <p>メールマガジンの管理画面には、対象ドメインのWebサイトを使用します。</p>
                
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