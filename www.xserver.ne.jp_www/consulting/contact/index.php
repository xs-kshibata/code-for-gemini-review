<?php
/******************************************************************
 *�ڳ��ס�
 *	��礻�ե���������Ϥ��줿�ǡ�����ƥ�ץ졼�Ȥ����ƤϤ�ơ�
 *	���ꤷ���᡼�륢�ɥ쥹���������륹����ץȡ�
 *
 *�ڥե����빽����
 *	finish.php 		�᡼�����������λ���̤�ɽ������
 *	finish.tpl		�ƥ�ץ졼��
 *	index.php 		��礻�ե������ɽ������
 *	index.tpl		�ƥ�ץ졼��
 *	confirm.php 	��礻�ե�����γ�ǧ����
 *	confirm.tpl 	�ƥ�ץ졼��
 *	mail_body.php 	�᡼����������ǡ����ƥ�ץ졼�Ȥ����ꤹ��
 *
 *******************************************************************/

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


mb_language("ja");
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');


//HTML������print�ؿ�
function s_print($var){
    print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//�ƥ�ץ졼��
require_once'index.tpl';

?>