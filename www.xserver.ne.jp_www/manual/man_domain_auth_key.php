<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>認証鍵 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜JPドメイン以外のドメイン名を他社へ移管する際に必要となる「認証鍵」について、取得手順を記載しています。">

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
            
                <h3 class="sub-ttl">認証鍵</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">認証鍵について</a>
                        <ol>
                            <li><a href="#link-a01">1.認証鍵が必要なドメイン名をクリック</a></li>
                            <li><a href="#link-a02">2.「認証鍵の確認」をクリック</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">認証鍵について</h4>
                    <div class="section_body">
                        <p>ドメイン移管を行う際に、認証鍵が必要な場合は、下記手順にてご対応ください。</p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.認証鍵が必要なドメイン名をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「ドメイン」より、認証鍵が必要なドメイン名をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_auth_key_1.png?date=20230130" alt="認証鍵を取得したいドメインをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.「認証鍵の確認」をクリック</h6>
                                <div class="box_body">
                                    <p>「基本情報」の「認証鍵の確認」をクリックすると、認証鍵、あるいは認証鍵の確認に必要な手順が表示されますのでご確認ください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_auth_key_2.png?date=20240609" alt="認証鍵の確認をクリックしているスクリーンショット"></p>
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