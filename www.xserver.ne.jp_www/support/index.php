<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���䤤��碌������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��ˤ褯���䤤��碌�����������Ƥ�ޤȤ�ƾҲ𤷤Ƥ��ޤ��� ���䤤��碌�����ˡ���ǧ���Ƥ�����������������β��ˤ���Ω�Ƥ���������">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
            <?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">���䤤��碌</span></p>

        <section class="section">
        	<h3 class="section_ttl support">���䤤��碌������...</h3>
        	<div class="section_body support">
                <aside class="support-news">
                    <p class="support-news_ttl">���פʤ��Τ餻</p>
                    <ul class="list list_arrow-right">
                        <li><a href="../support/faq/service_mail_trouble_mail_thunderbird.php">Thunderbird�������᡼�뤬�������Ǥ��ʤ��ʤä������б��ˤĤ���</a></li>
                        <li><a href="../support/faq/service_mail_trouble_err_mail_sender.php">�֥�å��ꥹ��(RBL)����Ͽ���졢����ΰ���˥᡼�뤬�����Ǥ��ʤ��ʤä������б��ˤĤ���</a></li>
						<li><a href="../support/faq/service_mail_trouble_err_mail_sender_gmail.php">Gmail�ؤΤߥ᡼�뤬�����Ǥ��ʤ�(�������Ƥ��Ϥ��ʤ�)�����б��ˤĤ���</a></li>
                    </ul>
                </aside>
                <!-- /support-news -->

                <aside class="support-news-phishing">
                    <p class="support-news-phishing_ttl">�ե��å��󥰥᡼��˴ؤ��뤪�Τ餻</p>
                    <p class="support-news-phishing_txt">���å��������С������ä��֤ʤꤹ�ޤ����ե��å��󥰥᡼��פ˴ؤ��뤪�䤤��碌�������Ƥ��ޤ���<br>
                        �Կ��ʥ᡼�뤬�Ϥ��������н���ˡ�ˤĤ��Ƥϡ��ʲ��򤴻��Ȥ���������</p>
                    <ul class="list list_arrow-right">
                        <li><a href="<?php print $SITE_URL; ?>support/information_phishing.php"><b>���å��������С������ä��ե��å��󥰥᡼��ˤ���դ�������</b></a></li>
                    </ul>
                    <p class="support-news-phishing_txt">�ޤ���ľ��Υե��å��󥰥᡼������ƤˤĤ��Ƥϥ˥塼���򤴳�ǧ����������</p>
                    <ul class="list list_arrow-right">
                        <li><a href="<?php print $SITE_URL; ?>news_detail.php?view_id=15334"><b>�˥塼��������մ������������ӥ������ä��ե��å��󥰥᡼��ˤ���դ�������(2025ǯ4��17�� �Ǻ�)</b></a></li>
                    </ul>
                </aside>
                <!-- /support-news-phishing -->

				<p class="support-btn single mt50 mb50">
					<a href="../support/information.php" class="btn btn_gray">�㳲�����ƥʥ󥹾���<i class="ico ico_chevron-right"></i></a>
				</p>
				<!-- /support-button -->

				<section class="support-section mb50">
					<h4 class="support-section_ttl"><span class="support-section_ttl-sub">��������ʤɤǤ����������</span><br>�ޥ˥奢�롦�褯�������򤴳��Ѥ�������</h4>
					<div class="support-section_body">
						<div class="support-searchSec tac">
							<div class="search search--top">
								<h2 class="search_ttl">������ɤ���õ��</h2>
								<div class="search-box-container">
									<div class="search-box">
										<script>
											window.onload = function(){
												document.getElementById('gsc-i-id1').placeholder = '�������� ������';
											};
										</script>
										<script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
										<div class="gcse-searchbox-only"></div>
									</div>
								</div>
							</div>
							<ul class="support-btn_dbl">
								<li class="support-btn"><a href="../manual/" class="btn btn_blue btn_blue-secondary">�ޥ˥奢���������õ��<i class="ico ico_chevron-right"></i></a></li>
								<li class="support-btn"><a href="../support/faq/" class="btn btn_blue btn_blue-secondary">�褯��������������õ��<i class="ico ico_chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
				</section>
				<!-- /support-section -->

				<section class="support-section pt10">
					<h4 class="support-section_ttl mb30">�褯�����������䤤��碌</h4>
					<div class="support-section_body">

						<div class="support-faqmore">
							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�������̤˥����󤬤Ǥ��ʤ�</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/tool_info_login.php">XServer��������Ȥ˥�����Ǥ��ޤ���</a></li>
										<li><a href="../support/faq/tool_server_login.php">�����С��ѥͥ�˥�����Ǥ��ޤ���</a></li>
									</ul>
								</div>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�᡼�뤬�������Ǥ��ʤ�</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_mail_trouble_send.php">�᡼�뤬�����Ǥ��ޤ���</a></li>
										<li><a href="../support/faq/service_mail_trouble_reception.php">�᡼�뤬�����Ǥ��ޤ���</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_receive_error.php">�᡼�뤬�����Ǥ�������maildir over quota.�פȵ��ܤ��줿���顼�᡼�뤬�᡼�����������Ϥ��褦�ˤʤ�ޤ���</a></li>
										<li><a href="../support/faq/service_mail_trouble_ssl_certificate.php">�᡼�륽�եȤǡּ��̾�����ǧ�Ǥ��ʤ��ס־����������פȤ������顼���Ф�褦�ˤʤ�ޤ���</a></li>
										<li><a href="../support/faq/service_mail_trouble_error.php">�Ȥ˳Ф��Τʤ��᡼��Υ��顼�����ˤ���äƤ���褦�ˤʤ�ޤ���</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn">
									<a href="../support/faq/faq_service_mail_trouble.php">�᡼��Υȥ�֥�ˤĤ���<i class="ico ico_chevron-right"></i></a>
								</p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�ۡ���ڡ�����ɽ������ʤ�</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_hp_trouble_403.php">��403 Forbidden�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���</a></li>
										<li><a href="../support/faq/service_hp_trouble_500.php">��500 Internal Server Error�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���</a></li>
										<li><a href="../support/faq/service_hp_trouble_503.php">��503 Service Temporarily Unavailable�פ�ɽ������ƥۡ���ڡ����������ޤ���</a></li>
										<li><a href="../support/faq/service_hp_trouble_not_update.php">�֤���WEB���ڡ����ؤϡ��ޤ��ۡ���ڡ��������åץ��ɤ���Ƥ��ޤ��󡣡פȤ������顼��ɽ������ޤ�</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_hp_trouble.php">�ۡ���ڡ����Υȥ�֥�ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">��������ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/contract_new_sms.php">SMSǧ�ڡ�����ǧ�ڤ����ޤ����������������ߤ��Ǥ��ޤ���</a></li>
										<li><a href="../support/faq/contract_new_receive_an_email.php">����å���Хå���ŵ�ǥ����С��򿽹��ߤ��ޤ�������������ˡ�˴ؤ���᡼��Ϥ��ĺ��Ϥ��ޤ�����</a></li>
										<li><a href="../support/faq/contract_new_start.php">�������ߤ������ѳ��ϤޤǤδ��֤ϤɤΤ��餤�Ǥ�����</a></li>
										<li><a href="../support/faq/contract_new_plan.php">�ץ��ˤ�äƵ�ǽ�ΰ㤤�Ϥ���ޤ�����</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_new.php">��������ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�ɥᥤ��ܴɤˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../manual/man_domain_transfer.php">¾�Ҥ���ɥᥤ��ܴɤ򤹤���򶵤��Ƥ�������</a></li>
										<li><a href="../support/faq/transfer_domain_failure.php">¾�Ҥ��饨�å��������С��ؤΰܴɤ����Ԥ��Ƥ��ޤ��ޤ�</a></li>
										<li><a href="../support/faq/transfer_domain_incoming_mail.php">�ܴɿ�����ɬ�פʰܴɾ�ǧ�᡼�뤬�Ϥ��ޤ���</a></li>
										<li><a href="../support/faq/transfer_domain_mistake_discard.php">�ܴɾ�ǧ�᡼����ä��˴����Ƥ��ޤ��ޤ���</a></li>
										<li><a href="../support/faq/transfer_domain_howmany_days.php">�ɥᥤ��ܴɤμ�³���ˤ����������򶵤��Ƥ�������</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_transfer_domain.php">�ɥᥤ��ܴɤˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�����С���ž�ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/transfer_server_what.php">¾�Ҥ��饵���С����괹����ݤμ��򶵤��Ƥ���������</a></li>
                                        <li><a href="../support/faq/transfer_server_prior.php">�����С���ž�κݤˡ��������ȼ�SSL�����ꤷ�Ƥ������Ȥϲ�ǽ�Ǥ�����</a></li>
										<li><a href="../support/faq/transfer_server_daiko.php">��ž��Ȥ���Ԥ��Ƥ�館�ޤ�����</a></li>
										<li><a href="../support/faq/domain_multi_setting_server_change.php">���å��������С�Ʊ�Τǥɥᥤ��α��ѥ����С����ѹ��������Ǥ�</a></li>
										<li><a href="../support/faq/transfer_server_incoming_mail.php">�����С���ž��Υ᡼��μ�����ˡ�Ϥɤ�����Ф����Ǥ�����</a></li>
										<li><a href="../support/faq/transfer_server_checkurl.php">�͡��ॵ���С����ڤ��ؤ�������ư���ǧ������ˡ�򶵤��Ƥ�������</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_transfer_server.php">�����С���ž�ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">���󹹿�������ʧ���ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/contract_renewal_procedure.php">���󹹿��μ�³���ϤɤΤ褦�ˤ���ΤǤ�����</a></li>
										<li><a href="../support/faq/contract_renewal_suspend.php">�����̤ʧ���ˤ�ꥵ���С�������뤵��ޤ�����������������ʧ���а���³�����ѤǤ��ޤ�����</a></li>
										<li><a href="../support/faq/contract_renewal_payment.php">�����������ΤǤ����������ʧ���ץڡ����˷���ɽ������ޤ���</a></li>
										<li><a href="../support/faq/contract_price_invoice_issue.php">����񡦼��ν񡦸��ѽ��ȯ�Ԥϲ�ǽ�Ǥ�����</a></li>
										<li><a href="../support/faq/contract_renewal_automatic_update_error.php">�ּ�ư����̤��λ�Τ��Τ餻�פΥ᡼�뤬�Ϥ��ޤ������б���ˡ�򶵤��Ƥ���������</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_renewal.php">���󹹿��ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�������Ƥγ�ǧ���ѹ��ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/support_id.php">XServer���������ID��ʬ����ޤ��󤬡�������ǧ�������Ǥ�</a></li>
										<li><a href="../support/faq/contract_alteration_mailaddress_change.php">��Ͽ�᡼�륢�ɥ쥹���ѹ��������Ǥ�</a></li>
										<li><a href="../support/faq/contract_alteration_assignment.php">�̤�XServer��������Ȥإ����С���������ȡ��ޤ��ϥɥᥤ�����Ϥ��뤳�Ȥϲ�ǽ�Ǥ�����</a></li>
										<li><a href="../support/faq/contract_alteration_name.php">��̾���Ѥ�ä��ΤǷ���̾�����ѹ��������Ǥ�</a></li>
										<li><a href="../support/faq/contract_alteration_change_plan.php">�����С��Υץ����ѹ�������򶵤��Ƥ�������</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_contract_alteration.php">�����ѹ��ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">�᡼��ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../manual/man_mail_setting.php">�᡼�륽�եȤؤ�������ˡ�򶵤��Ƥ�������</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_know_password.php">�᡼�륢������ȤΥѥ���ɤ��狼��ޤ���</a></li>
										<li><a href="../support/faq/service_mail_setting_domain_auth.php">�᡼�륢������Ⱥ������ˡ��ɥᥤ��ǧ�ڤ������</a></li>
										<li><a href="../support/faq/service_mail_trouble_not_send.php">��ĥ��ι���������ܹ񳰤ˤ�����ü�᡼�뤬�����Ǥ��ʤ��ʤ�ޤ���</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_mail_trouble.php">�᡼���������ˡ<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">WordPress�ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_hp_wp_login.php">���å���ܡ��ɤإ����󤹤����ʬ����ʤ��ʤ�ޤ���</a></li>
										<li><a href="../support/faq/service_hp_wp_access_denied.php">��WordPress�������̤ؤΥ������������ݤ���ޤ����פ�ɽ������ޤ���</a></li>
										<li><a href="../support/faq/service_hp_wp_change_domain.php">���å��������С��֤�WordPress�Υɥᥤ��̾���ѹ�������ˡ�򶵤��Ƥ�������</a></li>
										<li><a href="../support/faq/service_hp_wp_operation_check.php">WordPress�ΰ�ž�˺ݤ��ơ�ư���ǧURL�׵�ǽ��Ȥ��ޤ�������ư���ǧ���Ǥ��ޤ���</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_hp_wp.php">WordPress�ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">SSL����ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/ssl_setting_keymark_not_display.php">SSL�ڡ����ؤΥ��������Ǹ��ޡ����������ɽ������ޤ��󡣸��ޡ����򥯥�å�����ȡ֤��Υڡ����ˤϰ����Ǥʤ�¾�Υ꥽�������ޤޤ�Ƥ��ޤ����פ�ɽ������ޤ�</a></li>
										<li><a href="../support/faq/ssl_spec_free_option.php">��̵���ȼ�SSL�פȡ֥��ץ�����ȼ�SSL�פΰ㤤�򶵤��Ƥ�������</a></li>
										<li><a href="../support/faq/ssl_setting_not_exist.php">SSL�ڡ�����ɽ�����줺����̵����URL�Ǥ����ץ���������ȿ���Ԥ��Ǥ����ǽ��������ޤ������Ф餯���֤򤪤��ƺ��٥��������򤪻�����������פ�ɽ������ޤ�</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο���������ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

							<section class="support-faqmore_box">
								<h5 class="support-faqmore_ttl">FTP�ˤĤ���</h5>
								<div class="support-faqmore_body">
									<ul class="list list_arrow-right">
										<li><a href="../support/faq/service_ftp_setting_method.php">FTP���������򶵤��Ƥ�������</a></li>
										<li><a href="../support/faq/service_ftp_setting_upload.php">�ۡ���ڡ����Υե�����Ϥɤ��إ��åץ��ɤ���Ф����Ǥ�����</a></li>
										<li><a href="../support/faq/service_ftp_trouble_not_upload.php">���åץ��ɤ����֤���WEB���ڡ����ˤϤޤ�HP�����åץ��ɤ���Ƥ��ޤ���פȤ������̤�ɽ������ޤ�</a></li>
										<li><a href="../support/faq/service_ftp_trouble_not_filelist.php">FTP���եȤ������ե����������ɽ������ʤ��ʤ�ޤ���</a></li>
										<li><a href="../support/faq/service_ftp_trouble_530.php">FTP���եȤǡ�530�פȤ������顼��ɽ�����졢��³���Ǥ��ʤ��ʤ�ޤ���</a></li>
									</ul>
								</div>
								<p class="support-faqmore_btn"><a href="../support/faq/faq_service_ftp_trouble.php">FTP�Υȥ�֥�ˤĤ���<i class="ico ico_chevron-right"></i></a></p>
							</section>

						</div>
					</div>
				</section>
				<!-- /support-section -->

            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">��¾�Ҥ���Υ����С���ž�פ���ȼ��ɥᥤ���᡼�륢�ɥ쥹����������Ǥ�����Τ�����</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p><b>�֥����С���ž�˼��Ԥ��ʤ������ۡס֥ɥᥤ������꤬ʬ����ʤ��סֽ鿴�ԤʤΤǤޤȤ�����ꤷ�Ƥۤ�����</b>����������԰¤Τ��뤪���ͤ˸����ơ����ҥ����åդ���ԤǺ�Ȥ�������ꤪ�ޤ������ݡ��ȡפ�֥����С���ž��ԡפ��󶡤��Ƥ��ޤ���<br>
                        �ܤ����ϰʲ��ڡ����ˤƤ���ǧ����������</p>
                    <ul class="support-btn single daiko-add mt15">
                        <li>
                            <a href="../price/service_daiko.php" class="btn btn_gray">���ꤪ�ޤ������ݡ���<i class="ico ico_chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="../price/service_server_daiko.php" class="btn btn_gray">�����С���ž���<i class="ico ico_chevron-right"></i></a>
                        </li>
                    </ul>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">�ۡ���ڡ�������䥵���ȥ�˥塼����Ǥ�����Τ�����</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p><b>�ֲ�ҤΥۡ���ڡ������ꤿ�����ɡ��ɤ��˰��ꤷ�����ɤ���ʬ����ʤ��ס��絬�Ϥʥ����Ȥ�ͤ��Ƥ��뤱�ɡ������̤ˤĤ����԰¡�</b>���Τ�Ǻ�ߤˤĤ��ơ���������5,000�ʾ�Υۡ���ڡ�����Ҥ��顢�����ͤ�ͽ������Ū��Ǽ���˹�碌�ƺ�Ŭ�ʲ�Ҥ򤴾Ҳ𤹤�������󶡤��Ƥ��ޤ���<br>
                        �ܤ����ϰʲ��֥ۡ���ڡ����������̡פΥڡ����ˤƤ���ǧ����������</p>
                    <p class="support-btn single mt15"><a href="../consulting/" target="_blank" class="btn btn_gray">�ۡ���ڡ�����������<i class="ico ico_new-window"></i></a></p>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl support">Web�����ȤΥȥ�֥�Ǥ�����Τ�����</h3>
            <div class="section_body support">
                <aside class="support-otherSec">
                    <h5 class="mb5"></h5>
                    <p>
                        �����ͤ�Web�����Ȥǵ����Ƥ���ȥ�֥����Ǥ����Web�����ȥȥ�֥���ǡ׵�ǽ��̵�������Ѥ��������ޤ���<br>
                        <b>�ֵޤ˥��������Ǥ��ʤ��ʤä��ס֥��顼��ɽ�������ס�Web�����Ȥι�����ȿ�Ǥ���ʤ���</b>�ʤɤǤ�����ξ��ϡ����Ҥ����Ѥ���������
                    </p>
                    <form method="post" action="<?php print $SECURE_URL; ?>xapanel/login/xserver/?request_page=xserver%2Fwebsitetrouble%2Finput">
                        <div class="form_btn-box_" style="text-align:center;margin-bottom:0">
                            <p style="margin:20px"><input id="site" class="i-long" type="text" name="site" value="" placeholder="https://example.com/"></p>
                            <p style="margin-bottom:0"><input class="btn btn_blue-l" type="submit" name="" value="Web�����Ȥ���Ǥ���"></p>
                        </div>
                    </form>
                </aside>
                <!-- /support-otherSec -->
            </div>
        </section>

        <section class="section section-contact">
            <h3 class="section_ttl support">���꤬��褷�ʤ����</h3>
			<section class="support-section pt10">
				<div class="support-section_body">
					<div class="support-faqmore">

						<section class="support-faqmore_box">
							<h5 class="support-faqmore_ttl">�ߤ�ʤ˼��䡦���̤���<span>�ʥ桼�������ߥ�˥ƥ���</span></h5>
							<div class="support-faqmore_body">
								<p class="support-faqmore_body_ttl">
									�����ꤴ�Ȥ���䡦�����Ǥ��롢<br>
									�桼�������ߥ�˥ƥ��򤴳��Ѥ�������
								</p>
								<p>
									���å��������С��Υ����ӥ����ѼԸ����Υ��ߥ�˥ƥ������ȤǤϡ������ӥ��λȤ����䥵����������ѤǤΤ����ꤴ�Ȥʤɡ����Ǥ���䤹�뤳�Ȥ��Ǥ��ޤ���
								</p>
							</div>
							<p class="support-faqmore_btn">
								<a href="https://community.xserver.ne.jp/" target="_blank">
									�ߤ�ʤ˼��䡦���̤���<span>�ʥ桼�������ߥ�˥ƥ���</span><i class="ico ico_new-window"></i>
								</a>
							</p>
						</section>

						<section class="support-faqmore_box">
							<h5 class="support-faqmore_ttl">�᡼�롦���á�����åȤˤ��<span>���䤤��碌</span></h5>
							<div class="support-faqmore_body">
								<p>
									���������Υ᡼��ե�����ޤ��Ϥ����á�����åȤˤƤ��䤤��碌����������<br>
									���䤤��碌���ˡ���<a href="../support/faq/support_where.php">�ɤ��ޤǥ��ݡ��Ȥ��Ƥ�館�ޤ�����</a>�פ⤴���Ȥ���������
								</p>
							</div>
							<p class="support-faqmore_btn"><a href="../support/support.php">�᡼�롦���á�����åȤˤ��<span>���䤤��碌</span><i class="ico ico_chevron-right"></i></a></p>
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