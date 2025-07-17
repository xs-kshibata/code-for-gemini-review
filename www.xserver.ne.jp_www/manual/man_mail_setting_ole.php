<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook Express ������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Outlook Express�פǻ��Ѥ��뤿���������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Outlook Express</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Microsoft Outlook Express ��������ˡ</a>
							<ol>
								<li><a href="#link-a01">1.�ġ���(T)��ꡢ���������(A)�����Ӥ��������ޤ���</a></li>
								<li><a href="#link-a02">2.�᡼�륿�֤�ꡢ���ɲ�(A)�פ����Ӥ����������᡼��(M)�����Ӥ��������ޤ���</a></li>
								<li><a href="#link-a03">3.������̾(ɽ���˻��Ѥ����̾��)�����Ϥ������ء�N)�����Ӥ��������ޤ���</a></li>
								<li><a href="#link-a04">4.�᡼�륢�ɥ쥹(�����ͤΤ����Ѥˤʤ���᡼�륢�ɥ쥹)�����Ϥ������ء�N)�����Ӥ��������ޤ���</a></li>
								<li><a href="#link-a05">5.�����᡼�롦�����᡼�륵���С�̾�����Ϥ��ޤ���</a></li>
								<li><a href="#link-a06">6.�桼����̾���Żҥ᡼�륢�ɥ쥹�����ꤷ���ѥ���ɡ�P)�ˤ����ꤷ���ѥ���ɤ����Ϥ��������ޤ���</a></li>
								<li><a href="#link-a07">7.���󥿡��ͥå���³���������ɴ�λ</a></li>
								<li><a href="#link-a08">8.��ۤɺ���������������Ȥ����򤷡��ץ�ѥƥ���P�ˤ򥯥�å����Ƥ���������</a></li>
								<li><a href="#link-a09">9.�����С����֤򥯥�å����������Τ褦�������ԤäƤ���������</a></li>
								<li><a href="#link-a010">10.�����᡼�륵���С���Ʊ���������Ѥ���(U)�򥯥�å�</a></li>
								<li><a href="#link-a011">11.�ܺ����꥿�֤򥯥�å������֥����С��Υݡ����ֹ�פΡ������᡼���SMTP�ˡפ�587���ѹ����Ƥ���������</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.���̾����Ρ֥ġ���(T)�פ�ꡢ�֥��������(A)...�פ򥯥�å����ޤ���</a></li>
								<li><a href="#link-b02">2.�᡼�륢������Ȥ����򤷡��֥ץ�ѥƥ���P�ˡפ򥯥�å����ޤ���</a></li>
								<li><a href="#link-b03">3.�֥����С��ץ��֤򥯥�å����ޤ���</a></li>
								<li><a href="#link-b04">4.�ּ����᡼�륵���С���Ʊ���������Ѥ����U�ˡפ˥����å������졢��OK�פ򥯥�å����ޤ���</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Microsoft Outlook Express ��������ˡ</h4>
                    <div class="section_body">
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">�������ӥ��ϡ��᡼����������ǧ�������ˤĤ��Ƥϡ�SMTPǧ��(SMTP-AUTH)��侩���Ƥ���ޤ���<br>
                                �������ꤵ�줿��������Ȥ�SMTPǧ��������ˡ�ˤĤ��Ƥϡ�������μ��򤴻��Ȥ���������</p>
                                <ul class="list list_arrow-down mb0">
                                    <li><a href="#link-b">SMTPǧ��������ˡ</a></li>
                                </ul>
                            </div>
                        </aside>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�ġ���(T)��ꡢ���������(A)�����Ӥ��������ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_1.png" alt="Outlook Express�ǥ����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.�᡼�륿�֤�ꡢ���ɲ�(A)�פ����Ӥ����������᡼��(M)�����Ӥ��������ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_2.png" alt="Outlook Express�ǥ᡼�륿�֤����ɲä����Ӥ�����Υ᡼������Ǥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.������̾(ɽ���˻��Ѥ����̾��)�����Ϥ������ء�N)�����Ӥ��������ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_3.png" alt="Outlook Express��ɽ��̾�����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.�᡼�륢�ɥ쥹(�����ͤΤ����Ѥˤʤ���᡼�륢�ɥ쥹)�����Ϥ������ء�N)�����Ӥ��������ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_4.png" alt="Outlook Express�ǥ᡼�륢�ɥ쥹�����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.�����᡼�롦�����᡼�륵���С�̾�����Ϥ��ޤ���</h5>
                                <div class="box_body">
                                    <p>�����᡼�롦�����᡼�륵���С������Ϥ��Ƥ���������<br>
                                    �ܤ�����<a href="man_mail_setting.php">�᡼�륽�եȤ�����</a>��������������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_5.png" alt="���������"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�����С��μ���</th>
                                                <td>POP3 �⤷���� IMAP�ʢ�Ǥ�ա�</td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�륵���С�</th>
                                                <td rowspan="2">�����С�ID.xsrv.jp ������������Ʊ�������С�̾</td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�륵���С�</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.�桼����̾���Żҥ᡼�륢�ɥ쥹�����ꤷ���ѥ���ɡ�P)�ˤ����ꤷ���ѥ���ɤ����Ϥ��������ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_6.png" alt="Outlook Express�ǥ��������̾�ȥѥ���ɤ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.���󥿡��ͥå���³���������ɴ�λ</h5>
                                <div class="box_body">
                                    <p>���괰λ���̤�ɽ�����줿�顢��λ�򥯥�å�����λ���Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_7.png" alt="Outlook Express�����괰λ��ǧ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.��ۤɺ���������������Ȥ����򤷡��ץ�ѥƥ���P�ˤ򥯥�å����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_8.png" alt="Outlook Express�ǥ᡼�륿�֤����ɲä����Ӥ�����Υ᡼������Ǥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a09">9.�����С����֤򥯥�å����������Τ褦�������ԤäƤ���������</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">�᡼�륽�եȤ�����</a>�䲼���򻲹ͤ˾�������Ϥ�������򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_9.png" alt="�ץ�ѥƥ�"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>�����С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�����᡼�� �����С��μ���</th>
                                                <td>POP3</td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�� (POP3)</th>
                                                <td rowspan="2">����.xsrv.jp�ʥ����С�ID.xsrv.jp�ˢ�����������Ʊ�������С�̾</td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�� (SMTP)</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>�����᡼�� �����С�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">���������̾</th>
                                                <td>�Żҥ᡼�륢�ɥ쥹��E�ˤ����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�᡼�륢������Ⱥ����������ꤷ���ѥ����</td>
                                            </tr>
                                            <tr>
                                                <th>�������ƥ����ݸ�줿�ѥ����ǧ�ڤǥ����󤹤�</th>
                                                <td>�����å��ڤʤ���</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>�����᡼�� �����С�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">���Υ����С���ǧ�ڤ�ɬ��</th>
                                                <td>�����å��ڤ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a010">10.�����᡼�륵���С���Ʊ���������Ѥ���(U)�򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_10.png" alt="�����᡼�륵���С���Ʊ���������Ѥ�������򤷡�OK�򥯥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a011">11.�ܺ����꥿�֤򥯥�å������֥����С��Υݡ����ֹ�פΡ������᡼���SMTP�ˡפ�587���ѹ����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ole_11.png" alt="�������᡼���SMTP�ˡפ�587���ѹ�"></p>
                                    <p>�ʾ�����괰λ�Ǥ�����OK�פ򥯥�å����Ƥ���������</p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">SMTPǧ��������ˡ</h4>
                    <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-b01">1.���̾����Ρ֥ġ���(T)�פ�ꡢ�֥��������(A)...�פ򥯥�å����ޤ���</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.�᡼�륢������Ȥ����򤷡��֥ץ�ѥƥ���P�ˡפ򥯥�å����ޤ���</h5>
                            <div class="box_body">
                                <p>�֤��٤ơפΥ��֤�ꡢ�᡼�륢������Ȥ����򤷡��֥ץ�ѥƥ���P�ˡפ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.�֥����С��ץ��֤򥯥�å����ޤ���</h5>
                            <div class="box_body">
                                <p>�֥����С��ץ��֤ˤ���������᡼�륵���С��פΡ֤��Υ����С���ǧ�ڤ�ɬ�ספ˥����å������졢 ������פ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.�ּ����᡼�륵���С���Ʊ���������Ѥ����U�ˡפ˥����å������졢��OK�פ򥯥�å����ޤ���</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ole_smtp_4.png" alt="SMTPǧ��������ˡ4"></p>
                                <p>��3�ˤβ��̤����ޤ����顢��OK�פ򥯥�å����Ƥ���������</p>
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