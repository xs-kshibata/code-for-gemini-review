<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>契約・料金のトラブル - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜契約・料金のトラブルに関するよくある質問ページです。">

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
            
                <h3 class="sub-ttl">トラブル</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./contract_new_sms.php" class="faqList__label"><i class="ico ico_chevron-right"></i>SMS認証・電話認証がうまくいかず、申し込みができません。</a></li>
                        <li class="faqList__item"><a href="./contract_new_setup_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「エックスサーバー 設定完了のお知らせ」のメールを紛失してしまいました。</a></li>
                        <li class="faqList__item"><a href="./contract_new_registered_mail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「ご希望のメールアドレスは過去に登録されたことがあるため、登録することはできません。」と表示され、申し込みができません。</a></li>
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