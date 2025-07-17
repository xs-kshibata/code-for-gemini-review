<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�����С����Ͱ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С�����˴ؤ�����ͤΰ����Ǥ���ž���̤�ɥ�����ȥ롼�ȡ��ǥե���ȥɥ�����ȤˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
                        <li><a href="#link-a">�����С���Ϣ�λ��Ͱ���</a></li>
                        <li><a href="#link-b">�ۡ���ڡ�����Ϣ�λ��Ͱ���</a></li>
                    </ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�����С���Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                    
                        <table class="table mb5">
                            <thead>
                                <tr><th>��ǽ</th><th>����</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>OS</th>
                                    <td>Linux</td>
                                </tr>
                                <tr>
                                    <th>vCPU</th>
                                    <td>256����<p class="note">��������λ����ˤ�ꡢ�ۤʤ뤳�Ȥ�����ޤ���</p></td>
                                </tr>
                                <tr>
                                    <th>����</th>
                                    <td>
                                        <p>
                                            1.5TB
                                        </p>
                                        <p class="note">
                                            ��������λ����ˤ�ꡢ�ۤʤ뤳�Ȥ�����ޤ���<br>
                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��֥����С�����ץ�˥塼�ǳ�ǧ����ǽ�Ǥ���
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>RAID����</th>
                                    <td>RAID10</td>
                                </tr>
                                <tr>
                                    <th>̵���ȼ�SSL</th>
                                    <td>
                                        ̵����̵���¤��ȼ�SSL�����Ѥ��뤳�Ȥ���ǽ�Ǥ���(<a href="../functions/service_ssl.php#free-ssl">�ܺ�</a>)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cron</th>
                                    <td>���Ѳ�ǽ�Ǥ���</td>
                                </tr>
                                <tr>
                                    <th>SSH</th>
                                    <td>���Ѳ�ǽ�Ǥ���</td>
                                </tr>
                                <tr>
                                    <th>telnet</th>
                                    <td>���ѤǤ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>mod_rewrite</th>
                                    <td>���Ѳ�ǽ�Ǥ���</td>
                                </tr>
                                <tr>
                                    <th>.htaccess</th>
                                    <td>���Ѳ�ǽ�Ǥ���</td>
                                </tr>
                                <tr>
                                    <th>ž����</th>
                                    <td>
                                        <p>̵���¤Ǥ���</p>
                                        <p class="note">���ͥåȥ���䥵���С����Ф��Ʋ������٤��ݤ�����ˤϡ����¤�Ԥ���礬����ޤ���</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�꥽�����ݾ�</th>
                                    <td>
                                        <p>�����С����Ȥ˥꥽�������ݾ��ͤ��ۤʤ�ޤ���</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>sv13001.xserver.jp �ʹߤΥ����С�</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">�����������</em>��CPU ����6���� / ���� 8GB</li>
                                                    <li><em class="font-bold">�ץ�ߥ���</em>��CPU ����8���� / ���� 12GB</li>
                                                    <li><em class="font-bold">�ӥ��ͥ�</em>��CPU ����10���� / ���� 16GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>sv10001��sv13000.xserver.jp �Υ����С�</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">�����������</em>��CPU ����4���� / ���� 4GB</li>
                                                    <li><em class="font-bold">�ץ�ߥ���</em>��CPU ����6���� / ���� 8GB</li>
                                                    <li><em class="font-bold">�ӥ��ͥ�</em>��CPU ����8���� / ���� 12GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>sv2000��sv2399.xserver.jp�����С�</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">�����������</em>��CPU ����4���� / ���� 4GB</li>
                                                    <li><em class="font-bold">�ץ�ߥ���</em>��CPU ����6���� / ���� 8GB</li>
                                                    <li><em class="font-bold">�ӥ��ͥ�</em>��CPU ����8���� / ���� 12GB</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i>��������Υ����С���sv**.xtwo.ne.jp���оݡ�</dt>
                                            <dd>
                                                �꥽�����ݾڤʤ�
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </div>
                </section>
                <!-- /.section -->
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp.php">�ۡ���ڡ����˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�ۡ���ڡ�����Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                        <table class="table mb5">
                            <thead>
                                <tr><th>��ǽ</th><th>����</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>�����֥����С�</th>
                                    <td>
                                        <p class="break-all">
                                            apache 2.4.x��nginx
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�ɥ�����ȥ롼��</th><td><p>public_html</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>�ɥ�����ȥ롼�ȤȤ�</dt>
                                            <dd>�ۡ���ڡ����Υǡ�����HTML�ե����������ǡ����ե�����ʤɡˤ��֤��ե�����Ǥ���<br>
                                            �ۡ���ڡ����Ȥ��Ƹ����������ǡ�����ɬ�����Υե�����ʲ��˥��åץ��ɤ�ɬ�פǤ���</dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th id="man_server_spec_default_document">�ǥե���ȥɥ������</th>
                                    <td>
                                        <ol class="ol break-all">
                                            <li>index.html</li>
                                            <li>index.htm</li>
                                            <li>index.shtml</li>
                                            <li>index.cgi</li>
                                            <li>index.php</li>
                                            <li>default_page.html</li>
                                        </ol>
                                       <p>�嵭�ϥ֥饦���Ǥ�ɽ����ͥ���٤��⤤����¤�Ǥ��ޤ���<br>���ˡ�index.htm�פ򥢥åץ��ɤ�����硢��http://example.com/�פǥ�����������ȡ���index.html�פ�ͥ��Ū��ɽ������Ƥ��ޤ��ޤ���<br>���κݤϡ�index.html�פ������뤳�Ȥǡ�index.htm�פ�ɽ�������褦�ˤʤ�ޤ���</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>�ǥե���ȥɥ�����ȤȤ�</dt>
                                            <dd>�֥饦���Ǳ�������ݤ˥ե�����̾���ά���ƥ��ɥ쥹�����Ϥ��뤳�Ȥ��Ǥ������̤�̾���Υե�����Ǥ���<br>
                                            �̾�ۡ���ڡ�����Υǡ�����֥饦���ǳ������ϡ���http://�ɥᥤ��̾/�ե�����̾�פΤ褦�˥ե�����̾��ޤ�ƥ��ɥ쥹�����Ϥ��ʤ���Фʤ�ޤ���<br>
                                            �ǥե���ȥɥ�����Ȥϡ�http://�ɥᥤ��̾/�פΤ褦�˥ե�����̾���ά���Ƴ������Ȥ��Ǥ��ޤ���<br>
                                            ���Τ��ᡢ�ȥåץڡ����˻��Ѥ���ե�����ϥǥե���ȥɥ�����Ȥˤ������Ѥ��Ƥ��������� 
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th>mod_rewrite</th>
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