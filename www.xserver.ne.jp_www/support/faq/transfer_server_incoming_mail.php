<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転中のメールの受信方法はどうすればいいでしょうか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ネームサーバー変更後は一定時間（数時間~24時間程）を経て、徐々にサーバーが移転されます。この期間は新旧どちらのサーバーでメールが受信されるか予測ができないため、両方のサーバーでメールを受信できるように設定を行っていただく必要が…">

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
            
                <h3 class="sub-ttl">サーバー移転中のメールの受信方法はどうすればいいでしょうか？</h3>

                <p>ネームサーバー変更後は一定時間（数時間~24時間程）を経て、徐々にサーバーが移転されます。<br>
                この期間は新旧どちらのサーバーでメールが受信されるか予測ができないため、両方のサーバーでメールを受信できるように設定を行っていただく必要があります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>旧サーバーの設定</dt>
                    <dd>メールソフトなどで受信を行われている場合、旧サーバーのアカウントの設定は削除せずそのままの状態でご利用ください。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>弊社サーバーの設定</dt>
                    <dd>サーバーパネルのメールアカウント設定から、これまでご利用いただいていたメールアドレスを作成し、メールソフトに弊社のアカウント設定を追加して下さい。詳細は<a href="../../manual/man_mail_setting.php">こちら</a>をご覧ください。</dd>
                </dl>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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