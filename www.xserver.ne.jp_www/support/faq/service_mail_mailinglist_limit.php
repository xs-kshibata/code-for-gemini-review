<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>�᡼��󥰥ꥹ�Ȥ�����Ǥ������˾�¤Ϥ���ޤ����� - �褯������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�Ϥ���������Υץ��˱����ơ�������ǽ�ʷ���˾�¤��ߤ��Ƥ���ޤ����ܺ٤ϡ���Ϣ�ޥ˥奢��򤴻��Ȥ���������">

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
            
                <h3 class="sub-ttl">�᡼��󥰥ꥹ�Ȥ�����Ǥ������˾�¤Ϥ���ޤ�����</h3>

                <p>�Ϥ������󤵤�Ƥ��륵���С��ץ��˱����ơ�������ǽ�ʷ���˾�¤��ߤ��Ƥ��ޤ���<br>
                �ץ�󤴤Ȥ˺����Ǥ���᡼��󥰥ꥹ�Ȥη���ϰʲ��Ǥ���</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>�ץ��</th>
                        <th>�������</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>����������ɥץ��</td>
                        <td>20��</td>
                    </tr>
                    <tr>
                        <td>�ץ�ߥ���ץ��</td>
                        <td>30��</td>
                    </tr>
                    <tr>
                        <td>�ӥ��ͥ��ץ��</td>
                        <td>40��</td>
                    </tr>
                    </tbody>
                </table>
                
                <strong class="yellow">��Ϣ�ޥ˥奢�롧</strong>
                <a href="https://www.xserver.ne.jp/manual/man_mail_mailinglist.php">�᡼��󥰥ꥹ�ȤˤĤ���</a>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailinglist.php" class="btn btn_gray">�֥᡼��󥰥ꥹ�ȵ�ǽ�פΤ褯���������������<i class="ico ico_refresh ml5"></i></a>
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