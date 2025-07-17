<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>他社からXServerドメインへ移管する際の移管承認メールは、どのメールアドレスに届きますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン移管時の移管承認メールは、Whois情報にドメイン登録者連絡先として登録されているメールアドレス(registrant contact)宛てに送信されます。...">

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

                <h3 class="sub-ttl">他社からXServerドメインへ移管する際の移管承認メールは、どのメールアドレスに届きますか？</h3>

                <p>ドメイン移管時の移管承認メールは、Whois情報にドメイン登録者連絡先として登録されているメールアドレス(registrant contact)宛てに送信されます。<br>
                    registrant contactに設定されているメールアドレスは、「<a href="https://lookup.icann.org/en" target="_blank">InterNIC Whois</a>」や各ドメイン管理会社様が提供するWhois検索ページからご確認いただけます。<br><br>

                    なお、「.jp/都道府県.jp/co.jp/or.jp/ne.jp/gr.jp/ac.jp/ed.jp ドメイン」の場合は、お客様にて承認は不要なため、承認メールは届きません。<br>
                    承認については、現在の管理会社様（移管元）へご確認ください。</p>

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