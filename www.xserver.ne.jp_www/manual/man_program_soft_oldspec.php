<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>プログラム言語・コマンドパス(移行メンテナンス前) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで動作可能なプログラム言語やそのバージョン、コマンドパスについて記載しています。sv1999以前でサーバー環境の移行メンテナンスが完了していない方はこちらをご参照ください。">

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
            
                <h3 class="sub-ttl">プログラム言語・コマンドパス(移行メンテナンス前)</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">エックスサーバーで使用できるプログラム言語</a></li>
                    <li><a href="#link-b">コマンドパス一覧</a></li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI・SSI・PHPに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">エックスサーバーで使用できるプログラム言語</h4>
                    <div class="section_body">

                        
                        <table class="table">
                            <thead>
                            <tr><th>言語</th><th>仕様</th></tr>
                            </thead>
                        <tbody>
                            <tr>
                                <th>Perl</th>
                                    <td>
                                        <p>バージョン 5.8.x をご利用いただけます。</p>
                                        <p class="note">※perlモジュールの一覧は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報よりご覧いただけます。</p>
                                    </td>
                            </tr>
                            <tr>
                                <th>PHP</th>
                                <td>
                                    <p>PHP7 / PHP5 / PHP4 をご利用頂けます。</p>
                                    <ul class="ul">
                                        <li>PHP7( 7.1.x / 7.0.x )</li>
                                        <li>PHP5( 5.6.x / 5.5.x / 5.4.x / 5.3.3 / 5.2.17 / 5.1.6 )</li>
                                        <li>PHP4( 4.3.9 )</li>
                                    </ul>
                                    <ul class="note-list">
                                        <li>※PHPバージョンについては<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報よりご覧いただけます。</li>
                                        <li>※PHP 7.1.x 、PHP 7.0.x 、PHP 5.6.x については、「FastCGI」と「OPcache」が標準で有効になっております。</li>                                        
                                        <li>※バージョンの切り替えについては、「<a href="man_program_php_ver.php">PHPのバージョン切り替え</a>」をご参照ください。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Ruby</th>
                                    <td>バージョン 1.8.5 / 1.9.3 / 2.0.0 をご利用いただけます。</td>
                            </tr>
                            <tr>
                                <th>Python</th>
                                    <td>バージョン 2.4.3 / 2.7.4 / 3.3.1 をご利用いただけます。</td>
                            </tr>
                            <tr>
                                <th>SSI</th>
                                    <td>ご利用いただけます。<br>AddHandler server-parsed .html .htm と記述した .htaccess を設置することで、SSI を .html や .htm で動作させることが可能ですが、サーバー負荷とセキュリティ面から推奨しておりません。</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">コマンドパス一覧</h4>
                    <div class="section_body">
                        <table class="table table_striped mb5">
                            <thead>
                                <tr><th>コマンド</th><th>パス</th></tr>
                            </thead>
                            <tbody>
                                <tr><th>Perl</th><td>/usr/bin/perl 又は /usr/local/bin/perl</td></tr>
                                <tr><th>PHP 7.1.x</th><td>/usr/bin/php7.1</td></tr>
                                <tr><th>PHP 7.0.x</th><td>/usr/bin/php7.0</td></tr>
                                <tr><th>PHP 5.6.x</th><td>/usr/bin/php5.6</td></tr>
                                <tr><th>PHP 5.5.x</th><td>/usr/bin/php5.5</td></tr>
                                <tr><th>PHP 5.4.x</th><td>/usr/bin/php5.4</td></tr>
                                <tr><th>PHP 5.3.3</th><td>/usr/bin/php5.3</td></tr>
                                <tr><th>PHP 5.2.17</th><td>/usr/bin/php5.2</td></tr>
                                <tr><th>PHP 5.1.6</th><td>/usr/bin/php5</td></tr>
                                <tr><th>PHP 4.3.9</th><td>/usr/bin/php</td></tr>
                                <tr><th>Ruby1.8.5</th><td>/usr/bin/ruby</td></tr>
                                <tr><th>Ruby1.9.3</th><td>/usr/bin/ruby1.9.3</td></tr>
                                <tr><th>Ruby2.0.0</th><td>/usr/bin/ruby2.0.0</td></tr>
                                <tr><th>Python2.4.3</th><td>/usr/bin/python</td></tr>
                                <tr><th>Python2.7.4</th><td>/usr/bin/python2.7</td></tr>
                                <tr><th>Python3.3.1</th><td>/usr/bin/python3.3</td></tr>
                                <tr><th>nkf</th><td>/usr/bin/nkf</td></tr>
                                <tr><th>sendmail</th><td>/usr/sbin/sendmail</td></tr>
                                <tr><th>gzip</th><td>/usr/bin/gzip</td></tr>
                                <tr><th>zip</th><td>/usr/bin/zip</td></tr>
                                <tr><th>unzip</th><td>/usr/bin/unzip</td></tr>
                                <tr><th>lynx</th><td>/usr/bin/lynx</td></tr>
                            </tbody>
                        </table>
                        <p class="note">※コマンドパス一覧は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報からもご覧いただけます。</p>

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