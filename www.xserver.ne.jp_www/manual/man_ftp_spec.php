<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP���Ͱ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���FTP�˴ؤ�����ͤΰ����Ǥ���">

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
            
                <h3 class="sub-ttl">���Ͱ���</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">FTP��Ϣ�λ��Ͱ���</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FTP��Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>��ǽ</th>
                                    <th>����</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>FTP��������ȿ�</th>
                                    <td>̵���¡ʥ��������衦ž�������²ġ�</td>
                                </tr>
                                <tr>
                                    <th>FTP over SSL</th>
                                    <td>���Ѳ�ǽ��FTP over SSL�б����եȤ����Ѥ���������</td>
                                </tr>
                                <tr>
                                    <th>�ե�����ޥ͡�����</th>
                                    <td>���Ѳ�ǽ</td>
                                </tr>
                                <tr>
									<th>��³�ݡ����ֹ�</th>
									<td>21��localhost��³�ξ��ϡ�10021�֥ݡ��ȡפ򤴻��꤯��������
									</td>
								</tr>
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