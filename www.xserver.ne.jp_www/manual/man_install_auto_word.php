<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress ��ñ���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ô�ñ���󥹥ȡ��뵡ǽ�ǡ�WordPress ���ܸ��ǡפ����֤��뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�WordPress�פ����֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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

                <h3 class="sub-ttl">WordPress ���ܸ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">WordPress ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                                <li><a href="#link-previous-b">��ñ���󥹥ȡ�����</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.��WordPress���󥹥ȡ���פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">2.WordPress�Υ��󥹥ȡ�������</a></li>
                                        <li><a href="#link-previous-b03">3.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b04">4.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ�Ǥ�</a></li>
                                        <li><a href="#link-previous-b05">5.���󥹥ȡ����ǧ</a></li>
                                        <li><a href="#link-previous-b06">���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-c">[����] MySQL�ʥǡ����١����ˤ�����</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.MySQL���ɲ�</a></li>
                                        <li><a href="#link-previous-c02">2.MySQL�桼�����ɲ�</a></li>
                                        <li><a href="#link-previous-c03">3.MySQL����������������</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">WordPress��ñ���󥹥ȡ���κ�����</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.��WordPress��ñ���󥹥ȡ���פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d02">2.�оݤ�WordPress���ǧ���ֺ���פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d03">3.��ǧ�����꤬�ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d04">4.�����λ</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>


                            <section class="section" id="link-previous-a">
                                <h4 id="i1" class="section_ttl">WordPress ��ñ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">
                                    <p>������¦�ǤΡ��ѥå������Τ��Ѱդ�ɬ�פ���ޤ���<br>
                                    �ʤ������󥹥ȡ������������˴ؤ��륵�ݡ��ȤϹԤäƤ��ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>WordPress ��ñ���󥹥ȡ��� ������</caption>
                                        <tbody>
                                            <tr><th class="w20per w30per-s">�����С�ID</th><td>xsample</td></tr>
                                            <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                            <tr>
                                                <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                                <td><p class="mb5">/home/xsample/example.com/public_html/wp</p>
                                                    <div class="border border_gray">
                                                        [http://example.com]�ˤ�WordPress�˥����������˾�������[/home/xsample/example.com/public_html/]�򥤥󥹥ȡ���ǥ��쥯�ȥ�˻��ꤹ��ɬ�פ�����ޤ���
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>������URL</th><td>http://example.com/wp</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>WordPress ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per w30per-s">PHP�С������</th>
                                                <td>
                                                    PHP 7.4.x�ʹߤ�侩 (PHP 5.6.x�ʹߤ�ư���ǽ)
                                                    <p class="note mb0">��PHPư��С��������ѹ��ϡ��ޥ˥奢���<a href="man_program_php_ver.php">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ�������</p>
                                                </td>
                                            </tr>
                                            <tr><th>�ǡ����١���</th><td>MySQL5.7 / MySQL5.5 / MariaDB 10.5<p class="note mb0">��ʸ�������ɤ� UTF-8(utf8mb4) �����ꤷ�Ƥ���������</p></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <div class="manual-youtube-box">
                                <p>ư��Ǥ�������ˡ�ˤĤ����������Ƥ���ޤ��Τǡ�������Ǥ⤴��ǧ���������ޤ���</p>
                                <div class="manual-youtube">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/arjohR9_Hcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <section class="section mt50">
                                <h4 class="section_ttl" id="link-previous-b">��ñ���󥹥ȡ�����</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_start_wpblog_31.png" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.��WordPress���󥹥ȡ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>��WordPress���󥹥ȡ���פ򥯥�å����Ƥ�������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_1.png" alt="��WordPress���󥹥ȡ���ץܥ���Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.WordPress�Υ��󥹥ȡ�������</h6>
                                            <div class="box_body">
                                               <p>�ƹ��ܤ����Ϥ����Ǹ�ˡֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_2.png?date=250704" alt="��ñ���󥹥ȡ���ץ�����������"></p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>WordPress�Υ��󥹥ȡ�������</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w20per w30per-s">������URL</th>
                                                            <td><p class="mb5">�����ͤΥɥᥤ��̾/wp</p>
                                                                <div class="border border_gray">
                                                                [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�WordPress�˥����������˾�������[wp]����ʬ�����Ȥ��Ƥ���������
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>�֥�̾</th>
                                                            <td>�����ͤΥ֥��Υ����ȥ�</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�桼����̾</th>
                                                            <td>WordPress�������̤ؤΥ�����桼����̾</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ѥ����</th>
                                                            <td>WordPress�������̤ؤΥ�����ѥ����</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼�륢�ɥ쥹</th>
                                                            <td>�����ͤΥ᡼�륢�ɥ쥹</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����å��弫ư���</th>
                                                            <td>WordPress�Υ���å����Cron�ˤ�äư���ֳ֤Ǽ�ưŪ�˺�����ޤ���<br>����å���μ�ư�����ǽ�ϡ������С��ѥͥ�Ρ�Cron����פ���ǧ���Խ����������ǽ�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǡ����١���</th>
                                                            <td>
                                                                <p>���Ѥ���ǡ����١�������ꤷ�ޤ���</p>
                                                                <ul class="ul">
                                                                    <li>
                                                                        ��ư�ǥǡ����١�������������<br>
                                                                        WordPress�˻��Ѥ��뤿��Υǡ����١�������ưŪ�˺�������ޤ����̾�Ϥ���������򤷤Ƥ���������
                                                                    </li>
                                                                    <li>
                                                                        �����ѤߤΥǡ����١��������Ѥ���<br>
                                                                        ���Ǥ˺����ѤߤΥǡ����١�������Ѥ����硢����������򤷤Ƥ����������ܤ������ϡ�<a href="#link-previous-b06">���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</a>�פ򤴻��Ȥ���������
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ơ���</th>
                                                            <td>WordPress���󥹥ȡ����Ʊ�������򤷤�WordPress�ơ��ޤ����󥹥ȡ��뤵��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ơ��ޥ��ץ����</th>
                                                            <td>
                                                                <p>���򤷤�WordPress�ơ��ޤ˻ҥơ��ޡ��ץ饰������󶡤������硢������Ʊ���˥��󥹥ȡ��뤹�뤫����Ǥ��ޤ���</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>�ҥơ��ޤ��󶡤�����ơ���</dt>
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>Cocoon</li>
                                                                            <li>Lightning</li>
                                                                            <li>XWRITE</li>
                                                                            <li>SWELL</li>
                                                                        </ul>
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>�ץ饰������󶡤�����ơ���</dt>
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>Snow Monkey</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ץ饰����</th>
                                                            <td>WordPress���󥹥ȡ����Ʊ�������򤷤�WordPress�ץ饰���󤬥��󥹥ȡ��뤵��ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>���֥ɥᥤ��˥��󥹥ȡ����Ԥ����</dt>
                                                    <dd>
                                                        <p><img class="img" src="../img/manual/previous/man_install_auto_word_8.png" alt="��ñ���󥹥ȡ��륵�֥ɥᥤ���������"></p>
                                                        <ol>
                                                            <li>1.<a href="man_domain_subdomain_setting.php">���֥ɥᥤ������</a>��ꡢ���֥ɥᥤ������ꤷ�Ƥ���������</li>
                                                            <li>2.�֥�����URL�פ򥯥�å������ץ�������ꥵ�֥ɥᥤ������򤷤Ƥ���������</li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</h6>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ�Ǥ�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_3.png" alt="osCommerce���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
                                                <p>��ñ���󥹥ȡ��봰λ��ˡ�ɽ�����줿��󥯤򥯥�å�������������̤ذ�ư���ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b05">5.���󥹥ȡ����ǧ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_4.png" alt="WordPress���å���ܡ��ɡ��֥������ȥ�򥯥�å����ƥ����Ȥ�ɽ��"></p>
                                                <p>������塢���å���ܡ�����Υ֥������ȥ���ʬ�򥯥�å����뤳�Ȥǡ����󥹥ȡ���������ꤷ���֥����ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_5.png" alt="osCommerce�������̤Υ����꡼�󥷥�å�"></p>
                                                <p>�ʾ��WordPress��Ƴ���Ͻ�λ�Ǥ���������ͤǤ�����</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b06">���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</h6>
                                            <div class="box_body">
                                                <p>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����ϡ��ֺ����ѤߤΥǡ����١��������Ѥ���פ����򤷤Ƥ���������<br>
                                                    ���ξ��ϡ������ι��ܤ����Ϥ���������</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�ǡ����١���̾</dt>
                                                    <dd>
                                                        <p>���Ѥ���ǡ����١�������ꤷ�Ƥ���������<br>
                                                            ��)xsample_wp</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ǡ����١����桼����̾</dt>
                                                    <dd>
                                                        <p class="mb0">�ǡ����١����桼������ꤷ�Ƥ���������<br>
                                                            ��)xsample_user</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ǡ����١����ѥѥ����</dt>
                                                    <dd>�嵭�ǻ��ꤷ���ǡ����١����桼����̾�Υѥ���ɤ����Ϥ��Ƥ���������</dd>
                                                </dl>
                                                <p>�ǡ����١����κ����ˤĤ��Ƥϡ�<a href="#link-previous-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��Ȥ���������</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-c">
                                <h4 id="i2" class="section_ttl">[����] MySQL�ʥǡ����١����ˤ�����</h4>
                                <div class="section_body">

                                    <p>��ñ���󥹥ȡ���򤹤����ˡ�WordPress�����Ѥ���ǡ����١����򿷵��������ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQL���ɲ�</h6>
                                            <div class="box_body">
                                                <p>WordPress�����Ѥ���ǡ����١������ɲä��ޤ�����MySQL�ɲáפ򥯥�å����������Ѥˤʤ�ǡ����١���̾��������Ƥ���������<br>
                                                    �ܥޥ˥奢��Ǥϥǡ����١���̾���xsample_wp�פȤ��ƺ������ޤ���(ʸ�������ɤϡ�UTF-8(utf8mb4)�פ����ꤷ�Ƥ�������)</p>
                                                <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_6.png?date=2412" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQL�桼�����ɲ�</h6>
                                            <div class="box_body">
                                                <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�����ɲä��ޤ���</p>
                                                <p class="note">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                <p class="mb0">��MySQL�桼���ɲáפ򥯥�å����������Ѥˤʤ�桼����̾�ȥѥ���ɤ����ꤷ�ޤ������ϸ塢�ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å�����ɽ�����줿���̤ǡ��ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_3.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQL����������������</h6>
                                            <div class="box_body">
                                                <p>��MySQL�����פ�����������ǡ����١����˥������������ɲä��ޤ�������������̤��ͭ�桼���������ɲä�����MySQL�桼���������ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_wp�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_7.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>�ʾ��MySQL������ϴ�λ�Ǥ���<br>
                                                �ʹߤϡ���<a href="#link-previous-b">��ñ���󥹥ȡ�����</a>�פ˱�äơ����󥹥ȡ����ԤäƤ���������</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section mt50">
                                <h4 class="section_ttl" id="link-previous-d">WordPress��ñ���󥹥ȡ���κ�����</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.��WordPress��ñ���󥹥ȡ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_start_wpblog_31.png" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.�оݤ�WordPress���ǧ���ֺ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���󥹥ȡ���Ѥ�WordPress�������顢�оݤ�WordPress���ǧ���ֺ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_9.png" alt="�ֺ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.��ǧ�����꤬�ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ��������ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å����Ƥ���������</p>
                                                <p>WordPress�����Ѥ��Ƥ���MySQL�ǡ����١�����MySQL�桼����������å��弫ư���Cron��ʻ���ƺ����������硢�ִ�Ϣ�ǡ�������פγƹ��ܤ˥����å������줿���֤ǡ֥��󥤥󥹥ȡ��뤹��פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_10.png?date=250414" alt="�֥��󥤥󥹥ȡ��뤹��פ򥯥�å�"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.�����λ</h6>
                                            <div class="box_body">
                                                <p>��λ���̤�ɽ�������С�����ϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_word_11.png" alt="�����λ����"></p>
                                            </div>
                                        </section>


                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /��ѥͥ� -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">WordPress ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-b">��ñ���󥹥ȡ�����</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��WordPress���ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.WordPress�Υ��󥹥ȡ�������</a></li>
                                            <li><a href="#link-b3">3.���󥹥ȡ��봰λ</a></li>
                                            <li><a href="#link-b4">4.���󥹥ȡ����ǧ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">[����] MySQL(�ǡ����١���)������</a>
                                        <ol>
                                            <li><a href="#link-c1">1.MySQL���ɲ�</a></li>
                                            <li><a href="#link-c2">2.MySQL�桼�������ɲ�</a></li>
                                            <li><a href="#link-c3">3.MySQL����������������</a></li>
                                            <li><a href="#link-c4">4.MySQL�����괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">WordPress��ñ���󥹥ȡ���κ�����</a>
                                        <ol>
                                            <li><a href="#link-d01">1.��WordPress��ñ���󥹥ȡ���פ򥯥�å�</a></li>
                                            <li><a href="#link-d02">2.�оݤ�WordPress���ǧ���ֺ���פ򥯥�å�</a></li>
                                            <li><a href="#link-d03">3.��ǧ�����꤬�ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">WordPress ��ñ���󥹥ȡ��� �Ϥ����</h4>

                                        <div class="section_body">
                                            <p>
                                                ������¦�ǤΡ��ѥå������Τ��Ѱդ�ɬ�פ���ޤ���<br>
                                                �ʤ������󥹥ȡ������������˴ؤ��륵�ݡ��ȤϹԤäƤ��ޤ���
                                            </p>
                                            <table class="table table--responsive">
                                                <caption>WordPress ��ñ���󥹥ȡ��� ������</caption>
                                                <tbody>
                                                <tr><th class="w20perL w30per-s">�����С�ID</th><td>xsample</td></tr>
                                                <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                                <tr>
                                                    <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                                    <td><p class="mb5">/home/xsample/example.com/public_html/wp</p>
                                                        <div class="border border_gray">
                                                            [http://example.com]�ˤ�WordPress�˥����������˾�������[/home/xsample/example.com/public_html/]�򥤥󥹥ȡ���ǥ��쥯�ȥ�˻��ꤹ��ɬ�פ�����ޤ���
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr><th>���󥹥ȡ���URL</th><td>http://example.com/wp</td></tr>
                                                </tbody>
                                            </table>

                                            <table class="table table--responsive">
                                                <caption>WordPress ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                                                <tbody>
                                                <tr>
                                                    <th class="w20perL w30per-s">PHP�С������</th>
                                                    <td>
                                                        PHP 7.4.x�ʹߤ�侩 (PHP 5.6.x�ʹߤ�ư���ǽ)
                                                        <p class="note mb0">��PHPư��С��������ѹ��ϡ�<br>�ޥ˥奢���<a href="man_program_php_ver.php">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ�������</p>
                                                    </td>
                                                </tr>
                                                <tr><th>�ǡ����١���</th><td>MySQL5.7 / MySQL5.5 / MariaDB 10.5<p class="note mb0">��ʸ�������ɤ� UTF-8(utf8mb4) �����ꤷ�Ƥ���������</p></td></tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>
                                    <section id="i1" class="section">
                                        <h4 class="section_ttl" id="link-b">��ñ���󥹥ȡ�����</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���󥹥ȡ����Ȥ�Ϥ�����ˡ�(�ǡ����١����κ����ˤĤ���)</h5>
                                                <div class="msg_body">
                                                    <p>�ܥޥ˥奢��Ǥϡ��ץ����Υ��󥹥ȡ����Ʊ���ˡ����Ѥ���ǡ����١�����ư�������롢����ñ����ˡ�򤴰��⤷�Ƥ��ޤ���<br>
                                                        �ǡ����١������ư���Ѱդ�����ˤϡ���ñ���󥹥ȡ����Ԥ����ˡ���<a href="#link-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��ͤξ塢ͽ��ǡ����١�����������Ƥ����Ƥ���������</p>
                                                </div>
                                            </aside>

                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b1">1.��WordPress���ɲáפ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>��WordPress���ɲáפ򥯥�å����Ƥ�������</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_1.png?date=2410" alt="��WordPress���ɲáץܥ���Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b2">2.WordPress�Υ��󥹥ȡ�������</h5>
                                                    <div class="box_body">
                                                        <p>�ֿ������󥹥ȡ���פ򥯥�å������ƹ��ܤ����ϸ�ˡ֥��󥹥ȡ��뤹��פ򲡤��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_2.png?date=250704" alt="WordPress������̤Υ����꡼�󥷥�å�"></p>

                                                        <table class="table table--responsive">
                                                            <caption>WordPress�Υ��󥹥ȡ�������</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20perL w30per-s">������URL</th>
                                                                <td><p class="mb5">�����ͤΥɥᥤ��̾/wp</p>
                                                                    <div class="border border_gray">
                                                                        [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�WordPress�˥����������˾�������[wp]����ʬ�����Ȥ��Ƥ���������
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>�֥�̾</th>
                                                                <td>�����ͤΥ֥��Υ����ȥ�</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�桼����̾</th>
                                                                <td>WordPress�������̤ؤΥ�����桼����̾</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ѥ����</th>
                                                                <td>WordPress�������̤ؤΥ�����ѥ����</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�᡼�륢�ɥ쥹</th>
                                                                <td>�����ͤΥ᡼�륢�ɥ쥹</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ǡ����١���</th>
                                                                <td>
                                                                    <p>���Ѥ���ǡ����١�������ꤷ�ޤ���<br>
                                                                        �ä�����ͽ��Υǡ����١�����̵�������󿷤��˺���������ϡ���<em class="font-bold">��ư�ǥǡ����١�������������</em>�פ����򤷤Ƥ���������</p>
                                                                    <aside class="msg msg_notice mb0">
                                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</h6>
                                                                        <div class="msg_body">
                                                                            <p>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����ϡ��ֺ����ѤߤΥǡ����١��������Ѥ���פ����򤷤Ƥ���������<br>
                                                                                ���ξ��ϡ������ι��ܤ����Ϥ���������</p>
                                                                            <dl class="dl">
                                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١���̾</dt>
                                                                                <dd>
                                                                                    <p>���Ѥ���ǡ����١�������ꤷ�Ƥ���������<br>
                                                                                        ��)xsample_wp</p>
                                                                                </dd>
                                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١����桼����̾</dt>
                                                                                <dd>
                                                                                    <p class="mb0">�ǡ����١����桼��������ꤷ�Ƥ���������<br>
                                                                                        ��)xsample_user</p>
                                                                                </dd>
                                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١����ѥѥ����</dt>

                                                                                <dd>�嵭�ǻ��ꤷ���ǡ����١����桼����̾�Υѥ���ɤ����Ϥ��Ƥ���������</dd>
                                                                            </dl>

                                                                            �ǡ����١����κ����ˤĤ��Ƥϡ�<a href="#link-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��Ȥ���������
                                                                        </div>
                                                                    </aside>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ơ���</th>
                                                                <td>WordPress���󥹥ȡ����Ʊ�������򤷤�WordPress�ơ��ޤ����󥹥ȡ��뤵��ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ơ��ޥ��ץ����</th>
                                                                <td>
                                                                    <p>���򤷤�WordPress�ơ��ޤ˻ҥơ��ޤ��󶡤������硢�ҥơ��ޤ�Ʊ���˥��󥹥ȡ��뤹�뤫����Ǥ��ޤ���</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>�ҥơ��ޤ��󶡤�����ơ���</dt>
                                                                        <dd>
                                                                            <ul class="ul">
                                                                                <li>Cocoon</li>
                                                                                <li>Lightning</li>
                                                                                <li>XWRITE</li>
                                                                                <li>SWELL</li>
                                                                            </ul>
                                                                        </dd>
                                                                        <dt><i class="ico ico_square-fill"></i>�ץ饰������󶡤�����ơ���</dt>
                                                                        <dd>
                                                                            <ul class="ul">
                                                                                <li>Snow Monkey</li>
                                                                            </ul>
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ץ饰����</th>
                                                                <td>WordPress���󥹥ȡ����Ʊ�������򤷤�WordPress�ץ饰���󤬥��󥹥ȡ��뤵��ޤ���</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>���֥ɥᥤ��˥��󥹥ȡ����Ԥ����</dt>
                                                            <dd>
                                                                <ol>
                                                                    <li><a href="man_domain_subdomain_setting.php">���֥ɥᥤ������</a>��ꡢ���֥ɥᥤ������ꤷ�Ƥ���������</li>
                                                                    <li>�֥�����URL�פ򥯥�å������ץ�������ꥵ�֥ɥᥤ������򤷤Ƥ���������</li>
                                                                </ol>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b3">3.���󥹥ȡ��봰λ</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            ���̤��ڤ��ؤ�ä����Ȥ˲��˥������뤹��ȥ�󥯤�ɽ������ޤ���<br>
                                                            ����ǥ��󥹥ȡ��봰λ�ˤʤ�ޤ���<br>
                                                            �֥�����ץܥ���򥯥�å����ƥ�������̤ذ�ư���ޤ���
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_3.png?date=2410" alt="WordPress���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b4">4.���󥹥ȡ����ǧ</h5>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_4.png?date=2410" alt="WordPress���å���ܡ��ɡ��֥������ȥ�򥯥�å����ƥ����Ȥ�ɽ��"></p>
                                                        <p>������塢���å���ܡ�����Υ֥������ȥ���ʬ�򥯥�å����뤳�Ȥǡ����󥹥ȡ���������ꤷ���֥����ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_5.png?date=2410" alt="�֥��Υ����꡼�󥷥�å�"></p>
                                                        <p>�ʾ��WordPress��Ƴ���Ͻ�λ�Ǥ���������ͤǤ�����</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section id="dbSetting" class="section">
                                        <h4 class="section_ttl" id="link-c">[����] MySQL�ʥǡ����١����ˤ�����</h4>
                                        <div class="section_body">

                                            <p>��ñ���󥹥ȡ���򤹤����ˡ�WordPress�����Ѥ���ǡ����١����򿷵��������ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c1">1.MySQL���ɲ�</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            WordPress�����Ѥ���ǡ����١������ɲä��ޤ���<br>
                                                            �֥ǡ����١������ɲáפ򥯥�å����������Ѥˤʤ�ǡ����١�����������Ƥ���������<br>
                                                            �ܥޥ˥奢��Ǥϥǡ����١���̾���xsample_wp�פȤ��ƺ������ޤ���<br>
                                                            (ʸ�������ɤϡ�UTF-8(utf8mb4)�פ����ꤷ�Ƥ���������)
                                                        </p>
                                                        <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_6.png?date=2412" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c2">2.MySQL�桼�������ɲ�</h5>
                                                    <div class="box_body">
                                                        <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�������ɲä��ޤ���</p>
                                                        <p class="note">���ɲúѤߤ�MySQL�桼���������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                        <p class="mb0">�֥桼�������ɲáפ򥯥�å����������Ѥˤʤ�桼����̾�ȥѥ���ɤ����ꤷ�����ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                        <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_3.png?date=2410" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c3">3.MySQL����������������</h5>
                                                    <div class="box_body">
                                                        <p>��MySQL�ǡ����١�������פ�����������ǡ����١����˥������������ɲä��ޤ���</p>
                                                        <p class="mb0">�֥桼��������פ򥯥�å������֥桼�������ɲáפ򥯥�å����ޤ���</p>
                                                        <p>MySQL�桼����ID�����ɲä�����MySQL�桼�������򤷡��ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_wp�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_7.png?date=2410" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c4">4.MySQL�����괰λ</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            �ʾ��MySQL������ϴ�λ�Ǥ���<br>
                                                            �ʹߤϡ���<a href="#link-b">��ñ���󥹥ȡ�����</a>�פ˱�äơ����󥹥ȡ����ԤäƤ���������
                                                        </p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section class="section mt50">
                                        <h4 class="section_ttl" id="link-d">WordPress��ñ���󥹥ȡ���κ�����</h4>
                                        <div class="section_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d01">1.��WordPress��ñ���󥹥ȡ���פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d02">2.�оݤ�WordPress���ǧ���ֺ���פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>WordPress����������������̾�Ρֺ���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_9.png" alt="�ֺ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-d03">3.��ǧ�����꤬�ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>���Ƥ��ǧ��������ʤ���С֥��󥤥󥹥ȡ��뤹��פ򥯥�å����Ƥ���������</p>
                                                        <p>WordPress�����Ѥ��Ƥ���MySQL�ǡ����١�����MySQL�桼����������å��弫ư���Cron��ʻ���ƺ����������硢�ִ�Ϣ�ǡ�������פγƹ��ܤ˥����å������줿���֤ǡ֥��󥤥󥹥ȡ��뤹��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_auto_word_10.png?date=250414" alt="�֥��󥤥󥹥ȡ��뤹��פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

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
