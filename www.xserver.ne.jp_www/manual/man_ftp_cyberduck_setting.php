<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Cyberduck ������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�Cyberduck�פ��Ѥ��Ƥ�������Υ����С���������Ȥ�FTP��³�򤹤뤿���������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Cyberduck ������</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">Cyberduck ������</a>
						<ol>
							<li><a href="#link-a01">1.�ֿ�����³�פ򥯥�å�</a></li>
							<li><a href="#link-a02">2.FTP���������</a></li>
							<li><a href="#link-a03">3.������˴ؤ����ǧ���̤�ɽ���������</a></li>
							<li><a href="#link-a04">4.���괰λ</a></li>
						</ol>
					</li>
					<li><a href="#link-b">����FTP��������ȤǤ�������ˡ</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Cyberduck ������</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.�ֿ�����³�פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>Cyberduck��ư�����ֿ�����³�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_1.png" alt="Cyberduck�ǥ�������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.FTP���������</h5>
                                <div class="box_body">
                                    <p>�����Τ褦�˳ƹ��ܤ����ϸ塢����³�פ򥯥�å����Ƥ���������</p>
                                    
                                    <p class="note">�������ϥᥤ��FTP��������Ȥ������ԤäƤ��ޤ��������ͤˤ��ɲä��줿����FTP��������Ȥ����Ѥ�����ϡ�<a href="#add-account">����FTP��������ȤǤ�������ˡ</a>�פ򤴻��Ȥ���������</p>
                                    
                                    <table class="table table_use-caption">
                                        <caption>�ᥤ��FTP��������Ȥ�����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�ץ�ȥ���</th>
                                                <td>��FTP-SSL��Explicit AUTH TLS�ˡפ����򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>������</th>
                                                <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�ۥ���̾�����Ϥ��Ƥ���������<br>�������С��ѥͥ� �� ����FTP������������� �� <a href="man_ftp_info_check.php">FTP���ե�����</a> ������ǧ����ǽ�Ǥ���<br>
                                                    ��� sv***.xserver.jp</td>
                                            </tr>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�桼����̾�����Ϥ��Ƥ���������<br>�������С��ѥͥ� �� ����FTP������������� �� <a href="man_ftp_info_check.php">FTP���ե�����</a> ������ǧ����ǽ�Ǥ���<br>
                                                    ��� xsample</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�ѥ���ɤ����Ϥ��Ƥ���������<br><em class="font-bold red">�����С��ѥ���ɤȶ���</em>�Τ��ᡢ��˺��ξ���<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">�����С��ѥ���ɺ�����ե�����</a> �������ꤷ�Ƥ���������<br><em class="font-bold">��XServer��������ȤΥѥ���ɤȤϰۤʤ�ޤ�������դ���������</em></td>
                                            </tr>
                                            <tr>
                                                <th>Anonymous ������</th>
                                                <td>�����å���ڳ�����</td>
                                            </tr>
                                            <tr>
                                                <th>Save Password</th>
                                                <td>Ǥ��</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_2.png" alt="Cyberduck��FTP����������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a03">3.������˴ؤ����ǧ���̤�ɽ���������</h5>
                                <div class="box_body">
                                    <p>������˴ؤ����ǧ���̤�ɽ��������硢��OK�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_3.png" alt="Cyberduck�ǥᥤ��FTP��������Ȥ����ꤷ�Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a04">4.���괰λ</h5>
                                <div class="box_body">
                                    <p>�����С���Υե����������ɽ�����줿�����괰λ�Ǥ���</p>
                                    
                                    <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_4.png" alt="Cyberduck�����꤬��λ���������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b"><a id="add-account" name="add-account"></a>����FTP��������ȤǤ�������ˡ</h4>
                    <div class="section_body">
                        <p>�嵭��2.�פ�����򲼵��Τ褦�����ꤷ�Ƥ���������</p>
                        
                        <table class="table table_use-caption">
                            <caption>����FTP��������Ȥ�����</caption>
                            <tbody>
                                <tr>
                                    <th class="w20per">�ץ�ȥ���</th>
                                    <td>��FTP-SSL��Explicit AUTH TLS�ˡפ����򤷤Ƥ���������</td>
                                </tr>
                                <tr>
                                    <th>������</th>
                                    <td>�֥����С��ѥͥ����֥���FTP�������������פΡ�FTP���ե�����פ˵��ܤ���Ƥ����FTP�����С�(�ۥ���)̾�פ����Ϥ��Ƥ���������<br>
                                        ��� sv***.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>�桼����̾</th>
                                    <td>�֥����С��ѥͥ����֥���FTP�������������פ��ɲä�����FTP���������̾���ɲ�̾���ɥᥤ��̾�ˤ����Ϥ��Ƥ���������<br>
                                    ��� test@example.com</td>
                                </tr>
                                <tr>
                                    <th>�ѥ����</th>
                                    <td>����FTP��������Ȥ��ɲû��ˤ����ͤˤƷ�᤿�ѥ���ɤ����Ϥ��Ƥ��������� </td>
                                </tr>
                                <tr>
                                    <th>Anonymous ������</th>
                                    <td>�����å���ڳ�����</td>
                                </tr>
                                <tr>
                                    <th>Save Password</th>
                                    <td>Ǥ��</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p><img class="img" src="../img/manual/man_ftp_cyberduck_setting_5.png" alt="Cyberduck�ǥ���FTP��������Ȥ����ꤷ�Ƥ��륹���꡼�󥷥�å�"></p>
                        
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