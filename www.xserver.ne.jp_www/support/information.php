<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�㳲�����ƥʥ󥹾��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΥ��ƥʥ󥹾��󡢾㳲����Τ�����Ǥ���">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">�㳲�����ƥʥ󥹾���</span></p>

        <?php include("../newsman/create_syogai_top_list.php") ;?>

        <section class="headlines">
            <h2 class="headlines_ttl"><span class="headlines_ttl_label">�Ƕ�ξ㳲����(24����)</span></h2>

            <div class="headlines_body">
                <?php include("../newsman/create_syogai_list.php") ;?>
            </div>
            <!-- /.headlines_body -->

        </section>
        <!-- /.headlines -->

        <section class="headlines">
            <h2 class="headlines_ttl"><span class="headlines_ttl_label">����Υ��ƥʥ�ͽ��</span></h2>
            
            <div class="headlines_body">
                <?php include("../newsman/create_mente_list.php") ;?>
            </div>
            <!-- /.headlines_body -->
            
        </section>
        <!-- /.headlines -->

        <div class="headlines_footer">
            <a href="history.php" class="btn btn_gray">���٤Ƥξ㳲�����ƥʥ󥹾������<i class="ico ico_chevron-right"></i></a>
        </div>
        
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