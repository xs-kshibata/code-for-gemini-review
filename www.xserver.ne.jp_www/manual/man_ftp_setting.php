<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP���եȤ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä�����Υ����С���������Ȥ�FTP��³�����FTP���եȤ����ꤹ�����ơ�FTP�����С�̾�ʤɡˤˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">FTP���եȤ�����</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">FTP���եȤ�����ˤĤ���</a>
						<ul>
							<li><a href="#link-a01">�ᥤ��FTP��������ȡʽ��FTP��������ȡˤ�����</a></li>
							<li><a href="#link-a02">����FTP��������Ȥ�����</a></li>
							<li><a href="#link-a03">�������³�Ǥ��ʤ����</a></li>
						</ul>
					</li>
					<li><a href="#link-b">���ס����åץ�����ˤĤ���</a>
						<ul>
							<li><a href="#link-b01">�����͡����åץ��ɤ����ե������֥饦���ǳ�ǧ����ݤ�URL</a></li>
							<li><a href="#link-b02">�ǥե���ȥɥ�����ȤˤĤ���</a></li>
						</ul>
					</li>
					<li><a href="#link-c">�ե������ե����������Ǥ��ʤ��ʤä����</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                </ul>

                <div class="manual-youtube-box">
                    <p>ư��Ǥ⳵�פˤĤ����������Ƥ���ޤ��Τǡ�������Ǥ⤴��ǧ���������ޤ���</p>
                    <div class="manual-youtube">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/B0v4qYVKHYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FTP���եȤ�����ˤĤ���</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">�ᥤ��FTP��������ȡʽ��FTP��������ȡˤ�����</h5>
                            <div class="block_body">
                                <p>�ᥤ��FTP��������ȡʽ��FTP��������ȡˤϡ������С�������򤷤����ɥᥤ�����³����ǽ�Ǥ���</p>
                                <table class="table table_use-caption">
                                    <caption>�ᥤ��FTP��������ȡʽ��FTP��������ȡˤ�����</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w30per">FTP�ۥ���̾<br>��FTP�����С�̾��</th>
                                            <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�ۥ���̾�����Ϥ��Ƥ���������<br>�������С��ѥͥ� �� ����FTP������������� �� <a href="man_ftp_info_check.php">FTP���ե�����</a> ������ǧ����ǽ�Ǥ���<br>
                                            	��� sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>FTP�桼����̾<br>��FTP���������̾��</th>
                                            <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�桼����̾�����Ϥ��Ƥ���������<br>�������С��ѥͥ� �� ����FTP������������� �� <a href="man_ftp_info_check.php">FTP���ե�����</a> ������ǧ����ǽ�Ǥ���<br>
                                            	��� xsample</td>
                                        </tr>
                                        <tr>
                                            <th>FTP�ѥ����</th>
                                            <td>�����С�������������괰λ�᡼�뵭�ܤ�FTP�ѥ���ɤ����Ϥ��Ƥ���������<br><em class="font-bold red">�����С��ѥ���ɤȶ���</em>�Τ��ᡢ��˺��ξ���<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">�����С��ѥ���ɺ�����ե�����</a> �������ꤷ�Ƥ���������<br><em class="font-bold">��XServer��������ȤΥѥ���ɤȤϰۤʤ�ޤ�������դ���������</em></td>
                                        </tr>
                                        <tr>
                                            <th>�ۥ��Ƚ���ե����</th>
                                            <td>����ˤ��Ƥ���������</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">����FTP��������Ȥ�����</h5>
                            <div class="block_body">
                                <p>�����С��ѥͥ��<a href="man_ftp_add.php">����FTP��������Ȥ��ɲ�</a>�פǤ����ͤˤ��ɲú�����������FTP��������ȤǤ�������ˡ�Ǥ���</p>
                                
                                <table class="table table_use-caption">
                                    <caption>����FTP��������Ȥ�����</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w30per">FTP�ۥ���̾<br>��FTP�����С�̾��</th>
                                            <td>�֥����С��ѥͥ����֥���FTP�������������פΡ�FTP���ե�����פ˵��ܤ���Ƥ����FTP�����С�(�ۥ���)̾�פ����Ϥ��Ƥ���������<br>
                                            	��� sv***.xserver.jp</td>
                                        </tr>
                                        <tr>
                                            <th>FTP�桼����̾<br>��FTP���������̾��</th>
                                            <td>�֥����С��ѥͥ����֥���FTP�������������פ��ɲä�����FTP���������̾���ɲ�̾���ɥᥤ��̾�ˤ����Ϥ��Ƥ���������<br>
                                            ��� test@example.com</td>
                                        </tr>
                                        <tr>
                                            <th>FTP�ѥ����</th>
                                            <td>����FTP��������Ȥ��ɲû��ˤ����ͤˤƷ�᤿�ѥ���ɤ����Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�ۥ��Ƚ���ե����</th>
                                            <td>����ˤ��Ƥ���������</td>
                                        </tr>
                                    </tbody>
                                </table>

								<h5 class="block_ttl mt50" id="link-a03">�������³�Ǥ��ʤ����</h5>
								<div class="block_body">
									<p>
										�����Υ��եȥ�������Ķ��ˤ����ơ��������³�Ǥ��ʤ���礬����ޤ������κݤϡ����եȥ�����������ˤ� PASV(�ѥå���)�⡼�� �Ǥ���³��ԤäƤ���������
									</p>
								</div>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b"><a id="upload" name="upload"></a>���ס����åץ�����ˤĤ���</h4>
                    <div class="section_body">
                        <p>�������ӥ��Υ����С��Ǥϡ��ۡ���ڡ����Υǡ������../�ɥᥤ��̾/public_html/�װʲ��إ��åץ��ɤ��Ƥ�������ɬ�פ�����ޤ���</p>
                        <p>�ᥤ��FTP��������ȡʽ��FTP��������ȡˤ���³�򤹤�ȡ��֥ɥᥤ��̾�ץե������ɽ������ޤ��Τǡ� ������Ρ�public_html�ץե�����إ��åץ��ɤ�ԤäƤ���������</p>

						<aside class="msg msg_caution">
							<h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
							<div class="msg_body">
								<p>�����С���ˤϡ�public_html�פ��mail�פʤ�ʣ���Υե���������餫�����������Ƥ��ޤ��������Ͻ��פʥե�����Ǥ��Τǡ�̾���ѹ������ϹԤ�ʤ��Ǥ���������</p>
							</div>
						</aside>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">�����͡����åץ��ɤ����ե������֥饦���ǳ�ǧ����ݤ�URL</h5>
                            <div class="block_body">
                                <table class="table break-word">
                                    <thead>
                                        <tr>
                                            <th>���åץ��ɤ����ե�����ΰ���</th>
                                            <th>URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>/example.com/public_html/index.html</th>
                                            <td>http://example.com/����1</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/test.html</th>
                                            <td>http://example.com/test.html</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/xserver/index.html</th>
                                            <td>http://example.com/xserver/����1</td>
                                        </tr>
                                        <tr>
                                            <th>/example.com/public_html/xserver/index.html</th>
                                            <td>http://xserver.example.com/����2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="note note_x2">��1 �ե�����̾��index.html�פʤɤΥǥե���ȥɥ�����Ȥϡ�URL�����ά���Ƥ⥢����������ǽ�Ǥ���</p>
                                <p class="note note_x2">��2 ��http://xserver.example.com/�פ�URL�ǥ�����������ˤϡ������ˡ�<a href="man_domain_subdomain_setting.php">���֥ɥᥤ������</a>�פ�ɬ�פǤ���</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">�ǥե���ȥɥ�����ȤˤĤ���</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>index.html</li>
                                    <li>index.htm</li>
                                    <li>index.shtml</li>
                                    <li>index.cgi</li>
                                    <li>index.php</li>
                                    <li>default_page.html</li>
                                </ol>
                                <p>�嵭�ϥ֥饦���Ǥ�ɽ����ͥ���٤��⤤����¤�Ǥ��ޤ���<br>
                                ���ˡ�index.htm�פ򥢥åץ��ɤ�����硢��http://example.com/�פǥ�����������ȡ���index.html�פ�ͥ��Ū��ɽ������Ƥ��ޤ��ޤ���<br>
                                ���κݤϡ�index.html�פ������뤳�Ȥǡ�index.htm�פ�ɽ�������褦�ˤʤ�ޤ���</p>

                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">�ե������ե����������Ǥ��ʤ��ʤä����</h4>
                    <div class="section_body">
                        <p>�ե������ե������̾�������ܸ�ʤɤ�����ʸ����Ȥ��ȡ�������Ǥ��ʤ��ʤ뤳�Ȥ�����ޤ���<br>
                            <a href="../manual/man_ftp_filezilla_setting.php">FileZilla</a>�Υ��եȤ����Ѥ�����Ǻ���Ǥ����礬�������ޤ��Τǡ�FileZilla�����Ѥ��Ƴ����ե�����κ���򤪻����������</p>
                            <p>FileZilla�����Ѥ��Ƥ����Ǥ��ʤ����ϡ�<a href="../support/#to-supportform">�᡼�륵�ݡ���</a>�ޤǤ��䤤��碌����������</p>
                            <p class="note">���᡼�륵�ݡ��ȤؤΤ�Ϣ��κݤϡ�����Ǥ��ʤ��ե�����̾���ե����̾�ȳ����ե����롦�ե���������֤���Ƥ���ѥ��ʳ��ءˤ��Τ餻����������</p>
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