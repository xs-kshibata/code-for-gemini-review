<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���������������顼��(�ܹԥ��ƥʥ���) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á֥����������ס֥��顼���פη������ǧ���˴ؤ��뤴����Ǥ������å��������С��Ǥϥ��������������顼���򥵡��С��ѥͥ뤫���ñ�˱������뤳�Ȥ���ǽ�Ǥ���sv1999�����ǥ����С��Ķ��ΰܹԥ��ƥʥ󥹤���λ���Ƥ��ʤ����Ϥ�����򤴻��Ȥ���������">

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
            
                <h3 class="sub-ttl">��(�ܹԥ��ƥʥ���)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">���ʥ��������������顼����</a></li>
                    <li><a href="#link-b">�����������ˤĤ���</a></li>
                    <li><a href="#link-c">���Υ����������ˤĤ���</a></li>
                    <li><a href="#link-d">���顼���ˤĤ���</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">���ʥ��������������顼����</h4>
                    <div class="section_body">
                        
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܥڡ����Υޥ˥奢��ˤĤ���</h5>
                            <div class="msg_body">
                                <p>
                                    �ܥڡ����Υޥ˥奢��ϡ������С��ֹ椬sv1��sv1999�Υ����С��ˤ����ƥϡ��ɥ���������������Ԥä�����꿷���������С��Ķ��ؤΰܹԥ��ƥʥ󥹤μ»������󶡻��ͤ˴�Ť�������ˤʤ�ޤ���
                                    ���ƥʥ󥹤μ»ܾ����ϡ�<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4057">�ܹԥ������塼��ˤĤ���</a>�򤴻��Ȥ���������
                                </p>
                                <p class="mb0">
                                    �������ʤ������С������ѤΤ����ͤϡ��ޥ˥奢���<a href="man_server_log.php">��</a>�פ򤴻��Ȥ���������
                                </p>
                            </div>
                        </aside>
                    
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥��ե�����פ�ꡢ�����������䥨�顼���μ�������ǽ�Ǥ���</p>
                        <p><img class="img" src="../img/manual/man_server_log_1.png" alt="�����С��ѥͥ�Υ��ե�������̤Υ����꡼�󥷥�å�"></p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">�����������ˤĤ���</h4>
                    <div class="section_body">
                    
                        <p>�����������λ��ͤϰʲ��ΤȤ���Ǥ���</p>
                        
                        <table class="table table_responsive">
                            <tbody>
                                <tr>
                                    <th class="w30per-m w30per-l">���ե�����̾</th>
                                    <td>
                                        <p>�ɥᥤ��̾.access_log</p>
                                        <p class="border border_blue break-all">
                                            <b>(�㡧example.jp�ɥᥤ��ξ��)</b><br>
                                            example.jp.access_log
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>���ե�������ñ��</th>
                                    <td>�ɥᥤ�󡦥��֥ɥᥤ��ñ��</td>
                                </tr>
                                <tr>
                                    <th>������</th>
                                    <td>�ƥ����ȷ���</td>
                                </tr>
                                <tr>
                                    <th>���ե�������������</th>
                                    <td>��������3�����ˡ���������3:00����������3:00�ޤǤΥ��ե����������</td>
                                </tr>
                                <tr>
                                    <th>����������</th>
                                    <td>
                                        <p>�����������ϲ����ν�ǽ��Ϥ��쵭Ͽ����ޤ���</p>
                                        <ul class="ul tal">
                                            <li>IP���ɥ쥹</li>
                                            <li>���饤����ȥ桼����̾(*)</li>
                                            <li>ǧ�ڥ桼����̾(*)</li>
                                            <li>�����ॹ�����</li>
                                            <li>"�᥽�å� URI+QUERY_STRING"</li>
                                            <li>���ơ�����</li>
                                            <li>ž����(ñ��:�Х���)</li>
                                            <li>��ե���(����������URL)</li>
                                            <li>�桼�������������</li>
                                        </ul>
                                        <p class="note">��(*)���̾�����-�פǤ���</p>
                                        <p class="border border_blue">
                                            <b>�ʵ������</b><br>
                                            192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">���Υ����������ˤĤ���</h4>
                    <div class="section_body">
                    
                        <p>���Υ����������ǡ�����ɬ�פʾ��ϡ�����¸��������פ����¸���֤������Ԥ����Ȥǡ����ե����뤬�����С�(FTP�ΰ�)�����������ޤ���</p>
                        
                        <table class="table table_responsive">
                            <tbody>
                                <tr><th>���ե������������</th><td>/home/�����С�ID/�ɥᥤ��̾/log/</td></tr>
                                <tr>
                                    <th>���ե�����̾</th>
                                    <td>
                                        <p>�ɥᥤ��̾.access_log.����</p>
                                        <p class="border border_blue break-all">
                                            <b>(�㡧example.jp�ɥᥤ���1�������Υ��ե�����ξ�)</b><br>
                                            example.jp.access_log.1
                                        </p>
                                    </td>
                                </tr>
                                <tr><th>���ե�������ñ��</th><td>�ɥᥤ�󡦥��֥ɥᥤ��ñ��</td></tr>
                                <tr><th>������</th><td>�ƥ����ȷ��� </td></tr>
                                <tr><th>���ե�������������</th><td>�轵���˸���5�����ˡ�����ʬ�Υ��ե����������</td></tr>
                            </tbody>
                        </table>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">���顼���ˤĤ���</h4>
                    <div class="section_body">
                    
                        <p>��������ɤǤ��륨�顼���λ��ͤˤĤ��Ƥϲ������̤�Ǥ���</p>
                        <table class="table table_responsive">
                            <tbody>
                                <tr>
                                    <th>���ե�����̾</th>
                                    <td>
                                        <p>�ɥᥤ��̾.error_log</p>
                                        <p class="border border_blue break-all">
                                            <b>(�㡧example.jp�ɥᥤ��ξ��)</b><br>
                                            example.jp.error_log
                                        </p>
                                    </td>
                                </tr>
                                <tr><th>���ե�������ñ��</th><td>�ɥᥤ�󡦥��֥ɥᥤ��ñ��</td></tr>
                                <tr><th>������</th><td>�ƥ����ȷ��� </td></tr>
                                <tr><th>���ե�������������</th><td>����3���ʹߤΥ���������(����AM3���˥��ꥢ���Ƥ��ޤ�)</td></tr>
                            </tbody>
                        </table>
                        <p class="note">�����顼�Ȥ��ƽ��Ϥ�������Ƥϥץ�����ڡ��������ˤ��ۤʤ�ޤ���</p>
                        
                        <div class="border border_blue">
                            <em class="font-bold">��ɽ�����</em><br>
                            ��404���顼(Not Found)<br>
                            [Mon Sep 30 17:44:39 2013] [error] [client 192.0.2.0] File does not exist: /home/example/example.xserver.jp/public_html/index.php
                        </div>
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