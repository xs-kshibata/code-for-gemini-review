<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>php.ini設定で設定可能な項目について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルの「php.ini設定」機能で簡単に変更できる項目の一覧です。「php.ini」を直接編集することも可能です。">

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
            
                <h3 class="sub-ttl">php.ini設定で設定可能な項目について</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">php.ini設定で設定可能な項目</a>
                            <ul>
                                <li><a href="#link-a01">エラー設定</a></li>
                                <li><a href="#link-a02">セッション設定</a></li>
                                <li><a href="#link-a03">文字コード設定</a></li>
                                <li><a href="#link-a04">その他の設定</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-b">php.iniの主要な項目の初期値</a>
                            <ul>
                                <li><a href="#link-b01">エラー設定</a></li>
                                <li><a href="#link-b02">文字コード設定</a></li>
                                <li><a href="#link-b03">その他の設定</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">php.ini設定で設定可能な項目</h4>
                    <div class="section_body">
                        <p>「php.ini設定」において、設定の変更が可能な項目は下記の通りです。<br>
                        （直接編集する場合はこの限りではありません。）</p>
                        
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「Xアクセラレータ Ver.2」をご利用中の場合</h6>
                            <div class="msg_body">
                                <p>
                                    「Xアクセラレータ Ver.2」利用時、php.ini設定の一部項目が無効となります。<br>
                                    詳細は以下のマニュアルをご確認ください。
                                </p>
                                <ul class="list list_arrow-right">
                                    <li><a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></li>
                                </ul>
                            </div>
                        </aside>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">エラー設定</h5>
                            <div class="block_body">
                            
                                <table class="table break-word"> 
                                    <tbody>
                                        <tr>             
                                            <th>display_startup_errors</th>
                                            <td><p>PHP の起動シーケンスで発生するエラーを表示するかどうかを設定します。</p></td>
                                        </tr>
                                        <tr>
                                            <th>display_errors</th>
                                            <td>
                                                <p>PHPプログラム実行時のエラー内容を画面に出力するかどうかを設定します。</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>On設定</dt>
                                                    <dd>ブラウザ上にエラーを表示することができます。<br>
                                                    PHPプログラムの設置やエラーの確認時にご利用ください。</dd>
                                                    <dt><i class="ico ico_square-fill"></i>Off設定</dt>
                                                    <dd>ブラウザ上にエラーが表示されなくなります。<br>
                                                    PHPプログラムの設置後、運用中はOffに変更することをお勧めします。</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>error_reporting</th>
                                            <td>
                                                <p>PHPプログラム実行時のエラー出力レベルを設定します。</p>
                                                <p>[設定可能な値]</p>
                                                <ul class="ul">
                                                    <li>E_ERROR … 重大な実行時エラーを表示する。</li>
                                                    <li>E_WARNING … 実行時の警告メッセージを表示する。</li>
                                                    <li>E_PARSE … コンパイルの際のパースエラーを表示する。</li>
                
                                                    <li>E_NOTICE … 実行時の（致命的ではない）警告メッセージを表示する。</li>
                                                    <li>E_CORE_ERROR … PHPの起動シーケンスでの致命的なエラーを表示する。</li>
                                                    <li>E_CORE_WARNING … （致命的ではない）警告を表示する。</li>
                                                    <li>E_COMPILE_ERROR … コンパイル時の致命的なエラーを表示する。</li>
                                                    <li>E_COMPILE_WARNING … コンパイル時の警告（致命的ではない）を表示する。</li>
                                                    <li>E_USER_ERROR … ユーザーによって発行されるエラーメッセージを表示する。</li>
                
                                                    <li>E_USER_WARNING … ユーザーによって発行される警告メッセージを表示する。</li>
                                                    <li>E_USER_NOTICE … ユーザーによって発行される注意メッセージを表示する。</li>
                                                    <li>E_ALL … 上記全てのメッセージを表示する。</li>
                                                    <li>E_STRICT … 実行時の注意を表示する。</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">セッション設定</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr>
                                            <th>session.use_cookies</th>
                                            <td>クライアント側へのセッションIDの保存に、クッキーを使用するかどうかを指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>session.use_only_cookies</th>
                                            <td>クライアント側へのセッションIDの保存に、クッキーのみを使用可能とする指定を行います。</td>
                                        </tr>
                                        <tr>
                                            <th>session.name</th>
                                            <td>クッキーに設定されるセッション名を指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>session.auto_start</th>
                                            <td>リクエスト開始時にセッションを自動的に開始するかどうかを指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>session.cookie_lifetime</th>
                                            <td>クッキーの有効期間を（秒単位で）指定します。<br>0を設定するとブラウザをクローズするまでセッションが有効となります。</td>
                                        </tr>
                                        <tr>
                                            <th>session.cookie_path</th>
                                            <td>クッキーを有効とするパスを指定します。<br>ここで指定したパス以下へのアクセスのみクッキーが有効となります。</td>
                                        </tr>           
                                        <tr>
                                            <th>session.use_trans_sid</th>
                                            <td>URLへのセッションIDの設定を自動で行うかを設定します。</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">文字コード設定</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr> 
                                            <th>mbstring.language</th>
                                            <td>デフォルトの言語を設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.internal_encoding</th>
                                            <td>内部文字エンコーディングを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.http_input</th>
                                            <td>HTTP入力文字エンコーディング変換を設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.http_output</th>
                                            <td>HTTP出力文字エンコーディング変換を設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.encoding_translation</th>
                                            <td>内部文字エンコーディングへの変換を有効にするかどうかを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.detect_order</th>
                                            <td>文字コード検出を設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.substitute_character</th>
                                            <td>無効な文字を代替する文字を設定します。</td>
                                        </tr>           
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">その他の設定</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr>
                                            <th class="w30per-s">safe_mode</th>
                                            <td>プログラムファイルの所有者が、プログラム内の関数によって処理されているファイル及びディレクトリの所有者と同一かの確認を行う設定をします。</td>
                                        </tr>
                                        <tr>
                                            <th>max_execution_time</th>
                                            <td>無限ループなどにより永続的に実行されているスクリプトが、強制終了されるまでの時間を秒単位で指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>max_input_time</th>
                                            <td>スクリプトが POST、GET、そしてファイルアップロードなどの入力をパースする最大の時間を秒単位で指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>memory_limit</th>
                                            <td>プログラムが使用できる最大メモリ数を指定します。</td>
                                        </tr>
                                        <tr>
                                            <th>post_max_size</th>
                                            <td>POSTデータの許容最大サイズを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>upload_max_filesize</th>
                                            <td>アップロードファイルの許容サイズを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>register_globals</th>
                                            <td>環境変数やGET値、POST値などの、PHPの外部からくる値を全て $変数名 という書式で使用可能とする設定を行います。<br>
                                            この機能は PHP 5.3.0 で 非推奨となりました。<br>
                                            この機能はOffにすることが推奨されています。</td>
                                        </tr>
                                        <tr>
                                            <th>magic_quotes_gpc</th>
                                            <td>PHPのフォームより文字列データを取得する際、エスケープ処理(「'」や「"」や「<span class="font-en">\</span>」の前に「<span class="font-en">\</span>」を追加)を自動で行うかどうかを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>allow_url_fopen</th>
                                            <td>URLオブジェクトに対してファイル同様の操作を可能とする設定をします。</td>
                                        </tr>
                                        <tr>
                                            <th>file_uploads</th>
                                            <td>HTTP ファイルアップロードを可能とするかどうかを設定します。</td>
                                        </tr>
                                        <tr>
                                            <th>allow_url_include</th>
                                            <td>include関数、include_once関数、 require関数、require_once関数で、URL対応のfopenラッパーが使用できるようになります。
                                            <p class="note mb0">※PHP5.2以降でご利用いただけます。</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">php.iniの主要な項目の初期値</h4>
                    <div class="section_body">
                       
						<div class="msg">
							<h5 class="msg_ttl"><i class="ico ico_circle"></i>php.iniにおける初期値について</h5>
							<div class="msg_body">
								<p>2017年3月より、(※)の項目における初期値を変更いたしました。<br/> 以下の操作時点で本項目で案内する初期値に設定されます。
								</p>

								<p>▼php.ini設定<br/> 「php.ini設定初期化」
								</p>
								<p>▼ドメイン設定<br/> 「ドメイン設定の追加」「ドメイン設定の初期化」「ウェブ領域・設定の初期化」 </p>
							</div>
						</div>
						
						<section class="block">
							<h5 class="block_ttl" id="link-b01">エラー設定</h5>
							<div class="block_body">

								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">項目</th>
                                                <th>初期値</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>display_startup_errors</th>
											<td>OFF</td>
										</tr>
										<tr>
											<th>display_errors </th>
											<td>ON</td>
										</tr>
										<tr>
											<th>error_reporting※</th>
											<td>E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
                       
						<section class="block">
							<h5 class="block_ttl" id="link-b02">文字コード設定</h5>
							<div class="block_body">
								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">項目</th>
                                                <th>初期値</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>default_charset※ </th>
											<td>UTF-8</td>
										</tr>
										<tr>
											<th>mbstring.language</th>
											<td>Japanese</td>
										</tr>
										<tr>
											<th>mbstring.internal_encoding※</th>
											<td>UTF-8</td>
										</tr>
										<tr>
											<th>mbstring.http_input※</th>
											<td>pass</td>
										</tr>
										<tr>
											<th>mbstring.http_output※</th>
											<td>pass</td>
										</tr>
										<tr>
											<th>mbstring.encoding_translation</th>
											<td>OFF</td>
										</tr>
										<tr>
											<th>mbstring.detect_order</th>
											<td>auto</td>
										</tr>
										<tr>
											<th>mbstring.substitute_character</th>
											<td>none</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
                        
						<section class="block">
							<h5 class="block_ttl" id="link-b03">その他の設定</h5>
							<div class="block_body">
								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">項目</th>
                                                <th>初期値</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>default_mimetype</th>
											<td>"text/html"</td>
										</tr>
										<tr>
											<th>date.timezone</th>
											<td>"Asia/Tokyo"</td>
										</tr>
									</tbody>
								</table>
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