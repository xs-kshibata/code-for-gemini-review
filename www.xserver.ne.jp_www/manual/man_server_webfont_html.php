<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Web�ե��������ˤĤ���(HTML���ҷ���) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���HTML���ľ�ܽ��Τ���ꤷ��Web�ե���Ȥ����ꤹ���HTML���ҷ����פμ���Ҳ𤷤Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">HTML���ҷ����ǤΤ�����</h3>


                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-a">Web�ե���Ȥ�������</a>
                                    <ol>
                                        <li><a href="#link-a01">1.��Web�ե��������פ򥯥�å�</a></li>
                                        <li><a href="#link-a02">2.���ꤹ��ɥᥤ�������</a></li>
                                        <li><a href="#link-a03">3.HTML���Խ�</a></li>
                                        <li><a href="#link-a04">4.CSS���Խ�</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-a011">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-b">��Web�ե���Ȥ�CSS�����ѥ�����</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Web�ե���Ȥ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <ul class="list list_arrow-right">
                                <li>��ǽ�λ��ͤʤɤˤĤ��Ƥϡ���<a href="../functions/service_webfont.php">��ǽ > Web�ե����</a>�פ򤴻��Ȥ���������</li>
                                <li>WordPress�Ǥ����Ѥξ��ϡ���<a href="man_server_webfont_wp.php">�ޥ˥奢�� > Web�ե��������ˤĤ��� > WordPress�ץ饰����ǤΤ�����</a>�פ򤴻��Ȥ���������</li>
                            </ul>

                            <div class="msg msg_notice">
                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�Τ����Ѥ˴ؤ���</h4>
                                <div class="msg_body">
                                    <ul class="ul">
                                        <li>33���Τ���7.5��PV�ޤǤ����Ѥ��������ޤ���<br>�ޤ������7.5��PV��Ķ�����硢Web�ե���Ȥ�Ŭ�Ѥϳ���ޤ������֥饦��ɸ��ǤΥե����ɽ�������١�ɽ�����Ƥ˱ƶ��Ϥ���ޤ���</li>
                                        <li>���Ѳ�ǽ�ʽ��ΰʳ�����ꤹ�뤳�ȤϤǤ��ޤ���</li>
                                        <li>�����ͤ��Խ����줿�ץ�������˴ؤ��뵻��Ū���ƤΤ��䤤��碌�ˤĤ��Ƥϥ��ݡ����оݳ��Ǥ���<br>�ޤ��������Ȥξ����ˤ�äƤ����Ѥ��������ʤ����⤢��ޤ���</li>
                                    </ul>
                                </div>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Web�ե���Ȥ�������</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a01">1.��Web�ե��������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="�����оݥɥᥤ����ǧ���ơ���Web�ե��������פ򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2.���ꤹ��ɥᥤ�������</h5>
                                            <div class="box_body">
                                                <p>��Web�ե����������ɲáפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡����ꤹ��ץܥ��󥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Web�ե���Ȥ����ꤹ��ɥᥤ������򤷡�������ץܥ���򥯥�å�"></p>
                                                <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                    <div class="msg_body">
                                                        <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                        <p class="mb0">�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a03">3.HTML���Խ�</h5>
                                            <div class="box_body">
                                                <p>�ʲ��Υ����ɤ�Web�ե���Ȥ�ɽ���������ڡ�����HEAD����(&lt;head&gt;��&lt;/head&gt;)��˵��Ҥ��Ƥ���������<br>
                                                �ʤ��������Υ����ɤ�&lt;/head&gt;������ľ���˵��Ҥ��뤳�Ȥ��侩����Ƥ��ޤ���</p>

                                                <i class="ico ico_square-fill"></i>HTML
                                                <pre class="code">
