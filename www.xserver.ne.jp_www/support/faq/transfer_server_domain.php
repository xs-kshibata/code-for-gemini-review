<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転とドメイン移管をする場合、どちらを先に行えばよいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転とドメイン移管をする場合、ドメインの利用期限に1ヶ月以上の余裕があれば、サーバー移転から行うことをお勧めしています。ただ、…">
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
            
                <h3 class="sub-ttl">サーバー移転とドメイン移管をする場合、どちらを先に行えばよいですか？</h3>

                <p>サーバー移転とドメイン移管をする場合、ドメインの利用期限に1ヶ月以上の余裕があれば、<br>
                    サーバー移転から行うことをお勧めしています。</p>
                <p>ただ、現在のドメイン管理会社にてネームサーバーの変更ができない場合は、先にドメイン移管を行ってください。</p>

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