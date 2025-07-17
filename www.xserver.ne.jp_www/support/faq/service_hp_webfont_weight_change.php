<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>文字を太字に変更したいのですが設定が反映されません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Webフォントはフォント本来の太さで表示する関係上、Bタグやfont-weightなどの太字設定は無効となります。太字を適用したい場合は太字にしたい範囲を別のタグで囲み、現在のフォントよりも太いWebフォントを適用してください。">

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
            
                <h3 class="sub-ttl">文字を太字に変更したいのですが設定が反映されません。</h3>

                <p>Webフォントはフォント本来の太さで表示する関係上、Bタグやfont-weightなどの太字設定は無効となります。<br>
                太字を適用したい場合は太字にしたい範囲を別のタグで囲み、現在のフォントよりも太いWebフォントを適用してください。</p>
                                   
                <i class="ico ico_square-fill"></i>HTML
                <pre class="code">&lt;p&gt;Webフォントは<span class="base-color font-bold">&lt;b&gt;美しい！&lt;/b&gt;</span>&lt;/p&gt;</pre>

                <i class="ico ico_square-fill"></i>CSS
                <pre class="code">p{ font-family: "新ゴ R"; }
<span class="base-color font-bold">b{ font-family: "新ゴ B"; }</span></pre>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_webfont.php" class="btn btn_gray">「Webフォント」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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