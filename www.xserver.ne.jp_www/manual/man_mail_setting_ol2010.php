<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook 2010設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook 2010」で使用するための設定手順について。overSSL設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">Outlook 2010</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Microsoft Outlook 2010 アカウントの設定方法(overSSL設定)</a>
							<ul>
								<li><a href="#link-a01">1.起動時の操作</a></li>
								<li><a href="#link-a02">2.設定方法の選択</a></li>
								<li><a href="#link-a03">3.サービスの選択</a></li>
								<li><a href="#link-a04">4.情報の入力</a></li>
								<li><a href="#link-a05">5.詳細設定</a></li>
								<li><a href="#link-a06">6.アカウント設定のテスト</a></li>
								<li><a href="#link-a07">7.設定完了</a></li>
							</ul>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ul>
								<li><a href="#link-b01">1.「ホーム」よりメールアカウントを右クリックし、「アカウントのプロパティ（A）」を選択</a></li>
								<li><a href="#link-b02">2.「アカウント設定」をクリック</a></li>
								<li><a href="#link-b03">3.「電子メール」タブからメールアカウントを選択し、「変更」をクリック</a></li>
								<li><a href="#link-b04">4.「詳細設定（M）」をクリック</a></li>
								<li><a href="#link-b05">5.「送信サーバー」タブを確認し、「OK」をクリック</a></li>
							</ul>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Microsoft Outlook 2010 アカウントの設定方法(overSSL設定)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_ol2010_not.php">「接続時にSSLを利用しない（接続の保護なし）」場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.起動時の操作</h5>
                                <div class="box_body">
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>「Microsoft Outlook 2010スタートアップ」が表示される場合。</dt>
                                        <dd>
                                            <p class="note">※表示されていない場合は、<a class="font-bold" href="#next">「Microsoft Outlook 2010 スタートアップ」が表示されない場合</a>の手順から進めてください。</p>
                                            <p>最初の画面で「次へ（N）」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_mail_setting_ol2010_1.png" alt="Outlook 2010スタートアップ画面"></p>
                                            <p>「電子メールアカウント」画面で「はい（Y）」をお選びいただき、「次へ（N）」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_mail_setting_ol2010_2.png" alt="「電子メールアカウント」画面"></p>
                                        </dd>
                                    </dl>
                                    <dl class="dl">
                                        <dt id="next"><i class="ico ico_square-fill"></i>「Microsoft Outlook 2010スタートアップ」が表示されない場合</dt>
                                        <dd>
                                            <p>「ファイル」タブの「情報」にある「アカウントの追加」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_mail_setting_ol2010_3.png" alt="ファイルの情報よりアカウント設定をクリック"></p>
                                        </dd>
                                    </dl>
                                    
                                    
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.設定方法の選択</h5>
                                <div class="box_body">
                                    <p>「自分で電子メールやその他のサービスを使うための設定をする（手動設定）」を選択し、「次へ（N）」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_4.png" alt="自分で電子メールやその他のサービスを使うための設定をするを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.サービスの選択</h5>
                                <div class="box_body">
                                    <p>「インターネット電子メール」を選択し、「次へ（N）」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_5.png" alt="インターネット電子メールを選択"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_6.png" alt="情報を入力"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>ユーザー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">名前（Y）</th>
                                                <td>任意（差出人として受信者に表示される名前になります）</td>
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
                                                <td>チェックします（※任意） </td>
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
                                <h5 class="box_ttl" id="link-a05">5.詳細設定</h5>
                                <div class="box_body">
                                    <p>4.の情報の入力が完了したら、「詳細設定」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_7.png" alt="「詳細設定」をクリック"></p>
                                    <ol class="ol">
                                        <li>
                                            <p>「インターネット電子メール設定」画面の「送信サーバー」タブに進みます。<br>
                                            「送信サーバー（SMTP）は認証が必要（O）」にチェックを入れ、「受信メールサーバーと同じ設定を使用する（U）」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_mail_setting_ol2010_8.png" alt="「インターネット電子メール設定」画面の［送信サーバー］タブ"></p>
                                        </li>
                                        <li>
                                            <p>「インターネット電子メール設定」画面の「詳細設定」タブに進みます。</p>
                                            <p><img class="img" src="../img/manual/man_mail_setting_ol2010_13.png" alt="「インターネット電子メール設定」画面の［詳細設定］タブ"></p>
                                            <p>下記を参考に情報を入力後、「OK」のボタンを押して「インターネット電子メール設定」画面へ戻ります。</p>
                                            <table class="table table_use-caption mb10">
                                                <caption>サーバーのポート番号</caption>
                                                <tbody>
                                                    <tr>
                                                        <th class="w50per">受信サーバー（POP3）（I）</th>
                                                        <td>995　※IMAPの場合は993</td>
                                                    </tr>
                                                    <tr>
                                                        <th>このサーバーは暗号化された接続（SSL）が必要</th>
                                                        <td>チェックを【入れる】</td>
                                                    </tr>
                                                    <tr>
                                                        <th>送信サーバー（SMTP）（O）</th>
                                                        <td>465</td>
                                                    </tr>
                                                    <tr>
                                                        <th>使用する暗号化接続の種類 (C)</th>
                                                        <td>【SSL】を選択</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>※お客様の環境によっては使用する暗号化接続の種類を【SSL】ではなく【TLS】とする必要があります。</p>
                                        </li>
                                    </ol>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.アカウント設定のテスト</h5>
                                <div class="box_body">
                                    <p>「インターネット電子メール設定」画面で「[次へ]ボタンをクリックしたらアカウント設定をテストする（Ｓ）」にチェックを入れ、「次へ（N）」をクリックします。すると、アカウント設定のテストが開始されます。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_10.png" alt="「インターネット電子メール設定」画面"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.設定完了</h5>
                                <div class="box_body">
                                    <p>各タスクについて、状況に「完了」と表示されれば設定は完了です。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_11.png" alt="設定完了"></p>
                                    <p>テストアカウント設定画面の「閉じる（Ｃ）」をクリックし、アカウント設定を「完了」してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol2010_12.png" alt="設定完了"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.「ホーム」よりメールアカウントを右クリックし、「アカウントのプロパティ（A）」を選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2010_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「アカウント設定」をクリック</h5>
                            <div class="box_body">
                                <p>画面上部の「アカウント情報」が当該のメールアカウントになっていることを確認し、「アカウント設定」の中の「アカウント設定（A）」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2010_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「電子メール」タブからメールアカウントを選択し、「変更」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2010_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「詳細設定（M）」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2010_smtp_4.png" alt="SMTP認証設定方法4"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b05">5.「送信サーバー」タブを確認し、「OK」をクリック</h5>
                            <div class="box_body">
                                <p>「送信サーバー」タブにある「送信サーバー(SMTP)は認証が必要」と、「受信メールサーバーと同じ設定を使用する」の箇所にチェックを入れ、画面下部の「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2010_smtp_5.png" alt="SMTP認証設定方法5"></p>
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