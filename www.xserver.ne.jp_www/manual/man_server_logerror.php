<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���顼�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á֥��顼���פη������ǧ���˴ؤ��뤴����Ǥ������å��������С��Ǥϥ��顼���򥵡��С��ѥͥ뤫���ñ�˱������뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">���顼��</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">���顼��</a></li>
                                <li><a href="#link-previous-b">���顼���ˤĤ���</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">���顼��</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�Ρ֥��顼���פ�ꡢ���顼���μ�������ǽ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_logerror.png" alt="�����С��ѥͥ�Υ��ե�������̤Υ����꡼�󥷥�å�"></p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">���顼���ˤĤ���</h4>
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
                                            <tr><th>���ե�������ñ��</th><td>�ɥᥤ��ñ��</td></tr>
                                            <tr><th>������</th><td>�ƥ����ȷ��� </td></tr>
                                            <tr><th>���ե�������������</th><td>����3���ʹߤΥ���������(����AM3���˥��ꥢ���Ƥ��ޤ�)</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="note">�����顼�Ȥ��ƽ��Ϥ�������Ƥϥץ�����ڡ��������ˤ��ۤʤ�ޤ���</p>

                                    <div class="border border_blue">
                                        <em class="font-bold">��ɽ�����</em><br>
                                        ��.htaccess�Խ����Ի��Υ��顼<br>
                                        [Fri Nov 02 11:56:17.072078 2018] [core:error] [pid 100956] [client ***.***.***.***:58482] AH00124: Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace., referer: http://****.xsrv.jp/
                                    </div>
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
                                    <li><a href="#link-a">���顼���μ������</a></li>
                                    <li><a href="#link-b">���顼���ˤĤ���</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="section__body">
                                    <h4 id="link-a" class="section_ttl">���顼���μ������</h4>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl">1.�֥��顼���פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥��顼���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_logerror_1.png?date=2410" alt="�����С��ѥͥ�Υ��顼�����̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2.�����������Ϥ��ɲ�</h5>
                                            <div class="box_body">
                                                <p>�оݥ����С�����ü�ˤ���֥�������ɤ���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_server_logerror_2.png?date=2410" alt="���顼���Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">���顼���ˤĤ���</h4>
                                    <p>��������ɤǤ��륨�顼���λ��ͤˤĤ��Ƥϲ������̤�Ǥ���</p>
                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr>
                                            <th>���ե�����̾</th>
                                            <td>
                                                <p>�ɥᥤ��̾.error_log</p>
                                                <p class="border border_blue break-all">
                                                    <b>(�㡧example.com�ɥᥤ��ξ��)</b><br>
                                                    example.com.error_log
                                                </p>
                                            </td>
                                        </tr>
                                        <tr><th>���ե�������ñ��</th><td>�ɥᥤ��ñ��</td></tr>
                                        <tr><th>������</th><td>�ƥ����ȷ��� </td></tr>
                                        <tr><th>���ե�������������</th><td>����3���ʹߤΥ���������(����AM3���˥��ꥢ���Ƥ��ޤ�)</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="note">�����顼�Ȥ��ƽ��Ϥ�������Ƥϥץ�����ڡ��������ˤ��ۤʤ�ޤ���</p>

                                    <div class="border border_blue">
                                        <em class="font-bold">��ɽ�����</em><br>
                                        ��.htaccess�Խ����Ի��Υ��顼<br>
                                        [Fri Nov 02 11:56:17.072078 2018] [core:error] [pid 100956] [client ***.***.***.***:58482] AH00124: Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace., referer: http://****.xsrv.jp/
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->



                        </div><!-- ���ѥͥ뽪���-->
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