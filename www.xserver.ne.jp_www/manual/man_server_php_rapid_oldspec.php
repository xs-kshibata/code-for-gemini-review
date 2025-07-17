<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHP高速化(移行メンテナンス前) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜プログラムの動作をFastCGI化することでCPU負荷を軽減し、プログラムの高速化を図る「PHP高速化設定」に関するご案内です。sv1999以前でサーバー環境の移行メンテナンスが完了していない方はこちらをご参照ください。">

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
            
                <h3 class="sub-ttl">PHP高速化について(移行メンテナンス前)</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">PHPの高速化とは</a></li>
                    <li><a href="#link-b">PHP高速化 対応一覧</a></li>
                </ul>
                </div>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section id="s1" class="section">
                    <h4 class="section_ttl" id="link-a">PHPの高速化とは</h4>
                    <div class="section_body">
                        <p>本機能は、サーバープログラムの動作時間とCPU負荷をモジュール版相当まで大幅に改善する「FastCGI」と、PHPプログラム向けのキャッシュ機能である「OPcache」「APC」により、 CPU負荷の大幅な軽減と、PHPによるサーバープログラムの高速化を行います。</p>
                        <p>各機能の詳細は、以下のマニュアルをご参照ください。</p>
                        <ul class="list list_arrow-right">
                        	<li><a href="man_server_php_fastcgi.php">FastCGIについて</a></li>
                        	<li><a href="man_server_php_apc.php">APC/OPcacheについて</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="s2" class="section">
                    <h4 class="section_ttl" id="link-b">PHP高速化 対応一覧</h4>
                    <div class="section_body">

                
                        <table class="table table_striped table_use-caption" style="table-layout:fixed;">
                            <thead>
                            	<th>PHPのバージョン</th>
                            	<th>FastCGI</th>
                            	<th>APC</th>
                            	<th>OPcache</th>
                            </thead>
                            <tbody>
                            	<tr>
                            		<th class="tac" scope="row">7.1.x</th>
                            		<td class="tac">常時ON(変更不可)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">常時ON(変更不可)</td>
                            	</tr>
                            	<tr>
                            		<th class="tac" scope="row">7.0.x</th>
                            		<td class="tac">常時ON(変更不可)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">常時ON(変更不可)</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.6.x</th>
                                    <td class="tac">常時ON(変更不可)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">常時ON(変更不可)</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.5.x</th>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">-</td>
                            		<td class="tac">ON/OFF 設定可能</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.4.x</th>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.3.x</th>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.2.x</th>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.1.x</th>
                            		<td class="tac">ON/OFF 設定可能</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">4.3.x</th>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_caution">
                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>php.iniの設定に関するご注意</h5>
                            <div class="msg_body">
                                <p>本機能が有効の場合、お客様がホームディレクトリや各ディレクトリに独自に設置している<em class="font-bold">php.ini</em>ファイルの設定は適用されませんのでご注意ください。<br>
                                本機能をご利用の上でphp.iniの設定を行う場合は、サーバーパネル上の「<a href="man_server_phpini_edit.php">php.ini設定</a>」にて設定を行うようにしてください。</p>
                            </div>
                        </aside>
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>使用できる環境変数の違い</h5>
                            <div class="msg_body">
                                <p>FastCGIが有効となる環境では、通常のCGI動作とは使用できる環境変数が一部異なっています。<br>プログラム上でBasic認証などに使用する、下記の環境変数の取得が行えません。</p>
                                <ul class="ul">
                                	<li>PHP_AUTH_PW</li>
                                	<li>PHP_AUTH_USER</li>
                                </ul>
                            </div>
                        </aside>
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