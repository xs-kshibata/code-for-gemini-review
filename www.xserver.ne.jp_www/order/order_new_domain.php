<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">

<title>�ɥᥤ�󿷵�������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פǥɥᥤ���������뤿��μ��Τ�����Ǥ���">

</head>

<body id="pid-order">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-order"><i class="ico ico_pencil"></i>���������ߤ�ή��</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <p class="mt40 mb20 tac bright-yellow font-l font-bold">
            �ɥᥤ��μ����ϡ֥��å����ɥᥤ��פ���ԤäƤ���������<br>
            �ܺ٤ϲ����򤴻��Ȥ���������
        </p>
        <p class="mb40 tac">
            <a href="https://www.xdomain.ne.jp/manual/man_order_domain.php" target="_blank" class="btn btn_green-l">�֥��å����ɥᥤ��ץɥᥤ�󿷵��������������߼��<i class="ico ico_new-window"></i></a>
        </p>
        
        
        
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