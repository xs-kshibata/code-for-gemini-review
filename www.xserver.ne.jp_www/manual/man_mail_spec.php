<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼����Ͱ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å᡼��˴ؤ�����ͤΰ����Ǥ����֥᡼��ܥå��������̾�¡פ��ǧ����ˡ�ס��������ξ�¡פˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">���Ͱ���</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">�᡼���Ϣ�λ��Ͱ���</a></li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">�᡼��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�᡼���Ϣ�λ��Ͱ���</h4>
                    <div class="section_body">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="w30per">��ǽ</th>
                                    <th>����</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>�᡼�륵���С�</th>
                                    <td>Postfix</td>
                                </tr>
                                <tr>
                                    <th>�б��ץ�ȥ���</th>
                                    <td>SMTP / POP3 / IMAP �������Ѥ��������ޤ����ޤ���over SSL �ˤ��б����Ƥ���ޤ���</td>
                                </tr>
                                <tr>
                                    <th>�᡼�륢������ȿ�</th>
                                    <td>
                                        <p>̵����</p>
                                        <p class="note">���������Ķ����ȥ᡼�륢������Ȥ��ɲä����¤��������礬����ޤ���<br>
                                            �ܤ����ϡ�<a href="../support/faq/service_mail_setting_upper_limit.php">�褯�������</a>�פ򤴳�ǧ����������</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�᡼��ܥå���������</th>
                                    <td>
                                        <p>
                                            �᡼�륢������Ȥ��Ȥ����꤬��ǽ�Ǥ���<br>
                                            �᡼��ܥå��������̤�1��20,000MB���ϰϤ����ꤹ�뤳�Ȥ��Ǥ��ޤ���
                                        </p>
                                        <p class="note">���᡼��ܥå����λ����̤ϥǥ��������̤˴ޤޤ�ޤ���</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�᡼�륵����������</th>
                                    <td>������ǽ�ʥ᡼�륵�������ܰ¤�1�̤�����100MB�Ǥ��������ˤĤ������¤Ϥ���ޤ��󡣤��������᡼��ܥå��������̤�Ķ����᡼����������ϹԤ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>����������</th>
                                    <td><p>���ץ���̤ο��ͤȤʤäƤ���ޤ������ͤ��ܰ¤Τ��ᡢ¿���Υ����С��ˤĤ��Ƥϵ����ϰϤǤ���</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>�᡼�����������ܰ�</dt>
                                            <dd>1,500��/����<br>
                                                15,000��/��</dd>
                                        </dl>
                                        <p class="note">�����ǥ᡼��ʤɤ��ۿ����Ԥ�줿�ݤϡ��嵭�ϰϤǤ��äƤ����¤򤤤����ޤ���</p>
                                        <p class="note">�������������¤��ä��ߤ��Ƥ��ޤ���<br>
                                        ��������û���֤����̤Υ᡼������ˤ�ꥵ���С��رƶ����Ф���ʤɤ����¤򤤤����ޤ���</p></td>
                                </tr>
                                <tr>
                                    <th>��������ǧ������</th>
                                    <td>
                                        <p>SMTP AUTH</p>
                                        <p class="note">������ͥåȥ���������³�Τ����Ѳ�ǽ��SMTPǧ�ڤι񳰥����������¤�̵���ˤ��뤳�Ȥǡ��񳰥ͥåȥ����������Ѥ���ǽ�Ǥ���</p>
                                        <p class="note">��sv1999�ޤǤΥ����С��Ǥϡ�����ͥåȥ���������³�˸¤��POP before SMTP�פˤ��б����Ƥ��ޤ���</p>
                                        <p class="note">�������С��ֹ�γ�ǧ��ˡ��<a href="../support/faq/service_server_number.php">������</a>�򤴻��Ȥ���������</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�����륹�����å�</th>
                                    <td><p>���å��������С��Ǻ��������᡼�륢�ɥ쥹�����Ƽ�ưŪ�˥����륹�����å����������˹Ԥ��ޤ��ʢ��ˡ������륹������եȤˤϡ����Ū�ˤ��ɾ��������Ƥ���WithSecure�ҤΥץ�������ѡ����Ψ�ǥ����륹��ưŪ�˶�����뤳�Ȥ���ǽ�Ǥ���</p>
                                        <p class="note">�������륹�����Τ��줿���ϡ���ưŪ�˥����륹�Ϻ�����졢�����Ԥ��Ф��ƥ����륹���Τ򵭺ܤ����ݤΥ᡼����������ޤ���</p></td>
                                </tr>
                                <tr>
                                    <th>���֥ߥå����ݡ���</th>
                                    <td>���ǥ᡼���к���25�֥ݡ��ȥ֥�å��פ�ԤäƤ���ץ�Х����������Ѥξ��ˡ��֥ݡ���25�פ����ؤȤ��ơ֥ݡ���587�פ����Ѥ��뤳�Ȥ��Ǥ��ޤ���</td>
                                </tr>
                            </tbody>
                        </table>
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