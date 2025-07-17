<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>件名が「ウィルス検出通知/VIRUS DETECTION」のメールを受け取りました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="当サービスでは独自のウィルスチェック機能を有しており、お客様が受信したメールにウィルスが検出された場合に、その旨を通知しております。この通知メールの件名が「ウィルス検出通知/VIRUS DETECTION」であり、ウィルスが検出された…">

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
            
                <h3 class="sub-ttl">件名が「ウィルス検出通知/VIRUS DETECTION」のメールを受け取りました。</h3>

                <p>当サービスでは独自のウィルスチェック機能を有しており、メールがウィルス検知された場合、その旨を送信者に通知しております。</p>
                <p>この通知メールの件名が「ウィルス検出通知/VIRUS DETECTION」であり、ウィルスが検出された添付ファイルは削除されますが、通知メールの本文には元のメールの件名や添付ファイル名などが記載されております。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_viruscheck.php" class="btn btn_gray">「ウィルスチェック」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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