<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���ץ�����ȼ�SSL�Τ��������߼�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פǥ��ץ�����ȼ�SSL�����Ѥ�����������μ��Τ�����Ǥ������å��������С��Ǥ�ͭ���Ρ֥��ץ�����ȼ�SSL�פΤۤ���̵����̵���¤����Ѳ�ǽ�ʡ�̵���ȼ�SSL�פ��갷�äƤ��ޤ���">


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
            
                <h3 class="sub-ttl">���ץ�����ȼ�SSL�Τ���������</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�ȼ�SSL�Ȥ�</a></li>
                    <li><a href="#link-b">�����������������߼��</a>
                        <ol>
                            <li><a href="#link-b00">���ץ�����ȼ�SSL���������ߤ�����</a></li>
                            <li><a href="#link-b01">1.��SSL������פΡ�+�ɲÿ������ߡפ򥯥�å�</a></li>
                            <li><a href="#link-b02">2.���������ߤ����������Ƥ����Ϥ��Ƥ���������</a></li>
                            <li><a href="#link-b03">3.����Τ���ʧ����³����ԤäƤ���������</a></li>
                            <li><a href="#link-b04">4.������μ���������Ԥ��ޤ���</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">�������������߼��</a>
                        <ol>
                            <li><a href="#link-c01">1.�������ʧ���פؤ��ʤߤ���������</a></li>
                            <li><a href="#link-c02">2.��������SSL�����򤷡�����Τ���ʧ����³���ؤȤ��ʤߤ���������</a></li>
                            <li><a href="#link-c03">3.����ʧ����ˡ�����򤷤Ƥ���������</a></li>
                            <li><a href="#link-c04">4.������ι���������Ԥ��ޤ���</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">��2Way���ѡפˤĤ���</a></li>
                     <li><a href="#link-e">�֥��饦�ɥ����奢�Υ������ƥ����ǥ����ӥ��פˤĤ���</a></li>
                    <li><a href="#link-f">��ʣ��ǯ����פˤĤ���</a></li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">��������˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο�����������ˡ�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ȼ�SSL�Ȥ�</h4>
                    <div class="section_body">
                        <p>SSL�Ȥϡ����󥿡��ͥåȾ�Ǥ���ꤵ�������Ź沽�����ꡢ��������Web�����Ȥΰ�������������륻�����ƥ���ǽ�Τ��ȤǤ���<br>
                        �ޤ����ȼ�SSL�Ȥϡ�¾�Υ桼�����ȶ������Ѥ��붦ͭSSL�Ȥϰۤʤꡢ�����ȤǤ��������ȼ��ɥᥤ��䥵�֥ɥᥤ����Ѥ��ưŹ沽�̿��ʤɤ�Ԥ���Τ򺹤��ޤ���</p>
                        
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">̵����̵���¤��ȼ�SSL�����Ѳ�ǽ�ʡ�̵���ȼ�SSL�פΤ�������ˡ�ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                                <ul class="list list_arrow-right mb0">
                                    <li>�ޥ˥奢���<a href="man_server_ssl.php">�����С��ˤĤ��� �� SSL����</a>��</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�����������������߼��</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b00">���ץ�����ȼ�SSL���������ߤ�����</h6>
                                <div class="box_body">
                                    <p>��SSLȯ�Ը���������뾵ǧ�᡼���������뤿��Υ᡼�륢�ɥ쥹��ɬ�פȤʤ�ޤ��������˥����С��ѥͥ�ǡ�admin���ɥᥤ��̾��(�㡧admin@example.com) ���Υ᡼�륢�ɥ쥹���ɲä��Ƥ����Ƥ���������</p>
                                    
                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>���͡�<a href="man_mail_add.php">�֥᡼�륢������Ȥ��ɲáץޥ˥奢��</a><i class="ico ico_chevron-right"></i></p>
                                    </div>
                                    
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.��SSL������פΡ�+�ɲÿ������ߡפ򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ��������Ρ�SSL������פ�ꡢ��<em class="font-bold">+�ɲÿ�������</em>�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_1.png?date=20220216" alt="SSL�������+�ɲÿ������ߤ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.���������ߤ����������Ƥ����Ϥ��Ƥ���������</h6>
                                <div class="box_body">
                                    <p>���ץ�����ȼ�SSL�Τ��������ߥե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_3.png?date=20250626" alt="SSL�֥��ɤο������ߤ򤷤ޤ�"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SSL�֥��ɤ�����</th>
                                                <td>���������ߤ�������SSL����������򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>������֤�����</th>
                                                <td>������֤����򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�ȼ�IP���ɥ쥹</th>
                                                <td>�ȼ�IP���ɥ쥹�����Ѥ򤴴�˾�ξ��ϡ����Ѥ���פ����򤷤Ƥ���������</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    
                                    <p>���Ƥ����Ϥ��������ޤ����顢�����ѵ���סָĿ;���μ�갷���ˤĤ��ơפ��ɤߤ���������Ʊ�դ������������ϡ֡����ѵ���סָĿ;���μ�갷���ˤĤ��ơפ�Ʊ�դ���פ˥����å������졢��<em class="font-bold">�������������Ƥγ�ǧ�Ȥ���ʧ���ؿʤ�</em>�פ򥯥�å����Ƥ��ʤߤ���������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.����Τ���ʧ����³����ԤäƤ���������</h6>
                                <div class="box_body">
                                    <p>����������Τ���ʧ����ˡ�򡢡֥��쥸�åȥ����ɡס֥���ӥ˥��󥹥��ȥ��סֶ�Կ����ס֥ڥ������ס֤���ʧ���ʥڥ��ǥ��ˡס֥ץ�ڥ��ɡפ��椫�餪���Ӥ�����������³���򤪿ʤ᤯��������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20201022" alt="����Τ���ʧ����ˡ������"></p>
                                    <p><em class="font-bold">���������˴ؤ��뤴����</em>�Υ᡼��򡢤���Ͽ�᡼�륢�ɥ쥹���ˤ������פ��ޤ��Τǡ�����ǧ����������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.������μ���������Ԥ��ޤ���</h6>
                                <div class="box_body">
                                    <p>
                                        �ʹߤκ�ȤϤ��������ߤ��Ƥ����������ȼ�SSL�ˤ�äưۤʤ�ޤ���<br>
                                        �ܺ٤ϲ����ڡ����򤴻��Ȥ���������
                                    </p>
                                    <div class="block_body">
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_domain.php#link-a">�ɥᥤ��ǧ��SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦��SSL</li>
                                                    <li>���饦�ɥ����奢 ���ԡ���ǧ��SSL</li>
                                                    <li>RapidSSL</li>
                                                    <li>�����ȥ饹�� �����å�SSL�ץ�ߥ���</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ov.php#link-a">���ǧ��SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦�ɥ����奢 ���ǧ��SSL</li>
                                                    <li>�ǥ������� �����奢��������ID</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ev.php#link-a">EV SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦�ɥ����奢 EV SSL</li>
                                                    <li>�ǥ������� �����奢��������ID EV</li>
                                                </ul>
                                            </dd>


                                        </dl>
                                    </div>
                                </div>
                            </section>
                            

                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="update_ssl" class="section">
                    <h4 class="section_ttl" id="link-c">�������������߼��</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.�������ʧ���פؤ��ʤߤ���������</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡�������˥塼�Ρ������ʧ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="�����ʧ���˿ʤߤޤ�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.��������SSL�����򤷡�����Τ���ʧ����³���ؤȤ��ʤߤ���������</h6>
                                <div class="box_body">
                                    <p>�ڡ��������ˤ���<em class="font-bold">��XServer SSL��</em>��ꡢ������Ԥ�SSL������˥����å������졢�ֻ�ʧ��ˡ�����򤹤�פ򥯥�å����Ƥ���������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_8.png?date=230331" alt="��ʧ����ˡ�����򤹤�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <aside class="msg msg_notice">
                                        <div class="msg_body">
                                            <p>�������ӥ��Ǥϡ�2015ǯ9��16����ꥪ�ץ�����ȼ�SSL�Υ����ӥ���ĥ�򤤤����ޤ�����<br>
                                            �ܺ٤ϡ�<a href="../price/price_ssl.php">���������� &gt; ���� &gt; ���ץ�����ȼ�SSL</a>�򤴻��Ȥ���������</p>
                                            <p>�ʤ������ߤ����Ѥ�SSL������ˤĤ��ơ������Τ���³�������ǰʲ����ѹ��򤴴�˾�ξ��ϡ��ܲ��̤���ι�����³����Ԥ鷺<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�⡢�ȥåץڡ��������Ρ�SSL������פΡ�+�ɲÿ������ߡפ�ꡢƱ��Υ����͡���Ǥ���³����ԤäƤ���������</p>
                                            <ul class="ul mb0">
                                                <li>SSL�֥��ɤ��ѹ�������</li>
                                                <li>SSL�֥��ɤ��ѹ��������ȼ�IP���ɥ쥹������̵ͭ�Τ��ѹ�������</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.����ʧ����ˡ�����򤷤Ƥ���������</h6>
                                <div class="box_body">
                                    <p>��������Τ���ʧ����ˡ�򡢡֥��쥸�åȥ����ɡס֥���ӥ˥��󥹥��ȥ��סֶ�Կ����ס֥ڥ������ס֤���ʧ���ʥڥ��ǥ��ˡס֥ץ�ڥ��ɡפ��椫�餪���Ӥ�����������³���򤪿ʤ᤯��������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20210122" alt="��������Τ���ʧ����ˡ������"></p>
                                    <p><em class="font-bold">������³���˴ؤ��뤴����</em>��᡼��ˤƤ������פ��ޤ��Τǡ�����ǧ����������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c04">4.������ι���������Ԥ��ޤ���</h6>
                                <div class="box_body">
                                    <p>�ʹߤκ�ȤϤ��������ߤ��Ƥ����������ȼ�SSL�ˤ�äưۤʤ�ޤ���<br>
                                        �ܺ٤ϲ����ڡ����򤴻��Ȥ���������</p>
                                    <div class="block_body">
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_domain.php#link-b">�ɥᥤ��ǧ��SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦��SSL</li>
                                                    <li>���饦�ɥ����奢 ���ԡ���ǧ��SSL</li>
                                                    <li>RapidSSL</li>
                                                    <li>�����ȥ饹�� �����å�SSL�ץ�ߥ���</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ov.php#link-b">���ǧ��SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦�ɥ����奢 ���ǧ��SSL</li>
                                                    <li>�ǥ������� �����奢��������ID</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ev.php#link-b">EV SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>���饦�ɥ����奢 EV SSL</li>
                                                    <li>�ǥ������� �����奢��������ID EV</li>
                                                </ul>
                                            </dd>


                                        </dl>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->

                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">��2Way���ѡפˤĤ���</h4>
                    <div class="section_body">
                        
                        <p>���ץ�����ȼ�SSL�ϡ�Subject Alternative Names(SANs)�ˤ�륳���͡���(CN)����̾��ǽ�����Ѥ�������www����/�ʤ��פ������URL�Ǥ�SSL�̿�����ǽ�ʡ�2Way���ѡפ��б����Ƥ��ޤ���</p>
                        <p>SSL������Υ����͡�����www.�ɥᥤ��̾�פȤ�����˸¤ꡢ�ɥᥤ��(FQDN)��URL�˲ä�����www�ʤ���URL�Ǥ��äƤ�SSL�̿����Ԥ��ޤ���</p>
                        
                        <table class="table primary-table-l mb5">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>www����(��:www.example.com)�Ǥ��������ߤξ��</th>
                                    <th>www�ʤ�(��:example.com)�Ǥ��������ߤξ��</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>https://www.example.com�Ǥ���³</th>
                                    <td class="tac">��</td>
                                    <td class="tac">��</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th>https://example.com�Ǥ���³</th>
                                    <td class="tac">��</td>
                                    <td class="tac">��</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="note">��������SSL������֥��ɤˤƤ����Ѳ�ǽ��Web�����Ⱦ�ؤΥ����ȥ������ɽ���ϡ������͡���˻��ꤷ���ɥᥤ��(FQDN)��URL�Τߤ˸¤�ޤ���</p>
                        <p class="note">��64ʸ���ʾ�Υ����͡���Ϥ��������ߤǤ��ޤ���</p>
                        
                        <p>�ޤ����������SSL������ˤ����Ƥ⡢ ����������ۤȤ�ɤη�������(�ե������㡼�ե���)��Web�֥饦���ε�С������ ���������Υ��ޡ��ȥե���ϡ�SANs�ˤ�륳���͡������̾��ǽ���б����Ƥ��ʤ����Ȥ��顢��2Way���ѡפˤ�륳���͡���Ȱۤʤ�URL�Ǥ�SSL�̿��ϹԤ��ޤ���</p>
                        <p>�ʾ��ü���ˤ�����SSL�̿���Ԥ����ϡ� SSL����������ꤵ�줿�֥����͡���פΤߤ�URL�ˤ��Ƥ����Ѥ���������</p>
                        <p>�ʤ�����ü����Web�֥饦���ˤ�����SSL������Ǥ�SANs��ǽ�ؤ��б������ˤĤ��Ƥϡ� �������ò�Ҥ�᡼�����ؤ��䤤��碌����������</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">�֥��饦�ɥ����奢�Υ������ƥ����ǥ����ӥ��פˤĤ���</h4>
						<div class="section_body">
							<p>���饦�ɥ����奢�֥��ɤ�SSL������򤪿������ߤ������������Τߤ������ѤǤ��륵���ӥ��ǡ�SSL������˻��Ѥ����ۥ���̾��¸�ߤ��뤪���ͤ�Web�����Ȥ�������ư��󡦿��Ǥ����ե��å���URL��ޥ륦�����ʤɤ���ǧ���줿�Ȥ��ϡ������˥᡼�����Τ�Ԥ��ޤ���</p>
							<p>���������ǧ����Web�����Ȥˤϡ��������դ����ܤ��������奢�������ȯ�Ԥ��������Ⱦ�˷Ǻܤ��뤳�Ȥǡ�ˬ��Ԥ˰���������θ�򥢥ԡ��뤹�뤳�Ȥ��Ǥ��ޤ���</p>
							<p>��ǽ�ξܺ٤ˤĤ��Ƥϡ������򤴻��Ȥ���������</p>

							<section class="block">
								<h5 class="block_ttl">������ˡ�����Ƿ�̤ˤĤ���</h5>
								<div class="block_body">
									<dl class="dl">
										<dt><i class="ico ico_square-fill"></i>������ˡ�ˤĤ���</dt>
										<dd>
											<ul class="ul">
												<li>
													<p>���ǳ���URL�ȸ��λ���������᡼�륢�ɥ쥹�ϲ������̤�Ǥ���</p>
													<table class="table mb5">
														<tbody>
															<tr>
																<th class="w45per">���ǳ���URL</th>
																<td>https://�����͡���/</td>
															</tr>
															<tr>
																<th class="w45per">���λ���������᡼�륢�ɥ쥹</th>
																<td>������󤫤����ꤷ��������᡼�륢�ɥ쥹</td>
															</tr>
														</tbody>
													</table>
													<p class="note">�����ǳ���URL�ϡ�<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">�������ƥ����Ǵ�������</a><i class="ico ico_new-window base-color"></i>�פ����ѹ���ǽ�Ǥ���</p>
												</li>
												<li>1��1�󡢿��ǳ���URL�����󥯤򤿤ɤꡢ30�ڡ���ʬ��Web�ڡ�������Ǥ��ޤ���</li>
												<li>SSL���������󤷤���硢���Ƿ�̤��������ޤ���</li>
											</ul>
										</dd>

										<dt><i class="ico ico_square-fill"></i>���Ƿ�̤ˤĤ���</dt>
										<dd>
											<ul class="ul">
												<li>�ޥ륦�������ե��å��󥰥����Ȥ��Τ�����硢�ָ��λ���������᡼�륢�ɥ쥹�פ˥᡼��Ǥ����⤷�ޤ���</li>
												<li>���λ���������᡼�륢�ɥ쥹�����ꤷ�ʤ���硢���Ƿ�̤����Τ���ޤ���</li>
												<li>���Ƿ�̤ξܺ٤ϡ�<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">�������ƥ����Ǵ�������</a><i class="ico ico_new-window base-color"></i>�פ��餴��ǧ����������<br>�ʡ�SSL������Υ����͡���פȡ֥ѥ���ɡפǥ�����Ǥ��ޤ�����</li>
											</ul>
										</dd>
									</dl>
								</div>
							</section>
						</div>
					</section>
					<!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-f">��ʣ��ǯ����פˤĤ���</h4>
                    <div class="section_body">
                        <p>
                            ���ץ�����ȼ�SSL��ʣ��ǯ��2��5ǯ�ˤǤη��󤬲�ǽ�Ǥ���<br>
                            ���٤�Ĺ�������󤤤������ۤɡ�1ǯ����������⤬��¤ˤʤ뤿�ᡢSSL�������Ĺ���Ȥ����ۤɤ����Ǥ���
                        </p>
                        <p>SSL�������ͭ�����֤Ϸ�����֤˴ؤ�餺1ǯñ�̤Ȥʤ�ޤ��������������ϼ�ưŪ�˾������ͭ�����֤���Ĺ����ޤ����ʢ���</p>

                        <div>
                            <p class="mb10">
                                ��SSL������Τ��������Ƥˤ�äƤϷ���������<br>
                                ��1ǯ��1�١��������ͭ�����֤��Ĺ���뤿��μ�³����ɬ�פȤʤ��礬����ޤ���<br>
                            </p>
                            <p class="mb5">���ܺ٤ϡ��ʲ��򤴻��Ȥ���������</p>
                        </div>

                        <dl class="dl ml10">
                            <dt><i class="ico ico_square-fill"></i>�֥ɥᥤ��ǧ��SSL�� ���� �оݤΥɥᥤ��̾�Υ͡��ॵ���С������� �ξ��</dt>
                            <dd>
                                ���������Ǥ���С��������ͭ�����֤���ưŪ�˱�Ĺ����ޤ���<br>
                                �����ͤ˹ԤäƤ���������ȤϤ���ޤ���
                            </dd>

                            <dt class="mb0 pb0"><i class="ico ico_square-fill"></i>�֥ɥᥤ��ǧ��SSL�� ���� �оݤΥɥᥤ��̾�Υ͡��ॵ���С�������<b>�ʳ�</b>�� ���</dt>
                            <dt class="mb0 pt0 pb0"><i class="ico ico_square-fill"></i>�ִ��ǧ��SSL�פξ��</dt>
                            <dt class="pt0"><i class="ico ico_square-fill"></i>��EV SSL�� �ξ��</dt>
                            <dd>
                                ���������Ǥ��äƤ⡢�������ͭ�����֤ϼ�ưŪ�ˤϱ�Ĺ����ޤ���<br>
                                1ǯ��1�١������ͤ����Ȥ�ͭ�����ֱ�Ĺ�μ�³����ԤäƤ�������ɬ�פ�����ޤ���<br>
                                ������δ�������45�����ˤ�����Υ᡼������ꤷ�ޤ��Τǡ�<br>
                                ����˱�äơ�ͭ�����ֱ�Ĺ�μ�³����ԤäƤ���������
                            </dd>
                        </dl>
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