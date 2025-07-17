<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>nginxについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでは、同時リクエストの処理や静的コンテンツの配信に最適化されたウェブサーバー「nginx」を導入したサーバー環境が利用可能です。">

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
            
                <h3 class="sub-ttl">nginxについて</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">nginxについて</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">nginxについて</h4>
                    <div class="section_body">
                        <p>
                           「nginx(エンジンエックス)」とは、大量の同時アクセスの処理に最適化され、静的コンテンツの配信に特化したWebサーバーです。突発的にPC・スマートフォンなどからアクセスが集中した場合でも高速かつ安定したWebサイトの運営が可能です。</p>
                        <p>Apacheでは、ユーザーからのリクエストを順次処理するため、リクエストの待ちが発生する場合がありますが、nginxでは大量のリクエストを同時並行で処理が可能です。
                        </p>
                        <p><img class="img" src="../img/manual/man_server_nginx_1.png" alt="Apacheの場合：リクエスト待ちが発生する場合がある、nginxの場合：大量のリクエストを同時並行で処理できるため、アクセスが集中した場合でもサイトが安定"></p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>nginx環境下での.htaccessのご利用について</dt>
                            <dd>
                                エックスサーバーではnginx環境下においても、Apache環境下で設定された「.htaccess」ファイルをそのままご利用いただくことが可能です。<br>
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