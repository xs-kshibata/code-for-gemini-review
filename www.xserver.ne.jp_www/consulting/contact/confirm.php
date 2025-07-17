<?php

session_start();
$_SESSION['trans_id'] = md5(uniqid().mt_rand());//��ʣ�����ɻߣɣ�ȯ��


mb_language("ja");mb_internal_encoding('EUC-JP');header ('Content-Type: text/html; charset=EUC-JP');

//����ͤ�����
define('USER_ID_LEN_','8');
define('NAME_LEN_','64');
define('CO_NAME_LEN_','128');
define('MAILADDRESS_LEN_','128');
define('TEL_LEN_','15');
define('USER_ID_PATTARN_','/^[a-zA-Z]{2,4}[0-9]{5,6}$/');
define('MAIL_PATTARN_','/^([a-zA-Z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,32}$/');


//���������׽����β��
if (get_magic_quotes_gpc()) {
    $_POST['user_id'] 		= stripslashes($_POST['user_id']);
    $_POST['flag'] 			= stripslashes($_POST['account']);
    $_POST['name'] 			= stripslashes($_POST['name']);
    $_POST['co_name']       = stripslashes($_POST['co_name']);
    $_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
    $_POST['tel'] 			= stripslashes($_POST['tel']);
    $_POST['contact_detail_list'] = stripslashes($_POST['contact_detail_list']);
}

//HTML������print�ؿ�
function s_print($var){
    print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//���ϥ����å�
if ($_POST['flag'] == 'ͭ'){
    if (!preg_match(USER_ID_PATTARN_,mb_convert_kana($_POST['user_id'],'rn'))){
        $err[] = "XServer���������ID���ǧ���Ƥ���������";
    }
}else{
    $_POST['user_id'] = '';
}

if (!$_POST['name'] || strlen($_POST['name']) > NAME_LEN_) {
    $err[] = "��ô����̾���ǧ���Ƥ���������";
}

if (!$_POST['co_name'] || strlen($_POST['co_name']) > CO_NAME_LEN_) {
    $err[] = "���̾���ǧ���Ƥ���������";
}

if (!preg_match(MAIL_PATTARN_, $_POST['mailaddress']) 		//�᡼�륢�ɥ쥹�ѥ���������å�
    || stristr($_POST['mailaddress'], ',') !== false 		//��,�פ�Ϥ���
    || strlen($_POST['mailaddress']) > MAILADDRESS_LEN_) {
    $err[] = "�᡼�륢�ɥ쥹���ǧ���Ƥ���������";
}

if (!$_POST['tel'] || strlen($_POST['tel']) > TEL_LEN_) {
    $err[] = "�����ֹ���ǧ���Ƥ���������";
}

if (!$_POST['contact_detail_list']) {
    $err[] = "���䤤��碌���Ƥ�����å����Ƥ���������";
} else {
    $contact_detail = implode('��', $_POST['contact_detail_list']);
}

if (!$_POST['flag_privacy'] || $_POST['flag_privacy'] != '1') {
    $err[] = "�ָĿ;���μ�갷���ˤĤ���Ʊ�դ���פ�����å����Ƥ���������";
}

// ���顼������������ϲ��̤�
if ($err) {
    require_once 'index.tpl';
} else {
    require_once 'confirm.tpl';
}

?>
