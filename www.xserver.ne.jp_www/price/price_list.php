<?php

/* ---------------------------------------------------------
    サーバー料金表
------------------------------------------------------------ */
$cpPeriod = '2025/7/3 17:00 - 2025/9/4 17:00'; // キャンペーン期間を入力してください
$initialCpTxt = ''; // 初期費用CP時に表示されます
$runningCpTxt = '※2025/7/3 17:00 - 2025/9/4 17:00までのキャンペーン価格が適用されています。'; // 月額料金CP時に表示されます
$runningPrTxt = '＼ 利用料金が実質半額! ／'; // CPの有無に関わらず月額料金表の「月額料金」セルの下に表示されます。表示させない場合は「''（空）」にしてください

/*
array(
    'planName' =>      'スタンダード', // プラン名
    'planNameHtml' =>  'スタンダード', // <span>スタンダード</span>などタグを含んだプラン名が必要な場合使う
    'planNameClass' => 'standard',    // プラン用のクラス名
    'planDetails' => array(
        array(
            'month' =>       3,     // 契約期間（Xヶ月）
            'cpType' =>      1,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
            'price' =>       1320,  // 通常価格
            'priceCp' =>     1122,  // CP価格。cpType が 1,2 の場合、上記補足説明の〇〇部分を記述。0 の場合は priceCp ではなく price を参照するため編集不要
            'renewManual' => 1320,  // 契約"手動"更新時の価格
            'renewAuto' =>   1100   // 契約"自動"更新時の価格
        ),
    )
)
 */


// 20%OFF計算式
// --------------------------------------------------
function off20($base_price) {
    return floor($base_price - $base_price * 0.2);
}

// 25%OFF計算式
// --------------------------------------------------
function off25($base_price) {
    return floor($base_price - $base_price * 0.25);
}

// 30%OFF計算式
// --------------------------------------------------
function off30($base_price) {
    return floor($base_price - $base_price * 0.3);
}

// 31%OFF計算式
// --------------------------------------------------
function off31($base_price) {
    return floor($base_price - $base_price * 0.31);
}

// 35%OFF計算式
// --------------------------------------------------
function off35($base_price) {
    return floor($base_price - $base_price * 0.35);
}

// 50%OFF計算式
// --------------------------------------------------
function off50($base_price) {
    return floor($base_price - $base_price * 0.5);
}


// 初期費用 設定
// --------------------------------------------------
// initialEachPriceについて
// 契約期間によってCP価格が変わる場合はそれぞれ int を設定。そうでない場合は、すべて true を設定
// ※値を設定していても initialCpMonth に設定したXヶ月以上に該当する場合は initialPriceCp が設定（優先）される
// 例：「通常時」の場合：「initialCpMonth => 0 」「3 => true」「6 => true」「12 => true」「24 => true」「36 => true」
// 例：「12ヶ月以上の契約でCP価格。3ヶ月・6ヶ月契約は1,650円」の場合：「initialCpMonth => 12 」「3 => 1650」「6 => 1650」「12 => true」「24 => true」「36 => true」
// 例：「12ヶ月以上の契約でCP価格」の場合：「initialCpMonth => 12 」「3 => true」「6 => true」「12 => true」「24 => true」「36 => true」
// 例：「全契約期間でCP価格」の場合：「initialCpMonth => 99 」「3 => true」「6 => true」「12 => true」「24 => true」「36 => true」
// int：個別のCP価格
// true：Xヶ月未満 → initialPrice / Xヶ月以上 → initialPriceCp をそれぞれ参照
$INITIAL_LIST = array(
    'initialPrice' =>   0, // 通常価格
    'initialPriceCp' => 0,    // CP価格
    'initialCpMonth' => 0,    // CP価格が適用される契約期間。0：通常時 ／ 99：全契約期間対象 ／ 3,6,12,24,36：契約期間Xヶ月以上対象
    'initialEachPrice' => array(
        3 =>  true, // int or true
        6 =>  true, // int or true
        12 => true, // int or true
        24 => true, // int or true
        36 => true, // int or true
    )
);


