<?php

// パスワードハッシュ値
const PASSWORD_HASH = 'ab35c218ff0eef280df33a27494a1d53';

// パスワードが一致しない場合何も返さない
$password = $_GET['password'];
if (md5($password) != PASSWORD_HASH) {
    header('Content-Type: application/json');
    http_response_code(401);
    exit;
}

require_once ('../newsman/dblib_www_x.php');

// サービス名
$serviceName = 'Xservr';

// DB接続確認
$isConnected = !PEAR::isError($db);

$status = $isConnected ? 'ok' : 'ng';
$message = $isConnected ? '' : $serviceName . 'のニュースDBとの接続に失敗しました。';

// レスポンス生成
$response = [
    'status' => $status,
    'message' => $message,
];

header('Content-Type: application/json');
http_response_code(200);

// jsonにエンコードして返す
echo json_encode($response);

exit;
