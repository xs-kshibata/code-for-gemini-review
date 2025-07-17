<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>新サーバー簡単移行 仕様詳細 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「新サーバー簡単移行」機能について、新環境へのデータコピーや、サーバ切替時に実行している動作のご案内です。">

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
            
                <h3 class="sub-ttl">新サーバー簡単移行 仕様詳細</h3>                

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">データコピー</a>
                        <ul>
                            <li><a href="#link-a01">移行先サーバーにコピーされるデータ</a></li>
                            <li><a href="#link-a02">データコピー作業時点で移行元サーバーから削除する設定</a></li>
                            <li><a href="#link-a03">移行先サーバーにおける修正項目</a></li>
                            <li><a href="#link-a04">データコピー結果の確認方法</a></li>
                            <li><a href="#link-a05">ファイルコピー時のエラーログ</a></li>
                            <li><a href="#link-a06">ファイル補正ログ</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-b">サーバー切り替え</a>
                        <ul>
                            <li><a href="#link-b01">最新サーバー環境における修正項目</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <p>「新サーバー簡単移行」によるデータコピー、サーバー切り替えの仕様詳細をご案内いたします。</p>

                
                <section class="section">
                    <h4 id="link-a" class="section_ttl">データコピー</h4>
                    <div class="section_body">
                        <p>移行元サーバーから、移行先サーバーへデータ・設定情報をコピーします。<br>
                        また、移行先サーバーにコピーしたデータ・設定情報に以下の修正を加えます。</p>
                        <section class="block">
                            <h5 id="link-a01" class="block_ttl">移行先サーバーにコピーされるデータ</h5>
                            <div class="block_body">
                                <p>以下を除き、サーバーパネルで設定している内容、サーバーアカウント内に設置するデータをすべてコピーします。</p>

                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>移行先サーバーにコピーされない設定・データ</dt>
                                    <dd>
                                        <ul class="ul">
                                            <li>アクセスログ、エラーログ</li>
                                            <li>自動バックアップで取得したバックアップデータ</li>
                                            <li>パーミッション設定によりユーザー権限でアクセスが不可なディレクトリ(フォルダ)、ファイル</li>
                                        </ul>
                                    </dd>
                                </dl>

                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-a02" class="block_ttl">データコピー作業時点で移行元サーバーから削除する設定</h5>
                            <div class="block_body">
                                <p>データコピー作業の時点で、移行元サーバーから以下の設定を削除します。</p>
                                <ul class="ul">
                                    <li>動作確認用URL</li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-a03" class="block_ttl">移行先サーバーにおける修正項目</h5>
                            <div class="block_body">
                                <p>移行先サーバーへコピーしたデータ・設定に対し、以下の修正を加えます。</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>MySQLホスト(サーバー)名の修正</dt>
                                    <dd>
                                    <p>各ドメイン名のフォルダ以下に存在する、以下拡張子のファイルに記述されているMySQLホスト(サーバー)名を、移行先サーバーで参照するホスト名に修正します。</p>
                                    <p class="border border_blue break-all">
                                        .php / .cgi / .pl / .yml / .ini
                                    </p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-a04" class="block_ttl">データコピー結果の確認方法</h5>
                            <div class="block_body">
                                <p>データコピーの結果を確認する方法として、「ファイルコピー時のエラーログ」「ファイル補正ログ」を提供しています。<br>
                                確認方法は、マニュアル「<a href="man_order_servertransfer_flow.php#link-c">新サーバー簡単移行 ご利用手順 &#8250; 動作確認</a>」をご参照ください。</p>
                                <p>ログ情報の詳細は、以下をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 id="link-a05" class="block_ttl">ファイルコピー時のエラーログ</h5>
                            <div class="block_body">
                                <p>移行元サーバーから移行先サーバーへのファイルコピー処理の結果、コピーが失敗したフォルダ、ファイルの一覧を出力します。</p>
                                <p class="mb5"><b><i class="ico ico_circle"></i>ログ出力例</b></p>
                                <div class="border border_blue break-all mb10">
                                    <p>Download Start: 2016-11-23 05:10:05</p>
                                    <p># ドメイン[xsample.xsrv.jp] <br>
                                    mirror: Access failed: 550 file000: Permission denied<br>
                                    mirror: Access failed: 550 /xsample.xsrv.jp/errortest/dir000: No such file or directory<br>
                                    mirror: Access failed: 550 subfile000: Permission denied<br>
                                    mirror: Access failed: 550 /xsample.xsrv.jp/errortest/dir777/subdir000: No such file or directory<br>
                                    mirror: Fatal error: max-retries exceeded</p>
                                    <p># ドメイン[xsample.com] <br>
                                    ok</p>
                                    <p># ドメイン[xsample2.com] <br>
                                    ok</p>
                                    <p># その他のディレクトリ・ファイル および リトライ結果<br>
                                    mirror: Access failed: 550 file000: Permission denied<br>
                                    mirror: Access failed: 550 /xsample.xsrv.jp/errortest/dir000: No such file or directory<br>
                                    mirror: Access failed: 550 subfile000: Permission denied<br>
                                    mirror: Access failed: 550 /xsample.xsrv.jp/errortest/dir777/subdir000: No such file or directory<br>
                                    mirror: Fatal error: max-retries exceeded</p>
                                    <p>Download End: 2016-11-23 14:22:35</p>
                                </div>
                                <ul class="ul">
                                    <li><b>Download Start</b><br>
                                    データコピー開始日時。24時間表示です。<br>
                                    エラーがない場合も出力します。</li>
                                    <li><b>Download End</b><br>
                                    データコピー終了日時。24時間表示です。<br>
                                    エラーがない場合も出力します。</li>
                                </ul>
                                <p>以下は、「設定ドメイン」と、「その他のディレクトリ・ファイル および リトライ結果」に分けて出力します。</p>
                                <ul class="ul">
                                    <li><b>ok</b><br>
                                    正常にデータコピー作業が完了した場合に出力されます。</li>
                                    <li><b>mirror: Access failed</b><br>
                                    ファイル/ディレクトリへのアクセスに失敗したことを示しています。<br>
                                    対象のファイル/ディレクトリや原因は、この続きに記録されています。</li>
                                    <li><b>mirror: Fatal error: max-retries exceeded</b><br>
                                    このエラーは、データコピー作業において何らかの理由による失敗を検知した時点で記録されます。<br>
                                    ドメインごとでエラーが記録されましても、「リトライ結果」でエラーが記録されていなければ、データコピー作業は正常に完了しています。</li>
                                    <li><b>mirror: Fatal error: gnutls_record_recv: The TLS connection was non-properly terminated.</b><br>
                                    このエラーは、データコピー作業において何らかの理由による失敗を検知した時点で記録されます。<br>
                                    ドメインごとでエラーが記録されましても、「リトライ結果」でエラーが記録されていなければ、データコピー作業は正常に完了しています。</li>
                                </ul>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-a06" class="block_ttl">ファイル補正ログ</h5>
                            <div class="block_body">
                                <p>移行先サーバーへのデータコピーに際して修正したファイルと修正内容を一覧で出力します。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">サーバー切り替え</h4>
                    <div class="section_body">
                        <p>「サーバー切り替え」を実施する時点で、以下の設定を修正します。</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">最新サーバー環境における修正項目</h5>
                            <div class="block_body">
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>「DNSレコード設定」内容の修正</dt>
                                    <dd>
                                        <p>各レコードの「内容」に記述されている移行元サーバーのIPアドレス、ホスト名(sv***.xserver.jp)を移行先サーバーのIPアドレス、ホスト名に修正します。</p>
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