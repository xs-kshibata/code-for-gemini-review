<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�������������ʥե�����β����������ʥե��������֡ˤˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢����������������ʥե�����β����������ʥե��������֡ˤ��б���ˡ�򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">�������������ʥե�����β����������ʥե��������֡ˤˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                        <div class="toc-list">
                        <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">�������������ʥե�����β����������ʥե��������֡ˤȤ�</a></li>
                                <li><a href="#link-previous-b">�������������ʥե�����β����������ʥե��������֡ˤθ���</a></li>
                                <li><a href="#link-previous-c">�������������ʥե�����β����������ʥե��������֡ˤ��줿�ݤ��н���ˡ</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">�������ƥ������å�</a></li>
                                        <li><a href="#link-previous-c02">�����ʥ���ƥ�Ĥκ��</a></li>
                                        <li><a href="#link-previous-c03">���ۡ���ڡ����Ƴ���������</a></li>
                                        <li><a href="#link-previous-c04">�����ѥ���ɤ��ѹ�</a></li>
                                        <li><a href="#link-previous-c05">����FTP��������ȤΥѥ���ɤ��ѹ������</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">��������������ͽ�ɺ�</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">���ʳ�ǧ�ڤ�����</a></li>
                                        <li><a href="#link-previous-d03">���եȥ���������</a></li>
                                        <li><a href="#link-previous-d04">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</a></li>
                                        <li><a href="#link-previous-d05">WordPress�������ƥ�����</a></li>
                                        <li><a href="#link-previous-d06">WAF����</a></li>
                                        <li><a href="#link-previous-d07">php.ini����</a></li>

                                    </ol>
                                </li>
                            </ul>
                        </div>

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-a">�������������ʥե�����β����������ʥե��������֡ˤȤ�</h4>
                            <div class="section_body">
                                <p>�������������Ȥϡ������������¤�����ʤ����դΤ����ʪ�������С�����󥷥��ƥ�������������˿�������԰٤�ؤ��ޤ���<br>
                                    �������������ˤ��ե�����β����������ʥե���������֤������ȡ��տޤ��ʤ�����ƥ�Ĥ���������Ƥ��ޤä��ꡢ�����Ԥ�PC�䥹�ޡ��ȥե���ʤɤ������륹�������Ƥ��ޤä��ꡢ�Ŀ;�����褵��Ƥ��ޤ��Ȥ��ä����줬����ޤ���</p>

                                <p><img class="img" src="../img/manual/previous/man_malicious_access_1.png" alt="��������������ή��"></p>
                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-b">�������������ʥե�����β����������ʥե��������֡ˤθ���</h4>
                            <div class="section_body">
                                <p>�������������μ�ʸ����ˤϰʲ���2�̤꤬����ޤ���</p>

                                <ul class="ul">
                                    <li>���������ή�Ф���
                                        <ul>
                                            <li>- ID���ѥ���ɤ��¬�����</li>
                                            <li>- ID���ѥ���ɤ���߸�����</li>
                                            <li>- �ե��å��󥰤�ޥ륦������¾�����ƥ�ȤλȤ��󤷤ˤ��ID���ѥ���ɤ�ϳ�̤���</li>
                                        </ul>
                                    </li>
                                    <li>�������ƥ����ȼ������ͤ��������С�����<br>
                                        <p class="note">���ȼ����Ȥϡ��ץ������Զ����߷׾�Υߥ��������Ȥʤä�ȯ�����륻�����ƥ���η�٤Τ��ȡ�</p>
                                    </li>
                                </ul>

                                <p>������θ����ˤĤ��Ƥ⡢�������к���»ܤ��Ƥ������Ȥ����������������ɻߤ����ꡢ�ﳲ��Ǿ��¤��ޤ��뤳�Ȥ��Ǥ��ޤ������������������ɤ��к��ˤĤ��Ƥϡ���<a href="#link-previous-d">��������������ͽ�ɺ�</a>�פ�������������</p>
                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-c">�������������ʥե�����β����������ʥե��������֡ˤ��줿�ݤ��н���ˡ</h4>
                            <div class="section_body">

                                <p><img class="img" src="../img/manual/previous/man_malicious_access_2.png" alt="���������������줿�ݤ��н���ˡ"></p>

                                <p>�������������ʥե�����β����������ʥե��������֡ˤ��ﳲ������Ƥ��ޤä���硢�ﳲ�γ�����ɤ�������ޤ˰ʲ����б�����������</p>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c01">�������ƥ������å�</h5>
                                    <div class="block_body">
                                        <p>�������ƥ����եȤ�OS��ܤΥ������ƥ���ǽ��Windows Defender�ʤɡˤˤơ����������ü�������ʥ����륹�˴������Ƥ��ʤ�����ǧ���Ƥ���������</p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c02">�����ʥ���ƥ�Ĥκ��</h5>
                                    <div class="block_body">
                                        <p>�ե�����ޥ͡�����ޤ���FTP���եȤ��Ѥ����ʲ������줫����ˡ�ˤ������ʥ���ƥ�Ĥ������Ƥ���������</p>

                                        <p>��<a href="man_tool_file.php">�ޥ˥奢�� - �ե�����ޥ͡�����</a></p>

                                        <p>��<a href="man_ftp_setting.php">�ޥ˥奢�� - FTP���եȤ�����</a></p>
                                        <p class="note">�������ʥ���ƥ�Ĥ����������˥ۡ���ڡ����������ȤˤĤ��ơ�<a href="#link-previous-c03">���ۡ���ڡ����Ƴ���������</a>�פ򤴳�ǧ����������</p>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>�ڿ侩�ۤ��٤ƤΥե�����κ��</dt>
                                            <dd class="pl0">
                                                <p>�����ͤΥ����С������������Τ��٤ƤΥե�����������Ƥ���������<br>
                                                    ���������������ﳲ�����ä���硢�����ʥե������¾�˥Хå��ɥ����������������ưפȤ��뿯����ϩ�ˤ����֤���Ƥ����ǽ�������˹⤯�ʤ�ޤ���<br>
                                                    ���Τ��ᡢ���٤��٤ƤΥե�����������Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���
                                                </p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>�����ե�����κ��</dt>
                                            <dd class="pl0">
                                                <p>���Ҥˤ���������������ȯ�����Τ�����硢��̾�֡ڥ��å��������С��ۢ����ע� �����ͤΥ����С���������Ȥˤ����������ʥ��������θ��Τ�������¤μ»ܤˤĤ���(xsvc************)�פȤ��ä��᡼����������Ƥ��ޤ���<br>
                                                    ���Υ᡼����˵��ܤ��Ƥ���ޤ���[�����ץ����Ȼפ���ե��������]�Τ��٤ƤΥե�����ˤĤ��ƺ����»ܤ��Ƥ���������</p>
                                                <p class="note">��[�����ץ����Ȼפ���ե��������]�˵��ܤ���Ƥ���ե�����ʳ��ˤ������ʥե����뤬¸�ߤ����ǽ��������ޤ���ɬ�������ͤ����ȤǤ��٤ƤΥե�������������Ƥ��������ޤ��褦���ꤤ�������ޤ���</p>
                                            </dd>
                                        </dl>

                                        <div class="border border_yellow">
                                            �������ͤ����ȤǤ��٤ƤΥե���������������������ɥᥤ��̾�Υե��������γ��ؤ������ե����뤬���֤���Ƥ��ʤ���硢�ʲ�����ˡ�Ǥ������ʥ���ƥ�Ĥ������뤳�Ȥ��Ǥ��ޤ���
                                        </div>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>�����ɥᥤ��ν����</dt>
                                            <dd class="pl0">
                                                <p>�����С��ѥͥ���Ρ֥ɥᥤ������פˤƳ����ɥᥤ��Ρֽ�����פ򥯥�å�����������ˡ�֥������ΰ衦����ν�����פ����򤷤Ƥ���������<br>
                                                    �ɥᥤ�������ˤ�ꡢ�����ɥᥤ��Υ������ΰ�����֤���Ƥ��뤹�٤ƤΥե����뤬�������ޤ����ʤ����ܺ�Ȥˤ��ǡ����١����ν����������Ϥ���ޤ���
                                                </p>
                                                <p>��<a href="man_domain_reset.php">�ޥ˥奢�� - �ɥᥤ��ν����</a></p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>WordPress�����</dt>
                                            <dd class="pl0">
                                                <p>�����С��ѥͥ���Ρ�WordPress������פˤƳ���WordPress�Ρֽ�����פ򥯥�å����Ƥ���������</p>
                                                <p class="note">��WordPress������ˤ����������ƥ�Ĥ����Ǥ�����Τߡ�WordPress������ץ�˥塼��ɽ������ޤ���</p>
                                                <p>WordPress������ˤ�ꡢ�ʲ���������٤Ƥ�WordPress�ǡ��������������ޤ���</p>
                                                <ul class="ul">
                                                    <li>��Ƶ����ʤɤ�MySQL�ǡ����١���������</li>
                                                    <li>��ǥ����ե������/wp-content/uploads/�۲��Υե������</li>
                                                </ul>
                                                <p>�ʤ����ܺ�Ȥˤƥץ饰�����ơ��ޥե����뤬�������뤿�ᡢ�ƥ��󥹥ȡ��������꤬ɬ�פȤʤ�ޤ���</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>WordPress�ꥫ�Х꡼</dt>
                                            <dd class="pl0">
                                                <p>�����С��ѥͥ���Ρ�WordPress�ꥫ�Х꡼�פˤƳ���WordPress�Ρ�����˿ʤ�פ򥯥�å������ʲ������줫�ι��ܤ�����򡢼¹Ԥ��Ƥ���������</p>
                                                <ul class="ul">
                                                    <li>�������������������WordPress������<br>
                                                        ��Ƶ����ʤɤ�MySQL�ǡ����١��������ơ���ǥ����ե����롢���󥹥ȡ��뤵��Ƥ���ץ饰�����ơ��ޤ����ư����Ѥ����оݤ�WordPress�ˤĤ��ƤΤ�������Ԥ��ޤ���
                                                    </li>
                                                    <li>WordPress���ΤΥꥻ�å�<br>
                                                        �����Ѥ��ǡ����ʥǡ����١�������ǥ����ǡ������ơ��ޡ��ץ饰����ˤ����򤷤�������WordPress���Τ�ꥻ�åȤ��ޤ���
                                                    </li>
                                                </ul>
                                                <p>��<a href="man_server_wprecovery.php">�ޥ˥奢�� - WordPress�ꥫ�Х꡼</a></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c03">���ۡ���ڡ����Ƴ���������</h5>
                                    <div class="block_body">
                                        <p>�ʲ������줫����ˡ�ˤƥۡ���ڡ����Ƴ��������Ȥ�»ܤ��Ƥ���������</p>

                                        <dl class="dl">
                                            <dt><i class="ico ico_triangle-down"></i>�ǡ����ե�����Υ��åץ���</dt>
                                            <dd class="pl0">
                                                <p>��������������ȯ����������β����󤵤�Ƥ��ʤ����꡼��ʥǡ����򥢥åץ��ɤ��Ƥ���������</p>
                                                <aside class="msg msg_caution">
                                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�ǡ����Υ��åץ��ɻ��ˤ�������ջ���</h5>
                                                    <div class="msg_body">
                                                        <p>������������ȯ�������ն�ΥХå����åפʤɤ���ǡ����򥢥åץ��ɤ����硢ɬ���ʲ������줫����ˡ�ˤƥե����뤬�����󤵤�Ƥ��ʤ����Ȥ��ǧ���Ƥ���������</p>
                                                        <ul class="ul">
                                                            <li>�긵���ݴɤ��Ƥ��륪�ꥸ�ʥ�Υե���������Ƥ���Ӥ���</li>
                                                            <li>�������ƥ����եȤˤƥե����륹������»ܤ���</li>
                                                        </ul>
                                                        <p>�����󤵤�Ƥ���ե������Ƥӥ��åץ��ɤ��Ƥ��ޤ��ȡ���������������������Ƥ��ޤ���ǽ�������˹⤯�ʤ�ޤ���</p>
                                                    </div>
                                                </aside>
                                                <p>�������������κ�ȯ���ɻߤ��뤿��ˤϡ����٤ƤΥǡ�����⤦���ٿ����˺������Ƥ����������Ȥ���������ˡ�Ȥʤ�ޤ���</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>�ǡ����١��������Ѥˤ�������WordPress�ξ���</dt>
                                            <dd class="pl0">
                                                <p>�����ʥ���ƥ�Ĥκ����»ܤ������ˡ�WordPress�Ρ�wp-config.php�ץե�������˵��ܤ���Ƥ���MySQL��Ϣ�ξ������ʤɤ˹����Ƥ����Ƥ���������</p>
                                                <ul class="ul">
                                                    <li>MySQL�ǡ����١���</li>
                                                    <li>MySQL�ǡ����١����桼����</li>
                                                    <li>MySQL�ǡ����١����桼�����Υѥ����</li>
                                                    <li>MySQL�ۥ���</li>
                                                </ul>
                                                <p>�����ʥ���ƥ�ĺ����ϡ����������ȡ�<a href="https://ja.wordpress.org/" target="_blank" rel="nofollow">https://ja.wordpress.org/</a><i class="ico ico_new-window base-color"></i>�ˤ��ǿ��Ǥ�WordPress�����ꤤ�������������С���˥��åץ��ɤ��Ƥ���������<br>
                                                    ���θ塢���������Ƥ�����MySQL��Ϣ�ξ�����wp-config.php�ץե�����˺����ꤹ�뤳�Ȥ���Ƶ����ʤɤ����줬��ǽ�Ǥ���<br>
                                                    �ʤ����ܺ�ȸ�ϥץ饰�����ơ��ޥե�����κ����꤬ɬ�פȤʤ�ޤ������ۥ����Ȥ���ǿ��Ǥ��������ɤ��Ƥ���������</p>
                                            </dd>
                                            <dt><i class="ico ico_triangle-down"></i>��ư�Хå����åץǡ������������</dt>
                                            <dd class="pl0">
                                                <p>�����С��ѥͥ���Ρ֥Хå����åס׵�ǽ�ˤ����Υǡ����ϼ�ư�ǥХå����åפ���Ƥ��ޤ���<br>
                                                    ����ˤ��ǡ���������Ԥ����ϡ�ɬ����������������ȯ��������������դΥ��꡼��ʥХå����åץǡ��������򤷤Ƥ���������<br>
                                                    �Хå����å׵�ǽ�ˤĤ��ƾܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                                <p>��<a href="../functions/service_backup.php">��ǽ - ��ư�Хå����å׵�ǽ</a></p>
                                                <p>��<a href="man_server_download.php">�ޥ˥奢�� - ��ư�Хå����åפ���Υǡ�������</a></p>
                                                <p>��<a href="man_server_restore.php">�ޥ˥奢�� - ��ư�Хå����åפ���Υǡ�������</a></p>
                                                <p>�ʤ��������Τ����ͤˤ����Ƥϥե��������¿�ʤɤˤ����٤������ǥХå����å׵�ǽ���оݤ����������Ƥ����礬����ޤ���</p>
                                                <aside class="msg msg_caution">
                                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>��ư�Хå����åץǡ������������ˤ�������ջ���</h5>
                                                    <div class="msg_body">
                                                        <p>���Ҥ������ꤷ�Ƥ���ޤ���������������ȯ���˴ؤ���᡼��ˤĤ��ơ��᡼����˵��ܤ����������Τ���������������ȯ�������Ȥϸ¤�ޤ���<br>
                                                            ���Τ��ᡢ������Ƥ���Ƥ������դΥХå����åץǡ����ˤĤ��ơ�ɬ�������ͤ����Ȥǲ����������ʥե��������֤��ʤ���������������������ʤ����Ȥ򤴳�ǧ�Τ������������Ƥ��������ޤ��褦���ꤤ�������ޤ���<br>
                                                            �ޤ����Хå����åץǡ����������줤�������ޤ��Ƥ⡢�������������κ��ܸ�������褵��ʤ������Ϻ�ȯ�β�ǽ�������˹⤯�ʤ�ޤ���<br>
                                                            ��ҤΡ�<a href="#link-previous-d">��������������ͽ�ɺ�</a>�פˤĤ��Ƥ⤴�б����������ޤ��褦���ꤤ�������ޤ���
                                                        </p>
                                                    </div>
                                                </aside>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c04">�����ѥ���ɤ��ѹ�</h5>
                                    <div class="block_body">
                                        <p>XServer��������Ȥ䥵���С��ѥͥ롢WordPress�ʤɤ����֥ץ����δ����ѥ���ɤ��ѹ����Ƥ���������<br>
                                            �ޤ���ʣ���Υ����С�ID�����Ҥ�¾�����ӥ��򤴷��󤵤�Ƥ������Ϥ��٤ƤΥ�������ȤˤĤ��ƥѥ�����ѹ����Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���</p>
                                        <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServer��������� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>
                                        <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">�����С��ѥͥ� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>

                                        <dl class="dl">
                                            <dt>WordPress�ξ��</dt>
                                            <dd class="pl0">
                                                <ol class="ol">
                                                    <li>
                                                        <p>WordPress�������̤򳫤�������˥塼�֥桼������-�֥ץ�ե�����פ򥯥�å����Ƥ������������̲����ˤ���֥�������ȴ����פˤƿ������ѥ���ɤ����ꤷ���֥ץ�ե�����򹹿��פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_access_3.png" alt="WordPress��������"></p>
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
                                                    </li>
                                                    <li>
                                                        <p>����˥塼�֥桼������-�֥桼���������פ򥯥�å������Ȥ˳Ф��Τʤ��桼���������פʥ桼������¸�ߤ�����ϥ桼���������»ܤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_access_4.png" alt="WordPress��������"></p>
                                                    </li>
                                                </ol>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-c05">����FTP��������ȤΥѥ���ɤ��ѹ������</h5>
                                    <div class="block_body">
                                        <p>����FTP��������Ȥ����Ѥ����������������ξ��ϡ��ʲ�����ˡ�ˤƳ����Υ���FTP��������ȤΥѥ�����ѹ��ޤ��Ϻ���򤷤Ƥ���������</p>

                                        <div class="serial-box">
                                            <section class="box">
                                                <h6 class="box_ttl">1. �֥���FTP�������������פ򥯥�å�</h6>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a><i class="ico ico_new-window color-gray"></i>�˥����󤷡��֥���FTP�������������פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_5.png" alt="�֥���FTP�������������פ򥯥�å�"></p>
                                                </div>
                                            </section>
                                            <section class="box">
                                                <h6 class="box_ttl">2. �����ɥᥤ��Ρ����򤹤�פ򥯥�å�</h6>
                                                <div class="box_body">
                                                    <p>�����ɥᥤ��Ρ����򤹤�פ򥯥�å����Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_6.png" alt="�����ɥᥤ��Ρ����򤹤�פ򥯥�å�"></p>
                                                </div>
                                            </section>
                                            <section class="box">
                                                <h6 class="box_ttl">3. ��������FTP��������ȤΥѥ���ɤ��ѹ��ޤ��ϥ���FTP��������Ȥκ���򤹤�</h6>
                                                <div class="box_body">
                                                    <p>��������FTP��������ȤΡ��ѹ��ס��ֺ���פ�ꡢ�ѥ���ɤ��ѹ��ޤ��ϥ���FTP��������Ȥκ����»ܤ��Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_access_7.png" alt="����FTP��������Ȱ�������"></p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </section>
                        <!-- /.section -->

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-d">��������������ͽ�ɺ�</h4>
                            <div class="section_body">

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d01">���ʳ�ǧ�ڤ�����</h5>
                                    <div class="block_body">
                                        <p>���ʳ�ǧ�ڤȤϡ������ġ���ʤɤؤΥ�����κݤ��̾�Υѥ����ǧ�ڤ˲ä�����󥿥���ѥ���ɤ���������ǧ�ڥ������������ץ��Google Authenticator�ʤɡˤΤ褦�������ǧ����ˡ���ߤ����������ƥ��򶯲�������ȤߤǤ������ʳ�ǧ������򤷤Ƥ����������Ȥ��̾�Υѥ����ǧ�ڤ���١����������������޻ߤǤ����ǽ�����⤯�ʤ�ޤ����ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                        <p>��<a href="man_order_twostepauth.php">�ޥ˥奢�� - ���ʳ�ǧ������</a></p>
                                    </div>
                                </section>


                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d03">���եȥ���������</h5>
                                    <div class="block_body">
                                        <p>�Ť��С������Υץ�������Ѥ�³���뤳�Ȥ����������������оݤȤ���������ꥹ�����⤯�ʤ�ޤ���OS��ޤ᥽�եȥ������Ͼ�˺ǿ��ξ��֤��ݤĤ褦�����åץǡ��Ȥ򤷤Ƥ���������</p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d04">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</h5>
                                    <div class="block_body">
                                        <p>CMS��PHP�ʤɤǹ������줿ưŪ�����ȡˤ˴ؤ��Ƥ����Ū�ʹ����ˤ���������������Υꥹ���ڸ��˷Ҥ���ޤ����ʲ�����ˡ�ˤƺǿ��ǤؤΥ��åץǡ��Ȥ򤷤Ƥ���������</p>

                                        <dl class="dl">
                                            <dt>WordPress�ξ��</dt>
                                            <dd class="pl0">
                                                <p>WordPress�������̤򳫤�������˥塼�֥��å���ܡ��ɡ�-�ֹ����פ򥯥�å����Ƥ���������<br>
                                                    �������С�����󤬤����硢�ʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡ֥С������ *.*.*-ja �˹����פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_8.png" alt="WordPress�ι�������"></p>
                                            </dd>
                                            <dt>�ץ饰����ξ��</dt>
                                            <dd class="pl0">
                                                <p>WordPress�������̤򳫤�������˥塼�֥ץ饰�����-�֥��󥹥ȡ���Ѥߥץ饰����פ򥯥�å����Ƥ���������<br>
                                                    �������С���������ѤǤ���ץ饰����Ǥϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֹ����פβս�򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_9.png" alt="WordPress�ι�������"></p>
                                                <p>���פʥץ饰���󤬤�����Ϻ����»ܤ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_10.png" alt="WordPress�ι�������"></p>
                                            </dd>
                                            <dt>�ơ��ޤξ��</dt>
                                            <dd class="pl0">
                                                <p>WordPress�������̤򳫤�������˥塼�ֳ��ѡ�-�֥ơ��ޡפ򥯥�å����Ƥ���������<br>
                                                    �������С���������ѤǤ���ơ��ޤǤϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֺ����������פβս�򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_11.png" alt="WordPress�Υơ��޲���"></p>
                                                <p>���פʥơ��ޤ�������Ϻ����»ܤ��Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_malicious_access_12.png" alt="WordPress�Υơ��޲���"></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d05">WordPress�������ƥ�����</h5>
                                    <div class="block_body">
                                        <p>WordPress�������ƥ�����Ȥϡ����������WordPress�ˤ����ƹ񳰤������³�����¤����ꡢ�ѥ���ɤ������깶��ˤ���軰�Ԥ�������������ɻߤ���ʤɤȤ��ä������������������Ф���WordPress�Υ������ƥ��򶯲����뵡ǽ�Ǥ���<br>
                                        �ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                        <p>��<a href="man_server_wpsecurity.php">�ޥ˥奢�� - WordPress�������ƥ�����</a></p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d06">WAF����</h5>
                                    <div class="block_body">
                                        <p>WAF��Web���ץꥱ�������ե������������������Ȥϡ�Web���ץꥱ���������ȼ������Ѥ������⤫��Web�����Ȥ��ݸ�뤳�Ȥ��Ǥ��뵡ǽ�Ǥ����ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                        <p>��<a href="man_server_waf.php">�ޥ˥奢�� - WAF����</a></p>
                                    </div>
                                </section>

                                <section class="block mt50">
                                    <h5 class="block_ttl" id="link-previous-d07">php.ini����</h5>
                                    <div class="block_body">
                                        <p>php.ini����Ȥϡ�PHP�ץ���������Ū��ư���Ķ������ꤹ��php.ini�ե������ɥᥤ�󤴤Ȥ��Խ����뤳�Ȥ��Ǥ��뵡ǽ�Ǥ���<br>
                                            �����ͤ�Web�����Ȥˤ�PHP�ץ����������桢���ĳ����ե�������ɤ߹���/�¹Ԥ�ɬ�פǤʤ���硢���ܡ֤���¾������פ���allow_url_fopen�פ���ӡ�allow_url_include�פ��̵����Off�ˡפˤ��Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���</p>
                                        <p class="note">��X��������졼��Ver.2��������ξ�硢��allow_url_fopen�פϽ���ͤǤ����ͭ����On�ˡפ�Ŭ�Ѥ���ޤ�����������������ѹ��϶����ǤϤ���ޤ��󤬡�WEB�����ȤΥ������ƥ���Ż뤵�����ϡ�X��������졼��Ver.1���ѹ����Ƥ��������������ǡ�̵����Off�ˡפˤ��Ƥ��������ޤ��褦���ꤤ�������ޤ���</p>
                                        <p>��<a href="man_server_phpini_edit.php">�ޥ˥奢�� - php.ini����</a></p>
                                        <p>��<a href="man_server_phpini_setting_item.php">�ޥ˥奢�� - php.ini����������ǽ�ʹ��ܤˤĤ���</a></p>
                                        <p>��<a href="man_server_phpini_setting_ignore_item.php">�ޥ˥奢�� - X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></p>

                                    </div>
                                </section>

                            </div>
                        </section>
                        <!-- /.section -->
                        </div>
                        <!--/��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">�������������ʥե�����β����������ʥե��������֡ˤȤ�</a></li>
                                    <li><a href="#link-b">�������������ʥե�����β����������ʥե��������֡ˤθ���</a></li>
                                    <li><a href="#link-c">�������������ʥե�����β����������ʥե��������֡ˤ��줿�ݤ��н���ˡ</a>
                                        <ol>
                                            <li><a href="#link-c01">�������ƥ������å�</a></li>
                                            <li><a href="#link-c02">�����ʥ���ƥ�Ĥκ��</a></li>
                                            <li><a href="#link-c03">���ۡ���ڡ����Ƴ���������</a></li>
                                            <li><a href="#link-c04">�����ѥ���ɤ��ѹ�</a></li>
                                            <li><a href="#link-c05">FTP��������ȤΥѥ���ɤ��ѹ������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">��������������ͽ�ɺ�</a>
                                        <ol>
                                            <li><a href="#link-d01">���ʳ�ǧ�ڤ�����</a></li>
                                            <li><a href="#link-d03">���եȥ���������</a></li>
                                            <li><a href="#link-d04">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</a></li>
                                            <li><a href="#link-d05">WordPress�������ƥ�����</a></li>
                                            <li><a href="#link-d06">WAF����</a></li>
                                            <li><a href="#link-d07">php.ini����</a></li>

                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">�������������ʥե�����β����������ʥե��������֡ˤȤ�</h4>
                                <div class="section_body">
                                    <p>�������������Ȥϡ������������¤�����ʤ����դΤ����ʪ�������С�����󥷥��ƥ�������������˿�������԰٤�ؤ��ޤ���<br>
                                        �������������ˤ��ե�����β����������ʥե���������֤������ȡ��տޤ��ʤ�����ƥ�Ĥ���������Ƥ��ޤä��ꡢ�����Ԥ�PC�䥹�ޡ��ȥե���ʤɤ������륹�������Ƥ��ޤä��ꡢ�Ŀ;�����褵��Ƥ��ޤ��Ȥ��ä����줬����ޤ���</p>

                                    <p><img class="img" src="../img/manual/man_malicious_access_1.png?date=2410" alt="��������������ή��"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">�������������ʥե�����β����������ʥե��������֡ˤθ���</h4>
                                <div class="section_body">
                                    <p>�������������μ�ʸ����ˤϰʲ���2�̤꤬����ޤ���</p>

                                    <ul class="ul">
                                        <li>���������ή�Ф���
                                            <ul>
                                                <li>- ID���ѥ���ɤ��¬�����</li>
                                                <li>- ID���ѥ���ɤ���߸�����</li>
                                                <li>- �ե��å��󥰤�ޥ륦������¾�����ƥ�ȤλȤ��󤷤ˤ��ID���ѥ���ɤ�ϳ�̤���</li>
                                            </ul>
                                        </li>
                                        <li>�������ƥ����ȼ������ͤ��������С�����<br>
                                            <p class="note">���ȼ����Ȥϡ��ץ������Զ����߷׾�Υߥ��������Ȥʤä�ȯ�����륻�����ƥ���η�٤Τ��ȡ�</p>
                                        </li>
                                    </ul>

                                    <p>������θ����ˤĤ��Ƥ⡢�������к���»ܤ��Ƥ������Ȥ����������������ɻߤ����ꡢ�ﳲ��Ǿ��¤��ޤ��뤳�Ȥ��Ǥ��ޤ������������������ɤ��к��ˤĤ��Ƥϡ���<a href="#link-d">��������������ͽ�ɺ�</a>�פ�������������</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">�������������ʥե�����β����������ʥե��������֡ˤ��줿�ݤ��н���ˡ</h4>
                                <div class="section_body">

                                    <p><img class="img" src="../img/manual/man_malicious_access_2.png?date=2410" alt="���������������줿�ݤ��н���ˡ"></p>

                                    <p>�������������ʥե�����β����������ʥե��������֡ˤ��ﳲ������Ƥ��ޤä���硢�ﳲ�γ�����ɤ�������ޤ˰ʲ����б�����������</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c01">�������ƥ������å�</h5>
                                        <div class="block_body">
                                            <p>�������ƥ����եȤ�OS��ܤΥ������ƥ���ǽ��Windows Defender�ʤɡˤˤơ����������ü�������ʥ����륹�˴������Ƥ��ʤ�����ǧ���Ƥ���������</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c02">�����ʥ���ƥ�Ĥκ��</h5>
                                        <div class="block_body">
                                            <p>�ե�����ޥ͡�����ޤ���FTP���եȤ��Ѥ����ʲ������줫����ˡ�ˤ������ʥ���ƥ�Ĥ������Ƥ���������</p>

                                            <p>��<a href="man_tool_file.php">�ޥ˥奢�� - �ե�����ޥ͡�����</a></p>

                                            <p>��<a href="man_ftp_setting.php">�ޥ˥奢�� - FTP���եȤ�����</a></p>
                                            <p class="note">�������ʥ���ƥ�Ĥ����������˥ۡ���ڡ����������ȤˤĤ��ơ�<a href="#link-c03">���ۡ���ڡ����Ƴ���������</a>�פ򤴳�ǧ����������</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>�ڿ侩�ۤ��٤ƤΥե�����κ��</dt>
                                                <dd class="pl0">
                                                    <p>�����ͤΥ����С������������Τ��٤ƤΥե�����������Ƥ���������<br>
                                                        ���������������ﳲ�����ä���硢�����ʥե������¾�˥Хå��ɥ����������������ưפȤ��뿯����ϩ�ˤ����֤���Ƥ����ǽ�������˹⤯�ʤ�ޤ���<br>
                                                        ���Τ��ᡢ���٤��٤ƤΥե�����������Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���
                                                    </p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>�����ե�����κ��</dt>
                                                <dd class="pl0">
                                                    <p>���Ҥˤ���������������ȯ�����Τ�����硢��̾�֡ڥ��å��������С��ۢ����ע� �����ͤΥ����С���������Ȥˤ����������ʥ��������θ��Τ�������¤μ»ܤˤĤ���(xsvc************)�פȤ��ä��᡼����������Ƥ��ޤ���<br>
                                                        ���Υ᡼����˵��ܤ��Ƥ���ޤ���[�����ץ����Ȼפ���ե��������]�Τ��٤ƤΥե�����ˤĤ��ƺ����»ܤ��Ƥ���������</p>
                                                    <p class="note">��[�����ץ����Ȼפ���ե��������]�˵��ܤ���Ƥ���ե�����ʳ��ˤ������ʥե����뤬¸�ߤ����ǽ��������ޤ���ɬ�������ͤ����ȤǤ��٤ƤΥե�������������Ƥ��������ޤ��褦���ꤤ�������ޤ���</p>
                                                </dd>
                                            </dl>

                                            <div class="border border_yellow">
                                                �������ͤ����ȤǤ��٤ƤΥե���������������������ɥᥤ��̾�Υե��������γ��ؤ������ե����뤬���֤���Ƥ��ʤ���硢�ʲ�����ˡ�Ǥ������ʥ���ƥ�Ĥ������뤳�Ȥ��Ǥ��ޤ���
                                            </div>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>�����ɥᥤ��ν����</dt>
                                                <dd class="pl0">
                                                    <p>�����С��ѥͥ���Ρ֥ɥᥤ������פˤƳ����ɥᥤ��Ρֽ�����פ򥯥�å�����������ˡ�֥������ΰ衦����ν�����פ����򤷤Ƥ���������<br>
                                                        �ɥᥤ�������ˤ�ꡢ�����ɥᥤ��Υ������ΰ�����֤���Ƥ��뤹�٤ƤΥե����뤬�������ޤ����ʤ����ܺ�Ȥˤ��ǡ����١����ν����������Ϥ���ޤ���
                                                    </p>
                                                    <p>��<a href="man_domain_reset.php">�ޥ˥奢�� - �ɥᥤ��ν����</a></p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>WordPress�����</dt>
                                                <dd class="pl0">
                                                    <p>�����С��ѥͥ���Ρ�WordPress������פˤƳ���WordPress�Ρֽ�����פ򥯥�å����Ƥ���������</p>
                                                    <p class="note">��WordPress������ˤ����������ƥ�Ĥ����Ǥ�����Τߡ�WordPress������ץ�˥塼��ɽ������ޤ���</p>
                                                    <p>WordPress������ˤ�ꡢ�ʲ���������٤Ƥ�WordPress�ǡ��������������ޤ���</p>
                                                    <ul class="ul">
                                                        <li>��Ƶ����ʤɤ�MySQL�ǡ����١���������</li>
                                                        <li>��ǥ����ե������/wp-content/uploads/�۲��Υե������</li>
                                                    </ul>
                                                    <p>�ʤ����ܺ�Ȥˤƥץ饰�����ơ��ޥե����뤬�������뤿�ᡢ�ƥ��󥹥ȡ��������꤬ɬ�פȤʤ�ޤ���</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>WordPress�ꥫ�Х꡼</dt>
                                                <dd class="pl0">
                                                    <p>�����С��ѥͥ���Ρ�WordPress�ꥫ�Х꡼�פˤƳ���WordPress�Ρ�����˿ʤ�פ򥯥�å������ʲ������줫�ι��ܤ�����򡢼¹Ԥ��Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>�������������������WordPress������<br>
                                                            ��Ƶ����ʤɤ�MySQL�ǡ����١��������ơ���ǥ����ե����롢���󥹥ȡ��뤵��Ƥ���ץ饰�����ơ��ޤ����ư����Ѥ����оݤ�WordPress�ˤĤ��ƤΤ�������Ԥ��ޤ���
                                                        </li>
                                                        <li>WordPress���ΤΥꥻ�å�<br>
                                                            �����Ѥ��ǡ����ʥǡ����١�������ǥ����ǡ������ơ��ޡ��ץ饰����ˤ����򤷤�������WordPress���Τ�ꥻ�åȤ��ޤ���
                                                        </li>
                                                    </ul>
                                                    <p>��<a href="man_server_wprecovery.php">�ޥ˥奢�� - WordPress�ꥫ�Х꡼</a></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c03">���ۡ���ڡ����Ƴ���������</h5>
                                        <div class="block_body">
                                            <p>�ʲ������줫����ˡ�ˤƥۡ���ڡ����Ƴ��������Ȥ�»ܤ��Ƥ���������</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_triangle-down"></i>�ǡ����ե�����Υ��åץ���</dt>
                                                <dd class="pl0">
                                                    <p>��������������ȯ����������β����󤵤�Ƥ��ʤ����꡼��ʥǡ����򥢥åץ��ɤ��Ƥ���������</p>
                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�ǡ����Υ��åץ��ɻ��ˤ�������ջ���</h5>
                                                        <div class="msg_body">
                                                            <p>������������ȯ�������ն�ΥХå����åפʤɤ���ǡ����򥢥åץ��ɤ����硢ɬ���ʲ������줫����ˡ�ˤƥե����뤬�����󤵤�Ƥ��ʤ����Ȥ��ǧ���Ƥ���������</p>
                                                            <ul class="ul">
                                                                <li>�긵���ݴɤ��Ƥ��륪�ꥸ�ʥ�Υե���������Ƥ���Ӥ���</li>
                                                                <li>�������ƥ����եȤˤƥե����륹������»ܤ���</li>
                                                            </ul>
                                                            <p>�����󤵤�Ƥ���ե������Ƥӥ��åץ��ɤ��Ƥ��ޤ��ȡ���������������������Ƥ��ޤ���ǽ�������˹⤯�ʤ�ޤ���</p>
                                                        </div>
                                                    </aside>
                                                    <p>�������������κ�ȯ���ɻߤ��뤿��ˤϡ����٤ƤΥǡ�����⤦���ٿ����˺������Ƥ����������Ȥ���������ˡ�Ȥʤ�ޤ���</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>�ǡ����١��������Ѥˤ�������WordPress�ξ���</dt>
                                                <dd class="pl0">
                                                    <p>�����ʥ���ƥ�Ĥκ����»ܤ������ˡ�WordPress�Ρ�wp-config.php�ץե�������˵��ܤ���Ƥ���MySQL��Ϣ�ξ������ʤɤ˹����Ƥ����Ƥ���������</p>
                                                    <ul class="ul">
                                                        <li>MySQL�ǡ����١���</li>
                                                        <li>MySQL�ǡ����١����桼����</li>
                                                        <li>MySQL�ǡ����١����桼�����Υѥ����</li>
                                                        <li>MySQL�ۥ���</li>
                                                    </ul>
                                                    <p>�����ʥ���ƥ�ĺ����ϡ����������ȡ�<a href="https://ja.wordpress.org/" target="_blank" rel="nofollow">https://ja.wordpress.org/</a><i class="ico ico_new-window base-color"></i>�ˤ��ǿ��Ǥ�WordPress�����ꤤ�������������С���˥��åץ��ɤ��Ƥ���������<br>
                                                        ���θ塢���������Ƥ�����MySQL��Ϣ�ξ�����wp-config.php�ץե�����˺����ꤹ�뤳�Ȥ���Ƶ����ʤɤ����줬��ǽ�Ǥ���<br>
                                                        �ʤ����ܺ�ȸ�ϥץ饰�����ơ��ޥե�����κ����꤬ɬ�פȤʤ�ޤ������ۥ����Ȥ���ǿ��Ǥ��������ɤ��Ƥ���������</p>
                                                </dd>
                                                <dt><i class="ico ico_triangle-down"></i>��ư�Хå����åץǡ������������</dt>
                                                <dd class="pl0">
                                                    <p>�����С��ѥͥ���Ρ֥Хå����åס׵�ǽ�ˤ����Υǡ����ϼ�ư�ǥХå����åפ���Ƥ��ޤ���<br>
                                                        ����ˤ��ǡ���������Ԥ����ϡ�ɬ����������������ȯ��������������դΥ��꡼��ʥХå����åץǡ��������򤷤Ƥ���������<br>
                                                        �Хå����å׵�ǽ�ˤĤ��ƾܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                                    <p>��<a href="../functions/service_backup.php">��ǽ - ��ư�Хå����å׵�ǽ</a></p>
                                                    <p>��<a href="man_server_download.php">�ޥ˥奢�� - ��ư�Хå����åפ���Υǡ�������</a></p>
                                                    <p>��<a href="man_server_restore.php">�ޥ˥奢�� - ��ư�Хå����åפ���Υǡ�������</a></p>
                                                    <p>�ʤ��������Τ����ͤˤ����Ƥϥե��������¿�ʤɤˤ����٤������ǥХå����å׵�ǽ���оݤ����������Ƥ����礬����ޤ���</p>
                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>��ư�Хå����åץǡ������������ˤ�������ջ���</h5>
                                                        <div class="msg_body">
                                                            <p>���Ҥ������ꤷ�Ƥ���ޤ���������������ȯ���˴ؤ���᡼��ˤĤ��ơ��᡼����˵��ܤ����������Τ���������������ȯ�������Ȥϸ¤�ޤ���<br>
                                                                ���Τ��ᡢ������Ƥ���Ƥ������դΥХå����åץǡ����ˤĤ��ơ�ɬ�������ͤ����Ȥǲ����������ʥե��������֤��ʤ���������������������ʤ����Ȥ򤴳�ǧ�Τ������������Ƥ��������ޤ��褦���ꤤ�������ޤ���<br>
                                                                �ޤ����Хå����åץǡ����������줤�������ޤ��Ƥ⡢�������������κ��ܸ�������褵��ʤ������Ϻ�ȯ�β�ǽ�������˹⤯�ʤ�ޤ���<br>
                                                                ��ҤΡ�<a href="#link-d">��������������ͽ�ɺ�</a>�פˤĤ��Ƥ⤴�б����������ޤ��褦���ꤤ�������ޤ���
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c04">�����ѥ���ɤ��ѹ�</h5>
                                        <div class="block_body">
                                            <p>XServer��������Ȥ䥵���С��ѥͥ롢WordPress�ʤɤ����֥ץ����δ����ѥ���ɤ��ѹ����Ƥ���������<br>
                                                �ޤ���ʣ���Υ����С�ID�����Ҥ�¾�����ӥ��򤴷��󤵤�Ƥ������Ϥ��٤ƤΥ�������ȤˤĤ��ƥѥ�����ѹ����Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���</p>
                                            <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServer��������� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>
                                            <p>��<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">�����С��ѥͥ� �ѥ���ɺ�����ե�����</a><i class="ico ico_new-window base-color"></i></p>

                                            <dl class="dl">
                                                <dt>WordPress�ξ��</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress�������̤򳫤�������˥塼�֥桼������-�֥ץ�ե�����פ򥯥�å����Ƥ������������̲����ˤ���֥�������ȴ����פˤƿ������ѥ���ɤ����ꤷ���֥ץ�ե�����򹹿��פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_access_3.png?date=2410" alt="WordPress��������"></p>
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
                                                        </li>
                                                        <li>
                                                            <p>����˥塼�֥桼������-�֥桼���������פ򥯥�å������Ȥ˳Ф��Τʤ��桼���������פʥ桼������¸�ߤ�����ϥ桼���������»ܤ��Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_access_4.png?date=2410" alt="WordPress��������"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c05">FTP��������ȤΥѥ���ɤ��ѹ������</h5>
                                        <div class="block_body">
                                            <p>FTP��������Ȥ����Ѥ����������������ξ��ϡ��ʲ�����ˡ�ˤƳ�����FTP��������ȤΥѥ�����ѹ��ޤ��Ϻ���򤷤Ƥ���������</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1. ��FTP�������������פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a><i class="ico ico_new-window color-gray"></i>�˥����󤷡���FTP�������������פ򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_access_5.png?date=2410" alt="��FTP�������������פ򥯥�å�"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2. ����FTP��������ȤΥѥ���ɤ��ѹ��ޤ���FTP��������Ȥκ���򤹤�</h6>
                                                    <div class="box_body">
                                                        <p>����FTP��������ȤΡ��Խ��ס��ֺ���פ�ꡢ�ѥ���ɤ��ѹ��ޤ���FTP��������Ȥκ����»ܤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_access_7.png?date=2410" alt="FTP��������Ȱ�������"></p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">��������������ͽ�ɺ�</h4>
                                <div class="section_body">

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d01">���ʳ�ǧ�ڤ�����</h5>
                                        <div class="block_body">
                                            <p>���ʳ�ǧ�ڤȤϡ������ġ���ʤɤؤΥ�����κݤ��̾�Υѥ����ǧ�ڤ˲ä�����󥿥���ѥ���ɤ���������ǧ�ڥ������������ץ��Google Authenticator�ʤɡˤΤ褦�������ǧ����ˡ���ߤ����������ƥ��򶯲�������ȤߤǤ������ʳ�ǧ������򤷤Ƥ����������Ȥ��̾�Υѥ����ǧ�ڤ���١����������������޻ߤǤ����ǽ�����⤯�ʤ�ޤ����ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                            <p>��<a href="man_order_twostepauth.php">�ޥ˥奢�� - ���ʳ�ǧ������</a></p>
                                        </div>
                                    </section>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d03">���եȥ���������</h5>
                                        <div class="block_body">
                                            <p>�Ť��С������Υץ�������Ѥ�³���뤳�Ȥ����������������оݤȤ���������ꥹ�����⤯�ʤ�ޤ���OS��ޤ᥽�եȥ������Ͼ�˺ǿ��ξ��֤��ݤĤ褦�����åץǡ��Ȥ򤷤Ƥ���������</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d04">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</h5>
                                        <div class="block_body">
                                            <p>CMS��PHP�ʤɤǹ������줿ưŪ�����ȡˤ˴ؤ��Ƥ����Ū�ʹ����ˤ���������������Υꥹ���ڸ��˷Ҥ���ޤ����ʲ�����ˡ�ˤƺǿ��ǤؤΥ��åץǡ��Ȥ򤷤Ƥ���������</p>

                                            <dl class="dl">
                                                <dt>WordPress�ξ��</dt>
                                                <dd class="pl0">
                                                    <p>WordPress�������̤򳫤�������˥塼�֥��å���ܡ��ɡ�-�ֹ����פ򥯥�å����Ƥ���������<br>
                                                        �������С�����󤬤����硢�ʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡ֥С������ *.*.*-ja �˹����פ򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_8.png?date=2410" alt="WordPress�ι�������"></p>
                                                </dd>
                                                <dt>�ץ饰����ξ��</dt>
                                                <dd class="pl0">
                                                    <p>WordPress�������̤򳫤�������˥塼�֥ץ饰�����-�֥��󥹥ȡ���Ѥߥץ饰����פ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ץ饰����Ǥϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֹ����פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_9.png?date=2410" alt="WordPress�ι�������"></p>
                                                    <p>���פʥץ饰���󤬤�����Ϻ����»ܤ��Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_10.png?date=2410" alt="WordPress�ι�������"></p>
                                                </dd>
                                                <dt>�ơ��ޤξ��</dt>
                                                <dd class="pl0">
                                                    <p>WordPress�������̤򳫤�������˥塼�ֳ��ѡ�-�֥ơ��ޡפ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ơ��ޤǤϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֺ����������פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_11.png?date=2410" alt="WordPress�Υơ��޲���"></p>
                                                    <p>���פʥơ��ޤ�������Ϻ����»ܤ��Ƥ���������</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_access_12.png?date=2410" alt="WordPress�Υơ��޲���"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d05">WordPress�������ƥ�����</h5>
                                        <div class="block_body">
                                            <p>WordPress�������ƥ�����Ȥϡ����������WordPress�ˤ����ƹ񳰤������³�����¤����ꡢ�ѥ���ɤ������깶��ˤ���軰�Ԥ�������������ɻߤ���ʤɤȤ��ä������������������Ф���WordPress�Υ������ƥ��򶯲����뵡ǽ�Ǥ���<br>
                                                �ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                            <p>��<a href="man_server_wpsecurity.php">�ޥ˥奢�� - WordPress�������ƥ�����</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d06">WAF����</h5>
                                        <div class="block_body">
                                            <p>WAF��Web���ץꥱ�������ե������������������Ȥϡ�Web���ץꥱ���������ȼ������Ѥ������⤫��Web�����Ȥ��ݸ�뤳�Ȥ��Ǥ��뵡ǽ�Ǥ����ܤ����ϰʲ����ݡ��ȥڡ�����������������</p>
                                            <p>��<a href="man_server_waf.php">�ޥ˥奢�� - WAF����</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-d07">php.ini����</h5>
                                        <div class="block_body">
                                            <p>php.ini����Ȥϡ�PHP�ץ���������Ū��ư���Ķ������ꤹ��php.ini�ե������ɥᥤ�󤴤Ȥ��Խ����뤳�Ȥ��Ǥ��뵡ǽ�Ǥ���<br>
                                                �����ͤ�Web�����Ȥˤ�PHP�ץ����������桢���ĳ����ե�������ɤ߹���/�¹Ԥ�ɬ�פǤʤ���硢���ܡ֤���¾������פ���allow_url_fopen�פ���ӡ�allow_url_include�פ��̵����Off�ˡפˤ��Ƥ����������Ȥ򶯤��侩���Ƥ��ޤ���</p>
                                            <p class="note">��X��������졼��Ver.2��������ξ�硢��allow_url_fopen�פϽ���ͤǤ����ͭ����On�ˡפ�Ŭ�Ѥ���ޤ�����������������ѹ��϶����ǤϤ���ޤ��󤬡�WEB�����ȤΥ������ƥ���Ż뤵�����ϡ�X��������졼��Ver.1���ѹ����Ƥ��������������ǡ�̵����Off�ˡפˤ��Ƥ��������ޤ��褦���ꤤ�������ޤ���</p>
                                            <p>��<a href="man_server_phpini_edit.php">�ޥ˥奢�� - php.ini����</a></p>
                                            <p>��<a href="man_server_phpini_setting_item.php">�ޥ˥奢�� - php.ini����������ǽ�ʹ��ܤˤĤ���</a></p>
                                            <p>��<a href="man_server_phpini_setting_ignore_item.php">�ޥ˥奢�� - X��������졼��Ver.2���ѻ���̵���Ȥʤ�php.ini����ˤĤ���</a></p>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /���ѥͥ� -->

                    </div>
                </div>

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