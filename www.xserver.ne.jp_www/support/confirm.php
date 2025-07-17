<?php include("../conf.php"); ?>
<?php

session_start();
$_SESSION['trans_id'] = md5(uniqid().mt_rand());//��ʣ�����ɻߣɣ�ȯ��
mb_internal_encoding('EUC-JP');

//����ͤ�����
define('USER_ID_LEN_','8');
define('MAILADDRESS_LEN_','128');
define('URL_LEN_','128');
define('TITLE_LEN_','128');
define('NAME_LEN_','64');
define('CONTENT_LEN_','10000');
define('MAIL_PATTARN_','/^([a-zA-Z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,32}$/');
define('URL_PATTARN_', '/(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9��-��-������-��;\/?:\@&=+\$,%#]+)/');
define('USER_ID_PATTARN_','/^[a-zA-Z]{2,4}[0-9]{5,6}$/');

//���������׽����β��
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

//HTML������print�ؿ�
function s_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//���ϥ����å�
if ($_POST['flag'] == '���'){
	if (!preg_match(USER_ID_PATTARN_,mb_convert_kana($_POST['user_id'],'rn'))){
	$err[] = "XServer���������ID���ǧ���Ƥ���������";
	} else {
		$url = $SECURE_URL."xinfo/?action_api2_checkmaybenotserverid=true&id={$_POST['user_id']}";
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$res = unserialize(curl_exec( $ch ));
		curl_close( $ch );
		if(array_key_exists('result', $res) && $res['result'] === false) {
			$err[] = "�����С�ID�ǤϤʤ�XServer���������ID�����Ϥ��Ƥ���������";
		}
	}
}else{
	if($_POST['user_id']){
	$err[] = "������Ͽ������XServer���������ID�����ˤ��Ƥ���������";
	}
}

if (!$_POST['name'] || strlen($_POST['name']) > NAME_LEN_) {
	$err[] = "̾�����ǧ���Ƥ���������";
}
if (!preg_match(MAIL_PATTARN_, $_POST['mailaddress']) 		//�᡼�륢�ɥ쥹�ѥ���������å�
	|| stristr($_POST['mailaddress'], ',') !== false 		//��,�פ�Ϥ���
	|| $_POST['mailaddress'] != $_POST['mailaddress2']		//��ǧ�᡼��ɥ쥹�����
	|| strlen($_POST['mailaddress']) > MAILADDRESS_LEN_) {
	$err[] = "�᡼�륢�ɥ쥹���ǧ���Ƥ���������";
}
if ((!preg_match(URL_PATTARN_, $_POST['url']) 		//URL�ѥ���������å�
	|| strlen($_POST['url']) > URL_LEN_)			//URL��Ĺ��������å�
	&& strlen($_POST['url']) != 0) {				//url��̤�����ξ�祹�롼
	$err[] = "URL���ǧ���Ƥ���������";
}
if (!$_POST['title'] || strlen($_POST['title']) > TITLE_LEN_) {
	$err[] = "��̾���ǧ���Ƥ���������";
}
if (!$_POST['content'] || strlen($_POST['content']) > CONTENT_LEN_) {
	$err[] = "���Ƥ��ǧ���Ƥ���������";
}

if (!$_POST['flag_privacy'] || $_POST['flag_privacy'] != '1') {
	$err[] = "�Ŀ;���μ�갷���ˤĤ��Ƥ�Ʊ�դ��������å����Ƥ���������";
}

//�ƥ�ץ졼��
require_once'confirm.tpl';

?>

