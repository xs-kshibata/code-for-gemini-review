<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ۡ���ڡ����Υե�����Ϥɤ��إ��åץ��ɤ���Ф����Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTP���եȤ�ե�����ޥ͡��������Ѥ��������С�����³��ԤäƤ�����������³����λ���ޤ��ȡ������С������ꤷ�Ƥ���ɥᥤ��̾�Υե������ɽ������ޤ������åץ��ɤ�Ԥ������ɥᥤ��̾�Υե���������򤵤�ޤ��ȡ�[ public_html ]��">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">�ۡ���ڡ����Υե�����Ϥɤ��إ��åץ��ɤ���Ф����Ǥ�����</h3>

                <p>FTP���եȤ�ե�����ޥ͡��������Ѥ��������С�����³��ԤäƤ���������<br>
                ��³����λ���ޤ��ȡ������С������ꤷ�Ƥ���ɥᥤ��̾�Υե������ɽ������ޤ���<br>
                ���åץ��ɤ�Ԥ������ɥᥤ��̾�Υե���������򤵤�ޤ��ȡ�[ public_html ]�Ȥ����ե������ɽ������ޤ���<br>
                ����[ public_html ]��ˡ����󥿡��ͥåȾ�Ǹ�������ե�����򥢥åץ��ɤ��Ƥ���������</p>
                <p>�ޤ����ȥåץڡ����Υե�����̾�ϡ�index.html�פȤʤ�ޤ���</p>
                <p>�㤨�С������ͤΥɥᥤ�� example.com���ξ�硢�����С���Υե�����ȥۡ���ڡ���URL�δط���</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="w50per">�����С���Υե�����ΰ���</th>
                            <th>�ۡ���ڡ���URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>example.com/public_html/abc.html</td>
                            <td>http://example.com/abc.html</td>
                        </tr>
                        <tr>
                            <td>example.com/public_html/aaa.html</td>
                            <td>http:/example.com/aaa.html</td>
                        </tr>
                        <tr>
                            <td>example.com/public_html/index.html</td>
                            <td>http://example.com/</td>
                        </tr>
                    </tbody>
                </table>
                <p>�Ȥ����ط����ˤʤ�ޤ���</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_setting.php" class="btn btn_gray">�֥ե�����ž��(FTP)��������ˡ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
                </div>

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>