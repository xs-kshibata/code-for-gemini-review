<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>������ž������ʥ�����쥯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��û��ꤹ��URL�ؤΥ�����쥯�����꤬��ñ�ˤǤ���֥�����ž������׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">������ž������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">������ž������</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.�֥�����ž������פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-a02">2.�֥�����쥯�������ɲáפ򥯥�å�</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-b">������ѹ����Ƥ������ư��ʤ����</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">������ž������</h4>
                                <div class="section_body">

                                    <p>�����URL�إ�����쥯�����꤬��ǽ�Ǥ���</p>
                                    
                                    <aside class="msg msg_notice mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���֥ɥᥤ���ޤ�Ʊ��ɥᥤ��ؤ�ž������ˤĤ���</h6>
                                            <div class="msg_body">
                                                <p>
                                                    ����ǽ����Ѥ��������Ԥ����ȤϤǤ��ޤ�����WEB�����Ȥι����ˤ�äƤϥ�����쥯�ȥ롼�פ�ȯ�������ǽ��������ޤ���<br>
                                                    Ʊ��ɥᥤ��ؤ�ž�����Զ�礬ȯ��������ϡ���<a href="../manual/man_server_htaccess.php">.htaccess</a>�פǤ�����򤴸�Ƥ����������<br>
                                                    ��.htaccess�ץե�����ε������Ƥϥ��ݡ����оݳ��Ȥʤ�ޤ����ᡢ�ܺ٤Ϥ����ͤˤƤ�Ĵ�٤򤪴ꤤ�������ޤ���
                                                </p>
                                            </div>
                                    </aside>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.�֥�����ž������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥�����ž������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_1.png" alt="������ž��������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.�֥�����쥯�������ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���ɥ쥹�ȥ�����쥯�����ž�����URL�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���<br>
                                                    ���Ƥ��ǧ�������꤬�ʤ���С��ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_2.png" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>���ơ����������ɤ�����ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>���ơ����������ɤ����򤷤Ƥ��������ʤ��Ƥ⡢������쥯��������ɲäϤǤ��ޤ���<br>
                                                            ���򤷤ʤ����ϡ�301�����ꤵ��ޤ���<br>
                                                            �ʤ���ɬ�פ˱����ơ��ʲ��μ��ǥ��ơ����������ɤ����򤹤뤳�Ȥ��Ǥ��ޤ���
                                                        </p>
                                                        <ol class="ol">
                                                            <li>
                                                                <p>�֥��ơ����������ɤ����򤹤�פ˥����å�������Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_3.png" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>
                                                            </li>
                                                            <li>
                                                                <p>���ơ����������ɤ����򤷤Ƥ���������</p>
                                                                <p><img class="img" src="../img/manual/previous/man_server_transfer_4.png" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h4 class="section_ttl" id="link-previous-b">������ѹ����Ƥ������ư��ʤ����</h4>
                                        <div class="section_body">
                                            <p>������쥯��������ѹ����Ƥ�ư��ʤ���硢</p>
                                                <ul class="ul">
                                                    <li>�����ѤΥ��󥿡��ͥåȥ֥饦����Google Chrome�ʤɡˤ���ٽ�λ�������ٵ�ư������������ư����ǧ����</li>
                                                    <li>�̤Υ��󥿡��ͥåȥ֥饦����ư����ǧ����</li>
                                                </ul>
                                            <p>�ʤɤ򤪻����������<br>
                                                ������ѹ�����ľ��ϡ�������ѹ��������ξ��󤬥��󥿡��ͥåȥ֥饦����˻ĤäƤ��ꡢ������쥯�����꤬����˵�ǽ���ʤ���礬����ޤ���</p>
                                        </div>
                                    </section>
                                    <!-- /.block -->
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
                                    <li><a href="#link-a">������ž������</a>
                                        <ol>
                                            <li><a href="#link-a01">1.�֥�����ž������פ򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.�֥�����ž��������ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-a03">3.���ɲä���פ򥯥�å�</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">������ѹ����Ƥ������ư��ʤ����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">������ž������</h4>
                                        <div class="section_body">

                                            <p>�����URL�إ�����쥯�����꤬��ǽ�Ǥ���</p>
                                            
                                            <aside class="msg msg_notice mt30">
                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���֥ɥᥤ���ޤ�Ʊ��ɥᥤ��ؤ�ž������ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            ����ǽ����Ѥ��������Ԥ����ȤϤǤ��ޤ�����WEB�����Ȥι����ˤ�äƤϥ�����쥯�ȥ롼�פ�ȯ�������ǽ��������ޤ���<br>
                                                            Ʊ��ɥᥤ��ؤ�ž�����Զ�礬ȯ��������ϡ���<a href="../manual/man_server_htaccess.php">.htaccess</a>�פǤ�����򤴸�Ƥ����������<br>
                                                            ��.htaccess�ץե�����ε������Ƥϥ��ݡ����оݳ��Ȥʤ�ޤ����ᡢ�ܺ٤Ϥ����ͤˤƤ�Ĵ�٤򤪴ꤤ�������ޤ���
                                                        </p>
                                                    </div>
                                            </aside>
                                            <div class="serial-box mb40">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a01">1.�֥�����ž������פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥�����ž������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_1.png?date=2410" alt="������ž��������̤�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a02">2.�֥�����ž��������ɲáפ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�֥�����ž��������ɲáפ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_2.png?date=2410" alt="������ž��������ɲäΥ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a03">3.���ɲä���פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�ƹ��ܤ����Ϥ������ɲä���פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_transfer_3.png?date=2410" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>���ơ����������ɤ�����ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>���ơ����������ɤ����򤷤Ƥ��������ʤ��Ƥ⡢������쥯��������ɲäϤǤ��ޤ���<br>
                                                                    ���򤷤ʤ����ϡ�301�����ꤵ��ޤ���<br>
                                                                    �ʤ���ɬ�פ˱����ơ��ʲ��μ��ǥ��ơ����������ɤ����򤹤뤳�Ȥ��Ǥ��ޤ���
                                                                </p>
                                                                <ol class="ol">
                                                                    <li>
                                                                        <p>�֥��ơ����������ɤ����򤹤�פ˥����å�������Ƥ���������</p>
                                                                        <p><img class="img" src="../img/manual/man_server_transfer_4.png?date=2410" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p>���ơ����������ɤ����򤷤Ƥ���������</p>
                                                                        <p><img class="img" src="../img/manual/man_server_transfer_5.png?date=2410" alt="�����С��ѥͥ�Υ�����쥯������Υ����꡼�󥷥�å�"></p>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <section class="block">
                                                <h4 class="section_ttl" id="link-b">������ѹ����Ƥ������ư��ʤ����</h4>
                                                <div class="section_body">

                                                    <p>������쥯��������ѹ����Ƥ�ư��ʤ���硢</p>
                                                    <ul class="ul">
                                                        <li>�����ѤΥ��󥿡��ͥåȥ֥饦����Google Chrome�ʤɡˤ���ٽ�λ�������ٵ�ư������������ư����ǧ����</li>
                                                        <li>�̤Υ��󥿡��ͥåȥ֥饦����ư����ǧ����</li>
                                                    </ul>
                                                    <p>�ʤɤ򤪻����������<br>
                                                        ������ѹ�����ľ��ϡ�������ѹ��������ξ��󤬥��󥿡��ͥåȥ֥饦����˻ĤäƤ��ꡢ������쥯�����꤬����˵�ǽ���ʤ���礬����ޤ���</p>
                                                </div>
                                            </section>
                                            <!-- /.block -->
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