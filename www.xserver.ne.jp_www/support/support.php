<?php
/******************************************************************
*�ڳ��ס�
*	��礻�ե���������Ϥ��줿�ǡ�����ƥ�ץ졼�Ȥ����ƤϤ�ơ�
*	���ꤷ���᡼�륢�ɥ쥹���������륹����ץȡ�
*
*�ڥե����빽����
*	finish.php 		�᡼�����������λ���̤�ɽ������
*	finish.tpl		�ƥ�ץ졼��
*	support.php 			��礻�ե������ɽ������
*	support.tpl				�ƥ�ץ졼��
*	confirm.php 		��礻�ե�����γ�ǧ����
*	confirm.tpl 	�ƥ�ץ졼��
*	mail_body.php 	�᡼����������ǡ����ƥ�ץ졼�Ȥ����ꤹ��
*	
*******************************************************************/

//���������׽����β��
if (get_magic_quotes_gpc()) {//php.ini��������ǧ���롣����ξ�票�������פ����������
$_POST['user_id'] 		= stripslashes($_POST['user_id']);
$_POST['name'] 			= stripslashes($_POST['name']);
$_POST['flag'] 			= stripslashes($_POST['flag']);
$_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
$_POST['mailaddress2'] 	= stripslashes($_POST['mailaddress2']);
$_POST['title'] 		= stripslashes($_POST['title']);
$_POST['url'] 			= stripslashes($_POST['url']);
$_POST['content'] 		= stripslashes($_POST['content']);
}

//HTML������print�ؿ�
function s_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//�ƥ�ץ졼��
require_once'support.tpl';

?>
