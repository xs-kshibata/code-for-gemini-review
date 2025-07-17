<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ǧ��SSL�ο���������������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פǥɥᥤ��ǧ��SSL�����Ѥ�����������μ��Τ�����Ǥ���">


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

                <h3 class="sub-ttl">�ɥᥤ��ǧ��SSL�ο�����³��</h3>
                <p>�ɥᥤ��ǧ��SSL�μ������������������μ��ˤĤ��Ƥ����⤷�Ƥ��ޤ���<br>
                    ���ץ�����ȼ�SSL�Τ�����������ˡ�ˤĤ��Ƥϡ�<a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>�פ򤴻��Ȥ���������</p>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</a></li>
                                            <li><a href="#link-previous-a02">2.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-previous-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-previous-a04">4.ǧ����ˡ�����򤷤Ƥ���������</a></li>
                                            <li><a href="#link-previous-a05">5.SSL������μ���������Ԥ��ޤ���</a></li>
                                            <li><a href="#link-previous-a06">6.�᡼��ˤ�뾵ǧ���</a></li>
                                            <li><a href="#link-previous-a07">7.����������³����λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-previous-b02">2.������������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-previous-b03">3.�᡼��ˤ�뾵ǧ���</a></li>
                                            <li><a href="#link-previous-b04">4.������³����λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">��������˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο�����������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">���������μ��</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</h6>
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
                                            <h6 class="box_ttl" id="link-previous-a02">2.���������򳫻Ϥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL������Ρ�<em class="font-bold">��������</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_4.png" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>���������ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���<em class="font-bold">���β��̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_5.png" alt="�����͡���ڤ�CSR��������Ϥ��ޤ�"></p>
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
                                                                        <p>��www.�פ���/�ʤ�ξ����URL��SSL��³�����Ѥ��������˴ؤ��Ƥϡ�<a href="man_order_ssl.php#link-d">SSL������Ρ�2Way���ѡפˤĤ���</a>�򤴻��Ȥ���������</p>
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

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a04">4.ǧ����ˡ�����򤷤Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>ǧ����ˡ��ʲ��Τ����줫�������򤷤ơ���<em class="fontBold">��ǧ���̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">��DNSǧ�ڤ⤷����Webǧ��(A�쥳���ɤ������С���IP���ɥ쥹)�ξ���<br>������ǧ����ˡ��������̤�ɽ�����줺�����γ�ǧ���̤ؿʤߤޤ���</p>
                                                </div>
                                                <dl class="dl">
                                                    <dt><i class="ico ico--squareFill"></i>�᡼��ǧ��</dt>
                                                    <dd>
                                                        <p> ǧ�ڶɤ����뾵ǧ�ѥ᡼�륢�ɥ쥹���Ѥ��ơ��ɥᥤ������ԤǤ��뤳�Ȥ��ǧ���ޤ���<br>
                                                            ������λ�塢��ǧ�ѥ᡼�륢�ɥ쥹���˥ɥᥤ����Ѹ���ǧ�Υ᡼����������ޤ���������ǽ�ʤ褦�ˤ��餫���ᤴ�Ѱդ���������</p>
                                                        <p>����������λ�塢��SSLȯ�Ը����<em class="fontBold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                            ����������ǧ�᡼����ʸ��ˤ���<em class="fontBold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                        <ul class="noteList">
                                                            <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $LOGIN_FORM_URL; ?>" target="_blank">XServer���������</a><i class="ico ico--newWindow"></i>�Υȥåץڡ�����SSL������ > ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                            <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ��� <br>
                                                                ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico--squareFill"></i>Webǧ��</dt>
                                                    <dd>
                                                        <p>Web�����С�������֤���ǧ���ѥե�������Ф���ǧ�ڶɤ���Web����������Ԥ����Ȥǡ��ɥᥤ������ԤǤ��뤳�Ȥ��ǧ���ޤ���</p>
                                                        <p>����������λ���̤�ɽ��������ǧ�ھ���פ򸽺ߤ�������Υ����С��إ��åץ��ɤ��뤳�Ȥǡ��ɥᥤ��ν�ͭ���γ�ǧ����λ���ޤ���</p>
                                                    </dd>
                                                </dl>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_17.png" alt="ǧ����ˡ�����򤷤ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a05">5.SSL������μ���������Ԥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p>�ʲ������Ƥ�SSL������μ���������Ԥ��ޤ������Ƥ򤴳�ǧ�ξ塢�������С�<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_18.png" alt="SSL������μ���������Ԥ��ޤ�"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a06">6.�᡼��ˤ�뾵ǧ���</h6>
                                            <div class="box_body">
                                                <p>����������������λ���ޤ�����</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_16.png" alt="���������δ�λ����"></p>
                                                <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                <ul class="note-list mb15">
                                                    <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                                    <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�Υȥåץڡ������֤�������� &gt; SSL������ &gt; ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                    <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ��� <br>
                                                    ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a07">7.����������³����λ</h6>
                                            <div class="box_body">
                                                <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                                (�����ˤϿ������٤������פ����礬�������ޤ������餫���ᤴλ������������)</p>
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���<br>
                                                ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                                <p class="note">������Ʊ��Υ����͡���Ǻ���Τ��������ߤȰۤʤ�ץ��Ǥ����Ѥ���Ƥ������ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���ȼ�IP���ɥ쥹����פ�SSL������ˤơ���www.�פ��դ��������͡���Ǥ��������ߤ���(�㡧www.example.com)</h6>
                                                    <div class="msg_body">
                                                        <p>��www.�פ��դ��������͡���Ǥ��������ߤ����������Ȥǡ���www.�פ��ղä��줿URL(https://www.example.com/)���ղä���Ƥ��ʤ�URL(https://example.com/)���ɤ���Ǥ�SSL��³��Ԥ����Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                        <p>���꤬��λ���������Ǥϡ���www.�פ���ξ��֤ǤΤ�SSL��³����ǽ�Ǥ���<br>���ȼ�IP���ɥ쥹����פ�SSL��������줿��硢��www.�פʤ��ξ��֤Ǥ����Ѥ��뤿��ˤϡ������С��ѥͥ���DNS�쥳���������ꡢSSL�Ѥ�IP���ɥ쥹�����ꤷ�Ƥ�������ɬ�פ�����ޤ���</p>
                                                        <p>SSL����������괰λ�����Ǥϡ�DNS�쥳��������ϲ����ξ��֤ȤʤäƤ��ޤ���<br>�ۥ���̾���ɥᥤ��̾���Τ�Τǡ����̤�A�ȤʤäƤ���쥳���ɤ򲼵����̤��ѹ����Ƥ���������</p>
                                                        <p class="note">�����ȼ�IP���ɥ쥹�ʤ��פ�SSL��������줿���ϡ�DNS�쥳���ɤ��ѹ������פǤ���</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                                            <dd>
                                                                <p class="note">���쥳���ɤν�������夷�Ƥ����礬����ޤ��ΤǤ���դ���������</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_12.png" alt="DNS�쥳�����������"></p>
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
                                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_13.png" alt="DNS�쥳�����������"></p>

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
                                <h4 class="section_ttl" id="link-previous-b">���������μ��</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.���������򳫻Ϥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL�������<em class="font-bold">�ֹ���������</em>�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_10.png" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.������������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p class="mb0">������������Ʊ�ͤˡ���<em class="font-bold">CSR����</em>�פ����Ϥ��ޤ���</p>
                                                <p class="note">�������͡�����ѹ����뤳�ȤϽ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_11.png" alt="CSR���������"></p>
                                                <p>³���ơ�<em class="font-bold">ǧ����ˡ</em>�פ����򤷤ơ�<em class="font-bold">��ǧ���̤ؿʤ�</em>�פ򥯥�å������ʤ�����̤ˤƤ����Ϥ�������������򤴳�ǧ�ξ塢��<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">��DNSǧ�ڤ⤷����Webǧ��(A�쥳���ɤ������С���IP���ɥ쥹)�ξ���<br>������ǧ����ˡ��������̤�ɽ�����줺�����γ�ǧ���̤ؿʤߤޤ���</p>
                                                </div>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_19.png" alt="��Ͽ�Ծ�������Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.�᡼��ˤ�뾵ǧ���</h6>
                                            <div class="box_body">
                                                <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                <ul class="note-list mb15">
                                                    <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                                    <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�Υȥåץڡ������֤�������� &gt; SSL������ &gt; ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                    <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ���<br>
                                                    ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.������³����λ</h6>
                                            <div class="box_body">
                                                <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                                (������μ���ˤ�äƿ����ˤϿ������٤����֤��פ����礬����ޤ���)</p>
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ������󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-a01">1.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</a></li>
                                            <li><a href="#link-a02">2.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-a04">4.ǧ����ˡ�����򤷤Ƥ���������</a></li>
                                            <li><a href="#link-a05">5.SSL������μ���������Ԥ��ޤ���</a></li>
                                            <li><a href="#link-a06">6.�᡼��ˤ�뾵ǧ���</a></li>
                                            <li><a href="#link-a07">7.����������³����λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-b01">1.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-b02">2.������������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-b03">3.�᡼��ˤ�뾵ǧ���</a></li>
                                            <li><a href="#link-b04">4.������³����λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">��������˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο�����������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">���������μ��</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a01">1.��������������ǧ�ں�Ȥν�����Ԥ��ޤ���</h6>
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
                                            <h6 class="box_ttl" id="link-a02">2.���������򳫻Ϥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL������Ρ�<em class="font-bold">��������</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_4.png?date=2410" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>���������ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���<em class="font-bold">���β��̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_5.png?date=2410" alt="�����͡���ڤ�CSR��������Ϥ��ޤ�"></p>
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
                                                                    <p>��www.�פ���/�ʤ�ξ����URL��SSL��³�����Ѥ��������˴ؤ��Ƥϡ�<a href="man_order_ssl.php#link-d">SSL������Ρ�2Way���ѡפˤĤ���</a>�򤴻��Ȥ���������</p>
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

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a04">4.ǧ����ˡ�����򤷤Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>ǧ����ˡ��ʲ��Τ����줫�������򤷤ơ���<em class="fontBold">��ǧ���̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">��DNSǧ�ڤ⤷����Webǧ��(A�쥳���ɤ������С���IP���ɥ쥹)�ξ���<br>������ǧ����ˡ��������̤�ɽ�����줺�����γ�ǧ���̤ؿʤߤޤ���</p>
                                                </div>
                                                <dl class="dl">
                                                    <dt><i class="ico ico--squareFill"></i>�᡼��ǧ��</dt>
                                                    <dd>
                                                        <p> ǧ�ڶɤ����뾵ǧ�ѥ᡼�륢�ɥ쥹���Ѥ��ơ��ɥᥤ������ԤǤ��뤳�Ȥ��ǧ���ޤ���<br>
                                                            ������λ�塢��ǧ�ѥ᡼�륢�ɥ쥹���˥ɥᥤ����Ѹ���ǧ�Υ᡼����������ޤ���������ǽ�ʤ褦�ˤ��餫���ᤴ�Ѱդ���������</p>
                                                        <p>����������λ�塢��SSLȯ�Ը����<em class="fontBold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                            ����������ǧ�᡼����ʸ��ˤ���<em class="fontBold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                        <ul class="noteList">
                                                            <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $LOGIN_FORM_URL; ?>" target="_blank">XServer���������</a><i class="ico ico--newWindow"></i>�Υȥåץڡ�����SSL������ > ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                            <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ��� <br>
                                                                ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico--squareFill"></i>Webǧ��</dt>
                                                    <dd>
                                                        <p>Web�����С�������֤���ǧ���ѥե�������Ф���ǧ�ڶɤ���Web����������Ԥ����Ȥǡ��ɥᥤ������ԤǤ��뤳�Ȥ��ǧ���ޤ���</p>
                                                        <p>����������λ���̤�ɽ��������ǧ�ھ���פ򸽺ߤ�������Υ����С��إ��åץ��ɤ��뤳�Ȥǡ��ɥᥤ��ν�ͭ���γ�ǧ����λ���ޤ���</p>
                                                    </dd>
                                                </dl>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_17.png" alt="ǧ����ˡ�����򤷤ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a05">5.SSL������μ���������Ԥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p>�ʲ������Ƥ�SSL������μ���������Ԥ��ޤ������Ƥ򤴳�ǧ�ξ塢�������С�<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_18.png?date=2410" alt="SSL������μ���������Ԥ��ޤ�"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a06">6.�᡼��ˤ�뾵ǧ���</h6>
                                            <div class="box_body">
                                                <p>����������������λ���ޤ�����</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_16.png?date=2410" alt="���������δ�λ����"></p>
                                                <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                    ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                <ul class="note-list mb15">
                                                    <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                                    <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�Υȥåץڡ������֤�������� &gt; SSL������ &gt; ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                    <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ��� <br>
                                                        ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a07">7.����������³����λ</h6>
                                            <div class="box_body">
                                                <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                                    (�����ˤϿ������٤������פ����礬�������ޤ������餫���ᤴλ������������)</p>
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���<br>
                                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                                <p class="note">������Ʊ��Υ����͡���Ǻ���Τ��������ߤȰۤʤ�ץ��Ǥ����Ѥ���Ƥ������ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���ȼ�IP���ɥ쥹����פ�SSL������ˤơ���www.�פ��դ��������͡���Ǥ��������ߤ���(�㡧www.example.com)</h6>
                                                    <div class="msg_body">
                                                        <p>��www.�פ��դ��������͡���Ǥ��������ߤ����������Ȥǡ���www.�פ��ղä��줿URL(https://www.example.com/)���ղä���Ƥ��ʤ�URL(https://example.com/)���ɤ���Ǥ�SSL��³��Ԥ����Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                        <p>���꤬��λ���������Ǥϡ���www.�פ���ξ��֤ǤΤ�SSL��³����ǽ�Ǥ���<br>���ȼ�IP���ɥ쥹����פ�SSL��������줿��硢��www.�פʤ��ξ��֤Ǥ����Ѥ��뤿��ˤϡ������С��ѥͥ���DNS�쥳���������ꡢSSL�Ѥ�IP���ɥ쥹�����ꤷ�Ƥ�������ɬ�פ�����ޤ���</p>
                                                        <p>SSL����������괰λ�����Ǥϡ�DNS�쥳��������ϲ����ξ��֤ȤʤäƤ��ޤ���<br>�ۥ���̾���ɥᥤ��̾���Τ�Τǡ����̤�A�ȤʤäƤ���쥳���ɤ򲼵����̤��ѹ����Ƥ���������</p>
                                                        <p class="note">�����ȼ�IP���ɥ쥹�ʤ��פ�SSL��������줿���ϡ�DNS�쥳���ɤ��ѹ������פǤ���</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                                            <dd>
                                                                <p class="note">���쥳���ɤν�������夷�Ƥ����礬����ޤ��ΤǤ���դ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_12.png?date=2410" alt="DNS�쥳�����������"></p>
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
                                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_13.png?date=2410" alt="DNS�쥳�����������"></p>

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
                                <h4 class="section_ttl" id="link-b">���������μ��</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.���������򳫻Ϥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL�������<em class="font-bold">�ֹ���������</em>�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_10.png?date=2410" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.������������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p class="mb0">������������Ʊ�ͤˡ���<em class="font-bold">CSR����</em>�פ����Ϥ��ޤ���</p>
                                                <p class="note">�������͡�����ѹ����뤳�ȤϽ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_11.png?date=2410" alt="CSR���������"></p>
                                                <p>³���ơ�<em class="font-bold">ǧ����ˡ</em>�פ����򤷤ơ�<em class="font-bold">��ǧ���̤ؿʤ�</em>�פ򥯥�å������ʤ�����̤ˤƤ����Ϥ�������������򤴳�ǧ�ξ塢��<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">��DNSǧ�ڤ⤷����Webǧ��(A�쥳���ɤ������С���IP���ɥ쥹)�ξ���<br>������ǧ����ˡ��������̤�ɽ�����줺�����γ�ǧ���̤ؿʤߤޤ���</p>
                                                </div>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_19.png?date=2410" alt="��Ͽ�Ծ�������Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.�᡼��ˤ�뾵ǧ���</h6>
                                            <div class="box_body">
                                                <p>����������λ�塢��SSLȯ�Ը����<em class="font-bold">�־�ǧ�᡼���</em>�����դ���ޤ���<br>
                                                    ����������ǧ�᡼����ʸ��ˤ���<em class="font-bold">��ǧ��URL�ؤȥ�������</em>������ǧ��Ȥ�ԤäƤ���������</p>
                                                <ul class="note-list mb15">
                                                    <li>������ˤ����ơ�ǧ����ˡ�פι��ܤ�ɽ������ʤ����ϡ�DNSǧ�ڡפ�Ŭ�Ѥ���뤿�ᡢ�ܺ�Ȥ��ά���뤳�Ȥ�����ޤ���</li>
                                                    <li>����ǧ�᡼�뤬���ޤ������Ǥ��ʤ��ä����ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�Υȥåץڡ������֤�������� &gt; SSL������ &gt; ����������ǧ�פ��־�ǧ�᡼������פΤ���³������ǽ�Ǥ���</li>
                                                    <li>������������λ�塢���������˾�ǧ��³����Ԥ��ʤ��ä���硢��SSLȯ�Ը��������������̵���Ȥ���ּ�ư����󥻥�פμ�³�����»ܤ���ޤ���<br>
                                                        ���κݤϡ����Ҥ��֡�XServer��������ȡ۾�ǧ��Ȥ�̤��λ��SSL������˴ؤ��뼫ư����󥻥�Τ�Ϣ��פȤ�����̾�Υ᡼�뤬��������ޤ���</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.������³����λ</h6>
                                            <div class="box_body">
                                                <p>�����ͤǤξ�ǧ��ȸ塢SSLȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                                    (������μ���ˤ�äƿ����ˤϿ������٤����֤��פ����礬����ޤ���)</p>
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ������󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /���ѥͥ�-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->


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