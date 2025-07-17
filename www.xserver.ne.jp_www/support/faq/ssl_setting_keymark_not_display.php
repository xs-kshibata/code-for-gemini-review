<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSLページへのアクセスで鍵マークが正常に表示されません。鍵マークをクリックすると「このページには安全でない他のリソースが含まれています。」と表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="アクセスしたウェブページにおいて、SSL接続ではない接続（「http://」から始まるアドレス）でファイルを読み込んでいる場合に発生します。該当ウェブページのHTMLソースをチェックし、参照している画像（.gif、.jpg、.pngなど）…">

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
            
                <h3 class="sub-ttl">SSLページへのアクセスで鍵マークが正常に表示されません。鍵マークをクリックすると「このページには安全でない他のリソースが含まれています。」と表示されます。</h3>
                
                <p>アクセスしたウェブページにおいて、SSL接続ではない接続（「http://」から始まるアドレス）でファイルを読み込んでいる場合に発生します。</p>
                <p>該当ウェブページのHTMLソースをチェックし、参照している画像（.gif、.jpg、.pngなど）、Javascript（.js）、CSS（.css）などが「http://」から始まるアドレスとなっていないかご確認ください。</p>
                <p>原因となっているファイルについて、「https://」から参照する、もしくは「相対パス」でファイルを読み込むよう変更することで警告が解消されます。</p>
                <p>なお、アクセス解析のタグやブログパーツなど外部サーバーからデータを読み込んでいる場合、これら外部サーバーのファイルへのアクセスもSSL接続である必要があります。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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