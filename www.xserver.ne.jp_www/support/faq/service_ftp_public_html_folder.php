<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>public_html フォルダとは何ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="public_html はドキュメントルートと呼ばれ、ホームページのデータ（HTMLファイルや画像データファイルなど）を置くためのディレクトリです。インターネット上で公開したいデータは必ずこのフォルダ内にアップロードを行っていただく必要が…">

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
            
                <h3 class="sub-ttl">public_html フォルダとは何ですか？</h3>

                <p>public_html はドキュメントルートと呼ばれ、ホームページのデータ（HTMLファイルや画像データファイルなど）を置くためのディレクトリです。<br>
                インターネット上で公開したいデータは必ずこのフォルダ内にアップロードを行っていただく必要があります。</p>
                <p>逆に、ホームページとして公開したくないファイルをアップロードしたい場合は public_html/ より上に置くことで通常よりセキュリティを確保できます。</p>


                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp.php" class="btn btn_gray">「ファイル転送(FTP)の機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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