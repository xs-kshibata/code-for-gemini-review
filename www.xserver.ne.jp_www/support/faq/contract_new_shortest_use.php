<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>��û���Ѵ��֤Ϥ���ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�������󡦿������������ߤξ��ϡ�3�����ꤴ���󤬲�ǽ�Ǥ�������Ǥ��뤴������֤�3���6���12���24���36����Ǥ������󹹿�����ư�����ξ��ϡ�3�����깹������ǽ�Ǥ�����ư�����ξ��ϡ�1�����깹������ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">��û���Ѵ��֤Ϥ���ޤ�����</h3>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>��������</dt>
                    <dd>�������������ߤξ��ϡ�3�����ꤴ���󤬲�ǽ�Ǥ���<br>
                        ����Ǥ��뤴������֤�3���6���12���24���36����Ǥ���</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>���󹹿�</dt>
                    <dd>��ư�����ξ��ϡ�3�����깹������ǽ�Ǥ���<br>
                        ��ư�����ξ��ϡ�1�����깹������ǽ�Ǥ���</dd>
                </dl>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_new.php" class="btn btn_gray">�ֿ�������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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