<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FastCGIについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「FastCGI」とは、プロセス初回実行時に該当プロセスを一定時間サーバー内に保持し、次回以降の「プロセスの起動/終了」を省略することで、プログラム高速化・CPU負荷の軽減を図る機能です。">

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
            
                <h3 class="sub-ttl">FastCGIについて</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">FastCGIについて</a></li>
                    <li><a href="#link-b">各種プログラムのFastCGI化 対応一覧</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FastCGIについて</h4>
                    <div class="section_body">

                        <p>「FastCGI」とは、プロセス初回実行時に該当プロセスを一定時間サーバー内に保持することで、次回以降、実行時の「プロセスの起動/終了」を省略し、
                        高速化や、プロセスの起動/終了に伴うCPUへの負荷を軽減することで、<strong>速度面で優れるとされるモジュール版PHPと同等の処理能力を持つ動作方式</strong>です。</p>
                        
                        <p>一度「プロセスの起動」をすると、一定時間は「プロセスの終了」を
                        することなく起動し続けることで、処理時間の大幅な短縮と、プロセスの起動/終了に伴うCPUへの負荷を軽減します。</p>

                        
                        <p><img class="flex" src="../img/manual/man_server_php_fastcgi_1.png" alt="FastCGIでの処理イメージ"></p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">各種プログラムのFastCGI化</h4>
                    <div class="section_body">
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>CGIでFastCGI化を行う方法</dt>
                            <dd>
                                <p>CGIをFastCGIとして動作させる場合、プログラムの拡張子を「<em class="font-bold">.fcgi</em>」に変更にしてください。</p>
                                <p>また、拡張子を変更せず「<em class="font-bold">.cgi</em>」をFastCGIとして動作させる場合には、 下記を.htaccessに追記することによって「.cgi」でFastCGIの使用が可能です。</p>
                                <pre class="code">AddHandler fcgid-script .cgi</pre>
                                <p class="note">※CGIでFastCGI化を行うにあたっては、該当のCGIプログラム自体がFastCGIに対応している必要があります。</p>
                            </dd>
                        </dl>
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