<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>����񡦼��ν񡦸��ѽ��ȯ�Ԥϲ�ǽ�Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�������ȯ�Բ�ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">����񡦼��ν񡦸��ѽ��ȯ�Ԥϲ�ǽ�Ǥ�����</h3>
                
                <p>�������ȯ�Բ�ǽ�Ǥ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>����񡦼��ν��ȯ�ԤˤĤ���</dt>
                    <dd>
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�⡢���å��������С���������ڡ����Ρ������ʧ�� &gt; ����ʧ�����򡿼��ν�ȯ�ԡפ�ꡢPDF�ե���������ǥ�������ɤ��뤳�Ȥ���ǽ�Ǥ���</p>
                        <p class="mt5"><img class="img" src="../../img/faq/faq_contract_price3.png?date=20230130" alt="����ʧ�����򡿼��ν�ȯ�Ԥ򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>���ѽ��ȯ�ԤˤĤ���</dt>
                    <dd>
                        <p>
                            ���ѽ�ϡ������ӥ������ȡ�����ץ��פ����⥷�ߥ�졼�����ǽ����Ѥ���ȯ�Ԥ���ǽ�Ǥ���<br>
                            �ܤ����ϥޥ˥奢���<a href="../../manual/man_order_pay_bill.php#link-a03">����񡦼��ν񡦸��ѽ�</a>�פ򤴻��Ȥ���������
                        </p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_price.php" class="btn btn_gray">������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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