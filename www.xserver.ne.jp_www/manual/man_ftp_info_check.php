<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP�����ǧ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���FTP�ۥ���̾�䥢�������̾���ǧ���뤿��μ��ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">FTP�����ǧ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">FTP�����ǧ���</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.����FTP������������������</a></li>
                                        <li><a href="#link-previous-a02">2.�ɥᥤ������</a></li>
                                        <li><a href="#link-previous-a03">3.FTP���ե�����Υ��֤�����</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <p>�����μ���FTP���ե��������ɬ�פ�FTP������ǧ�Ǥ��ޤ���</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">FTP�����ǧ���</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.����FTP������������������</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥���FTP�������������פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_1.png" alt="����FTP�����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.�ɥᥤ������</h5>
                                            <div class="box_body">
                                                <p>�ɥᥤ��������̤�[���򤹤�]�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_info_check_2.png" alt="����FTP��������ȤΥɥᥤ������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.FTP���ե�����Υ��֤�����</h5>
                                            <div class="box_body">
                                                <p>��FTP���ե�����פΥ��֤��顢FTP�����С��ʥۥ��ȡ�̾�ȥ桼�����ʥ�������ȡ�̾�γ�ǧ���Ǥ��ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_info_check_3.png" alt="FTP�����С��ʥۥ��ȡ�̾�ȥ桼�����ʥ�������ȡ�̾���ǧ���Ƥ��륹���꡼�󥷥�å�"></p>
                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>FTP�ѥ���ɤˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p class="mb0">FTP�ѥ���ɤ�<em class="font-bold">�֥����С��ѥ���ɡפȶ���</em>�Ǥ�����<em class="font-bold">��XServer��������ȤΥѥ���ɡפȤϰۤʤ�ޤ���</em><br>�����С��ѥ���ɤ�˺�줿���ϡ�<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">�֥����С��ѥ���ɺ�����ե����� ��</a>�������ꤷ�Ƥ���������</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">FTP�����ǧ���</a>
                                        <ol>
                                            <li><a href="#link-a1">1.FTP������������������</a></li>
                                            <li><a href="#link-a2">2.FTP���ե�����Υ��֤�����</a></li>
                                            <li><a href="#link-a3">3.FTP��������Ⱦ�����ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <p>�����μ���FTP���ե��������ɬ�פ�FTP������ǧ�Ǥ��ޤ���</p>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">FTP�����ǧ���</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a1">1.FTP������������������</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���FTP�������������פ����򤷤ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_1.png?date=2410" alt="FTP�����������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a2">2.FTP���ե�����Υ��֤�����</h5>
                                                    <div class="box_body">
                                                        <p>��FTP���ե�����פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_2.png?date=2410" alt="FTP��������ȤΥɥᥤ������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a3">3.FTP��������Ⱦ�����ǧ</h5>
                                                    <div class="box_body">
                                                        <p>FTP�����С�(�ۥ���)̾�ȥ桼����(���������)̾�γ�ǧ���Ǥ��ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_3.png?date=2410" alt="FTP�����С�(�ۥ���)̾�ȥ桼����(���������)̾���ǧ���Ƥ��륹���꡼�󥷥�å�"></p>
                                                        <aside class="msg msg_notice mt30">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>FTP�ѥ���ɤˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p class="mb0">FTP�ѥ���ɤ�<em class="font-bold">�֥����С��ѥ���ɡפȶ���</em>�Ǥ�����<em class="font-bold">��XServer��������ȤΥѥ���ɡפȤϰۤʤ�ޤ���</em><br>�����С��ѥ���ɤ�˺�줿���ϡ�<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">�֥����С��ѥ���ɺ�����ե����� ��</a>�������ꤷ�Ƥ���������</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

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