<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<?php
require_once('./newsman/dblib_www_x.php');
require_once('./newsman/user_lib.php');

$id = $_GET['view_id'];
$rec = new DBrecord("tips", $id);

// �оݥ����ӥ��ε����Ȱۤʤ���404.php�إ�����쥯��
$service = explode(',', $rec->service_category);
if (!in_array(1, $service, false)) {
    header('Location: '.$SITE_URL.'404.php');
}

if($rec->content){
    $content = htmlspecialchars($rec->content, ENT_QUOTES, $charset = "EUC-JP");
    $patarn = "/&lt;a(.*?)&quot;(.*?)&quot;(.*?)&gt;(.*?)&lt;\/a&gt;/is";
    $replacement = '<a${1}"${2}"${3}>${4}</a>';
    $content = preg_replace($patarn,$replacement,$content);

    $posted_date = str_replace('-','/',$rec->posted_date);
}
?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<?php if($rec->content){ ?>
<title><?php secure_print($rec->title); ?> - <?php secure_print($posted_date); ?> | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פξ㳲�����ƥʥ󥹾���<?php secure_print($posted_date); ?>��<?php secure_print($rec->title); ?>">
<?php } else { ?>
<title>�㳲�����ƥʥ󥹾��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">
<?php } ?>
<?php if($rec->show_flag): ?>
<meta name="robots" content="noindex">
<?php endif; ?>

</head>

<body id="pid-support">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("support/subnav.php"); ?>
        </header>
        <!-- /.main-header -->

        <?php include("topicpath.php"); ?>

        <article class="section">
<?php if($rec->content){ ?>
            <h3 class="section_ttl"><?php secure_print($rec->title); ?></h3>
            <div class="section_body">
                <p class="base-color font-bold"><?php secure_print(date('(Yǯm��d�����Ǻ�)', strtotime($posted_date))); ?></p>
                <p><?php print nl2br($content); ?></p>
            </div>
<?php } ?>
            <footer class="section_footer">
                <p class="tac"><a class="btn btn_blue" href="support/information.php">�㳲�����ƥʥ󥹾�������<i class="ico ico_refresh"></i></a></p>
            </footer>
        </article>
        <!-- /.section -->

    </section>
    <!-- /.main -->

    <div class="sub">
<?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->

</div>
<!-- /.contents -->

<?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("bottom.php"); ?>