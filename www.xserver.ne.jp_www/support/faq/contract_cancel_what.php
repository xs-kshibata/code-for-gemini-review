<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>������򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����ӥ��β���ϡ�������δ������̤�ꤪ���ͤˤƼ�³����ɬ�פǤ����ʲ��μ��ǲ����ԤäƤ���������1.��XServer��������ȡפإ����󤹤�2.����������̤ǲ����˾�Υ����ӥ�(�����С�ID���ɥᥤ��̾�������͡���ʤ�)�򥯥�å�(�ޤ����оݷ���Ρ�">
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
            
                <h3 class="sub-ttl">������򶵤��Ƥ���������</h3>
                <p>
                    �����ӥ��β���ϡ�������δ������̤�ꤪ���ͤˤƼ�³����ɬ�פǤ���<br>
                    �ʲ��μ��ǲ����ԤäƤ���������
                </p>
                <p>
                <ol class="ol ol_margin">
                    <li>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�פإ����󤹤�</li>
                    <li>����������̤ǲ����˾�Υ����ӥ�(�����С�ID���ɥᥤ��̾�������͡���ʤ�)�򥯥�å�<br>
                        (�ޤ����оݷ���α�ü�����å���˥塼��<i class="ico-xacc ico-xacc--list"></i>�ۤ��ַ������פ򥯥�å�) </li>
                    <li>���������̤ǡֲ��󤹤�פ򥯥�å�</li>
                    <li>��ǧ���̤ǡֲ������򤹤�פ򥯥�å�</li>
                    <li>����������̤��оݥ����ӥ��Ρַ���פΥ��ơ������ˡڲ���ۤ�ɽ������Ƥ���м�³����λ<br>
                        ��Ͽ�᡼�륢�ɥ쥹���˥᡼��Ǥ����⤬�Ϥ��ޤ��Τǡ�����ǧ����������</li>
                </ol>
                </p>
                <aside class="msg msg_notice mt30">
                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����ǧ��������</h6>
                    <div class="msg_body">
                        <p>
                            �����ӥ��Τ����������Ǥ����μ�³������ǽ�Ǥ���<br>
                            ����������줿��硢�����ѥ����ӥ������Ѵ��������äƥ����ӥ�����ߤ��ޤ���<br>
                            ���Ѵ������ޤǤϰ���³�������ӥ��Τ����Ѥ���ǽ�Ǥ���<br>
                            ����ʧ���Ѥߤ�������ֶ�ϤǤ��ޤ���ͽ�ᤴλ������������
                        </p>
                    </div>
                </aside>
                <p class="m0">
                    <strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="../../manual/man_order_quit.php">����</a>
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_cancel.php" class="btn btn_gray">�ֲ���פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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