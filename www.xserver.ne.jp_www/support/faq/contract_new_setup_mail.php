<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�֥��å��������С� ���괰λ�Τ��Τ餻�פΥ᡼���ʶ�����Ƥ��ޤ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���줾�����ѤΥڡ�������Ƽ����κ����꤬��ǽ�Ǥ����������³�����Ԥ��ʤ����ϡ����ݡ��Ȥؤ�Ϣ����������">

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
            
                <h3 class="sub-ttl">�֥��å��������С� ���괰λ�Τ��Τ餻�פΥ᡼���ʶ�����Ƥ��ޤ��ޤ�����</h3>
                
                <p>�����ڡ�������Ƽ����κ����꤬��ǽ�Ǥ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>��Ͽ�����XServer��������Ȥ�ID��ѥ���ɤʤɤξ����</dt>
                    <dd><a href="<?php print $REISSUE_INFO_URL; ?>"><?php print $REISSUE_INFO_URL; ?></a></dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�����С���������Ⱦ���ʥ����С�ID��FTP�ۥ��ȡ��᡼�륵���С��ʤɤξ����</dt>
                    <dd><a href="<?php print $REISSUE_SERVER_URL; ?>"><?php print $REISSUE_SERVER_URL; ?></a></dd>
                </dl>
                <p>�������³�����Ԥ��ʤ����ϡ����ݡ��Ȥؤ�Ϣ����������</p>

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new_trouble.php" class="btn btn_gray">�ַ�������Υȥ�֥�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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