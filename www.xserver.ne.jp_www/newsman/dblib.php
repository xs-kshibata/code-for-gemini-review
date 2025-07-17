<?php
/******************************************************************
*	データベースを利用する関数定義スクリプト
*	・SELECT
*	・UPDETE
*	・INSERT
*	・重複送信防止
*******************************************************************/
/******************************************************************
*	＜データベース設定＞
*	利用するデータベースの環境設定。
*	PEARのDBライブラリの読み込み。
*	データベースの接続確立。
*	
*******************************************************************/
ini_set('include_path', '/home/k_system/netowl/firebird-server/lib/PEAR/');

require_once("DB.php");


$dbUser = "k_system";
$dbPass = "GvufWzm6K4eDBLPR";
$dbHost = "localhost";
$dbName = "k_system_netowl";
$dbType = "mysql";
$dsn 	= "$dbType://$dbUser:$dbPass@$dbHost/$dbName";

$db 	=& DB::connect($dsn, array());

if (PEAR::isError($db)) {
    $mente_flg = 1;
}else{
    $db->query('set names ujis');
}

/*****************************************************************
*	データベース関数〜SELECT〜
*	＜内容＞
*	データを抽出する。
*	文字のクオートやエスケープはDBモジュールで処理される。
*	返り値:連想配列
*	Array([0] => Array([要素名１]=>[値],[要素名2]=>[値]・・・)
*		 ([1] => ・・・)
*		  ・・・
*	＜利用方法＞
*	$db_name 	= array("テーブル名１","テーブル名2"・・・);
*	$data_list  = array("要素名１","要素名２",・・・);
*	$condition	= "条件";
*	$value      = array("値１","値２"・・・);
*	$row		= db_select($db_name,$data_list,$condition,$value);
*	＜注意事項＞
*	$conditionに利用する変数には?を用い、$valueに格納する
*	$conditionに含まれる？と$valueの数はそろえる
*******************************************************************/

/******************************************************************
*	記述サンプル（複数テーブルにまたがるSELECT）
*	$db_name = array("users AS a","roles AS b","user_role AS ba");
*	$data_list = array("a.name AS user_name","b.name AS role_name","a.id AS user_id","b.id AS role_id");
*	$condition = "WHERE a.id = ba.user_id AND b.id = ba.role_id AND ba.role_id = ?";
*	$value = array(2);
*	＜作成されるSQL文＞
*	SELECT
*		a.name AS users,
*		b.name AS roles,
*		a.id AS user_id,
*		b.id AS role_id
*	FROM
*		users AS a,
*		roles AS b,
*		user_role AS ba
*	WHERE
*		a.id = ba.user_id AND
*		b.id = ba.role_id AND
*		ba.role_id = ?;
*********************************************************************/
//select
function db_select ($db_name,$data_list,$condition,$value){
	global $db,$mente_flg;
    if($mente_flg){
       return false;
   }
	$db_name 	= implode(",",$db_name);
	$data_list 	= implode(",",$data_list);
	$sql 		= "SELECT $data_list FROM $db_name $condition;";
	$result		= $db->query($sql,$value);
	$count 		= 0;
    if (PEAR::isError($result)) {
       return false;
   }
	while ($rs = $result->fetchRow(DB_FETCHMODE_ASSOC)){
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS難
			foreach ($rs as $key=>$data)	{
				$rs["$key"] = mb_convert_encoding($rs["$key"],"EUC-JP","SJIS");
			}
		}
		foreach ($rs as $key=>$data)	{
			$res[$count][$key] = $data;
		}

		$count ++;
	}
return $res;
}

/*****************************************************************
*	データベース関数〜INSERT〜
*	＜内容＞
*	データを一件挿入することのできる関数。
*	文字のクオートやエスケープはDBモジュールで処理される。
*	返り値:なし
*
*	＜利用方法＞
*	$db_name 	= "テーブル名";
*	$value 		= array("値１","値２"・・・);
*	db_insert($db_name,$value);
*******************************************************************/
//insert
function db_insert($db_name,$value) {//
	global $db;

	$count = count($value);//値の件数を抽出

	for($i = 0; $i < $count; $i++){
		if(preg_match("/Windows/",$_ENV["OS"])){//WindowsOS処理
			$value[$i] =  mb_convert_encoding($value[$i],"SJIS","EUC-JP");
		}
		$value_list[] = '?';
	}

	$value_list = implode(",",$value_list);
	$sql 		= "INSERT INTO $db_name VALUES ($value_list)";
	$sth 		= $db->prepare($sql);

	$db->execute($sth,$value);
}

/*****************************************************************
*	データベース関数〜INSERT2〜(db_insert_s())
*	＜内容＞
*	データを一件挿入することのできる関数。
*	挿入するカラム名をKeyとした連想配列を受け渡す。
*	文字のクオートやエスケープはDBモジュールで処理される。
*	返り値:なし
*
*	＜利用方法＞
*	$db_name 	= "テーブル名";
*	$data_list 		= array("名前１"=>"値１","名前２"=>"値２"・・・);
*	db_insert($db_name,$value);
*******************************************************************/
//insert2
function db_insert_s($db_name,$data_list) {//
	global $db;

	foreach($data_list as $key => $data){
		if(isset($data)){
			if(preg_match("/Windows/",$_ENV["OS"])){//WindowsOS処理
				$data =  mb_convert_encoding($data,"SJIS","EUC-JP");
			}
			$value_list[] = '?';
			$value[] = $data;
			$name_list[] = $key;
		}
	}
	$value_list = implode(",",$value_list);
	$name_list = implode(",",$name_list);
	$sql 		= "INSERT INTO $db_name($name_list) VALUES ($value_list)";
	$sth 		= $db->prepare($sql);
	$db->execute($sth,$value);
}


