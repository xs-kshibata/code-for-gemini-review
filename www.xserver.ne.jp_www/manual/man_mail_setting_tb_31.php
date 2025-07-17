<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Mozilla Thunderbird設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Mozilla Thunderbird(Ver.31以降)」で使用するための設定手順について。overSSL設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">Mozilla Thunderbird(Ver31〜)</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Mozilla Thunderbird Ver.31以降 アカウントの設定方法(overSSL設定)</a>
							<ol>
								<li><a href="#link-a01">1.「アカウント」にある「新しいアカウント作成」の「メール」をクリック</a></li>
								<li><a href="#link-a02">2.画面左下の「メールアカウントを設定する」をクリック</a></li>
								<li><a href="#link-a03">3.名前・メールアドレス・パスワードを入力</a></li>
								<li><a href="#link-a04">4.「手動設定」をクリック</a></li>
								<li><a href="#link-a05">5.情報を入力</a></li>
								<li><a href="#link-a06">6.「再テスト」をクリック</a></li>
								<li><a href="#link-a07">7.「完了」をクリック</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.メールアカウントを右クリックし、「設定（E）」を選択</a></li>
								<li><a href="#link-b02">2.「送信（SMTP）サーバ」をクリック</a></li>
								<li><a href="#link-b03">3.「セキュリティと認証」を確認</a></li>
							</ol>
						</li>
					</ul>
				</div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Mozilla Thunderbird Ver.31以降 アカウントの設定方法(overSSL設定)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_tb_31_not.php">「接続時にSSLを利用しない（接続の保護なし）」場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.「アカウント」にある「新しいアカウント作成」の「メール」をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_1.png" alt="「メール」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.画面左下の「メールアカウントを設定する」をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_2.png" alt="「メールアカウントを設定する」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.名前・メールアドレス・パスワードを入力</h5>
                                <div class="box_body">
                                    <p>メールアカウント設定ウィンドウが表示されますので、[あなたのお名前] [メールアドレス] [パスワード]を入力し[パスワードを記憶する]にチェックを入れ「続ける」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_3.png" alt="「続ける」をクリックしているスクリーンショット"></p>
                                    <table class="table table_use-caption">
                                        <caption>メールアカウント設定</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">あなたのお名前</th>
                                                <td>※任意の文字列</td>
                                            </tr>
                                            <tr>
                                                <th>メールアドレス</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアドレス作成時に設定したパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a04">4.「手動設定」をクリック</h5>
                                <div class="box_body">
                                    <p>メールアカウント設定ウィンドウにて“アカウント設定が、一般的なサーバ名で検索したことにより見つかりました。”と表示されますので、ウィンドウ左下の「手動設定」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_4.png" alt="「手動設定」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a05">5.情報を入力</h5>
                                <div class="box_body">
                                    <p>受信サーバ・送信サーバ情報を入力するウィンドウが表示されますので、下記を参考に情報を入力します。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_5.png" alt="「接続」をクリックしているスクリーンショット"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>受信サーバ</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">サーバの種類</th>
                                                <td><strong>POP3</strong> &nbsp;&nbsp;もしくは&nbsp;&nbsp;<strong>IMAP</strong></td>
                                            </tr>
                                            <tr>
                                                <th>ホスト名</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート番号</th>
                                                <td>995　※IMAPの場合は993</td>
                                            </tr>
                                            <tr>
                                                <th>SSL</th>
                                                <td>SSL/TLS</td>
                                            </tr>
                                            <tr>
                                                <th>認証方式</th>
                                                <td><strong>通常のパスワード認証</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>送信サーバ</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">ホスト名</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート番号</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>SSL</th>
                                                <td>SSL/TLS</td>
                                            </tr>
                                            <tr>
                                                <th>認証方式</th>
                                                <td><strong>通常のパスワード認証</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>ユーザー名</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">ユーザー名</th>
                                                <td><strong>メールアドレス</strong>（@以降も含みます）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a06">6.「再テスト」をクリック</h5>
                                <div class="box_body">
                                    <p>ポート番号など、入力項目の内容を今一度ご確認の上、問題がなければ画面右下の「再テスト」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_6.png" alt="「再テスト」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a07">7.「完了」をクリック</h5>
                                <div class="box_body">
                                    <p>「次のアカウント設定が、指定されたサーバを調べることにより見つかりました。」の表示を確認し、 画面右下の「完了」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_7.png" alt="「完了」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">SMTP認証設定方法</h4>
                    <div class="section_body">
                        
                    <div class="serial-box">
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b01">1.メールアカウントを右クリックし、「設定（E）」を選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「送信（SMTP）サーバ」をクリック</h5>
                            <div class="box_body">
                                <p>アカウント設定が表示されます。「送信（SMTP）サーバ」をクリックし、該当のメールアカウントに利用している サーバーを選択後、「編集（E）」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b03">3.「セキュリティと認証」を確認</h5>
                            <div class="box_body">
                                <p>「認証方式（I）」の項目の「通常のパスワード認証」を選択し、「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_3.png?20181116" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                        
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