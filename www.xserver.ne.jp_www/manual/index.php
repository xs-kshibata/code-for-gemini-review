<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>マニュアル | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアルです。料金のお支払い方法や各種手続きについて、管理ツールの使い方やメールソフト・FTPソフトの使い方などについて説明しています。">

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
            
                <h3 class="sub-ttl">マニュアル</h3>
                <p class="mb30">
                    エックスサーバーのマニュアルです。<br>
                    左のメニュー、または下の項目から、お知りになりたい項目をお選びください。
                </p>
                
                <aside class="msg mb30">
                    <h4 class="msg_ttl"><i class="ico ico_circle-right"></i>他社からサーバー移転をお考えのお客様へ</h4>
                    <div class="msg_body">
                        <p>WebサイトやWordPress等の移転作業をプロのスタッフが代行する「サーバー移転代行」を提供しておりますので、ぜひご利用をご検討ください。</p>
                        <p class="tac"><a href="../price/service_server_daiko.php"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="サーバー移転代行"></a></p><p>また、ご自身で他社からエックスサーバーへの「サーバー移転」を行いたい方のために、詳しい手順をまとめましたので、下記のコンテンツをご参照ください。</p>
                        <p class="m0">
                            <a href="../order/order_transfer_server.php" class="mr5 btn btn_white">「サーバー移転」のお申し込み手順<i class="ico ico_chevron-right"></i></a>
                        </p>
                    </div>
                </aside>


                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body column2">
                    <li><a href="#link-a">お申し込みについて</a></li>
                    <li><a href="#link-b">ドメインについて</a></li>
                    <li><a href="#link-c">サーバーについて</a></li>
                    <li><a href="#link-d">サーバープログラムについて</a></li>
                    <li><a href="#link-e">インストールについて</a></li>
                    <li><a href="#link-k">WordPressテーマについて</a></li>
                    <li><a href="#link-f">メールについて</a></li>
                    <li><a href="#link-g">FTPについて</a></li>
                    <li><a href="#link-h">データベースについて</a></li>
                    <li><a href="#link-i">管理ツールについて</a></li>
                    <li><a href="#link-l">トラブルからの復旧について</a></li>
                    <li><a href="#link-j">用語集</a></li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">お申し込みについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">各種お申し込み</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="../order/index.php">サーバーのお申し込み</a></li>
                                        <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み</a></li>
                                        <li><a href="man_order_daiko.php">設定おまかせサポートのお申し込み</a></li>
                                        <li><a href="man_order_server_daiko.php">サーバー移転代行のお申し込み</a></li>
                                        <li><a href="man_order_present_domain.php">独自ドメイン永久無料特典</a></li>
                                        <li><a href="man_order_campaign_domain.php">独自ドメイン永久無料特典（キャンペーン特典）</a></li>
                                        <li><a href="man_order_oneyear_domain.php">独自ドメイン1年無料特典</a></li>
                                        <li><a href="man_order_campaign_cashback.php">キャッシュバック特典</a></li>
										<li><a href="man_order_refer_friend_program.php">お友達紹介プログラム</a></li>
                                        <li><a href="man_order_change_plan.php">プランの変更</a></li>
                                    </ul>
                                    <dl>
                                        <dt><a href="man_order_servicetransfer_intro.php">XServerビジネスへの変更</a></dt>
                                        <dd>
                                            <ul class="list list_chevron-right clearfix">
                                                <li><a href="man_order_servicetransfer_flow.php">ご利用手順</a></li>
                                                <li><a href="man_order_servicetransfer_detail.php">仕様詳細</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
									<dl>
                                       <dt><a href="man_order_servertransfer_intro.php">新サーバー簡単移行</a></dt>
                                          <dd>
                                              <ul class="list list_chevron-right clearfix">
                                              <li><a href="man_order_servertransfer_flow.php">ご利用手順</a></li>
                                              <li><a href="man_order_servertransfer_detail.php">仕様詳細</a></li>
                                              </ul>
                                          </dd>
                                     </dl>
								</dd>
                            </dl>
							
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">お支払いについて</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_pay_etc.php">料金のお支払い</a></li>
                                        <li><a href="man_order_pay_method_convenient.php">コンビニエンスストア払い</a></li>
                                        <li><a href="man_order_pay_method_credit.php">クレジットカード決済</a></li>
                                        <li><a href="man_order_pay_method_bank.php">銀行振り込み</a></li>
                                        <li><a href="man_order_pay_method_pay_easy.php">ペイジー決済</a></li>
                                        <li><a href="man_order_pay_method_paidy.php">あと払い（ペイディ）決済</a></li>
                                        <li><a href="man_order_pay_method_prepaid.php">プリペイド決済</a></li>
                                    </ul>
                                    <dl class="mb10">
                                        <dt><a href="man_order_pay_method_autopay.php">自動更新設定</a></dt>
                                        <dd>
                                            <ul class="list list_chevron-right clearfix">
                                                <li><a href="man_order_pay_method_autopay_credit.php">クレジットカードによる自動更新</a></li>
                                                <li><a href="man_order_pay_method_autopay_paidy.php">あと払い（ペイディ）による自動更新</a></li>
                                                <li><a href="man_order_pay_method_autopay_prepaid.php">プリペイドによる自動更新</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_pay_method_autopay_resetting.php">自動更新が失敗した場合の再設定</a></li>
                                        <li><a href="man_order_pay_report.php">お支払い報告</a></li>
                                        <li><a href="man_order_pay_history.php">お支払い履歴</a></li>
                                        <li><a href="man_order_pay_bill.php">請求書・受領書・見積書</a></li>
                                    </ul>
                                </dd>
                            </dl>

                            <dl class="menu-box_sub-box">
                                <dd>
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_order_addition.php">サービスお申し込み</a></li>
                                    <li><a href="man_order_about_id.php">各種IDについて</a></li>
                                    <li><a href="man_order_change_id.php">登録情報について</a></li>
                                    <li><a href="man_order_user_merge.php">アカウント・契約の統合</a></li>
                                </ul>
                                </dd>
                            </dl>

                            <dl class="menu-box_sub-box pb0">
                                <dd>
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_order_reissue.php">各種パスワードの再設定</a></li>
									<li><a href="man_order_sslreissue.php">オプション独自SSLの再発行</a></li>
									<li><a href="man_order_twostepauth.php">二段階認証設定</a></li>
                                    <li><a href="man_order_loginsecurity.php">不審なログイン時の認証</a></li>
                                    <li><a href="man_order_free_trial.php">無料お試し期間について</a></li>
                                    <li><a href="man_order_cancel.php">申し込みの取り消し</a></li>
                                    <li><a href="man_order_quit.php">解約</a></li>
                                </ul>
                                </dd>
                            </dl>
							
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">契約名義について</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_transfer_usage_rights.php">第三者にご契約を譲渡する場合</a></li>
                                        <li><a href="man_order_name_change.php">ご契約名義を変更する場合</a></li>
                                         <li><a href="man_order_domain_transfer.php">ドメインの譲渡をする場合</a></li>
                                    </ul>
                                </dd>
                            </dl>

                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ドメインについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_domain_spec.php">仕様一覧</a></li>
                                <li><a href="man_domain_transfer.php">ドメインの移管について</a></li>
                                <li><a href="man_domain_how_to_recovery.php">失効ドメイン復旧</a></li>
                                <li><a href="man_domain_setting.php">ドメイン設定</a></li>
                                <li><a href="man_domain_reset.php">ドメインの初期化</a></li>
                                <li><a href="man_domain_subdomain_setting.php">サブドメイン設定</a></li>
                                <li><a href="man_domain_authenticate.php">ドメイン認証</a></li>
                                <li><a href="man_domain_checkproxy.php">動作確認について</a></li>
                                <li><a href="man_domain_namesever_setting.php">ネームサーバーの設定</a></li>
                             </ul>
							<dl class="menu-box_sub-box">
								<dt><a href="man_domain_dns_setting.php">DNSレコードの編集</a></dt>
								<dd>
									<ul class="list list_chevron-right clearfix">
										<li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(旧G Suite)をお使いいただく場合</a></li>
										<li><a href="man_domain_dns_setting_blog.php">外部ブログを設定する場合</a></li>
										<li><a href="man_domain_dns_setting_mail_server.php">外部メールサーバーをお使いいただく場合</a></li>
									</ul>
								</dd>
							</dl>
                            <dl class="menu-box_sub-box">
                                <dt><a href="man_domain_whois.php">Whois情報</a></dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_domain_about_whois.php">Whoisについて</a></li>
                                        <li><a href="man_member_setting_whois.php">Whois情報設定</a></li>
                                    </ul>
                                </dd>
                            </dl>
                             <ul class="list list_chevron-right clearfix">
                                <li><a href="man_domain_register_lock.php">レジストラロック</a></li>
                                <li><a href="man_domain_auth_key.php">認証鍵</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">サーバーについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_spec.php">仕様一覧</a></li>
                                <li><a href="man_server_folder.php">初期フォルダについて</a></li>
                                <li><a href="man_server_ssl.php">無料独自SSL設定</a></li>
                                <li><a href="man_server_nginx.php">nginxについて</a></li>
                                <li><a href="man_server_http2.php">HTTP/2について</a></li>
                                <li><a href="man_server_limit.php">アクセス制限</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_htaccess.php">.htaccess</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_fullssl.php">Webサイトの常時SSL化</a></li>
                                        <li><a href="man_server_mobby.php">モバイル向けサイトの振り分け方</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_permission.php">パーミッション</a></li>
                                <li><a href="man_server_errorpage.php">エラーページ設定</a></li>
                                <li><a href="man_server_error.php">各種エラーメッセージ</a></li>
                            </ul>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_mime.php">MIME設定</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_phpini_edit.php">php.ini設定について</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_phpini_setting_item.php">php.ini設定で設定可能な項目</a></li>
                                        <li><a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_php_rapid.php">PHPの高速化について</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_php_fastcgi.php">FastCGIについて</a></li>
                                        <li><a href="man_server_php_apc.php">APC/OPcacheについて</a></li>
                                        <li><a href="man_server_php_jit.php">JITについて</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">Webフォント設定について</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                    	<li><a href="man_server_webfont_wp.php">WordPressプラグインでのご利用</a></li>
                                        <li><a href="man_server_webfont_html.php">HTML記述形式でのご利用</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a></li>
                                <li><a href="man_server_xpagespeed.php">XPageSpeed設定について</a></li>
                                <li><a href="man_server_mod_pagespeed.php">mod_pagespeed設定について</a></li>
                                <li><a href="man_server_cache.php">サーバーキャッシュ設定</a></li>
                                <li><a href="man_server_expires.php">ブラウザキャッシュ設定</a></li>
                                <li><a href="man_server_transfer.php">サイト転送設定</a></li>
                                <li><a href="man_server_ipcheck.php">アクセス拒否設定</a></li>
                                <li><a href="man_server_analyzer.php">アクセス解析</a></li>
                                <li><a href="man_server_log.php">アクセスログ</a></li>
								<li><a href="man_server_logerror.php">エラーログ</a></li>
								<li><a href="man_server_maildir.php">Maildirについて</a></li>
                                <li><a href="man_server_ssh.php">SSH設定</a></li>
                                <li><a href="man_server_ssh_connect_tera.php">SSHソフトの設定(Tera Term)</a></li>
                                <li><a href="man_server_wpsecurity.php">WordPressセキュリティ設定</a></li>
                                <li><a href="man_server_wprecovery.php">WordPressリカバリー</a></li>
                                <li><a href="man_server_waf.php">WAF設定</a></li>
                                <li><a href="man_server_ads.php">ads.txt</a></li>
                                <li><a href="man_server_download.php">自動バックアップからのデータ取得</a></li>
                                <li><a href="man_server_restore.php">自動バックアップからのデータ復元</a></li>
                                <li><a href="man_server_resource_information.php">リソースモニター</a></li>
                                <li><a href="man_server_security_scan.php">Web改ざん検知設定<span class="ico_biz">ビジネスプラン</span></a></li>
                                <li><a href="man_server_adminuser.php">管理者ユーザー設定<span class="ico_biz">ビジネスプラン</span></a></li>
                            </ul>
                            
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">サーバープログラムについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_program_soft.php">プログラム言語・コマンドパス</a></li>
                                <li><a href="man_program_cgi.php">CGI・SSI・PHP</a></li>
                                <li><a href="man_program_cron.php">Cron設定</a></li>
                                <li><a href="man_program_php_ver.php">PHPのバージョンについて</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">インストールについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_install_outside_program.php">動作確認済みプログラム</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_install_auto.php">簡単インストール</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_auto_word.php">WordPress 日本語版</a></li>
                                        <li><a href="man_install_auto_ec4.php">EC-CUBE 4</a></li>
                                        <li><a href="man_install_auto_puki.php">PukiWiki</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">手動インストール</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                    	<li><a href="man_install_word.php">WordPress 日本語版</a></li>
                                        <li><a href="man_install_zen.php">Zen Cart</a></li>
                                        <li><a href="man_install_magento.php">Magento2</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">サイトコピー</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_copy_word.php">WordPressのサイトコピーについて</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">CGIツール</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_cgi_mailform.php">メールフォーム</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box mb0 pb0">
                            	<dt class="menu-box_nolink">他社サービスからの移転</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_transfer_wp.php">WordPress簡単移行</a></li>
                                        <li><a href="man_install_transfer_wordpress.php">WordPressの移転について</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-k">WordPressテーマについて</h4>
                    <div class="section_body">
                        <div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_wp_theme_introduction.php">提供WordPressテーマの紹介</a></li>
                                <li><a href="man_wp_theme_purchase.php">WordPressテーマの購入・解約</a></li>
                                <li><a href="man_wp_theme_install.php">インストール済みWordPressにテーマをインストール</a></li>
                                <li><a href="man_wp_theme_download.php">WordPressテーマをダウンロード</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-f">メールについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_mail_spec.php">仕様一覧</a></li>
                                <li><a href="man_mail_add.php">メールアカウントの追加</a></li>
                                <li><a href="man_mail_bulkadd.php">メールアカウントの一括登録</a></li>
                                <li><a href="man_mail_account_csv.php">メールアカウントのCSVダウンロード</a></li>
                                <li><a href="man_mail_bulk_change.php">メールアカウントの一括変更</a></li>
                                <li><a href="man_mail_change_password.php">メールアカウントのパスワード変更</a></li>
                                <li><a href="man_mail_change_capacity.php">メールアカウントの容量変更</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_mail_setting.php">メールソフトの設定</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
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
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_mail_mailinglist.php">メーリングリストについて</a></li>
                                <li><a href="man_mail_mailmagazine.php">メールマガジンについて</a></li>
                                <li><a href="man_mail_spam_setting.php">迷惑メールフィルタ設定</a></li>
                                <li><a href="man_mail_mailreply.php">自動応答設定</a></li>
                                <li><a href="man_mail_sorting.php">メールの振り分け</a></li>
                                <li><a href="man_mail_jpcheck.php">SMTP認証の国外アクセス制限設定</a></li>
                                <li><a href="man_mail_op25b.php">OP25Bについて</a></li>
                                <li><a href="man_mail_transfer.php">転送設定</a></li>
                                <li><a href="man_mail_dkim.php">DKIM設定</a></li>
                                <li><a href="man_mail_spf.php">SPF設定</a></li>
                                <li><a href="man_mail_dmarc.php">DMARC設定</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-g">FTPについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_ftp_spec.php">仕様一覧</a></li>
                                <li><a href="man_ftp_add.php">FTPアカウントの追加</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_ftp_setting.php">FTPソフトの設定</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_ftp_ffftp_setting.php">FFFTPの設定</a></li>
                                        <li><a href="man_ftp_filezilla_setting.php">FileZillaの設定</a></li>
                                        <li><a href="man_ftp_hpb_setting.php">ホームページ・ビルダー20の設定</a></li>
                                        <li><a href="man_ftp_dream_setting.php">Dreamweaver CCの設定</a></li>
                                        <li><a href="man_ftp_cyberduck_setting.php">Cyberduckの設定</a></li>
                                        <li><a href="man_ftp_bind_setting.php">BiND for WebLiFE 8の設定</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_ftp_ftpaccess.php">.ftpaccess</a></li>
                                <li><a href="man_ftp_id.php">FTP制限設定</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
				<section class="section">
                    <h4 class="section_ttl" id="link-h">データベースについて</h4>
                    <div class="section_body">
                            <div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_db_spec.php">仕様一覧</a></li>
                                <li><a href="man_db_setting.php">MySQLの設定</a></li>
                                <li><a href="man_db_download.php">自動バックアップからのデータ取得</a></li>
                                <li><a href="man_db_man_backup.php">現在のMySQLをダウンロード</a></li>
                                <li><a href="man_db_myadmin.php">phpMyAdmin</a></li>
                                <li><a href="man_db_shift_tool.php">MySQL移行ツール</a></li>
                                <li><a href="man_db_restore.php">自動バックアップからの復元</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-i">管理ツールについて</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <div class="menu-box_sub-box">
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_tool_info.php">XServerアカウント</a></li>
                                    <li><a href="man_tool_xserver.php">エックスサーバー契約管理</a></li>
                                    <li><a href="man_tool_server.php">サーバーパネル</a></li>
                                    <li><a href="man_tool_file.php">ファイルマネージャ</a></li>
                                </ul>
                            </div>
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">メール管理ツール</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_tool_mail_panel.php">メールパネル</a></li>
                                        <li><a href="man_tool_mail.php">WEBメール</a></li>
                                        <li><a href="man_tool_mail_sp.php">WEBメール(スマートフォン・タブレット)</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_tool_aichat.php">AIチャットについて</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-l">トラブルからの復旧について</h4>
                    <div class="section_body">
                        <div class="menu-box">
                            <div class="menu-box_sub-box">
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_malicious_mailform.php">メールフォームを悪用した不正アクセスについて</a></li>
                                    <li><a href="man_malicious_password_crack.php">メールアカウントのパスワードクラックについて</a></li>
                                    <li><a href="man_malicious_access.php">不正アクセス(ファイルの改ざん、不正なファイル設置)について</a></li>
                                    <li><a href="man_malicious_login.php">XServerアカウント・サーバーパネルの不正ログインについて</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-j">用語集</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="terms.php">用語集</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
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
