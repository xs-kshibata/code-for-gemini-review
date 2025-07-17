<?php include("../conf.php"); ?>
<?php

session_start();
$_SESSION['trans_id'] = md5(uniqid().mt_rand());//重複送信防止ＩＤ発行
mb_internal_encoding('EUC-JP');

//初期値の設定
define('USER_ID_LEN_','8');
define('MAILADDRESS_LEN_','128');
define('URL_LEN_','128');
define('TITLE_LEN_','128');
define('NAME_LEN_','64');
define('CONTENT_LEN_','10000');
define('MAIL_PATTARN_','/^([a-zA-Z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,32}$/');
define('URL_PATTARN_', '/(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9ぁ-んァ-ヶー一-龠;\/?:\@&=+\$,%#]+)/');
define('USER_ID_PATTARN_','/^[a-zA-Z]{2,4}[0-9]{5,6}$/');

//エスケープ処理の解除
if (get_magic_quotes_gpc()) {
$_POST['user_id'] 		= stripslashes($_POST['user_id']);
$_POST['name'] 			= stripslashes($_POST['name']);
$_POST['flag'] 			= stripslashes($_POST['flag']);
$_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
$_POST['mailaddress2'] 	= stripslashes($_POST['mailaddress2']);
$_POST['title'] 		= stripslashes($_POST['title']);
$_POST['url'] 			= stripslashes($_POST['url']);
$_POST['content'] 		= stripslashes($_POST['content']);
$_POST['flag_privacy']  = stripslashes($_POST['flag_privacy']);
}

//HTML出力用print関数
function s_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//入力チェック
if ($_POST['flag'] == '会員'){
	if (!preg_match(USER_ID_PATTARN_,mb_convert_kana($_POST['user_id'],'rn'))){
	$err[] = "XServerアカウントIDを確認してください。";
	} else {
		$url = $SECURE_URL."xinfo/?action_api2_checkmaybenotserverid=true&id={$_POST['user_id']}";
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$res = unserialize(curl_exec( $ch ));
		curl_close( $ch );
		if(array_key_exists('result', $res) && $res['result'] === false) {
			$err[] = "サーバーIDではなくXServerアカウントIDを入力してください。";
		}
	}
}else{
	if($_POST['user_id']){
	$err[] = "新規登録の方はXServerアカウントIDを空欄にしてください。";
	}
}

if (!$_POST['name'] || strlen($_POST['name']) > NAME_LEN_) {
	$err[] = "名前を確認してください。";
}
if (!preg_match(MAIL_PATTARN_, $_POST['mailaddress']) 		//メールアドレスパターンチェック
	|| stristr($_POST['mailaddress'], ',') !== false 		//「,」をはじく
	|| $_POST['mailaddress'] != $_POST['mailaddress2']		//確認メールドレスと比較
	|| strlen($_POST['mailaddress']) > MAILADDRESS_LEN_) {
	$err[] = "メールアドレスを確認してください。";
}
if ((!preg_match(URL_PATTARN_, $_POST['url']) 		//URLパターンチェック
	|| strlen($_POST['url']) > URL_LEN_)			//URLの長さをチェック
	&& strlen($_POST['url']) != 0) {				//urlが未記入の場合スルー
	$err[] = "URLを確認してください。";
}
if (!$_POST['title'] || strlen($_POST['title']) > TITLE_LEN_) {
	$err[] = "件名を確認してください。";
}
if (!$_POST['content'] || strlen($_POST['content']) > CONTENT_LEN_) {
	$err[] = "内容を確認してください。";
}

if (!$_POST['flag_privacy'] || $_POST['flag_privacy'] != '1') {
	$err[] = "個人情報の取り扱いについてに同意するをチェックしてください。";
}

//テンプレート
require_once'confirm.tpl';

?>

