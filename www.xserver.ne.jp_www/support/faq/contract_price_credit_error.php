<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>クレジットカードで支払う際に、エラーが表示されて決済ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下をご確認ください。・入力されているカード情報に誤りがないか・「3Dセキュア2.0」が設定されているクレジットカードで…">

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
            
                <h3 class="sub-ttl">クレジットカードで支払う際に、エラーが表示されて決済ができません。</h3>
                
                <p>以下をご確認ください。</p>
                <div class="border border_gray">
                    <ul class="ul">
                        <li>入力されているカード情報に誤りがないか</li>
                        <li>「3Dセキュア2.0」が設定されているクレジットカードであるか</li>
                        <li>クレジットカードの利用が制限されていないか</li>
                    </ul>
                </div>
                <p>クレジットカードのご契約状況については、ご利用のカード会社へお問い合わせください。</p>
                <p>また、クレジットカードで決済ができない際は、「銀行振り込み」や「コンビニエンスストア払い」など別のお支払い方法もご検討ください。</p>

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