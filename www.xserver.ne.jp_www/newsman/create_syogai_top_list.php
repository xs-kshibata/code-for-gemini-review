<?php

require_once('dblib_www_x.php');
require_once('user_lib.php');

if($mente_flg == 1){
?>
<dl class="headlines_box clearfix">
    <dt class="headlines_box_date"><?php echo(date("m/d")); ?></dt>
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
$datas		= array();
$number     = (int)$config->view_num_news;
$db_name 	= array('tips');
$data_list 	= array("*");
$condition 	= "WHERE category = ? AND show_flag = ? AND find_in_set(?,service_category) AND title NOT LIKE 'エックスサーバーを装ったフィッシングメールにご注意ください%' ORDER by p_number DESC, posted_date DESC, id DESC LIMIT ?";
$value 		= array(2,0,1,$number);
$data_list  = db_select($db_name,$data_list,$condition,$value);

if(count($data_list) != 0) {
    foreach ($data_list as $data) {
        $datas[] = array(
            'id'    => $data['id'],
            'title' => $data['title'],
            'content' => $data['content']
        );
    }
}

//リストの出力
?>

<?php if (count($datas) != 0) { ?>
    <div class="border border_blue mb20">
    <ul class="list list_arrow-right">
    <?php foreach ($datas as $key => $f) { ?>
        <li><?php if($f['content'] != "") { ?><a href="../information_detail.php?view_id=<?php print $f['id']; ?>"><?php } ?>
        <?php
        if($f['title']){
            secure_print($f['title']);
        }else{
            $title =mb_substr($f['content'],0,40)."・・";
            secure_print($title);
        }
        ?>
        <?php if($f['content'] != "") { ?></a><?php } ?></li>
    <?php } ?>
    </ul>
    </div>
<?php
    }
}
?>
