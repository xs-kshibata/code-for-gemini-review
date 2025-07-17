<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>PHP - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜PHPのご利用に関するよくある質問です。利用可能なPHPのバージョンや設定の変更方法について。">

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
            
                <h3 class="sub-ttl">PHP</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_php_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPは使用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_php_version.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPのバージョンを教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_php_rewrite_version.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPのバージョンが書き換わってしまいます。</a></li>
                        <li class="faqList__item"><a href="./service_php_multibyte.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPにはマルチバイトのモジュールは組み込まれていますか？</a></li>
                        <li class="faqList__item"><a href="./service_php_phpini_conf_change.php" class="faqList__label"><i class="ico ico_chevron-right"></i>php.iniの設定を変更したいのですが可能ですか？</a></li>
                        <li class="faqList__item"><a href="./service_php_normal_action.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPが正常に動作しません。</a></li>
                        <li class="faqList__item"><a href="./service_php_500.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPを設置すると「500 Internal Server Error」が表示されます。</a></li>
                        <li class="faqList__item"><a href="./service_php_garbled_char.php" class="faqList__label"><i class="ico ico_chevron-right"></i>PHPが文字化けしてしまう。</a></li>
                        <li class="faqList__item"><a href="./service_php_action_html.php" class="faqList__label"><i class="ico ico_chevron-right"></i>.htmlや.htmでPHPを動作させたいのですが、どうすればいいでしょうか？</a></li>
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