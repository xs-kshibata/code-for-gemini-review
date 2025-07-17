<?php 
/**
 * [XSERVER　ビジネスパートナー] 申し込みURLリダイレクト処理
 */

require_once("../conf.php");

$GET_AGENCYCD = 'cd';                   // GETパラメータ：代理店コード
$GET_TYPE = 'type';                     // GETパラメータ：種別
$GET_REDIRECT_AGENCYCD = 'agencycd';    // リダイレクト先GETパラメータ：代理店コード

// GETパラメータ取得
$agencycd = $_GET[$GET_AGENCYCD];
$type = $_GET[$GET_TYPE];

// リダイレクト先URL作成
$redirect_url = $SECURE_URL.'xinfo/?action_register_index=on';
$redirect_url .= '&service=xserver';
if ($agencycd && $agencycd != '') {
    $redirect_url .= '&'.$GET_REDIRECT_AGENCYCD.'='.$agencycd;
}
// リダイレクト
header('Location: '.$redirect_url);
