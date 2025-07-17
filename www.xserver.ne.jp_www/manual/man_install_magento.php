<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Magento2 ��ư���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�Magento2�פ򤪵Ҥ��ޤ����Ȥǥ��󥹥ȡ��뤹�뤿��μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">Magento2</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
 
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">Magento2 ���󥹥ȡ��� �Ϥ����</a></li>
                                <li><a href="#link-previous-b">Magento2�Υ��������</a></li>
                                <li><a href="#link-previous-c">MySQL�ʥǡ����١����ˤ�����</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.MySQL���ɲ�</a></li>
                                        <li><a href="#link-previous-c02">2.MySQL�桼�����ɲ�</a></li>
                                        <li><a href="#link-previous-c03">3.MySQL����������������</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">�ե����륢�åץ���</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.���åץ�����γ�ǧ</a></li>
                                        <li><a href="#link-previous-d02">2.�ե�����Υ��åץ���</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">���������ɤ����������</a>
                                    <ol>
                                        <li><a href="#link-previous-e01">1.���åץ������URL�˥�������</a></li>
                                        <li><a href="#link-previous-e02">2.�Ķ��������Ԥ�</a></li>
                                        <li><a href="#link-previous-e03">3.MySQL�ǡ����١�������³���뤿��ξ��������</a></li>
                                        <li><a href="#link-previous-e04">4.�����Ȥ�URL�ȴ������̤�URL������</a></li>
                                        <li><a href="#link-previous-e05">5.�����ॾ�����̲ᡦ����������Ԥ�</a></li>
                                        <li><a href="#link-previous-e06">6.�����ԥ�������Ȥ�����</a></li>
                                        <li><a href="#link-previous-e07">7.���󥹥ȡ���</a></li>
                                        <li><a href="#link-previous-e08">8.���󥹥ȡ��봰λ</a></li>
                                        <li><a href="#link-previous-e09">9.�������̤إ�����</a></li>
                                        <li><a href="#link-previous-e010">10.��λ</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Magento2 ���󥹥ȡ��� �Ϥ����</h4>

                                <div class="section_body">
                                    <p>������¦��Magento2�Υե�������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>Magento2���󥹥ȡ���������</caption>
                                        <tbody>
                                            <tr>
                                                <th>�С������</th>
                                                <td>2.1.3</td>
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
                                                <td>/home/xsample/example.com/pubic_html/mg2 </td>
                                            </tr>
                                            <tr>
                                                <th>���󥹥ȡ���URL</th>
                                                <td>http://example.com/mg2/</td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١���</th>
                                                <td>MySQL5.7</td>
                                            </tr>
                                            <tr>
                                                <th>FTP���ե�</th>
                                                <td>FileZilla </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <aside class="msg msg_caution">
                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���å��������С���Magento2�����Ѥ���ݤ���ջ���</h6>
                                    <div class="msg_body">
                                        <p class="mb5">
                                            Magento2�ϡ�PHP 5.6.x / MySQL 5.7��ư����ǧ���Ƥ��ޤ��� �����Ѥˤʤ���ϡ���PHP�С���������ءפˤơ�PHP 5.6.x�٤��ڤ��ؤ���php.ini�˰ʲ��������ä��Ƥ���������<br>
                                            ������ˡ�ϡ�<a href="https://www.xserver.ne.jp/manual/man_program_php_ver.php">PHP�ΥС������ˤĤ���</a>�פ򤴻��Ȥ���������
                                        </p>
                                        <pre class="code">always_populate_raw_post_data = -1</pre>

                                        <p>
                                            �ޤ���MySQL 5.7���󶡤ϡ������ѤΥ����С��ˤ��ۤʤ�ޤ���
                                        </p>


                                    </div>
                                </aside>

                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">Magento2�Υ��������</h4>
                                <div class="section_body">
                                    <p><img class="img" src="../img/manual/previous/man_install_mg2_0.png" alt="���������Ȥ��Magento2����������">
                                    </p>
                                    <p class="link"><a href="https://magento.com/tech-resources/download" target="_blank" rel="nofollow">Magento2 ����������</a><i class="ico ico_new-window"></i>
                                    </p>
                                    <p>���������ȤΥ�������ɥڡ�������ե�����Υ�������ɤ򤷤Ƥ���������<br> ����������ɤ���ˤϡ����������ȤΥ����������Ͽ��ɬ�פǤ���
                                        <br> ��������ɸ塢���̥ե��������ष�ޤ���
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h4>
                                <div class="section_body">
                                    <p>Magento2�����Ѥ���ǡ����١����򿷵��������ޤ���</p>

                                    <p><img class="img" src="../img/manual/previous/man_install_mg2_mysql_1.png" alt="MySQL������˥ե����������������꡼�󥷥�å�">
                                    </p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.MySQL���ɲ�</h6>
                                            <div class="box_body">
                                                <p>��MySQL�ɲáפ򥯥�å����ޤ���</p>
                                                <p>��MySQL�ǡ����١���̾�פ����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ�����ǧ���̤�ɽ�����줿�顢���Ƥ��ǧ���������ǡ��ɲä���פ򥯥�å����ޤ����ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_mg2�� �Ȥ��ƺ������ޤ���</p>
                                                <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_magento_2.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.MySQL�桼�����ɲ�</h6>
                                            <div class="box_body">
                                                <p>���������ǡ����١����˥����������뤿���MySQL�桼�����ɲä��ޤ���</p>
                                                <p class="note">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                <p>��MySQL�桼���ɲáפ򥯥�å����������Ѥˤʤ�桼����̾�ȥѥ���ɤ����ꤷ�ޤ������ϸ塢�ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å�����ɽ�����줿���̤ǡ��ɲä���ץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_word_3.png" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�">
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.MySQL����������������</h6>
                                            <div class="box_body">
                                                <p>��MySQL�����פ�����������ǡ����١����˥������������ɲä��ޤ�������������̤��ͭ�桼���������ɲä�����MySQL�桼���������ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_mg2�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_magento_4.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�">
                                                </p>
                                                <p>�ʾ��MySQL������ϴ�λ�Ǥ���</p>
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

                                    <p>Magento���������Ȥ���������ɤ����ե��������ष�Ƥ���������<br>
                                        ����塢FTP���եȤ�Ȥ�FTP�����С�����³���Ƥ�������
                                    ���ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ��ˡ�</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.���åץ�����γ�ǧ</h6>
                                            <div class="box_body">
                                                <p>FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html�פ���ˡ�mg2�ץե������������ե�����Υ��åץ��ɤ�Ԥ��ޤ���(�ܥޥ˥奢��Ǥϡ������Τ�����Ȥ��ơ�mg2�פȤ��Ƥ��ޤ����������ͤ�Ǥ�դΤ�ΤǤ��ޤ��ޤ���)</p>
                                                <p>FileZilla�Ǥϡ���¦�Υ����С��ΰ�򱦥���å����֥ǥ��쥯�ȥ��������ư�ư�פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_zen_5.png" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p>
                                                <p>³���ơ���������ǥ��쥯�ȥ�̾�����Ϥ��ޤ���</p>
                                                <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/mg2/�פ�������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_upload_0.png" alt="FileZilla�β���:�ǥ��쥯�ȥ�����Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.�ե�����Υ��åץ���</h6>
                                            <div class="box_body">
                                                <p>��¦�Υ�����夫��Magento2�Υե����������ե�������mg2�ץե���������ƥ��åץ��ɤ��ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>���åץ���</dt>
                                                    <dd><img class="img" src="../img/manual/previous/man_install_mg2_upload_1.png" alt="FileZilla�β���:ž�����̤Υ����꡼�󥷥�å�">
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                    <dd><img class="img" src="../img/manual/previous/man_install_mg2_upload_2.png" alt="FileZilla�β���:�ե�����ž����Υ����꡼�󥷥�å�">
                                                    </dd>
                                                </dl>
                                                <p>��¦�Υ����С��ΰ�˥ե����뤬ɽ������Ƥ���С����åץ��ɴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>


                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">���������ɤ����������</h4>
                                <div class="section_body">

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���󥹥ȡ���˼��Ԥ�����</h6>
                                        <div class="msg_body">
                                            <p>���Ѥ���MySQL�桼�����ˤ��ǡ����١����ؤΥ����������¤�Ŭ�ڤ�ȿ�Ǥ���Ƥ��ʤ���ǽ��������ޤ���</p>
                                            <p>���ξ�硢�����С��ѥͥ����MySQL����פˤ����ơ����Ѥ���ǡ����١����ˤ�����MySQL�桼�����Υ�������������ٺ������������ɲä��Ƥ���������</p>
                                            <p>�������������ɲä�������ǡ�Ŭ�ڤ�ȿ�Ǥ���ɬ�פ�����ޤ���</p>
                                            ���ޥ˥奢���<a href="man_db_setting.php">MySQL������</a>��
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.���åץ������URL�˥�������</h6>
                                            <div class="box_body">
                                                <p>Magento2�Υ��åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                <div class="border border_gray">
                                                    <p>http://�����ͤΥɥᥤ��̾/mg2/<br> ���ܥޥ˥奢��Ǥϡ�http://example.com/mg2/��
                                                    </p>
                                                </div>
                                                <p>�嵭URL�ǥ�����������ȡ�������β��̤�ɽ������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_1.png" alt="���åץ������URL�˥�������">
                                                </p>
                                                <p>��Agree and Steup Magento�פ򥯥�å����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.�Ķ��������Ԥ�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_2.png" alt="���󥹥ȡ���Ķ��γ�ǧ">
                                                </p>
                                                <p>��Start Readiness Check�פ򥯥�å��������󥹥ȡ���Ķ������꤬�ʤ����ɤ������ǧ���ޤ������顼���Ф���硢���顼���Ƥ˱�ä�������ä��Ƥ����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_3.png" alt="���顼���Ƥ˱�ä��������">
                                                </p>
                                                <p>���顼��ɽ�����줺�����٤Ƥ˥����å��ޡ��������ä���硢���󥹥ȡ����Ȥ�ʤ�뤳�Ȥ���ǽ�Ǥ�����Next�פ򥯥�å��������˿ʤߤޤ���
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.MySQL�ǡ����١�������³���뤿��ξ��������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_4.png" alt="MySQL�ǡ����١�������³���뤿��ξ�������">
                                                </p>
                                                <p>���β��̤Ǥ�MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">Database Server Host</th>
                                                            <td>�����С��ѥͥ����MySQL�����פ˵��ܤΡ�MySQL5.7 �ۥ���̾��(mysql����.xserver.jp)�����Ϥ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Server Username</th>
                                                            <td>���xsample_user</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Server Password</th>
                                                            <td>MySQL�ǡ����١����Υѥ���ɤ����Ϥ��ޤ��� </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Database Name</th>
                                                            <td>���xsample_mg2 </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Table prefix</th>
                                                            <td>���󥹥ȡ��뤹��ݤ˼�ư���������ơ��֥�̾����Ƭ������ꤷ�ޤ��� </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e04">4.�����Ȥ�URL�ȴ������̤�URL������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_5.png" alt="�����Ȥȴ������̤�URL������">
                                                </p>
                                                <p>�����Ǥϡ������Ȥ�URL�ȴ������̤�URL�����Ϥ��ޤ���</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">Your Store Address</th>
                                                            <td>http://�����ͤΥɥᥤ��̾/mg2/<br>
                                                            ���ܥޥ˥奢��Ǥϡ�http://example.com/mg2/��</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Magento Admin Address</th>
                                                            <td>�������̤�URL (��Ǥ�դ������ǽ)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e05">5.�����ॾ�����̲ᡦ����������Ԥ�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_6.png" alt="�Ƽ�����">
                                                </p>
                                                <p>Magento2�Ǥϡ������������ܸ�����꤬¸�ߤ��ʤ����ᡢ���Τޤޡ�Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e06">6.�����ԥ�������Ȥ�����</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_7.png" alt="�����ԥ�������Ȥ�����">
                                                </p>
                                                <p>�����Ǥϡ������ԥ�������Ȥ����Ϥ��ޤ���</p>
                                                <table class="table break-word">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-s">New Username</th>
                                                            <td>�������ѤΥ桼����̾</td>
                                                        </tr>
                                                        <tr>
                                                            <th>New Email</th>
                                                            <td>��������ʤɤ������뤿���������᡼�륢�ɥ쥹����ꤷ�Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>New Password</th>
                                                            <td>�������ѤΥѥ����</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Confirm Password</th>
                                                            <td>�ѥ���ɳ�ǧ��</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e07">7.���󥹥ȡ���</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_8.png" alt="����奤�󥹥ȡ���">
                                                </p>
                                                <p>���줾������������ʤ���С�Install Now�פ򥯥�å��������󥹥ȡ���򳫻Ϥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_9.png" alt="���󥹥ȡ�����">
                                                </p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e08">8.���󥹥ȡ��봰λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_10.png" alt="���󥹥ȡ��봰λ">
                                                </p>
                                                <p>���β��̤Τ褦�ˡ�Success�פ�ɽ���������Х��󥹥ȡ��봰λ�Ǥ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e09">9.�������̤إ�����</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_11.png" alt="�������̤إ�����">
                                                </p>
                                                <p>���󥹥ȡ���������ꤷ��Username��Password�����Ϥ����������ԤäƤ��������� Magento�δ������̤إ����󤷤ޤ���
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e010">10.��λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_mg2_12.png" alt="���������">
                                                </p>
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
                                    <li><a href="#link-a">Magento2 ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-b">Magento2Ƴ���ޤǤ�ή��</a></li>
                                    <li><a href="#link-c">Magento2�Υ��������</a></li>
                                    <li><a href="#link-d">MySQL�ʥǡ����١����ˤ�����</a>
                                        <ol>
                                            <li><a href="#link-d1">1.MySQL���ɲ�</a></li>
                                            <li><a href="#link-d2">2.MySQL�桼�������ɲ�</a></li>
                                            <li><a href="#link-d3">3.MySQL����������������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">�ե����륢�åץ���</a>
                                        <ol>
                                            <li><a href="#link-e1">1.���åץ�����γ�ǧ</a></li>
                                            <li><a href="#link-e2">2.�ե�����Υ��åץ���</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">���������ɤ����������</a>
                                        <ol>
                                            <li><a href="#link-f1">1.���åץ������URL�˥�������</a></li>
                                            <li><a href="#link-f2">2.�Ķ��������Ԥ�</a></li>
                                            <li><a href="#link-f3">3.MySQL�ǡ����١�������³���뤿��ξ��������</a></li>
                                            <li><a href="#link-f4">4.�����Ȥ�URL�ȴ������̤�URL������</a></li>
                                            <li><a href="#link-f5">5.�����ॾ�����̲ᡦ����������Ԥ�</a></li>
                                            <li><a href="#link-f6">6.�����ԥ�������Ȥ�����</a></li>
                                            <li><a href="#link-f7">7.���󥹥ȡ���</a></li>
                                            <li><a href="#link-f8">8.���󥹥ȡ��봰λ</a></li>
                                            <li><a href="#link-f9">9.�������̤إ�����</a></li>
                                            <li><a href="#link-f10">10.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h3 class="section_ttl">Magento2 ���󥹥ȡ��� �Ϥ����</h3>

                                        <div class="section_body">
                                            <p>������¦��Magento2�Υե�������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                                            <table class="table table_use-caption break-all">
                                                <caption>Magento2���󥹥ȡ���������</caption>
                                                <tbody>
                                                <tr>
                                                    <th>�С������</th>
                                                    <td>2.1.3</td>
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
                                                    <td>/home/xsample/example.com/pubic_html/mg2 </td>
                                                </tr>
                                                <tr>
                                                    <th>���󥹥ȡ���URL</th>
                                                    <td>http://example.com/mg2/</td>
                                                </tr>
                                                <tr>
                                                    <th>�ǡ����١���</th>
                                                    <td>MySQL5.7</td>
                                                </tr>
                                                <tr>
                                                    <th>FTP���ե�</th>
                                                    <td>FileZilla </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���å��������С���Magento2�����Ѥ���ݤ���ջ���</h6>
                                        <div class="msg_body">
                                            <p class="mb5">Magento2�ϡ�PHP 5.6.x / MySQL 5.7��ư����ǧ���Ƥ��ޤ��� �����Ѥˤʤ���ϡ���PHP�С���������ءפˤơ�PHP 5.6.x�٤��ڤ��ؤ���php.ini�˰ʲ��������ä��Ƥ���������</p>
                                            <pre class="code">always_populate_raw_post_data = -1</pre>
                                            <p>
                                                �ޤ���MySQL 5.7���󶡤ϡ������ѤΥ����С��ˤ��ۤʤ�ޤ���
                                            </p>
                                        </div>
                                    </aside>

                                    <section id="link-b" class="section">
                                        <h3 class="section_ttl">Magento2Ƴ���ޤǤ�ή��</h3>

                                        <div class="section_body">

                                            <ol class="ol">
                                                <li><a href="#link-c">Magento2�Υ��������</a></li>
                                                <li><a href="#link-d">MySQL�ʥǡ����١����ˤ�����</a></li>
                                                <li><a href="#link-e">�ե����륢�åץ���</a></li>
                                                <li><a href="#link-f">���������ɤ����������</a></li>
                                            </ol>
                                        </div>
                                    </section>

                                    <section id="link-c" class="section">
                                        <h3 class="section_ttl">Magento2�Υ��������</h3>

                                        <div class="section_body">

                                            <p><img class="img" src="../img/manual/man_install_mg2_0.png?date=2410" alt="���������Ȥ��Magento2����������"></p>
                                            <p class="link"><a href="https://magento.com/tech-resources/download" target="_blank" rel="nofollow">Magento2 ����������</a><i class="ico ico_new-window"></i></p>
                                            <p>
                                                ���������ȤΥ�������ɥڡ�������ե�����Υ�������ɤ򤷤Ƥ���������<br> ����������ɤ���ˤϡ����������ȤΥ����������Ͽ��ɬ�פǤ���<br>
                                                ��������ɸ塢���̥ե��������ष�ޤ���
                                            </p>
                                        </div>
                                    </section>

                                    <section id="link-d" class="section">
                                        <h3 class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h3>

                                        <div class="section_body">

                                            <p>Magento2�����Ѥ���ǡ����١����򿷵��������ޤ���<br>
                                                <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���MySQL����פ򥯥�å����Ƥ���������</p>

                                            <p><img class="img" src="../img/manual/man_install_mg2_mysql_1.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d1">1.MySQL���ɲ�</h4>
                                                    <div class="box_body">
                                                        <p>��MySQL�ǡ����١�������פ򥯥�å������֥ǡ����١������ɲáפ򥯥�å����ޤ���<br>
                                                            �ǡ����١����ɲò��̤�ɽ�����줿���MySQL�ǡ����١���̾�פ����Ϥ������Ƥ��ǧ���������ǡ��ɲä���פ򥯥�å����ޤ���<br>�ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_mg2�� �Ȥ��ƺ������ޤ���
                                                        </p>
                                                        <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ����С�ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_2.png?date=2410" alt="MySQL�ǡ����١�������˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d2">2.MySQL�桼�������ɲ�</h4>
                                                    <div class="box_body">
                                                        <p>���������ǡ����١����˥����������뤿���MySQL�桼�������ɲä��ޤ���</p>
                                                        <p class="note">���ɲúѤߤ�MySQL�桼���������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                                        <p>��MySQL�桼��������פ򥯥�å������֥桼�������ɲáפ򥯥�å����ޤ���<br>
                                                            �����Ѥˤʤ�桼����̾���ǡ����١����С�����󡢥ѥ���ɤ����ꤷ�ޤ������ϸ塢���ɲä���ץܥ���򥯥�å����Ƥ���������<br>�ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                                        <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ����С�ID_�桼����̾�פȤʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_word_3.png?date=2410" alt="�桼�������ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d3">3.MySQL����������������</h4>
                                                    <div class="box_body">
                                                        <p>��MySQL�ǡ����١�������פ򥯥�å������������������ѹ��������ǡ����١����Ρ֥桼��������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_4.png?date=2410" alt="�桼��������˥ե����������������꡼�󥷥�å�"></p>
                                                        <p>ɽ�����줿������Ρ֥桼�������ɲáפ򥯥�å�������MySQL�桼����ID�פ����ɲä�����MySQL�桼���������򤷡��ɲä���ץܥ���򥯥�å����Ƥ���������<br>
                                                            �ܥޥ˥奢��Ǥϡ�xsample_mg2�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_magento_5.png?date=2410" alt="MySQL�桼����ID�˥ե����������������꡼�󥷥�å�"></p>
                                                        <p>�ʾ��MySQL������ϴ�λ�Ǥ���</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-e" class="section">
                                        <h3 class="section_ttl">�ե����륢�åץ���</h3>

                                        <div class="section_body">
                                            <p>
                                                Magento���������Ȥ���������ɤ����ե��������ष�Ƥ���������<br>
                                                ����塢FTP���եȤ�Ȥ�FTP�����С�����³���Ƥ��������ܥޥ˥奢��Ǥ�<span class="link"><a href="http://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a><i class="ico ico_new-window"></i></span>��Ȥä��������ޤ��ˡ�
                                            </p>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-e1">1.���åץ�����γ�ǧ</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            FTP���եȤ�Ȥ���FTP�����С�����³���Ƥ���������<br>
                                                            FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html�פ���ˡ�mg2�ץե������������ե�����Υ��åץ��ɤ�Ԥ��ޤ���(�ܥޥ˥奢��Ǥϡ������Τ�����Ȥ��ơ�mg2�פȤ��Ƥ��ޤ����������ͤ�Ǥ�դΤ�ΤǤ��ޤ��ޤ���)
                                                        </p>
                                                        <p>FileZilla�Ǥϡ���¦�Υ����С��ΰ�򱦥���å����֥ǥ��쥯�ȥ��������ư�ư�פ����򤷤ޤ���</p>
                                                        <!-- <p><img class="img" src="../img/manual/man_install_zen_5.png?date=2410" alt="MySQL����˥ե����������������꡼�󥷥�å�"></p> -->
                                                        <p>³���ơ���������ǥ��쥯�ȥ�̾�����Ϥ��ޤ���</p>
                                                        <p class="note">���ܥޥ˥奢��Ǥϡ���example.com/public_html/mg2/�פ�������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_upload_0.png?date=2410" alt="FileZilla�β���:�ǥ��쥯�ȥ�����Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-e2">2.�ե�����Υ��åץ���</h4>
                                                    <div class="box_body">
                                                        <p>��¦�Υ�����夫��Magento2�Υե����������ե�������mg2�ץե���������ƥ��åץ��ɤ��ޤ���</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>���åץ���</dt>
                                                            <dd><img class="img" src="../img/manual/man_install_mg2_upload_1.png?date=2410" alt="FileZilla�β���:ž�����̤Υ����꡼�󥷥�å�">
                                                            </dd>
                                                            <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                                            <dd><img class="img" src="../img/manual/man_install_mg2_upload_2.png?date=2410" alt="FileZilla�β���:�ե�����ž����Υ����꡼�󥷥�å�">
                                                            </dd>
                                                        </dl>
                                                        <p>��¦�Υ����С��ΰ�˥ե����뤬ɽ������Ƥ���С����åץ��ɴ�λ�Ǥ���</p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-f" class="section">
                                        <h3 class="section_ttl">���������ɤ����������</h3>

                                        <div class="section_body">

                                            <aside class="msg msg_caution">
                                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���󥹥ȡ���˼��Ԥ�����</h4>
                                                <div class="msg_body">
                                                    <p>���Ѥ���MySQL�桼�����ˤ��ǡ����١����ؤΥ����������¤�Ŭ�ڤ�ȿ�Ǥ���Ƥ��ʤ���ǽ��������ޤ���</p>
                                                    <p>���ξ�硢�����С��ѥͥ����MySQL����פˤ����ơ����Ѥ���ǡ����١����ˤ�����MySQL�桼�����Υ�������������ٺ������������ɲä��Ƥ���������</p>
                                                    <p>�������������ɲä�������ǡ�Ŭ�ڤ�ȿ�Ǥ���ɬ�פ�����ޤ���</p>

                                                    ���ޥ˥奢���<a href="man_db_setting.php">MySQL������</a>��
                                                </div>
                                            </aside>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f1">1.���åץ������URL�˥�������</h4>
                                                    <div class="box_body">
                                                        <p>Magento2�Υ��åץ��ɴ�λ�塢����URL�˥����������Ƥ���������</p>
                                                        <div class="border border_gray">
                                                            <p>http://�����ͤΥɥᥤ��̾/mg2/<br> ���ܥޥ˥奢��Ǥϡ�http://example.com/mg2/�� </p>
                                                        </div>
                                                        <p>�嵭URL�ǥ�����������ȡ�������β��̤�ɽ������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_1.png?date=2410" alt="���åץ������URL�˥�������"></p>
                                                        <p>��Agree and Steup Magento�פ򥯥�å����ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f2">2.�Ķ��������Ԥ�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_2.png?date=2410" alt="���󥹥ȡ���Ķ��γ�ǧ"></p>
                                                        <p>��Start Readiness Check�פ򥯥�å��������󥹥ȡ���Ķ������꤬�ʤ����ɤ������ǧ���ޤ������顼���Ф���硢���顼���Ƥ˱�ä�������ä��Ƥ����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_3.png?date=2410" alt="���顼���Ƥ˱�ä��������"></p>
                                                        <p>���顼��ɽ�����줺�����٤Ƥ˥����å��ޡ��������ä���硢���󥹥ȡ����Ȥ�ʤ�뤳�Ȥ���ǽ�Ǥ�����Next�פ򥯥�å��������˿ʤߤޤ��� </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f3">3.MySQL�ǡ����١�������³���뤿��ξ��������</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_4.png?date=2410" alt="MySQL�ǡ����١�������³���뤿��ξ�������"></p>
                                                        <p>���β��̤Ǥ�MySQL�ǡ����١�������³���뤿��ξ�������Ϥ��ޤ���</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">Database Server Host</th>
                                                                <td>��localhost�פ����Ϥ��ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Server Username</th>
                                                                <td>���xsample_user</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Server Password</th>
                                                                <td>MySQL�ǡ����١����Υѥ���ɤ����Ϥ��ޤ��� </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Database Name</th>
                                                                <td>���xsample_mg2 </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Table prefix</th>
                                                                <td>���󥹥ȡ��뤹��ݤ˼�ư���������ơ��֥�̾����Ƭ������ꤷ�ޤ��� </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f4">4.�����Ȥ�URL�ȴ������̤�URL������</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_5.png?date=2410" alt="�����Ȥȴ������̤�URL������"></p>
                                                        <p>�����Ǥϡ������Ȥ�URL�ȴ������̤�URL�����Ϥ��ޤ���</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">Your Store Address</th>
                                                                <td>http://�����ͤΥɥᥤ��̾/mg2/<br>
                                                                    ���ܥޥ˥奢��Ǥϡ�http://example.com/mg2/��</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Magento Admin Address</th>
                                                                <td>�������̤�URL (��Ǥ�դ������ǽ)</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f5">5.�����ॾ�����̲ᡦ����������Ԥ�</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_6.png?date=2410" alt="�Ƽ�����"></p>
                                                        <p>Magento2�Ǥϡ������������ܸ�����꤬¸�ߤ��ʤ����ᡢ���Τޤޡ�Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f6">6.�����ԥ�������Ȥ�����</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_7.png?date=2410" alt="�����ԥ�������Ȥ�����"></p>
                                                        <p>�����Ǥϡ������ԥ�������Ȥ����Ϥ��ޤ���</p>
                                                        <table class="table break-word">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per-s">New Username</th>
                                                                <td>�������ѤΥ桼����̾</td>
                                                            </tr>
                                                            <tr>
                                                                <th>New Email</th>
                                                                <td>��������ʤɤ������뤿���������᡼�륢�ɥ쥹����ꤷ�Ƥ���������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>New Password</th>
                                                                <td>�������ѤΥѥ����</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Confirm Password</th>
                                                                <td>�ѥ���ɳ�ǧ��</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>���Ϥ򽪤������Next�פ򥯥�å����Ƽ��˿ʤߤޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f7">7.���󥹥ȡ���</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_8.png?date=2410" alt="����奤�󥹥ȡ���"></p>
                                                        <p>���줾������������ʤ���С�Install Now�פ򥯥�å��������󥹥ȡ���򳫻Ϥ��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_mg2_9.png?date=2410" alt="���󥹥ȡ�����"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f8">8.���󥹥ȡ��봰λ</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_10.png?date=2410" alt="���󥹥ȡ��봰λ"></p>
                                                        <p>���β��̤Τ褦�ˡ�Success�פ�ɽ���������Х��󥹥ȡ��봰λ�Ǥ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f9">9.�������̤إ�����</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_11.png?date=2410" alt="�������̤إ�����"></p>
                                                        <p>���󥹥ȡ���������ꤷ��Username��Password�����Ϥ����������ԤäƤ��������� Magento�δ������̤إ����󤷤ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-f10">10.��λ</h4>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_install_mg2_12.png?date=2410" alt="���������"></p>
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