<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「設定おまかせサポート」の利用方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServerアカウント内、エックスサーバー契約管理ページの「設定おまかせサポート」メニューよりご利用ください。詳しいご利用方法については、マニュアル「設定おまかせサポートのお申し込み」をご参照ください。また、設定おまかせサポートについてご不明な…">

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
            
                <h3 class="sub-ttl">「設定おまかせサポート」の利用方法を教えてください。</h3>
                
                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページの「設定おまかせサポート」メニューよりご利用ください。</p>
				<p>詳しいご利用方法については、マニュアル「<a href="../../manual/man_order_daiko.php">設定おまかせサポート</a>」をご参照ください。</p>

                    <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support_daiko.php" class="btn btn_gray">「設定おまかせサポートについて」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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