<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WindowsLive�᡼�������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ǻ��������᡼�륢�ɥ쥹���WindowsLive�᡼��פǻ��Ѥ��뤿���������ˤĤ��ơ�overSSL����μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WindowsLive�᡼��</h3>

                <aside class="msg msg_caution">
                   <p class="red font-bold">���᡼�륽�եȤ�2017ǯ1��10�����ä�Microsoft�Υ��ݡ��Ȥ���λ���ޤ����� <br>
                   �ۤ��Υ᡼�륽�եȤ䡢WEB�᡼������Ѥ򤴸�Ƥ����������</p>
                </aside>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">WindowsLive�᡼�� ��������Ȥ�������ˡ(overSSL����)</a>
							<ol>
								<li><a href="#link-a01">1.��˥塼�Ρ֥�������ȡץ��֤򥯥�å����ơ����Żҥ᡼��פ򥯥�å�</a></li>
								<li><a href="#link-a02">2.�᡼�륢�ɥ쥹���ѥ���ɡ�ɽ��̾������</a></li>
								<li><a href="#link-a03">3.�����᡼�롦�����᡼�륵���С�̾������</a></li>
								<li><a href="#link-a04">4.���괰λ</a></li>
							</ol>
						</li>
						<li><a href="#link-b">SMTPǧ��������ˡ</a>
							<ol>
								<li><a href="#link-b01">1.�֥ۡ���פ�ꡢ�᡼�륢������Ȥ򱦥���å������֥ץ�ѥƥ���R)�פ�����</a></li>
								<li><a href="#link-b02">2.�֥����С��ץ��֤򥯥�å�</a></li>
								<li><a href="#link-b03">3.�ּ����᡼�륵���С���Ʊ���������Ѥ���פ˥����å������졢��OK�פ򥯥�å�</a></li>
							</ol>
						</li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">WindowsLive�᡼�� ��������Ȥ�������ˡ(overSSL����)</h4>
                    <div class="section_body">

                        <div class="border border_gray">
                            <p class="link mb0"><a href="man_mail_setting_wlm_not.php">����³����SSL�����Ѥ��ʤ�����³���ݸ�ʤ��ˡ׾��Ϥ�����</a><i class="ico ico_chevron-right"></i></p>
                        </div>

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.��˥塼�Ρ֥�������ȡץ��֤򥯥�å����ơ����Żҥ᡼��פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_1.png" alt="WindowsLive�᡼��ǡ֥�������ȡץ��֡��Żҥ᡼��פ�����"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.�᡼�륢�ɥ쥹���ѥ���ɡ�ɽ��̾������</h5>
                                <div class="box_body">
                                    <p>���ꤴ��˾�Υ᡼�륢�ɥ쥹���᡼�륢�ɥ쥹�����������ꤷ���ѥ���ɤ����Ϥ��Ƥ���������<br>
                                    �ּ�ư�ǥ����С�������������C�ˡפ˥����å�������ơ��ּ��ءץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_2.png" alt="�Żҥ᡼�륢������Ȳ���"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.�����᡼�롦�����᡼�륵���С�̾������</h5>
                                <div class="box_body">
                                    <p>�����򻲹ͤ˾�������Ϥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_3.png" alt="�����������᡼�륵���С�����"></p>
                                    <table class="table table_use-caption">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th>�����᡼�륵���С��μ���</th>
                                                <td>POP �⤷���� IMAP����Ǥ��</td>
                                            </tr>
                                            <tr>
                                                <th>�����С��Υ��ɥ쥹</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>995����IMAP�ξ���993</td>
                                            </tr>
                                            <tr>
                                                <th>�������ƥ����ݸ�줿��³��SSL�ˤ�ɬ�ס�R)</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>������Ѥ���ǧ�ڤ���</th>
                                                <td>���ꥢ �ƥ�����</td>
                                            </tr>
                                            <tr>
                                                <th>������桼����̾</th>
                                                <td>�Żҥ᡼�륢�ɥ쥹 �����Ϥ�����Τ�Ʊ���᡼�륢�ɥ쥹</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table_use-caption">
                                        <caption>���������С�����</caption>
                                        <tbody>
                                            <tr>
                                                <th>�����С��Υ��ɥ쥹</th>
                                                <td>���괰λ�᡼��˵��ܤ���Ƥ���֥᡼�륵���С��פ����Ϥ��Ƥ���������
                                                <div class="note">�������С��ѥͥ���֥����С�����פ˵��ܤΡȥۥ���̾�ɤ�Ʊ��Ǥ���</div>
                                                ���sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�ݡ���</th>
                                                <td>465</td>
                                            </tr>
                                            <tr>
                                                <th>�������ƥ����ݸ�줿��³��SSL�ˤ�ɬ�ס�R)</th>
                                                <td>�����å����������</td>
                                            </tr>
                                            <tr>
                                                <th>ǧ�ڤ�ɬ�ס�A��</th>
                                                <td>�����å����������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>ɬ�׻�������Ϥ����顢�ּ��ءפ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.���괰λ</h5>
                                <div class="box_body">
                                    <p>�ʲ��Τ褦�ʲ��̤�ɽ�����줿�顢���괰λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_mail_setting_wlm_4.png" alt="WindowsLive�᡼�롦����������ɲ����괰λ"></p>
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
                            <h5 class="box_ttl" id="link-b01">1.�֥ۡ���פ�ꡢ�᡼�륢������Ȥ򱦥���å������֥ץ�ѥƥ���R)�פ�����</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_1.png" alt="SMTPǧ��������ˡ1"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.�֥����С��ץ��֤򥯥�å�</h5>
                            <div class="box_body">
                                <p>�֥����С��ץ��֤ˤ���������᡼�륵���С��פΡ֤��Υ����С���ǧ�ڤ�ɬ�ס�V�ˡפ˥����å������졢 ������פ򥯥�å�</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_2.png" alt="SMTPǧ��������ˡ2"></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.�ּ����᡼�륵���С���Ʊ���������Ѥ���פ˥����å������졢��OK�פ򥯥�å�</h5>
                            <div class="box_body">
                                <p><img class="img" src="../img/manual/man_mail_setting_wlm_smtp_3.png" alt="SMTPǧ��������ˡ3"></p>
                                <p>��2�ˤβ��̤����ޤ����顢��OK�פ򥯥�å����ޤ���</p>
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