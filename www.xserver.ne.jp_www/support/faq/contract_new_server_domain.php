<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�����С����ȼ��ɥᥤ���Ʊ���˿������ळ�ȤϤǤ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����С��ȥɥᥤ����̸Ĥˤ��������ߤ�������ɬ�פ�����ޤ����֤��������ߥե�����פ����">

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
            
                <h3 class="sub-ttl">�����С����ȼ��ɥᥤ���Ʊ���˿������ळ�ȤϤǤ��ޤ�����</h3>
                
                <p>����Ū�ˡ������С��ȥɥᥤ����̸Ĥˤ��������ߤ�������ɬ�פ�����ޤ���</p>

                <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">���������ߥե�����</a>�פ��顢�����С��Τ��������ߤ�ԤäƤ���������<br>
                    �����С��Τ��������߸塢�����ͤΥ�������Ⱦ������Ͽ�᡼�륢�ɥ쥹���ˤ����ꤤ�����ޤ���<br>
                    �᡼�뤬�Ϥ��ޤ����顢��XServer��������ȡפ��ɥᥤ��Τ��������ߤ�ԤäƤ���������</p>

                <p>�ɥᥤ��Τ��������ߤˤĤ��ƾܤ����ϡ�<a href="https://www.xdomain.ne.jp/manual/man_order_domain.php#an2-0" target="_blank">XServer�ɥᥤ�����������</a>�פ�������������</p>

                <p>�ʤ���WordPress�����å��������ȤǤ��������ߤ򤷤Ƥ����������ϡ������С����ȼ��ɥᥤ���Ʊ���ˤ��������ߤ��뤳�Ȥ���ǽ�Ǥ���</p>

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new.php" class="btn btn_gray">�ֿ�������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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