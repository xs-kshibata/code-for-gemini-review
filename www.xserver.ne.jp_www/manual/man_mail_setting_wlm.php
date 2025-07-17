<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WindowsLiveメール設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「WindowsLiveメール」で使用するための設定手順について。overSSL設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">WindowsLiveメール</h3>

                <aside class="msg msg_caution">
                   <p class="red font-bold">当メールソフトは2017年1月10日をもってMicrosoftのサポートが終了しました。 <br>
                   ほかのメールソフトや、WEBメールの利用をご検討ください。</p>
                </aside>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">WindowsLiveメール アカウントの設定方法(overSSL設定)</a>
							<ol>
								<li><a href="#link-a01">1.メニューの「アカウント」タブをクリックして、「電子メール」をクリック</a></li>
								<li><a href="#link-a02">2.メールアドレス、パスワード、表示名を入力</a></li>
								<li><a href="#link-a03">3.受信メール・送信メールサーバー名を入力</a></li>
								<li><a href="#link-a04">4.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.「ホーム」より、メールアカウントを右クリックし、「プロパティ（R)」を選択</a></li>
								<li><a href="#link-b02">2.「サーバー」タブをクリック</a></li>
								<li><a href="#link-b03">3.「受信メールサーバーと同じ設定を使用する」にチェックを入れ、「OK」をクリック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">WindowsLiveメール アカウントの設定方法(overSSL設定)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_wlm_not.php">「接続時にSSLを利用しない（接続の保護なし）」場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.メニューの「アカウント」タブをクリックして、「電子メール」をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_1.png" alt="WindowsLiveメールで「アカウント」タブ「電子メール」を選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.メールアドレス、パスワード、表示名を入力</h5>
                                <div class="box_body">
                                    <p>設定ご希望のメールアドレス、メールアドレス作成時に設定したパスワードを入力してください。<br>
                                    「手動でサーバー設定を構成する（C）」にチェックを入れて、「次へ」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_2.png" alt="電子メールアカウント画面"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.受信メール・送信メールサーバー名を入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力します。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_3.png" alt="受信・送信メールサーバーを記入"></p>
                                    <table class="table table_use-caption">
                                        <caption>受信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th>受信メールサーバーの種類</th>
                                                <td>POP もしくは IMAP　※任意</td>
                                            </tr>
                                            <tr>
                                                <th>サーバーのアドレス</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>995　※IMAPの場合は993</td>
                                            </tr>
                                            <tr>
                                                <th>セキュリティで保護された接続（SSL）が必要（R)</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>次を使用して認証する</th>
                                                <td>クリア テキスト</td>
                                            </tr>
                                            <tr>
                                                <th>ログオンユーザー名</th>
                                                <td>電子メールアドレス に入力したものと同じメールアドレス</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>送信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th>サーバーのアドレス</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>セキュリティで保護された接続（SSL）が必要（R)</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>認証が必要（A）</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>必要事項を入力したら、「次へ」をクリックします。</p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.設定完了</h5>
                                <div class="box_body">
                                    <p>以下のような画面が表示されたら、設定完了です。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_4.png" alt="WindowsLiveメール・アカウント追加設定完了"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.「ホーム」より、メールアカウントを右クリックし、「プロパティ（R)」を選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「サーバー」タブをクリック</h5>
                            <div class="box_body">
                                <p>「サーバー」タブにある「送信メールサーバー」の「このサーバーは認証が必要（V）」にチェックを入れ、 「設定」をクリック</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「受信メールサーバーと同じ設定を使用する」にチェックを入れ、「OK」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_3.png" alt="SMTP認証設定方法3"></p>
                                <p>（2）の画面に戻りましたら、「OK」をクリックします。</p>
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