<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールアカウントのパスワードがわかりません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールアカウントを作成した際にご自身で設定したパスワードです。現在設定されているパスワードを確認することはできません。ご不明な場合は以下マニュアルをご参照いただき、メールアカウントのパスワードを変更してください。">

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
            
                <h3 class="sub-ttl">メールアカウントのパスワードがわかりません。</h3>

                <p>
                    メールアカウントを作成した際にご自身で設定したパスワードです。<br>
                    現在設定されているパスワードを確認することはできません。<br>
                    ご不明な場合は以下マニュアルをご参照いただき、メールアカウントのパスワードを変更してください。
                </p>
                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_mail_change_password.php">メールアカウントのパスワード変更</a></p>
                <p class="note">
                    ※パスワードにお心当たりがある場合は、「対象のメールアドレス」と「心当たりのあるパスワード」で<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank" >WEBメール</a>へのログインをお試しください。<br>
                    WEBメールにログインができれば、入力されたパスワードが現在設定されているパスワードです。
                </p>

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