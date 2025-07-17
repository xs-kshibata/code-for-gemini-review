<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SSH���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥ�SSH��³��ǽ���󶡤��Ƥ��ޤ������ޥ˥奢��ǤϤ����ͤΥ����С���������Ȥ�SSH����³���뤿��μ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">SSH����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">SSH�Ȥ�</a></li>
                                <li><a href="#link-previous-b">SSH��³��ǽ�ˤĤ���</a></li>
                                <li><a href="#link-previous-c">��IP���ɥ쥹����Υ����������¤ˤĤ���</a></li>
                                <li><a href="#link-previous-d">SSH��³��ͭ������̵����</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.������塢��SSH����פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d02">2.��ON[���⤫��Υ��������Τߵ���]�פޤ��ϡ�ON[���٤ƤΥ������������]�פ����򤷡������ꤹ��ץܥ���򥯥�å�</a></li>
                                        <li><a href="#link-previous-d03">3.���괰λ</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">������ǧ���Ѹ��ڥ�������������������Ͽ</a>
                                    <ul>
                                        <li><a href="#link-previous-e01">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</a></li>
                                        <li><a href="#link-previous-e02">���Ҥ��ޤˤƺ����θ���������Ͽ������</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">SSH�Ȥ�</h4>
                                <p>
                                    SSH(Secure Shell)�Ȥϡ��ͥåȥ����𤷤ƥ����С��˥����󤷤��ꡢ�����󤷤��ޥ���ǥ��ޥ�ɤ�¹Ԥ�����ʤΰ�ĤǤ���<br>
                                    �ܵ�ǽ�����Ѥ����������ǡ����ԡ������Ȥ��ä������С���Υե�����������ե��������Υƥ������Խ���Ԥ����Ȥ���ǽ�Ǥ���<br>
                                    SSH�Ǥ���³�ξ�硢�ͥåȥ�����ή���ǡ����ϥѥ���ɾ�������ޤ�����ƤΥǡ������Ź沽����뤿�ᡢ��������˹Ԥ����Ȥ��Ǥ��ޤ���
                                </p>

                                <h4 class="section_ttl mt50" id="link-previous-b">SSH��³��ǽ�ˤĤ���</h4>
                                <ul class="ul mb0">
                                    <li>�ܵ�ǽ�����Ѥ��Ƽºݤ�����Ԥ��ˤϡ�UNIX���μ��䡢���Ѥ��륳�ޥ�ɤ˴ؤ����μ���ɬ�פǤ���</li>
                                    <li>�ܵ�ǽ�ˤ�SSH��³��Ԥ����硢�ѥ����ǧ�ڤ����ѤǤ��ޤ���</li>
                                    <li>�ܵ�ǽ�����Ѥ��������ˤϡ������С��ѥͥ�Ρ�SSH����פˤ�������ON(ͭ��)�ۤˤ���ɬ�פ�����ޤ���</li>
                                    <li>SSH����³��Ԥ��ˤϡ������ѤΥѥ�������SSH���饤����ȥ��եȤ�ɬ�פǤ���</li>
                                </ul>

                                <aside class="msg msg_caution mt30">
                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                    <div class="msg_body">
                                        ��ä�����Ԥ��ȡ����Ҥ��ޥ����С��ΰ��Υե����뤬������줿�ꡢ�����Web��ɽ�����᡼������������Ԥ��ʤ��ʤ��ǽ��������ޤ��������ѤκݤϽ�ʬ����դ��Ƥ���������
                                    </div>
                                </aside>

                                <table class="table table_use-caption mt30">
                                    <caption>SSH��������Ⱦ���</caption>
                                    <tbody>
                                    <tr>
                                        <th>�����С��ʥۥ���̾��</th>
                                        <td>
                                            �����С�ID.xsrv.jp�ʤ����ͤν���ɥᥤ���
                                            <p class="note">���ۥ���̾��sv***.xserver.jp�ˤǤ����꤬��ǽ�Ǥ���</p>
                                            <p>�㡧xsample.xsrv.jp</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>�桼����̾</th>
                                        <td>�����С�ID<br>�㡧xsample</td>
                                    </tr>
                                    <tr>
                                        <th>ǧ������</th>
                                        <td>������ǧ��<br>���ѥ����ǧ�ڤ����ѤǤ��ޤ���</td>
                                    </tr>
                                    <tr>
                                        <th>��³�ݡ���</th>
                                        <td>10022</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">��IP���ɥ쥹����Υ����������¤ˤĤ���</h4>
                                <div class="section_body">
                                    <p>
                                        �����С��ѥͥ�Ρ�SSH����פˤ�������ON[���⤫��Υ��������Τߵ���]�פˤ��뤳�Ȥǡ�
                                        ��IP���ɥ쥹����Υ������������¤Ǥ��ޤ���<br>
                                        ��IP���ɥ쥹����Υ������������¤��뤳�Ȥˤ�ꡢ
                                        �����ʥ����������Ф��륻�����ƥ��򶯲������뤳�Ȥ��Ǥ��ޤ���
                                    </p>

                                    <aside class="msg msg_caution mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">

                                            <ul class="ul mb0">
                                                <li>
                                                    �񳰤˺߽������ʤɡ���IP���ɥ쥹����Υ���������ɬ�פ����ϡ�
                                                    ��ON[���٤ƤΥ������������]�פ�����Τ�������򤪴ꤤ�������ޤ���<br>
                                                </li>
                                                <li>
                                                    AWS��Azure�ʤɤǳ������������֤���Ƥ��륵���С����饢�������򤵤���硢<br>
                                                    ��ON[���٤ƤΥ������������]�פ�����Τ�������򤪴ꤤ�������ޤ���<br>
                                                </li>
                                                <li>
                                                    ����IP���ɥ쥹����Υ��������ξ��Ǥ⡢<br>
                                                    ���˹�IP���ɥ쥹�������³�ȥ����ƥ���ǧ���졢���¤�������礬�������ޤ���<br>
                                                    ���Τ褦�ʾ��ϡ�ON[���٤ƤΥ������������]�פ�����Τ�������򤪴ꤤ�������ޤ���<br>
                                                </li>
                                            </ul>

                                        </div>
                                    </aside>

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">SSH��³��ͭ������̵����</h4>
                                <div class="section_body">

                                    <p>�����ͥ����С���������Ȥ�SSH����³�����ݤϡ�SSH��³��ͭ������ɬ�פȤʤ�ޤ���<br>
                                    �������ˤ�SSH��³��ͭ����(ON)��ԤäƤ���������<br>
                                    �ޤ���³��Ԥ�ʤ��ݤϡ�SSH��³��̵��(OFF)�ˤ��Ƥ���������</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.������塢��SSH����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SSH����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssh_1.png" alt="�����С��ѥͥ� SSH�����˥塼�򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.��ON[���⤫��Υ��������Τߵ���]�פޤ��ϡ�ON[���٤ƤΥ������������]�פ����򤷡������ꤹ��ץܥ���򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>SSH������̤�ɽ������ޤ��Τǡ���ON[���⤫��Υ��������Τߵ���]�פޤ��ϡ�ON[���٤ƤΥ������������]�פ����򤷡������ꤹ��ץܥ���򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssh_2.png" alt="��ON[���⤫��Υ��������Τߵ���]�פޤ��ϡ�ON[���٤ƤΥ������������]�פ����򤷡������ꤹ��ץܥ���򥯥�å�"></p>

                                                <p>�ܵ�ǽ�Ǥϡ�������2�Ĥι��ܤˤ�����SSH��ON�����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>

                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>ON[���⤫��Υ��������Τߵ���]</th>
                                                        <td>SSH��³��ͭ�������졢���⤫��Υ��������Τߵ��Ĥ���ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ON[���٤ƤΥ������������] ����侩</th>
                                                        <td>SSH��³��ͭ�������졢���٤ƤΥ������������Ĥ���ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.���괰λ</h6>
                                            <div class="box_body">
                                                <p>���������³��ͭ����(ON)����ϴ�λ�Ǥ���</p>
                                                <p>̵����������ϡ���OFF�פ����򤷡������ꤹ��ץܥ���򥯥�å����Ƥ���������<br>
                                                    �־��֡פ���OFF�ۤˤʤ�С���³��̵�����ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">������ǧ���Ѹ��ڥ�������������������Ͽ</h4>
                                <div class="section_body">

                                    <p class="mb0">���å��������С���SSH��³�Ǥϡָ�����ǧ�ڡפˤΤ��б����Ƥ��ޤ���</p>
                                    <p class="note">���ѥ����ǧ�ڤˤ��б����Ƥ��ޤ���</p>
                                    <p class="mb0">���Τ��ᡢSSH����³����٤ˤϥ����С��˸���������Ͽ��Ԥ�ɬ�פ�����ޤ���<br>
                                    �����ͤˤ������θ���������Ͽ���Ƥ���������ˡ�ȡ������С���Ǹ�����ǧ���Ѹ��ڥ�����������̩�����������ɤ��Ƥ���������ˡ������ޤ��Τǡ������򤴻��Ȥξ塢�����ޤ�����Ͽ��ԤäƤ���������</p>
                                    <p class="note">����Ͽ���Ԥ���������ϡ�OpenSSH�����פΤߤǤ���</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-e01">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</h5>
                                        <div class="block_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1.������塢�ָ�����ǧ���Ѹ��ڥ��������פ�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SSH����פ���ָ�����ǧ���Ѹ��ڥ��������פؿʤߤޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_4.png" alt="������ǧ���Ѹ��ڥ������� ���ϲ���"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.�֥ѥ��ե졼���פ����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>������ǧ��������̤�ɽ������ޤ�����֥ѥ��ե졼���פ����Ϥ�Ԥ����ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_5.png" alt="��ǧ���̤ؿʤ�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.����������פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��ǧ���̤�ɽ������ޤ��Τǡ���������ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_6.png" alt="��������"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.��̩����PC���Ǥ�դξ�����¸</h6>
                                                    <div class="box_body">
                                                        <p>�ָ�����ǧ���Ѥθ��ڥ�����������¹Ԥ��ޤ����ײ��̤�ɽ�����졢��ưŪ����̩���Υ�������ɤ��Ϥޤ�ޤ��Τǡ�PC���Ǥ�դξ�����¸���ޤ���<br>
                                                        �ʥե�����̾��[�����С�ID].key��</p>
                                                        <p>��¸���줿��̩�������Ѥ���SSH���饤����Ȥ������³��ԤäƤ���������(�㡧<a href="man_server_ssh_connect_tera.php">Tera Term�Ǥ���³��ˡ</a>)</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_7.png" alt="������ǧ���Ѥθ��ڥ�������λ����"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-e02">���Ҥ��ޤˤƺ����θ���������Ͽ������</h5>
                                        <div class="block_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1.������塢�ָ�������Ͽ�������פ�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SSH����פ���ָ�������Ͽ�������פؿʤߤޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_8.png" alt="���������ϲ���"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.�����������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��������Ͽ���������̤�ɽ������ޤ�����ָ���������ˤ�������θ����������Ϥ����ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_9.png" alt="�ֳ�ǧ���̤ؿʤ�פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.����Ͽ����פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��ǧ���̤�ɽ������ޤ��Τǡ���Ͽ����ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_10.png" alt="����Ͽ����פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.��Ͽ��λ</h6>
                                                    <div class="box_body">
                                                        <p>�ָ���������Ͽ��λ���ޤ������פ�ɽ������ޤ����顢��Ͽ��λ�Ǥ���<br>
                                                        SSH���饤����Ȥ������³��ԤäƤ���������(�㡧<a href="man_server_ssh_connect_tera.php">Tera Term�Ǥ���³��ˡ</a>)</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_11.png" alt="����������Ͽ��λ����"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>��Ϣ��<a href="man_server_ssh_connect_tera.php">SSH���եȤ�����(Tera Term)</a><i class="ico ico_chevron-right"></i></p>
                                    </div>

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
                                    <li><a href="#link-a">SSH��³��ǽ�ˤĤ���</a></li>
                                    <li><a href="#link-b">��IP���ɥ쥹����Υ����������¤ˤĤ���</a></li>
                                    <li><a href="#link-c">SSH��³��ͭ������̵����</a>
                                        <ol>
                                            <li><a href="#link-c01">1.������塢��SSH����פ򥯥�å�</a></li>
                                            <li><a href="#link-c02">2.�ѹ��ܥ���򥯥�å����ơ�ON�פˤ���</a></li>
                                            <li><a href="#link-c03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�񳰥����������¤�̵������ͭ����</a>
                                        <ul>
                                            <li><a href="#link-d01">������塢��SSH����פ򥯥�å�</a></li>
                                            <li><a href="#link-d02">�ѹ��ܥ���򥯥�å����ơ�OFF�פˤ���</a></li>
                                            <li><a href="#link-d03">���괰λ</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#link-e">������ǧ���Ѹ��ڥ�������������������Ͽ</a>
                                        <ul>
                                            <li><a href="#link-e01">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</a></li>
                                            <li><a href="#link-e02">���Ҥ��ޤˤƺ����θ���������Ͽ������</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">SSH��³��ǽ�ˤĤ���</h4>
                                    <p>
                                        SSH(Secure Shell)�Ȥϡ��ͥåȥ����𤷤ƥ����С��˥����󤷤��ꡢ�����󤷤��ޥ���ǥ��ޥ�ɤ�¹Ԥ�����ʤΰ�ĤǤ���<br>
                                        �ܵ�ǽ�����Ѥ����������ǡ����ԡ������Ȥ��ä������С���Υե�����������ե��������Υƥ������Խ���Ԥ����Ȥ���ǽ�Ǥ���<br>
                                        SSH�Ǥ���³�ξ�硢�ͥåȥ�����ή���ǡ����ϥѥ���ɾ�������ޤ�����ƤΥǡ������Ź沽����뤿�ᡢ��������˹Ԥ����Ȥ��Ǥ��ޤ���
                                    </p>
                                    <aside class="msg msg_caution mt30">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>�ܵ�ǽ�����Ѥ��Ƽºݤ�����Ԥ��ˤϡ�UNIX���μ��䡢���Ѥ��륳�ޥ�ɤ˴ؤ����μ���ɬ�פǤ���</li>
                                                <li>�ܵ�ǽ�ˤ�SSH��³��Ԥ����硢�ѥ����ǧ�ڤ����ѤǤ��ޤ���</li>
                                                <li>�ܵ�ǽ�����Ѥ��������ˤϡ������С��ѥͥ�Ρ�SSH����פˤ�������ON(ͭ��)�ۤˤ���ɬ�פ�����ޤ���</li>
                                                <li>SSH����³��Ԥ��ˤϡ������ѤΥѥ�������SSH���饤����ȥ��եȤ�ɬ�פǤ���</li>
                                                <li>��ä�����Ԥ��ȡ����Ҥ��ޥ����С��ΰ��Υե�����κ�����Ԥ�줿�ꡢ�����Web��ɽ�����᡼������������Ԥ��ʤ��ʤ��ǽ��������ޤ��Τǡ������ѤκݤϽ�ʬ����դ��Ƥ���������</li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <table class="table table_use-caption mt30">
                                        <caption>SSH��������Ⱦ���</caption>
                                        <tbody>
                                        <tr>
                                            <th>�����С��ʥۥ���̾��</th>
                                            <td>
                                                �����С�ID.xsrv.jp�ʤ����ͤν���ɥᥤ���
                                                <p class="note">���ۥ���̾��sv***.xserver.jp�ˤǤ����꤬��ǽ�Ǥ���</p>
                                                <p>�㡧xsample.xsrv.jp</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>�桼����̾</th>
                                            <td>�����С�ID<br>�㡧xsample</td>
                                        </tr>
                                        <tr>
                                            <th>ǧ������</th>
                                            <td>������ǧ��<br>���ѥ����ǧ�ڤ����ѤǤ��ޤ���</td>
                                        </tr>
                                        <tr>
                                            <th>��³�ݡ���</th>
                                            <td>10022</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <h4 id="link-b" class="section_ttl">��IP���ɥ쥹����Υ����������¤ˤĤ���</h4>
                                <div class="section_body">
                                    <p>
                                        ��SSH����פι񳰥����������¤�ͭ����(ON)�ˤ��뤳�Ȥǡ�
                                        ��IP���ɥ쥹����Υ������������¤Ǥ��ޤ���<br>
                                        ��IP���ɥ쥹����Υ������������¤��뤳�Ȥˤ�ꡢ
                                        �����ʥ����������Ф��륻�����ƥ��򶯲������뤳�Ȥ��Ǥ��ޤ���
                                    </p>
                                    <aside class="msg msg_caution mt30">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>
                                                    �񳰤˺߽������ʤɡ���IP���ɥ쥹����Υ���������ɬ�פ����ϡ�
                                                    �񳰥����������¤������̵��(OFF)�ˤ��Ƥ���������<br>
                                                </li>
                                                <li>
                                                    AWS��Azure�ʤɤǳ������������֤���Ƥ��륵���С����饢�������򤵤���硢<br>
                                                    �񳰥����������¤������̵��(OFF)�ˤ��Ƥ���������<br>
                                                </li>
                                                <li>
                                                    ����IP���ɥ쥹����Υ��������ξ��Ǥ⡢<br>
                                                    ���˹�IP���ɥ쥹�������³�ȥ����ƥ���ǧ���졢���¤�������礬�������ޤ���<br>
                                                    ���Τ褦�ʾ��ϡ��񳰥����������¤������̵��(OFF)�ˤ��Ƥ���������<br>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">SSH��³��ͭ������̵����</h4>

                                    <p>
                                        �����ͥ����С���������Ȥ�SSH����³�����ݤϡ�SSH��³��ͭ������ɬ�פȤʤ�ޤ���<br>
                                        �������ˤ�SSH��³��ͭ����(ON)��ԤäƤ���������<br>
                                        �ޤ���³��Ԥ�ʤ��ݤϡ�SSH��³��̵��(OFF)�ˤ��Ƥ���������
                                    </p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c01">1. ������塢��SSH����פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SSH����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_1.png?date=2410" alt="�����С��ѥͥ� SSH�����˥塼�򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c02">2.�ѹ��ܥ���򥯥�å����ơ�ON�פˤ���</h5>
                                            <div class="box_body">
                                                <p>SSH������̤�ɽ������ޤ��Τǡ��ѹ��ܥ���򥯥�å����ơ�ON�פˤ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_2.png?date=2410" alt="�ѹ��ܥ���򥯥�å����ơ�ON�פˤ���"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c03">3. ���괰λ</h5>
                                            <div class="box_body">
                                                <p>���������³��ͭ��������ϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_3.png?date=2410" alt="SSH�����ON��"></p>
                                                <p>̵����������ϡ������ѹ��ܥ���򥯥�å����Ƥ���������<br>
                                                    �����������OFF�ۤˤʤ�С���³��̵�����ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-d" class="section_ttl">�񳰥����������¤�̵������ͭ����</h4>

                                    <p>
                                        �񳰥����������¤�̵������ͭ�������ڤ��ؤ��ϡ�SSH��³��ͭ����(ON)���Ԥ��Ƥ���ɬ�פ�����ޤ���<br>
                                    </p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d01">1. ������塢��SSH����פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SSH����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_1.png?date=2410" alt="�����С��ѥͥ� SSH�����˥塼�򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d02">2.�ѹ��ܥ���򥯥�å����ơ�OFF�פˤ���</h5>
                                            <div class="box_body">
                                                <p>�񳰥����������¤����ꤹ����̤�ɽ������ޤ��Τǡ��ѹ��ܥ���򥯥�å����ơ�OFF�פˤ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_11.png?date=2410" alt="�ѹ��ܥ���򥯥�å����ơ�OFF�פˤ���"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d03">3. ���괰λ</h5>
                                            <div class="box_body">
                                                <p>������ǹ񳰥����������¤�̵��������ϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_12.png?date=2410" alt="�񳰥����������¡�OFF��"></p>
                                                <p>ͭ����������ϡ������ѹ��ܥ���򥯥�å����Ƥ���������<br>
                                                    �����������ON�ۤˤʤ�С��񳰥����������¤�ͭ�����ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-e" class="section_ttl">������ǧ���Ѹ��ڥ�������������������Ͽ</h4>

                                    <p class="mb0">���å��������С���SSH��³�Ǥϡָ�����ǧ�ڡפˤΤ��б����Ƥ��ޤ���</p>
                                    <p class="note">���ѥ����ǧ�ڤˤ��б����Ƥ��ޤ���</p>
                                    <p class="mb0">���Τ��ᡢSSH����³����٤ˤϥ����С��˸���������Ͽ��Ԥ�ɬ�פ�����ޤ���<br>
                                        �����ͤˤ������θ���������Ͽ���Ƥ���������ˡ�ȡ������С���Ǹ�����ǧ���Ѹ��ڥ�����������̩�����������ɤ��Ƥ���������ˡ������ޤ��Τǡ������򤴻��Ȥξ塢�����ޤ�����Ͽ��ԤäƤ���������</p>
                                    <p class="note">����Ͽ���Ԥ���������ϡ�OpenSSH�����פΤߤǤ���</p>
                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#keygen">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</a></li>
                                        <li><a href="#keyadd">���Ҥ��ޤˤƺ����θ���������Ͽ������</a></li>
                                    </ul>

                                    <section id="keygen" class="block">
                                        <h5 class="block_ttl" id="link-e01">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</h5>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1. ������塢SSH������̤�ɽ����</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ�������SSH����פ򥯥�å�����SSH������̤�ɽ�����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_4.png?date=2410" alt="�����С��ѥͥ� SSH����"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2. ����Ͽ������̩�����������ɤ���פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>����������Ͽ��������ɽ������ޤ����顢����Ͽ������̩�����������ɤ���ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_5.png?date=2410" alt="��Ͽ������̩�����������ɤ���"></p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ѥ��ե졼�������ꤹ����</dt>
                                                            <dd>
                                                                <p>
                                                                    ��̩���˥ѥ��ե졼�������ꤹ����ϡ��֥ѥ��ե졼�������ꤹ��פ����򤷡��ѥ��ե졼�������Ϥ��Ƥ���������
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_server_ssh_6.png?date=2410" alt="�ѥ��ե졼�������ꤹ����"></p>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3. ��̩����PC���Ǥ�դξ�����¸</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            �ָ���������Ͽ���ޤ������ײ��̤�ɽ�����졢��ưŪ����̩���Υ�������ɤ��Ϥޤ�ޤ��Τǡ�PC���Ǥ�դξ�����¸���ޤ���<br>
                                                            �ʥե�����̾��[�����С�ID].key��
                                                        </p>
                                                        <p>��¸���줿��̩�������Ѥ���SSH���饤����Ȥ������³��ԤäƤ���������(�㡧<a href="man_server_ssh_connect_tera.php">Tera Term�Ǥ���³��ˡ</a>)</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_7.png?date=2410" alt="����������Ͽ���ޤ�������"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section id="keyadd" class="block">
                                        <h5 class="block_ttl" id="link-e02">���Ҥ��ޤˤƺ����θ���������Ͽ������</h5>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1. ������塢�ּ�ư�ˤ����Ͽ�������פ�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ�������SSH����פ򥯥�å�����SSH������̤�ɽ�����ޤ���<br>
                                                            SSH������̲����Ρּ�ư�ˤ����Ͽ�������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_8.png?date=2410" alt="�ּ�ư�ˤ����Ͽ�������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2. �����������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��������Ͽ���������̤�ɽ������ޤ�����ָ���������ˤ�������θ����������Ϥ�������Ͽ����ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_9.png?date=2410" alt="����Ͽ����ץܥ���򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3. ��Ͽ��λ</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            �ָ���������Ͽ���ޤ������פ�ɽ������ޤ����顢��Ͽ��λ�Ǥ���<br>
                                                            SSH���饤����Ȥ������³��ԤäƤ���������(�㡧<a href="man_server_ssh_connect_tera.php">Tera Term�Ǥ���³��ˡ</a>)
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_10.png?date=2410" alt="����������Ͽ��λ����"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <div class="border border_gray mt-24">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>��Ϣ��<a href="man_server_ssh_connect_tera.php">SSH���եȤ�����(Tera Term)</a></p>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div><!-- ���ѥͥ뽪���-->
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