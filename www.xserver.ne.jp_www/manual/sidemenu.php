<?php
/* ========================================================== 

�ޥ˥奢��ڡ����� �����ɥ�˥塼��PHP

-------------------------------------------------------------

$sidenav_list �˥��ƥ����̤Υ�󥯾�����Ǽ����
����(����)�������֤ǥ����ɥ�˥塼�Ȥ���ɽ�����ޤ���
(���ƥ���ν��֤��Ѥ�����Ϻǲ�����HTML���Խ����Ƥ�������)
���������������¾�ڡ����Ѥ� sidemenu.php �������ˡ��Ʊ���Ǥ���

-------------------------------------------------------------

1�ĤΥ�󥯾���ϲ����Τ褦������ǹ�������Ƥ��ޤ���

array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php' )

label: �ڡ���̾����󥯥ƥ����Ȥ˻Ȥ��ޤ�
filename: �����ȥ롼�Ȥ��鸫���оݥե���������Хѥ�
������������ʣ���Υե�����ǥ�����ɽ����Ԥ������ݤ�����ǻ��ꤷ�Ƥ�������
������������������������κǽ�Υ����ƥ�Ȥʤ�ޤ�
������������������ˤ�����ϥޥ˥奢���Ѥ�sidemenu.php�Τߤλ��ͤǤ�

��󥯾������Ǥ���˥��֥��ƥ����ɽ�����������ϡ�
sub �Ȥ���̾���ǿ����˥�󥯾�������������������Ƥ���������

array(
    'label' => '�ڡ���̾',
    'filename' => 'dir/url.php',
    'sub' => array(
        array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php' ),
        array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php' ),
        ...
    ),
),

���κݡ���¦�˥�󥯤�ɬ�פ��ʤ���� filename �������Ƥ���������

array(
    'label' => '�ڡ���̾',
    'sub' => array(
        array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php' ),
        array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php' ),
        ...
    ),
),

Ʊ���ڡ����ؤΥ�󥯤���ս�ʾ夢����ʤɡ�������ɽ�����оݤ���
������������ ignore �� true �����ꤷ�Ƥ���������

array( 'label' => '�ڡ���̾', 'filename' => 'dir/url.php', ignore => true )

�֥ӥ��ͥ��ץ��ץ������󤢤� �� 'biz' => true

============================================================ */


