<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XOOPS Cube ��ư���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�XOOPS Cube�פ򤪵Ҥ��ޤ����Ȥǥ��󥹥ȡ��뤹�뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�XOOPS Cube�פ����֤Ǥ���ּ�ư���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">XOOPS Cube</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XOOPS Cube ���󥹥ȡ��� �Ϥ����</a></li>
                    <li><a href="#link-b">XOOPS Cube�Υ��������</a></li>
                    <li><a href="#link-c">MySQL�ʥǡ����١����ˤ�����</a>
                        <ol>
                            <li><a href="#link-c01">1.MySQL���ɲ�</a></li>
                            <li><a href="#link-c02">2.MySQL�桼�����ɲ�</a></li>
                            <li><a href="#link-c03">3.MySQL����������������</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">�ե����륢�åץ���</a>
                        <ul>
                            <li><a href="#link-d01">�����Υե������ǧ</a></li>
                            <li><a href="#link-d02">�����ФؤΥ��åץ���</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-e">���������ɤ���Υ��󥹥ȡ�����</a>
                        <ul>
                            <li><a href="#link-e01">1.���󥹥ȡ����Ԥ�����Υ��������ɲ��̤�ɽ��</a></li>
                            <li><a href="#link-e02">2.���󥹥ȡ��륦�������ɤؤ褦����</a></li>
                            <li><a href="#link-e03">3.�ե����륢���������Υ����å�</a></li>
                            <li><a href="#link-e04">4.�ǡ����١���������ӥѥ���URL������</a></li>
                            <li><a href="#link-e05">5.�������¸</a></li>
                            <li><a href="#link-e06">6.�ѥ���URL�Υ����å�</a></li>
                            <li><a href="#link-e07">7.�ǡ����١�������γ�ǧ</a></li>
                            <li><a href="#link-e08">8.�ǡ����١���������å�</a></li>
                            <li><a href="#link-e09">9.�ǡ����١����ơ��֥����</a></li>
                            <li><a href="#link-e010">10.�����ȴ����ԤˤĤ��Ƥ�����</a></li>
                            <li><a href="#link-e011">11.�ǡ���������</a></li>
                            <li><a href="#link-e012">12.���󥹥ȡ�����쥹�ƥå״�λ</a></li>
                            <li><a href="#link-e013">13.�����ԥ��������</a></li>
                            <li><a href="#link-e014">14.���󥹥ȡ���</a></li>
                            <li><a href="#link-e015">15.���󥹥ȡ��봰λ����</a></li>
                            <li><a href="#link-e016">16.�����ԥ�˥塼�򥯥�å�</a></li>
                            <li><a href="#link-e017">17.xoops/mainfile.php��°���ѹ�</a></li>
                            <li><a href="#link-e018">18.��λ</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XOOPS Cube ���󥹥ȡ��� �Ϥ����</h4>
                    <div class="section_body">
                        
                        <p>������¦�ǡ�XOOPS Cube�Υѥå��������Ѱդ��Ƥ�������ɬ�פ�����ޤ���</p>
                        <table class="table table_use-caption break-word">
                            <caption>XOOPS Cube�Υ��󥹥ȡ���������</caption>
                            <tbody>
                                <tr><th>�С������̾</th><td>XOOPS Cube Legacy 2.1.7</td></tr>
                                <tr><th>�����С�ID</th><td>xsample</td></tr>
                                <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                <tr><th>���󥹥ȡ���ǥ��쥯�ȥ�</th><td>/home/xsample/example.com/public_html/xoops/</td></tr>
                                <tr><th>���󥹥ȡ���URL</th><td>http://example.com/xoops/</td></tr>
                                <tr><th>�ǡ����١���</th><td>MySQL5.5 / MySQL5 �Τ�����Ǥ��ǽ<br>��ʸ�������ɤ� EUC-JP �����ꤷ�Ƥ�������)</td></tr>
                                <tr><th>FTP���ե�</th><td>FFFTP</td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
            
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">XOOPS Cube�Υ��������</h4>
                    <div class="section_body">
                        <p><img class="img" src="../img/manual/man_install_xoops_1.png" alt="XOOPS Cube���������ɤ��ޤ�"></p>
                        <p class="link"><a href="http://xoopscube.jp/" target="_blank" rel="nofollow">XOOPS Cube����������</a><i class="ico ico_new-window"></i></p>
                        <p>���������Ȥ��顢����˽��ä�XOOPS Cube�ե�������������ɤ��Ƥ���������<br>
                        ��������ɸ塢���̥ե���������򤷤ޤ���</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-c" class="section_ttl">MySQL�ʥǡ����١����ˤ�����</h4>
                    <div class="section_body">
                        <p>XOOPS Cube�����Ѥ���ǡ����١����򿷵��������ޤ���</p>
                    
                        <p><img class="img" src="../img/manual/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.MySQL���ɲ�</h6>
                                <div class="box_body">
                                    <p>XOOPS�����Ѥ���ǡ����١������ɲä��ޤ��������Ѥˤʤ���ǡ����١���̾����ꤷ����MySQL���ɲáץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_xoops�� �Ȥ��ƺ������ޤ���</p>
                                    <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ�����ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_2.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.MySQL�桼�����ɲ�</h6>
                                <div class="box_body">
                                    <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�����ɲä��ޤ���</p>
                                    <p class="note">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                    <p class="mb0">�����Ѥˤʤ���桼����̾�ȥѥ���ɤ����ꤷ�ޤ����桼�����ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                    <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ�����ID_�桼����̾�פȤʤ�ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_3.png" alt="MySQL�Υ桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.MySQL����������������</h6>
                                <div class="box_body">
                                    <p>��MySQL�ΰ����פ�����������ǡ����١����˥������������ɲä��ޤ�������������̤��ͭ�桼�������ɲä�����MySQL�桼���������ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_xoops�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_4.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�ʾ��MySQL������ϴ�λ�Ǥ���</p>
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
                        <section class="block">
                            <h3 class="block_ttl" id="link-d01">�����Υե������ǧ</h3>
                            <div class="block_body">
                                <p>������ۤɲ��ष��XOOPS�ե�����γ�ǧ��Ԥ��ޤ���<br>
                                �����Υǥ��쥯�ȥ����ˤ����Package_Legacy�פ򳫤��ޤ���</p>
                                <p><img class="img" src="../img/manual/man_install_xoops_5.png" alt="Package Legacy�ե�������html�ե����"></p>
                                <p>��Package_Legacy�ץե��������ˤ����html�ץե���������ե�����򥵡��С��إ��åץ��ɤ򤷤ޤ���</p>
                            </div>
                        </section>
                    
                        <section class="block">
                            <h3 class="block_ttl" id="link-d02">�����ФؤΥ��åץ���</h3>
                            <div class="block_body">
                                <p>FTP���եȤ�Ȥ�FTP�����Ф���³���Ƥ����������ܥޥ˥奢��Ǥ�FFFTP��Ȥä�������ԤäƤ��ޤ��ˡ�</p>
                                <p>FTP�����С��Ρ֤����ͤΥɥᥤ��̾/public_html/�פ���ˡ�xoops�ץǥ��쥯�ȥ�򿷵��������Ƥ���������<br>
                                (����Υޥ˥奢��Ǥϡ���Ȥ��ơ�xoops�ץե������������Ƥ��ޤ������ե����̾��Ǥ�դ�̾���ǹ����ޤ���)</p>
                                <p>���ˡ�������¦�Ρ�html�ץե����������ե�����򥵡��С�¦�Ρ�xoops�ץե������ž�����ޤ���</p>
                                
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>���åץ�����</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_xoops_6.png" alt="FFFTP�β���:ž�����̤Υ����꡼�󥷥�å�"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>���åץ��ɴ�λ</dt>
                                    <dd>
                                        <p><img class="img" src="../img/manual/man_install_xoops_7.png" alt="FFFTP�β���:�ե�����ž����Υ����꡼�󥷥�å�"></p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                    
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">���������ɤ���Υ��󥹥ȡ�����</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e01">1.���󥹥ȡ����Ԥ�����Υ��������ɲ��̤�ɽ��</h6>
                                <div class="box_body">
                                    <p>�ե�����Υ��åץ��ɴ�λ�塢������URL�˥����������Ƥ���������</p>
                                    <div class="border border_gray">
                                    http://�����ͤΥɥᥤ��̾/xoops/<br>
                                    ���ܥޥ˥奢��Ǥϡ�http://example.com/xoops/��
                                    </div>
                                    <p><img class="img" src="../img/manual/man_install_xoops_8.png" alt="���󥹥ȡ����Ȥ�Ԥ����������ɲ���"></p>
                                    <p>���󥹥ȡ����Ԥ�����Υ��������ɲ��̤�ɽ������ޤ���<br>
                                    �������饦�������ɤ˽��äơ����󥹥ȡ����Ȥ�ʤ�Ƥ����ޤ���</p>
                                    <p>���쥯�ȥܥå����ǡ���ja_utf8�פ����򤷡�introduction >>�֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e02">2.���󥹥ȡ��륦�������ɤؤ褦����</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_9.png" alt="XOOPS 2.1 ���󥹥ȡ��륦�������ɤؤ褦����"></p>
                                    <p>XOOPS 2.1 ���󥹥ȡ��륦�������ɤؤ褦����</p>
                                    <p>���Ƥ��ǧ�塢�ڡ������ˤ��륢���������Υ����å� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e03">3.�ե����륢���������Υ����å�</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_10.png" alt="�ե����륢���������Υ����å�"></p>
                                    <p>�֥���������������Ϥ���ޤ��󡣡פȤ���ɽ�����ǧ���� ��������� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e04">4.�ǡ����١���������ӥѥ���URL������</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_11.png" alt="�ǡ����١���������ӥѥ���URL������"></p>
                                    <p>�����Ǥ�MySQL����³�����URL�������Ԥ��ޤ���<br>
                                    ��ۤɺ�������MySQL�ξ�������Ϥ��Ƥ���������</p>
                                    <table class="table break-word">
                                        <tbody>
                                            <tr>
                                                <th>�ǡ����١���������</th>
                                                <td>���쥯�ȥܥå����ǡ�mysql�פ���ꤷ�ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١��������ФΥۥ���̾</th>
                                                <td>
                                                    MySQL�ۥ���̾�����Ϥ��ޤ���<br>
                                                    ��:mysql20.xserver.jp<br><br>
                                                    (�����ͤΥ����С���������Ȥˤ��ۥ���̾���ۤʤ�ޤ���<br>
                                                    �֥����С��ѥͥ� &gt; MySQL���� &gt; MySQL����פˤƤ���ǧ����������)
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١����桼����̾</th>
                                                <td>
                                                    �ǡ����١����桼����̾�����Ϥ��ޤ���<br>
                                                    ��:xsample_user
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١����ѥ����</th>
                                                <td>�ǡ����١����桼���Υѥ���ɤ����Ϥ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>�ǡ����١���̾</th>
                                                <td>���Ѥ���MySQL�ǡ����١���̾�����Ϥ��ޤ���<br>��:xsample_xoops</td>
                                            </tr>
                                            <tr><th>�ơ��֥���Ƭ��</th><td>�ǥե���ȤΤޤޤǹ����ޤ���</td></tr>
                                            <tr><th>SALT</th><td>�ǥե���ȤΤޤޤǹ����ޤ���</td></tr>
                                            <tr><th>�ǡ����١����ػ�³Ū��³</th><td>�ǥե��������Ρ֤������פΤޤޤǹ����ޤ���</td></tr>
                                            <tr><th>XOOPS Cube�ؤΥѥ�</th><td>�ǥե���Ȥǥѥ������Ϥ���Ƥ��ޤ��Τǡ����Τޤޤǹ����ޤ���</td></tr>
                                            <tr><th>XOOPS Cube�ؤ�URL</th><td>�ǥե���Ȥ�URL�����Ϥ���Ƥ��ޤ��Τǡ����Τޤޤǹ����ޤ���</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e05">5.�������¸</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_12.png" alt="�ǡ����١���������ӥѥ���URL������"></p>
                                    <p>��������mainfile.php�˽񤭹��������ԤäƤ��ޤ���<br>
                                    �ѥ���URL�Υ����å� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e06">6.�ѥ���URL�Υ����å�</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_13.png" alt="�ѥ���URL�Υ����å�"></p>
                                    <p>ɽ�����줿�ѥ�������ǧ�����ǡ����١�������γ�ǧ >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e07">7.�ǡ����١�������γ�ǧ</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_14.png" alt="�ǡ����١�������γ�ǧ"></p>
                                    <p>�ǡ����١�����������Ƥ��ǧ���ơ��ǡ����١���������å���>> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e08">8.�ǡ����١���������å�</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_15.png" alt="�ǡ����١���������å�"></p>
                                    <p>MySQL����³��ǧ���Ǥ��ޤ��ȡ�������β��̤�ɽ������ޤ���<br>
                                    �ǡ����١����ơ��֥���� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e09">9.�ǡ����١����ơ��֥����</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_16.png" alt="�ǡ����١����ơ��֥����"></p>
                                    <p>�����ȴ����ԤˤĤ��Ƥ����� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e010">10.�����ȴ����ԤˤĤ��Ƥ�����</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_17.png" alt="�����ȴ����ԤˤĤ��Ƥ�����"></p>
                                    <p>�����Ǥϡ�XOOPS Cube�δ������̤˥����󤹤�ݤ�ɬ�פʴ����Ԥ˴ؤ����������Ϥ��ޤ���</p>
                                    <ul class="ul">
                                        <li>�����ԥ桼����̾</li>
                                        <li>�����ԥ᡼�륢�ɥ쥹</li>
                                        <li>�����ԥѥ����</li>
                                        <li>�����ԥѥ����(������)</li>
                                    </ul>
                                    <p>�ƹ��ܤˤĤ��ơ�Ǥ�դ��ͤ����Ϥ��Ƥ���������<br>
                                    (�����ԥ桼����̾��Ⱦ��ʸ�������Ϥ���ɬ�פ�����ޤ���)</p>
                                    <p>�����Ծ�������ϸ塢�ǡ��������� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e011">11.�ǡ���������</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_18.png" alt="�ǡ���������"></p>
                                    <p>��λ >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e012">12.���󥹥ȡ�����쥹�ƥå״�λ</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_19.png" alt="���󥹥ȡ�����쥹�ƥå״�λ"></p>
                                    <p>ɽ�����Ƥ��ǧ�������󥹥ȡ������2���ƥå� >> �֢��פ򥯥�å����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e013">13.�����ԥ��������</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_20.png" alt="�����ԥ��������"></p>
                                    <p>��ۤ����ꤷ�������Ծ�������Ϥ��������󤷤ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e014">14.���󥹥ȡ���</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_21.png" alt="���󥹥ȡ���"></p>
                                    <p>������塢�ְʲ��Υ⥸�塼�뤬Ƴ������Ƥ��ޤ���פ�ɽ�����줿���̤����ܤ��ޤ���</p>
                                    <p>�ǥե���Ȥǥ����å��ܥå����������å����줿���֤ǡ��֥��󥹥ȡ���ץܥ���򲡤��ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e015">15.���󥹥ȡ��봰λ����</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_22.png" alt="���󥹥ȡ��봰λ����"></p>
                                    <p>���󥹥ȡ��봰λ�Υڡ����˵��ܤ���Ƥ���ؼ��˽��äơ�FTP���եȤ���³�������С�¦��xoops/install���ǥ��쥯�ȥ�������ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_xoops_23.png" alt="install�ǥ��쥯�ȥ����"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e016">16.�����ԥ�˥塼�򥯥�å�</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_24.png" alt="��������"></p>
                                    <p>�����ԥ�˥塼�򥯥�å����ޤ���</p>
                                    <p>�����ԥ�˥塼���̤Ǥϡ��ʲ��Τ褦����ս񤭤�ɽ������Ƥ��ޤ���</p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p class="mb0">�ե����� /home/xsample/example.com/public_html/xoops/mainfile.php �ؤν񤭹��ߤ���ǽ�ȤʤäƤ��ޤ���<br>
                                            ���Υե�����Υѡ��ߥå����������ѹ����Ƥ���������</p>
                                        </div>
                                    </aside>
                                    <p>����ɽ���˽��äơ�����ե�����Ǥ���xoops/mainfile.php��°�����ѹ����ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e017">17.xoops/mainfile.php��°���ѹ�</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_25.png" alt="mainfile.php�Υѡ��ߥå�����ѹ�"></p>
                                    <p>xoops/mainfile.php��°����500���ѹ������񤭹��ߤ��ԲĤˤ��ޤ���</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-e018">18.��λ</h6>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_xoops_26.png" alt="���󥹥ȡ����ȴ�λ��"></p>
                                    <p>�ʾ�ǥ��󥹥ȡ����Ȥ���λ�Ǥ���������ͤǤ�����</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
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