<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼��ե��������ּ�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä��䤤��碌�ե�����ʤɤ����Ѳ�ǽ�ʡ֥᡼��ե�����פ����֤�����Ǥ������å��������С��Ǥϴ����ġ��뤫���󥯥�å��ǥ᡼��ե���������֤��뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼��ե�����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">�᡼��ե����೵��</a></li>
                                <li><a href="#link-previous-b">�᡼��ե�����Υ��󥹥ȡ���</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.�����С��ѥͥ� ��CGI�ġ���פ����򤷤ޤ���</a></li>
                                        <li><a href="#link-previous-b02">2.�֥᡼��ե��������Ρ��ְ��������󥹥ȡ���פ򥯥�å����Ƥ���������</a></li>
                                        <li><a href="#link-previous-b03">3.�����Υ�˥塼����֥᡼��ե����।�󥹥ȡ���פ򥯥�å����Ƥ���������</a></li>
                                        <li><a href="#link-previous-b04">4.���ϲ��̤Ǥϰʲ��ι��ܤ����Ϥ��ޤ���</a></li>
                                        <li><a href="#link-previous-b05">5.���ִ�λ</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-c">�᡼��ե�����δ�������</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.���������URL�פΥ��ɥ쥹�˥�������</a></li>
                                        <li><a href="#link-previous-c02">2.�ե�����δ�������</a></li>
                                        <li><a href="#link-previous-c03">3.�᡼��ե�������ܤ�����</a></li>
                                        <li><a href="#link-previous-c04">4.�������¸����</a></li>
                                        <li><a href="#link-previous-c05">5.����</a></li>
                                        <li><a href="#link-previous-c06">6.���괰λ</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">�᡼��ե�����Υǥ���������</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.�����������</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">�᡼��ե�����μ�ư�ֿ�����</a>
                                    <ol>
                                        <li><a href="#link-previous-e01">1.��ư�ֿ���̵ͭ</a></li>
                                        <li><a href="#link-previous-e02">2.�������¸����</a></li>
                                        <li><a href="#link-previous-e03">3.����</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-f">�᡼��ե�����ؤΥ������</a>
                                    <ul>
                                        <li><a href="#link-previous-f01">�ȼ�SSL������</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-g">�᡼��ե�����Υ��åץ��졼��</a>
                                    <ul>
                                        <li><a href="#link-previous-g01">1.�����С��ѥͥ� ��CGI�ġ���פ����򤷤ޤ���</a></li>
                                        <li><a href="#link-previous-g02">2.�֥᡼��ե��������Ρ��ְ��������󥹥ȡ���פ򥯥�å����Ƥ���������</a></li>
                                        <li><a href="#link-previous-g03">3.�оݤȤʤ�᡼��ե�����Ρ֥С���������ˤ���֥��åץǡ��ȡפ򥯥�å����Ƥ���������</a></li>
                                        <li><a href="#link-previous-g04">4.�֥��åץ��졼�ɤ���פ򥯥�å����Ƥ���������</a></li>
                                        <li><a href="#link-previous-g02">5.���åץ��졼�ɴ�λ</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼��ե����೵��</h4>
                                <div class="section_body">
                                    <p>�����С��ѥͥ�Ρ�CGI�ġ���ץ�˥塼���顢���䤤��碌�μ��դʤɤˤ����Ѳ�ǽ�ʥ᡼��ե�������󥯥�å������֤��뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p>���ָ塢���Ѥ�������̤ǥ᡼��ե�����γƼ�������ѹ����뤳�Ȥ���ǽ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_1.png" alt="���å��������С����᡼��ե�����"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">�᡼��ե�����Υ��󥹥ȡ���</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.�����С��ѥͥ� ��CGI�ġ���פ����򤷤ޤ���</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_2.png" alt="�����С��ѥͥ���CGI�ġ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.�֥᡼��ե��������Ρ��ְ��������󥹥ȡ���פ򥯥�å����Ƥ���������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_3.png" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.�����Υ�˥塼����֥᡼��ե����।�󥹥ȡ���פ򥯥�å����Ƥ���������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_4.png" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.���ϲ��̤Ǥϰʲ��ι��ܤ����Ϥ��ޤ���</h6>
                                            <div class="box_body">

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>�᡼��ե�����URL</th>
                                                            <td>���󥹥ȡ�����Υե����̾��Ǥ�դ����Ϥ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����ġ��������ID�ʥ桼����ID��</th>
                                                            <td>�᡼��ե������������̤˥����󤹤�桼����̾�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����ġ���ѥ����</th>
                                                            <td>�᡼��ե������������̤˥����󤹤�ݤΥѥ���ɤǤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����᡼�륢�ɥ쥹</th>
                                                            <td>���䤤��碌�����Ƥ��������᡼�륢�ɥ쥹�Ǥ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_5.png" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b05">5.���ִ�λ</h6>
                                            <div class="box_body">
                                                <p>�ʾ�ǥ᡼��ե���������֤���λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_6.png" alt="�᡼��ե��������ִ�λ"></p>
                                                <p>���ִ�λ���̤�ɽ������Ƥ���֥᡼��ե�����URL�פΥ��ɥ쥹�˥�����������ȡ����ߤΥ᡼��ե�������ǧ���뤳�Ȥ�����ޤ���<br>
                                                �᡼��ե������������Խ������硢���������URL�פΥ��ɥ쥹�إ����������Ƥ���������</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�ȼ�SSL������</dt>
                                                    <dd>
                                                        <p>̵���ȼ�SSL�����ꤤ�����������⤷���ϥ��ץ�����ȼ�SSL�Τ������ԤäƤ����������Ȥǡ��ȼ�SSL�����Ѥ�����������̡פؤΥ����󤬲�ǽ�Ǥ���<br>
                                                        ���ꡦ���������ߤ���ˡ�Ϥ��줾�첼���Υڡ�����������������</p>
                                                        <ul class="list list_arrow-right">
                                                            <li><a href="man_server_ssl.php">̵���ȼ�SSL��������ˡ</a></li>
                                                            <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ�����������ˡ</a></li>
                                                        </ul>
                                                        <p>�ȼ�SSL�����Ѳ�ǽ�ˤʤ�ޤ����顢�����˥����������뤳�Ȥǡ���������̡פ˥����󤹤뤳�Ȥ�����ޤ���</p>
                                                        <div class="border border_gray">
                                                            <em class="font-bold">https://�ɥᥤ��̾/script/mailform/�ե����̾/admin/</em>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">�᡼��ե�����δ�������</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.���������URL�פΥ��ɥ쥹�˥�������</h6>
                                            <div class="box_body">
                                                <p>�᡼��ե��������ִ�λ���̤˵��ܤΤ�����������URL�פΥ��ɥ쥹�˥����������Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.�ե�����δ�������</h6>
                                            <div class="box_body">
                                                <p>������̤�ɽ������ޤ����顢�ޤ��ϥե�����Ρִ�������פ�Ԥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_7.png" alt="�᡼��ե�����δ����������"></p>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>�ڡ����Υ����ȥ�</th>
                                                            <td>�᡼��ե�����ڡ�����ɽ������륿���ȥ�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼��ե������̾��</th>
                                                            <td>�᡼��ե�������ɽ������븫�Ф��Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�����Ȥؤ����URL</th>
                                                            <td>�֥����Ȥ����ץ�󥯤򥯥�å������ݤΡ�������URL�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>��������᡼�륢�ɥ쥹</th>
                                                            <td>�᡼��ե����फ��Τ��䤤��碌���Ƥ��������᡼�륢�ɥ쥹�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>��������᡼��η�̾</th>
                                                            <td>���䤤��碌���Ƥ�ܤ����᡼��η�̾�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼���Ϣ³���������¤������</th>
                                                            <td>�᡼���Ϣ³������Ԥ��ʤ��褦�ˤ�����֤���ꤷ�ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>���줾�����ϤǤ����顢���ˡ֥᡼��ե�������ܤ�����פؤȿʤߤޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.�᡼��ե�������ܤ�����</h6>
                                            <div class="box_body">
                                                <p>³���ơ��ڡ����򲼤ؤȿʤ��ȡ��֥᡼��ե�������ܤ�����פ�Ԥ����Ȥ�����ޤ���<br>
                                                �����Ǥϡ��ե�����˻��Ѥ�����ܤȡ������κ٤������꤬��ǽ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_8.png" alt="�᡼��ե�������ܤ�����"></p>
                                                <p>���Ѥ�����ܤϡ��ڡ�����¦�ΰ�������<em class="font-bold">�ɲ�</em>�פ򥯥�å������ɲä��Ƥ���������<br>
                                                �ޤ������Ѥ��ʤ����ܤϡ��ڡ�����¦�ΰ�������<em class="font-bold">����</em>�פ򥯥�å����Ƥ���������</p>
                                                <p>���Ѥ�����ܤˤϡ����줾�첼���Τ褦�ʹ��ܤ������ǽ�Ǥ���</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�¤��ؤ�</dt>
                                                    <dd>
                                                    �ե�������ܤ�ɽ�����������ѹ����ޤ���<br>
                                                    �ѹ���Ԥ����ܤΡ֢��פ⤷���ϡ֢��פǡ�ɽ������¤��ؤ��뤳�Ȥ���ǽ�Ǥ���
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>ɽ��̾</dt>
                                                    <dd>�ºݤ˥ե�����Ȥ���ɽ�������ݤΡ�����̾�����ꤹ�뤳�Ȥ���ǽ�Ǥ���
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>����ɬ��</dt>
                                                    <dd>�����å����뤳�Ȥǡ�����ɬ�ܤι��ܤȤ��뤳�Ȥ���ǽ�Ǥ���
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>���ץ����</dt>
                                                    <dd>���ܤˤ�äƤϡ����ץ��������꤬��ǽ�ʤ�Τ�����ޤ���<br>
                                                    �嵭�ʳ������Ū��������ܤϡ������餫�����꤬��ǽ�Ǥ���
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.�������¸����</h6>
                                            <div class="box_body">
                                                <p>�ե�����˻��Ѥ�����ܤ����꤬��λ�����顢�ڡ��������Ρ��������¸����פ򥯥�å����Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c05">5.����</h6>
                                            <div class="box_body">
                                                <p>���줾�����ꤷ������ɽ������ޤ��Τǡ�����ǧ�ξ塢���̵꤬����Сֳ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_9.png" alt="�ץ�ӥ塼ɽ��"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c06">6.���괰λ</h6>
                                            <div class="box_body">
                                                <p>�ʾ塢�᡼��ե���������꤬��λ�Ǥ���<br>
                                                �᡼��ե����ब���֤���Ƥ��륢�ɥ쥹�˥����������ơ����꤬ȿ�Ǥ���Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                <p class="note">��������ѹ����������ϡ����٤Ǥ⤳��������̤����ѹ���Ԥ����Ȥ��Ǥ��ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-d" class="section_ttl">�᡼��ե�����Υǥ���������</h4>
                                <div class="section_body">

                                    <p>�������ΤޤޤǤ⤪�Ȥ������������Ȥϲ�ǽ�Ǥ����������Ȥ����Ӥ˹�碌�ơ������ߤΥǥ���������ꤹ�뤳�Ȥ�����ޤ���<br>
                                    �����Ԥ��ݤϡ��᡼��ե������������̤ξ�����˥塼���֥ǥ����������פ򥯥�å����Ƥ���������</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.�����������</h6>
                                            <div class="box_body">
                                                <p>������̤Ǥϡ��ޤ��᡼��ե�����Ρ֥�����פ����򤷤ޤ���<br>
                                                ��<em class="font-bold">�귿������</em>�פȡ�<em class="font-bold">�������</em>�פ�2�������򤬲�ǽ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_10.png" alt="�ե�����ǥ������ѥ����������"></p>
                                                <p>���򤷤�������˱����ơ��ǥ����������ܤ��ޤ���</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�귿������ξ��</dt>
                                                    <dd>
                                                        <p>���å��������С��Ǥν������Υǥ�������Ѥ��ơ��ѡ�����Υ��顼���å������ʤɡ��ʰ�Ū�ʥǥ����������ܤ����Ȥ�����ޤ���<br>
                                                        ��ñ��Ƴ����Ԥ��������ʤɤˤ�������Ǥ���</p>
                                                        <p class="font-bold">�ޤ��ϡ��֥�����������פ�Ԥ��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_11.png" alt="�ե����ॵ����������"></p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">������������</em><br>
                                                            �᡼��ե�����β����򡢥ԥ�����(px)ñ�̤����ꤷ�ޤ���
                                                        </div>
                                                        <p>³���ơ��ƥѡ��ĤΥ��顼�����ꤷ�ޤ���<br>
                                                        ��<em class="font-bold">������</em>�פ������򤹤�д�ñ����������ޤ�������RGB���顼������(16�ʿ�)�פ����Ϥ��뤳�ȤǤ���꤬��ǽ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_12.png" alt="�ե�����ƽ�Υ��顼����"></p>
                                                        <p>�����ǽ�ʹ��ܤϲ������̤�Ǥ���</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w20per w30per-s">�����ȥ�</th>
                                                                    <td>�ե�����Υ����ȥ�(���Ф�)��ʬ�Υ��顼�����ꤷ�ޤ���<br>
                                                                        �֤���礻�ե�����פȵ��ܤ���Ƥ�����ʬ��ʸ��������տ魯�����Υ��顼�Ǥ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>����ʸ</th>
                                                                    <td>�����ȥ�β��˵��ܤ���롢����ʸ��ʸ���������ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�طʿ�</th>
                                                                    <td>�������Τ��طʿ������ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>����</th>
                                                                    <td>�ե�������������ɽ�˻��Ѥ��������ο������ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�����ط�</th>
                                                                    <td>�ե������������ι��ܸ��Ф���ʬ�˻��Ѥ����طʿ������ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>����ʸ��</th>
                                                                    <td>�ե������������ι��ܤ�ɽ������ʸ���������ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���顼ɽ��</th>
                                                                    <td>���顼��ɽ�����줿�ݤ�ʸ���������ꤷ�ޤ���</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>�ޤ����᡼��ե�����γƲ��̤ˤ����ơ�ɽ�������ʸ�Ϥ������Ԥ����Ȥ�����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_13.png" alt="ɽ�������ʸ�Ϥ�����"></p>
                                                        <p>����Ǥ���Τϡ�������3���̤�ɽ�������ʸ�ϤǤ���</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w30per-s">���ϲ���</th>
                                                                    <td>�᡼��ե���������ϲ��̤ˤ�����ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>��ǧ����</th>
                                                                    <td>�������Ƥγ�ǧ��Ԥ����̤�ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>��λ����</th>
                                                                    <td>�᡼��ե����फ�����������λ�����ݤ�ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>�����Ȥ�����ä��顢�ڡ��������ˤ�����������¸����פ򥯥�å����Ƥ���������<br>
                                                        ���Ƥ��ǧ�����塢����ܥ���򥯥�å����뤳�Ȥǥǥ�����ȿ�Ǥ���ޤ���</p>
                                                    </dd>
                                                </dl>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>�������</dt>
                                                    <dd>
                                                        <p>HTML�ƥ�ץ졼�Ȥ䥹�����륷���Ȥ�ľ���Խ�������ͳ���ߤ˥ǥ�������ѹ����뤳�Ȥ�����ޤ���<br>
                                                        ������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>
                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                            <div class="msg_body">
                                                                <p>�Խ����Ƥˤ�äƤϡ��ե������ư��ʤɤ˱ƶ���ڤܤ����Ȥ�����ޤ��Τǡ���갷���ˤϤ���դ���������</p>
                                                            </div>
                                                        </aside>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_14.png" alt="��������������"></p>
                                                        <p>�Խ����Ԥ���ս�ϲ������̤�Ǥ���</p>
                                                        <ul class="ul">
                                                            <li>���ϲ��̥ƥ�ץ졼��(HTML)</li>
                                                            <li>��ǧ���̥ƥ�ץ졼��(HTML)</li>
                                                            <li>��λ���̥ƥ�ץ졼��(HTML)</li>
                                                            <li>�������륷����(CSS)</li>
                                                        </ul>
                                                        <p>�Խ����̤α�¦�ˤ���ܥ���Ǥϲ����Τ褦�����Ԥ��ޤ���</p>
                                                        <ul class="ul">
                                                            <li>��¸���� �� ���ߤξ��֤���¸���ޤ���</li>
                                                            <li>�ꥻ�å� �� ������¸���������Ǥξ��֤ޤ��ᤷ�ޤ���</li>
                                                            <li>�ץ�ӥ塼 �� ���ߤξ��֤ǤΥե�������ǧ���뤳�Ȥ�����ޤ���</li>
                                                        </ul>
                                                        <p>���줾����¸��Ԥä������ǡ��ºݤΥե�������Խ���ȿ�Ǥ���ޤ���</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">�᡼��ե�����μ�ư�ֿ�����</h4>
                                <div class="section_body">
                                    <p>���䤤��碌���Ф��ƥ᡼��μ�ư�ֿ������ꤹ�뤳�Ȥ�����ޤ���<br>
                                    �����Ԥ��ݤϡ��᡼��ե������������̤ξ�����˥塼���ּ�ư�ֿ��᡼�������פ򥯥�å����Ƥ���������</p>
                                    <p>���᡼��μ�ư�ֿ�����Ѥ���ˤϡ��ե�����ˡ֤�Ϣ����᡼�륢�ɥ쥹�פι��ܤ����ꤹ��ɬ�פ�����ޤ����֤�Ϣ����᡼�륢�ɥ쥹�פ�̤����ξ��ϡ���ư�ֿ��᡼�����������ޤ���</p>
                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.��ư�ֿ���̵ͭ</h6>
                                            <div class="box_body">
                                                <p>������̤Ǥϡ��ޤ��᡼��μ�ư�ֿ���Ԥ��������򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_15.png" alt="��ư�ֿ��᡼�������"></p>
                                                <p>���Ѥ�����ϡ����ι��ܤ����Ϥ��ޤ���</p>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>�᡼��η�̾</th>
                                                            <td>��ư�ֿ���Ԥ��᡼��η�̾�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼�����ʸ</th>
                                                            <td>��ư�ֿ���Ԥ��᡼�����ʸ�Ǥ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>���пͤΥ��ɥ쥹</th>
                                                            <td>��ư�ֿ���Ԥ��᡼��κ��п�(from)�Υ᡼�륢�ɥ쥹�Ǥ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.�������¸����</h6>
                                            <div class="box_body">
                                                <p>�ե�����˻��Ѥ�����ܤ����꤬��λ�����顢�ڡ��������Ρ��������¸����פ򥯥�å����Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.����</h6>
                                            <div class="box_body">
                                                <p>���줾�����ꤷ������ɽ������ޤ��Τǡ�����ǧ�ξ塢���̵꤬����Сֳ���פ򥯥�å����Ƥ���������</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <p>�ʾ塢�᡼��μ�ư�ֿ����꤬��λ�Ǥ���</p>

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-f" class="section_ttl">�᡼��ե�����ؤΥ������</h4>
                                <div class="section_body">

                                    <p>�᡼��ե�����ξ�����˥塼����<em class="font-bold">�����Ѥ�HTML����</em>�פ򥯥�å����Ƥ���������<br>
                                    HTML�ڡ���������֤��뤿��Ρ������Τ褦�ʥ����ɤ�ɽ������ޤ��Τǡ�����ǧ����������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_16.png" alt="������HTML������"></p>
                                    <p>�ƥ����ȥ��ꥢ��ˤ��륳���ɤ򥳥ԡ����������ͤΥ����Ⱦ��ɽ���������ս��Ž���դ��Ƥ���������<br>
                                    ɽ�����줿��󥯤򥯥�å����뤳�Ȥǡ����֤����᡼��ե�����ؤȥ����������뤳�Ȥ�����ޤ���</p>
                                    <section class="block">
                                        <h3 class="block_ttl" id="link-previous-f01">�ȼ�SSL������</h3>
                                        <div class="block_body">
                                            <p>̵���ȼ�SSL�����ꤤ�����������⤷���ϥ��ץ�����ȼ�SSL�Τ������ԤäƤ����������Ȥǡ��ȼ�SSL����Ѥ����֥᡼��ե�����פ����Ѥ���ǽ�Ǥ���<br>
                                            ���ꡦ���������ߤ���ˡ�Ϥ��줾�첼���Υڡ�����������������</p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_ssl.php">̵���ȼ�SSL��������ˡ</a></li>
                                                <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ�����������ˡ</a></li>
                                            </ul>
                                            <p>�ȼ�SSL�����Ѳ�ǽ�ˤʤ�ޤ����顢�����Τ褦��URL�ؤΥ�󥯤򤪵��ͤΥ����Ⱦ���ɲä��Ƥ���������</p>
                                            <div class="border border_gray">
                                                <em class="font-bold">https://�ɥᥤ��̾/script/mailform/�ե����̾/</em>
                                            </div>
                                        </div>
                                    </section>


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-g" class="section_ttl">�᡼��ե�����Υ��åץ��졼��</h4>
                                <div class="section_body">
                                    <p>�Ť��С������򤪻Ȥ������ϡ��������С�����󤬥�꡼�����줿�ݤ˥᡼��ե�����򥢥åץ��졼�ɤ��뤳�Ȥ��Ǥ��ޤ���</p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���åץ��졼�ɤ�Ԥ��������</h6>
                                        <div class="msg_body">
                                            <p>ͽ����������ˤ�äƥǡ������ü������ǽ��������ޤ���ɬ�������˥Хå����åפ�ԤäƤ��饢�åץ��졼�ɤ�ԤäƤ���������</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.�����С��ѥͥ� ��CGI�ġ���פ����򤷤ޤ���</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_2.png" alt="�����С��ѥͥ���CGI�ġ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.�֥᡼��ե��������Ρ��ְ��������󥹥ȡ���פ򥯥�å����Ƥ���������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_3.png" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.�оݤȤʤ�᡼��ե�����Ρ֥С���������ˤ���֥��åץǡ��ȡפ򥯥�å����Ƥ���������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_17.png" alt="�֥��åץǡ��ȡפ򥯥�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g04">4.�֥��åץ��졼�ɤ���פ򥯥�å����Ƥ���������</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_18.png" alt="�֥��åץ��졼�ɤ���פ򥯥�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g05">5.���åץ��졼�ɴ�λ</h6>
                                            <div class="box_body">
                                                <p>�ʾ�ǥ��åץ��졼�ɤ���λ�Ǥ���</p>
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
                                    <li><a href="#link-a">�᡼��ե����೵��</a></li>
                                    <li><a href="#link-b">�᡼��ե�����Υ��󥹥ȡ���</a>
                                        <ol>
                                            <li><a href="#link-b1">1.�����С��ѥͥ� �֥᡼��ե�����(CGI�ġ���)�פ򥯥�å����ޤ���</a></li>
                                            <li><a href="#link-b2">2.�ֿ������󥹥ȡ���פ򥯥�å����Ƥ���������</a></li>
                                            <li><a href="#link-b3">3.���ϲ��̤ǰʲ��ι��ܤ����Ϥ����֥��󥹥ȡ��뤹��פ򥯥�å����ޤ���</a></li>
                                            <li><a href="#link-b4">4.���ִ�λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">�᡼��ե�����δ�������</a>
                                        <ol>
                                            <li><a href="#link-c1">1.�֥᡼��ե�����URL�פΥ��ɥ쥹�˥�������</a></li>
                                            <li><a href="#link-c2">2.�ե�����δ�������</a></li>
                                            <li><a href="#link-c3">3.�᡼��ե�������ܤ�����</a></li>
                                            <li><a href="#link-c4">4.�������¸����</a></li>
                                            <li><a href="#link-c5">5.����</a></li>
                                            <li><a href="#link-c6">6.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�᡼��ե�����Υǥ���������</a>
                                        <ol>
                                            <li><a href="#link-d1">1.�����������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">�᡼��ե�����μ�ư�ֿ�����</a>
                                        <ol>
                                            <li><a href="#link-e1">1.��ư�ֿ���̵ͭ</a></li>
                                            <li><a href="#link-e2">2.�������¸����</a></li>
                                            <li><a href="#link-e3">3.����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">�᡼��ե�����ؤΥ������</a>
                                        <ul>
                                            <li><a href="#link-f1">�ȼ�SSL������</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-g">�᡼��ե�����Υ��åץ��졼��</a>
                                        <ul>
                                            <li><a href="#link-g1">1.�����С��ѥͥ� �֥᡼��ե�����(CGI�ġ���)�פ򥯥�å����ޤ���</a></li>
                                            <li><a href="#link-g2">2.�оݤȤʤ�᡼��ե�����Ρ֥С���������ˤ���֥��åץ��졼�ɡפ򥯥�å����Ƥ���������</a></li>
                                            <li><a href="#link-g3">3.�֥��åץ��졼�ɤ���פ򥯥�å����Ƥ���������</a></li>
                                            <li><a href="#link-g4">4.���åץ��졼�ɴ�λ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <div class="section_body">

                                            <section id="link-a" class="section">
                                                <h3 class="section_ttl">�᡼��ե����೵��</h3>
                                                <div class="section_body">
                                                    <p>�����С��ѥͥ�Ρ֥᡼��ե�����(CGI�ġ���)�ץ�˥塼���顢���䤤��碌�μ��դʤɤˤ����Ѳ�ǽ�ʥ᡼��ե�������󥯥�å������֤��뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <p>���ָ塢���Ѥ�������̤ǥ᡼��ե�����γƼ�������ѹ����뤳�Ȥ���ǽ�Ǥ���</p>
                                                    <p><img class="img" src="../img/manual/man_install_cgi_mailform_1.png?date=2410" alt="���å��������С����᡼��ե�����"></p>
                                                </div>
                                            </section>

                                            <section id="link-b" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����Υ��󥹥ȡ���</h3>
                                                <div class="section_body">


                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h4 class="box_ttl" id="link-b1">1. �����С��ѥͥ� �֥᡼��ե�����(CGI�ġ���)�פ򥯥�å����ޤ���</h4>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_2.png?date=2410" alt="�����С��ѥͥ���CGI�ġ��������"></p>
                                                            </div>

                                                        </section>


                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b2">2.�ֿ������󥹥ȡ���פ򥯥�å����Ƥ���������</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_3.png?date=2410" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b3">3.���ϲ��̤ǰʲ��ι��ܤ����Ϥ����֥��󥹥ȡ��뤹��פ򥯥�å����ޤ���</h6>
                                                            <div class="box_body">

                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>�᡼��ե�����URL</th>
                                                                        <td>���󥹥ȡ�����Υե����̾��Ǥ�դ����Ϥ��ޤ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�������̥�����ID�ʥ桼����ID��</th>
                                                                        <td>�᡼��ե������������̤˥����󤹤�桼����̾�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�������̥ѥ����</th>
                                                                        <td>�᡼��ե������������̤˥����󤹤�ݤΥѥ���ɤǤ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�����᡼�륢�ɥ쥹</th>
                                                                        <td>���䤤��碌�����Ƥ��������᡼�륢�ɥ쥹�Ǥ���</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_5.png?date=2410" alt="�᡼��ե�����Υ��󥹥ȡ��������"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b4">4.���ִ�λ</h6>
                                                            <div class="box_body">
                                                                <p>�ʾ�ǥ᡼��ե���������֤���λ�Ǥ���</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_6.png?date=2410" alt="�᡼��ե��������ִ�λ"></p>
                                                                <p>������ɽ������Ƥ���֥᡼��ե�����URL�פΥ��ɥ쥹�˥�����������ȡ����ߤΥ᡼��ե�������ǧ���뤳�Ȥ�����ޤ���<br>
                                                                    �᡼��ե������������Խ������硢�ִ����פΥ��ɥ쥹�إ����������Ƥ���������</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>�ȼ�SSL������</dt>
                                                                    <dd>
                                                                        <p>̵���ȼ�SSL�����ꤤ�����������⤷���ϥ��ץ�����ȼ�SSL�Τ������ԤäƤ����������Ȥǡ��ȼ�SSL�����Ѥ�����������̡פؤΥ����󤬲�ǽ�Ǥ���<br>
                                                                            ���ꡦ���������ߤ���ˡ�Ϥ��줾�첼���Υڡ�����������������</p>
                                                                        <ul class="list list_arrow-right">
                                                                            <li><a href="man_server_ssl.php">̵���ȼ�SSL��������ˡ</a></li>
                                                                            <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ�����������ˡ</a></li>
                                                                        </ul>
                                                                        <p>�ȼ�SSL�����Ѳ�ǽ�ˤʤ�ޤ����顢�����˥����������뤳�Ȥǡ���������̡פ˥����󤹤뤳�Ȥ�����ޤ���</p>
                                                                        <div class="border border_gray">
                                                                            <em class="font-bold">https://�ɥᥤ��̾/script/mailform/�ե����̾/admin/</em>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->

                                                </div>
                                            </section>

                                            <section id="link-c" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����δ�������</h3>
                                                <div class="section_body">

                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c1">1.�֥᡼��ե�����URL�פΥ��ɥ쥹�˥�������</h6>
                                                            <div class="box_body">
                                                                <p>�᡼��ե�����ΰ������̤˵��ܤΤ���֥᡼��ե�����URL�פΥ��ɥ쥹�˥����������Ƥ���������</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c2">2.�ե�����δ�������</h6>
                                                            <div class="box_body">
                                                                <p>������̤�ɽ������ޤ����顢�ޤ��ϥե�����Ρִ�������פ�Ԥ��ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_7.png?date=2410" alt="�᡼��ե�����δ����������"></p>
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>�ڡ����Υ����ȥ�</th>
                                                                        <td>�᡼��ե�����ڡ�����ɽ������륿���ȥ�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�᡼��ե������̾��</th>
                                                                        <td>�᡼��ե�������ɽ������븫�Ф��Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�����Ȥؤ����URL</th>
                                                                        <td>�֥����Ȥ����ץ�󥯤򥯥�å������ݤΡ�������URL�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>��������᡼�륢�ɥ쥹</th>
                                                                        <td>�᡼��ե����फ��Τ��䤤��碌���Ƥ��������᡼�륢�ɥ쥹�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>��������᡼��η�̾</th>
                                                                        <td>���䤤��碌���Ƥ�ܤ����᡼��η�̾�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�᡼���Ϣ³���������¤������</th>
                                                                        <td>�᡼���Ϣ³������Ԥ��ʤ��褦�ˤ�����֤���ꤷ�ޤ���</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>���줾�����ϤǤ����顢���ˡ֥᡼��ե�������ܤ�����פؤȿʤߤޤ���</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c3">3.�᡼��ե�������ܤ�����</h6>
                                                            <div class="box_body">
                                                                <p>³���ơ��ڡ����򲼤ؤȿʤ��ȡ��֥᡼��ե�������ܤ�����פ�Ԥ����Ȥ�����ޤ���<br>
                                                                    �����Ǥϡ��ե�����˻��Ѥ�����ܤȡ������κ٤������꤬��ǽ�Ǥ���</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_8.png?date=2410" alt="�᡼��ե�������ܤ�����"></p>
                                                                <p>���Ѥ�����ܤϡ��ڡ�����¦�ΰ�������<em class="font-bold">�ɲ�</em>�פ򥯥�å������ɲä��Ƥ���������<br>
                                                                    �ޤ������Ѥ��ʤ����ܤϡ��ڡ�����¦�ΰ�������<em class="font-bold">����</em>�פ򥯥�å����Ƥ���������</p>
                                                                <p>���Ѥ�����ܤˤϡ����줾�첼���Τ褦�ʹ��ܤ������ǽ�Ǥ���</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>�¤��ؤ�</dt>
                                                                    <dd>
                                                                        �ե�������ܤ�ɽ�����������ѹ����ޤ���<br>
                                                                        �ѹ���Ԥ����ܤΡ֢��פ⤷���ϡ֢��פǡ�ɽ������¤��ؤ��뤳�Ȥ���ǽ�Ǥ���
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>ɽ��̾</dt>
                                                                    <dd>�ºݤ˥ե�����Ȥ���ɽ�������ݤΡ�����̾�����ꤹ�뤳�Ȥ���ǽ�Ǥ���
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>����ɬ��</dt>
                                                                    <dd>�����å����뤳�Ȥǡ�����ɬ�ܤι��ܤȤ��뤳�Ȥ���ǽ�Ǥ���
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>���ץ����</dt>
                                                                    <dd>���ܤˤ�äƤϡ����ץ��������꤬��ǽ�ʤ�Τ�����ޤ���<br>
                                                                        �嵭�ʳ������Ū��������ܤϡ������餫�����꤬��ǽ�Ǥ���
                                                                    </dd>
                                                                </dl>

                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c4">4.�������¸����</h6>
                                                            <div class="box_body">
                                                                <p>�ե�����˻��Ѥ�����ܤ����꤬��λ�����顢�ڡ��������Ρ��������¸����פ򥯥�å����Ƥ���������</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c5">5.����</h6>
                                                            <div class="box_body">
                                                                <p>���줾�����ꤷ������ɽ������ޤ��Τǡ�����ǧ�ξ塢���̵꤬����Сֳ���פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_9.png?date=2410" alt="�ץ�ӥ塼ɽ��"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c6">6.���괰λ</h6>
                                                            <div class="box_body">
                                                                <p>�ʾ塢�᡼��ե���������꤬��λ�Ǥ���<br>
                                                                    �᡼��ե����ब���֤���Ƥ��륢�ɥ쥹�˥����������ơ����꤬ȿ�Ǥ���Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                                <p class="note">��������ѹ����������ϡ����٤Ǥ⤳��������̤����ѹ���Ԥ����Ȥ��Ǥ��ޤ���</p>
                                                            </div>
                                                        </section>
                                                    </div><!--serial-box-->
                                                </div>
                                            </section>


                                            <section id="link-d" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����Υǥ���������</h3>
                                                <div class="section_body">
                                                    <p>�������ΤޤޤǤ⤪�Ȥ������������Ȥϲ�ǽ�Ǥ����������Ȥ����Ӥ˹�碌�ơ������ߤΥǥ���������ꤹ�뤳�Ȥ�����ޤ���<br>
                                                        �����Ԥ��ݤϡ��᡼��ե������������̤ξ�����˥塼���֥ǥ����������פ򥯥�å����Ƥ���������</p>

                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-d1">1.�����������</h6>
                                                            <div class="box_body">
                                                                <p>������̤Ǥϡ��ޤ��᡼��ե�����Ρ֥�����פ����򤷤ޤ���<br>
                                                                    ��<em class="font-bold">�귿������</em>�פȡ�<em class="font-bold">�������</em>�פ�2�������򤬲�ǽ�Ǥ���</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_10.png?date=2410" alt="�ե�����ǥ������ѥ����������"></p>
                                                                <p>���򤷤�������˱����ơ��ǥ����������ܤ��ޤ���</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>�귿������ξ��</dt>
                                                                    <dd>
                                                                        <p>���å��������С��Ǥν������Υǥ�������Ѥ��ơ��ѡ�����Υ��顼���å������ʤɡ��ʰ�Ū�ʥǥ����������ܤ����Ȥ�����ޤ���<br>
                                                                            ��ñ��Ƴ����Ԥ��������ʤɤˤ�������Ǥ���</p>
                                                                        <p class="font-bold">�ޤ��ϡ��֥�����������פ�Ԥ��ޤ���</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_11.png?date=2410" alt="�ե����ॵ����������"></p>
                                                                        <div class="border border_gray">
                                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">������������</em><br>
                                                                            �᡼��ե�����β����򡢥ԥ�����(px)ñ�̤����ꤷ�ޤ���
                                                                        </div>
                                                                        <p>³���ơ��ƥѡ��ĤΥ��顼�����ꤷ�ޤ���<br>
                                                                            ��<em class="font-bold">������</em>�פ������򤹤�д�ñ����������ޤ�������RGB���顼������(16�ʿ�)�פ����Ϥ��뤳�ȤǤ���꤬��ǽ�Ǥ���</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_12.png?date=2410" alt="�ե�����ƽ�Υ��顼����"></p>
                                                                        <p>�����ǽ�ʹ��ܤϲ������̤�Ǥ���</p>
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th class="w20per w30per-s">�����ȥ�</th>
                                                                                <td>�ե�����Υ����ȥ�(���Ф�)��ʬ�Υ��顼�����ꤷ�ޤ���<br>
                                                                                    �֤���礻�ե�����פȵ��ܤ���Ƥ�����ʬ��ʸ��������տ魯�����Υ��顼�Ǥ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>����ʸ</th>
                                                                                <td>�����ȥ�β��˵��ܤ���롢����ʸ��ʸ���������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>�طʿ�</th>
                                                                                <td>�������Τ��طʿ������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>����</th>
                                                                                <td>�ե�������������ɽ�˻��Ѥ��������ο������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>�����ط�</th>
                                                                                <td>�ե������������ι��ܸ��Ф���ʬ�˻��Ѥ����طʿ������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>����ʸ��</th>
                                                                                <td>�ե������������ι��ܤ�ɽ������ʸ���������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>���顼ɽ��</th>
                                                                                <td>���顼��ɽ�����줿�ݤ�ʸ���������ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <p>�ޤ����᡼��ե�����γƲ��̤ˤ����ơ�ɽ�������ʸ�Ϥ������Ԥ����Ȥ�����ޤ���</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_13.png?date=2410" alt="ɽ�������ʸ�Ϥ�����"></p>
                                                                        <p>����Ǥ���Τϡ�������3���̤�ɽ�������ʸ�ϤǤ���</p>
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th class="w30per-s">���ϲ���</th>
                                                                                <td>�᡼��ե���������ϲ��̤ˤ�����ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>��ǧ����</th>
                                                                                <td>�������Ƥγ�ǧ��Ԥ����̤�ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>��λ����</th>
                                                                                <td>�᡼��ե����फ�����������λ�����ݤ�ɽ�������ʸ�Ϥ����ꤷ�ޤ���</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <p>�����Ȥ�����ä��顢�ڡ��������ˤ�����������¸����פ򥯥�å����Ƥ���������<br>
                                                                            ���Ƥ��ǧ�����塢����ܥ���򥯥�å����뤳�Ȥǥǥ�����ȿ�Ǥ���ޤ���</p>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="dl mb0">
                                                                    <dt><i class="ico ico_square-fill"></i>�������</dt>
                                                                    <dd>
                                                                        <p>HTML�ƥ�ץ졼�Ȥ䥹�����륷���Ȥ�ľ���Խ�������ͳ���ߤ˥ǥ�������ѹ����뤳�Ȥ�����ޤ���<br>
                                                                            ������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>
                                                                        <aside class="msg msg_caution">
                                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                                            <div class="msg_body">
                                                                                <p>�Խ����Ƥˤ�äƤϡ��ե������ư��ʤɤ˱ƶ���ڤܤ����Ȥ�����ޤ��Τǡ���갷���ˤϤ���դ���������</p>
                                                                            </div>
                                                                        </aside>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_14.png?date=2410" alt="��������������"></p>
                                                                        <p>�Խ����Ԥ���ս�ϲ������̤�Ǥ���</p>
                                                                        <ul class="ul">
                                                                            <li>���ϲ��̥ƥ�ץ졼��(HTML)</li>
                                                                            <li>��ǧ���̥ƥ�ץ졼��(HTML)</li>
                                                                            <li>��λ���̥ƥ�ץ졼��(HTML)</li>
                                                                            <li>�������륷����(CSS)</li>
                                                                        </ul>
                                                                        <p>�Խ����̤α�¦�ˤ���ܥ���Ǥϲ����Τ褦�����Ԥ��ޤ���</p>
                                                                        <ul class="ul">
                                                                            <li>��¸���� �� ���ߤξ��֤���¸���ޤ���</li>
                                                                            <li>�ꥻ�å� �� ������¸���������Ǥξ��֤ޤ��ᤷ�ޤ���</li>
                                                                            <li>�ץ�ӥ塼 �� ���ߤξ��֤ǤΥե�������ǧ���뤳�Ȥ�����ޤ���</li>
                                                                        </ul>
                                                                        <p>���줾����¸��Ԥä������ǡ��ºݤΥե�������Խ���ȿ�Ǥ���ޤ���</p>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->
                                                </div>
                                            </section>

                                            <section id="link-e" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����μ�ư�ֿ�����</h3>
                                                <div class="section_body">
                                                    <p>���䤤��碌���Ф��ƥ᡼��μ�ư�ֿ������ꤹ�뤳�Ȥ�����ޤ���<br>
                                                        �����Ԥ��ݤϡ��᡼��ե������������̤ξ�����˥塼���ּ�ư�ֿ��᡼�������פ򥯥�å����Ƥ���������</p>
                                                    <p>���᡼��μ�ư�ֿ�����Ѥ���ˤϡ��ե�����ˡ֤�Ϣ����᡼�륢�ɥ쥹�פι��ܤ����ꤹ��ɬ�פ�����ޤ����֤�Ϣ����᡼�륢�ɥ쥹�פ�̤����ξ��ϡ���ư�ֿ��᡼�����������ޤ���</p>
                                                    <div class="serial-box mb10">

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e1">1.��ư�ֿ���̵ͭ</h6>
                                                            <div class="box_body">
                                                                <p>������̤Ǥϡ��ޤ��᡼��μ�ư�ֿ���Ԥ��������򤷤ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_15.png?date=2410" alt="��ư�ֿ��᡼�������"></p>
                                                                <p>���Ѥ�����ϡ����ι��ܤ����Ϥ��ޤ���</p>
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>�᡼��η�̾</th>
                                                                        <td>��ư�ֿ���Ԥ��᡼��η�̾�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�᡼�����ʸ</th>
                                                                        <td>��ư�ֿ���Ԥ��᡼�����ʸ�Ǥ���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���пͤΥ��ɥ쥹</th>
                                                                        <td>��ư�ֿ���Ԥ��᡼��κ��п�(from)�Υ᡼�륢�ɥ쥹�Ǥ���</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e2">2.�������¸����</h6>
                                                            <div class="box_body">
                                                                <p>�ե�����˻��Ѥ�����ܤ����꤬��λ�����顢�ڡ��������Ρ��������¸����פ򥯥�å����Ƥ���������</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e3">3.����</h6>
                                                            <div class="box_body">
                                                                <p>���줾�����ꤷ������ɽ������ޤ��Τǡ�����ǧ�ξ塢���̵꤬����Сֳ���פ򥯥�å����Ƥ���������</p>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->
                                                    <p>�ʾ塢�᡼��μ�ư�ֿ����꤬��λ�Ǥ���</p>
                                                </div>
                                            </section>


                                            <section id="link-f" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����ؤΥ������</h3>
                                                <div class="section_body">

                                                    <p>�᡼��ե�����ξ�����˥塼����<em class="font-bold">�����Ѥ�HTML����</em>�פ򥯥�å����Ƥ���������<br>
                                                        HTML�ڡ���������֤��뤿��Ρ������Τ褦�ʥ����ɤ�ɽ������ޤ��Τǡ�����ǧ����������</p>
                                                    <p><img class="img" src="../img/manual/man_install_cgi_mailform_16.png?date=2410" alt="������HTML������"></p>
                                                    <p>�ƥ����ȥ��ꥢ��ˤ��륳���ɤ򥳥ԡ����������ͤΥ����Ⱦ��ɽ���������ս��Ž���դ��Ƥ���������<br>
                                                        ɽ�����줿��󥯤򥯥�å����뤳�Ȥǡ����֤����᡼��ե�����ؤȥ����������뤳�Ȥ�����ޤ���</p>
                                                    <section class="block">
                                                        <h3 class="block_ttl" id="link-f1">�ȼ�SSL������</h3>
                                                        <div class="block_body">
                                                            <p>̵���ȼ�SSL�����ꤤ�����������⤷���ϥ��ץ�����ȼ�SSL�Τ������ԤäƤ����������Ȥǡ��ȼ�SSL����Ѥ����֥᡼��ե�����פ����Ѥ���ǽ�Ǥ���<br>
                                                                ���ꡦ���������ߤ���ˡ�Ϥ��줾�첼���Υڡ�����������������</p>
                                                            <ul class="list list_arrow-right">
                                                                <li><a href="man_server_ssl.php">̵���ȼ�SSL��������ˡ</a></li>
                                                                <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ�����������ˡ</a></li>
                                                            </ul>
                                                            <p>�ȼ�SSL�����Ѳ�ǽ�ˤʤ�ޤ����顢�����Τ褦��URL�ؤΥ�󥯤򤪵��ͤΥ����Ⱦ���ɲä��Ƥ���������</p>
                                                            <div class="border border_gray">
                                                                <em class="font-bold">https://�ɥᥤ��̾/script/mailform/�ե����̾/</em>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>

                                            <section id="link-g" class="section">
                                                <h3 class="section_ttl">�᡼��ե�����Υ��åץ��졼��</h3>
                                                <div class="section_body">

                                                    <p>�Ť��С������򤪻Ȥ������ϡ��������С�����󤬥�꡼�����줿�ݤ˥᡼��ե�����򥢥åץ��졼�ɤ��뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���åץ��졼�ɤ�Ԥ��������</h6>
                                                        <div class="msg_body">
                                                            <p>ͽ����������ˤ�äƥǡ������ü������ǽ��������ޤ���ɬ�������˥Хå����åפ�ԤäƤ��饢�åץ��졼�ɤ�ԤäƤ���������</p>
                                                        </div>
                                                    </aside>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h4 class="box_ttl" id="link-g1">1. �����С��ѥͥ� �֥᡼��ե�����(CGI�ġ���)�פ򥯥�å����ޤ���</h4>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_2.png?date=2410" alt="�����С��ѥͥ���CGI�ġ��������"></p>
                                                            </div>

                                                        </section>


                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g2">2.�оݤȤʤ�᡼��ե�����Ρ֥С���������ˤ���֥��åץ��졼�ɡפ򥯥�å����Ƥ���������</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_17.png?date=2410" alt="�᡼��ե�����Ρ֥С���������ˤ���֥��åץ��졼�ɡפ򥯥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g3">3.�֥��åץ��졼�ɤ���פ򥯥�å����Ƥ�����������</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_18.png?date=2410" alt="�֥��åץǡ��Ȥ���פ򥯥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g4">4.���åץ��졼�ɴ�λ</h6>
                                                            <div class="box_body">
                                                                <p>�ʾ�ǥ��åץ��졼�ɤ���λ�Ǥ���</p>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->

                                                </div>

                                            </section>

                                        </div><!--section_body-->
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