<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>XServerドメインにドメイン移管が完了した後、必要な作業はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン移管に関しては、移管後に必要な作業はありません。別途サーバー移転をされる場合は、必要に応じてネームサーバーの変更を行ってください。">

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
            
                <h3 class="sub-ttl">XServerドメインにドメイン移管が完了した後、必要な作業はありますか？</h3>

                <p>ドメイン移管に関しては、移管後に必要な作業はありません。<br>
                    別途サーバー移転をされる場合は、必要に応じてネームサーバーの変更を行ってください。</p>

                <p><strong class="yellow">参考：</strong><a href="../../manual/man_domain_namesever_setting.php">ネームサーバーの設定</a></p>
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_domain.php" class="btn btn_gray">「ドメイン移管」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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