<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>送信した覚えのないメールですが、ウィルスが検出されたとの通知を受け取りました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="送信元(From)をお客様のメールアドレスに偽装した「なりすまし」のウィルス付きメールが、第三者により送信された可能性があります。そちらのメールが宛先に届かず返送され、アンチウィルス機能により検知された可能性が考えられます。メールのヘッダー情報など…">

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
            
                <h3 class="sub-ttl">送信した覚えのないメールですが、ウィルスが検出されたとの通知を受け取りました。</h3>

                <p>送信元(From)をお客様のメールアドレスに偽装した「なりすまし」のウィルス付きメールが、第三者により送信された可能性があります。</p>
                <p>そちらのメールが宛先に届かず返送され、アンチウィルス機能により検知された可能性が考えられます。</p>
                <p>メールのヘッダー情報などを確認することで、外部サーバーから送信された偽装メールか、または何らかの原因で当サービスのサーバー経由で送信されたものかどうかを判断することができます。</p>
                <p>お客様にて判断が難しい場合は、届いたエラーメールのヘッダー情報や本文を記載し、「<a href="../../support/support.php">サポート</a>」よりメールで問い合わせください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_viruscheck.php" class="btn btn_gray">「ウィルスチェック」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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