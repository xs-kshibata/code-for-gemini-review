<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressのMySQLユーザーとMySQLユーザーパスワードの確認方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="［wp-config.php］ファイルにて確認可能です。［wp-config.php］ファイルをテキストエディタ（Tera Pad等）で開き、下記項目をご確認ください。">

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
            
                <h3 class="sub-ttl">WordPressのMySQLユーザーとMySQLユーザーパスワードの確認方法を教えてください。</h3>

                <p>WordPressのMySQLユーザーとMySQLユーザーパスワードは、以下の方法でご確認いただけます。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPress簡単インストールでインストールしたWordpressの場合</dt>
                    <dd>サーバーパネルにログインをしていただき、「WordPress簡単インストール」内のインストール済みWordPress一覧からご確認ください。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPress簡単インストール以外で作成したWordPressの場合</dt>
                    <dd>［wp-config.php］ファイルにて確認可能です。<br>
                        ［wp-config.php］ファイルをテキストエディタ（Tera Pad等）で開き、下記項目をご確認ください。<br><br>
                        /** MySQL データベースのユーザー名 */<br>
                        define('DB_USER', 'example_user');<br><br>
                        /** MySQL データベースのパスワード */<br>
                        define('DB_PASSWORD', '***********');<br>
                        ※MySQLデータベースのユーザー名：MySQLユーザー<br>
                        MySQLデータベースのパスワード：MySQLユーザーのパスワード　となります。</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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