<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�����֥������ꤹ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�DNS�쥳�����Խ��׵�ǽ�ǳ����֥�����Ѥ���ݤ���ջ���ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">�����֥������ꤹ����</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">�����֥������ӥ������ꤹ�����DNS�쥳�����Խ�</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                </ul>

				<p>
					�ܥޥ˥奢����������Ƥ˴ؤ��ơ��ƥ֥������ӥ����Ȥ����Ƥ��ۤʤ��礬����ޤ���<br>
					�ܤ����ϳƥ֥������ӥ��ؤ��䤤��碌����������
				</p>
                
                <section class="section mt30">
                    <h4 class="section_ttl" id="link-a">�����֥������ӥ������ꤹ�����DNS�쥳�����Խ�</h4>
                    <div class="section_body">
                        <p>�ޤ��ϡ���DNS�쥳�����Խ��ץ�˥塼�����DNS�쥳�����ɲáפ򥯥�å����Ƥ��ʤߤ���������</p>
                        <p>DNS�쥳�����Խ����̤ˤơ��ʲ��ΰ����Τ褦�����ꤷ�Ƥ���������</p>
                        <p>���̤��A�ۥ쥳���ɤޤ��ϡ�CNAME�ۥ쥳���ɤ����ꤷ�ޤ���<br>
                            �����ơפ�������ˡ�A�ۥ쥳���ɤξ��Ϥ����ͤ����ѤΥ֥���IP���ɥ쥹��<br>
                            ��CNAME�ۥ쥳���ɤξ��Ϥ����ͤ����ѤΥ֥��Υ����С��Υۥ���̾�����ꤷ�Ƥ���������</p>
                        <p>�ɲ���ˡ�ˤĤ��Ƥξܺ٤�<a href="man_domain_dns_setting.php">������</a>�򤴻��Ȥ���������</p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>�ۥ���̾</dt>
                            <dd>���򡢤ޤ��Ϥ����ͤΥ��֥ɥᥤ��</dd>
                            <dt><i class="ico ico_square-fill"></i>����</dt>
                            <dd>A�ޤ���CNAME</dd>
                            <dt><i class="ico ico_square-fill"></i>����</dt>
                            <dd>A�쥳���ɤξ��ϥ֥���IP���ɥ쥹��CNAME�쥳���ɤξ��ϥ����С��Υۥ���̾�����</dd>
                            <dt><i class="ico ico_square-fill"></i>TTL</dt>
                            <dd>�̾���ѹ��ʤ������ꤢ��ޤ���</dd>
                            <dt><i class="ico ico_square-fill"></i>ͥ����</dt>
                            <dd>�̾�϶�������ꤢ��ޤ���</dd>
                        </dl>
                        
                        <p>���Ƥ��ǧ������DNS�쥳���ɤ��ɲáʳ���ˡפ򥯥�å������ɲä��Ƥ���������<br>
                        �ʾ������ϴ�λ�Ǥ���</p>
                        <p class="note">��DNS�쥳���ɾ��������ȿ�Ǥˤϡ������֤������24�������٤��פ��ޤ���</p>
                        
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