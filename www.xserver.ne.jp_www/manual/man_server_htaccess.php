<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>.htaccess�Խ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åǥ��쥯�ȥ�ñ�̤�Web�����С��ε�ư���ѹ��Ǥ����.htaccess�ץե�����򥵡��С��ѥͥ뤫���ڤ��Խ��Ǥ����.htaccess�Խ��׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">.htaccess</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">.htaccess�Ȥ�</a></li>
                                <li><a href="#link-previous-b">��.htaccess�Խ��׵�ǽ�γ���</a></li>
                                <li><a href="#link-previous-c">��.htaccess�Խ��פΤ����Ѽ��</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1..htaccess�Խ��򥯥�å�</a></li>
                                        <li><a href="#link-previous-c02">2..htaccess�Խ����̤�ɽ��</a></li>
                                        <li><a href="#link-previous-c03">3.�������Ƥ��ɲ�</a></li>
                                        <li><a href="#link-previous-c04">4.��ǧ������</a></li>
                                        <li><a href="#link-previous-c05">5.��λ</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">.htaccess�Ȥ�</h4>
                                <div class="section_body">
                                    <p>.htaccess�ʥ������ƥ������������ˤȤϡ�Web�����С��ε�ư����ꤹ������ե�����Ǥ���</p>
                                    <p>�ǥ��쥯�ȥ�ñ�̤ǡ������������¤�桼����ǧ�ڤʤɤ����ꤹ�뤳�Ȥ��Ǥ��ޤ���</p>

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>nginx�Ķ����Ǥ�.htaccess�Τ����ѤˤĤ���</dt>
                                        <dd>
                                            ���å��������С��Ǥ�nginx�Ķ����ˤ����Ƥ⡢Apache�Ķ��������ꤵ�줿��.htaccess�ץե�����򤽤Τޤޤ����Ѥ����������Ȥ���ǽ�Ǥ���<br>
                                            �ܺ٤ϥޥ˥奢���<a href="man_server_nginx.php">nginx�ˤĤ���</a>�פ򤴻��Ȥ���������
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b"><a id="edit" name="edit"></a>��.htaccess�Խ��׵�ǽ�γ���</h4>
                                <div class="section_body">
                                    <ul class="ul">
                                        <li>�����С��ѥͥ�ˤơ��ɥᥤ��ñ�̤�.htaccess���Խ�����ǽ�ʡ�.htaccess�Խ��׵�ǽ���󶡤��Ƥ��ޤ���</li>
                                        <li>�ܵ�ǽ�ϡ���(�����оݥɥᥤ��̾)/public_html/.htaccess�ץե�������Խ����뤳�Ȥ��Ǥ��ޤ����Խ��оݤΥե����뤬¸�ߤ��ʤ����ϡ��Խ����Ƥ���ꤹ������Ǽ�ưŪ���������ޤ���</li>
                                        <li>�ܵ�ǽ�����Ѥ�������ʸ�������ɤ���EUC-JP�פȤ�����¸����ޤ���</li>
                                        <li>����¾�Υե���������֤���.htaccess�ե�������Խ��򤹤뤳�Ȥ��Ǥ��ޤ��󡣥ե�����ޥ͡������FTP���եȥ������ˤ���Խ������֤�ԤäƤ���������<br>
                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">�ե�����ޥ͡����������ե�����</a><br>
                                            <a href="man_ftp_setting.php">�ޥ˥奢�� > FTP�ˤĤ��� > FTP���եȤ�����</a>
                                        </li>
                                        <li>�ܤ���������ˡ�䵡ǽ�ˤĤ��Ƥϡ�Web�����С�(Apache)�˴ؤ�����Ҥ䥤�󥿡��ͥåȾ�λ����򤴻��Ȥ���������</li>
                                    </ul>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                        <div class="msg_body">
                                            <p>.htaccess�ˤϡ��ܥ����С��ѥͥ���󶡤��Ƥ��������ǽ������˴ؤ��뵭�Ҥ䡢WordPress�ʤɤΥץ����ˤ�뵭�Ҥ���ưŪ�˹Ԥ��Ƥ����礬����ޤ���<br>
                                            �������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺���ʤ���ʤ��褦�ˤ���դ���������<br>
                                            �ޤ����Խ����Web�����Ȥ������ɽ������뤫��ɬ������ǧ����������</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box mt50">

                                        <h4 class="section_ttl" id="link-previous-c"><a id="edit" name="edit"></a>��.htaccess�Խ��פΤ����Ѽ��</h4>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1. .htaccess�Խ��򥯥�å�</h6>
                                            <div class="box_body">
                                                 <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���.htaccess�Խ��ץ�˥塼�򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_1.png" alt="�����С��ѥͥ롦.htaccess�Խ��Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2. .htaccess�Խ����̤�ɽ��</h6>
                                            <div class="box_body">
                                                <p>��.htaccess�Խ��ץ��֤򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_2.png" alt="��.htaccess�Խ��ץ��֤򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>


                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3. �������Ƥ��ɲ�</h6>
                                            <div class="box_body">
                                                <p>���ꤷ�������Ƥ���̤����Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_3.png" alt=".htaccess���ɲä������Ƥ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4. ��ǧ������</h6>
                                            <div class="box_body">
                                                <p>�������Ƥ��ǧ�����ְ㤤���ʤ���Сּ¹Ԥ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_4.png" alt="�������Ƥγ�ǧ���̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c05">5. ��λ</h6>
                                            <div class="box_body">
                                                <p>���ꤷ�����Ƥ�.htaccess�ե������ȿ�Ǥ��Ƥ��뤳�Ȥ��ǧ���ޤ���<br />���碌�ơ�Web�����Ȥ�������ɽ������뤳�Ȥ򤴳�ǧ����������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_5.png" alt="�ɲä������Ƥ�ȿ�Ǥ���Ƥ��뤫��ǧ���Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

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
                                    <li><a href="#link-a">.htaccess�Ȥ�</a></li>
                                    <li><a href="#link-b">.htaccess���Խ�</a>
                                        <ol>
                                            <li><a href="#link-b01">1..htaccess�Խ��򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.�ڥ�Υ�������򥯥�å�</a></li>
                                            <li><a href="#link-b03">3.�������Ƥ��ɲ�</a></li>
                                            <li><a href="#link-b04">4.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">.htaccess�Ȥ�</h4>
                                        <div class="section_body">
                                            <p>.htaccess�ʥ������ƥ������������ˤȤϡ�Web�����С��ε�ư����ꤹ������ե�����Ǥ���</p>
                                            <p>�ǥ��쥯�ȥ�ñ�̤ǡ������������¤�桼����ǧ�ڤʤɤ����ꤹ�뤳�Ȥ��Ǥ��ޤ���</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>nginx�Ķ����Ǥ�.htaccess�Τ����ѤˤĤ���</dt>
                                                <dd>
                                                    ���å��������С��Ǥ�nginx�Ķ����ˤ����Ƥ⡢Apache�Ķ��������ꤵ�줿��.htaccess�ץե�����򤽤Τޤޤ����Ѥ����������Ȥ���ǽ�Ǥ���
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 id="link-b" class="section_ttl">.htaccess���Խ�</h4>
                                        <div class="section_body">

                                            <p>�����С��ѥͥ�ˤơ��ɥᥤ��ñ�̤�.htaccess���Խ�����ǽ�ʡ�.htaccess�Խ��׵�ǽ���󶡤��Ƥ��ޤ���</p>
                                            <aside class="msg msg_caution">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                                <div class="msg_body">
                                                    <p>.htaccess�ˤϡ��ܥ����С��ѥͥ���󶡤��Ƥ��������ǽ������˴ؤ��뵭�Ҥ䡢WordPress�ʤɤΥץ����ˤ�뵭�Ҥ���ưŪ�˹Ԥ��Ƥ����礬����ޤ���<br>
                                                        �������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺���ʤ���ʤ��褦�ˤ���դ���������<br>
                                                        �ޤ����Խ����Web�����Ȥ������ɽ������뤫��ɬ������ǧ����������</p>
                                                </div>
                                            </aside>
                                            <aside class="msg msg_info">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��.htaccess�Խ��׵�ǽ�ˤĤ���</h5>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>�ܵ�ǽ�ϡ���(�����оݥɥᥤ��̾)/public_html/.htaccess�ץե�������Խ����뤳�Ȥ��Ǥ��ޤ���</li>
                                                        <li>�Խ��оݤΥե����뤬¸�ߤ��ʤ����ϡ��Խ����Ƥ���ꤹ������Ǽ�ưŪ���������ޤ���</li>
                                                        <li>�ܵ�ǽ�����Ѥ�������ʸ�������ɤ���EUC-JP�פȤ�����¸����ޤ���</li>
                                                        <li>����¾�Υե���������֤���.htaccess�ե�������Խ��򤹤뤳�Ȥ��Ǥ��ޤ��󡣥ե�����ޥ͡������FTP���եȥ������ˤ���Խ������֤�ԤäƤ���������<br>
                                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">�ե�����ޥ͡����������ե�����</a><br>
                                                            <a href="man_ftp_setting.php">�ޥ˥奢�� > FTP�ˤĤ��� > FTP���եȤ�����</a>
                                                        </li>
                                                        <li>�ܤ���������ˡ�䵡ǽ�ˤĤ��Ƥϡ�Web�����С�(Apache)�˴ؤ�����Ҥ䥤�󥿡��ͥåȾ�λ����򤴻��Ȥ���������</li>
                                                    </ul>
                                                </div>
                                            </aside>
                                            <div class="serial-box mt50">

                                                <section class="box" id="link-b01">
                                                    <h5 class="box_ttl">1. .htaccess�Խ��򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���.htaccess�Խ��ץ�˥塼�򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_1.png?date=2410" alt="�����С��ѥͥ롦.htaccess�Խ��Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b02">
                                                    <h5 class="box_ttl">2. �ڥ�Υ�������򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�����С�������ꡢ�Խ��оݤ���ü�ˤ���ڥ�Υ�������򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_2.png?date=2410" alt="�����С������Υ����꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b03">
                                                    <h5 class="box_ttl">3. �������Ƥ��ɲ�</h5>
                                                    <div class="box_body">
                                                        <p>���ꤷ�������Ƥ���̤����Ϥ��������ꤹ��פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_3.png?date=2410" alt=".htaccess���ɲä������Ƥ����Ϥ��Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b04">
                                                    <h5 class="box_ttl">4. ��λ</h5>
                                                    <div class="box_body">
                                                        <p>���ꤷ�����Ƥ�.htaccess�ե������ȿ�Ǥ��Ƥ��뤳�Ȥ��ǧ���ޤ���<br />���碌�ơ�Web�����Ȥ�������ɽ������뤳�Ȥ򤴳�ǧ����������</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_4.png?date=2410" alt="�ɲä������Ƥ�ȿ�Ǥ���Ƥ��뤫��ǧ���Ƥ��륹���꡼�󥷥�å�"></p>
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