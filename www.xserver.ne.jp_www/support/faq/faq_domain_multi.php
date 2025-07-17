<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>マルチドメイン - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜独自ドメインの運用・マルチドメイン機能に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">マルチドメイン</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./domain_multi_japanese.php" class="faqList__label"><i class="ico ico_chevron-right"></i>日本語ドメイン（漢字などを使った独自ドメイン）は使えますか？</a></li>
                        <li class="faqList__item"><a href="./domain_multi_owndomain_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サーバーID.xsrv.jpではなく、取得した独自ドメインを利用したいです。</a></li>
                        <li class="faqList__item"><a href="./domain_multi_otherservice.php" class="faqList__label"><i class="ico ico_chevron-right"></i>他社で取得したドメインを利用できますか？</a></li>
                        <li class="faqList__item"><a href="./domain_multi_subdomain_hp.php" class="faqList__label"><i class="ico ico_chevron-right"></i>サブドメイン毎に異なるホームページを表示できますか？</a></li>
                        <li class="faqList__item"><a href="./domain_multi_infinity.php" class="faqList__label"><i class="ico ico_chevron-right"></i>マルチドメインとは、ドメインが無制限に使えるのですか？</a></li>
                        <li class="faqList__item"><a href="./domain_multi_name_change.php" class="faqList__label"><i class="ico ico_chevron-right"></i>取得済みのドメイン名を変更したいです。</a></li>
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