<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ץ������졦���ޥ�ɥѥ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С���ư���ǽ�ʥץ�������䤽�ΥС�����󡢥��ޥ�ɥѥ��ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">�ץ������졦���ޥ�ɥѥ�</h3>

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
                                        <p>�С������ 5.26.x �����Ѥ��������ޤ���<span class="font-xs">(��1)</span></p>
                                        <ul class="note-list">
                                           <li>��perl�⥸�塼��ΰ�����<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С������ꤴ�����������ޤ���</li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP</th>
                                    <td>
                                        <p>PHP8 / PHP7 / PHP5 �����Ѥ��������ޤ���</p>
                                        <ul class="ul">
                                            <li>PHP8( 8.3.x / 8.2.x / 8.1.x / 8.0.x )</li>
                                            <li>PHP7( 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x )</li>
                                            <li>PHP5( 5.6.x / 5.5.x / 5.4.x / 5.3.3 / 5.1.6 )</li>
                                        </ul>
                                        <ul class="note-list">
                                            <li>��PHP�С������ˤĤ��Ƥ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С������ꤴ�����������ޤ���</li>
                                            <li>����FastCGI�פȡ�OPcache�פޤ��ϡ�APC�פ�ɸ���ͭ���ˤʤäƤ���ޤ���</li>
                                            <li>���С��������ڤ��ؤ��ˤĤ��Ƥϡ���<a href="man_program_php_ver.php">PHP�ΥС�������ڤ��ؤ�</a>�פ򤴻��Ȥ���������</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ruby</th>
                                    <td>
                                    <p>�С������ 2.5.x �����Ѥ��������ޤ���<span class="font-xs">(��1)</span></p>
                                        <ul class="note-list">
                                            <li>�������ѤΥ����С���<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С������ꤴ�����������ޤ���</li>
                                        </ul>
                                   </td>
                                </tr>
                                <tr>
                                    <th>Python</th>
                                    <td>�С������ 2.7.x / 3.4.x / 3.6.x �����Ѥ��������ޤ���</td>
                                </tr>
                                <tr>
                                    <th>SSI</th>
                                    <td>�����Ѥ��������ޤ���<br>AddHandler server-parsed .html .htm �ȵ��Ҥ��� .htaccess �����֤��뤳�Ȥǡ�SSI �� .html �� .htm ��ư����뤳�Ȥ���ǽ�Ǥ����������С���٤ȥ������ƥ��̤���侩���Ƥ���ޤ���</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="note">
                            (��1) �쥵���С�(sv16000����)�Τ�����<a href="../spec_sv_replace.php">�����ץ����ƥ�ؤΰܹԥ��ƥʥ�</a>����λ���Ƥ��ʤ������С������Ѥξ�硢�ʲ��λ��ͤȤʤ�ޤ���<br>
                            ��Perl���С������ 5.16.x / 5.26.x �����Ѥ��������ޤ���<br>
                            ��Ruby���С������ 2.0.x �����Ѥ��������ޤ���
                        <p>
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
                                <tr><th>Perl 5.26.x</th><td>/usr/bin/perl</td></tr>
                                <tr><th>Perl 5.16.x</th><td>/usr/bin/perl516</td></tr>
                                <tr><th>PHP 8.3.x(CGI)</th><td>/usr/bin/php8.3-cgi ���� /usr/bin/php-fcgi8.3</td></tr>
                                <tr><th>PHP 8.3.x(CLI)</th><td>/usr/bin/php8.3</td></tr>
                                <tr><th>PHP 8.2.x(CGI)</th><td>/usr/bin/php8.2-cgi ���� /usr/bin/php-fcgi8.2</td></tr>
                                <tr><th>PHP 8.2.x(CLI)</th><td>/usr/bin/php8.2</td></tr>
                                <tr><th>PHP 8.1.x(CGI)</th><td>/usr/bin/php8.1-cgi ���� /usr/bin/php-fcgi8.1</td></tr>
                                <tr><th>PHP 8.1.x(CLI)</th><td>/usr/bin/php8.1</td></tr>
                                <tr><th>PHP 8.0.x(CGI)</th><td>/usr/bin/php8.0-cgi ���� /usr/bin/php-fcgi8.0</td></tr>
                                <tr><th>PHP 8.0.x(CLI)</th><td>/usr/bin/php8.0</td></tr>
                                <tr><th>PHP 7.4.x(CGI)</th><td>/usr/bin/php7.4-cgi ���� /usr/bin/php-fcgi7.4</td></tr>
                                <tr><th>PHP 7.4.x(CLI)</th><td>/usr/bin/php7.4</td></tr>
                                <tr><th>PHP 7.3.x(CGI)</th><td>/usr/bin/php7.3-cgi ���� /usr/bin/php-fcgi7.3</td></tr>
                                <tr><th>PHP 7.3.x(CLI)</th><td>/usr/bin/php7.3</td></tr>
                                <tr><th>PHP 7.2.x(CGI)</th><td>/usr/bin/php7.2-cgi ���� /usr/bin/php-fcgi7.2</td></tr>
                                <tr><th>PHP 7.2.x(CLI)</th><td>/usr/bin/php7.2</td></tr>
                                <tr><th>PHP 7.1.x(CGI)</th><td>/usr/bin/php7.1-cgi ���� /usr/bin/php-fcgi7.1</td></tr>
                                <tr><th>PHP 7.1.x(CLI)</th><td>/usr/bin/php7.1</td></tr>
                                <tr><th>PHP 7.0.x(CGI)</th><td>/usr/bin/php7.0-cgi ���� /usr/bin/php-fcgi7.0</td></tr>
                                <tr><th>PHP 7.0.x(CLI)</th><td>/usr/bin/php7.0</td></tr>
                                <tr><th>PHP 5.6.x(CGI)</th><td>/usr/bin/php5.6-cgi ���� /usr/bin/php-fcgi5.6</td></tr>
                                <tr><th>PHP 5.6.x(CLI)</th><td>/usr/bin/php5.6</td></tr>
                                <tr><th>PHP 5.5.x(CGI)</th><td>/usr/bin/php-fcgi5.5</td></tr>
                                <tr><th>PHP 5.5.x(CLI)</th><td>/usr/bin/php5.5</td></tr>
                                <tr><th>PHP 5.4.x(CGI)</th><td>/usr/bin/php-fcgi5.4</td></tr>
                                <tr><th>PHP 5.4.x(CLI)</th><td>/usr/bin/php5.4</td></tr>
                                <tr><th>PHP 5.3.x(CGI)</th><td>/usr/bin/php-fcgi5.3</td></tr>
                                <tr><th>PHP 5.3.x(CLI)</th><td>/usr/bin/php5.3</td></tr>
                                <tr><th>PHP 5.1.x(CGI)</th><td>/usr/bin/php-fcgi5.1</td></tr>
                                <tr><th>PHP 5.1.x(CLI)</th><td>/usr/bin/php5.1</td></tr>
                                <tr><th>Ruby 2.5.x</th><td>/usr/bin/ruby</td></tr>
                                <tr><th>Python 2.7.x</th><td>/usr/bin/python</td></tr>
                                <tr><th>Python 3.4.x</th><td>/usr/bin/python3.4</td></tr>
                                <tr><th>Python 3.6.x</th><td>/usr/bin/python3.6</td></tr>
                                <tr><th>nkf</th><td>/usr/bin/nkf</td></tr>
                                <tr><th>sendmail</th><td>/usr/sbin/sendmail</td></tr>
                                <tr><th>gzip</th><td>/usr/bin/gzip</td></tr>
                                <tr><th>zip</th><td>/usr/bin/zip</td></tr>
                                <tr><th>unzip</th><td>/usr/bin/unzip</td></tr>
                            </tbody>
                        </table>
                        <ul class="note-list">
                            <li>�����ޥ�ɥѥ�������<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Υ����С����󤫤�⤴�����������ޤ���</li>
                            <li>���쥵���С�(sv16000����)�����Ѥξ�硢��/usr/bin/perl�ס�/usr/bin/perl516�ס�/usr/bin/ruby�פ�¹Ԥ����ݤΥС������ϡ�Perl 5.16.x�ס�Ruby 2.0.x�פȤʤ�ޤ���
                            </li>
                            <li>���쥵���С�(sv16000����)�Τ�����(sv30��sv1510��sv3001��sv7800)�����Ѥξ�硢�����ץ����ƥ�ؤΰܹԥ��ƥʥ󥹤�缡�»ܤ��Ƥ���ޤ��� �ܹԥ��ƥʥ󥹴�λ�ޤǤϡ�/usr/bin/perl�ס�/usr/bin/perl516�ס�/usr/bin/ruby�פ�¹Ԥ����ݤΥС������ϡ�Perl 5.16.x�ס�Ruby 2.0.x�פȤʤ�ޤ���</li>
                        </ul>
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