<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーにアクセスできなくなっている方へ - 障害・メンテナンス情報 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではご利用期限を超過しているサーバーアカウントを順次凍結いたしております。突然ホームページやメールがご利用いただけなくなった場合は、XServerアカウントにて該当ご契約のご利用期限をご確認ください。">

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
            <h3 class="section_ttl">サーバーにアクセスできなくなっている方へ</h3>
            <div class="section_body">
                <p>
ご利用期限を超過しているサーバーアカウントにつきましては、<br>
順次アカウントの凍結を行わせていただいております。<br>
<br>
　※サーバーアカウントの凍結が行われると、ホームページへのアクセスや<br>
　　メールの送受信が行えなくなります。<br>
<br>
突然ホームページやメールがご利用いただけなくなった場合は、<br>
XServerアカウントにて該当のご契約のご確認をお願いいたします。<br>
<br>
XServerアカウント下部「プラン」に表示されていない場合は<br>
既に凍結されているサーバーアカウントとなります。<br>
また、「契約情報」の項目でも状態をご確認いただけます<br>
<br>
凍結解除をご希望の場合は、サポートまでお問い合わせください。
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