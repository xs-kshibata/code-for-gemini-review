<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/order.css"); ?>" rel="stylesheet">

<title>�����ɥᥤ�󸡺� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="�����ɥᥤ�󸡺��ڡ����Ǥ�������˾�Υɥᥤ��̾��������ǽ����ǧ�Ǥ��ޤ���">

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

        <p class="ttl"><span class="label">�ɥᥤ������ե�����</span></p>

        <aside class="campaign_domain">
            <h3 class="campaign_domain_ttl"><span>�����С��ȥɥᥤ��򥻥åȤǤ��ͤ��ʤ顪</span></h3>

            <section class="bnr">
                <p class="tac font-bold mb5 font-l">�� <span class="orange">9/4(��)17���ޤǡ�</span>��</p>
                <div class="mb10">
                    <a id="ga-xs-under-cpBnr" href="../campaign/campaign_250703.php"><img class="hover fluid-sm" src="../img/campaign/250703/campaign_banner_772-130.png" alt="Ⱦ�ۥ���å���Хå������ڡ��󡪰���Ū�ϥ����ڥå������С����¼����495�ߤ���Ȥ��롪"></a>
                </div>
            </section>

            <section class="msg">
                <h4 class="msg_ttl"><i class="ico ico_circle-right"></i>�ȼ��ɥᥤ��ʵ�̵����ŵ�ο�����ˡ�ˤĤ���</h4>
                <div class="msg_body">
                    <p>�����С��ܷ���ʤ���������Τ���ʧ���ˤΤ��ȡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>��ꤴ��˾�Υɥᥤ��������Ƥ���������</p>
                    <p>
                        <a href="../manual/man_order_present_domain.php#link-b" class="btn btn_white">���ȼ��ɥᥤ��ʵ�̵����ŵ�פΤ��������߼��<i class="ico ico_book font-xl"></i></a>
                    </p>
                </div>
            </section>
        </aside>

        <section class="domain">
            <h3 class="domain_ttl">
                <span class="domain_ttl_label"><img src="../img/order/xdomain_logo.svg" alt="�ɥᥤ����������ӥ���XServer�ɥᥤ���"><br class="visible-s"><span class="ml10">�����ɥᥤ�󸡺�</span></span>
            </h3>
            <div id="common_domain_search_loading_img">
                <div class="domain_body">
                    <form method="post" action="<?php print $SECURE_URL; ?>xinfo/?action_register_xd_domain_index=true">
                        <input type="hidden" value="1" name="search_flag">
                        <input type="hidden" value="on" name="action_register_xd_cs_domain_search">
                        <?php $AccessTime = time(); ?>
                        <input type="hidden" name="accesstime" value="<?php echo $AccessTime; ?>">
                        <input type="hidden" name="humancheck" value="<?php echo md5($_SERVER['REMOTE_ADDR'].'#x#domain#'.$AccessTime); ?>">
                        <div class="domain_search">
                            <p class="domain_input"><input class="inputForm" type="text" name="domainname" placeholder="�ߤ����ɥᥤ��̾�����Ϥ��Ƥ�������"></p>
                            <button class="buttonForm" type="submit" value="">����</button>

                            <img id="common_domain_search_spinner" style="display:none;" src="../img/order/domain_search_button.gif" alt="">
                        </div>
                        <p class="domain_text">���ܸ�ɥᥤ������ϲ�ǽ�Ǥ���</p>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.domain -->
        
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