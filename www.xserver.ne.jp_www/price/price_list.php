<?php

/* ---------------------------------------------------------
    �����С�����ɽ
------------------------------------------------------------ */
$cpPeriod = '2025/7/3 17:00 - 2025/9/4 17:00'; // �����ڡ�����֤����Ϥ��Ƥ�������
$initialCpTxt = ''; // �������CP����ɽ������ޤ�
$runningCpTxt = '��2025/7/3 17:00 - 2025/9/4 17:00�ޤǤΥ����ڡ�����ʤ�Ŭ�Ѥ���Ƥ��ޤ���'; // �������CP����ɽ������ޤ�
$runningPrTxt = '�� �������⤬�¼�Ⱦ��! ��'; // CP��̵ͭ�˴ؤ�餺�������ɽ�Ρַ������ץ���β���ɽ������ޤ���ɽ�������ʤ����ϡ�''�ʶ��ˡפˤ��Ƥ�������

/*
array(
    'planName' =>      '�����������', // �ץ��̾
    'planNameHtml' =>  '�����������', // <span>�����������</span>�ʤɥ�����ޤ���ץ��̾��ɬ�פʾ��Ȥ�
    'planNameClass' => 'standard',    // �ץ���ѤΥ��饹̾
    'planDetails' => array(
        array(
            'month' =>       3,     // ������֡�X�����
            'cpType' =>      1,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
            'price' =>       1320,  // �̾����
            'priceCp' =>     1122,  // CP���ʡ�cpType �� 1,2 �ξ�硢�嵭��­�����Ρ�����ʬ�򵭽ҡ�0 �ξ��� priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
            'renewManual' => 1320,  // ����"��ư"�������β���
            'renewAuto' =>   1100   // ����"��ư"�������β���
        ),
    )
)
 */


// 20%OFF�׻���
// --------------------------------------------------
function off20($base_price) {
    return floor($base_price - $base_price * 0.2);
}

// 25%OFF�׻���
// --------------------------------------------------
function off25($base_price) {
    return floor($base_price - $base_price * 0.25);
}

// 30%OFF�׻���
// --------------------------------------------------
function off30($base_price) {
    return floor($base_price - $base_price * 0.3);
}

// 31%OFF�׻���
// --------------------------------------------------
function off31($base_price) {
    return floor($base_price - $base_price * 0.31);
}

// 35%OFF�׻���
// --------------------------------------------------
function off35($base_price) {
    return floor($base_price - $base_price * 0.35);
}

// 50%OFF�׻���
// --------------------------------------------------
function off50($base_price) {
    return floor($base_price - $base_price * 0.5);
}


// ������� ����
// --------------------------------------------------
// initialEachPrice�ˤĤ���
// ������֤ˤ�ä�CP���ʤ��Ѥ����Ϥ��줾�� int �����ꡣ�����Ǥʤ����ϡ����٤� true ������
// ���ͤ����ꤷ�Ƥ��Ƥ� initialCpMonth �����ꤷ��X����ʾ�˳���������� initialPriceCp �������ͥ��ˤ����
// �㡧���̾���פξ�硧��initialCpMonth => 0 �ס�3 => true�ס�6 => true�ס�12 => true�ס�24 => true�ס�36 => true��
// �㡧��12����ʾ�η����CP���ʡ�3���6��������1,650�ߡפξ�硧��initialCpMonth => 12 �ס�3 => 1650�ס�6 => 1650�ס�12 => true�ס�24 => true�ס�36 => true��
// �㡧��12����ʾ�η����CP���ʡפξ�硧��initialCpMonth => 12 �ס�3 => true�ס�6 => true�ס�12 => true�ס�24 => true�ס�36 => true��
// �㡧����������֤�CP���ʡפξ�硧��initialCpMonth => 99 �ס�3 => true�ס�6 => true�ס�12 => true�ס�24 => true�ס�36 => true��
// int�����̤�CP����
// true��X����̤�� �� initialPrice / X����ʾ� �� initialPriceCp �򤽤줾�컲��
$INITIAL_LIST = array(
    'initialPrice' =>   0, // �̾����
    'initialPriceCp' => 0,    // CP����
    'initialCpMonth' => 0,    // CP���ʤ�Ŭ�Ѥ���������֡�0���̾�� �� 99������������о� �� 3,6,12,24,36���������X����ʾ��о�
    'initialEachPrice' => array(
        3 =>  true, // int or true
        6 =>  true, // int or true
        12 => true, // int or true
        24 => true, // int or true
        36 => true, // int or true
    )
);


