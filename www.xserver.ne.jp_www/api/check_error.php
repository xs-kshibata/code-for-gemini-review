<?php

// �ѥ���ɥϥå�����
const PASSWORD_HASH = 'ab35c218ff0eef280df33a27494a1d53';

// �ѥ���ɤ����פ��ʤ���粿���֤��ʤ�
$password = $_GET['password'];
if (md5($password) != PASSWORD_HASH) {
    header('Content-Type: application/json');
    http_response_code(401);
    exit;
}

require_once ('../newsman/dblib_www_x.php');

// �����ӥ�̾
$serviceName = 'Xservr';

// DB��³��ǧ
$isConnected = !PEAR::isError($db);

$status = $isConnected ? 'ok' : 'ng';
$message = $isConnected ? '' : $serviceName . '�Υ˥塼��DB�Ȥ���³�˼��Ԥ��ޤ�����';

// �쥹�ݥ�����
$response = [
    'status' => $status,
    'message' => $message,
];

header('Content-Type: application/json');
http_response_code(200);

// json�˥��󥳡��ɤ����֤�
echo json_encode($response);

exit;
