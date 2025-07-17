<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServer�ӥ��ͥ��ؤ��ѹ� �����Ѽ�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С�����XServer�ӥ��ͥ��ؤΥ����ӥ��ѹ������Ѽ��˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">XServer�ӥ��ͥ��ؤ��ѹ� �����Ѽ��</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XServer�ӥ��ͥ��ؤ��ѹ��򳫻�</a></li>
                    <li><a href="#link-b">�ץ�������</a></li>
                    <li><a href="#link-c">�ǡ������ԡ�����</a>
                        <ol>
                            <li><a href="#link-c01">1.�ܹԸ�Υ����С�ID�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�����</a></li>
                            <li><a href="#link-c02">2.�������Ƥ��ǧ����</a></li>
                            <li><a href="#link-c03">3.������λ</a></li>
                            <li><a href="#link-c04">4.�ǡ������ԡ���λ</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">ư���ǧ</a>
                        <ul>
                            <li><a href="#link-d01">�ܹԸ������С����ܹ��襵���С��ؤ����</a>
								<ol>
									<li><a href="#link-d01-1">�֥ե�����ޥ͡�����ס�phpMyAdmin�פ����Ѥ���</a></li>
								</ol>
							</li>
							<li><a href="#link-d02">�ǡ������ԡ��¹ԥ�����</a>
								<ol>
									<li><a href="#link-d02-1">1.�֥ǡ������ԡ��¹ԥ������ץܥ���򥯥�å�����</a></li>
									<li><a href="#link-d02-2">2.��������������</a></li>
								</ol>
							</li>
							<li><a href="#link-d03">�ܹԴ��¤��Ĺ����</a>
								<ol>
									<li><a href="#link-d03-1">1.�ִ��¤��Ĺ�ץܥ���򥯥�å�����</a></li>
									<li><a href="#link-d03-2">2.���Ƥ��ǧ����</a></li>
									<li><a href="#link-d03-3">3.��λ</a></li>
								</ol>
							</li>
                            <li><a href="#link-d04">�����С��ܹԤ򥭥�󥻥뤹��</a>
								<ol>
									<li><a href="#link-d04-1">1.�ְܹԥ���󥻥�פ򥯥�å�����</a></li>
									<li><a href="#link-d04-2">2.���Ƥ��ǧ����</a></li>
									<li><a href="#link-d04-3">3.�ܹԥ���󥻥봰λ</a></li>
								</ol>
							</li>
						</ul>
                    </li>
                    <li><a href="#link-e">�����С��ڤ��ؤ�</a>
                        <ol>
                            <li><a href="#link-e01">1.�֥����С��ڤ��ؤ��ץܥ���򥯥�å�����</a></li>
                            <li><a href="#link-e02">2.����������Τ���ʧ��</a></li>
                            <li><a href="#link-e03">3.�����С��ڤ��ؤ���λ</a></li>
                        </ol>
					</li>
					</ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <p>XServer�ӥ��ͥ��ؤ��ѹ��˴ؤ��복�פϡ��ޥ˥奢���<a href="man_order_servicetransfer_intro.php">XServer�ӥ��ͥ��ؤ��ѹ�</a>�פ򤴻��Ȥ���������</p>
                
                <section class="section">
                    <h4 id="link-a" class="section_ttl">XServer�ӥ��ͥ��ؤ��ѹ��򳫻�</h4>
                    <div class="section_body">
						<ol class="ol">
							<li>
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡������ӥ���˥塼�Ρ֥ץ�󡦥����ӥ��ѹ��פ򥯥�å����Ƥ���������</p>
								<p><img class="img" src="../img/manual/man_order_servicetransfer_flow_1.png?date=20230130" alt="�֥ץ�󡦥����ӥ��ѹ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
							</li>
							<li>
								<p>XServer�ӥ��ͥ��ؤ��ѹ����˾���륵���С��Ρ����򤹤�פ򥯥�å����Ƥ���������</p>
								<p><img class="img" src="../img/manual/man_order_servicetransfer_flow_2.png?date=20210611" alt="���򤹤�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
							</li>
						</ol>
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-b" class="section_ttl">�ץ�������</h4>
                    <div class="section_body">
                        <p>�ѹ���Υץ������򤷤Ƥ���������</p>
                        <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_3.png?date=20210611" alt="�ץ������򤷤Ƥ��륹���꡼�󥷥�å�"></p>


                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 id="link-c" class="section_ttl">�ǡ������ԡ�����</h4>
                    <div class="section_body">
                        <p>XServer�ӥ��ͥ��ؤΰܹԤ��˾���륵���С���������Ȥ��Ф��ơ��֥ǡ������ԡ������פ�ԤäƤ���������</p>

                        <div class="serial-box">
                            <section class="box">
                                <h5 id="link-c01" class="box_ttl">1.�ܹԸ�Υ����С�ID�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�����</h5>
                                <div class="box_body">
                                    <p>�ܹԸ�Υ����С�ID�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_4.png?date=20201022" alt="�ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c02" class="box_ttl">2.�������Ƥ��ǧ����</h5>
                                <div class="box_body">
                                    <p>�������Ƥγ�ǧ���̤�ɽ������ޤ������Ƥ��ǧ�����֥ǡ������ԡ������ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_5.png?date=20220216" alt="�֥ǡ������ԡ������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c03" class="box_ttl">3.������λ</h5>
                                <div class="box_body">
                                    <p>�֥ǡ������ԡ�������������ޤ������פ�ɽ�������п�����λ�Ǥ���<br>
                                    �������Ƥϥ᡼��Ǥ⤪�Τ餻�������ޤ���ʻ���Ƥ���ǧ����������</p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c04" class="box_ttl">4.�ǡ������ԡ���λ</h5>
                                <div class="box_body">
                                    <p>�ǡ������ԡ��Ͽ������ո塢���֤��б����ޤ���<br>
                                    �ǡ������ԡ�����λ���ޤ�����᡼��ˤƤ��Τ餻���ޤ��Τǡ����Ф餯���Ԥ�����������</p>
                                    <p class="note">������������ǡ��������̤ˤ�äƤϡ��ǡ������ԡ���λ�ޤǤ˿��������٤������礬����ޤ���</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <!-- /.section -->                
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">ư���ǧ</h4>
                    <div class="section_body">
                        <p>�ǡ������ԡ���λ�����Ǥϰ���³���ܹԸ������С��򻲾Ȥ��Ƥ��ޤ�����hosts�ե���������Ѥ����������Ȥǡ��ܹ��襵���С���ư���ǧ����ǽ�Ǥ���</p>
                        <p>hosts�ե���������ѤΤ������ܹ��襵���С���Web�����Ȥ�����ʤ�ɽ������뤫�ɤ����ʤɡ�ư���ǧ��ԤäƤ���������<br>
                        ���ܺ٤�<a href="man_domain_checkproxy.php#link-b">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>�򤴻��Ȥ���������</p>

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d01">�ܹԸ������С����ܹ��襵���С��ؤ����</h5>
                            <div class="block_body">
                                <p>�ְܹԸ������С��סְܹ��襵���С��פ��줾��Υ����С�����γ�ǧ�䡢�֥ե�����ޥ͡�����ס�phpMyAdmin�פ����Ѥ���ǽ�Ǥ���</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d01-1">�֥ե�����ޥ͡�����ס�phpMyAdmin�פ����Ѥ���</h6>
                                        <div class="box_body">
                                            <p>�оݥ����С���������ȤΡְܹ����Ƥγ�ǧ�פˡ��ְܹԸ��סְܹ���פ��줾��Υ����С�����ɽ������ޤ���<br>
                                            �֥ե�����ޥ͡�����ס�phpMyAdmin�פγƥġ�������Ѥ�����ϡ��ܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_6.png?date=202106112" alt="�����С�����ɽ��"></p>
                                            <p>�ƥġ���������ʤɤξܺ٤ϡ��ޥ˥奢���<a href="man_tool_file.php">�ե�����ޥ͡�����</a>�ס�<a href="man_db_myadmin.php">phpMyAdmin</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d02">�ǡ������ԡ��¹ԥ�����</h5>
                            <div class="block_body">
                                <p>�ǡ������ԡ���Ȥμ¹ԥ���������뤳�Ȥ���ǽ�Ǥ���</p>

                                <div class="serial-box">
                                    <section class="box">
                                        <h6 id="link-d02-1" class="box_ttl">1.�֥ǡ������ԡ��¹ԥ������ץܥ���򥯥�å�����</h6>
                                        <div class="box_body">
                                            <p>�оݥ����С���������Ȥˤ���֥ǡ������ԡ��¹ԥ������ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_7.png?date=20250314" alt="�֥ǡ������ԡ��¹ԥ������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 id="link-d02-2" class="box_ttl">2.��������������</h6>
                                        <div class="box_body">
                                            <p>�֥ե����륳�ԡ����Υ��顼���ס֥ե������������פ�ɽ������ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_8.png?date=20250314" alt="�Ƽ������ɽ��"></p>
                                            <p>�ƥ��ξܺ٤ϡ��ޥ˥奢���<a href="man_order_servicetransfer_detail.php">XServer�ӥ��ͥ��ؤ��ѹ� ���;ܺ�</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-d03" class="block_ttl">�ܹԴ��¤��Ĺ����</h5>
                            <div class="block_body">
                                <p>�ܹԴ��¤ϸ�§���ǡ������ԡ���λ����1���֤Ȥ��Ƥ��ޤ������ʲ����ǡ��ܹԴ��¤��Ĺ���뤳�Ȥ��Ǥ��ޤ���</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-1">1.�ִ��¤��Ĺ�ץܥ���򥯥�å�����</h6>
                                        <div class="box_body">
                                            <p>�ְܹԴ��¡פˤ���ִ��¤��Ĺ�ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_9.png?date=20250314" alt="�ִ��¤��Ĺ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-2">2.���Ƥ��ǧ����</h6>
                                        <div class="box_body">
                                            <p>��ǧ���̤�ɽ������ޤ������Ƥ��ǧ�Τ������ְܹԴ��¤��Ĺ����ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_10.png?date=20250314" alt="�ְܹԴ��¤��Ĺ����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-3">3.��λ</h6>
                                        <div class="box_body">
                                            <p>�ְܹԴ��¤α�Ĺ��λ���ޤ������פ�ɽ�������д�λ�Ǥ���<br>
                                            �ְܹԴ��¤��Ĺ�פ�¹Ԥ���������1���ָ�ޤǴ��¤���Ĺ����ޤ���</p>
                                        </div>
                                    </section>
                                </div>

                                <aside class="msg msg_notice mb10 mt30">
                                    <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>������ư���ǧ����ӡ֥����С��ڤ��ؤ��פ򤪴��ᤷ�ޤ�</h5>
                                    <div class="msg_body">
                                        <p>
                                            �ǡ������ԡ��δ�λ������֤��в᤹��ˤ������äơ��ܹԸ����ܹ��襵���С������Ƥ˺��ۤ��������ǽ�����⤯�ʤ�ޤ���<br>
                                            �ܹԴ��¤ˤ�����餺���ʤ�٤��᤯ư���ǧ����ӡ֥����С��ڤ��ؤ��פ�Ԥ����Ȥ򤪴��ᤷ�ޤ���
                                        </p>
                                    </div>
                                </aside>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-d04" class="block_ttl">�����С��ܹԤ򥭥�󥻥뤹��</h5>
                            <div class="block_body">
                                <p>�����С��Ķ��ܹԤ򥭥�󥻥뤹�뤳�Ȥ��Ǥ��ޤ���<br>
                                ����󥻥뤹��ȡ�XServer�ӥ��ͥ��ؤΰܹԤ���ߤ��졢�ܹ��襵���С��Υǡ������������ޤ���</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-1">1.�ְܹԥ���󥻥�פ򥯥�å�����</h6>
                                        <div class="box_body">
                                            <p>�ְܹԥ���󥻥�ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_11.png?date=20250314" alt="�ְܹԥ���󥻥�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-2">2.���Ƥ��ǧ����</h6>
                                        <div class="box_body">
                                            <p>��ǧ���̤�ɽ������ޤ������Ƥ��ǧ�Τ������ְܹԤ򥭥�󥻥뤹��ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_12.png?date=20250314" alt="�ְܹԤ򥭥�󥻥뤹��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-3">3.�ܹԥ���󥻥봰λ</h6>
                                        <div class="box_body">
                                            <p>�ְܹԤΥ���󥻥뤬��λ���ޤ������פ�ɽ�������ȡ��ܹԥ���󥻥�ϴ�λ�Ǥ���</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">�����С��ڤ��ؤ�</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <div class="block_body">
                                <p>�ܹ��襵���С�¦��Web�ڡ�����ɽ��������ʤ����Ȥ��ǧ�����Τ����֥����С��ڤ��ؤ��ץܥ���򥯥�å����ޤ�������������Τ���ʧ������λ�����ڤ��ؤ���λ���̤�ɽ�������Х����С��ܹԺ�Ȥϴ�λ�Ǥ���</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h5 id="link-e01" class="box_ttl">1.�֥����С��ڤ��ؤ��ץܥ���򥯥�å�����</h5>
                                        <div class="box_body">
                                            <p>�֥����С��ڤ��ؤ��ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_13.png?date=20250314" alt="�֥����С��ڤ��ؤ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 id="link-e02" class="box_ttl">2.����������Τ���ʧ��</h5>
                                        <div class="box_body">
                                            <p>�ѹ����Ƥ򤴳�ǧ�Τ���������Τ���ʧ����³����ʤ�Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_14.png?date=20250314" alt="�֥����С��ڤ��ؤ��򤹤�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h5 id="link-e03" class="box_ttl">3.�����С��ڤ��ؤ���λ</h5>
                                        <div class="box_body">
                                            <p>�֥����С��ڤ��ؤ�����λ���ޤ������פ�ɽ�������Х����С��ڤ��ؤ��ϴ�λ�Ǥ���<br>
                                            Web�����Ȥλ����衢�᡼��������褬�ܹ��襵���С��Ȥʤ�ޤ���</p>
                                            <p>�ʤ��������С��ڤ��ؤ�����λ�����ݡ��᡼��Ǥ⤪�Τ餻�������ޤ���ʻ���Ƥ���ǧ����������</p>
                                        </div>
                                    </section>                      
                                </div>
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