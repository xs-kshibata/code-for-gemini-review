<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>iPad�᡼�������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���iPad�᡼��פǻ��Ѥ��뤿���������ˤĤ��ơ�overSSL����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">iPad�᡼��</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">iPad�᡼�륢������Ȥ�������ˡ(overSSL����)</a>
							<ol>
								<li><a href="#link-a01">1.�ۡ�����̤���֥᡼��פ�ư</a></li>
								<li><a href="#link-a02">2.��������Ⱦ��������</a></li>
								<li><a href="#link-a03">3.����/�����᡼�륵���Фξ��������</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.�ۡ�����̤Ρ�����פ򥿥å�</a></li>
								<li><a href="#link-b02">2.�֥᡼��/Ϣ����/���������פ�ꡢ�᡼�륢������Ȥ򥿥å�</a></li>
								<li><a href="#link-b03">3.�������᡼�륵���С����SMTP�򥿥å�</a></li>
								<li><a href="#link-b04">4.�֥ץ饤�ޥꥵ���СפΥ����С�̾�򥿥å�</a></li>
								<li><a href="#link-b05">5.�������᡼�륵���С����ǧ�ڤ�֥ѥ���ɡפ��ѹ�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">iPad�᡼�륢������Ȥ�������ˡ(overSSL����)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_ipad_not.php">����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ׾��Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a01">1.�ۡ�����̤���֥᡼��פ�ư</h5>
                                <div class="box_body">
                                    <p>�֥᡼��פ�ư���ؤ���¾�٤򥿥åפ��Ƥ���������</p>
                                    <p class="note">�����ˤ���¾�᡼�륢�ɥ쥹�ǥ᡼�����Ѥξ��ϡ��إ�������Ȥ��ɲá٤��餪�ʤߤ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_1.png" alt="�֥᡼��פ�ư���ؤ���¾�٤򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a02">2.��������Ⱦ��������</h5>
                                <div class="box_body">
                                    <p>�ɲ������˾�Υ᡼�륢�ɥ쥹���᡼�륢�ɥ쥹�����������ꤷ���ѥ���ɤ����Ϥ��ּ��ءפ򥿥åפ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_2.png" alt="��������Ⱦ�������Ϥ��ּ��ءפ򥿥å�"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">̾��</th>
                                                <td>Ǥ��</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼��</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�᡼�륢�ɥ쥹�����������ꤷ���ѥ����</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>Ǥ��</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl" id="link-a03">3.����/�����᡼�륵���Фξ��������</h5>
                                <div class="box_body">
                                    <p>��POP�פ⤷���ϡ�IMAP�פ����ӡ������򻲹ͤ˾�������Ϥ򤷡ּ��ءפ򥿥åפ��Ƥ���������</p>
                                    <p class="note">�������Ǥϡ�POP�פˤ������Ԥ��ޤ�������IMAP�פǤ�������ܤ�Ʊ���Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_ipad_3.png" alt="����/�����᡼�륵���Фξ��������"></p>
                                    <table class="table table_use-caption">
                                        <caption>�����᡼�륵���С�/�����᡼�륵���С��ʶ��̡�</caption>
                                        <tbody>
                                            <tr>
                                                <th>�ۥ���̾</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>����᡼�륢�ɥ쥹����������ݤΥѥ���� </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>�ʾ�����괰λ�Ǥ���</p>
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
                        	
                            <h5 class="box_ttl" id="link-b01">1.�ۡ�����̤Ρ�����פ򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b02">2.�֥᡼��/Ϣ����/���������פ�ꡢ�᡼�륢������Ȥ򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b03">3.�������᡼�륵���С����SMTP�򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b04">4.�֥ץ饤�ޥꥵ���СפΥ����С�̾�򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_4.png" alt="SMTPǧ��������ˡ4"></p>
                            </div>
                        </section>
                        <section class="box">
                        	
                            <h5 class="box_ttl" id="link-b05">5.�������᡼�륵���С����ǧ�ڤ�֥ѥ���ɡפ��ѹ�</h5>
                            <div class="box_body">
                                <p>�֥ѥ���ɡפ����ꤷ������Ρִ�λ�פ򥿥åפ��Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ipad_smtp_5.png?date=20181119" alt="SMTPǧ��������ˡ5"></p>
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