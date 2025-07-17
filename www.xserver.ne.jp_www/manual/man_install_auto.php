<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>簡単インストール | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでは簡単な操作で「WordPress 日本語版」などのプログラムを設置できる「簡単インストール」機能を提供しています。">

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
            
                <h3 class="sub-ttl">簡単インストール</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">簡単インストールについて</a></li>
                </ul>
                </div>                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">簡単インストールについて</h4>
                    <div class="section_body">
                        <p>エックスサーバーでは、以下のプログラムを簡単にインストールすることができます。</p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>WordPress 日本語版</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_word.php"><img src="../img/manual/logo_wordpress.png" alt="WordPress 日本語版"></a></p>
                                <p>海外で非常に高い人気を持つブログツールであり、日本でもその機能性と使いやすさで人気が急上昇しています。Movable Type 形式の記事のインポートもサポートしているため、別のブログからの乗り換えなどもご検討いただけます。</p>
                                <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress 日本語版 オフィシャルサイト</a><i class="ico ico_new-window"></i></p>
                            </dd>
                        </dl>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>EC-CUBE</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_ec4.php"><img src="../img/manual/logo_eccube.png" alt="EC-CUBE"></a></p>
                                <p>国内で最大のシェアを持つオープンソースのECサイト構築システムです。</p>
                                <p class="link"><a href="http://www.ec-cube.net/" target="_blank" rel="nofollow">EC-CUBE オフィシャルサイト</a><i class="ico ico_new-window"></i></p>
                            </dd>
                        </dl>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>PukiWiki</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_puki.php"><img src="../img/manual/logo_pukiwiki.png" alt="PukiWiki"></a></p>
                                <p>誰でも編集可能なウェブサイトを作成するためのツールです。ドキュメントサイトなどの構築に利用することができます。</p>
                                <p class="link"><a href="https://pukiwiki.sourceforge.io/" target="_blank" rel="nofollow">PukiWiki オフィシャルサイト</a><i class="ico ico_new-window"></i></p>
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