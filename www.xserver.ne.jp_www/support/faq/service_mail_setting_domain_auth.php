<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールアカウント作成時に、ドメイン認証を求められる。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の条件に当てはまる場合、ドメイン認証が必要となる可能性があります。　・当社サービス「エックスドメイン」で取得したドメイン名ではない場合　・エックスサーバー以外でドメイン名をご利用中の場合　「Web認証」または「メール認証」を…">

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
            
                <h3 class="sub-ttl">メールアカウント作成時に、ドメイン認証を求められる。</h3>

                <p>以下の条件に当てはまる場合、ドメイン認証が必要となる可能性があります。</p>
				<ul class="list list_arrow-right">
					<li>当社サービス「エックスドメイン」で取得したドメイン名ではない場合</li>
					<li>エックスサーバー以外でドメイン名をご利用中の場合</li>
				</ul>
				<p>「Web認証」または「メール認証」を行っていただくか、ネームサーバーをエックスサーバー指定のものに変更していただくことで、メールアカウントの追加が可能となります。<br><br>
                	 詳細は、「<a href="../../manual/man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
				</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">「メールの設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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