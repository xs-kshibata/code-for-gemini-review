<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>www�����URL��Ȥ������ΤǤ�����������ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="������¦���ä�������ɲä��뤳�Ȥʤ���www���ꡢ�ʤ��ɤ����URL�Ǥ⥢����������ǽ�ȤʤäƤ��ޤ���(��)[http://www.example.jp/]��[http://example.jp/]�Τɤ���Ǥ⥢���������뤳�Ȥ��Ǥ��ޤ���">

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
            
                <h3 class="sub-ttl">www�����URL��Ȥ������ΤǤ�����������ˡ�򶵤��Ƥ���������</h3>
                
                <p>������¦���ä�������ɲä��뤳�Ȥʤ���www���ꡢ�ʤ��ɤ����URL�Ǥ⥢����������ǽ�ȤʤäƤ��ޤ���</p>
                <p>(��)[http://www.example.jp/]��[http://example.jp/]�Τɤ���Ǥ⥢���������뤳�Ȥ��Ǥ��ޤ���</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi_setting.php" class="btn btn_gray">�֥ɥᥤ��������ˡ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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