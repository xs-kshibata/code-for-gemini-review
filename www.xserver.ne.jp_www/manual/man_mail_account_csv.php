<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼�륢������Ȥ�CSV��������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С��ѥͥ뤫�����᡼�륢������Ȥ�CSV�����Ϥ����֥᡼�륢������Ȥ�CSV��������ɡ׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�᡼�륢������Ȥ�CSV���������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�᡼�륢������Ȥ�CSV��������ɤˤĤ���</a></li>
                                    <li><a href="#link-previous-b">�᡼�륢������Ȥ�CSV�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�᡼�륢����������������</a></li>
                                            <li><a href="#link-previous-b02">2.��CSV���ϡפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b03">3.CSV��������ɴ�λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼�륢������Ȥ�CSV��������ɤˤĤ���</h4>
                                <p>�����С��ѥͥ��ꡢ�᡼�륢������Ȥ�CSV�ե�������������ɤ��뤳�Ȥ��Ǥ��ޤ���<br>
                                    �����оݥɥᥤ������ƤΥ᡼�륢������Ȥ����Ϥ��졢��������ɤ���CSV�ե�����ϡ�<a href="man_mail_bulk_change.php">�᡼�륢������Ȥΰ���ѹ�</a>�פʤɤǤ����Ѳ�ǽ�Ǥ���<br>
                                    �������������ƥ��δ�������ѥ���ɾ���Ͻ��Ϥ���ޤ���Τǡ�����դ���������
                                </p>
                                <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥ�CSV��������ɤϹԤ��ޤ���</p>

                                <dl class="dl">
                                    <dt>CSV�˽��Ϥ�������</dt>
                                    <dd>
                                        ���᡼�륢�������̾<br>
                                        ���ѥ����(���Ϥ���ޤ���)<br>
                                        ����������<br>
                                        ����������<br>
                                        �����<br>
                                        ��ž���襢�ɥ쥹<br>
                                        ��ž����Υ᡼����<br>
                                    </dd>
                                </dl>


                                <h4 class="section_ttl" id="link-previous-b">�᡼�륢������Ȥ�CSV�����������ˡ</h4>
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
                                            <h6 class="box_ttl" id="link-previous-b02">2.��CSV���ϡפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�����оݥɥᥤ��Υ᡼�륢������Ȱ�����ɽ������ޤ��������ξ����ˤ����CSV���ϡפ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_account_csv_1.png" alt="��CSV���ϡפ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.CSV��������ɴ�λ</h6>
                                            <div class="box_body">
                                                <p>�����оݥɥᥤ������ƤΥ᡼�륢������Ȥ����Ϥ��졢Ǥ�դ���¸����CSV�ե����뤬��������ɤ���ޤ���<br>
                                                �ʾ��CSV��������ɴ�λ�Ǥ���</p>
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
                                    <li><a href="#link-a">�᡼�륢������Ȥ�CSV��������ɤˤĤ���</a></li>
                                    <li><a href="#link-b">�᡼�륢������Ȥ�CSV�����������ˡ</a>
                                        <ol>
                                            <li><a href="#link-b01">1.�᡼�륢����������������</a></li>
                                            <li><a href="#link-b02">2.��CSV������פ򥯥�å�</a></li>
                                            <li><a href="#link-b03">2.�֥�������ɤ���פ򥯥�å�</a></li>
                                            <li><a href="#link-b04">4.CSV��������ɴ�λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">�᡼�륢������Ȥ�CSV��������ɤˤĤ���</h4>
                                <p>�����С��ѥͥ��ꡢ�᡼�륢������Ȥ�CSV�ե�������������ɤ��뤳�Ȥ��Ǥ��ޤ���<br>
                                    �����оݥɥᥤ������ƤΥ᡼�륢������Ȥ����Ϥ��졢��������ɤ���CSV�ե�����ϡ�<a href="man_mail_bulk_change.php">�᡼�륢������Ȥΰ���ѹ�</a>�פʤɤǤ����Ѳ�ǽ�Ǥ���<br>
                                    �������������ƥ��δ�������ѥ���ɾ���Ͻ��Ϥ���ޤ���Τǡ�����դ���������
                                </p>
                                <p class="note">�����Ѵ�����ϡ��᡼�륢������Ȥ�CSV��������ɤϹԤ��ޤ���</p>

                                <dl class="dl">
                                    <dt>CSV�˽��Ϥ�������</dt>
                                    <dd>
                                        ���᡼�륢�������̾<br>
                                        ���ѥ����(���Ϥ���ޤ���)<br>
                                        ����������<br>
                                        ����������<br>
                                        �����<br>
                                        ��ž���襢�ɥ쥹<br>
                                        ��ž����Υ᡼����<br>
                                    </dd>
                                </dl>

                                <h4 class="section_ttl" id="link-b">�᡼�륢������Ȥ�CSV�����������ˡ</h4>
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
                                            <h6 class="box_ttl" id="link-b03">3.�֥�������ɤ���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>��CSV��������ɡפ����򤷡��֥�������ɤ���פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/man_mail_account_csv_2.png?date=2410" alt="�֥�������ɤ���פ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.CSV��������ɴ�λ</h6>
                                            <div class="box_body">
                                                <p>�����оݥɥᥤ������ƤΥ᡼�륢������Ȥ����Ϥ��졢Ǥ�դ���¸����CSV�ե����뤬��������ɤ���ޤ���<br>
                                                    �ʾ��CSV��������ɴ�λ�Ǥ���</p>
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