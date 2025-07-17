<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPress簡単移行で何ができますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="他社サーバーからのサイト移転や、運用中のWordPressを別のURLに変更したい場合などにご利用いただけます。">

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
            
                <h3 class="sub-ttl">WordPress簡単移行で何ができますか？</h3>

                <p>他社サーバーからのサイト移転や、運用中のWordPressを別のURLに変更したい場合などにご利用いただけます。<br>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>他社サーバーからエックスサーバーへの移行（ドメイン名が同じ場合）</dt>
                    <dd class="ml15">移行可能です。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>他社サーバーからエックスサーバーへの移行（ドメイン名が異なる場合）</dt>
                    <dd class="ml15">移行可能です。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>エックスサーバー間の移転（ドメイン名が同じ場合）</dt>
                    <dd class="ml15">移行できません。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>エックスサーバー間の移転（ドメイン名が異なる場合）</dt>
                    <dd class="ml15">移行可能です。</dd>
                </dl>
                ※WordPress内の設定によっては本機能を利用できない場合もあります。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_transfer_wp.php" class="btn btn_gray">「WordPress簡単移行」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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