<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>��500 Internal Server Error�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ץ���༫�ΤؤΥ��������ϹԤ��Ƥ��뤬���¹Ԥ��Ǥ��ʤ��ʽ�������λ���ʤ��˾���ȯ�����륨�顼�Ǥ��������С��ѥͥ�֥��ե�����פ�ꥨ�顼�����������ɤ������顼���Ƥ򤴳�ǧ�����������ڹͤ������װ���CGI��PHP�Ρ�">

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
            
                <h3 class="sub-ttl">��500 Internal Server Error�פȤ������顼��ɽ������ƥۡ���ڡ����������ޤ���</h3>

                <p>�ץ���༫�ΤؤΥ��������ϹԤ��Ƥ��뤬���¹Ԥ��Ǥ��ʤ��ʽ�������λ���ʤ��˾���ȯ�����륨�顼�Ǥ���<br>�����С��ѥͥ�֥��顼���פ�ꥨ�顼���Ƥ򤴳�ǧ����������</p>
                <p><strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="../../manual/man_server_logerror.php">���顼��</a></p>
                <p><strong>�ڹͤ������װ���</strong></p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>CGI��PHP��Ʊ����³����¿���ʤꡢ���������ñ�̤Υ꥽�������¤ȤʤäƤ���</dt>
                    <dd>
                        <p>PHP�ؤΥ��������ˤ����ơ�500 Internal Server Error�ץ��顼��ȯ���������顼����ˡ�Resource temporarily unavailable�פ�ɽ���������Ϥ�����˳������ޤ���</p>
                        <p>�ޤ���CGI�ؤΥ��������ˤ�������³Ū�ˡ�500 Internal Server Error�ץ��顼��ȯ������CGI���¹ԤǤ���Ȥ��ȤǤ��ʤ��Ȥ���������⤳����˳��������ǽ��������ޤ���</p>
                        <p>�ץ����ؤΥ��������������ˤ��ȯ�����ޤ��������Ǥ˲�Ư��Υץ�������λ�����꥽������;͵��������ȤȤȤ�˼�ưŪ�˥��顼�ϲ�ä���ޤ��Τǡ����Ф餯���Ԥ��Τ���������ƾ����򤴳�ǧ����������</p>
                        <p class="mb0">���碌�ơ�CRON�����ˤ˥��ޥ�ɤ�¹Ԥ���Ƥ����硢�¹����٤�Ĵ������ʤɤ���Ƥ����������</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�ץ����ε������ơ�CGI/PHP�Υ����������ɡˤ˸�꤬����</dt>
                    <dd>
                        <p>CGI��PHP�ؤΥ��������˺ݤ��ơ�syntax error�ס�Call to undefined function ******()�ס�failed to open stream�פʤɤΥ��顼��ȯ�����Ƥ����硢�����ѤΥץ����ˤ����뵭�Ҿ�Υߥ���ɬ�ץե��������­��PHP�С�������������ˤ�ꥨ�顼��ȯ�����Ƥ����ǽ�����ͤ����ޤ���</p>
                        <p class="note mb0">�����å��������С��Ǥ�CGI��PHP���Υץ����˴ؤ��뵻��Ū�ʥ��ݡ��ȤϤ������Ƥ���ޤ���Τǡ���λ������������</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.htaccess�ε��Ҥ˸�꤬����</dt>
                    <dd>
                        <p>.htaccess���Ф��륨�顼�ˤơ�Invalid command '*****'�פ��Expected &lt;/IfModule&gt; before end of configuration�פʤɤ����顼���ˤ����硢.htaccess�ε��Ҥ���äƤ����ǽ�����ͤ����ޤ���</p>
                        <p>�ޤ�����php_flag�פʤɤ�PHP�˴ؤ���Ƽ������.htaccess��˵��Ҥ������⥨�顼��ȯ�����ޤ���PHP������ϡ�<a href="../../manual/man_server_phpini_edit.php">php.ini����</a>�פˤƹԤäƤ���������</p>
                        <p class="note mb0">�����å��������С��Ǥ�.htaccess�ե�����ε��ҥ롼��˴ؤ��뵻��Ū�ʥ��ݡ��ȤϤ������Ƥ���ޤ���Τǡ���λ������������</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�ѡ��ߥå����˸�꤬����</dt>
                    <dd>
                        <p>CGI�Υѡ��ߥå����Ŭ�ڤ����ꤵ��Ƥ��뤫����ǧ����������<br>
                        <strong class="yellow">��Ϣ�ޥ˥奢�롧</strong><a href="../../manual/man_server_permission.php">�ѡ��ߥå����</a></p>
                        <p>�ޤ������å��������С��Ǥϥ������ƥ��塢�桼���������롼�פ˽񤭹��߸��¤Τ���ѡ��ߥå�����777�ʤɡˤǤϥץ����ϼ¹ԤǤ��ޤ���</p>
                        <p class="mb0">CGI�ե�����Υѡ��ߥå���� 777 �ξ��䡢�ѡ��ߥå���� 777 �Υե������˥ץ��������֤��Ƥ����硢���顼��ȯ�����ޤ��ΤǤ���դ���������</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_trouble.php" class="btn btn_gray">��Web�����ȡ�WordPress�Υȥ�֥�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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