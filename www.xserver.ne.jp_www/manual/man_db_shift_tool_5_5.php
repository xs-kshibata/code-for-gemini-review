<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQL5.5�ܹԥġ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��õ�С�������MySQL����MySQL5.5�ؤΥǡ����ܹԤ��������Ū�Ȥ�����MySQL5.5�ܹԥġ���פ����Ѽ�����ջ���˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">MySQL5.5�ܹԥġ���</h3>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl">MySQL5.5�ܹԥġ���</h4>
                    <div class="section_body">
                        <p>MySQL5.5�ܹԥġ���ϡ���С�������MySQL����MySQL5.5�ؤΥǡ����ܹԤ��������Ū�Ȥ����ġ���Ǥ���<br>
                        �ܹԥġ��������ϡ����Ū�˵�С�������MySQL��MySQL5.5��ξ������³��ǽ�ʾ��֤Ȥʤ�ޤ��Τǡ����ࡼ���ʰܹԺ�Ȥ���ǽ�Ȥʤ�ޤ���</p>
                        <p>�ܹԤκݤˤϡ���С�������MySQL��Ʊ�����ƤΥǡ����١����ȥǡ����١����桼����MySQL5.5�ˤ�������졢�����ѤΥץ����ˤ����ꤵ��Ƥ���ǡ����١����ۥ���̾��MySQL5.5���ͤ��ѹ����Ƥ������������ǡ��ܹԺ�Ȥ�λ�����뤳�Ȥ��Ǥ��ޤ���<br>
                        �ޤ����ǡ����١������ʸ�������ɤ���ꤷ�����MySQL5.5�ذܹԤ��뤳�Ȥ��ǽ�Ǥ���</p>
                        <p class="note">���ܹԥġ��������ϡ��ǡ����١����ȥǡ����١����桼���κ������Ԥ��ʤ��ʤ�ޤ��ΤǤ���դ���������</p>
                        <p class="note">��MySQL5.5�桼�����ǡ����١�������ĤǤ�������Ƥ�����֤Ǥϰܹԥġ�������ѤǤ��ޤ��󡣻����˥Хå����åפ�Ȥä���ǡ����Ƥ�MySQL5.5�桼�����ǡ����١����������Ƥ���������</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">�����Ѥ�ή��</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl">1. �����С��ѥͥ��˥塼��MySQL5.5�ܹԥġ���פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p>(���ߡ���С�������MySQL�����Ѥξ��ϡ�MySQL5.5�ܹԥġ���פΥ�˥塼��ɽ������ޤ���)</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_1.png" alt="��MySQL5.5�ܹԥġ���פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">2.��MySQL5.5�ܹԥġ�������Ѥ򳫻Ϥ���פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_2.png" alt="��MySQL5.5�ܹԥġ�������Ѥ򳫻Ϥ���פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">3. ���줾��Υǡ����١������Ф��ơ�[����]��ˤ�ʸ�������ɤ����򤷡��ְܹ�(��ǧ)�פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p class="note">��ʸ�������ɤϤ����ͤ����ѤΥץ�����Ķ��ˤ�äưۤʤ�ޤ���<br>
                                    �ä�ʸ�������ɤλ��꤬�ʤ����ϡ�EUC-JP�פ����Ӥ���������</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_3.png" alt="ʸ�������ɤ����Ϥ����ְܹ�(��ǧ)�פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">4. ��MySQL5.5�إǡ����١������ɲáʳ���ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_4.png" alt="�����ǧ�塢����ܥ���򥯥�å�"></p>
                                    <p>�ʾ�ν����ǥǡ����١��������MySQL5.5�ؤȰܹԤ���ޤ�����<br>
                                    ���˰ܹԤ��줿�ǡ����١��������Ƥγ�ǧ��Ԥ��ޤ���</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">5. ��MySQL5.5�� phpmyadmin�פ���ܹԸ�Υǡ����١��������Ƥ��ǧ���ޤ���</h5>
                                <div class="box_body">
                                    <p>�ܹԽ�����Ԥä�MySQL5.5�ǡ����١�����[ MySQL5.5�� phpmyadmin ]�����Ѥ��ơ����ܸ줬ʸ���������Ƥ��ʤ����ʤɤ��ǧ���ޤ���</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_5.png" alt="�ǡ����١��������Ƥ��ǧ"></p>
                                    <p>phpmyadmin�ˤϡ��֥ǡ����١����桼����̾�פȡ֥ǡ����١����桼�����Υѥ���ɡפ����Ϥ��뤳�Ȥǥ����󤬲�ǽ�Ǥ���</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">6. �����ѥץ���������ե�������Խ����ǡ����١����ۥ���̾���ѹ����ޤ���</h5>
                                <div class="box_body">
                                    <p>�ܹԸ�Υǡ����١�������Ȥ����꤬�ʤ���硢��С�������MySQL�����Ѥ��Ƥ����ץ���������ե�����ˤ���ǡ����١����ۥ���̾��MySQL5.5�Υǡ����١����ۥ���̾���ѹ����ޤ���</p>
                                    <p>����ե�����ˤĤ��Ƥϡ���ư���󥹥ȡ��뵡ǽ�����Ѥξ�硢���󥹥ȡ�����ե�����β����ե�������ѹ�����������</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>�ѹ���ե�����</dt>
                                        <dd>
                                            <table class="table break-word">
                                                <tbody>
                                                    <tr>
                                                        <th>WordPress</th>
                                                        <td>wp-config.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>XOOPS</th>
                                                        <td>mainfile.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>OsCommerce</th>
                                                        <td>admin/includes/configure.php<br>catalog/includes/configure.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ZenCart</th>
                                                        <td>admin/includes/configure.php<br>includes/configure.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Movable Type</th>
                                                        <td>mt-config.cgi<br>(��ư���󥹥ȡ���ˤ�MySQL����Ѥξ��)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>�ѹ�����ս�</dt>
                                        <dd>
                                            <p>��С�������MySQL�ۥ���̾��MySQL5.5�ۥ���̾�ϡ����줾��MySQL�ܹԥġ�����Ρ�<em class="font-bold">�����ѤˤĤ���</em>�פ˵��ܤ�����ޤ���</p>
                                            <p>sv300�����Υ����С��ˤ�MySQL4.0.x�����ѤΤ����ͤϰʲ��Τ褦�ˤ��ޤ���<br>
                                            <em class="font-bold">MySQL�ۥ���̾����localhost�ע��֤����ͤ�MySQL5.5�����С��Υۥ���̾��</em></p>
                                        </dd>
                                    </dl>
                                    <p>�ǡ����١���̾�ȥǡ����١����桼����̾��Ʊ�����Ƥ�MySQL5.5�ذܹԤ���뤿�ᡢ�ܹԤ�ȼ������ե�����ν����ս�ϥǡ����١����ۥ���̾�����Ǥ���</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">7. (6.)�ѹ��塢�����Υץ���ब�����ư��뤫����ǧ����������</h5>
                                <div class="box_body">
                                    <p class="note">���ܹԽ�����Ǥϡ���С�������MySQL���᤹���Ȥ��ǽ�Ǥ���<br>
                                    ���Τ��ᡢ�⤷�ܹԥġ������Ѥ��Ƥ⤴���ѤΥץ���ब����˵�ǽ���ʤ����ϡ����ٰܹԺ�Ȥ�λ����С��������ᤷ�Ƥ����������Ȥ򤪴��ᤷ�ޤ���</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">8. �嵭(3.)��(7.)�κ�Ȥ򡢰ܹԤ򤴴�˾�Υǡ����١���ʬ�����»ܤ��Ƥ���������</h5>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">9. ����˾�����ƤΥǡ����١����ΰܹԴ�λ�塢�֥С�������MySQL5.5�˰ܹԤ���ʳ�ǧ�ˡפ򥯥�å����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_6.png" alt="���ƤΥǡ����١�����ܹԸ塢�ܥ���򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">10. �֥С�������MySQL5.5�˰ܹԤ���ʳ���ˡפ򥯥�å����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_7.png" alt="���Ƥ򤴳�ǧ�ξ塢����ܥ���򥯥�å�"></p>
                                    <p>�ʾ�ǡ�MySQL5.5�ؤΰܹԺ�Ȥϴ�λ�Ǥ���</p>
                                    <aside class="msg msg_caution mb0">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>���κ�Ȥγ���ȤȤ�˵�С������Υǡ����١��������ƺ������ޤ���<br>
                                            �ܹԤ��ʤ��ä��ǡ����١�����������Ԥ��ޤ���Τǡ������ѥץ����ΰܹԾ�����ʬ����ǧ�ξ塢��Ȥ�ԤäƤ���������</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
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