<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress�ꥫ�Х꡼ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�WordPress�ꥫ�Х꡼�׵�ǽ�ǥꥫ�Х꡼������ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WordPress�ꥫ�Х꡼</h3>
                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">WordPress�ꥫ�Х꡼�Ȥ�</a></li>
                                    <li><a href="#link-previous-b">WordPress�ꥫ�Х꡼�μ»ܼ��</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.WordPress�ꥫ�Х꡼��˥塼��</a></li>
                                            <li><a href="#link-previous-b02">2.����˿ʤ�</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">������ɽ������ʤ��ʤä�WordPress������</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.��������ɽ������ʤ��ʤä�WordPress������פ�����</a></li>
                                            <li><a href="#link-previous-c02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-previous-c03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">�������������������WordPress������</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">1.���������������������WordPress������פ�����</a></li>
                                            <li><a href="#link-previous-d02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-previous-d03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</a></li>
                                            <li><a href="#link-previous-d04">4.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">������Ǥ��ʤ��ʤä�WordPress������</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.�֥�����Ǥ��ʤ��ʤä�WordPress������פ�����</a></li>
                                            <li><a href="#link-previous-e02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-previous-e03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">������ѥ���ɤΥꥻ�å�</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.�֥�����ѥ���ɤΥꥻ�åȡפ�����</a></li>
                                            <li><a href="#link-previous-f02">2.�ѥ���ɤ�ꥻ�å�</a></li>
                                            <li><a href="#link-previous-f03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-g">WordPress���ΤΥꥻ�å�</a>
                                        <ol>
                                            <li><a href="#link-previous-g01">1.��WordPress���ΤΥꥻ�åȡפ�����</a></li>
                                            <li><a href="#link-previous-g02">2.�����Ѥ������ǡ���������</a></li>
                                            <li><a href="#link-previous-g03">3.���Ƥ��ǧ���ơ��ꥻ�åȤ򳫻�</a></li>
                                            <li><a href="#link-previous-g04">4.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</a></li>
                                            <li><a href="#link-previous-g05">5.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPress�ꥫ�Х꡼�Ȥ�</h4>
                                <div class="section_body">

                                    <p>��WordPress�ꥫ�Х꡼�פȤ� WordPress�ǵ����ä�������Ф��������ꥻ�åȤ�Ԥ����Ȥ��Ǥ��ޤ���</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����ǧ��������</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>�����쵡ǽ�ϡ������Ȥ��������줹�뤳�Ȥ��ݾ㤹���ΤǤϤ���ޤ���</li>
                                                <li>���������¹Ը�ϥ����֥����Ȥ������ɽ������뤫�γ�ǧ��ɬ���ԤäƤ���������</li>
                                                <li>�ǡ������������ե������������ӥ����С�����پ����ˤ�äƤϡ������˻��֤��������礬����ޤ���</li>
                                                <li>�ꥫ�Х꡼���������¹����ˡ�/home/�����С�ID/�ɥᥤ��̾/wp_recovery_backup�פ˥Хå����åץǡ�������������ޤ���<br>
                                                ���/home/sample/sample.xsrv.jp/wp_recovery_backup</li>
                                                <li>�ʲ��ξ��ϡ�WordPress�ꥫ�Х꡼��ǽ�����Ѥ��������ޤ���<br>
                                                    ��WordPress5.0������Υѡ���������Ѥ��Ƥ�����<br>
                                                    ��WordPress�ޥ�������ȵ�ǽ����Ѥ��Ƥ�����</li>
                                            </ul>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPress�ꥫ�Х꡼�μ»ܼ��</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.WordPress�ꥫ�Х꡼��˥塼��</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡�WordPress�ꥫ�Х꡼�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_1.png" alt="WordPress�ꥫ�Х꡼�μ»ܼ��"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.����˿ʤ�</h6>
                                            <div class="box_body">
                                                <p>���줷����WordPress�Ρ�����˿ʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_2.png" alt="WordPress�ꥫ�Х꡼�μ»ܼ��"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <p>�����ꥻ�åȤ�Ԥ�����ܤϰʲ��ΤȤ���Ǥ���</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">������ɽ������ʤ��ʤä�WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.��������ɽ������ʤ��ʤä�WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>��������ɽ������ʤ��ʤä�WordPress������פ����򤷤ơּ��ؿʤ�פ򥯥�å����Ƥ�������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_3.png" alt="WordPress�ꥫ�Х꡼�μ»ܼ��"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                                <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ�������������¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_4.png" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ǡ����١���������̤ˤĤ���</h6>
                                                    <p>wp-config.php�����ꤵ��Ƥ���ǡ����١���̾���������ʤ����ˡ�WordPress�Υǡ����١���������̤�ɽ������ޤ���</p>
                                                    <p>�ץ�������˥塼����ǡ����١���������Τ����ֳ�ǧ����פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_5.png" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress�������б�����λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_6.png" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">�������������������WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.���������������������WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>���������������������WordPress������פ����򤷤ơ��ּ��ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_7.png" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                            <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ�������򳫻Ϥ���פ򥯥�å����Ƥ���������</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_8.png" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</h6>
                                            <div class="box_body">
                                                <p>�֥��ơ������פ�100��ˤʤ�ȡִ�λ���̤˿ʤ�ץܥ���ɽ������ޤ��Τǡ�����å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_9.png" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress�������б�����λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ����������ѥ���ɤȥ����󤹤�ݤ�ID��ɽ������ޤ��ΤǤ���ǧ����������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_10.png" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">������Ǥ��ʤ��ʤä�WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.�֥�����Ǥ��ʤ��ʤä�WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>�֥�����Ǥ��ʤ��ʤä�WordPress������פ����򤷤ơ��ּ��ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_11.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                                <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ�������������¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_12.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress�������б�����λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_13.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-f">������ѥ���ɤΥꥻ�å�</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.�֥�����ѥ���ɤΥꥻ�åȡפ�����</h6>
                                            <div class="box_body">
                                                <p>�֥�����ѥ���ɤΥꥻ�åȡפ����򤷤ơ��ּ���ʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_14.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.�ѥ���ɤ�ꥻ�å�</h6>
                                            <div class="box_body">
                                                <p>�֥ѥ���ɤ�ꥻ�åȤ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_15.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>�֥ѥ���ɤΥꥻ�åȤ���λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ����������ѥ���ɤȥ����󤹤�ݤ�ID��ɽ������ޤ��ΤǤ���ǧ����������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_16.png" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-g">WordPress���ΤΥꥻ�å�</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.��WordPress���ΤΥꥻ�åȡפ�����</h6>
                                            <div class="box_body">
                                                <p>��WordPress���ΤΥꥻ�åȡפ����򤷤ơ��ּ���ʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_17.png" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.�����Ѥ������ǡ���������</h6>
                                            <div class="box_body">
                                                <p>�ְ����Ѥ��ǡ����פ�������Ѥ������ǡ��������򤷤ơ��ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_18.png" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.���Ƥ��ǧ���ơ��ꥻ�åȤ򳫻�</h6>
                                            <div class="box_body">
                                                <p>�����Ѥ��ǡ����˴ְ㤤���ʤ����򺣰��ٳ�ǧ�ξ塢�֥ꥻ�åȤ򳫻Ϥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_19.png" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g04">4.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</h6>
                                            <div class="box_body">
                                                <p>�֥��ơ������פ�100��ˤʤ�ȡִ�λ���̤˿ʤ�ץܥ���ɽ������ޤ��Τǥ���å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_20.png" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g05">5.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress���ΤΥꥻ�åȤ���λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_21.png" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">WordPress�ꥫ�Х꡼�Ȥ�</a></li>
                                    <li><a href="#link-b">WordPress�ꥫ�Х꡼�μ»ܼ��</a>
                                        <ol>
                                            <li><a href="#link-b01">1.WordPress�ꥫ�Х꡼��˥塼��</a></li>
                                            <li><a href="#link-b02">2.������פ򥯥�å�</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">������ɽ������ʤ��ʤä�WordPress������</a>
                                        <ol>
                                            <li><a href="#link-c01">1.��������ɽ������ʤ��ʤä�WordPress������פ�����</a></li>
                                            <li><a href="#link-c02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-c03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">�������������������WordPress������</a>
                                        <ol>
                                            <li><a href="#link-d01">1.���������������������WordPress������פ�����</a></li>
                                            <li><a href="#link-d02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-d03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</a></li>
                                            <li><a href="#link-d04">4.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">������Ǥ��ʤ��ʤä�WordPress������</a>
                                        <ol>
                                            <li><a href="#link-e01">1.�֥�����Ǥ��ʤ��ʤä�WordPress������פ�����</a></li>
                                            <li><a href="#link-e02">2.��ջ�����ǧ��������������¹�</a></li>
                                            <li><a href="#link-e03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">������ѥ���ɤΥꥻ�å�</a>
                                        <ol>
                                            <li><a href="#link-f01">1.�֥�����ѥ���ɤΥꥻ�åȡפ�����</a></li>
                                            <li><a href="#link-f02">2.�ѥ���ɤ�ꥻ�å�</a></li>
                                            <li><a href="#link-f03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-g">WordPress���ΤΥꥻ�å�</a>
                                        <ol>
                                            <li><a href="#link-g01">1.��WordPress���ΤΥꥻ�åȡפ�����</a></li>
                                            <li><a href="#link-g02">2.�����Ѥ������ǡ���������</a></li>
                                            <li><a href="#link-g03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</a></li>
                                            <li><a href="#link-g04">4.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">WordPress�ꥫ�Х꡼�Ȥ�</h4>
                                <div class="section_body">

                                    <p>��WordPress�ꥫ�Х꡼�פȤ� WordPress�ǵ����ä�������Ф��������ꥻ�åȤ�Ԥ����Ȥ��Ǥ��ޤ���</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����ǧ��������</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>�����쵡ǽ�ϡ������Ȥ��������줹�뤳�Ȥ��ݾ㤹���ΤǤϤ���ޤ���</li>
                                                <li>���������¹Ը�ϥ����֥����Ȥ������ɽ������뤫�γ�ǧ��ɬ���ԤäƤ���������</li>
                                                <li>�ǡ������������ե������������ӥ����С�����پ����ˤ�äƤϡ������˻��֤��������礬����ޤ���</li>
                                                <li>�ꥫ�Х꡼���������¹����ˡ�/home/�����С�ID/�ɥᥤ��̾/wp_recovery_backup�פ˥Хå����åץǡ�������������ޤ���<br>
                                                    ���/home/sample/sample.xsrv.jp/wp_recovery_backup</li>
                                                <li>�ʲ��ξ��ϡ�WordPress�ꥫ�Х꡼��ǽ�����Ѥ��������ޤ���<br>
                                                    ��WordPress5.0������Υѡ���������Ѥ��Ƥ�����<br>
                                                    ��WordPress�ޥ�������ȵ�ǽ����Ѥ��Ƥ�����</li>
                                            </ul>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">WordPress�ꥫ�Х꡼�μ»ܼ��</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.WordPress�ꥫ�Х꡼��˥塼��</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡�WordPress�ꥫ�Х꡼�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_1.png?date=2410" alt="WordPress�ꥫ�Х꡼�μ»ܼ��"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���줷����WordPress�Ρ�����פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_2.png?date=2410" alt="������פ򥯥�å�"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <p>�����ꥻ�åȤ�Ԥ�����ܤϰʲ��ΤȤ���Ǥ���</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">������ɽ������ʤ��ʤä�WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c01">1.��������ɽ������ʤ��ʤä�WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>��������ɽ������ʤ��ʤä�WordPress������פ����򤷤ơּ��ءפ򥯥�å����Ƥ�������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_3.png?date=2410" alt="WordPress�ꥫ�Х꡼�μ»ܼ��"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                                <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ��ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_4.png?date=2410" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ǡ����١���������̤ˤĤ���</h6>
                                                    <p>wp-config.php�����ꤵ��Ƥ���ǡ����١���̾���������ʤ����ˡ�WordPress�Υǡ����١���������̤�ɽ������ޤ���</p>
                                                    <p>�ץ�������˥塼����ǡ����١���������Τ����ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_server_wp_recovery_5.png?date=2410" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress�������б�����λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_6.png?date=2410" alt="������ɽ������ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">�������������������WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d01">1.���������������������WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>���������������������WordPress������פ����򤷤ơ��ּ��ءפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_7.png?date=2410" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                                <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ��ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_8.png?date=2410" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</h6>
                                            <div class="box_body">
                                                <p>�֥��ơ������פ�100��ˤʤ�ȡִ�λ���̤ءץܥ���ɽ������ޤ��Τǡ�����å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_9.png?date=2410" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d04">4.��λ</h6>
                                            <div class="box_body">
                                                <p>�������ե�����ν����Ԥ���WordPress���Τ�ꥻ�åȤ��ޤ������פ�ɽ�����줿�鴰λ�Ǥ����������ѥ���ɤȥ����󤹤�ݤ�ID��ɽ������ޤ��ΤǤ���ǧ����������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_10.png?date=2410" alt="�������������������WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-e">������Ǥ��ʤ��ʤä�WordPress������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e01">1.�֥�����Ǥ��ʤ��ʤä�WordPress������פ�����</h6>
                                            <div class="box_body">
                                                <p>�֥�����Ǥ��ʤ��ʤä�WordPress������פ����򤷤ơ��ּ��ءפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_11.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e02">2.��ջ�����ǧ��������������¹�</h6>
                                            <div class="box_body">
                                                <p>���̾����ջ�����ǧ���־嵭����ջ�������򤷤���ǽ�����Ԥ��ޤ����פ�����å����������ǡ��ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_12.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress�������б�����λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_13.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-f">������ѥ���ɤΥꥻ�å�</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f01">1.�֥�����ѥ���ɤΥꥻ�åȡפ�����</h6>
                                            <div class="box_body">
                                                <p>�֥�����ѥ���ɤΥꥻ�åȡפ����򤷤ơ��ּ��ءפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_14.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f02">2.�ѥ���ɤ�ꥻ�å�</h6>
                                            <div class="box_body">
                                                <p>�ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_15.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f03">3.��λ</h6>
                                            <div class="box_body">
                                                <p>�֥ѥ���ɤΥꥻ�åȤ���λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ����������ѥ���ɤȥ����󤹤�ݤ�ID��ɽ������ޤ��ΤǤ���ǧ����������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_16.png?date=2410" alt="������Ǥ��ʤ��ʤä�WordPress������"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-g">WordPress���ΤΥꥻ�å�</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g01">1.��WordPress���ΤΥꥻ�åȡפ�����</h6>
                                            <div class="box_body">
                                                <p>��WordPress���ΤΥꥻ�åȡפ����򤷤ơ��ּ��ءפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_17.png?date=2410" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g02">2.�����Ѥ������ǡ���������</h6>
                                            <div class="box_body">
                                                <p>�ְ����Ѥ��ǡ����פ�������Ѥ������ǡ��������򤷤ơ��ּ¹Ԥ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_18.png?date=2410" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g03">3.���ơ�������100��ˤʤ�Τ��ǧ������λ���̤�</h6>
                                            <div class="box_body">
                                                <p>�֥��ơ������פ�100��ˤʤ�ȡִ�λ���̤ءץܥ���ɽ������ޤ��Τǥ���å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_19.png?date=2410" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g04">4.��λ</h6>
                                            <div class="box_body">
                                                <p>��WordPress���ΤΥꥻ�åȤ���λ���ޤ������פ�ɽ�����줿�鴰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_20.png?date=2410" alt="WordPress���ΤΥꥻ�å�"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /���ѥͥ�-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->
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
