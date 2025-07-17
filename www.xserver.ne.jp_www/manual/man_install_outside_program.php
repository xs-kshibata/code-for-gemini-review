<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ư���ǧ�Ѥߥץ���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С���ư��γ�ǧ����줿�ץ�֥��䥨�å��������С��Ǥ�ư��ʤ��ץ����ˤĤ��Ƶ��ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">ư���ǧ�Ѥߥץ����</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ư���ǧ�Ѥߥץ����</a></li>
                    <li><a href="#link-b">���פʳ����ץ����ꥹ��</a>
                        <ul>
                            <li><a href="#link-b01">ư���ǧ�Ѥߥץ����</a></li>
                            <li><a href="#link-b02">ư���Բĥץ����</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">ư���ǧ�Ѥߥץ����</h4>
                    <div class="section_body">
                        <p>ư��Ķ��������������ץ�����Ƴ�����뤳�Ȥ���ǽ�Ǥ���</p>
                        <p>�������ʤ��顢��ǯ���ä��Ƥ���ޤ��ץ������ȼ������ͤ��줿����ʤɤˤ�ꡢ�����С����礭�ʱƶ���Ϳ������㤬��¿���������ޤ���</p>
                        <p>�����ץ�����Ƴ���κݤϡ����ˤ��ȼ����ν�����ޤ᤿�ץ����ΥС�����󥢥åפ򤴳�ǧ����������</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">���פʳ����ץ����ꥹ��</h4>
                    <div class="section_body">
						<aside class="msg msg_notice">
							<h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
							<div class="msg_body">
								<p>�ץ����ˤ����뵻��Ū�ʤ��䤤��碌�ˤĤ��ޤ��Ƥϡ����ݡ����оݳ��λ���Ǥ������ޤ��� �ƥץ����Υ桼�����ե������䡢�ץ���೫ȯ���ؤȤ��䤤��碌����������</p>
								<p>�ޤ���Ƴ����Υȥ�֥�����������������ˤĤ��ޤ��Ƥϡ������ݡ��Ȥ��н褤�������ͤޤ��� �����ͤμ�����Ǥ�θ��������Ѥ��������ޤ��褦���ꤤ�������ޤ���</p>
							</div>
						</aside>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">ư���ǧ�Ѥߥץ����</h5>
                            <div class="block_body">
                                <p><span class="sticker"><span class="label label_sticker">��ñ���󥹥ȡ���</span></span>��ɽ������Ƥ���ץ����ϡ�<a href="man_install_auto.php">��ñ���󥹥ȡ��뵡ǽ</a>�ˤƴ�ñ��Ƴ�����������ޤ���</p>
                                <p>�ޤ�����ñ���󥹥ȡ��뵡ǽ���Ѱդ��Ƥ��ʤ������Υץ����Ǥϡ���ư���󥹥ȡ���Υޥ˥奢����Ѱդ��Ƥ���ޤ���</p>

                                
                                <table class="table table_striped mb5">
                                    <thead>
                                        <tr>
                                            <th class="w40per">�ץ����̾</th>
                                            <th>����</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>WordPress ���ܸ��� (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <a class="sticker" href="../manual/man_install_auto_word.php"><span class="label label_sticker">��ñ���󥹥ȡ���</span></a><br>
                                                �С������6.8��(PHP7.4��PHP8.3)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>EC-CUBE4 (����åԥ󥰥�����)</th>
                                            <td class="tac">
                                                ��<br>
                                                <a class="sticker" href="../manual/man_install_auto_ec4.php"><span class="label label_sticker">��ñ���󥹥ȡ���</span></a><br>
                                                �С������4.3.0(PHP8.1��PHP8.3)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>EC-CUBE3 (����åԥ󥰥�����)</th>
                                            <td class="tac">
                                                ��<br>
                                                �С������3.0.18
                                          </td>
                                        </tr>
                                        <tr>
                                            <th>PukiWiki (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <a class="sticker" href="../manual/man_install_auto_puki.php"><span class="label label_sticker">��ñ���󥹥ȡ���</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>concrete5 (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������9.2.2 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Joomla (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������5.0.1 / 4.4.1 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>MODX (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������3.0.4-pl -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Movable Type (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������8.0.2 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Drupal (CMS)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������10.1.6 / 9.5.11 / 8.9.20 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Magento Open Source (����åԥ󥰥�����)</th>
                                            <td class="tac" >��</td>
                                        </tr>
                                        <tr>
                                            <th>Zen Cart (����åԥ󥰥�����)</th>
                                            <td class="tac">
                                                ��<br>
                                                <!-- �С������1.5.8a -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="tar">��2025ǯ4��22���ǽ�������</p>
                                <ul class="note-list note-list_margin">
                                    <li>���ä���­���ʤ����ϡ��ǽ����������κǿ��С�����󤪤�� <b>PHP8.1��MariaDB10.5</b> �ˤ�����ư��뤳�Ȥ��ǧ���Ƥ���ޤ���</li>
                                    <li>�����󥹥ȡ����ǽ�Ǥ��ä��ץ����ΰ����Ǥ��ꡢ����ǽ��ư����ݾڤ����ΤǤϤ���ޤ���</li>
                                </ul>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">ư���Բĥץ����</h5>
                            <div class="block_body">
                                <p>Tomcat�ʤɤ�JAVA�¹ԴĶ�����Ѥ����Τ䡢�ǡ����١����Ķ���PostgreSQL����Ѥ����Ρ����󥹥ȡ����root���¤�ɬ�פʥץ����Ϥ����Ѥ��������ޤ���</p>
                                <div class="border border_blue">
                                    <p class="mb0">����˥��롼�ץ�������<br>
                                    ��Aipo��<span class="link"><a href="http://aipostyle.com/" target="_blank" rel="nofollow">http://aipostyle.com/</a><i class="ico ico_new-window base-color"></i></span>�ˡ������ܥ�����<span class="link"><a href="http://cybozu.co.jp/" target="_blank" rel="nofollow">http://cybozu.co.jp</a><i class="ico ico_new-window base-color"></i></span>��</p>
                                </div>
                                
                            </div>
                        </section>
                        
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