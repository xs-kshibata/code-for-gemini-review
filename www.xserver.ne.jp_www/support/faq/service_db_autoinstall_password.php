<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>��ñ���󥹥ȡ����Ԥä��ץ����Υǡ����١����Υѥ���ɤ��ǧ������ˡ�򶵤��Ƥ��������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�ץ����������ե���������Ƥ��鳺���ץ����ʳ����ɥᥤ��ˤ����Ѥ��Ƥ���MySQL�ǡ����١����Υѥ���ɤʤɤ��ǧ�Ǥ��ޤ�������ʥץ���������ե�����������衡��WordPress��WordPress�Υ��󥹥ȡ���ǥ��쥯�ȥ��">

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
            
                <h3 class="sub-ttl">��ñ���󥹥ȡ����Ԥä��ץ����Υǡ����١����Υѥ���ɤ��ǧ������ˡ�򶵤��Ƥ���������</h3>

                <p>�ץ����������ե���������Ƥ��鳺���ץ����ʳ����ɥᥤ��ˤ����Ѥ��Ƥ���MySQL�ǡ����١����Υѥ���ɤʤɤ��ǧ�Ǥ��ޤ���</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>��ʥץ���������ե������������</dt>
                    <dd>
                        <ul class="list list_arrow-right mb0">
                            <li>WordPress<br>
                                WordPress�Υ��󥹥ȡ���ǥ��쥯�ȥ�/wp-config.php </li>
                            <li>XOOPS Cube<br>
                                XOOPS Cube�Υ��󥹥ȡ���ǥ��쥯�ȥ�/mainfile.php </li>
                            <li>Movable Type<br>
                                Movable Type�Υ��󥹥ȡ���ǥ��쥯�ȥ�/mt-config.cgi </li>
                        </ul>
                    </dd>
                </dl>
                <p class="note">������¾�ץ����ˤ����Ƥ�MySQL�����Ѥ����������ե�����˵��ܤ�����ޤ���</p>                            

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_db.php" class="btn btn_gray">�֥ǡ����١����פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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