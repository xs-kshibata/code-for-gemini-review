<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転の際に、Webサイトの表示やメールの送受信が停止することはありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転はドメインのネームサーバーなどDNSを変更することで完了します。ネームサーバーなどDNSを変更する前に、Webサイトやメールアカウントなどの必要な事前設定を行っていれば、サービスを停止させずにサーバーを移転することが可能です">

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
            
                <h3 class="sub-ttl">サーバー移転の際に、Webサイトの表示やメールの送受信が停止することはありますか？</h3>


                <p>サーバー移転はドメインのネームサーバーなどDNSを変更することで完了します。<br>
                ネームサーバーなどDNSを変更する前に、Webサイトやメールアカウントなどの必要な事前設定を行っていれば、サービスを停止させずにサーバーを移転することが可能です。<br>
                移転の詳しい手順については「<a href="../../order/order_transfer_server.php" target="_blank">サーバー移転</a><i class="ico ico_new-window"></i>」のマニュアルをご確認ください。</p>
               
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