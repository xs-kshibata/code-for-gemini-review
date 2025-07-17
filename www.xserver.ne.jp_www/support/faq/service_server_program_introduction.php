<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>外部プログラムの導入は可能ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「動作確認済みプログラム」に記載されている外部プログラムについては、動作環境を満たしており導入が可能です。それ以外の外部プログラムについては、当サービスでは精査をおこなっておりませんため、サーバーの無料お試し期間などで利用を…">

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
            
                <h3 class="sub-ttl">外部プログラムの導入は可能ですか？</h3>
                
                <p>「<a href="../../manual/man_install_outside_program.php">動作確認済みプログラム</a>」に記載されている外部プログラムについては、動作環境を満たしており導入が可能です。
                    それ以外の外部プログラムについては、当サービスでは精査をおこなっておりませんため、サーバーの無料お試し期間などで利用をお試しください。</p>
                <p>なお、インストールにroot権限が必要なプログラムはご利用いただけません。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_server.php" class="btn btn_gray">「サーバー仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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