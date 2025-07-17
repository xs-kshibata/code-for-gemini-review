<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Windows10メール設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Windows10メール」で使用するための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Windows10メール</h3>

                <aside class="msg msg_caution">
                   <p class="red font-bold">当メールソフトは2024年12月31日をもってMicrosoftのサポートが終了しました。<br>
                   ほかのメールソフトや、WEBメールの利用をご検討ください。</p>
                </aside>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Windows10 メールアプリでの設定方法</a>
							<ol>
								<li><a href="#link-a01">1.アカウントの追加</a></li>
                                <ul class="ul">
                                    <li><a href="#link-a01-a">メールアプリを新しく起動した場合</a></li>
                                    <li><a href="#link-a01-b">既にメールアプリが起動済みの場合</a></li>
                                </ul>
								<li><a href="#link-a02">2.「詳細設定」を選択</a></li>
								<li><a href="#link-a03">3.「インターネット メール」を選択</a></li>
								<li><a href="#link-a04">4.情報の入力</a></li>
								<li><a href="#link-a05">5.設定完了</a></li>
							</ol>
						</li>
                        <li><a href="#link-b">メールアカウント設定の確認・変更方法</a>
                            <ol>
                                <li><a href="#link-b01">1.「アカウントの管理」を開く</a></li>
                                <li><a href="#link-b02">2.「メールアカウント」の設定画面を開く</a></li>
                                <li><a href="#link-b03">3.メール設定情報を確認・変更する</a></li>
                                <li><a href="#link-b04">4.「メールボックスの詳細設定」を開く</a></li>
                                <li><a href="#link-b05">5.メールサーバー情報を確認・変更する</a></li>
                            </ol>
                        </li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                        
                <section class="section">
                    <h4 id="link-a" class="section_ttl">Windows10 メールアプリでの設定方法</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.アカウントの追加</h5>
                                <div class="box_body">
                                    <h6 id="link-a01-a" class="mb10">・メールアプリを新しく起動した場合</h6>
                                    <p>スタート画面にてメールアプリを開き「アカウントの追加」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_14.png" alt="「アカウントの追加」をクリック"></p>

                                    <h6 id="link-a01-b" class="mt30 mb10">・既にメールアプリが起動済みの場合</h6>
                                    <p>左下の「歯車」アイコンをクリックし、右側に表示された設定メニューから、「アカウントの管理」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_3.png" alt="「アカウントの管理」をクリック"></p>
                                    <p>「+ アカウントの追加」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_4.png?date=230512" alt="「+ アカウントの追加」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.「詳細設定」を選択</h5>
                                <div class="box_body">
                                    <p>アカウントの選択画面で「詳細設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_5.png?date=230512" alt="「詳細設定」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.「インターネット メール」を選択</h5>
                                <div class="box_body">
                                    <p>「インターネット メール」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_6.png?date=230512" alt="「インターネット メール」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力し、「サインイン」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_7.png?date=230512" alt="メールアカウントの設定情報を入力しているスクリーンショット"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">メールアドレス</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>
                                                    メールアカウント作成時に設定したパスワード<br>
                                                    <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>アカウント名</th>
                                                <td>任意（メールソフト上での表示名になります）</td>
                                            </tr>
                                            <tr>
                                                <th>この名前を使用してメッセージを送信</th>
                                                <td>任意（差出人として受信者に表示される名前になります）</td>
                                            </tr>
                                            <tr>
                                                <th>受信メールサーバー</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>アカウントの種類</th>
                                                <td>POP3 もしくは IMAP（※任意）</td>
                                            </tr>
                                            <tr>
                                                <th>メールの送信(SMTP)サーバー</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>送信サーバーには、認証が必要です</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>送信メールに同じユーザー名とパスワードを使用する</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>受信メールにはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>送信メールにはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.設定完了</h5>
                                <div class="box_body">
                                    <p>正常に完了した旨の表示を確認し、「完了」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_8.png?date=230512" alt="「完了」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 id="link-b" class="section_ttl">メールアカウント設定の確認・変更方法</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.「アカウントの管理」を開く</h5>
                                <div class="box_body">
                                    <p>左下の「歯車」アイコンをクリックし、右側に表示された設定メニューから、「アカウントの管理」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_9.png" alt="「アカウントの管理」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.「メールアカウント」の設定画面を開く</h5>
                                <div class="box_body">
                                    <p>作成済みのメールアカウントをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_10.png" alt="「メールアカウント」の設定画面を開く"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.メール設定情報を確認・変更する</h5>
                                <div class="box_body">
                                    <p>メールアカウントのパスワードを変更した場合は、こちらの画面でパスワードを変更してください。<br>
                                        メールサーバーなどの設定情報を確認・変更される場合は、「メールボックスの同期設定を変更」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_11.png" alt="メール設定情報を確認・変更する"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">パスワード</th>
                                                <td>
                                                    メールアカウント作成時に設定したパスワード
                                                    <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>アカウント名</th>
                                                <td>任意（メールソフト上での表示名になります）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.「メールボックスの詳細設定」を開く</h5>
                                <div class="box_body">
                                    <p>「メールボックスの詳細設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_12.png" alt="「メールボックスの詳細設定」を開く"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.メールサーバー情報を確認・変更する</h5>
                                <div class="box_body">
                                    <p>
                                        メールサーバー情報を確認・変更してください。<br>
                                        確認ができたら、「完了」をクリックしてください。<br>
                                        以上で設定は完了です。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows10_13.png" alt="メールサーバー情報を確認・変更する"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w40per">この名前を使用してメッセージを送信</th>
                                            <td>任意（差出人として受信者に表示される名前になります）</td>
                                        </tr>
                                        <tr>
                                            <th>受信メールサーバー</th>
                                            <td>
                                                設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」も記載の"ホスト名"と同一です。</div>
                                                <div class="note">例）sv***.xserver.jp</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>送信(SMTP)メールサーバー</th>
                                            <td>
                                                設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」も記載の"ホスト名"と同一です。</div>
                                                <div class="note">例）sv***.xserver.jp</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>送信サーバーは認証が必要</th>
                                            <td>チェックを【入れる】</td>
                                        </tr>
                                        <tr>
                                            <th>メールの送信に同じユーザー名とパスワードを使う</th>
                                            <td>チェックを【入れる】</td>
                                        </tr>
                                        <tr>
                                            <th>受信メールにSSLを使う</th>
                                            <td>チェックを【入れる】</td>
                                        </tr>
                                        <tr>
                                            <th>送信メールにSSLを使う</th>
                                            <td>チェックを【入れる】</td>
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