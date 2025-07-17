<?php

require_once('dblib_www_x.php');
require_once('user_lib.php');

if($mente_flg == 1){

?>
<dl class="headlines_box clearfix">
    <dt class="headlines_box_date"><i class="ico ico_circle-right"></i><?php echo(date("m/d")); ?></dt>
    <dd class="headlines_box_list">
        <ul>
            <li><i class="ico ico_triangle-right"></i>現在、メンテンナンス中です。ご迷惑をおかけしますが今しばらくお待ちください。</li>
        </ul>
    </dd>
</dl>
<?php

}else{

//設定ファイルを読み込む
$config = new DBrecord("config", 1);

//リストの取得
$number     = (int)$config->list_num_news;
$db_name 	= array('tips');
$data_list 	= array("*");
$condition 	= "WHERE category = ? AND show_flag = ? AND find_in_set(?,service_category) ORDER by p_number DESC, posted_date DESC, id DESC LIMIT ?";
$value 		= array(1,0,1,$number);
$data_list  = db_select($db_name,$data_list,$condition,$value);

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
?>
<dl class="headlines_box clearfix">
    <dt class="headlines_box_date"><?php secure_print($posted_date); ?></dt>
    <dd class="headlines_box_list">
        <ul>
            <li><i class="ico ico_triangle-right"></i><?php if($f['content'] != "") { ?><a href="news_detail.php?view_id=<?php print $f['id']; ?>" title="<?php secure_print($f['title']); ?>"><?php } ?><?php secure_print($f['title']); ?><?php if($f['content'] != "") { ?></a><?php } ?></li>
        </ul>
    </dd>
</dl>
<?php

	}
}

?>
<?php

}

?>