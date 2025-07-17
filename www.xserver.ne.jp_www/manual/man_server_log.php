<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á֥����������פη������ǧ���˴ؤ��뤴����Ǥ������å��������С��Ǥϥ����������򥵡��С��ѥͥ뤫���ñ�˱������뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">����������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">����������</a></li>
                                <li><a href="#link-previous-b">�����������ˤĤ���</a></li>
                                <li><a href="#link-previous-c">���Υ����������ˤĤ���</a></li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">����������</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥����������פ�ꡢ�����������μ�������ǽ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_log_1.png" alt="�����С��ѥͥ�Υ��ե�������̤Υ����꡼�󥷥�å�"></p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�����������ˤĤ���</h4>
                                <div class="section_body">

                                    <p>�����������λ��ͤϰʲ��ΤȤ���Ǥ���</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                            <tr>
                                                <th class="w30per-m w30per-l">���ե�����̾</th>
                                                <td>
                                                    <p>�ɥᥤ��̾.access_log_ǯ����</p>
                                                    <p class="border border_blue break-all">
                                                        <b>(�㡧example.jp�ɥᥤ���2016ǯ1��1������¸���줿���ξ��)</b><br>
                                                        example.jp.access_log_20160101
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>���ե�������ñ��</th>
                                                <td>�ɥᥤ��ñ��</td>
                                            </tr>
                                            <tr>
                                                <th>������</th>
                                                <td>�ƥ����ȷ���</td>
                                            </tr>
                                            <tr>
                                                <th>���ե�������������</th>
                                                <td>��������4�����ˡ����30��ʬ�Υ��ե���������̤�����</td>
                                            </tr>
                                            <tr>
                                                <th>����������</th>
                                                <td>
                                                    <p>�����������ϲ����ν�ǽ��Ϥ��쵭Ͽ����ޤ���</p>
                                                    <ul class="ul tal">
                                                        <li>�С������ۥ���</li>
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
                                                        example.jp 192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">���Υ����������ˤĤ���</h4>
                                <div class="section_body">

                                    <p>���Υ����������ǡ�����ɬ�פʾ��ϡ�����¸��������פ����¸���֤������Ԥ����Ȥǡ����ե����뤬�����С�(FTP�ΰ�)�����������ޤ���</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                            <tr><th>���ե������������</th><td>/home/�����С�ID/�ɥᥤ��̾/log/</td></tr>
                                            <tr>
                                                <th>���ե�����̾</th>
                                                <td>
                                                    <p>�ɥᥤ��̾.access_log_ǯ����.gz</p>
                                                    <p class="border border_blue break-all">
                                                        <b>(�㡧example.jp�ɥᥤ���2016ǯ1��1������¸���줿���ξ��)</b><br>
                                                        example.jp.access_log_20160101.gz
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr><th>���ե�������ñ��</th><td>�ɥᥤ��ñ��</td></tr>
                                            <tr><th>������</th><td>�ƥ����ȷ�����gzip����</td></tr>
                                            <tr><th>���ե�������������</th><td>��������4�����ˡ���������4:00����������4:00�ޤǤΥ��ե����������</td></tr>
                                        </tbody>
                                    </table>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">�����������Ȥ�</a></li>
                                    <li><a href="#link-b">�����������Υ��������</a></li>
                                    <li><a href="#link-c">�桼�����ΰ�ؤ���¸����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">�����������Ȥ�</h4>
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥����������פ�ꡢ�����������μ�������ǽ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_server_log_1.png?date=2410" alt="�����С��ѥͥ�Υ��ե�������̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">�����������Υ��������</h4>
                                    <p>�����������λ��ͤϰʲ��ΤȤ���Ǥ���</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr>
                                            <th class="w30perM w30perL">���ե�����̾</th>
                                            <td>
                                                <p>�ɥᥤ��̾.access_log_ǯ����</p>
                                                <p class="border border_blue break-all">
                                                    <b>(�㡧example.com�ɥᥤ���2016ǯ1��1������¸���줿���ξ��)</b><br>
                                                    example.com.access_log_20160101
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>���ե�������ñ��</th>
                                            <td>�ɥᥤ��ñ��</td>
                                        </tr>
                                        <tr>
                                            <th>������</th>
                                            <td>�ƥ����ȷ���</td>
                                        </tr>
                                        <tr>
                                            <th>���ե�������������</th>
                                            <td>��������4�����ˡ����30��ʬ�Υ��ե���������̤�����</td>
                                        </tr>
                                        <tr>
                                            <th>����������</th>
                                            <td>
                                                <p>�����������ϲ����ν�ǽ��Ϥ��쵭Ͽ����ޤ���</p>
                                                <ul class="ul tal">
                                                    <li>�С������ۥ���</li>
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
                                                    example.com 192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">�桼�����ΰ�ؤ���¸����</h4>
                                    <p>���Υ����������ǡ�����ɬ�פʾ��ϡ��֥桼�����ΰ�ؤ���¸����פ����¸���֤������Ԥ����Ȥǡ����ե����뤬�����С�(�桼�����ǥ��쥯�ȥ�)�����������ޤ���</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr><th>���ե������������</th><td>/home/�����С�ID/�ɥᥤ��̾/log/</td></tr>
                                        <tr>
                                            <th>���ե�����̾</th>
                                            <td>
                                                <p>�ɥᥤ��̾.access_log_ǯ����.gz</p>
                                                <p class="border border_blue break-all">
                                                    <b>(�㡧example.com�ɥᥤ���2016ǯ1��1������¸���줿���ξ��)</b><br>
                                                    example.com.access_log_20160101.gz
                                                </p>
                                            </td>
                                        </tr>
                                        <tr><th>���ե�������ñ��</th><td>�ɥᥤ��ñ��</td></tr>
                                        <tr><th>������</th><td>�ƥ����ȷ�����gzip����</td></tr>
                                        <tr><th>���ե�������������</th><td>��������4�����ˡ���������4:00�����������4:00�ޤǤΥ��ե����������</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /���ѥͥ�-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->


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