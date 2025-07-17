<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">
<title>�����С����������߼�� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����С�����Τ��������߼��Ǥ����ܷ���ޤǤ�ή��ˤĤ��Ƥ⤴���⤷�Ƥ��ޤ���">
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
                <p class="daiko-bnr"><a href="../price/service_server_daiko.php#daiko_list"><img src="../img/functions/daiko_banner.png?date=20240917" class="hover fluid-sm" alt="�����С���ž���"></a></p></div>
        </aside>

        <div class="section mb15">
            <div class="section_body">
                <ul class="order-nav">
                    <li class="order-nav_item order-nav_item-new is-current">
                        <span class="order-nav_item_label">
                            <span>�����С���������������</span>
                        </span>
                    </li>
                    <li class="order-nav_item order-nav_item-transfer">
                        <a class="order-nav_item_label" href="order_transfer_server.php">
                            <span>�����С���ž</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.section -->

        <h2 class="ttl"><span class="label">�����С���������������</span></h2>
        <p>
            ���å��������С��Υ����С��ο������������ߤ�Web��Ǥ��٤ƴ��뤷��ʣ���ʼ�³���򤹤뤳�Ȥʤ����ϤǤ��ޤ���<br>
            ���������ߤ�Ʊ���ˡ�<b>WordPress�����å���������</b>�פ����Ѥ���ȡ��֥���Ƴ�������Ĥ򥹥ࡼ���˹Ԥ����Ȥ���ǽ�Ǥ���<br>
            �ޤ���<b>10����̵���Τ������</b>�Ǽºݤλ��Ѵ���Τ���뤳�Ȥ��Ǥ���Τǡ����Ƥ�����¿����ƥ������ȤǤ��ޤ���
        </p>

        <section class="section mt50">
            <h3 class="section_ttl">�����С��������������ߤ�ή��</h3>
            <div class="section_body">

                <ul class="flowNav">
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_01.svg" alt="����������" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">����������</h4>
                            <p class="flowNav__txt">�ץ������ʤɡ�ɬ�פʾ�������Ϥ��ޤ���</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_02.svg" alt="�������" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">�������</h4>
                            <p class="flowNav__txt">10���֤�̵��������֤��Ϥޤ�ޤ���</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_03.svg" alt="����ʧ��" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">����ʧ��</h4>
                            <p class="flowNav__txt">���������ˤ���������򤪻�ʧ������������</p>
                        </div>
                    </li>
                    <li class="flowNav__item">
                        <figure class="flowNav__img">
                            <img loading="lazy" src="../img/top/flow_nav_04.svg" alt="�ܷ���" width="200" height="200">
                        </figure>
                        <div class="flowNav__box">
                            <h4 class="flowNav__ttl">�ܷ���</h4>
                            <p class="flowNav__txt">����ʧ������ǧ�Ǥ����衢�ܷ���ؤȰܹԤ��ޤ���</p>
                        </div>
                    </li>
                </ul>

            </div><!--/section_body-->
        </section>

        <section class="orderFlow">
            <ul>
                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">����������</h3>
                    <div class="order_body_flex">
                        <section class="round-box round-box_left">
                            <h4 class="round-box_ttl">XServer��������Ȥ򤪻����Ǥʤ���</h4>
                            <div class="round-box_body">
                                <p class="tac">
                                    <img class="frame flex" src="../img/order/img_add_branch_1.png" alt="XServer��������ȿ������������ߤβ��̥��᡼��">
                                </p>
                                <p><a href="../manual/terms.php#01">XServer���������</a>����Ͽ�ȥ����ӥ��Τ��������ߤ�Ʊ���˹Ԥ��ޤ����ֿ������������ߡפؿʤߡ�ɬ�׻���������Ƥ���������</p>
                                <p>����24���ְ���˥����С�������������괰λ�᡼�뤬��������ޤ����᡼��˵��ܤ���Ƥ��륢������Ⱦ���(XServer���������ID��)�򤴳�ǧ����������</p>
                            </div>
                        </section>
                        <section class="round-box round-box_right">
                            <h4 class="round-box_ttl">XServer��������Ȥ򤪻�������</h4>
                            <div class="round-box_body">
                                <p class="tac">
                                    <img class="frame flex" src="../img/order/img_add_branch_2.png" alt="XServer��������ȥ�������̤Υ��᡼��">
                                </p>
                                <p>
                                    �֥��å��������С��פ��<a href="https://business.xserver.ne.jp/" target="_blank">XServer�ӥ��ͥ�</a> <i class="ico ico_new-window color-gray"></i>�פʤ�XServer��Ϣ�����ӥ��������������Ʊ����������Ȥ򤪻Ȥ����������ޤ���<br>
                                    �֥�����פ����ɲÿ������ߤμ�³���򤪿ʤ᤯��������
                                </p>
                            </div>
                        </section>
                    </div>

                    <p class="tac"><a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">���������ߥե�����<i class="ico ico_new-window"></i></span></a></p>

                    <div class="prQuickStart">
                        <h4 class="prQuickStart__ttl" id="QuickStart">������WordPress�֥��α��Ĥ�Ϥ����<br class="visible-s">��WordPress�����å��������ȡ�</h4>
                        <p class="prQuickStart__txt mt20 mb20">���ƤΥ֥����Ĥ�ɬ�פ����Ƥ�ޤȤ�Ƥ��������ߡ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                        <p class="prQuickStart__img"><img src="../img/order/img_quick_start.png" class="w95perSM" alt="5�ĤޤȤ�ƴ�ñ��礪��������"></p>

                        <div class="QuickStartUse cf">
                            <div class="QuickStartUse__box">
                                <div class="QuickStartUse__txt">
                                    <h4 class="QuickStartUse__ttl">�����ѤˤĤ���</h4>
                                    <p class="mt15">
                                        <b>WordPress�����å��������ȤΡ����Ѥ���פ�����å�</b>�ξ塢����³����ʤ�Ƥ���������<br>
                                        �ʤ��������å��������Ȥ����Ѥ��ƿ����������硢��10����̵���Τ�����֡פϤ���ޤ���<br>
                                        ���������ߤ�Ʊ���ˤ���ʧ����ȯ�����ޤ��Τǡ��ʹߤμ��ϥ����åפ��Ƥ���������
                                    </p>
                                </div>
                                <p class="QuickStartUse__img">
                                    <img src="../img/order/quick_start_use_img.png?date=200603" alt="WordPress�����å��������Ȥ����Ѥ���">
                                </p>
                            </div>
                        </div>

                    </div>

                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">�������</h3>
                    <p>���������߸塢��û��ʬ�������24���ְ���ˡ����������ߥե�����˵��ܤ����᡼�륢�ɥ쥹���ˡ�<b>�����С�������������괰λ�Τ��Τ餻</b>�פȤ��������ȥ�Υ᡼�뤬�Ϥ��ޤ���<br>
                        ������Υ᡼�뤬���긵���Ϥ����顢̵���������(10����)�γ��ϤǤ���</p>
                    <p class="note mb35 font-m">���֥����С�������������괰λ�Τ��Τ餻�פ��Ϥ��ʤ���硢���ǥ᡼��ե�����䥴��Ȣ�ʤɤ����äƤ��ʤ�������ǧ�������������ǥ᡼��ե�����ʤɤˤ�᡼�뤬�ʤ���硢�������ޡ����ݡ��ȤޤǤ�Ϣ����������</p>
                    <div id="demo">
                        <h4 class="demo_ttl">̵�����������ϼºݤΥ����С���<br class="visible-s">̵�������ѤǤ��ޤ���</h4>
                        <div class="demo_txt">
                            <p>
                                <b>���֥����С��ѥͥ�פʤɤδ����ġ��뤬�Ȥ��䤹����<br>
                                ��WordPress�ʤɤΥץ���ब��ñ�����֤Ǥ��뤫�䡢���ָ��ư���­������Τ�<br>
                                    �����Ѥ���ͽ��Υץ���ब����ʤ�ư��뤫</b>
                            </p>
                            <p>�ʤɡ��ºݤΥ����С��Ǥ���ǧ����������</p>
                            <p class="note mb0 font-m">��̵�����������ˤϥ᡼�������ʤɰ����ε�ǽ�����¤�����ޤ����ܺ٤ϥޥ˥奢���<a href="../manual/man_order_free_trial.php">̵���������</a>�פ򤴻��Ȥ���������</p>
                        </div>
                    </div>
                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">����ʧ��</h3>
                    <p>���������˳ƴ����ġ���λȤ�����γ�ǧ��ץ�����ư������å��򤷡����꤬�ʤ���Ф���������򤪻�ʧ������������<br>
                        ����ʧ����ˡ�ˤĤ��Ƥξܺ٤ϳƥޥ˥奢��򤴻��Ȥ���������</p>
                    <hr>
                    <p class="font-m">
                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_pay_method_convenient.php">����ӥ˥��󥹥��ȥ�ʧ��</a>��<br>
                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_pay_method_credit.php">���쥸�åȥ����ɷ��</a>��<br>
                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_pay_method_bank.php">��Կ������</a>��<br>
                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_pay_method_pay_easy.php">�ڥ��������</a>��<br>
                        <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_pay_method_paidy.php">����ʧ���ʥ���ӥˡ���ԡ�</a>��<br>
                    </p>
                </li>

                <li><div class="stepCaption">STEP</div>
                    <h3 class="ttl">�ܷ���</h3>
                    <p>���Ҥˤơ������ͤ�������⤪��ʧ������ǧ�Ǥ����衢��<b>����ʧ����ǧ�Τ��Τ餻</b>�פ��������ޤ���<br>
                        ����ʧ����ǧ�᡼�뤬�Ϥ����衢�������ܷ���ؤȰܹԤ��ޤ���</p>

                    <p class="note mb35 font-m">�����줪��ʧ������3���ʾ�вᤷ�Ƥ�֤���ʧ����ǧ�Τ��Τ餻�פ��Ϥ��ʤ����ˤϡ����ݡ��ȤޤǤ�Ϣ����������</p>

                    <aside class="msg msg_caution p15" style="overflow: hidden;">
                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>��ջ���</h5>
                        <div class="msg_body">
                            <p><b>
                                ���ȼ��ɥᥤ��ʵ�̵����ŵ<br>
                                ���ȼ��ɥᥤ��ʵ�̵����ŵ(�����ڡ�����ŵ)<br>
                                ���ȼ��ɥᥤ��1ǯ̵����ŵ
                                </b>
                            </p>
                                <p>�嵭�����Ѥ������̾�Υɥᥤ������Ȥϰۤʤ�ޤ��Τǡ��ƥޥ˥奢��ˤƾܺ٤򤴳�ǧ����������</p>

                            <p class="font-m">
                                <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_present_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ</a>��<br>
                                <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_campaign_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ�ʥ����ڡ�����ŵ��</a>��<br>
                                <i class="ico ico_triangle-right"></i>�ޥ˥奢���<a href="../manual/man_order_oneyear_domain.php">�ȼ��ɥᥤ��1ǯ̵����ŵ</a>��<br>
                            </p>
                        </div>
                    </aside>
                </li>

            </ul>

        </section><!-- /orderFlow -->

        <p class="tac"><a href="order_transfer_server.php" class="btn btn_gray-l btn-order-transfer"><img class="mr15 w20perS" src="../img/order/ico_server_transfer.png?date=240808" alt="">�����С���ž�����Ѥ����Ϥ�����<i class="ico ico_chevron-right"></i></a></p>

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