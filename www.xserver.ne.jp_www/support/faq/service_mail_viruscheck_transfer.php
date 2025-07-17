<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メール転送設定をしている場合、転送されるメールもアンチウィルス機能は有効ですか。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい。有効です。アンチウィルス機能でウィルスを検知した場合、ウィルスを検知して削除した旨を【送信元(From)メールアドレス宛】にメールで通知をします。">

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
            
                <h3 class="sub-ttl">メール転送設定をしている場合、転送されるメールもアンチウィルス機能は有効ですか。</h3>

                <p>はい。有効です。</p>
                <p>アンチウィルス機能でウィルスを検知した場合、ウィルスを検知して削除した旨を【送信元(From)メールアドレス宛】にメールで通知をします。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_viruscheck.php" class="btn btn_gray">「ウィルスチェック」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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