// 月額費用 設定
// --------------------------------------------------
$PRICE_LIST = array(
    'runningPlans' => array(
        array(
            'planName' =>      'スタンダード',
            'planNameHtml' =>  'スタンダード',
            'planNameClass' => 'standard',
            'planId' => 1,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       1320,
                    'priceCp' =>     1122,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 1320,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       1210,
                    'priceCp' =>     1028,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 1210,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       1100,
                    'priceCp' =>     off50(1100),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 1100,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       1045,
                    'priceCp' =>     off50(1045),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 1045,
                    'renewAuto' =>   1045
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       990,
                    'priceCp' =>     off50(990),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 990,
                    'renewAuto' =>   990
                )
            )
        ),
        array(
            'planName' =>      'プレミアム',
            'planNameHtml' =>  'プレミアム',
            'planNameClass' => 'premium',
            'planId' => 2,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       2640,
                    'priceCp' =>     2244,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 2640,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       2420,
                    'priceCp' =>     2057,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 2420,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       2200,
                    'priceCp' =>     off50(2200),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 2200,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       2090,
                    'priceCp' =>     off50(2090),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 2090,
                    'renewAuto' =>   2090
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       1980,
                    'priceCp' =>     off50(1980),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 1980,
                    'renewAuto' =>   1980
                )
            )
        ),
        array(
            'planName' =>      'ビジネス',
            'planNameHtml' =>  'ビジネス',
            'planNameClass' => 'business',
            'planId' => 3,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       5280,
                    'priceCp' =>     4488,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 5280,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       4840,
                    'priceCp' =>     4114,  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 4840,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       4400,
                    'priceCp' =>     off50(4400),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 4400,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       4180,
                    'priceCp' =>     off50(4180),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 4180,
                    'renewAuto' =>   4180
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0：通常時 ／ 1：CP時（〇〇円） ／ 2：キャッシュバックCP時（実質〇〇円）
                    'price' =>       3960,
                    'priceCp' =>     off50(3960),  // cpType が 1,2 の場合：上記補足説明の〇〇部分を記述 ／ 0 の場合：priceCp ではなく price を参照するため編集不要
                    'renewManual' => 3960,
                    'renewAuto' =>   3960
                )
            )
        )
    )
);


// 月額料金キャンペーンの有無確認
// --------------------------------------------------
$runningCpFlag01 = false; // 割引きCP判定
$runningCpFlag02 = false; // キャッシュバックCP判定
foreach ( $PRICE_LIST['runningPlans'] as $runningPlan ) {
    foreach ( $runningPlan['planDetails'] as $planDetail ) {
        if ( $planDetail['cpType'] === 1 ) {
            $runningCpFlag01 = true;
        } elseif ( $planDetail['cpType'] === 2 ) {
            $runningCpFlag02 = true;
        }
    }
}

// 月額料金キャンペーンの有無を一括確認
$runningCpFlag = runningCpFlag();
function runningCpFlag() {
    global $runningCpFlag01,
           $runningCpFlag02;

    $runningCpFlagArray = [
        $runningCpFlag01,
        $runningCpFlag02
    ];

    return in_array(true, $runningCpFlagArray, true);
}


// 初期費用キャンペーンの有無確認
// --------------------------------------------------
$initialCpFlag = false;
if ( $INITIAL_LIST['initialCpMonth'] !== 0 ) {
    $initialCpFlag = true;
}


