<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHP��®��(�ܹԥ��ƥʥ���) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åץ�����ư���FastCGI�����뤳�Ȥ�CPU��٤�ڸ������ץ����ι�®����ޤ��PHP��®������פ˴ؤ��뤴����Ǥ���sv1999�����ǥ����С��Ķ��ΰܹԥ��ƥʥ󥹤���λ���Ƥ��ʤ����Ϥ�����򤴻��Ȥ���������">

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
            
                <h3 class="sub-ttl">PHP��®���ˤĤ���(�ܹԥ��ƥʥ���)</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">PHP�ι�®���Ȥ�</a></li>
                    <li><a href="#link-b">PHP��®�� �б�����</a></li>
                </ul>
                </div>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section id="s1" class="section">
                    <h4 class="section_ttl" id="link-a">PHP�ι�®���Ȥ�</h4>
                    <div class="section_body">
                        <p>�ܵ�ǽ�ϡ������С��ץ�����ư����֤�CPU��٤�⥸�塼���������ޤ������˲��������FastCGI�פȡ�PHP�ץ��������Υ���å��嵡ǽ�Ǥ����OPcache�ס�APC�פˤ�ꡢ CPU��٤������ʷڸ��ȡ�PHP�ˤ�륵���С��ץ����ι�®����Ԥ��ޤ���</p>
                        <p>�Ƶ�ǽ�ξܺ٤ϡ��ʲ��Υޥ˥奢��򤴻��Ȥ���������</p>
                        <ul class="list list_arrow-right">
                        	<li><a href="man_server_php_fastcgi.php">FastCGI�ˤĤ���</a></li>
                        	<li><a href="man_server_php_apc.php">APC/OPcache�ˤĤ���</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="s2" class="section">
                    <h4 class="section_ttl" id="link-b">PHP��®�� �б�����</h4>
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
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">-</td>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.4.x</th>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.3.x</th>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.2.x</th>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">5.1.x</th>
                            		<td class="tac">ON/OFF �����ǽ</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                                <tr>
                            		<th class="tac" scope="row">4.3.x</th>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            		<td class="tac">-</td>
                            	</tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_caution">
                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>php.ini������˴ؤ��뤴���</h5>
                            <div class="msg_body">
                                <p>�ܵ�ǽ��ͭ���ξ�硢�����ͤ��ۡ���ǥ��쥯�ȥ��ƥǥ��쥯�ȥ���ȼ������֤��Ƥ���<em class="font-bold">php.ini</em>�ե�����������Ŭ�Ѥ���ޤ���ΤǤ���դ���������<br>
                                �ܵ�ǽ�����Ѥξ��php.ini�������Ԥ����ϡ������С��ѥͥ��Ρ�<a href="man_server_phpini_edit.php">php.ini����</a>�פˤ������Ԥ��褦�ˤ��Ƥ���������</p>
                            </div>
                        </aside>
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���ѤǤ���Ķ��ѿ��ΰ㤤</h5>
                            <div class="msg_body">
                                <p>FastCGI��ͭ���Ȥʤ�Ķ��Ǥϡ��̾��CGIư��Ȥϻ��ѤǤ���Ķ��ѿ��������ۤʤäƤ��ޤ���<br>�ץ������Basicǧ�ڤʤɤ˻��Ѥ��롢�����δĶ��ѿ��μ������Ԥ��ޤ���</p>
                                <ul class="ul">
                                	<li>PHP_AUTH_PW</li>
                                	<li>PHP_AUTH_USER</li>
                                </ul>
                            </div>
                        </aside>
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