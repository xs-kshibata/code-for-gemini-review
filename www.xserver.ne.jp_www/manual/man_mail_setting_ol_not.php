<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook 2007(��³���ݸ�ʤ�)������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Outlook 2007�פǻ��Ѥ��뤿���������ˤĤ��ơ�����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ�����μ��򵭺ܤ��Ƥ��ޤ���">


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
            
                <h3 class="sub-ttl">Outlook 2007</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Microsoft Outlook 2007 ��������ˡ</a>
							<ol>
								<li><a href="#link-a01">1.�ġ���(T)��ꡢ�������������(A)������</a></li>
								<li><a href="#link-a02">2.�Żҥ᡼�륿�֤�ꡢ�ֿ���(N)�פ�����</a></li>
								<li><a href="#link-a03">3.�����С�����ޤ����ɲäΥ����С��μ�����ư�ǹ�������˥����å��������ء�N)������</a></li>
								<li><a href="#link-a04">4.���󥿡��ͥå��Żҥ᡼��(I)�����򤷡����ء�N)������</a></li>
								<li><a href="#link-a05">5.�֥��󥿡��ͥå��Żҥ᡼�������ײ��̤ˤƲ�����������ϸ塢�ܺ�����(M)������</a></li>
								<li><a href="#link-a06">6.���������С����֤򥯥�å����������Τ褦������</a></li>
								<li><a href="#link-a07">7.�ܺ����꥿�֤򥯥�å������֥����С��Υݡ����ֹ�פΡ����������С���SMTP�ˡפ�587���ѹ�</a></li>
								<li><a href="#link-a08">8.���괰λ</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.���̾����Ρ֥ġ���(T)�פ�ꡢ�֥������������(A)�פ�����</a></li>
								<li><a href="#link-b02">2.���Żҥ᡼��ץ��֤�ꡢ���ѹ�(A)�פ�����</a></li>
								<li><a href="#link-b03">3.�־ܺ�����פ򥯥�å�</a></li>
								<li><a href="#link-b04">4.�����������С��ץ��֤��ǧ������OK�פ򥯥�å�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Microsoft Outlook 2007 ��������ˡ</h4>
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
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_ol.php">��STARTTLS�פ��뤤�ϡ�POP/IMAP/SMTP over SSL�פ����Ѥ�����Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�ġ���(T)��ꡢ�������������(A)������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_1.png" alt="Outlook 2007�ǥ����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.�Żҥ᡼�륿�֤�ꡢ�ֿ���(N)�פ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_2.png" alt="Outlook 2007���Żҥ᡼�륿�֤��鿷��������Ǥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.�����С�����ޤ����ɲäΥ����С��μ�����ư�ǹ�������˥����å��������ء�N)������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_3.png" alt="�����С�����ޤ����ɲäΥ����С��μ�����ư�ǹ�������˥����å��������ؤ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.���󥿡��ͥå��Żҥ᡼��(I)�����򤷡����ء�N)������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_4.png" alt="���󥿡��ͥå��Żҥ᡼������򤷡����ؤ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.�֥��󥿡��ͥå��Żҥ᡼�������ײ��̤ˤƲ�����������ϸ塢�ܺ�����(M)������</h5>
                                <div class="box_body">
                                    <p><a href="man_mail_setting.php">�᡼�륽�եȤ�����</a>�䲼���򻲹ͤ˾�������Ϥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_5.png" alt="���������"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>�桼��������</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">̾����Y��</th>
                                                <td>�����ͤ�̾���ʼ����Ԥ�ɽ�������̾���ˤʤ�ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�Żҥ᡼�륢�ɥ쥹��E��</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>�����С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">��������Ȥμ����A��</th>
                                                <td>POP3 �⤷���� IMAP�ʢ�Ǥ�ա� </td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�륵���С� ��I��</th>
                                                <td rowspan="2">���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�����᡼�륵���С���SMTP�ˡ�O��</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>�᡼�� �����С��ؤΥ��������</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">���������̾��U��</th>
                                                <td>�Żҥ᡼�륢�ɥ쥹��E�ˤ����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ���ɡ�P��</th>
                                                <td>�᡼�륢������Ⱥ����������ꤷ���ѥ����</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ���ɤ���¸�����R��</th>
                                                <td>�����å��ڤ���ۡʢ�Ǥ�ա� </td>
                                            </tr>
                                            <tr>
                                                <th>�᡼�륵���С����������ƥ����ݸ�줿�ѥ����ǧ�ڡ�SPA�ˤ��б����Ƥ�����ˤϡ������å� �ܥå����򥪥�ˤ��Ƥ���������Q��</th>
                                                <td>�����å��ڤʤ���</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.���������С����֤򥯥�å����������Τ褦������</h5>
                                <div class="box_body">
                                    <p>���������С� (SMTP) ��ǧ�ڤ�ɬ�פ˥����å��򤷡������᡼�륵���С���Ʊ���������Ѥ���򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_6.png" alt="�֥��󥿡��ͥå��Żҥ᡼������ײ���"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.�ܺ����꥿�֤򥯥�å������֥����С��Υݡ����ֹ�פΡ����������С���SMTP�ˡפ�587���ѹ�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_10.png" alt="�֥��󥿡��ͥå��Żҥ᡼������ײ���"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.���괰λ</h5>
                                <div class="box_body">
                                    <p>�����β��̤�ɽ�����줿�顢����ϴ�λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ol_8.png" alt="���괰λ"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.���̾����Ρ֥ġ���(T)�פ�ꡢ�֥������������(A)�פ�����</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.���Żҥ᡼��ץ��֤�ꡢ���ѹ�(A)�פ�����</h5>
                            <div class="box_body">
                                <p>���Żҥ᡼��ץ��֤�ꡢ�᡼�륢������Ȥ����򤷡����ѹ�(A)�פ򥯥�å�</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.�־ܺ�����פ򥯥�å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.�����������С��ץ��֤��ǧ������OK�פ򥯥�å�</h5>
                            <div class="box_body">
                                <p>�����������С��ץ��֤ˤ�������������С�(SMTP)��ǧ�ڤ�ɬ�ספȡ��ּ����᡼�륵���С���Ʊ���������Ѥ���פβս�˥����å������졢���̲����Ρ�OK�פ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol_smtp_4.png" alt="SMTPǧ��������ˡ4"></p>
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