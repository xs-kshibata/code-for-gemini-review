<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress�������ƥ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä����Ѥ�WordPress�ˤ����ơ��Ƽ�ġ�����Ф���񳰤���Υ������������¤䡢�ѥ�����������깶����ɻߤʤɡ��������ƥ��򶯲������WordPress�������ƥ�����פΤ�����Ǥ���">

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

                        <h3 class="sub-ttl">WordPress�������ƥ�����</h3>

                        <div class="supportTabArea">
                            <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                                <!-- ��ѥͥ� -->
                                <div class="supportTabContents">
                                    <div class="toc-list">
                                        <p class="toc-list--head">�ܼ�</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">WordPress�������ƥ�����</a></li>
                                            <li><a href="#link-previous-b">�񳰥���������������</a>
                                                <ol>
                                                    <li><a href="#link-previous-b01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-previous-b02">2.�񳰥����������¥�˥塼��</a></li>
                                                    <li><a href="#link-previous-b03">3.����������ѹ�</a></li>
                                                    <li><a href="#link-previous-b04">4.�ۥ磻�ȥꥹ�Ȥ�����</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-c">�������Բ����������</a>
                                                <ol>
                                                    <li><a href="#link-previous-c01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-previous-c02">2.�������Բ�����¥�˥塼��</a></li>
                                                    <li><a href="#link-previous-c03">3.����������ѹ�</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-d">�����ȡ��ȥ�å��Хå���������</a>
                                                <ol>
                                                    <li><a href="#link-previous-d01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-previous-d02">2.�����ȡ��ȥ�å��Хå����������˥塼��</a></li>
                                                    <li><a href="#link-previous-d03">3.����������ѹ�</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">WordPress�������ƥ�����</h4>
                                        <div class="section_body">
                                            <p>�ܵ�ǽ�ϡ������Ѥ�WordPress�ˤ����ơ��Ƽ�ġ�����Ф���񳰤������³�����¤����ꡢ�ѥ����������(�֥롼�ȥե����������å�)�ˤ���軰�ԤΥ�������ɻߤ���ʤɡ������ʥ����������Ф��륻�����ƥ��򶯲����뵡ǽ�Ǥ���</p>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-b">�񳰥���������������</h4>
                                        <div class="section_body">
                                            <p>�ܵ�ǽ�Ǥϡ������Τ褦��WordPress��ǽ�ؤι񳰤���Υ������������¤��뤳�Ȥǡ������ʥ������DDoS�����Ƨ����Ȥʤ뤳�Ȥ��ɤ���WordPress�����ȤΥ������ƥ�����夵���뤳�Ȥ��Ǥ��ޤ���</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>���å���ܡ��� ������������</dt>
                                                <dd>
                                                    <p class="mb0">���å���ܡ��ɤ��Ф���񳰤������³�����¤��ޤ���</p>
                                                    <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���<br>
                                                        ���¤���������ϸ��̤�IP���ɥ쥹���¤�Basicǧ�ڤ�ԤäƤ���������</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>�������������¤����ս�</p>
                                                        <ul class="ul mb0">
                                                            <li>/wp-admin �� ���å���ܡ��� �Υե����</li>
                                                            <li>/wp-login.php �� ���å���ܡ��� ��������˥�����������ե�����</li>
                                                        </ul>
                                                    </div>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>����OFF(̵��)���Ρ�REST API �����������¡פȤ�Ϣư�ˤĤ���</p>
                                                        <p class="mb0">
                                                            WordPress �С������5.0�ʹߤǤϵ�������Ƥˡ�REST API�פ���Ѥ��뤿�ᡢ�񳰤���WordPress�����Ѥ����硢
                                                            �֥��å���ܡ��� �����������¡פȤȤ�ˡ�REST API �����������¡פ��OFF(̵��)�פˤ���ɬ�פ�����ޤ���<br>
                                                            <br>
                                                            �֥��å���ܡ��� �����������¡פ��OFF(̵��)�פ��ѹ������硢��REST API �����������¡פ�Ʊ���ˡ�OFF(̵��)�פ��ѹ����ޤ���
                                                        </p>
                                                    </div>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>XML-RPC API ������������</dt>
                                                <dd>
                                                    <p class="mb0">���ޡ��ȥե��󥢥ץ�䳰�������ƥफ�顢��⡼�Ȥǵ�������Ƥ�����Υ��åץ��ɤ�Ԥ��ݤ����Ѥ�����XML-RPC WordPress API�פ��Ф���񳰵ڤӰ����ι���ۥ��ƥ��󥰥����ӥ��Ķ��Υ��ɥ쥹�������³�����¤��ޤ���<br>
                                                        �ץ饰�����Jetpack by WordPress.com�פˤ�륢�����������¤��оݳ��Ǥ���</p>
                                                    <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                    <p class="note">���񳰤Υ����С��������XML-RPC WordPress API�פ����Ѥ������ϡ�OFF�פ����ꤹ��ȤȤ�ˡ���Disable XML-RPC Pingback�פʤɤΡ���XML-RPC WordPress API�פؤ��������������к���Ԥ��ץ饰�������̤˥��󥹥ȡ��뤷�Ƥ���������
                                                    </p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>�������������¤����ս�</p>
                                                        <ul class="ul mb0">
                                                            <li>/xmlrpc.php �� XML-RPC WordPress API (�ե�����)</li>
                                                        </ul>
                                                    </div>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>REST API ������������</dt>
                                                <dd>
                                                    <p class="mb0">��REST API�פ��Ф���񳰤������³�����¤��ޤ���<br>�ץ饰�����Jetpack by WordPress.com�פˤ�륢�����������¤��оݳ��Ǥ���</p>
                                                    <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>�������������¤����ս�</p>
                                                        <ul class="ul mb0">
                                                            <li>/wp-json �� REST API�����������˴ޤޤ��URL</li>
                                                        </ul>
                                                    </div>
                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                �񳰤���WordPress �С������5.0�ʹߤ����Ѥξ�硢�ܵ�ǽ���OFF(̵��)�פˤ��Ƥ����������ܵ�ǽ���ON(ͭ��)�פˤ���ȡ��������Խ�����¸���Ԥ��ʤ���礬����ޤ���
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>wlwmanifest.xml ������������</dt>
                                                <dd>
                                                    <p class="mb0">��Windows Live Writer�פ����Ѥ��Ƶ������������Ƥ��뤿��ξ��󤬵��Ҥ���Ƥ���<br>��wlwmanifest.xml�ץե�������Ф���񳰤������³�����¤��ޤ���</p>
                                                    <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                    <p class="note">���񳰤Υ����С��������Windows Live Writer�פ����Ѥ��Ƶ������������Ƥ�����ϡ�<br>�ܵ�ǽ���OFF(̵��)�פ��ѹ����Ƥ���������</p>
                                                    <div class="border border_gray">
                                                        <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>�������������¤����ս�</p>
                                                        <ul class="ul mb0">
                                                            <li>/wlwmanifest.xml �� Windows Live Writer���ѻ��˥�����������ե�����</li>
                                                        </ul>
                                                    </div>
                                                </dd>
                                            </dl>

                                            <p class="mt50">������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�פǤ������ʲ������ƤϤޤ��硢������OFF(̵��)�פ��ѹ����Ƥ���������</p>
                                            <ul class="ul mb50">
                                                <li>
                                                    �񳰤˺߽������ʤɡ��񳰤���Υ���������ɬ�פʾ��
                                                </li>
                                                <li>
                                                    ���⤫�����Ѥ��Ƥ��뤬�������ƥ��ǹ񳰤���Υ��������Ȥ��Ƹ�ǧ���졢WordPress�δ����ԥġ���ؤΥ������������¤���Ƥ��ޤä����
                                                </li>
                                                <li>
                                                    CloudFlare(���饦�ɥե쥢)�������������С����ͳ���ƥ������������褦�ʥ����ӥ������Ѥ��Ƥ��ơ���ͳ���륵���С����ܵ�ǽ�����¤˳������Ƥ��ޤä����
                                                </li>
                                            </ul>

                                            <div class="serial-box mb10">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b01">1.WordPress�������ƥ������˥塼��</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPress�������ƥ������˥塼�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b02">2.�񳰥����������¥�˥塼��</h6>
                                                    <div class="box_body">
                                                        <p>���̤����ܤ����塢���֥�˥塼���ֹ񳰥���������������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_2.png?date=20250124" alt="�񳰥���������������򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b03">3.����������ѹ�</h6>
                                                    <div class="box_body">
                                                        <p>���ޤΤ褦�ʲ��̤�ɽ������ޤ����顢������ѹ����뵡ǽ�ˤ����ơ����ߤ�����򤴳�ǧ�ξ塢��¦�ˤ���饸���ܥ���Τ����줫�����򤷡����ꤹ��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_3.png?date=250409" alt="����������ѹ�"></p>
                                                        <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b04">4.�ۥ磻�ȥꥹ�Ȥ�����</h6>
                                                    <div class="box_body">
                                                        <p>�����������¤���򤹤�ۥ磻�ȥꥹ�Ȥ����ꤹ�뤳�Ȥ��ǽ�Ǥ���</p>
                                                        <p>�֥ۥ磻�ȥꥹ�ȡפΡ��ѹ��פ���������̤˥���������������˾��IP���ɥ쥹��1��1���ɥ쥹����Ͽ���Ƥ���������</p>
                                                        <p>
                                                            �ޤ���IP���ɥ쥹�γƥ����ƥåȤ˥磻��ɥ�����(*)����Ѥ��ơ�������ϰϤ�ޤȤ�ƻ��ꤹ�뤳�Ȥ��ǽ�Ǥ���<br>
                                                            ���111.111.111.*
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_whlist_1.png" alt="�ۥ磻�ȥꥹ�ȤΡ��ѹ��פ򥯥�å�"></p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_whlist_2.png" alt="�ۥ磻�ȥꥹ�Ȥ�����"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->
                                            <aside class="msg msg_caution mt30">
                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>�񳰤��饢�������򤵤����������ͭ���פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���<br>
                                                            ���¤���������ϡ����̤�IP���ɥ쥹���¤�BASICǧ�ڤʤɤ�ԤäƤ���������
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-c">�������Բ����������</h4>
                                        <div class="section_body">
                                            <p>�ܵ�ǽ�ϡ�û���֤�Ϣ³���ƥ��������(����)���Ԥ�줿���˥������������¤��뵡ǽ�Ǥ���<br>
                                                �ѥ����������(�֥롼�ȥե����������å�)�ˤ�����������������ɻߤ��뤳�Ȥ��Ǥ��ޤ���</p>

                                            <p class="note">�������������¤ϡ����¤���Ƥ���24���ָ�˲������ޤ���</p>

                                            <p>������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�׾��֤Ǥ��ꡢ���̤ʻ��𤬤ʤ��¤�ϡ����Τޤޱ��Ѥ���뤳�Ȥ򶯤������ᤤ�����ޤ���<br>
                                                ���ѼԼ��Ȥ����¤��줿�ʤɤ���ͳ������Ū�ˡ�OFF(̵��)�פˤ����硢�����μ��˱�ä�������ѹ����������Ѹ�Ϻ��١�ON(ͭ��)�פ��ѹ����Ƥ���������</p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c01">1.WordPress�������ƥ������˥塼��</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPress�������ƥ������˥塼�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c02">2.�������Բ�����¥�˥塼��</h6>
                                                    <div class="box_body">
                                                        <p>���̤����ܤ����塢���֥�˥塼���֥������Բ����������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_4.png" alt="�������Բ����������򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c03">3.����������ѹ�</h6>
                                                    <div class="box_body">
                                                        <p>���ޤΤ褦�ʲ��̤�ɽ������ޤ����顢������ѹ����뵡ǽ�ˤ����ơ����ߤ�����򤴳�ǧ�ξ塢��¦�ˤ���饸���ܥ���Τ����줫�����򤷡����ꤹ��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_5.png" alt="����������ѹ�"></p>
                                                        <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-d">�����ȡ��ȥ�å��Хå���������</h4>
                                        <div class="section_body">
                                            <p>�ܵ�ǽ�Ǥϡ������Τ褦�ʥ�������Ƥ�ȥ�å��Хå������¤��뤳�Ȥ�����ޤ���</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>���̥����ȡ��ȥ�å��Хå�����</dt>
                                                <dd>
                                                    <p>�����ȡ��ȥ�å��Хå����ѥब�Ԥ�줿���ˡ����Ū�˥����ȡ��ȥ�å��Хå������¤��ޤ���<br>
                                                        ���¤ϡ�6���֤��вᤷ���塢��ưŪ�˲������ޤ���</p>
                                                    <p>������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�׾��֤Ǥ���</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>�񳰤���Υ����ȡ��ȥ�å��Хå�����</dt>
                                                <dd>
                                                    <p>�񳰤���Υ�������ơ��ޤ��ϥȥ�å��Хå������¤��ޤ���</p>
                                                    <p>������֤Ǥϡ�<em class="font-bold">OFF(̵��)</em>�׾��֤Ǥ������񳰤���Υ����ȡ��ȥ�å��Хå���ɬ�פȤ���ʤ����ϡ�ON(ͭ��)�פ������ѹ����뤳�Ȥ�侩���ޤ���</p>
                                                    <p class="note">��CloudFlare(���饦�ɥե쥢)�������������С����ͳ���ƥ������������褦�ʥ����ӥ������Ѥξ��⡢��ͳ���륵���С����ܵ�ǽ�����¤˳������Ƥ��ޤ���ǽ��������ޤ���<br>
                                                        ���ξ��ϡ��ܥޥ˥奢���������˽��ä����¤������Ƥ���������</p>
                                                </dd>
                                            </dl>
                                            <p>������ѹ��ϲ����μ��˱�äƹԤäƤ���������</p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d01">1.WordPress�������ƥ������˥塼��</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_1.png" alt="WordPress�������ƥ������˥塼�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d02">2.�����ȡ��ȥ�å��Хå����������˥塼��</h6>
                                                    <div class="box_body">
                                                        <p>���̤����ܤ����塢���֥�˥塼���֥����ȡ��ȥ�å��Хå���������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_6.png" alt="�����ȡ��ȥ�å��Хå���������򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-d03">3.����������ѹ�</h6>
                                                    <div class="box_body">
                                                        <p>���ޤΤ褦�ʲ��̤�ɽ������ޤ����顢������ѹ����뵡ǽ�ˤ����ơ����ߤ�����򤴳�ǧ�ξ塢��¦�ˤ���饸���ܥ���Τ����줫�����򤷡����ꤹ��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_wpsecurity_7.png" alt="����������ѹ�"></p>
                                                        <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
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
                                            <li><a href="#link-a">WordPress�������ƥ�����</a></li>
                                            <li><a href="#link-b">�񳰥���������������</a>
                                                <ol>
                                                    <li><a href="#link-b01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-b02">2.����������ѹ�</a></li>
                                                    <li><a href="#link-b03">3.�ۥ磻�ȥꥹ�Ȥ�����</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-c">�������Բ����������</a>
                                                <ol>
                                                    <li><a href="#link-c01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-c02">2.����������ѹ�</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-d">�����ȡ��ȥ�å��Хå���������</a>
                                                <ol>
                                                    <li><a href="#link-d01">1.WordPress�������ƥ������˥塼��</a></li>
                                                    <li><a href="#link-d02">2.����������ѹ�</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                                    </ul>

                                    <section class="section">
                                        <div class="sectionBody">

                                            <section class="section">
                                                <h4 class="section_ttl" id="link-a">WordPress�������ƥ�����</h4>
                                                <div class="section_body">
                                                    <p>
                                                        �ܵ�ǽ�ϡ������Ѥ�WordPress�ˤ����ơ��Ƽ�ġ�����Ф���񳰤������³�����¤����ꡢ�ѥ����������(�֥롼�ȥե����������å�)�ˤ���軰�ԤΥ�������ɻߤ���ʤɡ������ʥ����������Ф��륻�����ƥ��򶯲����뵡ǽ�Ǥ���
                                                    </p>
                                                    <p>��ǽ�ξܺ٤ˤĤ��Ƥϡ������򤴻��Ȥ���������</p>
                                                    <ul class="list list_arrow-down mb30">
                                                        <li><a href="#link-b">�񳰥���������������</a></li>
                                                        <li><a href="#link-c">�������Բ����������</a></li>
                                                        <li><a href="#link-d">�����ȡ��ȥ�å��Хå���������</a></li>
                                                    </ul>
                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-b" class="section_ttl">�񳰥���������������</h4>
                                                <div class="section_body">

                                                    <p>
                                                        �ܵ�ǽ�Ǥϡ������Τ褦��WordPress��ǽ�ؤι񳰤���Υ������������¤��뤳�Ȥǡ������ʥ������DDoS�����Ƨ����Ȥʤ뤳�Ȥ��ɤ���WordPress�����ȤΥ������ƥ�����夵���뤳�Ȥ��Ǥ��ޤ���
                                                    </p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>���å���ܡ��� ������������</dt>
                                                        <dd>
                                                            <p class="mb0">���å���ܡ��ɤ��Ф���񳰤������³�����¤��ޤ���</p>
                                                            <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���<br>
                                                                ���¤���������ϸ��̤�IP���ɥ쥹���¤�Basicǧ�ڤ�ԤäƤ���������</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>�������������¤����ս�</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wp-admin �� ���å���ܡ��� �Υե����</li>
                                                                    <li>/wp-login.php �� ���å���ܡ��� ��������˥�����������ե�����</li>
                                                                </ul>
                                                            </div>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>����OFF��̵���˻��Ρ�REST API �����������¡פȤ�Ϣư�ˤĤ���</p>
                                                                <p class="mb0">
                                                                    WordPress �С������5.0�ʹߤǤϵ�������Ƥˡ�REST API�פ���Ѥ��뤿�ᡢ�񳰤���WordPress�����Ѥ����硢
                                                                    �֥��å���ܡ��� �����������¡פȤȤ�ˡ�REST API �����������¡פ��OFF��̵���ˡפˤ���ɬ�פ�����ޤ���<br>
                                                                    <br>
                                                                    �֥��å���ܡ��� �����������¡פ��OFF��̵���ˡפ��ѹ������硢��REST API �����������¡פ�Ʊ���ˡ�OFF��̵���ˡפ��ѹ����ޤ���
                                                                </p>
                                                            </div>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>XML-RPC API ������������</dt>
                                                        <dd>
                                                            <p class="mb0">���ޡ��ȥե��󥢥ץ�䳰�������ƥफ�顢��⡼�Ȥǵ�������Ƥ�����Υ��åץ��ɤ�Ԥ��ݤ����Ѥ�����XML-RPC WordPress API�פ��Ф���񳰵ڤӰ����ι���ۥ��ƥ��󥰥����ӥ��Ķ��Υ��ɥ쥹�������³�����¤��ޤ�<br>
                                                                �ץ饰�����Jetpack by WordPress.com�פˤ�륢�����������¤��оݳ��Ǥ���</p>
                                                            <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                            <p class="note">���񳰤Υ����С��������XML-RPC WordPress API�פ����Ѥ������ϡ�OFF�פ����ꤹ��ȤȤ�ˡ���Disable XML-RPC Pingback�פʤɤΡ���XML-RPC WordPress API�פؤ��������������к���Ԥ��ץ饰�������̤˥��󥹥ȡ��뤷�Ƥ���������</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>�������������¤����ս�</p>
                                                                <ul class="ul mb0">
                                                                    <li>/xmlrpc.php �� XML-RPC WordPress API (�ե�����)</li>
                                                                </ul>
                                                            </div>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>REST API ������������</dt>
                                                        <dd>
                                                            <p class="mb0">��REST API�פ��Ф���񳰤������³�����¤��ޤ���<br>�ץ饰�����Jetpack by WordPress.com�פˤ�륢�����������¤��оݳ��Ǥ���</p>
                                                            <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle colorBase"></i>�������������¤����ս�</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wp-json ��  REST API�����������˴ޤޤ��URL</li>
                                                                </ul>
                                                            </div>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                                <div class="msg_body">
                                                                    <p>�񳰤���WordPress �С������5.0�ʹߤ����Ѥξ�硢�ܵ�ǽ���OFF��̵���ˡפˤ��Ƥ���������<br>
                                                                        �ܵ�ǽ���ON��ͭ���ˡפˤ���ȡ��������Խ�����¸���Ԥ��ʤ���礬����ޤ���</p>
                                                                </div>
                                                            </aside>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>wlwmanifest.xml ������������</dt>
                                                        <dd>
                                                            <p class="mb0">��Windows Live Writer�פ����Ѥ��Ƶ������������Ƥ��뤿��ξ��󤬵��Ҥ���Ƥ���<br>��wlwmanifest.xml�ץե�������Ф���񳰤������³�����¤��ޤ���</p>
                                                            <p class="note">���̾�ϡ�<em class="font-bold">ON(ͭ��)</em>�פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���</p>
                                                            <p class="note">���񳰤Υ����С��������Windows Live Writer�פ����Ѥ��Ƶ������������Ƥ�����ϡ�<br>�ܵ�ǽ���OFF(̵��)�פ��ѹ����Ƥ���������</p>
                                                            <div class="border border_gray">
                                                                <p class="font-bold mb0"><i class="ico ico_circle base-color"></i>�������������¤����ս�</p>
                                                                <ul class="ul mb0">
                                                                    <li>/wlwmanifest.xml �� Windows Live Writer���ѻ��˥�����������ե�����</li>
                                                                </ul>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <p>������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�פǤ�����������OFF(̵��)�פˤ�����ʤɤϲ����μ��˱�äƤ���������</p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b01">1.WordPresse�������ƥ������˥塼��</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresse�������ƥ������˥塼�򥯥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b02">2.����������ѹ�</h5>
                                                            <div class="box_body">
                                                                <p>�оݤΥɥᥤ�������򤴳�ǧ�ξ塢��¦�ˤ����ѹ��ܥ���Τ����줫�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_2.png?date=250409" alt="����������ѹ�"></p>

                                                                <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-b03">3.�ۥ磻�ȥꥹ�Ȥ�����</h5>
                                                            <div class="box_body">
                                                                <p>�����������¤���򤹤�ۥ磻�ȥꥹ�Ȥ����ꤹ�뤳�Ȥ��ǽ�Ǥ���</p>
                                                                <p>�֥ۥ磻�ȥꥹ�ȡפΥڥ󥢥�����򥯥�å�����������̤򳫤�������˾��IP���ɥ쥹��1��1���ɥ쥹����Ͽ���Ƥ���������</p>
                                                                <p>
                                                                    �ޤ���IP���ɥ쥹�γƥ����ƥåȤ˥磻��ɥ�����(*)����Ѥ��ơ�������ϰϤ�ޤȤ�ƻ��ꤹ�뤳�Ȥ��ǽ�Ǥ���<br>
                                                                    ���111.111.111.*
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_whlist_1.png" alt="�ۥ磻�ȥꥹ�ȤΡ��Խ��פ򥯥�å�"></p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_whlist_2.png" alt="�ۥ磻�ȥꥹ�Ȥ�����"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->

                                                    <aside class="msg msg_caution mt30">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                                        <div class="msg_body">
                                                            <ul class="note-list note-list_margin">
                                                                <li>���ܵ�ǽ�Ͻ�����֤ǡ�<em class="font-bold">ON(ͭ��)</em>�פˤʤäƤ��ޤ���<br>
                                                                    �񳰤˺߽������ʤɡ��񳰤���Υ���������ɬ�פ����ϡ��ܥޥ˥奢���������˽��äơ��ܵ�ǽ�ˤ�����¤������Ƥ���������</li>
                                                                <li>���ޤ�˹���IP���ɥ쥹����Υ��������Ǥ��äƤ⡢�����ƥ��ǹ񳰤���Υ��������Ȥ��Ƹ�ǧ���졢WordPress�δ����ԥġ���ؤΥ������������¤���Ƥ��ޤ���礬����ޤ���<br>
                                                                    ���κݤ⡢�ܥޥ˥奢���������˽��äơ����¤������Ƥ���������</li>
                                                                <li>��CloudFlare(���饦�ɥե쥢)�������������С����ͳ���ƥ������������褦�ʥ����ӥ������Ѥξ��⡢��ͳ���륵���С����ܵ�ǽ�����¤˳������Ƥ��ޤ���ǽ��������ޤ���<br>
                                                                    ���ξ��⡢�ܥޥ˥奢���������˽��ä����¤������Ƥ���������</li>
                                                                <li>���񳰤��饢�������򤵤����������ͭ���פΤޤޱ��Ѥ���뤳�Ȥ򶯤��侩���ޤ���<br>
                                                                    ���¤���������ϡ����̤�IP���ɥ쥹���¤�BASICǧ�ڤʤɤ�ԤäƤ���������</li>
                                                            </ul>
                                                        </div>
                                                    </aside>

                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-c" class="section_ttl">�������Բ����������</h4>
                                                <div class="section_body">
                                                    <p>
                                                        �ܵ�ǽ�ϡ�û���֤�Ϣ³���ƥ��������(����)���Ԥ�줿���˥������������¤��뵡ǽ�Ǥ���<br>
                                                        �ѥ����������(�֥롼�ȥե����������å�)�ˤ�����������������ɻߤ��뤳�Ȥ�����ޤ���
                                                    </p>
                                                    <p>�������������¤ϡ����¤���Ƥ���24���ָ�˲������ޤ���</p>
                                                    <p>
                                                        ������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�פǤ�����������OFF(̵��)�פˤ�����ʤɤϲ����μ��˱�äƤ���������
                                                    </p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-c01">1.WordPresse�������ƥ������˥塼��</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresse�������ƥ������˥塼�򥯥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-c02">2.����������ѹ�</h5>
                                                            <div class="box_body">
                                                                <p>�оݤΥɥᥤ�������򤴳�ǧ�ξ塢��¦�ˤ����ѹ��ܥ���򥯥�å����Ƥ�������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_3.png?date=2410" alt="����������ѹ�"></p>
                                                                <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </section>

                                            <section class="section">
                                                <h4 id="link-d" class="section_ttl">�����ȡ��ȥ�å��Хå���������</h4>
                                                <div class="section_body">
                                                    <p>�ܵ�ǽ�Ǥϡ������Τ褦�ʥ�������Ƥ�ȥ�å��Хå������¤��뤳�Ȥ�����ޤ���</p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>���̥����ȡ��ȥ�å��Хå�����</dt>
                                                        <dd>
                                                            <p>�����ȡ��ȥ�å��Хå����ѥब�Ԥ�줿���ˡ����Ū�˥����ȡ��ȥ�å��Хå������¤��ޤ���<br>
                                                                ���¤ϡ�6���֤��вᤷ���塢��ưŪ�˲������ޤ���</p>
                                                            <p>������֤Ǥϡ�<em class="font-bold">ON(ͭ��)</em>�׾��֤Ǥ���</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>�񳰤���Υ����ȡ��ȥ�å��Хå�����</dt>
                                                        <dd>
                                                            <p>�񳰤���Υ�������ơ��ޤ��ϥȥ�å��Хå������¤��ޤ���</p>
                                                            <p>������֤Ǥϡ�<em class="font-bold">OFF(̵��)</em>�׾��֤Ǥ������񳰤���Υ����ȡ��ȥ�å��Хå���ɬ�פȤ���ʤ����ϡ�ON(ͭ��)�פ������ѹ����뤳�Ȥ�侩���ޤ���</p>
                                                            <p class="note">��CloudFlare(���饦�ɥե쥢)�������������С����ͳ���ƥ������������褦�ʥ����ӥ������Ѥξ��⡢��ͳ���륵���С����ܵ�ǽ�����¤˳������Ƥ��ޤ���ǽ��������ޤ���<br>
                                                                ���ξ��ϡ��ܥޥ˥奢���������˽��ä����¤������Ƥ���������</p>
                                                        </dd>
                                                    </dl>
                                                    <p>������ѹ��ϲ����μ��˱�äƹԤäƤ���������</p>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-d01">1.WordPresse�������ƥ������˥塼��</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress�������ƥ�����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_1.png?date=2410" alt="WordPresse�������ƥ������˥塼�򥯥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 class="box_ttl" id="link-d02">2.����������ѹ�</h5>
                                                            <div class="box_body">
                                                                <p>�оݤΥɥᥤ�������򤴳�ǧ�ξ塢��¦�ˤ����ѹ��ܥ���򥯥�å����Ƥ�������</p>
                                                                <p><img class="img" src="../img/manual/man_server_wpsecurity_4.png?date=2410" alt="����������ѹ�"></p>
                                                                <p>���ߤ����꤬�ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </section>

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
