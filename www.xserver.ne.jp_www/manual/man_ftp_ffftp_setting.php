<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FFFTP設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「FFFTP」を用いてご契約中のサーバーアカウントへFTP接続をするための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">FFFTPの設定</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">FFFTP Ver.1.98gの設定</a>
						<ol>
							<li><a href="#link-a01">1.ダウンロード、インストール</a></li>
							<li><a href="#link-a02">2.「ホストの設定」をクリック</a></li>
							<li><a href="#link-a03">3.「新規ホスト」をクリック</a></li>
							<li><a href="#link-a04">4.「基本」タブをクリック</a></li>
							<li><a href="#link-a05">5.「暗号化」タブをクリック</a></li>
							<li><a href="#link-a06">6.「接続」をクリック</a></li>
							<li><a href="#link-a07">7.証明書に関する確認画面が表示される場合</a></li>
							<li><a href="#link-a08">8.「暗号化の状態の保存」</a></li>
							<li><a href="#link-a09">9.接続完了</a></li>
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
                    <h4 class="section_ttl" id="link-a">FFFTP Ver.1.98gの設定</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.ダウンロード、インストール</h5>
                                <div class="box_body">
                                    <p>FFFTPは、以下のサイトよりダウンロードし、インストールしてください。</p>
                                    <p class="mb0"><i class="ico ico_square-fill"></i>FFFTP(エフエフエフティーピー)プロジェクト日本語トップページ - OSDN</p>
                                    <p class="link"><a href="https://osdn.jp/projects/ffftp/" target="_blank" rel="nofollow">https://osdn.jp/projects/ffftp/</a><i class="ico ico_new-window"></i></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.「ホストの設定」をクリック</h5>
                                <div class="box_body">
                                    <p>FFFTPを起動し、「接続」→「ホストの設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_1.png" alt="FFFTPでホストの設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.「新規ホスト」をクリック</h5>
                                <div class="box_body">
                                    <p>「ホスト一覧」画面が表示されるので、「新規ホスト」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_2.png" alt="FFFTPで新規ホストを選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.「基本」タブをクリック</h5>
                                <div class="box_body">
                                    <p>「ホストの設定」の「基本」タブをクリックし、下記のように設定してください。</p>
                                    
                                    <p class="note">※下記はメインFTPアカウントで設定を行っています。お客様にて追加されたFTPアカウントを利用する場合は「<a href="#add-account">サブFTPアカウントでの設定方法</a>」をご参照ください。</p>
                                    <table class="table table_use-caption">
                                        <caption>メインFTPアカウントの設定</caption>
                                        <tbody>
                                            <tr>
                                                <th>ホストの設定名</th>
                                                <td>自由に名前を決めてください。<br>例） XServer</td>
                                            </tr>
                                            <tr>
                                                <th>ホスト名（アドレス）</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPホスト名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                                    例） sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPユーザー名を入力してください。<br>※サーバーパネル → サブFTPアカウント設定 → <a href="man_ftp_info_check.php">FTPソフト設定</a> からも確認が可能です。<br>
                                                    例） xsample</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード/パスフレーズ</th>
                                                <td>サーバーアカウント設定完了メール記載のFTPパスワードを入力してください。<br><em class="font-bold red">サーバーパスワードと共通</em>のため、お忘れの場合は<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">サーバーパスワード再設定フォーム</a> より再設定してください。<br><em class="font-bold">※XServerアカウントのパスワードとは異なります。ご注意ください。</em></td>
                                            </tr>
                                            <tr>
                                                <th>ローカルの初期フォルダ</th>
                                                <td>空欄</td>
                                            </tr>
                                            <tr>
                                                <th>ホストの初期フォルダ</th>
                                                <td>空欄</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_3.png" alt="FFFTP：ホストの設定のスクリーンショット"></p>
                                    
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.「暗号化」タブをクリック</h5>
                                <div class="box_body">
                                    <p>「暗号化」タブをクリックしてください。4つのチェックボックスのうち「FTPS（Explicit）で接続」のみにチェックが入っている状態にし、「OK」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_4.png" alt="FFFTPで新規ホストを選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.「接続」をクリック</h5>
                                <div class="box_body">
                                    <p>「ホスト一覧」画面に戻るので、「XServer」を選択し「接続」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_5.png" alt="FFFTPでFTPサーバーに接続し、ドメイン名を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.証明書に関する確認画面が表示される場合</h5>
                                <div class="box_body">
                                    <p>証明書に関する確認画面が表示される場合、「はい」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_6.png" alt="FFFTPでFTPサーバーに接続し、ドメイン名を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.「暗号化の状態の保存」</h5>
                                <div class="box_body">
                                    <p>「暗号化の状態の保存」画面が表示されたら「はい」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_7.png" alt="FFFTPでFTPサーバーに接続し、public_html を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a09">9.接続完了</h5>
                                <div class="box_body">
                                    <p>下図のような画面が表示されたら接続完了です。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_8.png" alt="FFFTPでFTPサーバーに接続し、public_html を選択しているスクリーンショット"></p>
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
                                    <th>ホストの設定名</th>
                                    <td>自由に名前を決めてください。<br>例） XServer</td>
                                </tr>
                                <tr>
                                    <th>ホスト名（アドレス）</th>
                                    <td>「サーバーパネル」内「サブFTPアカウント設定」の「FTPソフト設定」に記載されている「FTPサーバー(ホスト)名」を入力してください。<br>
                                        例） sv***.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ユーザー名</th>
                                    <td>「サーバーパネル」内「サブFTPアカウント設定」で追加した、FTPアカウント名（追加名＠ドメイン名）を入力してください。<br>
                                    例） test@example.com</td>
                                </tr>
                                <tr>
                                    <th>パスワード/パスフレーズ</th>
                                    <td>サブFTPアカウントの追加時にお客様にて決めたパスワードを入力してください。</td>
                                </tr>
                                <tr>
                                    <th>ローカルの初期フォルダ</th>
                                    <td>空欄</td>
                                </tr>
                                <tr>
                                    <th>ホストの初期フォルダ</th>
                                    <td>空欄</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p><img class="img" src="../img/manual/man_ftp_ffftp_setting_9.png" alt="FFFTPホストの設定：サブFTPアカウントのスクリーンショット"></p>
                        
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