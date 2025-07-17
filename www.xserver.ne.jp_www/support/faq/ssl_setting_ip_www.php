<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「独自IPアドレスあり」で、「www」ありのコモンネームで独自SSLを申し込みました。「www」なしのアドレスでSSLページへアクセスするにはどうすればよいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「独自IPアドレスあり」で「wwwありのコモンネーム」で独自SSLを契約した場合、SSL設定の完了後DNSレコードを編集することにより、wwwなしのアドレスでSSLページへアクセスすることが可能になります。">

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
            
                <h3 class="sub-ttl">「独自IPアドレスあり」で、「www」ありのコモンネームで独自SSLを申し込みました。「www」なしのアドレスでSSLページへアクセスするにはどうすればよいですか？</h3>
                
                <p>「独自IPアドレスあり」で「wwwありのコモンネーム」で独自SSLを契約した場合、SSL設定の完了後DNSレコードを編集することにより、wwwなしのアドレスでSSLページへアクセスすることが可能になります。</p>
                <p>詳細は独自SSLのお申し込みマニュアルの「<a href="../../manual/man_order_ssl_domain.php#twoway">新規取得手続き完了</a>」をご参照ください。</p>

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