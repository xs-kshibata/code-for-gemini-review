<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<?php require_once("price_list.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>料金プラン比較 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="料金プランについて、主要な機能や価格の違いを比較できます。月額料金は契約期間に応じて安くなるので、その違いを料金シミュレーションでご確認ください。">

</head>

<body id="pid-price">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-price"><i class="ico ico_tag"></i>料金</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">料金プラン</span></p>
        <aside class="bnr">
            <p class="tac font-bold mb5 font-l">＼ <span class="orange">9/4(木)17時まで！</span>／</p>
            <div class="mb25">
                <a id="ga-xs-under-cpBnr" href="../campaign/campaign_250703.php"><img class="hover fluid-sm" src="../img/campaign/250703/campaign_banner_772-130.png" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！"></a>
            </div>
        </aside>

        <section class="section pricePagelink">
            <ul>
                <li>
                    <a href="#planComparison" class="button button01">
                        <img src="../img/price/pricepagelink_ico_01.svg" alt="">
                        <span>プラン比較</span>
                    </a>
                </li>
                <li>
                    <a href="#priceList" class="button button01">
                        <img src="../img/price/pricepagelink_ico_02.svg" alt="">
                        <span>料金表</span>
                    </a>
                </li>
                <li>
                    <a href="#priceSimulation" class="button button01">
                        <img src="../img/price/pricepagelink_ico_03.svg" alt="">
                        <span>料金シミュレーション<br>・お見積り</span>
                    </a>
                </li>
            </ul>
        </section>

        <section class="section section--price" id="planComparison">
            <h3 class="section_ttl mb10">プラン比較</h3>
            <div class="section_body">
                <p class="mb5 tar font-s">（税込）</p>

                <table class="table runningTable<?php if ( $runningCpFlag01 ) echo ' is--runningCp01'; if ( $runningCpFlag02 ) echo ' is--runningCp02';  ?>">
                    <thead class="runningTable__head">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" class="cell_plan standard">スタンダード</th>
                            <th scope="col" class="cell_plan premium">プレミアム</th>
                            <th scope="col" class="cell_plan business">ビジネス</th>
                        </tr>
                        <tr class="tr_desc">
                            <th scope="col"></th>
                            <th scope="col">コスパに優れた<br>人気プラン</th>
                            <th scope="col">大規模サイトの<br>運営におすすめ</th>
                            <th scope="col">管理者ユーザー設定など<br>法人向け</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr_monthlyPrice">
                            <th class="row">
                                <div class="th_priceTxt th_monthlyPriceInr">月額料金
                                    <?php if ( $runningCpFlag ) echo '<span class="txtCpBalloon">キャンペーン中!</span>'; ?>
                                </div>
                            </th>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="スタンダード">
                                    <span class="runningPrice">
                                        <?php if ($standardPlans['36']['cpType'] === 1): // 割引きCP時 ?>
                                            <s><?php echo $standard36Price; ?>円〜</s><br class="hidden-s">
                                                    <span class="runningPriceArrow visible-s"> → </span>
                                                    <span class="runningPrice--cp"><?php echo $standard36PriceCp; ?><span class="font-m">円〜</span></span>
                                        <?php elseif ($standardPlans['36']['cpType'] === 2): // キャッシュバックCP時 ?>
                                            <?php echo $standard36Price; ?>円〜<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">キャッシュバックで</span><br>
                                                <span class="font-l">【実質<?php echo $standard36PriceCp; ?>円〜】</span>
                                            </span>
                                        <?php else: // 通常時 ?>
                                            <span class="runningPrice--usual"><?php echo $standard36Price; ?><span class="font-m">円〜</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="プレミアム">
                                    <span class="runningPrice">
                                        <?php if ($premiumPlans['36']['cpType'] === 1): // 割引きCP時 ?>
                                            <s><?php echo $premium36Price; ?>円〜</s><br class="hidden-s">
                                            <span class="runningPriceArrow visible-s"> → </span>
                                            <span class="runningPrice--cp"><?php echo $premium36PriceCp; ?><span class="font-m">円〜</span></span>
                                        <?php elseif ($premiumPlans['36']['cpType'] === 2): // キャッシュバックCP時 ?>
                                            <?php echo $premium36Price; ?>円〜<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">キャッシュバックで</span><br>
                                                <span class="font-l">【実質<?php echo $premium36PriceCp; ?>円〜】</span>
                                            </span>
                                        <?php else: // 通常時 ?>
                                            <span class="runningPrice--usual"><?php echo $premium36Price; ?><span class="font-m">円〜</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="ビジネス">
                                    <span class="runningPrice">
                                        <?php if ($businessPlans['36']['cpType'] === 1): // 割引きCP時 ?>
                                            <s><?php echo $business36Price; ?>円〜</s><br class="hidden-s">
                                            <span class="runningPriceArrow visible-s"> → </span>
                                            <span class="runningPrice--cp"><?php echo $business36PriceCp; ?><span class="font-m">円〜</span></span>
                                        <?php elseif ($businessPlans['36']['cpType'] === 2): // キャッシュバックCP時 ?>
                                            <?php echo $business36Price; ?>円〜<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">キャッシュバックで</span><br>
                                                <span class="font-l">【実質<?php echo $business36PriceCp; ?>円〜】</span>
                                            </span>
                                        <?php else: // 通常時 ?>
                                            <span class="runningPrice--usual"><?php echo $business36Price; ?><span class="font-m">円〜</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="th_diskTxt">ディスク容量</div>
                            </th>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="スタンダード">
                                    <span class="runningPrice">500<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="プレミアム">
                                    <span class="runningPrice">600<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="ビジネス">
                                    <span class="runningPrice">700<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="balloon">WordPress
                                    <span class="tooltip">
                                        <i class="imgico imgico_question tooltip_target"></i>
                                        <span class="tooltip_content">非常に高い人気を持つプログラムで、簡単にブログやWebサイトの作成ができます。</span>
                                    </span>
                                </div>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">WordPressリカバリー
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">WordPressで起こった問題に対して、復旧やリセットを行うことができます。</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">サーバーデータ<br class="hidden-s">自動バックアップ
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サーバー上のデータを毎日自動でバックアップし、サーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持しています。<br>
                                        バックアップデータは、復旧用のデータなどとしてご利用可能です。</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">無料独自SSL
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">独自ドメインやサブドメインを用いて、サーバーとユーザ間のデータを暗号化することができます。当サーバーで運営中のドメインに対して無料・無制限で独自SSLを利用することが可能です。<br>
                                    詳細は「<a href="../functions/service_ssl.php#free-ssl">無料独自SSL</a>」をご参照ください。</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">管理者ユーザー設定
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ドメインごとに複数人でのサーバー管理が可能です。管理者ユーザーには業務内容に応じた権限を設定することができます。</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice">&times;</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice">&times;</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="あり" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">設定おまかせサポート
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サーバーパネルで提供する各機能の設定を弊社のエンジニアスタッフが代行します。（オプションサービス）</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice">有料</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice">有料</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="red runningPrice">無料</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">独自ドメイン<br class="hidden-s">永久無料特典
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">
                                        <span>下記の中から独自ドメインを2つ無料でプレゼント！</span><br><br>
                                        <b>スタンダードの場合</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site のいずれか</span><br><br>
                                        <b>プレミアムの場合</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> のいずれか</span><br><br>
                                        <b>ビジネスの場合</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> / <span class="orange">.co.jp</span>※ / <span class="orange">.or.jp</span>※ / <span class="orange">.ne.jp</span>※ / <span class="orange">.gr.jp</span>※ のいずれか</span><br><br>
                                        ※新規取得には<a href="../manual/man_order_present_domain.php#link-c">取得条件</a>があります。<br><br>
                                        <span>
                                            プレゼントされたドメインは契約期間中の間ずっと無料！<br>
                                            詳細は「<a href="../manual/man_order_present_domain.php">独自ドメイン永久無料特典</a>」をご参照ください。
                                        </span>
                                    </span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="スタンダード"><span class="runningPrice">２つ<br><span class="font-s disp-ib">.com.netなど<br>人気ドメイン<span class="red">11種類</span>から<br class="hidden-s">選択可能</span></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="プレミアム"><span class="runningPrice">２つ<br><span class="font-s disp-ib">.jpなど<br>人気ドメイン<span class="red">12種類</span>から<br class="hidden-s">選択可能</span></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="ビジネス"><span class="runningPrice">２つ<br><span class="font-s disp-ib">.co.jpなど<br>人気ドメイン<span class="red">16種類</span>から<br class="hidden-s">選択可能</span></span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="buttonGroup buttonGroup--center mt20">
                    <div>
                        <a class="button button01--width-xl" href="../functions/">機能一覧はこちら</a>
                    </div>
                    <div>
                        <a id="ga-x-apply-page-price-01" class="button buttonCta--width-xl" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">まずは10日間無料お試し</a>
                    </div>
                </div>

                <?php generateNote(); ?>
            </div>
            <p class="note mb0">※独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="../manual/man_order_present_domain.php">こちら</a>を参照してください。</p>
        </section>

        <!-- /.section -->

        <section class="section section--price" id="priceList">
            <h3 class="section_ttl mb10">料金表</h3>
            <div class="section_body">
                <p class="mb5 tar font-s">（税込）</p>
                <?php generateTable('runningTable'); ?>

                <div class="buttonGroup buttonGroup--center mt20">
                    <div>
                        <a id="ga-x-apply-page-price-02" class="button buttonCta--width-xl" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">まずは10日間無料お試し</a>
                    </div>
                </div>

                <?php generateNote(); ?>
            </div>
            <p class="note mb0">※「月額料金」はご契約期間分の料金を1ヶ月あたりに換算した金額です。</p>
            <p class="note">※お支払いはご契約期間分の一括前払いとなります。</p>
        </section>
        <!-- /.section -->
        
        <section class="section section--price" id="priceSimulation">
            <h3 class="section_ttl">料金シミュレーション・お見積り</h3>
            <div class="section_body">
                <p>見積書は、ご希望のプランと契約期間を選択、お宛名入力のうえ、「見積書を発行する」ボタンからダウンロードしていただけます。</p>
                <p class="note">※新規契約の見積書のみ発行可能です。</p>

                <noscript>
                    <div class="msg msg_caution">
                        <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>料金シミュレーションを行うには、お使いのブラウザでJavaScriptを有効に設定してください。</h4>
                    </div>
                </noscript>

                <div id="simulation" class="simulation<?php if ( $runningCpFlag01 ) echo ' is--runningCp01'; if ( $runningCpFlag02 ) echo ' is--runningCp02'; if ( $initialCpFlag ) echo ' is--initialCp'; ?>">
                    <ul class="sim__nav" id="js-sim__nav">
                        <li class="sim__nav__item sim__nav__item--active"><a href="#beginning" class="sim__nav__label">初めての方</a></li>
                        <li class="sim__nav__item"><a href="#contract_renewal" class="sim__nav__label">契約更新の方</a></li>
                    </ul>

                    <div id="beginning" class="sim__target sim__target--active">
                        <div class="sim__body">
                            <div class="sim__item">
                                <p class="sim__item__ttl">プランを選択してください</p>
                                <?php generateSimPlan('beginning'); ?>
                                    <?php /*
                                    <div class="inputForm__body">
                                        <div class="inputForm__body__inr">
                                            <input class="radioForm" type="radio" name="plan" value="standard" id="standard">
                                            <label class="radioLabelForm" for="standard">スタンダード（旧X10）</label>
                                        </div>
                                    </div>
                                    */ ?>
                            </div>

                            <div class="sim__item">
                                <p class="sim__item__ttl">
                                    <span class="sim__item__ttl__main">契約期間を選択してください</span>
                                    <?php if ( $runningCpFlag01 ) echo '<span class="sim__item__runningCpNotes"></span>'?>
                                    <?php if ( $initialCpFlag ) echo '<span class="sim__item__initialCpNotes"></span>'?>
                                </p>
                                <?php generateSimPeriod('beginning'); ?>
                                    <?php /*
                                    <div class="inputForm__body">
                                        <div class="inputForm__body__inr">
                                            <input class="radioForm" type="radio" name="period" value="3" id="3months">
                                            <label class="radioLabelForm" for="3months">3ヶ月<span class="subLabelForm">--円/月</span></label>
                                        </div>
                                    </div>
                                    */ ?>
                            </div>

                            <div class="sim__result">
                                <h4 class="sim__result__ttl">シミュレーション結果</h4>
                                <div class="sim__result__body">
                                    <p class="sim__result__inputNotes">プランと契約期間を選択してください</p>

                                    <div class="sim__resultDetail">
                                        <div class="sim__resultRunning">
                                            <h5 class="sim__resultDetail__ttl">
                                                <span class="sim__resultDetail__ttl__label">契約時</span><span class="js-selectPlan">--プラン</span>
                                            </h5>
                                            <dl class="sim__resultDetail__calc">
                                                <dt>
                                                    契約期間 [ <span class="js-selectPeriod">--ヶ月</span> ] <i class="ico ico_cross"></i> <span class="disp-ib">月額料金 [ <span class="js-selectPrice">--円</span> ]</span>
                                                </dt>
                                                <dd><span class="js-total">--円</span></dd>
                                            </dl>
                                        </div>

                                        <?php /*<div class="sim__resultInitial">
                                            <dl class="sim__resultDetail__calc">
                                                <dt>初期費用（別途）</dt>
                                                <dd><span class="js-initial">--円</span></dd>
                                            </dl>
                                            <p class="sim__resultInitial__notes">※ご契約時にお支払い料金と合算してご請求させていただきます。</p>
                                        </div>*/ ?>

                                        <?php
                                        if ( $runningCpFlag01 ) echo '<p class="sim__resultDetail__runningCpNotes"></p>';
                                        if ( $initialCpFlag ) echo '<p class="sim__resultDetail__initialCpNotes"></p>';
                                        ?>

                                        <div class="sim__result__estimate">
                                            <p>今回のシミュレーション結果を<br>見積書として発行することができます。</p>
                                            <form method="post" action="<?php print $SECURE_URL; ?>xinfo/?action_estimate_index=true" class="estimate_form">
                                                <input type="hidden" value="true" name="action_estimate_index">
                                                <div class="sim__result__estimate__input">
                                                    <input type="text" name="estimate_to" maxlength="255" placeholder="宛名" class="estimate_input" required>
                                                    <select name="suffix">
                                                        <option value="200">御中</option>
                                                        <option value="100">様</option>
                                                    </select>
                                                </div>
                                                <button id="ga-xs-price-estimate" class="btn btn--estimate btn--primary" type="submit">見積書を発行する</button>
                                                <input type="hidden" value="" name="plan_id" id="sim_planId">
                                                <input type="hidden" value="" name="month" id="sim_planMonth">
                                            </form>
                                            <p class="mt30 sim__resultInitial__notes font12">※キャンペーン適用外のお見積書をご希望の場合はサポートまでご連絡ください。メール（PDF形式）で送付いたします。（ご連絡の際は、「お申し込みのサービス・プラン」「ご契約期間」「宛名」を併せてお知らせください。）</p>
                                        </div>

                                        <div class="sim__result__buttonCta">
                                            <p class="sim__result__buttonCta__txt">全サーバープラン10日間の<span class="disp-ib">無料お試しつき！</span></p>
                                            <a class="button buttonCta button--lg" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">お申し込みはこちら</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-s tar mt10">※表示価格は、すべて税込みです。</div>
                    </div><!-- beginning -->

                    <div id="contract_renewal" class="sim__target">
                        <div class="sim__body">
                            <div class="sim__item">
                                <p class="sim__item__ttl">プランを選択してください</p>
                                <?php generateSimPlan('contract_renewal'); ?>
                            </div>

                            <div class="sim__item">
                                <p class="sim__item__ttl">契約期間を選択してください</p>
                                <?php generateSimPeriod('contract_renewal'); ?>
                            </div>

                            <div class="sim__result">
                                <h4 class="sim__result__ttl">シミュレーション結果</h4>
                                <div class="sim__result__body">
                                    <p class="sim__result__inputNotes">プランと契約期間を選択してください</p>

                                    <div class="sim__resultDetail">
                                        <div class="sim__resultRunning">
                                            <h5 class="sim__resultDetail__ttl">
                                                <span class="sim__resultDetail__ttl__label">契約更新時</span><span class="js-selectPlan">--プラン</span>
                                            </h5>
                                            <dl class="sim__resultDetail__calc">
                                                <dt>
                                                    契約期間 [ <span class="js-selectPeriod">--ヶ月</span> ] <i class="ico ico_cross"></i> <span class="disp-ib">月額料金 [ <span class="js-selectPrice">--円</span> ]</span>
                                                </dt>
                                                <dd><span class="js-total">--円</span></dd>
                                            </dl>
                                        </div>

                                        <div class="sim__resultRenewalNote">
                                            <ul class="note-list">
                                                <li>※（ ）：自動更新設定時</li>
                                                <li>※自動更新設定の詳細は「<a href="<?=$SITE_URL?>manual/man_order_pay_method_autopay.php" target="_blank">自動更新設定</a>」をご参照ください。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-s tar mt10">※表示価格は、すべて税込みです。</div>
                    </div><!-- contract_renewal -->
                </div>
            </div>
        </section>

        <?php /* phpから情報を受け取る用 */ ?>
        <input id='price_list' type='hidden' value='<?php
        $data = $PRICE_LIST;
        mb_convert_variables('UTF-8', 'EUC-JP', $data);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $data = mb_convert_encoding($data, 'EUC-JP', 'UTF-8');
        print $data;
        ?>'>
        <input id='initial_list' type='hidden' value='<?php
        $data = $INITIAL_LIST;
        mb_convert_variables('UTF-8', 'EUC-JP', $data);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $data = mb_convert_encoding($data, 'EUC-JP', 'UTF-8');
        print $data;
        ?>'>
        <input id='initial_cp_txt' type='hidden' value='<?php echo $initialCpTxt; ?>'>
        <input id='running_cp_txt' type='hidden' value='<?php echo $runningCpTxt; ?>'>

        <section class="section domain-benefit_box forever_domain">
            <h3 class="section_ttl">独自ドメイン永久無料特典<span>サーバー契約者対象</span></h3>
            <p>サイトやメールなどに用いる独自ドメインが無料でご利用いただけます。</p>

            <h5 class="domain-benefit_subttl">
                <span class="domain-benefit_subttl_sub"><b class="domain-benefit_txt-bold">人気の定番ドメイン</b>が<b class="domain-benefit_txt-bold">2つ永久無料</b>に！</span>
                <span class="domain-benefit_subttl_main"><span class="domain-benefit_target-plan">全プラン対象</span><span class="domain-benefit_domain-name">独自ドメイン永久無料特典</span></span>
            </h5>

            <div class="domain-benefit_domain-more">
                <div class="domain-benefit_domain-more_box">
                    <section class="domain-benefit_domain-more_box_item">
                        <h6 class="domain-benefit_domain-more_box_item_ttl"><span>下記からいずれか2つが、</span><br class="hidden-s hidden-m"><b class="domain-benefit_domain-more_box_item_ttl_marker">サーバーご契約中は永久無料！</b></h6>
                        <ul class="domain-benefit_domain-list">
                            <li><span>.com</span></li>
                            <li><span>.net</span></li>
                            <li><span>.org</span></li>
                            <li><span>.info</span></li>
                            <li><span>.biz</span></li>
                            <li><span>.xyz</span></li>
                            <li><span>.link</span></li>
                            <li><span>.click</span></li>
                            <li><span>.blog</span></li>
                            <li><span>.online</span></li>
                            <li><span>.site</span></li>
                        </ul>
                    </section>

                    <section class="domain-benefit_domain-more_box_item domain-benefit_domain-more_box_item--x30">
                        <h6 class="domain-benefit_domain-more_box_item_ttl"><b class="domain-benefit_domain-more_box_item_ttl_strong">プレミアム・ビジネスプラン</b>なら<br class="hidden-s hidden-m">JPドメインも選択可能</h6>
                        <ul class="domain-benefit_domain-list domain-benefit_domain-list--x30">
                            <li><span>.jp</span></li>
                            <li><span>.co.jp<span class="font-xs">※</span></span></li>
                            <li><span>.or.jp<span class="font-xs">※</span></span></li>
                            <li><span>.ne.jp<span class="font-xs">※</span></span></li>
                            <li><span>.gr.jp<span class="font-xs">※</span></span></li>
                        </ul>
                        <p class="mt5 mb0"><span class="note">※ビジネスプランでのみ選択可能です。</span></p>
                    </section>
                </div>
            </div>
            <ul class="domain-benefit_box_note-list">
                <li>※対象ドメインは予告なく変更する場合があります。</li>
                <li>※独自ドメイン永久無料特典で取得できるドメインや取得条件については<a href="../manual/man_order_present_domain.php#link-b">こちら</a>を参照してください。</li>
            </ul>
            <div class="tac mt40">
                <a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">お申し込みはこちら<i class="ico ico_new-window"></i></span></a>
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl">支払い方法</h3>
            <p><b>クレジットカード・銀行振込・ペイジー・あと払い（ペイディ）・コンビニ払い</b>がご利用いただけます。（<a
                        href="../manual/man_order_pay_etc.php">詳細はこちら</a>）</p>
        </section>

        <div class="xbiz tac mb20">
            <a href="https://business.xserver.ne.jp/" target="_blank" class="btn">
                <img class="flex" src="../img/price/bnr_xbiz.png?date=200617" alt="法人サイトの運用なら「XServerビジネス」がオススメ！">
            </a>
        </div>

        <aside class="tac">
            <p class="mb0"><a href="https://drive.xserver.ne.jp/" target="_blank"><img class="hover fluid-sm" src="../img/price/bnr_xd.png?date=20210514" alt="クラウド型高速オンラインストレージ　XServerドライブ サービスサイトへ"></a></p>
        </aside>
        
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

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // すべてのラジオボタンを取得
        const planRadioButtons = document.querySelectorAll('input[name="beginning_plan"]');
        const hiddenPlanInput = document.getElementById('sim_planId');
        const periodRadioButtons = document.querySelectorAll('input[name="beginning_period"]');
        const hiddenMonthInput = document.getElementById('sim_planMonth');

        planRadioButtons.forEach(function(radio) {
            // 各ラジオボタンにイベントリスナーを追加
            radio.addEventListener('change', function() {
                if (radio.checked) {
                    // チェックされているラジオボタンに対応するlabelを取得
                    const planLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (planLabel) {
                        // data-idの値をhidden inputのvalueにセット
                        hiddenPlanInput.value = planLabel.getAttribute('data-id');
                    }
                }
            });
        });
        periodRadioButtons.forEach(function(radio) {
            // 各ラジオボタンにイベントリスナーを追加
            radio.addEventListener('change', function() {
                if (radio.checked) {
                    // チェックされているラジオボタンに対応するlabelを取得
                    const periodLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (periodLabel) {
                        // data-periodの値をhidden inputのvalueにセット
                        hiddenMonthInput.value = periodLabel.getAttribute('data-period');
                    }
                }
            });
        });
    });
</script>