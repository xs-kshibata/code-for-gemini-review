<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHP�ι�®�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åץ�����ư���FastCGI�����뤳�Ȥ�CPU��٤�ڸ������ץ����ι�®����ޤ��PHP�ι�®���פ˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">PHP�ι�®���ˤĤ���</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">PHP�ι�®���ˤĤ���</a></li>
                    <li><a href="#link-b">PHP�ι�®������ �б�����</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section id="s1" class="section">
                    <h4 class="section_ttl" id="link-a">PHP�ι�®���ˤĤ���</h4>
                    <div class="section_body">
                        <p>�����С��ץ�����ư����֤�CPU��٤�⥸�塼���������ޤ������˲��������FastCGI�פȡ�PHP�ץ��������Υ���å��嵡ǽ�Ǥ����OPcache�ס�APC�פˤ�ꡢ CPU��٤������ʷڸ��ȡ�PHP�ˤ�륵���С��ץ����ι�®����Ԥ��ޤ���</p>
                        <p>�Ƶ�ǽ�ξܺ٤ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                        <ul class="list list_arrow-right">
                        	<li><a href="man_server_php_fastcgi.php">FastCGI�ˤĤ���</a></li>
                        	<li><a href="man_server_php_apc.php">APC/OPcache�ˤĤ���</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="s2" class="section">
                    <h4 class="section_ttl" id="link-b">PHP�ι�®������ �б�����</h4>
                    <div class="section_body">

                
                        <table class="table table_striped table_use-caption" style="table-layout:fixed;">
                            <thead>
                            	<th>PHP�ΥС������</th>
                            	<th>FastCGI</th>
                            	<th>APC</th>
                            	<th>OPcache</th>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="tac" scope="row">8.3.x</th>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">-</td>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                            </tr>
                            <tr>
                                <th class="tac" scope="row">8.2.x</th>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">-</td>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                            </tr>
                            <tr>
                                <th class="tac" scope="row">8.1.x</th>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">-</td>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                            </tr>
                                <tr>
                                    <th class="tac" scope="row">8.0.x</th>
                                    <td class="tac">���ON(�ѹ��Բ�)</td>
                                    <td class="tac">-</td>
                                    <td class="tac">���ON(�ѹ��Բ�)</td>
                                </tr>
                            	<tr>
                            		<th class="tac" scope="row">7.4.x</th>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                            	<tr>
                            		<th class="tac" scope="row">7.3.x</th>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                            	<tr>
                            		<th class="tac" scope="row">7.2.x</th>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">7.1.x</th>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                            	<tr>
                            		<th class="tac" scope="row">7.0.x</th>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.6.x</th>
                                    <td class="tac">���ON(�ѹ��Բ�)</td>
                            		<td class="tac">-</td>
                            		<td class="tac">���ON(�ѹ��Բ�)</td>
                            	</tr>
                                <tr>
                                <th class="tac" scope="row">5.5.x</th>
                                  <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">-</td>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                              </tr>
                                <tr>
                                <th class="tac" scope="row">5.4.x</th>
                                  <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                                <td class="tac">-</td>
                            </tr>
                              <tr>
                              <th class="tac" scope="row">5.3.x</th>
                                <td class="tac">���ON(�ѹ��Բ�)</td>
                              <td class="tac">���ON(�ѹ��Բ�)</td>
                              <td class="tac">-</td>
                            </tr>
                            <tr>
                              <th class="tac" scope="row">5.1.x</th>
                              <td class="tac">���ON(�ѹ��Բ�)</td>
                              <td class="tac">-</td>
                              <td class="tac">-</td>
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