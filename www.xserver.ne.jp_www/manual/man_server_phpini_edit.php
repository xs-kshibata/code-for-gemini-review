<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>php.ini����ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���PHP�ץ���������ե�����Ǥ����php.ini�פ򥵡��С��ѥͥ��Ǵ�ñ���Խ��Ǥ����php.ini����׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">php.ini����ˤĤ���</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">php.ini�Ȥ�</a></li>
                                    <li><a href="#link-previous-b">php.ini����</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">php.ini�����ѹ�</a></li>
                                            <li><a href="#link-previous-b02">php.iniľ���Խ�</a></li>
                                            <li><a href="#link-previous-b03">php.ini��������</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">php.ini�Ȥ�</h4>
                                <div class="section_body">
                                    <p>
                                        php.ini�Ȥϡ�PHP�ץ���������Ū��ư���Ķ������ꤹ��ե�����Τ��ȤǤ���<br>
                                        PHP�������ѹ���ɬ�פʾ��䡢ʸ����������ץ�����ʸ��������������ѹ����������ʤɤˤϡ�php.ini�ե�������ѹ���ɬ�פǤ���
                                    </p>
                                    <p>
                                        ��php.ini����פϡ��ɥᥤ�󤴤Ȥ�php.ini�ե���������֤��Խ�����ǽ�ʥ����С��ѥͥ��ε�ǽ�Ǥ���<br>
                                        �ܵ�ǽ�������ǽ��php.ini����ˤĤ��Ƥϡ�<a href="man_server_phpini_setting_item.php">php.ini����������ǽ�ʹ���</a>�򤴳�ǧ����������
                                    </p>
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��X��������졼�� Ver.2�פ�������ξ��</h6>
                                        <div class="msg_body">
                                            <p>
                                                ��X��������졼�� Ver.2�����ѻ���php.ini����ΰ������ܤ�̵���Ȥʤ�ޤ���<br>
                                                �ܺ٤ϰʲ��Υޥ˥奢��򤴳�ǧ����������
                                            </p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">php.ini����</h4>
                                <div class="section_body">


                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���php.ini����פ򥯥�å����Ƥ���������</p>

                                    <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_1.png" alt="�����оݥɥᥤ����ǧ���ơ���php.ini����פ򥯥�å���"></p>

                                    <p class="mb40">
                                        �ʤ����ܵ�ǽ�����ꤷ�Ƥ���php.ini���꤬ͥ�褷��Ŭ�Ѥ���ޤ���<br>
                                        php.ini�����ľ���Խ����줿�����⡢php.iniľ���Խ�����Խ����Ƥ���������
                                    </p>
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">php.ini�����ѹ�</h5>
                                        <div class="block_body">
                                            <p>�Ƽ�������ܤˤĤ��ơ������ͤ��ѹ����Ԥ��ޤ���<br>
                                            �����ѹ�����ǽ�ʹ��ܤˤĤ��Ƥϡ�<a href="man_server_phpini_setting_item.php">php.ini����������ǽ�ʹ���</a>�򤴻��Ȥ���������</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_3.png" alt="php.ini�����ѹ��Υ����꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b02">php.iniľ���Խ�</h5>
                                        <div class="block_body">
                                            <p>�����ͤ�ľ��php.ini�ե�������Խ����뤳�Ȥ���ǽ�Ǥ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_4.png" alt="php.iniľ���Խ��Υ����꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b03">php.ini��������</h5>
                                        <div class="block_body">
                                            <p>php.ini����������ͤ��᤹���Ȥ���ǽ�Ǥ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_5.png" alt="php.ini���������Υ����꡼�󥷥�å�"></p>
                                        </div>
                                    </section>

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>���ߤ�PHP�������ͳ�ǧ��ˡ</h6>
                                        <div class="msg_body">
                                            <p>�����Τ褦��PHP�ե������������������С��˥��åץ��ɤ��Ƥ���ǧ����������</p>
                                            <pre class="code">
