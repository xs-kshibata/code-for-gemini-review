<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="独自SSLの設定完了からの時間経過が短い場合に一時的に表示されます。30分から最大1時間程度お待ちいただき、ブラウザのキャッシュをクリアしたうえで、SSLページへのアクセスが可能かご確認ください。">

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
            
                <h3 class="sub-ttl">SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。</h3>
                
                <p>独自SSLの設定完了からの時間経過が短い場合に一時的に表示されます。</p>
                <p>30分から最大1時間程度お待ちいただき、ブラウザのキャッシュをクリアしたうえで、SSLページへのアクセスが可能かご確認ください。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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