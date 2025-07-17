<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>.htmlや.htmでSSIを動作させたいのですが、どうすればいいでしょうか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の.htaccessを設置することで、SSIを.html や .htm で動作させることが可能です。　AddHandler server-parsed .html .htm　なお、サーバー負荷とセキュリティ面からご利用の推奨はしておりません。">

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
            
                <h3 class="sub-ttl">.htmlや.htmでSSIを動作させたいのですが、どうすればいいでしょうか？</h3>

                <p>以下の.htaccessを設置することで、SSIを.html や .htm で動作させることが可能です。</p>
                <pre class="code">AddHandler server-parsed .html .htm</pre>
                <p>なお、サーバー負荷とセキュリティ面からご利用の推奨はしておりません。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssi.php" class="btn btn_gray">「SSI」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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