<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼�륢������Ȥΰ���ѹ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å᡼�륢������Ȥ�����ѹ��Ǥ���֥᡼�륢������Ȥΰ���ѹ��׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼�륢������Ȥΰ���ѹ�</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�᡼�륢������Ȥΰ���ѹ��ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">�᡼�륢������Ȥΰ���ѹ���ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�᡼�륢����������������</a></li>
                                            <li><a href="#link-previous-b02">2.�ְ���ѹ��פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.���åץ��ɤ���ե����������</a></li>
                                            <li><a href="#link-previous-b04">4.���åץ��ɴ�λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼�륢������Ȥΰ���ѹ��ˤĤ���</h4>
                                <p>��¸�Υ᡼�륢������Ȥ�CSV�ե�����ˤư���ѹ��Ǥ��ޤ���</p>
                                <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥΰ���ѹ��ϹԤ��ޤ���</p>

                                <section class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>�᡼�륢������Ȥΰ������̤��CSV�ե�����Υ�������ɤ���ǽ�Ǥ�</h6>
                                    <div class="msg_body">
                                        <p>
                                            �����оݥɥᥤ��Υ᡼�륢������Ȱ������̤ˤơ�CSV���ϡפ򥯥�å�����ȡ�CSV�ե�������������ɤǤ��ޤ���
                                        </p>
                                        <p><img class="img" src="../img/manual/previous/man_mail_account_csv_1.png" alt="��CSV���ϡפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                        <p>�ܺ٤ϡ�<a href="man_mail_account_csv.php">�᡼�륢������Ȥ�CSV���������</a>�פ򤴳�ǧ����������</p>
                                    </div>
                                </section>

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
                                            �ѥ���ɤ����Ϥ��ޤ���<br>
                                            ����ξ��ϥѥ���ɤ��ѹ�����ޤ���
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
                                            ñ�̤ϡ�MB�פǤ���
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
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�᡼�륢������Ȥΰ���ѹ���ˡ</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.�᡼�륢����������������</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡����ߤ������оݥɥᥤ����ǧ�塢�֥᡼�륢�����������פ����򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="�᡼�륢���������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.�ְ���ѹ��פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�����оݥɥᥤ��Υ᡼�륢������Ȱ�����ɽ������ޤ����ڡ��������Ρְ���ѹ��פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_bulk_change_1.png" alt="�ְ���ѹ��פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.���åץ��ɤ���ե����������</h6>
                                            <div class="box_body">
                                                <p>���åץ��ɥե�����Ρ֥ե����������פ򥯥�å���������ѹ�����CSV�ե���������򤷤ޤ���<br>
                                                ����塢�ֳ�ǧ���̤ؿʤ�פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_bulk_change_2.png" alt="�ե���������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.���åץ��ɴ�λ</h6>
                                            <div class="box_body">
                                                <p>����˥��åץ��ɤ��Ǥ����顢����ѹ���λ�Ǥ���</p>
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
                                    <li><a href="#link-a">�᡼�륢������Ȥΰ���ѹ��ˤĤ���</a></li>
                                    <li><a href="#link-b">�᡼�륢������Ȥΰ���ѹ���ˡ</a>
                                        <ol>
                                            <li><a href="#link-b01">1.�᡼�륢����������������</a></li>
                                            <li><a href="#link-b02">2.��CSV������פ򥯥�å�</a></li>
                                            <li><a href="#link-b03">3.���åץ��ɤ���ե����������</a></li>
                                            <li><a href="#link-b04">4.���åץ��ɴ�λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">�᡼�륢������Ȥΰ���ѹ��ˤĤ���</h4>
                                <p>��¸�Υ᡼�륢������Ȥ�CSV�ե�����ˤư���ѹ��Ǥ��ޤ���</p>
                                <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥΰ���ѹ��ϹԤ��ޤ���</p>

                                <section class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>�᡼�륢������Ȥΰ������̤��CSV�ե�����Υ�������ɤ���ǽ�Ǥ�</h6>
                                    <div class="msg_body">
                                        <p>�᡼�륢������Ȱ������̤ˤơ�CSV������ > CSV��������ɡפ򥯥�å�����ȡ�CSV�ե�������������ɤǤ��ޤ���</p>
                                        <p><img class="img" src="../img/manual/man_mail_account_csv_2.png?date=2410" alt="��CSV��������ɡפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                                        <p>�ܺ٤ϡ�<a href="man_mail_account_csv.php">�᡼�륢������Ȥ�CSV���������</a>�פ򤴳�ǧ����������</p>
                                    </div>
                                </section>

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
                                            �ѥ���ɤ����Ϥ��ޤ���<br>
                                            ����ξ��ϥѥ���ɤ��ѹ�����ޤ���
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
                                            ñ�̤ϡ�MB�פǤ���
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
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">�᡼�륢������Ȥΰ���ѹ���ˡ</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.�᡼�륢����������������</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥᡼�륢�����������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_mail_add_1.png?date=2410" alt="�᡼�륢���������������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.��CSV������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�ڡ��������Ρ�CSV������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_mail_account_csv_1.png?date=2410" alt="��CSV������פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.���åץ��ɤ���ե����������</h6>
                                            <div class="box_body">
                                                <p>��CSV����Խ��פ����򤷡����åץ��ɥե�����Ρ֥ե����������פ򥯥�å���������Խ�����CSV�ե���������򤷤ޤ���<br>
                                                    ����塢�ְ���Խ�����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_mail_bulk_change_1.png" alt="�ե���������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.���åץ��ɴ�λ</h6>
                                            <div class="box_body">
                                                <p>����˥��åץ��ɤ��Ǥ����顢����Խ���λ�Ǥ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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