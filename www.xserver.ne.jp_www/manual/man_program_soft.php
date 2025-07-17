<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>プログラム言語・コマンドパス | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで動作可能なプログラム言語やそのバージョン、コマンドパスについて記載しています。">

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
            
                <h3 class="sub-ttl">プログラム言語・コマンドパス</h3>

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
                                        <p>バージョン 5.26.x をご利用いただけます。<span class="font-xs">(※1)</span></p>
                                        <ul class="note-list">
                                           <li>※perlモジュールの一覧は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報よりご覧いただけます。</li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP</th>
                                    <td>
                                        <p>PHP8 / PHP7 / PHP5 をご利用いただけます。</p>
                                        <ul class="ul">
                                            <li>PHP8( 8.3.x / 8.2.x / 8.1.x / 8.0.x )</li>
                                            <li>PHP7( 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x )</li>
                                            <li>PHP5( 5.6.x / 5.5.x / 5.4.x / 5.3.3 / 5.1.6 )</li>
                                        </ul>
                                        <ul class="note-list">
                                            <li>※PHPバージョンについては<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報よりご覧いただけます。</li>
                                            <li>※「FastCGI」と「OPcache」または「APC」が標準で有効になっております。</li>
                                            <li>※バージョンの切り替えについては、「<a href="man_program_php_ver.php">PHPのバージョン切り替え</a>」をご参照ください。</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ruby</th>
                                    <td>
                                    <p>バージョン 2.5.x をご利用いただけます。<span class="font-xs">(※1)</span></p>
                                        <ul class="note-list">
                                            <li>※ご利用のサーバーは<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報よりご覧いただけます。</li>
                                        </ul>
                                   </td>
                                </tr>
                                <tr>
                                    <th>Python</th>
                                    <td>バージョン 2.7.x / 3.4.x / 3.6.x をご利用いただけます。</td>
                                </tr>
                                <tr>
                                    <th>SSI</th>
                                    <td>ご利用いただけます。<br>AddHandler server-parsed .html .htm と記述した .htaccess を設置することで、SSI を .html や .htm で動作させることが可能ですが、サーバー負荷とセキュリティ面から推奨しておりません。</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="note">
                            (※1) 旧サーバー(sv16000以前)のうち、<a href="../spec_sv_replace.php">新基盤システムへの移行メンテナンス</a>が完了していないサーバーをご利用の場合、以下の仕様となります。<br>
                            ・Perl：バージョン 5.16.x / 5.26.x をご利用いただけます。<br>
                            ・Ruby：バージョン 2.0.x をご利用いただけます。
                        <p>
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
                                <tr><th>Perl 5.26.x</th><td>/usr/bin/perl</td></tr>
                                <tr><th>Perl 5.16.x</th><td>/usr/bin/perl516</td></tr>
                                <tr><th>PHP 8.3.x(CGI)</th><td>/usr/bin/php8.3-cgi 又は /usr/bin/php-fcgi8.3</td></tr>
                                <tr><th>PHP 8.3.x(CLI)</th><td>/usr/bin/php8.3</td></tr>
                                <tr><th>PHP 8.2.x(CGI)</th><td>/usr/bin/php8.2-cgi 又は /usr/bin/php-fcgi8.2</td></tr>
                                <tr><th>PHP 8.2.x(CLI)</th><td>/usr/bin/php8.2</td></tr>
                                <tr><th>PHP 8.1.x(CGI)</th><td>/usr/bin/php8.1-cgi 又は /usr/bin/php-fcgi8.1</td></tr>
                                <tr><th>PHP 8.1.x(CLI)</th><td>/usr/bin/php8.1</td></tr>
                                <tr><th>PHP 8.0.x(CGI)</th><td>/usr/bin/php8.0-cgi 又は /usr/bin/php-fcgi8.0</td></tr>
                                <tr><th>PHP 8.0.x(CLI)</th><td>/usr/bin/php8.0</td></tr>
                                <tr><th>PHP 7.4.x(CGI)</th><td>/usr/bin/php7.4-cgi 又は /usr/bin/php-fcgi7.4</td></tr>
                                <tr><th>PHP 7.4.x(CLI)</th><td>/usr/bin/php7.4</td></tr>
                                <tr><th>PHP 7.3.x(CGI)</th><td>/usr/bin/php7.3-cgi 又は /usr/bin/php-fcgi7.3</td></tr>
                                <tr><th>PHP 7.3.x(CLI)</th><td>/usr/bin/php7.3</td></tr>
                                <tr><th>PHP 7.2.x(CGI)</th><td>/usr/bin/php7.2-cgi 又は /usr/bin/php-fcgi7.2</td></tr>
                                <tr><th>PHP 7.2.x(CLI)</th><td>/usr/bin/php7.2</td></tr>
                                <tr><th>PHP 7.1.x(CGI)</th><td>/usr/bin/php7.1-cgi 又は /usr/bin/php-fcgi7.1</td></tr>
                                <tr><th>PHP 7.1.x(CLI)</th><td>/usr/bin/php7.1</td></tr>
                                <tr><th>PHP 7.0.x(CGI)</th><td>/usr/bin/php7.0-cgi 又は /usr/bin/php-fcgi7.0</td></tr>
                                <tr><th>PHP 7.0.x(CLI)</th><td>/usr/bin/php7.0</td></tr>
                                <tr><th>PHP 5.6.x(CGI)</th><td>/usr/bin/php5.6-cgi 又は /usr/bin/php-fcgi5.6</td></tr>
                                <tr><th>PHP 5.6.x(CLI)</th><td>/usr/bin/php5.6</td></tr>
                                <tr><th>PHP 5.5.x(CGI)</th><td>/usr/bin/php-fcgi5.5</td></tr>
                                <tr><th>PHP 5.5.x(CLI)</th><td>/usr/bin/php5.5</td></tr>
                                <tr><th>PHP 5.4.x(CGI)</th><td>/usr/bin/php-fcgi5.4</td></tr>
                                <tr><th>PHP 5.4.x(CLI)</th><td>/usr/bin/php5.4</td></tr>
                                <tr><th>PHP 5.3.x(CGI)</th><td>/usr/bin/php-fcgi5.3</td></tr>
                                <tr><th>PHP 5.3.x(CLI)</th><td>/usr/bin/php5.3</td></tr>
                                <tr><th>PHP 5.1.x(CGI)</th><td>/usr/bin/php-fcgi5.1</td></tr>
                                <tr><th>PHP 5.1.x(CLI)</th><td>/usr/bin/php5.1</td></tr>
                                <tr><th>Ruby 2.5.x</th><td>/usr/bin/ruby</td></tr>
                                <tr><th>Python 2.7.x</th><td>/usr/bin/python</td></tr>
                                <tr><th>Python 3.4.x</th><td>/usr/bin/python3.4</td></tr>
                                <tr><th>Python 3.6.x</th><td>/usr/bin/python3.6</td></tr>
                                <tr><th>nkf</th><td>/usr/bin/nkf</td></tr>
                                <tr><th>sendmail</th><td>/usr/sbin/sendmail</td></tr>
                                <tr><th>gzip</th><td>/usr/bin/gzip</td></tr>
                                <tr><th>zip</th><td>/usr/bin/zip</td></tr>
                                <tr><th>unzip</th><td>/usr/bin/unzip</td></tr>
                            </tbody>
                        </table>
                        <ul class="note-list">
                            <li>※コマンドパス一覧は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>のサーバー情報からもご覧いただけます。</li>
                            <li>※旧サーバー(sv16000以前)をご利用の場合、「/usr/bin/perl」「/usr/bin/perl516」「/usr/bin/ruby」を実行した際のバージョンは「Perl 5.16.x」「Ruby 2.0.x」となります。
                            </li>
                            <li>※旧サーバー(sv16000以前)のうち、(sv30〜sv1510、sv3001〜sv7800)をご利用の場合、新基盤システムへの移行メンテナンスを順次実施しております。 移行メンテナンス完了までは「/usr/bin/perl」「/usr/bin/perl516」「/usr/bin/ruby」を実行した際のバージョンは「Perl 5.16.x」「Ruby 2.0.x」となります。</li>
                        </ul>
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