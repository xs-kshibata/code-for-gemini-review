<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�᡼��ե�������Ѥ����������������ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å᡼��ե�������Ѥ������������������б���ˡ�򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">�᡼��ե�������Ѥ����������������ˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�᡼��ե�����ΰ��ѤȤ�</a></li>
                                    <li><a href="#link-previous-b">�᡼��ե�����ΰ��Ѥؤ��к�</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">reCAPTCHA��Ƴ��</a></li>
                                            <li><a href="#link-previous-b02">��ư�ֿ���ǽ��̵����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">����¾���碌�Ƽ»ܤ������������б�</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</a></li>
                                            <li><a href="#link-previous-c02">���������WordPress��ƥץ饰���󡢥ơ��ޥե�������ȼ�����ǧ</a></li>
                                            <li><a href="#link-previous-c03">�ե�����β����������ʥե��������֤γ�ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�᡼��ե�����ΰ��ѤȤ�</h4>
                                <div class="section_body">
                                    <p>�����Ⱦ�����֤������䤤��碌�ѤʤɤΥ᡼��ե�����ˤ����ơ����դ���ä���ʪ�����䤤��碌���Ƥ˥��ѥ�ʥե��å��󥰥����Ȥ�URL����������ʤɡˡ�Ϣ�������̵�ط����軰�ԤΥ᡼�륢�ɥ쥹�����Ϥ����������뤳�Ȥǡ���ư�ֿ���ǽ�ˤ��̵�ط����軰�Ԥإ��ѥ�᡼�����������Ȥ�������Ǥ���</p>

                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_1.png" alt="�᡼��ե�����ΰ��Ѥ�ή��"></p>

                                    <p>���Τ褦�ʥ��ѥ�᡼�뤬���������ȥ᡼��μ����Ԥ��ﳲ���ڤ֤����Ǥʤ��������С�������IP���ɥ쥹�Υ�ԥ�ơ�������ɾȽ�ˤ������ꡢ�֥�å��ꥹ�Ȥ���Ͽ����붲�줬����ޤ����֥�å��ꥹ�Ȥ���Ͽ����������ʥ᡼��Ǥ����������Ǥ��ʤ��ʤ�ʤɤ����꤬ȯ�����ޤ���</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�᡼��ե�����ΰ��Ѥؤ��к�</h4>
                                <div class="section_body">
                                    <p>�������ä��᡼��ե�������Ѥ����������������ˤϰʲ��Τ褦���к���ͭ���Ǥ���</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b01">reCAPTCHA��Ƴ��</h5>
                                        <div class="block_body">
                                            <p>reCAPTCHA�Ȥ�Google��̵�����󶡤��Ƥ��륻�����ƥ��к��ġ���Ǥ���<br>
                                                ����ˤ��ʹ֤���Υ�����������ܥåȤ���Υ�����������Ƚ�̤�����ܥåȤ���Υ��������ξ��ϲ��餫�Υ����������׵᤹��褦�ˤʤ�ޤ����᡼��ե�����ΰ��Ѥ�ޤ�����������������Ⱦ�ϥ�ܥåȤˤ���ΤΤ��ᡢreCAPTCHA��Ƴ�����к��Ȥ������˸���Ū�Ǥ���</p>

                                            <dl class="dl">
                                                <dt>�ץ饰�����Contact Form 7�פ����Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��Google reCAPTCHA�פ˥����������Ƥ�����������Google��������Ȥ�ɬ�פǤ���<br>
                                                                <a href="https://www.google.com/recaptcha/intro/v3.html" target="_blank" rel="nofollow">https://www.google.com/recaptcha/intro/v3.html</a><i class="ico ico_new-window color-gray"></i></p>
                                                        </li>
                                                        <li>
                                                            <p>��Admin Console�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_2.png" alt="��Admin Console�פ򥯥�å�"></p>
                                                        </li>
                                                        <li>
                                                            <p>ɬ�׻�������Ϥ��������򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_3.png" alt="ɬ�׻��������"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>��٥�</th>
                                                                    <td>�����Ȥ��ưפ˼��̤Ǥ����٥�ʥ֥��Υ����ȥ��URL�ʤɡˤ����Ϥ��ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>reCAPTCHA ������</th>
                                                                    <td>�֥������١�����v3�˥������˴�Ť��ƥꥯ�����Ȥ򸡾ڤ��ޤ��פ����򤷤ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�ɥᥤ��</th>
                                                                    <td>reCAPTCHA��Ƴ�������������ȤΥɥᥤ������Ϥ��ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Google Cloud���ѵ����Ʊ��</th>
                                                                    <td>���Ƥ��ǧ�Τ�������ʤ���Х����å�������ޤ���</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li id="previous-reCAPTCHA_info">
                                                            <p>������λ���̤˵��ܤ���Ƥ��롢�����ȥ�������ӥ�������åȥ����򥳥ԡ����ƹ����Ƥ����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_4.png" alt="������λ����"></p>
                                                        </li>
                                                        <li>
                                                            <p>WordPress�������̤򳫤�������˥塼�֤��䤤��碌��-�֥���ƥ��졼�����פ򥯥�å����Ƥ���������<br>
                                                                �ֳ��� API �ȤΥ���ƥ��졼�����פβ��̤ˤ�reCAPTCHA�Ρ֥���ƥ��졼�����Υ��åȥ��åספ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_5.png" alt="reCAPTCHA�������"></p>
                                                        </li>
                                                        <li>
                                                            <p><a href="#previous-reCAPTCHA_info">���4</a>�ˤƹ����Ƥ����������ȥ�������ӥ�������åȥ��������Ϥ������ѹ�����¸�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_6.png" alt="reCAPTCHA�������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�ʾ��reCAPTCHA��Ƴ������ϴ�λ�Ǥ��������Ȥ˥������������ʲ��Τ褦�ʥ������󤬲��̱�����ɽ������Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_7.png" alt="reCAPTCHA��������"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b02">��ư�ֿ���ǽ��̵����</h5>
                                        <div class="block_body">
                                            <p>��ư�ֿ���ǽ��̵�������뤳�Ȥˤ�ꡢ̵�ط����軰�Ԥ˥��ѥ�᡼�뤬��������뤳�Ȥ��ɤ����Ȥ��Ǥ��ޤ���<br>
                                                ���������᡼��ե�������������줿�̾�Τ��䤤��碌�ʤɤ˴ؤ��Ƥ���մ�λ�᡼�뤬�Ϥ��ʤ��ʤ뤿�ᡢ�䤤��碌�桼�������԰¤����������ǽ��������ޤ���</p>

                                            <dl class="dl">
                                                <dt>�ץ饰�����Contact Form 7�פ����Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress�������̤򳫤�������˥塼�֤��䤤��碌��-�֥��󥿥��ȥե�����פ򥯥�å����Ƥ���������<br>
                                                                ���󥿥��ȥե�����ΰ��������Խ��פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_8.png" alt="WordPress��������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�֥᡼��ץ�����ˤ���֥᡼�� (2) ����ѡפΥ����å��򳰤�������¸�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_9.png" alt="WordPress��������"></p>
                                                        </li>
                                                    </ol>
                                                </dd>

                                                <dt>����CGI�ġ�������Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a><i class="ico ico_new-window color-gray"></i>�˥����󤷡���CGI�ġ���פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_10.png" alt="��CGI�ġ���פ򥯥�å�"></p>
                                                        </li>
                                                        <li>
                                                            <p>�᡼��ե�������Ρְ��������󥹥ȡ���פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_11.png" alt="CGI�ġ������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�����ɥᥤ��Ρ����򤹤�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_12.png" alt="CGI�ġ������"></p>
                                                        </li>
                                                        <li>
                                                            <p>���������URL�פ�URL�򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_13.png" alt="CGI�ġ������"></p>
                                                        </li>
                                                        <li>
                                                            <p>������˥塼���ּ�ư�ֿ��᡼�������פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_14.png" alt="�᡼��ե������������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�ּ�ư�ֿ��᡼��λ��Ѥ��ʤ��פ����򤷡����������¸����(��ǧ)�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_15.png" alt="�᡼��ե����������ѹ�����"></p>
                                                        </li>
                                                        <li>
                                                            <p>���������¸����(����)�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/previous/man_malicious_mailform_16.png" alt="�᡼��ե��������괰λ"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">����¾���碌�Ƽ»ܤ������������б�</h4>
                                <div class="section_body">
                                    <p>���Ҥ��к��ˤ��碌�ưʲ����б���»ܤ��Ƥ����������Ȥ����������������ɻߤ˷Ҥ���ޤ���</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c01">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</h5>
                                        <div class="block_body">
                                            <p>�Ť��С������Υץ�������Ѥ�³���뤳�Ȥ����������������оݤȤ���������ꥹ�����⤯�ʤ�ޤ���<br>
                                                �ʲ�����ˡ�ˤƺǿ��ǤؤΥ��åץǡ��Ȥ򤷤Ƥ���������</p>

                                            <dl class="dl">
                                                <dt>WordPress�ξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�֥��å���ܡ��ɡ�-�ֹ����פ򥯥�å����Ƥ���������<br>
                                                        �������С�����󤬤����硢�ʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡ֥С������ *.*.*-ja �˹����פ򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_17.png" alt="WordPress�ι�������"></p>
                                                </dd>
                                                <dt>�ץ饰����ξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�֥ץ饰�����-�֥��󥹥ȡ���Ѥߥץ饰����פ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ץ饰����Ǥϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֹ����פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_18.png" alt="WordPress�Υץ饰�������"></p>
                                                </dd>
                                                <dt>�ơ��ޤξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�ֳ��ѡ�-�֥ơ��ޡפ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ơ��ޤǤϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֺ����������פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_malicious_mailform_19.png" alt="WordPress�Υơ��޲���"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c02">���������WordPress��ƥץ饰���󡢥ơ��ޥե�������ȼ�����ǧ</h5>
                                        <div class="block_body">
                                            <p>��������Υץ饰�����ơ��ޥե���������۸����ޤ��ϰʲ������Ȥˤ��ȼ������󤬸�������Ƥ��ʤ�����ǧ���Ƥ���������</p>
                                            <p class="note">���ȼ����Ȥϡ�OS�䥽�եȥ������ˤ����ƥץ������Զ����߷׾�Υߥ��������Ȥʤä�ȯ�����륻�����ƥ���η�٤Τ��Ȥ򤤤��ޤ���<br>
                                                �ȼ����Τ�����֤ǥ����ƥ�����Ѥ�³���Ƥ���ȡ����������������줿�ꡢ�����륹�˴��������ꤹ�����������ޤ���</p>

                                            <p>��<a href="https://jvndb.jvn.jp/index.html" target="_blank" rel="nofollow">JVN iPedia �ȼ����к�����ǡ����١���</a><i class="ico ico_new-window base-color"></i><br>
                                                �����⳰��ȯ�����줿�ȼ���������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>

                                            <p>��<a href="https://www.jpcert.or.jp/" target="_blank" rel="nofollow">JPCERT Coordination Center</a><i class="ico ico_new-window base-color"></i><br>
                                                �������ȯ�����줿�ȼ���������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c03">�ե�����β����������ʥե��������֤γ�ǧ</h5>
                                        <div class="block_body">
                                            <p>�ե���������ʥե�����ޥ͡�����ˤˤưʲ�2�����ǧ���Ƥ���������</p>
                                            <ul class="ul">
                                                <li>�ե����뤬�����󤵤�Ƥ��ʤ���</li>
                                                <li>�����ʿȤ˳Ф��Τʤ��˥ե����뤬���֤���Ƥ��ʤ���</li>
                                            </ul>
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
                                    <li><a href="#link-a">�᡼��ե�����ΰ��ѤȤ�</a></li>
                                    <li><a href="#link-b">�᡼��ե�����ΰ��Ѥؤ��к�</a>
                                        <ol>
                                            <li><a href="#link-b01">reCAPTCHA��Ƴ��</a></li>
                                            <li><a href="#link-b02">��ư�ֿ���ǽ��̵����</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">����¾���碌�Ƽ»ܤ������������б�</a>
                                        <ol>
                                            <li><a href="#link-c01">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</a></li>
                                            <li><a href="#link-c02">���������WordPress��ƥץ饰���󡢥ơ��ޥե�������ȼ�����ǧ</a></li>
                                            <li><a href="#link-c03">�ե�����β����������ʥե��������֤γ�ǧ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">�᡼��ե�����ΰ��ѤȤ�</h4>
                                <div class="section_body">
                                    <p>�����Ⱦ�����֤������䤤��碌�ѤʤɤΥ᡼��ե�����ˤ����ơ����դ���ä���ʪ�����䤤��碌���Ƥ˥��ѥ�ʥե��å��󥰥����Ȥ�URL����������ʤɡˡ�Ϣ�������̵�ط����軰�ԤΥ᡼�륢�ɥ쥹�����Ϥ����������뤳�Ȥǡ���ư�ֿ���ǽ�ˤ��̵�ط����軰�Ԥإ��ѥ�᡼�����������Ȥ�������Ǥ���</p>

                                    <p><img class="img" src="../img/manual/man_malicious_mailform_1.png?date=2410" alt="�᡼��ե�����ΰ��Ѥ�ή��"></p>

                                    <p>���Τ褦�ʥ��ѥ�᡼�뤬���������ȥ᡼��μ����Ԥ��ﳲ���ڤ֤����Ǥʤ��������С�������IP���ɥ쥹�Υ�ԥ�ơ�������ɾȽ�ˤ������ꡢ�֥�å��ꥹ�Ȥ���Ͽ����붲�줬����ޤ����֥�å��ꥹ�Ȥ���Ͽ����������ʥ᡼��Ǥ����������Ǥ��ʤ��ʤ�ʤɤ����꤬ȯ�����ޤ���</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">�᡼��ե�����ΰ��Ѥؤ��к�</h4>
                                <div class="section_body">
                                    <p>�������ä��᡼��ե�������Ѥ����������������ˤϰʲ��Τ褦���к���ͭ���Ǥ���</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b01">reCAPTCHA��Ƴ��</h5>
                                        <div class="block_body">
                                            <p>reCAPTCHA�Ȥ�Google��̵�����󶡤��Ƥ��륻�����ƥ��к��ġ���Ǥ���<br>
                                                ����ˤ��ʹ֤���Υ�����������ܥåȤ���Υ�����������Ƚ�̤�����ܥåȤ���Υ��������ξ��ϲ��餫�Υ����������׵᤹��褦�ˤʤ�ޤ����᡼��ե�����ΰ��Ѥ�ޤ�����������������Ⱦ�ϥ�ܥåȤˤ���ΤΤ��ᡢreCAPTCHA��Ƴ�����к��Ȥ������˸���Ū�Ǥ���</p>

                                            <dl class="dl">
                                                <dt>�ץ饰�����Contact Form 7�פ����Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��Google reCAPTCHA�פ˥����������Ƥ�����������Google��������Ȥ�ɬ�פǤ���<br>
                                                                <a href="https://www.google.com/recaptcha/intro/v3.html" target="_blank" rel="nofollow">https://www.google.com/recaptcha/intro/v3.html</a><i class="ico ico_new-window color-gray"></i></p>
                                                        </li>
                                                        <li>
                                                            <p>��Admin Console�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_2.png?date=2410" alt="��Admin Console�פ򥯥�å�"></p>
                                                        </li>
                                                        <li>
                                                            <p>ɬ�׻�������Ϥ��������򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_3.png?date=2410" alt="ɬ�׻��������"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>��٥�</th>
                                                                    <td>�����Ȥ��ưפ˼��̤Ǥ����٥�ʥ֥��Υ����ȥ��URL�ʤɡˤ����Ϥ��ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>reCAPTCHA ������</th>
                                                                    <td>�֥������١�����v3�˥������˴�Ť��ƥꥯ�����Ȥ򸡾ڤ��ޤ��פ����򤷤ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>�ɥᥤ��</th>
                                                                    <td>reCAPTCHA��Ƴ�������������ȤΥɥᥤ������Ϥ��ޤ���</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Google Cloud���ѵ����Ʊ��</th>
                                                                    <td>���Ƥ��ǧ�Τ�������ʤ���Х����å�������ޤ���</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li id="reCAPTCHA_info">
                                                            <p>������λ���̤˵��ܤ���Ƥ��롢�����ȥ�������ӥ�������åȥ����򥳥ԡ����ƹ����Ƥ����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_4.png?date=2410" alt="������λ����"></p>
                                                        </li>
                                                        <li>
                                                            <p>WordPress�������̤򳫤�������˥塼�֤��䤤��碌��-�֥���ƥ��졼�����פ򥯥�å����Ƥ���������<br>
                                                                �ֳ��� API �ȤΥ���ƥ��졼�����פβ��̤ˤ�reCAPTCHA�Ρ֥���ƥ��졼�����Υ��åȥ��åספ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_5.png?date=2410" alt="reCAPTCHA�������"></p>
                                                        </li>
                                                        <li>
                                                            <p><a href="#reCAPTCHA_info">���4</a>�ˤƹ����Ƥ����������ȥ�������ӥ�������åȥ��������Ϥ������ѹ�����¸�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_6.png?date=2410" alt="reCAPTCHA�������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�ʾ��reCAPTCHA��Ƴ������ϴ�λ�Ǥ��������Ȥ˥������������ʲ��Τ褦�ʥ������󤬲��̱�����ɽ������Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_7.png?date=2410" alt="reCAPTCHA��������"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b02">��ư�ֿ���ǽ��̵����</h5>
                                        <div class="block_body">
                                            <p>��ư�ֿ���ǽ��̵�������뤳�Ȥˤ�ꡢ̵�ط����軰�Ԥ˥��ѥ�᡼�뤬��������뤳�Ȥ��ɤ����Ȥ��Ǥ��ޤ���<br>
                                                ���������᡼��ե�������������줿�̾�Τ��䤤��碌�ʤɤ˴ؤ��Ƥ���մ�λ�᡼�뤬�Ϥ��ʤ��ʤ뤿�ᡢ�䤤��碌�桼�������԰¤����������ǽ��������ޤ���</p>

                                            <dl class="dl">
                                                <dt>�ץ饰�����Contact Form 7�פ����Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>WordPress�������̤򳫤�������˥塼�֤��䤤��碌��-�֥��󥿥��ȥե�����פ򥯥�å����Ƥ���������<br>
                                                                ���󥿥��ȥե�����ΰ��������Խ��פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_8.png?date=2410" alt="WordPress��������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�֥᡼��ץ�����ˤ���֥᡼�� (2) ����ѡפΥ����å��򳰤�������¸�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_9.png?date=2410" alt="WordPress��������"></p>
                                                        </li>
                                                    </ol>
                                                </dd>

                                                <dt>����CGI�ġ�������Ѥ��ƥ᡼��ե���������֤��Ƥ�����</dt>
                                                <dd class="pl0">
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a><i class="ico ico_new-window color-gray"></i>�˥����󤷡��֥᡼��ե�����(CGI�ġ���)�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_10.png?date=2410" alt="�֥᡼��ե�����(CGI�ġ���)�פ򥯥�å�"></p>
                                                        </li>
                                                        <li>
                                                            <p>������ѹ��������᡼��ե�����Ρִ����ץܥ���򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_13.png?date=2410" alt="�᡼��ե�����(CGI�ġ���)����"></p>
                                                        </li>
                                                        <li>
                                                            <p>������˥塼���ּ�ư�ֿ��᡼�������פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_14.png?date=2410" alt="�᡼��ե������������"></p>
                                                        </li>
                                                        <li>
                                                            <p>�ּ�ư�ֿ��᡼��λ��Ѥ��ʤ��פ����򤷡����������¸����(��ǧ)�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_15.png?date=2410" alt="�᡼��ե����������ѹ�����"></p>
                                                        </li>
                                                        <li>
                                                            <p>���������¸����(����)�פ򥯥�å����Ƥ���������</p>
                                                            <p><img class="img" src="../img/manual/man_malicious_mailform_16.png?date=2410" alt="�᡼��ե��������괰λ"></p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">����¾���碌�Ƽ»ܤ������������б�</h4>
                                <div class="section_body">
                                    <p>���Ҥ��к��ˤ��碌�ưʲ����б���»ܤ��Ƥ����������Ȥ����������������ɻߤ˷Ҥ���ޤ���</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c01">���������WordPress��ƥץ饰���󡢥ơ��ޥե�����ι���</h5>
                                        <div class="block_body">
                                            <p>�Ť��С������Υץ�������Ѥ�³���뤳�Ȥ����������������оݤȤ���������ꥹ�����⤯�ʤ�ޤ���<br>
                                                �ʲ�����ˡ�ˤƺǿ��ǤؤΥ��åץǡ��Ȥ򤷤Ƥ���������</p>

                                            <dl class="dl">
                                                <dt>WordPress�ξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�֥��å���ܡ��ɡ�-�ֹ����פ򥯥�å����Ƥ���������<br>
                                                        �������С�����󤬤����硢�ʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡ֥С������ *.*.*-ja �˹����פ򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_17.png?date=2410" alt="WordPress�ι�������"></p>
                                                </dd>
                                                <dt>�ץ饰����ξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�֥ץ饰�����-�֥��󥹥ȡ���Ѥߥץ饰����פ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ץ饰����Ǥϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֹ����פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_18.png?date=2410" alt="WordPress�Υץ饰�������"></p>
                                                </dd>
                                                <dt>�ơ��ޤξ��</dt>
                                                <dd>
                                                    <p>WordPress�������̤򳫤�������˥塼�ֳ��ѡ�-�֥ơ��ޡפ򥯥�å����Ƥ���������<br>
                                                        �������С���������ѤǤ���ơ��ޤǤϰʲ��Τ褦�ʥ�å�������ɽ������Ƥ���Τǡֺ����������פβս�򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/man_malicious_mailform_19.png?date=2410" alt="WordPress�Υơ��޲���"></p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c02">���������WordPress��ƥץ饰���󡢥ơ��ޥե�������ȼ�����ǧ</h5>
                                        <div class="block_body">
                                            <p>��������Υץ饰�����ơ��ޥե���������۸����ޤ��ϰʲ������Ȥˤ��ȼ������󤬸�������Ƥ��ʤ�����ǧ���Ƥ���������</p>
                                            <p class="note">���ȼ����Ȥϡ�OS�䥽�եȥ������ˤ����ƥץ������Զ����߷׾�Υߥ��������Ȥʤä�ȯ�����륻�����ƥ���η�٤Τ��Ȥ򤤤��ޤ���<br>
                                                �ȼ����Τ�����֤ǥ����ƥ�����Ѥ�³���Ƥ���ȡ����������������줿�ꡢ�����륹�˴��������ꤹ�����������ޤ���</p>

                                            <p>��<a href="https://jvndb.jvn.jp/index.html" target="_blank" rel="nofollow">JVN iPedia �ȼ����к�����ǡ����١���</a><i class="ico ico_new-window base-color"></i><br>
                                                �����⳰��ȯ�����줿�ȼ���������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>

                                            <p>��<a href="https://www.jpcert.or.jp/" target="_blank" rel="nofollow">JPCERT Coordination Center</a><i class="ico ico_new-window base-color"></i><br>
                                                �������ȯ�����줿�ȼ���������ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c03">�ե�����β����������ʥե��������֤γ�ǧ</h5>
                                        <div class="block_body">
                                            <p>�ե���������ʥե�����ޥ͡�����ˤˤưʲ�2�����ǧ���Ƥ���������</p>
                                            <ul class="ul">
                                                <li>�ե����뤬�����󤵤�Ƥ��ʤ���</li>
                                                <li>�����ʿȤ˳Ф��Τʤ��˥ե����뤬���֤���Ƥ��ʤ���</li>
                                            </ul>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!--/���ѥͥ�-->

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