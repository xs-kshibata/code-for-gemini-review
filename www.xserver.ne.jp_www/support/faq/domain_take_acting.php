<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ɥᥤ��μ�����ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ɥᥤ��μ�����ˡ�ϡ�XServer�ɥᥤ��Ρ֥ɥᥤ�󿷵������פ򤴳�ǧ�����������ޤ�����ŵ����Ѥ���̵���ɥᥤ��μ�����ˡ�ˤĤ��Ƥϡ��ȼ��ɥᥤ��ʵ�̵����ŵ�פ򤴳�ǧ����������">

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
            
                <h3 class="sub-ttl">�ɥᥤ��μ�����ˡ�򶵤��Ƥ���������</h3>
                
                <p class="mb0">�ɥᥤ��μ�����ˡ�ϡ�XServer�ɥᥤ���<a href="https://www.xdomain.ne.jp/manual/man_order_domain.php" target="_blank">�֥ɥᥤ�󿷵�������</a>�򤴳�ǧ����������<br>
                �ޤ�����ŵ����Ѥ���̵���ɥᥤ��μ�����ˡ�ˤĤ��Ƥ�<a href="https://www.xserver.ne.jp/manual/man_order_present_domain.php" target="_blank">���ȼ��ɥᥤ��ʵ�̵����ŵ��</a>�򤴳�ǧ����������</p>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_take.php" class="btn btn_gray">�֥ɥᥤ�󿷵������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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