/*****************************************************************
*	データベース関数〜UPDATE〜
*	＜内容＞
*	データを一件更新することのできる関数。
*	文字のクオートやエスケープはDBモジュールで処理される。
*	返り値:なし
*
*	＜利用方法＞
*	$db_name 	= "テーブル名";
*	$data_list 	= array("要素名１","要素名２"・・・);
*	$value 		= array("値１","値２"・・・);
*	$id 		= 更新する箇所のＩＤ;
*	db_update($db_name,$data_list,$value,$id);
*******************************************************************/
//update
function db_update($db_name,$data_list,$value,$id) {
	global $db;

	$count = count($value);//値の件数を抽出

	for ($i = 0; $i < $count; $i++){
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS処理
			$value[$i] =  mb_convert_encoding($value[$i],"SJIS","EUC-JP");
		}
		$sets[] = $data_list[$i]." = ?";//要素名を "要素名 = ?"の形で配列setsに格納
	}

	$sets 		= implode(",",$sets);
	$value[] 	= $id;
	$sql 		= "UPDATE $db_name set $sets where id = ?";
	$sth 		= $db->prepare($sql);


	$db->execute($sth, $value);
}

/**************************************************************
*	重複登録防止用関数
*	＜内容＞
*	フォーム送信の重複をチェックする関数
*	データ格納時にtrans_idをチェックし重複がないかチェック
*	フォーム送信ごとにtrans_idを取得しデータ格納完了と同時に登録
*	フォームの送信日付とtrans_idが蓄積されていく
*	＜重複送信防止テーブル構成＞
*	DROP TABLE IF EXISTS trans_check;
*	CREATE TABLE trans_check (
*		trans_id VARCHAR(32),
*		posted_date TIMESTAMP
*	);
***************************************************************/
//trans_check
function check_trans_id($id) {
	global $db;
	$res = $db->query("SELECT COUNT(trans_id) FROM trans_check WHERE trans_id=?", array($id));
	$res->fetchInto($row);
	return $row[0];
}

function add_trans_id($id) {
	global $db;
	$sth = $db->prepare("INSERT INTO trans_check VALUES(?, now())");
	$db->execute($sth, array($id));
	}

function get_trans_id() {
	$id = mt_rand();
	while (check_trans_id($id)) { $id = mt_rand(); }
	return $id;
}



//役割情報関係
function get_role_id($role) {
	global $db;
	$res = $db->query("SELECT id FROM roles WHERE name=?", array($role));
	if ($res != null) {
		$res->fechInto($row);
		return $row[0];
	}
	return null;
}

function has_role($user, $role) {
	global $db;
	
	$role_id = get_role_id($role);
	$res = $db->query("SELECT user_id FROM user_role WHERE user_id=? AND role_id=?", array($user, $role_id));
	if ($res != null) {
		$res->fetchInto($row);
		return ((int) $row[0] == (int) $user) ? true : false;
	}
	return false;
}

/*************************************************************************
*レコード（１件）をIDで自由にカラムを参照、書き込み（更新）できる、クラス。
*$rec = new DBrecord("テーブル名", "ID");
*参照方法
*$rec->カラム名()
*書き込み方法
*$rec->カラム名1 = 書き込みデータ1
*$rec->カラム名2 = 書き込みデータ2
*				 :
*$rec->Update( );
***************************************************************************/

class DBRecord {
	var $h;
	var $table;
	var $id;
	
	public function DBRecord($table, $id) {

	global $db,$mente_flg;
        if($mente_flg){
            return false;
        }
		$res = $db->query("SELECT * from $table WHERE id=?", array($id));
        if (PEAR::isError($res)) {
           return false;
       }
		$res->fetchInto($row, DB_FETCHMODE_ASSOC);
		$this->{'h'} = $row;
		$this->{'table'} = $table;
		$this->{'id'} = $id;
	}
	
	public function __call($method, $args) {
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS難
			$this->{'h'}[strtolower($method)] =  mb_convert_encoding($this->{'h'}[strtolower($method)],"EUC-JP","SJIS");
		}
		return $this->{'h'}[strtolower($method)];
	}
		
	public function __get($id) {
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS難
			$res =  mb_convert_encoding($this->{'h'}[strtolower($id)],"EUC-JP","SJIS");
		}else{
			$res = $this->{'h'}[strtolower($id)];
		}
		return $res;
	}
		
	public function __set($id, $value) {
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS難
			$value =  mb_convert_encoding($value,"SJIS","EUC-JP");
		}
		$this->{'h'}[strtolower($id)] = $value;
	}
	
	public function Update() {
		global $db;
		
		$fields = array();
		$values = array();
		
		foreach(array_keys($this->{'h'}) as $key) {
			if ($key != "id") {
				$fields[] = $key." = ?";
				$values[] = $this->{'h'}[$key];
			}
		}
		$fields = join(",", $fields);
		$values[] = $this->{'id'};
		
		$sql = "UPDATE {$this->{'table'}} SET $fields WHERE id = ?";
		$sth = $db->prepare($sql);
		$db->execute($sth, $values);
	}
}
	
?>