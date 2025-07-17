<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ニュース | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」からのお知らせです。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <h3 class="ttl"><span class="label">ニュース</span></h3>

        <section class="headlines">
            
            <div class="headlines_body">
                <div class="border border_blue">
                    <ul class="list list_arrow-right">
                        <li><a href="<?php print $SITE_URL; ?>support/information_phishing.php">エックスサーバーを装ったフィッシングメールにご注意ください</a></li>
                    </ul>
                </div>
                <?php include("../newsman/create_news_list.php") ;?>
            </div>
            <!-- /.headlines_body -->
            
        </section>
        <!-- /.headlines -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>