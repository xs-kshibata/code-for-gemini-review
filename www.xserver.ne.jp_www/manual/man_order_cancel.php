<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�������ߤμ��ä� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä��������ߤμ��ä��ˤĤ��ơ�������⤷�Ƥ��ޤ������å��������С��ǤϿ���������ˤĤ��ơ�����λ�ʧ�����Ǥ���С�XServer��������ȡפ��餪�������ߤ���ä����Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">�������ߤμ��ä�</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�������ߤμ��ä��ˤĤ���</a></li>
                    <li><a href="#link-b">�ɥᥤ��/���ץ�����ȼ�SSL�Τ��������ߥ���󥻥���</a>
                        <ul>
                            <li><a href="#link-b01">1.�������ʧ���פ򥯥�å�</a></li>
                            <li><a href="#link-b02">2.�־ܺ١פ򥯥�å�</a></li>
                            <li><a href="#link-b03">3.�ַ�����֡���ʧ����ˡ���ѹ��פ򥯥�å�</a></li>
                            <li><a href="#link-b04">4.�֤�������������ä��פ򥯥�å�</a></li>
                            <li><a href="#link-b05">5.����󥻥봰λ</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-c">���Ѵ����極���С��Τ��������ߥ���󥻥���</a>
                        <ul>
                            <li><a href="#link-c01">1.�ַ������פ򥯥�å�</a></li>
							<li><a href="#link-c02">2.�ֲ��󤹤�פ򥯥�å�</a></li>
                            <li><a href="#link-c03">3.�ֲ������򤹤�פ򥯥�å�</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_cancel.php">����˴ؤ���֤褯��������</a></li>
                </ul>

                <aside class="msg msg_caution">
                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                    <div class="msg_body">
                        <p>���Ǥˤ���ʧ����ȿ�Ǥ��줿�����󡦥ץ�ڥ��ɤϡ����������ߤΥ���󥻥뤬�Ǥ��ޤ���</p>
                    </div>
                </aside>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�������ߤμ��ä��ˤĤ���</h4>
                    <div class="section_body">
                        <p>�ɥᥤ�����SSL����ϡ�����ʧ�����Τ��������ߤμ��ä�����ǽ�Ǥ���</p>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">�ɥᥤ��/���ץ�����ȼ�SSL�Τ��������ߥ���󥻥���</h4>
                    <div class="section_body">
                        <div class="serial-box">

                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.�������ʧ���פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡�������˥塼�Ρ������ʧ���פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_3.png?date=20230130" alt="�������ʧ���פ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.�־ܺ١פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�������������פ�ꡢ��ʧ������ä��������������Ρ־ܺ١פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_4.png?date=20201022" alt="�־ܺ١פ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.�ַ�����֡���ʧ����ˡ���ѹ��פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�����Ρַ�����֡���ʧ����ˡ���ѹ��פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_11.png?date=2501" alt="�ַ�����֡���ʧ����ˡ���ѹ��פ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.�֤�������������ä��פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>��ǧ���̤����Ƥ��ǧ�����֤�������������ä��פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_13.png?date=2501" alt="�֤�������������ä��פ򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b05">5.����󥻥봰λ</h6>
                                <div class="box_body">
                                    <p>���������ä��Υ�å�������ɽ������ޤ���<br>
                                        ��OK�פ򥯥�å�����ȡ����������ߤΥ���󥻥�ϴ�λ�Ǥ���
                                    </p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_12.png?date=2501" alt="����󥻥봰λ"></p>

                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-c">���Ѵ����極���С��Τ��������ߥ���󥻥���</h4>
                    <div class="section_body">
                        <div class="serial-box">
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.�ַ������פ򥯥�å�</h6>
                                <div class="box_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��оݥ����С��α�ü�ˤ��륯���å���˥塼��<i class="ico-xacc ico-xacc--list"></i>�ˤ���ַ������פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_7.png?date=20230130" alt="�������򥯥�å�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.�ֲ��󤹤�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�ֲ��󤹤�פ򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_8.png?date=20201022" alt="�������ߤμ��ä�"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.�ֲ������򤹤�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>���򤷤������С�ID�˴ְ㤤���ʤ�����ǧ���� �ֲ������򤹤�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_cancel_9.png?date=20201022" alt="�������ߤμ��ä�"></p>
                                    <p>�֥����С��פǷ����󤬡ֲ���פˤʤäƤ���С�����ϴ�λ�Ǥ���<br>
                                        �����Ѵ��֤δ��¤ޤǤϰ���³�������С��Τ����Ѥ���ǽ�Ǥ���
                                    </p>
									<p><img class="img" src="../img/manual/man_order_cancel_10.png?date=20230130" alt="�֥����С��פǷ����󤬡ֲ����"></p>
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