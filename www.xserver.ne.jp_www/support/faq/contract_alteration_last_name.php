<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�뺧�����Ļ����Ѥ��ޤ���������̾�����ѹ���ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���̤ˤ���̾���ѹ��פˤ�ꡢ�������̾�����ѹ����뤳�Ȥ��Ǥ��ޤ�������³����ˡ�ϡ֤�����̾�����ѹ�������פΥޥ˥奢��򤴳�ǧ����������">

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
            
                <h3 class="sub-ttl">�뺧�����Ļ����Ѥ��ޤ���������̾�����ѹ���ˡ�򶵤��Ƥ���������</h3>
                
                <p>���̤ˤ���̾���ѹ��פˤ�ꡢ�������̾�����ѹ����뤳�Ȥ��Ǥ��ޤ���<br>����³����ˡ��<a href="../../manual/man_order_name_change.php">�֤�����̾�����ѹ��������</a>�Υޥ˥奢��򤴳�ǧ����������</p>

                
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_alteration.php" class="btn btn_gray">�ַ����ѹ��פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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