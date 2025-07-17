
<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Macメール設定手順(OS X) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Macメール(OS X)」で使用するための設定手順について。overSSL設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">Macメール(OS X)</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Macメール(OS X)</a>
							<ol>
								<li><a href="#link-a01">1.メーラーを起動</a></li>
								<li><a href="#link-a02">2.「アカウント」を選択</a></li>
								<li><a href="#link-a03">3.「その他のメールアカウントを追加...」を選択</a></li>
								<li><a href="#link-a04">4.メールアドレスとパスワードを入力</a></li>
								<li><a href="#link-a05">5.受信メールサーバの情報を入力</a></li>
								<li><a href="#link-a06">6.送信メールサーバの情報を入力</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.画面上部「メール」の「環境設定」をクリック</a></li>
								<li><a href="#link-b02">2.メールアカウントを選択し、「アカウント情報」から「SMTPサーバリストを編集…」を選択</a></li>
								<li><a href="#link-b03">3.認証方法を確認し、「OK」をクリック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Macメール(OS X、overSSL設定) の設定方法</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.メーラーを起動</h5>
                                <div class="box_body">
                                    <p>画面上部の「メール」へ進み、「環境設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="「環境設定」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.「アカウント」を選択</h5>
                                <div class="box_body">
                                    <p>「アカウント」をクリックし、画面左下の「＋」を選択してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_2.png" alt="画面左下の「＋」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.「その他のメールアカウントを追加...」を選択</h5>
                                <div class="box_body">
                                    <p>「その他のメールアカウントを追加...」を選択し、「続ける」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_3.png" alt="「その他のメールアカウントを追加...」を選択し「続ける」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a04">4.メールアドレスとパスワードを入力</h5>
                                <div class="box_body">
                                    <p>追加設定希望のメールアドレス、メールアドレス作成時に設定したパスワードを入力し、「作成」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_4.png" alt="メールアドレスとパスワードを入力し「作成」をクリック"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">メールアドレス</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアドレス作成時に設定したパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>クリック後、“アカウントを手動で設定する必要があります”と表示されましたら「次へ」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_5.png" alt="アカウントを手動で設定する必要がありますと表示されたら「次へ」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a05">5.受信メールサーバの情報を入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力をし「次へ」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_6_1.png" alt="受信メールサーバの情報入力"></p>
                                    <table class="table table_use-caption">
                                        <caption>受信メールサーバの情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">アカウントの種類</th>
                                                <td>POP もしくは IMAP（※任意）</td>
                                            </tr>
                                            <tr>
                                                <th>メールサーバ</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>メールアドレスに入力したものと同じメールアドレス</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアドレス作成時に設定したパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>「追加のアカウント情報が必要です」と表示された場合は「次へ」進み、</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_6_2.png" alt="受信メールサーバの情報入力"></p>
                                    <p>下記を参考に情報を入力をしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_6_3.png" alt="受信メールサーバの情報入力"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">ポート</th>
                                                <td>POP:995　IMAP：993</td>
                                            </tr>
                                            <tr>
                                                <th>SSLを使用</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>認証</th>
                                                <td>パスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a06">6.送信メールサーバの情報を入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力をし「作成」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_7_1.png" alt="送信メールサーバの情報入力"></p>
                                    <table class="table table_use-caption">
                                        <caption>送信メールサーバの情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SMTPサーバ</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>メールアドレスに入力したものと同じメールアドレス</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアドレス作成時に設定したパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>「追加のアカウント情報が必要です」と表示された場合は「次へ」進み、</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_7_2.png" alt="受信メールサーバの情報入力"></p>
                                    <p>下記を参考に情報を入力をしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_7_3.png" alt="受信メールサーバの情報入力"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">ポート</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>SSLを使用</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>認証</th>
                                                <td>パスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>情報入力後、作成ボタンを押せば設定完了です。</p>
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
                        	
                            <h5 class="box_ttl" id="link-b01">1.画面上部「メール」の「環境設定」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b02">2.メールアカウントを選択し、「アカウント情報」から「SMTPサーバリストを編集…」を選択</h5>
                            <div class="box_body">
                                <p>メールアカウントを選択し、「アカウント情報」をクリックします。<br>
                                「送信用メールサーバ(SMTP)」のプルダウンから「SMTPサーバーリストを編集...」を選択します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b03">3.認証方法を確認し、「OK」をクリック</h5>
                            <div class="box_body">
                                <p>メールアカウントに利用しているメールサーバを選択し、「詳細」をクリックします。<br>
                                認証項目のプルダウンで「パスワード」を選択し、ユーザー名とパスワードを入力して「OK」をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_3.png" alt="SMTP認証設定方法3"></p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="w30per">ユーザー名</th>
                                            <td>メールアドレス</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>メールアドレス作成時に設定したパスワード</td>
                                        </tr>
                                    </tbody>
                                </table>
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