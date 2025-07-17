<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook Express 設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook Express」で使用するための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Outlook Express</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Microsoft Outlook Express の設定方法</a>
							<ol>
								<li><a href="#link-a01">1.ツール(T)より、アカウント(A)をお選びいただきます。</a></li>
								<li><a href="#link-a02">2.メールタブより、「追加(A)」をお選びいただき、メール(M)をお選びいただきます。</a></li>
								<li><a href="#link-a03">3.お客様名(表示に使用される名前)を入力し、次へ（N)をお選びいただきます。</a></li>
								<li><a href="#link-a04">4.メールアドレス(お客様のご利用になられるメールアドレス)を入力し、次へ（N)をお選びいただきます。</a></li>
								<li><a href="#link-a05">5.受信メール・送信メールサーバー名を入力します。</a></li>
								<li><a href="#link-a06">6.ユーザー名に電子メールアドレスを設定し、パスワード（P)には設定したパスワードを入力いただきます。</a></li>
								<li><a href="#link-a07">7.インターネット接続ウィザード完了</a></li>
								<li><a href="#link-a08">8.先ほど作成したアカウントを選択し、プロパティ（P）をクリックしてください。</a></li>
								<li><a href="#link-a09">9.サーバータブをクリックし、下記のように設定を行ってください。</a></li>
								<li><a href="#link-a010">10.受信メールサーバーと同じ設定を使用する(U)をクリック</a></li>
								<li><a href="#link-a011">11.詳細設定タブをクリックし、「サーバーのポート番号」の「送信メール（SMTP）」を587に変更してください。</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.画面上部の「ツール(T)」より、「アカウント(A)...」をクリックします。</a></li>
								<li><a href="#link-b02">2.メールアカウントを選択し、「プロパティ（P）」をクリックします。</a></li>
								<li><a href="#link-b03">3.「サーバー」タブをクリックします。</a></li>
								<li><a href="#link-b04">4.「受信メールサーバーと同じ設定を使用する（U）」にチェックを入れ、「OK」をクリックします。</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Microsoft Outlook Express の設定方法</h4>
                    <div class="section_body">
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">当サービスは、メール送信時の認証方式については、SMTP認証(SMTP-AUTH)を推奨しております。<br>
                                既に設定されたアカウントのSMTP認証設定方法については、こちらの手順をご参照ください。</p>
                                <ul class="list list_arrow-down mb0">
                                    <li><a href="#link-b">SMTP認証設定方法</a></li>
                                </ul>
                            </div>
                        </aside>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.ツール(T)より、アカウント(A)をお選びいただきます。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_1.png" alt="Outlook Expressでアカウント設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.メールタブより、「追加(A)」をお選びいただき、メール(M)をお選びいただきます。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_2.png" alt="Outlook Expressでメールタブから追加を選びその中のメール選んでいるスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.お客様名(表示に使用される名前)を入力し、次へ（N)をお選びいただきます。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_3.png" alt="Outlook Expressで表示名を入力しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.メールアドレス(お客様のご利用になられるメールアドレス)を入力し、次へ（N)をお選びいただきます。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_4.png" alt="Outlook Expressでメールアドレスを入力しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.受信メール・送信メールサーバー名を入力します。</h5>
                                <div class="box_body">
                                    <p>受信メール・送信メールサーバーを入力してください。<br>
                                    詳しくは<a href="man_mail_setting.php">メールソフトの設定</a>をご覧ください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_5.png" alt="情報の入力"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">サーバーの種類</th>
                                                <td>POP3 もしくは IMAP（※任意）</td>
                                            </tr>
                                            <tr>
                                                <th>受信メールサーバー</th>
                                                <td rowspan="2">サーバーID.xsrv.jp ※送受信共に同じサーバー名</td>
                                            </tr>
                                            <tr>
                                                <th>送信メールサーバー</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.ユーザー名に電子メールアドレスを設定し、パスワード（P)には設定したパスワードを入力いただきます。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_6.png" alt="Outlook Expressでアカウント名とパスワードを入力しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.インターネット接続ウィザード完了</h5>
                                <div class="box_body">
                                    <p>設定完了画面が表示されたら、完了をクリックし終了してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_7.png" alt="Outlook Expressで設定完了確認画面のスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.先ほど作成したアカウントを選択し、プロパティ（P）をクリックしてください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_8.png" alt="Outlook Expressでメールタブから追加を選びその中のメール選んでいるスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a09">9.サーバータブをクリックし、下記のように設定を行ってください。</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">メールソフトの設定</a>や下記を参考に情報を入力し、設定をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_9.png" alt="プロパティ"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">受信メール サーバーの種類</th>
                                                <td>POP3</td>
                                            </tr>
                                            <tr>
                                                <th>受信メール (POP3)</th>
                                                <td rowspan="2">●●.xsrv.jp（サーバーID.xsrv.jp）※送受信共に同じサーバー名</td>
                                            </tr>
                                            <tr>
                                                <th>送信メール (SMTP)</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>受信メール サーバー</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">アカウント名</th>
                                                <td>電子メールアドレス（E）に入力したものと同じメールアドレス</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアカウント作成時に設定したパスワード</td>
                                            </tr>
                                            <tr>
                                                <th>セキュリティで保護されたパスワード認証でログオンする</th>
                                                <td>チェック【なし】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>送信メール サーバー</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">このサーバーは認証が必要</th>
                                                <td>チェック【あり】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a010">10.受信メールサーバーと同じ設定を使用する(U)をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_10.png" alt="受信メールサーバーと同じ設定を使用するを選択し、OKをクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a011">11.詳細設定タブをクリックし、「サーバーのポート番号」の「送信メール（SMTP）」を587に変更してください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_11.png" alt="「送信メール（SMTP）」を587に変更"></p>
                                    <p>以上で設定完了です。「OK」をクリックしてください。</p>
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
                            <h5 class="box_ttl" id="link-b01">1.画面上部の「ツール(T)」より、「アカウント(A)...」をクリックします。</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.メールアカウントを選択し、「プロパティ（P）」をクリックします。</h5>
                            <div class="box_body">
                                <p>「すべて」のタブより、メールアカウントを選択し、「プロパティ（P）」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「サーバー」タブをクリックします。</h5>
                            <div class="box_body">
                                <p>「サーバー」タブにある「送信メールサーバー」の「このサーバーは認証が必要」にチェックを入れ、 「設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「受信メールサーバーと同じ設定を使用する（U）」にチェックを入れ、「OK」をクリックします。</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_4.png" alt="SMTP認証設定方法4"></p>
                                <p>（3）の画面に戻りましたら、「OK」をクリックしてください。</p>
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