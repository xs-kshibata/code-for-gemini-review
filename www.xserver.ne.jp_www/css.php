<?php
/* ----------------------------------------------------
 URL�ѥ�᡼����name�פ��ͤ��б�����CSS�ե����뤫��
 �������åȥ�ǥ���(PC��)�Υ����������С����Ϥ��ޤ���
 
 ex. css/contents/top.css = css.php?name=top
 
 ��ǥ������������б������к��˻��Ѥ��Ƥ��ޤ���
---------------------------------------------------- */
/* ���å׻���0�� */
$debug = 0;

/* �������åȥ�ǥ��� */
$target_media = "screen and (min-width:970px)";

/* CSS�ե�����γ�Ǽ�ǥ��쥯�ȥ� */
$dir = dirname(__FILE__)."/css";


$regExp = array(
    "BLOCKS" => '/[^\s{;][^{;]*\{(?:[^{}]*\{[^{}]*\}[^{}]*|[^{}]*)*\}/',
    "BLOCKS_INSIDE" => '/[^\s{][^{]*\{[^{}]*\}/',
    "DECLARATIONS" => '/[a-zA-Z\-]+[^;]*:[^;]+;/',
    "RELATIVE_URLS" => '/url\([\'"]?([^\/\)\'"][^:\)\'"]+)[\'"]?\)/',
    "REDUNDANT_COMPONENTS" => '/(?:\/\*([^*\\\\]|\*(?!\/))+\*\/|@import[^;]+;|@-moz-document\s*url-prefix\(\)\s*{(([^{}])+{([^{}])+}([^{}])+)+})/',
    "REDUNDANT_WHITESPACE" => '/\s*(,|:|;|\{|\})\s*/',
    "WHITESPACE_IN_PARENTHESES" => '/\(\s*(\S*)\s*\)/',
    "MORE_WHITESPACE" => '/\s{2,}/',
    "FINAL_SEMICOLONS" => '/;\}/',
    "NOT_WHITESPACE" => '/\S+/'
);

function sanitize( $text ) {
    global $regExp;
    $text = preg_replace( $regExp["REDUNDANT_COMPONENTS"], '', $text );
    $text = preg_replace( $regExp["REDUNDANT_WHITESPACE"], '$1', $text );
    $text = preg_replace( $regExp["WHITESPACE_IN_PARENTHESES"], '($1)', $text );
    $text = preg_replace( $regExp["MORE_WHITESPACE"], ' ', $text );
    $text = preg_replace( $regExp["FINAL_SEMICOLONS"], '}', $text );
    return $text;
}

function fix_url( $text ) {
    global $regExp, $dirpath;
    $url = preg_replace( $regExp["RELATIVE_URLS"], 'url('.$dirpath.'/$1)', $text );
    return $url;
}


/* ����ǥ��쥯�ȥ���Υե�����ѥ���������֤� */
function get_filelist($path) {
    $result = array();
    foreach(glob($path . "/*") as $file) {
        if (is_dir($file)) {
            $result = array_merge($result, get_filelist($file));
        }
        $result[] = $file;
    }
    return $result;
}

/* name�����ꤵ���̵����н�λ */
if(!isset($_GET["name"])) {
    die($debug ? "Error: URL�ѥ�᡼���������Ǥ�" : "");
}

/* �ͤ�Ⱦ�Ѿ�ʸ���ѿ����ϥ��ե󡢥�������������ʳ����ޤޤ�Ƥ���н�λ */
if(!preg_match("/^[a-z0-9\-\_]+$/", $_GET["name"])){
    die($debug ? "Error: �ͤ������Ǥ�" : "");
}

/* $dir��Υե�����򸡺� */
$filename = "";
foreach(get_filelist($dir) as $filepath){
    if(strpos($filepath, $_GET["name"].".css")){
        $filename = $filepath;
        break;
    }
}

/* �ե����뤬¸�ߤ��ʤ���н�λ */
if($filename === "") {
    die($debug ? "Error: �ե����뤬¸�ߤ��ޤ���" : "");
}

$filepath = str_replace( dirname(__FILE__).'/', '', $filename );
$dirpath = substr($filepath, 0, strrpos($filepath, "/"));

/* �������ƽ��� */
//$css_str = file_get_contents($filename);
$url = $filename;
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$res = curl_exec( $ch );
curl_close( $ch );
$css_str = $res;

//$css_str = mb_convert_encoding($css_str, "UTF-8", "EUC-JP");
$css_str = sanitize($css_str);
$css_str = fix_url($css_str);

$blocks = array();
preg_match_all($regExp["BLOCKS"], $css_str, $blocks, PREG_SET_ORDER);
$css_str = "";
for($i = 0; $i < count($blocks); $i++){
    $block = $blocks[$i][0];
        if (strpos($block, $target_media)) {
        $inside_blocks = array();
        preg_match_all($regExp["BLOCKS_INSIDE"], $block, $inside_blocks, PREG_SET_ORDER);
        for($j = 0; $j < count($inside_blocks); $j++){
            $css_str .= $inside_blocks[$j][0];
        }
    }
}

mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/css; charset=EUC-JP');
echo $css_str;