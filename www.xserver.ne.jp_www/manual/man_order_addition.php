<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�����ӥ����������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ä��Ǥ�XServer���������ID�򤪻����Τ����ͤ�XServer��������ȤΡ֥����ӥ����������ߡפ��饵���С����򿽤����ळ�Ȥǡ�Ʊ���ID��ʣ���η����������뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">�����ӥ�����������</h3>

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">�����ӥ�����������</a>
                            <ol>
                                <li><a href="#link-a01">�����С��򤪿������ߤ�����</a></li>
                                <li><a href="#link-a02">�ɥᥤ��򤪿������ߤ�����</a></li>
                                <li><a href="#link-a03">SSL������򤪿������ߤ�����</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">��������˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�����ӥ�����������</h4>
                    <div class="section_body">
                        <p>
                            �����С�������ӥɥᥤ��SSL�Ȥ��ä������ӥ��ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�Ρ�+�ɲÿ������ߡס�+�ɥᥤ������פ�ꤪ�������ߤ��������ޤ���<br>
                            �ޤ���XServer��������Ȥ��餳��饵���ӥ��򤪿������ߤ���������Ʊ���ID�Ƿ����ޤȤ�ƴ����Ǥ��ޤ���
                        </p>
                        <p class="note">�������������Ͽ�����ѤǤʤ�����<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server_index=on&service=xserver" target="_blank">�����С��������������ߥե�����</a>������Ͽ��ԤäƤ���������</p>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a01">�����С��򤪿������ߤ�����</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ȥåץڡ��������Ρ֥����С��פ�ꡢ��+�ɲÿ������ߡפ򥯥�å����Ƥ���������</p>
								<p><img class="img" src="../img/manual/man_order_addition_1.png?date=20220216" alt="+�ɲÿ������ߤ򥯥�å�"></p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a02">�ɥᥤ��򤪿������ߤ�����</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ȥåץڡ��������Ρ֥ɥᥤ��פ�ꡢ��+�ɥᥤ������פ򥯥�å����Ƥ���������</p>
								<p><img class="img" src="../img/manual/man_order_addition_2.png?date=20220216" alt="+�ɥᥤ������򥯥�å�"></p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a03">SSL������򤪿������ߤ�����</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ȥåץڡ��������Ρ�SSL������פ�ꡢ��+�ɲÿ������ߡפ򥯥�å����Ƥ���������</p>
								<p><img class="img" src="../img/manual/man_order_addition_3.png?date=20220216" alt="+�ɲÿ������ߤ򥯥�å�"></p>
                            </div>
                        </section>
                        
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