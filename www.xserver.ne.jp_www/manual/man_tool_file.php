<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ファイルマネージャ利用方法 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ブラウザからファイル操作が行える「ファイルマネージャ」で提供する機能の一覧と利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">ファイルマネージャ</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">ファイルマネージャ（WebFTP）とは</a></li>
					<li><a href="#link-b">ログイン方法</a>
						<ul>
							<li><a href="#link-b01">画像認証（reCAPTCHA認証）について</a></li>
							<li><a href="#link-b02">「ログインする」ボタンを押しても画面が切り替わらない場合</a></li>
						</ul>
					</li>
					<li><a href="#link-c">機能説明</a></li>
					<li><a href="#link-d">目的別説明</a>
						<ul>
							<li><a href="#link-d01">フォルダ/ファイルを移動したい</a></li>
							<li><a href="#link-d02">ファイルをアップロードしたい</a></li>
							<li><a href="#link-d03">ファイルをダウンロードしたい</a></li>
							<li><a href="#link-d04">フォルダ/ファイルを新しく作りたい</a></li>
                            <li><a href="#link-d05">圧縮したい</a></li>
                            <li><a href="#link-d06">展開したい</a></li>
						</ul>
					</li>
				</ul>
				</div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">ファイルマネージャ（WebFTP）とは</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャ</a>は、ブラウザを使用してファイルのアップロード・削除等を行うためのシステムです。</p>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>下記URLよりファイルマネージャへのログインが可能です。<br>
                            FTPユーザー名とFTPパスワードでログインをお試しください。</p>
                        <p><i class="ico ico_square-fill"></i>ファイルマネージャ ログインURL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/</a></p>
                        <p>また、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部「ご契約一覧 > サーバー」の「ファイル管理」からもアクセスが可能です。</p>
					</div>
					<h5 id="link-b01" class="block_ttl">画像認証（reCAPTCHA認証）について</h5>
					<div class="section_body">
						<p>
							お使いの環境やアクセス状況等によって、画像認証（reCAPTCHA認証）が表示される場合があります。<br>
							画像が表示された場合は、画面上部に表示される質問内容についてご回答をお願いいたします。
						</p>
						<p>画像認証(reCAPTCHA認証)画面例</p>
						<p><img class="img" src="../img/manual/man_tool_server_2.png" alt="reCAPTCHA画面の例"></p>
					</div>

					<h5 id="link-b02" class="block_ttl">「ログインする」ボタンを押しても画面が切り替わらない場合</h5>
					<div class="section_body">
						<p>
							以下のサイトに対してJavaScriptが無効になっている場合、ログインができません。</br>
							https://*.xserver.ne.jp</br>
							https://www.google.com</br>
							https://www.gstatic.com</br>
							</br>
							JavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。
						</p>
					</div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">機能説明</h4>
                    <div class="section_body">
                        <p>ログインすると、下記画面が表示されます。</p>
                        <p><img class="img" src="../img/manual/man_tool_file_1.png?date=200827" alt="ファイルマネージャのスクリーンショット"></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>1.新規ファイル</th>
                                    <td>新しいファイルの作成ができます。</td>
                                </tr>
                                <tr>
                                    <th>2.新規フォルダ</th>
                                    <td>新しいフォルダの作成ができます。</td>
                                </tr>
                                <tr>
                                    <th>3.コピー</th>
                                    <td>フォルダ、ファイルを選択し、コピーを作成できます。</td>
                                </tr>
                                <tr>
                                    <th>4.編集</th>
                                    <td>ファイルの編集ができます。<br>
                                        表示するファイル名の文字コードを変更することができます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>5.アップロード</th>
                                    <td>お使いのPC内のファイルを選択し、アップロードが行えます。</td>
                                </tr>
                                <tr>
                                    <th>6.ダウンロード</th>
                                    <td>ファイルマネージャ上のファイルを選択し、ダウンロードが行えます。</td>
                                </tr>
                                <tr>
                                    <th>7.圧縮</th>
                                    <td>ファイルマネージャ上のフォルダ、ファイルを選択し、圧縮ファイルを作成できます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>8.展開</th>
                                    <td>圧縮ファイルを選択し、フォルダ、ファイルを展開できます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>9.削除</th>
                                    <td>フォルダ、ファイルの削除ができます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>10.名前変更</th>
                                    <td>フォルダ、ファイル名の変更ができます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>11.パーミッション変更</th>
                                    <td>パーミッションの変更ができます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>12.現在のパス</th>
                                    <td>現在表示されているディレクトリのパスが表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>13.現在のファイル一覧</th>
                                    <td>現在選択されているディレクトリのファイル一覧が表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>14.ツリー</th>
                                    <td>全てのディレクトリ階層が表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>15.権限</th>
                                    <td>パーミッションが表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>16.更新日時</th>
                                    <td>更新された日時が表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>17.サイズ</th>
                                    <td>ファイルの容量を表示されます。
                                    </td>
                                </tr>
                                <tr>
                                    <th>18.種類</th>
                                    <td>ファイルの種類が表示されます。
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">目的別説明</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-d01">フォルダ/ファイルを移動したい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">「13.現在のファイル一覧」に表示されているフォルダ/ファイルをドラッグし、移動したいフォルダ上でドロップしてください。</p></li>
                                    <li><p class="mb5">フォルダ/ファイルがドロップしたフォルダに移動します。</p></li>
                                </ol>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d02">ファイルをアップロードしたい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">「5.アップロード」をクリックし、表示された領域にアップロードしたいファイルをドロップしてください。</p></li>
                                    <li><p class="mb5">アップロードするファイル対象に問題がなければ、「アップロード」をクリックしてください。</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d03">ファイルをダウンロードしたい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">ダウンロードしたいファイルをクリックし、選択状態にしてください。</p></li>
                                    <li><p class="mb5">「6.ダウンロード」をクリックし、ダウンロードを実行してください。</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d04">フォルダ/ファイルを新しく作りたい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">「1.新規ファイル」「2.新規フォルダ」をクリックしてください。</p></li>
                                    <li><p class="mb5">作成するフォルダ/ファイル名を入力し、「作成」をクリックしてください。</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d05">圧縮したい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">圧縮したいフォルダ/ファイルをクリックし選択状態にしてください。</p></li>
                                    <li><p class="mb5">「7.圧縮」をクリックしてください。</p></li>
                                    <li><p class="mb5">圧縮後の拡張子を選択し、「圧縮」をクリックしてください。</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d06">展開したい</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">展開したい圧縮ファイルをクリックし選択状態にしてください。</p></li>
                                    <li><p class="mb5">「8.展開」をクリックしてください。</p></li>
                                </ol>
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