<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>�ɥᥤ��ǧ�� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ð����ε�ǽ�Ǥϡ֥ɥᥤ��ǧ�ڡפ�ɬ�פȤʤ�ޤ������ڡ����Ǥϥɥᥤ���ǧ����ˡ�ˤĤ��Ƥ����⤤�����ޤ���">

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

                        <h3 class="sub-ttl">�ɥᥤ���ǧ�ڤˤĤ���</h3>

                        <div class="supportTabArea">
                            <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                                <!-- ��ѥͥ� -->
                                <div class="supportTabContents">

                                    <div class="toc-list">
                                        <p class="toc-list--head">�ܼ�</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">�ɥᥤ��ǧ��</a></li>
                                            <li><a href="#link-previous-b">Webǧ��</a>
                                                <ol>
                                                    <li><a href="#link-previous-b01">1.�ե��������������</a></li>
                                                    <li><a href="#link-previous-b02">2.������URL�פǻ��ȤǤ���褦����������ɤ�����webauth.html�פ򥢥åץ��ɤ���</a></li>
                                                    <li><a href="#link-previous-b03">3.��ǧ�ڤ��Ƴ�ǧ���̤ؿʤ�פ򥯥�å�</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-c">�᡼��ǧ��</a>
                                                <ol>
                                                    <li><a href="#link-previous-c01">1.�᡼�륢�ɥ쥹�κ���</a></li>
                                                    <li><a href="#link-previous-c02">2.ǧ�ڥ᡼������</a></li>
                                                    <li><a href="#link-previous-c03">3.��ǧ��ID�פ����Ϥ���ǧ���̤ؿʤ�</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">�ɥᥤ��ǧ��</h4>
                                        <div class="section_body">
                                            <p>�����ε�ǽ�����Ѥ�����������˥ɥᥤ��ǧ�ڤ�ɬ�פȤʤ��礬����ޤ����ɥᥤ��ǧ�ڤβ��̤�ɽ�����줿���ϲ��̤ΰ���˽�����ǧ�ں�Ȥ�»ܤ��Ƥ���������</p>
                                            <p class="mb5">�ʲ��ξ������ƤϤޤ��硢�ɥᥤ��ǧ�ڤ�ɬ�פȤʤ��ǽ��������ޤ���</p>
                                            <div class="border border_gray mb5">
                                                <ul class="ul mb0">
                                                    <li>���ҥ����ӥ���XServer�ɥᥤ��פǼ��������ɥᥤ��̾�ǤϤʤ����</li>
                                                    <li>���å��������С��ʳ��ǥɥᥤ��̾��������ξ��</li>
                                                </ul>
                                            </div>
                                            <br/>
                                            <p class="mb5">�ɥᥤ���ǧ����ˡ�ˤĤ��Ƥϰʲ��Τ����줫��������ǽ�Ǥ���</p>
                                            <div class="border border_gray mb5">
                                                <ul class="ul mb0">
                                                    <li><a href="#link-previous-b">Webǧ��</a>�ʥ�������ɤ����ե�����򡢻��ꤷ��URL�ǻ��ȤǤ���褦�˥��åץ��ɤ�����ˡ��</li>
                                                    <li><a href="#link-previous-c">�᡼��ǧ��</a>�ʻ���Υ᡼�륢�ɥ쥹���������줿�᡼��˵��ܤΡ�ǧ��ID�פ�������˵��ܤ�����ˡ��</li>
                                                </ul>
                                            </div>

                                            <section class="block">
                                                <h5 class="block_ttl mt50">�ɥᥤ��ǧ�ڤ�ɬ�פȤʤ뵡ǽ����</h5>
                                                <div class="block_body">
                                                    <table class="table break-word">
                                                        <thead>
                                                        <tr>
                                                            <th>��˥塼</th>
                                                            <th>��ǽ</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th rowspan="2">�᡼�륢�����������</th>
                                                            <td>�᡼�륢��������ɲ�</td>
                                                        </tr>
                                                        <tr>
                                                            <td>�᡼�륢������Ȱ����Ͽ</td>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">�᡼��󥰥ꥹ�ȡ��᡼��ޥ�����</th>
                                                            <td>�᡼��󥰥ꥹ���ɲ�</td>
                                                        </tr>
                                                        <tr>
                                                            <td>�᡼��ޥ������ɲ�</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-b">Webǧ��</h4>
                                        <div class="section_body">
                                            <p>�����å��������С��ʳ����оݥɥᥤ��̾�Υۡ���ڡ�����������Ƥ��ơ����ߤ����ѤΥ����С���html�ե�����򥢥åץ��ɤǤ�����ˤ����Ѥ��������ޤ���</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b01">1.�ե��������������</h6>
                                                    <div class="box_body">
                                                        <p>��Webǧ�ڡפ����򤹤��ɽ������롢�֥ե������������ɡץܥ���򥯥�å�������webauth.html�פ��������ɤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_1.png" alt="ǧ���ѥե�������������ɤ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b02">2.������URL�פǻ��ȤǤ���褦����������ɤ�����webauth.html�פ򥢥åץ��ɤ���</h6>
                                                    <div class="box_body">
                                                        <p>��������ɤ�����webauth.html�פ������URL��http://ǧ�ڤ���ɥᥤ��̾/webauth.html�ˡפǻ��ȤǤ���褦��FTP���ե����ǥ��åץ��ɤ��Ƥ���������</p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b03">3.��ǧ�ڤ��Ƴ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��ǧ�ڤ��Ƴ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������
                                                            ����URL��ǧ���ѥե����뤬���֤���Ƥ��뤳�Ȥ���ǧ�Ǥ���С�ǧ�ں�Ȥϴ�λ�Ȥʤ�ޤ���</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-c">�᡼��ǧ��</h4>
                                        <div class="section_body">
                                            <p>�����å��������С��ʳ����оݥɥᥤ��̾�����Ѥ��Ƥ��ơ��᡼�륢�ɥ쥹�κ������Ԥ�����ˤ����Ѥ��������ޤ���</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c01">1.�᡼�륢�ɥ쥹�κ���</h6>
                                                    <div class="box_body">
                                                        <p>���ߤ�������Υ����ӥ��ˤơ����������줫�Υ᡼�륢�ɥ쥹��������Ƥ���������</p>
                                                        <div class="border border_blue mb5">
                                                            <ul class="ul mb0">
                                                                <li>admin@ǧ�ڤ���ɥᥤ��̾</li>
                                                                <li>webmaster@ǧ�ڤ���ɥᥤ��̾</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c02">2.ǧ�ڥ᡼������</h6>
                                                    <div class="box_body">
                                                        <p>�֥᡼��ǧ�ڡפ����򤷤Ƥ���������1.�Ǻ��������᡼�륢�ɥ쥹�����򤷡���ǧ�ڥ᡼�������ץܥ���򥯥�å����Ƥ���������
                                                            ���򤷤��᡼�륢�ɥ쥹���ˡ֡�XServer�ۥ᡼��ǧ�ڤΤ�����פȤ�����̾�ǡ�ǧ��ID�����ܤ��줿�᡼�뤬��������ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_2.png" alt="��ǧ�ڥ᡼�������ץܥ���򥯥�å�"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c03">3.��ǧ��ID�פ����Ϥ���ǧ���̤ؿʤ�</h6>
                                                    <div class="box_body">
                                                        <p>2.�μ����������줿�᡼��˵��ܤΡ�ǧ��ID�פ����Ϥ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_3.png" alt="ǧ��ID�����Ϥ�����ǧ�ڤ��Ƴ�ǧ���̤ؿʤ�פ򥯥�å�"></p>
                                                        <p>�ʾ�ǥ᡼��ǧ�ڤϴ�λ�Ȥʤ�ޤ���</p>
                                                    </div>
                                                </section>
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
                                            <li><a href="#link-a">�ɥᥤ���ǧ�ڤˤĤ���</a></li>
                                            <li><a href="#link-b">Webǧ��</a>
                                                <ol>
                                                    <li><a href="#link-b01">1.�ե��������������</a></li>
                                                    <li><a href="#link-b02">2.������URL�פǻ��ȤǤ���褦����������ɤ�����webauth.html�פ򥢥åץ���</a></li>
                                                    <li><a href="#link-b03">3.��ǧ�ڤ���פ򥯥�å�</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-c">�᡼��ǧ��</a>
                                                <ol>
                                                    <li><a href="#link-c01">1.�᡼�륢�ɥ쥹�κ���</a></li>
                                                    <li><a href="#link-c02">2.ǧ�ڥ᡼������</a></li>
                                                    <li><a href="#link-c03">3.��ǧ��ID�פ����Ϥ���ǧ���̤ؿʤ�</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">�ɥᥤ���ǧ�ڤˤĤ���</h4>
                                        <div class="section_body">
                                            <p>�����ε�ǽ�����Ѥ�����������˥ɥᥤ��ǧ�ڤ�ɬ�פȤʤ��礬����ޤ����ɥᥤ��ǧ�ڤβ��̤�ɽ�����줿���ϲ��̤ΰ���˽�����ǧ�ں�Ȥ�»ܤ��Ƥ���������</p>
                                            <p>�ʲ��ξ������ƤϤޤ��硢�ɥᥤ��ǧ�ڤ�ɬ�פȤʤ��ǽ��������ޤ���</p>
                                            <div class="border border_gray">
                                                <ul class="ul ul_man_margin mb0">
                                                    <li>���ҥ����ӥ���XServer�ɥᥤ��פǼ��������ɥᥤ��̾�ǤϤʤ����</li>
                                                    <li>���å��������С��ʳ��ǥɥᥤ��̾��������ξ��</li>
                                                </ul>
                                            </div>
                                            <p>�ɥᥤ���ǧ����ˡ�ˤĤ��Ƥϰʲ��Τ����줫��������ǽ�Ǥ���</p>
                                            <div class="border border_gray">
                                                <ul class="ul ul_man_margin mb0">
                                                    <li><a href="#link-b">Webǧ��</a>�ʥ�������ɤ����ե�����򡢻��ꤷ��URL�ǻ��ȤǤ���褦�˥��åץ��ɤ�����ˡ��</li>
                                                    <li><a href="#link-c">�᡼��ǧ��</a>�ʻ���Υ᡼�륢�ɥ쥹���������줿�᡼��˵��ܤΡ�ǧ��ID�פ�������˵��ܤ�����ˡ��</li>
                                                </ul>
                                            </div>

                                            <div class="msg">
                                                <h5 class="msg_ttl"><i class="ico ico_circle"></i>ǧ�ںѤߤΥɥᥤ��̾�ˤĤ���</h5>
                                                <div class="msg_body">
                                                    <p>���٥ɥᥤ���ǧ�ڤ���λ����ȡ�����ʹߤ�Ʊ���ɥᥤ��̾���Ф���ǧ�ڤ�����뤳�ȤϤ���ޤ����̾�ɤ��ꥵ���С��ѥͥ�ε�ǽ�����Ѥ����������Ȥ���ǽ�Ǥ���</p>
                                                </div>
                                            </div>
                                            <section class="block mt50">
                                                <h5 class="block_ttl">�ɥᥤ��ǧ�ڤ�ɬ�פȤʤ뵡ǽ����</h5>
                                                <div class="block_body">
                                                    <table class="table break-all">
                                                        <thead>
                                                        <tr>
                                                            <th>��˥塼</th>
                                                            <th>��ǽ</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th rowspan="2">�᡼�륢�����������</th>
                                                            <td>�᡼�륢��������ɲ�</td>
                                                        </tr>
                                                        <tr>
                                                            <td>�᡼�륢������Ȱ����Ͽ</td>
                                                        </tr>

                                                        <tr>
                                                            <th>�᡼��󥰥ꥹ��</th>
                                                            <td>�᡼��󥰥ꥹ���ɲ�</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼��ޥ�����</th>
                                                            <td>�᡼��ޥ������ɲ�</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section  id="link-b" class="section">
                                        <h4 class="section_ttl">Webǧ��</h4>
                                        <p>�����å��������С��ʳ����оݥɥᥤ��̾�Υۡ���ڡ�����������Ƥ��ơ����ߤ����ѤΥ����С���html�ե�����򥢥åץ��ɤǤ�����ˤ����Ѥ��������ޤ���</p>
                                        <div class="serial-box">
                                            <section class="box">
                                                <h5 id="link-b01" class="box_ttl">1.�ե��������������</h5>
                                                <div class="box_body">
                                                    <p>��Webǧ�ڡפ����򤹤��ɽ������롢�֥�������ɤ���ץܥ���򥯥�å�������webauth.html�פ��������ɤ��Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_1.png?date=2410" alt="ǧ���ѥե�������������ɤ��륹���꡼�󥷥�å�"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-b02" class="box_ttl">2.������URL�פǻ��ȤǤ���褦����������ɤ�����webauth.html�פ򥢥åץ���</h5>
                                                <div class="box_body">
                                                    <p>��������ɤ�����webauth.html�פ������URL��http://ǧ�ڤ���ɥᥤ��̾/webauth.html�ˡפǻ��ȤǤ���褦��FTP���ե����ǥ��åץ��ɤ��Ƥ���������</p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-b03" class="box_ttl">3.��ǧ�ڤ���פ򥯥�å�</h5>
                                                <div class="box_body">
                                                    <p>��ǧ�ڤ���פ򥯥�å����Ƥ�������������URL��ǧ���ѥե����뤬���֤���Ƥ��뤳�Ȥ���ǧ�Ǥ���С�ǧ�ں�Ȥϴ�λ�Ȥʤ�ޤ���</p>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- /.serial-box -->
                                    </section>

                                    <section id="link-c" class="section">
                                        <h4 class="section_ttl">�᡼��ǧ��</h4>
                                        <p>�����å��������С��ʳ����оݥɥᥤ��̾�����Ѥ��Ƥ��ơ��᡼�륢�ɥ쥹�κ������Ԥ�����ˤ����Ѥ��������ޤ���</p>
                                        <div class="serial-box">
                                            <section class="box">
                                                <h4 id="link-c01" class="box_ttl">1.�᡼�륢�ɥ쥹�κ���</h4>
                                                <div class="box_body">
                                                    <p>���ߤ�������Υ����ӥ��ˤơ����������줫�Υ᡼�륢�ɥ쥹��������Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>admin@ǧ�ڤ���ɥᥤ��̾</li>
                                                        <li>webmaster@ǧ�ڤ���ɥᥤ��̾</li>
                                                    </ul>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-c02" class="box_ttl">2.ǧ�ڥ᡼������</h5>
                                                <div class="box_body">
                                                    <p>�֥᡼��ǧ�ڡפ����򤷤Ƥ���������1.�Ǻ��������᡼�륢�ɥ쥹�����򤷡���ǧ�ڥ᡼�������ץܥ���򥯥�å����Ƥ������������򤷤��᡼�륢�ɥ쥹���ˡ֡�XServer�ۥ᡼��ǧ�ڤΤ�����פȤ�����̾�ǡ�ǧ��ID�����ܤ��줿�᡼�뤬��������ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_2.png?date=2410" alt="��ǧ�ڥ᡼�������ץܥ���򥯥�å�"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-c03" class="box_ttl">3.��ǧ��ID�פ����Ϥ���ǧ���̤ؿʤࡣ</h5>
                                                <div class="box_body">
                                                    <p>2.�μ����������줿�᡼��˵��ܤΡ�ǧ��ID�פ����Ϥ��Ƥ���������</p>
                                                    <p>�ʾ�ǥ᡼��ǧ�ڤϴ�λ�Ȥʤ�ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_3.png?date=2410" alt="ǧ��ID�����Ϥ���ǧ�ڤ��Ƴ�ǧ���̤ؿʤ�򥯥�å�"></p>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- /.serial-box -->
                                    </section>

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