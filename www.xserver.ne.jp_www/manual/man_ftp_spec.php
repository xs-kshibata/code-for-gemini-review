<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP仕様一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜FTPに関する仕様の一覧です。">

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
            
                <h3 class="sub-ttl">仕様一覧</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">FTP関連の仕様一覧</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FTP関連の仕様一覧</h4>
                    <div class="section_body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>機能</th>
                                    <th>仕様</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>FTPアカウント数</th>
                                    <td>無制限（アクセス先・転送量制限可）</td>
                                </tr>
                                <tr>
                                    <th>FTP over SSL</th>
                                    <td>使用可能（FTP over SSL対応ソフトをご利用ください）</td>
                                </tr>
                                <tr>
                                    <th>ファイルマネージャ</th>
                                    <td>使用可能</td>
                                </tr>
                                <tr>
									<th>接続ポート番号</th>
									<td>21（localhost接続の場合は「10021番ポート」をご指定ください）
									</td>
								</tr>
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