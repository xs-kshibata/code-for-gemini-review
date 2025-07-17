<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���ߤ�MySQL�ǡ����١������������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���MySQL�ǡ����١����ˤĤ��Ƽ�ư�ǥХå����åפ�����ˤĤ��ư��⤷�Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">���ߤ�MySQL����������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">���ߤ�MySQL�ǡ����١�������������</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.�֥�������ɼ¹ԡפ򥯥�å�</a></li>
                                        <li><a href="#link-previous-a02">2.�Хå����åפγ���</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">���ߤ�MySQL�ǡ����١�������������</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ�MySQL�Хå����åספ�ꡢ��ñ�˸��ߤ�MySQL�ǡ����١����μ�ư�Хå����åפ�Ԥ����Ȥ��Ǥ��ޤ���</p>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.�֥�������ɼ¹ԡפ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>�ָ��ߤ�MySQL���������ɡפ򥯥�å����ޤ������������ǡ����١������椫�顢�Хå����åפ�Ԥ������ǡ����١����ΰ��̷���(���̤��ʤ�/gz����)�����򤷡��֥�������ɼ¹ԡץܥ���򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_man_backup_1.png" alt="��������ɼ¹Ԥ˥ե����������������꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.�Хå����åפγ���</h5>
                                            <div class="box_body">
                                                <p>�Хå����åפ���ưŪ�˳��Ϥ��졢��������ɤǤ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_man_backup_2.png" alt="��������ɥܥ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /serial-box -->

                                    <p>
                                        �ʤ����ǡ����١���1�Ĥ����̤��ܰ��͡�MySQL�С������ˤ�����餺5GB�ˤ�Ķ���Ƥ����硢��������ɤǤ��ޤ���<br>
                                        �ޤ����ǡ����١����λ������̤��ܰ��ͤ�겼��äƤ��Ƥ⡢¿�̤Υ쥳���ɤ�¸�ߤ�����ϡ���������ɤ˼��Ԥ����礬����ޤ���
                                    </p>

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
                                    <li><a href="#link-a">���ߤ�MySQL�ǡ����١�������������</a>
                                        <ol>
                                            <li><a href="#link-a1">1.�֥�������ɤ���פ򥯥�å�</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">���ߤ�MySQL�ǡ����١�������������</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ�MySQL�Хå����åספ�ꡢ��ñ�˸��ߤΥǡ����١����μ�ư�Хå����åפ�Ԥ����Ȥ��Ǥ��ޤ���</p>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a1">1.�֥�������ɤ���פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>�ּ�ư�Хå����åספ򥯥�å����ޤ������������ǡ����١������椫�顢�Хå����åפ�Ԥ������ǡ����١����ΰ��̷���(���̤��ʤ�/gz����)�����򤷡��֥�������ɤ���ץܥ���򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_db_man_backup_1.png?date=2410" alt="�֥�������ɤ���פ򥯥�å�"></p>
                                                <p>�ʾ�ǥǡ����١�����������ɤμ�³���ϴ�λ�Ǥ���</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg msg_caution">
                                        <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h4>
                                        <div class="msg_body">
                                            <p>�ǡ����١���1�Ĥ����̤��ܰ��͡�MySQL�С������ˤ�����餺5GB�ˤ�Ķ���Ƥ����硢��������ɤǤ��ޤ���<br>
                                                �ޤ����ǡ����١����λ������̤��ܰ��ͤ�겼��äƤ��Ƥ⡢¿�̤Υ쥳���ɤ�¸�ߤ�����ϡ���������ɤ˼��Ԥ����礬����ޤ���</p>
                                        </div>
                                    </aside>

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