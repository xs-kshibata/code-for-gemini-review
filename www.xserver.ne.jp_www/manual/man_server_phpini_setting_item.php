<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>php.ini����������ǽ�ʹ��ܤˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ�Ρ�php.ini����׵�ǽ�Ǵ�ñ���ѹ��Ǥ�����ܤΰ����Ǥ�����php.ini�פ�ľ���Խ����뤳�Ȥ��ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">php.ini����������ǽ�ʹ��ܤˤĤ���</h3>

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">php.ini����������ǽ�ʹ���</a>
                            <ul>
                                <li><a href="#link-a01">���顼����</a></li>
                                <li><a href="#link-a02">���å��������</a></li>
                                <li><a href="#link-a03">ʸ������������</a></li>
                                <li><a href="#link-a04">����¾������</a></li>
                            </ul>
                        </li>
                        <li><a href="#link-b">php.ini�μ��פʹ��ܤν����</a>
                            <ul>
                                <li><a href="#link-b01">���顼����</a></li>
                                <li><a href="#link-b02">ʸ������������</a></li>
                                <li><a href="#link-b03">����¾������</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">php.ini����������ǽ�ʹ���</h4>
                    <div class="section_body">
                        <p>��php.ini����פˤ����ơ�������ѹ�����ǽ�ʹ��ܤϲ������̤�Ǥ���<br>
                        ��ľ���Խ�������Ϥ��θ¤�ǤϤ���ޤ��󡣡�</p>
                        
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��X��������졼�� Ver.2�פ�������ξ��</h6>
                            <div class="msg_body">
                                <p>
                                    ��X��������졼�� Ver.2�����ѻ���php.ini����ΰ������ܤ�̵���Ȥʤ�ޤ���<br>
                                    �ܺ٤ϰʲ��Υޥ˥奢��򤴳�ǧ����������
                                </p>
                                <ul class="list list_arrow-right">
                                    <li><a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></li>
                                </ul>
                            </div>
                        </aside>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">���顼����</h5>
                            <div class="block_body">
                            
                                <table class="table break-word"> 
                                    <tbody>
                                        <tr>             
                                            <th>display_startup_errors</th>
                                            <td><p>PHP �ε�ư�������󥹤�ȯ�����륨�顼��ɽ�����뤫�ɤ��������ꤷ�ޤ���</p></td>
                                        </tr>
                                        <tr>
                                            <th>display_errors</th>
                                            <td>
                                                <p>PHP�ץ����¹Ի��Υ��顼���Ƥ���̤˽��Ϥ��뤫�ɤ��������ꤷ�ޤ���</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>On����</dt>
                                                    <dd>�֥饦����˥��顼��ɽ�����뤳�Ȥ��Ǥ��ޤ���<br>
                                                    PHP�ץ��������֤䥨�顼�γ�ǧ���ˤ����Ѥ���������</dd>
                                                    <dt><i class="ico ico_square-fill"></i>Off����</dt>
                                                    <dd>�֥饦����˥��顼��ɽ������ʤ��ʤ�ޤ���<br>
                                                    PHP�ץ��������ָ塢�������Off���ѹ����뤳�Ȥ򤪴��ᤷ�ޤ���</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>error_reporting</th>
                                            <td>
                                                <p>PHP�ץ����¹Ի��Υ��顼���ϥ�٥�����ꤷ�ޤ���</p>
                                                <p>[�����ǽ����]</p>
                                                <ul class="ul">
                                                    <li>E_ERROR �� ����ʼ¹Ի����顼��ɽ�����롣</li>
                                                    <li>E_WARNING �� �¹Ի��ηٹ��å�������ɽ�����롣</li>
                                                    <li>E_PARSE �� ����ѥ���κݤΥѡ������顼��ɽ�����롣</li>
                
                                                    <li>E_NOTICE �� �¹Ի��Ρ���̿Ū�ǤϤʤ��˷ٹ��å�������ɽ�����롣</li>
                                                    <li>E_CORE_ERROR �� PHP�ε�ư�������󥹤Ǥ���̿Ū�ʥ��顼��ɽ�����롣</li>
                                                    <li>E_CORE_WARNING �� ����̿Ū�ǤϤʤ��˷ٹ��ɽ�����롣</li>
                                                    <li>E_COMPILE_ERROR �� ����ѥ��������̿Ū�ʥ��顼��ɽ�����롣</li>
                                                    <li>E_COMPILE_WARNING �� ����ѥ�����ηٹ����̿Ū�ǤϤʤ��ˤ�ɽ�����롣</li>
                                                    <li>E_USER_ERROR �� �桼�����ˤ�ä�ȯ�Ԥ���륨�顼��å�������ɽ�����롣</li>
                
                                                    <li>E_USER_WARNING �� �桼�����ˤ�ä�ȯ�Ԥ����ٹ��å�������ɽ�����롣</li>
                                                    <li>E_USER_NOTICE �� �桼�����ˤ�ä�ȯ�Ԥ������ե�å�������ɽ�����롣</li>
                                                    <li>E_ALL �� �嵭���ƤΥ�å�������ɽ�����롣</li>
                                                    <li>E_STRICT �� �¹Ի�����դ�ɽ�����롣</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">���å��������</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr>
                                            <th>session.use_cookies</th>
                                            <td>���饤�����¦�ؤΥ��å����ID����¸�ˡ����å�������Ѥ��뤫�ɤ�������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>session.use_only_cookies</th>
                                            <td>���饤�����¦�ؤΥ��å����ID����¸�ˡ����å����Τߤ���Ѳ�ǽ�Ȥ�������Ԥ��ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>session.name</th>
                                            <td>���å��������ꤵ��륻�å����̾����ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>session.auto_start</th>
                                            <td>�ꥯ�����ȳ��ϻ��˥��å�����ưŪ�˳��Ϥ��뤫�ɤ�������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>session.cookie_lifetime</th>
                                            <td>���å�����ͭ�����֤����ñ�̤ǡ˻��ꤷ�ޤ���<br>0�����ꤹ��ȥ֥饦���򥯥�������ޤǥ��å����ͭ���Ȥʤ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>session.cookie_path</th>
                                            <td>���å�����ͭ���Ȥ���ѥ�����ꤷ�ޤ���<br>�����ǻ��ꤷ���ѥ��ʲ��ؤΥ��������Τߥ��å�����ͭ���Ȥʤ�ޤ���</td>
                                        </tr>           
                                        <tr>
                                            <th>session.use_trans_sid</th>
                                            <td>URL�ؤΥ��å����ID�������ư�ǹԤ��������ꤷ�ޤ���</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">ʸ������������</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr> 
                                            <th>mbstring.language</th>
                                            <td>�ǥե���Ȥθ�������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.internal_encoding</th>
                                            <td>����ʸ�����󥳡��ǥ��󥰤����ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.http_input</th>
                                            <td>HTTP����ʸ�����󥳡��ǥ����Ѵ������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.http_output</th>
                                            <td>HTTP����ʸ�����󥳡��ǥ����Ѵ������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.encoding_translation</th>
                                            <td>����ʸ�����󥳡��ǥ��󥰤ؤ��Ѵ���ͭ���ˤ��뤫�ɤ��������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.detect_order</th>
                                            <td>ʸ�������ɸ��Ф����ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>mbstring.substitute_character</th>
                                            <td>̵����ʸ�������ؤ���ʸ�������ꤷ�ޤ���</td>
                                        </tr>           
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">����¾������</h5>
                            <div class="block_body">
                            
                                <table class="table break-word">
                                    <tbody>
                                        <tr>
                                            <th class="w30per-s">safe_mode</th>
                                            <td>�ץ����ե�����ν�ͭ�Ԥ����ץ������δؿ��ˤ�äƽ�������Ƥ���ե�����ڤӥǥ��쥯�ȥ�ν�ͭ�Ԥ�Ʊ�줫�γ�ǧ��Ԥ�����򤷤ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>max_execution_time</th>
                                            <td>̵�¥롼�פʤɤˤ���³Ū�˼¹Ԥ���Ƥ��륹����ץȤ���������λ�����ޤǤλ��֤���ñ�̤ǻ��ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>max_input_time</th>
                                            <td>������ץȤ� POST��GET�������ƥե����륢�åץ��ɤʤɤ����Ϥ�ѡ����������λ��֤���ñ�̤ǻ��ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>memory_limit</th>
                                            <td>�ץ���ब���ѤǤ��������������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>post_max_size</th>
                                            <td>POST�ǡ����ε��ƺ��祵���������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>upload_max_filesize</th>
                                            <td>���åץ��ɥե�����ε��ƥ����������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>register_globals</th>
                                            <td>�Ķ��ѿ���GET�͡�POST�ͤʤɤΡ�PHP�γ������餯���ͤ����� $�ѿ�̾ �Ȥ����񼰤ǻ��Ѳ�ǽ�Ȥ��������Ԥ��ޤ���<br>
                                            ���ε�ǽ�� PHP 5.3.0 �� ��侩�Ȥʤ�ޤ�����<br>
                                            ���ε�ǽ��Off�ˤ��뤳�Ȥ��侩����Ƥ��ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>magic_quotes_gpc</th>
                                            <td>PHP�Υե�������ʸ����ǡ������������ݡ����������׽���(��'�פ��"�פ��<span class="font-en">\</span>�פ����ˡ�<span class="font-en">\</span>�פ��ɲ�)��ư�ǹԤ����ɤ��������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>allow_url_fopen</th>
                                            <td>URL���֥������Ȥ��Ф��ƥե�����Ʊ�ͤ������ǽ�Ȥ�������򤷤ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>file_uploads</th>
                                            <td>HTTP �ե����륢�åץ��ɤ��ǽ�Ȥ��뤫�ɤ��������ꤷ�ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>allow_url_include</th>
                                            <td>include�ؿ���include_once�ؿ��� require�ؿ���require_once�ؿ��ǡ�URL�б���fopen��åѡ������ѤǤ���褦�ˤʤ�ޤ���
                                            <p class="note mb0">��PHP5.2�ʹߤǤ����Ѥ��������ޤ���</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">php.ini�μ��פʹ��ܤν����</h4>
                    <div class="section_body">
                       
						<div class="msg">
							<h5 class="msg_ttl"><i class="ico ico_circle"></i>php.ini�ˤ��������ͤˤĤ���</h5>
							<div class="msg_body">
								<p>2017ǯ3���ꡢ(��)�ι��ܤˤ��������ͤ��ѹ��������ޤ�����<br/> �ʲ������������ܹ��ܤǰ��⤹�����ͤ����ꤵ��ޤ���
								</p>

								<p>��php.ini����<br/> ��php.ini����������
								</p>
								<p>���ɥᥤ������<br/> �֥ɥᥤ��������ɲáס֥ɥᥤ������ν�����ס֥������ΰ衦����ν������ </p>
							</div>
						</div>
						
						<section class="block">
							<h5 class="block_ttl" id="link-b01">���顼����</h5>
							<div class="block_body">

								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">����</th>
                                                <th>�����</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>display_startup_errors</th>
											<td>OFF</td>
										</tr>
										<tr>
											<th>display_errors </th>
											<td>ON</td>
										</tr>
										<tr>
											<th>error_reporting��</th>
											<td>E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
                       
						<section class="block">
							<h5 class="block_ttl" id="link-b02">ʸ������������</h5>
							<div class="block_body">
								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">����</th>
                                                <th>�����</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>default_charset�� </th>
											<td>UTF-8</td>
										</tr>
										<tr>
											<th>mbstring.language</th>
											<td>Japanese</td>
										</tr>
										<tr>
											<th>mbstring.internal_encoding��</th>
											<td>UTF-8</td>
										</tr>
										<tr>
											<th>mbstring.http_input��</th>
											<td>pass</td>
										</tr>
										<tr>
											<th>mbstring.http_output��</th>
											<td>pass</td>
										</tr>
										<tr>
											<th>mbstring.encoding_translation</th>
											<td>OFF</td>
										</tr>
										<tr>
											<th>mbstring.detect_order</th>
											<td>auto</td>
										</tr>
										<tr>
											<th>mbstring.substitute_character</th>
											<td>none</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
                        
						<section class="block">
							<h5 class="block_ttl" id="link-b03">����¾������</h5>
							<div class="block_body">
								<table class="table table_td-center break-word">
                                    <thead>
                                            <tr>
                                                <th class="w50per-l">����</th>
                                                <th>�����</th>
                                            </tr>
                                    </thead>
									<tbody>
										<tr>
											<th>default_mimetype</th>
											<td>"text/html"</td>
										</tr>
										<tr>
											<th>date.timezone</th>
											<td>"Asia/Tokyo"</td>
										</tr>
									</tbody>
								</table>
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