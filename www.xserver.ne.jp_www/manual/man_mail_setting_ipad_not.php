<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>iPadメール(接続の保護なし)設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「iPadメール」で使用するための設定手順について。「接続時にSSLを利用しない（接続の保護なし）」設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">iPadメール</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">iPadメールアカウントの設定方法</a>
							<ol>
								<li><a href="#link-a01">1.ホーム画面から「メール」を起動</a></li>
								<li><a href="#link-a02">2.アカウント情報を入力</a></li>
								<li><a href="#link-a03">3.受信/送信メールサーバの情報を入力</a></li>
								<li><a href="#link-a04">4.サーバーの識別情報を検証</a></li>
								<li><a href="#link-a05">5.「*.xserver.jp」であるか確認</a></li>
								<li><a href="#link-a06">6.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.ホーム画面の「設定」をタップ</a></li>
								<li><a href="#link-b02">2.「メール/連絡先/カレンダー」より、メールアカウントをタップ</a></li>
								<li><a href="#link-b03">3.「送信メールサーバ」欄のSMTPをタップ</a></li>
								<li><a href="#link-b04">4.「プライマリサーバ」のサーバー名をタップ</a></li>
								<li><a href="#link-b05">5.「送信メールサーバ」欄の認証を「パスワード」に変更</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">iPadメールアカウントの設定方法</h4>
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
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_ipad.php">「STARTTLS」あるいは「POP/IMAP/SMTP over SSL」を利用する場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.ホーム画面から「メール」を起動</h5>
                                <div class="box_body">
                                    <p>「メール」を起動し『その他』をタップしてください。</p>
                                    <p class="note">※既にその他メールアドレスでメール利用の場合は、『アカウントを追加』からお進みください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_1.png" alt="「メール」を起動し『その他』をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.アカウント情報を入力</h5>
                                <div class="box_body">
                                    <p>追加設定希望のメールアドレス、メールアドレス作成時に設定したパスワードを入力し「次へ」をタップしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_2.png" alt="アカウント情報を入力し「次へ」をタップ"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">名前</th>
                                                <td>任意</td>
                                            </tr>
                                            <tr>
                                                <th>メール</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>メールアドレス作成時に設定したパスワード</td>
                                            </tr>
                                            <tr>
                                                <th>説明</th>
                                                <td>任意</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.受信/送信メールサーバの情報を入力</h5>
                                <div class="box_body">
                                    <p>「POP」もしくは「IMAP」を選び、<a href="man_mail_setting.php">メールソフトの設定</a>や下記を参考に情報を入力をし「次へ」をタップしてください。</p>
                                    <p class="note">※ここでは「POP」にて設定を行いますが、「IMAP」でも設定項目は同じです。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_3.png" alt="受信/送信メールサーバの情報を入力"></p>
                                    <table class="table table_use-caption">
                                        <caption>送信メールサーバー/受信メールサーバー（共通）</caption>
                                        <tbody>
                                            <tr>
                                                <th>ホスト名</th>
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
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.サーバーの識別情報を検証</h5>
                                <div class="box_body">
                                    <p>「サーバーの識別情報を検証できません」と表示されましたら、「詳細」をタップしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_4.png" alt="「詳細」をタップ"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.「*.xserver.jp」であるか確認</h5>
                                <div class="box_body">
                                    <p>コモンネームが「*.xserver.jp」かを確認し、「受け入れる」を選択してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_5.png" alt="「受け入れる」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.設定完了</h5>
                                <div class="box_body">
                                    <p>「続ける」を選択し、設定を完了してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_6.png" alt="「続ける」を選択"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.ホーム画面の「設定」をタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「メール/連絡先/カレンダー」より、メールアカウントをタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「送信メールサーバ」欄のSMTPをタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「プライマリサーバ」のサーバー名をタップ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_4.png" alt="SMTP認証設定方法4"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b05">5.「送信メールサーバ」欄の認証を「パスワード」に変更</h5>
                            <div class="box_body">
                                <p>「パスワード」に設定し、右上の「完了」をタップしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_5.png" alt="SMTP認証設定方法5"></p>
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