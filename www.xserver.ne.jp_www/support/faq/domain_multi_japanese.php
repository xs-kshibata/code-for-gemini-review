<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���ܸ�ɥᥤ��ʴ����ʤɤ�Ȥä��ȼ��ɥᥤ��ˤϻȤ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ������Ѳ�ǽ�Ǥ��������С��ѥͥ�夫��ɥᥤ��������ɲä�Ԥ��ޤ����������ܸ�ɥᥤ����ɲ������Ԥ��ݡ�puny�����ɤ����Ϥ���ɬ�פϤ���ޤ���">

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
            
                <h3 class="sub-ttl">���ܸ�ɥᥤ��ʴ����ʤɤ�Ȥä��ȼ��ɥᥤ��ˤϻȤ��ޤ�����</h3>

                <p>�Ϥ������Ѳ�ǽ�Ǥ���<br>
                �����С��ѥͥ�夫��ɥᥤ��������ɲä�Ԥ��ޤ���</p>
                <p class="note">�����ܸ�ɥᥤ����ɲ������Ԥ��ݡ�puny�����ɤ����Ϥ���ɬ�פϤ���ޤ���</p>            

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi.php" class="btn btn_gray">�֥ޥ���ɥᥤ��פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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