<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Google Workspace(旧G Suite)をお使いいただく場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「DNSレコード編集」機能でGoogle Workspace(旧G Suite)を使用する際の注意事項について記載しています。">

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
            
                <h3 class="sub-ttl">Google Workspace(旧G Suite)をお使いいただく場合</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">ドメイン所有権の確認</a>
                            <ul>
                                <li><a href="#link-a01">TXTレコードを追加していただく場合</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-b">Google Workspaceをお使いいただく場合のDNSレコード編集</a>
                            <ul>
                                <li><a href="#link-b01">Google Workspace用のMXレコードを追加し、不要なMXレコードを削除</a></li>
                                <li><a href="#link-b02">アプリケーションのDNS設定</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
               
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>

				<p>
					本マニュアルについて、Google Workspaceのシステムの変更によって内容が変わる場合があります。<br>
					詳しくはGoogleへお問い合わせください。
				</p>
                
                <section class="section mt30">
                    <h4 class="section_ttl" id="link-a">ドメイン所有権の確認</h4>
                    <div class="section_body">
                        <p>まずはGoogle Workspaceへお申し込みいただき、ドメイン所有権の確認をしていただく必要がございます。</p>
                        <p>Google Workspaceで「ドメイン所有権の確認」の手続きを取っていただき、ドメイン名で公開されたWEBサーバ上にGoogleの指定するhtmlファイルをアップロードするか、ドメインのDNS設定にGoogleの指定するTXT(テキスト)レコードを書き加える必要があります。</p>
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">TXTレコードを追加していただく場合</h5>
                            <div class="block_body">
                                <p>以下のように設定してください。</p>
                                
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>ホスト名</th>
                                            <th>種別</th>
                                            <th>内容</th>
                                            <th class="w10per">TTL</th>
                                            <th>優先度</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>所有権確認を行うドメイン名</td>
                                            <td>TXT</td>
                                            <td>google-site-verification=**********(※)</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note">(※)Google Workspaceより提示される固有の文字列となります。</p>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">Google Workspaceをお使いいただく場合のDNSレコード編集</h4>
                    <div class="section_body">
                        <p>「DNSレコード編集」メニューから「DNSレコード追加」をクリックしてお進みください。</p>
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">Google Workspace用のMXレコードを追加し、不要なMXレコードを削除</h5>
                            <div class="block_body">
								<p>独自ドメインでGmailを利用する場合、以下のようにDNSレコードを追加していきます。</p>
								<p>Google Workspaceのご登録時期により、追加していただくレコードが異なります。<br>該当時期のレコードをご参照ください。</p>
								<p>ホスト名には何も入力せず、空白としてください。</p>
                                <p>追加方法についての詳細は<a href="man_domain_dns_setting.php">こちら</a>をご参照ください。</p>
								
                                <dl class="dl">
									<dt>■2023年4月以降にご登録の場合</dt>
									<dd>
										<table class="table break-word">
											<thead>
												<tr>
													<th>ホスト名</th>
													<th>種別</th>
													<th>内容</th>
                                                    <th class="w10per">TTL</th>
													<th>優先度</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>smtp.google.com</td>
                                                    <td>3600</td>
													<td>1</td>
												</tr>
											</tbody>
										</table>
									</dd>
									<dt>■2023年3月末までにご登録の場合</dt>
									<dd>
										<table class="table break-word">
											<thead>
												<tr>
													<th>ホスト名</th>
													<th>種別</th>
													<th>内容</th>
                                                    <th class="w10per">TTL</th>
													<th>優先度</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>1</td>
												</tr>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>alt1.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>5</td>
												</tr>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>alt2.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>5</td>
												</tr>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>alt3.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>10</td>
												</tr>
												<tr>
													<td>空白（.ドメイン名）</td>
													<td>MX</td>
													<td>alt4.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>10</td>
												</tr>
											</tbody>
										</table>
									</dd>
								</dl>
                                <p>続けて、ドメイン設定を追加した時点で自動的に作成される以下のMXレコードを削除します。</p>
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>ホスト名</th>
                                            <th>種別</th>
                                            <th>内容</th>
                                            <th class="w10per">TTL</th>
                                            <th>優先度</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ドメイン名</td>
                                            <td>MX</td>
                                            <td>ドメイン名</td>
                                            <td>3600</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>DNSレコードの設定が完了したら、<a href="man_domain_dns_setting_mail_server.php">メール機能の設定を無効にしていただく</a>必要がございます。</p>
								<img class="img" src="../img/manual/man_google_apps_1.png?date=20230821" alt="DNSレコード一覧のスクリーンショット">
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">アプリケーションのDNS設定</h5>
                            <div class="block_body">
                                <p>以下の通りに、使用したいアプリケーションを各ホスト名に設定します。<br>
                                優先度は空白で問題ありません。</p>
                                
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>ホスト名</th>
                                            <th>種別</th>
                                            <th>内容</th>
                                            <th class="w10per">TTL</th>
                                            <th>優先度</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>mail</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>calendar</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>docs</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>それぞれレコードが追加されていることを「DNSレコードの一覧」にてご確認ください。</p>
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