// シミュレーターのプラン出力
// --------------------------------------------------
function generateSimPlan($targetPlan) {
    global $PRICE_LIST;
    $runningPlans = $PRICE_LIST['runningPlans'];

    $generateSimPlan = '<div class="sim__item__body sim__item__body--plan inputForm__group--row">';
    $arrayCount = 0;

    foreach ( $runningPlans as $runningPlan ) {
        $simPlanVal = $runningPlan['planNameClass'];
        $simPlanId = $targetPlan . '_' . $simPlanVal;
        $generateSimPlan .= '<div class="inputForm__body"><div class="inputForm__body__inr">';
        $generateSimPlan .= '<input class="radioForm" type="radio" name="' . $targetPlan . '_plan" value="' . $arrayCount . '" id="' . $simPlanId . '"';
        if ($simPlanId == 'beginning_standard') {
            // 見積書・シミュレーターの存在を分かりやすくするため、新規スタンダードを選択済みにする
            $generateSimPlan .= ' checked';
        }
        $generateSimPlan .= '>';
        $generateSimPlan .= '<label class="radioLabelForm" data-plan="' . $runningPlan['planName'] . '" data-id="' . $runningPlan['planId'] . '" for="' . $simPlanId . '">' . $runningPlan['planName'] . '</label>';
        $generateSimPlan .= '</div></div>';
        $arrayCount++;
    }

    $generateSimPlan .= '</div>';
    print $generateSimPlan;
}


// シミュレーターの契約期間出力
// --------------------------------------------------
function generateSimPeriod($targetPeriod) {
    global $INITIAL_LIST;
    $generateSimPeriod = '<div class="sim__item__body sim__item__body--period inputForm__group--row">';
    $arrayCount = 0;

    foreach ( $INITIAL_LIST['initialEachPrice'] as $key => $val ) {
        $simPeriodId = $targetPeriod . '_' . $key;
        $generateSimPeriod .= '<div class="inputForm__body"><div class="inputForm__body__inr">';
        $generateSimPeriod .= '<input class="radioForm" type="radio" name="' . $targetPeriod . '_period" value="' . $arrayCount . '" id="' .$simPeriodId . 'months"';
        if ($simPeriodId == 'beginning_12') {
            // 見積書・シミュレーターの存在を分かりやすくするため、新規12ヶ月をデフォルト選択済みにする
            $generateSimPeriod .= ' checked';
        }
        $generateSimPeriod .= '>';
        $generateSimPeriod .= '<label class="radioLabelForm" data-period="' . $key . '" for="' . $simPeriodId . 'months">';
        $generateSimPeriod .= '<span class="mainLabelForm">' . $key . 'ヶ月</span>';
        $generateSimPeriod .= '<span class="subLabelForm"><span class="subLabelPrice">--円/月</span></span>';
        $generateSimPeriod .= '</label></div></div>';
        $arrayCount++;
    }

    $generateSimPeriod .= '</div>';
    print $generateSimPeriod;
}


