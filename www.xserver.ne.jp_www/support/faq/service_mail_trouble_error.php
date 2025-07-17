<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>身に覚えのないメールのエラーが頻繁に戻ってくるようになりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の理由により、お客様のメールアカウントが不正に利用されている可能性があります。　1.お客様がお使いのPCがウィルスに感染し、メールパスワードが流出した　2.メールパスワードが単純なもので設定されており、推測され不正にメールを…">

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
            
                <h3 class="sub-ttl">身に覚えのないメールのエラーが頻繁に戻ってくるようになりました。</h3>

                <p>以下の理由により、お客様のメールアカウントが不正に利用されている可能性があります。</p>
                <div class="border border_gray">
                    <ol class="ol mb0">
                        <li>お客様がお使いのPCがウィルスに感染し、メールパスワードが流出した</li>
                        <li>メールパスワードが単純なもので設定されており、推測され不正にメールを送信された</li>
                    </ol>
                </div>
                <p>サーバーパネル「メールアカウント設定」より該当メールアドレスのパスワードを変更し、エラーメールが減少するかご確認ください。</p>
                <p class="note">※パスワードの変更により不正なメール送信がなくなった場合にも、電子メールの仕組み上、エラー戻りが完全になくなるまでには数日程度かかる場合があります。</p>
                <p>あわせて、お客様がお使いのPCがウイルス等に感染していないか、セキュリティチェックを行ってください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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