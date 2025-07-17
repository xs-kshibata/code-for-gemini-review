

<footer id="footer">
    <div class="holder-sml">
        <div class="footerColumn1">
            <ul class="spmenu_list">
                <li class="spmenu_list_item<?php if($now_page['feature']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>特長</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['feature1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/index.php"><span>特長一覧</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/pricing_plan.php"><span>シンプルな料金体系</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature7']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress_reasons.php"><span>WordPress運営に強い</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/wordpress.php"><span>人気テーマCocoonを開発・提供</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/feedback.php"><span>お客様の声</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature5']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/testsite.php"><span>テストサイト</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['feature6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>feature/case.php"><span>利用事例</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['functions']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>機能</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['functions1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/index.php"><span>機能一覧</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_ssl.php"><span>独自SSL</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/wptheme.php"><span>WordPressテーマ</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xaccelerator.php"><span>Xアクセラレータ</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/xpagespeed.php"><span>XPageSpeed</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions5']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_server.php"><span>サーバーパネル</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions7']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_webfont.php"><span>Webフォント</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['functions8']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>functions/service_backup.php"><span>バックアップ</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['price'] && !$now_page['price3']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>料金</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['price1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/index.php"><span>料金プラン</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price5']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_payment_method.php"><span>お支払い方法</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/price_ssl.php"><span>独自SSL</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_daiko.php"><span>設定おまかせサポート</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['price6']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>price/service_server_daiko.php"><span>サーバー移転代行</span><i class="ico ico_chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_column">
                    <ul class="spmenu_list_column_inner">
                        <li class="spmenu_list_item<?php if($now_page['price3']) print ' is-current'; ?>">
                            <a class="spmenu_list_label clearfix"><span>ドメイン</span><i class="ico ico_plus"></i></a>
                            <ul class="spmenu_list spmenu_list_sub">
                                <li class="spmenu_list_item<?php if($now_page['price3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>domain/"><span>ドメイン</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                        <li class="spmenu_list_item registry<?php if($now_page['order']) print ' is-current'; ?>">
                            <a class="spmenu_list_label clearfix"><span>お申し込みの流れ</span><i class="ico ico_plus"></i></a>
                            <ul class="spmenu_list spmenu_list_sub">
                                <li class="spmenu_list_item<?php if($now_page['order1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>order/index.php"><span>お申し込みの流れ</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span>サーバーお申し込みフォーム</span><i class="ico ico_new-window"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['order2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>order/whois.php"><span>ドメイン取得フォーム</span><i class="ico ico_chevron-right"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="spmenu_list_item<?php if($now_page['manual']||$now_page['support']) print ' is-current'; ?>">
                    <a class="spmenu_list_label clearfix"><span>サポート</span><i class="ico ico_plus"></i></a>
                    <ul class="spmenu_list spmenu_list_sub">
                        <li class="spmenu_list_item<?php if($now_page['support2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/faq/index.php"><span>よくある質問</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['manual']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>manual/"><span>マニュアル</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="https://community.xserver.ne.jp/" target="_blank"><span>コミュニティ</span><i class="ico ico_new-window"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support4']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/news.php"><span>ニュース</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support3']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/information.php"><span>障害・メンテナンス情報</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item<?php if($now_page['support1']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>support/index.php"><span>お問い合わせ</span><i class="ico ico_chevron-right"></i></a></li>
                        <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>consulting/" target="_blank"><span>ホームページ制作相談（無料）</span><i class="ico ico_new-window"></i></a></li>
                    </ul>
                </li>
                <li class="spmenu_list_column">
                    <ul class="spmenu_list_column_inner">
                        <li class="spmenu_list_item<?php if($now_page['business']) print ' is-current'; ?>">
                            <a class="spmenu_list_label clearfix"><span>法人</span><i class="ico ico_plus"></i></a>
                            <ul class="spmenu_list spmenu_list_sub">
                                <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/" target="_blank"><span>法人向けレンタルサーバー</span><i class="ico ico_new-window"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>comparison/"><span>レンタルサーバー選び方ガイド</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>largecontracts.php"><span>大口契約のご相談</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item<?php if($now_page['business2']) print ' is-current'; ?>"><a class="spmenu_list_label clearfix" href="https://business.xserver.ne.jp/partner/" target="_blank"><span>取次制度（パートナープログラム）</span><i class="ico ico_new-window"></i></a></li>
                            </ul>
                        </li>
                        <li class="spmenu_list_item registry<?php if($now_page['etc']) print ' is-current'; ?>">
                            <a class="spmenu_list_label clearfix"><span>その他</span><i class="ico ico_plus"></i></a>
                            <ul class="spmenu_list spmenu_list_sub">
                                <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="<?php print $SITE_URL; ?>friend.php"><span>お友達紹介プログラム</span><i class="ico ico_chevron-right"></i></a></li>
                                <li class="spmenu_list_item"><a class="spmenu_list_label clearfix" href="https://www.xserver.co.jp/recruit/" target="_blank"><span>採用情報</span><i class="ico ico_new-window"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
<!--            <aside class="related-site">-->
<!--                <ul class="holder-ml">-->
<!--                    <li><a class="hover" href="https://www.xserver.co.jp/recruit/" target="_blank" rel="nofollow"><img loading="lazy" class="srcset" src="--><?php //print $SITE_URL; ?><!--img/common/bnr_recruiting_l.png" alt="エックスサーバー株式会社 採用サイト" width="190" height="52"></a></li>-->
<!--                    <li><a class="hover" href="--><?php //print $SITE_URL; ?><!--friend.php"><img loading="lazy" src="--><?php //print $SITE_URL; ?><!--img/common/bnr_friend_l.png?date=240604" alt="お友達紹介プログラム" width="190" height="52"></a></li>-->
<!--                    <li><a class="hover" href="https://business.xserver.ne.jp/partner/" target="_blank"><img loading="lazy" src="--><?php //print $SITE_URL; ?><!--img/common/bnr_partner.png?date=2410" alt="ビジネスパートナープログラム" width="190" height="52"></a></li>-->
<!--                </ul>-->
<!--            </aside>-->
        </div>
        <!-- /.related-site -->
        <div class="footer-pr-area">
            <dl class="pr-area">
                <div class="pr-area-item">
                    <dt><a href="https://www.xserver.co.jp/company_security.php" target="_blank" rel="nofollow"><img src="<?= $SITE_URL ?>img/common/img_isms.png" alt="ISMSのロゴ" width="174" height="80"></a></dt>
                    <dd>ISMS（情報セキュリティマネジメントシステム）認証基準の国際規格「ISO/IEC 27001:2013」を取得しています。</dd>
                </div>
                <div class="pr-area-item">
                    <dt><a href="https://privacymark.jp/" target="_blank" rel="nofollow"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_privacymark.png?date=240228" alt="プライバシーマーク" width="80" height="80"></a></dt>
                   <dd>JIPDECのプライバシーマーク認証を取得し、個人情報の保護に努めています。</dd>
                </div>
                <div class="pr-area-item pr-siteseal">
                    <dt><script type="text/javascript" src="//seal.securecore.co.jp/js/ss_130-50.js" defer="defer"></script><noscript><img src="//seal.securecore.co.jp/image/noscript_130x50.png"></noscript></dt>
                    <dd>クラウドセキュアのサイトシールは安心の証です。</dd>
                </div>
            </dl>
        </div>

        <div id="number1">
            <ul class="footer_note" id="annotation-list01">
                <li>自社サービスの合計値</li>
                <li>独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="https://www.xserver.ne.jp/manual/man_order_present_domain.php">こちら</a>を参照してください。</li>
                <li>2025年4月、Dataprovider.com 調べ。国内でWordPressを利用して運用されているサイト数を調査した結果によるもの。</li>
            </ul>
        </div>

        <div class="footer_siteid"><a class="hover" href="<?php print $SITE_URL; ?>"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_siteid.svg?date=240930" alt="レンタルサーバー エックスサーバー" width="286" height="23"></a></div>

        <nav class="footer-nav">
            <div class="footer-nav-wrap">
                <ul class="footer-link">
                    <li class="list-1"><a href="<?php print $SITE_URL; ?>privacy.php"><span>プライバシーポリシー</span></a></li>
                    <li class="list-3"><a href="<?php print $SITE_URL; ?>sitepolicy.php"><span>当サイトのご利用について</span></a></li>
                    <li class="list-4"><a href="<?php print $SITE_URL; ?>rule/rule.php"><span>利用規約</span></a></li>
                    <li class="list-4"><a href="<?php print $SITE_URL; ?>rule_wptheme.php"><span>WordPressテーマ利用規約</span></a></li>
                    <li class="list-2"><a href="<?php print $SITE_URL; ?>sitemap.php"><span>サイトマップ</span></a></li>
                    <li class="list-4"><a href="<?php print $SITE_URL; ?>company.php"><span>会社概要</span></a></li>
					<li class="list-4"><a href="<?php print $SITE_URL; ?>info/logo-guideline/">著作物の使用について</a></li>
                    <li class="list-4"><a href="<?php print $SITE_URL; ?>affiliate.php">アフィリエイト</a></li>
                </ul>
                <ul class="footer-socialLink">
                    <li><a class="hover" href="https://www.facebook.com/xserver.co.jp/" target="_blank" rel="nofollow"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/ico_sns_facebook.svg" alt="Facebook" width="32" height="32"></a></li>
                    <li><a class="hover" href="https://x.com/xserverjp" target="_blank" rel="nofollow"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/ico_sns_x.svg" alt="X" width="32" height="32"></a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="copyright">&copy; 2003-<?php print date("Y", time()); ?> XServer Inc.</div>
</footer>
<!-- /#footer -->

<aside class="related-service">
    <div class="holder-sml">
        <ul>
            <li><a href="https://www.xserver.ne.jp/" target="_blank" rel="nofollow">高速・安定レンタルサーバー</a></li>
            <li><a href="https://business.xserver.ne.jp/" target="_blank" rel="nofollow">法人向けレンタルサーバー</a></li>
            <li><a href="https://vps.xserver.ne.jp/" target="_blank" rel="nofollow">VPS・仮想専用サーバー</a></li>
            <li><a href="https://www.xdomain.ne.jp/" target="_blank" rel="nofollow">ドメイン</a></li>
            <li><a href="https://business.xserver.ne.jp/lp/dedicated_server/" target="_blank" rel="nofollow">法人向け専用サーバー</a></li>
            <li><a href="https://ssl.xdomain.ne.jp/" target="_blank" rel="nofollow">SSL証明書</a></li>
            <li><a href="https://drive.xserver.ne.jp/" target="_blank" rel="nofollow">法人向け高速クラウドストレージ</a></li>
            <li><a href="https://shop.xserver.ne.jp/" target="_blank" rel="nofollow">ネットショップ作成</a></li>
            <li><a href="https://vps.xserver.ne.jp/windows-server.php" target="_blank" rel="nofollow">Windowsサーバー</a></li>
            <li><a href="https://vps.xserver.ne.jp/game-server/" target="_blank" rel="nofollow">ゲーム専用VPS</a></li>
            <li><a href="https://vps.xserver.ne.jp/gpu.php" target="_blank" rel="nofollow">GPUサーバー</a></li>
            <li><a href="https://www.cloudpc.ne.jp/" target="_blank" rel="nofollow">仮想デスクトップ</a></li>
            <li><a href="https://sns.xserver.ne.jp/" target="_blank" rel="nofollow">SNS構築サービス</a></li>
            <li><a href="https://games.xserver.ne.jp/" target="_blank" rel="nofollow">マルチプレイ専用ゲームサーバー</a></li>
            <li><a href="https://static.xserver.ne.jp/" target="_blank" rel="nofollow">静的ホスティング</a></li>
            <li><a href="https://www.xserver.ne.jp/functions/wptheme.php">WordPressテーマ</a></li>
            <li><a href="https://sitesec.xserver.ne.jp/">セキュリティ診断</a></li>
        </ul>
    </div>
</aside>
<!-- /.related-service -->

<?php if(
$now_page['manual'] === false  &&
$now_page['support1'] === false  &&
$now_page['support2'] === false  &&
$now_page['support5'] === false
) { ?>

<!-- /キャッシュレス施策 -->
<script>
window.addEventListener('DOMContentLoaded', function(){
	$('.cashless-del').click(function() {
		$('.js-cashlessBox').addClass('is--none');
		document.cookie = 'cashlessmodal=1;max-age=86400;path=/';
	});
    if(document.cookie.match('cashlessmodal=1') == undefined){
        $('.js-cashlessBox').show();
    }
    if(document.cookie.match('xserverjp_intropg=1')){
        $('.cashless-pr-default').show();
        $('.cashless-pr-friend').show();
    }
})
</script>


<div class="cashless js-cashlessBox" style="display:none;">
    <div class="cashless-pr-default">
        <p class="cashless-pr">お申し込みは今がお得！</p>
        <a href="<?php print $SITE_URL; ?>campaign/campaign_250703.php"><img src="<?php print $SITE_URL; ?>img/campaign/250703/campaign_side_banner.png" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！" width="180" height="156"></a>
    </div>

    <?/* <div class="cashless-pr-friend" style="display:none;">
        <p class="cashless-pr">友達紹介でさらにお得！</p>
        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><img src="<?php print $SITE_URL; ?>img/campaign/friend/campaign_side_banner.png?date=230810" alt="お友達紹介プログラム 利用料金最大10,000円割引" width="180" height="156"></a>
    </div> */ ?>
    <a class="button campaign-add" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">
        お申し込みはこちら<i class="ico ico_new-window"></i>
    </a>
    <p class="cashless-del"><span></span></p>
</div>
<!-- キャッシュレス施策/ -->

<a href="#wrapper" id="pagetop-btn"><i class="ico ico_chevron-up"></i><span>ページの先頭へ</span></a>

<?php } ?>