// 月額料金表の出力
// --------------------------------------------------
function generateTable($tableClass) {
    global $INITIAL_LIST,
           $PRICE_LIST,
           $runningCpTxt,
           $initialCpTxt,
           $runningPrTxt,
           $runningCpFlag,
           $runningCpFlag01,
           $runningCpFlag02,
           $initialCpFlag;

    $initialCpMonth = $INITIAL_LIST['initialCpMonth'];
    $initialPrice = $INITIAL_LIST['initialPrice'];
    $initialPriceCp = $INITIAL_LIST['initialPriceCp'];
    $runningPlans = $PRICE_LIST['runningPlans'];

    $generateTableHtml = '<table class="' . $tableClass . ' table';
    if ( $runningCpFlag01 ) $generateTableHtml .= ' is--runningCp01';
    if ( $runningCpFlag02 ) $generateTableHtml .= ' is--runningCp02';
    if ( $initialCpFlag ) $generateTableHtml .= ' is--initialCp';
    $generateTableHtml .= '">';


    // プラン名 出力
    // --------------------------------------------------
    $generateTableHtml .= '<thead><tr><th scope="col"></th>';
    foreach ( $runningPlans as $runningPlan ) {
        $generateTableHtml .= '<th scope="col" class="cell_plan ' . $runningPlan['planNameClass'] . '">' . $runningPlan['planNameHtml'] . '</th>';
    }
    $generateTableHtml .= '</tr></thead>';


    // 初期費用 出力
    // --------------------------------------------------
    $generateTableHtml .= '<tbody>';
    $generateTableHtml .= '<tr class="tr_initial';
    if ( $initialCpFlag ) $generateTableHtml .= ' tr_initial--cp';
    $generateTableHtml .= '">';

    $generateTableHtml .= '<th scope="row" class="th_initial"><div class="th_initialInr">';
    if ( $initialCpMonth !== 0 ) $generateTableHtml .= '<span class="txtCpBalloon">キャンペーン中 !</span>';
    $generateTableHtml .= '<div class="th_txtInitial">初期費用</div></div></th>';

    $generateTableHtml .= '<td colspan="'. count($runningPlans) . '"><div class="td_initialInr"><div class="td_initialTxt">';
    if ( $initialCpFlag ) { // キャンペーン時
        if ( $initialCpMonth === 99 ) { // 契約期間の縛りがない
            $generateTableHtml .= '<s>' . number_format($initialPrice) . '円</s> → ';
            $generateTableHtml .= '<span class="initialPrice--cp">【' . number_format($initialPriceCp) . '円】</span>';
        } else { // Xヶ月以上の縛りあり
            $generateTableHtml .= number_format($initialPrice) . '円 → ';
            $generateTableHtml .= '<span class="initialPrice--cp">【' . $initialCpMonth . 'ヶ月以上の契約で' . number_format($initialPriceCp) . '円】</span>';
        }
    } else {
        $generateTableHtml .= number_format($initialPrice) . '円';
    }

    if ( $initialCpFlag && $initialCpMonth !== 99 ) {
        // 初期費用をキー、契約期間を値とした配列作成
        $INITIAL_FINAL = [];
        foreach ( $INITIAL_LIST['initialEachPrice'] as $key => $val ) {
            if ( $key < $initialCpMonth ) { // Xヶ月以上に該当しない場合
                if ( $val !== true && $val !== false ) { // 個別の価格が指定されている場合。false は入力しないはずだが念のため
                    $initialPriceKey = $val;
                    $INITIAL_FINAL[$initialPriceKey][] = $key;
                }
            }
        }

        // 初期費用を個別設定している場合、出力
        if ( !empty($INITIAL_FINAL) ) {
            $initialPriceNotesHtml = '<div class="initialPriceNotes">';
            foreach ( $INITIAL_FINAL as $PriceKey => $aryInitialFinal ) {
                //if ( $PriceKey !== 0 ) {
                $initialPriceNotesHtml .= '<p class="initialPriceNotes_item">';
                foreach ( $aryInitialFinal as $valMonth ) {
                    $initialPriceNotesHtml .= $valMonth . 'ヶ月';
                    if ( $valMonth !== end($aryInitialFinal) ) $initialPriceNotesHtml .= '・';
                }
                //}
                $initialPriceNotesHtml .= '契約は' . number_format($PriceKey) . '円</p>';
            }
            $initialPriceNotesHtml .= '</div>';
            $generateTableHtml .= $initialPriceNotesHtml;
        }
    }
    $generateTableHtml .= '</div>'; // td_initialTxt の閉じタグ
    if ( $initialCpMonth !== 0 ) $generateTableHtml .= '<span class="txtCpBalloon">キャンペーン中 !</span>';
    $generateTableHtml .= '</div></td></tr>';


    // 月額料金 出力
    // --------------------------------------------------
    $generateTableHtml .= '<tr class="tr_running';
    if ( $runningCpFlag ) $generateTableHtml .= ' tr_running--cp';
    if ( $runningPrTxt !== '' ) $generateTableHtml .= ' tr_running--pr';
    $generateTableHtml .= '">';

    $generateTableHtml .= '<th class="th_period">契約期間</th>';
    $generateTableHtml .= '<th colspan="3" class="th_monthly"><div class="th_monthlyInr">';
    $generateTableHtml .= '<span class="txtMonthly">契約期間ごとの</span>月額料金';
    if ( $runningCpFlag ) {
        $generateTableHtml .= '<span class="txtCpBalloon">キャンペーン中 !</span>';
    }
    if ( $runningPrTxt !== '' ) {
        $generateTableHtml .= '<div class="txtCpPr">' . $runningPrTxt . '</div>';
    }
    $generateTableHtml .= '</div></th></tr>';

    $index = 0;
    foreach ( $runningPlans[0]['planDetails'] as $planDetail ) {
        $generateTableHtml .= '<tr><th scope="row">' . $planDetail['month'] . 'ヶ月</th>';
        foreach ( $runningPlans as $runningPlan ) {
            $planName = $runningPlan['planName'];
            $runningPlanMonthData = $runningPlan['planDetails'][$index];
            $cpType = $runningPlanMonthData['cpType'];
            $price = $runningPlanMonthData['price'];
            $priceCp = $runningPlanMonthData['priceCp'];

            $generateTableHtml .= '<td><div class="td_runningInner" data-row-label="' .$planName . '"><span class="runningPrice">';
            if ( $cpType > 0 ) { // キャンペーン時
                if ( $cpType === 1 ) { // CP価格
                    $generateTableHtml .= '<s>' . number_format($price) . '円</s><br class="hidden-s"><span class="runningPriceArrow visible-s"> → </span>';
                    $generateTableHtml .= '<span class="runningPrice--cp">' . number_format($priceCp) . '円</span>';
                } elseif ( $cpType === 2 ) { // 実質価格
                    $generateTableHtml .= number_format($price) . '円<br>';
                    $generateTableHtml .= '<span class="runningPrice--actual"><span class="font-s">キャッシュバックで</span><br>【実質' . number_format($priceCp) . '円】</span>';
                }
            } else {
                $generateTableHtml .= number_format($price) . '円';
            }
            $generateTableHtml .= '</span></div></td>';
        }
        $generateTableHtml .= '</tr>';
        $index++;
    }
    $generateTableHtml .= '</tbody></table>';
    print $generateTableHtml;
}


