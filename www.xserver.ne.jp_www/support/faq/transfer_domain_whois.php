<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>¾�Ҥ���XServer�ɥᥤ��ذܴɤ򤹤�ȡ�Whois����Ϥɤ��ʤ�ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ɥᥤ��ܴɤκݤ�whois����ϡ��ɥᥤ����̤ˤ�äưۤʤ�ޤ�����">

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

                <h3 class="sub-ttl">¾�Ҥ���XServer�ɥᥤ��ذܴɤ򤹤�ȡ�Whois����Ϥɤ��ʤ�ޤ�����</h3>

                <p>�ɥᥤ��ܴɤκݤ�Whois����ϡ��ɥᥤ����̤ˤ�äưۤʤ�ޤ���</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>���ѷ�JP�ɥᥤ�� (.jp)</dt>
                    <dd>XServer�ɥᥤ��ذܴɤ򤹤����ˡ�<a href="../../manual/man_member_setting_whois.php">Whois����ν��������</a>�פȤ�����Ͽ�������󤬸�������ޤ���</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>°����JP�ɥᥤ�� (.co.jp / .ne.jp�ʤ�)</dt>
                    <dd>�ܴ����ξ���򤽤Τޤް����Ѥ��ޤ���</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>���Τۤ��Υɥᥤ�� (.com / .net�ʤ�)</dt>
                    <dd>���å��������С�������Ҥξ����������������ޤ���</dd>
                </dl>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_transfer_domain.php" class="btn btn_gray">�֥ɥᥤ��ܴɡפΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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