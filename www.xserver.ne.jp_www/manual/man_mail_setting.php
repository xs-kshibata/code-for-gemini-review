<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールソフトの設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを各メールソフトで使用する際の設定内容について記載しています。">

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
            
                <h3 class="sub-ttl">メールソフトの設定</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">メールソフトの設定</a>
							<ul>
								<li><a href="#link-a01">メールソフトへの設定内容</a></li>
								<li><a href="#link-a02">SMTP認証(SMTP-AUTH)の設定について</a></li>
								<li><a href="#link-a03">各種メールソフトの設定手順</a></li>
							</ul>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">メールソフトの設定</h4>
                    <div class="section_body">
                        <p>メールソフトへの設定に関しては、下記の情報をご参照の上、行ってください。</p>
                        <section class="block">
                            <h5 id="link-a01" class="block_ttl">メールソフトへの設定内容</h5>
                            <div class="block_body">
                                <p>メールソフトへの設定を行う前に<a href="man_mail_add.php">メールアカウントの追加</a>を行ってください。<br>
                                また、独自ドメインを用いたメールアカウントの設定も下記のとおりです。</p>
                                <table class="table table_use-caption">
                                    <caption>メールアカウントの設定内容</caption>
                                    <tbody>
                                        <tr>
                                            <th colspan="2">POP/IMAPサーバー名<br>
                                                （ホスト名）</th>
                                            <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                            <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                                例）sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">SMTPサーバー名<br>
                                                （ホスト名）</th>
                                            <td>設定完了メールに記載されている「メールサーバー」を入力してください。
                                            <div class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。</div>
                                            
                                                例）sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">ユーザー名<br>
                                                （アカウント名）</th>
                                            <td><a href="man_mail_add.php">メールアカウントの追加</a>にて設定したメールアドレス（ドメイン名を含む）を入力してください。<br>
                                                <br>
                                                例）user@example.com<br>
                                                例）info@example.com</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">パスワード</th>
                                            <td><a href="man_mail_add.php">メールアカウントの追加</a>にて指定したパスワードを入力してください。
                                                <div class="note">※ご不明な場合は、<a href="man_mail_change_password.php">メールアカウントのパスワード変更</a>を行ってください。</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="3">ポート番号</th>
                                            <th>POP</th>
                                            <td>STARTTLSの場合 110<br>SSL/TLSの場合 995</td>
                                        </tr>
                                        <tr>
                                            <th>IMAP</th>
                                            <td>STARTTLSの場合 143<br>SSL/TLSの場合 993</td>
                                        </tr>
                                        <tr>
                                            <th>SMTP</th>
                                            <td>STARTTLSの場合 587<br>SSL/TLSの場合 465</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>※メールの挙動に不具合が生じる可能性があるため、POPとIMAPの併用は推奨していません。</br>
                                ※当サービスのWEBメールを利用される場合、メールソフトの設定はIMAPで統一してください。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-a02" class="block_ttl">SMTP認証(SMTP-AUTH)の設定について</h5>
                            <div class="block_body">
                                <p>当サービスは、メール送信時の認証方式については、<em class="font-bold">SMTP認証(SMTP-AUTH)を推奨</em>しております。<br>
                                メールソフトへのSMTP認証の設定については、ソフトによって異なりますが、「<em class="font-bold">認証が必要</em>」という項目や、「<em class="font-bold">パスワード認証</em>」という項目を選択することで設定が可能です。</p>
                                <p>当サービスのマニュアルでは、全てSMTP認証に対応した設定手順を案内しておりますので、次項の「<a href="#link-a03">各種メールソフトの設定手順</a>」をご参照の上、設定を行ってください。</p>
                                <aside class="msg">
                                	<h6 class="msg_ttl font-m"><i class="ico ico_circle"></i>POP before SMTP方式による認証について</h6>
                                	<div class="msg_body">
                                        <p>ご利用のサーバーによりPOP before SMTP方式による認証の利用可否が異なります。</p>
                                        <dl class="dl">
                                            <dt>サーバー番号sv2001以降のサーバー</dt>
                                            <dd>すべての接続において利用することができません。</dd>
                                            <dt>サーバー番号sv1〜sv1999のサーバー</dt>
                                            <dd>
                                                国内ネットワークからの接続に限り、利用することができます。<br>
                                                しかしながら、よりセキュリティの高いSMTP認証(SMTP-AUTH)での利用を強く推奨いたします。
                                            </dd>
                                        </dl>
                                    </div>
                                </aside>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-a03" class="block_ttl">各種メールソフトの設定手順</h5>
                            <div class="block_body">
                                <p>メールソフトへの設定手順については、下記のマニュアルをご参照ください。</p>
                                <ul class="ul">
                                    <li><a href="man_mail_setting_olwin.php">Outlook for Windows / Outlook (new)</a></li>
                                    <li><a href="man_mail_setting_wlm.php">WindowsLiveメール</a></li>
                                    <li><a href="man_mail_setting_windows10.php">Windows10メール</a></li>
                                    <li><a href="man_mail_setting_windows8.php">Windows8メール</a></li>
                                    <li><a href="man_mail_setting_tb_31.php">Mozilla Thunderbird(Ver31〜)</a></li>
                                    <li><a href="man_mail_setting_ol2019.php">Outlook 2019(Outlook 365)</a></li>
                                    <li><a href="man_mail_setting_ol2016.php">Outlook 2016</a></li>
                                    <li><a href="man_mail_setting_ol2013.php">Outlook 2013</a></li>
                                    <li><a href="man_mail_setting_ol2010.php">Outlook 2010</a></li>
                                    <li><a href="man_mail_setting_ol.php">Outlook 2007</a></li>
                                    <li><a href="man_mail_setting_becky.php">Becky! Internet Mail</a></li>
                                    <li><a href="man_mail_setting_mac_osx.php">Macメール(OS X)</a></li>
                                    <li><a href="man_mail_setting_iphone.php">iPhoneメール</a></li>
                                    <li><a href="man_mail_setting_ipad.php">iPadメール</a></li>
                                    <li><a href="man_mail_setting_gmail.php">Gmail</a></li>
                                </ul>
                            </div>
                        </section>
                        
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