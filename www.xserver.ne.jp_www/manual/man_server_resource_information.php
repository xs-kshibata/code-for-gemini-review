<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�꥽������˥��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á֥꥽������˥����׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�꥽������˥���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-previous-a">�꥽������˥���</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-previous-a">�꥽������˥���</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥꥽������˥����פ�ꡢ�������CPU�����ꡦž���̤����Ѿ�������3����ʬ��ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                        <p><img class="img" src="../img/manual/previous/man_server_resource_information_1.png" alt="�꥽������˥���"></p>
                    </div>
                </section>
                <!-- /.section -->

                        </div><!-- ��ѥͥ뽪���-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">�꥽������˥����ˤĤ���</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">�꥽������˥����ˤĤ���</h4>
                                        <div class="section_body">
                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥꥽������˥����פ�ꡢCPU�����ꡦž���̤λ��Ѿ�������پ������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                            <p><img class="img" src="../img/manual/man_server_resource_information_2.png?date=2410" alt="�֥꥽������˥����פ򥯥�å�"></p>
                                            <p><img class="img" src="../img/manual/man_server_resource_information_1.png?date=2410" alt="�꥽������˥�������"></p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div><!-- ���ѥͥ뽪���-->
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