&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a04">4.CSS���Խ�</h5>
                                            <div class="box_body">
                                                <p>Web�ե���Ȥ�Ŭ�Ѥ����������ˤ���˾�ν��Ρ�font-family�ˤ����ꤷ�Ƥ���������<br>
                                                �ƥե���Ȥ�font-family�ˤĤ��Ƥϡ�<a href="#i2">��Web�ե���Ȥ�CSS�����ѥ�����</a>�פ򤴻��Ȥ���������</p>

                                                <i class="ico ico_square-fill"></i>HTML
                                                <pre class="code">
&lt;h1&gt;Web�ե���ȳ��ѥ�����&lt;/h1&gt;</pre>

                                                <i class="ico ico_square-fill"></i>CSS
                                                <pre class="code">
h1{ font-family: "���� R"; }</pre>
                                                <p>�Խ�����CSS�ե�����ȼ��3���Խ�����HTML�ե�����򥵡��С��˥��åץ��ɤ����֥饦����ǡֹ����פ򥯥�å������Web�ե���Ȥ�ȿ�Ǥ���ޤ���</p>

                                                <p>�ޤ����嵭�ǻ��ꤷ��Web�ե���Ȥ�Ŭ�Ѥ�����롢�ޤ��ϲ��餫����ͳ��Ŭ�ѤǤ��ʤ��ݡ�³�������ؤȤ���ɽ�������ɸ��ե���Ȥ���ꤹ�뤳�Ȥ���ǽ�Ǥ���ɬ�פ˱����Ʋ�������Τ褦��,(Ⱦ�ѥ����)���ڤ�����إե���Ȥ���ꤷ�Ƥ���������</p>

                                                <i class="ico ico_square-fill"></i>CSS
                                                <pre class="code mb20">
h1{ font-family: "���� R"<span class="base-color font-bold"> , "�ᥤ�ꥪ" , Meiryo , "�ҥ饮�γѥ�Pro W3" , "Hiragino Kaku Gothic Pro" , "�ͣ� �Х����å�" , sans-serif;</span> }</pre>
                                                <div class="msg msg_notice">
                                                    <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>Web�ե���Ȥ������ˤ�����ˡ�ˤĤ���</h4>
                                                    <div class="msg_body">
                                                        <p>Web�ե���Ȥϥե���������������ɽ������ط��塢B������font-weight�ʤɤ����������̵���Ȥʤ�ޤ���<br>
                                                        ������Ŭ�Ѥ��������������ˤ������ϰϤ��̤Υ����ǰϤߡ����ߤΥե���Ȥ�������Web�ե���Ȥ�Ŭ�Ѥ��Ƥ���������</p>

                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">
&lt;p&gt;Web�ե���Ȥ�<span class="base-color font-bold">&lt;b&gt;��������&lt;/b&gt;</span>&lt;/p&gt;</pre>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code">
p{ font-family: "���� R"; }
<span class="base-color font-bold">b{ font-family: "���� B"; }</span></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <section id="i1" class="block">
                                        <h5 class="block_ttl" id="link-a011">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</h5>
                                        <div class="block_body">
                                            <p>Web�ե���Ȥ�Ŭ�Ѥ�������ˤϡ��ʲ��κ�Ȥ��˹ԤäƤ���������</p>
                                            <ol class="ol ol_margin">
                                                <li>HTML�ե������CSS�ե�������Web�ե���Ȥ�Ŭ�ѻ����ɲä������Ҥ������ޤ���<br>
                                                ���κݡ�HTML�ե������겼����JavaScript�ե�����ε��Ҥ�ɬ��������Ƥ���������<br>
                                                <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre></li>

                                                <li>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�ע͡�Web�ե��������פ��ɥᥤ�����Ͽ�������Ƥ���������</li>
                                            </ol>
                                            <p>�ʾ�κ�Ȥ�Ԥä��塢Web�ե���Ȥ�Ŭ�Ѥ�����Ƥ��뤫����ǧ����������</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-b">
                                <h4 id="i2" class="section_ttl">��Web�ե���Ȥ�CSS�����ѥ�����</h4>
                                <div class="section_body">
                                    <p>�����򻲹ͤ�Web�ե���Ȥ������ԤäƤ���������<br>�ޤ������ܸ�ǻ��ꤹ�����""(���֥륯������)�ǰϤ�ɬ�פ�����ޤ���</p>
                                    <p class="mb5">�����ϡ֥�奦�ߥ� R-KL�פ�Ŭ�Ѥ���������Ǥ���</p>
                                    <pre class="code">
