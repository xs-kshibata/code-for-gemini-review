<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ΰܴɤˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åɥᥤ��ΰܴɤ˴ؤ��뤴����Ǥ���">
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
                <h3 class="sub-ttl">�ɥᥤ��ΰܴɤˤĤ���</h3>
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">�ɥᥤ��ΰܴɡʴ����ȼԤΰ�ž��</a></li>
                    </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_domain.php">�ɥᥤ������ΰ�ž�˴ؤ���֤褯��������</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ɥᥤ��ΰܴɡʴ����ȼԤΰ�ž��</h4>
                    <div class="section_body">
                        <p class="mt40 mb20 tac bright-yellow font-l font-bold">
                            �ɥᥤ��ΰܴɤϡ�XServer�ɥᥤ��פˤƹԤäƤ���������<br>
                            �ܺ٤ϲ����򤴻��Ȥ���������
                        </p>
                        <p class="mb40 tac domain-link">
                            <a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer.php" target="_blank" class="btn btn_green-l">co.jp/ne.jp/or.jp�ʤ�.jp�ΰܴ���ˡ�Ϥ�����<i class="ico ico_new-window"></i></a>
                            <a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer_other.php" target="_blank" class="btn btn_green-l">.jp�ʳ��Υɥᥤ��ΰܴ���ˡ�Ϥ�����<i class="ico ico_new-window"></i></a>
                        </p>
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