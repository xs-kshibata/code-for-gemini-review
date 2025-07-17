<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>nginx�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥϡ�Ʊ���ꥯ�����Ȥν�������Ū����ƥ�Ĥ��ۿ��˺�Ŭ�����줿�����֥����С���nginx�פ�Ƴ�����������С��Ķ������Ѳ�ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">nginx�ˤĤ���</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">nginx�ˤĤ���</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">nginx�ˤĤ���</h4>
                    <div class="section_body">
                        <p>
                           ��nginx(���󥸥󥨥å���)�פȤϡ����̤�Ʊ�����������ν����˺�Ŭ�����졢��Ū����ƥ�Ĥ��ۿ����ò�����Web�����С��Ǥ�����ȯŪ��PC�����ޡ��ȥե���ʤɤ��饢�����������椷�����Ǥ��®���İ��ꤷ��Web�����Ȥα��Ĥ���ǽ�Ǥ���</p>
                        <p>Apache�Ǥϡ��桼��������Υꥯ�����Ȥ�缡�������뤿�ᡢ�ꥯ�����Ȥ��Ԥ���ȯ�������礬����ޤ�����nginx�Ǥ����̤Υꥯ�����Ȥ�Ʊ���¹Ԥǽ�������ǽ�Ǥ���
                        </p>
                        <p><img class="img" src="../img/manual/man_server_nginx_1.png" alt="Apache�ξ�硧�ꥯ�������Ԥ���ȯ�������礬���롢nginx�ξ�硧���̤Υꥯ�����Ȥ�Ʊ���¹Ԥǽ����Ǥ��뤿�ᡢ�������������椷�����Ǥ⥵���Ȥ�����"></p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>nginx�Ķ����Ǥ�.htaccess�Τ����ѤˤĤ���</dt>
                            <dd>
                                ���å��������С��Ǥ�nginx�Ķ����ˤ����Ƥ⡢Apache�Ķ��������ꤵ�줿��.htaccess�ץե�����򤽤Τޤޤ����Ѥ����������Ȥ���ǽ�Ǥ���<br>
                            </dd>
                        </dl>
                        
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