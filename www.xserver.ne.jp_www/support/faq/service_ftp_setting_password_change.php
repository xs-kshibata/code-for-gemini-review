<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPのパスワードを変更したい。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="パスワードを変更する際に、「メインFTPアカウント」と「サブFTPアカウント」で、変更方法が異なりますので、下記をご参照下さい。　メインFTPアカウントの場合…メインFTPアカウントのパスワードはサーバーパネルへログインする際のパスワードと同一…">

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
            
                <h3 class="sub-ttl">FTPのパスワードを変更したい。</h3>

                <p>パスワードを変更する際に、「メインFTPアカウント」と「サブFTPアカウント」で、変更方法が異なりますので、下記をご参照下さい。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メインFTPアカウントの場合</dt>
                    <dd>
                        <p class="mb0">メインFTPアカウントのパスワードはサーバーパネルへログインする際のパスワードと同一です。<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「パスワード変更」より変更してください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サブFTPアカウントの場合</dt>
                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「サブFTPアカウント設定」よりパスワードの変更が可能です。</dd>
                </dl>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_setting.php" class="btn btn_gray">「ファイル転送(FTP)の設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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