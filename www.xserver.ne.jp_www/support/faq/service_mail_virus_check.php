<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ウィルスチェック機能はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、弊社サービスでは国際的にも高評価を受けているWithSecure社のアンチウィルスプログラムを使用しています。ウィルスチェックは送信時・受信時ともに行われ、メールにウィルスが含まれている場合、該当メールを削除したうえで…">

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
            
                <h3 class="sub-ttl">ウィルスチェック機能はありますか？</h3>

                <p>はい、弊社サービスでは国際的にも高評価を受けているWithSecure社のアンチウィルスプログラムを使用しています。</p>
                <p>ウィルスチェックは送信時・受信時ともに行われ、メールにウィルスが含まれている場合、該当メールを削除したうえで「ウィルスを検知した」という内容のメールを【送信元】アドレスへ通知します。</p>
                <p class="note mb0">※通知は【送信元】に届き、該当メールは自動的に削除されるため、宛先にはメールが届きません。</p>
                <p class="note">※サーバーの標準機能のため、お客様での設定は必要ありません。</p>
                
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