<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼�륢������Ȥΰ����Ͽ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ뤫��ʣ���Υ᡼�륢������ȡʥ᡼�륢�ɥ쥹�ˤ���٤��ɲä���֥᡼�륢������Ȱ����Ͽ�׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼�륢������Ȥΰ����Ͽ</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�᡼�륢������Ȥΰ����Ͽ�ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">�᡼�륢������Ȥΰ����Ͽ��ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">�ƥ��������Ϥˤ������Ͽ</a></li>
                                            <li><a href="#link-previous-b02">CSV����ݡ��Ȥˤ������Ͽ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼�륢������Ȥΰ����Ͽ�ˤĤ���</h4>
                                <p>�����Υ᡼�륢������Ȥ�����Ͽ���뤳�Ȥ��Ǥ��ޤ���<br>
                                �����С��ѥͥ�ˤƥƥ��������ϡ��ޤ���CSV����ݡ��Ȥˤ����Ͽ����ǽ�Ǥ���</p>
                                <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥΰ����Ͽ�ϹԤ��ޤ���</p>

                                <div class="msg msg_notice">
                                    <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��ջ���</h4>
                                    <div class="msg_body">
                                        <ul class="ul font-m">
                                            <li>�᡼�륢�ɥ쥹�Υ桼����̾(@���������ʬ)��Ⱦ��64ʸ����������Ϥ��Ƥ���������</li>
                                            <li>Ⱦ�ѱѾ�ʸ����Ⱦ�ѿ�����¾�ˡ�-�ס�_�ס�.�פ����ѤǤ��ޤ���</li>
                                            <li>��.�פ�2�İʾ��Ϣ³����Ƭ��@�ޡ�����ľ���Ǥλ��Ѥ��Ǥ��ޤ���</li>
                                            <li>��,(�����)�פǶ��ڤ뤳�Ȥˤ��ѥ���ɡ�����(MBñ��)������Ǥ�դΤ�Τ����ꤹ�뤳�Ȥ��ǽ�Ǥ���<br>
                                                ���admin@aaasdf.com,password,1000,��������</li>
                                            <li>�ֿ����Τߡפʤɤο�¬����䤹���ѥ���ɤ���Ͽ�Ǥ��ޤ��󡣱ѻ��䵭����Ȥ߹�碌���ѥ���ɤ�Ⱦ��8ʸ���ʾ塢45ʸ���ʲ��ǻ��ꤷ�Ƥ���������</li>
                                            <li>Ⱦ�ѱѿ����ȼ��ε��椬���ѤǤ��ޤ���<br>
                                                ! # $ % = ~ ^ | : _ [ ] { } . + - * /</li>
                                            <li>���̤�Ⱦ�ѿ�����1��20000�ˤ����Ϥ��Ƥ������������Ϥ��ʤ�����2,000MB�����ꤵ��ޤ���</li>
                                            <li>��������500ʸ���ޤ����ϲ�ǽ�Ǥ���</li>
                                            <li>CSV����ݡ��Ȥˤ����Ͽ���ξ�¤�100��Ǥ���</li>
                                        </ul>
                                    </div>
                                </div>

                                <h4 class="section_ttl" id="link-previous-b">�᡼�륢������Ȥΰ����Ͽ��ˡ</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 id="link-previous-b01" class="block_ttl">�ƥ��������Ϥˤ������Ͽ</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li>
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ�塢�֥᡼�륢�����������פ����򤷤ޤ���</p>
                                                </li>
                                                <li><p>�ְ����Ͽ�פΥ��֤򥯥�å�������Ͽ��ˡ�ǡ֥ƥ��������ϡפ����򤷤ޤ���</p></li>
                                                <li>
                                                    <p>�ƥ����ȥ��ꥢ���1�Ԥ�1�᡼�륢�ɥ쥹�������Ϥ����ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ������٤˺���100��ޤ���Ͽ����ǽ�Ǥ���</p>
                                                    <div class="border border_blue">
                                                        (������)<br>
                                                        admin@example.com<br>
                                                        info@example.com
                                                    </div>
                                                    <p>�᡼��ѥ���ɤϼ�ư�����Υ������ʸ�������̤�2000MB�������ȤϾ�ά���줿���֤����ꤵ��ޤ���<br></p>

                                                    <p>�᡼��ѥ���ɡ����̡������Ȥʤɳƹ��ܤ���̤����ꤷ�������ϡ�,(�����)�פǶ��ڤä������ͤ��ɲ����Ϥ��뤳�Ȥǡ��ƥ��ɥ쥹���Ȥ�����Ǥ��ޤ���<br></p>

                                                    <div class="border border_blue">
                                                        <p>[�᡼�륢�ɥ쥹],[�᡼��ѥ����],[����(MB)],[������]</p>
                                                        <p class="mb0">(������)<br>
                                                            admin@example.com,password,1000,��������<br>
                                                            info@example.com,password,1000,����ե��᡼�������</p>
                                                    </div>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_bulkadd_4.png" alt="�ƥ��������Ϥ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>

                                                    <section class="msg">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>�֥ɥᥤ��ǧ�ڡײ��̤�ɽ���������</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                �֥ɥᥤ��ǧ�ڡײ��̤�ɽ��������硢���̤ΰ���˽����ɥᥤ��ǧ�ڤ�ԤäƤ���������
                                                                �ܺ٤ϡ�<a href="./man_domain_authenticate.php">�ɥᥤ��ǧ��</a>�פ򤴻��Ȥ���������
                                                            </p>
                                                        </div>
                                                    </section>
                                                </li>
                                                <li><p>�������Ƥ��ǧ����ɲä���פ򥯥�å�����ȡ������Ͽ�ϴ�λ�Ǥ���</p></li>
                                            </ol>
                                        </div>
                                    </section>
                                </div>

                                <div class="section_body">
                                    <section class="block">
                                        <h5 id="link-previous-b02" class="block_ttl">CSV����ݡ��Ȥˤ������Ͽ</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li>
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ�塢�֥᡼�륢�����������פ����򤷤ޤ���</p>
                                                </li>
                                                <li>
                                                    <p>�ְ����Ͽ�פΥ��֤򥯥�å�������Ͽ��ˡ�ǡ�CSV����ݡ��ȡפ����򤷤ޤ���</p>
                                                      <p class="note"> ���֥���ץ�CSV��������ɡפ򥯥�å������CSV�ե�����Υ���ץ���������ɤǤ��ޤ���</p>
                                                </li>
                                                <li>
                                                    <p>���åץ��ɥե������ꥤ��ݡ��Ȥ���CSV�ե���������򤷡��ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ������٤˺���100��ޤ���Ͽ����ǽ�Ǥ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_bulkadd_5.png" alt="CSV�ե���������򤷤Ƥ��륹���꡼�󥷥�å�"></p>

                                                    <p>�ʤ���CSV�ե�����ν񼰤ϰʲ����̤�Ǥ���</p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th class="w30per">�᡼�륢�������</th>
                                                            <td>
                                                                �᡼�륢������Ȥ����Ϥ��ޤ���<br>
                                                                (��)��user@example.com
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">�ѥ����</th>
                                                            <td>
                                                                �ѥ���ɤ����Ϥ��ޤ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">��������</th>
                                                            <td>
                                                                �����Ͽ������ѹ��Ǥϻ��Ѥ��ޤ���<br>
                                                                ���ͤ����Ϥ��ƥ��åץ��ɤ��Ƥ�ȿ�ǤϤ���ޤ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">��������</th>
                                                            <td>
                                                                ���̤����Ϥ��ޤ���<br>
                                                                ñ�̤ϡ�MB�פǤ���<br>
                                                                ���Ϥ��ʤ�����2,000MB�����ꤵ��ޤ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">���</th>
                                                            <td>
                                                                �������Ϥ��ޤ���
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">ž���襢�ɥ쥹</th>
                                                            <td>
                                                                �����᡼���ž���������ž���襢�ɥ쥹�����Ϥ��Ƥ���������<br>
                                                                ʣ���Υ᡼�륢�ɥ쥹��ž��������ϡ�|�פǶ��ڤä����Ϥ��Ƥ���������<br>
                                                                (��)��user1@example.com|user2@example.com|user3@example.com
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">ž����Υ᡼����</th>
                                                            <td>
                                                                ž����˥����С�����᡼��������뤫�ɤ��������Ϥ��ޤ���<br>
                                                                ���������ϡ�1�ס�������ʤ����ϡ�0�פ����Ϥ��Ƥ���������<br>
                                                                ��ž���襢�ɥ쥹�פ����ꤵ��Ƥ��ʤ����֤ǡ�ž����˥᡼�������������ˤ�����硢�᡼�뤬�ɤ��ˤ�ž�����줺�˾ü����ޤ��Τǡ�����դ���������
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>

                                                </li>
                                                <li><p>�������Ƥ��ǧ����ɲä���פ򥯥�å�����ȡ������Ͽ�ϴ�λ�Ǥ���</p></li>
                                            </ol>
                                        </div>
                                    </section>
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
                                    <li><a href="#link-a">�᡼�륢������Ȥΰ����Ͽ�ˤĤ���</a></li>
                                    <li><a href="#link-b">�᡼�륢������Ȥΰ����Ͽ��ˡ</a>
                                        <ol>
                                            <li><a href="#link-b1">�ƥ��������Ϥˤ������Ͽ</a></li>
                                            <li><a href="#link-b2">CSV����ݡ��Ȥˤ������Ͽ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl mt30">�᡼�륢������Ȥΰ����Ͽ�ˤĤ���</h4>
                                        <div class="section_body">
                                            <p>�����Υ᡼�륢������Ȥ�����Ͽ���뤳�Ȥ��Ǥ��ޤ���<br>
                                                �����С��ѥͥ�ˤƥƥ��������ϡ��ޤ���CSV����ݡ��Ȥˤ����Ͽ����ǽ�Ǥ���</p>
                                            <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥΰ����Ͽ�ϹԤ��ޤ���</p>
                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>��ջ���</h5>
                                                <div class="msg_body">
                                                    <ul class="ul font-m">
                                                        <li>�᡼�륢�ɥ쥹�Υ桼����̾(@���������ʬ)��Ⱦ��64ʸ����������Ϥ��Ƥ���������</li>
                                                        <li>Ⱦ�ѱѾ�ʸ����Ⱦ�ѿ�����¾�ˡ�-�ס�_�ס�.�פ����ѤǤ��ޤ���</li>
                                                        <li>��.�פ�2�İʾ��Ϣ³����Ƭ��@�ޡ�����ľ���Ǥλ��Ѥ��Ǥ��ޤ���</li>
                                                        <li>��,(�����)�פǶ��ڤ뤳�Ȥˤ��ѥ���ɡ�����(MBñ��)������Ǥ�դΤ�Τ����ꤹ�뤳�Ȥ��ǽ�Ǥ���<br>
                                                            ���admin@example.com,password,1000,��������</li>
                                                        <li>�ֿ����Τߡפʤɤο�¬����䤹���ѥ���ɤ���Ͽ�Ǥ��ޤ��󡣱ѻ��䵭����Ȥ߹�碌���ѥ���ɤ�Ⱦ��8ʸ���ʾ塢32ʸ���ʲ��ǻ��ꤷ�Ƥ���������</li>
                                                        <li>Ⱦ�ѱѿ����ȼ��ε��椬���ѤǤ��ޤ���<br>
                                                            ! # $ % = ~ ^ | : _ [ ] { } . + - * /</li>
                                                        <li>���̤�Ⱦ�ѿ�����1��20000�ˤ����Ϥ��Ƥ������������Ϥ��ʤ�����2,000MB�����ꤵ��ޤ���</li>
                                                        <li>��������500ʸ���ޤ����ϲ�ǽ�Ǥ���</li>
                                                        <li>CSV����ݡ��Ȥˤ����Ͽ���ξ�¤�100��Ǥ���</li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl mt30">�᡼�륢������Ȥΰ����Ͽ��ˡ</h4>
                                        <div class="section_body">

                                            <div class="serial-box">
                                                <h5 id="link-b1" class="block_ttl">�ƥ��������Ϥˤ������Ͽ</h5>
                                                <ol class="ol">
                                                    <li>
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥᡼�륢�����������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_1.png?date=2410" alt="�᡼�륢���������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </li>
                                                    <li>
                                                        <p>�֥᡼�륢������Ȥ��ɲáפ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_2.png?date=2410" alt="�֥᡼�륢������Ȥ��ɲáפ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </li>
                                                    <li>
                                                        <p>[��Ͽ����]�ǡְ��פ����򤷡�[�᡼�륢�ɥ쥹]�Υƥ����ȥ��ꥢ���1�Ԥ�1�᡼�륢�ɥ쥹�������Ϥ������ɲä���פ򥯥�å�����Ȱ����Ͽ��λ�Ǥ���<br>
                                                            ���٤˺���100��ޤ���Ͽ����ǽ�Ǥ���</p>

                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_4.png?date=2410" alt="�ƥ��������Ϥ����򤷤Ƥ��륹���꡼�󥷥�å�"></p>

                                                        <div class="border border_blue">
                                                            (������)<br>
                                                            admin@example.com<br>
                                                            info@example.com
                                                        </div>

                                                        <p>�᡼��ѥ���ɤϼ�ư�����Υ������ʸ�������̤�2,000MB�������ȤϾ�ά���줿���֤����ꤵ��ޤ���<br></p>

                                                        <p>�᡼��ѥ���ɡ����̡������Ȥʤɳƹ��ܤ���̤����ꤷ�������ϡ�,(�����)�פǶ��ڤä������ͤ��ɲ����Ϥ��뤳�Ȥǡ��ƥ��ɥ쥹���Ȥ�����Ǥ��ޤ���<br></p>

                                                        <div class="border border_blue">
                                                            <p>[�᡼�륢�ɥ쥹],[�᡼��ѥ����],[����(MB)],[������]</p>
                                                            <p class="mb0">(������)<br>
                                                                admin@example.com,password,1000,��������<br>
                                                                info@example.com,password,1000,����ե��᡼�������</p>
                                                        </div>

                                                        <section class="msg">
                                                            <h4 class="msg_ttl"><i class="ico ico_circle"></i>�֥ɥᥤ��ǧ�ڡײ��̤�ɽ���������</h4>
                                                            <div class="msg_body">
                                                                <p>
                                                                    �֥ɥᥤ��ǧ�ڡײ��̤�ɽ��������硢���̤ΰ���˽����ɥᥤ��ǧ�ڤ�ԤäƤ���������
                                                                    �ܺ٤ϡ�<a href="./man_domain_authenticate.php">�ɥᥤ��ǧ��</a>�פ򤴻��Ȥ���������
                                                                </p>
                                                            </div>
                                                        </section>

                                                    </li>
                                                </ol>
                                            </div>
                                            <!-- /.serial-box -->

                                            <div class="serial-box">
                                                <h5 id="link-b2" class="block_ttl">CSV����ݡ��Ȥˤ������Ͽ</h5>
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ�塢�֥᡼�륢�����������פ����򤷤ޤ���</p>
                                                        </li>
                                                        <li>
                                                            <p>�����оݥɥᥤ��Υ᡼�륢������Ȱ�����ɽ������ޤ����ڡ��������Ρ�CSV������פ򥯥�å����ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_mail_account_csv_1.png?date=2410" alt="�ְ�����פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                                        </li>
                                                        <li>
                                                            <p>��CSV����ɲáפ����򤷡����åץ��ɥե�����Ρ֥ե����������פ򥯥�å���������ɲä���CSV�ե���������򤷤ޤ���<br>
                                                                ����塢�ְ���ɲä���פ򥯥�å����ޤ��� ���٤˺���100��ޤ���Ͽ����ǽ�Ǥ���</p>
                                                            <p class="note"> ���֥���ץ�CSV��������ɡפ򥯥�å������CSV�ե�����Υ���ץ���������ɤǤ��ޤ���</p>
                                                            <p><img class="img" src="../img/manual/man_mail_bulkadd_5.png?date=2410" alt="CSV�ե���������򤷤Ƥ��륹���꡼�󥷥�å�"></p>

                                                            <p>�ʤ���CSV�ե�����ν񼰤ϰʲ����̤�Ǥ���</p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w30per">�᡼�륢�������</th>
                                                                    <td>
                                                                        �᡼�륢������Ȥ����Ϥ��ޤ���<br>
                                                                        (��)��user@example.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">�ѥ����</th>
                                                                    <td>
                                                                        �ѥ���ɤ����Ϥ��ޤ���
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">��������</th>
                                                                    <td>
                                                                        �����Ͽ������ѹ��Ǥϻ��Ѥ��ޤ���<br>
                                                                        ���ͤ����Ϥ��ƥ��åץ��ɤ��Ƥ�ȿ�ǤϤ���ޤ���
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">��������</th>
                                                                    <td>
                                                                        ���̤����Ϥ��ޤ���<br>
                                                                        ñ�̤ϡ�MB�פǤ���<br>
                                                                        ���Ϥ��ʤ�����2,000MB�����ꤵ��ޤ���
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">���</th>
                                                                    <td>
                                                                        �������Ϥ��ޤ���
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">ž���襢�ɥ쥹</th>
                                                                    <td>
                                                                        �����᡼���ž���������ž���襢�ɥ쥹�����Ϥ��Ƥ���������<br>
                                                                        ʣ���Υ᡼�륢�ɥ쥹��ž��������ϡ�|�פǶ��ڤä����Ϥ��Ƥ���������<br>
                                                                        (��)��user1@example.com|user2@example.com|user3@example.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w30per">ž����Υ᡼����</th>
                                                                    <td>
                                                                        ž����˥����С�����᡼��������뤫�ɤ��������Ϥ��ޤ���<br>
                                                                        ���������ϡ�1�ס�������ʤ����ϡ�0�פ����Ϥ��Ƥ���������<br>
                                                                        ��ž���襢�ɥ쥹�פ����ꤵ��Ƥ��ʤ����֤ǡ�ž����˥᡼�������������ˤ�����硢�᡼�뤬�ɤ��ˤ�ž�����줺�˾ü����ޤ��Τǡ�����դ���������
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </li>
                                                    <li><p>�������Ƥ��ǧ����ɲä���פ򥯥�å�����ȡ������Ͽ�ϴ�λ�Ǥ���</p></li>
                                                </ol>
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