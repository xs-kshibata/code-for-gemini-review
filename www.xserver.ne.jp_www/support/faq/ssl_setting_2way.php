<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���ץ�����ȼ�SSL����󤷤������������͡����www���ꡦ�ʤ��ɤ���Ǥ����Ѥ������� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С���ȯ�Ԥ��륪�ץ�����ȼ�SSL��SSL�����С�������ϡ������͡�����www.�ɥᥤ��̾�פȤ�����˸¤ꡢ �ɥᥤ��(FQDN)��URL�˲ä�����www�ʤ���URL�Ǥ��äƤ�SSL�̿����Ԥ��ޤ���">

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
            
                <h3 class="sub-ttl">���ץ�����ȼ�SSL����󤷤������������͡����www���ꡦ�ʤ��ɤ���Ǥ����Ѥ�������</h3>
                
                <p>���å��������С���ȯ�Ԥ��륪�ץ�����ȼ�SSL��SSL�����С�������ϡ������͡�����www.�ɥᥤ��̾�פȤ�����˸¤ꡢ
                �ɥᥤ��(FQDN)��URL�˲ä�����www�ʤ���URL�Ǥ��äƤ�SSL�̿����Ԥ��ޤ���</p>
                <table class="table primary-table-ml">
                    <thead>
                        <tr class="head">
                            <th></th>
                            <th>��www.example.com��<br>�Ǥ��������ߤξ��</th>
                            <th>��example.com��<br>�Ǥ��������ߤξ��</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>https://www.example.com �Ǥ���³</th>
                            <td>��</td>
                            <td>��</td>
                        </tr>
                        <tr>
                            <th>https://example.com �Ǥ���³</th>
                            <td>��</td>
                            <td>��</td>
                        </tr>
                    </tbody>
                </table>
                <p class="note mb0">���ȼ�IP���ɥ쥹�ǡ�2Way�б��פ����Ѥξ��ϡ������С��ѥͥ���DNS�쥳���������ꡢSSL�Ѥ�IP���ɥ쥹�����ꤷ�Ƥ�������ɬ�פ�����ޤ���</p>
                <p class="note">��������SSL������֥��ɤˤƤ����Ѳ�ǽ��Web�����Ⱦ�ؤΥ����ȥ������ɽ���ϡ������͡���˻��ꤷ���ɥᥤ��(FQDN)��URL�Τߤ˸¤�ޤ���</p>                
                <p>�ܺ٤� <a href="../../manual/man_order_ssl.php#link-d">�ޥ˥奢�� �� ���ץ�����ȼ�SSL�Τ��������� �� SSL������Ρ�2Way���ѡפˤĤ���</a> ��������������</p>

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