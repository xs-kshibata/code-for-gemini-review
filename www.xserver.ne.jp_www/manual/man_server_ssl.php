<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>̵���ȼ�SSL���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���̵����̵���¤����Ѳ�ǽ���ȼ�SSL��̵���ȼ�SSL�פ�������˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">̵���ȼ�SSL����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-d">̵���ȼ�SSL�ˤĤ���</a></li>
                                    <li><a href="#link-previous-a">̵���ȼ�SSL��������ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.��SSL����פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a02">2.���ѹ��פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a03">3.��ON�ˤ���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a04">4.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф���̵���ȼ�SSL����������ꤹ��</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">¾�ҥ����С���Webǧ�ڤ�����</a></li>
                                            <li><a href="#link-previous-b02">¾�ҥ͡��ॵ���С���DNSǧ�ڤ�����</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-c">������μ�ư�����ˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-previous-c01">��ư�����������֤����Ԥ��Ƥ��ޤ��������н���ˡ</a></li>
                                            <li><a href="#link-previous-c02">�������</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl.php">SSL���ͤ˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο�����������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">̵���ȼ�SSL�ˤĤ���</h4>
                                <div class="section_body">
                                    <p>̵���ȼ�SSL�ϡ��������С��Ǳ�����Υɥᥤ����Ф��ơ�̵����̵���¤����ֲ�ǽ���ȼ�SSL�Ǥ���<br>û���֤Ǿ������ȯ�Ԥ���ǽ�ǡ���ñ����ڤ˥������ƥ��ζ������Ǥ��ޤ���</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DNS�쥳���ɤ򥫥����ޥ�������Ƥ�����</dt>
                                        <dd class="mb0">̵���ȼ�SSL�����ꤹ����ϡ��оݥɥᥤ��Ρ�www����/�ʤ���ξ����A�쥳���ɤ��������ӥ��Τ����󥵡��С��򻲾Ȥ��Ƥ���ɬ�פ�����ޤ���</dd>
                                    </dl>
                                    <div class="msg msg_info">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��꿮�����ι⤤�֥��ץ�����ȼ�SSL�פΤ�����</h4>
                                        <div class="msg_body">
                                            <p>�����ȥ�������б�������̾�֥��ɤξ��������Ѳ�ǽ�ʡ֥��ץ�����ȼ�SSL�פˤĤ��Ƥϡ��ޥ˥奢���<a href="../manual/man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </div>
                                    <div class="manual-youtube-box">
                                        <p>ư��Ǥ�������ˡ�ˤĤ����������Ƥ���ޤ��Τǡ�������Ǥ⤴��ǧ���������ޤ���<br>
                                            ��ư��ޥ˥奢���2022ǯ12�������������̤Ǥ����⤷�Ƥ��ޤ���</p>
                                        <div class="manual-youtube">
                                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/03gBUz2xkcY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="default_ssl" class="section">
                                <h4 class="section_ttl" id="link-previous-a">̵���ȼ�SSL��������ˡ</h4>
                                <div class="section_body">

                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.��SSL����פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="SSL����򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.���ѹ��פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡����ѹ��פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="�ѹ��򥯥�å�"></p>
                                                <p class="note">���ȼ�SSL���ɲø塢�����С������꤬ȿ�Ǥ����ޤǺ���1�������٤�����ޤ���</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.��ON�ˤ���פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ������ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_5.png" alt="��ON�ˤ���פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.���괰λ</h5>
                                            <div class="box_body">
                                                <p>�������̤����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���<br>����1�������٤�ȿ�Ǥ������ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_7.png" alt="�ɲô�λ"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>�ȼ�SSL�����꤬��λ���������Ǥϡ���http://���פ����https://���פ�URL�ؼ�ưŪ��ž������뤳�ȤϤ���ޤ���<br>
                                                            Web�����Ȥˤ����뤹�٤Ƥ�ɽ������SSL��������ϡ��ޥ˥奢���<a href="man_server_fullssl.php">Web�����Ȥξ��SSL��</a>�פ򤴻��Ȥ���������
                                                        </p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф���̵���ȼ�SSL����������ꤹ��</h4>
                                <div class="section_body">

                                    <p>¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф��Ƥ⡢���å��������С�¦��̵���ȼ�SSL����������ꤹ�뤳�Ȥ���ǽ�Ǥ���<br>
                                    HTTPS�����줿�����Ȥ򥨥å��������С��˰�ž����ݤʤɤˤ����Ѥ���������</p>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�͡��ॵ���С����ѹ��˴ؤ��뤴���</h5>
                                        <div class="msg_body">
                                            <p>̵���ȼ�SSL�����ꤪ��ӥ����С��ǡ����ΰܹԺ�Ȥ���λ����ޤǤϡ��ܹԤ���ɥᥤ��̾�Υ͡��ॵ���С����ѹ����ʤ��褦�ˤ���դ���������<br>
                                            SSL����䥵���С��ǡ����ΰܹԺ�Ȥ���λ�������˥͡��ॵ���С����ѹ�����ȡ����Ū�˥����Ȥ������ʤ��ʤ��ǽ��������ޤ���</p>
                                        </div>
                                    </aside>

                                    <p>��̵���ȼ�SSL�פ���������ꤹ��ˤϡ���¾�ҥ����С��Ǥ�Webǧ�ڡפ�Ԥ���ˡ�ȡ���¾�ҥ͡��ॵ���С��Ǥ�DNS����פ�Ԥ���ˡ��2�̤꤬����ޤ���</p>
                                    <p class="mb50">�����С��ѥͥ��<a href="man_domain_setting.php">�ɥᥤ������</a>�פ��ܹԤ���ɥᥤ��̾���ɲä��������ǡ��ʲ��Τ����줫�κ�Ȥ�̵���ȼ�SSL�����ꤷ�Ƥ���������</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">¾�ҥ����С���Webǧ�ڤ�Ԥ����</h5>
                                         <div class="block_body">
                                             <div class="serial-box mb30">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.��SSL����פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="��SSL����פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.���ѹ��פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>SSL������ɲä���ɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡����ѹ��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="���ѹ��פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.��¾�ҥ����С��Ǥ�Webǧ�ڡפ�����</h6>
                                                    <div class="box_body">
                                                        <p>��¾�ҥ����С��Ǥ�Webǧ�ڡפ����򤷤ơ�ɽ�����줿�ȡ�����ե�������ܤΡ֥�������ɡץܥ���򥯥�å����Ƥ����������ȡ�����ե�����Υ�������ɤ��Ϥޤ�ޤ��Τǡ�PC���Ǥ�դξ�����¸���Ƥ���������</p>
                                                        <p class="mb30"><img class="img" src="../img/manual/previous/man_server_ssl_8.png" alt="��¾�ҥ����С��Ǥ�Webǧ�ڡפ�����"></p>
                                                        <p>�ȡ�����ե����뤬����ɽ�����줿���ϡ�ξ���Υե�������Ф��ƥ�������ɤ���Ӹ�ҤΡ�4.�ܹԸ������С��˥ȡ�����ե���������֡פ�»ܤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_9.png" alt="��¾�ҥ����С���Webǧ�ڤ�Ԥ��פǥȡ�����ե����뤬����ɽ�����줿���"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.�ܹԸ������С��˥ȡ�����ե����������</h6>
                                                    <div class="box_body">
                                                        <p>��������ɤ����ȡ�����ե�����򡢡�����URL�פ˵��Ҥ���Ƥ���URL�ǻ��ȤǤ���褦�ˡ��ܹԸ������С������֤��Ƥ���������</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.��ON�ˤ���פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_10.png" alt="��ON�ˤ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">6.��ON�ˤ���פ򥯥�å�����</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            ���Ƥ��ǧ������ON�ˤ���פ򥯥�å����Ƥ���������
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_12.png" alt="��ON�ˤ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">7.SSL���괰λ</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            ��λ���̤�SSL������ɲä����ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���<br />
                                                            ����1�������٤�ȿ�Ǥ���ޤ���
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_13.png" alt="SSL���괰λ"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">�֥ȡ���������URL�˥��������Ǥ��ޤ���Ǥ������פȤ������顼���Ф���</h6>
                                                    <div class="box_body">
                                                        <p>�ȡ�����ե����뤬���������֤Ǥ��Ƥ��ʤ���ǽ��������ޤ���</p>
                                                        <p>
                                                            �ޤ���ž����Web�����ȤǾ��SSL�������ƤΥ����������https://����פ�ɽ����������ˤ����ꤵ��Ƥ����硢����URL�˥����������Ǥ�����Webǧ�ڤ��Ǥ��ޤ���<br>
                                                            ���ξ��ϰ��Ū�˾��SSL��������������Ƥ���Webǧ�ڤ򤪻����������
                                                        </p>
                                                        <p>����������Ǥ��Ƥ���ˤ�ؤ�餺���顼�Ȥʤ���ϡ�DNSǧ�ڤ򤪻����������</p>
                                                        <p>
                                                            <img class="img" src="../img/manual/previous/man_server_ssl_11.png" alt="�ȡ���������URL�˥��������Ǥ��ޤ���Ǥ���">
                                                        </p>
                                                    </div>
                                                </section>
                                            </div>
                                         </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b02">¾�ҥ͡��ॵ���С���DNSǧ�ڤ�Ԥ����</h5>
                                         <div class="block_body">
                                             <div class="serial-box mb30">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.��SSL����פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="��SSL����פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.���ȼ�SSL�����ɲáפ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡��ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="���ȼ�SSL�����ɲáפ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ�����</h6>
                                                    <div class="box_body">
                                                        <p>��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ����򤷤Ƥ���������¾�ҥ͡��ॵ���С�����Ͽ����DNS�쥳���ɤ�ɽ������ޤ���</p>
                                                        <p class="mb30"><img class="img" src="../img/manual/previous/man_server_ssl_14.png" alt="��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ�����"></p>
                                                        <p>DNS�쥳���ɤ�����ɽ�����줿���ϡ�ξ���Υ쥳���ɤ��Ф��Ƹ�ҤΡ�4.�ܹԸ��͡��ॵ���С���DNS�쥳���ɤ��ɲáפ�»ܤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_15.png" alt="��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ�DNS�ե����뤬����ɽ�����줿���"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.�ܹԸ��͡��ॵ���С���DNS�쥳���ɤ��ɲ�</h6>
                                                    <div class="box_body">
                                                        <p>ɽ�����줿DNS�쥳���ɤ򡢰ܹԸ��͡��ॵ���С����ɲä��Ƥ���������</p>
                                                        <p class="note">���ܹԸ��͡��ॵ���С��ˤ�����DNS�쥳���ɤ��ɲ���ˡ���������ξ��ϡ��������ӥ��Υ��ݡ��ȤǤϤʤ����ܹԸ��ؤ��䤤��碌���������ޤ��褦���ꤤ�������ޤ���
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.��ON�ˤ���פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>��ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_16.png" alt="��ON�ˤ���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">6.���ɲä���פ򥯥�å�����</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            ���Ƥ��ǧ�������ɲä���פ򥯥�å����Ƥ���������
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_18.png" alt="���ɲä���פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">7.SSL���괰λ</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            ��λ���̤�SSL������ɲä����ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���<br />
                                                            ����1�������٤�ȿ�Ǥ���ޤ���
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_13.png" alt="SSL���괰λ"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">�֥ȡ������DNS�쥳���ɤ����Ĥ���ޤ���Ǥ������פȤ������顼���Ф���</h6>
                                                    <div class="box_body">
                                                        <p>DNS�쥳���ɤ��������ɲäǤ��Ƥ��뤫���ǧ���Ƥ���������<br>
                                                            �������ɲäǤ��Ƥ�����ϡ�DNS�쥳���ɤ�ȿ�Ǥ˻��֤������äƤ��붲�줬����ޤ���<br>
                                                            ���Ф餯���֤�����������Ǻ���DNSǧ�ڤ򤪻����������
                                                        </p>
                                                        <p>ȿ�Ǥ��פ�����֤ˤĤ��Ƥϡ�¾�ҥ͡��ॵ���С��ˤ��䤤��碌����������</p>
                                                        <p>�������ɲäǤ��Ƥ��ꡢ���֤�����������Ǥ⥨�顼�Ȥʤ���ϡ�Webǧ�ڤ򤪻����������</p>
                                                        <p>
                                                            <img class="img" src="../img/manual/previous/man_server_ssl_17.png" alt="�ȡ������DNS�쥳���ɤ����Ĥ���ޤ���Ǥ���">
                                                        </p>
                                                    </div>
                                                </section>
                                            </div>
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">������μ�ư�����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>̵���ȼ�SSL�ǻ��Ѥ���SSL�����С��������ͭ�����¤ϡ�ȯ��������90���֤Ǥ���<br>
                                    �����ݡ��Ȥˤơ�ͭ�����¤���30������25������20�����ˤ��줾�켫ư������Ԥ���ͭ�����¤��Ĺ�������ޤ���</p>
                                    <p class="mb50">�����ݡ��Ȥˤ�뼫ư���������Ԥ�����硢�᡼��ǹ���̤��λ�Τ�Ϣ��򤤤����ޤ���<br>
                                    25������20�����ˤ⤽�줾����ٹ������Ԥ��ޤ����������˳���������ϼ�ư�������Ǥ��ޤ���Τǡ�<br>�����ͤˤƼ�ư�ǹ����μ�³���򤷤Ƥ���������</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c01">��ư�����������֤����Ԥ��Ƥ��ޤ��������н���ˡ</h5>
                                         <div class="block_body">
                                            <dl class="dl">
                                                <dt>��1������ɥᥤ��Υ͡��ॵ���С��⤷����DNS�쥳���ɤ����å��������С��򻲾Ȥ��Ƥ��ʤ�</dt>
                                                <dd>
                                                    <p>����ɥᥤ���������ӥ��Τ����󥵡��С��򻲾Ȥ���褦�˽������Ƥ���������</p>
                                                    <ul class="ul">
                                                    <li>�ޥ˥奢���<a href="man_domain_namesever_setting.php">�͡��ॵ���С�������</a>��</li>
                                                    </ul>
                                                </dd>
                                                <dt>��2������ɥᥤ����Ф��ơ�������쥯������򤵤�Ƥ���</dt>
                                                <dd>
                                                    <p>������λ�ޤǤδ֡����Ū��̵���ˤ��Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>�ޥ˥奢���<a href="man_server_htaccess.php">.htaccess</a>��</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c02">�������</h5>
                                         <div class="block_body">
                                           <p>�嵭��1�ˡ�2�ˤ����줫���б���ǧ�塢�����С��ѥͥ����ư�ǹ����򤹤뤳�Ȥ��Ǥ��ޤ���</p>
                                             <div class="serial-box mb40">
                                                <section class="box">
                                                    <a id="i1" name="i1"></a>
                                                    <h6 class="box_ttl">1.��SSL����פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="SSL����򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section id="i3" class="box">
                                                    <h6 class="box_ttl">2.�ֹ����פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p>���ꤷ�Ƥ���ɥᥤ������򤷡��ֹ����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_19.png" alt="�ֹ����פ򥯥�å�"></p>
                                                        <p class="note red">���ֹ����ץܥ���ɽ������Ƥ��ʤ����ϡ����˼�ư��������λ���Ƥ��뤿�ᤪ���ͤǤι�����Ȥ����פǤ���</p>
                                                    </div>
                                                </section>
                                            </div><!-- /.serial-box -->
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->
                                </div>
                            </section>
                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-d">̵���ȼ�SSL�ˤĤ���</a></li>
                                    <li><a href="#link-a">̵���ȼ�SSL��������ˡ</a>
                                        <ol>
                                            <li><a href="#link-a01">1.��SSL����פ򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.�ѹ��ܥ�����ON�פˤ���</a></li>
                                            <li><a href="#link-a03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф���̵���ȼ�SSL����������ꤹ��</a>
                                        <ul>
                                            <li><a href="#link-b01">¾�ҥ����С���Webǧ�ڤ�Ԥ����</a></li>
                                            <li><a href="#link-b02">¾�ҥ͡��ॵ���С���DNSǧ�ڤ�Ԥ����</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-c">������μ�ư�����ˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-c01">��ư�����������֤����Ԥ��Ƥ��ޤ��������н���ˡ</a></li>
                                            <li><a href="#link-c02">�������</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl.php">SSL���ͤ˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSL�ο�����������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-d" class="section">
                                <h4 class="section_ttl">̵���ȼ�SSL�ˤĤ���</h4>
                                <div class="section_body">
                                    <p>̵���ȼ�SSL�ϡ��������С��Ǳ�����Υɥᥤ����Ф��ơ�̵����̵���¤����ֲ�ǽ���ȼ�SSL�Ǥ���<br>û���֤Ǿ������ȯ�Ԥ���ǽ�ǡ���ñ����ڤ˥������ƥ��ζ������Ǥ��ޤ���</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DNS�쥳���ɤ򥫥����ޥ�������Ƥ�����</dt>
                                        <dd class="mb0">̵���ȼ�SSL�����ꤹ����ϡ��оݥɥᥤ��Ρ�www����/�ʤ���ξ����A�쥳���ɤ��������ӥ��Τ����󥵡��С��򻲾Ȥ��Ƥ���ɬ�פ�����ޤ���</dd>
                                    </dl>
                                    <div class="msg msg_info">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��꿮�����ι⤤�֥��ץ�����ȼ�SSL�פΤ�����</h6>
                                        <div class="msg_body">
                                            <p>�����ȥ�������б�������̾�֥��ɤξ��������Ѳ�ǽ�ʡ֥��ץ�����ȼ�SSL�פˤĤ��Ƥϡ��ޥ˥奢���<a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">̵���ȼ�SSL��������ˡ</h4>
                                <div class="section_body">
                                    <div class="serial-box mb40">
                                        <div class="box_wrap">
                                            <section id="link-a01" class="box">
                                                <h5 class="box_ttl">1. ��SSL����פ򥯥�å�</h5>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL����򥯥�å�"></p>
                                                </div>
                                            </section>

                                            <section id="link-a02" class="box">
                                                <h5 class="box_ttl">2. �ѹ��ܥ�����ON�פˤ���</h5>
                                                <div class="box_body">
                                                    <p>���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ��α�¦�ˤ����ѹ��ܥ���򥯥�å����ơ�ON�פˤ��Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_2.png?date=2410" alt="�ѹ��򥯥�å�"></p>
                                                    <p class="note">���ȼ�SSL���ɲø塢�����С������꤬ȿ�Ǥ����ޤǺ���1�������٤�����ޤ���</p>
                                                </div>
                                            </section>

                                            <section id="link-a03" class="box">
                                                <h5 class="box_ttl">3. ���괰λ</h5>
                                                <div class="box_body">
                                                    <p>�������̤����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���<br>����1�������٤�ȿ�Ǥ������ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="�ɲô�λ"></p>

                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                        <div class="msg_body">
                                                            <p>�ȼ�SSL�����꤬��λ���������Ǥϡ���http://����פ����https://����פ�URL�ؼ�ưŪ��ž������뤳�ȤϤ���ޤ���<br>
                                                                Web�����Ȥˤ����뤹�٤Ƥ�ɽ������SSL��������ϡ��ޥ˥奢���<a href="man_server_fullssl.php">Web�����Ȥξ��SSL��</a>�פ򤴻��Ȥ���������</p>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>

                            <section id="link-b" class="block">
                                <h4 class="section_ttl">¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф���̵���ȼ�SSL����������ꤹ��</h4>
                                <div class="section_body">

                                    <p>¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф��Ƥ⡢���å��������С�¦��̵���ȼ�SSL����������ꤹ�뤳�Ȥ���ǽ�Ǥ���<br>
                                        HTTPS�����줿�����Ȥ򥨥å��������С��˰�ž����ݤʤɤˤ����Ѥ���������</p>

                                    <aside class="msg msg_info">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SSL����򤹤����ˡ��ɥᥤ��������ɲä��Ƥ�������</h6>
                                        <div class="msg_body">
                                            <p>̵���ȼ�SSL������򤹤����ˡ������С��ѥͥ��<a href="man_domain_setting.php">�ɥᥤ������</a>�פ�ꡢ�ܹԤ���ɥᥤ��̾���ɲä��Ƥ���������</p>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�͡��ॵ���С����ѹ��˴ؤ��뤴���</h6>
                                        <div class="msg_body">
                                            <p>̵���ȼ�SSL�����ꤪ��ӥ����С��ǡ����ΰܹԺ�Ȥ���λ����ޤǤϡ��ܹԤ���ɥᥤ��̾�Υ͡��ॵ���С����ѹ����ʤ��褦�ˤ���դ���������<br>
                                                SSL����䥵���С��ǡ����ΰܹԺ�Ȥ���λ�������˥͡��ॵ���С����ѹ�����ȡ����Ū�˥����Ȥ������ʤ��ʤ��ǽ��������ޤ���</p>
                                        </div>
                                    </aside>

                                    <p class="mb40">��̵���ȼ�SSL�פ���������ꤹ��ˤϡ���¾�ҥ����С��Ǥ�Webǧ�ڡפ�Ԥ���ˡ�ȡ���¾�ҥ͡��ॵ���С��Ǥ�DNS����פ�Ԥ���ˡ��2�̤꤬����ޤ���</p>

                                    <section id="link-b01" class="block">
                                        <h5 class="block_ttl">¾�ҥ����С���Webǧ�ڤ�Ԥ����</h5>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. ��SSL����פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL����򥯥�å�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2.��OFF�פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p>SSL������ɲä���ɥᥤ��ޤ��ϥ��֥ɥᥤ��α�¦�ˤ����OFF�פ򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_2.png?date=2410" alt="��OFF�פ򥯥�å�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">3.��¾�ҥ����С��Ǥ�Webǧ�ڡפ�����</h5>
                                                        <div class="box_body">
                                                            <p>��¾�ҥ����С��Ǥ�Webǧ�ڡפ����򤷤ơ�ɽ�����줿�ȡ�����ե�������ܤΡ֥�������ɡץܥ���򥯥�å����Ƥ����������ȡ�����ե�����Υ�������ɤ��Ϥޤ�ޤ��Τǡ�PC���Ǥ�դξ�����¸���Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_8.png?date=2410" alt="��¾�ҥ����С��Ǥ�Webǧ�ڡפ�����"></p>

                                                            <aside class="msg msg-notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ȡ�����ե����뤬����ɽ�����줿���</h6>
                                                                <div class="msg_body">
                                                                    <p>�ȡ�����ե����뤬����ɽ�����줿���ϡ�ξ���Υե�������Ф��ƥ�������ɤ���Ӹ�ҤΡ�4.�ܹԸ������С��˥ȡ�����ե���������֡פ�»ܤ��Ƥ���������</p>

                                                                    <p><img class="img" src="../img/manual/man_server_ssl_9.png?date=2410" alt="��¾�ҥ����С���Webǧ�ڤ�Ԥ��פǥȡ�����ե����뤬����ɽ�����줿���"></p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">4.�ܹԸ������С��˥ȡ�����ե����������</h5>
                                                        <div class="box_body">
                                                            <p class="mb0">��������ɤ����ȡ�����ե�����򡢡�����URL�פ˵��Ҥ���Ƥ���URL�ǻ��ȤǤ���褦�ˡ��ܹԸ������С������֤��Ƥ���������</p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">5.��ON�ˤ���פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p>��ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_10.png?date=2410" alt="��ON�ˤ���פ򥯥�å�"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�֥ȡ���������URL�˥��������Ǥ��ޤ���Ǥ������פȤ������顼���Ф���</h6>
                                                                <div class="msg_body">
                                                                    <p>�ȡ�����ե����뤬���������֤Ǥ��Ƥ��뤫���ǧ���Ƥ���������<br>
                                                                        ���������֤Ǥ��Ƥ���ˤ�ؤ�餺���顼�Ȥʤ���ϡ�DNSǧ�ڤ򤪻����������</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">6.SSL���괰λ</h5>
                                                        <div class="box_body">
                                                            <p>SSL������ɲä����ɥᥤ���SSL�����������ON�פˤʤäƤ�������괰λ�Ǥ���<br>
                                                                ����1�������٤�ȿ�Ǥ���ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="SSL���괰λ"></p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-b02" class="block">
                                        <h5 class="block_ttl">¾�ҥ͡��ॵ���С���DNSǧ�ڤ�Ԥ����</h5>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. ��SSL����פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL����򥯥�å�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2.���ѹ��פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p>��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ����򤷤Ƥ���������¾�ҥ͡��ॵ���С�����Ͽ����DNS�쥳���ɤ�ɽ������ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_14.png?date=2410" alt="��¾�ҥ����С��Ǥ�Webǧ�ڡפ�����"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>DNS�쥳���ɤ�����ɽ�����줿���</h6>
                                                                <div class="msg_body">
                                                                    <p>DNS�쥳���ɤ�����ɽ�����줿���ϡ�ξ���Υ쥳���ɤ��Ф��Ƹ�ҤΡ�4.�ܹԸ��͡��ॵ���С���DNS�쥳���ɤ��ɲáפ�»ܤ��Ƥ���������</p>

                                                                    <p><img class="img" src="../img/manual/man_server_ssl_15.png?date=2410" alt="��¾�ҥ͡��ॵ���С��Ǥ�DNSǧ�ڡפ�DNS�ե����뤬����ɽ�����줿���"></p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">4.�ܹԸ��͡��ॵ���С���DNS�쥳���ɤ��ɲ�</h5>
                                                        <div class="box_body">
                                                            <p>ɽ�����줿DNS�쥳���ɤ򡢰ܹԸ��͡��ॵ���С����ɲä��Ƥ���������</p>
                                                            <p class="note">���ܹԸ��͡��ॵ���С��ˤ�����DNS�쥳���ɤ��ɲ���ˡ���������ξ��ϡ��������ӥ��Υ��ݡ��ȤǤϤʤ����ܹԸ��ؤ��䤤��碌���������ޤ��褦���ꤤ�������ޤ���
                                                            </p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">5.��ON�ˤ���פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p>��ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_16.png?date=2410" alt="��ON�ˤ���פ򥯥�å�"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�֥ȡ������DNS�쥳���ɤ����Ĥ���ޤ���Ǥ������פȤ������顼���Ф���</h6>
                                                                <div class="msg_body">
                                                                    <p>DNS�쥳���ɤ��������ɲäǤ��Ƥ��뤫��ǧ���Ƥ���������<br>
                                                                        �������ɲäǤ��Ƥ�����ϡ�DNS�쥳���ɤ�ȿ�Ǥ˻��֤������äƤ��붲�줬����ޤ���<br>
                                                                        ���Ф餯���֤�����������Ǻ���DNSǧ�ڤ򤪻����������
                                                                    </p>
                                                                    <p>ȿ�Ǥ��פ�����֤ˤĤ��Ƥϡ�¾�ҥ͡��ॵ���С��ˤ��䤤��碌����������</p>
                                                                    <p>�������ɲäǤ��Ƥ��ꡢ���֤�����������Ǥ⥨�顼�Ȥʤ���ϡ�Webǧ�ڤ򤪻����������</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">6.SSL���괰λ</h5>
                                                        <div class="box_body">
                                                            <p>SSL������ɲä����ɥᥤ���SSL�����������ON�פˤʤäƤ�������괰λ�Ǥ���<br>
                                                                ����1�������٤�ȿ�Ǥ���ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="SSL���괰λ"></p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                </div>
                            </section>

                            <section id="link-c" class="section">
                                <h4 class="section_ttl">������μ�ư�����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>
                                        ̵���ȼ�SSL�ǻ��Ѥ���SSL�����С��������ͭ�����¤ϡ�ȯ��������90���֤Ǥ���<br>
                                        �����ݡ��Ȥˤơ�ͭ�����¤���30������25������20�����ˤ��줾�켫ư������Ԥ���ͭ�����¤��Ĺ�������ޤ���
                                    </p>
                                    <p class="mb50">
                                        �����ݡ��Ȥˤ�뼫ư���������Ԥ�����硢�᡼��ǹ���̤��λ�Τ�Ϣ��򤤤����ޤ���<br>
                                        25������20�����ˤ⤽�줾����ٹ������Ԥ��ޤ����������˳���������ϼ�ư�������Ǥ��ޤ���Τǡ������ͤˤƼ�ư�ǹ����μ�³���򤷤Ƥ���������
                                    </p>

                                    <section id="link-c01" class="block">
                                        <h5 class="block_ttl">��ư�����������֤����Ԥ��Ƥ��ޤ��������н���ˡ</h5>
                                        <div class="section_body">
                                            <dl class="dl">
                                                <dt>��1������ɥᥤ��Υ͡��ॵ���С��⤷����DNS�쥳���ɤ����å��������С��򻲾Ȥ��Ƥ��ʤ�</dt>
                                                <dd>
                                                    <p>����ɥᥤ���������ӥ��Τ����󥵡��С��򻲾Ȥ���褦�˽������Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>�ޥ˥奢���<a href="man_domain_namesever_setting.php">�͡��ॵ���С�������</a>��</li>
                                                    </ul>
                                                </dd>
                                                <dt>��2������ɥᥤ����Ф��ơ�������쥯������򤵤�Ƥ���</dt>
                                                <dd>
                                                    <p>������λ�ޤǤδ֡����Ū��̵���ˤ��Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>�ޥ˥奢���<a href="man_server_htaccess.php">.htaccess</a>��</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section id="link-c02" class="block">
                                        <h5 class="block_ttl">�������</h5>
                                        <div class="block_body">
                                            <p>�嵭��1�ˡ�2�ˤ����줫���б���ǧ�塢�����С��ѥͥ����ư�ǹ����򤹤뤳�Ȥ��Ǥ��ޤ���</p>

                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. ��SSL����פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���SSL����פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL����򥯥�å�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2. �ֹ����פ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p>���ꤷ�Ƥ���ɥᥤ������򤷡��ֹ����פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_19.png?date=2410" alt="�ֹ����פ򥯥�å�"></p>
                                                            <p class="note red">���ֹ����ץܥ���ɽ������Ƥ��ʤ����ϡ����˼�ư��������λ���Ƥ��뤿�ᤪ���ͤǤι�����Ȥ����פǤ���</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>
                                </div>
                            </section>

                        </div>
                        <!--/ ���ѥͥ�-->
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