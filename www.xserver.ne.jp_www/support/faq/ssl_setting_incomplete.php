<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「SSLサーバー証明書(コモンネーム名) 更新未完了のお知らせ」という件名のメールが届きました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="無料独自SSLの自動更新に失敗した場合に、該当の通知をお送りしております。引き続きご利用いただくためには、お客様にて更新手続きが必要です。失敗原因・更新手続き方法については、マニュアル「証明書の自動更新について」をご覧ください。">

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
            
                <h3 class="sub-ttl">「SSLサーバー証明書(コモンネーム名) 更新未完了のお知らせ」という件名のメールが届きました。</h3>
                
                <p>無料独自SSLの自動更新に失敗した場合に、該当の通知をお送りしております。</p>
                <p>引き続きご利用いただくためには、お客様にて更新手続きが必要です。</p>
                <p>失敗原因・更新手続き方法については、マニュアル「<a href="../../manual/man_server_ssl.php#link-c">証明書の自動更新について</a>」をご覧ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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