<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Whois - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜ドメインのWhois情報に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">Whois</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./domain_whois_change.php" class="faqList__label"><i class="ico ico_chevron-right"></i>取得したドメインのWhois情報を変更したいです。</a></li>
                        <li class="faqList__item"><a href="./domain_whois_other_name.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Whois情報が他人の名義で公開されています。</a></li>
                        <li class="faqList__item"><a href="./domain_whois_attribute.php" class="faqList__label"><i class="ico ico_chevron-right"></i>属性型JPドメインのWhoisを代理公開してほしいのですが、可能ですか？</a></li>
                        <li class="faqList__item"><a href="./domain_whois_effectiveness.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Whois情報の欄に「メールアドレスの有効性が未確認です」と表示されています。</a></li>
                        <li class="faqList__item"><a href="./tool_domain_whois.php" class="faqList__label"><i class="ico ico_chevron-right"></i>co.jpなど属性型JPドメインのWhois情報の変更方法を教えてください。</a></li>
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