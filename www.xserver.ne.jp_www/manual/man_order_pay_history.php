<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>����ʧ������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä���ޤǤΤ���ʧ��������ǧ���뤿��μ��ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">


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
            
                <h3 class="sub-ttl">����ʧ������</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">����ʧ������</a>
                    <ol>
                        <li><a href="#link-a01">1.�������ʧ���פ򥯥�å�</a></li>
                        <li><a href="#link-a02">2.�֤���ʧ�����򡿼��ν�ȯ�ԡפ򥯥�å�</a></li>
						<li><a href="#link-a03">3.�־ܺ١פ򥯥�å�</a></li>
                    </ol>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">����ʧ���˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">����ʧ������</h4>
                    <div class="section_body">
                        <p>���Τ���ʧ��������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.�������ʧ���פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡�������˥塼�Ρ������ʧ���פ򥯥�å����Ƥ�������</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="�����ʧ���򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.�֤���ʧ�����򡿼��ν�ȯ�ԡפ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�֤���ʧ�����򡿼��ν�ȯ�ԡפ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_bill_4.png?date=20230130" alt="����ʧ�����򡿼��ν�ȯ�Ԥ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.�־ܺ١פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>����ʧ�����Ƥ��ǧ��������ۤΡ־ܺ١פ򥯥�å�����ȡ�������ǧ�Ǥ��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_pay_history_3.png?date=20210610" alt="�ܺ٤򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
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