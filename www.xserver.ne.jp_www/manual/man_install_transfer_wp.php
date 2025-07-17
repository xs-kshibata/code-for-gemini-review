<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress��ñ�ܹ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�WordPress��ñ�ܹԡ׵�ǽ�˴ؤ��뤴����Ǥ������Ǥ˥��å��������С��ʳ��Ǳ������WordPress�򡢥������������Ϥ�������ǥ��å��������С��˴�ñ�˰ܹԤ��뤳�Ȥ���ǽ�Ǥ���">

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

                <h3 class="sub-ttl">WordPress��ñ�ܹ�</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">�����Ѿ�����</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">ư���׷�</a></li>
                                        <li><a href="#link-previous-a02">�ܹԸ��WordPress�С������ˤĤ���</a></li>
                                        <li><a href="#link-previous-a03">�ܵ�ǽ�ǰܹԤ����ǡ������ܹԤ���ʤ��ǡ����ˤĤ���</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-b">WordPress�ΰܹ�</a>
                                    <ul>
                                        <li><a href="#link-previous-b09">1.�ʻ��������ˡ֥ɥᥤ������פˤưܹ���Υɥᥤ��̾���ɲ�</a></li>
                                        <li><a href="#link-previous-b01">2.��WordPress��ñ�ܹԡפ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">3.��WordPress�ܹԾ������ϡפ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b03">4.�ܹԤ�����WordPress�ξ�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b04">5.�������Ƥ��ǧ�����ְܹԤ򳫻Ϥ���פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b05">6.�ܹԽ����μ¹���</a></li>
                                        <li><a href="#link-previous-b06">7.�ֳ�ǧ�פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b07">8.�ǡ����ܹԴ�λ</a>
                                            <ul>
                                                <li><a href="#link-previous-b11">�����ǧ����</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#link-previous-b10">9.��ɬ�פ˱����ơ˥͡��ॵ���С��ѹ�����ư���ǧ</a></li>
                                        <li><a href="#link-previous-b08">10.�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">���顼�ˤĤ���</a></li>
                                <li><a href="#link-previous-d">WordPress��ñ�ܹԤκ�����</a>
                                    <ul>
                                        <li><a href="#link-previous-d01">1.��WordPress��ñ�ܹԡפ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d02">2.����������ɥᥤ��̾������</a></li>
                                        <li><a href="#link-previous-d03">3.�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d04">4.�ֺ������פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-d05">5.�����λ</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress��ñ�ܹԤ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <p>�ܵ�ǽ�ϡ�¾�ҥ����С�����Υ����Ȱ�ž�䡢�������Wordpress���̤�URL���ѹ����������ʤɤˤ����Ѥ��������ޤ���</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�����Ѿ�����</h4>
                                <div class="section_body">
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�͡��ॵ���С��ˤĤ���</h6>
                                        <div class="msg_body">
                                            <p>
                                                �ܹԤ���ɥᥤ��Υ͡��ॵ���С��ϡ��ܹԺ�Ȥδ�λ����ѹ����Ƥ���������<br>
                                                �ܹԺ�Ȥδ�λ���˥͡��ॵ���С����ѹ�����ȡ��ܹԵ�ǽ�¹Ի��˥��顼��ȯ�����뤪����䡢���Ū�˥����Ȥ�ɽ������ʤ��ʤ뤪���줬����ޤ���
                                            </p>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��ñ�ܹԤ�ʣ����¹Ԥ�����ˤĤ���</h6>
                                        <div class="msg_body">
                                            <p>
                                                �֥������Բ�����¡פ�ON�ˤ������֤�WordPress��ñ�ܹԤ�ʣ����¹Ԥ���ȡ����顼��ȯ�����ޤ���
                                            </p>
                                            <p>
                                                ʣ����WordPress���ž������ϡ�30ʬ�ʾ���֤�����Ƥ���¹Ԥ��롢�⤷���ϡ֥������Բ�����¡פ�OFF�ˤ������֤Ǽ¹Ԥ��Ƥ���������
                                            </p>
                                        </div>
                                    </aside>

                                    <h5 class="block_ttl mt50" id="link-previous-a01">ư���׷�</h5>
                                    <ul class="ul mb50">
                                        <li>WordPress�ΥС������ 4.2 �� 6.8 �Ǥ��뤳��</li>
                                        <li>PHP�ΥС������7.2�ʾ�Ǥ��뤳��</li>
                                        <li>�ܹԸ���WordPress���ʲ������ƤϤޤ��硢���顼�Ȥʤ�ޤ���
                                            <ul class="ul mb0">
                                                <li>�ޥ�������ȵ�ǽ����Ѥ��Ƥ�����</li>
                                                <li>�ǡ����١��������̤�2GB��Ķ���Ƥ�����</li>
                                                <li>WordPress.com����ΰܹԤǤ�����</li>
                                                <li>��PHP����tar��zip���ޥ�ɤΤ�����������Բġפ��ġ�PHP��zip�⥸�塼�뤬�����Բġפξ��</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <h5 class="block_ttl" id="link-previous-a02">�ܹԸ��WordPress�С������ˤĤ���</h5>
                                    <p class="mb50">WordPress�Υޥ��ʡ��С�����󤬺ǿ��Τ�Τؤȹ�������ޤ���</p>

                                    <h5 class="block_ttl" id="link-previous-a03">�ܵ�ǽ�ǰܹԤ����ǡ������ܹԤ���ʤ��ǡ����ˤĤ���</h5>
                                    <dl class="dl mb50">
                                        <dt><i class="ico ico_square-fill"></i>���꤬�ܹԤ����ǡ���</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>/wp-content �ե���������֤���Ƥ���ǡ���
                                                    <br>�ʥ��åץ��ɤ��������ե������ץ饰���󡦥ơ��ޥե���������</li>
                                                <li>�ǡ����١�����Υǡ����ʵ����ǡ�����Ƽ������</li>
                                            </ul>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>���꤬�ܹԤ���ʤ��ǡ���</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>��ž�������֤���Ƥ����.htaccess�ץե�����</li>
                                                <li>/wp-content �ե���������֤���Ƥ���ǡ����Τ������Хå����å״�Ϣ�ץ饰����ˤ�ä��������줿�ǡ���</li>
                                                <li>/wp-content �ʳ������֤���Ƥ���ǡ�����ץ饰��������ʢ���</li>
                                                <li>WordPress�����ι�¤���ѹ����Ƥ�����ʢ���</li>
                                            </ul>
                                            <br>
                                            <p style="padding-left: 14px; text-indent: -14px;">���������ޥ�����Ϣ�Υץ饰�����Ϥ��ᡢ�������ƥ���Ϣ�Υץ饰����䥭��å����Ϣ�Υץ饰��������Ѥξ�硢�����˳��������ǽ��������ޤ���</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>

                            <div class="manual-youtube-box">
                                <p>ư��Ǥ�������ˡ�ˤĤ����������Ƥ���ޤ��Τǡ�������Ǥ⤴��ǧ���������ޤ���</p>
                                <div class="manual-youtube">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/cjE-xooglMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPress�ΰܹ�</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-b09" class="box_ttl">1.�ʻ��������ˡ֥ɥᥤ������פˤưܹ���Υɥᥤ��̾���ɲ�</h6>
                                            <div class="box_body">
                                                <p>��WordPress��ñ�ܹԡ׵�ǽ�����Ѥ���Ω�����ܹ�������Ѥ���ɥᥤ��̾���<a href="man_domain_setting.php">�ɥᥤ������</a>�פ������ꤷ�Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b01" class="box_ttl">2.��WordPress��ñ�ܹԡפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ�ܹԡפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_top.png" alt="��WordPress��ñ�ܹԡפ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b02" class="box_ttl">3.��WordPress�ܹԾ������ϡפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>��WordPress�ܹԾ������ϡפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_selecttab.png" alt="��WordPress��ñ�ܹԡפ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b03" class="box_ttl">4.�ܹԤ�����WordPress�ξ�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�ܹԤ�����WordPress�ξ�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_input.png" alt="��WordPress�ܹԾ������ϡפ򥯥�å�"></p>
                                                <table class="table table_use-caption">
                                                    <caption>���Ϲ���</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>�ܹԸ�URL</th>
                                                            <td>
                                                                �ܹԸ���URL�����Ϥ��Ƥ���������<br>
                                                                ��https�פ����򤷤���硢�ܹ����URL���https�פ���Ϥޤ��ΤȤʤ�ޤ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ܹԸ�WordPress�Υ桼����̾</th>
                                                            <td>�ܹԸ���WordPress�ؤΥ�����������Ѥ��Ƥ����桼����̾�����Ϥ��Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ܹԸ�WordPress�Υѥ����</th>
                                                            <td>�ܹԸ���WordPress�ؤΥ�����������Ѥ��Ƥ����ѥ���ɤ����Ϥ��Ƥ���������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>�ܹ����URL�����Ϥ��Ƥ���������<br>
                                                                <ul class="ul">
                                                                    <li>�֥ɥᥤ������פ�������ꤷ�Ƥ���ɥᥤ��̾���椫�����򤷤Ƥ���������</li>
                                                                    <li>�ɥᥤ��ľ�������֤��������ϡ����֥ե�����ˤϲ������Ϥ���������Ȥ��Ƥ���������</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��https�פ���Ϥޤ�WordPress�����ȤΰܹԤˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>��https�פ���Ϥޤ�URL��WordPress�����Ȥ�ܹԤ����硢
                                                           <br>SSL������ȯ�ԤΤ��ᡢ�ܹԸ������Ȥǰ���ե����뤬��������ޤ���
                                                           <br>���ξ��ˤ⡢���Ǥ˱������WordPress�����Ȥ�ư��˱ƶ��Ϥ���ޤ���</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b04" class="box_ttl">5.�������Ƥ��ǧ�����ְܹԤ򳫻Ϥ���פ򥯥�å�</h6>

                                            <div class="box_body">
                                                <p>�������Ƥ��ǧ�������Ƥ����꤬�ʤ���СְܹԤ򳫻Ϥ���פ򥯥�å����Ƥ���������
                                                   <br>�ܹԽ��������Ϥ���ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_confirm.png" alt="�������Ƥ��ǧ�����ְܹԤ򳫻Ϥ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b05" class="box_ttl">6.�ܹԽ����μ¹���</h6>

                                            <div class="box_body">
                                                <p>�ܹԽ����μ¹���ϡ������β��̤�ɽ������ޤ����¹���Υ���󥻥�ϤǤ��ޤ���
                                                    <br>�ޤ������̤��Ĥ��Ƥ�ܹԽ����Ϸ�³���ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_notend.png" alt="�ܹԽ����μ¹���"></p>
                                                <table class="table table_use-caption">
                                                    <tbody>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>�ܹ����URL��ɽ������ޤ���<br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>�ܹԥ��ơ�����</th>
                                                            <td>�ܹԤοʹԾ�����ɽ������ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>WordPress��ñ�ܹԤ�Ԥ��ȡ���ž��WordPress��˰�ž�ѥץ饰�����XServer Migrator�פ����󥹥ȡ��뤵��ޤ���������˰ܹԤ���λ����м�ưŪ�˺������ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b06" class="box_ttl">7.�ֳ�ǧ�פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�ܹԽ�������λ����ȡ��ֳ�ǧ�ץܥ���ɽ������ޤ��Τǡ��ֳ�ǧ�פ򥯥�å����ޤ���
                                                   <br>�ʾ�ǰܹԺ�Ȥϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_end.png" alt="�ֳ�ǧ�פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b07" class="box_ttl">8.�ǡ����ܹԴ�λ</h6>
                                            <div class="box_body">
                                                <p>�������̤˰ܹԤ���WordPress�ξ���ɽ������ޤ���</p>

                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_list.png" alt="�ܹԴ�λ"></p>

                                                <table class="table table_use-caption">
                                                    <tbody>
                                                        <tr>
                                                            <th>���ơ�����</th>
                                                            <td>�ܹԤοʹԾ�����ɽ������ޤ���<br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>URL</th>
                                                            <td>�ܹ����URL��ɽ����</td>
                                                        </tr>
                                                        <tr>
                                                            <th>��������URL</th>
                                                            <td>�ܹ���WordPress�δ������̡ʥ��å���ܡ��ɡˤ�URL��<br>
                                                                �ܹԸ������Ѥ��Ƥ����֥桼����̾���ѥ���ɡפǥ����󤬲�ǽ�Ǥ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>MySQL�ǡ����١���</th>
                                                            <td>�ܹ���WordPress�����Ѥ��Ƥ���MySQL�ǡ����١���̾��</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�͡��ॵ���С����ѹ�</th>
                                                            <td>ɽ������Ƥ����硢�͡��ॵ���С����ѹ�����ɬ�פ�����ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="section">
                                                    <h5 class="block_ttl" id="link-previous-b11">�����ǧ����</h5>
                                                    <p>�ְܹԼ¹ԥ��פΥ��֤򥯥�å�����ȡ��ܹ����ƤΥ�����ǧ�Ǥ��ޤ���</p>

                                                    <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_logend.png" alt="�����ǧ����"></p>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b10" class="box_ttl">9.��ɬ�פ˱����ơ˥͡��ॵ���С��ѹ�����ư���ǧ</h6>
                                            <div class="box_body">
                                                <p>���Ȥ��Υѥ�����Ρ�hosts�ץե�������Խ����뤳�Ȥǡ��͡��ॵ���С����ڤ��ؤ�����ư���ǧ���Ǥ���褦�ˤʤ�ޤ���<br>
                                                    �ܺ٤ϡ��ޥ˥奢���<a href="man_domain_checkproxy.php#link-previous-b">hosts�ե�������Խ����Ƴ�ǧ������ˡ</a>�פ򤴻��Ȥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-b08" class="box_ttl">10.�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</h6>
                                            <div class="box_body">
                                                <ol class="ol mb0">
                                                    <li>
                                                        <p class="font-bold">�͡��ॵ���С����ѹ�</p>
                                                        <p>�������å��������С��Υ͡��ॵ���С����ѹ����Ƥ���������<br>
                                                            ���ҤǴ������Ƥ���ɥᥤ���<a href="man_domain_namesever_setting.php#link-previous-b">�͡��ॵ���С����ѹ�</a>��XServer�����������Ρ֥ɥᥤ��ѥͥ�פ���ѹ���ǽ�Ǥ���</p>
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
                                                            <li>���͡��ॵ���С��ѹ��塢������֡ʺ���24���֤ۤɡˤ�Фơ������˥����С����ܹԤ���ޤ���</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">�����Ȥ�ư���ǧ</p>
                                                        <p class="mb20">WordPress�����Ȥؤȥ���������������ʤ�ɽ����ư��Ƥ���褦�Ǥ���С��ܹԺ�Ȥϴ�λ�Ǥ���</p>
                                                    </li>
                                                    <li>
                                                        <p class="font-bold">�ѡ��ޥ������ˤĤ���</p>
                                                        <p class="">�����ǡ����إ����������褦�Ȥ���ȡ�404���顼�٤�ȯ�������硢�������ǥѡ��ޥ�������ԤäƤ���������</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ѡ��ޥ�󥯤�������</dt>
                                                            <dd>
                                                                <ol class="ol mb0">
                                                                    <li>���å���ܡ��ɤإ����󤷤Ƥ�������</li>
                                                                    <li>��¦��˥塼�Ρ�����פ��֥ѡ��ޥ������פ򥯥�å����Ƥ�������</li>
                                                                    <li>�������Ƥ��ѹ������˲��̲����Ρ��ѹ�����¸�ץܥ���򥯥�å����Ƥ�������</li>
                                                                    <li>WordPress�غ��٥�������������Ƥ���Ƥ��뵭���򥯥�å������ݤε�ư�򤴳�ǧ��������</li>
                                                                </ol>
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">���顼�ˤĤ���</h4>
                                <p>���顼��ȯ��������硢���Τ褦���б����Ƥ���������</p>
                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>�����󥨥顼</dt>
                                    <dd>�ܹԸ�WordPress�Υ��å���ܡ��ɤؤΥ�����˼��Ԥ��Ƥ����ǽ��������ޤ���
                                        <br>�桼����̾�ȥѥ���ɤ˸�꤬�ʤ����Ȥ��ǧ����Basicǧ�ڤ��ܥå�ǧ�ڤ�ͭ���ʾ��ϲ�����Ƥ���������</dd>
                                    <dd>�ޤ����嵭�����ƤϤޤ�ʤ����ϡ֥������Բ�����¡פ�ON�ˤ������֤�Wordpress��ñ�ܹԤ�ʣ����¹Ԥ��Ƥ����ǽ��������ޤ���
                                        <br>���¤�24���ַв��˲������ޤ��ΤǤ��Ԥ���������������<a href="man_server_wpsecurity.php#link-previous-c">�������Բ����������</a>�פ������ƺ��ټ¹Ԥ��Ƥ���������</dd>
                                    <dt><i class="ico ico_square-fill"></i>PHP�С�����󥨥顼</dt>
                                    <dd>�ܹԸ������С���PHP�С�����󤬡����ݡ����оݳ��ΥС������Ǥ���
                                        <br>�ܵ�ǽ�����ݡ��Ȥ���PHP�С������ϡ�PHP5.3�ʹߤǤ���
                                        <br>PHP�ΥС�������5.3�ʹߤ��ѹ��Ǥ������PHP�С��������ѹ�����WordPress�������ư��뤳�Ȥ��ǧ���������ǡ�����ưܹԺ�Ȥ�ԤäƤ���������</dd>
                                    <dt><i class="ico ico_square-fill"></i>WordPress�С�����󥨥顼</dt>
                                    <dd>�ܹԸ�WordPress�ϡ����ݡ����оݳ��ΥС������Ǥ���
                                        <br>���ݡ����оݤΥС������ϰʲ����̤�Ǥ���
                                        <br>4.2��6.8</dd>
                                    <dt><i class="ico ico_square-fill"></i>�����ॢ����</dt>
                                    <dd>�ܹԸ������С��Ȥ��̿��˼��Ԥ��Ƥ����ǽ��������ޤ���
                                        <br>���֤�����Ƥ⤦���٤����������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������<br>
                                        <br>
                                        �ޤ����ܹ��ѥǡ����ե�����κ����˻��֤������ꤹ���ƥ����ॢ���Ȥ��Ƥ����ǽ����ͤ����ޤ���<br>
                                        �ܹԸ�WordPress��wp-content�ǥ��쥯�ȥ�������̤���ü���礭�����ʤɤ�ȯ�����뤿�ᡢ���פʥե�����(�Хå����åץǡ�����)�����������̤򸺤餷�Ƥ�����٤������������</dd>
                                    <dt><i class="ico ico_square-fill"></i>SSL̤ȯ��</dt>
                                    <dd>�ܹԽ����ϴ�λ���Ƥ��ޤ�����SSL�������ȯ�Ԥ˼��Ԥ��Ƥ��ޤ���
                                        <br>�ɥᥤ��Υ͡��ॵ���С����ѹ������Τ�����<a href="man_server_ssl.php">SSL����</a>�פ����̤�SSL�������ȯ�Ԥ��Ƥ���������</dd>
                                    <dt><i class="ico ico_square-fill"></i>�ץ饰����ͭ�������顼</dt>
                                    <dd>�ܹԸ�WordPress�ؤΰܹ��ѥץ饰����Υ��󥹥ȡ���ޤ���ͭ�����˼��Ԥ��Ƥ����ǽ��������ޤ���<br>
                                        �����Ȥ��ƹͤ�����ʲ��ι��ܤˤĤ��Ƥ���ǧ����������<br>
                                        <ul class="ul">
                                            <li>�ܹԸ�URL�ˤϥ��å���ܡ��ɤΰ�������ǳ�ǧ�Ǥ����WordPress ���ɥ쥹 (URL)�פ���ꤷ�Ƥ���������</li>
                                            <li>http��https�δְ㤤����դ��Ƥ���������</li>
                                            <li>���Ѥ��Ƥ���WordPress�桼�����������ԤǤϤʤ���硢�����Ը��¤���ĥ桼���������Ѥ��Ƥ���������</li>
                                            <li>�ܹԸ�WordPress��wp-config.php�ե��������define('DISALLOW_FILE_MODS', true);�ε��ܤ������硢���������Ǻ��٤������������</li>
                                        </ul>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>�С���������������顼</dt>
                                    <dd>�ܹԸ�����ΥС���������μ����˼��Ԥ��ޤ�����<br>
                                        �ܹ��ѥץ饰����������ư��Ƥ��ʤ���ǽ�������뤿�ᡢ���ݡ��Ȥؤ��䤤��碌��������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������</dd>
                                    <dt><i class="ico ico_square-fill"></i>�ǡ����١����Хå����å׼���</dt>
                                    <dd>�ܹԸ�WordPress�ǤΥǡ����١����ΥХå����åפ˼��Ԥ��ޤ�����<br>
                                        �ܹԸ��Υǥ��������̤˶������ʤ���硢��ʬ�ʶ������̤���ݤ��Ƥ�����٤������������<br>
                                        �ޤ����ܹԸ��Υǡ����١��������С������ƥʥ���ʤɤξ�硢���֤�����Ƥ⤦���٤������������</dd>
                                    <dt><i class="ico ico_square-fill"></i>�ܹ��ѥǡ����ե������������</dt>
                                    <dd>�ܹԸ�WordPress�Ǥΰܹ��ѥǡ����ե�����κ����˼��Ԥ��ޤ�����<br>
                                        �ܹԸ��Υǥ��������̤˶������ʤ���硢��ʬ�ʶ������̤���ݤ��Ƥ�����٤������������<br>
                                        �ޤ����ܹԸ��δĶ��ˤ�äƤϺ����Ǥ���ե����륵���������¤���Ƥ����礬����ޤ���<br>
                                        �ܹԸ�WordPress��wp-content�ǥ��쥯�ȥ���ι�����̤�����(�ܰ¤Ȥ��Ƥ�2GB�ʲ�����)�ˤʤ�褦�ˤ��Ƥ���������</dd>
                                    <dt><i class="ico ico_square-fill"></i>�Хå����å׼�������</dt>
                                    <dd>�ܹԸ�WordPress����ΥХå����åפμ����˼��Ԥ��ޤ�����<br>
                                        ���֤�����Ƥ⤦���٤����������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������
                                    </dd>
                                </dl>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">WordPress��ñ�ܹԤκ�����</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 id="link-previous-d01" class="box_ttl">1.��WordPress��ñ�ܹԡפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ�ܹԡפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_top.png" alt="��WordPress��ñ�ܹԡפ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d02" class="box_ttl">2.����������ɥᥤ��̾������</h6>
                                            <div class="box_body">
                                                <p>WordPress�����������ɥᥤ��̾�����򤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete1.png" alt="����������ɥᥤ��̾������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d03" class="box_ttl">3.�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�ܹԺѤ�WordPress�������顢�оݤ�WordPress���ǧ���ֺ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete2.png" alt="�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d04" class="box_ttl">4.�ֺ������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ��������ʤ���Сֺ������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete3.png" alt="�ֺ������פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 id="link-previous-d05" class="box_ttl">5.�����λ</h6>
                                            <div class="box_body">
                                                <p>��λ���̤�ɽ�����줿�顢����ϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_delete4.png" alt="�����λ"></p>
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
                                    <li><a href="#link-a">�����Ѿ�����</a></li>
                                    <li>
                                        <a href="#link-b">WordPress�ΰܹ�</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��WordPress��ñ�ܹԡפ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.��WordPress��ܹԡפ򥯥�å�</a></li>
                                            <li><a href="#link-b3">3.�ܹԤ�����WordPress�ξ�������Ϥ����ְܹԤ���פ򥯥�å�</a></li>
                                            <li><a href="#link-b4">4.�ܹԽ����μ¹���</a></li>
                                            <li><a href="#link-b5">5.�ֳ�ǧ���ޤ����פ򥯥�å�</a></li>
                                            <li><a href="#link-b6">6.�ǡ����ܹԴ�λ</a></li>
                                            <li><a href="#link-b7">7�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">���顼�ˤĤ���</a></li>
                                    <li>
                                        <a href="#link-d">WordPress��ñ�ܹԤκ�����</a>
                                        <ol>
                                            <li><a href="#link-d1">1.��WordPress��ñ�ܹԡפ򥯥�å�</a></li>
                                            <li><a href="#link-d2">2.�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�</a></li>
                                            <li><a href="#link-d3">3.�ֺ������פ򥯥�å�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_transfer_wp.php">WordPress��ñ�ܹԤ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <p>�ܵ�ǽ�ϡ�¾�ҥ����С�����Υ����Ȱ�ž�䡢�������Wordpress���̤�URL���ѹ����������ʤɤˤ����Ѥ��������ޤ���</p>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">�����Ѿ�����</h3>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�͡��ॵ���С��ˤĤ���</h6>
                                                <div class="msg_body">
                                                    <p>�ܹԤ���ɥᥤ��Υ͡��ॵ���С��ϡ��ܹԺ�Ȥδ�λ����ѹ����Ƥ���������</p>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ư���׷�</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>WordPress�ΥС������ 4.2 �� 6.8 �Ǥ��뤳��</li>
                                                        <li>PHP�ΥС������7.2�ʾ�Ǥ��뤳��
                                                        </li>
                                                        <li>�ܹԸ���WordPress���ʲ������ƤϤޤ��硢���顼�Ȥʤ�ޤ���
                                                            <ul class="ul">
                                                                <li>�ޥ�������ȵ�ǽ����Ѥ��Ƥ�����</li>
                                                                <li>�ǡ����١��������̤�2GB��Ķ���Ƥ�����</li>
                                                                <li>WordPress.com����ΰܹԤǤ�����</li>
                                                                <li>��PHP����tar��zip���ޥ�ɤΤ�����������Բġפ��ġ�PHP��zip�⥸�塼�뤬�����Բġפξ��</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ܹԸ��WordPress�С������ˤĤ���</h6>
                                                <div class="msg_body">
                                                    <p>WordPress�Υޥ��ʡ��С�����󤬺ǿ��Τ�Τؤȹ�������ޤ���</p>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�ǰܹԤ����ǡ������ܹԤ���ʤ��ǡ����ˤĤ���</h6>
                                                <div class="msg_body">
                                                    <dl class="dl">
                                                        <dt>���꤬�ܹԤ����ǡ���</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>/wp-content �ե���������֤���Ƥ���ǡ���<br>
                                                                    �ʥ��åץ��ɤ��������ե������ץ饰���󡦥ơ��ޥե���������</li>
                                                                <li>�ǡ����١�����Υǡ����ʵ����ǡ�����Ƽ������</li>
                                                            </ul>
                                                        </dd>
                                                        <dt>���꤬�ܹԤ���ʤ��ǡ���</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>��ž�������֤���Ƥ����.htaccess�ץե�����</li>
                                                                <li>/wp-content �ե���������֤���Ƥ���ǡ����Τ������Хå����å״�Ϣ�ץ饰����ˤ�ä��������줿�ǡ���</li>
                                                                <li>/wp-content �ʳ������֤���Ƥ���ǡ�����ץ饰��������ʢ���</li>
                                                                <li>WordPress�����ι�¤���ѹ����Ƥ�����ʢ���</li>
                                                            </ul>
                                                            <p class="note">���������ޥ�����Ϣ�Υץ饰�����Ϥ��ᡢ�������ƥ���Ϣ�Υץ饰����䥭��å����Ϣ�Υץ饰��������Ѥξ�硢�����˳��������ǽ��������ޤ���</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>��ñ�ܹԤ�ʣ����¹Ԥ�����ˤĤ���</h6>
                                                <div class="msg_body">
                                                    <p>
                                                        �֥������Բ�����¡פ�ON�ˤ������֤�Wordpress��ñ�ܹԤ�ʣ����¹Ԥ���ȡ����顼��ȯ�����ޤ���
                                                    </p>
                                                    <p>
                                                        ʣ����Wordpress���ž������ϡ�30ʬ�ʾ���֤�����Ƥ���¹Ԥ��롢�⤷���ϡ֥������Բ�����¡פ�OFF�ˤ������֤Ǽ¹Ԥ��Ƥ���������
                                                    </p>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-b">WordPress�ΰܹ�</h3>

                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ������</h6>
                                                <div class="msg_body">
                                                    <p>�ܹ�������Ѥ���ɥᥤ��̾��������<a href="man_domain_setting.php">�ɥᥤ������</a>�פ��餢�餫����Ѥޤ��Ƥ����Ƥ���������</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b1">1.��WordPress��ñ�ܹԡפ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ�ܹԡפ򥯥�å����Ƥ���������</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_1.png?date=2410" alt="�����С��ѥͥ�ǡ�WordPress��ñ�ܹԥ�˥塼�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b2">2.��WordPress��ܹԡפ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p>��WordPress��ܹԡפ򥯥�å����Ƥ���������</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_2.png?date=2410" alt="��WordPress��ܹԡפ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b3">3.�ܹԤ�����WordPress�ξ�������Ϥ����ְܹԤ���פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p>�ܹԤ�����WordPress�ξ�������Ϥ����ְܹԤ���פ򥯥�å����Ƥ���������</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_3.png?date=2410" alt="��������Ϥ��ơ��ֳ�ǧ���̤ؿʤ�פ򥯥�å�"></p>

                                                        <table class="table table--responsive">
                                                            <caption>���Ϲ���</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">�ܹԸ�URL</th>
                                                                <td>�ܹԸ���URL�����Ϥ��Ƥ���������
                                                                    ��https�פ����򤷤���硢�ܹ����URL���https�פ���Ϥޤ��ΤȤʤ�ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ܹԸ�WordPress�Υ桼����̾</th>
                                                                <td>�ܹԸ���WordPress�ؤΥ�����������Ѥ��Ƥ����桼����̾�����Ϥ��Ƥ���������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ܹԸ�WordPress�Υѥ����</th>
                                                                <td>�ܹԸ���WordPress�ؤΥ�����������Ѥ��Ƥ����ѥ���ɤ����Ϥ��Ƥ���������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>URL</th>
                                                                <td>
                                                                    <p>	�ܹ����URL�����Ϥ��Ƥ���������</p>
                                                                    <ul class="ul">
                                                                        <li>�֥ɥᥤ������פ�������ꤷ�Ƥ���ɥᥤ��̾���椫�����򤷤Ƥ���������</li>
                                                                        <li>�ɥᥤ��ľ�������֤��������ϡ����֥ե�����ˤϲ������Ϥ���������Ȥ��Ƥ���������</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>SSL��ȯ�ԤˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>��https�פ���Ϥޤ�URL��WordPress�����Ȥ�ܹԤ����硢SSL������ȯ�ԤΤ��ᡢ�ܹԸ������Ȥǰ���ե����뤬��������ޤ���<br>
                                                                    ���ξ��ˤ⡢���Ǥ˱������WordPress�����Ȥ�ư��˱ƶ��Ϥ���ޤ���</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b4">4.�ܹԽ����μ¹���</h4>
                                                    <div class="box_body">
                                                        <p>�ܹԽ����μ¹���ϡ������β��̤�ɽ������ޤ����¹���Υ���󥻥�ϤǤ��ޤ���<br>
                                                            �ޤ������̤��Ĥ��Ƥ�ܹԽ����Ϸ�³���ޤ���</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_4.png?date=2410" alt="�����¹���β���"></p>

                                                        <table class="table table--responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">URL</th>
                                                                <td>�ܹ����URL��ɽ������ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�ܹԥ��ơ�����</th>
                                                                <td>�ܹԤοʹԾ�����ɽ������ޤ���</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Wordpress��ñ�ܹԤ�Ԥ��ȡ���ž��WordPress��˰�ž�ѥץ饰�����XServer Migrator�פ����󥹥ȡ��뤵��ޤ���������˰ܹԤ���λ����м�ưŪ�˺������ޤ���</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b5">5.�ֳ�ǧ���ޤ����פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p>�ܹԽ�������λ����ȡ��ֳ�ǧ���ޤ����פΥܥ���ɽ������ޤ��Τǡ��ֳ�ǧ���ޤ����פ򥯥�å����ޤ���<br>
                                                            �ʾ�ǰܹԺ�Ȥϴ�λ�Ǥ���</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_5.png?date=2410" alt="�ܹԽ�������λ������ֳ�ǧ���ޤ����פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b6">6.�ǡ����ܹԴ�λ</h4>
                                                    <div class="box_body">
                                                        <p>�������̤˰ܹԤ���WordPress�ξ���ɽ������ޤ���</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_6.png?date=2410" alt="�ܹԤ���WordPress�ξ���ɽ�����줿����"></p>

                                                        <table class="table table--responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL w30per-s">���ơ�����</th>
                                                                <td>�ܹԤοʹԾ�����ɽ������ޤ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>URL</th>
                                                                <td>�ܹ����URL��ɽ����</td>
                                                            </tr>
                                                            <tr>
                                                                <th>��������URL</th>
                                                                <td>�ܹ���WordPress�δ������̡ʥ��å���ܡ��ɡˤ�URL��<br>
                                                                    �ܹԸ������Ѥ��Ƥ����֥桼����̾���ѥ���ɡפǥ����󤬲�ǽ�Ǥ���</td>
                                                            </tr>
                                                            <tr>
                                                                <th>MySQL�ǡ����١���</th>
                                                                <td>�ܹ���WordPress�����Ѥ��Ƥ���MySQL�ǡ����١���̾��</td>
                                                            </tr>
                                                            <tr>
                                                                <th>�͡��ॵ���С����ѹ�</th>
                                                                <td>ɽ������Ƥ����硢�͡��ॵ���С����ѹ�����ɬ�פ�����ޤ���</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <section class="msg">
                                                            <h4 class="msg_ttl"><i class="ico ico_circle"></i>�����ǧ����</h4>
                                                            <div class="msg_body">
                                                                <p>�ְܹԼ¹ԥ��פΥ��֤򥯥�å�����ȡ��ܹ����ƤΥ�����ǧ�Ǥ��ޤ���</p>

                                                                <p><img class="img" src="../img/manual/man_install_transfer_wp_logend.png?date=2410" alt="�ܹ����ƤΥ���ǧ����"></p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-b7">7.�͡��ॵ���С����ѹ�������ӥ����Ȥ�ư���ǧ</h4>
                                                    <div class="box_body">

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�͡��ॵ���С����ѹ�����ư����ǧ���������</h6>
                                                            <div class="msg_body">
                                                                <p>���Ȥ��Υѥ�����Ρ�hosts�ץե�������Խ����뤳�Ȥǡ��͡��ॵ���С����ڤ��ؤ�����ư���ǧ���Ǥ���褦�ˤʤ�ޤ���<br>
                                                                    �ܺ٤ϡ��ޥ˥奢���<a href="man_domain_checkproxy.php#hosts">ư���ǧ�ˤĤ��� �� WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>�פ򤴻��Ȥ���������</p>
                                                            </div>
                                                        </aside>

                                                        <ol class="ol">
                                                            <li>
                                                                <p><em class="font-bold">�͡��ॵ���С����ѹ�</em></p>
                                                                <p>�������å��������С��Υ͡��ॵ���С����ѹ����Ƥ���������<br>
                                                                    ���ҤǴ������Ƥ���ɥᥤ���<a href="man_domain_namesever_setting.php">�͡��ॵ���С����ѹ�</a>��XServer�����������Ρ֥ɥᥤ��ѥͥ�פ���ѹ���ǽ�Ǥ���</p>

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
                                                                    <li>���͡��ॵ���С��ѹ��塢������֡ʺ���24���֤ۤɡˤ�Фơ������˥����С����ܹԤ���ޤ���</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <p><em class="font-bold">�����Ȥ�ư���ǧ</em></p>
                                                                <p>WordPress�����Ȥؤȥ���������������ʤ�ɽ����ư��Ƥ���褦�Ǥ���С��ܹԺ�Ȥϴ�λ�Ǥ���</p>
                                                            </li>
                                                            <li>
                                                                <p><em class="font-bold">�ѡ��ޥ������ˤĤ���</em></p>
                                                                <p>�����ǡ����إ����������褦�Ȥ���ȡ�404���顼�٤�ȯ�������硢�������ǥѡ��ޥ�������ԤäƤ���������</p>

                                                                <section class="msg">
                                                                    <h4 class="msg_ttl"><i class="ico ico_circle"></i>�ѡ��ޥ�󥯤�������</h4>
                                                                    <div class="msg_body">
                                                                        <ol class="ol">
                                                                            <li>���å���ܡ��ɤإ����󤷤Ƥ���������</li>
                                                                            <li>��¦��˥塼�Ρ�����פ��֥ѡ��ޥ������פ򥯥�å����Ƥ���������</li>
                                                                            <li>�������Ƥ��ѹ������˲��̲����Ρ��ѹ�����¸�ץܥ���򥯥�å����Ƥ���������</li>
                                                                            <li>WordPress�غ��٥�������������Ƥ���Ƥ��뵭���򥯥�å������ݤε�ư�򤴳�ǧ����������</li>
                                                                        </ol>
                                                                    </div>
                                                                </section>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-c">���顼�ˤĤ���</h3>
                                        <div class="section_body">
                                            <p>���顼��ȯ��������硢���Τ褦���б����Ƥ���������</p>

                                            <dl class="dl">
                                                <dt>�����󥨥顼</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress�Υ��å���ܡ��ɤؤΥ�����˼��Ԥ��Ƥ����ǽ��������ޤ���<br>
                                                        �桼����̾�ȥѥ���ɤ˸�꤬�ʤ����Ȥ��ǧ����Basicǧ�ڤ��ܥå�ǧ�ڤ�ͭ���ʾ��ϲ�����Ƥ���������</p>
                                                    <p>�ޤ����嵭�����ƤϤޤ�ʤ����ϡ֥������Բ�����¡פ�ON�ˤ������֤�Wordpress��ñ�ܹԤ�ʣ����¹Ԥ��Ƥ����ǽ��������ޤ���<br>
                                                        ���¤�24���ַв��˲������ޤ��ΤǤ��Ԥ���������������<a href="man_server_wpsecurity.php#login">�������Բ����������</a>�פ������ƺ��ټ¹Ԥ��Ƥ���������</p>
                                                </dd>
                                                <dt>PHP�С�����󥨥顼</dt>
                                                <dd>
                                                    <p>�ܹԸ������С���PHP�С�����󤬡����ݡ����оݳ��ΥС������Ǥ���<br>
                                                        �ܵ�ǽ�����ݡ��Ȥ���PHP�С������ϡ�PHP5.3�ʹߤǤ���<br>
                                                        PHP�ΥС�������5.3�ʹߤ��ѹ��Ǥ������PHP�С��������ѹ�����WordPress�������ư��뤳�Ȥ��ǧ���������ǡ�����ưܹԺ�Ȥ�ԤäƤ���������</p>
                                                </dd>
                                                <dt>WordPress�С�����󥨥顼</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress�ϡ����ݡ����оݳ��ΥС������Ǥ���<br>
                                                        ���ݡ����оݤΥС������ϡ�4.2��6.8�פǤ���</p>
                                                </dd>
                                                <dt>�����ॢ����</dt>
                                                <dd>
                                                    <p>�ܹԸ������С��Ȥ��̿��˼��Ԥ��Ƥ����ǽ��������ޤ���<br>
                                                        ���֤�����Ƥ⤦���٤����������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������</p>
                                                    <p>�ޤ����ܹ��ѥǡ����ե�����κ����˻��֤������ꤹ���ƥ����ॢ���Ȥ��Ƥ����ǽ����ͤ����ޤ���<br>
                                                        �ܹԸ�WordPress��wp-content�ǥ��쥯�ȥ�������̤���ü���礭�����ʤɤ�ȯ�����뤿�ᡢ���פʥե�����(�Хå����åץǡ�����)�����������̤򸺤餷�Ƥ�����٤������������</p>
                                                </dd>
                                                <dt>SSL̤ȯ��</dt>
                                                <dd>
                                                    <p>�ܹԽ����ϴ�λ���Ƥ��ޤ�����SSL�������ȯ�Ԥ˼��Ԥ��Ƥ��ޤ���<br>
                                                        �ɥᥤ��Υ͡��ॵ���С����ѹ������Τ�����<a href="man_server_ssl.php">SSL����</a>�פ����̤�SSL�������ȯ�Ԥ��Ƥ���������</p>
                                                </dd>
                                                <dt>�ץ饰����ͭ�������顼</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress�ؤΰܹ��ѥץ饰����Υ��󥹥ȡ���ޤ���ͭ�����˼��Ԥ��Ƥ����ǽ��������ޤ���<br>
                                                        �����Ȥ��ƹͤ�����ʲ��ι��ܤˤĤ��Ƥ���ǧ����������</p>

                                                    <ul class="ul">
                                                        <li>�ܹԸ�URL�ˤϥ��å���ܡ��ɤΰ�������ǳ�ǧ�Ǥ����WordPress ���ɥ쥹 (URL)�פ���ꤷ�Ƥ���������</li>
                                                        <li>http��https�δְ㤤����դ��Ƥ���������</li>
                                                        <li>���Ѥ��Ƥ���WordPress�桼�����������ԤǤϤʤ���硢�����Ը��¤���ĥ桼���������Ѥ��Ƥ���������</li>
                                                        <li>�ܹԸ�WordPress��wp-config.php�ե��������define('DISALLOW_FILE_MODS', true);�ε��ܤ������硢���������Ǻ��٤������������</li>
                                                    </ul>
                                                </dd>
                                                <dt>�С���������������顼</dt>
                                                <dd>
                                                    <p>�ܹԸ�����ΥС���������μ����˼��Ԥ��ޤ�����<br>
                                                        �ܹ��ѥץ饰����������ư��Ƥ��ʤ���ǽ�������뤿�ᡢ���ݡ��Ȥؤ��䤤��碌��������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������</p>
                                                </dd>
                                                <dt>�ǡ����١����Хå����å׼���</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress�ǤΥǡ����١����ΥХå����åפ˼��Ԥ��ޤ�����<br>
                                                        �ܹԸ��Υǥ��������̤˶������ʤ���硢��ʬ�ʶ������̤���ݤ��Ƥ�����٤������������<br>
                                                        �ޤ����ܹԸ��Υǡ����١��������С������ƥʥ���ʤɤξ�硢���֤�����Ƥ⤦���٤������������</p>
                                                </dd>
                                                <dt>�ܹ��ѥǡ����ե������������</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress�Ǥΰܹ��ѥǡ����ե�����κ����˼��Ԥ��ޤ�����<br>
                                                        �ܹԸ��Υǥ��������̤˶������ʤ���硢��ʬ�ʶ������̤���ݤ��Ƥ�����٤������������<br>
                                                        �ޤ����ܹԸ��δĶ��ˤ�äƤϺ����Ǥ���ե����륵���������¤���Ƥ����礬����ޤ���<br>
                                                        �ܹԸ�WordPress��wp-content�ǥ��쥯�ȥ���ι�����̤�����(�ܰ¤Ȥ��Ƥ�2GB�ʲ�����)�ˤʤ�褦�ˤ��Ƥ���������</p>
                                                </dd>
                                                <dt>�Хå����å׼�������</dt>
                                                <dd>
                                                    <p>�ܹԸ�WordPress����ΥХå����åפμ����˼��Ԥ��ޤ�����<br>
                                                        ���֤�����Ƥ⤦���٤����������������<a href="man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���</a>�פ򤴻��ȤΤ�������ư�ǰܹԺ�Ȥ�ԤäƤ���������</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-d">WordPress��ñ�ܹԤκ�����</h3>

                                        <div class="section_body">

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d1">1.��WordPress��ñ�ܹԡפ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���WordPress��ñ�ܹԡפ򥯥�å����Ƥ���������</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_1.png?date=2410" alt="�����С��ѥͥ�ǡ�WordPress��ñ�ܹԥ�˥塼�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d2">2.�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p>�ܹԺѤ�WordPress�������顢�оݤ�WordPress���ǧ���ֺ���פ򥯥�å����Ƥ���������
                                                        </p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_new_delete1.png" alt="�оݤ�WordPress���ǧ�����ֺ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl" id="link-d3">3.�ֺ������פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p>���Ƥ��ǧ��������ʤ���Сֺ������פ򥯥�å����Ƥ���������</p>

                                                        <p><img class="img" src="../img/manual/man_install_transfer_wp_new_delete2.png" alt="�ֺ������פ򥯥�å�"></p>
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