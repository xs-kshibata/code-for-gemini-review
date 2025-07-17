<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>��iPhone�᡼��(��³���ݸ�ʤ�)������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���iPhone�᡼��פǻ��Ѥ��뤿���������ˤĤ��ơ�����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ�����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">��iPhone�᡼��</h3>
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">iPhone �᡼�륢������Ȥ�������ˡ</a>
							<ol>
								<li><a href="#link-a01">1.�ۡ�����̤��������פ򥿥å�</a></li>
								<li><a href="#link-a02">2.�֥᡼��/Ϣ����/���������פ򥿥å�</a></li>
								<li><a href="#link-a03">3.�֥�������Ȥ��ɲáפ򥿥å�</a></li>
								<li><a href="#link-a04">4.�֤���¾�פ򥿥å�</a></li>
								<li><a href="#link-a05">5.���줾��ι��ܤ�����</a></li>
								<li><a href="#link-a06">6.��POP�פ⤷���ϡ�IMAP�פ򥿥å�</a></li>
								<li><a href="#link-a07">7.�᡼�륵���С���������ϸ塢����¸�פ򥿥å�</a></li>
								<li><a href="#link-a08">8.��³����פ򥿥å�</a></li>
								<li><a href="#link-a09">9.��λ</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.�ۡ�����̤Ρ�����פ򥿥å�</a></li>
								<li><a href="#link-b02">2.�֥᡼��/Ϣ����/���������פ򥿥å�</a></li>
								<li><a href="#link-b03">3.�᡼�륵���С�̾�򥿥å�</a></li>
								<li><a href="#link-b04">4.�᡼�륢������Ȥ򥿥å�</a></li>
								<li><a href="#link-b05">5.�������᡼�륵���С����SMTP�򥿥å�</a></li>
								<li><a href="#link-b06">6.�֥ץ饤�ޥꥵ���СפΥ����С�̾�򥿥å�</a></li>
								<li><a href="#link-b07">7.�������᡼�륵���С����ǧ�ڤ�֥ѥ���ɡפ��ѹ�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">iPhone �᡼�륢������Ȥ�������ˡ</h4>
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
                            <p class="link mb0"><a href="man_mail_setting_iphone_old.php">��STARTTLS�פ��뤤�ϡ�POP/IMAP/SMTP over SSL�פ����Ѥ�����Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�ۡ�����̤��������פ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_1.png" alt="������פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.�֥᡼��/Ϣ����/���������פ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_2.png" alt="�֥᡼��/Ϣ����/���������פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.�֥�������Ȥ��ɲáפ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_3.png" alt="�֥�������Ȥ��ɲ�...�פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.�֤���¾�פ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_4.png" alt="�֤���¾�פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.���줾��ι��ܤ�����</h5>
                                <div class="box_body">
                                	<p>�֥᡼�륢������Ȥ��ɲáפ򥿥åפ�����������Ϥ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_5.png" alt="���줾��ɬ�׹��ܤ�����"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">̾��</th>
                                                <td>Ǥ�աʺ��пͤȤ��Ƽ����Ԥ�ɽ�������̾���ˤʤ�ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼��</th>
                                                <td>���ꤹ��᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>���ꤹ��᡼�륢�ɥ쥹����������ݤΥѥ���ɤ����Ϥ��Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>Ǥ�ա�(�㡧���Ӥ䥵���С�̾�ʤ�)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.��POP�פ⤷���ϡ�IMAP�פ򥿥å�</h5>
                                <div class="box_body">
                                    <p class="note">�������Ǥϡ�POP�פˤ������Ԥ��ޤ�������IMAP�פǤ�������ܤ�Ʊ���Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_6.png" alt="��POP�פ⤷���ϡ�IMAP�פ�����"></p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w20per">̾��</th>
                                                <td>Ǥ�աʺ��пͤȤ��Ƽ����Ԥ�ɽ�������̾���ˤʤ�ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼��</th>
                                                <td>���ꤹ��᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>Ǥ�ա�(�㡧���Ӥ䥵���С�̾�ʤ�)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                    	<caption>�����᡼�륵���С�/�����᡼�륵���С�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�ۥ���̾</th>
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
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.�᡼�륵���С���������ϸ塢����¸�פ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_8.png" alt="�᡼�륵���С���������ϸ塢����¸�פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.��³����פ򥿥å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_11.png" alt="��³����פ򥿥å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a09">9.��λ</h5>
                                <div class="box_body">
                                    <p>�᡼�륢������Ȥ��ɲä���λ���ޤ������ʾ������ϴ�λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_iphone_9.png" alt="��λ"></p>
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
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.�֥᡼��/Ϣ����/���������פ򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.�᡼�륵���С�̾�򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.�᡼�륢������Ȥ򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_4.png" alt="SMTPǧ��������ˡ4"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b05">5.�������᡼�륵���С����SMTP�򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_5.png" alt="SMTPǧ��������ˡ5"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b06">6.�֥ץ饤�ޥꥵ���СפΥ����С�̾�򥿥å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_6.png" alt="SMTPǧ��������ˡ6"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b07">7.�������᡼�륵���С����ǧ�ڤ�֥ѥ���ɡפ��ѹ�</h5>
                            <div class="box_body">
                                <p>�֥ѥ���ɡפ����ꤷ������Ρִ�λ�פ򥿥åפ��Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_iphone_smtp_7.png" alt="SMTPǧ��������ˡ7"></p>
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