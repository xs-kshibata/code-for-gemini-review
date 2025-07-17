<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>アンチウィルス機能を利用したい - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="当サービスでは、アンチウィルス機能を標準で提供していますので、お客様にて設定していただく必要はございません。当サービスのメールサーバーを利用したメール送信・受信の際にウィルスチェックを行い、ウィルスを検知した場合は…">

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
            
                <h3 class="sub-ttl">アンチウィルス機能を利用したい</h3>

                <p>当サービスでは、アンチウィルス機能を標準で提供していますので、お客様にて設定していただく必要はございません。</p>
                <p>当サービスのメールサーバーを利用したメール送信・受信の際にウィルスチェックを行い、<br>
                ウィルスを検知した場合は、当該メールを削除するとともに、以下の方法で通知をいたします。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メール受信時</dt>
                    <dd>ウィルスを検知して削除した旨を【送信元(From)メールアドレス宛】にメールで通知をします。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メール送信時</dt>
                    <dd>ウィルスを検知して削除した旨を【送信元(From)メールアドレス宛】にメールで通知をします。</dd>
                </dl>

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