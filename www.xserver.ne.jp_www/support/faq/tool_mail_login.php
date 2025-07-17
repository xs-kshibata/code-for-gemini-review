<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「メールアドレス／パスワードが誤っています」と表示され、WEBメールへログインできません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールアドレスまたはメールパスワードの入力に誤りがある可能性があります。WEBメールは以下の情報でログインしてください。作成したメールアドレスとご自身で設定されたメールパスワード。メールパスワードが不明な場合は「メールアカウントのパスワー...">

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
            
                <h3 class="sub-ttl">「メールアドレス／パスワードが誤っています」と表示され、WEBメールへログインできません。</h3>

                <p>メールアドレスまたはメールパスワードの入力に誤りがある可能性があります。<br>
                WEBメールは以下の情報でログインしてください。
                <ul class="ul">
                    <li>作成したメールアドレス</li>
                    <li>ご自身で設定されたメールパスワード</li>
                </ul>
                </p>
                <p>メールパスワードが不明な場合は<a href="../../manual/man_mail_change_password.php">「メールアカウントのパスワード変更」</a>を行ったうえでログインをお試しください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_mail.php" class="btn btn_gray">「WEBメール」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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