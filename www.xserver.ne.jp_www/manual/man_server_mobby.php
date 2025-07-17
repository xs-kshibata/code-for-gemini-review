<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>��Х�����������Ȥο���ʬ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�.htaccess�פ��Ѥ���PC�ѡ���Х����ѤΥ����Ȥإ���������򿶤�ʬ������ˡ�ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">��Х�����������Ȥο���ʬ����</h3>
                

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">��Х�����������Ȥο���ʬ����</a>
                        <ul>
                            <li><a href="#link-a01">.htaccess���ɲä��뿶��ʬ������ˤĤ���</a></li>
                            <li><a href="#link-a02">(����)����ʬ��������ε��ҤˤĤ���</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">��Х�����������Ȥο���ʬ����</h4>
                    <div class="section_body">
                        <p><a href="man_server_htaccess.php">.htaccess</a>���Խ����뤳�Ȥˤ�ꡢPC�Ѥȥ�Х����ѤΥ����Ȥ˿���ʬ����ʤɤ�����򤹤뤳�Ȥ���ǽ�Ǥ���<br>
                        ���λ��Ȥߤϡ������������ξ����USER_AGENT�ˤ��ɤ߼�ꡢ������б������ڡ����ؿ���ʬ���뤳�ȤǼ¸����ޤ���</p>
                        
                        <p>�ʲ��οޤϳ�OS����Ρ�example.com�פؤΥ����������Ф��ơ�PC�Ѥȥ�Х����ѤΥ����Ȥ˿���ʬ���Ƥ��륤�᡼���Ǥ����ʤ�����OS���Ȥ˿���ʬ������ѹ����뤳�Ȥ��ǽ�Ǥ���</p>
                        <p><img class="img" src="../img/manual/man_server_mobby_1.png" alt="�Уá����ޡ��ȥե���ʤɡ���OS����Ʊ���ڡ����˥����������Ƥ����"></p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">.htaccess���ɲä��뿶��ʬ������ˤĤ���</h5>
                            <div class="block_body">
                                <p>�ʲ��Υ�������򻲹ͤˡ������ͤ�FTP�ΰ��ˤ���.htaccess�ե�������Խ����Ƥ���������<br>
                                ��Ǥϳ�OS���Ȥ˿���ʬ������ѹ������������Ƥ򡢼��פ�OS�Τ߷Ǻܤ��Ƥ���ޤ���<br>
                                ��­���Ƥ�����ʬ�Ϥ����ͤ����ȤǤΤ���ǧ�򤪴ꤤ�������ޤ���</p>
                                
                                <p>.htaccess���Խ���ˡ�ˤĤ��Ƥϡ�<a href="man_server_htaccess.php#edit">.htaccess���Խ�</a>�פ򤴻��Ȥ���������</p>
                                
                                <p class="note">�����ԡ����Ƥ����Ѥ������ϡ�<strong>http://example.com/sp/</strong>�פ���ʬ�򡢤����ͤΥ�Х����ѥ�����URL���ѹ����Ƥ���������</p>
                                <pre class="code">Options +FollowSymLinks
RewriteEngine On

# iPhone
RewriteCond %{HTTP_USER_AGENT} iPhone [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# Android
RewriteCond %{HTTP_USER_AGENT} Android.*Mobile [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# Windows Phone
RewriteCond %{HTTP_USER_AGENT} Windows\ Phone [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# iPod touch
RewriteCond %{HTTP_USER_AGENT} iPod [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]

# BlackBerry
RewriteCond %{HTTP_USER_AGENT} (BB10.*Mobile|BlackBerry) [NC]
RewriteRule ^(|index.html)$ http://example.com/sp/ [R]</pre>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">(����)����ʬ��������ε��ҤˤĤ���</h5>
                            <div class="block_body">
                                <p>.htaccess�ؤε��Ҥϡ���������Τ褦�ʹ����ˤʤäƤ��ޤ���</p>
                                <p class="mb0">�ʵ������</p>
                                <p><img class="img" src="../img/manual/man_server_mobby_8.png" alt=".htaccess�ؤε�����"></p>
                                <dl class="dl">
                                    <dt>(��1)��OS���̤��뵭�ҤˤĤ���</dt>
                                    <dd>
                                        <p>�����������Υ桼���������������(ü�����̾���)���������OS���̤��Ƥ��ޤ���<br>
                                        ���줾�첼���Τ褦�˼��̤��Ƥ��ޤ���</p>
                                        <ul class="ul ul_list_margin">
                                            <li>��<em class="font-bold">iPhone</em>�פ�ʸ���󤬴ޤޤ����<br>
                                            ��<em class="font-bold">iPhone</em>�η������ä����Ƚ��</li>
                                            <li>��<em class="font-bold">Android��Mobile</em>�פ�ʸ���󤬴ޤޤ����<br>
                                            ��<em class="font-bold">Android</em>�η������ä����Ƚ��</li>
                                            <li>��<em class="font-bold">Windows Phone</em>�פ�ʸ���󤬴ޤޤ����<br>
                                            ��<em class="font-bold">Windows Phone</em>�η������ä����Ƚ��</li>
                                            <li>��<em class="font-bold">BB10��Mobile���ޤ���BlackBerry</em>�פ�ʸ���󤬴ޤޤ����<br>
                                            ��<em class="font-bold">BlackBerry</em>�η������ä����Ƚ��</li>
                                        </ul>
                                    </dd>
                                    <dt>(��2)������쥯����ε��ҤˤĤ���</dt>
                                    <dd>
                                        <p>�ܥޥ˥奢��ˤ�����������ξ�硢<br><br>
                                        <em class="font-bold">http://example.com/</em><br>
                                        <em class="font-bold">http://example.com/index.html</em><br><br>
                                        �ؤΥ������������ä����ˡ�<br><br>
                                        <em class="font-bold">http://example.com/sp/</em><br><br>
                                        �ؤȥ�����쥯�Ȥ���ޤ���</p>
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