<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPress - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜エックスサーバーでWordPressを運用する際によくいただく質問です。">

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
            
                <h3 class="sub-ttl">WordPress</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_hp_wp_subdomain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サブドメインにWordPressをインストールする方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_garbled_char.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressへアクセスすると文字化けします。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_access_denied.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「WordPress管理画面へのアクセスが拒否されました」と表示されました。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_mysql.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressのMySQLユーザーとMySQLユーザーパスワードの確認方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_login.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressのダッシュボードへログインする情報が分からなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_404.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressを移転したらトップページ以外で404エラーが出るようになりました。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_ssl.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressで特定のページのみSSLを使うことは可能ですか？</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_operation_check.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressの移転に際して「動作確認URL」機能を使いましたが、動作確認ができません。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_change_domain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_measures_againstload.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPressで作ったサイトへのアクセスが増えてきました。負荷対策としてできることはありますか？</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_change_php_not_displayed.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPバージョンを切り替えてから、サイトが正常に表示されなくなりました。</a></li>
                        <li class="faqList__item"><a href="./service_hp_wp_update_not_displayed.php" class="faqList__label"><i class="ico ico_chevron-right"></i>WordPress管理画面でテーマ・プラグインを更新すると、サイトが正常に表示されなくなりました。</a></li>
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