<aside class="trial-footer">
    <p class="trial-footer_txt">全サーバープラン<br class="visible-s">10日間の無料お試しつき！</p>

    <div class="trial-footer_btn">
        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" id="ga-apply-footer" class="trial-footer_btn_link" target="_blank">
            <div class="campaign-balloon">
                <div class="campaign-balloon_body">
                    <span class="campaign-pr pl15 pr15">半額キャッシュバック！実質495円〜</span>
                    <span class="campaign-limit"><span>9/4まで</span></span>
                </div>
            </div>
            <span class="trial-footer_btn_txt">お申し込みはこちら</span>
        </a>
    </div>
    <p class="trial-footer_flow-link-sub"><i class="ico ico_chevron-right"></i><a href="<?php print $SITE_URL; ?>order">お申し込みの流れについて</a></p>
</aside>
<!-- /.trial -->

<?php if(
    $FILE_PATH !=="support/index.php" &&
    $FILE_PATH !=="support/support.php" &&
    $FILE_PATH !=="support/confirm.php" &&
    $FILE_PATH !=="support/finish.php") { ?>

<?php
    $help_type = 0;
    // 通常のサポートコンテンツを表示させる場合：0
    // 縮小版のサポートコンテンツを表示させる場合：1（0以外の数値）
?>

<?php
    if ($help_type == 0) {
?>
    <aside class="tel-footer">
       <div class="holder-sml">
           <div class="tel-footer_body">
               <section class="tel_content tel_content_block">
                   <h2 class="tel_content_ttl">お電話でのお問い合わせ</h2>
                   <p class="tel_content_info">受付時間 平日 10:00〜18:00</p>
               </section>

               <?php if(0 === strpos($FILE_PATH,"support")) ://サポート配下のみ ?>
                   <section class="tel_content">
                       <ul class="tel_content_numberblock">
                           <li>
                               <p class="numberblock_category">ご契約中のお客様はこちら</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone.svg" alt="06-6147-2580" width="212" height="22"></p>
                           </li>
                           <li>
                               <p class="numberblock_category">新規ご契約に関する相談窓口</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone_free.svg" alt="0120-183-002" width="212" height="22">
                               </p>
                           </li>
                       </ul>
                   </section>
               <?php else : //通常 ?>
                   <section class="tel_content">
                       <ul class="tel_content_numberblock">
                           <li>
                               <p class="numberblock_category">ご契約中のお客様はこちら</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone.svg" alt="06-6147-2580" width="212" height="22"></p>
                           </li>
                           <li>
                               <p class="numberblock_category">新規ご契約に関する相談窓口</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone_free.svg" alt="0120-183-002" width="212" height="22"></p>
                           </li>
                       </ul>
                   </section>
               <?php endif; ?>

           </div>
       </div>
    </aside>

    <aside class="help">
       <div class="holder-sml">
           <section class="help_content help_content_emailblock">
               <div class="help_contentHeader">
                   <h2 class="help_content_ttl">メール・チャットでのお問い合わせ</h2>
                   <p class="help_content_info"><span class="help_content_info_ttl">メール</span>：24時間365日受付<br><span class="help_content_info_ttl">チャット</span>：平日10:00〜18:00</p>
               </div>
               <ul class="help_content_btns">
                   <li><a href="<?php print $SITE_URL; ?>support/" class="button button02--width-md">お問い合わせ</a></li>
               </ul>
               <div class="help_content_note">
                   <p class="font-s note">※電話・チャットサポートは内容により、メールでのお問い合わせをお願いする場合があります。</p>
               </div>
           </section>
           <section class="help_content help_content_supportblock">
               <div class="help_contentHeader">
                   <h2 class="help_content_ttl">サポートコンテンツ</h2>
                   <p class="help_content_info">お問い合わせの前に一度ご確認ください</p>

               </div>
               <ul class="help_content_btns">
                   <li><a href="<?php print $SITE_URL; ?>support/faq" class="button button02--width-md">よくある質問</a></li>
                   <li><a href="<?php print $SITE_URL; ?>manual" class="button button02--width-md">マニュアル</a></li>
				   <li><a href="https://community.xserver.ne.jp/" class="button button02--width-md">コミュニティ</a></li>
               </ul>
           </section>
       </div>
    </aside>
    <!-- /.help_normal -->

<?php
    } else {
?>

    <aside class="help help-s">
        <div class="holder-sml">
            <section class="help_content help_content_new">
                <div class="help_contentHeader">
                    <h2 class="help_content_ttl">新規ご契約・ご相談のお客様</h2>
                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/support.php" class="button button02--width-md"> ご相談・お問い合わせ</a></li>
                </ul>
            </section>
            <section class="help_content help_content_existing">
                <div class="help_contentHeader">
                    <h2 class="help_content_ttl">ご利用中のお客様</h2>
                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/" class="button button02--width-md"> サポート・ご相談窓口</a></li>
                </ul>
            </section>
            <section class="help_content help_content_supportblock">
                <div class="help_contentHeader">
                    <h2 class="help_content_ttl">サポートコンテンツ</h2>
                    <p class="help_content_info">お問い合わせの前に一度ご確認ください</p>

                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/faq" class="button button02--width-md">よくある質問</a></li>
                    <li><a href="<?php print $SITE_URL; ?>manual" class="button button02--width-md">マニュアル</a></li>
					<li><a href="https://community.xserver.ne.jp/" class="button button02--width-md community" target="_blank">コミュニティ</a></li>
                </ul>
            </section>
        </div>
    </aside>
<?php } ?>

<?php } ?>
<!-- /.help -->

<aside class="beginner">
    <p class="beginner__ttl"><span>これからはじめる方へ</span></p>
    <div class="holder-sml">
        <ul class="beginner__link">
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>price/service_server_daiko.php"><img class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_daiko_s.png?date=20240917" alt="サーバー移転代行" width="170" height="60"></a></li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>manual/man_how_to_start_wpblog.php"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_wpblog_l.png" alt="WordPressブログの始め方" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>order/order_transfer_server.php"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_transfer_l.png" alt="サーバー移転手順" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>blog/"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_blog_l.png" alt="初心者のためのブログ始め方講座" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>bizhp/"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_hp_l.png" alt="初心者のための会社ホームページ作り方講座" width="170" height="60"></a>
            </li>
        </ul>
    </div>
</aside>