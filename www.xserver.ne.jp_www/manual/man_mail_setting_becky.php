<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Becky! Internet Mail設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Becky! Internet Mail」で使用するための設定手順について。overSSL設定の手順を記載しています。">

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
            
                <h3 class="sub-ttl">Becky! Internet Mail</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Becky! Internet Mail Ver.2.0 の設定方法(overSSL設定)</a>
							<ol>
								<li><a href="#link-a01">1.画面上部の「ツール」にある「メールボックスの設定」をクリック</a></li>
								<li><a href="#link-a02">2.必要事項を入力</a></li>
								<li><a href="#link-a03">3.「詳細」タブを選択</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTP認証設定方法</a>
							<ol>
								<li><a href="#link-b01">1.「ツール（T）」の「メールボックスの設定（M）」を選択</a></li>
								<li><a href="#link-b02">2.「プロファイル（Ｒ）」にて、メールアドレスを選択</a></li>
								<li><a href="#link-b03">3.「OP25B」にチェックが入っていることを確認</a></li>
								<li><a href="#link-b04">4.「詳細」をクリック</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Becky! Internet Mail Ver.2.0 の設定方法(overSSL設定)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_becky_not.php">「接続時にSSLを利用しない（接続の保護なし）」場合はこちら</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.画面上部の「ツール」にある「メールボックスの設定」をクリック</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_1.png" alt="Becky! Internet Mailでメールボックスの設定を選択しているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.必要事項を入力</h5>
                                <div class="box_body">
                                    <p>下記を参考に情報を入力してください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_2.png" alt="Becky! Internet Mailで各種設定をしているスクリーンショット"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">メールボックス名</th>
                                                <td>※任意の文字列</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>個人情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">名前</th>
                                                <td>※任意の文字列(差出人として受信者に表示される名前になります)</td>
                                            </tr>
                                            <tr>
                                                <th>メールアドレス</th>
                                                <td>メールアドレス(@前後を含むメールアドレス)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>サーバー情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">受信プロトコル(T)</th>
                                                <td>POP3 もしくは IMAPrev1(※任意)</td>
                                            </tr>
                                            <tr>
                                                <th>POP3サーバー(受信)(M)</th>
                                                <td rowspan="2">設定完了メールに記載されている「メールサーバー」を入力してください。
                                                <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>SMTPサーバー(送信)(S)</th>
                                            </tr>
                                            <tr>
                                                <th>POP3S/IMAPS</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>OP25B</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>SMTPS</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>ユーザーID(U)</th>
                                                <td>メールアドレスに入力したものと同じメールアドレス</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード(P)</th>
                                                <td>メールアカウント作成時に設定したパスワード</td>
                                            </tr>
                                            <tr>
                                                <th>認証方法</th>
                                                <td>標準</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※以下の画面が表示された場合は「はい」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_3.png" alt="ポート番号を「995」に変更するかどうかの画面が表示されているスクリーンショット"></p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_4.png" alt="ポート番号を「465」に変更するかどうかの画面が表示されているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.「詳細」タブを選択</h5>
                                <div class="box_body">
                                    <p>「詳細」のタブを選択し、下記内容を参考に情報を入力し、「OK」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_5.png?date=210617" alt="Becky! Internet Mailで詳細タブ内の設定をしているスクリーンショット"></p>
                                    
                                    <table class="table table_use-caption mb5">
                                        <caption>サーバーのポート番号</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SMTP</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>POP3</th>
                                                <td>995</td>
                                            </tr>
                                            <tr>
                                                <th>IMAP4</th>
                                                <td>993</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>SMTP認証　　（　チェックを【入れる】　）</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">LOGIN</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>PLAIN</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            <tr>
                                                <th>POP before SMTPを使用</th>
                                                <td>チェックを【外す】</td>
                                            </tr>
                                            <tr>
                                                <th>ESMTPを使用（SMTP認証には必須）</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>SSL/TLS関連</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">受信用(C)</th>
                                                <td>【デフォルト】を選択</td>
                                            </tr>
                                            <tr>
                                                <th>送信用(I)</th>
                                                <td>【デフォルト】を選択</td>
                                            </tr>
                                            <tr>
                                                <th>証明書を検証しない(S)</th>
                                                <td>チェックを【外す】</td>
                                            </tr>
                                            <tr>
                                                <th>クライアント証明書を使用(F)</th>
                                                <td>チェックを【入れる】</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>以上で設定は完了です。</p>
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
                            <h5 class="box_ttl" id="link-b01">1.「ツール（T）」の「メールボックスの設定（M）」を選択</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_1.png" alt="SMTP認証設定方法1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「プロファイル（Ｒ）」にて、メールアドレスを選択</h5>
                            <div class="box_body">
                                <p>画面下部の「プロファイル（Ｒ）」にて、設定を確認したいメールアドレスのプロファイルに変更します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_2.png" alt="SMTP認証設定方法2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「OP25B」にチェックが入っていることを確認</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_3.png" alt="SMTP認証設定方法3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「詳細」をクリック</h5>
                            <div class="box_body">
                                <p>「SMTP認証」「LOGIN」「PLAIN」「ESMTPを使用」にチェックをいれ、「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_4.png?date=210617" alt="SMTP認証設定方法4"></p>
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