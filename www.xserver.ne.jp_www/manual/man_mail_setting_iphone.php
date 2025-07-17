<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>iPhoneメール設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「iPhoneメール」で使用するための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">iPhoneメール</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">iPhone メールアカウントの設定方法</a>
							<ol>
								<li><a href="#link-a01">1.ホーム画面から「設定」アイコンをタップします</a></li>
								<li><a href="#link-a02">2.「パスワードとアカウント」をタップします</a></li>
								<li><a href="#link-a03">3.「アカウントを追加」をタップします</a></li>
								<li><a href="#link-a04">4.「その他」をタップします</a></li>
								<li><a href="#link-a05">5.「メールアカウントを追加」をタップします</a></li>
								<li><a href="#link-a06">6.アカウント情報の入力</a></li>
								<li><a href="#link-a07">7.メールサーバーの設定</a></li>
								<li><a href="#link-a08">8.アカウント追加完了</a></li>
							</ol>
						</li>
						<li><a href="#link-b">IMAPで設定した場合</a>
							<ol>
								<li><a href="#link-b01">1.アカウントの選択</a></li>
								<li><a href="#link-b02">2.「アカウント」をタップします</a></li>
								<li><a href="#link-b03">3.「詳細」をタップします</a></li>
								<li><a href="#link-b04">4.「削除済メールボックス」をタップします</a></li>
								<li><a href="#link-b05">5.「Trash」をチェック</a></li>
								<li><a href="#link-b06">6.設定確認</a></li>
								<li><a href="#link-b07">7.「SMTP」をタップします</a></li>
								<li><a href="#link-b08">8.「プライマリサーバ」のサーバー名をタップ</a></li>
								<li><a href="#link-b09">9.サーバーポートの変更</a></li>
							</ol>
						</li>
						<li><a href="#link-c">POPで設定した場合</a>
							<ol>
								<li><a href="#link-c01">1.メールアドレスの選択</a></li>
								<li><a href="#link-c02">2.「詳細」をタップします</a></li>
								<li><a href="#link-c03">3.「受信設定」の「サーバーから削除」をタップします</a></li>
								<li><a href="#link-c04">4.任意の期間を選択</a></li>
								<li><a href="#link-c05">5.任意の期間を確認</a></li>
								<li><a href="#link-c06">6.「SMTP」をタップします</a></li>
								<li><a href="#link-c07">7.「プライマリサーバ」のサーバー名をタップ</a></li>
								<li><a href="#link-c08">8.サーバーポートの変更</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">iPhone メールアカウントの設定方法</h4>
                    <div class="section_body">
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_iphone_old.php">旧iPhoneメールアカウント設定はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        <div class="manual-youtube-box">
                            <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                            <div class="manual-youtube">
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/mAt0FUjg9-o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.ホーム画面から「設定」アイコンをタップします</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n1.png" alt="ホーム画面から「設定」アイコンをタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.「パスワードとアカウント」をタップします</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n2.png" alt="「パスワードとアカウント」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.「アカウントを追加」をタップします</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n3.png" alt="「アカウントを追加」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a04">4.「その他」をタップします</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n4.png" alt="「その他」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a05">5.「メールアカウントを追加」をタップします</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n5.png" alt="「メールアカウントを追加」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a06">6.アカウント情報の入力</h5>
                                <div class="box_body">
                                    <p>メールアドレス、パスワードなどを入力し、「次へ」をタップします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n6.png" alt="アカウント情報の入力"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">名前</th>
                                                <td>任意（差出人として受信者に表示される名前になります。）</td>
                                            </tr>
                                            <tr>
                                                <th>アドレス</th>
                                                <td>設定するメールアドレスを入力してください。</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>設定するメールアドレスを作成した際のパスワードを入力してください。</td>
                                            </tr>
                                            <tr>
                                                <th>説明</th>
                                                <td>任意（例：用途やサーバー名など）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a07">7.メールサーバーの設定</h5>
                                <div class="box_body">
                                    <p>「POP」もしくは「IMAP」を選び、下記を参考に情報を入力してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n7.png" alt="メールサーバーの設定"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">名前</th>
                                                <td>任意（差出人として受信者に表示される名前になります。）</td>
                                            </tr>
                                            <tr>
                                                <th>メール</th>
                                                <td>設定するメールアドレスを入力してください。</td>
                                            </tr>
                                            <tr>
                                                <th>説明</th>
                                                <td>任意（例：用途やサーバー名など）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                    	<caption>送信メールサーバー/受信メールサーバー</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">ホスト名</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>設定メールアドレスを作成した際のパスワード </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>上記メールサーバー情報を入力後、「保存」をタップしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n8.png" alt="上記メールサーバー情報を入力後、「保存」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a08">8.アカウント追加完了</h5>
                                <div class="box_body">
                                    <p>メールアカウントの追加が完了しました。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_n9.png" alt="アカウント追加完了"></p>
									<p class="mt30">追加で以下の設定を行ってください。</p>
									<ul>
										<li><a href="#link-b">IMAPで設定した場合</a></li>
										<li><a href="#link-c">POPで設定した場合</a></li>
									</ul>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">IMAPで設定した場合</h4>
                    <div class="section_body">
                        
                    <div class="serial-box">
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b01">1.アカウントの選択</h5>
                            <div class="box_body">
								<p>追加したアカウントを選択します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n9.png" alt="アカウントの選択"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b02">2.「アカウント」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n10.png" alt="「アカウント」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b03">3.「詳細」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n11.png" alt="「詳細」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b04">4.「削除済メールボックス」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n12.png" alt="「削除済メールボックス」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b05">5.「Trash」をチェック</h5>
                            <div class="box_body">
								<p>「Trash」をタップして、チェックを入れてください。<br>※Trashが一覧に表示されていない場合は、先にメールの送受信テストを行ってください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n13.png" alt="「Trash」をチェック"></p>
								<p>チェックを入れたら「詳細」をタップして前の画面に戻ってください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n14.png" alt="チェックを入れたら「詳細」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b06">6.設定確認</h5>
                            <div class="box_body">
								<p>「メールボックスの特性」の「削除済メールボックス」部分が「Trash」となった事を確認し、左上の「アカウント」をタップしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n15.png" alt="設定確認"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b07">7.「SMTP」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n16.png" alt="「SMTP」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b08">8.「プライマリサーバ」のサーバー名をタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n17.png" alt="「プライマリサーバ」のサーバー名をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b09">9.サーバーポートの変更</h5>
                            <div class="box_body">
								<p>サーバーポートが「465」になっていない場合は、変更してから「完了」をタップしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n18.png" alt="サーバーポートの変更"></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-c">POPで設定した場合</h4>
                    <div class="section_body">
                        
                    <div class="serial-box">
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c01">1.メールアドレスの選択</h5>
                            <div class="box_body">
                            	<p>追加したアカウントを選択します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n9.png" alt="メールアドレスの選択"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c02">2.「詳細」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n11.png" alt="「詳細」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c03">3.「受信設定」の「サーバーから削除」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n19.png" alt="「受信設定」の「サーバーから削除」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c04">4.任意の期間を選択</h5>
                            <div class="box_body">
								<p>受信したメールを、サーバーから自動的に削除する設定です。<br>任意の期間を選択してから左上の「詳細」をタップしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n20.png" alt="任意の期間を選択"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">しない</th>
                                                <td>サーバーにメールのコピーを残したままにします。<p class="note">※サーバーにメールのコピーを残したままにすると、サーバー内のメール容量を圧迫し受信できなくなる場合があります。</p></td>
                                            </tr>
                                            <tr>
                                                <th>7日</th>
                                                <td>サーバーにメールのコピーを残しますが、7日経過するとサーバー上から削除します。</td>
                                            </tr>
                                            <tr>
                                                <th>受信ボックスからの削除時</th>
                                                <td>iPhoneから削除した時、サーバー上からもメールのコピーを削除します。</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c05">5.任意の期間を確認</h5>
                            <div class="box_body">
                            	<p>「サーバーから削除」部分が、選択した期間になっていることを確認し、左上のサーバー名をタップして前の画面に戻ってください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n21.png" alt="任意の期間を選択"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c06">6.「SMTP」をタップします</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n16.png" alt="「SMTP」をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c07">7.「プライマリサーバ」のサーバー名をタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n17.png" alt="「プライマリサーバ」のサーバー名をタップ"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-c08">8.サーバーポートの変更</h5>
                            <div class="box_body">
                                <p>サーバーポートが「465」になっていない場合は、変更してから「完了」を押してください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_n18.png" alt="サーバーポートの変更"></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                <section class="section">
                    <div class="pickupFaq">
                        <div class="pickupFaq__title">よくある質問</div>
                        <ul class="pickupFaq__list">
                            <li><a href="../support/faq/service_mail_trouble_send.php">メールが送信できません。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_reception.php">メールが受信できません。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php">大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_ssl_certificate.php">メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました。</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
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