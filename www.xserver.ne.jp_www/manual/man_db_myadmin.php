<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>phpMyAdmin | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�phpMyAdmin�פ�������ˡ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">phpMyAdmin</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">phpMyAdmin</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">phpMyAdmin</h4>
                                <div class="section_body">
                                    <p>phpMyAdmin�����Ѥ��뤳�Ȥǡ���ñ�˥ǡ����١����δ�����Ԥ����Ȥ��Ǥ��ޤ���</p>
                                    <p class="note">�����Ѥ������ˡ�<a href="man_db_setting.php">MySQL������</a>�ǥǡ����١����������ѤߤǤ���ɬ�פ�����ޤ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_1.png" alt="phpMyAdmin�˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�ǡ����١��������ꤷ���桼����̾�ȥѥ���ɤǥ����󤷤ޤ���</p>

                                    <table class="table">
                                        <caption>Basicǧ���������</caption>
                                        <tbody>
                                            <tr>
                                                <th>�桼����̾</th>
                                                <td>MySQL�桼����̾<br>���xsample_user</td>
                                            </tr>
                                            <tr>
                                                <th>�ѥ����</th>
                                                <td>MySQL�桼����̾�Υѥ����</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">���桼����̾�ϥ����С�ID�����ǤϤʤ��ΤǤ�����Ĥ�����������</p>

                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_2.png" alt="phpMyAdmin�˥����󤹤�ݤ�Basicǧ�ڲ���"></p>
                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_3.png" alt="phpMyAdmin�Υȥåץڡ���"></p>

                                    <p class="note">���ѥ���ɤ�˺�줿����<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ�MySQL����ע���MySQL�桼���ΰ����פ����ѹ��Ǥ��ޤ���</p>

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
                                    <li><a href="#link-a">phpMyAdmin</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">phpMyAdmin</h4>
                                <div class="section_body">

                                    <p>phpMyAdmin�����Ѥ��뤳�Ȥǡ���ñ�˥ǡ����١����δ�����Ԥ����Ȥ��Ǥ��ޤ���</p>
                                    <p class="note">�����Ѥ������ˡ�<a href="man_db_setting.php">MySQL������</a>�ǥǡ����١����������ѤߤǤ���ɬ�פ�����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_myadmin_1.png?date=2410" alt="phpMyAdmin�˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�ǡ����١��������ꤷ���桼����̾�ȥѥ���ɤǥ����󤷤ޤ���</p>

                                    <table class="table">
                                        <caption>Basicǧ���������</caption>
                                        <tbody>
                                        <tr>
                                            <th>�桼����̾</th>
                                            <td>MySQL�桼����̾<br>��)xsample_user</td>
                                        </tr>
                                        <tr>
                                            <th>�ѥ����</th>
                                            <td>MySQL�桼����̾�Υѥ����</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">���桼����̾�ϥ����С�ID�����ǤϤʤ��ΤǤ�����Ĥ�����������</p>

                                    <p><img class="img" src="../img/manual/man_db_myadmin_2.png?date=2410" alt="phpMyAdmin�˥����󤹤�ݤ�Basicǧ�ڲ���"></p>
                                    <p><img class="img" src="../img/manual/man_db_myadmin_3.png?date=2410" alt="phpMyAdmin�Υȥåץڡ���"></p>

                                    <p class="note">���ѥ���ɤ�˺�줿����<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ�MySQL����ע���MySQL�桼�����ΰ����פ����ѹ��Ǥ��ޤ���</p>

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