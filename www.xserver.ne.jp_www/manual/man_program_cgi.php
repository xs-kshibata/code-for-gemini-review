<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>CGI��SSI��PHP | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���CGI��PHP�λ��ͤ�Ƴ���Ѥ�PEAR�饤�֥��˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">CGI��SSI��PHP</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">CGI��Ϣ�λ��Ͱ���</a></li>
                    <li><a href="#link-b">PHP��Ϣ�λ��Ͱ���</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI��SSI��PHP�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">CGI��Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                        <table class="table">
                            <tbody>
                                <tr><th>�ۡ���ǥ��쥯�ȥ�Υѥ�</th><td>/home/�����С�ID/</td></tr>
                                <tr><th>CGI�ե�����Υѡ��ߥå����</th><td>755, 705 �Τ����줫</td></tr>
                                <tr><th>CGI�����֥ǥ��쥯�ȥ�Υѡ��ߥå����</th><td>755, 705 �Τ����줫</td></tr>
                                <tr><th>CGI���֥ǥ��쥯�ȥ�</th><td>�ɤ��Ǥ��</td></tr>
                                <tr><th>jcode.pm</th><td>���󥹥ȡ���Ѥ�</td></tr>
                                <tr><th>GD / GD2</th><td>���󥹥ȡ���Ѥ�</td></tr>
                                <tr><th>suEXEC</th><td>�б�</td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">PHP��Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                        <table class="table">
                            <tbody>
                                <tr><th>PHP��ư��</th><td>CGIư��</td></tr>
                                <tr><th>PHP�ե�����Υѡ��ߥå����</th><td>755, 705, 644, 604 �Τ����줫</td></tr>
                                <tr><th>PHP�����֥ǥ��쥯�ȥ�Υѡ��ߥå����</th><td>755, 705 �Τ����줫</td></tr>
                                <tr><th>php.ini</th><td>�Խ���ǽ</td></tr>
                                <tr><th>SMARTY</th><td>���Ѳ�ǽ<p class="note mb0">���ǥե���ȤǤϥ��󥹥ȡ���Ϥ���Ƥ��餺�������ͤˤƥ��󥹥ȡ��뤷�Ƥ�������ɬ�פ��������ޤ���</p></td></tr>
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