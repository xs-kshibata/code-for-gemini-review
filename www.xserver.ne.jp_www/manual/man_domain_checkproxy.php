<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ư���ǧ�ˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С���ž��Ȥ˺ݤ��ơ��͡��ॵ���С����ѹ�����ư�ɽ�����ǧ�Ǥ����ư���ǧURL�׵�ǽ��hosts�ե�������Խ���ˡ�Τ�����Ǥ���">

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
            
                <h3 class="sub-ttl">ư���ǧ�ˤĤ���</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">ư���ǧ�ˤĤ���</a></li>
                                    <li><a href="#link-previous-b">��Ū�����Ȥ�ư����ǧ������ˡ</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">ư���ǧURL�Ȥ�</a></li>
                                            <li><a href="#link-previous-b02">ư���ǧURL��������</a></li>
                                            <li><a href="#link-previous-b03">ư���ǧURL�����Ѥ���ɽ����ǧ��ˡ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-c">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>
                                        <ul>
                                            <li><a href="#link-previous-c01">hosts�ե�����Ȥ�</a></li>
                                            <li><a href="#link-previous-c02">hosts�ե�������Խ���ˡ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_server.php">�����С��ΰ�ž�˴ؤ���֤褯��������</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 id="link-previous-a" class="section_ttl">ư���ǧ�ˤĤ���</h4>
                                <div class="section_body">
                                    <p>¾�Ҥ���Υ����С���ž�κݡ��͡��ॵ���С����ڤ��ؤ��������������С��Ǥ�ư����ǧ���뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p>ư���ǧ�ˤϡ������С��ѥͥ�Ρ�ư���ǧURL�׵�ǽ����Ѥ�����ˡ�ȡ������ͤ�PC�Ρ�hosts�ץե��������Ѥ�����ˡ������ޤ���
                                        Ǥ�դ���ˡ��ư��򤴳�ǧ����������</p>
                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>WordPress����������ư����ǧ������</h5>
                                        <div class="msg_body">
                                            <p>
                                                ��ư���ǧURL�׵�ǽ�Ǥϡ�WordPress���ΰ����Υץ����ʢ��ˤǤ�����˳�ǧ�Ǥ��ʤ���礬����ޤ���<br>
                                                ���ξ��ϡ�<a href="#link-previous-c">hosts�ե�������Խ�</a>���Ƴ�ǧ���Ƥ���������
                                            </p>
                                            <p class="note">������URL�ˤƥ�󥯤���������ưŪ�����Ȥ䡢����ɥᥤ��ؤΥ�����쥯�Ȥ�Ԥ�CMS�ץ������</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">��Ū�����Ȥ�ư����ǧ������ˡ</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">ư���ǧURL�Ȥ�</h5>
                                        <div class="block_body">
                                            <p>
                                                �ܵ�ǽ�ϡ������С������ꤵ�줿�ȼ��ɥᥤ����Ф��ơ�ư���ɽ���ˤ��ǧ���뤿���URL���ɲä��뵡ǽ�Ǥ���<br>
                                                ������ε�ǽ�����Ѥ��뤳�Ȥˤ�ꡢ�����С���ž���Υ͡��ॵ���С��ڤ��ؤ����ˡ������ɥᥤ���ΰ�˥��åץ��ɤ����ۡ���ڡ�����ɽ�����ǧ���뤳�Ȥ��Ǥ��ޤ���
                                            </p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-b02" class="block_ttl">ư���ǧURL��������</h5>
                                        <div class="block_body">

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.��ư���ǧURL�פ򥯥�å�</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>������塢��ư���ǧURL�פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_1.png" alt="ư���ǧURL�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.ư���ǧURL������ɲ�</h6>
                                                    <div class="box_body">
                                                        <p>��ư���ǧURL�����ɲáפ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_2.png" alt="ư���ǧURL������ɲä򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.������ɲ�</h6>
                                                    <div class="box_body">
                                                        <p>�֥����ȡפΥץ�������˥塼���顢ư����ǧ�������ɥᥤ������򤷡����ɲä���פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_3.png" alt="ư����ǧ�������ɥᥤ������򤷤�ư���ǧURL������ɲ�(����)�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.����URL�γ�ǧ</h6>
                                                    <div class="box_body">
                                                        <p>�ɲ����괰λ�β��̤�ɽ������ޤ��Τǡ���ư���ǧURL��������פ򥯥�å������ɲä��������ȡʥɥᥤ��ˤΡ�ư���ǧ���ɥ쥹�פ��ǧ���ޤ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_4.png" alt="�ɲ����괰λ����"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.���괰λ</h6>
                                                    <div class="box_body">
                                                        <p>�ʾ��ư���ǧURL������ϴ�λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_5.png" alt="ư���ǧURL������ɲä򥯥�å�"></p>
                                                        <p>���ꤵ�줿ư���ǧURL�˥����������ơ�ɽ�������ư���ǧ��ԤäƤ���������<br>
                                                            ư���ǧURL����������ϡ��ֺ���פ����򤷤Ƥ���������
                                                        </p>
                                                        <p class="note">��ư���ǧURL������塢ȿ�ǤޤǤ�1�������٤�����ޤ���</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-b03" class="block_ttl">ư���ǧURL�����Ѥ���ɽ����ǧ��ˡ</h5>
                                        <div class="block_body">
                                            <p>�嵭�μ������ꤵ�줿ư���ǧURL�˥����������뤳�Ȥǡ������С�����ȼ��ɥᥤ����ΰ�ˤ��륳��ƥ�Ĥ�ɽ�����뤳�Ȥ���ǽ�Ǥ���</p>
                                            <p>�㡧��<em class="font-bold">example.com</em>�פȤ����ȼ��ɥᥤ����Ф�����<em class="font-bold">http://example-com.check-xserver.jp/</em>�פȤ���ư���ǧURL���������줿���</p>
                                            <table class="table break-word">
                                                <thead>
                                                <tr>
                                                    <th>���åץ��ɤ����ե�����</th>
                                                    <th>ư���ǧURL�ǤΥ���������ˡ</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com/public_html/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/</p>
                                                        <p class="note mb0">��http://example.com/�ǥ���������������Ʊ������ƥ�Ĥ�ɽ�����ޤ���</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>example.com/public_html/test/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/test/index.html</p>
                                                        <p class="note mb0">��http://example.com/test/�ǥ���������������Ʊ������ƥ�Ĥ�ɽ�����ޤ���</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>X2���饵���ӥ����礵�줿��������Ȥξ��</h5>
                                                <div class="msg_body">
                                                    <p>2019ǯ8��28����X2���饵���ӥ����礵�줿��������Ȥξ�硢��<em class="font-bold">example.com</em>�פȤ����ȼ��ɥᥤ����Ф������������ư���ǧ��URL�ϡ�<em class="font-bold">http://example-com.xtwo-check.jp/</em>�פȤʤ�ޤ���</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </section>

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h4 id="link-previous-c01" class="block_ttl">hosts�ե�����Ȥ�</h4>
                                        <div class="section_body">
                                            <p>��hosts�ץե�����Ȥϡ�PC�Υ����ƥ�ե�����ΤҤȤĤǡ�IP���ɥ쥹�Ȥ�����б�����ۥ���̾(�ɥᥤ��̾)�ΰ��������ܤ���Ƥ���ե�����Ǥ���</p>
                                            <p>���Ȥ��Υѥ�����Ρ�hosts�ץե�����ˤ����ѥ����С�(���å��������С�)��IP���ɥ쥹�Ȥ����ѤΥۥ���̾���碌�Ƶ��Ҥ��뤳�Ȥǡ��͡��ॵ���С����ѹ����ˤ��Ȥ��Υѥ����󤫤�����Web�����Ȥإ����������뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                                            <p>�ʤ�����hosts�ץե�����Ϥ��Ȥ��Υѥ������Ǥ�����ˤʤ�ޤ���<br>ʣ���Υѥ����󤫤�ư���ǧ��Ԥ����ϡ������������뤹�٤ƤΥѥ�����Ρ�hosts�ץե�������Խ�����ɬ�פ�����ޤ���</p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h4 id="link-previous-c02" class="block_ttl">hosts�ե�������Խ���ˡ</h4>
                                        <div class="block_body">
                                            <p>��hosts�ץե�����ξ��ϲ������̤�Ǥ���</p>
                                            <table class="table table_use-caption break-word">
                                                <caption>��hosts�ץե�����ξ��</caption>
                                                <tbody>
                                                    <tr>
                                                        <th>Windows 10 / 8 / 7 /</th>
                                                        <td>C:\WINDOWS\system32\drivers\etc\hosts</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mac OS X</th>
                                                        <td>/private/etc/hosts���⤷���ϡ�/etc/hosts</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Windows��������ˡ</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��hosts�ץե��������Ģ�ʤɤΥƥ����ȥ��ǥ����ǳ����ޤ���</p>
                                                        </li>
                                                        <li>
                                                            <p>�ǲ����˿������Ԥ��ɲä����֥����С�IP���ɥ쥹 + (Ⱦ�ѥ��ڡ���) + �����ѥɥᥤ��̾�ʤ⤷���ϥ��֥ɥᥤ��ˡפ����Ϥ򤷤ơ������¸���Ƥ���������</p>
                                                            <table class="table mb5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>�����ȥ��ɥ쥹</th>
                                                                        <th>host�ե�����ؤ��ɵ�����</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>test.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">����<span class="red"><strong>***.***.***.***</strong></span>�פ���ʬ�ˤϡ֤����ѥ����С���IP���ɥ쥹�פ����Ϥ��Ƥ���������<br>�����С���IP���ɥ쥹�ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ֥����С�����פˤƳ�ǧ����ǽ�Ǥ���</p>
                                                            <p>�ѹ�����¸����ݤ˴����ԤؤΥ����������Ĥ�������������ɽ��������硢��hosts�ץե�����򳫤����˥ƥ����ȥ��ǥ����Υ�������򱦥���å����������ǡ��ִ����ԤȤ��Ƽ¹�(A)...�פ��鵯ư�����ƥ����ȥ��ǥ��������Ѥ���hosts�ե�������Խ����Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>����򤷤�PC����Τߡ����å��������С��˥��åץ��ɤ���Web�����ȤΥǡ����˥����������뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                            <p class="note">���ºݤ�Web�����Ȥ�URL�ǥ�����������ɽ�����ǧ���Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>hosts�ե�������Խ��ϥ͡��ॵ���С��ѹ����ΰ��Ū��ư���ǧ��ˡ�Ǥ���<br>
                                                            ��ǧ�Ȱ�ž��Ȥν�λ���ɬ���ɵ��������ܤ�����������������ᤷ�Ƥ���������</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Mac��������ˡ</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��hosts�ץե������ǥ����ȥå׾�˰�ư�����ƥ����ȥ��ǥ��åȤʤɤΥƥ����ȥ��ǥ����ǳ����ޤ���</p>
                                                        </li>
                                                        <li>
                                                            <p>�ǲ����˿������Ԥ��ɲä����֥����С�IP���ɥ쥹 + (Ⱦ�ѥ��ڡ���) + �����ѥɥᥤ��̾�ʤ⤷���ϥ��֥ɥᥤ��ˡפ����Ϥ򤷤ơ���/etc�פ��ᤷ�Ƥ���������</p>
                                                            <table class="table mb5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>�����ȥ��ɥ쥹</th>
                                                                        <th>host�ե�����ؤ��ɵ�����</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>test.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">����<span class="red"><strong>***.***.***.***</strong></span>�פ���ʬ�ˤϡ֤����ѥ����С���IP���ɥ쥹�פ����Ϥ��Ƥ���������<br>�����С���IP���ɥ쥹�ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ֥����С�����פˤƳ�ǧ����ǽ�Ǥ���</p>
                                                            <p>�Խ�����hosts�ե�������/etc�פ˰�ư����ݤˡ������Ը��¤�������硢��ǧ�ڡפ˿ʤߡ������Ծ�������Ϥ��Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>����򤷤�PC����Τߡ����å��������С��˥��åץ��ɤ���Web�����ȤΥǡ����˥����������뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                            <p class="note">���ºݤ�Web�����Ȥ�URL�ǥ�����������ɽ�����ǧ���Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>hosts�ե�������Խ��ϥ͡��ॵ���С��ѹ����ΰ��Ū��ư���ǧ��ˡ�Ǥ���<br>
                                                            ��ǧ�Ȱ�ž��Ȥν�λ���ɬ���ɵ��������ܤ�����������������ᤷ�Ƥ���������</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->
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
                                    <li><a href="#link-a">��Ū�����Ȥ�ư����ǧ������ˡ</a>
                                        <ul>
                                            <li><a href="#link-a01">ư���ǧURL�Ȥ�</a></li>
                                            <li><a href="#link-a02">ư���ǧURL��������</a></li>
                                            <li><a href="#link-a03">ư���ǧURL�����Ѥ���ɽ����ǧ��ˡ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>
                                        <ul>
                                            <li><a href="#link-b01">hosts�ե�����Ȥ�</a></li>
                                            <li><a href="#link-b02">hosts�ե�������Խ���ˡ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_server.php">�����С��ΰ�ž�˴ؤ���֤褯��������</a></li>
                            </ul>

                            <p>¾�Ҥ���Υ����С���ž�κݡ��ʲ�����ˡ�ǥ͡��ॵ���С����ڤ��ؤ��������������С��Ǥ�ư���ǧ�򤹤뤳�Ȥ��Ǥ��ޤ���</p>

                            <section id="link-a" class="section">
                                <h3 class="section_ttl">��Ū�����Ȥ�ư����ǧ������ˡ</h3>
                                <div class="section_body">

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a01">ư���ǧURL�Ȥ�</h4>
                                        <div class="block_body">
                                            <p>
                                                �ܵ�ǽ�ϡ������С������ꤵ�줿�ȼ��ɥᥤ����Ф��ơ�ư���ɽ���ˤ��ǧ���뤿���URL���ɲä��뵡ǽ�Ǥ���<br>
                                                ������ε�ǽ�����Ѥ��뤳�Ȥˤ�ꡢ�����С���ž���Υ͡��ॵ���С��ڤ��ؤ����ˡ������ɥᥤ���ΰ�˥��åץ��ɤ����ۡ���ڡ�����ɽ�����ǧ���뤳�Ȥ��Ǥ��ޤ���
                                            </p>

                                            <aside class="msg msg-caution">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>Wordpress���ΰ����ץ�����ư���ǧ�˴ؤ��뤴���</h5>
                                                <div class="msg_body">
                                                    <p>ư���ǧURL�ε�ǽ�Ǥϡ�WordPress���ΰ����ץ����ʢ��ˤǤ�����˳�ǧ�Ǥ��ʤ���礬����ޤ���<br>
                                                        CMS�����Ѥξ��ϡ�<em class="font-bold"><a href="#link-b02">hosts�ե�������Խ�</a></em>���Ƴ�ǧ���Ƥ���������</p>
                                                    <p class="note">������URL�ˤƥ�󥯤���������ưŪ�����Ȥ䡢����ɥᥤ��ؤΥ�����쥯�Ȥ�Ԥ�CMS�ץ������</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a02">ư���ǧURL��������</h4>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1.��ư���ǧURL�פ򥯥�å�</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>������塢��ư���ǧURL�פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_1.png?date=2410" alt="ư���ǧURL�򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2.�ѹ��ܥ�����ON�פˤ���</h4>
                                                    <div class="box_body">
                                                        <p>ư����ǧ�����������ȡʥɥᥤ��ˤ��ѹ��ܥ���򥯥�å����ơ�ON�פˤ��Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_2.png?date=2410" alt="�ѹ��ܥ�����ON�פˤ���"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3.���괰λ</h4>
                                                    <div class="box_body">
                                                        <p>�ʾ��ư���ǧURL������ϴ�λ�Ǥ���</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_3.png?date=2410" alt="���괰λ"></p>
                                                        <p>���ꤵ�줿ư���ǧURL�˥����������ơ�ɽ�������ư���ǧ��ԤäƤ���������<br>
                                                            ư���ǧURL����������ϡ��ѹ��ܥ���򥯥�å����ơ�OFF�פˤ��Ƥ���������</p>
                                                        <p class="note">��ư���ǧURL������塢ȿ�ǤޤǤ�1�������٤�����ޤ���</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a03">ư���ǧURL�����Ѥ���ɽ����ǧ��ˡ</h4>
                                        <div class="block_body">
                                            <p>�嵭�μ������ꤵ�줿ư���ǧURL�˥����������뤳�Ȥǡ������С�����ȼ��ɥᥤ����ΰ�ˤ��륳��ƥ�Ĥ�ɽ�����뤳�Ȥ���ǽ�Ǥ���</p>
                                            <p>�㡧��<em class="font-bold">example.com</em>�פȤ����ȼ��ɥᥤ����Ф�����<em class="font-bold">http://example-com.check-xserver.jp/</em>�פȤ���ư���ǧURL���������줿���</p>

                                            <table class="table break-all">
                                                <thead>
                                                <tr>
                                                    <th>���åץ��ɤ����ե�����</th>
                                                    <th>ư���ǧURL�ǤΥ���������ˡ</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com/public_html/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/</p>
                                                        <p class="note mb0">��http://example.com/�ǥ���������������Ʊ������ƥ�Ĥ�ɽ�����ޤ���</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>example.com/public_html/test/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/test/index.html</p>
                                                        <p class="note mb0">��http://example.com/test/�ǥ���������������Ʊ������ƥ�Ĥ�ɽ�����ޤ���</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>X2���饵���ӥ����礵�줿��������Ȥξ��</h5>
                                                <div class="msg_body">
                                                    <p>2019ǯ8��28����X2���饵���ӥ����礵�줿��������Ȥξ�硢��<em class="font-bold">example.com</em>�פȤ����ȼ��ɥᥤ����Ф������������ư���ǧ��URL�ϡ�<em class="font-bold">http://example-com.xtwo-check.jp/</em>�פȤʤ�ޤ���</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </section>

                            <section id="link-b" class="section">
                                <h3 class="section_ttl">WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</h3>
                                <div class="section_body">

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-b01">hosts�ե�����Ȥ�</h4>
                                        <div class="block_body">
                                            <p>��hosts�ץե�����Ȥϡ�PC�Υ����ƥ�ե�����ΤҤȤĤǡ�IP���ɥ쥹�Ȥ�����б�����ۥ���̾(�ɥᥤ��̾)�ΰ��������ܤ���Ƥ���ե�����Ǥ���</p>
                                            <p>
                                                ���Ȥ��Υѥ�����Ρ�hosts�ץե�����ˤ����ѥ����С�(���å��������С�)��IP���ɥ쥹�Ȥ����ѤΥۥ���̾���碌�Ƶ��Ҥ��뤳�Ȥǡ��͡��ॵ���С����ѹ����ˤ��Ȥ��Υѥ����󤫤�����Web�����Ȥإ����������뤳�Ȥ���ǽ�ˤʤ�ޤ���
                                            </p>
                                            <p>
                                                �ʤ�����hosts�ץե�����Ϥ��Ȥ��Υѥ������Ǥ�����ˤʤ�ޤ���<br>
                                                ʣ���Υѥ����󤫤�ư���ǧ��Ԥ����ϡ������������뤹�٤ƤΥѥ�����Ρ�hosts�ץե�������Խ�����ɬ�פ�����ޤ���
                                            </p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-b02">hosts�ե�������Խ���ˡ</h4>
                                        <div class="block_body">
                                            <p>��hosts�ץե�����ξ��ϲ������̤�Ǥ���</p>
                                            <table class="table break-all">
                                                <caption>��hosts�ץե�����ξ��</caption>
                                                <tbody>
                                                <tr>
                                                    <th>Windows 10 / 8 / 7</th>
                                                    <td>C:\WINDOWS\system32\drivers\etc\hosts</td>
                                                </tr>
                                                <tr>
                                                    <th>Mac OS X</th>
                                                    <td>/private/etc/hosts���⤷���ϡ�/etc/hosts</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Windows��������ˡ</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��hosts�ץե��������Ģ�ʤɤΥƥ����ȥ��ǥ����ǳ����ޤ���</p>
                                                        </li>
                                                        <li>
                                                            <p>�ǲ����˿������Ԥ��ɲä����֥����С�IP���ɥ쥹 + (Ⱦ�ѥ��ڡ���) + �����ѥɥᥤ��̾�ʤ⤷���ϥ��֥ɥᥤ��ˡפ����Ϥ򤷤ơ������¸���Ƥ���������</p>
                                                            <table class="table break-all">
                                                                <thead>
                                                                <tr>
                                                                    <th>�����ȥ��ɥ쥹</th>
                                                                    <th>host�ե�����ؤ��ɵ�����</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>www.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>test.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">����<span class="red"><strong>***.***.***.***</strong></span>�פ���ʬ�ˤϡ֤����ѥ����С���IP���ɥ쥹�פ����Ϥ��Ƥ���������<br>�����С���IP���ɥ쥹�ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ֥����С�����פˤƳ�ǧ����ǽ�Ǥ���</p>

                                                            <aside class="msg msg_notice">
                                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ѹ�����¸����ݤ˴����ԤؤΥ����������Ĥ�������������ɽ���������</h5>
                                                                <div class="msg_body">
                                                                    <p>��hosts�ץե�����򳫤����˥ƥ����ȥ��ǥ����Υ�������򱦥���å������ִ����ԤȤ��Ƽ¹�(A)...�פ��鵯ư�����ƥ����ȥ��ǥ��������Ѥ���hosts�ե�������Խ�/��¸���Ƥ���������</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                        <li>
                                                            <p>����򤷤�PC����Τߡ����å��������С��˥��åץ��ɤ���Web�����ȤΥǡ����˥����������뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                            <p class="note">���ºݤ�Web�����Ȥ�URL�ǥ�����������ɽ�����ǧ���Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>hosts�ե�������Խ��ϥ͡��ॵ���С��ѹ����ΰ��Ū��ư���ǧ��ˡ�Ǥ���<br>
                                                                ��ǧ�Ȱ�ž��Ȥν�λ���ɬ���ɵ��������ܤ�����������������ᤷ�Ƥ���������</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Mac��������ˡ</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>��hosts�ץե������ǥ����ȥå׾�˰�ư�����ƥ����ȥ��ǥ��åȤʤɤΥƥ����ȥ��ǥ����ǳ����ޤ���</p>
                                                        </li>
                                                        <li>
                                                            <p>�ǲ����˿������Ԥ��ɲä����֥����С�IP���ɥ쥹 + (Ⱦ�ѥ��ڡ���) + �����ѥɥᥤ��̾�ʤ⤷���ϥ��֥ɥᥤ��ˡפ����Ϥ򤷤ơ���/etc�פ��ᤷ�Ƥ���������</p>
                                                            <table class="table break-all">
                                                                <thead>
                                                                <tr>
                                                                    <th>�����ȥ��ɥ쥹</th>
                                                                    <th>host�ե�����ؤ��ɵ�����</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>www.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>test.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">����<span class="red"><strong>***.***.***.***</strong></span>�פ���ʬ�ˤϡ֤����ѥ����С���IP���ɥ쥹�פ����Ϥ��Ƥ���������<br>�����С���IP���ɥ쥹�ϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>��Ρ֥����С�����פˤƳ�ǧ����ǽ�Ǥ���</p>

                                                            <aside class="msg msg_notice">
                                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�Խ�����hosts�ե�������/etc�פ˰�ư����ݤˡ������Ը��¤��������</h5>
                                                                <div class="msg_body">
                                                                    <p>��ǧ�ڡפ˿ʤߡ� �����Ծ�������Ϥ��Ƥ�������</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                        <li>
                                                            <p>����򤷤�PC����Τߡ����å��������С��˥��åץ��ɤ���Web�����ȤΥǡ����˥����������뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                                                            <p class="note">���ºݤ�Web�����Ȥ�URL�ǥ�����������ɽ�����ǧ���Ƥ���������</p>
                                                        </li>
                                                        <li>
                                                            <p>hosts�ե�������Խ��ϥ͡��ॵ���С��ѹ����ΰ��Ū��ư���ǧ��ˡ�Ǥ���<br>
                                                                ��ǧ�Ȱ�ž��Ȥν�λ���ɬ���ɵ��������ܤ�����������������ᤷ�Ƥ���������</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

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