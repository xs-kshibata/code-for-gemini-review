<?php

$http_host =  $_SERVER['HTTP_HOST'];

// サイトURL(本番)
$SITE_URL = "https://www.xserver.ne.jp/";
$XBIZ_URL = "https://business.xserver.ne.jp/";
$SECURE_URL = "https://secure.xserver.ne.jp/";

// サイトURL(XAMPP)
$LOCAL = false;
if( $http_host === 'localhost:8001' || $http_host === '127.0.0.1:8001' ) {
    $SITE_URL = "http://localhost:8001/";
    $XBIZ_URL = "http://business.xserver.test/";
    $LOCAL = true;
} else if( $http_host === 'xserver.test' ) {
    $SITE_URL = "http://xserver.test/";
    $XBIZ_URL = "http://business.xserver.test/";
    $LOCAL = true;
}

$STAGING = $http_host === 'staging.x-local.jp';
$PRODUCTION = !$LOCAL && !$STAGING;

// サイトURL(ステージング)
if($STAGING) {
    $SITE_URL = "https://staging.x-local.jp/site/xservernejp/";
    $XBIZ_URL = "https://staging.x-local.jp/site/xserver_business/";
    $SECURE_URL = "https://staging.x-local.jp/xserver/";
}

// パスワード再設定フォームURL
$REISSUE_INFO_URL = "https://secure.xserver.ne.jp/xinfo/?action_reissue_index=true";
$REISSUE_SERVER_URL = "https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true";

// 絶対パス
$scheme = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$REAL_PATH = $scheme.$http_host.$_SERVER['PHP_SELF'];
$REQUEST_URL = $scheme.$http_host.$_SERVER['REQUEST_URI'];
$FILE_PATH = explode($SITE_URL, $REAL_PATH);
$FILE_PATH = $FILE_PATH[1];

// サイト名
$SITE_TITLE = "レンタルサーバーならエックスサーバー";

// サイト説明文
$SITE_DESCRIPTION = "高速かつ高い安定性を誇る高性能レンタルサーバー【エックスサーバー】稼働率99.99％以上の高い安定性で、業界トップクラスの高コストパフォーマンスを誇る高品質レンタルサーバーです。月額990円(税込)から利用可能。まずは無料お試し10日間。";

// モバイル端末でPC用のレイアウトが有効となっているかどうか
$PC_LAYOUT = $_COOKIE["xservernejp_pclayout"] === "enabled";

// サイトルートからの相対パスをもとに更新日時付きでファイルURLを出力(キャッシュ対策用)
function print_fileURL($filename) {
    global $SITE_URL;
    $site_url = $SITE_URL;
    $site_url = substr($site_url, -1) === "/" ? $site_url : $site_url."/";
    $file_url = dirname(__FILE__)."/".$filename;
    if (file_exists($file_url)) {
        print $site_url.$filename."?date=".date("YmdHis", filemtime($file_url));
    } else {
        print "FileNotFound";
    }
}
// 現在のURLパスを取得してクエリパラメータを除去
$canonicalUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// index.php などのファイル名を除去して、パスがファイル名で終わっていた場合を記録
$canonicalUrl = preg_replace('/(\/index\.(php|html))$/', '/', $canonicalUrl);
$isFile = preg_match('/\.[a-zA-Z0-9]+$/', $canonicalUrl);

// ファイルで終わらないパスにはスラッシュを追加
if (!$isFile && $canonicalUrl !== '/' && substr($canonicalUrl, -1) !== '/') {
    $canonicalUrl .= '/';
}
// 正規化URLを構築
$canonicalUrl = $scheme.$http_host. $canonicalUrl;

//HTML出力用関数
function print_html($str){
	print htmlspecialchars($str, ENT_QUOTES, $charset = "EUC-JP");
}

function redirect_referral()
{
    global $SECURE_URL;

    $referral_token = $_GET['referral_token'];
    if (!is_string($referral_token) || $referral_token === '') {
        return;
    }
    $query = http_build_query([
        'action_register_referral' => 'true',
        'service' => 'xserver',
        'referral_token' => $referral_token,
    ]);
    $redirect_url = $SECURE_URL . 'xinfo/?' . $query;
    header('Location: ' . $redirect_url, true, 302);
    exit;
}

function redirect_cp250501()
{
    global $SECURE_URL;

    if (!is_string($cp_token = $_GET['cpcd']) || $cp_token === '') {
        return;
    }
    $query = http_build_query([
        'action_register_limitedcampaign_cp250501_setparam' => 'true',
        'token' => $_GET['cpcd'],
    ]);
    $redirect_url = $SECURE_URL . 'xinfo/?' . $query;
    header('Location: ' . $redirect_url, true, 302);
    exit;
}

?>