<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webフォントを利用したサイトを印刷したり、PDF化したりすることは可能ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、可能です。 ただし、Webフォントはブラウザ上の表示のための仕組みとなりますので、出力やPDF化については、各ブラウザの機能や仕様に依存します。したがいまして出力結果の保証はできません。印刷が表示フォントとは異なる場合…">

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
            
                <h3 class="sub-ttl">Webフォントを利用したサイトを印刷したり、PDF化したりすることは可能ですか？</h3>

                <p>はい、可能です。 ただし、Webフォントはブラウザ上の表示のための仕組みとなりますので、出力やPDF化については、各ブラウザの機能や仕様に依存します。<br>
                したがいまして出力結果の保証はできません。<br>印刷が表示フォントとは異なる場合、ブラウザで初期設定されているフォントなどで印刷される場合があります。<br>異なるブラウザやバージョンでもご確認ください。</p>

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