<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Becky! Internet Mail������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Becky! Internet Mail�פǻ��Ѥ��뤿���������ˤĤ��ơ�overSSL����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Becky! Internet Mail</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Becky! Internet Mail Ver.2.0 ��������ˡ(overSSL����)</a>
							<ol>
								<li><a href="#link-a01">1.���̾����Ρ֥ġ���פˤ���֥᡼��ܥå���������פ򥯥�å�</a></li>
								<li><a href="#link-a02">2.ɬ�׻��������</a></li>
								<li><a href="#link-a03">3.�־ܺ١ץ��֤�����</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.�֥ġ����T�ˡפΡ֥᡼��ܥå����������M�ˡפ�����</a></li>
								<li><a href="#link-b02">2.�֥ץ�ե�����ʣҡˡפˤơ��᡼�륢�ɥ쥹������</a></li>
								<li><a href="#link-b03">3.��OP25B�פ˥����å������äƤ��뤳�Ȥ��ǧ</a></li>
								<li><a href="#link-b04">4.�־ܺ١פ򥯥�å�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Becky! Internet Mail Ver.2.0 ��������ˡ(overSSL����)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_becky_not.php">����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ׾��Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.���̾����Ρ֥ġ���פˤ���֥᡼��ܥå���������פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_1.png" alt="Becky! Internet Mail�ǥ᡼��ܥå�������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.ɬ�׻��������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_2.png" alt="Becky! Internet Mail�ǳƼ�����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�᡼��ܥå���̾</th>
                                                <td>��Ǥ�դ�ʸ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>�Ŀ;���</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">̾��</th>
                                                <td>��Ǥ�դ�ʸ����(���пͤȤ��Ƽ����Ԥ�ɽ�������̾���ˤʤ�ޤ�)</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹(@�����ޤ�᡼�륢�ɥ쥹)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>�����С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�����ץ�ȥ���(T)</th>
                                                <td>POP3 �⤷���� IMAPrev1(��Ǥ��)</td>
                                            </tr>
                                            <tr>
                                                <th>POP3�����С�(����)(M)</th>
                                                <td rowspan="2">���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>SMTP�����С�(����)(S)</th>
                                            </tr>
                                            <tr>
                                                <th>POP3S/IMAPS</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>OP25B</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>SMTPS</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����ID(U)</th>
                                                <td>�᡼�륢�ɥ쥹�����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����(P)</th>
                                                <td>�᡼�륢������Ⱥ����������ꤷ���ѥ����</td>
                                            </tr>
                                            <tr>
                                                <th>ǧ����ˡ</th>
                                                <td>ɸ��</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">���ʲ��β��̤�ɽ�����줿���ϡ֤Ϥ��פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_3.png" alt="�ݡ����ֹ���995�פ��ѹ����뤫�ɤ����β��̤�ɽ������Ƥ��륹���꡼�󥷥�å�"></p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_4.png" alt="�ݡ����ֹ���465�פ��ѹ����뤫�ɤ����β��̤�ɽ������Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.�־ܺ١ץ��֤�����</h5>
                                <div class="box_body">
                                    <p>�־ܺ١פΥ��֤����򤷡��������Ƥ򻲹ͤ˾�������Ϥ�����OK�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_becky_5.png?date=210617" alt="Becky! Internet Mail�Ǿܺ٥����������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                    
                                    <table class="table table_use-caption mb5">
                                        <caption>�����С��Υݡ����ֹ�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SMTP</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>POP3</th>
                                                <td>995</td>
                                            </tr>
                                            <tr>
                                                <th>IMAP4</th>
                                                <td>993</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>SMTPǧ�ڡ����ʡ������å���������ۡ���</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">LOGIN</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>PLAIN</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>POP before SMTP�����</th>
                                                <td>�����å���ڳ�����</td>
                                            </tr>
                                            <tr>
                                                <th>ESMTP����ѡ�SMTPǧ�ڤˤ�ɬ�ܡ�</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>SSL/TLS��Ϣ</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">������(C)</th>
                                                <td>�ڥǥե���ȡۤ�����</td>
                                            </tr>
                                            <tr>
                                                <th>������(I)</th>
                                                <td>�ڥǥե���ȡۤ�����</td>
                                            </tr>
                                            <tr>
                                                <th>������򸡾ڤ��ʤ�(S)</th>
                                                <td>�����å���ڳ�����</td>
                                            </tr>
                                            <tr>
                                                <th>���饤����Ⱦ���������(F)</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>�ʾ������ϴ�λ�Ǥ���</p>
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
                            <h5 class="box_ttl" id="link-b01">1.�֥ġ����T�ˡפΡ֥᡼��ܥå����������M�ˡפ�����</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.�֥ץ�ե�����ʣҡˡפˤơ��᡼�륢�ɥ쥹������</h5>
                            <div class="box_body">
                                <p>���̲����Ρ֥ץ�ե�����ʣҡˡפˤơ�������ǧ�������᡼�륢�ɥ쥹�Υץ�ե�������ѹ����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.��OP25B�פ˥����å������äƤ��뤳�Ȥ��ǧ</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.�־ܺ١פ򥯥�å�</h5>
                            <div class="box_body">
                                <p>��SMTPǧ�ڡס�LOGIN�ס�PLAIN�ס�ESMTP����ѡפ˥����å��򤤤졢��OK�פ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_becky_smtp_4.png?date=210617" alt="SMTPǧ��������ˡ4"></p>
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