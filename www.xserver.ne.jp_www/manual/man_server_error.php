<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�Ƽ泌�顼��å����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���Web������������ȯ��������ɽŪ�ʥ��顼��å������ȹͤ������װ��˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�Ƽ泌�顼��å�����</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">�Ƽ泌�顼��å�����</a>
                        <ul>
                            <li><a href="#link-a01">401 Unauthorized</a></li>
                            <li><a href="#link-a02">403 Forbidden</a></li>
                            <li><a href="#link-a03">404 Not Found</a></li>
                            <li><a href="#link-a07">429 Too Many Requests</a></li>
                            <li><a href="#link-a04">500 Internal Server Error</a></li>
                            <li><a href="#link-a05">503 Service Temporarily Unavailable</a></li>
                            <li><a href="#link-a06">510 Not Extended</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�Ƽ泌�顼��å�����</h4>
                    <div class="section_body">
                        <p>��ɽŪ�ʥ��顼��å������ϲ����Ȥʤ�ޤ���</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">401 Unauthorized</h5>
                            <div class="block_body">
                                <p>�ѥ�������¡ʥ����С��ѥͥ��Ρ֥����������¡ס�Basicǧ�ڡˤǥѥ���ɤ���㤷������ȯ�����륨�顼 �Ǥ���</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>�桼����̾���⤷���ϥѥ���ɤ˸�꤬����</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">403 Forbidden</h5>
                            <div class="block_body">
                                <p>�����������¤��ʤ�����ȯ�����륨�顼�Ǥ���</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>�����С��Τ�����ͭ���Ǥʤ��ʥ����С��Ρ����׾��֡�</li>
                                            <li>�ɥᥤ��ե�������[ public_html ]�˥ǥե���ȥɥ������(index.html �� index.htm)�����åץ��ɤ���Ƥ��ʤ�</li>
                                            <li>[ public_html ]�ʤޤ��Ͼ�̥ե�����ˤ��������Ƥ���</li>
                                            <li>�����IP���ɥ쥹���饢����������ݤ��Ƥ���</li>
                                            <li>�ѡ��ߥå����˸�꤬����</li>
                                            <li>.htaccess�ε��Ҥ˸�꤬����</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">404 Not Found</h5>
                            <div class="block_body">
                                <p>�������������ե����뤬���Ĥ���ʤ�����ȯ�����륨�顼�Ǥ���</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>������������URL�˸�꤬����</li>
                                            <li>�͡��ॵ���С������ꤵ��Ƥ��ʤ�</li>
                                            <li>����������Υե����뤬¸�ߤ��ʤ��ʥ��åץ��ɤ���Ƥ��ʤ���</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-a07">429 Too Many Requests</h5>
                            <div class="block_body">
                                <p>�����������褦�Ȥ����ڡ�����ɽ���Ǥ��ޤ���Ǥ����� ���Υ��顼�ϡ�����������¿���Υꥯ�����Ȥ����ä����Ȥ��̣���ޤ������֤��֤��ƺ��٥����������Ƥ���������</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>�ִ�Ū�����̤�Web�������������ä�</li>
                                            <li>�����ץ����ˤ�����̤Υꥯ�����Ȥ�ȯ������</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">500 Internal Server Error</h5>
                            <div class="block_body">
                                <p>�ץ���༫�Τإ��������ϹԤ��Ƥ��뤬���¹Ԥ��Ǥ��ʤ��ʽ�������λ���ʤ��˾���ȯ�����륨�顼�Ǥ���<br>
                                    �����С��ѥͥ�֥��顼���פ�ꥨ�顼�����������ɤ������顼���Ƥ򤴳�ǧ����������</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb05">
                                            <li>CGI��PHP��Ʊ����³����¿���ʤꡢ���������ñ�̤Υ꥽�������¤ȤʤäƤ���</li>
                                            <li>�ץ�����ʸˡ��CGI/PHP�Υ����������ɡˤ˸�꤬����</li>
                                            <li>.htaccess�ε��Ҥ˸�꤬����</li>
                                            <li>�ѡ��ߥå����˸�꤬����</li>
                                            <li>php.ini���������Ƥ˸�꤬����</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a05">503 Service Temporarily Unavailable</h5>
                            <div class="block_body">
                                <p>Ʊ����³����Ʊ�������������ˤ�¿������CGI/PHP�ʤɤ���٤��礭�����ΰ��Ū��ɽ������륨�顼�Ǥ���</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>WEB�����ȤؤΥ���������¿�������С�����٤������äƤ���</li>
                                            <li>WEB�����ȹ����ˤ��Ʊ����³���������䤹����¤�ȤʤäƤ���</li>
                                            <li>PHP/CGI�ץ����ʤɤ���٤��礭��</li>
                                            <li>PHP/CGI�ץ����Ǹ�ư�ȯ�����Ƥ���</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a06">510 Not Extended</h5>
                            <div class="block_body">
                                <p>��Ū�ե������html�ե����롢�����ե��������ˤإ������������椷�����ΰ��Ū��ɽ������륨�顼�Ǥ���</p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ͤ������װ�</dt>
                                    <dd>
                                        <ul class="ul mb0">
                                            <li>WEB�����ȤؤΥ������������椷�Ƥ���</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        
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