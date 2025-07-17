<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>モバイル向けサイトの振り分け方 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「.htaccess」を用いてPC用、モバイル用のサイトへアクセス先を振り分ける方法について記載しています。">

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
            
                <h3 class="sub-ttl">モバイル向けサイトの振り分け方</h3>
                

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">モバイル向けサイトの振り分け方</a>
                        <ul>
                            <li><a href="#link-a01">.htaccessに追加する振り分け設定について</a></li>
                            <li><a href="#link-a02">(参考)振り分け設定時の記述について</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">モバイル向けサイトの振り分け方</h4>
                    <div class="section_body">
                        <p><a href="man_server_htaccess.php">.htaccess</a>を編集することにより、PC用とモバイル用のサイトに振り分けるなどの設定をすることが可能です。<br>
                        この仕組みは、アクセス元の情報（USER_AGENT）を読み取り、それに対応したページへ振り分けることで実現します。</p>
                        
                        <p>以下の図は各OSからの「example.com」へのアクセスに対して、PC用とモバイル用のサイトに振り分けているイメージです。なお、各OSごとに振り分け先を変更することも可能です。</p>
                        <p><img class="img" src="../img/manual/man_server_mobby_1.png" alt="ＰＣ・スマートフォンなど、各OSから同じページにアクセスしている図"></p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">.htaccessに追加する振り分け設定について</h5>
                            <div class="block_body">
                                <p>以下のコード例を参考に、お客様のFTP領域上にある.htaccessファイルを編集してください。<br>
                                例では各OSごとに振り分け先を変更する設定内容を、主要なOSのみ掲載しております。<br>
                                不足している部分はお客様ご自身でのご確認をお願いいたします。</p>
                                
                                <p>.htaccessの編集方法については「<a href="man_server_htaccess.php#edit">.htaccessの編集</a>」をご参照ください。</p>
                                
                                <p class="note">※コピーしてご利用される場合は「<strong>http://example.com/sp/</strong>」の部分を、お客様のモバイル用サイトURLに変更してください。</p>
                                <pre class="code">Options +FollowSymLinks
RewriteEngine On

# iPhone
RewriteCond %{HTTP_USER_AGENT} iPhone [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# Android
RewriteCond %{HTTP_USER_AGENT} Android.*Mobile [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# Windows Phone
RewriteCond %{HTTP_USER_AGENT} Windows\ Phone [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# iPod touch
RewriteCond %{HTTP_USER_AGENT} iPod [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# BlackBerry
RewriteCond %{HTTP_USER_AGENT} (BB10.*Mobile|BlackBerry) [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]</pre>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">(参考)振り分け設定時の記述について</h5>
                            <div class="block_body">
                                <p>.htaccessへの記述は、下記の例のような構成になっています。</p>
                                <p class="mb0">（記述例）</p>
                                <p><img class="img" src="../img/manual/man_server_mobby_8.png" alt=".htaccessへの記述例"></p>
                                <dl class="dl">
                                    <dt>(※1)各OSを識別する記述について</dt>
                                    <dd>
                                        <p>アクセス元のユーザーエージェント(端末識別情報)を取得し、OSを識別しています。<br>
                                        それぞれ下記のように識別しています。</p>
                                        <ul class="ul ul_list_margin">
                                            <li>「<em class="font-bold">iPhone</em>」の文字列が含まれる場合<br>
                                            …<em class="font-bold">iPhone</em>の携帯電話からと判断</li>
                                            <li>「<em class="font-bold">Android・Mobile</em>」の文字列が含まれる場合<br>
                                            …<em class="font-bold">Android</em>の携帯電話からと判断</li>
                                            <li>「<em class="font-bold">Windows Phone</em>」の文字列が含まれる場合<br>
                                            …<em class="font-bold">Windows Phone</em>の携帯電話からと判断</li>
                                            <li>「<em class="font-bold">BB10・Mobile、またはBlackBerry</em>」の文字列が含まれる場合<br>
                                            …<em class="font-bold">BlackBerry</em>の携帯電話からと判断</li>
                                        </ul>
                                    </dd>
                                    <dt>(※2)リダイレクト先の記述について</dt>
                                    <dd>
                                        <p>本マニュアルにおける設置例の場合、<br><br>
                                        <em class="font-bold">http://example.com/</em><br>
                                        <em class="font-bold">http://example.com/index.html</em><br><br>
                                        へのアクセスがあった場合に、<br><br>
                                        <em class="font-bold">http://example.com/sp/</em><br><br>
                                        へとリダイレクトされます。</p>
                                    </dd>
                                </dl>
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