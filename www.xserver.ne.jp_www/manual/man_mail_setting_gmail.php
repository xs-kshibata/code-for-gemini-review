<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Gmail������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Gmail�פǻ��Ѥ��뤿���������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Gmail</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Gmail ��������Ȥ�������ˡ</a>
							<ol>
								<li><a href="#link-a01">1.������ײ��̤ؿʤ�</a></li>
								<li><a href="#link-a02">2.�֥᡼�륢������Ȥ��ɲä���פ򥯥�å�</a></li>
								<li><a href="#link-a03">3.�᡼�륢�ɥ쥹������</a></li>
								<li><a href="#link-a04">4.�᡼�륢������Ȥ��ɲ�</a></li>
								<li><a href="#link-a05">5.���������</a></li>
								<li><a href="#link-a06">6.��������δ�λ</a></li>
								<li><a href="#link-a07">7.��̾���פ�����</a></li>
								<li><a href="#link-a08">8.�����᡼�륵���С����������</a></li>
								<li><a href="#link-a09">9.ǧ�ھ���γ�ǧ</a></li>
								<li><a href="#link-a10">10.�᡼����Υ�󥯤򥯥�å�����ǧ�ڤ�Ԥ����</a></li>
                                <li><a href="#link-a11">11.���괰λ</a></li>
							</ol>
						</li>
                        <li><a href="#link-b">�᡼�륢�����������γ�ǧ���ѹ���ˡ</a>
                            <ol>
                                <li><a href="#link-b01">1.�᡼�륢������Ȥ�������̤򳫤�</a></li>
                                <li><a href="#link-b02">2.�����᡼�륵���С���������̤򳫤�</a></li>
                                <li><a href="#link-b03">3.�����᡼�륵���С�����γ�ǧ���ѹ�</a></li>
                                <li><a href="#link-b04">4.�����᡼�륵���С���������̤򳫤�</a></li>
                                <li><a href="#link-b05">5.��̾���פ�������ǧ����</a></li>
                                <li><a href="#link-b06">6.�����᡼�륵���С�����γ�ǧ���ѹ�</a></li>
                            </ol>
                        </li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <div class="border border_gray">
                	<p>�ܥڡ����ǰ��⤹����ϡ�Google Workspace�٤Τ�������ˡ�ǤϤ���ޤ���<br>
                        Gmail�Ρ֥�������Ȥȥ���ݡ��ȡ׵�ǽ�����Ѥ������å��������С��Υ᡼�륢������Ȥ����夷���᡼���Gmail�Ǽ���������ˡ�Ǥ���</p>
                    <p>�ȼ��ɥᥤ��Υ᡼����Google Workspace(��G Suite)�פ��ۿ�������μ��ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                    <p class="link mb0"><a href="man_domain_dns_setting_google_apps.php">Google Workspace(��G Suite)�򤪻Ȥ������������</a><i class="ico ico_chevron-right"></i></p>
                </div>

                <div class="manual-youtube-box">
                    <p>ư��Ǥ�������ˡ�ˤĤ����������Ƥ���ޤ��Τǡ�������Ǥ⤴��ǧ���������ޤ���</p>
                    <div class="manual-youtube">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/vZOn5UudR0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Gmail ��������Ȥ�������ˡ</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.������ײ��̤ؿʤ�</h5>
                                <div class="box_body">
                                    <p>Gmail�α���ˤ�����֤򥯥�å������֤��٤Ƥ������ɽ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_1.png?date=230511" alt="���������"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.�֥᡼�륢������Ȥ��ɲä���פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>�֥�������Ȥȥ���ݡ��ȡץ��֤����򤷡� ��¾�Υ�������ȤΥ᡼����ǧ�פι��ܤ���إ᡼�륢������Ȥ��ɲä���� �򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_2.png?date=230511" alt="�᡼�륢��������ɲä�����"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.�᡼�륢�ɥ쥹������</h5>
                                <div class="box_body">
                                    <p>���ꤹ��᡼�륢�ɥ쥹�����Ϥ����ڼ��ءۤ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_3.png?date=190402" alt="���Υ��ƥåפ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a04">4.�᡼�륢������Ȥ��ɲ�</h5>
                                <div class="box_body">
                                    <p>�᡼�륢�ɥ쥹���ǧ������¾�Υ�������Ȥ���᡼����ɤ߹����POP3�ˡפ����ӡ��ڼ��ءۤ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_4.png?date=190402" alt="���ϲ���"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a05">5.���������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ����ڥ�������Ȥ��ɲáۤ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_5.png?date=190402" alt="����������ɲäδ�λ����"></p>
                                    <table class="table table_use-caption">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">�桼����̾</th>
                                            <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>
                                                �᡼�륢�ɥ쥹�����������ꤷ���ѥ����
                                                <div class="note">���������ʾ��ϡ�<a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a>��ԤäƤ���������</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>POP�����С�</th>
                                            <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>�ݡ���</th>
                                            <td>995</td>
                                        </tr>
                                        <tr>
                                            <th>����������å������Υ��ԡ��򥵡��С��˻Ĥ�</th>
                                            <td>
                                                Ǥ��
                                                <div class="note">�������å��ʤ��ξ�硢�������˥����С���Υ᡼��Ϻ������ޤ���<br>
                                                    Gmail�ʳ��Υ᡼�륽�եȤǤ�Ʊ���᡼�륢�ɥ쥹�����Ѥ�����ϥ����å�������Ƥ���������</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>�᡼��μ����˥������ƥ����ݸ�줿��³��SSL�ˤ���Ѥ���</th>
                                            <td>�����å����������</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a06">6.��������δ�λ</h5>
                                <div class="box_body">
                                    <p>[�᡼�륢������Ȥ��ɲä��ޤ���] �β��̤�ɽ������ޤ���<br>
                                        �����Υ᡼�륢�ɥ쥹�ǥ᡼���������Ԥ����� �ڤϤ���user@example.com�Ȥ��ƥ᡼��������Ǥ���褦�ˤ��ޤ��ۤ˥����å�������ڼ��ءۤ򥯥�å����Ƥ���������
                                    </p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_6.png?date=190402" alt="��������δ�λ"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a07">7.��̾���פ�����</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤˡ�̾���פ�Ǥ�դ����Ϥ����ڥ����ꥢ���Ȥ��ư����ޤ��ۤˤϥ����å������줺�ˡڼ��Υ��ƥåסۤ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_7.png?date=190408" alt="��̾���פ�����"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w20per">̾��</th>
                                            <td>Ǥ�աʺ��пͤȤ��Ƽ����Ԥ�ɽ�������̾���ˤʤ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>�����ꥢ���Ȥ��ư����ޤ�</th>
                                            <td>�����å��ڤ��ʤ���</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a08">8.�����᡼�륵���С����������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ��ڥ�������Ȥ��ɲáۤ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_8.png?date=190408" alt="�����᡼�륵���С�������"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">SMTP�����С�</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                    <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                    ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>
                                                    �᡼�륢�ɥ쥹�����������ꤷ���ѥ����
                                                    <div class="note">���������ʾ��ϡ�<a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a>��ԤäƤ���������</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>SSL����Ѥ����������ƥ����ݸ�줿��³</th>
                                                <td>
                                                    �����å����������<div class="note">���ݡ����ֹ��465���ѹ�����ȼ�ư�ǥ����å�������ޤ���</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>TLS����Ѥ����������ƥ����ݸ�줿��³</th>
                                                <td>�����å��ڤ��ʤ���</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a09">9.ǧ�ھ���γ�ǧ</h5>
                                <div class="box_body">
                                    <p>
                                        ������γ����᡼�륢�ɥ쥹���ˡ�Gmail���ǧ�ڥ᡼�뤬�Ϥ��ޤ���
                                        Gmail�Ρּ����ȥ쥤�פޤ��ϡ�<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/">WEB�᡼��</a>�˥�����򤷤Ƴ�ǧ�򤷤Ƥ���������
                                    </p>
                                    <p>
                                        �Ϥ����᡼��˵��ܤ���Ƥ���ֳ�ǧ�����ɡפ����Ϥ��뤫���᡼����Υ�󥯤򥯥�å�����ǧ�ڤ�λ���Ƥ���������
                                        <div class="note">���᡼�뤬�Ϥ��ʤ����ϡ��֥᡼���������פ򥯥�å����Ƥ���������</div>
                                    </p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_9.png?date=190402" alt="��ǧ�����ɤ�����"></p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_18.png" alt="�Ϥ����᡼��"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a10">10.�᡼����Υ�󥯤򥯥�å�����ǧ�ڤ�Ԥ����</h5>
                                <div class="box_body">
                                    <p>�ֳ�ǧ�ץܥ���򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_10.png?date=230511" alt="�ֳ�ǧ�ץܥ���򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-a11">11.���괰λ</h5>
                                <div class="box_body">
                                    <p>�ֳ�ǧ����λ���ޤ����פ�ɽ�����줿������ϴ�λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_11.png" alt="��λ����"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�᡼�륢�����������γ�ǧ���ѹ���ˡ</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">

                                <h5 class="box_ttl" id="link-b01">1.�᡼�륢������Ȥ�������̤򳫤�</h5>
                                <div class="box_body">
                                    <p>Gmail�α���ˤ�����֤򥯥�å������֤��٤Ƥ������ɽ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_12.png" alt="�᡼�륢������Ȥ�������̤򳫤�"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b02">2.�����᡼�륵���С���������̤򳫤�</h5>
                                <div class="box_body">
                                    <p>�֥�������Ȥȥ���ݡ��ȡץ��֤����򤷡� ��¾�Υ�������ȤΥ᡼����ǧ�פι��ܤ���ؾ�����Խ��� �򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_13.png" alt="�����᡼�륵���С���������̤򳫤�"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b03">3.�����᡼�륵���С�����γ�ǧ���ѹ�</h5>
                                <div class="box_body">
                                    <p>�����᡼�륵���С�������ǧ���ѹ����Ƥ���������</p>
                                    <p>��ǧ�Ǥ�������ѹ�����¸�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_14.png" alt="�����᡼�륵���С�����γ�ǧ���ѹ�"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">�桼����̾</th>
                                            <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����
                                                <div class="note">���������ʾ��ϡ�<a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a>��ԤäƤ���������</div></td>
                                        </tr>
                                        <tr>
                                            <th>POP�����С�</th>
                                            <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>�ݡ���</th>
                                            <td>995</td>
                                        </tr>
                                        <tr>
                                            <th>����������å������Υ��ԡ��򥵡��С��˻Ĥ�</th>
                                            <td>
                                                Ǥ��
                                                <div class="note">�������å��ʤ��ξ�硢�������˥����С���Υ᡼��Ϻ������ޤ���<br>
                                                    Gmail�ʳ��Υ᡼�륽�եȤǤ�Ʊ���᡼�륢�ɥ쥹�����Ѥ�����ϥ����å�������Ƥ���������</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>�᡼��μ����˥������ƥ����ݸ�줿��³��SSL�ˤ���Ѥ���</th>
                                            <td>�����å����������</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b04">4.�����᡼�륵���С���������̤򳫤�</h5>
                                <div class="box_body">
                                    <p>��̾���פι��ܤ���־�����Խ��פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_15.png" alt="�����᡼�륵���С���������̤򳫤�"></p>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b05">5.��̾���פ�������ǧ����</h5>
                                <div class="box_body">
                                    <p>̾����������ǧ�����ּ��Υ��ƥåספ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_16.png" alt="��̾���פ�������ǧ����"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">̾��</th>
                                            <td>Ǥ�աʺ��пͤȤ��Ƽ����Ԥ�ɽ�������̾���ˤʤ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>�����ꥢ���Ȥ��ư����ޤ�</th>
                                            <td>�����å��ڤ��ʤ���</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">

                                <h5 class="box_ttl" id="link-b06">6.�����᡼�륵���С�����γ�ǧ���ѹ�</h5>
                                <div class="box_body">
                                    <p>
                                        �����᡼�륵���С�������ǧ���ѹ����Ƥ���������<br>
                                        ��ǧ���Ǥ����顢���ѹ�����¸�פ򥯥�å����Ƥ���������
                                    </p>
                                    <p>�ʾ������ϴ�λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_gmail_17.png" alt="�����᡼�륵���С�����γ�ǧ���ѹ�"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">SMTP�����С�</th>
                                            <td>
                                                ���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>�ݡ���</th>
                                            <td>465</td>
                                        </tr>
                                        <tr>
                                            <th>�桼����̾</th>
                                            <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����
                                                <div class="note">���������ʾ��ϡ�<a href="man_mail_change_password.php">�᡼�륢������ȤΥѥ�����ѹ�</a>��ԤäƤ���������</div></td>
                                        </tr>
                                        <tr>
                                            <th>SSL����Ѥ����������ƥ����ݸ�줿��³</th>
                                            <td>
                                                �����å����������
                                                <div class="note">�ݡ����ֹ��465���ѹ�����ȼ�ư�ǥ����å�������ޤ���</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>TLS����Ѥ����������ƥ����ݸ�줿��³</th>
                                            <td>�����å��ڤ��ʤ���</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->

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