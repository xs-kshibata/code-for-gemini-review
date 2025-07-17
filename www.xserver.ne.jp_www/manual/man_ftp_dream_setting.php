<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Dreamweaver CC設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「Dreamweaver CC」を用いてご契約中のサーバーアカウントへFTP接続をするための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Dreamweaver CCの設定</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">Dreamweaver CCの設定</a>
						<ol>
							<li><a href="#link-a01">1.「新規サイト」をクリック</a></li>
							<li><a href="#link-a02">2.「サイト設定」</a></li>
							<li><a href="#link-a03">3.「サーバー設定」</a></li>
							<li><a href="#link-a04">4.FTP情報を入力</a></li>
						</ol>
					</li>
					<li><a href="#link-b">サブFTPアカウントでの設定方法</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Dreamweaver CCの設定</h4>
                    <div class="section_body">
                        <div class="serial-box mb20">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.「新規サイト」をクリック</h5>
                                <div class="box_body">
                                    <p>Dreamweaver CCを起動し、上部メニュー「サイト」より「新規サイト」を選択してください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_dream_setting_1.png" alt="新規サイトをクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.「サイト設定」</h5>
                                <div class="box_body">
                                    <p>「サイト設定」画面が開きますので左上の「サイト」をクリックしてください。「サイト名」と「ローカルサイトフォルダー」を任意で設定後、「保存」をクリックしてください。</p>
                                    
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>サイト名</th>
                                                <td>任意の名前を入力してください。</td>
                                            </tr>
                                            <tr>
                                                <th>ローカルサイトフォルダー</th>
                                                <td>フォルダのアイコンをクリックし、使用するフォルダを指定してください。</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_dream_setting_2.png" alt="ローカルでサイトを管理する場所を選択"></p>
                                    
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.「サーバー設定」</h5>
                                <div class="box_body">
                                    <p>左上の「サーバー」をクリックし、[＋]アイコンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_dream_setting_3.png" alt="Dreamweaver CCにてFTPアカウントを設定"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.FTP情報を入力</h5>
                                <div class="box_body">
                                    <p>下記のように各項目を入力後、「保存」をクリックしてください。</p>
                                    
                                    <p class="note">※下記はメインFTPアカウントで設定を行っています。お客様にて追加されたサブFTPアカウントを利用する場合は「<a href="#add-account">サブFTPアカウントでの設定方法</a>」をご参照ください。</p>
                                    
                                    <table class="table table_use-caption">
                                        <caption>メインFTPアカウントの設定</caption>
                                        <tbody>
                                            <tr>
                                                <th>サーバー名</th>
                                                <td>自由に名前を決めてください。<br>
                                                	例） XServer</td>
                                            </tr>
                                            <tr>
                                                <th>使用する接続</th>
                                                <td>「FTP over SSL/TLS(明示的な暗号化)」を選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>FTPアドレス</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPホスト名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                                	例） sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPユーザー名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                                	例） xsample</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPパスワードを入力してください。<br><em class="font-bold red">サーバーパスワードと共通</em>のため、お忘れの場合は<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">サーバーパスワード再設定フォーム</a> より再設定してください。<br><em class="font-bold">※XServerアカウントのパスワードとは異なります。ご注意ください。</em></td>
                                            </tr>
                                            <tr>
                                                <th>ルートディレクトリ</th>
                                                <td>アップロード先ドメインのドキュメントルート以下を設定してください。<br>
                                                	例）　/example.com/public_html/</td>
                                            </tr>
                                            <tr>
                                                <th>Web URL</th>
                                                <td>お客様のホームページアドレスを入力してください。<br>
                                                	例）　http://example.com/</td>
                                            </tr>
                                            <tr>
                                                <th>その他のオプション</th>
                                                <td>「FTPパフォーマンス最適化を使用」にチェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p><img class="img" src="../img/manual/man_ftp_dream_setting_4.png" alt="メインFTPアカウントで設定する場合"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b"><a id="add-account" name="add-account"></a>サブFTPアカウントでの設定方法</h4>
                    <div class="section_body">
                        <p>上記「4.」の設定を下記のように設定してください。</p>
                        <table class="table table_use-caption">
                            <caption>サブFTPアカウントの設定</caption>
                            <tbody>
                                <tr>
                                    <th>サーバー名</th>
                                    <td>自由に名前を決めてください。<br>
                                        例） XServer</td>
                                </tr>
                                <tr>
                                    <th>使用する接続</th>
                                    <td>「FTP over SSL/TLS(明示的な暗号化)」を選択してください。</td>
                                </tr>
                                <tr>
                                    <th>FTPアドレス</th>
                                    <td>「サーバーパネル」内「サブFTPアカウント設定」の「FTPソフト設定」に記載されている「FTPサーバー(ホスト)名」を入力してください。<br>
                                        例） sv***.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ユーザー名</th>
                                    <td>「サーバーパネル」内「サブFTPアカウント設定」で追加した、FTPアカウント名（追加名＠ドメイン名）を入力してください。<br>
                                    例） test@example.com</td>
                                </tr>
                                <tr>
                                    <th>パスワード</th>
                                    <td>サブFTPアカウントの追加時にお客様にて決めたパスワードを入力してください。</td>
                                </tr>
                                <tr>
                                    <th>ルートディレクトリ</th>
                                    <td>アップロード先ドメインのドキュメントルート以下を設定してください。<br>
                                        例）　/example.com/public_html/</td>
                                </tr>
                                <tr>
                                    <th>Web URL</th>
                                    <td>お客様のホームページアドレスを入力してください。<br>
                                        例）　http://example.com/</td>
                                </tr>
                                <tr>
                                    <th>その他のオプション</th>
                                    <td>「FTPパフォーマンス最適化を使用」にチェックを【入れる】</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p><img class="img" src="../img/manual/man_ftp_dream_setting_5.png" alt="サブFTPアカウントで設定する場合"></p>
                        
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