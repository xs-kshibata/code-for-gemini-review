<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">
<title>���̥᡼���������Τߡ�Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ��ʤ�ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ��ʤäƤ��ޤä���硢SPF�쥳���ɤ����Ƥ������뤳�Ȥǡ���ä����ǽ��������ޤ��������С��ѥͥ����DNS�쥳��������פ�ꡢ���ߤ�����������Ʋ�ä��뤫��������������������ߤ�TXT�쥳���ɡ�">

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
                <h3 class="sub-ttl">���̥᡼���������Τߡ�Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ��ʤ�ޤ�����</h3>

                <p>�ʲ��Υ����С�����򤴳�ǧ����������</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>DMARC�����ꤵ��Ƥ��뤫���ǧ</dt>
                    <dd>
                        <p>�᡼����������ɥᥤ�󤪤�ӥ��֥ɥᥤ��ˤơ�DMARC���꤬����Ƥ��뤫�򤴳�ǧ����������<br>
                            DMARC�γ�ǧ��ˡ�ϡ��ʲ����̤�Ǥ���</p>

                        <p>1�������С��ѥͥ�˥�����塢�إɥᥤ��٥��ƥ���Ρ�DNS�쥳��������׵�ǽ�����򤷤ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_1.png" alt="DNS�쥳��������򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                        <p>2��DNS�쥳�������������ɽ������ޤ��Τǡ��оݤΥɥᥤ�󡦥��֥ɥᥤ��ɽ������Ƥ��뤫�򤴳�ǧ����������</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_2.png" alt="DKIM������������꡼�󥷥�å�"></p>

                        <div class="block_body">
                            <p>���DMARC�쥳���ɤ�������</p>
                            <table class="table break-word">
                                <thead>
                                <tr>
                                    <th class="w25per">�ۥ���̾</th>
                                    <th class="w10per">����</th>
                                    <th>����</th>
                                    <th class="w10per">TTL</th>
                                    <th class="w15per">ͥ����</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>_dmarc.example.com</th>
                                    <td>TXT</td>
                                    <td>v=DMARC1; p=quarantine;
                                    </td>
                                    <td>3600</td>
                                    <td>0</td>
                                </tr>
                                </tbody>
                            </table>
                            <ul class="note-list">
                                <li>���ۥ���̾�ϥ���ץ�Ǥ���</li>
                                <li>��<em class="font-bold">v=DMARC1; p=quarantine;</em>�Ϥ����ͤ���DMARC����פ�����ꤵ�줿���Ƥˤ�äưۤʤ�ޤ���</li>
                            </ul>
                        </div>

                        <p class="note">�⤷DMARC���ɲä���Ƥ��ʤ����ϡ��ʲ��򻲹ͤˤ������ꤷ�Ƥ���������</p>

                        <p>1�������С��ѥͥ�˥�����塢�إ᡼��٥��ƥ���Ρ�DMARC����׵�ǽ�����򤷤ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_3.png" alt="DMARC�쥳��������򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>

                        <p>2.Ǥ�դ��ͤ����򤷡������ꤹ��פ򥯥�å����ޤ���</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_4.png" alt="DMARC������̤Υ����꡼�󥷥�å�"></p>

                        <p class="note">DMARC����ξܺ٤ˤĤ��Ƥϡ��ʲ��򻲹ͤˤ��Ƥ���������</p>
                        <p><strong class="yellow">���ͥޥ˥奢�롧</strong><a href="../../manual/man_mail_dmarc.php">DMARC����</a></p>

                    </dd>
                </dl>

                <p>�����Υ᡼�������Ǥ�Gmail�ʤ�����ΰ���˥᡼�뤬�Ϥ��ʤ����ϡ��ʲ����Ƥ򤴳�ǧ����������</p>
                <p><strong class="yellow">��Ϣ�褯������䡧</strong><a href="./service_mail_trouble_err_mail_sender_gmail.php">Gmail�إ᡼�뤬�����Ǥ��ޤ���</a></p>

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