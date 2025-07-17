<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>CGIを設置すると「500 Internal Server Error」が表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ご利用いただいているプログラムでエラーが発生している可能性があります。　【考えられる要因】・CGI設置ディレクトリのパーミッションが755, 705のいずれかで設定されていない　・プログラム側の記述に誤りがある　なお、同時接続数など…">

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
            
                <h3 class="sub-ttl">CGIを設置すると「500 Internal Server Error」が表示されます。</h3>

                <p>ご利用いただいているプログラムでエラーが発生している可能性があります。</p>
                <p><strong>【考えられる要因】</strong></p>
                <ul class="list list_arrow-right">
                    <li>CGI設置ディレクトリのパーミッションが755, 705のいずれかで設定されていない </li>
                    <li>プログラム側の記述に誤りがある</li>
                </ul>
                <p>なお、同時接続数などが影響し、リソース制限がかかっている可能性もあります。<br>サーバーパネル「エラーログ」よりエラー内容をご確認ください。<br><br>
                パーミッションはファイルマネージャーやFTPソフトにて設定・確認できます。<br>
                ファイルマネージャーでの設定方法は「<a href="../../manual/man_tool_file.php#link-c">マニュアル</a>」をご参照ください。</p>

                

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_cgi.php" class="btn btn_gray">「CGI」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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