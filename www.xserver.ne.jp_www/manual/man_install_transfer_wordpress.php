<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress��ž(�ܹ�)��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä��Ǥ˥��å��������С��ʳ��Ǳ������WordPress�򥨥å��������С��ذ�ž�ʰܹԡˤ��뤿��μ��Ǥ����ޤ������å��������С��Ǥ�WordPress����ư�ǰܹԤǤ����WordPress��ñ�ܹԡ׵�ǽ���󶡤��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WordPress�ΰ�ž�ˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">1.��ž���ǥХå����åפ�ɬ�פʥǡ����ν���</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">WordPress�����ȥե�����ΥХå����å�</a></li>
                                        <li><a href="#link-previous-a02">�ǡ����١����ΥХå����å�</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-b">2.���å��������С��ؤΰ�ž���</a>
                                    <ul>
                                        <li><a href="#link-previous-b01">1.�ɥᥤ��������ɲá��ȼ��ɥᥤ��Ǳ��Ѥ������</a></li>
                                        <li><a href="#link-previous-b02">2.�ǡ����١����κ���</a></li>
                                        <li><a href="#link-previous-b03">3.wp-config�ե�����ν񤭴���</a></li>
                                        <li><a href="#link-previous-b04">4.�ǡ����١����Υ���ݡ���</a></li>
                                        <li><a href="#link-previous-b05">5.�����ȥǡ����Υ��åץ���</a></li>
                                        <li><a href="#link-previous-b07">6.��ɬ�פ˱����ơ˥͡��ॵ���С��ѹ�����ư���ǧ</a></li>
                                        <li><a href="#link-previous-b06">7.�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <aside class="msg">
                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>WordPress�ΰ�ž�򤴸�Ƥ�Τ����ͤ�</h6>
                                <div class="msg_body">
                                    <p>���å��������С��Ǥϥ����С��ѥͥ뤫��δ�ñ����WordPress���ܹԤǤ����WordPress��ñ�ܹԡ׵�ǽ���󶡤��Ƥ��ޤ���</p>
                                    <p><a class="btn btn_white" href="man_install_transfer_wp.php">�ޥ˥奢���WordPress��ñ�ܹԡ�<i class="ico ico_book font-xl"></i></a></p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">1.��ž���ǥХå����åפ�ɬ�פʥǡ����ν���</h4>
                                <div class="section_body">

                                    <section class="box">
                                        <h5 id="link-previous-a01" class="box_ttl">WordPress�����ȥե�����ΥХå����å�</h5>
                                        <div class="box_body">
                                            <p>��ž�������С����顢�оݤ�WordPress��ɬ�פʥե�����켰�ΥХå����åפ�������Ƥ���������</p>
                                            <p>�ե�����켰�ΥХå����åפ��������ˤϡ�����Ū�ˡ�FFFTP�פ��Filezilla�פʤɤΡ�FTP���եȡ٤��Ѥ�����ˡ�䡢��ž�������С����󶡤���Ƥ���إե�����ޥ͡�����٤��Ѥ�����ˡ������ޤ���</p>
                                            <p>�ܤ������ϡ���WordPress�ѥե�����켰�ΥХå����åפ��ꤿ���׻ݤ��ž�������ӥ��ˤ��䤤��碌����������</p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 id="link-previous-a02" class="box_ttl">�ǡ����١����ΥХå����å�</h5>
                                        <div class="box_body">
                                            <p>��ž�������С��ǡ��ǡ����١����ΥХå����åפ�������Ƥ���������</p>
                                            <p>�ǡ����١����ΥХå����åפ��������ˤϡ�����Ū�ˡ�phpMyAdmin�٤Ρ֥������ݡ��ȡ׵�ǽ���Ѥ�����ˡ������ޤ���<br>
                                            �ܤ������ϡ��֥ǡ����١����򥨥����ݡ��Ȥ������׻ݤ��ž�������ӥ��ˤ��䤤��碌����������</p>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>����­��phpMyAdmin�ǥǡ����١����򥨥����ݡ��Ȥ���ݤΤ����</h6>
                                                <div class="msg_body">
                                                    <p>��ž����phpMyAdmin�ǥǡ����١����򥨥����ݡ��Ȥ���ݡ��ʲ�3���ܤ˥����å��򤵤�Ƥ��ʤ����ϥ��顼��ȯ�������ǽ��������ޤ���<br>
                                                        �ʲ���3���ܤ�����å����ƺ�Ȥ�ʤ�Ƥ���������</p>
                                                    <ul class="ul mb0">
                                                        <li>�ڥǡ�����</li>
                                                        <li>������ INSERT ʸ���������</li>
                                                        <li>Ĺ�� INSERT ʸ���������</li>
                                                    </ul>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">2.���å��������С��ؤΰ�ž���</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-b01" class="box_ttl">1.�ɥᥤ��������ɲá��ȼ��ɥᥤ��Ǳ��Ѥ������</h6>
                                            <div class="box_body">
                                                <p>���å��������С����ȼ��ɥᥤ������Ѥ��뤿��ˡ��ɥᥤ��������ɲä���ɬ�פ�����ޤ���
                                                <br>�ޤ��������С��ѥͥ�Ρ�<a href="man_domain_setting.php">�ɥᥤ������</a>�פ��֥ɥᥤ��������ɲáפ�ԤäƤ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_1.png" alt="�ɥᥤ��������ɲò���"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b02" class="box_ttl">2.�ǡ����١����κ���</h6>
                                            <div class="box_body">
                                                <p>��ž�������������ǡ����١����򥨥å��������С��إ���ݡ��Ȥ��뤿�ᡢ�����ʥǡ����١�����������ޤ���</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>�����С��ѥͥ�Ρ�<a href="man_db_setting.php">MySQL����</a>�� �� ��MySQL�����פ�����Ѥ���MySQL�ǡ����١�����������Ƥ��������� <br>
                                                        ��������MySQL�ǡ����١���̾�ϸ��ɬ�פʾ���Τ��ᡢ���ʤɤ˹����Ƥ���������</p>
                                                        <table class="table table_use-caption">
                                                            <caption>���Ϲ���</caption>
                                                            <tbody>
                                                                <tr><th>MySQL�ǡ����١���̾</th><td>(�����С�ID_)Ǥ�դ�ʸ����<br>��)example_wp</td></tr>
                                                                <tr><th>ʸ��������</th><td>UTF-8(utf8mb4)</td></tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_2.png?date=2412" alt="MySQL�ǡ����١��������"></p>
                                                    </li>
                                                    <li>
                                                        <p>³���ơ���<a href="man_db_setting.php">MySQL����</a>�� �� ��MySQL�����פ����������ǡ����١����˥����������뤿��Υ桼������������Ƥ���������<br>
                                                        ��������MySQL�桼��̾�Ȼ��ꤷ���ѥ���ɤϸ��ɬ�פʾ���Τ��ᡢ���ʤɤ˹����Ƥ���������</p>
                                                        <table class="table table_use-caption">
                                                            <caption>���Ϲ���</caption>
                                                            <tbody>
                                                                <tr><th>MySQL�桼����ID</th><td>(�����С�ID_)Ǥ�դ�ʸ����<br>��)example_user</td></tr>
                                                                <tr><th>�ѥ����</th><td>Ǥ�դΥѥ����</td></tr>
                                                            </tbody>
                                                        </table>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_3.png" alt="MySQL�ǡ����١��������"></p>
                                                    </li>
                                                    <li>
                                                        <p>��<a href="man_db_setting.php">MySQL����</a>�� �� ��MySQL�����פ����������ǡ����١����˥������������ɲä��ޤ���<br>
                                                        ����������̤��ͭ�桼���������2�ˤ��ɲä���MySQL�桼�������򤷡�[�ɲ�]�ܥ���򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_4.png" alt="[�ɲ�]�ܥ���򥯥�å�"></p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_5.png" alt="�֥�����������ͭ�桼���פ�ɽ������ޤ�"></p>
                                                    </li>
                                                    <li>
                                                        <p>��<a href="man_db_setting.php">MySQL����</a>�� �� ��MySQL�����פβ�����ɽ������Ƥ����MySQL �ۥ���̾�פ���ʤɤ˹����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_6.png" alt="��MySQL5 �ۥ���̾�פ���ʤɤ˹�����"></p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b03" class="box_ttl">3.wp-config�ե�����ν񤭴���</h6>
                                            <div class="box_body">
                                                <p>��ž�������С��ǥХå����åפ�����WordPress�Υ����ȥǡ�����ˤ����wp-config.php�ۥե�����ˡ�2.�ǡ����١����κ����ۤǺ��������ǡ����١����ξ����ȿ�Ǥ��ޤ���</p>
                                                <ul class="ul ml30">
                                                    <li>MySQL�ǡ����١���̾</li>
                                                    <li>MySQL�桼��ID</li>
                                                    <li>�ѥ����</li>
                                                    <li>MySQL�ۥ���̾</li>
                                                </ul>
                                                <p>��wp-config.php�ۥե������ƥ����ȥ��ǥ�����Tera Pad���ˤǳ������Խ���򤴻��Ȥξ塢������������񤭴����Ƥ���������</p>
                                                <dl class="dl">
                                                    <dt>sv12301�ʹߤΥ����С������Ѥ���</dt>
                                                    <dd>
                                                        <p>��򻲾Ȥξ塢�Ŀ������βս���Խ����Ƥ���������<br>���ˡ�example�פȤ��������С�(�����С�ID)�ˤơ�<em class="font-bold base-color">example_wp</em>�פȤ����ǡ����١��������������<em class="font-bold base-color">example_user</em>�פȤ����桼�����ظ��¤�Ϳ������硢�����Τ褦�ʾ��֤ˤʤ�ޤ���</p>
                                                        <div class="code">
                                                            <p>/** WordPress �Τ���Υǡ����١���̾ */<br>
                                                            <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υ桼����̾ */<br>
                                                            <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υѥ���� */<br>
                                                            <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL �Υۥ���̾ */<br>
                                                            <code>define('DB_HOST', '<em class="font-bold base-color">localhost</em>');</code></p>
                                                        </div>
                                                    </dd>

                                                    <dt>sv12300�����Υ����С���sv1��sv20.xtwo.ne.jp�����С������Ѥ���</dt>
                                                    <dd>
                                                        <p>��򻲾Ȥξ塢�Ŀ������βս���Խ����Ƥ���������<br>���ˡ�example�פȤ��������С�(�����С�ID)�ˤơ�<em class="font-bold base-color">example_wp</em>�פȤ����ǡ����١��������������<em class="font-bold base-color">example_user</em>�פȤ����桼�����ظ��¤�Ϳ������硢�����Τ褦�ʾ��֤ˤʤ�ޤ���</p>
                                                        <div class="code">
                                                            <p>/** WordPress �Τ���Υǡ����١���̾ */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υ桼����̾ */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υѥ���� */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL �Υۥ���̾ */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">mysql***.xserver.jp</em>');</code></p>
                                                        </div>
                                                        <p>
                                                            ��MySQL �Υۥ���̾�פϡ������ѤΥ����С����Ȥ˰ۤʤ�ޤ���
                                                            �����С��ѥͥ����MySQL����פ˵��ܤ���Ƥ���֥ۥ���̾�פ����Ϥ��Ƥ���������
                                                        </p>
                                                        <p>
                                                            ���mysql***.xserver.jp
                                                        </p>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b04" class="box_ttl">4.�ǡ����١����Υ���ݡ���</h6>
                                            <div class="box_body">
                                                <p>��ž�����Хå����åפ����ǡ����١����Υ���ݡ��Ȥ�Ԥ��ޤ���</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>�����С��ѥͥ�Ρ�phpmyadmin(MySQL5.7)�פޤ��ϡ�phpMyAdmin(MariaDB10.5)�פ򥯥�å�����<a href="man_db_myadmin.php">phpmyadmin</a>�إ����󤷤ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_6b.png" alt="��phpmyadmin(MySQL5.7)�פޤ��ϡ�phpMyAdmin(MariaDB10.5)�פ򥯥�å�"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>�������ɬ�פʾ���</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th>�桼����̾</th>
                                                                    <td>MySQL�桼��̾</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�ѥ����</th>
                                                                    <td>MySQL�桼���Υѥ����</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>���������̺������2.�ǡ����١����κ����ۤμ��Ǻ�������MySQL�ǡ����١���̾�����򤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_7.png" alt="phpmyadmin���̡��ǡ����١���̾������"></p>
                                                    </li>
                                                    <li>
                                                        <p>³���ơ����̱�¦�Υ��֤��֥���ݡ��ȡפؿʤ�Ǥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_8.png" alt="phpmyadmin���̡�����ݡ��Ȥ򥯥�å�"></p>
                                                    </li>
                                                    <li>
                                                        <p>����ݡ��Ȳ��̤�ɽ������ޤ��Τǡ��֥���ݡ��Ȥ���ե����������֥��åץ��ɥե�����פΡ֥ե����������פ򥯥�å����� ��ž���Υ����С���ꥨ�����ݡ��Ȥ���sql�ե��������ꤷ�ơ��֥���ݡ��ȡץܥ���򥯥�å�����Хǡ����١����Υ���ݡ��Ȥ��Ԥ��ޤ���</p>
                                                    </li>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_9.png" alt="phpmyadmin���̡����åץ��ɥե�����ΰ��֤򻲾Ȥ�����ݡ��Ȥ���"></p>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b05" class="box_ttl">5.�����ȥǡ����Υ��åץ���</h6>
                                            <div class="box_body">
                                                <p>��ž�������С��ǥХå����åפ򤷤�WordPress�Υ����ȥǡ����� FTP���եȤʤɤ��Ѥ��ơ����å��������С��Τ���˾�Υɥᥤ��ե������ˤ���[public_html]�ե��������إ��åץ��ɤ򤷤ޤ���</p>
                                                <p class="font-bold">�����򻲾Ȥξ塢Ǥ�դγ��ؤ˥��åץ��ɤ��Ƥ���������</p>
                                                <div class="border border_gray">
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://example.com/ �ǥ����Ȥ�ɽ��������Υ��åץ�����</p>
                                                    <p>FTP��Ǥϡ�/example.com/public_html/ �Ȥʤ�ޤ���</p>
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://test.example.com/ �ǥ����Ȥ�ɽ��������Υ��åץ�����</p>
                                                    <p class="mb0">FTP��Ǥϡ�/example.com/public_html/test/ �Ȥʤ�ޤ���</p>
                                                    <p class="note mb0">��http://example.com/test/ ��Ʊ���ե�����ˤʤ�ޤ���</p>
                                                </div>

                                                <p class="mb10 mt20">�ʤ��������С��ѥͥ�ǥɥᥤ�����ꡦ���֥ɥᥤ��������ɲä���ȡ��ɥᥤ��ľ�������֥ɥᥤ��ľ���˰ʲ��Υե����뤬��������ޤ���</p>

                                                <ul class="ul">
                                                    <li>index.html</li>
                                                    <li>default_page.png</li>
                                                </ul>
                                                <p class="mb0">�ʾ�Υե����뤬¸�ߤ�����ϡ��ե�����̾���ѹ����뤫��������Ƥ���������</p>

                                                <p><a href="man_ftp_setting.php">FTP���ե�����</a>����ӥ��åץ�����ˡ�ˤĤ��Ƥϥޥ˥奢��򻲹ͤˤ��Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b07" class="box_ttl">6.��ɬ�פ˱����ơ˥͡��ॵ���С��ѹ�����ư���ǧ</h6>
                                            <div class="box_body">
                                                <p>
                                                    ���Ȥ��Υѥ�����Ρ�hosts�ץե�������Խ����뤳�Ȥǡ��͡��ॵ���С����ڤ��ؤ�����ư���ǧ���Ǥ���褦�ˤʤ�ޤ���<br>
                                                    �ܺ٤ϡ��ޥ˥奢���<a href="man_domain_checkproxy.php#link-previous-b">hosts�ե�������Խ����Ƴ�ǧ������ˡ</a>�פ򤴻��Ȥ���������
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b06" class="box_ttl">7.�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</h6>
                                            <div class="box_body">
                                                <ol class="ol mb0">
                                                    <li>
                                                        <p class="font-bold">�͡��ॵ���С����ѹ�</p>
                                                        <p>���ҤǴ������Ƥ���ɥᥤ���<a href="man_domain_namesever_setting.php#link-previous-b">�͡��ॵ���С����ѹ�</a>�ϡ�XServer����������⡢�͡��ॵ���С����ѹ����˾����ɥᥤ��α�ü�ˤ��륯���å���˥塼��<i class="ico-xacc ico-xacc--list"></i>�ˤΡ֥͡��ॵ���С�����פ���ѹ���ǽ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_transfer_wordpress_10.png" alt="�͡��ॵ���С�����򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                                        <p>�������å��������С��Υ͡��ॵ���С����ѹ����Ƥ���������</p>
                                                        <table class="table">
                                                            <caption>�͡��ॵ���С�</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th>�͡��ॵ���С�1</th>
                                                                    <td>ns1.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�͡��ॵ���С�2</th>
                                                                    <td>ns2.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�͡��ॵ���С�3</th>
                                                                    <td>ns3.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�͡��ॵ���С�4</th>
                                                                    <td>ns4.xserver.jp</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�͡��ॵ���С�5</th>
                                                                    <td>ns5.xserver.jp</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m">
                                                                <i class="ico ico_circle-arrow-right"></i>
                                                                ��X2�����ӥ�������ƥʥ�(2019ǯ8��28���»�)�ۤ��оݥ�������ȤˤĤ���
                                                            </h6>
                                                            <div class="msg_body pl30">
                                                                <p>
                                                                   �嵭���ƥʥ󥹤��оݥ�������ȤˤĤ��Ƥϡ�<br>
                                                                   �͡��ॵ���С���ʲ��˻��ꤷ�Ƥ���������
                                                                </p>
                                                                <dl class="dl">
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>�͡��ॵ���С�1: ns1.xtwo.ne.jp</li>
                                                                            <li>�͡��ॵ���С�2: ns2.xtwo.ne.jp</li>
                                                                            <li>�͡��ॵ���С�3: ns3.xtwo.ne.jp</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </aside>
                                                        <ul class="note-list mb20">
                                                            <li>��¾�Ҵ����ɥᥤ��ξ�硢�ѹ���ˡ�˴ؤ��Ƥϥɥᥤ��������ȼԤس�ǧ���Ƥ���������</li>
                                                            <li>���͡��ॵ���С��ѹ��塢������֡ʺ���24���֤ۤɡˤ�Фơ������˥����С�����ž����ޤ���</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">�����Ȥ�ư���ǧ</p>
                                                        <p class="mb0">�ե����륢�åץ��ɸ塢WordPress�����Ȥؤȥ���������������ʤ�ɽ����ư��Ƥ���褦�Ǥ���С���ž��Ȥϴ�λ�Ǥ���</p>
                                                    </li>
                                                </ol>
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
                                    <li>
                                        <a href="#link-a">WordPress�ΰ�ž�ˤĤ���</a>
                                    </li>
                                    <li>
                                        <a href="#link-b">1. ��ž���ǥХå����åפ�ɬ�פʥǡ����ν���</a>
                                        <ol>
                                            <li><a href="#link-b1">WordPress�����ȥե�����ΥХå����å�</a></li>
                                            <li><a href="#link-b2">�ǡ����١����ΥХå����å�</a></li>
                                        </ol>
                                    </li>
                                    <li>
                                        <a href="#link-c">2. ���å��������С��ؤΰ�ž���</a>
                                        <ol>
                                            <li><a href="#link-c1">1. �ɥᥤ��������ɲá��ȼ��ɥᥤ��Ǳ��Ѥ������</a></li>
                                            <li><a href="#link-c2">2. �ǡ����١����κ���</a></li>
                                            <li><a href="#link-c3">3. wp-config�ե�����ν񤭴���</a></li>
                                            <li><a href="#link-c4">4. �ǡ����١����Υ���ݡ���</a></li>
                                            <li><a href="#link-c5">5. �����ȥǡ����Υ��åץ���</a></li>
                                            <li><a href="#link-c6">6. �͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <aside class="msg">
                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>WordPress�ΰ�ž�򤴸�Ƥ�Τ����ͤ�</h6>
                                <div class="msg_body">
                                    <p>���å��������С��Ǥϥ����С��ѥͥ뤫��δ�ñ����WordPress���ܹԤǤ����WordPress��ñ�ܹԡ׵�ǽ���󶡤��Ƥ��ޤ���</p>
                                    <p><a class="btn btn_white" href="man_install_transfer_wp.php">�ޥ˥奢���WordPress��ñ�ܹԡ�<i class="ico ico_book font-xl"></i></a></p>
                                </div>
                            </aside>
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-a" class="section_ttl">WordPress�ΰ�ž�ˤĤ���</h3>
                                    <p>���˱������WordPress�򡢥��å��������С��ذ�ž���ޤ������Τ���˰�ž����ɬ�פʥǡ����򤴽����ξ塢��ž��Ȥ�ʤ�Ƥ���ɬ�פ�����ޤ����ܺ٤ϲ����򤴻��Ȥ���������</p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-b" class="section_ttl">1.��ž���ǥХå����åפ�ɬ�פʥǡ����ν���</h3>
                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-b1">WordPress�����ȥե�����ΥХå����å�</h4>
                                            <div class="box_body">
                                                <p>��ž�������С����顢�оݤ�WordPress��ɬ�פʥե�����켰�ΥХå����åפ�������Ƥ���������</p>
                                                <p>�ե�����켰�ΥХå����åפ��������ˤϡ�����Ū�ˡ�FFFTP�פ��Filezilla�פʤɤΡ�FTP���եȡ٤��Ѥ�����ˡ�䡢��ž�������С����󶡤���Ƥ���إե�����ޥ͡�����٤��Ѥ�����ˡ������ޤ���</p>
                                                <p>�ܤ������ϡ���WordPress�ѥե�����켰�ΥХå����åפ��ꤿ���׻ݤ��ž�������ӥ��ˤ��䤤��碌����������</p>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-b2" >�ǡ����١����ΥХå����å�</h4>
                                            <div class="box_body">
                                                <p>��ž�������С��ǡ��ǡ����١����ΥХå����åפ�������Ƥ���������</p>
                                                <p>�ǡ����١����ΥХå����åפ��������ˤϡ�����Ū�ˡ�phpMyAdmin�٤Ρ֥������ݡ��ȡ׵�ǽ���Ѥ�����ˡ������ޤ���<br>
                                                    �ܤ������ϡ��֥ǡ����١����򥨥����ݡ��Ȥ������׻ݤ��ž�������ӥ��ˤ��䤤��碌����������</p>
                                                <aside class="msg msg_caution mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����­��phpMyAdmin�ǥǡ����١����򥨥����ݡ��Ȥ���ݤΤ����</h6>
                                                    <div class="msg_body">
                                                        <p>��ž����phpMyAdmin�ǥǡ����١����򥨥����ݡ��Ȥ���ݡ��ʲ�3���ܤ˥����å��򤵤�Ƥ��ʤ����ϥ��顼��ȯ�������ǽ��������ޤ���<br>
                                                            �ʲ���3���ܤ�����å����ƺ�Ȥ�ʤ�Ƥ���������</p>
                                                        <ul class="ul mb0">
                                                            <li>�ڥǡ�����</li>
                                                            <li>������ INSERT ʸ���������</li>
                                                            <li>Ĺ�� INSERT ʸ���������</li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h3 id="link-c" class="section_ttl">2.���å��������С��ؤΰ�ž���</h3>
                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c1">1. �ɥᥤ��������ɲá��ȼ��ɥᥤ��Ǳ��Ѥ������</h4>
                                            <div class="box_body">
                                                <p>
                                                    ���å��������С����ȼ��ɥᥤ������Ѥ��뤿��ˡ��ɥᥤ��������ɲä���ɬ�פ�����ޤ���<br>
                                                    �ޤ��������С��ѥͥ�Ρ�<a href="man_domain_setting.php">�ɥᥤ������</a>�פ��֥ɥᥤ����ɲáפ�ԤäƤ���������
                                                </p>
                                                <p><img class="img" src="../img/manual/man_install_transfer_wordpress_1.png?date=2410" alt="�ɥᥤ��������ɲò���"></p>
                                            </div>


                                        </section>
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c2">2. �ǡ����١����κ���</h4>
                                            <div class="box_body">
                                                <p>��ž�������������ǡ����١����򥨥å��������С��إ���ݡ��Ȥ��뤿�ᡢ�����ʥǡ����١�����������ޤ���</p>

                                                <ol class="ol">
                                                    <li><p>�����С��ѥͥ�Ρ�<a href="man_db_setting.php">MySQL����</a>�ע���MySQL�ǡ����١�������פ�����Ѥ���MySQL�ǡ����١�����������Ƥ���������<br>
                                                            ��������MySQL�ǡ����١���̾�ϸ��ɬ�פʾ���Τ��ᡢ���ʤɤ˹����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_2.png?date=2412" alt="MySQL�ǡ����١��������"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>���Ϲ���</caption>
                                                            <tbody>
                                                            <tr><th>MySQL�ǡ����١���̾</th><td>(�����С�ID_)Ǥ�դ�ʸ����<br>��)example_wp</td></tr>
                                                            <tr><th>ʸ��������</th><td>UTF-8(utf8mb4)</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li><p>³���ơ���<a href="man_db_setting.php">MySQL����</a>�ע���MySQL�桼��������פΡ֥桼�������ɲáפ����������ǡ����١����˥����������뤿��Υ桼����������Ƥ���������<br>
                                                            ��������MySQL�桼��̾�Ȼ��ꤷ���ѥ���ɤϸ��ɬ�פʾ���Τ��ᡢ���ʤɤ˹����Ƥ�������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_3.png?date=2410" alt="MySQL�桼�������ɲ�"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>���Ϲ���</caption>
                                                            <tbody>
                                                            <tr><th>MySQL�桼����ID</th><td>(�����С�ID_)Ǥ�դ�ʸ����<br>��)example_user</td></tr>
                                                            <tr><th>�ѥ����</th><td>Ǥ�դΥѥ����</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>��<a href="man_db_setting.php">MySQL����</a>�ע���MySQL�ǡ����١�������פ����������ǡ����١����˥������������ɲä��ޤ���<br>
                                                            �֥桼�������ɲáפ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_4.png?date=2410" alt="[�桼�������ɲ�]�ܥ���򥯥�å�"></p>
                                                        <p>��MySQL�桼��������פ��ɲä���MySQL�桼������ɽ������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_5.png?date=2410" alt="�ɲä�����MySQL�桼�����פ�ɽ������ޤ�"></p>
                                                    </li>
                                                    <li>
                                                        <p>��<a href="man_db_setting.php">MySQL����</a>�ע���MySQL����פβ�����ɽ������Ƥ���֥ۥ���̾�פ���ʤɤ˹����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_6.png?date=2410" alt="�֥ۥ���̾�פ���ʤɤ˹�����"></p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c3">3. wp-config�ե�����ν񤭴���</h4>
                                            <div class="box_body">
                                                <p>��ž�������С��ǥХå����åפ�����WordPress�Υ����ȥǡ�����ˤ����wp-config.php�ۥե�����ˡ�2. �ǡ����١����κ����ۤǺ��������ǡ����١����ξ����ȿ�Ǥ��ޤ���</p>
                                                <ul class="ul ml30">
                                                    <li>MySQL�ǡ����١���̾</li>
                                                    <li>MySQL�桼��ID</li>
                                                    <li>�ѥ����</li>
                                                    <li>MySQL�ۥ���̾</li>
                                                </ul>
                                                <p>��wp-config.php�ۥե������ƥ����ȥ��ǥ�����Tera Pad���ˤǳ������Խ���򤴻��Ȥξ塢������������񤭴����Ƥ���������</p>
                                                <dl class="dl">
                                                    <dt>sv12301�ʹߤΥ����С������Ѥ���</dt>
                                                    <dd>
                                                        <p>��򻲾Ȥξ塢�Ŀ������βս���Խ����Ƥ���������<br>���ˡ�example�פȤ��������С�(�����С�ID)�ˤơ�<em class="font-bold base-color">example_wp</em>�פȤ����ǡ����١��������������<em class="font-bold base-color">example_user</em>�פȤ����桼�����ظ��¤�Ϳ������硢�����Τ褦�ʾ��֤ˤʤ�ޤ���</p>
                                                        <div class="code">
                                                            <p>/** WordPress �Τ���Υǡ����١���̾ */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υ桼����̾ */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υѥ���� */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL �Υۥ���̾ */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">localhost</em>');</code></p>
                                                        </div>
                                                    </dd>

                                                    <dt>sv12300�����Υ����С���sv1��sv20.xtwo.ne.jp�����С������Ѥ���</dt>
                                                    <dd>
                                                        <p>��򻲾Ȥξ塢�Ŀ������βս���Խ����Ƥ���������<br>���ˡ�example�פȤ��������С�(�����С�ID)�ˤơ�<em class="font-bold base-color">example_wp</em>�פȤ����ǡ����١��������������<em class="font-bold base-color">example_user</em>�פȤ����桼�����ظ��¤�Ϳ������硢�����Τ褦�ʾ��֤ˤʤ�ޤ���</p>
                                                        <div class="code">
                                                            <p>/** WordPress �Τ���Υǡ����١���̾ */<br>
                                                                <code>define('DB_NAME', '<em class="font-bold base-color">example_wp</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υ桼����̾ */<br>
                                                                <code>define('DB_USER', '<em class="font-bold base-color">example_user</em>');</code></p>
                                                            <p>/** MySQL �ǡ����١����Υѥ���� */<br>
                                                                <code>define('DB_PASSWORD', '<em class="font-bold base-color">***********</em>');</code></p>
                                                            <p class="mb0">/** MySQL �Υۥ���̾ */<br>
                                                                <code>define('DB_HOST', '<em class="font-bold base-color">mysql***.xserver.jp</em>');</code></p>
                                                        </div>
                                                        <p>
                                                            ��MySQL �Υۥ���̾�פϡ������ѤΥ����С����Ȥ˰ۤʤ�ޤ���
                                                            �����С��ѥͥ����MySQL����פ˵��ܤ���Ƥ���֥ۥ���̾�פ����Ϥ��Ƥ���������
                                                        </p>
                                                        <p>
                                                            ���mysql***.xserver.jp
                                                        </p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c4">4. �ǡ����١����Υ���ݡ���</h4>
                                            <div class="box_body">
                                                <p>��ž�����Хå����åפ����ǡ����١����Υ���ݡ��Ȥ�Ԥ��ޤ���</p>

                                                <ol class="ol">
                                                    <li>
                                                        <p>�����С��ѥͥ�Ρ�phpmyadmin(MySQL5.7)�פޤ��ϡ�phpMyAdmin(MariaDB10.5)�פ򥯥�å�����<a href="man_db_myadmin.php">phpmyadmin</a>�إ����󤷤ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_6b.png?date=20240326" alt="��phpmyadmin(MariaDB10.5)�פ򥯥�å�"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>�������ɬ�פʾ���</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th>�桼����̾</th>
                                                                <td>MySQL�桼��̾</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ѥ����</th>
                                                                <td>MySQL�桼���Υѥ����</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <p>���������̺������2. �ǡ����١����κ����ۤμ��Ǻ�������MySQL�ǡ����١���̾�����򤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_7.png?date=2410" alt="phpmyadmin���̡��ǡ����١���̾������"></p>
                                                    </li>
                                                    <li>
                                                        <p>³���ơ����̱�¦�Υ��֤��֥���ݡ��ȡפؿʤ�Ǥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_install_transfer_wordpress_8.png?date=2410" alt="phpmyadmin���̡�����ݡ��Ȥ򥯥�å�"></p>
                                                    </li>
                                                    <li>
                                                        <p>����ݡ��Ȳ��̤�ɽ������ޤ��Τǡ��֥���ݡ��Ȥ���ե����������֥��åץ��ɥե�����פΡ֥ե����������פ򥯥�å����� ��ž���Υ����С���ꥨ�����ݡ��Ȥ���sql�ե��������ꤷ�ơ��֥���ݡ��ȡץܥ���򥯥�å�����Хǡ����١����Υ���ݡ��Ȥ��Ԥ��ޤ���</p>
                                                    </li>
                                                    <p><img class="img" src="../img/manual/man_install_transfer_wordpress_9.png?date=2410" alt="phpmyadmin���̡����åץ��ɥե�����ΰ��֤򻲾Ȥ�����ݡ��Ȥ���"></p>
                                                </ol>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c5">5. �����ȥǡ����Υ��åץ���</h4>
                                            <div class="box_body">
                                                <p>��ž�������С��ǥХå����åפ򤷤�WordPress�Υ����ȥǡ����� FTP���եȤʤɤ��Ѥ��ơ����å��������С��Τ���˾�Υɥᥤ��ե������ˤ���[public_html]�ե��������إ��åץ��ɤ򤷤ޤ���</p>
                                                <p class="font-bold">�����򻲾Ȥξ塢Ǥ�դγ��ؤ˥��åץ��ɤ��Ƥ���������</p>
                                                <div class="border border_gray">
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://example.com/ �ǥ����Ȥ�ɽ��������Υ��åץ�����</p>
                                                    <p>FTP��Ǥϡ�/example.com/public_html/ �Ȥʤ�ޤ���</p>
                                                    <p class="font-bold mb5"><i class="ico ico_circle base-color"></i>http://test.example.com/ �ǥ����Ȥ�ɽ��������Υ��åץ�����</p>
                                                    <p class="mb0">FTP��Ǥϡ�/example.com/public_html/test/ �Ȥʤ�ޤ���</p>
                                                    <p class="note mb0">��http://example.com/test/ ��Ʊ���ե�����ˤʤ�ޤ���</p>
                                                </div>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�����С���Υե�����򤴳�ǧ��������</h6>
                                                    <div class="msg_body">
                                                        <p class="mb5">�����С��ѥͥ�ǥɥᥤ��������ɲä���ľ��ϡ����åץ�����˰ʲ��Υե����뤬¸�ߤ��ޤ���</p>

                                                        <ul class="ul">
                                                            <li>index.html</li>
                                                            <li>default_page.png</li>
                                                        </ul>

                                                        <p class="mb0">�ʾ�Υե����뤬¸�ߤ�����ϡ��ե�����̾���ѹ����뤫��������Ƥ���������</p>
                                                    </div>
                                                </aside>

                                                <p><a href="man_ftp_setting.php">FTP���ե�����</a>����ӥ��åץ�����ˡ�ˤĤ��Ƥϥޥ˥奢��򻲹ͤˤ��Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c6">6. �͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</h4>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                        <p class="font-bold">�͡��ॵ���С����ѹ�</p>
                                                        <p>���ҤǴ������Ƥ���ɥᥤ���<a href="man_domain_namesever_setting.php#link-b">�͡��ॵ���С����ѹ�</a>�ϡ�XServer����������⡢�͡��ॵ���С����ѹ����˾����ɥᥤ��α�ü�ˤ��륯���å���˥塼��<i class="ico-xacc ico-xacc--list"></i>�ˤΡ֥͡��ॵ���С�����פ���ѹ���ǽ�Ǥ���</p>
                                                        <table class="table">
                                                            <caption>�͡��ॵ���С�</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th>�͡��ॵ���С�1</th>
                                                                <td>ns1.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�͡��ॵ���С�2</th>
                                                                <td>ns2.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�͡��ॵ���С�3</th>
                                                                <td>ns3.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�͡��ॵ���С�4</th>
                                                                <td>ns4.xserver.jp</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�͡��ॵ���С�5</th>
                                                                <td>ns5.xserver.jp</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m">
                                                                <i class="ico ico_circle-arrow-right"></i>
                                                                ��X2�����ӥ�������ƥʥ�(2019ǯ8��28���»�)�ۤ��оݥ�������ȤˤĤ���
                                                            </h6>
                                                            <div class="msg_body pl30">
                                                                <p>
                                                                    �嵭���ƥʥ󥹤��оݥ�������ȤˤĤ��Ƥϡ�<br>
                                                                    �͡��ॵ���С���ʲ��˻��ꤷ�Ƥ���������
                                                                </p>
                                                                <dl class="dl">
                                                                    <dd>
                                                                        <ul class="ul">
                                                                            <li>�͡��ॵ���С�1: ns1.xtwo.ne.jp</li>
                                                                            <li>�͡��ॵ���С�2: ns2.xtwo.ne.jp</li>
                                                                            <li>�͡��ॵ���С�3: ns3.xtwo.ne.jp</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </aside>
                                                        <ul class="note-list mb20">
                                                            <li>��¾�Ҵ����ɥᥤ��ξ�硢�ѹ���ˡ�˴ؤ��Ƥϥɥᥤ��������ȼԤس�ǧ���Ƥ���������</li>
                                                            <li>���͡��ॵ���С��ѹ��塢������֡ʺ���24���֤ۤɡˤ�Фơ������˥����С�����ž����ޤ���</li>
                                                        </ul>

                                                    </li>
                                                    <li>
                                                        <p class="font-bold">�����Ȥ�ư���ǧ</p>
                                                        <p class="mb0">�ե����륢�åץ��ɸ塢WordPress�����Ȥؤȥ���������������ʤ�ɽ����ư��Ƥ���褦�Ǥ���С���ž��Ȥϴ�λ�Ǥ���</p>
                                                    </li>
                                                </ol>
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