<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>X��������졼��(���å�����������졼��) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���X��������졼��(���å�����������졼��)�˴ؤ�����ͤΰ����򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">X��������졼��(���å�����������졼��)</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">X��������졼���ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">X��������졼����������</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.X��������졼�������˥塼��</a></li>
                                            <li><a href="#link-previous-b02">2.�������Ƥ����򤹤�</a></li>
                                            <li><a href="#link-previous-b03">3.�������ꤹ��</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">X��������졼���ˤĤ���</h4>
                                <div class="section_body">
                                    <p>��X��������졼���פ�Web�����Ȥ��®�����경�����뤿��ε�ǽ�Ǥ���<br>
                                    ����ϰʲ��Τ����줫���餪���Ӥ��������ޤ���</p>

                                    <ul class="ul ml40">
                                        <li><em>X��������졼�� Ver.1</em> �� ��Ū�ե�����ι�®��(����å���)</li>
                                        <li><em>X��������졼�� Ver.2</em> �� ��Ū�ե�����ι�®��(����å���)��PHP�ץ����ι�®��</li>
                                    </ul>

                                    <p>����Ū�ե�����ι�®��(����å���)�ס�PHP�ץ����ι�®���פλ��ͤ˴ؤ��Ƥϲ����򤴻��Ȥ���������</p>

                                    <table class="table">
                                        <thead>
                                            <tr><th colspan="2">��Ū�ե�����ι�®��(����å���)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">����</th>
                                                <td>
                                                    ��Ū�ե�����Υ���å���򥵡��С����ݻ����뤳�Ȥǡ������Ȥι�®����Ʊ�������������γ�ĥ���Ԥ��ޤ���
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">����å����оݥե�����ʳ�ĥ�ҡ�</th>
                                                <td>
                                                    .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">����å������¸����</th>
                                                <td>
                                                    <p>
                                                        2ʬ��
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">����å��夬��¸����ʤ�������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�쥹�ݥ󥹥إå���Cache-Control�ˡ�no-cache�ס�no-store�ס�private�ס�must-validate�פΤ����줫��ޤ���</li>
                                                        <li>�쥹�ݥ󥹥إå���Set-Cookie��ޤ���</li>
                                                        <li>�쥹�ݥ󥹥����ɡ�200�ס�404�װʳ��ξ��</li>
                                                        <li>�ʲ�ñ�줬�ޤޤ��cookie�����Ѥ������������ξ��<br>
                                                            (��[a-f0-9]+�פϱѻ�a~f�⤷���Ͽ�����1ʸ���ʾ�ޤ�)<br>
                                                            wp-postpass
                                                            wordpress_logged_in
                                                            comment_author
                                                            wordpress_no_cache
                                                            wordpress_[a-f0-9]+
                                                            wordpress_test_cookie
                                                            woocommerce_items_in_cart
                                                            woocommerce_cart_hash
                                                            w3tc_logged_out
                                                            wptouch_switch_toggle=normal
                                                            wptouch-pro-view=desktop
                                                            usces_cookie
                                                        </li>
                                                        <li>�ʲ�URI�ؤΥ��������򤹤���<br>
                                                            (��*�פ�Ǥ�դ�ʸ����)<br>
                                                            /wp-admin/
                                                            /wp-json/
                                                            /wp-*.php
                                                            /xmlrpc.php
                                                            /feed/
                                                            sitemap.xml
                                                            sitemap_index.xml
                                                            /wp-content/plugins/siteguard
                                                            /login_*
                                                            /store/
                                                            /cart/
                                                            /my-account/
                                                            /checkout/
                                                            /addons/
                                                            ?wptouch_switch=mobile
                                                            ?wptouch_switch=desktop
                                                            /usces-cart/
                                                            /usces-member/
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">��ջ���</th>
                                                <td>
                                                    <p>ˬ��Ԥ��Ȥ�ɽ�����Ƥ��ۤʤ�褦�ʥڡ���(����������Ȥ䥷��åԥ󥰥�����)���Ǥϡ�����ǽ�ˤ���®������ٷڸ��θ��̤��ФŤ餤��礬����ޤ���</p>
                                                    <p>�����֥����С���ˡ�����Υ桼����������δĶ��Τߤ˸��������¤��Ƥ��륳��ƥ�ĥǡ������������硢���蹭����������Ƥ��ʤ��Ϥ��Υǡ�������С����ץ�����˥���å��夵�졢�տޤ��ʤ��桼�����������Υǡ����إ���������ǽ�ȤʤäƤ��ޤ����Ȥ�����ޤ���</p>
                                                    <p class="note note_x2">
                                                        �㡧.htaccess���Ѥ��ơ������IP���ɥ쥹����Υ�����������ݤ���<br>
                                                        .htaccess���Ѥ��ơ��֥饦�����Ȥ�ɽ�����륳��ƥ�Ĥο���ʬ����Ԥ�������
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead>
                                            <tr><th colspan="2">PHP�ץ����ι�®��</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">����</th>
                                                <td>
                                                    <p>PHP�ץ����ν���®�٤����20��(��)�ޤǸ��夵���ޤ���</p>
                                                    <p class="note">�����å��������С����Ʊ�칽�������С����Ф��롢Apache Bench���ޥ�ɤΥѥե����ޥ���Ӥˤ����</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">�о�PHP�С������</th>
                                                <td>
                                                    <p>
                                                        �ܵ�ǽ�����Ѥ�����硢�����˰ʲ���PHP�С����������ꤷ�Ƥ�������ɬ�פ�����ޤ���<br>
                                                        PHP�С��������ڤ��ؤ���ˡ�ϡ�<a href="man_program_php_ver.php">PHP�ΥС������ˤĤ���</a>�פ򤴻��Ȥ���������<br>
                                                    </p>
                                                    <ul class="ul">
                                                        <li>PHP 8.3.x</li>
                                                        <li>PHP 8.2.x</li>
                                                        <li>PHP 8.1.x</li>
                                                        <li>PHP 8.0.x</li>
                                                        <li>PHP 7.4.x</li>
                                                        <li>PHP 7.3.x</li>
                                                        <li>PHP 7.2.x</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">php.ini����ˤĤ���</th>
                                                <td>
                                                    <p>
                                                        �ܵ�ǽ������ϡ��оݥɥᥤ��Υե������Ρ�.user.ini�פȤ����ե����뤬php.ini�ե�����Ȥ��Ƶ�ǽ���ޤ���
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">��ջ���</th>
                                                <td>
                                                    <p>
                                                        �ܵ�ǽ������ϡ�php.ini�ΰ������ܤ�̵���Ȥʤ�ޤ���<br>
                                                        ̵���Ȥʤ���ܤϡ�<a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a>�פ򤴻��Ȥ���������<br>
                                                        �ޤ����ܵ�ǽ�������php.ini�������ѹ�ȿ�ǤޤǺ���5ʬ���٤������ǽ��������ޤ���
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">X��������졼����������</h4>
                                <div class="section_body">
                                    <p>X��������졼����������ѹ��������ϡ��ʲ��μ������ޤ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. X��������졼�������˥塼��</h6>
                                            <div class="box_body">
                                                 <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���X��������졼���ץ�˥塼�򥯥�å������оݤΥɥᥤ������򤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_1.png" alt="�����С��ѥͥ�ǥɥᥤ������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. �������Ƥ����򤹤�</h6>
                                            <div class="box_body">
                                                <p>�оݥɥᥤ���Ŭ�Ѥ�����������򤷡ֳ�ǧ���̤ؿʤ�פ򥯥�å����ơ��ѹ����Ƥγ�ǧ��Ԥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_2.png" alt="��������򤷤ơֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                                <table class="table w100per">
                                                    <tbody>
                                                        <tr>
                                                            <th>OFF</th>
                                                            <td>
                                                                <p>X��������졼����̵���ˤʤ�ޤ���</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>X��������졼�� Ver.1</th>
                                                            <td>
                                                                <p>��Ū�ե�����ι�®����Ʊ�������������γ�ĥ���Ԥ��ޤ���</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>X��������졼�� Ver.2</th>
                                                            <td>
                                                                <p>��Ver.1�פ���ħ�˲ä��ơ�PHP�ץ���ब��®������ޤ���</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. �������ꤹ��</h6>
                                            <div class="box_body">
                                                <p>���ѹ�����פ򥯥�å������ѹ����Ƥ���ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_3.png" alt="���ѹ�����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                       <p class="note mt15">������ǽ�����Ѥ����������Ȥǡ������С�������򤷤��ɥᥤ��Υǥ��쥯�ȥ�ľ�������֤���Ƥ����.htaccess�פؤ��ѹ����Ԥ��ޤ����������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺������ʤ��褦����դ���������</p>

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
                                    <li><a href="#link-a">X��������졼���ˤĤ���</a></li>
                                    <li><a href="#link-b">X��������졼����������</a>
                                        <ol>
                                            <li><a href="#link-b01">1.X��������졼�������˥塼��</a></li>
                                            <li><a href="#link-b02">2.�������Ƥ����򤷡����ꤹ��</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">X��������졼���ˤĤ���</h4>
                                <div class="section_body">
                                    <p>��X��������졼���פ�Web�����Ȥ��®�����경�����뤿��ε�ǽ�Ǥ���<br>
                                        ����ϰʲ��Τ����줫���餪���Ӥ��������ޤ���</p>
                                    <dl class="dl">
                                        <dt>X��������졼�� Ver.1</dt>
                                        <dd>��Ū�ե�����ι�®��(����å���)</dd>
                                        <dt>X��������졼�� Ver.2</dt>
                                        <dd>��Ū�ե�����ι�®��(����å���)��PHP�ץ����ι�®��</dd>
                                    </dl>
                                    <p>����Ū�ե�����ι�®��(����å���)�ס�PHP�ץ����ι�®���פλ��ͤ˴ؤ��Ƥϲ����򤴻��Ȥ���������</p>


                                    <table class="table">
                                        <thead>
                                        <tr><th colspan="2">��Ū�ե�����ι�®��(����å���)</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="w20per">����</th>
                                            <td>
                                                ��Ū�ե�����Υ���å���򥵡��С����ݻ����뤳�Ȥǡ������Ȥι�®����Ʊ�������������γ�ĥ���Ԥ��ޤ���
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">����å����оݥե�����ʳ�ĥ�ҡ�</th>
                                            <td>
                                                .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">����å������¸����</th>
                                            <td>
                                                <p>
                                                    2ʬ��
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">����å��夬��¸����ʤ�������</th>
                                            <td>
                                                <ul class="ul">
                                                    <li>�쥹�ݥ󥹥إå���Cache-Control�ˡ�no-cache�ס�no-store�ס�private�ס�must-validate�פΤ����줫��ޤ���</li>
                                                    <li>�쥹�ݥ󥹥إå���Set-Cookie��ޤ���</li>
                                                    <li>�쥹�ݥ󥹥����ɡ�200�ס�404�װʳ��ξ��</li>
                                                    <li>�ʲ�ñ�줬�ޤޤ��cookie�����Ѥ������������ξ��<br>
                                                        (��[a-f0-9]+�פϱѻ�a~f�⤷���Ͽ�����1ʸ���ʾ�ޤ�)<br>
                                                        wp-postpass
                                                        wordpress_logged_in
                                                        comment_author
                                                        wordpress_no_cache
                                                        wordpress_[a-f0-9]+
                                                        wordpress_test_cookie
                                                        woocommerce_items_in_cart
                                                        woocommerce_cart_hash
                                                        w3tc_logged_out
                                                        wptouch_switch_toggle=normal
                                                        wptouch-pro-view=desktop
                                                        usces_cookie
                                                    </li>
                                                    <li>�ʲ�URI�ؤΥ��������򤹤���<br>
                                                        (��*�פ�Ǥ�դ�ʸ����)<br>
                                                        /wp-admin/
                                                        /wp-json/
                                                        /wp-*.php
                                                        /xmlrpc.php
                                                        /feed/
                                                        sitemap.xml
                                                        sitemap_index.xml
                                                        /wp-content/plugins/siteguard
                                                        /login_*
                                                        /store/
                                                        /cart/
                                                        /my-account/
                                                        /checkout/
                                                        /addons/
                                                        ?wptouch_switch=mobile
                                                        ?wptouch_switch=desktop
                                                        /usces-cart/
                                                        /usces-member/
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">��ջ���</th>
                                            <td>
                                                <p>ˬ��Ԥ��Ȥ�ɽ�����Ƥ��ۤʤ�褦�ʥڡ���(����������Ȥ䥷��åԥ󥰥�����)���Ǥϡ�����ǽ�ˤ���®������ٷڸ��θ��̤��ФŤ餤��礬����ޤ���</p>
                                                <p>�����֥����С���ˡ�����Υ桼����������δĶ��Τߤ˸��������¤��Ƥ��륳��ƥ�ĥǡ������������硢���蹭����������Ƥ��ʤ��Ϥ��Υǡ�������С����ץ�����˥���å��夵�졢�տޤ��ʤ��桼�����������Υǡ����إ���������ǽ�ȤʤäƤ��ޤ����Ȥ�����ޤ���</p>
                                                <p class="note note--x2">
                                                    �㡧.htaccess���Ѥ��ơ������IP���ɥ쥹����Υ�����������ݤ���<br>
                                                    .htaccess���Ѥ��ơ��֥饦�����Ȥ�ɽ�����륳��ƥ�Ĥο���ʬ����Ԥ�����
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead>
                                        <tr><th colspan="2">PHP�ץ����ι�®��</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="w20per">����</th>
                                            <td>
                                                <p>PHP�ץ����ν���®�٤����20��(��)�ޤǸ��夵���ޤ���</p>
                                                <p class="note">�����å��������С����Ʊ�칽�������С����Ф��롢Apache Bench���ޥ�ɤΥѥե����ޥ���Ӥˤ����</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">�о�PHP�С������</th>
                                            <td>
                                                <p>
                                                    �ܵ�ǽ�����Ѥ�����硢�����˰ʲ���PHP�С����������ꤷ�Ƥ�������ɬ�פ�����ޤ���<br>
                                                    PHP�С��������ڤ��ؤ���ˡ�ϡ�<a href="man_program_php_ver.php">PHP�ΥС������ˤĤ���</a>�פ򤴻��Ȥ���������<br>
                                                </p>
                                                <ul class="ul">
                                                    <li>PHP 8.3.x</li>
                                                    <li>PHP 8.2.x</li>
                                                    <li>PHP 8.1.x</li>
                                                    <li>PHP 8.0.x</li>
                                                    <li>PHP 7.4.x</li>
                                                    <li>PHP 7.3.x</li>
                                                    <li>PHP 7.2.x</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">php.ini����ˤĤ���</th>
                                            <td>
                                                <p>
                                                    �ܵ�ǽ������ϡ��оݥɥᥤ��Υե������Ρ�.user.ini�פȤ����ե����뤬php.ini�ե�����Ȥ��Ƶ�ǽ���ޤ���
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">��ջ���</th>
                                            <td>
                                                <p>
                                                    �ܵ�ǽ������ϡ�php.ini�ΰ������ܤ�̵���Ȥʤ�ޤ���<br>
                                                    ̵���Ȥʤ���ܤϡ�<a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a>�פ򤴻��Ȥ���������<br>
                                                    �ޤ����ܵ�ǽ�������php.ini�������ѹ�ȿ�ǤޤǺ���5ʬ���٤������ǽ��������ޤ���
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section><!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">X��������졼����������</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. X��������졼�������˥塼��</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���X��������졼���ץ�˥塼�򥯥�å������оݤΥɥᥤ��Υڥ󥢥�����򥯥�å����Ƥ���������</p>
                                                <p><img alt="�оݤΥɥᥤ��Υڥ󥢥�����򥯥�å����Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_xaccelerator_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.�������Ƥ����򤷡����ꤹ��</h5>
                                            <div class="box_body">
                                                <p>�оݥɥᥤ���Ŭ�Ѥ�����������򤷡����ꤹ��פ򥯥�å����ơ��ѹ����Ƥ���ꤷ�Ƥ���������</p>
                                                <p><img alt="��������򤷤ơ����ꤹ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�" class="img" src="../img/manual/man_server_xaccelerator_2.png?date=2410"></p>
                                                <table class="table w100per">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30perL">OFF</th>
                                                        <td>
                                                            <p>X��������졼����̵���ˤʤ�ޤ���</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>X��������졼�� Ver.1</th>
                                                        <td>
                                                            <p>��Ū�ե�����ι�®����Ʊ�������������γ�ĥ���Ԥ��ޤ���</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>X��������졼�� Ver.2</th>
                                                        <td>
                                                            <p>��Ver.1�פ���ħ�˲ä��ơ�PHP�ץ���ब��®������ޤ���</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mt20">
                                        <p class="note">������ǽ�����Ѥ����������Ȥǡ������С�������򤷤��ɥᥤ��Υǥ��쥯�ȥ�ľ�������֤���Ƥ����.htaccess�פؤ��ѹ����Ԥ��ޤ����������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺������ʤ��褦����դ���������</p>
                                    </div>
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