<?php
/* ========================================================== 

マニュアルページ： サイドメニュー用PHP

-------------------------------------------------------------

$sidenav_list にカテゴリ別のリンク情報を格納し、
記述(挿入)した順番でサイドメニューとして表示します。
(カテゴリの順番を変える場合は最下部のHTMLを編集してください)
一部を除き、その他ページ用の sidemenu.php も使用方法は同じです。

-------------------------------------------------------------

1個のリンク情報は下記のような配列で構成されています。

array( 'label' => 'ページ名', 'filename' => 'dir/url.php' )

label: ページ名。リンクテキストに使われます
filename: サイトルートから見た対象ファイルの相対パス
　　　　　　複数のファイルでカレント表示を行いたい際は配列で指定してください
　　　　　　※リンク先は配列の最初のアイテムとなります
　　　　　　※配列による指定はマニュアル用のsidemenu.phpのみの仕様です

リンク情報の中でさらにサブカテゴリを表現したい場合は、
sub という名前で新たにリンク情報を持つ配列を挿入してください。

array(
    'label' => 'ページ名',
    'filename' => 'dir/url.php',
    'sub' => array(
        array( 'label' => 'ページ名', 'filename' => 'dir/url.php' ),
        array( 'label' => 'ページ名', 'filename' => 'dir/url.php' ),
        ...
    ),
),

その際、親側にリンクが必要がなければ filename を削除してください。

array(
    'label' => 'ページ名',
    'sub' => array(
        array( 'label' => 'ページ名', 'filename' => 'dir/url.php' ),
        array( 'label' => 'ページ名', 'filename' => 'dir/url.php' ),
        ...
    ),
),

同じページへのリンクが二箇所以上ある場合など、カレント表示の対象から
外したい場合は ignore を true に設定してください。

array( 'label' => 'ページ名', 'filename' => 'dir/url.php', ignore => true )

「ビジネスプラン」アイコンあり → 'biz' => true

============================================================ */