/* ���ܸ�ǻ��ꤹ���� */
p{ font-family: "��奦�ߥ� R-KL"; }

/* �Ѹ�ǻ��ꤹ���� */
p{ font-family: Ryumin Regular KL; }</pre>

                                   <p>���줾���font-family(Web�ե���Ȥ���ꤹ�륹������)�ϲ������̤�Ǥ���<br>���Τθ��ܤ��ǧ���������ϡ�<a href="../functions/service_webfont_shotai.php" target="_blank">���θ��ܰ���</a>�פ򤴻��Ȥ���������</p>
                                    <p class="note">������ɽ�Ρ����ܸ�ǵ��ҡפޤ��ϡֱѸ�ǵ��ҡפɤ��餫������css�ե�����˵��Ҥ��Ƥ���������</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>���ܸ�ǵ���</th>
                                                <th>�Ѹ�ǵ���</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>��奦�ߥ� R-KL</td>
                                                <td>Ryumin Regular KL</td>
                                            </tr>
                                            <tr>
                                                <td>��奦�ߥ� B-KL</td>
                                                <td>Ryumin Bold KL</td>
                                            </tr>
                                            <tr>
                                                <td>�եߥ� M</td>
                                                <td>Reimin Medium</td>
                                            </tr>
                                            <tr>
                                                <td>A1��ī</td>
                                                <td>A1 Mincho</td>
                                            </tr>
                                            <tr>
                                                <td>���ޤʤ�</td>
                                                <td>Shimanami</td>
                                            </tr>
                                            <tr>
                                                <td>���� R</td>
                                                <td>Shin Go Regular</td>
                                            </tr>
                                            <tr>
                                                <td>���� B</td>
                                                <td>Shin Go Bold</td>
                                            </tr>
                                            <tr>
                                                <td>�����å�MB101 B</td>
                                                <td>Gothic MB101</td>
                                            </tr>
                                            <tr>
                                                <td>���Ф���MB31</td>
                                                <td>Midashi Go MB31</td>
                                            </tr>
                                            <tr>
                                                <td>�楴���å�BBB</td>
                                                <td>Gothic Medium BBB</td>
                                            </tr>
                                            <tr>
                                                <td>����� 201</td>
                                                <td>Jun 201</td>
                                            </tr>
                                            <tr>
                                                <td>����� 501</td>
                                                <td>Jun 501</td>
                                            </tr>
                                            <tr>
                                                <td>���ݥ� R</td>
                                                <td>Shin Maru Go Regular</td>
                                            </tr>
                                            <tr>
                                                <td>���Ѥˤ��ߴݥ����å� B</td>
                                                <td>Shuei NijimiMGo B</td>
                                            </tr>
                                            <tr>
                                                <td>�ݥե����� M</td>
                                                <td>Maru Folk Medium</td>
                                            </tr>
                                            <tr>
                                                <td>�ե����� M</td>
                                                <td>Folk Medium</td>
                                            </tr>
                                            <tr>
                                                <td>���ͥޥ쥿��</td>
                                                <td>Cinema Letter</td>
                                            </tr>
                                            <tr>
                                                <td>�Ϥ�ҳر�</td>
                                                <td>Haruhi Gakuen</td>
                                            </tr>
                                            <tr>
                                                <td>G2���󥻥��-B</td>
                                                <td>GSanSerif-B</td>
                                            </tr>
                                            <tr>
                                                <td>���</td>
                                                <td>Nachin</td>
                                            </tr>
                                            <tr>
                                                <td>�� B</td>
                                                <td>Take Bold</td>
                                            </tr>
                                            <tr>
                                                <td>���� ����ɥ�</td>
                                                <td>Shin Go Shadow</td>
                                            </tr>
                                            <tr>
                                                <td>�֤�ä���</td>
                                                <td>Brush-U</td>
                                            </tr>
                                            <tr>
                                                <td>�ȡ�����</td>
                                                <td>Talking</td>
                                            </tr>
                                            <tr>
                                                <td>�����ष</td>
                                                <td>Suzumushi</td>
                                            </tr>
                                            <tr>
                                                <td>���ʽ�ICA M</td>
                                                <td>Kyoukasho ICA Medium</td>
                                            </tr>
                                            <tr>
                                                <td>Φ��</td>
                                                <td>Likurei</td>
                                            </tr>
                                            <tr>
                                                <td>TB�Ű���</td>
                                                <td>Kointai-M</td>
                                            </tr>
                                            <tr>
                                                <td>�����餮����</td>
                                                <td>SakuraKeisetsu</td>
                                            </tr>
                                            <tr>
                                                <td>TBUD�����å� R</td>
                                                <td>TBUDGothic R</td>
                                            </tr>
                                            <tr>
                                                <td>TBUD�����å� E</td>
                                                <td>TBUDGothic E</td>
                                            </tr>
                                            <tr>
                                                <td>UD���� ����ǥ�90 L</td>
                                                <td>UD Shin Go Conde90 L</td>
                                            </tr>
                                            <tr>
                                                <td>UD���� ����ǥ�90 M</td>
                                                <td>UD Shin Go Conde90 M</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                    <li><a href="#link-aa">Web�ե���Ȥ�������</a>
                                        <ol>
                                            <li><a href="#link-a1">1.��Web�ե��������פ򥯥�å�</a></li>
                                            <li><a href="#link-a2">2.���ꤹ��ɥᥤ�������</a></li>
                                            <li><a href="#link-a3">3.HTML���Խ�</a></li>
                                            <li><a href="#link-a4">4.CSS���Խ�</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-a5">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-bb">��Web�ե���Ȥ�CSS�����ѥ�����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Web�ե���Ȥ˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <ul class="list list_arrow-right">
                                        <li>��ǽ�λ��ͤʤɤˤĤ��Ƥϡ���<a href="../functions/service_webfont.php" target="_blank">Web�ե����</a><i class="ico ico--newWindow"></i>�פ򤴻��Ȥ���������</li>
                                        <li>WordPress�Ǥ����Ѥξ��ϡ���<a href="man_server_webfont_wp.php">WordPress�ץ饰����ǤΤ�����</a>�פ򤴻��Ȥ���������</li>
                                    </ul>

                                    <div class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ܵ�ǽ�Τ����Ѥ˴ؤ���</h4>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>33���Τ���7.5��PV�ޤǤ����Ѥ��������ޤ���<br>�ޤ������7.5��PV��Ķ�����硢Web�ե���Ȥ�Ŭ�Ѥϳ���ޤ������֥饦��ɸ��ǤΥե����ɽ�������١�ɽ�����Ƥ˱ƶ��Ϥ���ޤ���</li>
                                                <li>���Ѳ�ǽ�ʽ��ΰʳ�����ꤹ�뤳�ȤϤǤ��ޤ���</li>
                                                <li>�����ͤ��Խ����줿�ץ�������˴ؤ��뵻��Ū���ƤΤ��䤤��碌�ˤĤ��Ƥϥ��ݡ����оݳ��Ǥ���<br>�ޤ��������Ȥξ����ˤ�äƤ����Ѥ��������ʤ����⤢��ޤ���</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-aa">Web�ե���Ȥ�������</h4>
                                        <div class="section_body">

                                            <aside class="msg">
                                                <div class="msg_body">
                                                    <p class="font-bold">Web�ե���Ȥ�Ŭ�Ѥ��������ʤ����ϲ����򤴻��Ȥ���������</p>
                                                    <ul class="list list_arrow-down mb0">
                                                        <li><a href="#link-a5">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <div class="serial-box mb30">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a1">1.��Web�ե��������פ򥯥�å�</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡���Web�ե��������פ򥯥�å����ޤ���</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png" alt="�����оݥɥᥤ����ǧ���ơ���Web�ե��������פ򥯥�å�"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a2">2.���ꤹ��ɥᥤ�������</h5>
                                                    <div class="box_body">
                                                        <p>��Web�ե����������ɲáפ򥯥�å������֥����ȡפΥץ�������˥塼������ꤹ��ɥᥤ������򤷡��ɲä���ץܥ���򥯥�å����Ƥ���������</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png" alt="���ɲä���ץܥ���򥯥�å�"></p>
                                                        <p>��Web�ե��������ײ��̤���ۤ����ꤷ���ɥᥤ��ɽ������Ƥ�������괰λ�Ǥ���</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>�ɥᥤ�������ˤĤ���</h6>
                                                            <div class="msg_body">
                                                                <p>Web�ե���Ȥ�����Ǥ���ɥᥤ��Ͻ���ɥᥤ���ȼ��ɥᥤ����椫��3�ĤޤǤǤ���</p>
                                                                <p class="mb0">�ޤ������̾�Ρֺ������ץܥ���򥯥�å�����ȡ�Web�ե�������꤬������졢�缡�֥饦��ɸ��Υե����ɽ�������ޤ���</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a3">3.HTML���Խ�</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            �ʲ��Υ����ɤ�Web�ե���Ȥ�ɽ���������ڡ�����HEAD����(&lt;head&gt;��&lt;/head&gt;)��˵��Ҥ��Ƥ���������<br>
                                                            �ʤ��������Υ����ɤ�&lt;/head&gt;������ľ���˵��Ҥ��뤳�Ȥ��侩����Ƥ��ޤ���
                                                        </p>
                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a4">4.CSS���Խ�</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            Web�ե���Ȥ�Ŭ�Ѥ����������ˤ���˾�ν��Ρ�font-family�ˤ����ꤷ�Ƥ���������<br>
                                                            �ƥե���Ȥ�font-family�ˤĤ��Ƥϡ�<a href="#link-bb">��Web�ե���Ȥ�CSS�����ѥ�����</a>�פ򤴻��Ȥ���������
                                                        </p>

                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">&lt;h1&gt;Web�ե���ȳ��ѥ�����&lt;/h1&gt;</pre>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code">h1{ font-family: "���� R"; }</pre>
                                                        <p>�Խ�����CSS�ե�����ȼ��3���Խ�����HTML�ե�����򥵡��С��˥��åץ��ɤ����֥饦����ǡֹ����פ򥯥�å������Web�ե���Ȥ�ȿ�Ǥ���ޤ���</p>

                                                        <p>
                                                            �ޤ����嵭�ǻ��ꤷ��Web�ե���Ȥ�Ŭ�Ѥ�����롢�ޤ��ϲ��餫����ͳ��Ŭ�ѤǤ��ʤ��ݡ�³�������ؤȤ���ɽ�������ɸ��ե���Ȥ���ꤹ�뤳�Ȥ���ǽ�Ǥ���ɬ�פ˱����Ʋ�������Τ褦��,(Ⱦ�ѥ����)���ڤ�����إե���Ȥ���ꤷ�Ƥ���������
                                                        </p>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code mb20">h1{ font-family: "���� R"<span class="colorBase font-bold"> , "�ᥤ�ꥪ" , Meiryo , "�ҥ饮�γѥ�Pro W3" , "Hiragino Kaku Gothic Pro" , "�ͣ� �Х����å�" , sans-serif;</span> }</pre>

                                                        <div class="msg msg_notice">
                                                            <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>Web�ե���Ȥ������ˤ�����ˡ�ˤĤ���</h4>
                                                            <div class="msg_body">
                                                                <p>Web�ե���Ȥϥե���������������ɽ������ط��塢B������font-weight�ʤɤ����������̵���Ȥʤ�ޤ���<br>
                                                                    ������Ŭ�Ѥ��������������ˤ������ϰϤ��̤Υ����ǰϤߡ����ߤΥե���Ȥ�������Web�ե���Ȥ�Ŭ�Ѥ��Ƥ���������</p>

                                                                <i class="ico ico_square-fill"></i>HTML
                                                                <pre class="code">&lt;p&gt;Web�ե���Ȥ�<span class="base-color font-bold">&lt;b&gt;��������&lt;/b&gt;</span>&lt;/p&gt;</pre>

                                                                <i class="ico ico_square-fill"></i>CSS
                                                                <pre class="code">p{ font-family: "���� R"; }
