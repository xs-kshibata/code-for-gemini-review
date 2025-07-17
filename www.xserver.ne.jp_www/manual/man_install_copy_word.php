<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress �����ȥ��ԡ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���WordPress�����ȥ��ԡ���ǽ�ǡ�WordPress ���ܸ��ǡפ����֤��뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�WordPress�פ򥳥ԡ��Ǥ���֥����ȥ��ԡ��׵�ǽ���󶡤��Ƥ��ޤ���">

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

                <h3 class="sub-ttl">WordPress�Υ����ȥ��ԡ��ˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">WordPress�Υ����ȥ��ԡ� �Ϥ����</a></li>
                                <li><a href="#link-previous-b">�����ȥ��ԡ����</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.�֥��ԡ��פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">2.WordPress�Υ����ȥ��ԡ��������</a></li>
                                        <li><a href="#link-previous-b03">3.��ǧ���ְ㤤���ʤ���С֥��ԡ�����פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b04">4.��λ���̤�ɽ�������Х��ԡ���λ�Ǥ�</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <h4 class="section_ttl" id="link-previous-a">WordPress�Υ����ȥ��ԡ� �Ϥ����</h4>
                            <p>�ܵ�ǽ�ϡ�ư���ǧ�ѤΥƥ��ȥ����Ȥ�û���֤Ǥο��������Ⱥ����ʤɡ����ޤ��ޤʾ��̤Ǥ����Ѥ��������ޤ���</p>
                            <p>
                                �ʤ��������ΥХå����å״�Ϣ�ץ饰����ˤ�ä��������줿�ǡ����ϡ����ԡ����оݳ��Ȥʤ�ޤ���<br>
                                �����Υե�����ˤ����Ƥ�URL���ִ�������ʤ���礬����ޤ������ξ��ϼ�ư���ִ����ޤ��ϥ��ԡ��򤪴ꤤ���ޤ���
                            </p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�����ȥ��ԡ����</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_copy_word_1.png" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.�֥��ԡ��פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�֥��ԡ��פ򥯥�å����Ƥ�������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_2.png" alt="�֥��ԡ��ץܥ���Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.WordPress�Υ����ȥ��ԡ��������</h6>
                                            <div class="box_body">
                                                <p>�ƹ��ܤ����Ϥ����Ǹ�ˡֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_3.png" alt="�����ȥ��ԡ����ϲ���"></p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>WordPress�Υ����ȥ��ԡ�����</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>���ԡ��о�</th>
                                                            <td>
                                                                <p>���ԡ��оݤ����򤷤ޤ���</p>
                                                                <ul class="ul">
                                                                    <li>
                                                                        ����<br>
                                                                        ���ƤΥǡ����򥳥ԡ����ޤ���
                                                                    </li>
                                                                    <li>
                                                                        �ƥ�ץ졼�ȤΤ�<br>
                                                                        ������������ޤޤʤ��ƥ�ץ졼�ȤΤߥ��ԡ����ޤ���
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w20per w30per-s">���ԡ���URL</th>
                                                            <td><p class="mb5">�����ͤΥɥᥤ��̾/wp</p>
                                                                <div class="border border_gray">
                                                                    [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�WordPress�˥����������˾�������[wp]����ʬ�����Ȥ��Ƥ���������
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.��ǧ���ְ㤤���ʤ���С֥��ԡ�����פ򥯥�å�</h6>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.��λ���̤�ɽ�������Х��ԡ���λ�Ǥ�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_4.png" alt="���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
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
                                    <li><a href="#link-a">WordPress�Υ����ȥ��ԡ� �Ϥ����</a></li>
                                    <li><a href="#link-b">�����ȥ��ԡ����</a>
                                        <ol>
                                            <li><a href="#link-b1">1.�־ܺ١פ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.�֥��ԡ��פ򥯥�å�</a></li>
                                            <li><a href="#link-b3">3.WordPress�Υ����ȥ��ԡ��������</a></li>
                                            <li><a href="#link-b4">4.��λ��å�������ɽ�������Х��ԡ���λ�Ǥ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">WordPress�Υ����ȥ��ԡ� �Ϥ����</h4>
                                <div class="section_body">
                                    <p>�ܵ�ǽ�ϡ�ư���ǧ�ѤΥƥ��ȥ����Ȥ�û���֤Ǥο��������Ⱥ����ʤɡ����ޤ��ޤʾ��̤Ǥ����Ѥ��������ޤ���</p>
                                    <p>
                                        �ʤ��������ΥХå����å״�Ϣ�ץ饰����ˤ�ä��������줿�ǡ����ϡ����ԡ����оݳ��Ȥʤ�ޤ���<br>
                                        �����Υե�����ˤ����Ƥ�URL���ִ�������ʤ���礬����ޤ������ξ��ϼ�ư���ִ����ޤ��ϥ��ԡ��򤪴ꤤ���ޤ���
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h4 class="section_ttl">�����ȥ��ԡ����</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����WordPress��ñ���󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b1">1.�־ܺ١פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>�־ܺ١פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_1.png?date=2410" alt="�־ܺ١ץܥ���Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b2">2.�֥��ԡ��פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>�֥��ԡ��פ򥯥�å����Ƥ�������</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_2.png?date=2410" alt="�֥��ԡ��ץܥ���Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b3">3.WordPress�Υ����ȥ��ԡ��������</h5>
                                            <div class="box_body">
                                                <p>�ƹ��ܤ����Ϥ����Ǹ�ˡ֥��ԡ�����פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_3.png?date=2410" alt="�����ȥ��ԡ����ϲ���"></p>

                                                <table class="table table--responsive">
                                                    <caption>WordPress�Υ����ȥ��ԡ�����</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>���ԡ��о�</th>
                                                        <td>
                                                            <p>���ԡ��оݤ����򤷤ޤ���</p>
                                                            <ul class="ul">
                                                                <li>
                                                                    ����<br>
                                                                    ���ƤΥǡ����򥳥ԡ����ޤ���
                                                                </li>
                                                                <li>
                                                                    �ƥ�ץ졼�ȤΤ�<br>
                                                                    ������������ޤޤʤ��ƥ�ץ졼�ȤΤߥ��ԡ����ޤ���
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="w20per w30per-s">���ԡ���URL</th>
                                                        <td><p class="mb5">�����ͤΥɥᥤ��̾/wp</p>
                                                            <div class="border border_gray">
                                                                [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�WordPress�˥����������˾�������[wp]����ʬ�����Ȥ��Ƥ���������
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b4">4.��λ��å�������ɽ�������Х��ԡ���λ�Ǥ�</h5>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_copy_word_4.png?date=2410" alt="���ԡ���λ�Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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
