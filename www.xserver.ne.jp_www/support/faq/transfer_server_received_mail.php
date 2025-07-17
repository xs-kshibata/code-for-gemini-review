<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転の際に、移転元サーバーから過去の受信メールは引き継げますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー間で過去の受信メールなどのデータを引き継ぐことはできません。必要な場合は、ご利用のパソコンのメールソフトなどローカル環境にてバックアップを行いデータを保持してください。メールソフトでのバックアップ方法については、ソフトの提供元・・・">

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
            
                <h3 class="sub-ttl">サーバー移転の際に、移転元サーバーから過去の受信メールは引き継げますか？</h3>

                <p>サーバー間で過去の受信メールなどのデータを引き継ぐことはできません。<br>必要な場合は、ご利用のパソコンのメールソフトなどローカル環境にてバックアップを行いデータを保持してください。<br>メールソフトでのバックアップ方法については、ソフトの提供元へご確認ください。</p>
               
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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