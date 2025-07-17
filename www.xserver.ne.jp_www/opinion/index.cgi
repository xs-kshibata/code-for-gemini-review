#!/usr/bin/php-cgi
<?php

$include_base = "/home/xserver/public_html/";

include($include_base."conf.php");
include($include_base."header.php");
?>

<link href="<?php print_fileURL("css/contents/opinion.css"); ?>" rel="stylesheet">

<title>ご意見・ご要望フォーム | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

</head>

<body id="pid-opinion">

<div id="wrapper">

<?php include($include_base."header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <h2 class="ttl"><span class="label label_ttl-opinion">ご意見やご感想、ご要望などをお聞かせください</span></h2>
        
        <?php include($include_base."topicpath.php"); ?>
        
        <div class="opinion">

                                <?php
                require_once '/home/xserver/opinion/app/Tethna_Controller.php';
                Tethna_Controller::main('Tethna_Controller', array('*'), 'index');
                ?>

        </div>
        <!-- /.opinion -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include($include_base."sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include($include_base."footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include($include_base."bottom.php"); ?>