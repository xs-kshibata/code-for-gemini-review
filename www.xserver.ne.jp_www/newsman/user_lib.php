<?php
//HTML出力用print関数
function secure_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

/**
* 許容タグdecode
* @param string $subject 対象文字列（htmlspecialcharsでエスケープされた文字列）
* @param string $tagname 許容対象タグ名
* @param bool   $empty_element_flag 空要素フラグ (空要素:閉じタグが無いタグ <img xxx="xxx" />など)
* 
* @return string html 
*
**/
function enable_tag($subject, $tagname, $empty_element_flag = false){
    $patarn = '';
	$relace_count = 1;

	if($empty_element_flag){
		$patarn = '/&lt;'.$tagname.'.+?&gt/is';
	}else{
		$patarn = '/(?!&lt;'. $tagname .'.+?&lt;'. $tagname .'.+?)&lt;'. $tagname .'.+?\/'. $tagname .'&gt;/is';

		$tag_matches = array();
		preg_match_all('/&lt;'. $tagname .'/is', $subject, $tag_matches);
		$relace_count = count($tag_matches[0]);
	}

	for($ii=0; $ii<$relace_count; $ii++){

		$subject = preg_replace_callback(
			$patarn, 
			function($matches){
				
				$buff = preg_replace_callback(
					'/&lt;\/?\s*[a-z]+?(?:\s+[a-z]+.*?|\s*\/?)&gt;/is',
					function($c_matches){
						$c_buff = htmlspecialchars_decode($c_matches[0]);
						return $c_buff;
					},
					$matches[0]);

				$buff = preg_replace('/(\r|\n|\r\n)/', '', $buff);
				return  $buff;
			},
			$subject);
	}

	return $subject;
}

?>
