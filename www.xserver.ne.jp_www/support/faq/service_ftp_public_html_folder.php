<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>public_html �ե�����Ȥϲ��Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="public_html �ϥɥ�����ȥ롼�ȤȸƤФ졢�ۡ���ڡ����Υǡ�����HTML�ե����������ǡ����ե�����ʤɡˤ��֤�����Υǥ��쥯�ȥ�Ǥ������󥿡��ͥåȾ�Ǹ����������ǡ�����ɬ�����Υե������˥��åץ��ɤ�ԤäƤ�������ɬ�פ���">

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
            
                <h3 class="sub-ttl">public_html �ե�����Ȥϲ��Ǥ�����</h3>

                <p>public_html �ϥɥ�����ȥ롼�ȤȸƤФ졢�ۡ���ڡ����Υǡ�����HTML�ե����������ǡ����ե�����ʤɡˤ��֤�����Υǥ��쥯�ȥ�Ǥ���<br>
                ���󥿡��ͥåȾ�Ǹ����������ǡ�����ɬ�����Υե������˥��åץ��ɤ�ԤäƤ�������ɬ�פ�����ޤ���</p>
                <p>�դˡ��ۡ���ڡ����Ȥ��Ƹ����������ʤ��ե�����򥢥åץ��ɤ��������� public_html/ ������֤����Ȥ��̾��ꥻ�����ƥ�����ݤǤ��ޤ���</p>


                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp.php" class="btn btn_gray">�֥ե�����ž��(FTP)�ε�ǽ�����͡פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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