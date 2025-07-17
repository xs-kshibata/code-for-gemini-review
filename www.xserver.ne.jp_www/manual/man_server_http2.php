<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>HTTP/2について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでは、表示速度を向上させる効果をもつ新しい通信プロトコル「HTTP/2」が利用可能です。">

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
            
                <h3 class="sub-ttl">HTTP/2について</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">HTTP/2について</a></li>
                        <li><a href="#link-b">HTTP/2の利用方法について</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">HTTP/2について</h4>
                    <div class="section_body">
                        <p>
                            「HTTP/2」とは、HTTPS通信において表示速度を向上させる効果をもつ新しい通信プロトコルです。複数のリクエストを並列処理する仕組みにより、画像やJavascript、CSSなどを多く使用しているWebサイトで特に効果を発揮します。
                        </p>
                        <p><img class="img" src="../img/manual/man_server_http2_1.png" alt="従来の「HTTP/1.1」はリクエストを１つずつ処理するためサイト表示が遅い。次世代通信プロトコル「HTTP/2」は複数リクエストを並列処理するためサイト表示が速い"></p>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">HTTP/2の利用方法について</h4>
                    <div class="section_body">
                        <p>提供中のサーバーにおいては、Webサイト全体をHTTPS通信にする「常時SSL化」に対応することにより、自動的にHTTP/2によるコンテンツの表示が可能になります。</p>
                        <p>当サービスで提供中の「無料独自SSL」、もしくは「オプション独自SSL」の設定を追加した上で、Webサイトの「常時SSL化」を行ってください。<br>
                        詳細な設定方法は下記のマニュアルをご参照ください。</p>
                        <ul class="list list_arrow-right">
                            <li><a href="man_server_ssl.php">無料独自SSL設定</a></li>
                            <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み</a></li>
                            <li><a href="man_server_fullssl.php">Webサイトの常時SSL化</a></li>
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