<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webフォントとは何ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Webフォントとは、サーバー上にあるWebフォントファイルを参照し、どの端末からホームページを見ても同じ文字デザインを表示することができる機能です。通常、サイトに文字を表示する場合は、端末にインストールされているフォントを…">

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
            
                <h3 class="sub-ttl">Webフォントとは何ですか？</h3>

                <p>Webフォントとは、サーバー上にあるWebフォントファイルを参照し、どの端末からホームページを見ても同じ文字デザインを表示することができる機能です。</p>
                <p>通常、サイトに文字を表示する場合は、端末にインストールされているフォントを呼び出すため、端末の種類によって見え方が違う場合があります。<br>
                一方、Webフォントは、指定したフォントをどの端末でも表示することができるので、安定したデザインを閲覧者に提供することができます。</p>
                <p>また、Webサイトでの利用を前提とされているので、識字性に優れ、自動翻訳や音声読み上げにも連携しやすいメリットがあります。</p>
                
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