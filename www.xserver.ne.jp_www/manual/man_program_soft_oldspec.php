<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ץ������졦���ޥ�ɥѥ�(�ܹԥ��ƥʥ���) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С���ư���ǽ�ʥץ�������䤽�ΥС�����󡢥��ޥ�ɥѥ��ˤĤ��Ƶ��ܤ��Ƥ��ޤ���sv1999�����ǥ����С��Ķ��ΰܹԥ��ƥʥ󥹤���λ���Ƥ��ʤ����Ϥ�����򤴻��Ȥ���������">

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
            
                <h3 class="sub-ttl">�ץ������졦���ޥ�ɥѥ�(�ܹԥ��ƥʥ���)</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">���å��������С��ǻ��ѤǤ���ץ�������</a></li>
                    <li><a href="#link-b">���ޥ�ɥѥ�����</a></li>
                </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_cgi.php">CGI��SSI��PHP�˴ؤ���֤褯��������</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">���å��������С��ǻ��ѤǤ���ץ�������</h4>
                    <div class="section_body">

                        
                        <table class="table">
                            <thead>
                            <tr><th>����</th><th>����</th></tr>
                            </thead>
                        <tbody>
                            <tr>
                                <th>Perl</th>
                                    <td>
                                        <p>�С������ 5.8.x �����Ѥ��������ޤ���</p>
                                        <p class="note">��perl�⥸�塼��ΰ�����<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С������ꤴ�����������ޤ���</p>
                                    </td>
                            </tr>
                            <tr>
                                <th>PHP</th>
                                <td>
                                    <p>PHP7 / PHP5 / PHP4 ������ĺ���ޤ���</p>
                                    <ul class="ul">
                                        <li>PHP7( 7.1.x / 7.0.x )</li>
                                        <li>PHP5( 5.6.x / 5.5.x / 5.4.x / 5.3.3 / 5.2.17 / 5.1.6 )</li>
                                        <li>PHP4( 4.3.9 )</li>
                                    </ul>
                                    <ul class="note-list">
                                        <li>��PHP�С������ˤĤ��Ƥ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С������ꤴ�����������ޤ���</li>
                                        <li>��PHP 7.1.x ��PHP 7.0.x ��PHP 5.6.x �ˤĤ��Ƥϡ���FastCGI�פȡ�OPcache�פ�ɸ���ͭ���ˤʤäƤ���ޤ���</li>                                        
                                        <li>���С��������ڤ��ؤ��ˤĤ��Ƥϡ���<a href="man_program_php_ver.php">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ���������</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Ruby</th>
                                    <td>�С������ 1.8.5 / 1.9.3 / 2.0.0 �����Ѥ��������ޤ���</td>
                            </tr>
                            <tr>
                                <th>Python</th>
                                    <td>�С������ 2.4.3 / 2.7.4 / 3.3.1 �����Ѥ��������ޤ���</td>
                            </tr>
                            <tr>
                                <th>SSI</th>
                                    <td>�����Ѥ��������ޤ���<br>AddHandler server-parsed .html .htm �ȵ��Ҥ��� .htaccess �����֤��뤳�Ȥǡ�SSI �� .html �� .htm ��ư����뤳�Ȥ���ǽ�Ǥ����������С���٤ȥ������ƥ��̤���侩���Ƥ���ޤ���</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">���ޥ�ɥѥ�����</h4>
                    <div class="section_body">
                        <table class="table table_striped mb5">
                            <thead>
                                <tr><th>���ޥ��</th><th>�ѥ�</th></tr>
                            </thead>
                            <tbody>
                                <tr><th>Perl</th><td>/usr/bin/perl ���� /usr/local/bin/perl</td></tr>
                                <tr><th>PHP 7.1.x</th><td>/usr/bin/php7.1</td></tr>
                                <tr><th>PHP 7.0.x</th><td>/usr/bin/php7.0</td></tr>
                                <tr><th>PHP 5.6.x</th><td>/usr/bin/php5.6</td></tr>
                                <tr><th>PHP 5.5.x</th><td>/usr/bin/php5.5</td></tr>
                                <tr><th>PHP 5.4.x</th><td>/usr/bin/php5.4</td></tr>
                                <tr><th>PHP 5.3.3</th><td>/usr/bin/php5.3</td></tr>
                                <tr><th>PHP 5.2.17</th><td>/usr/bin/php5.2</td></tr>
                                <tr><th>PHP 5.1.6</th><td>/usr/bin/php5</td></tr>
                                <tr><th>PHP 4.3.9</th><td>/usr/bin/php</td></tr>
                                <tr><th>Ruby1.8.5</th><td>/usr/bin/ruby</td></tr>
                                <tr><th>Ruby1.9.3</th><td>/usr/bin/ruby1.9.3</td></tr>
                                <tr><th>Ruby2.0.0</th><td>/usr/bin/ruby2.0.0</td></tr>
                                <tr><th>Python2.4.3</th><td>/usr/bin/python</td></tr>
                                <tr><th>Python2.7.4</th><td>/usr/bin/python2.7</td></tr>
                                <tr><th>Python3.3.1</th><td>/usr/bin/python3.3</td></tr>
                                <tr><th>nkf</th><td>/usr/bin/nkf</td></tr>
                                <tr><th>sendmail</th><td>/usr/sbin/sendmail</td></tr>
                                <tr><th>gzip</th><td>/usr/bin/gzip</td></tr>
                                <tr><th>zip</th><td>/usr/bin/zip</td></tr>
                                <tr><th>unzip</th><td>/usr/bin/unzip</td></tr>
                                <tr><th>lynx</th><td>/usr/bin/lynx</td></tr>
                            </tbody>
                        </table>
                        <p class="note">�����ޥ�ɥѥ�������<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С����󤫤�⤴�����������ޤ���</p>

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