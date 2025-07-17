<?php
//HTML������print�ؿ�
function secure_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

/**
* ���ƥ���decode
* @param string $subject �о�ʸ�����htmlspecialchars�ǥ��������פ��줿ʸ�����
* @param string $tagname �����оݥ���̾
* @param bool   $empty_element_flag �����ǥե饰 (������:�Ĥ�������̵������ <img xxx="xxx" />�ʤ�)
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
