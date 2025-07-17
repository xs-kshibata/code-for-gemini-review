<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>インラインフレームのフレーム内にWebフォントが適用されません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="インラインフレーム iframe を利用する場合は、フレーム内のページ（子ページ）だけでなく、フレームにあたる親ページにも、TypeSquareの専用タグ記述と、親ページ内の iframe ダグに対して、font-familyの指定が必要になります。">

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
            
                <h3 class="sub-ttl">インラインフレームのフレーム内にWebフォントが適用されません。</h3>

                <p>インラインフレーム&lt;iframe&gt;を利用する場合は、フレーム内のページ（子ページ）だけでなく、フレームにあたる親ページにも、TypeSquareの専用タグ記述と、親ページ内の&lt;iframe&gt;ダグに対して、font-familyの指定が必要になります。</p>
               
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