$sidenav_list = array(
    /* ----------------------------------------------------------
        ���������ߤˤĤ���
    ------------------------------------------------------------- */
    'order' => array(
        array(
            'label' => '�Ƽ浪��������',
            'sub' => array(
                array( 'label' => '�����С��Τ���������', 'filename' => 'order/index.php' ),
                array(
                    'label' => '���ץ�����ȼ�SSL�Τ���������',
                    'filename' => array(
                        'manual/man_order_ssl.php',
                        'manual/man_order_ssl_domain.php',
                        'manual/man_order_ssl_ov.php',
                        'manual/man_order_ssl_ev.php',
                        'manual/man_order_ssl_duns.php'
                    )
                ),
//                array( 'label' => '����ǽ�᡼��ե��륿��ͭ�����ץ����', 'filename' => 'manual/man_order_cloudmark.php' ),
                array( 'label' => '���ꤪ�ޤ������ݡ���', 'filename' => 'manual/man_order_daiko.php' ),
                array( 'label' => '�����С���ž���', 'filename' => 'manual/man_order_server_daiko.php' ),
                array( 'label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ', 'filename' => 'manual/man_order_present_domain.php' ),
                array( 'label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ�ʥ����ڡ�����ŵ��', 'filename' => 'manual/man_order_campaign_domain.php' ),
                array( 'label' => '�ȼ��ɥᥤ��1ǯ̵����ŵ', 'filename' => 'manual/man_order_oneyear_domain.php' ),
                array( 'label' => '����å���Хå���ŵ', 'filename' => 'manual/man_order_campaign_cashback.php' ),
				array( 'label' => '��ͧã�Ҳ�ץ����', 'filename' => 'manual/man_order_refer_friend_program.php' ),
                array( 'label' => '�ץ����ѹ�', 'filename' => 'manual/man_order_change_plan.php' ),
                array(
                    'label' => 'XServer�ӥ��ͥ��ؤ��ѹ�',
                    'filename' => 'manual/man_order_servicetransfer_intro.php',
                    'sub' => array(
                        array( 'label' => '�����Ѽ��', 'filename' => 'manual/man_order_servicetransfer_flow.php' ),
                        array( 'label' => '���;ܺ�', 'filename' => 'manual/man_order_servicetransfer_detail.php' ),
                    )
                ),
				array(
            'label' => '�������С���ñ�ܹ�',
            'filename' => 'manual/man_order_servertransfer_intro.php',
            'sub' => array(
                array( 'label' => '�����Ѽ��', 'filename' => 'manual/man_order_servertransfer_flow.php' ),
                array( 'label' => '���;ܺ�', 'filename' => 'manual/man_order_servertransfer_detail.php' ),
            )
        ),
            )
        ),
        array(
            'label' => '����ʧ�ˤĤ���',
            'sub' => array(
                array( 'label' => '����Τ���ʧ��', 'filename' => 'manual/man_order_pay_etc.php' ),
                array( 'label' => '����ӥ˥��󥹥��ȥ�ʧ��', 'filename' => 'manual/man_order_pay_method_convenient.php' ),
                array( 'label' => '���쥸�åȥ����ɷ��', 'filename' => 'manual/man_order_pay_method_credit.php' ),
                array( 'label' => '��Կ������', 'filename' => 'manual/man_order_pay_method_bank.php' ),
                array( 'label' => '�ڥ��������', 'filename' => 'manual/man_order_pay_method_pay_easy.php' ),
                array( 'label' => '����ʧ���ʥڥ��ǥ��˷��', 'filename' => 'manual/man_order_pay_method_paidy.php' ),
                array( 'label' => '�ץ�ڥ��ɷ��', 'filename' => 'manual/man_order_pay_method_prepaid.php' ),
                array(
                    'label' => '��ư��������', 'filename' => 'manual/man_order_pay_method_autopay.php',
                    'sub' => array(
                        array( 'label' => '���쥸�åȥ����ɤˤ�뼫ư����', 'filename' => 'manual/man_order_pay_method_autopay_credit.php' ),
                        array( 'label' => '����ʧ���ʥڥ��ǥ��ˤˤ�뼫ư����', 'filename' => 'manual/man_order_pay_method_autopay_paidy.php' ),
                        array( 'label' => '�ץ�ڥ��ɤˤ�뼫ư����', 'filename' => 'manual/man_order_pay_method_autopay_prepaid.php' ),
                    ),
                ),
                array( 'label' => '��ư���������Ԥ������κ�����', 'filename' => 'manual/man_order_pay_method_autopay_resetting.php' ),
                array( 'label' => '����ʧ�����', 'filename' => 'manual/man_order_pay_report.php' ),
                array( 'label' => '����ʧ������', 'filename' => 'manual/man_order_pay_history.php' ),
                array( 'label' => '����񡦼��ν񡦸��ѽ�', 'filename' => 'manual/man_order_pay_bill.php' ),
            )
        ),
        array( 'label' => '�����ӥ�����������', 'filename' => 'manual/man_order_addition.php' ),
        array( 'label' => '�Ƽ�ID�ˤĤ���', 'filename' => 'manual/man_order_about_id.php' ),
        array( 'label' => '��Ͽ����ˤĤ���', 'filename' => 'manual/man_order_change_id.php' ),
        array( 'label' => '��������ȡ����������', 'filename' => 'manual/man_order_user_merge.php' ),
        array( 'label' => '�Ƽ�ѥ���ɤκ�����', 'filename' => 'manual/man_order_reissue.php' ),
		array( 'label' => '���ץ�����ȼ�SSL�κ�ȯ��', 'filename' => 'manual/man_order_sslreissue.php'),
		array( 'label' => '���ʳ�ǧ������', 'filename' => 'manual/man_order_twostepauth.php'),
        array( 'label' => '�Կ��ʥ��������ǧ��', 'filename' => 'manual/man_order_loginsecurity.php'),
        array( 'label' => '̵��������֤ˤĤ���', 'filename' => 'manual/man_order_free_trial.php' ),
        array( 'label' => '�������ߤμ��ä�', 'filename' => 'manual/man_order_cancel.php' ),
        array( 'label' => '����', 'filename' => 'manual/man_order_quit.php' ),
        array(
            'label' => '����̾���ˤĤ���',
            'sub' => array(
                array( 'label' => '�軰�Ԥˤ��������Ϥ�����', 'filename' => 'manual/man_order_transfer_usage_rights.php' ),
                array( 'label' => '������̾�����ѹ�������', 'filename' => 'manual/man_order_name_change.php' ),
                array( 'label' => '�ɥᥤ��ξ��Ϥ򤹤���', 'filename' => 'manual/man_order_domain_transfer.php' ),
            ),
        ),
    ),
    
    /* ----------------------------------------------------------
       �ɥᥤ��ˤĤ���
    ------------------------------------------------------------- */
    'domain' => array(
        array( 'label' => '���Ͱ���', 'filename' => 'manual/man_domain_spec.php' ),
        array( 'label' => '�ɥᥤ��ΰܴɤˤĤ���', 'filename' => 'manual/man_domain_transfer.php' ),
        array( 'label' => '�����ɥᥤ������', 'filename' => 'manual/man_domain_how_to_recovery.php' ),
        array( 'label' => '�ɥᥤ������', 'filename' => 'manual/man_domain_setting.php' ),
        array( 'label' => '�ɥᥤ��ν����', 'filename' => 'manual/man_domain_reset.php' ),
        array( 'label' => '���֥ɥᥤ������', 'filename' => 'manual/man_domain_subdomain_setting.php' ),
        array( 'label' => '�ɥᥤ��ǧ��', 'filename' => 'manual/man_domain_authenticate.php' ),
        array( 'label' => 'ư���ǧ�ˤĤ���', 'filename' => 'manual/man_domain_checkproxy.php' ),
        array( 'label' => '�͡��ॵ���С�������', 'filename' => 'manual/man_domain_namesever_setting.php' ),
        array( 'label' => 'DNS�쥳���ɤ��Խ�', 'filename' => 'manual/man_domain_dns_setting.php' ),
        array(
            'label' => 'Whois����',
            'filename' => 'manual/man_domain_whois.php',
            'sub' => array(
                array( 'label' => 'Whois�ˤĤ���', 'filename' => 'manual/man_domain_about_whois.php' ),
                array( 'label' => 'Whois��������', 'filename' => 'manual/man_member_setting_whois.php' ),
            )
        ),
        array( 'label' => '�쥸���ȥ��å�', 'filename' => 'manual/man_domain_register_lock.php' ),
        array( 'label' => 'ǧ�ڸ�', 'filename' => 'manual/man_domain_auth_key.php' ),
    ),
    
    /* ----------------------------------------------------------
       �����С��ˤĤ���
    ------------------------------------------------------------- */
    'server' => array(
        array( 'label' => '���Ͱ���', 'filename' => 'manual/man_server_spec.php' ),
        array( 'label' => '����ե�����ˤĤ���', 'filename' => 'manual/man_server_folder.php' ),
        array( 'label' => '̵���ȼ�SSL����', 'filename' => 'manual/man_server_ssl.php' ),
        array( 'label' => 'nginx�ˤĤ���', 'filename' => 'manual/man_server_nginx.php' ),
        array( 'label' => 'HTTP/2�ˤĤ���', 'filename' => 'manual/man_server_http2.php' ),
        array( 'label' => '������������', 'filename' => 'manual/man_server_limit.php' ),
        array(
            'label' => '.htaccess',
            'filename' => 'manual/man_server_htaccess.php',
            'sub' => array(
                array( 'label' => 'Web�����Ȥξ��SSL��', 'filename' => 'manual/man_server_fullssl.php' ),
                array( 'label' => '��Х�����������Ȥο���ʬ����', 'filename' => 'manual/man_server_mobby.php' ),
            )
        ),
        array( 'label' => '�ѡ��ߥå����', 'filename' => 'manual/man_server_permission.php' ),
        array( 'label' => '���顼�ڡ�������', 'filename' => 'manual/man_server_errorpage.php' ),
        array( 'label' => '�Ƽ泌�顼��å�����', 'filename' => 'manual/man_server_error.php' ),
        array( 'label' => 'MIME����', 'filename' => 'manual/man_server_mime.php' ),
        array(
            'label' => 'php.ini����ˤĤ���',
            'filename' => 'manual/man_server_phpini_edit.php',
            'sub' => array(
                array( 'label' => 'php.ini����������ǽ�ʹ���', 'filename' => 'manual/man_server_phpini_setting_item.php' ),
                array( 'label' => 'X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���', 'filename' => 'manual/man_server_phpini_setting_ignore_item.php' ),
            )
        ),
        array(
            'label' => 'PHP�ι�®���ˤĤ���',
            'filename' => array('manual/man_server_php_rapid.php','manual/man_server_php_rapid_oldspec.php'),
            'sub' => array(
                array( 'label' => 'FastCGI�ˤĤ���', 'filename' => 'manual/man_server_php_fastcgi.php' ),
                array( 'label' => 'APC/OPcache�ˤĤ���', 'filename' => 'manual/man_server_php_apc.php' ),
                array( 'label' => 'JIT�ˤĤ���', 'filename' => 'manual/man_server_php_jit.php' ),
            )
        ),
        array(
            'label' => 'Web�ե��������ˤĤ���',
            'sub' => array(
                array( 'label' => 'WordPress�ץ饰����ǤΤ�����', 'filename' => 'manual/man_server_webfont_wp.php' ),
                array( 'label' => 'HTML���ҷ����ǤΤ�����', 'filename' => 'manual/man_server_webfont_html.php' ),
            )
        ),
        array( 'label' => 'X��������졼��(���å�����������졼��)', 'filename' => 'manual/man_server_xaccelerator.php' ),
        array( 'label' => 'XPageSpeed����ˤĤ���', 'filename' => 'manual/man_server_xpagespeed.php' ),
        array( 'label' => 'mod_pagespeed����ˤĤ���', 'filename' => 'manual/man_server_mod_pagespeed.php' ),
        array( 'label' => '�����С�����å�������', 'filename' => 'manual/man_server_cache.php' ),
        array( 'label' => '�֥饦������å�������', 'filename' => 'manual/man_server_expires.php' ),
        array( 'label' => '������ž������', 'filename' => 'manual/man_server_transfer.php' ),
        array( 'label' => '����������������', 'filename' => 'manual/man_server_ipcheck.php' ),
        array( 'label' => '������������', 'filename' => 'manual/man_server_analyzer.php' ),
        array(
            'label' => '����������',
            'filename' => array(
                'manual/man_server_log.php',
                'manual/man_server_log_oldspec.php'
            )
        ),
		array( 'label' => '���顼��', 'filename' => 'manual/man_server_logerror.php' ),
        array( 'label' => 'Maildir�ˤĤ���', 'filename' => 'manual/man_server_maildir.php' ),
        array( 'label' => 'SSH����', 'filename' => 'manual/man_server_ssh.php' ),
        array( 'label' => 'SSH���եȤ�����(Tera Term)', 'filename' => 'manual/man_server_ssh_connect_tera.php' ),
        array( 'label' => 'WordPress�������ƥ�����', 'filename' => 'manual/man_server_wpsecurity.php' ),
        array( 'label' => 'WordPress�ꥫ�Х꡼', 'filename' => 'manual/man_server_wprecovery.php' ),
        array( 'label' => 'WAF����', 'filename' => 'manual/man_server_waf.php' ),
        array( 'label' => 'ads.txt', 'filename' => 'manual/man_server_ads.php' ),
        array( 'label' => '��ư�Хå����åפ���Υǡ�������', 'filename' => 'manual/man_server_download.php' ),
        array( 'label' => '��ư�Хå����åפ���Υǡ�������', 'filename' => 'manual/man_server_restore.php' ),
        array( 'label' => '�꥽������˥���', 'filename' => 'manual/man_server_resource_information.php' ),
        array( 'label' => 'Web������������', 'filename' => 'manual/man_server_security_scan.php', 'biz' => true ),
        array( 'label' => '�����ԥ桼��������', 'filename' => 'manual/man_server_adminuser.php', 'biz' => true ),
    ),
    
    /* ----------------------------------------------------------
       �����С��ץ����ˤĤ���
    ------------------------------------------------------------- */
    'program' => array(
        array(
            'label' => '�ץ������졦���ޥ�ɥѥ�',
            'filename' => array(
                'manual/man_program_soft.php',
                'manual/man_program_soft_oldspec.php'
            )
        ),
        array( 'label' => 'CGI��SSI��PHP', 'filename' => 'manual/man_program_cgi.php' ),
        array( 'label' => 'Cron����', 'filename' => 'manual/man_program_cron.php' ),
        array(
            'label' => 'PHP�ΥС������ˤĤ���',
            'filename' => array(
                'manual/man_program_php_ver.php',
                'manual/man_program_php_ver_oldspec.php'
            )
        )
    ),
    
    /* ----------------------------------------------------------
       ���󥹥ȡ���ˤĤ���
    ------------------------------------------------------------- */
    'install' => array(
        array(
            'label' => 'ư���ǧ�Ѥߥץ����',
            'filename' => array(
                'manual/man_install_outside_program.php',
                'manual/man_install_outside_program_oldspec.php'
            )
        ),
        array(
            'label' => '��ñ���󥹥ȡ���',
            'filename' => 'manual/man_install_auto.php',
            'sub' => array(
			    array( 'label' => 'WordPress ���ܸ���', 'filename' => 'manual/man_install_auto_word.php' ),
				array( 'label' => 'EC-CUBE 4', 'filename' => 'manual/man_install_auto_ec4.php' ),
                array( 'label' => 'PukiWiki', 'filename' => 'manual/man_install_auto_puki.php' ),
            )
        ),
		array(
            'label' => '��ư���󥹥ȡ���',
            'sub' => array(
				array( 'label' => 'WordPress ���ܸ���', 'filename' => 'manual/man_install_word.php' ),
				array( 'label' => 'Zen Cart', 'filename' => 'manual/man_install_zen.php' ),
				array( 'label' => 'Magento2', 'filename' => 'manual/man_install_magento.php' ),
            )
        ),
        array(
            'label' => '�����ȥ��ԡ�',
            'sub' => array(
                array( 'label' => 'WordPress�Υ����ȥ��ԡ��ˤĤ���', 'filename' => 'manual/man_install_copy_word.php' ),
            )
        ),
        array(
            'label' => 'CGI�ġ���',
            'sub' => array(
                array( 'label' => '�᡼��ե�����', 'filename' => 'manual/man_install_cgi_mailform.php' ),
            )
        ),
        array(
            'label' => '¾�ҥ����ӥ�����ΰ�ž',
            'sub' => array(
                array( 'label' => 'WordPress��ñ�ܹ�', 'filename' => 'manual/man_install_transfer_wp.php' ),
                array( 'label' => 'WordPress�ΰ�ž�ˤĤ���', 'filename' => 'manual/man_install_transfer_wordpress.php' ),
            )
        ),
    ),

    /* ----------------------------------------------------------
      WordPress�ơ��ޤˤĤ���
   ------------------------------------------------------------- */
    'theme' => array(
        array( 'label' => '��WordPress�ơ��ޤξҲ�', 'filename' => 'manual/man_wp_theme_introduction.php' ),
        array( 'label' => 'WordPress�ơ��ޤι���������', 'filename' => 'manual/man_wp_theme_purchase.php' ),
        array( 'label' => '���󥹥ȡ���Ѥ�WordPress�˥ơ��ޤ򥤥󥹥ȡ���', 'filename' => 'manual/man_wp_theme_install.php' ),
        array( 'label' => 'WordPress�ơ��ޤ���������', 'filename' => 'manual/man_wp_theme_download.php' ),
    ),
    
    /* ----------------------------------------------------------
       �᡼��ˤĤ���
    ------------------------------------------------------------- */
    'mail' => array(
        array( 'label' => '���Ͱ���', 'filename' => 'manual/man_mail_spec.php' ),
        array( 'label' => '�᡼�륢������Ȥ��ɲ�', 'filename' => 'manual/man_mail_add.php' ),
        array( 'label' => '�᡼�륢������Ȥΰ����Ͽ', 'filename' => 'manual/man_mail_bulkadd.php' ),
        array( 'label' => '�᡼�륢������Ȥ�CSV���������', 'filename' => 'manual/man_mail_account_csv.php' ),
        array( 'label' => '�᡼�륢������Ȥΰ���ѹ�', 'filename' => 'manual/man_mail_bulk_change.php' ),
        array( 'label' => '�᡼�륢������ȤΥѥ�����ѹ�', 'filename' => 'manual/man_mail_change_password.php' ),
        array( 'label' => '�᡼�륢������Ȥ������ѹ�', 'filename' => 'manual/man_mail_change_capacity.php' ),
        array(
            'label' => '�᡼�륽�եȤ�����',
            'filename' => 'manual/man_mail_setting.php',
            'sub' => array(
                array('label' => 'Outlook for Windows / Outlook (new)', 'filename' => 'manual/man_mail_setting_olwin.php'),
                array(
					'label' => 'WindowsLive�᡼��',
					'filename' => array(
						'manual/man_mail_setting_wlm.php',
						'manual/man_mail_setting_wlm_not.php'
					)
				),
				array( 'label' => 'Windows10�᡼��', 'filename' => 'manual/man_mail_setting_windows10.php' ),
                array(
                    'label' => 'Windows8�᡼��',
                    'filename' => array(
                        'manual/man_mail_setting_windows8.php',
                        'manual/man_mail_setting_windows8_not_mail_app.php'
                    )
                ),
                array(
                    'label' => 'Mozilla Thunderbird(Ver31��)',
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
					'label' => 'Mac�᡼��(OS X)',
					'filename' => array(
						 'manual/man_mail_setting_mac_osx.php',
						 'manual/man_mail_setting_mac_osx_not.php'
					)
				),
                array(
					'label' => 'iPhone�᡼��',
					'filename' => array(
						'manual/man_mail_setting_iphone.php',
						'manual/man_mail_setting_iphone_old.php',
						'manual/man_mail_setting_iphone_not.php'
					)
				),
                array(
					'label' => 'iPad�᡼��',
					'filename' => array(
						'manual/man_mail_setting_ipad.php',
						'manual/man_mail_setting_ipad_not.php'
					)
				),
				array('label' => 'Gmail', 'filename' => 'manual/man_mail_setting_gmail.php'),
            )
        ),
        array( 'label' => '�᡼��󥰥ꥹ�ȤˤĤ���', 'filename' => 'manual/man_mail_mailinglist.php' ),
        array( 'label' => '�᡼��ޥ�����ˤĤ���', 'filename' => 'manual/man_mail_mailmagazine.php' ),
        array( 'label' => '���ǥ᡼��ե��륿����', 'filename' => 'manual/man_mail_spam_setting.php' ),
        array( 'label' => '��ư��������', 'filename' => 'manual/man_mail_mailreply.php' ),
        array( 'label' => '�᡼��ο���ʬ��', 'filename' => 'manual/man_mail_sorting.php' ),
        array( 'label' => 'SMTPǧ�ڤι񳰥���������������', 'filename' => 'manual/man_mail_jpcheck.php' ),
        array( 'label' => 'OP25B�ˤĤ���', 'filename' => 'manual/man_mail_op25b.php' ),
        array( 'label' => 'ž������', 'filename' => 'manual/man_mail_transfer.php' ),
        array( 'label' => 'DKIM����', 'filename' => 'manual/man_mail_dkim.php' ),
        array( 'label' => 'SPF����', 'filename' => 'manual/man_mail_spf.php' ),
        array( 'label' => 'DMARC����', 'filename' => 'manual/man_mail_dmarc.php' ),
    ),
    
    /* ----------------------------------------------------------
       FTP�ˤĤ���
    ------------------------------------------------------------- */
    'ftp' => array(
        array( 'label' => '���Ͱ���', 'filename' => 'manual/man_ftp_spec.php' ),
        array( 'label' => 'FTP��������Ȥ��ɲ�', 'filename' => 'manual/man_ftp_add.php' ),
        array(
            'label' => 'FTP���եȤ�����',
            'filename' => 'manual/man_ftp_setting.php',
            'sub' => array(
                array( 'label' => 'FFFTP������', 'filename' => 'manual/man_ftp_ffftp_setting.php' ),
                array( 'label' => 'FileZilla������', 'filename' => 'manual/man_ftp_filezilla_setting.php' ),
				array( 'label' => '�ۡ���ڡ������ӥ����20������', 'filename' => 'manual/man_ftp_hpb_setting.php' ),
				array( 'label' => 'Dreamweaver CC������', 'filename' => 'manual/man_ftp_dream_setting.php' ),
				array( 'label' => 'BiND for WebLiFE 8������', 'filename' => 'manual/man_ftp_bind_setting.php' ),
				array( 'label' => 'Cyberduck������', 'filename' => 'manual/man_ftp_cyberduck_setting.php' ),
            )
        ),
        array( 'label' => '.ftpaccess', 'filename' => 'manual/man_ftp_ftpaccess.php' ),
        array( 'label' => 'FTP��������', 'filename' => 'manual/man_ftp_id.php' ),
        array( 'label' => 'FTP�����ǧ���', 'filename' => 'manual/man_ftp_info_check.php' ),
    ),
    
    /* ----------------------------------------------------------
       �ǡ����١����ˤĤ���
    ------------------------------------------------------------- */
    'database' => array(
        array( 'label' => '���Ͱ���', 'filename' => 'manual/man_db_spec.php' ),
        array( 'label' => 'MySQL����', 'filename' => 'manual/man_db_setting.php' ),
        array( 'label' => '��ư�Хå����åפ���Υǡ�������', 'filename' => 'manual/man_db_download.php'),
		array( 'label' => '���ߤ�MySQL����������', 'filename' => 'manual/man_db_man_backup.php'),
        array( 'label' => 'phpMyAdmin', 'filename' => 'manual/man_db_myadmin.php' ),
        array( 'label' => 'MySQL�ܹԥġ���', 'filename' => 'manual/man_db_shift_tool.php' ),
        array( 'label' => '��ư�Хå����åפ��������', 'filename' => 'manual/man_db_restore.php' ),
    ),
    
    /* ----------------------------------------------------------
       �����ġ���ˤĤ���
    ------------------------------------------------------------- */
    'tool' => array(
        array( 'label' => 'XServer���������', 'filename' => 'manual/man_tool_info.php' ),
		array( 'label' => '���å��������С��������', 'filename' => 'manual/man_tool_xserver.php' ),
        array( 'label' => '�����С��ѥͥ�', 'filename' => 'manual/man_tool_server.php' ),
        array( 'label' => '�ե�����ޥ͡�����', 'filename' => 'manual/man_tool_file.php' ),
        array(
            'label' => '�᡼������ġ���',
            'sub' => array(
                array( 'label' => '�᡼��ѥͥ�', 'filename' => 'manual/man_tool_mail_panel.php' ),
                array(
                    'label' => 'WEB�᡼��',
                    'filename' => array(
                        'manual/man_tool_mail.php',
                        'manual/man_tool_mail_old.php'
                    )
                ),
                array(
                    'label' => 'WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)',
                    'filename' => array(
                        'manual/man_tool_mail_sp.php',
                        'manual/man_tool_mail_sp_old.php'
                    )
                ),
            )
        ),
        array( 'label' => 'AI����åȤˤĤ���', 'filename' => 'manual/man_tool_aichat.php' ),
    ),

    /* ----------------------------------------------------------
        �ȥ�֥뤫�������ˤĤ���
    ------------------------------------------------------------- */
    'malicious' => array(
        array('label' => '�᡼��ե�������Ѥ����������������ˤĤ���', 'filename' => 'manual/man_malicious_mailform.php'),
        array('label' => '�᡼�륢������ȤΥѥ���ɥ���å��ˤĤ���', 'filename' => 'manual/man_malicious_password_crack.php'),
        array('label' => '�������������ʥե�����β����������ʥե��������֡ˤˤĤ���', 'filename' => 'manual/man_malicious_access.php'),
        array('label' => 'XServer��������ȡ������С��ѥͥ�ؤ�����������ˤĤ���', 'filename' => 'manual/man_malicious_login.php'),
    ),
    
    /* ----------------------------------------------------------
       �Ѹ콸
    ------------------------------------------------------------- */
    'terms' => array(
        array( 'label' => '�Ѹ콸', 'filename' => 'manual/terms.php' ),
    ),
);


