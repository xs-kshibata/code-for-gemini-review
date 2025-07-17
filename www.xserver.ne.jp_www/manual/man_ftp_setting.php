<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTPソフトの設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご契約のサーバーアカウントへFTP接続する際FTPソフトに設定する内容（FTPサーバー名など）について記載しています。">

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
            
                <h3 class="sub-ttl">FTPソフトの設定</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">FTPソフトの設定について</a>
						<ul>
							<li><a href="#link-a01">メインFTPアカウント（初期FTPアカウント）の設定</a></li>
							<li><a href="#link-a02">サブFTPアカウントの設定</a></li>
							<li><a href="#link-a03">正常に接続できない場合</a></li>
						</ul>
					</li>
					<li><a href="#link-b">重要：アップロード先について</a>
						<ul>
							<li><a href="#link-b01">ご参考：アップロードしたファイルをブラウザで確認する際のURL</a></li>
							<li><a href="#link-b02">デフォルトドキュメントについて</a></li>
						</ul>
					</li>
					<li><a href="#link-c">ファイルやフォルダが削除できなくなった場合</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                </ul>

                <div class="manual-youtube-box">
                    <p>動画でも概要について説明しておりますので、こちらでもご確認いただけます。</p>
                    <div class="manual-youtube">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/B0v4qYVKHYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FTPソフトの設定について</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">メインFTPアカウント（初期FTPアカウント）の設定</h5>
                            <div class="block_body">
                                <p>メインFTPアカウント（初期FTPアカウント）は、サーバーに設定をした全ドメインへ接続が可能です。</p>
                                <table class="table table_use-caption">
                                    <caption>メインFTPアカウント（初期FTPアカウント）の設定</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w30per">FTPホスト名<br>（FTPサーバー名）</th>
                                            <td>サーバーアカウント設定完了メール記載のFTPホスト名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                            	例） sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>FTPユーザー名<br>（FTPアカウント名）</th>
                                            <td>サーバーアカウント設定完了メール記載のFTPユーザー名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                            	例） xsample</td>
                                        </tr>
                                        <tr>
                                            <th>FTPパスワード</th>
                                            <td>サーバーアカウント設定完了メール記載のFTPパスワードを入力してください。<br><em class="font-bold red">サーバーパスワードと共通</em>のため、お忘れの場合は<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">サーバーパスワード再設定フォーム</a> より再設定してください。<br><em class="font-bold">※XServerアカウントのパスワードとは異なります。ご注意ください。</em></td>
                                        </tr>
                                        <tr>
                                            <th>ホスト初期フォルダ</th>
                                            <td>空欄にしてください。</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">サブFTPアカウントの設定</h5>
                            <div class="block_body">
                                <p>サーバーパネル「<a href="man_ftp_add.php">サブFTPアカウントの追加</a>」でお客様にて追加作成したサブFTPアカウントでの設定方法です。</p>
                                
                                <table class="table table_use-caption">
                                    <caption>サブFTPアカウントの設定</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w30per">FTPホスト名<br>（FTPサーバー名）</th>
                                            <td>「サーバーパネル」内「サブFTPアカウント設定」の「FTPソフト設定」に記載されている「FTPサーバー(ホスト)名」を入力してください。<br>
                                            	例） sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>FTPユーザー名<br>（FTPアカウント名）</th>
                                            <td>「サーバーパネル」内「サブFTPアカウント設定」で追加した、FTPアカウント名（追加名＠ドメイン名）を入力してください。<br>
                                            例） test@example.com</td>
                                        </tr>
                                        <tr>
                                            <th>FTPパスワード</th>
                                            <td>サブFTPアカウントの追加時にお客様にて決めたパスワードを入力してください。</td>
                                        </tr>
                                        <tr>
                                            <th>ホスト初期フォルダ</th>
                                            <td>空欄にしてください。</td>
                                        </tr>
                                    </tbody>
                                </table>

								<h5 class="block_ttl mt50" id="link-a03">正常に接続できない場合</h5>
								<div class="block_body">
									<p>
										一部のソフトウェアや環境において、正常に接続できない場合があります。その際は、ソフトウェアの設定にて PASV(パッシブ)モード での接続を行ってください。
									</p>
								</div>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b"><a id="upload" name="upload"></a>重要：アップロード先について</h4>
                    <div class="section_body">
                        <p>当サービスのサーバーでは、ホームページのデータを「../ドメイン名/public_html/」以下へアップロードしていただく必要があります。</p>
                        <p>メインFTPアカウント（初期FTPアカウント）で接続をすると、「ドメイン名」フォルダが表示されますので、 その中の「public_html」フォルダへアップロードを行ってください。</p>

						<aside class="msg msg_caution">
							<h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
							<div class="msg_body">
								<p>サーバー上には「public_html」や「mail」など複数のフォルダがあらかじめ作成されています。これらは重要なフォルダですので、名前変更や削除は行わないでください。</p>
							</div>
						</aside>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">ご参考：アップロードしたファイルをブラウザで確認する際のURL</h5>
                            <div class="block_body">
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>アップロードしたファイルの位置</th>
                                            <th>URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>/example.com/public_html/index.html</th>
                                            <td>http://example.com/　※1</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/test.html</th>
                                            <td>http://example.com/test.html</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/xserver/index.html</th>
                                            <td>http://example.com/xserver/　※1</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/xserver/index.html</th>
                                            <td>http://xserver.example.com/　※2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note note_x2">※1 ファイル名「index.html」などのデフォルトドキュメントは、URLから省略してもアクセスが可能です。</p>
                                <p class="note note_x2">※2 「http://xserver.example.com/」のURLでアクセスするには、事前に「<a href="man_domain_subdomain_setting.php">サブドメイン設定</a>」が必要です。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">デフォルトドキュメントについて</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>index.html</li>
                                    <li>index.htm</li>
                                    <li>index.shtml</li>
                                    <li>index.cgi</li>
                                    <li>index.php</li>
                                    <li>default_page.html</li>
                                </ol>
                                <p>上記はブラウザでの表示の優先度が高い順に並んでいます。<br>
                                仮に「index.htm」をアップロードした場合、「http://example.com/」でアクセスすると、「index.html」が優先的に表示されてしまいます。<br>
                                その際は「index.html」を削除することで「index.htm」が表示されるようになります。</p>

                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">ファイルやフォルダが削除できなくなった場合</h4>
                    <div class="section_body">
                        <p>ファイルやフォルダの名前に日本語などの全角文字を使うと、削除ができなくなることがあります。<br>
                            <a href="../manual/man_ftp_filezilla_setting.php">FileZilla</a>のソフトを利用する事で削除できる場合がございますので、FileZillaを利用して該当ファイルの削除をお試しください。</p>
                            <p>FileZillaを利用しても削除できない場合は、<a href="../support/#to-supportform">メールサポート</a>までお問い合わせください。</p>
                            <p class="note">※メールサポートへのご連絡の際は、削除できないファイル名・フォルダ名と該当ファイル・フォルダが設置されているパス（階層）をお知らせください。</p>
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