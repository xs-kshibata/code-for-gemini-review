<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Cron���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä��餫������ꤷ�����֤˻��ꥳ�ޥ�ɡʥץ����ˤ�ưŪ�˼¹Ԥ����뵡ǽ��Cron�פ�������˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">Cron����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">Cron�Ȥ�</a></li>
                                <li><a href="#link-previous-b">Cron������</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.��Cron����פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">2.��Cron�����ɲáפ򥯥�å�</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-b011">Cron��������</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">���Υ᡼�륢�ɥ쥹������</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.��Cron����פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-c02">2.��Cron��������פ򥯥�å�</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-c011">Cron������ΤˤĤ���</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Cron�Ȥ�</h4>
                                <div class="section_body">
                                    <p>������֤˻��ꥳ�ޥ�ɡʥץ����ˤ�ưŪ�˼¹Ԥ����륵���С��ε�ǽ�Ǥ���<br>
                                    ���Ū�ʥ᡼��������䡢�֥���RSS�����ʤɤ˻��Ѥ���ޤ���</p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">Cron������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.��Cron����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���Cron����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_1.png" alt="Cron������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.��Cron�����ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�������Ƥ����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���<br>
                                                    ���Ƥ��ǧ�������꤬�ʤ���С��ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_2.png" alt="Cron���ɲäΥ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b011">Cron��������</h5>
                                        <div class="block_body">
                                            <p>���� PM10:00 �� A �Ȥ����ץ�����¹Ԥ�������硢�����Τ褦�����ꤷ�Ƥ���������</p>
                                            <table class="table">
                                                <caption>Cron��������</caption>
                                                <tbody>
                                                    <tr><th>ʬ</th><td>0</td></tr>
                                                    <tr><th>����</th><td>22</td></tr>
                                                    <tr><th>��</th><td>*</td></tr>
                                                    <tr><th>��</th><td>*</td></tr>
                                                    <tr><th>����</th><td>*</td></tr>
                                                    <tr><th>���ޥ��</th><td>A�ץ�����¹Ԥ��뤿��Υ��ޥ��</td></tr>
                                                </tbody>
                                            </table>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>���ޥ�ɤε�����</dt>
                                                <dd>
                                                    <p>PHP��Perl�ʤɤΥ�����ץȤ�Cron�Ǽ¹Ԥ���ݡ� ���ޥ�ɥѥ��⤢�碌�Ƶ��Ҥ��Ƥ���������<br>
                                                    �ޤ����¹Ԥ��륹����ץȥե�������Ф����¹Ը��¤���Ϳ����ѡ��ߥå����(�ѡ��ߥå�����͡�701�פʤ�)���ѹ�����ɬ�פ�����ޤ���</p>
                                                    <div class="border border_blue">
                                                    �����abc.php��PHP 7.4 �Ǽ¹Ԥ�����<br>
                                                    ��/usr/bin/php7.4 /home/�����С�ID/�ȼ��ɥᥤ��̾/public_html/abc.php
                                                    </div>
                                                    <p class="note">�����ޥ�ɥѥ��ˤĤ��Ƥϥ����С��ѥͥ�֥����С�����פΡ֥��ޥ�ɥѥ������פ���ǧ��ǽ�Ǥ���</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">���Υ᡼�륢�ɥ쥹������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.��Cron����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���Cron����פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_1.png" alt="Cron������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.��Cron��������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>��Cron��̤����Υ��ɥ쥹�פ����Τ���᡼�륢�ɥ쥹�����Ϥ������Υ��ɥ쥹����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_3.png" alt="Cron�ΰ����Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c011">Cron������ΤˤĤ���</h5>
                                        <div class="block_body">
                                            <p>��Cron��̤����Υ��ɥ쥹�פ�ͭ���ʥ᡼�륢�ɥ쥹�����ꤵ��Ƥ�����ϡ����ꤷ���᡼�륢�ɥ쥹����Cron�η�����Τ���������ޤ���<br>
                                            ̤����ξ��ϡ��ۡ���ǥ��쥯�ȥ�ľ���Ρ�Maildir�ץե�����ؤ���¸����ޤ���</p>

                                            <div class="border border_gray">
                                                <p class="link mb0"><i class="ico ico_square-fill"></i>���͡�<a href="man_server_maildir.php">Maildir�ˤĤ���</a><i class="ico ico_chevron-right"></i></p>
                                            </div>

                                            <p>������Τ����פʾ��ϡ���Cron��̤����Υ��ɥ쥹�פˡ�""�ۤΤ����Ϥ����ꤷ�Ƥ���������<br>
                                            �嵭�����Ԥ���Maildir����¸�Ϥ���ޤ���</p>
                                        </div>
                                    </section>

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
                                    <li><a href="#link-a">Cron�Ȥ�</a></li>
                                    <li><a href="#link-b">Cron������</a></li>
                                    <li>
                                        <a href="#link-c">���Υ᡼�륢�ɥ쥹������</a>
                                        <ol>
                                            <li><a href="#link-c1">1.��Cron����פ򥯥�å�</a></li>
                                            <li><a href="#link-c2">2.��Cron��̤����Υ��ɥ쥹�פ�����</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">Cron�Ȥ�</h3>
                                        <div class="section_body">
                                            <p>
                                                ������֤˻��ꥳ�ޥ�ɡʥץ����ˤ�ưŪ�˼¹Ԥ����륵���С��ε�ǽ�Ǥ���<br>
                                                ���Ū�ʥ᡼��������䡢�֥���RSS�����ʤɤ˻��Ѥ���ޤ���
                                            </p>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">Cron������</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl">1.��Cron����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���Cron����פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_1.png?date=2410" alt="Cron������̤�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">2.��Cron������ɲáפ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>��Cron������ɲáפ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_2.png?date=2410" alt="Cron���ɲäΥ����꡼�󥷥�å�"></p>
                                                        <p>�������Ƥ����Ϥ������ɲä���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_3.png?date=2410" alt="Cron���ɲäΥ����꡼�󥷥�å�"></p>

                                                        <section class="block">
                                                            <h5 class="block_ttl mt30">Cron��������</h5>
                                                            <div class="block_body">
                                                                <p>���� PM10:00 �� A �Ȥ����ץ�����¹Ԥ�������硢�����Τ褦�����ꤷ�Ƥ���������</p>
                                                                <table class="table">
                                                                    <caption>Cron��������</caption>
                                                                    <tbody>
                                                                    <tr><th>ʬ</th><td>0</td></tr>
                                                                    <tr><th>����</th><td>22</td></tr>
                                                                    <tr><th>��</th><td>*</td></tr>
                                                                    <tr><th>��</th><td>*</td></tr>
                                                                    <tr><th>����</th><td>*</td></tr>
                                                                    <tr><th>���ޥ��</th><td>A�ץ�����¹Ԥ��뤿��Υ��ޥ��</td></tr>
                                                                    </tbody>
                                                                </table>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>���ޥ�ɤε�����</dt>
                                                                    <dd>
                                                                        <p>PHP��Perl�ʤɤΥ�����ץȤ�Cron�Ǽ¹Ԥ���ݡ� ���ޥ�ɥѥ��⤢�碌�Ƶ��Ҥ��Ƥ���������<br>
                                                                            �ޤ����¹Ԥ��륹����ץȥե�������Ф����¹Ը��¤���Ϳ����ѡ��ߥå����(�ѡ��ߥå�����͡�701�פʤ�)���ѹ�����ɬ�פ�����ޤ���</p>
                                                                        <div class="border border_blue">
                                                                            (��)abc.php��PHP 7.4 �Ǽ¹Ԥ�����<br>
                                                                            /usr/bin/php7.4 /home/�����С�ID/�ȼ��ɥᥤ��̾/public_html/abc.php
                                                                        </div>
                                                                        <p class="note">�����ޥ�ɥѥ��ˤĤ��Ƥϥ����С��ѥͥ�֥����С�����פΡ֥��ޥ�ɥѥ������פ���ǧ��ǽ�Ǥ���</p>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->


                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-c">���Υ᡼�륢�ɥ쥹������</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c1">1.��Cron����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���Cron����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_1.png?date=2410" alt="Cron������̤�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c2">2.��Cron��̤����Υ��ɥ쥹�פ�����</h5>
                                                    <div class="box_body">
                                                        <p>��Cron��̤����Υ��ɥ쥹������Υڥ󥢥�����򥯥�å����ơ����Τ���᡼�륢�ɥ쥹�����Ϥ������ꤹ��פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_4.png?date=2410" alt="Cron��̤����Υ��ɥ쥹������̤Υ����꡼�󥷥�å�"></p>
                                                    </div>

                                                    <section class="block p20">
                                                        <h5 class="block_ttl">Cron������ΤˤĤ���</h5>
                                                        <div class="block_body">
                                                            <p>
                                                                ��Cron��̤����Υ��ɥ쥹�פ�ͭ���ʥ᡼�륢�ɥ쥹�����ꤵ��Ƥ�����ϡ����ꤷ���᡼�륢�ɥ쥹����Cron�η�����Τ���������ޤ���<br>
                                                                ̤����ξ��ϡ��ۡ���ǥ��쥯�ȥ�ľ���Ρ�Maildir�ץե�����ؤ���¸����ޤ���
                                                            </p>

                                                            <div class="border border_gray">
                                                                <p class="link mb0"><i class="ico ico_square-fill"></i>���͡�<a href="man_server_maildir.php">Maildir�ˤĤ���</a><i class="ico ico_chevron-right"></i></p>
                                                            </div>

                                                            <p>
                                                                ������Τ����פʾ��ϡ���Cron��̤����Υ��ɥ쥹�פˡ�""�ۤΤ����Ϥ����ꤷ�Ƥ���������<br>
                                                                �嵭�����Ԥ���Maildir����¸�Ϥ���ޤ���
                                                            </p>
                                                        </div>
                                                    </section>
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