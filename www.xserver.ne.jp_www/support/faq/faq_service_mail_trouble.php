<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールトラブル - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜メールの送受信に際して発生したトラブルに関するよくある質問です。「送信できなくなった場合」「受信できなくなった場合」やメールソフトのご利用に際して警告が表示される場合など。">

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
            
                <h3 class="sub-ttl">トラブル</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_trouble_send.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールが送信できません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_reception.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールが受信できません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_err_mail_sender_gmail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Gmailへメールが送信できません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_transfer.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールの転送設定をしましたが、転送先に届きません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_not_receive.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールボックスの容量がいっぱいで、メールが受信できません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_method_receive.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールボックスの容量がいっぱいでメールが受信できなかった場合、届かなかったメールはあとから確認できますか？</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_spam.php" class="faqList__label"><i class="ico ico_chevron-right"></i>配信したメールマガジンの件名に[SPAM]という文字列が付与されます。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_id_desired.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールソフトでID、パスワードを求められる。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_not_know_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールアカウントのパスワードがわかりません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_not_send.php" class="faqList__label"><i class="ico ico_chevron-right"></i>出張、旅行等で日本国外にきた途端メールが送信できなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_warning.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールを送信するときにコモンネーム（CN）や証明書の警告が表示されます。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>身に覚えのないメールのエラーが頻繁に戻ってくるようになりました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_not_receive_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールが受信できず、送信元に「maildir over quota」と記載されたエラーメールが届きます。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_ssl_certificate.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_imap_trash.php" class="faqList__label"><i class="ico ico_chevron-right"></i>IMAPのごみ箱（Trashフォルダ）に移動したメールが消えました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_webmail_disappeared.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WEBメールから受信メールが消えてしまいました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_err_mail_sender.php" class="faqList__label"><i class="ico ico_chevron-right"></i>特定の宛先にメールが送信できず、エラーメールが送信元に届くようになりました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_spf_dkim_dmarc_set_notification.php" class="faqList__label"><i class="ico ico_chevron-right"></i>大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_phishing_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>フィッシングメールに記載のURLにアクセスし、ログイン情報を入力してしまいました。</a></li>
                        <li class="faqList__item"><a href="./service_mail_trouble_mail_thunderbird.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Thunderbirdで送受信ができなくなりました。</a></li>
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