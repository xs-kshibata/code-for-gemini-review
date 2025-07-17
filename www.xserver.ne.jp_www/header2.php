<?php
$now_page = array(
    top => $FILE_PATH == 'index.php',
    
    feature => strpos( $FILE_PATH, 'feature/' ) !== false,
    feature1 => strpos( $FILE_PATH, 'feature/index.php' ) !== false,
    feature2 => strpos( $FILE_PATH, 'feature/pricing_plan.php' ) !== false,
    feature3 => strpos( $FILE_PATH, 'feature/wordpress.php' ) !== false,
    feature4 => strpos( $FILE_PATH, 'feature/feedback.php' ) !== false,
    feature5 => strpos( $FILE_PATH, 'feature/testsite.php' ) !== false,
    feature6 => strpos( $FILE_PATH, 'feature/case.php' ) !== false,
    feature7 => strpos( $FILE_PATH, 'feature/wordpress_reasons.php' ) !== false,

    functions => strpos( $FILE_PATH, 'functions/' ) !== false,
    functions1 => strpos( $FILE_PATH, 'functions/index.php' ) !== false,
    functions2 => strpos( $FILE_PATH, 'functions/xaccelerator.php' ) !== false,
    functions3 => strpos( $FILE_PATH, 'functions/xpagespeed.php' ) !== false,
    functions4 => strpos( $FILE_PATH, 'functions/wptheme.php' ) !== false,
    functions5 => strpos( $FILE_PATH, 'functions/service_server.php' ) !== false,
    functions6 => strpos( $FILE_PATH, 'functions/service_ssl.php' ) !== false,
    functions7 => strpos( $FILE_PATH, 'functions/service_webfont.php' ) !== false,
    functions8 => strpos( $FILE_PATH, 'functions/service_backup.php' ) !== false,

    price => strpos( $FILE_PATH, 'price/' ) !== false,
    price1 => strpos( $FILE_PATH, 'price/index.php' ) !== false,
    price2 => strpos( $FILE_PATH, 'price/price_ssl.php' ) !== false,
    price4 => strpos( $FILE_PATH, 'price/service_daiko.php' ) !== false,
    price5 => strpos( $FILE_PATH, 'price/price_payment_method.php' ) !== false,
    price6 => strpos( $FILE_PATH, 'price/service_server_daiko.php' ) !== false,
    
	domain => strpos( $FILE_PATH, 'domain/' ) !== false,
 
	flow => strpos( $FILE_PATH, 'order/index.php' ) !== false,
    
    order => strpos( $FILE_PATH, 'order/' ) !== false,
    order1 => strpos( $FILE_PATH, 'order/index.php' ) !== false,
    order2 => strpos( $FILE_PATH, 'order/whois.php' ) !== false,
    order3 => strpos( $FILE_PATH, 'order/order_transfer_server.php' ) !== false,
    
    manual => strpos( $FILE_PATH, 'manual/' ) !== false,

    support => strpos( $FILE_PATH, 'support/' ) !== false,
    support1 => strpos( $FILE_PATH, 'support/index.php' ) !== false,
    support2 => strpos( $FILE_PATH, 'support/faq/' ) !== false,
    support3 => strpos( $FILE_PATH, 'support/news.php' ) !== false,
    support4 => strpos( $FILE_PATH, 'support/information.php' ) !== false,
    support5 => strpos( $FILE_PATH, 'support/support.php' ) !== false,

    business2 => strpos( $FILE_PATH, 'comparison/' ) !== false,
    business3 => strpos( $FILE_PATH, 'largecontracts.php' ) !== false,
    
    login => strpos( $FILE_PATH, 'login_' ) !== false,
    login1 => strpos( $FILE_PATH, 'login_info.php' ) !== false,
    login2 => strpos( $FILE_PATH, 'login_server.php' ) !== false,
    login3 => strpos( $FILE_PATH, 'login_file.php' ) !== false,
    login4 => strpos( $FILE_PATH, 'login_mail.php' ) !== false,
);

// �Ŀ;���μ�갷���ˤĤ���(support/support_privacy.php)�ϥ�����ɽ�����ʤ�
if( $now_page["support"] && strpos( $FILE_PATH, 'support/support_privacy.php' ) !== false ) {
    $now_page["support"] = false;
}

// �˥塼�����㳲�����ƥʥ󥹾���ξܺ٤򥫥���ɽ��
if( strpos( $FILE_PATH, 'news_detail.php' ) !== false || strpos( $FILE_PATH, 'information_detail.php' ) !== false ) {
    $now_page["support"] = true;
}

?>
<?php include("x_header/html.php") ?>

