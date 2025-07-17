<?php
/* ========================================================== 

お支払い方法ページ： サイドメニュー用PHP

-------------------------------------------------------------

$sidenav_list にカテゴリ別のリンク情報を格納し、
記述(挿入)した順番でサイドメニューとして表示します。
(カテゴリの順番を変える場合は最下部のHTMLを編集してください)

-------------------------------------------------------------

1個のリンク情報は下記のような配列で構成されています。

array( "label" => "ページ名", "filename" => "dir/url.php" )

label: ページ名。リンクテキストに使われます
filename: サイトルートから見た対象ファイルの相対パス

============================================================ */


$sidenav_list = array(
    "top" => array( "label" => "お支払い方法一覧", "filename" => "price/price_payment_method.php" ),
    "credit" => array( "label" => "クレジットカード", "filename" => "price/price_payment_method_credit.php" ),
    "bank" => array( "label" => "銀行振込", "filename" => "price/price_payment_method_bank.php" ),
    "payeasy" => array( "label" => "ペイジー", "filename" => "price/price_payment_method_pay_easy.php" ),
    "paidy" => array( "label" => "あと払い（ペイディ）", "filename" => "price/price_payment_method_paidy.php" ),
    "prepaid" => array( "label" => "プリペイド", "filename" => "price/price_payment_method_prepaid.php" ),
    "seveneleven" => array( "label" => "セブンイレブン", "filename" => "price/price_payment_method_seven.php" ),
    "lawson" => array( "label" => "ローソン", "filename" => "price/price_payment_method_lawson.php" ),
    "dailyyamazaki" => array( "label" => "デイリーヤマザキ", "filename" => "price/price_payment_method_daily.php" ),
    "ministop" => array( "label" => "ミニストップ", "filename" => "price/price_payment_method_mini.php" ),
    "familymart" => array( "label" => "ファミリーマート", "filename" => "price/price_payment_method_family.php" ),
    "seicomart" => array( "label" => "セイコーマート", "filename" => "price/price_payment_method_seicomart.php" ),
    "receipt" => array( "label" => "受領書発行について", "filename" => "price/price_payment_method_receipt.php" ),
);


/* ----------------------------------------------------------
    現在のページかを判定
------------------------------------------------------------- */
function is_subnav_current($path){
    global $REAL_PATH;
    return strpos( $REAL_PATH, $path ) !== false;
}

/* ----------------------------------------------------------
    HTML生成
------------------------------------------------------------- */
foreach($sidenav_list as $name => $array){
    $html_string = "";
    if(is_subnav_current($array["filename"])){
        $html_string = "<a class=\"side-menu_label is-current\" href=\"".$SITE_URL.$array["filename"]."\"><span class=\"side-menu_label_inner\">".$array["label"]."</span></a>";
    }else{
        $html_string = "<a class=\"side-menu_label\" href=\"".$SITE_URL.$array["filename"]."\"><span class=\"side-menu_label_inner\">".$array["label"]."</span></a>";
    }
    $sidenav_list[$name]["html"] = $html_string;
}


?>
<aside class="side-box visible-l">
    <h3 class="side-box_ttl">お支払い方法</h3>
    <div class="side-box_body">
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list["top"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["credit"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["bank"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["payeasy"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["paidy"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["prepaid"]["html"]; ?>
            </li>
        </ul>
        <h4 class="side-box_sub-ttl"><span>コンビニ</span></h4>
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list["seveneleven"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["lawson"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["dailyyamazaki"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["ministop"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["familymart"]["html"]; ?>
            </li>
            <li class="side-menu_item">
                <?php print $sidenav_list["seicomart"]["html"]; ?>
            </li>
        </ul>
        <h4 class="side-box_sub-ttl"><span>お支払いについて</span></h4>
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list["receipt"]["html"]; ?>
            </li>
        </ul>
    </div>
</aside>