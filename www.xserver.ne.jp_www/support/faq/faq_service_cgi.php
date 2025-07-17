<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>CGI - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜CGIのご利用に関するよくある質問です。Perlのパスやパーミッションについて、利用可能なPerlモジュールの確認方法など。">

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
            
                <h3 class="sub-ttl">CGI</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./service_cgi_install.php" class="faqList__label"><i class="ico ico_chevron-right"></i>CGIを使うにはどこに設置すればいいですか？</a></li>
                        <li class="faqList__item"><a href="./service_cgi_permission.php" class="faqList__label"><i class="ico ico_chevron-right"></i>パーミッション設定はどうすればいいですか？</a></li>
                        <li class="faqList__item"><a href="./service_cgi_perl_module.php" class="faqList__label"><i class="ico ico_chevron-right"></i>標準で利用できるPerlモジュールを教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_cgi_perl_pass.php" class="faqList__label"><i class="ico ico_chevron-right"></i>Perlのパスを教えてください。</a></li>
                        <li class="faqList__item"><a href="./service_cgi_gd_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>GDは使えますか？</a></li>
                        <li class="faqList__item"><a href="./service_cgi_jcode.php" class="faqList__label"><i class="ico ico_chevron-right"></i>jcode.pmは使用できますか？</a></li>
                        <li class="faqList__item"><a href="./service_cgi_suexec.php" class="faqList__label"><i class="ico ico_chevron-right"></i>suEXECには対応していますか？</a></li>
                        <li class="faqList__item"><a href="./service_cgi_500.php" class="faqList__label"><i class="ico ico_chevron-right"></i>CGIを設置すると「500 Internal Server Error」が表示されます。</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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