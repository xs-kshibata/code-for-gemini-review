<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>日本語ドメイン（漢字などを使った独自ドメイン）は使えますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、利用可能です。サーバーパネル上からドメイン設定の追加を行えます。　※日本語ドメインの追加設定を行う際、punyコードで入力する必要はありません。">

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
            
                <h3 class="sub-ttl">日本語ドメイン（漢字などを使った独自ドメイン）は使えますか？</h3>

                <p>はい、利用可能です。<br>
                サーバーパネル上からドメイン設定の追加を行えます。</p>
                <p class="note">※日本語ドメインの追加設定を行う際、punyコードで入力する必要はありません。</p>            

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi.php" class="btn btn_gray">「マルチドメイン」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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