<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールの機能・仕様 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜メールの機能・仕様に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">機能・仕様</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_transmission.php" class="faqList__label"><i class="ico ico_chevron-right"></i>1通あたり何MBまでメール送受信が可能ですか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_transfer.php" class="faqList__label"><i class="ico ico_chevron-right"></i>受信メールを別のメールアドレスへ自動転送する方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_mail_587port.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サブミッションポート（587ポート）は利用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_virus_check.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ウィルスチェック機能はありますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_catchall.php" class="faqList__label"><i class="ico ico_chevron-right"></i>キャッチオールの機能はありますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_per_domain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ドメインごとにメールアカウントを作成できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_mailmagazine.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メーリングリスト・メールマガジンを作成できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_transmission_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールを大量に送信したいのですが、送信件数に制限はありますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_dkim.php" class="faqList__label"><i class="ico ico_chevron-right"></i>DKIM認証は利用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_gmail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Gmail「メール送信者のガイドライン」に対応していますか？</a></li>
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