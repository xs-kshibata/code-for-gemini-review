<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHPのバージョンについて(移行メンテナンス前) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでご利用可能なPHPのバージョンについてや、管理ツール上からPHPバージョンを切り替える方法についてご案内しています。sv1999以前でサーバー環境の移行メンテナンスが完了していない方はこちらをご参照ください。">

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
            
                <h3 class="sub-ttl">PHPのバージョンについて(移行メンテナンス前)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ご利用いただけるPHPのバージョン</a></li>
                    <li><a href="#link-b">PHPのバージョン切り替え</a>
                        <ol>
                            <li><a href="#link-b01">1.「PHP Ver.切替」をクリック</a></li>
                            <li><a href="#link-b02">2.変更後のバージョンを設定</a></li>
                        </ol>
                    </li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI・SSI・PHPに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">ご利用いただけるPHPのバージョン</h4>
                    <div class="section_body">
                        
                        <table class="table">
                            <thead>
                                <tr><th style="width:105px;">バージョン</th><th>説明</th></tr>
                            </thead>
                                <tr>
                                    <th>PHP 7.1.x</th>
                                    <td>
                                        <p>
                                            現在公式にサポートされているバージョンです。<br>
                                            PHP7 は、PHP5 や PHP4 と比較してパフォーマンスが大幅に強化されています。
                                        </p>
                                        <p class="note">
                                            ※「PHP高速化(FastCGI)」と「キャッシュモジュール(OPcache)」が<br>標準で有効となります。<br>「FastCGI」と「OPcache」については、 マニュアルページ「<a href="man_server_php_fastcgi.php">FastCGIについて</a>」と 「<a href="man_server_php_apc.php">APC/OPcacheについて</a>」をご参照ください。
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 7.0.x</th>
                                    <td rowspan="2">
                                        <p>
                                            旧バージョンです。<br>
                                            今後バージョンアップの予定はないため新規での利用は推奨しません。<br>PHP 7.1.x への移行を推奨します。
                                        </p>
                                        <p class="note">
                                            ※「PHP高速化(FastCGI)」と「キャッシュモジュール(OPcache)」が<br>標準で有効となります。<br>「FastCGI」と「OPcache」については、 マニュアルページ「<a href="man_server_php_fastcgi.php">FastCGIについて</a>」と 「<a href="man_server_php_apc.php">APC/OPcacheについて</a>」をご参照ください。
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.6.x</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.5.x</th>
                                    <td rowspan="4">
                                        <p>
                                            旧バージョンです。<br>
                                            今後バージョンアップの予定はないため新規での利用は推奨しません。<br>PHP 7.1.x への移行を推奨します。
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.4.x</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.2.17</th>
                                </tr>
                                <tr>
                                    <th>PHP 4.3.9</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.3.3</th>
                                    <td rowspan="2">
                                        <p>
                                            旧バージョンです。<br>
                                            OSベンダーによるパッチにて、影響の大きな脆弱性を中心にセキュリティ修正が<br>行われます。<br>
                                            PHP 7.1.x への移行を推奨します。
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.1.6</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
            
                <section id="phpver-change" class="section">
                    <h4 class="section_ttl" id="link-b" style="margin-top:45px;">PHPのバージョン切り替え</h4>
                    <div class="section_body">
                        <div class="serial-box mb30">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.「PHP Ver.切替」をクリック</h5>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「PHP Ver.切替」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_program_php_ver_1.png?date=220907" alt="PHPver.切替画面へ"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.変更後のバージョンを設定</h5>
                                <div class="box_body">
                                    <p>現在のバージョンを確認し、「変更後のバージョン」より変更希望のバージョンを選択ください。</p>
                                    <p><img class="img" src="../img/manual/man_program_php_ver_2.png?date=180209" alt="サーバーパネルでPHPver.切り替えをクリック"></p>
                                    <p>選択後、「バージョンを切り替える」をクリックしてください。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
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