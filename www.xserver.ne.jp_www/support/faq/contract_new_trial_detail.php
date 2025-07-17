<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>お試し期間の詳細について教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="お申し込み後10日間がお試し期間となります。メールアカウントの作成、サーバープログラム(CGI/PHP等)によるメール送受信、追加FTPアカウントの作成などが制限されていますが、ほぼ正式なサーバーと同様の機能をお使いいただくことができます。">

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
            
                <h3 class="sub-ttl">お試し期間の詳細について教えてください。</h3>
                
                <p>お申し込み後10日間がお試し期間となります。<br>
                メールアカウントの作成、サーバープログラム(CGI/PHP等)によるメール送受信、追加FTPアカウントの作成などが制限されていますが、ほぼ正式なサーバーと同様の機能をお使いいただくことができます。</p>
                <p class="note">※お試し期間中、お支払手続きを行われますと、本契約となり上記機能がすぐにご利用いただけます。</p>
                <p>詳しくは、<a href="../../manual/man_order_free_trial.php">「無料お試し期間について」</a>をご覧ください。</p>

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new.php" class="btn btn_gray">「新規契約」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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