<header id="header">
    <div class="headerInner">
        <div class="headerTop">
            <div class="headerTop__leftColumn">
                <div class="sitehead">
                    <h1 class="sitehead_siteid">
                        <span class="head_sub">
                            ���������ޤǡڹ��⥷������<span class="num">No.1</span><a href="#number1">��1</a>
                        </span>
                        <a class="hover" href="<?php print $SITE_URL; ?>"><img class="sitehead_siteid_img" src="<?php print $SITE_URL; ?>img/common/img_siteid.svg?date=240930" alt="��󥿥륵���С� ���å��������С�" width="286" height="23" fetchpriority="high"></a>
                    </h1>
                </div>
                <!-- /.sitehead -->
            </div>
            <div class="headerTop__rightColumn">
                <p class="sitehead_pr <?php if($now_page["top"]) { ?>sitehead_pr-top<?php } ?>">
                <span class="sitehead_pr_text">
                    Ƴ�����<span class="sitehead_pr-num">22</span>���� / ���ѥ����ȿ�<span class="sitehead_pr-num">250</span>����<a href="#number1">��3</a>
                </span>
                </p>
                <!-- /.No.1PR -->

                <nav id="gnav" role="navigation">
                    <ul class="gnav">
                        <li class="gnav_item gnav_item_feature<?php if($now_page['feature']) print ' is-current'; ?>">
                            <span class="gnav_item_label">��Ĺ</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/index.php">��Ĺ����</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/pricing_plan.php">����ץ�������η�</a></li>
                                <li class="gnav_sub_item gnav_sub_item_7"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/wordpress_reasons.php">WordPress���Ĥ˶���</a></li>
                                <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/wordpress.php">�͵��ơ���Cocoon��ȯ����</a></li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_functions<?php if($now_page['functions']) print ' is-current'; ?>">
                            <span class="gnav_item_label">��ǽ</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/index.php">��ǽ����</a></li>
                                <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/service_ssl.php">�ȼ�SSL</a></li>
                                <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/wptheme.php">WordPress�ơ���</a></li>
                                <li class="gnav_sub_item">
                                    <span class="gnav_sub_ttl">XServer���ȼ���ǽ</span>
                                    <ul class="gnav_sub_group">
                                        <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/xaccelerator.php">X��������졼��</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/xpagespeed.php">XPageSpeed</a></li>
                                        <li class="gnav_sub_item"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>manual/man_server_wprecovery.php">WordPress�ꥫ�Х꡼</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_price<?php if($now_page['price'] && !$now_page['domain']) print ' is-current'; ?>">
                            <span class="gnav_item_label">����</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/index.php">����ץ��</a></li>
                                <li class="gnav_sub_item gnav_sub_item_5"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/price_payment_method.php">����ʧ����ˡ</a></li>
                                <li class="gnav_sub_item">
                                    <span class="gnav_sub_ttl">���ץ����</span>
                                    <ul class="gnav_sub_group">
                                        <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/price_ssl.php">�ȼ�SSL</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/service_daiko.php">���ꤪ�ޤ������ݡ���</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/service_server_daiko.php">�����С���ž���</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['domain']) print ' is-current'; ?>">
                            <a class="gnav_item_label alone" href="<?php print $SITE_URL; ?>domain/">�ɥᥤ��</a>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['flow']||$now_page['order2']||$now_page['order3']) print ' is-current'; ?>">
                            <a class="gnav_item_label alone" href="<?php print $SITE_URL; ?>order/index.php">���������ߤ�ή��</a>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['manual']||$now_page['support']) print ' is-current'; ?>">
                            <span class="gnav_item_label">���ݡ���</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/faq/index.php">�褯�������</a></li>
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>manual/">�ޥ˥奢��</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="https://community.xserver.ne.jp/" target="_blank">���ߥ�˥ƥ�<i class="ico ico_new-window"></i></a></li>
                                <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/information.php">�㳲�����ƥʥ󥹾���</a></li>
                                <li class="gnav_sub_item gnav_sub_item_7"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/index.php">���䤤��碌</a></li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['business2']||$now_page['business3']) print ' is-current'; ?>">
                            <span class="gnav_item_label">ˡ��</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="https://business.xserver.ne.jp/" target="_blank">ˡ�͸�����󥿥륵���С�<i class="ico ico_new-window"></i></a></li>
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>comparison/">��󥿥륵���С�������������</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>largecontracts.php">�������Τ�����</a></li>
                                <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="https://business.xserver.ne.jp/partner/" target="_blank">�輡���١ʥѡ��ȥʡ��ץ�����<i class="ico ico_new-window"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="gnav snav">
                        <li class="gnav_item gnav_item_order">
                            <a class="gnav_item_label registry" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">����������</a>
                        </li>
                        <li class="gnav_item gnav_item_login<?php if($now_page['login'] && !$now_page['flow']) print ' is-current'; ?>">
                            <span class="gnav_item_label login">������</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><span>XServer���������</span></a>
                                    <ul class="gnav_sub_in">
                                        <li class="gnav_sub_item gnav_sub_in_1"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a></li>
                                        <li class="gnav_sub_item gnav_sub_in_2"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">�ե�����ޥ͡�����</a></li>
                                        <li class="gnav_sub_item gnav_sub_in_3"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank">WEB�᡼��</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /#gnav -->
            </div>
        </div>

        <nav id="spnav" class="clearfix">
            <a id="spnav_btn_login" class="spnav_btn"></a>
            <a id="spnav_btn_menu" class="spnav_btn"></a>
        </nav>
        <!-- /#spnav -->

        <div id="spmenu_login" class="spmenu">
            <ul class="spmenu_list">
                <li class="spmenu_list_item">
                    <a class="spmenu_list_label clearfix<?php if($now_page['login1']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><span><i class="ico ico_signature"></i>XServer���������</span><i class="ico ico_chevron-right"></i></a>
                    <ul class="spmenu_list_in">
                        <li class="spmenu_list_item_in">
                            <a class="spmenu_list_label clearfix<?php if($now_page['login2']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank"><span><i class="ico ico_server"></i>�����С��ѥͥ�</span><i class="ico ico_chevron-right"></i></a>
                            <a class="spmenu_list_label clearfix<?php if($now_page['login3']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><span><i class="ico ico_window"></i>�ե�����ޥ͡�����</span><i class="ico ico_chevron-right"></i></a>
                            <a class="spmenu_list_label clearfix<?php if($now_page['login4']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><span><i class="ico ico_email"></i>WEB�᡼��</span><i class="ico ico_chevron-right"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a id="spmenu_close_login" class="spmenu_close"><i class="ico ico_cross"></i>��˥塼���Ĥ���</a>
        </div>
        <!-- /#spmenu_login -->

        <div id="spmenu_main" class="spmenu">
            <ul class="spmenu_list">
                <li class="spmenu_list_item<?php if($now_page['top']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>"><span>�ȥå�</span><i class="ico ico_chevron-right"></i></a></li>
                <li class="spmenu_list_item<?php if($now_page['feature']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>��Ĺ</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['feature1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/index.php"><span>��Ĺ����</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/pricing_plan.php"><span>����ץ�������η�</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature7']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress_reasons.php"><span>WordPress���Ĥ˶���</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress.php"><span>�͵��ơ���Cocoon��ȯ����</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['functions']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>��ǽ</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['functions1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/index.php"><span>��ǽ����</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_ssl.php"><span>�ȼ�SSL</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/wptheme.php"><span>WordPress�ơ���</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_sub_item">
                            <span class="spmenu_sub_ttl">XServer���ȼ���ǽ</span>
                            <ul class="spmenu_sub_group">
                                <li class="spmenu_list_item<?php if($now_page['functions2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xaccelerator.php"><span>X��������졼��</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['functions3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xpagespeed.php"><span>XPageSpeed</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>manual/man_server_wprecovery.php"><span>WordPress�ꥫ�Х꡼</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['price'] && !$now_page['domain']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>����</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['price1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/index.php"><span>����ץ��</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price5']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_payment_method.php"><span>����ʧ����ˡ</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_sub_item">
                            <span class="spmenu_sub_ttl">���ץ����</span>
                            <ul class="spmenu_sub_group">
                                <li class="spmenu_list_item<?php if($now_page['price2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_ssl.php"><span>�ȼ�SSL</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['price4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_daiko.php"><span>���ꤪ�ޤ������ݡ���</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['price6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_server_daiko.php"><span>�����С���ž���</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['domain']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix alone" href="<?php print $SITE_URL; ?>domain/"><span>�ɥᥤ��</span><i class="ico ico_chevron-right"></i></a>
                </li>
                <li class="spmenu_list_item<?php if($now_page['flow']||$now_page['order2']||$now_page['order3']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix alone" href="<?php print $SITE_URL; ?>order/index.php"><span>���������ߤ�ή��</span><i class="ico ico_chevron-right"></i></a>
                </li>
                <li class="spmenu_list_item<?php if($now_page['manual']||$now_page['support']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>���ݡ���</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['support2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/faq/index.php"><span>�褯�������</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['manual']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>manual/"><span>�ޥ˥奢��</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://community.xserver.ne.jp/" target="_blank"><span>���ߥ�˥ƥ�</span><i class="ico ico_new-window"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/information.php"><span>�㳲�����ƥʥ󥹾���</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/index.php"><span>���䤤��碌</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['business2']||$now_page['business3']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>ˡ��</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['business1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/" target="_blank"><span>ˡ�͸�����󥿥륵���С�</span><i class="ico ico_new-window"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>comparison/"><span>��󥿥륵���С�������������</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>largecontracts.php"><span>�������Τ�����</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/partner/" target="_blank"><span>�輡���١ʥѡ��ȥʡ��ץ�����</span><i class="ico ico_new-window"></i></a></li>
                    </ul>
                </li>
            </ul>

            <div class="spmenu_btns">
                <ul class="clearfix">
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>privacy.php">�ץ饤�Х��ݥݥꥷ��<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>rule/rule.php">���ѵ���<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>sitemap.php">�����ȥޥå�<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>company.php">��ҳ���<i class="ico ico_chevron-right"></i></a></li>
                </ul>
            </div>

            <a id="spmenu_close_menu" class="spmenu_close"><i class="ico ico_cross"></i>��˥塼���Ĥ���</a>

        </div>
        <!-- /#spmenu_main -->
    </div>

</header>
<!-- /#header -->
