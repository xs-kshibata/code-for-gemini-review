<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServer��������ȡ������С��ѥͥ�ؤ�����������ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���XServer��������ȡ������С��ѥͥ�ؤ�������������б���ˡ�򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">XServer��������ȡ������С��ѥͥ�ؤ�����������ˤĤ���</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">����������Ȥ�</a></li>
                        <li><a href="#link-b">���������󤵤줿�ݤ��н���ˡ</a>
							<ol>
								<li><a href="#link-b01">�������ƥ������å�</a></li>
                                <li><a href="#link-b02">�����ѥ���ɤ��ѹ�</a></li>
							</ol>
						</li>
                        <li><a href="#link-c">�����������ͽ�ɺ�</a>
                            <ol>
                                <li><a href="#link-c01">���ʳ�ǧ�ڤ�����</a></li>
                                <li><a href="#link-c02">�Կ��ʥ��������ǧ�ڡ�����</a></li>
                                <li><a href="#link-c04">���եȥ���������</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-d">��Ϣ�ڡ���</a></li>
					</ul>
				</div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">����������Ȥ�</h4>
                    <div class="section_body">
                        <p>����������Ȥϡ����դ���ä���ʪ��¾�ͤΥ���������ID���ѥ���ɤʤɡˤ������˼������������桼�����ˤʤꤹ�ޤ��ƥ�������Ȥ˥�����������԰٤�ؤ��ޤ���<br>
                            XServer��������ȡ������С��ѥͥ�Υ��������ή�Ф���ȡ������ͤ����ȤθĿ;���ή�Ф��Ƥ��ޤ���Ʊ���ˡ����ѥ�᡼���������Web�����Ȥβ�����ʤɤȤ��ä�����ʤ빶��ؤ�Ƨ����Ȥ������Ѥ���Ƥ��ޤ����줬����ޤ���</p>

                        <p>�ʤ������������ή�Ф���аޤˤϰʲ���3�̤꤬����ޤ���</p>

                        <ul class="ul">

                            <li>ID���ѥ���ɤ��¬�����</li>
                            <li>ID���ѥ���ɤ���߸�����
                                <ul>
                                    <li>- ID���ѥ���ɤ��갷�äƤ���Ȥ������߸�����</li>
                                    <li>- ��⤷��ID���ѥ���ɤ���߸�����</li>
                                </ul>
                            </li>
                            <li>ϳ�̤���ID���ѥ���ɤ����Ѥ����
                                <ul>
                                    <li>- �ե��å��󥰤�ޥ륦�����ˤ��ϳ��</li>
                                    <li>- �ѥ���ɤλȤ��󤷤ˤ��ϳ��</li>
                                </ul>
                            </li>
                        </ul>

                        <p><img class="img" src="../img/manual/man_malicious_login_1.png" alt="�����������ή��"></p>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">���������󤵤줿�ݤ��н���ˡ</h4>
                    <div class="section_body">
                        <p>XServer��������ȡ������С��ѥͥ�����������󤵤�Ƥ��ޤä���硢�ﳲ�γ�����ɤ�������ޤ˰ʲ����б�����������</p>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">�������ƥ������å�</h5>
                            <div class="block_body">
                                <p>�������ƥ����եȤ�OS��ܤΥ������ƥ���ǽ��Windows Defender�ʤɡˤˤơ����������ü�������ʥ����륹�˴������Ƥ��ʤ�����ǧ���Ƥ���������</p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b02">�����ѥ���ɤ��ѹ�</h5>
                            <div class="block_body">
                                <p>XServer��������ȡ������С��ѥͥ�Υ�����ѥ���ɤ�����ꤷ�Ƥ���������<br>
                                    �ޤ���ʣ���Υ����С�ID�����Ҥ�¾�����ӥ��򤴷��󤵤�Ƥ������Ϥ��٤ƤΥ�������ȤˤĤ��ƥѥ�����ѹ����Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���</p>
                                <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServer��������� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>
                                <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">�����С��ѥͥ� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>

                                <aside class="msg msg_caution">
                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�ѥ��������ˤ�������ջ���</h5>
                                    <div class="msg_body">
                                        <p>�ʲ��Τ褦�ʥѥ���ɤ��軰�Ԥˤ���¬���ưפȤʤ뤿���򤱤Ƥ���������</p>
                                        <ul class="ul">
                                            <li>ID��᡼��ɥ쥹��Ʊ��ʸ����<br>
                                                ����: �᡼�륢�ɥ쥹����info@example.jp�פǥѥ���ɤ���infoexample��</li>
                                            <li>�����Τߤ�ѻ��Τ�<br>
                                                ����: 38984��aaabbb</li>
                                            <li>ñ���ʸ����ȿ������Ȥ߹�碌<br>
                                                ����: abc123</li>
                                            <li>����˺ܤäƤ���ñ��<br>
                                                ����: get</li>
                                            <li>�褯�Ȥ���ѥ����<br>
                                                ����: password��admin��qwerty</li>
                                            <li>�������ꤷ����Τ�Ʊ���ѥ����</li>
                                            <li>¾�����ƥ�ǻ��Ѥ��Ƥ����Τ�Ʊ���ѥ����</li>
                                        </ul>
                                        <p>�ʲ��ξ������������Ǥʥѥ���ɤ����ꤷ�Ƥ���������</p>
                                        <ul class="ul">
                                            <li>�Ǥ������Ĺ��ʸ����ʺ���8ʸ���ʾ��</li>
                                            <li>�ѻ�����ʸ������ʸ���ˡ������򿥤�򤼤������������ʸ����</li>
                                            <li>�����-(�ϥ��ե�)�ס���.(�ɥå�)�פʤɤ�ޤ�</li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-c">�����������ͽ�ɺ�</h4>
                    <div class="section_body">

                        <p>XServer��������ȡ������С��ѥͥ�ؤ�������������ɻߤ��뤿�ᡢ�ʲ�ͽ�ɺ��μ»ܤ򤴸�Ƥ����������</p>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c01">���ʳ�ǧ�ڤ�����</h5>
                            <div class="block_body">
                                <p>���ʳ�ǧ�ڤȤϡ������ġ���ʤɤؤΥ�����κݤ��̾�Υѥ����ǧ�ڤ˲ä�����󥿥���ѥ���ɤ���������ǧ�ڥ������������ץ��Google Authenticator�ʤɡˤΤ褦�������ǧ����ˡ���ߤ����������ƥ��򶯲�������ȤߤǤ������ʳ�ǧ������򤷤Ƥ����������Ȥ��̾�Υѥ����ǧ�ڤ���١����������������޻ߤǤ����ǽ�����⤯�ʤ�ޤ����ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                <p>��<a href="man_order_twostepauth.php">�ޥ˥奢�� - ���ʳ�ǧ������</a></p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c02">�Կ��ʥ��������ǧ�ڡ�����</h5>
                            <div class="block_body">
                                <p>�Կ��ʥ��������ǧ�ڤȤϡ�XServer��������ȤؤΥ�������ˤ���ޤǤȰۤʤ�IP���ɥ쥹��ü������Υ�����ʤɡ��Կ��ʥ�������ǧ��������ǧ�ڥ����ɤ����Ϥ������̤�ɽ������뵡ǽ�Ǥ�����Ͽ�᡼�륢�ɥ쥹�������������ǧ�ڥ����ɤ����Ϥ����������Ȥǡ������󤬲�ǽ�Ȥʤ�ޤ����ʤ������ʳ�ǧ�ڤ�����Ѥߤξ��ϡ��Կ��ʥ��������ǧ�ڡפϹԤ��ޤ��󡣾ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                <p>��<a href="man_order_loginsecurity.php">�ޥ˥奢�� - �Կ��ʥ��������ǧ��</a></p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c04">���եȥ���������</h5>
                            <div class="block_body">
                                <p>�Ť��С������Υץ�������Ѥ�³���뤳�Ȥ����������������оݤȤ���������ꥹ�����⤯�ʤ�ޤ���OS��ޤ᥽�եȥ������Ͼ�˺ǿ��ξ��֤��ݤĤ褦�����åץǡ��Ȥ򤷤Ƥ���������</p>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-d">��Ϣ�ڡ���</h4>
                    <div class="section_body">

                        <p>��<a href="man_malicious_password_crack.php">�ޥ˥奢�� - �᡼�륢������ȤΥѥ���ɥ���å��ˤĤ���</a></p>
                        <p>��<a href="man_malicious_access.php">�ޥ˥奢�� - �������������ʥե�����β����������ʥե��������֡ˤˤĤ���</a></p>

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