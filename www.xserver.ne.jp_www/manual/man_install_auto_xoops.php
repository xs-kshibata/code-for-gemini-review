<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XOOPS Cube ��ñ���󥹥ȡ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��ô�ñ���󥹥ȡ��뵡ǽ�ǡ�XOOPS Cube�פ����֤��뤿��μ��򵭺ܤ��Ƥ��ޤ������å��������С��Ǥϴ�ñ�����ǡ�XOOPS Cube�פ����֤Ǥ���ִ�ñ���󥹥ȡ���׵�ǽ���󶡤��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">XOOPS Cube</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XOOPS Cube ��ñ���󥹥ȡ��� �Ϥ����</a></li>
                    <li><a href="#link-b">��ñ���󥹥ȡ�����</a>
                        <ol>
                            <li><a href="#link-b01">1.XOOPS Cube�Υ��󥹥ȡ�������</a></li>
                            <li><a href="#link-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ���פ򲡤��Ƥ���������</a></li>
                            <li><a href="#link-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ�Ǥ���</a></li>
                            <li><a href="#link-b04">4.���󥹥ȡ����ǧ</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">[����] MySQL�ʥǡ����١����ˤ�����</a>
                        <ol>
                            <li><a href="#link-c01">1.MySQL���ɲ�</a></li>
                            <li><a href="#link-c02">2.MySQL�桼�����ɲ�</a></li>
                            <li><a href="#link-c03">3.MySQL����������������</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XOOPS Cube ��ñ���󥹥ȡ��� �Ϥ����</h4>
                    <div class="section_body">
                    
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�Τ����ѤˤĤ���</h5>
                            <div class="msg_body">
                                <p>XOOPS Cube�δ�ñ���󥹥ȡ��뵡ǽ�ϡ������С��ֹ椬sv1��sv1999�ˤ���������Υ����С��ǤΤ����Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                <p>
                                    ���ҤǤ�2017ǯ11���ꡢ�����ѤΥ����С��ֹ椴�Ȥ˥ϡ��ɥ�������������������Ӻǿ������С��Ķ��ؤΰܹԥ��ƥʥ󥹤�缡���»ܤ��Ƥ���ޤ���<br>
                                    ���Υ��ƥʥ󥹺�Ȥ�λ���ޤ��ȡ�XOOPS Cube�����Ѥ��뤳�Ȥ��Ǥ��ʤ��ʤ�ޤ���
                                </p>
                                <p>���ƥʥ󥹤μ»ܾ����ϡ�<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4057">�ܹԥ������塼��ˤĤ���</a>�򤴻��Ȥ���������</p>
                            </div>
                        </aside>
                        
                        <p>������¦�ǤΡ��ѥå������Τ��Ѱդ�ɬ�פ���ޤ���<br>
                        �ʤ������󥹥ȡ������������˴ؤ��륵�ݡ��ȤϹԤäƤ��ޤ���</p>
                        <table class="table table_use-caption break-word">
                            <caption>XOOPS Cube ��ñ���󥹥ȡ��� ������</caption>
                            <tbody>
                                <tr><th class="w20per w30per-s">�����С�ID</th><td>xsample</td></tr>
                                <tr><th>�ɥᥤ��̾</th><td>example.com</td></tr>
                                <tr>
                                    <th>���󥹥ȡ���ǥ��쥯�ȥ�</th>
                                    <td><p class="mb5">/home/xsample/example.com/public_html/xoops</p>
                                        <div class="border border_gray">
                                            [http://example.com]�ˤ�XOOPS Cube�˥����������˾�������[/home/xsample/example.com/public_html/]�򥤥󥹥ȡ���ǥ��쥯�ȥ�˻��ꤹ��ɬ�פ�����ޤ���
                                        </div>
                                    </td>
                                </tr>
                                <tr><th>���󥹥ȡ���URL</th><td>http://example.com/xoops/</td></tr>
                            </tbody>
                        </table>
                        
                        <table class="table table_use-caption">
                            <caption>XOOPS Cube ��ñ���󥹥ȡ��� ư��Ķ�</caption>
                            <tbody>
                                <tr><th class="w20per w30per-s">PHP�С������</th><td>PHP 5.1.6 �� 5.3.3
                                <p class="note">��PHPư��С��������ѹ��ϡ��ޥ˥奢���<a href="man_program_php_ver.php">PHP�С�������ڤ��ؤ�</a>�פ򤴻��Ȥ�������</p>
                                <p class="note mb0">�������ɥѡ��ƥ��Υ⥸�塼�����ˤϡ�PHP 5.3 ���б����Ƥ��ʤ���Τ�����ޤ��Τǡ�����դ���������</p>
                                </td></tr>
                                <tr><th>�ǡ����١���</th><td>MySQL5.5<p class="note mb0">��ʸ�������ɤ� EUC-JP �����ꤷ�Ƥ���������</p></td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">��ñ���󥹥ȡ�����</h4>
                    <div class="section_body">
                    
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���󥹥ȡ����Ȥ�Ϥ�����ˡ�(�ǡ����١����κ����ˤĤ���)</h5>
                            <div class="msg_body">
                                <p>�ܥޥ˥奢��Ǥϡ��ץ����Υ��󥹥ȡ����Ʊ���ˡ����Ѥ���ǡ����١�����ư�������롢����ñ����ˡ�򤴰��⤷�Ƥ��ޤ���<br>
                                �ǡ����١������ư���Ѱդ�����ˤϡ���ñ���󥹥ȡ����Ԥ����ˡ���<a href="#link-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��ͤξ塢ͽ��ǡ����١�����������Ƥ����Ƥ���������</p>
                            </div>
                        </aside>
                        
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>����ñ���󥹥ȡ��뢪�ץ����Υ��󥹥ȡ���򥯥�å����Ƥ���������</p>
                        <p><img class="img" src="../img/manual/man_install_auto_other_1.png?date=210609" alt="��ñ���󥹥ȡ���˥ե����������������꡼�󥷥�å�"></p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.XOOPS Cube�Υ��󥹥ȡ�������</h5>
                                <div class="box_body">
                                    <p>XOOPS Cube �Υ��󥹥ȡ�������򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_1.png" alt="���󥹥ȡ�������򥯥�å�"></p>
                                    <p>�ƹ��ܤ����Ϥ����Ǹ�ˡ֥��󥹥ȡ���פ򲡤��Ƥ���������</p>
                                    
                                    <table class="table table_use-caption break-word">
                                        <caption>XOOPS Cube�Υ��󥹥ȡ�������</caption>
                                        <tbody>								                     
                                            <tr>
                                                <th class="w20per w30per-s">���󥹥ȡ���URL</th>
                                                <td><p class="mb5">�����ͤΥɥᥤ��̾/xoops</p>
                                                    <div class="border border_gray">
                                                        [http://�����ͤΥɥᥤ��̾]�ˤơ������ͤ�XOOPS Cube�˥����������˾�������[xoops]����ʬ�����Ȥ��Ƥ���������
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>XOOPS�ѥ᡼�륢�ɥ쥹</th><td>Ǥ�դΥ᡼�륢�ɥ쥹�����ꤷ�Ƥ�������</td></tr>
                                            <tr><th>XOOPS�ѥѥ����</th><td>XOOPS�ν��������ѥ����</td></tr>
                                            <tr>
                                                <th>�ǡ����١���</th>
                                                <td>
                                                    <p>���Ѥ���ǡ����١�������ꤷ�ޤ���<br>
                                                    �ä�����ͽ��Υǡ����١�����̵�������󿷤��˺���������ϡ���<em class="font-bold">��ư�ǥǡ����١�������������</em>�פ����򤷤Ƥ���������</p>
                                                    <aside class="msg msg_notice mb0">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����</h6>
                                                        <div class="msg_body">
                                                            <p>���Ǥ˺����ѤߤΥǡ����١��������Ѥ�����ϡ��ֺ����ѤߤΥǡ����١��������Ѥ���פ����򤷤Ƥ���������<br>
                                                            ���ξ��ϡ������ι��ܤ����Ϥ���������</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١���̾</dt>
                                                                <dd>
                                                                    <p>���Ѥ���ǡ����١�������ꤷ�Ƥ���������<br>
                                                                    ��)xsample_xoops</p>
                                                                </dd>
                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١����桼����̾</dt>
                                                                <dd>
                                                                    <p class="mb0">�ǡ����١����桼������ꤷ�Ƥ���������<br>
                                                                    ��)xsample_user</p>
                                                                </dd>
                                                                <dt><i class="ico ico_square-fill"></i>�ǡ����١����ѥѥ����</dt>
                                                                <dd>�嵭�ǻ��ꤷ���ǡ����١����桼����̾�Υѥ���ɤ����Ϥ��Ƥ���������</dd>
                                                            </dl>
                                                            
                                                            <p>�ǡ����١����κ����ˤĤ��Ƥϡ�<a href="#link-c">MySQL(�ǡ����١���)������</a>�פι��ܤ򤴻��Ȥ���������</p>
                                                        </div>
                                                    </aside>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_2.png" alt="XOOPS Cube������̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.��ǧ���ְ㤤���ʤ���С֥��󥹥ȡ���פ򲡤��Ƥ���������</h6>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.��λ���̤�ɽ�������Х��󥹥ȡ��봰λ�Ǥ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_3.png" alt="XOOPS Cube���󥹥ȡ��봰λ���̤Υ����꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.���󥹥ȡ����ǧ</h5>
                                <div class="box_body">
                                    <p>ɽ������Ƥ����󥯤���XOOPS Cube�ۡ���ڡ����ذ�ư���ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_4.png" alt="�����������¥桼��������̤Υ����꡼�󥷥�å�"></p>
                                    <p>�ʾ��XOOPS��Ƴ���Ͻ�λ�ˤʤ�ޤ���������ͤǤ�����</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                
                
                <section class="section">
                    <h4 id="link-c" class="section_ttl">[����] MySQL�ʥǡ����١����ˤ�����</h4>
                    <div class="section_body">
                        
                        <p>��ñ���󥹥ȡ���򤹤����ˡ�XOOPS Cube�����Ѥ���ǡ����١����򿷵��������ޤ���</p>
                        <p><img class="img" src="../img/manual/man_install_auto_2.png" alt="MySQL������˥ե����������������꡼�󥷥�å�"></p>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.MySQL���ɲ�</h5>
                                <div class="box_body">
                                    <p>XOOPS�����Ѥ���ǡ����١������ɲä��ޤ��������Ѥˤʤ���ǡ����١���̾����ꤷ����MySQL���ɲáץܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥǡ����١���̾�� ��xsample_xoops�� �Ȥ��ƺ������ޤ���</p>
                                    <p class="note">���ǡ����١���̾�ϡ֤����ͤΥ�����ID_�ǡ����١���̾�פȤʤ�ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_5.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.MySQL�桼�����ɲ�</h5>
                                <div class="box_body">
                                    <p class="mb0">���������ǡ����١����˥����������뤿���MySQL�桼�����ɲä��ޤ���</p>
                                    <p class="note">���ɲúѤߤ�MySQL�桼�������Ѥ�����ϡ�MySQL����������������˿ʤ�Ǥ���������</p>
                                    <p class="mb0">�����Ѥˤʤ���桼����̾�ȥѥ���ɤ����ꤷ�ޤ����桼�����ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϥ桼����̾���xsample_user�פȤ��ƺ������ޤ���</p>
                                    <p class="note">���ǡ����١���̾��Ʊ�ͤˡ��桼����̾�ϡ֤����ͤΥ�����ID_�桼����̾�פȤʤ�ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_3.png" alt="MySQL���ɲä˥ե����������������꡼�󥷥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c03">3.MySQL����������������</h5>
                                <div class="box_body">
                                    <p>��MySQL�ΰ����פ�����������ǡ����١����˥������������ɲä��ޤ�������������̤��ͭ�桼�������ɲä�����MySQL�桼���������ɲåܥ���򥯥�å����Ƥ����������ܥޥ˥奢��Ǥϡ�xsample_xoops�פˡ�xsample_user�פ��ɲä��ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_6.png" alt="MySQL��������̡�MySQL�Υ桼���ΰ����˥ե����������������꡼�󥷥�å�"></p>
                                    <p>�ʾ��MySQL������ϴ�λ�Ǥ���<br>
                                    �ʹߤϡ���<a href="#i1">��ñ���󥹥ȡ�����</a>�פ˱�äơ����󥹥ȡ����ԤäƤ���������</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                        
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