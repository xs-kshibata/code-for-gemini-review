<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">
<title>�����С���ž��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���Ǥ˥��å��������С��ʳ��ǲ�Ư��Υ����֥����Ȥ򥨥å��������С��ذ�ž���뤿��μ��Ǥ������ޥ˥奢��˱�äƺ�Ȥ�ԤäƤ����������Ȥǡ��֥ۡ���ڡ�����ɽ������ʤ����֤�ȯ���פ��ɤ��Ĥĥ����С����ž���뤳�Ȥ���ǽ�Ǥ���">
</head>
<body id="pid-order">
<?php include("../top.php"); ?>
<div id="wrapper">
    <?php include("../header2.php"); ?>
    <div id="toggle-target">
        <div class="contents">
            <section class="main holder-sml" role="main">
                <header class="main-header">
                    <h2 class="ttl"><span class="label label_ttl-order"><i class="ico ico_pencil"></i>���������ߤ�ή��</span></h2>
                    <?php include("subnav.php"); ?>
                </header>
                <!-- /.main-header -->

                <?php include("../topicpath.php"); ?>

                <aside class="msg msg_notice">
                    <div class="daiko-warp">
                        <p class="msg_ttl daiko-txt">���ࡼ���˰�ž���������Ϥ����顪</p>
                        <p class="daiko-bnr"><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="�����С���ž���"></a></p>
                    </div>
                </aside>

                <div class="section mb15">
                    <div class="section_body">
                        <ul class="order-nav">
                            <li class="order-nav_item order-nav_item-new">
                                <a class="order-nav_item_label" href="index.php">
                                    <span>�����С���������������</span>
                                </a>
                            </li>
                            <li class="order-nav_item order-nav_item-transfer is-current">
                                <span class="order-nav_item_label">
                                    <span>�����С���ž</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.section -->

                <h2 class="ttl"><span class="label">�����С���ž</span></h2>
                <p>
                    �ܥڡ����Ǥϡ�Web�����Ȥ�᡼����Ѥ��Ƥ��륵���С����ѹ�(�����ۤ�)����֥����С���ž�פμ��ˤĤ��Ƥ����⤷�ޤ���<br>
                    �����С���ž��ή���ư��䥹�ƥåפ��Ȥβ���ǳ�ǧ���Ƥ����ޤ��礦��
                </p>

                <!-- video -->
                <section id="video" class="video__wrap">
                    <div class="video__ttl balloon">
                        <p>�֥����С���ž�פμ���<br class="visible-s">ư��Ǥ����⡪</p>
                    </div>
                    <div class="video__contents">
                        <iframe src="https://www.youtube.com/embed/EQsHAL85cIY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="video__read">��ư��ޥ˥奢���2023ǯ12�������<br class="visible-s">������̤Ǥ����⤷�Ƥ��ޤ���</p>
                </section>
                <!-- /#video -->
                <div class="docListContainer">
                    <div class="category">
                        <div class="catTitle">������ǧ</div>
                        <ul class="docList">
                            <li><a href="#step1"><i class="ico step1"></i><span class="step">STEP 1</span><span class="caption">�����С���ž���γ�ǧ</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">����������</div>
                        <ul class="docList">
                            <li><a href="#step2"><i class="ico step2"></i><span class="step">STEP 2</span><span class="caption">�����С��Τ���������</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">�����ǡ�����<br>�ܹ�</div>
                        <ul class="docList">
                            <li><a href="#step3"><i class="ico step3"></i><span class="step">STEP 3</span><span class="caption">�ɥᥤ�������</span></a></li>
                            <li><a href="#step4"><i class="ico step4"></i><span class="step">STEP 4</span><span class="caption">Web�����Ȥΰܹ�</span></a></li>
                            <li><a href="#step5"><i class="ico step5"></i><span class="step">STEP 5</span><span class="caption">�᡼�륢������Ȥ�����</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">�����С��ڤ��ؤ�</div>
                        <ul class="docList">
                            <li><a href="#step6"><i class="ico step6"></i><span class="step">STEP 6</span><span class="caption">�͡��ॵ���С�(DNS)���ѹ�</span></a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="catTitle">��ž��λ</div>
                        <ul class="docList">
                            <li><a href="#step7"><i class="ico step7"></i><span class="step">STEP 7</span><span class="caption">�����С���ž��λ</span></a></li>
                        </ul>
                    </div>
                </div>
                <h2 class="ttl"><span class="label">�����С���ž��ή��</span></h2>
                <section class="orderFlow">
                    <ul><!-- 1 �����С���ž���γ�ǧ -->
                        <li id="step1"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�����С���ž���γ�ǧ</h3>
                            <p class="mb40">�����С���ž�򥹥ࡼ���˿ʤ�뤿��ˡ���ž�������С��α��Ѿ����ˤĤ��Ƴ�ǧ�򤷤Ƥ����ޤ��礦��</p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-1.����ž�������С������Ѵ��¤��ǧ����</h4>
                                            <p>
                                                �����С���ž�ˤ�������֤��ܰ¤�<b>�ְ�ž���λ�����Ȥ�Ԥ����֡סܡ֥͡��ॵ���С�(DNS)���ѹ��ˤ��������(��1������)��</b>�Ǥ���
                                                ��ž�������С��Τ�������֤ˤɤ줯�餤��;͵�����뤫���ǧ���Ƥ����ޤ��礦��
                                            </p>
                                            <p>
                                                �����С���ž����Web�����Ȥ�ɽ����᡼�������������ߤ������˺�Ȥ�Ԥ���硢��ž����λ����ޤǤ� <b>��ž�������С��Τ�������³�����ޤޡ�</b>���֤��ʣ�����ƥ��å��������С��򤴷��󤤤�����ɬ�פ�����ޤ���
                                                ���Τ��ᡢ��ž�������С��Τ������1����ʾ��;͵��������֤Ǻ�Ȥ򤷤Ƥ����������Ȥ���������Ǥ���
                                            </p>
                                            <p class="mt30 mb30 tac"><img class="srcset flex" src="../img/order/img_transfer_server_01_l.png?date=240808" alt="��ž���֤Ȳ���Υ����ߥ�"></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-2.�����å��������С��ذ�ž�������Ƥ��ǧ����</h4>
                                            <p>
                                                ��ž�������С��ǡ�Web�����ȡ��᡼��פ�ξ�������Ѥ���Ƥ�����䡢��Web�����ȡפޤ��ϡ֥᡼��פΤ����Ѥ���Ƥ�����ʤɡ����å��������С��ذ�ž�򤹤����Ƥ��ǧ���Ƥ����ޤ��礦��
                                            </p>
                                            <p class="mt30 mb30 tac"><img class="srcset flex" src="../img/order/img_transfer_server_06_l.png?date=250422" alt="��ž������ܤ��ǧ����"></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-2 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">1-3.���ɥᥤ��δ�����Ҥǥ͡��ॵ���С�(DNS)���ѹ���ˡ���ǧ����</h4>
                                            <p class="mb30">
                                                �����С���ž�ϥɥᥤ��Υ͡��ॵ���С����ѹ����뤳�ȤǴ�λ���ޤ���<br>
                                                �͡��ॵ���С��ϥɥᥤ�������Ҥ��ѹ���ɬ�פǤ���<br>
                                                ���ߤΥɥᥤ�������Ҥˤơ��͡��ॵ���С����ѹ���ˡ���ǧ���Ƥ����ޤ��礦��
                                            </p>

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box">
                                                <h5 class="js--accordion">�ɥᥤ��ܴɤˤĤ���<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        �ɥᥤ��ܴɤϡ��ɥᥤ��ι�������λ�ʧ���ʤɡ��ɥᥤ��η����������Ƥ��������Ҥ��ѹ������³���Ǥ���<br>
                                                        �����С���ž�ȥɥᥤ��ܴɤϰ��˹Ԥ��뤳�Ȥ�¿���Ǥ������������ӥ��Ǥϥ����С��Τ߰�ž�򤷤Ƥ����Ѥ����������Ȥ��ǽ�ʤ��ᡢ�ɥᥤ��ܴɤ�ɬ�ܤǤϤ���ޤ���
                                                    </p>
                                                    <aside class="msg msg_notice clear mb30">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ʲ��˳���������ϡ����ҤؤΥɥᥤ��ܴɤ򤴸�Ƥ��������</h6>
                                                        <div class="msg_body case-detail">
                                                            �����ߤΥɥᥤ�������Ҥǥ͡��ॵ���С����ѹ����Ǥ��ʤ�<br>
                                                            �������С��ȥɥᥤ��η�������ҥ����ӥ��ǤޤȤ�ƴ���������
                                                        </div>
                                                    </aside>
                                                    <p>�ɥᥤ��ܴɤˤĤ��Ƥξܺ٤ϰʲ��Υڡ����򤴳�ǧ����������</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>��<a href="https://www.xdomain.ne.jp/column/domain-transfer/" target="_blank">�ɥᥤ��ΰܴɤȤϡ�����Ū�ʼ�硦������������γ�ǧ�����ܤ�������</a>��<i class="ico ico_new-window base-color"></i></p>

                                                    <hr>

                                                    <h6 class="transfer-ttl pt10"><i class="ico ico_circle"></i>�ɥᥤ��ܴɤ�Ԥ����</h6>
                                                    <p class="mt20 mb20">
                                                        �ɥᥤ��ܴɤϥ����С���ž�����Ǥ��Ǥ⤪��³������ǽ�Ǥ���<br>
                                                        �ɥᥤ��ܴɤΤ���³���ˤ�7��10�����٤λ��֤������ꡢ�ܴɿ�����ϥ͡��ॵ���С����ѹ����Ǥ��ޤ���<br>
                                                        ���Τ��ᡢ�����С���ž�ȥɥᥤ��ܴɤ�ξ����Ƥ����Ƥ����硢�ɥᥤ��Τ����Ѵ��¤�;͵������Х����С���ž����ԤäƤ����������Ȥ���������Ǥ���
                                                    </p>


                                                    <aside class="msg msg_notice clear mb10">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�ʲ��˳���������ϡ��ɥᥤ��ܴɤ����³����ԤäƤ�������</h6>
                                                        <div class="msg_body case-detail">
                                                            �����ߤΥɥᥤ�������Ҥǥ͡��ॵ���С����ѹ����Ǥ��ʤ�<br>
                                                            ���ɥᥤ������Ѵ��¤�;͵���ʤ�<br>
                                                        </div>
                                                    </aside>

                                                    <p class="note font-m mb30">���ɥᥤ��ܴɤ�Ԥ���硢����Ū�ˤϥɥᥤ������Ѵ��¤�1����ʾ��;͵��������֤Ǥ���³����ɬ�פǤ���<br>
                                                            ���Ѵ��¤ޤ�1����̤���ξ��ϡ����ߤΥɥᥤ�������Ҥˤƹ����򤷤������ǡ��ܴɼ�³����ԤäƤ���������
                                                    </p>

                                                    <p>�ɥᥤ��ܴɤΤ��������߼��ϰʲ��Υޥ˥奢��򤴳�ǧ����������</p>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer.php" target="_blank">�ɥᥤ��ܴɿ���(.jp/��ƻ�ܸ�.jp/co.jp/or.jp/ne.jp/gr.jp/ac.jp/ed.jp �ɥᥤ��ξ��)</a>��<i class="ico ico_new-window base-color"></i><br>
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="https://www.xdomain.ne.jp/manual/man_order_domain_transfer_other.php" target="_blank">�ɥᥤ��ܴɿ���(.com/.net/.org/.biz/.info/.me/.asia/ �ʤɤΡ�.jp�ʳ��Υɥᥤ��ξ��)</a>��<i class="ico ico_new-window base-color"></i>
                                                    </p>
                                                    <p>�����������Ƥ���С����ȼ��ɥᥤ��ʵ�̵����ŵ�פ���Ѥ��ƥɥᥤ��ܴɤ�Ԥ����Ȥ���ǽ�Ǥ���<br>
                                                       �ܺ٤ϰʲ��Υޥ˥奢��򤴳�ǧ����������
                                                    </p>
                                                        <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_present_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ</a>��</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /1-3 -->

                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /1.�����С���ž���γ�ǧ -->


                        <!-- 2 �����С����������� -->
                        <li id="step2"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�����С�����������</h3>
                            <div class="order_body">
                                <div>
                                    <p>
                                        ���������ߥե������ꥵ���С��򤪿������ߤ���������<br>
                                        ���������߸塢<b>10���֤Τ������</b>�����Ϥ��졢������֤Τ����Ѵ������ޤǤˤ���������򤪻�ʧ���򤤤������ȡ� �ܷ���Ȥʤ�ޤ���
                                    </p>
                                    <p class="note font-m">�������С���ž��Ԥ���硢��WordPress�����å��������ȡפ����Ѥ����ˤ��������ߤ���������</p>

                                    <h4 class="transfer-ttl mb20"><i class="ico ico_circle"></i>���������Τ����ѤˤĤ���</h4>
                                    <table class="table responsiveTable">
                                        <tbody>
                                        <tr>
                                            <th class="transfer-th">Web������</th>
                                            <td>���������˥ǡ����Υ��åץ��ɤ�ư���ǧ����ǽ�Ǥ���</td>
                                        </tr>
                                        <tr>
                                            <th class="transfer-th">�᡼��</th>
                                            <td>��������������ϤǤ��ޤ��󡣥����С����ܷ���(���⤪��ʧ��)������ꤷ�Ƥ���������</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn ml0 mb20 w100perS" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">�����С����������ߤϤ�����<i class="ico ico_new-window"></i></span></a></p>

                                    <div class="manual-link w100perS">
                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="index.php">�����С���������������</a>��<br>
                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_free_trial.php">̵��������֤ˤĤ���</a>��
                                    </div>

                                </div>
                            </div>
                        </li><!-- /2.�����С����������� -->


                        <!-- 3 �ɥᥤ������ -->
                        <li id="step3"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�ɥᥤ������</h3>
                            <div class="order_body">
                                <div>
                                    <p>
                                        �ȼ��ɥᥤ��򥨥å��������С������Ѥ��뤿��������Ԥ��ޤ���<br>
                                        �ɥᥤ��������ɲä��뤳�Ȥǡ��оݥɥᥤ��̾�Υե�����������С���˺������졢�����С����ɬ�פ����꤬�Ǥ�����֤ˤʤ�ޤ���
                                    </p>
                                    <p class="font-m">
                                        ���ɥᥤ�������ԤäƤ�͡��ॵ���С��ʤ�DNS���ڤ��ؤ��ޤ���Τǡ���ž����Web�����Ȥ�᡼��α��Ѥ˱ƶ����Ф뤳�ȤϤ���ޤ���<br>
                                        ���ɥᥤ������ϡ֥ɥᥤ��ܴɡפμ�³���ǤϤ���ޤ���
                                    </p>
                                   <div class="manual-link w100perS">
                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_domain_setting.php">�ɥᥤ������</a>��<br>
                                   </div>

                                </div>
                            </div>
                        </li><!-- /3 �ɥᥤ������ -->


                        <!-- 4 Web�����ȤΥǡ����ܹ� -->
                        <li id="step4"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">Web�����Ȥΰܹ�</h3>
                            <p class="mb40">
                                ��ž�������С����顢Web�����Ȥ�ܹԤ��ޤ���<br>
                                <span class="font-m">(Web�����Ȥ����Ѥ���Ƥ��ʤ���硢������μ������פǤ�)</span>
                            </p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-1.��Web�����ȤΥǡ�����ܹԤ���</h4>
                                            <p class="mb30">WordPress�����Ѥ���Ƥ�����ȡ�����ʳ��ξ���ɬ�פʼ��򤴳�ǧ����������</p>

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">WordPress�����Ѥξ��<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        ��<b>WordPress��ñ�ܹ�</b>�׵�ǽ�ˤƥǡ����ΰܹԤ���ǽ�Ǥ��� <br>
                                                        <span class="font-m">��WordPress��ñ�ܹԤ����ѤǤ��ʤ����ϼ�ư�ǰܹԤ��Ƥ���������</span>
                                                    </p>
                                                    <hr>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_install_transfer_wp.php">WordPress��ñ�ܹ�</a>��<br>
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_install_transfer_wordpress.php">WordPress�ΰ�ž�ˤĤ���(��ư�ܹ�)</a>��<br>
                                                        <i class="ico ico_triangle-right"></i>��<a href="https://www.xserver.ne.jp/blog/wordpress-migration/" target="_blank">WordPress�֥��ΰ��ñۤ�(�����С��ܹ�)������⡪</a>��<i class="ico ico_new-window base-color"></i></p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">WordPress�ʳ������Ѥξ��<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        �����˰�ž�������С��ˤ�Web�����ȤΥХå����åפʤɤ��������ɬ�פʥǡ������Ѱդ��Ƥ���������<br>
                                                        FTP���եȤޤ��ϥե�����ޥ͡�����ʤɤ���Ѥ������å��������С��إǡ����򥢥åץ��ɤ��Ƥ���������
                                                    </p>
                                                    <hr>
                                                    <p class="font-m">
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_ftp_setting.php">FTP���եȤ�����</a>��<br>
                                                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_tool_file.php">�ե�����ޥ͡�����</a>��
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->

                                            <h5 class="transfer-ttl font-xl mb20"><i class="ico ico_circle"></i>�����åդ���Ȥ���Ԥ���֥����С���ž��ԡ�</h5>
                                            <p>
                                                �����ȤǰܹԺ�Ȥ�Ԥ����Ȥ��԰¤�����Ȥ��������ͤˤϡ� �μ�˭�٤ʥ��󥸥˥������åդ���ž��Ȥ���Ԥ����<b>�����С���ž���</b>��<span class="font-s">(���ץ����)</span>�����Ѥ����������Ȥǡ����ࡼ���ʰܹԤ�ե������ޤ���<br>
                                                WordPress�ΰ�ž��Ԥ��ǽ�Ǥ���</p>
                                            <p><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="�����С���ž���"></a></p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-2.��SSL�����ꤹ��</h4>
                                            <p class="mb30">
                                                HTTPS�����줿Web�����Ȥ��ž�������ϡ�SSL�����ꤷ�ޤ��� <br>
                                                ���å��������С��Ǥϡ�<b>̵���ȼ�SSL</b>�פޤ��ϡ�<b>���ץ�����ȼ�SSL<span class="font-s">(ͭ��)</span></b>�פ������Ѥ��������ޤ���
                                            </p>

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">̵���ȼ�SSL�����Ѥ�����<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb15">�����С��ѥͥ���������ɲä�����ž���ˤơ�WEBǧ�ڡפޤ��ϡ�DNSǧ�ڡפ�ԤäƤ���������</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_server_ssl.php#link-previous-b">̵���ȼ�SSL��¾�ҥ����С��Ǥ��Ǥ˱�����Υ����Ȥ��Ф���̵���ȼ�SSL����������ꤹ��</a>��</p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">���ץ�����ȼ�SSL(ͭ��)�����Ѥ�����<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb15">XServer��������Ȥ�ꤪ�������ߤΤ�����������Ρּ��������פ�ԤäƤ���������</p>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_ssl.php">���ץ�����ȼ�SSL�Τ���������</a>��</p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-2 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">4-3.��Web�����Ȥ�ư����ǧ����</h4>
                                            <p class="mb10">
                                                Web�����Ȥν������Ǥ��ޤ����顢�����Ȥ�������ɽ������뤫ư���ǧ��Ԥ��ޤ���<br>
                                                Web�����Ȥ����Ƥˤ��ư���ǧ����ˡ���ۤʤ�ޤ���<br>
                                            </p>
                                            <p class="note font-m mb30">��WordPress�����Ѥξ��ϡ�hosts�ե�������Խ�������ˡ��ư���ǧ��ԤäƤ���������</p>

                                            <h4 class="transfer-ttl mb20"><i class="ico ico_circle"></i>ư���ǧ�ˤĤ���</h4>
                                            <table class="table responsiveTable">
                                                <tbody>
                                                <tr>
                                                    <th class="transfer-th">ư���ǧURL�ǳ�ǧ����</th>
                                                    <td>��Ū�����Ȥξ��</td>
                                                </tr>
                                                <tr>
                                                    <th class="transfer-th">hosts�ե�������Խ�����<br>��ǧ����</th>
                                                    <td>����URL�ˤƥ�󥯤���������ưŪ�����Ȥ䡢����ɥᥤ��ؤΥ�����쥯�Ȥ�Ԥ�CMS�ץ����(WordPress�ʤ�)����Ѥ��Ƥ�����</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p class="font-m"><i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_domain_checkproxy.php">ư���ǧ�ˤĤ���</a>��</p>

                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /4-3 -->

                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /4 Web�����ȤΥǡ����ܹ� -->


                        <!-- 5 �᡼�륢������Ȥ����� -->
                        <li id="step5"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�᡼�륢������Ȥ�����</h3>
                            <p class="mb30">
                                �᡼������Ѥ��뤿��������Ԥ��ޤ���<br>
                                <span class="font-m">(�᡼������Ѥ���Ƥ��ʤ���硢������μ������פǤ�)</span>
                            </p>
                            <aside class="msg msg_notice clear mb10">
                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ���������</h6>
                                <div class="msg_body case-detail">
                                    ���μ����᡼��ʤɤΥǡ����ϥ��å��������С��ذ����Ѥ����Ȥ��Ǥ��ޤ���<br>
                                    �����ѤΥѥ�������Υ᡼�륽�եȤʤɡ��������ǥХå����åפ�Ԥ��ǡ�������¸���Ƥ���������
                                </div>
                            </aside>
                            <p class="note font-m mb30">�����μ����᡼��ʤɤΥХå����åפˤĤ��Ƥϡ���ž�������С���᡼�륽�եȤ��󶡸��ؤ���ǧ����������</p>

                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">5-1.���᡼�륢������Ȥ��ɲä���</h4>
                                            <p class="mb30">�����С��إ᡼�륢������Ȥ��ɲä��ޤ���</p>
                                            <p class="font-m">
                                                <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_mail_add.php">�᡼�륢������Ȥ��ɲ�</a>��
                                            </p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /5-1 -->

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <h4 class="step-body-ttl">5-2.���᡼�륽�եȤ����ꤹ��</h4>
                                            <p class="mb10">
                                                �᡼�륽�եȤ����Ѥ���Ƥ����硢�����ѤΥ᡼�륽�եȤإ��å��������С��ξ������Ѥ��ƥ᡼�륢������Ȥ��ɲä��ޤ���<br>
                                                ��¸�Υ᡼�륢�����������Ͼ�񤭤�������������Ȥ��ɲä�����ˡ�������ԤäƤ���������<br>
                                                �����С���ž����λ����ޤǤϿ���ɤ���Υ�������ȤǤ�᡼�뤬�����Ǥ���褦�ˤ��Ƥ������Ȥǡ������С��ڤ��ؤ���Υ᡼��μ�ꤳ�ܤ����ɤ����Ȥ���ǽ�Ǥ���
                                            </p>
                                            <p class="note font-m mb30">��Ʊ���᡼�륢�ɥ쥹���ɲä��Ǥ��ʤ����ϡ�¾�Υ᡼�륽�եȤ�����򤷤Ƥ�����������WEB�᡼������Ѥ򤴸�Ƥ����������</p>
                                            <hr>
                                            <p class="font-m">
                                                <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_mail_setting.php">�᡼�륽�եȤ�����</a>��<br>
                                                <i class="ico ico_triangle-right"></i>�褯��������<a href="../support/faq/transfer_server_incoming_mail.php">�����С���ž��Υ᡼��μ�����ˡ�Ϥɤ�����Ф����Ǥ��礦����</a>��
                                            </p>
                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /5-2 -->
                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /5 �᡼�륢������Ȥ����� -->


                        <!-- 6 �͡��ॵ���С�(DNS)���ѹ� -->
                        <li id="step6"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�͡��ॵ���С�(DNS)���ѹ�</h3>
                            <p class="mb40">
                                STEP1��5�ޤǤμ�礬��λ���Ƥ��뤫�ɤ������ǧ�����Ǹ�˥͡��ॵ���С����ѹ����ޤ���<br>
                                �͡��ॵ���С����ѹ����뤳�Ȥǡ���ž�������С����饨�å��������С��غǽ�Ū�ʥ����С����ڤ��ؤ����Ԥ��ޤ���<br>
                                Web�����Ȥ�᡼������ѼԤξ��ʤ������Ӥ��ѹ��򤹤�ʤɡ�������ͽ���Ω�Ƥ��ѹ����Ƥ����������Ȥ򤪤����ᤷ�ޤ���<br>
                                �͡��ॵ���С��ϥɥᥤ��δ�����Ҥ��ѹ����ޤ���
                            </p>
                            <div class="order_body">
                                <div class="step-wrap">

                                    <div class="step-inner">
                                        <div class="step-body">
                                            <p class="mb30">�ʲ����ɬ�פʼ��򤴳�ǧ����������</p>

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb10">
                                                <h5 class="js--accordion">���Ҥǥɥᥤ��򤴷�����ξ��<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        XServer��������ȤΥɥᥤ���˥塼���͡��ॵ���С����ѹ����ޤ���<br>
                                                        �ɥᥤ��Ŭ���襵���ӥ��ϡ�XServer��󥿥륵���С��פ����򤷤Ƥ���������
                                                    </p>
                                                    <hr>
                                                    <p class="font-m"><i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_domain_namesever_setting.php">�͡��ॵ���С�������</a>��</p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->

                                            <!-- ���ĥ���ƥ�� -->
                                            <div class="content-box mb30">
                                                <h5 class="js--accordion">¾�Ҥǥɥᥤ��򤴷�����ξ��<i class="ico ico_plus"></i></h5>
                                                <div class="content-box-inner">
                                                    <p class="mb30">
                                                        �ɥᥤ�������Ҥˤƥ͡��ॵ���С���ʲ��ξ�����ѹ����Ƥ���������<br>
                                                        ������Ҥˤ�ä�����Ǥ���͡��ॵ���С��ο��ϰۤʤ��礬����ޤ���<br>
                                                        �֥͡��ॵ���С�1�פ�����֤ˡ�����Ǥ�����������ꤷ�Ƥ�������������ꤢ��ޤ���
                                                    </p>
                                                    <table class="table w70perL mb30 responsiveTable">
                                                        <tbody>
                                                        <tr>
                                                            <th class="transfer-th">�͡��ॵ���С�1</th>
                                                            <td class="tac">ns1.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">�͡��ॵ���С�2</th>
                                                            <td class="tac">ns2.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">�͡��ॵ���С�3</th>
                                                            <td class="tac">ns3.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">�͡��ॵ���С�4</th>
                                                            <td class="tac">ns4.xserver.jp</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="transfer-th">�͡��ॵ���С�5</th>
                                                            <td class="tac">ns5.xserver.jp</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <p class="note font-s">�������Ť������С�����ϥ͡��ॵ���С����󤬰ۤʤ��礬����ޤ���<br>�����ѥ����С��Υ͡��ॵ���С�����ϡ֥����С��ѥͥ�䥵���С�����פˤƳ�ǧ����ǽ�Ǥ���</p>
                                                </div>
                                            </div>
                                            <!-- ���ĥ���ƥ�� -->

                                            <div class="media">
                                                <p class="media_image media_image_rev w50perM"><img class="flex" src="../img/order/img_transfer_server_05.png?date=2504" alt="�͡��ॵ���С�(DNS)���ѹ��ˤĤ��ƤΥ��᡼��"></p>
                                                <div class="media_body">
                                                    <h5 class="transfer-ttl font-xl mb20"><i class="ico ico_circle"></i>�͡��ॵ���С�(DNS)��ȿ�ǻ��֤ˤĤ���</h5>
                                                    <p>
                                                        �͡��ॵ���С����ѹ��塢<b>�����֡�����24��������</b>�ǽ�����ȿ�Ǥ��������С����ڤ��ؤ��ޤ���<br>
                                                        �͡��ॵ���С��ѹ���ϡ�Web�����Ȥ�᡼�뤬��ž�������С��ȥ��å��������С��Τɤ���˷Ҥ��뤫ͽ¬�Ǥ��ʤ����֤�ȯ�����ޤ���<br>
                                                        ȿ�Ǥ���ޤǴݰ������١��ͻҤ�ߤƤ���������
                                                    </p>
                                                </div>
                                            </div>

                                        </div><!-- step-body -->
                                    </div><!-- step-inner --><!-- /6-1 -->
                                </div><!-- /step-wrap -->
                            </div><!--/order_body-->
                        </li><!-- /6 �͡��ॵ���С�(DNS)���ѹ� -->

                        <li id="step7"><div class="stepCaption">STEP</div>
                            <h3 class="ttl transfer-ttl">�����С���ž��λ</h3>
                            <p>
                                �͡��ॵ���С�(DNS)��ȿ�Ǥ����顢Web�����Ȥ�ɽ����᡼���������������ʤ��Ǥ��뤫��ǧ���ޤ��礦��<br>
                                ��ž�������Ƥ������ư��Ƥ��뤳�Ȥ���ǧ�Ǥ��ޤ����顢�����С���ž�ϴ�λ�Ǥ���<br>
                                ��ž�������С��������פˤʤ���ϡ�����򤷤Ƥ������������ꤢ��ޤ���
                            </p>
                        </li><!-- /7 �����С���ž��λ -->


                    </ul>
                </section><!-- /orderFlow -->
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