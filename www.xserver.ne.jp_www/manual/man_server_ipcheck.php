<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���������������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��û��ꤷ��IP���ɥ쥹���ۥ���̾����Υ�����������ݤǤ���֥���������������׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">����������������</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">����������������</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.�֥���������������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a02">2.������������IP���ɥ쥹���ɲ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">����������������</h4>
                                <div class="section_body">

                                    <p>���ꤷ��IP���ɥ쥹����Υ�����������ݤ��뤳�Ȥ��Ǥ��ޤ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.�֥���������������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥���������������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ipcheck_1.png" alt="������������������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.������������IP���ɥ쥹���ɲ�</h6>
                                            <div class="box_body">
                                                <p>�֥�����������IP�ɲáפ򥯥�å����ޤ���<br>
                                                ����IP���ɥ쥹���IP���ɥ쥹�����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p>���Ƥ��ǧ�������꤬�ʤ���С��ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ipcheck_2.png" alt="������������IP���ɥ쥹���ɲäΥ����꡼�󥷥�å�"></p>
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
                                    <li><a href="#link-a">����������������</a>
                                        <ol>
                                            <li><a href="#link-a01">1.�֥���������������פ򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.������������IP���ɥ쥹���ɲ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">����������������</h4>
                                <div class="section_body">
                                    <p>���ꤷ��IP���ɥ쥹����Υ�����������ݤ��뤳�Ȥ��Ǥ��ޤ���</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a01">1.�֥���������������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥���������������פ򥯥�å����Ƥ���������</p>
                                                <p><img alt="������������������̤�" class="img" src="../img/manual/man_server_ipcheck_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2. ������������IP���ɥ쥹���ɲ�</h5>
                                            <div class="box_body">
                                                <p>�֥�����������IP���ɲáפ򥯥�å����ޤ���<br>
                                                    ����IP���ɥ쥹���IP���ɥ쥹�����Ϥ������ɲä���פ򥯥�å����ޤ���</p>
                                                <p><img alt="������������IP���ɥ쥹���ɲäΥ����꡼�󥷥�å�" class="img" src="../img/manual/man_server_ipcheck_2.png?date=2410"></p>
                                            </div>
                                        </section>
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