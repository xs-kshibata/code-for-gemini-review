<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WEBメール - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜WEBメールのご利用に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">WEBメール</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./tool_mail_login.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「メールアドレス／パスワードが誤っています」と表示され、WEBメールへログインできません。</a></li>
                        <li class="faqList__item"><a href="./tool_mail_access_error.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</a></li>
                        <li class="faqList__item"><a href="./tool_mail_garbled_text.php" class="faqList__label"><i class="ico ico_chevron-right"></i>受信メールが文字化けしている。</a></li>
                        <li class="faqList__item"><a href="./tool_mail_login_javascript.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ログインボタンを押しても反応がありません。</a></li>
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