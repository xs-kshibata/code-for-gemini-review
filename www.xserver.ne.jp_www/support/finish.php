<?php include("../conf.php"); ?>
<?php
mb_internal_encoding('EUC-JP');
session_start();

//初期値の設定
define('TO_','support@xserver.ne.jp');
define('SUBJECT_','【エックスサーバー】サポート問合せ');
define('R_SUBJECT_','【エックスサーバー】お問い合わせを受け付けました');
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



//メール送信

if (!$err && $_POST['trans_id'] === $_SESSION['trans_id'] && $_SESSION['trans_id'] != null) {

	unset($_SESSION['trans_id']);//重複送信防止ＩＤの削除



	require_once 'mail_body.php';

	$BODY = new body();



	$from     	= $_POST['mailaddress'];

	$to       	= TO_;

	$subject    = SUBJECT_;

	$body       = $BODY->getBody();

	$addHeader  = "From: $from";

	$addParam   = "";

	

	if (mail($to,mb_encode_mimeheader($subject,'JIS','B'),mb_convert_encoding($body,'JIS'),$addHeader)) {



		$from     	= TO_;

		$to       	= $_POST['mailaddress'];

		$subject    = R_SUBJECT_;

		$body       = $BODY->getRbody();

		$addHeader  = "From: ".TO_."\n";

		$addParam   = "";

	

		mail($to,mb_encode_mimeheader($subject,'JIS','B'),mb_convert_encoding($body,'JIS'),$addHeader);

	}else {

		$err[] = "問合せの受付をできませんでした。お手数ですが時間を空けてもう一度お問合せください。";

	}



}



//テンプレート

require_once 'finish.tpl';

?>

