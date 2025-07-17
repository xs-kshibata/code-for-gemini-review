<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���ץ�����ȼ�SSL�κ�ȯ�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��ץ�����ȼ�SSL�κ�ȯ�Լ��򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">���ץ�����ȼ�SSL�κ�ȯ��</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">���ץ�����ȼ�SSL�κ�ȯ��</a>
                        <ol>
                            <li><a href="#link-a01">1.��ȯ�Կ����򳫻�</a></li>
                            <li><a href="#link-a02">2.��ȯ�Կ�����Ԥ�</a></li>
                            <li><a href="#link-a03">3.��ȯ�Ԥؤξ�ǧ��Ԥ�</a></li>
                            <li><a href="#link-a04">4.��ȯ�Լ�³����λ</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">���ץ�����ȼ�SSL�κ�ȯ��</h4>
                    <div class="section_body">
                    
                        <p class="mb5">�ʲ������줫�ξ��˳���������˸¤ꡢSSL������κ�ȯ�Ԥ������뤳�Ȥ���ǽ�Ǥ���</p>
                        <div class="border border_yellow">
                            <ul class="ul">
                                <li>���ߤ�������ξ�����ˤ���������񥢥르�ꥺ�ब��SHA-1�ס�����������2016ǯ1��1���ʹߡפξ��</li>
                                <li>�֥����ȥ饹�� �����å�SSL�ץ�ߥ���ס֥�ԥå�SSL�פξ���������Ѥ����ʲ������줫�δ��֤˳���������<br>
                                <ul>
                                    <li>(A) 2016ǯ5��31��������ȯ�ԡ���ȯ�Ԥ��졢ͭ�����¤�2018ǯ3��15���ʹߤξ��</li>
                                    <li>(B) 2016ǯ6��1���ʹߤ���2017ǯ12��1��������ȯ�ԡ���ȯ�Ԥ��졢ͭ�����¤�2018ǯ9��13���ʹߤξ��</li>
                                </ul></li>
                            </ul>
                        </div>
                        
                        <div class="serial-box mb10">
                            <section class="box">
                                <h3 class="box_ttl" id="link-a01">1.��ȯ�Կ����򳫻�</h3>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a> &gt; �ڡ��������Ρ�SSL������פ�ꡢ�оݤ�SSL�Ρֺ�ȯ�Կ����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_sslreissue_1.png?date=20210921" alt="��ȯ�Կ����򳫻Ϥ��ޤ�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h3 class="box_ttl" id="link-a02">2.��ȯ�Կ�����Ԥ�</h3>
                                <div class="box_body">
                                    <p>��ȯ���Ѥο��������ɽ�����ޤ����������Ƥ򤴳�ǧ�ξ塢�ֺ�ȯ�Կ�����Ԥ��פ򥯥�å����Ƥ���������</p>
                                    <p class="note">�����β��̤�ɽ�������־�ǧ�ѥ᡼�륢�ɥ쥹�פˡ־�ǧ�᡼��פ����դ���ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_order_sslreissue_2.png?date=20201022" alt="��ȯ�Կ�����λ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h3 class="box_ttl" id="link-a03">3.��ȯ�Ԥؤξ�ǧ��Ԥ�</h3>
                                <div class="box_body">
                                    <p>����������λ�塢SSL�������ȯ�Ը����־�ǧ�᡼��פ����դ���ޤ���<br>
                                    ����������ǧ�᡼����ʸ��ˤ��뾵ǧ��URL�˥�������������ǧ��Ȥ�ԤäƤ���������</p>
                                    <p class="note">����ǧ�᡼�뤬�����Ǥ��ʤ���硢�᡼�륢�ɥ쥹���ѹ����������ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a> &gt; �ڡ��������Ρ�SSL������פˤ���־�ǧ�᡼������ץܥ����ꤪ��³������ǽ�Ǥ���</p>
									<p><img class="img" src="../img/manual/man_order_sslreissue_3.png?date=20210921" alt="��ȯ�Կ�����λ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section id="s10" class="box">
                                <h6 class="box_ttl" id="link-a04">4.��ȯ�Լ�³����λ</h6>
                                <div class="box_body">
                                    <p>�����ͤǤξ�ǧ��ȸ塢SSL�������ȯ�Ը��ˤ����ƿ�����Ԥ��ޤ���<br>
                                    (�����ˤϿ������٤������פ����礬�������ޤ������餫���ᤴλ������������)</p>
                                    <p>SSL�������ȯ�Ը��Ǥο�������λ����SSL�����񤬺�ȯ�Ԥ���ޤ����顢�����ݡ��Ȥˤƥ����С��ؤΥ��󥹥ȡ����Ȥ�Ԥ��ޤ���<br>
                                    ���󥹥ȡ����Ȥδ�λ���衢�����ͤΤ���Ͽ�᡼�륢�ɥ쥹���ˤ�Ϣ�������ޤ���</p>
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