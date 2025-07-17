<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��ξ��Ϥ򤹤��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ɥᥤ����ϤȤϡ�¾��XServer���������ID�˥ɥᥤ��η�����ư���뤪��³���Ǥ�����">

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
            
                <h3 class="sub-ttl">�ɥᥤ��ξ��Ϥ򤹤���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�ɥᥤ����ϤȤ�</a></li>
                    <li><a href="#link-b">�ɥᥤ����Ϥ����γ�ǧ����</a></li>
                    <li><a href="#link-c">�ɥᥤ����Ϥ�ή��</a></li>
                    <li><a href="#link-d">�ɥᥤ����Ϥμ��</a>
                    <ol>
                        <li><a href="#link-d01">1.XServer��������Ȥإ����󤷡������Ρ֥��ݡ��ȡ����䤤��碌�פ��֤��䤤��碌�פ򥯥�å�</a></li>
                        <li><a href="#link-d02">2.�ڡ��������Ρ֤��䤤��碌�ե�����פ򥯥�å�</a></li>
                        <li><a href="#link-d03">3.�֤��䤤��碌���ơפ�ɬ�׾�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</a></li>
                        <li><a href="#link-d04">4.���Ƥ��ǧ��������ʤ���С����Ƥ���������פ򥯥�å�</a></li>
                        <li><a href="#link-d05">5.���ݡ��ȤˤƼ�³������</a></li>
                        <li><a href="#link-d06">6.��³����λ</a></li>
                    </ol>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ɥᥤ����ϤȤ�</h4>
                    <div class="section_body">
                        <p class="mb5">�ɥᥤ����ϤȤϡ�¾��XServer���������ID�˥ɥᥤ��η�����ư���뤪��³���Ǥ���</p>
                        <p>�ɥᥤ��α����襵���С����ѹ����줺���͡��ॵ���С���DNS�ˤϾ��ϸ��Ǥ����꤬���Τޤް����Ѥ���ޤ���</p>
                        <p class="note">��WEB�����ȡ��᡼�륢�ɥ쥹���Ѥ��륵���С����ѹ�������ϡ����Ӻ�Ȥ�ɬ�פǤ���</p>
                    
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�ɥᥤ����Ϥ����γ�ǧ����</h4>
                    <div class="section_body">
                        <ul class="check-box">
                            <li><i class="ico ico_circle-check"></i>�ɥᥤ����Ϥ���˾�Υɥᥤ��̾��ͭ�����¤�1����ʾ��ͱͽ�����뤫<br>(1����ʾ��ͱͽ���ʤ����ϡ���˹����򤷤Ƥ�����������³����ʤ�Ƥ�������)</li>
                            <li><i class="ico ico_circle-check"></i>�ɥᥤ����Ϥ���˾�Υɥᥤ��̾��ֲ���פ���Ƥ��ʤ���<br>(�ɥᥤ����Ϥξ��ϡ���������פǤ�)</li>
                            <li><i class="ico ico_circle-check"></i>�ɥᥤ����Ϥ򤴴�˾�Υɥᥤ��̾�μ�ư��������������Ƥ��뤫<br>(�������Ƥ��ʤ����ˤ������ݡ��ȤˤƲ���������ޤ�)</li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                <!-- /.serial-box -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">�ɥᥤ����Ϥ�ή��</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <dl class="dl">
                                <dt>1. ɬ�׾��������</dt>
                                <dd><p>���ϸ���������Τ�������͡����줾�줬ɬ�׾�����䤤��碌�ե����फ�餪���ꤤ�������ޤ���</p></dd>
                                <dt>2. ���Ƥγ�ǧ</dt>
                                <dd><p>�����ݡ��Ȥ��᡼������Ƥ��ǧ���ޤ���<br>
                                        �������Ƥ����꤬�ʤ���硢��³���򳫻Ϥ��ޤ���</p></dd>
                                <dt>3. ��³����λ</dt>
                                <dd><p>ɬ�פʾ���·�äƤ��顢2�Ķ�������4�Ķ����ۤɤǼ�³������λ���ޤ���<br>
                                        ��λ�塢�����ݡ��Ȥ����ϸ�/������Τ�������ͤؼ�³����λ�Υ᡼����������ޤ���</p></dd>
                            </dl>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <section class="section">
                    <h4 class="section_ttl" id="link-d">�ɥᥤ����Ϥμ��</h4>
                    <div class="section_body">
                        <div class="serial-box mb30">

                            <section class="box">
                                <h6 class="box_ttl" id="link-d01">1.XServer��������Ȥإ����󤷡������Ρ֥��ݡ��ȡ����䤤��碌�פ��֤��䤤��碌�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡������Ρ֥��ݡ��ȡ����䤤��碌�פ��֤��䤤��碌�פ򥯥�å����Ƥ���������</p>
                                    <p class="note">�����ϸ���������Τ�������͡ڤ��줾��ۤ������Ȥ�XServer��������Ȥإ�����򤷤Ƽ�³����ԤäƤ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_1.png" alt="�֥��ݡ��ȡ����䤤��碌�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_2.png" alt="�֤��䤤��碌�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl font-m">
                                            <i class="ico ico_circle-arrow-right"></i>
                                            ������Τ����ͤ�XServer���������ID�򤪻����Ǥʤ����
                                        </h6>
                                        <div class="msg_body pl30">
                                            <p>��³���򳫻Ϥ������ˡ���<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on">���������ߥե�����</a>�פ���������ӥ��ؤΤ�������³����ԤäƤ���������</p>
                                        </div>
                                    </aside>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d02">2.�ڡ��������Ρ֤��䤤��碌�ե�����פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�ڡ��������Ρ֤��䤤��碌�ե�����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_3.png" alt="�֤��䤤��碌�ե�����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d03">3.�֤��䤤��碌���ơפ�ɬ�׾�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�֤��䤤��碌���ơפ�ɬ�׾�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_4.png?date=250501" alt="�ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">���ƥ���</th>
                                            <td>�����С���ɥᥤ��η�������ˤĤ���</td>
                                        </tr>
                                        <tr>
                                            <th>����</th>
                                            <td>����¾</td>
                                        </tr>
                                        <tr>
                                            <th>���䤤��碌����</th>
                                            <td>�ʲ��Υƥ�ץ졼�Ȥ�����</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p>�ƹ��ܤ򥯥�å�����ȡ�������ĤǤ��ޤ���</p>
                                    <div class="mb5">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">���ϸ��Τ��������<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
                                                    <pre class="p25">��XServer���������ID�֤Υɥᥤ�����<br>
