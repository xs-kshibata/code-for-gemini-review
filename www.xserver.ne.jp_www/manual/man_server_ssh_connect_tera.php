<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SSH���եȤ�����(Tera Term)  | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�Tera Term�פ��Ѥ��Ƥ����ͤΥ����С���������Ȥ�SSH��³���뤿��μ��򤴰��⤷�Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">SSH���եȤ�����(Tera Term)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">SSH���եȤ�����(Tera Term)</a>
                        <ol>
                            <li><a href="#link-a01">1.��SSH Authentication...�פ�����</a></li>
                            <li><a href="#link-a02">2.��Use RSA/DSA/ECDSA key to log in�פ����򤷡���Private key file:�פ򥯥�å�</a></li>
                            <li><a href="#link-a03">3.ɬ�׹��ܤ�����</a></li>
                            <li><a href="#link-a04">4.ɬ�׹��ܤ����ϡ�����</a></li>
                            <li><a href="#link-a05">5.��³��λ</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">SSH���եȤ�����(Tera Term)</h4>
                    <div class="section_body">
                    
                        <table class="table table_use-caption">
                            <caption>SSH��������Ⱦ���</caption>
                            <tbody>
                                <tr>
                                    <th>�����С��ʥۥ���̾��</th>
                                    <td>
                                        �����С�ID.xsrv.jp�ʤ����ͤν���ɥᥤ���
                                        <p class="note">���ۥ���̾��sv***.xserver.jp�ˤǤ����꤬��ǽ�Ǥ���</p>
                                        <p>�㡧xsample.xsrv.jp</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>�桼����̾</th>
                                    <td>�����С�ID<br>�㡧xsample</td>
                                </tr>
                                <tr>
                                    <th>ǧ������</th>
                                    <td>������ǧ��<br>���ѥ����ǧ�ڤ����ѤǤ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>��³�ݡ���</th>
                                    <td>10022</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <ul class="note-list note-list_margin mb30">
                            <li>��������μ��ϥС������4.75�ˤƵ��ܤ��Ƥ��ޤ���</li>
                            <li>��ʸ��β����ϡ����Ȥ���OS��С������ˤ��ʸ�����������ۤʤ��礬����ޤ���</li>
                        </ul>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.��SSH Authentication...�פ�����</h6>
                                <div class="box_body">
                                    <p class="mb0">Tera Term��ư������setup�ץ�˥塼�����SSH Authentication...�פ����򤷤ޤ���</p>
                                    <p class="note">��Tera Term��ưľ���New connection������ɥ���ɽ��������礬����ޤ���������Υ�����ɥ���ɽ������ޤ����顢��Cancel�ץܥ���򥯥�å����ƥ�����ɥ����Ĥ��Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_1.png" alt="Tera Term SSH Authentication��˥塼"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.��Use RSA/DSA/ECDSA key to log in�פ����򤷡���Private key file:�פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p>TTSSH: Authentication Setup������ɥ���ɽ������ޤ��Τǡ���Use RSA/DSA/ECDSA key to log in�פ����򤷡���Private key file:�ץܥ���򥯥�å����ޤ���<br>
                                    ��̩�������򤹤����������ɽ������ޤ��Τǡ���<a href="man_server_ssh.php#link-c01">�����С���Ǹ�����ǧ���Ѹ��ڥ���������Ԥ����</a>�פμ��4�ˤƥ�������ɤ�Ԥä��ʡ֥����С�ID��.key�˥ե��������ϡ�<a href="man_server_ssh.php#link-c02">��������Ͽ������</a>�פˤ���Ͽ����ޤ������������б����뤪�긵����̩������ꤷ����OK�ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_2.png" alt="TTSSH: Authentication Setup����"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.ɬ�׹��ܤ�����</h6>
                                <div class="box_body">
                                    <p>��File�ץ�˥塼�����New connection�פ����Ӥ�����������New connection�ץ�����ɥ��򳫤��ޤ���<br>
                                    ��New connection�ץ�����ɥ��ˤ�Host�ˤ��Ҥ��ޤν���ɥᥤ��̾��TCP port#�ˡ�10022�פ����Ϥ����������������ܤ����Ӥξ塢��OK�ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_3.png?date=210406" alt="Tera Term New connection"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.ɬ�׹��ܤ����ϡ�����</h6>
                                <div class="box_body">
                                    <p>SSH Authentication������ɥ���ɽ������ޤ��Τǡ���User name�פˤ��Ҥ��ޤΥ����С�ID����Passphrase�פ����򤷤���̩���Υѥ��ե졼�������Ϥ�����Use RSA/DSA/ECDSA key to log in�פ����򤵤�Ƥ�������ǧ���ơ�OK�ץܥ���򥯥�å����ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_4.png" alt="SSH Authentication"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a05">5.��³��λ</h6>
                                <div class="box_body">
                                    <p>Tera Term VT�Υ�����ɥ��ˤƲ����Υץ��ץȤ�ɽ��������³��λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_5.png" alt="�ץ��ץ�ɽ��"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                        <div class="border border_gray">
                            <p class="link mb0"><i class="ico ico_square-fill"></i>��Ϣ��<a href="man_server_ssh.php">SSH����</a><i class="ico ico_chevron-right"></i></p>
                        </div>
                        
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