$sidenav_list = array(
    /* ----------------------------------------------------------
        お申し込みについて
    ------------------------------------------------------------- */
    'order' => array(
        array(
            'label' => '各種お申し込み',
            'sub' => array(
                array( 'label' => 'サーバーのお申し込み', 'filename' => 'order/index.php' ),
                array(
                    'label' => 'オプション独自SSLのお申し込み',
                    'filename' => array(
                        'manual/man_order_ssl.php',
                        'manual/man_order_ssl_domain.php',
                        'manual/man_order_ssl_ov.php',
                        'manual/man_order_ssl_ev.php',
                        'manual/man_order_ssl_duns.php'
                    )
                ),
//                array( 'label' => '高性能メールフィルタの有料オプション', 'filename' => 'manual/man_order_cloudmark.php' ),
                array( 'label' => '設定おまかせサポート', 'filename' => 'manual/man_order_daiko.php' ),
                array( 'label' => 'サーバー移転代行', 'filename' => 'manual/man_order_server_daiko.php' ),
                array( 'label' => '独自ドメイン永久無料特典', 'filename' => 'manual/man_order_present_domain.php' ),
                array( 'label' => '独自ドメイン永久無料特典（キャンペーン特典）', 'filename' => 'manual/man_order_campaign_domain.php' ),
                array( 'label' => '独自ドメイン1年無料特典', 'filename' => 'manual/man_order_oneyear_domain.php' ),
                array( 'label' => 'キャッシュバック特典', 'filename' => 'manual/man_order_campaign_cashback.php' ),
				array( 'label' => 'お友達紹介プログラム', 'filename' => 'manual/man_order_refer_friend_program.php' ),
                array( 'label' => 'プランの変更', 'filename' => 'manual/man_order_change_plan.php' ),
                array(
                    'label' => 'XServerビジネスへの変更',
                    'filename' => 'manual/man_order_servicetransfer_intro.php',
                    'sub' => array(
                        array( 'label' => 'ご利用手順', 'filename' => 'manual/man_order_servicetransfer_flow.php' ),
                        array( 'label' => '仕様詳細', 'filename' => 'manual/man_order_servicetransfer_detail.php' ),
                    )
                ),
				array(
            'label' => '新サーバー簡単移行',
            'filename' => 'manual/man_order_servertransfer_intro.php',
            'sub' => array(
                array( 'label' => 'ご利用手順', 'filename' => 'manual/man_order_servertransfer_flow.php' ),
                array( 'label' => '仕様詳細', 'filename' => 'manual/man_order_servertransfer_detail.php' ),
            )
        ),
            )
        ),
        array(
            'label' => 'お支払について',
            'sub' => array(
                array( 'label' => '料金のお支払い', 'filename' => 'manual/man_order_pay_etc.php' ),
                array( 'label' => 'コンビニエンスストア払い', 'filename' => 'manual/man_order_pay_method_convenient.php' ),
                array( 'label' => 'クレジットカード決済', 'filename' => 'manual/man_order_pay_method_credit.php' ),
                array( 'label' => '銀行振り込み', 'filename' => 'manual/man_order_pay_method_bank.php' ),
                array( 'label' => 'ペイジー決済', 'filename' => 'manual/man_order_pay_method_pay_easy.php' ),
                array( 'label' => 'あと払い（ペイディ）決済', 'filename' => 'manual/man_order_pay_method_paidy.php' ),
                array( 'label' => 'プリペイド決済', 'filename' => 'manual/man_order_pay_method_prepaid.php' ),
                array(
                    'label' => '自動更新設定', 'filename' => 'manual/man_order_pay_method_autopay.php',
                    'sub' => array(
                        array( 'label' => 'クレジットカードによる自動更新', 'filename' => 'manual/man_order_pay_method_autopay_credit.php' ),
                        array( 'label' => 'あと払い（ペイディ）による自動更新', 'filename' => 'manual/man_order_pay_method_autopay_paidy.php' ),
                        array( 'label' => 'プリペイドによる自動更新', 'filename' => 'manual/man_order_pay_method_autopay_prepaid.php' ),
                    ),
                ),
                array( 'label' => '自動更新が失敗した場合の再設定', 'filename' => 'manual/man_order_pay_method_autopay_resetting.php' ),
                array( 'label' => 'お支払い報告', 'filename' => 'manual/man_order_pay_report.php' ),
                array( 'label' => 'お支払い履歴', 'filename' => 'manual/man_order_pay_history.php' ),
                array( 'label' => '請求書・受領書・見積書', 'filename' => 'manual/man_order_pay_bill.php' ),
            )
        ),
        array( 'label' => 'サービスお申し込み', 'filename' => 'manual/man_order_addition.php' ),
        array( 'label' => '各種IDについて', 'filename' => 'manual/man_order_about_id.php' ),
        array( 'label' => '登録情報について', 'filename' => 'manual/man_order_change_id.php' ),
        array( 'label' => 'アカウント・契約の統合', 'filename' => 'manual/man_order_user_merge.php' ),
        array( 'label' => '各種パスワードの再設定', 'filename' => 'manual/man_order_reissue.php' ),
		array( 'label' => 'オプション独自SSLの再発行', 'filename' => 'manual/man_order_sslreissue.php'),
		array( 'label' => '二段階認証設定', 'filename' => 'manual/man_order_twostepauth.php'),
        array( 'label' => '不審なログイン時の認証', 'filename' => 'manual/man_order_loginsecurity.php'),
        array( 'label' => '無料お試し期間について', 'filename' => 'manual/man_order_free_trial.php' ),
        array( 'label' => '申し込みの取り消し', 'filename' => 'manual/man_order_cancel.php' ),
        array( 'label' => '解約', 'filename' => 'manual/man_order_quit.php' ),
        array(
            'label' => '契約名義について',
            'sub' => array(
                array( 'label' => '第三者にご契約を譲渡する場合', 'filename' => 'manual/man_order_transfer_usage_rights.php' ),
                array( 'label' => 'ご契約名義を変更する場合', 'filename' => 'manual/man_order_name_change.php' ),
                array( 'label' => 'ドメインの譲渡をする場合', 'filename' => 'manual/man_order_domain_transfer.php' ),
            ),
        ),
    ),
    
    /* ----------------------------------------------------------
       ドメインについて
    ------------------------------------------------------------- */
    'domain' => array(
        array( 'label' => '仕様一覧', 'filename' => 'manual/man_domain_spec.php' ),
        array( 'label' => 'ドメインの移管について', 'filename' => 'manual/man_domain_transfer.php' ),
        array( 'label' => '失効ドメイン復旧', 'filename' => 'manual/man_domain_how_to_recovery.php' ),
        array( 'label' => 'ドメイン設定', 'filename' => 'manual/man_domain_setting.php' ),
        array( 'label' => 'ドメインの初期化', 'filename' => 'manual/man_domain_reset.php' ),
        array( 'label' => 'サブドメイン設定', 'filename' => 'manual/man_domain_subdomain_setting.php' ),
        array( 'label' => 'ドメイン認証', 'filename' => 'manual/man_domain_authenticate.php' ),
        array( 'label' => '動作確認について', 'filename' => 'manual/man_domain_checkproxy.php' ),
        array( 'label' => 'ネームサーバーの設定', 'filename' => 'manual/man_domain_namesever_setting.php' ),
        array( 'label' => 'DNSレコードの編集', 'filename' => 'manual/man_domain_dns_setting.php' ),
        array(
            'label' => 'Whois情報',
            'filename' => 'manual/man_domain_whois.php',
            'sub' => array(
                array( 'label' => 'Whoisについて', 'filename' => 'manual/man_domain_about_whois.php' ),
                array( 'label' => 'Whois情報設定', 'filename' => 'manual/man_member_setting_whois.php' ),
            )
        ),
        array( 'label' => 'レジストラロック', 'filename' => 'manual/man_domain_register_lock.php' ),
        array( 'label' => '認証鍵', 'filename' => 'manual/man_domain_auth_key.php' ),
    ),
    
    /* ----------------------------------------------------------
       サーバーについて
    ------------------------------------------------------------- */
    'server' => array(
        array( 'label' => '仕様一覧', 'filename' => 'manual/man_server_spec.php' ),
        array( 'label' => '初期フォルダについて', 'filename' => 'manual/man_server_folder.php' ),
        array( 'label' => '無料独自SSL設定', 'filename' => 'manual/man_server_ssl.php' ),
        array( 'label' => 'nginxについて', 'filename' => 'manual/man_server_nginx.php' ),
        array( 'label' => 'HTTP/2について', 'filename' => 'manual/man_server_http2.php' ),
        array( 'label' => 'アクセス制限', 'filename' => 'manual/man_server_limit.php' ),
        array(
            'label' => '.htaccess',
            'filename' => 'manual/man_server_htaccess.php',
            'sub' => array(
                array( 'label' => 'Webサイトの常時SSL化', 'filename' => 'manual/man_server_fullssl.php' ),
                array( 'label' => 'モバイル向けサイトの振り分け方', 'filename' => 'manual/man_server_mobby.php' ),
            )
        ),
        array( 'label' => 'パーミッション', 'filename' => 'manual/man_server_permission.php' ),
        array( 'label' => 'エラーページ設定', 'filename' => 'manual/man_server_errorpage.php' ),
        array( 'label' => '各種エラーメッセージ', 'filename' => 'manual/man_server_error.php' ),
        array( 'label' => 'MIME設定', 'filename' => 'manual/man_server_mime.php' ),
        array(
            'label' => 'php.ini設定について',
            'filename' => 'manual/man_server_phpini_edit.php',
            'sub' => array(
                array( 'label' => 'php.ini設定で設定可能な項目', 'filename' => 'manual/man_server_phpini_setting_item.php' ),
                array( 'label' => 'XアクセラレータVer.2利用時に無効となるphp.ini設定について', 'filename' => 'manual/man_server_phpini_setting_ignore_item.php' ),
            )
        ),
        array(
            'label' => 'PHPの高速化について',
            'filename' => array('manual/man_server_php_rapid.php','manual/man_server_php_rapid_oldspec.php'),
            'sub' => array(
                array( 'label' => 'FastCGIについて', 'filename' => 'manual/man_server_php_fastcgi.php' ),
                array( 'label' => 'APC/OPcacheについて', 'filename' => 'manual/man_server_php_apc.php' ),
                array( 'label' => 'JITについて', 'filename' => 'manual/man_server_php_jit.php' ),
            )
        ),
        array(
            'label' => 'Webフォント設定について',
            'sub' => array(
                array( 'label' => 'WordPressプラグインでのご利用', 'filename' => 'manual/man_server_webfont_wp.php' ),
                array( 'label' => 'HTML記述形式でのご利用', 'filename' => 'manual/man_server_webfont_html.php' ),
            )
        ),
        array( 'label' => 'Xアクセラレータ(エックスアクセラレータ)', 'filename' => 'manual/man_server_xaccelerator.php' ),
        array( 'label' => 'XPageSpeed設定について', 'filename' => 'manual/man_server_xpagespeed.php' ),
        array( 'label' => 'mod_pagespeed設定について', 'filename' => 'manual/man_server_mod_pagespeed.php' ),
        array( 'label' => 'サーバーキャッシュ設定', 'filename' => 'manual/man_server_cache.php' ),
        array( 'label' => 'ブラウザキャッシュ設定', 'filename' => 'manual/man_server_expires.php' ),
        array( 'label' => 'サイト転送設定', 'filename' => 'manual/man_server_transfer.php' ),
        array( 'label' => 'アクセス拒否設定', 'filename' => 'manual/man_server_ipcheck.php' ),
        array( 'label' => 'アクセス解析', 'filename' => 'manual/man_server_analyzer.php' ),
        array(
            'label' => 'アクセスログ',
            'filename' => array(
                'manual/man_server_log.php',
                'manual/man_server_log_oldspec.php'
            )
        ),
		array( 'label' => 'エラーログ', 'filename' => 'manual/man_server_logerror.php' ),
        array( 'label' => 'Maildirについて', 'filename' => 'manual/man_server_maildir.php' ),
        array( 'label' => 'SSH設定', 'filename' => 'manual/man_server_ssh.php' ),
        array( 'label' => 'SSHソフトの設定(Tera Term)', 'filename' => 'manual/man_server_ssh_connect_tera.php' ),
        array( 'label' => 'WordPressセキュリティ設定', 'filename' => 'manual/man_server_wpsecurity.php' ),
        array( 'label' => 'WordPressリカバリー', 'filename' => 'manual/man_server_wprecovery.php' ),
        array( 'label' => 'WAF設定', 'filename' => 'manual/man_server_waf.php' ),
        array( 'label' => 'ads.txt', 'filename' => 'manual/man_server_ads.php' ),
        array( 'label' => '自動バックアップからのデータ取得', 'filename' => 'manual/man_server_download.php' ),
        array( 'label' => '自動バックアップからのデータ復元', 'filename' => 'manual/man_server_restore.php' ),
        array( 'label' => 'リソースモニター', 'filename' => 'manual/man_server_resource_information.php' ),
        array( 'label' => 'Web改ざん検知設定', 'filename' => 'manual/man_server_security_scan.php', 'biz' => true ),
        array( 'label' => '管理者ユーザー設定', 'filename' => 'manual/man_server_adminuser.php', 'biz' => true ),
    ),
    
    /* ----------------------------------------------------------
       サーバープログラムについて
    ------------------------------------------------------------- */
    'program' => array(
        array(
            'label' => 'プログラム言語・コマンドパス',
            'filename' => array(
                'manual/man_program_soft.php',
                'manual/man_program_soft_oldspec.php'
            )
        ),
        array( 'label' => 'CGI・SSI・PHP', 'filename' => 'manual/man_program_cgi.php' ),
        array( 'label' => 'Cron設定', 'filename' => 'manual/man_program_cron.php' ),
        array(
            'label' => 'PHPのバージョンについて',
            'filename' => array(
                'manual/man_program_php_ver.php',
                'manual/man_program_php_ver_oldspec.php'
            )
        )
    ),
    
    /* ----------------------------------------------------------
       インストールについて
    ------------------------------------------------------------- */
    'install' => array(
        array(
            'label' => '動作確認済みプログラム',
            'filename' => array(
                'manual/man_install_outside_program.php',
                'manual/man_install_outside_program_oldspec.php'
            )
        ),
        array(
            'label' => '簡単インストール',
            'filename' => 'manual/man_install_auto.php',
            'sub' => array(
			    array( 'label' => 'WordPress 日本語版', 'filename' => 'manual/man_install_auto_word.php' ),
				array( 'label' => 'EC-CUBE 4', 'filename' => 'manual/man_install_auto_ec4.php' ),
                array( 'label' => 'PukiWiki', 'filename' => 'manual/man_install_auto_puki.php' ),
            )
        ),
		array(
            'label' => '手動インストール',
            'sub' => array(
				array( 'label' => 'WordPress 日本語版', 'filename' => 'manual/man_install_word.php' ),
				array( 'label' => 'Zen Cart', 'filename' => 'manual/man_install_zen.php' ),
				array( 'label' => 'Magento2', 'filename' => 'manual/man_install_magento.php' ),
            )
        ),
        array(
            'label' => 'サイトコピー',
            'sub' => array(
                array( 'label' => 'WordPressのサイトコピーについて', 'filename' => 'manual/man_install_copy_word.php' ),
            )
        ),
        array(
            'label' => 'CGIツール',
            'sub' => array(
                array( 'label' => 'メールフォーム', 'filename' => 'manual/man_install_cgi_mailform.php' ),
            )
        ),
        array(
            'label' => '他社サービスからの移転',
            'sub' => array(
                array( 'label' => 'WordPress簡単移行', 'filename' => 'manual/man_install_transfer_wp.php' ),
                array( 'label' => 'WordPressの移転について', 'filename' => 'manual/man_install_transfer_wordpress.php' ),
            )
        ),
    ),

    /* ----------------------------------------------------------
      WordPressテーマについて
   ------------------------------------------------------------- */
    'theme' => array(
        array( 'label' => '提供WordPressテーマの紹介', 'filename' => 'manual/man_wp_theme_introduction.php' ),
        array( 'label' => 'WordPressテーマの購入・解約', 'filename' => 'manual/man_wp_theme_purchase.php' ),
        array( 'label' => 'インストール済みWordPressにテーマをインストール', 'filename' => 'manual/man_wp_theme_install.php' ),
        array( 'label' => 'WordPressテーマをダウンロード', 'filename' => 'manual/man_wp_theme_download.php' ),
    ),
    
    /* ----------------------------------------------------------
       メールについて
    ------------------------------------------------------------- */
    'mail' => array(
        array( 'label' => '仕様一覧', 'filename' => 'manual/man_mail_spec.php' ),
        array( 'label' => 'メールアカウントの追加', 'filename' => 'manual/man_mail_add.php' ),
        array( 'label' => 'メールアカウントの一括登録', 'filename' => 'manual/man_mail_bulkadd.php' ),
        array( 'label' => 'メールアカウントのCSVダウンロード', 'filename' => 'manual/man_mail_account_csv.php' ),
        array( 'label' => 'メールアカウントの一括変更', 'filename' => 'manual/man_mail_bulk_change.php' ),
        array( 'label' => 'メールアカウントのパスワード変更', 'filename' => 'manual/man_mail_change_password.php' ),
        array( 'label' => 'メールアカウントの容量変更', 'filename' => 'manual/man_mail_change_capacity.php' ),
        array(
            'label' => 'メールソフトの設定',
            'filename' => 'manual/man_mail_setting.php',
            'sub' => array(
                array('label' => 'Outlook for Windows / Outlook (new)', 'filename' => 'manual/man_mail_setting_olwin.php'),
                array(
					'label' => 'WindowsLiveメール',
					'filename' => array(
						'manual/man_mail_setting_wlm.php',
						'manual/man_mail_setting_wlm_not.php'
					)
				),
				array( 'label' => 'Windows10メール', 'filename' => 'manual/man_mail_setting_windows10.php' ),
                array(
                    'label' => 'Windows8メール',
                    'filename' => array(
                        'manual/man_mail_setting_windows8.php',
                        'manual/man_mail_setting_windows8_not_mail_app.php'
                    )
                ),
                array(
                    'label' => 'Mozilla Thunderbird(Ver31〜)',
                    'filename' => array(
                        'manual/man_mail_setting_tb_31.php',
                        'manual/man_mail_setting_tb_31_not.php'
                    )
                ),
				array('label' => 'Outlook 2019(Outlook 365)', 'filename' => 'manual/man_mail_setting_ol2019.php'),
				array('label' => 'Outlook 2016', 'filename' => 'manual/man_mail_setting_ol2016.php'),
                array(
					'label' => 'Outlook 2013',
					'filename' => array(
						'manual/man_mail_setting_ol2013.php',
						'manual/man_mail_setting_ol2013_not.php'
					)
				 ),
                array(
					'label' => 'Outlook 2010',
					'filename' => array(
						'manual/man_mail_setting_ol2010.php',
						'manual/man_mail_setting_ol2010_not.php'
					)
				),
                array( 'label' => 'Outlook 2007',
					'filename' => array(
						'manual/man_mail_setting_ol.php',
						'manual/man_mail_setting_ol_not.php'
					)
				),
                array(
					'label' => 'Becky! Internet Mail',
					'filename' => array(
						'manual/man_mail_setting_becky.php',
						'manual/man_mail_setting_becky_not.php'
					)
				),
                array(
					'label' => 'Macメール(OS X)',
					'filename' => array(
						 'manual/man_mail_setting_mac_osx.php',
						 'manual/man_mail_setting_mac_osx_not.php'
					)
				),
                array(
					'label' => 'iPhoneメール',
					'filename' => array(
						'manual/man_mail_setting_iphone.php',
						'manual/man_mail_setting_iphone_old.php',
						'manual/man_mail_setting_iphone_not.php'
					)
				),
                array(
					'label' => 'iPadメール',
					'filename' => array(
						'manual/man_mail_setting_ipad.php',
						'manual/man_mail_setting_ipad_not.php'
					)
				),
				array('label' => 'Gmail', 'filename' => 'manual/man_mail_setting_gmail.php'),
            )
        ),
        array( 'label' => 'メーリングリストについて', 'filename' => 'manual/man_mail_mailinglist.php' ),
        array( 'label' => 'メールマガジンについて', 'filename' => 'manual/man_mail_mailmagazine.php' ),
        array( 'label' => '迷惑メールフィルタ設定', 'filename' => 'manual/man_mail_spam_setting.php' ),
        array( 'label' => '自動応答設定', 'filename' => 'manual/man_mail_mailreply.php' ),
        array( 'label' => 'メールの振り分け', 'filename' => 'manual/man_mail_sorting.php' ),
        array( 'label' => 'SMTP認証の国外アクセス制限設定', 'filename' => 'manual/man_mail_jpcheck.php' ),
        array( 'label' => 'OP25Bについて', 'filename' => 'manual/man_mail_op25b.php' ),
        array( 'label' => '転送設定', 'filename' => 'manual/man_mail_transfer.php' ),
        array( 'label' => 'DKIM設定', 'filename' => 'manual/man_mail_dkim.php' ),
        array( 'label' => 'SPF設定', 'filename' => 'manual/man_mail_spf.php' ),
        array( 'label' => 'DMARC設定', 'filename' => 'manual/man_mail_dmarc.php' ),
    ),
    
    /* ----------------------------------------------------------
       FTPについて
    ------------------------------------------------------------- */
    'ftp' => array(
        array( 'label' => '仕様一覧', 'filename' => 'manual/man_ftp_spec.php' ),
        array( 'label' => 'FTPアカウントの追加', 'filename' => 'manual/man_ftp_add.php' ),
        array(
            'label' => 'FTPソフトの設定',
            'filename' => 'manual/man_ftp_setting.php',
            'sub' => array(
                array( 'label' => 'FFFTPの設定', 'filename' => 'manual/man_ftp_ffftp_setting.php' ),
                array( 'label' => 'FileZillaの設定', 'filename' => 'manual/man_ftp_filezilla_setting.php' ),
				array( 'label' => 'ホームページ・ビルダー20の設定', 'filename' => 'manual/man_ftp_hpb_setting.php' ),
				array( 'label' => 'Dreamweaver CCの設定', 'filename' => 'manual/man_ftp_dream_setting.php' ),
				array( 'label' => 'BiND for WebLiFE 8の設定', 'filename' => 'manual/man_ftp_bind_setting.php' ),
				array( 'label' => 'Cyberduckの設定', 'filename' => 'manual/man_ftp_cyberduck_setting.php' ),
            )
        ),
        array( 'label' => '.ftpaccess', 'filename' => 'manual/man_ftp_ftpaccess.php' ),
        array( 'label' => 'FTP制限設定', 'filename' => 'manual/man_ftp_id.php' ),
        array( 'label' => 'FTP情報確認手順', 'filename' => 'manual/man_ftp_info_check.php' ),
    ),
    
    /* ----------------------------------------------------------
       データベースについて
    ------------------------------------------------------------- */
    'database' => array(
        array( 'label' => '仕様一覧', 'filename' => 'manual/man_db_spec.php' ),
        array( 'label' => 'MySQL設定', 'filename' => 'manual/man_db_setting.php' ),
        array( 'label' => '自動バックアップからのデータ取得', 'filename' => 'manual/man_db_download.php'),
		array( 'label' => '現在のMySQLをダウンロード', 'filename' => 'manual/man_db_man_backup.php'),
        array( 'label' => 'phpMyAdmin', 'filename' => 'manual/man_db_myadmin.php' ),
        array( 'label' => 'MySQL移行ツール', 'filename' => 'manual/man_db_shift_tool.php' ),
        array( 'label' => '自動バックアップからの復元', 'filename' => 'manual/man_db_restore.php' ),
    ),
    
    /* ----------------------------------------------------------
       管理ツールについて
    ------------------------------------------------------------- */
    'tool' => array(
        array( 'label' => 'XServerアカウント', 'filename' => 'manual/man_tool_info.php' ),
		array( 'label' => 'エックスサーバー契約管理', 'filename' => 'manual/man_tool_xserver.php' ),
        array( 'label' => 'サーバーパネル', 'filename' => 'manual/man_tool_server.php' ),
        array( 'label' => 'ファイルマネージャ', 'filename' => 'manual/man_tool_file.php' ),
        array(
            'label' => 'メール管理ツール',
            'sub' => array(
                array( 'label' => 'メールパネル', 'filename' => 'manual/man_tool_mail_panel.php' ),
                array(
                    'label' => 'WEBメール',
                    'filename' => array(
                        'manual/man_tool_mail.php',
                        'manual/man_tool_mail_old.php'
                    )
                ),
                array(
                    'label' => 'WEBメール(スマートフォン・タブレット)',
                    'filename' => array(
                        'manual/man_tool_mail_sp.php',
                        'manual/man_tool_mail_sp_old.php'
                    )
                ),
            )
        ),
        array( 'label' => 'AIチャットについて', 'filename' => 'manual/man_tool_aichat.php' ),
    ),

    /* ----------------------------------------------------------
        トラブルからの復旧について
    ------------------------------------------------------------- */
    'malicious' => array(
        array('label' => 'メールフォームを悪用した不正アクセスについて', 'filename' => 'manual/man_malicious_mailform.php'),
        array('label' => 'メールアカウントのパスワードクラックについて', 'filename' => 'manual/man_malicious_password_crack.php'),
        array('label' => '不正アクセス（ファイルの改ざん、不正なファイル設置）について', 'filename' => 'manual/man_malicious_access.php'),
        array('label' => 'XServerアカウント・サーバーパネルへの不正ログインについて', 'filename' => 'manual/man_malicious_login.php'),
    ),
    
    /* ----------------------------------------------------------
       用語集
    ------------------------------------------------------------- */
    'terms' => array(
        array( 'label' => '用語集', 'filename' => 'manual/terms.php' ),
    ),
);


