<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>データベース - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜MySQLデータベースのご利用に関するよくある質問です。MySQLの仕様や設定方法、データベース接続ができない場合の対処法について。">

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
            
                <h3 class="sub-ttl">データベース</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_db_version.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQLのバージョンを教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_db_capacity.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQLで使用できる容量を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_db_setting.php" class="faqList__label"><i class="ico ico_chevron-right"></i>MySQLの設定はどこから行えますか？</a></li>
                        <li class="faqList__item"><a href="./service_db_phpmyadmin.php" class="faqList__label"><i class="ico ico_chevron-right"></i>phpMyAdminにログインできません。</a></li>
                        <li class="faqList__item"><a href="./service_db_expire.php" class="faqList__label"><i class="ico ico_chevron-right"></i>データベースサーバーへ接続が出来ません。</a></li>
                        <li class="faqList__item"><a href="./service_db_autoinstall_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>簡単インストールを行ったプログラムのデータベースのパスワードを確認する方法を教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_db_hp_not_show.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「データベース確立エラー」というエラーが表示されてホームページが見られません。</a></li>
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