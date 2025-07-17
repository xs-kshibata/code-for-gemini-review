<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>EC-CUBE 4 ��ñ���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ô�ñ���󥹥ȡ��뵡ǽ�ǡ�EC-CUBE4�פ����֤��뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�EC-CUBE4�פ����֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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

<h3 class="sub-ttl">EC-CUBE 4</h3>

    <div class="supportTabArea">
        <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
        <div class="supportTabWrap">
            <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
            <!-- ��ѥͥ� -->
            <div class="supportTabContents">

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-previous-a">EC-CUBE 4 ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                        <li><a href="#link-previous-b">��ñ���󥹥ȡ�����</a>
                            <ol>
                                <li><a href="#link-previous-b01">1.EC-CUBE 4 �Υ��󥹥ȡ�������</a></li>
                                <li><a href="#link-previous-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</a></li>
                                <li><a href="#link-previous-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ</a></li>
                                <li><a href="#link-previous-b04">4.�������̤γ�ǧ</a></li>
                                <li><a href="#link-previous-b05">���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-previous-c">[����] MySQL�ʥǡ����١����ˤ�����</a>
                            <ol>
                                <li><a href="#link-previous-c01">1.MySQL���ɲ�</a></li>
                                <li><a href="#link-previous-c02">2.MySQL�桼�����ɲ�</a></li>
                                <li><a href="#link-previous-c03">3.MySQL����������������</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-previous-d">[����] ������SSL����</a>
                            <ol>
                                <li><a href="#link-previous-d01">1.SSL��https����³�ˤƴ������̤إ�������</a></li>
                                <li><a href="#link-previous-d02">2.������פΡ֥������ƥ������פˤơ�SSL�����פ˥����å�</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>



                <section class="section">
                    <h4 class="section_ttl" id="link-previous-a">EC-CUBE 4 ��ñ���󥹥ȡ��� �Ϥ����</h4>
                    <div class="section_body">
                        <p>
                            ������¦�ǡ�EC-CUBE�Υ��󥹥ȡ���ե�������Ѱդ��Ƥ�������ɬ�פϤ���ޤ���<br>
                            <br>
                            �ʤ���EC-CUBE 3 �����Ѥ����ϡ�<a href="man_install_auto_ec.php">EC-CUBE 3 ��ñ���󥹥ȡ�����</a>�פ��ޥ˥奢��򤴳�ǧ���������ޤ���<br>
                            <br>
                            �ޤ������󥹥ȡ����γƼ�����䥫�����ޥ��������åץǡ������˴ؤ��륵�ݡ��ȤϹԤäƤ���ޤ��󡣤��餫���ᤴλ������������
                        </p>
                        <table class="table table_use-caption break-word">
                            <caption>EC-CUBE 4 ��ñ���󥹥ȡ��� ������</caption>
                            <tbody>
                            <tr>
                                <th class="w20per w30per-s">�����С�ID</th>
                                <td>xsample</td>
                            </tr>
                            <tr>
                                <th>�ɥᥤ��̾</th>
                                <td>example.com</td>
                            </tr>
                            <tr>
                                <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                <td>
                                    /home/xsample/example.com/public_html/ec
                                </td>
                            </tr>
                            <tr>
                                <th>���󥹥ȡ���URL</th>
                                <td>http://example.com/ec</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table_use-caption break-word">
                            <caption>EC-CUBE 4 ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                            <tbody>
                            <tr>
                                <th class="w20per w30per-s">PHP�С������</th>
                                <td>
                                    PHP 8.1.x �� 8.3.x
                                    <p class="note mb0">
                                        ��PHPư��С��������ѹ��ϡ��ޥ˥奢���<a href="man_program_php_ver.php#link-previous-b">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ���������
                                    </p>

                                </td>
                            </tr>
                            <tr>
                                <th>�ǡ����١���</th>
                                <td>MySQL5.7 / MariaDB 10.5<p class="note mb0">��ʸ�������ɤ� UTF-8 �����ꤷ�Ƥ���������</p></td>
                            </tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>EC-CUBE4.1�Υ����ƥ��׷�ˤĤ���</h6>
                            <div class="msg_body">
                                <p>
                                    MariaDB10.5/MySQL5.5�ϥ����ƥ��׷狼�鳰��뤿�ᡢ�ץ饰����ˤ�äƤ�ư��ʤ���礬����ޤ���<br>
                                    ���餫���ᤴλ������������
                                </p>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-b">��ñ���󥹥ȡ�����</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρִ�ñ���󥹥ȡ���פ�ꡢ���ꤹ��ɥᥤ������򤷡��֥ץ���।�󥹥ȡ���פΥ��֤򥯥�å����Ƥ���������</p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_other_1.png" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_9.png" alt="�ɥᥤ������򤹤륹���꡼�󥷥�å�"></p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_10.png" alt="�֥ץ���।�󥹥ȡ���פΥ��֤򥯥�å����륹���꡼�󥷥�å�"></p>

                        <div class="serial-box">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b01">1.EC-CUBE 4 �Υ��󥹥ȡ�������</h6>
                                <div class="box_body">
                                    <p>
                                        EC-CUBE 4 �Ρ֥��󥹥ȡ�������ץܥ���򥯥�å����Ƥ���������
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/previous/man_install_auto_ec4_1.png" alt="��ñ���󥹥ȡ���ץ����������̡�EC-CUBE 4 �˥ե����������������꡼�󥷥�å�">
                                    </p>
                                    <p>�ʲ��γƹ��ܤ����Ϥ����Ǹ�ˡֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����Ƥ���������</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>EC-CUBE 4 �Υ��󥹥ȡ�������</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w30per w30per-s">����å�URL</th>
                                            <td>
                                                <p class="mb5">example.com/ec</p>
                                                <div class="border border_gray">
                                                    ����å�URL���http://example.com�פˤ�����ϡ��ץ������ǥۥ���̾(�ɥᥤ��)�����򤷡���/��(����å���)��³���ե������ʬ(�ƥ����ȥܥå���)�϶���Τޤޤˤ��Ƥ���������
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>����å�̾</th>
                                            <td>����åץ����Ȥ�̾������ꤷ�Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�᡼�륢�ɥ쥹</th>
                                            <td>�������Ѳ�ǽ��ͭ���ʤ�Ρˤǡ�EC-CUBE 4 �δ����ѥ��ɥ쥹�Ȥ������Ѥ�������Τ����Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�������̥�����ID</th>
                                            <td>Ǥ�դ�ʸ��������Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�������̥ѥ����</th>
                                            <td>Ǥ�դ�ʸ��������Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�ǡ����١���</th>
                                            <td>
                                                <p>
                                                    ���Ѥ���ǡ����١��������򤷤ޤ���<br>
                                                    �ּ�ư�ǥǡ����١�������������פ����򤷤Ƥ���������
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_2.png" alt="EC-CUBE 4 ������̤Υ����꡼�󥷥�å�"></p>
                                </div>
                                <!-- /.box_body -->
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>��ǧ���̤�ɽ������Ƥ������Ƥ˴ְ㤤���ʤ���С֥��󥹥ȡ��뤹��ץܥ���򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_8.png" alt="��ñ���󥹥ȡ���ץ����������̡�EC-CUBE 4 ���󥹥ȡ����ǧ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ</h6>
                                <div class="box_body">
                                    <p>���󥹥ȡ��뤬��λ����ȡ���λ���̤�ɽ������ޤ���</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">���ִ������̥�����ID�פȡִ������̥ѥ���ɡפ�˺�줺�ˤ���������������</p>
                                    <p style="text-indent: -1em; padding-left: 1em;">��ɽ�Ρִ�������URL�פ�ɽ�������URL�򥯥�å��������󥹥ȡ��뤷��EC-CUBE�Υ�������̤˿ʤߤޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_3.png" alt="EC-CUBE 4 ���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b04">4.�������̤γ�ǧ</h6>
                                <div class="box_body">
                                    <p>���󥹥ȡ���κݤ����ꤷ���ִ������̥�����ID�פȡִ������̥ѥ���ɡפ����Ϥ��ƥ����󤷤Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_4.png" alt="EC-CUBE 4 �������̤Υ����꡼�󥷥�å�"></p>
                                    <p>
                                        �ʾ��EC-CUBE 4 ��Ƴ���Ͻ�λ�Ǥ���<br>
                                    </p>
                                </div>
                            </section>
                            <!-- /.box -->

                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-b05">���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</h6>
                                <div class="box_body">
                                    <p>
                                        ��1.EC-CUBE 4 �Υ��󥹥ȡ�������פˤơֺ����ѤߤΥǡ����١��������Ѥ���פ����򤷡��ʲ��γƹ��ܤ����򤷤Ƥ���������
                                    </p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>�ǡ����١���̾</dt>
                                        <dd>
                                            <p>
                                                ���Ѥ���ǡ����١�������ꤷ�Ƥ���������<br>
                                                ��)xsample_ec
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>�ǡ����١����桼����̾</dt>
                                        <dd>
                                            <p class="mb0">
                                                �ǡ����١����桼������ꤷ�Ƥ���������<br>
                                                ��)xsample_user
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>�ǡ����١����ѥѥ����</dt>
                                        <dd>�嵭�ǻ��ꤷ���ǡ����١����桼����̾�Υѥ���ɤ����Ϥ��Ƥ���������</dd>
                                    </dl>
                                    <p>�ǡ����١����κ����ˤĤ��Ƥϡ�<a href="#link-previous-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��Ȥ���������</p>
                                </div>
                            </section>
                            <!-- /.box -->
                        </div>
                        <!-- /.serial-box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-c">[����] MySQL�ʥǡ����١����ˤ�����</h4>
                    <div class="section_body">
                        <p>��ñ���󥹥ȡ���򤹤����ˡ�EC-CUBE 4 �����Ѥ���ǡ����١����򿷵��������ޤ���<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��ꡢ�֥ǡ����١����ע���MySQL����פ򥯥�å����ޤ���</p>
                        <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c01">1.MySQL���ɲ�</h6>
                                <div class="box_body">
                                    <p>��MySQL�ɲáפΥ��֤򥯥�å����ơ�EC-CUBE 4 �����Ѥ���ǡ����١������ɲä��ޤ���</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">��ʸ�������ɤϡ�UTF-8�פ����򤷤Ƥ���������</p>
                                    <p style="text-indent: -1em; padding-left: 1em;">
                                        ���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ�<br>
                                        (�ܥޥ˥奢��Ǥϡ�xsample_ec�פȤ��ƺ������ޤ�)��
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_5.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c02">2.MySQL�桼�����ɲ�</h6>
                                <div class="box_body">
                                    <p>��MySQL�桼���ɲáפΥ��֤򥯥�å��������������ǡ����١����˥�����������MySQL�桼�����ɲä��ޤ���</p>
                                    <p style="text-indent: -1em; padding-left: 1em; margin-bottom: 0px;">
                                        ���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ�<br>
                                        (�ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ�)��
                                    </p>
                                    <p style="text-indent: -1em; padding-left: 1em;">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ��ܹ�μ����ά������3.MySQL����������������פ�ԤäƤ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_3.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <!-- /.box -->
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-c03">3.MySQL����������������</h6>
                                <div class="box_body">
                                    <p>��MySQL�����פΥ��֤򥯥�å��������������ǡ����١����˥��������������ꤷ�ޤ���</p>
                                    <p>�����ˤ����1.MySQL�ǡ����١������ɲáפ��ɲä����ǡ����١����ˤ����ơ��֥���������̤��ͭ�桼�����פ����ɲä�����MySQL�桼�������򤷡����ɲáץܥ���򥯥�å����Ƥ���������</p>
                                    <p>
                                        �֥�����������ͭ�桼�����פ�MySQL�桼�����ɲäǤ��ޤ����顢��Ȥϴ�λ�Ǥ���<br>
                                        ����³�����ִ�ñ���󥹥ȡ�����פ˱�äơ����󥹥ȡ����ԤäƤ���������
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_ec4_6.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                    <p>
                                        �ʾ��MySQL������ϴ�λ�Ǥ���<br>
                                        �ʹߤϡ���<a href="#link-previous-b">��ñ���󥹥ȡ�����</a>�פ˱�äơ����󥹥ȡ����ԤäƤ���������
                                    </p>
                                </div>
                            </section>
                            <!-- /.box -->
                        </div>
                        <!-- /.serial-box -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-d">[����] ������SSL����</h4>
                    <div class="section_body">
                        <p>EC-CUBE 4 �ϥ���åץ����Ȥʤ�Ӥ˴������̤ˤ�SSL��https�˷�ͳ�Ǥ���³�����¤��뤳�Ȥ���ǽ�Ǥ���</p>
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-d01">1.SSL��https����³�ˤƴ������̤إ�������</h6>
                                <div class="box_body">
                                    <p>���󥹥ȡ��뤷��EC-CUBE���Ф���SSL�ˤ��URL��https://���ˤǴ������̤˥�����������������򤷤Ƥ���������</p>
                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-previous-d02">2.������פΡ֥������ƥ������פˤơ�SSL�����٤˥����å�</h6>
                                <div class="box_body">
                                    <p>
                                        �ִ��� > �������ƥ����� > �����ȥ������ƥ�����פ˿ʤߤޤ���<br>
                                        �֥����ȥ������ƥ���������SSL���¤ˤ����SSL�����פ˥����å������졢����Ͽ�ץܥ���򥯥�å����ޤ���</p>
                                    <p class="mb0"><img class="img" src="../img/manual/previous/man_install_auto_ec4_7.png" alt="EC-CUBE 4 ��������̡���SSL�����פ˥����å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <p class="note mt10">��SSL��https����³��ԤäƤ��ʤ����ϡ�SSL�����פ˥����å�������뤳�Ȥ��Ǥ��ޤ���</p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box mb10 -->
                    </div>
                    <!-- /.section_body -->
                </section>
                <!-- /.section -->

            </div>
            <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
            <!-- ���ѥͥ� -->
            <div class="supportTabContents">
                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">EC-CUBE 4 ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                        <li>
                            <a href="#link-b">��ñ���󥹥ȡ�����</a>
                            <ol>
                                <li><a href="#link-b1">1.EC-CUBE 4 �Υ��󥹥ȡ�������</a></li>
                                <li><a href="#link-b2">2.���󥹥ȡ��봰λ</a></li>
                                <li><a href="#link-b3">3.�������̤γ�ǧ</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#link-c">[����] MySQL�ʥǡ����١����ˤ�����</a>
                            <ol>
                                <li><a href="#link-c1">1.MySQL���ɲ�</a></li>
                                <li><a href="#link-c2">2.MySQL�桼�������ɲ�</a></li>
                                <li><a href="#link-c3">3.MySQL����������������</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#link-d">[����] ������SSL����</a>
                            <ol>
                                <li><a href="#link-d1">1.SSL��https����³�ˤƴ������̤إ�������</a></li>
                                <li><a href="#link-d2">2.������פΡ֥������ƥ������פˤơ�SSL�����פ˥����å�</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <section class="section" id="i1">
                    <div class="section_body">
                        <h3 id="link-a" class="section_ttl">EC-CUBE 4 ��ñ���󥹥ȡ��� �Ϥ����</h3>
                        <p>
                            ������¦�ǡ�EC-CUBE�Υ��󥹥ȡ���ե�������Ѱդ��Ƥ�������ɬ�פϤ���ޤ���<br>
                            �ޤ������󥹥ȡ����γƼ�����䥫�����ޥ��������åץǡ������˴ؤ��륵�ݡ��ȤϹԤäƤ���ޤ��󡣤��餫���ᤴλ������������
                        </p>
                        <table class="table table--responsive">
                            <caption>EC-CUBE 4 ��ñ���󥹥ȡ��� ������</caption>
                            <tbody>
                            <tr>
                                <th class="w20perL w30per-s">�����С�ID</th>
                                <td>xsample</td>
                            </tr>
                            <tr>
                                <th>�ɥᥤ��̾</th>
                                <td>example.com</td>
                            </tr>
                            <tr>
                                <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                <td>
                                    /home/xsample/example.com/public_html/ec
                                </td>
                            </tr>
                            <tr>
                                <th>���󥹥ȡ���URL</th>
                                <td>http://example.com/ec</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table--responsive">
                            <caption>EC-CUBE 4 ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                            <tbody>
                            <tr>
                                <th class="w20perL w30per-s">PHP�С������</th>
                                <td>
                                    PHP 8.1.x �� 8.3.x
                                    <p class="note mb0">��PHPư��С��������ѹ��ϡ��ޥ˥奢���<a href="man_program_php_ver.php#link-b">PHP�С��������ڤ��ؤ�</a>�פ򤴻��Ȥ�������</p>
                                </td>
                            </tr>
                            <tr>
                                <th>�ǡ����١���</th>
                                <td>MySQL5.7 / MariaDB 10.5<p class="note mb0">��ʸ�������ɤ� UTF-8 �����ꤷ�Ƥ���������</p></td>
                            </tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>EC-CUBE4.1�Υ����ƥ��׷�ˤĤ���</h6>
                            <div class="msg_body">
                                <p>
                                    MariaDB10.5/MySQL5.5�ϥ����ƥ��׷狼�鳰��뤿�ᡢ�ץ饰����ˤ�äƤ�ư��ʤ���礬����ޤ���<br>
                                    ���餫���ᤴλ������������
                                </p>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i2">
                    <div class="section_body">
                        <h3 id="link-b" class="section_ttl">��ñ���󥹥ȡ�����</h3>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���󥹥ȡ����Ȥ�Ϥ�����ˡ�(�ǡ����١����κ����ˤĤ���)</h6>
                            <div class="msg_body">
                                <p>
                                    �ܥޥ˥奢��Ǥϡ��ץ����Υ��󥹥ȡ����ʻ�������Ȥ���ǡ����١�����ư����������ˡ�Ǥ�����򤷤Ƥ��ޤ���<br>
                                    Ǥ�դΥǡ����١���̾�����ꤹ����ϡ������ˡ�<a href="#i3">MySQL(�ǡ����١���)������</a>�פ򤴻��ͤξ塢�ǡ����١�����������Ƥ���������
                                </p>
                            </div>
                        </aside>

                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-b1">1.EC-CUBE 4 �Υ��󥹥ȡ�������</h4>
                                <div class="box_body">
                                    <p>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ�EC-CUBE��ñ���󥹥ȡ���פ�ꡢ�ֿ������󥹥ȡ���פ򥯥�å����Ƥ���������
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_1.png?date=2410" alt="�������󥹥ȡ���˥ե����������������꡼�󥷥�å�">
                                    </p>
                                    <p>
                                        �ʲ��γƹ��ܤ����Ϥ����Ǹ�ˡ֥��󥹥ȡ��뤹��ץܥ���򥯥�å����Ƥ���������
                                    </p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_2.png?date=2410" alt="�������󥹥ȡ�������Ϲ��ܤΥ����꡼�󥷥�å�">
                                    </p>
                                    <table class="table table--responsive">
                                        <caption>EC-CUBE 4 �Υ��󥹥ȡ�������</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w30perL w30per-s">����å�URL</th>
                                            <td>
                                                <p class="mb5">example.com/ec</p>
                                                <div class="border border_gray">
                                                    ����å�URL���http://example.com�פˤ�����ϡ��ץ������ǥۥ���̾(�ɥᥤ��)�����򤷡���/��(����å���)��³���ե������ʬ(�ƥ����ȥܥå���)�϶���Τޤޤˤ��Ƥ���������
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>����å�̾</th>
                                            <td>����åץ����Ȥ�̾������ꤷ�Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�᡼�륢�ɥ쥹</th>
                                            <td>�������Ѳ�ǽ��ͭ���ʤ�Ρˤǡ�EC-CUBE 4 �δ����ѥ��ɥ쥹�Ȥ������Ѥ�������Τ����Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�������̥�����ID</th>
                                            <td>Ǥ�դ�ʸ��������Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�������̥ѥ����</th>
                                            <td>Ǥ�դ�ʸ��������Ϥ��Ƥ���������</td>
                                        </tr>
                                        <tr>
                                            <th>�ǡ����١���</th>
                                            <td>
                                                <p>
                                                    ���Ѥ���ǡ����١��������򤷤ޤ���<br>
                                                    �ּ�ư�ǥǡ����١�������������פ����򤷤Ƥ���������
                                                </p>
                                                <aside class="msg msg_notice mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            �ֺ����ѤߤΥǡ����١��������Ѥ���פ����򤷡��ʲ��γƹ��ܤ����򤷤Ƥ���������
                                                        </p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ǡ����١���̾</dt>
                                                            <dd>
                                                                <p>
                                                                    ���Ѥ���ǡ����١�������ꤷ�Ƥ���������<br>
                                                                    ��)xsample_ec
                                                                </p>
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>�ǡ����١����桼����̾</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    �ǡ����١����桼������ꤷ�Ƥ���������<br>
                                                                    ��)xsample_user
                                                                </p>
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>�ǡ����١����ѥѥ����</dt>
                                                            <dd>�嵭�ǻ��ꤷ���ǡ����١����桼����̾�Υѥ���ɤ����Ϥ��Ƥ���������</dd>
                                                        </dl>
                                                        �ǡ����١����κ����ˤĤ��Ƥϡ�<a href="#i3">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��Ȥ���������
                                                    </div>
                                                    <!-- /.msg_body-->
                                                </aside>
                                                <!-- /.msg msg_notice mb0 -->
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-b2">2.���󥹥ȡ��봰λ</h4>
                                <div class="box_body">
                                    <p>������ɽ������Ƥ���Х��󥹥ȡ��봰λ�Ǥ���</p>
                                    <p>
                                        <img class="img" src="../img/manual/man_install_auto_ec4_3.png?date=2410" alt="EC-CUBE 4 ���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�">
                                    </p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-b3">3.�������̤γ�ǧ</h4>
                                <div class="box_body">
                                    <p>���󥹥ȡ���κݤ����ꤷ���ִ������̥�����ID�פȡִ������̥ѥ���ɡפ����Ѥ��ƥ����󤷤Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_ec4_4.png?date=2410" alt="EC-CUBE 4 �������̤Υ����꡼�󥷥�å�"></p>
                                    <p>
                                        �ʾ��EC-CUBE 4 ��Ƴ���Ͻ�λ�Ǥ���<br>
                                    </p>
                                </div>
                            </section>

                        </div>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i3">
                    <div class="section_body">
                        <h3 id="link-c" class="section_ttl">[����] MySQL�ʥǡ����١����ˤ�����</h3>
                        <p>��ñ���󥹥ȡ���򤹤����ˡ�EC-CUBE 4 �����Ѥ���ǡ����١����򿷵��������ޤ���<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��ꡢ�֥ǡ����١����ע���MySQL����פ򥯥�å����ޤ���
                        </p>
                        <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-c1">1.MySQL���ɲ�</h4>
                                <div class="box_body">
                                    <p>�֥ǡ����١������ɲáפ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_2.png?date=2410" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                    <p>���Ѥ������ǡ����١���̾�����Ϥ������ɲä���ץܥ���򥯥�å����Ƥ����������ǡ����١���̾�ϡ��֤����ͤΥ����С�ID_�ǡ����١���̾�פˤʤ�ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_3.png?date=2410" alt="MySQL�ǡ����١������ɲä˥ե����������������꡼�󥷥�å�"></p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ʸ������������ˤĤ���</h6>
                                        <div class="msg_body">
                                            <p class="font14">�ǡ������١����������ˡ����Υǡ����١����ǰ���ʸ�������ɤ�����Ǥ��ޤ��������С��ץ����򥤥󥹥ȡ��뤹����ʤɤǡ�������ץȤ˹�碌��ʸ�������ɤ����ꤹ��ɬ�פ�������ˤ��Ȥ�����������</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-c2">2.MySQL�桼�������ɲ�</h4>
                                <div class="box_body">
                                    <p>�ǡ����١����˥桼�������ɲä��ޤ�����MySQL�桼��������פ򥯥�å������Τ���ɽ�����줿���̤ǡ֥桼�������ɲáפ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_4.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>MySQL�桼����ID</th>
                                            <td>�����ͤΥ����С�ID����ưŪ���ղä���ޤ����㡧xsample_</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>MySQL�桼�����Υѥ���ɤ����Ϥ��Ƥ���������</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p>���Ƥ����Ϥ������ɲä���ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_5.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-c3">3.MySQL����������������</h4>
                                <div class="box_body">
                                    <p>��MySQL�ǡ����١�������פ��顢���������ǡ����١����ؤΥ�����������ͭ�桼���������꤬�Ԥ��ޤ����֥桼��������פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_6.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                    <p>������������ͭ�桼����������ɽ������ޤ����ɲä�����ϡ֥桼�������ɲáפ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_7.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                    <p>��˾����ǡ����١����ؤΥ������������ɲä������桼���������򤷡����ɲä���ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_setting_8.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�ʾ��MySQL������ϴ�λ�Ǥ���<br>
                                        �ʹߤϡ���<a href="#i2">��ñ���󥹥ȡ�����</a>�פ˱�äơ����󥹥ȡ����ԤäƤ���������</p>
                                </div>
                            </section>



                        </div>
                    </div>
                </section>
                <!-- /.section -->
                <section class="section"  id="i4">
                    <div class="section_body">
                        <h3 id="link-d" class="section_ttl">[����] ������SSL����</h3>
                        <p>EC-CUBE 4 �ϥ���åץ����Ȥʤ�Ӥ˴������̤ˤ�SSL��https�˷�ͳ�Ǥ���³�����¤��뤳�Ȥ���ǽ�Ǥ���</p>
                        <div class="serial-box">

                            <section class="box">
                                <h4 class="box_ttl" id="link-d1">1.SSL��https����³�ˤƴ������̤إ�������</h4>
                                <div class="box_body">
                                    <p>���󥹥ȡ��뤷��EC-CUBE���Ф���SSL�ˤ��URL��https://���ˤǴ������̤˥�����������������򤷤Ƥ���������</p>
                                </div>
                            </section>

                            <section class="box">
                                <h4 class="box_ttl" id="link-d2">2.������פΡ֥������ƥ������פˤơ�SSL�����פ˥����å�</h4>
                                <div class="box_body">
                                    <p>
                                        �ִ��� &gt; �������ƥ����� &gt; �����ȥ������ƥ�����פ˿ʤߤޤ���<br>
                                        �֥����ȥ������ƥ���������SSL���¤ˤ����SSL�����פ˥����å������졢����Ͽ�ץܥ���򥯥�å����ޤ���</p>
                                    <p class="mb0"><img class="img" src="../img/manual/man_install_auto_ec4_5.png?date=2410" alt="EC-CUBE 4 ��������̡���SSL�����פ˥����å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <p class="note mt10">��SSL��https����³��ԤäƤ��ʤ����ϡ�SSL�����פ˥����å�������뤳�Ȥ��Ǥ��ޤ���</p>
                                </div>
                            </section>

                        </div>
                    </div>
                </section>
                <!-- /.section -->
            </div>
            <!-- /���ѥͥ� -->

        </div>
    </div>

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