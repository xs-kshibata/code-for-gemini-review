<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メーリングリストで配信するメールの送受信数に上限はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、契約サーバーアカウントごとにメール送信件数における上限の目安を設けています。送信件数の目安は以下です。...">

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
            
                <h3 class="sub-ttl">メーリングリストで配信するメールの送受信数に上限はありますか？</h3>

                <p>はい、契約サーバーアカウントごとにメール送信件数における上限の目安を設けています。<br>
                    送信件数の目安は以下です。</p>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>メール送信数の目安</dt>
                    <dd>1,500通/時間<br>
                        15,000通/日</dd>
                </dl>

                <p>なお、メーリングリスト・メールマガジン機能では、10人のメンバーに1通のメールを配信を行うと、10通とカウントします。</p>

                <strong class="yellow">関連マニュアル：</strong>
                <a href="../../manual/man_mail_spec.php">メール仕様一覧</a>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailinglist.php" class="btn btn_gray">「メーリングリスト機能」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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