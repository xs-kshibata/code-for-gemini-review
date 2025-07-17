<?php

session_start();
$_SESSION['trans_id'] = md5(uniqid().mt_rand());//重複送信防止ＩＤ発行


mb_language("ja");mb_internal_encoding('EUC-JP');header ('Content-Type: text/html; charset=EUC-JP');

//初期値の設定
define('USER_ID_LEN_','8');
define('NAME_LEN_','64');
define('CO_NAME_LEN_','128');
define('MAILADDRESS_LEN_','128');
define('TEL_LEN_','15');
define('USER_ID_PATTARN_','/^[a-zA-Z]{2,4}[0-9]{5,6}$/');
define('MAIL_PATTARN_','/^([a-zA-Z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,32}$/');


//エスケープ処理の解除
if (get_magic_quotes_gpc()) {
    $_POST['user_id'] 		= stripslashes($_POST['user_id']);
    $_POST['flag'] 			= stripslashes($_POST['account']);
    $_POST['name'] 			= stripslashes($_POST['name']);
    $_POST['co_name']       = stripslashes($_POST['co_name']);
    $_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
    $_POST['tel'] 			= stripslashes($_POST['tel']);
    $_POST['contact_detail_list'] = stripslashes($_POST['contact_detail_list']);
}

//HTML出力用print関数
function s_print($var){
    print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//入力チェック
if ($_POST['flag'] == '有'){
    if (!preg_match(USER_ID_PATTARN_,mb_convert_kana($_POST['user_id'],'rn'))){
        $err[] = "XServerアカウントIDを確認してください。";
    }
}else{
    $_POST['user_id'] = '';
}

if (!$_POST['name'] || strlen($_POST['name']) > NAME_LEN_) {
    $err[] = "ご担当者名を確認してください。";
}

if (!$_POST['co_name'] || strlen($_POST['co_name']) > CO_NAME_LEN_) {
    $err[] = "会社名を確認してください。";
}

if (!preg_match(MAIL_PATTARN_, $_POST['mailaddress']) 		//メールアドレスパターンチェック
    || stristr($_POST['mailaddress'], ',') !== false 		//「,」をはじく
    || strlen($_POST['mailaddress']) > MAILADDRESS_LEN_) {
    $err[] = "メールアドレスを確認してください。";
}

if (!$_POST['tel'] || strlen($_POST['tel']) > TEL_LEN_) {
    $err[] = "電話番号を確認してください。";
}

if (!$_POST['contact_detail_list']) {
    $err[] = "お問い合わせ内容をチェックしてください。";
} else {
    $contact_detail = implode('、', $_POST['contact_detail_list']);
}

if (!$_POST['flag_privacy'] || $_POST['flag_privacy'] != '1') {
    $err[] = "「個人情報の取り扱いについて同意する」をチェックしてください。";
}

// エラーがある場合は入力画面へ
if ($err) {
    require_once 'index.tpl';
} else {
    require_once 'confirm.tpl';
}

?>
