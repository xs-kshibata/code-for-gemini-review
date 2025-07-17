<?php
// カノニカル用プロトコルを取得
$canonicalProtocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
    ? "https://"
    : "http://";

// カノニカル用ホスト名（ドメイン名）を取得
$canonicalHost = $_SERVER['HTTP_HOST'];

// カノニカル用URLパスとクエリパラメータを取得
$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$canonicalPath = $urlComponents['path'];

// クエリパラメータの分解
$queryParams = [];
if (isset($urlComponents['query'])) {
    parse_str($urlComponents['query'], $queryParams);
}

// view_idパラメータのみを維持
$canonicalQueryString = '';
if (isset($queryParams['view_id'])) {
    $canonicalQueryString = '?view_id=' . urlencode($queryParams['view_id']);
}

// index.php などのファイル名を除去
$canonicalPath = preg_replace('/(\/index\.(php|html))$/', '/', $canonicalPath);

// 末尾にスラッシュが必要か確認
$isFile = preg_match('/\.[a-zA-Z0-9]+$/', $canonicalPath);
if (!$isFile && $canonicalPath !== '/' && substr($canonicalPath, -1) !== '/') {
    $canonicalPath .= '/';
}

// 正規化URLを構築
$canonicalUrl = $canonicalProtocol . $canonicalHost . $canonicalPath . $canonicalQueryString;
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'EUC-JP'); ?>">