<span class="base-color font-bold">b{ font-family: "���� B"; }</span></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                            <section id="link-a5" class="block">
                                                <h4 class="block_ttl">Web�ե���Ȥ�Ŭ�Ѥ���������ˡ�ˤĤ���</h4>
                                                <div class="block_body">
                                                    <p>Web�ե���Ȥ�Ŭ�Ѥ�������ˤϡ��ʲ��κ�Ȥ��˹ԤäƤ���������</p>
                                                    <ol class="ol ol_margin">
                                                        <li>HTML�ե������CSS�ե�������Web�ե���Ȥ�Ŭ�ѻ����ɲä������Ҥ������ޤ���<br>
                                                            ���κݡ�HTML�ե������겼����JavaScript�ե�����ε��Ҥ�ɬ��������Ƥ���������<br>
                                                            <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre></li>

                                                        <li>��<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�ע͡�Web�ե��������פ��ɥᥤ�����Ͽ�������Ƥ���������</li>
                                                    </ol>
                                                    <p>�ʾ�κ�Ȥ�Ԥä��塢Web�ե���Ȥ�Ŭ�Ѥ�����Ƥ��뤫����ǧ����������</p>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-bb" class="section">
                                        <h4 class="section_ttl">��Web�ե���Ȥ�CSS�����ѥ�����</h4>
                                        <div class="section_body">

                                            <p>�����򻲹ͤ�Web�ե���Ȥ������ԤäƤ���������<br>�ޤ������ܸ�ǻ��ꤹ�����""(���֥륯������)�ǰϤ�ɬ�פ�����ޤ���</p>
                                            <p class="mb5">�����ϡ֥�奦�ߥ� R-KL�פ�Ŭ�Ѥ���������Ǥ���</p>
                                            <pre class="code">
