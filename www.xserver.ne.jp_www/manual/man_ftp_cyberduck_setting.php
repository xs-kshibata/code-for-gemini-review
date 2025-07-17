<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Cyberduck 設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「Cyberduck」を用いてご契約中のサーバーアカウントへFTP接続をするための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Cyberduck の設定</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">Cyberduck の設定</a>
						<ol>
							<li><a href="#link-a01">1.「新規接続」をクリック</a></li>
							<li><a href="#link-a02">2.FTP情報を入力</a></li>
							<li><a href="#link-a03">3.証明書に関する確認画面が表示される場合</a></li>
							<li><a href="#link-a04">4.設定完了</a></li>
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
                    <h4 class="section_ttl" id="link-a">Cyberduck の設定</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.「新規接続」をクリック</h5>
                                <div class="box_body">
                                    <p>Cyberduckを起動し、「新規接続」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_1.png" alt="Cyberduckでサイト設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.FTP情報を入力</h5>
                                <div class="box_body">
                                    <p>下記のように各項目を入力後、「接続」をクリックしてください。</p>
                                    
                                    <p class="note">※下記はメインFTPアカウントで設定を行っています。お客様にて追加されたサブFTPアカウントを利用する場合は「<a href="#add-account">サブFTPアカウントでの設定方法</a>」をご参照ください。</p>
                                    
                                    <table class="table table_use-caption">
                                        <caption>メインFTPアカウントの設定</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">プロトコル</th>
                                                <td>「FTP-SSL（Explicit AUTH TLS）」を選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>サーバ</th>
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
                                                <th>Anonymous ログイン</th>
                                                <td>チェックを【外す】</td>
                                            </tr>
                                            <tr>
                                                <th>Save Password</th>
                                                <td>任意</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_2.png" alt="CyberduckでFTPの設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.証明書に関する確認画面が表示される場合</h5>
                                <div class="box_body">
                                    <p>証明書に関する確認画面が表示される場合、「OK」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_3.png" alt="CyberduckでメインFTPアカウントで設定しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.設定完了</h5>
                                <div class="box_body">
                                    <p>サーバー上のファイル一覧が表示されたら設定完了です。</p>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_4.png" alt="Cyberduckの設定が完了したスクリーンショット"></p>
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
                        <p>上記「2.」の設定を下記のように設定してください。</p>
                        
                        <table class="table table_use-caption">
                            <caption>サブFTPアカウントの設定</caption>
                            <tbody>
                                <tr>
                                    <th class="w20per">プロトコル</th>
                                    <td>「FTP-SSL（Explicit AUTH TLS）」を選択してください。</td>
                                </tr>
                                <tr>
                                    <th>サーバ</th>
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
                                    <td>サブFTPアカウントの追加時にお客様にて決めたパスワードを入力してください。 </td>
                                </tr>
                                <tr>
                                    <th>Anonymous ログイン</th>
                                    <td>チェックを【外す】</td>
                                </tr>
                                <tr>
                                    <th>Save Password</th>
                                    <td>任意</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_5.png" alt="CyberduckでサブFTPアカウントで設定しているスクリーンショット"></p>
                        
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