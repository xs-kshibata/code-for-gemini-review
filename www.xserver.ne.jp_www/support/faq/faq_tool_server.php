<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーパネル - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜サーバーパネルのご利用に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">サーバーパネル</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_missing_serverpanel_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバーパネルのパスワードを忘れてしまいました。</a></li>
                        <li class="faqList__item"><a href="./tool_server_login.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバーパネルにログインできません。</a></li>
                        <li class="faqList__item"><a href="./tool_server_login_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>IDやパスワードを入力しているのにログインが行えません。</a></li>
                        <li class="faqList__item"><a href="./tool_server_settingdomain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>設定対象ドメインとは何ですか？</a></li>
                        <li class="faqList__item"><a href="./tool_server_setting_cron.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Cronの設定方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./tool_server_access_setting.php" class="faqList__label"><i class="ico ico_chevron-right"></i>アクセス解析の設定は可能ですか？</a></li>
                        <li class="faqList__item"><a href="./tool_server_access_term.php" class="faqList__label"><i class="ico ico_chevron-right"></i>アクセス解析の用語の意味がわかりません。</a></li>
                        <li class="faqList__item"><a href="./tool_server_access_referrer.php" class="faqList__label"><i class="ico ico_chevron-right"></i>アクセス解析で「検索キーワード別」が件数取得ができません。</a></li>
                        <li class="faqList__item"><a href="./tool_server_login_javascript.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ログインボタンを押しても反応がありません。</a></li>
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