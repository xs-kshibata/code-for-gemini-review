<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ޥ˥奢�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��Ǥ�������Τ���ʧ����ˡ��Ƽ��³���ˤĤ��ơ������ġ���λȤ�����᡼�륽�եȡ�FTP���եȤλȤ����ʤɤˤĤ����������Ƥ��ޤ���">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>�ޥ˥奢��</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">�ޥ˥奢��</h3>
                <p class="mb30">
                    ���å��������С��Υޥ˥奢��Ǥ���<br>
                    ���Υ�˥塼���ޤ��ϲ��ι��ܤ��顢���Τ�ˤʤꤿ�����ܤ����Ӥ���������
                </p>
                
                <aside class="msg mb30">
                    <h4 class="msg_ttl"><i class="ico ico_circle-right"></i>¾�Ҥ��饵���С���ž�򤪹ͤ��Τ����ͤ�</h4>
                    <div class="msg_body">
                        <p>Web�����Ȥ�WordPress���ΰ�ž��Ȥ�ץ�Υ����åդ���Ԥ���֥����С���ž��ԡפ��󶡤��Ƥ���ޤ��Τǡ����Ҥ����Ѥ򤴸�Ƥ����������</p>
                        <p class="tac"><a href="../price/service_server_daiko.php"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="�����С���ž���"></a></p><p>�ޤ��������Ȥ�¾�Ҥ��饨�å��������С��ؤΡ֥����С���ž�פ�Ԥ��������Τ���ˡ��ܤ�������ޤȤ�ޤ����Τǡ������Υ���ƥ�Ĥ򤴻��Ȥ���������</p>
                        <p class="m0">
                            <a href="../order/order_transfer_server.php" class="mr5 btn btn_white">�֥����С���ž�פΤ��������߼��<i class="ico ico_chevron-right"></i></a>
                        </p>
                    </div>
                </aside>


                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body column2">
                    <li><a href="#link-a">���������ߤˤĤ���</a></li>
                    <li><a href="#link-b">�ɥᥤ��ˤĤ���</a></li>
                    <li><a href="#link-c">�����С��ˤĤ���</a></li>
                    <li><a href="#link-d">�����С��ץ����ˤĤ���</a></li>
                    <li><a href="#link-e">���󥹥ȡ���ˤĤ���</a></li>
                    <li><a href="#link-k">WordPress�ơ��ޤˤĤ���</a></li>
                    <li><a href="#link-f">�᡼��ˤĤ���</a></li>
                    <li><a href="#link-g">FTP�ˤĤ���</a></li>
                    <li><a href="#link-h">�ǡ����١����ˤĤ���</a></li>
                    <li><a href="#link-i">�����ġ���ˤĤ���</a></li>
                    <li><a href="#link-l">�ȥ�֥뤫�������ˤĤ���</a></li>
                    <li><a href="#link-j">�Ѹ콸</a></li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">���������ߤˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">�Ƽ浪��������</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="../order/index.php">�����С��Τ���������</a></li>
                                        <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a></li>
                                        <li><a href="man_order_daiko.php">���ꤪ�ޤ������ݡ��ȤΤ���������</a></li>
                                        <li><a href="man_order_server_daiko.php">�����С���ž��ԤΤ���������</a></li>
                                        <li><a href="man_order_present_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ</a></li>
                                        <li><a href="man_order_campaign_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ�ʥ����ڡ�����ŵ��</a></li>
                                        <li><a href="man_order_oneyear_domain.php">�ȼ��ɥᥤ��1ǯ̵����ŵ</a></li>
                                        <li><a href="man_order_campaign_cashback.php">����å���Хå���ŵ</a></li>
										<li><a href="man_order_refer_friend_program.php">��ͧã�Ҳ�ץ����</a></li>
                                        <li><a href="man_order_change_plan.php">�ץ����ѹ�</a></li>
                                    </ul>
                                    <dl>
                                        <dt><a href="man_order_servicetransfer_intro.php">XServer�ӥ��ͥ��ؤ��ѹ�</a></dt>
                                        <dd>
                                            <ul class="list list_chevron-right clearfix">
                                                <li><a href="man_order_servicetransfer_flow.php">�����Ѽ��</a></li>
                                                <li><a href="man_order_servicetransfer_detail.php">���;ܺ�</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
									<dl>
                                       <dt><a href="man_order_servertransfer_intro.php">�������С���ñ�ܹ�</a></dt>
                                          <dd>
                                              <ul class="list list_chevron-right clearfix">
                                              <li><a href="man_order_servertransfer_flow.php">�����Ѽ��</a></li>
                                              <li><a href="man_order_servertransfer_detail.php">���;ܺ�</a></li>
                                              </ul>
                                          </dd>
                                     </dl>
								</dd>
                            </dl>
							
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">����ʧ���ˤĤ���</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_pay_etc.php">����Τ���ʧ��</a></li>
                                        <li><a href="man_order_pay_method_convenient.php">����ӥ˥��󥹥��ȥ�ʧ��</a></li>
                                        <li><a href="man_order_pay_method_credit.php">���쥸�åȥ����ɷ��</a></li>
                                        <li><a href="man_order_pay_method_bank.php">��Կ������</a></li>
                                        <li><a href="man_order_pay_method_pay_easy.php">�ڥ��������</a></li>
                                        <li><a href="man_order_pay_method_paidy.php">����ʧ���ʥڥ��ǥ��˷��</a></li>
                                        <li><a href="man_order_pay_method_prepaid.php">�ץ�ڥ��ɷ��</a></li>
                                    </ul>
                                    <dl class="mb10">
                                        <dt><a href="man_order_pay_method_autopay.php">��ư��������</a></dt>
                                        <dd>
                                            <ul class="list list_chevron-right clearfix">
                                                <li><a href="man_order_pay_method_autopay_credit.php">���쥸�åȥ����ɤˤ�뼫ư����</a></li>
                                                <li><a href="man_order_pay_method_autopay_paidy.php">����ʧ���ʥڥ��ǥ��ˤˤ�뼫ư����</a></li>
                                                <li><a href="man_order_pay_method_autopay_prepaid.php">�ץ�ڥ��ɤˤ�뼫ư����</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_pay_method_autopay_resetting.php">��ư���������Ԥ������κ�����</a></li>
                                        <li><a href="man_order_pay_report.php">����ʧ�����</a></li>
                                        <li><a href="man_order_pay_history.php">����ʧ������</a></li>
                                        <li><a href="man_order_pay_bill.php">����񡦼��ν񡦸��ѽ�</a></li>
                                    </ul>
                                </dd>
                            </dl>

                            <dl class="menu-box_sub-box">
                                <dd>
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_order_addition.php">�����ӥ�����������</a></li>
                                    <li><a href="man_order_about_id.php">�Ƽ�ID�ˤĤ���</a></li>
                                    <li><a href="man_order_change_id.php">��Ͽ����ˤĤ���</a></li>
                                    <li><a href="man_order_user_merge.php">��������ȡ����������</a></li>
                                </ul>
                                </dd>
                            </dl>

                            <dl class="menu-box_sub-box pb0">
                                <dd>
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_order_reissue.php">�Ƽ�ѥ���ɤκ�����</a></li>
									<li><a href="man_order_sslreissue.php">���ץ�����ȼ�SSL�κ�ȯ��</a></li>
									<li><a href="man_order_twostepauth.php">���ʳ�ǧ������</a></li>
                                    <li><a href="man_order_loginsecurity.php">�Կ��ʥ��������ǧ��</a></li>
                                    <li><a href="man_order_free_trial.php">̵��������֤ˤĤ���</a></li>
                                    <li><a href="man_order_cancel.php">�������ߤμ��ä�</a></li>
                                    <li><a href="man_order_quit.php">����</a></li>
                                </ul>
                                </dd>
                            </dl>
							
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">����̾���ˤĤ���</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_order_transfer_usage_rights.php">�軰�Ԥˤ��������Ϥ�����</a></li>
                                        <li><a href="man_order_name_change.php">������̾�����ѹ�������</a></li>
                                         <li><a href="man_order_domain_transfer.php">�ɥᥤ��ξ��Ϥ򤹤���</a></li>
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
                    <h4 class="section_ttl" id="link-b">�ɥᥤ��ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_domain_spec.php">���Ͱ���</a></li>
                                <li><a href="man_domain_transfer.php">�ɥᥤ��ΰܴɤˤĤ���</a></li>
                                <li><a href="man_domain_how_to_recovery.php">�����ɥᥤ������</a></li>
                                <li><a href="man_domain_setting.php">�ɥᥤ������</a></li>
                                <li><a href="man_domain_reset.php">�ɥᥤ��ν����</a></li>
                                <li><a href="man_domain_subdomain_setting.php">���֥ɥᥤ������</a></li>
                                <li><a href="man_domain_authenticate.php">�ɥᥤ��ǧ��</a></li>
                                <li><a href="man_domain_checkproxy.php">ư���ǧ�ˤĤ���</a></li>
                                <li><a href="man_domain_namesever_setting.php">�͡��ॵ���С�������</a></li>
                             </ul>
							<dl class="menu-box_sub-box">
								<dt><a href="man_domain_dns_setting.php">DNS�쥳���ɤ��Խ�</a></dt>
								<dd>
									<ul class="list list_chevron-right clearfix">
										<li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(��G Suite)�򤪻Ȥ������������</a></li>
										<li><a href="man_domain_dns_setting_blog.php">�����֥������ꤹ����</a></li>
										<li><a href="man_domain_dns_setting_mail_server.php">�����᡼�륵���С��򤪻Ȥ������������</a></li>
									</ul>
								</dd>
							</dl>
                            <dl class="menu-box_sub-box">
                                <dt><a href="man_domain_whois.php">Whois����</a></dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_domain_about_whois.php">Whois�ˤĤ���</a></li>
                                        <li><a href="man_member_setting_whois.php">Whois��������</a></li>
                                    </ul>
                                </dd>
                            </dl>
                             <ul class="list list_chevron-right clearfix">
                                <li><a href="man_domain_register_lock.php">�쥸���ȥ��å�</a></li>
                                <li><a href="man_domain_auth_key.php">ǧ�ڸ�</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">�����С��ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_spec.php">���Ͱ���</a></li>
                                <li><a href="man_server_folder.php">����ե�����ˤĤ���</a></li>
                                <li><a href="man_server_ssl.php">̵���ȼ�SSL����</a></li>
                                <li><a href="man_server_nginx.php">nginx�ˤĤ���</a></li>
                                <li><a href="man_server_http2.php">HTTP/2�ˤĤ���</a></li>
                                <li><a href="man_server_limit.php">������������</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_htaccess.php">.htaccess</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_fullssl.php">Web�����Ȥξ��SSL��</a></li>
                                        <li><a href="man_server_mobby.php">��Х�����������Ȥο���ʬ����</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_permission.php">�ѡ��ߥå����</a></li>
                                <li><a href="man_server_errorpage.php">���顼�ڡ�������</a></li>
                                <li><a href="man_server_error.php">�Ƽ泌�顼��å�����</a></li>
                            </ul>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_mime.php">MIME����</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_phpini_edit.php">php.ini����ˤĤ���</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_phpini_setting_item.php">php.ini����������ǽ�ʹ���</a></li>
                                        <li><a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_server_php_rapid.php">PHP�ι�®���ˤĤ���</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_server_php_fastcgi.php">FastCGI�ˤĤ���</a></li>
                                        <li><a href="man_server_php_apc.php">APC/OPcache�ˤĤ���</a></li>
                                        <li><a href="man_server_php_jit.php">JIT�ˤĤ���</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">Web�ե��������ˤĤ���</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                    	<li><a href="man_server_webfont_wp.php">WordPress�ץ饰����ǤΤ�����</a></li>
                                        <li><a href="man_server_webfont_html.php">HTML���ҷ����ǤΤ�����</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_server_xaccelerator.php">X��������졼��(���å�����������졼��)</a></li>
                                <li><a href="man_server_xpagespeed.php">XPageSpeed����ˤĤ���</a></li>
                                <li><a href="man_server_mod_pagespeed.php">mod_pagespeed����ˤĤ���</a></li>
                                <li><a href="man_server_cache.php">�����С�����å�������</a></li>
                                <li><a href="man_server_expires.php">�֥饦������å�������</a></li>
                                <li><a href="man_server_transfer.php">������ž������</a></li>
                                <li><a href="man_server_ipcheck.php">����������������</a></li>
                                <li><a href="man_server_analyzer.php">������������</a></li>
                                <li><a href="man_server_log.php">����������</a></li>
								<li><a href="man_server_logerror.php">���顼��</a></li>
								<li><a href="man_server_maildir.php">Maildir�ˤĤ���</a></li>
                                <li><a href="man_server_ssh.php">SSH����</a></li>
                                <li><a href="man_server_ssh_connect_tera.php">SSH���եȤ�����(Tera Term)</a></li>
                                <li><a href="man_server_wpsecurity.php">WordPress�������ƥ�����</a></li>
                                <li><a href="man_server_wprecovery.php">WordPress�ꥫ�Х꡼</a></li>
                                <li><a href="man_server_waf.php">WAF����</a></li>
                                <li><a href="man_server_ads.php">ads.txt</a></li>
                                <li><a href="man_server_download.php">��ư�Хå����åפ���Υǡ�������</a></li>
                                <li><a href="man_server_restore.php">��ư�Хå����åפ���Υǡ�������</a></li>
                                <li><a href="man_server_resource_information.php">�꥽������˥���</a></li>
                                <li><a href="man_server_security_scan.php">Web������������<span class="ico_biz">�ӥ��ͥ��ץ��</span></a></li>
                                <li><a href="man_server_adminuser.php">�����ԥ桼��������<span class="ico_biz">�ӥ��ͥ��ץ��</span></a></li>
                            </ul>
                            
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">�����С��ץ����ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_program_soft.php">�ץ������졦���ޥ�ɥѥ�</a></li>
                                <li><a href="man_program_cgi.php">CGI��SSI��PHP</a></li>
                                <li><a href="man_program_cron.php">Cron����</a></li>
                                <li><a href="man_program_php_ver.php">PHP�ΥС������ˤĤ���</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">���󥹥ȡ���ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_install_outside_program.php">ư���ǧ�Ѥߥץ����</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_install_auto.php">��ñ���󥹥ȡ���</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_auto_word.php">WordPress ���ܸ���</a></li>
                                        <li><a href="man_install_auto_ec4.php">EC-CUBE 4</a></li>
                                        <li><a href="man_install_auto_puki.php">PukiWiki</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">��ư���󥹥ȡ���</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                    	<li><a href="man_install_word.php">WordPress ���ܸ���</a></li>
                                        <li><a href="man_install_zen.php">Zen Cart</a></li>
                                        <li><a href="man_install_magento.php">Magento2</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">�����ȥ��ԡ�</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_copy_word.php">WordPress�Υ����ȥ��ԡ��ˤĤ���</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box">
                            	<dt class="menu-box_nolink">CGI�ġ���</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_cgi_mailform.php">�᡼��ե�����</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="menu-box_sub-box mb0 pb0">
                            	<dt class="menu-box_nolink">¾�ҥ����ӥ�����ΰ�ž</dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_install_transfer_wp.php">WordPress��ñ�ܹ�</a></li>
                                        <li><a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a></li>
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
                    <h4 class="section_ttl" id="link-k">WordPress�ơ��ޤˤĤ���</h4>
                    <div class="section_body">
                        <div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_wp_theme_introduction.php">��WordPress�ơ��ޤξҲ�</a></li>
                                <li><a href="man_wp_theme_purchase.php">WordPress�ơ��ޤι���������</a></li>
                                <li><a href="man_wp_theme_install.php">���󥹥ȡ���Ѥ�WordPress�˥ơ��ޤ򥤥󥹥ȡ���</a></li>
                                <li><a href="man_wp_theme_download.php">WordPress�ơ��ޤ���������</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-f">�᡼��ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_mail_spec.php">���Ͱ���</a></li>
                                <li><a href="man_mail_add.php">�᡼�륢������Ȥ��ɲ�</a></li>
                                <li><a href="man_mail_bulkadd.php">�᡼�륢������Ȥΰ����Ͽ</a></li>
                                <li><a href="man_mail_account_csv.php">�᡼�륢������Ȥ�CSV���������</a></li>
                                <li><a href="man_mail_bulk_change.php">�᡼�륢������Ȥΰ���ѹ�</a></li>
                                <li><a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a></li>
                                <li><a href="man_mail_change_capacity.php">�᡼�륢������Ȥ������ѹ�</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_mail_setting.php">�᡼�륽�եȤ�����</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_mail_setting_olwin.php">Outlook for Windows / Outlook (new)</a></li>
                                        <li><a href="man_mail_setting_wlm.php">WindowsLive�᡼��</a></li>
                                        <li><a href="man_mail_setting_windows10.php">Windows10�᡼��</a></li>
                                        <li><a href="man_mail_setting_windows8.php">Windows8�᡼��</a></li>
                                        <li><a href="man_mail_setting_tb_31.php">Mozilla Thunderbird(Ver31��)</a></li>
                                        <li><a href="man_mail_setting_ol2019.php">Outlook 2019(Outlook 365)</a></li>
                                        <li><a href="man_mail_setting_ol2016.php">Outlook 2016</a></li>
                                        <li><a href="man_mail_setting_ol2013.php">Outlook 2013</a></li>
                                        <li><a href="man_mail_setting_ol2010.php">Outlook 2010</a></li>
                                        <li><a href="man_mail_setting_ol.php">Outlook 2007</a></li>
                                        <li><a href="man_mail_setting_becky.php">Becky! Internet Mail</a></li>
                                        <li><a href="man_mail_setting_mac_osx.php">Mac�᡼��(OS X)</a></li>
                                        <li><a href="man_mail_setting_iphone.php">iPhone�᡼��</a></li>
                                        <li><a href="man_mail_setting_ipad.php">iPad�᡼��</a></li>
                                        <li><a href="man_mail_setting_gmail.php">Gmail</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_mail_mailinglist.php">�᡼��󥰥ꥹ�ȤˤĤ���</a></li>
                                <li><a href="man_mail_mailmagazine.php">�᡼��ޥ�����ˤĤ���</a></li>
                                <li><a href="man_mail_spam_setting.php">���ǥ᡼��ե��륿����</a></li>
                                <li><a href="man_mail_mailreply.php">��ư��������</a></li>
                                <li><a href="man_mail_sorting.php">�᡼��ο���ʬ��</a></li>
                                <li><a href="man_mail_jpcheck.php">SMTPǧ�ڤι񳰥���������������</a></li>
                                <li><a href="man_mail_op25b.php">OP25B�ˤĤ���</a></li>
                                <li><a href="man_mail_transfer.php">ž������</a></li>
                                <li><a href="man_mail_dkim.php">DKIM����</a></li>
                                <li><a href="man_mail_spf.php">SPF����</a></li>
                                <li><a href="man_mail_dmarc.php">DMARC����</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-g">FTP�ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_ftp_spec.php">���Ͱ���</a></li>
                                <li><a href="man_ftp_add.php">FTP��������Ȥ��ɲ�</a></li>
                            </ul>
                            <dl class="menu-box_sub-box">
                            	<dt><a href="man_ftp_setting.php">FTP���եȤ�����</a></dt>
                            	<dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_ftp_ffftp_setting.php">FFFTP������</a></li>
                                        <li><a href="man_ftp_filezilla_setting.php">FileZilla������</a></li>
                                        <li><a href="man_ftp_hpb_setting.php">�ۡ���ڡ������ӥ����20������</a></li>
                                        <li><a href="man_ftp_dream_setting.php">Dreamweaver CC������</a></li>
                                        <li><a href="man_ftp_cyberduck_setting.php">Cyberduck������</a></li>
                                        <li><a href="man_ftp_bind_setting.php">BiND for WebLiFE 8������</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_ftp_ftpaccess.php">.ftpaccess</a></li>
                                <li><a href="man_ftp_id.php">FTP��������</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
				<section class="section">
                    <h4 class="section_ttl" id="link-h">�ǡ����١����ˤĤ���</h4>
                    <div class="section_body">
                            <div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_db_spec.php">���Ͱ���</a></li>
                                <li><a href="man_db_setting.php">MySQL������</a></li>
                                <li><a href="man_db_download.php">��ư�Хå����åפ���Υǡ�������</a></li>
                                <li><a href="man_db_man_backup.php">���ߤ�MySQL����������</a></li>
                                <li><a href="man_db_myadmin.php">phpMyAdmin</a></li>
                                <li><a href="man_db_shift_tool.php">MySQL�ܹԥġ���</a></li>
                                <li><a href="man_db_restore.php">��ư�Хå����åפ��������</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-i">�����ġ���ˤĤ���</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <div class="menu-box_sub-box">
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_tool_info.php">XServer���������</a></li>
                                    <li><a href="man_tool_xserver.php">���å��������С��������</a></li>
                                    <li><a href="man_tool_server.php">�����С��ѥͥ�</a></li>
                                    <li><a href="man_tool_file.php">�ե�����ޥ͡�����</a></li>
                                </ul>
                            </div>
                            <dl class="menu-box_sub-box">
                                <dt class="menu-box_nolink">�᡼������ġ���</dt>
                                <dd>
                                    <ul class="list list_chevron-right clearfix">
                                        <li><a href="man_tool_mail_panel.php">�᡼��ѥͥ�</a></li>
                                        <li><a href="man_tool_mail.php">WEB�᡼��</a></li>
                                        <li><a href="man_tool_mail_sp.php">WEB�᡼��(���ޡ��ȥե��󡦥��֥�å�)</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="man_tool_aichat.php">AI����åȤˤĤ���</a></li>
                            </ul>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-l">�ȥ�֥뤫�������ˤĤ���</h4>
                    <div class="section_body">
                        <div class="menu-box">
                            <div class="menu-box_sub-box">
                                <ul class="list list_chevron-right clearfix">
                                    <li><a href="man_malicious_mailform.php">�᡼��ե�������Ѥ����������������ˤĤ���</a></li>
                                    <li><a href="man_malicious_password_crack.php">�᡼�륢������ȤΥѥ���ɥ���å��ˤĤ���</a></li>
                                    <li><a href="man_malicious_access.php">������������(�ե�����β����������ʥե���������)�ˤĤ���</a></li>
                                    <li><a href="man_malicious_login.php">XServer��������ȡ������С��ѥͥ������������ˤĤ���</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.menu_box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-j">�Ѹ콸</h4>
                    <div class="section_body">
                    	<div class="menu-box">
                            <ul class="list list_chevron-right clearfix">
                                <li><a href="terms.php">�Ѹ콸</a></li>
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
