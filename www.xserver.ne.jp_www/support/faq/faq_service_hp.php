<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Web�����ȡ�WordPress�ε�ǽ������ - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯��������Web�����ȡ�WordPress�ε�ǽ�����ͤ˴ؤ���褯�������Ǥ���">

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
            
                <h3 class="sub-ttl">��ǽ������</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_hp_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ۡ���ڡ����˥ѥ���ɤ����ꤹ�뤳�ȤϤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_hp_database.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ǡ����١����ϻ��ѤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_hp_available_program.php" class="faqList__label"><i class="ico ico_chevron-right"></i>���ѤǤ���ץ�������򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_hp_mobile_site.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�������å����Ȥ򱿱Ĥ��뤳�ȤϤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_hp_file_upload.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ե�����򥢥åץ��ɤ��뤿��ˤϤɤ�����Ф����Ǥ�����</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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