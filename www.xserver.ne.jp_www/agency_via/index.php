<?php 
/**
 * [XSERVER���ӥ��ͥ��ѡ��ȥʡ�] ��������URL������쥯�Ƚ���
 */

require_once("../conf.php");

$GET_AGENCYCD = 'cd';                   // GET�ѥ�᡼��������Ź������
$GET_TYPE = 'type';                     // GET�ѥ�᡼��������
$GET_REDIRECT_AGENCYCD = 'agencycd';    // ������쥯����GET�ѥ�᡼��������Ź������

// GET�ѥ�᡼������
$agencycd = $_GET[$GET_AGENCYCD];
$type = $_GET[$GET_TYPE];

// ������쥯����URL����
$redirect_url = $SECURE_URL.'xinfo/?action_register_index=on';
$redirect_url .= '&service=xserver';
if ($agencycd && $agencycd != '') {
    $redirect_url .= '&'.$GET_REDIRECT_AGENCYCD.'='.$agencycd;
}
// ������쥯��
header('Location: '.$redirect_url);
