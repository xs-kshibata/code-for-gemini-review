<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHP�ΥС������ˤĤ���(�ܹԥ��ƥʥ���) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥ����Ѳ�ǽ��PHP�ΥС������ˤĤ��Ƥ䡢�����ġ���夫��PHP�С��������ڤ��ؤ�����ˡ�ˤĤ��Ƥ����⤷�Ƥ��ޤ���sv1999�����ǥ����С��Ķ��ΰܹԥ��ƥʥ󥹤���λ���Ƥ��ʤ����Ϥ�����򤴻��Ȥ���������">

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
            
                <h3 class="sub-ttl">PHP�ΥС������ˤĤ���(�ܹԥ��ƥʥ���)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�����Ѥ���������PHP�ΥС������</a></li>
                    <li><a href="#link-b">PHP�ΥС�������ڤ��ؤ�</a>
                        <ol>
                            <li><a href="#link-b01">1.��PHP Ver.���ءפ򥯥�å�</a></li>
                            <li><a href="#link-b02">2.�ѹ���ΥС�����������</a></li>
                        </ol>
                    </li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI��SSI��PHP�˴ؤ���֤褯��������</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">�����Ѥ���������PHP�ΥС������</h4>
                    <div class="section_body">
                        
                        <table class="table">
                            <thead>
                                <tr><th style="width:105px;">�С������</th><th>����</th></tr>
                            </thead>
                                <tr>
                                    <th>PHP 7.1.x</th>
                                    <td>
                                        <p>
                                            ���߸����˥��ݡ��Ȥ���Ƥ���С������Ǥ���<br>
                                            PHP7 �ϡ�PHP5 �� PHP4 ����Ӥ��ƥѥե����ޥ󥹤������˶�������Ƥ��ޤ���
                                        </p>
                                        <p class="note">
                                            ����PHP��®��(FastCGI)�פȡ֥���å���⥸�塼��(OPcache)�פ�<br>ɸ���ͭ���Ȥʤ�ޤ���<br>��FastCGI�פȡ�OPcache�פˤĤ��Ƥϡ� �ޥ˥奢��ڡ�����<a href="man_server_php_fastcgi.php">FastCGI�ˤĤ���</a>�פ� ��<a href="man_server_php_apc.php">APC/OPcache�ˤĤ���</a>�פ򤴻��Ȥ���������
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 7.0.x</th>
                                    <td rowspan="2">
                                        <p>
                                            ��С������Ǥ���<br>
                                            ����С�����󥢥åפ�ͽ��Ϥʤ����ῷ���Ǥ����ѤϿ侩���ޤ���<br>PHP 7.1.x �ؤΰܹԤ�侩���ޤ���
                                        </p>
                                        <p class="note">
                                            ����PHP��®��(FastCGI)�פȡ֥���å���⥸�塼��(OPcache)�פ�<br>ɸ���ͭ���Ȥʤ�ޤ���<br>��FastCGI�פȡ�OPcache�פˤĤ��Ƥϡ� �ޥ˥奢��ڡ�����<a href="man_server_php_fastcgi.php">FastCGI�ˤĤ���</a>�פ� ��<a href="man_server_php_apc.php">APC/OPcache�ˤĤ���</a>�פ򤴻��Ȥ���������
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.6.x</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.5.x</th>
                                    <td rowspan="4">
                                        <p>
                                            ��С������Ǥ���<br>
                                            ����С�����󥢥åפ�ͽ��Ϥʤ����ῷ���Ǥ����ѤϿ侩���ޤ���<br>PHP 7.1.x �ؤΰܹԤ�侩���ޤ���
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.4.x</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.2.17</th>
                                </tr>
                                <tr>
                                    <th>PHP 4.3.9</th>
                                </tr>
                                <tr>
                                    <th>PHP 5.3.3</th>
                                    <td rowspan="2">
                                        <p>
                                            ��С������Ǥ���<br>
                                            OS�٥�����ˤ��ѥå��ˤơ��ƶ����礭���ȼ������濴�˥������ƥ�������<br>�Ԥ��ޤ���<br>
                                            PHP 7.1.x �ؤΰܹԤ�侩���ޤ���
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP 5.1.6</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
            
                <section id="phpver-change" class="section">
                    <h4 class="section_ttl" id="link-b" style="margin-top:45px;">PHP�ΥС�������ڤ��ؤ�</h4>
                    <div class="section_body">
                        <div class="serial-box mb30">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.��PHP Ver.���ءפ򥯥�å�</h5>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���PHP Ver.���ءפ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_program_php_ver_1.png?date=220907" alt="PHPver.���ز��̤�"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.�ѹ���ΥС�����������</h5>
                                <div class="box_body">
                                    <p>���ߤΥС��������ǧ�������ѹ���ΥС������פ���ѹ���˾�ΥС����������򤯤�������</p>
                                    <p><img class="img" src="../img/manual/man_program_php_ver_2.png?date=180209" alt="�����С��ѥͥ��PHPver.�ڤ��ؤ��򥯥�å�"></p>
                                    <p>����塢�֥С��������ڤ��ؤ���פ򥯥�å����Ƥ���������</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
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