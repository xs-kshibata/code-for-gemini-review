<?php
/**
 * Amazon���ե� ����URL������쥯�Ƚ���
 */

require_once("../conf.php");

$GET_PAGE_ID = 'id';                   // GET�ѥ�᡼��������������
$GET_REDIRECT_PAGEID = 'id';    // ������쥯����GET�ѥ�᡼��������Ź������

// GET�ѥ�᡼������
$id = $_GET[$GET_PAGE_ID];

// ������쥯����URL����
$redirect_url = $SECURE_URL.'xapanel/myaccount/amazongift/index';
if ($id && $id != '') {
    $redirect_url .= '?'.$GET_REDIRECT_PAGEID.'='.$id;
}
// ������쥯��
header('Location: '.$redirect_url);
