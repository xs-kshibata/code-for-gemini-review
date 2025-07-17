<?php
/**
 * Amazonギフト 当選URLリダイレクト処理
 */

require_once("../conf.php");

$GET_PAGE_ID = 'id';                   // GETパラメータ：当選コード
$GET_REDIRECT_PAGEID = 'id';    // リダイレクト先GETパラメータ：代理店コード

// GETパラメータ取得
$id = $_GET[$GET_PAGE_ID];

// リダイレクト先URL作成
$redirect_url = $SECURE_URL.'xapanel/myaccount/amazongift/index';
if ($id && $id != '') {
    $redirect_url .= '?'.$GET_REDIRECT_PAGEID.'='.$id;
}
// リダイレクト
header('Location: '.$redirect_url);