// キャンペーン注釈の出力
// --------------------------------------------------
function generateNote() {
    global $INITIAL_LIST,
           $runningCpTxt,
           $initialCpTxt;

    $initialCpMonth = $INITIAL_LIST['initialCpMonth'];

    if ( $runningCpTxt != '' ) print '<div class="cpTxt"><p class="note">' . $runningCpTxt . '</p></div>';
//    if ( $initialCpMonth !== 0 ) print '<div class="cpTxt"><p class="note">' . $initialCpTxt . '</p></div>';
}


/* ---------------------------------------------------------
    各プランの料金格納
------------------------------------------------------------ */

// スタンダード
$standardPlans = generatePlanDetail($PRICE_LIST, 'standard');
$standard36Price = number_format( $standardPlans['36']['price'] );
$standard36PriceCp = number_format( $standardPlans['36']['priceCp'] );

// プレミアム
$premiumPlans = generatePlanDetail($PRICE_LIST, 'premium');
$premium36Price = number_format( $premiumPlans['36']['price'] );
$premium36PriceCp = number_format( $premiumPlans['36']['priceCp'] );

// ビジネス
$businessPlans = generatePlanDetail($PRICE_LIST, 'business');
$business36Price = number_format( $businessPlans['36']['price'] );
$business36PriceCp = number_format( $businessPlans['36']['priceCp'] );


// 各プランの料金情報を、契約期間をキーとした配列で返す
// --------------------------------------------------
function generatePlanDetail($PRICE_LIST,$planName) {
    foreach ( $PRICE_LIST['runningPlans'] as $runningPlan ) {
        $planDetailTemps = [];
        foreach ( $runningPlan['planDetails'] as $planDetails ) {
            $planDetailTemps[$planDetails['month']] = array(
                'cpType' => $planDetails['cpType'],
                'price' => $planDetails['price'],
                'priceCp' => $planDetails['priceCp'],
                'renewManual' => $planDetails['renewManual'],
                'renewAuto' => $planDetails['renewAuto'],
            );
        }

        if ( $runningPlan['planNameClass'] === $planName ) {
            return $planDetailTemps;
        }
    }
}