&lt;?php
phpinfo();
?&gt;</pre>
                                            <p class="note">��PHP�����ͳ�ǧ��Ϻ�������php�ե�����Ϻ�����Ƥ���������</p>
                                        </div>
                                    </aside>

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
                                    <li><a href="#link-a">php.ini�Ȥ�</a></li>
                                    <li><a href="#link-b">php.ini����</a>
                                        <ul>
                                            <li><a href="#link-b01">php.ini�����ѹ�</a></li>
                                            <li><a href="#link-b02">php.iniľ���Խ�</a></li>
                                            <li><a href="#link-b03">php.ini��������</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">php.ini�Ȥ�</h4>
                                        <div class="section_body">
                                            <p>
                                                php.ini�Ȥϡ�PHP�ץ���������Ū��ư���Ķ������ꤹ��ե�����Τ��ȤǤ���<br>
                                                PHP�������ѹ���ɬ�פʾ��䡢ʸ����������ץ�����ʸ��������������ѹ����������ʤɤˤϡ�php.ini�ե�������ѹ���ɬ�פǤ���
                                            </p>
                                            <p>��php.ini����פϡ��ɥᥤ�󤴤Ȥ�php.ini�ե���������֤��Խ�����ǽ�ʥ����С��ѥͥ��ε�ǽ�Ǥ���<br>
                                                �ܵ�ǽ�������ǽ��php.ini����ˤĤ��Ƥϡ�<a href="man_server_phpini_setting_item.php">php.ini����������ǽ�ʹ���</a>�򤴳�ǧ����������
                                            </p>

                                            <aside class="msg msg_notice">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��X��������졼�� Ver.2�פ�������ξ��</h4>
                                                <div class="msg_body">
                                                    <p>
                                                        ��X��������졼�� Ver.2�����ѻ���php.ini����ΰ������ܤ�̵���Ȥʤ�ޤ���<br>
                                                        �ܺ٤ϰʲ��Υޥ˥奢��򤴳�ǧ����������
                                                    </p>
                                                    <ul class="list list_arrow-right">
                                                        <li><a href="man_server_phpini_setting_ignore_item.php">X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">php.ini����</h4>
                                        <div class="section_body">

                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���php.ini����פ򥯥�å����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/man_server_phpini_edit_1.png?date=2410" alt="��php.ini����פ򥯥�å�"></p>

                                            <p class="mb40">
                                                �ʤ����ܵ�ǽ�����ꤷ�Ƥ���php.ini���꤬ͥ�褷��Ŭ�Ѥ���ޤ���<br>
                                                php.ini�����ľ���Խ����줿�����ϡ�php.iniľ���Խ��ץ�˥塼����Խ����Ƥ���������
                                            </p>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b01">php.ini�����ѹ�</h5>
                                                <div class="block_body">
                                                    <p>
                                                        �Ƽ�������ܤˤĤ��ơ������ͤ��ѹ����Ԥ��ޤ���<br>
                                                        �����ѹ�����ǽ�ʹ��ܤˤĤ��Ƥϡ�<a href="man_server_phpini_setting_item.php">php.ini����������ǽ�ʹ���</a>�򤴻��Ȥ���������
                                                    </p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_3.png?date=2410" alt="php.ini�����ѹ��Υ����꡼�󥷥�å�"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b02">php.iniľ���Խ�</h5>
                                                <div class="block_body">
                                                    <p>�����ͤ�ľ��php.ini�ե�������Խ����뤳�Ȥ���ǽ�Ǥ���</p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_4.png?date=2410" alt="php.iniľ���Խ��Υ����꡼�󥷥�å�"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b03">php.ini��������</h5>
                                                <div class="block_body">
                                                    <p>php.ini����������ͤ��᤹���Ȥ���ǽ�Ǥ���</p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_5.png?date=2410" alt="php.ini���������Υ����꡼�󥷥�å�"></p>
                                                </div>
                                            </section>

                                            <div class="msg">
                                                <h5 class="msg_ttl + div.msg_body"><i class="ico ico--circle" aria-hidden="true"></i>���ߤ�PHP�������ͳ�ǧ��ˡ</h5>
                                                <div class="msg_body">
                                                    <p>�����Τ褦��PHP�ե������������������С��˥��åץ��ɤ��Ƥ���ǧ����������</p>
                                                    <pre class="code">&lt;?php
phpinfo();
?&gt;</pre>
                                                    <p class="note">��PHP�����ͳ�ǧ��Ϻ�������php�ե�����Ϻ�����Ƥ���������</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

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