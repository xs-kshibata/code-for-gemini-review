<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「一組織一ドメイン名違反です」と表示され、ドメインの取得申請ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ご入力された登記情報で、すでにドメインを取得されている場合に表示されるエラーです。.co.jp/.or.jp/.ac.jp/.ed.jp/は、1法人につき1つしか取得ができません。【.jp】や【.com】など個数制限のないドメインで取得することを…">

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
            
                <h3 class="sub-ttl">「一組織一ドメイン名違反です」と表示され、ドメインの取得申請ができません。</h3>
                
                <p>ご入力された登記情報で、すでにドメインを取得されている場合に表示されるエラーです。<br>
                    .co.jp/.or.jp/.ac.jp/.ed.jp/は、1法人につき1つしか取得ができません。<br>
                    【.jp】や【.com】など個数制限のないドメインで取得することをご検討ください。</p>
                <p>※取得申請ができずお申し込みのキャンセルを希望される場合は、<a href="../../support/support.php" target="_blank">サポート</a>までお問い合わせください。</p>
                                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_take.php" class="btn btn_gray">「ドメイン新規取得」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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