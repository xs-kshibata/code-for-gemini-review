<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>社名が変わったので契約名義を変更したいです。手続き方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="書面による「名義変更」申請により、ご契約の名義を変更することができます。詳細は、「ご契約名義を変更する場合」のマニュアルをご確認ください。">

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
            
                <h3 class="sub-ttl">社名が変わったので契約名義を変更したいです。手続き方法を教えてください。</h3>
                
                <p>書面による「名義変更」申請により、ご契約の名義を変更することができます。<br>詳細は、<a href="../../manual/man_order_name_change.php">「ご契約名義を変更する場合」</a>のマニュアルをご確認ください。</p>
                <p>例）有限会社が株式会社に変わった。</p>
                <p class="note">※別法人（A社からB社）へ権利譲渡を行う場合は、<a href="../../manual/man_order_transfer_usage_rights.php">「第三者にご契約を譲渡する場合」</a>のマニュアルをご確認ください。</p>

                
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_alteration.php" class="btn btn_gray">「契約変更」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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