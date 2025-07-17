<?php
/* ========================================================== 

よくある質問ページ： サイドメニュー用PHP

-------------------------------------------------------------

$sidenav_list にカテゴリ別のリンク情報を格納し、
記述(挿入)した順番でサイドメニューとして表示します。
(カテゴリの順番を変える場合は最下部のHTMLを編集してください)
その他ページ用の sidemenu.php も使用方法は同じです。

-------------------------------------------------------------

1個のリンク情報は下記のような配列で構成されています。

array( 'label' => 'ページ名', 'filename' => 'dir/url.php' )

label: ページ名。リンクテキストに使われます
filename: サイトルートから見た対象ファイルの相対パス

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

============================================================ */


$sidenav_list = array(
    /* ----------------------------------------------------------
        契約・料金について
    ------------------------------------------------------------- */
    'contract' => array(
        array(
            'label' => '新規契約',
            'filename' => array(
                'support/faq/faq_contract_new.php',
                'support/faq/contract_new_plan.php',
                'support/faq/contract_new_shortest_use.php',
                'support/faq/contract_new_trial.php',
                'support/faq/contract_new_trial_flow.php',
                'support/faq/contract_new_flow.php',
                'support/faq/contract_new_trial_detail.php',
                'support/faq/contract_new_wordpress_plan.php',
                'support/faq/contract_new_voluntary_organization.php',
                'support/faq/contract_new_server_domain.php',
                'support/faq/contract_new_change_id.php',
                'support/faq/contract_new_change_member.php',
                'support/faq/contract_new_start.php',
                'support/faq/contract_new_submit.php',
                'support/faq/contract_new_expense.php',
                'support/faq/contract_new_migration.php',
                'support/faq/contract_new_multiple.php',
                'support/faq/contract_new_change_plan.php',
                'support/faq/contract_new_receive_an_email.php',
            ),
        ),
        array(
            'label' => '契約更新',
            'filename' => array(
                'support/faq/faq_contract_renewal.php',
                'support/faq/contract_renewal_notification.php',
                'support/faq/contract_renewal_procedure.php',
                'support/faq/contract_renewal_payment.php',
                'support/faq/contract_renewal_present_domain.php',
                'support/faq/contract_renewal_present_domain_application.php',
                'support/faq/contract_renewal_method_payment.php',
                'support/faq/contract_renewal_payment_reflects.php',
                'support/faq/contract_renewal_automatic_debit.php',
                'support/faq/contract_renewal_automatic_update_error.php',
                'support/faq/contract_renewal_automatic_update_multiple.php',
                'support/faq/contract_renewal_suspend.php',
            ),
        ),
        array(
            'label' => '契約変更',
            'filename' => array(
                'support/faq/faq_contract_alteration.php',
                'support/faq/contract_alteration_change_plan.php',
                'support/faq/contract_alteration_migration.php',
                'support/faq/contract_alteration_assignment.php',
                'support/faq/contract_alteration_third_party.php',
                'support/faq/contract_alteration_name.php',
                'support/faq/contract_alteration_last_name.php',
                'support/faq/contract_alteration_mailaddress_change.php',
                'support/faq/contract_alteration_id_change.php',
                'support/faq/contract_alteration_day_span.php',
            ),
        ),
        array(
            'label' => '料金',
            'filename' => array(
                'support/faq/faq_contract_price.php',
                'support/faq/contract_price_flow.php',
                'support/faq/contract_price_method_payment.php',
                'support/faq/contract_price_credit_error.php',
                'support/faq/contract_price_expiration_date_over.php',
                'support/faq/contract_price_adding_up.php',
                'support/faq/contract_price_method_payment_change.php',
                'support/faq/contract_price_contract_period_change.php',
                'support/faq/contract_price_bank_transfer_notification.php',
                'support/faq/contract_price_bank_transfer_auto.php',
                'support/faq/contract_price_convenience_store_change.php',
                'support/faq/contract_price_different_claim.php',
                'support/faq/contract_price_invoice_issue.php',
                'support/faq/contract_price_invoice_change_address.php',
                'support/faq/contract_price_automatic_update.php',
                'support/faq/contract_price_change_credit_card.php',
                'support/faq/contract_price_invoice.php',
            ),
        ),
        array(
            'label' => '解約',
            'filename' => array(
                'support/faq/faq_contract_cancel.php',
                'support/faq/contract_cancel_before.php',
                'support/faq/contract_cancel_what.php',
                'support/faq/contract_cancel_use.php',
                'support/faq/contract_cancel_accidentally.php',
                'support/faq/contract_cancel_expiration_date_server.php',
                'support/faq/contract_cancel_expiration_date_domain.php',
                'support/faq/contract_cancel_fee.php',
            ),
        ),
        array(
            'label' => 'トラブル',
            'filename' => array(
                'support/faq/faq_contract_new_trouble.php',
                'support/faq/contract_new_sms.php',
                'support/faq/contract_new_setup_mail.php',
                'support/faq/contract_new_registered_mail.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        Webサイト・WordPressについて
    ------------------------------------------------------------- */
    'website' => array(
        array(
            'label' => '機能・仕様',
            'filename' => array(
                'support/faq/faq_service_hp.php',
                'support/faq/service_hp_password.php',
                'support/faq/service_hp_database.php',
                'support/faq/service_hp_available_program.php',
                'support/faq/service_hp_mobile_site.php',
                'support/faq/service_hp_file_upload.php',
            ),
        ),
        array(
            'label' => 'WordPress',
            'filename' => array(
                'support/faq/faq_service_hp_wp.php',
                'support/faq/service_hp_wp_garbled_char.php',
                'support/faq/service_hp_wp_access_denied.php',
                'support/faq/service_hp_wp_mysql.php',
                'support/faq/service_hp_wp_login.php',
                'support/faq/service_hp_wp_404.php',
                'support/faq/service_hp_wp_ssl.php',
                'support/faq/service_hp_wp_operation_check.php',
                'support/faq/service_hp_wp_change_domain.php',
                'support/faq/service_hp_wp_measures_againstload.php',
                'support/faq/service_hp_wp_change_php_not_displayed.php',
                'support/faq/service_hp_wp_update_not_displayed.php',
                'support/faq/service_hp_wp_subdomain.php',
            ),
        ),
        array(
            'label' => 'WordPress簡単移行',
            'filename' => array(
                'support/faq/faq_service_hp_transfer_wp.php',
                'support/faq/service_hp_transfer_wp_what.php',
                'support/faq/service_hp_transfer_wp_different_domain.php',
                'support/faq/service_hp_transfer_wp_change_url.php',
            ),
        ),
        array(
            'label' => 'Webフォント',
            'filename' => array(
                'support/faq/faq_service_hp_webfont.php',
                'support/faq/service_hp_webfont_what.php',
                'support/faq/service_hp_webfont_multiple.php',
                'support/faq/service_hp_webfont_typesquare.php',
                'support/faq/service_hp_webfont_setting.php',
                'support/faq/service_hp_webfont_release.php',
                'support/faq/service_hp_webfont_exceed_the_limit.php',
                'support/faq/service_hp_webfont_commercial_use.php',
                'support/faq/service_hp_webfont_form_use.php',
                'support/faq/service_hp_webfont_change.php',
                'support/faq/service_hp_webfont_different.php',
                'support/faq/service_hp_webfont_mobile_use.php',
                'support/faq/service_hp_webfont_ssl_use.php',
                'support/faq/service_hp_webfont_print.php',
                'support/faq/service_hp_webfont_delivery_restriction.php',
                'support/faq/service_hp_webfont_not_show.php',
                'support/faq/service_hp_webfont_not_delivery.php',
                'support/faq/service_hp_webfont_weight_change.php',
                'support/faq/service_hp_webfont_software_use.php',
                'support/faq/service_hp_webfont_subdomain.php',
                'support/faq/service_hp_webfont_garbled_char.php',
                'support/faq/service_hp_webfont_other_cms.php',
                'support/faq/service_hp_webfont_string_left.php',
                'support/faq/service_hp_webfont_japanese_domain.php',
                'support/faq/service_hp_webfont_inlineflame_not_applicable.php',
                'support/faq/service_hp_webfont_stay_applied.php',
                'support/faq/service_hp_webfont_supported_blowser.php',
            ),
        ),
        array(
            'label' => 'データベース',
            'filename' => array(
                'support/faq/faq_service_db.php',
                'support/faq/service_db_version.php',
                'support/faq/service_db_capacity.php',
                'support/faq/service_db_setting.php',
                'support/faq/service_db_phpmyadmin.php',
                'support/faq/service_db_expire.php',
                'support/faq/service_db_autoinstall_password.php',
                'support/faq/service_db_hp_not_show.php',
            ),
        ),
        array(
            'label' => 'CGI',
            'filename' => array(
                'support/faq/faq_service_cgi.php',
                'support/faq/service_cgi_install.php',
                'support/faq/service_cgi_permission.php',
                'support/faq/service_cgi_perl_module.php',
                'support/faq/service_cgi_perl_pass.php',
                'support/faq/service_cgi_gd_use.php',
                'support/faq/service_cgi_jcode.php',
                'support/faq/service_cgi_suexec.php',
                'support/faq/service_cgi_500.php',
            ),
        ),
        array(
            'label' => 'SSI',
            'filename' => array(
                'support/faq/faq_service_ssi.php',
                'support/faq/service_ssi_use.php',
                'support/faq/service_ssi_action_html.php',
            ),
        ),
        array(
            'label' => 'PHP',
            'filename' => array(
                'support/faq/faq_service_php.php',
                'support/faq/service_php_use.php',
                'support/faq/service_php_version.php',
                'support/faq/service_php_rewrite_version.php',
                'support/faq/service_php_multibyte.php',
                'support/faq/service_php_phpini_conf_change.php',
                'support/faq/service_php_normal_action.php',
                'support/faq/service_php_500.php',
                'support/faq/service_php_garbled_char.php',
                'support/faq/service_php_action_html.php',
            ),
        ),
        array(
            'label' => 'トラブル',
            'filename' => array(
                'support/faq/faq_service_hp_trouble.php',
                'support/faq/service_hp_trouble_not_update.php',
                'support/faq/service_hp_trouble_403.php',
                'support/faq/service_hp_trouble_404.php',
                'support/faq/service_hp_trouble_500.php',
                'support/faq/service_hp_trouble_503.php',
                'support/faq/service_hp_trouble_510.php',
                'support/faq/service_hp_trouble_img_error.php',
                'support/faq/service_hp_trouble_tampering.php',
                'support/faq/service_hp_trouble_dangerous.php',
                'support/faq/service_hp_trouble_virus.php',
                'support/faq/service_hp_trouble_not_exist.php',
                'support/faq/service_hp_trouble_suddenly_use.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
       ファイル転送(FTP)について
    ------------------------------------------------------------- */
    'ftp' => array(
        array(
            'label' => '機能・仕様',
            'filename' => array(
                'support/faq/faq_service_ftp.php',
                'support/faq/service_ftp_public_html_folder.php',
                'support/faq/service_ftp_overssl.php',
                'support/faq/service_ftp_access.php',
            ),
        ),
        array(
            'label' => '設定方法',
            'filename' => array(
                'support/faq/faq_service_ftp_setting.php',
                'support/faq/service_ftp_setting_method.php',
                'support/faq/service_ftp_setting_upload.php',
                'support/faq/service_ftp_setting_initial_folder.php',
                'support/faq/service_ftp_setting_add_use.php',
                'support/faq/service_ftp_setting_password_change.php',
                'support/faq/service_ftp_setting_info.php',
            ),
        ),
        array(
            'label' => 'トラブル',
            'filename' => array(
                'support/faq/faq_service_ftp_trouble.php',
                'support/faq/service_ftp_trouble_hp_not_show.php',
                'support/faq/service_ftp_trouble_not_upload.php',
                'support/faq/service_ftp_trouble_ftpsoft_delete.php',
                'support/faq/service_ftp_trouble_connection_expire.php',
                'support/faq/service_ftp_trouble_530.php',
                'support/faq/service_ftp_trouble_initial_folder_delete.php',
                'support/faq/service_ftp_trouble_not_filelist.php',
                'support/faq/service_ftp_trouble_error.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        メールについて
    ------------------------------------------------------------- */
    'mail' => array(
        array(
            'label' => '機能・仕様',
            'filename' => array(
                'support/faq/faq_service_mail.php',
                'support/faq/service_mail_transmission.php',
                'support/faq/service_mail_transfer.php',
                'support/faq/service_mail_587port.php',
                'support/faq/service_mail_virus_check.php',
                'support/faq/service_mail_catchall.php',
                'support/faq/service_mail_per_domain.php',
                'support/faq/service_mail_mailinglist_mailmagazine.php',
                'support/faq/service_mail_transmission_limit.php',
                'support/faq/service_mail_dkim.php',
                'support/faq/service_mail_gmail.php',
            ),
        ),
        array(
            'label' => '設定方法',
            'filename' => array(
                'support/faq/faq_service_mail_setting.php',
                'support/faq/service_mail_setting_what.php',
                'support/faq/service_mail_setting_sort.php',
                'support/faq/service_mail_setting_reception_refusal.php',
                'support/faq/service_mail_setting_ssl.php',
                'support/faq/service_mail_setting_mail_server.php',
                'support/faq/service_mail_setting_domain_auth.php',
                'support/faq/service_mail_setting_add.php',
                'support/faq/service_mail_setting_setup.php',
                'support/faq/service_mail_setting_upper_limit.php',
                'support/faq/service_mail_setting_mail_spam.php',
            ),
        ),
        array(
            'label' => 'WEBメール',
            'filename' => array(
                'support/faq/faq_tool_mail.php',
                'support/faq/tool_mail_login.php',
                'support/faq/tool_mail_access_error.php',
                'support/faq/tool_mail_garbled_text.php',
                'support/faq/tool_mail_login_javascript.php',
            ),
        ),
        array(
            'label' => 'ウィルスチェック',
            'filename' => array(
                'support/faq/faq_service_mail_viruscheck.php',
                'support/faq/service_mail_viruscheck_use.php',
                'support/faq/service_mail_viruscheck_transfer.php',
                'support/faq/service_mail_viruscheck_mailinglist_mailmagazine.php',
                'support/faq/service_mail_viruscheck_detection_notification.php',
                'support/faq/service_mail_viruscheck_not_remember_send_detection_notification.php',
            ),
        ),
        array(
            'label' => 'メーリングリスト機能',
            'filename' => array(
                'support/faq/faq_service_mail_mailinglist.php',
                'support/faq/service_mail_mailinglist_limit.php',
                'support/faq/service_mail_mailinglist_address_registration.php',
                'support/faq/service_mail_mailinglist_address_limit.php',
                'support/faq/service_mail_mailinglist_subdomain.php',
                'support/faq/service_mail_mailinglist_outside_mail.php',
                'support/faq/service_mail_mailinglist_outside_website.php',
                'support/faq/service_mail_mailinglist_send_limit.php',
                'support/faq/service_mail_mailinglist_trial.php',
                'support/faq/service_mail_mailinglist_external.php',
            ),
        ),
        array(
            'label' => 'メールマガジン機能',
            'filename' => array(
                'support/faq/faq_service_mail_mailmagazine.php',
                'support/faq/service_mail_mailmagazine_create_limit.php',
                'support/faq/service_mail_mailmagazine_address_registration.php',
                'support/faq/service_mail_mailmagazine_address_limit.php',
                'support/faq/service_mail_mailmagazine_subdomain.php',
                'support/faq/service_mail_mailmagazine_outside_mail.php',
                'support/faq/service_mail_mailmagazine_outside_website.php',
                'support/faq/service_mail_mailmagazine_spam.php',
                'support/faq/service_mail_mailmagazine_send_limit.php',
                'support/faq/service_mail_mailmagazine_trial.php',
                'support/faq/service_mail_mailmagazine_attachments.php',
            ),
        ),
        array(
            'label' => 'トラブル',
            'filename' => array(
                'support/faq/faq_service_mail_trouble.php',
                'support/faq/service_mail_trouble_send.php',
                'support/faq/service_mail_trouble_reception.php',
                'support/faq/service_mail_trouble_not_receive.php',
                'support/faq/service_mail_trouble_method_receive.php',
                'support/faq/service_mail_trouble_spam.php',
                'support/faq/service_mail_trouble_id_desired.php',
                'support/faq/service_mail_trouble_not_know_password.php',
                'support/faq/service_mail_trouble_not_send.php',
                'support/faq/service_mail_trouble_warning.php',
                'support/faq/service_mail_trouble_error.php',
                'support/faq/service_mail_trouble_not_receive_error.php',
                'support/faq/service_mail_trouble_ssl_certificate.php',
                'support/faq/service_mail_trouble_imap_trash.php',
                'support/faq/service_mail_trouble_webmail_disappeared.php',
                'support/faq/service_mail_trouble_err_mail_sender.php',
                'support/faq/service_mail_trouble_err_mail_sender_gmail.php',
                'support/faq/service_mail_trouble_transfer.php',
                'support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php',
                'support/faq/service_mail_trouble_phishing_mail.php',
                'support/faq/service_mail_trouble_mail_thunderbird.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        ドメインについて
    ------------------------------------------------------------- */
    'domain' => array(
        array(
            'label' => 'マルチドメイン',
            'filename' => array(
                'support/faq/faq_domain_multi.php',
                'support/faq/domain_multi_japanese.php',
                'support/faq/domain_multi_owndomain_use.php',
                'support/faq/domain_multi_otherservice.php',
                'support/faq/domain_multi_subdomain_hp.php',
                'support/faq/domain_multi_infinity.php',
                'support/faq/domain_multi_name_change.php',
            ),
        ),
        array(
            'label' => '設定方法',
            'filename' => array(
                'support/faq/faq_domain_multi_setting.php',
                'support/faq/domain_multi_setting_per_domain_website.php',
                'support/faq/domain_multi_setting_www.php',
                'support/faq/domain_multi_setting_subdomain_reflect.php',
                'support/faq/domain_multi_setting_waiting.php',
                'support/faq/domain_multi_setting_subdomain_server.php',
                'support/faq/domain_multi_setting_waiting_cache.php',
                'support/faq/domain_multi_setting_server_change.php',
                'support/faq/domain_multi_setting_what_nameserver.php',
                'support/faq/domain_multi_setting_error_registrar.php',
                'support/faq/domain_multi_setting_not_acquired.php',
                'support/faq/domain_multi_setting_nsdifference.php',
                'support/faq/domain_multi_setting_which_nameserver.php',
                'support/faq/domain_multi_setting_free_change.php',
                'support/faq/domain_multi_setting_error_domainname.php',
            ),
        ),
        array(
            'label' => '新規取得',
            'filename' => array(
                'support/faq/faq_domain_take.php',
                'support/faq/domain_take_acting.php',
                'support/faq/domain_take_not_use.php',
                'support/faq/domain_take_attribute_done.php',
                'support/faq/domain_take_jp_organaize.php',
                'support/faq/domain_take_orjp_organaize.php',
                'support/faq/domain_take_acjp_organaize.php',
                'support/faq/domain_take_edjp_organaize.php',
                'support/faq/domain_take_error_campaign_domain.php',
                'support/faq/domain_take_paymant_after_cancel.php',
                'support/faq/domain_take_request_error.php',
                'support/faq/domain_take_asia_process.php',
                'support/faq/domain_take_1org_1domain.php',
                'support/faq/domain_take_before_establishment.php',
                'support/faq/domain_take_jp_process.php',
            ),
        ),
        array(
            'label' => 'ドメイン移管',
            'filename' => array(
                'support/faq/faq_transfer_domain.php',
                'support/faq/transfer_domain_other.php',
                'support/faq/transfer_domain_web_mail.php',
                'support/faq/transfer_domain_permanent_free.php',
                'support/faq/transfer_domain_failure.php',
                'support/faq/transfer_domain_auth_mistake.php',
                'support/faq/transfer_domain_incoming_mail.php',
                'support/faq/transfer_domain_mistake_discard.php',
            ),
            'ignore' => true
        ),
        array(
            'label' => 'Whois',
            'filename' => array(
                'support/faq/faq_domain_whois.php',
                'support/faq/domain_whois_change.php',
                'support/faq/domain_whois_other_name.php',
                'support/faq/domain_whois_attribute.php',
                'support/faq/domain_whois_effectiveness.php',
                'support/faq/tool_domain_whois.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        SSLについて
    ------------------------------------------------------------- */
    'ssl' => array(
        array(
            'label' => 'SSL仕様',
            'filename' => array(
                'support/faq/faq_service_ssl.php',
                'support/faq/ssl_spec_use.php',
                'support/faq/ssl_spec_mobilesite.php',
                'support/faq/ssl_spec_wild.php',
                'support/faq/ssl_spec_communication.php',
                'support/faq/ssl_spec_sha2.php',
                'support/faq/ssl_spec_bring.php',
                'support/faq/ssl_spec_bring_out.php',
                'support/faq/ssl_spec_ip_sni.php',
                'support/faq/ssl_spec_initial_domain.php',
                'support/faq/ssl_spec_free_option.php',
                'support/faq/ssl_spec_ip_use.php',
                'support/faq/ssl_spec_multiyear_contract.php',
                'support/faq/ssl_spec_contract_end_date.php',
            ),
        ),
        array(
            'label' => '申込・設定方法',
            'filename' => array(
                'support/faq/faq_service_ssl_setting.php',
                'support/faq/ssl_setting_2way.php',
                'support/faq/ssl_setting_name_limit.php',
                'support/faq/ssl_setting_issue_finish.php',
                'support/faq/ssl_setting_upload.php',
                'support/faq/ssl_setting_not_exist.php',
                'support/faq/ssl_setting_keymark_not_display.php',
                'support/faq/ssl_setting_ip_www.php',
                'support/faq/ssl_setting_operation.php',
                'support/faq/ssl_setting_uninstall.php',
                'support/faq/ssl_setting_otherserver.php',
                'support/faq/ssl_setting_incomplete.php',
                'support/faq/ssl_setting_resend_email.php',
                'support/faq/ssl_setting_update_failed.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        他社サービスからの移転について
    ------------------------------------------------------------- */
    'transfer' => array(
        array(
            'label' => 'サーバー移転',
            'filename' => array(
                'support/faq/faq_transfer_server.php',
                'support/faq/transfer_server_what.php',
                'support/faq/transfer_server_down.php',
                'support/faq/transfer_server_prior.php',
                'support/faq/transfer_server_time.php',
                'support/faq/transfer_server_incoming_mail.php',
                'support/faq/transfer_server_checkurl.php',
                'support/faq/transfer_server_daiko.php',
                'support/faq/transfer_server_received_mail.php',
                'support/faq/transfer_server_setting_service.php',
                'support/faq/transfer_server_domain.php',
                'support/faq/transfer_server_cancel_contract.php',
                'support/faq/transfer_server_name_how_long.php',
                'support/faq/transfer_server_source_website.php',
            ),
        ),
        array(
            'label' => 'ドメイン移管',
            'filename' => array(
                'support/faq/faq_transfer_domain.php',
                'support/faq/transfer_domain_other.php',
                'support/faq/transfer_domain_web_mail.php',
                'support/faq/transfer_domain_permanent_free.php',
                'support/faq/transfer_domain_failure.php',
                'support/faq/transfer_domain_auth_mistake.php',
                'support/faq/transfer_domain_incoming_mail.php',
                'support/faq/transfer_domain_mistake_discard.php',
                'support/faq/transfer_domain_howmany_days.php',
                'support/faq/transfer_domain_types.php',
                'support/faq/transfer_domain_cost.php',
                'support/faq/transfer_domain_present.php',
                'support/faq/transfer_domain_daiko.php',
                'support/faq/transfer_domain_dns_change.php',
                'support/faq/transfer_domain_expiration_date.php',
                'support/faq/transfer_domain_work_required.php',
                'support/faq/transfer_domain_which_mail.php',
                'support/faq/transfer_domain_whois.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        サーバー仕様について
    ------------------------------------------------------------- */
    'server' => array(
        array(
            'label' => 'サーバー仕様',
            'filename' => array(
                'support/faq/faq_service_server.php',
                'support/faq/service_server_os.php',
                'support/faq/service_server_spec.php',
                'support/faq/service_server_datacenter.php',
                'support/faq/service_server_backup.php',
                'support/faq/service_server_stop.php',
                'support/faq/service_server_transfer_amount.php',
                'support/faq/service_server_name_server.php',
                'support/faq/service_server_cron.php',
                'support/faq/service_server_ssh.php',
                'support/faq/service_server_telnet.php',
                'support/faq/service_server_htaccess.php',
                'support/faq/service_server_mod_rewrite.php',
                'support/faq/service_server_number.php',
                'support/faq/service_server_program_introduction.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        管理ツールについて
    ------------------------------------------------------------- */
    'management_tool' => array(
        array(
            'label' => 'XServerアカウント',
            'filename' => array(
                'support/faq/faq_tool_info.php',
                'support/faq/tool_info_login.php',
                'support/faq/tool_info_login_javascript.php',
                'support/faq/service_missing_member_id.php',
                'support/faq/service_missing_infopanel_password.php',
            ),
        ),
        array(
            'label' => 'サーバーパネル',
            'filename' => array(
                'support/faq/faq_tool_server.php',
                'support/faq/service_missing_serverpanel_password.php',
                'support/faq/tool_server_login.php',
                'support/faq/tool_server_login_error.php',
                'support/faq/tool_server_settingdomain.php',
                'support/faq/tool_server_setting_cron.php',
                'support/faq/tool_server_access_setting.php',
                'support/faq/tool_server_access_term.php',
                'support/faq/tool_server_access_referrer.php',
                'support/faq/tool_server_login_javascript.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        禁止事項について
    ------------------------------------------------------------- */
    'rules' => array(
        array(
            'label' => '禁止事項について',
            'filename' => array(
                'support/faq/faq_dont.php',
                'support/faq/dont_rental.php',
                'support/faq/dont_resale.php',
                'support/faq/dont_contents_stint.php',
                'support/faq/dont_cgi_stint.php',
            ),
        ),
    ),


    /* ----------------------------------------------------------
        サポートについて
    ------------------------------------------------------------- */
    'support' => array(
        array(
            'label' => 'サポートについて',
            'filename' => array(
                'support/faq/faq_support.php',
                'support/faq/support_system.php',
                'support/faq/support_where.php',
                'support/faq/support_seo.php',
                'support/faq/support_tel.php',
                'support/faq/support_security.php',
                'support/faq/support_id.php',
                'support/faq/support_homepage.php',
                'support/faq/support_mail.php',
            ),
        ),
        array(
            'label' => '設定おまかせサポートについて',
            'filename' => array(
                'support/faq/faq_support_daiko.php',
                'support/faq/support_daiko_application.php',
                'support/faq/support_daiko_list.php',
                'support/faq/support_daiko_duration.php',
                'support/faq/support_daiko_password.php',
            ),
        ),
        array(
            'label' => 'サーバー移転代行について',
            'filename' => array(
                'support/faq/faq_support_server_daiko.php',
                'support/faq/support_server_daiko_multiple.php',
                'support/faq/support_server_daiko_information.php',
                'support/faq/support_server_daiko_access.php',
                'support/faq/support_server_daiko_data.php',
                'support/faq/support_server_daiko_ssl.php',
                'support/faq/support_server_daiko_transfer.php',
            ),
        ),
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
        if( isset($ary['filename']) ){
            $link_url = $SITE_URL.(is_array($ary['filename']) ? $ary['filename'][0] : $ary['filename']);
        }

        if( isset($ary['sub']) ){
            if( isset($ary['filename']) ){
                if( is_subnav_current($ary['filename']) && !$ary['ignore'] ) {
                    $html_string .= '<li><a class="is-current" href="'.$link_url.'">'.$ary['label'].'</a><ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
                }else{
                    $html_string .= '<li><a href="'.$link_url.'">'.$ary['label'].'</a><ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
                }
            }else{
                $html_string .= '<li class="side-menu_nolink">'.$ary['label'].'<ul>'.create_sidenav_list($ary['sub']).'</ul></li>';
            }
        }else{
            if( is_subnav_current($ary['filename']) && !$ary['ignore'] ) {
                $html_string .= '<li><a class="is-current" href="'.$link_url.'">'.$ary['label'].'</a></li>';
            }else{
                $html_string .= '<li><a href="'.$link_url.'">'.$ary['label'].'</a></li>';
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
$sidenav_list['top'] = array( 'html' => '<a class="side-menu_label" href="'.$SITE_URL.'support/faq/index.php"><span class="side-menu_label_inner">よくある質問トップ</span></a>' );


/* ----------------------------------------------------------
    現在のカテゴリ
------------------------------------------------------------- */
$current_category_name = '';
if( is_subnav_current('support/faq/index.php') || is_subnav_current('searcher/index.cgi') ){
    $sidenav_list['top']['html'] = '<a class="side-menu_label is-current" href="'.$SITE_URL.'support/faq/index.php"><span class="side-menu_label_inner">よくある質問トップ</span></a>';
}else{
    foreach($sidenav_list as $key => $value){
        if( strpos( $sidenav_list[$key]['html'], 'is-current' ) !== false ){
            $current_category_name = $key;
            break;
        }
    }
}


?>

<aside class="side-box">
    <h3 class="side-box_ttl">よくある質問の検索</h3>
    <div class="side-box_body">
        <script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
        <div class="gcse-searchbox-only"></div>
    </div>
</aside>

<noscript>
    <style>.side-menu_body { display: block; }</style>
</noscript>
<aside class="side-box">
    <h3 class="side-box_ttl">よくある質問メニュー</h3>
    <div class="side-box_body">
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list['top']['html']; ?>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'contract') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">契約・料金について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['contract']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'website') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">Webサイト・WordPressについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['website']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'ftp') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">ファイル転送(FTP)について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['ftp']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'mail') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">メールについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['mail']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'domain') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">ドメインについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['domain']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'ssl') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">SSLについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['ssl']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'transfer') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">他社サービスからの移転について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['transfer']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'server') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">サーバー仕様について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['server']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'management_tool') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">管理ツールについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['management_tool']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'rules') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">禁止事項について</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['rules']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'support') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">サポートについて</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['support']['html']; ?>
                </ul>
            </li>
        </ul>
    </div>
</aside>