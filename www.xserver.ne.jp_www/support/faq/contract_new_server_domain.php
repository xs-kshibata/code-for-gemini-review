<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーと独自ドメインを同時に申し込むことはできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーとドメインは別個にお申し込みいただく必要があります。「お申し込みフォーム」から…">

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
            
                <h3 class="sub-ttl">サーバーと独自ドメインを同時に申し込むことはできますか？</h3>
                
                <p>基本的に、サーバーとドメインは別個にお申し込みいただく必要があります。</p>

                <p>「<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">お申し込みフォーム</a>」から、サーバーのお申し込みを行ってください。<br>
                    サーバーのお申し込み後、お客様のアカウント情報をご登録メールアドレス宛にお送りいたします。<br>
                    メールが届きましたら、「XServerアカウント」よりドメインのお申し込みを行ってください。</p>

                <p>ドメインのお申し込みについて詳しくは「<a href="https://www.xdomain.ne.jp/manual/man_order_domain.php#an2-0" target="_blank">XServerドメイン公式サイト</a>」をご覧ください。</p>

                <p>なお、WordPressクイックスタートでお申し込みをしていただく場合は、サーバーと独自ドメインを同時にお申し込みすることが可能です。</p>

                
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