<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>����ե�����ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С���������ɥᥤ��������ɲû��˼�ưŪ�����������ե�����ΰ����˴ؤ��뤴����Ǥ����ե�����Υ��åץ�����ˤĤ��Ƥ⵭�ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">����ե�����ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">����ե�����ˤĤ���</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">����ե�����ˤĤ���</h4>
                    <div class="section_body">
                        <p>�����С�������������괰λ����������֤Ǥϰʲ��ե��������ư��������ޤ���</p>
                        <table class="table table_use-caption">
                            <caption>�����С���������Ƚ��������˺��������ե�����ΰ���</caption>
                            <tbody>
                                <tr>
                                    <th>�����С�ID.xsrv.jp</th>
                                    <td>����ɥᥤ��ʥ����С�ID.xsrv.jp�ˤ�����ե����뤬��¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>ssl</th>
                                    <td>SSL�˴ؤ���Ƽ�����ե����뤬��¸����ޤ���</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p>�ޤ�������ɥᥤ��ʥ����С�ID.xsrv.jp�˥ե������˺��������ե�����ϰʲ��Ȥʤ�ޤ���</p>
                        <p class="note">���ȼ��ɥᥤ��������ɲû���Ʊ�ͤΥե��������ư��������ޤ���</p>
                        
                        <table class="table table_use-caption">
                            <caption>����ɥᥤ�󤪤�ӥɥᥤ��������ɲû��˺��������ե�����ΰ���</caption>
                            <tbody>
                                <tr>
                                    <th>�оݥɥᥤ��̾/.spamassassin</th>
                                    <td>���ǥ᡼��ե��륿����ˤĤ��ƤΥե����뤬��¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/autoreply</th>
                                    <td>��ư��������ˤĤ��ƤΥե����뤬��¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/htpasswd</th>
                                    <td>Basicǧ�ڤΥѥ��������ե����뤬��¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/log</th>
                                    <td>��������������¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/mail</th>
                                    <td>�᡼��ǡ�������¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/public_html</th>
                                    <td>�����ȥǡ����Υ��åץ�����Ǥ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/script</th>
                                    <td>cgi�ġ���ʤɤγƼ凉����ץȤ���¸����ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�оݥɥᥤ��̾/xserver_php</th>
                                    <td>php.ini����Υե����뤬��¸����ޤ���</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                            <div class="msg_body">
                                <p>����ե�����Ϻ�����ʤ��褦����դ��Ƥ���������<br>
                                ��äƺ������Ƥ��ޤä����ϡ�<a href="man_domain_reset.php">�ɥᥤ������ν����</a>���ե����롦�ե��������������ǽ�Ǥ���</p>
                            </div>
                        </aside>
                        
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