/* ----------------------------------------------------------
    現在のページかを判定
------------------------------------------------------------- */
function is_subnav_current($path){
    global $REAL_PATH;
    $is_current = false;
    if(is_array($path)){
        foreach($path as $key => $value){
            if(strpos( $REAL_PATH, $value ) !== false) {
                $is_current = true;
            }
        }
    }else{
        $is_current = strpos( $REAL_PATH, $path ) !== false;
    }
    return $is_current;
}


/* ----------------------------------------------------------
    各リストからHTML文字列を作って返す
------------------------------------------------------------- */
function create_sidenav_list($list){
    global $SITE_URL;
    $html_string = '';
    for($i = 0, $size = count($list); $i < $size; ++$i){
        $ary = $list[$i];
        $link_url = '';
        $biz_ico = '';
        if( isset($ary['filename']) ){
            $link_url = $SITE_URL.(is_array($ary['filename']) ? $ary['filename'][0] : $ary['filename']);
        }
        if( isset($ary['biz']) ){
            $biz_ico = '<span class="ico_biz">ビジネスプラン</span>';
        }
        
        if( isset($ary['sub']) ){
            if( isset($ary['filename']) ){
                if( is_subnav_current($ary['filename']) && !$ary['ignore'] ) {
                    $html_string .= '<li><a class="is-current" href="'.$link_url.'">'.$ary['label'].$biz_ico.'</a><ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
                }else{
                    $html_string .= '<li><a href="'.$link_url.'">'.$ary['label'].$biz_ico.'</a><ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
                }
            }else{
                $html_string .= '<li class="side-menu_nolink">'.$ary['label'].$biz_ico.'<ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
            }
        }else{
            if( is_subnav_current($ary['filename']) && !$ary['ignore'] ) {
                $html_string .= '<li><a class="is-current" href="'.$link_url.'">'.$ary['label'].$biz_ico.'</a></li>';
            }else{
                $html_string .= '<li><a href="'.$link_url.'">'.$ary['label'].$biz_ico.'</a></li>';
            }
        }
    }
    return $html_string;
}


