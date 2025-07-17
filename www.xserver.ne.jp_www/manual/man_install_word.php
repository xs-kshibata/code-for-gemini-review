<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress ��ư���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�WordPress�פ򤪵Ҥ��ޤ����Ȥǥ��󥹥ȡ��뤹�뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�WordPress�פ����֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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
                                    <li><a href="#link-previous-a">WordPress ���ܸ��� ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-previous-b">WordPress�Υ��������</a></li>
                                    <li><a href="#link-previous-c">MySQL�ʥǡ����١����ˤ�����</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.MySQL���ɲ�</a></li>
                                            <li><a href="#link-previous-c02">2.MySQL�桼�����ɲ�</a></li>
                                            <li><a href="#link-previous-c03">3.MySQL����������������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">�ե����륢�åץ���</a>
                                        <ul>
                                            <li><a href="#link-previous-d01">�����ФؤΥ��åץ���</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-e">���������ɤ����������</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.WordPress��URL�˥�����������wp-config.php�ե�����פ��������</a></li>
                                            <li><a href="#link-previous-e02">2.MySQL�ǡ����١�������³���뤿��ξ��������</a></li>
                                            <li><a href="#link-previous-e03">3.�֥������ȥ�ȥ᡼�륢�ɥ쥹������</a></li>
                                            <li><a href="#link-previous-e04">4.���󥹥ȡ��봰λ</a></li>
                                            <li><a href="#link-previous-e05">5.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-previous-e06">6.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">��ư���󥹥ȡ��뤷��WordPress��֥��󥹥ȡ���Ѥ�WordPress�����פ��ɲä�����</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ�������</a></li>
                                            <li><a href="#link-previous-f02">2.�֤���¾��WordPress��������ɲáפˤ�WordPress���󥹥ȡ���ѥ������Ϥ����ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-f03">3.��ǧ���ְ㤤���ʤ���С��ɲä���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-f04">4.��λ���̤�ɽ���������ɲô�λ�Ǥ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPress ���ܸ��� ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">
                                    <p>������¦��WordPress�Υե�������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>WordPress���󥹥ȡ���������</caption>
                                        <tbody>
                                            <tr><th>�С������</th><td>2.8.2-ja</td></tr>
                                            <tr><th>�����С�ID</th><td>xsample</td></tr>
                                            <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                            <tr><th>���󥹥ȡ���ǥ��쥯�ȥ�</th><td>/home/xsample/example.com/public_html/wp</td></tr>
                                            <tr><th>���󥹥ȡ���URL</th><td>http://example.com/wp/</td></tr>
                                            <tr><th>�ǡ����١���</th><td>MySQL5.7 / MySQL5.5 / MySQL5 / MariaDB 10.5 �Τ�����Ǥ��ǽ<br>��ʸ�������ɤ� UTF-8(utf8mb4) �����ꤷ�Ƥ���������</td></tr>
                                            <tr><th>FTP���ե�</th><td>FFFTP</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">WordPress�Υ��������</h4>
                                <div class="section_body">
                                    <p><img class="img" src="../img/manual/previous/man_install_word_1.png" alt="���������Ȥ��WordPress����������"></p>
                                    <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress ����������</a><i class="ico ico_new-window"></i></p>
                                    <p>���������Ȥ��� ����˽��ä�WordPress�ե�������������ɤ��Ƥ���������<br>
                                    ��������ɸ塢���̥ե���������򤷤ޤ���</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h4>
                                <div class="section_body">
                                    <p>WordPress�����Ѥ���ǡ����١����򿷵��������ޤ���</p>

                                    <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQL���ɲ�</h6>
                                            <div class="box_body">
                                                <p>WordPress�����Ѥ���ǡ����١������ɲä��ޤ�����MySQL�ɲáפ򥯥�å����������Ѥˤʤ�ǡ����١���̾��������Ƥ���������<br>
                                                    �ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_wp�� �Ȥ��ƺ������ޤ���(ʸ�������ɤϡ�UTF-8(utf8mb4)�פ����ꤷ�Ƥ���������)</p>
                                                <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_2.png?date=2412" alt="MySQL�ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQL�桼�����ɲ�</h6>
                                            <div class="box_body">
                                                <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�����ɲä��ޤ���</p>
                                                <p class="note">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                <p class="mb0">��MySQL�桼���ɲáפ򥯥�å����������Ѥˤʤ�桼����̾�ȥѥ���ɤ����ꤷ�ޤ������ϸ塢�ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å�����ɽ�����줿���̤ǡ��ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼��̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_3.png" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQL����������������</h6>
                                            <div class="box_body">
                                                <p>��MySQL�����פ�����������ǡ����١����˥������������ɲä��ޤ�������������̤��ͭ�桼���������ɲä�����MySQL�桼���������ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_wp�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_4.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>�ʾ��MySQL������ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">�ե����륢�åץ���</h4>
                                <div class="section_body">

                                    <p>����塢��wordpress-2.8.2-ja�פȤ����ե������ɽ������ޤ���<br>
                                    (2.8.2�ΥС������ɽ������ʬ�ϡ������ͤ���������ɤ��줿�����ˤ��ۤʤ뤳�Ȥ�����ޤ���)</p>

                                    <section class="block">
                                        <h3 class="block_ttl" id="link-previous-d01">�����ФؤΥ��åץ���</h3>
                                        <div class="block_body">
                                            <p>FTP���եȤ�Ȥ�FTP�����Ф���³���Ƥ����������ܥޥ˥奢��Ǥ�FFFTP��Ȥä�������ԤäƤ��ޤ��ˡ�</p>
                                            <p>FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/�פ���ˡ�wp�ץǥ��쥯�ȥ�򿷵��������Ƥ���������(�ܥޥ˥奢��Ǥϡ������Τ�����Ȥ��ơ�wp�פȤ��Ƥ��ޤ����������ͤ�Ǥ�դΤ�ΤǤ��ޤ��ޤ���)</p>
                                            <p>���ˡ�������¦�Ρ�wordpress-2.8.2-ja�ץե��������ˤ����wordpress�ץե������ɽ�����ޤ�����wordpress�ץե���������ե������FTP�����С��Ρ�wp�ץǥ��쥯�ȥ��ž�����ޤ���</p>
                                            <p class="note">�����ž�������ޤ������ʤ���硢�ե�������Ȥ�ʬ����ʤɤ���ž�����Ƥ���������</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>���åץ�����</dt>
                                                <dd><p><img class="img" src="../img/manual/previous/man_install_word_5.png" alt="FFFTP�β���:ž�����̤Υ����꡼�󥷥�å�"></p></dd>
                                                <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                <dd>
                                                    <p><img class="img" src="../img/manual/previous/man_install_word_6.png" alt="FFFTP�β���:�ե�����ž����Υ����꡼�󥷥�å�"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">���������ɤ����������</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.WordPress��URL�˥�����������wp-config.php�ե�����פ��������</h6>
                                            <div class="box_body">
                                                <p>WordPress�ե�����Υ��åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                <div class="border border_gray">
                                                http://�����ͤΥɥᥤ��̾/wp/<br>
                                                ���ܥޥ˥奢��Ǥϡ�http://example.com/wp/��
                                                </div>
                                                <p>�嵭URL�ǥ�����������ȡ�������β��̤�ɽ������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_7.png" alt="���åץ��ɤ����ե�����ؤΥ�������"></p>
                                                <p>��wp-config.php�ե�������������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_8.png" alt="���������ɤˤ������ե���������γ���"></p>
                                                <p>�ּ��˿ʤߤޤ��礦!�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.MySQL�ǡ����١�������³���뤿��ξ��������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_9.png" alt="MySQL����³���뤿��ξ�������"></p>
                                                <p>���β��̤Ǥϡ�MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th class="w30per-s">�ǡ����١���̾</th>
                                                        <td>��)xsample_wp</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�桼����̾</th>
                                                        <td>��)xsample_user</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ѥ����</th>
                                                        <td>�ǡ����١����桼�����Υѥ���ɤ����Ϥ��ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǡ����١��������ФΥۥ���̾</th>
                                                        <td>MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                            <br>
                                                            MySQL5/MySQL5.5�򤪻Ȥ��Τ����ͤϡ�MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                            ��)mysql20.xserver.jp / mysql20a.xserver.jp<br>
                                                            <br>
                                                            MySQL�Υۥ���̾�ˤĤ��Ƥϡ��֥����С��ѥͥ� &gt; MySQL���� &gt; MySQL���� �פ����ǧ���뤳�Ȥ��Ǥ��ޤ��� </td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ơ��֥���Ƭ��</th>
                                                        <td>���󥹥ȡ���κݤ˼�ư���������ơ��֥�̾����Ƭ������ꤷ�ޤ���<br>
                                                            �̾�ϥǥե�������ϤǤ����wp_�פ����ꤢ��ޤ��� </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><img class="img" src="../img/manual/previous/man_install_word_10.png" alt="WordPress���󥹥ȡ���γ���"></p>
                                            <p>���Ϥ������󤫤�MySQL�ؤ���³����ǧ�Ǥ������ϡ�������β��̤�ɽ������ޤ���</p>
                                            <p>�֥��󥹥ȡ����¹Ԥ��ޤ��礦 !�ץܥ���򥯥�å����ޤ���<br>
                                            (DB��³����꤯�����ʤ����ϡ�MySQL���������ˤĤ��ƺ��٤���ǧ����������)</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.�֥������ȥ�ȥ᡼�륢�ɥ쥹������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_11.png" alt="�֥������ȥ�ȥ᡼�륢�ɥ쥹������"></p>
                                                <p>�����Ǥϡ��֥������ȥ�ȥ᡼�륢�ɥ쥹�����Ϥ��ޤ���<br>
                                                Ǥ�դΥ֥������ȥ�ȡ������ͤ����Ȥ��Υ᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</p>
                                                <p>�������󥸥��ɽ���˴ؤ�������Υ����å��ܥå�����Ǥ�դ����ꤷ�Ƥ���������</p>
                                                <p>���ϸ塢��WordPress�򥤥󥹥ȡ���ץܥ���򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.���󥹥ȡ��봰λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_12.png" alt="���󥹥ȡ�����������ޤ���"></p>
                                                <p>���β��̤Τ褦�ˡ��������ޤ���!�פΥ�å�������ɽ�������ȡ����󥹥ȡ��봰λ�Ǥ���<br>
                                                ���󥹥ȡ��봰λ���ˡ���ۤ����Ϥ����᡼�륢�ɥ쥹���ˡ��桼����̾�ȥѥ���ɤ���������Ƥ��ޤ���</p>
                                                <p>�ʾ��WordPress�Υ��󥹥ȡ���ϴ�λ�Ǥ���</p>
                                                <p>����Ǥϡ����󥹥ȡ��뤷��WordPress�β��̤��ǧ���Ƥߤޤ��礦��<br>
                                                �֥�����ץܥ���򥯥�å�������������̤˰�ư���ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.WordPress�δ������̤إ�����</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_13.png" alt="WordPress�إ�����"></p>
                                                <p>�桼����̾���ѥ���ɤ����Ϥ����������ԤäƤ���������</p>
                                                <p>WordPress�δ������̤ؤȥ����󤷤ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.��λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_14.png" alt="WordPress�إ�����"></p>
                                                <p>�ʸ塢�������URL��WordPress�δ������̤Ȥʤ�ޤ���</p>
                                                <div class="border border_gray">
                                                http://�����ͤΥɥᥤ��̾/wp/wp-login.php<br>
                                                (�ܥޥ˥奢��Ǥϡ�http://example.com/wp/wp-login.php��
                                                </div>
                                                <p>�������̤ؤϥ֥��ڡ������������󤹤뤳�Ȥ���ǽ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_15.png" alt="WordPress�Υ֥�����"></p>
                                                <p>WordPress�Υ֥����̤Ǥ���<br>
                                                ��ۤ�������̤����Ϥ��������ȥ뤬ɽ������Ƥ��ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-f">
                                <h4 id="i1" class="section_ttl">��ư���󥹥ȡ��뤷��WordPress��֥��󥹥ȡ���Ѥ�WordPress�����פ��ɲä�����</h4>
                                <div class="section_body">
                                    <p>��ư���󥹥ȡ��뤷��WordPress�򥵡��С��ѥͥ��WordPress��ñ���󥹥ȡ���פΡ֥��󥹥ȡ���Ѥ�WordPress�����פ��ɲä��뤳�Ȥǡ�WordPress�����ȥ��ԡ��ס�WordPress�ơ��޴����פʤɤε�ǽ�����ѤǤ���褦�ˤʤ�ޤ���</p>
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ�������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_16.png" alt="�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ�������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.�֤���¾��WordPress��������ɲáפˤ�WordPress���󥹥ȡ���ѥ������Ϥ����ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_17.png" alt="�֤���¾��WordPress��������ɲáפˤ�WordPress���󥹥ȡ���ѥ������Ϥ����ɲáפ򥯥�å�"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.��ǧ���ְ㤤���ʤ���С��ɲä���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_18.png" alt="��ǧ���ְ㤤���ʤ���С��ɲä���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f04">4.��λ���̤�ɽ���������ɲô�λ�Ǥ�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_word_19.png" alt="��λ���̤�ɽ���������ɲô�λ�Ǥ�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!--/��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">WordPress ���ܸ��� ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-b">WordPressƳ���ޤǤ�ή��</a>
                                        <ol>
                                            <li><a href="#link-b1">WordPress�Υ��������</a></li>
                                            <li><a href="#link-b2">MySQL(�ǡ����١���)������</a></li>
                                            <li><a href="#link-b3">�ե����륢�åץ���</a></li>
                                            <li><a href="#link-b4">���������ɤ����������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">��ư���󥹥ȡ��뤷��WordPress��������ɲ�</a>
                                        <ol>
                                            <li><a href="#link-c1">1.�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å�</a></li>
                                            <li><a href="#link-c2">2.��WordPress���ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-c3">3.�ּ�ư���󥹥ȡ��뤷��WordPress������Ǵ����פ򥯥�å�</a></li>
                                            <li><a href="#link-c4">4.WordPress���󥹥ȡ���ѥ������Ϥ����ɲä���פ򥯥�å�</a></li>
                                            <li><a href="#link-c5">5.�ɲô�λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">WordPress ���ܸ��� ���󥹥ȡ��� �Ϥ����</h3>

                                        <div class="section_body">
                                            <p>������¦��WordPress�Υե�������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                            <table class="table table_use-caption break-all">
                                                <caption>Wordpress���󥹥ȡ���������</caption>
                                                <tbody>
                                                <tr><th>�С������</th><td>2.8.2-ja</td></tr>
                                                <tr><th>�����С�ID</th><td>xsample</td></tr>
                                                <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                                <tr><th>���󥹥ȡ���ǥ��쥯�ȥ�</th><td>/home/xsample/example.com/public_html/wp</td></tr>
                                                <tr><th>���󥹥ȡ���URL</th><td>http://example.com/wp/</td></tr>
                                                <tr><th>�ǡ����١���</th><td>MySQL5.7 / MySQL5.5 / MySQL5 / MariaDB 10.5 �Τ�����Ǥ��ǽ<br>��ʸ�������ɤ� UTF-8(utf8mb4) �����ꤷ�Ƥ���������</td></tr>
                                                <tr><th>FTP���ե�</th><td>FFFTP</td></tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-b">WordPressƳ���ޤǤ�ή��</h3>

                                        <div class="section_body">
                                            <ol class="ol">
                                                <li><a href="#link-b1">WordPress�Υ��������</a></li>
                                                <li><a href="#link-b2">MySQL(�ǡ����١���)������</a></li>
                                                <li><a href="#link-b3">�ե����륢�åץ���</a></li>
                                                <li><a href="#link-b4">���������ɤ����������</a></li>
                                                <li><a href="#link-c">��ư���󥹥ȡ��뤷��WordPress��������ɲ�</a></li>
                                            </ol>
                                        </div>
                                    </section>


                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b1">WordPress�Υ��������</h5>

                                        <div class="section_body">

                                            <p><img class="img" src="../img/manual/man_install_word_1.png" alt="���������Ȥ��WordPress����������"></p>
                                            <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress ����������</a><i class="ico ico_new-window"></i></p>
                                            <p>���������Ȥ��� ����˽��ä�WordPress�ե�������������ɤ��Ƥ���������<br>
                                                ��������ɸ塢���̥ե���������򤷤ޤ���</p>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b2">MySQL(�ǡ����١���)������</h5>

                                        <div class="section_body">

                                            <p>WordPress�����Ѥ���ǡ����١����򿷵��������ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1.MySQL���ɲ�</h4>
                                                    <div class="box_body">
                                                        <p>WordPress�����Ѥ���ǡ����١������ɲä��ޤ����֥ǡ����١������ɲáפ򥯥�å����������Ѥˤʤ�ǡ����١�����������Ƥ����������ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_wp�� �Ȥ��ƺ������ޤ���(ʸ�������ɤϡ�UTF-8(utf8mb4)�פ����ꤷ�Ƥ���������)</p>
                                                        <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_2.png?date=2412" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2.MySQL�桼�������ɲ�</h4>
                                                    <div class="box_body">
                                                        <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�������ɲä��ޤ���</p>
                                                        <p class="note">���ɲúѤߤ�MySQL�桼���������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                        <p class="mb0">�֥桼�������ɲáפ򥯥�å����������Ѥˤʤ�桼����̾�ȥѥ���ɤ����ꤷ�����ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                        <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_3.png?date=2410" alt="MySQL�Υ桼�������ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3.MySQL����������������</h4>
                                                    <div class="box_body">
                                                        <p>��MySQL�ǡ����١�������פ�����������ǡ����١����˥������������ɲä��ޤ���</p>
                                                        <p class="mb0">�֥桼��������פ򥯥�å������֥桼�������ɲáפ򥯥�å����ޤ���</p>
                                                        <p>MySQL�桼����ID�����ɲä�����MySQL�桼���������򤷡��ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_wp�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_4.png?date=2410" alt="MySQL��������̡�MySQL�Υ桼�����ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                        <p>�ʾ��MySQL������ϴ�λ�Ǥ���</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b3">�ե����륢�åץ���</h5>

                                        <div class="section_body">
                                            <p>
                                                ����塢��wordpress-2.8.2-ja�פȤ����ե������ɽ������ޤ���<br>
                                                (2.8.2�ΥС������ɽ������ʬ�ϡ������ͤ���������ɤ��줿�����ˤ��ۤʤ뤳�Ȥ�����ޤ���)
                                            </p>
                                            <section class="block">
                                                <h6 class="block_ttl">�����С��ؤΥ��åץ���</h6>
                                                <div class="block_body">
                                                    <p>FTP���եȤ�Ȥ�FTP�����С�����³���Ƥ�������(�ܥޥ˥奢��Ǥ�FFFTP��Ȥä�������ԤäƤ��ޤ�)��</p>
                                                    <p>FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/�פ���ˡ�wp�ץǥ��쥯�ȥ�򿷵��������Ƥ���������(�ܥޥ˥奢��Ǥϡ������Τ�����Ȥ��ơ�wp�פȤ��Ƥ��ޤ����������ͤ�Ǥ�դΤ�ΤǤ��ޤ��ޤ���)</p>
                                                    <p>���ˡ�������¦�Ρ�wordpress-2.8.2-ja�ץե��������ˤ����wordpress�ץե������ɽ�����ޤ�����wordpress�ץե���������ե������FTP�����С��Ρ�wp�ץǥ��쥯�ȥ��ž�����ޤ���</p>
                                                    <p class="note">�����ž�������ޤ������ʤ���硢�ե�������Ȥ�ʬ����ʤɤ���ž�����Ƥ���������</p>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>���åץ�����</dt>
                                                        <dd><p><img class="img" src="../img/manual/man_install_word_5.png?date=2410" alt="FFFTP�β���:ž�����̤Υ����꡼�󥷥�å�"></p></dd>
                                                        <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                        <dd>
                                                            <p><img class="img" src="../img/manual/man_install_word_6.png?date=2412" alt="FFFTP�β���:�ե�����ž����Υ����꡼�󥷥�å�"></p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h5 class="section_ttl" id="link-b4">���������ɤ����������</h5>

                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1. WordPress��URL�˥�����������wp-config.php�ե�����פ��������</h4>
                                                    <div class="box_body">
                                                        <p>WordPress�ե�����Υ��åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                        <div class="border border_gray">
                                                            http://�����ͤΥɥᥤ��̾/wp/<br>
                                                            (�ܥޥ˥奢��Ǥϡ�http://example.com/wp/)
                                                        </div>
                                                        <p>�嵭URL�ǥ�����������ȡ�������β��̤�ɽ������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_7.png?date=2410" alt="���åץ��ɤ����ե�����ؤΥ�������"></p>
                                                        <p>��wp-config.php�ե�������������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_8.png?date=2410" alt="���������ɤˤ������ե���������γ���"></p>
                                                        <p>�ּ��˿ʤߤޤ��礦!�פ򥯥�å����ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2. MySQL�ǡ����١�������³���뤿��ξ��������</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_9.png?date=2410" alt="MySQL����³���뤿��ξ�������"></p>
                                                        <p>���β��̤Ǥϡ�MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">�ǡ����١���̾</th>
                                                                <td>��)xsample_wp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�桼����̾</th>
                                                                <td>��)xsample_user</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ѥ����</th>
                                                                <td>�ǡ����١����桼�����Υѥ���ɤ����Ϥ��ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ǡ����١��������С��Υۥ���̾</th>
                                                                <td>MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                                    <br>
                                                                    MySQL5/MySQL5.5�򤪻Ȥ��Τ����ͤϡ�MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                                    ��)mysql20.xserver.jp / mysql20a.xserver.jp<br>
                                                                    <br>
                                                                    MySQL�Υۥ���̾�ˤĤ��Ƥϡ��֥����С��ѥͥ� &gt; MySQL���� &gt; MySQL���� �פ����ǧ���뤳�Ȥ��Ǥ��ޤ��� </td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ơ��֥���Ƭ��</th>
                                                                <td>���󥹥ȡ���κݤ˼�ư���������ơ��֥�̾����Ƭ������ꤷ�ޤ���<br>
                                                                    �̾�ϥǥե�������ϤǤ����wp_�פ����ꤢ��ޤ��� </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/man_install_word_10.png?date=2410" alt="WordPress���󥹥ȡ���γ���"></p>
                                                        <p>���Ϥ������󤫤�MySQL�ؤ���³����ǧ�Ǥ������ϡ�������β��̤�ɽ������ޤ���</p>
                                                        <p>
                                                            �֥��󥹥ȡ����¹Ԥ��ޤ��礦 !�ץܥ���򥯥�å����ޤ���<br>
                                                            (DB��³����꤯�����ʤ����ϡ�MySQL���������ˤĤ��ƺ��٤���ǧ����������)
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3. �֥������ȥ�ȥ᡼�륢�ɥ쥹������</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_11.png?date=2410" alt="�֥������ȥ�ȥ᡼�륢�ɥ쥹������"></p>
                                                        <p>�����Ǥϡ��֥������ȥ�ȥ᡼�륢�ɥ쥹�����Ϥ��ޤ���<br>
                                                            Ǥ�դΥ֥������ȥ�ȡ������ͤ����Ȥ��Υ᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</p>
                                                        <p>�������󥸥��ɽ���˴ؤ�������Υ����å��ܥå�����Ǥ�դ����ꤷ�Ƥ���������</p>
                                                        <p>���ϸ塢��WordPress�򥤥󥹥ȡ���ץܥ���򥯥�å����ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">4. ���󥹥ȡ��봰λ</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_12.png?date=2410" alt="���󥹥ȡ�����������ޤ���"></p>
                                                        <p>���β��̤Τ褦�ˡ��������ޤ���!�פΥ�å�������ɽ�������ȡ����󥹥ȡ��봰λ�Ǥ���<br>
                                                            ���󥹥ȡ��봰λ���ˡ���ۤ����Ϥ����᡼�륢�ɥ쥹���ˡ��桼����̾�ȥѥ���ɤ���������Ƥ��ޤ���</p>
                                                        <p>�ʾ��WordPress�Υ��󥹥ȡ���ϴ�λ�Ǥ���</p>
                                                        <p>����Ǥϡ����󥹥ȡ��뤷��WordPress�β��̤��ǧ���Ƥߤޤ��礦��<br>
                                                            �֥�����ץܥ���򥯥�å�������������̤˰�ư���ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">5. WordPress�δ������̤إ�����</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_13.png?date=2410" alt="WordPress�إ�����"></p>
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ����������ԤäƤ���������</p>
                                                        <p>WordPress�δ������̤ؤȥ����󤷤ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">6. ��λ</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_14.png?date=2410" alt="WordPress�إ�����"></p>
                                                        <p>�ʸ塢�������URL��WordPress�δ������̤Ȥʤ�ޤ���</p>
                                                        <div class="border border_gray">
                                                            http://�����ͤΥɥᥤ��̾/wp/wp-login.php<br>
                                                            (�ܥޥ˥奢��Ǥϡ�http://example.com/wp/wp-login.php)
                                                        </div>
                                                        <p>�������̤ؤϥ֥��ڡ������������󤹤뤳�Ȥ���ǽ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_15.png?date=2410" alt="WordPress�Υ֥�����"></p>
                                                        <p>WordPress�Υ֥����̤Ǥ���<br>
                                                            ��ۤ�������̤����Ϥ��������ȥ뤬ɽ������Ƥ��ޤ���</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <section class="section">
                                        <h3 class="section_ttl" id="link-c">��ư���󥹥ȡ��뤷��WordPress��������ɲ�</h3>

                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 id="link-c1" class="box_ttl">1.�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_16.png?date=2410" alt="�����С��ѥͥ����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ�������"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c2" class="box_ttl">2.��WordPress���ɲáפ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_17.png?date=2410" alt="��WordPress���ɲáפ򥯥�å����Ƥ�������"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c3" class="box_ttl">3.�ּ�ư���󥹥ȡ��뤷��WordPress������Ǵ����פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_18.png?date=2410" alt="�ּ�ư���󥹥ȡ��뤷��WordPress������Ǵ����פ򥯥�å����Ƥ�������"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c4" class="box_ttl">4.WordPress���󥹥ȡ���ѥ������Ϥ����ɲä���פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_word_19.png?date=2410" alt="WordPress���󥹥ȡ���ѥ������Ϥ����ɲä���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 id="link-c5" class="box_ttl">5.�ɲô�λ</h4>
                                                    <div class="box_body">
                                                        <p>�������ɲä������ɲô�λ�Ǥ���</p>
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