<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールが受信できず、送信元に「maildir over quota」と記載されたエラーメールが届きます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「maildir over quota」は受信側のメールボックスの容量超過で、メールの配送ができない場合に届くエラーメールです。受信ができないメールアカウントにてメールボックスの容量を確保したうえで、メールの送受信をお試しください。詳しくは「メールボックスの容量がいっぱいで、メールが受信できません。」をご確認ください。">

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
            
                <h3 class="sub-ttl">メールが受信できず、送信元に「maildir over quota」と記載されたエラーメールが届きます。</h3>

                <p>「maildir over quota」は受信側のメールボックスの容量超過で、メールの配送ができない場合に届くエラーメールです。</p>
                <p>受信ができないメールアカウントにてメールボックスの容量を確保したうえで、メールの送受信をお試しください。</p>
                <p>詳しくは「<a href="./service_mail_trouble_not_receive.php" class="faq_unit_body_inter-link">メールボックスの容量がいっぱいで、メールが受信できません。</a>」をご確認ください。</p>
                
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