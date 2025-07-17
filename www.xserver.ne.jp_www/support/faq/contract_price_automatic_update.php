<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>利用料金の自動更新はできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、クレジットカードと、あと払い(ペイディ)・プリペイドによる自動更新の設定が可能です。詳しくはマニュアル「自動更新設定」をご覧ください。">

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
            
                <h3 class="sub-ttl">利用料金の自動更新はできますか？</h3>
                
                <p>はい、クレジットカードと、あと払い(ペイディ)・プリペイドによる自動更新の設定が可能です。<br>詳しくは「<a href="../../manual/man_order_pay_method_autopay.php">自動更新設定</a>」をご覧ください。</p>
				<ul class="note-list">
				<li>※利用料金の自動更新は契約更新のみ対応しており初回のお支払いではご利用いただけません。</li>
				<li>※口座振替によるお支払いについては対応しておりません。</li>
				</ul>
            
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