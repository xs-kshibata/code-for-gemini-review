<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「エックスサーバー 設定完了のお知らせ」のメールを紛失してしまいました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="それぞれ専用のページから各種情報の再設定が可能です。再設定手続きが行えない場合は、サポートへご連絡ください。">

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
            
                <h3 class="sub-ttl">「エックスサーバー 設定完了のお知らせ」のメールを紛失してしまいました。</h3>
                
                <p>下記ページから各種情報の再設定が可能です。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>登録情報（XServerアカウントのIDやパスワードなどの情報）</dt>
                    <dd><a href="<?php print $REISSUE_INFO_URL; ?>"><?php print $REISSUE_INFO_URL; ?></a></dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーアカウント情報（サーバーIDやFTPホスト、メールサーバーなどの情報）</dt>
                    <dd><a href="<?php print $REISSUE_SERVER_URL; ?>"><?php print $REISSUE_SERVER_URL; ?></a></dd>
                </dl>
                <p>再設定手続きが行えない場合は、サポートへご連絡ください。</p>

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new_trouble.php" class="btn btn_gray">「契約・料金のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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