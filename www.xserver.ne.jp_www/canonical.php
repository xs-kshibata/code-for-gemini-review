<?php
// ���Υ˥����ѥץ�ȥ�������
$canonicalProtocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
    ? "https://"
    : "http://";

// ���Υ˥����ѥۥ���̾�ʥɥᥤ��̾�ˤ����
$canonicalHost = $_SERVER['HTTP_HOST'];

// ���Υ˥�����URL�ѥ��ȥ�����ѥ�᡼�������
$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$canonicalPath = $urlComponents['path'];

// ������ѥ�᡼����ʬ��
$queryParams = [];
if (isset($urlComponents['query'])) {
    parse_str($urlComponents['query'], $queryParams);
}

// view_id�ѥ�᡼���Τߤ�ݻ�
$canonicalQueryString = '';
if (isset($queryParams['view_id'])) {
    $canonicalQueryString = '?view_id=' . urlencode($queryParams['view_id']);
}

// index.php �ʤɤΥե�����̾�����
$canonicalPath = preg_replace('/(\/index\.(php|html))$/', '/', $canonicalPath);

// �����˥���å��夬ɬ�פ���ǧ
$isFile = preg_match('/\.[a-zA-Z0-9]+$/', $canonicalPath);
if (!$isFile && $canonicalPath !== '/' && substr($canonicalPath, -1) !== '/') {
    $canonicalPath .= '/';
}

// ������URL����
$canonicalUrl = $canonicalProtocol . $canonicalHost . $canonicalPath . $canonicalQueryString;
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'EUC-JP'); ?>">
