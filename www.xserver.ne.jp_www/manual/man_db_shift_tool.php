<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQL�ܹԥġ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���MySQL4����MySQL5.0�ؤΥǡ����ܹԤ��������Ū�Ȥ�����MySQL5.0�ܹԥġ���פ����Ѽ�����ջ���˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">MySQL�ܹԥġ���</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">MySQL�ܹԥġ���ˤĤ���</a></li>
					<li><a href="#link-b">�����Ѥ�ή��</a>
						<ol>
							<li><a href="#link-b01">1.�����С��ѥͥ��˥塼��MySQL�ܹԥġ���פ򥯥�å����ޤ���</a></li>
							<li><a href="#link-b02">2.��MySQL�ܹԥġ�������Ѥ򳫻Ϥ���פ򥯥�å����ޤ���</a></li>
							<li><a href="#link-b03">3.���줾��Υǡ����١������Ф��ơ�[����]��ˤ�ʸ�������ɤ����򤷡��ְܹ�(��ǧ)�פ򥯥�å����ޤ���</a></li>
							<li><a href="#link-b04">4.��MySQLx.x�إǡ����١������ɲáʳ���ˡפ򥯥�å����ޤ���</a></li>
							<li><a href="#link-b05">5.��MySQLx.x�� phpMyAdmin�פ���ܹԸ�Υǡ����١��������Ƥ��ǧ���ޤ���</a></li>
							<li><a href="#link-b06">6.�����ѥץ���������ե�������Խ����ǡ����١����ۥ���̾���ѹ����ޤ���</a></li>
							<li><a href="#link-b07">7.(6.)�ѹ��塢�����Υץ���ब�����ư��뤫����ǧ����������</a></li>
							<li><a href="#link-b08">8.�嵭(3.)��(7.)�κ�Ȥ򡢰ܹԤ򤹤٤ƤΥǡ����١����ˤĤ��Ƽ»ܤ��Ƥ���������</a></li>
							<li><a href="#link-b09">9.���٤ƤΥǡ����١����ΰܹԴ�λ�塢�֥С�������MySQLx.x�˰ܹԤ���ʳ�ǧ�ˡפ򥯥�å����Ƥ���������</a></li>
							<li><a href="#link-b010">10.�֥С�������MySQLx.x�˰ܹԤ���ʳ���ˡפ򥯥�å����Ƥ���������</a></li>
						</ol>
					</li>
					<li><a href="#link-c">����Υǡ����١����Τܹ߰Ԥ���ߤ�����</a>
						<ol>
							<li><a href="#link-c01">1.�ܹ���ǡ����١����θ��̺����Ԥ���硢��DB����ʳ�ǧ�ˡפ򥯥�å����ޤ���</a></li>
							<li><a href="#link-c02">2.�����ǧ���̤ˤơ�DB����ʳ���ˡפ򥯥�å����ޤ���</a></li>
						</ol>
					</li>
					<li><a href="#link-d">���٤ƤΥǡ����١����ܹԤ���ߤ�����</a>
						<ol>
							<li><a href="#link-d01">1.MySQL�ܹԥġ�������Ѥ���ߤ����硢�ְܹԤ���ߤᡢ���ξ��֤��᤹�ʳ�ǧ�ˡפ򥯥�å����ޤ���</a></li>
							<li><a href="#link-d02">2.�ְܹԤ���ߤᡢ���ξ��֤��᤹�ʳ���ˡפ򥯥�å����ޤ���</a></li>
						</ol>
					</li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">�ǡ����١����˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section id="what" class="section">
                    <h4 class="section_ttl" id="link-a">MySQL�ܹԥġ���ˤĤ���</h4>
                    <div class="section_body">
                        <p>��MySQL�ܹԥġ���٤ϡ���С�������MySQL�ǡ����١����ˤĤ��ơ��ǿ��С�������MySQL�ؤΰܹԤ��������ġ���Ǥ���</p>
                        <p>
                            �ܥġ���Ǥϡ���С�������MySQL��Ʊ�����ƤΥǡ����١�����MySQL�桼���򡢺ǿ��С������˺������ޤ���<br>
                            �����ѤΥץ����ˤ������MySQL�ۥ���̾��ܹ���MySQL�Υۥ���̾���ѹ�����Τߤǡ��ǿ��С�������MySQL�ǡ����١��������Ѥ��뤳�Ȥ���ǽ�ˤʤ�ޤ���
                        </p>
                        
                        <p class="mb5">���ξ��˳��������硢��MySQL�ܹԥġ���٤����Ѥ��뤳�Ȥ��Ǥ��ޤ���</p>
                        <div class="border border_gray mb5">
                            <ul class="ul mb0">
                                <li>�ۤʤ�MySQL�С�������Ʊ̾��MySQL�桼�����ǡ����١�����¸�ߤ�����</li>
                                <li>�ܹԤ���ǡ����١��������̤�2GB��Ķ���Ƥ�����</li>
                                <li>MySQL�桼���Υѥ���ɾ��󤬰ܹԤ��Ǥ��ʤ���������¸����Ƥ�����</li>
                            </ul>
                        </div>
                        <p class="mb20">
                            �ʾ�˳�����������н���ˡ�ϡ������ͤΤ����Ѿ����ˤ��ۤʤ�ޤ���<br>
                            �ܺ٤ϡ��ܹԥġ�������Ѥ򳫻Ϥ���ݤ�ɽ��������å������򤴳�ǧ����������
                        </p>
                        
                        <aside class="msg">
                            <h5 class="msg_ttl font-m"><i class="ico ico_circle"></i>��MySQL�ܹԥġ���٤ˤ��ܹԺ����ϡ��ʲ������򤹤뤳�Ȥ��Ǥ��ޤ���</h5>
                            <div class="msg_body">
                                <ul class="ul">
                                    <li>MySQL�ǡ����١����ο�������</li>
                                    <li>MySQL�桼���ο����ɲ�</li>
                                </ul>
                            </div>
                        </aside>
                        
                        <p class="mt30">
							�����Ѳ�ǽ��MySQL�κǿ��С������ϡ������ѤΥ����С��ˤ��ۤʤ�ޤ���<br>
							�ޥ˥奢��ˤơ�MySQLx.x�פȵ��ܤΤ���Ľ�ϡ������ѤδĶ��˱������ǿ��С�����󤬼ºݤβ��̾��ɽ������ޤ���
						</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="flow" class="section">
                    <h4 class="section_ttl" id="link-b">�����Ѥ�ή��</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.�����С��ѥͥ��˥塼��MySQL�ܹԥġ���פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p>(���ߡ���С�������MySQL�����Ѥξ��ϡ�MySQL�ܹԥġ���פΥ�˥塼��ɽ������ޤ���)</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_1.png?date=20221020" alt="��MySQL�ܹԥġ���פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.��MySQL�ܹԥġ�������Ѥ򳫻Ϥ���פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_2.png?date=20220426" alt="��MySQL�ܹԥġ�������Ѥ򳫻Ϥ���פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.���줾��Υǡ����١������Ф��ơ�[����]��ˤ�ʸ�������ɤ����򤷡��ְܹ�(��ǧ)�פ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p>
                                        �ܹԻ��˥ǡ����١�����ʸ�������ɤ��Ѵ����뤳�Ȥ���ǽ�Ǥ���<br>
                                        �����ѤΥץ����ˤ����ơ����Ѥ���ʸ�������ɤλ��꤬�ʤ����ϡ�UTF-8�פ����Ӥ���������
                                    </p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_3.png?date=20220426" alt="ʸ�������ɤ����Ϥ����ְܹ�(��ǧ)�פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.��MySQLx.x�إǡ����١������ɲáʳ���ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_4.png?date=20220426" alt="�����ǧ�塢����ܥ���򥯥�å�"></p>
                                    <p>
                                        �ʾ�ν����ǡ����򤷤��ǡ����١������ǿ��С�������MySQL�˰ܹԤ���λ���ޤ���<br>
                                        ���˰ܹԤ���λ�����ǡ����١��������Ƥγ�ǧ��Ԥ��ޤ���
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.��MySQLx.x�� phpMyAdmin�פ���ܹԸ�Υǡ����١��������Ƥ��ǧ���ޤ���</h5>
                                <div class="box_body">
                                    <p>
                                        �ܹԤ���λ����MySQL�ǡ����١��������Ƥ�phpMyAdmin�ǳ�ǧ���뤳�Ȥ��Ǥ��ޤ���<br>
                                        [ MySQLx.x�� phpmyadmin ]�����Ѥ����ǡ����١��������Ƥ��ǧ���ޤ���
                                    </p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5.png?date=20220426" alt="�ǡ����١��������Ƥ��ǧ"></p>
                                    <p>
                                        phpMyAdmin�Υ�����ˤϡ���MySQL�桼����̾�פ�Ʊ�֥ѥ���ɡפ�ɬ�פǤ���<br>
                                        �������ʾ��ϼ��ι��ܤ˿ʤߡ������ѤΥץ����ˤ�����ɽ�����ƤǤ���ǧ����������
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b06">6.�����ѥץ���������ե�������Խ����ǡ����١����ۥ���̾���ѹ����ޤ���</h5>
                                <div class="box_body">
                                    <p>
                                        ��С�������MySQL�����Ѥ��Ƥ����ץ���������ե�����ˤ����MySQL�ۥ���̾�٤򡢡غǿ��С�������MySQL�ۥ���̾�٤��ѹ����ޤ���<br>
                                        ��ư���󥹥ȡ��뵡ǽ�����Ѥξ�硢���󥹥ȡ�����ե�����ˤ���ʲ�������ե�������ѹ�����������
                                    </p>
                                    <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>�ѹ��оݤ�����ե�����</dt>
                                    <dd>
                                        <table class="table break-word">
                                            <tbody>
                                                <tr>
                                                    <th>WordPress</th>
                                                    <td>wp-config.php</td>
                                                </tr>
                                                <tr>
                                                    <th>EC-CUBE 3</th>
                                                    <td>/app/config/eccube/database.yml</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>�ѹ�����ս�</dt>
                                    <dd>
                                        <p>
                                            ����ե�����˵��ܤΡ�MySQL�ۥ���̾�٤ˤʤ�ޤ�����С�������MySQL�ۥ���̾�Ⱥǿ��С�������MySQL�ۥ���̾�ϡ����줾��MySQL�ܹԥġ�����Ρ�<em class="font-bold">�ܹԻ���ɬ�פʺ�ȤˤĤ���</em>�פ˵��ܤ�����ޤ���
                                        </p>
                                        <p><img class="img" src="../img/manual/man_db_shift_tool_12.png?date=20220426" alt="�ܹԻ���ɬ�פʺ�ȤˤĤ���"></p>
                                    </dd>
                                </dl>
                                    <p>
                                        �ܹԤ�ȼ������ե�����ν����ս�ϡ�MySQL�ۥ���̾�٤ΤߤȤʤ�ޤ���<br>
                                        �ܥġ�����Ѥ����ܹԤˤ����ơ��֥ǡ����١���̾�פȡ�MySQL�桼����̾�פ��ѹ��Ϥ���ޤ���
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b07">7.(6.)�ѹ��塢�����Υץ���ब�����ư��뤫����ǧ����������</h5>
                                <div class="box_body">
                                    <p>�����ư�����ƥ�Ĥ�ɽ�����ǧ���ޤ����顢�ǿ��С������ؤΰܹԤ���λ���Ƥ���ޤ���</p>
                                    <p>
                                        �ʤ����ܹԥġ������Ѥ��Ƥ⤴���ѤΥץ���ब����˵�ǽ���ʤ���硢�ܹԤ���ä����ܹ����ΥС������ǰ���³�����Ѥ��뤳�Ȥ��ǽ�Ǥ���<br>  
                                        �ܹԤμ��ä����ܺ٤� ��<a href="#cancel">�ܹԤ���ä����</a>�פ򤴻��Ȥ���������
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b08">8.�嵭(3.)��(7.)�κ�Ȥ򡢰ܹԤ򤹤٤ƤΥǡ����١����ˤĤ��Ƽ»ܤ��Ƥ���������</h5>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b09">9.���٤ƤΥǡ����١����ΰܹԴ�λ�塢�֥С�������MySQLx.x�˰ܹԤ���ʳ�ǧ�ˡפ򥯥�å����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_6.png?date=20220426" alt="���٤ƤΥǡ����١�����ܹԸ塢�ܥ���򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b010">10.�֥С�������MySQLx.x�˰ܹԤ���ʳ���ˡפ򥯥�å����Ƥ���������</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_7.png?date=20220426" alt="���Ƥ򤴳�ǧ�ξ塢����ܥ���򥯥�å�"></p>
                                    <p>�ʾ�ǡ��ǿ��С�������MySQL�ؤΰܹԺ�Ȥϴ�λ�Ǥ��� </p>
                                    <aside class="msg msg_caution mb0">
                                        <h6 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>
												�ܹԤ���ꤹ������ǡ���С������Υǡ����١����򤹤٤ƺ�����ޤ���<br>
												������줿�ǡ����١����ϡ���ư�Хå����å׵�ǽ�����������Ǥ��ޤ���<br>
												MySQL�ۥ���̾���ѹ���̤��λ�Υץ���ब��¸���Ƥ��ʤ����Ȥ򤴳�ǧ����������
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="cancel" class="section">
                    <h4 class="section_ttl" id="link-c">����Υǡ����١����Τܹ߰Ԥ���ߤ�����</h4>
                    <div class="section_body">
                        
                        <p>����Υǡ����١����Τܹ߰Ԥ���ߤ�����μ��Ǥ���</p>
                        
                        <p>
                            �������ˤ�ꡢ�ǿ��С�������MySQL�������򤷤��ǡ����١������������ޤ���<br>
                            ���ѤΥץ����ˤ����ơ�MySQL�ۥ���̾�٤��ѹ�������硢�ص�С�������MySQL�ۥ���̾�٤��ѹ����Ƥ���������
                        </p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.�ܹ���ǡ����١����θ��̺����Ԥ���硢��DB����ʳ�ǧ�ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_8.png?date=20220426" alt="��DB���(��ǧ)�פ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.�����ǧ���̤ˤơ�DB����ʳ���ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_9.png?date=20220426" alt="�����ǧ�塢����ܥ���򥯥�å�"></p>
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="allcancel" class="section">
                    <h4 class="section_ttl" id="link-d">���٤ƤΥǡ����١����ܹԤ���ߤ�����</h4>
                    <div class="section_body">
                        
                        <p>
                            ���٤ƤΥǡ����١����ܹԤ���ߤ�����μ��Ǥ���<br>
                            �������ˤ�ꡢ�ܥġ���Ǻ��������ǿ��С�������MySQL�ǡ����١��������MySQL�桼���ϡ����٤ƺ������ޤ���
                        </p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-d01">1.MySQL�ܹԥġ�������Ѥ���ߤ����硢�ְܹԤ���ߤᡢ���ξ��֤��᤹�ʳ�ǧ�ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_10.png?date=20220426" alt="�ְܹԤ���ߤᡢ���ξ��֤��᤹�ʳ�ǧ�ˡפ򥯥�å�"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-d02">2.�ְܹԤ���ߤᡢ���ξ��֤��᤹�ʳ���ˡפ򥯥�å����ޤ���</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_11.png?date=20220426" alt="�ܹԤ���ߤᡢ���ξ��֤��᤹�ʳ���ˡפ򥯥�å�"></p>
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