<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPress��MySQL�桼������MySQL�桼�����ѥ���ɤγ�ǧ��ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��wp-config.php�ϥե�����ˤƳ�ǧ��ǽ�Ǥ�����wp-config.php�ϥե������ƥ����ȥ��ǥ�����Tera Pad���ˤǳ������������ܤ򤴳�ǧ����������">

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
            
                <h3 class="sub-ttl">WordPress��MySQL�桼������MySQL�桼�����ѥ���ɤγ�ǧ��ˡ�򶵤��Ƥ���������</h3>

                <p>WordPress��MySQL�桼������MySQL�桼�����ѥ���ɤϡ��ʲ�����ˡ�Ǥ���ǧ���������ޤ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPress��ñ���󥹥ȡ���ǥ��󥹥ȡ��뤷��Wordpress�ξ��</dt>
                    <dd>�����С��ѥͥ�˥�����򤷤Ƥ�����������WordPress��ñ���󥹥ȡ������Υ��󥹥ȡ���Ѥ�WordPress�������餴��ǧ����������</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPress��ñ���󥹥ȡ���ʳ��Ǻ�������WordPress�ξ��</dt>
                    <dd>��wp-config.php�ϥե�����ˤƳ�ǧ��ǽ�Ǥ���<br>
                        ��wp-config.php�ϥե������ƥ����ȥ��ǥ�����Tera Pad���ˤǳ������������ܤ򤴳�ǧ����������<br><br>
                        /** MySQL �ǡ����١����Υ桼����̾ */<br>
                        define('DB_USER', 'example_user');<br><br>
                        /** MySQL �ǡ����١����Υѥ���� */<br>
                        define('DB_PASSWORD', '***********');<br>
                        ��MySQL�ǡ����١����Υ桼����̾��MySQL�桼����<br>
                        MySQL�ǡ����١����Υѥ���ɡ�MySQL�桼�����Υѥ���ɡ��Ȥʤ�ޤ���</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">��WordPress�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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