// ������� ����
// --------------------------------------------------
$PRICE_LIST = array(
    'runningPlans' => array(
        array(
            'planName' =>      '�����������',
            'planNameHtml' =>  '�����������',
            'planNameClass' => 'standard',
            'planId' => 1,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       1320,
                    'priceCp' =>     1122,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 1320,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       1210,
                    'priceCp' =>     1028,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 1210,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       1100,
                    'priceCp' =>     off50(1100),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 1100,
                    'renewAuto' =>   1100
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       1045,
                    'priceCp' =>     off50(1045),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 1045,
                    'renewAuto' =>   1045
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       990,
                    'priceCp' =>     off50(990),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 990,
                    'renewAuto' =>   990
                )
            )
        ),
        array(
            'planName' =>      '�ץ�ߥ���',
            'planNameHtml' =>  '�ץ�ߥ���',
            'planNameClass' => 'premium',
            'planId' => 2,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       2640,
                    'priceCp' =>     2244,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 2640,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       2420,
                    'priceCp' =>     2057,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 2420,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       2200,
                    'priceCp' =>     off50(2200),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 2200,
                    'renewAuto' =>   2200
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       2090,
                    'priceCp' =>     off50(2090),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 2090,
                    'renewAuto' =>   2090
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       1980,
                    'priceCp' =>     off50(1980),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 1980,
                    'renewAuto' =>   1980
                )
            )
        ),
        array(
            'planName' =>      '�ӥ��ͥ�',
            'planNameHtml' =>  '�ӥ��ͥ�',
            'planNameClass' => 'business',
            'planId' => 3,
            'planDetails' => array(
                array(
                    'month' =>       3,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       5280,
                    'priceCp' =>     4488,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 5280,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       6,
                    'cpType' =>      0,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       4840,
                    'priceCp' =>     4114,  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 4840,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       12,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       4400,
                    'priceCp' =>     off50(4400),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 4400,
                    'renewAuto' =>   4400
                ),
                array(
                    'month' =>       24,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       4180,
                    'priceCp' =>     off50(4180),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 4180,
                    'renewAuto' =>   4180
                ),
                array(
                    'month' =>       36,
                    'cpType' =>      2,     // 0���̾�� �� 1��CP���ʡ����ߡ� �� 2������å���Хå�CP���ʼ¼������ߡ�
                    'price' =>       3960,
                    'priceCp' =>     off50(3960),  // cpType �� 1,2 �ξ�硧�嵭��­�����Ρ�����ʬ�򵭽� �� 0 �ξ�硧priceCp �ǤϤʤ� price �򻲾Ȥ��뤿���Խ�����
                    'renewManual' => 3960,
                    'renewAuto' =>   3960
                )
            )
        )
    )
);


// ������⥭���ڡ����̵ͭ��ǧ
// --------------------------------------------------
$runningCpFlag01 = false; // �����CPȽ��
$runningCpFlag02 = false; // ����å���Хå�CPȽ��
foreach ( $PRICE_LIST['runningPlans'] as $runningPlan ) {
    foreach ( $runningPlan['planDetails'] as $planDetail ) {
        if ( $planDetail['cpType'] === 1 ) {
            $runningCpFlag01 = true;
        } elseif ( $planDetail['cpType'] === 2 ) {
            $runningCpFlag02 = true;
        }
    }
}

// ������⥭���ڡ����̵ͭ�����ǧ
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


// ������ѥ����ڡ����̵ͭ��ǧ
// --------------------------------------------------
$initialCpFlag = false;
if ( $INITIAL_LIST['initialCpMonth'] !== 0 ) {
    $initialCpFlag = true;
}


// ���ߥ�졼�����Υץ�����
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
            // ���ѽ񡦥��ߥ�졼������¸�ߤ�ʬ����䤹�����뤿�ᡢ��������������ɤ�����Ѥߤˤ���
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


