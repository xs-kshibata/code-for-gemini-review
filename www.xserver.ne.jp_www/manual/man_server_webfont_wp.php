<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Web�ե��������ˤĤ���(WordPress�ץ饰����) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���WordPress�����ѥץ饰������Ѥ���Web�ե���Ȥ����ꤹ�����Ҳ𤷤Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WordPress�ץ饰����ǤΤ�����</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">WordPress�����Ȥ򿷤��������Ѥξ��</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.��Web�ե��������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a02">2.���ꤹ��ɥᥤ�������</a></li>
                                            <li><a href="#link-previous-a03">3.WordPress�򿷵����󥹥ȡ���</a></li>
                                            <li><a href="#link-previous-a04">4.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-previous-a05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a></li>
                                            <li><a href="#link-previous-a06">6.�ե���ȥơ��ޤ�����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.��Web�ե��������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b02">2.���ꤹ��ɥᥤ�������</a></li>
                                            <li><a href="#link-previous-b03">3.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-previous-b04">4.�ץ饰����򿷵��ɲ�</a></li>
                                            <li><a href="#link-previous-b05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a></li>
                                            <li><a href="#link-previous-b06">6.�ե���ȥơ��ޤ�����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">�ץ饰����С������1.2�����λȤ���</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-previous-c02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</a>
                                            </li>
                                            <li><a href="#link-previous-c03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">�ץ饰����С������2.0�ʹߤλȤ���</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-previous-d02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</a>
                                            </li>
                                            <li><a href="#link-previous-d03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-previous-d04">�����ȥե��������ʥС������2.0�ʹߤο���ǽ��</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                    <!--
                                    <li><a href="#link-d">[����]���ꥸ�ʥ�Υե���ȥơ��ޤ����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-d01">1.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-d02">2.Web�ե���Ȥ�����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">[����]�������Ȥ˥ե���ȥơ��ޤ����ꤹ����ˡ</a>
                                        <ol>
                                            <li><a href="#link-e01">1.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-e02">2.�������ޥ���������</a></li>
                                        </ol>
                                    </li>
                                    -->
                                    <li><a href="#link-previous-f">[����]�ե���ȥơ��ް���</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Web�ե���Ȥ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <ul class="list list_arrow-right">
                                <li>��ǽ�λ��ͤʤɤˤĤ��Ƥϡ���<a href="../functions/service_webfont.php">��ǽ > Web�ե����</a>�פ򤴻��Ȥ���������</li>
                                <li>HTML��ľ�ܵ��Ҥ��Ƥ����Ѥξ��ϡ���<a href="man_server_webfont_html.php">�ޥ˥奢�� > Web�ե��������ˤĤ��� > HTML���ҷ����ǤΤ�����</a>�פ򤴻��Ȥ���������</li>
                            </ul>

                            <div class="msg msg_notice">
                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�Τ����Ѥ˴ؤ���</h4>
                                <div class="msg_body">
                                    <ul class="ul">
                                        <li>33���Τ���7.5��PV�ޤǤ����Ѥ��������ޤ���<br>�ޤ������7.5��PV��Ķ�����硢Web�ե���Ȥ�Ŭ�Ѥϳ���ޤ������֥饦��ɸ��ǤΥե����ɽ�������١�ɽ�����Ƥ˱ƶ��Ϥ���ޤ���</li>
                                        <li>���Ѳ�ǽ�ʽ��ΰʳ�����ꤹ�뤳�ȤϤǤ��ޤ���</li>
                                        <li>�����ͤ��Խ����줿�ץ�������˴ؤ��뵻��Ū���ƤΤ��䤤��碌�ˤĤ��Ƥϥ��ݡ����оݳ��Ǥ���<br>�ޤ��������Ȥξ����ˤ�äƤ����Ѥ��������ʤ����⤢��ޤ���</li>
                                    </ul>
                                </div>
                            </div>

                            <aside class="msg">
                                <div class="msg_body">
                                    <p class="font-bold">Web�ե���Ȥ�Ŭ�Ѥ��������ʤ����ϲ����򤴻��Ȥ���������</p>
                                    <ul class="list list_arrow-down mb0">
                                        <li><a href="#i7">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                    </ul>
                                </div>
                            </aside>

                            <section id="i1" class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPress�����Ȥ򿷤��������Ѥξ��</h4>
                                <div class="section_body">
                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">WordPress�����Ȥ򤹤Ǥ˱�����ξ��ϰʲ��򤴻��Ȥ���������</p>
                                            <ul class="list list_arrow-down mb0">
                                                <li><a href="#i2">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</a></li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box" id="link-previous-a01">
                                            <h5 id="i5" class="box_ttl">1.��Web�ե��������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="�����оݥɥᥤ����ǧ���ơ���Web�ե��������פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.���ꤹ��ɥᥤ�������</h5>
                                            <div class="box_body">
                                                <p>��Web�ե����������ɲáפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡����ꤹ��ץܥ��󥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Web�ե���Ȥ����ꤹ��ɥᥤ������򤷡�������ץܥ���򥯥�å�"></p>
                                                <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                        <p>�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                        <p class="mb0">�ʤ��������ϡ��ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�̵�����פ򤪴ꤤ�������ޤ���</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.WordPress�򿷵����󥹥ȡ���</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ���󥹥ȡ���פ��WordPress�򥤥󥹥ȡ��뤷�ޤ���<br>
                                                ���󥹥ȡ�����ˡ�ξܺ٤ϥޥ˥奢���<a href="man_install_auto_word.php">��ñ���󥹥ȡ��� > WordPress ���ܸ���</a>�פ򤴻��Ȥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.WordPress�δ������̤إ�����</h5>
                                            <div class="box_body">
                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</h5>
                                            <div class="box_body">
                                                <p>��¦�Υ�˥塼���֥ץ饰���� > ���󥹥ȡ���Ѥߥץ饰����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp2.png" alt="�֥ץ饰���� > ���󥹥ȡ���Ѥߥץ饰����פ򥯥�å�"></p>

                                                <p>�ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�ͭ�����פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp3.png" alt="��TypeSquare Webfonts for ���å��������С��פ��ͭ������"></p>

                                                <div class="msg msg_notice">
                                                    <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ץ饰���󤬥��󥹥ȡ��뤵��Ƥ��ʤ����</h4>
                                                    <div class="msg_body">
                                                        <p class="mb0">��WordPress�����Ȥ򤹤Ǥ˱�����ξ��׼��Ρ�<a href="#i14">4.�ץ饰����򿷵��ɲ�</a>�פ����<a href="#i15">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a>�פ򤴻��Ȥξ塢�ץ饰������ɲä�ԤäƤ���������</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a06">6.�ե���ȥơ��ޤ�����</h5>
                                            <div class="box_body">
                                                <p>��¦�Υ�˥塼���ɲä���Ƥ����TypeSquare Webfonts�פ��顢�ե���ȥơ��������Ԥ����Ȥ��Ǥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp4.png" alt="��TypeSquare Webfonts�פ򥯥�å�"></p>
                                                <p>�ե���ȥơ��ޤ�������ˡ�ϥץ饰����С������ˤ�äưۤʤ�ޤ���<br>�ʲ��򤴻��Ȥ���������</p>
                                                <ul class="list list_arrow-down mb0">
                                                    <li><a href="#link-previous-d">�ץ饰����С������1.2�����λȤ���</a></li>
                                                    <li><a href="#link-previous-e">�ץ饰����С������2.0�ʹߤλȤ���</a></li>
                                                </ul>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i2" class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</h4>
                                <div class="section_body">

                                    <div class="serial-box" id="link-previous-b01">

                                        <section class="box">
                                            <h5 id="i5" class="box_ttl">1.��Web�ե��������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="�����оݥɥᥤ����ǧ���ơ���Web�ե��������פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.���ꤹ��ɥᥤ�������</h5>
                                            <div class="box_body">
                                                <p>��Web�ե����������ɲáפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡����ꤹ��ץܥ��󥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Web�ե���Ȥ����ꤹ��ɥᥤ������򤷡�������ץܥ���򥯥�å�"></p>
                                                <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                        <p>�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                        <p class="mb0">�ʤ��������ϡ��ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�̵�����פ򤪴ꤤ�������ޤ���</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.WordPress�δ������̤إ�����</h5>
                                            <div class="box_body">
                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-previous-b04">
                                            <h5 id="i14" class="box_ttl">4.�ץ饰����򿷵��ɲ�</h5>
                                            <div class="box_body">
                                                <p>��¦�Υ�˥塼���֥ץ饰���� > �����ɲáפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp5.png" alt="�֥ץ饰���� > �����ɲáפ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box" id="link-previous-b05">
                                            <h5 id="i15" class="box_ttl">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</h5>
                                            <div class="box_body">
                                                <p>�ץ饰�����TypeSquare Webfonts for ���å��������С��פ򸡺��ܥå�����긡�������ֺ��������󥹥ȡ���פ򥯥�å����Ƥ���������<br>
                                                ���󥹥ȡ��봰λ�塢�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ�������Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp10.png" alt="�ֺ��������󥹥ȡ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b06">6.�ե���ȥơ��ޤ�����</h5>
                                            <div class="box_body">
                                                <p>��¦�Υ�˥塼���ɲä���Ƥ����TypeSquare Webfonts�פ��顢�ե���ȥơ��������Ԥ����Ȥ��Ǥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp4.png" alt="��TypeSquare Webfonts�פ򥯥�å�"></p>
                                                <p>�ե���ȥơ��ޤ�������ˡ�ϥץ饰����С������ˤ�äưۤʤ�ޤ���<br>�ʲ��򤴻��Ȥ���������</p>
                                                <ul class="list list_arrow-down mb0">
                                                    <li><a href="#link-previous-c">�ץ饰����С������1.2�����λȤ���</a></li>
                                                    <li><a href="#link-previous-d">�ץ饰����С������2.0�ʹߤλȤ���</a></li>
                                                </ul>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">�ץ饰����С������1.2�����λȤ���</h4>
                                <div class="section_body">
                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>���������</h5>
                                        <div class="msg_body">
                                            <p class="mb0">���˥ץ饰�����TypeSquare Webfonts for ���å��������С��פ򥤥󥹥ȡ��뤷��ͭ��������Ƥ����������Τ�����Ȥʤ�ޤ���</p>
                                        </div>
                                    </div><!-- ���������Τ˥ե���ȥơ��ޤ����ꤹ�� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                        <div class="block_body">
                                            <p>���������Τ˥ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img alt="WordPress�δ������̤˥�����" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.�ե���ȥơ��ޤ�����</h6>
                                                    <div class="box_body">
                                                        <p>�ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ֥ե���ȥơ��ޤ򹹿�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img alt="�֥ե���ȥơ��ޤ򹹿�����פ򥯥�å�" class="img" src="../img/manual/previous/man_server_webfont_wp4.png"></p>
                                                        <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>
                                                            �ե���ȥơ��ޤΰ����ϡ�<a href="#i6">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div><!-- ���ꥸ�ʥ�Υե���ȥơ��ޤ�������� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</h5>
                                        <div class="block_body">
                                            <p>Web�ե���Ȥ�ͳ���Ȥ߹�碌�ơ����ꥸ�ʥ�Υơ��ޤ��뤳�Ȥ��Ǥ��ޤ���������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img alt="WordPress�δ������̤˥�����" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.Web�ե���Ȥ�����</h6>
                                                    <div class="box_body">
                                                        <p>�ե���ȥơ��ޤΥץ�������˥塼����ֿ������ơ��ޤ��������פ����򤷤Ƥ���������</p>
                                                        <p><img alt="�ֿ������ơ��ޤ��������פ�����" class="img" src="../img/manual/previous/man_server_webfont_wp6.png"></p>
                                                        <p>Ǥ�դΥơ��ޥ����ȥ�����ꤷ���֥����ȥ�ס֥꡼�ɡס���ʸ�ס������פΥץ�������˥塼������Ѥ������ե���Ȥ򤽤줾�����򤷤Ƥ���������</p>
                                                        <p><img alt="�֥����ȥ�ס֥꡼�ɡס���ʸ�ס������פΥץ�������˥塼������Ѥ������ե���Ȥ򤽤줾������" class="img" src="../img/manual/man_server_webfont_wp7.png"></p>
                                                        <p>�����Ѥ�WordPress�ơ��ޤˤ�äƤϡ����������ȥ롦���������åȥ����ȥ�ʤɤ˥ե���ȥơ��ޤ�Ŭ�Ѥ���ʤ���礬����ޤ���<br>
                                                            ���κݤϰʲ��Ρ֥ե�������ꥯ�饹�׵�ǽ�����Ѥ���������</p>
                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m" id="i8"><i class="ico ico_circle-arrow-right"></i>�ե�������ꥯ�饹�ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>�־��Ը����������ޥ����פΡ֥ե�������ꥯ�饹�פǤϡ�Web�ե���Ȥ�Ŭ�Ѥ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                                                <p><img alt="���ꤷ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ" class="img" src="../img/manual/previous/man_server_webfont_wp8.png"></p>
                                                                <p class="mb0">�ʤ����֥ե�������ꥯ�饹�פϾ��Ը���������Ȥʤ�ޤ���<br>
                                                                    WordPress�����˴���Ƥ��ʤ�����HTML/CSS���μ����ʤ����˴ؤ��Ƥϡ�������ѹ����ʤ��Ƥ����ꤢ��ޤ���</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div><!-- �������Ȥ˥ե���ȥơ��ޤ����ꤹ�� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-c03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                        <div class="block_body">
                                            <p></p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img alt="WordPress�δ������̤˥�����" class="img" src="../img/manual/previous/man_server_webfont_wp1.png"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-e02">2.�������ޥ���������</h5>
                                                    <div class="box_body">
                                                        <p>�־��Ը����Υ������ޥ����פ򥯥�å������ָ��̵����ե��������פΡ�ͭ��������ץ����å��ܥå����˥����å�������ơ��ָ��̵����ե��������򹹿�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img alt="�־��Ը����Υ������ޥ����פ򥯥�å�" class="img" src="../img/manual/previous/man_server_webfont_wp9.png"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">�ץ饰����С������2.0�ʹߤλȤ���</h4>
                                <div class="section_body">

                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ץ饰����С������2.0�ؤΥС�����󥢥åפ˴ؤ���</h5>
                                        <div class="msg_body">

                                            <ul class="ul">
                                                <li class="mb10">
                                                    �ץ饰����ΥС�����󥢥å׸塢�֥饦������å��夬�ĤäƤ���ȥץ饰���������ɽ������ʤ���礬����ޤ���
                                                    ���κݤϥ���å���������Ƥ�����٥ڡ������ɤ߹���Ǥ���������
                                                </li>
                                                <li class="mb10">
                                                    �С������1.2������<a href="#i8">�ե�������ꥯ�饹</a>��ǽ�ϡ�<a href="#i9">ľ�ܻ���ʾ��Ը�����</a>��ǽ�˥�˥塼���뤵��ޤ�����
                                                    �С�����󥢥åפ���ȡ������ե�������ꥯ�饹��ǽ�����ꤷ�Ƥ������Ƥϥ��ꥢ����ޤ��ΤǤ���դ���������
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- ���������Τ˥ե���ȥơ��ޤ����ꤹ�� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                        <div class="block_body">
                                            <p>���������Τ˥ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.�����˥塼������</h6>
                                                    <div class="box_body">
                                                        <p>����Ƶ����ե��������פΥ�󥯤򥯥�å����ơֶ��̥ơ��޻���פ˥����å�������Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_1.png" alt="����Ƶ����ե��������פΥ��"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">3.�ե���ȥơ��ޤ�����</h6>
                                                    <div class="box_body">
                                                        <p>�ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ���ƥե�����������¸����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_2.png" alt="����ƥե�����������¸����פ򥯥�å�"></p>
                                                        <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>�ե���ȥơ��ޤΰ����ϡ�<a href="#i6">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ���ꥸ�ʥ�Υե���ȥơ��ޤ�������� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</h5>
                                        <div class="block_body">
                                            <p>Web�ե���Ȥ�ͳ���Ȥ߹�碌�ơ����ꥸ�ʥ�Υơ��ޤ��뤳�Ȥ��Ǥ��ޤ���������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.��������ơ��ޤ�����</h6>
                                                    <div class="box_body">
                                                        <p>�֥�������ơ����Խ��פΥ�󥯤򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_3.png" alt="�֥�������ơ����Խ��פΥ�󥯤򥯥�å�"></p>

                                                        <p>Ǥ�դΥơ��ޥ����ȥ�����ꤷ���ָ��Ф��ס֥꡼�ɡס���ʸ�ס������פΥץ�������˥塼������Ѥ������ե���Ȥ򤽤줾�����򤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_4.png" alt="���Ѥ������ե���Ȥ򤽤줾������"></p>

                                                        <p>�ֶ��̥ơ��޻���פΥץ�������˥塼�ǡ����������ơ��ޤ�����Ǥ��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_5.png" alt="���Ѥ������ե���Ȥ򤽤줾������"></p>

                                                        <p>�����Ѥ�WordPress�ơ��ޤˤ�äƤϡ����������ȥ롦���������åȥ����ȥ�ʤɤ˥ե���ȥơ��ޤ�Ŭ�Ѥ���ʤ���礬����ޤ���<br>���κݤϰʲ��Ρ�ľ�ܻ���׵�ǽ�����Ѥ���������</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m" id="i9"><i class="ico ico_circle-arrow-right"></i>ľ�ܻ���ʾ��Ը����ˤˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>����Ƶ����ե��������פΡ�ľ�ܻ���ʾ��Ը����ˡפǤϡ�Web�ե���Ȥ�Ŭ�Ѥ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_6.png" alt="���ꤷ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ"></p>
                                                                <p class="mb0">�ʤ�����ľ�ܻ���ʾ��Ը����ˡפϾ��Ը���������Ȥʤ�ޤ���<br>WordPress�����˴���Ƥ��ʤ�����HTML/CSS���μ����ʤ����˴ؤ��Ƥϡ�������ѹ����ʤ��Ƥ����ꤢ��ޤ���</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- �������Ȥ˥ե���ȥơ��ޤ����ꤹ�� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                        <div class="block_body">
                                            <p>���̤���Ƥ��Ȥ����ꤷ���ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.�����˥塼������</h6>
                                                    <div class="box_body">
                                                        <p>����Ƶ����ե��������פΥ�󥯤򥯥�å����ơָ��̥ơ��޻���פ˥����å�������Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_7.png" alt="�ָ��̥ơ��޻���פ˥����å�"></p>
                                                        <br>

                                                        <p>WordPress��Ʋ��̤ˡ��ե���ȥơ��ޤ����Ǥ��뵡ǽ��ɽ������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_8.png" alt="�ե���ȥơ��ޤ����Ǥ��뵡ǽ"></p>
                                                    </div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- �����ȥե�������� -->
                                    <div class="block">
                                        <h5 class="block_ttl" id="link-previous-d04">�����ȥե��������ʥС������2.0�ʹߤο���ǽ��</h5>
                                        <div class="block_body">
                                            <p>�����ȤΥ����ȥ�䥭��å����ԡ��ˡ����̤ǥե���Ȥ����ꤹ�뤳�Ȥ��Ǥ��ޤ���</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.WordPress�δ������̤إ�����</h6>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp1.png" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">2.�����ȥե���Ȥ�����</h6>
                                                    <div class="box_body">
                                                        <p>�ƹ��ܤ����Ѥ������ե���Ȥ����򤷤Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_webfont_wp_v2_9.png" alt="���Ѥ������ե���Ȥ�����"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i7" class="section">
                                <h4 class="section_ttl" id="link-previous-e">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</h4>
                                <div class="section_body">
                                    <p>Web�ե���Ȥ�Ŭ�Ѥ�������ˤϡ��ʲ��κ�Ȥ��˹ԤäƤ���������</p>
                                    <ol class="ol ol_margin">
                                        <li>�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�̵�����ˤ��Ƥ���������</li>

                                        <li>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�ע͡�Web�ե��������פ��ɥᥤ�����Ͽ�������Ƥ���������</li>
                                    </ol>
                                    <p>�ʾ�κ�Ȥ�Ԥä��塢Web�ե���Ȥ�Ŭ�Ѥ�����Ƥ��뤫����ǧ����������</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="i6" class="section">
                                <h4 class="section_ttl" id="link-previous-f">[����]�ե���ȥơ��ް���</h4>
                                <div class="section_body">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>�ơ���̾</th>
                                                <th>���Ф�</th>
                                                <th>�꡼��</th>
                                                <th>��ʸ</th>
                                                <th>����</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>�١����å�</th>
                                                <td>���� B</td>
                                                <td>���� B</td>
                                                <td>���� R</td>
                                                <td>���� B</td>
                                            </tr>
                                            <tr>
                                                <th>��������å���</th>
                                                <td>���Х�MB31</td>
                                                <td>���Х�MB31</td>
                                                <td>TBUD�����å� R</td>
                                                <td>TBUD�����å� E</td>
                                            </tr>
                                            <tr>
                                                <th>�����奢��</th>
                                                <td>���Ѥˤ��ߴݥ����å� B</td>
                                                <td>�ݥե����� M</td>
                                                <td>�ȡ�����</td>
                                                <td>���Ѥˤ��ߴݥ����å� B</td>
                                            </tr>
                                            <tr>
                                                <th>�˥塼��</th>
                                                <td>��奦�ߥ� B-KL</td>
                                                <td>��奦�ߥ� B-KL</td>
                                                <td>�եߥ� M</td>
                                                <td>��奦�ߥ� B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>�ӥ��ͥ�</th>
                                                <td>��奦�ߥ� B-KL</td>
                                                <td>��奦�ߥ� B-KL</td>
                                                <td>TBUD�����å� R</td>
                                                <td>TBUD�����å� E</td>
                                            </tr>
                                            <tr>
                                                <th>�ե��å����</th>
                                                <td>�ݥե����� M</td>
                                                <td>�ݥե����� M</td>
                                                <td>���� R</td>
                                                <td>���� B</td>
                                            </tr>
                                            <tr>
                                                <th>���쥬���</th>
                                                <td>A1��ī</td>
                                                <td>A1��ī</td>
                                                <td>�եߥ� M</td>
                                                <td>��奦�ߥ� B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>A1��ī</td>
                                                <td>���ޤʤ�</td>
                                                <td>��奦�ߥ� R-KL</td>
                                                <td>��奦�ߥ� B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>�ݥå�</th>
                                                <td>�֤�ä���</td>
                                                <td>�֤�ä���</td>
                                                <td>����� 501</td>
                                                <td>G2���󥻥��-B</td>
                                            </tr>
                                            <tr>
                                                <th>���ߥ���</th>
                                                <td>���� ����ɥ�</td>
                                                <td>���� ����ɥ�</td>
                                                <td>����� 501</td>
                                                <td>G2���󥻥��-B</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>�����餮����</td>
                                                <td>���ޤʤ�</td>
                                                <td>��奦�ߥ� R-KL</td>
                                                <td>��奦�ߥ� B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>�Ϥ�ʤ�</th>
                                                <td>���</td>
                                                <td>���</td>
                                                <td>�եߥ� M</td>
                                                <td>��奦�ߥ� B-KL</td>
                                            </tr>
                                            <tr>
                                                <th>����</th>
                                                <td>���ʽ�ICA M</td>
                                                <td>�����餮����</td>
                                                <td>�����餮����</td>
                                                <td>���ʽ�ICA M</td>
                                            </tr>
                                            <tr>
                                                <th>�ʥ�����</th>
                                                <td>�Ϥ�ҳر�</td>
                                                <td>�Ϥ�ҳر�</td>
                                                <td>���ͥޥ쥿��</td>
                                                <td>�� B</td>
                                            </tr>
                                            <tr>
                                                <th>��ȥ�</th>
                                                <td>���Ѥˤ��ߴݥ����å� B</td>
                                                <td>���ͥޥ쥿��</td>
                                                <td>�ȡ�����</td>
                                                <td>����� 501</td>
                                            </tr>
                                            <tr>
                                                <th>�ۥ顼</th>
                                                <td>TB�Ű���</td>
                                                <td>TB�Ű���</td>
                                                <td>Φ��</td>
                                                <td>Φ��</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                    <li><a href="#link-a">WordPress�����Ȥ򿷤��������Ѥξ��</a>
                                        <ol>
                                            <li><a href="#link-a01">1.��Web�ե��������פ򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.���ꤹ��ɥᥤ�������</a></li>
                                            <li><a href="#link-a03">3.WordPress�򿷵����󥹥ȡ���</a></li>
                                            <li><a href="#link-a04">4.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-a05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a></li>
                                            <li><a href="#link-a06">6.�ե���ȥơ��ޤ�����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</a>
                                        <ol>
                                            <li><a href="#link-b01">1.��Web�ե��������פ򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.���ꤹ��ɥᥤ�������</a></li>
                                            <li><a href="#link-b03">3.WordPress�δ������̤إ�����</a></li>
                                            <li><a href="#link-b04">4.�ץ饰����򿷵��ɲ�</a></li>
                                            <li><a href="#link-b05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a></li>
                                            <li><a href="#link-b06">6.�ե���ȥơ��ޤ�����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">�ץ饰����С������1.2�����λȤ���</a>
                                        <ol>
                                            <li><a href="#link-c01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-c02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</a>
                                            </li>
                                            <li><a href="#link-c03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�ץ饰����С������2.0�ʹߤλȤ���</a>
                                        <ol>
                                            <li><a href="#link-d01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-d02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</a>
                                            </li>
                                            <li><a href="#link-d03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</a>
                                            </li>
                                            <li><a href="#link-d04">�����ȥե��������ʥС������2.0�ʹߤο���ǽ��</a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                    <li><a href="#link-f">[����]�ե���ȥơ��ް���</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Web�ե���Ȥ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <ul class="list list_arrow-right">
                                        <li>��ǽ�λ��ͤʤɤˤĤ��Ƥϡ���<a href="../functions/service_webfont.php" target="_blank">Web�ե����</a><i class="ico ico--newWindow"></i>�פ򤴻��Ȥ���������</li>
                                        <li>HTML��ľ�ܵ��Ҥ��Ƥ����Ѥξ��ϡ���<a href="man_server_webfont_html.php">HTML���ҷ����ǤΤ�����</a>�פ򤴻��Ȥ���������</li>
                                    </ul>

                                    <div class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�Τ����Ѥ˴ؤ���</h4>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>33���Τ���7.5��PV�ޤǤ����Ѥ��������ޤ���<br>�ޤ������7.5��PV��Ķ�����硢Web�ե���Ȥ�Ŭ�Ѥϳ���ޤ������֥饦��ɸ��ǤΥե����ɽ�������١�ɽ�����Ƥ˱ƶ��Ϥ���ޤ���</li>
                                                <li>���Ѳ�ǽ�ʽ��ΰʳ�����ꤹ�뤳�ȤϤǤ��ޤ���</li>
                                                <li>�����ͤ��Խ����줿�ץ�������˴ؤ��뵻��Ū���ƤΤ��䤤��碌�ˤĤ��Ƥϥ��ݡ����оݳ��Ǥ���<br>�ޤ��������Ȥξ����ˤ�äƤ����Ѥ��������ʤ����⤢��ޤ���</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">Web�ե���Ȥ�Ŭ�Ѥ��������ʤ����ϲ����򤴻��Ȥ���������</p>
                                            <ul class="list list_arrow-down mb0">
                                                <li><a href="#link-e">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <section id="link-a" class="section">
                                        <h3 class="section_ttl">WordPress�����Ȥ򿷤��������Ѥξ��</h3>
                                        <div class="section_body">

                                            <aside class="msg">
                                                <div class="msg_body">
                                                    <p class="font-bold">WordPress�����Ȥ򤹤Ǥ˱�����ξ��ϰʲ��򤴻��Ȥ���������</p>
                                                    <ul class="list list_arrow-down mb0">
                                                        <li><a href="#link-b">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a01">1.��Web�ե��������פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png" alt="��Web�ե��������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a02">2.���ꤹ��ɥᥤ�������</h4>
                                                    <div class="box_body">
                                                        <p>��Web�ե����������ɲáפ򥯥�å������֥����ȡפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡��ɲä���ץܥ��󥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png?date=2410" alt="Web�ե���Ȥ����ꤹ��ɥᥤ������򤷡����ɲä���ץܥ���򥯥�å�"></p>
                                                        <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                                <p>�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                                <p class="mb0">�ʤ��������ϡ��ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�̵�����פ򤪴ꤤ�������ޤ���</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a03">3.WordPress�򿷵����󥹥ȡ���</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ���󥹥ȡ���פ��WordPress�򥤥󥹥ȡ��뤷�ޤ���<br>
                                                            ���󥹥ȡ�����ˡ�ξܺ٤ϥޥ˥奢���<a href="man_install_auto_word.php">��ñ���󥹥ȡ��� > WordPress ���ܸ���</a>�פ򤴻��Ȳ�������
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a04">4.WordPress�δ������̤إ�����</h4>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ʋ�������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</h4>
                                                    <div class="box_body">
                                                        <p>��¦�Υ�˥塼���֥ץ饰���� > ���󥹥ȡ���Ѥߥץ饰����פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp2.png?date=2410" alt="�֥ץ饰���� > ���󥹥ȡ���Ѥߥץ饰����פ򥯥�å�"></p>

                                                        <p>�ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�ͭ�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp3.png?date=2410" alt="��TypeSquare Webfonts for ���å��������С��פ��ͭ������"></p>

                                                        <div class="msg msg_notice">
                                                            <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ץ饰���󤬥��󥹥ȡ��뤵��Ƥ��ʤ����</h4>
                                                            <div class="msg_body">
                                                                <p class="mb0">��WordPress�����Ȥ򤹤Ǥ˱�����ξ��׼��Ρ�<a href="#link-b04">4.�ץ饰����򿷵��ɲ�</a>�פ����<a href="#link-b05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</a>�פ򤴻��Ȥξ塢�ץ饰������ɲä�ԤäƤ���������</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-a06">6.�ե���ȥơ��ޤ�����</h4>
                                                    <div class="box_body">
                                                        <p>��¦�Υ�˥塼���ɲä���Ƥ����TypeSquare Webfonts�פ򥯥�å������ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ֥ե���ȥơ��ޤ򹹿�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="��TypeSquare Webfonts�פ򥯥�å�"></p>
                                                        <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>�ե���ȥơ��ޤΰ����ϡ�<a href="#link-f">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                    </div>
                                                </section>


                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">WordPress�����Ȥ򤹤Ǥ˱�����ξ��</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b01">1.��Web�ե��������פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png?date=2410" alt="��Web�ե��������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b02">2.���ꤹ��ɥᥤ�������</h4>
                                                    <div class="box_body">
                                                        <p>��Web�ե����������ɲáפ򥯥�å������֥����ȡפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡��ɲä���ץܥ��󥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png?date=2410" alt="Web�ե���Ȥ����ꤹ��ɥᥤ������򤷡����ɲä���ץܥ���򥯥�å�"></p>
                                                        <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                                <p>�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                                <p class="mb0">�ʤ��������ϡ��ץ饰�����TypeSquare Webfonts for ���å��������С��פΡ�̵�����פ򤪴ꤤ�������ޤ���</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b03">3.WordPress�δ������̤إ�����</h4>
                                                    <div class="box_body">
                                                        <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ʋ�������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b04">4.�ץ饰����򿷵��ɲ�</h4>
                                                    <div class="box_body">
                                                        <p>��¦�Υ�˥塼���֥ץ饰���� > �����ɲáפ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp5.png?date=2410" alt="�֥ץ饰���� > �����ɲáפ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b05">5.�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ����</h4>
                                                    <div class="box_body">
                                                        <p>
                                                            �ץ饰�����TypeSquare Webfonts for ���å��������С��פ򸡺��ܥå�����긡�������ֺ��������󥹥ȡ���פ򥯥�å����Ƥ���������<br>
                                                            ���󥹥ȡ��봰λ�塢�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�ͭ�������Ʋ�������
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp10.png?date=2410" alt="�ֺ��������󥹥ȡ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b06">6.�ե���ȥơ��ޤ�����</h4>
                                                    <div class="box_body">
                                                        <p>��¦�Υ�˥塼���ɲä���Ƥ����TypeSquare Webfonts�פ򥯥�å������ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ֥ե���ȥơ��ޤ򹹿�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="��TypeSquare Webfonts�פ򥯥�å�"></p>
                                                        <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>�ե���ȥơ��ޤΰ����ϡ�<a href="#link-f">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                    </div>
                                                </section>


                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <section id="link-c" class="section">
                                        <div class="section_body">
                                            <h4 class="section_ttl">�ץ饰����С������1.2�����λȤ���</h4>
                                            <div class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>���������</h6>
                                                <div class="msg_body">
                                                    <p>���˥ץ饰�����TypeSquare Webfonts for ���å��������С��פ򥤥󥹥ȡ��뤷��ͭ��������Ƥ����������Τ�����Ȥʤ�ޤ���</p>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-c01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                                <div class="block_body">
                                                    <p>���������Τ˥ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPress�δ������̤إ�����</h5>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.�ե���ȥơ��ޤ�����</h5>
                                                            <div class="box_body">
                                                                <p>�ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ֥ե���ȥơ��ޤ򹹿�����פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp4.png?date=2410" alt="�֥ե���ȥơ��ޤ򹹿�����פ򥯥�å�"></p>
                                                                <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>
                                                                    �ե���ȥơ��ޤΰ����ϡ�<a href="#link-f">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-c02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</h4>
                                                <div class="block_body">
                                                    <p>Web�ե���Ȥ�ͳ���Ȥ߹�碌�ơ����ꥸ�ʥ�Υơ��ޤ��뤳�Ȥ��Ǥ��ޤ���������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPress�δ������̤إ�����</h5>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.Web�ե���Ȥ�����</h5>
                                                            <div class="box_body">
                                                                <p>�ե���ȥơ��ޤΥץ�������˥塼����ֿ������ơ��ޤ��������פ����򤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp6.png?date=2410" alt="�ֿ������ơ��ޤ��������פ�����"></p>
                                                                <p>Ǥ�դΥơ��ޥ����ȥ�����ꤷ���֥����ȥ�ס֥꡼�ɡס���ʸ�ס������פΥץ�������˥塼������Ѥ������ե���Ȥ򤽤줾�����򤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp7.png?date=2410" alt="���Ѥ������ե���Ȥ򤽤줾������"></p>
                                                                <p>�����Ѥ�WordPress�ơ��ޤˤ�äƤϡ����������ȥ롦���������åȥ����ȥ�ʤɤ˥ե���ȥơ��ޤ�Ŭ�Ѥ���ʤ���礬����ޤ���<br>
                                                                    ���κݤϰʲ��Ρ֥ե�������ꥯ�饹�׵�ǽ�����Ѥ���������</p>
                                                                <div class="msg msg_notice" id="link-c2_font">
                                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ե�������ꥯ�饹�ˤĤ���</h6>
                                                                    <div class="msg_body">
                                                                        <p>�־��Ը����������ޥ����פΡ֥ե�������ꥯ�饹�פǤϡ�Web�ե���Ȥ�Ŭ�Ѥ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp8.png?date=2410" alt="��HTML�����פ���ӡ�class°���פ�����"></p>
                                                                        <p>�ʤ����֥ե�������ꥯ�饹�פϾ��Ը���������Ȥʤ�ޤ���<br>
                                                                            WordPress�����˴���Ƥ��ʤ�����HTML/CSS���μ����ʤ����˴ؤ��Ƥϡ�������ѹ����ʤ��Ƥ����ꤢ��ޤ���</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-c03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                                <div class="block_body">
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPress�δ������̤إ�����</h5>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.�������ޥ���������</h5>
                                                            <div class="box_body">
                                                                <p>�־��Ը����Υ������ޥ����פ򥯥�å������ָ��̵����ե��������פΡ�ͭ��������ץ����å��ܥå����˥����å�������ơ��ָ��̵����ե��������򹹿�����פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp9.png?date=2410" alt="�ָ��̵����ե��������򹹿�����פ򥯥�å�"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="link-d" class="section">
                                        <div class="section_body">
                                            <h3 class="section_ttl">�ץ饰����С������2.0�ʹߤλȤ���</h3>
                                            <div class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ץ饰����С������2.0�ؤΥС�����󥢥åפ˴ؤ���</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li class="mb10">�ץ饰����ΥС�����󥢥å׸塢�֥饦������å��夬�ĤäƤ���ȥץ饰���������ɽ������ʤ���礬����ޤ��� ���κݤϥ���å���������Ƥ�����٥ڡ������ɤ߹���Ǥ���������</li>
                                                        <li>�С������1.2������<a href="#link-c2_font">�ե�������ꥯ�饹</a>��ǽ�ϡ�<a href="#link-d2_font">ľ�ܻ���ʾ��Ը�����</a>��ǽ�˥�˥塼���뤵��ޤ����� �С�����󥢥åפ���ȡ������ե�������ꥯ�饹��ǽ�����ꤷ�Ƥ������Ƥϥ��ꥢ����ޤ��ΤǤ���դ���������</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-d01">���������Τ˥ե���ȥơ��ޤ����ꤹ��</h4>
                                                <div class="block_body">
                                                    <p>���������Τ˥ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPress�δ������̤إ�����</h5>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.�����˥塼������</h5>
                                                            <div class="box_body">
                                                                <p>����Ƶ����ե��������פΥ�󥯤򥯥�å����ơֶ��̥ơ��޻���פ˥����å�������Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_1.png?date=2410" alt="�ֶ��̥ơ��޻���פ˥����å�"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">3.�ե���ȥơ��ޤ�����</h5>
                                                            <div class="box_body">
                                                                <p>�ե���ȥơ��ޤΥץ�������˥塼����ơ��ޤ����򤷤ơ���ƥե�����������¸����פ򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_2.png?date=2410" alt="����ƥե�����������¸����פ򥯥�å�"></p>
                                                                <p>WordPress�����Ȥ�Web�ե���Ȥ�Ŭ�Ѥ���Ƥ�������괰λ�Ǥ���<br>
                                                                    �ե���ȥơ��ޤΰ����ϡ�<a href="#link-f">�ե���ȥơ��ް���</a>�פ򤴻��Ȥ���������</p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-d02">���ꥸ�ʥ�Υե���ȥơ��ޤ��������</h5>
                                                <div class="block_body">
                                                    <p>Web�ե���Ȥ�ͳ���Ȥ߹�碌�ơ����ꥸ�ʥ�Υơ��ޤ��뤳�Ȥ��Ǥ��ޤ���������ä��ǥ�����ˤ��������ʤɤˤ�������Ǥ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h5 class="box_ttl">1.WordPress�δ������̤إ�����</h5>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h5 class="box_ttl">2.��������ơ��ޤ�����</h5>
                                                            <div class="box_body">
                                                                <p>�֥�������ơ����Խ��פΥ�󥯤򥯥�å����Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_3.png?date=2410" alt="�֥�������ơ����Խ��פΥ�󥯤򥯥�å�"></p>
                                                                <p>Ǥ�դΥơ��ޥ����ȥ�����ꤷ���ָ��Ф��ס֥꡼�ɡס���ʸ�ס������פΥץ�������˥塼������Ѥ������ե���Ȥ򤽤줾�����򤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_4.png?date=2410" alt="���Ѥ������ե���Ȥ򤽤줾������"></p>
                                                                <p>�ֶ��̥ơ��޻���פΥץ�������˥塼�ǡ����������ơ��ޤ�����Ǥ��ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_5.png?date=2410" alt="���������ơ��ޤ�����"></p>
                                                                <p>�����Ѥ�WordPress�ơ��ޤˤ�äƤϡ����������ȥ롦���������åȥ����ȥ�ʤɤ˥ե���ȥơ��ޤ�Ŭ�Ѥ���ʤ���礬����ޤ���<br>
                                                                    ���κݤϰʲ��Ρ�ľ�ܻ���׵�ǽ�����Ѥ���������</p>
                                                                <div class="msg msg_notice" id="link-d2_font">
                                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ľ�ܻ���ʾ��Ը����ˤˤĤ���</h6>
                                                                    <div class="msg_body">
                                                                        <p>����Ƶ����ե��������פΡ�ľ�ܻ���ʾ��Ը����ˡפǤϡ�Web�ե���Ȥ�Ŭ�Ѥ����HTML�����פ���ӡ�class°���פ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                                                        <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_6.png?date=2410" alt="��HTML�����פ���ӡ�class°���פ�����"></p>
                                                                        <p>�ʤ�����ľ�ܻ���ʾ��Ը����ˡפϾ��Ը���������Ȥʤ�ޤ���<br>
                                                                            WordPress�����˴���Ƥ��ʤ�����HTML/CSS���μ����ʤ����˴ؤ��Ƥϡ�������ѹ����ʤ��Ƥ����ꤢ��ޤ���</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h5 class="block_ttl" id="link-d03">�������Ȥ˥ե���ȥơ��ޤ����ꤹ��</h5>
                                                <div class="block_body">
                                                    <p>���̤���Ƥ��Ȥ����ꤷ���ե���ȥơ��ޤ�Ŭ�Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h4 class="box_ttl">1.WordPress�δ������̤إ�����</h4>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h4 class="box_ttl">2.�����˥塼������</h4>
                                                            <div class="box_body">
                                                                <p>����Ƶ����ե��������פΥ�󥯤򥯥�å����ơָ��̥ơ��޻���פ˥����å�������Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_7.png?date=2410" alt="�ָ��̥ơ��޻���פ˥����å��������"></p>
                                                                <p>WordPress��Ʋ��̤ˡ��ե���ȥơ��ޤ����Ǥ��뵡ǽ��ɽ������ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_8.png?date=2410" alt="�ե���ȥơ��ޤ����Ǥ��뵡ǽ��ɽ��"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>

                                            <div class="block">
                                                <h4 class="block_ttl" id="link-d04">�����ȥե��������ʥС������2.0�ʹߤο���ǽ��</h4>
                                                <div class="block_body">
                                                    <p>�����ȤΥ����ȥ�䥭��å����ԡ��ˡ����̤ǥե���Ȥ����ꤹ�뤳�Ȥ��Ǥ��ޤ���</p>
                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h4 class="box_ttl">1.WordPress�δ������̤إ�����</h4>
                                                            <div class="box_body">
                                                                <p>�桼����̾���ѥ���ɤ����Ϥ���WordPress�δ������̤˥����󤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp1.png?date=2410" alt="WordPress�δ������̤˥�����"></p>
                                                            </div>
                                                        </section>
                                                        <section class="box">
                                                            <h4 class="box_ttl">2.�����ȥե���Ȥ�����</h4>
                                                            <div class="box_body">
                                                                <p>�ƹ��ܤ����Ѥ������ե���Ȥ����򤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/man_server_webfont_wp_v2_9.png?date=2410" alt="���Ѥ������ե���Ȥ�����"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!-- /.serial-box -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="link-e" class="section">
                                        <h4 class="section_ttl">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</h4>
                                        <div class="section_body">
                                            <p>Web�ե���Ȥ�Ŭ�Ѥ�������ˤϡ��ʲ��κ�Ȥ��˹ԤäƤ���������</p>
                                            <ol class="ol ol_margin">
                                                <li>�ץ饰�����TypeSquare Webfonts for ���å��������С��פ�̵�����ˤ��Ƥ���������</li>
                                                <li>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�ע͡�Web�ե��������פ��ɥᥤ�����Ͽ�������Ƥ���������</li>
                                            </ol>
                                            <p>�ʾ�κ�Ȥ�Ԥä��塢Web�ե���Ȥ�Ŭ�Ѥ�����Ƥ��뤫����ǧ����������</p>
                                        </div>
                                    </section>

                                    <section id="link-f" class="section">
                                        <h4 class="section_ttl">[����]�ե���ȥơ��ް���</h4>
                                        <div class="section_body">

                                            <table class="primaryTableL table">
                                                <thead>
                                                <tr>
                                                    <th>�ơ���̾</th>
                                                    <th>���Ф�</th>
                                                    <th>�꡼��</th>
                                                    <th>��ʸ</th>
                                                    <th>����</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>�١����å�</th>
                                                    <td>���� B</td>
                                                    <td>���� B</td>
                                                    <td>���� R</td>
                                                    <td>���� B</td>
                                                </tr>
                                                <tr>
                                                    <th>��������å���</th>
                                                    <td>���Х�MB31</td>
                                                    <td>���Х�MB31</td>
                                                    <td>TBUD�����å� R</td>
                                                    <td>TBUD�����å� E</td>
                                                </tr>
                                                <tr>
                                                    <th>�����奢��</th>
                                                    <td>���Ѥˤ��ߴݥ����å� B</td>
                                                    <td>�ݥե����� M</td>
                                                    <td>�ȡ�����</td>
                                                    <td>���Ѥˤ��ߴݥ����å� B</td>
                                                </tr>
                                                <tr>
                                                    <th>�˥塼��</th>
                                                    <td>��奦�ߥ� B-KL</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                    <td>�եߥ� M</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>�ӥ��ͥ�</th>
                                                    <td>��奦�ߥ� B-KL</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                    <td>TBUD�����å� R</td>
                                                    <td>TBUD�����å� E</td>
                                                </tr>
                                                <tr>
                                                    <th>�ե��å����</th>
                                                    <td>�ݥե����� M</td>
                                                    <td>�ݥե����� M</td>
                                                    <td>���� R</td>
                                                    <td>���� B</td>
                                                </tr>
                                                <tr>
                                                    <th>���쥬���</th>
                                                    <td>A1��ī</td>
                                                    <td>A1��ī</td>
                                                    <td>�եߥ� M</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>����</th>
                                                    <td>A1��ī</td>
                                                    <td>���ޤʤ�</td>
                                                    <td>��奦�ߥ� R-KL</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>�ݥå�</th>
                                                    <td>�֤�ä���</td>
                                                    <td>�֤�ä���</td>
                                                    <td>����� 501</td>
                                                    <td>G2���󥻥��-B</td>
                                                </tr>
                                                <tr>
                                                    <th>���ߥ���</th>
                                                    <td>���� ����ɥ�</td>
                                                    <td>���� ����ɥ�</td>
                                                    <td>����� 501</td>
                                                    <td>G2���󥻥��-B</td>
                                                </tr>
                                                <tr>
                                                    <th>����</th>
                                                    <td>�����餮����</td>
                                                    <td>���ޤʤ�</td>
                                                    <td>��奦�ߥ� R-KL</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>�Ϥ�ʤ�</th>
                                                    <td>���</td>
                                                    <td>���</td>
                                                    <td>�եߥ� M</td>
                                                    <td>��奦�ߥ� B-KL</td>
                                                </tr>
                                                <tr>
                                                    <th>����</th>
                                                    <td>���ʽ�ICA M</td>
                                                    <td>�����餮����</td>
                                                    <td>�����餮����</td>
                                                    <td>���ʽ�ICA M</td>
                                                </tr>
                                                <tr>
                                                    <th>�ʥ�����</th>
                                                    <td>�Ϥ�ҳر�</td>
                                                    <td>�Ϥ�ҳر�</td>
                                                    <td>���ͥޥ쥿��</td>
                                                    <td>�� B</td>
                                                </tr>
                                                <tr>
                                                    <th>��ȥ�</th>
                                                    <td>���Ѥˤ��ߴݥ����å� B</td>
                                                    <td>���ͥޥ쥿��</td>
                                                    <td>�ȡ�����</td>
                                                    <td>����� 501</td>
                                                </tr>
                                                <tr>
                                                    <th>�ۥ顼</th>
                                                    <td>TB�Ű���</td>
                                                    <td>TB�Ű���</td>
                                                    <td>Φ��</td>
                                                    <td>Φ��</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>

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