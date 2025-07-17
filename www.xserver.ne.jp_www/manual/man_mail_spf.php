<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SPF���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢����Żҥ᡼����������ɥᥤ�󤬺��Τ���Ƥ��ʤ����򸡺����������᡼��β����󡦤ʤꤹ�ޤ����ɤ���SPF����׵�ǽ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">SPF����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">SPF����ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">SPF��������ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.��SPF����פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b02">2.���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ��Ρ�ON�ˤ���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.��ON�ˤ���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b04">4.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">SPF�����Gmail��SMTP�����С��Ȥ������Ѥ���ݤ�������ɲä���</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.��Gmail���Ĥ��ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-c02">2.���ɲä���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-c03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">������������ˤĤ���</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">1.�֥�����������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-d02">2.�쥳�������Ƥ��Խ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-d03">3.���ѹ�����פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-d04">4.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">������ˤĤ���</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.�ֽ�����פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-e02">2.�ֽ�����򤹤�פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-e03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>



                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">SPF����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>
                                        SPF(Sender Policy Framework)�Ȥϡ��Żҥ᡼����������ɥᥤ�󤬺��Τ���Ƥ��ʤ����򸡺����������᡼��β����󡦤ʤꤹ�ޤ����ɤ����ѤǤ���<br>
                                        �����᡼��ο����������᡼����ãΨ�θ��夬���Ԥ���ޤ���
                                    </p>
                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h4>
                                        <div class="msg_body">
                                            <p>�ɥᥤ������Ǥ��ȼ��ɥᥤ����ɲû��ˡ�SPF�쥳���ɤ�ư���ɲä������ޤ���<br>
                                                ���Τ��ᡢ�ȼ��ɥᥤ����Ф��Ƥ����ͤ����Ȥ�SPF������ɲä��Ƥ�������ɬ�פϤ���ޤ���</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">SPF��������ˡ</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.��SPF����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���SPF����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_1.png" alt="��SPF����פ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ��Ρ�ON�ˤ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡���ON�ˤ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_2.png" alt="��ON�ˤ���פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.��ON�ˤ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ������ON�ˤ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_3.png" alt="��ON�ˤ���פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.���괰λ</h6>
                                            <div class="box_body">
                                                <p>�������̤����ꤷ���ɥᥤ��ˡ�ON��ɸ������ˡפ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_4.png" alt="SPF����������̤Υ����꡼�󥷥�å�"></p>
                                                <p>SPF�����ON�ˤ��뤳�Ȥ�DNS�쥳���ɤ˰ʲ������Ƥ��ɲä���ޤ���</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per">�ۥ���</th>
                                                        <td> �����ON�ˤ����ɥᥤ��</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>
                                                            <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>���ƤˤĤ���</dt>
                                                                <dd>����sv***.xserver.jp�פ���ʬ�ϡ������ͤ������ѤΥ����С��Υۥ���̾�Ȥʤ�ޤ���<br>
                                                                    ����example.com�פ���ʬ�ϡ������ON�ˤ����ɥᥤ��̾�Ȥʤ�ޤ���
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                    <div class="msg_body">
                                                        <p>SPF���꤬�����С���ȿ�Ǥ����ޤǤˡ���ʬ������������٤������礬����ޤ���</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">SPF�����Gmail��SMTP�����С��Ȥ������Ѥ���ݤ�������ɲä���</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.��Gmail���Ĥ��ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�������Ƥ���ON(ɸ������)�פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡���Gmail���Ĥ��ɲáפ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_5.png" alt="��Gmail���Ĥ��ɲáפ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.���ɲä���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ�������ɲä���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_6.png" alt="���ɲä���פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.���괰λ</h6>
                                            <div class="box_body">
                                                <p>�������̤����ꤷ���ɥᥤ��ˡ�ON��ɸ������+Gmail��������ˡפ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_7.png" alt="SPF����������̤Υ����꡼�󥷥�å�"></p>
                                                <p>Gmail����������ɲä��뤳�Ȥǡ�SPF�쥳���ɤ˰ʲ������Ƥ��ɲä���ޤ���</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per">����</th>
                                                        <td>
                                                            <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp <b>include:_spf.google.com</b> ~all</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>���ƤˤĤ���</dt>
                                                                <dd>����include:_spf.google.com�פ��ͤ�SPF�쥳���ɤ��ɵ�����ޤ���
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">������������ˤĤ���</h4>
                                <div class="section_body">

                                    <p>
                                        SPF�����ON�ˤ����ɥᥤ����Ф��Ƥϡ������Ȥ�ľ��SPF�쥳���ɤ��Խ������������Ȥ���ǽ�Ǥ���
                                    </p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>������������ˤ����Ϥ���ޤ���SPF�쥳���ɤε�ư�ˤĤ��Ƥϡ����ݡ����оݳ��Ȥʤ�ޤ���<br>
                                                ͽ�ᤴλ���ξ塢�����ͤˤ�ư���ǧ��ԤäƤ��������褦���ꤤ�������ޤ���</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.�֥�����������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�������Ƥ���ON(ɸ������)�פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡��֥�����������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_8.png" alt="�֥�����������פ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.�쥳�������Ƥ��Խ����ֳ�ǧ���̤ؿʤ�פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�쥳�������Ƥ򤪵��ͤ����Ȥ��Խ������ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_9.png" alt="�ֳ�ǧ���̤ؿʤ�פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>

                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPF�쥳���ɤ�DNSLookUp����ξ�¤ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            ������������ˤƲ����ηٹ�ɽ�����줿��硢���Ϥ��줿SPF�쥳���ɤ�DNSLookUp�������¤�ã���Ƥ����ǽ��������ޤ���<br>
                                                            SPF��ǧ�ڤ˼��Ԥ����᡼�����������꤬ȯ�������ǽ��������ޤ��Τǡ������ͤˤ����Ϥ���ޤ���SPF�쥳���ɤ����Ƥ򤴳�ǧ����������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spf_12.png" alt="���顼��ɽ������Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.���ѹ�����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ�������ѹ�����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_10.png" alt="���ѹ�����פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.���괰λ</h6>
                                            <div class="box_body">
                                                <p>�������̤����ꤷ���ɥᥤ��ˡ�ON�ʥ�����������ˡפ�ɽ�����졢�Խ������쥳���ɤ����Ƥ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_11.png" alt="SPF����������̤Υ����꡼�󥷥�å�"></p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>SPF�쥳���ɤμ�������ͤˤĤ���</dt>
                                                    <dd>
                                                        <p>SPF�쥳���ɤ����Ϥ�������ͤϡ��������̤�Ǥ���</p>
                                                        <table class="table" style="word-break:break-all;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w30per">�쥳��������</th>
                                                                    <th>����</th>
                                                                    <th>������</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>v=spf1</td>
                                                                    <td>SPF�쥳���ɤΥС�������ɽ���ޤ��������ͤ�ɬ�ܤǡ��쥳���ɤκǽ��ɬ���ޤ��ɬ�פ�����ޤ���</td>
                                                                    <td>v=spf1</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>+a:[�ۥ���̾]</td>
                                                                    <td>�ۥ���̾��A�쥳���ɤ���Ĥ��ޤ���</td>
                                                                    <td>+a:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+mx:[�ɥᥤ��̾]</td>
                                                                    <td>�ɥᥤ��̾��MX�쥳���ɤ���Ĥ��ޤ���</td>
                                                                    <td>+mx:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+ip4:[IP���ɥ쥹]</td>
                                                                    <td>IPv4���ɥ쥹����Ĥ��ޤ���</td>
                                                                    <td>+ip4:192.168.111.11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+ip6:[IPv6���ɥ쥹]</td>
                                                                    <td>IPv6���ɥ쥹����Ĥ��ޤ���</td>
                                                                    <td>+ip6:2001:0db8:85a3:0000:0000:8a2e:0370:7334</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+include:[�ɥᥤ��̾]</td>
                                                                    <td>�����᡼�륵���ӥ���SPF�쥳���ɤ򻲾Ȥ��Ƶ��Ĥ��ޤ���<br><b>include:spf.sender.xserver.jp</b>�ϡ����ҥ᡼�륵���ӥ���SPF��������Ѥ��Ƥ��뤳�Ȥ�ɽ���ޤ���</td>
                                                                    <td>+include:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>~all</td>
                                                                    <td>���٤ƤΥ᡼����������Ĥ��ޤ���������˴ޤޤ�ʤ��������ϡ��Կ��ʥ᡼��Ȥ��ư����ޤ���</td>
                                                                    <td>~all</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">������ˤĤ���</h4>
                                <div class="section_body">

                                    <p>
                                        �������������DNS��ľ���Խ���ˡ���������ν��SPF������᤹���ϡ��������ǽ�����Ѥ���������
                                    </p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.�ֽ�����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�������Ƥ���ON(������������)�פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡��ֽ�����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_13.png" alt="�ֽ�����פ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.�ֽ��������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>���Ƥ��ǧ�����ֽ��������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_14.png" alt="�ֽ��������פ�ե����������Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.���괰λ</h6>
                                            <div class="box_body">
                                                <p>�������̤����ꤷ���ɥᥤ��ˡ�ON��ɸ������ˡפ�ɽ������Ƥ���н������λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_4.png" alt="SPF����������̤Υ����꡼�󥷥�å�"></p>
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
                                    <li><a href="#link-a">SPF����ˤĤ���</a></li>
                                    <li><a href="#link-b">SPF��������ˡ</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��SPF����פ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ���SPF����Ρ�OFF�פ򥯥�å�</a></li>
                                            <li><a href="#link-b3">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">SPF�����Gmail��SMTP�����С��Ȥ������Ѥ���ݤ�������ɲä���</a>
                                        <ol>
                                            <li><a href="#link-c1">1.��Gmail���ġפΡ�OFF�פ򥯥�å�</a></li>
                                            <li><a href="#link-c2">2.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">������������ˤĤ���</a>
                                        <ol>
                                            <li><a href="#link-d1">1.�֥�����������פ򥯥�å�</a></li>
                                            <li><a href="#link-d2">2.�쥳�������Ƥ��Խ��������ꤹ��פ򥯥�å�</a></li>
                                            <li><a href="#link-d3">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">������ˤĤ���</a>
                                        <ol>
                                            <li><a href="#link-e1">1.�ֽ�����פ򥯥�å�</a></li>
                                            <li><a href="#link-e2">2.�ֽ��������פ򥯥�å�</a></li>
                                            <li><a href="#link-e3">3.���괰λ</a></li>
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
                                        <h4 class="section_ttl">SPF����ˤĤ���</h4>
                                        <div class="section_body">
                                            <p>
                                                SPF(Sender Policy Framework)�Ȥϡ��Żҥ᡼����������ɥᥤ�󤬺��Τ���Ƥ��ʤ����򸡺����������᡼��β����󡦤ʤꤹ�ޤ����ɤ����ѤǤ���<br>
                                                �����᡼��ο����������᡼����ãΨ�θ��夬���Ԥ���ޤ���
                                            </p>
                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h5>
                                                <div class="msg_body">
                                                    <p>�ɥᥤ������Ǥ��ȼ��ɥᥤ����ɲû��ˡ�SPF�쥳���ɤ�ư���ɲä������ޤ���<br>
                                                        ���Τ��ᡢ�ȼ��ɥᥤ����Ф��Ƥ����ͤ����Ȥ�SPF������ɲä��Ƥ�������ɬ�פϤ���ޤ���</p>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">SPF��������ˡ</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1.��SPF����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�SPF����򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_1.png?date=2410" alt="SPF��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2.���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ���SPF����Ρ�OFF�פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>���ꤹ��ɥᥤ��ޤ��ϥ��֥ɥᥤ���SPF����Ρ�OFF�פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_2.png?date=2410" alt="��OFF�פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3.���괰λ</h5>
                                                    <div class="box_body">
                                                        <p>�������̤����ꤷ���ɥᥤ��ˡ�ɸ������פ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_4.png?date=2410" alt="SPF�����������"></p>
                                                        <p>SPF�����ON�ˤ��뤳�Ȥ�DNS�쥳���ɤ˰ʲ������Ƥ��ɲä���ޤ���</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20per">�ۥ���</th>
                                                                <td> �����ON�ˤ����ɥᥤ��</td>
                                                            </tr>
                                                            <tr>
                                                                <th>����</th>
                                                                <td>TXT</td>
                                                            </tr>
                                                            <tr>
                                                                <th>����</th>
                                                                <td>
                                                                    <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>���ƤˤĤ���</dt>
                                                                        <dd>����sv***.xserver.jp�פ���ʬ�ϡ������ͤ������ѤΥ����С��Υۥ���̾�Ȥʤ�ޤ���<br>
                                                                            ����example.com�פ���ʬ�ϡ������ON�ˤ����ɥᥤ��̾�Ȥʤ�ޤ���
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice mt30">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                            <div class="msg_body">
                                                                <p>SPF���꤬�����С���ȿ�Ǥ����ޤǤˡ���ʬ������������٤������礬����ޤ���</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section id="link-c" class="section">
                                        <h4 class="section_ttl">SPF�����Gmail��SMTP�����С��Ȥ������Ѥ���ݤ�������ɲä���</h4>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-c1" class="box_ttl">1.��Gmail���ġפΡ�OFF�פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�������Ƥ���ɸ������פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡���Gmail���ġפΡ�OFF�פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_5.png?date=2410" alt="��Gmail���ġפΡ�OFF�פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-c2" class="box_ttl">2.���괰λ</h5>
                                                    <div class="box_body">
                                                        <p>�������̤����ꤷ���ɥᥤ��ˡ�ɸ������+Gmail���ġפ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_7.png?date=2410" alt="SPF�����������"></p>
                                                        <p>Gmail����������ɲä��뤳�Ȥǡ�SPF�쥳���ɤ˰ʲ������Ƥ��ɲä���ޤ���</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20per">����</th>
                                                                <td>
                                                                    <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp <b>include:_spf.google.com</b> ~all</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>���ƤˤĤ���</dt>
                                                                        <dd>����include:_spf.google.com�פ��ͤ�SPF�쥳���ɤ��ɵ�����ޤ���
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section id="link-d" class="section">
                                        <h4 class="section_ttl">������������ˤĤ���</h4>
                                        <div class="section_body">
                                            <p>
                                                SPF�����ON�ˤ����ɥᥤ����Ф��Ƥϡ������Ȥ�ľ��SPF�쥳���ɤ��Խ������������Ȥ���ǽ�Ǥ���
                                            </p>
                                            <aside class="msg msg_caution">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                                <div class="msg_body">
                                                    <p>������������ˤ����Ϥ���ޤ���SPF�쥳���ɤε�ư�ˤĤ��Ƥϡ����ݡ����оݳ��Ȥʤ�ޤ���<br>
                                                        ͽ�ᤴλ���ξ塢�����ͤˤ�ư���ǧ��ԤäƤ��������褦���ꤤ�������ޤ���</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-d1" class="box_ttl">1.�֥�����������פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�������Ƥ���ɸ������פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡��֥�����������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_8.png?date=2410" alt="�֥�����������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-d2" class="box_ttl">2.�쥳�������Ƥ��Խ��������ꤹ��פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�쥳�������Ƥ򤪵��ͤ����Ȥ��Խ����������ꤹ��פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_9.png?date=2410" alt="�����ꤹ��פ򥯥�å�"></p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPF�쥳���ɤ�DNSLookUp����ξ�¤ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>
                                                                    ������������ˤƲ����ηٹ�ɽ�����줿��硢���Ϥ��줿SPF�쥳���ɤ�DNSLookUp�������¤�ã���Ƥ����ǽ��������ޤ���<br>
                                                                    SPF��ǧ�ڤ˼��Ԥ����᡼�����������꤬ȯ�������ǽ��������ޤ��Τǡ������ͤˤ����Ϥ���ޤ���SPF�쥳���ɤ����Ƥ򤴳�ǧ����������</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spf_12.png?date=2410" alt="���顼��ɽ����"></p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-d3" class="box_ttl">3.���괰λ</h5>
                                                    <div class="box_body">
                                                        <p>�������̤����ꤷ���ɥᥤ��ˡ֥�����������פ�ɽ�����졢�Խ������쥳���ɤ����Ƥ�ɽ������Ƥ�������괰λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_11.png?date=2410" alt="SPF�����������"></p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>SPF�쥳���ɤμ�������ͤˤĤ���</dt>
                                                            <dd>
                                                                <p>SPF�쥳���ɤ����Ϥ�������ͤϡ��������̤�Ǥ���</p>
                                                                <table class="table" style="word-break:break-all;">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="w30per">�쥳��������</th>
                                                                        <th>����</th>
                                                                        <th>������</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>v=spf1</td>
                                                                        <td>SPF�쥳���ɤΥС�������ɽ���ޤ��������ͤ�ɬ�ܤǡ��쥳���ɤκǽ��ɬ���ޤ��ɬ�פ�����ޤ���</td>
                                                                        <td>v=spf1</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>+a:[�ۥ���̾]</td>
                                                                        <td>�ۥ���̾��A�쥳���ɤ���Ĥ��ޤ���</td>
                                                                        <td>+a:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+mx:[�ɥᥤ��̾]</td>
                                                                        <td>�ɥᥤ��̾��MX�쥳���ɤ���Ĥ��ޤ���</td>
                                                                        <td>+mx:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+ip4:[IP���ɥ쥹]</td>
                                                                        <td>IPv4���ɥ쥹����Ĥ��ޤ���</td>
                                                                        <td>+ip4:192.168.111.11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+ip6:[IPv6���ɥ쥹]</td>
                                                                        <td>IPv6���ɥ쥹����Ĥ��ޤ���</td>
                                                                        <td>+ip6:2001:0db8:85a3:0000:0000:8a2e:0370:7334</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+include:[�ɥᥤ��̾]</td>
                                                                        <td>�����᡼�륵���ӥ���SPF�쥳���ɤ򻲾Ȥ��Ƶ��Ĥ��ޤ���<br><b>include:spf.sender.xserver.jp</b>�ϡ����ҥ᡼�륵���ӥ���SPF��������Ѥ��Ƥ��뤳�Ȥ�ɽ���ޤ���</td>
                                                                        <td>+include:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>~all</td>
                                                                        <td>���٤ƤΥ᡼����������Ĥ��ޤ���������˴ޤޤ�ʤ��������ϡ��Կ��ʥ᡼��Ȥ��ư����ޤ���</td>
                                                                        <td>~all</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section id="link-e" class="section">
                                        <h4 class="section_ttl">������ˤĤ���</h4>
                                        <div class="section_body">

                                            <p>
                                                �������������DNS��ľ���Խ���ˡ���������ν��SPF������᤹���ϡ��������ǽ�����Ѥ���������
                                            </p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-e1" class="box_ttl">1.�ֽ�����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>�������Ƥ��֥�����������פΥɥᥤ��ޤ��ϥ��֥ɥᥤ������򤷡��ֽ�����פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_13.png?date=2410" alt="�ֽ�����פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-e2" class="box_ttl">2.�ֽ��������פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p>���Ƥ��ǧ�����ֽ��������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_14.png?date=2410" alt="�ֽ��������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-e3" class="box_ttl">3.���괰λ</h5>
                                                    <div class="box_body">
                                                        <p>�������̤����ꤷ���ɥᥤ��ˡ�ɸ������פ�ɽ������Ƥ���н������λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_4.png?date=2410" alt="SPF�����������"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

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