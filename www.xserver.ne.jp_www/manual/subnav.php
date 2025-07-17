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
directlink: 外部サイトなど直接URLを記述します（filenameより優先されます）

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
	array( "label" => "よくある質問",
		"filename" => array(
			"support/faq/",
		),
		"classname" => "suvnav_item_label suvnav_item_label_support_faq"
	),
    array( "label" => "マニュアル",
        "filename" => array(
                "manual/"
        ),
        "classname" => "suvnav_item_label suvnav_item_label_support"
    ),
	array( "label" => "コミュニティ",
        "target" => "_blank",
        "directlink" =>  "https://community.xserver.ne.jp/",
		"classname" => "suvnav_item_label suvnav_item_label_community"
	),
    /*array( "label" => "他社からのお引越し",
        "filename" => array(
            "order/order_transfer_server.php",
        ),
        "classname" => "suvnav_item_label suvnav_item_label_order_transfer"
    ),
    array(
        "label" => "ニュース",
        "filename" => array(
            "support/news.php",
            "news_detail.php",
        ),
        "classname" => "suvnav_item_label suvnav_item_label_support_news"
    ),*/
    array(
        "label" => "障害・メンテナンス情報",
        "filename" => array(
            "support/information.php",
            "support/history.php",
            "information_detail.php"
        ),
        "classname" => "suvnav_item_label suvnav_item_label_support_info"
    ),
    array( "label" => "お問い合わせ", "filename" => array(
        "support/index.php",
        "support/confirm.php",
        "support/finish.php"
    ),
        "classname" => "suvnav_item_label suvnav_item_label_support"
    ),
);

function is_subnuv_current($path, $ignore_list){
    global $REAL_PATH;
    $flag = false;
    if(is_array($path)){
        for($i = 0, $len = count($path); $i < $len; ++$i){
            if(strpos( $REAL_PATH, $path[$i] ) !== false){
                $flag = true;
                if($ignore_list){
                    for($j = 0, $jlen = count($ignore_list); $j < $jlen; ++$j){
                        if( strpos( $REAL_PATH, $ignore_list[$j] )){
                            $flag = false;
                            break;
                        }
                    }
                }
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
        //$filename = (!$_REQUEST['target'])? $ary["filename"]: $ary["filename2"];
        $filename = $ary["filename"];
        $classname = $ary["classname"];
        $link_url = is_array($filename) ? $SITE_URL.$filename[0] : $SITE_URL.$filename;
        if($ary["directlink"]){$link_url = $ary["directlink"];}
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
