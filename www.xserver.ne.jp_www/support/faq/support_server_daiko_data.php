<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転代行で移転されるデータを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転代行の申し込み時に入力された「移転用FTP情報」を使用し、移転元サーバーにアクセスした際に表示されるWebサイト用のファイルやディレクトリを、ご契約サーバーにアップロードします。WordPressを利用されている場合は、データベースも移行します。以下…">

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
            
                <h3 class="sub-ttl">サーバー移転代行で移転されるデータを教えてください。</h3>
                
                <p>サーバー移転代行の申し込み時に入力された「移転用FTP情報」を使用し、移転元サーバーにアクセスした際に表示されるWebサイト用のファイルやディレクトリを、ご契約サーバーにアップロードします。<br>
                WordPressを利用されている場合は、データベースも移行します。</p>
                <p>以下のデータは移行できません。
                <ul class="ul">
                    <li>「移転用FTP情報」でアクセスができないデータ</li>
                    <li>Webサイトデータが保存されているディレクトリ以外のデータ</li>
                    <li>WordPress以外のデータベース</li>
                    <li>メールデータ</li>
                </ul>
                </p>
                <p>※移転元の利用環境やWebサイトの内容によっては、移転対象のデータであっても移行ができない場合があります。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_support_server_daiko.php" class="btn btn_gray">「サーバー移転代行について」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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