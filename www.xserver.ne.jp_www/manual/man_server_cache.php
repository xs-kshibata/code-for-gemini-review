<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�����С�����å������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���Web�����Ⱦ�Τ��٤ƤΥե�����򥭥�å��夷�ơ���®����Ʊ�������������γ�ĥ��Ԥ��֥����С�����å�������פΤ�����Ǥ���">

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
            
                <h3 class="sub-ttl">�����С�����å�������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�����С�����å�������Ȥ�</a></li>
                                    <li><a href="#link-previous-b">�����С�����å���������ڤ��ؤ�������</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�֥����С�����å�������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b02">2.�������Ƥ����򤹤�</a></li>
                                            <li><a href="#link-previous-b03">3.�������ꤹ��</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">����å�����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�����С�����å�������Ȥ�</h4>
                                <div class="section_body">
                                    <p>�����С�����å��������ͭ���ˤ��뤳�Ȥǡ������С���ǥե�����Υ���å��夬�������졢Web�����Ȥ�ɽ��®�١�Ʊ�������������������˸��夵���뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p class="note">�������С�����å��������ͭ���ˤ��뤳�Ȥ�X��������졼����ͭ���ˤʤ�ޤ���X��������졼���ξܺ٤ˤĤ��Ƥϡ�<a href="man_server_xaccelerator.php">X��������졼��(���å�����������졼��)</a>�פ򤴻��Ȥ���������</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b"><a id="edit" name="edit"></a>�����С�����å���������ڤ��ؤ�������</h4>
                                <div class="section_body">
                                    <p>�����С�����å����������ѹ��������ϡ��ʲ��μ������ޤ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1. �֥����С�����å�������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥����С�����å�������ץ�˥塼�򥯥�å������оݤΥɥᥤ������򤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_1.png" alt="�����С��ѥͥ�ǥɥᥤ������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2. �������Ƥ����򤹤�</h5>
                                            <div class="box_body">
                                                <p>��ON�ˤ���פޤ��ϡ�OFF�ˤ���פ����򤷡ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_2.png" alt="��������򤷤ơֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                                <p>�����С�����å��������ͭ���ˤ��뤳�Ȥǡ��ʲ����̤�ե����뤬����å��夵���褦�ˤʤ�ޤ���</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>����å������¸����</dt>
                                                    <dd>
                                                        <p>�ʲ��ե�����(��ĥ��)��2ʬ�֥���å��夵��ޤ���</p>
                                                        <p class="border border_blue break-all">.css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        <p>�嵭�ʳ��Υե������1ʬ�֥���å��夵��ޤ���</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�쥹�ݥ󥹥إå��˰ʲ���ޤॳ��ƥ�Ĥϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Control�ˡ�no-cache�ס�no-store�ס�private�ס�must-validate�פΤ����줫��ޤ���</li>
                                                            <li>Set-Cookie��ޤ���</li>
                                                            <!--<li>Basicǧ�ڤ�ޤ���</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�����쥹�ݥ󥹥����ɰʳ��ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>200</li>
                                                            <li>404</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ʲ�ñ�줬�ޤޤ��cookie�����Ѥ������������ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <p>(��[a-f0-9]+�פϱѻ�a~f�⤷���Ͽ�����1ʸ���ʾ�ޤ�)</p>
                                                        <ul class="ul">
                                                            <li>wp-postpass</li>
                                                            <li>wordpress_logged_in</li>
                                                            <li>comment_author</li>
                                                            <li>wordpress_no_cache</li>
                                                            <li>wordpress_[a-f0-9]+</li>
                                                            <li>wordpress_test_cookie</li>
                                                            <li>woocommerce_items_in_cart</li>
                                                            <li>woocommerce_cart_hash</li>
                                                            <li>w3tc_logged_out</li>
                                                            <li>wptouch_switch_toggle=normal</li>
                                                            <li>wptouch-pro-view=desktop</li>
                                                            <li>usces_cookie</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ʲ�URI�ؤΥ��������ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <p>(��*�פ�Ǥ�դ�ʸ����)</p>
                                                        <ul class="ul">
                                                            <li>/wp-admin/</li>
                                                            <li>/wp-json/</li>
                                                            <li>/wp-*.php</li>
                                                            <li>/xmlrpc.php</li>
                                                            <li>/feed/</li>
                                                            <li>sitemap.xml</li>
                                                            <li>sitemap_index.xml</li>
                                                            <li>/wp-content/plugins/siteguard</li>
                                                            <li>/login_*</li>
                                                            <li>/store/</li>
                                                            <li>/cart/</li>
                                                            <li>/my-account/</li>
                                                            <li>/checkout/</li>
                                                            <li>/addons/</li>
                                                            <li>?wptouch_switch=mobile</li>
                                                            <li>?wptouch_switch=desktop</li>
                                                            <li>/usces-cart/</li>
                                                            <li>/usces-member/</li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                <aside class="msg msg_caution mt20">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>�����֥����С���ˡ�����Υ桼����������δĶ��Τߤ˸��������¤��Ƥ��륳��ƥ�ĥǡ������������硢���蹭����������Ƥ��ʤ��Ϥ��Υǡ�������С����ץ�����˥���å��夵�졢�տޤ��ʤ��桼�����������Υǡ����إ���������ǽ�ȤʤäƤ��ޤ����Ȥ�����ޤ��Τǡ�����դ���������</p>
                                                        <p class="note note_x2">
                                                            �㡧.htaccess���Ѥ��ơ������IP���ɥ쥹����Υ�����������ݤ���<br>
                                                            .htaccess���Ѥ��ơ��֥饦�����Ȥ�ɽ�����륳��ƥ�Ĥο���ʬ����Ԥ�������
                                                        </p>
                                                    </div>
                                                </aside>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3. �������ꤹ��</h5>
                                            <div class="box_body">
                                                <p>���ѹ�����פ򥯥�å������ѹ����Ƥ���ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_3.png" alt="���ѹ�����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                       <p class="note mt15">������ǽ�����Ѥ����������Ȥǡ������С�������򤷤��ɥᥤ��Υǥ��쥯�ȥ�ľ�������֤���Ƥ����.htaccess�פؤ��ѹ����Ԥ��ޤ����������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺������ʤ��褦����դ���������</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">����å�����</h4>
                                <div class="section_body">
                                    <p>�֥���å������פΡֺ������פ򥯥�å�����ȡ����򤷤��ɥᥤ��Υ���å���������뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_cache_4.png" alt="�֥���å�������פΡֺ������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
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
                                    <li><a href="#link-a">�����С�����å�������Ȥ�</a></li>
                                    <li><a href="#link-b">�����С�����å���������ڤ��ؤ�������</a>
                                        <ol>
                                            <li><a href="#link-b01">1.�֥����С�����å�������פ򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.�������Ƥ��ѹ�����</a></li>
                                            <li><a href="#link-b03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">����å�����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">�����С�����å�������Ȥ�</h4>
                                <div class="section_body">
                                    <p>�����С�����å��������ͭ���ˤ��뤳�Ȥǡ������С���ǥե�����Υ���å��夬�������졢Web�����Ȥ�ɽ��®�١�Ʊ�������������������˸��夵���뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p class="note">�������С�����å��������ͭ���ˤ��뤳�Ȥ�X��������졼����ͭ���ˤʤ�ޤ���X��������졼���ξܺ٤ˤĤ��Ƥϡ�<a href="man_server_xaccelerator.php">X��������졼��(���å�����������졼��)</a>�פ򤴻��Ȥ���������</p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h4 class="section_ttl">�����С�����å���������ڤ��ؤ�������</h4>
                                <div class="section_body">
                                    <p>�����С�����å����������ѹ��������ϡ��ʲ��μ������ޤ���</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1.�֥����С�����å�������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥����С�����å�������ץ�˥塼�򥯥�å������оݤΥɥᥤ������򤷤Ƥ���������</p>
                                                <p><img alt="�����С��ѥͥ�ǥɥᥤ������򤷤Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_cache_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. �������Ƥ��ѹ�����</h5>
                                            <div class="box_body">
                                                <p>�ѹ��ܥ���򥯥�å������ɽ���������ջ�����ǧ�����Τ�����ON�ˤ���פ򥯥�å����Ƥ���������</p>
                                                <p><img alt="��������򤷤ơֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_cache_2.png?date=2410"></p>
                                                <p>�����С�����å��������ͭ���ˤ��뤳�Ȥǡ��ʲ����̤�ե����뤬����å��夵���褦�ˤʤ�ޤ���</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>����å������¸����</dt>
                                                    <dd>
                                                        <p>�ʲ��ե�����(��ĥ��)��2ʬ�֥���å��夵��ޤ���</p>
                                                        <p class="border border_blue break-all">.css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        <p>�嵭�ʳ��Υե������1ʬ�֥���å��夵��ޤ���</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�쥹�ݥ󥹥إå��˰ʲ���ޤॳ��ƥ�Ĥϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Control�ˡ�no-cache�ס�no-store�ס�private�ס�must-validate�פΤ����줫��ޤ���</li>
                                                            <li>Set-Cookie��ޤ���</li>
                                                            <!--<li>Basicǧ�ڤ�ޤ���</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�쥹�ݥ󥹥إå��˰ʲ���ޤॳ��ƥ�Ĥϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Control�ˡ�no-cache�ס�no-store�ס�private�ס�must-validate�פΤ����줫��ޤ���</li>
                                                            <li>Set-Cookie��ޤ���</li>
                                                            <!--<li>Basicǧ�ڤ�ޤ���</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�����쥹�ݥ󥹥����ɰʳ��ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>200</li>
                                                            <li>404</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ʲ�ñ�줬�ޤޤ��cookie�����Ѥ������������ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <p>(��[a-f0-9]+�פϱѻ�a~f�⤷���Ͽ�����1ʸ���ʾ�ޤ�)</p>
                                                        <ul class="ul">
                                                            <li>wp-postpass</li>
                                                            <li>wordpress_logged_in</li>
                                                            <li>comment_author</li>
                                                            <li>wordpress_no_cache</li>
                                                            <li>wordpress_[a-f0-9]+</li>
                                                            <li>wordpress_test_cookie</li>
                                                            <li>woocommerce_items_in_cart</li>
                                                            <li>woocommerce_cart_hash</li>
                                                            <li>w3tc_logged_out</li>
                                                            <li>wptouch_switch_toggle=normal</li>
                                                            <li>wptouch-pro-view=desktop</li>
                                                            <li>usces_cookie</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ʲ�URI�ؤΥ��������ϥ���å��夷�ޤ���</dt>
                                                    <dd>
                                                        <p>(��*�פ�Ǥ�դ�ʸ����)</p>
                                                        <ul class="ul">
                                                            <li>/wp-admin/</li>
                                                            <li>/wp-json/</li>
                                                            <li>/wp-*.php</li>
                                                            <li>/xmlrpc.php</li>
                                                            <li>/feed/</li>
                                                            <li>sitemap.xml</li>
                                                            <li>sitemap_index.xml</li>
                                                            <li>/wp-content/plugins/siteguard</li>
                                                            <li>/login_*</li>
                                                            <li>/store/</li>
                                                            <li>/cart/</li>
                                                            <li>/my-account/</li>
                                                            <li>/checkout/</li>
                                                            <li>/addons/</li>
                                                            <li>?wptouch_switch=mobile</li>
                                                            <li>?wptouch_switch=desktop</li>
                                                            <li>/usces-cart/</li>
                                                            <li>/usces-member/</li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                <aside class="msg msg_caution mt20">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>�����֥����С���ˡ�����Υ桼����������δĶ��Τߤ˸��������¤��Ƥ��륳��ƥ�ĥǡ������������硢���蹭����������Ƥ��ʤ��Ϥ��Υǡ�������С����ץ�����˥���å��夵�졢�տޤ��ʤ��桼�����������Υǡ����إ���������ǽ�ȤʤäƤ��ޤ����Ȥ�����ޤ��Τǡ�����դ���������</p>
                                                        <p class="note note--x2">
                                                            �㡧.htaccess���Ѥ��ơ������IP���ɥ쥹����Υ�����������ݤ���<br>
                                                            .htaccess���Ѥ��ơ��֥饦�����Ȥ�ɽ�����륳��ƥ�Ĥο���ʬ����Ԥ�������
                                                        </p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3.���괰λ</h5>
                                            <div class="box_body">
                                                <p>�����������ON�פ��ѹ�����Ƥ��������괰λ�Ǥ���</p>
                                                <p><img alt="���ѹ�����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_cache_3.png?date=2410"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mt20">
                                        <p class="note">������ǽ�����Ѥ����������Ȥǡ������С�������򤷤��ɥᥤ��Υǥ��쥯�ȥ�ľ�������֤���Ƥ����.htaccess�פؤ��ѹ����Ԥ��ޤ����������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺������ʤ��褦����դ���������</p>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-c" class="section">
                                <h4 class="section_ttl">����å�����</h4>
                                <div class="section_body">
                                    <p>�֥���å������פ򥯥�å�����ȡ����򤷤��ɥᥤ��Υ���å���������뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p><img alt="�֥���å�������פΡֺ������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_cache_4.png?date=2410"></p>
                                </div>
                            </section><!-- /.section -->

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