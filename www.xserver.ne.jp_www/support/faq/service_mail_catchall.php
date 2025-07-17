<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>キャッチオールの機能はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン名が同じであれば、存在しないメールアドレスでも受信する「キャッチオール機能」については、迷惑メールなどの受信率が高くなり、メールサーバーの負荷が大きくなってしまう懸念があるため、大変申し訳ございませんが…">

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
            
                <h3 class="sub-ttl">キャッチオールの機能はありますか？</h3>

                <p>ドメイン名が同じであれば、存在しないメールアドレスでも受信する「キャッチオール機能」については、迷惑メールなどの受信率が高くなり、メールサーバーの負荷が大きくなってしまう懸念があるため、大変申し訳ございませんが、現在対応しておりません。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail.php" class="btn btn_gray">「メールの機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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