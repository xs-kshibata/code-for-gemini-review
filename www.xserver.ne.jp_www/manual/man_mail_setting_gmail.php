<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Gmail設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Gmail」で使用するための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Gmail</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Gmail アカウントの設定方法</a>
							<ol>
								<li><a href="#link-a01">1.「設定」画面へ進む</a></li>
								<li><a href="#link-a02">2.「メールアカウントを追加する」をクリック</a></li>
								<li><a href="#link-a03">3.メールアドレスの入力</a></li>
								<li><a href="#link-a04">4.メールアカウントの追加</a></li>
								<li><a href="#link-a05">5.情報の入力</a></li>
								<li><a href="#link-a06">6.受信設定の完了</a></li>
								<li><a href="#link-a07">7.「名前」の設定</a></li>
								<li><a href="#link-a08">8.送信メールサーバー情報の入力</a></li>
								<li><a href="#link-a09">9.認証情報の確認</a></li>
								<li><a href="#link-a10">10.メール内のリンクをクリックし、認証を行う場合</a></li>
                                <li><a href="#link-a11">11.設定完了</a></li>
							</ol>
						</li>
                        <li><a href="#link-b">メールアカウント設定の確認・変更方法</a>
                            <ol>
                                <li><a href="#link-b01">1.メールアカウントの設定画面を開く</a></li>
                                <li><a href="#link-b02">2.受信メールサーバーの設定画面を開く</a></li>
                                <li><a href="#link-b03">3.受信メールサーバー情報の確認・変更</a></li>
                                <li><a href="#link-b04">4.送信メールサーバーの設定画面を開く</a></li>
                                <li><a href="#link-b05">5.「名前」の設定を確認する</a></li>
                                <li><a href="#link-b06">6.送信メールサーバー情報の確認・変更</a></li>
                            </ol>
                        </li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <div class="border border_gray">
                	<p>本ページで案内する手順は『Google Workspace』のご利用方法ではありません。<br>
                        Gmailの「アカウントとインポート」機能を利用し、エックスサーバーのメールアカウントに到着したメールをGmailで受信する方法です。</p>
                    <p>独自ドメインのメールを「Google Workspace(旧G Suite)」に配信する場合の手順は、以下のマニュアルをご参照ください。</p>
                    <p class="link mb0"><a href="man_domain_dns_setting_google_apps.php">Google Workspace(旧G Suite)をお使いいただく場合</a><i class="ico ico_chevron-right"></i></p>
                </div>

                <div class="manual-youtube-box">
                    <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                    <div class="manual-youtube">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/vZOn5UudR0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Gmail アカウントの設定方法</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.「設定」画面へ進む</h5>
                                <div class="box_body">
                                    <p>Gmailの右上にある歯車をクリックし、「すべての設定を表示」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_1.png?date=230511" alt="設定を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.「メールアカウントを追加する」をクリック</h5>
                                <div class="box_body">
                                    <p>「アカウントとインポート」タブを選択し、 「他のアカウントのメールを確認」の項目から『メールアカウントを追加する』 をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_2.png?date=230511" alt="メールアカウント追加を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.メールアドレスの入力</h5>
                                <div class="box_body">
                                    <p>設定するメールアドレスを入力し、【次へ】をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_3.png?date=190402" alt="次のステップを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a04">4.メールアカウントの追加</h5>
                                <div class="box_body">
                                    <p>メールアドレスを確認し、「他のアカウントからメールを読み込む（POP3）」を選び、【次へ】をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_4.png?date=190402" alt="入力画面"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a05">5.情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力し、【アカウントを追加】をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_5.png?date=190402" alt="アカウント追加の完了画面"></p>
                                    <table class="table table_use-caption">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">ユーザー名</th>
                                            <td>メールアドレス（@前後を含むメールアドレス）</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>
                                                メールアドレス作成時に設定したパスワード
                                                <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>POPサーバー</th>
                                            <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>ポート</th>
                                            <td>995</td>
                                        </tr>
                                        <tr>
                                            <th>取得したメッセージのコピーをサーバーに残す</th>
                                            <td>
                                                任意
                                                <div class="note">※チェックなしの場合、受信時にサーバー上のメールは削除されます。<br>
                                                    Gmail以外のメールソフトでも同じメールアドレスを利用する場合はチェックを入れてください。</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>メールの取得にセキュリティで保護された接続（SSL）を使用する</th>
                                            <td>チェックを【入れる】</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a06">6.受信設定の完了</h5>
                                <div class="box_body">
                                    <p>[メールアカウントを追加しました] の画面が表示されます。<br>
                                        該当のメールアドレスでメールの送信も行う場合は 【はい。user@example.comとしてメールを送信できるようにします】にチェックを入れ【次へ】をクリックしてください。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_6.png?date=190402" alt="受信設定の完了"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a07">7.「名前」の設定</h5>
                                <div class="box_body">
                                    <p>下記を参考に「名前」を任意で入力し、【エイリアスとして扱います】にはチェックを入れずに【次のステップ】をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_7.png?date=190408" alt="「名前」の設定"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w20per">名前</th>
                                            <td>任意（差出人として受信者に表示される名前になります）</td>
                                        </tr>
                                        <tr>
                                            <th>エイリアスとして扱います</th>
                                            <td>チェック【しない】</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a08">8.送信メールサーバー情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力し【アカウントを追加】をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_8.png?date=190408" alt="送信メールサーバーの設定"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">SMTPサーバー</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                    <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                    例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>
                                                    メールアドレス作成時に設定したパスワード
                                                    <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>SSLを使用したセキュリティで保護された接続</th>
                                                <td>
                                                    チェックを【入れる】<div class="note">※ポート番号を465に変更すると自動でチェックが入ります。</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>TLSを使用したセキュリティで保護された接続</th>
                                                <td>チェック【しない】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a09">9.認証情報の確認</h5>
                                <div class="box_body">
                                    <p>
                                        設定中の該当メールアドレス宛に、Gmailより認証メールが届きます。
                                        Gmailの「受信トレイ」または、<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/">WEBメール</a>にログインをして確認をしてください。
                                    </p>
                                    <p>
                                        届いたメールに記載されている「確認コード」を入力するか、メール内のリンクをクリックし、認証を完了してください。
                                        <div class="note">※メールが届かない場合は、「メールを再送信」をクリックしてください。</div>
                                    </p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_9.png?date=190402" alt="確認コードの入力"></p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_18.png" alt="届いたメール"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a10">10.メール内のリンクをクリックし、認証を行う場合</h5>
                                <div class="box_body">
                                    <p>「確認」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_10.png?date=230511" alt="「確認」ボタンをクリック"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-a11">11.設定完了</h5>
                                <div class="box_body">
                                    <p>「確認が完了しました」と表示されたら設定は完了です。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_11.png" alt="完了画面"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-b">メールアカウント設定の確認・変更方法</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">

                                <h5 class="box_ttl" id="link-b01">1.メールアカウントの設定画面を開く</h5>
                                <div class="box_body">
                                    <p>Gmailの右上にある歯車をクリックし、「すべての設定を表示」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_12.png" alt="メールアカウントの設定画面を開く"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b02">2.受信メールサーバーの設定画面を開く</h5>
                                <div class="box_body">
                                    <p>「アカウントとインポート」タブを選択し、 「他のアカウントのメールを確認」の項目から『情報を編集』 をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_13.png" alt="受信メールサーバーの設定画面を開く"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b03">3.受信メールサーバー情報の確認・変更</h5>
                                <div class="box_body">
                                    <p>受信メールサーバー情報を確認・変更してください。</p>
                                    <p>確認できたら「変更を保存」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_14.png" alt="受信メールサーバー情報の確認・変更"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">ユーザー名</th>
                                            <td>メールアドレス（@前後を含むメールアドレス）</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>メールアドレス作成時に設定したパスワード
                                                <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div></td>
                                        </tr>
                                        <tr>
                                            <th>POPサーバー</th>
                                            <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>ポート</th>
                                            <td>995</td>
                                        </tr>
                                        <tr>
                                            <th>取得したメッセージのコピーをサーバーに残す</th>
                                            <td>
                                                任意
                                                <div class="note">※チェックなしの場合、受信時にサーバー上のメールは削除されます。<br>
                                                    Gmail以外のメールソフトでも同じメールアドレスを利用する場合はチェックを入れてください。</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>メールの取得にセキュリティで保護された接続（SSL）を使用する</th>
                                            <td>チェックを【入れる】</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b04">4.送信メールサーバーの設定画面を開く</h5>
                                <div class="box_body">
                                    <p>「名前」の項目から「情報を編集」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_15.png" alt="送信メールサーバーの設定画面を開く"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b05">5.「名前」の設定を確認する</h5>
                                <div class="box_body">
                                    <p>名前の設定を確認し、「次のステップ」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_16.png" alt="「名前」の設定を確認する"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">名前</th>
                                            <td>任意（差出人として受信者に表示される名前になります）</td>
                                        </tr>
                                        <tr>
                                            <th>エイリアスとして扱います</th>
                                            <td>チェック【しない】</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b06">6.送信メールサーバー情報の確認・変更</h5>
                                <div class="box_body">
                                    <p>
                                        送信メールサーバー情報を確認・変更してください。<br>
                                        確認ができたら、「変更を保存」をクリックしてください。
                                    </p>
                                    <p>以上で設定は完了です。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_17.png" alt="送信メールサーバー情報の確認・変更"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">SMTPサーバー</th>
                                            <td>
                                                設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ポート</th>
                                            <td>465</td>
                                        </tr>
                                        <tr>
                                            <th>ユーザー名</th>
                                            <td>メールアドレス（@前後を含むメールアドレス）</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>メールアドレス作成時に設定したパスワード
                                                <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div></td>
                                        </tr>
                                        <tr>
                                            <th>SSLを使用したセキュリティで保護された接続</th>
                                            <td>
                                                チェックを【入れる】
                                                <div class="note">ポート番号を465に変更すると自動でチェックが入ります。</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>TLSを使用したセキュリティで保護された接続</th>
                                            <td>チェック【しない】</td>
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