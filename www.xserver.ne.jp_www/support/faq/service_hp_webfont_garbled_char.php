<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>文字が正しく表示されず、文字化けのような現象が起きているのですが… - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="文字が正しく表示されない場合、次のことをご確認ください。　・異なるブラウザやバージョンでもご確認ください。　・閲覧するWebブラウザで正しいエンコーディングを設定してください。　・書体によって表示できる文字種が異なります…">

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
            
                <h3 class="sub-ttl">文字が正しく表示されず、文字化けのような現象が起きているのですが…</h3>

                <p>文字が正しく表示されない場合、次のことをご確認ください。</p>
                <ul class="ul">
                    <li>異なるブラウザやバージョンでもご確認ください。</li>
                    <li>閲覧するWebブラウザで正しいエンコーディングを設定してください。</li>
                    <li>書体によって表示できる文字種が異なります。その場合、別の書体に置き換えてください。</li>
                    <li>機種依存文字（例：数字が丸で囲まれたもの）は、閲覧環境によっては表示されません。</li>
                    <li>ノーブレークスペース(NBSP)などの特殊文字は他の文字に置き換わることがあります。</li>
                </ul>

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