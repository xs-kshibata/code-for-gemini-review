<?php
mb_internal_encoding('EUC-JP');
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
    $condition  = "WHERE category = ? AND show_flag = ? AND find_in_set(?,service_category) ORDER by maintenance_date DESC, id DESC LIMIT ?";
    $value 		= array(3,0,1,$number);
    $data_list  = db_select($db_name,$data_list,$condition,$value);

    if(count($data_list) != 0) {
        foreach ($data_list as $data) {

            $date = str_replace('-','/',$data['maintenance_date']);
            $datas[$date][] = array(
                'id'    => $data['id'],
                'title' => $data['title'],
                'content' => $data['content']
            );
        }
    }

//リストの出力

    ?>

    <?php
    if (count($datas) != 0) {
        ?>
        <?php
        foreach ($datas as $key => $f) {
            ?>
            <dl class="headlines_box clearfix">
                <dt class="headlines_box_date"><?php secure_print($key); ?></dt>
                <dd class="headlines_box_list">
                    <ul>
                        <?php
                        foreach ($f as $ff) {
                            ?>
                            <li><i class="ico ico_triangle-right"></i><?php if($ff['content'] != "") { ?><a href="../information_detail.php?view_id=<?php print $ff['id']; ?>"><?php } ?>
                                    <?php
                                    if($ff['title']){
                                        secure_print($ff['title']);
                                    }else{
                                        $title =mb_substr($ff['content'],0,40)."・・";
                                        secure_print($title);
                                    }
                                    ?>

                                    <?php if($ff['content'] != "") { ?></a><?php } ?></li>
                        <?php } ?>
                    </ul>
                </dd>
            </dl>
            <?php
        }
        ?>

        <?php
    }else{
        echo('<p>');
        secure_print($config->comment_mente);
        echo('</p>');
    }
}
?>