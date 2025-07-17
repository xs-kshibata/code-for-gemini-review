<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>有効期限に問題のないドメインが突然使えなくなりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="InterNIC Whoisないし各ドメイン管理会社様が提供するWhois検索ページにて該当ドメイン名を検索し、Status（ステータス）欄に「clientHold」と記載されていないかご確認ください。Whois情報上に「clientHold」が記載されている場合…">

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
            
                <h3 class="sub-ttl">有効期限に問題のないドメインが突然使えなくなりました。</h3>

                <p><span class="link"><a href="http://www.internic.net/whois.html" target="_blank">InterNIC Whois</a><i class="ico ico_new-window"></i></span>ないし各ドメイン管理会社様が提供するWhois検索ページにて該当ドメイン名を検索し、Status（ステータス）欄に「clientHold」と記載されていないかご確認ください。</p>
                <p>Whois情報上に「clientHold」が記載されている場合、ドメイン管理会社の判断によりドメインの利用が凍結されています。<br>
                詳細はドメイン管理会社へご確認ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_trouble.php" class="btn btn_gray">「Webサイト・WordPressのトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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