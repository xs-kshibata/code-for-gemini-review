<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<link href="<?php print_fileURL("css/contents/info.css"); ?>" rel="stylesheet">

<title>�����ȥޥå� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��׸��������ȤΥ����ȥޥåפǤ���">

</head>

<body id="pid-info">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">

        <?php include("topicpath.php"); ?>
    
        <h2 class="ttl"><span class="label label_ttl-sitemap">�����ȥޥå�</span></h2>
        
<?php include("sitemap_content.php"); ?> 
        
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