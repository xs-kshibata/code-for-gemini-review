<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>特定の宛先にメールが送信できず、エラーメールが送信元に届くようになりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エラーメールの内容に「blocked using」「spamhaus」「barracuda」「trendmicro」などの文言が含まれている場合、ご契約サーバーのIPアドレスが外部のRBL機関のブラックリストに登録され、メールが拒否されている可能性があります。当サポートにて解除申請を行いますので、エラーメール全文…">

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
            
                <h3 class="sub-ttl">特定の宛先にメールが送信できず、エラーメールが送信元に届くようになりました。</h3>

                <p>エラーメールの内容に「blocked using」「spamhaus」「barracuda」「trendmicro」などの文言が含まれている場合、ご契約サーバーのIPアドレスが外部のRBL機関のブラックリストに登録され、メールが拒否されている可能性があります。</p>
                <p>当サポートにて解除申請を行いますので、エラーメール全文をご記載のうえ、「<a href="../../support/support.php">サポート</a>」よりメールにてお問い合わせください。</p>
                <p>なお、解除申請後、メールが使用できるようになるまでには5〜7営業日程度かかる場合があります。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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