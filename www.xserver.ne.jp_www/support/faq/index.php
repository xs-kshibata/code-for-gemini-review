<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」へよくいただくご質問をまとめたQ&A集です。">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">よくある質問トップ</h3>
                <p class="mb50">
                    エックスサーバーによくお問い合わせいただく内容を、Q&A集としてまとめております。<br>
                    お問い合わせいただく前に、まずはこちらのQ&A集をご参照いただきますようお願い致します。
                </p>
                
                <h4 class="faq-top_ttl">特にお問い合わせの多い質問</h4>
                
                <div class="pickup-faq">
                    <p>
                    	<i class="ico ico_q"></i><a href="./service_hp_trouble_suddenly_use.php">有効期限に問題のないドメインが突然使えなくなりました。</a>
                    </p>
                    <p>
                    	<i class="ico ico_q"></i><a href="./service_mail_trouble_ssl_certificate.php">メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました。</a>
                    </p>
                </div>
                
                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_signature"></i>契約・料金について</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                        	<li><i class="ico ico_q"></i><a href="./contract_price_flow.php">支払うべき料金・支払い手順が分かりません。</a></li>
                        	<li><i class="ico ico_q"></i><a href="./contract_renewal_suspend.php">料金の未払いによりサーバー契約が凍結されました。今から料金を支払えば引き続き利用できますか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./contract_new_wordpress_plan.php">WordPressクイックスタートとは、どのような機能ですか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./contract_new_change_plan.php">申し込み後にサーバーのプラン変更はできますか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./contract_new_sms.php">SMS認証・電話認証がうまくいかず、申し込みができません。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">契約・料金に関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_new.php">新規契約</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_renewal.php">契約更新</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_alteration.php">契約変更</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_price.php">料金</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_cancel.php">解約</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_contract_new_trouble.php">トラブル</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_window"></i>Webサイト・WordPressについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./service_hp_wp_access_denied.php">「WordPress管理画面へのアクセスが拒否されました」と表示されました。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_hp_trouble_not_update.php">「このWEBスペースへは、まだホームページがアップロードされていません。」というエラーが表示されます。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_hp_trouble_403.php">「403 Forbidden」というエラーが表示されてホームページが見られません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_hp_trouble_500.php">「500 Internal Server Error」というエラーが表示されてホームページが見られません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_hp_wp_change_domain.php">エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">Webサイト・WordPressに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_server.php">サーバー仕様</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_hp_wp.php">WordPress</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_hp_transfer_wp.php">WordPress簡単移行</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_hp_webfont.php">Webフォント</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_db.php">データベース</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_cgi.php">CGI</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ssi.php">SSI</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_php.php">PHP</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_hp_trouble.php">トラブル</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_globe"></i>ファイル転送(FTP)について</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./service_ftp_trouble_hp_not_show.php">ファイルをアップロードしましたが、ホームページが表示されません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_ftp_setting_method.php">FTPの設定情報を教えてください。                            </a></li>
                            <li><i class="ico ico_q"></i><a href="./service_ftp_trouble_ftpsoft_delete.php">FTPソフトでファイルやフォルダが削除できません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_ftp_trouble_error.php">何度かエラーが発生したあと、正しいパスワードでもFTP接続ができなくなってしまいました。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_ftp_trouble_530.php">FTPソフトで「530」というエラーが表示され、接続ができなくなりました。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">ファイル転送(FTP)に関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ftp.php">機能・仕様</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ftp_setting.php">設定方法</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ftp_trouble.php">トラブル</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->
                
                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_email"></i>メールについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                        	<li><i class="ico ico_q"></i><a href="./service_mail_trouble_send.php">メールが送信できません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_mail_trouble_reception.php">メールが受信できません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_mail_trouble_err_mail_sender_gmail.php">Gmailへメールが送信できません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_mail_trouble_not_receive_error.php">メールが受信できず、送信元に「maildir over quota」と記載されたエラーメールが届きます。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_mail_setting_what.php">メールソフトへの設定方法を教えてください。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">メールに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail.php">機能・仕様</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail_setting.php">設定方法</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_tool_mail.php">WEBメール</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail_viruscheck.php">ウィルスチェック</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail_mailinglist.php">メーリングリスト機能</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail_mailmagazine.php">メールマガジン機能</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_mail_trouble.php">トラブル</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_gear"></i>ドメインについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./domain_multi_setting_server_change.php">異なるサーバーIDへドメイン運用サーバーを変更したいです。</a></li>
                            <li><i class="ico ico_q"></i><a href="./domain_multi_setting_nsdifference.php">サーバーパネルにドメイン設定をしましたが、「NS相違」と表示されています。</a></li>
                            <li><i class="ico ico_q"></i><a href="./domain_multi_setting_not_acquired.php">サーバーパネルにドメイン設定をしましたが、「未取得」と表示されてしまいます。</a></li>
                            <li><i class="ico ico_q"></i><a href="./domain_take_request_error.php">「使用できない組織種別」と表示され、ドメインの取得申請ができません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./domain_take_1org_1domain.php">「一組織一ドメイン名違反です」と表示され、ドメインの取得申請ができません。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">ドメインに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_domain_multi.php">マルチドメイン</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_domain_multi_setting.php">設定方法</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_domain_take.php">新規取得</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_transfer_domain.php">ドメイン移管</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_domain_whois.php">Whois</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_circle-check"></i>SSLについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./ssl_spec_free_option.php">「無料独自SSL」と「オプション独自SSL」の違いを教えてください。</a></li>
                            <li><i class="ico ico_q"></i><a href="./ssl_setting_not_exist.php">SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。</a></li>
                            <li><i class="ico ico_q"></i><a href="./ssl_spec_bring.php">他社で購入したSSLサーバー証明書の持ち込みには対応していますか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./ssl_setting_otherserver.php">オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">SSLに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ssl.php">SSL仕様</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_ssl_setting.php">申込・設定方法</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_home"></i>他社サービスからの移転について</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./transfer_server_what.php">他社からサーバーを乗り換える際の手順を教えてください。</a></li>
                            <li><i class="ico ico_q"></i><a href="./transfer_server_prior.php">サーバー移転の際に、事前に独自SSLを設定しておくことは可能ですか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./transfer_server_time.php">サーバー移転にかかる日数の目安はどれぐらいですか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./transfer_server_domain.php">サーバー移転とドメイン移管をする場合、どちらを先に行えばよいですか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./transfer_domain_howmany_days.php">ドメイン移管の手続きにかかる日数を教えてください。</a></li>
                            <li><i class="ico ico_q"></i><a href="./transfer_domain_dns_change.php">ドメイン移管の際に、ネームサーバーなどDNSは変更されますか？</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">他社サービスからの移転に関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_transfer_server.php">サーバー移転</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_transfer_domain.php">ドメイン移管</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_server"></i>サーバー仕様について</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./service_server_datacenter.php">サーバー（データセンター）はどこにありますか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_server_spec.php">サーバーのスペックを教えてください。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_server_os.php">サーバーのOSは何ですか？</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">サーバー仕様に関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_service_server.php">サーバー仕様</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->
				
                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_unlock"></i>管理ツールのログインについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                        	<li><i class="ico ico_q"></i><a href="./tool_info_login.php">XServerアカウントにログインできません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./tool_server_login.php">サーバーパネルにログインできません。</a></li>
                            <li><i class="ico ico_q"></i><a href="./service_missing_member_id.php">XServerアカウントIDを確認したい。</a></li>
							<li><i class="ico ico_q"></i><a href="./tool_info_login_javascript.php">ログインボタンを押しても反応がありません。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">管理ツールのログインに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_tool_info.php">XServerアカウント</a></li>
								<li><i class="ico ico_chevron-right"></i><a href="faq_tool_server.php">サーバーパネル</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_exclamation"></i>禁止事項について</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./dont_resale.php">再販は可能ですか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./dont_rental.php">ホームページ作成会社です。有償でクライアントにスペースを貸してもいいですか？</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">禁止事項に関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_dont.php">禁止事項について</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->

                <section class="faq-section">
                    <h4 class="faq-section_ttl"><i class="ico ico_balloon"></i>サポートについて</h4>
                    <div class="faq-section_body">
                        <ul class="faq-section_list">
                            <li><i class="ico ico_q"></i><a href="./support_id.php">XServerアカウントIDがわかりませんが、契約内容を確認したいです。</a></li>
                            <li><i class="ico ico_q"></i><a href="./support_security.php">セキュリティ対策はどうなっていますか？</a></li>
                            <li><i class="ico ico_q"></i><a href="./support_daiko_list.php">「設定おまかせサポート」で依頼が可能な作業内容を教えてほしい。</a></li>
                        </ul>
                        <section class="faq-section_more">
                            <h5 class="faq-section_more_ttl">サポートに関するよくある質問はこちら</h5>
                            <ul class="faq-section_more_list pl0">
                                <li><i class="ico ico_chevron-right"></i><a href="faq_support.php">サポートについて</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_support_daiko.php">設定おまかせサポートについて</a></li>
                                <li><i class="ico ico_chevron-right"></i><a href="faq_support_server_daiko.php">サーバー移転代行について</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
                <!-- /.faq-section -->
                
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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>