<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>���ν�ȯ�ԤˤĤ��� - ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��ؤ���ʧ����������������������˴ؤ�����ν��ȯ�ԤˤĤ��ƤΤ�����Ǥ���">

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
            
                <h3 class="sub-ttl">���ν�ȯ�ԤˤĤ���</h3>
                
                <p>
                    XServer��������Ȥ��PDF�ե���������ǥ�������ɤ��뤳�Ȥ���ǽ�Ǥ���<br>
					�ܺ٤ϡ��ޥ˥奢���<a href="../manual/man_order_pay_bill.php#link-a02">���ν��ȯ�ԤˤĤ���</a>�פ򤴻��Ȥ���������<br>
					���ν��PDF�ե���������Ǥ�ȯ�ԤΤ߾��äƤ��ꡢ���̤ˤ��ȯ�ԤϤ������Ƥ���ޤ���
				</p>
                
                <section class="block">
                    <h4 class="block_ttl">�μ���ˤĤ���</h4>
                    <div class="block_body">
                        <p>
                            �ƥ����ɲ�Ҥ��������ٽ񡢳ƶ�ԤǤο����ι����ʿ������١ˡ��ƥ���ӥˤ��ȯ�Ԥ�����μ���ʥ쥷���ȡˤ������줾���������μ���Ȥ��Ƥ����Ѥ��������ޤ������ҤǤ��μ���ȯ�Ԥϡ��μ�������ȯ�Ԥˤʤ뤿�᾵�äƤ���ޤ��󡣤ʤˤȤ���λ������������
                        </p>
                        <p class="note">�����ҤǤ��μ���ȯ�Ԥϡ�2016ǯ12��14����ʤäƽ�λ�������ޤ�����</p>
                    </div>
                </section>                
                
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