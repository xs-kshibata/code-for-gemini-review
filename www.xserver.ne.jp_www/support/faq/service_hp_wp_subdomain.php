<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サブドメインにWordPressをインストールする方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の手順でインストールを行ってください。1.「サブドメイン設定」にてサブドメインを追加する2.「WordPress簡単インストール」にて対象ドメインでメインドメインを選択する3.インストール画面「サイトURL」のプルダウンより、追加したサブドメインを…">

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
            
                <h3 class="sub-ttl">サブドメインにWordPressをインストールする方法を教えてください。</h3>

                <p>以下の手順でインストールを行ってください。</p>

                <ol class="ol ol_margin">
                    <li>「<a href="../../manual/man_domain_subdomain_setting.php">サブドメイン設定</a>」にてサブドメインを追加する</li>
                    <li>「<a href="../../manual/man_install_auto_word.php">WordPress簡単インストール</a>」にて対象ドメインでメインドメインを選択する</li>
                    <li>インストール画面「サイトURL」のプルダウンより、追加したサブドメインを選択してインストールする</li>
                </ol>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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