/* ���ܸ�ǻ��ꤹ���� */
p{ font-family: "��奦�ߥ� R-KL"; }

/* �Ѹ�ǻ��ꤹ���� */
p{ font-family: Ryumin Regular KL; }</pre>

                                            <p>���줾���font-family(Web�ե���Ȥ���ꤹ�륹������)�ϲ������̤�Ǥ���<br>���Τθ��ܤ��ǧ���������ϡ�<a href="../functions/service_webfont_shotai.php" target="_blank">���θ��ܰ���</a>�פ򤴻��Ȳ�������</p>
                                            <p class="note">������ɽ�Ρ����ܸ�ǵ��ҡפޤ��ϡֱѸ�ǵ��ҡפɤ��餫������css�ե�����˵��Ҥ��Ʋ�������</p>
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>���ܸ�ǵ���</th>
                                                    <th>�Ѹ�ǵ���</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>��奦�ߥ� R-KL</td>
                                                    <td>Ryumin Regular KL</td>
                                                </tr>
                                                <tr>
                                                    <td>��奦�ߥ� B-KL</td>
                                                    <td>Ryumin Bold KL</td>
                                                </tr>
                                                <tr>
                                                    <td>�եߥ� M</td>
                                                    <td>Reimin Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>A1��ī</td>
                                                    <td>A1 Mincho</td>
                                                </tr>
                                                <tr>
                                                    <td>���ޤʤ�</td>
                                                    <td>Shimanami</td>
                                                </tr>
                                                <tr>
                                                    <td>���� R</td>
                                                    <td>Shin Go Regular</td>
                                                </tr>
                                                <tr>
                                                    <td>���� B</td>
                                                    <td>Shin Go Bold</td>
                                                </tr>
                                                <tr>
                                                    <td>�����å�MB101 B</td>
                                                    <td>Gothic MB101</td>
                                                </tr>
                                                <tr>
                                                    <td>���Ф���MB31</td>
                                                    <td>Midashi Go MB31</td>
                                                </tr>
                                                <tr>
                                                    <td>�楴���å�BBB</td>
                                                    <td>Gothic Medium BBB</td>
                                                </tr>
                                                <tr>
                                                    <td>����� 201</td>
                                                    <td>Jun 201</td>
                                                </tr>
                                                <tr>
                                                    <td>����� 501</td>
                                                    <td>Jun 501</td>
                                                </tr>
                                                <tr>
                                                    <td>���ݥ� R</td>
                                                    <td>Shin Maru Go Regular</td>
                                                </tr>
                                                <tr>
                                                    <td>���Ѥˤ��ߴݥ����å� B</td>
                                                    <td>Shuei NijimiMGo B</td>
                                                </tr>
                                                <tr>
                                                    <td>�ݥե����� M</td>
                                                    <td>Maru Folk Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>�ե����� M</td>
                                                    <td>Folk Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>���ͥޥ쥿��</td>
                                                    <td>Cinema Letter</td>
                                                </tr>
                                                <tr>
                                                    <td>�Ϥ�ҳر�</td>
                                                    <td>Haruhi Gakuen</td>
                                                </tr>
                                                <tr>
                                                    <td>G2���󥻥��-B</td>
                                                    <td>GSanSerif-B</td>
                                                </tr>
                                                <tr>
                                                    <td>���</td>
                                                    <td>Nachin</td>
                                                </tr>
                                                <tr>
                                                    <td>�� B</td>
                                                    <td>Take Bold</td>
                                                </tr>
                                                <tr>
                                                    <td>���� ����ɥ�</td>
                                                    <td>Shin Go Shadow</td>
                                                </tr>
                                                <tr>
                                                    <td>�֤�ä���</td>
                                                    <td>Brush-U</td>
                                                </tr>
                                                <tr>
                                                    <td>�ȡ�����</td>
                                                    <td>Talking</td>
                                                </tr>
                                                <tr>
                                                    <td>�����ष</td>
                                                    <td>Suzumushi</td>
                                                </tr>
                                                <tr>
                                                    <td>���ʽ�ICA M</td>
                                                    <td>Kyoukasho ICA Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>Φ��</td>
                                                    <td>Likurei</td>
                                                </tr>
                                                <tr>
                                                    <td>TB�Ű���</td>
                                                    <td>Kointai-M</td>
                                                </tr>
                                                <tr>
                                                    <td>�����餮����</td>
                                                    <td>SakuraKeisetsu</td>
                                                </tr>
                                                <tr>
                                                    <td>TBUD�����å� R</td>
                                                    <td>TBUDGothic R</td>
                                                </tr>
                                                <tr>
                                                    <td>TBUD�����å� E</td>
                                                    <td>TBUDGothic E</td>
                                                </tr>
                                                <tr>
                                                    <td>UD���� ����ǥ�90 L</td>
                                                    <td>UD Shin Go Conde90 L</td>
                                                </tr>
                                                <tr>
                                                    <td>UD���� ����ǥ�90 M</td>
                                                    <td>UD Shin Go Conde90 M</td>
                                                </tr>
                                                </tbody>
                                            </table>

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