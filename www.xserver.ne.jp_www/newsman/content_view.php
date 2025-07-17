<?php

require_once('dblib_www_x.php');
require_once('user_lib.php');
$id = $_GET['view_id'];
$rec = new DBrecord("tips", $id);
if(!$rec->content){


	$content = htmlspecialchars($rec->content, ENT_QUOTES, $charset = "EUC-JP");
	$patarn = "/&lt;a(.*?)&quot;(.*?)&quot;(.*?)&gt;(.*?)&lt;\/a&gt;/is";
	$replacement = '<a${1}"${2}"${3}>${4}</a>';
	$content = preg_replace($patarn,$replacement,$content);

	$posted_date = str_replace('-','/',$rec->posted_date);
?>
<h4><?php secure_print($posted_date); ?><br /><?php  secure_print($rec->title); ?> </h4>
<p><?php print nl2br($content); ?></p>
<?php
}
?>