<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQL������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���MySQL�ǡ����١����κ�����ˡ��MySQL�ǡ����١����ΥХå����åפ�����ˤĤ��ư��⤷�Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">MySQL������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">MySQL������</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">MySQL�ʥǡ����١����ˤ��ɲ�</a></li>
                                        <li><a href="#link-previous-a02">MySQL�桼�����ɲ�</a></li>
                                        <li><a href="#link-previous-a03">MySQL����������������</a></li>
                                        <li><a href="#link-previous-a04">MySQL�桼���Υѥ�����ѹ�</a></li>
                                        <li><a href="#link-previous-a05">�ǡ����١����κ�����</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                            </ul>

                            <p>���å��������С��Ǥϥǡ����١����Ķ��Ȥ���MySQL���󶡤��Ƥ���ޤ���MySQL��������ǹ����Ȥ��Ƥ��ꥪ���ץ󥽡����Υǡ����١��������ƥ�Ȥ��Ƥ������ǺǤ���ڤ��Ƥ��ꡢ����ǽ�פ�ְ������פ���ɾ������ޤ���</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">MySQL������</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ�MySQL����פ�ꡢ��ñ�˥ǡ����١�����桼���κ����������������������������Ԥ����Ȥ��Ǥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_db_setting_1.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�Ԥ�������ϰʲ��ΤȤ���Ǥ���</p>
                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#link-previous-a01">MySQL�ʥǡ����١����ˤ��ɲ�</a></li>
                                        <li><a href="#link-previous-a02">MySQL�桼�����ɲ�</a></li>
                                        <li><a href="#link-previous-a03">MySQL����������������</a></li>
                                        <li><a href="#link-previous-a04">MySQL�桼���Υѥ�����ѹ�</a></li>
                                        <li><a href="#link-previous-a05">�ǡ����١����κ�����</a></li>
                                    </ul>

                                    <section class="block">
                                        <h5 id="link-previous-a01" class="block_ttl">MySQL�ʥǡ����١����ˤ��ɲ�</h5>
                                        <div class="block_body">
                                            <p>��MySQL�ɲáפ�ꡢ���Ѥ������ǡ����١���̾�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ����ǡ����١���̾�ϡ��֤����ͤΥ����С�ID_�ǡ����١���̾�פˤʤ�ޤ���</p>
                                            <p class="note mb30">��ʸ�������ɤϥ����С��ץ����򥤥󥹥ȡ��뤹����ʤɤǡ������ѤΥ�����ץȤ˹�碌��ɬ�פ�����ݤ��ѹ����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_2.png?date=2412" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            <p>���ɲä���פ򥯥�å����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_3.png?date=2412" alt="MySQL�ǡ����١������ɲä˥ե����������������꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a02" class="block_ttl">MySQL�桼�����ɲ�</h5>
                                        <div class="block_body">
                                            <p>�ǡ����١����˥桼�������ɲä��ޤ�����MySQL�桼���ɲáפ򥯥�å������Τ���ɽ�����줿���̤ǡ�MySQL�桼��ID�פȡ֥ѥ���ɡפ����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_4.png" alt="MySQL�桼���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            <p class="note">��MySQL 5.0.x�ǡ����١����ѤΥ桼�����ɲä��������ϡ���MySQL�桼������(MySQL5.0)�פ򥯥�å����Ƥ���������</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>MySQL�桼��ID</th>
                                                        <td>�����ͤΥ����С�ID����ưŪ���ղä���ޤ����㡧xsample_</td>
                                                    </tr>
                                                    <tr>
                                                        <th>�ѥ����</th>
                                                        <td>MySQL�桼���Υѥ���ɤ����Ϥ��Ƥ���������</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>��ǧ���̤����Ƥ��ǧ�������꤬�ʤ���С��ɲä���פ򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_5.png" alt="MySQL�桼���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a03" class="block_ttl">MySQL����������������</h5>
                                        <div class="block_body">
                                            <p>��MySQL�����פ��顢���������ǡ����١����ؤΥ�����������ͭ�桼���������꤬�Ԥ��ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_6.png" alt="MySQL�ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                            <p>����������̤��ͭ�桼�������椫�顢��˾����ǡ����١����ؤΥ������������ɲä������桼�������򤷡��ɲåܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_7.png" alt="MySQL�桼���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                            <p>������������ͭ�桼�����Ȥʤꡢ�ǡ����١����ؤΥ�����������ǽ�Ȥʤ�ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_8.png" alt="������������ͭ�桼�����˥ե����������������꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a04" class="block_ttl">MySQL�桼���Υѥ�����ѹ�</h5>
                                        <div class="block_body">
                                            <p>��MySQL�桼�������פ��顢MySQL�桼���Υѥ�����ѹ����Ԥ��ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_9.png" alt="MySQL�桼���ѹ��˥ե����������������꡼�󥷥�å�"></p>

                                            <p>�ѥ���ɤ��ѹ�������MySQL�桼���Ρ��ѹ��ץܥ���򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_10.png" alt="�ѥ���ɤ��ѹ��˥ե����������������꡼�󥷥�å�"></p>

                                            <p>���ܸ�β��̤ˤơ��ѹ���ο������ѥ���ɤ����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>

                                            <p><img class="img" src="../img/manual/previous/man_db_setting_11.png" alt="MySQL�桼�����Խ��ʳ�ǧ�ˤ˥ե����������������꡼�󥷥�å�"></p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>�ѥ����</th>
                                                        <td>�ѹ����MySQL�桼���Υѥ���ɤ����Ϥ��Ƥ���������</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p>������ǧ�ξ塢���ѹ�����פ򥯥�å����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_15.png" alt="�ѥ�����ѹ���ǧ���̤Υ����꡼�󥷥�å�"></p>
                                            <p>��ǧ���̤ˤϡ�MySQL�桼���Υѥ�����ѹ���ȼ�������碌�ƽ���������DB��³����ե�����פΰ�����ɽ������ޤ���<br>
                                            ��DB��³����ե�����פȤϡ�<a href="./man_install_auto.php">��ñ���󥹥ȡ��뵡ǽ</a>�ˤ�ä��ɲä����ץ����ˤ����ơ��ǡ����١����ؤ���³��������ꤷ�Ƥ���ե�����Τ��ȤǤ���
                                            <br>�оݤ��ʤ����ϡ�ɽ������ޤ���</p>
                                            <p>��MySQL�桼�����Խ���λ���ޤ������פ�ɽ������ޤ����顢�ѥ���ɤ��ѹ��ϴ�λ�Ǥ���<br>DB��³����ե��������������硢���η�̤������ɽ�����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_16.png" alt="�ѥ�����ѹ���̲��̤Υ����꡼�󥷥�å�"></p>

                                            <p class="mt30">�ַ�̡פ��ּ��ԡפˤʤ��硢��DB��³����ե�����٤Υե�����ѥ��򻲹ͤˡ������ͤˤ�����ե�����������Ƥ���������</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a05" class="block_ttl">�ǡ����١����κ�����</h5>
                                        <div class="section_body">
                                            <div class="serial-box mb10">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.MySQL�����˥塼��</h6>
                                                    <div class="box_body">
                                                        <p>�����С��ѥͥ�˥����󤷡���MySQL����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_1.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2.����������ǡ����١���������</h6>
                                                    <div class="box_body">
                                                        <p>����������ǡ����١���̾���ǧ���ֺ���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_17.png" alt="�ǡ����١����κ���˥ե����������������꡼�󥷥�å�"></p>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��WordPress������פ�ɽ������Ƥ���ǡ����١����ˤĤ���</h6>
                                                            <p>WordPress��ñ���󥹥ȡ���ˤ�������Υǡ����١����ˤϡ�WordPress������פΥ�������ɽ������ޤ��� ���������ޥ��������С���������Ѥ��Ƥ���WordPress��URL�򤴳�ǧ���������ޤ���</p>
                                                            <p><img class="img" src="../img/manual/previous/man_db_setting_18.png" alt="WordPress��URL���ǧ���륹���꡼�󥷥�å�"></p>
                                                        </aside>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">3.���Ƥ��ǧ�����ֺ������פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>���Ƥ��ǧ��������ʤ���Сֺ������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_19.png" alt="�ǡ����١�����������ľ���Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">4.��λ</h6>
                                                    <div class="box_body">
                                                        <p>��λ���̤�ɽ�������С�����ϴ�λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_20.png" alt="�ǡ����١�����������ľ��Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>

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
                                    <li><a href="#link-a">MySQL������</a>
                                        <ol>
                                            <li><a href="#link-a1">MySQL(�ǡ����١���)���ɲ�</a></li>
                                            <li><a href="#link-a2">MySQL�桼�������ɲ�</a></li>
                                            <li><a href="#link-a3">MySQL����������������</a></li>
                                            <li><a href="#link-a4">MySQL�桼�����Υѥ�����ѹ�</a></li>
                                            <li><a href="#link-a5">�ǡ����١����κ�����</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                            </ul>


                            <section class="section">
                                <div class="sectionBody">

                                    <p>���å��������С��Ǥϥǡ����١����Ķ��Ȥ���MySQL���󶡤��Ƥ���ޤ���MySQL��������ǹ����Ȥ��Ƥ��ꥪ���ץ󥽡����Υǡ����١��������ƥ�Ȥ��Ƥ������ǺǤ���ڤ��Ƥ��ꡢ����ǽ�פ�ְ������פ���ɾ������ޤ���</p>

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">MySQL������</h4>
                                        <div class="inner">
                                            <section class="section">
                                                <div class="section_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ�MySQL����פ�ꡢ��ñ�˥ǡ����١�����桼�����κ��������������������������ꡢ�Хå����åפ�Ԥ����Ȥ��Ǥ��ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_db_setting_1.png?date=2410" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                                    <p>�Ԥ�������ϰʲ��ΤȤ���Ǥ���</p>
                                                    <ul class="list list_arrow-down mb30">
                                                        <li><a href="#link-a1">MySQL(�ǡ����١���)���ɲ�</a></li>
                                                        <li><a href="#link-a2">MySQL�桼�������ɲ�</a></li>
                                                        <li><a href="#link-a3">MySQL����������������</a></li>
                                                        <li><a href="#link-a4">MySQL�桼�����Υѥ�����ѹ�</a></li>
                                                        <li><a href="#link-a5">�ǡ����١����κ�����</a></li>
                                                    </ul>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a1">MySQL(�ǡ����١���)���ɲ�</h5>
                                                        <div class="block_body">
                                                            <p>�֥ǡ����١������ɲáפ򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_2.png?date=2410" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                            <p>���Ѥ������ǡ����١���̾�����Ϥ������ɲä���ץܥ���򥯥�å����Ƥ����������ǡ����١���̾�ϡ��֤����ͤΥ����С�ID_�ǡ����١���̾�פˤʤ�ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_3.png?date=2412" alt="MySQL�ǡ����١������ɲä˥ե����������������꡼�󥷥�å�"></p>

                                                            <aside class="msg msg_notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ʸ������������ˤĤ���</h6>
                                                                <div class="msg_body">
                                                                    <p class="font14">�ǡ������١����������ˡ����Υǡ����١����ǰ���ʸ�������ɤ�����Ǥ��ޤ��������С��ץ����򥤥󥹥ȡ��뤹����ʤɤǡ�������ץȤ˹�碌��ʸ�������ɤ����ꤹ��ɬ�פ�������ˤ��Ȥ�����������</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a2">MySQL�桼�������ɲ�</h5>
                                                        <div class="block_body">

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

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a3">MySQL����������������</h5>
                                                        <div class="block_body">
                                                            <p>��MySQL�ǡ����١�������פ��顢���������ǡ����١����ؤΥ�����������ͭ�桼���������꤬�Ԥ��ޤ����֥桼��������פ򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_6.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                            <p>������������ͭ�桼����������ɽ������ޤ����ɲä�����ϡ֥桼�������ɲáפ򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_7.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                            <p>��˾����ǡ����١����ؤΥ������������ɲä������桼���������򤷡����ɲä���ץܥ���򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_8.png?date=2410" alt="MySQL�桼�����ɲä˥ե����������������꡼�󥷥�å�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a4">MySQL�桼�����Υѥ�����ѹ�</h5>
                                                        <div class="block_body">
                                                            <p>��MySQL�桼���������פ��顢MySQL�桼�����Υѥ�����ѹ����Ԥ��ޤ���</p>
                                                            <p>�ѥ���ɤ��ѹ�������MySQL�桼�����Ρ־ܺ١ץܥ���򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_9.png?date=2410" alt="�ѥ���ɤ��ѹ��˥ե����������������꡼�󥷥�å�"></p>

                                                            <p>���ܸ�β��̤ˤơ��ѹ���ο������ѥ���ɤ����Ϥ������ѹ�����ץܥ���򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_10.png?date=2410" alt="MySQL�桼�������Խ��˥ե����������������꡼�󥷥�å�"></p>

                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a5">�ǡ����١����κ�����</h5>
                                                        <div class="section_body">
                                                            <div class="serial-box mb10">
                                                                <section class="box">
                                                                    <h6 class="box_ttl">1.MySQL�����˥塼��</h6>
                                                                    <div class="box_body">
                                                                        <p>�����С��ѥͥ�˥����󤷡���MySQL����פ򥯥�å����Ƥ���������</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_1.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                                                                    </div>
                                                                </section>
                                                                <section class="box">
                                                                    <h6 class="box_ttl">2.����������ǡ����١���������</h6>
                                                                    <div class="box_body">
                                                                        <p>����������ǡ����١���̾���ǧ���ֺ���פ򥯥�å����Ƥ���������</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_18.png" alt="�ǡ����١����κ���˥ե����������������꡼�󥷥�å�"></p>
                                                                        <aside class="msg msg_notice">
                                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��WordPress������פ�ɽ������Ƥ���ǡ����١����ˤĤ���</h6>
                                                                            <p>WordPress��ñ���󥹥ȡ���ˤ�������Υǡ����١����ˤϡ�WordPress������פΥ�������ɽ������ޤ��� ���������ޥ��������С���������Ѥ��Ƥ���WordPress��URL�򤴳�ǧ���������ޤ���</p>
                                                                            <p><img class="img" src="../img/manual/man_db_setting_19.png" alt="WordPress��URL���ǧ���륹���꡼�󥷥�å�"></p>
                                                                        </aside>
                                                                    </div>
                                                                </section>
                                                                <section class="box">
                                                                    <h6 class="box_ttl">3.���򤵤줿�ǡ����١���̾���ǧ�����ֺ������פ򥯥�å�</h6>
                                                                    <div class="box_body">
                                                                        <p>���򤵤줿�ǡ����١���̾���ǧ��������ʤ���Сֺ������פ򥯥�å����Ƥ���������</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_20.png" alt="�ǡ����١�����������ľ���Υ����꡼�󥷥�å�"></p>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>
                                            <!-- /.section -->
                                        </div><!-- /inner -->
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