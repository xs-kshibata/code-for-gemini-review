<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ѡ��ߥå���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åѡ��ߥå����Ȥϥե������ե�������Ф���桼�����Υ����������¤Τ��ȤǤ������ڡ����Ǥϥ��å��������С���Web�����Ȥ��������ݤο侩�ѡ��ߥå����ˤĤ��Ƥ����⤷�Ƥ��ޤ���">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>�ޥ˥奢��</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">�ѡ��ߥå����</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�ѡ��ߥå����Ȥ�</a></li>
                    <li><a href="#link-b">�ѡ��ߥå���������ˤĤ���</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ѡ��ߥå����Ȥ�</h4>
                    <div class="section_body">
                        <p>�ե������ե�������Ф���桼�����Υ����������¤Τ��ȤǤ���</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�ѡ��ߥå���������ˤĤ���</h4>
                    <div class="section_body">
                        <p>�������ӥ���Web�����Ȥ��������ݡ��侩����ƥե�������ƥե�������Ф���ѡ��ߥå������ͤϲ����Ȥʤ�ޤ���</p>
                        
                        <table class="table table_use-caption">
							<caption>Ŭ�ڤʥѡ��ߥå������</caption>
							<tbody>
								<tr><th>�ե����</th><td>755, 705�Τ����줫</td></tr>
								<tr><th>.html / .php / .zip �ʤɤΥե�����</th><td>644</td></tr>
								<tr><th>.htaccess</th><td>644</td></tr>
								<tr><th>.cgi / .pl �ʤɤ� CGI �¹ԥե�����</th><td>755, 705�Τ����줫</td></tr>
								<tr><th>.cgi / .pl �ʤɤ�ľ�ܼ¹Ԥ���ʤ��饤�֥��ե�����</th><td>600</td></tr>
								<tr><th>.txt / .dat / .log �ʤɤΥե�����</th><td>600</td></tr>
							</tbody>
						</table>
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>
                

                
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
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>