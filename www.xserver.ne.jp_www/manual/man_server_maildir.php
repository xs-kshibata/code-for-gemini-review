<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Maildir�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С���������ȤΥۡ���ǥ��쥯�ȥ�ľ���˼�ư��������륷���ƥ�ե������Maildir�פ˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">Maildir�ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">��Maildir�ץե�����Ȥ�</a></li>
                    <li><a href="#link-b">��Maildir�ץե�����Υ��ơ������ˤĤ���</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">��Maildir�ץե�����Ȥ�</h4>
                    <div class="section_body">
                    
                        <p>��Maildir�ץե�����ϡ������С���������ȤΥۡ���ǥ��쥯�ȥ�ľ���˼�ư��������륷���ƥ�ե�����Τ��Ȥǡ������С���������ˡ��㳰Ū��ȯ�����������Υ����ƥ�᡼��䥨�顼�᡼�뤬��¸����ޤ���</p>
                        <p>�����ξ��˳����������ˡ�Maildir�ץե��������ư�������졢�ǡ�������¸����ޤ���</p>
                        <div class="border border_gray">
                            <ul class="ul ul_list_margin mb0">
                                <li>CGI��PHP�ץ���फ��Υ᡼�������˼��Ԥ����ݡ����顼�᡼��μ�����ꥢ�ɥ쥹�����ꤵ��Ƥ��ʤ����</li>
                                <li>CRON�ˤƼ¹Խ��Ϥ��˴����Ƥ��餺�����ޥ�ɼ¹Է�̥᡼���������᡼�륢�ɥ쥹��̤���ꡢ�⤷����̵���ʥ᡼�륢�ɥ쥹�Ǥ�����</li>
                            </ul>
                        </div>
                        <p class="note">����Maildir�ץե�����ϡ��嵭�ξ�ﲼ�ǽ�������������ΤǤ��ꡢ������֤Ǥ�¸�ߤ��ʤ���ΤǤ���</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">��Maildir�ץե�����Υ��ơ������ˤĤ���</h4>
                    <div class="section_body">
                    
                        <p>��Maildir�פ���¸���줿�᡼��ǡ����ϡ�1���֤��Ȥ˥��ơ�����󤵤졢���褽4���ָ�˥ǡ������������ޤ���</p>
                        <div class="border border_gray">
                            <p class="mb0">
                            <i class="ico ico_circle base-color"></i><em class="font-bold">1���ָ�</em>����Maildir�פ����Maildir.1�פ�̾���ѹ�<br>
                            ������<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">2���ָ�</em>����Maildir.1�פ����Maildir.2�פ�̾���ѹ�<br>
                            ������<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">3���ָ�</em>����Maildir.2�פ����Maildir.3�פ�̾���ѹ�<br>
                            ������<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">4���ָ�</em>����Maildir.3�פΥǡ�������
                            </p>
                        </div>
                        <p class="note">���ܽ������轵��������AM3:00���»ܤ���ޤ���</p>
                        
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