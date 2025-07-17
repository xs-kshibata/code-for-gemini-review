<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Gmail「メール送信者のガイドライン」に対応していますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい。2024年2月のGmail「メール送信者のガイドライン」変更に伴い、「DKIM」「DMARC」「SPF」について対応しました。">

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

                <h3 class="sub-ttl">Gmail「メール送信者のガイドライン」に対応していますか？</h3>

                <p>
                    はい。2024年2月のGmail「メール送信者のガイドライン」変更に伴い、「DKIM」、「DMARC」、「SPF」について対応しました。<br>
                    詳細は以下のインフォメーションをご確認ください。
                </p>


                <strong class="yellow">参考：</strong>
                <a href="https://www.xserver.ne.jp/news_detail.php?view_id=12026">Google社発表の「メール送信者のガイドライン」に関するご案内と設定状況の確認のお願い</a>

                <br><br>
                <p>各設定に関しましては、下記項目をご確認下さい。</p>
                <ul class="list list_arrow-right">
                    <li><a href="../../manual/man_mail_dkim.php">DKIM設定</a></li>
                    <li><a href="../../manual/man_mail_spf.php">SPF設定</a></li>
                    <li><a href="../../manual/man_mail_dmarc.php">DMARC設定</a></li>
                </ul>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail.php" class="btn btn_gray">「メールの機能・仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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