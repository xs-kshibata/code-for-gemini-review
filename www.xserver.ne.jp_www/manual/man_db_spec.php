<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>データベース仕様一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜データベースのご利用に関する仕様の一覧です。">

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
					<li><a href="#link-a">データベース関連の仕様一覧</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                </ul>
                
                <p>エックスサーバーではデータベース環境としてMySQLとMariaDBを提供しております。</p>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">データベース関連の仕様一覧</h4>
                    <div class="section_body">
                        <table class="table break-word">
                            <thead>
                                <tr>
                                    <th>機能</th>
                                    <th>仕様</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>データベースサーバー</th>
                                    <td>
                                    <p>下記のいずれかがご利用可能です。(ご利用サーバーによって異なります)</p>
                                        <ul class="ul">
                                            <li>MySQL 5.7.x</li>
											<li>MariaDB 10.5.x</li>
                                        </ul>
                                        <p>ストレージエンジンは、「MyISAM」および「InnoDB」に対応しています。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>データベースホスト名</th>
                                    <td>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「MySQL設定」で確認することができます

                                        
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>MySQL文字コード</th>
                                    <td>UTF-8(utf8mb4)／UTF-8(utf8)／EUC-JP／Shift-JIS／Binary　から選択可</td>
                                </tr>
                                <tr>
                                    <th>データベースの制限</th>
                                    <td>
                                        ご利用可能なMySQLデータベース数・MySQLユーザ数は無制限です。
                                    </td>
                                </tr>
                                <tr>
                                    <th>データベース容量</th>
                                    <td>
                                        <p>MySQLデータベース1個につき、ご利用いただける容量の目安は「5GB」です。</p>
                                        <p class="note mb0">※この容量を著しく超過する場合や、DBの負荷が大きい場合は、リソース制限の対象となる場合があります。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>管理ツール</th>
                                    <td>phpMyAdmin</td>
                                </tr>
                                <tr>
                                    <th>PostgreSQL</th>
                                    <td>利用できません。</td>
                                </tr>
                                <tr>
                                    <th>SQLite</th>
                                    <td>利用可能です。</td>
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