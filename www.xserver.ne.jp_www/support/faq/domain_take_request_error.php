<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�ֻ��ѤǤ��ʤ��ȿ����̡פ�ɽ�����졢�ɥᥤ��μ����������Ǥ��ޤ��� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���ȿ�̾�פˡ��ȿ����̡ۤ����Ϥ���Ƥ��ʤ����ޤ������Ϥ���äƤ������ɽ������륨�顼�Ǥ������ȿ�̾�פˡ��ȿ����̡ۤ�ޤ᤿����̾�Τ����Ϥ��Ƥ�������������ˡ��ȿ����̡ĳ�����ҡ����ȿ�̾�ĥ��å��������С�������ҡ�">

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
            
                <h3 class="sub-ttl">�ֻ��ѤǤ��ʤ��ȿ����̡פ�ɽ�����졢�ɥᥤ��μ����������Ǥ��ޤ���</h3>
                
                <p>���ȿ�̾�פˡ��ȿ����̡ۤ����Ϥ���Ƥ��ʤ����ޤ������Ϥ���äƤ������ɽ������륨�顼�Ǥ���<br>
                    ���ȿ�̾�פˡ��ȿ����̡ۤ�ޤ᤿����̾�Τ����Ϥ��Ƥ���������</p>
                <table class="table table_use-caption">
                    <caption>����ˡֳ�����ҡפξ��</caption>
                    <tbody>
                    <tr>
                        <th>�ȿ�����</th>
                        <td>�������
                        </td>
                    </tr>
                    <tr>
                        <th>�ȿ�̾</th>
                        <td>���å��������С��������
                        </td>
                    </tr>
                    <tr>
                        <th>�ȿ�̾�ʤ��ʡ�</th>
                        <td>���ä��������С����֤�����������
                        </td>
                    </tr>

                    </tbody>
                </table>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_take.php" class="btn btn_gray">�֥ɥᥤ�󿷵������פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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