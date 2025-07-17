<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressプラグイン『EWWW Image Optimizer』の利用時における表示不具合について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは、WordPressのプラグイン『EWWW Image Optimizer』をご利用の一部のお客様にて、該当プラグインの不具合によりコンテンツ表示ができない事象を確認しております。対処法方を記載していますのでご確認ください。">

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
            <h3 class="section_ttl">WordPressプラグイン『EWWW Image Optimizer』の利用時における表示不具合について</h3>
            <div class="section_body">
                <p>
平素は当サービスをご利用いただき、誠にありがとうございます。<br>
<br>
WordPressでプラグイン『EWWW Image Optimizer』をご利用の一部のお客様にて、<br>
該当プラグインの不具合により、コンテンツの表示ができない事象を確認しております。<br>
<br>
本件に関する対処方法などの詳細は、以下をご参照ください。<br>
<br>
----------------------------------------------------------------------<br>
【対象の環境】<br>
　PHPバージョンが5.4.x以下を設定するドメインにおいて、<br>
　WordPressプラグイン『EWWW Image Optimizer』のVer.3.0.0に更新したWordPressサイト<br>
<br>
【発生している事象】<br>
　Parse errorが発生し、WordPressサイトの閲覧ができない<br>
<br>
【原因】<br>
　プラグイン『EWWW Image Optimizer』のVer.3.0.0における不具合<br>
<br>
【事象への対処方法】<br>
　以下の手順で対処してください。<br>
　<br>
　(1) サーバーパネル内「PHP Ver.切替」にて、PHPバージョンを『PHP 5.6.x』以降に切り替える<br>
　　　[参考] マニュアル「<a href="../manual/man_program_php_ver.php" target="_blank">PHPのバージョンについて</a>」<br>
<br>
　(2) プラグイン『EWWW Image Optimizer』を最新版(Ver.3.0.2)に更新する<br>
----------------------------------------------------------------------<br>
<br>
なにとぞよろしくお願い申し上げます。<br>
<br>
(2016年10月7日掲載)
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