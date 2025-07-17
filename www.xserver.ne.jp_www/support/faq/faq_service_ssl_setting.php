<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSL申込・設定方法 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜独自SSLの利用手順や設定方法に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">申込・設定方法</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./ssl_setting_2way.php" class="faqList__label"><i class="ico ico_chevron-right"></i>オプション独自SSLを契約したいが、コモンネームをwwwあり・なしどちらでも利用したい。</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_name_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>コモンネームの文字数に制限はありますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_issue_finish.php" class="faqList__label"><i class="ico ico_chevron-right"></i>独自SSLの発行が完了しました。SSLページを利用するにはどうすればよいですか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_upload.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SSL用のホームページデータはどこにアップロードすればよいですか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_not_exist.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_keymark_not_display.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SSLページへのアクセスで鍵マークが正常に表示されません。鍵マークをクリックすると「このページには安全でない他のリソースが含まれています。」と表示されます。</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_ip_www.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「独自IPアドレスあり」で、「www」ありのコモンネームで独自SSLを申し込みました。「www」なしのアドレスでSSLページへアクセスするにはどうすればよいですか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_operation.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SSL証明書のサーバーへのインストールなど、独自SSLを利用するための設定作業は必要ですか。</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_uninstall.php" class="faqList__label"><i class="ico ico_chevron-right"></i>インストール済みの独自SSLを削除(アンインストール)することはできますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_otherserver.php" class="faqList__label"><i class="ico ico_chevron-right"></i>オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_incomplete.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「SSLサーバー証明書(コモンネーム名) 更新未完了のお知らせ」という件名のメールが届きました。</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_resend_email.php" class="faqList__label"><i class="ico ico_chevron-right"></i>オプション独自SSLのメール認証で承認メールの受信ができません。再送できますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_setting_update_failed.php" class="faqList__label"><i class="ico ico_chevron-right"></i>無料独自SSLの自動更新が失敗し、手動更新もできません。</a></li>
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