<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>.ftpaccess�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��åǥ��쥯�ȥ�ñ�̤�FTP��³�Υ����������ݤ��ѹ��Ǥ����.ftpaccess�ץե�����˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">.ftpaccess</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">.ftpaccess</a></li>
					<li><a href="#link-b">.ftpaccess�Ȥ�</a></li>
					<li><a href="#link-c">���ҤˤĤ���</a>
						<ul>
							<li><a href="#link-c01">����</a></li>
						</ul>
					</li>
					<li><a href="#link-d">��.ftpaccess�ץե����뤬�ƶ�����ե�����ˤĤ���</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">�ե�����ž����FTP�ˤ˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">�ե�����ž����FTP�ˤ�����˴ؤ���֤褯��������</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">�ե�����ž����FTP�ˤΥȥ�֥�˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">.ftpaccess</h4>
                    <div class="section_body">
                        <p>���å��������С��Ǥϡ���.ftpaccess�ץե���������֤��뤳�Ȥ��Ǥ��ޤ���<br>
                        ��.ftpaccess�פ���Ѥ���IP���ɥ쥹�λ�������Ԥ����Ȥǡ������С��ؤ�FTP��³�����¤��뤳�ȤǤ��ޤ���</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">.ftpaccess�Ȥ�</h4>
                    <div class="section_body">
                        <p>�ե����ñ�̤ǡ�FTP�˴ؤ��������Ԥ����Ȥ����������ե�����Ǥ���<br>
                        ��.ftpaccess�פȤ���̾���Υե�����̾�˻���ε��Ҥ򤹤뤳�Ȥˤ�ꡢFTP��³�������¤ʤɤ� �Ԥ����Ȥ��Ǥ��ޤ���</p>
                        <p>�㤨�С���ʬ��IP���ɥ쥹����ꤷ������IP���ɥ쥹�ʳ������FTP��³����ݤ��롢�Ȥ��ä������Ԥ����Ȥ���ǽ�Ǥ���<br>
                        ��.ftpaccess�פϡ����֥ե�����ʲ����ΰ�ˤ��αƶ����ڤӤޤ���</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">���ҤˤĤ���</h4>
                    <div class="section_body">
                        <p>�����IP���ɥ쥹�����FTP��³�Τߤ���Ĥ��뵭����</p>
                        <pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.0
&lt;/Limit&gt;</pre>
                        <p>�嵭����ˤ�ꡢ�������³��(IP���ɥ쥹����192.0.2.0��)����Τ�FTP��³����Ĥ��뤳�Ȥ���ǽ�Ȥʤ�ޤ���<br>
                        (¾��IP���ɥ쥹�ξ���FTP��³���Τ��Ǥ��ޤ���)</p>
                        <p class="note">���������IP���ɥ쥹(192.0.2.0)����Ȥ��Ƶ��ܤ��Ƥ��ޤ���</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">����</h5>
                            <div class="block_body">
                                <div class="border border_gray">
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Order Allow,Deny</p>
                                    <p>���ġ����ݤ�ͥ���̤���ꤷ�Ƥ��ޤ���</p>
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Deny from all</p>
                                    <p>��all�פ���ꤷ���Ƥ�FTP��³����ݤ��ޤ���</p>
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Allow from 192.0.2.0</p>
                                    <p class="mb0">����IP���ɥ쥹�������³����Ĥ��ޤ���</p>
                                </div>
                                <p>�Ĥޤꡢ�������Ƥ�FTP������������ݤ�����ǡ�����IP�������³�Τߵ��Ĥ��롢�Ȥ��������ȤʤäƤ��ޤ���</p>
                                <p>��Allow from�פε��Ҥ��ɲä��뤳�Ȥǡ���³������Ĥ���IP���ɥ쥹���ɲä��뤳�Ȥ�Ǥ��ޤ���</p>
                                <pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.0
Allow from ***.*.*.*
Allow from ***.*.*.*
Allow from ***.*.*.*
&lt;/Limit&gt;</pre>
                                <p>4�֥�å��ܤο����򵭺ܤ�����3�֥�å��ޤǤ�IP���ɥ쥹�򵭽Ҥ��뤳�Ȥǡ�������ʬ�����פ���IP���ɥ쥹��ޤȤ�ƻ��ꤹ�뤳�Ȥ�Ǥ��ޤ���
