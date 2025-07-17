<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>お問い合わせの前に | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーによくお問い合わせいただく内容をまとめて紹介しています。 お問い合わせの前に、確認していただき、疑問や質問の解決にお役立てください。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
            <?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">お問い合わせ</span></p>

        <section class="section">
        	<h3 class="section_ttl support">お問い合わせの前に...</h3>
        	<div class="section_body support">
                <aside class="support-news">
                    <p class="support-news_ttl">重要なお知らせ</p>
                    <ul class="list list_arrow-right">
                        <li><a href="../support/faq/service_mail_trouble_mail_thunderbird.php">Thunderbirdで突然メールが送受信できなくなった場合の対応について</a></li>
                        <li><a href="../support/faq/service_mail_trouble_err_mail_sender.php">ブラックリスト(RBL)に登録され、特定の宛先にメールが送信できなくなった場合の対応について</a></li>
						<li><a href="../support/faq/service_mail_trouble_err_mail_sender_gmail.php">Gmailへのみメールが送信できない(送信しても届かない)場合の対応について</a></li>
                    </ul>
                </aside>
                <!-- /support-news -->

                <aside class="support-news-phishing">
                    <p class="support-news-phishing_ttl">フィッシングメールに関するお知らせ</p>
                    <p class="support-news-phishing_txt">エックスサーバーを装った「なりすまし・フィッシングメール」に関するお問い合わせが増えています。<br>
                        不審なメールが届いた場合の対処方法については、以下をご参照ください。</p>
                    <ul class="list list_arrow-right">
                        <li><a href="<?php print $SITE_URL; ?>support/information_phishing.php"><b>エックスサーバーを装ったフィッシングメールにご注意ください</b></a></li>
                    </ul>
                    <p class="support-news-phishing_txt">また、直近のフィッシングメールの内容についてはニュースをご確認ください。</p>
                    <ul class="list list_arrow-right">
                        <li><a href="<?php print $SITE_URL; ?>news_detail.php?view_id=15334"><b>ニュース：【注意喚起】当サービスを装ったフィッシングメールにご注意ください(2025年4月17日 掲載)</b></a></li>
                    </ul>
                </aside>
                <!-- /support-news-phishing -->

				<p class="support-btn single mt50 mb50">
					<a href="../support/information.php" class="btn btn_gray">障害・メンテナンス情報<i class="ico ico_chevron-right"></i></a>
				</p>
				<!-- /support-button -->

				<section class="support-section mb50">
					<h4 class="support-section_ttl"><span class="support-section_ttl-sub">操作や設定などでお困りの方へ</span><br>マニュアル・よくある質問をご活用ください</h4>
					<div class="support-section_body">
						<div class="support-searchSec tac">
							<div class="search search--top">
								<h2 class="search_ttl">キーワードから探す</h2>
								<div class="search-box-container">
									<div class="search-box">
										<script>
											window.onload = function(){
												document.getElementById('gsc-i-id1').placeholder = '管理画面 ログイン';
											};
										</script>
										<script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
										<div class="gcse-searchbox-only"></div>
									</div>
								</div>
							</div>
							<ul class="support-btn_dbl">
								<li class="support-btn"><a href="../manual/" class="btn btn_blue btn_blue-secondary">マニュアル一覧から探す<i class="ico ico_chevron-right"></i></a></li>
								<li class="support-btn"><a href="../support/faq/" class="btn btn_blue btn_blue-secondary">よくある質問一覧から探す<i class="ico ico_chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
				</section>
				<!-- /support-section -->

				<section class="support-section pt10">
					<h4 class="support-section_ttl mb30">よくいただくお問い合わせ</h4>
					<div class="support-section_body">

						<div class="support-faqmore">
							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">管理画面にログインができない</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/tool_info_login.php">XServerアカウントにログインできません。</a></li>
										<li><a href="../support/faq/tool_server_login.php">サーバーパネルにログインできません</a></li>
									</ul>
								</div>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">メールが送受信できない</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_mail_trouble_send.php">メールが送信できません</a></li>
										<li><a href="../support/faq/service_mail_trouble_reception.php">メールが受信できません</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_receive_error.php">メールが受信できず、「maildir over quota.」と記載されたエラーメールがメール送信元に届くようになりました</a></li>
										<li><a href="../support/faq/service_mail_trouble_ssl_certificate.php">メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました</a></li>
										<li><a href="../support/faq/service_mail_trouble_error.php">身に覚えのないメールのエラーが頻繁に戻ってくるようになりました</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn">
									<a href="../support/faq/faq_service_mail_trouble.php">メールのトラブルについて<i class="ico ico_chevron-right"></i></a>
								</p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">ホームページが表示されない</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_hp_trouble_403.php">「403 Forbidden」というエラーが表示されてホームページが見られません</a></li>
										<li><a href="../support/faq/service_hp_trouble_500.php">「500 Internal Server Error」というエラーが表示されてホームページが見られません</a></li>
										<li><a href="../support/faq/service_hp_trouble_503.php">「503 Service Temporarily Unavailable」と表示されてホームページが見られません</a></li>
										<li><a href="../support/faq/service_hp_trouble_not_update.php">「このWEBスペースへは、まだホームページがアップロードされていません。」というエラーが表示されます</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_hp_trouble.php">ホームページのトラブルについて<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">新規契約について</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/contract_new_sms.php">SMS認証・電話認証がうまくいかず、申し込みができません。</a></li>
										<li><a href="../support/faq/contract_new_receive_an_email.php">キャッシュバック特典でサーバーを申込みしましたが、申請方法に関するメールはいつ頃届きますか？</a></li>
										<li><a href="../support/faq/contract_new_start.php">申し込みから利用開始までの期間はどのくらいですか？</a></li>
										<li><a href="../support/faq/contract_new_plan.php">プランによって機能の違いはありますか？</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_new.php">新規契約について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">ドメイン移管について</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../manual/man_domain_transfer.php">他社からドメイン移管をする手順を教えてください</a></li>
										<li><a href="../support/faq/transfer_domain_failure.php">他社からエックスサーバーへの移管が失敗してしまいます</a></li>
										<li><a href="../support/faq/transfer_domain_incoming_mail.php">移管申請に必要な移管承認メールが届きません</a></li>
										<li><a href="../support/faq/transfer_domain_mistake_discard.php">移管承認メールを誤って破棄してしまいました</a></li>
										<li><a href="../support/faq/transfer_domain_howmany_days.php">ドメイン移管の手続きにかかる日数を教えてください</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_transfer_domain.php">ドメイン移管について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">サーバー移転について</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/transfer_server_what.php">他社からサーバーを乗り換える際の手順を教えてください。</a></li>
                                        <li><a href="../support/faq/transfer_server_prior.php">サーバー移転の際に、事前に独自SSLを設定しておくことは可能ですか？</a></li>
										<li><a href="../support/faq/transfer_server_daiko.php">移転作業を代行してもらえますか？</a></li>
										<li><a href="../support/faq/domain_multi_setting_server_change.php">エックスサーバー同士でドメインの運用サーバーを変更したいです</a></li>
										<li><a href="../support/faq/transfer_server_incoming_mail.php">サーバー移転中のメールの受信方法はどうすればいいですか？</a></li>
										<li><a href="../support/faq/transfer_server_checkurl.php">ネームサーバーを切り替える前に動作確認する方法を教えてください</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_transfer_server.php">サーバー移転について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">契約更新・お支払いについて</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/contract_renewal_procedure.php">契約更新の手続きはどのようにするのですか？</a></li>
										<li><a href="../support/faq/contract_renewal_suspend.php">料金の未払いによりサーバー契約が凍結されました。今から料金を支払えば引き続き利用できますか？</a></li>
										<li><a href="../support/faq/contract_renewal_payment.php">更新したいのですが「料金支払い」ページに契約が表示されません</a></li>
										<li><a href="../support/faq/contract_price_invoice_issue.php">請求書・受領書・見積書の発行は可能ですか？</a></li>
										<li><a href="../support/faq/contract_renewal_automatic_update_error.php">「自動更新未完了のお知らせ」のメールが届きました。対応方法を教えてください。</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_renewal.php">契約更新について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">契約内容の確認・変更について</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/support_id.php">XServerアカウントIDが分かりませんが、契約を確認したいです</a></li>
										<li><a href="../support/faq/contract_alteration_mailaddress_change.php">登録メールアドレスを変更したいです</a></li>
										<li><a href="../support/faq/contract_alteration_assignment.php">別のXServerアカウントへサーバーアカウント、またはドメインを譲渡することは可能ですか？</a></li>
										<li><a href="../support/faq/contract_alteration_name.php">社名が変わったので契約名義を変更したいです</a></li>
										<li><a href="../support/faq/contract_alteration_change_plan.php">サーバーのプランを変更する手順を教えてください</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_alteration.php">契約変更について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">メールについて</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../manual/man_mail_setting.php">メールソフトへの設定方法を教えてください</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_know_password.php">メールアカウントのパスワードがわかりません</a></li>
										<li><a href="../support/faq/service_mail_setting_domain_auth.php">メールアカウント作成時に、ドメイン認証を求められる</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_send.php">出張、旅行等で日本国外にきた途端メールが送信できなくなりました</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_mail_trouble.php">メールの設定方法<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">WordPressについて</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_hp_wp_login.php">ダッシュボードへログインする情報が分からなくなりました</a></li>
										<li><a href="../support/faq/service_hp_wp_access_denied.php">「WordPress管理画面へのアクセスが拒否されました」と表示されました</a></li>
										<li><a href="../support/faq/service_hp_wp_change_domain.php">エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください</a></li>
										<li><a href="../support/faq/service_hp_wp_operation_check.php">WordPressの移転に際して「動作確認URL」機能を使いましたが、動作確認ができません</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_hp_wp.php">WordPressについて<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">SSL設定について</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/ssl_setting_keymark_not_display.php">SSLページへのアクセスで鍵マークが正常に表示されません。鍵マークをクリックすると「このページには安全でない他のリソースが含まれています。」と表示されます</a></li>
										<li><a href="../support/faq/ssl_spec_free_option.php">「無料独自SSL」と「オプション独自SSL」の違いを教えてください</a></li>
										<li><a href="../support/faq/ssl_setting_not_exist.php">SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定について<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">FTPについて</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_ftp_setting_method.php">FTPの設定情報を教えてください</a></li>
										<li><a href="../support/faq/service_ftp_setting_upload.php">ホームページのファイルはどこへアップロードすればいいですか？</a></li>
										<li><a href="../support/faq/service_ftp_trouble_not_upload.php">アップロードするも「このWEBスペースにはまだHPがアップロードされていません」という画面が表示されます</a></li>
										<li><a href="../support/faq/service_ftp_trouble_not_filelist.php">FTPソフトで突然ファイル一覧が表示されなくなりました</a></li>
										<li><a href="../support/faq/service_ftp_trouble_530.php">FTPソフトで「530」というエラーが表示され、接続ができなくなりました</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_ftp_trouble.php">FTPのトラブルについて<i class="ico ico_chevron-right"></i></a></p>
							</section>

						</div>
					</div>
				</section>
				<!-- /support-section -->

            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">「他社からのサーバー移転」や「独自ドメインやメールアドレスの設定」等でお困りのお客様</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p><b>「サーバー移転に失敗しないか心配」「ドメインの設定が分からない」「初心者なのでまとめて設定してほしい」</b>等、設定に不安のあるお客様に向けて、弊社スタッフが代行で作業する「設定おまかせサポート」や「サーバー移転代行」を提供しています。<br>
                        詳しくは以下ページにてご確認ください。</p>
                    <ul class="support-btn single daiko-add mt15">
                        <li>
                            <a href="../price/service_daiko.php" class="btn btn_gray">設定おまかせサポート<i class="ico ico_chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="../price/service_server_daiko.php" class="btn btn_gray">サーバー移転代行<i class="ico ico_chevron-right"></i></a>
                        </li>
                    </ul>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">ホームページ制作やサイトリニューアルでお困りのお客様</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p><b>「会社のホームページを作りたいけど、どこに依頼したら良いか分からない」「大規模なサイトを考えているけど、費用面について不安」</b>等のお悩みについて、日本全国5,000以上のホームページ会社から、お客様の予算・目的・納期に合わせて最適な会社をご紹介する窓口を提供しています。<br>
                        詳しくは以下「ホームページ制作相談」のページにてご確認ください。</p>
                    <p class="support-btn single mt15"><a href="../consulting/" target="_blank" class="btn btn_gray">ホームページ制作相談<i class="ico ico_new-window"></i></a></p>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">Webサイトのトラブルでお困りのお客様</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p>
                        お客様のWebサイトで起きているトラブルを診断する「Webサイトトラブル診断」機能も無料ご利用いただけます。<br>
                        <b>「急にアクセスできなくなった」「エラーが表示される」「Webサイトの更新が反映されない」</b>などでお困りの場合は、ぜひご利用ください。
                    </p>
                    <form method="post" action="<?php print $SECURE_URL; ?>xapanel/login/xserver/?request_page=xserver%2Fwebsitetrouble%2Finput">
                        <div class="form_btn-box_" style="text-align:center;margin-bottom:0">
                            <p style="margin:20px"><input id="site" class="i-long" type="text" name="site" value="" placeholder="https://example.com/"></p>
                            <p style="margin-bottom:0"><input class="btn btn_blue-l" type="submit" name="" value="Webサイトを診断する"></p>
                        </div>
                    </form>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section section-contact">
            <h3 class="section_ttl support">問題が解決しない場合</h3>
			<section class="support-section pt10">
				<div class="support-section_body">
					<div class="support-faqmore">

						<section class="support-faqmore_box">
							<h5 class="support-faqmore_ttl">みんなに質問・相談する<span>（ユーザーコミュニティ）</span></h5>
							<div class="support-faqmore_body">
								<p class="support-faqmore_body_ttl">
									お困りごとを質問・回答できる、<br>
									ユーザーコミュニティをご活用ください
								</p>
								<p>
									エックスサーバーのサービス利用者向けのコミュニティサイトでは、サービスの使い方やサイト制作・運用でのお困りごとなど、何でも質問することができます。
								</p>
							</div>
							<p class="support-faqmore_btn">
								<a href="https://community.xserver.ne.jp/" target="_blank">
									みんなに質問・相談する<span>（ユーザーコミュニティ）</span><i class="ico ico_new-window"></i>
								</a>
							</p>
						</section>

						<section class="support-faqmore_box">
							<h5 class="support-faqmore_ttl">メール・電話・チャットによる<span>お問い合わせ</span></h5>
							<div class="support-faqmore_body">
								<p>
									下記リンク先のメールフォームまたはお電話・チャットにてお問い合わせください。<br>
									お問い合わせ前に、「<a href="../support/faq/support_where.php">どこまでサポートしてもらえますか？</a>」もご参照ください。
								</p>
							</div>
							<p class="support-faqmore_btn"><a href="../support/support.php">メール・電話・チャットによる<span>お問い合わせ</span><i class="ico ico_chevron-right"></i></a></p>
						</section>
					</div>
				</div>
			</section>
			<!-- /support-section -->
		</section>
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