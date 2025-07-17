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

// 個人情報の取り扱いについて(support/support_privacy.php)はカレント表示しない
if( $now_page["support"] && strpos( $FILE_PATH, 'support/support_privacy.php' ) !== false ) {
    $now_page["support"] = false;
}

// ニュース、障害・メンテナンス情報の詳細をカレント表示
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
                            おかげさまで【国内シェア】<span class="num">No.1</span><a href="#number1">※1</a>
                        </span>
                        <a class="hover" href="<?php print $SITE_URL; ?>"><img class="sitehead_siteid_img" src="<?php print $SITE_URL; ?>img/common/img_siteid.svg?date=240930" alt="レンタルサーバー エックスサーバー" width="286" height="23" fetchpriority="high"></a>
                    </h1>
                </div>
                <!-- /.sitehead -->
            </div>
            <div class="headerTop__rightColumn">
                <p class="sitehead_pr <?php if($now_page["top"]) { ?>sitehead_pr-top<?php } ?>">
                <span class="sitehead_pr_text">
                    導入企業<span class="sitehead_pr-num">22</span>万社 / 運用サイト数<span class="sitehead_pr-num">250</span>万件<a href="#number1">※3</a>
                </span>
                </p>
                <!-- /.No.1PR -->

                <nav id="gnav" role="navigation">
                    <ul class="gnav">
                        <li class="gnav_item gnav_item_feature<?php if($now_page['feature']) print ' is-current'; ?>">
                            <span class="gnav_item_label">特長</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/index.php">特長一覧</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/pricing_plan.php">シンプルな料金体系</a></li>
                                <li class="gnav_sub_item gnav_sub_item_7"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/wordpress_reasons.php">WordPress運営に強い</a></li>
                                <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>feature/wordpress.php">人気テーマCocoonを開発・提供</a></li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_functions<?php if($now_page['functions']) print ' is-current'; ?>">
                            <span class="gnav_item_label">機能</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/index.php">機能一覧</a></li>
                                <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/service_ssl.php">独自SSL</a></li>
                                <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/wptheme.php">WordPressテーマ</a></li>
                                <li class="gnav_sub_item">
                                    <span class="gnav_sub_ttl">XServerの独自機能</span>
                                    <ul class="gnav_sub_group">
                                        <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/xaccelerator.php">Xアクセラレータ</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>functions/xpagespeed.php">XPageSpeed</a></li>
                                        <li class="gnav_sub_item"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>manual/man_server_wprecovery.php">WordPressリカバリー</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_price<?php if($now_page['price'] && !$now_page['domain']) print ' is-current'; ?>">
                            <span class="gnav_item_label">料金</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/index.php">料金プラン</a></li>
                                <li class="gnav_sub_item gnav_sub_item_5"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/price_payment_method.php">お支払い方法</a></li>
                                <li class="gnav_sub_item">
                                    <span class="gnav_sub_ttl">オプション</span>
                                    <ul class="gnav_sub_group">
                                        <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/price_ssl.php">独自SSL</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/service_daiko.php">設定おまかせサポート</a></li>
                                        <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>price/service_server_daiko.php">サーバー移転代行</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['domain']) print ' is-current'; ?>">
                            <a class="gnav_item_label alone" href="<?php print $SITE_URL; ?>domain/">ドメイン</a>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['flow']||$now_page['order2']||$now_page['order3']) print ' is-current'; ?>">
                            <a class="gnav_item_label alone" href="<?php print $SITE_URL; ?>order/index.php">お申し込みの流れ</a>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['manual']||$now_page['support']) print ' is-current'; ?>">
                            <span class="gnav_item_label">サポート</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/faq/index.php">よくある質問</a></li>
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>manual/">マニュアル</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="https://community.xserver.ne.jp/" target="_blank">コミュニティ<i class="ico ico_new-window"></i></a></li>
                                <li class="gnav_sub_item gnav_sub_item_6"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/information.php">障害・メンテナンス情報</a></li>
                                <li class="gnav_sub_item gnav_sub_item_7"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>support/index.php">お問い合わせ</a></li>
                            </ul>
                        </li>
                        <li class="gnav_item gnav_item_support<?php if($now_page['business2']||$now_page['business3']) print ' is-current'; ?>">
                            <span class="gnav_item_label">法人</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_4"><a class="gnav_sub_item_label" href="https://business.xserver.ne.jp/" target="_blank">法人向けレンタルサーバー<i class="ico ico_new-window"></i></a></li>
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>comparison/">レンタルサーバー選び方ガイド</a></li>
                                <li class="gnav_sub_item gnav_sub_item_2"><a class="gnav_sub_item_label" href="<?php print $SITE_URL; ?>largecontracts.php">大口契約のご相談</a></li>
                                <li class="gnav_sub_item gnav_sub_item_3"><a class="gnav_sub_item_label" href="https://business.xserver.ne.jp/partner/" target="_blank">取次制度（パートナープログラム）<i class="ico ico_new-window"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="gnav snav">
                        <li class="gnav_item gnav_item_order">
                            <a class="gnav_item_label registry" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">お申し込み</a>
                        </li>
                        <li class="gnav_item gnav_item_login<?php if($now_page['login'] && !$now_page['flow']) print ' is-current'; ?>">
                            <span class="gnav_item_label login">ログイン</span>
                            <ul class="gnav_sub">
                                <li class="gnav_sub_item gnav_sub_item_1"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><span>XServerアカウント</span></a>
                                    <ul class="gnav_sub_in">
                                        <li class="gnav_sub_item gnav_sub_in_1"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a></li>
                                        <li class="gnav_sub_item gnav_sub_in_2"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャ</a></li>
                                        <li class="gnav_sub_item gnav_sub_in_3"><a class="gnav_sub_item_label" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank">WEBメール</a></li>
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
                    <a class="spmenu_list_label clearfix<?php if($now_page['login1']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><span><i class="ico ico_signature"></i>XServerアカウント</span><i class="ico ico_chevron-right"></i></a>
                    <ul class="spmenu_list_in">
                        <li class="spmenu_list_item_in">
                            <a class="spmenu_list_label clearfix<?php if($now_page['login2']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank"><span><i class="ico ico_server"></i>サーバーパネル</span><i class="ico ico_chevron-right"></i></a>
                            <a class="spmenu_list_label clearfix<?php if($now_page['login3']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><span><i class="ico ico_window"></i>ファイルマネージャ</span><i class="ico ico_chevron-right"></i></a>
                            <a class="spmenu_list_label clearfix<?php if($now_page['login4']) print ' is-current'; ?>" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><span><i class="ico ico_email"></i>WEBメール</span><i class="ico ico_chevron-right"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a id="spmenu_close_login" class="spmenu_close"><i class="ico ico_cross"></i>メニューを閉じる</a>
        </div>
        <!-- /#spmenu_login -->

        <div id="spmenu_main" class="spmenu">
            <ul class="spmenu_list">
                <li class="spmenu_list_item<?php if($now_page['top']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>"><span>トップ</span><i class="ico ico_chevron-right"></i></a></li>
                <li class="spmenu_list_item<?php if($now_page['feature']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>特長</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['feature1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/index.php"><span>特長一覧</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/pricing_plan.php"><span>シンプルな料金体系</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature7']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress_reasons.php"><span>WordPress運営に強い</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress.php"><span>人気テーマCocoonを開発・提供</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['functions']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>機能</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['functions1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/index.php"><span>機能一覧</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_ssl.php"><span>独自SSL</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/wptheme.php"><span>WordPressテーマ</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_sub_item">
                            <span class="spmenu_sub_ttl">XServerの独自機能</span>
                            <ul class="spmenu_sub_group">
                                <li class="spmenu_list_item<?php if($now_page['functions2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xaccelerator.php"><span>Xアクセラレータ</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['functions3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xpagespeed.php"><span>XPageSpeed</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>manual/man_server_wprecovery.php"><span>WordPressリカバリー</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['price'] && !$now_page['domain']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>料金</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['price1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/index.php"><span>料金プラン</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price5']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_payment_method.php"><span>お支払い方法</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_sub_item">
                            <span class="spmenu_sub_ttl">オプション</span>
                            <ul class="spmenu_sub_group">
                                <li class="spmenu_list_item<?php if($now_page['price2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_ssl.php"><span>独自SSL</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['price4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_daiko.php"><span>設定おまかせサポート</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['price6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_server_daiko.php"><span>サーバー移転代行</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['domain']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix alone" href="<?php print $SITE_URL; ?>domain/"><span>ドメイン</span><i class="ico ico_chevron-right"></i></a>
                </li>
                <li class="spmenu_list_item<?php if($now_page['flow']||$now_page['order2']||$now_page['order3']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix alone" href="<?php print $SITE_URL; ?>order/index.php"><span>お申し込みの流れ</span><i class="ico ico_chevron-right"></i></a>
                </li>
                <li class="spmenu_list_item<?php if($now_page['manual']||$now_page['support']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>サポート</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['support2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/faq/index.php"><span>よくある質問</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['manual']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>manual/"><span>マニュアル</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://community.xserver.ne.jp/" target="_blank"><span>コミュニティ</span><i class="ico ico_new-window"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/information.php"><span>障害・メンテナンス情報</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/index.php"><span>お問い合わせ</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['business2']||$now_page['business3']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>法人</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['business1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/" target="_blank"><span>法人向けレンタルサーバー</span><i class="ico ico_new-window"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>comparison/"><span>レンタルサーバー選び方ガイド</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>largecontracts.php"><span>大口契約のご相談</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['business4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/partner/" target="_blank"><span>取次制度（パートナープログラム）</span><i class="ico ico_new-window"></i></a></li>
                    </ul>
                </li>
            </ul>

            <div class="spmenu_btns">
                <ul class="clearfix">
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>privacy.php">プライバシ−ポリシー<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>rule/rule.php">利用規約<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>sitemap.php">サイトマップ<i class="ico ico_chevron-right"></i></a></li>
                    <li class="spmenu_btns_item"><a class="spmenu_btns_label" href="<?php print $SITE_URL; ?>company.php">会社概要<i class="ico ico_chevron-right"></i></a></li>
                </ul>
            </div>

            <a id="spmenu_close_menu" class="spmenu_close"><i class="ico ico_cross"></i>メニューを閉じる</a>

        </div>
        <!-- /#spmenu_main -->
    </div>

</header>
<!-- /#header -->
