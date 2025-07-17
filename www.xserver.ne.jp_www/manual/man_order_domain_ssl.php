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
                            <li><a href="#link-b04">4.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</a></li>
                            <li><a href="#link-b05">5.���������򳫻Ϥ��ޤ���</a></li>
                            <li><a href="#link-b06">6.�����͡������ꡦCSR��������Ϥ��Ƥ���������</a></li>
                            <li><a href="#link-b07">7.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</a></li>
                            <li><a href="#link-b08">8.�᡼��ˤ�뾵ǧ���</a></li>
                            <li><a href="#link-b09">9.����������³����λ</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">�������������߼��</a>
                        <ol>
                            <li><a href="#link-c01">1.�������ʧ���פؤ��ʤߤ���������</a></li>
                            <li><a href="#link-c02">2.��������SSL�����򤷡�����Τ���ʧ����³���ؤȤ��ʤߤ���������</a></li>
                            <li><a href="#link-c03">3.����ʧ����ˡ�����򤷤Ƥ���������</a></li>
                            <li><a href="#link-c04">4.���������򳫻Ϥ��ޤ���</a></li>
                            <li><a href="#link-c05">5.������������Ϥ��Ƥ���������</a></li>
                            <li><a href="#link-c06">6.�᡼��ˤ�뾵ǧ���</a></li>
                            <li><a href="#link-c07">7.������³����λ</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">��2Way���ѡפˤĤ���</a></li>
                     <li><a href="#link-e">�֥��饦�ɥ����奢�Υ������ƥ����ǥ����ӥ��פˤĤ���</a></li>
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
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�إ����󤷡��ڡ��������Ρ�SSL������פ�ꡢ��<em class="font-bold">+�ɲÿ�������</em>�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_1.png?date=20210610" alt="SSL�������+�ɲÿ������ߤ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.���������ߤ����������Ƥ����Ϥ��Ƥ���������</h6>
                                <div class="box_body">
                                    <p>���ץ�����ȼ�SSL�Τ��������ߥե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_3.png?date=20250626" alt="�����͡���ڤ�SSL�֥��ɤο������ߤ򤷤ޤ�"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SSL�֥��ɤ�����</th>
                                                <td>���������ߤ�������SSL����������򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�ץ�������</th>
                                                <td>�ʲ��Υץ�������򤷤Ƥ���������<br>
                                                ��IP���ɥ쥹�١����ס�������������IP���ɥ쥹��ɳ�դ�SSL������<br>
                                                ��SNI SSL(�͡���١���)�� ���������ۥ���̾��ɳ�դ�SSL������</td>
                                            </tr>
                                            <tr>
                                                <th>�оݥ����С����������</th>
                                                <td>�����͡���Ȥ���ɥᥤ�����ꤵ��Ƥ��륵���С�ID�����򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�����͡���</th>
                                                <td>
                                                    <p>�����Ѥˤʤ��ȼ��ɥᥤ�󡢤ޤ��ϥ��֥ɥᥤ������򤯤�������</p>
                                                    <p class="note">�������ˡ�������ͽ����ȼ��ɥᥤ��ޤ��ϥ��֥ɥᥤ��������ԤäƤ���ɬ�פ�����ޤ���</p>
                                                    <p class="note">��64ʸ���ʾ�Υ����͡���Ϥ��������ߤǤ��ޤ���</p>
                                                    <aside class="msg msg_notice mb0">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�����͡���˴ؤ���</h6>
                                                        <div class="msg_body">
                                                            <p>��www.�פ���/�ʤ�ξ����URL��SSL��³�����Ѥ��������˴ؤ��Ƥϡ�<a href="#link-d">SSL������Ρ�2Way���ѡפˤĤ���</a>�򤴻��Ȥ���������</p>                                                            
                                                        </div>
                                                    </aside>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p>���Ƥ����Ϥ��������ޤ����顢��<em class="font-bold">�������������Ƥγ�ǧ�Ȥ���ʧ���ؿʤ�</em>�פ򥯥�å����Ƥ��ʤߤ���������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.����Τ���ʧ����³����ԤäƤ���������</h6>
                                <div class="box_body">
                                    <p>����������Τ���ʧ����ˡ�򡢡֥��쥸�åȥ����ɡס֥���ӥ˥��󥹥��ȥ��סֶ�Կ����ס֥ڥ������ס�����ʧ���ʥ���ӥˡ���ԡˡפ��椫�餪���Ӥ�����������³���򤪿ʤ᤯��������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20201022" alt="����Τ���ʧ����ˡ������"></p>
                                    <p><em class="font-bold">���������˴ؤ��뤴����</em>�Υ᡼��򡢤���Ͽ�᡼�륢�ɥ쥹���ˤ������פ��ޤ��Τǡ�����ǧ����������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</h6>
                                <div class="box_body">
                                    <p>
                                    �ʲ��γƥ֥��ɤ򤪿������ߤʤ�����ϡ��ȼ�SSL�򤪿������ߤ������˻�����Ȥ�Ԥ����Ȥǡ��᡼��ˤ�뾵ǧ��Ȥ��ά���뤳�Ȥ���ǽ�Ǥ���
                                    </p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>���饦��SSL�����饦�ɥ����奢�����ԡ���ǧ��SSL�������ȥ饹�� �����å�SSL�ץ�ߥ��ࡢ��ԥå�SSL�����Ѥ���</dt>
                                        <dd>��DNSǧ�ڡפˤ�뤪��³������ǽ�Ǥ���<br>
                                        �����͡���˳�������ɥᥤ��Υ͡��ॵ���С�������������ӥ������ꤹ�����Ƥ��ѹ�����Τ����Ǥ���<br>
                                        
                                        �͡��ॵ���С���������ˡ��
                                         <a href="man_domain_namesever_setting.php">���å��������С��ޥ˥奢�� �� �ɥᥤ��ˤĤ��� �� �͡��ॵ���С�������</a>�򤴻��Ȥ���������</dd>
                                    </dl>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.���������򳫻Ϥ��ޤ���</h6>
                                <div class="box_body">
                                    <p>��SSL������פ�ꡢ���������ߤ���������SSL������Ρ�<em class="font-bold">��������</em>�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_4.png?date=20201022" alt="���������򳫻Ϥ��ޤ�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b06">6.�����͡������ꡦCSR��������Ϥ��Ƥ���������</h6>
                                <div class="box_body">
                                    <p>���������ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_5.png?date=20201022" alt="�����͡���ڤ�CSR��������Ϥ��ޤ�"></p>
                                    <table class="table table_use-caption mb5">
                                        <caption>�����͡���ˤĤ���</caption>
                                        <tbody>
                                            <tr>
                                                <th>�оݥ����С�ID</th>
                                                <td>�����͡���Ȥ���ɥᥤ�����ꤵ��Ƥ��륵���С�ID�����򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th class="w30per">�����͡���</th>
                                                <td>
                                                    <p>�ȼ�SSL�����Ѥˤʤ��ȼ��ɥᥤ�󡢤ޤ��ϥ��֥ɥᥤ������򤯤�������</p>
                                                    <p class="note">�������ˡ�������ͽ����ȼ��ɥᥤ��ޤ��ϥ��֥ɥᥤ��������ԤäƤ���ɬ�פ�����ޤ���</p>
                                                    <p class="note">��64ʸ���ʾ�Υ����͡���Ϥ��������ߤǤ��ޤ���</p>
                                                    <aside class="msg msg_notice mb0">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�����͡���˴ؤ���</h6>
                                                        <div class="msg_body">
                                                            <p>��www.�פ���/�ʤ�ξ����URL��SSL��³�����Ѥ��������˴ؤ��Ƥϡ�<a href="#link-d">SSL������Ρ�2Way���ѡפˤĤ���</a>�򤴻��Ȥ���������</p>                                                           
                                                        </div>
                                                    </aside>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                    
                                    <table class="table table_use-caption mb5">
                                        <caption>CSR��Ͽ����</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">��(Country)</th>
                                                <td>2ʸ���ǹ��������񥳡��ɤ����Ϥ������������ܤξ��Ͻ�����֤Ρ�<em class="font-bold">JP</em>�פǤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��ƻ�ܸ�(State)</th>
                                                <td>�����ȿ��Τ���<em class="font-bold">��ƻ�ܸ�̾</em>�����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�Զ�Į¼(Local)</th>
                                                <td>�����ȿ��Τ���<em class="font-bold">�Զ�Į¼̾</em>�����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�ȿ�(Org)</th>
                                                <td><em class="font-bold">�����ȿ���������ʸ̾��</em>�����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>����(Unit)</th>
                                                <td>�����ȿ���<em class="font-bold">����̾</em>�����Ϥ���������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>�����ϸ塢<em class="font-bold">����Ͽ�Ծ������ϲ��̤ؿʤ��</em>�򥯥�å����Ƥ���������</p>
                                    
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b07">7.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</h6>
                                <div class="box_body">
                                    <p>�ե�����˱�äơ��ʲ��ξ�������Ϥ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_6.png?date=20201210" alt="��Ͽ�Ծ�������Ϥ��ޤ�"></p>
                                    
                                    <table class="table mb5">
                                    	<caption>SSL����Ͽô���Ծ���</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">�ȿ�̾</th>
                                                <td>�����ȿ�̾��������ʸ̾�ΤǤ����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>��̾</th>
                                                <td>��̾���򥢥�ե��٥åȤǤ����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>��</th>
                                                <td>�򿦤򥢥�ե��٥åȤǤ����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>͹���ֹ�</th>
                                                <td>͹���ֹ�����Ϥ������������ϥ��ե�����פǤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�񥳡���</th>
                                                <td>�񥳡��ɤ����򤷤Ƥ������������ܤξ��ϡ�JP�פǤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��ƻ�ܸ�</th>
                                                <td>�����ȿ��Τ�����ƻ�ܸ�̾�����򤷤Ƥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�Զ�Į¼</th>
                                                <td>�����ȿ��Τ���Զ�Į¼̾�򥢥�ե��٥åȤǤ����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>�����ȿ��ξܤ�������򥢥�ե��٥åȤǤ����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>�����ֹ�</th>
                                                <td>�����ֹ�����Ϥ���������</td>
                                            </tr>
                                            <tr>
                                                <th>FAX�ֹ�</th>
                                                <td>FAX�ֹ�����Ϥ�����������̵�����ϡ����������פǤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�᡼�륢�ɥ쥹</th>
                                                <td>�᡼�륢�ɥ쥹�����Ϥ���������</td>
                                            </tr>
                                            </tbody>
                                    </table>
                                    
                                    <table class="table mb5">
                                    	<caption>ǧ����ˡ(��1)</caption>
                                        <tbody>
                                            <tr>
                                                <th>��ǧ�ѥ᡼�륢�ɥ쥹(��2)</th>
                                                <td>��SSLȯ�Ը���������뾵ǧ�᡼���������뤿��Υ᡼�륢�ɥ쥹�����򤷤Ƥ���������</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">��1 ���������ߤΥ֥��ɤ��֥��饦��SSL�ס֥��饦�ɥ����奢�����ԡ���ǧ��SSL�ס֥����ȥ饹�� �����å�SSL�ץ�ߥ���ס֥�ԥå�SSL�פǡ���DNSǧ�ڡפ���ǽ�ʾ����������פΤ���ɽ������ޤ���</p>
                                    <p class="note">��2 �����ˡ�������ǽ�ʥ᡼�륢�ɥ쥹���Ѱդ�������ɬ�פ�����ޤ���</p>
                                    <p>���Ƥ����Ϥ��������ޤ����顢<em class="font-bold">�ֳ�ǧ���̤ؿʤ��</em>�򥯥�å����Ƥ����������ʤ�����̤ˤơ������Ϥ�������������򤴳�ǧ�ξ塢<em class="font-bold">�ּ��������򤹤��</em>�򥯥�å����Ƥ���������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b08">8.�᡼��ˤ�뾵ǧ���</h6>
                                <div class="box_body">
                                    <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                    ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                    <ul class="note-list mb15">
                                        <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                        <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�X����������⡢�ڡ��������Ρ�SSL������פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                        <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ��� <br>
                                        ���κݤϡ����Ҥ��֡�XServer�۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                    </ul>
                                </div>
                            </section>
                            
                            <section id="s10" class="box">
                                <h6 class="box_ttl" id="link-b09">9.����������³����λ</h6>
                                <div class="box_body">
                                    <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                    (�����ˤϿ������٤������פ����礬�������ޤ������餫���ᤴλ������������)</p>
                                    <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���<br>
                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                    <p class="note">������Ʊ��Υ����͡���Ǻ���Τ��������ߤȰۤʤ�ץ��Ǥ����Ѥ���Ƥ������ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</p>
                                    <aside id="twoway" class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��IP���ɥ쥹�١����ץץ���SSL������ˤơ�
