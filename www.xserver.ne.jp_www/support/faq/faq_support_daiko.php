<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���ꤪ�ޤ������ݡ��ȤˤĤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯�������å��å��������С������ꤪ�ޤ������ݡ��Ȥ˴ؤ���褯�������Ǥ���">

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
            
                <h3 class="sub-ttl">���ꤪ�ޤ������ݡ��ȤˤĤ���</h3>
                
                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./support_daiko_application.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����ꤪ�ޤ������ݡ��ȡפ�������ˡ�򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./support_daiko_list.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����ꤪ�ޤ������ݡ��ȡפǰ��꤬��ǽ�ʺ�����Ƥ򶵤��Ƥۤ�����</a></li>
                        <li class="faqList__item"><a href="./support_daiko_duration.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�����ꤪ�ޤ������ݡ��ȡפ��б���λ�ޤǤˤ�������֤򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./support_daiko_password.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�᡼�륢������ȡ�FTP��������Ȥ�ȯ�Ԥ���ꤷ�����Υѥ���ɾ���γ�ǧ��ˡ�򶵤��Ƥ���������</a></li>
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