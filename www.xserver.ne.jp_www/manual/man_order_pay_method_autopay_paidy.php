<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>����ʧ���ʥڥ��ǥ��ˤˤ�뼫ư���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��û����˥��쥸�åȥ����ɤ���Ͽ������Ͽ�������쥸�åȥ����ɤǤ���������������Ȥ��ּ�ư��������פ˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">����ʧ���ʥڥ��ǥ��ˤˤ�뼫ư����</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-b">��ư����������ˡ�ʤ���ʧ���ʥڥ��ǥ��ˡ�</a>
                        <ul>
                            <li><a href="#link-b01">��ư�����˻��Ѥ���Paidy��������ȤΤ���Ͽ</a></li>
                            <li><a href="#link-b02">�������֤��ѹ�/��ư��������β��</a></li>
                            <li><a href="#link-b03">Paidy��������Ȥκ��</a></li>
                            <li><a href="#link-b04">����Ͽ�Ѥ�Paidy��������Ȥ��ѹ�</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">����ʧ���˴ؤ���֤褯��������</a></li>
                </ul>
                        
                <section class="section" id="link-b">
                    <p>��ѥ����ӥ�Paidy���󶡤����<a href="../price/price_payment_method_paidy.php">����ʧ���ʥڥ��ǥ���</a>�פ��̤��Ƽ�ư��������򤷤ޤ���<br>
                        ����ʧ������ˡ�ˡָ��¿��ءפ����򤹤뤳�Ȥǡ����¿��ؤˤ�뼫ư�������ǽ�Ǥ���</p>
                    <h4 id="autopay_method" class="section_ttl">��ư����������ˡ�ʤ���ʧ���ʥڥ��ǥ��ˡ�</h4>
                    <div class="section_body">
                        <p>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>���⡢������˥塼��ü��XServer��������ȥ�˥塼����ּ�ư��������פ򥯥�å����Ƥ���������</p>
                        <p><img class="img" src="../img/faq/faq_contract_renewal3.png?date=20230130" alt="��ư��������򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                        <p>��ư���������ꤷ��������ϡ����󹹿���������ꤷ��Paidy��������Ȥˤơ�������μ�ư������Ԥ��ޤ���</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">��ư�����˻��Ѥ���Paidy��������ȤΤ���Ͽ</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p>�ּ�ư��������פΡ֤���ʧ����ˡ����Ͽ�פ��֤���ʧ���ʥڥ��ǥ��ˡפ�����Τ�������Paidy��������Ȥ���Ͽ����פ򥯥�å����Ƥ���������</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_2.png?date=20210610" alt="��Paidy��������Ȥ���Ͽ����]�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                    <li>
                                        <p>�֥᡼�륢�ɥ쥹�פȡַ��������ֹ�פ����Ϥ����������ּ��ءפ򥯥�å����Ƥ���������</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_3.png?date=20210610" alt="�ּ��ءפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                    <li>
                                        <p>�������ä��Ϥ���4���PIN�����ɤ����Ϥ��Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_4.png?date=20210610" alt="PIN�����ɤ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
									<li>
                                        <p>����Ͽ����פ򥯥�å����Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_5.png?date=20210610" alt="����Ͽ����פ򤹤�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                    <li>
                                        <p>���ꤴ��˾�Υ�������Ȥ��Ф��Ƽ�ư�������֤����򤷡��ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_6.png?date=20210610" alt="��ư�������֤����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                    <li>
                                        <p>Paidy��������Ȥξ���䡢���ꤴ��˾�Υ����С����ɥᥤ������Ƥ˸�꤬�ʤ�����ǧ�����������ּ�ư���������ꤹ��פ򥯥�å����Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_7.png?date=20210624" alt="�ּ�ư���������ꤹ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                </ol>
                                
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">�������֤��ѹ�/��ư��������β��</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p> ��ư��������Ρַ��󥢥�����Ȱ����פ��ּ�ư�����������롦����ʧ����ˡ���ѹ�����פ򥯥�å����Ƥ���������</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_8.png?date=20210610" alt="��ư����������ˡ"></p>
                                    </li>
                                    <li>
                                        <p>�ѹ�����˾�Υ�������Ȥ��Ф��Ƽ�ư�������֤Ȥ���ʧ����ˡ�����򤷡� �ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������<br>
                                        �����������������ѹ�����˾�Υ�������Ȥ��Ф��ơ�����ʤ��פ����򤷤Ƥ���������</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_9.png?date=20210610" alt="��ǧ���̤ؿʤ�򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                    <li>
                                        <p>�ѹ����Ƥ˸�꤬�ʤ�����ǧ�����������ּ�ư���������ꤹ��פ򥯥�å����Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_10.png?date=20210610" alt="��ư���������ꤹ��򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- /.block -->

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b03">Paidy��������Ȥκ��</h5>
                            <div class="block_body">
                                <p>����Ͽ���Paidy��������ȤΡֺ������פ򥯥�å����Ƥ���������</p>
                                <p><img class="img" src="../img/manual/man_order_pay_method_autopay_paidy_11.png?date=20210624" alt="�ֺ������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-b04">����Ͽ��Paidy��������Ȥ��ѹ�</h5>
                            <div class="block_body">
                                <p>����Ͽ���Paidy��������Ȥξ���ϡ�Paidy�Τ��������ѥڡ�����<a href="https://my.paidy.com/" target="_blank">MyPaidy</a>�פˤ��ѹ�����ǽ�Ǥ���</p>
                            </div>
                        </section>
                        <!-- /.block -->   
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