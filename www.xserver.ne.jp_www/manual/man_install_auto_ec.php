<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>EC-CUBE 3 ��ñ���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�EC-CUBE 3�פ�������ˡ�ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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

            <h3 class="sub-ttl">EC-CUBE 3</h3>

            <div class="toc-list">
            <p class="toc-list--head">�ܼ�</p>
            <ul class="toc-list--body">
                <li><a href="#link-a">EC-CUBE 3 ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                <li><a href="#link-e">[����] ���åץǡ��ȤˤĤ���</a>
                    <ul>
                        <li><a href="#link-e01">��/html/index.php�פǤκ�ȼ��</a></li>
                        <li><a href="#link-e02">��/src/Eccube/Controller/Admin/Store/TemplateController.php�פǤκ�ȼ��</a></li>
                    </ul>
                </li>
                <li><a href="#link-f">PHP�ΥС�������ڤ��ؤ����ȯ������ɽ���Զ��β����ˡ</a>
                    <ol>
                        <li><a href="#link-f01">1.EC-CUBE �������̤˥�������</a></li>
                        <li><a href="#link-f02">2.�֥���ƥ�Ĵ��� �� ����å������פˤƥ���å�����</a></li>
                    </ol>

                </li>
            </ul>
            </div>



        <section class="section">
        <h4 class="section_ttl" id="link-a">EC-CUBE 3 ��ñ���󥹥ȡ��� �Ϥ����</h4>
        <div class="section_body">
            <p>
                ��ñ���󥹥ȡ���ˤ����� EC-CUBE 3 ���󶡤Ͻ�λ���Ƥ���ޤ���<br>
                <br>
                ��ñ���󥹥ȡ����EC-CUBE4�פˤĤ��Ƥϡ�<a href="man_install_auto_ec4.php">EC-CUBE 4 ��ñ���󥹥ȡ�����</a>�פ򤴳�ǧ����������<br>
                <br>
                �ޤ������󥹥ȡ����γƼ�����䥫�����ޥ��������åץǡ������˴ؤ��륵�ݡ��ȤϹԤäƤ���ޤ��󡣤��餫���ᤴλ������������
            </p>
            <table class="table table_use-caption break-word">
                <caption>EC-CUBE 3 ��ñ���󥹥ȡ��� ������</caption>
                <tbody>
                    <tr>
                        <th class="w20per w30per-s">�����С�ID</th>
                        <td>xsample</td>
                    </tr>
                    <tr>
                        <th>�ɥᥤ��̾</th>
                        <td>example.com</td>
                    </tr>
                    <tr>
                        <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                        <td>
                            /home/xsample/example.com/public_html/ec
                        </td>
                    </tr>
                    <tr>
                        <th>���󥹥ȡ���URL</th>
                        <td>http://example.com/ec</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table_use-caption break-word">
                <caption>EC-CUBE 3 ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                <tbody>
                    <tr>
                        <th class="w20per w30per-s">PHP�С������</th>
                        <td>
                            PHP 5.4.x �� 7.1.x
                            <p class="note mb0">
                                ��PHPư��С��������ѹ��ϡ��ޥ˥奢���<a href="man_program_php_ver.php">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ���������
                            </p>

                        </td>
                    </tr>
                    <tr>
                        <th>�ǡ����١���</th>
                        <td>MySQL5.7 / MySQL5.5<p class="note mb0">��ʸ�������ɤ� UTF-8 �����ꤷ�Ƥ���������</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.section -->


    <section class="section">
        <h4 class="section_ttl" id="link-e">[����] ���åץǡ��ȤˤĤ���</h4>
        <div class="section_body">
            <section class="block">
                <p>
                    �ܵ�ǽ���󶡤���EC-CUBE�ϡ��������ӥ����󶡤�����ͤˤ��碌���ʲ��Υե�����򥫥����ޥ������Ƥ���ޤ���
                </p>
                <div class="border border_gray">
                    <ul class="list list_circle">
                        <li>/html/index.php</li>
                        <li>/src/Eccube/Controller/Admin/Store/TemplateController.php</li>
                    </ul>
                </div>
                <!-- /.border border_gray -->
                <p>���Τ��ᡢEC-CUBE�ΥС�����󥢥åפʤɤ�ȼ�����åץǡ��Ⱥ�Ȥˤ��ե�����ι��������������ϡ��ʲ��μ��˱�äƥץ����ν�����ԤäƤ���������</p>
                <p class="note">�����åץǡ��Ⱥ�Ȥ�Ԥ���ݤϡ�ɬ��ͽ��ǡ�����ΥХå����åפ�������Ƥ���������</p>
            </section>
            <!-- /.block -->
            <section class="block">
                <h3 class="block_ttl" id="link-e01">��/html/index.php�פǤκ�ȼ��</h3>
                <div class="block_body">
                    <div class="serial-box mb10">
                        <section class="box">
                            <h6 class="box_ttl">1.��html�ץե������Ρ�index.php�פ��ư</h6>
                            <div class="box_body">
                                <p>��html�ץե������ˤ����index.php�פ��ľ�Υե�����˰�ư���Ƥ���������</p>
                            </div>
                        </section>
                        <!-- /.box -->


                        <section class="box">
                            <h6 class="box_ttl">2.��index.php�פ��Խ�</h6>
                            <div class="box_body">
                                <p>�ƥ����ȥ��ǥ������Ѥ�����ۤɰ�ư������index.php�פ��Խ����ޤ���</p>
                                <pre class="code">require __DIR__.'/../autoload.php';</pre>
                                <p class="ml30"><i class="ico ico_arrow-down"></i></p>
                                <pre class="code">require __DIR__.'/autoload.php';</pre>
                                <p class="note">��Windows��°�Ρȥ��Ģ�ɤ��Խ���Ԥä���硢�Զ�礬ȯ�����뤳�Ȥ�����ޤ���ɬ���ƥ����ȥ��ǥ����ˤ��Խ���ԤäƤ���������</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_5.png" alt="index.php:�Խ����Υե������ѹ��ս�˥ե�������"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_6.png" alt="index.php:�Խ���Υե������Խ��ս�˥ե�������"></p></dd>
                                </dl>
                                <p class="note">���ץ�������Ƥ��Խ����ƤϾ����˱����ưۤʤ��礬�������ޤ���</p>
                            </div>
                        </section>
                        <!-- /.box -->
                        <section class="box">
                            <h6 class="box_ttl">3.�����ФؤΥ��åץ���</h6>
                            <div class="box_body">
                                <p>FTP���եȤ�Ȥ�����index.php�פ򥵡��С��إ��åץ��ɤ��Ƥ���������</p>
                                <aside class="msg msg_caution">
                                    <h6 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>���åץ�����ˤ���դ�������</h6>
                                    <div class="msg_body">
                                        <p class="mb0">
                                            ���åץ����������Ρ�html�ץե������ǤϤʤ�����html�ץե�����ΰ�ľ�Υե�����Ǥ���
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box mb10 -->
                </div>
                <!-- /.block_body -->
            </section>
            <!-- /.block -->
            <section class="block">
                <h3 class="block_ttl" id="link-e02">��/src/Eccube/Controller/Admin/Store/TemplateController.php�פǤκ�ȼ��</h3>
                <div class="block_body">
                    <div class="serial-box mb10">
                        <section class="box">
                            <h6 class="box_ttl">1.��src/Eccube/Controller/Admin/Store�ץե������Ρ�TemplateController.php�פ���</h6>
                            <div class="box_body">
                                <p>�ƥ����ȥ��ǥ������Ѥ��ơ�/src/Eccube/Controller/Admin/Store�ץե������ˤ����TemplateController.php�פ��Խ����Ƥ���������</p>
                                <pre class="code">$config['front_urlpath'] = $config['root_urlpath'] . '/template/' . $templateCode;</pre>
                                <p class="ml30"><i class="ico ico_arrow-down"></i></p>
                                <pre class="code">$config['front_urlpath'] = $config['root'] . 'template/' . $templateCode;</pre>
                                <p class="note">��Windows��°�Ρȥ��Ģ�ɤ��Խ���Ԥä���硢�Զ�礬ȯ�����뤳�Ȥ�����ޤ���ɬ���ƥ����ȥ��ǥ����ˤ��Խ���ԤäƤ���������</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_18.png" alt="index.php:�Խ����Υե������ѹ��ս�˥ե�������"></p></dd>
                                    <dt><i class="ico ico_square-fill"></i>�ѹ���</dt>
                                    <dd><p><img class="img" src="../img/manual/man_install_ec_19.png" alt="index.php:�Խ���Υե������Խ��ս�˥ե�������"></p></dd>
                                </dl>
                                <p class="note">���ץ�������Ƥ��Խ����ƤϾ����˱����ưۤʤ��礬�������ޤ���</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        <section class="box">
                            <h6 class="box_ttl" id="link-b02">2.�����ФؤΥ��åץ���</h6>
                            <div class="box_body">
                                <p>FTP���եȤ�Ȥ��������С���Ρ�/src/Eccube/Controller/Admin/Store�ץե������ء�TemplateController.php�٤򥢥åץ��ɤ��Ƥ���������</p>
                            </div>
                        </section>
                        <!-- /.block -->
                    </div>
                    <!-- /.serial-box mb10 -->
                </div>
            </section>
        </div>
        <!-- /.section_body -->
    </section>
    <!-- /.section -->
    <section class="section">
        <h4 class="section_ttl" id="link-f">PHP�ΥС�������ڤ��ؤ����ȯ������ɽ���Զ��β����ˡ</h4>
        <div class="section_body">
                <p>EC-CUBE 3�����Ѥξ������ǡ�<a href="man_program_php_ver.php#phpver-change">PHP�С����������</a>�פ�Ԥä����ˡ�EC-CUBE���ݻ����륭��å������Ȥη�͹礤�ˤ�ꡢ����ƥ�Ĥ������ɽ������ʤ���礬����ޤ���</p>
				<p>���ξ��ϡ��ʲ��μ���EC-CUBE���ݻ����륭��å������κ����Ԥ����Ȥˤ������������ޤ���</p>
            <section class="block">
				<div class="serial-box mb10">
					<section class="box">
						<h6 class="box_ttl" id="link-f01">1.EC-CUBE �������̤˥�������</h6>
						<div class="box_body">
							<p>���󥹥ȡ��뤷��EC-CUBE�δ������̤˥�����������������򤷤Ƥ���������</p>
						</div>
					</section>
					<!-- /.box -->
					<section class="box">
						<h6 class="box_ttl" id="link-f02">2.�֥���ƥ�Ĵ��� �� ����å������פˤƥ���å�����</h6>
						<div class="box_body">
							<p>�֥���ƥ�Ĵ��� > ����å�������פ˿ʤߤޤ���</p>
							<p>����å�������ˤ����twig�٤˥����å������졢�إ���å������٥ܥ���򥯥�å����ޤ���</p>
							<p><img class="img" src="../img/manual/man_install_ec_20.png" alt="����å��������Ρ�twig�פ˥����å������졢�֥���å������ץܥ���򥯥�å����륹���꡼�󥷥�å�"></p>
						</div>
					</section>
					<!-- /.box -->
				</div>
				<!-- /.serial-box mb10 -->
            </section>
            <!-- /.block -->
        </div>
        <!-- /.section_body -->
    </section>
    <!-- /.section -->
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