<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DNS�쥳���ɤ��Խ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��Ǳ�����Υɥᥤ��̾�ϡ������С��ѥͥ�Ρ�DNS�쥳��������פ��DNS�쥳���ɤ��Խ����뤳�Ȥ���ǽ�Ǥ������ڡ����Ǥ��ѹ���ǽ�ʥ쥳���ɤμ������ˤĤ��Ƥ����⤷�Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">DNS�쥳���ɤ��Խ�</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DNS�쥳���ɤˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-previous-a01">DNS�쥳���ɤμ���</a></li>
                                            <li><a href="#link-previous-a02">�ƥ쥳���ɤΥǥե����������</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-b">DNS�쥳���ɤ��Խ�</a></li>
                                    <li><a href="#link-previous-c">DNS�쥳���ɤؤ�SPF����</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.DNS�쥳���ɤ��ɲ�</a></li>
                                            <li><a href="#link-previous-c02">2.DNS�쥳���ɤ�����</a></li>
                                            <li><a href="#link-previous-c03">3.��ǧ������</a></li>
                                            <li><a href="#link-previous-c04">4.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DNS�쥳���ɤˤĤ���</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a01">DNS�쥳���ɤμ���</h5>
                                        <div class="block_body">
                                            <p>�������ӥ��ˤ������ǽ��DNS�쥳���ɤˤϡ��ʲ��Τ褦�ʤ�Τ�����ޤ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>A�쥳����</dt>
                                                <dd>���Ƥˡ�IP ���ɥ쥹�פ����Ϥ��Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>AAAA�쥳����</dt>
                                                <dd>���Ƥˡ�IPv6 ���ɥ쥹�פ����Ϥ��Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>CNAME�쥳����</dt>
                                                <dd>���Ƥˡ֥ۥ���̾�פ���ꤷ�Ƥ���������IP ���ɥ쥹����Ͽ�Ǥ��ޤ���<br>
                                                    �֥ۥ���̾�פ�Ʊ��̾�Υ���ƥ�Ĥ����ꤹ�뤳�ȤϤǤ��ޤ���<br>
                                                    Ʊ��֥ۥ���̾�פ�CNAME�쥳���ɤ�A�쥳���ɡ�AAAA�쥳���ɡ�MX�쥳���ɤ�ʻ������Ͽ�Ǥ��ޤ���</dd>
                                                <dt><i class="ico ico_square-fill"></i>MX�쥳����(ͥ���٤⤢�碌������)</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>���Ƥˡ֥ۥ���̾�פ���ꤷ�Ƥ���������IP���ɥ쥹����Ͽ�Ǥ��ޤ���</li>
                                                        <li>ͥ���٤��ͤ��������ۤ�ͥ���̤��⤯�ʤ�ޤ���</li>
                                                        <li>��Ͽ����Ƥ���MX �쥳���ɤȡ�Ʊ���ۥ���̾��Ʊ��ͥ���١ۤΥ쥳���ɤ��ɲäǤ��ޤ���<br>
                                                        �ɤ��餫���ۤʤ���ɲäǤ��ޤ���</li>
                                                    </ul>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>TXT�쥳����</dt>
                                                <dd>TXT��Text�˥쥳���ɤϡ��ۥ��Ȥξ���򵭽Ҥ��뤿��Υƥ����Ȥ���ꤷ�ޤ���<br>
                                                    ��"(���֥륯������)�פ������¸�ߤ�����ϡ���Ͽ���˼�ưŪ�˺���������ޤ���</dd>
                                                <dt><i class="ico ico_square-fill"></i>NS�쥳����</dt>
                                                <dd>���Ƥˡ֥͡��ॵ���С��פ���ꤷ�Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>SRV�쥳����</dt>
                                                <dd>���ƤˡֽŤ� �ݡ��� �������åȡפ����Ϥ��Ƥ���������</dd>
                                            </dl>
                                            <ul class="list list_check">
                                                <li><em class="font-bold">A(Address)�쥳����</em>�Ǥϡ��ۥ���̾��ɤΤ褦��IPv4���ɥ쥹���Ѵ����뤫����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">AAAA�쥳����</em>�Ǥϡ��ۥ���̾��ɤΤ褦��IPv6���ɥ쥹���Ѵ����뤫����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">CNAME��Canonical NAME�˥쥳����</em>�ϡ��ۥ��Ȥ���̾�ʥ����ꥢ���ˤ��դ���ݤ����Ѥ���ޤ���<br>
                                                �����ۥ���̾���Ф�����̾����ꤷ�Ƥ����������̤Υ����С���ž��������ʤɤ����Ѥ��ޤ���</li>
                                                <li><em class="font-bold">MX��Mail eXchanger�˥쥳����</em>�ϥ᡼�륵���С�����ꤷ�ޤ���<br>
                                                ͥ���̤��դ��뤳�Ȥǡ�ʣ���Υ᡼�륵���С�����ꤹ�뤳�Ȥ��Ǥ��ޤ���</li>
                                                <li><em class="font-bold">TXT��Text�˥쥳����</em>�ϡ��ۥ��Ȥξ���򵭽Ҥ��뤿��˻Ȥ��ޤ���<br>
                                                �Żҥ᡼���������ǧ�ڵ��ѤǤ���SPF��DomainKeys�ʤɤ����Ѥ���ޤ���</li>
                                                <li><em class="font-bold">NS�쥳����</em>�Ǥϡ��ɥᥤ��Υ����������������͡��ॵ���С�����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">SRV�쥳����</em>�Ǥϡ��ɥᥤ����Ф��륵���ӥ��ξ�����ꤷ�ޤ���</li>
                                            </ul>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a02">�ƥ쥳���ɤΥǥե����������</h5>
                                        <div class="block_body">
                                            <p>�ɥᥤ�������ɲû���DNS�쥳���ɽ���ͤϰʲ��Ȥʤ�ޤ���</p>
                                            <table class="table break-word">
                                                <thead>
                                                    <tr>
                                                        <th class="w25per">�ۥ���̾</th>
                                                        <th class="w10per">����</th>
                                                        <th>����</th>
                                                        <th class="w10per">TTL</th>
                                                        <th class="w15per">ͥ����</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>www.example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>MX</td>
                                                        <td>example.com</td>
                                                        <td>3600</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>*.example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>TXT</td>
                                                        <td>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>NS</td>
                                                        <td>ns1.xserver.jp<br>
                                                            ns2.xserver.jp<br>
                                                            ns3.xserver.jp<br>
                                                            ns4.xserver.jp<br>
                                                            ns5.xserver.jp<br>
                                                        </td>
                                                        <td>3600</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="note-list">
                                                <li>���ɥᥤ��̾�ϥ���ץ�Ǥ���</li>
                                                <li>��<em class="font-bold">***.***.***.***</em>�Ϥ����ͤ������ѤΥ����С���IP���ɥ쥹�Ǥ���<br>
                                                    IP���ɥ쥹�ϡ������С��ѥͥ�֥����С�����פǳ�ǧ��ǽ�Ǥ���</li>
                                                <li>��<em class="font-bold">sv***.xserver.jp</em>�Ϥ����ͤ������ѤΥ����С��Υۥ���̾�Ǥ���<br>
                                                    �ۥ���̾�ϡ������С��ѥͥ�֥����С�����פǳ�ǧ��ǽ�Ǥ���</li>
                                            </ul>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DNS�쥳���ɤ��Խ�</h4>
                                <div class="section_body">
                                    <p>�ޤ��ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���DNS�쥳��������פؤȿʤ�Ǥ���������</p>
                                    <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_1.png" alt="XServer��������ȡ�DNS�쥳��������Υ����꡼�󥷥�å�"></p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>�ܵ�ǽ�Ͼ����͸����ε�ǽ�Ǥ���<br>
                                            �ܵ�ǽ�ˤƥ��֥ɥᥤ��Τ�¾�ҥ����ӥ�����Ѥ����ꡢ�᡼�륵���ФΤ�¾�ҥ����С�����Ѥ���ʤɡ��ɥᥤ�������Ƥξܺٵ�ǽ�����Ѳ�ǽ�Ǥ������������Ƥ˸�꤬�����硢�ڥɥᥤ������ˤ����Ѥ��������ʤ��ʤ��Webɽ����᡼������˱ƶ����ڤֲ�ǽ��������ޤ���</p>
                                            <p class="note">���쥳�����Խ����Τ˴ؤ���ܺ٤ˤĤ��ޤ��Ƥϡ������ͤ����ȤǤ���ǧ����ޤ��褦���ꤤ���ޤ���</p>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">DNS�쥳���ɤؤ�SPF����</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">
                                        <p>SPF(Sender Policy Framework)�Ȥϡ��Żҥ᡼����������ɥᥤ�󤬺��Τ���Ƥ��ʤ����򸡺�������ȤߤǤ���<br>
                                        �������ӥ��Ǥϡ��ʲ��μ���SPF�����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>

                                        <aside class="msg msg_notice">
                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>SPF����򤵤������</h6>
                                            <div class="msg_body">
                                                <p>
                                                    ���ҥ����С��ǥɥᥤ��̾�����Ѥξ��ϥɥᥤ�������ɲû���SPF�쥳���ɤ�ưŪ���ɲä������ޤ��Τǡ������ͤ����Ȥ�SPF�쥳���ɤ���Ͽ���Ƥ�������ɬ�פϤ���ޤ���
                                                </p>
                                                <p>
                                                    �ޤ����ҤȤĤΥɥᥤ��̾���Ф���ʣ����SPF�쥳���ɤ���Ͽ���Ƥ����硢��������ǽ���ʤ���ǽ��������ޤ��Τǡ�����դ���������
                                                </p>
                                            </div>
                                        </aside>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.DNS�쥳���ɤ��ɲ�</h6>
                                            <div class="box_body">
                                                <p>��DNS�쥳�����ɲáפ����򤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_2.png" alt="DNS�쥳�������꤫��DNS�쥳�����ɲäؿʤॹ���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.DNS�쥳���ɤ�����</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_3.png" alt="DNS�쥳���ɤ��ɲ�������̤Υ����꡼�󥷥�å�"></p>
                                                <p>��Τ褦�ʲ��̤�ɽ������ޤ��Τǡ��ʲ��Τ褦�����ꤷ�Ƥ���������</p>

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w15per">�ۥ���</th>
                                                            <td>�̾�϶�������ꤢ��ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����</th>
                                                            <td>TXT</td>
                                                        </tr>
                                                        <tr>
                                                            <th>����</th>
                                                            <td>v=spf1 +a:<em class="red">sv***.xserver.jp</em> +a:<em class="red">example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                        </tr>
                                                        <tr>
                                                            <th>TTL</th>
                                                            <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ͥ����</th>
                                                            <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p>���֥ɥᥤ��ξ��ϰʲ��Ȥʤ�ޤ���</p>

                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">�ۥ���</th>
                                                        <td>���֥ɥᥤ��̾</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.xserver.jp</em> +a:<em class="red">abc.example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ͥ����</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�����ơפˤĤ���</dt>
                                                    <dd>��<em class="red">sv***.xserver.jp</em>�פ���ʬ�ϡ������ͤ������ѤΥ����С��Υۥ���̾�������Ƥ���������</dd>
                                                    <dd>��<em class="red">example.com</em>�ס�<em class="red">abc.example.com</em>�פ���ʬ�ϡ������ͤΥɥᥤ��̾�������Ƥ���������</dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ۥ���̾�γ�ǧ��ˡ</dt>
                                                    <dd>�����С��ѥͥ���֥����С�����פ�ꡢ�����ͤ������ѤΥ����С��Υۥ���̾�γ�ǧ����ǽ�Ǥ���</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.��ǧ������</h6>
                                            <div class="box_body">
                                                <p>������ܤ����ϸ塢�ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_4.png" alt="DNS�쥳�����ɲä������ǧ���̤Υ����꡼�󥷥�å�"></p>
                                                <p>�������Ƥ򤴳�ǧ�ξ塢�ְ㤤���ʤ���С��ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_5.png" alt="DNS�쥳�����ɲô�λ����"></p>
                                                <p>DNS�쥳���ɤ��ɲä���ޤ�����</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.��λ</h6>
                                            <div class="box_body">
                                                <p>DNS�쥳���ɰ����˿������ɲä���Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_6.png" alt="DNS�쥳���ɰ������ɲä���Ƥ��ޤ�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>DNS�쥳����������</h6>
                                        <div class="msg_body">
                                            <p>�ʲ��⤢�碌�ơ������Ȥ���������</p>
                                            <ul class="list list_chevron-right">
                                                <li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(��G Suite)�򤪻Ȥ��ξ��</a></li>
                                                <li><a href="man_domain_dns_setting_mail_server.php">�����᡼�륵���С��򤪻Ȥ��ξ��</a></li>
                                                <li><a href="man_domain_dns_setting_blog.php">livedoor�ʤɤγ����֥������ꤹ����</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>

                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">DNS�쥳���ɤˤĤ���</a>
                                        <ul>
                                            <li><a href="#link-a01">DNS�쥳���ɤμ���</a></li>
                                            <li><a href="#link-a02">�ƥ쥳���ɤΥǥե����������</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">DNS�쥳���ɤ��Խ�</a></li>
                                    <li><a href="#link-c">DNS�쥳���ɤؤ�SPF����</a>
                                        <ol>
                                            <li><a href="#link-c01">1.DNS�쥳���ɤ��ɲ�</a></li>
                                            <li><a href="#link-c02">2.DNS�쥳���ɤ�����</a></li>
                                            <li><a href="#link-c03">3.��λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h3 id="link-a" class="section_ttl">DNS�쥳���ɤˤĤ���</h3>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-a01">DNS�쥳���ɤμ���</h5>
                                        <div class="block_body">
                                            <p>�������ӥ��ˤ������ǽ��DNS�쥳���ɤˤϡ��ʲ��Τ褦�ʤ�Τ�����ޤ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>A�쥳����</dt>
                                                <dd>���Ƥˡ�IP ���ɥ쥹�פ����Ϥ��Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>AAAA�쥳����</dt>
                                                <dd>���Ƥˡ�IPv6 ���ɥ쥹�פ����Ϥ��Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>CNAME�쥳����</dt>
                                                <dd>���Ƥˡ֥ۥ���̾�פ���ꤷ�Ƥ���������IP ���ɥ쥹����Ͽ�Ǥ��ޤ���</dd>
                                                <dt><i class="ico ico_square-fill"></i>MX�쥳����(ͥ���٤⤢�碌������)</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>���Ƥˡ֥ۥ���̾�פ���ꤷ�Ƥ���������IP���ɥ쥹����Ͽ�Ǥ��ޤ���</li>
                                                        <li>ͥ���٤��ͤ��������ۤ�ͥ���̤��⤯�ʤ�ޤ���</li>
                                                        <li>��Ͽ����Ƥ���MX �쥳���ɤȡ�Ʊ���ۥ���̾��Ʊ��ͥ���١ۤΥ쥳���ɤ��ɲäǤ��ޤ���<br>
                                                            �ɤ��餫���ۤʤ���ɲäǤ��ޤ���</li>
                                                    </ul>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>TXT�쥳����</dt>
                                                <dd>TXT��Text�˥쥳���ɤϡ��ۥ��Ȥξ���򵭽Ҥ��뤿��Υƥ����Ȥ���ꤷ�ޤ���</dd>
                                                <dt><i class="ico ico_square-fill"></i>NS�쥳����</dt>
                                                <dd>���Ƥˡ֥͡��ॵ���С��פ���ꤷ�Ƥ���������</dd>
                                                <dt><i class="ico ico_square-fill"></i>SRV�쥳����</dt>
                                                <dd>���ƤˡֽŤ� �ݡ��� �������åȡפ����Ϥ��Ƥ���������</dd>
                                            </dl>
                                            <ul class="list list_check">
                                                <li><em class="font-bold">A(Address)�쥳����</em>�Ǥϡ��ۥ���̾��ɤΤ褦��IPv4���ɥ쥹���Ѵ����뤫����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">AAAA�쥳����</em>�Ǥϡ��ۥ���̾��ɤΤ褦��IPv6���ɥ쥹���Ѵ����뤫����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">CNAME��Canonical NAME�˥쥳����</em>�ϡ��ۥ��Ȥ���̾�ʥ����ꥢ���ˤ��դ���ݤ����Ѥ���ޤ���<br>
                                                    �����ۥ���̾���Ф�����̾����ꤷ�Ƥ����������̤Υ����С���ž��������ʤɤ����Ѥ��ޤ���</li>
                                                <li><em class="font-bold">MX��Mail eXchanger�˥쥳����</em>�ϥ᡼�륵���С�����ꤷ�ޤ���<br>
                                                    ͥ���̤��դ��뤳�Ȥǡ�ʣ���Υ᡼�륵���С�����ꤹ�뤳�Ȥ��Ǥ��ޤ���</li>
                                                <li><em class="font-bold">TXT��Text�˥쥳����</em>�ϡ��ۥ��Ȥξ���򵭽Ҥ��뤿��˻Ȥ��ޤ���<br>
                                                    �Żҥ᡼���������ǧ�ڵ��ѤǤ���SPF��DomainKeys�ʤɤ����Ѥ���ޤ���</li>
                                                <li><em class="font-bold">NS�쥳����</em>�Ǥϡ��ɥᥤ��Υ����������������͡��ॵ���С�����ꤷ�ޤ���</li>
                                                <li><em class="font-bold">SRV�쥳����</em>�Ǥϡ��ɥᥤ����Ф��륵���ӥ��ξ�����ꤷ�ޤ���</li>
                                            </ul>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-a02">�ƥ쥳���ɤΥǥե����������</h5>
                                        <div class="block_body">
                                            <p>�ɥᥤ�������ɲû���DNS�쥳���ɽ���ͤϰʲ��Ȥʤ�ޤ���</p>
                                            <table class="table break-all">
                                                <thead>
                                                <tr>
                                                    <th class="w25per">�ۥ���̾</th>
                                                    <th class="w10per">����</th>
                                                    <th>����</th>
                                                    <th class="w10per">TTL</th>
                                                    <th class="w15per">ͥ����</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>www.example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>MX</td>
                                                    <td>example.com</td>
                                                    <td>3600</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th>*.example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>TXT</td>
                                                    <td>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>NS</td>
                                                    <td>ns1.xserver.jp<br>
                                                        ns2.xserver.jp<br>
                                                        ns3.xserver.jp<br>
                                                        ns4.xserver.jp<br>
                                                        ns5.xserver.jp
                                                    </td>
                                                    <td>3600</td>
                                                    <td>0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <ul class="note-list">
                                                <li>���ɥᥤ��̾�ϥ���ץ�Ǥ���</li>
                                                <li>��<em class="font-bold">***.***.***.***</em>�Ϥ����ͤ������ѤΥ����С���IP���ɥ쥹�Ǥ���<br>
                                                    IP���ɥ쥹�ϡ������С��ѥͥ�֥����С�����פǳ�ǧ��ǽ�Ǥ���</li>
                                                <li>��<em class="font-bold">sv***.xserver.jp</em>�Ϥ����ͤ������ѤΥ����С��Υۥ���̾�Ǥ���<br>
                                                    �ۥ���̾�ϡ������С��ѥͥ�֥����С�����פǳ�ǧ��ǽ�Ǥ���</li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                            </section><!-- /section -->

                            <div class="section">
                                <h3 id="link-b" class="section_ttl">DNS�쥳���ɤ��Խ�</h3>
                                <div class="section_body">
                                    <p>�ޤ��ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���DNS�쥳��������פؤȿʤ�Ǥ���������</p>
                                    <p><img class="img" src="../img/manual/man_domain_dns_setting_1.png?date=2410" alt="DNS�쥳��������Υ����꡼�󥷥�å�"></p>
                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>����դ�������</h5>
                                        <div class="msg_body">
                                            <p>�ܵ�ǽ�Ͼ����͸����ε�ǽ�Ǥ���<br>
                                                �ܵ�ǽ�ˤƥ��֥ɥᥤ��Τ�¾�ҥ����ӥ�����Ѥ����ꡢ�᡼�륵���ФΤ�¾�ҥ����С�����Ѥ���ʤɡ��ɥᥤ�������Ƥξܺٵ�ǽ�����Ѳ�ǽ�Ǥ������������Ƥ˸�꤬�����硢�ڥɥᥤ������ˤ����Ѥ��������ʤ��ʤ��Webɽ����᡼������˱ƶ����ڤֲ�ǽ��������ޤ���</p>
                                            <p class="note">���쥳�����Խ����Τ˴ؤ���ܺ٤ˤĤ��ޤ��Ƥϡ������ͤ����ȤǤ���ǧ����ޤ��褦���ꤤ���ޤ���</p>
                                        </div>
                                    </aside>
                                </div>

                            </div><!-- /section -->

                            <h3 id="link-c" class="section_ttl">DNS�쥳���ɤؤ�SPF����</h3>
                            <div class="section">
                                <div class="section_body">
                                    <p>
                                        SPF(Sender Policy Framework)�Ȥϡ��Żҥ᡼����������ɥᥤ�󤬺��Τ���Ƥ��ʤ����򸡺�������ȤߤǤ���<br>
                                        �������ӥ��Ǥϡ��ʲ��μ���SPF�����ꤹ�뤳�Ȥ���ǽ�Ǥ���
                                    </p>

                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPF����򤵤������</h5>
                                        <div class="msg_body">
                                            <p>
                                                ���ҥ����С��ǥɥᥤ��̾�����Ѥξ��ϥɥᥤ�������ɲû���SPF�쥳���ɤ�ưŪ���ɲä������ޤ��Τǡ������ͤ����Ȥ�SPF�쥳���ɤ���Ͽ���Ƥ�������ɬ�פϤ���ޤ���
                                            </p>
                                            <p>
                                                �ޤ����ҤȤĤΥɥᥤ��̾���Ф���ʣ����SPF�쥳���ɤ���Ͽ���Ƥ����硢��������ǽ���ʤ���ǽ��������ޤ��Τǡ�����դ���������
                                            </p>
                                        </div>
                                    </div>

                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c01">1.DNS�쥳���ɤ��ɲ�</h4>
                                            <div class="box_body">
                                                <p>��DNS�쥳����������ɲáפ����򤷤Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_2.png?date=2410" alt="DNS�쥳����������ɲä��륹���꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c02">2.DNS�쥳���ɤ�����</h4>
                                            <div class="box_body">
                                                <p>������ܤ����ϸ塢���ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_3.png?date=2410" alt="DNS�쥳�����ɲ�������̤Υ����꡼�󥷥�å�"></p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">�ۥ���</th>
                                                        <td>�̾�϶�������ꤢ��ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.wpx.ne.jp</em> +a:<em class="red">example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ͥ����</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>���֥ɥᥤ��ξ��ϰʲ��Ȥʤ�ޤ���</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">�ۥ���</th>
                                                        <td>���֥ɥᥤ��̾</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>����</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.wpx.ne.jp</em> +a:<em class="red">abc.example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ͥ����</th>
                                                        <td>�ѹ���ɬ�פϤ���ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>�����ơפˤĤ���</dt>
                                                    <dd>��<em class="red">sv***.xserver.jp</em>�פ���ʬ�ϡ������ͤ������ѤΥ����С��Υۥ���̾�������Ƥ���������</dd>
                                                    <dd>��<em class="red">example.com</em>�ס�<em class="red">abc.example.com</em>�פ���ʬ�ϡ������ͤΥɥᥤ��̾�������Ƥ���������</dd>
                                                    <dt><i class="ico ico_square-fill"></i>�ۥ���̾�γ�ǧ��ˡ</dt>
                                                    <dd>�����С��ѥͥ���֥����С�����פ�ꡢ�����ͤ������ѤΥ����С��Υۥ���̾�γ�ǧ����ǽ�Ǥ���</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c03">3.��λ</h4>
                                            <div class="box_body">
                                                <p>DNS�쥳���ɰ����˿������ɲä���Ƥ��뤳�Ȥ��ǧ���Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_6.png?date=2410" alt="DNS�쥳���ɰ������ɲä���Ƥ��ޤ�"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>DNS�쥳����������</h6>
                                        <div class="msg_body">
                                            <p>�ʲ��⤢�碌�ơ������Ȥ���������</p>
                                            <ul class="list list_chevron-right">
                                                <li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(��G Suite)�򤪻Ȥ��ξ��</a></li>
                                                <li><a href="man_domain_dns_setting_blog.php">livedoor�ʤɤγ����֥������ꤹ����</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>

                            </div><!-- /section -->


                        </div>
                        <!-- /���ѥͥ�-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->
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