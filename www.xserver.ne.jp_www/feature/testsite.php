<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/feature.css"); ?>" rel="stylesheet">

<title>�ƥ��ȥ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΥ쥹�ݥ�®�٤򤪿����������ˤ���ǧ�����������Ȥ���ǽ�Ǥ����ƥ��ȥե����롢�ƥ��ȥ����ȤϤ�����⸽���罸��Υ����С������֤���Ƥ��ޤ���">

</head>

<body id="pid-feature">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-feature"><i class="ico ico_display"></i>��Ĺ</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <h3 class="ttl"><span class="label">�ƥ��ȥ�����</span></h3>

        <p class="mb30">
            ��󥿥륵���С��Υ쥹�ݥ󥹤�<b>�������������ˤ���ǧ</b>�����������Ȥ���ǽ�Ǥ���<br>
            �ʲ��β����ե����롦�����̥ե����뤬�֤��Ƥ���Τϡ�<b>�ºݤ˸����罸��Υ����С�</b>�ȤʤäƤ��ޤ���
        </p>
        <div class="test-btns clearfix">
            <?php
                // �ƥ��ȥ����Ȥ�URL
                //$current_server = file_get_contents($SECURE_URL.'xinfo/?action_api2_getcurrentserver=true');
                $url = $SECURE_URL.'xinfo/?action_api2_getcurrentserver=true';
                $ch = curl_init();
                curl_setopt( $ch, CURLOPT_URL, $url );
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                $res = curl_exec( $ch );
                curl_close( $ch );
                $current_server = $res;
                
                if(!is_numeric($current_server))$current_server = 7019;
                $TEST_SITE_URL = "https://sv$current_server.xserver.jp/";
            ?>
            <a class="test-btn hover" href="<?php print $TEST_SITE_URL; ?>site_speedtest/test01.jpg" rel="nofollow">
                <img class="test-btn_img" src="../img/feature/img_photo.png" alt="">
                ����JPEG�ե�����1<span class="test-btn_size">��<span class="font-xl font-bold base-color">80</span>KB</span>
            </a>
            <a class="test-btn hover" href="<?php print $TEST_SITE_URL; ?>site_speedtest/test02.jpg" rel="nofollow">
                <img class="test-btn_img" src="../img/feature/img_photo.png" alt="">
                ����JPEG�ե�����2<span class="test-btn_size">��<span class="font-xl font-bold base-color">90</span>KB</span>
            </a>
            <a class="test-btn hover" href="<?php print $TEST_SITE_URL; ?>site_speedtest/test03.jpg" rel="nofollow">
                <img class="test-btn_img" src="../img/feature/img_photo.png" alt="">
                ����JPEG�ե�����3<span class="test-btn_size">��<span class="font-xl font-bold base-color">60</span>KB</span>
            </a>
            <a class="test-btn hover" href="<?php print $TEST_SITE_URL; ?>site_speedtest/test.zip" rel="nofollow">
                <img class="test-btn_img" src="../img/feature/img_folder.png" alt="">
                ������ZIP���̥ե�����<span class="test-btn_size">��<span class="font-xl font-bold base-color">105</span>MB</span>
            </a>
            <a class="test-btn hover" href="<?php print $TEST_SITE_URL; ?>site_speedtest/xtest/" target="_blank" rel="nofollow">
                <img class="test-btn_img" src="../img/feature/img_browser.png" alt="">
                �ƥ��ȥ�����
            </a>
        </div>
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>