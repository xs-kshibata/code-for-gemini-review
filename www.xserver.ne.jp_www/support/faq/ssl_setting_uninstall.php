<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���󥹥ȡ���Ѥߤ��ȼ�SSL����(���󥤥󥹥ȡ���)���뤳�ȤϤǤ��ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ�����ǽ�Ǥ��������Ѥ��ȼ�SSL�ˤ����ϰۤʤ�ޤ�������̵���ȼ�SSL�ξ��ĥ����С��ѥͥ����SSL����פˤơ�����Ѥߤ�̵���ȼ�SSL�Ρֺ���ץܥ��󤫤���(���󥤥󥹥ȡ���)���뤳�Ȥ��Ǥ��ޤ����������ץ�����ȼ�SSL�ξ���">

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
            
                <h3 class="sub-ttl">���󥹥ȡ���Ѥߤ��ȼ�SSL����(���󥤥󥹥ȡ���)���뤳�ȤϤǤ��ޤ�����</h3>
                

                <p>�Ϥ�����ǽ�Ǥ���<br>�����Ѥ��ȼ�SSL�ˤ����ϰۤʤ�ޤ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>̵���ȼ�SSL�ξ��</dt>
                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>���SSL����פˤơ�����Ѥߤ�̵���ȼ�SSL�Ρֺ���ץܥ��󤫤���(���󥤥󥹥ȡ���)���뤳�Ȥ��Ǥ��ޤ���</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>���ץ�����ȼ�SSL�ξ��</dt>
                    <dd>
                    	<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�⡢���å��������С���������ڡ����Υȥåץڡ�����ꡢ�оݤ�SSL������νĻ����꡼������˥塼��ַ������פ����(���󥤥󥹥ȡ���)����ǽ�Ǥ���</p>
						<p><img class="img" src="../../img/faq/faq_service_ssl_setting.png?date=230331" alt="�������򥯥�å����Ƥ��륹���꡼�󥷥�å�"></p>
                        <p class="note">�����ץ�����ȼ�SSL����ȼ�IP���ɥ쥹����פǤ����Ѥξ��ϡ�SSL������Υ��󥤥󥹥ȡ����Ԥ����ˡ������͡���˳�������ۥ���̾��DNS�쥳���ɾ���򡢤����ͤ������ѤΥ����С���IP���ɥ쥹���ѹ�����ɬ�פ�����ޤ���<br>
                        DNS�쥳���ɾ�����ѹ����ϡ��ޥ˥奢���<a href="../../manual/man_domain_dns_setting.php">DNS�쥳���ɤ��Խ�</a>�פ򤴻��Ȥ���������</p>
                        <p class="note">�����Ѵ������SSL������ϡ�Ʊ��XServer����������⡢���å��������С���������ڡ�����¾�Υ����С���������Ȥ˥��󥹥ȡ����Ԥ�������³�����Ѥ��뤳�Ȥ��Ǥ��ޤ���<br>
                        �ܺ٤ϡ��褯��������<a href="./ssl_setting_otherserver.php">���ץ�����ȼ�SSL��ȯ�Ԥ���SSL�������¾�Υ����С���������Ȥ����Ѥ��뤳�ȤϤǤ��ޤ�����</a>�פ򤴻��Ȥ���������</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">��SSL������������ˡ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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