<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTPソフトでファイルやフォルダが削除できません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下に該当しないかご確認ください。　・ファイルやフォルダの名前に日本語などの全角文字や半角スペースを使っている　・削除できないファイルが設置されているフォルダのパーミッションに誤りがある　・SSHでの削除を試す。">

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
            
                <h3 class="sub-ttl">FTPソフトでファイルやフォルダが削除できません。</h3>

                <p>以下に該当しないかご確認ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ファイルやフォルダの名前に日本語などの全角文字や半角スペースを使っている</dt>
                    <dd>
                        <p>FTPソフトの文字コード設定の変更によって削除が可能になる場合があります。<br>
                            また、<a href="../../manual/man_ftp_filezilla_setting.php">FileZilla</a>のソフトを利用する事で削除できる場合があります。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>削除できないファイルが設置されているフォルダのパーミッションに誤りがある</dt>
                    <dd>フォルダのパーミッションを「705」へ変更したうえで、フォルダ、ファイルの削除が可能かご確認ください。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SSHでの削除を試す。</dt>
                    <dd>FTPソフトで削除ができない場合、<a href="../../manual/man_server_ssh.php">SSH</a>での削除が可能かどうかをお試しください。<br>SSH接続には<a href="../../manual/man_server_ssh_connect_tera.php">Teraterm</a>などのソフトをご利用ください。</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_trouble.php" class="btn btn_gray">「ファイル転送(FTP)のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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