// ���ߥ�졼�����η�����ֽ���
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
            // ���ѽ񡦥��ߥ�졼������¸�ߤ�ʬ����䤹�����뤿�ᡢ����12�����ǥե��������Ѥߤˤ���
            $generateSimPeriod .= ' checked';
        }
        $generateSimPeriod .= '>';
        $generateSimPeriod .= '<label class="radioLabelForm" data-period="' . $key . '" for="' . $simPeriodId . 'months">';
        $generateSimPeriod .= '<span class="mainLabelForm">' . $key . '����</span>';
        $generateSimPeriod .= '<span class="subLabelForm"><span class="subLabelPrice">--��/��</span></span>';
        $generateSimPeriod .= '</label></div></div>';
        $arrayCount++;
    }

    $generateSimPeriod .= '</div>';
    print $generateSimPeriod;
}


// �������ɽ�ν���
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


    // �ץ��̾ ����
    // --------------------------------------------------
    $generateTableHtml .= '<thead><tr><th scope="col"></th>';
    foreach ( $runningPlans as $runningPlan ) {
        $generateTableHtml .= '<th scope="col" class="cell_plan ' . $runningPlan['planNameClass'] . '">' . $runningPlan['planNameHtml'] . '</th>';
    }
    $generateTableHtml .= '</tr></thead>';


    // ������� ����
    // --------------------------------------------------
    $generateTableHtml .= '<tbody>';
    $generateTableHtml .= '<tr class="tr_initial';
    if ( $initialCpFlag ) $generateTableHtml .= ' tr_initial--cp';
    $generateTableHtml .= '">';

    $generateTableHtml .= '<th scope="row" class="th_initial"><div class="th_initialInr">';
    if ( $initialCpMonth !== 0 ) $generateTableHtml .= '<span class="txtCpBalloon">�����ڡ����� !</span>';
    $generateTableHtml .= '<div class="th_txtInitial">�������</div></div></th>';

    $generateTableHtml .= '<td colspan="'. count($runningPlans) . '"><div class="td_initialInr"><div class="td_initialTxt">';
    if ( $initialCpFlag ) { // �����ڡ����
        if ( $initialCpMonth === 99 ) { // ������֤����꤬�ʤ�
            $generateTableHtml .= '<s>' . number_format($initialPrice) . '��</s> �� ';
            $generateTableHtml .= '<span class="initialPrice--cp">��' . number_format($initialPriceCp) . '�ߡ�</span>';
        } else { // X����ʾ�����ꤢ��
            $generateTableHtml .= number_format($initialPrice) . '�� �� ';
            $generateTableHtml .= '<span class="initialPrice--cp">��' . $initialCpMonth . '����ʾ�η����' . number_format($initialPriceCp) . '�ߡ�</span>';
        }
    } else {
        $generateTableHtml .= number_format($initialPrice) . '��';
    }

    if ( $initialCpFlag && $initialCpMonth !== 99 ) {
        // ������Ѥ򥭡���������֤��ͤȤ����������
        $INITIAL_FINAL = [];
        foreach ( $INITIAL_LIST['initialEachPrice'] as $key => $val ) {
            if ( $key < $initialCpMonth ) { // X����ʾ�˳������ʤ����
                if ( $val !== true && $val !== false ) { // ���̤β��ʤ����ꤵ��Ƥ����硣false �����Ϥ��ʤ��Ϥ�����ǰ�Τ���
                    $initialPriceKey = $val;
                    $INITIAL_FINAL[$initialPriceKey][] = $key;
                }
            }
        }

        // ������Ѥ�������ꤷ�Ƥ����硢����
        if ( !empty($INITIAL_FINAL) ) {
            $initialPriceNotesHtml = '<div class="initialPriceNotes">';
            foreach ( $INITIAL_FINAL as $PriceKey => $aryInitialFinal ) {
                //if ( $PriceKey !== 0 ) {
                $initialPriceNotesHtml .= '<p class="initialPriceNotes_item">';
                foreach ( $aryInitialFinal as $valMonth ) {
                    $initialPriceNotesHtml .= $valMonth . '����';
                    if ( $valMonth !== end($aryInitialFinal) ) $initialPriceNotesHtml .= '��';
                }
                //}
                $initialPriceNotesHtml .= '�����' . number_format($PriceKey) . '��</p>';
            }
            $initialPriceNotesHtml .= '</div>';
            $generateTableHtml .= $initialPriceNotesHtml;
        }
    }
    $generateTableHtml .= '</div>'; // td_initialTxt ���Ĥ�����
    if ( $initialCpMonth !== 0 ) $generateTableHtml .= '<span class="txtCpBalloon">�����ڡ����� !</span>';
    $generateTableHtml .= '</div></td></tr>';


    // ������� ����
    // --------------------------------------------------
    $generateTableHtml .= '<tr class="tr_running';
    if ( $runningCpFlag ) $generateTableHtml .= ' tr_running--cp';
    if ( $runningPrTxt !== '' ) $generateTableHtml .= ' tr_running--pr';
    $generateTableHtml .= '">';

    $generateTableHtml .= '<th class="th_period">�������</th>';
    $generateTableHtml .= '<th colspan="3" class="th_monthly"><div class="th_monthlyInr">';
    $generateTableHtml .= '<span class="txtMonthly">������֤��Ȥ�</span>�������';
    if ( $runningCpFlag ) {
        $generateTableHtml .= '<span class="txtCpBalloon">�����ڡ����� !</span>';
    }
    if ( $runningPrTxt !== '' ) {
        $generateTableHtml .= '<div class="txtCpPr">' . $runningPrTxt . '</div>';
    }
    $generateTableHtml .= '</div></th></tr>';

    $index = 0;
    foreach ( $runningPlans[0]['planDetails'] as $planDetail ) {
        $generateTableHtml .= '<tr><th scope="row">' . $planDetail['month'] . '����</th>';
        foreach ( $runningPlans as $runningPlan ) {
            $planName = $runningPlan['planName'];
            $runningPlanMonthData = $runningPlan['planDetails'][$index];
            $cpType = $runningPlanMonthData['cpType'];
            $price = $runningPlanMonthData['price'];
            $priceCp = $runningPlanMonthData['priceCp'];

            $generateTableHtml .= '<td><div class="td_runningInner" data-row-label="' .$planName . '"><span class="runningPrice">';
            if ( $cpType > 0 ) { // �����ڡ����
                if ( $cpType === 1 ) { // CP����
                    $generateTableHtml .= '<s>' . number_format($price) . '��</s><br class="hidden-s"><span class="runningPriceArrow visible-s"> �� </span>';
                    $generateTableHtml .= '<span class="runningPrice--cp">' . number_format($priceCp) . '��</span>';
                } elseif ( $cpType === 2 ) { // �¼�����
                    $generateTableHtml .= number_format($price) . '��<br>';
                    $generateTableHtml .= '<span class="runningPrice--actual"><span class="font-s">����å���Хå���</span><br>�ڼ¼�' . number_format($priceCp) . '�ߡ�</span>';
                }
            } else {
                $generateTableHtml .= number_format($price) . '��';
            }
            $generateTableHtml .= '</span></div></td>';
        }
        $generateTableHtml .= '</tr>';
        $index++;
    }
    $generateTableHtml .= '</tbody></table>';
    print $generateTableHtml;
}


// �����ڡ������ν���
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
    �ƥץ��������Ǽ
------------------------------------------------------------ */

// �����������
$standardPlans = generatePlanDetail($PRICE_LIST, 'standard');
$standard36Price = number_format( $standardPlans['36']['price'] );
$standard36PriceCp = number_format( $standardPlans['36']['priceCp'] );

// �ץ�ߥ���
$premiumPlans = generatePlanDetail($PRICE_LIST, 'premium');
$premium36Price = number_format( $premiumPlans['36']['price'] );
$premium36PriceCp = number_format( $premiumPlans['36']['priceCp'] );

// �ӥ��ͥ�
$businessPlans = generatePlanDetail($PRICE_LIST, 'business');
$business36Price = number_format( $businessPlans['36']['price'] );
$business36PriceCp = number_format( $businessPlans['36']['priceCp'] );


// �ƥץ����������򡢷�����֤򥭡��Ȥ���������֤�
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