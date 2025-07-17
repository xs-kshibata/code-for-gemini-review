<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ǡ����١������Ͱ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åǡ����١����Τ����Ѥ˴ؤ�����ͤΰ����Ǥ���">

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
					<li><a href="#link-a">�ǡ����١�����Ϣ�λ��Ͱ���</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                </ul>
                
                <p>���å��������С��Ǥϥǡ����١����Ķ��Ȥ���MySQL��MariaDB���󶡤��Ƥ���ޤ���</p>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ǡ����١�����Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                        <table class="table break-word">
                            <thead>
                                <tr>
                                    <th>��ǽ</th>
                                    <th>����</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>�ǡ����١��������С�</th>
                                    <td>
                                    <p>�����Τ����줫�������Ѳ�ǽ�Ǥ���(�����ѥ����С��ˤ�äưۤʤ�ޤ�)</p>
                                        <ul class="ul">
                                            <li>MySQL 5.7.x</li>
											<li>MariaDB 10.5.x</li>
                                        </ul>
                                        <p>���ȥ졼�����󥸥�ϡ���MyISAM�פ���ӡ�InnoDB�פ��б����Ƥ��ޤ���</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�ǡ����١����ۥ���̾</th>
                                    <td>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ�MySQL����פǳ�ǧ���뤳�Ȥ��Ǥ��ޤ�

                                        
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>MySQLʸ��������</th>
                                    <td>UTF-8(utf8mb4)��UTF-8(utf8)��EUC-JP��Shift-JIS��Binary�����������</td>
                                </tr>
                                <tr>
                                    <th>�ǡ����١���������</th>
                                    <td>
                                        �����Ѳ�ǽ��MySQL�ǡ����١�������MySQL�桼������̵���¤Ǥ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>�ǡ����١�������</th>
                                    <td>
                                        <p>MySQL�ǡ����١���1�ĤˤĤ��������Ѥ������������̤��ܰ¤ϡ�5GB�פǤ���</p>
                                        <p class="note mb0">���������̤�������Ķ�᤹����䡢DB����٤��礭�����ϡ��꥽�������¤��оݤȤʤ��礬����ޤ���</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�����ġ���</th>
                                    <td>phpMyAdmin</td>
                                </tr>
                                <tr>
                                    <th>PostgreSQL</th>
                                    <td>���ѤǤ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>SQLite</th>
                                    <td>���Ѳ�ǽ�Ǥ���</td>
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