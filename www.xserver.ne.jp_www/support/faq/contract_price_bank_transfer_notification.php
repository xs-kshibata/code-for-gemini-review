<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>銀行振込で支払いをしましたが、確認通知が届きません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="三井住友銀行以外からお振込みをされる際は、振込元銀行の仕様により入金反映が翌営業日となる場合があります。翌営業日となっても確認通知が届かない場合は、以下の手順でお支払いの詳細をご連絡ください。1.XServerアカウント内のお支払い…">

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
            
                <h3 class="sub-ttl">銀行振込で支払いをしましたが、確認通知が届きません。</h3>
                
                <p>三井住友銀行以外からお振込みをされる際は、振込元銀行の仕様により入金反映が翌営業日となる場合があります。<br>
                    翌営業日となっても確認通知が届かない場合は、以下の手順でお支払いの詳細をご連絡ください。</p>

                <ol class="ol">
                    <li><p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内のお支払いいただいたサービスの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約更新・料金支払い」をクリックしてください。</p>
                        <p class="mt5"><img class="img" src="../../img/faq/faq_contract_price4.png?date=20241203" alt="「契約更新・料金支払い」をクリックしているスクリーンショット"></p>
                    </li>

                    <li>
                        <p>料金支払いメニューから、「お支払い報告フォーム」をクリックしてください。</p>
                        <p class="mt5"><img class="img" src="../../img/faq/faq_contract_price2.png?date=20230130" alt="お支払い報告画面"></p>
                    </li>
                </ol>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_price.php" class="btn btn_gray">「料金」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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