<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーパネルにログインできません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServerアカウントIDまたはパスワードに誤りがある可能性があります。パスワードがご不明な場合は、「XServerアカウントパスワード」再設定フォームより再設定が可能です。ご登録メールアドレスまたはXServerアカウントIDを入力してパスワードの…">

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
            
                <h3 class="sub-ttl">サーバーパネルにログインできません。</h3>
                
                <p>XServerアカウントIDまたはパスワードに誤りがある可能性があります。</p>
                <p>
                    パスワードがご不明な場合は、<a href="<?php print $REISSUE_INFO_URL; ?>">「XServerアカウントパスワード」再設定フォーム</a>より再設定が可能です。<br>
                    ご登録メールアドレスまたはXServerアカウントIDを入力してパスワードの再設定を行ってください。
                </p>
                <p class="note">
                    ※なお、サーバーパネルへはメインFTPアカウントのユーザー名とパスワード（サーバーIDとサーバーパスワード）でもログインすることが可能です。
                    メインFTPアカウントパスワードがご不明な場合は、<a href="<?php print $REISSUE_SERVER_URL; ?>">「サーバーパスワード」再設定フォーム</a>より再設定が可能です。
                </p>

                 <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_tool_server.php" class="btn btn_gray">「サーバーパネル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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