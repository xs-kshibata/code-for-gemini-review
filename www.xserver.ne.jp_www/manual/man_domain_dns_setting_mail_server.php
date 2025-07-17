<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>外部メールサーバーをお使いいただく場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「DNSレコード編集」機能で外部メールサーバーを使用する際の注意事項について記載しています。">

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
            
                <h3 class="sub-ttl">外部メールサーバーをお使いいただく場合</h3>


                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">外部メールサーバーをお使いいただく場合</a>
                            <ul>
                                <li><a href="#link-a01">設定されているメールアカウントの削除</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">外部メールサーバーをお使いいただく場合</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">設定されているメールアカウントの削除</h5>
                            <div class="block_body">
                                <p>外部メールサーバーでご利用になりたいドメインに対して、設定されているメールアカウント、メーリングリスト、メールマガジンをすべて削除していただく必要がございます。</p>
                                <p>削除されたことをご確認いただきましたら、そのまま外部のメールサーバーをご利用いただくことが可能となります。</p>
                            </div>
                        </section>
                        
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