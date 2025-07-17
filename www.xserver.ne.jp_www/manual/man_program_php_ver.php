<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHP�ΥС������ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥ����Ѳ�ǽ��PHP�ΥС������ˤĤ��Ƥ䡢�����ġ���夫��PHP�С��������ڤ��ؤ�����ˡ�ˤĤ��Ƥ����⤷�Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">PHP�ΥС������ˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">�����Ѥ���������PHP�ΥС������</a></li>
                                <li><a href="#link-previous-b">PHP�ΥС�������ڤ��ؤ�</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.��PHP Ver.���ءפ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">2.�ѹ���ΥС�����������</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_php.php">PHP�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�����Ѥ���������PHP�ΥС������</h4>
                                <div class="section_body">

                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��X��������졼��Ver.2�פ�������ξ��</h5>
                                        <div class="msg_body">
                                            <p>
                                                ��X��������졼�� Ver.2�פ�ͭ���ȤʤäƤ����硢PHP�С������ϡ�8.3x / 8.2x / 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x�פ������Ѳ�ǽ�Ǥ���<br>
                                                X��������졼���ξܺ٤ˤĤ��Ƥϰʲ��Υޥ˥奢��򤴻��Ȥ���������
                                            </p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_xaccelerator.php">X��������졼��(���å�����������졼��)</a></li>
                                            </ul>
                                        </div>
                                    </aside>


                                    <table class="table mb5">
                                        <thead>
                                        <tr><th style="width:105px;">�С������</th><th>����</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>PHP 8.3.x</th>
                                            <td>
                                                <p>
                                                    ���߸����˥��ݡ��Ȥ���Ƥ���С������Ǥ���<br>
                                                    �����PHP����Ӥ��ƥѥե����ޥ󥹤������˶�������Ƥ��ޤ���
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.2.x</th>
                                            <td>
                                                <p>Wordpress�侩�С������Ǥ���</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.1.x</th>
                                            <td rowspan="9">
                                                <p>
                                                    ��С������Ǥ���<br>
                                                    ����С�����󥢥åפ�ͽ��Ϥʤ����ῷ���Ǥ����ѤϿ侩���ޤ���<br>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.0.x</th>
                                        </tr>

                                        <tr>
                                            <th>PHP 7.4.x</th>
                                        </tr>

                                        <tr>
                                            <th>PHP 7.3.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.2.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.1.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.0.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.6.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.5.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.4.x</th>
                                            <td rowspan="3">
                                                <p>
                                                    ��С������Ǥ���<br>
                                                    OS�٥�����ˤ��ѥå��ˤơ��ƶ����礭���ȼ������濴�˥������ƥ�������<br>�Ԥ��ޤ���<br>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.3.3</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.1.6</th>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <ul class="note-list">
                                        <li>
                                            ��������ΥС��������FastCGI�פȡ֥���å���⥸�塼��(APC/OPcache)�פ�ɸ���ͭ���Ǥ���<br>
                                            �ƥС������ˤ������������ƤˤĤ��Ƥϡ��ޥ˥奢��ڡ�����<a href="man_server_php_rapid.php">PHP�ι�®���ˤĤ���</a>�פ򤴻��Ȥ���������
                                        </li>
                                    </ul>

                                </div>

                            </section>
                            <!-- /.section -->

                            <section id="phpver-change" class="section">
                                <h4 class="section_ttl" style="margin-top:45px;" id="link-previous-b">PHP�ΥС�������ڤ��ؤ�</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.��PHP Ver.���ءפ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���PHP Ver.���ءפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_php_ver_1.png" alt="PHP ver.���ز��̤�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.�ѹ���ΥС�����������</h5>
                                            <div class="box_body">
                                                <p>���ߤΥС��������ǧ�������ѹ���ΥС������פ���ѹ���˾�ΥС����������򤯤�������</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_php_ver_2.png" alt="�����С��ѥͥ��PHP ver.�ڤ��ؤ��򥯥�å�"></p>
                                                <p>����塢���ѹ��פ򥯥�å����Ƥ���������</p>
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
                                    <li><a href="#link-a">�����Ѥ���������PHP�ΥС������</a></li>
                                    <li>
                                        <a href="#link-b">PHP�ΥС�������ڤ��ؤ�</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��PHP Ver.���ءפ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.�ѹ���ΥС�����������</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_php.php">PHP�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">�����Ѥ���������PHP�ΥС������</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��X��������졼��Ver.2�פ�������ξ��</h5>
                                                <div class="msg_body">
                                                    <p>
                                                        ��X��������졼�� Ver.2�פ�ͭ���ȤʤäƤ����硢PHP�С������ϡ�8.3x / 8.2x / 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x�פ������Ѳ�ǽ�Ǥ���<br>
                                                        X��������졼���ξܺ٤ˤĤ��Ƥϰʲ��Υޥ˥奢��򤴻��Ȥ���������
                                                    </p>
                                                    <ul class="list list_arrow-right">
                                                        <li><a href="man_server_xaccelerator.php">X��������졼��(���å�����������졼��)</a></li>
                                                    </ul>
                                                </div>
                                            </aside>


                                            <table class="table mb5">
                                                <thead>
                                                <tr><th style="width:105px;">�С������</th><th>����</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>PHP 8.3.x</th>
                                                    <td>
                                                        <p>
                                                            ���߸����˥��ݡ��Ȥ���Ƥ���С������Ǥ���<br>
                                                            �����PHP����Ӥ��ƥѥե����ޥ󥹤������˶�������Ƥ��ޤ���
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.2.x</th>
                                                    <td>
                                                        <p>Wordpress�侩�С������Ǥ���</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.1.x</th>
                                                    <td rowspan="9">
                                                        <p>
                                                            ��С������Ǥ���<br>
                                                            ����С�����󥢥åפ�ͽ��Ϥʤ����ῷ���Ǥ����ѤϿ侩���ޤ���<br>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.0.x</th>
                                                </tr>

                                                <tr>
                                                    <th>PHP 7.4.x</th>
                                                </tr>

                                                <tr>
                                                    <th>PHP 7.3.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.2.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.1.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.0.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.6.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.5.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.4.x</th>
                                                    <td rowspan="3">
                                                        <p>
                                                            ��С������Ǥ���<br>
                                                            OS�٥�����ˤ��ѥå��ˤơ��ƶ����礭���ȼ������濴�˥������ƥ�������<br>�Ԥ��ޤ���<br>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.3.3</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.1.6</th>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <ul class="note-list">
                                                <li>
                                                    ��������ΥС��������FastCGI�פȡ֥���å���⥸�塼��(APC/OPcache)�פ�ɸ���ͭ���Ǥ���<br>
                                                    �ƥС������ˤ������������ƤˤĤ��Ƥϡ��ޥ˥奢��ڡ�����<a href="man_server_php_rapid.php">PHP�ι�®���ˤĤ���</a>�פ򤴻��Ȥ���������
                                                </li>
                                            </ul>

                                        </div>

                                    </section>
                                    <!-- /.section -->

                                    <section id="phpver-change" class="section">
                                        <h4 class="section_ttl" id="link-b">PHP�ΥС�������ڤ��ؤ�</h4>
                                        <section class="section">
                                            <div class="section_body">

                                                <div class="serial-box">

                                                    <section class="box">
                                                        <h5 class="box_ttl" id="link-b1">1.��PHP Ver.���ءפ򥯥�å�</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���PHP Ver.���ءפ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_program_php_ver_1.png?date=2410" alt="PHPver.���ز��̤�"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl" id="link-b2">2.�ѹ���ΥС�����������</h5>
                                                        <div class="box_body">
                                                            <p>�ѹ��������ɥᥤ��α�¦�ˤ���ڥ󥢥�����򥯥�å������Խ����ޤ���<br>���ߤΥС��������ǧ�������ѹ���ΥС������פ���ѹ���˾�ΥС����������򤯤�������</p>
                                                            <p><img class="img" src="../img/manual/man_program_php_ver_2.png?date=2410" alt="�����С��ѥͥ��PHPver.�ڤ��ؤ��򥯥�å�"></p>
                                                            <p>����塢�����ꤹ��פ򥯥�å����Ƥ���������</p>
                                                        </div>
                                                    </section>

                                                </div>
                                                <!-- /.serial-box -->
                                            </div>
                                        </section>
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