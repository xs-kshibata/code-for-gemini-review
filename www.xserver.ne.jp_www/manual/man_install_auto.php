<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>��ñ���󥹥ȡ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǥϴ�ñ�����ǡ�WordPress ���ܸ��ǡפʤɤΥץ��������֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">��ñ���󥹥ȡ���</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">��ñ���󥹥ȡ���ˤĤ���</a></li>
                </ul>
                </div>                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">��ñ���󥹥ȡ���ˤĤ���</h4>
                    <div class="section_body">
                        <p>���å��������С��Ǥϡ��ʲ��Υץ������ñ�˥��󥹥ȡ��뤹�뤳�Ȥ��Ǥ��ޤ���</p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>WordPress ���ܸ���</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_word.php"><img src="../img/manual/logo_wordpress.png" alt="WordPress ���ܸ���"></a></p>
                                <p>���������˹⤤�͵�����ĥ֥��ġ���Ǥ��ꡢ���ܤǤ⤽�ε�ǽ���ȻȤ��䤹���ǿ͵����޾徺���Ƥ��ޤ���Movable Type �����ε����Υ���ݡ��Ȥ⥵�ݡ��Ȥ��Ƥ��뤿�ᡢ�̤Υ֥�����ξ�괹���ʤɤ⤴��Ƥ���������ޤ���</p>
                                <p class="link"><a href="http://ja.wordpress.org/" target="_blank" rel="nofollow">WordPress ���ܸ��� ���ե�����륵����</a><i class="ico ico_new-window"></i></p>
                            </dd>
                        </dl>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>EC-CUBE</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_ec4.php"><img src="../img/manual/logo_eccube.png" alt="EC-CUBE"></a></p>
                                <p>����Ǻ���Υ���������ĥ����ץ󥽡�����EC�����ȹ��ۥ����ƥ�Ǥ���</p>
                                <p class="link"><a href="http://www.ec-cube.net/" target="_blank" rel="nofollow">EC-CUBE ���ե�����륵����</a><i class="ico ico_new-window"></i></p>
                            </dd>
                        </dl>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>PukiWiki</dt>
                            <dd>
                                <p class="mb5"><a href="man_install_auto_puki.php"><img src="../img/manual/logo_pukiwiki.png" alt="PukiWiki"></a></p>
                                <p>ï�Ǥ��Խ���ǽ�ʥ����֥����Ȥ�������뤿��Υġ���Ǥ����ɥ�����ȥ����Ȥʤɤι��ۤ����Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                <p class="link"><a href="https://pukiwiki.sourceforge.io/" target="_blank" rel="nofollow">PukiWiki ���ե�����륵����</a><i class="ico ico_new-window"></i></p>
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