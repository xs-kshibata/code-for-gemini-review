<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�Ѹ콸 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å�󥿥륵���С��Τ����Ѥ˺ݤ����о줹�������Ѹ�䥨�å��������С���ͭ�δ����ġ���̾�ʤɤ˴ؤ����Ѹ콸�Ǥ���">

</head>

<body id="pid-faq">

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
            
                <h3 class="sub-ttl">�Ѹ콸</h3>
                
                <div class="faq">
                    <dl id="01" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>XServer���������</dt>
                        <dd class="faq_unit_body">
                            <p>XServer��������Ȥϡ����å��������С���ޤ�XServer��Ϣ�����ӥ��δ����˶��̤��ƻ��ѤǤ��륢������ȤǤ���<br>�����������뤳�Ȥǡ������ͤΤ���Ͽ����γ�ǧ���ѹ�����ư��������ʤɤ�Ԥ����Ȥ��Ǥ��ޤ���</p>
                       		<p>����URL����������Ԥ���������˥塼��ü��XServer��������ȥ�˥塼���饢���������뤳�Ȥ��Ǥ��ޤ���</p>
                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>
                            <p>�ܤ����ϡ�<a href="man_tool_info.php">�ޥ˥奢��</a>�򤴻��Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->

                    <dl id="02" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>���å��������С��������</dt>
                        <dd class="faq_unit_body">
                            <p>�֥��å��������С���������ץڡ����ϡ������Ф�ɥᥤ��SSL������γƼ�����ʤɡ������б��Ĥ�ɬ�פʳƼ��Ȥ�Ԥ��������̤Ǥ���<br>�����󤹤뤳�Ȥǡ���������Υ����С����ɥᥤ��SSL�Υץ������Ѵ��¤ʤɡ��������γ�ǧ������Τ���ʧ���ʤɤ�Ԥ����Ȥ��Ǥ��ޤ���</p>
                       		<p>����URL��������󤹤뤳�Ȥǥ�����������ǽ�Ǥ����᡼�륢�ɥ쥹��XServer���������ID�Ǥ�ġˤȥѥ���ɤǥ�����򤪻����������</p>
                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>
                            <p>�ܤ����ϡ�<a href="man_tool_xserver.php">�ޥ˥奢��</a>�򤴻��Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="03" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�����С��ѥͥ�</dt>
                        <dd class="faq_unit_body">
                            <p>�����С��γƼ�����ʥ᡼�륢������Ȥ�ȯ�ԡ��ɥᥤ�������ʤɡˤ�Ԥ�����δ����ѥͥ�Ǥ���</p>
                            <p>
                                ����URL��ꥵ���С��ѥͥ�ؤΥ����󤬲�ǽ�Ǥ���<br>
                                XServer���������ID�ʤ���Ͽ�᡼�륢�ɥ쥹��/XServer��������ȥѥ���ɤǥ�����򤪻����������</p>
                            <p class="note">���ᥤ��FTP��������ȤΥ桼����̾�ȥѥ���ɡʥ����С�ID�ȥ����С��ѥ���ɡˤǤ�����󤹤뤳�Ȥ���ǽ�Ǥ���</p>
                            <p><i class="ico ico_square-fill"></i>�����С��ѥͥ� ������URL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/server/</a></p>
                            <p>�ܺ٤�<a href="man_tool_server.php">�ޥ˥奢��</a>�⤴���Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="04" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>��ư�Хå����å�</dt>
                        <dd class="faq_unit_body">
                            <p>�������ӥ��ǹԤäƤ��롢�����������θξ�䤽��¾�ȥ�֥����������ơ������С���Υǡ�����Хå����åפ��륵���ӥ��Τ��ȤǤ���<br>
                            �����С���Υǡ���������1��Хå����å����ѤΥϡ��ɥǥ������ؤȥ��ԡ����������С��ΰ��Web���᡼��ǡ����ֲ��14��ʬ�ס�MySQL�ǡ����١����ֲ��14��ʬ�פΥǡ������ݻ����뤳�Ȥǡ��ǡ����ü��β�ǽ���������˸��餷�Ƥ��ޤ���<br>
                            �ޤ��������ͤؤΥХå����åץǡ������󶡤�ԤäƤ��ޤ���</p>
                            <aside class="msg msg_notice">
                                <h6 class="msg_ttl">
                                    <i class="ico ico_circle-arrow-right"></i>
                                    sv12301.xserver.jp �����Υ����С������ sv1��sv20.xtwo.ne.jp �����ѤΤ����ͤˤĤ���
                                </h6>
                                <div class="msg_body">
                                    <p>
                                        sv12301.xserver.jp �����Υ����С������ sv1��sv20.xtwo.ne.jp �ˤĤ��Ƥ�Web���᡼��μ�����ǽ�ʥǡ����ϡֲ��7���֡פȤʤ�ޤ���<br>
                                        �缡�Хå����å״��֤�14���˳��礹��ͽ��򤷤Ƥ��ꡢ�󶡤ν������Ǥ����褴���⤤�����ޤ���
                                    </p>
                                </div>
                            </aside>
                            <p>�ܺ٤�<a href="../functions/service_backup.php">������</a>�⤴���Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="05" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�ޥ���ɥᥤ��</dt>
                        <dd class="faq_unit_body">
                            <p>�ޥ���ɥᥤ��Ȥϡ���ĤΥ����С��������ʣ�����ȼ��ɥᥤ�����Ѳ�ǽ�ʥ����ӥ��Τ��ȤǤ���<br>
                            �ɥᥤ�󤴤Ȥ˰ۤʤ�ۡ���ڡ�������������ꡢ�ۤʤ�᡼�륢������Ȥ�������뤳�Ȥ��ǽ�Ǥ���</p>
                            <p>�㤨�Ф����ͤ� example.com �� example.jp �򤪻����ξ�硢http://www.example.com �� http://www.example.jp �����줾��ǰۤʤä�����ƥ�Ĥ�ɽ�������뤳�Ȥ���ǽ�Ǥ���</p>
                            <p>�ޤ��� info@example.com �� info@example.jp ���̡��Υ᡼�륢������ȤȤ������Ѥ��뤳�Ȥ��ǽ�Ǥ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="06" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>���֥ɥᥤ��</dt>
                        <dd class="faq_unit_body">
                            <p>���֥ɥᥤ��Ȥϡ����Ѥ��Ƥ���ɥᥤ������ˡ���������ʸ�����Ĥ����ɥᥤ��Τ��ȤǤ���<br>
                            �����̤˥��֥ɥᥤ������Ѥ���ʤɡ��ɥᥤ������������Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                            <p>��) example.com�Υ��֥ɥᥤ��<br>
                            �֥��ѡ�blog.example.com<br>
                            ����åץ������ѡ�shop.example.com</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="07" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�͡��ॵ���С�</dt>
                        <dd class="faq_unit_body">
                            <p>�ɥᥤ���IP���ɥ쥹�Ȥ��ӤĤ�������ô�������С��Τ��Ȥǡ��ꥯ�����ȤΤ��ä��ɥᥤ��(��:<?php print $SITE_URL; ?>)���б�����IP���ɥ쥹(�㡧120.136.8.250)���֤��ޤ���<br>
                            DNS�����С��Ȥ�ƤФ졢�ɥᥤ������Ѥ���ݤϡ�ɬ�����Υ����С�����ꤹ��ɬ�פ�����ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="08" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>Whois����</dt>
                        <dd class="faq_unit_body">
                            <p>�ͥåȥ���ΰ��ꤷ�����Ѥ���Ū�Ȥ��ƥ��󥿡��ͥåȾ�Ǹ�������Ƥ��롢�֥ɥᥤ����Ͽ�ԡפ��ô����̾�ס�IP���ɥ쥹�פȤ��ä��ɥᥤ��˴ؤ������Τ��ȤǤ���<br>
                            �嵭�˲ä�������Ͽǯ�����ס�ͭ�����¡פʤɤξ���⻲�Ȥ��뤳�Ȥ��Ǥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="09" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>Whois�������������</dt>
                        <dd class="faq_unit_body">
                            <p>�ȼ��ɥᥤ������Ѥκݤˡ�Whois����Ȥ�����Ͽ����Ƥ���Ŀ;�����軰�Ԥ˸������ʤ��褦�ˡ��ɥᥤ�������Ҥξ�����֤������Ƹ������륵���ӥ��Τ��ȤǤ���</p>
                            <p>�������ӥ��ˤ����Ƥ⡢CO.JP��NE.JP�ʤɤ�°��JP������������������б����Ƥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="10" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>FTP</dt>
                        <dd class="faq_unit_body">
                            <p>FTP�Ȥϡ�File Transfer Protocol��ά�ǡ��ͥåȥ����Υ���ԥ塼���֤ǥե�����ž����Ԥ�������̿���ˡ�Τ��ȤǤ���<br>
                            FTP���Ѥ��ơ��ե�����򥵡��С���˥��åץ��ɤ��뤳�Ȥǡ��ۡ���ڡ�������������ꤹ�뤳�Ȥ�Ǥ��ޤ���<br>
                            �ޤ������̤�FTP�ǥե�����ž���ΤǤ��������ꤹ��������FTP��������ȡפȸƤӤޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="11" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�ե�����ޥ͡�����</dt>
                        <dd class="faq_unit_body">
                            <p>�֥饦������Ѥ��ƥե�����Υ��åץ��ɡ��������Ԥ�����Υ����ƥ�Ǥ���</p>
                            <p>����URL���ե�����ޥ͡�����ؤΥ����󤬲�ǽ�Ǥ���<br>
                            FTP�桼����̾��FTP�ѥ���ɤǥ�����򤪻����������</p>
                            <p><i class="ico ico_square-fill"></i>�ե�����ޥ͡����� ������URL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/</a></p>
                            <p>�ޤ���<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ��������֥����С��פΡ֥ե���������פ���⥢����������ǽ�Ǥ���</p>
                            <p>�ܺ٤�<a href="man_tool_file.php">�ޥ˥奢��</a>�⤴���Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="12" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>WEB�᡼��</dt>
                        <dd class="faq_unit_body">
                            <p>WEB�᡼��ϥ֥饦������Ѥ��ƥ᡼���������ʤɤ�Ԥ������ƥ�Ǥ���</p>
                            <p>����URL���WEB�᡼��ؤΥ����󤬲�ǽ�Ǥ���<br>
                            �᡼�륢�ɥ쥹�ȥ᡼�륢�ɥ쥹�������ˤ���ᤤ���������ѥ���ɤǥ�����򤪻����������</p>
                            <p><i class="ico ico_square-fill"></i>WEB�᡼�� ������URL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                            <p>�ܺ٤�<a href="man_tool_mail.php">�ޥ˥奢��</a>�⤴���Ȥ���������</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="13" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>IP���ɥ쥹</dt>
                        <dd class="faq_unit_body">
                            <p>IP�Ȥϡ�Internet Protocol��ά�ǡ�IP���ɥ쥹�Ȥϥͥåȥ����Υ���ԥ塼�����̤��뤿��˳�꿶��줿�ֹ�Τ��Ȥ�ؤ����ͥåȥ����Ǥν���Τ褦������̤�����ΤǤ���</p>
                            <p>��)192.168.0.1</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="14" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>SSL</dt>
                        <dd class="faq_unit_body">
                            <p>���󥿡��ͥåȾ�ǤΥǡ������̿���Ź沽���륻�����ƥ���ǽ�Τ��ȤǤ��ꡢSecure Sockets Layer��Ƭʸ�����ä�ά���줿��ΤǤ���<br>
                            �ޤ����������ä�����ΰŹ沽�̿������ǤϤʤ���������Web�����Ȥ�����Ǥ����ΤȤ��ƾ������뵡ǽ�������Ƥ��ޤ���<br>
                            �Ŀ;�����갷�������Ȥˤ����Ƥ��äˡ��桼�����˰¿����ƥ����Ȥ����Ѥ��Ƥ�餦����ˡ�SSL������ˤ��������Υ��ԡ��뤬ɬ�ܤȸ����Ƥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="15" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>.htaccess(�ɥåȥ������ƥ�����������)</dt>
                        <dd class="faq_unit_body">
                            <p>.htaccess�ʥɥåȥ������ƥ������������ˤȤϡ��ǥ��쥯�ȥ�ñ�̤ǡ������������¤�桼����ǧ�ڤʤɤ�����Ǥ����ü�ʥե�����Ǥ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="16" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�ǡ����١���</dt>
                        <dd class="faq_unit_body">
                            <p>�ǡ����١����Ȥϡ�¿���Υǡ��������Ѥ����ǡ����ν���Τ��ȡ��⤷���Ϥ��δ��������ƥ�Τ��ȤǤ���</p>
                            <p>�ǡ����١����Ȥ��Ƥϡ��ǡ����ν��ޤ��ɽ������ɽ������"��졼����ʥ�ǡ����١���"�Ȥ�����Τ���ή�ǡ����å��������С��ˤ����Ƥ��MySQL�פ����Ѳ�ǽ�Ǥ���<br>
                            �֥���CMS��Ȥ��ݤʤ����Ѥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="17" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�Хå��ܡ���</dt>
                        <dd class="faq_unit_body">
                            <p>�����С����郎��³����Ƥ���ͥåȥ���δ���ʬ�ˤ������̿������Τ��ȤǤ���<br>
                            ���̤��礭���ۤ�¿���Υǡ�������������ǽ�Ǥ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="18" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>CGI</dt>
                        <dd class="faq_unit_body">
                            <p>CGI�Ȥϡ�Common Gateway Interface��ά�ǡ�Web�ڡ������ưŪ���Ѳ����Ȥ߹�����ȤߤΤ��ȤǤ���<br>
                            CGI�ϤɤΤ褦�ʳ�ȯ����Ǥ���Ѥ��뤳�Ȥ��Ǥ��ޤ�����Perl�����褯�Ȥ��Ƥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="19" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>ž����</dt>
                        <dd class="faq_unit_body">
                            <p>ž���̤Ȥϡ������ȥڡ����˥������������ä��ݡ������С���������ԤΥ֥饦�����������줿�ǡ���(html������ʤ�)�������̤Τ��ȤǤ���<br>
                            ����������¿���ڡ����ۤɡ�ž���̤�¿�����Ȥˤʤ�ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="20" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>�ѡ��ߥå����</dt>
                        <dd class="faq_unit_body">
                            <p>�ե������ե�������Ф���桼�����Υ����������¤Τ��ȤǤ���</p>
                            <p>���ꤹ��ݤϡ�755�פʤɡ�3��ο������Ѥ�������򤷤ޤ���<br>
                            �����顢�ե�����/�ǥ��쥯�ȥ�Ρ�Owner(��ͭ��)�ס�Ʊ���ޥ�������ѤǤ����Group(���롼��)�ס�����¾���ƤΡ�Other(����¾)�פΤ��줾���Ф��ơ����ɤ߹��ߡסֽ񤭹��ߡסּ¹ԡפθ��¤�Ϳ�������꤬�Ǥ��ޤ���</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    
                    
                </div>
                <!-- /.faq -->
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