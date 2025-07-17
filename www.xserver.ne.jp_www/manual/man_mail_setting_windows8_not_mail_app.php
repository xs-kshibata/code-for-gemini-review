<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Windows8�᡼��������(Microsoft��������Ȥ��᡼�륢�ץ�����Ѥ��Ƥ��ʤ��᡼�륢�ɥ쥹�ξ��) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���Windows8�᡼��ס�Microsoft��������Ȥ��᡼�륢�ץ�����Ѥ��Ƥ��ʤ��᡼�륢�ɥ쥹�ξ��ˤǻ��Ѥ��뤿���������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Windows8�᡼��</h3>

                <aside class="msg msg_caution">
                   <p class="red font-bold">Windows8.1��2023ǯ1��10�����ä�Microsoft�Υ��ݡ��Ȥ���λ���ޤ�����<br>
                   �ۤ��Υ᡼�륽�եȤ䡢WEB�᡼������Ѥ򤴸�Ƥ����������</p>
                </aside>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">Windows8 �᡼�륢�ץ�Ǥ�������ˡ (Microsoft��������Ȥ��᡼�륢�ץ�����ꤹ��᡼�륢�ɥ쥹�Ȱۤʤ���)</a>
							<ul>
								<li><a href="#link-a01">��ư�������</a></li>
							</ul>
						</li>
						<li><a href="#link-b">�᡼�륢������Ȥ�����ɲ����ꤹ����</a>
							<ol>
								<li><a href="#link-b01">1.IMAP������</a></li>
								<li><a href="#link-b02">2.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</a></li>
								<li><a href="#link-b03">3.���������</a></li>
								<li><a href="#link-b04">4.���괰λ</a></li>
							</ol>
						</li>
						<li><a href="#link-c">���˥᡼�륢������Ȥ��ɲ����ꤵ��Ƥ�����</a>
							<ol>
								<li><a href="#link-c01">1.�֡�����ϤǤ��٤Ƥ�ɽ���פ򥯥�å�</a></li>
								<li><a href="#link-c02">2.�֤���¾�Υ�������ȡפ�����</a></li>
								<li><a href="#link-c03">3.IMAP������</a></li>
								<li><a href="#link-c04">4.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</a></li>
								<li><a href="#link-c05">5.���������</a></li>
								<li><a href="#link-c06">6.���괰λ</a></li>
							</ol>
						</li>
						<li><a href="#link-d">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-d01">1.���������</a></li>
								<li><a href="#link-d02">2.�������Ρ֥�������ȡפ򥯥�å�</a></li>
								<li><a href="#link-d03">3.��������Ȥ��᡼�륢������Ȥ�����</a></li>
								<li><a href="#link-d04">4.�����������С���ǧ�ڤ�ɬ�ספ�����å�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                

                <section class="section">
                	
                    <h4 class="section_ttl" id="link-a">Windows8 �᡼�륢�ץ�Ǥ�������ˡ<span class="font-xs"> (Microsoft��������Ȥ��᡼�륢�ץ�����ꤹ��᡼�륢�ɥ쥹�Ȱۤʤ���)</span></h4>
                    <div class="section_body">
 
                        <aside class="msg msg_caution">
                            <div class="msg_body">
                                <p class="font-bold red">�᡼�륢�ץ�����ꤹ��᡼�륢�ɥ쥹����Microsoft��������Ȥ�Ʊ�����ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                                <p class="link"><a href="man_mail_setting_windows8.php">Microsoft��������Ȥ��᡼�륢�ץ�����ꤹ��᡼�륢�ɥ쥹��Ʊ��ξ��</a><i class="ico ico_chevron-right"></i></p>
                            </div>
                        </aside>
                        <aside class="msg msg_caution">
                            <div class="msg_body">
                                <p class="font-bold red">Windows 8�Υ᡼�륢�ץ�μ��������ϡ�IMAP�Τߤ��б����Ƥ��ޤ���<br>����������POP�����Ѥ��������ϡ�¾�Υ᡼�륽�եȤ��Ѱդ���������</p>
                            </div>
                        </aside>
                        <section class="block">
                            <h3 class="block_ttl" id="link-a01">��ư�������</h5>
                            <div class="block_body">
                                <p>Windows8�Ρ֥᡼��פ򥯥�å����Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_1.png" alt="Windows�᡼��ǥ����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                <p>Microsoft ��������Ȥ��ɲä�����̤�ɽ������ޤ���<br>
                                �֥᡼�륢�ɥ쥹�פȡ֥ѥ���ɡפ����Ϥ��ơ���¸�٤򥯥�å����Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_2.png" alt="Windows�᡼��ǥ����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="w30per">�᡼�륢�ɥ쥹</th>
                                            <td>Microsoft ��������Ȥ���Ͽ�����᡼�륢�ɥ쥹</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>Microsoft ��������Ȥ���Ͽ�����ѥ����</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note red">��Microsoft ��������Ȥ��ɲä�̤��Ͽ�ξ��ϡ�Microsoft ��������Ȥ򿷵���Ͽ�ɤˤƻ�������Ͽ��ɬ�פǤ���</p>
                                <aside class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>����¸�٤������ϳ���������ܤؤ��ʤߤ���������</h6>
                                    <div class="msg_body">
                                        <ul class="list list_arrow-down mb0">
                                            <li><a href="#link-b">�᡼�륢������Ȥ�����ɲ����ꤹ����</a></li>
                                            <li><a href="#link-c">���˥᡼�륢������Ȥ��ɲ����ꤵ��Ƥ�����</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                        
                <section class="section">
                    <h4 id="link-b" class="section_ttl">�᡼�륢������Ȥ�����ɲ����ꤹ����</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            <section class="box">
                               <h5 class="box_ttl" id="link-b01">1.IMAP������</h5>
                                <div class="box_body">
                                    <p>��IMAP�פ����򤷡�����³�٤򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_5.png" alt="����³�٤򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-b02">2.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</h5>
                                <div class="box_body">
                                    <p>�ɲ������˾�Υ᡼�륢�ɥ쥹���᡼�륢�ɥ쥹�����������ꤷ���ѥ���ɤ����Ϥ����־ܺ٤�ɽ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_6.png" alt="�־ܺ٤�ɽ���פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-b03">3.���������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ�������³�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_7.png" alt="����³�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
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
                                    <table class="table table_use-caption mb5">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">������IMAP�˥᡼�륵���С�</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>993</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���SSL��ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">������SMTP�˥᡼�륵���С�</th>
                                                 <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                 <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���SSL��ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���ǧ�ڤ�ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼��������ȼ�����Ʊ���桼����̾�ȥѥ���ɤ�Ȥ�</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl box_ttl_no-body" id="link-b04">4.���괰λ</h5>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                        
                <section class="section">
                    <h4 id="link-c" class="section_ttl">���˥᡼�륢������Ȥ��ɲ����ꤵ��Ƥ�����</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            <section class="box">
                               <h5 class="box_ttl" id="link-c01">1.�֡�����ϤǤ��٤Ƥ�ɽ���פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_not_mail_app_1.png" alt="�֡�����ϤǤ��٤Ƥ�ɽ���פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c02">2.�֤���¾�Υ�������ȡפ�����</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_4.png" alt="�֥�������ȡפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c03">3.IMAP������</h5>
                                <div class="box_body">
                                    <p>��IMAP�פ����򤷡�����³�٤򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_5.png" alt="����³�٤򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c04">4.�᡼�륢�ɥ쥹�ȥѥ���ɤ�����</h5>
                                <div class="box_body">
                                    <p>�ɲ������˾�Υ᡼�륢�ɥ쥹���᡼�륢�ɥ쥹�����������ꤷ���ѥ���ɤ����Ϥ����־ܺ٤�ɽ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_6.png" alt="�־ܺ٤�ɽ���פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                               <h5 class="box_ttl" id="link-c05">5.���������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ�������³�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_windows8_7.png" alt="����³�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w40per">�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹��@�����ޤ�᡼�륢�ɥ쥹��</td>
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
                                    <table class="table table_use-caption mb5">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">������IMAP�˥᡼�륵���С�</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>993</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���SSL��ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w40per">������SMTP�˥᡼�륵���С�</th>
                                                 <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                 <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���SSL��ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>���������С���ǧ�ڤ�ɬ��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼��������ȼ�����Ʊ���桼����̾�ȥѥ���ɤ�Ȥ�</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                            	
                                <h5 class="box_ttl box_ttl_no-body" id="link-c06">6.���괰λ</h5>
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
                               <h5 class="box_ttl" id="link-d01">1.���������</h5>
                            <div class="box_body">
                                <p>�ޥ����ݥ��󥿤���̱����˰�ư������ɽ�����줿���㡼��(������ʬ)�ˤ��������פ򥯥�å����ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d02">2.�������Ρ֥�������ȡפ򥯥�å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d03">3.��������Ȥ��᡼�륢������Ȥ�����</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                            </div>
                        </section>
                        <section class="box">
                               <h5 class="box_ttl" id="link-d04">4.�����������С���ǧ�ڤ�ɬ�ספ�����å�</h5>
                            <div class="box_body">
                                <p>���������Ρ������᡼�륵���С��׹��ܤβ��ˤ�������������С���ǧ�ڤ�ɬ�ספ˥����å�������ޤ���</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_windows8_smtp_4.png?date=20181116" alt="SMTPǧ��������ˡ4"></p>
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