�����ͤ�XServer���������ID��<br>���ϴ�˾�ɥᥤ��̾��<br>�����Ϥ���ɥᥤ��ʣ������������Ƶ��ܤ��Ƥ���������<br><br>�ʲ��������襢������Ⱦ���򵭺ܤ��Ƥ���������<br>������XServer���������ID��<br>���������̾����<br>��ˡ�ͷ���ξ���ˡ��̾�򤴵��ܤ���������</pre>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mb15">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">������Τ��������<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
                                                    <pre class="p25">��XServer���������ID�֤Υɥᥤ�����<br>
�����ͤ�XServer���������ID��<br>���ϴ�˾�ɥᥤ��̾��<br>�����Ϥ���ɥᥤ��ʣ������������Ƶ��ܤ��Ƥ���������<br><br>�ʲ������ϸ���������Ⱦ���򵭺ܤ��Ƥ���������<br>���ϸ�XServer���������ID��<br>���ϸ�����̾����<br>��ˡ�ͷ���ξ���ˡ��̾�򤴵��ܤ���������</pre>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d04">4.���Ƥ��ǧ��������ʤ���С����Ƥ���������פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>���䤤��碌���Ƥ��ǧ��������ʤ���С����Ƥ���������פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_5.png?date=250501" alt="�����Ƥ���������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d05">5.���ݡ��ȤˤƼ�³������</h6>
                                <div class="box_body">
                                    <p>���ݡ��ȤǾ��Ͽ������ǧ���ޤ����顢�᡼��ˤƼ��ΤΤ�Ϣ��򤤤����ޤ���<br>
                                        ���ϸ��������褽�줾��Τ�������ͤ���ο�������ǧ�Ǥ��ޤ����顢��³���򳫻Ϥ��ޤ���<br>
                                        ��³���ϡ����Ϥ�ɬ�פʾ������Ҥ����夷�Ƥ��顢2��4�Ķ������٤Ǵ�λ���ޤ���</p>
                                    <p class="note">��������������������������Ĥ��ä���硢��³���ˤ����ˤ��򤤤�������礬����ޤ���</p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d06">6.��³����λ</h6>
                                <div class="box_body">
                                    <p>��³������λ���ޤ����顢���ϸ��������褽�줾��Τ�������ͤˡ֥ɥᥤ����Ϥμ�³����λ�Τ��Τ餻�פΥ᡼������ꤷ�ޤ���<br>
                                        XServer��������Ȥإ����󤷡��������Ƥ򤴳�ǧ����������</p>

                                </div>
                            </section>


                        </div>
                        <!-- /.serial-box -->

                        <h3 class="block_ttl" id="link-a01">���ϴ�˾�ɥᥤ���whois����ˤĤ���</h3>
                        <div class="block_body">
                            <p class="mb10">XServer���������ID�֤Υɥᥤ����ϼ�³����ԤäƤ�Whois����ϸ��߸�������Ƥ�����󤬰����Ѥ���ޤ���<br>Whois���󤬾��ϸ���������ͤξ���ˤƸ�������Ƥ����硢ɬ�פ˱����ƾ��ϼ�³������Whois������ѹ��򤪴ꤤ�������ޤ���</p>
                        </div>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>���ϴ�˾�ɥᥤ��.com�ϥɥᥤ��/����JP�ɥᥤ��ξ��</dt>
                            <dd>XServer��������Ȥإ����󤷡֤���������פΥɥᥤ�󥿥֤����򤷤ޤ���<br>�����ɥᥤ��֥ɥᥤ��ѥͥ�פΡ�Whois������ѹ��פ���ѹ�����ǽ�Ǥ���</dd>
                            <dt><i class="ico ico_square-fill"></i>���ϴ�˾�ɥᥤ��°��JP�ɥᥤ�� / ��ƻ�ܸ�JP�ɥᥤ��ξ��</dt>
                            <dd>�᡼�륵�ݡ��Ȥˤ��ѹ�����ǽ�Ǥ���<br>����˾�ξ��ϡ��᡼�륵�ݡ��Ȥؤ��䤤��碌����������</dd>
                        </dl>


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