��www.�פ��դ��������͡���Ǥ��������ߤ���(�㡧www.example.com)</h6>
                                        <div class="msg_body">
                                            <p>��www.�פ��դ��������͡���Ǥ��������ߤ����������Ȥǡ���www.�פ��ղä��줿URL(https://www.example.com/)���ղä���Ƥ��ʤ�URL(https://example.com/)���ɤ���Ǥ�SSL��³��Ԥ����Ȥ���ǽ�ˤʤ�ޤ���</p>
                                            <p>���꤬��λ���������Ǥϡ���www.�פ���ξ��֤ǤΤ�SSL��³����ǽ�Ǥ���<br>IP���ɥ쥹�١�����SSL��������줿��硢��www.�פʤ��ξ��֤Ǥ����Ѥ��뤿��ˤϡ������С��ѥͥ���DNS�쥳���������ꡢSSL�Ѥ�IP���ɥ쥹�����ꤷ�Ƥ�������ɬ�פ�����ޤ���</p>
                                            <p>SSL����������괰λ�����Ǥϡ�DNS�쥳��������ϲ����ξ��֤ȤʤäƤ��ޤ���<br>�ۥ���̾���ɥᥤ��̾���Τ�Τǡ����̤�A�ȤʤäƤ���쥳���ɤ򲼵����̤��ѹ����Ƥ���������</p>
                                            <p class="note">��SNI SSL(�͡���١���)�Τ�SSL��������줿���ϡ�DNS�쥳���ɤ��ѹ������פǤ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                                <dd>
                                                    <p class="note">���쥳���ɤν�������夷�Ƥ����礬����ޤ��ΤǤ���դ���������</p>
                                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_12.png?date=20201022" alt="DNS�쥳�����������"></p>
                                                    <table class="table break-word">
                                                        <thead>
                                                            <tr>
                                                                <th class="w30per">�ۥ���̾</th>
                                                                <th class="w10per">����</th>
                                                                <th class="w40per">����</th>
                                                                <th class="w20per">ͥ����</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>example.com</th>
                                                                <td>A</td>
                                                                <td>�����ͤ������ѤΥ����С���IP���ɥ쥹<br>
                                                                <em class="red">��������Ρ��ѹ��פ򥯥�å��������Ƥ��ѹ�����</em></td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <th>www.example.com</th>
                                                                <td>A</td>
                                                                <td>SSL�Ѥ�IP���ɥ쥹</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <th>example.com</th>
                                                                <td>MX</td>
                                                                <td>example.com</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <th>*.example.com</th>
                                                                <td>A</td>
                                                                <td>�����ͤ������ѤΥ����С���IP���ɥ쥹</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </dd>
                                            </dl>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                                <dd>
                                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_13.png?date=20201022" alt="DNS�쥳�����������"></p>
                                                    
                                                    <table class="table break-word">
                                                        <thead>
                                                            <tr>
                                                                <th class="w30per">�ۥ���̾</th>
                                                                <th class="w10per">����</th>
                                                                <th class="w40per">����</th>
                                                                <th class="w20per">ͥ����</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>example.com</th>
                                                                <td>A</td>
                                                                <td>SSL�Ѥ�IP���ɥ쥹</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <th>www.example.com</th>
                                                                <td>A</td>
                                                                <td>SSL�Ѥ�IP���ɥ쥹</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <th>example.com</th>
                                                                <td>MX</td>
                                                                <td>example.com</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <th>*.example.com</th>
                                                                <td>A</td>
                                                                <td>�����ͤ������ѤΥ����С���IP���ɥ쥹</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </dd>
                                            </dl>
                                            <ul class="note-list">
                                                <li>��SSL�Ѥ�IP���ɥ쥹�ˤĤ��Ƥϡ������С��ѥͥ��Ρ�SSL���� > SSL����ΰ����פ˵��ܤ�����ޤ��ΤǤ���ǧ����������</li>
                                                <li>��DNS�쥳���ɤ�������ˡ�ˤĤ��Ƥϡ���<a href="man_domain_dns_setting.php">DNS�쥳���ɤ��Խ�</a>�פ򤴻��Ȥ���������</li>
                                            </ul>
                                        </div>
                                    </aside>
                                    
                                    <aside class="msg msg_caution mb0">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>�ȼ�SSL�����꤬��λ���������Ǥϡ���ưŪ�ˡ�https://���פ�URL��ž������ޤ���<br>
                                                Web�����Ȥˤ����뤹�٤Ƥ�ɽ������SSL��������ϡ��ޥ˥奢���<a href="man_server_fullssl.php">Web�����Ȥξ��SSL��</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </aside>

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
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�إ�����إ����󤷡�������˥塼�Ρ������ʧ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png" alt="�����ʧ���˿ʤߤޤ�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.��������SSL�����򤷡�����Τ���ʧ����³���ؤȤ��ʤߤ���������</h6>
                                <div class="box_body">
                                    <p>�ڡ��������ˤ���<em class="font-bold">��SSL�������</em>��ꡢ������Ԥ�SSL������˥����å������졢�ֻ�ʧ��ˡ�����򤹤�פ򥯥�å����Ƥ���������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_8.png?date=20201022" alt="��ʧ����ˡ�����򤹤�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <aside class="msg msg_notice">
                                        <div class="msg_body">
                                            <p>�������ӥ��Ǥϡ�2015ǯ9��16����ꥪ�ץ�����ȼ�SSL�Υ����ӥ���ĥ�򤤤����ޤ�����<br>
                                            �ܺ٤ϡ�<a href="../price/price_ssl.php">���������� &gt; ���� &gt; ���ץ�����ȼ�SSL</a>�򤴻��Ȥ���������</p>
                                            <p>�ʤ������ߤ����Ѥ�SSL������ˤĤ��ơ������Τ���³�������ǰʲ����ѹ��򤴴�˾�ξ��ϡ��ܲ��̤���ι�����³����Ԥ鷺<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�⡢�ȥåץڡ��������Ρ�SSL������פΡ�+�ɲÿ������ߡפ�ꡢƱ��Υ����͡���Ǥ���³����ԤäƤ���������</p>
                                            <ul class="ul mb0">
                                                <li>SSL�֥��ɤ��ѹ�������</li>
                                                <li>SSL�֥��ɤ��ѹ�������SSL�ץ��Τ��ѹ�������</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.����ʧ����ˡ�����򤷤Ƥ���������</h6>
                                <div class="box_body">
                                    <p>��������Τ���ʧ����ˡ�򡢡֥��쥸�åȥ����ɡס�����ʧ���ʥ���ӥˡ���ԡˡס֥���ӥ˥��󥹥��ȥ��סֶ�Կ����ס֥ڥ������פ��椫�餪���Ӥ�����������³���򤪿ʤ᤯��������</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20210122" alt="��������Τ���ʧ����ˡ������"></p>
                                    <p><em class="font-bold">������³���˴ؤ��뤴����</em>��᡼��ˤƤ������פ��ޤ��Τǡ�����ǧ����������</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c04">4.���������򳫻Ϥ��ޤ���</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL�������<em class="font-bold">�ֹ���������</em>�򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_10.png?date=20201022" alt="���������򳫻Ϥ��ޤ�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c05">5.������������Ϥ��Ƥ���������</h6>
                                <div class="box_body">
                                    <p class="mb0">������������Ʊ�ͤˡ���CSR����ס�SSL��Ͽ�Ծ���פ����Ϥξ塢������Ȥ�λ�����Ƥ���������</p>
                                    <p class="note">�������͡�����ѹ����뤳�ȤϽ���ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_11.png?date=20201022" alt="CSR���������"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c06">6.�᡼��ˤ�뾵ǧ���</h6>
                                <div class="box_body">
                                    <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                    ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                    <ul class="note-list mb15">
                                        <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                        <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServer���������</a>�⡢�ڡ��������Ρ֤�������� &gt; SSL������פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                        <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ���<br>
                                        ���κݤϡ����Ҥ��֡�XServer�۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                    </ul>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c07">7.������³����λ</h6>
                                <div class="box_body">
                                    <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                    (�����ˤϿ������٤������פ����礬�������ޤ������餫���ᤴλ������������)</p>
                                    <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ������󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
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