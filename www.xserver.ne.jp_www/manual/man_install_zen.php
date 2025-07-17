<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Zen Cart ��ư���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�Zen Cart�פ򤪵Ҥ��ޤ����Ȥǥ��󥹥ȡ��뤹�뤿��μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Zen Cart</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Zen Cart ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-previous-b">Zen Cart�Υ��������</a></li>
                                    <li><a href="#link-previous-c">MySQL�ʥǡ����١����ˤ�����</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.��MySQL����פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-c02">2.MySQL���ɲ�</a></li>
                                            <li><a href="#link-previous-c03">3.MySQL�桼�����ɲ�</a></li>
                                            <li><a href="#link-previous-c04">4.MySQL�������������ɲ�</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">�ե����륢�åץ���</a>
                                        <ul>
                                            <li><a href="#link-previous-d01">1.���åץ�����γ�ǧ</a></li>
                                            <li><a href="#link-previous-d02">2.�ե�����Υ��åץ���</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-e">���åȥ��å�</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.Zen Cart��URL�˥����������ޤ���</a></li>
                                            <li><a href="#link-previous-e02">2.�֥��󥹥ȡ���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-e03">3.�ǡ����١���������</a></li>
                                            <li><a href="#link-previous-e04">4.�����ƥ�Ķ�������</a></li>
                                            <li><a href="#link-previous-e05">5.����åפδ���Ū������</a></li>
                                            <li><a href="#link-previous-e06">6.�����ԥ������������</a></li>
                                            <li><a href="#link-previous-e07">7.���åȥ��å״�λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">���åȥ��å׸�κ��</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.��includes�ץե�����ذ�ư</a></li>
                                            <li><a href="#link-previous-f02">2.��configure.php�פΥѡ��ߥå�����ѹ�</a></li>
                                            <li><a href="#link-previous-f03">3.��zc_install�פ���</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-g">�������̤�����</a>
                                        <ol>
                                            <li><a href="#link-previous-g01">1.��admin�ץե�����ذ�ư</a></li>
                                            <li><a href="#link-previous-g02">2.��admin�ץե������̾���ѹ�</a></li>
                                            <li><a href="#link-previous-g03">3.�������̤إ�������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-h">���󥹥ȡ��봰λ</a>
                                        <ol>
                                            <li><a href="#link-previous-h01">1.��admin�ץե�����ذ�ư</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Zen Cart ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">

                                    <p>������¦�ǡ�ZenCart�Υѥå��������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>ZenCart�Υ��󥹥ȡ���������</caption>
                                        <tbody>
                                            <tr>
                                                <th>�С������̾</th>
                                                <td>Zen Cart 1.5.1�����ܸ��ǡ�</td>
                                            </tr>
                                            <tr>
                                                <th>�����С�ID</th>
                                                <td>xsample</td>
                                            </tr>
                                            <tr>
                                                <th>�ɥᥤ��̾</th>
                                                <td>example.com</td>
                                            </tr>
                                            <tr>
                                                <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                                <td>/home/xsample/example.com/public_html/zc/</td>
                                            </tr>
                                            <tr>
                                                <th>���󥹥ȡ���URL</th>
                                                <td>http://example.com/zc/</td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١���</th>
                                                <td>MySQL5.5</td>
                                            </tr>
                                            <tr>
                                                <th>FTP���ե�</th>
                                                <td>FileZilla</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">Zen Cart�Υ��������</h4>
                                <div class="section_body">
                                    <p>���������Ȥ��顢����ˤ������ä�Zen Cart��ɬ�פʥե�������������ɤ��Ƥ���������<br>
                                    ��������ɴ�λ�塢���̥ե��������ष�ޤ���</p>
                                    <p class="link"><a href="http://zen-cart.jp/" target="_blank" rel="nofollow">ZenCart ����������</a><i class="ico ico_new-window"></i></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.��MySQL����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�����С��ѥͥ�إ����󤷡���MySQL����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQL���ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�ɲáפ򥯥�å����ޤ���</p>
                                                <p>��MySQL�ǡ����١���̾�פ����Ϥ���ʸ�������ɤ��UTF-8�פȤ��������ǡ��ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ�����ǧ���̤�ɽ�����줿�顢���Ƥ��ǧ���������ǡ��ɲä���פ򥯥�å����ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ�MySQL�ǡ����١���̾���xsample_zc�פȤ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_1.png" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQL�桼�����ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�桼���ɲáפ򥯥�å����ޤ���<br>
                                                ��MySQL�桼��ID�פȡ֥ѥ���ɡפ����Ϥ�����MySQL�桼�����ɲáʳ�ǧ�ˡע���MySQL�桼�����ɲáʳ���ˡפ򥯥�å����ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ�MySQL�桼�������xsample_user�פȤ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_2.png" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.MySQL�������������ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�����פ���ꡢ�ɲä���MySQL�ǡ����١����Ρ֥���������̤��ͭ�桼���פ����ɲä�����MySQL�桼�������򤷡����ɲáפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_3.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>�ɲä���MySQL�桼�����֥���������̤��ͭ�桼���פ���֥�����������ͭ�桼���פذ�ư���ޤ����顢MySQL�������������ɲäϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_4.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>���ܥޥ˥奢��Ǥϡ��ǡ����١�����xsample_zc�פ�MySQL�桼������xsample_user�פ��ɲä��ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-d" class="section_ttl">�ե����륢�åץ���</h4>
                                <div class="section_body">

                                    <p>���������Ȥ���������ɤ����ե��������ष�Ƥ���������<br>
                                    ����塢FTP���եȤ��Ѱդ��������ե�����Υ��åץ��ɤ򤪿ʤ᤯��������<br>
                                    ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.���åץ�����γ�ǧ</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html�פ���ˡ�zc�ץե������������ե�����Υ��åץ��ɤ�Ԥ��ޤ���</p>
                                                <p>FileZilla�Ǥϡ���¦�Υ����С��ΰ�򱦥���å����֥ǥ��쥯�ȥ��������ư�ư�פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_5.png" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>³���ơ���������ǥ��쥯�ȥ�̾�����Ϥ��ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/�פ�������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_6.png" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.�ե�����Υ��åץ���</h6>
                                            <div class="box_body">
                                                <p>��¦�Υ�����夫��Zen Cart��ɬ�פʥե�������zc�ץե���������ƥ��åץ��ɤ��ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>���åץ���</dt>
                                                    <dd><p><img class="img" src="../img/manual/previous/man_install_zen_7.png" alt="define.php:�Խ����Υե������ѹ��ս�˥ե�������"></p></dd>
                                                    <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                    <dd><p><img class="img" src="../img/manual/previous/man_install_zen_8.png" alt="define.php:�Խ���Υե������Խ��ս�˥ե�������"></p></dd>
                                                </dl>
                                                <p>��¦�Υ����С��ΰ�˥ե����뤬ɽ������Ƥ���С����åץ��ɴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">���åȥ��å�</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.Zen Cart��URL�˥����������ޤ���</h6>
                                            <div class="box_body">
                                                <p>ZenCart�Υե����륢�åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                <div class="border border_gray">
                                                http://�����ͤΥɥᥤ��̾/zc/zc_install/<br>
                                                ���ܥޥ˥奢��Ǥϡ�http://example.com/zc/zc_install/��
                                                </div>

                                                <p>URL�إ�����������ȥ��åȥ��åײ��̤�ɽ������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_9.png" alt="ZenCart�Υ����꡼�󥷥�å�"></p>
                                                <p>��³����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_10.png" alt="�־嵭���ǧ���������Ǥ����Ʊ�դ��ޤ����פ˥����å��������³����פ򥯥�å�"></p>
                                                <p>�饤���󥹵�����ǧ�����־嵭���ǧ���������Ǥ����Ʊ�դ��ޤ����ס��˥����å������졢��³����פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.�֥��󥹥ȡ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�֥����ƥม���׹��ܤβ��̲����Ρ֥��󥹥ȡ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_11.png" alt="�֥��󥹥ȡ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.�ǡ����١���������</h6>
                                            <div class="box_body">
                                                <p>�ǡ����١���������̤�ɽ������ޤ���<br>
                                                MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_12.png" alt="�ǡ����١�������Υ����꡼�󥷥�å�"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�ǡ����١�������</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>�ǡ����١���ʸ�����å�/�ȹ�</th>
                                                            <td>UTF-8 (default)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǡ����١����ۥ���̾</th>
                                                            <td>MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                                ���mysql20a.xserver.jp<br>
                                                                <br>
                                                                MySQL�ۥ���̾�ϡ֥����С��ѥͥ��MySQL�����MySQL����פ���ǧ��ǽ�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǡ����١����桼����̾</th>
                                                            <td> MySQL�ʥǡ����١����ˤ�����Ǻ�������MySQL�桼����̾<br>
                                                                ��:xsample_user</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǡ����١����ѥ����</th>
                                                            <td>MySQL�桼����̾�����������ꤷ���ѥ����</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǡ����١���̾</th>
                                                            <td>MySQL�桼����̾�����������ꤷ���ǡ����١���̾<br>
                                                                ��:xsample_zc</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǡ����١��� - ���ץ��������</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>�ơ��֥�ץ�ե��å���</th>
                                                            <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>SQL����å������ˡ</th>
                                                            <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>���å����/SQL����å���ǥ��쥯�ȥ�</th>
                                                            <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��� </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>�ǡ����١����������ϸ塢�֥ǡ����١����������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.�����ƥ�Ķ�������</h6>
                                            <div class="box_body">
                                                <p>�����ƥ����꤬ɽ������ޤ���ɬ�פ˱������ѹ����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_13.png" alt="�����ƥ�Ķ��������"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�����С�����</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>���֥ǥ��쥯�ȥ�</th>
                                                            <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����Ȥ�URL</th>
                                                            <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>SSL Details</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>SSL�����ФΥۥ���̾<br>
                                                                �����פʤ�����</th>
                                                            <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                                ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����Ȥ�URL<br>
                                                                ��SSL/���פʤ�����</th>
                                                            <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                                ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>��������ܳ�ǧ�塢���������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.����åפδ���Ū������</h6>
                                            <div class="box_body">
                                                <p>��������ܤ򤪵���Ǥ�դ����ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_14.png" alt="����å��������"></p>

                                                <table class="table table_use-caption">
                                                    <caption>����å׾���</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>����å�̾</th>
                                                            <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                                ��˥ƥ��ȥ���å�</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����åץ����ʡ���̾��</th>
                                                            <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                                ��˥���åץ����ʡ�</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����åץ����ʡ��Υ᡼�륢�ɥ쥹</th>
                                                            <td>�᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>��</th>
                                                            <td>�����ꤷ�Ƥ���������<br>
                                                                ���Japan</td>
                                                        </tr>
                                                        <tr>
                                                            <th>������</th>
                                                            <td>���������ꤷ�Ƥ���������<br>
                                                                ��������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����åפν���</th>
                                                            <td>Ǥ�դ�ʸ�������꤯��������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǥե���Ȥθ���</th>
                                                            <td>�������ꤷ�Ƥ���������<br>
                                                                ���Japanese</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ǥե���Ȥ��̲�</th>
                                                            <td>�̲ߤ���ꤷ�Ƥ���������<br>
                                                                ���Japanese Yen</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǥ����</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>����åפΥǥ�</th>
                                                            <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                                ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>������������ϸ塢�֥���å��������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.�����ԥ������������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_15.png" alt="�����ԥ���������������"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�����Ծ���</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>������ID</th>
                                                            <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                                ���admin</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����ԥѥ����</th>
                                                            <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����ԥѥ���ɡʳ�ǧ��</th>
                                                            <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����ԤΥ᡼�륢�ɥ쥹</th>
                                                            <td>�᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǿ��Ǥθ���</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>������Τ��Ӥ�Zen Cart�κǿ��С�����������å�����</th>
                                                            <td>ɬ�פ˱������ѹ����Ƥ���������</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>������������ϸ塢�ִ������������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 id="link-previous-e07" class="box_ttl">7.���åȥ��å״�λ</h6>
                                            <div class="box_body">
                                                <p>���åȥ��åפ���λ���ޤ�����<br>
                                                ���ΤޤޤǤ����ѤǤ��ʤ����ᡢ<a href="#link-previous-f">���åȥ��å׸�κ��</a>��ɬ�פǤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_16.png" alt="���ִ�λ����"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>���åȥ��å״�λ���̤Ϥ��Τޤޤξ��֡ʥ֥饦���ϳ��������֡ˤǡ�<a href="#link-previous-f">���åȥ��å׸�κ��</a>��<a href="#link-previous-g">�������̤�����</a>��ʤ�Ƥ���������</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-f" class="section_ttl">���åȥ��å׸�κ��</h4>
                                <div class="section_body">

                                    <p>FTP���եȤ��Ѱդ��������ե�����κ����ѡ��ߥå������ѹ���Ԥ��ޤ���<br>
                                    ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.��includes�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������</p>
                                                <p class="mb0">FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/zc/admin/includes/�פذ�ư���ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/admin/includes/�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_17.png" alt="��includes�ץե�����ذ�ư1"></p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_18.png" alt="��includes�ץե�����ذ�ư2"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.��configure.php�פΥѡ��ߥå�����ѹ�</h6>
                                            <div class="box_body">
                                                <p>��configure.php�ץե�������ǧ���ޤ���<br>
                                                ��configure.php�ץե�����򱦥���å����֥ե�����Υѡ��ߥå����פ����򤷤ޤ���</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_zen_19.png" alt="�ѡ��ߥå�����ѹ�1"></p>
                                                <p>�֥ե������°�����ѹ��פ�ɽ������ޤ������ͤ��444�פ��ѹ����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_20.png" alt="�ѡ��ߥå�����ѹ�2"></p>
                                                <p>³���ơ֤����ͤΥɥᥤ��̾/public_html/zc/admin/includes/�פ����ޤ���<br>
                                                ���١���configure.php�ץե�����򱦥���å����֥ե�����Υѡ��ߥå����פ����ͤ���444�פ��ѹ�����Ƥ��뤫��ǧ���Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.��zc_install�פ���</h6>
                                            <div class="box_body">
                                                <p>�֤����ͤΥɥᥤ��̾/public_html/zc/�פ���ꡢ��zc_install�ץե�������ǧ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_21.png" alt="��zc_install�פ���1"></p>
                                                <p>��zc_install�ץե�����򱦥���å������ֺ���פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_22.png" alt="��zc_install�פ���2"></p>
                                                <p>�֤Ϥ��פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_23.png" alt="��zc_install�פ���3"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-g" class="section_ttl">�������̤�����</h4>
                                <div class="section_body">

                                    <p>7.���åȥ��å״�λ����ɽ�����줿�ִ������̡פإ����������ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_zen_24.png" alt="���ִ�λ����"></p>

                                    <p>������������Ȳ����ٹ���̤�ɽ������ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_zen_25.png" alt="�ٹ����"></p>
                                    <p>�ٹ�ΤȤ��ꡢ��admin�ץե������̾�����ѹ�����ɬ�פ�����ޤ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.��admin�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>
                                                <p class="mb0">FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/zc/admin/�פذ�ư���ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/admin/�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_26.png" alt="��admin�ץե�����ذ�ư"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.��admin�ץե������̾���ѹ�</h6>
                                            <div class="box_body">
                                                <p>��admin�ץե�����򱦥���å�������̾�����ѹ��פ����򤷤ޤ���</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_zen_27.png" alt="��admin�ץե������̾���ѹ�1"></p>
                                                <p>������̾�������Ϥ������ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_28.png" alt="��admin�ץե������̾���ѹ�2"></p>
                                                <ul class="note-list">
                                                    <li>���ܥޥ˥奢��Ǥϡ���admin-tool�פ��ѹ����Ƥ��ޤ���</li>
                                                    <li>����¸�ե������ե�����̾�Ƚ�ʣ���ʤ��褦�ˤ���դ���������</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.�������̤إ�������</h6>
                                            <div class="box_body">
                                                <p>�������̤إ�������������������̤�ɽ������뤫����ǧ����������</p>
                                                <p>�������̥�������URL�ϡ�http://Zen Cart���󥹥ȡ���URL/admin�ե�����ѹ�̾�٤Ȥʤ�ޤ���</p>
                                                <div class="border border_blue">�����<br>
                                                �ܥޥ˥奢��Ǥϡ�admin-tool�פ��ѹ��������ᡢ���󥹥ȡ���URL�� http://example.com/zc/ �ξ�� http://example.com/zc/admin-tool �ˤƴ������̤إ���������ǽ�Ǥ���
                                                </div>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_29.png" alt="��������"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-h" class="section_ttl">���󥹥ȡ��봰λ</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-h01">1.��admin�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p><a href="#link-previous-e07">7.���åȥ��å״�λ��</a>��ɽ�����줿�֥���åספإ����������Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_30.png" alt="���ִ�λ����"></p>
                                                <p>�������������ʲ��β��̤�ɽ�������С����󥹥ȡ��봰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_31.png" alt="����åײ���"></p>
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
                                    <li><a href="#link-a">Zen Cart ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-b">Zen Cart�Υ��������</a></li>
                                    <li><a href="#link-c">MySQL�ʥǡ����١����ˤ�����</a>
                                        <ol>
                                            <li><a href="#link-c01">1.��MySQL����פ򥯥�å�</a></li>
                                            <li><a href="#link-c02">2.MySQL���ɲ�</a></li>
                                            <li><a href="#link-c03">3.MySQL�桼�����ɲ�</a></li>
                                            <li><a href="#link-c04">4.MySQL�������������ɲ�</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�ե����륢�åץ���</a>
                                        <ul>
                                            <li><a href="#link-d01">1.���åץ�����γ�ǧ</a></li>
                                            <li><a href="#link-d02">2.�ե�����Υ��åץ���</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-e">���åȥ��å�</a>
                                        <ol>
                                            <li><a href="#link-e01">1.Zen Cart��URL�˥����������ޤ���</a></li>
                                            <li><a href="#link-e02">2.�֥��󥹥ȡ���פ򥯥�å�</a></li>
                                            <li><a href="#link-e03">3.�ǡ����١���������</a></li>
                                            <li><a href="#link-e04">4.�����ƥ�Ķ�������</a></li>
                                            <li><a href="#link-e05">5.����åפδ���Ū������</a></li>
                                            <li><a href="#link-e06">6.�����ԥ������������</a></li>
                                            <li><a href="#link-e07">7.���åȥ��å״�λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">���åȥ��å׸�κ��</a>
                                        <ol>
                                            <li><a href="#link-f01">1.��includes�ץե�����ذ�ư</a></li>
                                            <li><a href="#link-f02">2.��configure.php�פΥѡ��ߥå�����ѹ�</a></li>
                                            <li><a href="#link-f03">3.��zc_install�פ���</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-g">�������̤�����</a>
                                        <ol>
                                            <li><a href="#link-g01">1.��admin�ץե�����ذ�ư</a></li>
                                            <li><a href="#link-g02">2.��admin�ץե������̾���ѹ�</a></li>
                                            <li><a href="#link-g03">3.�������̤إ�������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-h">���󥹥ȡ��봰λ</a>
                                        <ol>
                                            <li><a href="#link-h01">1.��admin�ץե�����ذ�ư</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Zen Cart ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">

                                    <p>������¦�ǡ�ZenCart�Υѥå��������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>ZenCart�Υ��󥹥ȡ���������</caption>
                                        <tbody>
                                        <tr>
                                            <th>�С������̾</th>
                                            <td>Zen Cart 1.5.1�����ܸ��ǡ�</td>
                                        </tr>
                                        <tr>
                                            <th>�����С�ID</th>
                                            <td>xsample</td>
                                        </tr>
                                        <tr>
                                            <th>�ɥᥤ��̾</th>
                                            <td>example.com</td>
                                        </tr>
                                        <tr>
                                            <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                            <td>/home/xsample/example.com/public_html/zc/</td>
                                        </tr>
                                        <tr>
                                            <th>���󥹥ȡ���URL</th>
                                            <td>http://example.com/zc/</td>
                                        </tr>
                                        <tr>
                                            <th>�ǡ����١���</th>
                                            <td>MySQL5.5</td>
                                        </tr>
                                        <tr>
                                            <th>FTP���ե�</th>
                                            <td>FileZilla</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-b" class="section_ttl">Zen Cart�Υ��������</h4>
                                <div class="section_body">
                                    <p>���������Ȥ��顢����ˤ������ä�Zen Cart��ɬ�פʥե�������������ɤ��Ƥ���������<br>
                                        ��������ɴ�λ�塢���̥ե��������ष�ޤ���</p>
                                    <p class="link"><a href="http://zen-cart.jp/" target="_blank" rel="nofollow">ZenCart ����������</a><i class="ico ico_new-window"></i></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-c" class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c01">1.��MySQL����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�����С��ѥͥ�إ����󤷡���MySQL����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_2.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c02">2.MySQL���ɲ�</h6>
                                            <div class="box_body">
                                                <p>�֥ǡ����١������ɲáפ򥯥�å����ޤ���</p>
                                                <p>��MySQL�ǡ����١���̾�פ����Ϥ���ʸ�������ɤ��UTF-8�פȤ��������ǡ����ɲä���פ򥯥�å����ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ�MySQL�ǡ����١���̾���xsample_zc�פȤ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_1.png?date=2410" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c03">3.MySQL�桼�����ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�桼��������פ򥯥�å������֥ǡ����١������ɲáפ򥯥�å����ޤ���<br>
                                                    ��MySQL�桼��ID�פȡ֥ѥ���ɡפ����Ϥ������ɲä���פ򥯥�å����ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ�MySQL�桼�������xsample_user�פȤ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_2.png?date=2410" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c04">4.MySQL�������������ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�ǡ����١�������פ���ꡢ�ɲä���MySQL�ǡ����١����Ρ֥桼��������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_3.png?date=2410" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>�֥桼�������ɲáפ򥯥�å�����������ˡ�����򤷡����ɲä���פ򥯥�å����Ƥ���������<br>�ɲä����ǡ����١����Ρ֥�����������ͭ�桼�����פ��ɲä����桼������ɽ������Ƥ�����ɲäϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_4.png?date=2410" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>���ܥޥ˥奢��Ǥϡ��ǡ����١�����xsample_zc�פ�MySQL�桼������xsample_user�פ��ɲä��ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-d" class="section_ttl">�ե����륢�åץ���</h4>
                                <div class="section_body">

                                    <p>���������Ȥ���������ɤ����ե��������ष�Ƥ���������<br>
                                        ����塢FTP���եȤ��Ѱդ��������ե�����Υ��åץ��ɤ򤪿ʤ᤯��������<br>
                                        ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d01">1.���åץ�����γ�ǧ</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                    FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html�פ���ˡ�zc�ץե������������ե�����Υ��åץ��ɤ�Ԥ��ޤ���</p>
                                                <p>FileZilla�Ǥϡ���¦�Υ����С��ΰ�򱦥���å����֥ǥ��쥯�ȥ��������ư�ư�פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_5.png" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>³���ơ���������ǥ��쥯�ȥ�̾�����Ϥ��ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/�פ�������ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_6.png" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d02">2.�ե�����Υ��åץ���</h6>
                                            <div class="box_body">
                                                <p>��¦�Υ�����夫��Zen Cart��ɬ�פʥե�������zc�ץե���������ƥ��åץ��ɤ��ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>���åץ���</dt>
                                                    <dd><p><img class="img" src="../img/manual/man_install_zen_7.png" alt="define.php:�Խ����Υե������ѹ��ս�˥ե�������"></p></dd>
                                                    <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                    <dd><p><img class="img" src="../img/manual/man_install_zen_8.png" alt="define.php:�Խ���Υե������Խ��ս�˥ե�������"></p></dd>
                                                </dl>
                                                <p>��¦�Υ����С��ΰ�˥ե����뤬ɽ������Ƥ���С����åץ��ɴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-e" class="section_ttl">���åȥ��å�</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e01">1.Zen Cart��URL�˥����������ޤ���</h6>
                                            <div class="box_body">
                                                <p>ZenCart�Υե����륢�åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                <div class="border border_gray">
                                                    http://�����ͤΥɥᥤ��̾/zc/zc_install/<br>
                                                    ���ܥޥ˥奢��Ǥϡ�http://example.com/zc/zc_install/��
                                                </div>

                                                <p>URL�إ�����������ȥ��åȥ��åײ��̤�ɽ������ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_9.png" alt="ZenCart�Υ����꡼�󥷥�å�"></p>
                                                <p>��³����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_10.png" alt="�־嵭���ǧ���������Ǥ����Ʊ�դ��ޤ����פ˥����å��������³����פ򥯥�å�"></p>
                                                <p>�饤���󥹵�����ǧ�����־嵭���ǧ���������Ǥ����Ʊ�դ��ޤ����ס��˥����å������졢��³����פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e02">2.�֥��󥹥ȡ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�֥����ƥม���׹��ܤβ��̲����Ρ֥��󥹥ȡ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_11.png" alt="�֥��󥹥ȡ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e03">3.�ǡ����١���������</h6>
                                            <div class="box_body">
                                                <p>�ǡ����١���������̤�ɽ������ޤ���<br>
                                                    MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_12.png" alt="�ǡ����١�������Υ����꡼�󥷥�å�"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�ǡ����١�������</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>�ǡ����١���ʸ�����å�/�ȹ�</th>
                                                        <td>UTF-8 (default)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǡ����١����ۥ���̾</th>
                                                        <td>MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                            ���mysql20a.xserver.jp<br>
                                                            <br>
                                                            MySQL�ۥ���̾�ϡ֥����С��ѥͥ��MySQL�����MySQL����פ���ǧ��ǽ�Ǥ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǡ����١����桼����̾</th>
                                                        <td> MySQL�ʥǡ����١����ˤ�����Ǻ�������MySQL�桼����̾<br>
                                                            ��:xsample_user </td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǡ����١����ѥ����</th>
                                                        <td>MySQL�桼����̾�����������ꤷ���ѥ����</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǡ����١���̾</th>
                                                        <td>MySQL�桼����̾�����������ꤷ���ǡ����١���̾<br>
                                                            ��:xsample_zc</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǡ����١��� - ���ץ��������</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>�ơ��֥�ץ�ե��å���</th>
                                                        <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>SQL����å������ˡ</th>
                                                        <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>���å����/SQL����å���ǥ��쥯�ȥ�</th>
                                                        <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��� </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>�ǡ����١����������ϸ塢�֥ǡ����١����������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e04">4.�����ƥ�Ķ�������</h6>
                                            <div class="box_body">
                                                <p>�����ƥ����꤬ɽ������ޤ���ɬ�פ˱������ѹ����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_13.png" alt="�����ƥ�Ķ��������"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�����С�����</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>���֥ǥ��쥯�ȥ�</th>
                                                        <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�����Ȥ�URL</th>
                                                        <td>�ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>SSL Details</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>SSL�����ФΥۥ���̾<br>
                                                            �����פʤ�����</th>
                                                        <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                            ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�����Ȥ�URL<br>
                                                            ��SSL/���פʤ�����</th>
                                                        <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                            ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>��������ܳ�ǧ�塢���������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e05">5.����åפδ���Ū������</h6>
                                            <div class="box_body">
                                                <p>��������ܤ򤪵���Ǥ�դ����ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_14.png" alt="����å��������"></p>

                                                <table class="table table_use-caption">
                                                    <caption>����å׾���</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>����å�̾</th>
                                                        <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                            ��˥ƥ��ȥ���å�</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����åץ����ʡ���̾��</th>
                                                        <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                            ��˥���åץ����ʡ�</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����åץ����ʡ��Υ᡼�륢�ɥ쥹</th>
                                                        <td>�᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>��</th>
                                                        <td>�����ꤷ�Ƥ���������<br>
                                                            ���Japan</td>
                                                    </tr>
                                                    <tr>
                                                        <th>������</th>
                                                        <td>���������ꤷ�Ƥ���������<br>
                                                            ��������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����åפν���</th>
                                                        <td>Ǥ�դ�ʸ�������꤯��������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǥե���Ȥθ���</th>
                                                        <td>�������ꤷ�Ƥ���������<br>
                                                            ���Japanese</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ǥե���Ȥ��̲�</th>
                                                        <td>�̲ߤ���ꤷ�Ƥ���������<br>
                                                            ���Japanese Yen</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǥ����</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>����åפΥǥ�</th>
                                                        <td>ɬ�פ˱������ѹ����Ƥ���������<br>
                                                            ���ܥ��󥹥ȡ���Ǥ��ѹ����Ƥ��ޤ��󡣡�</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>������������ϸ塢�֥���å��������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e06">6.�����ԥ������������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_zen_15.png" alt="�����ԥ���������������"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�����Ծ���</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>������ID</th>
                                                        <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������<br>
                                                            ���admin</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�����ԥѥ����</th>
                                                        <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�����ԥѥ���ɡʳ�ǧ��</th>
                                                        <td>Ǥ�դ�ʸ�������ꤷ�Ƥ���������</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�����ԤΥ᡼�륢�ɥ쥹</th>
                                                        <td>�᡼�륢�ɥ쥹�����Ϥ��Ƥ���������</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table_use-caption">
                                                    <caption>�ǿ��Ǥθ���</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>������Τ��Ӥ�Zen Cart�κǿ��С�����������å�����</th>
                                                        <td>ɬ�פ˱������ѹ����Ƥ���������</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>������������ϸ塢�ִ������������¸�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 id="link-e07" class="box_ttl">7.���åȥ��å״�λ</h6>
                                            <div class="box_body">
                                                <p>���åȥ��åפ���λ���ޤ�����<br>
                                                    ���ΤޤޤǤ����ѤǤ��ʤ����ᡢ<a href="#link-f">���åȥ��å׸�κ��</a>��ɬ�פǤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_16.png" alt="���ִ�λ����"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>���åȥ��å״�λ���̤Ϥ��Τޤޤξ��֡ʥ֥饦���ϳ��������֡ˤǡ�<a href="#link-f">���åȥ��å׸�κ��</a>��<a href="#link-g">�������̤�����</a>��ʤ�Ƥ���������</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-f" class="section_ttl">���åȥ��å׸�κ��</h4>
                                <div class="section_body">

                                    <p>FTP���եȤ��Ѱդ��������ե�����κ����ѡ��ߥå������ѹ���Ԥ��ޤ���<br>
                                        ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f01">1.��includes�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������</p>
                                                <p class="mb0">FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/zc/admin/includes/�פذ�ư���ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/admin/includes/�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_17.png" alt="��includes�ץե�����ذ�ư1"></p>
                                                <p><img class="img" src="../img/manual/man_install_zen_18.png" alt="��includes�ץե�����ذ�ư2"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f02">2.��configure.php�פΥѡ��ߥå�����ѹ�</h6>
                                            <div class="box_body">
                                                <p>��configure.php�ץե�������ǧ���ޤ���<br>
                                                    ��configure.php�ץե�����򱦥���å����֥ե�����Υѡ��ߥå����פ����򤷤ޤ���</p>

                                                <p><img class="img" src="../img/manual/man_install_zen_19.png" alt="�ѡ��ߥå�����ѹ�1"></p>
                                                <p>�֥ե������°�����ѹ��פ�ɽ������ޤ������ͤ��444�פ��ѹ����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_20.png" alt="�ѡ��ߥå�����ѹ�2"></p>
                                                <p>³���ơ֤����ͤΥɥᥤ��̾/public_html/zc/admin/includes/�פ����ޤ���<br>
                                                    ���١���configure.php�ץե�����򱦥���å����֥ե�����Υѡ��ߥå����פ����ͤ���444�פ��ѹ�����Ƥ��뤫��ǧ���Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f03">3.��zc_install�פ���</h6>
                                            <div class="box_body">
                                                <p>�֤����ͤΥɥᥤ��̾/public_html/zc/�פ���ꡢ��zc_install�ץե�������ǧ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_21.png" alt="��zc_install�פ���1"></p>
                                                <p>��zc_install�ץե�����򱦥���å������ֺ���פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_22.png" alt="��zc_install�פ���2"></p>
                                                <p>�֤Ϥ��פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_23.png" alt="��zc_install�פ���3"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-g" class="section_ttl">�������̤�����</h4>
                                <div class="section_body">

                                    <p>7.���åȥ��å״�λ����ɽ�����줿�ִ������̡פإ����������ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_zen_24.png" alt="���ִ�λ����"></p>

                                    <p>������������Ȳ����ٹ���̤�ɽ������ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_zen_25.png" alt="�ٹ����"></p>
                                    <p>�ٹ�ΤȤ��ꡢ��admin�ץե������̾�����ѹ�����ɬ�פ�����ޤ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g01">1.��admin�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                    ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ�����</p>
                                                <p class="mb0">FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/zc/admin/�פذ�ư���ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/zc/admin/�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_26.png" alt="��admin�ץե�����ذ�ư"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g02">2.��admin�ץե������̾���ѹ�</h6>
                                            <div class="box_body">
                                                <p>��admin�ץե�����򱦥���å�������̾�����ѹ��פ����򤷤ޤ���</p>

                                                <p><img class="img" src="../img/manual/man_install_zen_27.png" alt="��admin�ץե������̾���ѹ�1"></p>
                                                <p>������̾�������Ϥ������ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_28.png" alt="��admin�ץե������̾���ѹ�2"></p>
                                                <ul class="note-list">
                                                    <li>���ܥޥ˥奢��Ǥϡ���admin-tool�פ��ѹ����Ƥ��ޤ���</li>
                                                    <li>����¸�ե������ե�����̾�Ƚ�ʣ���ʤ��褦�ˤ���դ���������</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g03">3.�������̤إ�������</h6>
                                            <div class="box_body">
                                                <p>�������̤إ�������������������̤�ɽ������뤫����ǧ����������</p>
                                                <p>�������̥�������URL�ϡ�http://Zen Cart���󥹥ȡ���URL/admin�ե�����ѹ�̾�٤Ȥʤ�ޤ���</p>
                                                <div class="border border_blue">�����<br>
                                                    �ܥޥ˥奢��Ǥϡ�admin-tool�פ��ѹ��������ᡢ���󥹥ȡ���URL�� http://example.com/zc/ �ξ�� http://example.com/zc/admin-tool �ˤƴ������̤إ���������ǽ�Ǥ���
                                                </div>
                                                <p><img class="img" src="../img/manual/man_install_zen_29.png" alt="��������"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-h" class="section_ttl">���󥹥ȡ��봰λ</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-h01">1.��admin�ץե�����ذ�ư</h6>
                                            <div class="box_body">
                                                <p><a href="#link-e07">7.���åȥ��å״�λ��</a>��ɽ�����줿�֥���åספإ����������Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_30.png" alt="���ִ�λ����"></p>
                                                <p>�������������ʲ��β��̤�ɽ�������С����󥹥ȡ��봰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_install_zen_31.png" alt="����åײ���"></p>
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