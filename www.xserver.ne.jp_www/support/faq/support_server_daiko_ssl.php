<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>移転元のサイトでSSL（https）を有効にしている場合、サーバー移転代行を依頼した際にSSLは設定されますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転代行を承った際に移転元にてSSLの設定を確認した場合、当サービスにて「他社サーバーでのWeb認証」による無料独自SSLの設定を行います。ただ、対象のWebサイトの運用状況によりSSLの設定ができない場合があります。当サービスにて無料独自SSLの設定が…">

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
            
                <h3 class="sub-ttl">移転元のサイトでSSL（https）を有効にしている場合、サーバー移転代行を依頼した際にSSLは設定されますか？</h3>
                
                <p>サーバー移転代行を承った際に移転元にてSSLの設定を確認した場合、当サービスにて「他社サーバーでのWeb認証」による無料独自SSLの設定を行います。</p>
                <p>ただ、対象のWebサイトの運用状況によりSSLの設定ができない場合があります。<br>
                当サービスにて無料独自SSLの設定ができなかった場合は、お客様にて「他社ネームサーバーでのDNS認証」による設定を行っていただくか、運用サーバーをエックスサーバーに切り替えた後でSSLの設定を行ってください。</p>
                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_server_ssl.php">無料独自SSL設定</a></p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support_server_daiko.php" class="btn btn_gray">「サーバー移転代行について」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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