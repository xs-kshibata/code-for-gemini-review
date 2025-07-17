<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>移管承認メールを誤って破棄してしまいました。再送はできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="移管承認メールは上位機関より送信されるため、再送手続きを行うことができません。…">

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
            
                <h3 class="sub-ttl">移管承認メールを誤って破棄してしまいました。再送はできますか？</h3>
				
                <p>移管承認メールは上位機関より送信されるため、再送手続きを行うことができません。</p>
                <p>承認メールが確認できない場合は、移管が未完了になるまでお待ちいただく必要があります。<br>
                ドメイン移管が未完了になりましたら、ご登録メールアドレス宛に“ドメイン移管未完了のお知らせ”をお送りします。</p>
                <p>メールが届き次第、XServerアカウントより、再度「移管申請」をおこなってください。</p>
                <p><img class="img" src="../../img/faq/faq_transfer_domain1.png?date=20220216" alt="移管申請をクリックしているスクリーンショット"></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_domain.php" class="btn btn_gray">「ドメイン移管」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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