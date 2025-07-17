<?php
/* ========================================================== 

��Ĺ�ڡ����� ���֥ʥӥ����������PHP

-------------------------------------------------------------

$suvnav_list �˥�󥯾�����Ǽ����
����(����)�������֤ǥ��֥ʥӥ��������Ȥ���ɽ�����ޤ���
����¾�ڡ����Ѥ� subnav.php �������ˡ��Ʊ���Ǥ���

-------------------------------------------------------------

1�ĤΥ�󥯾���ϲ����Τ褦������ǹ�������Ƥ��ޤ���

array( "label" => "�ڡ���̾", "filename" => "dir/url.php", "classname" => "class̾" )

label: �ڡ���̾����󥯥ƥ����Ȥ˻Ȥ��ޤ�
filename: �����ȥ롼�Ȥ��鸫���оݥե���������Хѥ�
classname: a������class̾

�������å�°�������ꤷ������в����Τ褦�˥ǡ������ɲä��Ƥ���������

array( "label" => "�ڡ���̾", "filename" => "dir/url.php", "classname" => "class̾", "target" => "_blank" )

filename���/�פǽ�����ȡ��ǥ��쥯�ȥ���Υڡ������٤Ƥ�
������ɽ�����оݤˤʤ�ޤ���(������index.php)
���κݡ�������ɽ����̵�뤷�����ڡ���������� ignore_list �Ȥ����ǡ�����
�ɲä���̵�뤷����URL���Ǽ������������ꤷ�Ƥ���������

array( "label" => "�ڡ���̾", "filename" => "dir/", "classname" => "class̾", "ignore_list" => array("dir/ignore1.php", "dir/ignore2.php") )

filename����������ꤹ��ȡ�����������Хѥ��Τ��٤Ƥ�
������ɽ�����оݤȤʤ�ޤ���(�����������1���ܤ����ꤵ��ޤ�)

============================================================ */

$subnav_list = array(
    array( "label" => "��Ĺ����", "filename" => "feature/index.php", "classname" => "suvnav_item_label suvnav_item_label_feature" ),
    array( "label" => "����ץ�������η�", "filename" => "feature/pricing_plan.php", "classname" => "suvnav_item_label suvnav_item_label_pricing" ),
    array( "label" => "WordPress���Ĥ˶���", "filename" => "feature/wordpress_reasons.php", "classname" => "suvnav_item_label suvnav_item_label_wpreasons" ),
    array( "label" => "�͵��ơ���Cocoon��ȯ����", "filename" => "feature/wordpress.php", "classname" => "suvnav_item_label suvnav_item_label_wordpress" ),
    //array( "label" => "�����ͤ���", "filename" => "feature/feedback.php", "classname" => "suvnav_item_label suvnav_item_label_feedback" ),
	//array( "label" => "�ƥ��ȥ�����", "filename" => "feature/testsite.php", "classname" => "suvnav_item_label suvnav_item_label_testsite" ),
	//array( "label" => "���ѻ���", "filename" => "feature/case.php", "classname" => "suvnav_item_label suvnav_item_label_case" ),
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
