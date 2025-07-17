<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールの設定方法 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜メールソフトの設定方法やサーバーパネルで提供する「メール振り分け」機能などのご利用に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">設定方法</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_setting_what.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールソフトへの設定方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_sort.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メール振り分け設定について詳しく教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_reception_refusal.php" class="faqList__label"><i class="ico ico_chevron-right"></i>特定のメールアドレスから送られてくるメールを受信拒否したい。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_ssl.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールでSSL（暗号化）通信を行いたい。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_mail_server.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールソフトへの設定で、送受信のメールサーバーをホスト名(sv***.xserver.jp)ではなく、初期ドメイン(***.xsrv.jp)や、独自ドメインを指定することは可能ですか。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_domain_auth.php" class="faqList__label"><i class="ico ico_chevron-right"></i>メールアカウント作成時に、ドメイン認証を求められる。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_add.php" class="faqList__label"><i class="ico ico_chevron-right"></i>取得したドメインが表示されず、メールアカウントの追加ができません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_setup.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Webサイトはエックスサーバー、メールはGoogle Workspaceで利用する際の設定方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_upper_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「一定数を超えると追加することができません」と表示され、メールアカウントの追加ができません。</a></li>
                        <li class="faqList__item"><a href="./service_mail_setting_mail_spam.php" class="faqList__label"><i class="ico ico_chevron-right"></i>迷惑メールの対策方法を教えてください。</a></li>
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