<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�͡��ॵ���С����ڤ��ؤ�������ư���ǧ������ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����С��ѥͥ�Ρ�ư���ǧURL�פ���ư���ǧURL������ɲá��ޤ��Ϥ����Ѥ�PCü���ˤ�����hosts�ե�������Խ����Ƥ����������ܺ٤ϥޥ˥奢��ڡ�����������������">

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

                <h3 class="sub-ttl">�͡��ॵ���С����ڤ��ؤ�������ư���ǧ������ˡ�򶵤��Ƥ���������</h3>

                <p>��������ˡ�ˤ�ư���ǧ����ǽ�Ǥ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>��Ū�����Ȥξ��</dt>
                    <dd>�����С��ѥͥ�Ρ�ư���ǧURL�פ���ư���ǧURL������ɲä򤷡�ư���ǧ���ɥ쥹��ư��򤴳�ǧ����������</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPress�ʤɤ�ưŪ�����Ȥξ��</dt>
                    <dd>�����Ѥ�PCü���ˤ�����hosts�ե�������Խ�������ˡ��ư��򤴳�ǧ����������<br>
                        �ܺ٤ʼ��ϡ��ޥ˥奢���<a href="../../manual/man_domain_checkproxy.php#link-b">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>�פ򤴻��Ȥ���������</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">�֥����С���ž�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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