/* ----------------------------------------------------------
    ���ߤΥڡ�������Ƚ��
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
    �ƥꥹ�Ȥ���HTMLʸ������ä��֤�
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
            $biz_ico = '<span class="ico_biz">�ӥ��ͥ��ץ��</span>';
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
    HTML����
------------------------------------------------------------- */
foreach($sidenav_list as $key => $value){
    $sidenav_list[$key]['html'] = create_sidenav_list($sidenav_list[$key]);
}
$sidenav_list['top'] = array( 'html' => '<a class="side-menu_label" href="'.$SITE_URL.'manual/index.php"><span class="side-menu_label_inner">�ޥ˥奢��ȥå�</span></a>' );


/* ----------------------------------------------------------
    ���ߤΥ��ƥ���
------------------------------------------------------------- */
$current_category_name = '';
if( is_subnav_current('manual/index.php') || is_subnav_current('searcher/index.cgi')){
    $sidenav_list['top']['html'] = '<a class="side-menu_label is-current" href="'.$SITE_URL.'manual/index.php"><span class="side-menu_label_inner">�ޥ˥奢��ȥå�</span></a>';
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
        <img class="hover" src="<?php print $SITE_URL; ?>img/manual/bnr_wpblog.png" alt="�鿴�ԤǤ�狼��WordPress�֥��λϤ���">
    </a>
</aside>

<aside class="side-box">
    <h3 class="side-box_ttl">�ޥ˥奢��θ���</h3>
    <div class="side-box_body">
        <script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
        <div class="gcse-searchbox-only"></div>
    </div>
</aside>

<noscript>
    <style>.side-menu_body { display: block; }</style>
</noscript>
<aside class="side-box">
    <h3 class="side-box_ttl">�ޥ˥奢���˥塼</h3>
    <div class="side-box_body">
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list['top']['html']; ?>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'order') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">���������ߤˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['order']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'domain') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�ɥᥤ��ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['domain']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'server') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�����С��ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['server']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'program') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�����С��ץ����ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['program']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'install') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">���󥹥ȡ���ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['install']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'theme') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">WordPress�ơ��ޤˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['theme']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'mail') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�᡼��ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['mail']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'ftp') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">FTP�ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['ftp']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'database') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�ǡ����١����ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['database']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'tool') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�����ġ���ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['tool']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'malicious') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�ȥ�֥뤫�������ˤĤ���</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['malicious']['html']; ?>
                </ul>
            </li>
            <li class="side-menu_item side-menu_accordion<?php if($current_category_name === 'terms') print ' is-open';?>">
                <span class="side-menu_label side-menu_accordion_label"><span class="side-menu_label_inner">�Ѹ콸</span></span>
                <ul class="side-menu_body side-menu_accordion_body">
                    <?php print $sidenav_list['terms']['html']; ?>
                </ul>
            </li>
        </ul>
    </div>
</aside>