<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>����������륹��ǽ�����Ѥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�������ӥ��Ǥϡ�����������륹��ǽ��ɸ����󶡤��Ƥ��ޤ��Τǡ������ͤˤ����ꤷ�Ƥ�������ɬ�פϤ������ޤ����������ӥ��Υ᡼�륵���С������Ѥ����᡼�������������κݤ˥����륹�����å���Ԥ��������륹���Τ������ϡ�">

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
            
                <h3 class="sub-ttl">����������륹��ǽ�����Ѥ�����</h3>

                <p>�������ӥ��Ǥϡ�����������륹��ǽ��ɸ����󶡤��Ƥ��ޤ��Τǡ������ͤˤ����ꤷ�Ƥ�������ɬ�פϤ������ޤ���</p>
                <p>�������ӥ��Υ᡼�륵���С������Ѥ����᡼�������������κݤ˥����륹�����å���Ԥ���<br>
                �����륹���Τ������ϡ������᡼���������ȤȤ�ˡ��ʲ�����ˡ�����Τ򤤤����ޤ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�᡼�������</dt>
                    <dd>�����륹���Τ��ƺ�������ݤ��������(From)�᡼�륢�ɥ쥹���ۤ˥᡼������Τ򤷤ޤ���</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�᡼��������</dt>
                    <dd>�����륹���Τ��ƺ�������ݤ��������(From)�᡼�륢�ɥ쥹���ۤ˥᡼������Τ򤷤ޤ���</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_viruscheck.php" class="btn btn_gray">�֥����륹�����å��פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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