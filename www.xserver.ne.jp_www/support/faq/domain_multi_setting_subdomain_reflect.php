<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サブドメインは設定後、どれくらいで利用できるようになりますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネルの「サブドメイン設定」より追加後、最大1時間程度でご利用いただけるようになります。　※DNSの変更を伴う場合、DNSの反映には数時間から最大24時間程度かかる場合があります。">

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
            
                <h3 class="sub-ttl">サブドメインは設定後、どれくらいで利用できるようになりますか？</h3>
                
                <p>サーバーパネルの「サブドメイン設定」より追加後、最大1時間程度でご利用いただけるようになります。<br>※DNSの変更を伴う場合、DNSの反映には数時間から最大24時間程度かかる場合があります。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi_setting.php" class="btn btn_gray">「ドメイン設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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