<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ʸ�����������ѹ��������ΤǤ������꤬ȿ�Ǥ���ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Web�ե���Ȥϥե���������������ɽ������ط��塢B������font-weight�ʤɤ����������̵���Ȥʤ�ޤ���������Ŭ�Ѥ��������������ˤ������ϰϤ��̤Υ����ǰϤߡ����ߤΥե���Ȥ�������Web�ե���Ȥ�Ŭ�Ѥ��Ƥ���������">

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
            
                <h3 class="sub-ttl">ʸ�����������ѹ��������ΤǤ������꤬ȿ�Ǥ���ޤ���</h3>

                <p>Web�ե���Ȥϥե���������������ɽ������ط��塢B������font-weight�ʤɤ����������̵���Ȥʤ�ޤ���<br>
                ������Ŭ�Ѥ��������������ˤ������ϰϤ��̤Υ����ǰϤߡ����ߤΥե���Ȥ�������Web�ե���Ȥ�Ŭ�Ѥ��Ƥ���������</p>
                                   
                <i class="ico ico_square-fill"></i>HTML
                <pre class="code">&lt;p&gt;Web�ե���Ȥ�<span class="base-color font-bold">&lt;b&gt;��������&lt;/b&gt;</span>&lt;/p&gt;</pre>

                <i class="ico ico_square-fill"></i>CSS
                <pre class="code">p{ font-family: "���� R"; }
<span class="base-color font-bold">b{ font-family: "���� B"; }</span></pre>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_webfont.php" class="btn btn_gray">��Web�ե���ȡפΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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