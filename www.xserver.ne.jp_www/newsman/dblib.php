<?php
/******************************************************************
*	�ǡ����١��������Ѥ���ؿ����������ץ�
*	��SELECT
*	��UPDETE
*	��INSERT
*	����ʣ�����ɻ�
*******************************************************************/
/******************************************************************
*	��ǡ����١��������
*	���Ѥ���ǡ����١����δĶ����ꡣ
*	PEAR��DB�饤�֥����ɤ߹��ߡ�
*	�ǡ����١�������³��Ω��
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
*	�ǡ����١����ؿ���SELECT��
*	�����ơ�
*	�ǡ�������Ф��롣
*	ʸ���Υ������Ȥ䥨�������פ�DB�⥸�塼��ǽ�������롣
*	�֤���:Ϣ������
*	Array([0] => Array([����̾��]=>[��],[����̾2]=>[��]������)
*		 ([1] => ������)
*		  ������
*	��������ˡ��
*	$db_name 	= array("�ơ��֥�̾��","�ơ��֥�̾2"������);
*	$data_list  = array("����̾��","����̾��",������);
*	$condition	= "���";
*	$value      = array("�ͣ�","�ͣ�"������);
*	$row		= db_select($db_name,$data_list,$condition,$value);
*	����ջ����
*	$condition�����Ѥ����ѿ��ˤ�?���Ѥ���$value�˳�Ǽ����
*	$condition�˴ޤޤ�롩��$value�ο��Ϥ�����
*******************************************************************/

/******************************************************************
*	���ҥ���ץ��ʣ���ơ��֥�ˤޤ�����SELECT��
*	$db_name = array("users AS a","roles AS b","user_role AS ba");
*	$data_list = array("a.name AS user_name","b.name AS role_name","a.id AS user_id","b.id AS role_id");
*	$condition = "WHERE a.id = ba.user_id AND b.id = ba.role_id AND ba.role_id = ?";
*	$value = array(2);
*	����������SQLʸ��
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
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS��
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
*	�ǡ����١����ؿ���INSERT��
*	�����ơ�
*	�ǡ��������������뤳�ȤΤǤ���ؿ���
*	ʸ���Υ������Ȥ䥨�������פ�DB�⥸�塼��ǽ�������롣
*	�֤���:�ʤ�
*
*	��������ˡ��
*	$db_name 	= "�ơ��֥�̾";
*	$value 		= array("�ͣ�","�ͣ�"������);
*	db_insert($db_name,$value);
*******************************************************************/
//insert
function db_insert($db_name,$value) {//
	global $db;

	$count = count($value);//�ͤη�������

	for($i = 0; $i < $count; $i++){
		if(preg_match("/Windows/",$_ENV["OS"])){//WindowsOS����
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
*	�ǡ����١����ؿ���INSERT2��(db_insert_s())
*	�����ơ�
*	�ǡ��������������뤳�ȤΤǤ���ؿ���
*	�������륫���̾��Key�Ȥ���Ϣ�����������Ϥ���
*	ʸ���Υ������Ȥ䥨�������פ�DB�⥸�塼��ǽ�������롣
*	�֤���:�ʤ�
*
*	��������ˡ��
*	$db_name 	= "�ơ��֥�̾";
*	$data_list 		= array("̾����"=>"�ͣ�","̾����"=>"�ͣ�"������);
*	db_insert($db_name,$value);
*******************************************************************/
//insert2
function db_insert_s($db_name,$data_list) {//
	global $db;

	foreach($data_list as $key => $data){
		if(isset($data)){
			if(preg_match("/Windows/",$_ENV["OS"])){//WindowsOS����
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
*	�ǡ����١����ؿ���UPDATE��
*	�����ơ�
*	�ǡ������ﹹ�����뤳�ȤΤǤ���ؿ���
*	ʸ���Υ������Ȥ䥨�������פ�DB�⥸�塼��ǽ�������롣
*	�֤���:�ʤ�
*
*	��������ˡ��
*	$db_name 	= "�ơ��֥�̾";
*	$data_list 	= array("����̾��","����̾��"������);
*	$value 		= array("�ͣ�","�ͣ�"������);
*	$id 		= ��������ս�Σɣ�;
*	db_update($db_name,$data_list,$value,$id);
*******************************************************************/
//update
function db_update($db_name,$data_list,$value,$id) {
	global $db;

	$count = count($value);//�ͤη�������

	for ($i = 0; $i < $count; $i++){
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS����
			$value[$i] =  mb_convert_encoding($value[$i],"SJIS","EUC-JP");
		}
		$sets[] = $data_list[$i]." = ?";//����̾�� "����̾ = ?"�η�������sets�˳�Ǽ
	}

	$sets 		= implode(",",$sets);
	$value[] 	= $id;
	$sql 		= "UPDATE $db_name set $sets where id = ?";
	$sth 		= $db->prepare($sql);


	$db->execute($sth, $value);
}

/**************************************************************
*	��ʣ��Ͽ�ɻ��Ѵؿ�
*	�����ơ�
*	�ե����������ν�ʣ������å�����ؿ�
*	�ǡ�����Ǽ����trans_id������å�����ʣ���ʤ��������å�
*	�ե������������Ȥ�trans_id��������ǡ�����Ǽ��λ��Ʊ������Ͽ
*	�ե�������������դ�trans_id�����Ѥ���Ƥ���
*	���ʣ�����ɻߥơ��֥빽����
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



//������ط�
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
*�쥳���ɡʣ���ˤ�ID�Ǽ�ͳ�˥����򻲾ȡ��񤭹��ߡʹ����ˤǤ��롢���饹��
*$rec = new DBrecord("�ơ��֥�̾", "ID");
*������ˡ
*$rec->�����̾()
*�񤭹�����ˡ
*$rec->�����̾1 = �񤭹��ߥǡ���1
*$rec->�����̾2 = �񤭹��ߥǡ���2
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
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS��
			$this->{'h'}[strtolower($method)] =  mb_convert_encoding($this->{'h'}[strtolower($method)],"EUC-JP","SJIS");
		}
		return $this->{'h'}[strtolower($method)];
	}
		
	public function __get($id) {
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS��
			$res =  mb_convert_encoding($this->{'h'}[strtolower($id)],"EUC-JP","SJIS");
		}else{
			$res = $this->{'h'}[strtolower($id)];
		}
		return $res;
	}
		
	public function __set($id, $value) {
		if (preg_match("/Windows/",$_ENV["OS"])){//WindowsOS��
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