<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressのダッシュボードへログインする情報が分からなくなりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ダッシュボードへログインする際には、WordPressインストール時にお決めいただいたユーザー名とパスワードをご入力いただく必要があります。もしお忘れの場合は、WordPressの管理画面（ダッシュボード）のログインページへアクセスし…">

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
            
                <h3 class="sub-ttl">WordPressのダッシュボードへログインする情報が分からなくなりました。</h3>

                <p>WordPressの管理画面（ダッシュボード）へログインする際には、WordPressインストール時にお決めいただいたユーザー名とパスワードをご入力いただく必要があります。</p>
                <p>もしお忘れの場合は、<a href="../../manual/man_server_wprecovery.php#link-f">「WordPressリカバリー」機能</a>にて、パスワードのリセットが可能です。</p>
                <p>なお、パスワードのみご不明な場合は、WordPressの管理画面（ダッシュボード）のログインページへアクセスし、『パスワードをお忘れですか？』のリンクからもパスワードの再発行を行うことが可能です。</p>

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