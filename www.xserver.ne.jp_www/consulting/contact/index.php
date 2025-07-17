<?php
/******************************************************************
 *【概要】
 *	問合せフォームに入力されたデータをテンプレートに当てはめて、
 *	指定したメールアドレスに送信するスクリプト。
 *
 *【ファイル構成】
 *	finish.php 		メールを送信し完了画面を表示する
 *	finish.tpl		テンプレート
 *	index.php 		問合せフォームを表示する
 *	index.tpl		テンプレート
 *	confirm.php 	問合せフォームの確認画面
 *	confirm.tpl 	テンプレート
 *	mail_body.php 	メール送信するデータテンプレートを設定する
 *
 *******************************************************************/

//エスケープ処理の解除
if (get_magic_quotes_gpc()) {
    $_POST['user_id'] 		= stripslashes($_POST['user_id']);
    $_POST['flag'] 			= stripslashes($_POST['account']);
    $_POST['name'] 			= stripslashes($_POST['name']);
    $_POST['co_name']       = stripslashes($_POST['co_name']);
    $_POST['mailaddress'] 	= stripslashes($_POST['mailaddress']);
    $_POST['tel'] 			= stripslashes($_POST['tel']);
    $_POST['contact_detail_list'] = stripslashes($_POST['contact_detail_list']);
}


mb_language("ja");
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');


//HTML出力用print関数
function s_print($var){
    print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//テンプレート
require_once'index.tpl';

?>