/* ----------------------------------------------------------
    HTML生成
------------------------------------------------------------- */
foreach($sidenav_list as $key => $value){
    $sidenav_list[$key]['html'] = create_sidenav_list($sidenav_list[$key]);
}
$sidenav_list['top'] = array( 'html' => '<a class="side-menu_label" href="'.$SITE_URL.'manual/index.php"><span class="side-menu_label_inner">マニュアルトップ</span></a>' );


/* ----------------------------------------------------------
    現在のカテゴリ
------------------------------------------------------------- */
$current_category_name = '';
if( is_subnav_current('manual/index.php') || is_subnav_current('searcher/index.cgi')){
    $sidenav_list['top']['html'] = '<a class="side-menu_label is-current" href="'.$SITE_URL.'manual/index.php"><span class="side-menu_label_inner">マニュアルトップ</span></a>';
}else{
    foreach($sidenav_list as $key => $value){
        if( strpos( $sidenav_list[$key]['html'], 'is-current' ) !== false ){
            $current_category_name = $key;
            break;
        }
    }
}


?>

<aside class="tac mb30">
    <a href="<?php print $SITE_URL; ?>manual/man_how_to_start_wpblog.php">
        <img class="hover" src="<?php print $SITE_URL; ?>img/manual/bnr_wpblog.png" alt="初心者でもわかるWordPressブログの始め方">
    </a>
</aside>

<aside class="side-box">
    <h3 class="side-box_ttl">マニュアルの検索</h3>
    <div class="side-box_body">
        <script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
        <div class="gcse-searchbox-only"></div>
    </div>
</aside>

<noscript>
    <style>.side-menu_body { display: block; }</style>
</noscript>
<aside class="side-box">
    <h3 class="side-box_ttl">マニュアルメニュー</h3>
    <div class="side-box_body">
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list['top']['html']; ?>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'order') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">お申し込みについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['order']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'domain') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">ドメインについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['domain']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'server') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">サーバーについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['server']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'program') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">サーバープログラムについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['program']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'install') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">インストールについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['install']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'theme') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">WordPressテーマについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['theme']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'mail') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">メールについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['mail']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'ftp') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">FTPについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['ftp']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'database') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">データベースについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['database']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'tool') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">管理ツールについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['tool']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'malicious') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">トラブルからの復旧について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['malicious']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'terms') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">用語集</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['terms']['html']; ?>
                </ul>
            </li>
        </ul>
    </div>
</aside>