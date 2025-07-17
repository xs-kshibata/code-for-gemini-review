<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>CGI - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ褯��������CGI�Τ����Ѥ˴ؤ���褯�������Ǥ���Perl�Υѥ���ѡ��ߥå����ˤĤ��ơ����Ѳ�ǽ��Perl�⥸�塼��γ�ǧ��ˡ�ʤɡ�">

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
            
                <h3 class="sub-ttl">CGI</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_cgi_install.php" class="faqList__label"><i class="ico ico_chevron-right"></i>CGI��Ȥ��ˤϤɤ������֤���Ф����Ǥ�����</a></li>
                        <li class="faqList__item"><a href="./service_cgi_permission.php" class="faqList__label"><i class="ico ico_chevron-right"></i>�ѡ��ߥå��������Ϥɤ�����Ф����Ǥ�����</a></li>
                        <li class="faqList__item"><a href="./service_cgi_perl_module.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ɸ������ѤǤ���Perl�⥸�塼��򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_cgi_perl_pass.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Perl�Υѥ��򶵤��Ƥ���������</a></li>
                        <li class="faqList__item"><a href="./service_cgi_gd_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>GD�ϻȤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_cgi_jcode.php" class="faqList__label"><i class="ico ico_chevron-right"></i>jcode.pm�ϻ��ѤǤ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_cgi_suexec.php" class="faqList__label"><i class="ico ico_chevron-right"></i>suEXEC�ˤ��б����Ƥ��ޤ�����</a></li>
                        <li class="faqList__item"><a href="./service_cgi_500.php" class="faqList__label"><i class="ico ico_chevron-right"></i>CGI�����֤���ȡ�500 Internal Server Error�פ�ɽ������ޤ���</a></li>
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