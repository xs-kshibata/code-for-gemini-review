<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<title>404 Not Found | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $SITE_DESCRIPTION; ?>">

</head>

<body id="pid-404">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <h2 class="ttl"><span class="label label_ttl-notfound">404 Not Found</span></h2>
        
        <section class="section">
            <h3 class="section_ttl">��õ���Υڡ��������Ĥ���ޤ���Ǥ���</h3>
            <div class="section_body">
                <p>
                    �����ͤ���õ���Υڡ����ϡ�������줿�������ɥ쥹���ѹ����줿��ǽ��������ޤ���<br>
                    ������Ǥ��������������ȥޥåפ����Ū�Υڡ�����õ������������
                </p>
                <p class="mb40">�ޤ����֥å��ޡ�������Ͽ����Ƥ�����ϡ�������Ǥ���������ѹ��򤪴ꤤ�������ޤ���</p>
                
                <h4 class="sub-ttl">�����ȥޥå�</h4>

<?php include("sitemap_content.php"); ?>

            </div>
        </section>
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