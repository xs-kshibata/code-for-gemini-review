<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>自動更新を設定したのに引き落としが行われません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="クレジットカードやあと払い（ペイディ）の登録のみでは、自動更新は行われません。該当のご契約に対して自動更新の設定を行ってください。また、自動更新を設定してもすぐには引き落としは行われません。引き落としが行われるタイミン…">

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
            
                <h3 class="sub-ttl">自動更新を設定したのに引き落としが行われません。</h3>
                
                <p>クレジットカードやあと払い（ペイディ）、プリペイドの登録のみでは、自動更新は行われません。<br>
                    該当のご契約に対して自動更新の設定を行ってください。</p>
                <p>また、自動更新を設定してもすぐには引き落としは行われません。引き落としが行われるタイミングにつきましては、<a href="../../manual/man_order_pay_method_autopay.php">こちら</a>をご確認ください。</p>
                <aside class="msg msg_caution">
                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                    <div class="msg_body">
                        <p>試用期間中のサーバーなど、本契約となっていないご契約に対しては自動更新が行われません。<br>
                            初回のお支払いは必ず3・6・12・24・36ヶ月単位でのお支払いをお願いいたします。</p>
                    </div>
                </aside>

                            
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