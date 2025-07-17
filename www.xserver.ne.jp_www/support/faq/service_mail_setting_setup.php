<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webサイトはエックスサーバー、メールはGoogle Workspaceで利用する際の設定方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="Webサイトはエックスサーバー、メールはGoogle Workspaceをご利用される場合は、Google Workspace(旧G Suite)をお使いいただく場合をご参照いただきDNSレコード設定を行ってください。※ネームサーバーが他社を…">

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
            
                <h3 class="sub-ttl">Webサイトはエックスサーバー、メールはGoogle Workspaceで利用する際の設定方法を教えてください。</h3>

                <p>Webサイトはエックスサーバー、メールはGoogle Workspaceをご利用される場合は、「<a href="https://www.xserver.ne.jp/manual/man_domain_dns_setting_google_apps.php"> Google Workspace(旧G Suite)をお使いいただく場合</a>」をご参照いただきDNSレコード設定を行ってください。<br>
                    ※ネームサーバーが他社を参照している場合は、エックスサーバー指定のものに変更してください。</p>

                <p>参考：<a href="https://www.xserver.ne.jp/manual/man_domain_namesever_setting.php#link-a">ネームサーバーについて</a></p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">「メールの設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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