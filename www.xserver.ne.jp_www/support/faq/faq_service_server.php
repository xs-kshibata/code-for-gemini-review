<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー仕様 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜サーバーの仕様に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">サーバー仕様</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_server_os.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバーのOSは何ですか？</a></li>
                        <li class="faqList__item"><a href="./service_server_spec.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバーのスペックを教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_server_datacenter.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバー（データセンター）はどこにありますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_backup.php" class="faqList__label"><i class="ico ico_chevron-right"></i>バックアップ体制はどうなっていますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_stop.php" class="faqList__label"><i class="ico ico_chevron-right"></i>障害などでサーバーが止まることはどれくらいの頻度でありますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_transfer_amount.php" class="faqList__label"><i class="ico ico_chevron-right"></i>転送量課金はなしとありますが、転送量がどれだけ増えてもいいのですか？</a></li>
                        <li class="faqList__item"><a href="./service_server_name_server.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ネームサーバーとは何ですか？</a></li>
                        <li class="faqList__item"><a href="./service_server_cron.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Cronは使用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_ssh.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SSHは使えますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_telnet.php" class="faqList__label"><i class="ico ico_chevron-right"></i>telnetは使えますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_htaccess.php" class="faqList__label"><i class="ico ico_chevron-right"></i>.htaccessは利用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_mod_rewrite.php" class="faqList__label"><i class="ico ico_chevron-right"></i>mod_rewriteは使えますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_number.php" class="faqList__label"><i class="ico ico_chevron-right"></i>利用しているサーバーの番号はどこで確認できますか？</a></li>
                        <li class="faqList__item"><a href="./service_server_program_introduction.php" class="faqList__label"><i class="ico ico_chevron-right"></i>外部プログラムの導入は可能ですか？</a></li>
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