<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook 2007(接続の保護なし)設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook 2007」で使用するための設定手順について。「接続時にSSLを利用しない（接続の保護なし）」設定の手順を記載しています。">


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
            
                <h3 class="sub-ttl">Outlook 2007</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Microsoft Outlook 2007 の設定方法</a>
							<ol>
								<li><a href="#link-a01">1.ツール(T)より、アカウント設定(A)を選択</a></li>
								<li><a href="#link-a02">2.電子メールタブより、「新規(N)」を選択</a></li>
								<li><a href="#link-a03">3.サーバー設定または追加のサーバーの種類を手動で構成するにチェックし、次へ（N)を選択</a></li>
								<li><a href="#link-a04">4.インターネット電子メール(I)を選択し、次へ（N)を選択</a></li>
								<li><a href="#link-a05">5.「インターネット電子メールの設定」画面にて下記情報を入力後、詳細設定(M)を選択</a></li>
								<li><a href="#link-a06">6.送信サーバータブをクリックし、下記のように設定</a></li>
								<li><a href="#link-a07">7.詳細設定タブをクリックし、「サーバーのポート番号」の「送信サーバー（SMTP）」を587に変更</a></li>
								<li><a href="#link-a08">8.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.画面上部の「ツール(T)」より、「アカウント設定(A)」を選択</a></li>
								<li><a href="#link-b02">2.「電子メール」タブより、「変更(A)」を選択</a></li>
								<li><a href="#link-b03">3.「詳細設定」をクリック</a></li>
								<li><a href="#link-b04">4.「送信サーバー」タブを確認し、「OK」をクリック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Microsoft Outlook 2007 の設定方法</h4>
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
                            <p class="link mb0"><a href="man_mail_setting_ol.php">「STARTTLS」あるいは「POP/IMAP/SMTP over SSL」を利用する場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.ツール(T)より、アカウント設定(A)を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_1.png" alt="Outlook 2007でアカウント設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.電子メールタブより、「新規(N)」を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_2.png" alt="Outlook 2007で電子メールタブから新規を選んでいるスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.サーバー設定または追加のサーバーの種類を手動で構成するにチェックし、次へ（N)を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_3.png" alt="サーバー設定または追加のサーバーの種類を手動で構成するにチェックし、次へを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.インターネット電子メール(I)を選択し、次へ（N)を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_4.png" alt="インターネット電子メールを選択し、次へを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.「インターネット電子メールの設定」画面にて下記情報を入力後、詳細設定(M)を選択</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">メールソフトの設定</a>や下記を参考に情報を入力します。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_5.png" alt="情報の入力"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>ユーザー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">名前（Y）</th>
                                                <td>お客様の名前（受信者に表示される名前になります）</td>
                                            </tr>
                                            <tr>
                                                <th>電子メールアドレス（E）</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">アカウントの種類（A）</th>
                                                <td>POP3 もしくは IMAP（※任意） </td>
                                            </tr>
                                            <tr>
                                                <th>受信メールサーバー （I）</th>
                                                <td rowspan="2">設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>送信メールサーバー（SMTP）（O）</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>メール サーバーへのログオン情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">アカウント名（U）</th>
                                                <td>電子メールアドレス（E）に入力したものと同じメールアドレス</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード（P）</th>
                                                <td>メールアカウント作成時に設定したパスワード</td>
                                            </tr>
                                            <tr>
                                                <th>パスワードを保存する（R）</th>
                                                <td>チェック【あり】（※任意） </td>
                                            </tr>
                                            <tr>
                                                <th>メールサーバーがセキュリティで保護されたパスワード認証（SPA）に対応している場合には、チェック ボックスをオンにしてください（Q）</th>
                                                <td>チェック【なし】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.送信サーバータブをクリックし、下記のように設定</h5>
                                <div class="box_body">
                                    <p>送信サーバー (SMTP) は認証が必要にチェックをし、受信メールサーバーと同じ設定を使用するをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_6.png" alt="「インターネット電子メール設定」画面"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.詳細設定タブをクリックし、「サーバーのポート番号」の「送信サーバー（SMTP）」を587に変更</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_10.png" alt="「インターネット電子メール設定」画面"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.設定完了</h5>
                                <div class="box_body">
                                    <p>下記の画面が表示されたら、設定は完了です。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_8.png" alt="設定完了"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.画面上部の「ツール(T)」より、「アカウント設定(A)」を選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「電子メール」タブより、「変更(A)」を選択</h5>
                            <div class="box_body">
                                <p>「電子メール」タブより、メールアカウントを選択し、「変更(A)」をクリック</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「詳細設定」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「送信サーバー」タブを確認し、「OK」をクリック</h5>
                            <div class="box_body">
                                <p>「送信サーバー」タブにある「送信サーバー(SMTP)は認証が必要」と、「受信メールサーバーと同じ設定を使用する」の箇所にチェックを入れ、画面下部の「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_4.png" alt="SMTP認証設定方法4"></p>
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