<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Google Workspace(��G Suite)�򤪻Ȥ������������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�DNS�쥳�����Խ��׵�ǽ��Google Workspace(��G Suite)����Ѥ���ݤ���ջ���ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Google Workspace(��G Suite)�򤪻Ȥ������������</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">�ɥᥤ���ͭ���γ�ǧ</a>
                            <ul>
                                <li><a href="#link-a01">TXT�쥳���ɤ��ɲä��Ƥ����������</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-b">Google Workspace�򤪻Ȥ�������������DNS�쥳�����Խ�</a>
                            <ul>
                                <li><a href="#link-b01">Google Workspace�Ѥ�MX�쥳���ɤ��ɲä������פ�MX�쥳���ɤ���</a></li>
                                <li><a href="#link-b02">���ץꥱ��������DNS����</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
               
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                </ul>

				<p>
					�ܥޥ˥奢��ˤĤ��ơ�Google Workspace�Υ����ƥ���ѹ��ˤ�ä����Ƥ��Ѥ���礬����ޤ���<br>
					�ܤ�����Google�ؤ��䤤��碌����������
				</p>
                
                <section class="section mt30">
                    <h4 class="section_ttl" id="link-a">�ɥᥤ���ͭ���γ�ǧ</h4>
                    <div class="section_body">
                        <p>�ޤ���Google Workspace�ؤ��������ߤ����������ɥᥤ���ͭ���γ�ǧ�򤷤Ƥ�������ɬ�פ��������ޤ���</p>
                        <p>Google Workspace�ǡ֥ɥᥤ���ͭ���γ�ǧ�פμ�³�����äƤ����������ɥᥤ��̾�Ǹ������줿WEB�����о��Google�λ��ꤹ��html�ե�����򥢥åץ��ɤ��뤫���ɥᥤ���DNS�����Google�λ��ꤹ��TXT(�ƥ�����)�쥳���ɤ�񤭲ä���ɬ�פ�����ޤ���</p>
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">TXT�쥳���ɤ��ɲä��Ƥ����������</h5>
                            <div class="block_body">
                                <p>�ʲ��Τ褦�����ꤷ�Ƥ���������</p>
                                
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>�ۥ���̾</th>
                                            <th>����</th>
                                            <th>����</th>
                                            <th class="w10per">TTL</th>
                                            <th>ͥ����</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>��ͭ����ǧ��Ԥ��ɥᥤ��̾</td>
                                            <td>TXT</td>
                                            <td>google-site-verification=**********(��)</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note">(��)Google Workspace����󼨤�����ͭ��ʸ����Ȥʤ�ޤ���</p>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">Google Workspace�򤪻Ȥ�������������DNS�쥳�����Խ�</h4>
                    <div class="section_body">
                        <p>��DNS�쥳�����Խ��ץ�˥塼�����DNS�쥳�����ɲáפ򥯥�å����Ƥ��ʤߤ���������</p>
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">Google Workspace�Ѥ�MX�쥳���ɤ��ɲä������פ�MX�쥳���ɤ���</h5>
                            <div class="block_body">
								<p>�ȼ��ɥᥤ���Gmail�����Ѥ����硢�ʲ��Τ褦��DNS�쥳���ɤ��ɲä��Ƥ����ޤ���</p>
								<p>Google Workspace�Τ���Ͽ�����ˤ�ꡢ�ɲä��Ƥ��������쥳���ɤ��ۤʤ�ޤ���<br>���������Υ쥳���ɤ򤴻��Ȥ���������</p>
								<p>�ۥ���̾�ˤϲ������Ϥ���������Ȥ��Ƥ���������</p>
                                <p>�ɲ���ˡ�ˤĤ��Ƥξܺ٤�<a href="man_domain_dns_setting.php">������</a>�򤴻��Ȥ���������</p>
								
                                <dl class="dl">
									<dt>��2023ǯ4��ʹߤˤ���Ͽ�ξ��</dt>
									<dd>
										<table class="table break-word">
											<thead>
												<tr>
													<th>�ۥ���̾</th>
													<th>����</th>
													<th>����</th>
                                                    <th class="w10per">TTL</th>
													<th>ͥ����</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>smtp.google.com</td>
                                                    <td>3600</td>
													<td>1</td>
												</tr>
											</tbody>
										</table>
									</dd>
									<dt>��2023ǯ3�����ޤǤˤ���Ͽ�ξ��</dt>
									<dd>
										<table class="table break-word">
											<thead>
												<tr>
													<th>�ۥ���̾</th>
													<th>����</th>
													<th>����</th>
                                                    <th class="w10per">TTL</th>
													<th>ͥ����</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>1</td>
												</tr>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>alt1.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>5</td>
												</tr>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>alt2.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>5</td>
												</tr>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>alt3.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>10</td>
												</tr>
												<tr>
													<td>�����.�ɥᥤ��̾��</td>
													<td>MX</td>
													<td>alt4.aspmx.l.google.com</td>
                                                    <td>3600</td>
													<td>10</td>
												</tr>
											</tbody>
										</table>
									</dd>
								</dl>
                                <p>³���ơ��ɥᥤ��������ɲä��������Ǽ�ưŪ�˺��������ʲ���MX�쥳���ɤ������ޤ���</p>
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>�ۥ���̾</th>
                                            <th>����</th>
                                            <th>����</th>
                                            <th class="w10per">TTL</th>
                                            <th>ͥ����</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>�ɥᥤ��̾</td>
                                            <td>MX</td>
                                            <td>�ɥᥤ��̾</td>
                                            <td>3600</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>DNS�쥳���ɤ����꤬��λ�����顢<a href="man_domain_dns_setting_mail_server.php">�᡼�뵡ǽ�������̵���ˤ��Ƥ�������</a>ɬ�פ��������ޤ���</p>
								<img class="img" src="../img/manual/man_google_apps_1.png?date=20230821" alt="DNS�쥳���ɰ����Υ����꡼�󥷥�å�">
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">���ץꥱ��������DNS����</h5>
                            <div class="block_body">
                                <p>�ʲ����̤�ˡ����Ѥ��������ץꥱ��������ƥۥ���̾�����ꤷ�ޤ���<br>
                                ͥ���٤϶�������ꤢ��ޤ���</p>
                                
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>�ۥ���̾</th>
                                            <th>����</th>
                                            <th>����</th>
                                            <th class="w10per">TTL</th>
                                            <th>ͥ����</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>mail</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>calendar</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>docs</td>
                                            <td>CNAME</td>
                                            <td>ghs.google.com</td>
                                            <td>3600</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>���줾��쥳���ɤ��ɲä���Ƥ��뤳�Ȥ��DNS�쥳���ɤΰ����פˤƤ���ǧ����������</p>
                            </div>
                        </section>
                        
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