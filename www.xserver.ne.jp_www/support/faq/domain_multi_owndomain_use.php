<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーID.xsrv.jpではなく、取得した独自ドメインを利用したいです。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーID.xsrv.jpというドメインは、サーバー契約時に自動生成される初期ドメインです。お客様が取得した独自ドメインを利用したい場合は、サーバーパネルの「ドメイン設定」よりドメイン設定の追加を行っていただければ、独自ドメインを…">

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
            
                <h3 class="sub-ttl">サーバーID.xsrv.jpではなく、取得した独自ドメインを利用したいです。</h3>

                <p>サーバーID.xsrv.jpというドメインは、サーバー契約時に自動生成される初期ドメインです。<br>
                お客様が取得した独自ドメインを利用したい場合は、サーバーパネルの「<a href="../../manual/man_domain_setting.php">ドメイン設定</a>」よりドメイン設定の追加を行っていただければ、独自ドメインをエックスサーバーで利用することが可能です。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi.php" class="btn btn_gray">「マルチドメイン」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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