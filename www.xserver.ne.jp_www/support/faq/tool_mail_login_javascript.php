<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ログインボタンを押しても反応がありません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="お使いのブラウザでJavaScriptが無効となっている可能性がございます。以下のサイトに対してJavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。　・https://*.xserver.ne.jp…">

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
            
                <h3 class="sub-ttl">ログインボタンを押しても反応がありません。</h3>

                <p>お使いのブラウザでJavaScriptが無効となっている可能性がございます。</br>
                    以下のサイトに対してJavaScriptを有効な状態にしてから再度ページを読み込み、ログインをお試しください。</br>
                    https://*.xserver.ne.jp</br>
                    https://www.google.com</br>
                    https://www.gstatic.com</br>
                </p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_mail.php" class="btn btn_gray">「WEBメール」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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