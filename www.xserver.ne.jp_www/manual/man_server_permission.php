<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>パーミッション | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜パーミッションとはフォルダやファイルに対するユーザーのアクセス権限のことです。当ページではエックスサーバーでWebサイトを公開する際の推奨パーミッションについてご案内しています。">

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
            
                <h3 class="sub-ttl">パーミッション</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">パーミッションとは</a></li>
                    <li><a href="#link-b">パーミッションの設定について</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">パーミッションとは</h4>
                    <div class="section_body">
                        <p>フォルダやファイルに対するユーザーのアクセス権限のことです。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">パーミッションの設定について</h4>
                    <div class="section_body">
                        <p>当サービスでWebサイトを公開する際、推奨する各フォルダ、各ファイルに対するパーミッションの値は下記となります。</p>
                        
                        <table class="table table_use-caption">
							<caption>適切なパーミッション値</caption>
							<tbody>
								<tr><th>フォルダ</th><td>755, 705のいずれか</td></tr>
								<tr><th>.html / .php / .zip などのファイル</th><td>644</td></tr>
								<tr><th>.htaccess</th><td>644</td></tr>
								<tr><th>.cgi / .pl などの CGI 実行ファイル</th><td>755, 705のいずれか</td></tr>
								<tr><th>.cgi / .pl などの直接実行されないライブラリファイル</th><td>600</td></tr>
								<tr><th>.txt / .dat / .log などのファイル</th><td>600</td></tr>
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