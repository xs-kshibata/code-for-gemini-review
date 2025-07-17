<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メール送信不能の件について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーで作成したメールアカウントにおいて、メールソフトでの受信は行えるが【送信が行えない】場合、Outbound Port 25 Blocking による影響の可能性がございます。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <article class="section">
            <h3 class="section_ttl">メール送信不能の件について</h3>
            <div class="section_body">
                <p>
弊社サーバで作成したメールアカウントにおいて、<br>
メールソフトでの受信は行えるが【送信が行えない】場合、<br>
ご利用のプロバイダー様による Outbound Port 25 Blocking による<br>
影響の可能性がございます。<br>
<br>
<a href="../manual/man_mail_op25b.php">こちら</a>のページに対策方法を記載しておりますのでご参照ください。
                </p>
            </div>
            <footer class="section_footer">
                <p class="tac"><a class="btn btn_blue" href="#" onclick="javascript:window.history.back(-1);return false;">戻る<i class="ico ico_refresh"></i></a></p>
            </footer>
        </article>
        <!-- /.section -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>