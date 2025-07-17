<?php
class TopicPath {
    protected $SITE_URL;
    public function __construct($SITE_URL){
        $this -> SITE_URL = $SITE_URL;
    }
    public function make_topicpath(){
        $site_url = $this -> SITE_URL;
        $PAGE_LIST = array(
            'label' => '�ۡ���',
            'url' => 'index.php',
            'child' => array(
                array(
                    'label' => '��Ĺ',
                    'url' => 'feature/',
                    'child' => array(
                        array('label' => '��Ĺ����', 'url' => 'feature/index.php'),
                        array('label' => '����ץ�������η�', 'url' => 'feature/pricing_plan.php'),
                        array('label' => 'WordPress���Ĥ˶���', 'url' => 'feature/wordpress_reasons.php'),
                        array('label' => '�͵��ơ���Cocoon��ȯ����', 'url' => 'feature/wordpress.php'),
                        array('label' => '�����ͤ���', 'url' => 'feature/feedback.php'),
                        array('label' => '�ƥ��ȥ�����', 'url' => 'feature/testsite.php'),
						array('label' => '���ѻ���', 'url' => 'feature/case.php'),
                    )
                ),
                array(
                    'label' => '��ǽ',
                    'url' => 'functions/',
                    'child' => array(
                        array('label' => '��ǽ����', 'url' => 'functions/index.php'),
                        array('label' => 'X��������졼��', 'url' => 'functions/xaccelerator.php'),
                        array('label' => 'XPageSpeed', 'url' => 'functions/xpagespeed.php'),
                        array('label' => '�����С��ѥͥ�', 'url' => 'functions/service_server.php'),
                        array('label' => 'WordPress�ơ���', 'url' => 'functions/wptheme.php'),
                        array(
                            'label' => '�ȼ�SSL',
                            'url' => 'functions/service_ssl.php',
                            'child' => array(
                                array('label' => '��ԥå�SSL', 'url' => 'functions/ssl/rapidssl.php'),
                                array('label' => '�����Х륵���� �����å�ǧ��SSL', 'url' => 'functions/ssl/globalsign.php'),
                                array('label' => '�����ȥ饹�� �����å�SSL�ץ�ߥ���', 'url' => 'functions/ssl/geotrust.php'),
                                array('label' => '���饦��SSL', 'url' => 'functions/ssl/coressl.php'),
                                array('label' => '���饦�ɥ����奢 ���ԡ���ǧ��SSL', 'url' => 'functions/ssl/securecore.php'),
                                array('label' => '���饦�ɥ����奢 ���ǧ��SSL', 'url' => 'functions/ssl/securecore_ov.php'),
                                array('label' => '���饦�ɥ����奢 EV SSL', 'url' => 'functions/ssl/securecore_ev.php'),
                                array('label' => '�ǥ������� �����奢��������ID', 'url' => 'functions/ssl/digicert_ov.php'),
                                array('label' => '�ǥ������� �����奢��������ID EV', 'url' => 'functions/ssl/digicert_ev.php'),
                                array('label' => 'SSL������Ȥ�','url' => 'functions/ssl/about_ssl.php'),
                                array('label' => '̵���ȼ�SSL','url' => 'functions/ssl/freessl.php')
                            ),
                        ),
                        array('label' => '�Хå����å�','url' => 'functions/service_backup.php'),
                        array('label' => 'Web�ե����','url' => 'functions/service_webfont.php','child' => array(array('label' => '���θ��ܰ���', 'url' => 'functions/service_webfont_shotai.php'))),
                        array('label' => 'WordPress�ơ���', 'url' => 'feature/wptheme.php'),
                    )
                ),
                array(
                    'label' => '����',
                    'url' => 'price/',
                    'child' => array(
                        array('label' => '����ץ��', 'url' => 'price/index.php'),
                        array('label' => '�ȼ�SSL', 'url' => 'price/price_ssl.php'),
                        array('label' => '�ɥᥤ���̤ι��������2018ǯ12��17�������˼��������ɥᥤ���', 'url' => 'price/update_domain.php'),
                        array('label' => '���ꤪ�ޤ������ݡ���','url' => 'price/service_daiko.php'),
                        array('label' => '�����С���ž���','url' => 'price/service_server_daiko.php'),
                        array(
                            'label' => '����ʧ����ˡ',
                            'url' => 'price/price_payment_method.php',
                            'child' => array(
                                array('label' => '����ʧ����ˡ����', 'url' => 'price/price_payment_method.php'),
                                array('label' => '���쥸�åȥ�����', 'url' => 'price/price_payment_method_credit.php'),
                                array('label' => '��Կ���', 'url' => 'price/price_payment_method_bank.php'),
                                array('label' => '�ڥ�����', 'url' => 'price/price_payment_method_pay_easy.php'),
                                array('label' => '����ʧ���ʥڥ��ǥ���', 'url' => 'price/price_payment_method_paidy.php'),
                                array('label' => '�ץ�ڥ���', 'url' => 'price/price_payment_method_prepaid.php'),
                                array('label' => '���֥󥤥�֥�', 'url' => 'price/price_payment_method_seven.php'),
                                array('label' => '������', 'url' => 'price/price_payment_method_lawson.php'),
                                array('label' => '�ǥ��꡼��ޥ���', 'url' => 'price/price_payment_method_daily.php'),
                                array('label' => '�ߥ˥��ȥå�', 'url' => 'price/price_payment_method_mini.php'),
                                array('label' => '�ե��ߥ꡼�ޡ���', 'url' => 'price/price_payment_method_family.php'),
                                array('label' => '���������ޡ���', 'url' => 'price/price_payment_method_seicomart.php'),
                                array('label' => '��������K���󥯥�', 'url' => 'price/price_payment_method_circle.php'),
                                array('label' => '���ν�ȯ�ԤˤĤ���', 'url' => 'price/price_payment_method_receipt.php'),
                            ),
                        ),
                    )
                ),
								array(
										'label' => '�ɥᥤ��',
										'url' => 'domain/index.php'
								),
                array(
                    'label' => '�����ץ��',
                    'url' => 'student/index,php'
                ),
                array(
                    'label' => '���������ߤ�ή��',
                    'url' => 'order/',
                    'child' => array(
												array('label' => '�����С���������������', 'url' => 'order/index.php'),
												array('label' => '�ɥᥤ�󿷵�����', 'url' => 'order/order_new_domain.php'),
												array('label' => '�����С���ž', 'url' => 'order/order_transfer_server.php'),
												array('label' => '�ɥᥤ��ܴ�', 'url' => 'order/order_transfer_domain.php'),
                        array(
                            'label' => '�ɥᥤ������ե�����',
                            'url' => 'order/whois.php'
                        ),
                    )
                ),
                array(
                    'label' => '�ޥ˥奢��',
                    'url' => 'manual/index.php',
                    'child' => array(
                        array(
                            'label' => '�ޥ˥奢��ȥå�',
                            'url' => 'manual/index.php',
                        ),
						array('label' => '���å��������С��ǥ֥���Ϥ�褦���鿴�ԤǤ�狼��WordPress�֥��λϤ���', 'url' => 'manual/man_how_to_start_wpblog.php'),

                        array(
                            'label' => '���ץ�����ȼ�SSL�Τ���������', 'url' => 'manual/man_order_ssl.php',
                            'child' => array(
                                array(
                                    'label' => '�ɥᥤ��ǧ��SSL�ο�����³��',
                                    'url' => 'manual/man_order_ssl_domain.php'
                                ),
                                array(
                                    'label' => '���ǧ��SSL�ο�����³��',
                                    'url' => 'manual/man_order_ssl_ov.php'
                                ),
                                array(
                                    'label' => 'EV SSL�ο�����³��',
                                    'url' => 'manual/man_order_ssl_ev.php'
                                ),
                                array(
                                    'label' => 'DUNS�ʥ�С��μ�����ˡ',
                                    'url' => 'manual/man_order_ssl_duns.php'
                                ),
                            ),
                        ),


                        array('label' => '����ǽ�᡼��ե��륿��ͭ�����ץ����', 'url' => 'manual/man_order_cloudmark.php'),
                        array('label' => '���ꤪ�ޤ������ݡ���', 'url' => 'manual/man_order_daiko.php'),
                        array('label' => '�����С���ž���', 'url' => 'manual/man_order_server_daiko.php'),
                        array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ', 'url' => 'manual/man_order_present_domain.php'),
                        array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ�ʥ����ڡ�����ŵ��', 'url' => 'manual/man_order_campaign_domain.php'),
                        array('label' => '�ȼ��ɥᥤ��1ǯ̵����ŵ', 'url' => 'manual/man_order_oneyear_domain.php'),
                        array('label' => '����å���Хå���ŵ', 'url' => 'manual/man_order_campaign_cashback.php'),
						array('label' => '��ͧã�Ҳ�ץ����', 'url' => 'manual/man_order_refer_friend_program.php'),
                        array('label' => '�ץ����ѹ�', 'url' => 'manual/man_order_change_plan.php'),
                        array('label' => '����Τ���ʧ��', 'url' => 'manual/man_order_pay_etc.php'),
                        array('label' => '����ӥ˥��󥹥��ȥ�ʧ��', 'url' => 'manual/man_order_pay_method_convenient.php'),
                        array('label' => '���쥸�åȥ����ɷ��', 'url' => 'manual/man_order_pay_method_credit.php'),
                        array('label' => '��Կ������', 'url' => 'manual/man_order_pay_method_bank.php'),
                        array('label' => '�ڥ��������', 'url' => 'manual/man_order_pay_method_pay_easy.php'),
                        array('label' => '����ʧ���ʥڥ��ǥ��˷��', 'url' => 'manual/man_order_pay_method_paidy.php'),
                        array('label' => '�ץ�ڥ��ɷ��', 'url' => 'manual/man_order_pay_method_prepaid.php'),
                        array(
                            'label' => '��ư��������', 'url' => 'manual/man_order_pay_method_autopay.php',
                            'child' => array(
                                array(
                                    'label' => '���쥸�åȥ����ɤˤ�뼫ư��������',
                                    'url' => 'manual/man_order_pay_method_autopay_credit.php'
                                ),
                                array(
                                    'label' => '����ʧ���ʥڥ��ǥ��ˤˤ�뼫ư��������',
                                    'url' => 'manual/man_order_pay_method_autopay_paidy.php'
                                ),
                                array(
                                    'label' => '�ץ�ڥ��ɤˤ�뼫ư��������',
                                    'url' => 'manual/man_order_pay_method_autopay_prepaid.php'
                                ),
                            ),
                        ),
                        array('label' => '��ư���������Ԥ������κ�����', 'url' => 'manual/man_order_pay_method_autopay_resetting.php'),
                        array('label' => '����ʧ�����', 'url' => 'manual/man_order_pay_report.php'),
                        array('label' => '����ʧ������', 'url' => 'manual/man_order_pay_history.php'),
                        array('label' => '����񡦼��ν񡦸��ѽ�', 'url' => 'manual/man_order_pay_bill.php'),
                        array('label' => '�����ӥ�����������', 'url' => 'manual/man_order_addition.php'),
                        array('label' => '�Ƽ�ID�ˤĤ���', 'url' => 'manual/man_order_about_id.php'),
                        array('label' => '��Ͽ����ˤĤ���', 'url' => 'manual/man_order_change_id.php'),
                        array('label' => '��������ȡ����������', 'url' => 'manual/man_order_user_merge.php'),
                        array(
                            'label' => '�������С���ñ�ܹ�',
                            'url' => 'manual/man_order_servertransfer_intro.php',
                            'child' => array(
                                array(
                                    'label' => '�����Ѽ��',
                                    'url' => 'manual/man_order_servertransfer_flow.php'
                                ),
                                array(
                                    'label' => '���;ܺ�',
                                    'url' => 'manual/man_order_servertransfer_detail.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'XServer�ӥ��ͥ��ؤ��ѹ�',
                            'url' => 'manual/man_order_servicetransfer_intro.php',
                            'child' => array(
                                array(
                                    'label' => '�����Ѽ��',
                                    'url' => 'manual/man_order_servicetransfer_flow.php'
                                ),
                                array(
                                    'label' => '���;ܺ�',
                                    'url' => 'manual/man_order_servicetransfer_detail.php'
                                ),
                            ),
                        ),
                        array('label' => '�Ƽ�ѥ���ɤκ�����', 'url' => 'manual/man_order_reissue.php'),
						array('label' => '���ץ�����ȼ�SSL�κ�ȯ��', 'url' => 'manual/man_order_sslreissue.php'),
                        array('label' => '���ʳ�ǧ������', 'url' => 'manual/man_order_twostepauth.php'),
                        array('label' => '�Կ��ʥ��������ǧ��', 'url' => 'manual/man_order_loginsecurity.php'),
                        array('label' => '̵��������֤ˤĤ���', 'url' => 'manual/man_order_free_trial.php'),
                        array('label' => '�������ߤμ��ä�', 'url' => 'manual/man_order_cancel.php'),
                        array('label' => '����', 'url' => 'manual/man_order_quit.php'),
                        array('label' => '�軰�Ԥˤ��������Ϥ�����', 'url' => 'manual/man_order_transfer_usage_rights.php'),
                        array('label' => '������̾�����ѹ�������', 'url' => 'manual/man_order_name_change.php'),
                        array('label' => '�ɥᥤ�����', 'url' => 'manual/man_order_domain_transfer.php'),
                        array('label' => '���Ͱ���', 'url' => 'manual/man_domain_spec.php'),
                        array('label' => '�ɥᥤ��ΰܴɤˤĤ���', 'url' => 'manual/man_domain_transfer.php'),
                        array('label' => '�����ɥᥤ������', 'url' => 'manual/man_domain_how_to_recovery.php'),
                        array('label' => '�ɥᥤ������', 'url' => 'manual/man_domain_setting.php'),
                        array('label' => '�ɥᥤ��ν����', 'url' => 'manual/man_domain_reset.php'),
                        array('label' => '���֥ɥᥤ������', 'url' => 'manual/man_domain_subdomain_setting.php'),
                        array('label' => '�ɥᥤ��ǧ��', 'url' => 'manual/man_domain_authenticate.php'),
                        array('label' => 'ư���ǧ�ˤĤ���', 'url' => 'manual/man_domain_checkproxy.php'),
                        array('label' => '�͡��ॵ���С�������', 'url' => 'manual/man_domain_namesever_setting.php'),
                        array(
                            'label' => 'DNS�쥳���ɤ��Խ�',
                            'url' => 'manual/man_domain_dns_setting.php',
                            'child' => array(
                                array(
                                    'label' => 'Google Workspace(��G Suite)�򤪻Ȥ������������',
                                    'url' => 'manual/man_domain_dns_setting_google_apps.php'
                                ),
                                array(
                                    'label' => '�����֥������ꤹ����',
                                    'url' => 'manual/man_domain_dns_setting_blog.php'
                                ),
                                array(
                                    'label' => '�����᡼�륵���С��򤪻Ȥ������������',
                                    'url' => 'manual/man_domain_dns_setting_mail_server.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'Whois����',
                            'url' => 'manual/man_domain_whois.php',
                            'child' => array(
                                array(
                                    'label' => 'Whois�ˤĤ���',
                                    'url' => 'manual/man_domain_about_whois.php'
                                ),
                                array(
                                    'label' => 'Whois��������',
                                    'url' => 'manual/man_member_setting_whois.php'
                                ),
                            ),
                        ),
                        array('label' => '�쥸���ȥ��å�', 'url' => 'manual/man_domain_register_lock.php'),
                        array('label' => 'ǧ�ڸ�', 'url' => 'manual/man_domain_auth_key.php'),
                        array('label' => '���Ͱ���', 'url' => 'manual/man_server_spec.php'),
                        array('label' => '����ե�����ˤĤ���', 'url' => 'manual/man_server_folder.php'),
                        array('label' => '̵���ȼ�SSL����', 'url' => 'manual/man_server_ssl.php'),
                        array('label' => 'nginx�ˤĤ���', 'url' => 'manual/man_server_nginx.php'),
                        array('label' => 'HTTP/2�ˤĤ���', 'url' => 'manual/man_server_http2.php'),
                        array('label' => '������������', 'url' => 'manual/man_server_limit.php'),
                        array(
                            'label' => '.htaccess',
                            'url' => 'manual/man_server_htaccess.php',
                            'child' => array(
                                array(
                                    'label' => 'Web�����Ȥξ��SSL��',
                                    'url' => 'manual/man_server_fullssl.php'
                                ),
                                array(
                                    'label' => '��Х�����������Ȥο���ʬ����',
                                    'url' => 'manual/man_server_mobby.php'
                                ),
                            ),
                        ),
                        array('label' => '�ѡ��ߥå����', 'url' => 'manual/man_server_permission.php'),
                        array('label' => '���顼�ڡ�������', 'url' => 'manual/man_server_errorpage.php'),
                        array('label' => '�Ƽ泌�顼��å�����', 'url' => 'manual/man_server_error.php'),
                        array('label' => 'MIME����', 'url' => 'manual/man_server_mime.php'),
                        array('label' => 'php.ini����ˤĤ���', 'url' => 'manual/man_server_phpini_edit.php'),
                        array(
                            'label' => 'php.ini����ˤĤ���',
                            'url' => 'manual/man_server_phpini_edit.php',
                            'child' => array(
                                array(
                                    'label' => 'php.ini����������ǽ�ʹ��ܤˤĤ���',
                                    'url' => 'manual/man_server_phpini_setting_item.php'
                                ),
                                array(
                                    'label' => 'X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���',
                                    'url' => 'manual/man_server_phpini_setting_ignore_item.php'
                                ),
                            ),
                        ),
                        array(
                            'label' => 'PHP�ι�®���ˤĤ���',
                            'url' => 'manual/man_server_php_rapid.php',
                            'child' => array(
                                array(
                                    'label' => 'FastCGI�ˤĤ���',
                                    'url' => 'manual/man_server_php_fastcgi.php'
                                ),
                                array(
                                    'label' => 'APC/OPcache�ˤĤ���',
                                    'url' => 'manual/man_server_php_apc.php'
                                ),
                                array(
                                    'label' => 'JIT�ˤĤ���',
                                    'url' => 'manual/man_server_php_jit.php'
                                ),
                            ),
                        ),
                        array('label' => 'PHP�ι�®���ˤĤ���','url' => 'manual/man_server_php_rapid_oldspec.php'),
                        array('label' => 'X��������졼��(���å�����������졼��)', 'url' => 'manual/man_server_xaccelerator.php'),
                        array('label' => 'XPageSpeed����ˤĤ���', 'url' => 'manual/man_server_xpagespeed.php'),
                        array('label' => 'mod_pagespeed����ˤĤ���', 'url' => 'manual/man_server_mod_pagespeed.php'),
                        array('label' => '�����С�����å�������', 'url' => 'manual/man_server_cache.php'),
                        array('label' => '�֥饦������å�������', 'url' => 'manual/man_server_expires.php'),
                        array('label' => '������ž������', 'url' => 'manual/man_server_transfer.php'),
                        array('label' => '����������������', 'url' => 'manual/man_server_ipcheck.php'),
                        array('label' => '������������', 'url' => 'manual/man_server_analyzer.php'),
                        array('label' => '����������', 'url' => 'manual/man_server_log.php'),
                        array('label' => '��', 'url' => 'manual/man_server_log_oldspec.php'),
                        array('label' => '���顼��', 'url' => 'manual/man_server_logerror.php'),
                        array('label' => 'Maildir�ˤĤ���', 'url' => 'manual/man_server_maildir.php'),
                        array('label' => 'SSH����', 'url' => 'manual/man_server_ssh.php'),
                        array('label' => 'SSH���եȤ�����(Tera Term)', 'url' => 'manual/man_server_ssh_connect_tera.php'),
                        array('label' => 'WordPress�������ƥ�����', 'url' => 'manual/man_server_wpsecurity.php'),
                        array('label' => 'WordPress�ꥫ�Х꡼', 'url' => 'manual/man_server_wprecovery.php'),
                        array('label' => 'WAF����', 'url' => 'manual/man_server_waf.php'),
                        array('label' => 'Web������������', 'url' => 'manual/man_server_security_scan.php'),
                        array('label' => 'ads.txt', 'url' => 'manual/man_server_ads.php'),
                        array('label' => '�����ԥ桼��������', 'url' => 'manual/man_server_adminuser.php'),
                        array('label' => '��ư�Хå����åפ���Υǡ�������', 'url' => 'manual/man_server_download.php'),
                        array('label' => '��ư�Хå����åפ���Υǡ�������', 'url' => 'manual/man_server_restore.php'),
                        array('label' => '�꥽������˥���', 'url' => 'manual/man_server_resource_information.php'),
                        array(
                            'label' => 'HTML���ҷ����ǤΤ�����',
                            'url' => 'manual/man_server_webfont_html.php'
                        ),
                        array(
                            'label' => 'WordPress�ץ饰����ǤΤ�����',
                            'url' => 'manual/man_server_webfont_wp.php'
                        ),
                        array('label' => '�ץ������졦���ޥ�ɥѥ�', 'url' => 'manual/man_program_soft.php'),
                        array('label' => '�ץ������졦���ޥ�ɥѥ�', 'url' => 'manual/man_program_soft_oldspec.php'),
                        array('label' => 'CGI��SSI��PHP', 'url' => 'manual/man_program_cgi.php'),
                        array('label' => 'Cron����', 'url' => 'manual/man_program_cron.php'),
                        array('label' => 'PHP�ΥС������ˤĤ���', 'url' => 'manual/man_program_php_ver.php'),
                        array('label' => 'PHP�ΥС������ˤĤ���', 'url' => 'manual/man_program_php_ver_oldspec.php'),
                        array('label' => 'ư���ǧ�Ѥߥץ����', 'url' => 'manual/man_install_outside_program.php'),
                        array('label' => 'ư���ǧ�Ѥߥץ����', 'url' => 'manual/man_install_outside_program_oldspec.php'),
                        array(
                            'label' => '��ñ���󥹥ȡ���',
                            'url' => 'manual/man_install_auto.php',
                            'child' => array(
                                array('label' => 'Movable Type Open Source', 'url' => 'manual/man_install_auto_mt.php'),
                                array('label' => 'MTOS �������ȥ��åץ�����', 'url' => 'manual/man_install_mt_guide.php'),
                                array('label' => 'EC-CUBE 3', 'url' => 'manual/man_install_auto_ec.php'),
                                array('label' => 'EC-CUBE 4', 'url' => 'manual/man_install_auto_ec4.php'),
                                array('label' => 'XOOPS Cube', 'url' => 'manual/man_install_auto_xoops.php'),
                                array('label' => 'WordPress ���ܸ���', 'url' => 'manual/man_install_auto_word.php'),
                                array('label' => 'PukiWiki', 'url' => 'manual/man_install_auto_puki.php'),
                            ),
                        ),
                        array('label' => 'WordPress ���ܸ���', 'url' => 'manual/man_install_word.php'),
                        array('label' => 'XOOPS Cube', 'url' => 'manual/man_install_xoops.php'),
                        array('label' => 'Zen Cart', 'url' => 'manual/man_install_zen.php'),
                        array('label' => 'Magento2', 'url' => 'manual/man_install_magento.php'),
                        array('label' => 'WordPress�Υ����ȥ��ԡ��ˤĤ���', 'url' => 'manual/man_install_copy_word.php'),
                        array('label' => '�᡼��ե�����', 'url' => 'manual/man_install_cgi_mailform.php'),
                        array('label' => 'WordPress��ñ�ܹ�', 'url' => 'manual/man_install_transfer_wp.php'),
                        array('label' => 'WordPress�ΰ�ž�ˤĤ���', 'url' => 'manual/man_install_transfer_wordpress.php'),
                        array('label' => '���Ͱ���', 'url' => 'manual/man_mail_spec.php'),
                        array('label' => '�᡼�륢������Ȥ��ɲ�', 'url' => 'manual/man_mail_add.php'),
                        array('label' => '�᡼�륢������Ȥΰ����Ͽ', 'url' => 'manual/man_mail_bulkadd.php'),
                        array('label' => '�᡼�륢������Ȥ�CSV���������', 'url' => 'manual/man_mail_account_csv.php'),
                        array('label' => '�᡼�륢������Ȥΰ���ѹ�', 'url' => 'manual/man_mail_bulk_change.php'),
                        array('label' => '�᡼�륢������ȤΥѥ�����ѹ�', 'url' => 'manual/man_mail_change_password.php'),
                        array('label' => '�᡼�륢������Ȥ������ѹ�', 'url' => 'manual/man_mail_change_capacity.php'),
                        array(
                            'label' => '�᡼�륽�եȤ�����',
                            'url' => 'manual/man_mail_setting.php',
                            'child' => array(
                                array('label' => 'Outlook for Windows / Outlook (new)', 'url' => 'manual/man_mail_setting_olwin.php'),
                                array('label' => 'WindowsLive�᡼��', 'url' => 'manual/man_mail_setting_wlm.php'),
                                array('label' => 'WindowsLive�᡼��', 'url' => 'manual/man_mail_setting_wlm_not.php'),
                                array('label' => 'Windows10�᡼��', 'url' => 'manual/man_mail_setting_windows10.php'),
                                array('label' => 'Windows8�᡼��', 'url' => 'manual/man_mail_setting_windows8.php'),
                                array('label' => 'Windows8�᡼��', 'url' => 'manual/man_mail_setting_windows8_not_mail_app.php'),
                                array('label' => 'Mozilla Thunderbird(Ver31��)', 'url' => 'manual/man_mail_setting_tb_31.php'),
                                array('label' => 'Mozilla Thunderbird(Ver31��)', 'url' => 'manual/man_mail_setting_tb_31_not.php'),
                                array('label' => 'Outlook 2019(Outlook 365)', 'url' => 'manual/man_mail_setting_ol2019.php'),
                                array('label' => 'Outlook 2016', 'url' => 'manual/man_mail_setting_ol2016.php'),
                                array('label' => 'Outlook 2013', 'url' => 'manual/man_mail_setting_ol2013.php'),
                                array('label' => 'Outlook 2013', 'url' => 'manual/man_mail_setting_ol2013_not.php'),
                                array('label' => 'Outlook 2010', 'url' => 'manual/man_mail_setting_ol2010.php'),
                                array('label' => 'Outlook 2010', 'url' => 'manual/man_mail_setting_ol2010_not.php'),
                                array('label' => 'Outlook 2007', 'url' => 'manual/man_mail_setting_ol.php'),
                                array('label' => 'Outlook 2007', 'url' => 'manual/man_mail_setting_ol_not.php'),
                                array('label' => 'Becky! Internet Mail', 'url' => 'manual/man_mail_setting_becky.php'),
                                array('label' => 'Mac�᡼��(OS X)', 'url' => 'manual/man_mail_setting_mac_osx.php'),
                                array('label' => 'Mac�᡼��(OS X)', 'url' => 'manual/man_mail_setting_mac_osx_not.php'),
                                array('label' => 'iPhone�᡼��', 'url' => 'manual/man_mail_setting_iphone.php'),
                                array('label' => '��iPhone�᡼��', 'url' => 'manual/man_mail_setting_iphone_not.php'),
                                array('label' => '��iPhone�᡼��', 'url' => 'manual/man_mail_setting_iphone_old.php'),
                                array('label' => 'iPad�᡼��', 'url' => 'manual/man_mail_setting_ipad.php'),
                                array('label' => 'iPad�᡼��', 'url' => 'manual/man_mail_setting_ipad_not.php'),
                                array('label' => 'Gmail', 'url' => 'manual/man_mail_setting_gmail.php'),
                            ),
                        ),
                        array('label' => '��WordPress�ơ��ޤξҲ�', 'url' => 'manual/man_wp_theme_introduction.php'),
                        array('label' => 'WordPress�ơ��ޤι���������', 'url' => 'manual/man_wp_theme_purchase.php'),
                        array('label' => '���󥹥ȡ���Ѥ�WordPress�˥ơ��ޤ򥤥󥹥ȡ���', 'url' => 'manual/man_wp_theme_install.php'),
                        array('label' => 'WordPress�ơ��ޤ���������', 'url' => 'manual/man_wp_theme_download.php'),
                        array('label' => '�᡼��󥰥ꥹ�ȤˤĤ���', 'url' => 'manual/man_mail_mailinglist.php'),
                        array('label' => '�᡼��ޥ�����ˤĤ���', 'url' => 'manual/man_mail_mailmagazine.php'),
                        array('label' => '���ǥ᡼��ե��륿����', 'url' => 'manual/man_mail_spam_setting.php'),
                        array('label' => '��ư��������', 'url' => 'manual/man_mail_mailreply.php'),
                        array('label' => '�᡼��ο���ʬ��', 'url' => 'manual/man_mail_sorting.php'),
                        array('label' => 'SMTPǧ�ڤι񳰥�����������', 'url' => 'manual/man_mail_jpcheck.php'),
                        array('label' => 'OP25B�ˤĤ���', 'url' => 'manual/man_mail_op25b.php'),
                        array('label' => 'ž������', 'url' => 'manual/man_mail_transfer.php'),
                        array('label' => 'DKIM����', 'url' => 'manual/man_mail_dkim.php'),
                        array('label' => 'SPF����', 'url' => 'manual/man_mail_spf.php'),
                        array('label' => 'DMARC����', 'url' => 'manual/man_mail_dmarc.php'),
                        array('label' => '���Ͱ���', 'url' => 'manual/man_ftp_spec.php'),
                        array('label' => 'FTP��������Ȥ��ɲ�', 'url' => 'manual/man_ftp_add.php'),
                        array(
                            'label' => 'FTP���եȤ�����',
                            'url' => 'manual/man_ftp_setting.php',
                            'child' => array(
                                array('label' => 'FFFTP������', 'url' => 'manual/man_ftp_ffftp_setting.php'),
                                array('label' => 'FileZilla������', 'url' => 'manual/man_ftp_filezilla_setting.php'),
                                array('label' => '�ۡ���ڡ������ӥ����20������', 'url' => 'manual/man_ftp_hpb_setting.php'),
                                array('label' => 'Dreamweaver CC������', 'url' => 'manual/man_ftp_dream_setting.php'),
                                array('label' => 'Cyberduck������', 'url' => 'manual/man_ftp_cyberduck_setting.php'),
                                array('label' => 'BiND for WebLiFE 8������', 'url' => 'manual/man_ftp_bind_setting.php'),
                            ),
                        ),
                        array('label' => '.ftpaccess', 'url' => 'manual/man_ftp_ftpaccess.php'),
                        array('label' => 'FTP��������', 'url' => 'manual/man_ftp_id.php'),
                        array('label' => 'FTP�����ǧ���', 'url' => 'manual/man_ftp_info_check.php'),
                        array('label' => '���Ͱ���', 'url' => 'manual/man_db_spec.php'),
                        array('label' => 'MySQL������', 'url' => 'manual/man_db_setting.php'),
                        array('label' => '��ư�Хå����åפ���Υǡ�������', 'url' => 'manual/man_db_download.php'),
                        array('label' => '���ߤ�MySQL����������', 'url' => 'manual/man_db_man_backup.php'),
                        array('label' => 'phpMyAdmin', 'url' => 'manual/man_db_myadmin.php'),
                        array('label' => 'MySQL�ܹԥġ���', 'url' => 'manual/man_db_shift_tool.php'),
                        array('label' => '��ư�Хå����åפ��������', 'url' => 'manual/man_db_restore.php'),
                        array('label' => 'XServer���������', 'url' => 'manual/man_tool_info.php'),
						array('label' => '���å��������С��������', 'url' => 'manual/man_tool_xserver.php'),
                        array('label' => '�����С��ѥͥ�', 'url' => 'manual/man_tool_server.php'),
                        array('label' => '�ե�����ޥ͡�����', 'url' => 'manual/man_tool_file.php'),
                        array('label' => '�᡼��ѥͥ�', 'url' => 'manual/man_tool_mail_panel.php'),
                        array('label' => 'WEB�᡼��', 'url' => 'manual/man_tool_mail.php'),
                        array('label' => 'WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)', 'url' => 'manual/man_tool_mail_sp.php'),
                        array('label' => '��WEB�᡼��', 'url' => 'manual/man_tool_mail_old.php'),
                        array('label' => '��WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)', 'url' => 'manual/man_tool_mail_sp_old.php'),
                        array('label' => 'AI����åȤˤĤ���', 'url' => 'manual/man_tool_aichat.php'),
                        array('label' => '�᡼��ե�������Ѥ����������������ˤĤ���', 'url' => 'manual/man_malicious_mailform.php'),
                        array('label' => '�᡼�륢������ȤΥѥ���ɥ���å��ˤĤ���', 'url' => 'manual/man_malicious_password_crack.php'),
                        array('label' => '�������������ʥե�����β����������ʥե��������֡ˤˤĤ���', 'url' => 'manual/man_malicious_access.php'),
                        array('label' => 'XServer��������ȡ������С��ѥͥ�ؤ�����������ˤĤ���', 'url' => 'manual/man_malicious_login.php'),
                        array(
                            'label' => '�Ѹ콸',
                            'url' => 'manual/terms.php'
                        ),
                        array(
                            'label' => '���ΤˤĤ���',
                            'url' => 'manual/resale.php',
                        ),
                    ),
                ),
                array(
                    'label' => '���ݡ���',
                    'url' => 'support/',
                    'child' => array(
                        array('label' => '���䤤��碌', 'url' => 'support/index.php'),
                        array('label' => '���䤤��碌', 'url' => 'support/support.php'),
                        array('label' => '���䤤��碌', 'url' => 'support/confirm.php'),
                        array('label' => '���䤤��碌', 'url' => 'support/finish.php'),
                        array('label' => '�Ŀ;���μ�갷���ˤĤ���', 'url' => 'support/support_privacy.php'),
                        array(
                            'label' => '�褯�������',
                            'url' => 'support/faq/index.php',
                            'child' => array(
                                array(
                                    'label' => '��������ˤĤ���',
                                    'url' => '',
                                    'child' => array(
                                    array(
                                        'label' => '��������',
                                        'url' => 'support/faq/faq_contract_new.php',
                                        'child' => array(
                                            array('label' => '�ץ��ˤ�äƵ�ǽ�ΰ㤤�Ϥ���ޤ�����', 'url' => 'support/faq/contract_new_plan.php'),
                                            array('label' => '��û���Ѵ��֤Ϥ���ޤ�����', 'url' => 'support/faq/contract_new_shortest_use.php'),
                                            array('label' => '������֤Ϥ���ޤ�����', 'url' => 'support/faq/contract_new_trial.php'),
                                            array('label' => '������֤ǥ����С��򿽤����ߤ�����ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/contract_new_trial_flow.php'),
                                            array('label' => '������֤ο����ߤ��顢�ܱ��ѳ��ϤޤǤ�ή��Ϥɤ��ʤäƤ��ޤ�����', 'url' => 'support/faq/contract_new_flow.php'),
                                            array('label' => '������֤ξܺ٤ˤĤ��ƶ����Ƥ���������', 'url' => 'support/faq/contract_new_trial_detail.php'),
                                            array('label' => 'WordPress�����å��������ȤȤϡ��ɤΤ褦�ʵ�ǽ�Ǥ�����', 'url' => 'support/faq/contract_new_wordpress_plan.php'),
                                            array('label' => 'Ǥ�����ΤǤ�����ˡ�Ͷ�ʬ�ǿ������ळ�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/contract_new_voluntary_organization.php'),
                                            array('label' => '�����С����ȼ��ɥᥤ���Ʊ���˿������ळ�ȤϤǤ��ޤ�����', 'url' => 'support/faq/contract_new_server_domain.php'),
                                            array('label' => '�����С�ID���ѹ����뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/contract_new_change_id.php'),
                                            array('label' => '�������߻������Ϥ����������ϸ夫���ѹ��Ǥ��ޤ�����', 'url' => 'support/faq/contract_new_change_member.php'),
                                            array('label' => '�������ߤ������ѳ��ϤޤǤδ��֤ϤɤΤ��餤�Ǥ�����', 'url' => 'support/faq/contract_new_start.php'),
                                            array('label' => '�������ߤ򤹤�ݤˡ��������Ф�ɬ�פǤ���?', 'url' => 'support/faq/contract_new_submit.php'),
                                            array('label' => '�ºݤη���ʲݶ�ˤϤ��Ĥ���ˤʤ�ޤ�����', 'url' => 'support/faq/contract_new_expense.php'),
                                            array('label' => '�ܷ���κݤ˥ǡ����ܹԤʤɲ�����Ȥ�ɬ�פˤʤ�ޤ�����', 'url' => 'support/faq/contract_new_migration.php'),
                                            array('label' => '��Ĥδ����ѥͥ��ʣ���η��������Ǥ��ޤ�����', 'url' => 'support/faq/contract_new_multiple.php'),
                                            array('label' => '�������߸�˥����С��Υץ���ѹ��ϤǤ��ޤ�����', 'url' => 'support/faq/contract_new_change_plan.php'),
                                            array('label' => '����å���Хå���ŵ�ǥ����С��򿽹��ߤ��ޤ�������������ˡ�˴ؤ���᡼��Ϥ��ĺ��Ϥ��ޤ�����', 'url' => 'support/faq/contract_new_receive_an_email.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '���󹹿�',
                                        'url' => 'support/faq/faq_contract_renewal.php',
                                        'child' => array(
                                            array('label' => '�������ΤϤ��������Ƥ��ޤ�����', 'url' => 'support/faq/contract_renewal_notification.php'),
                                            array('label' => '���󹹿��μ�³���ϤɤΤ褦�ˤ���ΤǤ�����', 'url' => 'support/faq/contract_renewal_procedure.php'),
                                            array('label' => '�����������ΤǤ������������ʧ�� > ����ʧ��/�����ȯ�ԡפΡ�����Τ���ʧ����³���פ�ɽ������Ƥ��ޤ���', 'url' => 'support/faq/contract_renewal_payment.php'),
                                            array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ�ι�����³���ˤĤ��ƶ������ߤ����Ǥ���', 'url' => 'support/faq/contract_renewal_present_domain.php'),
                                            array('label' => '�����ѤߤΥɥᥤ����ȼ��ɥᥤ��ʵ�̵����ŵ��Ŭ�Ѥ������Ǥ���', 'url' => 'support/faq/contract_renewal_present_domain_application.php'),
                                            array('label' => '�ֻ�ʧ��ˡ�����򤹤�ץܥ���򥯥�å����Ƥ���̤��Ѥ��ޤ���', 'url' => 'support/faq/contract_renewal_method_payment.php'),
                                            array('label' => '��ʧ����ȿ�Ǥ����ޤǤλ��֤򶵤��Ƥ���������', 'url' => 'support/faq/contract_renewal_payment_reflects.php'),
                                            array('label' => '��ư���������ꤷ���Τ˰�����Ȥ����Ԥ��ޤ���', 'url' => 'support/faq/contract_renewal_automatic_debit.php'),
                                            array('label' => '�ּ�ư����̤��λ�Τ��Τ餻�פΥ᡼�뤬�Ϥ��ޤ������б���ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/contract_renewal_automatic_update_error.php'),
                                            array('label' => '3��6��12��24��36����ñ�̤μ�ư���������ꤷ�����Ǥ���', 'url' => 'support/faq/contract_renewal_automatic_update_multiple.php'),
                                            array('label' => '�����̤ʧ���ˤ�ꥵ���С�������뤵��ޤ�����������������ʧ���а���³�����ѤǤ��ޤ�����', 'url' => 'support/faq/contract_renewal_suspend.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�����ѹ�',
                                        'url' => 'support/faq/faq_contract_alteration.php',
                                        'child' => array(
                                            array('label' => '�����С��Υץ����ѹ�������򶵤��Ƥ���������', 'url' => 'support/faq/contract_alteration_change_plan.php'),
                                            array('label' => '�ץ���ѹ��κݤ˥ǡ����ΰ�ư�ʤ�ɬ�פʺ�ȤϤ���ޤ�����', 'url' => 'support/faq/contract_alteration_migration.php'),
                                            array('label' => '�̤�XServer��������Ȥإ����С���������Ȥޤ��ϥɥᥤ�����Ϥ��뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/contract_alteration_assignment.php'),
                                            array('label' => '����̾�����軰�ԡ��̤�ˡ�͡ˤ��ѹ��������Ǥ���', 'url' => 'support/faq/contract_alteration_third_party.php'),
                                            array('label' => '��̾���Ѥ�ä��ΤǷ���̾�����ѹ��������Ǥ���', 'url' => 'support/faq/contract_alteration_name.php'),
                                            array('label' => '�뺧�����Ļ����Ѥ��ޤ�����', 'url' => 'support/faq/contract_alteration_last_name.php'),
                                            array('label' => '��Ͽ�᡼�륢�ɥ쥹���ѹ��򤷤����Ǥ���', 'url' => 'support/faq/contract_alteration_mailaddress_change.php'),
                                            array('label' => '�����С�ID���ѹ��Ǥ��ޤ�����', 'url' => 'support/faq/contract_alteration_id_change.php'),
                                            array('label' => '���̤ˤ��̾���ѹ�����ϼ�³���Ϥɤ줯�餤�������Ǵ�λ���ޤ�����', 'url' => 'support/faq/contract_alteration_day_span.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '����',
                                        'url' => 'support/faq/faq_contract_price.php',
                                        'child' => array(
                                            array('label' => '��ʧ���٤����⡦��ʧ����礬ʬ����ޤ���', 'url' => 'support/faq/contract_price_flow.php'),
                                            array('label' => '��ʧ����ˡ�ˤϤɤΤ褦�ʤ�Τ�����ޤ�����', 'url' => 'support/faq/contract_price_method_payment.php'),
                                            array('label' => '���쥸�åȥ����ɤǻ�ʧ���ݤˡ����顼��ɽ������Ʒ�Ѥ��Ǥ��ޤ���', 'url' => 'support/faq/contract_price_credit_error.php'),
                                            array('label' => '���Ѵ��¤��᤮�ޤ��������ޤ���ʧ���ϴ֤˹礤�ޤ�����', 'url' => 'support/faq/contract_price_expiration_date_over.php'),
                                            array('label' => '�����С���ɥᥤ��ʤ�ʣ�������ӥ�������򡢶�Կ�����ߤǹ绻�ǻ�ʧ�����ȤϤǤ��ޤ�����', 'url' => 'support/faq/contract_price_adding_up.php'),
                                            array('label' => '��ʧ����ˡ���ѹ�����ˤϤɤ�����Ф����Ǥ�����', 'url' => 'support/faq/contract_price_method_payment_change.php'),
                                            array('label' => '������֤��ѹ�����ˤϤɤ�����Ф����Ǥ�����', 'url' => 'support/faq/contract_price_contract_period_change.php'),
                                            array('label' => '��Կ����ǻ�ʧ���򤷤ޤ���������ǧ���Τ��Ϥ��ޤ���', 'url' => 'support/faq/contract_price_bank_transfer_notification.php'),
                                            array('label' => '��Ը��¤���μ�ư���¿��ؤˤϡ��б����Ƥ��ޤ�����', 'url' => 'support/faq/contract_price_bank_transfer_auto.php'),
                                            array('label' => '����ӥˤǤλ�ʧ���򿽤����ߤޤ��������̤Υ���ӥˤ��Ѥ������Ǥ���', 'url' => 'support/faq/contract_price_convenience_store_change.php'),
                                            array('label' => '����������ץ�������Ȱۤʤ�����ۤ��Ϥ��ޤ�����', 'url' => 'support/faq/contract_price_different_claim.php'),
                                            array('label' => '����񡦼��ν񡦸��ѽ��ȯ�Ԥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/contract_price_invoice_issue.php'),
                                            array('label' => '�����ΰ�̾���ѹ����뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/contract_price_invoice_change_address.php'),
                                            array('label' => '��������μ�ư�����ϤǤ��ޤ�����', 'url' => 'support/faq/contract_price_automatic_update.php'),
                                            array('label' => '��Ͽ���Ƥ��륯�쥸�åȥ����ɤ��ѹ�����ˤϤɤ�����Ф����Ǥ�����', 'url' => 'support/faq/contract_price_change_credit_card.php'),
                                            array('label' => '���쥸�åȥ����ɾ���κ�����Ǥ��ޤ���', 'url' => 'support/faq/contract_price_delete_credit_card.php'),
                                            array('label' => 'Ŭ�����������¸�����ʥ���ܥ������١ˤ���Ͽ����ˤĤ���', 'url' => 'support/faq/contract_price_invoice.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '����',
                                        'url' => 'support/faq/faq_contract_cancel.php',
                                        'child' => array(
                                            array('label' => '�������ο������ߤ򥭥�󥻥�Ǥ��ޤ�����', 'url' => 'support/faq/contract_cancel_before.php'),
                                            array('label' => '������򶵤��Ƥ���������', 'url' => 'support/faq/contract_cancel_what.php'),
                                            array('label' => '������������餤�ĤޤǻȤ������Ǥ��ޤ�����', 'url' => 'support/faq/contract_cancel_use.php'),
                                            array('label' => '��äƲ������򤷤Ƥ��ޤ��ޤ��������ä���ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/contract_cancel_accidentally.php'),
                                            array('label' => '����򤷤������С���������Ȥ����Ѵ��¸�ɤ��ʤ�ޤ�����', 'url' => 'support/faq/contract_cancel_expiration_date_server.php'),
                                            array('label' => '����򤷤��ȼ��ɥᥤ��ϴ��¸�ɤ��ʤ�ޤ�����', 'url' => 'support/faq/contract_cancel_expiration_date_domain.php'),
                                            array('label' => '���������Ϥ�����ޤ�����', 'url' => 'support/faq/contract_cancel_fee.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ȥ�֥�',
                                        'url' => 'support/faq/faq_contract_new_trouble.php',
                                        'child' => array(
                                            array('label' => 'SMSǧ�ڡ�����ǧ�ڤ����ޤ����������������ߤ��Ǥ��ޤ���', 'url' => 'support/faq/contract_new_sms.php'),
                                            array('label' => '�֥��å��������С� ���괰λ�Τ��Τ餻�פΥ᡼���ʶ�����Ƥ��ޤ��ޤ�����', 'url' => 'support/faq/contract_new_setup_mail.php'),
                                            array('label' => '�֤���˾�Υ᡼�륢�ɥ쥹�ϲ�����Ͽ���줿���Ȥ����뤿�ᡢ��Ͽ���뤳�ȤϤǤ��ޤ��󡣡פ�ɽ�����졢�������ߤ��Ǥ��ޤ���', 'url' => 'support/faq/contract_new_registered_mail.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'Web�����ȡ�WordPress�ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '��ǽ������',
                                        'url' => 'support/faq/faq_service_hp.php',
                                        'child' => array(
                                            array('label' => '�ۡ���ڡ����˥ѥ���ɤ����ꤹ�뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_hp_password.php'),
                                            array('label' => '�ǡ����١����ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_database.php'),
                                            array('label' => '���ѤǤ���ץ�������򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_available_program.php'),
                                            array('label' => '�������å����Ȥ򱿱Ĥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_hp_mobile_site.php'),
                                            array('label' => '�ե�����򥢥åץ��ɤ��뤿��ˤϤɤ�����Ф����Ǥ�����', 'url' => 'support/faq/service_hp_file_upload.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WordPress',
                                        'url' => 'support/faq/faq_service_hp_wp.php',
                                        'child' => array(
                                            array('label' => '���֥ɥᥤ���WordPress�򥤥󥹥ȡ��뤹����ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_wp_subdomain.php'),
                                            array('label' => 'WordPress�إ������������ʸ���������ޤ���', 'url' => 'support/faq/service_hp_wp_garbled_char.php'),
                                            array('label' => '��WordPress�������̤ؤΥ������������ݤ���ޤ����פ�ɽ������ޤ�����', 'url' => 'support/faq/service_hp_wp_access_denied.php'),
                                            array('label' => 'WordPress��MySQL�桼������MySQL�桼�����ѥ���ɤγ�ǧ��ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_wp_mysql.php'),
                                            array('label' => '���å���ܡ��ɤإ����󤹤����ʬ����ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_hp_wp_login.php'),
                                            array('label' => 'WordPress���ž������ȥåץڡ����ʳ���404���顼���Ф�褦�ˤʤ�ޤ�����', 'url' => 'support/faq/service_hp_wp_404.php'),
                                            array('label' => 'WordPress������Υڡ����Τ�SSL��Ȥ����Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_hp_wp_ssl.php'),
                                            array('label' => 'WordPress�ΰ�ž�˺ݤ��ơ�ư���ǧURL�׵�ǽ��Ȥ��ޤ�������ư���ǧ���Ǥ��ޤ���', 'url' => 'support/faq/service_hp_wp_operation_check.php'),
                                            array('label' => '���å��������С��֤�WordPress�Υɥᥤ��̾���ѹ�������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_wp_change_domain.php'),
                                            array('label' => 'WordPress�Ǻ�ä������ȤؤΥ��������������Ƥ��ޤ���������к��Ȥ��ƤǤ��뤳�ȤϤ���ޤ�����', 'url' => 'support/faq/service_hp_wp_measures_againstload.php'),
                                            array('label' => 'PHP�С��������ڤ��ؤ��Ƥ��顢�����Ȥ������ɽ������ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_hp_wp_change_php_not_displayed.php'),
                                            array('label' => 'WordPress�������̤ǥơ��ޡ��ץ饰����򹹿�����ȡ������Ȥ������ɽ������ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_hp_wp_update_not_displayed.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WordPress��ñ�ܹ�',
                                        'url' => 'support/faq/faq_service_hp_transfer_wp.php',
                                        'child' => array(
                                            array('label' => 'WordPress��ñ�ܹԤǲ����Ǥ��ޤ�����', 'url' => 'support/faq/service_hp_transfer_wp_what.php'),
                                            array('label' => '�̤Υɥᥤ��ˤ�WordPress��ñ�ܹԤǰܹԤǤ��ޤ�����', 'url' => 'support/faq/service_hp_transfer_wp_different_domain.php'),
                                            array('label' => 'WordPress�����Ȥ�URL���ѹ��Ǥ��ޤ�����', 'url' => 'support/faq/service_hp_transfer_wp_change_url.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'Web�ե����',
                                        'url' => 'support/faq/faq_service_hp_webfont.php',
                                        'child' => array(
                                            array('label' => 'Web�ե���ȤȤϲ��Ǥ�����', 'url' => 'support/faq/service_hp_webfont_what.php'),
                                            array('label' => 'ʣ���Υ����Ȥ�Web�ե���ȵ�ǽ���Ѥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_multiple.php'),
                                            array('label' => '��TypeSquare�פȤϲ��Ǥ�����', 'url' => 'support/faq/service_hp_webfont_typesquare.php'),
                                            array('label' => 'Web�ե���ȵ�ǽ��������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_webfont_setting.php'),
                                            array('label' => 'Web�ե���ȵ�ǽ����/̵���ˤ�����ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_webfont_release.php'),
                                            array('label' => 'Web�ե���ȵ�ǽ�ǵ����PV����75,000PV�ˤ�Ķ�������Ϥɤ��ʤ�ޤ�����', 'url' => 'support/faq/service_hp_webfont_exceed_the_limit.php'),
                                            array('label' => '�������ѤϤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_commercial_use.php'),
                                            array('label' => 'ʸ�����ϥե�����Ǥ�����ʸ����Web�ե���Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_form_use.php'),
                                            array('label' => '���ѳ��ϸ塢���Τ�����ɥᥤ����ѹ����뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_hp_webfont_change.php'),
                                            array('label' => '�̤ν��Τ��ɲä��뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_hp_webfont_different.php'),
                                            array('label' => '�������ä�Web�ե���Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_mobile_use.php'),
                                            array('label' => 'SSL��ȤäƤ��륵���Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_ssl_use.php'),
                                            array('label' => 'Web�ե���Ȥ����Ѥ��������Ȥ���������ꡢPDF�������ꤹ�뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_hp_webfont_print.php'),
                                            array('label' => '�������ƥ����ۿ����¤򤫤��Ƥ��륵���ȤǤ����ѤϤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_delivery_restriction.php'),
                                            array('label' => '���ꤷ��Web�ե���Ȥ�ɽ������ޤ���', 'url' => 'support/faq/service_hp_webfont_not_show.php'),
                                            array('label' => '�ɥᥤ�����Ͽ���Ƥ��ޤ�����������URL�ǥե���Ȥ��ۿ�����ޤ���', 'url' => 'support/faq/service_hp_webfont_not_delivery.php'),
                                            array('label' => 'ʸ�����������ѹ��������ΤǤ������꤬ȿ�Ǥ���ޤ���', 'url' => 'support/faq/service_hp_webfont_weight_change.php'),
                                            array('label' => 'TypeSquare�Υե���Ȥ�PC�˥��󥹥ȡ���ѤߤΥ��եȥ����������ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_software_use.php'),
                                            array('label' => '���֥ɥᥤ�����Ͽ�Ǥ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_subdomain.php'),
                                            array('label' => 'ʸ����������ɽ�����줺��ʸ�������Τ褦�ʸ��ݤ������Ƥ���ΤǤ�����', 'url' => 'support/faq/service_hp_webfont_garbled_char.php'),
                                            array('label' => 'WordPress�ʳ��Υ֥���CMS�Ǥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_other_cms.php'),
                                            array('label' => 'Web�����Ⱥ��������Ѥ���ʸ���󤬡�TypeSquare�ۿ������Ф˻Ĥ�ޤ�����', 'url' => 'support/faq/service_hp_webfont_string_left.php'),
                                            array('label' => '���ܸ�ɥᥤ��Υ����Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_hp_webfont_japanese_domain.php'),
                                            array('label' => '����饤��ե졼��Υե졼�����Web�ե���Ȥ�Ŭ�Ѥ���ޤ���', 'url' => 'support/faq/service_hp_webfont_inlineflame_not_applicable.php'),
                                            array('label' => 'Web�ե���Ȥ�������������ΤǤ���Ŭ�Ѥ��줿�ޤޤǤ���', 'url' => 'support/faq/service_hp_webfont_stay_applied.php'),
                                            array('label' => '�б�����Web�֥饦���򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_webfont_supported_blowser.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ǡ����١���',
                                        'url' => 'support/faq/faq_service_db.php',
                                        'child' => array(
                                            array('label' => 'MySQL�ΥС������򶵤��Ƥ���������', 'url' => 'support/faq/service_db_version.php'),
                                            array('label' => 'MySQL�ǻ��ѤǤ������̤򶵤��Ƥ���������', 'url' => 'support/faq/service_db_capacity.php'),
                                            array('label' => 'MySQL������Ϥɤ�����Ԥ��ޤ�����', 'url' => 'support/faq/service_db_setting.php'),
                                            array('label' => 'phpMyAdmin�˥�����Ǥ��ޤ���', 'url' => 'support/faq/service_db_phpmyadmin.php'),
                                            array('label' => '�ǡ����١��������С�����³������ޤ���', 'url' => 'support/faq/service_db_expire.php'),
                                            array('label' => '��ñ���󥹥ȡ����Ԥä��ץ����Υǡ����١����Υѥ���ɤ��ǧ������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_db_autoinstall_password.php'),
                                            array('label' => '�֥ǡ����١�����Ω���顼�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_db_hp_not_show.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'CGI',
                                        'url' => 'support/faq/faq_service_cgi.php',
                                        'child' => array(
                                            array('label' => 'CGI��Ȥ��ˤϤɤ������֤���Ф����Ǥ�����', 'url' => 'support/faq/service_cgi_install.php'),
                                            array('label' => '�ѡ��ߥå��������Ϥɤ�����Ф����Ǥ�����', 'url' => 'support/faq/service_cgi_permission.php'),
                                            array('label' => 'ɸ������ѤǤ���Perl�⥸�塼��򶵤��Ƥ���������', 'url' => 'support/faq/service_cgi_perl_module.php'),
                                            array('label' => 'Perl�Υѥ��򶵤��Ƥ���������', 'url' => 'support/faq/service_cgi_perl_pass.php'),
                                            array('label' => 'GD�ϻȤ��ޤ�����', 'url' => 'support/faq/service_cgi_gd_use.php'),
                                            array('label' => 'jcode.pm�ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_cgi_jcode.php'),
                                            array('label' => 'suEXEC�ˤ��б����Ƥ��ޤ�����', 'url' => 'support/faq/service_cgi_suexec.php'),
                                            array('label' => 'CGI�����֤���ȡ�500 Internal Server Error�פ�ɽ������ޤ���', 'url' => 'support/faq/service_cgi_500.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'SSI',
                                        'url' => 'support/faq/faq_service_ssi.php',
                                        'child' => array(
                                            array('label' => 'SSI�ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_ssi_use.php'),
                                            array('label' => '.html��.htm��SSI��ư��������ΤǤ������ɤ�����Ф����Ǥ��礦����', 'url' => 'support/faq/service_ssi_action_html.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'PHP',
                                        'url' => 'support/faq/faq_service_php.php',
                                        'child' => array(
                                            array('label' => 'PHP�ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_php_use.php'),
                                            array('label' => 'PHP�ΥС������򶵤��Ƥ���������', 'url' => 'support/faq/service_php_version.php'),
                                            array('label' => 'PHP�ΥС�����󤬽񤭴���äƤ��ޤ��ޤ���', 'url' => 'support/faq/service_php_rewrite_version.php'),
                                            array('label' => 'PHP�ˤϥޥ���Х��ȤΥ⥸�塼����Ȥ߹��ޤ�Ƥ��ޤ�����', 'url' => 'support/faq/service_php_multibyte.php'),
                                            array('label' => 'php.ini��������ѹ��������ΤǤ�����ǽ�Ǥ�����', 'url' => 'support/faq/service_php_phpini_conf_change.php'),
                                            array('label' => 'PHP�������ư��ޤ���', 'url' => 'support/faq/service_php_normal_action.php'),
                                            array('label' => 'PHP�����֤���ȡ�500 Internal Server Error�פ�ɽ������ޤ���', 'url' => 'support/faq/service_php_500.php'),
                                            array('label' => 'PHP��ʸ���������Ƥ��ޤ���', 'url' => 'support/faq/service_php_garbled_char.php'),
                                            array('label' => '.html��.htm��PHP��ư��������ΤǤ������ɤ�����Ф����Ǥ��礦����', 'url' => 'support/faq/service_php_action_html.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ȥ�֥�',
                                        'url' => 'support/faq/faq_service_hp_trouble.php',
                                        'child' => array(
                                            array('label' => '�֤���WEB���ڡ����ؤϡ��ޤ��ۡ���ڡ��������åץ��ɤ���Ƥ��ޤ��󡣡פȤ������顼��ɽ������ޤ���', 'url' => 'support/faq/service_hp_trouble_not_update.php'),
                                            array('label' => '��403 Forbidden�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_hp_trouble_403.php'),
                                            array('label' => '��404 Not Found�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_hp_trouble_404.php'),
                                            array('label' => '��500 Internal Server Error�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_hp_trouble_500.php'),
                                            array('label' => '��503 Service Temporarily Unavailable�פ�ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_hp_trouble_503.php'),
                                            array('label' => '��510 Not Extended�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���', 'url' => 'support/faq/service_hp_trouble_510.php'),
                                            array('label' => '�ۡ���ڡ����β������ߤȤʤäƤ��ޤ������ޤ�ɽ������ޤ���', 'url' => 'support/faq/service_hp_trouble_img_error.php'),
                                            array('label' => '���Ѥ��Ƥ���Web�����Ȥ�����������������ޤ������б���ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_hp_trouble_tampering.php'),
                                            array('label' => '���������Ȥθ�����̤Ǽ�ʬ�Υۡ���ڡ��������ʥ����Ȥ���ɽ������ޤ���', 'url' => 'support/faq/service_hp_trouble_dangerous.php'),
                                            array('label' => '��ʬ�Υۡ���ڡ������饦���륹�����Ф���ޤ�����', 'url' => 'support/faq/service_hp_trouble_virus.php'),
                                            array('label' => '��̵����URL�Ǥ����ץ���������ȿ���Ԥ��Ǥ����ǽ��������ޤ������Ф餯���֤򤪤��ƺ��٥��������򤪻�����������פ�ɽ������ޤ���', 'url' => 'support/faq/service_hp_trouble_not_exist.php'),
                                            array('label' => 'ͭ�����¤�����Τʤ��ɥᥤ�������Ȥ��ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_hp_trouble_suddenly_use.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '�ե�����ž��(FTP)�ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '��ǽ������',
                                        'url' => 'support/faq/faq_service_ftp.php',
                                        'child' => array(
                                            array('label' => 'public_html �ե�����Ȥϲ��Ǥ�����', 'url' => 'support/faq/service_ftp_public_html_folder.php'),
                                            array('label' => 'FTP over SSL�ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_ftp_overssl.php'),
                                            array('label' => 'FTP���եȤǥ���������ǽ�ʥǥ��쥯�ȥ�����Ǥ��ޤ�����', 'url' => 'support/faq/service_ftp_access.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '������ˡ',
                                        'url' => 'support/faq/faq_service_ftp_setting.php',
                                        'child' => array(
                                            array('label' => 'FTP���������򶵤��Ƥ���������', 'url' => 'support/faq/service_ftp_setting_method.php'),
                                            array('label' => '�ۡ���ڡ����Υե�����Ϥɤ��إ��åץ��ɤ���Ф����Ǥ�����', 'url' => 'support/faq/service_ftp_setting_upload.php'),
                                            array('label' => '��������Υǥ��쥯�ȥ�Ϻ�����Ƥ⤤���Ǥ�����', 'url' => 'support/faq/service_ftp_setting_initial_folder.php'),
                                            array('label' => '����FTP��������Ȥ����ꤷ�ʤ���FTP�ϻȤ��ʤ��ΤǤ��礦����', 'url' => 'support/faq/service_ftp_setting_add_use.php'),
                                            array('label' => 'FTP�Υѥ���ɤ��ѹ���������', 'url' => 'support/faq/service_ftp_setting_password_change.php'),
                                            array('label' => 'FTP���󤬤狼��ʤ��ʤ�ޤ��������������̾��ѥ���ɤϤɤ��ǳ�ǧ�Ǥ��ޤ�����', 'url' => 'support/faq/service_ftp_setting_info.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ȥ�֥�',
                                        'url' => 'support/faq/faq_service_ftp_trouble.php',
                                        'child' => array(
                                            array('label' => '�ե�����򥢥åץ��ɤ��ޤ��������ۡ���ڡ�����ɽ������ޤ���', 'url' => 'support/faq/service_ftp_trouble_hp_not_show.php'),
                                            array('label' => '���åץ��ɤ����֤���WEB���ڡ����ˤϤޤ�HP�����åץ��ɤ���Ƥ��ޤ���פȤ������̤�ɽ������ޤ���', 'url' => 'support/faq/service_ftp_trouble_not_upload.php'),
                                            array('label' => 'FTP���եȤǥե������ե����������Ǥ��ޤ���', 'url' => 'support/faq/service_ftp_trouble_ftpsoft_delete.php'),
                                            array('label' => '�ե������ž�������³���ڤ�Ƥ��ޤ��ޤ���', 'url' => 'support/faq/service_ftp_trouble_connection_expire.php'),
                                            array('label' => 'FTP���եȤǡ�530�פȤ������顼��ɽ�����졢��³���Ǥ��ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_ftp_trouble_530.php'),
                                            array('label' => '������֤Ǻ�������Ƥ���ե������ե�����������Ƥ��ޤ��ޤ�����', 'url' => 'support/faq/service_ftp_trouble_initial_folder_delete.php'),
                                            array('label' => 'FTP���եȤ������ե����������ɽ������ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_ftp_trouble_not_filelist.php'),
                                            array('label' => '���٤����顼��ȯ���������ȡ��������ѥ���ɤǤ�FTP��³���Ǥ��ʤ��ʤäƤ��ޤ��ޤ�����', 'url' => 'support/faq/service_ftp_trouble_error.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '�᡼��ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '��ǽ������',
                                        'url' => 'support/faq/faq_service_mail.php',
                                        'child' => array(
                                            array('label' => '1�̤����겿MB�ޤǥ᡼������������ǽ�Ǥ�����', 'url' => 'support/faq/service_mail_transmission.php'),
                                            array('label' => '�᡼���ž�����뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_mail_transfer.php'),
                                            array('label' => '���֥ߥå����ݡ��ȡ�587�ݡ��ȡˤ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_587port.php'),
                                            array('label' => '�����륹�����å���ǽ�Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_virus_check.php'),
                                            array('label' => '����å�������ε�ǽ�Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_catchall.php'),
                                            array('label' => '�ɥᥤ�󤴤Ȥ˥᡼�륢������Ȥ�����Ǥ��ޤ�����', 'url' => 'support/faq/service_mail_per_domain.php'),
                                            array('label' => '�᡼��󥰥ꥹ�ȡ��᡼��ޥ����������Ǥ��ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_mailmagazine.php'),
                                            array('label' => '�᡼������̤������������ΤǤ�����������������¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_transmission_limit.php'),
                                            array('label' => 'DKIMǧ�ڤ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_dkim.php'),
                                            array('label' => 'Gmail�֥᡼�������ԤΥ����ɥ饤��פ��б����Ƥ��ޤ�����', 'url' => 'support/faq/service_mail_gmail.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '������ˡ',
                                        'url' => 'support/faq/faq_service_mail_setting.php',
                                        'child' => array(
                                            array('label' => '�᡼�륽�եȤؤ�������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_setting_what.php'),
                                            array('label' => '�᡼�뿶��ʬ������ˤĤ��ƾܤ��������Ƥ���������', 'url' => 'support/faq/service_mail_setting_sort.php'),
                                            array('label' => '����Υ᡼�륢�ɥ쥹���������Ƥ���᡼���������ݤ�������', 'url' => 'support/faq/service_mail_setting_reception_refusal.php'),
                                            array('label' => '�᡼���SSL�ʰŹ沽���̿���Ԥ�������', 'url' => 'support/faq/service_mail_setting_ssl.php'),
                                            array('label' => '�᡼�륽�եȤؤ�����ǡ��������Υ᡼�륵���С���ۥ���̾(sv***.xserver.jp)�ǤϤʤ�������ɥᥤ��(***.xsrv.jp)�䡢�ȼ��ɥᥤ�����ꤹ�뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_mail_setting_mail_server.php'),
                                            array('label' => '�᡼�륢������Ⱥ������ˡ��ɥᥤ��ǧ�ڤ�����롣', 'url' => 'support/faq/service_mail_setting_domain_auth.php'),
                                            array('label' => '���������ɥᥤ��ɽ�����줺���᡼�륢������Ȥ��ɲä��Ǥ��ޤ���', 'url' => 'support/faq/service_mail_setting_add.php'),
                                            array('label' => 'Web�����Ȥϥ��å��������С����᡼���Google Workspace�����Ѥ���ݤ�������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_setting_setup.php'),
                                            array('label' => '�ְ������Ķ������ɲä��뤳�Ȥ��Ǥ��ޤ���פ�ɽ�����졢�᡼�륢������Ȥ��ɲä��Ǥ��ޤ���', 'url' => 'support/faq/service_mail_setting_upper_limit.php'),
                                            array('label' => '���ǥ᡼����к���ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_setting_mail_spam.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'WEB�᡼��',
                                        'url' => 'support/faq/faq_tool_mail.php',
                                        'child' => array(
                                            array('label' => 'WEB�᡼��˥�����Ǥ��ޤ���', 'url' => 'support/faq/tool_mail_login.php'),
                                            array('label' => '�֥ۥ�����³�˼��Ԥ��ޤ����ס�����³���顼��ȯ�����ޤ����פ�ɽ������ޤ�����', 'url' => 'support/faq/tool_mail_access_error.php'),
                                            array('label' => '�����᡼�뤬ʸ���������Ƥ��롣', 'url' => 'support/faq/tool_mail_garbled_text.php'),
                                            array('label' => '������ܥ���򲡤��Ƥ�ȿ��������ޤ���', 'url' => 'support/faq/tool_mail_login_javascript.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�����륹�����å�',
                                        'url' => 'support/faq/faq_service_mail_viruscheck.php',
                                        'child' => array(
                                            array('label' => '����������륹��ǽ�����Ѥ�����', 'url' => 'support/faq/service_mail_viruscheck_use.php'),
                                            array('label' => '�᡼��ž������򤷤Ƥ����硢ž�������᡼��⥢��������륹��ǽ��ͭ���Ǥ�����', 'url' => 'support/faq/service_mail_viruscheck_transfer.php'),
                                            array('label' => '�᡼��󥰥ꥹ�ȡ��᡼��ޥ���������Ѥ���᡼�륢�ɥ쥹�⡢����������륹��ǽ��ͭ���Ǥ�����', 'url' => 'support/faq/service_mail_viruscheck_mailinglist_mailmagazine.php'),
                                            array('label' => '��̾���֥����륹��������/VIRUS DETECTION�פΥ᡼���������ޤ�����', 'url' => 'support/faq/service_mail_viruscheck_detection_notification.php'),
                                            array('label' => '���������Ф��Τʤ��᡼��Ǥ����������륹�����Ф��줿�Ȥ����Τ�������ޤ�����', 'url' => 'support/faq/service_mail_viruscheck_not_remember_send_detection_notification.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�᡼��󥰥ꥹ�ȵ�ǽ',
                                        'url' => 'support/faq/faq_service_mail_mailinglist.php',
                                        'child' => array(
                                            array('label' => '�᡼��󥰥ꥹ�Ȥ�����Ǥ������˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_limit.php'),
                                            array('label' => '���������᡼��󥰥ꥹ�Ȥ˥桼����(�᡼�륢�ɥ쥹)����Ͽ������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_mailinglist_address_registration.php'),
                                            array('label' => '���������᡼��󥰥ꥹ�Ȥ���Ͽ��ǽ�ʥ桼����(�᡼�륢�ɥ쥹)�˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_address_limit.php'),
                                            array('label' => '���֥ɥᥤ������Ѥ����᡼��󥰥ꥹ�Ȥ�������뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_subdomain.php'),
                                            array('label' => '�᡼��ϳ��������ӥ��Ǳ��Ѥ��Ƥ��ޤ������᡼��󥰥ꥹ�Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_outside_mail.php'),
                                            array('label' => 'Web�����Ȥϳ��������ӥ��Ǳ��Ѥ��Ƥ��ޤ������᡼��󥰥ꥹ�Ȥ����ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_outside_website.php'),
                                            array('label' => '�᡼��󥰥ꥹ�Ȥ��ۿ�����᡼������������˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_send_limit.php'),
                                            array('label' => '���������˥᡼��󥰥ꥹ�ȵ�ǽ�����Ѥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailinglist_trial.php'),
                                            array('label' => '�����Υ᡼�륢�ɥ쥹����᡼��󥰥ꥹ�Ȥإ᡼����ۿ�������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_mailinglist_external.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�᡼��ޥ�����ǽ',
                                        'url' => 'support/faq/faq_service_mail_mailmagazine.php',
                                        'child' => array(
                                            array('label' => '�᡼��ޥ����������Ǥ������˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_create_limit.php'),
                                            array('label' => '���������᡼��ޥ�����˥桼����(�᡼�륢�ɥ쥹)����Ͽ������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/service_mail_mailmagazine_address_registration.php'),
                                            array('label' => '���������᡼��ޥ��������Ͽ��ǽ�ʥ桼����(�᡼�륢�ɥ쥹)�˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_address_limit.php'),
                                            array('label' => '���֥ɥᥤ������Ѥ����᡼��ޥ������������뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_subdomain.php'),
                                            array('label' => '�᡼��ϳ��������ӥ��Ǳ��Ѥ��Ƥ��ޤ������᡼��ޥ���������ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_outside_mail.php'),
                                            array('label' => 'Web�����Ȥϳ��������ӥ��Ǳ��Ѥ��Ƥ��ޤ������᡼��ޥ���������ѤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_outside_website.php'),
                                            array('label' => '�᡼��ޥ�����ǽ�����Ѥ������������᡼�뤬������¦�����ǥ᡼���Ƚ�ꤵ��ޤ���', 'url' => 'support/faq/service_mail_mailmagazine_spam.php'),
                                            array('label' => '�᡼��ޥ�������ۿ�����᡼������������˾�¤Ϥ���ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_send_limit.php'),
                                            array('label' => '���������˥᡼��ޥ�����ǽ�����Ѥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_trial.php'),
                                            array('label' => 'ź�եե�����Ĥ��Υ᡼����ۿ��Ǥ��ޤ�����', 'url' => 'support/faq/service_mail_mailmagazine_attachments.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ȥ�֥�',
                                        'url' => 'support/faq/faq_service_mail_trouble.php',
                                        'child' => array(
                                            array('label' => '�᡼�뤬�����Ǥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_send.php'),
                                            array('label' => '�᡼�뤬�����Ǥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_reception.php'),
                                            array('label' => '�᡼��ܥå��������̤����äѤ��ǡ��᡼�뤬�����Ǥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_not_receive.php'),
                                            array('label' => '�᡼��ܥå��������̤����äѤ��ǥ᡼�뤬�����Ǥ��ʤ��ä���硢�Ϥ��ʤ��ä��᡼��Ϥ��Ȥ����ǧ�Ǥ��ޤ�����', 'url' => 'support/faq/service_mail_trouble_method_receive.php'),
                                            array('label' => '�ۿ������᡼��ޥ�����η�̾��[SPAM]�Ȥ���ʸ������Ϳ����ޤ���', 'url' => 'support/faq/service_mail_trouble_spam.php'),
                                            array('label' => '�᡼�륽�եȤ�ID���ѥ���ɤ�����롣', 'url' => 'support/faq/service_mail_trouble_id_desired.php'),
                                            array('label' => '�᡼�륢������ȤΥѥ���ɤ��狼��ޤ���', 'url' => 'support/faq/service_mail_trouble_not_know_password.php'),
                                            array('label' => '��ĥ��ι���������ܹ񳰤ˤ�����ü�᡼�뤬�����Ǥ��ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_not_send.php'),
                                            array('label' => '�᡼�����������Ȥ��˥����͡����CN�ˤ������ηٹ�ɽ������ޤ���', 'url' => 'support/faq/service_mail_trouble_warning.php'),
                                            array('label' => '�Ȥ˳Ф��Τʤ��᡼��Υ��顼�����ˤ���äƤ���褦�ˤʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_error.php'),
                                            array('label' => '�᡼�뤬�����Ǥ������������ˡ�maildir over quota�פȵ��ܤ��줿���顼�᡼�뤬�Ϥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_not_receive_error.php'),
                                            array('label' => '�᡼�륽�եȤǡּ��̾�����ǧ�Ǥ��ʤ��ס־����������פȤ������顼���Ф�褦�ˤʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_ssl_certificate.php'),
                                            array('label' => 'IMAP�Τ���Ȣ��Trash�ե�����ˤ˰�ư�����᡼�뤬�ä��ޤ�����', 'url' => 'support/faq/service_mail_trouble_imap_trash.php'),
                                            array('label' => 'WEB�᡼�뤫������᡼�뤬�ä��Ƥ��ޤ��ޤ�����', 'url' => 'support/faq/service_mail_trouble_webmail_disappeared.php'),
                                            array('label' => '����ΰ���˥᡼�뤬�����Ǥ��������顼�᡼�뤬���������Ϥ��褦�ˤʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_err_mail_sender.php'),
                                            array('label' => 'Gmail�إ᡼�뤬�����Ǥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_err_mail_sender_gmail.php'),
                                            array('label' => '�᡼���ž������򤷤ޤ�������ž������Ϥ��ޤ���', 'url' => 'support/faq/service_mail_trouble_transfer.php'),
                                            array('label' => '���̥᡼���������Τߡ�Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php'),
                                            array('label' => '�ե��å��󥰥᡼��˵��ܤ�URL�˥������������������������Ϥ��Ƥ��ޤ��ޤ�����', 'url' => 'support/faq/service_mail_trouble_phishing_mail.php'),
                                            array('label' => 'Thunderbird�����������Ǥ��ʤ��ʤ�ޤ�����', 'url' => 'support/faq/service_mail_trouble_mail_thunderbird.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '�ɥᥤ��ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '�ޥ���ɥᥤ��',
                                        'url' => 'support/faq/faq_domain_multi.php',
                                        'child' => array(
                                            array('label' => '���ܸ�ɥᥤ��ʴ����ʤɤ�Ȥä��ȼ��ɥᥤ��ˤϻȤ��ޤ�����', 'url' => 'support/faq/domain_multi_japanese.php'),
                                            array('label' => '�����С�ID.xsrv.jp�ǤϤʤ������������ȼ��ɥᥤ������Ѥ������Ǥ���', 'url' => 'support/faq/domain_multi_owndomain_use.php'),
                                            array('label' => '¾�ҤǼ��������ɥᥤ������ѤǤ��ޤ�����', 'url' => 'support/faq/domain_multi_otherservice.php'),
                                            array('label' => '���֥ɥᥤ����˰ۤʤ�ۡ���ڡ�����ɽ���Ǥ��ޤ�����', 'url' => 'support/faq/domain_multi_subdomain_hp.php'),
                                            array('label' => '�ޥ���ɥᥤ��Ȥϡ��ɥᥤ��̵���¤˻Ȥ���ΤǤ�����', 'url' => 'support/faq/domain_multi_infinity.php'),
                                            array('label' => '�����ѤߤΥɥᥤ��̾���ѹ��������Ǥ���', 'url' => 'support/faq/domain_multi_name_change.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '������ˡ',
                                        'url' => 'support/faq/faq_domain_multi_setting.php',
                                        'child' => array(
                                            array('label' => '�ɥᥤ�󤴤Ȥ��̡��Υۡ���ڡ�����ɽ�����뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/domain_multi_setting_per_domain_website.php'),
                                            array('label' => 'www�����URL��Ȥ������ΤǤ�����������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/domain_multi_setting_www.php'),
                                            array('label' => '���֥ɥᥤ�������塢�ɤ줯�餤�����ѤǤ���褦�ˤʤ�ޤ�����', 'url' => 'support/faq/domain_multi_setting_subdomain_reflect.php'),
                                            array('label' => '�ɥᥤ�����꤬��ȿ���Ԥ��פξ��֤Ǥ�����ɽ�����ä���ޤǤ˥᡼�륢�ɥ쥹�κ����ʤɤ򤹤뤳�Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/domain_multi_setting_waiting.php'),
                                            array('label' => '���å��������С��֤ǥɥᥤ��ȥ��֥ɥᥤ��򥵡��С���ʬ���Ʊ��Ѥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/domain_multi_setting_subdomain_server.php'),
                                            array('label' => '�ɥᥤ������塢1���ְʾ�вᤷ�Ƥ��ޤ�����ȿ���Ԥ��פ�ɽ�����ä��ޤ���', 'url' => 'support/faq/domain_multi_setting_waiting_cache.php'),
                                            array('label' => '�ۤʤ륵���С�ID�إɥᥤ���ѥ����С����ѹ��������Ǥ���', 'url' => 'support/faq/domain_multi_setting_server_change.php'),
                                            array('label' => '�͡��ॵ���С��Ȥϲ��Ǥ�����', 'url' => 'support/faq/domain_multi_setting_what_nameserver.php'),
                                            array('label' => '�־�̥쥸���ȥ��ѹ�������Τ�����פ�ɽ�����졢�Ƽ����Ԥ��ޤ���', 'url' => 'support/faq/domain_multi_setting_error_registrar.php'),
                                            array('label' => '�����С��ѥͥ�˥ɥᥤ������򤷤ޤ���������̤�����פ�ɽ������Ƥ��ޤ��ޤ���', 'url' => 'support/faq/domain_multi_setting_not_acquired.php'),
                                            array('label' => '�����С��ѥͥ�˥ɥᥤ������򤷤ޤ���������NS���פ�ɽ������Ƥ��ޤ���', 'url' => 'support/faq/domain_multi_setting_nsdifference.php'),
                                            array('label' => '¾�Ҵ�����Ҥǥ��å��������С��Υ͡��ॵ���С������ꤷ�����Ǥ��� 1��5�Τ������ɤΥ͡��ॵ���С������ꤹ��Ф����Ǥ�����', 'url' => 'support/faq/domain_multi_setting_which_nameserver.php'),
                                            array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ�Ǽ��������ɥᥤ����ѹ��Ǥ��ޤ�����', 'url' => 'support/faq/domain_multi_setting_free_change.php'),
                                            array('label' => '�����С��ѥͥ�˿������������ɥᥤ��̾��ɽ������ޤ��󡣤ɤ�������褤�Ǥ�����', 'url' => 'support/faq/domain_multi_setting_error_domainname.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '��������',
                                        'url' => 'support/faq/faq_domain_take.php',
                                        'child' => array(
                                            array('label' => '�ɥᥤ��μ�����ԤϤ��Ƥ�館�ޤ�����', 'url' => 'support/faq/domain_take_acting.php'),
                                            array('label' => '�ɥᥤ�����������Τ˻Ȥ��ޤ���', 'url' => 'support/faq/domain_take_not_use.php'),
                                            array('label' => '°����JP�ɥᥤ��μ���������ʧ�ä��Τˡ���������λ���Ƥ��ޤ���', 'url' => 'support/faq/domain_take_attribute_done.php'),
                                            array('label' => '�ɥᥤ���co.jp�ۤμ�������ǽ���ȿ����̤򶵤��Ƥ���������', 'url' => 'support/faq/domain_take_jp_organaize.php'),
                                            array('label' => '�ɥᥤ���or.jp�ۤμ�������ǽ���ȿ����̤򶵤��Ƥ���������', 'url' => 'support/faq/domain_take_orjp_organaize.php'),
                                            array('label' => '�ɥᥤ���ac.jp�ۤμ�������ǽ���ȿ����̤򶵤��Ƥ���������', 'url' => 'support/faq/domain_take_acjp_organaize.php'),
                                            array('label' => '�ɥᥤ���ed.jp�ۤμ�������ǽ���ȿ����̤򶵤��Ƥ���������', 'url' => 'support/faq/domain_take_edjp_organaize.php'),
                                            array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ�ʥ����ڡ�����ŵ�ˤο������ߤ��Ǥ��ޤ���', 'url' => 'support/faq/domain_take_error_campaign_domain.php'),
                                            array('label' => '������ʧ�ä���ˤϥɥᥤ��ο������ߥ���󥻥�ϤǤ��ޤ��󤫡�', 'url' => 'support/faq/domain_take_paymant_after_cancel.php'),
                                            array('label' => '�ֻ��ѤǤ��ʤ��ȿ����̡פ�ɽ�����졢�ɥᥤ��μ����������Ǥ��ޤ���', 'url' => 'support/faq/domain_take_request_error.php'),
                                            array('label' => '��.asia�ۤ��������ݤˡ�CED���󥿥��Ⱦ�������Ϥ�������Ф�ɬ�פǤ�����', 'url' => 'support/faq/domain_take_asia_process.php'),
                                            array('label' => '�ְ��ȿ���ɥᥤ��̾��ȿ�Ǥ��פ�ɽ�����졢�ɥᥤ��μ����������Ǥ��ޤ���', 'url' => 'support/faq/domain_take_1org_1domain.php'),
                                            array('label' => '�ȿ�����Ω����co.jp/or.jp/ac.jp/ed.jp��������뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/domain_take_before_establishment.php'),
                                            array('label' => 'co.jp/or.jp/ac.jp/ed.jp/ne.jp/gr.jp�ʤɤ�°��JP�ɥᥤ����������ݤˡ��������Ф�ɬ�פǤ�����', 'url' => 'support/faq/domain_take_jp_process.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => 'Whois',
                                        'url' => 'support/faq/faq_domain_whois.php',
                                        'child' => array(
                                            array('label' => '���������ɥᥤ���Whois������ѹ��������Ǥ���', 'url' => 'support/faq/domain_whois_change.php'),
                                            array('label' => 'Whois����¾�ͤ�̾���Ǹ�������Ƥ��ޤ���', 'url' => 'support/faq/domain_whois_other_name.php'),
                                            array('label' => '°����JP�ɥᥤ���Whois�������������Ƥۤ����ΤǤ�������ǽ�Ǥ�����', 'url' => 'support/faq/domain_whois_attribute.php'),
                                            array('label' => 'Whois�������ˡ֥᡼�륢�ɥ쥹��ͭ������̤��ǧ�Ǥ��פ�ɽ������Ƥ��ޤ���', 'url' => 'support/faq/domain_whois_effectiveness.php'),
                                            array('label' => 'co.jp�ʤ�°����JP�ɥᥤ���Whois������ѹ���ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/tool_domain_whois.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'SSL�ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'SSL����',
                                        'url' => 'support/faq/faq_service_ssl.php',
                                        'child' => array(
                                            array('label' => '�ȼ�SSL�����ѤǤ��ޤ�����', 'url' => 'support/faq/ssl_spec_use.php'),
                                            array('label' => '��Х��륵���ȤǤ��ȼ�SSL�ϻȤ��ޤ�����', 'url' => 'support/faq/ssl_spec_mobilesite.php'),
                                            array('label' => '�磻��ɥ�����SSL�ϻȤ��ޤ�����', 'url' => 'support/faq/ssl_spec_wild.php'),
                                            array('label' => '�ȼ�SSL�����ѤǤ���SSL�̿��򶵤��Ƥ���������', 'url' => 'support/faq/ssl_spec_communication.php'),
                                            array('label' => '�ȼ�SSL��ȯ�Ԥ���������ν�̾���르�ꥺ���SHA-2�Ǥ�����', 'url' => 'support/faq/ssl_spec_sha2.php'),
                                            array('label' => '¾�Ҥǹ�������SSL�����С�������λ������ߤˤ��б����Ƥ��ޤ�����', 'url' => 'support/faq/ssl_spec_bring.php'),
                                            array('label' => '���å��������С��ǹ�������SSL�����С������������Ф��ޤ�����', 'url' => 'support/faq/ssl_spec_bring_out.php'),
                                            array('label' => '���ȼ�IP���ɥ쥹����פȡ��ȼ�IP���ɥ쥹�ʤ��פΰ㤤�򶵤��Ƥ���������', 'url' => 'support/faq/ssl_spec_ip_sni.php'),
                                            array('label' => '����ɥᥤ��(xsrv.jp)���ȼ�SSL�����ѤǤ��ޤ�����', 'url' => 'support/faq/ssl_spec_initial_domain.php'),
                                            array('label' => '��̵���ȼ�SSL�פȡ֥��ץ�����ȼ�SSL�פΰ㤤�򶵤��Ƥ���������', 'url' => 'support/faq/ssl_spec_free_option.php'),
                                            array('label' => '̵���ȼ�SSL�ϡ��ȼ�IP���ɥ쥹�����Ѥ��뤳�Ȥ���ǽ�Ǥ�����', 'url' => 'support/faq/ssl_spec_ip_use.php'),
                                            array('label' => '���ץ�����ȼ�SSL��ʣ��ǯ����ϤǤ��ޤ�����', 'url' => 'support/faq/ssl_spec_multiyear_contract.php'),
                                            array('label' => '�ȼ�SSL��ͭ�����֤ȷ���λ�����ۤʤ�ޤ���', 'url' => 'support/faq/ssl_spec_contract_end_date.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '������������ˡ',
                                        'url' => 'support/faq/faq_service_ssl_setting.php',
                                        'child' => array(
                                            array('label' => '���ץ�����ȼ�SSL����󤷤������������͡����www���ꡦ�ʤ��ɤ���Ǥ����Ѥ�������', 'url' => 'support/faq/ssl_setting_2way.php'),
                                            array('label' => '�����͡����ʸ���������¤Ϥ���ޤ�����', 'url' => 'support/faq/ssl_setting_name_limit.php'),
                                            array('label' => '�ȼ�SSL��ȯ�Ԥ���λ���ޤ�����SSL�ڡ��������Ѥ���ˤϤɤ�����Ф褤�Ǥ�����', 'url' => 'support/faq/ssl_setting_issue_finish.php'),
                                            array('label' => 'SSL�ѤΥۡ���ڡ����ǡ����Ϥɤ��˥��åץ��ɤ���Ф褤�Ǥ�����', 'url' => 'support/faq/ssl_setting_upload.php'),
                                            array('label' => 'SSL�ڡ�����ɽ�����줺����̵����URL�Ǥ����ץ���������ȿ���Ԥ��Ǥ����ǽ��������ޤ������Ф餯���֤򤪤��ƺ��٥��������򤪻�����������פ�ɽ������ޤ���', 'url' => 'support/faq/ssl_setting_not_exist.php'),
                                            array('label' => 'SSL�ڡ����ؤΥ��������Ǹ��ޡ����������ɽ������ޤ��󡣸��ޡ����򥯥�å�����ȡ֤��Υڡ����ˤϰ����Ǥʤ�¾�Υ꥽�������ޤޤ�Ƥ��ޤ����פ�ɽ������ޤ���', 'url' => 'support/faq/ssl_setting_keymark_not_display.php'),
                                            array('label' => '���ȼ�IP���ɥ쥹����פǡ���www�פ���Υ����͡�����ȼ�SSL�򿽤����ߤޤ�������www�פʤ��Υ��ɥ쥹��SSL�ڡ����إ�����������ˤϤɤ�����Ф褤�Ǥ�����', 'url' => 'support/faq/ssl_setting_ip_www.php'),
                                            array('label' => 'SSL������Υ����С��ؤΥ��󥹥ȡ���ʤɡ��ȼ�SSL�����Ѥ��뤿��������Ȥ�ɬ�פǤ�����', 'url' => 'support/faq/ssl_setting_operation.php'),
                                            array('label' => '���󥹥ȡ���Ѥߤ��ȼ�SSL����(���󥤥󥹥ȡ���)���뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/ssl_setting_uninstall.php'),
                                            array('label' => '���ץ�����ȼ�SSL��ȯ�Ԥ���SSL�������¾�Υ����С���������Ȥ����Ѥ��뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/ssl_setting_otherserver.php'),
                                            array('label' => '��SSL�����С�������(�����͡���̾) ����̤��λ�Τ��Τ餻�פȤ�����̾�Υ᡼�뤬�Ϥ��ޤ�����', 'url' => 'support/faq/ssl_setting_incomplete.php'),
                                            array('label' => '���ץ�����ȼ�SSL�Υ᡼��ǧ�ڤǾ�ǧ�᡼��μ������Ǥ��ޤ��󡣺����Ǥ��ޤ�����', 'url' => 'support/faq/ssl_setting_resend_email.php'),
                                            array('label' => '̵���ȼ�SSL�μ�ư���������Ԥ�����ư������Ǥ��ޤ���', 'url' => 'support/faq/ssl_setting_update_failed.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '¾�ҥ����ӥ�����ΰ�ž�ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => '�����С���ž',
                                        'url' => 'support/faq/faq_transfer_server.php',
                                        'child' => array(
                                            array('label' => '¾�Ҥ��饵���С����괹����ݤμ��򶵤��Ƥ���������', 'url' => 'support/faq/transfer_server_what.php'),
                                            array('label' => '�����С���ž�κݤˡ�Web�����Ȥ�ɽ����᡼�������������ߤ��뤳�ȤϤ���ޤ�����', 'url' => 'support/faq/transfer_server_down.php'),
                                            array('label' => '�����С���ž�κݤˡ��������ȼ�SSL�����ꤷ�Ƥ������Ȥϲ�ǽ�Ǥ�����', 'url' => 'support/faq/transfer_server_prior.php'),
                                            array('label' => '�����С���ž�ˤ������������ܰ¤Ϥɤ줰�餤�Ǥ�����', 'url' => 'support/faq/transfer_server_time.php'),
                                            array('label' => '�����С���ž��Υ᡼��μ�����ˡ�Ϥɤ�����Ф����Ǥ��礦����', 'url' => 'support/faq/transfer_server_incoming_mail.php'),
                                            array('label' => '�͡��ॵ���С����ڤ��ؤ�������ư���ǧ������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/transfer_server_checkurl.php'),
                                            array('label' => '��ž��Ȥ���Ԥ��Ƥ����������ȤϤǤ��ޤ�����', 'url' => 'support/faq/transfer_server_daiko.php'),
                                            array('label' => '�����С���ž�κݤˡ���ž�������С�������μ����᡼��ϰ����Ѥ��ޤ�����', 'url' => 'support/faq/transfer_server_received_mail.php'),
                                            array('label' => '�����С���ž�κݤˡ���ԥ����ӥ��ˤ��б���ǽ�ʺ�Ȥ򶵤��Ƥ���������', 'url' => 'support/faq/transfer_server_setting_service.php'),
                                            array('label' => '�����С���ž�ȥɥᥤ��ܴɤ򤹤��硢�ɤ������˹Ԥ��Ф褤�Ǥ�����', 'url' => 'support/faq/transfer_server_domain.php'),
                                            array('label' => '�����С���ž�κݤˡ���ž�������С��Ϥ��Ĥ�����󤷤��餤���Ǥ�����', 'url' => 'support/faq/transfer_server_cancel_contract.php'),
                                            array('label' => '�����С���ž�κݤˡ��͡��ॵ���С����ѹ�����ȡ��ɤ줯�餤��ȿ�Ǥ��ޤ�����', 'url' => 'support/faq/transfer_server_name_how_long.php'),
                                            array('label' => '�����С���ž��˥ɥᥤ������򤹤뤳�Ȥǡ���ž����Web�����Ȥ˱ƶ����Ǥ뤳�ȤϤ���ޤ��󤫡�', 'url' => 'support/faq/transfer_server_source_website.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�ɥᥤ��ܴ�',
                                        'url' => 'support/faq/faq_transfer_domain.php',
                                        'child' => array(
                                            array('label' => 'XServer�ɥᥤ��ذܴɤ���ǽ�ʥɥᥤ��μ���򶵤��Ƥ���������', 'url' => 'support/faq/transfer_domain_types.php'),
                                            array('label' => '�ɥᥤ��ܴɤκݤˡ��ܴ������¾�����ѤϤ�����ޤ�����', 'url' => 'support/faq/transfer_domain_cost.php'),
                                            array('label' => '�ɥᥤ���¾�Ҥذܴɤ���ˤϤɤ�����Ф����Ǥ�����', 'url' => 'support/faq/transfer_domain_other.php'),
                                            array('label' => '�ɥᥤ���ܴɤ������ΤǤ��������Ѥ��Ƥ���Web�����Ȥ�᡼��˱ƶ��Ϥ���ޤ�����', 'url' => 'support/faq/transfer_domain_web_mail.php'),
                                            array('label' => '�ȼ��ɥᥤ��ʵ�̵����ŵ��Ŭ�Ѥ��줿�ɥᥤ���¾�Ҥذܴɤ�����ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/transfer_domain_permanent_free.php'),
                                            array('label' => '¾�Ҥ��饨�å��������С��ؤΰܴɤ����Ԥ��Ƥ��ޤ��ޤ���', 'url' => 'support/faq/transfer_domain_failure.php'),
                                            array('label' => '�ɥᥤ��ΰܴɿ������ˡ���ä�ǧ�ڸ������Ϥ��Ƥ��ޤ��ޤ������ɤ�������褤�Ǥ��礦����', 'url' => 'support/faq/transfer_domain_auth_mistake.php'),
                                            array('label' => '�ܴɿ�����ɬ�פʰܴɾ�ǧ�᡼�뤬���夷�ޤ���', 'url' => 'support/faq/transfer_domain_incoming_mail.php'),
                                            array('label' => '�ܴɾ�ǧ�᡼����ä��˴����Ƥ��ޤ��ޤ����������ϤǤ��ޤ�����', 'url' => 'support/faq/transfer_domain_mistake_discard.php'),
                                            array('label' => '�ɥᥤ��ܴɤμ�³���ˤ����������򶵤��Ƥ���������', 'url' => 'support/faq/transfer_domain_howmany_days.php'),
                                            array('label' => '�ɥᥤ��ܴɤκݤˡ��ȼ��ɥᥤ��ʵ�̵����ŵ�����Ѥ�����ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/transfer_domain_present.php'),
                                            array('label' => '�ɥᥤ��ܴɤϡ֥����С���ž��ԡפ��б����Ƥ��ޤ�����', 'url' => 'support/faq/transfer_domain_daiko.php'),
                                            array('label' => '�ɥᥤ��ܴɤκݤˡ��͡��ॵ���С��ʤ�DNS���ѹ�����ޤ�����', 'url' => 'support/faq/transfer_domain_dns_change.php'),
                                            array('label' => '�ɥᥤ��ܴɤκݤˡ��ɥᥤ������Ѵ��¤Ϥɤ��ʤ�ޤ�����', 'url' => 'support/faq/transfer_domain_expiration_date.php'),
                                            array('label' => 'XServer�ɥᥤ��˥ɥᥤ��ܴɤ���λ�����塢ɬ�פʺ�ȤϤ���ޤ�����', 'url' => 'support/faq/transfer_domain_work_required.php'),
                                            array('label' => '¾�Ҥ���XServer�ɥᥤ��ذܴɤ���ݤΰܴɾ�ǧ�᡼��ϡ��ɤΥ᡼�륢�ɥ쥹���Ϥ��ޤ�����', 'url' => 'support/faq/transfer_domain_which_mail.php'),
                                            array('label' => '¾�Ҥ���XServer�ɥᥤ��ذܴɤ򤹤�ȡ�Whois����Ϥɤ��ʤ�ޤ�����', 'url' => 'support/faq/transfer_domain_whois.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '�����С�����',
                                'url' => 'support/faq/faq_service_server.php',
                                'child' => array(
                                    array('label' => '�����С���OS�ϲ��Ǥ�����', 'url' => 'support/faq/service_server_os.php'),
                                    array('label' => '�����С��Υ��ڥå��򶵤��Ƥ���������', 'url' => 'support/faq/service_server_spec.php'),
                                    array('label' => '�����С��ʥǡ������󥿡��ˤϤɤ��ˤ���ޤ�����', 'url' => 'support/faq/service_server_datacenter.php'),
                                    array('label' => '�Хå����å������Ϥɤ��ʤäƤ��ޤ�����', 'url' => 'support/faq/service_server_backup.php'),
                                    array('label' => '�㳲�ʤɤǥ����С����ߤޤ뤳�ȤϤɤ줯�餤�����٤Ǥ���ޤ�����', 'url' => 'support/faq/service_server_stop.php'),
                                    array('label' => 'ž���̲ݶ�Ϥʤ��Ȥ���ޤ�����ž���̤��ɤ���������Ƥ⤤���ΤǤ�����', 'url' => 'support/faq/service_server_transfer_amount.php'),
                                    array('label' => '�͡��ॵ���С��Ȥϲ��Ǥ�����', 'url' => 'support/faq/service_server_name_server.php'),
                                    array('label' => 'Cron�ϻ��ѤǤ��ޤ�����', 'url' => 'support/faq/service_server_cron.php'),
                                    array('label' => 'SSH�ϻȤ��ޤ�����', 'url' => 'support/faq/service_server_ssh.php'),
                                    array('label' => 'telnet�ϻȤ��ޤ�����', 'url' => 'support/faq/service_server_telnet.php'),
                                    array('label' => '.htaccess�����ѤǤ��ޤ�����', 'url' => 'support/faq/service_server_htaccess.php'),
                                    array('label' => 'mod_rewrite�ϻȤ��ޤ�����', 'url' => 'support/faq/service_server_mod_rewrite.php'),
                                    array('label' => '���Ѥ��Ƥ��륵���С����ֹ�Ϥɤ��ǳ�ǧ�Ǥ��ޤ�����', 'url' => 'support/faq/service_server_number.php'),
                                    array('label' => '�����ץ�����Ƴ���ϲ�ǽ�Ǥ�����', 'url' => 'support/faq/service_server_program_introduction.php'),
                                ),
                            ),
                            array(
                                'label' => '�����ġ���ˤĤ���',
                                'url' => '',
                                'child' => array(
                                    array(
                                        'label' => 'XServer���������',
                                        'url' => 'support/faq/faq_tool_info.php',
                                        'child' => array(
                                            array('label' => 'XServer���������ID���ǧ��������', 'url' => 'support/faq/service_missing_member_id.php'),
                                            array('label' => 'XServer��������Ȥ˥�����Ǥ��ޤ���', 'url' => 'support/faq/tool_info_login.php'),
                                            array('label' => '������ܥ���򲡤��Ƥ�ȿ��������ޤ���', 'url' => 'support/faq/tool_info_login_javascript.php'),
                                            array('label' => 'XServer��������ȤΥѥ���ɤ�ʬ����ޤ���', 'url' => 'support/faq/service_missing_infopanel_password.php'),
                                        ),
                                    ),
                                    array(
                                        'label' => '�����С��ѥͥ�',
                                        'url' => 'support/faq/faq_tool_server.php',
                                        'child' => array(
                                            array('label' => '�����С��ѥͥ�Υѥ���ɤ�˺��Ƥ��ޤ��ޤ�����', 'url' => 'support/faq/service_missing_serverpanel_password.php'),
                                            array('label' => '�����С��ѥͥ�˥�����Ǥ��ޤ���', 'url' => 'support/faq/tool_server_login.php'),
                                            array('label' => 'ID��ѥ���ɤ����Ϥ��Ƥ���Τ˥����󤬹Ԥ��ޤ���', 'url' => 'support/faq/tool_server_login_error.php'),
                                            array('label' => '�����оݥɥᥤ��Ȥϲ��Ǥ�����', 'url' => 'support/faq/tool_server_settingdomain.php'),
                                            array('label' => 'Cron��������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/tool_server_setting_cron.php'),
                                            array('label' => '�����������Ϥ�����ϲ�ǽ�Ǥ�����', 'url' => 'support/faq/tool_server_access_setting.php'),
                                            array('label' => '�����������Ϥ��Ѹ�ΰ�̣���狼��ޤ���', 'url' => 'support/faq/tool_server_access_term.php'),
                                            array('label' => '�����������Ϥǡָ�����������̡פ�����������Ǥ��ޤ���', 'url' => 'support/faq/tool_server_access_referrer.php'),
                                            array('label' => '������ܥ���򲡤��Ƥ�ȿ��������ޤ���', 'url' => 'support/faq/tool_server_login_javascript.php'),
                                        ),
                                    ),
                                ),
                            ),
                            array(
                                'label' => '�ػ߻���ˤĤ���',
                                'url' => 'support/faq/faq_dont.php',
                                'child' => array(
                                    array('label' => '�ۡ���ڡ���������ҤǤ���ͭ���ǥ��饤����Ȥ˥��ڡ������ߤ��Ƥ⤤���Ǥ�����', 'url' => 'support/faq/dont_rental.php'),
                                    array('label' => '���Τϲ�ǽ�Ǥ�����', 'url' => 'support/faq/dont_resale.php'),
                                    array('label' => '����ƥ�Ĥ˴ؤ������¤Ϥ���ޤ�����', 'url' => 'support/faq/dont_contents_stint.php'),
                                    array('label' => '���֤���CGI�����¤Ϥ���ޤ�����', 'url' => 'support/faq/dont_cgi_stint.php'),
                                ),
                            ),
                            array(
                                'label' => '���ݡ��ȤˤĤ���',
                                'url' => 'support/faq/faq_support.php',
                                'child' => array(
                                    array('label' => '���ݡ��������ϤɤΤ褦�ˤʤäƤ��ޤ�����', 'url' => 'support/faq/support_system.php'),
                                    array('label' => '�ɤ��ޤǥ��ݡ��Ȥ����㤨�ޤ�����', 'url' => 'support/faq/support_where.php'),
                                    array('label' => 'SEO��Google Search Console�ʥ��������󥽡���ˤ˴ؤ��륵�ݡ��ȤϤ��Ƥ�館�ޤ�����', 'url' => 'support/faq/support_seo.php'),
                                    array('label' => '���ݡ��Ȥؤ������ֹ�򶵤��Ƥ���������', 'url' => 'support/faq/support_tel.php'),
                                    array('label' => '�������ƥ��к��Ϥɤ��ʤäƤ��ޤ�����', 'url' => 'support/faq/support_security.php'),
                                    array('label' => 'XServer���������ID���狼��ޤ��󤬡��������Ƥ��ǧ�������Ǥ���', 'url' => 'support/faq/support_id.php'),
                                    array('label' => '�ۡ���ڡ���������Ϥ��Ƥ�館��ΤǤ�����', 'url' => 'support/faq/support_homepage.php'),
                                    array('label' => '���ݡ��Ȥإ᡼��Ǥ��䤤��碌�򤷤���硢�ɤ줰�餤���ֿ�����ޤ�����', 'url' => 'support/faq/support_mail.php'),
                                ),
                            ),
                            array(
                                'label' => '���ꤪ�ޤ������ݡ��ȤˤĤ���',
                                'url' => 'support/faq/faq_support_daiko.php',
                                'child' => array(
                                    array('label' => '�����ꤪ�ޤ������ݡ��ȡפ�������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/support_daiko_application.php'),
                                    array('label' => '�����ꤪ�ޤ������ݡ��ȡפǰ��꤬��ǽ�ʺ�����Ƥ򶵤��Ƥۤ�����', 'url' => 'support/faq/support_daiko_list.php'),
                                    array('label' => '�����ꤪ�ޤ������ݡ��ȡפ��б���λ�ޤǤˤ�������֤򶵤��Ƥ���������', 'url' => 'support/faq/support_daiko_duration.php'),
                                    array('label' => '�᡼�륢������ȡ�FTP��������Ȥ�ȯ�Ԥ���ꤷ�����Υѥ���ɾ���γ�ǧ��ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/support_daiko_password.php'),
                                ),
                            ),
                                array(
                                    'label' => '�����С���ž��ԤˤĤ���',
                                    'url' => 'support/faq/faq_support_server_daiko.php',
                                    'child' => array(
                                        array('label' => '�����С���ž��Ԥ�ʣ����Web�����Ȥΰ�ž��Ȥ���ꤹ�뤳�ȤϤǤ��ޤ�����', 'url' => 'support/faq/support_server_daiko_multiple.php'),
                                        array('label' => '�����С���ž��Ԥο������߻���ɬ�פʾ���򶵤��Ƥ���������', 'url' => 'support/faq/support_server_daiko_information.php'),
                                        array('label' => '�����С���ž��Ȥˤ����ơ���ž�������С��ؤΥ���������ˡ�򶵤��Ƥ���������', 'url' => 'support/faq/support_server_daiko_access.php'),
                                        array('label' => '�����С���ž��Ԥǰ�ž�����ǡ����򶵤��Ƥ���������', 'url' => 'support/faq/support_server_daiko_data.php'),
                                        array('label' => '��ž���Υ����Ȥ�SSL��https�ˤ�ͭ���ˤ��Ƥ����硢�����С���ž��Ԥ���ꤷ���ݤ�SSL�����ꤵ��ޤ�����', 'url' => 'support/faq/support_server_daiko_ssl.php'),
                                        array('label' => '���å��������С��֤Υ����С���ž�ǡ֥����С���ž��ԡפ����ѤǤ��ޤ�����', 'url' => 'support/faq/support_server_daiko_transfer.php'),
                                    ),
                                ),
                            ),
                        ),
                        array('label' => '�㳲�����ƥʥ󥹾���', 'url' => 'support/information.php'),
                        array('label' => '�㳲�����ƥʥ󥹾������', 'url' => 'support/history.php'),
                        array('label' => '�˥塼��', 'url' => 'support/news.php'),
                    )
                ),
                array('label' => 'XServer���������', 'url' => 'login_info.php'),
                array('label' => '�����С��ѥͥ�', 'url' => 'login_server.php'),
                array('label' => '�ե�����ޥ͡�����', 'url' => 'login_file.php'),
                array('label' => '��ե�����ޥ͡�����', 'url' => 'login_file_old.php'),
                array('label' => 'WEB�᡼��', 'url' => 'login_mail.php'),
                array('label' => '�ץ饤�Х����ݥꥷ��', 'url' => 'privacy.php'),
                array('label' => '�Ŀ;���μ�갷���ˤĤ���', 'url' => 'privacy_announcement.php'),
                array('label' => '����ؤ��軰���󶡰���', 'url' => 'privacy_third_party.php'),
                array('label' => '�������ȤΤ����ѤˤĤ���', 'url' => 'sitepolicy.php'),
                array('label' => '���ѵ���', 'url' => 'rule/rule.php',
                    'child' => array(
                        array('label' => '�ɥᥤ����������ӥ��ʥ��å��������С���', 'url' => 'rule/rule_olddomain.php'),
                    ),
                ),
                array('label' => 'AI����å����Ѥ���ջ���', 'url' => 'rule/rule_aichat.php'),
                array('label' => 'WordPress�ơ������ѵ���', 'url' => 'rule_wptheme.php'),
                array('label' => '�����ȥޥå�', 'url' => 'sitemap.php'),
                array('label' => '��ҳ���', 'url' => 'company.php'),
                array('label' => '���ո�������˾�ե�����', 'url' => 'opinion/index.php'),
                array('label' => '����å���쥹���ݥ���ȴԸ�����', 'url' => 'cashless.php'),
                array('label' => '��ͧã�Ҳ�ץ����', 'url' => 'friend.php'),
                array('label' => '���ե��ꥨ����', 'url' => 'affiliate.php'),
                array('label' => '�������Τ�����', 'url' => 'largecontracts.php'),
                array(
                    'label' => 'ˡ��',
                    'child' => array(
                        array('label' => '�������Τ�����', 'url' => 'largecontracts.php'),
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