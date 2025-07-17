<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ウィルスチェック - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜メールの受信時に自動的に適用されるウイルスチェック機能に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">ウィルスチェック</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_viruscheck_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>アンチウィルス機能を利用したい</a></li>
                        <li class="faqList__item"><a href="./service_mail_viruscheck_transfer.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メール転送設定をしている場合、転送されるメールもアンチウィルス機能は有効ですか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_viruscheck_mailinglist_mailmagazine.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メーリングリスト・メールマガジンで利用するメールアドレスも、アンチウィルス機能は有効ですか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_viruscheck_detection_notification.php" class="faqList__label"><i class="ico ico_chevron-right"></i>件名が「ウィルス検出通知/VIRUS DETECTION」のメールを受け取りました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_viruscheck_not_remember_send_detection_notification.php" class="faqList__label"><i class="ico ico_chevron-right"></i>送信した覚えのないメールですが、ウィルスが検出されたとの通知を受け取りました。</a></li>
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