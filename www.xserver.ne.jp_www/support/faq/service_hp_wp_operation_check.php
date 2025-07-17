<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressの移転に際して「動作確認URL」機能を使いましたが、動作確認ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="WordPressはプログラムの仕組み上、「動作確認URL」機能では動作を確認することができません。ご利用のPC端末におけるhostsファイルを編集する方法で動作をご確認ください。">

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
            
                <h3 class="sub-ttl">WordPressの移転に際して「動作確認URL」機能を使いましたが、動作確認ができません。</h3>

                <p>WordPressはプログラムの仕組み上、「動作確認URL」機能では動作を確認することができません。<br>ご利用のPC端末におけるhostsファイルを編集する方法で動作をご確認ください。</p>
                <p>詳細な手順は、マニュアル「<a href="../../manual/man_domain_checkproxy.php#hosts">動作確認について ＞ WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>」をご参照ください。</p>

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