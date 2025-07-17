<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>CGI・SSI・PHP | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜CGI、PHPの仕様や導入済みPEARライブラリに関するご案内です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">CGI・SSI・PHP</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">CGI関連の仕様一覧</a></li>
                    <li><a href="#link-b">PHP関連の仕様一覧</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI・SSI・PHPに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">CGI関連の仕様一覧</h4>
                    <div class="section_body">
                        <table class="table">
                            <tbody>
                                <tr><th>ホームディレクトリのパス</th><td>/home/サーバーID/</td></tr>
                                <tr><th>CGIファイルのパーミッション</th><td>755, 705 のいずれか</td></tr>
                                <tr><th>CGIの設置ディレクトリのパーミッション</th><td>755, 705 のいずれか</td></tr>
                                <tr><th>CGI設置ディレクトリ</th><td>どこでも可</td></tr>
                                <tr><th>jcode.pm</th><td>インストール済み</td></tr>
                                <tr><th>GD / GD2</th><td>インストール済み</td></tr>
                                <tr><th>suEXEC</th><td>対応</td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">PHP関連の仕様一覧</h4>
                    <div class="section_body">
                        <table class="table">
                            <tbody>
                                <tr><th>PHPの動作</th><td>CGI動作</td></tr>
                                <tr><th>PHPファイルのパーミッション</th><td>755, 705, 644, 604 のいずれか</td></tr>
                                <tr><th>PHPの設置ディレクトリのパーミッション</th><td>755, 705 のいずれか</td></tr>
                                <tr><th>php.ini</th><td>編集可能</td></tr>
                                <tr><th>SMARTY</th><td>利用可能<p class="note mb0">※デフォルトではインストールはされておらず、お客様にてインストールしていただく必要がございます。</p></td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>
                

                
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