<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPress�����å��������ȤȤϡ��ɤΤ褦�ʵ�ǽ�Ǥ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="WordPress�����å��������ȤȤϡ������С��Τ��������߻��ˡ�WordPress�������֡ס��ȼ�SSL��ư����ס֥ɥᥤ�����������פ�Ԥ����������ߴ�λ�塢������WordPress�֥���Ϥ���뵡ǽ�Ǥ���">

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

                <h3 class="sub-ttl">WordPress�����å��������ȤȤϡ��ɤΤ褦�ʵ�ǽ�Ǥ�����</h3>
                <p>WordPress�����å��������ȤȤϡ������С��Τ��������߻��ˡ�WordPress�������֡ס��ȼ�SSL��ư����ס֥ɥᥤ�����������פ�Ԥ������������ߴ�λ�塢������WordPress�֥���Ϥ���뵡ǽ�Ǥ���</p>

                <aside class="msg msg_caution">
                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                    <div class="msg_body">
                        <p>������ʧ��ˡ�ϥ��쥸�åȥ�����ʧ��������ʧ���ΤߤȤʤ�ޤ���<br>
                            �����������ߤ�Ʊ���˥����С�����Τ���ʧ����ȯ�����ޤ���<br>
                            ��10����̵���Τ�����֤Ϥ���ޤ���<br>
                            �������С��ΰ�ž�ˤ��б����Ƥ��ޤ���</p>
                    </div>
                </aside>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new.php" class="btn btn_gray">�ֿ�������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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