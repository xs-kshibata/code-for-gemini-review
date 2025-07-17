<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>フィッシングメールに記載のURLにアクセスし、ログイン情報を入力してしまいました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="フィッシングメールに記載のURLにアクセスされてしまった場合は、ご利用端末側でウィルスチェックをしていただき、管理ツール（XServerアカウントやサーバーパネルなど）のパスワード変更をおこなってください。また、XServerアカウントとサーバーパネルに「二段階認証」…">

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
            
                <h3 class="sub-ttl">フィッシングメールに記載のURLにアクセスし、ログイン情報を入力してしまいました。</h3>

                <p>フィッシングメールに記載のURLにアクセスされてしまった場合は、ご利用端末側でウィルスチェックをしていただき、管理ツール（XServerアカウントやサーバーパネルなど）のパスワード変更をおこなってください。</p>

                <p>また、XServerアカウントとサーバーパネルに「<a href="../../manual/man_order_twostepauth.php">二段階認証</a>」の導入もご検討ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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