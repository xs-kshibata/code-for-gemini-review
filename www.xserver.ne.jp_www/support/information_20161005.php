<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>一部の端末環境にて『XServerアカウント』『サーバーパネル』『ファイルマネージャ』『WEBメール』のログインが失敗する事象について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは、Windows 10で特定のWindows更新プログラムが適用済みの端末にて、Microsoft Edgeで当サービスが提供する各ツールへのログインに失敗する事象を確認しています。対処方法を掲載していますのでご確認下さい。">

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
            <h3 class="section_ttl">一部の端末環境にて『XServerアカウント』『サーバーパネル』『ファイルマネージャ』『WEBメール』のログインが失敗する事象について</h3>
            <div class="section_body">
                <p>
平素は当サービスをご利用いただき、誠にありがとうございます。<br>
<br>
現在、一部のお客様にて、当サービスで提供する『XServerアカウント』<br>
『サーバーパネル』『ファイルマネージャ』『WEBメール』各ツールへの<br>
ログインに失敗する事象を確認しております。<br>
<br>
詳細は以下をご参照ください。<br>
<br>
----------------------------------------------------------------------<br>
【対象の環境】<br>
　OSがWindows 10で、Windows更新プログラム「KB3194496」が適用済みの端末<br>
<br>
【発生している事象】<br>
　Microsoftが提供するWindows更新プログラム「KB3194496」における不具合の影響により、<br>
　Microsoft Edgeブラウザで、当サービスが提供する『XServerアカウント』『サーバーパネル』<br>
　『ファイルマネージャ』『WEBメール』各ツールへのログインに失敗する。<br>
<br>
【事象への対処方法】<br>
　以下、いずれかの方法による対処を行ってください。<br>
<br>
　(1) Microsoft Edge以外のWebブラウザ(Internet Explorer / Google Chrome / Firefoxなど)や<br>
　　　対象以外の端末から、各ツールを利用する<br>
<br>
　(2) Microsoftが提供するWindows更新プログラム「KB3197356」を適用する<br>
----------------------------------------------------------------------<br>
<br>
お客様にはご不便をおかけし、申し訳ございません。<br>
なにとぞよろしくお願い申し上げます。<br>
<br>
(2016年10月5日掲載、2016年10月6日更新)
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