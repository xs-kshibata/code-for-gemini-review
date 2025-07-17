<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Gmail�إ᡼�뤬�����Ǥ��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��Google�ҤΥ᡼�������ԤΥ����ɥ饤���ѹ��פ�ȼ����Gmail�إ᡼���������������DKIM��SPF�ʤɤ����꤬ɬ�פˤʤ�ޤ�����Gmail�ؤΤߥ᡼����������Ǥ��ʤ����ϡ��ʲ�������򤴳�ǧ������������������ѹ����줿��硢DNS��ȿ�ǤˤϿ����֤�������">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">Gmail�إ᡼�뤬�����Ǥ��ޤ���</h3>

                <p>��<a href="https://www.xserver.ne.jp/news_detail.php?view_id=12026">Google�ҤΥ᡼�������ԤΥ����ɥ饤���ѹ�</a>�פ�ȼ����Gmail�إ᡼���������������DKIM��SPF�ʤɤ����꤬ɬ�פˤʤ�ޤ�����<br>
                    Gmail�ؤΤߥ᡼����������Ǥ��ʤ����ϡ��ʲ�������򤴳�ǧ����������</p>

                <p class="note font-m">��������ѹ����줿��硢DNS��ȿ�ǤˤϿ����֤������24�������٤�����ޤ���1�������ͻҤ򸫤������ǥ᡼��������򤪻����������</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>DKIM������ǧ����</dt>
                    <dd>
                        <p>�����С��ѥͥ����DKIM����פ��ǧ���Ƥ���������<br>��DKIM��������פ��оݤΥɥᥤ�󤪤�ӥ��֥ɥᥤ��ɽ������Ƥ�������ꤢ��ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_set_notification_2.png" alt="DKIM���ꥹ���꡼�󥷥�å�"></p>
                        <p class="mt30">DKIM�����ꤵ��Ƥ��ʤ����ϡ��ޥ˥奢��򤴳�ǧ�Τ�����������ɲä��Ƥ���������</p>
                        <p><strong class="yellow">���ͥޥ˥奢�롧</strong><a href="../../manual/man_mail_dkim.php">DKIM����</a></p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SPF������ǧ����</dt>
                    <dd>
                        <p>�����С��ѥͥ����SPF����פ��ǧ���Ƥ��������� <br>�оݤΥɥᥤ�󤪤�ӥ��֥ɥᥤ����������Ƥˡ�ON (ɸ������ + Gmail��������)�ۤ�ɽ������Ƥ�������ꤢ��ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_set_notification_4.png?date=2408" alt="SPF���ꥹ���꡼�󥷥�å�"></p>
                        <p class="mt30">SPF�����ꤵ��Ƥ��ʤ����ϡ��ޥ˥奢��򤴳�ǧ�Τ�����������ON�ۤ��ڤ��ؤ�����Gmail���Ĥ��ɲáפ򤪤��ʤäƤ���������</p>
                        <p><strong class="yellow">���ͥޥ˥奢�롧</strong><a href="../../manual/man_mail_spf.php">SPF����</a></p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>1��5,000�̰ʾ�Υ᡼�������������</dt>
                    <dd>
                        <p>Gmail�Υ��ɥ쥹����1��5,000�̰ʾ�Υ᡼��������������ϡ������С��ѥͥ���嵭�˲ä���DMARC����פ��ǧ���Ƥ���������<br>�ָ��ߤ�DMARC�ݥꥷ������פ���̤����۰ʳ���ɽ���ˤʤäƤ�������ꤢ��ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_dmarc.png" alt="DMARC���ꥹ���꡼�󥷥�å�"></p>
                        <p class="mt30">DMARC�����ꤵ��Ƥ��ʤ����ϡ��ޥ˥奢��򤴳�ǧ�Τ��������ѹ����DMARC�ݥꥷ������פ��Ǥ�դι��ܤ����򤷡�����򤪤��ʤäƤ���������</p>
                        <p><strong class="yellow">���ͥޥ˥奢�롧</strong><a href="../../manual/man_mail_dmarc.php">DMARC����</a></p>
                       </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>������ɥ᡼�������������</dt>
                    <dd>
                        <p>Gmail�Υ��ɥ쥹���˥᡼��ޥ�����ʤ�������ɥ᡼��������򤵤����ϡ��᡼�������Ͽ������Ǥ���URL��󥯤򵭺ܤ���ʤɡ������Ԥ���ñ���ۿ���Ͽ�����Ǥ�����ˡ���Ѱդ��Ƥ���������</p>
                        <p>�ޤ��������Ԥ�����Ͽ����ο��������ä���硢2������˥᡼����������ߤǤ���褦���б�����������</p>
                    </dd>
                </dl>



                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">�֥᡼��ȥ�֥�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
                </div>

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>