(�Ǹ�ϡ�.��(�ɥå�)�ǽ���äƤ��ޤ���)</p>
<pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.
&lt;/Limit&gt;</pre>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">��.ftpaccess�ץե����뤬�ƶ�����ե�����ˤĤ���</h4>
                    <div class="section_body">
                        <p>��.ftpaccess�פϡ����֤��줿�ե�����ʲ��ˤ��αƶ����ڤӤޤ���</p>
                        <p>�㤨�С��ۡ���ǥ��쥯�ȥ��/home/�����С�ID/�פ����֤������ϡ������С�������������Τˡ�.ftpaccess�פǤ����꤬�ƶ����ޤ���</p>
                        <p>�ޤ��������Τ褦�ʥɥ�����ȥ롼��(�����ե����)�����֤������ϡ�public_html�ʲ��ˡ�.ftpaccess�פαƶ����ڤӤޤ���</p>
                        <div class="border border_gray font-bold">
                            /home/�����С�ID/�ɥᥤ��̾/public_html/.ftpaccess
                        </div>
                        <p>���Τ褦�˥ե��������ꤷ�ơ�.ftpaccess�פ����֤���FTP���¤αƶ����ڤ��ϰϤ�Ȥ�ʬ���롢�Ȥ��ä����Ȥ���ǽ�Ǥ���</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>�ɲ�FTP��������Ȥ��Ф���������ˡ�Ȥ����</dt>
                            <dd>
                                <p>�ɲ�FTP��������ȤΡ֥ǥ��쥯�ȥ�������FTP�ؤΥ�����ǥ��쥯�ȥ�����ꤵ��Ƥ����硢��������ǥ��쥯�ȥ�ˡ�.ftpaccess�פ����֤���ɬ�פ�����ޤ���</p>
                                <p>��<em class="font-bold">/home/�����С�ID/�ɥᥤ��̾/</em>�פȤ����褦�ˡ��ǥ��쥯�ȥ����̤˻��ꤵ��Ƥ����硢��.ftpaccess�פ�Ʊ��ǥ��쥯�ȥ�ؤ����֤��Ƥ���������</p>
                                <p>�㤨�С���<em class="font-bold">/home/xsample/example.com/</em>�פ�֥ǥ��쥯�ȥ�פ˻��ꤵ��Ƥ�����ˡ�.ftpaccess��Ŭ�Ѥ��뤿��ˤϰʲ��Τ褦�����֤���ɬ�פ�����ޤ���</p>
                                <p><img class="flex" src="../img/manual/man_ftp_ftpaccess_1.png" alt=".ftpacces��Ʊ��ǥ��쥯�ȥ�����֤��Ƥ�������"></p>
                            </dd>
                        </dl>
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���֤κݤΤ����</h6>
                            <div class="msg_body">
                                <p>��ä����Ҥǡ�.ftpaccess�פ����֤�Ԥ��ޤ��ȡ�FTP��³���Τ��Ǥ��ʤ��ʤ��礬����ޤ���<br>
                                ���Τ��ᡢɬ����.ftpaccess�פλ��ͤ䵭�����Ƥ����򤷤���ǡ������ͤ���Ǥ�����֤���褦�ˤ��Ƥ���������</p>
                                <p>��.ftpaccess�פε�����ˡ�������ˤĤ��Ƥϥ��ݡ����оݳ��Ȥ����Ƥ��������Ƥ���ޤ���</p>
                                <p>IP���ɥ쥹����ꤹ��ݤϡ�����IP���ɥ쥹������IP���ɥ쥹���ɤ����򤴳�ǧ����������<br>
                                �����ͤΤ����ѤΥץ�Х����ˤ�äƤ�IP���ɥ쥹����ư�����礬����ޤ���<br>
                                ���ξ�硢�����IP���ɥ쥹����ꤹ�뤳�Ȥǡ���³���Τ�����ʤ��ʤäƤ��ޤ�������������ޤ���</p>
                                <p>�ɤ����Ƥ��.ftpaccess�פ�̵���ˤ��뤳�Ȥ�����ʤ����ϡ����ݡ��ȤޤǤ��䤤��碌����������</p>
                            </div>
                        </aside>
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