<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ν���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��åץ��ɺѤߥǡ����򤹤٤ƺ��������������ȼ��ɥᥤ��������Ǥ���֥ɥᥤ�������׵�ǽ�˴ؤ��뤴����Ǥ��������ȹ��ۤ�줫����ľ���������ˤ����Ѥ���������">
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

                <h3 class="sub-ttl">�ɥᥤ��ν����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->

                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�ɥᥤ��ν�����ˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-previous-a01">�ɥᥤ������ν����</a></li>
                                            <li><a href="#link-previous-a02">�������ΰ衦����ν����</a></li>
                                            <li><a href="#link-previous-a03">����ե����롦�ե����������</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-b">�ɥᥤ��ν�������</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�ɥᥤ�������˥塼��</a></li>
                                            <li><a href="#link-previous-b02">2.������ܥ���򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.�������Ƥ�����</a></li>
                                            <li><a href="#link-previous-b04">4.������μ¹�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�ɥᥤ��ν�����ˤĤ���</h4>
                                <div class="section_body">

                                    <p>�ܵ�ǽ�ϡ������С��ѥͥ���ɲúѤߤΥɥᥤ��������Ф��ơ����åץ��ɺѤߥǡ�����������������뵡ǽ�Ǥ���<br>
                                    �줫�饵���Ȥ��ۤ��ʤ�����������ɥᥤ�������ɲû��˼�ư���������ե����롦�ե�������äƺ�����Ƥ��ޤä����ʤɤˤ����Ѥ���������</p>
                                    <p>�Ԥ�������ϰʲ��ΤȤ���Ǥ���</p>

                                    <section class="block">
                                        <h5 id="link-previous-a01" class="block_ttl">�ɥᥤ������ν����</h5>
                                        <div class="block_body">
                                            <p>���֥ɥᥤ�������DNS�쥳��������ʤɰ����ε�ǽ��������оݥɥᥤ��˴ؤ���ǡ��������꤬���ƽ��������ޤ���<br>
                                            <em class="font-bold">�ɥᥤ���Ѥ�줫����ľ������</em>���˺�Ŭ�ʵ�ǽ�Ǥ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                <dd>
                                                    <p>��/home/�����С�ID/�оݥɥᥤ��װʲ����ΰ�ν����</p>
                                                    <p class="note">�����֥ɥᥤ�����ꤵ��Ƥ����硢���Υ������ΰ�Ϻ������ޤ���</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>������������</li>
                                                        <li>���顼�ڡ�������</li>
                                                        <li>MIME����</li>
                                                        <li>������ž������</li>
                                                        <li>����������������</li>
                                                        <li>CGI�ġ���</li>
                                                        <li>��ư���󥹥ȡ���(���ǡ����١����Ͻ��������ޤ���)</li>
                                                        <li>PHP Ver.����</li>
                                                        <li>php.ini����</li>
                                                        <li>�᡼�륢�����������</li>
                                                        <li>���ǥ᡼��ե��륿����</li>
                                                        <li>��ư��������</li>
                                                        <li>�᡼��ο���ʬ��</li>
                                                        <li>����FTP�������������</li>
                                                        <li>FTP��������(���оݥɥᥤ��Τ�)</li>
                                                        <li>SSL����(��ͭSSL)(���оݥɥᥤ��Τ�)</li>
                                                        <li>ư���ǧURL(���оݥɥᥤ��Τ�)</li>
                                                        <li>������������</li>
                                                        <li>���ե�����</li>
                                                        <li>X��������졼�� Ver.2ͭ����</li>
                                                    </ul>
                                                    <p>�ڰʲ������ƤϽ��������ޤ����</p>
                                                    <ul class="ul">
                                                        <li>���֥ɥᥤ������(���������ΰ�Ͻ��������ޤ���)</li>
                                                        <li>DNS�쥳��������</li>
                                                        <li>SSL������ȼ�SSL��</li>
                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-a02" class="block_ttl">�������ΰ衦����ν����</h5>
                                        <div class="block_body">
                                            <p>�����ȥǡ����䥵���Ȥ˴ؤ���Ƽ�����ν������Ԥ��ޤ���<br>
                                            �᡼���������Ȱʳ�������Ϥ��Τޤ޳��Ѥ���<em class="font-bold">�����Ȥ����ƤΤߺƹ��ۤ�����</em>���˺�Ŭ�ʵ�ǽ�Ǥ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                <dd>
                                                    <p>��/home/�����С�ID/�оݥɥᥤ��/public_html�װʲ����ΰ�ν����</p>
                                                    <p class="note">�����֥ɥᥤ�����ꤵ��Ƥ����硢���Υ������ΰ�Ϻ������ޤ���</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                <dd>
                                                    <ul class="ul mb0">
                                                        <li>������������</li>
                                                        <li>���顼�ڡ�������</li>
                                                        <li>MIME����</li>
                                                        <li>������ž������</li>
                                                        <li>����������������</li>
                                                        <li>CGI�ġ���</li>
                                                        <li>��ư���󥹥ȡ���(���ǡ����١����Ͻ��������ޤ���)</li>
                                                        <li>PHP Ver.����</li>
                                                        <li>php.ini����</li>
                                                        <li>X��������졼�� Ver.2ͭ����</li>
                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-a03" class="block_ttl">����ե����롦�ե����������</h5>
                                        <div class="block_body">
                                            <p>�ɥᥤ��������ɲä���ݼ�ưŪ�˺��������ե�������ե����뤬�������Ƥ�����ˡ�������줿�ե�������ե�������������ޤ���<br>
                                                <em class="font-bold">��äƥ����ƥ�ե�����������Ƥ��ޤä�</em>���˺�Ŭ�ʵ�ǽ�Ǥ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                <dd>
                                                    <p>��/home/�����С�ID/�оݥɥᥤ��/�װʲ�����­���Ƥ������ե����롦�ե����������</p>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                <dd>
                                                    <p class="note">����������������Ϥ���ޤ���</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�ɥᥤ��ν�������</h4>
                                <div class="section_body">
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>
                                                �ɥᥤ��ν������Ԥ��ȡ��оݥɥᥤ��Υǡ��������꤬�������ޤ���<br>
                                                ɬ�פʥǡ�����������󤬤����硢���餫����Хå����åפ�������Ƥ����Ƥ���������
                                            </p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.�ɥᥤ�������˥塼��</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥�����塢�֥ɥᥤ������ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_1.png" alt="�ɥᥤ������򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.������ܥ���򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���̤����ܤ����塢�������Ԥ������ɥᥤ��Ρֽ�����ץܥ���򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_2.png" alt="������ܥ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.�������Ƥ�����</h6>
                                            <div class="box_body">
                                                <p>���ޤΤ褦�ʲ��̤�ɽ�����줿�顢����˾�ν��������򤷡��ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_3.png" alt="���������������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.������μ¹�</h6>
                                            <div class="box_body">
                                                <p>�����١��������Ƥ��ǧ�ξ塢�ּ¹Ԥ���ץܥ���򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_reset_4.png" alt="�������¹�"></p>
                                                <p>�ʾ�ǽ����ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">�ɥᥤ��ν�����ˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-a01">�ɥᥤ������ν����</a></li>
                                            <li><a href="#link-a02">�������ΰ衦����ν����</a></li>
                                            <li><a href="#link-a03">����ե����롦�ե����������</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">�ɥᥤ��ν�������</a>
                                        <ol>
                                            <li><a href="#link-b01">1.�ɥᥤ�������˥塼��</a></li>
                                            <li><a href="#link-b02">2.������ܥ���򥯥�å�</a></li>
                                            <li><a href="#link-b03">3.�������Ƥ�����</a></li>
                                            <li><a href="#link-b04">4.������μ¹�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">
                                    <p>
                                        �ܵ�ǽ�ϡ������С��ѥͥ���ɲúѤߤΥɥᥤ��������Ф��ơ����åץ��ɺѤߥǡ�����������������뵡ǽ�Ǥ���<br>
                                        �줫�饵���Ȥ��ۤ��ʤ�����������ɥᥤ�������ɲû��˼�ư���������ե����롦�ե�������äƺ�����Ƥ��ޤä����ʤɤˤ����Ѥ���������
                                    </p>
                                    <p>�Ԥ�������ϰʲ��ΤȤ���Ǥ���</p>

                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#link-a01">�ɥᥤ������ν����</a></li>
                                        <li><a href="#link-a02">�������ΰ衦����ν����</a></li>
                                        <li><a href="#link-a03">����ե����롦�ե����������</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">�ɥᥤ��ν�����ˤĤ���</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a01">�ɥᥤ������ν����</h5>
                                                <div class="block_body">
                                                    <p>���֥ɥᥤ�������DNS�쥳��������ʤɰ����ε�ǽ��������оݥɥᥤ��˴ؤ���ǡ��������꤬���ƽ��������ޤ���<br>
                                                        <em class="font-bold">�ɥᥤ���Ѥ�줫����ľ������</em>���˺�Ŭ�ʵ�ǽ�Ǥ���</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                        <dd>
                                                            <p>��/home/�����С�ID/�оݥɥᥤ��װʲ����ΰ�ν����</p>
                                                            <p class="note">�����֥ɥᥤ�����ꤵ��Ƥ����硢���Υ������ΰ�Ϻ������ޤ���</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>������������</li>
                                                                <li>���顼�ڡ�������</li>
                                                                <li>MIME����</li>
                                                                <li>������ž������</li>
                                                                <li>����������������</li>
                                                                <li>CGI�ġ���</li>
                                                                <li>��ư���󥹥ȡ���(���ǡ����١����Ͻ��������ޤ���)</li>
                                                                <li>PHP Ver.����</li>
                                                                <li>php.ini����</li>
                                                                <li>�᡼�륢�����������</li>
                                                                <li>���ǥ᡼��ե��륿����</li>
                                                                <li>��ư��������</li>
                                                                <li>�᡼��ο���ʬ��</li>
                                                                <li>FTP�������������</li>
                                                                <li>FTP��������(���оݥɥᥤ��Τ�)</li>
                                                                <li>SSL����(��ͭSSL)(���оݥɥᥤ��Τ�)</li>
                                                                <li>ư���ǧURL(���оݥɥᥤ��Τ�)</li>
                                                                <li>������������</li>
                                                                <li>���ե�����</li>
                                                                <li>X��������졼�� Ver.2ͭ����</li>
                                                                <li>wwwž�����ꡦHTTPSž������</li>
                                                            </ul>
                                                            <p>�ڰʲ������ƤϽ��������ޤ����</p>
                                                            <ul class="ul">
                                                                <li>���֥ɥᥤ������(���������ΰ�Ͻ��������ޤ���)</li>
                                                                <li>DNS�쥳��������</li>
                                                                <li>SSL������ȼ�SSL��</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a02">�������ΰ衦����ν����</h5>
                                                <div class="block_body">
                                                    <p>
                                                        �����ȥǡ����䥵���Ȥ˴ؤ���Ƽ�����ν������Ԥ��ޤ���<br>
                                                        �᡼���������Ȱʳ�������Ϥ��Τޤ޳��Ѥ���<em class="font-bold">�����Ȥ����ƤΤߺƹ��ۤ�����</em>���˺�Ŭ�ʵ�ǽ�Ǥ���
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                        <dd>
                                                            <p>��/home/�����С�ID/�оݥɥᥤ��/public_html�װʲ����ΰ�ν����</p>
                                                            <p class="note">�����֥ɥᥤ�����ꤵ��Ƥ����硢���Υ������ΰ�Ϻ������ޤ���</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                        <dd>
                                                            <ul class="ul mb0">
                                                                <li>������������</li>
                                                                <li>���顼�ڡ�������</li>
                                                                <li>MIME����</li>
                                                                <li>������ž������</li>
                                                                <li>����������������</li>
                                                                <li>CGI�ġ���</li>
                                                                <li>��ư���󥹥ȡ���(���ǡ����١����Ͻ��������ޤ���)</li>
                                                                <li>PHP Ver.����</li>
                                                                <li>php.ini����</li>
                                                                <li>X��������졼�� Ver.2ͭ����</li>
                                                                <li>wwwž�����ꡦHTTPSž������</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-a03">����ե����롦�ե����������</h5>
                                                <div class="block_body">
                                                    <p>
                                                        �ɥᥤ��������ɲä���ݼ�ưŪ�˺��������ե�������ե����뤬�������Ƥ�����ˡ�������줿�ե�������ե�������������ޤ���<br>
                                                        <em class="font-bold">��äƥ����ƥ�ե�����������Ƥ��ޤä�</em>���˺�Ŭ�ʵ�ǽ�Ǥ���
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>��������</dt>
                                                        <dd>
                                                            <p>��/home/�����С�ID/�оݥɥᥤ��/�װʲ�����­���Ƥ������ե����롦�ե����������</p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>����������Ƽ�����</dt>
                                                        <dd>
                                                            <p class="note">����������������Ϥ���ޤ���</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">�ɥᥤ��ν�������</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_caution">
                                                <div class="msg_body">
                                                    <p class="tac font-bold red">��ɬ�פʥǡ�����������󤬤����硢���餫����Хå����åפ�������Ƥ����Ƥ���������</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b01">1.�ɥᥤ�������˥塼��</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥�����塢�֥ɥᥤ������ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_1.png?date=2410" alt="�ɥᥤ������򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b02">2.������ܥ���򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>���̤����ܤ����塢�������Ԥ������ɥᥤ��Ρֽ�����ץܥ���򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_2.png?date=2410" alt="������ܥ���򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b03">3.�������Ƥ�����</h5>
                                                    <div class="box_body">
                                                        <p>���ޤΤ褦�ʲ��̤�ɽ�����줿�顢����˾�ν��������򤷡��ֳ�ǧ����ץܥ���򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_3.png?date=2410" alt="���������������"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-b04">4.������μ¹�</h5>
                                                    <div class="box_body">
                                                        <p>�����١��������Ƥ��ǧ�ξ塢�ֽ��������ץܥ���򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_domain_reset_4.png?date=2410" alt="�������¹�"></p>
                                                        <p>�ʾ�ǽ����ϴ�λ�Ǥ���</p>
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