<?php

session_start();

mb_language("ja");mb_internal_encoding('EUC-JP');header ('Content-Type: text/html; charset=EUC-JP');

//初期値の設定
define('TO_','web-consultant@xserver.ne.jp');
define('TO_UTILL_','web-kanji@utill.co.jp');
define('TO_UTILL_SYSTEM','xserver-contact@g-1n7x38gpt90zwe9alanzx0vz1nssijgf5wwyzjccdwtj1xb51s.0k-24eenua2.ap17.apex.salesforce.com');
define('BCC_','support@xserver.ne.jp');
define('SUBJECT_','【エックスサーバー】ホームページ制作相談問合せ');
define('R_SUBJECT_','【エックスサーバー】お問い合わせを受け付けました');
define('USER_ID_LEN_','8');
define('NAME_LEN_','64');
define('CO_NAME_LEN_','128');
define('MAILADDRESS_LEN_','128');
define('TEL_LEN_','15');
define('USER_ID_PATTARN_','/^[a-zA-Z]{2,4}[0-9]{5,6}$/');
define('MAIL_PATTARN_','/^([a-zA-Z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,32}$/');

//エスケープ処理の解除
if (get_magic_quotes_gpc()) {
    $_POST['user_id'] 		 = stripslashes($_POST['user_id']);
    $_POST['flag'] 			 = stripslashes($_POST['account']);
    $_POST['name'] 			 = stripslashes($_POST['name']);
    $_POST['co_name']        = stripslashes($_POST['co_name']);
    $_POST['mailaddress'] 	 = stripslashes($_POST['mailaddress']);
    $_POST['tel'] 			 = stripslashes($_POST['tel']);
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

//メール送信
if (!$err && ($_POST['trans_id'] === $_SESSION['trans_id']) && ($_SESSION['trans_id'] != null)) {
    unset($_SESSION['trans_id']);//重複送信防止ＩＤの削除
    require_once 'mail_body.php';
    $BODY = new body();

    $from     	= $_POST['mailaddress'];
    $to       	= TO_;
    $to       	.= ',' . TO_UTILL_;
    $to       	.= ',' . TO_UTILL_SYSTEM;
    $subject    = SUBJECT_;
    $body       = $BODY->getBody();
    $addHeader  = "From: $from";
    $addHeader  .= "\nContent-Type: text/plain; charset=iso-2022-jp";
    $addParams   = "";

    if ($res = mail($to,mb_encode_mimeheader($subject,'JIS','B'),mb_convert_encoding($body,'JIS','EUC-JP'),$addHeader)) {
        $from     	= TO_;
        $to       	= $_POST['mailaddress'];
        $subject    = R_SUBJECT_;
        $body       = $BODY->getRbody();
        $addHeader  = "From: ".TO_."\n";
        $addHeader  .= "Bcc: ".BCC_."\n";
        $addParam   = "";

        mail($to,mb_encode_mimeheader($subject,'JIS','B'),mb_convert_encoding($body,'JIS'),$addHeader);
    }else {
        $err[] = "問合せの受付をできませんでした。お手数ですが時間を空けてもう一度お問合せください。";
    }

}

//テンプレート
require_once 'finish.tpl';
?>
