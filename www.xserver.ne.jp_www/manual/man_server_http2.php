<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>HTTP/2�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥϡ�ɽ��®�٤���夵������̤��Ŀ������̿��ץ�ȥ����HTTP/2�פ����Ѳ�ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">HTTP/2�ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">HTTP/2�ˤĤ���</a></li>
                        <li><a href="#link-b">HTTP/2��������ˡ�ˤĤ���</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">HTTP/2�ˤĤ���</h4>
                    <div class="section_body">
                        <p>
                            ��HTTP/2�פȤϡ�HTTPS�̿��ˤ�����ɽ��®�٤���夵������̤��Ŀ������̿��ץ�ȥ���Ǥ���ʣ���Υꥯ�����Ȥ��������������Ȥߤˤ�ꡢ������Javascript��CSS�ʤɤ�¿�����Ѥ��Ƥ���Web�����Ȥ��ä˸��̤�ȯ�����ޤ���
                        </p>
                        <p><img class="img" src="../img/manual/man_server_http2_1.png" alt="����Ρ�HTTP/1.1�פϥꥯ�����Ȥ򣱤Ĥ��Ľ������뤿�᥵����ɽ�����٤����������̿��ץ�ȥ����HTTP/2�פ�ʣ���ꥯ�����Ȥ�����������뤿�᥵����ɽ����®��"></p>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">HTTP/2��������ˡ�ˤĤ���</h4>
                    <div class="section_body">
                        <p>����Υ����С��ˤ����Ƥϡ�Web���������Τ�HTTPS�̿��ˤ���־��SSL���פ��б����뤳�Ȥˤ�ꡢ��ưŪ��HTTP/2�ˤ�륳��ƥ�Ĥ�ɽ������ǽ�ˤʤ�ޤ���</p>
                        <p>�������ӥ�������Ρ�̵���ȼ�SSL�ס��⤷���ϡ֥��ץ�����ȼ�SSL�פ�������ɲä�����ǡ�Web�����ȤΡ־��SSL���פ�ԤäƤ���������<br>
                        �ܺ٤�������ˡ�ϲ����Υޥ˥奢��򤴻��Ȥ���������</p>
                        <ul class="list list_arrow-right">
                            <li><a href="man_server_ssl.php">̵���ȼ�SSL����</a></li>
                            <li><a href="man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a></li>
                            <li><a href="man_server_fullssl.php">Web�����Ȥξ��SSL��</a></li>
                        </ul>
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