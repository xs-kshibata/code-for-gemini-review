<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メーリングリスト機能 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜メーリングリスト機能のご利用時によくある質問です。メーリングリストそのものの仕様に関するご質問や、メーリングリストの使用時に発生したトラブルに関するご質問など。">

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
            
                <h3 class="sub-ttl">メーリングリスト機能</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メーリングリストを作成できる件数に上限はありますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_address_registration.php" class="faqList__label"><i class="ico ico_chevron-right"></i>作成したメーリングリストにユーザー(メールアドレス)を登録する方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_address_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>作成したメーリングリストに登録可能なユーザー(メールアドレス)に上限はありますか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_subdomain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サブドメインを利用したメーリングリストを作成することはできますか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_outside_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールは外部サービスで運用していますが、メーリングリストは利用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_outside_website.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Webサイトは外部サービスで運用していますが、メーリングリストは利用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_send_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メーリングリストで配信するメールの送受信数に上限はありますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_trial.php" class="faqList__label"><i class="ico ico_chevron-right"></i>お試し期間中にメーリングリスト機能を利用することはできますか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_external.php" class="faqList__label"><i class="ico ico_chevron-right"></i>外部のメールアドレスからメーリングリストへメールを配信する方法を教えてください。</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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