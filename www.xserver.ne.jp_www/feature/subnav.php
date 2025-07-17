<?php
/* ========================================================== 

特長ページ： サブナビゲーション用PHP

-------------------------------------------------------------

$suvnav_list にリンク情報を格納し、
記述(挿入)した順番でサブナビゲーションとして表示します。
その他ページ用の subnav.php も使用方法は同じです。

-------------------------------------------------------------

1個のリンク情報は下記のような配列で構成されています。

array( "label" => "ページ名", "filename" => "dir/url.php", "classname" => "class名" )

label: ページ名。リンクテキストに使われます
filename: サイトルートから見た対象ファイルの相対パス
classname: aタグのclass名

ターゲット属性を設定したければ下記のようにデータを追加してください。

array( "label" => "ページ名", "filename" => "dir/url.php", "classname" => "class名", "target" => "_blank" )

filenameを「/」で終えると、ディレクトリ内のページすべてが
カレント表示の対象になります。(リンク先はindex.php)
その際、カレント表示を無視したいページがあれば ignore_list というデータを
追加して無視したいURLを格納した配列を設定してください。

array( "label" => "ページ名", "filename" => "dir/", "classname" => "class名", "ignore_list" => array("dir/ignore1.php", "dir/ignore2.php") )

filenameに配列を設定すると、配列内の相対パスのすべてが
カレント表示の対象となります。(リンク先は配列の1番目が設定されます)

============================================================ */

$subnav_list = array(
    array( "label" => "特長一覧", "filename" => "feature/index.php", "classname" => "suvnav_item_label suvnav_item_label_feature" ),
    array( "label" => "シンプルな料金体系", "filename" => "feature/pricing_plan.php", "classname" => "suvnav_item_label suvnav_item_label_pricing" ),
    array( "label" => "WordPress運営に強い", "filename" => "feature/wordpress_reasons.php", "classname" => "suvnav_item_label suvnav_item_label_wpreasons" ),
    array( "label" => "人気テーマCocoonを開発・提供", "filename" => "feature/wordpress.php", "classname" => "suvnav_item_label suvnav_item_label_wordpress" ),
    //array( "label" => "お客様の声", "filename" => "feature/feedback.php", "classname" => "suvnav_item_label suvnav_item_label_feedback" ),
	//array( "label" => "テストサイト", "filename" => "feature/testsite.php", "classname" => "suvnav_item_label suvnav_item_label_testsite" ),
	//array( "label" => "利用事例", "filename" => "feature/case.php", "classname" => "suvnav_item_label suvnav_item_label_case" ),
);

function is_subnuv_current($path, $ignore_list){
    global $REAL_PATH;
    $flag = false;
    if(is_array($path)){
        for($i = 0, $len = count($path); $i < $len; ++$i){
            if(strpos( $REAL_PATH, $path[$i] ) !== false){
                $flag = true;
                break;
            }
        }
    }else{
        if( strpos( $REAL_PATH, $path ) ) {
            $flag = true;
            if($ignore_list){
                for($j = 0, $jlen = count($ignore_list); $j < $jlen; ++$j){
                    if( strpos( $REAL_PATH, $ignore_list[$j] )){
                        $flag = false;
                        break;
                    }
                }
            }
        }else{
            $flag = false;
        }
    }
    return $flag;
}

function create_subnav_tab($list){
    global $SITE_URL;
    $html_string = "";
    for($i = 0, $size = count($list); $i < $size; ++$i){
        $ary = $list[$i];
        $filename = $ary["filename"];
        $classname = $ary["classname"];
        $link_url = is_array($filename) ? $SITE_URL.$filename[0] : $SITE_URL.$filename;
        if( is_subnuv_current( $filename, $ary["ignore_list"] ) ) {
            if( isset($ary["target"]) ) {
                $html_string .= "<li><a class=\"is-current ".$classname."\" href=\"".$link_url."\" target=\"".$ary["target"]."\">".$ary["label"]."</a></li>\n";
            }else{
                $html_string .= "<li><a class=\"is-current ".$classname."\" href=\"".$link_url."\">".$ary["label"]."</a></li>\n";
            }
        }else{
            if( isset($ary["target"]) ) {
                $html_string .= "<li><a class=\"".$classname."\" href=\"".$link_url."\" target=\"".$ary["target"]."\">".$ary["label"]."</a></li>\n";
            }else{
                $html_string .= "<li><a class=\"".$classname."\" href=\"".$link_url."\">".$ary["label"]."</a></li>\n";
            }
        }
    }
    return $html_string;
}
?>

<ul class="main-header_subnav">
    <?php print create_subnav_tab($subnav_list); ?>
</ul>
