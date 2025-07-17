<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>各種エラーメッセージ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Webアクセス時に発生する代表的なエラーメッセージと考えられる要因に関するご案内です。">

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
            
                <h3 class="sub-ttl">各種エラーメッセージ</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">各種エラーメッセージ</a>
                        <ul>
                            <li><a href="#link-a01">401 Unauthorized</a></li>
                            <li><a href="#link-a02">403 Forbidden</a></li>
                            <li><a href="#link-a03">404 Not Found</a></li>
                            <li><a href="#link-a07">429 Too Many Requests</a></li>
                            <li><a href="#link-a04">500 Internal Server Error</a></li>
                            <li><a href="#link-a05">503 Service Temporarily Unavailable</a></li>
                            <li><a href="#link-a06">510 Not Extended</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">各種エラーメッセージ</h4>
                    <div class="section_body">
                        <p>代表的なエラーメッセージは下記となります。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">401 Unauthorized</h5>
                            <div class="block_body">
                                <p>パスワード制限（サーバーパネル上の「アクセス制限」、Basic認証）でパスワードが相違した場合に発生するエラー です。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>ユーザー名、もしくはパスワードに誤りがある</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">403 Forbidden</h5>
                            <div class="block_body">
                                <p>アクセス権限がない場合に発生するエラーです。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>サーバーのご契約が有効でない（サーバーの「凍結」状態）</li>
                                            <li>ドメインフォルダ内の[ public_html ]にデフォルトドキュメント(index.html や index.htm)がアップロードされていない</li>
                                            <li>[ public_html ]（または上位フォルダ）が削除されている</li>
                                            <li>特定のIPアドレスからアクセスを拒否している</li>
                                            <li>パーミッションに誤りがある</li>
                                            <li>.htaccessの記述に誤りがある</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">404 Not Found</h5>
                            <div class="block_body">
                                <p>アクセスしたファイルが見つからない場合に発生するエラーです。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>アクセスしたURLに誤りがある</li>
                                            <li>ネームサーバーが設定されていない</li>
                                            <li>アクセス先のファイルが存在しない（アップロードされていない）</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-a07">429 Too Many Requests</h5>
                            <div class="block_body">
                                <p>アクセスしようとしたページは表示できませんでした。 このエラーは、一定時間内に多くのリクエストがあったことを意味します。時間を置いて再度アクセスしてください。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>瞬間的に大量のWebアクセスがあった</li>
                                            <li>内部プログラムにより大量のリクエストが発生した</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">500 Internal Server Error</h5>
                            <div class="block_body">
                                <p>プログラム自体へアクセスは行えているが、実行ができない（処理が完了しない）場合に発生するエラーです。<br>
                                    サーバーパネル「エラーログ」よりエラーログをダウンロードし、エラー内容をご確認ください。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb05">
                                            <li>CGIやPHPの同時接続数が多くなり、アカウント単位のリソース制限となっている</li>
                                            <li>プログラムの文法（CGI/PHPのソースコード）に誤りがある</li>
                                            <li>.htaccessの記述に誤りがある</li>
                                            <li>パーミッションに誤りがある</li>
                                            <li>php.iniの設定内容に誤りがある</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a05">503 Service Temporarily Unavailable</h5>
                            <div class="block_body">
                                <p>同時接続数（同時アクセス数）が多い場合やCGI/PHPなどの負荷が大きい場合の一時的に表示されるエラーです。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>WEBサイトへのアクセスが多くサーバーに負荷がかかっている</li>
                                            <li>WEBサイト構成により同時接続数が増えやすい構造となっている</li>
                                            <li>PHP/CGIプログラムなどの負荷が大きい</li>
                                            <li>PHP/CGIプログラムで誤動作が発生している</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a06">510 Not Extended</h5>
                            <div class="block_body">
                                <p>静的ファイル（htmlファイル、画像ファイル等）へアクセスが集中した場合の一時的に表示されるエラーです。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>考えられる要因</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>WEBサイトへのアクセスが集中している</li>
                                        </ul>
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