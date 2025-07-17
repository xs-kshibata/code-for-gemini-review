<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���ǧ��SSL�μ���������������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פǴ��ǧ��SSL�����Ѥ�����������μ��Τ�����Ǥ���">


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
            
                <h3 class="sub-ttl">���ǧ��SSL�ο�����³��</h3>
                <p>���ǧ��SSL�μ������������������μ��ˤĤ��Ƥ����⤷�Ƥ��ޤ���<br>
                    ���ץ�����ȼ�SSL�Τ�����������ˡ�ˤĤ��Ƥϡ�<a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>�פ򤴻��Ȥ���������</p>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list mt20">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.��������������ǧ�ں�Ȥν���</a></li>
                                            <li><a href="#link-previous-a02">2.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-previous-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-previous-a04">4.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-previous-a05">5.ǧ�ں��</a></li>
                                            <li><a href="#link-previous-a06">6.���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</a></li>
                                            <li><a href="#link-previous-a07">7.����������³����λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-previous-b02">2.������������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-previous-b03">3.ǧ�ں��</a></li>
                                            <li><a href="#link-previous-b04">4.���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</a></li>
                                            <li><a href="#link-previous-b05">5.������³����λ</a></li>
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
                                            <h5 class="box_ttl" id="link-previous-a01">1.��������������ǧ�ں�Ȥν����ʥ��饦�ɥ����奢 ���ǧ��SSL�ξ��Τߡ�</h5>
                                            <div class="box_body">
                                                <p>��������ݤ˲�����ɬ��ɬ�פȤʤ�ޤ��Τǻ����ˤ��������ꤤ�������ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>DUNS(����)�ʥ�С�</dt>
                                                    <dd>
                                                        <p>��Ȥ��ºߤ��뤳�Ȥ򿳺�����ݤ�DUNS(����)�ʥ�С������Ѥ��뤿�ᡢ������DUNS�ʥ�С��μ�����ԤäƤ���������
                                                            ������ˡ�ˤĤ��Ƥϲ����򤴻��Ȥ���������</p>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php">DUNS�ʥ�С��μ�����ˡ</a></li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>DUNS(����)��Ͽ����</dt>
                                                    <dd>
                                                        <p>DUNS��Ͽ�����SSL�ο������󤬰��פ��ʤ���硢�������ȯ�Ԥ��Ǥ��ޤ���<br>
                                                           ����3���ܤ���������Ͽ����Ƥ��뤫��ɬ������ǧ����������<br>
                                                           ��Ͽ���󤬸��ߤξ���Ȱۤʤ���ϡ�DUNS��Ͽ������ѹ�����������SSL�μ���������ԤäƤ���������<br>
                                                           (��Ͽ���󤬸Ť������޻�ɽ���β��̾���ۤʤ�ʤ�)</p>
                                                        <p class="note">��DUNS��Ͽ�����SSL�ο����������㤬����ȡ����������μ�³�����SSLȯ�Ը���ꤪ���Ͱ��˳�ǧ�᡼�뤬�Ϥ���礬����ޤ���</p>
                                                        <table class="table mb5">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w45per">���̾</th>
                                                                    <td>DUNS����Ͽ����Ƥ���Ѹ���̾</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">�����</th>
                                                                    <td>DUNS����Ͽ����Ƥ���Ѹ콻��</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">�����ֹ�</th>
                                                                    <td>DUNS����Ͽ����Ƥ��������ֹ�</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php#link-c">DUNS��Ͽ����γ�ǧ��ˡ</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.���������򳫻Ϥ��ޤ���</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ��������Ρ�SSL������פ�ꡢ���������ߤ���������SSL������Ρ�<em class="font-bold">��������</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_10.png" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</h5>
                                            <div class="box_body">
                                                <p>���������ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���<em class="font-bold">��Ͽ�Ծ������ϲ��̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_11.png" alt="�����͡���ڤ�CSR��������Ϥ��ޤ�"></p>
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
                                            <h5 class="box_ttl" id="link-previous-a04">4.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</h5>
                                            <div class="box_body">
                                                <p>�ե�����˱�äơ��ʲ��ξ�������Ϥ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_12.png" alt="��Ͽ�Ծ�������Ϥ��ޤ�"></p>

                                                <table class="table mb5">
                                                    <caption>SSL����Ͽô���Ծ���</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">�ȿ�̾</th>
                                                            <td>�����ȿ�̾��������ʸ̾�ΤǤ����Ϥ���������<br>
                                                                DUNS��Ͽ����Ρֲ��̾�פȰ��פ��Ƥ���ɬ�פ�����ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">DUNS�ʥ�С��ʢ�1��</th>
                                                            <td>9��ο��������Ϥ���������</td>
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
                                                    <caption>ǧ����ˡ</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>��ǧ�ѥ᡼�륢�ɥ쥹(��2)</th>
                                                            <td>��SSLȯ�Ը���������뾵ǧ�᡼���������뤿��Υ᡼�륢�ɥ쥹�����򤷤Ƥ���������</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="note">��1 ���饦�ɥ����奢 ���ǧ��SSL �ξ��Τ����Ϥ�ɬ�פʹ��ܤǤ���</p>
                                                <p class="note">��2 �����ˡ�������ǽ�ʥ᡼�륢�ɥ쥹���Ѱդ�������ɬ�פ�����ޤ���</p>
                                                <p>���Ƥ����Ϥ��������ޤ����顢<em class="font-bold">�ֳ�ǧ���̤ؿʤ��</em>�򥯥�å����Ƥ����������ʤ�����̤ˤơ������Ϥ�������������򤴳�ǧ�ξ塢<em class="font-bold">�ּ��������򤹤��</em>�򥯥�å����Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a05">5.ǧ�ں��</h5>
                                            <div class="box_body">
                                                <ul class="ul">
                                                    <li><a href="#previous-secure">���饦�ɥ����奢 ���ǧ��SSL �ξ��</a></li>
                                                    <li><a href="#previous-digicert">�ǥ������� �����奢��������ID �ξ��</a></li>
                                                </ul>

                                                <div>
                                                <p class="font-bold mt20" id="previous-secure">���饦�ɥ����奢 ���ǧ��SSL �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-1.����饤��ǧ��</h6>
                                                        <div class="box_body">
                                                            <p>���饦�ɥ����奢�Ҥ���ʸ�ξ�ǧ��ǧ�᡼�뤬���դ���ޤ���
                                                                ���������᡼����ʸ��ˤ���URL�إ�����������������˾�ǧ��ǧ�᡼��˵��ܤ���Ƥ����validation code�פ����Ϥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_1.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                            <p>���饦�ɥ����奢�Ҥˤ�ǧ�ڴ�λ�塢��̤�ǧ�ڵ��ؤǤ��륻���ƥ����ҡʵ쥳��ɼҡˤ��֥�����Хå��᡼��פ����դ���ޤ���
                                                                ���֥�����Хå��᡼��פ������Ͽ����������礬����ޤ���</p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h6 class="box_ttl">5-2.�ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�᡼��ޤ������äˤ���ܿͳ�ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ���֥�����Хå��᡼��פ��Ϥ��ޤ���</p>
                                                            <table class="table mb15">
                                                                <caption>������Хå��᡼��η�̾</caption>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>�᡼��ˤ���ǧ�ξ��</th>
                                                                        <td>ORDER #12345678 - Callback via Email</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���äˤ���ǧ�ξ��</th>
                                                                        <td>ORDER #12345678 - Callback</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p>�ܿͳ�ǧ�μ��ϲ����򤴻��Ȥ���������</p>
                                                            <ul class="ul">
                                                                <li><a href="#previous-callback_via_mail">�᡼��ˤ���ܿͳ�ǧ</a></li>
                                                                <li><a href="#previous-callback_via_phone">���äˤ���ܿͳ�ǧ</a></li>
                                                            </ul>

                                                            <p class="font-bold mt20" id="previous-callback_via_mail">�᡼��ˤ���ܿͳ�ǧ</p>
                                                            <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_15.png" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                            <p> �������������ڡ����ˤƲ����ι��ܤ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_16.png?date=20250626" alt="ɬ�פʹ��ܤ����Ϥ���Submit�פ򥯥�å�"></p>
                                                            <table class="table mb5">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <td>������Ǥ�Ԥθ���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Manager��Member</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>First name</th>
                                                                        <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Surname</th>
                                                                        <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email Verification Code</th>
                                                                        <td>��ۤɥ��ԡ�������email verification code�פ����Ϥ���������</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <p class="font-bold mt20" id="previous-callback_via_phone">���äˤ���ܿͳ�ǧ</p>
                                                            <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_2.png" alt="���ǧ��SSL�μ����������������"></p>
                                                            <p>�������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_3.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                            <p>����ǧ�ڤδ�˾������ꤷ�ޤ��������ֹ�ˤ��ְ㤤���ʤ�����ǧ�Τ�������ư�����ˤ������ǧ�ڤ����ͤˤ������ǧ�ڤ����ʲ���3�ѥ����󤫤餪���Ӥ���������<br>
                                                                ��ɽ������Ƥ��������ֹ�˸�꤬������ϥ��ݡ��ȤޤǤ����̤���������</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>��ư�����ʺ��������ä��������</dt>
                                                                <dd>
                                                                    <p>1.��Please select language for callback�פǡ�Japanese�פ����򤷡���Call me now�ץܥ���򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_4.png" alt="���ǧ��SSL�μ����������������"></p>
                                                                    <p>2.��ư�����ˤ�����ä�ľ���ˤ����äƤ��ޤ��������ø��������Ԥ��ܿͤǤ��뤳�Ȥ��ǧ���뤿��˳�ǧ������(6�����ο���)�����äκǸ�˥��ʥ��󥹤���ޤ��Τǡ�˺��ʤ��褦���򤪴ꤤ�������ޤ���
                                                                        ��⤷����ǧ�����ɤϲ��̾�Ρ�Callback Verification Code��������Ϥ��Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_9.png" alt="���ǧ��SSL�μ����������������"></p>
                                                                </dd>

                                                                <dt><i class="ico ico_square-fill"></i>��ư��������������ꤹ���</dt>
                                                                <dd>
                                                                    <p>1.��Call me later on�ץܥ���򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_5.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                    <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_6.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                    <table class="table mb5">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="w45per">Language for callback</th>
                                                                            <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="w45per">Call me in Schedule call for</th>
                                                                            <td>��������ꤷ�Ƥ���������<br>
                                                                                ��)December 31, 2018, 15:00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="w45per">Extension Number��Ǥ�ա�</th>
                                                                            <td>�����ֹ�����Ϥ���������<br>
                                                                                ��)101</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </dd>
                                                                <dt><i class="ico ico_square-fill"></i>ͭ���б�</dt>
                                                                <dd>
                                                                    <p>1.��Request Manual Callback�ץܥ���򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_7.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                    <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_8.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                    <table class="table mb5">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="w45per">Preferred Date ��Ǥ�ա�</th>
                                                                            <td>���ˤ������Ϥ���������<br>
                                                                                ��)December 31, 2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="w45per">Preferred time from /<br>
                                                                                Preferred time to ��Ǥ�ա�</th>
                                                                            <td>Ϣ����˾��������Ӥ����Ϥ���������<br>
                                                                                ��)8:00��15:00�ǻ��ꤹ����<br>
                                                                                Preferred time from:8:00 / Preferred time to:15:00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="w45per">Language for callback</th>
                                                                            <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="w45per">Extension Number ��Ǥ�ա�</th>
                                                                            <td>�����ֹ�����Ϥ���������<br>
                                                                                ��)101</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </section>
                                                    <section class="box">
                                                        <h5 class="box_ttl">5-3.��������γ�ǧ</h5>
                                                        <div class="box_body">
                                                            <p>
                                                                ���������ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ����ǧ�᡼�뤬�Ϥ��ޤ���<br>
                                                                ����̾����ORDER #12345678 - Address confirmation��
                                                            </p>
                                                            <p>
                                                                �᡼������Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_17.png" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                            <p> �������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����NEXT�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_18.png?date=20250626" alt="��ǧ�����ɤ����Ϥ�����NEXT�פ򥯥�å�"></p>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div>
                                                <p class="font-bold mt40" id="previous-digicert">�ǥ������� �����奢��������ID �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-1.�᡼��ˤ�뾵ǧ���</h6>
                                                        <div class="box_body">
                                                            <p>����������λ�塢SSLȯ�Ը����־�ǧ�᡼��פ����դ���ޤ���
                                                                ����������ǧ�᡼����ʸ��ˤ��뾵ǧ��URL�ؤȥ�������������ǧ��Ȥ�ԤäƤ���������</p>
                                                        </div>
                                                    </section>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-2.���äˤ���ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�������ʤ�ȡ�SSLȯ�Ը�����SSL����Ͽô�����ͤ��Ф��ƿ������Ƴ�ǧ�Τ�������ä�����ޤ���</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a06">6. ���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</h5>
                                            <div class="box_body">
                                                <p class="font-bold" id="previous-secure">�����饦�ɥ����奢 ���ǧ��SSL �ξ��Τ�</p>

                                                <p>�������������ѷ���Ʊ�ճ�ǧ�᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_19.png" alt="OV SSL�μ����������������"></p>
                                                <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Next�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_11.png?date=20250626" alt="OV SSL�μ����������������"></p>
                                                <p>�����ι��ܤ����Ϥ�����I ACCEPT�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_12.png?date=20250626" alt="OV SSL�μ����������������"></p>

                                                <table class="table mb5">
                                                    <tbody>
                                                        <tr>
                                                            <th>FirstName</th>
                                                            <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Surname</th>
                                                            <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>(���餫�������ϺѤߤǤ�)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Phone No</th>
                                                            <td>DUNS�ʥ�С�����Ͽ�����Ѥ��������ֹ�����Ϥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Job Title</th>
                                                            <td>������Ǥ�Ԥ��򿦤򥢥�ե��٥åȤǤ����Ϥ���������<br>��)President</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a07">7.����������³����λ</h5>
                                            <div class="box_body">
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���
                                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                                <p>������Ʊ��Υ����͡���Ǻ���Τ��������ߤȰۤʤ�ץ��Ǥ����Ѥ���Ƥ������ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</p>

                                                <aside id="previous-twoway" class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���ȼ�IP���ɥ쥹����פ�SSL������ˤơ� ��www.�פ��դ��������͡���Ǥ��������ߤ���(�㡧www.example.com)</h6>
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

                                <section id="previous-update_ssl" class="section">
                                    <h4 class="section_ttl" id="link-previous-b">���������μ��</h4>
                                    <div class="section_body">

                                        <div class="serial-box">

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-previous-b01">1.���������򳫻Ϥ��ޤ���</h5>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ���������<em class="font-bold">��SSL�������</em>��ꡢ���������ߤ���������SSL�������<em class="font-bold">�ֹ���������</em>�򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_13.png" alt="���������򳫻Ϥ��ޤ�"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-previous-b02">2.������������Ϥ��Ƥ���������</h5>
                                                <div class="box_body">
                                                    <p class="mb0">������������Ʊ�ͤˡ���<em class="font-bold">CSR����</em>�פ����Ϥ��ޤ���</p>
                                                    <p class="note">�������͡�����ѹ����뤳�ȤϽ���ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_14.png" alt="CSR���������"></p>
                                                    <p class="mb0">³���ơ�<em class="font-bold">SSL��������Ͽô���Ծ���</em>�פ����Ϥξ塢��<em class="font-bold">��ǧ���̤ؿʤ�</em>�פ򥯥�å����Ƥ���������<br>�ʤ�����̤ˤơ������Ϥ�������������򤴳�ǧ�ξ塢��<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                    <p class="note">���ȿ�̾��DUNS��Ͽ����Ρֲ��̾�פȰ��פ��Ƥ���ɬ�פ�����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_12.png" alt="SSL��Ͽ�Ծ���"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 class="box_ttl" id="link-previous-b03">3.ǧ�ں��</h5>
                                                <div class="box_body">

                                                    <ul class="ul">
                                                        <li><a href="#previous-secure02">���饦�ɥ����奢 ���ǧ��SSL �ξ��</a></li>
                                                        <li><a href="#previous-digicert02">�ǥ������� �����奢��������ID �ξ��</a></li>
                                                    </ul>

                                                    <div>
                                                        <p class="font-bold mt20" id="previous-secure02">���饦�ɥ����奢 ���ǧ��SSL �ξ��</p>
                                                        <section class="box">
                                                            <h6 class="box_ttl">3-1.����饤��ǧ��</h6>
                                                            <div class="box_body">
                                                                <p>���饦�ɥ����奢�Ҥ���ʸ�ξ�ǧ��ǧ�᡼�뤬���դ���ޤ���
                                                                    ���������᡼����ʸ��ˤ���URL�إ�����������������˾�ǧ��ǧ�᡼��˵��ܤ���Ƥ����validation code�פ����Ϥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_1.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>

                                                                <p>���饦�ɥ����奢�Ҥˤ�ǧ�ڴ�λ�塢��̤�ǧ�ڵ��ؤǤ��륻���ƥ����ҡʵ쥳��ɼҡˤ��֥�����Хå��᡼��פ����դ���ޤ���
                                                                    ���֥�����Хå��᡼��פ������Ͽ����������礬����ޤ���</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl">3-2.�ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�᡼��ޤ������äˤ���ܿͳ�ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ���֥�����Хå��᡼��פ��Ϥ��ޤ���</p>
                                                                <table class="table mb15">
                                                                    <caption>������Хå��᡼��η�̾</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>�᡼��ˤ���ǧ�ξ��</th>
                                                                        <td>ORDER #12345678 - Callback via Email</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���äˤ���ǧ�ξ��</th>
                                                                        <td>ORDER #12345678 - Callback</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p class="mb0">�ܿͳ�ǧ�μ��ϲ����򤴻��Ȥ���������</p>
                                                                <div class="box_body pl0 pt20 pb30">
                                                                    <ul class="ul">
                                                                        <li><a href="#previous-callback_via_mail_renew">�᡼��ˤ���ܿͳ�ǧ</a></li>
                                                                        <li><a href="#previous-callback_via_phone_renew">���äˤ���ܿͳ�ǧ</a></li>
                                                                    </ul>
                                                                </div>

                                                                <h6 id="previous-callback_via_mail_renew" class="font-bold">�᡼��ˤ���ܿͳ�ǧ</h6>
                                                                <div class="box_body">
                                                                    <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_15.png" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                                    <p> �������������ڡ����ˤƲ����ι��ܤ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_16.png?date=20250626" alt="ɬ�פʹ��ܤ����Ϥ���Submit�פ򥯥�å�"></p>
                                                                    <table class="table mb5">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th>Title</th>
                                                                            <td>������Ǥ�Ԥθ���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Manager��Member</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>First name</th>
                                                                            <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Surname</th>
                                                                            <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Email Verification Code</th>
                                                                            <td>��ۤɥ��ԡ�������email verification code�פ����Ϥ���������</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <h6 id="previous-callback_via_phone_renew" class="font-bold mt20">���äˤ���ܿͳ�ǧ</h6>
                                                                <div class="box_body">
                                                                    <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_2.png" alt="���ǧ��SSL�μ����������������"></p>
                                                                    <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_3.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                                    <p>����ǧ�ڤδ�˾������ꤷ�ޤ��������ֹ�ˤ��ְ㤤���ʤ�����ǧ�Τ�������ư�����ˤ������ǧ�ڤ����ͤˤ������ǧ�ڤ����ʲ���3�ѥ����󤫤餪���Ӥ���������<br>
                                                                        ��ɽ������Ƥ��������ֹ�˸�꤬������ϥ��ݡ��ȤޤǤ����̤���������</p>

                                                                    <div class="block_body">
                                                                        <dl class="dl">
                                                                            <dt><i class="ico ico_square-fill"></i>��ư�����ʺ��������ä��������</dt>
                                                                            <dd>
                                                                                <p>1.��Please select language for callback�פǡ�Japanese�פ����򤷡���Call me now�ץܥ���򥯥�å����Ƥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_4.png" alt="���ǧ��SSL�μ����������������"></p>
                                                                                <p>2.��ư�����ˤ�����ä�ľ���ˤ����äƤ��ޤ��������ø��������Ԥ��ܿͤǤ��뤳�Ȥ��ǧ���뤿��˳�ǧ������(6�����ο���)�����äκǸ�˥��ʥ��󥹤���ޤ��Τǡ�˺��ʤ��褦���򤪴ꤤ�������ޤ���
                                                                                    ��⤷����ǧ�����ɤϲ��̾�Ρ�Callback Verification Code��������Ϥ��Ƥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_9.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                            </dd>

                                                                            <dt><i class="ico ico_square-fill"></i>��ư��������������ꤹ���</dt>
                                                                            <dd>
                                                                                <p>1.��Call me later on�ץܥ���򥯥�å����Ƥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_5.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                                <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_6.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                                <table class="table mb5">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th class="w45per">Language for callback</th>
                                                                                        <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="w45per">Call me in Schedule call for</th>
                                                                                        <td>��������ꤷ�Ƥ���������<br>
                                                                                            ��)December 31, 2018, 15:00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="w45per">Extension Number��Ǥ�ա�</th>
                                                                                        <td>�����ֹ�����Ϥ���������<br>
                                                                                            ��)101</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </dd>

                                                                            <dt><i class="ico ico_square-fill"></i>ͭ���б�</dt>
                                                                            <dd>
                                                                                <p>1.��Request Manual Callback�ץܥ���򥯥�å����Ƥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_7.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                                <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_8.png" alt="���ǧ��SSL�μ����������������"></p>

                                                                                <table class="table mb5">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th class="w45per">Preferred Date ��Ǥ�ա�</th>
                                                                                        <td>���ˤ������Ϥ���������<br>
                                                                                            ��)December 31, 2018</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="w45per">Preferred time from /<br>
                                                                                            Preferred time to ��Ǥ�ա�</th>
                                                                                        <td>Ϣ����˾��������Ӥ����Ϥ���������<br>
                                                                                            ��)8:00��15:00�ǻ��ꤹ����<br>
                                                                                            Preferred time from:8:00 / Preferred time to:15:00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="w45per">Language for callback</th>
                                                                                        <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="w45per">Extension Number ��Ǥ�ա�</th>
                                                                                        <td>�����ֹ�����Ϥ���������<br>
                                                                                            ��)101</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl">3-3.��������γ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>
                                                                    ���������ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ����ǧ�᡼�뤬�Ϥ��ޤ���<br>
                                                                    ����̾����ORDER #12345678 - Address confirmation��
                                                                </p>
                                                                <p>
                                                                    �᡼������Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_17.png" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                                <p> �������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����NEXT�פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_18.png?date=20250626" alt="��ǧ�����ɤ����Ϥ�����NEXT�פ򥯥�å�"></p>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <div>
                                                        <p class="font-bold mt40" id="previous-digicert02">�ǥ������� �����奢��������ID �ξ��</p>
                                                        <section class="box">
                                                            <h6 class="box_ttl">3-1.�᡼��ˤ�뾵ǧ���</h6>
                                                            <div class="box_body">
                                                                <p>����������λ�塢SSLȯ�Ը����־�ǧ�᡼��פ����դ���ޤ���
                                                                    ����������ǧ�᡼����ʸ��ˤ��뾵ǧ��URL�ؤȥ�������������ǧ��Ȥ�ԤäƤ���������</p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h6 class="box_ttl">3-2.���äˤ���ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�������ʤ�ȡ�SSLȯ�Ը�����SSL����Ͽô�����ͤ��Ф��ƿ������Ƴ�ǧ�Τ�������ä�����ޤ���</p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h6 class="box_ttl" id="link-previous-b04">4. ���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</h6>
                                                <div class="box_body">
                                                    <p class="font-bold" id="previous-secure">�����饦�ɥ����奢 ���ǧ��SSL �ξ��Τ�</p>

                                                    <p>�������������ѷ���Ʊ�ճ�ǧ�᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_19.png" alt="OV SSL�μ����������������"></p>
                                                    <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Next�פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_11.png?date=20250626" alt="OV SSL�μ����������������"></p>
                                                    <p>�����ι��ܤ����Ϥ�����I ACCEPT�פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_12.png?date=20250626" alt="OV SSL�μ����������������"></p>

                                                    <table class="table mb5">
                                                        <tbody>
                                                        <tr>
                                                            <th>FirstName</th>
                                                            <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Surname</th>
                                                            <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>(���餫�������ϺѤߤǤ�)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Phone No</th>
                                                            <td>DUNS�ʥ�С�����Ͽ�����Ѥ��������ֹ�����Ϥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Job Title</th>
                                                            <td>������Ǥ�Ԥ��򿦤򥢥�ե��٥åȤǤ����Ϥ���������<br>��)President</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </section>

                                            <section class="box">
                                                <h6 class="box_ttl" id="link-previous-b05">5.������³����λ</h6>
                                                <div class="box_body">
                                                    <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���
                                                        ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
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


                            <div class="toc-list mt20">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-a01">1.��������������ǧ�ں�Ȥν���</a></li>
                                            <li><a href="#link-a02">2.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-a04">4.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-a05">5.ǧ�ں��</a></li>
                                            <li><a href="#link-a06">6.���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</a></li>
                                            <li><a href="#link-a07">7.����������³����λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">���������μ��</a>
                                        <ol>
                                            <li><a href="#link-b01">1.���������򳫻Ϥ��ޤ���</a></li>
                                            <li><a href="#link-b02">2.������������Ϥ��Ƥ���������</a></li>
                                            <li><a href="#link-b03">3.ǧ�ں��</a></li>
                                            <li><a href="#link-b04">4.���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</a></li>
                                            <li><a href="#link-b05">5.������³����λ</a></li>
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
                                            <h6 class="box_ttl" id="link-a01">1.��������������ǧ�ں�Ȥν����ʥ��饦�ɥ����奢 ���ǧ��SSL�ξ��Τߡ�</h6>
                                            <div class="box_body">
                                                <p>��������ݤ˲�����ɬ��ɬ�פȤʤ�ޤ��Τǻ����ˤ��������ꤤ�������ޤ���</p>

                                                <div class="block_body">
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>DUNS(����)�ʥ�С�</dt>
                                                        <dd>
                                                            <p>��Ȥ��ºߤ��뤳�Ȥ򿳺�����ݤ�DUNS(����)�ʥ�С������Ѥ��뤿�ᡢ������DUNS�ʥ�С��μ�����ԤäƤ���������
                                                                ������ˡ�ˤĤ��Ƥϲ����򤴻��Ȥ���������</p>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php">DUNS�ʥ�С��μ�����ˡ</a></li>
                                                            </ul>

                                                        </dd>

                                                        <dt><i class="ico ico_square-fill"></i>DUNS(����)��Ͽ����</dt>
                                                        <dd>
                                                            <p>DUNS��Ͽ�����SSL�ο������󤬰��פ��ʤ���硢�������ȯ�Ԥ��Ǥ��ޤ���<br>
                                                               ����3���ܤ���������Ͽ����Ƥ��뤫��ɬ������ǧ����������<br>
                                                               ��Ͽ���󤬸��ߤξ���Ȱۤʤ���ϡ�DUNS��Ͽ������ѹ�����������SSL�μ���������ԤäƤ���������<br>
                                                               (��Ͽ���󤬸Ť������޻�ɽ���β��̾���ۤʤ�ʤ�)</p>
                                                            <p class="note">��DUNS��Ͽ�����SSL�ο����������㤬����ȡ����������μ�³�����SSLȯ�Ը���ꤪ���Ͱ��˳�ǧ�᡼�뤬�Ϥ���礬����ޤ���</p>
                                                            <table class="table mb5">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w45per">���̾</th>
                                                                    <td>DUNS����Ͽ����Ƥ���Ѹ���̾</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">�����</th>
                                                                    <td>DUNS����Ͽ����Ƥ���Ѹ콻��</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">�����ֹ�</th>
                                                                    <td>DUNS����Ͽ����Ƥ��������ֹ�</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php#link-c">DUNS��Ͽ����γ�ǧ��ˡ</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </section>



                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a02">2.���������򳫻Ϥ��ޤ���</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ��������Ρ�SSL������פ�ꡢ���������ߤ���������SSL������Ρ�<em class="font-bold">��������</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_10.png?date=2410" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a03">3.�����͡������ꡦCSR��������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>���������ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���<em class="font-bold">��Ͽ�Ծ������ϲ��̤ؿʤ�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_11.png?date=2410" alt="�����͡���ڤ�CSR��������Ϥ��ޤ�"></p>
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
                                            <h6 class="box_ttl" id="link-a04">4.SSL��������Ͽô���Ծ�������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p>�ե�����˱�äơ��ʲ��ξ�������Ϥ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_12.png?date=2410" alt="��Ͽ�Ծ�������Ϥ��ޤ�"></p>

                                                <table class="table mb5">
                                                    <caption>SSL����Ͽô���Ծ���</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30per">�ȿ�̾</th>
                                                        <td>�����ȿ�̾��������ʸ̾�ΤǤ����Ϥ���������<br>
                                                            DUNS��Ͽ����Ρֲ��̾�פȰ��פ��Ƥ���ɬ�פ�����ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="w30per">DUNS�ʥ�С��ʢ�1��</th>
                                                        <td>9��ο��������Ϥ���������</td>
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
                                                    <caption>ǧ����ˡ</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>��ǧ�ѥ᡼�륢�ɥ쥹(��2)</th>
                                                        <td>��SSLȯ�Ը���������뾵ǧ�᡼���������뤿��Υ᡼�륢�ɥ쥹�����򤷤Ƥ���������</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p class="note">��1 ���饦�ɥ����奢 ���ǧ��SSL �ξ��Τ����Ϥ�ɬ�פʹ��ܤǤ���</p>
                                                <p class="note">��2 �����ˡ�������ǽ�ʥ᡼�륢�ɥ쥹���Ѱդ�������ɬ�פ�����ޤ���</p>
                                                <p>���Ƥ����Ϥ��������ޤ����顢<em class="font-bold">�ֳ�ǧ���̤ؿʤ��</em>�򥯥�å����Ƥ����������ʤ�����̤ˤơ������Ϥ�������������򤴳�ǧ�ξ塢<em class="font-bold">�ּ��������򤹤��</em>�򥯥�å����Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a05">5.ǧ�ں��</h6>
                                            <div class="box_body">
                                                <ul class="ul">
                                                    <li><a href="#secure">���饦�ɥ����奢 ���ǧ��SSL �ξ��</a></li>
                                                    <li><a href="#digicert">�ǥ������� �����奢��������ID �ξ��</a></li>
                                                </ul>
                                                <div>
                                                    <p class="font-bold mt20" id="secure">���饦�ɥ����奢 ���ǧ��SSL �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-1.����饤��ǧ��</h6>
                                                        <div class="box_body">
                                                            <p>���饦�ɥ����奢�Ҥ���ʸ�ξ�ǧ��ǧ�᡼�뤬���դ���ޤ���
                                                                ���������᡼����ʸ��ˤ���URL�إ�����������������˾�ǧ��ǧ�᡼��˵��ܤ���Ƥ����validation code�פ����Ϥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_1.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                            <p>���饦�ɥ����奢�Ҥˤ�ǧ�ڴ�λ�塢��̤�ǧ�ڵ��ؤǤ��륻���ƥ����ҡʵ쥳��ɼҡˤ��֥�����Хå��᡼��פ����դ���ޤ���
                                                                ���֥�����Хå��᡼��פ������Ͽ����������礬����ޤ���</p>
                                                        </div>
                                                    </section>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-2.�ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�᡼��ޤ������äˤ���ܿͳ�ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ���֥�����Хå��᡼��פ��Ϥ��ޤ���</p>
                                                            <table class="table mb15">
                                                                <caption>������Хå��᡼��η�̾</caption>
                                                                <tbody>
                                                                <tr>
                                                                    <th>�᡼��ˤ���ǧ�ξ��</th>
                                                                    <td>ORDER #12345678 - Callback via Email</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���äˤ���ǧ�ξ��</th>
                                                                    <td>ORDER #12345678 - Callback</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <p class="mb0">�ܿͳ�ǧ�μ��ϲ����򤴻��Ȥ���������</p>
                                                            <div class="box_body pl0 pt20 pb30">
                                                                <ul class="ul">
                                                                    <li><a href="#callback_via_mail">�᡼��ˤ���ܿͳ�ǧ</a></li>
                                                                    <li><a href="#callback_via_phone">���äˤ���ܿͳ�ǧ</a></li>
                                                                </ul>
                                                            </div>

                                                            <h6 id="callback_via_mail" class="font-bold">�᡼��ˤ���ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_15.png?date=2410" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                                <p> �������������ڡ����ˤƲ����ι��ܤ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_16.png?date=20250626" alt="ɬ�פʹ��ܤ����Ϥ���Submit�פ򥯥�å�"></p>
                                                                <table class="table mb5">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <td>������Ǥ�Ԥθ���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Manager��Member</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>First name</th>
                                                                        <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Surname</th>
                                                                        <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email Verification Code</th>
                                                                        <td>��ۤɥ��ԡ�������email verification code�פ����Ϥ���������</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <h6 id="callback_via_phone" class="font-bold mt20">���äˤ���ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_2.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>
                                                                <p>�������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_3.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                                <p>����ǧ�ڤδ�˾������ꤷ�ޤ��������ֹ�ˤ��ְ㤤���ʤ�����ǧ�Τ�������ư�����ˤ������ǧ�ڤ����ͤˤ������ǧ�ڤ����ʲ���3�ѥ����󤫤餪���Ӥ���������<br>
                                                                    ��ɽ������Ƥ��������ֹ�˸�꤬������ϥ��ݡ��ȤޤǤ����̤���������</p>

                                                                <div class="block_body">
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>��ư�����ʺ��������ä��������</dt>
                                                                        <dd>
                                                                            <p>1.��Please select language for callback�פǡ�Japanese�פ����򤷡���Call me now�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_4.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>
                                                                            <p>2.��ư�����ˤ�����ä�ľ���ˤ����äƤ��ޤ��������ø��������Ԥ��ܿͤǤ��뤳�Ȥ��ǧ���뤿��˳�ǧ������(6�����ο���)�����äκǸ�˥��ʥ��󥹤���ޤ��Τǡ�˺��ʤ��褦���򤪴ꤤ�������ޤ���
                                                                                ��⤷����ǧ�����ɤϲ��̾�Ρ�Callback Verification Code��������Ϥ��Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_9.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                        </dd>

                                                                        <dt><i class="ico ico_square-fill"></i>��ư��������������ꤹ���</dt>
                                                                        <dd>
                                                                            <p>1.��Call me later on�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_5.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_6.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <table class="table mb5">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th class="w45per">Language for callback</th>
                                                                                    <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Call me in Schedule call for</th>
                                                                                    <td>��������ꤷ�Ƥ���������<br>
                                                                                        ��)December 31, 2018, 15:00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Extension Number��Ǥ�ա�</th>
                                                                                    <td>�����ֹ�����Ϥ���������<br>
                                                                                        ��)101</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </dd>

                                                                        <dt><i class="ico ico_square-fill"></i>ͭ���б�</dt>
                                                                        <dd>
                                                                            <p>1.��Request Manual Callback�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_7.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_8.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <table class="table mb5">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th class="w45per">Preferred Date ��Ǥ�ա�</th>
                                                                                    <td>���ˤ������Ϥ���������<br>
                                                                                        ��)December 31, 2018</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Preferred time from /<br>
                                                                                        Preferred time to ��Ǥ�ա�</th>
                                                                                    <td>Ϣ����˾��������Ӥ����Ϥ���������<br>
                                                                                        ��)8:00��15:00�ǻ��ꤹ����<br>
                                                                                        Preferred time from:8:00 / Preferred time to:15:00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Language for callback</th>
                                                                                    <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Extension Number ��Ǥ�ա�</th>
                                                                                    <td>�����ֹ�����Ϥ���������<br>
                                                                                        ��)101</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h6 class="box_ttl">5-3.��������γ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>
                                                                ���������ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ����ǧ�᡼�뤬�Ϥ��ޤ���<br>
                                                                ����̾����ORDER #12345678 - Address confirmation��
                                                            </p>
                                                            <p>
                                                                �᡼������Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_17.png?date=2410" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                            <p> �������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����NEXT�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_18.png?date=20250626" alt="��ǧ�����ɤ����Ϥ�����NEXT�פ򥯥�å�"></p>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div>
                                                    <p class="font-bold mt40" id="digicert">�ǥ������� �����奢��������ID �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-1.�᡼��ˤ�뾵ǧ���</h6>
                                                        <div class="box_body">
                                                            <p>����������λ�塢SSLȯ�Ը����־�ǧ�᡼��פ����դ���ޤ���
                                                                ����������ǧ�᡼����ʸ��ˤ��뾵ǧ��URL�ؤȥ�������������ǧ��Ȥ�ԤäƤ���������</p>
                                                        </div>
                                                    </section>
                                                    <section class="box">
                                                        <h6 class="box_ttl">5-2.���äˤ���ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�������ʤ�ȡ�SSLȯ�Ը�����SSL����Ͽô�����ͤ��Ф��ƿ������Ƴ�ǧ�Τ�������ä�����ޤ���</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a06">6. ���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</h6>
                                            <div class="box_body">
                                                <p class="font-bold" id="secure">�����饦�ɥ����奢 ���ǧ��SSL �ξ��Τ�</p>

                                                <p>�������������ѷ���Ʊ�ճ�ǧ�᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_19.png?date=2410" alt="OV SSL�μ����������������"></p>
                                                <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Next�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_11.png?date=20250626" alt="OV SSL�μ����������������"></p>
                                                <p>�����ι��ܤ����Ϥ�����I ACCEPT�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_12.png?date=20250626" alt="OV SSL�μ����������������"></p>

                                                <table class="table mb5">
                                                    <tbody>
                                                    <tr>
                                                        <th>FirstName</th>
                                                        <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Surname</th>
                                                        <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>(���餫�������ϺѤߤǤ�)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Phone No</th>
                                                        <td>DUNS�ʥ�С�����Ͽ�����Ѥ��������ֹ�����Ϥ���������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Job Title</th>
                                                        <td>������Ǥ�Ԥ��򿦤򥢥�ե��٥åȤǤ����Ϥ���������<br>��)President</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a07">7.����������³����λ</h6>
                                            <div class="box_body">
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���
                                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
                                                <p>������Ʊ��Υ����͡���Ǻ���Τ��������ߤȰۤʤ�ץ��Ǥ����Ѥ���Ƥ������ϡ�ȯ�Ԥ���72���ְ���ǤΤ����ѳ��ϤȤʤ�ޤ���</p>

                                                <aside id="twoway" class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���ȼ�IP���ɥ쥹����פ�SSL������ˤơ� ��www.�פ��դ��������͡���Ǥ��������ߤ���(�㡧www.example.com)</h6>
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
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_13.png?date=2410" alt="���������򳫻Ϥ��ޤ�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.������������Ϥ��Ƥ���������</h6>
                                            <div class="box_body">
                                                <p class="mb0">������������Ʊ�ͤˡ���<em class="font-bold">CSR����</em>�פ����Ϥ��ޤ���</p>
                                                <p class="note">�������͡�����ѹ����뤳�ȤϽ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_14.png?date=2410" alt="CSR���������"></p>
                                                <p class="mb0">³���ơ�<em class="font-bold">SSL��������Ͽô���Ծ���</em>�פ����Ϥξ塢��<em class="font-bold">��ǧ���̤ؿʤ�</em>�פ򥯥�å����Ƥ���������<br>�ʤ�����̤ˤơ������Ϥ�������������򤴳�ǧ�ξ塢��<em class="font-bold">���������򤹤�</em>�פ򥯥�å����Ƥ���������</p>
                                                <p class="note">���ȿ�̾��DUNS��Ͽ����Ρֲ��̾�פȰ��פ��Ƥ���ɬ�פ�����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_12.png?date=2410" alt="SSL��Ͽ�Ծ���"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.ǧ�ں��</h6>
                                            <div class="box_body">

                                                <ul class="ul">
                                                    <li><a href="#secure02">���饦�ɥ����奢 ���ǧ��SSL �ξ��</a></li>
                                                    <li><a href="#digicert02">�ǥ������� �����奢��������ID �ξ��</a></li>
                                                </ul>

                                                <div>
                                                    <p class="font-bold mt20" id="secure02">���饦�ɥ����奢 ���ǧ��SSL �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">3-1.����饤��ǧ��</h6>
                                                        <div class="box_body">
                                                            <p>���饦�ɥ����奢�Ҥ���ʸ�ξ�ǧ��ǧ�᡼�뤬���դ���ޤ���
                                                                ���������᡼����ʸ��ˤ���URL�إ�����������������˾�ǧ��ǧ�᡼��˵��ܤ���Ƥ����validation code�פ����Ϥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_1.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>

                                                            <p>���饦�ɥ����奢�Ҥˤ�ǧ�ڴ�λ�塢��̤�ǧ�ڵ��ؤǤ��륻���ƥ����ҡʵ쥳��ɼҡˤ��֥�����Хå��᡼��פ����դ���ޤ���
                                                                ���֥�����Хå��᡼��פ������Ͽ����������礬����ޤ���</p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h6 class="box_ttl">3-2.�ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�᡼��ޤ������äˤ���ܿͳ�ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ���֥�����Хå��᡼��פ��Ϥ��ޤ���</p>
                                                            <table class="table mb15">
                                                                <caption>������Хå��᡼��η�̾</caption>
                                                                <tbody>
                                                                <tr>
                                                                    <th>�᡼��ˤ���ǧ�ξ��</th>
                                                                    <td>ORDER #12345678 - Callback via Email</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���äˤ���ǧ�ξ��</th>
                                                                    <td>ORDER #12345678 - Callback</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <p class="mb0">�ܿͳ�ǧ�μ��ϲ����򤴻��Ȥ���������</p>
                                                            <div class="box_body pl0 pt20 pb30">
                                                                <ul class="ul">
                                                                    <li><a href="#callback_via_mail_renew">�᡼��ˤ���ܿͳ�ǧ</a></li>
                                                                    <li><a href="#callback_via_phone_renew">���äˤ���ܿͳ�ǧ</a></li>
                                                                </ul>
                                                            </div>

                                                            <h6 id="callback_via_mail_renew" class="font-bold">�᡼��ˤ���ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_15.png?date=2410" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                                <p> �������������ڡ����ˤƲ����ι��ܤ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_16.png?date=20250626" alt="ɬ�פʹ��ܤ����Ϥ���Submit�פ򥯥�å�"></p>
                                                                <table class="table mb5">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <td>������Ǥ�Ԥθ���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Manager��Member</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>First name</th>
                                                                        <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Surname</th>
                                                                        <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email Verification Code</th>
                                                                        <td>��ۤɥ��ԡ�������email verification code�פ����Ϥ���������</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <h6 id="callback_via_phone_renew" class="font-bold mt20">���äˤ���ܿͳ�ǧ</h6>
                                                            <div class="box_body">
                                                                <p>�֥�����Хå��᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_2.png" alt="���ǧ��SSL�μ����������������"></p>
                                                                <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Submit�פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_3.png?date=20250626" alt="���ǧ��SSL�μ����������������"></p>
                                                                <p>����ǧ�ڤδ�˾������ꤷ�ޤ��������ֹ�ˤ��ְ㤤���ʤ�����ǧ�Τ�������ư�����ˤ������ǧ�ڤ����ͤˤ������ǧ�ڤ����ʲ���3�ѥ����󤫤餪���Ӥ���������<br>
                                                                    ��ɽ������Ƥ��������ֹ�˸�꤬������ϥ��ݡ��ȤޤǤ����̤���������</p>

                                                                <div class="block_body">
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>��ư�����ʺ��������ä��������</dt>
                                                                        <dd>
                                                                            <p>1.��Please select language for callback�פǡ�Japanese�פ����򤷡���Call me now�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_4.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>
                                                                            <p>2.��ư�����ˤ�����ä�ľ���ˤ����äƤ��ޤ��������ø��������Ԥ��ܿͤǤ��뤳�Ȥ��ǧ���뤿��˳�ǧ������(6�����ο���)�����äκǸ�˥��ʥ��󥹤���ޤ��Τǡ�˺��ʤ��褦���򤪴ꤤ�������ޤ���
                                                                                ��⤷����ǧ�����ɤϲ��̾�Ρ�Callback Verification Code��������Ϥ��Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_9.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                        </dd>

                                                                        <dt><i class="ico ico_square-fill"></i>��ư��������������ꤹ���</dt>
                                                                        <dd>
                                                                            <p>1.��Call me later on�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_5.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_6.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <table class="table mb5">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th class="w45per">Language for callback</th>
                                                                                    <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Call me in Schedule call for</th>
                                                                                    <td>��������ꤷ�Ƥ���������<br>
                                                                                        ��)December 31, 2018, 15:00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Extension Number��Ǥ�ա�</th>
                                                                                    <td>�����ֹ�����Ϥ���������<br>
                                                                                        ��)101</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </dd>

                                                                        <dt><i class="ico ico_square-fill"></i>ͭ���б�</dt>
                                                                        <dd>
                                                                            <p>1.��Request Manual Callback�ץܥ���򥯥�å����Ƥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_7.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <p>2.����˾���������Ϥ���ե����बɽ������ޤ��Τǡ��ʲ������Ƥ����Ϥ���������</p>
                                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_8.png?date=2410" alt="���ǧ��SSL�μ����������������"></p>

                                                                            <table class="table mb5">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th class="w45per">Preferred Date ��Ǥ�ա�</th>
                                                                                    <td>���ˤ������Ϥ���������<br>
                                                                                        ��)December 31, 2018</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Preferred time from /<br>
                                                                                        Preferred time to ��Ǥ�ա�</th>
                                                                                    <td>Ϣ����˾��������Ӥ����Ϥ���������<br>
                                                                                        ��)8:00��15:00�ǻ��ꤹ����<br>
                                                                                        Preferred time from:8:00 / Preferred time to:15:00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Language for callback</th>
                                                                                    <td>��Japanese�פ����򤷤Ƥ���������</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="w45per">Extension Number ��Ǥ�ա�</th>
                                                                                    <td>�����ֹ�����Ϥ���������<br>
                                                                                        ��)101</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h6 class="box_ttl">3-3.��������γ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>
                                                                ���������ǧ�Τ��ᡢ�����ƥ����ҡʵ쥳��ɼҡˤ����ǧ�᡼�뤬�Ϥ��ޤ���<br>
                                                                ����̾����ORDER #12345678 - Address confirmation��
                                                            </p>
                                                            <p>
                                                                �᡼������Ƥ򤴳�ǧ�ξ塢��email verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_17.png?date=2410" alt="�᡼��˵��ܤ���Ƥ���URL�򥯥�å�"></p>

                                                            <p> �������������ڡ����ˤ���ۤɥ��ԡ�������email verification code�פ����Ϥ�����NEXT�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_order_ssl_ov_18.png?date=20250626" alt="��ǧ�����ɤ����Ϥ�����NEXT�פ򥯥�å�"></p>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div>
                                                    <p class="font-bold mt40" id="digicert02">�ǥ������� �����奢��������ID �ξ��</p>
                                                    <section class="box">
                                                        <h6 class="box_ttl">3-1.�᡼��ˤ�뾵ǧ���</h6>
                                                        <div class="box_body">
                                                            <p>����������λ�塢SSLȯ�Ը����־�ǧ�᡼��פ����դ���ޤ���
                                                                ����������ǧ�᡼����ʸ��ˤ��뾵ǧ��URL�ؤȥ�������������ǧ��Ȥ�ԤäƤ���������</p>
                                                        </div>
                                                    </section>
                                                    <section class="box">
                                                        <h6 class="box_ttl">3-2.���äˤ���ܿͳ�ǧ</h6>
                                                        <div class="box_body">
                                                            <p>�������ʤ�ȡ�SSLȯ�Ը�����SSL����Ͽô�����ͤ��Ф��ƿ������Ƴ�ǧ�Τ�������ä�����ޤ���</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4. ���ѷ����Ʊ�դȿ�����Ǥ�Գ�ǧ������</h6>
                                            <div class="box_body">
                                                <p class="font-bold" id="secure">�����饦�ɥ����奢 ���ǧ��SSL �ξ��Τ�</p>

                                                <p>�������������ѷ���Ʊ�ճ�ǧ�᡼��פ˵��ܤ����Ƥ򤴳�ǧ�ξ塢��verification code�פ򥳥ԡ������᡼��˵��ܤ���Ƥ���URL�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_19.png?date=2410" alt="OV SSL�μ����������������"></p>
                                                <p>�������������ڡ����ˤ���ۤɥ��ԡ�������verification code�פ����Ϥ�����Next�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_11.png?date=20250626" alt="OV SSL�μ����������������"></p>
                                                <p>�����ι��ܤ����Ϥ�����I ACCEPT�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_12.png?date=20250626" alt="OV SSL�μ����������������"></p>

                                                <table class="table mb5">
                                                    <tbody>
                                                    <tr>
                                                        <th>FirstName</th>
                                                        <td>������Ǥ�Ԥ�̾���򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Taro</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Surname</th>
                                                        <td>������Ǥ�Ԥ��Ļ��򥢥�ե��٥åȤǤ����Ϥ���������<br>��)Yamada</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>(���餫�������ϺѤߤǤ�)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Phone No</th>
                                                        <td>DUNS�ʥ�С�����Ͽ�����Ѥ��������ֹ�����Ϥ���������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Job Title</th>
                                                        <td>������Ǥ�Ԥ��򿦤򥢥�ե��٥åȤǤ����Ϥ���������<br>��)President</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b05">5.������³����λ</h6>
                                            <div class="box_body">
                                                <p>SSLȯ�Ը��Ǥο�������λ����SSL������ȯ�Ԥ���ޤ����顢���Ҥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���
                                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ؤ�Ϣ���ޤ��Τǡ����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���</p>
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