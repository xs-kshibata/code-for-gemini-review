<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSL証明書のサーバーへのインストールなど、独自SSLを利用するための設定作業は必要ですか。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="いいえ、独自SSLの設定作業は、すべて当サポートで行います。作業が完了しましたら、登録メールアドレス宛に作業完了の連絡をいたします。なお、「独自IPアドレスあり」で独自SSLを申し込み、ネームサーバーが当サービス以外の場合は…">

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
            
                <h3 class="sub-ttl">SSL証明書のサーバーへのインストールなど、独自SSLを利用するための設定作業は必要ですか。</h3>
                
                <p>いいえ、独自SSLの設定作業は、すべて当サポートで行います。<br>
                作業が完了しましたら、登録メールアドレス宛に作業完了の連絡をいたします。</p>
                <p>なお、「独自IPアドレスあり」で独自SSLを申し込み、ネームサーバーが当サービス以外の場合は、SSL証明書でご利用のホスト名(コモンネーム)のDNS Aレコードを当サポートよりご案内する「SSL専用IPアドレス」に修正していただく必要があります。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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