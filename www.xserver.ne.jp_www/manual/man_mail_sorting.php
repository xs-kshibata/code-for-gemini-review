<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼��ο���ʬ�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǻ��������᡼�륢�ɥ쥹�����夷���᡼����Ф����͡��ʾ�����ꤷ����ʬ���뤳�Ȥ��Ǥ���֥᡼��ο���ʬ���׵�ǽ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼��ο���ʬ��</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�᡼��ο���ʬ���ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">�᡼��ο���ʬ������</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�֥᡼��ο���ʬ���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b02">2.�֥᡼�뿶��ʬ�������ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.����ʬ����������</a></li>
                                            <li><a href="#link-previous-b04">4.���괰λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>



                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼��ο���ʬ���ˤĤ���</h4>
                                <div class="section_body">

                                    <p>
                                        �᡼����Ф��ơ��͡��ʾ�����ꤷ����ʬ���뤳�Ȥ��Ǥ��ޤ���<br>
                                        ���ǥ᡼��Υե��륿��󥰤�����᡼��ο���ʬ���ˤ����Ѥ���������
                                    </p>
                                    <p>
                                        �᡼��ο���ʬ������ϥɥᥤ�󤴤Ȥ�����Ȥʤ�ޤ���<br>
                                        �ޤ������Ҥ����ǥ᡼�븡�Υץ����ˤƸ��Τ��줿���ǥ᡼��ο���ʬ���˴ؤ��Ƥϡ�<a href="../manual/man_mail_spam_setting.php">���ǥ᡼��ե��륿����</a>�ˤ����ꤷ�Ƥ���������
                                    </p>

                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h4>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>���ܸ�ʥޥ���Х��ȡˤ�ޤ�᡼��ˤ����Ƥϡ�ʸ�������ɤ����ˤ�ꡢ����ʬ�����꤬��ǽ���ʤ����⤢��ޤ���</li>
                                                <li>ź�եե������ޤ�᡼��ξ�硢����˿���ʬ����������ǽ���ʤ���礬����ޤ���</li>
                                            </ul>
                                        </div>
                                    </aside>

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
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item current">
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
                                                    <p class="note mb0">���᡼�뿶��ʬ������ˤ�äơ�ž���פ��줿�᡼��ϸ�³�Ρּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                    <p class="note mb0">���᡼�뿶��ʬ������ˤ�äơ֥��ԡ�ž���פ��줿�᡼��ϸ�³�Ρּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                    <p class="note">����������ˤ�äƤϡ�2.���ǥ᡼��ե��륿����פȡ�3.�᡼��ο���ʬ������פν��֤������ؤ���礬����ޤ���</p>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�᡼��ο���ʬ������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.�֥᡼��ο���ʬ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥᡼��ο���ʬ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_1.png" alt="�᡼��ο���ʬ�������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.�֥᡼�뿶��ʬ�������ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�֥᡼�뿶��ʬ�������ɲáפ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_2.png" alt="�֥᡼��ե��륿���ɲáפ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.����ʬ����������</h6>
                                            <div class="box_body">
                                                <p>����ʬ���������ꤷ���ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p class="note">�����2��3�ϡ�����and�������ꤵ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_3.png" alt="�᡼��ο���ʬ������Υ����꡼�󥷥�å�"></p>
                                                <table class="table table_use-caption">
                                                    <caption>�ƹ��ܤ�����</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">���ʥ�����ɡ�</th>
                                                            <td>����ʬ���򤷤���������ɤ�����</td>
                                                        </tr>
                                                        <tr>
                                                            <th>���ʾ���</th>
                                                            <td>������ɤξ�������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>���ʰ��ס�</th>
                                                            <td>������ɤ������Ƥ����פ���ʴ������סˡפ������Ƥ�ޤ�פ��֤���Ϥޤ�פ�������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>������ˡ�ʰ����</th>
                                                            <td>ž����������������</td>
                                                        </tr>
                                                        <tr>
                                                            <th>������ˡ��������ˡ��</th>
                                                            <td>�᡼��ܥå����˻Ĥ�ʤ���ž���פ����᡼��ܥå����˻Ĥ�֥��ԡ�ž���פ�������</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�����㡧����Υ᡼�륢�ɥ쥹����Υ᡼���������</dt>
                                                    <dd>
                                                        <p>�����С��ѥͥ�֥᡼��ο���ʬ���פǲ����Τ褦�����ꤷ�Ƥ���������</p>
                                                        <table class="table table_use-caption">
                                                            <caption>������</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w30per wauto-s">���ʥ�����ɡ�</th>
                                                                    <td>���ݤ������᡼�륢�ɥ쥹</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���ʾ���</th>
                                                                    <td>���п�</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���ʰ��ס�</th>
                                                                    <td>���Ƥ�ޤ�</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>������ˡ�ʰ����</th>
                                                                    <td>���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>������ˡ��������ˡ��</th>
                                                                    <td>ž��</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                            <div class="msg_body">
                                                                <p>�ֺ���פ�ž�������ȿ���ʬ����줿�᡼��ϥ����С�����ں���ۤ���ޤ��������ϥ᡼��γ�ǧ���Ǥ��ޤ���Τǡ����餫���ᤴ��դ���������</p>
                                                            </div>
                                                        </aside>
                                                    </dd>
                                                </dl>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�ֽ�����ˡ�ʰ���ˡפλ�����ˡ�ˤĤ���</dt>
                                                    <dd>
                                                        <p>�ֽ�����ˡ(����)�פβս�˥᡼�륢�ɥ쥹�䡢���ޥ�ɥѥ������Ϥ��뤳�Ȥ��ǽ�Ǥ���</p>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�᡼�륢�ɥ쥹���ꤹ����</p>
                                                            <p class="mb0">sample@example.com�������ꡡ�� sample@example.com ��ž�����ޤ���</p>
                                                        </div>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>���ޥ�ɥѥ����ꤹ����</p>
                                                            <p>| /home/sample/... /tensou.php�������ꡡ�� /home/sample/... /tensou.php �إ᡼����Ϥ��ޤ���</p>
                                                            <p class="note">��PHP��Perl�ʤɤΥ�����ץȤ�¹Ԥ���ݡ���|��(�ѥ���)����Ƭ�ˡ����ޥ�ɥѥ��⤢�碌�Ƶ��Ҥ��Ƥ���������</p>
                                                            <p>�ޤ����¹Ԥ��륹����ץȥե�������Ф����¹Ը��¤���Ϳ����ѡ��ߥå����(�ѡ��ߥå�����͡�701�פʤ�)���ѹ�����ɬ�פ�����ޤ���</p>
                                                            <div class="border border_blue">
                                                            <em class="font-bold">�����tensou.php��PHP5.6�Ǽ¹Ԥ�����</em><br>
                                                            |/usr/bin/php5.6 /home/sample/... /tensou.php
                                                            </div>
                                                            <p class="mb0">�ʤ������ޥ�ɥѥ��ˤĤ��Ƥϥ����С��ѥͥ�֥����С�����פΡ֥��ޥ�ɥѥ������פ���ǧ��ǽ�Ǥ���</p>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.���괰λ</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ�������꤬�ʤ���С��ɲä���פ򥯥�å����ޤ���</p>
                                                <p>�ɲø�֥᡼�뿶��ʬ����������פ���������Ƥγ�ǧ����ǽ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_4.png" alt="�᡼��ο���ʬ���롼������֤��������������꡼�󥷥�å�"></p>
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
                                    <li><a href="#link-a">�᡼��ο���ʬ���ˤĤ���</a></li>
                                    <li><a href="#link-b">�᡼��ο���ʬ������</a>
                                        <ol>
                                            <li><a href="#link-b1">1.�֥᡼��ο���ʬ���פ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.�֥᡼�뿶��ʬ��������ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-b3">3.����ʬ����������</a></li>
                                            <li><a href="#link-b4">4.���괰λ</a></li>
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
                                        <h4 class="section_ttl">�᡼��ο���ʬ���ˤĤ���</h4>
                                        <div class="section_body">

                                            <p>�᡼����Ф��ơ��͡��ʾ�����ꤷ����ʬ���뤳�Ȥ��Ǥ��ޤ���<br>
                                                ���ǥ᡼��Υե��륿��󥰤�����᡼��ο���ʬ���ˤ����Ѥ���������</p>
                                            <p class="note">���ɥᥤ�󤴤Ȥ�����Ȥʤ�ޤ���</p>

                                            <aside class="msg msg_caution mt10">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                                <div class="msg_body">
                                                    <ul class="ul mb0">
                                                        <li>���ܸ�ʥޥ���Х��ȡˤ�ޤ�᡼��ˤ����Ƥϡ�ʸ�������ɤ����ˤ�ꡢ����ʬ�����꤬��ǽ���ʤ����⤢��ޤ���</li>
                                                        <li>ź�եե������ޤ�᡼��ξ�硢����˿���ʬ����������ǽ���ʤ���礬����ޤ���</li>
                                                        <li>���Ҥ����ǥ᡼�븡�Υץ����ˤƸ��Τ��줿���ǥ᡼��ο���ʬ���˴ؤ��Ƥϡ�<a href="../manual/man_mail_spam_setting.php">���ǥ᡼��ե��륿����</a>�ˤ����ꤷ�Ƥ���������</li>
                                                    </ul>
                                                </div>
                                            </aside>

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
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">���ǥ᡼��ե��륿����</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
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
                                                            <p class="note mb0">���᡼�뿶��ʬ������ˤ�äơ�ž���פ��줿�᡼��ϸ�³�Ρּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                            <p class="note mb0">���᡼�뿶��ʬ������ˤ�äơ֥��ԡ�ž���פ��줿�᡼��ϸ�³�Ρּ�ư��������ס�ž������פ��оݤˤʤ�ޤ���</p>
                                                            <p class="note">����������ˤ�äƤϡ�2.���ǥ᡼��ե��륿����פȡ�3.�᡼��ο���ʬ������פν��֤������ؤ���礬����ޤ���</p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">�᡼��ο���ʬ������</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1.�֥᡼��ο���ʬ���פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥᡼��ο���ʬ���פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_1.png?date=2410" alt="�᡼��ο���ʬ�������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2.�֥᡼�뿶��ʬ��������ɲáפ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�֥᡼�뿶��ʬ��������ɲáפ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_2.png?date=2410" alt="�֥᡼�뿶��ʬ��������ɲáפ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3.����ʬ����������</h5>
                                                    <div class="box_body">
                                                        <p>����ʬ���������ꤷ�����ɲä���פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_3.png?date=2410" alt="�᡼��ο���ʬ������Υ����꡼�󥷥�å�"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>�ƹ��ܤ�����</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per">���ʥ�����ɡ�</th>
                                                                <td>����ʬ���򤷤���������ɤ�����</td>
                                                            </tr>
                                                            <tr>
                                                                <th>���ʾ���</th>
                                                                <td>������ɤξ�������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>���ʰ��ס�</th>
                                                                <td>������ɤ������Ƥ����פ���ʴ������סˡפ������Ƥ�ޤ�פ��֤���Ϥޤ�פ�������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>������ˡ�ʰ����</th>
                                                                <td>ž����������������</td>
                                                            </tr>
                                                            <tr>
                                                                <th>������ˡ��������ˡ��</th>
                                                                <td>�᡼��ܥå����˻Ĥ�֥��ԡ�ž���פ����᡼��ܥå����˻Ĥ�ʤ���ž���פ�������</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�����㡧����Υ᡼�륢�ɥ쥹����Υ᡼���������</dt>
                                                            <dd>
                                                                <p>�����С��ѥͥ�֥᡼��ο���ʬ���פǲ����Τ褦�����ꤷ�Ƥ���������</p>
                                                                <table class="table table_use-caption">
                                                                    <caption>������</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="w30per wauto-s">���ʥ�����ɡ�</th>
                                                                        <td>���ݤ������᡼�륢�ɥ쥹</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���ʾ���</th>
                                                                        <td>���п�</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>���ʰ��ס�</th>
                                                                        <td>���Ƥ�ޤ�</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>������ˡ�ʰ����</th>
                                                                        <td>���</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>������ˡ��������ˡ��</th>
                                                                        <td>ž��</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                                    <div class="msg_body">
                                                                        <p>�ֺ���פ�ž�������ȿ���ʬ����줿�᡼��ϥ����С�����ں���ۤ���ޤ��������ϥ᡼��γ�ǧ���Ǥ��ޤ���Τǡ����餫���ᤴ��դ���������</p>
                                                                    </div>
                                                                </aside>
                                                            </dd>
                                                        </dl>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>�ֽ�����ˡ�ʰ���ˡפλ�����ˡ�ˤĤ���</dt>
                                                            <dd>
                                                                <p>�ֽ�����ˡ(����)�פβս�˥᡼�륢�ɥ쥹�䡢���ޥ�ɥѥ������Ϥ��뤳�Ȥ��ǽ�Ǥ���</p>
                                                                <div class="border border_gray">
                                                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�᡼�륢�ɥ쥹���ꤹ����</p>
                                                                    <p class="mb0">sample@example.com�������ꡡ�� sample@example.com ��ž�����ޤ���</p>
                                                                </div>
                                                                <div class="border border_gray">
                                                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>���ޥ�ɥѥ����ꤹ����</p>
                                                                    <p>| /home/sample/... /tensou.php�������ꡡ�� /home/sample/... /tensou.php �إ᡼����Ϥ��ޤ���</p>
                                                                    <p class="note">��PHP��Perl�ʤɤΥ�����ץȤ�¹Ԥ���ݡ���|��(�ѥ���)����Ƭ�ˡ����ޥ�ɥѥ��⤢�碌�Ƶ��Ҥ��Ƥ���������</p>
                                                                    <p>�ޤ����¹Ԥ��륹����ץȥե�������Ф����¹Ը��¤���Ϳ����ѡ��ߥå����(�ѡ��ߥå�����͡�701�פʤ�)���ѹ�����ɬ�פ�����ޤ���</p>
                                                                    <div class="border border_blue">
                                                                        <em class="font-bold">�����tensou.php��PHP5.6�Ǽ¹Ԥ�����</em><br>
                                                                        |/usr/bin/php5.6 /home/sample/... /tensou.php
                                                                    </div>
                                                                    <p class="mb0">�ʤ������ޥ�ɥѥ��ˤĤ��Ƥϥ����С��ѥͥ�֥����С�����פΡ֥��ޥ�ɥѥ������פ���ǧ��ǽ�Ǥ���</p>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b4" class="box_ttl">4. ���괰λ</h5>
                                                    <div class="box_body">
                                                        <p>�ɲø�֥᡼�뿶��ʬ������פ���������Ƥγ�ǧ����ǽ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_4.png?date=2410" alt="�᡼��ο���ʬ���롼������֤��������������꡼�󥷥�å�"></p>
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