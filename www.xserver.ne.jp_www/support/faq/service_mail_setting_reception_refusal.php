<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>����Υ᡼�륢�ɥ쥹���������Ƥ���᡼���������ݤ������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����С��ѥͥ�Ρ֥᡼��ο���ʬ���פ����꤬��ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">����Υ᡼�륢�ɥ쥹���������Ƥ���᡼���������ݤ�������</h3>

                <p>�����С��ѥͥ�Ρ֥᡼��ο���ʬ���פ����꤬��ǽ�Ǥ���</p>
                <table class="table table_use-caption" summary="����Υ᡼�륢�ɥ쥹��������ݤ�������">
                    <caption>����Υ᡼�륢�ɥ쥹��������ݤ�������</caption>
                    <tbody>
                        <tr>
                            <th scope="row">���1�ʥ�����ɡ�</th>
                            <td>���ݤ������᡼�륢�ɥ쥹</td>
                        </tr>
                        <tr>
                            <th scope="row">���1�ʾ���</th>
                            <td>���п�</td>
                        </tr>
                        <tr>
                            <th scope="row">���1�ʰ��ס�</th>
                            <td>���Ƥ�ޤ�</td>
                        </tr>
                        <tr>
                            <th scope="row">������ˡ�ʰ����</th>
                            <td>���</td>
                        </tr>
                        <tr>
                            <th scope="row">������ˡ��������ˡ��</th>
                            <td>ž��</td>
                        </tr>
                    </tbody>
                </table>
                <p>�嵭�Τ褦��������ɲä��Ƥ���������</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">�֥᡼���������ˡ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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