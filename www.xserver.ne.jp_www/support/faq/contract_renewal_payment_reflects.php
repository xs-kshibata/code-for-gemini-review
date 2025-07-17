<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>支払いが反映されるまでの時間を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="■銀行振り込みの場合　お振り込み元の金融機関にもよりますが、お振り込み完了後、数時間〜最大2日程度で反映します。お支払いが反映しない場合は、「お支払い報告（リンク）」よりご連絡ください。■クレジットカード/あと払い（ペイディ）/プリペイド決…">

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
            
                <h3 class="sub-ttl">支払いが反映されるまでの時間を教えてください。</h3>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>銀行振り込みの場合</dt>
                    <dd><p>お振り込み元の金融機関にもよりますが、お振り込み完了後、数時間〜最大2日程度で反映します。</p>
                        <p>お支払いが反映しない場合は、「<a href="../../manual/man_order_pay_report.php">お支払い報告</a>」よりご連絡ください。</p>
                        <img class="img" src="../../img/faq/faq_contract_price2.png?date=20230130" alt="お支払い報告画面">
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>クレジットカード/あと払い（ペイディ）/プリペイド決済の場合</dt>
                    <dd>お支払い完了後、即時反映します。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>コンビニ/ペイジー払いの場合</dt>
                    <dd>お支払い完了後、2〜3時間程度で反映します。</dd>
                </dl> 
                
                <p>当サービスにてお支払いの確認が取れましたら、登録メールアドレス宛にメールでお知らせします。</p>

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