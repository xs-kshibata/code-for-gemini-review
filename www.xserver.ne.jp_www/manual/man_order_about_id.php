<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�Ƽ�ID�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���XServer���������ID�������С�ID�ʤɡ����å��������С��Τ�����˺ݤ���ɬ�פȤʤ�Ƽ�ID�˴ؤ��������Ǥ���">

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
            
                <h3 class="sub-ttl">�Ƽ�ID�ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�Ƽ�ID�ˤĤ���</a>
                        <ul>
                            <li><a href="#link-a01">XServer���������ID</a></li>
                            <li><a href="#link-a02">�����С�ID</a></li>
                            <li><a href="#link-a03">�����ӥ�������</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_missing.php">XServer���������ID�ȥ����С�ID�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�Ƽ�ID�ˤĤ���</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">XServer���������ID</h5>
                            <div class="block_body">
                                <p>�����ͤ��Ȥ�ȯ�Ԥ����8��ޤ���10���ID�ֹ�ǡ�����ե��٥åȤȿ������Ȥ߹�碌�ǹ�������Ƥ��ޤ���</p>
                                <div class="border border_blue">�����phai123456��cfgo123456</div>
                                <p class="mb0">XServer��������ȤؤΥ�����䥵�ݡ��Ȥؤ��䤤��碌�κݤ�ɬ�פȤʤ�ޤ���</p>
                                <p class="note">��ȯ�Ը塢XServer���������ID���ѹ��ϤǤ��ޤ���</p>
                                <dl class="dl mb0">
                                    <dt><i class="ico ico_square-fill"></i>XServer���������ID�γ�ǧ��ˡ</dt>
                                    <dd>��������䥵���ӥ��������Υ᡼�롢�ޤ���XServer��������ȤΡ���Ͽ�����ǧ���Խ��פʤɤ˵��ܤ�����ޤ���
										<ol class="ol">
											<li>
												<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡�������˥塼��ü��XServer��������ȥ�˥塼�������Ͽ�����ǧ���Խ��פ򥯥�å����Ƥ���������</p>
												<p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="��Ͽ�����ǧ���Խ��򥯥�å�"></p>
											</li>
											<li>
												<p>XServer���������ID��ɽ������ޤ���</p>
												<p><img class="img" src="../img/manual/man_order_about_id_2.png?date=20221011" alt=">XServer���������ID��ɽ�����Ƥ��륹���꡼�󥷥�å�"></p>
											</li>
										</ol>
									</dd>
                                </dl>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">�����С�ID</h5>
                            <div class="block_body">
                                <p>�����С���������Ȥ��������߻��ˡ������ͤǤ���ᤤ��������ID�Ǥ���<br>
                                �ʰ����Τ����ͤˤϡ����Ҥ��X�ǻϤޤ륵���С�ID����ꤷ�Ƥ����礬����ޤ�����</p>
                                <p>�ʤ��������С�ID�ϡ�����ɥᥤ��Ȥ��Ƥ����Ѥ���ޤ���</p>
                                <div class="border border_blue">�����xsample.xsrv.jp<br>
                                ������xsample�פ���ʬ�������С�ID�Ǥ���</div>
                                <ul class="note-list">
                                    <li>�������С����������߸���ѹ��佤���ϤǤ��ޤ���</li>
                                    <li>���̤�XServer���������ID�إ����С�ID�Τ߷�����ư���뤳�ȤϤǤ��ޤ���</li>
                                </ul>
                                <dl class="dl mt10 mb0">
                                    <dt><i class="ico ico_square-fill"></i>�����С�ID�γ�ǧ��ˡ</dt>
                                    <dd>��������䥵���ӥ��������Υ᡼�롢�ޤ���<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>��������ɽ�������ڡ����ʤɤ˵��ܤ�����ޤ���</dd>
                                </dl>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">�����ӥ�������</h5>
                            <div class="block_body">
                                <p>�����С����ɥᥤ��SSL�η��󤴤Ȥ˳�꿶�������8��δ����ֹ�Ǥ���<br>
                                �����ӥ������ɤϡ��ַ������פ���ǧ��ǽ�Ǥ���</p>
								<ol class="ol">
									<li>
										<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡������ӥ������ɤ��ǧ�����������С��α�ü�ˤ��륯���å���˥塼��<i class="ico-xacc ico-xacc--list"></i>�ˤ���ַ������פ򥯥�å����Ƥ���������</p>
										<p><img class="img" src="../img/manual/man_order_about_id_3.png?date=20230130" alt="�������򥯥�å�"></p>
									</li>
									<li>
										<p>�����ӥ������ɤ�ɽ������ޤ���</p>
										<p><img class="img" src="../img/manual/man_order_about_id_4.png?date=20210610" alt=">�����ӥ������ɤ�ɽ�����Ƥ��륹���꡼�󥷥�å�"></p>
									</li>
								</ol>
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