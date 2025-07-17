<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>契約更新の手続きはどのようにするのですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServerアカウント内、「料金支払い」メニューより契約更新の料金をお支払いください。　1.XServerアカウント内、エックスサーバー契約管理ページの「料金支払い」メニューをクリックします。　2.「料金のお支払い手続き」の契約一覧から…">

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
            
                <h3 class="sub-ttl">契約更新の手続きはどのようにするのですか？</h3>
                
                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、「料金支払い」メニューより契約更新の料金をお支払いください。</p>
                <ol class="ol">
                    <li>XServerアカウント内、エックスサーバー契約管理ページの「料金支払い」メニューをクリックします。
						<p class="mt5"><img class="img" src="../../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
					</li>
                    <li>
						<p>「料金のお支払い手続き」の契約一覧から、更新を行うものに【チェックマークを入れ】、契約期間を選択してから「支払方法を選択する」ボタンをクリックしてください。</p>
						<p class="mt5"><img class="img" src="../../img/faq/faq_contract_renewal2.png?date=20220216" alt="支払方法を選択するをクリックしているスクリーンショット"></p>
					</li>
                    <li>料金の内訳をご確認の上、ご希望のお支払い方法の決済画面へお進みいただき、お支払手続きを行ってください。</li>
                </ol>
                <p>SSL証明書の場合は、料金をお支払いいただいた後、更新申請を行う必要があります。<br>
                    詳しい手順は<a href="../../manual/man_order_ssl.php#update_ssl">こちら</a>もご参照ください。</p>
                
                    <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_renewal.php" class="btn btn_gray">「契約更新」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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