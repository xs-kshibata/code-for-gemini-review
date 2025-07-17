<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP�������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���FTP��³����ǽ��IP���ɥ쥹����ꤹ�뤳�Ȥ���������������ե����������Υꥹ���򸺤餹���Ȥ���ǽ�ʡ�FTP��������׵�ǽ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">FTP��������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">FTP��������</a></li>
                                <li><a href="#link-previous-b">������</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.FTP�������������</a></li>
                                        <li><a href="#link-previous-b02">2.FTP��³����IP���ɥ쥹���ɲ�</a></li>
                                        <li><a href="#link-previous-b03">3.�����оݤ������IP���ɥ쥹������</a></li>
                                        <li><a href="#link-previous-b04">4.���괰λ</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-b011">�ե�����ޥ͡���������Ѥ������</a></li>
                                        <li><a href="#link-previous-b012">��IP���ɥ쥹�פλ�����ˡ�ˤĤ���</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">����FTP������������ѻ�����ջ���</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">FTP��������ˤĤ���</h4>
                                <div class="section_body">
                                    <p>FTP�Ǥ���³����ǽ��IP���ɥ쥹�����ꤷ��FTP����Υ������������¤��ޤ���<br>
                                    ����ˤ�ꡢ��������������ե����������Υꥹ�����㸺�Ǥ��ޤ���<br>
                                    ���������IP���ɥ쥹�����ꤷ����硢���ꤵ�줿IP���ɥ쥹����Υ��������Τߤ���Ƥ�������ʳ�����Υ��������ϥѥ���ɤ����פ������Ǥ���³����ݤ��ޤ���</p>
                                    <p class="note">���������ԤäƤ��餺�������ͤˤơ�<a href="man_ftp_ftpaccess.php">.ftpaccess</a>�פ��ȼ������ꤵ��Ƥ��ʤ����Ϥɤ�IP���ɥ쥹�����FTP��³����ǽ�Ǥ���</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">������</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.FTP�������������</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ�塢FTP������������򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_1.png" alt="FTP�������������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.FTP��³����IP���ɥ쥹���ɲ�</h5>
                                            <div class="box_body">
                                                <p>��FTP��³����IP���ɥ쥹�ɲáפ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_2.png" alt="FTP������������IP���������ɲ������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.�����оݤ������IP���ɥ쥹������</h5>
                                            <div class="box_body">
                                                <p>�����оݡ�IP���ɥ쥹�����Ϥ��ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_3.png" alt="����IP������"></p>
                                                <p class="note">�������ͤΤ����ѤΥץ�Х����ˤ�äƤ�IP���ɥ쥹����ư�����礬����ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�������оݡפˤĤ���</dt>
                                                    <dd>
                                                        <p>���ꤷ��IP���ɥ쥹�ˤ����³���¤�֥����С�������������Ρפˤ��뤫�ֳ����ɥᥤ��Τߡפˤ��뤫������Ǥ��ޤ���</p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">�������оݡפˡ֥����С�������������Ρפ���ꤷ�����</em><br>
                                                            �����ͤΥ����С�������������Τ��Ф������¤�ͭ���Ȥʤ�ޤ���
                                                        </div>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">�������оݡפˡ֥ɥᥤ��̾�פ���ꤷ�����</em><br>
                                                            �����ɥᥤ��Υե�������Ф������¤�ͭ���Ȥʤ�ޤ���
                                                        </div>
                                                        <p>�㤨�С���example.com�פ��Ф��Ƶ���IP��192.168.1.100�פ����ꤹ��ȡ���example.com�ץե�����ʲ��ˤϡ�IP���ɥ쥹����192.168.1.100�פδĶ��ʳ������FTP��³���Ǥ��ʤ��ʤ�ޤ���</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4.���괰λ</h5>
                                            <div class="box_body">
                                                <p>��ǧ���̤��������Ƥ��ǧ���Ƥ����������Ǹ�ˡ��ɲä���פ򥯥�å����ޤ���</p>
                                                <p>�ʤ���FTP������������ꤹ��ȡ������С���ˡ�.ftpaccess�פ����֤���ޤ���<br>
                                                .ftpaccess�ե�����ξܺ٤�<a href="man_ftp_ftpaccess.php">.ftpaccess</a>�򤴳�ǧ����������</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b011">�ե�����ޥ͡���������Ѥ������</h5>
                                        <div class="block_body">
                                            <p>FTP��������򤷤����֤ǥե�����ޥ͡���������Ѥ���ˤϡ���IP���ɥ쥹�פˡ�<em class="font-bold">127.0.0.1</em>�פȵ��ܤ��������ä��Ƥ���������</p>
                                            <p class="note">���嵭�����Ԥ�ʤ���Хե�����ޥ͡����㤫���ǧ���Ǥ��ޤ���Τǡ�����դ���������</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b012">��IP���ɥ쥹�פλ�����ˡ�ˤĤ���</h5>
                                        <div class="block_body">
                                            <p>������̿����ȼԤʤɤ˳�����Ƥ��Ƥ���IP���ɥ쥹���Τ������³����Ĥ�����ʤɡ���IP���ɥ쥹�פ��ϰϤ����ꤷ�������ϡ�IP���ɥ쥹����Ƭ�ս�����Ϥ��Ƥ���������</p>
                                            <div class="border border_blue">����ˡ�192.0.2.1�ס���192.0.2.254�פ���Ĥ�����<br>
                                            ������192.0.2.�פޤǤ����Ϥ�����򤷤Ƥ���������</div>
                                            <p class="note">��IP���ɥ쥹���ϰϻ��ꤹ���硢�����ϡ�.�פǽ����ɬ�פ�����ޤ���</p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">����FTP������������ѻ�����ջ���</h4>
                                <div class="section_body">
                                    <p>����FTP��������Ȥ���³��ǥ��쥯�ȥ��ʲ��Τ褦�����ꤹ���硢FTP�������꤬Ŭ�Ѥ���ޤ���</p>
                                    <div class="border border_gray mb5">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�����С��������������</p>
                                        <p>��³��ǥ��쥯�ȥ���<em class="font-bold">/home/�����С�ID</em>�פ��Ⲽ�̤˻���</p>
                                        <div class="border border_blue">
                                            ���home/�����С�ID/example.com����³��ǥ��쥯�ȥ�����ꤷ��FTP��������ȤǤ���³<br>
                                            ���� FTP���������Ŭ�Ѥ���ޤ���
                                        </div>
                                    </div>
                                    <div class="border border_gray mt20">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�оݥɥᥤ��̾</p>
                                        <p>��³��ǥ��쥯�ȥ���<em class="font-bold">/home/�����С�ID/�оݥɥᥤ��̾</em>�פ��˲��̤����</p>
                                        <div class="border border_blue">
                                            ���home/�����С�ID/example.com/public_html����³��ǥ��쥯�ȥ�����ꤷ��FTP��������ȤǤ���³<br>
                                            ���� FTP���������Ŭ�Ѥ���ޤ���
                                        </div>
                                    </div>
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
                                    <li><a href="#link-a">FTP��������ˤĤ���</a></li>
                                    <li>
                                        <a href="#link-b">������</a>
                                        <ol>
                                            <li><a href="#link-b1">1. FTP�������������</a></li>
                                            <li><a href="#link-b2">2.��FTP��³����IP���ɥ쥹���ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-b3">3. �����оݤ������IP���ɥ쥹������</a></li>
                                            <li><a href="#link-b4">4. ���괰λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <div class="section_body">
                                    <h4 class="section_ttl">FTP��������ˤĤ���</h4>
                                    <p>FTP�Ǥ���³����ǽ��IP���ɥ쥹�����ꤷ��FTP����Υ������������¤��ޤ���<br>
                                        ����ˤ�ꡢ��������������ե����������Υꥹ�����㸺�Ǥ��ޤ���<br>
                                        ���������IP���ɥ쥹�����ꤷ����硢���ꤵ�줿IP���ɥ쥹����Υ��������Τߤ���Ƥ�������ʳ�����Υ��������ϥѥ���ɤ����פ������Ǥ���³����ݤ��ޤ���</p>
                                    <p class="note">���������ԤäƤ��餺�������ͤˤơ�<a href="man_ftp_ftpaccess.php">.ftpaccess</a>�פ��ȼ������ꤵ��Ƥ��ʤ����Ϥɤ�IP���ɥ쥹�����FTP��³����ǽ�Ǥ���</p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">������</h4>
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b1">1. FTP�������������</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�FTP������������򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_1.png?date=2410" alt="FTP�������������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b2">2. ��FTP��³����IP���ɥ쥹���ɲáפ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p>��FTP��³����IP���ɥ쥹���ɲáפ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_2.png?date=2410" alt="FTP������������IP���������ɲ������"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b3">3. �����оݤ������IP���ɥ쥹������</h5>
                                            <div class="box_body">
                                                <p>�����оݡ�IP���ɥ쥹�����Ϥ����ɲä���ץܥ���򥯥�å����ޤ�</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_3.png?date=2410" alt="����IP������"></p>
                                                <p class="note">�������ͤΤ����ѤΥץ�Х����ˤ�äƤ�IP���ɥ쥹����ư�����礬����ޤ���</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�������оݡפˤĤ���</dt>
                                                    <dd>
                                                        <p>���ꤷ��IP���ɥ쥹�ˤ����³���¤�֥����С�������������Ρפˤ��뤫�ֳ����ɥᥤ��Τߡפˤ��뤫������Ǥ��ޤ���</p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">�������оݡפˡ֥����С�������������Ρפ���ꤷ�����</em><br>
                                                            �����ͤΥ����С�������������Τ��Ф������¤�ͭ���Ȥʤ�ޤ���
                                                        </div>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">�������оݡפˡ֥ɥᥤ��̾�פ���ꤷ�����</em><br>
                                                            �����ɥᥤ��Υե�������Ф������¤�ͭ���Ȥʤ�ޤ���
                                                        </div>
                                                        <p>�㤨�С���example.com�פ��Ф��Ƶ���IP��192.168.1.100�פ����ꤹ��ȡ���example.com�ץե�����ʲ��ˤϡ�IP���ɥ쥹����192.168.1.100�פδĶ��ʳ������FTP��³���Ǥ��ʤ��ʤ�ޤ���</p>
                                                    </dd>
                                                </dl>
                                                <aside class="msg msg_caution">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>FTP��������Ȥ���³��ǥ��쥯�ȥ��ʲ��Τ褦�����ꤹ���硢FTP�������꤬Ŭ�Ѥ���ޤ���</p>
                                                        <div class="border border_gray mb5">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�����С��������������</p>
                                                            <p>��³��ǥ��쥯�ȥ���<em class="font-bold">/home/�����С�ID</em>�פ��Ⲽ�̤˻���</p>
                                                            <div class="border border_blue">���home/�����С�ID/example.com����³��ǥ��쥯�ȥ�����ꤷ��FTP��������ȤǤ���³<br>
                                                                �� FTP���������Ŭ�Ѥ���ޤ���</div>
                                                        </div>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>�оݥɥᥤ��̾</p>
                                                            <p>��³��ǥ��쥯�ȥ���<em class="font-bold">/home/�����С�ID/�оݥɥᥤ��̾</em>�פ��˲��̤����</p>
                                                            <div class="border border_blue">���home/�����С�ID/example.com/public_html����³��ǥ��쥯�ȥ�����ꤷ��FTP��������ȤǤ���³<br>
                                                                �� FTP���������Ŭ�Ѥ���ޤ���</div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b4">4. ���괰λ</h5>
                                            <div class="box_body">
                                                <p>��ǧ���̤��������Ƥ��ǧ���Ƥ����������Ǹ�ˡ��ɲä���פ򥯥�å����ޤ���</p>
                                                <p>�ʤ���FTP������������ꤹ��ȡ������С���ˡ�.ftpaccess�פ����֤���ޤ���<br>
                                                    .ftpaccess�ե�����ξܺ٤�<a href="man_ftp_ftpaccess.php">.ftpaccess</a>�򤴳�ǧ����������</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl">�ե�����ޥ͡���������Ѥ������</h5>
                                        <div class="block_body">
                                            <p>FTP��������򤷤����֤ǥե�����ޥ͡���������Ѥ���ˤϡ���IP���ɥ쥹�פˡ�<em class="font-bold">127.0.0.1</em>�פȵ��ܤ��������ä��Ƥ���������</p>
                                            <p class="note">���嵭�����Ԥ�ʤ���Хե�����ޥ͡����㤫���ǧ���Ǥ��ޤ���Τǡ�����դ���������</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl">��IP���ɥ쥹�פλ�����ˡ�ˤĤ���</h5>
                                        <div class="block_body">
                                            <p>������̿����ȼԤʤɤ˳�����Ƥ��Ƥ���IP���ɥ쥹���Τ������³����Ĥ�����ʤɡ���IP���ɥ쥹�פ��ϰϤ����ꤷ�������ϡ�IP���ɥ쥹����Ƭ�ս�����Ϥ��Ƥ���������</p>
                                            <div class="border border_blue">����ˡ�192.0.2.1�ס���192.0.2.254�פ���Ĥ�����<br>
                                                ����192.0.2.�פޤǤ����Ϥ�����򤷤Ƥ���������</div>
                                            <p class="note">��IP���ɥ쥹���ϰϻ��ꤹ���硢�����ϡ�.�פǽ����ɬ�פ�����ޤ���</p>
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