<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サーバー仕様一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバー契約に関する仕様の一覧です。転送量やドキュメントルート、デフォルトドキュメントについて記載しています。">

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
            
                <h3 class="sub-ttl">仕様一覧</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">サーバー関連の仕様一覧</a></li>
                        <li><a href="#link-b">ホームページ関連の仕様一覧</a></li>
                    </ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">サーバー関連の仕様一覧</h4>
                    <div class="section_body">
                    
                        <table class="table mb5">
                            <thead>
                                <tr><th>機能</th><th>仕様</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>OS</th>
                                    <td>Linux</td>
                                </tr>
                                <tr>
                                    <th>vCPU</th>
                                    <td>256コア<p class="note">※ご契約の時期により、異なることがあります。</p></td>
                                </tr>
                                <tr>
                                    <th>メモリ</th>
                                    <td>
                                        <p>
                                            1.5TB
                                        </p>
                                        <p class="note">
                                            ※ご契約の時期により、異なることがあります。<br>
                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内「サーバー情報」メニューで確認が可能です。
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>RAID構成</th>
                                    <td>RAID10</td>
                                </tr>
                                <tr>
                                    <th>無料独自SSL</th>
                                    <td>
                                        無料・無制限で独自SSLを利用することが可能です。(<a href="../functions/service_ssl.php#free-ssl">詳細</a>)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cron</th>
                                    <td>利用可能です。</td>
                                </tr>
                                <tr>
                                    <th>SSH</th>
                                    <td>利用可能です。</td>
                                </tr>
                                <tr>
                                    <th>telnet</th>
                                    <td>利用できません。</td>
                                </tr>
                                <tr>
                                    <th>mod_rewrite</th>
                                    <td>利用可能です。</td>
                                </tr>
                                <tr>
                                    <th>.htaccess</th>
                                    <td>利用可能です。</td>
                                </tr>
                                <tr>
                                    <th>転送量</th>
                                    <td>
                                        <p>無制限です。</p>
                                        <p class="note">※ネットワークやサーバーに対して過大な負荷が掛かる場合には、制限を行う場合があります。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>リソース保証</th>
                                    <td>
                                        <p>サーバーごとにリソースの保証値が異なります。</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>sv13001.xserver.jp 以降のサーバー</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">スタンダード</em>…CPU 仮想6コア / メモリ 8GB</li>
                                                    <li><em class="font-bold">プレミアム</em>…CPU 仮想8コア / メモリ 12GB</li>
                                                    <li><em class="font-bold">ビジネス</em>…CPU 仮想10コア / メモリ 16GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>sv10001〜sv13000.xserver.jp のサーバー</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">スタンダード</em>…CPU 仮想4コア / メモリ 4GB</li>
                                                    <li><em class="font-bold">プレミアム</em>…CPU 仮想6コア / メモリ 8GB</li>
                                                    <li><em class="font-bold">ビジネス</em>…CPU 仮想8コア / メモリ 12GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>sv2000〜sv2399.xserver.jpサーバー</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">スタンダード</em>…CPU 仮想4コア / メモリ 4GB</li>
                                                    <li><em class="font-bold">プレミアム</em>…CPU 仮想6コア / メモリ 8GB</li>
                                                    <li><em class="font-bold">ビジネス</em>…CPU 仮想8コア / メモリ 12GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>それ以前のサーバー（sv**.xtwo.ne.jpも対象）</dt>
                                            <dd>
                                                リソース保証なし
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </div>
                </section>
                <!-- /.section -->
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp.php">ホームページに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ホームページ関連の仕様一覧</h4>
                    <div class="section_body">
                        <table class="table mb5">
                            <thead>
                                <tr><th>機能</th><th>仕様</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>ウェブサーバー</th>
                                    <td>
                                        <p class="break-all">
                                            apache 2.4.x、nginx
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ドキュメントルート</th><td><p>public_html</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>ドキュメントルートとは</dt>
                                            <dd>ホームページのデータ（HTMLファイルや画像データファイルなど）を置くフォルダです。<br>
                                            ホームページとして公開したいデータは必ずこのフォルダ以下にアップロードが必要です。</dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th id="man_server_spec_default_document">デフォルトドキュメント</th>
                                    <td>
                                        <ol class="ol break-all">
                                            <li>index.html</li>
                                            <li>index.htm</li>
                                            <li>index.shtml</li>
                                            <li>index.cgi</li>
                                            <li>index.php</li>
                                            <li>default_page.html</li>
                                        </ol>
                                       <p>上記はブラウザでの表示の優先度が高い順に並んでいます。<br>仮に「index.htm」をアップロードした場合、「http://example.com/」でアクセスすると、「index.html」が優先的に表示されてしまいます。<br>その際は「index.html」を削除することで「index.htm」が表示されるようになります。</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>デフォルトドキュメントとは</dt>
                                            <dd>ブラウザで閲覧する際にファイル名を省略してアドレスを入力することができる特別な名前のファイルです。<br>
                                            通常、ホームページ上のデータをブラウザで開く場合は、「http://ドメイン名/ファイル名」のようにファイル名を含めてアドレスを入力しなければなりません。<br>
                                            デフォルトドキュメントは「http://ドメイン名/」のようにファイル名を省略して開くことができます。<br>
                                            そのため、トップページに使用するファイルはデフォルトドキュメントにして利用してください。 
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th>mod_rewrite</th>
                                    <td>利用可能です。</td>
                                </tr>
                            </tbody>
                        </table>
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