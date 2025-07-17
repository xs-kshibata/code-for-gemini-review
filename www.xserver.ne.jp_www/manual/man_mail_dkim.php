<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DKIM���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǻ��������᡼�륢�ɥ쥹�����夷���᡼���Ǥ�դΥ᡼�륢�ɥ쥹��ž�������DKIM����׵�ǽ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">DKIM����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DKIM����ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">DKIM�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.��DKIM����פ�����</a></li>
                                            <li><a href="#link-previous-b02">2.��DKIM�����ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.DKIM������ɲ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DKIM����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>�����᡼��β����󡦤ʤꤹ�ޤ����ɤ����ѤǤ���<br>�����᡼��ο����������᡼����ãΨ�θ��夬���Ԥ���ޤ���</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DKIM�����������ˡ</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. ��DKIM����פ�����</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�DKIM��������򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_1.png" alt="DKIM��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. ��DKIM�����ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_2.png" alt="��DKIM�����ɲáפ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. DKIM������ɲ�</h6>
                                            <div class="box_body">
                                                <p>DKIM������ɲä���ɥᥤ�������[���ꤹ��]�򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_3.png" alt="[���ꤹ��]�򥯥�å�"></p>
                                                <p>��DKIM��������פ˥ɥᥤ���ɲä��줿������ϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dkim_4.png" alt="���괰λ"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DKIM�쥳���ɤγ�ǧ�ˤĤ���</dt>
                                        <dd>
                                            <p>��DKIM��������פ�[ɽ��]����DKIM�쥳���ɤ���ǧ�Ǥ��ޤ���</p>
                                            <p><img class="img" src="../img/manual/previous/man_mail_dkim_5.png" alt="[ɽ��]�򥯥�å�"></p>
                                            <p><img class="img" src="../img/manual/previous/man_mail_dkim_6.png" alt="DKIM�쥳���ɾ���γ�ǧ"></p>
                                        </dd>
                                    </dl>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /��ѥͥ� -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">DKIM����ˤĤ���</a></li>
                                    <li><a href="#link-b">DKIM�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��DKIM����פ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.DKIM������ɲ�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">DKIM����ˤĤ���</h4>
                                        <div class="section_body">

                                            <p>�����᡼��β����󡦤ʤꤹ�ޤ����ɤ����ѤǤ���<br>�����᡼��ο����������᡼����ãΨ�θ��夬���Ԥ���ޤ���</p>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">DKIM�����������ˡ</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. ��DKIM����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�DKIM����򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_1.png?date=2410" alt="DKIM��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. DKIM������ɲ�</h5>
                                                    <div class="box_body">
                                                        <p>DKIM������ɲä���ɥᥤ��α�ü�ˤ�����������Ρ�OFF�פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_3.png?date=2410" alt="��OFF�פ򥯥�å�"></p>
                                                        <p>��ON�פ��ڤ��ؤ�ä�������ϴ�λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dkim_4.png?date=2410" alt="���괰λ"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>DKIM�쥳���ɤγ�ǧ�ˤĤ���</dt>
                                                <dd>
                                                    <p>��ǧ�������ɥᥤ��Ρ�ɽ���פ򥯥�å������DKIM�쥳���ɤ���ǧ�Ǥ��ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_mail_dkim_5.png?date=2410" alt="��ɽ���פ򥯥�å�"></p>
                                                    <p><img class="img" src="../img/manual/man_mail_dkim_6.png?date=2410" alt="DKIM�쥳���ɾ���γ�ǧ"></p>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /���ѥͥ� -->

                    </div>
                </div>
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