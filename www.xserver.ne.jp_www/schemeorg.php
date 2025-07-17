<?php
class TopicPath {
    protected $SITE_URL;
    public function __construct($SITE_URL){
        $this -> SITE_URL = $SITE_URL;
    }
    public function make_topicpath(){
        $site_url = $this -> SITE_URL;
        $PAGE_LIST = array(
            'label' => 'ホーム',
            'url' => 'index.php',
            'child' => array(
                array(
                    'label' => '特長',
                    'url' => 'feature/',
                    'child' => array(
                        array('label' => '特長一覧', 'url' => 'feature/index.php'),
                        array('label' => 'シンプルな料金体系', 'url' => 'feature/pricing_plan.php'),
                        array('label' => 'WordPress運営に強い', 'url' => 'feature/wordpress_reasons.php'),
                        array('label' => '人気テーマCocoonを開発・提供', 'url' => 'feature/wordpress.php'),
                        array('label' => 'お客様の声', 'url' => 'feature/feedback.php'),
                        array('label' => 'テストサイト', 'url' => 'feature/testsite.php'),
						array('label' => '利用事例', 'url' => 'feature/case.php'),
                    )
                ),
                array(
                    'label' => '機能',
                    'url' => 'functions/',
                    'child' => array(
                        array('label' => '機能一覧', 'url' => 'functions/index.php'),
                        array('label' => 'Xアクセラレータ', 'url' => 'functions/xaccelerator.php'),
                        array('label' => 'XPageSpeed', 'url' => 'functions/xpagespeed.php'),
                        array('label' => 'サーバーパネル', 'url' => 'functions/service_server.php'),
                        array('label' => 'WordPressテーマ', 'url' => 'functions/wptheme.php'),
                        array(
                            'label' => '独自SSL',
                            'url' => 'functions/service_ssl.php',
                            'child' => array(
                                array('label' => 'ラピッドSSL', 'url' => 'functions/ssl/rapidssl.php'),
                                array('label' => 'グローバルサイン クイック認証SSL', 'url' => 'functions/ssl/globalsign.php'),
                                array('label' => 'ジオトラスト クイックSSLプレミアム', 'url' => 'functions/ssl/geotrust.php'),
                                array('label' => 'クラウドSSL', 'url' => 'functions/ssl/coressl.php'),
                                array('label' => 'クラウドセキュア スピード認証SSL', 'url' => 'functions/ssl/securecore.php'),
                                array('label' => 'クラウドセキュア 企業認証SSL', 'url' => 'functions/ssl/securecore_ov.php'),
                                array('label' => 'クラウドセキュア EV SSL', 'url' => 'functions/ssl/securecore_ev.php'),
                                array('label' => 'デジサート セキュア・サーバID', 'url' => 'functions/ssl/digicert_ov.php'),
                                array('label' => 'デジサート セキュア・サーバID EV', 'url' => 'functions/ssl/digicert_ev.php'),
                                array('label' => 'SSL証明書とは','url' => 'functions/ssl/about_ssl.php'),
                                array('label' => '無料独自SSL','url' => 'functions/ssl/freessl.php')
                            ),
                        ),
                        array('label' => 'バックアップ','url' => 'functions/service_backup.php'),
                        array('label' => 'Webフォント','url' => 'functions/service_webfont.php','child' => array(array('label' => '書体見本一覧', 'url' => 'functions/service_webfont_shotai.php'))),
                        array('label' => 'WordPressテーマ', 'url' => 'feature/wptheme.php'),
                    )
                ),
                array(
                    'label' => '料金',
                    'url' => 'price/',
                    'child' => array(
                        array('label' => '料金プラン', 'url' => 'price/index.php'),
                        array('label' => '独自SSL', 'url' => 'price/price_ssl.php'),
                        array('label' => 'ドメイン別の更新料金（2018年12月17日以前に取得したドメイン）', 'url' => 'price/update_domain.php'),
                        array('label' => '設定おまかせサポート','url' => 'price/service_daiko.php'),
                        array('label' => 'サーバー移転代行','url' => 'price/service_server_daiko.php'),
                        array(
                            'label' => 'お支払い方法',
                            'url' => 'price/price_payment_method.php',
                            'child' => array(
                                array('label' => 'お支払い方法一覧', 'url' => 'price/price_payment_method.php'),
                                array('label' => 'クレジットカード', 'url' => 'price/price_payment_method_credit.php'),
                                array('label' => '銀行振込', 'url' => 'price/price_payment_method_bank.php'),
                                array('label' => 'ペイジー', 'url' => 'price/price_payment_method_pay_easy.php'),
                                array('label' => 'あと払い（ペイディ）', 'url' => 'price/price_payment_method_paidy.php'),
                                array('label' => 'プリペイド', 'url' => 'price/price_payment_method_prepaid.php'),
                                array('label' => 'セブンイレブン', 'url' => 'price/price_payment_method_seven.php'),
                                array('label' => 'ローソン', 'url' => 'price/price_payment_method_lawson.php'),
                                array('label' => 'デイリーヤマザキ', 'url' => 'price/price_payment_method_daily.php'),
                                array('label' => 'ミニストップ', 'url' => 'price/price_payment_method_mini.php'),
                                array('label' => 'ファミリーマート', 'url' => 'price/price_payment_method_family.php'),
                                array('label' => 'セイコーマート', 'url' => 'price/price_payment_method_seicomart.php'),
                                array('label' => 'サークルKサンクス', 'url' => 'price/price_payment_method_circle.php'),
                                array('label' => '受領書発行について', 'url' => 'price/price_payment_method_receipt.php'),
                            ),
                        ),
                    )
                ),
								array(
										'label' => 'ドメイン',
										'url' => 'domain/index.php'
								),
                array(
                    'label' => '学生プラン',
                    'url' => 'student/index,php'
                ),
                array(
                    'label' => 'お申し込みの流れ',
                    'url' => 'order/',
                    'child' => array(
												array('label' => 'サーバー新規お申し込み', 'url' => 'order/index.php'),
												array('label' => 'ドメイン新規取得', 'url' => 'order/order_new_domain.php'),
												array('label' => 'サーバー移転', 'url' => 'order/order_transfer_server.php'),
												array('label' => 'ドメイン移管', 'url' => 'order/order_transfer_domain.php'),
                        array(
                            'label' => 'ドメイン取得フォーム',
                            'url' => 'order/whois.php'
                        ),
                    )
                ),
                array(
                    'label' => 'マニュアル',
                    'url' => 'manual/index.php',
                    'child' => array(
                        array(
                            'label' => 'マニュアルトップ',
                            'url' => 'manual/index.php',
                        ),
						array('label' => 'エックスサーバーでブログを始めよう！初心者でもわかるWordPressブログの始め方', 'url' => 'manual/man_how_to_start_wpblog.php'),

                        array(
                            'label' => 'オプション独自SSLのお申し込み', 'url' => 'manual/man_order_ssl.php',
                            'child' => array(
                                array(
                                    'label' => 'ドメイン認証SSLの申請手続き',
                                    'url' => 'manual/man_order_ssl_domain.php'
                                ),
                                array(
                                    'label' => '企業認証SSLの申請手続き',
                                    'url' => 'manual/man_order_ssl_ov.php'
                                ),
                                array(
                                    'label' => 'EV SSLの申請手続き',
                                    'url' => 'manual/man_order_ssl_ev.php'
                                ),
                                array(
                                    'label' => 'DUNSナンバーの取得方法',
                                    'url' => 'manual/man_order_ssl_duns.php'
                                ),
                            ),
                        ),


                        array('label' => '高性能メールフィルタの有料オプション', 'url' => 'manual/man_order_cloudmark.php'),
                        array('label' => '設定おまかせサポート', 'url' => 'manual/man_order_daiko.php'),
                        array('label' => 'サーバー移転代行', 'url' => 'manual/man_order_server_daiko.php'),
                        array('label' => '独自ドメイン永久無料特典', 'url' => 'manual/man_order_present_domain.php'),
                        array('label' => '独自ドメイン永久無料特典（キャンペーン特典）', 'url' => 'manual/man_order_campaign_domain.php'),
                        array('label' => '独自ドメイン1年無料特典', 'url' => 'manual/man_order_oneyear_domain.php'),
                        array('label' => 'キャッシュバック特典', 'url' => 'manual/man_order_campaign_cashback.php'),
						array('label' => 'お友達紹介プログラム', 'url' => 'manual/man_order_refer_friend_program.php'),
                        array('label' => 'プランの変更', 'url' => 'manual/man_order_change_plan.php'),
                        array('label' => '料金のお支払い', 'url' => 'manual/man_order_pay_etc.php'),
                        array('label' => 'コンビニエンスストア払い', 'url' => 'manual/man_order_pay_method_convenient.php'),
                        array('label' => 'クレジットカード決済', 'url' => 'manual/man_order_pay_method_credit.php'),
                        array('label' => '銀行振り込み', 'url' => 'manual/man_order_pay_method_bank.php'),
                        array('label' => 'ペイジー決済', 'url' => 'manual/man_order_pay_method_pay_easy.php'),
                        array('label' => 'あと払い（ペイディ）決済', 'url' => 'manual/man_order_pay_method_paidy.php'),
                        array('label' => 'プリペイド決済', 'url' => 'manual/man_order_pay_method_prepaid.php'),
                        array(
                            'label' => '自動更新設定', 'url' => 'manual/man_order_pay_method_autopay.php',
                            'child' => array(
                                array(
                                    'label' => 'クレジットカードによる自動更新設定',
                                    'url' => 'manual/man_order_pay_method_autopay_credit.php'
                                ),
                                array(
                                    'label' => 'あと払い（ペイディ）による自動更新設定',
                                    'url' => 'manual/man_order_pay_method_autopay_paidy.php'
                                ),
                                array(
                                    'label' => 'プリペイドによる自動更新設定',
                                    'url' => 'manual/man_order_pay_method_autopay_prepaid.php'
                                ),
                            ),
                        ),
                        array('label' => '自動更新が失敗した場合の再設定', 'url' => 'manual/man_order_pay_method_autopay_resetting.php'),
                        array('label' => 'お支払い報告', 'url' => 'manual/man_order_pay_report.php'),
                        array('label' => 'お支払い履歴', 'url' => 'manual/man_order_pay_history.php'),
                        array('label' => '請求書・受領書・見積書', 'url' => 'manual/man_order_pay_bill.php'),
                        array('label' => 'サービスお申し込み', 'url' => 'manual/man_order_addition.php'),
                        array('label' => '各種IDについて', 'url' => 'manual/man_order_about_id.php'),
                        array('label' => '登録情報について', 'url' => 'manual/man_order_change_id.php'),
                        array('label' => 'アカウント・契約の統合', 'url' => 'manual/man_order_user_merge.php'),
                        array(
                            'label' => '新サーバー簡単移行',
                            'url' => 'manual/man_order_servertransfer_intro.php',
                            'child' => array(
                                array(
                                    'label' => 'ご利用手順',
                                    'url' => 'manual/man_order_servertransfer_flow.php'
                                ),
                                array(
                                    'label' => '仕様詳細',
                                    'url' => 'manual/man_order_servertransfer_detail.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'XServerビジネスへの変更',
                            'url' => 'manual/man_order_servicetransfer_intro.php',
                            'child' => array(
                                array(
                                    'label' => 'ご利用手順',
                                    'url' => 'manual/man_order_servicetransfer_flow.php'
                                ),
                                array(
                                    'label' => '仕様詳細',
                                    'url' => 'manual/man_order_servicetransfer_detail.php'
                                ),
                            ),
                        ),
                        array('label' => '各種パスワードの再設定', 'url' => 'manual/man_order_reissue.php'),
						array('label' => 'オプション独自SSLの再発行', 'url' => 'manual/man_order_sslreissue.php'),
                        array('label' => '二段階認証設定', 'url' => 'manual/man_order_twostepauth.php'),
                        array('label' => '不審なログイン時の認証', 'url' => 'manual/man_order_loginsecurity.php'),
                        array('label' => '無料お試し期間について', 'url' => 'manual/man_order_free_trial.php'),
                        array('label' => '申し込みの取り消し', 'url' => 'manual/man_order_cancel.php'),
                        array('label' => '解約', 'url' => 'manual/man_order_quit.php'),
                        array('label' => '第三者にご契約を譲渡する場合', 'url' => 'manual/man_order_transfer_usage_rights.php'),
                        array('label' => 'ご契約名義を変更する場合', 'url' => 'manual/man_order_name_change.php'),
                        array('label' => 'ドメイン譲渡', 'url' => 'manual/man_order_domain_transfer.php'),
                        array('label' => '仕様一覧', 'url' => 'manual/man_domain_spec.php'),
                        array('label' => 'ドメインの移管について', 'url' => 'manual/man_domain_transfer.php'),
                        array('label' => '失効ドメイン復旧', 'url' => 'manual/man_domain_how_to_recovery.php'),
                        array('label' => 'ドメイン設定', 'url' => 'manual/man_domain_setting.php'),
                        array('label' => 'ドメインの初期化', 'url' => 'manual/man_domain_reset.php'),
                        array('label' => 'サブドメイン設定', 'url' => 'manual/man_domain_subdomain_setting.php'),
                        array('label' => 'ドメイン認証', 'url' => 'manual/man_domain_authenticate.php'),
                        array('label' => '動作確認について', 'url' => 'manual/man_domain_checkproxy.php'),
                        array('label' => 'ネームサーバーの設定', 'url' => 'manual/man_domain_namesever_setting.php'),
                        array(
                            'label' => 'DNSレコードの編集',
                            'url' => 'manual/man_domain_dns_setting.php',
                            'child' => array(
                                array(
                                    'label' => 'Google Workspace(旧G Suite)をお使いいただく場合',
                                    'url' => 'manual/man_domain_dns_setting_google_apps.php'
                                ),
                                array(
                                    'label' => '外部ブログを設定する場合',
                                    'url' => 'manual/man_domain_dns_setting_blog.php'
                                ),
                                array(
                                    'label' => '外部メールサーバーをお使いいただく場合',
                                    'url' => 'manual/man_domain_dns_setting_mail_server.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'Whois情報',
                            'url' => 'manual/man_domain_whois.php',
                            'child' => array(
                                array(
                                    'label' => 'Whoisについて',
                                    'url' => 'manual/man_domain_about_whois.php'
                                ),
                                array(
                                    'label' => 'Whois情報設定',
                                    'url' => 'manual/man_member_setting_whois.php'
                                ),
                            ),
                        ),
                        array('label' => 'レジストラロック', 'url' => 'manual/man_domain_register_lock.php'),
                        array('label' => '認証鍵', 'url' => 'manual/man_domain_auth_key.php'),
                        array('label' => '仕様一覧', 'url' => 'manual/man_server_spec.php'),
                        array('label' => '初期フォルダについて', 'url' => 'manual/man_server_folder.php'),
                        array('label' => '無料独自SSL設定', 'url' => 'manual/man_server_ssl.php'),
                        array('label' => 'nginxについて', 'url' => 'manual/man_server_nginx.php'),
                        array('label' => 'HTTP/2について', 'url' => 'manual/man_server_http2.php'),
                        array('label' => 'アクセス制限', 'url' => 'manual/man_server_limit.php'),
                        array(
                            'label' => '.htaccess',
                            'url' => 'manual/man_server_htaccess.php',
                            'child' => array(
                                array(
                                    'label' => 'Webサイトの常時SSL化',
                                    'url' => 'manual/man_server_fullssl.php'
                                ),
                                array(
                                    'label' => 'モバイル向けサイトの振り分け方',
                                    'url' => 'manual/man_server_mobby.php'
                                ),
                            ),
                        ),
                        array('label' => 'パーミッション', 'url' => 'manual/man_server_permission.php'),
                        array('label' => 'エラーページ設定', 'url' => 'manual/man_server_errorpage.php'),
                        array('label' => '各種エラーメッセージ', 'url' => 'manual/man_server_error.php'),
                        array('label' => 'MIME設定', 'url' => 'manual/man_server_mime.php'),
                        array('label' => 'php.ini設定について', 'url' => 'manual/man_server_phpini_edit.php'),
                        array(
                            'label' => 'php.ini設定について',
                            'url' => 'manual/man_server_phpini_edit.php',
                            'child' => array(
                                array(
                                    'label' => 'php.ini設定で設定可能な項目について',
                                    'url' => 'manual/man_server_phpini_setting_item.php'
                                ),
                                array(
                                    'label' => 'XアクセラレータVer.2利用時に無効となるphp.ini設定について',
                                    'url' => 'manual/man_server_phpini_setting_ignore_item.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'PHPの高速化について',
                            'url' => 'manual/man_server_php_rapid.php',
                            'child' => array(
                                array(
                                    'label' => 'FastCGIについて',
                                    'url' => 'manual/man_server_php_fastcgi.php'
                                ),
                                array(
                                    'label' => 'APC/OPcacheについて',
                                    'url' => 'manual/man_server_php_apc.php'
                                ),
                                array(
                                    'label' => 'JITについて',
                                    'url' => 'manual/man_server_php_jit.php'
                                ),
                            ),
                        ),
                        array('label' => 'PHPの高速化について','url' => 'manual/man_server_php_rapid_oldspec.php'),
                        array('label' => 'Xアクセラレータ(エックスアクセラレータ)', 'url' => 'manual/man_server_xaccelerator.php'),
                        array('label' => 'XPageSpeed設定について', 'url' => 'manual/man_server_xpagespeed.php'),
                        array('label' => 'mod_pagespeed設定について', 'url' => 'manual/man_server_mod_pagespeed.php'),
                        array('label' => 'サーバーキャッシュ設定', 'url' => 'manual/man_server_cache.php'),
                        array('label' => 'ブラウザキャッシュ設定', 'url' => 'manual/man_server_expires.php'),
                        array('label' => 'サイト転送設定', 'url' => 'manual/man_server_transfer.php'),
                        array('label' => 'アクセス拒否設定', 'url' => 'manual/man_server_ipcheck.php'),
                        array('label' => 'アクセス解析', 'url' => 'manual/man_server_analyzer.php'),
                        array('label' => 'アクセスログ', 'url' => 'manual/man_server_log.php'),
                        array('label' => 'ログ', 'url' => 'manual/man_server_log_oldspec.php'),
                        array('label' => 'エラーログ', 'url' => 'manual/man_server_logerror.php'),
                        array('label' => 'Maildirについて', 'url' => 'manual/man_server_maildir.php'),
                        array('label' => 'SSH設定', 'url' => 'manual/man_server_ssh.php'),
                        array('label' => 'SSHソフトの設定(Tera Term)', 'url' => 'manual/man_server_ssh_connect_tera.php'),
                        array('label' => 'WordPressセキュリティ設定', 'url' => 'manual/man_server_wpsecurity.php'),
                        array('label' => 'WordPressリカバリー', 'url' => 'manual/man_server_wprecovery.php'),
                        array('label' => 'WAF設定', 'url' => 'manual/man_server_waf.php'),
                        array('label' => 'Web改ざん検知設定', 'url' => 'manual/man_server_security_scan.php'),
                        array('label' => 'ads.txt', 'url' => 'manual/man_server_ads.php'),
                        array('label' => '管理者ユーザー設定', 'url' => 'manual/man_server_adminuser.php'),
                        array('label' => '自動バックアップからのデータ取得', 'url' => 'manual/man_server_download.php'),
                        array('label' => '自動バックアップからのデータ復元', 'url' => 'manual/man_server_restore.php'),
                        array('label' => 'リソースモニター', 'url' => 'manual/man_server_resource_information.php'),
                        array(
                            'label' => 'HTML記述形式でのご利用',
                            'url' => 'manual/man_server_webfont_html.php'
                        ),
                        array(
                            'label' => 'WordPressプラグインでのご利用',
                            'url' => 'manual/man_server_webfont_wp.php'
                        ),
                        array('label' => 'プログラム言語・コマンドパス', 'url' => 'manual/man_program_soft.php'),
                        array('label' => 'プログラム言語・コマンドパス', 'url' => 'manual/man_program_soft_oldspec.php'),
                        array('label' => 'CGI・SSI・PHP', 'url' => 'manual/man_program_cgi.php'),
                        array('label' => 'Cron設定', 'url' => 'manual/man_program_cron.php'),
                        array('label' => 'PHPのバージョンについて', 'url' => 'manual/man_program_php_ver.php'),
                        array('label' => 'PHPのバージョンについて', 'url' => 'manual/man_program_php_ver_oldspec.php'),
                        array('label' => '動作確認済みプログラム', 'url' => 'manual/man_install_outside_program.php'),
                        array('label' => '動作確認済みプログラム', 'url' => 'manual/man_install_outside_program_oldspec.php'),
                        array(
                            'label' => '簡単インストール',
                            'url' => 'manual/man_install_auto.php',
                            'child' => array(
                                array('label' => 'Movable Type Open Source', 'url' => 'manual/man_install_auto_mt.php'),
                                array('label' => 'MTOS スタートアップガイド', 'url' => 'manual/man_install_mt_guide.php'),
                                array('label' => 'EC-CUBE 3', 'url' => 'manual/man_install_auto_ec.php'),
                                array('label' => 'EC-CUBE 4', 'url' => 'manual/man_install_auto_ec4.php'),
                                array('label' => 'XOOPS Cube', 'url' => 'manual/man_install_auto_xoops.php'),
                                array('label' => 'WordPress 日本語版', 'url' => 'manual/man_install_auto_word.php'),
                                array('label' => 'PukiWiki', 'url' => 'manual/man_install_auto_puki.php'),
                            ),
                        ),
                        array('label' => 'WordPress 日本語版', 'url' => 'manual/man_install_word.php'),
                        array('label' => 'XOOPS Cube', 'url' => 'manual/man_install_xoops.php'),
                        array('label' => 'Zen Cart', 'url' => 'manual/man_install_zen.php'),
                        array('label' => 'Magento2', 'url' => 'manual/man_install_magento.php'),
                        array('label' => 'WordPressのサイトコピーについて', 'url' => 'manual/man_install_copy_word.php'),
                        array('label' => 'メールフォーム', 'url' => 'manual/man_install_cgi_mailform.php'),
                        array('label' => 'WordPress簡単移行', 'url' => 'manual/man_install_transfer_wp.php'),
                        array('label' => 'WordPressの移転について', 'url' => 'manual/man_install_transfer_wordpress.php'),
                        array('label' => '仕様一覧', 'url' => 'manual/man_mail_spec.php'),
                        array('label' => 'メールアカウントの追加', 'url' => 'manual/man_mail_add.php'),
                        array('label' => 'メールアカウントの一括登録', 'url' => 'manual/man_mail_bulkadd.php'),
                        array('label' => 'メールアカウントのCSVダウンロード', 'url' => 'manual/man_mail_account_csv.php'),
                        array('label' => 'メールアカウントの一括変更', 'url' => 'manual/man_mail_bulk_change.php'),
                        array('label' => 'メールアカウントのパスワード変更', 'url' => 'manual/man_mail_change_password.php'),
                        array('label' => 'メールアカウントの容量変更', 'url' => 'manual/man_mail_change_capacity.php'),
                        array(
                            'label' => 'メールソフトの設定',
                            'url' => 'manual/man_mail_setting.php',
                            'child' => array(
                                array('label' => 'Outlook for Windows / Outlook (new)', 'url' => 'manual/man_mail_setting_olwin.php'),
                                array('label' => 'WindowsLiveメール', 'url' => 'manual/man_mail_setting_wlm.php'),
                                array('label' => 'WindowsLiveメール', 'url' => 'manual/man_mail_setting_wlm_not.php'),
                                array('label' => 'Windows10メール', 'url' => 'manual/man_mail_setting_windows10.php'),
                                array('label' => 'Windows8メール', 'url' => 'manual/man_mail_setting_windows8.php'),
                                array('label' => 'Windows8メール', 'url' => 'manual/man_mail_setting_windows8_not_mail_app.php'),
                                array('label' => 'Mozilla Thunderbird(Ver31〜)', 'url' => 'manual/man_mail_setting_tb_31.php'),
                                array('label' => 'Mozilla Thunderbird(Ver31〜)', 'url' => 'manual/man_mail_setting_tb_31_not.php'),
                                array('label' => 'Outlook 2019(Outlook 365)', 'url' => 'manual/man_mail_setting_ol2019.php'),
                                array('label' => 'Outlook 2016', 'url' => 'manual/man_mail_setting_ol2016.php'),
                                array('label' => 'Outlook 2013', 'url' => 'manual/man_mail_setting_ol2013.php'),
                                array('label' => 'Outlook 2013', 'url' => 'manual/man_mail_setting_ol2013_not.php'),
                                array('label' => 'Outlook 2010', 'url' => 'manual/man_mail_setting_ol2010.php'),
                                array('label' => 'Outlook 2010', 'url' => 'manual/man_mail_setting_ol2010_not.php'),
                                array('label' => 'Outlook 2007', 'url' => 'manual/man_mail_setting_ol.php'),
                                array('label' => 'Outlook 2007', 'url' => 'manual/man_mail_setting_ol_not.php'),
                                array('label' => 'Becky! Internet Mail', 'url' => 'manual/man_mail_setting_becky.php'),
                                array('label' => 'Macメール(OS X)', 'url' => 'manual/man_mail_setting_mac_osx.php'),
                                array('label' => 'Macメール(OS X)', 'url' => 'manual/man_mail_setting_mac_osx_not.php'),
                                array('label' => 'iPhoneメール', 'url' => 'manual/man_mail_setting_iphone.php'),
                                array('label' => '旧iPhoneメール', 'url' => 'manual/man_mail_setting_iphone_not.php'),
                                array('label' => '旧iPhoneメール', 'url' => 'manual/man_mail_setting_iphone_old.php'),
                                array('label' => 'iPadメール', 'url' => 'manual/man_mail_setting_ipad.php'),
                                array('label' => 'iPadメール', 'url' => 'manual/man_mail_setting_ipad_not.php'),
                                array('label' => 'Gmail', 'url' => 'manual/man_mail_setting_gmail.php'),
                            ),
                        ),
                        array('label' => '提供WordPressテーマの紹介', 'url' => 'manual/man_wp_theme_introduction.php'),
                        array('label' => 'WordPressテーマの購入・解約', 'url' => 'manual/man_wp_theme_purchase.php'),
                        array('label' => 'インストール済みWordPressにテーマをインストール', 'url' => 'manual/man_wp_theme_install.php'),
                        array('label' => 'WordPressテーマをダウンロード', 'url' => 'manual/man_wp_theme_download.php'),
                        array('label' => 'メーリングリストについて', 'url' => 'manual/man_mail_mailinglist.php'),
                        array('label' => 'メールマガジンについて', 'url' => 'manual/man_mail_mailmagazine.php'),
                        array('label' => '迷惑メールフィルタ設定', 'url' => 'manual/man_mail_spam_setting.php'),
                        array('label' => '自動応答設定', 'url' => 'manual/man_mail_mailreply.php'),
                        array('label' => 'メールの振り分け', 'url' => 'manual/man_mail_sorting.php'),
                        array('label' => 'SMTP認証の国外アクセス制限', 'url' => 'manual/man_mail_jpcheck.php'),
                        array('label' => 'OP25Bについて', 'url' => 'manual/man_mail_op25b.php'),
                        array('label' => '転送設定', 'url' => 'manual/man_mail_transfer.php'),
                        array('label' => 'DKIM設定', 'url' => 'manual/man_mail_dkim.php'),
                        array('label' => 'SPF設定', 'url' => 'manual/man_mail_spf.php'),
                        array('label' => 'DMARC設定', 'url' => 'manual/man_mail_dmarc.php'),
                        array('label' => '仕様一覧', 'url' => 'manual/man_ftp_spec.php'),
                        array('label' => 'FTPアカウントの追加', 'url' => 'manual/man_ftp_add.php'),
                        array(
                            'label' => 'FTPソフトの設定',
                            'url' => 'manual/man_ftp_setting.php',
                            'child' => array(
                                array('label' => 'FFFTPの設定', 'url' => 'manual/man_ftp_ffftp_setting.php'),
                                array('label' => 'FileZillaの設定', 'url' => 'manual/man_ftp_filezilla_setting.php'),
                                array('label' => 'ホームページ・ビルダー20の設定', 'url' => 'manual/man_ftp_hpb_setting.php'),
                                array('label' => 'Dreamweaver CCの設定', 'url' => 'manual/man_ftp_dream_setting.php'),
                                array('label' => 'Cyberduckの設定', 'url' => 'manual/man_ftp_cyberduck_setting.php'),
                                array('label' => 'BiND for WebLiFE 8の設定', 'url' => 'manual/man_ftp_bind_setting.php'),
                            ),
                        ),
                        array('label' => '.ftpaccess', 'url' => 'manual/man_ftp_ftpaccess.php'),
                        array('label' => 'FTP制限設定', 'url' => 'manual/man_ftp_id.php'),
                        array('label' => 'FTP情報確認手順', 'url' => 'manual/man_ftp_info_check.php'),
                        array('label' => '仕様一覧', 'url' => 'manual/man_db_spec.php'),
                        array('label' => 'MySQLの設定', 'url' => 'manual/man_db_setting.php'),
                        array('label' => '自動バックアップからのデータ取得', 'url' => 'manual/man_db_download.php'),
                        array('label' => '現在のMySQLをダウンロード', 'url' => 'manual/man_db_man_backup.php'),
                        array('label' => 'phpMyAdmin', 'url' => 'manual/man_db_myadmin.php'),
                        array('label' => 'MySQL移行ツール', 'url' => 'manual/man_db_shift_tool.php'),
                        array('label' => '自動バックアップからの復元', 'url' => 'manual/man_db_restore.php'),
                        array('label' => 'XServerアカウント', 'url' => 'manual/man_tool_info.php'),
						array('label' => 'エックスサーバー契約管理', 'url' => 'manual/man_tool_xserver.php'),
                        array('label' => 'サーバーパネル', 'url' => 'manual/man_tool_server.php'),
                        array('label' => 'ファイルマネージャ', 'url' => 'manual/man_tool_file.php'),
                        array('label' => 'メールパネル', 'url' => 'manual/man_tool_mail_panel.php'),
                        array('label' => 'WEBメール', 'url' => 'manual/man_tool_mail.php'),
                        array('label' => 'WEBメール(スマートフォン・タブレット)', 'url' => 'manual/man_tool_mail_sp.php'),
                        array('label' => '旧WEBメール', 'url' => 'manual/man_tool_mail_old.php'),
                        array('label' => '旧WEBメール(スマートフォン・タブレット)', 'url' => 'manual/man_tool_mail_sp_old.php'),
                        array('label' => 'AIチャットについて', 'url' => 'manual/man_tool_aichat.php'),
                        array('label' => 'メールフォームを悪用した不正アクセスについて', 'url' => 'manual/man_malicious_mailform.php'),
                        array('label' => 'メールアカウントのパスワードクラックについて', 'url' => 'manual/man_malicious_password_crack.php'),
                        array('label' => '不正アクセス（ファイルの改ざん、不正なファイル設置）について', 'url' => 'manual/man_malicious_access.php'),
                        array('label' => 'XServerアカウント・サーバーパネルへの不正ログインについて', 'url' => 'manual/man_malicious_login.php'),
                        array(
                            'label' => '用語集',
                            'url' => 'manual/terms.php'
                        ),
                        array(
                            'label' => '再販について',
                            'url' => 'manual/resale.php',
                        ),
                    ),
                ),
                array(
                    'label' => 'サポート',
                    'url' => 'support/',
                    'child' => array(
                        array('label' => 'お問い合わせ', 'url' => 'support/index.php'),
                        array('label' => 'お問い合わせ', 'url' => 'support/support.php'),
                        array('label' => 'お問い合わせ', 'url' => 'support/confirm.php'),
                        array('label' => 'お問い合わせ', 'url' => 'support/finish.php'),
                        array('label' => '個人情報の取り扱いについて', 'url' => 'support/support_privacy.php'),
                        array(
                            'label' => 'よくある質問',
                            'url' => 'support/faq/index.php',
                            'child' => array(
                                array(
                                    'label' => '契約・料金について',
                                    'url' => '',
                                    'child' => array(
                                    array(
                                        'label' => '新規契約',
                                        'url' => 'support/faq/faq_contract_new.php',
                                        'child' => array(
                                            array('label' => 'プランによって機能の違いはありますか？', 'url' => 'support/faq/contract_new_plan.php'),
                                            array('label' => '最短利用期間はありますか？', 'url' => 'support/faq/contract_new_shortest_use.php'),
                                            array('label' => 'お試し期間はありますか？', 'url' => 'support/faq/contract_new_trial.php'),
                                            array('label' => 'お試し期間でサーバーを申し込みする方法を教えてください。', 'url' => 'support/faq/contract_new_trial_flow.php'),
                                            array('label' => 'お試し期間の申込みから、本運用開始までの流れはどうなっていますか？', 'url' => 'support/faq/contract_new_flow.php'),
                                            array('label' => 'お試し期間の詳細について教えてください。', 'url' => 'support/faq/contract_new_trial_detail.php'),
                                            array('label' => 'WordPressクイックスタートとは、どのような機能ですか？', 'url' => 'support/faq/contract_new_wordpress_plan.php'),
                                            array('label' => '任意団体ですが、法人区分で申し込むことは可能ですか？', 'url' => 'support/faq/contract_new_voluntary_organization.php'),
                                            array('label' => 'サーバーと独自ドメインを同時に申し込むことはできますか？', 'url' => 'support/faq/contract_new_server_domain.php'),
                                            array('label' => 'サーバーIDを変更することはできますか？', 'url' => 'support/faq/contract_new_change_id.php'),
                                            array('label' => '申し込み時に入力した会員情報は後から変更できますか？', 'url' => 'support/faq/contract_new_change_member.php'),
                                            array('label' => '申し込みから利用開始までの期間はどのくらいですか？', 'url' => 'support/faq/contract_new_start.php'),
                                            array('label' => '申し込みをする際に、書類の提出は必要ですか?', 'url' => 'support/faq/contract_new_submit.php'),
                                            array('label' => '実際の契約（課金）はいつからになりますか？', 'url' => 'support/faq/contract_new_expense.php'),
                                            array('label' => '本契約の際にデータ移行など何か作業は必要になりますか？', 'url' => 'support/faq/contract_new_migration.php'),
                                            array('label' => '一つの管理パネルで複数の契約を管理できますか？', 'url' => 'support/faq/contract_new_multiple.php'),
                                            array('label' => '申し込み後にサーバーのプラン変更はできますか？', 'url' => 'support/faq/contract_new_change_plan.php'),
                                            array('label' => 'キャッシュバック特典でサーバーを申込みしましたが、申請方法に関するメールはいつ頃届きますか？', 'url' => 'support/faq/contract_new_receive_an_email.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '契約更新',
                                        'url' => 'support/faq/faq_contract_renewal.php',
                                        'child' => array(
                                            array('label' => '更新通知はいつ送られてきますか？', 'url' => 'support/faq/contract_renewal_notification.php'),
                                            array('label' => '契約更新の手続きはどのようにするのですか？', 'url' => 'support/faq/contract_renewal_procedure.php'),
                                            array('label' => '更新したいのですが、「料金支払い > お支払い/請求書発行」の「料金のお支払い手続き」に表示されていません。', 'url' => 'support/faq/contract_renewal_payment.php'),
                                            array('label' => '独自ドメイン永久無料特典の更新手続きについて教えて欲しいです。', 'url' => 'support/faq/contract_renewal_present_domain.php'),
                                            array('label' => '取得済みのドメインを独自ドメイン永久無料特典に適用したいです。', 'url' => 'support/faq/contract_renewal_present_domain_application.php'),
                                            array('label' => '「支払方法を選択する」ボタンをクリックしても画面が変わりません。', 'url' => 'support/faq/contract_renewal_method_payment.php'),
                                            array('label' => '支払いが反映されるまでの時間を教えてください。', 'url' => 'support/faq/contract_renewal_payment_reflects.php'),
                                            array('label' => '自動更新を設定したのに引き落としが行われません。', 'url' => 'support/faq/contract_renewal_automatic_debit.php'),
                                            array('label' => '「自動更新未完了のお知らせ」のメールが届きました。対応方法を教えてください。', 'url' => 'support/faq/contract_renewal_automatic_update_error.php'),
                                            array('label' => '3・6・12・24・36ヶ月単位の自動更新を設定したいです。', 'url' => 'support/faq/contract_renewal_automatic_update_multiple.php'),
                                            array('label' => '料金の未払いによりサーバー契約が凍結されました。今から料金を支払えば引き続き利用できますか？', 'url' => 'support/faq/contract_renewal_suspend.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '契約変更',
                                        'url' => 'support/faq/faq_contract_alteration.php',
                                        'child' => array(
                                            array('label' => 'サーバーのプランを変更する手順を教えてください。', 'url' => 'support/faq/contract_alteration_change_plan.php'),
                                            array('label' => 'プラン変更の際にデータの移動など必要な作業はありますか？', 'url' => 'support/faq/contract_alteration_migration.php'),
                                            array('label' => '別のXServerアカウントへサーバーアカウントまたはドメインを譲渡することは可能ですか？', 'url' => 'support/faq/contract_alteration_assignment.php'),
                                            array('label' => '契約名義を第三者（別の法人）に変更したいです。', 'url' => 'support/faq/contract_alteration_third_party.php'),
                                            array('label' => '社名が変わったので契約名義を変更したいです。', 'url' => 'support/faq/contract_alteration_name.php'),
                                            array('label' => '結婚して苗字が変わりました。', 'url' => 'support/faq/contract_alteration_last_name.php'),
                                            array('label' => '登録メールアドレスの変更をしたいです。', 'url' => 'support/faq/contract_alteration_mailaddress_change.php'),
                                            array('label' => 'サーバーIDは変更できますか？', 'url' => 'support/faq/contract_alteration_id_change.php'),
                                            array('label' => '書面による名義変更や譲渡手続きはどれくらいの日数で完了しますか？', 'url' => 'support/faq/contract_alteration_day_span.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '料金',
                                        'url' => 'support/faq/faq_contract_price.php',
                                        'child' => array(
                                            array('label' => '支払うべき料金・支払い手順が分かりません。', 'url' => 'support/faq/contract_price_flow.php'),
                                            array('label' => '支払い方法にはどのようなものがありますか？', 'url' => 'support/faq/contract_price_method_payment.php'),
                                            array('label' => 'クレジットカードで支払う際に、エラーが表示されて決済ができません。', 'url' => 'support/faq/contract_price_credit_error.php'),
                                            array('label' => '利用期限が過ぎましたが、まだ支払いは間に合いますか？', 'url' => 'support/faq/contract_price_expiration_date_over.php'),
                                            array('label' => 'サーバーやドメインなど複数サービスの料金を、銀行振り込みで合算で支払うことはできますか？', 'url' => 'support/faq/contract_price_adding_up.php'),
                                            array('label' => '支払い方法を変更するにはどうすればいいですか？', 'url' => 'support/faq/contract_price_method_payment_change.php'),
                                            array('label' => '契約期間を変更するにはどうすればいいですか？', 'url' => 'support/faq/contract_price_contract_period_change.php'),
                                            array('label' => '銀行振込で支払いをしましたが、確認通知が届きません。', 'url' => 'support/faq/contract_price_bank_transfer_notification.php'),
                                            array('label' => '銀行口座からの自動口座振替には、対応していますか？', 'url' => 'support/faq/contract_price_bank_transfer_auto.php'),
                                            array('label' => 'コンビニでの支払いを申し込みましたが、別のコンビニに変えたいです。', 'url' => 'support/faq/contract_price_convenience_store_change.php'),
                                            array('label' => '申し込んだプランの料金と異なる請求額が届きました。', 'url' => 'support/faq/contract_price_different_claim.php'),
                                            array('label' => '請求書・受領書・見積書の発行は可能ですか？', 'url' => 'support/faq/contract_price_invoice_issue.php'),
                                            array('label' => '請求書の宛名を変更することはできますか？', 'url' => 'support/faq/contract_price_invoice_change_address.php'),
                                            array('label' => '利用料金の自動更新はできますか？', 'url' => 'support/faq/contract_price_automatic_update.php'),
                                            array('label' => '登録しているクレジットカードを変更するにはどうすればいいですか？', 'url' => 'support/faq/contract_price_change_credit_card.php'),
                                            array('label' => 'クレジットカード情報の削除ができません。', 'url' => 'support/faq/contract_price_delete_credit_card.php'),
                                            array('label' => '適格請求書等保存方式（インボイス制度）の登録情報について', 'url' => 'support/faq/contract_price_invoice.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '解約',
                                        'url' => 'support/faq/faq_contract_cancel.php',
                                        'child' => array(
                                            array('label' => '契約前の申し込みをキャンセルできますか？', 'url' => 'support/faq/contract_cancel_before.php'),
                                            array('label' => '解約手順を教えてください。', 'url' => 'support/faq/contract_cancel_what.php'),
                                            array('label' => '解約を申請したらいつまで使う事ができますか？', 'url' => 'support/faq/contract_cancel_use.php'),
                                            array('label' => '誤って解約申請をしてしまいました。取り消す方法を教えてください。', 'url' => 'support/faq/contract_cancel_accidentally.php'),
                                            array('label' => '解約をしたサーバーアカウントは利用期限後どうなりますか？', 'url' => 'support/faq/contract_cancel_expiration_date_server.php'),
                                            array('label' => '解約をした独自ドメインは期限後どうなりますか？', 'url' => 'support/faq/contract_cancel_expiration_date_domain.php'),
                                            array('label' => '解約に料金はかかりますか？', 'url' => 'support/faq/contract_cancel_fee.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'トラブル',
                                        'url' => 'support/faq/faq_contract_new_trouble.php',
                                        'child' => array(
                                            array('label' => 'SMS認証・電話認証がうまくいかず、申し込みができません。', 'url' => 'support/faq/contract_new_sms.php'),
                                            array('label' => '「エックスサーバー 設定完了のお知らせ」のメールを紛失してしまいました。', 'url' => 'support/faq/contract_new_setup_mail.php'),
                                            array('label' => '「ご希望のメールアドレスは過去に登録されたことがあるため、登録することはできません。」と表示され、申し込みができません。', 'url' => 'support/faq/contract_new_registered_mail.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'Webサイト・WordPressについて',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '機能・仕様',
                                        'url' => 'support/faq/faq_service_hp.php',
                                        'child' => array(
                                            array('label' => 'ホームページにパスワードを設定することはできますか？', 'url' => 'support/faq/service_hp_password.php'),
                                            array('label' => 'データベースは使用できますか？', 'url' => 'support/faq/service_hp_database.php'),
                                            array('label' => '使用できるプログラム言語を教えてください。', 'url' => 'support/faq/service_hp_available_program.php'),
                                            array('label' => '携帯電話サイトを運営することはできますか？', 'url' => 'support/faq/service_hp_mobile_site.php'),
                                            array('label' => 'ファイルをアップロードするためにはどうすればいいですか？', 'url' => 'support/faq/service_hp_file_upload.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WordPress',
                                        'url' => 'support/faq/faq_service_hp_wp.php',
                                        'child' => array(
                                            array('label' => 'サブドメインにWordPressをインストールする方法を教えてください。', 'url' => 'support/faq/service_hp_wp_subdomain.php'),
                                            array('label' => 'WordPressへアクセスすると文字化けします。', 'url' => 'support/faq/service_hp_wp_garbled_char.php'),
                                            array('label' => '「WordPress管理画面へのアクセスが拒否されました」と表示されました。', 'url' => 'support/faq/service_hp_wp_access_denied.php'),
                                            array('label' => 'WordPressのMySQLユーザーとMySQLユーザーパスワードの確認方法を教えてください。', 'url' => 'support/faq/service_hp_wp_mysql.php'),
                                            array('label' => 'ダッシュボードへログインする情報が分からなくなりました。', 'url' => 'support/faq/service_hp_wp_login.php'),
                                            array('label' => 'WordPressを移転したらトップページ以外で404エラーが出るようになりました。', 'url' => 'support/faq/service_hp_wp_404.php'),
                                            array('label' => 'WordPressで特定のページのみSSLを使うことは可能ですか？', 'url' => 'support/faq/service_hp_wp_ssl.php'),
                                            array('label' => 'WordPressの移転に際して「動作確認URL」機能を使いましたが、動作確認ができません。', 'url' => 'support/faq/service_hp_wp_operation_check.php'),
                                            array('label' => 'エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください。', 'url' => 'support/faq/service_hp_wp_change_domain.php'),
                                            array('label' => 'WordPressで作ったサイトへのアクセスが増えてきました。負荷対策としてできることはありますか？', 'url' => 'support/faq/service_hp_wp_measures_againstload.php'),
                                            array('label' => 'PHPバージョンを切り替えてから、サイトが正常に表示されなくなりました。', 'url' => 'support/faq/service_hp_wp_change_php_not_displayed.php'),
                                            array('label' => 'WordPress管理画面でテーマ・プラグインを更新すると、サイトが正常に表示されなくなりました。', 'url' => 'support/faq/service_hp_wp_update_not_displayed.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WordPress簡単移行',
                                        'url' => 'support/faq/faq_service_hp_transfer_wp.php',
                                        'child' => array(
                                            array('label' => 'WordPress簡単移行で何ができますか？', 'url' => 'support/faq/service_hp_transfer_wp_what.php'),
                                            array('label' => '別のドメインにもWordPress簡単移行で移行できますか？', 'url' => 'support/faq/service_hp_transfer_wp_different_domain.php'),
                                            array('label' => 'WordPressサイトのURLを変更できますか？', 'url' => 'support/faq/service_hp_transfer_wp_change_url.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'Webフォント',
                                        'url' => 'support/faq/faq_service_hp_webfont.php',
                                        'child' => array(
                                            array('label' => 'Webフォントとは何ですか？', 'url' => 'support/faq/service_hp_webfont_what.php'),
                                            array('label' => '複数のサイトでWebフォント機能利用することはできますか？', 'url' => 'support/faq/service_hp_webfont_multiple.php'),
                                            array('label' => '「TypeSquare」とは何ですか？', 'url' => 'support/faq/service_hp_webfont_typesquare.php'),
                                            array('label' => 'Webフォント機能の設定方法を教えてください。', 'url' => 'support/faq/service_hp_webfont_setting.php'),
                                            array('label' => 'Webフォント機能を解除/無効にする方法を教えてください。', 'url' => 'support/faq/service_hp_webfont_release.php'),
                                            array('label' => 'Webフォント機能で規定のPV数（75,000PV）を超えた場合はどうなりますか？', 'url' => 'support/faq/service_hp_webfont_exceed_the_limit.php'),
                                            array('label' => '商用利用はできますか？', 'url' => 'support/faq/service_hp_webfont_commercial_use.php'),
                                            array('label' => '文字入力フォームでの入力文字にWebフォントは利用できますか？', 'url' => 'support/faq/service_hp_webfont_form_use.php'),
                                            array('label' => '利用開始後、書体や設定ドメインを変更することは可能ですか？', 'url' => 'support/faq/service_hp_webfont_change.php'),
                                            array('label' => '別の書体を追加することは可能ですか？', 'url' => 'support/faq/service_hp_webfont_different.php'),
                                            array('label' => '携帯電話でWebフォントを利用できますか？', 'url' => 'support/faq/service_hp_webfont_mobile_use.php'),
                                            array('label' => 'SSLを使っているサイトで利用できますか？', 'url' => 'support/faq/service_hp_webfont_ssl_use.php'),
                                            array('label' => 'Webフォントを利用したサイトを印刷したり、PDF化したりすることは可能ですか？', 'url' => 'support/faq/service_hp_webfont_print.php'),
                                            array('label' => 'セキュリティで配信制限をかけているサイトでの利用はできますか？', 'url' => 'support/faq/service_hp_webfont_delivery_restriction.php'),
                                            array('label' => '指定したWebフォントが表示されません。', 'url' => 'support/faq/service_hp_webfont_not_show.php'),
                                            array('label' => 'ドメインを登録していますが、該当のURLでフォントが配信されません。', 'url' => 'support/faq/service_hp_webfont_not_delivery.php'),
                                            array('label' => '文字を太字に変更したいのですが設定が反映されません。', 'url' => 'support/faq/service_hp_webfont_weight_change.php'),
                                            array('label' => 'TypeSquareのフォントを、PCにインストール済みのソフトウェアで利用できますか？', 'url' => 'support/faq/service_hp_webfont_software_use.php'),
                                            array('label' => 'サブドメインは登録できますか？', 'url' => 'support/faq/service_hp_webfont_subdomain.php'),
                                            array('label' => '文字が正しく表示されず、文字化けのような現象が起きているのですが…', 'url' => 'support/faq/service_hp_webfont_garbled_char.php'),
                                            array('label' => 'WordPress以外のブログやCMSでも利用できますか？', 'url' => 'support/faq/service_hp_webfont_other_cms.php'),
                                            array('label' => 'Webサイト作成で利用した文字列が、TypeSquare配信サーバに残りますか？', 'url' => 'support/faq/service_hp_webfont_string_left.php'),
                                            array('label' => '日本語ドメインのサイトで利用できますか？', 'url' => 'support/faq/service_hp_webfont_japanese_domain.php'),
                                            array('label' => 'インラインフレームのフレーム内にWebフォントが適用されません。', 'url' => 'support/faq/service_hp_webfont_inlineflame_not_applicable.php'),
                                            array('label' => 'Webフォントの設定を解除したのですが適用されたままです。', 'url' => 'support/faq/service_hp_webfont_stay_applied.php'),
                                            array('label' => '対応するWebブラウザを教えてください。', 'url' => 'support/faq/service_hp_webfont_supported_blowser.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'データベース',
                                        'url' => 'support/faq/faq_service_db.php',
                                        'child' => array(
                                            array('label' => 'MySQLのバージョンを教えてください。', 'url' => 'support/faq/service_db_version.php'),
                                            array('label' => 'MySQLで使用できる容量を教えてください。', 'url' => 'support/faq/service_db_capacity.php'),
                                            array('label' => 'MySQLの設定はどこから行えますか？', 'url' => 'support/faq/service_db_setting.php'),
                                            array('label' => 'phpMyAdminにログインできません。', 'url' => 'support/faq/service_db_phpmyadmin.php'),
                                            array('label' => 'データベースサーバーへ接続が出来ません。', 'url' => 'support/faq/service_db_expire.php'),
                                            array('label' => '簡単インストールを行ったプログラムのデータベースのパスワードを確認する方法を教えてください。', 'url' => 'support/faq/service_db_autoinstall_password.php'),
                                            array('label' => '「データベース確立エラー」というエラーが表示されてホームページが見られません。', 'url' => 'support/faq/service_db_hp_not_show.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'CGI',
                                        'url' => 'support/faq/faq_service_cgi.php',
                                        'child' => array(
                                            array('label' => 'CGIを使うにはどこに設置すればいいですか？', 'url' => 'support/faq/service_cgi_install.php'),
                                            array('label' => 'パーミッション設定はどうすればいいですか？', 'url' => 'support/faq/service_cgi_permission.php'),
                                            array('label' => '標準で利用できるPerlモジュールを教えてください。', 'url' => 'support/faq/service_cgi_perl_module.php'),
                                            array('label' => 'Perlのパスを教えてください。', 'url' => 'support/faq/service_cgi_perl_pass.php'),
                                            array('label' => 'GDは使えますか？', 'url' => 'support/faq/service_cgi_gd_use.php'),
                                            array('label' => 'jcode.pmは使用できますか？', 'url' => 'support/faq/service_cgi_jcode.php'),
                                            array('label' => 'suEXECには対応していますか？', 'url' => 'support/faq/service_cgi_suexec.php'),
                                            array('label' => 'CGIを設置すると「500 Internal Server Error」が表示されます。', 'url' => 'support/faq/service_cgi_500.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'SSI',
                                        'url' => 'support/faq/faq_service_ssi.php',
                                        'child' => array(
                                            array('label' => 'SSIは使用できますか？', 'url' => 'support/faq/service_ssi_use.php'),
                                            array('label' => '.htmlや.htmでSSIを動作させたいのですが、どうすればいいでしょうか？', 'url' => 'support/faq/service_ssi_action_html.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'PHP',
                                        'url' => 'support/faq/faq_service_php.php',
                                        'child' => array(
                                            array('label' => 'PHPは使用できますか？', 'url' => 'support/faq/service_php_use.php'),
                                            array('label' => 'PHPのバージョンを教えてください。', 'url' => 'support/faq/service_php_version.php'),
                                            array('label' => 'PHPのバージョンが書き換わってしまいます。', 'url' => 'support/faq/service_php_rewrite_version.php'),
                                            array('label' => 'PHPにはマルチバイトのモジュールは組み込まれていますか？', 'url' => 'support/faq/service_php_multibyte.php'),
                                            array('label' => 'php.iniの設定を変更したいのですが可能ですか？', 'url' => 'support/faq/service_php_phpini_conf_change.php'),
                                            array('label' => 'PHPが正常に動作しません。', 'url' => 'support/faq/service_php_normal_action.php'),
                                            array('label' => 'PHPを設置すると「500 Internal Server Error」が表示されます。', 'url' => 'support/faq/service_php_500.php'),
                                            array('label' => 'PHPが文字化けしてしまう。', 'url' => 'support/faq/service_php_garbled_char.php'),
                                            array('label' => '.htmlや.htmでPHPを動作させたいのですが、どうすればいいでしょうか？', 'url' => 'support/faq/service_php_action_html.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'トラブル',
                                        'url' => 'support/faq/faq_service_hp_trouble.php',
                                        'child' => array(
                                            array('label' => '「このWEBスペースへは、まだホームページがアップロードされていません。」というエラーが表示されます。', 'url' => 'support/faq/service_hp_trouble_not_update.php'),
                                            array('label' => '「403 Forbidden」というエラーが表示されてホームページが見られません。', 'url' => 'support/faq/service_hp_trouble_403.php'),
                                            array('label' => '「404 Not Found」というエラーが表示されてホームページが見られません。', 'url' => 'support/faq/service_hp_trouble_404.php'),
                                            array('label' => '「500 Internal Server Error」というエラーが表示されてホームページが見られません。', 'url' => 'support/faq/service_hp_trouble_500.php'),
                                            array('label' => '「503 Service Temporarily Unavailable」と表示されてホームページが見られません。', 'url' => 'support/faq/service_hp_trouble_503.php'),
                                            array('label' => '「510 Not Extended」というエラーが表示されてホームページが見られません。', 'url' => 'support/faq/service_hp_trouble_510.php'),
                                            array('label' => 'ホームページの画像が×となってしまい、うまく表示されません。', 'url' => 'support/faq/service_hp_trouble_img_error.php'),
                                            array('label' => '運用しているWebサイトが不正アクセスされました。対応方法を教えてください。', 'url' => 'support/faq/service_hp_trouble_tampering.php'),
                                            array('label' => '検索サイトの検索結果で自分のホームページが危険なサイトだと表示されます。', 'url' => 'support/faq/service_hp_trouble_dangerous.php'),
                                            array('label' => '自分のホームページからウィルスが検出されました。', 'url' => 'support/faq/service_hp_trouble_virus.php'),
                                            array('label' => '「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。', 'url' => 'support/faq/service_hp_trouble_not_exist.php'),
                                            array('label' => '有効期限に問題のないドメインが突然使えなくなりました。', 'url' => 'support/faq/service_hp_trouble_suddenly_use.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'ファイル転送(FTP)について',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '機能・仕様',
                                        'url' => 'support/faq/faq_service_ftp.php',
                                        'child' => array(
                                            array('label' => 'public_html フォルダとは何ですか？', 'url' => 'support/faq/service_ftp_public_html_folder.php'),
                                            array('label' => 'FTP over SSLは使用できますか？', 'url' => 'support/faq/service_ftp_overssl.php'),
                                            array('label' => 'FTPソフトでアクセス可能なディレクトリを指定できますか？', 'url' => 'support/faq/service_ftp_access.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '設定方法',
                                        'url' => 'support/faq/faq_service_ftp_setting.php',
                                        'child' => array(
                                            array('label' => 'FTPの設定情報を教えてください。', 'url' => 'support/faq/service_ftp_setting_method.php'),
                                            array('label' => 'ホームページのファイルはどこへアップロードすればいいですか？', 'url' => 'support/faq/service_ftp_setting_upload.php'),
                                            array('label' => '初期生成のディレクトリは削除してもいいですか？', 'url' => 'support/faq/service_ftp_setting_initial_folder.php'),
                                            array('label' => 'サブFTPアカウントを設定しないとFTPは使えないのでしょうか？', 'url' => 'support/faq/service_ftp_setting_add_use.php'),
                                            array('label' => 'FTPのパスワードを変更したい。', 'url' => 'support/faq/service_ftp_setting_password_change.php'),
                                            array('label' => 'FTP情報がわからなくなりました。アカウント名やパスワードはどこで確認できますか？', 'url' => 'support/faq/service_ftp_setting_info.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'トラブル',
                                        'url' => 'support/faq/faq_service_ftp_trouble.php',
                                        'child' => array(
                                            array('label' => 'ファイルをアップロードしましたが、ホームページが表示されません。', 'url' => 'support/faq/service_ftp_trouble_hp_not_show.php'),
                                            array('label' => 'アップロードするも「このWEBスペースにはまだHPがアップロードされていません」という画面が表示されます。', 'url' => 'support/faq/service_ftp_trouble_not_upload.php'),
                                            array('label' => 'FTPソフトでファイルやフォルダが削除できません。', 'url' => 'support/faq/service_ftp_trouble_ftpsoft_delete.php'),
                                            array('label' => 'ファイルの転送中に接続が切れてしまいます。', 'url' => 'support/faq/service_ftp_trouble_connection_expire.php'),
                                            array('label' => 'FTPソフトで「530」というエラーが表示され、接続ができなくなりました。', 'url' => 'support/faq/service_ftp_trouble_530.php'),
                                            array('label' => '初期状態で作成されているフォルダやファイルを削除してしまいました。', 'url' => 'support/faq/service_ftp_trouble_initial_folder_delete.php'),
                                            array('label' => 'FTPソフトで突然ファイル一覧が表示されなくなりました。', 'url' => 'support/faq/service_ftp_trouble_not_filelist.php'),
                                            array('label' => '何度かエラーが発生したあと、正しいパスワードでもFTP接続ができなくなってしまいました。', 'url' => 'support/faq/service_ftp_trouble_error.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'メールについて',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '機能・仕様',
                                        'url' => 'support/faq/faq_service_mail.php',
                                        'child' => array(
                                            array('label' => '1通あたり何MBまでメール送受信が可能ですか？', 'url' => 'support/faq/service_mail_transmission.php'),
                                            array('label' => 'メールを転送することはできますか？', 'url' => 'support/faq/service_mail_transfer.php'),
                                            array('label' => 'サブミッションポート（587ポート）は利用できますか？', 'url' => 'support/faq/service_mail_587port.php'),
                                            array('label' => 'ウィルスチェック機能はありますか？', 'url' => 'support/faq/service_mail_virus_check.php'),
                                            array('label' => 'キャッチオールの機能はありますか？', 'url' => 'support/faq/service_mail_catchall.php'),
                                            array('label' => 'ドメインごとにメールアカウントを作成できますか？', 'url' => 'support/faq/service_mail_per_domain.php'),
                                            array('label' => 'メーリングリスト・メールマガジンを作成できますか？', 'url' => 'support/faq/service_mail_mailinglist_mailmagazine.php'),
                                            array('label' => 'メールを大量に送信したいのですが、送信件数に制限はありますか？', 'url' => 'support/faq/service_mail_transmission_limit.php'),
                                            array('label' => 'DKIM認証は利用できますか？', 'url' => 'support/faq/service_mail_dkim.php'),
                                            array('label' => 'Gmail「メール送信者のガイドライン」に対応していますか？', 'url' => 'support/faq/service_mail_gmail.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '設定方法',
                                        'url' => 'support/faq/faq_service_mail_setting.php',
                                        'child' => array(
                                            array('label' => 'メールソフトへの設定方法を教えてください。', 'url' => 'support/faq/service_mail_setting_what.php'),
                                            array('label' => 'メール振り分け設定について詳しく教えてください。', 'url' => 'support/faq/service_mail_setting_sort.php'),
                                            array('label' => '特定のメールアドレスから送られてくるメールを受信拒否したい。', 'url' => 'support/faq/service_mail_setting_reception_refusal.php'),
                                            array('label' => 'メールでSSL（暗号化）通信を行いたい。', 'url' => 'support/faq/service_mail_setting_ssl.php'),
                                            array('label' => 'メールソフトへの設定で、送受信のメールサーバーをホスト名(sv***.xserver.jp)ではなく、初期ドメイン(***.xsrv.jp)や、独自ドメインを指定することは可能ですか。', 'url' => 'support/faq/service_mail_setting_mail_server.php'),
                                            array('label' => 'メールアカウント作成時に、ドメイン認証を求められる。', 'url' => 'support/faq/service_mail_setting_domain_auth.php'),
                                            array('label' => '取得したドメインが表示されず、メールアカウントの追加ができません。', 'url' => 'support/faq/service_mail_setting_add.php'),
                                            array('label' => 'Webサイトはエックスサーバー、メールはGoogle Workspaceで利用する際の設定方法を教えてください。', 'url' => 'support/faq/service_mail_setting_setup.php'),
                                            array('label' => '「一定数を超えると追加することができません」と表示され、メールアカウントの追加ができません。', 'url' => 'support/faq/service_mail_setting_upper_limit.php'),
                                            array('label' => '迷惑メールの対策方法を教えてください。', 'url' => 'support/faq/service_mail_setting_mail_spam.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WEBメール',
                                        'url' => 'support/faq/faq_tool_mail.php',
                                        'child' => array(
                                            array('label' => 'WEBメールにログインできません。', 'url' => 'support/faq/tool_mail_login.php'),
                                            array('label' => '「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示されました。', 'url' => 'support/faq/tool_mail_access_error.php'),
                                            array('label' => '受信メールが文字化けしている。', 'url' => 'support/faq/tool_mail_garbled_text.php'),
                                            array('label' => 'ログインボタンを押しても反応がありません。', 'url' => 'support/faq/tool_mail_login_javascript.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'ウィルスチェック',
                                        'url' => 'support/faq/faq_service_mail_viruscheck.php',
                                        'child' => array(
                                            array('label' => 'アンチウィルス機能を利用したい', 'url' => 'support/faq/service_mail_viruscheck_use.php'),
                                            array('label' => 'メール転送設定をしている場合、転送されるメールもアンチウィルス機能は有効ですか。', 'url' => 'support/faq/service_mail_viruscheck_transfer.php'),
                                            array('label' => 'メーリングリスト・メールマガジンで利用するメールアドレスも、アンチウィルス機能は有効ですか。', 'url' => 'support/faq/service_mail_viruscheck_mailinglist_mailmagazine.php'),
                                            array('label' => '件名が「ウィルス検出通知/VIRUS DETECTION」のメールを受け取りました。', 'url' => 'support/faq/service_mail_viruscheck_detection_notification.php'),
                                            array('label' => '送信した覚えのないメールですが、ウィルスが検出されたとの通知を受け取りました。', 'url' => 'support/faq/service_mail_viruscheck_not_remember_send_detection_notification.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'メーリングリスト機能',
                                        'url' => 'support/faq/faq_service_mail_mailinglist.php',
                                        'child' => array(
                                            array('label' => 'メーリングリストを作成できる件数に上限はありますか。', 'url' => 'support/faq/service_mail_mailinglist_limit.php'),
                                            array('label' => '作成したメーリングリストにユーザー(メールアドレス)を登録する方法を教えてください。', 'url' => 'support/faq/service_mail_mailinglist_address_registration.php'),
                                            array('label' => '作成したメーリングリストに登録可能なユーザー(メールアドレス)に上限はありますか。', 'url' => 'support/faq/service_mail_mailinglist_address_limit.php'),
                                            array('label' => 'サブドメインを利用したメーリングリストを作成することはできますか。', 'url' => 'support/faq/service_mail_mailinglist_subdomain.php'),
                                            array('label' => 'メールは外部サービスで運用していますが、メーリングリストは利用できますか？', 'url' => 'support/faq/service_mail_mailinglist_outside_mail.php'),
                                            array('label' => 'Webサイトは外部サービスで運用していますが、メーリングリストは利用できますか？', 'url' => 'support/faq/service_mail_mailinglist_outside_website.php'),
                                            array('label' => 'メーリングリストで配信するメールの送受信数に上限はありますか？', 'url' => 'support/faq/service_mail_mailinglist_send_limit.php'),
                                            array('label' => 'お試し期間中にメーリングリスト機能を利用することはできますか。', 'url' => 'support/faq/service_mail_mailinglist_trial.php'),
                                            array('label' => '外部のメールアドレスからメーリングリストへメールを配信する方法を教えてください。', 'url' => 'support/faq/service_mail_mailinglist_external.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'メールマガジン機能',
                                        'url' => 'support/faq/faq_service_mail_mailmagazine.php',
                                        'child' => array(
                                            array('label' => 'メールマガジンを作成できる件数に上限はありますか？', 'url' => 'support/faq/service_mail_mailmagazine_create_limit.php'),
                                            array('label' => '作成したメールマガジンにユーザー(メールアドレス)を登録する方法を教えてください。', 'url' => 'support/faq/service_mail_mailmagazine_address_registration.php'),
                                            array('label' => '作成したメールマガジンに登録可能なユーザー(メールアドレス)に上限はありますか。', 'url' => 'support/faq/service_mail_mailmagazine_address_limit.php'),
                                            array('label' => 'サブドメインを利用したメールマガジンを作成することはできますか。', 'url' => 'support/faq/service_mail_mailmagazine_subdomain.php'),
                                            array('label' => 'メールは外部サービスで運用していますが、メールマガジンは利用できますか？', 'url' => 'support/faq/service_mail_mailmagazine_outside_mail.php'),
                                            array('label' => 'Webサイトは外部サービスで運用していますが、メールマガジンは利用できますか？', 'url' => 'support/faq/service_mail_mailmagazine_outside_website.php'),
                                            array('label' => 'メールマガジン機能を利用して送信したメールが、受信側で迷惑メールと判定されます。', 'url' => 'support/faq/service_mail_mailmagazine_spam.php'),
                                            array('label' => 'メールマガジンで配信するメールの送受信数に上限はありますか？', 'url' => 'support/faq/service_mail_mailmagazine_send_limit.php'),
                                            array('label' => 'お試し期間中にメールマガジン機能を利用することはできますか。', 'url' => 'support/faq/service_mail_mailmagazine_trial.php'),
                                            array('label' => '添付ファイルつきのメールは配信できますか。', 'url' => 'support/faq/service_mail_mailmagazine_attachments.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'トラブル',
                                        'url' => 'support/faq/faq_service_mail_trouble.php',
                                        'child' => array(
                                            array('label' => 'メールが送信できません。', 'url' => 'support/faq/service_mail_trouble_send.php'),
                                            array('label' => 'メールが受信できません。', 'url' => 'support/faq/service_mail_trouble_reception.php'),
                                            array('label' => 'メールボックスの容量がいっぱいで、メールが受信できません。', 'url' => 'support/faq/service_mail_trouble_not_receive.php'),
                                            array('label' => 'メールボックスの容量がいっぱいでメールが受信できなかった場合、届かなかったメールはあとから確認できますか？', 'url' => 'support/faq/service_mail_trouble_method_receive.php'),
                                            array('label' => '配信したメールマガジンの件名に[SPAM]という文字列が付与されます。', 'url' => 'support/faq/service_mail_trouble_spam.php'),
                                            array('label' => 'メールソフトでID、パスワードを求められる。', 'url' => 'support/faq/service_mail_trouble_id_desired.php'),
                                            array('label' => 'メールアカウントのパスワードがわかりません。', 'url' => 'support/faq/service_mail_trouble_not_know_password.php'),
                                            array('label' => '出張、旅行等で日本国外にきた途端メールが送信できなくなりました。', 'url' => 'support/faq/service_mail_trouble_not_send.php'),
                                            array('label' => 'メールを送信するときにコモンネーム（CN）や証明書の警告が表示されます。', 'url' => 'support/faq/service_mail_trouble_warning.php'),
                                            array('label' => '身に覚えのないメールのエラーが頻繁に戻ってくるようになりました。', 'url' => 'support/faq/service_mail_trouble_error.php'),
                                            array('label' => 'メールが受信できず、送信元に「maildir over quota」と記載されたエラーメールが届きます。', 'url' => 'support/faq/service_mail_trouble_not_receive_error.php'),
                                            array('label' => 'メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました。', 'url' => 'support/faq/service_mail_trouble_ssl_certificate.php'),
                                            array('label' => 'IMAPのごみ箱（Trashフォルダ）に移動したメールが消えました。', 'url' => 'support/faq/service_mail_trouble_imap_trash.php'),
                                            array('label' => 'WEBメールから受信メールが消えてしまいました。', 'url' => 'support/faq/service_mail_trouble_webmail_disappeared.php'),
                                            array('label' => '特定の宛先にメールが送信できず、エラーメールが送信元に届くようになりました。', 'url' => 'support/faq/service_mail_trouble_err_mail_sender.php'),
                                            array('label' => 'Gmailへメールが送信できません。', 'url' => 'support/faq/service_mail_trouble_err_mail_sender_gmail.php'),
                                            array('label' => 'メールの転送設定をしましたが、転送先に届きません。', 'url' => 'support/faq/service_mail_trouble_transfer.php'),
                                            array('label' => '大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。', 'url' => 'support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php'),
                                            array('label' => 'フィッシングメールに記載のURLにアクセスし、ログイン情報を入力してしまいました。', 'url' => 'support/faq/service_mail_trouble_phishing_mail.php'),
                                            array('label' => 'Thunderbirdで送受信ができなくなりました。', 'url' => 'support/faq/service_mail_trouble_mail_thunderbird.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'ドメインについて',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'マルチドメイン',
                                        'url' => 'support/faq/faq_domain_multi.php',
                                        'child' => array(
                                            array('label' => '日本語ドメイン（漢字などを使った独自ドメイン）は使えますか？', 'url' => 'support/faq/domain_multi_japanese.php'),
                                            array('label' => 'サーバーID.xsrv.jpではなく、取得した独自ドメインを利用したいです。', 'url' => 'support/faq/domain_multi_owndomain_use.php'),
                                            array('label' => '他社で取得したドメインを利用できますか？', 'url' => 'support/faq/domain_multi_otherservice.php'),
                                            array('label' => 'サブドメイン毎に異なるホームページを表示できますか？', 'url' => 'support/faq/domain_multi_subdomain_hp.php'),
                                            array('label' => 'マルチドメインとは、ドメインが無制限に使えるのですか？', 'url' => 'support/faq/domain_multi_infinity.php'),
                                            array('label' => '取得済みのドメイン名を変更したいです。', 'url' => 'support/faq/domain_multi_name_change.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '設定方法',
                                        'url' => 'support/faq/faq_domain_multi_setting.php',
                                        'child' => array(
                                            array('label' => 'ドメインごとに別々のホームページを表示することは可能ですか？', 'url' => 'support/faq/domain_multi_setting_per_domain_website.php'),
                                            array('label' => 'wwwありのURLを使いたいのですが、設定方法を教えてください。', 'url' => 'support/faq/domain_multi_setting_www.php'),
                                            array('label' => 'サブドメインは設定後、どれくらいで利用できるようになりますか？', 'url' => 'support/faq/domain_multi_setting_subdomain_reflect.php'),
                                            array('label' => 'ドメイン設定が「反映待ち」の状態ですが、表示が消えるまでにメールアドレスの作成などをすることは可能ですか？', 'url' => 'support/faq/domain_multi_setting_waiting.php'),
                                            array('label' => 'エックスサーバー間でドメインとサブドメインをサーバーを分けて運用することはできますか？', 'url' => 'support/faq/domain_multi_setting_subdomain_server.php'),
                                            array('label' => 'ドメイン設定後、1時間以上経過していますが「反映待ち」の表示が消えません。', 'url' => 'support/faq/domain_multi_setting_waiting_cache.php'),
                                            array('label' => '異なるサーバーIDへドメイン運用サーバーを変更したいです。', 'url' => 'support/faq/domain_multi_setting_server_change.php'),
                                            array('label' => 'ネームサーバーとは何ですか？', 'url' => 'support/faq/domain_multi_setting_what_nameserver.php'),
                                            array('label' => '「上位レジストラ変更期間中のため〜」と表示され、各種操作が行えません。', 'url' => 'support/faq/domain_multi_setting_error_registrar.php'),
                                            array('label' => 'サーバーパネルにドメイン設定をしましたが、「未取得」と表示されてしまいます。', 'url' => 'support/faq/domain_multi_setting_not_acquired.php'),
                                            array('label' => 'サーバーパネルにドメイン設定をしましたが、「NS相違」と表示されています。', 'url' => 'support/faq/domain_multi_setting_nsdifference.php'),
                                            array('label' => '他社管理会社でエックスサーバーのネームサーバーを設定したいです。 1〜5のうち、どのネームサーバーを設定すればいいですか？', 'url' => 'support/faq/domain_multi_setting_which_nameserver.php'),
                                            array('label' => '独自ドメイン永久無料特典で取得したドメインを変更できますか？', 'url' => 'support/faq/domain_multi_setting_free_change.php'),
                                            array('label' => 'サーバーパネルに新規取得したドメイン名が表示されません。どうしたらよいですか？', 'url' => 'support/faq/domain_multi_setting_error_domainname.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '新規取得',
                                        'url' => 'support/faq/faq_domain_take.php',
                                        'child' => array(
                                            array('label' => 'ドメインの取得代行はしてもらえますか？', 'url' => 'support/faq/domain_take_acting.php'),
                                            array('label' => 'ドメインを取得したのに使えません。', 'url' => 'support/faq/domain_take_not_use.php'),
                                            array('label' => '属性型JPドメインの取得料金を支払ったのに、取得が完了していません。', 'url' => 'support/faq/domain_take_attribute_done.php'),
                                            array('label' => 'ドメイン【co.jp】の取得が可能な組織種別を教えてください。', 'url' => 'support/faq/domain_take_jp_organaize.php'),
                                            array('label' => 'ドメイン【or.jp】の取得が可能な組織種別を教えてください。', 'url' => 'support/faq/domain_take_orjp_organaize.php'),
                                            array('label' => 'ドメイン【ac.jp】の取得が可能な組織種別を教えてください。', 'url' => 'support/faq/domain_take_acjp_organaize.php'),
                                            array('label' => 'ドメイン【ed.jp】の取得が可能な組織種別を教えてください。', 'url' => 'support/faq/domain_take_edjp_organaize.php'),
                                            array('label' => '独自ドメイン永久無料特典（キャンペーン特典）の申し込みができません。', 'url' => 'support/faq/domain_take_error_campaign_domain.php'),
                                            array('label' => '料金を支払った後にはドメインの申し込みキャンセルはできませんか？', 'url' => 'support/faq/domain_take_paymant_after_cancel.php'),
                                            array('label' => '「使用できない組織種別」と表示され、ドメインの取得申請ができません。', 'url' => 'support/faq/domain_take_request_error.php'),
                                            array('label' => '【.asia】を取得する際に、CEDコンタクト情報の入力や書類の提出は必要ですか？', 'url' => 'support/faq/domain_take_asia_process.php'),
                                            array('label' => '「一組織一ドメイン名違反です」と表示され、ドメインの取得申請ができません。', 'url' => 'support/faq/domain_take_1org_1domain.php'),
                                            array('label' => '組織の設立前にco.jp/or.jp/ac.jp/ed.jpを取得することはできますか？', 'url' => 'support/faq/domain_take_before_establishment.php'),
                                            array('label' => 'co.jp/or.jp/ac.jp/ed.jp/ne.jp/gr.jpなどの属性JPドメインを取得する際に、書類の提出は必要ですか？', 'url' => 'support/faq/domain_take_jp_process.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'Whois',
                                        'url' => 'support/faq/faq_domain_whois.php',
                                        'child' => array(
                                            array('label' => '取得したドメインのWhois情報を変更したいです。', 'url' => 'support/faq/domain_whois_change.php'),
                                            array('label' => 'Whois情報が他人の名義で公開されています。', 'url' => 'support/faq/domain_whois_other_name.php'),
                                            array('label' => '属性型JPドメインのWhoisを代理公開してほしいのですが、可能ですか？', 'url' => 'support/faq/domain_whois_attribute.php'),
                                            array('label' => 'Whois情報の欄に「メールアドレスの有効性が未確認です」と表示されています。', 'url' => 'support/faq/domain_whois_effectiveness.php'),
                                            array('label' => 'co.jpなど属性型JPドメインのWhois情報の変更方法を教えてください。', 'url' => 'support/faq/tool_domain_whois.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'SSLについて',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'SSL仕様',
                                        'url' => 'support/faq/faq_service_ssl.php',
                                        'child' => array(
                                            array('label' => '独自SSLは利用できますか？', 'url' => 'support/faq/ssl_spec_use.php'),
                                            array('label' => 'モバイルサイトでも独自SSLは使えますか？', 'url' => 'support/faq/ssl_spec_mobilesite.php'),
                                            array('label' => 'ワイルドカードSSLは使えますか？', 'url' => 'support/faq/ssl_spec_wild.php'),
                                            array('label' => '独自SSLで利用できるSSL通信を教えてください。', 'url' => 'support/faq/ssl_spec_communication.php'),
                                            array('label' => '独自SSLで発行される証明書の署名アルゴリズムはSHA-2ですか？', 'url' => 'support/faq/ssl_spec_sha2.php'),
                                            array('label' => '他社で購入したSSLサーバー証明書の持ち込みには対応していますか？', 'url' => 'support/faq/ssl_spec_bring.php'),
                                            array('label' => 'エックスサーバーで購入したSSLサーバー証明書を持ち出せますか？', 'url' => 'support/faq/ssl_spec_bring_out.php'),
                                            array('label' => '「独自IPアドレスあり」と「独自IPアドレスなし」の違いを教えてください。', 'url' => 'support/faq/ssl_spec_ip_sni.php'),
                                            array('label' => '初期ドメイン(xsrv.jp)で独自SSLは利用できますか。', 'url' => 'support/faq/ssl_spec_initial_domain.php'),
                                            array('label' => '「無料独自SSL」と「オプション独自SSL」の違いを教えてください。', 'url' => 'support/faq/ssl_spec_free_option.php'),
                                            array('label' => '無料独自SSLは、独自IPアドレスを利用することが可能ですか。', 'url' => 'support/faq/ssl_spec_ip_use.php'),
                                            array('label' => 'オプション独自SSLの複数年契約はできますか？', 'url' => 'support/faq/ssl_spec_multiyear_contract.php'),
                                            array('label' => '独自SSLの有効期間と契約終了日が異なります。', 'url' => 'support/faq/ssl_spec_contract_end_date.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '申込・設定方法',
                                        'url' => 'support/faq/faq_service_ssl_setting.php',
                                        'child' => array(
                                            array('label' => 'オプション独自SSLを契約したいが、コモンネームをwwwあり・なしどちらでも利用したい。', 'url' => 'support/faq/ssl_setting_2way.php'),
                                            array('label' => 'コモンネームの文字数に制限はありますか？', 'url' => 'support/faq/ssl_setting_name_limit.php'),
                                            array('label' => '独自SSLの発行が完了しました。SSLページを利用するにはどうすればよいですか？', 'url' => 'support/faq/ssl_setting_issue_finish.php'),
                                            array('label' => 'SSL用のホームページデータはどこにアップロードすればよいですか？', 'url' => 'support/faq/ssl_setting_upload.php'),
                                            array('label' => 'SSLページが表示されず、「無効なURLです。プログラム設定の反映待ちである可能性があります。しばらく時間をおいて再度アクセスをお試しください。」と表示されます。', 'url' => 'support/faq/ssl_setting_not_exist.php'),
                                            array('label' => 'SSLページへのアクセスで鍵マークが正常に表示されません。鍵マークをクリックすると「このページには安全でない他のリソースが含まれています。」と表示されます。', 'url' => 'support/faq/ssl_setting_keymark_not_display.php'),
                                            array('label' => '「独自IPアドレスあり」で、「www」ありのコモンネームで独自SSLを申し込みました。「www」なしのアドレスでSSLページへアクセスするにはどうすればよいですか？', 'url' => 'support/faq/ssl_setting_ip_www.php'),
                                            array('label' => 'SSL証明書のサーバーへのインストールなど、独自SSLを利用するための設定作業は必要ですか。', 'url' => 'support/faq/ssl_setting_operation.php'),
                                            array('label' => 'インストール済みの独自SSLを削除(アンインストール)することはできますか？', 'url' => 'support/faq/ssl_setting_uninstall.php'),
                                            array('label' => 'オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？', 'url' => 'support/faq/ssl_setting_otherserver.php'),
                                            array('label' => '「SSLサーバー証明書(コモンネーム名) 更新未完了のお知らせ」という件名のメールが届きました。', 'url' => 'support/faq/ssl_setting_incomplete.php'),
                                            array('label' => 'オプション独自SSLのメール認証で承認メールの受信ができません。再送できますか？', 'url' => 'support/faq/ssl_setting_resend_email.php'),
                                            array('label' => '無料独自SSLの自動更新が失敗し、手動更新もできません。', 'url' => 'support/faq/ssl_setting_update_failed.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '他社サービスからの移転について',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'サーバー移転',
                                        'url' => 'support/faq/faq_transfer_server.php',
                                        'child' => array(
                                            array('label' => '他社からサーバーを乗り換える際の手順を教えてください。', 'url' => 'support/faq/transfer_server_what.php'),
                                            array('label' => 'サーバー移転の際に、Webサイトの表示やメールの送受信が停止することはありますか？', 'url' => 'support/faq/transfer_server_down.php'),
                                            array('label' => 'サーバー移転の際に、事前に独自SSLを設定しておくことは可能ですか？', 'url' => 'support/faq/transfer_server_prior.php'),
                                            array('label' => 'サーバー移転にかかる日数の目安はどれぐらいですか？', 'url' => 'support/faq/transfer_server_time.php'),
                                            array('label' => 'サーバー移転中のメールの受信方法はどうすればいいでしょうか？', 'url' => 'support/faq/transfer_server_incoming_mail.php'),
                                            array('label' => 'ネームサーバーを切り替える前に動作確認する方法を教えてください。', 'url' => 'support/faq/transfer_server_checkurl.php'),
                                            array('label' => '移転作業を代行していただくことはできますか？', 'url' => 'support/faq/transfer_server_daiko.php'),
                                            array('label' => 'サーバー移転の際に、移転元サーバーから過去の受信メールは引き継げますか？', 'url' => 'support/faq/transfer_server_received_mail.php'),
                                            array('label' => 'サーバー移転の際に、代行サービスにて対応可能な作業を教えてください。', 'url' => 'support/faq/transfer_server_setting_service.php'),
                                            array('label' => 'サーバー移転とドメイン移管をする場合、どちらを先に行えばよいですか？', 'url' => 'support/faq/transfer_server_domain.php'),
                                            array('label' => 'サーバー移転の際に、移転元サーバーはいつごろ解約したらいいですか？', 'url' => 'support/faq/transfer_server_cancel_contract.php'),
                                            array('label' => 'サーバー移転の際に、ネームサーバーを変更すると、どれくらいで反映しますか？', 'url' => 'support/faq/transfer_server_name_how_long.php'),
                                            array('label' => 'サーバー移転中にドメイン設定をすることで、移転元のWebサイトに影響がでることはありませんか？', 'url' => 'support/faq/transfer_server_source_website.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'ドメイン移管',
                                        'url' => 'support/faq/faq_transfer_domain.php',
                                        'child' => array(
                                            array('label' => 'XServerドメインへ移管が可能なドメインの種類を教えてください。', 'url' => 'support/faq/transfer_domain_types.php'),
                                            array('label' => 'ドメイン移管の際に、移管料金の他に費用はかかりますか？', 'url' => 'support/faq/transfer_domain_cost.php'),
                                            array('label' => 'ドメインを他社へ移管するにはどうすればいいですか？', 'url' => 'support/faq/transfer_domain_other.php'),
                                            array('label' => 'ドメインを移管したいのですが、運用しているWebサイトやメールに影響はありますか？', 'url' => 'support/faq/transfer_domain_web_mail.php'),
                                            array('label' => '独自ドメイン永久無料特典が適用されたドメインを他社へ移管する方法を教えてください。', 'url' => 'support/faq/transfer_domain_permanent_free.php'),
                                            array('label' => '他社からエックスサーバーへの移管が失敗してしまいます。', 'url' => 'support/faq/transfer_domain_failure.php'),
                                            array('label' => 'ドメインの移管申請時に、誤った認証鍵を入力してしまいました。どうしたらよいでしょうか？', 'url' => 'support/faq/transfer_domain_auth_mistake.php'),
                                            array('label' => '移管申請に必要な移管承認メールが到着しません。', 'url' => 'support/faq/transfer_domain_incoming_mail.php'),
                                            array('label' => '移管承認メールを誤って破棄してしまいました。再送はできますか？', 'url' => 'support/faq/transfer_domain_mistake_discard.php'),
                                            array('label' => 'ドメイン移管の手続きにかかる日数を教えてください。', 'url' => 'support/faq/transfer_domain_howmany_days.php'),
                                            array('label' => 'ドメイン移管の際に、独自ドメイン永久無料特典を利用する方法を教えてください。', 'url' => 'support/faq/transfer_domain_present.php'),
                                            array('label' => 'ドメイン移管は「サーバー移転代行」で対応していますか？', 'url' => 'support/faq/transfer_domain_daiko.php'),
                                            array('label' => 'ドメイン移管の際に、ネームサーバーなどDNSは変更されますか？', 'url' => 'support/faq/transfer_domain_dns_change.php'),
                                            array('label' => 'ドメイン移管の際に、ドメインの利用期限はどうなりますか？', 'url' => 'support/faq/transfer_domain_expiration_date.php'),
                                            array('label' => 'XServerドメインにドメイン移管が完了した後、必要な作業はありますか？', 'url' => 'support/faq/transfer_domain_work_required.php'),
                                            array('label' => '他社からXServerドメインへ移管する際の移管承認メールは、どのメールアドレスに届きますか？', 'url' => 'support/faq/transfer_domain_which_mail.php'),
                                            array('label' => '他社からXServerドメインへ移管をすると、Whois情報はどうなりますか？', 'url' => 'support/faq/transfer_domain_whois.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'サーバー仕様',
                                'url' => 'support/faq/faq_service_server.php',
                                'child' => array(
                                    array('label' => 'サーバーのOSは何ですか？', 'url' => 'support/faq/service_server_os.php'),
                                    array('label' => 'サーバーのスペックを教えてください。', 'url' => 'support/faq/service_server_spec.php'),
                                    array('label' => 'サーバー（データセンター）はどこにありますか？', 'url' => 'support/faq/service_server_datacenter.php'),
                                    array('label' => 'バックアップ体制はどうなっていますか？', 'url' => 'support/faq/service_server_backup.php'),
                                    array('label' => '障害などでサーバーが止まることはどれくらいの頻度でありますか？', 'url' => 'support/faq/service_server_stop.php'),
                                    array('label' => '転送量課金はなしとありますが、転送量がどれだけ増えてもいいのですか？', 'url' => 'support/faq/service_server_transfer_amount.php'),
                                    array('label' => 'ネームサーバーとは何ですか？', 'url' => 'support/faq/service_server_name_server.php'),
                                    array('label' => 'Cronは使用できますか？', 'url' => 'support/faq/service_server_cron.php'),
                                    array('label' => 'SSHは使えますか？', 'url' => 'support/faq/service_server_ssh.php'),
                                    array('label' => 'telnetは使えますか？', 'url' => 'support/faq/service_server_telnet.php'),
                                    array('label' => '.htaccessは利用できますか？', 'url' => 'support/faq/service_server_htaccess.php'),
                                    array('label' => 'mod_rewriteは使えますか？', 'url' => 'support/faq/service_server_mod_rewrite.php'),
                                    array('label' => '利用しているサーバーの番号はどこで確認できますか？', 'url' => 'support/faq/service_server_number.php'),
                                    array('label' => '外部プログラムの導入は可能ですか？', 'url' => 'support/faq/service_server_program_introduction.php'),
                                ),
                            ),
                            array(
                                'label' => '管理ツールについて',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'XServerアカウント',
                                        'url' => 'support/faq/faq_tool_info.php',
                                        'child' => array(
                                            array('label' => 'XServerアカウントIDを確認したい。', 'url' => 'support/faq/service_missing_member_id.php'),
                                            array('label' => 'XServerアカウントにログインできません。', 'url' => 'support/faq/tool_info_login.php'),
                                            array('label' => 'ログインボタンを押しても反応がありません。', 'url' => 'support/faq/tool_info_login_javascript.php'),
                                            array('label' => 'XServerアカウントのパスワードが分かりません。', 'url' => 'support/faq/service_missing_infopanel_password.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'サーバーパネル',
                                        'url' => 'support/faq/faq_tool_server.php',
                                        'child' => array(
                                            array('label' => 'サーバーパネルのパスワードを忘れてしまいました。', 'url' => 'support/faq/service_missing_serverpanel_password.php'),
                                            array('label' => 'サーバーパネルにログインできません。', 'url' => 'support/faq/tool_server_login.php'),
                                            array('label' => 'IDやパスワードを入力しているのにログインが行えません。', 'url' => 'support/faq/tool_server_login_error.php'),
                                            array('label' => '設定対象ドメインとは何ですか？', 'url' => 'support/faq/tool_server_settingdomain.php'),
                                            array('label' => 'Cronの設定方法を教えてください。', 'url' => 'support/faq/tool_server_setting_cron.php'),
                                            array('label' => 'アクセス解析の設定は可能ですか？', 'url' => 'support/faq/tool_server_access_setting.php'),
                                            array('label' => 'アクセス解析の用語の意味がわかりません。', 'url' => 'support/faq/tool_server_access_term.php'),
                                            array('label' => 'アクセス解析で「検索キーワード別」が件数取得ができません。', 'url' => 'support/faq/tool_server_access_referrer.php'),
                                            array('label' => 'ログインボタンを押しても反応がありません。', 'url' => 'support/faq/tool_server_login_javascript.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '禁止事項について',
                                'url' => 'support/faq/faq_dont.php',
                                'child' => array(
                                    array('label' => 'ホームページ作成会社です。有償でクライアントにスペースを貸してもいいですか？', 'url' => 'support/faq/dont_rental.php'),
                                    array('label' => '再販は可能ですか？', 'url' => 'support/faq/dont_resale.php'),
                                    array('label' => 'コンテンツに関して制限はありますか？', 'url' => 'support/faq/dont_contents_stint.php'),
                                    array('label' => '設置するCGIに制限はありますか？', 'url' => 'support/faq/dont_cgi_stint.php'),
                                ),
                            ),
                            array(
                                'label' => 'サポートについて',
                                'url' => 'support/faq/faq_support.php',
                                'child' => array(
                                    array('label' => 'サポート体制はどのようになっていますか？', 'url' => 'support/faq/support_system.php'),
                                    array('label' => 'どこまでサポートして貰えますか？', 'url' => 'support/faq/support_where.php'),
                                    array('label' => 'SEOやGoogle Search Console（サーチコンソール）に関するサポートはしてもらえますか？', 'url' => 'support/faq/support_seo.php'),
                                    array('label' => 'サポートへの電話番号を教えてください。', 'url' => 'support/faq/support_tel.php'),
                                    array('label' => 'セキュリティ対策はどうなっていますか？', 'url' => 'support/faq/support_security.php'),
                                    array('label' => 'XServerアカウントIDがわかりませんが、契約内容を確認したいです。', 'url' => 'support/faq/support_id.php'),
                                    array('label' => 'ホームページの制作はしてもらえるのですか？', 'url' => 'support/faq/support_homepage.php'),
                                    array('label' => 'サポートへメールでお問い合わせをした場合、どれぐらいで返信されますか？', 'url' => 'support/faq/support_mail.php'),
                                ),
                            ),
                            array(
                                'label' => '設定おまかせサポートについて',
                                'url' => 'support/faq/faq_support_daiko.php',
                                'child' => array(
                                    array('label' => '「設定おまかせサポート」の利用方法を教えてください。', 'url' => 'support/faq/support_daiko_application.php'),
                                    array('label' => '「設定おまかせサポート」で依頼が可能な作業内容を教えてほしい。', 'url' => 'support/faq/support_daiko_list.php'),
                                    array('label' => '「設定おまかせサポート」で対応完了までにかかる時間を教えてください。', 'url' => 'support/faq/support_daiko_duration.php'),
                                    array('label' => 'メールアカウント、FTPアカウントの発行を依頼した場合のパスワード情報の確認方法を教えてください。', 'url' => 'support/faq/support_daiko_password.php'),
                                ),
                            ),
                                array(
                                    'label' => 'サーバー移転代行について',
                                    'url' => 'support/faq/faq_support_server_daiko.php',
                                    'child' => array(
                                        array('label' => 'サーバー移転代行で複数のWebサイトの移転作業を依頼することはできますか？', 'url' => 'support/faq/support_server_daiko_multiple.php'),
                                        array('label' => 'サーバー移転代行の申し込み時に必要な情報を教えてください。', 'url' => 'support/faq/support_server_daiko_information.php'),
                                        array('label' => 'サーバー移転作業において、移転元サーバーへのアクセス方法を教えてください。', 'url' => 'support/faq/support_server_daiko_access.php'),
                                        array('label' => 'サーバー移転代行で移転されるデータを教えてください。', 'url' => 'support/faq/support_server_daiko_data.php'),
                                        array('label' => '移転元のサイトでSSL（https）を有効にしている場合、サーバー移転代行を依頼した際にSSLは設定されますか？', 'url' => 'support/faq/support_server_daiko_ssl.php'),
                                        array('label' => 'エックスサーバー間のサーバー移転で「サーバー移転代行」は利用できますか？', 'url' => 'support/faq/support_server_daiko_transfer.php'),
                                    ),
                                ),
                            ),
                        ),
                        array('label' => '障害・メンテナンス情報', 'url' => 'support/information.php'),
                        array('label' => '障害・メンテナンス情報一覧', 'url' => 'support/history.php'),
                        array('label' => 'ニュース', 'url' => 'support/news.php'),
                    )
                ),
                array('label' => 'XServerアカウント', 'url' => 'login_info.php'),
                array('label' => 'サーバーパネル', 'url' => 'login_server.php'),
                array('label' => 'ファイルマネージャ', 'url' => 'login_file.php'),
                array('label' => '旧ファイルマネージャ', 'url' => 'login_file_old.php'),
                array('label' => 'WEBメール', 'url' => 'login_mail.php'),
                array('label' => 'プライバシーポリシー', 'url' => 'privacy.php'),
                array('label' => '個人情報の取り扱いについて', 'url' => 'privacy_announcement.php'),
                array('label' => '外国への第三者提供一覧', 'url' => 'privacy_third_party.php'),
                array('label' => '当サイトのご利用について', 'url' => 'sitepolicy.php'),
                array('label' => '利用規約', 'url' => 'rule/rule.php',
                    'child' => array(
                        array('label' => 'ドメイン取得サービス（エックスサーバー）', 'url' => 'rule/rule_olddomain.php'),
                    ),
                ),
                array('label' => 'AIチャット利用の注意事項', 'url' => 'rule/rule_aichat.php'),
                array('label' => 'WordPressテーマ利用規約', 'url' => 'rule_wptheme.php'),
                array('label' => 'サイトマップ', 'url' => 'sitemap.php'),
                array('label' => '会社概要', 'url' => 'company.php'),
                array('label' => 'ご意見・ご要望フォーム', 'url' => 'opinion/index.php'),
                array('label' => 'キャッシュレス・ポイント還元事業', 'url' => 'cashless.php'),
                array('label' => 'お友達紹介プログラム', 'url' => 'friend.php'),
                array('label' => 'アフィリエイト', 'url' => 'affiliate.php'),
                array('label' => '大口契約のご相談', 'url' => 'largecontracts.php'),
                array(
                    'label' => '法人',
                    'child' => array(
                        array('label' => '大口契約のご相談', 'url' => 'largecontracts.php'),
                    ),
                ),
            ),
        );

        function arrays_search($needle, $ary) {
            $exist = false;
            if (is_array($ary)) {
                $keys = array_keys($ary);
                for ($i = 0; $i < count($keys); ++$i) {
                    if (is_array($ary[$keys[$i]])) {
                        if (arrays_search($needle, $ary[$keys[$i]])) {
                            $exist = true;
                            break;
                        }
                    } else {
                        if ($needle === $ary[$keys[$i]]) {
                            $exist = true;
                            break;
                        }
                    }
                }
            }
            return $exist;
        }
        function make_path_array($url, $ary) {
            $new_ary = array();

            for ($i = 0; $i < count($ary); $i++) {
                $l = $ary[$i];

                if (arrays_search($url, $l)) {
                    $a = array(
                        'label' => $l['label'],
                        'url' => $l['url']
                    );
                    if (isset($l['child']) && arrays_search($url, $l['child'])) {
                        $a['child'] = make_path_array($url, $l['child']);
                    }
                    $new_ary = $a;
                }
            }

            return $new_ary;
        }
        function make_html_list($site_url, $path_ary) {
            $html_string = '';

            if (isset($path_ary['child'])) {
                if (!$path_ary['url']) {
                    $html_string .= '<li>';
                    $html_string .= '<span>' . $path_ary['label'] . '</span>';
                    $html_string .= '<i class="ico ico_chevron-right"></i>';
                    $html_string .= '</li>';
                } else {
                    $html_string .= '<li>';
                    $html_string .= '<a href="' . $site_url . $path_ary['url'] . '">';
                    $html_string .= '<span>' . $path_ary['label'] . '</span>';
                    $html_string .= '</a>';
                    $html_string .= '<i class="ico ico_chevron-right"></i>';
                    $html_string .= '</li>';
                }
                $html_string .= make_html_list($site_url, $path_ary['child']);
            } else {
                $html_string .= '<li>';
                $html_string .= '<span class="is-current">' . $path_ary['label'] . '</span>';
                $html_string .= '</li>';
            }

            return $html_string;
        }
        function make_json_list($site_url, $path_ary) {
            $json_string='';

            static $pos_cnt=0;
            $pos_cnt++;

            if (isset($path_ary['child'])) {
                $json_string .= '{';
                $json_string .= '"@type":"ListItem","position":'.$pos_cnt.',"name":"'.addslashes($path_ary['label']).'","item":"'.$site_url.$path_ary['url'].'"';
                $json_string .= '},';
                $json_string .= make_json_list($site_url, $path_ary['child']);
            } else {
                $json_string .= '{';
                $json_string .= '"@type": "ListItem","position":'.$pos_cnt.',"name":"'.addslashes($path_ary['label']).'","item": "'.$site_url.$path_ary['url'].'"';
                $json_string .= '}';
            }

            return $json_string;
        }

        if (substr($site_url, strlen($site_url) - 1, 1) !== '/') {
            $site_url .= '/';
        }

        $scheme = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
        $real_path = $scheme . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $file_path = explode($site_url, $real_path);
        $file_path = $file_path[1];

        $path_ary = make_path_array($file_path, array($PAGE_LIST));
        $html_string;
        $html_string = '';
        $json_string;
        $json_string = '';
        if ($path_ary) {
            $html_string .= '<div class="topic-path clearfix">';
            $html_string .= '<ol>' . make_html_list($site_url, $path_ary) . '</ol>';
            $html_string .= '</div>';
            $json_string .= '<script type="application/ld+json">{"@context":"https://schema.org","@type": "BreadcrumbList",';
            $json_string .= '"itemListElement": ['.make_json_list($site_url, $path_ary).']';
            $json_string .= '}</script>';
        }
        return array($json_string,$html_string);
    }
    public function outputType($type){
        static $cnt;
        static $output;
        if($cnt == 0){
            $output = $this -> make_topicpath();
            $cnt++;
        }
        if($type == "json"){
            return $output[0];
        }else if($type == "html"){
            return $output[1];
        }
        return false;
    }
}
$topicPath = new TopicPath($SITE_URL);
echo $topicPath->outputType(json);
?>