<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ۡ���ڡ���������Ϥ��Ƥ�館��ΤǤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����ͤ�ͽ������Ū��Ǽ���˹�碌����������5,000�ʾ�Υۡ���ڡ�����Ҥ��顢��Ŭ�ʲ�Ҥ򤴾Ҳ𤹤�������󶡤��Ƥ��ޤ�����ҤΥۡ���ڡ�����֥��ǥ��󥰥����Ȥʤɡ�����˾�Υۡ���ڡ������¸��Ǥ���褦�����������ޤ����ܤ����ϡ�">

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
            
                <h3 class="sub-ttl">�ۡ���ڡ���������Ϥ��Ƥ�館��ΤǤ�����</h3>
                
                <p>�����ͤ�ͽ������Ū��Ǽ���˹�碌����������5,000�ʾ�Υۡ���ڡ�����Ҥ��顢��Ŭ�ʲ�Ҥ򤴾Ҳ𤹤�������󶡤��Ƥ��ޤ�����ҤΥۡ���ڡ�����֥��ǥ��󥰥����Ȥʤɡ�����˾�Υۡ���ڡ������¸��Ǥ���褦�����������ޤ���<br>�ܤ����ϡ�<a href="<?= $SITE_URL;?>consulting/" target="_blank">�ۡ���ڡ�����������</a><i class="ico ico_new-window"></i>�פ�������������
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_support.php" class="btn btn_gray">�֥��ݡ��ȤˤĤ��ơפΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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