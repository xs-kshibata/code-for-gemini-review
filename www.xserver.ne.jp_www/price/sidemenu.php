<?php
/* ========================================================== 

����ʧ����ˡ�ڡ����� �����ɥ�˥塼��PHP

-------------------------------------------------------------

$sidenav_list �˥��ƥ����̤Υ�󥯾�����Ǽ����
����(����)�������֤ǥ����ɥ�˥塼�Ȥ���ɽ�����ޤ���
(���ƥ���ν��֤��Ѥ�����Ϻǲ�����HTML���Խ����Ƥ�������)

-------------------------------------------------------------

1�ĤΥ�󥯾���ϲ����Τ褦������ǹ�������Ƥ��ޤ���

array( "label" => "�ڡ���̾", "filename" => "dir/url.php" )

label: �ڡ���̾����󥯥ƥ����Ȥ˻Ȥ��ޤ�
filename: �����ȥ롼�Ȥ��鸫���оݥե���������Хѥ�

============================================================ */


$sidenav_list = array(
    "top" => array( "label" => "����ʧ����ˡ����", "filename" => "price/price_payment_method.php" ),
    "credit" => array( "label" => "���쥸�åȥ�����", "filename" => "price/price_payment_method_credit.php" ),
    "bank" => array( "label" => "��Կ���", "filename" => "price/price_payment_method_bank.php" ),
    "payeasy" => array( "label" => "�ڥ�����", "filename" => "price/price_payment_method_pay_easy.php" ),
    "paidy" => array( "label" => "����ʧ���ʥڥ��ǥ���", "filename" => "price/price_payment_method_paidy.php" ),
    "prepaid" => array( "label" => "�ץ�ڥ���", "filename" => "price/price_payment_method_prepaid.php" ),
    "seveneleven" => array( "label" => "���֥󥤥�֥�", "filename" => "price/price_payment_method_seven.php" ),
    "lawson" => array( "label" => "������", "filename" => "price/price_payment_method_lawson.php" ),
    "dailyyamazaki" => array( "label" => "�ǥ��꡼��ޥ���", "filename" => "price/price_payment_method_daily.php" ),
    "ministop" => array( "label" => "�ߥ˥��ȥå�", "filename" => "price/price_payment_method_mini.php" ),
    "familymart" => array( "label" => "�ե��ߥ꡼�ޡ���", "filename" => "price/price_payment_method_family.php" ),
    "seicomart" => array( "label" => "���������ޡ���", "filename" => "price/price_payment_method_seicomart.php" ),
    "receipt" => array( "label" => "���ν�ȯ�ԤˤĤ���", "filename" => "price/price_payment_method_receipt.php" ),
);


/* ----------------------------------------------------------
    ���ߤΥڡ�������Ƚ��
------------------------------------------------------------- */
function is_subnav_current($path){
    global $REAL_PATH;
    return strpos( $REAL_PATH, $path ) !== false;
}

/* ----------------------------------------------------------
    HTML����
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
    <h3 class="side-box_ttl">����ʧ����ˡ</h3>
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
        <h4 class="side-box_sub-ttl"><span>����ӥ�</span></h4>
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
        <h4 class="side-box_sub-ttl"><span>����ʧ���ˤĤ���</span></h4>
        <ul class="side-menu">
            <li class="side-menu_item">
                <?php print $sidenav_list["receipt"]["html"]; ?>
            </li>
        </ul>
    </div>
</aside>