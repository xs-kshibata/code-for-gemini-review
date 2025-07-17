<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FastCGI�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�FastCGI�פȤϡ��ץ������¹Ի��˳����ץ����������֥����С�����ݻ���������ʹߤΡ֥ץ����ε�ư/��λ�פ��ά���뤳�Ȥǡ��ץ�����®����CPU��٤ηڸ���ޤ뵡ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">FastCGI�ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">FastCGI�ˤĤ���</a></li>
                    <li><a href="#link-b">�Ƽ�ץ�����FastCGI�� �б�����</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">FastCGI�ˤĤ���</h4>
                    <div class="section_body">

                        <p>��FastCGI�פȤϡ��ץ������¹Ի��˳����ץ����������֥����С�����ݻ����뤳�Ȥǡ�����ʹߡ��¹Ի��Ρ֥ץ����ε�ư/��λ�פ��ά����
                        ��®���䡢�ץ����ε�ư/��λ��ȼ��CPU�ؤ���٤�ڸ����뤳�Ȥǡ�<strong>®���̤�ͥ���Ȥ����⥸�塼����PHP��Ʊ���ν���ǽ�Ϥ����ư������</strong>�Ǥ���</p>
                        
                        <p>���١֥ץ����ε�ư�פ򤹤�ȡ�������֤ϡ֥ץ����ν�λ�פ�
                        ���뤳�Ȥʤ���ư��³���뤳�Ȥǡ��������֤�������û�̤ȡ��ץ����ε�ư/��λ��ȼ��CPU�ؤ���٤�ڸ����ޤ���</p>

                        
                        <p><img class="flex" src="../img/manual/man_server_php_fastcgi_1.png" alt="FastCGI�Ǥν������᡼��"></p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�Ƽ�ץ�����FastCGI��</h4>
                    <div class="section_body">
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>CGI��FastCGI����Ԥ���ˡ</dt>
                            <dd>
                                <p>CGI��FastCGI�Ȥ���ư������硢�ץ����γ�ĥ�Ҥ��<em class="font-bold">.fcgi</em>�פ��ѹ��ˤ��Ƥ���������</p>
                                <p>�ޤ�����ĥ�Ҥ��ѹ�������<em class="font-bold">.cgi</em>�פ�FastCGI�Ȥ���ư�������ˤϡ� ������.htaccess���ɵ����뤳�Ȥˤ�äơ�.cgi�פ�FastCGI�λ��Ѥ���ǽ�Ǥ���</p>
                                <pre class="code">AddHandler fcgid-script .cgi</pre>
                                <p class="note">��CGI��FastCGI����Ԥ��ˤ����äƤϡ�������CGI�ץ���༫�Τ�FastCGI���б����Ƥ���ɬ�פ�����ޤ���</p>
                            </dd>
                        </dl>
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