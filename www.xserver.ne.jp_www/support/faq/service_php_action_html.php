<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>.html��.htm��PHP��ư��������ΤǤ������ɤ�����Ф����Ǥ��礦���� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content=".htaccess�˰ʲ��ε��Ҥ��ɲä��Ƥ����������Ȥǡ�.htm�����.html�ˤ�PHP��ư��ޤ���AddHandler fcgid-script .htm .html����դ�������.htaccess�ˤϡ��ܥ����С��ѥͥ�ǡ�">

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
            
                <h3 class="sub-ttl">.html��.htm��PHP��ư��������ΤǤ������ɤ�����Ф����Ǥ��礦����</h3>

                <p>.htaccess�˰ʲ��ε��Ҥ��ɲä��Ƥ����������Ȥǡ�.htm�����.html�ˤ�PHP��ư��ޤ���</p>

                <pre class="code">AddHandler fcgid-script .htm .html</pre>

                <aside class="msg msg_caution">
                    <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h4>
                    <div class="msg_body">
                        <p>.htaccess�ˤϡ��ܥ����С��ѥͥ���󶡤��Ƥ��������ǽ������˴ؤ��뵭�Ҥ䡢WordPress�ʤɤΥץ����ˤ�뵭�Ҥ���ưŪ�˹Ԥ��Ƥ����礬����ޤ���<br>
                            �������꤬�ʤ����ҤǤ��äƤ����Ѱդ˺���ʤ���ʤ��褦�ˤ���դ���������<br>
                            �ޤ����Խ����Web�����Ȥ������ɽ������뤫��ɬ������ǧ����������</p>
                    </div>
                </aside>

                <p>�嵭�б��ˤ���褷�ʤ���硢�᡼�륵�ݡ��ȤؤȤ����̤���������</p>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_php.php" class="btn btn_gray">��PHP�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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