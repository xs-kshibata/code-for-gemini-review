<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>料金の未払いによりサーバー契約が凍結されました。今から料金を支払えば引き続き利用できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー凍結からの時間経過により利用可否が異なります。詳細は以下をご参考ください。XServerアカウント内、エックスサーバー契約管理ページの「料金支払い」→「お支払い/請求書発行」の「料金のお支払い手続き」に表示されるサーバー契約…">

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
            
                <h3 class="sub-ttl">料金の未払いによりサーバー契約が凍結されました。今から料金を支払えば引き続き利用できますか？</h3>
                
                <p>サーバー凍結からの時間経過により利用可否が異なります。詳細は以下をご参考ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウント内、エックスサーバー契約管理ページの「料金支払い」→「お支払い/請求書発行」の「料金のお支払い手続き」に表示されるサーバー契約</dt>
                    <dd>
                        <p class="mt5"><img class="img" src="../../img/faq/faq_contract_renewal4.png?date=20230130" alt="サーバー契約のスクリーンショット"></p>
                        <p>ご利用料金をお支払いいただくことで、引き続き該当のサーバーIDを使用することが可能です。<br>
                        お支払いが反映されたのち、凍結解除まで最大1日程度かかりますので、あらかじめご了承ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウント内、エックスサーバー契約管理ページの「料金支払い」→「お支払い/請求書発行」の「料金のお支払い手続き」に表示されないサーバー契約</dt>
                    <dd><p class="mt5"><img class="img" src="../../img/faq/faq_contract_renewal5.png?date=20230130" alt="サーバー契約のスクリーンショット"></p>
                        <p>ご利用期限終了から長期間経過したため、サーバーアカウントは削除されています。<br>
                            大変申し訳ございませんが、該当サーバーIDの契約は再開できません。</p>
                    </dd>
                </dl>
                
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