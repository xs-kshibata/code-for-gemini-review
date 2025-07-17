<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ドメイン移管の際に、ドメインの利用期限はどうなりますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="移管元のWhois情報上の利用期限から1年延長された日付が新しい利用期限になります。移管元から引き継がれる契約期間はドメインの種類によって異なります。">

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
            
                <h3 class="sub-ttl">ドメイン移管の際に、ドメインの利用期限はどうなりますか？</h3>

                <p>移管元のWhois情報上の利用期限から1年延長された日付が新しい利用期限になります。<br>移管元から引き継がれる契約期間はドメインの種類によって異なります。</p>
				
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>「.com」「.net」など「.jp」以外のドメイン</dt>
                    <dd>Whois情報上の利用期限は最長で10年です。<br>
                        利用期限日まで9年未満の場合は、移管元の契約期間がそのまま引き継がれます。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>「.co.jp」「.ne.jp」などの「.jp」ドメイン</dt>
                    <dd>
                        <p>Whois情報上の利用期限は最長で1年となります。<br>
                            移管元で複数年の契約をされていた場合、Whois情報上の利用期限を超える契約期間は引き継ぐことができません。</p>
                    </dd>
                </dl>
                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_domain_about_whois.php">Whoisについて</a></p>
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