<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�᡼��ε�ǽ������ - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯�������å᡼��ε�ǽ�����ͤ˴ؤ���褯�������Ǥ���">

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
            
                <h3 class="sub-ttl">��ǽ������</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_mail_transmission.php" class="faqList__label"><i class="ico ico_chevron-right"></i>1�̤����겿MB�ޤǥ᡼������������ǽ�Ǥ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_transfer.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����᡼����̤Υ᡼�륢�ɥ쥹�ؼ�ưž��������ˡ�򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_mail_587port.php" class="faqList__label"><i class="ico ico_chevron-right"></i>���֥ߥå����ݡ��ȡ�587�ݡ��ȡˤ����ѤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_virus_check.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����륹�����å���ǽ�Ϥ���ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_catchall.php" class="faqList__label"><i class="ico ico_chevron-right"></i>����å�������ε�ǽ�Ϥ���ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_per_domain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ɥᥤ�󤴤Ȥ˥᡼�륢������Ȥ�����Ǥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_mailinglist_mailmagazine.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�᡼��󥰥ꥹ�ȡ��᡼��ޥ����������Ǥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_transmission_limit.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�᡼������̤������������ΤǤ�����������������¤Ϥ���ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_dkim.php" class="faqList__label"><i class="ico ico_chevron-right"></i>DKIMǧ�ڤ����ѤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_mail_gmail.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Gmail�֥᡼�������ԤΥ����ɥ饤��פ��б����Ƥ��ޤ�����</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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