<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Mozilla Thunderbird(��³���ݸ�ʤ�)������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Mozilla Thunderbird��Ver.31�ʹߡˡפǻ��Ѥ��뤿���������ˤĤ��ơ�����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ�����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Mozilla Thunderbird(Ver31��)</h3>

				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Mozilla Thunderbird Ver.31�ʹ� ��������Ȥ�������ˡ
				(����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡפ����Ѥ�����)</a>
							<ol>
								<li><a href="#link-a01">1.�֥�������ȡפˤ���ֿ�������������Ⱥ����פΡ֥᡼��פ򥯥�å�</a></li>
								<li><a href="#link-a02">2.���̺����Ρ֥᡼�륢������Ȥ����ꤹ��פ򥯥�å�</a></li>
								<li><a href="#link-a03">3.̾�����᡼�륢�ɥ쥹���ѥ���ɤ�����</a></li>
								<li><a href="#link-a04">4.�ּ�ư����פ򥯥�å�</a></li>
								<li><a href="#link-a05">5.���������</a></li>
								<li><a href="#link-a06">6.�ֺƥƥ��ȡפ򥯥�å�</a></li>
								<li><a href="#link-a07">7.�ִ�λ�פ򥯥�å�</a></li>
								<li><a href="#link-a08">8.�ٹ�ɽ�����줿���</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.�᡼�륢������Ȥ򱦥���å������������E�ˡפؿʤߤޤ���</a></li>
								<li><a href="#link-b02">2.��������SMTP�˥����Сפ򥯥�å�</a></li>
								<li><a href="#link-b03">3.�֥������ƥ���ǧ�ڡפ��ǧ</a></li>
							</ol>
						</li>
					</ul>
				</div>
				
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Mozilla Thunderbird Ver.31�ʹ� ��������Ȥ�������ˡ<br>
                    <span class="font-xs">(����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡפ����Ѥ�����)</span></h4>
                    <div class="section_body">
                        <aside class="msg mb10">
                            <div class="msg_body">
                                <p class="font-bold">�������ӥ��ϡ��᡼����������ǧ�������ˤĤ��Ƥϡ�SMTPǧ��(SMTP-AUTH)��侩���Ƥ���ޤ���<br>
                                �������ꤵ�줿��������Ȥ�SMTPǧ��������ˡ�ˤĤ��Ƥϡ�������μ��򤴻��Ȥ���������</p>
                                <ul class="list list_arrow-down mb0">
                                    <li><a href="#link-b">SMTPǧ��������ˡ</a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_tb_31.php">��STARTTLS�פ��뤤�ϡ�POP/IMAP/SMTP over SSL�פ����Ѥ�����Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�֥�������ȡפˤ���ֿ�������������Ⱥ����פΡ֥᡼��פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_1.png" alt="�֥᡼��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.���̺����Ρ֥᡼�륢������Ȥ����ꤹ��פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_2.png" alt="�֥᡼�륢������Ȥ����ꤹ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.̾�����᡼�륢�ɥ쥹���ѥ���ɤ�����</h5>
                                <div class="box_body">
                                    <p>�᡼�륢����������ꥦ����ɥ���ɽ������ޤ��Τǡ�[���ʤ��Τ�̾��] [�᡼�륢�ɥ쥹] [�ѥ����]�����Ϥ�[�ѥ���ɤ򵭲�����]�˥����å��������³����פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_3.png" alt="��³����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <table class="table table_use-caption">
                                        <caption>�᡼�륢�����������</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">���ʤ��Τ�̾��</th>
                                                <td>��Ǥ�դ�ʸ����</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
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
                                <h5 class="box_ttl" id="link-a04">4.�ּ�ư����פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>�᡼�륢����������ꥦ����ɥ��ˤơȥ�����������꤬������Ū�ʥ�����̾�Ǹ����������Ȥˤ�긫�Ĥ���ޤ������ɤ�ɽ������ޤ��Τǡ�������ɥ������Ρּ�ư����פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_4.png" alt="�ּ�ư����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a05">5.���������</h5>
                                <div class="box_body">
                                    <p>���������С����������о�������Ϥ��륦����ɥ���ɽ������ޤ��Τǡ������򻲹ͤ˾�������Ϥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_not_1.png" alt="����³�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>����������</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�����Фμ���</th>
                                                <td><strong>POP3</strong> &nbsp;&nbsp;���뤤��&nbsp;&nbsp;<strong>IMAP</strong></td>
                                            </tr>
                                            <tr>
                                                <th>�ۥ���̾</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ����ֹ�</th>
                                                <td>��POP3��<strong>110</strong>&nbsp;&nbsp;���뤤��&nbsp;&nbsp;��IMAP��<strong>143</strong></td>
                                            </tr>
                                            <tr>
                                                <th>SSL</th>
                                                <td><strong>��³���ݸ�ʤ�</strong></td>
                                            </tr>
                                            <tr>
                                                <th>ǧ������</th>
                                                <td><strong>�̾�Υѥ����ǧ��</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption mb5">
                                        <caption>����������</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�ۥ���̾</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ����ֹ�</th>
                                                <td><strong>587</strong></td>
                                            </tr>
                                            <tr>
                                                <th>SSL</th>
                                                <td><strong>��³���ݸ�ʤ�</strong></td>
                                            </tr>
                                            <tr>
                                                <th>ǧ������</th>
                                                <td><strong>�̾�Υѥ����ǧ��</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>�桼����̾</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�桼����̾</th>
                                                <td><strong>�᡼�륢�ɥ쥹</strong>��@�ʹߤ�ޤߤޤ���</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a06">6.�ֺƥƥ��ȡפ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>�ݡ����ֹ�ʤɡ����Ϲ��ܤ����Ƥ򺣰��٤���ǧ�ξ塢���꤬�ʤ���в��̱����Ρֺƥƥ��ȡפ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_not_2.png" alt="�ֺƥƥ��ȡפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a07">7.�ִ�λ�פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>�ּ��Υ�����������꤬�����ꤵ�줿�����Ф�Ĵ�٤뤳�Ȥˤ�긫�Ĥ���ޤ������פ�ɽ�����ǧ�������̱����Ρִ�λ�פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_not_3.png" alt="�ִ�λ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a08">8.�ٹ�ɽ�����줿���</h5>
                                <div class="box_body">
                                    <p>���5�ˤơ�SSL��������³���ݸ�ʤ��פ����ꤵ�줿��硢��³���ݸ��ʤ����ȤˤĤ��Ʋ����ηٹ�ɽ������ޤ��� �ٹ���̤�ɽ�����줿���ϡ�ɽ�����Ƥ��ǧ������ǡ���³�����Ǥδ��������򤷤ޤ����פ˥����å������졢�ִ�λ�פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_tb_31_not_4.png" alt="�ٹ����"></p>
                                    <p>�ʾ������Ͻ�λ�Ǥ���</p>
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
                            <h5 class="box_ttl" id="link-b01">1.�᡼�륢������Ȥ򱦥���å������������E�ˡפؿʤߤޤ���</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.��������SMTP�˥����Сפ򥯥�å�</h5>
                            <div class="box_body">
                                <p>������������꤬ɽ������ޤ�����������SMTP�˥����Сפ򥯥�å����������Υ᡼�륢������Ȥ����Ѥ��Ƥ��� �����С�������塢���Խ���E�ˡפ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_not_1.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.�֥������ƥ���ǧ�ڡפ��ǧ</h5>
                            <div class="box_body">
                                <p>��ǧ��������I�ˡפι��ܤΡ��̾�Υѥ����ǧ�ڡפ����򤷡���OK�פ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_tb_31_smtp_not_2.png" alt="SMTPǧ��������ˡ3"></p>
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