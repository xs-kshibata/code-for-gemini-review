<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DMARC���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢����оݥɥᥤ��Τʤꤹ�ޤ��䤽��¾�������ʥ᡼������������¤Ǥ����DMARC����׵�ǽ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">DMARC����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DMARC����ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">DMARC�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.��DMARC����פ�����</a></li>
                                            <li><a href="#link-previous-b02">2.�ƹ��ܤ��������Ƥ����򤹤�</a></li>
                                            <li><a href="#link-previous-b03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">�᡼���������ˡ�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DMARC����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>
                                        ��DMARC�פȤϡ������ɥᥤ��ǧ�ڤΤ����SPF��DKIM��ǧ�ڤ����Ԥ��������б�������᤿��Τǡ�
                                        �᡼��μ�����¦�ˡ�ǧ�ڤ˼��Ԥ����᡼����б���ˡ����ꤹ�뤳�Ȥ�����ޤ���<br>
                                        DMARC��������Ѥ��뤳�Ȥǡ��оݥɥᥤ��Τʤꤹ�ޤ��䤽��¾�������ʥ᡼������������¤��뤳�Ȥ��Ǥ��ޤ���<br>
                                        <br>
                                        ������ε�ǽ�Ǥϰʲ�������¦DMARC�����Ԥ����Ȥ��Ǥ��ޤ���<br>
                                        ������¦�ݥꥷ������<br>
                                        ��ǧ�ڷ�����Υ�ݡ��ȼ�������
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_mail_dmarc_4.png" alt="��̳��DMARC���׿�"></p>
                                    <p class="note">��ŵ����̳�� "����¦�ˤ����������ɥᥤ��ǧ�ڵ���Ƴ���˴ؤ���ˡŪ��α����"(<a href="https://www.soumu.go.jp/main_content/000499986.pdf" target="_blank" rel="nofollow">https://www.soumu.go.jp/main_content/000499986.pdf</a><i class="ico ico_new-window color-gray"></i>)��ù����ƺ�����</p>
                                </div>

                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>����¦DMARC����ˤĤ���</dt>
                                    <dd>
                                        <p>����¦DMARC����ˤĤ��Ƥ�<a href="../manual/man_mail_spam_setting.php#link-previous-a05">���ǥ᡼��ե��륿����</a>��ꤴ��ǧ���������ޤ���</p>
                                    </dd>
                                </dl>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DMARC�����������ˡ</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. ��DMARC����פ�����</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�DMARC��������򤷤ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_1.png" alt="DMARC��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. �ƹ��ܤ��������Ƥ����򤹤�</h6>
                                            <div class="box_body">
                                                <p>�ƹ��ܤ��������Ƥ����ꤷ�������ꤹ��פ򥯥�å����ޤ���</p>

                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_2.png" alt="�ƹ��ܤ��������Ƥ����򤹤�"></p>



                                                <!-- �ƹ��ܤ����� -->
                                                <!-- DMARC�ݥꥷ�������� -->
                                                <dl class="dl">
                                                    <!-- �ƹ��ܤ����� -->
                                                    <!-- DMARC�ݥꥷ�������� -->
                                                    <dt><i class="ico ico_square-fill"></i>DMARC�ݥꥷ��</dt>
                                                    <dd>
                                                        <p class="mb0">
                                                            �᡼��κ��пͤȤ����оݥɥᥤ���軰�Ԥ����Ѥ��줿���ˡ�������¦���б���ˡ����ꤹ�뤳�Ȥ�����ޤ���<br>
                                                            ���᡼��μ���¦��DMARC��������ˤ�äƤϡ����ꤵ�줿�ݥꥷ���˽����ʤ���ǽ��������ޤ���
                                                        </p>
                                                    </dd>

                                                    <table class="table table_use-caption">
                                                        <caption>DMARC�ݥꥷ���ι�������</caption>
                                                        <tbody>
                                                        <tr>
                                                            <th class="w30per">���⤷�ʤ�</th>
                                                            <td>
                                                                <p>�ʤꤹ�ޤ��ʤɤΥ᡼�븡�ξ����ˤ�����餺���̾��̤�᡼�����������褦�˻ؼ����ޤ���</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>���ǥ᡼��Ȥ�����������</th>
                                                            <td>�ʤꤹ�ޤ��ʤɤΥ᡼����Τ����ݡ�������ˤ����ǥ᡼��Ȥ��ư����褦�˻ؼ����ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>�᡼����������ʤ�</th>
                                                            <td>�ʤꤹ�ޤ��ʤɤΥ᡼����Τ����ݡ�������ˤƼ������ʤ��褦�˻ؼ����ޤ���</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                DMARC�ݥꥷ��������ʳ�Ū��Ƴ����侩���ޤ��� <br>
                                                                DMARC�ݥꥷ������򳫻Ϥ���ݤϡֲ��⤷�ʤ��פ����򤷡���ݡ���������ON�פˤ������Υ᡼�륢�ɥ쥹����ꤷ�Ƥ��������� ���դ��줿��ݡ��Ȥ�ǧ�����������Կ������Τ����Τǡ��������Ƥ��Ȥ��ʳ�Ū�ˡ����ǥ᡼��Ȥ�����������ס��ǽ�Ū�ˡ֥᡼����������ʤ��פ��ѹ����Ƥ���������
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dl>


                                                <dl class="dl">
                                                    <!-- ��ݡ��������� -->
                                                    <dt><i class="ico ico_square-fill"></i>��ݡ�������������</dt>
                                                    <dd>
                                                        <p class="mb0">
                                                            �᡼��μ�����¦�ˤʤꤹ�ޤ��᡼�������Ϥ���ǧ�ڤ����Ԥ������Ȥ����Τ����DMARC��ݡ��ȡפ������뤳�Ȥ�����ޤ���<br>
                                                            ǧ�ڤ�����������ʥ᡼��Υѥ�������İ����뤳�Ȥ��Ǥ����������ƥ��к��˳��Ѥ��뤳�Ȥ��Ǥ��ޤ���
                                                        </p>
                                                    </dd>

                                                    <!-- ��ݡ������������� -->
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                ��ݡ���������Υ᡼�륢�ɥ쥹��DNS�쥳���ɤ˵��ܤ���뤿�ᡢ��������λ��Ȥ���ǽ�Ȥʤ�ޤ���
                                                                �᡼�륢�ɥ쥹�ϳ������黲�Ȥ���Ƥ�����ʤ���Τ����ꤷ�Ƥ���������
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. ���괰λ</h6>
                                            <div class="box_body">
                                                <p>�ɲø塢��DMARC����פ���������Ƥγ�ǧ����ǽ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_3.png" alt="���괰λ"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>

                        </div>
                        <!-- /��ѥͥ� -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">DMARC����ˤĤ���</a></li>
                                    <li><a href="#link-b">DMARC�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-b1">1.��DMARC����פ򥯥�å�</a></li>
                                            <li><a href="#link-b2">2.�ƹ��ܤ��������Ƥ����򤹤�</a></li>
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
                                        <h4 class="section_ttl">DMARC����ˤĤ���</h4>
                                        <div class="section_body mb40">
                                            <p>
                                                ��DMARC�פȤϡ������ɥᥤ��ǧ�ڤΤ����SPF��DKIM��ǧ�ڤ����Ԥ��������б�������᤿��Τǡ�
                                                �᡼��μ�����¦�ˡ�ǧ�ڤ˼��Ԥ����᡼����б���ˡ����ꤹ�뤳�Ȥ�����ޤ���<br>
                                                DMARC��������Ѥ��뤳�Ȥǡ��оݥɥᥤ��Τʤꤹ�ޤ��䤽��¾�������ʥ᡼������������¤��뤳�Ȥ��Ǥ��ޤ���<br>
                                                <br>
                                                ������ε�ǽ�Ǥϰʲ�������¦DMARC�����Ԥ����Ȥ��Ǥ��ޤ���<br>
                                                ������¦�ݥꥷ������<br>
                                                ��ǧ�ڷ�����Υ�ݡ��ȼ�������
                                            </p>
                                            <p><img class="img" src="../img/manual/man_mail_dmarc_4.png?date=2410" alt="��̳��DMARC���׿�"></p>
                                            <p class="note">��ŵ����̳�� "����¦�ˤ����������ɥᥤ��ǧ�ڵ���Ƴ���˴ؤ���ˡŪ��α����"(<a href="https://www.soumu.go.jp/main_content/000499986.pdf" target="_blank" rel="nofollow">https://www.soumu.go.jp/main_content/000499986.pdf</a><i class="ico ico_new-window"></i>)��ù����ƺ�����</p>
                                        </div>

                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>����¦DMARC����ˤĤ���</dt>
                                            <dd>
                                                <p>����¦DMARC����ˤĤ��Ƥ�<a href="../manual/man_mail_spam_setting.php#link-a4">���ǥ᡼��ե��륿����</a>��ꤴ��ǧ���������ޤ���</p>
                                            </dd>
                                        </dl>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">DMARC�����������ˡ</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. ��DMARC����פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡�DMARC����򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dmarc_1.png?date=2410" alt="DMARC��������򤷤Ƥ��륹���꡼�󥷥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. �ƹ��ܤ��������Ƥ����򤹤�</h5>
                                                    <div class="box_body">
                                                        <p>����򤷤����ɥᥤ��α�ü�ˤ����Խ��ܥ���򥯥�å����ޤ����ƹ��ܤ����ꤷ�������ꤹ��פ򥯥�å���������꤬ȿ�Ǥ���ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dmarc_2.png?date=2410" alt="DMARC����γƹ��ܤ��������"></p>

                                                        <!-- �ƹ��ܤ����� -->
                                                        <!-- DMARC�ݥꥷ�������� -->
                                                        <dl class="dl">
                                                            <!-- �ƹ��ܤ����� -->
                                                            <!-- DMARC�ݥꥷ�������� -->
                                                            <dt><i class="ico ico_square-fill"></i>DMARC�ݥꥷ��</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    �᡼��κ��пͤȤ����оݥɥᥤ���軰�Ԥ����Ѥ��줿���ˡ�������¦���б���ˡ����ꤹ�뤳�Ȥ�����ޤ���<br>
                                                                    ���᡼��μ���¦��DMARC��������ˤ�äƤϡ����ꤵ�줿�ݥꥷ���˽����ʤ���ǽ��������ޤ���
                                                                </p>
                                                            </dd>

                                                            <table class="table table__use-caption">
                                                                <caption>DMARC�ݥꥷ���ι�������</caption>
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w30per">���⤷�ʤ�</th>
                                                                    <td>
                                                                        <p>�ʤꤹ�ޤ��ʤɤΥ᡼�븡�ξ����ˤ�����餺���̾��̤�᡼�����������褦�˻ؼ����ޤ���</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>���ǥ᡼��Ȥ�����������</th>
                                                                    <td>�ʤꤹ�ޤ��ʤɤΥ᡼����Τ����ݡ�������ˤ����ǥ᡼��Ȥ��ư����褦�˻ؼ����ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�᡼����������ʤ�</th>
                                                                    <td>�ʤꤹ�ޤ��ʤɤΥ᡼����Τ����ݡ�������ˤƼ������ʤ��褦�˻ؼ����ޤ���</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <aside class="msg msg_notice">
                                                                <div class="msg_body">
                                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                                                    <p>
                                                                        DMARC�ݥꥷ��������ʳ�Ū��Ƴ����侩���ޤ��� <br>
                                                                        DMARC�ݥꥷ������򳫻Ϥ���ݤϡֲ��⤷�ʤ��פ����򤷡���ݡ���������ON�פˤ������Υ᡼�륢�ɥ쥹����ꤷ�Ƥ��������� ���դ��줿��ݡ��Ȥ�ǧ�����������Կ������Τ����Τǡ��������Ƥ��Ȥ��ʳ�Ū�ˡ����ǥ᡼��Ȥ�����������ס��ǽ�Ū�ˡ֥᡼����������ʤ��פ��ѹ����Ƥ���������
                                                                    </p>
                                                                </div>
                                                            </aside>
                                                        </dl>


                                                        <dl class="dl">
                                                            <!-- ��ݡ��������� -->
                                                            <dt><i class="ico ico_square-fill"></i>��ݡ�������������</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    �᡼��μ�����¦�ˤʤꤹ�ޤ��᡼�������Ϥ���ǧ�ڤ����Ԥ������Ȥ����Τ����DMARC��ݡ��ȡפ������뤳�Ȥ�����ޤ���<br>
                                                                    ǧ�ڤ�����������ʥ᡼��Υѥ�������İ����뤳�Ȥ��Ǥ����������ƥ��к��˳��Ѥ��뤳�Ȥ��Ǥ��ޤ���
                                                                </p>
                                                            </dd>

                                                            <!-- ��ݡ������������� -->
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                                                <div class="msg_body">
                                                                    <p>
                                                                        ��ݡ���������Υ᡼�륢�ɥ쥹��DNS�쥳���ɤ˵��ܤ���뤿�ᡢ��������λ��Ȥ���ǽ�Ȥʤ�ޤ���
                                                                        �᡼�륢�ɥ쥹�ϳ������黲�Ȥ���Ƥ�����ʤ���Τ����ꤷ�Ƥ���������
                                                                    </p>
                                                                </div>
                                                            </aside>
                                                        </dl>
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