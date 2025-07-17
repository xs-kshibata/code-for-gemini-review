<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>���ǥ᡼��ե��륿���� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǻ��������᡼�륢�ɥ쥹�����夹��᡼����Ф��ƥ��ѥ�����å����Ǥ�������ǥ᡼��ե��륿����׵�ǽ�Τ�����Ǥ���">

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

                        <h3 class="sub-ttl">���ǥ᡼��ե��륿����</h3>

                        <div class="supportTabArea">
                            <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                                <!-- ��ѥͥ� -->
                                <div class="supportTabContents">

                                    <div class="toc-list">
                                        <p class="toc-list--head">�ܼ�</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">���ǡʥ��ѥ�˥᡼������</a>
                                                <ol>
                                                    <li><a href="#link-previous-a01">1.���ǥ᡼��ե��륿���������</a></li>
                                                    <li><a href="#link-previous-a02">2. �ƹ��ܤ��������Ƥ����򤹤�</a></li>
                                                    <li><a href="#link-previous-a03">3.�ѹ�</a></li>
                                                    <li><a href="#link-previous-a04">4.�֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ����������</a></li>
                                                    <li><a href="#link-previous-a05">5.����¦DMARC������</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>


                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">���ǡʥ��ѥ�˥᡼������</h4>
                                        <div class="section_body">

                                            <p class="mb30">���ǥ᡼������ϡ��ɥᥤ��ñ�̤����ꤵ��ޤ����ޥ���ɥᥤ��ˤ�ʣ���������ξ��ˤϡ����ƤΥɥᥤ����Ф�������ԤäƤ�������ɬ�פ�����ޤ���</p>

                                            <dl class="dl">
                                                <dt>�᡼��������Υե��ˤĤ���</dt>
                                                <dd class="pl0">
                                                    <p>�᡼����������ޤν��֤ǽ������Ԥ��ޤ���</p>
                                                    <div class="receiveMail">
                                                        <div class="receiveMailContents">
                                                            <ul class="flowNav">
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">����¦DMARC����</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">�᡼��ο���ʬ������</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">��ư��������</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">ž������</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="receiveMailContents">
                                                            <p>�ܵ�ǽ�ϼ���Ȣ���ۿ����줿�᡼����оݤ�ư��ޤ���<br>
                                                                ¾�Υ᡼�뵡ǽ�ˤ�äƼ���Ȣ�ʳ����ۿ����줿�᡼����оݤˤʤ�ʤ����ᤴ��դ���������</p>
                                                            <p class="note mb0">�����ǥ᡼��ե��륿����ˤ�äơ����ǥ᡼��ե����������Ȣ�ե�����ذ�ư���줿���ޤ��Ϻ�����줿�᡼��ϸ�³�Ρ֥᡼��ο���ʬ������סּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                            <p class="note">����������ˤ�äƤϡ�2.���ǥ᡼��ե��륿����פȡ�3.�᡼��ο���ʬ������פν��֤������ؤ���礬����ޤ���</p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>

                                            <div class="serial-box mb10">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a01">1.���ǥ᡼��ե��륿���������</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ���������ǥ᡼��ե��륿����פ����򤷤ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_1.png" alt="���ǥ᡼��ե��륿��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a02">2. �ƹ��ܤ��������Ƥ����򤹤�</h6>
                                                    <div class="box_body">
                                                        <p>�оݥɥᥤ���Ŭ�Ѥ�����������򤷡����ꤹ��ץܥ���򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_2.png" alt="���ǥ᡼��ե��륿����ξ��֤��ѹ����Ƥ��륹���꡼�󥷥�å�"></p>

                                                        <table class="table w100per">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL">OFF</th>
                                                                <td>
                                                                    <p>�᡼��ե��륿��̵���ˤʤ�ޤ���</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ON��ɸ�ॹ�ѥ�ե��륿��</th>
                                                                <td>
                                                                    <p>���ǥ᡼���к����եȥ����� SpamAssassin �ʥ��ѥॢ������ˤ�ͭ��������ޤ���</p>

                                                                    <p>���ǥ᡼��Ƚ�����6�ʳ��������򤤤������ޤ���<br>
                                                                        �ޤ���Ƚ�ꥪ�ץ��������Ѥ��뤳�Ȥǡ���긷�������ǥ᡼���Ƚ���Ԥ��ޤ���</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ON�ʹ���ǽ���ѥ�ե��륿��Cloudmark Authority�ס�</th>
                                                                <td>
                                                                    <p>���ǥ᡼���к����եȥ����� Cloudmark (���饦�ɥޡ���)��ͭ��������ޤ���</p>
                                                                    <p>
                                                                        ���������С���������ȤˤĤ����ꤹ��᡼�륢������ȿ��˾�¤��������ޤ���</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>�ƥץ��ˤ�����������</dt>
                                                                        <dd>
                                                                            <ul class="ul mb0">
                                                                                <li>����������ɡ�100��</li>
                                                                                <li>�ץ�ߥ����100��</li>
                                                                                <li>�ӥ��ͥ���1000��</li>
                                                                            </ul>
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <table class="table w100per">
                                                            <caption>���ǥ᡼��ե��륿���λ��ν�������</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL">����Ȣ���ۿ�����(ɸ������)</th>
                                                                <td>
                                                                    <p>���ǥ᡼�뤬�̾�᡼���Ʊ�ͤˡּ���Ȣ�ץե�������ۿ�����ޤ���</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>���ǥ᡼��ե�����ذ�ư</th>
                                                                <td>
                                                                    <p>���ǥ᡼�뤬�����ǥ᡼��ץե������ž������ޤ���<br>
                                                                    ���ǥ᡼��ե������ž�����줿�᡼��ϡ�<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/" target="_blank">WEB�᡼��</a>�פǳ�ǧ��ǽ�Ǥ���</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>����Ȣ�ե�����ذ�ư</th>
                                                                <td>
                                                                    <p>���ǥ᡼�뤬�֥���Ȣ�ץե������ž������ޤ���<br>
                                                                       ����Ȣ��ž�����줿�᡼���7����˼�ưŪ�˺������ޤ���</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>�������</th>
                                                                <td>
                                                                    <p>���ǥ᡼�뤬�������ޤ���</p>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_info">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���ǥ᡼��ե��륿���λ��ζ��̽����ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>���ǥ᡼��ե��륿���λ��ν�������ˤ�����餺�����ǥ᡼��ե��륿���λ��ϥ᡼���̾����Ƭ��[SPAM]�Ȥ���ʸ������ղä��ޤ���</p>
                                                            </div>
                                                        </aside>

                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����Τ����</h6>
                                                            <div class="msg_body">
                                                                <p>�ֺ������פ˿���ʬ����줿�᡼��ϥ����С�����ں���ۤ���ޤ��������ϥ᡼��γ�ǧ���Ǥ��ޤ���Τǡ����餫���ᤴ��դ���������</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a03">3.�ѹ�</h6>
                                                    <div class="box_body">
                                                        <p>�ѹ�����ޤ��ȡ������β��̤Ȥʤ�ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_3.png" alt="���ǥ᡼��ե��륿���ꡧ�ѹ���λ���̤Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a04">4.�֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ����������</h6>
                                                    <div class="box_body">
                                                        <p>���ǥ᡼��Ƚ�����򤹤�ۥ磻�ȥꥹ�Ȥ䡢�դˡ�������ǥ᡼�밷������֥�å��ꥹ�Ȥ����ꤹ�뤳�Ȥ��ǽ�Ǥ���</p>

                                                        <p>�֥ۥ磻�ȥꥹ������ס֥֥�å��ꥹ������ץ�˥塼�˥���������������˾�Υ᡼�륢�ɥ쥹��1��1���ɥ쥹����Ͽ���Ƥ���������<br>
                                                        �ޤ���*�ʥ������ꥹ���ˤ���Ѥ���ʣ���Υ᡼�륢�ɥ쥹����ꤹ�뤳�Ȥ��ǽ�Ǥ�������˥ɥᥤ����˻��ꤹ���硧*@example.jp</p>

                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_5.png" alt="�֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ�Ȥ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a05">5.����¦DMARC������</h6>
                                                    <div class="box_body">

                                                        <dl class="dl">
                                                            <dt>�᡼��������Υե��ˤĤ���</dt>
                                                            <dd class="pl0">
                                                                <p>�᡼����������ޤν��֤ǽ������Ԥ��ޤ���</p>
                                                                <div class="receiveMail">
                                                                    <div class="receiveMailContents">
                                                                        <ul class="flowNav">
                                                                            <li class="flowNav__item current">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">����¦DMARC����</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">�᡼��ο���ʬ������</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">��ư��������</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">ž������</p>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="receiveMailContents">
                                                                        <p>�ܵ�ǽ�ϼ���Ȣ���ۿ����줿�᡼����оݤ�ư��ޤ���<br>
                                                                            ¾�Υ᡼�뵡ǽ�ˤ�äƼ���Ȣ�ʳ����ۿ����줿�᡼����оݤˤʤ�ʤ����ᤴ��դ���������</p>
                                                                    </div>
                                                                </div>
                                                            </dd>
                                                        </dl>

                                                        <p>
                                                            ����¦�ǡ�DMARC�ݥꥷ���פ����ꤵ��Ƥ���᡼������������硢DMARC�ݥꥷ���˽��äƥ᡼��򿶤�ʬ���ޤ���<br>
                                                        </p>

                                                        <table class="table table_responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th>ON</th>
                                                                <td>
                                                                    DKIMǧ�ڡ�SPFǧ�ڤ�ξ����ǧ�ڼ��Ԥ�����硢����¦DMARC�ݥꥷ���˱�ä�������Ԥ��ޤ���<br>
                                                                    <p class="note">
                                                                        �����ǥ᡼�����ꡦ�ۥ磻�ȥꥹ�����ꡦ�֥�å��ꥹ������ϡ�DMARC����ˤ�����餺Ŭ�Ѥ���ޤ���<br>
                                                                        DMARC���꤬ON�λ���DMARC���꤬ͥ�褵��ޤ���
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>OFF</th>
                                                                <td>����¦��DMARC�ݥꥷ���ˤ�����餺���̾��̤�᡼���������ޤ���</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><img class="img" src="../img/manual/previous/man_domain_setting_6.png" alt="����¦DMARC������̤Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>����¦DMARC����ˤĤ���</dt>
                                                <dd>
                                                    <p>DMARC�γ��ס�����¦DMARC����ˤĤ��Ƥ�<a href="../manual/man_mail_dmarc.php">DMARC����</a>��ꤴ��ǧ���������ޤ���</p>
                                                </dd>
                                            </dl>
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
                                            <li><a href="#link-a">���ǡʥ��ѥ�˥᡼������</a>
                                                <ol>
                                                    <li><a href="#link-a1">1.�����ǥ᡼��ե��륿����פ򥯥�å�</a></li>
                                                    <li><a href="#link-a2">2.�ƹ��ܤ��������Ƥ����򤹤�</a></li>
                                                    <li><a href="#link-a3">3.�֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ����������</a></li>
                                                    <li><a href="#link-a4">4.����¦DMARC������</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                                    </ul>

                                    <section class="section">
                                        <div class="sectionBody">

                                            <section id="link-a" class="section">
                                                <h4 class="section_ttl">���ǡʥ��ѥ�˥᡼������</h4>
                                                <div class="section_body">

                                                    <dl class="dl">
                                                        <dt>�᡼��������Υե��ˤĤ���</dt>
                                                        <dd class="pl0">
                                                            <p>�᡼����������ޤν��֤ǽ������Ԥ��ޤ���</p>
                                                            <div class="receiveMail">
                                                                <div class="receiveMailContents">
                                                                    <ul class="flowNav">
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">����¦DMARC����</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item current">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">�᡼��ο���ʬ������</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">��ư��������</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">ž������</p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="receiveMailContents">
                                                                    <p>�ܵ�ǽ�ϼ���Ȣ���ۿ����줿�᡼����оݤ�ư��ޤ���<br>
                                                                        ¾�Υ᡼�뵡ǽ�ˤ�äƼ���Ȣ�ʳ����ۿ����줿�᡼����оݤˤʤ�ʤ����ᤴ��դ���������</p>
                                                                    <p class="note mb0">�����ǥ᡼��ե��륿����ˤ�äơ����ǥ᡼��ե����������Ȣ�ե�����ذ�ư���줿���ޤ��Ϻ�����줿�᡼��ϸ�³�Ρ֥᡼��ο���ʬ������סּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                                    <p class="note">����������ˤ�äƤϡ�2.���ǥ᡼��ե��륿����פȡ�3.�᡼��ο���ʬ������פν��֤������ؤ���礬����ޤ���</p>
                                                                </div>
                                                            </div>
                                                        </dd>
                                                    </dl>

                                                    <div class="serial-box mb10">

                                                        <section class="box">
                                                            <h5 id="link-a1" class="box_ttl">1. �����ǥ᡼��ե��륿����פ򥯥�å�</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡������ǥ᡼��ե��륿����פ򥯥�å����ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_1.png?date=2410" alt="�����ǥ᡼��ե��륿����פ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a2" class="box_ttl">2. �ƹ��ܤ��������Ƥ����򤹤�</h5>
                                                            <div class="box_body">
                                                                <p>�оݥɥᥤ��α�ü�ˤ���[�Խ�]�ܥ���򥯥�å����ޤ���</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_2.png?date=2410" alt="���ǥ᡼��ե��륿�����[�Խ�]�����򤷤Ƥ��륹���꡼�󥷥�å�"></p>

                                                                <p>[���ǥ᡼��ե��륿]��[���λ��ν���]�����ꤷ�������ꤹ��ץܥ���򥯥�å���������괰λ�Ǥ���</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_3.png?date=2410" alt="���ǥ᡼��ե��륿�������"></p>

                                                                <table class="table w100per">
                                                                    <caption>���ǥ᡼��ե��륿</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>ON�ʹ���ǽ���ѥ�ե��륿��Cloudmark Authority�ס�</th>
                                                                        <td>
                                                                            <p>���ǥ᡼���к����եȥ����� Cloudmark (���饦�ɥޡ���)��ͭ��������ޤ���</p>
                                                                            <p>
                                                                                ���������С���������ȤˤĤ����ꤹ��᡼�륢������ȿ��˾�¤��������ޤ���</p>
                                                                            <dl class="dl">
                                                                                <dt><i class="ico ico_square-fill"></i>�ƥץ��ˤ�����������</dt>
                                                                                <dd>
                                                                                    <ul class="ul mb0">
                                                                                        <li>����������ɡ�100��</li>
                                                                                        <li>�ץ�ߥ����100��</li>
                                                                                        <li>�ӥ��ͥ���1000��</li>
                                                                                    </ul>
                                                                                </dd>
                                                                            </dl>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>ON</th>
                                                                        <td>
                                                                            <p>���ǥ᡼���к����եȥ����� SpamAssassin �ʥ��ѥॢ������ˤ�ͭ��������ޤ���</p>

                                                                            <p>���ǥ᡼��Ƚ�����6�ʳ��������򤤤������ޤ���<br>
                                                                                �ޤ���Ƚ�ꥪ�ץ��������Ѥ��뤳�Ȥǡ���긷�������ǥ᡼���Ƚ���Ԥ��ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="w30perL">OFF</th>
                                                                        <td>
                                                                            <p>�᡼��ե��륿��̵���ˤʤ�ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table w100per">
                                                                    <caption>���λ��ν���</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="w30perL">����Ȣ���ۿ�����(ɸ������)</th>
                                                                        <td>
                                                                            <p>���ǥ᡼�뤬�̾�᡼���Ʊ�ͤˡּ���Ȣ�ץե�������ۿ�����ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���ǥ᡼��ե�����ذ�ư����</th>
                                                                        <td>
                                                                            <p>���ǥ᡼�뤬WEB�᡼��Ρ����ǥ᡼��ץե������ž������ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>����Ȣ�ե�����ذ�ư����</th>
                                                                        <td>
                                                                            <p>���ǥ᡼�뤬�֥���Ȣ�ץե������ž������ޤ���<br>
                                                                               ����Ȣ��ž�����줿�᡼���7����˼�ưŪ�˺������ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>�������</th>
                                                                        <td>
                                                                            <p>���ǥ᡼�뤬�������ޤ���</p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <aside class="msg msg_info">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���ǥ᡼��ե��륿���λ��ζ��̽����ˤĤ���</h6>
                                                                    <div class="msg_body">
                                                                        <p>���ǥ᡼��ե��륿���λ��ν�������ˤ�����餺�����ǥ᡼��ե��륿���λ��ϥ᡼���̾����Ƭ��[SPAM]�Ȥ���ʸ������ղä��ޤ���</p>
                                                                    </div>
                                                                </aside>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����Τ����</h6>
                                                                    <div class="msg_body">
                                                                        <p>�ֺ������פ˿���ʬ����줿�᡼��ϥ����С�����ں���ۤ���ޤ��������ϥ᡼��γ�ǧ���Ǥ��ޤ���Τǡ����餫���ᤴ��դ���������</p>
                                                                    </div>
                                                                </aside>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a3" class="box_ttl">3. �֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ����������</h5>
                                                            <div class="box_body">
                                                                <p>���ǥ᡼��Ƚ�����򤹤�ۥ磻�ȥꥹ�Ȥ䡢�դˡ�������ǥ᡼�밷������֥�å��ꥹ�Ȥ����ꤹ�뤳�Ȥ��ǽ�Ǥ���</p>
                                                                <p>[�ۥ磻�ȥꥹ��]��[�֥�å��ꥹ��]�ˤ���˾�Υ᡼�륢�ɥ쥹��1��1���ɥ쥹����Ͽ���Ƥ���������
                                                                    �ޤ���*�ʥ������ꥹ���ˤ���Ѥ���ʣ���Υ᡼�륢�ɥ쥹����ꤹ�뤳�Ȥ��ǽ�Ǥ������㡧*@example.jp��
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_4.png?date=2410" alt="�֥�å��ꥹ�ȡ��ۥ磻�ȥꥹ�Ȥ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a4" class="box_ttl">4.����¦DMARC������</h5>
                                                            <div class="box_body">

                                                                <dl class="dl">
                                                                    <dt>�᡼��������Υե��ˤĤ���</dt>
                                                                    <dd class="pl0">
                                                                        <p>�᡼����������ޤν��֤ǽ������Ԥ��ޤ���</p>
                                                                        <div class="receiveMail">
                                                                            <div class="receiveMailContents">
                                                                                <ul class="flowNav">
                                                                                    <li class="flowNav__item current">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">����¦DMARC����</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">�᡼��ο���ʬ������</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">��ư��������</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">ž������</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="receiveMailContents">
                                                                                <p>�ܵ�ǽ�ϼ���Ȣ���ۿ����줿�᡼����оݤ�ư��ޤ���<br>
                                                                                    ¾�Υ᡼�뵡ǽ�ˤ�äƼ���Ȣ�ʳ����ۿ����줿�᡼����оݤˤʤ�ʤ����ᤴ��դ���������</p>
                                                                            </div>
                                                                        </div>
                                                                    </dd>
                                                                </dl>

                                                                <p>
                                                                    ����¦�ǡ�DMARC�ݥꥷ���פ����ꤵ��Ƥ���᡼������������硢DMARC�ݥꥷ���˽��äƥ᡼��򿶤�ʬ���ޤ���<br>
                                                                </p>

                                                                <table class="table table_responsive">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>ON</th>
                                                                        <td>
                                                                            DKIMǧ�ڡ�SPFǧ�ڤ�ξ����ǧ�ڼ��Ԥ�����硢����¦DMARC�ݥꥷ���˱�ä�������Ԥ��ޤ���<br>
                                                                            <p class="note">
                                                                                �����ǥ᡼�����ꡦ�ۥ磻�ȥꥹ�����ꡦ�֥�å��ꥹ������ϡ�DMARC����ˤ�����餺Ŭ�Ѥ���ޤ���<br>
                                                                                DMARC���꤬ON�λ���DMARC���꤬ͥ�褵��ޤ���
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>OFF</th>
                                                                        <td>����¦��DMARC�ݥꥷ���ˤ�����餺���̾��̤�᡼���������ޤ���</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><img class="img" src="../img/manual/man_domain_setting_6.png?date=2410" alt="����¦DMARC������̤Υ����꡼�󥷥�å�"></p>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <!-- /.serial-box -->

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>����¦DMARC����ˤĤ���</dt>
                                                        <dd>
                                                            <p>DMARC�γ��ס�����¦DMARC����ˤĤ��Ƥ�<a href="../manual/man_mail_dmarc.php">DMARC����</a>��ꤴ��ǧ���������ޤ���</p>
                                                        </dd>
                                                    </dl>

                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����Τ����</h5>
                                                        <div class="msg_body">
                                                            <p>�����ѹ��ϡ��ɥᥤ��ñ�̤ǹԤ��Ƥ���ޤ����ޥ���ɥᥤ��ˤ�ʣ���������ξ��ˤϡ����ƤΥɥᥤ����Ф�������ԤäƤ�������ɬ�פ�����ޤ���</p>
                                                        </div>
                                                    </aside>

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