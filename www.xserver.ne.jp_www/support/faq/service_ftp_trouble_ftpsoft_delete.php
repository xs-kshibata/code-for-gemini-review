<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>FTP���եȤǥե������ե����������Ǥ��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ʲ��˳������ʤ�������ǧ���������������ե������ե������̾�������ܸ�ʤɤ�����ʸ����Ⱦ�ѥ��ڡ�����ȤäƤ��롡������Ǥ��ʤ��ե����뤬���֤���Ƥ���ե�����Υѡ��ߥå����˸�꤬���롡��SSH�Ǥκ������">

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
            
                <h3 class="sub-ttl">FTP���եȤǥե������ե����������Ǥ��ޤ���</h3>

                <p>�ʲ��˳������ʤ�������ǧ����������</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>�ե������ե������̾�������ܸ�ʤɤ�����ʸ����Ⱦ�ѥ��ڡ�����ȤäƤ���</dt>
                    <dd>
                        <p>FTP���եȤ�ʸ��������������ѹ��ˤ�äƺ������ǽ�ˤʤ��礬����ޤ���<br>
                            �ޤ���<a href="../../manual/man_ftp_filezilla_setting.php">FileZilla</a>�Υ��եȤ����Ѥ�����Ǻ���Ǥ����礬����ޤ���</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>����Ǥ��ʤ��ե����뤬���֤���Ƥ���ե�����Υѡ��ߥå����˸�꤬����</dt>
                    <dd>�ե�����Υѡ��ߥå������705�פ��ѹ����������ǡ��ե�������ե�����κ������ǽ������ǧ����������</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SSH�Ǥκ������</dt>
                    <dd>FTP���եȤǺ�����Ǥ��ʤ���硢<a href="../../manual/man_server_ssh.php">SSH</a>�Ǥκ������ǽ���ɤ����򤪻����������<br>SSH��³�ˤ�<a href="../../manual/man_server_ssh_connect_tera.php">Teraterm</a>�ʤɤΥ��եȤ����Ѥ���������</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_trouble.php" class="btn btn_gray">�֥ե�����ž��(FTP)�Υȥ�֥�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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