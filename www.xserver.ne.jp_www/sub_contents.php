<aside class="trial-footer">
    <p class="trial-footer_txt">�������С��ץ��<br class="visible-s">10���֤�̵������Ĥ���</p>

    <div class="trial-footer_btn">
        <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" id="ga-apply-footer" class="trial-footer_btn_link" target="_blank">
            <div class="campaign-balloon">
                <div class="campaign-balloon_body">
                    <span class="campaign-pr pl15 pr15">Ⱦ�ۥ���å���Хå����¼�495�ߡ�</span>
                    <span class="campaign-limit"><span>9/4�ޤ�</span></span>
                </div>
            </div>
            <span class="trial-footer_btn_txt">���������ߤϤ�����</span>
        </a>
    </div>
    <p class="trial-footer_flow-link-sub"><i class="ico ico_chevron-right"></i><a href="<?php print $SITE_URL; ?>order">���������ߤ�ή��ˤĤ���</a></p>
</aside>
<!-- /.trial -->

<?php if(
    $FILE_PATH !=="support/index.php" &&
    $FILE_PATH !=="support/support.php" &&
    $FILE_PATH !=="support/confirm.php" &&
    $FILE_PATH !=="support/finish.php") { ?>

<?php
    $help_type = 0;
    // �̾�Υ��ݡ��ȥ���ƥ�Ĥ�ɽ���������硧0
    // �̾��ǤΥ��ݡ��ȥ���ƥ�Ĥ�ɽ���������硧1��0�ʳ��ο��͡�
?>

<?php
    if ($help_type == 0) {
?>
    <aside class="tel-footer">
       <div class="holder-sml">
           <div class="tel-footer_body">
               <section class="tel_content tel_content_block">
                   <h2 class="tel_content_ttl">�����äǤΤ��䤤��碌</h2>
                   <p class="tel_content_info">���ջ��� ʿ�� 10:00��18:00</p>
               </section>

               <?php if(0 === strpos($FILE_PATH,"support")) ://���ݡ����۲��Τ� ?>
                   <section class="tel_content">
                       <ul class="tel_content_numberblock">
                           <li>
                               <p class="numberblock_category">��������Τ����ͤϤ�����</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone.svg" alt="06-6147-2580" width="212" height="22"></p>
                           </li>
                           <li>
                               <p class="numberblock_category">����������˴ؤ����������</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone_free.svg" alt="0120-183-002" width="212" height="22">
                               </p>
                           </li>
                       </ul>
                   </section>
               <?php else : //�̾� ?>
                   <section class="tel_content">
                       <ul class="tel_content_numberblock">
                           <li>
                               <p class="numberblock_category">��������Τ����ͤϤ�����</p>
                               <p class="numberblock_number"><img loading="lazy" src="<?php print $SITE_URL; ?>img/common/img_help_phone.svg" alt="06-6147-2580" width="212" height="22"></p>
                           </li>
                           <li>
                               <p class="numberblock_category">����������˴ؤ����������</p>
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
                   <h2 class="help_content_ttl">�᡼�롦����åȤǤΤ��䤤��碌</h2>
                   <p class="help_content_info"><span class="help_content_info_ttl">�᡼��</span>��24����365������<br><span class="help_content_info_ttl">����å�</span>��ʿ��10:00��18:00</p>
               </div>
               <ul class="help_content_btns">
                   <li><a href="<?php print $SITE_URL; ?>support/" class="button button02--width-md">���䤤��碌</a></li>
               </ul>
               <div class="help_content_note">
                   <p class="font-s note">�����á�����åȥ��ݡ��Ȥ����Ƥˤ�ꡢ�᡼��ǤΤ��䤤��碌�򤪴ꤤ�����礬����ޤ���</p>
               </div>
           </section>
           <section class="help_content help_content_supportblock">
               <div class="help_contentHeader">
                   <h2 class="help_content_ttl">���ݡ��ȥ���ƥ��</h2>
                   <p class="help_content_info">���䤤��碌�����˰��٤���ǧ��������</p>

               </div>
               <ul class="help_content_btns">
                   <li><a href="<?php print $SITE_URL; ?>support/faq" class="button button02--width-md">�褯�������</a></li>
                   <li><a href="<?php print $SITE_URL; ?>manual" class="button button02--width-md">�ޥ˥奢��</a></li>
				   <li><a href="https://community.xserver.ne.jp/" class="button button02--width-md">���ߥ�˥ƥ�</a></li>
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
                    <h2 class="help_content_ttl">���������󡦤����̤Τ�����</h2>
                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/support.php" class="button button02--width-md"> �����̡����䤤��碌</a></li>
                </ul>
            </section>
            <section class="help_content help_content_existing">
                <div class="help_contentHeader">
                    <h2 class="help_content_ttl">��������Τ�����</h2>
                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/" class="button button02--width-md"> ���ݡ��ȡ����������</a></li>
                </ul>
            </section>
            <section class="help_content help_content_supportblock">
                <div class="help_contentHeader">
                    <h2 class="help_content_ttl">���ݡ��ȥ���ƥ��</h2>
                    <p class="help_content_info">���䤤��碌�����˰��٤���ǧ��������</p>

                </div>
                <ul class="help_content_btns">
                    <li><a href="<?php print $SITE_URL; ?>support/faq" class="button button02--width-md">�褯�������</a></li>
                    <li><a href="<?php print $SITE_URL; ?>manual" class="button button02--width-md">�ޥ˥奢��</a></li>
					<li><a href="https://community.xserver.ne.jp/" class="button button02--width-md community" target="_blank">���ߥ�˥ƥ�</a></li>
                </ul>
            </section>
        </div>
    </aside>
<?php } ?>

<?php } ?>
<!-- /.help -->

<aside class="beginner">
    <p class="beginner__ttl"><span>���줫��Ϥ��������</span></p>
    <div class="holder-sml">
        <ul class="beginner__link">
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>price/service_server_daiko.php"><img class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_daiko_s.png?date=20240917" alt="�����С���ž���" width="170" height="60"></a></li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>manual/man_how_to_start_wpblog.php"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_wpblog_l.png" alt="WordPress�֥��λϤ���" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>order/order_transfer_server.php"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_transfer_l.png" alt="�����С���ž���" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>blog/"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_blog_l.png" alt="�鿴�ԤΤ���Υ֥��Ϥ����ֺ�" width="170" height="60"></a>
            </li>
            <li class="beginner__item">
                <a class="hover" href="<?php print $SITE_URL; ?>bizhp/"><img loading="lazy" class="srcset" src="<?php print $SITE_URL; ?>img/common/bnr_beginner_hp_l.png" alt="�鿴�ԤΤ���β�ҥۡ���ڡ���������ֺ�" width="170" height="60"></a>
            </li>
        </ul>
    </div>
</aside>