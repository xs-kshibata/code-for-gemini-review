<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>PHPのバージョンを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="下記のバージョンがご利用いただけます。　PHP 8.3.x / PHP 8.2.x / PHP 8.1.x / PHP 8.0.x / PHP 7.4.x / PHP 7.3.x / PHP 7.2.x / PHP 7.1.x / PHP 7.0.x / PHP 5.6.x / PHP 5.5.x / PHP 5.4.x / PHP 5.3.3 / PHP 5.1.6…">

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
            
                <h3 class="sub-ttl">PHPのバージョンを教えてください。</h3>

                <p>下記のバージョンがご利用いただけます。</p>
                <p>PHP 8.3.x / PHP 8.2.x / PHP 8.1.x / PHP 8.0.x / PHP 7.4.x / PHP 7.3.x / PHP 7.2.x / PHP 7.1.x / PHP 7.0.x / PHP 5.6.x / PHP 5.5.x / PHP 5.4.x / PHP 5.3.3  / PHP 5.1.6</p>

                <p>設定ドメインごとに動作するPHPバージョンを選択することが可能です。</p>
                <p>手順などの詳細は、「<a href="../../manual/man_program_php_ver.php">PHPのバージョンについて</a>」をご参照ください。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_php.php" class="btn btn_gray">「PHP」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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