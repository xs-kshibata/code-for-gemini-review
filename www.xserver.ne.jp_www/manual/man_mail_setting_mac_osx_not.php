<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Macメール(OS X、接続の保護なし)設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Macメール(OS X)」で使用するための設定手順について。「接続時にSSLを利用しない（接続の保護なし）」設定の手順を記載しています。">

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
						<li><a href="#link-a">Macメール(OS X)アカウントの設定方法</a>
							<ol>
								<li><a href="#link-a01">1.メーラーを起動</a></li>
								<li><a href="#link-a02">2.「アカウント」を選択</a></li>
								<li><a href="#link-a03">3.「その他のメールアカウントを追加...」を選択</a></li>
								<li><a href="#link-a04">4.メールアドレスとパスワードを入力</a></li>
								<li><a href="#link-a05">5.受信メールサーバの情報を入力</a></li>
								<li><a href="#link-a06">6.送信メールサーバの情報を入力</a></li>
								<li><a href="#link-a07">7.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-b">受信は行えるが送信のみ行えない場合</a>
							<ol>
								<li><a href="#link-b01">1.メーラーを起動</a></li>
								<li><a href="#link-b02">2.メールアカウントを選択</a></li>
								<li><a href="#link-b03">3.送信用メールサーバ(SMTP)　の編集</a></li>
								<li><a href="#link-b04">4.「詳細」を選択</a></li>
								<li><a href="#link-b05">5.「デフォルトポートを使用（25.465.587）」をチェック</a></li>
							</ol>
						</li>
						<li><a href="#link-c">SSL証明書を検証の画面が表示される場合</a>
							<ol>
								<li><a href="#link-c01">1.メーラーを起動</a></li>
								<li><a href="#link-c02">2.メールアカウントを選択</a></li>
								<li><a href="#link-c03">3.「詳細」を選択</a></li>
								<li><a href="#link-c04">4.「SSLを使用」のチェックを外す</a></li>
								<li><a href="#link-c05">5.（2）のアカウント情報まで戻り、送信メールサーバ（SMTP）を設定</a></li>
								<li><a href="#link-c06">6.「詳細」を選択</a></li>
								<li><a href="#link-c07">7.「SSLを使用」のチェックを外す</a></li>
								<li><a href="#link-c08">8.設定完了後、「保存」を選択</a></li>
							</ol>
						</li>
						<li><a href="#link-d">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-d01">1.画面上部「メール」の「環境設定」をクリック</a></li>
								<li><a href="#link-d02">2.メールアカウントを選択し、「アカウント情報」から「SMTPサーバリストを編集…」を選択</a></li>
								<li><a href="#link-d03">3.認証方法を確認し、「OK」をクリック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Macメール(OS X)アカウントの設定方法</h4>
                    <div class="section_body">
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">当サービスは、メール送信時の認証方式については、SMTP認証(SMTP-AUTH)を推奨しております。<br>
                                既に設定されたアカウントのSMTP認証設定方法については、こちらの手順をご参照ください。</p>
                                <ul class="list list_arrow-down mb0">
                                    <li><a href="#link-d">SMTP認証設定方法</a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_mac_osx.php">「STARTTLS」あるいは「POP/IMAP/SMTP over SSL」を利用する場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
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
                                    <p><a href="man_mail_setting.php">メールソフトの設定</a>や下記を参考に情報を入力をし「次へ」をクリックしてください。</p>
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
                                                <td>メールアドレス に入力したものと同じメールアドレス</td>
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
                                <h5 class="box_ttl" id="link-a06">6.送信メールサーバの情報を入力</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">メールソフトの設定</a>や下記を参考に情報を入力をし「作成」をクリックしてください。</p>
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
                                                <td>メールアドレス に入力したものと同じメールアドレス</td>
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
                                <h5 class="box_ttl box_ttl_no-body" id="link-a07">7.設定完了</h5>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">受信は行えるが送信のみ行えない場合</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.メーラーを起動</h5>
                                <div class="box_body">
                                    <p>画面上部の「メール」へ進み、「環境設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="「環境設定」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.メールアカウントを選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_8.png" alt="メールアカウントを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.送信用メールサーバ(SMTP)　の編集</h5>
                                <div class="box_body">
                                    <p>「送信用メールサーバ（SMTP）」のプルダウンメニューをクリックし、「SMTPサーバリストを編集」を選択してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_9.png" alt="SMTPサーバリストを編集をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.「詳細」を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_10.png" alt="「詳細」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.「デフォルトポートを使用（25.465.587）」をチェック</h5>
                                <div class="box_body">
                                    <p>「デフォルトポートを使用（25.465.587）」にチェックをいれ、「OK」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_11.png" alt="「デフォルトポートを使用」にチェックをいれ「OK」をクリック"></p>
                                    <p class="note">※送信ポート番号を「587」へ変更していただくことで、送信可能となる場合がございます。</p>
                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>参考：<a href="man_mail_op25b.php">OP25Bについて</a><i class="ico ico_chevron-right"></i></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">SSL証明書を検証の画面が表示される場合</h4>
                    <div class="section_body">
                        <p>当サービスで提供していた共有SSLの仕様により、下記のような画面が表示される場合があります。</p>
                        <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_12.png" alt="証明書を検証の画面"></p>
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.メーラーを起動</h5>
                                <div class="box_body">
                                    <p>画面上部の「メール」へ進み、「環境設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="「環境設定」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.メールアカウントを選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_8.png" alt="メールアカウントを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c03">3.「詳細」を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_13.png" alt="「詳細」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c04">4.「SSLを使用」のチェックを外す</h5>
                                <div class="box_body">
                                    <p>「SSLを使用」のチェックを外し、ポートを「110」としてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_14.png" alt="「詳細」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c05">5.（2）のアカウント情報まで戻り、送信メールサーバ（SMTP）を設定</h5>
                                <div class="box_body">
                                    <p>（2）のアカウント情報まで戻り、「送信用メールサーバ（SMTP）」のプルダウンメニューをクリックし、「SMTPサーバリストを編集」を選択してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_9.png" alt="「SMTPサーバリストを編集」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c06">6.「詳細」を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_10.png" alt="「詳細」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c07">7.「SSLを使用」のチェックを外す</h5>
                                <div class="box_body">
                                    <p>「SSLを使用」のチェックを外してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_15.png" alt="「詳細」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c08">8.設定完了後、「保存」を選択</h5>
                                <div class="box_body">
                                    <p>設定完了後、変更内容を保存するかどうかの確認が表示されます。<br>
                                    そのまま「保存」を選択し、設定を変更してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_16.png" alt="「保存」を選択"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">SMTP認証設定方法</h4>
                    <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-d01">1.画面上部「メール」の「環境設定」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-d02">2.メールアカウントを選択し、「アカウント情報」から「SMTPサーバリストを編集…」を選択</h5>
                            <div class="box_body">
                                <p>メールアカウントを選択し、「アカウント情報」をクリックします。<br>
                                「送信用メールサーバ(SMTP)」のプルダウンから「SMTPサーバーリストを編集...」を選択します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-d03">3.認証方法を確認し、「OK」をクリック</h5>
                            <div class="box_body">
                                <p>メールアカウントに利用しているメールサーバを選択し、「詳細」をクリックします。<br>
                                認証項目のプルダウンで「パスワードを選択し、「OK」をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_3.png" alt="SMTP認証設定方法3"></p>
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