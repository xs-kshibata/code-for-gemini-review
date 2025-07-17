<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼�륽�եȤ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹��ƥ᡼�륽�եȤǻ��Ѥ���ݤ��������ƤˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">�᡼�륽�եȤ�����</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">�᡼�륽�եȤ�����</a>
							<ul>
								<li><a href="#link-a01">�᡼�륽�եȤؤ���������</a></li>
								<li><a href="#link-a02">SMTPǧ��(SMTP-AUTH)������ˤĤ���</a></li>
								<li><a href="#link-a03">�Ƽ�᡼�륽�եȤ�������</a></li>
							</ul>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�᡼�륽�եȤ�����</h4>
                    <div class="section_body">
                        <p>�᡼�륽�եȤؤ�����˴ؤ��Ƥϡ������ξ���򤴻��Ȥξ塢�ԤäƤ���������</p>
                        <section class="block">
                            <h5 id="link-a01" class="block_ttl">�᡼�륽�եȤؤ���������</h5>
                            <div class="block_body">
                                <p>�᡼�륽�եȤؤ������Ԥ�����<a href="man_mail_add.php">�᡼�륢������Ȥ��ɲ�</a>��ԤäƤ���������<br>
                                �ޤ����ȼ��ɥᥤ����Ѥ����᡼�륢������Ȥ�����Ⲽ���ΤȤ���Ǥ���</p>
                                <table class="table table_use-caption">
                                    <caption>�᡼�륢������Ȥ���������</caption>
                                    <tbody>
                                        <tr>
                                            <th colspan="2">POP/IMAP�����С�̾<br>
                                                �ʥۥ���̾��</th>
                                            <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                            <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">SMTP�����С�̾<br>
                                                �ʥۥ���̾��</th>
                                            <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                            <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                            
                                                ���sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">�桼����̾<br>
                                                �ʥ��������̾��</th>
                                            <td><a href="man_mail_add.php">�᡼�륢������Ȥ��ɲ�</a>�ˤ����ꤷ���᡼�륢�ɥ쥹�ʥɥᥤ��̾��ޤ�ˤ����Ϥ��Ƥ���������<br>
                                                <br>
                                                ���user@example.com<br>
                                                ���info@example.com</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">�ѥ����</th>
                                            <td><a href="man_mail_add.php">�᡼�륢������Ȥ��ɲ�</a>�ˤƻ��ꤷ���ѥ���ɤ����Ϥ��Ƥ���������
                                                <div class="note">���������ʾ��ϡ�<a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a>��ԤäƤ���������</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="3">�ݡ����ֹ�</th>
                                            <th>POP</th>
                                            <td>STARTTLS�ξ�� 110<br>SSL/TLS�ξ�� 995</td>
                                        </tr>
                                        <tr>
                                            <th>IMAP</th>
                                            <td>STARTTLS�ξ�� 143<br>SSL/TLS�ξ�� 993</td>
                                        </tr>
                                        <tr>
                                            <th>SMTP</th>
                                            <td>STARTTLS�ξ�� 587<br>SSL/TLS�ξ�� 465</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>���᡼��ε�ư���Զ�礬�������ǽ�������뤿�ᡢPOP��IMAP��ʻ�ѤϿ侩���Ƥ��ޤ���</br>
                                ���������ӥ���WEB�᡼������Ѥ�����硢�᡼�륽�եȤ������IMAP�����줷�Ƥ���������</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-a02" class="block_ttl">SMTPǧ��(SMTP-AUTH)������ˤĤ���</h5>
                            <div class="block_body">
                                <p>�������ӥ��ϡ��᡼����������ǧ�������ˤĤ��Ƥϡ�<em class="font-bold">SMTPǧ��(SMTP-AUTH)��侩</em>���Ƥ���ޤ���<br>
                                �᡼�륽�եȤؤ�SMTPǧ�ڤ�����ˤĤ��Ƥϡ����եȤˤ�äưۤʤ�ޤ�������<em class="font-bold">ǧ�ڤ�ɬ��</em>�פȤ������ܤ䡢��<em class="font-bold">�ѥ����ǧ��</em>�פȤ������ܤ����򤹤뤳�Ȥ����꤬��ǽ�Ǥ���</p>
                                <p>�������ӥ��Υޥ˥奢��Ǥϡ�����SMTPǧ�ڤ��б��������������⤷�Ƥ���ޤ��Τǡ�����Ρ�<a href="#link-a03">�Ƽ�᡼�륽�եȤ�������</a>�פ򤴻��Ȥξ塢�����ԤäƤ���������</p>
                                <aside class="msg">
                                	<h6 class="msg_ttl font-m"><i class="ico ico_circle"></i>POP before SMTP�����ˤ��ǧ�ڤˤĤ���</h6>
                                	<div class="msg_body">
                                        <p>�����ѤΥ����С��ˤ��POP before SMTP�����ˤ��ǧ�ڤ����Ѳ��ݤ��ۤʤ�ޤ���</p>
                                        <dl class="dl">
                                            <dt>�����С��ֹ�sv2001�ʹߤΥ����С�</dt>
                                            <dd>���٤Ƥ���³�ˤ��������Ѥ��뤳�Ȥ��Ǥ��ޤ���</dd>
                                            <dt>�����С��ֹ�sv1��sv1999�Υ����С�</dt>
                                            <dd>
                                                ����ͥåȥ���������³�˸¤ꡢ���Ѥ��뤳�Ȥ��Ǥ��ޤ���<br>
                                                �������ʤ��顢��ꥻ�����ƥ��ι⤤SMTPǧ��(SMTP-AUTH)�Ǥ����Ѥ򶯤��侩�������ޤ���
                                            </dd>
                                        </dl>
                                    </div>
                                </aside>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-a03" class="block_ttl">�Ƽ�᡼�륽�եȤ�������</h5>
                            <div class="block_body">
                                <p>�᡼�륽�եȤؤ�������ˤĤ��Ƥϡ������Υޥ˥奢��򤴻��Ȥ���������</p>
                                <ul class="ul">
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
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                <section class="section">
                    <div class="pickupFaq">
                        <div class="pickupFaq__title">�褯�������</div>
                        <ul class="pickupFaq__list">
                            <li><a href="../support/faq/service_mail_trouble_send.php">�᡼�뤬�����Ǥ��ޤ���</a></li>
                            <li><a href="../support/faq/service_mail_trouble_reception.php">�᡼�뤬�����Ǥ��ޤ���</a></li>
                            <li><a href="../support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php">���̥᡼���������Τߡ�Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ��ʤ�ޤ�����</a></li>
                            <li><a href="../support/faq/service_mail_trouble_ssl_certificate.php">�᡼�륽�եȤǡּ��̾�����ǧ�Ǥ��ʤ��ס־����������פȤ������顼���Ф�褦�ˤʤ�ޤ�����</a></li>
                        </ul>
                    </div>
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