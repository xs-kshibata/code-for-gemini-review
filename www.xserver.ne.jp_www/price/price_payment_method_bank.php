<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>��Կ����ǤΤ���ʧ����ˡ - ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

</head>

<body id="pid-price">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-price"><i class="ico ico_tag"></i>����</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">��Կ���</h3>
                
                <p>
                    �ʲ��ζ�Ԥ�������ĺ���ޤ������̶�Ԥ���⿶����ǽ�Ǥ���<br>
                    ���ѿ���������ޤ��󤬡�����������Ϥ���ô�ꤤ�ޤ���
                </p>
				<p class="note mb0">�����潻ͧ��԰ʳ����餪�����ߤ򤵤��ݤϡ� ��������Ԥλ��ͤˤ������ȿ�Ǥ���Ķ����Ȥʤ��礬����ޤ���</p>
                <p class="note mb40">���������������ϼ��դ��Ƥ���ޤ���Τǡ����餫���ᤴλ������������</p>

                <figure class="mb40"><img class="img" src="../img/price/img_logo_smbc.png" alt="���潻ͧ���"></figure>
                
                <p class="tac m0"><a href="price_payment_method.php" class="btn btn_blue">����ʧ����ˡ�����ڡ���<i class="ico ico_refresh"></i></a></p>
                
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