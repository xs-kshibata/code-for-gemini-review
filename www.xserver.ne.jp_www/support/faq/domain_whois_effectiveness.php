<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Whois情報の欄に「メールアドレスの有効性が未確認です」と表示されています。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ICANNのWhois正確性プログラムに基づき、上位レジストラによるWhois情報に登録されているメールアドレスの有効性(送受信の可否)確認が完了していないため、上記の案内が表示されます。メールアドレスにおける有効性の確認作業を…">

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
            
                <h3 class="sub-ttl">Whois情報の欄に「メールアドレスの有効性が未確認です」と表示されています。</h3>
                
                <p>ICANNのWhois正確性プログラムに基づき、上位レジストラによるWhois情報に登録されているメールアドレスの有効性(送受信の可否)確認が完了していないため、上記の案内が表示されます。</p>
                            
                <p>メールアドレスにおける有効性の確認作業を完了することで、表示されなくなります。</p>
                
                <p>「有効性確認メールを送信する」ボタンをクリックすると、Whois情報に登録のメールアドレス宛に有効性の確認を求めるメールが届きますので、 
                メールの本文にある認証URLにアクセスすることで、有効性の確認作業が完了します。</p>
                
                <p class="note">※一部のドメインでは、以上とは異なる方法で有効性の確認をしています。<br>
                対象となるお客様には、随時メールでご案内いたします。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_whois.php" class="btn btn_gray">「Whois」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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