<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ǧ�ڸ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���JP�ɥᥤ��ʳ��Υɥᥤ��̾��¾�Ҥذܴɤ���ݤ�ɬ�פȤʤ��ǧ�ڸ��פˤĤ��ơ��������򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">ǧ�ڸ�</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ǧ�ڸ��ˤĤ���</a>
                        <ol>
                            <li><a href="#link-a01">1.ǧ�ڸ���ɬ�פʥɥᥤ��̾�򥯥�å�</a></li>
                            <li><a href="#link-a02">2.��ǧ�ڸ��γ�ǧ�פ򥯥�å�</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">ǧ�ڸ��ˤĤ���</h4>
                    <div class="section_body">
                        <p>�ɥᥤ��ܴɤ�Ԥ��ݤˡ�ǧ�ڸ���ɬ�פʾ��ϡ��������ˤƤ��б�����������</p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.ǧ�ڸ���ɬ�פʥɥᥤ��̾�򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ȥåץڡ��������Ρ֥ɥᥤ��פ�ꡢǧ�ڸ���ɬ�פʥɥᥤ��̾�򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_domain_auth_key_1.png?date=20230130" alt="ǧ�ڸ�������������ɥᥤ��򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.��ǧ�ڸ��γ�ǧ�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�ִ��ܾ���פΡ�ǧ�ڸ��γ�ǧ�פ򥯥�å�����ȡ�ǧ�ڸ������뤤��ǧ�ڸ��γ�ǧ��ɬ�פʼ�礬ɽ������ޤ��ΤǤ���ǧ����������</p>
                                    <p><img class="img" src="../img/manual/man_domain_auth_key_2.png?date=20240609" alt="ǧ�ڸ��γ�ǧ�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
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