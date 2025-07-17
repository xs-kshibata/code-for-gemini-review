<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress�ơ��ޤ��������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���WordPress�ơ��ޤ��������ɤ�����ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WordPress�ơ��ޤ���������</h3>

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-b">WordPress�ơ��ޤ���������</a>
                            <ul>
                                <li><a href="#link-b01">������WordPress�ơ��ޡפ򥯥�å�</a></li>
                                <li><a href="#link-b02">���������򤹤�פ򥯥�å�</a></li>
                                <li><a href="#link-b03">�����֥�������ɡפ򥯥�å�</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <aside class="msg msg_caution">
                    <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                    <div class="msg_body">
                        <p>
                            ��������ɤǤ���WordPress�ơ��ޤϡ������󶡤�̵���ơ��ޤ����XServer������������WordPress�ơ��ޡפ����������ͭ���ơ��ޤȤʤ�ޤ���
                        </p>
                    </div>
                </aside>
                
                <ul class="link-box mt30">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_wp.php">WordPress�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">WordPress�ơ��ޤ���������</h4>
                    <div class="section_body">
                        <p>XServer��������Ȥˤơ�WordPress�ơ��ޤ��������ɤ��Ƥ����ޤ���</p>

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1����WordPress�ơ��ޡפ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡���¦��˥塼�Ρ�WordPress�ơ��ޡפ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_1.png?date=20230322" alt="XServer��������Ȥǡ�WordPress�ơ��ޡפ򥯥�å����륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2. �����򤹤�פ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>��������ɤ������ơ��ޤΡ����򤹤�פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_2.png?date=20230322" alt="�����򤹤�פ򥯥�å����륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3. �֥�������ɡפ򥯥�å�</h5>
                                <div class="box_body">
                                    <p>�֥�������ɡפ򥯥�å�����ȥơ��ޤ���������ɤ���ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_wp_theme_download_3.png?date=20230322" alt="�֥�������ɡפ򥯥�å����륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                        </div>
                    </div>
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