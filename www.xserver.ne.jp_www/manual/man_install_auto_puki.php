<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PukiWiki ��ñ���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ô�ñ���󥹥ȡ��뵡ǽ�ǡ�PukiWiki�פ����֤��뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�PukiWiki�פ����֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">PukiWiki</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">PukiWiki ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-previous-b">��ñ���󥹥ȡ�����</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.PukiWiki�Υ��󥹥ȡ�������</a></li>
                                            <li><a href="#link-previous-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ</a></li>
                                            <li><a href="#link-previous-b04">4.���󥹥ȡ����ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">PukiWiki ��ñ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">
                                    <p>������¦�ǤΡ��ѥå������Τ��Ѱդ�ɬ�פ���ޤ���<br>
                                    �ʤ������󥹥ȡ������������˴ؤ��륵�ݡ��ȤϹԤäƤ��ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki ��ñ���󥹥ȡ��� ������</caption>
                                        <tbody>
                                            <tr><th class="w20per w30per-s">�����С�ID</th><td>xsample</td></tr>
                                            <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                            <tr>
                                                <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                                <td>/home/xsample/example.com/public_html/pukiwiki
                                                    <div class="border border_gray">
                                                        [http://example.com]�ˤ�PukiWiki�˥����������˾�������[/home/xsample/example.com/public_html/]�򥤥󥹥ȡ���ǥ��쥯�ȥ�˻��ꤹ��ɬ�פ�����ޤ���
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>���󥹥ȡ���URL</th><td>http://example.com/pukiwiki/</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per w30per-s">PHP�С������</th>
                                                <td>PHP 4.3 �ʾ�(��PHP 7.0 �侩)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-b">
                                <h4 id="i1" class="section_ttl">��ñ���󥹥ȡ�����</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>���ִ�ñ���󥹥ȡ���ע��֥ץ���।�󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_other_1.png" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.PukiWiki�Υ��󥹥ȡ�������</h6>
                                            <div class="box_body">
                                                <p>PukiWiki �Υ��󥹥ȡ�������򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_1.png" alt="���󥹥ȡ�������򥯥�å�"></p>
                                                <p>�ƹ��ܤ����Ϥ����Ǹ�ˡֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>PukiWiki�Υ��󥹥ȡ�������</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w20per w30per-s">���󥹥ȡ���URL</th>
                                                            <td>�����ͤΥɥᥤ��̾/pukiwiki
                                                                <div class="border border_gray">
                                                                    [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�PukiWiki�˥����������˾�������[pukiwiki]����ʬ�����Ȥ��Ƥ���������
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr><th>������ѥѥ����</th><td>PukiWiki�����ѥ����</td></tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_2.png" alt="PukiWiki������̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ��뤹��פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_3.png" alt="���󥹥ȡ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_4.png" alt="PukiWiki���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.���󥹥ȡ����ǧ</h6>
                                            <div class="box_body">
                                                <p>ɽ������Ƥ����󥯤���PukiWiki�ۡ���ڡ����ذ�ư���ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_5.png" alt="�����������¥桼��������̤Υ����꡼�󥷥�å�"></p>
                                                <p>�ʾ��PukiWiki��Ƴ���Ͻ�λ�Ǥ���������ͤǤ�����</p>
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
                                    <li><a href="#link-a">PukiWiki ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                                    <li><a href="#link-b">��ñ���󥹥ȡ�����</a>
                                        <ol>
                                            <li><a href="#link-b01">1.��PukiWiki��ñ���󥹥ȡ���פ򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.PukiWiki�Υ��󥹥ȡ�������</a></li>
                                            <li><a href="#link-b03">3.���󥹥ȡ���URL������ɽ�������Х��󥹥ȡ��봰λ</a></li>
                                            <li><a href="#link-b04">4.���󥹥ȡ����ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">PukiWiki ��ñ���󥹥ȡ��� �Ϥ����</h4>
                                <div class="section_body">
                                    <p>������¦�ǤΡ��ѥå������Τ��Ѱդ�ɬ�פ���ޤ���<br>
                                        �ʤ������󥹥ȡ������������˴ؤ��륵�ݡ��ȤϹԤäƤ��ޤ���</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki ��ñ���󥹥ȡ��� ������</caption>
                                        <tbody>
                                        <tr><th class="w20per w30per-s">�����С�ID</th><td>xsample</td></tr>
                                        <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                        <tr>
                                            <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                            <td>/home/xsample/example.com/public_html/pukiwiki
                                                <div class="border border_gray">
                                                    [http://example.com]�ˤ�PukiWiki�˥����������˾�������[/home/xsample/example.com/public_html/]�򥤥󥹥ȡ���ǥ��쥯�ȥ�˻��ꤹ��ɬ�פ�����ޤ���
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><th>���󥹥ȡ���URL</th><td>http://example.com/pukiwiki/</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w20per w30per-s">PHP�С������</th>
                                            <td>PHP 4.3 �ʾ�(��PHP 7.0 �侩)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-b">
                                <h4 id="i1" class="section_ttl">��ñ���󥹥ȡ�����</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.��PukiWiki��ñ���󥹥ȡ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���PukiWiki��ñ���󥹥ȡ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_other_1.png?date=2410" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.PukiWiki�Υ��󥹥ȡ�������</h6>
                                            <div class="box_body">
                                                <p>�ֿ������󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_1.png?date=2410" alt="���󥹥ȡ�������򥯥�å�"></p>
                                                <p>�ƹ��ܤ����Ϥ����Ǹ�ˡ֥��󥹥ȡ��뤹��פ򥯥�å����Ƥ���������</p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>PukiWiki�Υ��󥹥ȡ�������</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per w30per-s">���󥹥ȡ���URL</th>
                                                        <td>�����ͤΥɥᥤ��̾/pukiwiki
                                                            <div class="border border_gray">
                                                                [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�PukiWiki�˥����������˾�������[pukiwiki]����ʬ�����Ȥ��Ƥ���������
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr><th>������ѥѥ����</th><td>PukiWiki�����ѥ����</td></tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/man_install_auto_puki_2.png?date=2410" alt="PukiWiki������̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.���󥹥ȡ���URL������ɽ�������Х��󥹥ȡ��봰λ</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_3.png?date=2410" alt="���󥹥ȡ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.���󥹥ȡ����ǧ</h6>
                                            <div class="box_body">
                                                <p>ɽ������Ƥ����󥯤���PukiWiki�ۡ���ڡ����ذ�ư���ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_5.png?date=2410" alt="�����������¥桼��������̤Υ����꡼�󥷥�å�"></p>
                                                <p>�ʾ��PukiWiki��Ƴ���Ͻ�λ�Ǥ���������ͤǤ�����</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

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