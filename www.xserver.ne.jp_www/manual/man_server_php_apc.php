<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>APC/OPcache�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���PHP�¹Ի���CPU��٤ηڸ���PHP�������ʹ�®����ޤ�PHP�γ�ĥ�⥸�塼���APC/OPcache�פ򡢥��å��������С��Ǥϴ�ñ�����Ѥ��뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">APC/OPcache�ˤĤ���</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">APC / OPcache�ˤĤ���</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">APC / OPcache�ˤĤ���</h4>
                    <div class="section_body">

                        <p>��APC�פ��OPcache�פȤϡ�PHP�ν��¹Ի��ˡ�PHP�����Ƥ��Ŭ���������֤ǥ���å��夷�Ƥ���������ʹߡ�
                        Ʊ��PHP�˥������������ä��ݤ˥���å�������Ѥ��뤳�Ȥǡ�PHP�¹Ի���CPU��٤ηڸ��䡢PHP�������ʹ�®����ޤ�PHP�γ�ĥ�⥸�塼��Ǥ��� </p>
                        <p>��������ƤΥ����С��ǡ�APC�פޤ��ϡ�OPcache�פ�ɸ���ͭ���Ǥ���</p>
                        <p><img class="flex" src="../img/manual/man_server_php_apc_1.png" alt="APC���ѻ��ν������᡼��"></p>
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