<?php
/******************************************************************
*【概要】
*	問合せフォームに入力されたデータをテンプレートに当てはめて、
*	指定したメールアドレスに送信するスクリプト。
*
*【ファイル構成】
*	finish.php 		メールを送信し完了画面を表示する
*	finish.tpl		テンプレート
*	support.php 			問合せフォームを表示する
*	support.tpl				テンプレート
*	confirm.php 		問合せフォームの確認画面
*	confirm.tpl 	テンプレート
*	mail_body.php 	メール送信するデータテンプレートを設定する
*	
*******************************************************************/

//エスケープ処理の解除
if (get_magic_quotes_gpc()) {//php.iniの設定を確認する。オンの場合エスケープを解除する処理
$_POST['user_id'] 		= stripslashes($_POST['user_id']);
$_POST['name'] 			= stripslashes($_POST['name']);
$_POST['flag'] 			= stripslashes($_POST['flag']);
$_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
$_POST['mailaddress2'] 	= stripslashes($_POST['mailaddress2']);
$_POST['title'] 		= stripslashes($_POST['title']);
$_POST['url'] 			= stripslashes($_POST['url']);
$_POST['content'] 		= stripslashes($_POST['content']);
}

//HTML出力用print関数
function s_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//テンプレート
require_once'support.tpl';

?>
