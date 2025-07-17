<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転の際に、ネームサーバーを変更すると、どれくらいで反映しますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ネームサーバーは変更後、数時間~最大24時間程度で徐々に反映します。ネームサーバーの変更中は、移転元・移転先のどちらのサーバーに繋がるか予測できない期間が発生します。丸1日程度様子を見たうえで、Webサイトの表示やメールの送受信をご確認ください。">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">サーバー移転の際に、ネームサーバーを変更すると、どれくらいで反映しますか？</h3>

                <p>ネームサーバーは変更後、数時間~最大24時間程度で徐々に反映します。</p>
                <p>ネームサーバーの変更中は、移転元・移転先のどちらのサーバーに繋がるか予測できない期間が発生します。</p>
                <p>丸1日程度様子を見たうえで、Webサイトの表示やメールの送受信をご確認ください。</p>

                <p><strong class="yellow">関連マニュアル：</strong><a href="../../order/order_transfer_server.php">サーバー移転</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

            </section>
            <!-- /.col-main -->
            
            <aside class="col-side">
<?php include("sidemenu.php"); ?>
            </aside>
            <!-- /.col-side -->
        
        </div>
        <!-- /.clearfix -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>