<?php

require_once('dblib_www_x.php');
require_once('user_lib.php');

if($mente_flg == 1){

?>
<li><a href="#">現在、メンテンナンス中です。ご迷惑をおかけしますが今しばらくお待ちください。</a></li>
<?php

}else{

//設定ファイルを読み込む
$config = new DBrecord("config", 1);

//リストの取得
$number     = (int)$config->list_num_news;
$db_name 	= array('tips');
$data_list 	= array("*");

$condition 	 = "WHERE category = ? ";
$condition 	.= "AND show_flag = ? ";
$condition 	.= "AND CONCAT(',', `service_category`,',') REGEXP ',(1|2|3|4|5),' ";
$condition 	.= "AND title LIKE '%当サービスを装ったフィッシングメールにご注意ください%' ";
$condition 	.= "ORDER by p_number DESC,posted_date DESC,id DESC LIMIT ?";

$value 		= array(1,1,$number);
$data_list  = db_select($db_name,$data_list,$condition,$value);

// ニュース管理で選択するサービス毎の遷移先 .
$hrefs = array();
$hrefs[0] = '//www.xserver.ne.jp/404.php';                                  // 404 .
$hrefs[1] = '//www.xserver.ne.jp/information_detail.php?view_id=';          // エックスサーバー .
$hrefs[2] = '//support.xserver.ne.jp/information/detail.php?view_id=';      // XServerビジネス .
$hrefs[3] = '//www.xdomain.ne.jp/information_detail.php?view_id=';          // XServerドメイン .
$hrefs[4] = '//shop.xserver.ne.jp/support/information/detail.php?view_id='; // XServerショップ .
$hrefs[5] = '//drive.xserver.ne.jp/support/information/detail.php?view_id=';   // XServerドライブ .


//リストの出力
?>
<?php

    if (count($data_list) != 0){
        $i = 2;
        foreach($data_list as $f) {
            if(($i%2) === 0){
                $class_name = ' class="diff_back"';
            }else{
                $class_name = "";
            }
            $i = $i + 1;
            $posted_date = $f['posted_date'];
            $posted_date = str_replace("-0","-",$posted_date);
            $patarn = "/\d{4}-(\d{1,2})-(\d{1,2})/";
            $replacement = '${1}月${2}日';
            $posted_date = preg_replace($patarn,$replacement,$posted_date);
            $services = explode(',', $f['service_category']);

?>
<li><a href="<?php print($hrefs[(int)$services[0]] . $f['id']); ?>"><?php secure_print($f['title']); ?></a></li>
<?php

	}
}

?>
<?php

}

?>