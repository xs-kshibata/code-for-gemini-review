<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Windows8メール設定手順(Microsoftアカウントがメールアプリで利用していないメールアドレスの場合) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Windows8メール」（Microsoftアカウントがメールアプリで利用していないメールアドレスの場合）で使用するための設定手順について記載しています。">

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
            
                <h3 class="sub-ttl">Windows8メール</h3>

                <aside class="msg msg_caution">
                   <p class="red font-bold">Windows8.1は2023年1月10日をもってMicrosoftのサポートが終了しました。<br>
                   ほかのメールソフトや、WEBメールの利用をご検討ください。</p>
                </aside>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Windows8 メールアプリでの設定方法 (Microsoftアカウントがメールアプリで設定するメールアドレスと異なる場合)</a>
							<ul>
								<li><a href="#link-a01">起動時の操作</a></li>
							</ul>
						</li>
						<li><a href="#link-b">メールアカウントを初めて追加設定する場合</a>
							<ol>
								<li><a href="#link-b01">1.IMAPを選択</a></li>
								<li><a href="#link-b02">2.メールアドレスとパスワードを入力</a></li>
								<li><a href="#link-b03">3.情報の入力</a></li>
								<li><a href="#link-b04">4.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-c">既にメールアカウントを追加設定されている場合</a>
							<ol>
								<li><a href="#link-c01">1.「［設定］ですべてを表示」をクリック</a></li>
								<li><a href="#link-c02">2.「その他のアカウント」を選択</a></li>
								<li><a href="#link-c03">3.IMAPを選択</a></li>
								<li><a href="#link-c04">4.メールアドレスとパスワードを入力</a></li>
								<li><a href="#link-c05">5.情報の入力</a></li>
								<li><a href="#link-c06">6.設定完了</a></li>
							</ol>
						</li>
						<li><a href="#link-d">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-d01">1.設定を選択</a></li>
								<li><a href="#link-d02">2.設定の中の「アカウント」をクリック</a></li>
								<li><a href="#link-d03">3.アカウントよりメールアカウントを選択</a></li>
								<li><a href="#link-d04">4.「送信サーバーは認証が必要」をチェック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                

                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Windows8 メールアプリでの設定方法<span class="font-xs"> (Microsoftアカウントがメールアプリで設定するメールアドレスと異なる場合)</span></h4>
                    <div class="section_body">
 
                        <aside class="msg msg_caution">
                            <div class="msg_body">
                                <p class="font-bold red">メールアプリに設定するメールアドレスが、Microsoftアカウントと同じ場合は、以下のマニュアルをご参照ください。</p>
                                <p class="link"><a href="man_mail_setting_windows8.php">Microsoftアカウントがメールアプリで設定するメールアドレスと同一の場合</a><i class="ico ico_chevron-right"></i></p>
                            </div>
                        </aside>
                        <aside class="msg msg_caution">
                            <div class="msg_body">
                                <p class="font-bold red">Windows 8のメールアプリの受信形式は、IMAPのみに対応しています。<br>受信形式をPOPで利用したい場合は、他のメールソフトをご用意ください。</p>
                            </div>
                        </aside>
                        <section class="block">
                            <h3 class="block_ttl" id="link-a01">起動時の操作</h5>
                            <div class="block_body">
                                <p>Windows8の「メール」をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_1.png" alt="Windowsメールでアカウント設定を選択しているスクリーンショット"></p>
                                <p>Microsoft アカウントを追加する画面が表示されます。<br>
                                「メールアドレス」と「パスワード」を入力して『保存』をクリックしてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_2.png" alt="Windowsメールでアカウント設定を選択しているスクリーンショット"></p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="w30per">メールアドレス</th>
                                            <td>Microsoft アカウントで登録したメールアドレス</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>Microsoft アカウントで登録したパスワード</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note red">※Microsoft アカウントの追加が未登録の場合は“Microsoft アカウントを新規登録”にて事前に登録が必要です。</p>
                                <aside class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>『保存』を選択後は該当する項目へお進みください。</h6>
                                    <div class="msg_body">
                                        <ul class="list list_arrow-down mb0">
                                            <li><a href="#link-b">メールアカウントを初めて追加設定する場合</a></li>
                                            <li><a href="#link-c">既にメールアカウントを追加設定されている場合</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                        
                <section class="section">
                    <h4 id="link-b" class="section_ttl">メールアカウントを初めて追加設定する場合</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            <section class="box">
                               <h5 class="box_ttl" id="link-b01">1.IMAPを選択</h5>
                                <div class="box_body">
                                    <p>「IMAP」を選択し、『接続』をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_5.png" alt="『接続』をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-b02">2.メールアドレスとパスワードを入力</h5>
                                <div class="box_body">
                                    <p>追加設定希望のメールアドレス、メールアドレス作成時に設定したパスワードを入力し、「詳細を表示」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_6.png" alt="「詳細を表示」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-b03">3.情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力し、「接続」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_7.png" alt="「接続」をクリックしているスクリーンショット"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">メールアドレス</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
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
                                    <table class="table table_use-caption mb5">
                                        <caption>受信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">受信（IMAP）メールサーバー</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>993</td>
                                            </tr>
                                            <tr>
                                                <th>受信サーバーはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>送信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">送信（SMTP）メールサーバー</th>
                                                 <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                 <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>送信サーバーはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>送信サーバーは認証が必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>メールの送信と受信で同じユーザー名とパスワードを使う</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl box_ttl_no-body" id="link-b04">4.設定完了</h5>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                        
                <section class="section">
                    <h4 id="link-c" class="section_ttl">既にメールアカウントを追加設定されている場合</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            <section class="box">
                               <h5 class="box_ttl" id="link-c01">1.「［設定］ですべてを表示」をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_not_mail_app_1.png" alt="「［設定］ですべてを表示」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c02">2.「その他のアカウント」を選択</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_4.png" alt="「アカウント」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c03">3.IMAPを選択</h5>
                                <div class="box_body">
                                    <p>「IMAP」を選択し、『接続』をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_5.png" alt="『接続』をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c04">4.メールアドレスとパスワードを入力</h5>
                                <div class="box_body">
                                    <p>追加設定希望のメールアドレス、メールアドレス作成時に設定したパスワードを入力し、「詳細を表示」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_6.png" alt="「詳細を表示」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c05">5.情報の入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力し、「接続」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_7.png" alt="「接続」をクリックしているスクリーンショット"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">メールアドレス</th>
                                                <td>メールアドレス（@前後を含むメールアドレス）</td>
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
                                    <table class="table table_use-caption mb5">
                                        <caption>受信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">受信（IMAP）メールサーバー</th>
                                                <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>993</td>
                                            </tr>
                                            <tr>
                                                <th>受信サーバーはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>送信サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">送信（SMTP）メールサーバー</th>
                                                 <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                                 <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>ポート</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>送信サーバーはSSLが必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>送信サーバーは認証が必要</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>メールの送信と受信で同じユーザー名とパスワードを使う</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl box_ttl_no-body" id="link-c06">6.設定完了</h5>
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
                               <h5 class="box_ttl" id="link-d01">1.設定を選択</h5>
                            <div class="box_body">
                                <p>マウスポインタを画面右下に移動させ、表示されたチャーム(黒帯部分)にある「設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d02">2.設定の中の「アカウント」をクリック</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d03">3.アカウントよりメールアカウントを選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d04">4.「送信サーバーは認証が必要」をチェック</h5>
                            <div class="box_body">
                                <p>画面中部の「送信メールサーバー」項目の下にある「送信サーバーは認証が必要」にチェックを入れます。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_4.png?date=20181116" alt="SMTP認証設定方法4"></p>
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