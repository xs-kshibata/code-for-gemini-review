<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Web�����Ȥξ��SSL�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���Web�����Ȥ���SSL��������ˡ�ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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

                <h3 class="sub-ttl">Web�����Ȥξ��SSL��</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Web�����Ȥξ��SSL��</a></li>
                                    <li><a href="#link-previous-b">�����Ѥ�CMS�ˤ�������SSL��</a></li>
                                    <li><a href="#link-previous-c">�֥饦����Ƿٹ�ɽ������Ƥ��ޤ����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <aside class="msg msg_caution">
                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h4>
                                <div class="msg_body">
                                    <p>Web�����Ȥ���SSL������ˤϡ���̵���ȼ�SSL�פ⤷���ϡ��֥��ץ�����ȼ�SSL�פΤ��������ߤ�ɬ�פǤ���<br>
                                    ���������ߤμ��ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                                    <p>�ޥ˥奢���<a href="man_server_ssl.php">̵���ȼ�SSL����</a>�ס�<a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>��</p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Web�����Ȥξ��SSL��</h4>
                                <p>�ȼ�SSL�����꤬��λ���������Ǥϡ���ưŪ�ˡ�https://���פ�URL��ž������ޤ���</p>
                                <p>Web�����Ȥˤ����뤹�٤Ƥ�ɽ������SSL��������ϡ�������������ɲä��ޤ���</p>
                                <div class="serial-box">

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a01">1. .htaccess�Խ��򥯥�å�</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���.htaccess�Խ��ץ�˥塼�򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_fullssl_1.png" alt="�����С��ѥͥ롦.htaccess�Խ��Υ����꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a02">2. .htaccess�Խ����̤�ɽ��</h6>
                                        <div class="box_body">
                                            <p>��.htaccess�Խ��ץ��֤򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_fullssl_2.png" alt="���ꤹ��ɥᥤ������򤷡���.htaccess�Խ��ץ��֤򥯥�å�"></p>
                                        </div>
                                    </section>


                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a03">3. �������Ƥ��ɲ�</h6>
                                        <div class="box_body">
                                            <p>��¸�������<strong class="red">�������</strong>���ʲ��ε��Ҥ��ɵ����ޤ���<br>�����꤬ȿ�Ǥ���ʤ���礬���뤿�ᡢ��Ƭ���ɵ��������侩���Ƥ���ޤ���</p>
                                            <pre class="code mb0">RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]</pre>
                                            <p class="mt20"><img class="img" src="../img/manual/previous/man_server_fullssl_3.png" alt=".htaccess���ɲä������Ƥ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-previous-a04">4. ���괰λ</h6>
                                        <div class="box_body">
                                            <p>��http://���פ�URL�ǥ������������ݡ���ưŪ�ˡ�https://���פ�URL��ž������Ƥ�������괰λ�Ǥ���</p>
                                        </div>
                                    </section>

                                </div>
                                <!-- /.serial-box -->
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�����Ѥ�CMS�ˤ�������SSL��</h4>
                                <div class="section_body">
                                    <p>���Ѥ���CMS�ˤ�������SSL���ϡ�����μ��˲ä��ơ��ץ����Υ��󥹥ȡ����˰ʲ��������ԤäƤ���������</p>
                                    <dl class="dl">
                                      <dt>WordPress</dt>
                                      <dd>WordPress��������(���å���ܡ���)�˥����󤷡�������ס�ְ��̡פˤ����WordPress ���ɥ쥹(URL)�ס֥����ȥ��ɥ쥹(URL)�פ��������Ƥ�https�̿�����URL(https://��)���ѹ����Ƥ���������</dd>
                                      <dt>EC-CUBE 4</dt>
                                      <dd>�ޥ˥奢���EC-CUBE4����Ρ�<a href="man_install_auto_ec4.php#link-previous-d">[����] ������SSL����</a>�פ򤴻��Ȥ���������</dd>
                                      <dt>PukiWiki</dt>
                                      <dd>�����ѹ���ɬ�פϤ������ޤ���</dd>
                                      <dt>����¾�Υץ����</dt>
                                      <dd>�оݥץ������󶡸��ˤ����̤���������</dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">�֥饦����Ƿٹ�ɽ������Ƥ��ޤ����</h4>
                                <div class="section_body">
                                    <p><img src="../img/manual/previous/man_server_fullssl.png" alt="���ݸ��ʤ��̿��פ�ɽ������Ƥ��ޤ����" class="img"></p>
                                    <p class="mt30">������Javascript��CSS�ʤɤΥե�������ɤ߹��ߤ�HTTP��³���Ѥ����Ƥ����硢�֥饦���ǤΥ����������ˡ��ݸ��Ƥ��ʤ��̿��פʤɤηٹ�ɽ������뤳�Ȥ�����ޤ���</p>
                                    <p>Web��������Υ��������ǧ����������URL����http://�פǻϤޤ��Τ�������ϡ�https://�פؤ��ѹ����뤫�������Хѥ��פǻ��ꤹ��褦�˽������Ƥ���������</p>
                                    <p>�������������ϤΥ�����֥��ѡ��Ĥʤɳ��������С�����ǡ������ɤ߹���Ǥ����硢����鳰�������С��Υե�����ؤΥ���������SSL��³�Ǥ���ɬ�פ�����ޤ���</p>
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
                                    <li><a href="#link-a">Web�����Ȥξ��SSL��</a>
                                        <ol>
                                            <li><a href="#link-a01">1..htaccess�Խ��򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.�Խ��оݤ��Խ��򥯥�å�</a></li>
                                            <li><a href="#link-a03">3.�������Ƥ��ɲ�</a></li>
                                            <li><a href="#link-a04">4.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�ɥᥤ�����꤫��ξ��SSL��</a></li>
                                    <li><a href="#link-b">�����Ѥ�CMS�ˤ�������SSL��</a></li>
                                    <li><a href="#link-c">�֥饦����Ƿٹ�ɽ������Ƥ��ޤ����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <aside class="msg msg_caution">
                                <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h4>
                                <div class="msg_body">
                                    <p>Web�����Ȥ���SSL������ˤϡ���̵���ȼ�SSL�פ⤷���ϡ��֥��ץ�����ȼ�SSL�פΤ��������ߤ�ɬ�פǤ���<br>
                                        ���������ߤμ��ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                                    <p>�ޥ˥奢���<a href="man_server_ssl.php">̵���ȼ�SSL����</a>�ס�<a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>��</p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Web�����Ȥξ��SSL��</h4>
                                <p>�ȼ�SSL�����꤬��λ���������Ǥϡ���ưŪ�ˡ�https://���פ�URL��ž������ޤ���</p>
                                <p>Web�����Ȥˤ����뤹�٤Ƥ�ɽ������SSL��������ϡ�������������ɲä��ޤ���</p>
                                <div class="serial-box">

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a01">1. .htaccess�Խ��򥯥�å�</h6>
                                        <div class="box_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���.htaccess�Խ��ץ�˥塼�򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_server_fullssl_1.png?date=2410" alt="�����С��ѥͥ롦.htaccess�Խ��Υ����꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a02">2. �Խ��оݤ��Խ��򥯥�å�</h6>
                                        <div class="box_body">
                                            <p>���Խ��פ򥯥�å����ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_server_fullssl_2.png?date=2410" alt="���Խ��פ򥯥�å�"></p>
                                        </div>
                                    </section>


                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a03">3. �������Ƥ��ɲ�</h6>
                                        <div class="box_body">
                                            <p>��¸�������<strong class="red">�������</strong>���ʲ��ε��Ҥ��ɵ����ޤ���<br>�����꤬ȿ�Ǥ���ʤ���礬���뤿�ᡢ��Ƭ���ɵ��������侩���Ƥ���ޤ���</p>
                                            <pre class="code mb0">RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]</pre>
                                            <p class="mt20"><img class="img" src="../img/manual/man_server_fullssl_3.png?date=2410" alt=".htaccess���ɲä������Ƥ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                            <p>�ɵ������塢�����ꤹ��ץܥ���򥯥�å����Ƥ���������</p>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl" id="link-a04">4. ���괰λ</h6>
                                        <div class="box_body">
                                            <p>��http://���פ�URL�ǥ������������ݡ���ưŪ�ˡ�https://���פ�URL��ž������Ƥ�������괰λ�Ǥ���</p>
                                        </div>
                                    </section>

                                </div>
                                <!-- /.serial-box -->
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">�ɥᥤ�����꤫��ξ��SSL��</h4>
                                <div class="section_body">
                                  <p>��<a href="man_domain_setting.php">�ɥᥤ������</a>�פ��ɲä����ɥᥤ��ξܺ٤����SSL����Ԥ����Ȥ��ǽ�Ǥ���</p>
                                  <p>���SSL�������ꤷ�����ɥᥤ��ξܺ٤򳫤���HTTPSž������Ρ�HTTPS��ž������פ˥����å�������ơ����ꤹ��פ򥯥�å����Ƥ���������</p>
                                  <p>���оݤȤʤ�ɥᥤ���SSL���������ꤵ��Ƥ��ʤ���ON�ˤ��뤳�Ȥ��Ǥ��ޤ���</p>
                                  <p><img src="../img/manual/man_server_fullssl_4.png" alt="�ɥᥤ�����꤫��ξ��SSL��" class="img"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">�����Ѥ�CMS�ˤ�������SSL��</h4>
                                <div class="section_body">
                                    <p>���Ѥ���CMS�ˤ�������SSL���ϡ�����μ��˲ä��ơ��ץ����Υ��󥹥ȡ����˰ʲ��������ԤäƤ���������</p>
                                    <dl class="dl">
                                        <dt>WordPress</dt>
                                        <dd>WordPress��������(���å���ܡ���)�˥����󤷡�������ס�ְ��̡פˤ����WordPress ���ɥ쥹(URL)�ס֥����ȥ��ɥ쥹(URL)�פ��������Ƥ�https�̿�����URL(https://��)���ѹ����Ƥ���������</dd>
                                        <dt>EC-CUBE 4</dt>
                                        <dd>�ޥ˥奢���EC-CUBE4����Ρ�<a href="man_install_auto_ec4.php#link-d">[����] ������SSL����</a>�פ򤴻��Ȥ���������</dd>
                                        <dt>PukiWiki</dt>
                                        <dd>�����ѹ���ɬ�פϤ������ޤ���</dd>
                                        <dt>����¾�Υץ����</dt>
                                        <dd>�оݥץ������󶡸��ˤ����̤���������</dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 class="section_ttl" id="link-c">�֥饦����Ƿٹ�ɽ������Ƥ��ޤ����</h4>
                                <div class="section_body">
                                    <p><img src="../img/manual/man_server_fullssl.png" alt="���ݸ��ʤ��̿��פ�ɽ������Ƥ��ޤ����" class="img"></p>
                                    <p class="mt30">������Javascript��CSS�ʤɤΥե�������ɤ߹��ߤ�HTTP��³���Ѥ����Ƥ����硢�֥饦���ǤΥ����������ˡ��ݸ��Ƥ��ʤ��̿��פʤɤηٹ�ɽ������뤳�Ȥ�����ޤ���</p>
                                    <p>Web��������Υ��������ǧ����������URL����http://�פǻϤޤ��Τ�������ϡ�https://�פؤ��ѹ����뤫�������Хѥ��פǻ��ꤹ��褦�˽������Ƥ���������</p>
                                    <p>�������������ϤΥ�����֥��ѡ��Ĥʤɳ��������С�����ǡ������ɤ߹���Ǥ����硢����鳰�������С��Υե�����ؤΥ���������SSL��³�Ǥ���ɬ�פ�����ޤ���</p>
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