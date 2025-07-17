<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>国外からメールをご利用のお客様へ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではサーバーのセキュリティ・安定性を高めるため、国外IPアドレスからのSMTP認証によるメール送信を制限しております。同制限はサーバーパネルで提供中の「SMTP認証の国外アクセス制限設定」にて解除が可能です。">

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
            <h3 class="section_ttl">国外からメールをご利用のお客様へ</h3>
            <div class="section_body">
                <p>
当サービスでは、サーバーのセキュリティ・安定性を高めるため<br>
国外IPアドレスからのSMTP認証によるメール送信を制限させていただいております。<br>
<br>
国外にご在住等、国外IPアドレスからのSMTP認証が必要なお客様におきましては、<br>
サーバーパネルで提供中の｢SMTP認証の国外アクセス制限設定｣にて制限の解除を行ってください。<br>
<br>
<a href="../manual/man_mail_jpcheck.php">こちら</a>のページに制限の解除方法を記載しておりますのでご参照ください 
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