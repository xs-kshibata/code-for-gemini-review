<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Mac�᡼��(OS X����³���ݸ�ʤ�)������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Mac�᡼��(OS X)�פǻ��Ѥ��뤿���������ˤĤ��ơ�����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ�����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Mac�᡼��(OS X)</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Mac�᡼��(OS X)��������Ȥ�������ˡ</a>
							<ol>
								<li><a href="#link-a01">1.�᡼�顼��ư</a></li>
								<li><a href="#link-a02">2.�֥�������ȡפ�����</a></li>
								<li><a href="#link-a03">3.�֤���¾�Υ᡼�륢������Ȥ��ɲ�...�פ�����</a></li>
								<li><a href="#link-a04">4.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</a></li>
								<li><a href="#link-a05">5.�����᡼�륵���Фξ��������</a></li>
								<li><a href="#link-a06">6.�����᡼�륵���Фξ��������</a></li>
								<li><a href="#link-a07">7.���괰λ</a></li>
							</ol>
						</li>
						<li><a href="#link-b">�����ϹԤ��뤬�����Τ߹Ԥ��ʤ����</a>
							<ol>
								<li><a href="#link-b01">1.�᡼�顼��ư</a></li>
								<li><a href="#link-b02">2.�᡼�륢������Ȥ�����</a></li>
								<li><a href="#link-b03">3.�����ѥ᡼�륵����(SMTP)�����Խ�</a></li>
								<li><a href="#link-b04">4.�־ܺ١פ�����</a></li>
								<li><a href="#link-b05">5.�֥ǥե���ȥݡ��Ȥ���ѡ�25.465.587�ˡפ�����å�</a></li>
							</ol>
						</li>
						<li><a href="#link-c">SSL������򸡾ڤβ��̤�ɽ���������</a>
							<ol>
								<li><a href="#link-c01">1.�᡼�顼��ư</a></li>
								<li><a href="#link-c02">2.�᡼�륢������Ȥ�����</a></li>
								<li><a href="#link-c03">3.�־ܺ١פ�����</a></li>
								<li><a href="#link-c04">4.��SSL����ѡפΥ����å��򳰤�</a></li>
								<li><a href="#link-c05">5.��2�ˤΥ�������Ⱦ���ޤ���ꡢ�����᡼�륵���С�SMTP�ˤ�����</a></li>
								<li><a href="#link-c06">6.�־ܺ١פ�����</a></li>
								<li><a href="#link-c07">7.��SSL����ѡפΥ����å��򳰤�</a></li>
								<li><a href="#link-c08">8.���괰λ�塢����¸�פ�����</a></li>
							</ol>
						</li>
						<li><a href="#link-d">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-d01">1.���̾����֥᡼��פΡִĶ�����פ򥯥�å�</a></li>
								<li><a href="#link-d02">2.�᡼�륢������Ȥ����򤷡��֥�������Ⱦ���פ����SMTP�����Хꥹ�Ȥ��Խ��ġפ�����</a></li>
								<li><a href="#link-d03">3.ǧ����ˡ���ǧ������OK�פ򥯥�å�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Mac�᡼��(OS X)��������Ȥ�������ˡ</h4>
                    <div class="section_body">
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">�������ӥ��ϡ��᡼����������ǧ�������ˤĤ��Ƥϡ�SMTPǧ��(SMTP-AUTH)��侩���Ƥ���ޤ���<br>
                                �������ꤵ�줿��������Ȥ�SMTPǧ��������ˡ�ˤĤ��Ƥϡ�������μ��򤴻��Ȥ���������</p>
                                <ul class="list list_arrow-down mb0">
                                    <li><a href="#link-d">SMTPǧ��������ˡ</a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_mac_osx.php">��STARTTLS�פ��뤤�ϡ�POP/IMAP/SMTP over SSL�פ����Ѥ�����Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�᡼�顼��ư</h5>
                                <div class="box_body">
                                    <p>���̾����Ρ֥᡼��פؿʤߡ��ִĶ�����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="�ִĶ�����פ򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.�֥�������ȡפ�����</h5>
                                <div class="box_body">
                                    <p>�֥�������ȡפ򥯥�å��������̺����Ρ֡ܡפ����򤷤Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_2.png" alt="���̺����Ρ֡ܡפ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.�֤���¾�Υ᡼�륢������Ȥ��ɲ�...�פ�����</h5>
                                <div class="box_body">
                                    <p>�֤���¾�Υ᡼�륢������Ȥ��ɲ�...�פ����򤷡���³����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_3.png" alt="�֤���¾�Υ᡼�륢������Ȥ��ɲ�...�פ����򤷡�³����פ򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</h5>
                                <div class="box_body">
                                    <p>�ɲ������˾�Υ᡼�륢�ɥ쥹���᡼�륢�ɥ쥹�����������ꤷ���ѥ���ɤ����Ϥ����ֺ����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_4.png" alt="�᡼�륢�ɥ쥹�ȥѥ���ɤ����Ϥ��ֺ����פ򥯥�å�"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>����å��塢�ȥ�������Ȥ��ư�����ꤹ��ɬ�פ�����ޤ��ɤ�ɽ������ޤ�����ּ��ءפ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_5.png" alt="��������Ȥ��ư�����ꤹ��ɬ�פ�����ޤ���ɽ�����줿��ּ��ءפ򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.�����᡼�륵���Фξ��������</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">�᡼�륽�եȤ�����</a>�䲼���򻲹ͤ˾�������Ϥ򤷡ּ��ءפ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_6_1.png" alt="�����᡼�륵���Фξ�������"></p>
                                    <table class="table table_use-caption">
                                        <caption>�����᡼�륵���Фξ���</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">��������Ȥμ���</th>
                                                <td>POP �⤷���� IMAP�ʢ�Ǥ�ա�</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼�륵����</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>�᡼�륢�ɥ쥹 �����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.�����᡼�륵���Фξ��������</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">�᡼�륽�եȤ�����</a>�䲼���򻲹ͤ˾�������Ϥ򤷡ֺ����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_7_1.png" alt="�����᡼�륵���Фξ�������"></p>
                                    <table class="table table_use-caption">
                                        <caption>�����᡼�륵���Фξ���</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SMTP������</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>�᡼�륢�ɥ쥹 �����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl box_ttl_no-body" id="link-a07">7.���괰λ</h5>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�����ϹԤ��뤬�����Τ߹Ԥ��ʤ����</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.�᡼�顼��ư</h5>
                                <div class="box_body">
                                    <p>���̾����Ρ֥᡼��פؿʤߡ��ִĶ�����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="�ִĶ�����פ򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.�᡼�륢������Ȥ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_8.png" alt="�᡼�륢������Ȥ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.�����ѥ᡼�륵����(SMTP)�����Խ�</h5>
                                <div class="box_body">
                                    <p>�������ѥ᡼�륵���С�SMTP�ˡפΥץ�������˥塼�򥯥�å�������SMTP�����Хꥹ�Ȥ��Խ��פ����򤷤Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_9.png" alt="SMTP�����Хꥹ�Ȥ��Խ��򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.�־ܺ١פ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_10.png" alt="�־ܺ١פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.�֥ǥե���ȥݡ��Ȥ���ѡ�25.465.587�ˡפ�����å�</h5>
                                <div class="box_body">
                                    <p>�֥ǥե���ȥݡ��Ȥ���ѡ�25.465.587�ˡפ˥����å��򤤤졢��OK�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_11.png" alt="�֥ǥե���ȥݡ��Ȥ���ѡפ˥����å��򤤤��OK�פ򥯥�å�"></p>
                                    <p class="note">�������ݡ����ֹ���587�פ��ѹ����Ƥ����������Ȥǡ�������ǽ�Ȥʤ��礬�������ޤ���</p>
                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>���͡�<a href="man_mail_op25b.php">OP25B�ˤĤ���</a><i class="ico ico_chevron-right"></i></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">SSL������򸡾ڤβ��̤�ɽ���������</h4>
                    <div class="section_body">
                        <p>�������ӥ����󶡤��Ƥ�����ͭSSL�λ��ͤˤ�ꡢ�����Τ褦�ʲ��̤�ɽ��������礬����ޤ���</p>
                        <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_12.png" alt="������򸡾ڤβ���"></p>
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.�᡼�顼��ư</h5>
                                <div class="box_body">
                                    <p>���̾����Ρ֥᡼��פؿʤߡ��ִĶ�����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_1.png" alt="�ִĶ�����פ򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.�᡼�륢������Ȥ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_8.png" alt="�᡼�륢������Ȥ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c03">3.�־ܺ١פ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_13.png" alt="�־ܺ١פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c04">4.��SSL����ѡפΥ����å��򳰤�</h5>
                                <div class="box_body">
                                    <p>��SSL����ѡפΥ����å��򳰤����ݡ��Ȥ��110�פȤ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_14.png" alt="�־ܺ١פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c05">5.��2�ˤΥ�������Ⱦ���ޤ���ꡢ�����᡼�륵���С�SMTP�ˤ�����</h5>
                                <div class="box_body">
                                    <p>��2�ˤΥ�������Ⱦ���ޤ���ꡢ�������ѥ᡼�륵���С�SMTP�ˡפΥץ�������˥塼�򥯥�å�������SMTP�����Хꥹ�Ȥ��Խ��פ����򤷤Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_9.png" alt="��SMTP�����Хꥹ�Ȥ��Խ��פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c06">6.�־ܺ١פ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_10.png" alt="�־ܺ١פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c07">7.��SSL����ѡפΥ����å��򳰤�</h5>
                                <div class="box_body">
                                    <p>��SSL����ѡפΥ����å��򳰤��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_15.png" alt="�־ܺ١פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c08">8.���괰λ�塢����¸�פ�����</h5>
                                <div class="box_body">
                                    <p>���괰λ�塢�ѹ����Ƥ���¸���뤫�ɤ����γ�ǧ��ɽ������ޤ���<br>
                                    ���Τޤޡ���¸�פ����򤷡�������ѹ����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_16.png" alt="����¸�פ�����"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">SMTPǧ��������ˡ</h4>
                    <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-d01">1.���̾����֥᡼��פΡִĶ�����פ򥯥�å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-d02">2.�᡼�륢������Ȥ����򤷡��֥�������Ⱦ���פ����SMTP�����Хꥹ�Ȥ��Խ��ġפ�����</h5>
                            <div class="box_body">
                                <p>�᡼�륢������Ȥ����򤷡��֥�������Ⱦ���פ򥯥�å����ޤ���<br>
                                �������ѥ᡼�륵����(SMTP)�פΥץ�����󤫤��SMTP�����С��ꥹ�Ȥ��Խ�...�פ����򤷤ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-d03">3.ǧ����ˡ���ǧ������OK�פ򥯥�å�</h5>
                            <div class="box_body">
                                <p>�᡼�륢������Ȥ����Ѥ��Ƥ���᡼�륵���Ф����򤷡��־ܺ١פ򥯥�å����ޤ���<br>
                                ǧ�ڹ��ܤΥץ������ǡ֥ѥ���ɤ����򤷡���OK�פ򥯥�å����Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_mac_osx_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>
                

                
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